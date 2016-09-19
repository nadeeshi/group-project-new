-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 09:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `batinsert`
--

CREATE TABLE IF NOT EXISTS `batinsert` (
  `scientific_name` varchar(100) NOT NULL,
  `bat_order` varchar(50) NOT NULL,
  `kingdom` varchar(50) NOT NULL,
  `genus` varchar(50) NOT NULL,
  `phylum` varchar(50) NOT NULL,
  `family` varchar(50) NOT NULL,
  `sub_family` varchar(50) NOT NULL,
  `bat_class` varchar(50) NOT NULL,
  `species` varchar(100) NOT NULL,
  `common_names` varchar(500) NOT NULL,
  `synonyms` varchar(500) NOT NULL,
  `roost` varchar(500) NOT NULL,
  `conservation_status` varchar(1000) NOT NULL,
  `country_occurence` varchar(1000) NOT NULL,
  `feeding` varchar(1000) NOT NULL,
  `breeding` varchar(1000) NOT NULL,
  `threats` varchar(1000) NOT NULL,
  `conservation_action` varchar(1000) NOT NULL,
  `measurements` varchar(500) NOT NULL,
  `other_details` varchar(1000) NOT NULL,
  PRIMARY KEY (`scientific_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batinsert`
--

INSERT INTO `batinsert` (`scientific_name`, `bat_order`, `kingdom`, `genus`, `phylum`, `family`, `sub_family`, `bat_class`, `species`, `common_names`, `synonyms`, `roost`, `conservation_status`, `country_occurence`, `feeding`, `breeding`, `threats`, `conservation_action`, `measurements`, `other_details`) VALUES
('hj', 'ki', 'fgrhrth', 'bhjbduvgu', 'dsvgtrj', 'hythytjtj', 'yhjytjytjt', 'rthrtuij', 'guhui', 'khuihidsnvbufdyu', 'gyugyuhb', 'hjbhj', 'bhb', 'bjhbjhbhb', 'hubjjb', 'jhbhjb', 'hjb', 'bbjbjb', 'bb', 'bhjb'),
('kk', 'kk', 'k', 'k', 'k', 'kk', 'k', 'k', 'kk', 'k', 'k', 'kk', 'k', 'kk', 'k', 'k', 'kk', 'k', 'k', 'k'),
('test', 'test', 'dddddddddddddddddd', 'test', 'test', 'test', 'test', 'test', 'test', 'test  ', 'test  ', '  test', 'test', 'test  ', '  test', 'test', 'test', '  test', 'test', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
