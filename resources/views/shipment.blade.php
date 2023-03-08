@extends('layouts.front')
@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-custom-white">What-We-Deliver</h1>
          <ul class="custom-flex justify-content-center">
            <li class="fw-500"> <a href="{{route('index')}}" class="text-custom-white">Home</a> </li>
            <li class="active fw-500"> What-We-Deliver </li>
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
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-1.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O1</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Residential Movers</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-2.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O2</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Standard Courier</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-3.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O3</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Door to Door</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-4.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O4</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Express Courier</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-5.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O5</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Ware House</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-6.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O6</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Pallet</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-7.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O7</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">International Courier</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-8.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O8</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Documents Papers</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="courier-grid mb-xl-30">
            <div class="courier-grid-wrapper courier-grid bx-wrapper">
              <div class="image-sec animate-img"> <a href="#"> <img src="assets/images/service/service-9.jpg" class="full-width" alt="img"> </a> </div>
              <div class="courier-grid-caption padding-20 bg-custom-white p-relative">
                <h3>O9</h3>
                <h4 class="title fs-16"><a href="#" class="text-custom-black">Packaging Goods</a></h4>
                <p>Grate explorer of tha truth tha master-bulder of human happines.</p>
                <div class="action"> <a class="pricingTable-signup" href="#">Read More</a> </div>
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
