<?php
include('connect.php');
$query = "SELECT * FROM dangnhap WHERE id = 1 AND Ten = 'Đăng nhập'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "not_logged_in";
} else {
    echo "logged_in";
}

$conn->close();
?>
