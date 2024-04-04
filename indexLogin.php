<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapoches</title>
    <script src="https://kit.fontawesome.com/c890dc69e3.js" crossorigin="anonymous"></script>
    <script src="scriptphone.js"></script>
    <link rel="stylesheet" href="styleLogin.css">
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
    <!-- ------------------------------------LOGIN -->
    <?php
include('connect.php');
ob_start();

// Xử lý dữ liệu đăng nhập khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenDangNhap = $_POST['tenDangNhap'];
    $matKhau = $_POST['matKhau'];

    // Thực thi truy vấn để kiểm tra tên tài khoản và mật khẩu từ bảng 'dangky'
    $sql_check = "SELECT * FROM dangky WHERE Ten='$tenDangNhap' AND MatKhau='$matKhau'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        $login_success = true;
        // Đăng nhập thành công
           $sql_insert = "INSERT INTO dangnhap (ID, Ten, MatKhau) VALUES (1, '$tenDangNhap', '$matKhau') ON DUPLICATE KEY UPDATE Ten = '$tenDangNhap', MatKhau = '$matKhau'";
          //$sql_update = "UPDATE dangnhap SET Ten = '$tenDangNhap', MatKhau = '$matKhau' WHERE ID = 1";
          mysqli_query($conn,  $sql_insert);
          
        // Chuyển hướng đến trang index.php
        if ($tenDangNhap === 'admin') {
            //chuyển đến tran admin
            echo '<script>window.location.href = "indexadmin.php";</script>';
            exit();
        } else {
            // chuyển đến trang chính
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }
    } else {
        // Đăng nhập thất bại
        $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
    }
    
    mysqli_close($conn);
    ob_end_flush();
}
?>
<div class="signup">
    <h1 class="signup-heading">Đăng nhập</h1>
    <button class="gg"><a href=""><i class="fa-brands fa-google"></i>Đăng nhập với Google</a></button>
    <button class="fb"><a href=""><i class="fa-brands fa-facebook"></i>Đăng nhập với Facebook</a></button>
    <div class="signup-or"></div>
    <div class="tendangnhap">
        <form method="POST" action="">
            <label for=""><b>Tên đăng nhập:</b></label><br>
            <input type="text" name="tenDangNhap" placeholder="   Tên đăng nhập"><br>
            <label for=""><b>Mật khẩu:</b></label><br>
            <input type="password" name="matKhau" placeholder="   Mật khẩu"><br>
            <?php if (isset($error_message)) { ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php } ?>
            <button class="submit" type="submit">Đăng nhập</button><br>
            <label for="" class="end">Bạn chưa có tài khoản?<a href="indexDangky.php">Đăng ký</a></label>
        </form>
    </div>
</div>
</body>
</html>