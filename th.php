<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sapoches</title>
  <script src="https://kit.fontawesome.com/c890dc69e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="gh.css">
</head>

<body>
<?php
include('connect.php');
$query = "SELECT Ten FROM DANGNHAP WHERE ID = 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<nav>
    <div class="container">
      <ul>
        <li><a href=""><img style="width:50px" src="image/logospc.png" alt=""></a></li>
        <li><a href="index.php">Sapoches</a></li>
        <li class="address-form-click"><a href="#">TP Hồ Chí Minh<i class="fa-solid fa-sort-down"></i></a></li>
        <li>
          <input type="text" id="searchInput" placeholder="Tìm kiếm....">
          <span id="searchIconContainer">
            <i class="fa-solid fa-magnifying-glass"></i>
          </span>
        </li>
        <li><a href="indexGiohang.html"><button><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</button></a></li>
        <li><a href=""><span class="btn-content"><span class="btn-top"></span></span>Mua thẻ nạp ngay</a></li>
        <li><a href="">24h Công nghệ</a></li>
        <li><a href="">Hỏi đáp</a></li>
        <li id="login">
          <?php
            include('connect.php');
            if ($row['Ten'] == "Đăng nhập") {
              echo '<a href="indexLogin.php"><button><i class="fa-solid fa-user"></i> <span id="status">' . $row['Ten'] . '</span></button></a>';
            } else {
              echo '<a href="" id="updateButton"><button><i class="fa-solid fa-user"></i> <span id="status">' . $row['Ten'] . '</span></button></a>';
            }
          ?>
        </li>
      </ul>
    </div>
  </nav>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  var searchInput = document.getElementById("searchInput");

  function handleSearch() {
    var searchText = searchInput.value.trim();//.toLowerCase()

    if (searchText !== '') {
      if (searchText === 'điện thoại') {
        window.location.href = 'indexphone.php';
      } else if (searchText === 'laptop') {
        window.location.href = 'indexlaptop.php';
      } else if (searchText === 'tablet') {
        window.location.href = 'indextablet.php';
      } else if (searchText === 'tai nghe bluetooth') {
        window.location.href = 'indextTainghebluetooth.php';
      } else if (searchText === 'đồng hồ') {
        window.location.href = 'indexDongho.php';
      } else if (searchText === 'máy tính để bàn') {
        window.location.href = 'indexmaytinhdeban.php';
      } else if (searchText === 'sạc dự phòng') {
        window.location.href = 'indexSacduphong.php';
      } else if (searchText === 'máy in') {
        window.location.href = 'indexmayin.php';
      } else if (searchText === 'màn hình máy tính' || searchText === 'màn hình') {
        window.location.href = 'manhinh.php';
      } else {
        // Make an AJAX request to the PHP script
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            var idList = this.responseText;
            // Use the idList as needed
            if (idList !== '') {
              var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    window.location.href = 'hiensanphamtimkiem.php?idList=' + encodeURIComponent(idList);
  }
};
xhttp.open("POST", "hiensanphamtimkiem.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("idList=" + encodeURIComponent(idList));

            } else {
              alert('Không tìm thấy thông tin khách hàng cần tìm');
            }
          }
        };
        xhttp.open("GET", "timkiem.php?searchInput=" + searchText, true);
        xhttp.send();
      }
    } else {
      alert('Không tìm thấy thông tin khách hàng cần tìm');
    }
  }

  // Bind the handleSearch function to the click event of the searchIconContainer element
  document.getElementById("searchIconContainer").addEventListener("click", handleSearch);

  // Bind the handleSearch function to the keyup event of the searchInput element
  searchInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
      handleSearch();
    }
  });
});
      document.getElementById('updateButton').addEventListener('click', function() {
        // Gửi yêu cầu cập nhật dữ liệu tới tệp PHP để thực hiện câu truy vấn
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'update.php', true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Xử lý kết quả trả về (nếu cần)
            console.log(xhr.responseText);
          }
        };
        xhr.send();
      });
  </script>
