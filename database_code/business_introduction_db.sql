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
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `title`, `content`, `datetime`, `writer`) VALUES
(1, 'Săn lùng những đôi sneaker phù hợp với học sinh', '<h2>&nbsp;</h2>\r\n\r\n<h2><strong><img alt=\"Giày nữ đẹp\" src=\"https://salt.tikicdn.com/ts/tmp/4f/e4/f5/d319c41dc5b2b6a177f03c280383fea7.jpg\" style=\"height:250px; width:250px\" /></strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Ti&ecirc;u ch&iacute; chọn những đ&ocirc;i gi&agrave;y sneaker ph&ugrave; hợp với học sinh</strong></h2>\r\n\r\n<p>Ng&agrave;y nay, những em học sinh ng&agrave;y nay lu&ocirc;n c&oacute; cơ hội để tiếp x&uacute;c với nhiều xu hướng hiện đại trong đ&oacute; bao gồm phong c&aacute;ch ăn diện thời trang s&agrave;nh điệu. B&ecirc;n cạnh s&aacute;ch vở, quần &aacute;o th&igrave; gi&agrave;y d&eacute;p cũng l&agrave; m&oacute;n đồ kh&ocirc;ng thể thiếu đối với c&aacute;c bạn học sinh khi đến trường. Đ&aacute;p ứng nhu cầu n&agrave;y, tr&ecirc;n thị trường c&oacute; rất nhiều mẫu gi&agrave;y thể thao trendy được ra mắt thu h&uacute;t sự ch&uacute; &yacute; của học sinh. Tuy nhi&ecirc;n, để chọn một&nbsp;<a href=\"https://tintuc.hoang-phuc.com/tag/giay-sneaker\">đ&ocirc;i sneaker</a>&nbsp;ph&ugrave; hợp th&igrave; cần phải lưu &yacute; c&aacute;c ti&ecirc;u ch&iacute; sau:</p>\r\n\r\n<h3><strong>Chọn gi&agrave;y vừa vặn với b&agrave;n ch&acirc;n</strong></h3>\r\n\r\n<p>Điều đầu ti&ecirc;n cần lưu &yacute; khi chọn những đ&ocirc;i sneaker ph&ugrave; hợp với học sinh đ&oacute; l&agrave; phải vừa với đ&ocirc;i ch&acirc;n của m&igrave;nh. Nếu như qu&aacute; chật sẽ khiến ch&acirc;n bị đau hay thậm ch&iacute; l&agrave; sưng phồng, b&ocirc;ng tr&oacute;c da. Nếu đi&nbsp;<a href=\"https://tintuc.hoang-phuc.com/tag/giay\">gi&agrave;y</a>&nbsp;qu&aacute; rộng lỏng lẻo sẽ khiến bạn gặp kh&oacute; khăn, mất tự tin khi di chuyển. V&igrave; thế, h&atilde;y chọn một đ&ocirc;i gi&agrave;y vừa với b&agrave;n ch&acirc;n để c&oacute; thể cảm nhận được sự thoải m&aacute;i nhất nh&eacute;!</p>\r\n\r\n<h3><strong>M&agrave;u sắc trang nh&atilde;</strong></h3>\r\n\r\n<p>L&agrave; một học sinh th&igrave; việc chọn trang phục, gi&agrave;y d&eacute;p, phụ kiện cũng đều phải đảm bảo kh&ocirc;ng được qu&aacute; m&agrave;u m&egrave;, l&ograve;e loẹt v&agrave; cần ch&uacute; trọng về phần thanh lịch v&agrave; nh&atilde; nhặn. Thế n&ecirc;n, h&atilde;y để &yacute; đến việc chọn một đ&ocirc;i gi&agrave;y thiết kế đơn giản, m&agrave;u sắc trung t&iacute;nh hay trắng, đen cơ bản tr&aacute;nh trường hợp trở th&agrave;nh tắc k&egrave; hoa di động.</p>\r\n\r\n<h3><strong>Kiểu d&aacute;ng hợp xu hướng</strong></h3>\r\n\r\n<p>Theo t&acirc;m l&yacute; của nhiều người cũng như c&aacute;c bạn học sinh, việc chọn một đ&ocirc;i gi&agrave;y đang trở th&agrave;nh tr&agrave;o lưu cũng t&aacute;c động đến sự tự tin của họ. Ch&iacute;nh v&igrave; thế m&agrave; c&aacute;c bậc phụ huynh cũng như học sinh đừng qu&ecirc;n cập nhật những mẫu gi&agrave;y trendy để t&igrave;m cho m&igrave;nh một lựa chọn ph&ugrave; hợp đến trường nh&eacute;!</p>\r\n\r\n<h3><strong>Bảo vệ đ&ocirc;i ch&acirc;n</strong></h3>\r\n\r\n<p>Gi&agrave;y sneakers kh&ocirc;ng chỉ cho thấy gu ăn mặc s&agrave;nh điệu của c&aacute;c bạn học sinh m&agrave; đ&oacute; c&ograve;n l&agrave; c&aacute;ch để bảo vệ đ&ocirc;i ch&acirc;n của họ. Đừng nghĩ v&igrave; đẹp, hack d&aacute;ng m&agrave; c&aacute;c bạn nữ sinh thường chọn c&aacute;ch l&ecirc;nh kh&ecirc;nh tr&ecirc;n đ&ocirc;i gi&agrave;y cao g&oacute;t. Một đ&ocirc;i gi&agrave;y với ưu điểm &ecirc;m &aacute;i, thoải m&aacute;i v&agrave; hỗ trợ di chuyển chắc chắn sẽ l&agrave; người bạn đồng h&agrave;nh tuyệt vời đối với học sinh.&nbsp;</p>\r\n\r\n<h3><strong>Gi&aacute; th&agrave;nh ph&ugrave; hợp với t&uacute;i tiền</strong></h3>\r\n\r\n<p>Một ti&ecirc;u ch&iacute; quan trọng kh&ocirc;ng k&eacute;m khi chọn gi&agrave;y cho học sinh đ&oacute; gi&aacute; cả phải chăng v&agrave; ph&ugrave; hợp. Hầu hết c&aacute;c bạn học sinh đều chưa thể l&agrave;m ra tiền, gi&agrave;y c&oacute; thể được ba mẹ mua cho hay tr&iacute;ch ra từ số tiền tiết kiệm m&agrave; m&igrave;nh d&agrave;nh dụm được. D&ugrave; bạn l&agrave; một người sinh ra trong gia đ&igrave;nh c&oacute; điều kiện hay kh&ocirc;ng th&igrave; cũng c&acirc;n nhắc chọn đ&ocirc;i gi&agrave;y ph&ugrave; hợp với ho&agrave;n cảnh kinh tế của gia đ&igrave;nh m&igrave;nh nh&eacute;!</p>\r\n\r\n<h2><strong>Những mẫu gi&agrave;y sneaker ph&ugrave; hợp với học sinh</strong></h2>\r\n\r\n<h3><strong>Gi&agrave;y sneaker vải basic</strong></h3>\r\n\r\n<p>Kh&ocirc;ng ri&ecirc;ng g&igrave; học sinh m&agrave; nhiều người cũng d&agrave;nh t&igrave;nh cảm đặc biệt cho những đ&ocirc;i gi&agrave;y vải. Sở dĩ gi&agrave;y vải thường c&oacute; đặc t&iacute;nh nhẹ với phần th&acirc;n vải tho&aacute;ng m&aacute;t, co gi&atilde;n tốt v&agrave; phần đế cao su &ecirc;m, đ&agrave;n hồi. Đặc biệt, gi&agrave;y sneaker vải đơn giản c&ograve;n rất dễ phối đồ, c&aacute;c bạn học sinh c&oacute; thể diện với &aacute;o d&agrave;i hay quần t&acirc;y &aacute;o sơ mi đều được. Ch&iacute;nh v&igrave; thế m&agrave; d&ugrave; kh&ocirc;ng c&oacute; nhiều kiểu d&aacute;ng nhưng gi&agrave;y thể thao vải vẫn được nhiều bạn trẻ ưa chuộng.</p>\r\n\r\n<h3><strong>Gi&agrave;y sneaker da tổng hợp</strong></h3>\r\n\r\n<p>Kh&ocirc;ng giống với những đ&ocirc;i gi&agrave;y vải, gi&agrave;y thể thao l&agrave;m từ da tổng hợp thường c&oacute; form tương đối cứng. Tuy nhi&ecirc;n, ng&agrave;y nay c&ocirc;ng nghệ ph&aacute;t triển gi&agrave;y sneakers da cũng đảm bảo mang đến sự thoải m&aacute;i v&agrave; &ecirc;m &aacute;i cho người mang. Hơn hết, gi&agrave;y thể thao với chất liệu da tổng hợp c&ograve;n c&oacute; v&ocirc; số mẫu m&atilde; để c&aacute;c bạn học sinh lựa chọn đi học hay đi chơi. B&ecirc;n cạnh đ&oacute;, điểm cộng của gi&agrave;y da l&agrave; dễ vệ sinh, bạn c&oacute; thể l&agrave;m sạch ngay khi lấm bẩn.</p>\r\n', '2022-04-03 14:57:44', 'Chuyên gia sneaker');

-- --------------------------------------------------------

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
