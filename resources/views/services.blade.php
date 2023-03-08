@extends('layouts.front')
@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-custom-white">Service</h1>
          <ul class="custom-flex justify-content-center">
            <li class="fw-500"> <a href="index.html" class="text-custom-white">Home</a> </li>
            <li class="active fw-500"> Service </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Subheader -->
  <!-- Start Blog -->
  <section class="section-padding bg-light-white">
    <div class="container">
      <div class="row">
        {{-- <div class="col-12">
          <div class="listing-top-heading mb-xl-20">
            <h6 class="no-margin text-custom-black">Showing 8 Results</h6>
            <div class="sort-by"> <span class="text-custom-black fs-14 fw-600">Sort by</span>
              <div class="group-form">
                <select class="form-control form-control-custom custom-select">
                  <option>A to Z</option>
                  <option>Z to A</option>
                </select>
              </div>
            </div>
          </div>
        </div> --}}
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
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
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
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
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
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
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
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
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
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
      




      {{-- <div class="row">
        <div class="col-12">
          <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div> --}}
  </section>
@endsection
