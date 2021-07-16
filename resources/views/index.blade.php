@extends('layouts.layout')

@section('title' , "Marina's Wood Restoration Shop")

@push('css')
    <link href = "/css/index.css" rel = "stylesheet"/>
    <link href = "/css/about.css" rel = "stylesheet"/>
    <link href = "/css/services.css" rel = "stylesheet"/>
    <link href = "/css/testimonial.css" rel = "stylesheet"/>
    <link href = "/css/contact.css" rel = "stylesheet"/>
    <link href = "/css/gallery/gallery.css" rel = "stylesheet"/>
    <link href="/css/gallery/twentytwenty.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('curtain')

    <div class="hero" style="background-image: url('/images/hero_2.jpg');">

        <div class = "hero-inner-cont">
          <h3 style="font-weight: bold; color:white">Marina's Wood Restoration Shop</h3>
          <p class="mb-2" style="color:white">We pride ourselves on restoring old vintage pieces of furniture</p>
          <a style = "box-shadow: none" id = "btn-100vh" class="btn mt-3" href = " {{route('contact')}}" role="button">
            Get in Touch
          </a>
        </div>

    </div>
    
@endsection

@section('content')
    @include('includes.about');
    @include('includes.services');
    <section id="call-to-action">

        <div class="container text-center" data-aos="zoom-in">
            <h3 class="section-title">Call to Action</h3>
            <p>
                Want to rejuvenate your ancient furniture? Send us a quick message. 
            </p>
            <a style = "box-shadow : none;" href="#contact-section" class="btn cta-btn" role="button">contact us now</a>
        </div>

    </section>
    @include('includes.testimonial')
    <section>

        <div class="container ">
          <div class="row mb-4 ">
            <div class="col-12 text-center">
              <h3 class="my-5 section-title">Gallery</h3>
            </div>
          </div>
        </div>

        <div class="gallery-container mt-4">

          <div class="row">
        
            @foreach ($projects as $project)
           
            @include('includes.gallery')

            @endforeach
        
          </div>

          <div style="text-align: center">
            <a href = "{{route('gallery')}}" class="btn mt-5 pt-3 pb-3" style="width: 160px; background-color:#AC6F53; color:white; border-shadow:none">View more</a>
          </div>
        </div>

      </section>
      @include('includes.contact')
@endsection

@push('ui-script')
    <script src="/js/gallery/jquery.event.move.js" type="text/javascript"></script>
    <script src="/js/gallery/jquery.twentytwenty.js" type="text/javascript"></script>
    <script>
        $(function(){
          $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
         /*  $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'}); */
        });
    </script>
@endpush
 
