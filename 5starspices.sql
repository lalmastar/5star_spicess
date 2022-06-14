-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2014 at 10:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `5starspices`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrer`
--

CREATE TABLE IF NOT EXISTS `carrer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(15) NOT NULL,
  `experience` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `mobile_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `carrer`
--

INSERT INTO `carrer` (`id`, `f_name`, `l_name`, `gender`, `dob`, `qualification`, `experience`, `skills`, `mobile_no`, `email`, `address`, `file`) VALUES
(1, 'ddffd', '', '', '0000-00-00', '', 0, '', 2147483647, 'taufinj@gamil.com', '', 'Allotment Results.htm'),
(2, 'ddffd', 'fdsfs', 'F', '1991-04-11', 'be', 1, 'good', 2147483647, 'taufinj@gamil.com', 'kbnpfunknjbk', 'insertcareer.php');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(13) NOT NULL,
  `q_comments` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phno`, `q_comments`) VALUES
(1, 'taufin', '', 0, ''),
(2, 'imran khan mulla', 'taufinj@gamil.com', 2147483647, ''),
(3, 'sfsdf', '', 0, 'dsfds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
