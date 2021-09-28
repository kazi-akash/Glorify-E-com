@extends('master')

@section('content')
  <div class="container mt-5">
   <div class="mx-auto" style="width: 600px; min-height: 470px">
    <h3 class="mb-4">Product Details</h3> 
    
    @foreach ($cartProduts as $item)
    <div class="d-flex">
     <div class="card mb-3" style="max-width: 600px;">
    <div class="row g-0">
    <div class="col-md-4" style="max-height: 300px">
     <img src="{{$item->gallery}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
     <div class="card-body">
       <h5 class="card-title">{{$item->name}}</h5>
       <p class="card-text">Price: ${{$item->price}}</p>
       <p class="card-text"><small class="text-muted">Category: {{$item->category}}</small></p>
     </div>
    </div>
    </div>
    </div>

    <div class="d-flex align-items-center" style="margin-left: 20px">
     <a href="deleteitem/{{$item->cart_id}}" class="btn btn-outline-danger btn-lg"><i class="fas fa-trash"></i></a>
    </div>
    </div>
    @endforeach
   <div class="d-grid mt-3" style="margin-right: 70px"><a href="checkout" class="btn btn-outline-warning justify-content-end">Proceed to checkout</a></div>
   </div>
   
  </div>
@endsection