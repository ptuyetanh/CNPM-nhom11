<?php
  session_start();
  if(!isset($_SESSION["username_id"])){
    header("location:login.php");
  }
  $id= $_SESSION["username_id"];
     $conn = mysqli_connect('localhost','root','','fastfood11');
     if(!$conn){
         die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
     }
    $name=$_POST['name'];
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    $dateofbirth=$_POST['dateofbirth'];
    if(isset($_POST["submit"])){
    $sql="UPDATE user_account SET fullname='$name',address='$address',phonenumber='$phonenumber',dateofbirth='$dateofbirth' WHERE id=$id";
        $ketqua = mysqli_query($conn,$sql);
    header("location: profile.php"); 
    }
    //Xử lý phần ảnh 
$statusMsg = '';

// File upload path
$targetDir = "admin/uploads/";
$fileName = basename($_FILES["myFile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin

if(isset($_POST["submit"]) && !empty($_FILES["myFile"]["name"])){
$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG');//khai báo mảng để lưu chữ định dang mà bạn upload lên
if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $sql="UPDATE user_account SET avatar ='$fileName' WHERE id=$id";
        $insert =  mysqli_query($conn,$sql);
        if($insert==true){
            $profile = "Chỉnh sửa thông tin thành công";
            header("Location:profile.php?profile=$profile");
        }else{
            header("Location:profile.php");
        } 
    }else{
        $statusMsg = "Sorry, there was an error uploading your file.";
    }
}else{
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
//Xử lý update ảnh bìa
$statusMsg = '';
?>