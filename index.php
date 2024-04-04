<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapoches</title>
    <script src="https://kit.fontawesome.com/c890dc69e3.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
   <script src="Change.js"></script>
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
        <li><a href="/Members/indexmember.html"><img style="width:50px" src="image/logospc.png" alt=""></a></li>
        <li><a href="index.php">Sapoches</a></li>
        <li class="address-form-click"><a href="#">TP Hồ Chí Minh<i class="fa-solid fa-sort-down"></i></a></li>
        <li>
          <input type="text" id="searchInput" placeholder="Tìm kiếm....">
          <span id="searchIconContainer">
            <i class="fa-solid fa-magnifying-glass"></i>
          </span>
        </li>
        <li><a href="themhang.php"><button><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</button></a></li>
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
<!-- ---------------------------------------------Slider -->
<div class="slider">
    <div class="container">
        <div class="slider-container">
            <div class="slider-container-left">
                <div class="slider-container-left-top-content">
                <div class="slider-container-left-top">
                    
                    <a href=""><img src="/image/s23-ultra-sliding-th5.webp" alt=""></a>
                    <a href=""><img src="/image/slide2.webp" alt=""></a>
                    <a href=""><img src="/image/slide3.webp" alt=""></a>
                    <a href=""><img src="/image/slide 4.webp" alt=""></a>
                    <a href=""><img src="/image/slide5.webp" alt=""></a>
                    <a href=""><img src="/image/slide6.webp" alt=""></a>
                    <a href=""><img src="/image/slide7.webp" alt=""></a> 
                    </div>
                    <div class="slider-container-left-top-btn">
                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="slider-container-left-bottom">
                    <li class="active">Galaxy S23 Ultra</li>
                    <li>Redmi note 12 Seri</li>
                    <li>Macbook pro</li>
                    <li>Tai nghe WH-1000XM5</li>
                    <li>Smart TV Toshiba</li>
                    <li>SamSung TV Crystal UHD</li>
                    
                </div>
            </div>
            <div class="slider-container-right">
                <li><a href=""><img src="/image/image1.webp" alt=""></a></li>
                <li><a href=""><img src="/image/image2.webp" alt=""></a></li>
            </div>
        </div>
    </div>
</div>
<section class="baner-one">
<div class="banner-container">
    <img src="/image/baner (2).webp" alt="">
    <img src="/image/baner (1).webp" alt="">
</div>
</section> 
<!-- --------------------------------------slider product -->
<section class="slider-product-one">
    <div class="container">
        <div class="slider-product-one-content">
            <div class="slider-product-one-content-title">
                <h2>Săn Sale Online Mỗi Ngày</h2>
            </div>
            <div class="slider-product-one-content-container">
                <div class="slider-product-one-content-items-content">
                    <?php
                    include('connect.php');

                    $query = "SELECT * FROM sanpham WHERE LoaiSanPham = 'Điện thoại' ORDER BY GiaTien DESC LIMIT 10";
                    $result = mysqli_query($conn, $query);
                    $count = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($count >= 15) {
                            break; // Thoát khỏi vòng lặp nếu đã lấy đủ 15 hình
                        }
                        $price = $row['GiaTien'];
                        $discountedPrice = $row['GiaGiam'];
                        $gia_goc = number_format($price, 0, ".", ".");
                        $gia_giam=number_format($discountedPrice, 0, ".", ".");
                        if ($count % 5 === 0) {
                            // Khi đạt đến số hình chia hết cho 5, thêm phần này để tách thanh trượt ra
                            echo '<div class="slider-product-one-content-items">';
                        }

                        echo '
                        <div class="slider-product-one-content-item" data-id="' . $row['ID'] . '">
                            <img src="' . $row['AnhDaiDien'] . '" alt="">
                            <div class="slider-product-one-content-item-text">
                                <li>' . $row['TenDienThoai'] . '</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">' . $gia_goc . '<sup>đ</sup></a> <span>' . $row['GiamGiaPhanTram'] . '</span></li>
                                <li>' . $gia_giam . '<sup>đ</sup></li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </div>
                        </div>';

                        $count++;
                        if ($count % 5 === 0) {
                            // Kết thúc thanh trượt hiện tại
                            echo '</div>';
                        }
                    }
                    if ($count % 5 !== 0) {
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="slider-product-one-content-btn">
                    <i class="fa-solid fa-chevron-left fa-chevron-left-two"></i>
                    <i class="fa-solid fa-chevron-right fa-chevron-right-two"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  var items = document.getElementsByClassName('slider-product-one-content-item');
  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function(event) {
      var itemId = this.getAttribute('data-id');
      // Chuyển hướng đến trang khác và truyền ID vào URL
      window.location.href = 'mota.php?id=' + itemId;
    });
  }
