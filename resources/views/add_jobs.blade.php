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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top:10%">
            <div class="card shadow p-3 mb-5 bg-white rounde">
                <div class="card-body">
                    <form method="POST" action=" ">
                        @csrf

                        <div class="form-group row" style="padding-top:5%">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="designation" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="role" class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="new-role">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eligibility" class="col-md-4 col-form-label text-md-right">{{ __('Eligibility') }}</label>

                            <div class="col-md-6">
                                <input id="eligibility" type="eligibility" class="form-control @error('eligibility') is-invalid @enderror" name="eligibility" required autocomplete="new-eligibility">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package" class="col-md-4 col-form-label text-md-right">{{ __('Package') }}</label>

                            <div class="col-md-6">
                                <input id="package" type="package" class="form-control @error('package') is-invalid @enderror" name="package" required autocomplete="new-package">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apply_date" class="col-md-4 col-form-label text-md-right">{{ __('Apply By') }}</label>

                            <div class="col-md-6">
                                <input id="apply_date" type="date" class="form-control @error('apply_date') is-invalid @enderror" name="apply_date" required autocomplete="new-apply_date">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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
