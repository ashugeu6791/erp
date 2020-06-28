<!--
    TODO:Automatic fetch from database
    Author:Aayush Vishnoi
    Phone No:7895751720
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
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title>Task One</title>
</head>
<body>
<?php include 'C:\xampp\htdocs\erp-master\resources\views\header.blade.php';?>
<div class="two">
        <div class="left">
            <h4>Exam Overview</h4>
        </div>
        <div class="right">
            <div class="md-form mt-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
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
                    Favorites</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">X</a>
                    <a class="dropdown-item" href="#">Y</a>
                    <a class="dropdown-item" href="#">Z</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="sidebar">
            <h3><i class="fas fa-book"></i> COURSE</h3>
            <ul>
                <li style="background: #ADD8E6"><a href="#"><b>All</b></a></li>
                <li><a href="#">course 1</a></li>
                <li><a href="#">course 2</a></li>
                <li><a href="#">course 3</a></li>
                <li><a href="#">course 4</a></li>
                <li><a href="#">course 5</a></li>
                <li><a href="#">course 6</a></li>
                <li><a href="#">course 7</a></li>
                <li><a href="#">course 8</a></li>
                <li><a href="#">course 9</a></li>
                <li><a href="#">course 10</a></li>
                <li><a href="#">course 11</a></li>
                <li><a href="#">course 12</a></li>
                <li><a href="#">course 13</a></li>
                <li><a href="#">course 14</a></li>
                <li><a href="#">course 15</a></li>
                <li><a href="#">course 16</a></li>
                <li><a href="#">course 17</a></li>
                <li><a href="#">course 18</a></li>
                <li><a href="#">course 19</a></li>
                <li><a href="#">course 20</a></li>
                <li><a href="#">course 21</a></li>
                <li><a href="#">course 22</a></li>
                <li><a href="#">course 23</a></li>
                <li><a href="#">course 24</a></li>
                <li><a href="#">course 25</a></li>
                <li><a href="#">course 26</a></li>
                <li><a href="#">course 27</a></li>
                <li><a href="#">course 28</a></li>
                <li><a href="#">course 29</a></li>
                <li><a href="#">course 30</a></li>
                <li><a href="#">course 31</a></li>
                <li><a href="#">course 32</a></li>
                <li><a href="#">course 33</a></li>
                <li><a href="#">course 34</a></li>
                <li><a href="#">course 35</a></li>
            </ul>
        </div>
    </div>
     <div class="container">
        <div class="row">
            <div class="column" style="background-color:#FFFFFF;">
                <h2>BOA-Exam-001</h2>
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
            <div class="column" style="background-color:#FFFFFF;">
                <h2>LRTP-Exam-001</h2>
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
            <div class="column" style="background-color:#FFFFFF;">
                <h2>IELTS-Exam-001</h2>
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
            <div class="column" style="background-color:#FFFFFF;">
                <h2>Mid Term</h2>
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
    <?php include 'C:\xampp\htdocs\erp-master\resources\views\footer.blade.php';?>
</body>
</html>