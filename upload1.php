<?php

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

$sql = "INSERT INTO course (course,CourseCode) Values('$course','$CourseCode')";
      
$res = mysqli_query($conn, $sql);

      
if($res){
    echo '<script>alert("unit uploaded successful")</script>';
}else{
    echo '<script>alert("Failed try again!!!")</script>';
}

?>
