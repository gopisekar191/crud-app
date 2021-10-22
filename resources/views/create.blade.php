<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student App</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
              <form action="{{ route('student.store') }}" method="POST">  
              @csrf
               <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" autocomplete="off">
                      <span style="color:red">@error('name'){{ $message }}@enderror</span>
               </div>
               <div class="form-group">
                      <label for="department">Department</label>
                      <input type="text" class="form-control" name="department" autocomplete="off">
                      <span style="color:red">@error('department'){{ $message }}@enderror</span>
               </div>
               <div class="form-group">
                      <label for="marks">Marks</label>
                      <input type="text" class="form-control" name="marks" autocomplete="off">
                      <span style="color:red">@error('marks'){{ $message }}@enderror</span>
               </div>
               <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Save</button>
               </div>  
            </form>        
            </div>         
        </div>
    </div>
</body>
</html>