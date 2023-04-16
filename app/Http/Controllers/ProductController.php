<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

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
}
