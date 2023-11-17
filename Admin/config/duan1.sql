-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 01:28 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Cơ sở dữ liệu: `duan1`
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cho`
--
INSERT INTO
  `cho` (`id`, `trang_thai`, `id_xe`, `id_loaixe`)
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `hinh_thuc_thanh_toan`
--
CREATE TABLE `hinh_thuc_thanh_toan` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `khach_hang`
--
CREATE TABLE `khach_hang` (
  `Ma_kh` int(10) NOT NULL,
  `Ten_kh` varchar(255) NOT NULL,
  `So_dien_thoai` int(50) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `loai_ve`
--
CREATE TABLE `loai_ve` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `user`
--
CREATE TABLE `user` (
  `id user` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `ve_xe`
--
CREATE TABLE `ve_xe` (
  `Ma_ve` int(10) NOT NULL,
  `Ten_ve` varchar(255) NOT NULL,
  `Ma_kh` varchar(255) NOT NULL,
  `Ma_chuyen_xe` int(10) NOT NULL,
  `Gia_ve_xe` int(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `xe`
--
CREATE TABLE `xe` (
  `Ma_xe` int(10) NOT NULL,
  `Ten_xe` varchar(255) NOT NULL,
  `Bien_so` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Ma_loai_xe` int(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--
--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE
  `khach_hang`
ADD
  PRIMARY KEY (`Ma_kh`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE
  `user`
ADD
  PRIMARY KEY (`id user`);

--
-- Chỉ mục cho bảng `ve_xe`
--
ALTER TABLE
  `ve_xe`
ADD
  PRIMARY KEY (`Ma_ve`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE
  `xe`
ADD
  PRIMARY KEY (`Ma_xe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE
  `user`
MODIFY
  `id user` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ve_xe`
--
ALTER TABLE
  `ve_xe`
MODIFY
  `Ma_ve` int(10) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;