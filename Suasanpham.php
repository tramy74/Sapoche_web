<?php
// Kết nối tới cơ sở dữ liệu
include('connect.php');

if (!empty($_POST['t']) && $_POST['t'] == 'sp') {
    // Lấy giá trị từ biến POST
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
$sql = "UPDATE sanpham SET
        TenDienThoai = '$ten',
        HangSanXuat = '$hang',
        AnhDaiDien = '$hinhAnh',
        GiaTien = '$giaTien',
        GiamGiaPhanTram = '$giamGia',
        GiaGiam = '$giaSauGiam',
        LoaiSanPham = '$loaiSanPham',
        SoLuong = '$soLuong',
        AnhMota1 = '$hinhMoTa1',
        AnhMota2 = '$hinhMoTa2',
        AnhMota3 = '$hinhMoTa3',
        AnhMota4 = '$hinhMoTa4'
        WHERE ID = '$ma'";
if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công";
} else {
    echo "Lỗi: " ;
}
}
if (!empty($_POST['t']) && $_POST['t'] == 'dh') {
    // Lấy giá trị từ POST
    $id_don_hang = $_POST['ma'];
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

    // Thực hiện truy vấn UPDATE để cập nhật thông tin sản phẩm trong bảng donhang
    $sql = "UPDATE donhang SET
                ten_khach_hang = '$ten_khach_hang',
                gioi_tinh = '$gioi_tinh',
                so_dien_thoai = '$so_dien_thoai',
                ten_san_pham = '$ten_san_pham',
                tinh = '$tinh',
                huyen = '$huyen',
                xa = '$xa',
                so_luong = '$so_luong',
                gia = '$gia',
                ngay = '$ngay'
            WHERE id = '$id_don_hang'";

    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật đơn hàng thành công";
    } else {
        echo "Lỗi: " ;
    }
}
if (!empty($_POST['t']) && $_POST['t'] == 'dhdt') {
    $id = $_POST['ma'];
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
    
    // Chuẩn bị câu truy vấn UPDATE
    $sql = "UPDATE donhangdatthanhcong SET ten='$ten', gioitinh='$gioiTinh', sdt='$sdt', tinh='$tinh', huyen='$huyen', phuong='$xa', tensanpham='$tenSanPham', soluong=$soLuong, giatien=$gia, ngaydathang='$ngay' WHERE id=$id;";
    
    if ($conn->query($sql) === TRUE) {
      echo "Cập nhật đơn hàng thành công";
    } else {
      echo "Lỗi: " ;
    }
  }
$conn->close();
?>
