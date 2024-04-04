<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sapoches</title>
  <script src="https://kit.fontawesome.com/c890dc69e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="giohang.css">
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
          <li><a href="http://127.0.0.1:5500/indexphone.html"><i class="fa-solid fa-mobile"></i>Điện thoại</a></li>
          <li><a href="indexlaptop.html"><i class="fa-solid fa-laptop"></i>Laptop</a></li>
          <li><a href="http://127.0.0.1:5500/indextablet.html"><i class="fa-solid fa-tablet"></i>Tablet</a></li>
          <li><a href=""><i class="fa-solid fa-headphones"></i>Phụ kiện <i style="margin-left: 3px;" class="fa-solid fa-sort-down"></i></a>
            <div class="submenu">
              <ul>
                <li><a href="indexSacduphong.html">Sạc dự phòng</a></li>
                <li><a href="indexTainghebluetooth.html">Tai nghe bluetooth</a></li>
                <li><a href="">Tai nghe có dây</a></li>
                <li><a href="">Miếng dán cường lực</a></li>
                <li><a href="">Loa</a></li>
                <li><a href="">Camera, Webcam</a></li>
                <li><a href="">Sạc, cáp</a></li>
                <li><a href="">Chuột, bàn phím</a></li>
              </ul>
            </div>
          </li>
          <li><a href="indexDongho.html"><i class="fa-solid fa-clock"></i>Đồng hồ thông minh</a></li>

          <li><a href=""><i class="fa-solid fa-desktop"></i>PC, Máy in <i style="margin-left: 3px;" class="fa-solid fa-sort-down"></i></a>
            <div class="submenu">
              <ul>
                <li><a href="http://127.0.0.1:5500/indexPC.html">Máy in</a></li>
                <li><a href="http://127.0.0.1:5500/indexmaytinhdeban.html">Máy tính để bàn</a></li>
                <li><a href="">Màn hình máy tính</a></li>

              </ul>
            </div>
          </li>
          <li><a href="indexMayCu.html">Máy cũ giá rẻ</a></li>
        </ul>
      </div>
    </div>
  </section>
  <?php
  include("connect.php");
  $query1 = "SELECT Ten FROM dangnhap WHERE ID = 1";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);
$tenkhachhang = $row["Ten"];
  $id = $_GET['id']; // Lấy ID từ tham số truyền qua URL
  $query = "SELECT * FROM sanpham WHERE ID = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $ten = $row['TenDienThoai'];
    $mota1 = $row['AnhDaiDien'];
    $price = $row['GiaTien'];
    $discountedPrice = $row['GiaGiam'];
    $discountPercentage = $row['GiamGiaPhanTram'];
    $gia_goc = number_format($price, 0, ".", ".");
    $gia_giam = number_format($discountedPrice, 0, ".", ".");
    $soluong = $row['SoLuong'];
  }
  ?>
<div class="mot">
  <div id="currentDateTime" class="ngaygio"></div>
  <div class="column">
    <div>
      <img src="<?php echo $mota1; ?>">
    </div>
    <div>
      <h1><?php echo $ten; ?></h1>
      <h2>Giá: <?php echo $gia_giam; ?><sup>đ</sup></h2>
      <div class="quantity-control">
        <button class="quantity-button" onclick="decreaseQuantity()">-</button>
        <input type="text" class="quantity-label" id="quantityInput" value="1" onchange="updateTotal()">
        <button class="quantity-button" onclick="increaseQuantity()">+</button>
      </div>
      <h2>Tổng giá: <span id="totalPrice"><?php echo (empty($t) ? $gia_giam : ""); ?></span><sup>đ</sup></h2>
      <button class="d" onclick="dathang()">Đặt hàng</button>
    </div>
  </div>
  <div style="font-size: 30px;font-weight: bold;"><h3>THÔNG TIN KHÁCH HÀNG</h3></div>
  <br>
  <label style="font-size: 30px;font-weight: bold;" for="radio1">Anh</label>
  <input type="radio" class="radio" id="radio1" name="radioGroup" value="option1">

  <label style="font-size: 30px;font-weight: bold;" for="radio2">Chị</label>
  <input type="radio" class="radio" id="radio2" name="radioGroup" value="option2">
  <br>
  <input type="text" class="text" placeholder="<?php echo $tenkhachhang; ?>" id="tenkhachhang">
  <br>
  <input type="text" class="text" id="sodienthoai" placeholder="Số điện thoại">
  <br><br>
  <label style="font-size: 20px;font-weight: bold;">CHỌN ĐỊA CHỈ:</label><br>
  <div>
    <select id="city" class="select" aria-label=".form-select-sm">
      <option value="" class="select" selected>CHỌN TỈNH THÀNH</option>           
    </select>
    <select class="select" id="district" aria-label=".form-select-sm">
      <option value="" selected>CHỌN QUẬN HUYỆN</option>
    </select>
    <select class="select" id="ward" aria-label=".form-select-sm">
      <option value="" selected>CHỌN PHƯỜNG XÃ</option>
    </select>
  </div>
</div>

