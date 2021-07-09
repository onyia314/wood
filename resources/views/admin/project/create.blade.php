@extends('layouts.dashboard')

@section('content')

    <div class="card">

        <div class="alert alert-primary text-center">
            <div>For a better aesthetics of the gallery please upload</div>
            <ul>
                <li>a landscape image( an Image which it's width is more than the height ) or a square image( an Image which it's width equal to the height )
                </li>
                <li>
                    make sure that each before and after picture are of the same dimension
                </li>
                <li>let the dimesions of each image be the same for all instances</li>
            </ul>
        </div>

        @if (session('status'))
        <div class="alert alert-success card-header text-center">{{session('status')}}</div>
        @endif

        <div class="card-body">
            <form method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">

                @csrf
        
                <div class="form-group row">

                    <label for="before" class="col-md-4 col-form-label text-md-right">before:</label>

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

                    <label for="after" class="col-md-4 col-form-label text-md-right">after:</label>

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
                        <input type="text" name="title" id="title" value="{{old('title')}}">
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
                        <input type="text" name="client" id="client" value="{{old('client')}}">
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
                        <textarea name="about" id="about" cols="30" rows="10">{{old('about')}}</textarea>
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
                            Add Project
                        </button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
@endsection