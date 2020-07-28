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
@if((Auth::user()->UserType) == '3')
@section('edit')

@stop
@elseif((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
@section('add_job')

@stop
@endif
<link rel="stylesheet" href="{{asset('css/exam.css')}}">   
<div class="main_content">
        <div class="info pl-5" style="margin-left:2%;margin-right:3%;margin-top:5%">
        <div class="pr-4 pb-3">
        @csrf
                 <div class="card">
                 	<div class="card-body">
                 		<h4>{{$jobs[0]->company}} : {{$jobs[0]->designation}}</h4><br>
                         <b>Company Profile</b>
                         <hr></hr>
                         <p> <b> {{$jobs[0]->company}} <br> <br>
                         About the Company :</b> <br> 
                         {{$jobs[0]->company_description}}

                         @if((Auth::user()->UserType) == '2' || Auth::user()->UserType == '1')
                         <a href="applicants/{{($jobs[0]->verification_token)}}">
                            <button class="btn btn-danger float-right" type="button">View Applicants</button>
                         </a>

                         @elseif(Auth::user()->UserType == '3')
                         <a href="apply/{{($jobs[0]->verification_token)}}">
                            <button class="btn btn-danger float-right" type="button">Apply</button>
                         </a>
                         @endif
                         </p>
                         <br>
                         <hr></hr>

                         <b>Job Details</b>
                         <hr></hr>
                         <p>
                         <b>Job Title :</b> {{$jobs[0]->designation}}</b> <br>
                          <b>Roles and Responsibilities :</b> <br> 
                         {{$jobs[0]->role}}<br>
                         <b>Joining Location :</b>{{$jobs[0]->jlocation}}<br>
                         <b>Interview Location :</b>{{$jobs[0]->ilocation}}<br>
                         <b>Package :</b>{{$jobs[0]->package}}<br>
                         <b>Salary Details :</b><br>{{$jobs[0]->salary_details}}<br>
                         <b>Bond Period :</b>{{$jobs[0]->bond}}<br>
                         </p><br>
                         <hr></hr>

                         <b>Selection Process</b>
                         <hr></hr>
                         <p>{{$jobs[0]->selection_details}}<br>
                         </p><br>
                         <hr></hr>

                         <b>Selection Criteria</b>
                         <hr></hr>
                         <p>
                         <b>Required 10<sup>th</sup> Percentage(Minimum) :</b>{{$jobs[0]->tenthpercentage}}</b><br>
                         <b>Required 12<sup>th</sup> Percentage(Minimum) :</b>{{$jobs[0]->twelfthpercentage}}<br>
                         <b>SGPA (Minimum) :</b>{{$jobs[0]->sgpa}}<br>
                         <b>Graduation Year :</b>{{implode(', ',(json_decode($jobs[0]->year)))}}<br>
                         <b>Allowed Backlogs :</b>{{$jobs[0]->backlogs}}<br>
                         <b>Eligible Course(s) :</b>{{implode(', ',(json_decode($jobs[0]->courses)))}}<br>
                         <b>Eligible Branch(s) :</b>{{implode(', ',(json_decode($jobs[0]->branches)))}}<br>
                         </p><br>
                         <hr></hr>
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
