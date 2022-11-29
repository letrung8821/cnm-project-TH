-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 08:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `name`, `email`, `sdt`, `role`) VALUES
('MinzAD', 'Minz Puiz', 'minz@gmail.com', '0399999999', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` longtext NOT NULL,
  `chuyenmuc` varchar(255) NOT NULL,
  `id_admin` varchar(10) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cate`, `name`) VALUES
(1, 'Chuột'),
(2, 'Màn hình'),
(3, 'Bàn phím'),
(4, 'PC'),
(5, 'Tai nghe'),
(6, 'Ghế');

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `id_don` int(11) NOT NULL,
  `id_kh` varchar(10) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `creditcard` varchar(50) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`username`, `name`, `diachi`, `email`, `sdt`, `creditcard`, `role`) VALUES
('Ayaya1', 'Ayaka', '12 Nguyễn Văn Bảo', 'minhbui152@gmail.com', '0399973925', NULL, 'KH'),
('huu123', 'Trọng Hữu', '12 Nguyễn Văn Bảo', 'huu456@gmail.com', '0378514944', NULL, 'KH'),
('trungle128', 'Lê Trung', '129/58 Nguyễn Văn Nghi', 'trungle1289@gmail.com', '0965636322', NULL, 'KH');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_sp` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL,
  `mota` longtext NOT NULL,
  `gia` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `soluongban` int(11) NOT NULL,
  `subcate` int(11) NOT NULL,
  `thuonghieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_sp`, `name`, `category`, `soluong`, `tinhtrang`, `mota`, `gia`, `hinh`, `soluongban`, `subcate`, `thuonghieu`) VALUES
(37, 'Màn hình Dell S2522HG 25\" Fast IPS 240Hz G-Sync', '3', 1, '95%', 'màn hình mới qua sử dụng, hàng xả quán net.', '3000000', 'ggi_11-26-22_4853c09b43e29abcc3f3.jpg', 0, 0, 9),
(38, 'bàn phím văn phòng dell', '3', 2, '99%', 'bàn phím mới mua, dùng được vài lần, do không hợp nên bán lại', '150000', 'ggi_11-26-22_25783eae97d74e8917c6.jpg', 0, 0, 9),
(39, 'Chuột MSI Clutch GM30', '3', 1, '99%', 'chuột hãng MSI, mua về ít dùng, nay đem nhượng lại giá rẻ cho mọi người, no box', '1000000', 'ggi_11-26-22_296b4061b7196e473708.jpg', 0, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id_subcate` int(11) NOT NULL,
  `tensubcate` varchar(255) NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id_subcate`, `tensubcate`, `id_cate`) VALUES
(1, 'Chuột có dây', 1),
(2, 'Chuột không dây', 1),
(3, 'Bàn phím có dây', 3),
(4, 'Bàn phím không dây', 3),
(5, 'Tai nghe có dây', 5),
(6, 'Tai nghe không dây', 5),
(7, 'PC gaming', 4),
(8, 'PC văn phòng', 4),
(9, 'Máy trạm', 4),
(10, 'Tần số quét 60Hz', 2),
(11, 'Tần số quét 120Hz', 2),
(12, 'Tần số quét 144Hz', 2),
(13, 'Tần số quét 240Hz', 2),
(14, 'Ghế công thái học', 6),
(15, 'Ghế gaming', 6);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `role`) VALUES
('Ayaya1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'KH'),
('huu123', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'KH'),
('MinzAD', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
('trungle128', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'KH');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id_th` int(11) NOT NULL,
  `thuonghieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id_th`, `thuonghieu`) VALUES
(1, 'Logitech'),
(2, 'Razer'),
(3, 'Corsair'),
(4, 'Steelseries'),
(5, 'Akko'),
(6, 'Asus'),
(7, 'MSI'),
(8, 'Acer'),
(9, 'Dell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`id_don`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `subcate` (`subcate`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id_subcate`),
  ADD KEY `cate_sub` (`id_cate`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id_th`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `id_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_subcate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `cate_sub` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
