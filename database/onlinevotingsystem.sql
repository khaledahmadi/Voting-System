-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2013 at 08:12 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinevotingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `org` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `org`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'buscc', 'buscc', 'buscc'),
(3, 'cas', 'cas', 'cas'),
(4, 'cbaa', 'cbaa', 'cbaa'),
(5, 'educ', 'educ', 'educ'),
(6, 'cede', 'cede', 'cede'),
(7, 'con', 'con', 'con'),
(8, 'site', 'site', 'site'),
(9, 'shmt', 'shmt', 'shmt'),
(10, 'stc', 'stc', 'stc');

-- --------------------------------------------------------

--
-- Table structure for table `bussc`
--

CREATE TABLE IF NOT EXISTS `bussc` (
  `candidateID` int(10) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` text NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `bussc`
--

INSERT INTO `bussc` (`candidateID`, `studnum`, `fname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`) VALUES
(47, '1014321', 'Quinnie', 'Duncil', 'Female', 'Bachelor of Science in Civil Engineering', '4th Year', 'President', 'BBB', 0x6a75616e2e6a7067),
(48, '1015678', 'Brenda ', 'Mangulabnan', 'Female', 'Bachelor of Arts in History', '3rd Year', 'Vice President', 'AAA', 0x6a75616e2e6a7067),
(49, '1018765', 'Kimberleigh', 'Miguel', 'Female', 'Bachelor of Arts in Political Science', '3rd Year', 'Vice President', 'BBB', 0x6a75616e2e6a7067),
(50, '1011111', 'Jona', 'Mirna', 'Female', 'Bachelor of Arts in Psychology', '1st Year', 'Asst Treasurer', 'AAA', 0x46616365626f6f6b2046656d616c655f7765625f562e6a7067),
(51, '189', 'Quinnie', 'DUnil', 'Male', 'Bachelor of Science in Library and Information Science', '1st Year', 'Sgt. at Arms', 'KOKO', 0x5450686f746f5f30303030342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `canvass`
--

CREATE TABLE IF NOT EXISTS `canvass` (
  `candidateID` int(11) NOT NULL,
  `fname` varchar(44) NOT NULL,
  `lname` varchar(44) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canvass`
--


-- --------------------------------------------------------

--
-- Table structure for table `canvass_buscc`
--

CREATE TABLE IF NOT EXISTS `canvass_buscc` (
  `candidateID` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(34) NOT NULL,
  `course` varchar(45) NOT NULL,
  `yearlvl` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `partylist` varchar(45) NOT NULL,
  `votecount` int(11) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canvass_buscc`
--


-- --------------------------------------------------------

--
-- Table structure for table `cas`
--

CREATE TABLE IF NOT EXISTS `cas` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cas`
--

INSERT INTO `cas` (`candidateID`, `studnum`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `status`, `image`) VALUES
(2, 'asdf', 'asdf', '', 'asdf', 'Male', 'Bachelor of Arts in History', '1st Year', 'President', 'fdsa', '', 0x6a75616e2e6a7067),
(3, 'ko', 'ko', '', 'ko', 'Male', 'Bachelor of Arts in History', '1st Year', 'Vice President', 'koko', '', 0x67696e6e69652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `cbaa`
--

CREATE TABLE IF NOT EXISTS `cbaa` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  `studnum` varchar(40) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cbaa`
--

INSERT INTO `cbaa` (`candidateID`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`, `studnum`) VALUES
(5, 'jan', '', 'Jan', 'Male', 'Bachelor of Science in Business Administration', '3rd Year', 'Vice President Acade', 'GO', 0x617072696c692e6a7067, '101-00981');

-- --------------------------------------------------------

--
-- Table structure for table `cede`
--

CREATE TABLE IF NOT EXISTS `cede` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cede`
--

INSERT INTO `cede` (`candidateID`, `studnum`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`) VALUES
(1, '101-0981', 'Quinnie', '', 'Dunzil', 'Female', 'Bachelor of Science in Electrical Engineering', '4th Year', 'President', 'ECE', 0x4368727973616e7468656d756d2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE IF NOT EXISTS `con` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  `studnum` varchar(40) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`candidateID`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`, `studnum`) VALUES
(1, 'Vren', '', 'Duncil', 'Female', 'Bachelor of Science in Nursing', '1st Year', 'President', 'CON', 0x4368727973616e7468656d756d2e6a7067, '101-0189');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `dateid` int(11) NOT NULL AUTO_INCREMENT,
  `datestart` datetime NOT NULL,
  `dateend` datetime NOT NULL,
  `org` varchar(10) NOT NULL,
  PRIMARY KEY (`dateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`dateid`, `datestart`, `dateend`, `org`) VALUES
(5, '2013-10-20 08:00:00', '2013-10-22 12:00:00', 'bussc'),
(6, '2013-10-02 08:00:00', '2013-11-03 08:00:00', 'cas'),
(7, '2013-10-21 08:00:00', '2013-10-21 12:00:00', 'cbaa'),
(8, '2013-11-02 08:00:00', '2013-11-03 08:00:00', 'cede'),
(9, '2013-11-02 08:00:00', '2013-11-03 08:00:00', 'educ'),
(10, '2013-11-02 08:00:00', '2013-11-03 08:00:00', 'con'),
(11, '2013-11-02 08:00:00', '2013-11-03 08:00:00', 'shmt'),
(12, '2013-11-02 08:00:00', '2013-11-03 08:00:00', 'site'),
(13, '2013-10-17 11:58:12', '2013-10-19 11:58:20', 'stc');

-- --------------------------------------------------------

--
-- Table structure for table `deletecandidate`
--

CREATE TABLE IF NOT EXISTS `deletecandidate` (
  `delcan_id` int(11) NOT NULL,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `partylist` varchar(90) NOT NULL,
  `yearlvl` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletecandidate`
--


-- --------------------------------------------------------

--
-- Table structure for table `deletevoter`
--

CREATE TABLE IF NOT EXISTS `deletevoter` (
  `del_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(20) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `datee` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `ddate` datetime NOT NULL,
  PRIMARY KEY (`del_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `deletevoter`
--


-- --------------------------------------------------------

--
-- Table structure for table `educ`
--

CREATE TABLE IF NOT EXISTS `educ` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  `studnum` varchar(40) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `educ`
--

INSERT INTO `educ` (`candidateID`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`, `studnum`) VALUES
(2, 'Jessi', '', 'Mejia', 'Male', 'Bachelor of Elementary Education', '4th Year', 'President', 'kiko', 0x4368727973616e7468656d756d2e6a7067, '101-099'),
(3, 'Carlos', '', 'Capanas', 'Male', 'Bachelor of Elementary Education', '4th Year', 'President', 'JKL', 0x4368727973616e7468656d756d2e6a7067, '103-908');

-- --------------------------------------------------------

--
-- Table structure for table `res_bussc`
--

CREATE TABLE IF NOT EXISTS `res_bussc` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `res_bussc`
--


-- --------------------------------------------------------

--
-- Table structure for table `res_cas`
--

CREATE TABLE IF NOT EXISTS `res_cas` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `res_cas`
--


-- --------------------------------------------------------

--
-- Table structure for table `res_cbaa`
--

CREATE TABLE IF NOT EXISTS `res_cbaa` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `res_cbaa`
--

INSERT INTO `res_cbaa` (`can_voteid`, `candidateID`, `candidate_name`, `votes`) VALUES
(3, 1, 'Quinie Dunzil', 1),
(4, 5, 'jan Jan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `res_cede`
--

CREATE TABLE IF NOT EXISTS `res_cede` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `res_cede`
--

INSERT INTO `res_cede` (`can_voteid`, `candidateID`, `candidate_name`, `votes`) VALUES
(1, 1, 'Quinnie Dunzil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `res_con`
--

CREATE TABLE IF NOT EXISTS `res_con` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `res_con`
--

INSERT INTO `res_con` (`can_voteid`, `candidateID`, `candidate_name`, `votes`) VALUES
(1, 1, 'Vren Duncil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `res_educ`
--

CREATE TABLE IF NOT EXISTS `res_educ` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `res_educ`
--


-- --------------------------------------------------------

--
-- Table structure for table `res_shmt`
--

CREATE TABLE IF NOT EXISTS `res_shmt` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `res_shmt`
--


-- --------------------------------------------------------

--
-- Table structure for table `res_site`
--

CREATE TABLE IF NOT EXISTS `res_site` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `res_site`
--


-- --------------------------------------------------------

--
-- Table structure for table `res_stc`
--

CREATE TABLE IF NOT EXISTS `res_stc` (
  `can_voteid` int(11) NOT NULL AUTO_INCREMENT,
  `candidateID` int(11) NOT NULL,
  `candidate_name` varchar(40) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`can_voteid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `res_stc`
--


-- --------------------------------------------------------

--
-- Table structure for table `shmt`
--

CREATE TABLE IF NOT EXISTS `shmt` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(40) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `partylist` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shmt`
--

INSERT INTO `shmt` (`candidateID`, `studnum`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`) VALUES
(1, '101-001', 'Quinnie', '', 'Duncil', 'Female', 'Bachelor of Science in Tourism Managemen', '4th Year', 'President', 'KIMIDORA', 0x4368727973616e7468656d756d2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `candidateID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `yearlvl` varchar(10) NOT NULL,
  `position` text NOT NULL,
  `partylist` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  `studnum` varchar(40) NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`candidateID`, `fname`, `mname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`, `studnum`) VALUES
(1, 'John', '', 'Jade', 'Male', 'Bachelor of Science in Information Technology', '3rd Year', 'President', 'aklasan', 0x4368727973616e7468656d756d2e6a7067, '101-001');

-- --------------------------------------------------------

--
-- Table structure for table `stc`
--

CREATE TABLE IF NOT EXISTS `stc` (
  `candidateID` int(10) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlvl` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `partylist` varchar(40) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`candidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stc`
--

INSERT INTO `stc` (`candidateID`, `studnum`, `fname`, `lname`, `gender`, `course`, `yearlvl`, `position`, `partylist`, `image`) VALUES
(1, '1019912', 'John', 'Ceena', 'Male', '1 year Automotive Servicing', '1st Year', 'President', 'COCO', 0x617072696c692e6a7067),
(2, '101', 'qwe', 'ty', 'Male', '1 year Automotive Servicing', '1st Year', 'President', 'lo', 0x617072696c692e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `vbussc`
--

CREATE TABLE IF NOT EXISTS `vbussc` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(200) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(40) NOT NULL,
  `dept` varchar(10) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Dumping data for table `vbussc`
--

INSERT INTO `vbussc` (`stud_id`, `studnum`, `fname`, `lname`, `course`, `yearlevel`, `username`, `password`, `datee`, `dept`) VALUES
(110, '109-00912', 'carlo', 'carlo', 'Bachelor of Arts in History', '1st Year', '109-00912', 'crlo', '1/12/1998', 'CAS'),
(111, '109-001', 'Quinnie', 'Duncil', 'Bachelor of Arts in History', '2nd Year', '109-001', 'Password', '1/12/1998', 'CAS'),
(112, '109-002', 'Kute', 'Kute', 'Bachelor of Arts in History', '2nd Year', '109-002', 'Kute', '1/12/1990', 'CAS'),
(114, '109-0002', 'Kwini', 'Dunzil', 'Bachelor of Arts in History', '4th Year', '109-0002', 'Kwini', '1/12/1992', 'CAS'),
(127, '111-111', 'Jun', 'Tetangco', '1 year Automotive Servicing', '1st Year', '111-111', 'uno', '1/12/1990', 'SITE'),
(134, '10923', 'KiMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '10923', 'IM', '1/12/1990', 'CBAA'),
(135, '102-908', 'FIRST', 'FIRST', 'Bachelor of Science in Business Administration', '1st Year', '102-908', 'FIRST', '1/12/1990', 'CBAA'),
(137, '10909', '-09', 'KIM', 'Bachelor of Science in Business Administration', '4th year', '10909', 'KIM', '1/12/1990', 'CBAA'),
(139, '123', '123', '123', 'Bachelor of Science in Business Administration', '4th year', '123', '123', '123', 'CBAA'),
(140, '1233211', 'ASDF', 'SADF', 'Bachelor of Science in Business Administration', '4th year', '1233211', 'ASDF', '1/12/1990', 'CBAA'),
(141, '98901', 'KIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '98901', 'KIMI', '1/121990', 'CBAA'),
(143, '123542', 'kIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '123542', 'KIMI', '1/12/1990', 'CBAA'),
(144, '898981', 'KIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '898981', 'SDFG', '1/12/1990', 'CBAA'),
(145, '1234`', 'KIMI', 'IMI', 'Bachelor of Science in Business Administration', '1st Year', '1234`', 'KIMI', 'SDFG', 'CBAA'),
(146, '1235', 'KIMI', 'IMMI', 'Bachelor of Science in Business Administration', '4th year', '1235', 'KIMI', 'KIMI', 'CBAA'),
(149, '1010-090800', 'DENVER', 'DENVER', 'Bachelor of Science in Business Administration', '1st Year', '1010-090800', 'DNVR', '1/12', 'CBAA'),
(157, '101-098', 'Quinniee', 'Duncil', 'Bachelor of Arts in History', '2nd year', '101-098', 'Quinnie', '1/12/1990', 'CAS'),
(159, '1-01', 'kw', 'k', 'Bachelor of Arts in History', '3rd Year', '1-01', 'sdf', 'f', 'CAS'),
(161, 'l', 'ljk', 'lkj', 'Bachelor of Arts in History', '4th Year', 'l', 'kimi', '1/12/190', 'CAS'),
(165, 'kj', 'l', 'kl', 'Bachelor of Arts in History', '4th Year', 'kj', 'k', 'lk', 'CAS'),
(167, 'asdlkj', 'lk', 'jlk', 'Bachelor of Arts in History', '3rd Year', 'asdlkj', 'kj', '2', 'CAS'),
(169, '101-980', 'QUINIE', 'DUNCIL', 'Bachelor of Science in Civil Engineering', '1st Year', '101-980', 'KWINI', '1/12/190', 'CEDE'),
(170, '10908', 'Dunci', 'lk;j', 'Bachelor of Science in Civil Engineering', '5th Year', '10908', 'asdf', 'asdf', 'CEDE'),
(171, 'asdf', 'asdf', 'asdf', 'Bachelor of Science in Civil Engineering', '4th Year', 'asdf', 'asdf', 'df', 'CEDE'),
(176, 'kiko', 'kiko', 'kiko', 'Bachelor of Science in Civil Engineering', '3rd Year', 'kiko', 'kiko', 'kiko', 'CEDE');

-- --------------------------------------------------------

--
-- Table structure for table `vcas`
--

CREATE TABLE IF NOT EXISTS `vcas` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `datee` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `vcas`
--


-- --------------------------------------------------------

--
-- Table structure for table `vcbaa`
--

CREATE TABLE IF NOT EXISTS `vcbaa` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `datee` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `vcbaa`
--

INSERT INTO `vcbaa` (`stud_id`, `studnum`, `fname`, `lname`, `course`, `yearlevel`, `username`, `password`, `datee`) VALUES
(15, 10923, 'KiMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '10923', 'IM', '1/12/1990'),
(16, 102, 'FIRST', 'FIRST', 'Bachelor of Science in Business Administration', '4th year', '102-908', 'FIRST', '1/12/1990'),
(17, 101, 'KIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '101-9891', 'KIMI', '1/12/1990'),
(18, 10909, '-09', 'KIM', 'Bachelor of Science in Business Administration', '4th year', '10909', 'KIM', '1/12/1990'),
(20, 123, '123', '123', 'Bachelor of Science in Business Administration', '4th year', '123', '123', '123'),
(21, 1233211, 'ASDF', 'SADF', 'Bachelor of Science in Business Administration', '4th year', '1233211', 'ASDF', '1/12/1990'),
(22, 98901, 'KIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '98901', 'KIMI', '1/121990'),
(23, 0, 'ASDF', 'ASDF', 'Bachelor of Science in Business Administration', '4th year', 'ADSF', 'FSD', '1/12/1990'),
(24, 123542, 'kIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '123542', 'KIMI', '1/12/1990'),
(25, 898981, 'KIMI', 'KIMI', 'Bachelor of Science in Business Administration', '4th year', '898981', 'SDFG', '1/12/1990'),
(26, 1234, 'KIMI', 'IMI', 'Bachelor of Science in Business Administration', '4th year', '1234`', 'KIMI', 'SDFG'),
(27, 1235, 'KIMI', 'IMMI', 'Bachelor of Science in Business Administration', '4th year', '1235', 'KIMI', 'KIMI'),
(28, 101, 'Quinnie', 'Dunil', 'Bachelor of Science in Business Administration', '4th Year', '101-091', 'Paratang', '1121990'),
(29, 101, 'Secon', 'SECOND', 'Bachelor of Science in Business Administration', '4th year', '101-09089', 'SECOND', '112/190'),
(30, 1010, 'DENVER', 'DENVER', 'Bachelor of Science in Business Administration', '4th year', '1010-090800', 'DNVR', '1/12'),
(31, 101, 'P', 'P', 'Bachelor of Science in Business Administration', '4th year', '101-090', 'ADF', 'ASDF');

-- --------------------------------------------------------

--
-- Table structure for table `vcede`
--

CREATE TABLE IF NOT EXISTS `vcede` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vcede`
--

INSERT INTO `vcede` (`stud_id`, `studnum`, `fname`, `lname`, `course`, `yearlevel`, `username`, `password`, `datee`) VALUES
(2, '10908', 'Dunci', 'lk;j', 'Bachelor of Science in Civil Engineering', '5th Year', '10908', 'asdf', 'asdf'),
(3, 'asdf', 'asdf', 'asdf', 'Bachelor of Science in Civil Engineering', '4th Year', 'asdf', 'asdf', 'df'),
(8, 'kiko', 'kiko', 'kiko', 'Bachelor of Science in Civil Engineering', '3rd Year', 'kiko', 'kiko', 'kiko');

-- --------------------------------------------------------

--
-- Table structure for table `vcon`
--

CREATE TABLE IF NOT EXISTS `vcon` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(44) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `datee` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vcon`
--


-- --------------------------------------------------------

--
-- Table structure for table `veduc`
--

CREATE TABLE IF NOT EXISTS `veduc` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `veduc`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_bussc`
--

CREATE TABLE IF NOT EXISTS `voted_bussc` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voted_bussc`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_cas`
--

CREATE TABLE IF NOT EXISTS `voted_cas` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voted_cas`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_cbaa`
--

CREATE TABLE IF NOT EXISTS `voted_cbaa` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `voted_cbaa`
--

INSERT INTO `voted_cbaa` (`stud_voted`, `stud_id`, `position`) VALUES
(3, 10, 'President'),
(4, 10, 'Vice President Acade');

-- --------------------------------------------------------

--
-- Table structure for table `voted_cede`
--

CREATE TABLE IF NOT EXISTS `voted_cede` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voted_cede`
--

INSERT INTO `voted_cede` (`stud_voted`, `stud_id`, `position`) VALUES
(1, 2, 'President');

-- --------------------------------------------------------

--
-- Table structure for table `voted_con`
--

CREATE TABLE IF NOT EXISTS `voted_con` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voted_con`
--

INSERT INTO `voted_con` (`stud_voted`, `stud_id`, `position`) VALUES
(1, 2, 'President');

-- --------------------------------------------------------

--
-- Table structure for table `voted_educ`
--

CREATE TABLE IF NOT EXISTS `voted_educ` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voted_educ`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_shmt`
--

CREATE TABLE IF NOT EXISTS `voted_shmt` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voted_shmt`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_site`
--

CREATE TABLE IF NOT EXISTS `voted_site` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `voted_site`
--


-- --------------------------------------------------------

--
-- Table structure for table `voted_stc`
--

CREATE TABLE IF NOT EXISTS `voted_stc` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voted_stc`
--


-- --------------------------------------------------------

--
-- Table structure for table `vshmt`
--

CREATE TABLE IF NOT EXISTS `vshmt` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(23) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vshmt`
--

INSERT INTO `vshmt` (`stud_id`, `studnum`, `fname`, `lname`, `course`, `yearlevel`, `username`, `password`, `datee`) VALUES
(3, '0091', 'Kim', 'Dun', 'Bachelor of Science in Hospitality Management', '2nd year', '0091', 'John', '1/12/1990');

-- --------------------------------------------------------

--
-- Table structure for table `vsite`
--

CREATE TABLE IF NOT EXISTS `vsite` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vsite`
--


-- --------------------------------------------------------

--
-- Table structure for table `vstc`
--

CREATE TABLE IF NOT EXISTS `vstc` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datee` varchar(21) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `vstc`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
