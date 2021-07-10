 @extends('layouts.dashboard')

 @section('content')
 
 <div style="text-align: center">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <h3 class="mb-4">Hello {{Auth::user()->role}} @if(Auth::user()->role == 'regular') <span> user, please wait for an approval from us</span> @endif</h3>
    <p> {{Auth::user()->name}} you are logged in.</p>
 </div>
    
 @endsection