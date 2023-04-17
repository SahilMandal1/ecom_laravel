@extends('master')
@section('content')

<div class="container mt-5">
    <h4 class="mb-3 text-success">My Orders</h4>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Product Image</th>
      <th scope="col">Address</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Amount (INR)</th>
    </tr>
  </thead>
  <tbody>
    <?php $sno=1; ?>
  @foreach($orders as $item)
    <tr class="align-middle">
      <th scope="row">{{$sno++}}</th>
      <td><img style="width:6rem" src="{{$item->gallery}}" alt=""></td>
      <td>{{$item->address}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->payment_status}}</td>
      <td>{{$item->payment_method}}</td>
      <td>{{$item->price}}/-</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="mt-5">
<a href="/"><button class="btn btn-primary">Continue Shopping</button></a>
</div>
</div>

@endsection
