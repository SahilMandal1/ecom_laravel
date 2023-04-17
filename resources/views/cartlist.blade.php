@extends('master')
@section('content')

<div class="container mt-5">
    <h4 class="mb-3 text-success">Result for Product</h4>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $sno=1; ?>
  @foreach($products as $item)
    <tr class="align-middle">
      <th scope="row">{{$sno++}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}/-</td>
      <td><img src="{{$item->gallery}}" alt="" style="width:5rem"></td>
      <td>
        <a class="btn btn-warning btn-sm">Edit</a>
      </td>
      <td><a href="/removecart/{{$item->cart_id}}" class="btn btn-danger btn-sm">Remove</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="mt-5">
<a href="/"><button class="btn btn-primary">Continue Shopping</button></a>
<a href="#"><button class="btn btn-secondary mx-2">Checkout</button></a>
</div>
</div>

@endsection
