-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2023 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbandidong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `MatKhau` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`ID`, `Ten`, `Email`, `MatKhau`) VALUES
(1, 'le thị hong ngot', 'lehongngot17102003@gmail.com', '1234'),
(2, 'ngot', '4701104144@student.hcmue.edu.vn', '1710'),
(5, 'Hông Ngọt', 'lethihongngot', '1710'),
(6, 'admin', 'lehongngot', '1710');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(100) DEFAULT NULL,
  `MatKhau` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`ID`, `Ten`, `MatKhau`) VALUES
(1, 'admin', '1710');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `tinh` varchar(100) NOT NULL,
  `huyen` varchar(100) NOT NULL,
  `xa` varchar(100) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `ngay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `ten_khach_hang`, `gioi_tinh`, `so_dien_thoai`, `ten_san_pham`, `tinh`, `huyen`, `xa`, `so_luong`, `gia`, `ngay`) VALUES
(21, 'le thị hong ngot', 'Chị', '324324', 'Samsung Galaxy Z Fold4 5G 256GB ', 'Tỉnh Phú Thọ', 'Huyện Tam Nông', 'Xã Vạn Xuân', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:47'),
(22, 'le thị hong ngot', 'Chị', '0384753419', 'Samsung Galaxy Z Fold4 5G 256GB ', 'Tỉnh Hoà Bình', 'Huyện Lương Sơn', 'Xã Tân Vinh', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:49'),
(23, 'le thị hong ngot', 'Chị', '0384753419', 'Samsung Galaxy Z Fold4 5G 256GB ', 'Tỉnh Hoà Bình', 'Thành phố Hòa Bình', 'Xã Sủ Ngòi', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:54'),
(24, 'le thị hong ngot', 'Chị', '53253454352', 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A)', 'Tỉnh Lạng Sơn', 'Huyện Văn Lãng', 'Xã Gia Miễn', 1, 29490000.00, 'Ngày 24 tháng 5 năm 2023 - 12:57'),
(25, 'le thị hong ngot', 'Chị', '090094232', 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A)', 'Tỉnh Yên Bái', 'Huyện Trấn Yên', 'Xã Nga Quán', 1, 29490000.00, 'Ngày 24 tháng 5 năm 2023 - 15:27'),
(26, 'le thị hong ngot', 'Chị', '980-938503', 'iPhone 14 Pro Max 128GB', 'Tỉnh Yên Bái', 'Thị xã Nghĩa Lộ', 'Xã Nghĩa Lộ', 1, 26440000.00, 'Ngày 24 tháng 5 năm 2023 - 15:39'),
(28, 'le thị hong ngot', 'Chị', '3532', 'iPhone 14 Pro Max 128GB', 'Tỉnh Bắc Giang', 'Huyện Yên Dũng', 'Xã Cảnh Thụy', 2, 52880000.00, 'Ngày 24 tháng 5 năm 2023 - 16:21'),
(30, 'le thị hong ngot', 'Chị', '8098', 'iPhone 14 Pro 128GB', 'Tỉnh Phú Thọ', 'Huyện Thanh Sơn', 'Xã Khả Cửu', 1, 24790000.00, 'Ngày 30 tháng 5 năm 2023 - 19:27'),
(31, 'le thị hong ngot', 'Chị', '090094232', 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A)', 'Tỉnh Yên Bái', 'Huyện Trấn Yên', 'Xã Nga Quán', 1, 29490000.00, 'Ngày 24 tháng 5 năm 2023 - 15:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangdatthanhcong`
--

CREATE TABLE `donhangdatthanhcong` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `tinh` varchar(255) DEFAULT NULL,
  `huyen` varchar(255) DEFAULT NULL,
  `phuong` varchar(255) DEFAULT NULL,
  `tensanpham` varchar(255) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `giatien` decimal(10,2) DEFAULT NULL,
  `ngaydathang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangdatthanhcong`
--

