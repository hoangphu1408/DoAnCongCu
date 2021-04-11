-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2021 lúc 07:46 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienthoailaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id_admin`, `username`, `password`, `hoten`, `email`, `sdt`) VALUES
(1, 'baosieubanh', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Trần Thế Bảo', 'superbao2000@gmail.com', '0359193168');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `Id_donhang` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `hoten_nguoinhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_nguoinhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_nguoinhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoinhan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang` tinyint(4) NOT NULL,
  `thanhtoan` tinyint(4) NOT NULL,
  `thoigiandathang` date NOT NULL,
  `pttt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ptgh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`Id_donhang`, `Id_user`, `hoten_nguoinhan`, `email_nguoinhan`, `diachi_nguoinhan`, `sdt_nguoinhan`, `tongtien`, `tinhtrang`, `thanhtoan`, `thoigiandathang`, `pttt`, `ptgh`) VALUES
(10, 4, 'bao123', 'superbao2000@gmail.com', '123', '0903258814', '46,398,000.00', 1, 1, '2021-01-18', 'tienmat', 'laytaishop'),
(15, 4, 'Nguyễn Quốc Chung', 'tongduong25@gmail.com', '14/70', '0969184688', '60,778,000.00', 1, 1, '2021-01-15', 'tienmat', 'giaohang'),
(16, 4, 'Nguyễn Bảo Duy', 'nguyenbaoduy20@gmail.com', '20/20/20', '01659193168', '105,780,000.00', 1, 1, '2021-01-15', 'tienmat', 'laytaishop'),
(17, 4, 'Nguyễn Bảo Duy', 'nguyenbaoduy20@gmail.com', '20/20/20', '01659193168', '0.00', 1, 1, '2021-01-15', 'tienmat', 'laytaishop'),
(18, 4, 'bảo', 'superbao2000@gmail.com', '123', '1231231231', '4,000,000.00', 1, 1, '2021-01-29', 'chuyenkhoan', 'giaohang'),
(19, 4, 'bảo', 'superbao2000@gmail.com', '123', '1231231231', '12,000,000.00', 1, 1, '2021-01-29', 'chuyenkhoan', 'laytaishop'),
(20, 4, 'bảo', 'superbao2000@gmail.com', '123', '1231231231', '65,880,000.00', 1, 1, '2021-01-30', 'chuyenkhoan', 'giaohang'),
(21, 4, 'bảo', 'superbao2000@gmail.com', '123', '1231231231', '107,790,000.00', 1, 1, '2021-01-30', 'chuyenkhoan', 'giaohang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `Id_donhang` int(11) NOT NULL,
  `Id_sp` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`Id_donhang`, `Id_sp`, `tensp`, `soluong`, `gia`) VALUES
