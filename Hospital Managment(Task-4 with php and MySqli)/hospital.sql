-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2019 at 12:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `password` varchar(20) NOT NULL,
  `did` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `joindate` varchar(50) NOT NULL,
  `desgination` varchar(50) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`password`, `did`, `name`, `birthdate`, `gender`, `address`, `joindate`, `desgination`) VALUES
('admin000', '321', 'Dr. Mheta', '2018-09-07', 'male', 'ASs', '2019-07-11', 'ddasd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`) VALUES
('admin', 'admin000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `password` varchar(20) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `raddress` varchar(200) NOT NULL,
  `rphone` varchar(10) NOT NULL,
  `rrwp` varchar(50) NOT NULL,
  `diseases` varchar(200) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `roomno` varchar(20) NOT NULL,
  `bedno` varchar(20) NOT NULL,
  `adate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`password`, `pid`, `name`, `gender`, `age`, `address`, `birth`, `phone`, `rname`, `raddress`, `rphone`, `rrwp`, `diseases`, `docname`, `roomno`, `bedno`, `adate`, `status`) VALUES
('admin000', '321', 'sskahkjfh', 'male', '23', 'asdkajkj;kj21j;mxzl;mc', '2019-04-21', '2154789632', 'ewrr', 'raddress', '2512457896', 'ewrewr', 'rerew', 'ere', 's1', '12', '2019-04-20', 'new'),
('admin000', '098', 'jay', 'male', '21', 'A/11 Swagat Appt.', '2019-07-11', '2030125241', 'Sam Broad', 'raddress', '6589784520', 'friend', 'normal', 'Dr. Abdual', '23', '1', '2019-07-19', 'old'),
('admin000', '543', 'ASS', 'male', '23', 'aadfadfaaa`1', '2019-04-17', '1234567890', 'asdsadasd', 'raddress', '7896541230', 'sd', 'sad', 'sdsd', '21', '12', '2019-04-12', 'new');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
