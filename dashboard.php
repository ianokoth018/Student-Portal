<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COURSES</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .reg{
        text-align: center;
        margin: 20px;
      }
    </style>
</head>
<body>
<form action="report.php" method="POST">
        <input type="text" name="status" value="reported" hidden>
        <input type="submit" class="btn btn-primary" value="Report" name='submit'>
    </form>
    <a href="account.php">
            <button class="btn btn-primary" style="margin-left: 90%;">Account</button>
          </a>
          <br><br>
    <a href="logout.php">
            <button class="btn btn-primary" style="margin-left: 90%;">Logout</button>
          </a>
<div class="container mt-2">
    <div class="row">
        
                    
      
           <form action="studentcourse.php" method="POST">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Tick</th>
                  <th scope="col">Course Name</th>
                  <th scope="col">Couse code </th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "School";
                
                $conn = new mysqli($servername,$username,$password,$dbname);
                
                if(!$conn){
                
                    echo "Failed";
                }
                $query="select * from course "; 
                $result=mysqli_query($conn,$query);
                ?>
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <td scope="row">
                      <input type="checkbox" required value="<?php echo $array[0];?>">
                    </td>
                    <td><input type="text" name="course" value="<?php echo $array[1];?>" readonly></td>
                    <td><input type="text" name="CourseCode" value="<?php echo $array[2];?>" readonly></td>
                    <td>
                       <?php 
							 			if ($array[3] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
            ?> </td>
                    <td> 
            
                </tr>
                
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>

            <div class="container">
        <input type="submit" class="btn btn-success" value="Save">
        <input type="reset" class="btn btn-success" value="Cancel">
</div>
        </div>
    </div>        
</div>
</form> 
</body>
</html>