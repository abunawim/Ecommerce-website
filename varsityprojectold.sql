-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2014 at 04:08 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `varsityproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `pro_id` int(11) NOT NULL,
  `product_name` int(11) NOT NULL,
  `short_descipt` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `available_product` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `created`) VALUES
(13, 'DCC(Dhaka)', 'Dhaka city collage (DCC)', '2014-09-08'),
(16, 'state', 'state university of bangladesh', '2014-11-03'),
(18, 'nawim', 'studnt ', '2014-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT '"active","inactive"',
  `add_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`admin_id`, `user_name`, `user_pass`, `user_mail`, `status`, `add_date`, `update_date`) VALUES
(1, 'nawim', '202cb962ac59075b964b07152d234b70', 'nawim@gmail.com', 'active', '2012-01-05', '2014-11-16 06:49:31'),
(2, 'aditya', 'ed7783be65649c6be792f63da74e1b88', 'aditya.cse04@yahoo.com', 'active', '2012-01-05', '2012-01-08 12:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(64) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(128) NOT NULL,
  `short_descipt` text NOT NULL,
  `price` int(128) NOT NULL,
  `available_product` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `program_project`
--

CREATE TABLE IF NOT EXISTS `program_project` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(32) NOT NULL,
  `short_descipt` varchar(64) NOT NULL,
  `price` double NOT NULL,
  `available_product` int(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `program_project`
--

INSERT INTO `program_project` (`category_id`, `product_name`, `short_descipt`, `price`, `available_product`, `image`) VALUES
(13, 'nawim', 'varyyy nice', 1212, 12, '1415671175.jpg'),
(16, 'adas', 'sds', 1212, 12, '1416120611.jpg'),
(17, 'ggggggggggggggggg', 'ggggggggggggggg', 444444444, 4, '1416733747.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userresgistation`
--

CREATE TABLE IF NOT EXISTS `userresgistation` (
  `cus_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `Phone` int(64) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `status` int(8) NOT NULL DEFAULT '1',
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `userresgistation`
--

INSERT INTO `userresgistation` (`cus_id`, `username`, `Phone`, `address`, `email`, `status`, `password`) VALUES
(5, 'abu', 2147483647, '<p>dfgdf</p>', 'daritamim66@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(6, 'admin', 0, 'dfgdf', 'atikulislam099@gmail.com', 1, '8d509c28896865f8640f328f30f15721'),
(7, 'abunawimsub@gmail.comaaaaaaa', 0, 'dfgdf', 'abunawim@yahoo.com', 1, '7fa1391c241f8d2433968ada80840853'),
(8, 'abunawimsub@gmail.com', 0, 'dfgdf', 'abunawim@yahoo.com', 1, '8188f04084410e7c00b9907ca6002106'),
(9, 'admin', 0, '0000', 'mmd.abusayed@yahoo.com', 1, '8ddcff3a80f4189ca1c9d4d902c3c909'),
(10, 'asesdur zama', 10283, '<p>dddddddddd</p>', 'abunawim@yahoo.com', 0, 'asasa'),
(11, 'asesdur zama', 10283, 'dddddddddd', 'abunawim@yahoo.com', 1, 'c8f0c44aa8e80c6e39d5f9da62c75ff1'),
(12, 'atikul isla,', 1827328014, '236/2 , dhanmondi', 'daritamim66@gmail.com', 1, '6f77fdb623b26afadf018131439178ef'),
(13, 'jule', 1827328014, '<p>saver</p>', 'abunawim@yahoo.com', 0, '8a68dc3e925eacf92633be230722a140');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `ven_id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `Phone` int(64) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `status` int(8) NOT NULL DEFAULT '1',
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`ven_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ven_id`, `username`, `Phone`, `address`, `email`, `status`, `password`) VALUES
(2, 'abunawimsub@gmail.com', 0, 'dfgdf', 'abunawim@yahoo.com', 1, 'asda'),
(3, 'abunawimsub@gmail.com', 0, 'dfgdf', 'abunawim@yahoo.com', 1, ''),
(4, 'abunawimsub@gmail.com', 0, 'fhfg', 'fh', 1, 'fh'),
(9, 'abunawimsub@gmail.com', 0, 'dfgdf', 'abunawim@yahoo.com', 1, ''),
(13, '    tttyr', 0, '    ryr', 'ryr@gmail.coom', 1, 'vnn'),
(14, 'nayeeeeeeeeeee', 122222222, '<p>dhammondi</p>', 'atikulislam099@gmail.com', 0, '9fc58423aa0341dd75c031e1b2fabe0a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
