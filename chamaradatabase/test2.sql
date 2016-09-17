-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 05:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE IF NOT EXISTS `aa` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`id`, `name`, `city`) VALUES
(1, 'ANT', 'moratuwa,ratnapura'),
(2, 'nuwan', 'kandy'),
(3, 'chama', 'ratnapura,jaffna,boralanda'),
(4, 'chamara', 'panadura,ratmalana'),
(5, 'cat', 'ella,sigiriya');

-- --------------------------------------------------------

--
-- Table structure for table `fulldemo`
--

CREATE TABLE IF NOT EXISTS `fulldemo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fulldemo`
--

INSERT INTO `fulldemo` (`id`, `name`, `city`, `location`, `description`) VALUES
(7, 'cn', 'moratuwa,mirissa', 'photos/131.jpg', 'asjkdsa askjdsak sajkdjs akjd dajd'),
(8, 'cnm', 'kandy,kalutara', 'photos/14.jpg', 'ghjhj jhjkh ytg ui g iuhjhk iuyhkjh uiio 98ij jhjgh '),
(9, 'name', 'bandarawela,dambagalla,bibile,lunugala,talalla', 'photos/12.jpg', 'alkds skjjsnf sf;ksf ;fskjsf s;kjfjfjf fsiuf fsf suiffjf fjfaf fajfnf');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`, `desc`) VALUES
(1, '2.jpg', 'nmn', 'These image description guidelines were developed by the Carl and Ruth Shapiro Family National Center for Accessible Media at WGBH (NCAM) in conjunction with the DIAGRAM Center (Digital Image And Graphic Resources for Accessible Materials) at Benetech. The DIAGRAM Center is a research and development center whose goal is to make it easier, cheaper, and faster to create and use accessible digital images. Established in 2010, the DIAGRAM Center is a Benetech Global Literacy initiative supported by the U.S. Department of Education, Office of Special Education Programs.'),
(2, '1.jpg', 'ss', 'Through a series of grants funded by the National Science Foundation and the US Department of Education, NCAM has been researching and developing methods for creating effective and efficient text alternatives to images so that kids and adults, students and professionals, who are blind or have low vision can have equal access to image-rich digital texts.'),
(3, '4.jpg', 'cc', 'Beginning in 2004, under a grant from the National Science Foundation, NCAM began research into refining description approaches for images found in science, technology, engineering, and mathematics (STEM) texts. NCAM and its project partners reviewed hundreds of descriptions and numerous image types, eventually narrowing their focus to the most commonly used images in STEM. This research included rounds of surveys with blind and low vision STEM professionals (scientists, mathematicians, etc.) and user-testing with higher education students with visual impairments. The result was a set of guidelines and training materials for image description that encourage recommended practices such as brevity, focus on data, clarity and consistency in language, navigation control via accessible lists, tables, and the proper use of headers.'),
(4, '5.jpg', 'kdkd', 'In late 2012, the DIAGRAM Center launched the Poet Image Description Tool – an open-source, web-based tool facilitating the production of accessible images. To date, over 45,000 image descriptions have been created using Poet, but feedback from early adopters and partners unearthed significant challenges related to writing descriptions. In response, NCAM and DIAGRAM teamed up in the fall of 2014 to provide additional references to support those looking to make images accessible.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
