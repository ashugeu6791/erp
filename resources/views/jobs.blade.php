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
    <title>Placements</title>
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
        <form action="/search-keyword" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group pb-3">
                    <div style="margin-top:0.5%; margin-right:1%; width:93.7%">
                        <input type="text" class="form-control" name="q" placeholder="Search with ' Company Name '">
                    </div>
                        <button type="submit" class="btn btn-danger">Search</button>
                    </div>
        </form>

        @if (session('error'))
            <div class="alert alert-danger">
               {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach($jobs as $job)
        <form>
        @csrf
                 <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2 pl-5">
                             @if ($job->image)
                                <img src="{{ asset('images/company/'.$job->image) }}" style="width: 120px; height: 120px;">
                            @else
                                <i class="fab fa-black-tie" style="font-size:650%; color:purple;"></i>
                            @endif
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title"></h6>
                                 <div><b>{{$job->designation}}</b></div><br>
                 	             <div>{{$job->company}}</div><br>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b> </b><b>{{$job->package}}</b></p>
								 <p>Eligible Courses:<b> {{implode(', ',(json_decode($job->courses)))}}</b>
                 				<p>Last Date:<b> {{$job->apply_by}}</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer">
                 @if((Auth::user()->UserType) == '2' || Auth::user()->UserType == '1')
                 <a href="delete/{{($job->verification_token)}}">
                <button class="btn btn-danger float-right" type="button">Delete
                </button>
                </a>
                <a href="applicants/{{($job->verification_token)}}">
                <button class="btn btn-danger float-right" type="button">Download Applied Applicants List
                </button>
                </a>

                <div class="btn-group float-right">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="eligibles">
                    Download Eligible Applicants List
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="eligibles_geu/{{($job->verification_token)}}"><b>Graphic Era, Dehradun</b> ({{$job->eligibles_geu}})</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="eligibles_gehu/{{($job->verification_token)}}"><b>Graphic Era Hill University</b> ({{$job->eligibles_gehu}})</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="eligibles_gehub/{{($job->verification_token)}}"><b>Graphic Era Hill University - Bhimtal</b> ({{$job->eligibles_gehub}})</a>
                    </div>
                </div>

                @endif
                 <a href="view/{{($job->verification_token)}}">
                <button class="btn btn-danger float-right" type="button">View Details
                </button>
                </a>
                </div>
                 </div><br>
                 </form>
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
