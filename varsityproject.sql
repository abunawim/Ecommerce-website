-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2015 at 08:20 AM
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
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `created`) VALUES
(23, 'Shirt', 'For man ', '2014-12-11'),
(24, 'Pant', 'For man ', '2014-12-11'),
(25, 'Panjabi', 'For man ', '2014-12-11'),
(26, 'Salwar kameez', 'For woman', '2014-12-11');

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
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(32) NOT NULL,
  `product_code` varchar(64) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `quentity` varchar(32) NOT NULL,
  `username` varchar(64) NOT NULL,
  `taka` varchar(64) NOT NULL,
  `total_taka` varchar(64) NOT NULL,
  PRIMARY KEY (`order_id`,`product_code`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `product_code`, `product_name`, `quentity`, `username`, `taka`, `total_taka`) VALUES
(1, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(1, 's02', 'T-shart', '1', 'Asad', '280', '880'),
(1, 's04', 'smart shirt', '2', 'Asad', '999', '2878'),
(2, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(3, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(4, 'p03', 'Jiins pant', '1', 'Asad', '888', '3168'),
(4, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(4, 's02', 'T-shart', '6', 'Asad', '280', '2280'),
(5, 'p03', 'Jiins pant', '1', 'Asad', '888', '3168'),
(5, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(5, 's02', 'T-shart', '6', 'Asad', '280', '2280'),
(6, 's01', 'Formal Shirt', '1', 'Asad', '600', '600'),
(7, 'p12', 'Formal pant ', '4', 'Asad', '344', '1976'),
(7, 's01', 'Formal Shirt', '1', 'Asad', '600', '600');

-- --------------------------------------------------------

--
-- Table structure for table `program_project`
--

CREATE TABLE IF NOT EXISTS `program_project` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(16) NOT NULL,
  `product_name` varchar(32) NOT NULL,
  `short_descipt` varchar(64) NOT NULL,
  `product_code` varchar(64) NOT NULL,
  `price` double NOT NULL,
  `available_product` int(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `program_project`
--

INSERT INTO `program_project` (`product_id`, `category_id`, `product_name`, `short_descipt`, `product_code`, `price`, `available_product`, `image`) VALUES
(10, 23, 'Formal Shirt', 'New item', 's01', 600, 20, '1418273212.jpg'),
(11, 23, 'T-shart', 'New item', 's02', 280, 355, '1418274852.jpg'),
(12, 23, 'Normal Shirt', 'Vary comfortable', 's03', 499, 233, '1418274992.jpg'),
(13, 23, 'smart shirt', 'For smart person', 's04', 999, 455, '1418275158.jpg'),
(14, 24, 'Formal pant ', 'good item', 'p12', 344, 45, '1418275769.jpg'),
(16, 24, 'Jiins pant', 'vary nice', 'p03', 888, 50, '1418277071.jpg'),
(17, 24, 'Loose pant', 'vary nice', 'p04', 1500, 32, '1418277207.jpg'),
(27, 26, 'Latest Item', 'Good product', 'sl_01', 3454, 23, '1419867253.jpg'),
(28, 25, 'Large size', 'Good product', 'pan_01', 765, 55, '1419867430.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userresgistation`
--

INSERT INTO `userresgistation` (`cus_id`, `username`, `Phone`, `address`, `email`, `status`, `password`) VALUES
(5, 'abu', 1827328014, '<p>Saver</p>', 'daritamim66@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(11, 'Asad', 1827328014, '<p>Dhanmondi</p>', 'abunawim@yahoo.com', 1, '202cb962ac59075b964b07152d234b70');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ven_id`, `username`, `Phone`, `address`, `email`, `status`, `password`) VALUES
(2, 'Nawim', 1827301458, '<p>Rajbai</p>', 'abunawim@yahoo.com', 1, 'asda'),
(4, 'Sayed', 1827328014, '<p>Dhanmondi</p>', 'abunawim@yahoo.com', 1, 'fh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
