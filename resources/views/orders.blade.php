@extends('master')

@section('content')
<div class="contaienr mt-5">
<div class="mx-auto" style="min-height: 470px">
        <div class="mx-auto" style="width: 900px">
            <small class="border-bottom">MY ORDERS</small>
            {{-- <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-around align-items-center">
                <P class="border-bottom" style="max-width: 80px">Images</P>
                <P class="border-bottom text-center" style="width: 200px" >PRICE</P>
                <P class="border-bottom">Status</P>
                <P class="border-bottom">Payment Mathod</P>
                <P class="border-bottom">Order Time</P>
            </li>
            </ul> --}}
            
            <ul class="list-group mt-2">
                @foreach ($orderProducts as $item)
                <li class="list-group-item d-flex justify-content-around align-items-center">
                    <span class="" style="max-width: 80px"><img src="{{$item->gallery}}" class="img-thumbnail" alt="..."></span>
                    <span class="" style="width: 200px">{{$item->name}}</span>
                    <span class="">PRICE: $ {{$item->price}}</span>
                    <span class="">PAYMENT METHOD: {{$item->payment_method}}</span>
                    <span class="">Contact: {{$item->number}}</span>
                </li>  
                @endforeach
            </ul>
        </div>
      </div>
</div>
    
@endsection