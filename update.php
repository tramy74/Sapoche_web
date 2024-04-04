<?php
    include('connect.php');
    $sql_insert = "INSERT INTO dangnhap (ID, Ten, MatKhau) VALUES (1, 'Đăng nhập', '1234') ON DUPLICATE KEY UPDATE Ten = 'Đăng nhập', MatKhau = '1234'";
    mysqli_query($conn, $sql_insert);
    echo '<script>window.location.href = "index.php";</script>';
    mysqli_close($conn);
?>
