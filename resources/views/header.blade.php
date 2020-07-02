
<!--
    NAME : POOJA DEORARI
    PHONE NO : 6265456600
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c45a11e6b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>NAVBAR</title>
  </head>
    <body>
<nav class="navbar navbar-expand-lg pb-0 pt-0">
<a class="navbar-brand " href="#" aria-label="Home">
          <i class="fa fa-th pt-1" style="font-size:32px" aria-hidden="true"></i>
 </a>
  <a class="navbar-brand height1 pb-2" href="#"><span>Exams</span></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link ml-5" href="#">Exam Dashboard</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle col" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item selector" href="#">GEU</a>
          <a class="dropdown-item selector" href="#">GEHU</a>
         <a class="dropdown-item selector" href="#">GEHUB</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle col" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          General
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item selector" href="#">GEU</a>
          <a class="dropdown-item selector" href="#">GEHU</a>
          <a class="dropdown-item selector" href="#">GEHUB</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle col" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item selector" href="#">GEU</a>
         <a class="dropdown-item selector" href="#">GEHU</a>
         <a class="dropdown-item selector" href="#">GEHUB</a>
        </div>
      </li>
    </ul>
      <div class="ryt">
       <ul class="navbar-nav">
        <li class="nav-item ">
                <a class="nav-link mr-2" href="#" aria-label="Notification">
                    <i class="fa fa-clock-o pt-1"  style="font-size:20px"  aria-hidden="true"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link mr-2" href="#" aria-label="Messages">
                  <i class="fa fa-comments pt-1"  style="font-size:20px" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link mr-2 " href="#" aria-label="More">
                   <i class="fa fa-gift pt-1" style="font-size:20px" ></i>
               </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link ml-0" href="#" aria-label="More">
                   <i class="fa fa-user-circle img"  style="font-size:30px" aria-hidden="true"></i>
               </a>
            </li>

            <li class="nav-item dropdown show ">
                <a class="nav-link dropdown-toggle mr-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Barack Obama
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item selector" href="#">LOGOUT</a>
                    <a class="dropdown-item selector" href="#">GEHU</a>
                    <a class="dropdown-item selector" href="#">GEHUB</a>
                </div>
          </li>
          </ul>
        </div>
      </div>
</nav>
    @yield('content')
</body>
</html>
