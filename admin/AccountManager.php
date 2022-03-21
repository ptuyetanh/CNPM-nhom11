<?php
  session_start();
  if(!isset($_SESSION['isLoginOK'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Admin page</title>
</head>
<body>
    <!-- header -->
   <div class="container-fluid">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:rgb(255, 145, 0)">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./img/logo.PNG" alt="" width="60" height="45">
                        <span class="navbar-brand mb-0 h1 text-light">ADMIN</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center ms-5" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="index.php"><i
                                        class="bi bi-plus-square me-1"></i>QUẢN LÝ SẢN PHẨM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="EmployeeManager.php"><i
                                        class="bi bi-plus-square me-1"></i>QUẢN LÝ NHÂN VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="AccountManager.php"><i
                                        class="bi bi-plus-square me-1"></i>QUẢN LÝ THÀNH VIÊN</a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="dropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/no-image.jpg" alt=""
                                        class="rounded-circle" width="36" height="36">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="login.php"><i class="bi bi-box-arrow-right me-3"></i>Đăng
                                            xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <main>
        <div class="container">
            <h3 class="text-center text-warning employeeManager">Thông tin thành viên</h3>
            <?php 
                if(isset($_GET['add'])){
                    echo "<h5 style='color:green' class='text-center'> {$_GET['add']} </h5>";
                }
            ?>
            <?php
                if(isset($_GET['error'])){
                    echo "<h5 style='color:red' class='text-center'> {$_GET['error']} </h5>";
                }
            ?>

            <div>
                <a href="add_Account.php" class="btn pe-3 ps-3 text-light mb-3" style="background-color:rgb(255, 145, 0)">Thêm thành viên</a>
            </div>
            
            <table class="table table-bordered table-hover border-warning">
            <thead style="background-color:rgb(255, 145, 0)">
              <tr>
                <th scope="col" class="text-light text-center">Họ và Tên</th>
                <th scope="col" class="text-light text-center">Tên tài khoản</th>
                <th scope="col" class="text-light text-center">Email</th>
                <th scope="col" class="text-light text-center">Mật khẩu</th>
                <th scope="col" class="text-light text-center">Ảnh đại diện</th>
                <th scope="col" class="text-light text-center">Ngày sinh</th>
                <th scope="col" class="text-light text-center">Số điện thoại</th>
                <th scope="col" class="text-light text-center">Địa chỉ</th>
                <th scope="col" class="text-light text-center">Trạng thái</th>
                
                <th scope="col" class="text-light text-center">Xóa</th>
              </tr>
            </thead>
            <tbody>
             <?php
                 $conn = mysqli_connect('localhost','root','','fastfood11');
                 if(!$conn){
                   die("kết nối thất bại");
                 }
                 $sql = "SELECT * FROM account WHERE status='1'";
                 $result = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_assoc($result)){
                     ?>
                        <tr> 
                          <td class="text-center"><?php echo $row['fullname'];?></td>
                          <td class="text-center"><?php echo $row['username'];?></td>
                          <td class="text-center"><?php echo $row['email'];?></td>
                          <td class="text-center"><?php echo $row['password'];?></td>
                          <?php  $avatar = 'uploads/'.$row["avatar"];
                          echo '<td><img src="'.$avatar.'" alt="" width="100" height="100" class="rounded-circle"></td>'?>
                          <td class="text-center"><?php echo $row['dateofbirth'];?></td>
                          <td class="text-center"><?php echo $row['phonenumber'];?></td>
                          <td class="text-center"><?php echo $row['address'];?></td>
                          <td class="text-center"><?php echo $row['status'];?></td>
                          
                          <td><a href="deleteAccount.php?id=<?php echo $row['id'];?>"><i class="bi bi-trash"></i></a></td>
                        <tr>
                       <?php     
                   }
                 }
            ?> 
            </tbody>
          </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>