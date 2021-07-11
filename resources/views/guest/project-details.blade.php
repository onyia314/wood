@extends('layouts.layout')

@push('css')
    <link rel = "stylesheet" href = "/css/curtain.css"/>
    <link rel = "stylesheet" href = "/css/gallery/gallery.css"/>
    <link href="/css/gallery/twentytwenty.css" rel="stylesheet" type="text/css" />
@endpush

@section('curtain')
<div class = "hero" style="background-image: url('/images/hero_2.jpg')">
    <div class="hero-inner-cont">
        <h3 style="font-weight: bold; color:white">Project Details</h3>
    </div>
</div>
@endsection

@section('content')
    <div class="gallery-container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="twentytwenty-container">
                    <img src="{{asset('uploads') . '/' .$project->before_path}}" alt="before" style="width:100% !important height:auto !important "/>
                    <img src="{{asset('uploads') . '/' .$project->after_path}}" alt="after"  style="width:100% !important height:auto !important "/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header" style="font-weight: 900; color:#A52A2A; text-align:center; text-transform:uppercase">{{$project->client}}</h5>
                    <div class="card-body" style="background-color: #fdfaf8";>
                        <p class="card-title" style="font-weight: 600; color:#A52A2A; text-align:center; text-transform:uppercase">{{$project->title}}</p>
                        <p class="card-text" style="color:black">{{$project->about}}</p>
                    </div>
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
          $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
          /* $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'}); */
        });
    </script>
@endpush