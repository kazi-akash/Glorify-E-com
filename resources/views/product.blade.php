@extends('master')

@section('content')

<div class="container custom-product">
 <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
  @foreach($productData as $item)
     <div class="carousel-item {{$item['id']==1? 'active': ''}}" data-bs-interval="4000">
      <a href="details/{{$item['id']}}">
      <img class="mx-auto slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block slider-text">
        <h5>{{$item['name']}}</h5>
        <p>WE BRING TOGETHER!</p>
      </div>
      </a>
     </div>
  @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

{{-- trending products --}}
<div class="container mt-5">
<div class="row">

  @foreach ($productData as $item)
    <div class="col-4 mb-3 ml-3">
      <a href="details/{{$item['id']}}" style="text-decoration: none; color: black" class="">
      <div class="card" style="width: 18rem;">
          <img src="{{$item['gallery']}}" style="max-height: 200px" class="card-img-top" alt="...">
          <span class="hr"></span>
          <div class="card-footer">
          <h5 class="card-title">{{$item['name']}}</h5>
          <p class="card-text"><strong>${{$item['price']}}</strong></p>
    </div>
    </a>
    </div>
    </div>
  @endforeach
   
  </div>
</div>
@endsection