</li>
        <div class="address-form">
          <div class="address-form-content">
            <h2>Chọn địa chỉ nhận hàng <span class="address-close">X Đóng</span></h2>
            <form action="">
              <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao hàng </p>
              <select name="">
                <option value="#">--Chọn địa điểm</option>
                <option value="#">TP Hồ Chí Minh</option>
              </select>
              <select name="">
                <option value="#">--Chọn Quận\Huyện</option>
                <option value="#">Quận 1</option>
              </select>
              <select name="">
                <option value="">--Chọn Phường\Xã </option>
                <option value="">Phường 5</option>
              </select>
              <input type="text" placeholder="Số nhà, tên đường">
              <button>Xác nhận</button>
            </form>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  <section class="menu-bar">
    <div class="container">
      <div class="menu-bar-content">
        <ul>
          <li><a href="indexphone.php"><i class="fa-solid fa-mobile"></i>Điện thoại</a></li>
          <li><a href="indexlaptop.php"><i class="fa-solid fa-laptop"></i>Laptop</a></li>
          <li><a href="indextablet.php"><i class="fa-solid fa-tablet"></i>Tablet</a></li>
          <li><a href=""><i class="fa-solid fa-headphones"></i>Phụ kiện <i style="margin-left: 3px;" class="fa-solid fa-sort-down"></i></a>
            <div class="submenu">
              <ul>
                <li><a href="indexSacduphong.php">Sạc dự phòng</a></li>
                <li><a href="indexTainghebluetooth.php">Tai nghe bluetooth</a></li>
                <li><a href="">Tai nghe có dây</a></li>
                <li><a href="">Miếng dán cường lực</a></li>
                <li><a href="">Loa</a></li>
                <li><a href="">Camera, Webcam</a></li>
                <li><a href="">Sạc, cáp</a></li>
                <li><a href="">Chuột, bàn phím</a></li>
              </ul>
            </div>
          </li>
          <li><a href="indexDongho.php"><i class="fa-solid fa-clock"></i>Đồng hồ thông minh</a></li>

          <li><a href=""><i class="fa-solid fa-desktop"></i>PC, Máy in <i style="margin-left: 3px;" class="fa-solid fa-sort-down"></i></a>
            <div class="submenu">
              <ul>
                <li><a href="indexPC.php">Máy in</a></li>
                <li><a href="hindexmaytinhdeban.php">Máy tính để bàn</a></li>
                <li><a href="">Màn hình máy tính</a></li>

              </ul>
            </div>
          </li>
          <li><a href="indexMayCu.php">Máy cũ giá rẻ</a></li>


        </ul>
      </div>
    </div>
  </section>
  <?php

?>
  <?php 
include("connect.php");
if(isset($_GET['id']) && $_GET['id'] !== '') {
  $id = $_GET['id'];
}
 // Lấy ID sản phẩm từ tham số truyền qua URL
