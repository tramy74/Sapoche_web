<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    font-size: 25px;
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
  <input type="text" name="ten" placeholder="Tên khách hàng">
  <input type="text" name="gioitinh" placeholder="Giới tính">
  <input type="text" name="sdt" placeholder="Số điện thoại">
  <input type="text" name="tinh" placeholder="Tỉnh">
  <input type="text" name="huyen" placeholder="Huyện">
  <input type="text" name="xa" placeholder="Xã">
  <input type="text" name="tspham" placeholder="Tên sản phẩm">
</th>
<th class="input-row">
  <input type="number" name="soluong" placeholder="Số lượng">
  <input type="text" name="gia" placeholder="Giá">
  <input type="text" name="date" placeholder="Ngày đặt hàng">
      <input type="button" id="add_button" value="Thêm">
      <input type="button" id="del_button"value="Xóa">
      <input type="button" id="Sua_button" value="Sửa">
      <input type="button" onclick="product()" value="Tìm">
    </th>
</tr>
</table>
<table>
<div class="centered-text">
 THỐNG KÊ DOANH THU THEO NGÀY/THÁNG/NĂM
</div>
<th class="input-row">
<input type="text" name="doanhthu" placeholder="Danh thu">
  <input type="text" name="ngay" placeholder="Ngày">
  <input type="text" name="thang" placeholder="Tháng">
  <input type="text" name="nam" placeholder="Năm">
 <input type="button" onclick="tinhDoanhThu()" value="Thống kê">
</th>
</table>
<table>  
  <div class="centered-text">
  DANH SÁCH CÁC ĐƠN HÀNG
</div>
      <tr>
        <th>Mã</th>
        <th>Tên Khách hàng</th>
        <th>giới tính</th>
        <th>Số điện thoại</th>
        <th>Tỉnh</th>
        <th>Huyện</th>
        <th>Xã</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Ngày giờ đặt hàng</th>   
      </tr>
      <?php
include('connect.php');

// Truy vấn dữ liệu từ bảng donhang
if (isset($_GET['ma'])) {
  $ma = $_GET['ma'];
 if (strcasecmp($ma, 'abc') == 0) 
  {
    $sql = "SELECT * FROM donhangdatthanhcong";
  }else{
    $sql = "SELECT * FROM donhangdatthanhcong WHERE sdt = '$ma'"; 
  }
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row["id"] . '</td>';
      echo '<td>' . $row["ten"] . '</td>';
      echo '<td>' . $row["gioitinh"] . '</td>';
      echo '<td>' . $row["sdt"] . '</td>';
      echo '<td>' . $row["tinh"] . '</td>';
      echo '<td>' . $row["huyen"] . '</td>';
      echo '<td>' . $row["phuong"] . '</td>';
      echo '<td>' . $row["tensanpham"] . '</td>';
      echo '<td>' . $row["soluong"] . '</td>';
      echo '<td>' . $row["giatien"] . '</td>';
      echo '<td>' . $row["ngaydathang"] . '</td>';
      echo '</tr>';
    }
  } else {
    echo "<tr><td colspan='11'>Không có dữ liệu</td></tr>";
  }
} else {
  // Truy vấn dữ liệu từ bảng donhang (không có điều kiện lọc)
  $sql = "SELECT * FROM donhangdatthanhcong";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row["id"] . '</td>';
      echo '<td>' . $row["ten"] . '</td>';
      echo '<td>' . $row["gioitinh"] . '</td>';
      echo '<td>' . $row["sdt"] . '</td>';
      echo '<td>' . $row["tinh"] . '</td>';
      echo '<td>' . $row["huyen"] . '</td>';
      echo '<td>' . $row["phuong"] . '</td>';
      echo '<td>' . $row["tensanpham"] . '</td>';
      echo '<td>' . $row["soluong"] . '</td>';
      echo '<td>' . $row["giatien"] . '</td>';
      echo '<td>' . $row["ngaydathang"] . '</td>';
      echo '</tr>';
    }
  } else {
    echo "<tr><td colspan='11'>Không có dữ liệu</td></tr>";
  }
}
?>
</table>
</article>
<script>
  function product() {
    var ma = $('input[name="sdt"]').val();
    var url = new URL(window.location.href);
    url.searchParams.set('ma', ma);
    window.location.href = url.href;
  }
