-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2017 lúc 12:44 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websizebanhangannhanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(0, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `mota`, `id_loaisp`, `thutu`) VALUES
(13, 'CÆ¡m rang dÆ°a bÃ² ', 'comrangduabo.jpg', 35000, '', 18, 2),
(14, 'BÃ¡nh bá»™t lá»c', 'banhbotloc.jpg', 15000, '', 18, 3),
(15, 'NÆ°á»›c mÃ­a', 'nuocmia.jpg', 10000, '', 19, 4),
(16, 'BÃ¡nh ngÃ´ sá»¯a giá»«a', 'banhngosuadua.jpg', 15000, '', 17, 5),
(17, 'BÃ¡nh mÃ¬ bate', 'banhmibate.jpg', 15000, '', 18, 6),
(18, 'sinh tá»‘ cÃ¡c loáº¡i', 'sinhto.jpg', 30000, '', 19, 7),
(19, 'BÃ¡nh xÃ¨o', 'banhxeo.jpg', 15000, '', 18, 8),
(20, 'cÆ¡m gÃ ', 'comga.jpg', 35000, '', 18, 9),
(21, 'XÃ´i nhiá»u mÃ u', 'xoinhieumau.jpg', 30000, '', 17, 10),
(22, 'TrÃ  sá»¯a', 'trasua.jpg', 15000, '', 19, 11),
(23, 'Nem chua rÃ¡n', 'nemchuaran.jpg', 5000, '', 18, 12),
(24, 'Pizza', 'pizangon.jpg', 89000, '', 18, 13),
(25, 'Khoai tÃ¢y chiÃªn ', 'khoaitaychien.jpg', 15000, '', 18, 13),
(26, 'Cafe Ä‘en', 'caffe.jpg', 25000, '', 19, 14),
(27, 'BÃ¡nh bao chay', 'banhbaochay.jpg', 15000, '<p>Th&agrave;nh pháº§n :</p>\r\n<p>&nbsp;+ Vá» b&aacute;nh : Bá»™t náº¿p</p>\r\n<p>&nbsp;+Nh&acirc;n b&aacute;nh: Rau + gia vá»‹&nbsp;</p>\r\n<p>HÆ°Æ¡ng vá»‹ : ThÆ¡m ngon&nbsp;</p>\r\n<p>M&agrave;u sáº¯c : M&agrave;u tráº¯ng&nbsp;</p>', 17, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`tenkhachhang`, `matkhau`, `email`, `dienthoai`, `diachi`) VALUES
('Phan VÄƒn Máº¡nh', '123456', 'manhpv42@wru.vn', 971794596, '175-TÃ¢y SÆ¡n - Äá»‘ng Äa - HÃ  Ná»™i'),
('DÅ©ng ', '123456', 'Dungpv42@wru.vn', 12456788, 'adÄ‘'),
('Trang', '123', 'Trangpv56@gmail.com', 123456789, 'adgad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(100) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(17, 'Äá»“ Äƒn Ä‘áº·c biá»‡t ', 1),
(18, 'Äá»“ Äƒn nhanh', 2),
(19, 'Äá»“ uá»‘ng', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
