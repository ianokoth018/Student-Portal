<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}

$RegNo = $_POST['RegNo'];
$UserName = $_POST['UserName'];
$Password =$_POST['Password'];
$email =$_POST['email'];
// $Password =hash($_POST['Password']);
$ConfirmPassword = $_POST['ConfirmPassword'];

$uppercase = preg_match('@[A-Z]@', $Password);
$lowercase = preg_match('@[a-z]@', $Password);
$number    = preg_match('@[0-9]@', $Password);
if($Password == $ConfirmPassword){
    if(!$uppercase || !$lowercase || !$number || strlen($Password) < 8) {
        echo "Invalid password";
      }
      else{
          $sql = "INSERT INTO students (RegNO,email,UserName,password) Values('$RegNo','$email','$UserName','".md5($password)."')";
      
      $res = mysqli_query($conn, $sql);
      
      if($res){
        header("location:login.html"); 
      }else{
          echo "Failed";
      }
      }
      

}else{
    echo "Password does not match";
}






?>