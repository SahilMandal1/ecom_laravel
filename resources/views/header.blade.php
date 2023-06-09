<?php
  use App\Http\Controllers\ProductController;
  $total_cart_items = 0;
  if(Session::has("user")) {
    $total_cart_items = ProductController::cartItem();
  }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><b>E-Com</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart({{$total_cart_items}})</a>
        </li>
        @if(Session::has("user"))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Guest
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li><a class="dropdown-item" href="/register">Register</a></li>
          </ul>
        </li>
        @endif
      </ul>
      <form action="/search" class="d-flex w-50" role="search">
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" name="query" required>
        <button class="btn btn-outline-success w-25" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>