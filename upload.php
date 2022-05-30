
<?php

include_once('AdminHome.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>upload courses</title>
</head>
<body>
    <h1>Upload Course</h1>

    <form class="col-md-offset-3 col-md-6" action="upload1.php" method="POST">
    <div class="form-group">
        <label for="coursename" class="control-label">Course Name</label>
        <input type="text" class="form-control" id="fname"name="course" placeholder="Course Name">
    </div>
    <div class="form-group">
        <label for="Course Code" class="control-label">Course Code</label>
        <input type="text" class="form-control" id="lname" name="CourseCode" placeholder="Course Code">
    </div>
    <div class="container">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-success" value="Cancel">
</div>
</form>
</body>
</html>