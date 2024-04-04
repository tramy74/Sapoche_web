<?php
// Kết nối tới cơ sở dữ liệu
include('connect.php');

// Lấy giá trị từ biến POST
if (!empty($_POST['t']) && $_POST['t'] == 'sp') {
  $ma = $_POST['ma'];
  $ten = $_POST['ten'];
  $hang = $_POST['hang'];
  $hinhAnh = $_POST['hinhAnh'];
  $giaTien = $_POST['giaTien'];
  $giamGia = $_POST['giamGia'];
  $giaSauGiam = $_POST['giaSauGiam'];
  $soLuong = $_POST['soLuong'];
  $hinhMoTa1 = $_POST['hinhMoTa1'];
  $hinhMoTa2 = $_POST['hinhMoTa2'];
  $hinhMoTa3 = $_POST['hinhMoTa3'];
  $hinhMoTa4 = $_POST['hinhMoTa4'];
  $loaiSanPham = $_POST['loaiSanPham'];
  // Chuẩn bị câu truy vấn INSERT
  $sql = "INSERT INTO sanpham (ID, TenDienThoai, HangSanXuat, AnhDaiDien, GiaTien, GiamGiaPhanTram, GiaGiam, LoaiSanPham, SoLuong, AnhMota1, AnhMota2, AnhMota3, AnhMota4) 
          VALUES ('$ma', '$ten', '$hang', '$hinhAnh', '$giaTien', '$giamGia', '$giaSauGiam', '$loaiSanPham', '$soLuong', '$hinhMoTa1', '$hinhMoTa2', '$hinhMoTa3', '$hinhMoTa4')";

  if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công";
  } else {
    echo "Lỗi: " ;
  }
}
if (!empty($_POST['t']) && $_POST['t'] == 'dh') {
    // Lấy giá trị từ POST
    $ten_khach_hang = $_POST['ten'];
    $gioi_tinh = $_POST['gioitinh'];
    $so_dien_thoai = $_POST['sdt'];
    $ten_san_pham = $_POST['tenSanPham'];
    $tinh = $_POST['tinh'];
    $huyen = $_POST['huyen'];
    $xa = $_POST['xa'];
    $so_luong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $ngay = $_POST['ngay'];

    // Thực hiện truy vấn INSERT để thêm dữ liệu vào bảng donhang
    $sql = "INSERT INTO donhang (ten_khach_hang, gioi_tinh, so_dien_thoai, ten_san_pham, tinh, huyen, xa, so_luong, gia, ngay)
            VALUES ('$ten_khach_hang', '$gioi_tinh', '$so_dien_thoai', '$ten_san_pham', '$tinh', '$huyen', '$xa', '$so_luong', '$gia', '$ngay')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm đơn hàng thành công";
    } else {
        echo "Lỗi: " ;
    }
}
if (!empty($_POST['t']) && $_POST['t'] == 'dhtc') {
  $ten_khach_hang = $_POST['ten'];
  $gioi_tinh = $_POST['gioitinh'];
  $so_dien_thoai = $_POST['sdt'];
  $ten_san_pham = $_POST['tenSanPham'];
  $tinh = $_POST['tinh'];
  $huyen = $_POST['huyen'];
  $xa = $_POST['xa'];
  $so_luong = $_POST['soluong'];
  $gia = $_POST['gia'];
  $ngay = $_POST['ngay'];
  // Chuẩn bị câu truy vấn INSERT
  $sql = "INSERT INTO donhangdatthanhcong (ten, gioitinh, sdt, tinh, huyen, phuong, tensanpham, soluong, giatien, ngaydathang)
  VALUES ('$ten_khach_hang', '$gioi_tinh', '$so_dien_thoai', '$tinh', '$huyen', '$xa', '$ten_san_pham',$so_luong, $gia, '$ngay');";

  if ($conn->query($sql) === TRUE) {
    echo "Thêm đơn hàng  thành công";
  } else {
    echo "Lỗi: " ;
  }
}
if (!empty($_POST['t']) && $_POST['t'] == 'dhdt') {

  $ten = $_POST['ten'];
  $gioiTinh = $_POST['gioiTinh'];
  $sdt = $_POST['sdt'];
  $tinh = $_POST['tinh'];
  $huyen = $_POST['huyen'];
  $xa = $_POST['xa'];
  $tenSanPham = $_POST['tenSanPham'];
  $soLuong = $_POST['soLuong'];
  $gia = $_POST['gia'];
  $ngay = $_POST['ngay'];
  // Chuẩn bị câu truy vấn INSERT
  $sql = "INSERT INTO donhangdatthanhcong (ten, gioitinh, sdt, tinh, huyen, phuong, tensanpham, soluong, giatien, ngaydathang)
  VALUES ('$ten', '$gioiTinh', '$sdt', '$tinh', '$huyen', '$xa', '$tenSanPham',$soLuong, $gia, '$ngay');";
  if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công";
  } else {
    echo "Lỗi: " ;
  }
}
// Đóng kết nối tới cơ sở dữ liệu
$conn->close();
?>

