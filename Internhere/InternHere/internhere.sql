-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 08:10 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `EmpID` int(3) NOT NULL,
  `EmpName` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phno` varchar(11) NOT NULL,
  `Phno2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`EmpID`, `EmpName`, `Email`, `Phno`, `Phno2`) VALUES
(1, 'Employer#1', 'Employer#1@emp.com', '9821045786', '9456075876'),
(3, 'Employer#2', 'Employer#2@emp.com', '9821045787', '9456075876'),
(4, 'Employer#3', 'Employer#3@emp.com', '9821045734', '9821045723');

-- --------------------------------------------------------

--
-- Table structure for table `empint`
--

CREATE TABLE `empint` (
  `EmpID` int(3) NOT NULL,
  `IntID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empint`
--

INSERT INTO `empint` (`EmpID`, `IntID`) VALUES
(1, 1),
(1, 2),
(3, 3),
(3, 4),
(4, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `intinfo`
--

CREATE TABLE `intinfo` (
  `IntID` int(3) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Descr` text NOT NULL,
  `Stipend` int(5) NOT NULL,
  `StartD` date NOT NULL,
  `EndD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intinfo`
--

INSERT INTO `intinfo` (`IntID`, `Title`, `Descr`, `Stipend`, `StartD`, `EndD`) VALUES
(1, 'Internship#1', 'I1 by E1', 1234, '2017-04-22', '2017-05-03'),
(2, 'Internship#2', 'I2 by E1', 5678, '2017-04-24', '2017-05-03'),
(3, 'Internship#3', 'I1 by E2', 123445, '2017-05-25', '2017-06-03'),
(4, 'Internship#4', 'I2 by E2', 6789, '2017-04-14', '2017-04-23'),
(6, 'Internship#1', 'I1 By E3 ', 3456, '2017-04-22', '2017-05-03'),
(7, 'Internship#5', 'I2 By E3', 2234, '2017-04-24', '2017-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE `stuinfo` (
  `StuID` int(3) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phno` varchar(11) NOT NULL,
  `Phno2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`StuID`, `Name`, `Email`, `Phno`, `Phno2`) VALUES
(1, 'Student#1', 'Student#1@stu.com', '9821045456', '9821045324'),
(2, 'Student#2', 'student#2@gmail.com', '9821035786', '9821345745'),
(3, 'Student#3', 'Student#3@stu.com', '9822045786', '9822445786');

-- --------------------------------------------------------

--
-- Table structure for table `stuint`
--

CREATE TABLE `stuint` (
  `StuID` int(3) NOT NULL,
  `IntID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuint`
--

INSERT INTO `stuint` (`StuID`, `IntID`) VALUES
(1, 1),
(1, 3),
(1, 6),
(1, 7),
(2, 1),
(2, 3),
(2, 6),
(3, 1),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE `userbase` (
  `email` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cat` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`email`, `username`, `password`, `cat`) VALUES
('Employer#1@emp.com', 'Employer#1', 'Employer#1', 2),
('Employer#2@emp.com', 'Employer#2', 'Employer#2', 2),
('Employer#3@emp.com', 'Employer#3', 'Employer#3', 2),
('Student#1@stu.com', 'Student#1', 'Student#1', 1),
('student#2@gmail.com', 'Student#2', 'Student#2', 1),
('Student#3@stu.com', 'Student#3', 'Student#3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`EmpID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `empint`
--
ALTER TABLE `empint`
  ADD PRIMARY KEY (`IntID`),
  ADD UNIQUE KEY `IntID` (`IntID`);

--
-- Indexes for table `intinfo`
--
ALTER TABLE `intinfo`
  ADD PRIMARY KEY (`IntID`,`Title`,`Stipend`),
  ADD UNIQUE KEY `Title` (`Title`,`Stipend`);

--
-- Indexes for table `stuinfo`
--
ALTER TABLE `stuinfo`
  ADD PRIMARY KEY (`StuID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phno` (`Phno`);

--
-- Indexes for table `stuint`
--
ALTER TABLE `stuint`
  ADD PRIMARY KEY (`StuID`,`IntID`);

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `EmpID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `intinfo`
--
ALTER TABLE `intinfo`
  MODIFY `IntID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stuinfo`
--
ALTER TABLE `stuinfo`
  MODIFY `StuID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
