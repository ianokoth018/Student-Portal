<?php

include_once ("dashboard.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}

if(isset($_POST['submit'])){

    $RegNo = $_SESSION['RegNo'];
    
    $sql ="UPDATE `students` SET `status`='reported'  WHERE RegNo = '$RegNo' ";
    $result = mysqli_query($conn, $sql);
     
       
if($result){
    echo '<script>alert("Reported successful")</script>';
}else{
    echo '<script>alert("Failed try again!!!")</script>';
}

}
 
   ?>