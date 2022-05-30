<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}

$query = "DELETE FROM course WHERE id = '" .$_GET["id"]. "' ";
if(mysqli_query($conn, $query)){
    $msg = 3;
} else {
   $msg = 4;
}

header ("Location: ViewCourse.php?msg=".$msg."");

?>