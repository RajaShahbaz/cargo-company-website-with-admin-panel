<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="keywords" content="#">
        <meta name="description" content="#">
        <title>Cargo-Website</title>


           <!--  Md bootstrap  cdn -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />
    <!--load animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- add login css  -->
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
         <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
         <link rel="stylesheet" href="{{ asset('css/track.css') }}"> --}}


<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
<!-- Bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Fontawesome -->
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
<!-- Flaticons -->
<link href="{{ asset('assets/css/font/flaticon.css') }}" rel="stylesheet">
<!-- Slick Slider -->
<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
<!-- Range Slider -->
<link href="{{ asset('assets/css/ion.rangeSlider.min.css') }}" rel="stylesheet">
<!-- Datepicker -->
<link href="{{ asset('assets/css/datepicker.css') }}" rel="stylesheet">
<!-- magnific popup -->
<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
<!-- Nice Select -->
<link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
<!-- Custom Stylesheet -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<!-- Custom Responsive -->
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
       {{-- <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/edit.js')}}"></script> --}}
    </head>
    <body>

        <header class="header">
            <div class="topbar bg-theme">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-12">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-12">
                        <div class="left-content ">
                            <div class="ico">
<h6 class="mb-0" >Stockton</h6>
                                {{-- <i class="fas fa-phone-volume"></i> --}}
                              </div>
                            <div class="cont">
                              <p class="mb-0"><i class="fas fa-phone-volume"></i>01642 617 619</p>
                              <p class="mb-0"><i class="fa-solid fa-location-dot"></i>40 Bowesfield Lane | Stockton-on-Tees | TS18 3ER</p>
                            </div>
                          </div>
                          {{-- <ul class="custom-flex">
                            <li> <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a> </li>
                            <li> <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a> </li>
                            <li> <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a> </li>
                            <li> <a href="#" class="text-custom-white"><i class="fab fa-linkedin"></i></a> </li>
                          </ul> --}}
                      </div>
                      {{-- <div class="col-lg-6 col-md-6 col-6">
                        <div class="left-content">
                          <div class="ico"> <i class="fas fa-phone-volume"></i> </div>
                          <div class="cont">
                            <p class="mb-0">(369) 2900 4800</p>
                            <h6 class="mb-0">Toll: free No.</h6>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="left-content ">
                                <div class="ico">
    <h6 class="mb-0" style="margin-right: 10px; color:white">Middlesbrough </h6>
                                    {{-- <i class="fas fa-phone-volume"></i> --}}
                                  </div>
                                <div class="cont">
                                  <p class="mb-0"><i class="fas fa-phone-volume"></i>01642 350 660</p>
                                  <p class="mb-0"><i class="fa-solid fa-location-dot"></i>122 Abingdon Rd | Middlesbrough | TS1 3JX</p>
                                </div>
                              </div>
                          </div>
                        {{-- <div class="col-lg-3 col-md-3 col-3"></div>
                      <div class="col-lg-6 col-md-6 col-6">
                        <div class="left-content-1">
                          <div class="ico"> <i class="fas fa-mail-bulk"></i> </div>
                          <div class="cont">
                            <p class="mb-0">info@xyz.gmail.com</p>
                            <h6 class="mb-0">Mail Id</h6>
                          </div>
                        </div>
                      </div> --}}
                      <div class="col-lg-6 col-md-6 col-6">
                        <div class="rightside full-height">
                          <ul class="custom-flex full-height">
                            {{-- <li class="book-appointment"> <a href="booking.html"> Get Quotes </a> </li> --}}
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <nav>
                      <div class="main-navigation">
                        <div class="logo"> <a href="index.html"> <img src="assets/images/logo.png" class="img-fluid" alt="logo"> </a> </div>
                        <div class="main-menu">
                          <ul class="custom-flex">
                            <li class="menu-item active"> <a href="{{route('index')}}">Home</a> </li>
                            {{-- <li class="menu-item"> <a href="{{route('shipment')}}">What we Ship</a> </li> --}}
                            <li class="menu-item"> <a href="{{route('services')}}">Services</a> </li>
                            {{-- <li class="menu-item menu-item-has-children"> <a href="#">Services</a>
                              <ul class="submenu custom">
                                <li class="menu-item"> <a href="service.html">Full Width</a> </li>
                                <li class="menu-item"> <a href="service-left-sidebar.html">Left Sidebar</a> </li>
                                <li class="menu-item"> <a href="service-right-sidebar.html">Right Sidebar</a> </li>
                                <li class="menu-item"> <a href="service-detail.html">Service Detail</a> </li>
                              </ul>
                            </li> --}}
                            {{-- <li class="menu-item menu-item-has-children"> <a href="#">Blog</a>
                              <ul class="submenu custom">
                                <li class="menu-item"> <a href="blog.html">Blog Grid</a> </li>
                                <li class="menu-item"> <a href="blog-left-sidebar.html">Blog Left</a> </li>
                                <li class="menu-item"> <a href="blog-right-sidebar.html">Blog right</a> </li>
                                <li class="menu-item"> <a href="blog-details.html">Blog Detail</a> </li>
                                <li class="menu-item"> <a href="blog-details-left-sidebar.html">Blog Detail Left</a> </li>
                                <li class="menu-item"> <a href="blog-details-right-sidebar.html">Blog Detail Right</a> </li>
                              </ul>
                            </li> --}}
                            <li class="menu-item"> <a href="{{route('about')}}">About</a> </li>
                            {{-- <li class="menu-item menu-item-has-children"> <a href="#">Pages</a>
                              <ul class="submenu custom">
                                <li class="menu-item"> <a href="booking.html">Booking</a> </li>
                                <li class="menu-item"> <a href="gallery.html">Gallery</a> </li>
                                <li class="menu-item"> <a href="404.html">404</a> </li>
                              </ul>
                            </li> --}}
                            <li class="menu-item"> <a href="{{route('contact')}}">Contact</a> </li>
                            <li class="menu-item"> <a href="{{route('login')}}">Login</a> </li>

                          </ul>
                        </div>
                        <div class="hamburger-menu">
                          <div class="menu-btn"> <span></span> <span></span> <span></span> </div>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </header>


        <!-- Modal -->



            @yield('content')

            <footer class="footer-section">
                <div class="container">
                  <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 mb-30">
                        <div class="single-cta"> <i class="fas fa-map-marker-alt"></i>
                          <div class="cta-text">
                            <h4>Address</h4>
                            <span>40 Bowesfield Lane Stockton-on-Tees TS18 3ER<br></span>
                            <span>122 Abingdon Rd Middlesbrough TS1 3JX</span> </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mb-30">
                        <div class="single-cta"> <i class="fas fa-phone"></i>
                          <div class="cta-text">
                            <h4>Contact Us</h4>
                            <span>01642 617 619</span><br>
                            <span>01642 350 660</span> </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-30">
                        <div class="single-cta"> <i class="far fa-envelope-open"></i>
                          <div class="cta-text">
                            <h4>E-mail Address</h4>
                            <span>info@travelzonestockton.co.uk</span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-content pb-5">
                    <div class="row">
                      <div class=" col-lg-4 mb-50 mt-3">
                        <div class="footer-widget">
                          <div class="footer-logo"> <a href="index.html"><img src="assets/images/logo.png" class="img-fluid" alt="logo"></a> </div>
                          <div class="footer-text">
                            <p>Our goal is providing efficient and reliable transportation and logistics services to all of our customers.
                             </p>
                          </div>
                          <div class="footer-social-icon"> <span>Follow us</span> <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a> <a href="#"><i class="fab fa-twitter twitter-bg"></i></a> <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a> </div>
                        </div>
                      </div>
                      <div class=" col-lg-4 col-md-6 mb-30 mt-3">
                        <div class="footer-widget">
                          <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                          </div>
                          <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">about US</a></li>
                            {{-- <li><a href="#">services</a></li> --}}
                            {{-- <li><a href="#">portfolio</a></li> --}}
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            {{-- <li><a href="#">About us</a></li> --}}
                            <li><a href="{{route('services')}}">Our Services</a></li>
                            {{-- <li><a href="#">Expert Team</a></li> --}}
                            {{-- <li><a href="#">Contact us</a></li> --}}
                            {{-- <li><a href="#">Latest News</a></li> --}}
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-50 mt-3">
                        <div class="footer-widget">
                          <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                          </div>
                          <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                          </div>
                          <div class="subscribe-form">
                            <form action="#">
                              <input type="text" placeholder="Email Address">
                              <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="copyright-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                          <p class="text-custom-white">© Travel Zone | All Right Reserved.</p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                          <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>



    <!-- add jquery pluing -->


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.en.js') }}"></script>
    <!-- Isotope Gallery -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
