@extends('master')
@section('content')
<div class="container mt-4">
<h3 class="text-center mb-5">Result for Search Products</h3>

<div class="search-products">
@foreach($search_product as $item)
<a href="details/{{$item['id']}}" class="text-decoration-none">
<div class="card p-1 mx-2 mb-4" style="width: 20rem;">
  <img src="{{$item['gallery']}}" class="card-img-top w-75" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item['name']}}</h5>
    <h5 class="text-success">Price : {{$item['price']}}/-</h5>
    <p class="card-text">{{$item['description']}}</p>
    <button class="btn btn-primary">Add to Cart</button>
    <button class="btn btn-success mx-2">Buy Now</button>
</div>
</div>
</a>
@endforeach
</div>
</div>
@endsection
