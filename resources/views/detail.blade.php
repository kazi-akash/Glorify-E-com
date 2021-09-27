@extends('master')

@section('content')
   {{-- <div class="container mt-5" style="height: 500px;">
    <div class="row text-center">
     <div class="col-6">
      <h4 class="text-start mb-4">Product Image</h2>
       <img src="{{$productDetails['gallery']}}" class="rounded img-thumbnail p-5" alt="...">
     </div>
     <div class="col-6 d-flex align-items-center justify-content-start">
      <div class="text-start">
       <div class="card mb-3" style="max-width: 22rem;">
       <div class="card-header">PRODUCT DETAILS</div>
       <div class="card-body text-dark">
       <h5 class="card-title">{{$productDetails['name']}}</h5>
       <p class="card-text">{{$productDetails['description']}}</p>
       <P>Category: {{$productDetails['category']}}</P>
       <p>Price ${{$productDetails['price']}}/-USD</p>
       <a type="button" class="btn btn-outline-dark">Add to the cart</a>
       <a type="button" class="btn btn-outline-dark">Buy Now</a>
       </div>
      </div>
      
     </div>
    </div>
   </div>
   </div> --}}
   <div class="container mt-5 mb-5">
  
  <div class="card mx-auto border-warning">
  <div class="row g-0">
    <div class="col-md-6 d-flex align-items-center">
      <img src="{{$productDetails['gallery']}}" class="img-fluid rounded-start" alt="..." style="padding: 40px" >
    </div>
    <div class="col-md-5 mt-5 mb-5 text-dark ml-2 rounded-3" style="margin-left: 40px;">
      <div class="card-body">
        <h5 class="card-title">{{$productDetails['name']}}</h5>
        <p class="card-text">{{$productDetails['description']}}</p>
        <p class="card-text">Category: {{$productDetails['category']}}</p>
        <p class="card-text">Price ${{$productDetails['price']}}/-USD</p>
        <p class="card-text"><small class="text-dark">Last updated 3 mins ago</small></p>
        <div class="d-flex">
          <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$productDetails['id']}}">
          <button type="submit" class="btn btn-outline-warning" style="margin-right: 1rem">Add to cart</button>
          </form>

         <a type="button" class="btn btn-outline-warning">Buy Now</a>
        </div>
        
      </div>
  </div>
</div>
    </div>
   </div>
@endsection