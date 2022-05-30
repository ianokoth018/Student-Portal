<?php
if(count($_POST)>0){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "School";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if(!$conn){
    
        echo "Failed";
    }
$query = "UPDATE test set userid='" . $_POST['userid'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'"; // update form data from the database
 if (mysqli_query($conn, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }
}
header ("Location: index.php?msg=".$msg."");
?>