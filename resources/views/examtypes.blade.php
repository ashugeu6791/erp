<!--
  AUTHOR:Sanskar Singhal, Tanishqa Joshi, Mamta Pal, Vaibhav Bharti
  PHONE NO:9410798526,6396350618
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exams</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
</head>
<body>
  
<div class="merge">       
 <div class="header">
 @include('header')
  </div>
  <div class="container">
      
        <h1>Exam Types</h1>

  <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Create</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered pb-5">
      <div class="modal-content">
        <div class="modal-header p-3 mb-2 bg-dark text-white" >
          <h5 class="modal-title" id="exampleModalLabel">Create</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
           <div class="input-group mb-3">
            <!-- TODO:Take values from DataBase -->
              <label class="input-group-text" for="inputGroupSelect01">Name:</label>
            
            <select class="custom-select" id="inputGroupSelect01">
              
              <option value="1">Mid Semester</option>
              <option value="2">End Semester</option>
              <option value="3">Sessional</option>
            </select>
          </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">ABCD:</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Enter text here" aria-describedby="inputGroup-sizing-default">
          </div>
                      
            </div>
              </form>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <button id="importBtn" class="btn btn-outline-dark">Import</button>
  <button id="downloadBtn" class="btn btn-outline-dark"><i class="fa fa-download"></i></button>

        <table class="table table-striped">
          <thead>
            <thead>
    <tr>
      <th> 
        <div class="col px-md-5">Name  </div> </th>
     <!-- <th>Name</th>-->
      <th>Code</th>
    </tr>
  </thead>
  <!-- Table head -->

  <!-- Table body -->
  <tbody>
    <tr>
      <td scope="row">
        <!-- Default unchecked -->
        <div class="custom-control custom-checkbox pr-0">
          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2">
          <label class="custom-control-label pl-4" for="tableDefaultCheck2">Sessional</label>
        </div>
      </td>
      
      <td>sess</td>
    </tr>
    <tr>
      <td scope="row">
        <!-- Default unchecked -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3">
          <label class="custom-control-label pl-4" for="tableDefaultCheck3">Annual</label>
        </div>
      </td>
     
      <td>ann</td>
    </tr>
    <tr>
      <td scope="row">
        <!-- Default unchecked -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4">
          <label class="custom-control-label pl-4" for="tableDefaultCheck4">Mid Term</label>
        </div>
      </td>
      
      <td>MD</td>
    </tr>
  </tbody>
  <!-- Table body -->
</table>

</div>
      </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>