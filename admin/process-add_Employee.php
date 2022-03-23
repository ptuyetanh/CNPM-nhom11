<?php
session_start();
$conn = mysqli_connect('localhost','root','','fastfood11');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$dateofbirth=$_POST['dateofbirth'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$status=$_POST['status'];

//Xử lý phần ảnh 
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["myFile"]["name"]);
//echo $fileName;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin

if(isset($_POST["submit"]) && $status==1 && !empty($_FILES["myFile"]["name"]) && $email !='' && $password !='' && filter_var ($email, FILTER_VALIDATE_EMAIL) == false ){
$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG');//khai báo mảng để lưu chữ định dang mà bạn upload lên
if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $sql="INSERT INTO account (fullname,username,email,password,avatar,dateofbirth,phonenumber,address,status) VALUES ('".$fullname."','".$username."','".$email."','".$password."','".$fileName."','".$dateofbirth."','".$phonenumber."','".$address."','".$status."')";
        $insert =  mysqli_query($conn,$sql);
        if($insert==true){
            $add = "Nhân viên đã được thêm thành công";
            header("Location:EmployeeManager.php?add=$add");
        }else{
            $error = "Nhân viên thêm không thành công";
            header("Location:EmployeeManager.php?error=$error");
        } 
    }else{
        $error = "Nhân viên thêm không thành công";
        header("Location:EmployeeManager.php?error=$error");
    }
}else{
    $error = "Nhân viên thêm không thành công";
    header("Location:EmployeeManager.php?error=$error");
}
}else{
    $error = "Nhân viên thêm không thành công";
    header("Location:EmployeeManager.php?error=$error");
}
?>