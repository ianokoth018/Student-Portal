<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}
	if (isset($_POST['status'])){
		$status = $_POST['status'];
		$sql = "UPDATE course SET status='1' WHERE status= 'status'";
		$run = mysqli_query($conn,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Application Approved');
					window.open('ViewCourse.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Approved');
			</script>";
		}
	}