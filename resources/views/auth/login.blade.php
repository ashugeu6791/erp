<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
@extends('layouts.app')
@section('content')
@section('header')

@stop
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="border-radius:10px 10px 10px 10px; opacity:0.85; display:inline-block;margin:3%;">
                <div class="card-body">
                <img src="{{ asset('logo.gif') }}" style='width:100%;height:20%'>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-left: 20%; margin-right: 20%;">
                            <div class="col-md-12">
                                <input id="userid" type="userid" class="form-control @error('userid') is-invalid @enderror" placeholder="User ID" name="userid" value="{{ old('userid') }}" required autocomplete="userid" autofocus>
                                
                                @error('userid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 20%; margin-right: 20%;">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 0%; margin-right: 20%;">
                            <div class="col-md-8 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 20%; margin-right: 20%;">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger" style="width: 100%;">
                                    {{ __('Login') }}
                                </button>

                                <div class="form-group row mb-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('footer')

@stop
</div>
@endsection
</body>
</html>