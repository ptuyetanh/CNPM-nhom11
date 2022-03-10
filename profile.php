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
//truy vấn cơ sở dữ liệu
$sql = "SELECT * FROM user_account where id = $id";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    while($row =mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fastfood11</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <!-- header -->
  <div class="container header">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:rgb(255, 145, 0)">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="home.php">
            <img src="./img/logo.PNG" alt="" width="60" height="45">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header"
            aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center ms-5" id="header">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="home.php"><i class="bi bi-house me-1"></i>TRANG CHỦ</a>
              </li>
              <li class="nav-item dropdown menu_food">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown"
                  aria-expanded="false"><i class="bi bi-menu-up me-1"></i>THỰC ĐƠN</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown" style="background-color:rgb(255, 145, 0)">
                  <li><a class="dropdown-item text-light" href="#">Gà rán</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-light" href="#">Pizza</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-light" href="#">Đồ uống</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">KHUYẾN MÃI</a>
              </li>
              <form class="ms-3">
                <div class="input-group me-5">
                  <input type="text" class="form-control pe-5 border border-light text-light"
                    style="background-color:rgb(255, 145, 0)" placeholder="Tìm kiếm" aria-label="Tìm kiếm"
                    aria-describedby="basic-addon1">
                  <span class="input-group-text text-light" id="basic-addon1"
                    style="background-color:rgb(255, 145, 0)"><i class="bi bi-search"></i></span>
                </div>
              </form>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="header">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
              <li class="nav-item shopping-cart">
                <a class="nav-link active" aria-current="page"><i class="bi bi-cart me-1"></i>ĐẶT HÀNG</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php
                   $avatar = 'admin/uploads/'.$row["avatar"];
                  echo '<img src="'.$avatar.'" alt="" class="rounded-circle" width="36"
                    height="36">'?>
                  <span><?php echo $row['username'];?></span>
                  </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdown"
                  style="background-color:rgb(255, 145, 0)">
                  <li><a class="dropdown-item text-light" href="#"><i class="bi bi-person-circle me-2"></i>Thông tin cá
                      nhân</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-light" href="#"><i class="bi bi-cart-check me-2"></i>Đơn hàng đã
                      đặt</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-light" href="#"><i class="bi bi-box-arrow-right me-3"></i>Đăng
                      xuất</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!--main -->
  <main class="main_product">
    <h3 class="text-center profile" style="margin-top:100px">Thông tin cá nhân</h3>
    <?php
      if(isset($_GET['profile'])){
          echo "<h5 style='color:green' class='text-center'> {$_GET['profile']} </h5>";
      }
      ?>
    <form class="container" action="process-profile.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4">
          <?php
           $avatar = 'admin/uploads/'.$row["avatar"];
          echo '<img src="'.$avatar.'" class="img-fluid rounded-circle mt-5" alt="" id="image">'?>
          <script>
            function choosefile(fileinput) {
              if (fileinput.files && fileinput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                  $("#image").attr("src", e.target.result);
                }
                reader.readAsDataURL(fileinput.files[0]);
              }
            }
          </script>
        </div>
        <div class="col-md-8">
          <div class="product_input mt-5">
            <div class="form-floating mt-2 mb-3">
              <input type="text" id="inputname" name="name" class="form-control" id="floatingInput" value="<?php echo $row['fullname']?>">
              <label for="floatingInput">Họ và tên</label>
            </div>
            <div class="form-floating mt-4">
              <input type="text" id="inputaddress" name="address" class="form-control" id="floatingInput" value="<?php echo $row['address']?>">
              <label for="floatingInput">Địa chỉ</label>
            </div>
            <div class="form-floating mt-4">
              <input type="text" id="inputphonenumber" name="phonenumber" class="form-control" id="floatingInput"
                value="<?php echo $row['phonenumber']?>">
              <label for="floatingInput">Số điện thoại</label>
            </div>
            <div class="form-floating row">
              <label for="birthday" class="mb-5 text-secondary">Ngày sinh</label><br>
              <input type="date" id="birthday" name="dateofbirth" class="col-md-6 mt-5 ms-3"
                value="<?php echo $row['dateofbirth']?>">
            </div>
            <div class="mt-4">
              <label for="file">Thêm ảnh</label>
              <input type="file" name="myFile" class="form-control " id="file" value="<?php echo $row['avatar']?>" onchange="choosefile(this)">
            </div>
            <input type="submit" name="submit" value="Chỉnh sửa thông tin"
              class="submit_product fs-3 pe-3 ps-3 mt-5 ms-5 pt-1 pb-1 rounded-pill border border-light"
              style="background-color:rgb(255, 145, 0)">
          </div>
        </div>
      </div>
    </form>
  <?php
              }
          }
  ?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>