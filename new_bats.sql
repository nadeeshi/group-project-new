-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 11:23 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_bats`
--

CREATE TABLE IF NOT EXISTS `new_bats` (
  `scientific_name` varchar(20) NOT NULL,
  `bat_order` varchar(20) NOT NULL,
  `kingdom` varchar(20) NOT NULL,
  `genus` varchar(20) NOT NULL,
  `phylum` varchar(20) NOT NULL,
  `family` varchar(25) NOT NULL,
  `sub_family` varchar(25) NOT NULL,
  `bat_class` varchar(50) NOT NULL,
  `common_names` varchar(1000) NOT NULL,
  `synonyms` varchar(1000) NOT NULL,
  `roots` varchar(1000) NOT NULL,
  `red_list_cat` varchar(50) NOT NULL,
  `country_occurence` varchar(1000) NOT NULL,
  `population` varchar(1000) NOT NULL,
  `feeding` varchar(1000) NOT NULL,
  `reprodution` varchar(1000) NOT NULL,
  `threats` varchar(1000) NOT NULL,
  `conservation_action` varchar(1000) NOT NULL,
  `measurements` varchar(1000) NOT NULL,
  `authority` varchar(1000) NOT NULL,
  `bibiliogrphy` varchar(1000) NOT NULL,
  `reference` varchar(1000) NOT NULL,
  `other_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_bats`
--

INSERT INTO `new_bats` (`scientific_name`, `bat_order`, `kingdom`, `genus`, `phylum`, `family`, `sub_family`, `bat_class`, `common_names`, `synonyms`, `roots`, `red_list_cat`, `country_occurence`, `population`, `feeding`, `reprodution`, `threats`, `conservation_action`, `measurements`, `authority`, `bibiliogrphy`, `reference`, `other_details`) VALUES
('chjsbjcb', 'bjbj', 'j', 'j', 'bb', 'jbjb', 'jb', 'j', 'bjhbjbui', 'uihiu', 'huh', 'ihh', 'ihiu', 'hiuhiuh', 'hiuhi', 'hih', 'hiuh', 'huihih', 'hiuhiu', 'hiuh', 'hiuh', 'hiuhi', 'huihiu'),
('nkjnui', 'hiuh', 'njkn', 'nj', 'nnjkn', 'nin', 'njkn', 'nn', 'huih', 'iiuhiu', 'huih', 'ihi', 'iuhiu', 'uihi', 'huih', 'huihui', 'huih', '8jy8', 'huhu', 'hhuh', 'bubuy', 'bubu', 'buhb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