$query = "SELECT Ten FROM dangnhap WHERE ID = 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$tenkhachhang = $row["Ten"]; // Lấy tên khách hàng từ kết quả truy vấn
$query2 = "SELECT idhang FROM themhang WHERE Tenkhachhang = '$tenkhachhang'";
$result2 = mysqli_query($conn, $query2);
$sql = "SELECT * FROM donhang WHERE ten_khach_hang = '$tenkhachhang'";
$resul = mysqli_query($conn, $sql);
if(mysqli_num_rows($result2) > 0){
    $id_hang_array = array();
    while ($row = mysqli_fetch_assoc($result2)) {
        $id_hang = $row["idhang"];
        array_push($id_hang_array, $id_hang);
    }

$id_hang_string = implode(",", $id_hang_array);

$query3 = "SELECT * FROM sanpham WHERE ID IN ($id_hang_string)";
$result3 = mysqli_query($conn, $query3);

if (mysqli_num_rows($result3) > 0) {
    while ($row = mysqli_fetch_assoc($result3)) {
        $ten = $row['TenDienThoai'];
        $mota1 = $row['AnhDaiDien'];
        $price = $row['GiaTien'];
        $discountedPrice = $row['GiaGiam'];
        $discountPercentage = $row['GiamGiaPhanTram'];
        $gia_goc = number_format($price, 0, ".", ".");
        $gia_giam = number_format($discountedPrice, 0, ".", ".");
        $soluong = $row['SoLuong'];
        $idhang=$row['ID'];
        
        echo '<div class="mot">';
        echo '<div class="column">';
        echo '<div>';
        echo '<input type="checkbox" id="myCheckbox" class="giua" onchange="updateButtonVisibility()">';
        echo '</div>';
        echo '<div>';
        echo '<img src="' . $mota1 . '">';
        echo '</div>';
        echo '<div>';
        echo '<h1>' . $ten . '</h1>';
        echo '<h2>Giá: ' . $gia_giam . '<sup>đ</sup></h2>';
        echo '<div class="quantity-control">';
        echo '<button class="quantity-button" onclick="decreaseQuantity()">-</button>';
        echo '<input type="text" class="quantity-label" id="quantityInput" value="1" onchange="updateTotal()">';
        echo '<button class="quantity-button" onclick="increaseQuantity()">+</button>';
        echo '</div>';
        echo '<h2>Tổng giá: <span id="totalPrice">' . (empty($t) ? $gia_giam : "") . '<sup>đ</sup></span></h2>';
        echo '<button id="orderButton" class="d" onclick="dathang()">Đặt hàng</button>';
        echo '<button id="cancelButton" class="c" onclick="huy()" data-idhang="' . $idhang . '">Hủy</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
}

?>
  <script>
    function updateButtonVisibility() {
  var isChecked = document.getElementById("myCheckbox").checked;
  var orderButton = document.getElementById("orderButton");
  var cancelButton = document.getElementById("cancelButton");
  
  if (isChecked) {
    orderButton.style.display = "inline-block";
    cancelButton.style.display = "inline-block";
  } else {
    orderButton.style.display = "none";
    cancelButton.style.display = "none";
  }
}
  function dathang() {
    var idhang = cancelButton.getAttribute('data-idhang');
    window.location.href = 'giohang.php?id=' + idhang;
  }
  function huy() {
  var cancelButton = event.target;
  var idhang = cancelButton.getAttribute('data-idhang');
  alert(idhang);
  // Gửi yêu cầu AJAX đến xoa_hang.php với idhang để xóa sản phẩm khỏi themhang
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'xoa.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = xhr.responseText;
      if (response === 'success') {
       
        // Xóa sản phẩm thành công, có thể thực hiện các hành động khác, ví dụ: load lại trang
        window.location.reload();
      } else {
        // Xóa sản phẩm không thành công, xử lý lỗi nếu cần
        alert('Lỗi xóa sản phẩm: ' + response);
      }
    }
  };
  xhr.send('idhang=' + idhang);
}
  function calculateTotal() {
    var quantityInput = document.getElementById("quantityInput");
    var currentQuantity = parseInt(quantityInput.value);
    var gia_giam = <?php echo $discountedPrice; ?>;
    var totalPrice = currentQuantity * gia_giam;
    return totalPrice;
  }

  function updateTotal() {
    var totalPrice = calculateTotal();
    var formattedTotalPrice = totalPrice.toLocaleString("vi-VN");
    document.getElementById("totalPrice").textContent = formattedTotalPrice;
  }

  function decreaseQuantity() {
    var quantityInput = document.getElementById("quantityInput");
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
    }
    updateTotal();
  }

  function increaseQuantity() {
    var quantityInput = document.getElementById("quantityInput");
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    updateTotal();
  }
</script>
</body>
</html>
