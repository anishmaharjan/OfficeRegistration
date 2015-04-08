-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2015 at 03:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `officereg`
--

-- --------------------------------------------------------

--
-- Table structure for table `anish`
--

CREATE TABLE IF NOT EXISTS `anish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(255) NOT NULL,
  `start_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `anish`
--

INSERT INTO `anish` (`id`, `staff_id`, `start_time`, `end_time`) VALUES
(1, 1, '2014-09-09 10:00:00', '2014-09-09 13:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `phone` double NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `work`, `phone`, `password`) VALUES
(1, 'Anish', 'Computer', 9841030586, '7f266025dc45f2e14b2415f475cce468'),
(4, 'test1', 'test1', 123, ''),
(5, 'test2', 'test2', 123, ''),
(6, 'bottle', 'bottle', 26264235, '3a385ac07dcec4dde1a4ca47a9802c96');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
