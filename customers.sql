-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2021 lúc 03:28 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `customers`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `fullName`, `age`, `address`) VALUES
('dai', '123', 'Tran Dai', 21, 'ha noi'),
('dai1', '', 'tqdai', 21, 'hn'),
('ok', '123', 'dai', 19, 'hanam'),
('shopDB', 'tranquangdai1', 'tranquangdai', 23, 'hn'),
('thayhung', '123456', 'thay hung', 35, 'hn'),
('xx', 'ok', '', 3, '35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `age`, `address`, `email`, `phoneNumber`, `score`) VALUES
(27, 'Trần Quang Đại', 21, 'Hà Nội', 'tranquangdai1219@gmail.com', '0353608535', 67),
(28, 'Phùng Tuấn Nam', 23, 'Hà Nội', 'nam@gmail.com', '035999999', 38),
(29, 'Trần Công Chiến', 23, 'Ha Noi', 'tranquangdai1999@outlook.com', '0351909999', 19),
(30, 'Vũ Thu Hoà', 26, 'Hà Nam', 'Hoai19@gmail.com', '0169696969', 98),
(31, 'Tran', 34, 'Thái Bình', 'tran39@gmail.com', '0231844552', 65),
(32, 'Trần Quang Chiến', 54, 'Hải Phòng', 'Chien@gmail.com', '0243125445', 4),
(33, 'tqdai', 31, 'Ha Noi', 'tranquangdai1999@outlook.com', '10000034', 11),
(34, 'Bùi Văn Minh x', 23, 'Hà Nội', 'minhbv@gmail.com', '0344535423', 78);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