<script>
  function getCurrentDateTime() {
    var today = new Date();
    var day = today.getDate();
    var month = today.getMonth() + 1; // Tháng bắt đầu từ 0 nên cần +1
    var year = today.getFullYear();
    var hours = today.getHours();
    var minutes = today.getMinutes();
    var dateTimeString = "Ngày " + day + " tháng " + month + " năm " + year + " - " + hours + ":" + minutes;
    return dateTimeString;
  }
  function huy() {
    var id = <?php echo $id; ?>;
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
  xhr.send('idhang=' + id);
}
  function dathang() {
    var phone = document.getElementById("sodienthoai").value;
    var citySelect = document.getElementById("city");
    var districtSelect = document.getElementById("district");
    var wardSelect = document.getElementById("ward");
    var city = citySelect.options[citySelect.selectedIndex].text;
    var district = districtSelect.options[districtSelect.selectedIndex].text;
    var ward = wardSelect.options[wardSelect.selectedIndex].text;
    var totalPrice = calculateTotal();
    var soluong = parseInt(quantityInput.value);
    var currentDateTime = getCurrentDateTime();
    var radio1 = document.getElementById("radio1").checked;
    var radio2 = document.getElementById("radio2").checked;

    if (!phone || !city || !district || !ward || (!radio1 && !radio2)) {
      alert("Vui lòng nhập đầy đủ thông tin khách hàng và chọn địa chỉ.");
      return;
    }
    window.location.href = 'loadlaidonhang.php?id=<?php echo $id; ?>&totalPrice=' + totalPrice + '&soluong=' + soluong + '&phone=' + encodeURIComponent(phone) + '&city=' + encodeURIComponent(city) + '&district=' + encodeURIComponent(district) + '&ward=' + encodeURIComponent(ward) + '&anhchi=' + (radio1 ? 'Anh' : 'Chị') + '&currentDateTime=' + encodeURIComponent(currentDateTime);
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
  function updateDateTime() {
  var currentDateTime = getCurrentDateTime();
  var currentDateTimeElement = document.getElementById("currentDateTime");
  currentDateTimeElement.textContent = currentDateTime;
}

// Hàm để lặp lại gọi hàm updateDateTime() sau mỗi phút
function startUpdateInterval() {
  updateDateTime(); // Gọi hàm lần đầu tiên
  setInterval(updateDateTime, 60000); // Gọi hàm sau mỗi 1 phút (60000 milliseconds)
}

// Bắt đầu cập nhật ngày giờ
startUpdateInterval();
  // Hiển thị ngày, tháng, năm, giờ và phút trong khung
  var currentDateTimeElement = document.getElementById("currentDateTime");
  var currentDateTime = getCurrentDateTime();
  currentDateTimeElement.textContent = currentDateTime;
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
            <script>
                var citis = document.getElementById("city");
                var districts = document.getElementById("district");
                var wards = document.getElementById("ward");
                var Parameter = {
                    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                    method: "GET",
                    responseType: "application/json",
                };
                var promise = axios(Parameter);
                promise.then(function(result) {
                    renderCity(result.data);
                });

                function renderCity(data) {
                    for (const x of data) {
                        citis.options[citis.options.length] = new Option(x.Name, x.Id);
                    }
                    citis.onchange = function() {
                        district.length = 1;
                        ward.length = 1;
                        if (this.value != "") {
                            const result = data.filter(n => n.Id === this.value);

                            for (const k of result[0].Districts) {
                                district.options[district.options.length] = new Option(k.Name, k.Id);
                            }
                        }
                    };
                    district.onchange = function() {
                        ward.length = 1;
                        const dataCity = data.filter((n) => n.Id === citis.value);
                        if (this.value != "") {
                            const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                            for (const w of dataWards) {
                                wards.options[wards.options.length] = new Option(w.Name, w.Id);
                            }
                        }
                    };
                }
            </script>
  <style>
    .ngaygio
    {
      font-size: 20px;
      color: blue;
      margin-bottom: 10px;
    }
    h3
    {
        font-size: 50px;
        margin-top:20px ;
    }
    .select{
        width: 50%;
        height: 40px;
        font-size: 25px;
    }
    .radio{
        margin-top: 10px;
        height: 30px;
        width: 30px;
    }
    .text{
        margin-top: 15px;
        width: 50%;
        height: 40px;
        font-size: 30px;
    }
    .mot {
      margin-top: 5%;
      margin-left: 25%;
      width: 50%;
      background-color: white;
      border: 5px solid purple;
      padding: 20px;
    }

    .giua {
      width: 30px;
      height: 30px;
    }

    .column {
      display: flex;
      justify-content: space-between;
    }

    img {
      width: 60%;
      background-color: black;
    }

    .column>div:first-child {
      flex-basis:30%;
    }

    .d {
      font-size: 30px;
      color: white;
      width: 500px;
      background-color: purple;
    }

    .column>div:last-child {
      flex-basis: 70%;
    }

    h1 {
      font-size: 40px;
      color: plum;
      font-weight: bold;
    }

    h2 {
    margin-top: 10px;
    margin-bottom: 10px;
      font-size: 30px;
      color: red;
      font-weight: bold;
    }

    style>.quantity-control {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100px;
      height: 30px;
    }

    .quantity-label {
      width: 30px;
      text-align: center;
      border: 1px solid #ccc;
      font-size: 20px;
    }

    .quantity-button {
      width: 30px;
      height: 30px;
      border: none;
      background-color: plum;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }

    .quantity-button:hover {
      background-color: purple;
    }
  </style>
</body>

</html>
