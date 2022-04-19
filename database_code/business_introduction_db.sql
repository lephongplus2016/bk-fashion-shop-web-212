-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 10:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
(2, 'Săn lùng những đôi sneaker phù hợp với học sinh', '<h2><strong>Gia hạn chương tr&igrave;nh Sự kiện hy hữu đến 8/3</strong></h2>\r\n\r\n<p>Nhằm mang đến cho kh&aacute;ch h&agrave;ng cơ hội mua h&agrave;ng hiệu với gi&aacute; tốt nhất, Ho&agrave;ng Ph&uacute;c thực hiện gia hạn chương tr&igrave;nh&nbsp;đến hết ng&agrave;y 08/3/2022. Chương tr&igrave;nh sẽ &aacute;p dụng cho cả hai h&igrave;nh thức: mua h&agrave;ng online v&agrave; mua trực tiếp.</p>\r\n\r\n<h2><strong>C&aacute;c sản phẩm giảm gi&aacute; chỉ từ 299.000đ</strong></h2>\r\n\r\n<h3><strong>&Aacute;o thun đồng gi&aacute; chỉ từ 299.000đ</strong></h3>\r\n\r\n<p>&Aacute;o thun h&agrave;ng hiệu từ 299.000đ:</p>\r\n', '2022-04-15 21:45:53', 'Chuyên gia sneaker');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `bannerId` int(11) NOT NULL,
  `bannerName` varchar(255) NOT NULL,
  `bannerImage` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`bannerId`, `bannerName`, `bannerImage`, `status`) VALUES
(1, 'Shoes Spring 2030', 'banner-3.jpg', 0),
(2, 'Accessories', 'banner-2.jpg', 0),
(3, 'Clothing Collections 2030', 'banner-1.jpg', 0);

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
(1, 'Kappa'),
(2, 'Staple'),
(3, 'Ecko Unltd'),
(4, 'Replay');

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
  `image` varchar(255) NOT NULL,
  `size` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `userId`, `productName`, `price`, `quantity`, `image`, `size`) VALUES
(1, 22, 6, 'Áo 5', '40000', 1, 'ce484ed1b7.jpg', '20'),
(2, 15, 6, 'Nón kappa', '390000', 4, '2b8956ff58.jpg', '24'),
(3, 22, 0, 'Áo 5', '40000', 1, 'ce484ed1b7.jpg', '20');

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
(2, 'Áo thun tay ngắn'),
(3, 'Áo thun có cổ'),
(4, 'Áo sơ mi tay ngắn'),
(5, 'Áo sơ mi tay dài'),
(6, 'Giày thể thao'),
(7, 'Giày Sneaker'),
(8, 'Áo khoác gió'),
(9, 'Áo khoác Thun'),
(10, 'Quần Jean'),
(11, 'Quần thể thao'),
(12, 'Quần Shorts'),
(13, 'Đầm'),
(14, 'Váy'),
(15, 'Nón'),
(16, 'Túi xách'),
(17, 'Balo');

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

--
-- Dumping data for table `tbl_comment_product`
--

