@extends('layouts.dashboard')

@push('css')
    <link type="text/css" href="/css/dashboard/project/index.css"/>
@endpush

@section('content')

<div class="content">
    
    <div class="container">

        @if (session('success'))
        <div class="alert alert-success card-header text-center">{{session('success')}}</div>
        @endif

        @if (session('failure'))
        <div class="alert alert-success card-header text-center">{{session('failure')}}</div>
        @endif

      <div class="table-responsive">

        <table class="table custom-table">

          <thead>
            <tr>
              
              <th scope="col">email</th>
              <th scope="col">role</th>
              <th scope="col">delete</th>
              <th scope="col">update</th>
            </tr>
          </thead>

          <tbody>

            @foreach ($users as $user)

                <tr scope="row">
                        
                    <td>{{$user->email}}</td>
                    <td>
                    {{$user->role}}
                    </td>
                    <td>
                        <form method="POST" action="{{route('users.destroy' , ['user' => $user->id])}}">
                            @csrf
                            <button class = "btn btn-danger" type="submit">delete user</button>
                          </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('users.updateRole' , ['user' => $user->id])}}">
                            @csrf
                            <select name="role" id = "role">
                                <option value="regular">regular</option>
                                <option value="admin">admin</option>
                            </select>

                            <button class = "btn btn-primary" type="submit">update role</button>
                          </form>
                    </td>
        
                </tr>
            @endforeach
            
          </tbody>

        </table>

      </div>

    {{-- <p>{{$users->links()}}</p> --}}

    </div>

  </div>

@endsection
