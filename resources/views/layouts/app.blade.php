<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Green Skills Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://localhost/project/public/assets/img/gsfavicon.png" rel="icon">
  <link href="http://localhost/project/public/assets/img/gsfavicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/project/public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/project/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
 

 <link rel="stylesheet" href="path-to-lightbox/css/lightbox.min.css">
<script src="path-to-lightbox/js/lightbox.min.js"></script>

  
<!-- end -->






  <!-- Template Main CSS File -->
  <link href="http://localhost/project/public/assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html"><span>Green </span>Skills Foundation</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/project/public/" class="logo me-auto me-lg-0"><img src="assets/img/new_gsf.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/project/public/" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="about.html">About Us</a></li> -->
              <li><a href="/project/public/ourmission">Our Mission</a></li>
              <li><a href="/project/public/gsfbg" class="active">GSF BACKGROUND</a></li>
              
            </ul>
          </li>

          <li><a href="/project/public/gallery">Projects</a></li>
          <li><a href="/project/public/gallery23">Gallery</a></li>

          <!-- <li><a href="gallery.html">Gallery</a></li> -->
          <!-- <li><a href="sponsor.html">Sponsor</a></li> -->
          <li><a href="/project/public/ourmember">Our Members</a></li>

          <!-- <li><a href="/project/public/upload">Upload Images</a></li> -->



          @guest
    
@else
    @php
        $allowedUserIds = [1, 2]; // Array of allowed user IDs
    @endphp

    @if(in_array(auth()->user()->id, $allowedUserIds))
        <li><a href="/project/public/projects">Add New Project</a></li>
    @endif
@endguest


          <li><a href="/project/public/contact">Contact</a></li>

          <!-- <li><a href="/project/public/register">Register</a></li>
          <li><a href="/project/public/login">Login</a></li> -->


          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <!-- <a href="#" class="twitter"><i class="bu bi-twitter"></i></a> -->
        <a href="https://web.facebook.com/GSFSAHIWAL " target="_blank" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->

  
  <!-- End Header -->


        <main>
            @yield('content')
        </main>


        <!-- footer -->
        <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-md-3 footer-contact">
        <h3>Green Skills Foundation (Reg.) </h3>
        <p>
          Opp: House # 3 Street No.1 Rehman Town  G.T Road Sahiwal <br><br>
          <strong>Phone:</strong> 0300-5880092<br>
          <strong>Email:</strong> info@gsfoundation.org.pk <br>
        </p>
      </div>

      <div class="col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

     

      <div class=" col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Green Skills Foundation</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
        <div class="mt-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.4486859837084!2d73.10383397418889!3d30.649491489653393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7cbcce902eb%3A0x6cb543412407d81e!2sNational%20Skills%20Technical%20Training%20Institute%20Sahiwal!5e0!3m2!1sen!2s!4v1701592415481!5m2!1sen!2s" width="550" height="170" style="border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>

    </div>
    
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Foundation</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    
    </div> 
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="https://web.facebook.com/GSFSAHIWAL " target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
   
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="http://localhost/project/public/assets/vendor/aos/aos.js"></script>
<script src="http://localhost/project/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/project/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="http://localhost/project/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="http://localhost/project/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="http://localhost/project/public/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="http://localhost/project/public/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="http://localhost/project/public/assets/js/main.js"></script>
</body>

</html>
    </div>
</body>
</html>
