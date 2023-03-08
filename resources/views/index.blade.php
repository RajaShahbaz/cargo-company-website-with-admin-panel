@extends('layouts.front')
@section('content')



<!-- CSS for IE -->
<!--[if lte IE 9]>
          <link rel="stylesheet" type="text/css" href="css/ie.css" />
      <![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
      <![endif]-->
<!-- place -->

<!-- Header -->
<!-- Start Topbar -->
{{-- <header class="header">
  <div class="topbar bg-theme">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="leftside">
                <ul class="custom-flex">
                  <li> <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a> </li>
                  <li> <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a> </li>
                  <li> <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a> </li>
                  <li> <a href="#" class="text-custom-white"><i class="fab fa-linkedin"></i></a> </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="left-content">
                <div class="ico"> <i class="fas fa-phone-volume"></i> </div>
                <div class="cont">
                  <p class="mb-0">(369) 2900 4800</p>
                  <h6 class="mb-0">Toll: free No.</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="left-content-1">
                <div class="ico"> <i class="fas fa-mail-bulk"></i> </div>
                <div class="cont">
                  <p class="mb-0">info@xyz.gmail.com</p>
                  <h6 class="mb-0">Mail Id</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="rightside full-height">
                <ul class="custom-flex full-height">
                  <li class="book-appointment"> <a href="booking.html"> Get Quotes </a> </li>
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
                  <li class="menu-item active"> <a href="index.html">Home</a> </li>
                  <li class="menu-item menu-item-has-children"> <a href="#">Services</a>
                    <ul class="submenu custom">
                      <li class="menu-item"> <a href="service.html">Full Width</a> </li>
                      <li class="menu-item"> <a href="service-left-sidebar.html">Left Sidebar</a> </li>
                      <li class="menu-item"> <a href="service-right-sidebar.html">Right Sidebar</a> </li>
                      <li class="menu-item"> <a href="service-detail.html">Service Detail</a> </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children"> <a href="#">Blog</a>
                    <ul class="submenu custom">
                      <li class="menu-item"> <a href="blog.html">Blog Grid</a> </li>
                      <li class="menu-item"> <a href="blog-left-sidebar.html">Blog Left</a> </li>
                      <li class="menu-item"> <a href="blog-right-sidebar.html">Blog right</a> </li>
                      <li class="menu-item"> <a href="blog-details.html">Blog Detail</a> </li>
                      <li class="menu-item"> <a href="blog-details-left-sidebar.html">Blog Detail Left</a> </li>
                      <li class="menu-item"> <a href="blog-details-right-sidebar.html">Blog Detail Right</a> </li>
                    </ul>
                  </li>
                  <li class="menu-item"> <a href="about.html">About</a> </li>
                  <li class="menu-item menu-item-has-children"> <a href="#">Pages</a>
                    <ul class="submenu custom">
                      <li class="menu-item"> <a href="booking.html">Booking</a> </li>
                      <li class="menu-item"> <a href="gallery.html">Gallery</a> </li>
                      <li class="menu-item"> <a href="404.html">404</a> </li>
                    </ul>
                  </li>
                  <li class="menu-item"> <a href="contact.html">Contact</a> </li>
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
</header> --}}
<!-- End Topbar -->
<!-- Header -->
<!-- Start Slider -->
<div class="slider p-relative">
  <div class="main-banner arrow-layout-1 ">
    <div class="slide-item"> <img src="assets/images/slider/slider5.jpg" class="image-fit" alt="Slider">
      <div class="transform-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="slider-content">
                <h1 class="text-custom-white">Pakistan Kashmir <span class="text-custom-blue">Cargo</span> Services</h1>
                <ul class="custom">
                  <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Fast </li>
                  <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Secure</li>
                  <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Reliable</li>
                </ul>
                <a href="{{route('contact')}}" class="pricingTable-signup">Contact Us</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item"> <img src="assets/images/slider/slider6.jpg" class="image-fit" alt="Slider">
      <div class="transform-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="slider-content">
                <h1 class="text-custom-white">Door to Door <span class="text-custom-blue">Service</span> Provider</h1>
                <ul class="custom">
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Fast </li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Secure</li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Reliable</li>
                </ul>
                <a href="{{route('contact')}}" class="pricingTable-signup">Contact Us</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item"> <img src="assets/images/slider/slider7.jpg" class="image-fit" alt="Slider">
      <div class="transform-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="slider-content">
                <h1 class="text-custom-white">You trust we Deliver<span class="text-custom-blue"></span></h1>
                <h3 class=" text-custom-blue">Services we offer</h3>
                  <ul class="custom">
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Worldwide Airline Tickets </li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Money Transfer</li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Umrah Service</li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> Cargo Service</li>
                    <li class="text-custom-white"> <i class="fas fa-chevron-right"></i> NICOP (Nadra Card)</li>


                </ul>
                <a href="{{route('contact')}}" class="pricingTable-signup">Contact Us</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Slider -->

<!-- Start slider-bottom -->
{{-- <section class="slider-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="box-1">
          <div class="box-2 bx-wrapper"> <i class="fab fa-artstation"></i>
            <h4 class="text-custom-white">Apply Online</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="about.html" class="pricingTable-signup">Read More</a> </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="box-1">
          <div class="box-3 bx-wrapper"> <i class="fas fa-file-alt"></i>
            <h4 class="text-custom-white">Submit Documents</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="about.html" class="pricingTable-signup">Read More</a> </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="box-1">
          <div class="box-4 bx-wrapper"> <i class="fab fa-artstation"></i>
            <h4 class="text-custom-white">Relax</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="about.html" class="pricingTable-signup">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End slider-bottom -->

<!-- Start About Us -->
<section class="section-padding about-us">
  <div class="container">
    <div class="row">
      <div class="col-xl-7 col-lg-6 pl-2 pr-2 align-self-center text-left">
        <div class="about-left-side mb-md-80">
          <div class="section-header style-left">
            <div class="section-heading">
              <h3>About <span class="text-custom-blue">Us</span></h3>
              <div class="section-description"> </div>
            </div>
          </div>
          <p class="pt-2">Travel Zone is a business that specializes in the transportation of goods. This may include air, sea, and ground transportation, as well as logistics and warehousing services. The company's goal is to help its customers
             move their products and materials quickly and smoothly, while minimizing costs and maximizing satisfaction.</p>
          <p class="pt-2">Travel zone also offer additional services such as Umrah service, Money Transfer,Nadra services.
          </p>
          <p class="pt-2">Travel Zone play a critical role in the global supply chain by providing reliable and efficient transportation of goods to businesses and individuals. We help to ensure that products and materials
             are moved quickly and smoothly.</p>
          {{-- <a href="{{route('about')}}" class="pricingTable-signup">Reserve Now</a> --}}
        </div>
      </div>
      <div class="col-xl-5 col-lg-6">
        <div class="about-right-side full-height">
          <div class="about-img full-height"> <img src="assets/images/about.jpeg" class="img-fluid image-fit" alt="img"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Us -->

<!-- Start Our work -->
<section class="section-padding our-work-sec bg-light-white">
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black">Our <span class="text-custom-blue">Goal</span></h3>
        <div class="section-description">
          <p class="text-light-dark">
            providing efficient and reliable transportation and logistics services to our customers,
             meeting or exceeding customer expectations.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="work-grid"> <i class="fas fa-chess-rook"></i>
          <h4>Our Strategy</h4>
            Focus on providing a high level of customer service, investing in technology to improve efficiency and reduce costs.

          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="work-grid"> <i class="fas fa-ambulance"></i>
          <h4>Our Mission</h4>
          <p>Provide efficient, reliable, and safe transportation of goods for businesses and individuals.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="work-grid"> <i class="fas fa-trophy"></i>
          <h4>Our Achievements</h4>
          <p>Increased website traffic, Improved customer satisfaction, Increased sales, Expansion of services, Improved efficiency.
      </div>
    </div>
  </div>
</section>
<!-- End Our work -->
<!-- Start gallery -->
{{-- <section class="section-padding gallery">
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black"><span>Our Gallery</span></h3>
        <div class="section-description">
          <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="tabs filter-gallery">
          <ul class="custom-flex nav nav-tabs mb-xl-40">
            <li class="nav-item"> <a class="nav-link active" href="#" data-filter="*">Show All</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-filter=".tab-gallery">Brakes</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-filter=".tab-gallery-1">Suspension</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-filter=".tab-gallery-2">Wheels</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-filter=".car-gallery">Steering</a> </li>
          </ul>
        </div>
        <div class="row gallery-grid">
          <div class="col-lg-4 col-md-6 filter-box tab-gallery">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-1.jpeg" class="popup"> <img src="assets/images/gallery/g-1.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-box tab-gallery-1">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-2.jpeg" class="popup"> <img src="assets/images/gallery/g-2.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-box tab-gallery-2">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-3.jpeg" class="popup"> <img src="assets/images/gallery/g-3.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-box car-gallery">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-4.jpeg" class="popup"> <img src="assets/images/gallery/g-4.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-box tab-gallery">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-5.jpeg" class="popup"> <img src="assets/images/gallery/g-5.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-box tab-gallery-1">
            <div class="gallery-item mb-xl-30"> <a href="assets/images/gallery/g-6.jpeg" class   ="popup"> <img src="assets/images/gallery/g-6.jpeg" class="image-fit" alt="img"> </a>
              <div class="work_detail text-center"> <a href="#"><i class="fas fa-search"></i></a> <a href="#"><i class="fab fa-telegram-plane"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End gallery -->

<!-- Start Our courier -->

{{-- <section class="section-padding service parallax  bg-light-white">
  <div class="overlay overlay-bg-theme"></div>
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black">Our <span class="text-custom-blue">Courier</span></h3>
        <div class="section-description">
          <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>01</h5>
          <h4>AIR COURIER SERVICE</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>02</h5>
          <h4>COMMERC SHIPMENT</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>03</h5>
          <h4>FOOD ITEMS DELIVERY</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>04</h5>
          <h4>SEA CARGO SERVICE</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>05</h5>
          <h4>MEDICINE DELIVERY</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="service-box">
          <h5>06</h5>
          <h4>DOCUMENT & PARCELS</h4>
          <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
          <a class="pricingTable-signup" href="{{route('service-detail')}}">Read More</a> </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End Our courier -->

<!-- our service -->
<section class="section-padding courier-booking">
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black">Our <span class="text-custom-blue">Service </span></h3>
        <div class="section-description">
          <p class="text-light-dark">We are offering a range of services to our cusotmer.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="courier-slider arrow-layout-2 row">
          <div class="slide-item col-12">
            <div class="courier-grid">
              <div class="courier-grid-wrapper courier-grid bx-wrapper">
                <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service2.jpg" class="full-width" alt="img"> </a> </div>
                <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                  <h3>O1</h3>
                  <h4 class="title fs-16"><a href="#" class="text-custom-black">Worldwide Airline Tickets</a></h4>
                  <p>We will provide you the tickets of any airline you want to travel with.</p>
                  {{-- <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="courier-grid">
              <div class="courier-grid-wrapper courier-grid bx-wrapper">
                <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service1.jpg" class="full-width" alt="img"> </a> </div>
                <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                  <h3>O2</h3>
                  <h4 class="title fs-16"><a href="#" class="text-custom-black"> Money Transfer</a></h4>
                  <p>Transfer your money to anyone at anytime with our service.</p>
                  {{-- <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="courier-grid">
              <div class="courier-grid-wrapper courier-grid bx-wrapper">
                <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service.jpg" class="full-width" alt="img"> </a> </div>
                <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                  <h3>O3</h3>
                  <h4 class="title fs-16"><a href="#" class="text-custom-black">Cargo Service</a></h4>
                  <p>We will provide the reliable and efficient transportation of goods to anyone.</p>
                  {{-- <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="courier-grid">
              <div class="courier-grid-wrapper courier-grid bx-wrapper">
                <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service4.jpg" class="full-width" alt="img"> </a> </div>
                <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                  <h3>O4</h3>
                  <h4 class="title fs-16"><a href="#" class="text-custom-black">Umrah Service </a></h4>
                  <p>We will provide you the Umrah service with all the facilities you want.</p>
                  {{-- <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="courier-grid">
              <div class="courier-grid-wrapper courier-grid bx-wrapper">
                <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service3.jpg" class="full-width" alt="img"> </a> </div>
                <div class="courier-grid-caption padding-20 bg-custom-white p-relative ">
                  <h3>O5</h3>
                  <h4 class="title fs-16"><a href="#" class="text-custom-black">NICOP (Nadra Card)</a></h4>
                  <p>We will handle your Nadra related works efficiently.</p>
                  {{-- <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End our service -->

<!-- Start Our Team -->
<section class="section-padding parallax our-teams">
  <div class="overlay overlay-bg-black"></div>
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-white">Our <span class="text-custom-blue">Team</span></h3>
        <div class="section-description">
          <p class="text-custom-white">We have the team of highly professional workers with outstanding communication skill
            to provide value to our customers.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="team-slider arrow-layout-2 row">
          <div class="slide-item col-12">
            <div class="our-team">
              <div class="pic"> <img src="assets/images/team/team-1.jpg" alt="img"> </div>
              <div class="team-content">
                <h3 class="title">Adam Gillwarms</h3>
                <span class="post">Cofounder</span> </div>
              <ul class="social">
                <li> <a href="#" class="fab fa-facebook"></a> </li>
                <li> <a href="#" class="fab fa-twitter"></a> </li>
                <li> <a href="#" class="fab fa-google-plus"></a> </li>
                <li> <a href="#" class="fab fa-linkedin"></a> </li>
              </ul>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="our-team">
              <div class="pic"> <img src="assets/images/team/team-2.jpg" alt="img"> </div>
              <div class="team-content">
                <h3 class="title">Dany Lizwani</h3>
                <span class="post">Web Designer</span> </div>
              <ul class="social">
                <li> <a href="#" class="fab fa-facebook"></a> </li>
                <li> <a href="#" class="fab fa-twitter"></a> </li>
                <li> <a href="#" class="fab fa-google-plus"></a> </li>
                <li> <a href="#" class="fab fa-linkedin"></a> </li>
              </ul>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="our-team">
              <div class="pic"> <img src="assets/images/team/team-3.jpg" alt="img"> </div>
              <div class="team-content">
                <h3 class="title">Adam Gillwarms</h3>
                <span class="post">Web Dovloper</span> </div>
              <ul class="social">
                <li> <a href="#" class="fab fa-facebook"></a> </li>
                <li> <a href="#" class="fab fa-twitter"></a> </li>
                <li> <a href="#" class="fab fa-google-plus"></a> </li>
                <li> <a href="#" class="fab fa-linkedin"></a> </li>
              </ul>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="our-team">
              <div class="pic"> <img src="assets/images/team/team-4.jpg" alt="img"> </div>
              <div class="team-content">
                <h3 class="title">MICHAEL STERK</h3>
                <span class="post">Graphic Designer</span> </div>
              <ul class="social">
                <li> <a href="#" class="fab fa-facebook"></a> </li>
                <li> <a href="#" class="fab fa-twitter"></a> </li>
                <li> <a href="#" class="fab fa-google-plus"></a> </li>
                <li> <a href="#" class="fab fa-linkedin"></a> </li>
              </ul>
            </div>
          </div>
          <div class="slide-item col-12">
            <div class="our-team">
              <div class="pic"> <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="img"> </div>
              <div class="team-content">
                <h3 class="title">ROBERT GILL</h3>
                <span class="post">Ceo</span> </div>
              <ul class="social">
                <li> <a href="#" class="fab fa-facebook"></a> </li>
                <li> <a href="#" class="fab fa-twitter"></a> </li>
                <li> <a href="#" class="fab fa-google-plus"></a> </li>
                <li> <a href="#" class="fab fa-linkedin"></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Our Team -->
<!-- Start Our Pricing -->
{{-- <div class="demo9 section-padding bg-light-white">
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black">Our <span class="text-custom-blue">Pricing</span></h3>
        <div class="section-description">
          <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="pricingTable9">
          <div class="pricingTable-header"> <span class="price-value">10<span class="currency">$</span></span>
            <h3 class="title">Standard</h3>
          </div>
          <ul class="pricing-content">
            <li>Online System</li>
            <li>Free apps</li>
            <li>full access</li>
            <li>live preview</li>
            <li>Support unlimited</li>
          </ul>
          <a href="#" class="pricingTable-signup">Buy Now</a> </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="pricingTable9 green">
          <div class="pricingTable-header"> <span class="price-value">20<span class="currency">$</span></span>
            <h3 class="title">Basic</h3>
          </div>
          <ul class="pricing-content">
            <li>Online System</li>
            <li>Free apps</li>
            <li>full access</li>
            <li>live preview</li>
            <li>Support unlimited</li>
          </ul>
          <a href="#" class="pricingTable-signup">Buy Now</a> </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="pricingTable9 orange">
          <div class="pricingTable-header"> <span class="price-value">30<span class="currency">$</span></span>
            <h3 class="title">Premium</h3>
          </div>
          <ul class="pricing-content">
            <li>Online System</li>
            <li>Free apps</li>
            <li>full access</li>
            <li>live preview</li>
            <li>Support unlimited</li>
          </ul>
          <a href="#" class="pricingTable-signup">Buy Now</a> </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="pricingTable9 purple">
          <div class="pricingTable-header"> <span class="price-value">40<span class="currency">$</span></span>
            <h3 class="title">Extra</h3>
          </div>
          <ul class="pricing-content">
            <li>Online System</li>
            <li>Free apps</li>
            <li>full access</li>
            <li>live preview</li>
            <li>Support unlimited</li>
          </ul>
          <a href="#" class="pricingTable-signup">Buy Now</a> </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- End Our Pricing -->
<!-- Start Blog -->
{{-- <section class="section-padding our_articles">
  <div class="container">
    <div class="section-header text-center">
      <div class="section-heading">
        <h3 class="text-custom-black">Our <span class="text-custom-blue">Blog</span></h3>
        <div class="section-description">
          <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="blog-slider arrow-layout-2 row">
          <!-- article -->
          <article class="col-12 post slide-item">
            <div class="post-wrapper bx-wrapper">
              <div class="post-img animate-img"> <a href="blog-details.html"> <img src="assets/images/blog/blog-1.jpeg" class="full-width" alt="img"> </a>
                <div class="post-date">
                  <div class="text-custom-white fw-600 date bg-custom-blue">10</div>
                  <div class="text-custom-white year">Jan 2019</div>
                </div>
              </div>
              <div class="blog-meta padding-20 bg-custom-white p-relative">
                <div class="post-meta mb-xl-20"> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-comment"></i> </span> 10 Comments </a> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-thumbs-up"></i> </span> 2 Likes </a> </div>
                <div class="post-heading">
                  <h2> <a href="blog-details.html" class="text-custom-black fw-600 fs-20">What is Lorem Ipsum? </a> </h2>
                  <p class="text-light-dark no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                </div>
              </div>
              <div class="post-footer">
                <div class="post-author"> <cite class="text-custom-black">Post By <a href="blog-details.html">Jhon Deo</a></cite> </div>
                <a href="blog-details.html" class="pricingTable-signup fs-14 fs-600">Read More</a> </div>
            </div>
          </article>
          <!-- article -->
          <!-- article -->
          <article class="col-12 post slide-item">
            <div class="post-wrapper bx-wrapper">
              <div class="post-img animate-img"> <a href="blog-details.html"> <img src="assets/images/blog/blog-2.jpeg" class="full-width" alt="img"> </a>
                <div class="post-date">
                  <div class="text-custom-white fw-600 date bg-custom-blue">21</div>
                  <div class="text-custom-white year">Jan 2020</div>
                </div>
              </div>
              <div class="blog-meta padding-20 bg-custom-white p-relative">
                <div class="post-meta mb-xl-20"> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-comment"></i> </span> 2 Comments </a> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-thumbs-up"></i> </span> 10 Likes </a> </div>
                <div class="post-heading">
                  <h2> <a href="blog-details.html" class="text-custom-black fw-600 fs-20">Why do we use it?</a> </h2>
                  <p class="text-light-dark no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                </div>
              </div>
              <div class="post-footer">
                <div class="post-author"> <cite class="text-custom-black">Post By <a href="blog-details.html">Jhon Deo</a></cite> </div>
                <a href="blog-details.html" class="pricingTable-signup fs-14 fs-600">Read More</a> </div>
            </div>
          </article>
          <!-- article -->
          <!-- article -->
          <article class="col-12 post slide-item">
            <div class="post-wrapper bx-wrapper">
              <div class="post-img animate-img"> <a href="blog-details.html"> <img src="assets/images/blog/blog-3.jpeg" class="full-width" alt="img"> </a>
                <div class="post-date">
                  <div class="text-custom-white fw-600 date bg-custom-blue">20</div>
                  <div class="text-custom-white year">Jan 2020</div>
                </div>
              </div>
              <div class="blog-meta padding-20 bg-custom-white p-relative">
                <div class="post-meta mb-xl-20"> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-comment"></i> </span> 3 Comments </a> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-thumbs-up"></i> </span> 5 Likes </a> </div>
                <div class="post-heading">
                  <h2> <a href="blog-details.html" class="text-custom-black fw-600 fs-20"> Where does it come from?</a> </h2>
                  <p class="text-light-dark no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                </div>
              </div>
              <div class="post-footer">
                <div class="post-author"> <cite class="text-custom-black">Post By <a href="blog-details.html">Jhon Deo</a></cite> </div>
                <a href="blog-details.html" class="pricingTable-signup fs-14 fs-600">Read More</a> </div>
            </div>
          </article>
          <!-- article -->
          <!-- article -->
          <article class="col-12 post slide-item">
            <div class="post-wrapper bx-wrapper">
              <div class="post-img animate-img"> <a href="blog-details.html"> <img src="assets/images/blog/blog-4.jpeg" class="full-width" alt="img"> </a>
                <div class="post-date">
                  <div class="text-custom-white fw-600 date bg-custom-blue">20</div>
                  <div class="text-custom-white year">Jan 2019</div>
                </div>
              </div>
              <div class="blog-meta padding-20 bg-custom-white p-relative">
                <div class="post-meta mb-xl-20"> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-comment"></i> </span> 3 Comments </a> <a href="blog-details.html" class="text-light-dark mr-1"> <span class="text-custom-blue"> <i class="fas fa-thumbs-up"></i> </span> 20 Likes </a> </div>
                <div class="post-heading">
                  <h2> <a href="blog-details.html" class="text-custom-black fw-600 fs-20">Truth About Courier  Service</a> </h2>
                  <p class="text-light-dark no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                </div>
              </div>
              <div class="post-footer">
                <div class="post-author"> <cite class="text-custom-black">Post By <a href="blog-details.html">Jhon Deo</a></cite> </div>
                <a href="blog-details.html" class="pricingTable-signup fs-14 fs-600">Read More</a> </div>
            </div>
          </article>
          <!-- article -->
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- End Blog -->

<!-- Start Footer -->
{{-- <footer class="footer-section">
  <div class="container">
    <div class="footer-cta pt-5 pb-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="single-cta"> <i class="fas fa-map-marker-alt"></i>
            <div class="cta-text">
              <h4>Address</h4>
              <span>1010 ram nagar,  chandigarh</span> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="single-cta"> <i class="fas fa-phone"></i>
            <div class="cta-text">
              <h4>Contact Us</h4>
              <span>0-112-353-788</span> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="single-cta"> <i class="far fa-envelope-open"></i>
            <div class="cta-text">
              <h4>E-mail Address</h4>
              <span>mail@info.com</span> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-content pt-5 pb-5">
      <div class="row">
        <div class=" col-lg-4 mb-50 mt-3">
          <div class="footer-widget">
            <div class="footer-logo"> <a href="index.html"><img src="assets/images/logo.png" class="img-fluid" alt="logo"></a> </div>
            <div class="footer-text">
              <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                elit,Lorem ipsum dolor sit amet.</p>
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
              <li><a href="#">Home</a></li>
              <li><a href="#">about</a></li>
              <li><a href="#">services</a></li>
              <li><a href="#">portfolio</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Expert Team</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Latest News</a></li>
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
            <p class="text-custom-white">© Speed Up - 2020 | All Right Reserved.</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
          <div class="footer-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">blog</a></li>
              <li><a href="#">Gallery</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer> --}}
<!-- End Footer -->

<div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-arrows"></i></a> </div>
<!-- Place all Scripts Here -->
<!-- jQuery -->

<!-- /Place all Scripts Here -->
</body>
@endsection
