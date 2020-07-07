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
@section('placements-header')

@stop
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<div class="wrapper">
    <div class="sidebar pt-4 pb-5"  style="overflow-y: scroll;width:20%;height:95%; margin-top:1%">
        <div class="text-center sticky-top" style="margin-top:7%"><h3 class="card" style="color:black;height:10%;"><strong>COURSE</strong></h3></div>
        <ul class="text-center">
            <li><a href="#" style="text-decoration:none">Course 1</a></li>
            <li><a href="#" style="text-decoration:none">Course 2</a></li>
            <li><a href="#" style="text-decoration:none">Course 3</a></li>
            <li><a href="#" style="text-decoration:none">Course 4</a></li>
            <li><a href="#" style="text-decoration:none">Course 5</a></li>
            <li><a href="#" style="text-decoration:none">Course 6</a></li>
            <li><a href="#" style="text-decoration:none">Course 7</a></li>
            <li><a href="#" style="text-decoration:none">Course 8</a></li>
            <li><a href="#" style="text-decoration:none">Course 9</a></li>
            <li><a href="#" style="text-decoration:none">Course 10</a></li>
            <li><a href="#" style="text-decoration:none">Course 11</a></li>
            <li><a href="#" style="text-decoration:none">Course 12</a></li>
            <li><a href="#" style="text-decoration:none">Course 13</a></li>
            <li><a href="#" style="text-decoration:none">Course 14</a></li>
            <li><a href="#" style="text-decoration:none">Course 15</a></li>
            <li><a href="#" style="text-decoration:none">Course 16</a></li>
            <li><a href="#" style="text-decoration:none">Course 17</a></li>
            <li><a href="#" style="text-decoration:none">Course 18</a></li>
            <li><a href="#" style="text-decoration:none">Course 19</a></li>
            <li><a href="#" style="text-decoration:none">Course 20</a></li>
            <li><a href="#" style="text-decoration:none">Course 21</a></li>
            <li><a href="#" style="text-decoration:none">Course 22</a></li>
            <li><a href="#" style="text-decoration:none">Course 23</a></li>
            <li><a href="#" style="text-decoration:none">Course 24</a></li>
            <li><a href="#" style="text-decoration:none">Course 25</a></li>
            <li><a href="#" style="text-decoration:none">Course 26</a></li>
            <li><a href="#" style="text-decoration:none">Course 27</a></li>
            <li><a href="#" style="text-decoration:none">Course 28</a></li>
            <li><a href="#" style="text-decoration:none">Course 29</a></li>
            <li><a href="#" style="text-decoration:none">Course 30</a></li>
            <li><a href="#" style="text-decoration:none">Course 31</a></li>
            <li><a href="#" style="text-decoration:none">Course 32</a></li>
            <li><a href="#" style="text-decoration:none">Course 33</a></li>
            <li><a href="#" style="text-decoration:none">Course 34</a></li>
            <li><a href="#" style="text-decoration:none">Course 35</a></li>
        </ul> 
    </div>
</div>    
<div class="main_content">
        <div class="info pl-5" style="margin-left:23%;margin-right:3%;margin-top:5%">
        <div class="pr-4 pb-3">
        <div class="md-form mt-0" style="display:block">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filters </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">Y</a>
                <a class="dropdown-item" href="#">Z</a>
            </div>
        </div> 

        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Group By</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">Y</a>
                <a class="dropdown-item" href="#">Z</a>
            </div>
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Group By</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">Y</a>
                <a class="dropdown-item" href="#">Z</a>
            </div>
        </div>
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Favorites</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">X</a>
                <a class="dropdown-item" href="#">Y</a>
                <a class="dropdown-item" href="#">Z</a>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="navbr">
            <ul class="pagination pg-blue">
                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
                <li class="page-item"><a class="page-link">3</a></li>
                <li class="page-item"><a class="page-link">4</a></li>
                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
        </nav>
        </div>
        <div class="pt-5">
        <div style="height:auto; width:auto;" class="column" style="background-color:#FFFFFF;">
            <h3>BOA-Exam-001</h3>
            <p>Start Date:04/01/2020<br>
                End Date:04/04/2020</p>
            <table>
                <tbody>
                <th> <a class="at" href="#" > View Exam</a></th>
                <th> <a class="at" href="#" >Completed Exam</a></th>
                <th> <a class="at" href="#" >Exam Sessions</a></th>
                </tbody>
            </table>
        </div>
        <div style="height:auto;width:auto;" class="column" style="background-color:#FFFFFF;">
            <h3>LRTP-Exam-001</h3>
            <p>Start Date:04/11/2020<br>
                End Date:04/15/2020</p>
            <table>
                <tbody>
                <th> <a class="at" href="#" > View Exam</a></th>
                <th> <a class="at" href="#" >Completed Exam</a></th>
                <th> <a class="at" href="#" >Exam Sessions</a></th>
                </tbody>
            </table>
        </div>
        <div style="height:auto; width:auto;" class="column" style="background-color:#FFFFFF;">
            <h3>IELTS-Exam-001</h3>
            <p>Start Date:04/17/2020<br>
                End Date:04/21/2020</p>
            <table>
                <tbody>
                <th> <a class="at" href="#" > View Exam</a></th>
                <th> <a class="at" href="#" >Completed Exam</a></th>
                <th> <a class="at" href="#" >Exam Sessions</a></th>
                </tbody>
            </table>
        </div>
        <div style="height:auto; width:auto;" class="column" style="background-color:#FFFFFF;">
            <h3>Mid Term</h3>
            <p>Start Date:03/20/2019<br>
                End Date:06/07/2020</p>
            <table>
                <tbody>
                <th> <a class="at" href="#" > View Exam</a></th>
                <th> <a class="at" href="#" >Completed Exam</a></th>
                <th> <a class="at" href="#" >Exam Sessions</a></th>
                </tbody>
            </table>
        </div>
        </div>
      </div>
</div>
    </div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>
