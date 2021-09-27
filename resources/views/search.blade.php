@extends('master')

@section('content')

{{-- trending products --}}
<div class="container mt-5">
<div class="row">
  <h4>SEARCHED RESULTS:</h4>
  @foreach ($searchedData as $item)
    <div class="col-4 mb-3 ml-3 mt-3">
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