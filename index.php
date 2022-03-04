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
  <div class="container">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top"style="background-color:rgb(255, 145, 0)">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fixed navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header"
            aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center ms-5" id="header">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">TRANG CHỦ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">THỰC ĐƠN</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                  <li><a class="dropdown-item" href="#">Gà rán</a></li>
                  <li><a class="dropdown-item" href="#">Pizza</a></li>
                  <li><a class="dropdown-item" href="#">Đồ uống</a></li>
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
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart me-1"></i>ĐẶT HÀNG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active me-2" href="#">ĐĂNG NHẬP</a>
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
    <div class="main_header">
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
            <img src="./img/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/1.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/2.PNG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
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
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Gà rán</a></li>
            <li><a class="dropdown-item" href="#">Đồ ăn vặt</a></li>
            <li><a class="dropdown-item" href="#">pizza</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Đồ uống</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- main_food -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md">
          <div class="card" style="width: 18rem;">
            <img src="./img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn pe-5 ps-5 ms-5" style="background-color:rgb(255, 145, 0)">Đặt hàng</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 18rem;">
            <img src="./img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn pe-5 ps-5 ms-5" style="background-color:rgb(255, 145, 0)">Đặt hàng</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 18rem;">
            <img src="./img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn pe-5 ps-5 ms-5" style="background-color:rgb(255, 145, 0)">Đặt hàng</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 18rem;">
            <img src="./img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn pe-5 ps-5 ms-5" style="background-color:rgb(255, 145, 0)">Đặt hàng</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>