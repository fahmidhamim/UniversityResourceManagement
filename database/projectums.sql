-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 03:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `adddress` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `adddress`, `sex`) VALUES
('ad-01', 'Admin', 'abcd', 0, '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Uploaded by` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Uploaded by`, `subject`, `date`, `details`) VALUES
('Admin', 'TEST', '2019-04-24', '	Tested'),
('Admin', 'TESTING 2', '2019-04-24', '	Tested twice\r\n'),
('Admin', 'HOLIDAY', '2019-04-28', 'Good Friday	');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--


CREATE TABLE `bookings` (
  `roomNumber` varchar(30) NOT NULL,
  `facultyID` varchar(30) NOT NULL,
  `facultyName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importantdates`
--

INSERT INTO `bookings` ( `roomNumber`, `facultyID`,`facultyName`, `date`, `time`) VALUES
('211', 'IQN', 'Iqtider' '2025-04-7', '12PM-1PM');



--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `password`, `phone`, `email`, `doj`, `dob`, `gender`) VALUES
('IQN', 'Iqtider', 'asdf', '9867453623', 'iqn1@gmail.com', '2018-12-01', '1992-12-01', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `importantdates`
--

CREATE TABLE `importantdates` (
  `id` varchar(30) NOT NULL,
  `date` date NOT NULL,

  `subject` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importantdates`
--

INSERT INTO `importantdates` ( `id`, `date`, `subject`) VALUES
('IQN', '2019-04-26', 'PHP Hackathon');

-- --------------------------------------------------------




--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `date` date NOT NULL,
  `id` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,

  `report` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`date`, `id`, `num`,  `report`) VALUES
('2025-04-01','IQN', 'AUDI801', 'PHP Hackathon');

-- --------------------------------------------------------




--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `roomNumber` varchar(30) NOT NULL,
  `facultyID` varchar(30) NOT NULL,
  `facultyName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(59) NOT NULL,
  `reason` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`roomNumber`, `facultyID`,`facultyName`, `date`, `time`, `reason`) VALUES
('211', 'IQN', 'Iqtider' '2025-04-7', '12PM-1PM', 'cc');

-- --------------------------------------------------------




--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `number` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`number`, `type`,`location`) VALUES
('211', 'Lobby', 'Admin Building');

-- --------------------------------------------------------







--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('ad-01', 'abcd', 'admin'),
('IQN', 'asdf', 'faculty');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
