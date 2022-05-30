<?php

include_once('AdminHome.html');

?>

<head>
  <style>

.container{
    width: 100%;
}
.form{
    width: 50%;
    margin: 0 auto;
}
.input-group{
    width: 100%;
    margin: 12px 0;
}
legend{
    font-size: 18px;
    letter-spacing: 1px;
    color: rgb(5, 153, 109);
    padding: 10px 0;
    font-weight: bold;
}
.label{
    width: 40%;
    float: left;
    margin: 10px 0;
}
.input{
    width: 60%;
    float: left;
    margin: 10px 0;
}
button{
    height: 40px;
    background-color: forestgreen;
    outline: none;
    border-radius: 2px;
    border: white solid 2px;
    color: white;
    margin-top: 20px;
    margin-right: 20px;
    font-size: 14px;
    font-weight: bold;
}
.form a{
    color: dodgerblue;
    text-decoration: none;
}
.input input{
    border: none;
    border:skyblue solid 1px;
    width: 100%;
    outline: none;
    height: 30px;
    font-size: 16px;
    border-radius: 3px;
    letter-spacing: 1px;
}
.input input:focus{
    border:rgb(73, 192, 240) solid 2px;

}


  </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <legend>Reset Password</legend>
                <div class="input-group">
                    <div class="label">
                        <label for="userame">Enter Username</label>
                    </div>
                    <div class="input">
                        <input type="text" name="username" id="email">
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">
                        <label for="password">New Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="pwd" id="password">
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">
                        <label for="c_password">Confirm Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="c_pwd" id="c_password">
                    </div>
                </div>
                <div class="input-group">
                    <button type="submit" name="reset">RESET PASSWORD</button> <a href="login.php">Or Login to your account</a>
                </div>
            </form>
            <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){

    echo "Failed";
}


                if(isset($_POST['reset'])){
                    $username = mysqli_real_escape_string($conn, $_POST['username']);
                    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
                    $c_pwd = mysqli_real_escape_string($conn, $_POST['c_pwd']);
                    $sql = "SELECT * FROM admin WHERE username='$username'";

                   

                    $query = mysqli_query($conn, $sql);
                   
                    if(mysqli_num_rows($query)>0){
                        if($pwd == $c_pwd){
                            $en = md5($pwd);
                            $sql1 = "UPDATE admin SET pwd = '$en' WHERE username='$username'";
                            $q = mysqli_query($conn, $sql1);
                            echo ' <div class="infors">Password changed <a href="login.php">Login Now</a></div>';
                        }else{
                            echo ' <div class="infors">Password does not match</div>';

                        }
                    }else{

                    }
                }

            ?>
        </div>
    </div>
</body>