-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daniel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT 0,
  `bill_name` varchar(50) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3.Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` tinyint(4) DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang xử lý 2. Đang giao hàng 3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(25, 27, 'admin', '', '', 'admin@gmail.com', 1, '08:47:59am 24/02/2023', 163, 0),
(26, 27, 'admin', '', '', 'admin@gmail.com', 1, '02:47:02pm 08/03/2023', 158, 0),
(27, 27, 'admin', '', '', 'admin@gmail.com', 1, '09:38:12am 12/03/2023', 148, 0),
(28, 27, 'admin', 'qdad', '0337667418', 'admin@gmail.com', 2, '08:54:16pm 30/03/2023', 69, 0),
(29, 27, 'admin', '', '', 'admin@gmail.com', 1, '09:43:51pm 30/03/2023', 69, 0),
(30, 27, 'admin', '', '', 'admin@gmail.com', 1, '09:43:57pm 30/03/2023', 0, 0),
(31, 27, 'admin', '', '', 'admin@gmail.com', 1, '09:44:43pm 30/03/2023', 69, 0),
(32, 27, 'admin', '', '', 'admin@gmail.com', 1, '09:45:10pm 30/03/2023', 0, 0),
(33, 27, 'admin', 'qdad', '0337667418', 'admin@gmail.com', 1, '09:45:31pm 30/03/2023', 32132, 0),
(34, 27, 'admin', 'qdad', '0337667418', 'admin@gmail.com', 1, '08:13:21am 31/03/2023', 64412, 0),
(35, 27, 'admin', 'qdad', '0337667418', 'admin@gmail.com', 1, '08:07:39pm 31/03/2023', 227, 0),
(36, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:20:27pm 31/03/2023', 69, 0),
(37, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:21:46pm 31/03/2023', 0, 0),
(38, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:21:49pm 31/03/2023', 0, 0),
(39, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:21:49pm 31/03/2023', 0, 0),
(40, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:21:49pm 31/03/2023', 0, 0),
(41, 27, 'admin', '', '0337667418', 'admin@gmail.com', 1, '08:22:19pm 31/03/2023', 0, 0),
(42, 27, 'admin', 'dad', '0337667418', 'admin@gmail.com', 1, '08:22:32pm 31/03/2023', 44, 0),
(43, 27, 'Nguyen Tuan Duy', 'Quan 12', '0786603133', 'duyntps20636@fpt.edu.vn', 1, '08:50:05am 02/04/2023', 148, 0),
(44, 27, 'admin', 'aa', '0337667418', 'admin@gmail.com', 1, '09:38:24am 03/04/2023', 123, 0),
(45, 27, 'admin', 'dassa', '033766748', 'admin@gmail.com', 1, '09:19:02am 07/04/2023', 69, 0),
(46, 27, 'admin', 'đ', '0337667418', 'admin@gmail.com', 1, '07:58:28pm 07/04/2023', 32358, 0),
(47, 0, 'admin', 'd', '0337667418', 'quanghuyvoicontre@gmail.com', 1, '09:27:07pm 07/04/2023', 69, 0),
(48, 27, 'admin', 'jjk', '0337667418', 'admin@gmail.com', 1, '09:24:55am 08/04/2023', 250000, 0),
(49, 27, 'admin', 's', '', 'admin@gmail.com', 1, '09:33:06am 08/04/2023', 900000, 0),
(50, 27, 'admin', '561 to ngoc van', '', 'admin@gmail.com', 1, '10:09:09am 09/04/2023', 6500000, 0),
(51, 27, '', '', '', '', 0, '10:13:02am 09/04/2023', 250000, 0),
(52, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:14:08am 09/04/2023', 0, 0),
(53, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:15:35am 09/04/2023', 0, 0),
(54, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:15:36am 09/04/2023', 0, 0),
(55, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:15:47am 09/04/2023', 0, 0),
(56, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:19:28am 09/04/2023', 0, 0),
(57, 27, 'admin', '561 to ngoc van', '0337667418', 'admin@gmail.com', 1, '10:19:44am 09/04/2023', 250000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `ngayluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idproduct`, `ngayluan`) VALUES
(1, 'sản phẩm đẹp nè', 0, 0, '10:25:56am 23/02/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(63, 27, 46, 'bag2.png', 'Small Shoulder Bag', 250000, 1, 250000, 48),
(64, 27, 45, 'bag1.png', 'Small Shoulder Bag', 250000, 1, 250000, 49),
(65, 27, 40, 'pant5.png', 'Regular Fit Linen Suit Pants', 650000, 1, 650000, 49),
(66, 27, 42, 'pant6.png', 'Regular Fit Linen Suit Pants', 650000, 10, 650000, 50),
(67, 27, 45, 'bag1.png', 'Small Shoulder Bag', 250000, 1, 250000, 51),
(68, 27, 45, 'bag1.png', 'Small Shoulder Bag', 250000, 1, 250000, 57);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `images`) VALUES
(12, 'Quần', 'ao.webp'),
(13, 'Áo khoác', 'dam.webp'),
(19, 'Áo thun', 'balo41.jpg'),
(23, 'Cardigan & Sweather', 'ao4.jpg'),
(24, 'Bag', ''),
(25, 'Polo', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `chatlieu` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `iddanhmuc` int(20) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `chatlieu`, `description`, `iddanhmuc`, `luotxem`) VALUES
(5, 'Relaxed Fit Printed T-shirt', 350000, 'tee5.png', 'Cotton 100%', 'Relaxed-fit T-shirt in soft cotton jersey with a printed design. Ribbed neck, dropped shoulders, and straight-cut hem.', 19, 1),
(6, 'Relaxed Fit Printed T-shirt', 350000, 'tee4.png', 'Cotton 100%', 'Keith Haring x H&M. Relaxed-fit T-shirt in soft cotton jersey with a printed design. Ribbed neck, dropped shoulders, and straight-cut hem.', 19, 0),
(7, 'Relaxed Fit Crochet-look Polo Shirt', 540000, 'tee3.png', 'Cotton 100%', 'Relaxed-fit, crochet-look polo shirt in hole-knit cotton. Collar, V-shaped opening at front, short sleeves, and ribbing at cuffs and hem.', 19, 0),
(8, 'Relaxed Fit Printed T-shirt', 200000, 'tee2.png', 'Cotton 100%', 'Relaxed-fit T-shirt in soft cotton jersey with a printed motif. Ribbed crew neck, dropped shoulders, and straight-cut hem.', 19, 1),
(9, 'Denim Overalls', 850000, 'pant9.png', 'Shell: Recycled polyester 27%, Recycled cotton 11%', 'Loose-fit overalls in non-stretch cotton denim. Adjustable suspenders, buttons at sides, and straight legs. Bib pocket, side pockets, back pockets, two small leg pockets, and a hammer loop at back.', 12, 0),
(11, 'Denim Overalls', 850000, 'pant10.png', 'Shell: Recycled polyester 27%, Recycled cotton 11%', 'Loose-fit overalls in non-stretch cotton denim. Adjustable suspenders, buttons at sides, and straight legs. Bib pocket, side pockets, back pockets, two small leg pockets, and a hammer loop at back.', 12, 0),
(12, 'Wide High Jeans', 460000, 'pant8.png', 'Cotton 99%, Spandex 1%', 'FOR CHILD’S SAFETY, GARMENT SHOULD FIT SNUGLY. THIS GARMENT IS NOT FLAME RESISTANT. LOOSE-FITTING GARMENT IS MORE LIKELY TO CATCH FIRE', 12, 1),
(14, 'Wide High Jeans', 460000, 'pant7.png', 'Shell: Recycled cotton 20%Lining: Recycled polyester 80%', 'Slim-fit, 5-pocket jeans in washed, stretch, flexible cotton denim for good comfort. High waist, adjustable, elasticized waistband, and zip fly with button. Wide legs. Made partly from recycled cotton.', 12, 0),
(15, 'Water-repellent Track Jacket', 670000, 'jacket10.png', 'Polyamide 100%Pocket lining: Polyester 100%', 'Relaxed-fit track jacket in windproof, water-repellent functional fabric designed for light showers and protection from wind. Stand-up collar, zipper at front with anti-chafe chin guard, and front pockets with zipper for safer storage. Dropped shoulders, long sleeves with ventilation holes under arms, and covered elastic at cuffs and hem. Mesh lining.', 13, 0),
(16, 'DryMove™ Tennis Track Jacket', 520000, 'jacket9.png', 'Polyester 100%Pocket lining: Polyester 100%', 'Regular-fit tennis track jacket in DryMove™ functional fabric to wick away moisture from skin and keep you comfortably dry while moving. Stand-up collar, zipper at front, and side pockets with zipper. Long raglan sleeves and ribbing at collar, cuffs, and hem. Contrasting piping at front and back.', 13, 0),
(17, 'Essentials No 14: THE CARCOAT', 2100000, 'jacket8.png', 'Cotton 100%Lining: Polyester 100%', 'Knee-length car coat in soft-brushed woven cotton fabric. Collar, concealed buttons at front for a clean look, and long raglan sleeves. A cross-season staple with diagonal side pockets, two inner pockets, and characteristic vent at back. Lined.', 13, 0),
(18, 'Regular Fit Twill Shacket', 650000, 'jacket7.png', 'Cotton 100%', 'Keith Haring x H&M. Regular-fit shirt jacket in thick cotton twill with a printed pattern and an embroidered motif at chest. Collar, concealed buttons at front, open patch front pockets, and long sleeves. Straight-cut hem. Unlined.', 13, 0),
(19, 'Relaxed Fit Terry Track Jacket', 550000, 'jacket6.png', 'Cotton 80%, Polyester 20%', 'Keith Haring x H&M. Relaxed-fit, jacquard-weave track jacket in terry with an embroidered motif on chest and narrow, contrasting piping over chest and along sleeves. Stand-up collar, zipper at front, side pockets, and long sleeves. Covered elastic at cuffs and hem. Unlined.', 13, 1),
(21, 'Corduroy Overshirt', 600000, 'jacket5.png', 'Cotton 100%', 'Overshirt in cotton corduroy. Collar, buttons at front, yoke at back, and open chest pockets. Long sleeves with sleeve placket and buttons at cuffs. Gently rounded hem.', 13, 0),
(22, 'Oversized Fit Satin Baseball Jacket', 1500000, 'jacket4.png', 'Shell: Recycled polyester 55%Lining: Recycled polyester 96%', 'Oversized, lightly padded baseball jacket in soft, draped satin with an embroidered motif. Ribbed stand-up collar, snap fasteners at front, gently dropped shoulders, and long sleeves. Diagonal welt front pockets with snap fastener and an inner pocket with snap fastener. Wide ribbing at cuffs and hem. Quilted lining.', 13, 0),
(23, 'Regular Fit Textured Overshirt', 700000, 'jacket3.png', 'Cotton 98%, Spandex 2%', 'Regular-fit overshirt in textured, woven cotton fabric. Collar, zipper at front, and chest pockets with flap and concealed snap fastener. Long sleeves, snap fastener at cuffs, and a straight-cut hem.', 13, 0),
(24, 'Regular Fit Denim Overshirt', 650000, 'jacket2.png', 'Cotton 100%', 'Regular-fit overshirt in non-stretch cotton denim. Turn-down collar, classic button placket, a patch chest pocket, and yoke at back. Long sleeves with sleeve placket and button at cuffs. Gently rounded hem.', 13, 0),
(25, 'Regular Fit Jacket', 1400000, 'jacket1.png', 'Shell: Polyester 100%Lining: Polyester 100%Coating: Polyurethane 100%', 'Short, regular-fit jacket. Collar, buttons at front, and yoke at front and back. Chest pockets with flap, an inner pocket, and long sleeves with button at cuffs. Lined.', 13, 0),
(26, 'Muscle Fit Rib-knit Sweater', 520000, 'sc11.jpg', 'Cotton 87%, Polyamide 13%', 'Sweater in a rib-knit cotton blend. Finely ribbed stand-up collar, half-zip, and long sleeves. Muscle Fit – designed to showcase the body’s physique with narrow shoulders, tapered sleeves, and sharply tapered waist for a flattering silhouette.', 23, 0),
(27, 'Muscle Fit 1/4-zip Polo Shirt', 520000, 'sc10.jpg', 'Cotton 51%, Rayon 49%', 'Muscle-fit polo shirt in a soft, fine-knit viscose and cotton blend designed to showcase the body’s physique. Collar, quarter-zip at upper front, and long raglan sleeves. Ribbing at cuffs and hem.', 23, 0),
(28, 'Regular Fit Hooded Cardigan', 580000, 'sc9.png', 'Polyester 66%, Cotton 22%, Rayon 12%Pocket lining: Cotton 60%, Polyester 40%', 'Long, regular-fit cardigan in jersey with a lined hood. Long sleeves, side pockets, and raw edges at cuffs and hem. No fasteners.', 23, 0),
(29, 'Oversized Fit Jacquard-knit Cardigan', 720000, 'sc8.png', 'Cotton 100%', 'Oversized, jacquard-knit cardigan in soft cotton. V-neck, buttons at front, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem.', 23, 0),
(30, 'Oversized Fit Cotton Sweater', 600000, 'sc7.png', 'Cotton 100%', 'Oversized, knit sweater in soft cotton. Dropped shoulders, long sleeves, and ribbing at neck, cuffs, and hem.', 23, 0),
(31, 'Oversized Fit Cardigan', 640000, 'sc6.png', 'Polyester 52%, Acrylic 38%, Wool 8%, Spandex 2%', 'Soft, oversized knit cardigan with a V-neck, buttons at front, dropped shoulders, and long sleeves. Wide ribbing at neck, button placket, cuffs, and hem.', 23, 0),
(32, 'Cardigan with Zip', 500000, 'sc5.jpg', 'Cotton 76%, Polyester 23%, Spandex 1%Pocket lining: Cotton 100%', 'Soft cardigan in ribbed jersey with a small stand-up collar, zip at front, and side pockets. Ribbing at cuffs and hem.', 23, 0),
(33, 'Cardigan with Zip', 500000, 'sc4.png', 'Cotton 76%, Polyester 23%, Spandex 1%Pocket lining: Cotton 100%', 'Soft cardigan in ribbed jersey with a small stand-up collar, zip at front, and side pockets. Ribbing at cuffs and hem.', 23, 0),
(34, 'Relaxed Fit V-neck Sweater Vest', 420000, 'sc3.png', 'Cotton 100%', 'Relaxed-fit, V-neck sweater vest in soft, knit cotton. Ribbing at neckline, armholes, and hem.', 23, 0),
(35, 'Relaxed Fit Cotton Sweater', 640000, 'sc1.png', 'Cotton 100%', 'Relaxed-fit sweater in a soft cotton knit. Dropped shoulders, long sleeves, and ribbing at neck, cuffs, and hem.', 23, 0),
(36, 'Relaxed Fit Cargo Pants', 600000, 'pant1.png', 'Shell: Cotton 100% Pocket lining: Cotton 100%', 'Relaxed-fit cargo pants in cotton twill. Zip fly with button, side pockets, back pockets with flap and snap fasteners, and leg pockets with snap fasteners.', 12, 0),
(37, 'Relaxed Fit Cargo Pants', 600000, 'pant3.png', 'Shell: Cotton 100% Pocket lining: Cotton 100%', 'Relaxed-fit cargo pants in cotton twill. Zip fly with button, side pockets, back pockets with flap and snap fasteners, and leg pockets with snap fasteners.', 12, 0),
(38, 'Relaxed Fit Cargo Pants', 600000, 'pant2.png', 'Shell: Cotton 100%Pocket lining: Cotton 100%', 'Relaxed-fit cargo pants in cotton twill. Zip fly with button, side pockets, back pockets with flap and snap fasteners, and leg pockets with snap fasteners.', 12, 0),
(39, 'Relaxed Fit Sweater Vest', 400000, 'sc2.png', 'Cotton 100%', 'Relaxed-fit, knit sweater vest in soft cotton. V-neck and ribbing at neck, armholes, and hem.Relaxed-fit, knit sweater vest in soft cotton. V-neck and ribbing at neck, armholes, and hem.', 23, 0),
(40, 'Regular Fit Linen Suit Pants', 650000, 'pant5.png', 'Shell: Linen 100%Pocket lining: Polyester 82%, Cotton 18%', 'Regular-fit suit pants in airy linen. Zip fly with hook-and-eye fastening, side pockets, welt back pockets, and legs with creases. Fabric made from linen is breathable, looks great when ironed or wrinkled, and softens over time.', 12, 0),
(41, 'Regular Fit Linen Suit Pants', 650000, 'pant4.png', 'CompositionShell: Linen 100%Pocket lining: Polyester 82%, Cotton 18%', 'Regular-fit suit pants in airy linen. Zip fly with hook-and-eye fastening, side pockets, welt back pockets, and legs with creases. Fabric made from linen is breathable, looks great when ironed or wrinkled, and softens over time.', 12, 0),
(42, 'Regular Fit Linen Suit Pants', 650000, 'pant6.png', 'CompositionShell: Linen 100%Pocket lining: Polyester 82%, Cotton 18%', 'Regular-fit suit pants in airy linen. Zip fly with hook-and-eye fastening, side pockets, welt back pockets, and legs with creases. Fabric made from linen is breathable, looks great when ironed or wrinkled, and softens over time.', 12, 1),
(43, 'Relaxed Fit T-shirt', 300000, 'tee1.png', 'Cotton 100%', 'Relaxed-fit T-shirt in soft cotton jersey. Ribbed crew neck, printed motif at front and back, and a reflective detail above hem at back.', 19, 0),
(44, 'Slim Fit Polo Shirt', 240000, 'polo1.png', 'Cotton 95%, Spandex 5%', 'Slim-fit polo shirt in soft cotton jersey. Collar, button placket, and short sleeves.', 25, 2),
(45, 'Small Shoulder Bag', 250000, 'bag1.png', 'Polyester 100%Lining: Polyester 100%', 'Small shoulder bag in woven fabric. Adjustable shoulder strap, double-ended zipper at top, and two outer compartments, one with zipper. One inner compartment. Lined. Depth 1 3/4 in. Width 5 3/4 in. Height 7 1/2 in.', 24, 0),
(46, 'Small Shoulder Bag', 250000, 'bag2.png', 'Polyester 100%Lining: Polyester 100%', 'Small shoulder bag in woven fabric. Adjustable shoulder strap, double-ended zipper at top, and two outer compartments, one with zipper. One inner compartment. Lined. Depth 1 3/4 in. Width 5 3/4 in. Height 7 1/2 in.', 24, 2),
(47, 'Small Shoulder Bag', 250000, 'bag3.png', 'Polyester 100%Lining: Polyester 100%', 'Small shoulder bag in woven fabric. Adjustable shoulder strap, double-ended zipper at top, and two outer compartments, one with zipper. One inner compartment. Lined. Depth 1 3/4 in. Width 5 3/4 in. Height 7 1/2 in.', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'khangdz', '123456', 'minhkhang@gmail.com', 'BT', '0333333', 0),
(22, 'huy', '123', 'huydz@gmail.com', 'quan 12 tnv', '0337667418', 1),
(27, 'admin', '123456', 'admin@gmail.com', '561 to ngoc van', '0337667418', 1),
(28, 'admin222', '123456', 'admin@gmail.com', NULL, NULL, 0),
(29, 'bede11', '123456', 'beede11@gaidep.com', NULL, NULL, 0),
(36, 'admin', '123456', 'admin', NULL, NULL, 0),
(37, 'admin', '123456', 'admin', NULL, NULL, 0),
(38, 'admin', '123456', 'admin', NULL, NULL, 0),
(39, 'admin', '123456', 'admin', NULL, NULL, 0),
(40, 'admin', '123456', 'admin', NULL, NULL, 0),
(41, 'admin', '123456', 'admin', NULL, NULL, 0),
(42, 'admin', '123456', 'admin', NULL, NULL, 0),
(43, 'admin', '123456', 'admin', NULL, NULL, 0),
(44, 'admin', '123456', 'admin', NULL, NULL, 0),
(45, 'admin', '123456', 'admin', NULL, NULL, 0),
(46, 'admin', '123456', 'admin', NULL, NULL, 0),
(47, 'admin', '123456', 'admin', NULL, NULL, 0),
(48, 'admin', '123456', 'admin', NULL, NULL, 0),
(49, 'admin', '123456', 'admin', NULL, NULL, 0),
(50, 'admin', '123456', 'admin', NULL, NULL, 0),
(51, 'admin', '123456', 'admin', NULL, NULL, 0),
(52, 'admin', '123456', 'admin', NULL, NULL, 0),
(53, 'admin', '123456', 'admin', NULL, NULL, 0),
(54, 'admin', '123456', 'admin', NULL, NULL, 0),
(55, 'admin', '123456', 'admin', NULL, NULL, 0),
(56, 'admin', '123456', 'admin', NULL, NULL, 0),
(57, 'admin', '123456', 'admin@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_sanpham` (`idpro`),
  ADD KEY `lk_cart_taikhoan` (`iduser`),
  ADD KEY `lk_cart_bill` (`idbill`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddanhmuc_danhmuc` (`iddanhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_cart_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddanhmuc_danhmuc` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
