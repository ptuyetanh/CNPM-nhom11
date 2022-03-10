<?php
   session_start();//tạo SESSION :mặc định mỗi phiên làm việ 24p(do Apache quy định)
   if(isset($_POST['btnSignIn'])){
       $email = $_POST['txtEmail'];
       $password = $_POST['txtPass'];
   
       $conn = mysqli_connect('localhost','root','','fastfood11');
       if(!$conn){
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
       }
           $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
           
       $result = mysqli_query($conn,$sql);
       if(mysqli_num_rows($result) >0){
           //cấp thẻ làm việc
           $_SESSION['isLoginOK']= $email;
          header("location:index.php");
       }else{
           $error = "Bạn nhập thông tin email hoặc mật khẩu không chính xác";
           header("location:login.php?error=$error");
       }
       mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>