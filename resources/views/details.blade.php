@extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <img class="details-img" src="{{$product_details['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a><br>
            <h2>{{$product_details['name']}}</h2><br>
            <h3>Price : {{$product_details['price']}}/-</h3>
            <h4>Details : {{$product_details['description']}}</h4>
            <h4>Category : {{$product_details['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product_details['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form><br>
            <button class="btn btn-success mx-2">Buy Now</button>
        </div>
    </div>
</div>
@endsection
