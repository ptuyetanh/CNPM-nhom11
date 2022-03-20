<?php
   $id_product=$_GET['id'];

   $conn=mysqli_connect('localhost','root','','fastfood11');
   if(!$conn){
       die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
   }
   $sql = "DELETE FROM product WHERE id_product = '$id_product'";
   $number = mysqli_query($conn,$sql);
   if($number >0 ){
       header("location:index.php");
   }else{
       header("loacation:error.php");
   }
?>