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
                Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>
    
            @if (session('status'))
            <div class="card-header alert alert-success text-center">{{session('status')}}</div>
            @endif
            
            <div class="card-body">
                <div class="row text-center">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">email</label>
                
                            <input id="email" type="email" name="email" value="{{old('email')}}" required autofocus />
                        </div>
    
                        <div class="form-group">
                            @if ($errors->any())
                            @foreach($errors as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        @endif
                        </div>
                
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Email Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>