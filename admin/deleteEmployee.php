<?php
   $id=$_GET['id'];

   $conn=mysqli_connect('localhost','root','','fastfood11');
   if(!$conn){
       die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
   }
   $sql = "DELETE FROM account WHERE id = '$id'";
   $number = mysqli_query($conn,$sql);
   if($number >0 ){
       header("location:EmployeeManager.php");
   }else{
       header("loacation:error.php");
   }
?>