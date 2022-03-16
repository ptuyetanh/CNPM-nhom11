<?php
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    session_start();
    require_once 'config.php';
    if(isset($_POST["username"]))
    {   
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]); 
        $email=$_POST["email"];
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $sql = "SELECT * from account WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row>0){
            echo '<script type="text/javascript">alert("Tài khoản đã tồn tại!"); history.back();</script>';
        }
        
        if(mysqli_num_rows($result) <= 0 ) {
            if(isset($_POST["submit"])){
            $sql="INSERT INTO account (email,username, password) VALUES ('$email','$username','$password')";
            mysqli_query($conn,$sql);
            header("location:login.php");
        }
        
    }
}
?>