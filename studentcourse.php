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

$course = $_POST['course'];
$CourseCode = $_POST['CourseCode'];

$RegNo = $_SESSION['RegNo'];



$checkactive=mysqli_query($conn,"SELECT *  FROM  students Where RegNo ='$RegNo' AND status='active' ");

 if($checkactive){



    $sql = "INSERT INTO studentcourse (RegNo,course,CourseCode) Values('$RegNo','$course','$CourseCode')";
    
    $res = mysqli_query($conn, $sql);
    
    if ($res) {
        echo '<script>alert("Unit Registered successful")</script>';
    }
    else{
        echo '<script>alert("Failed Try  ")</script>';
    }

}
