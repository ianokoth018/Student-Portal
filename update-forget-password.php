<?php
if(isset($_POST['Password']) && $_POST['reset_link_token'] && $_POST['email'])
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "School";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if(!$conn){
    
        echo "Failed";
    }
      
$emailId = $_POST['email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['password']);
$query = mysqli_query($conn,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");
$row = mysqli_num_rows($query);
if($row){
mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'");
echo '<p>Congratulations! Your password has been updated successfully.</p>';
}else{
echo "<p>Something goes wrong. Please try again</p>";
}
}
?>