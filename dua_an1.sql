-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 11:46 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dua_an1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cho`
--

CREATE TABLE `cho` (
  `id` int(10) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `id_xe` int(10) NOT NULL,
  `id_loaixe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cho`
--

INSERT INTO `cho` (`id`, `trang_thai`, `id_xe`, `id_loaixe`) VALUES
(1, 'còn chỗ', 1, 1),
(2, 'còn chỗ', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ve`
--

CREATE TABLE `dat_ve` (
  `id` int(10) NOT NULL,
  `id_ve` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `diem_di` varchar(255) NOT NULL,
  `diem_den` varchar(255) NOT NULL,
  `gio_di` time(5) NOT NULL,
  `gio_den` time(5) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `id_hoadon` int(10) NOT NULL,
  `id_xe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_thuc_thanh_toan`
--

CREATE TABLE `hinh_thuc_thanh_toan` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `ngay_thanh_toan` datetime(6) NOT NULL,
  `tong_tien` int(10) NOT NULL,
  `id_hinhthuc` int(10) NOT NULL,
  `image_minhchung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ve`
--

CREATE TABLE `loai_ve` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_xe`
--

CREATE TABLE `loai_xe` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_xe`
--

INSERT INTO `loai_xe` (`id`, `name`) VALUES
(1, 'xe Hà Nội-Quảng Ninh '),
(2, 'Hà Nội-Hải Phòng '),
(6, 'Hà Nội-Hải Thanh Hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_loai` int(10) NOT NULL,
  `gia` decimal(20,0) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bien_so` varchar(255) NOT NULL,
  `id_loaixe` int(10) NOT NULL,
  `id_cho` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`id`, `name`, `bien_so`, `id_loaixe`, `id_cho`) VALUES
(1, 'xe chạy Hà Nội-Hải Phòng', '30F-47852', 1, 45),
(2, 'xe chạy Hà Nội-Hải Phòng', '30F-47852', 1, 45);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cho`
--
ALTER TABLE `cho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinh_thuc_thanh_toan`
--
ALTER TABLE `hinh_thuc_thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_ve`
--
ALTER TABLE `loai_ve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_xe`
--
ALTER TABLE `loai_xe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cho`
--
ALTER TABLE `cho`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dat_ve`
--
ALTER TABLE `dat_ve`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_thuc_thanh_toan`
--
ALTER TABLE `hinh_thuc_thanh_toan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_ve`
--
ALTER TABLE `loai_ve`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_xe`
--
ALTER TABLE `loai_xe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
