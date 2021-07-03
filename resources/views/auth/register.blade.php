{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Sign Up Form by Colorlib</title>
 
     <!-- Font Icon -->
     <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">
 
     <!-- Main css -->
     <link rel="stylesheet" href="/css/register.css">
 </head>
 <body>
 
     <div class="main">
 
         <section class="signup">
             <div class="container">

                 <div class="signup-content">
                     <form method="POST" action="{{route('register')}}"id="signup-form" class="signup-form">
                         @csrf
                         <h2 class="form-title">Create account</h2>
                         <div class="form-group">
                             <input type="text" class="form-input" name="name" id="name" placeholder="Name" value="{{old('name')}}"/>
                         </div>
                         <div class="form-group">
                             <input type="email" class="form-input" name="email" id="email" placeholder="Email" value="{{old('email')}}"/>
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                             <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password"/>
                         </div>
        
                         <div class="form-group">
                             <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                         </div>
                     </form>
                     <p class="loginhere">
                         Have already an account ? <a href="{{route('login')}}" class="loginhere-link">Login here</a>
                     </p>

                     @if ($errors->any())

                         @foreach($errors->all() as $error)
                            <li style="color: red">{{$error}}</li>
                         @endforeach

                     @endif
                 </div>
             </div>
         </section>
 
     </div>
 
     <!-- JS -->
     <script src="/js/jquery-3.3.1.min.js"></script>
     <script src="/js/register/register.js"></script>
 </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
 </html>