</script>
<!-- ----------------------------------------------product gallery -->
<?php
include("connect.php");
$query = "SELECT ID,TenDienThoai ,AnhDaiDien, LoaiSanPham, GiaTien, GiamGiaPhanTram, GiaGiam,SoLuong 
          FROM sanpham
          WHERE LoaiSanPham = 'Điện thoại' AND SoLuong > 7
          LIMIT 10";
$result = mysqli_query($conn, $query); // Thay $conn bằng biến kết nối tới CSDL của bạn
?>

<section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
            <div class="product-gallery-one-content-title">
                <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                <ul>
                    <li><a href="">Apple</a></li>
                    <li><a href="">SamSung</a></li>
                    <li><a href="">Xiaomi</a></li>
                    <li><a href="">ViVo</a></li>
                    <li><a href="">OPPO</a></li>
                    <li><a href="">Xem tất cả</a></li>
                </ul>
            </div>
            <div class="product-gallery-one-content-product">
                <?php
                // Loop through the fetched product data and display it
                while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['AnhDaiDien'];
                    $name = $row['TenDienThoai'];
                    $price = $row['GiaTien'];
                    $discountPercentage = $row['GiamGiaPhanTram'];
                    $discountedPrice = $row['GiaGiam'];
                    $productId = $row['ID'];
                    $gia_goc = number_format($price, 0, ".", ".");
                    $gia_giam=number_format($discountedPrice, 0, ".", ".");
                    echo '<div class="product-gallery-one-content-product-item" data-id="' . $productId . '">';
                    echo '<img src="' . $image . '" alt="">';
                    echo '<div class="product-gallery-one-content-product-item-text">';
                    echo '<li>' . $name . '</li>';
                    echo '<li>Online giá rẻ</li>';
                    echo '<li><a href="" style="color:#333;">' .$gia_goc . '<sup>đ</sup></a> <span>' . $discountPercentage . '</span></li>';
                    echo '<li>' . $gia_giam . '<sup>đ</sup></li>';
                    echo '<li>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '</li>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<script>
  var items = document.getElementsByClassName('product-gallery-one-content-product-item');
  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function(event) {
      var itemId = this.getAttribute('data-id');
      // Chuyển hướng đến trang khác và truyền ID vào URL
      window.location.href = 'mota.php?id=' + itemId;
    });
  }
</script>
<!-- laptop -->
<section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
          <div class="product-gallery-one-content-title">
            <h2>LAPTOP NỔI BẬT NHẤT</h2>
            <ul>
                <li><a href="">Asus</a></li> 
                <li><a href="">Lenonvo</a></li> 
                <li><a href="">Dell</a></li> 
                <li><a href="">Macbook</a></li> 
                <li><a href="">Acer</a></li>  
                <li><a href="">Xem tất cả</a></li>  
            </ul>
        </div>
            <div class="product-gallery-one-content-product">
                <?php
                include("connect.php");
                $query = "SELECT ID, AnhDaiDien, TenDienThoai, GiaTien, GiamGiaPhanTram, GiaGiam 
                          FROM sanpham
                          WHERE LoaiSanPham = 'Laptop'
                          LIMIT 10";
                $result = mysqli_query($conn, $query); // Replace $connection with your database connection variable

                while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['AnhDaiDien'];
                    $name = $row['TenDienThoai'];
                    $price = $row['GiaTien'];
                    $discountPercentage = $row['GiamGiaPhanTram'];
                    $discountedPrice = $row['GiaGiam'];
                    $productId = $row['ID'];
                    $gia_goc = number_format($price, 0, ".", ".");
                    $gia_giam=number_format($discountedPrice, 0, ".", ".");
                    echo '<div class="product-gallery-one-content-product-item" data-id="' . $productId . '">';
                    echo '<img src="' . $image . '" alt="">';
                    echo '<div class="product-gallery-one-content-product-item-text">';
                    echo '<li>' . $name . '</li>';
                    echo '<li>Online giá rẻ</li>';
                    echo '<li><a href="" style="color:#333;">' .  $gia_goc . '<sup>đ</sup></a> <span>' . $discountPercentage . '</span></li>';
                    echo '<li>' . $gia_giam . '<sup>đ</sup></li>';
                    echo '<li>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '<i class="fa-solid fa-star"></i>';
                    echo '</li>';
                    echo '</div>';
                    echo '</div>';
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</section>
<script>
  var items = document.getElementsByClassName('product-gallery-one-content-product-item');
  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function(event) {
      var itemId = this.getAttribute('data-id');
      console.log(itemId); // In id của sản phẩm vào console
      // Chuyển hướng đến trang khác và truyền ID vào URL
      window.location.href = 'mota.php?id=' + itemId;
    });
  }
</script>

<!-- -------------------------------------------footer -->
<section class="footer-img">
    <img src="/imagedienthoai/footer.jpg" alt="">

</section>
<script src="scripts.js"></script>
</body>
</html>