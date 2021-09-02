@extends('layouts.layout')

@push('css')
    <link href="/css/curtain.css" rel="stylesheet"/>
@endpush

@section('curtain')

    <div class = "hero" style="background-image: url('/images/hero_2.jpg')">
        <div class="hero-inner-cont">
            <h3 style="font-weight: bold; color:white">forgot password</h3>
        </div>
    </div>
    
@endsection
  
@section('content')

<main class="login-form mt-1">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
                  <div class="card-body">
  
                    @if (session('status'))
                    <div class="card-header alert alert-success text-center">
                        {{session('status')}}
                    </div>
                    @endif
  
                      <form action="{{ route('password.email') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Email Password Reset Link
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection 