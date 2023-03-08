@extends('layouts.front')
@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-custom-white">Contact Us</h1>
          <ul class="custom-flex justify-content-center">
            <li class="fw-500"> <a href="index.html" class="text-custom-white">Home</a> </li>
            <li class="active fw-500"> Contact Us </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Subheader -->

  <div class="section-padding contact-form-map">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-header style-left">
            <div class="section-heading">
              <h3 class="text-custom-black">Get In Touch</h3>
              <div class="section-description">
                <p class="text-light-dark">You can visit any of our branch at the given address or you can leave us the message by filling out the below form.</p>
              </div>
            </div>
          </div>
          <div id="msgBox" style="display:block;"></div>
          <form action="{{route('admin.postcontact')}}"  id="contactMail" method="POST" class="mb-md-80">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-custom" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-custom" placeholder="Email I'd" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="subject" class="form-control form-control-custom" placeholder="Subject" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="phone" class="form-control form-control-custom" placeholder="Phone No." required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Message" required=""></textarea>
                </div>
                <button type="submit" class="pricingTable-signup btn-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12 col-md-6 mb-3">
              <div class="contact-info-box mb-md-40"> <i class="flaticon-placeholder"></i>
                <h6 class="text-theme fw-600"><span>40 Bowesfield Lane <br> Stockton-on-Tees TS18 3ER<br></span>
                    <span>OR<br></span>
                    <span>122 Abingdon Rd <br>Middlesbrough TS1 3JX</span></h6>
              </div>
            </div>
            <div class="col-lg-12 col-md-6 mb-3">
              <div class="contact-info-box mb-md-40"> <i class="flaticon-telephone-1"></i>
                <h6 class="text-theme fw-600"><a href="#" class="text-theme">01642 617 619<br>
                    </a>
                    <a href="#" class="text-theme">01642 350 660
                    </a>

                </h6>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
