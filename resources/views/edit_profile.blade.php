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
                    <form method="POST" action=" ">
                        @csrf

                        <div class="form-group row" style="padding-top:5%">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid')??Auth::user()->userid }}" required autocomplete="userid" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')??Auth::user()->username }}" required autocomplete="name">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="10Per" class="col-md-4 col-form-label text-md-right">{{ __('Class 10th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="10Per" type="10Per" class="form-control @error('10Per') is-invalid @enderror" name="10Per" required autocomplete="new-10Per">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="12Per" class="col-md-4 col-form-label text-md-right">{{ __('Class 12th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="12Per" type="12Per" class="form-control @error('12Per') is-invalid @enderror" name="12Per" required autocomplete="new-12Per">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('University') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="university" class="form-control @error('university') is-invalid @enderror" name="university" required autocomplete="new-university">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="course" class="form-control @error('course') is-invalid @enderror" name="course" required autocomplete="new-course">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('Branch') }}</label>

                            <div class="col-md-6">
                                <input id="branch" type="branch" class="form-control @error('branch') is-invalid @enderror" name="branch" required autocomplete="new-branch">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sgpa/cgpa" class="col-md-4 col-form-label text-md-right">{{ __('Overall SGPA/CGPA') }}</label>

                            <div class="col-md-6">
                                <input id="sgpa/cgpa" type="sgpa/cgpa" class="form-control @error('sgpa/cgpa') is-invalid @enderror" name="sgpa/cgpa" required autocomplete="new-sgpa/cgpa">
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
