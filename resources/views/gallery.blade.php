@extends('layouts.layout')
@section('title' , 'gallery')

@push('css')
    <link rel = "stylesheet" href = "/css/gallery/gallery.css"/>
    <link href="/css/gallery/twentytwenty.css" rel="stylesheet" type="text/css" />
@endpush

@section('curtain')
    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">

        <div class="hero-inner-cont">
            <h1 style="font-weight: bold; color:white">ABOUT US</h1>
        </div>

    </div>
@endsection

@section('content')

<div class="container">
  <div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <h3>Basic Usage</h3>
      <p>Demonstrates basic usage of the plugin.</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" >
      <div class="twentytwenty-container">
        <img src="/images/before_1.jpg" alt="before"/>
        <img src="/images/after_1.jpg"  alt="after"/>
      </div>
    </div>
</div>
</div>

@endsection


@push('ui-script')
    <script src="/js/gallery/jquery.event.move.js" type="text/javascript"></script>
    <script src="/js/gallery/jquery.twentytwenty.js" type="text/javascript"></script>
    <script>
        $(function(){
          $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
          $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
        });
    </script>
@endpush