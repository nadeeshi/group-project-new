-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 04:03 PM
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
-- Table structure for table `research_details`
--

CREATE TABLE IF NOT EXISTS `research_details` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `researchName` varchar(255) NOT NULL,
  `assessmentNames` varchar(255) NOT NULL,
  `kingdom` varchar(255) NOT NULL,
  `phylum` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `orderr` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `taxonName` varchar(255) NOT NULL,
  `synonyms` varchar(255) NOT NULL,
  `commonNames` varchar(255) NOT NULL,
  `taxonomicNotes` varchar(255) NOT NULL,
  `redListCategory` varchar(255) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `more1` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `countryOccurrences` varchar(255) NOT NULL,
  `more2` varchar(255) NOT NULL,
  `population` varchar(255) NOT NULL,
  `h_E` varchar(255) NOT NULL,
  `threats` varchar(255) NOT NULL,
  `conservationActions` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL,
  `bibliography` varchar(255) NOT NULL,
  `citation` varchar(255) NOT NULL,
  `disclaimer` varchar(255) NOT NULL,
  `eResources` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `research_details`
--

INSERT INTO `research_details` (`id`, `researchName`, `assessmentNames`, `kingdom`, `phylum`, `class`, `orderr`, `family`, `taxonName`, `synonyms`, `commonNames`, `taxonomicNotes`, `redListCategory`, `criteria`, `more1`, `description`, `countryOccurrences`, `more2`, `population`, `h_E`, `threats`, `conservationActions`, `credits`, `bibliography`, `citation`, `disclaimer`, `eResources`, `others`, `created`) VALUES
(3, 'test', 'test', 't', '', 't', 't', 'y', '', 'tt', '', '', 'u', 'u', '', '', '', '', 'jjj', '', '', 'jjj', '', '', '', '', '', '', '2016-09-08 18:20:09'),
(4, 'Lesser Dog-faced Fruit Bat', 'Csorba', 'Animalia', 'Chordata', 'Mammalia', 'Chiroptera', 'Pteropodidae', 'Cynopterus brachyotis', 'Cynopterus brachysoma\r\nCynopterus marginatus variety andamanensis', '', 'The taxonomic situation throughout the range is confused and future taxonomic revision may reveal\r\nthat there are a number of cryptic species allocated to Cynopterus brachyotis. Earlier included angulatus\r\nMiller, 1898 (Ellerman and Morrison-Scott 1951).', 'Least Concern ver 3.1', 'Least Concern ver 3.1', '', 'This widespread species ranges from South Asia, through parts of southern China to parts of Southeast\r\nAsia.', 'Native: Cambodia; China; India (Andhra Pradesh, Bihar, Goa, Karnataka, Maharashtra, Nagaland, Tamil\r\nNadu); Indonesia (Sulawesi, Sumatera); Lao People''s Democratic Republic; Malaysia; Myanmar;\r\nSingapore; Sri Lanka; Thailand; Timor-Leste; Viet Nam', '', 'In northeast India, the population is stable and it is common but not as abundant as Cynopterus sphinx\r\n(Tarapada Bhattacharyya pers. comm. June 2005), while in southern India it is rare (C. Srinvasulu pers.\r\ncomm. September, 2007). ', '', '', 'Other than further taxonomic studies, no conservation actions are currently needed for the species as a\r\nwhole. It is present in many protected areas throughout its range.', '', 'Alcala, A. C. and Alviola, P. 1970. Notes on birds and mammals of Boracay, Caluya, Carabao, Semirara,\r\nand Sibay islands, Philippines. Silliman Journal 17: 444-454.\r\nAul, B. and Vijaykumar, S. P. 2003. Distribution and conservation status of the bats (Ord', '', '', '', '', '2016-09-08 19:04:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
