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
    <link rel="stylesheet" href="{{asset('css/awards.css')}}">
    <title>Exam</title>
</head>
<body>
@extends('layouts.app')
@section('content')
@section('placements-header')

@stop
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<div class="main_content">
    <div class="info" style="margin-left:3%;margin-right:3%;margin-top:5%">
    <h4 class="pb-3"><b>Upload Award List</b></h4>
    <form class="form-inline">  
            <div class="form-group pb-4"> 
                <label for="university" class="col-form-label text-md-right pr-3">University</label> 
                <div class="col-md-6 pl-4">
                            <select id="university" class=" form-control" style="width:580px;" name = 'university' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">Graphic Era (Deemed to be University)</option>
                                <option value="2">Graphic Era Hill University</option>
                                <option value="3">Graphic Era Hill University - Bhimtal</option>
                            </select>
                </div>
            </div>  
            <div class="form-group pb-4"> 
                <label for="exam" class="pl-4 col-form-label text-md-right pr-4">Exam Type</label> 
                <div class="col-md-6 pl-4">
                            <select id="exam" class=" form-control" style="width:580px" name = 'exam' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                </div> 
            </div>
            <div class="form-group pb-4"> 
                <label for="program" class="col-form-label text-md-right pr-4">Program</label> 
                <div class="col-md-6 pl-4">
                            <select id="program" class=" form-control" style="width:580px" name = 'program' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                </div>
            </div>  
            <div class="form-group pb-4"> 
                <label for="branch" class="pl-4 col-form-label text-md-right pr-5">Branch</label> 
                <div class="col-md-6 pl-4">
                            <select id="branch" class=" form-control" style="width:580px" name = 'branch' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                </div> 
            </div>
            <div class="form-group pb-4"> 
                <label for="code" class="col-form-label text-md-right pr-1">Subject Code</label> 
                <div class="col-md-6 ">
                            <select id="code" onChange="return func()" class=" form-control" style="width:580px" name = 'code' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                </div>
            </div>
            <script>
                    function func(){
                    var dropdown = document.getElementById("code");
                    var selection = dropdown.value;
                    console.log(selection);
                    var TextBox = document.getElementById("name");
                    TextBox.value = selection;
                         }
             </script>
        
            <div class="form-group pb-4"> 
                <label for="name" class="pl-4 col-form-label text-md-right pr-1">Subject Name</label> 
                <div class="col-md-6 pl-4">
                    <input id="name" class=" form-control" style="width:580px" name = 'name' disabled required autofocus>
                </div> 
            </div>   
    </form>

            <div id="FileUpload">
                <div class="wrapper">
                    <div class="upload">
                        <p><span class="upload__button" onclick="chooseFile();"> 
                        <input type="file" id="fileInput" name="myfile" /><i class="fas fa-paperclip"></i> Upload Files
                        </span></p>
                        <script>
                        function chooseFile() {
                            document.getElementById("fileInput").click();
                        }
                        </script>
                    </div>
                </div>
            </div>
<div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>
