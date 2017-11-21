-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 07:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinevoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'hsama', '786');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `votes` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `position`, `party`, `votes`, `image`, `course`) VALUES
(37, 'jawid', 'President', 'fsu', 1, 'ID.png', 'ISA'),
(38, 'khaled', 'Senator', 'FKP', 3, '13578475_913587055453995_549588168_n(1)(1).jpg', 'Communication'),
(39, 'fakhria776767', 'President', 'FKP', 3, '2.jpg', 'Communication'),
(40, 'abdullah', 'Senator', 'FST', 1, '14794108_935994083211280_1709591545_n.jpg', 'ISA'),
(41, 'Dr Nurlida Basir', 'Lecturer', 'FST', 3, '1132433.jpg', 'ISA'),
(42, 'omid', 'Secretary', 'fsu', 1, '14641991_318530848503403_4832115420906927709_n.jpg', 'ISA');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(6, 'ISA'),
(7, 'Communication');

-- --------------------------------------------------------

--
-- Table structure for table `list_stu_num`
--

CREATE TABLE IF NOT EXISTS `list_stu_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `list_stu_num`
--

INSERT INTO `list_stu_num` (`id`, `id_number`, `status`, `name`, `course`) VALUES
(7, '1132432', 'used', 'Pass, khaled Kon', 'ISA'),
(8, '1132425', 'used', 'jan, asad Sharifi', 'ISA777'),
(9, '1132433', 'used', 'jan, Ahmad ', 'ISA'),
(10, '1132424', 'used', 'ahmadi, Iron ', 'ISA');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE IF NOT EXISTS `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `name`, `description`) VALUES
(4, 'FST', 'FST VOTING'),
(6, 'fsu', 'new'),
(7, 'FKP', 'FKP');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(10, 'President'),
(12, 'Senator'),
(13, 'Lecturer'),
(14, 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11322445 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `email`, `phone`, `faculty`, `course`, `password`, `question`, `answer`, `status`) VALUES
(11, '1132432', '', '', '', 'ISA', '12', 'what is your favorite color', 'yellow', 'voted'),
(12, '1132425', '', '', '', 'ISA', '122', 'what is your favorite color', 'blue', 'voted'),
(13, '1132424', '', '', '', 'ISA', '133', 'what is your favorite color', 'bloa', 'voted'),
(1122, 'kkk', 'kk@yahoo.com', '', 'FST', 'ISA', '111', 'what is your favorite color', 'red', 'voted'),
(1132401, 'hayat', 'test@gmail.com', '878789', 'ISA', 'ISA', '786', 'what is your favorite movie', 'xxx', 'voted'),
(1132415, 'wasi', 'khaledahmadi556@yahoo.com', '878789', 'FST', 'ISA', '222', 'what is your favorite color', 'black', 'voted'),
(1132417, 'husam', 'aaa@ggg.com', '0877664633243', 'FST', 'ISA', '12345', 'what is your favorite color', 'red', 'voted'),
(1132418, 'ajash', 'asadullah@yahoo.com', '9034857', 'FST', 'ISA', '777', 'what is your favorite movie', 'ted2', 'voted'),
(1132420, 'fakhria', 'khaledahmadi556@yahoo.com', '7676678', 'FST', 'ISA', '123', 'what is your favorite color', 'green', 'voted'),
(1132438, 'doghom', 'khaledahmadi556@yahoo.com', '76868', 'ISA', 'ISA', '999', 'what is your favorite color', 'red', 'voted'),
(11322444, '113', 'rostam@yahoo.com', '999989', 'ISA', 'ISA', '123', 'what is your favorite movie', 'Y3F3Y', 'voted');

-- --------------------------------------------------------

--
-- Table structure for table `votedetails`
--

CREATE TABLE IF NOT EXISTS `votedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `votedetails`
--

INSERT INTO `votedetails` (`id`, `candidate`, `voters`) VALUES
(64, 'fakhria', '1132417'),
(65, 'khaled', '1132417'),
(66, 'Dr Nurlida Basir', '1132417'),
(67, 'fakhria', '1132415'),
(68, 'khaled', '1132415'),
(69, 'Dr Nurlida Basir', '1132415'),
(70, 'jawid', '1132438'),
(71, 'abdullah', '1132438'),
(72, 'Dr Nurlida Basir', '1132438'),
(73, 'omid', '1132438');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
