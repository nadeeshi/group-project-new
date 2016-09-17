-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 04:05 PM
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
-- Table structure for table `researcher_details`
--

CREATE TABLE IF NOT EXISTS `researcher_details` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobileno` int(30) NOT NULL,
  `created` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `researcher_details`
--

INSERT INTO `researcher_details` (`id`, `username`, `emailid`, `fname`, `lname`, `mobileno`, `created`, `password`) VALUES
(1, 'test2', 'r@gmai.com', '', '', 54, '2016-08-31 07:36:38', ''),
(2, 'new', 'nade@gmail.com', '', '', 9, '2016-09-08 10:30:10', ''),
(3, 'nadee', 'nade@gmail.com', '', '', 0, '2016-09-10 23:15:11', ''),
(4, 'nadee', 'nade@gmail.com', '', '', 0, '2016-09-10 23:15:24', ''),
(5, 'um', 'nade@gmail.com', '', '', 0, '2016-09-10 23:16:24', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
