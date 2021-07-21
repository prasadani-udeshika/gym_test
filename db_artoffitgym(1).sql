-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2021 at 01:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artoffitgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_birthday` varchar(200) DEFAULT NULL,
  `customer_gender` varchar(200) DEFAULT NULL,
  `customer_nic` varchar(200) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `customer_email` varchar(200) DEFAULT NULL,
  `customer_phone` int(12) DEFAULT NULL,
  `customer_height` float DEFAULT NULL,
  `customer_weight` float DEFAULT NULL,
  `customer_description` varchar(255) DEFAULT NULL,
  `customer_img` varchar(100) DEFAULT NULL,
  `customer_status` int(1) DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_birthday`, `customer_gender`, `customer_nic`, `customer_address`, `customer_email`, `customer_phone`, `customer_height`, `customer_weight`, `customer_description`, `customer_img`, `customer_status`, `created_time`) VALUES
(19, 'isuru kumara', '11224500', '2021-07-07', 'Male', 'Female', 'Male', 0, 0, 0, '11224500', 'idz4pv1_1djuoa935kqdgs7fmdlj9r27do1t7jl2_1626285844.jpeg', 0, '2021-07-14 23:34:04'),
(22, 'dinal', '2021-07-15', 'Male', '1235', 'ja elas', 'as@gmssil.com', 12345, 178, 78, 'tt6t', 'idqss89_9va4ghos35h6nbuiieqf3vcp1o2n7jbl_1626289804.jpeg', 0, '2021-07-15 00:40:04'),
(25, 'ghjmhb', '2021-07-15', 'Male', '2356', 'gggg', 'aw@gmail.com', 1235, 178, 89, 'ghkh', 'idfwkum_n1fsk4mdvj4u95nu0eq1rndopusrggej_1626456422.jpg', 0, '2021-07-16 22:57:02'),
(26, 'sunil perera', '1996-06-04', 'Male', '123456789V', 'ja-ela', 'as@gmail.com', 1234567890, 178, 89, 'testing', 'idu7gwc_4fp0hfcj5ve3qjqr8l8i7nqmc3lcndqr_1626824104.jpg', 0, '2021-07-21 05:05:05'),
(27, 'Nimale', '1996-06-03', 'Female', '123456789', 'bopitiya', 'as@gmail.com', 112245678, 178, 89, 'testing', 'iduy2fy_noctmc3cscip2o29kc2k94cvbkt0q7ou_1626825935.jpg', 0, '2021-07-21 05:35:35'),
(28, 'kamal silva', '2021-07-01', 'Male', '123456789', 'bopitiya', 'as@gmail.com', 1234567890, 178, 89, 'testind', 'idyjjyi_924avdgk172lnkjioq926vo1g78haveo_1626828564.jpg', 0, '2021-07-21 06:19:24'),
(29, 'locahana', '2021-07-14', 'Male', '123456789', 'ja-ela', 'lo@gmail.com', 123456789, 180, 90, 'hello', 'id2b71r_hefna8r7t2hi130ittvbikeir8av74uv_1626830872.jpg', 0, '2021-07-21 06:57:52'),
(30, 'sunimal', '2021-07-21', 'Male', '134567890', 'kadana', 'fa@gmail.com', 77552345, 178, 89, 'testing', 'ideyla3_qnmjm2f3b5vhfsc4h7ohap5qvtk080f0_1626831566.jpg', 0, '2021-07-21 07:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_allocate`
--

DROP TABLE IF EXISTS `tbl_payment_allocate`;
CREATE TABLE IF NOT EXISTS `tbl_payment_allocate` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `customer_id` int(200) NOT NULL,
  `payment_id` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment_allocate`
--

INSERT INTO `tbl_payment_allocate` (`id`, `customer_id`, `payment_id`) VALUES
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_type`
--

DROP TABLE IF EXISTS `tbl_payment_type`;
CREATE TABLE IF NOT EXISTS `tbl_payment_type` (
  `payment_id` int(20) NOT NULL AUTO_INCREMENT,
  `payment_name` varchar(200) NOT NULL,
  `payment_amount` varchar(200) NOT NULL,
  `payement_duration` varchar(200) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment_type`
--

INSERT INTO `tbl_payment_type` (`payment_id`, `payment_name`, `payment_amount`, `payement_duration`, `payment_status`) VALUES
(1, '3 months  ', '100012', '2', '0'),
(2, '6 mothns type', '2000', '2', '0'),
(3, '9 months type', '9000', '3', '0'),
(4, 'monthly fee', '1200', '1', '0'),
(5, 'testing', '2000', '2', '0'),
(6, 'testng 2', '2000', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seasonal_products`
--

DROP TABLE IF EXISTS `tbl_seasonal_products`;
CREATE TABLE IF NOT EXISTS `tbl_seasonal_products` (
  `sp_id` int(5) NOT NULL AUTO_INCREMENT,
  `sp_name` varchar(100) DEFAULT NULL,
  `sp_description` varchar(255) DEFAULT NULL,
  `sp_price` varchar(50) DEFAULT NULL,
  `sp_active_status` int(1) DEFAULT NULL,
  `sp_image` varchar(100) DEFAULT NULL,
  `sp_cover_image` varchar(100) DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_seasonal_products`
--

INSERT INTO `tbl_seasonal_products` (`sp_id`, `sp_name`, `sp_description`, `sp_price`, `sp_active_status`, `sp_image`, `sp_cover_image`, `created_time`) VALUES
(2, 'testing', 'first testing', '10000', 0, NULL, NULL, '2021-06-06 01:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `account_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `active_status` int(1) DEFAULT NULL,
  `block_status` int(1) DEFAULT NULL,
  `account_type` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`account_id`, `username`, `password`, `full_name`, `active_status`, `block_status`, `account_type`) VALUES
(1, 'treCoops', '875dcec5fc657baa4102df9167b97b2d00ab54fff15cce39964f4e445252063d', 'Trevo Gayan', 1, 0, 'ADMIN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
