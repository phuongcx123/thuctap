-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 04, 2024 lúc 10:56 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `created_at`) VALUES
(3, 'Product 3', 39.99, '', 'Description for product 3', '2024-08-30 12:00:00'),
(4, 'Product 4', 49.99, '', 'Description for product 4', '2024-08-30 12:00:00'),
(5, 'Product 5', 59.99, '', 'Description for product 5', '2024-08-30 12:00:00'),
(6, 'Product 6', 69.99, '', 'Description for product 6', '2024-08-30 12:00:00'),
(7, 'Product 7', 79.99, '', 'Description for product 7', '2024-08-30 12:00:00'),
(8, 'Product 8', 89.99, '', 'Description for product 8', '2024-08-30 12:00:00'),
(9, 'Product 9', 99.99, '', 'Description for product 9', '2024-08-30 12:00:00'),
(10, 'Product 10', 109.99, '', 'Description for product 10', '2024-08-30 12:00:00'),
(11, 'Cao Xuân Phương ', 123.00, 'assets/image/PH33384.jpg', 'fghfghfgh', '2024-09-04 16:59:41'),
(12, 'Cao Xuân Phương ', 123.00, 'assets/image/PH33384.jpg', 'fghfghfgh', '2024-09-04 17:01:37'),
(13, 'Chưa Phân Mục 1', 123123.00, 'assets/image/hihi.jpg', 'edfgfdgd', '2024-09-04 17:05:41'),
(14, 'Cao Xuân Phương 1', 123.00, NULL, 'fghfghfgh', '2024-09-04 17:38:47'),
(18, 'Chưa Phân Mục ', 123123.00, NULL, 'edfgfdgd', '2024-09-04 17:46:13'),
(19, 'Cao Xuân Phương 1111', 14423.00, 'assets/image/quyen-su-dung-dat-1722703798404826865581.webp', 'fghfghfgh', '2024-09-04 17:46:16'),
(20, 'Chưa Phân Mục ', 123123.00, NULL, 'edfgfdgd', '2024-09-04 17:46:20'),
(21, 'Chưa Phân Mục ', 123123.00, NULL, 'edfgfdgd', '2024-09-04 17:46:26'),
(22, 'Chưa Phân Mục ', 123123.00, NULL, 'edfgfdgd', '2024-09-04 17:46:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
