<?php
$conn = mysqli_connect('localhost','root','','fastfood11');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$category=$_POST['category'];

//Xử lý phần ảnh 
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["myFile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin

if(isset($_POST["submit"]) && !empty($_FILES["myFile"]["name"])){
$allowTypes = array('jpg','png','jpeg','gif','pdf','JPG');//khai báo mảng để lưu chữ định dang mà bạn upload lên
if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $sql="INSERT INTO product (name,description,price,id_category,image_name) VALUES ('".$name."','".$description."','".$price."','".$category."','".$fileName."')";
        //$sql="UPDATE product SET image_name='$fileName' WHERE id_product";
        $insert =  mysqli_query($conn,$sql);
        if($insert==true){
            $add = "Sản phẩm đã được thêm thành công";
            header("Location:index.php?add=$add");
        }else{
            $error = "Sản phẩm thêm không thành công";
            header("Location:index.php?error=$error");
        } 
    }else{
        $error = "Sản phẩm thêm không thành công";
        header("Location:index.php?error=$error");
    }
}else{
    $error = "Sản phẩm thêm không thành công";
    header("Location:index.php?error=$error");
}
}else{
    $error = "Sản phẩm thêm không thành công";
    header("Location:index.php?error=$error");
}
// Display status message
echo $statusMsg;
//Xử lý update ảnh bìa
$statusMsg = '';


?>