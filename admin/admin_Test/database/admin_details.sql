-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 03:10 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE IF NOT EXISTS `admin_details` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `created` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `username`, `password`, `emailid`, `fname`, `lname`, `mobileno`, `created`) VALUES
(1, 'nadee', '123', 'nadeesenavirathna@gmail.com', 'nadee', 'sansari', 0, ''),
(5, 'test', '', 't@gmail.com', '', '', 89, '2016-09-02 11:03:58'),
(6, 'test1', '', 't@gmail.com', '', '', 43, '2016-09-02 11:04:37'),
(7, 'n', '1', 'nade@gmail.com', '', '', 5, '2016-09-02 11:09:12'),
(8, 'n', '22', 'nade@gmail.com', '', '', 0, '2016-09-03 09:34:47'),
(9, 'b', '3', 'nade@gmail.com', '', '', 55, '2016-09-03 09:35:45'),
(10, 'n', '6', 'nade@gmail.com', '', '', 88, '2016-09-03 09:37:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
