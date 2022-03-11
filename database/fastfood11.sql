-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2022 lúc 04:21 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fastfood11`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `full_name`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 111, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'ga ran'),
(2, 'pizza'),
(3, 'do an vat'),
(4, 'do uong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_product` int(10) UNSIGNED NOT NULL,
  `id` int(10) NOT NULL,
  `total _money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `amount`, `date_order`, `id_product`, `id`, `total _money`) VALUES
(4, 7, '2022-03-10 04:10:08', 13, 41, 0),
(5, 4, '2022-03-10 04:10:08', 16, 41, 0),
(6, 7, '2022-03-10 04:10:30', 13, 41, 0),
(7, 4, '2022-03-10 04:10:30', 16, 41, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `description`, `price`, `image_name`, `id_category`) VALUES
(4, 'gÃ ', 'ngon ngon', '30.000', 'ga gion cay.jpg', 1),
(5, 'pizza bÃ²', 'ngon ngon', '100.000', 'pizza bÃ².jpeg', 2),
(6, 'pizza gÃ ', 'ngon ngon', '100.000', 'pizza gÃ .JPG', 2),
(7, 'coca-cola', 'uá»‘ng kÃ¨m khi Äƒn ', '10.000', 'coca-cola.jpg', 4),
(8, 'pizza bÃ²', 'siÃªu ngon', '100.000', 'pizza bÃ².jpeg', 2),
(9, 'gÃ ', 'ngon ngon', '30.000', 'gÃ  truyá»n thá»‘ng.jpg', 1),
(10, 'pizza gÃ ', 'ngon ngon', '100.000', 'pizza gÃ .JPG', 2),
(11, 'gÃ ', 'ngon ngon', '30.000', 'ga tiÃªu.jpg', 1),
(12, 'gÃ ', 'siÃªu ngon', '30.000', 'ga gion cay.jpg', 1),
(13, 'coca-cola', 'uá»‘ng kÃ¨m khi Äƒn ', '10.000', 'coca-cola.jpg', 4),
(14, 'gÃ ', 'ngon ngon', '30.000', 'gÃ  truyá»n thá»‘ng.jpg', 1),
(15, 'coca-cola', 'ngon ngon', '10.000', 'coca-cola.jpg', 4),
(16, 'gÃ ', 'siÃªu ngon', '30.000', 'ga tiÃªu.jpg', 1),
(17, 'pizza gÃ ', 'ngon ngon', '30.000', 'ga tiÃªu.jpg', 1),
(18, '', '', '', 'ga gion cay.jpg', 1),
(19, 'pizza gÃ ', 'ngon ngon', '30.000', 'pizza bÃ².jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_account`
--

CREATE TABLE `user_account` (
  `id` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_account`
--

INSERT INTO `user_account` (`id`, `email`, `user_password`, `username`, `fullname`, `avatar`, `status`, `address`, `phonenumber`, `dateofbirth`) VALUES
(41, 'phamtuyetanh2@gmail.com', '$2y$10$EFXSdjcnF8jab8aThQSb0O6oKcHO8760jhd8BbvrfI1Fidnqz1mQ6', 'tuyetanh', 'Pháº¡m', 'coca-cola.jpg', NULL, 'BÃ¬nh Giang', 2147483647, '2001-03-03'),
(42, 'phamtuyetanh2@gmail.com', '$2y$10$xGsrO6lV/5PFVoYhuQlqCOnIuhjahFCNPxtn/WBzeZiy4K7LNBzS6', 'hihi', '', '', NULL, '', 0, '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_foreign_product` (`id_product`),
  ADD KEY `fk_foreign_user` (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_foreign_category` (`id_category`);

--
-- Chỉ mục cho bảng `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_foreign_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `fk_foreign_user` FOREIGN KEY (`id`) REFERENCES `user_account` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_foreign_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