INSERT INTO `donhangdatthanhcong` (`id`, `ten`, `gioitinh`, `sdt`, `tinh`, `huyen`, `phuong`, `tensanpham`, `soluong`, `giatien`, `ngaydathang`) VALUES
(1, 'le thị hong ngot', 'Chị', '0384753419', 'Tỉnh Hoà Bình', 'Huyện Lương Sơn', 'Xã Tân Vinh', 'Samsung Galaxy Z Fold4 5G 256GB ', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:49'),
(3, 'le thị hong ngot', 'Chị', '0384753419', 'Tỉnh Hoà Bình', 'Huyện Lương Sơn', 'Xã Tân Vinh', 'Samsung Galaxy Z Fold4 5G 256GB ', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:49'),
(4, 'le thị hong ngot', 'Chị', '324324', 'Tỉnh Phú Thọ', 'Huyện Tam Nông', 'Xã Vạn Xuân', 'Samsung Galaxy Z Fold4 5G 256GB ', 1, 31760000.00, 'Ngày 24 tháng 5 năm 2023 - 12:47'),
(5, 'le thị hong ngot', 'Chị', '090094232', 'Tỉnh Yên Bái', 'Huyện Trấn Yên', 'Xã Nga Quán', 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A)', 1, 29490000.00, 'Ngày 24 tháng 5 năm 2023 - 15:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `TenDienThoai` varchar(100) DEFAULT NULL,
  `HangSanXuat` varchar(50) DEFAULT NULL,
  `GiaTien` decimal(10,2) DEFAULT NULL,
  `GiamGiaPhanTram` varchar(5) DEFAULT NULL,
  `GiaGiam` decimal(10,2) DEFAULT NULL,
  `AnhDaiDien` varchar(200) DEFAULT NULL,
  `LoaiSanPham` varchar(50) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `AnhMota1` varchar(200) DEFAULT NULL,
  `AnhMota2` varchar(200) DEFAULT NULL,
  `AnhMota3` varchar(50) NOT NULL,
  `AnhMota4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenDienThoai`, `HangSanXuat`, `GiaTien`, `GiamGiaPhanTram`, `GiaGiam`, `AnhDaiDien`, `LoaiSanPham`, `SoLuong`, `AnhMota1`, `AnhMota2`, `AnhMota3`, `AnhMota4`) VALUES
(1, 'iPhone 14 Pro Max 128GB', 'Iphone', 29990000.00, '-11%', 26440000.00, '/imagedienthoai/iphone1.jpg', 'Điện thoại', 10, '/imagedienthoai/motaip1.png', '/imagedienthoai/mota1ip1.jpg', '/imagedienthoai/mota2ip1.png', '/imagedienthoai/mota3ip1.png'),
(2, 'iPhone 14 Pro 128GB', 'Iphone', 27990000.00, '-11%', 24790000.00, '/imagedienthoai/iphone2.jpg', 'Điện thoại', 10, '/imagedienthoai/motaip2.png', '/imagedienthoai/mota1ip2.jpg', '/imagedienthoai/mota2ip2.png', '/imagedienthoai/mota3ip2.png'),
(3, 'iPhone 11 64GB', 'Iphone', 1990000.00, '-14%', 10290000.00, '/imagedienthoai/iphone3.jpg', 'Điện thoại', 2, '/imagedienthoai/motaip3.png', '/imagedienthoai/mota1ip3.jpg', '/imagedienthoai/mota2ip3.png', '/imagedienthoai/mota3ip3.png'),
(4, ' iPhone 14 128GB ', 'Iphone', 21990000.00, '-12%', 19290000.00, '/imagedienthoai/iphone4.jpg', 'Điện thoại', 5, '/imagedienthoai/motaip1.png', '/imagedienthoai/mota1ip2.jpg', '/imagedienthoai/mota2ip4.png', '/imagedienthoai/mota3ip4.png'),
(5, 'iPhone 13 mini 128GB', 'Iphone', 18990000.00, '-10%', 16990000.00, '/imagedienthoai/iphone5.jpg', 'Điện thoại', 4, '/imagedienthoai/motaip5.png', '/imagedienthoai/mota1ip5.jpg', '/imagedienthoai/mota2ip5.png', '/imagedienthoai/mota3ip5.png'),
(6, ' iPhone 13 128GB', 'Iphone', 18990000.00, '-10%', 16990000.00, '\\imagedienthoai\\iphone7.jpg', 'Điện thoại', 10, '/imagedienthoai/motaip7.jpg', '/imagedienthoai/mota1ip6.jpg', '/imagedienthoai/mota2ip7.jpg', '/imagedienthoai/mota3ip7.jpg'),
(7, 'iPhone 12 64GB', 'Iphone', 17990000.00, '-16%', 14990000.00, '/imagedienthoai/iphone6.jpg', 'Điện thoại', 15, '/imagedienthoai/motaip6.jpg', '/imagedienthoai/mota1ip7.jpg', '/imagedienthoai/mota2ip6.jpg', '/imagedienthoai/mota3ip6.jpg'),
(8, 'Samsung Galaxy S23 5G Ultra 1TB ', 'Samsung', 44990000.00, '-20%', 35640000.00, '/imagedienthoai/sam1.jpg', 'Điện thoại', 15, '/imagedienthoai/motass1.jpg', '/imagedienthoai/mota1ip8.jpg', '/imagedienthoai/mota2ss1.jpg', '/imagedienthoai/mota3ss1.jpg'),
(9, 'Samsung Galaxy Z Fold4 5G 256GB ', 'Samsung', 40990000.00, '-22%', 31760000.00, '/imagedienthoai/sam2.jpg', 'Điện thoại', 15, '/imagedienthoai/motass2.jpg', '/imagedienthoai/mota1ip9.jpg', '/imagedienthoai/mota2ss2.jpg', '/imagedienthoai/mota3ss2.jpg'),
(10, 'Samsung Galaxy Z Flip4 5G 128GB', 'Samsung', 23990000.00, '-19%', 19270000.00, '/imagedienthoai/sam3.jpg', 'Điện thoại', 15, '/imagedienthoai/motass3.jpg', '/imagedienthoai/mota1ip10.jpg', '/imagedienthoai/mota2ss3.jpg', '/imagedienthoai/mota3ss3.jpg'),
(11, 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU (MGN63SA/A)', 'MacBook', 29990000.00, '-19%', 18490000.00, '/imagedienthoai/lt1.jpg', 'Laptop', 11, '/imagedienthoai/motalt1.jpg', '/imagedienthoai/mota1lt1.jpg', '/imagedienthoai/mota2lt1.jpg', '/imagedienthoai/mota3lt1.jpg'),
(12, 'Laptop Apple MacBook Air M2 2022 8GB/256GB/8-core GPU (MLY13SA/A) ', 'Macbook', 32990000.00, '-16%', 27690000.00, '/imagedienthoai/lt1.jpg', 'Laptop', 4, '/imagedienthoai/motalt1.jpg', '/imagedienthoai/mota1lt1.jpg', '/imagedienthoai/mota2lt1.jpg', '/imagedienthoai/mota3lt1.jpg'),
(13, 'Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU (MNEH3SA/A)', 'MacBook', 35990000.00, '-18%', 29490000.00, '/imagedienthoai/lt1.jpg', 'Laptop', 11, '/imagedienthoai/motalt3.jpg', '/imagedienthoai/mota1lt3.jpg', '/imagedienthoai/mota2lt3.jpg', '/imagedienthoai/mota3lt3.jpg'),
(14, 'Laptop Apple MacBook Pro 14 M1 Pro 2021 10-core CPU/16GB/1TB SSD/16-core GPU ', 'Macbook', 58490000.00, '-23%', 44990000.00, '/imagedienthoai/lt1.jpg', 'Laptop', 7, '/imagedienthoai/motalt4.jpg', '/imagedienthoai/mota1lt4.jpg', '/imagedienthoai/mota2lt4.jpg', '/imagedienthoai/mota3lt4.jpg'),
(15, 'Laptop Apple MacBook Pro 16 M1 Pro 2021 10 core-CPU/16GB/512GB/16 core-GPU (MK1E3SA/A) ', 'Macbook', 58490000.00, '-23%', 44990000.00, '/imagedienthoai/lt1.jpg', 'Laptop', 16, '/imagedienthoai/motalt5.jpg', '/imagedienthoai/mota1lt5.jpg', '/imagedienthoai/mota2lt5.jpg', '/imagedienthoai/mota3lt5.jpg'),
(16, 'Điện thoại OPPO A76', 'Oppo', 5990000.00, '0%', 5990000.00, '/imagedienthoai/op1.jpg', 'Điện thoại', 11, '/imagedienthoai/motaop1.jpg', '/imagedienthoai/mota1ip11.jpg', '/imagedienthoai/mota2op1.jpg', '/imagedienthoai/mota3op1.jpg'),
(17, 'Điện thoại OPPO A96', 'Oppo', 6990000.00, '0%', 6990000.00, '/imagedienthoai/op2.jpg', 'Điện thoại', 13, '/imagedienthoai/motaop2.jpg', '/imagedienthoai/mota1ip12.jpg', '/imagedienthoai/mota2op2.jpg', '/imagedienthoai/mota3op2.jpg'),
(18, 'Điện thoại OPPO Reno8 Pro 5G ', 'Oppo', 18990000.00, '0%', 18990000.00, '/imagedienthoai/op3.jpg', 'Điện thoại', 15, '/imagedienthoai/motaop3.jpg', '/imagedienthoai/mota1ip13.jpg', '/imagedienthoai/mota2op3.jpg', '/imagedienthoai/mota3op3.jpg'),
(19, 'Điện thoại OPPO Reno7 5G ', 'Oppo', 7990000.00, '0%', 6990000.00, '/imagedienthoai/op4.jpg', 'Điện thoại', 13, '/imagedienthoai/motaop4.jpg', '/imagedienthoai/mota1ip14.jpg', '/imagedienthoai/mota2op4.jpg', '/imagedienthoai/mota3op4.jpg'),
(20, 'Điện thoại OPPO Reno8 5G', 'Oppo', 13990000.00, '0%', 13990000.00, '/imagedienthoai/op5.jpg', 'Điện thoại', 3, '/imagedienthoai/motaop5.jpg', '/imagedienthoai/mota1ip15.jpg', '/imagedienthoai/mota2op5.jpg', '/imagedienthoai/mota3op5.jpg'),
(21, 'Điện thoại Samsung Galaxy S23 5G 128GB ', 'Samsung', 22990000.00, '0%', 22990000.00, '/imagedienthoai/sam4.jpg', 'Điện thoại', 2, '/imagedienthoai/motass4.jpg', '/imagedienthoai/mota1ip16.jpg', '/imagedienthoai/mota2ss4.jpg', '/imagedienthoai/mota3ss4.jpg'),
(22, 'Điện thoại Samsung Galaxy A24 8GB', 'Samsung', 6590000.00, '0%', 6590000.00, '/imagedienthoai/sam5.jpg', 'Điện thoại', 4, '/imagedienthoai/motass5.jpg', '/imagedienthoai/mota1ss4.jpg', '/imagedienthoai/mota2ss4.jpg', '/imagedienthoai/mota3ss4.jpg'),
(23, 'Điện thoại Samsung Galaxy A14 6GB ', 'Samsung', 4990000.00, '0%', 4990000.00, '/imagedienthoai/sam6.jpg', 'Điện thoại', 7, '/imagedienthoai/motass6.jpg', '/imagedienthoai/mota1ss6.jpg', '/imagedienthoai/mota2ss6.jpg', '/imagedienthoai/mota3ss6.jpg'),
(24, 'Điện thoại Samsung Galaxy A14 4GB ', 'Samsung', 3660000.00, '0%', 3660000.00, '/imagedienthoai/sam7.jpg', 'Điện thoại', 6, '/imagedienthoai/motass7.jpg', '/imagedienthoai/mota1ss7.jpg', '/imagedienthoai/mota2ss7.jpg', '/imagedienthoai/mota3ss7.jpg'),
(25, 'Điện thoại Samsung Galaxy S23+ 5G 256GB  ', 'Samsung', 21180000.00, '0%', 21180000.00, '/imagedienthoai/sam8.jpg', 'Điện thoại', 3, '/imagedienthoai/motass8.jpg', '/imagedienthoai/mota1ss8.jpg', '/imagedienthoai/mota2ss8.jpg', '/imagedienthoai/mota3ss8.jpg'),
(26, 'Điện thoại Samsung Galaxy Z Flip4 5G 512GB ', 'Samsung', 21490000.00, '0%', 21490000.00, '/imagedienthoai/sam9.jpg', 'Điện thoại', 6, '/imagedienthoai/motass9.jpg', '/imagedienthoai/mota1ss9.jpg', '/imagedienthoai/mota2ss9.jpg', '/imagedienthoai/mota3ss9.jpg'),
(28, 'Máy tính bảng iPad 9 WiFi 64GB', 'Iphone', 8390000.00, '-14%', 7190000.00, '/imagedienthoai/pad1.jpg', 'Tablet', 10, '/imagedienthoai/motab1.jpg', '/imagedienthoai/mota1b1.jpg', '/imagedienthoai/mota2b1.jpg', '/imagedienthoai/mota3b1.jpg'),
(29, 'Máy tính bảng iPad 10 WiFi 64GB', 'Iphone', 11490000.00, '-3%', 11090000.00, '/imagedienthoai/pad2.jpg', 'Tablet', 6, '/imagedienthoai/motab1.jpg', '/imagedienthoai/mota1b2.jpg', '/imagedienthoai/mota2b2.jpg', '/imagedienthoai/mota3b2.jpg'),
(30, 'Máy tính bảng iPad Pro M1 11 inch WiFi 2TB (2021)', 'Iphone', 49990000.00, '-14%', 44990000.00, '/imagedienthoai/pad3.jpeg', 'Tablet', 10, '/imagedienthoai/motab3.jpg', '/imagedienthoai/mota1b3.jpg', '/imagedienthoai/mota2b3.jpg', '/imagedienthoai/mota3b3.jpg'),
(31, 'Máy tính bảng iPad Air 5 M1 Wifi Cellular 64GB', 'Iphone', 19490000.00, '-10%', 17490000.00, '/imagedienthoai/pad4.jpg', 'Tablet', 6, '/imagedienthoai/motab4.jpg', '/imagedienthoai/mota1b4.jpg', '/imagedienthoai/mota2b4.jpg', '/imagedienthoai/mota3b4.jpg'),
(32, 'Máy tính bảng iPad mini 6 WiFi 64GB ', 'Iphone', 12790000.00, '-10%', 12090000.00, '/imagedienthoai/pad5.jpg', 'Tablet', 6, '/imagedienthoai/motab5.jpg', '/imagedienthoai/mota1b5.jpg', '/imagedienthoai/mota2b5.jpg', '/imagedienthoai/mota3b5.jpg'),
(33, 'Pin sạc dự phòng 10000 mAh Type C PD Samsung EB-P3400 ', 'Samsung', 990000.00, '-28%', 710000.00, '/imagedienthoai/sac1.jpg', 'Dự phòng', 5, '/imagedienthoai/motas1.jpg', '/imagedienthoai/mota1s1.jpg', '/imagedienthoai/mota2s1.jpg', '/imagedienthoai/mota3s1.jpg'),
(34, 'Pin sạc dự phòng 7.500 mAh AVA+ LA Y68', 'Samsung', 170000.00, '-20%', 135000.00, '/imagedienthoai/sac2.jpeg', 'Dự phòng', 6, '/imagedienthoai/motas2.jpg', '/imagedienthoai/mota1s2.jpg', '/imagedienthoai/mota2s2.jpg', '/imagedienthoai/mota3s2.jpg'),
(35, 'Pin sạc dự phòng Polymer 10.000 mAh AVA+ PJ JP192 ', 'Samsung', 500000.00, '-28%', 250000.00, '/imagedienthoai/sac3.jpeg', 'Dự phòng', 4, '/imagedienthoai/motas3.jpg', '/imagedienthoai/mota1s3.jpg', '/imagedienthoai/mota2s3.jpg', '/imagedienthoai/mota3s3.jpg'),
(36, 'Pin sạc dự phòng 7500 mAh AVA+ LJ JP199', 'Samsung', 170000.00, '-20%', 135000.00, '/imagedienthoai/sac4.jpeg', 'Dự phòng', 2, '/imagedienthoai/motas4.jpg', '/imagedienthoai/mota1s4.jpg', '/imagedienthoai/mota2s4.jpg', '/imagedienthoai/mota3s4.jpg'),
(37, 'Pin sạc dự phòng Polymer 10000mAh AVA+ DS006', 'Samsung', 500000.00, '-50%', 250000.00, '/imagedienthoai/sac5.jpeg', 'Dự phòng', 2, '/imagedienthoai/motas5.jpg', '/imagedienthoai/mota1s5.jpg', '/imagedienthoai/mota2s5.jpg', '/imagedienthoai/mota3s5.jpg'),
(38, 'Tai nghe Bluetooth True Wireless Rezo Air', 'Samsung', 890000.00, '-30%', 620000.00, '/imagedienthoai/tai1.jpeg', 'Tai nghe', 10, 'imagedienthoai/motat1.jpg', 'imagedienthoai/mota1t1.jpg', 'imagedienthoai/mota2t1.jpg', 'imagedienthoai/mota3t1.jpg'),
(39, 'Tai nghe Bluetooth AirPods 2 Lightning Charge Apple MV7N2', 'Samsung', 4390000.00, '0%', 4390000.00, '/imagedienthoai/tai2.jpg', 'Tai nghe', 4, 'imagedienthoai/motat2.jpg', 'imagedienthoai/mota1t2.jpg', 'imagedienthoai/mota2t2.jpg', 'imagedienthoai/mota3t2.jpg'),
(40, 'Đồng hồ thông minh Apple Watch SE 2022 GPS 40mm', 'Iphone', 7490000.00, '-18%', 6090000.00, 'imagedienthoai/dh1.jpg', 'Đồng hồ', 2, 'imagedienthoai/motadh1.jpg', 'imagedienthoai/mota1dh1.jpg', 'imagedienthoai/mota2dh1.jpg', 'imagedienthoai/mota3dh1.jpg'),
(41, 'Đồng hồ thông minh Apple Watch SE 2022 GPS 44mm ', 'Iphone', 8490000.00, '-20%', 6790000.00, 'imagedienthoai/dh2.jpg', 'Đồng hồ', 6, 'imagedienthoai/motadh2.jpg', 'imagedienthoai/mota1dh2.jpg', 'imagedienthoai/mota2dh2.jpg', 'imagedienthoai/mota3dh2.jpg'),
(42, 'Đồng hồ thông minh Apple Watch S8 GPS 41mm', 'Iphone', 11990000.00, '-24%', 9090000.00, 'imagedienthoai/dh3.jpeg', 'Đồng hồ', 3, 'imagedienthoai/motadh3.jpg', 'imagedienthoai/mota1dh3.jpg', 'imagedienthoai/mota2dh3.jpg', 'imagedienthoai/mota3dh3.jpg'),
(43, 'Đồng hồ thông minh Apple Watch Ultra LTE 49mm dây Alpine size M', 'Iphone', 8490000.00, '-20%', 6790000.00, 'imagedienthoai/dh4.jpg', 'Đồng hồ', 6, 'imagedienthoai/motadh4.jpg', 'imagedienthoai/mota1dh4.jpg', 'imagedienthoai/mota2dh4.jpg', 'imagedienthoai/mota3dh4.jpg'),
(44, 'Đồng hồ thông minh Apple Watch Ultra LTE 49mm dây Ocean ', 'Iphone', 23990000.00, '-23%', 18990000.00, 'imagedienthoai/dh5.jpg', 'Đồng hồ', 6, 'imagedienthoai/motadh5.jpg', 'imagedienthoai/mota1dh5.jpg', 'imagedienthoai/mota2dh5.jpg', 'imagedienthoai/mota3dh5.jpg'),
(45, 'Máy in HP Laser Trắng đen đa năng In scan copy LaserJet 135a (4ZB82A) ', 'HP', 3990000.00, '0%', 3990000.00, 'imagedienthoai/mi1.jpg', 'Máy in', 5, 'imagedienthoai/motai1.jpg', 'imagedienthoai/mota1i1.jpg', 'imagedienthoai/mota2i1.jpg', 'imagedienthoai/mota3i1.jpg'),
(46, 'Máy in Laser Trắng đen HP đa năng In scan copy LaserJet MFP 135w WiFi (4ZB83A)', 'HP', 4490000.00, '0%', 4490000.00, 'imagedienthoai/mi2.jpg', 'Máy in', NULL, 'imagedienthoai/motai2.jpg', 'imagedienthoai/mota1i2.jpg', 'imagedienthoai/mota2i2.jpg', 'imagedienthoai/mota3i2.jpg'),
(47, 'Máy In Laser Trắng Đen Brother đa năng In scan copy DCP-L2520D', 'HP', 4600000.00, '0%', 4550000.00, 'imagedienthoai/mi3.jpg', 'Máy in', 5, 'imagedienthoai/motai3.jpg', 'imagedienthoai/mota1i3.jpg', 'imagedienthoai/mota2i3.jpg', 'imagedienthoai/mota3i3.jpg'),
(48, 'Máy In laser Trắng Đen Brother HL L2321D', 'HP', 3090000.00, '0%', 3090000.00, 'imagedienthoai/mi4.jpg', 'Máy in', NULL, 'imagedienthoai/motai2.jpg', 'imagedienthoai/mota1i4.jpg', 'imagedienthoai/mota2i4.jpg', 'imagedienthoai/mota3i4.jpg'),
(49, 'Máy In Phun Trắng Đen Canon PIXMA GM2070 Wifi', 'HP', 4690000.00, '0%', 4690000.00, 'imagedienthoai/mi5.jpg', 'Máy in', NULL, 'imagedienthoai/motai5.jpg', 'imagedienthoai/mota1i5.jpg', 'imagedienthoai/mota2i5.jpg', 'imagedienthoai/mota3i5.jpg'),
(50, 'iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A)', 'Iphone', 39990000.00, '-25%', 29990000.00, 'imagedienthoai/db1.jpg', 'Máy tính để bàn', 11, 'imagedienthoai/motadb1.jpg', 'imagedienthoai/mota1db1.jpg', 'imagedienthoai/mota2db1.jpg', 'imagedienthoai/mota3db1.jpg'),
(51, 'Màn hình Asus VZ24EHE-R 23.8 inch FHD/75Hz/1ms/FreeSync/HDMI', 'Asus', 2750000.00, '0%', 2750000.00, '/imagedienthoai/mh1.jpg', 'Màn hình máy tính', 10, '/imagedienthoai/motamh1.jpg', '/imagedienthoai/mota1mh1.jpg', '/imagedienthoai/mota2mh1.jpg', '/imagedienthoai/mota3mh1.jpg'),
(52, 'Điện thoại Xiaomi 13 5G', 'Xiaomi', 22990000.00, '0%', 22990000.00, '/imagedienthoai/xi1.jpg', 'Điện thoại', 5, '/imagedienthoai/motaxi1.jpg', '/imagedienthoai/mota1xi1.jpg', '/imagedienthoai/mota2xi1.jpg', '/imagedienthoai/mota3xi1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `themhang`
--

CREATE TABLE `themhang` (
  `id` int(11) NOT NULL,
  `Tenkhachhang` varchar(200) NOT NULL,
  `idhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `themhang`
--

INSERT INTO `themhang` (`id`, `Tenkhachhang`, `idhang`) VALUES
(65, '', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhangdatthanhcong`
--
ALTER TABLE `donhangdatthanhcong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `themhang`
--
ALTER TABLE `themhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `donhangdatthanhcong`
--
ALTER TABLE `donhangdatthanhcong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `themhang`
--
ALTER TABLE `themhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
