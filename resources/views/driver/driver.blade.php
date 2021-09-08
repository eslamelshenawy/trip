@extends('layouts.layouts')

@section('content')

<main id="main">

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Become a driver</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Join our team of drivers and help us get to the top!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Join Us</h2>
            <p class="mb-0">Fill up and submit the form below to request to join our elite team of drivers.</p>
          </div>

        </div>

        <div class="row">
          

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="firstName" class="form-control" id="firstName" required>
                </div>
                
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name="lastName" id="lastName" required>
                </div>

                <div class="col-md-12 form-group mt-3"> 
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div> 
                <div class="col-md-12 form-group mt-3"> 
                  <label for="name">Phone Number</label>
                  <input type="tel" class="form-control" name="telephone" id="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder ="+41 xx xxxx xx xx" 
                  required>
              </div>


                <div  class="col-md-12 form-group mt-3">
                    <label for="birthday">Birthdate:</label>
                    <input type="date" id="birthdate" name="birthdate" class="form-control" >
                </div>

                <div class="col-md-12 form-group mt-3"> 
                    <label for="name">Nationality</label>
                    <input type="text" class="form-control" name="nationality" id="nationality" required>
                </div>

                <div class="col-md-12 form-group mt-3"> 
                    <label for="name">Car Model</label>
                    <input type="text" class="form-control" name="carType" id="carType" required>
                </div>


                
                <div class="col-md-6 form-group mt-3">
                    <label for="name">Car Model Year</label>
                    <input type="text" name="carModel" class="form-control" id="carModel" required>
                  </div>
                  
                  <div class="col-md-6 form-group mt-3 ">
                    <label for="name">Maximum Capacity</label>
                    <input type="number" class="form-control" name="capacity" id="capacity" required>
                  </div>
                  <label for="name" class =" mt-3 ">Do you own a ski box </label>
                  <div class="col-md-6 form-group mt-3 ">
                    <input type="radio" id="html" name="skiBox" value="yes" > <span>Yes</span>
                  </div> 
                  <div class="col-md-6 form-group mt-3 ">
                    <input type="radio" id="html" name="skiBox" value="No"> <span>No</span>
                  </div>
                  <div class="col-md-6 form-group mt-3"> 
                    <label for="name">Copy of your ID</label>
                    <input type="file" class="form-control" name="id" id="id" required>
                </div>
        
                <div class="col-md-6 form-group mt-3"> 
                    <label for="name">Copy of your driving license</label>
                    <input type="file" class="form-control" name="license" id="licnese" required>
                </div>
                <div class="col-md-12 form-group mt-3"> 
                    <label for="name">Copy of your criminal record</label>
                    <input type="file" class="form-control" name="criminalRecord" id="criminalRecord" required>
                </div>
     
                <div class="col-md-12 mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary d-block w-100" value="Join Us">
                </div>
                <div class="col-md-12 form-group mb-3">
                    <b> *Becoming a driver with us does not imply that you are a PeakMe employee.</b>
                </div>
              </div>

            </form>
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
