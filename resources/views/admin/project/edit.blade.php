@extends('layouts.dashboard')

@section('content')

    <div class="card">
        @if (session('status'))
        <div class="alert alert-success card-header text-center">{{session('status')}}</div>
        @endif
        @if (session('noUpdate'))
        <div class="alert alert-danger card-header text-center">{{session('noUpdate')}}</div>
        @endif

        <div class="card-header text-center alert-secondary"> PLEASE NOTE THAT SINCE YOUR ARE TRYING TO UPDATE YOU CAN CHOOSE TO EDIT ANY OR NONE OF BEFORE OR AFTER IMAGE <br>
            YOU ARE NOT NECCESSARY REQUIRED TO UPLOAD BOTH OR ANY OF THE IMAGES SINCE YOU ARE UPDATING 
        </div>

        <div class="card-body">

            <form method="post" action="{{route('projects.update' , ['project' => $project->id])}}" enctype="multipart/form-data">

                @csrf

                @method('PUT')
        
                <div class="form-group row">

                    <label for="before" class="col-md-4 col-form-label text-md-right">before:<strong>(optional)</strong></label>

                    <div class="col-md-6">
                        <input type="file" name="before" id="before">
                        @error('before')
                            <p style="color: red;">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                </div>

                <div class="form-group row">

                    <label for="after" class="col-md-4 col-form-label text-md-right">after:<strong>(optional)</strong></label>

                    <div class="col-md-6">
                        <input type="file" name="after" id="after">
                        @error('after')
                            <p style="color: red;">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                </div>

                <div class="form-group row">

                    <label for="title" class="col-md-4 col-form-label text-md-right">title:</label>

                    <div class="col-md-6">
                        <input type="text" name="title" id="title" value="{{$project->title}}">
                        @error('title')
                            <p style="color: red;">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                </div>

                <div class="form-group row">

                    <label for="client" class="col-md-4 col-form-label text-md-right">client:</label>

                    <div class="col-md-6">
                        <input type="text" name="client" id="client" value="{{$project->client}}">
                        @error('client')
                            <p style="color: red;">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                </div>

                <div class="form-group row">

                    <label for="about" class="col-md-4 col-form-label text-md-right">about:</label>

                    <div class="col-md-6">
                        <textarea name="about" id="about" cols="30" rows="10">{{$project->about}}</textarea>
                        @error('about')
                            <p style="color: red;">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
@endsection