(10, 23, 'iPhone 12', 2, 23199000),
(15, 27, 'Oppo a93', 2, 7190000),
(15, 23, 'iPhone 12', 2, 23199000),
(16, 30, 'Samsung Galaxy Z Fold2 5G', 2, 49900000),
(16, 28, 'Samsung Galaxy A12', 1, 4000000),
(16, 29, 'Sony Xperia XA1 Plus-G3416 (AV)', 2, 990000),
(18, 28, 'Samsung Galaxy A12', 1, 4000000),
(19, 28, 'Samsung Galaxy A12', 3, 4000000),
(20, 30, 'Samsung Galaxy Z Fold2 5G', 1, 49900000),
(21, 30, 'Samsung Galaxy Z Fold2 5G', 2, 49900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `Id_hang` int(11) NOT NULL,
  `tenhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenhang_khongdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL,
  `anhien` int(11) NOT NULL,
  `ngonngu` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`Id_hang`, `tenhang`, `tenhang_khongdau`, `image`, `thutu`, `anhien`, `ngonngu`) VALUES
(11, 'Samsung', 'Samsung', 'samsung-226432.png', 2, 1, 'vi'),
(12, 'Sony', 'Sony', 'sony-226421.png', 1, 1, 'vi'),
(13, 'Iphone', 'Iphone', '404px-Apple_logo_black.svg.png', 1, 1, 'vi'),
(18, 'Vivo', 'Vivo', 'vivo-282151.png', 2, 1, 'vi'),
(19, 'Oppo', 'Oppo', '1333.png', 1, 1, 'vi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh`
--

CREATE TABLE `hinh` (
  `Id_hinh` int(11) NOT NULL,
  `Id_sp` int(11) NOT NULL,
  `url_hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh`
--

INSERT INTO `hinh` (`Id_hinh`, `Id_sp`, `url_hinh`) VALUES
(5, 23, 'public/upload/apple-iphone-12-1-sim-64gb-01602646723.jpg'),
(6, 23, 'public/upload/iphone-mini-do-new-600x600-600x600.jpg'),
(11, 27, 'public/upload\\combo_-_a93-black_2.png'),
(12, 27, 'public/upload\\combo_-_a93-white_2.png'),
(13, 27, 'public/upload\\oppo-a93-(2).jpg'),
(14, 27, 'public/upload\\oppo-a93.jpg'),
(15, 28, 'public/upload\\samsung-galaxy-a12_1_.jpg'),
(16, 28, 'public/upload\\samsung-galaxy-a12_2_ (1).jpg'),
(17, 28, 'public/upload\\samsung-galaxy-a12_2_.jpg'),
(18, 28, 'public/upload\\samsung-galaxy-a12_3_.jpg'),
(19, 29, 'public/upload\\-B68PMh.png'),
(20, 29, 'public/upload\\-LPTG8R.jpg'),
(21, 29, 'public/upload\\-r2qatz.jpg'),
(22, 29, 'public/upload\\-tQ7L96.jpg'),
(23, 30, 'public/upload\\galaxy-z-fold2-5g_3 (1).jpg'),
(24, 30, 'public/upload\\galaxy-z-fold2-5g-1_3 (1).jpg'),
(31, 35, 'public/upload\\1113665878.jpeg'),
(32, 35, 'public/upload\\vivo-y51-bac-600x600-200x200.jpg'),
(33, 35, 'public/upload\\vivo-y51-black.png'),
(34, 36, 'public/upload\\product_17643_1.png'),
(35, 36, 'public/upload\\vivo_v20_render_leak_01_328x420_bzpo.jpg'),
(36, 36, 'public/upload\\Vivo-V20-500x500.jpg'),
(37, 36, 'public/upload\\vivo-v20-pro-220120-020129-600x600.jpg'),
(38, 37, 'public/upload\\galaxy-z-fold2-5g_3 (1).jpg'),
(39, 37, 'public/upload\\galaxy-z-fold2-5g_3.jpg'),
(40, 37, 'public/upload\\galaxy-z-fold2-5g-1_3 (1).jpg'),
(41, 37, 'public/upload\\galaxy-z-fold2-5g-1_3.jpg'),
(42, 38, 'public/upload\\1113665878.jpeg'),
(43, 38, 'public/upload\\apple-iphone-12-1-sim-64gb-01602646723.jpg'),
(44, 38, 'public/upload\\combo_-_a93-white_2.png'),
(45, 38, 'public/upload\\den_hfpv-z3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Id_sp` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensp_khongdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL,
  `ngonngu` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `anhien` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Id_hang` int(11) NOT NULL,
  `gia` float NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Id_sp`, `tensp`, `tensp_khongdau`, `thutu`, `ngonngu`, `anhien`, `image`, `Id_hang`, `gia`, `Mota`) VALUES
(23, 'iPhone 12', 'iPhone-2', 1, 'vi', 1, 'iphone-mini-do-new-600x600-600x600.jpg', 13, 23199000, '<p>Iphone 12 gb thiết kế xịn x&ograve;</p>'),
(27, 'Oppo a93', 'Oppo-a93', 1, 'vi', 1, 'oppo-a93.jpg', 19, 7190000, '<h3>Th&aacute;ng 9/2020,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;tiếp tục cho ra mắt d&ograve;ng sản phẩm thuộc ph&acirc;n kh&uacute;c&nbsp;<a href=\"https://www.thegioididong.com/dtdd?p=tu-4-7-trieu\" target=\"_blank\">điện thoại tầm trung</a>&nbsp;được xem l&agrave; tiếp nối từ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a92\" target=\"_blank\">OPPO A92</a>&nbsp;với nhiều điểm được n&acirc;ng cấp như hiệu năng, hệ thống camera c&ugrave;ng khả năng sạc nhanh 18W với t&ecirc;n gọi&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-a93\" target=\"_blank\">OPPO A93</a>.</h3>\r\n\r\n<h3>Hiệu năng vượt trội c&ugrave;ng với Helio P95</h3>\r\n\r\n<p>OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế n&agrave;y th&igrave; A93 sẽ kh&ocirc;ng l&agrave;m bạn thất vọng khi c&oacute; thể hoạt động tốt với nhiều ứng dụng nặng hay thao t&aacute;c cuộn trang đều diễn ra trơn tru cảm gi&aacute;c như kh&ocirc;ng c&oacute; độ trễ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ấn tượng hơn khi bộ nhớ RAM đến 8 GB gi&uacute;p m&aacute;y c&oacute; thể thao t&aacute;c tr&ecirc;n nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng c&oacute; hiện tượng&nbsp;giật lag n&acirc;ng cao trải nghiệm người d&ugrave;ng.</p>\r\n\r\n<p>Đo tr&ecirc;n Antutu th&igrave; OPPO A93&nbsp;đạt 201.029 điểm, con số kh&aacute; cao&nbsp;đảm bảo mọi hoạt&nbsp;động&nbsp;đều mượt m&agrave; v&agrave; gi&uacute;p&nbsp;<a href=\"https://www.thegioididong.com/dtdd-choi-game\" target=\"_blank\">điện thoại chơi game</a>&nbsp;đồ hoạ nặng như Li&ecirc;n Qu&acirc;n cũng kh&ocirc;ng th&agrave;nh vấn&nbsp;đề.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>V&agrave; c&oacute; bộ nhớ trong 128 GB thoải m&aacute;i lưu trữ mọi dữ liệu, nếu chưa đủ th&igrave; m&aacute;y vẫn hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho bạn th&ecirc;m nhiều kh&ocirc;ng gian lưu trữ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mặc kh&aacute;c, OPPO A93 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 tr&ecirc;n giao diện Color OS 7.2 với những t&iacute;nh năng th&ocirc;ng minh chắc chắn sẽ rất th&uacute; vị.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, m&aacute;y t&iacute;ch hợp HyperEngine c&ocirc;ng nghệ d&agrave;nh cho tr&ograve; chơi gi&uacute;p bạn n&acirc;ng cao trải nghiệm chơi th&ocirc;ng qua chất lượng h&igrave;nh ảnh bắt mắt, di chuyển mượt m&agrave; nhất trong bất kỳ thế giới trực tuyến n&agrave;o như Li&ecirc;n Qu&acirc;n Mobile.</p>\r\n\r\n<h3>Cụm camera selfie t&iacute;ch hợp AI</h3>\r\n\r\n<p>OPPO A93 c&oacute; 4 camera sau được xếp đối xứng nhau trong module h&igrave;nh vu&ocirc;ng v&agrave; thanh đ&egrave;n flash LED. Camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, mono đơn sắc&nbsp;v&agrave; mono ch&acirc;n dung lần lượt đều bằng 2 MP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với hệ thống camera n&agrave;y m&aacute;y c&ograve;n trang bị c&ocirc;ng nghệ Super Night sẽ gi&uacute;p ảnh của bạn sắc n&eacute;t hơn trong điều kiện thiếu s&aacute;ng, c&ugrave;ng khả năng xo&aacute; ph&ocirc;ng tạo hiệu ứng ph&ocirc;ng m&agrave;u kh&aacute;c biệt cho bức ảnh trở n&ecirc;n độc lạ v&agrave; đẹp xuất sắc như trong studio.</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012620-042603.jpg\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ảnh chụp tr&ecirc;n OPPO A93</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>'),
(28, 'Samsung Galaxy A12', 'Samsung-Galaxy-A12', 1, 'vi', 1, 'samsung-galaxy-a12_3_.jpg', 11, 4000000, '<h2><strong>Điện thoại Samsung Galaxy A12 &ndash; Smartphone gi&aacute; rẻ cấu h&igrave;nh tốt v&agrave; pin tr&acirc;u</strong></h2>\r\n\r\n<p><strong>Samsung Galaxy A12</strong>&nbsp;l&agrave; một chiếc smartphone gi&aacute; rẻ nhưng sở hữu cấu h&igrave;nh ổn định c&ugrave;ng với vi&ecirc;n pin 5000mAh cho thời lượng suốt ng&agrave;y d&agrave;i. B&ecirc;n cạnh đ&oacute; điện thoại Samsung Galaxy A12 cũng sở hữu thiết kế thời trang v&agrave; ph&ugrave; hợp với xu hướng.</p>\r\n\r\n<h3><strong>Thiết kế đơn giản, 4 phi&ecirc;n bản m&agrave;u, v&acirc;n tay cạnh b&ecirc;n</strong></h3>\r\n\r\n<p>Samsung Galaxy A12 c&oacute; thiết kế đơn giản với bốn g&oacute;c cạnh được bo tr&ograve;n mềm mại c&ugrave;ng với hai cạnh b&ecirc;n được v&aacute;t cong nhẹ nh&agrave;ng tạo cảm gi&aacute;c cầm thoải m&aacute;i cho người d&ugrave;ng.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; smartphone c&ograve;n được cho ra mắt với nhiều phi&ecirc;n bản m&agrave;u Đen, Trắng, Xanh thời trang để bạn c&oacute; thể lựa chọn m&agrave;u sắc y&ecirc;u th&iacute;ch.<img alt=\"\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-a12-1_1.jpg\" />Samsung Galaxy A12 mặc d&ugrave; c&oacute; thiết kế nguy&ecirc;n khối v&agrave; chỉ sử dụng chất liệu nhựa nhưng lại được ho&agrave;n thiện v&ocirc; c&ugrave;ng tỉ mỉ v&agrave; ch&iacute;nh x&aacute;c n&ecirc;n vẫn mang đến cảm gi&aacute;c cao cấp khi chạm.&nbsp;M&aacute;y được hỗ trợ v&acirc;n tay cạnh b&ecirc;n gi&uacute;p người d&ugrave;ng mở kh&oacute;a điện thoại nhanh ch&oacute;ng.</p>'),
(29, 'Sony Xperia XA1 Plus-G3416 (AV)', 'Dien-thoai-Sony-Xperia-XA1-Plus-G3416-(AV)', 1, 'vi', 1, '-tQ7L96.jpg', 12, 990000, '<h3><strong>Thiết kế đậm chất Xperia</strong></h3>\r\n\r\n<p>Khi sống dưới thời Sony th&igrave; đứa con Xperia XA1 Plus cũng chắc chắn phải giống với cả nh&agrave; rồi.&nbsp;Tuy nhi&ecirc;n, do thiết kế viền si&ecirc;u mỏng n&ecirc;n d&ugrave; m&agrave;n h&igrave;nh của Xperia XA1 Plus c&oacute; độ lớn 5.5 inch nhưng vẫn cầm rất gọn g&agrave;ng trong l&ograve;ng b&agrave;n tay.<img alt=\"\" src=\"https://cdn.mediamart.vn/Upload/download/2018-8-News/gZulHUlHHrwfkIU.jpg\" />Ph&iacute;a trước m&aacute;y ch&iacute;nh l&agrave; bộ loa k&eacute;p đặt s&aacute;t tới cạnh m&agrave;n h&igrave;nh v&agrave; camera selfie 8 MP.<img alt=\"\" src=\"https://cdn.mediamart.vn/Upload/download/2018-8-News/eWNstMy1nGV4WLz.jpg\" /></p>'),
(30, 'Samsung Galaxy Z Fold2 5G', 'Samsung-Galaxy-Z-Fold2-5G', 1, 'vi', 1, 'galaxy-z-fold2-5g-1_3 (1).jpg', 11, 49900000, '<h2><strong>Samsung Galaxy Z Fold 2 phi&ecirc;n bản m&ugrave;a xu&acirc;n &ndash; Thiết kế tinh tế h&ograve;a quyện c&ugrave;ng sắc xu&acirc;n năm mới</strong></h2>\r\n\r\n<p>Samsung Galaxy Z Fold 2 phi&ecirc;n bản m&ugrave;a xu&acirc;n với sự thay đổi về m&agrave;u sắc c&ugrave;ng họa tiết, tạo n&ecirc;n vẻ đẹp tinh tế nhẹ nh&agrave;ng như đ&uacute;ng với sắc xu&acirc;n năm mới. Thiết kế m&agrave;n h&igrave;nh gập đặc trưng tạo n&ecirc;n thương hiệu c&ugrave;ng hiệu năng mạnh mẽ mang đến trải nghiệm trơn tru v&agrave; mượt m&agrave; nhất để ch&agrave;o đừng một năm mới nhiều th&agrave;nh c&ocirc;ng.</p>\r\n\r\n<h3><strong>Phi&ecirc;n bản giới hạn với thiết kế hoa văn v&agrave; m&agrave;u sắc độc đ&aacute;o</strong></h3>\r\n\r\n<p><a href=\"https://cellphones.com.vn/mobile/samsung.html\" target=\"_self\">Điện thoại Samsung</a>&nbsp;Galaxy Z Fold 2 phi&ecirc;n bản m&ugrave;a xu&acirc;n mang đến sự đổi mới trong thiết kế với việc th&ecirc;m thắt c&aacute;c họa tiết tạo sự nổi bật so với phi&ecirc;n bản thường.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/226099/Slider/vi-vn-samsung-galaxy-z-fold-2-tinhnang.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>'),
(35, 'Vivo Y51', 'Vivo-Y51', 1, 'vi', 1, 'vivo-y51-black.png', 18, 5990000, '<h3>M&agrave;n h&igrave;nh rộng với m&agrave;u sắc rực rỡ</h3>\r\n\r\n<p>Y51 2020 sở hữu m&agrave;n h&igrave;nh 6.58 inch độ ph&acirc;n giải 1080 x 2408 Pixels, c&oacute; độ tương phản cao đem đến cho người d&ugrave;ng những trải nghiệm h&igrave;nh ảnh ch&acirc;n thực, m&agrave;u sắc rực rỡ gi&uacute;p việc sử dụng ứng dụng giải tr&iacute; tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;trở n&ecirc;n cuốn h&uacute;t hơn.&nbsp;<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/228950/vivo-y51-2020-291420-111417.jpg\" style=\"height:533px; width:800px\" />M&aacute;y sử dụng m&agrave;n h&igrave;nh IPS LCD cung cấp giao một diện m&agrave;u sắc đa dạng, g&oacute;c nh&igrave;n rộng, cho ph&eacute;p người d&ugrave;ng trải nghiệm được hết chất lượng h&igrave;nh ảnh m&agrave; kh&ocirc;ng nhất thiết phải ngồi trực diện.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/228950/vivo-y51-2020-293420-113419.jpg\" style=\"height:533px; width:800px\" /></p>'),
(36, 'Vivo V20', 'Vivo-V20', 1, 'vi', 1, 'vivo-v20-pro-220120-020129-600x600.jpg', 18, 7990000, '<h3>Sở hữu thiết kế mỏng đẹp mắt</h3>\r\n\r\n<p>Vivo V20 (2021)&nbsp;nổi bật với thiết kế mỏng chỉ 7.38 mm, mặt lưng được ho&agrave;n thiện từ k&iacute;nh mờ cao cấp, gi&uacute;p hạn chế b&aacute;m dấu v&acirc;n tay. Khung m&aacute;y l&agrave;m từ nhựa nhưng c&oacute; chất lượng ho&agrave;n thiện cao, mang lại cảm gi&aacute;c cứng c&aacute;p, chắn chắn.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/232614/vivo-v20-2021-203721-063746.jpg\" style=\"height:533px; width:800px\" />Ở mặt lưng chứa cụm 3 camera nằm thu gọn trong khu&ocirc;n h&igrave;nh chữ nhật c&ugrave;ng với đ&egrave;n LED k&eacute;p, logo Vivo sang trọng được đặt ở ph&iacute;a dưới, cạnh viền cũng được gia c&ocirc;ng tỉ mỉ mang lại cảm gi&aacute;c thoải m&aacute;i khi sử dụng trong thời gian d&agrave;i.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/232614/vivo-v20-2021-203721-063710.jpg\" style=\"height:533px; width:800px\" />Một điểm cộng đến từ Vivo V20 (2021) l&agrave; m&aacute;y vẫn hỗ trợ đầy đủ c&aacute;c cổng kết nối như jack tai nghe 3.5 mm, khe cắm thẻ nhớ mở rộng l&ecirc;n đến 256 GB.</p>'),
(37, '123', '123', 1, 'vi', 1, 'galaxy-z-fold2-5g-1_3.jpg', 19, 500000, '<p>2364645</p>'),
(38, 'Iphone 777', 'Iphone-777', 123, 'vi', 1, 'den_hfpv-z3.jpg', 18, 5000000, '<p>baoasdas<img alt=\"\" src=\"/public/upload/images/iphone-7-gold-600x600-1-600x600.jpg\" style=\"height:600px; width:600px\" /></p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongso`
--

CREATE TABLE `thongso` (
  `Id_thongso` int(11) NOT NULL,
  `Id_sp` int(11) NOT NULL,
  `manhinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hedieuhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bonhotrong` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thenho` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thesim` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongso`
--

INSERT INTO `thongso` (`Id_thongso`, `Id_sp`, `manhinh`, `hedieuhanh`, `cpu`, `ram`, `bonhotrong`, `thenho`, `thesim`, `pin`) VALUES
(2, 23, 'OLED, 5.4\", Super R', 'iOS 14', 'Apple A14 Bionic 6 nhân', '4 GB', '64 GB', 'Thẻ nhớ 128gb', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '2227 mAh, có sạc nhanh'),
(4, 27, '6.43 inches', 'Mediatek Helio P95 (12 nm)', 'Octa-core (2x2.2 GHz Cortex-A75 & 6x2.0 GHz Cortex-A55)', '8 GB', '128 GB', 'microSDXC', '2 SIM (Nano-SIM)', '4000mAh Sạc siêu nhanh 18W'),
(5, 28, 'Màn hình TFT LCD', 'Android 10', '8 nhân (2.3 GHz, 1.8 GHz)', '4 GB', '128 GB', 'microSD', '2 SIM (Nano-SIM)', 'Li-Po 5000 mAh, sạc nhanh 15W'),
(6, 29, '5.5 inch', 'Android 7.0 (Nougat)', 'Helio P20', '4 GB', '32 GB', 'MicroSD (T-Flash)', '2 Sim 2 sóng', '3430 mAh'),
(7, 30, 'Chính: Dynamic AMOLED, Phụ: Super AMOLED, Chính 7.59\" & Phụ 6.23\", Full HD+', 'Android 10', 'Snapdragon 865+ 8 nhân', '12 GB', '256 GB', 'Không', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh'),
(19, 35, 'IPS LCD, 6.58\", Full HD+', 'Android 11', 'Snapdragon 662 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
(20, 36, 'AMOLED, 6.44\", Full HD+', 'Android 11', 'Snapdragon 730 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM, Hỗ trợ 4G', '4000 mAh, có sạc nhanh'),
(21, 37, '123', '123123', '123', '123', '123', '123', '123', '123'),
(22, 38, 'IPS LCD, 6.58\", Full HD+', 'Android 11', 'Snapdragon 662 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 SIM (Nano-SIM)', 'Li-Po 5000 mAh, sạc nhanh 15W');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `Id_tin` int(11) NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tieude_khongdau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `url_hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `anhien` int(11) NOT NULL,
  `Id_hang` int(11) NOT NULL,
  `ngonngu` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`Id_tin`, `tieude`, `tieude_khongdau`, `url_hinh`, `tomtat`, `ngay`, `noidung`, `anhien`, `Id_hang`, `ngonngu`, `tags`) VALUES
(1, 'Giá chính thức Galaxy S21 series tại Việt Nam: Thấp nhất 20.99 triệu đồng, phiên bản cao cấp nhất 33', 'Gia-chinh-thuc-galaxy-21', 'galaxys21tim-27_800x450.jpg', 'Samsung trong sự kiện Galaxy Unpacked (14/1) đã trình làng bộ ba Galaxy S21, Galaxy S21+ và Galaxy S21 Ultra, tất cả đều có thiết kế mới lạ với cụm camera nằm liền lạc với cạnh viền. Riêng bản Ultra cao cấp mang nhiều công nghệ đột phá như camera 108 MP, hỗ trợ bút S Pen,...', '2021-01-16', '<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2021/01/14/1320335/galaxys21tim-27_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\">Samsung</a>&nbsp;trong sự kiện Galaxy Unpacked (14/1) đ&atilde; tr&igrave;nh l&agrave;ng bộ ba&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s21\" target=\"_blank\">Galaxy S21</a>,&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s21-plus\" target=\"_blank\">Galaxy S21+</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s21-ultra\" target=\"_blank\">Galaxy S21&nbsp;</a>Ultra,&nbsp;tất cả đều c&oacute; thiết kế mới lạ với cụm camera nằm liền lạc với cạnh viền. Ri&ecirc;ng bản Ultra cao cấp mang nhiều c&ocirc;ng nghệ đột ph&aacute; như camera 108 MP, hỗ trợ b&uacute;t S Pen,...</h2>\r\n\r\n<p>Người h&acirc;m mộ kh&ocirc;ng chỉ&nbsp;quan t&acirc;m về thiết kế v&agrave; th&ocirc;ng số cấu h&igrave;nh, m&agrave; c&ograve;n&nbsp;đặc biệt quan t&acirc;m về&nbsp;gi&aacute; b&aacute;n, theo đ&oacute; d&ograve;ng Galaxy S21 sẽ&nbsp;được b&aacute;n ch&iacute;nh h&atilde;ng tại Việt Nam với mức gi&aacute; như sau:</p>\r\n\r\n<h3><strong>Galaxy S21 (Độc quyền Thế Giới Di Động)</strong></h3>\r\n\r\n<ul>\r\n	<li>Galaxy S21<strong>&nbsp;</strong>Phi&ecirc;n bản RAM 8 GB + ROM 128 GB:&nbsp;<strong>21.990.000 VNĐ</strong>, &aacute;p dụng tất cả c&aacute;c phi&ecirc;n bản m&agrave;u (gi&aacute; tr&ecirc;n web Samsung).</li>\r\n	<li>Đặc biệt tại Thế Giới Di Động,&nbsp;Galaxy S21 sẽ c&oacute; gi&aacute;&nbsp;<strong>20.990.000 VNĐ</strong>.</li>\r\n</ul>\r\n\r\n<h3><strong>Galaxy S21+</strong></h3>\r\n\r\n<ul>\r\n	<li>Phi&ecirc;n bản RAM 8 GB + ROM 128 GB:&nbsp;<strong>25.990.000 VNĐ</strong>, &aacute;p dụng cho tất cả c&aacute;c phi&ecirc;n bản m&agrave;u.</li>\r\n	<li>Phi&ecirc;n bản RAM 8 GB + ROM 256 GB:&nbsp;<strong>28.990.000 VNĐ</strong>, chỉ &aacute;p dụng cho phi&ecirc;n bản m&agrave;u&nbsp;Đỏ Nhiệt Huyết,&nbsp;V&agrave;ng Hồng S&agrave;nh Điệu.</li>\r\n</ul>\r\n\r\n<h3><strong>Galaxy S21 Ultra</strong></h3>\r\n\r\n<ul>\r\n	<li>Phi&ecirc;n bản RAM 12 GB + ROM 128 GB:&nbsp;<strong>30.990.000 VNĐ</strong>, &aacute;p dụng cho tất cả c&aacute;c phi&ecirc;n bản m&agrave;u.</li>\r\n	<li>Phi&ecirc;n bản&nbsp;RAM 12 GB + ROM 256 GB:&nbsp;<strong>33.990.000 VNĐ</strong>, &aacute;p dụng cho m&agrave;u&nbsp;Bạc Titan Uy Quyền,&nbsp;Xanh Navy Lịch L&atilde;m v&agrave;&nbsp;N&acirc;u Thanh Lịch.</li>\r\n</ul>\r\n\r\n<p>Bạn nhận x&eacute;t thế n&agrave;o về mức gi&aacute; d&ograve;ng Galaxy S21 khi về Việt Nam?</p>', 1, 11, 'vi', 'điện thoại galaxy'),
(2, '5 điều người dùng muốn thấy từ Sony trong năm 2021: Làm ơn tuyển lại ngay đội ngũ truyền thông cho mảng mobile!', '5-dieu-nguoi-dung-muon-thay-tu-sony-trong-nam-2021', 'sony-xperia-5-ii-rear-profile-1200x675_800x450.jpg', 'Năm 2020 là một năm khá tốt đối với Sony. Bên cạnh việc ra mắt console thế hệ tiếp theo PS5 và những thiết bị tai nghe cao cấp, thương hiệu này cũng đã trình làng một số điện thoại thông minh hấp dẫn: Xperia 1 II cao cấp phục vụ khách hàng ở phân khúc cao cấp và Xperia 5 II cho phân khúc tầm trung. Cả hai đều có những cải tiến đáng chú ý so với các thiết bị cầm tay thế hệ trước của Sony.', '2021-01-29', '<h2><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2021/01/08/1318767/sony_800x450.jpg\" /></h2>\r\n\r\n<h2>Năm 2020 l&agrave; một năm kh&aacute; tốt đối với&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sony\" target=\"_blank\">Sony</a>. B&ecirc;n cạnh việc ra mắt console thế hệ tiếp theo PS5 v&agrave; những thiết bị tai nghe cao cấp, thương hiệu n&agrave;y cũng đ&atilde; tr&igrave;nh l&agrave;ng một số điện thoại th&ocirc;ng minh hấp dẫn:&nbsp;<a href=\"https://www.thegioididong.com/dtdd/sony-xperia-1-ii\" target=\"_blank\">Xperia 1 II</a>&nbsp;cao cấp phục vụ kh&aacute;ch h&agrave;ng ở ph&acirc;n kh&uacute;c cao cấp v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/sony-xperia-5-ii\" target=\"_blank\">Xperia 5 II</a>&nbsp;cho ph&acirc;n kh&uacute;c tầm trung. Cả hai đều c&oacute; những cải tiến đ&aacute;ng ch&uacute; &yacute; so với c&aacute;c thiết bị cầm tay thế hệ trước của Sony.</h2>\r\n\r\n<p>Sony lu&ocirc;n cố gắng cung cấp để bắt kịp tốc độ đặt h&agrave;ng ch&oacute;ng mặt của PlayStation 5 v&agrave;o thời điểm hiện tại. Nhưng ngo&agrave;i sự th&agrave;nh c&ocirc;ng của chiếc m&aacute;y chơi game mới n&agrave;y, ch&uacute;ng ta cũng muốn thấy nhiều điều hơn nữa từ g&atilde; khổng lồ Nhật Bản v&agrave;o năm 2021.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2021/01/08/1318767/sony-xperia-5-ii-rear-profile-1200x675_800x450.jpg\" /></p>\r\n\r\n<p>Sony Xperia 5 II đ&atilde; nằm top 5 smartphone đầu bảng năm 2020. Đ&acirc;y l&agrave; sản phẩm đ&aacute;ng mua cho những kh&aacute;ch h&agrave;ng đang t&igrave;m kiếm sự c&acirc;n bằng giữa gi&aacute; cả, t&iacute;nh năng v&agrave; thiết kế b&oacute;ng bẩy. Nếu bạn l&agrave; người y&ecirc;u th&iacute;ch việc giải tr&iacute; hoặc l&agrave; game thủ di động, n&oacute; thậm ch&iacute; c&ograve;n hấp dẫn hơn. Xperia 5 II l&agrave; lựa chọn tốt hơn cho hầu hết người ti&ecirc;u d&ugrave;ng so với Sony Xperia 1 II đắt tiền hơn. N&oacute; rất tuyệt vời nhưng c&oacute; một số vấn đề nhỏ m&agrave; Sony thực sự c&oacute; thể l&agrave;m tốt hơn v&agrave;o năm 2021.</p>\r\n\r\n<p>Mối quan t&acirc;m của m&igrave;nh với Xperia 5 II chủ yếu xoay quanh c&aacute;c app v&agrave; dịch vụ tr&ecirc;n hệ điều h&agrave;nh của m&aacute;y. Mặc d&ugrave; giao diện thuần Android của n&oacute; rất tuyệt, nhưng chủ đề, c&agrave;i đặt v&agrave; t&iacute;nh năng kh&ocirc;ng nhất qu&aacute;n tr&ecirc;n c&aacute;c ứng dụng được c&agrave;i v&agrave;o m&aacute;y thật kh&oacute; chịu.</p>\r\n\r\n<p>Tương tự, với m&aacute;y ảnh, ứng dụng camera mặc định Pro rất mạnh mẽ nếu kh&ocirc;ng muốn n&oacute;i l&agrave; hơi phức tạp, trong khi ứng dụng ti&ecirc;u chuẩn thiếu một số t&iacute;nh năng rất cơ bản. M&igrave;nh cũng sẽ kh&ocirc;ng bận t&acirc;m đến một số phần cứng m&aacute;y ảnh hiện đại hơn, AI th&ocirc;ng minh, sạc nhanh hơn v&agrave; c&oacute; jack tai nghe. Mức gi&aacute; cạnh tranh hơn một ch&uacute;t cũng kh&ocirc;ng ảnh hưởng g&igrave;.</p>\r\n\r\n<p>Mặc d&ugrave; vậy, Xperia 5 II l&agrave; chiếc điện thoại tốt của Sony trong một khoảng thời gian d&agrave;i. N&oacute; xứng đ&aacute;ng với sự nghi&ecirc;n cứu l&acirc;u d&agrave;i của Sony trong thời gian gần đ&acirc;y. V&igrave; vậy, với một v&agrave;i chỉnh sửa nhỏ v&agrave; m&igrave;nh sẽ rất h&agrave;o hứng với thiết bị kế tiếp-Xperia 5 III.</p>\r\n\r\n<p>&nbsp;</p>', 1, 12, 'vi', 'Sony'),
(3, 'Tham khảo ngay loạt smartphone Vivo chụp ảnh đẹp, có pin trâu 5.000 mAh đang giảm giá ngon lành, sắm chơi Tết thì đã phải biết', 'Tham-khao-ngay-loat', 'vivoy50-8_800x450.jpg', 'Không khí những ngày giáp Tết luôn rộn ràng với nhiều ưu đãi giảm giá ngon lành đang diễn ra tại Thế Giới Di Động đấy, bạn biết chưa? Nếu chưa thì hãy cùng mình điểm ngay khuyến mãi giảm giá hấp dẫn cho những dòng sản phẩm điện thoại Vivo này nha. Toàn những cái tên đáng sắm không luôn đấy.', '2021-01-30', '<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2021/01/23/1322330/vivoy50-8_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<h2>Kh&ocirc;ng kh&iacute; những ng&agrave;y gi&aacute;p Tết lu&ocirc;n rộn r&agrave;ng với nhiều ưu đ&atilde;i giảm gi&aacute; ngon l&agrave;nh đang diễn ra tại Thế Giới Di Động đấy, bạn biết chưa? Nếu chưa th&igrave; h&atilde;y c&ugrave;ng m&igrave;nh điểm ngay khuyến m&atilde;i giảm gi&aacute; hấp dẫn cho những d&ograve;ng sản phẩm&nbsp;<a href=\"https://www.thegioididong.com/dtdd-vivo\" target=\"_blank\">điện thoại Vivo</a>&nbsp;n&agrave;y nha. To&agrave;n những c&aacute;i t&ecirc;n đ&aacute;ng sắm kh&ocirc;ng lu&ocirc;n đấy.</h2>\r\n\r\n<p>Thời gian khuyến m&atilde;i diễn ra đến hết&nbsp;<strong>31/01/2021.</strong></p>\r\n\r\n<p>Danh s&aacute;ch c&aacute;c sản phẩm khuyến m&atilde;i gồm:</p>\r\n\r\n<h3><strong>Vivo Y50: Giảm 700.000 đồng</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd/vivo-y50\" target=\"_blank\">Vivo Y50</a>&nbsp;l&agrave; một trong những si&ecirc;u phẩm &#39;ngon - bổ - rẻ&#39; được Vivo ra mắt v&agrave;o th&aacute;ng 04/2020 với mức gi&aacute; tầm trung vừa t&uacute;i tiền của nhiều người c&ugrave;ng những t&iacute;nh năng nổi bật khiến người d&ugrave;ng c&ocirc;ng nghệ phải ch&uacute; &yacute;.</p>\r\n\r\n<p>M&agrave;n h&igrave;nh tr&agrave;n viền 6.53 inch sắc n&eacute;t kết hợp tốt với hiệu năng mạnh mẽ nhờ chipset&nbsp;Snapdragon 665 c&ugrave;ng 8 GB RAM, hứa hẹn mang đến cho người d&ugrave;ng một trải nghiệm game đỉnh cao.</p>\r\n\r\n<p>Bộ tứ camera đa năng với c&ocirc;ng nghệ si&ecirc;u chống rung v&agrave; chụp selfie đ&ecirc;m si&ecirc;u chất lu&ocirc;n đảm bảo những bức ảnh hay thước phim ch&acirc;n thực nhất. Dung lượng pin tr&acirc;u 5.000 mAh dư sức để bạn sử dụng cả ng&agrave;y.</p>', 1, 18, 'vi', 'vivo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id_user`, `hoten`, `email`, `password`, `dienthoai`, `diachi`) VALUES
(4, 'bảo', 'superbao2000@gmail.com', '202cb962ac59075b964b07152d234b70', '1231231231', '123'),
(5, 'bảo', 'superbao2001@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1231231231', '4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`Id_donhang`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD KEY `Id_donhang` (`Id_donhang`),
  ADD KEY `Id_sp` (`Id_sp`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`Id_hang`);

--
-- Chỉ mục cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`Id_hinh`),
  ADD KEY `Id_sp` (`Id_sp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Id_sp`),
  ADD KEY `Id_hang` (`Id_hang`);

--
-- Chỉ mục cho bảng `thongso`
--
ALTER TABLE `thongso`
  ADD PRIMARY KEY (`Id_thongso`),
  ADD KEY `Id_sp` (`Id_sp`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`Id_tin`),
  ADD KEY `Id_hang` (`Id_hang`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `Id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `Id_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hinh`
--
ALTER TABLE `hinh`
  MODIFY `Id_hinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `thongso`
--
ALTER TABLE `thongso`
  MODIFY `Id_thongso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `Id_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`);

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`Id_donhang`) REFERENCES `donhang` (`Id_donhang`),
  ADD CONSTRAINT `donhangchitiet_ibfk_2` FOREIGN KEY (`Id_sp`) REFERENCES `sanpham` (`Id_sp`);

--
-- Các ràng buộc cho bảng `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `hinh_ibfk_1` FOREIGN KEY (`Id_sp`) REFERENCES `sanpham` (`Id_sp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Id_hang`) REFERENCES `hang` (`Id_hang`);

--
-- Các ràng buộc cho bảng `thongso`
--
ALTER TABLE `thongso`
  ADD CONSTRAINT `thongso_ibfk_1` FOREIGN KEY (`Id_sp`) REFERENCES `sanpham` (`Id_sp`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`Id_hang`) REFERENCES `hang` (`Id_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
