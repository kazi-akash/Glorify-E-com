@php
    $total_sum = 0;
@endphp
@extends('master')

@section('content')
    <div class="container mt-3">
     <div class="row" style="min-height: 470px">
        <div class="col-6">
        <div class="mx-auto" style="width: 500px">
            <small class="border-bottom">ITEMS AND PRICES</small>
            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <P class="border-bottom">{{$products->count()}} ITEMS</P>
                <P class="border-bottom">PRICE</P>
            </li>
            </ul>
            
            <ul class="list-group">
                @foreach ($products as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$item->name}}
                    <span class="badge bg-primary rounded">$ {{$item->price}}</span>
                </li>
                @php
                    $total_sum+= $item->price
                @endphp
                
                @endforeach
            </ul>
        </div>
      </div>
      <div class="col-6">
        <div class="mx-auto" style="width: 500px">
            <small class="border-bottom">SHIPPING & BILLING</small>
            <form method="POST" action="payment" class="mt-3">
                @csrf
                <div class="form-floating mb-2">
                    <input class="form-control" type="text" name="name" value="{{Session::get('user')['name']}}" placeholder="Your name here" id="name">
                    <label for="name">Name</label>
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control" type="email" name="email" value="{{Session::get('user')['email']}}" placeholder="Your email here" id="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control" type="number" name="number" value="" placeholder="Your number here" id="number" required>
                    <label for="number">Number</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" type="text" name="address" placeholder="Leave a comment here" id="address"></textarea>
                    <label for="address">Delivery Address</label>
                </div>
            
            <div class="mt-2"></div>
            <small class="border-bottom">Order Summary</small>
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center mt-3">
                <span>Subtotal  <small>({{$products->count()}} items)</small></span> 
                <span class="badge bg-primary rounded">$ {{$total_sum}}</span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Shipping fee
                <span class="badge bg-primary rounded">$ 2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Total
                <span class="badge bg-primary rounded">$ {{$total_sum+2}}</span>
            </li>
            </ul>


            <div class="mt-2"></div>
            <small class="border-bottom">SELECT PAYMET METHOD</small>
            <div class="d-flex mt-2 justify-content-between">
                <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="ssl commerce" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                SSL COMMERCE
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="credit/devit card" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                CREDIT/DEVIT CARD
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="home delivery" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
                HOME DELIVERY
            </label>
            </div>
            </div>
            
            <div class="d-grid mt-3"><button class="btn btn-warning">Proceed to pay</button></div>
            </form>
        </div>

     </div>
    </div>
@endsection