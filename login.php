<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo " Connection Failed";
}


$RegNo = $_POST['RegNo'];
$Password = $_POST['Password'];

$uppercase = preg_match('@[A-Z]@', $Password);
$lowercase = preg_match('@[a-z]@', $Password);
$number    = preg_match('@[0-9]@', $Password);

if(!$uppercase || !$lowercase || !$number || strlen($Password) < 8) {
    echo "Invalid password";
  }
  else{
    $password=md5($password);
    $sql = "SELECT * FROM students WHERE RegNo = '$RegNo' AND Password = '$password'"; 
    $res = mysqli_query($conn, $sql);
  
  if($res){
    while($row=mysqli_fetch_array($res)){
      
      $RegNo = $row['RegNo'];
      session_start();
      $_SESSION['RegNo'] = $RegNo;
    }
    
      header("location:dashboard.php");
    
     
  }else{
      echo "Failed";
  }
  }


  
?>