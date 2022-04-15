-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 11:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_introduction_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `writer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'Kappa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_guest`
--

CREATE TABLE `tbl_cart_guest` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryId`, `categoryName`) VALUES
(1, 'Áo thun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_article`
--

CREATE TABLE `tbl_comment_article` (
  `commentArticle` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_product`
--

CREATE TABLE `tbl_comment_product` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `dateComment` timestamp NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_article`
--

CREATE TABLE `tbl_image_article` (
  `id` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_product`
--

CREATE TABLE `tbl_image_product` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_image_product`
--

INSERT INTO `tbl_image_product` (`id`, `productId`, `image`) VALUES
(3, 9, 'db580ca9d3.jpg'),
(4, 10, '614cd64d0e.jpg'),
(5, 10, '614cd64d0e.jpg'),
(6, 10, '614cd64d0e.jpg'),
(7, 10, '614cd64d0e.jpg'),
(8, 11, '6ab8abe878.jpg'),
(9, 11, '6ab8abe878.'),
(10, 11, '6ab8abe878.'),
(11, 11, '6ab8abe878.'),
(12, 12, 'c57c6a9eaf.jpg'),
(13, 12, 'c57c6a9eaf.jpg'),
(14, 12, 'c57c6a9eaf.jpg'),
(15, 12, 'c57c6a9eaf.jpg'),
(16, 13, '8cd59179bf.jpg'),
(17, 13, 'fcd13dfd21.jpg'),
(18, 13, '137d03e217.jpg'),
(19, 13, 'f20edcfd55.jpg'),
(20, 1, 'f20edcfd55.jpg'),
(28, 14, 'b16be3b229.jpg'),
(29, 14, 'b16be3b229.jpg'),
(30, 14, 'b16be3b229.jpg'),
(31, 14, 'b49b3e2e26.jpg'),
(32, 15, '2b8956ff58.jpg'),
(33, 15, 'a6b10aa09a.jpg'),
(34, 15, 'd48bd82359.jpg'),
(35, 15, '2abe3e0455.jpg'),
(48, 18, 'b155f321df.jpg'),
(49, 18, 'df4e3a60bf.jpg'),
(50, 18, '76507650ab.jpg'),
(51, 18, '2954bae460.jpg'),
(52, 20, '6f48504a43.jpg'),
(53, 20, '2ed98ca43b.jpg'),
(54, 20, 'c383b1e82d.jpg'),
(55, 20, 'ff5b13c3af.jpg'),
(56, 21, 'b332cb8d10.jpg'),
(57, 21, '40be1eff36.jpg'),
(58, 21, 'dce19bcfbd.jpg'),
(59, 21, '4519e23453.jpg'),
(60, 22, 'ce484ed1b7.jpg'),
(61, 22, '0458d3c0e1.jpg'),
(62, 22, '9487210788.jpg'),
(63, 22, '515ff0af68.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderId` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` int(255) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `season` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `categoryId`, `brandId`, `price`, `color`, `size`, `model`, `gender`, `season`, `description`) VALUES
(1, 'Nón Kappa 341788W 77M', 1, 1, '499.000', 'xám', '57', '341788W', 'unisex', 'SS21', '<p>&bull; Bộ sưu tập: AUTHENTIC &bull; Chất liệu: 100% Cotton. Chất liệu th&ocirc;ng tho&aacute;ng, thấm h&uacute;t mồ h&ocirc;i tốt v&agrave; c&oacute; độ bền cao. &bull; Thiết kế: Kiểu d&aacute;ng n&oacute;n lưỡi trai thời trang, m&agrave;u sắc c&aacute; t&iacute;nh. Họa tiết logo Banda thiết kế dọc theo th&acirc;n n&oacute;n ấn tượng. Mặt sau được thiết kế kh&oacute;a k&eacute;o kim loại để điều chỉnh k&iacute;ch thước để ph&ugrave; hợp với người mang. &bull; Ph&ugrave; hợp: Đi chơi, đi l&agrave;m, dạo phố, thể thao. &bull; Xuất xứ thương hiệu: Italia</p>\r\n'),
(11, 'Áo 2', 1, 0, '20000', 'đỏ', '43', 'A1', 'male', '2022', '<p>dsf</p>\r\n'),
(15, 'Nón kappa', 1, 1, '390000', 'đen', '20', 'A1', 'unisex', '2022', '<p>n&oacute;n đẹp</p>\r\n'),
(18, 'Nón kappa', 1, 1, '390000', 'đen', '20', 'A1', 'unisex', '2022', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế lưỡi trai che nắng hiệu quả, bật vẻ trẻ trung.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Logo Kappa xuất hiện v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;M&agrave;u sắc tươi tắn, dễ phối đồ, l&agrave; phụ kiện kh&ocirc;ng thể thiếu của c&aacute;c t&iacute;n đồ thời trang.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: 100% cotton.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Freesize.</p>\r\n\r\n<h2><strong>N&Oacute;N LƯỠI TRAI NAM/ NỮ KAPPA 321B6LW 777 ĐEN freesize, trẻ trung, dễ phối đồ</strong></h2>\r\n\r\n<p>N&Oacute;N LƯỠI TRAI NAM/ NỮ KAPPA 321B6LW 777 ĐEN l&agrave; phụ kiện kh&ocirc;ng thể thiếu của c&aacute;c t&iacute;n đồ thời trang, vừa che nắng hiệu quả, vừa l&agrave;m đẹp, gi&uacute;p người mang th&ecirc;m phần tự tin.</p>\r\n'),
(22, 'Áo 5', 1, 1, '40000', 'đỏ', '20', 'A1', 'male', '2022', '<p>&aacute;o đẹp 123456789</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `sliderName` varchar(255) NOT NULL,
  `collectionName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sliderImage` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `name`, `email`, `address`, `phone`, `password`, `role`) VALUES
(2, 'name', 'email', 'address', 'phone', 'password', 'customer'),
(3, 'Phong', 'phong@gmail.com', 'Thu Duc, Ho Chi Minh city', '0123', '202cb962ac59075b964b07152d234b70', 'customer'),
(4, 'Phong', 'phong1@gmail.com', 'Thu Duc, Ho Chi Minh city', '0123', '202cb962ac59075b964b07152d234b70', 'customer'),
(5, 'Phong', 'phong2@gmail.com', 'Thu Duc, Ho Chi Minh city', '0123', '202cb962ac59075b964b07152d234b70', 'customer'),
(6, 'Phong', 'a@gmail.com', 'Thu Duc, Ho Chi Minh city', '0123', '202cb962ac59075b964b07152d234b70', 'admin'),
(7, 'Phong 3', 'phong3@gmail.com', 'Dong Hoa, Di An, Binh Duong', '0123', '202cb962ac59075b964b07152d234b70', 'customer'),
(8, 'Phong 4 ', 'phong4@gmail.com', 'Dong Hoa, Di An, Binh Duong', '0123', '202cb962ac59075b964b07152d234b70', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_cart_guest`
--
ALTER TABLE `tbl_cart_guest`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `tbl_comment_article`
--
ALTER TABLE `tbl_comment_article`
  ADD PRIMARY KEY (`commentArticle`);

--
-- Indexes for table `tbl_comment_product`
--
ALTER TABLE `tbl_comment_product`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `tbl_image_article`
--
ALTER TABLE `tbl_image_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image_product`
--
ALTER TABLE `tbl_image_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart_guest`
--
ALTER TABLE `tbl_cart_guest`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_comment_article`
--
ALTER TABLE `tbl_comment_article`
  MODIFY `commentArticle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comment_product`
--
ALTER TABLE `tbl_comment_product`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_image_article`
--
ALTER TABLE `tbl_image_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_image_product`
--
ALTER TABLE `tbl_image_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
-- --------------------------------------------------------

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider`(`collectionName`,`sliderName`,`description`,`sliderImage`,`status`) VALUES 
('Summer Collection','Fall - Winter Collections 2030','A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.','hero-1.jpg',1),
('Summer Collection','Fall - Winter Collections 2030','A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.','hero-2.jpg',1);

-- --------------------------------------------------------

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
