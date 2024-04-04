<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Draggable Image Slider | CodingNepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c890dc69e3.js" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" href="styledmsp.css"> -->
   <link rel="stylesheet" href="styleMota.css">
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
                            <select name="" >
                                <option value="#">--Chọn địa điểm</option>
                                <option value="#">TP Hồ Chí Minh</option>
                            </select>
                            <select name="" >
                                <option value="#">--Chọn Quận\Huyện</option>
                                <option value="#">Quận 1</option>
                            </select>
                            <select name="" >
                                <option value="">--Chọn Phường\Xã  </option>
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
                    <li><a href=""><i class="fa-solid fa-headphones"></i>Phụ kiện <i style="margin-left: 3px;"class="fa-solid fa-sort-down"></i></a>
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
                    
                    <li><a href=""><i class="fa-solid fa-desktop"></i>PC, Máy in <i style="margin-left: 3px;"class="fa-solid fa-sort-down"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="indexmayin.php">Máy in</a></li>
                                <li><a href="indexmaytinhdeban.php">Máy tính để bàn</a></li>
                                <li><a href="">Màn hình máy tính</a></li>
                                
                            </ul>
                        </div></li>
                    <li><a href="indexMayCu.html">Máy cũ giá rẻ</a></li>
                    
                   
                </ul>
            </div>
        </div>
    </section>
<!-- ----------------------------------------------SanPham -->

<?php
    include("connect.php");
    $id = $_GET['id']; // Lấy ID từ tham số truyền qua URL
    $query = "SELECT * FROM sanpham WHERE ID = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $ten=$row['TenDienThoai'];
        $mota1 = $row['AnhMota1'];
        $mota2 = $row['AnhMota2'];
        $mota3 = $row['AnhMota3'];
        $mota4 = $row['AnhMota4'];
        $price = $row['GiaTien'];
        $discountedPrice = $row['GiaGiam'];
        $discountPercentage = $row['GiamGiaPhanTram'];
        $gia_goc = number_format($price, 0, ".", ".");
        $gia_giam=number_format($discountedPrice, 0, ".", ".");
        $soluong = $row['SoLuong'];
    }
    ?>
    <h2 class="tieude-sanpham"><?php echo $ten; ?></h2>
<hr>
   <div class="slider-wrapper">
    <div class="slider">
    <a href="">1</a>
        <a href="#slide-1">2</a>
        <a href="#slide-2">3</a>
        <a href="#slide-3">4</a>
        <div class="slides">
            <div id="slide-1">
                <img class="img" src="<?php echo $mota1; ?>" alt="">
            </div>
            <div id="slide-2">
                <img class="img" src="<?php echo $mota3; ?>" alt="">
            </div>
            <div id="slide-3">
                <img class="img" src="<?php echo $mota4; ?>" alt="">
            </div>
            <div id="slide-4">
                <img class="img" src="<?php echo $mota2; ?>" alt="">
            </div>
        </div>
    </div>
    <br><div class="right-section">
        <ul>
            <div>
            <li style="font-size: 30px;color:blueviolet" >     Giá góc: <span style="text-decoration: line-through;"><?php echo $gia_goc; ?></span><sup>đ</sup><b style="font-size: 30px;color:red"><?php echo $discountPercentage; ?></b></li>
            <li style="font-size: 30px;color:blueviolet" >Giá giảm: <?php echo $gia_giam; ?><sup>đ</sup></li>
            <li style="font-size: 30px;color:blueviolet" >Số lượng hiện có trong kho: <?php echo $soluong; ?></li>
            </div>
            <li><button class="button"id="add-to-cart-btn">Mua Ngay</button></li>
            <li><button class="button"id="add-hang" >Thêm vào giỏ hàng</button></li>
        </ul>
    </div>
</div>
<script>
    document.getElementById("add-to-cart-btn").addEventListener("click", function() {
        var id = <?php echo $id; ?>; // Lấy ID từ PHP và gán vào biến JavaScript
        //window.location.href = "trangkhac.php?id=" + id;
        // Send an AJAX request to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "check_login.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response === "logged_in") {
                    // User is logged in, perform actions to add item to the cart
                    // alert("Sản phẩm đã được thêm vào giỏ hàng.");
                    window.location.href = 'giohang.php?id=' + id;
                } else {
                    // User is not logged in
                    alert("Khách hàng vui lòng đăng nhập.");
                }
            }
        };
        xhr.send();
    });
    document.getElementById("add-hang").addEventListener("click", function(event) {

    var id = <?php echo $id; ?>; // Lấy ID từ PHP và gán vào biến JavaScript

    var url = "loadhang.php?variable=" + encodeURIComponent(id);
    window.location.href = url;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "check_login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            if (response === "logged_in") {
                window.location.href = 'themhang.php?id=' + id;
            } else {
                // User is not logged in
                alert("Khách hàng vui lòng đăng nhập.");
                 window.location.href = 'mota.php?id=' + id;
            }
        }
    };
    xhr.send();
});

</script>
        </div>
    </div>
</div>

<!-- --------------------------------------------footer -->
<section class="footer-img">
    <img src="/imagedienthoai/footer.jpg" alt="">

</section> 
<script src="scrpitdmsp.js"></script>
</body>
</html>