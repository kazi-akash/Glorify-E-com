@extends('master')

@section('content')
   <div class="container mt-5">
    <div class="row">
     <div class="">
      <form class="mx-auto" style="height: 435px; width: 500px;">
     <h3 class="mt-4">User Login</h3>
     <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" aria-describedby="emailHelp">
     </div>
     <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control">
     </div>
     <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
     </div>
    </div>
    
   </div>
@endsection