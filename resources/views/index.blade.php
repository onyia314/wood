@extends('layouts.layout')

@section('title' , 'index')

@push('css')
    <link href = "/css/index.css" rel = "stylesheet"/>
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('curtain')

    <div class="hero" style="background-image: url('/images/hero_2.jpg');">

        <div class = "hero-inner-cont">
          <h3 style="font-weight: bold; color:white">Marina's Wood Restoration</h3>
          <p class="mb-2" style="color:white">We pride ourselves in restoring old vintage pieces of furniture</p>
          <a class="btn btn-wood" href = " {{route('contact')}}" role="button">Get in Touch</a>
        </div>

    </div>
    
@endsection

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about">
      
        <div class="container text-center" data-aos="fade-up">
  
          <header class="section-header">
            <h3 class="section-title">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </header>
  
          <div class="row about-cols">
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="about-col">
                <div class="img">
                  <img src="/images/about-mission.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-bar-chart"></i></div>
                </div>
                <h2 class="section-title">Our Mission</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="/images/about-plan.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-brightness-high"></i></div>
                </div>
                <h2 class="section-title">Our Plan</h2>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="/images/about-vision.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                </div>
                <h2 class="section-title">Our Vision</h2>
                <p>
                  Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End About Us Section -->


       <!-- ======= Services Section ======= -->
    <section id="services">

        <div class="container text-center" data-aos="fade-up">
  
          <header class="section-header wow fadeInUp">
            <h3 class="section-title">Services</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
          </header>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->

    <section id="call-to-action">

        <div class="container text-center" data-aos="zoom-in">
            <h3 class="section-title">Call to Action</h3>
            <p>
                Give us a quick call so we could restore your furniture
            </p>
            <a href="#contact-section" class="btn cta-btn" role="button">contact us now</a>
        </div>

    </section>


    <div class="content">
    
        <div class="container ">
          <div class="row mb-5 ">
            <div class="col-12 text-center">
              <h3 class="my-5 section-title">Testimonial</h3>
            </div>
          </div>
        </div>
    
    
        <div class="site-section bg-left-half mb-5">
          <div class="container owl-2-style">      
    
            <div class="owl-carousel owl-2">
    
              <div class="media-29101">
                <img src="/images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Alex Fought</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101">
                <img src="/images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Ben Stafford</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101">
                <img src="/images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Devin Bridges</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101">
                <img src="/images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Joshua Jones</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101">
                <img src="/images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Kellie Kenney</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101">
                <img src="/images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Will Reagan</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
            </div>
    
          </div>
        </div>
    
      </div>


      <section class="ftco-section" id="contact-section">

        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
              <h3 class="heading-section section-title">Reach Out</h3>
            </div>
          </div>

          <div class="row justify-content-center">
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
                            <p style="font-weight:900;"><span style="font-weight:600;">Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="dbox w-100 text-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                          </div>
                          <div class="text">
                            <p><span>Phone:</span> <a href="tel:+1 215-990-4058" style="color:inherit; font-weight:900;">+1 215-990-4058</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="dbox w-100 text-center">
                          <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                          </div>
                          <div class="text">
                            <p><span>Email:</span> <a href="mailto:marinaweinstein@yahoo.com" style="color: inherit; font-weight:900;">marinaweinstein@yahoo.com</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="contact-wrap">
                      <h3 class="mb-4 text-center section-title">Get in touch with us</h3>
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
 
