@extends('layouts.layout')

@push('css')
    <link rel = "stylesheet" href = "/css/curtain.css"/>
    <link rel = "stylesheet" href = "/css/contact/contact.css"/>
@endpush

@section('curtain')
    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">Contact</h3>
        </div>
    </div>
@endsection

@section('content')

<section class="ftco-section">

    <div class="container">

      <div class="row justify-content-center mt-4">
        <div class="col-lg-10 col-md-12">
          <div class="wrapper">
            <div class="row justify-content-center">
              <div class="col-lg-8 mb-5">
                <div class="row">
                  <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text">
                        <p style="font-weight:900;"><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920" style="color: inherit; font-weight:900;">+ 1235 2355 98</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com" style="color: inherit; font-weight:900;">info@yoursite.com</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="contact-wrap">
                  <h3 class="mb-4 text-center">Get in touch with us</h3>
                  <div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
                  <div id="form-message-success" class="mb-4 w-100 text-center">
                    Your message was sent, thank you!
                  </div>
                  <form method="GET" action="" id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-md-12"> 
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="hidden" name = "form-url" id = "form-url" value="{{env('APP_URL')}}">
                          <input type="submit" value="Send Message" class="btn btn-wood">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
