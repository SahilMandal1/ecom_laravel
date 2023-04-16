@extends('master')
@section('content')
<div class="custom-carousel mt-3">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
     <a href="details/{{$item['id']}}">
     <img src="{{$item['gallery']}}" class="d-block w-100 slider-img">
      <div class="carousel-caption d-none d-md-block text-background">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
     </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="trending-wrapper my-3 mx-4 ">
    <h4 class="mb-4">Trending Products</h4>
    <div class="trending-item">
        @foreach($products as $item) 
        <a href="details/{{$item['id']}}" class="text-decoration-none text-dark">
        <div class="item-center">
        <img src="{{$item['gallery']}}" class="trending-img">
        <div class="text-center mt-1">
        <h5>{{$item['name']}}</h5>
        </div>
        </div>
        </a>
        @endforeach
    </div>
    </div>
</div>
@endsection
