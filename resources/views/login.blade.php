@extends('master')
@section('content')
<form class="mx-auto mt-5 border p-5" method="post" action="\login" style="width:450px">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
</form>
@endsection