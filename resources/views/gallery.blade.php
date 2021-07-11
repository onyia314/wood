@extends('layouts.layout')
@section('title' , 'gallery')

@push('css')
    <link rel = "stylesheet" href = "/css/curtain.css"/>
    <link rel = "stylesheet" href = "/css/gallery/gallery.css"/>
    <link href="/css/gallery/twentytwenty.css" rel="stylesheet" type="text/css" />
@endpush

@section('curtain')
    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">Gallery</h3>
        </div>
    </div>
@endsection

@section('content')

{{-- <div class="container">
  <div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
      <h3>Basic Usage</h3>
      <p>Demonstrates basic usage of the plugin.</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" >
      <div class="twentytwenty-container">
        <img src="/images/before_1.jpg" alt="before" width="450" height="500"/>
        <img src="/images/after_1.jpg"  alt="after"  width="450" height="500"/>
      </div>
    </div>
</div>
</div> --}}

<div class="gallery-container mt-5">

  <div class="row">

    @foreach ($projects as $project)

      <div class="col-lg-6">
        <div class="card">

          <div class="twentytwenty-container">
            <img src="{{asset('uploads') . '/' .$project->before_path}}" alt="before" style="width:100% !important height:auto !important "/>
            <img src="{{asset('uploads') . '/' .$project->after_path}}" alt="after"  style="width:100% !important height:auto !important "/>
          </div>

          <div class="card-body">
            <h5 class="card-title" style="color:#A52A2A; text-align:center; text-transform:uppercase">{{$project->title}}</h5>
            <p class="card-text" style="color: #826C5F">{{Str::words($project->about , 40  , '......' )}}</p>
            <a href="#" class="btn btn-wood" style="width: 100%;">Read more</a>
          </div>
        </div>
      </div>    

    @endforeach
    

    {{-- <div class="col-lg-6">
      <div class="card">

        <div class="twentytwenty-container">
          <img src="/images/before_1.jpg" alt="before" style="width:100% !important height:auto !important "/>
          <img src="/images/after_1.jpg"  alt="after" style="width:100% !important height:auto !important "/>
        </div>

        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> --}}

  </div>

  <div class="mt-3">{{$projects->links()}}</div>
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