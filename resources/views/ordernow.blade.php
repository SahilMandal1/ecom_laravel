@extends('master')
@section('content')

<div class="container mt-4">
    <h3 class="text-success mb-4">My Orders</h3>
<table class="table">
  <tbody>
    <tr>
      <th>Amount</th>
      <td>&#x20B9; {{$total}}/-</td>
    </tr>
    <tr>
      <th>Tax</th>
      <td>&#x20B9; 0</td>
    </tr>
    <tr>
      <th>Delivery</th>
      <td>&#x20B9; 40</td>
    </tr>
    <tr>
      <th>Total Amount</th>
      <td>&#x20B9; {{$total + 40}}</td>
    </tr>
  </tbody>
</table>

<h4 class="text- text-success my-5 mb-3">Add Details</h4>


<form action="/orderplace" method="post">
@csrf
<div class="form-floating">
    <textarea required name="address" class="form-control" id="address" style="height: 100px"></textarea>
    <label for="address">Address</label>
</div>

<h5 class="mt-4">Payment Methods</h5>

<div class="form-check py-1">
  <input class="form-check-input" type="radio" name="payment" id="payment1" value="cash">
  <label class="form-check-label" for="payment1">
    Online Payment
  </label>
</div>

<div class="form-check py-1">
  <input class="form-check-input" type="radio" name="payment" id="payment2" value="cash">
  <label class="form-check-label" for="payment2">
    EMI Payment
  </label>
</div>

<div class="form-check py-1">
  <input class="form-check-input" type="radio" name="payment" id="payment2" checked value="cash">
  <label class="form-check-label" for="payment2">
    Cash on Delivery
  </label>
</div>

<input type="submit" class="btn btn-success px-5 mt-3" value="Order Now">
</form>

</div>

@endsection
