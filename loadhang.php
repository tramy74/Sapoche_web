<?php 
include("connect.php");
$id = $_GET['variable']; // Lấy ID sản phẩm từ tham số truyền qua URL
$query = "SELECT Ten FROM dangnhap WHERE ID = 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
 // Lấy tên khách hàng từ kết quả truy vấn
if($row["Ten"]!=="Đăng nhập")
{
  $tenkhachhang = $row["Ten"];
}else
{
  $tenkhachhang = "";
}
// Kiểm tra xem sản phẩm đã được thêm vào giỏ hàng chưa
$checkQuery = "SELECT * FROM themhang WHERE idhang = $id AND Tenkhachhang = '$tenkhachhang'";
$checkResult = mysqli_query($conn, $checkQuery);

if (!(mysqli_num_rows($checkResult) > 0)) {
  // Thêm dữ liệu vào bảng themhang
  $insertQuery = "INSERT INTO themhang (idhang, Tenkhachhang) VALUES ($id, '$tenkhachhang')";
  $insertResult = mysqli_query($conn, $insertQuery);
  if (!$insertResult) {
    echo '<script>alert("Thêm dữ liệu vào bảng themhang thất bại: ' . mysqli_error($conn) . '");</script>';
  } 
}


?>