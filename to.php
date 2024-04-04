<?php
include("connect.php");
if (isset($_POST['t']) && $_POST['t'] === 'sp') {
  $id = $_POST['ma']; // Lấy giá trị ID từ yêu cầu POST

  $sql = "SELECT * FROM sanpham WHERE ID = $id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $productData = [
      'TenDienThoai' => $row['TenDienThoai'],
      'HangSanXuat' => $row['HangSanXuat'],
      'GiaTien' => $row['GiaTien'],
      'GiamGiaPhanTram' => $row['GiamGiaPhanTram'],
      'GiaGiam' => $row['GiaGiam'],
      'AnhDaiDien' => $row['AnhDaiDien'],
      'LoaiSanPham' => $row['LoaiSanPham'],
      'SoLuong' => $row['SoLuong'],
      'AnhMota1' => $row['AnhMota1'],
      'AnhMota2' => $row['AnhMota2'],
      'AnhMota3' => $row['AnhMota3'],
      'AnhMota4' => $row['AnhMota4']
    ];

    // Trả về dữ liệu sản phẩm dưới dạng JSON
    echo json_encode($productData);
  } else {
    $productData = [
      'TenDienThoai' => "Không có sản phẩm",
      'HangSanXuat' => " ",
      'GiaTien' => " ",
      'GiamGiaPhanTram' => " ",
      'GiaGiam' => " ",
      'AnhDaiDien' => " ",
      'LoaiSanPham' => " ",
      'SoLuong' => 0,
      'AnhMota1' => " ",
      'AnhMota2' => " ",
      'AnhMota3' => " ",
      'AnhMota4' => " "
    ];

    // Trả về dữ liệu sản phẩm dưới dạng JSON
    echo json_encode($productData);
  }
}

if(isset($_POST['t']) && $_POST['t'] == 'dh') {
  $id = $_POST['ma']; // Lấy giá trị ID từ yêu cầu POST

  $sql = "SELECT * FROM donhang WHERE ID = $id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $orderData = [
      'ten_khach_hang' => $row['ten_khach_hang'],
      'gioi_tinh' => $row['gioi_tinh'],
      'so_dien_thoai' => $row['so_dien_thoai'],
      'ten_san_pham' => $row['ten_san_pham'],
      'tinh' => $row['tinh'],
      'huyen' => $row['huyen'],
      'xa' => $row['xa'],
      'so_luong' => $row['so_luong'],
      'gia' => $row['gia'],
      'ngay' => $row['ngay']
    ];

    // Trả về dữ liệu đơn hàng dưới dạng JSON
    echo json_encode($orderData);
  } else {
    $orderData = [
      'ten_khach_hang' => "Không có đơn hàng",
      'gioi_tinh' => "",
      'so_dien_thoai' => "",
      'ten_san_pham' => "",
      'tinh' => "",
      'huyen' => "",
      'xa' => "",
      'so_luong' => 0,
      'gia' => 0,
      'ngay' => ""
    ];

    // Trả về dữ liệu đơn hàng dưới dạng JSON
    echo json_encode($orderData);
  }
}
if(isset($_POST['t']) && $_POST['t'] == 'dhdt') {
    $id = $_POST['ma']; // Lấy giá trị ID từ yêu cầu POST
  
    $sql = "SELECT * FROM donhangdatthanhcong WHERE id = $id";
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $orderData = [
        'ma' => $row['id'],
        'ten_khach_hang' => $row['ten'],
        'gioi_tinh' => $row['gioitinh'],
        'so_dien_thoai' => $row['sdt'],
        'tinh' => $row['tinh'],
        'huyen' => $row['huyen'],
        'xa' => $row['phuong'],
        'ten_san_pham' => $row['tensanpham'],
        'so_luong' => $row['soluong'],
        'gia' => $row['giatien'],
        'ngay' => $row['ngaydathang']
      ];
  
      // Trả về dữ liệu đơn hàng dưới dạng JSON
      echo json_encode($orderData);
    } else {
      $orderData = [
        'ma' => "",
        'ten_khach_hang' => "Không có đơn hàng",
        'gioi_tinh' => "",
        'so_dien_thoai' => "",
        'tinh' => "",
        'huyen' => "",
        'xa' => "",
        'ten_san_pham' => "",
        'so_luong' => 0,
        'gia' => 0,
        'ngay' => ""
      ];
  
      // Trả về dữ liệu đơn hàng dưới dạng JSON
      echo json_encode($orderData);
    }
  }

mysqli_close($conn);
?>
