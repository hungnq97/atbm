-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 23, 2018 lúc 07:51 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'Bắc bê đê', 'Thanh Hóa', NULL, '12345678', '0982975372', 1, 1, '30726394_2094184500838183_4470951927391191040_n.jpg', NULL, NULL),
(4, 'Bắc chó', 'Hà Đông', NULL, '123456', '01235558558', 1, 1, '30726394_2094184500838183_4470951927391191040_n.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Macbook', NULL, NULL, NULL, 0, 1, '2018-04-09 21:28:17', '2018-04-09 21:28:17'),
(5, 'Dell', NULL, NULL, NULL, 0, 1, '2018-04-09 21:44:45', '2018-04-09 21:44:45'),
(6, 'Asus', NULL, NULL, NULL, 0, 1, '2018-04-09 21:46:24', '2018-04-09 21:46:24'),
(7, 'HP', NULL, NULL, NULL, 0, 1, '2018-04-13 11:01:55', '2018-04-13 11:15:59'),
(8, 'MSI', NULL, NULL, NULL, 0, 1, '2018-04-21 02:04:39', '2018-04-21 02:04:39'),
(9, 'HP', NULL, NULL, NULL, 0, 1, '2018-04-22 14:16:14', '2018-04-22 14:16:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thumbnail` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text,
  `head` tinyint(4) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `sale`, `thumbnail`, `category_id`, `content`, `head`, `view`, `hot`, `created_at`, `updated_at`) VALUES
(9, 'ấdsadasdsa', NULL, 11111111, 10, 'anh1.png', 5, 'asdsadasd', 0, 0, 0, NULL, '2018-04-18 13:38:18'),
(10, '11111yyyyy', NULL, 111111, 111, 'anh2.png', 6, 'hhthth', 0, 0, 0, NULL, '2018-04-18 13:38:27'),
(11, 'arrr', NULL, 1111, 1, 'anh3.png', 7, 'daasds', 0, 0, 0, NULL, '2018-04-18 13:38:35'),
(12, 'cay vl', NULL, 123456, 10, 'anh4.png', 7, '111111', 0, 0, 0, NULL, '2018-04-18 13:38:43'),
(14, 'Samsung galaxy S7', NULL, 100000000, 30, 'printed-summer-dress.jpg', 5, 'Điện thoại samsung galaxy S7', 0, 0, 0, NULL, NULL),
(16, 'Xiao Mi Redmi Note 4', NULL, 3900000, 10, 'printed-summer-dress (3.jpg', 4, 'Xiaomi Redmi Note 4', 0, 0, 0, NULL, NULL),
(17, 'Xiao Mi Redmi Note 4', NULL, 3900000, 10, 'printed-summer-dress (3.jpg', 4, 'Xiaomi Redmi Note 4', 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
