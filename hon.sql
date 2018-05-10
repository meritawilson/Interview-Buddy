-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 03:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `honey`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `psw2` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `uname`, `psw`, `psw2`, `contact`) VALUES
(1, 'Praveen', 'p', 'p', '9098987876'),
(27, 'kamal', 'kamal', 'kamal', '9098787656');


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `psw2` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `uname`, `psw`, `psw2`, `contact`) VALUES
(1, 'Praveen', 'p', 'p', '9098987876'),
(27, 'shantha', 'shantha', 'shantha', '9098787656'),
(28, 'Shiva', 'shiva', 'shiva', '9876789098'),
(29, 'kanna', 'kanna', 'kanna', '9751891828');


-- --------------------------------------------------------

--
-- Table structure for table `juniors`
--

CREATE TABLE IF NOT EXISTS `juniors` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `psw2` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `juniors`
--

INSERT INTO `juniors` (`id`, `uname`, `psw`, `psw2`, `contact`) VALUES
(1, 'Praveen', 'p', 'p', '9098987876'),
(27, 'anu', 'anu', 'anu', '9098787656'),
(28, 'anusha', 'anusha', 'anusha', '8909898767'),
(29, 'kumar', 'kumar', 'kumar', '9098787656'),
(30, 'vicky', 'vicky', 'vicky', '8978897889');


-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subject` varchar(500) NOT NULL,
  `sem` varchar(500) NOT NULL,
  `qb` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `subject`, `sem`, `qb`) VALUES
(2, 'WIPRO', 'Logical reasoning', '6.pdf'),
(3, 'CTS', 'Aptitude', '4.docx'),
(4, 'TCS', 'Quants', '6.pdf'),
(5, 'IVTL', 'Verbal', 'AI qb updated.docx'),
(6, 'L & T', 'Reasoning', '6.pdf'),
(7, 'TM ', 'Quantitative aptitude', '6.pdf');


-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cmpname` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `technology` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `cmpname`, `designation`, `experience`, `degree`, `salary`, `type`, `technology`) VALUES
(1, 'Hcl', 'Software development', 'Fresher', 'UG', '8000', 'Full time', 'tech'),
(2, 'Wipro', 'Sr engineer', '6 Months', 'UG', '35000', 'Full time', 'tech'),
(4, 'infotech', 'web developer', '6 Months', 'PG', '67000', 'Rotational shift', 'tech');

-- --------------------------------------------------------

--
-- Table structure for table `seniors`
--

CREATE TABLE IF NOT EXISTS `seniors` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `psw2` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `seniors`
--

INSERT INTO `seniors` (`id`, `uname`, `psw`, `psw2`, `contact`) VALUES
(1, 'Praveen', 'p', 'p', '9098987876'),
(27, 'kannan', 'kannan', 'kannan', '9098765654');


-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cmpname` varchar(50) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `text` varchar(900) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `cmpname`, `sname`, `text`) VALUES
(2, 'Wipro', 'kumar', 'Interview process was quite difficult.Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult.'),
(3, 'L & T', 'vicky', 'Interview process was quite difficult.Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult.'),
(4, 'TM', 'Vicky', 'Interview process was quite difficult.Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult. Interview process was quite difficult.');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `psw2` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `psw`, `psw2`, `contact`) VALUES
(1, 'Shiva', 'shiva', 'shiva', '9876789098'),
(2, 'vicky', 'vicky', 'vicky', '7339169275'),
(3, 'kanna', 'kanna', 'kanna', '9751891828');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
