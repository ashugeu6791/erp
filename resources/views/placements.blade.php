<!--
    TODO:Automatic fetch from database
    Author:Saksham gera
    Phone No:8218158718
-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6c45a11e6b.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <style type="text/css">
          	body{
				  background: #ffffff;
				  padding-bottom : 84%!important;
				  padding-top:3%!important;
          	}
          </style>
    
</head>
@extends('layouts.app')
@section('content')
@section('exam-header')

@stop
@if((Auth::user()->UserType) == '1' || (Auth::user()->UserType) == '3')
@section('add_job')

@stop
@endif
<body> 
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
	<div class="container-fluid pt-4">
	<h4 class="pb-3"><b>Placements</b></h4>
		<div class="row">
			<div class="col-sm-2">
				<div class="card">
					<div class="card-header">COCubes-2020 Batch</div>
					          <h3 style="text-align: center;"><i class="fa fa-pie-chart fa-5x"  ></i></h3>
					        
					  <div class="row px-0 no-gutters ">
					  	<div class="col-4 "><p class="card card-block border-top-0 border-left-0 border-bottom-0">350-440<br>4.2%</p></div>
					  	<div class="col-4 "><p class="card card-block border-top-0 border-left-0 border-bottom-0">440-530<br>31.4%</p></div>
					  	<div class="col-4 "><p class="card card-block border-top-0 border-left-0 border-right-0 border-bottom-0">above 530<br>50.2%</p></div>
					  	
					  </div>
					  <div class="row px-0 no-gutters">
					  	<div class="col-6 btn btn-dark text-wrap"><p >Score Split</p></div>
					  	<div class="col-6 btn btn-dark text-wrap"><p>participants split</p></div>
					  </div>
					
		       </div>
		       
				<br><br>
					<div class="card">
						<div class="card-header">
							filters
							
						</div>
						<div class=" card-body">
							
							<form>
								<h6 class="card-title">Batch:</h6>
                                 <input type="radio" id="All" name="batch" value="All">
                                      <label for="All">All(<b>864</b>)</label><br>
                                <input type="radio" id="2021" name="batch" value="2021">
                             <label for="female">2021(<b>1</b>)</label><br>
                               <input type="radio" id="2020" name="batch" value="2020">
                         <label for="other">2020(<b>313</b></label><br>
                         <input type="radio" id="2019" name="batch" value="2019">
                         <label for="other">2019(<b>550</b>)</label>
							</form>
							
						</div>
						
					</div>
				</div>
			
			<div class="col-sm-10">
                 <div class="card">
                 	<div class="card-header">449 Co Cubes Jobs Found<br><b>Filters:</b> All batches</div>
                 	
                 </div><br>
                 <select>
                 	<option>Sort by:</option>
                    <option>posted on</option>
                    <option>Salary</option>
                    <option>Last date to apply</option>

                 </select><br>




                 <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2">
                 				
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title">Software Development Enigineer</h6>
                 	             <p>FlickZee Movies</p><br>
                 	             <p>Event At:Delhi</p>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b>480000</b></p>
                 				<p>Profile:It Services</p>
                 				<p>Last Date:<b>22 may 2020 10:00AM</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer"> <span style="color:orange">19 students have applied from your institute</span> <span style="color: cyan; align-content: right"><button class="btn btn-primary float-right" type="button">view details</button></span> </div>

                 </div><br>




                 <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2">
                 				
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title">Customer Delight Advisor</h6>
                 	             <p>FlickZee Movies</p><br>
                 	             <p>Event At:Delhi</p>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b>480000</b></p>
                 				<p>Profile:It Services</p>
                 				<p>Last Date:<b>22 may 2020 10:00AM</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer"> <span style="color:orange">19 students have applied from your institute</span> <span style="color: cyan; align-content: right"><button class="btn btn-primary float-right" type="button">view details</button></span> </div>

                 </div><br>



                 <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2">
                 				
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title">Associate Support Enginner</h6>
                 	             <p>Indus valley partners</p><br>
                 	             <p>Event At:Delhi</p>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b>480000</b></p>
                 				<p>Profile:It Services</p>
                 				<p>Last Date:<b>22 may 2020 10:00AM</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer"> <span style="color:orange">6 students have applied from your institute</span> <span style="color: cyan; align-content: right"><button class="btn btn-primary float-right" type="button">view details</button></span> </div>

                 </div><br>



                <div class="card">
                 	<div class="card-body">
                 		<div class="row px-0 no-gutters">
                 			<div class="col-2">
                 				
                 			</div>
                 			<div class="col-6">
                 				<h6 class="card-title">Software Development Enigineer</h6>
                 	             <p>FlickZee Movies</p><br>
                 	             <p>Event At:Delhi</p>
                 			</div class="col-4">
                 			<div>
                 				<p>Annual pay:<b>480000</b></p>
                 				<p>Profile:It Services</p>
                 				<p>Last Date:<b>22 may 2020 10:00AM</b>
                 			</div>
                 			
                 		</div>
                      
                 	
                 </div>
                 <div class="card-footer"> <span style="color:orange">19 students have applied from your institute</span> <span style="color: cyan; align-content: right"><button class="btn btn-primary float-right" type="button">view details</button></span> </div>

                 </div><br>



			</div>
		</div>

	</div>






	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<div>
    <?php echo View::make('footer') ?>
</div>
@stop
</html>