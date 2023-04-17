<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // 
    function index() {
        $data = Product::all();
        return view('product', ["products"=>$data]);
    }

    function details($id) {
        $data = Product::find($id);
        return view('details', ["product_details"=>$data]);
    }

    function search(Request $req) {
        $data = Product::where("name","LIKE", "%".$req->input('query')."%")->get(); 
        if(count($data) > 0) {
            return view('search', ["search_product"=>$data]);
        } else {
            return view('error', ["message"=>"No Result Found!"]);
        }
    }

    function addToCart(Request $req) {
        if($req->session()->has("user")) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get("user")['id'];
            $cart->product_id = $req->product_id;
            $result = $cart->save();

            if($result) {
                return redirect('/');
            }
        } else {
            return redirect("login");
        }
    }

    static function cartItem() {
        $user_id = Session::get("user")['id'];
        return Cart::where("user_id", $user_id)->count();
    }

    function cartList() {
        if(Session::has("user")) {
        $user_id = Session::get("user")['id'];
        $products = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $user_id)
        ->select('products.*', 'carts.id as cart_id')
        ->get();

        if(count($products) > 0) {
            return view('cartlist', ["products"=>$products]);
        } else {
            return view('error', ["message"=>"Cart is Empty!"]);
        }
    } else {
        return view('error', ["message"=>"Cart is Empty!"]);
    }
    }

    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow() {
        if(Session::has("user")) {
            $user_id = Session::get("user")['id'];
            $total = $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->sum('products.price');

            return view('ordernow', ["total"=>$total]);
        }
    }

    function orderPlace(Request $req) {
        $user_id = Session::get('user')['id'];
        $allcart = Cart::where('user_id', $user_id)->get();

        foreach($allcart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $user_id)->delete();
        }
        return redirect('/');
    }

    function myOrders() {
        if(Session::has("user")) {
            $user_id = Session::get("user")['id'];
            $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

            return view('myorders', ["orders"=>$orders]);
        } else {
            return view('error', ["message"=>"Order is Empty!"]);
        }
    }
}
