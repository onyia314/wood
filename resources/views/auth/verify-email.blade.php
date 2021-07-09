{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h5>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</h5>
            </div>
    
            @if (session('status') == 'verification-link-sent')
                <div class="card-header text-center alert alert-success">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif
    
            <div class="card-body">

                <div class="row text-center" >
                    <form method="POST" action="{{ route('verification.send') }} " class="col-md-6 mb-4">
                        @csrf
        
                        <div>
                            <button type="submit" class="btn btn-success">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>
        
                    <form method="POST" action="{{ route('logout') }}" class="col-md-6 mb-4">
                        @csrf
        
                        <button type="submit" class="btn btn-danger">
                            Log Out
                        </button>
                    </form>
                </div>
    
            </div>
        </div>
    </div>    
</body>
</html>
