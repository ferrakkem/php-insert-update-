-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2014 at 06:01 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address_detail` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `division_id`, `district_id`, `postal_code`, `address_detail`, `user_id`) VALUES
(7, 0, 0, 1230, 'Dhaka,bangladesh', 0),
(8, 0, 0, 0, '', 0),
(9, 0, 0, 0, '', 0),
(10, 0, 0, 1231, 'Dhaka-1231', 0),
(11, 0, 0, 1234, 'asdfg', 0),
(12, 0, 0, 1234, 'Comilla', 0),
(13, 0, 0, 1230, 'Dhaka-1230', 0),
(14, 0, 0, 1234, 'Dhaka-1', 0),
(15, 0, 0, 1239, 'Comilla', 0),
(16, 0, 0, 23424, 'chittagoond', 0),
(17, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Faridpur'),
(2, ''),
(3, 'Gazipur'),
(4, 'Gazipur'),
(5, 'Gazipur'),
(6, 'Gazipur'),
(7, 'Gazipur'),
(8, 'Gazipur'),
(9, 'Faridpur'),
(10, 'Gazipur'),
(11, 'Faridpur'),
(12, ''),
(13, ''),
(14, 'Faridpur'),
(15, 'Faridpur'),
(16, 'Faridpur'),
(17, 'Faridpur'),
(18, 'Faridpur'),
(19, 'Faridpur'),
(20, 'chittagong '),
(21, '');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(100) NOT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`) VALUES
(7, 'Dhaka Division'),
(8, 'Chittagong Division'),
(9, 'Khulna Division'),
(10, 'Rajshahi Division'),
(11, 'Rangpur Division'),
(12, 'Dhaka Division'),
(13, 'Sylhet Division'),
(14, 'Dhaka Division'),
(16, 'Dhaka Division'),
(17, 'Dhaka Division'),
(18, 'Dhaka Division'),
(19, 'Dhaka Division'),
(20, 'Dhaka Division'),
(21, 'Dhaka Division'),
(22, 'Dhaka Division'),
(23, 'Chittagong Division'),
(24, 'Dhaka Division'),
(27, 'Dhaka Division'),
(28, 'Dhaka Division'),
(29, 'Dhaka Division'),
(30, 'Dhaka Division'),
(31, 'Dhaka Division'),
(32, 'Dhaka Division'),
(33, 'Chittagong'),
(34, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(20) DEFAULT NULL,
  `img_loc` varchar(100) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `age`, `gender`, `profession`, `img_loc`, `address_id`, `user_id`) VALUES
('ferrakkem', '123456', 21, 'Male', NULL, NULL, NULL, 3),
('Bhuiyan', 'bhuiyan', 20, 'Male', NULL, NULL, NULL, 4),
('Mansur', 'qwer', 20, 'Male', NULL, NULL, NULL, 5),
('Manun', 'manun', 18, 'Male', NULL, NULL, NULL, 7),
('Ammar', 'ammar', 23, 'Male', NULL, NULL, NULL, 8),
('Ferrakkem Bhuiyan', 'ferrakkem', 21, 'Male', NULL, NULL, NULL, 11),
('Rajib', 'rajib', 21, 'Male', NULL, NULL, NULL, 12),
('Jabed', 'jabed', 23, 'Female', NULL, NULL, NULL, 13),
('Niru', 'niru', 24, 'Female', NULL, NULL, NULL, 14),
('Shakil', 'shakil', 24, 'Female', NULL, NULL, NULL, 15),
('Isra', 'isra', 21, 'Female', NULL, NULL, NULL, 16),
('Sojul', '12345', 21, 'Male', NULL, NULL, NULL, 17),
('Bito', 'bito', 23, 'Male', NULL, NULL, NULL, 20),
('sadly', 'sadly', 21, 'Male', NULL, NULL, NULL, 31),
('fatema', '12345678', 21, 'Female', NULL, NULL, NULL, 37),
('mahid', '123456', 21, 'Male', NULL, NULL, NULL, 38);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
