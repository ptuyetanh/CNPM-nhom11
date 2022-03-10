<?php
    $user = 'root';
    $pass = '';
    $host = 'localhost';
    $db = 'fastfood11';

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Không thể kết nối .Lý do:".mysqli_connect_error());    
    }
}
?>