</script>
<script>
  function tinhDoanhThu() {
  // Lấy giá trị ngày, tháng, năm từ các trường input
  var ngay = document.getElementsByName('ngay')[0].value;
  var thang = document.getElementsByName('thang')[0].value;
  var nam = document.getElementsByName('nam')[0].value;

  // Gửi yêu cầu AJAX đến máy chủ để thực hiện truy vấn và tính tổng giá tiền
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var doanhThu = xhr.responseText;
      // Hiển thị tổng giá tiền vào trường "Doanh thu"
      document.getElementsByName('doanhthu')[0].value = doanhThu;
    }
  };
  xhr.open('GET', 'doanhthu.php?ngay=' + ngay + '&thang=' + thang + '&nam=' + nam, true);
  xhr.send();
}
$(document).ready(function() {
    // Xử lý sự kiện click vào nút "Thêm"
    $('#add_button').click(function() {
        // Lấy giá trị từ các ô nhập liệu
        var ma = $('input[name="ma"]').val();
        var ten = $('input[name="ten"]').val();
        var gioiTinh = $('input[name="gioitinh"]').val();
        var sdt = $('input[name="sdt"]').val();
        var tinh = $('input[name="tinh"]').val();
        var huyen = $('input[name="huyen"]').val();
        var xa = $('input[name="xa"]').val();
        var tenSanPham = $('input[name="tspham"]').val();
        var soLuong = $('input[name="soluong"]').val();
        var gia = $('input[name="gia"]').val();
        var ngay = $('input[name="date"]').val();
        var t = 'dhdt';
        if (ten == '' || gioiTinh == '' || sdt == '' || tenSanPham == '' || tinh == '' || huyen == '' || xa == '' || soLuong == '' || gia == '' || ngay == '') {
            alert('Vui lòng nhập đầy đủ thông tin');
        } else {
            $.ajax({
                url: 'Themsanpham.php',
                method: 'POST',
                data: {
                  t:t,
                  ma: ma,
                  ten: ten,
                  gioiTinh: gioiTinh,
                  sdt: sdt,
                  tinh: tinh,
                  huyen: huyen,
                  xa: xa,
                  tenSanPham: tenSanPham,
                  soLuong: soLuong,
                  gia: gia,
                  ngay: ngay
                },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ sau khi thêm đơn hàng thành công
                    alert(response);
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
        var gioiTinh = $('input[name="gioitinh"]').val();
        var sdt = $('input[name="sdt"]').val();
        var tinh = $('input[name="tinh"]').val();
        var huyen = $('input[name="huyen"]').val();
        var xa = $('input[name="xa"]').val();
        var tenSanPham = $('input[name="tspham"]').val();
        var soLuong = $('input[name="soluong"]').val();
        var gia = $('input[name="gia"]').val();
        var ngay = $('input[name="date"]').val();
        var t = 'dhdt';
        if (ma==''||ten == '' || gioiTinh == '' || sdt == '' || tenSanPham == '' || tinh == '' || huyen == '' || xa == '' || soLuong == '' || gia == '' || ngay == '') {
            alert('Vui lòng nhập đầy đủ thông tin');
        } else {
            $.ajax({
                url: 'Suasanpham.php',
                method: 'POST',
                data: {
                  t:t,
                  ma: ma,
                  ten: ten,
                  gioiTinh: gioiTinh,
                  sdt: sdt,
                  tinh: tinh,
                  huyen: huyen,
                  xa: xa,
                  tenSanPham: tenSanPham,
                  soLuong: soLuong,
                  gia: gia,
                  ngay: ngay
                },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ sau khi thêm đơn hàng thành công
                    alert(response);
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
    $('#del_button').click(function() {
      // Lấy giá trị từ các ô nhập liệu
      var ma = $('input[name="ma"]').val();
      var t='dhdt';
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
  var ma = $('input[name="ma"]').val();
  // Lấy giá trị ID từ ô nhập liệu
  if(ma=='')
  {
    alert('Vui lòng nhập số điện thoại khách hàng cần tìm');
  }else
  {
  var t = 'dhdt';
  if (ma == '') {
    alert('Vui lòng nhập mã đơn hàng');
  } else {
    $.ajax({
      url: 'to.php',
      method: 'POST',
      data: {
        t: t,
        ma: ma
      },
      success: function(response) {
        // Xử lý phản hồi từ máy chủ sau khi tải đơn hàng thành công
        var orderData = JSON.parse(response);
        // Hiển thị dữ liệu đơn hàng lên các trường nhập liệu
        $('input[name="ma"]').val(orderData.ma);
        $('input[name="ten"]').val(orderData.ten_khach_hang);
        $('input[name="gioitinh"]').val(orderData.gioi_tinh);
        $('input[name="sdt"]').val(orderData.so_dien_thoai);
        $('input[name="tinh"]').val(orderData.tinh);
        $('input[name="huyen"]').val(orderData.huyen);
        $('input[name="xa"]').val(orderData.xa);
        $('input[name="tspham"]').val(orderData.ten_san_pham);
        $('input[name="soluong"]').val(orderData.so_luong);
        $('input[name="gia"]').val(orderData.gia);
        $('input[name="date"]').val(orderData.ngay);
      },
      error: function(xhr, status, error) {
        // Xử lý lỗi nếu có
        alert('Lỗi: ' + error);
      }
    });
  }}
});

</script>
</body>
</html>
