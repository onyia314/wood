 @extends('layouts.dashboard')

 @section('content')
 
 <div style="text-align: center">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <h2 class="mb-4">Hello {{Auth::user()->role}}</h2>
    <p> {{Auth::user()->name}} you are logged in.</p>
 </div>
    
 @endsection