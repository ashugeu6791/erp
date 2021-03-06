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
@if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '2')
@section('edit')

@stop
@elseif((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '3')
@section('add_job')

@stop
@endif
<link rel="stylesheet" href="{{asset('css/exam.css')}}">   
<div class="main_content">
        <div class="info pl-5" style="margin-left:2%;margin-right:3%;margin-top:5%">
        <div class="pr-4 pb-3">
        @foreach($jobs as $job)
        @csrf
                 <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2">
                 				
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title">{{$job->role}}</h6>
                 	             <div>{{$job->company}}</div><br>
                 	             <p>Event At:Delhi</p>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b> {{$job->package}}</b></p>
                 				<p>Profile: It Services </p>
								 <p>Eligible Courses:<b> {{implode(', ',(json_decode($job->eligibility)))}}</b>
                 				<p>Last Date:<b> {{$job->apply_by}}</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer">
                <a href="view/{{($job->verification_token)}}">
                <button class="btn btn-danger float-right" type="button">View Details
                </button>
                </a>
                @endif</div>
                 </div><br>
				 @endforeach
				 {{$jobs->links()}}


      </div>
      </div>
</div>
    </div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>
