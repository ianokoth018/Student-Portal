<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}

        $id=$_GET['custId'];
		$sql = "UPDATE students  SET status='active' WHERE id= '$id'";
      
		$run = mysqli_query($conn,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Activated succesfully');
					window.open('ViewCourse.php','_self');
				  </script>";
		}else{
			echo "<script> 
            alert(' Fail');
			</script>";
		}
	