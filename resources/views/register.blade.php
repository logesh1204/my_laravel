@extends('app')
@section('content')
<style>
    body{
        background: #020024;
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        overflow:hidden;
    }
</style>
    <div class="row justify-content-center align-content-center min-vh-100 ">
        <div class="col-4">
            <div class="card">
            <div class="card-body">
                <h5 class="text-center">Register</h5>
                <p class="text-muted text-center">Create your account </p>
                <form action="{{route('newUser')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="username" id="username" value="{{old('username')}}"class="form-control">
                    @error('username')
                        <span class="text-danger d-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                        <span class="text-danger d-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{old('passwrod')}}">
                    @error('password')
                        <span class="text-danger d-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12 text-center my-3">
                    <button class="btn btn-primary rounded-1 w-100">Register</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
@endsection
