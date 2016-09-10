-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2016 at 06:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `aa`
--

CREATE TABLE IF NOT EXISTS `aa` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`id`, `name`, `city`) VALUES
(1, 'ANT', 'moratuwa,ratnapura'),
(2, 'nuwan', 'kandy'),
(3, 'chama', 'ratnapura'),
(4, 'chamara', 'panadura');

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

-- --------------------------------------------------------

--
-- Table structure for table `bats_details`
--

CREATE TABLE IF NOT EXISTS `bats_details` (
  `id` int(80) NOT NULL AUTO_INCREMENT,
  `scientificName` varchar(255) NOT NULL,
  `kingdom` varchar(255) NOT NULL,
  `phylum` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `orderr` varchar(255) NOT NULL,
  `genus` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `subFamily` varchar(255) NOT NULL,
  `speciesAuthority` varchar(255) NOT NULL,
  `commonNames` varchar(255) NOT NULL,
  `synonyms` varchar(255) NOT NULL,
  `redListCategory` varchar(255) NOT NULL,
  `distribution` varchar(255) NOT NULL,
  `oioCountries` varchar(255) NOT NULL,
  `population` varchar(255) NOT NULL,
  `roosts` varchar(255) NOT NULL,
  `commonFood` varchar(255) NOT NULL,
  `bibliography` varchar(255) NOT NULL,
  `conservation` varchar(255) NOT NULL,
  `created` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bats_details`
--

INSERT INTO `bats_details` (`id`, `scientificName`, `kingdom`, `phylum`, `class`, `orderr`, `genus`, `family`, `subFamily`, `speciesAuthority`, `commonNames`, `synonyms`, `redListCategory`, `distribution`, `oioCountries`, `population`, `roosts`, `commonFood`, `bibliography`, `conservation`, `created`) VALUES
(2, 'n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hh', 'jj', 'll', '2016-09-03 11:15:06'),
(3, 'n', 'jkk', '', '', '', '', 'klkl', '', '', '', '', '', '', '', '', '', 'hh', 'jj', 'll', '2016-09-03 11:22:54');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `researcher_details`
--

INSERT INTO `researcher_details` (`id`, `username`, `emailid`, `fname`, `lname`, `mobileno`, `created`, `password`) VALUES
(1, 'test1', 'r@gmai.com', '', '', 54, '2016-08-31 07:36:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `research_details`
--

CREATE TABLE IF NOT EXISTS `research_details` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `researchName` varchar(255) NOT NULL,
  `assessmentNames` varchar(255) NOT NULL,
  `batTaxonomy` varchar(255) NOT NULL,
  `created` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `research_details`
--

INSERT INTO `research_details` (`id`, `researchName`, `assessmentNames`, `batTaxonomy`, `created`) VALUES
(1, 'n', 'kk', 'kk', ''),
(2, 'nn', 'nnn', 'mm', '2016-09-03 09:56:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
