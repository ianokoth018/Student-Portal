<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND pwd = '$pwd' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: AdminHome.html");
    } else {
        echo "invalid username and password";
    }
    

}
?>
