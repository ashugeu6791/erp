<!--
    TODO:Automatic fetch from database
    Kunal Aaryen Sinha
    - 8709162797
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c45a11e6b.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/awards.css')}}">
    <title>Admit Card</title>
</head>
<body>
@extends('layouts.app')
@section('content')
@section('placements-header')

@stop
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<div class="main_content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top:4%">
            <div class="card shadow p-3 mb-5 bg-white round">
                <div class="card-body">
                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="Search University ID"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                    <form action="generate" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row" style="padding-top:5%">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{  $students[0]->userid ?? ' ' }}" required readonly autocomplete="userid" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $students[0]->name ?? ' '}}" required readonly autocomplete="name">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $students[0]->fname ?? ' '}}" readonly autocomplete="fname">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="mname" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ $students[0]->mname ?? ' '}}"  readonly autocomplete="mname">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email-id') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $students[0]->email ?? ' '}}" readonly autocomplete="email">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $students[0]->phone ?? ' '}}" readonly autocomplete="phone">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $students[0]->dob ?? ' '}}"  readonly autocomplete="dob">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="course" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ $students[0]->course ?? ' '}}" readonly autocomplete="new-course">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('Branch') }}</label>

                            <div class="col-md-6">
                                <input id="branch" type="branch" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ $students[0]->branch ?? ' '}}" readonly autocomplete="new-branch">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate Admit Card') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>
