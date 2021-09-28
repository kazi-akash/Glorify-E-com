@php
   use App\Http\Controllers\ProductController;
   if (Session::has('user')) {
      $totalItems = ProductController::cartItems();
   }
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">🅶🅻🅾🆁🆈 🅴🅲🅾🅼</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orders">Orders</a>
        </li>
        <form action="/search" class="d-flex">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search" style="width: 500px">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
      </ul>

       <a class="position-relative" href="{{Session::has('user')? '/cart': '/login'}}" style="margin-right: 1rem; margin-top: 8px">
          <i class="fas fa-shopping-cart text-dark fs-4"></i>
          <small><span class="position-absolute top-0 start-100 rounded-pill translate-middle badge bg-warning" style="border: 2px solid white;">
            <span class="bg-waring" style="color: white; padding: 0;">
              {{Session::has('user')? $totalItems: 0}}
            </span>
          </span></small>
        </a>

       <ul class="navbar-nav justify-content-end mb-2 mb-lg-0" style="margin-right: 20px">
        @if (Session::has('user'))
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        @endif
  
      </ul>
      
    </div>
  </div>
</nav>