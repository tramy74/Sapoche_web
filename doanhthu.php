<?php
include('connect.php');
// Lấy giá trị ngày, tháng, năm từ yêu cầu GET
$ngay = $_GET['ngay'];
$thang = $_GET['thang'];
$nam = $_GET['nam'];
if($ngay==''&&$thang==''&&$nam!='')
{
    $sql = "SELECT SUM(giatien) AS tong_gia_tien 
        FROM donhangdatthanhcong 
        WHERE YEAR(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $nam";
}
if($ngay==''&&$thang!=''&&$nam!='')
{
    $sql = "SELECT SUM(giatien) AS tong_gia_tien
        FROM donhangdatthanhcong
        WHERE MONTH(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $thang
        AND YEAR(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $nam";
}
if($ngay!=''&&$thang!=''&&$nam!=''){
$sql = "SELECT SUM(giatien) AS tong_gia_tien FROM donhangdatthanhcong WHERE DAY(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $ngay AND MONTH(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $thang AND YEAR(STR_TO_DATE(ngaydathang, 'Ngày %d tháng %m năm %Y - %H:%i')) = $nam";}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $doanhThu = $row['tong_gia_tien'];

  // Trả về kết quả tổng giá tiền
  echo $doanhThu;
} else {
  echo "Không tìm thấy doanh thu.";
}

// Đóng kết nối
$conn->close();
?>