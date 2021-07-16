@extends('layouts.layout')

@section('title' , "Services - Marina's Wood Restoration Shop")

@push('css')
    <link href="/css/curtain.css" rel="stylesheet"/>
    <link href="/css/services.css" rel="stylesheet"/>
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('curtain')

    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">Services</h3>
        </div>
    </div>
    
@endsection

@section('content')
    @include('includes.services')
@endsection