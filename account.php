<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit and Update Data PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
  <div class="page-header">
      <h2>Update Account</h2>
  </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            error_reporting(0);
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "School";
                            
                            $conn = new mysqli($servername,$username,$password,$dbname);
                            
                            if(!$conn){
                            
                                echo "Failed";
                            }
            $query = "SELECT * FROM test WHERE userid = '$userid' ";
            $result=mysqli_query($conn,$query);
            $customer = mysqli_fetch_assoc($result);
            ?>
            <form action="update.php" method="POST">
              <input type="hidden" name="userid" value="<?php echo $_GET["userid"]; ?>" class="form-control" required="">
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $customer['fname']; ?>" required="">
              </div>                
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $customer['lname']; ?>" required="">
              </div>              
              <div class="form-group">
                <label for="exampleInputEmail1">Email addres</label>
                <input type="email" name="email" class="form-control" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>
    </div>        
</div>
</body>
</html>