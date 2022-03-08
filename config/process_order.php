<?php
    require 'config/constants.php';
    if (isset($_GET['id_product'])) {
        $id_product = $_GET['id_product'];
        $sql1 = "INSERT into order (id_order,amount,date_order,id_product,status,id,total _money) 
        values((select price FROM product WHERE id_product=$id_product),1,CURRENT_DATE(),1,1,$id_product);  "; 
        $result1 = mysqli_query($conn, $sql1);
        if($result1){
            if (headers_sent()) {
                die("Redirect failed. Please click on this link: <a href=...>");
            }
            else{
                exit(header("location: order.php"));
            }
        }else{
            echo"lỗi rồi";
        }
    }

?>