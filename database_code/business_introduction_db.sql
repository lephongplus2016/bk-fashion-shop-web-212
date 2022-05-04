-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 12:13 PM
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
(2, 'Săn lùng những đôi sneaker phù hợp với học sinh', '<h2><strong>Gia hạn chương tr&igrave;nh Sự kiện hy hữu đến 8/3</strong></h2>\r\n\r\n<p>Nhằm mang đến cho kh&aacute;ch h&agrave;ng cơ hội mua h&agrave;ng hiệu với gi&aacute; tốt nhất, Ho&agrave;ng Ph&uacute;c thực hiện gia hạn chương tr&igrave;nh&nbsp;đến hết ng&agrave;y 08/3/2022. Chương tr&igrave;nh sẽ &aacute;p dụng cho cả hai h&igrave;nh thức: mua h&agrave;ng online v&agrave; mua trực tiếp.</p>\r\n\r\n<h2><strong>C&aacute;c sản phẩm giảm gi&aacute; chỉ từ 299.000đ</strong></h2>\r\n\r\n<h3><strong>&Aacute;o thun đồng gi&aacute; chỉ từ 299.000đ</strong></h3>\r\n\r\n<p>&Aacute;o thun h&agrave;ng hiệu từ 299.000đ:</p>\r\n', '2022-04-15 21:45:53', 'Chuyên gia sneaker'),
(3, 'Gọi Yoona là \"mỹ nhân không tuổi\" vì qua hơn 10 năm mà da cô vẫn đẹp bất chấp camera thường', '<h2>Kh&ocirc;ng hề c&oacute; dấu hiệu l&atilde;o h&oacute;a, l&agrave;n da của Yoona lu&ocirc;n đẹp ho&agrave;n hảo qua thời gian nhờ những b&iacute; k&iacute;p sau.</h2>\r\n\r\n<p>Sau hơn 10 năm bước ch&acirc;n v&agrave;o l&agrave;ng giải tr&iacute;, Yoona đến giờ vẫn lu&ocirc;n giữ vững danh xưng mỹ nh&acirc;n kh&ocirc;ng tuổi. Kh&ocirc;ng cầu k&igrave; về khoản makeup t&oacute;c tai, Yoona từ trước tới giờ vẫn lu&ocirc;n đơn giản mộc mạc với n&eacute;t đẹp trời ph&uacute; của m&igrave;nh. Nh&igrave;n lại chặng đường 10 năm c&oacute; lẻ của Yoona, người ta nhận ra rằng l&agrave;n da của c&ocirc; kh&ocirc;ng hề l&atilde;o h&oacute;a qua thời gian.&nbsp;</p>\r\n\r\n<p>Ở tuổi 31, Yoona vẫn lu&ocirc;n tự tin khoe gương mặt mộc khi l&ecirc;n s&oacute;ng. Khiến người ta ghen tị muốn &quot;xin v&iacute;a&quot; kh&ocirc;ng ngừng ch&iacute;nh l&agrave; l&agrave;n da căng mịn, trắng s&aacute;ng của Yoona. Kh&ocirc;ng hề c&oacute; dấu hiệu nhăn nheo hay chảy xệ, d&ugrave; xuất th&acirc;n l&agrave; idol - diễn vi&ecirc;n phải trang điểm rất nhiều nhưng Yoona vẫn giữ được l&agrave;n da cực k&igrave; đẹp.</p>\r\n\r\n<p>So s&aacute;nh Yoona của hồi mới debut với b&acirc;y giờ, l&agrave;n da của c&ocirc; quả thực kh&ocirc;ng mấy thay đổi. Từ những năm đ&ocirc;i mươi, d&ugrave; chụp dưới &aacute;nh s&aacute;ng đ&egrave;n flash chiếu thẳng nhưng l&agrave;n da Yoona vẫn đẹp bất chấp, kh&ocirc;ng hề để lộ những khuyết điểm: lỗ ch&acirc;n l&ocirc;ng to, nếp nhăn, th&acirc;m mụn... như nhiều sao nữ kh&aacute;c.</p>\r\n\r\n<p>Vậy Yoona đ&atilde; l&agrave;m c&aacute;ch n&agrave;o để duy tr&igrave; l&agrave;n da đẹp bất chấp qua thời gian? &quot;Ch&igrave;a kh&oacute;a&quot; skincare của c&ocirc; kh&ocirc;ng hề cầu k&igrave; hay đắt đỏ như nhiều người vẫn nghĩ. Yoona đặc biệt ch&uacute; trọng đến việc l&agrave;m sạch da. Ngo&agrave;i tẩy trang v&agrave; rửa mặt, c&ocirc; c&ograve;n sử dụng mặt nạ đất s&eacute;t h&uacute;t đi những chất cặn bẩn ẩn dưới lỗ ch&acirc;n l&ocirc;ng sau khi x&ocirc;ng hơi.&nbsp;&nbsp;</p>\r\n\r\n<p>Như nhiều mỹ nh&acirc;n &quot;l&atilde;o h&oacute;a ngược&quot; kh&aacute;c ở H&agrave;n, Yoona cũng rửa mặt bằng sữa tươi để dưỡng trắng, loại bỏ tế b&agrave;o chết sần s&ugrave;i tr&ecirc;n da. Ngo&agrave;i ra, trước khi apply c&aacute;c sản phẩm skincare, Yoona lu&ocirc;n chườm khăn ấm l&ecirc;n da trong 1 - 2 ph&uacute;t để lỗ ch&acirc;n l&ocirc;ng được mở rộng gi&uacute;p da hấp thụ sản phẩm tốt hơn. V&agrave;o m&ugrave;a h&egrave;, Yoona loại bỏ c&aacute;c sản phẩm dưỡng da gốc dầu ra khỏi chu tr&igrave;nh skincare v&igrave; c&ocirc; cho rằng ch&uacute;ng sẽ g&acirc;y b&iacute;t tắc lỗ ch&acirc;n l&ocirc;ng. Thay v&agrave;o đ&oacute;, c&ocirc; mix 1 - 2 giọt serum với kem dưỡng rồi mới thoa l&ecirc;n da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n</ul>\r\n', '2022-04-24 16:31:07', 'HÀ TRẦN'),
(4, 'Jennie có công lăng xê quần cạp trễ nhưng đây mới là mỹ nhân diện item này đẹp nhất trong lòng netizen', '<h2>Kh&ocirc;ng ngờ c&oacute; ng&agrave;y Jennie chịu &quot;l&eacute;p vế&quot; trước đ&agrave;n em k&eacute;m tuổi.</h2>\r\n\r\n<p><strong>Nếu chăm chỉ update xu hướng thời trang, hẳn bạn đ&atilde; biết quần cạp trễ ch&iacute;nh l&agrave; item được lăng x&ecirc; nhiệt t&igrave;nh nhất nh&igrave; h&egrave; n&agrave;y. Đi đầu trong việc biến mẫu quần k&eacute;n d&aacute;ng n&agrave;y th&agrave;nh trend ch&iacute;nh l&agrave; icon fashion xứ H&agrave;n - Jennie (BLACKPINK). Ngay từ th&aacute;ng 10/2021, Jennie đ&atilde; diện 1 chiếc quần jeans cạp trễ ra s&acirc;n bay v&agrave; khiến item n&agrave;y hot rần rần.</strong></p>\r\n\r\n<p><strong>C&oacute; c&ocirc;ng lăng x&ecirc; quần cạp trễ trước xu thế l&agrave; vậy nhưng Jennie lần n&agrave;y kh&aacute; xui, bởi c&ocirc; kh&ocirc;ng phải người diện mẫu quần n&agrave;y đẹp nhất. Mới đ&acirc;y, netizen đ&atilde; t&igrave;m ra danh t&iacute;nh n&agrave;ng mỹ nh&acirc;n &quot;c&acirc;n trọn&quot; item n&agrave;y nhờ body đẹp đến mức si&ecirc;u thực. C&ocirc; n&agrave;ng n&agrave;y l&agrave; th&agrave;nh vi&ecirc;n nh&oacute;m nhạc gen 4, nổi tiếng sở hữu th&acirc;n h&igrave;nh v&ocirc; thực tựa nh&acirc;n vật truyện tranh.</strong></p>\r\n\r\n<p><strong>Người ấy ch&iacute;nh l&agrave; Yuna (ITZY). Tr&ecirc;n Instagram, Yuna đ&atilde; đăng tải h&igrave;nh ảnh diện quần jeans cạp trễ mix c&ugrave;ng &aacute;o crop top, khoe ra v&ograve;ng eo con kiến khiến d&acirc;n t&igrave;nh đồng loạt &quot;xin v&iacute;a&quot;. Đường cong tr&ecirc;n cơ thể Yuna phải n&oacute;i l&agrave; đẹp tuyệt đỉnh, cộng th&ecirc;m v&oacute;c d&aacute;ng cao r&aacute;o mảnh mai, Yuna đ&atilde; chinh phục trọn vẹn cả set đồ denim.</strong></p>\r\n\r\n<p><strong>Đ&acirc;y kh&ocirc;ng phải lần đầu ti&ecirc;n Yuna g&acirc;y b&atilde;o với th&acirc;n h&igrave;nh tuyệt hảo của m&igrave;nh. Body của n&agrave;ng idol 2k3 trước đ&acirc;y từng nhiều lần trở th&agrave;nh hot topic tr&ecirc;n khắp c&aacute;c diễn đ&agrave;n mạng. Mỗi lần diện quần cạp trễ/ đồ b&oacute; s&aacute;t, Yuna lại khiến d&acirc;n t&igrave;nh n&aacute;o loạn. Jennie lần n&agrave;y gặp phải đối thủ nặng k&iacute; rồi nha!</strong></p>\r\n\r\n<p><strong>Netizen nhiều người so s&aacute;nh Yuna v&agrave; Jennie khi diện quần cạp trễ:</strong></p>\r\n\r\n<p><em>- Jennie g&oacute;p c&ocirc;ng đem quần cạp trễ quay lại th&agrave;nh trend nhưng Yuna mới l&agrave; người diện đẹp hơn.</em></p>\r\n\r\n<p><em>- Body Yuna đỉnh vậy trời, nh&igrave;n m&agrave; m&ecirc;.</em></p>\r\n\r\n<p><em>- Xin v&iacute;a eo thon như Yuna ạ, đẹp đỉnh như thế mặc đồ cạp trễ l&agrave; chuẩn b&agrave;i rồi.</em></p>\r\n\r\n<p><em>- Jennie kh&ocirc;ng &quot;ch&aacute;y&quot; bằng Yuna rồi.</em></p>\r\n\r\n<p><em>- Đồ denim k&eacute;n d&aacute;ng vậy m&agrave; Yuna diện l&ecirc;n nh&igrave;n xịn gh&ecirc;.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:33:55', 'HÀ TRẦN'),
(5, 'Ngoài \"fake\", \"auth\", thì ra còn ti tỉ những khái niệm thời trang mà không phải ai cũng biết', '<h2>C&acirc;u chuyện h&agrave;ng real - h&agrave;ng fake v&agrave; c&aacute;c kh&aacute;i niệm thời trang một lần nữa hot trở lại sau chiếc v&aacute;y tai tiếng của Ngọc Trinh.</h2>\r\n\r\n<p>G&acirc;y x&ocirc;n xao khắp c&aacute;c diễn đ&agrave;n mạng thời gian qua ch&iacute;nh l&agrave; việc Ngọc Trinh bị thương hiệu thời trang nước ngo&agrave;i tố diện v&aacute;y fake. C&acirc;u chuyện&nbsp;<a href=\"https://kenh14.vn/nguoi-noi-tieng-dung-do-fake-nhung-cai-tat-vao-dao-duc-cua-nganh-cong-nghiep-thoi-trang-tai-viet-nam-20220420161445711.chn\" target=\"_blank\">h&agrave;ng real - h&agrave;ng fake, đạo đức của người l&agrave;m nghề</a>&nbsp;v&agrave; c&aacute;c kh&aacute;i niệm thời trang một lần nữa hot trở lại sau chiếc v&aacute;y tai tiếng của Ngọc Trinh. L&agrave; 1 nghệ sĩ c&oacute; sức ảnh hưởng trong cộng đồng, đặc biệt l&agrave; với giới trẻ, Ngọc Trinh liệu đ&atilde; nắm r&otilde; c&aacute;c kh&aacute;i niệm cơ bản n&agrave;y?</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:34:54', 'HÀ TRẦN'),
(6, 'Dân tình than phiền vì Thuỳ Tiên lại bị thợ makeup \"hại\" nhưng thực hư ra sao?', '<h2>H&igrave;nh ảnh đ&ocirc;i m&ocirc;i lạ l&ugrave;ng của Hoa hậu Thuỳ Ti&ecirc;n dấy l&ecirc;n nhiều tranh c&atilde;i.</h2>\r\n\r\n<p>Thuỳ Ti&ecirc;n hậu đăng quang trở th&agrave;nh c&aacute;i t&ecirc;n nhiều lần đi liền với những sự cố thời trang. Khi th&igrave; mặc v&aacute;y sai c&aacute;ch, l&uacute;c lại bị lớp makeup qu&aacute; đậm &quot;phản bội&quot;, nhan sắc Hoa hậu Ho&agrave; b&igrave;nh bỗng trở th&agrave;nh meme để cư d&acirc;n mạng truyền tay nhau. Cũng bởi vậy m&agrave; Thuỳ Ti&ecirc;n trở th&agrave;nh Hoa hậu c&oacute; số lượng ảnh chế nhiều bậc nhất Vbiz.</p>\r\n\r\n<p>Mới đ&acirc;y, loạt h&igrave;nh hậu trường của n&agrave;ng hậu được chia sẻ tr&ecirc;n MXH k&egrave;m theo d&ograve;ng ch&uacute; th&iacute;ch:&nbsp;<em>&quot;Thuỳ Ti&ecirc;n bị makeup &#39;hại&#39; trong video mới&quot;</em>. B&agrave;i đăng đ&atilde; thu h&uacute;t được h&agrave;ng ng&agrave;n lượt tương t&aacute;c, g&acirc;y n&ecirc;n tranh c&atilde;i xung quanh t&iacute;nh thực hư của th&ocirc;ng tin.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:35:50', 'A NEW SUPREME'),
(7, 'Đây là 3 món làm đẹp tuy bình dân nhưng \"không - thể - thiếu\" khi đi du lịch', '<h2>Ngo&agrave;i đồ skincare, bạn cũng cần ch&uacute; trọng mang th&ecirc;m 3 m&oacute;n đồ n&agrave;y.</h2>\r\n\r\n<p>M&ugrave;a H&egrave; đến, m&ugrave;a du lịch về cũng l&agrave; l&uacute;c d&acirc;n t&igrave;nh lại đang n&ocirc; nức l&ecirc;n đồ, đi th&ocirc;i! Vali du lịch đương nhi&ecirc;n sẽ chẳng thể thiếu c&aacute;c thể loại v&aacute;y v&oacute;c điệu đ&agrave; hay đồ skincare, makeup để tranh thủ t&uacute;t t&aacute;t, c&oacute; được nhan sắc xinh đẹp mọi l&uacute;c mọi nơi. Vậy nhưng b&ecirc;n cạnh những m&oacute;n skincare v&agrave; makeup cơ bản, bạn cũng đừng qu&ecirc;n mang theo 3 m&oacute;n l&agrave;m đẹp thần kỳ dưới đ&acirc;y. Đ&acirc;y l&agrave; 3 m&oacute;n đồ cực kỳ hữu &iacute;ch nhưng lại thường bị nhiều chị em qu&ecirc;n bẵng m&agrave; kh&ocirc;ng mang theo.</p>\r\n\r\n<p><strong>1. Gel l&ocirc; hội</strong></p>\r\n\r\n<p>Thời tiết v&agrave;o H&egrave; n&oacute;ng nực, nhiệt độ cao với cường độ &aacute;nh s&aacute;ng mạnh v&agrave; việc di chuyển nhiều khi đi du lịch khiến cho l&agrave;n da của ch&uacute;ng ta trở l&ecirc;n đen sạm, th&ocirc; r&aacute;p hơn thậm ch&iacute; c&ograve;n c&oacute; thể h&igrave;nh th&agrave;nh những vết ch&aacute;y nắng, ửng đỏ, bong tr&oacute;c da v&ocirc; c&ugrave;ng kh&oacute; chịu. Bởi vậy, b&ecirc;n cạnh việc tăng cường sử dụng c&aacute;c loại kem dưỡng ẩm, kem chống nắng th&igrave; bạn cũng đừng qu&ecirc;n sắm gel l&ocirc; hội đa năng. Th&agrave;nh phần gel l&ocirc; hội l&agrave;nh t&iacute;nh, vừa cấp nước cho da, lại l&agrave;m m&aacute;t, xoa dịu vết ch&aacute;y nắng, bỏng r&aacute;t tức th&igrave;.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, gel l&ocirc; hội c&ograve;n l&agrave; sản phẩm cực kỳ đa năng, bạn c&oacute; thể d&ugrave;ng như kem dưỡng, mặt nạ ngủ, lotion dưỡng ẩm, hoặc d&ugrave;ng để dưỡng t&oacute;c, dưỡng m&oacute;ng. Trộn th&ecirc;m 1 ch&uacute;t gel l&ocirc; hội v&agrave;o kem nền sẽ gi&uacute;p lớp makeup bền m&agrave;u, b&oacute;ng bẩy hơn. Ngo&agrave;i ra, gel l&ocirc; hội cũng l&agrave; loại gel b&ocirc;i trơn, l&agrave;m dịu cực tốt khi cạo l&ocirc;ng gi&uacute;p bạn c&oacute; được l&agrave;n da l&aacute;ng mịn, tha hồ diện bikini khoe body H&egrave; n&agrave;y.</p>\r\n\r\n<p><strong>2. S&aacute;p khử m&ugrave;i l&agrave;m s&aacute;ng da</strong></p>\r\n\r\n<p>M&ugrave;a H&egrave; đến cũng l&agrave; l&uacute;c những loại &aacute;o hai d&acirc;y, &aacute;o qu&acirc;y được c&aacute;c chị em trưng dụng nhiệt t&igrave;nh. Ch&iacute;nh v&igrave; vậy, v&ugrave;ng da dưới c&aacute;nh tay cũng l&agrave; bộ phận cần được ch&uacute; trọng. L&uacute;c n&agrave;y, một thanh s&aacute;p khử m&ugrave;i l&agrave;m s&aacute;ng da Deonatulle Soft Stone Double Color Control sẽ l&agrave; sản phẩm đa năng m&agrave; kh&ocirc;ng c&ocirc; n&agrave;ng n&agrave;o c&oacute; thể bỏ qua.</p>\r\n\r\n<p>D&ograve;ng s&aacute;p khử m&ugrave;i n&agrave;y c&oacute; th&agrave;nh phần chứa chiết xuất bột ngọc trai v&agrave; m&agrave;u kho&aacute;ng tự nhi&ecirc;n l&agrave;m mờ th&acirc;m sạm cho da s&aacute;ng mịn đều m&agrave;u, vitamin E dưỡng da ẩm mượt, mịn m&agrave;ng. Đ&aacute; kho&aacute;ng Alum, chiết xuất tr&agrave; xanh v&agrave; O-Cymen-5-Ol hạn chế vi khuẩn g&acirc;y m&ugrave;i, se nhỏ lỗ ch&acirc;n l&ocirc;ng, giảm tiết mồ h&ocirc;i v&agrave; dầu nhờn tr&ecirc;n da hiệu quả. Sản phẩm kh&ocirc;ng chứa cồn, paraben v&agrave; kh&ocirc;ng b&aacute;m m&agrave;u quần &aacute;o. Sử dụng em n&oacute; đều đặn sẽ vừa gi&uacute;p khử m&ugrave;i vừa l&agrave;m s&aacute;ng v&ugrave;ng da dưới c&aacute;nh tay, gi&uacute;p bạn tự tin diện những mẫu &aacute;o gợi cảm.</p>\r\n\r\n<p>Một ưu điểm kh&aacute;c của em s&aacute;p khử m&ugrave;i n&agrave;y l&agrave; thiết kế dạng s&aacute;p kh&ocirc;, mềm, dễ d&agrave;ng thoa l&ecirc;n da một c&aacute;ch nhanh ch&oacute;ng m&agrave; kh&ocirc;ng cần đợi sản phẩm kh&ocirc;/ bay hơi như những d&ograve;ng lăn khử m&ugrave;i dạng nước th&ocirc;ng thường. Với những ng&agrave;y đi du lịch ngắn ngủi th&igrave; đ&acirc;y đ&uacute;ng l&agrave; sản phẩm ch&acirc;n &aacute;i kh&ocirc;ng thể thiếu.</p>\r\n\r\n<p><strong>3. Nước hoa mini Yves Rocher MON ROUGE</strong></p>\r\n\r\n<p>C&oacute; 1 thủ thuật t&acirc;m l&yacute; hay ho đ&oacute; l&agrave;: Khi nhớ về chuyến du lịch đ&atilde; đi, bạn kh&ocirc;ng chỉ nghĩ về phong cảnh tuyệt đẹp, c&aacute;c m&oacute;n ăn ngon m&agrave; c&ograve;n cả m&ugrave;i hương bạn từng ngửi. N&oacute;i ngược lại, m&ugrave;i hương m&agrave; bạn từng d&ugrave;ng cũng sẽ l&agrave;m gợi nhớ lại cảm x&uacute;c, khung cảnh của chuyến du lịch từng đi qua. V&igrave; thế, mỗi chuyến du lịch, bạn rất n&ecirc;n mang theo 1 chai nước hoa nhỏ để hương thơm h&ograve;a quyện với khung cảnh, trở th&agrave;nh k&yacute; ức đẹp mỗi khi nhớ lại. Nếu lười mang 1 chai nước hoa fullsize th&igrave; bạn cũng c&oacute; thể tham khảo th&ecirc;m 1 chai nước hoa mini. Thiết kế nhỏ xinh, tiện dụng, dễ d&agrave;ng mang theo trong t&uacute;i x&aacute;ch v&agrave; t&uacute;t t&aacute;t lại mọi l&uacute;c mọi nơi. Trong th&aacute;ng 4 n&agrave;y từ ng&agrave;y 23/04 - 03/05 Yves Rocher c&ograve;n đang c&oacute; chương tr&igrave;nh ưu đ&atilde;i 30% cho tất cả sản phẩm (trừ phụ kiện) tại website ch&iacute;nh thức v&agrave; hệ thống c&aacute;c cửa h&agrave;ng Yves Rocher.</p>\r\n', '2022-04-24 16:37:12', 'BER'),
(8, 'Levi (GAM): \"Đằng sau những chiến công cực đỉnh là những lần giao tranh hết cỡ với định kiến\"', '<h2>Levi (GAM) sinh ra kh&ocirc;ng nằm tr&ecirc;n vạch xuất ph&aacute;t, m&agrave; mất nhiều năm nỗ lực giao tranh hết cỡ từ s&agrave;n đấu đến định kiến ngo&agrave;i đời, trước khi bất bại 14 trận li&ecirc;n tiếp tại VCS M&ugrave;a Xu&acirc;n 2022.</h2>\r\n\r\n<p><strong>Đằng sau những chiến c&ocirc;ng &quot;bất bại&quot; l&agrave; chuỗi ng&agrave;y thất bại</strong></p>\r\n\r\n<p>GAM Esports đ&atilde; c&oacute; chuỗi chiến c&ocirc;ng cực đỉnh li&ecirc;n tục từ đầu m&ugrave;a giải đến giờ, thắng đủ 14 trận v&agrave; dẫn đầu bảng xếp hạng với 26 điểm. Với th&agrave;nh t&iacute;ch &aacute;p đảo to&agrave;n diện, GAM đ&atilde; xuất sắc nhận về giải thưởng Castrol POWER1 Team suốt nhiều tuần li&ecirc;n tiếp. Levi (Duy Kh&aacute;nh) cũng ch&iacute;nh l&agrave; ứng cử vi&ecirc;n s&aacute;ng gi&aacute; cho giải c&aacute; nh&acirc;n Castrol POWER1 MVP trận chung kết VCS.</p>\r\n\r\n<p>Ở tuổi 25, Levi khiến fan h&acirc;m mộ bởi phong c&aacute;ch đi rừng quyết liệt, dẫn dắt team g&acirc;y &aacute;p lực lớn l&ecirc;n đối phương trước khi ra đ&ograve;n. Song, &iacute;t ai biết, để c&oacute; được những chiến c&ocirc;ng &quot;bất bại&quot; như ng&agrave;y h&ocirc;m nay, &quot;người đi rừng hay nhất VCS&quot; n&agrave;y đ&atilde; trải qua v&ocirc; v&agrave;n thất bại v&agrave; kh&oacute; khăn, kh&ocirc;ng chỉ tr&ecirc;n s&agrave;n đấu ảo m&agrave; cả ở ngo&agrave;i đời thực.</p>\r\n\r\n<p>Levi bắt đầu thi đấu chuy&ecirc;n nghiệp v&agrave;o năm 2015 khi vừa học xong cấp 3 với 21 điểm đại học, trượt ng&ocirc;i trường ước mơ. Thời điểm đ&oacute;, esports chưa ph&aacute;t triển mạnh, Levi đ&atilde; phải tập luyện ở qu&aacute;n net, ở nh&agrave; trọ, nhận lương 2-3 triệu... Bạn b&egrave; gọi anh l&agrave; &quot;kẻ thất bại&quot;, đặc biệt l&agrave; sau khi đội tuyển thi đấu đầu ti&ecirc;n của Levi mang t&ecirc;n SkyRed giải thể khiến anh phải rời đội. Song, Levi vẫn nỗ lực tập luyện 12 tiếng/ng&agrave;y ngay cả khi ốm, ki&ecirc;n tr&igrave; từng ng&agrave;y chờ cơ hội hồi sinh. Suốt 2 năm đầu chơi game, Levi cũng ngh&egrave;o đến nỗi chỉ c&oacute; đủ tiền mua chuột 5USD ở chợ trời H&agrave; Nội đem đi đ&aacute;nh giải quốc tế, nhưng b&ugrave; lại, nỗ lực xương m&aacute;u đ&atilde; gi&uacute;p thần rừng vụt s&aacute;ng với c&uacute; pentakill top 1, đưa GAM đứng đầu bảng A v&ograve;ng Play-in MSI 2017 v&agrave; v&ocirc; địch MDCS M&ugrave;a H&egrave; 2017.</p>\r\n\r\n<p>Chừng ấy năm chơi game c&ograve;n l&agrave; qu&atilde;ng thời gian d&agrave;i Levi vượt l&ecirc;n cấm đo&aacute;n của gia đ&igrave;nh để theo đuổi ước mơ. Anh t&acirc;m sự: &quot;Ng&agrave;y gia nhập GAM cũng l&agrave; lần đầu ti&ecirc;n t&ocirc;i được đi m&aacute;y bay. Trước khi đi, ba n&oacute;i kh&ocirc;ng c&oacute; tương lai, mẹ phản đối rất nhiều. Thậm ch&iacute;, mẹ c&ograve;n kh&oacute;c mỗi lần t&ocirc;i xin đi thi đấu. T&ocirc;i vẫn cố gắng thuyết phục nhưng chưa bao giờ n&oacute;i được hết c&acirc;u. C&acirc;u cửa miệng của t&ocirc;i với mẹ l&agrave;: Con đi S&agrave;i G&ograve;n nh&eacute;. Nhưng chỉ n&oacute;i đến chữ S&agrave;i th&ocirc;i, mẹ đ&atilde; kh&oacute;c&quot;.</p>\r\n\r\n<p>Levi cũng từng nhiều lần thất bại trong việc t&igrave;m kiếm cơ hội thi đấu cho đến khi đầu qu&acirc;n GAM, sau đ&oacute; xuất ngoại chơi cho 100 Thieves Academy (Bắc Mỹ) v&agrave; JD Gaming (Trung Quốc). Chia sẻ về sự nghiệp tương lai, huyền thoại LMHT lạc quan chia sẻ rằng: &quot;T&ocirc;i sẽ thi đấu cho đến l&uacute;c cảm thấy kh&ocirc;ng c&ograve;n đủ sức tập luyện hơn 10 tiếng mỗi ng&agrave;y&quot;.</p>\r\n\r\n<p><strong>Chỉ cần &quot;giao tranh hết cỡ&quot; l&agrave; bạn đ&atilde; bất bại rồi!</strong></p>\r\n\r\n<p>Hiện tại, Levi đang nỗ lực tập luyện 12 tiếng/ng&agrave;y để ẵm th&ecirc;m c&uacute;p Castrol POWER1 MVP v&agrave; S cho bản th&acirc;n, cũng như đưa GAM l&ecirc;n bục vinh quang Castrol POWER1 Team trong trận cuối ng&agrave;y 24/4 tới. Vị thủ lĩnh tiết lộ, ch&iacute;nh tinh thần &quot;giao tranh hết cỡ, kh&ocirc;ng bỏ lỡ&quot; của VCS M&ugrave;a Xu&acirc;n 2022 v&agrave; Castrol POWER1 l&agrave; động lực để anh đi đến đ&iacute;ch th&agrave;nh c&ocirc;ng.</p>\r\n\r\n<p>&quot;Chỉ cần giao tranh hết cỡ l&agrave; bạn đ&atilde;&hellip; bất bại rồi! Game thủ l&agrave; một nghề kh&ocirc;ng dễ d&agrave;ng, nhưng nếu đam m&ecirc; h&atilde;y cứ giao tranh hết cỡ với đối thủ tr&ecirc;n s&agrave;n đấu, giao tranh với thị phi v&agrave; nghi hoặc nơi c&aacute;nh g&agrave;, giao tranh với định kiến x&atilde; hội ngay cả khi đ&atilde; về nh&agrave;&quot;, Levi nhắn nhủ tới những game thủ trẻ đang theo đuổi ước mơ thi đấu chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>Mỗi trận đấu, Levi đều chiến đấu với hiệu suất cực đỉnh, để rồi thu về những trải nghiệm cực chất v&agrave; những b&agrave;i học mới cho bản th&acirc;n. Suốt gần 10 năm dồn hết t&acirc;m tr&iacute; chơi Li&ecirc;n Minh Huyền Thoại, anh lu&ocirc;n tin rằng chức v&ocirc; địch chắc chắn sẽ đến cho những ai cố gắng kh&ocirc;ng ngừng nghỉ, chỉ l&agrave; sớm hay muộn m&agrave; th&ocirc;i.</p>\r\n\r\n<p>&quot;Giao tranh hết cỡ, kh&ocirc;ng bỏ lỡ để lập chiến c&ocirc;ng cực đỉnh&quot; cũng l&agrave; th&ocirc;ng điệp truyền cảm hứng m&agrave; nh&agrave; t&agrave;i trợ Castrol POWER1 gửi đến c&aacute;c thế hệ game thủ th&ocirc;ng qua nhiều giải đấu Esports. Nếu bỏ lỡ cơ hội năm ấy, sẽ kh&ocirc;ng c&oacute; Levi hay GAM lừng lẫy h&ocirc;m nay.</p>\r\n\r\n<p>Để ủng hộ cho GAM v&agrave; c&aacute;c đội chơi kh&aacute;c, c&aacute;c bạn trẻ y&ecirc;u game đừng bỏ lỡ c&aacute;c hoạt động trải nghiệm cực chất b&ecirc;n lề VCS M&ugrave;a Xu&acirc;n 2022. Dự đo&aacute;n đội chiến thắng c&ugrave;ng Anh Ba POWER1 - nh&acirc;n vật AI ti&ecirc;n tri b&aacute;ch ph&aacute;t b&aacute;ch tr&uacute;ng tại&nbsp;<a href=\"https://castrol.lienminh.garena.vn/\" target=\"_blank\">castrol.lienminh.garena.vn</a>&nbsp;để nhận về moto Honda CB150R; hoặc giải đố Castrol Virtual Bikepoint tại&nbsp;<a href=\"https://esports.com.vn/castrolbikepoint\" target=\"_blank\">esports.com.vn/castrolbikepoint</a>&nbsp;để được nhận v&ocirc; v&agrave;n thẻ game với nhiều mệnh gi&aacute; hấp dẫn từ 50-100-200 ngh&igrave;n đồng v&agrave; sản phẩm nhớt Castrol POWER1 Ultimate mang hiệu suất cực đỉnh đến cho xế y&ecirc;u hoạt động cực &ecirc;m, cực bền bỉ tr&ecirc;n mọi h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute;.</p>\r\n', '2022-04-24 16:37:56', 'QUANG VŨ'),
(9, 'Độ Mixi gặp áp lực vì số tiền ủng hộ làm từ thiện quá lớn?', '<h2>Nam streamer chia sẻ rằng chưa c&oacute; năm n&agrave;o số tiền donate l&agrave;m từ thiện lại nhiều như năm vừa qua.</h2>\r\n\r\n<p>L&agrave; nam streamer nổi tiếng nhất c&ugrave;ng lượng fan h&ugrave;ng hậu, Độ Mixi cũng được biết đến l&agrave; l&aacute; cờ đầu trong giới streamer trong c&ocirc;ng t&aacute;c thiện nguyện. Mỗi năm, &quot;tộc trưởng&quot; đều d&agrave;nh to&agrave;n bộ số tiền donate của th&aacute;ng 12 từ kh&aacute;n giả của m&igrave;nh để ủng hộ cho những ho&agrave;n cảnh kh&oacute; khăn, x&acirc;y cầu, x&acirc;y trường cho trẻ em v&ugrave;ng cao...</p>\r\n\r\n<p>Tr&ecirc;n s&oacute;ng livestream ng&agrave;y 23/4, Độ Mixi đ&atilde; chia sẻ những điểm mới nhất trong c&aacute;c hoạt động thiện nguyện tiếp theo. Nam streamer cho biết anh gặp kh&ocirc;ng &iacute;t &aacute;p lực khi số tiền donate kỷ lục trong th&aacute;ng 12 năm ngo&aacute;i l&ecirc;n đến 1,5 tỷ đồng, gấp nhiều lần so với những năm trước. Điều n&agrave;y g&acirc;y kh&oacute; khăn trong vấn đề giải ng&acirc;n.</p>\r\n\r\n<p>Độ Mixi cũng cho biết anh sẽ minh bạch tất cả hoạt động thiện nguyện từ số tiền donate của kh&aacute;n giả trong một buổi livestream ri&ecirc;ng khi c&oacute; th&ocirc;ng b&aacute;o, b&aacute;o c&aacute;o cụ thể từ đơn vị phối hợp.</p>\r\n\r\n<p>Ngo&agrave;i ra, nam streamer cũng cho biết đ&atilde; đến trao đổi v&agrave; l&agrave;m việc c&ugrave;ng Đo&agrave;n TNCS Hồ Ch&iacute; Minh trường ĐH Kinh tế Quốc d&acirc;n về việc phối hợp tổ chức x&acirc;y dựng dự &aacute;n C&ocirc;ng tr&igrave;nh Thanh ni&ecirc;n sắp tới sẽ diễn ra trong năm nay.</p>\r\n\r\n<p>Năm ngo&aacute;i, Bộ tộc MixiGaming v&agrave; Đo&agrave;n TNCS Hồ Ch&iacute; Minh trường ĐH Kinh tế Quốc d&acirc;n đ&atilde; phối hợp th&agrave;nh c&ocirc;ng x&acirc;y dựng&nbsp;C&ocirc;ng tr&igrave;nh thanh ni&ecirc;n Điểm trường tiểu học Nậm Vạc 2, x&atilde; Nậm Ban, huyện Nậm Nh&ugrave;n, tỉnh Lai Ch&acirc;u. Th&aacute;ng&nbsp;1/2022, c&ocirc;ng tr&igrave;nh n&agrave;y đ&atilde; ch&iacute;nh thức kh&aacute;nh th&agrave;nh v&agrave; bắt đầu đi v&agrave;o hoạt động.</p>\r\n', '2022-04-24 16:39:10', 'KENTT'),
(10, 'Acer Aspire 7: Chiếc laptop đa năng đáng lựa chọn trong tầm giá 20 triệu', '<h2>Acer Aspire 7 lu&ocirc;n để lại cho người d&ugrave;ng nhiều thiện cảm nhờ thiết kế đẹp, tối giản v&agrave; cấu h&igrave;nh tốt.</h2>\r\n\r\n<p>Ở tầm gi&aacute; tr&ecirc;n dưới 20 triệu đồng, người d&ugrave;ng sẽ kh&ocirc;ng kh&oacute; để chọn cho m&igrave;nh một chiếc m&aacute;y t&iacute;nh x&aacute;ch tay. Tuy nhi&ecirc;n, để sở hữu chiếc laptop c&oacute; thể đ&aacute;p ứng mọi t&aacute;c vụ th&igrave; kh&ocirc;ng phải sản phẩm n&agrave;o cũng c&oacute; thể l&agrave;m được. Với nhu cầu đ&oacute;, Acer Aspire 7 l&agrave; sự lựa chọn tuyệt vời d&agrave;nh cho hầu hết c&aacute;c đối tượng người d&ugrave;ng.</p>\r\n\r\n<p><strong>Cấu h&igrave;nh tốt, đủ sức &quot;c&acirc;n mọi nhu cầu&quot;</strong></p>\r\n\r\n<p>Điều đầu ti&ecirc;n m&agrave; rất nhiều người d&ugrave;ng quyết định xuống tiền cho chiếc laptop ch&iacute;nh l&agrave; cấu h&igrave;nh. Kh&ocirc;ng chỉ c&oacute; c&aacute;c game thủ mới cần chiếc m&aacute;y t&iacute;nh c&oacute; sức mạnh phần cứng tốt, d&acirc;n văn ph&ograve;ng hay những nh&agrave; s&aacute;ng tạo nội dung cũng cần c&oacute; &quot;người đồng h&agrave;nh&quot; đủ sức l&agrave;m mọi thứ một c&aacute;ch mượt m&agrave;, ổn định.</p>\r\n\r\n<p>Acer Aspire 7 được trang bị vi xử l&yacute; mạnh mẽ như AMD Ryzen 5 5500U hay Intel Core i5 10300H, mức RAM tối thiểu được trang bị l&agrave; 8GB (c&oacute; thể n&acirc;ng cấp l&ecirc;n tới 32GB) v&agrave; card đồ họa rời GTX 1650. Với mức gi&aacute; dưới 20 triệu, c&oacute; lẽ t&igrave;m được một đối thủ c&oacute; thể so b&igrave; cấu h&igrave;nh với Aspire 7 l&agrave; rất kh&oacute;.</p>\r\n\r\n<p>C&aacute;c t&aacute;c vụ văn ph&ograve;ng, học tập, l&agrave;m b&aacute;o c&aacute;o, đọc file Excel cả ngh&igrave;n d&ograve;ng đều c&oacute; thể l&agrave;m được tr&ecirc;n d&ograve;ng m&aacute;y n&agrave;y. N&oacute;i về khả năng giải tr&iacute; của m&aacute;y, v&igrave; được định hướng l&agrave; mẫu laptop gaming gi&aacute; tốt n&ecirc;n Aspire 7 c&oacute; thể &quot;c&acirc;n&quot; hết c&aacute;c thể loại game tr&ecirc;n thị trường. M&aacute;y c&oacute; thể chơi mượt m&agrave; c&aacute;c tựa game eSports h&agrave;ng đầu như Valorant, CS:GO, LMHT hay DOTA2&hellip;</p>\r\n\r\n<p><strong>Thiết kế h&agrave;i ho&agrave;, dễ l&agrave;m quen</strong></p>\r\n\r\n<p>Đối với rất nhiều người, vẻ đẹp thực sự nằm ở sự đơn giản, tinh tế, đ&oacute; cũng l&agrave; yếu tố thiếu tr&ecirc;n rất nhiều mẫu laptop gaming. Phần lớn c&aacute;c mẫu laptop chuy&ecirc;n để chơi game được h&atilde;ng trang bị ng&ocirc;n ngữ thiết kế c&oacute; phần hơi cồng kềnh v&agrave; hầm hố. Aspire 7 th&igrave; kh&ocirc;ng như vậy. Tuy được định hướng l&agrave; d&ograve;ng laptop gaming nhưng sự đơn giản v&agrave; tinh tế vẫn hiện diện tr&ecirc;n mẫu m&aacute;y n&agrave;y.</p>\r\n\r\n<p>Phần mặt tr&ecirc;n c&ugrave;ng của Aspire 7 ho&agrave;n to&agrave;n phẳng, kh&ocirc;ng c&oacute; c&aacute;c đường n&eacute;t cứng c&aacute;p l&agrave; một trong những điểm l&agrave;m rất nhiều người kết chiếc m&aacute;y n&agrave;y. Đặc biệt, với c&aacute;c d&acirc;n văn ph&ograve;ng khi đi gặp đối t&aacute;c, sử dụng một chiếc laptop c&oacute; ng&ocirc;n ngữ thiết kế sang trọng v&agrave; đơn giản vẫn &quot;ăn tiền&quot; hơn l&agrave; mang theo chiếc m&aacute;y t&iacute;nh hầm hố.</p>\r\n\r\n<p>N&oacute;i t&oacute;m lại, thiết kế của Aspire 7 ph&ugrave; hợp cho rất nhiều nhu cầu sử dụng d&ugrave; l&agrave; ai đi chăng nữa.</p>\r\n\r\n<p><strong>Nhiều c&ocirc;ng nghệ phục vụ cho qu&aacute; tr&igrave;nh sử dụng</strong></p>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; cấu h&igrave;nh tốt, thiết kế đẹp v&agrave; tinh tế, Aspire 7 cũng được trang bị rất nhiều những c&ocirc;ng nghệ phục vụ tốt hơn cho qu&aacute; tr&igrave;nh sử dụng. Đầu ti&ecirc;n, m&agrave;n h&igrave;nh IPS được trang bị c&ocirc;ng nghệ chống ch&oacute;i Anti Glare, lọc &aacute;nh s&aacute;ng xanh Acer ComfyView để gi&uacute;p bảo vệ tốt cho mắt người d&ugrave;ng.</p>\r\n\r\n<p>Ngo&agrave;i trải nghiệm về thị gi&aacute;c tốt, h&atilde;ng cũng v&ocirc; c&ugrave;ng ch&uacute; trọng v&agrave;o chất lượng &acirc;m thanh tr&ecirc;n Aspire 7. M&aacute;y được trang bị c&ocirc;ng nghệ Acer TrueHarmony mang đến chất &acirc;m ch&acirc;n thực, trong trẻo v&agrave; mạnh mẽ, cho trải nghiệm giải tr&iacute; tuyệt vời ngay tr&ecirc;n&nbsp;<a href=\"https://www.dienmayxanh.com/laptop\" target=\"_blank\">l</a>aptop. Đối với những người thường xuy&ecirc;n phải mang v&aacute;c laptop đi lại khắp nơi th&igrave; cũng kh&ocirc;ng phải lo lắng qu&aacute; nhiều. Aspire 7 chỉ c&oacute; c&acirc;n nặng 2,1 kg gi&uacute;p người d&ugrave;ng mang đi dễ d&agrave;ng khi di chuyển.</p>\r\n\r\n<p>Chưa kể đến chế độ Bảo h&agrave;nh nhanh 3S1 của Acer, bảo h&agrave;nh tối đa trong v&ograve;ng 3 ng&agrave;y, kể cả T7 v&agrave; CN, qu&aacute; 3 ng&agrave;y 1 đổi 1 cũng sẽ được &aacute;p dụng tr&ecirc;n sản phẩm n&agrave;y. Ch&iacute;nh s&aacute;ch bảo h&agrave;nh đặc biệt tốt như 3S1 sẽ khiến kh&aacute;ch h&agrave;ng an t&acirc;m hơn khi chọn Aspire 7 l&agrave;m người bạn đồng h&agrave;nh.</p>\r\n', '2022-04-24 16:39:57', 'QUANG VŨ'),
(11, 'Diện đồ mỏng khi trời nóng, chọn nội y thế nào để khỏi hớ hênh mất điểm?', '<h2>Ăn mặc thế n&agrave;o để vừa sexy vừa kh&ocirc;ng lộ nội y l&agrave; chủ đề được chị em quan t&acirc;m khi m&ugrave;a h&egrave; đang g&otilde; cửa.</h2>\r\n\r\n<p>Chẳng cần phải theo d&otilde;i dự b&aacute;o thời tiết, người d&acirc;n cả nước cũng biết trời đang bắt đầu cựa m&igrave;nh sang m&ugrave;a n&oacute;ng. Chị em b&egrave;n rỉ tai nhau cất hết &aacute;o len, &aacute;o kho&aacute;c đại h&agrave;n, quần giữ nhiệt... v&agrave;o đ&aacute;y tủ để dọn chỗ cho loạt đồ h&egrave; vừa mỏng vừa m&aacute;t. Dẫu biết nhu cầu trang phục cho m&ugrave;a h&egrave; l&agrave; tho&aacute;ng kh&iacute;, m&aacute;t mẻ, nhưng chị em chớ n&ecirc;n chọn những item mỏng qu&aacute;, kẻo nội y thi nhau &quot;lố lồ lộ&quot; cả ra đấy!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:40:40', 'CHÚ CÁ CHÊ X CHIM VÀNH KHEN'),
(12, 'Bác sĩ chống lão hóa buổi sáng với 4 bước chuẩn không cần chỉnh', '<h2>Muốn chăm s&oacute;c da nhanh gọn, hiệu quả v&agrave;o buổi s&aacute;ng, chị em h&atilde;y tham khảo b&aacute;c sĩ.</h2>\r\n\r\n<p>B&aacute;c sĩ da liễu l&agrave; những người hiểu r&otilde; nhất tầm quan trọng của quy tr&igrave;nh chăm da buổi s&aacute;ng. C&aacute;c bước skincare mở đầu ng&agrave;y mới n&agrave;y sẽ gi&uacute;p bảo vệ l&agrave;n da của chị em từ s&aacute;ng đến tối, kh&ocirc;ng bị tổn thương bởi c&aacute;c yếu tố g&acirc;y l&atilde;o h&oacute;a từ m&ocirc;i trường. Những tưởng, quy tr&igrave;nh chống l&atilde;o h&oacute;a buổi s&aacute;ng của b&aacute;c sĩ sẽ rất phức tạp nhưng h&oacute;a ra, họ chỉ skincare tối giản với 4 bước quan trọng. Học hỏi 4 gạch đầu d&ograve;ng trong quy tr&igrave;nh skincare s&aacute;ng của b&aacute;c sĩ, chị em sẽ c&oacute; được l&agrave;n da khỏe đẹp, trẻ m&atilde;i kh&ocirc;ng gi&agrave;.</p>\r\n\r\n<h3>Rửa mặt với sản phẩm dịu nhẹ</h3>\r\n\r\n<p>Quy tr&igrave;nh s&aacute;ng của c&aacute;c b&aacute;c sĩ da liễu kh&ocirc;ng thể thiếu bước l&agrave;m sạch da. Sau một đ&ecirc;m d&agrave;i, l&agrave;n da của chị em vẫn sẽ tiết ra dầu thừa, mồ h&ocirc;i v&agrave; c&ograve;n tiếp x&uacute;c với vi khuẩn tr&ecirc;n chăn, ga v&agrave; gối. Do đ&oacute;, l&agrave;m sạch da l&agrave; rất cần thiết để gi&uacute;p da th&ocirc;ng tho&aacute;ng, kh&ocirc;ng bị mụn, đồng thời hấp thu tốt hơn dưỡng chất từ c&aacute;c bước skincare kế tiếp. Sữa rửa mặt d&ugrave;ng cho quy tr&igrave;nh s&aacute;ng cần c&oacute; c&ocirc;ng thức dịu nhẹ, như vậy l&agrave;n da sẽ kh&ocirc;ng bị b&agrave;o m&ograve;n, lu&ocirc;n khỏe mạnh.</p>\r\n\r\n<h3>B&ocirc;i serum vitamin C</h3>\r\n\r\n<p>Theo b&aacute;c sĩ Whitney Bowe tại New York:&nbsp;<em>&quot;T&ocirc;i c&oacute; xu hướng phụ thuộc hơn v&agrave;o c&aacute;c sản phẩm chống oxy h&oacute;a trong m&ugrave;a h&egrave;. V&agrave; kh&ocirc;ng chỉ trong quy tr&igrave;nh skincare, t&ocirc;i c&ograve;n bổ sung chất chống oxy h&oacute;a th&ocirc;ng qua chế độ ăn uống nữa&quot;</em>. C&aacute;c chất chống oxy h&oacute;a đ&oacute;ng vai tr&ograve; quan trọng trong việc bảo vệ da. Ch&uacute;ng sẽ v&ocirc; hiệu sự tấn c&ocirc;ng của c&aacute;c gốc tự do - nguy&ecirc;n nh&acirc;n g&acirc;y l&atilde;o h&oacute;a. Chất chống oxy h&oacute;a c&ograve;n gi&uacute;p cải thiện, l&agrave;m s&aacute;ng da v&agrave; tăng sinh collagen. V&agrave; với từng ấy c&ocirc;ng dụng, sản phẩm chứa chất chống oxy h&oacute;a, m&agrave; phổ biến nhất l&agrave; serum vitamin C lu&ocirc;n xuất hiện trong quy tr&igrave;nh skincare s&aacute;ng của b&aacute;c sĩ da liễu.</p>\r\n\r\n<h3>Kem dưỡng ẩm mỏng nhẹ</h3>\r\n\r\n<p>L&agrave;n da lu&ocirc;n cần bổ sung đủ độ ẩm, ngay cả trong m&ugrave;a h&egrave;. Nếu để da kh&ocirc; h&eacute;o, mất nước, l&atilde;o h&oacute;a sẽ c&agrave;ng đến sớm. V&agrave;o m&ugrave;a h&egrave;, b&aacute;c sĩ Claire Chang tại New York ưu ti&ecirc;n kem dưỡng ẩm mỏng nhẹ, c&oacute; c&ocirc;ng dụng l&agrave;m m&aacute;t da. Loại kem dưỡng ẩm mỏng nhẹ sẽ kh&ocirc;ng g&acirc;y b&iacute;t tắc lỗ ch&acirc;n l&ocirc;ng hay khiến da bị nặng nề, nhớp nh&aacute;p. V&agrave; c&aacute;c đặc điểm n&agrave;y rất cần thiết cho quy tr&igrave;nh skincare m&ugrave;a h&egrave;.</p>\r\n\r\n<h3>B&ocirc;i kem chống nắng quang phổ rộng</h3>\r\n\r\n<p>Kem chống nắng l&agrave; sản phẩm hiển nhi&ecirc;n phải c&oacute; mặt trong quy tr&igrave;nh skincare s&aacute;ng, kh&ocirc;ng kể m&ugrave;a đ&ocirc;ng hay m&ugrave;a h&egrave;, trời c&oacute; nắng hay mưa gi&oacute;, &acirc;m u. Kem chống nắng được b&aacute;c sĩ tin d&ugrave;ng lu&ocirc;n phải đ&aacute;p ứng 2 điều kiện, đ&oacute; l&agrave; chống được cả tia UVA lẫn UVB, v&agrave; c&oacute; chỉ số tối thiểu SPF 30.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:41:23', 'OLIVE, THEO PHÁP LUẬT VÀ BẠN ĐỌC'),
(13, 'Hệ thống lỏng lưu trữ năng lượng mặt trời', '<p>C&aacute;c nh&agrave; nghi&ecirc;n cứu ở Đại học C&ocirc;ng nghệ Chalmers thiết kế một hệ thống năng lượng để lưu trữ năng lượng mặt trời ở dạng lỏng trong thời gian l&ecirc;n tới 18 năm.</p>\r\n\r\n<p>Bằng c&aacute;ch nối với m&aacute;y ph&aacute;t nhiệt điện si&ecirc;u mỏng, nh&oacute;m nghi&ecirc;n cứu chứng minh hệ thống c&oacute; thể sản xuất điện, đặt nền tảng cho những thiết bị điện tử sạc sử dụng năng lượng mặt trời theo nhu cầu. Mang t&ecirc;n Hệ thống nhiệt mặt trời ph&acirc;n tử (MOST), c&ocirc;ng nghệ được ph&aacute;t triển trong hơn một thập kỷ n&agrave;y tập trung v&agrave;o một ph&acirc;n tử thiết kế đặc biệt gồm carbon, hydro v&agrave; nitơ. Khi tiếp x&uacute;c với &aacute;nh s&aacute;ng Mặt Trời, nguy&ecirc;n tử b&ecirc;n trong ph&acirc;n tử tự sắp xếp lại để thay đổi h&igrave;nh d&aacute;ng của n&oacute; v&agrave; biến n&oacute; th&agrave;nh đồng ph&acirc;n (những hợp chất hữu cơ c&oacute; c&ugrave;ng c&ocirc;ng thức ph&acirc;n tử) gi&agrave;u năng lượng, c&oacute; thể lưu trữ ở dạng lỏng.</p>\r\n\r\n<p>Năng lượng thu thập bởi hệ thống MOST c&oacute; thể lưu trữ ở trạng th&aacute;i lỏng trong thời gian l&ecirc;n tới 18 năm trước khi một chất x&uacute;c t&aacute;c chuyển ph&acirc;n tử về h&igrave;nh d&aacute;ng ban đầu v&agrave; giải ph&oacute;ng năng lượng dưới dạng nhiệt. Nh&oacute;m nghi&ecirc;n cứu ở Chalmers đang cộng t&aacute;c với c&aacute;c nh&agrave; khoa học tại Đại học Giao th&ocirc;ng Thượng Hải. Họ sử dụng một m&aacute;y ph&aacute;t nhiệt điện nhỏ gọn để biến nhiệt lượng đ&oacute; th&agrave;nh điện. Kết quả nghi&ecirc;n cứu được c&ocirc;ng bố tr&ecirc;n tạp ch&iacute;&nbsp;<em>Cell Reports Physical Science.</em></p>\r\n\r\n<p>&quot;M&aacute;y ph&aacute;t l&agrave; một con chip si&ecirc;u mỏng c&oacute; thể t&iacute;ch hợp tr&ecirc;n thiết bị điện tử như tai nghe chụp đầu, đồng hồ th&ocirc;ng minh v&agrave; điện thoại&quot;, nh&agrave; nghi&ecirc;n cứu Zhihang Wang đến từ Đại học C&ocirc;ng nghệ Chalmers, cho biết. &quot;T&iacute;nh đến nay, ch&uacute;ng t&ocirc;i mới chỉ sản xuất lượng điện nhỏ, nhưng kết quả mới cho thấy thiết kế thực sự hoạt động. Kết quả rất hứa hẹn&quot;.</p>\r\n\r\n<p>C&ocirc;ng suất hiện nay của m&ocirc; h&igrave;nh chứng minh kh&aacute;i niệm l&agrave; 0,1 nW (một watt bằng một tỷ nanowatt), c&oacute; vẻ kh&aacute; nhỏ nhưng c&aacute;c nh&agrave; khoa học nhận thấy tiềm năng lớn của hệ thống MOST, gi&uacute;p giải quyết t&iacute;nh chất gi&aacute;n đoạn của năng lượng mặt trời bằng c&aacute;ch lưu trữ nhiều th&aacute;ng hoặc nhiều năm v&agrave; sử dụng khi cần.</p>\r\n\r\n<p>Theo trưởng nh&oacute;m nghi&ecirc;n cứu Kasper Moth-Poulsen, gi&aacute;o sư khoa H&oacute;a học v&agrave; Kỹ thuật h&oacute;a học ở Đại học C&ocirc;ng nghệ Chalmers, đ&acirc;y l&agrave; một c&aacute;ch mới để sản xuất điện từ năng lượng mặt trời. Ch&uacute;ng ta c&oacute; thể sử dụng năng lượng mặt trời để sản xuất điện bất kể thời tiết, thời gian trong ng&agrave;y, m&ugrave;a hoặc vị tr&iacute; địa l&yacute;. MOST l&agrave; hệ thống kh&eacute;p k&iacute;n c&oacute; thể hoạt động m&agrave; kh&ocirc;ng thải kh&iacute; carbon dioxide.</p>\r\n\r\n<p>Sau khi chứng minh hệ thống c&oacute; thể sản xuất điện, nh&oacute;m nghi&ecirc;n cứu đang tập trung v&agrave;o cải tiến hiệu suất, đồng thời ph&aacute;t triển giải ph&aacute;p thương mại c&oacute; chi ph&iacute; phải chăng để sạc thiết bị điện v&agrave; sưởi ấm trong nh&agrave;.</p>\r\n', '2022-04-24 16:42:06', 'An Khang'),
(14, 'Tính thẩm mỹ của các mẫu đồng hồ Vacheron Constantin mới', '<p>Vacheron Constantin mang tới triển l&atilde;m Watches &amp; Wonders 2022 c&aacute;c d&ograve;ng cơ chế phức tạp v&agrave; thẩm mỹ như Traditionnelle, Patrimony, Overseas, Historiques 222, Les Cabinotiers...</p>\r\n\r\n<p>Tại triển l&atilde;m Watches and Wonders ở Geneva, Thụy Sĩ (từ ng&agrave;y 30/3 đến 5/4), ngo&agrave;i những cỗ m&aacute;y phức tạp, Vacheron Constantin c&ograve;n giới thiệu loạt thiết kế c&oacute; cấu tr&uacute;c tinh tế, l&agrave;m nổi bật chủ đề &quot;The Anatomy of Beauty&quot; (to&agrave;n thư về c&aacute;i đẹp).<br />\r\nBộ sưu tập Historiques vinh danh lịch sử chế t&aacute;c của h&atilde;ng, trong đ&oacute; mẫu&nbsp;<strong>222</strong>&nbsp;- phi&ecirc;n bản t&aacute;i hiện chiếc &quot;Jumbo&quot; năm 1977 - ứng dụng bộ vỏ 37 mm l&agrave;m từ v&agrave;ng 18K 3N v&agrave; cỗ m&aacute;y Calibre 2455/2 với con lắc được thiết kế ri&ecirc;ng.</p>\r\n\r\n<p>D&ograve;ng&nbsp;<strong>Traditionnelle Perpetual Calendar Chronograph</strong>&nbsp;trang bị bộ m&aacute;y in-house Calibre 1142 QP l&ecirc;n d&acirc;y thủ c&ocirc;ng, mặt số m&agrave;u c&aacute; hồi độc quyền v&agrave; bộ vỏ bằng bạch kim. Thiết kế n&agrave;y t&ocirc;n vinh gi&aacute; trị nguy&ecirc;n bản từ thời ho&agrave;ng kim của ng&agrave;nh chế t&aacute;c đồng hồ thủ c&ocirc;ng.</p>\r\n\r\n<p>Vacheron Constantin giới thiệu d&ograve;ng&nbsp;<strong>Traditionnelle Perpetual Calendar</strong>&nbsp;d&agrave;nh cho ph&aacute;i đẹp, t&iacute;ch hợp chức năng lịch vạn ni&ecirc;n với hai gam hồng v&agrave; xanh phấn.</p>\r\n\r\n<p>H&atilde;ng nỗ lực đ&aacute;p ứng nhu cầu sở hữu chiếc đồng hồ cơ phức tạp của nữ giới, m&agrave; vẫn đ&aacute;p ứng được c&aacute;c ti&ecirc;u ch&iacute; thẩm mỹ khắt khe. Bộ m&aacute;y in-house Calibre 1120 QP c&oacute; độ d&agrave;y 4,05 mm mang đến sức sống cho chiếc đồng hồ kiểu d&aacute;ng thanh lịch.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Vacheron Constantin cũng giới thiệu những chiếc&nbsp;<strong>Patrimony</strong>&nbsp;l&ecirc;n c&oacute;t tự động mới, trang ho&agrave;ng những vi&ecirc;n kim cương, hợp với qu&yacute; c&ocirc; hiện đại. Thiết kế c&oacute; phong c&aacute;ch tối giản nhưng vẫn truyền tải những gi&aacute; trị m&agrave; thương hiệu gửi gắm.</p>\r\n\r\n<p>Mẫu&nbsp;<strong>Overseas</strong>&nbsp;t&iacute;ch hợp t&iacute;nh năng Tourbillon v&agrave; thiết kế lộ cơ, khoe vẻ đẹp của cỗ m&aacute;y Calibre 2160 SQ - chi tiết c&oacute; thể giảm tới 20% khối lượng. Lần đầu ứng dụng Titan cấp độ 5 v&agrave;o chế t&aacute;c đồng hồ, Vacheron Constantin hướng tới sự bền bỉ cả trong v&agrave; ngo&agrave;i bộ m&aacute;y - từ vỏ, d&acirc;y đeo đến n&uacute;m điều chỉnh.</p>\r\n\r\n<p>Lịch tuần trăng v&agrave; lịch vạn ni&ecirc;n - hai chức năng phức tạp - c&ugrave;ng xuất hiện trong mẫu Overseas. Đồng hồ g&acirc;y ch&uacute; &yacute; tại triển l&atilde;m Watches &amp; Wonders 2022 v&igrave; si&ecirc;u mỏng, chỉ d&agrave;y 8,1 mm t&iacute;nh cả vỏ.</p>\r\n\r\n<p>Tại sự kiện, giới mộ điệu đ&aacute;nh gi&aacute; với chiếc&nbsp;<strong>Les Cabinotiers</strong>&nbsp;điểm chu&ocirc;ng ph&uacute;t tourbillon bấm giờ t&aacute;ch gi&acirc;y, Vacheron Constantin đạt đến th&agrave;nh tựu cơ kh&iacute; v&agrave; thẩm mỹ tinh tế.<br />\r\nĐồng hồ nhấn v&agrave;o chức năng điểm chu&ocirc;ng ph&uacute;t v&agrave; cơ chế bấm giờ t&aacute;ch gi&acirc;y, đặt tr&ecirc;n c&ugrave;ng một bộ chuyển động giữ nhịp bởi lồng quay tourbillon. D&ugrave; được vận h&agrave;nh bởi bộ m&aacute;y Calibre 2757 với gần 700 chi tiết, thiết kế chỉ d&agrave;y 10,4 mm.</p>\r\n', '2022-04-24 16:43:56', 'Hiếu Châu'),
(15, 'Sao 14 tuổi được ví là \'tiên nữ\'', '<p>Ngải Mễ, diễn vi&ecirc;n 14 tuổi, được kh&aacute;n giả gọi l&agrave; &quot;tiểu ti&ecirc;n nữ&quot; nhờ n&eacute;t đẹp trong trẻo, cổ điển.</p>\r\n\r\n<p>Ngải Mễ đ&oacute;ng vai phụ trong &quot;Thả th&iacute; thi&ecirc;n hạ&quot;, phim v&otilde; hiệp ra mắt ng&agrave;y 18/4. C&ocirc; v&agrave;i vao Bạch Lang Hoa, sư muội của nữ ch&iacute;nh Bạch Phong Tịch (Triệu Lộ Tư đ&oacute;ng). Trang&nbsp;<em>Sina&nbsp;</em>nhận x&eacute;t Ngải Mễ chinh phục nhiều kh&aacute;n giả nhờ ngoại h&igrave;nh, diễn xuất nh&iacute; nhảnh, dễ thương.</p>\r\n\r\n<p>Trang&nbsp;<em>QQ</em>&nbsp;khen Ngải Mễ mang vẻ đẹp trong trẻo như nắng ban mai.</p>\r\n\r\n<p>Loạt ảnh cổ trang của Ngải Mễ thu h&uacute;t b&igrave;nh luận của h&agrave;ng ngh&igrave;n kh&aacute;n giả. Nhiều người gọi c&ocirc; l&agrave; tiểu ti&ecirc;n nữ, nụ cười g&acirc;y ngẩn ngơ. C&aacute;c fan viết tr&ecirc;n Weibo: &quot;Em g&aacute;i xinh đẹp qu&aacute;, t&ocirc;i dừng mắt rất l&acirc;u ở ảnh của em&quot;, &quot;Thiếu nữ trong nắng xu&acirc;n&quot;, &quot;Em đ&uacute;ng l&agrave; h&igrave;nh mẫu thiếu nữ cổ đại t&ocirc;i tưởng tượng&quot;...</p>\r\n\r\n<p>Trước &quot;Thả th&iacute; thi&ecirc;n hạ&quot;, Ngải Mễ đ&oacute;ng vai phụ trong c&aacute;c phim như &quot;Hộc Ch&acirc;u phu nh&acirc;n&quot;, &quot;Đặng Lệ Qu&acirc;n: T&ocirc;i chỉ quan t&acirc;m em&quot;...</p>\r\n\r\n<p>Diễn vi&ecirc;n sinh năm 2008 ở Bắc Kinh, đ&oacute;ng phim từ năm s&aacute;u tuổi. C&ocirc; hiện thuộc c&ocirc;ng ty quản l&yacute; TH Entertainment.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-04-24 16:45:13', 'Như Anh'),
(16, 'Hoạt hình Pixar khai thác quá khứ Buzz Lightyear', '<p>&quot;Lightyear&quot; - bom tấn mới của nh&agrave; Pixar - khai th&aacute;c s&acirc;u qu&aacute; khứ Buzz, nh&acirc;n vật anh h&ugrave;ng tạo cảm hứng cho d&ograve;ng đồ chơi c&ugrave;ng t&ecirc;n.</p>\r\n\r\n<p>Ng&agrave;y 21/4, nh&agrave; ph&aacute;t h&agrave;nh tung trailer mới cho&nbsp;<em>Lightyear&nbsp;</em>- dự &aacute;n hoạt h&igrave;nh dự kiến ra rạp v&agrave;o giữa th&aacute;ng 6. Bộ phim l&agrave; ngoại truyện của thương hiệu&nbsp;<em>Toy Story,</em>&nbsp;xoay quanh nh&acirc;n vật anh h&ugrave;ng Buzz Lightyear.</p>\r\n\r\n<p>Đoạn video hơn hai ph&uacute;t tiết lộ một phần cốt truyện. Buzz Lightyear c&ugrave;ng phi h&agrave;nh đo&agrave;n bị mắc kẹt tr&ecirc;n một h&agrave;nh tinh c&aacute;ch Tr&aacute;i Đất 4,2 triệu năm &aacute;nh s&aacute;ng. Sau hơn một năm, họ chế tạo một loại m&aacute;y bay si&ecirc;u tốc với hy vọng đưa tất cả tho&aacute;t khỏi đ&oacute;. Tuy nhi&ecirc;n, trong chuyến khởi h&agrave;nh thử, Buzz gặp sự cố v&agrave; lạc đến một h&agrave;nh tinh kh&aacute;c. Anh ph&aacute;t hiện m&igrave;nh đ&atilde; du h&agrave;nh vượt thời gian hơn 62 năm. Tại đ&acirc;y, anh quen những đồng đội mới v&agrave; tham gia kế hoạch chống lại lũ robot ngo&agrave;i h&agrave;nh tinh.</p>\r\n\r\n<p>Người h&acirc;m mộ của thương hiệu&nbsp;<em>Toy Story</em>&nbsp;được gặp lại Emperor Zurg - thủ lĩnh của phe robot. Nh&acirc;n vật từng xuất hiện c&ugrave;ng Buzz trong loạt phim gốc, ở dạng c&aacute;c m&oacute;n đồ chơi tr&ecirc;n Tr&aacute;i Đất.&nbsp;<a href=\"https://vnexpress.net/giai-tri/chris-evans-chang-captain-america-kien-tri-khiem-ton-3919306.html\">Chris Evans</a>&nbsp;sẽ thay thế Tom Allen lồng tiếng ch&agrave;ng phi c&ocirc;ng nổi tiếng. Dự &aacute;n cũng quy tụ nhiều ng&ocirc;i sao như Uzo Aduba, Keke Palmer, Taika Waititi, Dale Soules hay Peter Sohn. Nh&agrave; l&agrave;m phim người Mỹ Angus MacLane ngồi ghế đạo diễn.</p>\r\n\r\n<p>Lần đầu xuất hiện năm 1995,&nbsp;<em>Toy Story&nbsp;</em>l&agrave; thương hiệu l&acirc;u đời v&agrave; c&oacute; sức sống m&atilde;nh liệt nhất của nh&agrave; Pixar. Trong phim, Buzz l&agrave; m&oacute;n qu&agrave; sinh nhật bất ngờ d&agrave;nh cho Andy v&agrave; khiến cậu nh&oacute;c th&iacute;ch m&ecirc;. Với vẻ ngo&agrave;i h&agrave;o nho&aacute;ng, Buzz nhanh ch&oacute;ng được Andy v&agrave; những m&oacute;n đồ kh&aacute;c y&ecirc;u mến. Điều n&agrave;y dẫn tới hiềm kh&iacute;ch giữa Buzz với Woody. Tuy nhi&ecirc;n, cả hai sau đ&oacute; dần thấu hiểu v&agrave; trở th&agrave;nh đồng đội trong những chuyến phi&ecirc;u lưu ở thế giới đồ chơi. Buzz Lightyeard được giới chuy&ecirc;n m&ocirc;n đ&aacute;nh gi&aacute; l&agrave; một trong những nh&acirc;n vật nổi tiếng nhất của Pixar.</p>\r\n', '2022-04-24 16:45:56', 'Đạt Phan'),
(17, 'Chi Pu: \'Tôi lì nên không dễ bỏ cuộc\'', '<p>Chi Pu n&oacute;i từ nhỏ được gia đ&igrave;nh dạy kh&ocirc;ng khuất phục kh&oacute; khăn, v&igrave; vậy, c&ocirc; nỗ lực r&egrave;n khả năng ca h&aacute;t, nhảy m&uacute;a chinh phục kh&aacute;n giả.</p>\r\n\r\n<p>Ca sĩ&nbsp;<a href=\"https://vnexpress.net/chi-pu-toi-binh-tinh-khi-bi-che-4448989.html\" target=\"_blank\">ra mắt</a>&nbsp;với vai tr&ograve; đội trưởng cuộc thi&nbsp;<em>Street Dance Việt Nam&nbsp;</em>v&agrave;o ng&agrave;y 7/3. Trước đ&oacute;, ca sĩ nhận những lời ch&ecirc; bai, nghi ngờ c&ocirc; kh&ocirc;ng đủ giỏi để l&atilde;nh đạo nh&oacute;m.</p>\r\n\r\n<p>r&egrave;n khả năng ca h&aacute;t, nhảy m&uacute;a chinh phục kh&aacute;n giả.</p>\r\n\r\n<p>Ca sĩ&nbsp;<a href=\"https://vnexpress.net/chi-pu-toi-binh-tinh-khi-bi-che-4448989.html\" target=\"_blank\">ra mắt</a>&nbsp;với vai tr&ograve; đội trưởng cuộc thi&nbsp;<em>Street Dance Việt Nam&nbsp;</em>v&agrave;o ng&agrave;y 7/3. Trước đ&oacute;, ca sĩ nhận những lời ch&ecirc; bai, nghi ngờ c&ocirc; kh&ocirc;ng đủ giỏi để l&atilde;nh đạo nh&oacute;m.</p>\r\n\r\n<p><a href=\"https://vnexpress.net/chu-de/chi-pu-1351\">Chi Pu</a>&nbsp;(t&ecirc;n thật Nguyễn Th&ugrave;y Chi) sinh năm 1993. Từ năm 2017, c&ocirc; lấn sang ca h&aacute;t, tung c&aacute;c sản phẩm&nbsp;<em>Từ h&ocirc;m nay,&nbsp;<a href=\"https://vnexpress.net/chi-pu-tung-tiep-mv-moi-sau-on-ao-chuyen-di-hat-3675971.html\">Em sai rồi anh xin lỗi em đi</a>, Mời anh v&agrave;o tim em,&nbsp;<a href=\"https://vnexpress.net/chi-pu-dong-nghe-si-cai-luong-trong-mv-4110029.html\">Cung đ&agrave;n vỡ đ&ocirc;i</a>, Mơ anh...&nbsp;</em>Nhiều người từng b&agrave;n t&aacute;n về khả năng ca h&aacute;t của Chi Pu tr&ecirc;n mạng x&atilde; hội. 5 năm qua, c&ocirc; ki&ecirc;n tr&igrave; theo đuổi c&ocirc;ng việc l&agrave;m ca sĩ, tiếp nhận g&oacute;p &yacute; v&agrave; cải thiện. Ngo&agrave;i ra, c&ocirc; c&ograve;n đ&oacute;ng phim qua c&aacute;c dự &aacute;n&nbsp;<em>5S Online,<a href=\"https://vnexpress.net/phim-than-tuong-dai-thang-o-canh-dieu-vang-2964406.html\">Thần tượng</a>, Y&ecirc;u, Vệ sĩ S&agrave;i G&ograve;n,&nbsp;<a href=\"https://vnexpress.net/lan-ngoc-va-chi-pu-dong-phim-moi-tinh-dau-cua-toi-3587209.html\">Mối t&igrave;nh đầu của t&ocirc;i</a>,&nbsp;<a href=\"https://vnexpress.net/phim-chi-chi-em-em-chieu-o-nhat-4252306.html\">Chị chị em em</a></em><a href=\"https://vnexpress.net/phim-chi-chi-em-em-chieu-o-nhat-4252306.html\">.</a>..</p>\r\n', '2022-04-24 16:47:07', 'Thanh Đặng - Tân Cao'),
(18, 'Bill Murray bị tố cáo hành vi không đúng mực', '<p>T&agrave;i tử Bill Murray bị đồng nghiệp tố c&aacute;o c&oacute; h&agrave;nh vi kh&ocirc;ng đ&uacute;ng mực tr&ecirc;n phim trường &quot;Being Mortal&quot;.</p>\r\n\r\n<p>Theo&nbsp;<em>People</em>, ng&agrave;y 21/4, một số diễn vi&ecirc;n v&agrave; nh&acirc;n vi&ecirc;n đo&agrave;n gửi đơn khiếu nại l&ecirc;n ban l&atilde;nh đạo Searchlight Pictures về h&agrave;nh vi của nam diễn vi&ecirc;n. C&aacute;c nguồn tin kh&ocirc;ng tiết lộ th&ocirc;ng tin chi tiết về h&agrave;nh động của Bill Murray.</p>\r\n\r\n<p>Searchlight Pictures dừng mọi hoạt động sản xuất của dự &aacute;n để điều tra sự việc. H&atilde;ng phim th&ocirc;ng b&aacute;o tới nh&acirc;n vi&ecirc;n qua thư điện tử: &quot;Cuối tuần trước, h&atilde;ng nhận được đơn khiếu nại v&agrave; lập tức điều tra. Sau khi đ&aacute;nh gi&aacute;, ch&uacute;ng t&ocirc;i quyết định dự &aacute;n kh&ocirc;ng thể tiếp tục trong thời gian n&agrave;y. H&atilde;ng biết ơn c&ocirc;ng sức của tất cả. Ch&uacute;ng t&ocirc;i hy vọng sớm trở lại l&agrave;m việc&quot;.</p>\r\n\r\n<p>Bill Murray, sinh năm 1950, l&agrave; danh h&agrave;i v&agrave; diễn vi&ecirc;n gạo cội người Mỹ. &Ocirc;ng bắt đầu sự nghiệp từ đầu thập ni&ecirc;n 1970 với c&aacute;c chương tr&igrave;nh truyền thanh, truyền h&igrave;nh ăn kh&aacute;ch. Murray c&oacute; vai ch&iacute;nh điện ảnh đầu ti&ecirc;n trong&nbsp;<em>Meatballs&nbsp;</em>(1979) v&agrave; g&oacute;p mặt trong h&agrave;ng loạt bom tấn ăn kh&aacute;ch sau đ&oacute; như&nbsp;<em>Caddyshack</em>&nbsp;(1980),&nbsp;<em>Stripes</em>&nbsp;(1981),&nbsp;<em>Tootsie&nbsp;</em>(1982) hay<em>&nbsp;Ghostbusters</em>&nbsp;(1984).</p>\r\n\r\n<p>Trong qu&aacute; khứ, Murray từng bị c&aacute;o buộc c&oacute; h&agrave;nh vi kh&ocirc;ng đ&uacute;ng mực. Tr&ecirc;n phim trường&nbsp;<em>Charlie&#39;s Angels</em>&nbsp;(2000), t&agrave;i tử qu&aacute;t mắng nữ diễn vi&ecirc;n Lucy Liu v&igrave; tự &yacute; thay đổi c&aacute;ch diễn trong một buổi tập m&agrave; &ocirc;ng kh&ocirc;ng c&oacute; mặt. &quot;Một số từ ngữ Murray d&ugrave;ng kh&ocirc;ng thể chấp nhận được. T&ocirc;i đ&atilde; kh&ocirc;ng ngồi y&ecirc;n v&agrave; chịu đựng. T&ocirc;i bảo vệ ch&iacute;nh m&igrave;nh v&agrave; kh&ocirc;ng hối hận&quot;, Liu kể lại sự việc trong buổi phỏng vấn với&nbsp;<em>LA Times</em>&nbsp;năm 2021.</p>\r\n', '2022-04-24 16:47:39', 'Phương Mai');
INSERT INTO `tbl_article` (`id`, `title`, `content`, `datetime`, `writer`) VALUES
(19, 'Cách tạo thói quen đọc sách', '<p>Để tr&aacute;nh nh&agrave;m ch&aacute;n, một số người đọc nhiều thể loại s&aacute;ch c&ugrave;ng l&uacute;c v&agrave; chọn quyển ph&ugrave; hợp với t&acirc;m trạng để nghiền ngẫm.</p>\r\n\r\n<p>Triết gia Hy Lạp Aristotle từng c&oacute; c&acirc;u: &quot;Ch&uacute;ng ta l&agrave; những g&igrave; ch&uacute;ng ta l&agrave;m lặp đi lặp lại. Do đ&oacute;, sự xuất sắc đến từ th&oacute;i quen, kh&ocirc;ng chỉ l&agrave; một h&agrave;nh động&quot;. Theo&nbsp;<em>Insider,</em>&nbsp;mỗi tuần Bill Gates đọc một quyển mới, c&ograve;n Elon Musk đọc 10 tiếng mỗi ng&agrave;y trước khi &ocirc;ng trở th&agrave;nh CEO của Tesla.</p>\r\n\r\n<p>Theo&nbsp;<em>Guardian</em>, muốn n&acirc;ng cao việc đọc, con người cần đem s&aacute;ch v&agrave;o từng ng&oacute;c ng&aacute;ch cuộc sống. T&aacute;c giả người Anh Gary Eberle cho biết đọc l&agrave; nghi thức gi&uacute;p &ocirc;ng tập trung hơn. &Ocirc;ng tưởng tượng m&igrave;nh ra khỏi d&ograve;ng chảy đời sống nhộn nhịp v&agrave; bước v&agrave;o v&ugrave;ng tĩnh t&acirc;m. Eberle gợi &yacute; mỗi người c&oacute; thể tự tạo kh&ocirc;ng gian đọc ri&ecirc;ng bằng c&aacute;ch &quot;nh&acirc;m nhi&quot; cuốn s&aacute;ch tại một chiếc ghế cố định trong c&ocirc;ng vi&ecirc;n. Thế l&agrave;, hễ bước v&agrave;o kh&ocirc;ng gian đ&oacute;, t&acirc;m tr&iacute; trở n&ecirc;n tĩnh lặng, sẵn s&agrave;ng dung nạp c&aacute;c kiến thức tr&ecirc;n trang giấy.</p>\r\n\r\n<p>Qua thời gian, nghi thức n&agrave;y tự nhi&ecirc;n &quot;du nhập&quot; v&agrave;o cuộc sống, trở th&agrave;nh th&oacute;i quen, khiến con người kh&ocirc;ng c&ograve;n nghĩ rằng m&igrave;nh bị &eacute;p đọc. L&uacute;c đ&oacute;, đọc l&agrave; bản năng - tựa việc ăn uống. Nina Freudenberger - t&aacute;c giả cuốn&nbsp;<em>Bibliostyle: How We Live at Home with Books&nbsp;</em>- cho rằng nếu muốn việc đọc trở th&agrave;nh phần tất yếu, gia đ&igrave;nh n&ecirc;n trưng s&aacute;ch khắp nh&agrave;, trong tầm mắt c&aacute;c th&agrave;nh vi&ecirc;n.</p>\r\n\r\n<p>Tr&ecirc;n<em>&nbsp;Nytimes,&nbsp;</em>nh&agrave; thơ Mỹ Elisa Gabbert đặt mục ti&ecirc;u đọc 52 cuốn s&aacute;ch một năm. C&ocirc; l&agrave;m vậy để kh&ocirc;ng sa đ&agrave; v&agrave;o một số chương tr&igrave;nh giải tr&iacute; v&ocirc; bổ v&agrave; đặt bản th&acirc;n trong khu&ocirc;n khổ kỷ luật. Đa số năm, c&ocirc; thường kh&ocirc;ng đạt đ&uacute;ng chỉ ti&ecirc;u, như năm 2017, c&ocirc; chỉ đọc 48 cuốn. Tuy nhi&ecirc;n, điều n&agrave;y đủ tạo cảm hứng cho người theo d&otilde;i c&ocirc; tr&ecirc;n mạng x&atilde; hội v&agrave; khiến họ l&agrave;m theo.</p>\r\n\r\n<p>T&aacute;c giả 15 tuổi Nguyễn Khang Thịnh, người H&agrave; Nội, cũng duy tr&igrave; th&oacute;i quen đọc nhờ t&iacute;nh kỷ luật. Mỗi tối, cậu d&agrave;nh trọn hai tiếng ch&igrave;m v&agrave;o thế giới con chữ, hạn chế cầm điện thoại. T&aacute;c giả trẻ n&oacute;i mong c&aacute;c bạn đồng trang lứa hạn chế d&ugrave;ng thiết bị điện tử, mạng x&atilde; hội v&agrave; tập trung suy nghĩ v&agrave;o t&aacute;c phẩm. Như thế, người đọc kh&ocirc;ng bị xao nh&atilde;ng, c&oacute; thể ho&agrave;n th&agrave;nh s&aacute;ch nhanh ch&oacute;ng.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Khang Thịnh cho rằng b&iacute; quyết đọc s&aacute;ch kh&ocirc;ng thấy ch&aacute;n l&agrave; thay đổi thể loại thường xuy&ecirc;n. Ngo&agrave;i s&aacute;ch khoa học, dạy kỹ năng, Thịnh th&iacute;ch truyện trinh th&aacute;m, c&oacute; lối dẫn dắt ly kỳ. V&agrave;o những ng&agrave;y học mệt, cậu đọc v&agrave;i mẩu truyện h&agrave;i - vừa giải tỏa căng thẳng, vừa gi&uacute;p giữ th&oacute;i quen. C&aacute;ch n&agrave;y tương đồng với chia sẻ của bi&ecirc;n tập vi&ecirc;n Kevin Nguyen tr&ecirc;n&nbsp;<em>theverge</em>. Mọi người c&oacute; thể theo đuổi nhiều thể loại s&aacute;ch c&ugrave;ng l&uacute;c để dễ chọn t&aacute;c phẩm ph&ugrave; hợp với t&acirc;m trạng l&uacute;c cần đọc. V&iacute; dụ, nếu c&oacute; một giờ rảnh, họ chọn truyện d&agrave;i. Khi ra đường, họ bỏ t&uacute;i cẩm nang kiến thức nhỏ gọn.</p>\r\n\r\n<p>Cuộc sống bận rộn n&ecirc;n con người thường kh&ocirc;ng đọc hết s&aacute;ch trong một lần. Thu Uy&ecirc;n - bi&ecirc;n tập vi&ecirc;n c&ocirc;ng ty ph&aacute;t h&agrave;nh s&aacute;ch - cho biết c&ocirc; lu&ocirc;n ghi lại t&igrave;nh tiết m&igrave;nh đọc chưa trọn hoặc chụp h&igrave;nh đoạn văn đ&aacute;ng nhớ. Nhờ thế, c&ocirc; kh&ocirc;ng cần đọc lại v&igrave; những ghi ch&uacute; hỗ trợ c&ocirc; &ocirc;n kiến thức, gi&uacute;p tiết kiệm thời gian v&agrave; qu&aacute; tr&igrave;nh đọc cũng su&ocirc;n sẻ hơn.</p>\r\n\r\n<p>Khao kh&aacute;t l&agrave;m chủ tri thức c&oacute; thể l&agrave; một trong những động lực để một người chọn đọc s&aacute;ch. Nh&agrave; gi&aacute;o Giản Tư Trung (viện trưởng viện Gi&aacute;o dục IRED) n&oacute;i việc đọc xuất ph&aacute;t từ nhu cầu học hỏi, sinh sống v&agrave; l&agrave;m việc. Như sinh vi&ecirc;n tham khảo gi&aacute;o tr&igrave;nh, nh&agrave; nghi&ecirc;n cứu nghiền ngẫm s&aacute;ch chuy&ecirc;n s&acirc;u, hoặc trẻ em đọc v&igrave; vui th&iacute;ch. Khi nhận ra đọc s&aacute;ch l&agrave; phương thức học tập, trau dồi bản th&acirc;n hiệu quả, con người t&igrave;m đến s&aacute;ch như điều hiển nhi&ecirc;n.</p>\r\n\r\n<p>B&ecirc;n cạnh ăn ngon, mặc đẹp, người đọc &quot;nu&ocirc;i&quot; tr&iacute; &oacute;c bằng c&aacute;c t&aacute;c phẩm - nơi chứa tinh t&uacute;y được đ&uacute;c kết từ những người th&ocirc;ng th&aacute;i, c&oacute; nhiều chi&ecirc;m nghiệm cuộc sống. Tuy hoạt động đọc s&aacute;ch thường chỉ một m&igrave;nh, người đọc kh&ocirc;ng c&ocirc; đơn v&igrave; họ đang giao tiếp với t&aacute;c giả, với những suy tư của ch&iacute;nh m&igrave;nh khi gập s&aacute;ch lại. L&uacute;c đ&oacute;, độc giả được sẻ chia, thậm ch&iacute; thấy được sống trong thế giới của người viết.</p>\r\n\r\n<p>Theo Cục Xuất bản, In v&agrave; Ph&aacute;t h&agrave;nh, Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng, năm 2021, tổng số xuất bản phẩm nộp lưu chiểu l&agrave; 32.948 (gồm cả s&aacute;ch gi&aacute;o khoa, gi&aacute;o tr&igrave;nh...). Trong &quot;biển&quot; s&aacute;ch, người đọc ph&acirc;n v&acirc;n v&igrave; kh&ocirc;ng biết t&aacute;c giả l&agrave; ai, s&aacute;ch n&oacute;i về g&igrave;, c&oacute; đ&aacute;ng đọc hay kh&ocirc;ng. Quế Chi - sinh vi&ecirc;n ng&agrave;nh Văn học, Đại học Khoa học X&atilde; hội v&agrave; Nh&acirc;n văn, TP HCM - n&oacute;i c&ocirc; thường t&igrave;m c&aacute;c k&ecirc;nh giới thiệu s&aacute;ch để tham khảo, hoặc chọn ấn phẩm theo t&ecirc;n t&aacute;c giả m&igrave;nh tin tưởng. Điều n&agrave;y đồng nghĩa, người đọc cần hiểu r&otilde; nhu cầu, sở th&iacute;ch bản th&acirc;n trước khi bước v&agrave;o h&agrave;nh tr&igrave;nh t&igrave;m tri thức v&agrave; niềm vui ở s&aacute;ch.</p>\r\n\r\n<p>C&ograve;n với t&aacute;c giả Mỹ Kristin Hannah, đọc đơn thuần l&agrave; th&uacute; vui tr&agrave;n ngập bất ngờ, kh&ocirc;ng cần qu&aacute; c&acirc;u nệ c&aacute;c ti&ecirc;u ch&iacute; v&agrave; người đọc c&oacute; thể dừng ngay nếu thấy kh&ocirc;ng th&iacute;ch. &quot;T&ocirc;i đọc thử 50 trang mỗi cuốn. Nếu thấy kh&ocirc;ng hợp, t&ocirc;i lại t&igrave;m bến đỗ ph&ugrave; hợp kh&aacute;c&quot;, c&ocirc; n&oacute;i tr&ecirc;n&nbsp;<em>Nytimes</em>.</p>\r\n', '2022-04-24 16:48:35', 'Quỳnh Quyên'),
(20, '\'Doctor Strange 2\' bị cấm chiếu vì nhân vật đồng tính', '<p>&quot;Doctor Strange 2&quot;, chung số phận nhiều bom tấn Disney như &quot;Eternals&quot;, &quot;West Side Story&quot;, bị cấm chiếu v&igrave; nh&acirc;n vật đồng t&iacute;nh nữ.</p>\r\n\r\n<p>Theo&nbsp;<em>Variety</em>, ng&agrave;y 22/4, đơn vị kiểm duyệt kh&ocirc;ng cho ph&eacute;p phim được chiếu tại Saudi Arabia sau khi Disney từ chối y&ecirc;u cầu sửa lại c&aacute;c cảnh li&ecirc;n quan đến nh&acirc;n vật đồng t&iacute;nh. T&aacute;c phẩm của đạo diễn Sam Raimi giới thiệu một si&ecirc;u anh h&ugrave;ng mới của Marvel c&oacute; biệt hiệu America Chavez (Xochitl Gomez đ&oacute;ng). Nh&acirc;n vật được cho l&agrave; thuộc cộng đồng LGBTQ.</p>\r\n\r\n<p>Saudi Arabia v&agrave; c&aacute;c quốc gia v&ugrave;ng vịnh thường cấm phim c&oacute; cảnh n&oacute;ng, đồng t&iacute;nh hoặc yếu tố t&ocirc;n gi&aacute;o. Gần đ&acirc;y, nhiều dự &aacute;n của Disney như&nbsp;<em><a href=\"https://vnexpress.net/chu-de/eternals-4180\">Eternals</a>, West Side Story</em>&nbsp;cũng chịu chung số phận khi h&atilde;ng kh&ocirc;ng đồng &yacute; sửa t&aacute;c phẩm theo y&ecirc;u cầu của cơ quan kiểm duyệt. Một số quốc gia l&acirc;n cận như Kuwait v&agrave; Qatar cũng chưa c&ocirc;ng bố lịch b&aacute;n v&eacute;&nbsp;<em>Doctor Strange 2,&nbsp;</em>nhiều khả năng cấm phim.</p>\r\n\r\n<p>Loạt phim&nbsp;<em>Doctor Strange&nbsp;</em>thuộc vũ trụ điện ảnh&nbsp;<a href=\"https://vnexpress.net/giai-tri/phim-marvel-gap-kho-tai-trung-quoc-4355172.html\">Marvel</a>, kể về si&ecirc;u anh h&ugrave;ng c&ugrave;ng t&ecirc;n. Anh vốn l&agrave; một b&aacute;c sĩ Mỹ đến Nepal để chữa vết thương từ tai nạn xe hơi, để rồi hấp thụ năng lực si&ecirc;u nhi&ecirc;n v&agrave; th&agrave;nh ph&ugrave; thủy phi thường. Phần hai do Sam Raimi - người từng th&agrave;nh c&ocirc;ng với loạt phim&nbsp;<em>Spider-Man&nbsp;</em>do Tobey Maguire đ&oacute;ng ch&iacute;nh - đạo diễn.</p>\r\n\r\n<p>Nữ si&ecirc;u anh h&ugrave;ng nh&iacute; American Chavez lần đầu xuất hiện trong thương hiệu. C&ocirc; b&eacute; phải đối mặt một nh&acirc;n vật b&iacute; ẩn dường như l&agrave; phi&ecirc;n bản kh&aacute;c của Captain Marvel (Brie Larson) v&agrave; qu&aacute;i vật Gargantos. Cuối video, một &aacute;c quỷ trong bộ trang phục đen xuất hiện gợi nhớ tới Knull - vị thần s&aacute;ng tạo ra lo&agrave;i Symbiote.</p>\r\n', '2022-04-24 16:49:45', 'Đạt Phan'),
(21, 'Hermès giới thiệu loạt đồng hồ \'du hành\' mới', '<p>Herm&egrave;s giới thiệu loạt đồng hồ mang t&iacute;nh biểu tượng, lấy cảm hứng từ những chuyến du h&agrave;nh v&agrave; tr&iacute; tưởng tượng kh&ocirc;ng giới hạn.</p>\r\n\r\n<p>Thương hiệu xa xỉ mang đến triển l&atilde;m Watches &amp; Wonders 2022 ở Geneva, Thụy Sĩ (từ ng&agrave;y 30/3 đến 5/4) những s&aacute;ng tạo mới. T&acirc;m điểm trong khu trưng b&agrave;y l&agrave; chiếc Arceau Le Temps Voyageur - sở hữu chức năng hiển thị 24 m&uacute;i giờ, c&oacute; hai phi&ecirc;n bản 41 mm v&agrave; 38 mm, chế t&aacute;c tr&ecirc;n chất liệu bạch kim, titan hoặc th&eacute;p.</p>\r\n\r\n<p>Thiết kế mặt số nổi bật với bản đồ giả tưởng, c&aacute;c m&uacute;i giờ bao quanh - từng xuất hiện tr&ecirc;n chiếc khăn lụa Planisph&egrave;re d&rsquo;un monde &eacute;questre - được vẽ bởi bởi nghệ sĩ J&eacute;r&ocirc;me Colliard. Phi&ecirc;n bản Arceau Le Temps Voyageur c&oacute; k&iacute;ch thước 38 mm, l&agrave;m bằng chất liệu th&eacute;p c&ugrave;ng d&acirc;y da c&aacute; sấu gam xanh dương chủ đạo.</p>\r\n\r\n<p>Chức năng world-time của đồng hồ được vận h&agrave;nh bởi module gồm 122 linh kiện t&iacute;ch hợp v&agrave;o bộ m&aacute;y l&ecirc;n d&acirc;y tự động H1837. Phi&ecirc;n bản m&agrave;u đen mang k&iacute;ch thước 41 mm, ứng dụng chất liệu bạch kim c&ugrave;ng v&agrave;nh bezel xử l&yacute; bằng c&ocirc;ng nghệ DLC (diamond-like-carbon) c&ugrave;ng t&ocirc;ng đen nh&aacute;m.</p>\r\n\r\n<p>Herm&egrave;s giới thiệu mẫu Arceau Les Folies du Ciel c&oacute; h&igrave;nh khinh kh&iacute; cầu ở mặt số - t&aacute;c phẩm của họa sĩ Lo&iuml;c Dubigeon, từng xuất hiện tr&ecirc;n c&aacute;c mẫu khăn lụa carr&eacute; từ năm 1984.</p>\r\n\r\n<p>Tr&ecirc;n mặt khảm x&agrave; cừ, c&oacute; quả hai khinh kh&iacute; cầu bằng chất liệu neoralite được t&aacute;i hiện sinh động tr&ecirc;n sắc hồng v&agrave; xanh l&aacute;.</p>\r\n\r\n<p>Hai khinh kh&iacute; cầu gắn với thuyền gondola bằng chất liệu v&agrave;ng trắng, mang h&igrave;nh d&aacute;ng chim - biểu tượng của chuyến du h&agrave;nh v&agrave; những cuộc di cư. H&atilde;ng chỉ sản xuất 24 chiếc Arceau Les Folies du Ciel - gợi nhắc địa chỉ cửa h&agrave;ng Herm&egrave;s tại phố Faubourg Saint Honor&eacute; ở Paris, Ph&aacute;p.</p>\r\n\r\n<p>Đồng hồ Kelly của Herm&egrave;s ra mắt với h&igrave;nh d&aacute;ng mới, d&acirc;y đeo l&agrave; v&ograve;ng kim loại bằng v&agrave;ng hoặc th&eacute;p kh&ocirc;ng gỉ. Thiết kế lấy cảm hứng từ kh&oacute;a t&uacute;i Kelly - biểu tượng kinh điển của h&atilde;ng ra đời từ thập ni&ecirc;n 1930.</p>\r\n\r\n<p>Phần mặt c&oacute; h&igrave;nh d&aacute;ng kh&oacute;a t&uacute;i Kelly, đu đưa theo từng cử động chủ nh&acirc;n. T&iacute;n đồ đồng hồ c&oacute; thể thay đổi phong c&aacute;ch bằng c&aacute;ch th&aacute;o rời kh&oacute;a, lắp v&agrave;o v&ograve;ng cổ mặt da h&igrave;nh quả chu&ocirc;ng.</p>\r\n', '2022-04-24 16:51:26', 'Hiếu Châu');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_guest`
--

CREATE TABLE `tbl_cart_guest` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart_guest`
--

