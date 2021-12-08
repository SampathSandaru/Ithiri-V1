-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2021 at 05:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canmelk_smsadmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_level` int(11) NOT NULL,
  `admin_username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(2) NOT NULL,
  `admin_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `admin_name`, `admin_level`, `admin_username`, `admin_pass`, `admin_status`, `admin_created_date`) VALUES
(1, 'DinukaA', 1, 'adminAA', 'admin', 1, '2021-11-29 10:52:49'),
(10, 'super', 0, 'super', '123aaaaaaa', 1, '2021-11-02 05:46:51'),
(11, 'Sithumini Test', 1, 'Sithu Test', '11111111', 1, '2021-11-01 07:55:30'),
(12, 'Madhu', 1, 'Madhu', '11111111', 1, '2021-11-09 03:47:43'),
(13, 'Sithu', 1, 'Sithu123', '22222222', 1, '2021-11-17 08:33:04'),
(14, 'test', 1, 'test', '11111111', 1, '2021-11-17 08:38:36'),
(15, 'ErandaPG', 1, 'admin22', 'admin', 1, '2021-11-29 09:48:03'),
(16, 'admin', 1, 'admin', 'admin', 1, '2021-11-29 03:33:56'),
(17, 'adminnew', 1, 'adminnew', 'aaaaaaaaaaa', 1, '2021-11-29 10:43:01'),
(18, 'MadhuNew', 1, 'admin1234', 'admin1234', 1, '2021-11-29 08:56:43'),
(19, 'Havi', 1, 'havi1', '11111111', 1, '2021-11-29 10:56:53'),
(20, 'Hector', 1, 'hector', 'hector123', 1, '2021-12-05 04:09:20'),
(21, 'John', 1, 'john123', 'john1234', 1, '2021-12-05 04:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` text COLLATE utf8mb4_unicode_ci,
  `cust_level` int(11) NOT NULL,
  `cust_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_level`, `cust_status`) VALUES
