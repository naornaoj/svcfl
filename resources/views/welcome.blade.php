<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>SVCFL</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicon -->
      <link href="{{ asset('img/favicon.ico') }}" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
          rel="stylesheet">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

      <!-- Libraries Stylesheet -->
      <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
      <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
      <!-- Spinner Start -->
      <div id="spinner"
          class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
      </div>
      <!-- Spinner End -->

      <!-- Topbar Start -->
      <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>G. La Viña St. 8709 Valencia, Philippines</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
      </div>
      <!-- Topbar End -->

      <!-- Brand Start -->
      <div class="container-fluid bg-info text-white pb-3 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                <a href="tel:(088) 828 5017"><i class="bi bi-telephone-inbound fs-2"></i></a>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        
                        <a href="tel:(088) 828 5017">(088) 828 5017</a>
                    </div>
                </div>
                <a href="#" class="h1 text-white mb-2"><img src="/img/4.png" class="img-logo me-3 img-responsive" alt="SVFCL Logo" /></a>
                <div class="d-flex">
                    
                    <a href="mailto:st.vincentferrerclinlab@gmail.com"><i class="bi bi-envelope fs-2"></i></a>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <a href="mailto:st.vincentferrerclinlab@gmail.com"><span>st.vincentferrerclinlab@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Brand End -->

      <!-- Navbar Start -->
      <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="#" class="navbar-brand d-lg-none">
                        <img src="/img/4.png" class="h-14 me-3" alt="SVFCL Logo" />
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#services" class="nav-item nav-link">Services</a>
                        <a href="#home-service" class="nav-item nav-link">Contact</a>
                        
                    </div>    
                            
                    
                    <!-- Navbar End 
                    <div class="ms-auto d-none d-lg-flex">
                        
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>-->
                </div>   
                <div class="navbar-nav d-flex float-right">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-item nav-link float-end">
                                Dashboard
                            </a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">{{ __('Profile') }}</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                            
                        @else
                            <a href="{{ route('login') }}" class="nav-item nav-link float-end">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-item nav-link float-end">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div> 
                
                
            </nav>
        </div>
      </div>
      <!-- Navbar End -->
    
      <!-- Carousel Start -->
      @include('layouts.carousel')
      <!-- Carousel End -->
       
      <!-- Features Start -->
      @include('layouts.features')
      <!-- Features End -->


      <!-- About Start -->
      @include('layouts.about')
      <!-- About End -->


      <!-- Features Start -->
      @include('layouts.features2')
      <!-- Features End -->


      <!-- Video Modal Start -->
      @include('layouts.video-modal')
      <!-- Video Modal End -->


      <!-- Service Start -->
      @include('layouts.service')
      <!-- Service End -->

      <!-- Appoinment Start -->
      @include('layouts.appointment')
      <!-- Appoinment Start -->

      <!-- Team Start -->
      @include('layouts.team')
      <!-- Team End -->


      <!-- Testimonial Start -->
      @include('layouts.Testimonial')
      <!-- Testimonial End -->


      <!-- Footer and copyright section start -->
      @include('layouts.footer')
      <!-- Footer and copyright section start -->


      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-info btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

      <!-- JavaScript Libraries -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
      <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
      <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
      <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
      <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

      <!-- Template Javascript -->
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/dark-mode.js')}}"></script>
    </body>
</html>
