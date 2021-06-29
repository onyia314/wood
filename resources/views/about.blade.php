@extends('layouts.layout')

@section('title' , 'about us')

@push('css')
    <link href="/css/about.css" rel="stylesheet"/>
@endpush

@section('curtain')

    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">

        <div class="hero-inner-cont">
            <h1 style="font-weight: bold; color:white">ABOUT US</h1>
        </div>

    </div>
    
@endsection

@section('content')
    <section class="section">
        <h1>about page</h1>
    </section>
@endsection