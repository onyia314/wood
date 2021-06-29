@extends('layouts.layout')

@section('title' , 'index')

@push('css')
    <link href = "/css/index.css" rel = "stylesheet"/>
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('curtain')

    <div class="hero" style="background-image: url('/images/hero_2.jpg');">

        <div class = "hero-inner-cont">
        <p style="font-weight: bold; color:white">MarinaWood</p>
        <p>restoring our wood is our passion</p>
        <a class="btn btn-success" href = " {{route('about')}}" role="button">Get in Touch</a>
        </div>

    </div>
    
@endsection

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about">
      
        <div class="container text-center" data-aos="fade-up">
  
          <header class="section-header">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </header>
  
          <div class="row about-cols">
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="about-col">
                <div class="img">
                  <img src="/images/about-mission.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-bar-chart"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
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
                <h2 class="title"><a href="#">Our Plan</a></h2>
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
                <h2 class="title"><a href="#">Our Vision</a></h2>
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
            <h3>Services</h3>
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

            <h4 class="title">About us</h4>
            <p>
                give us a quick call so we could restore your furniture
            </p>
    
            <a href="" class="btn cta-btn" role="button">contact us now</a>
        </div>

    </section>


    <div class="content">
    
        <div class="container ">
          <div class="row mb-5 ">
            <div class="col-12 text-center">
              <h2 class="my-5">Carousel #6</h2>
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

    
@endsection
 
