<?php
include("connect.php");
$idhang = $_POST['idhang']; // Nhận idhang từ yêu cầu POST
// Thực hiện truy vấn để xóa sản phẩm khỏi bảng themhang
$deleteQuery = "DELETE FROM themhang WHERE idhang = $idhang";
$deleteResult = mysqli_query($conn, $deleteQuery);

if ($deleteResult) {
  echo 'success'; // Phản hồi thành công nếu xóa thành công
} else {
  echo mysqli_error($conn); // Phản hồi lỗi nếu xóa không thành công
}

mysqli_close($conn);
?>
