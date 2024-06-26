@extends('layouts.layout')

@section('title' , "About Us - Marina's Wood Restoration Shop")

@push('css')
    <link href="/css/curtain.css" rel="stylesheet"/>
    <link href="/css/about.css" rel="stylesheet"/>
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('curtain')

    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">About Us</h3>
        </div>
    </div>
    
@endsection

@section('content')
    @include('includes.about')
@endsection