<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
  <!-- header -->
  <div class="container header">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top"style="background-color:rgb(255, 145, 0)">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="#">
            <img src="./img/logo.PNG" alt="" width="60" height="45">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header"
            aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center ms-5" id="header">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#"><i class="bi bi-house me-1"></i>TRANG CHỦ</a>
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
                  <input type="text" class="form-control pe-5 border border-light text-light" style="background-color:rgb(255, 145, 0)"
                    placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon1">
                  <span class="input-group-text text-light" id="basic-addon1" style="background-color:rgb(255, 145, 0)"><i
                      class="bi bi-search"></i></span>
                </div>
              </form>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="header">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=""><i class="bi bi-cart me-1"></i>ĐẶT HÀNG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active me-2" href="login.php">ĐĂNG NHẬP</a>
              </li>
              <li class="nav-item">
                <button class="nav-link active border border-white rounded-pill pe-3 ps-3" style="background-color:rgb(255, 145, 1)">ĐĂNG KÝ</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- main -->
  <main class="main" style="background-color:rgb(255, 219, 172)">
    <!-- main_header -->
    <div class="main_header mt-4">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/1.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-3">
              <h5 class="fs-1">Fast food 11</h5>
              <p class="fs-2">Hãy tận hưởng những món ăn ngon tại cửa hàng của chúng tôi</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/1.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-3">
              <h5 class="fs-1">Fast food 11</h5>
              <p class="fs-2">Luôn luôn sẵn sàng phục vụ quý khách</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/2.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-5">
              <h5 class="fs-1">Fast food 11</h5>
              <p class="fs-2">Với chương trình khuyến mãi hấp dẫn</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- main_nab -->
    <div class="main_nab">
      <ul class="nav nav-tabs justify-content-md-center" style="background-color:rgb(255, 145, 0)">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" style="background-color:rgb(255, 145, 1)" href="#">TẤT CẢ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">LỌC SẢN PHẨM</a>
          <ul class="dropdown-menu" style="background-color:rgb(255, 145, 0)">
            <li><a class="dropdown-item text-light" href="#">Gà rán</a></li>
            <li><a class="dropdown-item text-light" href="#">Đồ ăn vặt</a></li>
            <li><a class="dropdown-item text-light" href="#">pizza</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-light" href="#">Đồ uống</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- main_food -->
    <div class="container-fluid mt-5">
      <div class="menu row">
      <?php
    $conn = mysqli_connect('localhost','root','','fastfood11');
    if(!$conn){
      die("kết nối thất bại");
    }
    $sql = "SELECT * FROM product INNER JOIN category on product.id_category=category.id_category";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="col-md">
          <div class="card" style="width: 18rem;">
          <?php  $image_name = 'admin/uploads/'.$row["image_name"];
            echo '<td><img src="'.$image_name.'"  class="card-img-top" width="300" height="300"></td>'?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name'];?></h5>
              <p class="card-text"><?php echo $row['description'];?></p>
              <p class="price"><span><?php echo $row['price'];?></span><sup>đ</sup></p>
              <a href="#" class="btn-add btn pe-5 ps-5 ms-5" style="background-color:rgb(255, 145, 0)">Đặt hàng</a>
            </div>
          </div>
        </div>
    <?php     
                }
              }
    ?>
      </div>
    </div>
  </main>
  <!-- footer -->
  <footer style="background-color:rgb(255, 145, 0)" >
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active text-light" aria-current="page" href="#">Liên hệ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Điều khoản & chính sách</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Phản hồi ý kiến</a>
      </li>
    </ul>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active text-light" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#"><i class="bi bi-messenger"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#"><i class="bi bi-youtube"></i></a>
      </li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>