<?php
    //B1: Mở kết nối
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "chungchi";
    $conn = mysqli_connect($hostname, $username, $password,$dbname);
    if (!$conn) {
        die('Không thể kết nối: ' . mysqli_error($conn));
        exit();
    }
    //echo '<i class="fas fa-check-circle"></i>'
    echo 'Kết nối thành công';
    //mysqli_close($conn); //Câu lệnh đóng kết nối
    ?>