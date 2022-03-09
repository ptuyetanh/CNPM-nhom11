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
<?php
    require 'template/header.php';
    require 'login-check.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <table class="table">
                    <div class="col-4">
                        <p class="lead btn btn-danger mt-5 mb-3 "><a href="order_food.php" class="text-decoration-none text-white">Trở về đơn hàng</a></p>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col"> Mã hóa đơn</th>
                            <th scope="col">Tên món</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Số lượng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $sql = "SELECT * FROM donhang, sanpham  where donhang.ma_sp=sanpham.ma_sp Order By ma_dh desc LIMIT 1";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['ma_dh']; ?> </td>
                                <td><?php echo $row['ten_sp']; ?> </td>
                                <td><img src="<?php echo $row['img']; ?> " style="width: 10rem;"></td>
                                <td><?php echo $row['so_luong']; ?> </td>
                                <td></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
    <script src="./js/order.js"></script>
</body>

</html>