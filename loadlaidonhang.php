<?php
include("connect.php");
$query1 = "SELECT Ten FROM dangnhap WHERE ID = 1";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);
$tenkhachhang = $row["Ten"];
$id = $_GET['id'];
$query = "SELECT * FROM sanpham WHERE ID = $id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $ten = $row['TenDienThoai'];
  $soluong = $row['SoLuong'];
}
$totalPrice = $_GET['totalPrice'];
$soluong = $_GET['soluong'];
$phone = $_GET['phone'];
$city = $_GET['city'];
$district = $_GET['district'];
$ward = $_GET['ward'];
$anhchi = $_GET['anhchi'];
$currentDateTime = $_GET['currentDateTime'];
$deleteQuery = "DELETE FROM themhang WHERE idhang = $id";
$deleteResult = mysqli_query($conn, $deleteQuery);
if (!$deleteResult) {
  echo mysqli_error($conn); // Phản hồi thành công nếu xóa thành công
}

$query = "INSERT INTO donhang (ten_khach_hang, gioi_tinh, so_dien_thoai, ten_san_pham, tinh, huyen, xa, so_luong, gia, ngay)
          VALUES ('$tenkhachhang', '$anhchi', '$phone', '$ten', '$city', '$district', '$ward', $soluong, $totalPrice, '$currentDateTime')";

$result = mysqli_query($conn, $query);


if ($result) {
    // Thêm dữ liệu vào bảng thành công
    echo '<script>alert("Đặt hàng thành công.");</script>';
    echo '<script>window.location.href = "index.php";</script>';
  } else {
    // Thêm dữ liệu vào bảng thất bại
    echo '<script>alert("Thêm dữ liệu vào bảng donhang thất bại: ' . mysqli_error($conn) . '");</script>';
  }

mysqli_close($conn);
?>
