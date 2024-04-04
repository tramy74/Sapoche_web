<?php
// Kết nối tới cơ sở dữ liệu
include('connect.php');

// Lấy giá trị từ biến POST
if(!empty($_POST['t']) && $_POST['t'] == 'sp')
{
    $ma = $_POST['ma'];

// Chuẩn bị câu truy vấn DELETE
$sql = "DELETE FROM sanpham WHERE ID = '$ma'";

if ($conn->query($sql) === TRUE) {
    echo "Xóa sản phẩm thành công";
} else {
    echo "Lỗi: " ;
}
}
if(!empty($_POST['t']) && $_POST['t'] == 'dh')
{
    $ma = $_POST['ma'];
    $sql = "DELETE FROM donhang WHERE ID = '$ma'"; 
    
if ($conn->query($sql) === TRUE) {
    echo "Xóa đơn hàng thành công";
} else {
    echo "Lỗi: " ;
}
}
if(!empty($_POST['t']) && $_POST['t'] == 'dhdt')
{
    $ma = $_POST['ma'];
    $sql = "DELETE FROM donhangdatthanhcong WHERE ID = '$ma'"; 
    
if ($conn->query($sql) === TRUE) {
    echo "Xóa đơn hàng thành công";
} else {
    echo "Lỗi: " ;
}
}
// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>
