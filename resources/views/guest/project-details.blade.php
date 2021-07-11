@extends('layouts.layout')

@push('css')
    <link rel = "stylesheet" href = "/css/curtain.css"/>
@endpush

@section('curtain')
<div class = "hero" style="background-image: url('/images/hero_2.jpg')">
    <div class="hero-inner-cont">
        <h3 style="font-weight: bold; color:white">Project Details</h3>
    </div>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>
@endsection