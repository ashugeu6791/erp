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
    <title>Applicants</title>
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
<div class="row" style="margin-left:2%;margin-right:3%;margin-top:5%">
	<table class="table" id="">
		<thead>
			<tr>
				<th class="text-center">University Roll</th>
				<th class="text-center">Student's Name</th>
				<th class="text-center">Email</th>
				<th class="text-center">Phone</th>
                <th class="text-center">Company Applied For</th>
			</tr>
		</thead>
		<tbody >
        @foreach($students__applications as $applicants)
            <tr>
				<td>{{$applicants->userid ?? ' '}}</td>
                <td>{{$applicants->name ?? ' '}}</td>
                <td>{{$applicants->email ?? ' '}}</td>
                <td>{{$applicants->phone ?? ' '}}</td>
                <td>{{$applicants->company ?? ' '}}</td>				
			</tr>
        @endforeach    
		</tbody>
	</table>
</div>
<div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>
