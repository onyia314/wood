@extends('layouts.layout')

@section('title' , 'index')

@push('css')
    <link href = "/css/index.css" rel = "stylesheet"/>
@endpush

@section('curtain')

    <div class="hero" style="background-image: url('/images/hero_2.jpg');">

        <div class = "hero-inner-cont">
        <h3 style="font-weight: bold; color:white">MarinaWood</h3>
        <p>restoring our wood is our passion</p>
        <a class="btn btn-success">Get started</a>
        </div>

    </div>
    
@endsection

@section('content')
    <h1>index file</h1>
@endsection
 
