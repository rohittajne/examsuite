-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2014 at 09:31 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

--
-- Database: `examsuite`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrlogs`
--

CREATE TABLE IF NOT EXISTS `hrlogs` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrlogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `hrrec`
--

CREATE TABLE IF NOT EXISTS `hrrec` (
  `name` varchar(30) NOT NULL,
  `compname` varchar(40) NOT NULL,
  `compadd` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrrec`
--

INSERT INTO `hrrec` (`name`, `compname`, `compadd`, `gender`, `birthdate`, `add`, `contact`, `email`, `bloodgroup`, `photo`, `password`) VALUES
('r', 'w', 't', 'm', '2014-01-15', 'g', '6', 'rohit.tajne@gmail.com', 'u', '', 'R0h!tT');

-- --------------------------------------------------------

--
-- Table structure for table `studlogs`
--

CREATE TABLE IF NOT EXISTS `studlogs` (
  `date` text NOT NULL,
  `time` text NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studlogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `studrec`
--

CREATE TABLE IF NOT EXISTS `studrec` (
  `name` varchar(30) NOT NULL,
  `enroll` varchar(12) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL DEFAULT '1st Year',
  `gender` varchar(5) NOT NULL DEFAULT 'Male',
  `birthdate` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `enroll` (`enroll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studrec`
--

INSERT INTO `studrec` (`name`, `enroll`, `branch`, `year`, `gender`, `birthdate`, `address`, `contact`, `email`, `bloodgroup`, `photo`, `password`) VALUES
('', '', '', '', '', ' /  / ', '', '', '', '', '', ''),
('rohit', '123456789', 'I.T.', '2nd Year', 'Male', '', '644/1/1, plot no. 5, Sharayu park, opp. jatra hote', '976216766', 'rohit.tajne@gmail.co', 'o+', '', 'R0h!tT@jn3'),
('shree', '1511315', 'mech', '3rd Year', 'Male', '', '644/1/1,plot no. 5, opp. jatra hotel, adgaon,panchavati, nashik-3.', '9762167066', 'rohit.tajne@gmail.com', 'o+', '', 'Shr33T@jn3'),
('g', '4', 'g', '1st Year', 'Male', '5', 'g', '8', 'b', 'y', '', 'R0h!tT');

-- --------------------------------------------------------

--
-- Table structure for table `tstlogs`
--

CREATE TABLE IF NOT EXISTS `tstlogs` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tstlogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `tstrec`
--

CREATE TABLE IF NOT EXISTS `tstrec` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tstrec`
--

INSERT INTO `tstrec` (`name`, `gender`, `birthdate`, `add`, `contact`, `email`, `bloodgroup`, `photo`, `password`) VALUES
('r', 'g', '6', 'd', '76', 'rohit.tajne@gmail.com', 'g', '', 'R0h!tT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
