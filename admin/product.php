<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                                <a class="nav-link active text-light" aria-current="page" href="#"><i
                                        class="bi bi-plus-square me-1"></i>QUẢN LÝ NHÂN VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#"><i
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
                                    <span>Tendangnhap</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdown">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-3"></i>Đăng
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
        <h2 class="text-center">Thêm sản phẩm</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./img/no-image.jpg" class="img-fluid mt-5" alt="...">

                </div>
                <div class="col-md-8">
                    <form class="product_input mt-5">
                        <div class="form-floating mt-2 mb-3">
                            <input type="text" id="inputname" name="name" class="form-control" id="floatingInput"
                                value="">
                            <label for="floatingInput">Tên sản phẩm</label>
                        </div>
                        <div class="form-floating mt-4">
                            <input type="text" id="inputdescription" name="description" class="form-control"
                                id="floatingInput" value="">
                            <label for="floatingInput">Mô tả</label>
                        </div>
                        <div class="form-floating mt-4">
                            <input type="text" id="inputprice" name="price" class="form-control" id="floatingInput"
                                value="">
                            <label for="floatingInput">Giá</label>
                        </div>
                        <div class="mt-4">
                            <label for="disabledSelect">Thể loại</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Gà rán</option>
                                <option>Pizza</option>
                                <option>đồ ăn vặt</option>
                                <option>Đồ uống</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="file">Thêm ảnh</label>
                            <input type="file" name="myFile" class="form-control " id="file">
                        </div>
                        <input type="submit" name="submit" value="Lưu sản phẩm"
                            class="submit_product fs-3 pe-3 ps-3 mt-5 ms-5 pt-1 pb-1 rounded-pill border border-light"
                            style="background-color:rgb(255, 145, 0)">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>