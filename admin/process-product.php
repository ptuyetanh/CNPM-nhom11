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
$allowTypes = array('jpg','png','jpeg','gif','pdf');//khai báo mảng để lưu chữ định dang mà bạn upload lên
if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $sql="INSERT INTO product (name,description,price,id_category,image_name) VALUES ('".$name."','".$description."','".$price."','".$category."','".$fileName."')";
        //$sql="UPDATE product SET image_name='$fileName' WHERE id_product";
        $insert =  mysqli_query($conn,$sql);
        if($insert==true){
            $_SESSION['add'] = "<h3 class='success'>Sản phẩm đã được thêm thành công</h3>";
            header("Location:index.php");
        }else{
            $_SESSION['add'] = "<h3 class='success'>Sản phẩm thêm không thành công</h3>";
            header("Location:index.php");
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