@extends('layouts.front')
@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-custom-white">About Us</h1>
          <ul class="custom-flex justify-content-center">
            <li class="fw-500"> <a href="index.html" class="text-custom-white">Home</a> </li>
            <li class="active fw-500"> About Us </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Subheader -->
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
  <!-- Start Our Team -->
  <section class="section-padding parallax our-teams">
    <div class="overlay overlay-bg-black"></div>
    <div class="container">
      <div class="section-header text-center">
        <div class="section-heading">
          <h3 class="text-custom-white">Our <span class="text-custom-blue">Team</span></h3>
          <div class="section-description">
            <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
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
@endsection