(0, '', 1, 1),
(11, 'Mohan R', 1, 1),
(12, 'Kasun', 1, 1),
(50, 'Lahiru', 1, 1),
(51, 'Lahiru123', 3, 0),
(100, 'Namal', 2, 1),
(112, 'Perera', 2, 1),
(113, 'Madhu', 1, 1),
(114, 'Eranda', 1, 1),
(11200, 'Hank', 1, 1),
(11234, '', 1, 1),
(23070, 'Caldera H P R', 2, 1),
(23284, '', 1, 1),
(23297, '', 1, 1),
(23298, 'Sithu', 1, 1),
(23299, '', 2, 1),
(23310, '', 2, 1),
(23323, 'Eranda', 1, 1),
(23324, '', 1, 1),
(23325, '', 1, 1),
(23330, '', 1, 1),
(23331, '', 1, 1),
(23332, '', 1, 1),
(23334, '', 1, 1),
(23335, '', 1, 1),
(23336, 'Sithumini', 1, 1),
(111222, '', 1, 1),
(111223, '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_level`
--

CREATE TABLE `customer_level` (
  `customer_level_id` int(11) NOT NULL,
  `level_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_level`
--

INSERT INTO `customer_level` (`customer_level_id`, `level_name`, `status`) VALUES
(1, 'Non-Premier', 1),
(2, 'Premier', 1),
(3, 'Pro', 1),
(4, '123!@#qwe123123', 1),
(5, 'Super', 1),
(6, 'Casual test', 1),
(7, 'Frequent test', 1),
(8, 'New level123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `disc_id` int(11) NOT NULL,
  `mer_id` int(11) DEFAULT NULL,
  `disc_title` text COLLATE utf8mb4_unicode_ci,
  `disc_info` text COLLATE utf8mb4_unicode_ci,
  `cus_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_availability` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_address` text COLLATE utf8mb4_unicode_ci,
  `disc_geo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_fb_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_fb_link` text COLLATE utf8mb4_unicode_ci,
  `disc_insta_name` text COLLATE utf8mb4_unicode_ci,
  `disc_insta_link` text COLLATE utf8mb4_unicode_ci,
  `disc_expiry` date DEFAULT NULL,
  `disc_type` text COLLATE utf8mb4_unicode_ci,
  `disc_code` text COLLATE utf8mb4_unicode_ci,
  `disc_url` text COLLATE utf8mb4_unicode_ci,
  `small_image` text COLLATE utf8mb4_unicode_ci,
  `large_image` text COLLATE utf8mb4_unicode_ci,
  `disc_location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`disc_id`, `mer_id`, `disc_title`, `disc_info`, `cus_type`, `disc_availability`, `disc_address`, `disc_geo`, `disc_phone`, `disc_email`, `disc_fb_name`, `disc_fb_link`, `disc_insta_name`, `disc_insta_link`, `disc_expiry`, `disc_type`, `disc_code`, `disc_url`, `small_image`, `large_image`, `disc_location`, `disc_category`, `disc_status`) VALUES
(1, 42, '10% Fish Purchases', '10% Fish purchases at your nearest Cargills outlet. Come join this offer today!', '[\"1\"]', '', 'Colombo 2', 'https://www.google.com/maps/place/Cargills+Food+City+-+Pagoda/@6.8784425,79.8852165,15z/data=!4m9!1m2!2m1!1scargills!3m5!1s0x3ae25a3f7f6be305:0xdc22f8bf23390e99!8m2!3d6.8784361!4d79.8939781!15sCghjYXJ', '0777888233', 'hello@cargills.com', '', '', '', '', '2022-01-30', 'Barcode', '12345', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer614.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer310.png', '20', '11', 1),
(2, 35, '20% off at Odel', '20% off at Odel on all purchases made until the end of the year! yay! Come in to claim these offers now.', '[\"1\"]', '', '44, Park Lane', 'https://www.google.com/maps/place/Party+Adventure/@6.8834761,79.8772718,15z/data=!4m5!3m4!1s0x0:0x40785242dac584a1!8m2!3d6.8939719!4d79.8662191', '0777333221', 'a@gmail.com', 'Odel SL', 'https://www.facebook.com/odelsl', '', '', '2022-01-30', 'Barcode', '11223345', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Odel_Offer8.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Odel_Offer9.png', '15', '11', 1),
(3, 42, 'New Discount 30% off!', 'Major Discount 30% off on all purchases made this month at any of our outlets.', '[\"1\"]', '', '', '', '', 'hello@cargills.com', '', '', '', '', '2021-12-31', 'QR Code', '213234554', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer68.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer67.jpg', '21', '12', 1),
(4, 42, 'New Discount 20%', '', '[\"1\"]', '', 'Moratuwa', 'https://www.google.com/maps/place/Party+Adventure/@6.8834761,79.8772718,15z/data=!4m5!3m4!1s0x0:0x40785242dac584a1!8m2!3d6.8939719!4d79.8662191', '', 'hello@cargills.com', '', '', '@Cargills', 'https://www.instagram.com/cargill/?hl=en', '2021-11-25', 'QR Code', '213234554', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer41.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer4.jpeg', '21', '12', 1),
(5, 40, '30% off on everything!', '30% off on everything when you shop at any outlet this weekend. You may use any credit card for this payment to claim this offer! Go nuts!', '[\"1\"]', '', '', '', '0777888233', 'sithumini@gmail.com', '', '', '', '', '2021-12-31', 'QR Code', '12344', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer51.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer5.jpeg', '21', '7', 1),
(6, 36, 'Abans Major Offer!', 'Abans Major Offer, all purchases at a major discount! Check it out now online by clicking the link below.', '[\"1\"]', '', '', '', '', 'hello@abans.com', '', '', '', '', '2022-01-30', 'Online', '', 'https://buyabans.com/kitchen-appliances', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/WhatsApp_Image_2021-11-09_at_08_54_491.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/WhatsApp_Image_2021-11-09_at_08_54_49.jpeg', '9', '10', 1),
(7, 34, '5% discount at 99! ', 'Come to the 99 restaurant this weekend and get 5% off all food items you purchase. This offer is only valid for this month. ', '[\"1\"]', '', 'Trincomalee Town Center', 'https://www.google.com/maps/place/Trincomalee/data=!4m2!3m1!1s0x3afbbcb6902dbe27:0x7de76a7a331b0fbb?sa=X&ved=2ahUKEwj30sbEmqH0AhWH4jgGHWAsAX8Q8gF6BAhVEAE', '0112333444', 'din@123.com', '', '', '', '', '2021-11-30', 'Barcode', '11111111', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer6.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer61.jpg', '21', '12', 1),
(8, 40, '10% off on handbags', 'Limited time offer', '[\"2\",\"3\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2023-01-02', 'QR Code', '123123', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo4.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo5.png', '21', '12', 1),
(9, 36, '20% offer', 'offer', '[\"2\"]', '', 'test address', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-01', 'QR Code', '5000ABC', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo6.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/2.PNG', '14', '5', 1),
(10, 40, 'Glitz offer', '', '[\"2\",\"3\",\"4\",\"5\",\"6\"]', '', '', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '', '', 'qwe13!!@$!@', 'https://www.facebook.com/add.a.link/', 'qwe123!@#', 'https://www.instagram.com/dttt', '2021-12-10', 'Barcode', 'qweqweqwe123', '', '', '', '21', '12', 1),
(11, 40, 'offer test', 'offer for a limited time', '[\"1\"]', '', 'test address', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-09', 'Barcode', 'qweqw123', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Screenshot_(3).png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Screenshot_(3)1.png', '21', '12', 1),
(12, 37, 'offer test2123', 'offer for a limited time123', '[\"1\",\"2\"]', '', 'test address123', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405111', 'sales@casacolombo123.com', 'sithu123', 'https://www.facebook.com/add.a.link/123', 'sithu123', 'https://www.instagram.com/sithu123123123', '2021-12-30', 'QR Code', 'qweqw123123123', 'https://www.instagram.com/sithu231', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo8.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo7.png', '21', '12', 0),
(13, 35, 'Clothes', 'qweqe', '[\"5\"]', '', 'qwe', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'admin@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', '', '2021-12-08', 'Barcode', 'qwe', 'https://www.instagram.com/sithu', '', '', '14', '8', 1),
(14, 35, 'offer 30%', 'test offer', '[\"1\",\"2\"]', '', 'test address', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-10', 'QR Code', 'test123', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/how-to-set-discount-pricing-right.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/how-to-set-discount-pricing-right1.jpg', '14', '8', 1),
(15, 42, 'New Discount', 'aaaaaaaaaaaa', '[\"6\",\"7\",\"8\"]', '', 'Sri Lakna', '', '12222', '', '', '', '', '', '2021-12-31', 'Barcode', '213234554', '', '', '', '19', '12', 1),
(16, 42, 'New Discount', 'aaaaaaaaaaaa', '[\"6\",\"7\",\"8\"]', '', 'Sri Lakna', '', '12222', '', '', '', '', '', '2021-12-31', 'Barcode', '213234554', '', '', '', '19', '12', 1),
(17, 42, 'New Discount', 'aaaaaaaaaaaa', '[\"6\",\"7\",\"8\"]', '', 'Sri Lakna', '', '12222', '', '', '', '', '', '2021-12-31', 'Barcode', '213234554', '', '', '', '19', '12', 1),
(18, 41, 'New Discount', '', '[\"1\"]', '', '', '', '', '', '', '', '', '', '2021-12-13', 'QR Code', '', '', '', '', '21', '12', 1),
(19, 33, 'keells 50% discount for SDPl', 'test offer', '[\"1\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-23', 'QR Code', '234234', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/how-to-set-discount-pricing-right2.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/photo-1607082349566-187342175e2f.jpg', '11', '10', 1),
(20, 33, 'keells 50% discount for SDPl', 'test offer', '[\"1\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-23', 'QR Code', '234234', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/how-to-set-discount-pricing-right3.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/photo-1607082349566-187342175e2f1.jpg', '11', '10', 1),
(21, 33, '60% off', 'test', '[\"1\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-24', 'QR Code', '234bm', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo9.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/photo-1607082349566-187342175e2f2.jpg', '14', '8', 1),
(22, 33, '60% off', 'test', '[\"1\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2021-12-24', 'QR Code', '234bm', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo10.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/photo-1607082349566-187342175e2f3.jpg', '14', '8', 1),
(23, 33, '55% offer', 'offer', '[\"1\"]', '', 'test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.90196', '0711405066', 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', '2022-01-06', 'QR Code', '345wer', 'https://www.instagram.com/sithu', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Logo11.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/photo-1607082349566-187342175e2f4.jpg', '6', '8', 1),
(24, 36, 'Abans Kandy 10% Off', 'Abans Kandy 10% Off on all purchases', '[\"1\",\"2\"]', '', 'Kandy', '', '0777888111', '', '', '', '', '', '2021-12-26', 'Barcode', '11223344', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer52.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer1.jpeg', '9', '6', 1),
(25, 36, 'Abans Kandy 10% Off', 'Abans Kandy 10% Off on all purchases', '[\"1\",\"2\"]', '', 'Kandy', '', '0777888111', '', '', '', '', '', '2021-12-26', 'Barcode', '11223344', '', '', '', '9', '6', 1),
(26, 41, '122323424', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-22', 'Barcode', '12', '', '', '', '21', '12', 1),
(27, 41, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-22', 'QR Code', '', '', '', '', '21', '12', 1),
(28, 41, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-23', 'QR Code', '', '', '', '', '21', '12', 1),
(29, 41, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-28', 'QR Code', '', '', '', '', '21', '12', 1),
(30, 41, 'New Discount123', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-16', 'Barcode', '213234554', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Odel_Offer13.png', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer37.png', '21', '12', 1),
(31, 35, '5% discount at Odel! ', '5% discount at Odel! ', '[\"1\",\"2\"]', '', '', '', '', '', '', '', '', '', '2022-02-27', 'QR Code', '', '', '', '', '18', '6', 1),
(32, 35, '5% discount at Odel! ', '5% discount at Odel! ', '[\"1\",\"2\"]', '', '', '', '', '', '', '', '', '', '2022-02-27', 'QR Code', '', '', '', '', '18', '6', 1),
(33, 35, '5% discount at Odel! ', '5% discount at Odel! ', '[\"1\",\"2\"]', '', '', '', '', '', '', '', '', '', '2022-02-27', 'QR Code', '', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer63.jpg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer54.jpeg', '18', '6', 1),
(34, 42, 'New Discount Test 5:27', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-29', 'QR Code', '', '', '', '', '21', '12', 1),
(35, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-13', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(36, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-13', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(37, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-13', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(38, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(39, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(40, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(41, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(42, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(43, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(44, 42, 'New Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-21', 'Barcode', '213234554', '', '', '', '21', '12', 1),
(45, 42, 'Working Discount', '', '[\"2\"]', '', '', '', '', '', '', '', '', '', '2021-12-23', 'QR Code', '', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer55.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer64.jpg', '21', '12', 1),
(46, 37, 'Casa Offer 10%', 'Casa Offer 10%', '[\"1\",\"2\",\"3\",\"5\",\"6\",\"7\",\"8\"]', '', '', '', '', '', '', '', '', '', '2021-12-31', 'QR Code', '', '', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer46.jpeg', 'https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/Offer59.jpeg', '15', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `disc_categories`
--

CREATE TABLE `disc_categories` (
  `disc_category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disc_categories`
--

INSERT INTO `disc_categories` (`disc_category_id`, `category_name`) VALUES
(4, 'Other'),
(5, 'Clothing & Retail'),
(6, 'Dining'),
(7, 'Education'),
(8, 'Healthcare'),
(9, 'Leisure and Adventure\r\n'),
(10, 'Lifestyle'),
(11, 'Personal Care\r\n'),
(12, 'Automobile');

-- --------------------------------------------------------

--
-- Table structure for table `locationList`
--

CREATE TABLE `locationList` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locationList`
--

INSERT INTO `locationList` (`location_id`, `location_name`) VALUES
(3, 'Batticaloa'),
(4, 'Colombo'),
(5, 'Anuradhapura'),
(6, 'Badulla'),
(7, 'Galle'),
(8, 'Jaffna'),
(9, 'Kandy'),
(10, 'Kilinochchi'),
(11, 'Kurunegala'),
(12, 'Mannar'),
(13, 'Matale'),
(14, 'Matara'),
(15, 'Moratuwa'),
(16, 'Mullaitivu'),
(17, 'Negombo'),
(18, 'Puttala'),
(19, 'Ratnapura'),
(20, 'Sri Jayewardenepura Kotte\r\n'),
(21, 'Trincomalee');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `mer_id` int(11) NOT NULL,
  `mer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_reg` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_geo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_phone` int(11) NOT NULL,
  `mer_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_fb_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_fb_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_insta_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_insta_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_status` int(2) NOT NULL,
  `mer_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mer_active_date` date DEFAULT NULL,
  `mer_inactive_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`mer_id`, `mer_name`, `mer_reg`, `mer_address`, `mer_geo`, `mer_phone`, `mer_email`, `mer_fb_name`, `mer_fb_link`, `mer_insta_name`, `mer_insta_link`, `mer_status`, `mer_created_date`, `mer_active_date`, `mer_inactive_date`) VALUES
(33, 'Keells', '123AQ9879', 'Keells HQ, Col 2', '', 112333444, 'help@keells.com', 'Keells', '', 'Keells Sri Lanka', '', 1, '2021-12-01 06:03:51', NULL, NULL),
(34, 'Cafe 99', '123456789', '110, Ratmalana', '', 704421377, 'din@123.com', 'wanasa cafe jlt', 'https://www.facebook.com/wanasacafeJLT1/', 'wanasa cafe jlt', 'https://www.instagram.com/wanasa_cafe.jlt/', 1, '2021-10-28 05:04:13', NULL, NULL),
(35, 'Odel', '12345678', 'Odel, Colombo 10', 'https://pub.dev/packages/lazy_load_refresh_indicator/install', 752323122, 'admin@gmail.com', 'Lahiru', 'https://www.facebook.com/search?client=firefox-b-d&q=lorem+ipsum', 'Odel Colombo', 'https://www.instagram.com/search?client=firefox-b-d&q=lorem+ipsum', 1, '2021-10-28 05:06:12', NULL, NULL),
(36, 'Abans Kandy', '12354454', 'Kandy', 'https://pub.dev/packages/lazy_load_refresh_indicator/install', 752323122, 'help@abans.com', 'Lahiru', 'https://www.facebook.com/search?client=firefox-b-d&q=lorem+ipsum', 'My Insta', 'https://www.instagram.com/search?client=firefox-b-d&q=lorem+ipsum', 1, '2021-10-28 05:13:19', NULL, NULL),
(37, 'Casa Colombo', '176876YHU9', 'Colombo', '', 773111222, 'sales@casacolombo.com', '', '', '', '', 1, '2021-10-28 05:13:32', NULL, NULL),
(38, 'Abans Negombo', '145654TGH7', 'Negombo', '', 777888999, 'help@abans.com', '', '', '', '', 1, '2021-10-28 05:13:10', NULL, NULL),
(39, 'Odel Kandy', 'test123', 'Kandy', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123', 111123, 'aa@aa.aa', 'test123', 'https://www.facebook.com/add.a.link/123', 'test123', 'https://www.instagram.com/sithu123', 0, '2021-10-31 04:13:18', NULL, NULL),
(40, 'Glitz', '123', '123', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123', 123, 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu', 1, '2021-11-01 03:11:19', NULL, NULL),
(41, 'Fashion bug test', '123456tes', '123test', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123test', 123123, 'sithuminitest@gmail.com', 'sithutest', 'https://www.facebook.com/add.a.link/test', 'sithutest', 'https://www.instagram.com/sithu123test', 1, '2021-11-01 07:59:08', NULL, NULL),
(42, 'Cargills Colombo', '1234', 'Col 2', '', 777888123, 'hello@cargills.com', 'Cargills', '', 'Cargills', '', 1, '2021-11-05 04:47:20', NULL, NULL),
(43, 'Shopimo', '122456', '123', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123', 23423, 'sithus@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', 0, '2021-11-18 07:34:52', NULL, NULL),
(44, 'blitztest', '112233qwettt', 'testttt', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123ttt', 877777777, 'sithuminittt@gmail.com', 'ttt', 'https://www.facebook.com/sttt', 'ttt', 'https://www.instagram.com/dttt', 0, '2021-11-17 09:25:40', NULL, NULL),
(45, 'Cool Planet', 'test123321', 'test123', 'https://www.google.com/maps/dir/6.9218386,79.8562055/Durdans+Hospital/@6.9118281,79.8490966,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ae2596094db18b9:0xb0ffe5ca94529291!2m2!1d79.8535281!2d6.9019682123123', 7111, 'sithumini@gmail.com', 'sithu', 'https://www.facebook.com/add.a.link/', 'sithu', 'https://www.instagram.com/sithu123', 0, '2021-11-18 07:34:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_user`
--

CREATE TABLE `merchant_user` (
  `mer_user_id` int(11) NOT NULL,
  `mer_id` int(11) NOT NULL,
  `mer_user_username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_user_pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mer_user_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_user`
--

INSERT INTO `merchant_user` (`mer_user_id`, `mer_id`, `mer_user_username`, `mer_user_pass`, `mer_user_status`) VALUES
(1, 2, '752489617', 'aaaaa', 1),
(2, 2, 'smartw', 'aaa', 0),
(3, 2, 'user1', '11111', 1),
(4, 33, 'test123', '123', 1),
(5, 38, 'user01', '11111111', 1),
(6, 38, 'user02', '11111111', 1),
(7, 33, 'keells1', '1bbd886460827015e5d605ed44252251', 1),
(8, 34, 'cafe99', '1bbd886460827015e5d605ed44252251', 1),
(9, 33, 'new1', '202cb962ac59075b964b07152d234b70', 1),
(10, 33, 'new2', '1bbd886460827015e5d605ed44252251', 1),
(11, 34, 'new99', '202cb962ac59075b964b07152d234b70', 1),
(12, 42, 'cargillsmu1', '1bbd886460827015e5d605ed44252251', 1),
(13, 33, 'keells2', '1bbd886460827015e5d605ed44252251', 1),
(14, 33, 'keells3', '1bbd886460827015e5d605ed44252251', 1),
(15, 33, 'sithu', '1bbd886460827015e5d605ed44252251', 1),
(16, 33, 'sithu', '1bbd886460827015e5d605ed44252251', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `disc_id` int(11) NOT NULL,
  `mer_id` int(11) DEFAULT NULL,
  `cust_id` int(11) NOT NULL,
  `trans_amount` double NOT NULL,
  `trans_date` date NOT NULL,
  `trans_cust_confirm` int(11) NOT NULL,
  `trans_mer_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `disc_id`, `mer_id`, `cust_id`, `trans_amount`, `trans_date`, `trans_cust_confirm`, `trans_mer_confirm`) VALUES
(92, 1, 42, 50, 1250, '2021-11-12', 1, 1),
(93, 3, 42, 50, 1300, '2021-11-12', 1, 1),
(94, 4, 42, 50, 3300, '2021-11-12', 1, 1),
(97, 4, 42, 50, 1111, '2021-11-12', 1, 1),
(114, 4, 42, 50, 999, '2021-11-15', 1, 1),
(116, 4, 42, 50, 1250, '2021-11-16', 1, 1),
(120, 7, 34, 23297, 10, '2021-11-21', 1, 1),
(121, 1, 42, 23299, 100, '2021-11-21', 1, 1),
(122, 2, 35, 23299, 200, '2021-11-21', 1, 1),
(123, 2, 35, 23299, 200, '2021-11-21', 1, 1),
(124, 2, 35, 23299, 54, '2021-11-21', 1, 1),
(125, 6, 36, 23299, 100, '2021-11-21', 1, 1),
(126, 1, 42, 23299, 200, '2021-11-22', 1, 1),
(127, 1, 42, 23299, 7, '2021-11-22', 1, 1),
(128, 1, 42, 23299, 100, '2021-11-22', 1, 1),
(136, 1, 42, 23070, 1500, '2021-11-23', 1, 1),
(137, 2, 35, 23070, 2500, '2021-11-23', 1, 1),
(138, 4, 42, 23070, 599, '2021-11-23', 1, 1),
(139, 2, 35, 23297, 111, '2021-11-24', 1, 1),
(140, 1, 42, 23297, 111, '2021-11-24', 1, 1),
(141, 3, 42, 23070, 800, '2021-11-24', 1, 1),
(142, 4, 42, 23070, 200, '2021-11-25', 1, 1),
(143, 4, 42, 23325, 20, '2021-11-28', 1, 1),
(144, 9, 36, 23310, 5000, '2021-11-29', 1, 1),
(145, 14, 35, 23325, 525252, '2021-11-29', 1, 1),
(146, 14, 35, 23336, 212121, '2021-12-01', 1, 1),
(147, 14, 35, 23336, 5000, '2021-12-01', 1, 1),
(148, 9, 36, 23336, 800, '2021-12-01', 1, 1),
(149, 9, 36, 23336, 8000, '2021-12-01', 1, 1),
(150, 21, 33, 23336, 555, '2021-12-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_contact` int(10) NOT NULL,
  `user_companyName` varchar(100) NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_companyName`, `user_status`, `user_type`) VALUES
(1, 'Harshi', 'harshi@gmail.com', 763304183, 'xyz', 2, 'type1'),
(2, 'test', 'harshi@gmail.com', 763304183, 'xyz', 2, 'type2'),
(3, 'test', 'harshi@gmail.com', 763304183, 'xyz', 1, 'type1'),
(4, 'test', 'harshi@gmail.com', 763304183, 'xyz', 1, 'type2'),
(5, 'Watasha', 'harshini@gmail.com', 763304183, 'new com 2', 1, 'type1');

-- --------------------------------------------------------

--
-- Table structure for table `user_masking`
--

CREATE TABLE `user_masking` (
  `user_masking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `masking` varchar(200) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `activated_date` date DEFAULT NULL,
  `deactivated_date` date DEFAULT NULL,
  `sms_balance` varchar(200) DEFAULT NULL,
  `package` text,
  `sms_charge` double DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_masking`
--

INSERT INTO `user_masking` (`user_masking_id`, `user_id`, `masking`, `created_date`, `activated_date`, `deactivated_date`, `sms_balance`, `package`, `sms_charge`, `status`) VALUES
(1, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 2),
(2, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(3, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(4, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(5, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(6, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(7, 1, '123', '2021-12-07', '2021-12-08', '2021-12-11', '12', 'type1', 12344, 1),
(8, 3, 'maks', '2021-12-08', '2021-12-08', '2021-12-10', '1', 'type1', 12344, 1),
(9, 3, 'maks', '2021-12-08', '2021-12-08', '2021-12-10', '1', 'type1', 12344, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `customer_level`
--
ALTER TABLE `customer_level`
  ADD PRIMARY KEY (`customer_level_id`),
  ADD KEY `customer_level_id` (`customer_level_id`),
  ADD KEY `customer_level_id_2` (`customer_level_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`disc_id`),
  ADD KEY `mer_id` (`mer_id`),
  ADD KEY `cus_type` (`cus_type`);

--
-- Indexes for table `disc_categories`
--
ALTER TABLE `disc_categories`
  ADD PRIMARY KEY (`disc_category_id`);

--
-- Indexes for table `locationList`
--
ALTER TABLE `locationList`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`mer_id`),
  ADD KEY `mer_id` (`mer_id`);

--
-- Indexes for table `merchant_user`
--
ALTER TABLE `merchant_user`
  ADD PRIMARY KEY (`mer_user_id`),
  ADD KEY `mer_user_id` (`mer_user_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `trans_id` (`trans_id`),
  ADD KEY `disc_id` (`disc_id`),
  ADD KEY `mer_id` (`mer_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_masking`
--
ALTER TABLE `user_masking`
  ADD PRIMARY KEY (`user_masking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_level`
--
ALTER TABLE `customer_level`
  MODIFY `customer_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `disc_categories`
--
ALTER TABLE `disc_categories`
  MODIFY `disc_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `locationList`
--
ALTER TABLE `locationList`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `mer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `merchant_user`
--
ALTER TABLE `merchant_user`
  MODIFY `mer_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_masking`
--
ALTER TABLE `user_masking`
  MODIFY `user_masking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`disc_id`) REFERENCES `discount` (`disc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`mer_id`) REFERENCES `merchant` (`mer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
