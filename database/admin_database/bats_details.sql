-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 04:04 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bats_details`
--

INSERT INTO `bats_details` (`id`, `scientificName`, `kingdom`, `phylum`, `class`, `orderr`, `genus`, `family`, `subFamily`, `speciesAuthority`, `commonNames`, `synonyms`, `redListCategory`, `distribution`, `oioCountries`, `population`, `roosts`, `commonFood`, `bibliography`, `conservation`, `created`) VALUES
(3, 'Trosmgsr', 'jkk', '', '', '', '', 'klkl', '', '', '', '', '', '', '', '', '', 'hh', 'jj', 'll', '2016-09-03 11:22:54'),
(4, 'test2', 'nana', 'akkaka', 'kkakaka', 'kakkaka', 'akkaka', 'kakkak', 'kakka', 'kakakak', 'opskjdspdjdaao', 'kjllljoop', 'kkakka', 'jkdpoadopoa[a[-w-q-=wq-wqospozxpxzox', 'nkaloaldoooooooop', '', 'aoaoao', '', '', 'nkljoppop', '2016-09-08 16:47:10'),
(5, 'Test', 'test', '', '', '', '', 'test', '', '', '', '', '', '', '', '', '', '', '', 'test', '2016-09-08 22:47:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
