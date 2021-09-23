
@extends('layouts.layouts')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">PeakMe To The Top!</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Your best choice to go to ski resorts
              </p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a  href="{{url('driver')}}" class="btn btn-outline-white">Become a driver</a></p>
            </div>
       
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section" id="aboutUs">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Use PeakMe </h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Easy and fast</h3>
              <p>Our service is simple and fast; all you have to do is choose a pickup station and schedule a trip to your favorite ski resort.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-brightness-high"></i>
              </div>
              <h3 class="mb-3">Affordable prices</h3>
              <p>We offer the best prices. Because we are dependable, we do not charge more for any additional services; all rides are the same price.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Safe rides</h3>
              <p>We ensure safe rides for our customers by hiring professional and experienced drivers with excellent customer reviews.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    

    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade-up">
            <h2 class="section-heading">Become a PeakMe driver </h2>
          </div>
        </div>
        <div class="row align-items-center">
          
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Make extra money</h2>
            <p class="mb-4">You get paid to drive, so it's a great side hustle that will put more money in your pocket.</p>
            <p><a href="{{url('driver')}}" class="btn btn-primary">Become a driver</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/money.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Receive direct payments</h2>
            <p class="mb-4">After the ride, your profits are automatically and directly deposited to your account.</p>
            <p><a href="driver" class="btn btn-primary">Become a driver</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/payment.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Control your own working hours</h2>
            <p class="mb-4">Peakme allows you to be your own boss, working whenever and for as long as you want.</p>
            <p><a href="driver" class="btn btn-primary">Become a driver</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/time.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade-up">
            <h2 class="section-heading">How to become a PeakMe driver ?</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade">
          <div class="col-md-6 mb-5">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Fill the form</h3>
              <p>Fill up the registration form with your information. then wait our email</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Get accepted</h3>
              <p>We'll set up a test meeting with you, and if you pass, you'll be approved.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Drive safely</h3>
              <p>You may begin driving, earn money, and have fun with PeakMe.</p>
            </div>
          </div>

     
          
        </div>
      </div>
    </section>



    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Use PeakMe Driver Now</h2>
            <span>(coming soon)</span>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p> <a href="#" class="btn d-inline-flex align-items-center"></i><span>Take me to drivers website</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->
  @endsection
