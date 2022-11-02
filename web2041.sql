-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2041`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bill_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2.chuyển khoản 3.thanh toán online',
  `ngaydathang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(10) NOT NULL,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lí \r\n2. Đang giao hàng 3.Đã giao hàng',
  `receive_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(6, 4, 'Le Dong Phong', 'Việt Nam', '0368548431', 'phongldpd05648@fpt.edu.vn', 0, '10:18:53am 23/10/2022', 555, 0, NULL, NULL, NULL),
(16, 4, 'Le Dong Phong', 'Việt Nam', '0368548431', 'phongldpd05648@fpt.edu.vn', 0, '11:08:07am 23/10/2022', 2555, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'abc', 4, 16, '05:42:49am 22/10/2022'),
(2, 'abc', 4, 16, '05:45:16am 22/10/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 1),
(2, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 2),
(3, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 2),
(4, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 3),
(5, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 3),
(6, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 4),
(7, 0, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 4),
(8, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 5),
(9, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 5),
(10, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 5),
(11, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 6),
(12, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 7),
(13, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 8),
(14, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 9),
(15, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 10),
(16, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 11),
(17, 4, 21, 'thuviendohoa.vn_618.png', 'ếch', 222, 1, 222, 11),
(18, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 12),
(19, 4, 21, 'thuviendohoa.vn_618.png', 'ếch', 222, 1, 222, 12),
(20, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 13),
(21, 4, 21, 'thuviendohoa.vn_618.png', 'ếch', 222, 1, 222, 13),
(22, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 14),
(23, 4, 21, 'thuviendohoa.vn_618.png', 'ếch', 222, 1, 222, 14),
(24, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 15),
(25, 4, 22, 'thuviendohoa.vn_318.png', 'sách', 555, 1, 555, 16),
(26, 4, 16, 'ip14-promax1.png', 'Iphone', 2000, 1, 2000, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(9, 'SS'),
(10, 'Laptop'),
(11, 'Đồng hồ xịn'),
(12, 'Iphone'),
(13, 'Hàng hóa'),
(14, 'abc'),
(15, 'xe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(8, 'macbook', 13.00, 'Macbook-pro-m2-1.png', 'aa', 50, 10),
(10, 'samsung s22 aaa', 200.00, 'samsung-s22-ultra1.png', '', 40, 9),
(12, 'đồng hồ aaa', 90.00, 'Apple-watch2.png', '', 20, 11),
(14, 'Iphone 13 vip', 40.00, 'ip13-promax1.png', '', 70, 12),
(16, 'Iphone', 2000.00, 'ip14-promax1.png', 'bbbbbb', 100, 12),
(19, 'Shin', 100.00, 'thuviendohoa.vn_619.png', 'shin', 0, 13),
(20, 'mũ', 111.00, 'mu.jpg', 'ádaad', 0, 13),
(21, 'ếch', 222.00, 'thuviendohoa.vn_618.png', '', 0, 13),
(22, 'sách', 555.00, 'thuviendohoa.vn_318.png', 'sách', 0, 13),
(24, 'ab', 1.00, '261759765_122668070229566_3654052815541574775_n.jpg', '', 0, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`, `name`) VALUES
(4, 'fongle', '123', 'phongldpd05648@fpt.edu.vn', 'Việt Nam', '0368548431', 1, 'Le Dong Phong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
