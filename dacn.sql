-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 01:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacn`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai_tour`
--

CREATE TABLE `loai_tour` (
  `id_loaitour` int(150) NOT NULL,
  `TenLoaiTuor` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayTao` datetime NOT NULL,
  `NgaySua` datetime NOT NULL,
  `NguoiTao` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `HinhDaiDien` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_tour`
--

INSERT INTO `loai_tour` (`id_loaitour`, `TenLoaiTuor`, `NgayTao`, `NgaySua`, `NguoiTao`, `HinhDaiDien`) VALUES
(14, 'Tour Tết ', '2016-10-20 00:00:00', '2016-10-24 00:00:00', 'VõHồngHữu', ''),
(15, 'Tour Ghép Hằng Ngày ', '2016-10-20 00:00:00', '2016-10-22 00:00:00', 'VõHồngHữu', ''),
(16, 'Tour Miền Nam ', '2016-10-20 00:00:00', '2016-10-21 00:00:00', 'VõHồngHữu', ''),
(17, 'Miền Trung Tây Nguyên ', '2016-10-20 00:00:00', '2016-10-22 00:00:00', 'VõHồngHữu', ''),
(18, 'Tour Miền Bắc ', '2016-10-20 00:00:00', '2016-10-21 00:00:00', 'VõHồngHữu', ''),
(19, 'TOUR GHÉP MIỀN TRUNG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(20, 'ẻgdfgdfgdfgdfgdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(21, 'ggggggwwwww', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(22, 'htreterterteter', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(100) NOT NULL,
  `TenTour` text COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `NgayKhoiHanh` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDi` int(111) NOT NULL,
  `ThoiGian` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDen` int(120) NOT NULL,
  `NgayTao` datetime NOT NULL,
  `NgaySua` datetime NOT NULL,
  `NguoiTao` varchar(240) COLLATE utf8_unicode_ci NOT NULL,
  `NguoiSua` int(11) NOT NULL,
  `GiaTour` double NOT NULL,
  `KhuyenMai` tinyint(1) NOT NULL,
  `id_loaitour` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `TenTour`, `HinhAnh`, `NgayKhoiHanh`, `NoiDi`, `ThoiGian`, `NoiDen`, `NgayTao`, `NgaySua`, `NguoiTao`, `NguoiSua`, `GiaTour`, `KhuyenMai`, `id_loaitour`) VALUES
(1, 'ĐÀ NẴNG - NGŨ HÀNH SƠN - HỘI AN - BÀ NÀ - HUẾ - ĐỘNG THIÊN ĐƯỜNG SƠN TRÀ', 'ht3.jpg', '0000-00-00 00:00:00', 0, '5 Ngày 4 Đêm', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'VõHồngHữu', 0, 4.75, 0, 0),
(2, 'ĐÀ NẴNG - NGŨ HÀNH SƠN - HỘI AN - CÙ LAO CHÀM - BÀ NÀ - HUẾ - SƠN TRÀ', 'ht3.jpg', '0000-00-00 00:00:00', 0, '5 Ngày 4 Đêm', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'VõHồngHữu', 0, 4.75, 0, 0),
(3, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – RỪNG DỪA – BÀ NÀ – SƠN TRÀ', 'ht3.jpg', '0000-00-00 00:00:00', 0, '4 Ngày 3 Đêm', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'VõHồngHữu', 0, 4.75, 0, 0),
(4, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – HUẾ – SƠN TRÀ', 'VNE-1482333901.jpg', '0000-00-00 00:00:00', 0, '4 Ngày 3 Đêm', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'VõHồngHữu', 0, 4.75, 0, 16),
(10, ' ĐÀ NẴNG – SƠN TRÀ - NGŨ HÀNH SƠN – HỘI AN - BÀ NÀ – HUẾ - ĐỘNG THIÊN ĐƯỜNG – HUẾ', 'VNE-1482338946.jpg', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(11, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – CÙ LAO CHÀM - BÀ NÀ – HUẾ - CHÙA LINH ỨNG', 'VNE-1482339088.jpg', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(12, ' ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – CÙ LAO CHÀM - BÀ NÀ – LINH ỨNG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(13, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – BÀ NÀ – LINH ỨNG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(14, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – LÝ SƠN – BÀ NÀ – SƠN TRÀ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(15, 'ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN – LÝ SƠN – SƠN TRÀ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 14),
(16, 'TOUR TẮM SUỐI KHOÁNG NÓNG NÚI THẦN TÀI', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(17, 'HUYỀN THOẠI MIỀN ĐẤT TỎI', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(18, 'TOUR LẶN NGẮM SAN HÔ SƠN TRÀ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(19, 'RỪNG DỪA BẢY MẪU – HỘI AN NAM BỘ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(20, 'MỸ SƠN 1 NGÀY', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(21, 'NGŨ HÀNH SƠN – HỘI AN', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(22, 'ĐÀ NẴNG – TẮM BÙN GALINA – DU THUYỀN HÀN GIANG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(23, 'ĐÀ NẴNG CITY TOUR', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(24, 'KHÁM PHÁ CÙ LAO CHÀM 1 NGÀY', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 15),
(25, 'HÀ NỘI - LÀO CAI - SAPA - HÀ GIANG - HÀ NỘI', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(26, 'KHÁM PHÁ ĐÔNG BẮC', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(27, 'HỒ BÀ BỂ - THÁC BẢN GIỐC - ĐỘNG NGƯỜM NGAO - HANG PẮC BÓ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(28, 'SAPA - CÁT CÁT- LAO CHẢI TẢ VAN - HÀM RỒNG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(29, 'ĐÀ NẴNG - NINH BÌNH - BÁI ĐÍNH - TRÀNG AN - ĐÀ NẴNG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(30, 'DU LỊCH HÀ GIANG MÙA ĐÔNG - XUÂN', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(31, 'NHA TRANG - VINPEARL LAND - BÃI TRANH - THÁP BÀ PONAGAR', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 17),
(32, 'ĐÀ NẴNG – SƠN TRÀ – NGŨ HÀNH SƠN – HỘI AN – BÀ NÀ – HUẾ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 17),
(33, 'ĐÀ NẴNG - HUẾ - ĐỘNG THIÊN ĐƯỜNG - VIẾNG MỘ ĐẠI TƯỚNG VÕ NGUYÊN GIÁP', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 17),
(34, 'ĐÀ NẴNG - BÁN ĐẢO SƠN TRÀ - HỘI AN - HUẾ', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 17),
(35, 'ĐÀ NẴNG - BÀ NÀ - BÁN ĐẢO SƠN TRÀ - HỘI AN - MỸ SƠN', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 17),
(36, 'ĐÀ NẴNG - SƠN TRÀ - BÀ NÀ - CÙ LAO CHÀM - HỘI AN - NGŨ HÀNH SƠN', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 18),
(37, 'PHAN THIẾT - TÀ KÚ - LÂU ĐÀI RƯỢU VANG - ĐỒI CÁT BAY', 'VNE-1482339612.jpg', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16),
(38, 'ĐÀ NẴNG – CẦN THƠ – SÓC TRĂNG – BẠC LIÊU – CÀ MAU', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16),
(39, 'PHÚ QUỐC - THIÊN ĐƯỜNG RỰC NẮNG', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16),
(40, 'SÀI GÒN - CHÂU ĐỐC - CẦN THƠ - MỸ THO', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16),
(41, 'SÀI GÒN - MIỀN TÂY', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16),
(42, 'THÀNH PHỐ HỒ CHÍ MINH - ĐÀ LẠT NGÀN HOA', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `usersname` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `usersname`, `password`, `fullname`) VALUES
(8, 'vohonghuu', 'a6f33d4159948591b1a268464347d35b', 'vohonghuu'),
(9, 'honghuu96', 'ee1fed16d2fbf07a9f52d5c1c402ac10', 'vohonghuu'),
(10, 'honghuu123', '11ddbaf3386aea1f2974eee984542152', 'vohuu'),
(11, 'vohonghuu123', '7cb8dad9363f615782f07ce1f4fe6aa0', 'vohonghuu'),
(12, 'honghuu915', '329cae5e0b712717e7e1a568d7434376', 'huu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai_tour`
--
ALTER TABLE `loai_tour`
  ADD PRIMARY KEY (`id_loaitour`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loai_tour`
--
ALTER TABLE `loai_tour`
  MODIFY `id_loaitour` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
