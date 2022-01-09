<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Online Covid Treatment System</title>

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
              <a href="#"><span class="mai-call text-primary"></span> +880-1647450709</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> msmithunovik8325@gmail.com</a>
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
        <a class="navbar-brand" href="/"><span class="text-primary">Covid Treatment</span> System</a>

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
    <a class="dropdown-item" href="{{url('ambulance')}}">Ambulance</a>
    <a class="dropdown-item" href="{{url('pharmacy')}}">Pharmacy</a>
    <a class="dropdown-item" href="#">Blood</a>
    <a class="dropdown-item" href="#">Plasma</a>
    <a class="dropdown-item" href="#">Called For Covid Sample</a>
  </div>
</div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
  <div>
      <img style="width:100%; height:500px;"  src="https://www.dhakaambulance.com.bd/public/assets/img/home3.png" alt="">
  </div>
  <div class="mx-auto" align="center">
  <h1>Ambulance Service</h1>
  </div>
  <div class="mx-auto" style="padding:10px;" align="center">
<a class="btn btn-light btn-block" href="#"><b>OUR HOSPITAL</b></a>
  </div>
  <div class="mx-auto" style="padding:10px;" align="center">
<a class="btn btn-info btn-block" href="{{url('dhaka')}}"><b>DHAKA</b></a>
<a  class="btn btn-dark btn-block" href="{{url('cha')}}"><b>CHITTAGONG</b></a>
</div>
<div class="mx-auto" style="padding:10px;" align="center">
<a class="btn btn-secondary btn-block" href="{{url('sylhet')}}"><b>SYLHET</b></a>
<a class="btn btn-primary btn-block" href="{{url('mymens')}}"><b>MYMENSINGH</b></a>
</div>
<div class="mx-auto" style="padding:10px;" align="center">
<a class="btn btn-danger btn-block" href="{{url('rang')}}"><b>RANGPUR</b></a>
<a class="btn btn-primary btn-block" href="{{url('rajshahi')}}"><b>RAJSHAHI</b></a>
</div>
<div class="mx-auto" style="padding:10px;" align="center">
<a class="btn btn-warning btn-block" href="{{url('khulna')}}"><b>KHULNA</b></a>
<a class="btn btn-secondary btn-block" href="{{url('barishal')}}"><b>BARISHAL</b></a>
</div>
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">South Khulshi,Chittagong</p>
          <a href="https://www.facebook.com/mithun.sutradhar.399041/" class="footer-link">Mithun Sutradhar</a>
          <a href="#" class="footer-link">covidtreatment@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2021 <a href="https://www.facebook.com/mithun.sutradhar.399041/" target="_blank">Mithun Sutradhar</a>. All right reserved</p>
    </div>
  </footer>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>