INSERT INTO `tbl_comment_product` (`commentId`, `userId`, `productId`, `dateComment`, `content`, `image`) VALUES
(1, 6, 22, '2022-04-15 21:42:37', 'Áo đẹp lắm', ''),
(2, 6, 22, '2022-04-15 21:43:26', 'Áo xịn', '8aaedbef97.jpg'),
(3, 6, 22, '2022-04-15 21:47:17', 'fsdfsdfsd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_article`
--

CREATE TABLE `tbl_image_article` (
  `id` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_image_article`
--

INSERT INTO `tbl_image_article` (`id`, `articleId`, `image`) VALUES
(1, 2, 'b8296d5238.jpg');

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
(68, 24, '82503f1c0f.jpg'),
(69, 24, '45e2feff52.jpg'),
(70, 24, '4d769d055a.jpg'),
(71, 24, 'd3313fc49e.jpg'),
(72, 25, 'cbc11e2869.jpg'),
(73, 25, '8ab4f1c3b1.jpg'),
(74, 25, 'fb18e8f10c.jpg'),
(75, 25, '4ede00de52.jpg'),
(76, 26, 'a3666c0dd9.jpg'),
(77, 26, '93d32113b7.jpg'),
(78, 26, '38887bc2ea.jpg'),
(79, 26, 'f056063c40.jpg'),
(80, 27, '7c6043ce75.jpg'),
(81, 27, 'a4bb53f8e1.jpg'),
(82, 27, '0216db14f5.jpg'),
(83, 27, '883b8d7939.jpg'),
(84, 28, '1a9ac66fb5.jpg'),
(85, 28, 'e27c2f2946.jpg'),
(86, 28, '630b77b688.jpg'),
(87, 28, '82f312de0d.jpg'),
(88, 29, '81ec1bd3ad.jpg'),
(89, 29, '708551fe03.jpg'),
(90, 29, 'ccac254cee.jpg'),
(91, 29, '6998b79121.jpg'),
(92, 30, 'e642eaec09.jpg'),
(93, 30, '3d8d795061.jpg'),
(94, 30, '61bb149400.jpg'),
(95, 30, '93aa7409da.jpg'),
(96, 31, 'c9d018917d.jpg'),
(97, 31, 'c2ded08e50.jpg'),
(98, 31, '13daa3f392.jpg'),
(99, 31, '3d43f68a12.jpg'),
(100, 32, '4be7bdc8f4.jpg'),
(101, 32, '30bc56caff.jpg'),
(102, 32, '89e68e3d5d.jpg'),
(103, 32, '4832f77142.jpg'),
(104, 33, 'd482e60c1a.jpg'),
(105, 33, '46b2bdcb9c.jpg'),
(106, 33, 'd307e2d001.jpg'),
(107, 33, 'ae52642a08.jpg'),
(108, 34, 'f87ab152d1.jpg'),
(109, 34, '12bb001b53.jpg'),
(110, 34, '34fb145b32.jpg'),
(111, 34, 'bea5a25aaf.jpg'),
(112, 35, 'c0de7a9c62.jpg'),
(113, 35, 'a0d5cc7135.jpg'),
(114, 35, 'e331dc8640.jpg'),
(115, 35, 'ccadeb96fc.jpg'),
(116, 36, 'f7ab8b6012.jpg'),
(117, 36, 'f91b495c74.jpg'),
(118, 36, 'b4ad75dea0.jpg'),
(119, 36, '6ab3aa7f9a.jpg'),
(120, 37, 'dc67326086.jpg'),
(121, 37, '7cb6f7e71e.jpg'),
(122, 37, 'd054cb2659.jpg'),
(123, 37, 'a829ebeae9.jpg'),
(124, 38, '4deb724f62.jpg'),
(125, 38, '3a88883ad2.jpg'),
(126, 38, 'a30346c932.jpg'),
(127, 38, '09daf8800a.jpg'),
(128, 39, 'd712adba49.jpg'),
(129, 39, 'd3aae99e43.jpg'),
(130, 39, 'e280ad7e44.jpg'),
(131, 39, 'c87e068917.jpg'),
(132, 40, 'da653c5a4b.jpg'),
(133, 40, '513fdbc001.jpg'),
(134, 40, '6e0c13359b.jpg'),
(135, 40, '3ce6a65d15.jpg'),
(136, 41, '997bfbf625.jpg'),
(137, 41, '8f8ebb1a28.jpg'),
(138, 41, '27dc6c1482.jpg'),
(139, 41, 'e0b79dddef.jpg'),
(140, 42, '401d32780f.jpg'),
(141, 42, '0956337d7a.jpg'),
(142, 42, 'f434de7ebf.jpg'),
(143, 42, '60665b6d55.jpg'),
(144, 43, 'e3a54d16f2.jpg'),
(145, 43, 'afcdc444bd.jpg'),
(146, 43, '191020c0e7.jpg'),
(147, 43, 'b002f256c9.jpg'),
(148, 44, '7fc8529715.jpg'),
(149, 44, 'c4df9b9bdb.jpg'),
(150, 44, 'c411239061.jpg'),
(151, 44, 'd092a6efb6.jpg'),
(152, 45, 'df032822cc.jpg'),
(153, 45, '215424189e.jpg'),
(154, 45, 'df028d1841.jpg'),
(155, 45, '93ba4f4f77.jpg'),
(156, 46, '62a031e244.jpg'),
(157, 46, '3129a334c8.jpg'),
(158, 46, '834481a53a.jpg'),
(159, 46, 'bbd91560d3.jpg'),
(160, 47, 'f69d938f11.jpg'),
(161, 47, '6930d0ed4a.jpg'),
(162, 47, 'f0b9a45a48.jpg'),
(163, 47, 'bd13585644.jpg'),
(164, 48, '2ba1b11f49.jpg'),
(165, 48, 'd797ba88ce.jpg'),
(166, 48, 'bd2e8a2e15.jpg'),
(167, 48, 'd98e1da118.jpg'),
(168, 49, 'e71d857dfa.jpg'),
(169, 49, '67c89ba88f.jpg'),
(170, 49, 'ad5e12b2d0.jpg'),
(171, 49, '779812a7fe.jpg'),
(172, 50, '5b192ecd75.jpg'),
(173, 50, '710d9616fc.jpg'),
(174, 50, '85af15e95d.jpg'),
(175, 50, '8ba72f0e3f.jpg'),
(176, 51, 'f028c07f22.jpg'),
(177, 51, 'a3f7f58d6b.jpg'),
(178, 51, '395c7c939e.jpg'),
(179, 51, '2e9cd64829.jpg'),
(180, 52, 'bb76d3f88b.jpg'),
(181, 52, 'a666632a15.jpg'),
(182, 52, '4db6ea03c4.jpg'),
(183, 52, '828d410734.jpg'),
(184, 53, 'cc44408660.jpg'),
(185, 53, '63111f009b.jpg'),
(186, 53, '8264cdfc19.jpg'),
(187, 53, '9c0fdc372f.jpg'),
(188, 54, '0a102719f1.jpg'),
(189, 54, '4aec298ea3.jpg'),
(190, 54, 'f8737771eb.jpg'),
(191, 54, '0a10bb3b7c.jpg'),
(192, 55, '03833f6cd8.jpg'),
(193, 55, '6fe725f03d.jpg'),
(194, 55, 'e6fd382920.jpg'),
(195, 55, '9dcb7d8462.jpg'),
(196, 56, '054359c534.jpg'),
(197, 56, '752d1d1006.jpg'),
(198, 56, '69f5340126.jpg'),
(199, 56, 'd920e6ee34.jpg'),
(200, 57, '8df435d332.jpg'),
(201, 57, 'f4aa31d0a4.jpg'),
(202, 57, '5664d011ca.jpg'),
(203, 57, '2bdf4b6cb0.jpg'),
(204, 58, 'a729311146.jpg'),
(205, 58, '2acabf70e0.jpg'),
(206, 58, '03dbec7bd1.jpg'),
(207, 58, 'a88a683454.jpg'),
(208, 59, '1495f3d83c.jpg'),
(209, 59, 'c807198950.jpg'),
(210, 59, 'f1ee96a168.jpg'),
(211, 59, '6d855ac093.jpg'),
(212, 60, '2a3f5490f0.jpg'),
(213, 60, '8ea92e81f6.jpg'),
(214, 60, '68b7ed9f08.jpg'),
(215, 60, 'c58f990da4.jpg'),
(216, 61, 'fe73d4da17.jpg'),
(217, 61, 'a3764eb48b.jpg'),
(218, 61, '8c6d7bde45.jpg'),
(219, 61, 'a7b4c0b4ab.jpg'),
(220, 62, '4c803d0d07.jpg'),
(221, 62, '3a6f04d076.jpg'),
(222, 62, 'd7301d574c.jpg'),
(223, 62, 'afdeb2ed39.jpg'),
(224, 63, '5deb80e74c.jpg'),
(225, 63, 'dcefee6bb8.jpg'),
(226, 63, 'b5e458dce3.jpg'),
(227, 63, '09d87fe75f.jpg'),
(228, 64, '8609c3911b.jpg'),
(229, 64, 'b35a8eb2ad.jpg'),
(230, 64, '3a12c274d9.jpg'),
(231, 64, '6fa488ac9c.jpg'),
(232, 65, '9adab9abcc.jpg'),
(233, 65, 'e78338f797.jpg'),
(234, 65, '74a4adece6.jpg'),
(235, 65, '8fc79dd770.jpg'),
(236, 66, '75291c8d89.jpg'),
(237, 66, 'a804cd52b4.jpg'),
(238, 66, 'd16d4047c1.jpg'),
(239, 66, '10b1415d2b.jpg'),
(240, 67, '5f9bc8052c.jpg'),
(241, 67, 'a352a0e660.jpg'),
(242, 67, 'eb685ad8f7.jpg'),
(243, 67, '8f5b3da803.jpg'),
(244, 68, '4361348556.jpg'),
(245, 68, 'e87e575136.jpg'),
(246, 68, '1760eda8ec.jpg'),
(247, 68, '353ff4ee2c.jpg'),
(248, 69, '32076ad5d3.jpg'),
(249, 69, '7115231b38.jpg'),
(250, 69, '47c7d9d99f.jpg'),
(251, 69, '434e0a769e.jpg'),
(252, 70, 'f8b4b392ea.jpg'),
(253, 70, '364256cc7a.jpg'),
(254, 70, '8907ad65e6.jpg'),
(255, 70, '135427f96b.jpg'),
(256, 71, '49a0fb88bd.jpg'),
(257, 71, '38acc5eb0e.jpg'),
(258, 71, 'c6d2fea313.jpg'),
(259, 71, 'cc6a8db8c5.jpg'),
(260, 72, 'bd6be3dbb1.jpg'),
(261, 72, '071aadefd4.jpg'),
(262, 72, '16bec0ecc4.jpg'),
(263, 72, '3abdd6458f.jpg'),
(264, 73, 'f08a7adaba.jpg'),
(265, 73, '34f10138e5.jpg'),
(266, 73, 'c9ed725582.jpg'),
(267, 73, '6ed2c2d0aa.jpg'),
(268, 74, '27caa3fa1e.jpg'),
(269, 74, '2c401d0729.jpg'),
(270, 74, '6b01ab72e4.jpg'),
(271, 74, '7e512873d1.jpg');

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
(24, 'Staple áo thun tay ngắn nam', 2, 2, '499000', 'While', '20', '2202C6865', 'male', 'SS22', '<p>► Thiết kế thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p>►&nbsp;Điểm nhấn ch&iacute;nh l&agrave; d&ograve;ng chữ &ldquo;Staple&rdquo; v&agrave; họa tiết chim bồ c&acirc;u c&aacute;ch điệu in v&ocirc; c&ugrave;ng nổi bật ở mặt trước của &aacute;o.</p>\r\n\r\n<p>►&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(25, 'Kappa áo thun tay ngắn nam', 2, 1, '299000', 'A02', '20', '35146KW', 'male', 'SS22', '<p>&Aacute;o Thun Tay Ngắn Nam Kappa 35146KW A02 chắc chắn sẽ chinh phục được c&aacute;c anh ch&agrave;ng th&iacute;ch sự đơn giản nhưng vẫn l&agrave;m bật l&ecirc;n được n&eacute;t c&aacute; t&iacute;nh ri&ecirc;ng. Với form &aacute;o su&ocirc;ng, em &aacute;o nam&nbsp;n&agrave;y sẽ mang đến cảm gi&aacute;c thoải m&aacute;i v&agrave; dễ chịu cho người mặc.</p>\r\n\r\n<p>&Aacute;o Thun Tay Ngắn Nam Kappa 35146KW A02 d&ugrave; đơn giản nhưng kh&ocirc;ng hề đơn điệu khi m&agrave; sự tinh tế được thể hiện qua kiểu d&aacute;ng, chất vải, đường may đến cả d&atilde;y banda tr&ecirc;n tay &aacute;o. Em &aacute;o n&agrave;y sẽ mang đến cho người mặc trải nghiệm tuyệt vời bởi độ thấm si&ecirc;u việt từ chất liệu cotton.&nbsp;</p>\r\n\r\n<p>C&ograve;n về phần phối đồ th&igrave; bạn kh&ocirc;ng cần phải lăn tăn, bởi &aacute;o c&oacute; thể đi đ&ocirc;i với tất cả mọi kiểu quần thời trang. Đồng thời, t&iacute;nh ứng dụng của một chiếc &aacute;o basic th&igrave; kh&ocirc;ng c&oacute; g&igrave; để b&agrave;n c&atilde;i. Bạn c&oacute; thể mặc để đi l&agrave;m, đi học, đi chơi đều kh&iacute; chất v&agrave; nam t&iacute;nh.</p>\r\n'),
(26, 'Staple áo thun tay ngắn nam', 2, 2, '390000', 'White', '20', '2202C6815 ', 'male', 'SS22', '<p>► Thiết kế thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p>► Điểm nhấn ch&iacute;nh l&agrave; d&ograve;ng chữ &ldquo;Staple&rdquo; v&agrave; họa tiết chim bồ c&acirc;u c&aacute;ch điệu in v&ocirc; c&ugrave;ng nổi bật ở mặt trước của &aacute;o.</p>\r\n\r\n<p>► Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(27, 'Ecko Unltd áo thun có cổ tay ngắn nam', 3, 3, '399000', 'Grey', '20', 'OS22-03156', 'male', 'SS22', '<p>► Thiết kế thời trang, gi&uacute;p bạn nổi bật c&aacute; t&iacute;nh ri&ecirc;ng.</p>\r\n\r\n<p>►&nbsp;Logo t&ecirc; gi&aacute;c v&agrave; d&ograve;ng chữ ECKO UNLTD. nổi bật.</p>\r\n\r\n<p>►&nbsp;Đủ size chuẩn cho ch&agrave;ng.</p>\r\n\r\n<p>► Chất liệu: 100% cotton tho&aacute;ng m&aacute;t, h&uacute;t mồ h&ocirc;i hiệu quả.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Chất liệu</strong></p>\r\n\r\n<p>L&agrave;m từ 100% cotton n&ecirc;n mẫu &aacute;o n&agrave;y c&oacute; khả năng thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p đem lại cảm gi&aacute;c tho&aacute;ng m&aacute;t cho c&aacute;c ch&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thiết kế</strong></p>\r\n\r\n<p>&Aacute;O THUN C&Oacute; CỔ TAY NGẮN NAM ECKO UNLTD. OS22-03156 X&aacute;m đẹp&nbsp;mang thiết kế basic, c&oacute; thể phối c&ugrave;ng c&aacute;c loại quần jeans, short hay khaki, mang lại vẻ năng động v&agrave; tự tin.</p>\r\n'),
(28, 'Ecko Unltd áo thun có cổ tay ngắn nam', 3, 3, '399000', 'Orange', '20', 'OS22-03156', 'male', 'SS22', '<p>► Thiết kế thời trang, gi&uacute;p bạn nổi bật c&aacute; t&iacute;nh ri&ecirc;ng.</p>\r\n\r\n<p>►&nbsp;Logo t&ecirc; gi&aacute;c v&agrave; d&ograve;ng chữ ECKO UNLTD. nổi bật.</p>\r\n\r\n<p>►&nbsp;Đủ size chuẩn cho ch&agrave;ng.</p>\r\n\r\n<p>► Chất liệu: 100% cotton tho&aacute;ng m&aacute;t, h&uacute;t mồ h&ocirc;i hiệu quả.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Chất liệu</strong></p>\r\n\r\n<p>L&agrave;m từ 100% cotton n&ecirc;n mẫu &aacute;o n&agrave;y c&oacute; khả năng thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p đem lại cảm gi&aacute;c tho&aacute;ng m&aacute;t cho c&aacute;c ch&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thiết kế</strong></p>\r\n\r\n<p>&Aacute;O THUN C&Oacute; CỔ TAY NGẮN NAM ECKO UNLTD. OS22-03156 X&aacute;m đẹp&nbsp;mang thiết kế basic, c&oacute; thể phối c&ugrave;ng c&aacute;c loại quần jeans, short hay khaki, mang lại vẻ năng động v&agrave; tự tin.</p>\r\n'),
(29, 'Ecko Unltd áo sơ mi tay ngắn dáng rộng nam', 4, 3, '399000', 'Black', '20', 'IF20-02101', 'male', 'FW20', '<p>► Bộ sưu tập: SUNDAY MOOD<br />\r\n► Chất liệu: 100% Cotton. Chất liệu thấm h&uacute;t tốt mang lại cảm gi&aacute;c tho&aacute;ng m&aacute;t, thoải m&aacute;i cho người mặc v&agrave; c&oacute; độ bền cao.<br />\r\n► Thiết kế: &Aacute;o sơ mi d&aacute;ng su&ocirc;ng, tay ngắn v&agrave; vai hơi trễ rất trendy. Những họa tiết đường kẻ bất quy tắc l&agrave;m cho chiếc &aacute;o c&agrave;ng trở n&ecirc;n ấn tượng v&agrave; thu h&uacute;t hơn. Thiết kế mang đến cho người mặc một phong c&aacute;ch thời trang độc đ&aacute;o v&agrave; c&aacute; t&iacute;nh.<br />\r\n► Ph&ugrave; hợp:Mọi hoạt động thường ng&agrave;y: đi học, đi l&agrave;m, đi chơi,...<br />\r\n► Nguồn gốc thương hiệu: Mỹ</p>\r\n'),
(30, 'Kappa áo thun có cổ tay ngắn nam', 3, 1, '1365000', '193', '20', 'K0852PD12S', 'male', 'SS21', '<p>► Bộ sưu tập: K4T COLLECTION<br />\r\n► Chất liệu: 62% Cotton, 38% Polyster. Chất liệu nhẹ, c&oacute; độ co gi&atilde;n tốt v&agrave; độ bền cao.<br />\r\n► Thiết kế: Kiểu d&aacute;ng cơ bản, tay ngắn v&agrave; c&oacute; cổ. Thiết kế trẻ trung với sự phối m&agrave;u nổi bật ở phần th&acirc;n &aacute;o. Chiếc &aacute;o sẽ mang lại cảm gi&aacute;c vừa tinh tế vừa năng động cho người mặc.<br />\r\n► Ph&ugrave; hợp: Những hoạt động đa dạng của nam giới: đi chơi, d&atilde; ngoại, đi du lịch, chơi thể thao nhẹ...<br />\r\n► Nguồn gốc thương hiệu: Italia</p>\r\n'),
(31, 'Ecko Unltd áo sơ mi tay dài nam', 5, 3, '499000', 'Blue', '20', 'IF21-32101', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; d&ograve;ng chữ &ldquo;Ecko Unltd.&rdquo; v&agrave; logo đặc trưng in ở g&oacute;c &aacute;o v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(32, 'Ecko Unltd áo sơ mi dáng suông nam', 5, 3, '1267000', 'Charcoal', '20', 'IS20-32002', 'male', 'ss20', '<p>► Chất liệu: 100% COTTON<br />\r\n► Đặc t&iacute;nh: Chất vải mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt, đặc biệt thoải m&aacute;i v&agrave; tho&aacute;ng m&aacute;t khi mặc.<br />\r\n► Kiểu d&aacute;ng &aacute;o sơmi tay d&agrave;i, c&oacute; t&uacute;i trước ngực, form &aacute;o vừa vặn t&ocirc;n đường n&eacute;t mạnh mẽ cho nam giới.<br />\r\n► Nằm trong BST #Restructuring mang phong c&aacute;ch cổ điển #Classical, logo Ecko v&agrave; biểu tượng t&ecirc; gi&aacute;c Mỹ m&agrave;u đen nổi bật ở trước ngực &aacute;o.<br />\r\n► Gam m&agrave;u trắng x&aacute;m, dễ d&agrave;ng phối với nhiều items kh&aacute;c nhau để tạo n&ecirc;n outfit #namt&iacute;nh, nhưng vẫn #nổibật v&agrave; #trẻtrung.</p>\r\n\r\n<p>► Th&iacute;ch hợp với nhiều hoạt động đa dạng của nam giới: đi l&agrave;m, đi học, đi chơi&hellip;</p>\r\n'),
(33, 'Kappa giày thể thao nam/nữ', 6, 1, '799000', 'A01', '39', '33191KW', 'unisex', 'SS22', '<p>GI&Agrave;Y THỂ THAO KAPPA 33191KW sở hữu 3 m&agrave;u sắc trắng, hồng, x&aacute;m với kiểu d&aacute;ng unisex d&agrave;nh cho cả nam v&agrave; nữ. Điểm nhấn của em gi&agrave;y thể thao nam/ nữ n&agrave;y ch&iacute;nh l&agrave; những mảng m&agrave;u được phối với nhau một c&aacute;ch h&agrave;i h&ograve;a v&agrave; bắt mắt. Trong khi đ&oacute;, phần logo Kappa được th&ecirc;m thắt ở ph&iacute;a sau v&agrave; lưỡi g&agrave; của gi&agrave;y vừa mang lại n&eacute;t thời trang vừa tạo độ nhận diện thương hiệu.&nbsp;</p>\r\n\r\n<p>Gi&agrave;y nam GI&Agrave;Y THỂ THAO KAPPA 33191KW l&agrave; một sự kết hợp ho&agrave;n hảo giữa phần th&acirc;n lưới, da ổng hợp v&agrave; phần đế eva. Thế n&ecirc;n, em&nbsp;gi&agrave;y thể thao nữ/ nam n&agrave;y sở hữu ưu điểm mềm mại, chống nước v&agrave; giảm sốc hiệu quả. Người mang c&oacute; thể diện em gi&agrave;y nữ/&nbsp;nam n&agrave;y đi học, đi l&agrave;m, đi chơi hay trong c&aacute;c hoạt động nhẹ đều tiện lợi v&agrave; c&ograve;n hợp thời trang.</p>\r\n'),
(34, 'Kappa giày thể thao nữ', 6, 1, '1222500', 'A0B', '38', '311699W', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, năng động v&agrave; nữ t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thuộc bộ sưu tập Thu Đ&ocirc;ng 2021 mới nhất của KAPPA.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: Đế: EVA &amp; TPR; Th&acirc;n: 95% Mesh &amp; 5% PU.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Đủ size từ 39-45 cho c&aacute;c n&agrave;ng.</p>\r\n'),
(35, 'Kappa giày sneaker nam', 7, 1, '1299000', '012A', '39', 'K0B55MC08', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế trẻ trung, c&aacute; t&iacute;nh, cool ngầu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh h&igrave;nh c&aacute;ch phối m&agrave;u lạ mắt v&agrave; phần đế c&aacute;ch điệu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp v&agrave; thoải m&aacute;i c&ugrave;ng nhiều trang phục kh&aacute;c nhau.</p>\r\n'),
(36, 'Kappa giày thể thao trẻ em 6-12 tuổi', 6, 1, '399000', 'A09', '31', '321184W', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế basic, &ocirc;m ch&acirc;n &ecirc;m &aacute;i v&agrave; vừa vặn, cho b&eacute; vận động thoải m&aacute;i.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Nhiều m&agrave;u sắc để lựa chọn, thay đổi trong tuần.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: Đế: 100% TPR, Th&acirc;n: 90% PU &amp; 10% vải.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Đủ size từ 31-35 cho c&aacute;c b&eacute; trai v&agrave; b&eacute; g&aacute;i từ 6-12 tuổi</p>\r\n'),
(37, 'Ecko Unltd áo khoác gió nam', 8, 3, '699000', 'Black', '30', 'IF21-07103', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; d&ograve;ng chữ &ldquo;Ecko Unltd.&rdquo; in tr&ecirc;n ngực tr&aacute;i của &aacute;o v&agrave; họa tiết sọc b&ecirc;n g&oacute;c phải v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(38, 'Kappa áo khoác gió nam', 8, 1, '1799000', '1107', '30', 'K0B32JJ80', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế trẻ trung, thể thao, năng động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; sự kết hợp m&agrave;u sắc lạ mắt, logo Kappa in dọc hai b&ecirc;n tay &aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mặc đẹp với nhiều trang phục kh&aacute;c nhau.</p>\r\n'),
(39, 'Kappa áo khoác thun nam', 9, 1, '699000', '916', '30', '341988W', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế d&aacute;ng thể thao, &ocirc;m vừa vặn, năng động v&agrave; cool ngầu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Kh&oacute;a k&eacute;o tiện dụng, &ecirc;m &aacute;i, dễ thao t&aacute;c.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Dải logo Kappa hai b&ecirc;n tay &aacute;o tạo ấn tượng thời trang độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: 100% Polyester.</p>\r\n'),
(40, 'Kappa áo khoác thun nam', 9, 1, '1499000', '8802', '30', 'K0B52MK11 ', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế trẻ trung, thể thao, năng động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần d&acirc;y k&eacute;o in nổi bật, bắt mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mặc đẹp với nhiều trang phục kh&aacute;c nhau.</p>\r\n'),
(41, 'Ecko Unltd quần jeans nam', 10, 3, '799000', 'Grey', '28', 'IF21-35013', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, c&aacute; t&iacute;nh v&agrave; chất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần wash denim r&aacute;ch cool ngầu v&agrave; logo &ldquo;Ecko Unltd.&rdquo; in ph&iacute;a sau t&uacute;i quần v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(42, 'Replay quần jeans nam', 10, 4, '2236000', '007', '28', 'MA931-353', 'male', 'FM20', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, c&aacute; t&iacute;nh v&agrave; chất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần wash denim r&aacute;ch cool ngầu v&agrave; logo Replay in ph&iacute;a sau t&uacute;i quần v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(43, 'Kappa quần thể thao nam', 11, 1, '799000', '3003', '29', 'K0B32AK80', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế trẻ trung, c&aacute; t&iacute;nh, năng động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần t&uacute;i hộp may tr&ecirc;n quần.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mặc đẹp với nhiều trang phục kh&aacute;c nhau.</p>\r\n'),
(44, 'Kappa quần thể thao nam', 11, 1, '499000', '193', '29', 'K0812CQ06S', 'male', 'SS21', '<p>►&nbsp;Bộ sưu tập: K4T COLLECTION<br />\r\n►&nbsp;Chất liệu: 100% Polyster. Chất liệu nhẹ, kh&ocirc;ng nhăn v&agrave; hạn chế thấm nước.<br />\r\n►&nbsp;Thiết kế: Kiểu d&aacute;ng thể thao v&agrave; năng động. Thiết kế ấn tượng với họa tiết c&oacute; m&agrave;u sắc nổi bật ở th&acirc;n quần tạo n&ecirc;n sự kh&aacute;c biệt v&agrave; c&aacute; t&iacute;nh mạnh mẽ cho người mặc.<br />\r\n►&nbsp;Ph&ugrave; hợp: Những hoạt động đa dạng của nam giới: đi chơi, du lịch, d&atilde; ngoại, chơi thể thao&hellip;<br />\r\n►&nbsp;Nguồn gốc thương hiệu: Italia</p>\r\n'),
(45, 'Replay quần shorts nam', 12, 4, '1495000', '010', '28', 'M9755-72314', 'male', 'SS21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; c&aacute;ch phối m&agrave;u bắt mắt v&agrave; d&ograve;ng chữ &ldquo;Replay&rdquo; v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(46, 'Staple quần shorts thể thao nam', 12, 2, '699000', 'Purple', '29', '2202B6871', 'male', 'SS22', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; c&aacute;ch phối m&agrave;u bắt mắt v&agrave; d&ograve;ng chữ &ldquo;Staple&rdquo; v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(47, 'Kappa áo thun tay ngắn nữ', 2, 1, '299000', 'A0V', '25', '34195KW', 'female', 'SS22', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế croptop nữ t&iacute;nh, khoe kh&eacute;o vẻ đẹp cơ thể.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Logo KAPPA xuất hiện trước ngực &aacute;o v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Dễ phối đồ, mang đến phong c&aacute;ch thời trang khỏe khoắn, năng động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: 100% cotton.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Đủ size S, M, L cho n&agrave;ng lựa chọn.</p>\r\n'),
(48, 'Kappa áo thun tay ngắn nữ', 2, 1, '299000', 'A01', '25', '37137WW', 'female', 'SS22', '<p>&Aacute;o thun tay ngắn nữ KAPPA 37137WW A01 CAM l&agrave; một sản phẩm đến từ thương hiệu Kappa Italy với bề d&agrave;y lịch sử hơn 50 năm trong ng&agrave;nh c&ocirc;ng nghiệp thời trang. Đ&acirc;y l&agrave; một sản phẩm được l&agrave;m từ chất liệu POLYESTER với khả năng chống nhăn hiệu quả v&agrave; độ bền cao. Ngo&agrave;i ra, em &aacute;o nữ&nbsp;n&agrave;y c&ograve;n sở hữu sắc cam nổi bật, mang đến cảm gi&aacute;c năng động v&agrave; tươi mới cho người mặc.</p>\r\n'),
(49, 'Kappa áo thun có cổ tay ngắn dáng ôm nữ', 3, 1, '399000', '193', '28', 'K0862PD11S', 'female', 'SS21', '<p>► Bộ sưu tập: K4T COLLECTION<br />\r\n► Chất liệu: 62% Cotton, 38% Polyster. Chất liệu c&oacute; độ co gi&atilde;n tốt v&agrave; độ bền cao.<br />\r\n► Thiết kế: Kiểu d&aacute;ng cơ bản, tay ngắn v&agrave; c&oacute; cổ. Chiếc &aacute;o với một m&agrave;u chủ hướng đến sự tối giản trong thiết kế. Logo trước ngực với m&agrave;u sắc tương phản tạo n&ecirc;n điểm nhấn một c&aacute;ch tinh tế từ thương hiệu Kappa.<br />\r\n► Ph&ugrave; hợp: Đi chơi, d&atilde; ngoại, đi du lịch, tập gym v&agrave; chơi thể thao,...<br />\r\n► Nguồn gốc thương hiệu: Italia</p>\r\n'),
(50, 'Ecko Unltd áo sơ mi tay ngắn nữ', 4, 3, '399000', 'BL While', '29', 'IF21-02601', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần bo chun thắt nơ c&aacute;ch điệu ph&iacute;a sau lưng &aacute;o v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(51, 'Ecko Unltd áo sơ mi nữ', 4, 3, '267000', 'LT Denim', '28', 'IF19-02046', 'female', 'FW19', '<p>&Aacute;o sơ mi Nữ Ecko Unltd m&agrave;u đen mạnh mẽ, trẻ trung, năng động, theo phong c&aacute;ch đường phố New York.</p>\r\n\r\n<p>Chất liệu 100% Tencel Denim mềm mại, giữ ẩm cao khiến mặt vải b&oacute;ng mượt, m&aacute;t mịn lại thẩm thấu tho&aacute;ng kh&iacute; cực k&igrave; ph&ugrave; hợp với sự năng động của người sử dụng</p>\r\n'),
(52, 'Kappa giày sneakers nữ', 7, 1, '699000', 'A0J', '36', '311C1GW', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Đủ size gi&agrave;y&nbsp;sneaker&nbsp;nữ&nbsp;chuẩn ch&acirc;u &Acirc;u từ 36-39 cho n&agrave;ng th&ecirc;m xinh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, gi&uacute;p bạn nổi bật c&aacute; t&iacute;nh ri&ecirc;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;C&oacute; thể diện với nhiều loại trang phục kh&aacute;c nhau, đều rất thanh lịch.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu&nbsp;gi&agrave;y nữ: Th&acirc;n gi&agrave;y: PU; Đế gi&agrave;y: Phylon.</p>\r\n'),
(53, 'Kappa giày sneakers nữ', 7, 1, '699000', 'A2C', '36', '311685W ', 'female', 'SS22', '<p>Gi&agrave;y hơi bị đẹp</p>\r\n'),
(54, 'Kappa giày thể thao nữ', 6, 1, '799000', 'A0A', '36', '33191KW', 'female', 'SS22', '<p>Gi&agrave;y đẹp</p>\r\n'),
(55, 'Ecko Unltd áo khoác gió nữ', 8, 3, '599000', 'LT Blue', '30', 'IF21-07501', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; logo Ecko Unltd. in nổi bật ở g&oacute;c &aacute;o v&agrave; phần bo ở ống tay &aacute;o v&ocirc; c&ugrave;ng độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(56, 'Ecko Unltd áo khoác nữ', 8, 3, '599000', 'Violet', '30', 'IS21-07303', 'female', 'SS21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Kiểu d&aacute;ng thể thao, trẻ trung, c&aacute; t&iacute;nh, bao ngầu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; sự kết hợp giữa phần &aacute;o họa tiết trơn v&agrave; phần &aacute;o họa tiết lạ mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;&Aacute;o kho&aacute;c c&oacute; mũ tr&ugrave;m chống nắng, mưa.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mặc với trang phục n&agrave;o cũng đẹp.</p>\r\n'),
(57, 'Kappa áo khoác thun nữ', 9, 1, '699000', 'AL9', '30', '32157XW ', 'female', 'SS22', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, thể thao, trẻ trung.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; dải Banda chạy dọc hai b&ecirc;n tay &aacute;o v&agrave; logo đặc trưng của Kappa in trước ngực &aacute;i.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp v&agrave; thoải m&aacute;i khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(58, 'Kappa áo khoác thun nữ', 9, 1, '699000', 'A63', '30', '341989W', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;D&aacute;ng &ocirc;m vừa vặn, cho n&agrave;ng th&ecirc;m xinh. Mặc c&ugrave;ng với đồ n&agrave;o cũng đẹp.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế n&oacute;n tr&ugrave;m đầu tiện lợi.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;C&oacute; t&uacute;i trong, dễ d&agrave;ng cất tiền, điện thoại, nước rửa tay...</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Kh&oacute;a k&eacute;o tiện dụng, &ecirc;m &aacute;i, dễ thao t&aacute;c.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Dải logo Kappa hai b&ecirc;n tay &aacute;o tạo ấn tượng thời trang độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: 100% Polyester.</p>\r\n'),
(59, 'Replay quần jeans nữ', 10, 4, '2556000', '07 007', '25', 'WA445D-50C', 'female', 'FW20', '<p>QUẦN JEANS</p>\r\n'),
(60, 'Replay quần jeans nữ', 10, 4, '2276000', '615 010', '28', 'WA696O-69D', 'female', 'SS20', '<p>►&nbsp;Quần jeans d&aacute;ng slim fit, mặc vừa vặn.<br />\r\n► Lựa chọn mặc đẹp của n&agrave;ng c&oacute; gu.<br />\r\n►&nbsp;Chất liệu: 98% Cotton, 2% Spandex.<br />\r\n►&nbsp;Đủ size từ 26-30 cho n&agrave;ng th&ecirc;m xinh.</p>\r\n'),
(61, 'Ecko Unltd quần jeans nữ', 10, 3, '699000', 'Grey', '26', 'IF21-35101', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang trẻ trung v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; phần wash jeans v&ocirc; c&ugrave;ng nổi bật, bụi bặm v&agrave; phong c&aacute;ch.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(62, 'Kappa quần shorts thể thao nữ', 12, 1, '349000', 'A01', '25', '3116ENW', 'female', 'SS21', '<p>►&nbsp;Chất liệu: 80% Cotton, 20% Polyester<br />\r\n►&nbsp;Bộ sưu tập: AUTHENTIC<br />\r\n►&nbsp;Thiết kế: Quần short ống su&ocirc;ng thẳng vải thun da c&aacute; d&agrave;nh cho nữ. T&uacute;i sau với d&ograve;ng chữ in t&ecirc;n thương hiệu Kappa. Logo Omini được th&ecirc;u b&ecirc;n h&ocirc;ng.<br />\r\n►&nbsp;Ph&ugrave; hợp: Ph&ugrave; hợp với đa dạng c&aacute;c hoạt động: đi chơi, du lịch, d&atilde; ngoại, tập gym, chơi thể thao&hellip;<br />\r\n►&nbsp;Nguồn gốc thương hiệu: Italia</p>\r\n'),
(63, 'Kappa đầm nữ', 13, 1, '599000', 'A01', '25', '361535W ', 'female', 'SS22', '<p>V&aacute;y đầm l&agrave; một trong những item kh&ocirc;ng thể thiếu trong tủ đồ của c&aacute;c chị em. Đầm nữ&nbsp;KAPPA 361535W A01 TRẮNG sở hữu thiết kế đơn giản với điểm nhấn ch&iacute;nh nằm ở d&atilde;y banda chạy d&agrave;i ở hai mặc &aacute;o. Em đầm n&agrave;y chắc chắn sẽ l&agrave;m h&agrave;i l&ograve;ng hội chị em bởi thiết kế rộng r&atilde;i, thoải m&aacute;i. Đặc biệt, d&aacute;ng đầm su&ocirc;ng như thế n&agrave;y c&oacute; thể che được khuyết điểm cơ thể so với những mẫu đầm body kh&aacute;c.</p>\r\n\r\n<p>ĐẦM NỮ KAPPA 361535W A01 TRẮNG l&agrave; ph&eacute;p cộng của hai chất liệu Cotton v&agrave; Elastane. Nếu như Cotton nổi tiếng với sự tho&aacute;ng m&aacute;t, thấm h&uacute;t v&agrave; độ mềm mại th&igrave; Elastane lại ghi điểm bởi độ co gi&atilde;n, ngăn ngừa chảy xệ. Ngo&agrave;i ra, Elastane c&ograve;n c&oacute; khả năng chống xước, đảm bảo cho quần &aacute;o của bạn được sử dụng l&acirc;u d&agrave;i nhất c&oacute; thể.</p>\r\n'),
(64, 'Replay đầm nữ', 13, 4, '2395000', '010', '28', 'W9635-54C 89B', 'female', 'SS21', '<p>► Bộ sưu tập: MILITARY<br />\r\n► Chất liệu: 98% Cotton, 2% Elastane. Chất vải thoải m&aacute;i, tho&aacute;ng m&aacute;t v&agrave; độ bền cao.<br />\r\n► Thiết kế: Quần jean c&aacute; t&iacute;nh với tone m&agrave;u trắng. Thiết kế đơn giản nhưng kh&ocirc;ng k&eacute;m trẻ trung năng động.<br />\r\n►&nbsp;Ph&ugrave; hợp: C&aacute;c hoạt động hằng ng&agrave;y như đi học, đi l&agrave;m, đi chơi.<br />\r\n► Nguồn gốc thương hiệu: Italy</p>\r\n'),
(65, 'Kappa váy bé gái 6-14 tuổi', 14, 1, '299000', '899', '25', 'K0BB2QQ85', 'female', 'SS21', '<p>&bull;&nbsp;<strong>Bộ Sưu Tập:</strong>&nbsp;BASIS<br />\r\n&bull;&nbsp;<strong>Chất Liệu:</strong>&nbsp;100% Polyester<br />\r\n&bull;&nbsp;<strong>Thiết Kế:</strong>&nbsp;V&aacute;y Kappa kiểu d&aacute;ng thời trang với thiết kế đặc biệt, năng động. Sự phối trộn m&agrave;u sắc đặc biệt giữa xanh v&agrave; trắng tạo n&ecirc;n sự tươi trẻ. Logo Omini đặc trưng cũng xuất hiện ở ph&iacute;a trước của v&aacute;y.<br />\r\n&bull;&nbsp;<strong>Ph&ugrave; Hợp:</strong>&nbsp;Đi chơi, dạo phố, mặc nh&agrave;.<br />\r\n&bull;&nbsp;<strong>Xuất xứ thương hiệu:</strong>&nbsp;Italia</p>\r\n'),
(66, 'Replay váy', 14, 4, '2396000', '010', '30', 'W9285A-26C 616', 'Select Gender', 'SS20', '<p>V&aacute;y Xinh cho nữ</p>\r\n'),
(67, 'Kappa nón nam/nữ ', 15, 1, '249000', 'XPA', '0', '351B1RW ', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế lưỡi trai che nắng hiệu quả, bật vẻ trẻ trung.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Logo Kappa xuất hiện v&ocirc; c&ugrave;ng nổi bật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;M&agrave;u sắc tươi tắn, dễ phối đồ, l&agrave; phụ kiện kh&ocirc;ng thể thiếu của c&aacute;c t&iacute;n đồ thời trang.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu: 100% cotton.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Freesize.</p>\r\n'),
(68, 'Kappa nón nam/nữ', 6, 1, '199000', 'A4P', '0', '321D2RW', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; logo đặc trưng của Kappa in trước mặt n&oacute;n v&agrave; họa tiết ở phần lưỡi n&oacute;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp v&agrave; trendy khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(69, 'Ecko Unltd nón nam', 15, 3, '199000', 'BL While', '0', 'IF21-62013', 'male', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế n&oacute;n snapback thời trang, trẻ trung, c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Điểm nhấn ch&iacute;nh l&agrave; họa tiết độc đ&aacute;o v&agrave; logo đặc trưng của ECKO UNLTD. th&ecirc;u nổi bật ch&iacute;nh giữa n&oacute;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Diện đẹp v&agrave; trendy khi phối c&ugrave;ng nhiều outfits kh&aacute;c nhau.</p>\r\n'),
(70, 'Kappa túi nam/nữ', 16, 1, '249000', 'D27', '0', '321D8SW ', 'female', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;K&iacute;ch thước (d&agrave;i x rộng x cao):&nbsp;26 cm x 19 cm</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;T&uacute;i đeo ch&eacute;o l&agrave;m từ 100% Polyester.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Logo KAPPA nổi bật, thời trang.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;L&agrave; phụ kiện thời trang hiện đại, trẻ trung cho ch&agrave;ng v&agrave; n&agrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Cất giữ ch&igrave;a kh&oacute;a, v&iacute;, nước rửa tay... v&ocirc; c&ugrave;ng hiệu quả.</p>\r\n'),
(71, 'Kappa túi nam/nữ', 16, 1, '249000', '900', '0', '304RSN0 ', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;K&iacute;ch thước 15 cm x 4 cm x 19 cm (d&agrave;i x rộng x cao).</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế 2 ngăn đ&ocirc;i độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;100% PVC.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Quai đeo rộng 3.5cm</p>\r\n'),
(72, 'Kappa túi nam/nữ ', 16, 1, '249000', 'A0F', '0', '304VX80', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế chất chơi, gi&aacute; rất hời.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Cả thế giới thu b&eacute; lại vừa bằng chiếc t&uacute;i Kappa xinh xắn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;K&iacute;ch thước<strong>:</strong>&nbsp;D&agrave;i 14cm, cao 19cm. Độ rộng d&acirc;y đeo 3cm. Cất giữ điện thoại, nước rửa tay, ch&igrave;a kh&oacute;a... rất tiện</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Chất liệu<strong>:</strong>&nbsp;100% polyester, độ bền cao, chống x&ugrave; vải, chống nhăn hiệu quả.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Dải logo banda chạy dọc ph&iacute;a ngo&agrave;i, thời trang v&agrave; bắt mắt.</p>\r\n'),
(73, 'Kappa ba lô nam/nữ', 17, 1, '399000', 'XPA', '0', '321D8PW', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;K&iacute;ch thước (d&agrave;i x rộng x cao): 34 cm x 23.5 cm x 11.5 cm</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Ba l&ocirc; l&agrave;m từ 100% Polyester.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Logo KAPPA nổi bật, thời trang.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;L&agrave; phụ kiện thời trang hiện đại, trẻ trung cho ch&agrave;ng v&agrave; n&agrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mang đi l&agrave;m, đi chơi hay đi học đều đẹp.</p>\r\n'),
(74, 'Kappa ba lô nam/nữ', 17, 1, '399000', 'AN5', '0', '304USL0 ', 'unisex', 'FW21', '<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Thiết kế chất chơi- Gi&aacute; rất hời.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Mang cả thế giới v&agrave;o chiếc ba l&ocirc; bền đẹp, tiện lợi, thời trang từ Kappa</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;<strong>K&iacute;ch thước:</strong>&nbsp;D&agrave;i 32cm x Rộng 22cm x Cao 47,5cm, rộng r&atilde;i, chứa được nhiều đồ rất tiện lợi</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;<strong>Chất liệu:</strong>&nbsp;100% polyester, độ bền cao, chống x&ugrave; vải, chống nhăn hiệu quả.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.hoang-phuc.com/media/catalog/category/icon-checked.jpg\" style=\"width:16px\" />&nbsp;Dải logo chạy dọc ph&iacute;a ngo&agrave;i, thời trang v&agrave; ấn tượng.</p>\r\n');

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

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `sliderName`, `collectionName`, `description`, `sliderImage`, `status`) VALUES
(1, 'Fall - Winter Collections 2030', 'Summer Collection', 'A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.', 'hero-1.jpg', 1),
(2, 'Fall - Winter Collections 2030', 'Summer Collection', 'A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.', 'hero-2.jpg', 1);

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
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`bannerId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart_guest`
--
ALTER TABLE `tbl_cart_guest`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_comment_article`
--
ALTER TABLE `tbl_comment_article`
  MODIFY `commentArticle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comment_product`
--
ALTER TABLE `tbl_comment_product`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_image_article`
--
ALTER TABLE `tbl_image_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_image_product`
--
ALTER TABLE `tbl_image_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
