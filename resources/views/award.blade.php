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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top:4%">
            <div class="card shadow p-3 mb-5 bg-white round">
                <div class="card-body">
                    <form method="POST" action=" ">
                        @csrf

                        <div class="form-group row" style="padding-top:5%">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('University') }}</label>

                            <div class="col-md-6">
                            <select id="university" class=" form-control" name = 'university' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">Graphic Era (Deemed to be University)</option>
                                <option value="2">Graphic Era Hill University</option>
                                <option value="3">Graphic Era Hill University - Bhimtal</option>
                            </select>
                         </div>
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Exam Type') }}</label>

                            <div class="col-md-6">
                            <select id="exam" class=" form-control" name = 'exam' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>

                            <div class="col-md-6">
                            <select id="program" class=" form-control" name = 'program' required autofocus>
                            <option hidden disabled selected value></option>
                                <option value="1">X</option>
                                <option value="2">Y</option>
                                <option value="3">Z</option>
                            </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="eligibility" class="col-md-4 col-form-label text-md-right">{{ __('Subject Code') }}</label>

                            <div class="col-md-6 ">
                            <select id="code" onChange="return func()" class=" form-control" name = 'code' required autofocus>
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

                        <div class="form-group row">
                            <label for="package" class="col-md-4 col-form-label text-md-right">{{ __('Package') }}</label>

                            <div class="col-md-6">
                            <input id="name" class=" form-control" name = 'name' disabled required autofocus>
                             </div>
                        </div>

                        <div id="FileUpload">
                            
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
