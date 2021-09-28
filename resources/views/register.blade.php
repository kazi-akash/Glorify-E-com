@extends('master')

@section('content')
    <div class="contaienr mt-4" style="min-height: 480px">
      <div class="mx-auto" style="width: 500px">
            <small class="border-bottom">User Registration</small>
            <form method="POST" action="register" class="mt-3">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="name"  id="name" >
                    <label for="name">Name</label>
                    <small id="emailHelp" class="form-text text-danger">
                    @error('name')
                       #{{$message}}
                    @enderror
                    </small>
                     
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="email" name="email" id="email">
                    <label for="email">Email</label>
                     @error('email')
                        <span id="emailHelp" class="form-text text-danger">#{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control" type="password" name="password" id="password">
                    <label for="nupasswordmber">Password</label>
                     @error('password')
                        <span id="emailHelp" class="form-text text-danger">#{{ $message }}</span>
                    @enderror
                </div>
                    <div id="emailHelp" class="form-text">#We'll never share your information with anyone else.</div>
                    <div class="d-grid mt-3">
                     <button class="btn btn-outline-warning d-grid" type="submit">Create an account</button>
                    </div>
            </form>
    </div>
     </div>
@endsection