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
    <title>Add Jobs</title>
</head>
<body>
@extends('layouts.app')
@section('content')
@section('exam-header')

@stop
@if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
@section('edit')

@stop
@elseif((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '3')
@section('add_job')

@stop
@endif
<?php
 $id = date('Y');
 $years = array('y1' => $id,'y2' => $id+1,'y3' => $id+2,'y4' => $id+3, );
?>
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<h4 style="margin-top:5%;padding-left:2%"><b>Add Job Openings</b></h4>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top:4%">
            <div class="card shadow p-3 mb-5 bg-white rounde">
                <div class="card-body">
                    <form method="POST" action="add">
                        @csrf

                        <div class="form-group row" style="padding-top:5%">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Company Profile') }}</b></label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('About the Company') }}</label>

                            <div class="col-md-6">
                                <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" value="{{ old('about') }}" required autocomplete="about"></textarea>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><b>{{ __('Job Description') }}</b></label>
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="designation" class="form-control @error('designation') is-invalid @enderror" name="designation" required autocomplete="new-designation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Roles and Responsibilities') }}</label>

                            <div class="col-md-6">
                            <textarea id="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" value="{{ old('roles') }}" required autocomplete="roles"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jlocation" class="col-md-4 col-form-label text-md-right">{{ __('Joining Location') }}</label>

                            <div class="col-md-6">
                                <input id="jlocation" type="jlocation" class="form-control @error('jlocation') is-invalid @enderror" name="jlocation" required autocomplete="new-jlocation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ilocation" class="col-md-4 col-form-label text-md-right">{{ __('Interview Location') }}</label>

                            <div class="col-md-6">
                                <input id="ilocation" type="ilocation" class="form-control @error('ilocation') is-invalid @enderror" name="ilocation" required autocomplete="new-ilocation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package" class="col-md-4 col-form-label text-md-right">{{ __('Package') }}</label>

                            <div class="col-md-6">
                                <input type="text" id="package" class="form-control @error('package') is-invalid @enderror" name="package" value="{{ old('package') }}" required autocomplete="package">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary Details') }}</label>

                            <div class="col-md-6">
                                <textarea id="salary" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bond" class="col-md-4 col-form-label text-md-right">{{ __('Bond Period') }}</label>

                            <div class="col-md-6">
                                <input id="bond" type="bond" class="form-control @error('bond') is-invalid @enderror" name="bond" required autocomplete="new-bond">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apply_by" class="col-md-4 col-form-label text-md-right">{{ __('Apply By') }}</label>

                            <div class="col-md-6">
                                <input id="apply_by" type="date" class="form-control @error('apply_by') is-invalid @enderror" name="apply_by" required autocomplete="new-apply_by">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="selection" class="col-md-4 col-form-label text-md-right"><b>{{ __('Section Criteria and Process') }}</b></label>
                        </div>

                        <div class="form-group row">
                            <label for="selection_process" class="col-md-4 col-form-label text-md-right">{{ __('Selection Process Details') }}</label>

                            <div class="col-md-6">
                                <textarea id="selection_process" class="form-control @error('selection_process') is-invalid @enderror" name="selection_process" value="{{ old('selection_process') }}" required autocomplete="selection_process"></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="10th_marks" class="col-md-4 col-form-label text-md-right">{{ __('Minimum marks Required - X') }}</label>

                            <div class="col-md-6">
                                <input id="10th_marks" type="10th_marks" class="form-control @error('10th_marks') is-invalid @enderror" name="10th_marks" required autocomplete="new-10th_marks">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="12th_marks" class="col-md-4 col-form-label text-md-right">{{ __('Minimum marks Required - XII') }}</label>

                            <div class="col-md-6">
                                <input id="12th_marks" type="12th_marks" class="form-control @error('12th_marks') is-invalid @enderror" name="12th_marks" required autocomplete="new-12th_marks">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sgpa" class="col-md-4 col-form-label text-md-right">{{ __('Overall SGPA Required') }}</label>

                            <div class="col-md-6">
                                <input id="sgpa" type="sgpa" class="form-control @error('sgpa') is-invalid @enderror" name="sgpa" required autocomplete="new-sgpa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="backlogs" class="col-md-4 col-form-label text-md-right">{{ __('Backlogs Allowed') }}</label>

                            <div class="col-md-6">
                                <input id="backlogs" type="backlogs" class="form-control @error('backlogs') is-invalid @enderror" name="backlogs" required autocomplete="new-backlogs">
                                <p>Note : In Number - eg. 0,1,2,etc.</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eligible_course"class="col-md-4 col-form-label text-md-right">{{ __('Course(s) Eligible') }}</label>

                            <div class="col-md-6">
                            <label for="course1"> <input type="checkbox" id="course1" name="eligible_course[]" value="B.tech"> B.Tech</label>
                            <label for="course2"> <input type="checkbox" id="course2" name="eligible_course[]" value="course2"> Course 2</label>
                            <label for="course3"> <input type="checkbox" id="course3" name="eligible_course[]" value="course3"> Course 3</label>
                            <label for="course4"> <input type="checkbox" id="course4" name="eligible_course[]" value="course4"> Course 4</label>
                            <label for="course5"> <input type="checkbox" id="course5" name="eligible_course[]" value="course5"> Course 5</label>
                            <label for="course6"> <input type="checkbox" id="course6" name="eligible_course[]" value="course6"> Course 6</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eligible_branch"class="col-md-4 col-form-label text-md-right">{{ __('Branch(s) Eligible') }}</label>

                            <div class="col-md-6">
                            <label for="course1"> <input type="checkbox" id="course1" name="eligible_branch[]" value="B.tech"> Branch 1</label>
                            <label for="course2"> <input type="checkbox" id="course2" name="eligible_branch[]" value="course2"> Branch 2</label>
                            <label for="course3"> <input type="checkbox" id="course3" name="eligible_branch[]" value="course3"> Branch 3</label>
                            <label for="course4"> <input type="checkbox" id="course4" name="eligible_branch[]" value="course4"> Branch 4</label>
                            <label for="course5"> <input type="checkbox" id="course5" name="eligible_branch[]" value="course5"> Branch 5</label>
                            <label for="course6"> <input type="checkbox" id="course6" name="eligible_branch[]" value="course6"> Branch 6</label>
                            </div>
                        </div>

                        
                        
                        <div class="form-group row">
                            <label for="eligible_year"class="col-md-4 col-form-label text-md-right">{{ __('Graduation Year') }}</label>

                            <div class="col-md-6">
                        @foreach($years as $year)
                            <label for="course1"> <input type="checkbox" id="course1" name="eligible_year[]" value="{{$year}}"> {{$year}}</label>
                        @endforeach
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