INSERT INTO `tbl_cart_guest` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`, `size`) VALUES
(6, 74, '25v1plkv3l9', 'Kappa ba lô nam/nữ', '399000', 1, '27caa3fa1e.jpg', '0'),
(7, 74, '25v1plkv3l94sfc89b5i2tmmui', 'Kappa ba lô nam/nữ', '399000', 2, '27caa3fa1e.jpg', '0');

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
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `articalId` int(11) NOT NULL,
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
(1, 2, 'b8296d5238.jpg'),
(2, 3, '71230a3de7.png'),
(3, 4, '4841b55ea2.png'),
(4, 5, 'd9dfe2b148.jpeg'),
(5, 6, '1a01023ca6.jpg'),
(6, 7, '2d27ba20f4.jpg'),
(7, 8, '8284db25e0.jpg'),
(8, 9, '7bc0bdd26b.png'),
(9, 10, '143369a235.jpg'),
(10, 11, '4018e91835.jpg'),
(11, 12, '5c4565a0b2.jpg'),
(12, 13, 'a8436265ac.jpg'),
(13, 14, 'e55261b0b3.jpg'),
(14, 15, '0dda8e05e2.jpg'),
(15, 16, '5d9db9ebb8.jpeg'),
(16, 17, '5a1f958b0f.jpg'),
(17, 18, 'dd0136095d.jpg'),
(18, 19, '024b9578b7.jpg'),
(19, 20, 'd0c9f3b5d9.jpg'),
(20, 21, '88b7ca2e85.jpg');

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
  `image` varchar(255) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `paymentType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderId`, `productId`, `productName`, `userId`, `quantity`, `price`, `image`, `datetime`, `status`, `size`, `note`, `paymentType`) VALUES
(9, '73', 'Kappa ba lô nam/nữ', 6, 1, '399000', 'f08a7adaba.jpg', '2022-04-25 09:24:23', 0, '', '', ''),
(10, '73', 'Kappa ba lô nam/nữ', 6, 1, '399000', 'f08a7adaba.jpg', '2022-04-25 09:42:41', 0, '0', '', 'COD'),
(11, '73', 'Kappa ba lô nam/nữ', 6, 1, '399000', 'f08a7adaba.jpg', '2022-04-25 09:43:00', 0, '0', 'okay shoop', 'Online'),
(12, '73', 'Kappa ba lô nam/nữ', 6, 1, '399000', 'f08a7adaba.jpg', '2022-04-25 09:43:18', 0, '0', '', 'COD'),
(13, '70', 'Kappa túi nam/nữ', 6, 2, '498000', 'f8b4b392ea.jpg', '2022-04-25 10:05:08', 0, '3', '', 'COD');

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
(6, 'Phong', 'a@gmail.com', 'Thu Duc, Ho Chi Minh city', '0123456789', '202cb962ac59075b964b07152d234b70', 'admin'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_cart_guest`
--
ALTER TABLE `tbl_cart_guest`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_image_product`
--
ALTER TABLE `tbl_image_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
