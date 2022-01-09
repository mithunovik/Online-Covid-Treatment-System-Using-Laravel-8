<?php 
use App\Http\Controllers\HomeController;
$total=HomeController::cartItem();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Covid Treatment System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="text-primary">Covid</span>-Treatment System</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
            <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
   <b> Medical</b>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('doctors')}}">Doctors</a>
    <a class="dropdown-item" href="{{url('patients')}}">Patients</a>
    <a class="dropdown-item" href="#">Ambulance</a>
    <a class="dropdown-item" href="{{url('pharmacy')}}">Pharmacy</a>
    <a class="dropdown-item" href="#">Blood</a>
    <a class="dropdown-item" href="#">Called For Covid Sample</a>
  </div>
</div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('cartlist')}}">Cart({{$total}})</a>
            </li>
            
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
            </li>
            <x-app-layout>
    
            </x-app-layout>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
   
  </header>
  
  <h5><a href="/pharmacy">Go back</a></h5>


  <div class="container">
        <div class="row">
        
          <div class="col-sm-6">
            
            <img src="https://image.freepik.com/free-photo/buying-medical-supplies-with-shopping-cart-concept_23-2148439068.jpg" height="280px" width="270px"   alt="">

            </div>
         
          
          <div class="col-sm-6">
            
            <h2>Medicine Name: {{$medicine->name}}</h2>
            <p>Description: {{$medicine->description}}</p>
            <b>Price: {{$medicine->price}}Tk</b><br>
            <form action="/add_to_cart" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$medicine['id']}}">
            <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
  
              
            
            </form><br>
            <a href="{{url('cartlist')}}" class="btn btn-success"><i class="fa fa-shopping-bag"></i> Buy Now</a>

           

          </div>

        </div>

      </div>
 
   

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

  
</body>
</html>