@extends('layouts.layout')

@section('title' , "Contact Us - Marina's Wood Restoration Shop")

@push('css')
    <link rel = "stylesheet" href = "/css/curtain.css"/>
    <link rel = "stylesheet" href = "/css/contact/contact.css"/>
@endpush

@section('curtain')
    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">Contact</h3>
        </div>
    </div>
@endsection

@section('content')

@include('includes.contact')

@endsection
