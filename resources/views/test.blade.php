<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DND Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

<style> body {margin: 0; padding: 0; background-color: #333333;} </style>

{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand text-warning" href="#">ND</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 fs-5">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>          
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Menu 1</a></li>
              <li><a class="dropdown-item" href="#">Menu 2</a></li>
              <li><a class="dropdown-item" href="#">Menu 3</a></li>
            </ul>
          </li> --}}
        </ul>
        <form role="search">
          <input class="form-control rounded-0" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>


{{-- header --}}
<header>
    <div class="container-fluid my-5">
        <div class="row text-center">
            <div class="col-12">
                <p class="display-1 bg-warning h-100">Neural Dragon</p>
            </div>
        </div>
    </div>
</header>

{{-- section --}}
<div class="container my-5">
    <div class="row">
        <div class="col-3 px-2">
            <div class="card bg-dark border-warning rounded-0">
                <a href="*" class="card-body">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="img"></a>                
            </div>            
        </div>
        <div class="col-3 px-2">
            <div class="card bg-dark border-warning rounded-0">
                <a href="*" class="card-body">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="img"></a>                
            </div>            
        </div>
        <div class="col-3 px-2">
            <div class="card bg-dark border-warning rounded-0">
                <a href="*" class="card-body">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="img"></a>                
            </div>            
        </div>
        <div class="col-3 px-2">
            <div class="card bg-dark border-warning rounded-0">
                <a href="*" class="card-body">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="img"></a>                
            </div>            
        </div>
    </div>
</div>

{{-- section --}}
<div class="container my-5">
    <div class="row text-center">
        <div class="col-12">
            <p class="lead fst-italic fw-bold text-danger font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, debitis quas tempora consectetur nobis nesciunt possimus, architecto at eveniet ipsam illo nemo assumenda non cupiditate corporis! Quos ipsam minima tempore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, debitis quas tempora consectetur nobis nesciunt possimus, architecto at eveniet ipsam illo nemo assumenda non cupiditate corporis! Quos ipsam minima tempore.</p>            
            <a href="#" class="btn btn-outline-warning rounded-0 m-2 px-4 py-2 fs-5">Discover</a>
        </div>
    </div>
</div>

{{-- section --}}
<div class="container my-5">
    <div class="row justify-content-between">
        <div class="col-5 px-2 mx-2">
            <h2 class="bg-dark text-white border-bottom border-start border-warning px-2 py-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse blanditiis sed voluptatem eaque ut quisquam sunt eligendi, amet itaque? Blanditiis velit cupiditate ullam quasi reiciendis non et dolore alias suscipit!</h2>
        </div>
        <div class="col-5 px-2 mx-2">
            <h2 class="bg-dark text-white border-bottom border-end border-warning px-2 py-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse blanditiis sed voluptatem eaque ut quisquam sunt eligendi, amet itaque? Blanditiis velit cupiditate ullam quasi reiciendis non et dolore alias suscipit!</h2>
        </div>
    </div>
</div>


{{-- footer --}}
    
</body>
</html>