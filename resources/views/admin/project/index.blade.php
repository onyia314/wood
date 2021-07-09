@extends('layouts.dashboard')

@push('css')
    <link type="text/css" href="/css/dashboard/project/index.css"/>
@endpush

@section('content')

<div class="content">
    
    <div class="container">

        @if (session('status'))
        <div class="alert alert-success card-header text-center">{{session('status')}}</div>
        @endif

      <div class="table-responsive">

        <table class="table custom-table">

          <thead>
            <tr>
              
              <th scope="col">No</th>
              <th scope="col">client</th>
              <th scope="col">title</th>
              <th scope="col">edit</th>
              <th scope="col">delete</th>
            </tr>
          </thead>

          <tbody>

            @foreach ($projects as $project)

                <tr scope="row">
                        
                    <td>
                    {{$project->id}}
                    </td>
                    <td>{{$project->client}}</td>
                    <td>
                    {{$project->title}}
                    <small class="d-block">{{Str::substr($project->about , 0 , 30)}}</small>
                    </td>
                    <td><a href="{{route('projects.edit' , ['project' => $project->id])}}" class="btn btn-success">edit</a></td>
                    <td>
                        <form method="POST" action="{{route('projects.destroy' , ['project' => $project->id])}}">
                            @csrf

                            @method('DELETE')
                            <button class = "btn btn-danger" type="submit">delete</button>
                          </form>
                    </td>
        
                </tr>
            @endforeach
            
          </tbody>

        </table>

      </div>

    <p>{{$projects->links()}}</p>

    </div>

  </div>

@endsection
