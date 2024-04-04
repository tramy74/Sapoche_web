<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul {
  height: 100px;
  list-style-type: none;
  overflow: hidden;
  text-align: center;
  background-color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
  line-height: 24px;
  font-weight: bolder;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

article {
    float: left;
    width: 100%;
}

section::after {
    content: "";
    display: table;
    clear: both;
}

footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

article table {
    width: 100%;
    border-collapse: collapse;
}

article th,
article td {
    border: 1px solid black;
    text-align: center;
}

article td img {
    width: 20%;
}

.fa-plus {
    color: green;
}

.fa-pen {
    color: blue;
}

.fa-eraser {
    color: red;
}

img {
    width: 50%;
}
input
{
 /* width: 150px;  */
height: 50px;
}
.cach{
  margin-bottom: 100px;
}
.change
{
  margin-bottom: 50px;
}
.input-row {
    display: flex;
    flex-direction: row;
  }

  .input-row input[type="text"],
  .input-row input[type="button"],
  .input-row input[type="number"]{
    flex-grow: 1;
    font-size: 30px;
    width: 50%;
  }

  .input-row input[type="button"]:last-child {
    margin-right: 0;
  }
  .centered-text {
    display: flex;
    align-items: center;
    font-size: 50px;
  }
</style>
</head>
<body>
    <ul>
    <li><a href="indexadmin.php">Quản lý sản phẩm</a></li>
      <li><a href="indexQLDH.php">Quản lý đơn hàng</a></li>
      <li><a href="indexQLKH.php">Lịch sử đơn hàng và thống kê doanh thu</a></li>
      <li><a href="update.php">Đăng xuất</a></li>
    </ul>
    <article>
<table class="change">
<tr>
    <th class="input-row">
      <input type="text" name="ma" placeholder="Mã">
      <input type="text" name="ten" placeholder="Tên sản phẩm">
      <input type="text" name="hang" placeholder="Hãng sản xuất">
      <input type="text" name="hinhAnh" placeholder="Hình ảnh">
      <input type="text" name="giaTien" placeholder="Giá tiền">
      <input type="text" name="giamGia" placeholder="Phần trăm giảm">
      <input type="text" name="giaSauGiam" placeholder="Giá tiền sau khi giảm">
      <input type="number" name="soLuong" placeholder="Số lượng">
    </th>
    <th class="input-row">
      <input type="text" name="hinhMoTa1" placeholder="Hình mô tả 1">
      <input type="text" name="hinhMoTa2" placeholder="Hình mô tả 2">
      <input type="text" name="hinhMoTa3" placeholder="Hình mô tả 3">
      <input type="text" name="hinhMoTa4" placeholder="Hình mô tả 4">
      <input type="text" name="loaiSanPham" placeholder="Loại sản phẩm">
      <input type="button" id="add_button" value="Thêm">
      <input type="button" id="del_button"value="Xóa">
      <input type="button" id="Sua_button" value="Sửa">
    </th>
</tr>
</table>
<table class="change">
<div class="centered-text">
  CÁC LOẠI SẢN PHẨM VÀ TỔNG SỐ LƯỢNG
</div>
<tr>
<th class="input-row"> <?php    
include("connect.php");
$sql = "SELECT SUM(SoLuong) AS TongSoLuong FROM sanpham";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalQuantity = $row['TongSoLuong'];
// Truy vấn tất cả các sản phẩm
$sql1 = "SELECT LoaiSanPham, SUM(SoLuong) AS TongSoLuong FROM sanpham GROUP BY LoaiSanPham";
$result1 = mysqli_query($conn, $sql1);
// Kiểm tra kết quả truy vấn
if (mysqli_num_rows($result1) > 0) {
    // Duyệt qua từng hàng dữ liệu và hiển thị
    while ($row = mysqli_fetch_assoc($result1)) {
        $loaiSanPham = $row["LoaiSanPham"];
        $soLuong = $row["TongSoLuong"];
        $link = "";
        if ($loaiSanPham === "Điện thoại") {
            $link = 1;
        } elseif ($loaiSanPham === "Laptop") {
            $link = 2;
        }elseif ($loaiSanPham === "Tai nghe") {
          $link = 3;
        }elseif ($loaiSanPham === "Màn hình máy tính") {
        $link = 4;
      }elseif ($loaiSanPham === "Đồng hồ") {
      $link = 5;
      } elseif ($loaiSanPham === "Máy in") {
      $link = 6;
      }elseif ($loaiSanPham === "Dự phòng") {
      $link = 7;
        }elseif ($loaiSanPham === "Tablet") {
        $link = 8;
      }elseif ($loaiSanPham === "Máy tính để bàn") {
        $link = 9;
      }
            // Hiển thị dữ liệu sản phẩm trong mẫu HTML
            echo '<input type="button" class="cell" onclick="product(' . $link . ', event)" value="' . $loaiSanPham . '|' . $soLuong . '"></td>';
        }
       
    }   
 else {
    echo "Không có sản phẩm nào.";
}
?>
</th>
</tr>
</table>
  <table>  
  <div class="centered-text">
  DANH SÁCH TỪNG SẢN PHẨM
</div>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hãng sản xuất</th>
        <th>Hình ảnh</th>
        <th>Giá tiền</th>
        <th>Phẩn trăm giảm</th>
        <th>Giá tiền đã giảm</th>
        <th>Số lượng</th>
        <th>Mô tả 1</th>
        <th>Mô tả 2</th>
        <th>Mô tả 3</th>
        <th>Mô tả 4</th>
        <th>Loại sản phẩm</th>
      </tr>
  <?php
include("connect.php");
$sp = isset($_GET['sp']) ? $_GET['sp'] : '';
// Truy vấn bảng sản phẩm
if($sp=="1"){
$sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Điện thoại'";}
elseif($sp=="2"){
  $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Laptop'";}
  elseif($sp=="3"){
    $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Tai nghe'";}
    elseif($sp=="4"){
      $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Màn hình máy tính'";}
      elseif($sp=="5"){
        $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Đồng hồ'";}
        elseif($sp=="6"){
          $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Máy in'";}
          elseif($sp=="7"){
            $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'dự phòng'";}
            elseif($sp=="8"){
              $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Tablet'";}
              elseif($sp=="9"){
                $sql = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Máy tính để bàn'";}
$result = mysqli_query($conn, $sql);
// Kiểm tra kết quả truy vấn
if($sp!=="")
{
  if (mysqli_num_rows($result) > 0) {
    // Duyệt qua từng hàng dữ liệu và hiển thị
    while ($row = mysqli_fetch_assoc($result)) {
        $productId = $row['ID'];
        $soLuong = $row["SoLuong"];
        $image = $row['AnhDaiDien'];
        $name = $row['TenDienThoai'];
        $Hang = $row['HangSanXuat'];
        $Loai = $row['LoaiSanPham'];
        $price = $row['GiaTien'];
        $discountPercentage = $row['GiamGiaPhanTram'];
        $discountedPrice = $row['GiaGiam'];
        $mota1 = $row['AnhMota1'];
        $mota2 = $row['AnhMota2'];
        $mota3 = $row['AnhMota3'];
        $mota4 = $row['AnhMota4'];
        $t = number_format($price, 0, ".", ".");
        $tg = number_format($discountedPrice, 0, ".", ".");
        // Hiển thị dữ liệu sản phẩm trong mẫu HTML
        echo '<tr>';
        echo '<td>' . $productId . '</td>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $Hang . '</td>';
        echo '<td><img  src="' . $image . '" alt="Hình ảnh"></td>';
        echo '<td>' . $t . '</td>';
        echo '<td>' .  $discountPercentage . '</td>';
        echo '<td>' . $tg . '</td>';
        echo '<td>' . $soLuong . '</td>';
        echo '<td><img  src="' .  $mota1 . '" alt="Hình ảnh"></td>';
        echo '<td><img  src="' .  $mota2 . '" alt="Hình ảnh"></td>';
        echo '<td><img  src="' .  $mota3 . '" alt="Hình ảnh"></td>';
        echo '<td><img  src="' .  $mota4 . '" alt="Hình ảnh"></td>';
        echo '<td>' .  $Loai . '</td>';
        echo '</tr>';
    }
} else {
    echo "Không có sản phẩm nào.";
}
}
?>
</table>
</article>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function product(sp, event) {
  event.preventDefault();
  var url = new URL(window.location.href);
  url.searchParams.set('sp', sp);
  window.location.href = url.href;
}
$(document).ready(function() {
  // Xử lý sự kiện click vào nút "Thêm"
  $('#add_button').click(function() {
    // Lấy giá trị từ các ô nhập liệu
    var t = 'sp';
    var ma = $('input[name="ma"]').val();
    var ten = $('input[name="ten"]').val();
    var hang = $('input[name="hang"]').val();
    var hinhAnh = $('input[name="hinhAnh"]').val();
    var giaTien = $('input[name="giaTien"]').val();
    var giamGia = $('input[name="giamGia"]').val();
    var giaSauGiam = $('input[name="giaSauGiam"]').val();
    var soLuong = $('input[name="soLuong"]').val();
    var hinhMoTa1 = $('input[name="hinhMoTa1"]').val();
    var hinhMoTa2 = $('input[name="hinhMoTa2"]').val();
    var hinhMoTa3 = $('input[name="hinhMoTa3"]').val();
    var hinhMoTa4 = $('input[name="hinhMoTa4"]').val();
    var loaiSanPham = $('input[name="loaiSanPham"]').val();

    if (ten == '' || hang == '' || hinhAnh == '' || giaTien == '' || giamGia == '' || giaSauGiam == '' || soLuong == '' || hinhMoTa1 == '' || hinhMoTa2 == '' || hinhMoTa3 == '' || hinhMoTa4 == '' || loaiSanPham == '') {
      alert('Vui lòng nhập đầy đủ thông tin');
    } else {
      $.ajax({
        url: 'Themsanpham.php',
        method: 'POST',
        data: {
          t: t,
          ma: ma,
          ten: ten,
          hang: hang,
          hinhAnh: hinhAnh,
          giaTien: giaTien,
          giamGia: giamGia,
          giaSauGiam: giaSauGiam,
          soLuong: soLuong,
          hinhMoTa1: hinhMoTa1,
          hinhMoTa2: hinhMoTa2,
          hinhMoTa3: hinhMoTa3,
          hinhMoTa4: hinhMoTa4,
          loaiSanPham: loaiSanPham
        },
        success: function(response) {
          // Xử lý phản hồi từ máy chủ sau khi thêm sản phẩm thành công
          alert('Thêm sản phẩm thành công');
          location.reload();
        },
        error: function(xhr, status, error) {
          // Xử lý lỗi nếu có
          alert('Lỗi: ' + error);
        }
      });
    }
  });
});

  $(document).ready(function() {
    // Xử lý sự kiện click vào nút "Thêm"
    $('#Sua_button').click(function() {
      // Lấy giá trị từ các ô nhập liệu
      var ma = $('input[name="ma"]').val();
      var ten = $('input[name="ten"]').val();
      var hang = $('input[name="hang"]').val();
      var hinhAnh = $('input[name="hinhAnh"]').val();
      var giaTien = $('input[name="giaTien"]').val();
      var giamGia = $('input[name="giamGia"]').val();
      var giaSauGiam = $('input[name="giaSauGiam"]').val();
      var soLuong = $('input[name="soLuong"]').val();
      var hinhMoTa1 = $('input[name="hinhMoTa1"]').val();
      var hinhMoTa2 = $('input[name="hinhMoTa2"]').val();
      var hinhMoTa3 = $('input[name="hinhMoTa3"]').val();
      var hinhMoTa4 = $('input[name="hinhMoTa4"]').val();
      var loaiSanPham = $('input[name="loaiSanPham"]').val();
      var t='sp';
      if(ma==''||ten==''||hang==''||hinhAnh==''||giaTien==''||giamGia==''||giaSauGiamsoLuong||soLuong==''||hinhMoTa1==''||hinhMoTa2==''||hinhMoTa3==''||hinhMoTa4==''||loaiSanPham=='')
      {
        alert('Vui lòng nhập đầy đủ thông tin');
      }else{
      alert(ma);
      $.ajax({
        url: 'Suasanpham.php',
        method: 'POST',
        data: {
          t:t,
          ma: ma,
          ten: ten,
          hang: hang,
          hinhAnh: hinhAnh,
          giaTien: giaTien,
          giamGia: giamGia,
          giaSauGiam: giaSauGiam,
          soLuong: soLuong,
          hinhMoTa1: hinhMoTa1,
          hinhMoTa2: hinhMoTa2,
          hinhMoTa3: hinhMoTa3,
          hinhMoTa4: hinhMoTa4,
          loaiSanPham: loaiSanPham
        },
        success: function(response) {
          // Xử lý phản hồi từ máy chủ sau khi thêm sản phẩm thành công
          alert('Sửa sản phẩm thành công');
          location.reload();
        },
        error: function(xhr, status, error) {
          // Xử lý lỗi nếu có
          alert('Lỗi: ' + error);
        }
      });}
    });
  });
  $(document).ready(function() {
    // Xử lý sự kiện click vào nút "Thêm"
    $('#del_button').click(function() {
      // Lấy giá trị từ các ô nhập liệu
      var ma = $('input[name="ma"]').val();
      vart='sp';
      if(ma=='')
        {
          alert('Vui lòng nhập mã cần xóa');
        }else{
      $.ajax({
        url: 'xoasanpham.php',
        method: 'POST',
        data: {
          t:t,
          ma: ma
        },
        success: function(response) {
          // Xử lý phản hồi từ máy chủ sau khi thêm sản phẩm thành công
          alert('Xóa sản phẩm thành công');
          // Cập nhật giao diện hoặc làm điều gì đó khác
          location.reload();
        },
        error: function(xhr, status, error) {
          // Xử lý lỗi nếu có
          alert('Lỗi: ' + error);
        }
      });}
    });
  });
  $('input[name="ma"]').on('change', function() {
  var id = $(this).val();
  var t = 'sp';
  // Thực hiện truy vấn dữ liệu từ cơ sở dữ liệu để lấy các sản phẩm tương ứng với ID
  $.ajax({
    url: 'to.php', // Đường dẫn đến file xử lý truy vấn dữ liệu
    type: 'POST', // Sử dụng phương thức POST để gửi yêu cầu
    data: { t: t, ma: id }, // Gửi ID qua trường 'ma'
    success: function(response) {
      try {
        var productData = JSON.parse(response); // Chuyển đổi dữ liệu JSON thành đối tượng JavaScript
        $('input[name="ten"]').val(productData.TenDienThoai);
        $('input[name="hang"]').val(productData.HangSanXuat);
        $('input[name="hinhAnh"]').val(productData.AnhDaiDien);
        $('input[name="giaTien"]').val(productData.GiaTien);
        $('input[name="giamGia"]').val(productData.GiamGiaPhanTram);
        $('input[name="giaSauGiam"]').val(productData.GiaGiam);
        $('input[name="soLuong"]').val(productData.SoLuong);
        $('input[name="hinhMoTa1"]').val(productData.AnhMota1);
        $('input[name="hinhMoTa2"]').val(productData.AnhMota2);
        $('input[name="hinhMoTa3"]').val(productData.AnhMota3);
        $('input[name="hinhMoTa4"]').val(productData.AnhMota4);
        $('input[name="loaiSanPham"]').val(productData.LoaiSanPham);
      } catch (error) {
        console.error(error);
        alert('Đã xảy ra lỗi trong quá trình xử lý dữ liệu.');
      }
    },
    error: function() {
      alert('Đã xảy ra lỗi trong quá trình truy vấn dữ liệu.');
    }
  });
});


</script>
</body>
</html>
