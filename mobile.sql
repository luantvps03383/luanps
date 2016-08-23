-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2014 at 09:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerId` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `gender` int(1) NOT NULL,
  `username` varchar(24) NOT NULL,
  `pass` varchar(64) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `name`, `gender`, `username`, `pass`) VALUES
(1, 'phambinh', 1, 'quocbinh', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `mobileId` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `price` int(16) NOT NULL,
  PRIMARY KEY (`mobileId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`mobileId`, `name`, `image`, `price`) VALUES
(1, 'Nokia 900', 'nokia900.jpg', 10000000),
(2, 'SamSung Galaxy S5', 'sss5.jpg', 15999998),
(3, 'Iphone 5s', 'ip5s.jpg', 14900000),
(4, 'Galaxy Note 3', 'note3.jpg', 11000000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `datecreate` varchar(64) NOT NULL,
  `total` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `datecreate`, `total`, `customerId`) VALUES
(22, '2014-07-29', 55999998, 1),
(23, '2014-07-29', 55999998, 1),
(24, '2014-07-29', 55999998, 1),
(25, '2014-07-29', 15999998, 0),
(26, '2014-07-29', 10000000, 1),
(27, '2014-07-29', 34900000, 1),
(28, '2014-07-29', 35999998, 1),
(29, '2014-07-29', 20000000, 1),
(30, '2014-07-29', 20000000, 1),
(31, '2014-07-29', 20000000, 1),
(32, '2014-07-29', 20000000, 1),
(33, '2014-07-29', 20000000, 1),
(34, '2014-07-30', 141899998, 1),
(35, '2014-07-30', 141899998, 1),
(36, '2014-07-30', 141899998, 1),
(37, '2014-07-30', 20000000, 1),
(38, '2014-07-30', 10000000, 1),
(39, '2014-07-30', 10000000, 1),
(40, '2014-07-30', 10000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderId` int(8) NOT NULL,
  `mobileId` int(8) NOT NULL,
  `price` int(16) NOT NULL,
  `quanlity` int(16) NOT NULL,
  `total` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderId`, `mobileId`, `price`, `quanlity`, `total`) VALUES
(23, 1, 10000000, 4, 40000000),
(23, 2, 15999998, 1, 15999998),
(24, 1, 10000000, 4, 40000000),
(24, 2, 15999998, 1, 15999998),
(25, 2, 15999998, 1, 15999998),
(26, 1, 10000000, 1, 10000000),
(27, 1, 10000000, 2, 20000000),
(27, 3, 14900000, 1, 14900000),
(28, 1, 10000000, 2, 20000000),
(28, 2, 15999998, 1, 15999998),
(29, 1, 10000000, 2, 20000000),
(30, 1, 10000000, 2, 20000000),
(31, 1, 10000000, 2, 20000000),
(32, 1, 10000000, 2, 20000000),
(33, 1, 10000000, 2, 20000000),
(34, 1, 10000000, 10, 100000000),
(34, 2, 15999998, 1, 15999998),
(34, 3, 14900000, 1, 14900000),
(34, 4, 11000000, 1, 11000000),
(35, 1, 10000000, 10, 100000000),
(35, 2, 15999998, 1, 15999998),
(35, 3, 14900000, 1, 14900000),
(35, 4, 11000000, 1, 11000000),
(36, 1, 10000000, 10, 100000000),
(36, 2, 15999998, 1, 15999998),
(36, 3, 14900000, 1, 14900000),
(36, 4, 11000000, 1, 11000000),
(37, 1, 10000000, 2, 20000000),
(38, 1, 10000000, 1, 10000000),
(39, 1, 10000000, 1, 10000000),
(40, 1, 10000000, 1, 10000000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
