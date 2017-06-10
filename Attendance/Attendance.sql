-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 09:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Code` int(1) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Code`, `Name`) VALUES
(1, 'Computer Engineering'),
(2, 'Electronics And Communications Engineering '),
(3, 'Civil Engineering'),
(4, 'Mechanical Engineering '),
(5, 'Electrical Engineering'),
(6, 'Applied Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `cen403`
--

CREATE TABLE `cen403` (
  `roll_num` varchar(9) NOT NULL DEFAULT '15BCS0000',
  `_04_06_2017` int(1) NOT NULL DEFAULT '0',
  `_05_06_2017` int(1) NOT NULL DEFAULT '0',
  `_07_06_2017` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cen403`
--

INSERT INTO `cen403` (`roll_num`, `_04_06_2017`, `_05_06_2017`, `_07_06_2017`) VALUES
('15BCS0023', 1, 1, 1),
('15BCS0075', 0, 1, 0),
('15BCS0081', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentbase`
--

CREATE TABLE `studentbase` (
  `roll_num` varchar(9) NOT NULL,
  `enrollment_num` varchar(6) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `branch` int(1) NOT NULL,
  `current_semester` int(1) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentbase`
--

INSERT INTO `studentbase` (`roll_num`, `enrollment_num`, `email_id`, `branch`, `current_semester`, `first_name`, `middle_name`, `last_name`) VALUES
('15BCS0023', '154223', 'SBtripathi@gmail.com', 1, 5, 'SHIVAANK', 'BUDBEDAN', 'TRIPATHI'),
('15BCS0062', '152445', 'NafisK@yahoo.co.in', 1, 6, 'NAFIS', NULL, 'KHAN'),
('15BCS0075', '153663', 'ShivaCh@gmail.com', 1, 5, 'SHIVANSHU', NULL, 'CHAUDHARY'),
('15BCS0081', '153664', 'ShiTom@gmail.com', 1, 5, 'Shivanshu', NULL, 'Tomar');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(6) NOT NULL,
  `teacher_ID` int(3) NOT NULL,
  `semester` int(1) NOT NULL,
  `branch` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `total_classes` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `teacher_ID`, `semester`, `branch`, `name`, `total_classes`) VALUES
('CEN403', 1, 5, 1, 'COMPUTER ORGANISATION ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacherbase`
--

CREATE TABLE `teacherbase` (
  `teacher_id` int(3) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `branch` int(1) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherbase`
--

INSERT INTO `teacherbase` (`teacher_id`, `first_name`, `middle_name`, `last_name`, `branch`, `email_id`) VALUES
(1, 'Jayesh', NULL, 'Choubey', 1, 'JChoubey@gmail.com'),
(2, 'Chacha', 'Jaiprakash', 'Chaudhary', 1, 'JaiPCh@gmail.com'),
(3, 'Mansukh', 'Ram', 'Tripathi', 2, 'MSTripathi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE `userbase` (
  `name` varchar(40) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`name`, `email_id`, `password`, `status`) VALUES
('Jaiprakash Chaudhary', 'JaiPCh@gmail.com', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 3),
('Jayesh Choubey', 'JChoubey@gmail.com', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 3),
('Mansukh Tripathi', 'MSTripathi@gmail.com', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 3),
('NAFIS KHAN', 'NafisK@yahoo.co.in', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 2),
('SHIVAANK B TRIPATHI', 'SBtripathi@gmail.com', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 2),
('Shivanshu Tomar', 'ShiTom@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('SHIVANSHU CHAUDHARY', 'ShivaCh@gmail.com', 'D8578EDF8458CE06FBC5BB76A58C5CA4', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `cen403`
--
ALTER TABLE `cen403`
  ADD PRIMARY KEY (`roll_num`);

--
-- Indexes for table `studentbase`
--
ALTER TABLE `studentbase`
  ADD PRIMARY KEY (`roll_num`),
  ADD UNIQUE KEY `EnrollmentNo` (`enrollment_num`),
  ADD UNIQUE KEY `Email` (`email_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`,`teacher_ID`),
  ADD UNIQUE KEY `Code` (`subject_code`),
  ADD UNIQUE KEY `Code_2` (`subject_code`,`teacher_ID`),
  ADD UNIQUE KEY `TeacherID` (`teacher_ID`),
  ADD UNIQUE KEY `Code_3` (`subject_code`,`teacher_ID`);

--
-- Indexes for table `teacherbase`
--
ALTER TABLE `teacherbase`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Code` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teacherbase`
--
ALTER TABLE `teacherbase`
  MODIFY `teacher_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
