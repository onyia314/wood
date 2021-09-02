@extends('layouts.dashboard')

@section('content')

        <div class="card">
            @if (session('success'))
            <div class="alert alert-success text-center">{{session('success')}}</div>
            @endif
        
            <div class="card-body">
                <form id="form_validation" method="POST" action="{{route('password.change')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="current_password" class="col-md-4 col-form-label text-md-right">Current Password:</label>
                        <div class="col-md-6">
                            <input id = "current_password"type="password" class="form-control" placeholder="Current Password" name="current_password" >
                            @error('current_password')
                                    <div style="color: red;">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password" class="col-md-4 col-form-label text-md-right">New Password:</label>
                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control" placeholder="New Password" name="password" >
                            @error('password')
                                    <div style="color: red;">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">current password:</label>
                        <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6  offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Save Change
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>   
@endsection
