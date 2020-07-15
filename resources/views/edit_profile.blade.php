<!--
    TODO:Automatic fetch from database and Rules/Policy for access to be made
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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Exam</title>
</head>
<body>
@extends('layouts.app')
@section('content')
@section('exam-header')

@stop
@if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '3')
@section('add_job')

@stop
@endif
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<h4 style="margin-top:5%;padding-left:2%"><b>Edit Profile</b></h4>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top:2%">
            <div class="card shadow p-3 mb-5 bg-white rounde">
                <div class="card-body">
                    <form method="post" action="/update">
                        @csrf
                        <div class="form-group row" style="padding-top:5%">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid')??$students[0]->userid }}" required readonly autocomplete="userid" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')??$students[0]->name }}" required readonly autocomplete="name">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') ??$students[0]->fname}}" readonly autocomplete="fname">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="mname" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname')??$students[0]->mname }}"  readonly autocomplete="mname">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email-id') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')??$students[0]->email  }}" readonly autocomplete="email">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone')??$students[0]->phone }}" readonly autocomplete="phone">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="<?php echo date('Y-m-d',strtotime($students[0]->dob)); ?>" readonly autocomplete="dob">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="course" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('phone')??$students[0]->course }}" readonly autocomplete="new-course">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('Branch') }}</label>

                            <div class="col-md-6">
                                <input id="branch" type="branch" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('phone')??$students[0]->branch }}" readonly autocomplete="new-branch">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sgpa" class="col-md-4 col-form-label text-md-right">{{ __('Overall SGPA/CGPA') }}</label>

                            <div class="col-md-6">
                                <input id="sgpa" type="sgpa" class="form-control @error('sgpa') is-invalid @enderror" name="sgpa" value="{{ old('phone')??$students[0]->sgpa }}" autocomplete="new-sgpa">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <button type="Reset" class="btn btn-primary">
                                    {{ __('Clear') }}
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
