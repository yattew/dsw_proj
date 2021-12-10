-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 12:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `s_id` int(11) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`s_id`, `day`, `subject`, `status`) VALUES
(1, '2021-11-29', 'Data Structures', '1'),
(2, '2021-11-29', 'Data Structures', '0'),
(3, '2021-11-29', 'Data Structures', '1'),
(4, '2021-11-29', 'Data Structures', '0'),
(1, '2021-11-28', 'Data Structures', '1'),
(2, '2021-11-28', 'Data Structures', '1'),
(3, '2021-11-28', 'Data Structures', '0'),
(4, '2021-11-28', 'Data Structures', '1'),
(1, '2021-11-14', 'Data Structures', '1'),
(2, '2021-11-14', 'Data Structures', '1'),
(3, '2021-11-14', 'Data Structures', '0'),
(4, '2021-11-14', 'Data Structures', '0'),
(1, '2021-11-01', 'Data Structures', '1'),
(2, '2021-11-01', 'Data Structures', '0'),
(3, '2021-11-01', 'Data Structures', '0'),
(4, '2021-11-01', 'Data Structures', '0'),
(1, '2021-11-03', 'Data Structures', '1'),
(2, '2021-11-03', 'Data Structures', '1'),
(3, '2021-11-03', 'Data Structures', '1'),
(4, '2021-11-03', 'Data Structures', '1'),
(1, '2021-11-29', 'Data Base and Web', '1'),
(1, '2021-11-28', 'Data Base and Web', '1'),
(1, '2021-11-27', 'Data Base and Web', '1'),
(1, '2021-11-26', 'Data Base and Web', '1'),
(1, '2021-11-25', 'Data Base and Web', '0'),
(1, '2021-11-29', 'DBW LAB', '1'),
(1, '2021-11-29', 'DBW LAB', '1'),
(1, '2021-11-29', 'DBW LAB', '0'),
(1, '2021-11-29', 'DBW LAB', '0'),
(1, '2021-11-29', 'DBW LAB', '1'),
(1, '2021-12-10', 'Ninjutsu 101', '1'),
(2, '2021-12-10', 'Ninjutsu 101', '1'),
(3, '2021-12-10', 'Ninjutsu 101', '1'),
(4, '2021-12-10', 'Ninjutsu 101', '1'),
(1, '2021-12-06', 'Ninjutsu 101', '1'),
(2, '2021-12-06', 'Ninjutsu 101', '0'),
(3, '2021-12-06', 'Ninjutsu 101', '1'),
(4, '2021-12-06', 'Ninjutsu 101', '1'),
(1, '2021-12-27', 'Ninjutsu 101', '1'),
(2, '2021-12-27', 'Ninjutsu 101', '1'),
(4, '2021-12-27', 'Ninjutsu 101', '1'),
(5, '2021-12-10', 'Data Base and Web', '1'),
(6, '2021-12-10', 'Data Base and Web', '1'),
(7, '2021-12-10', 'Data Base and Web', '1'),
(8, '2021-12-10', 'Data Base and Web', '1'),
(5, '2021-12-15', 'Data Base and Web', '0'),
(6, '2021-12-15', 'Data Base and Web', '1'),
(7, '2021-12-15', 'Data Base and Web', '0'),
(8, '2021-12-15', 'Data Base and Web', '0'),
(1, '2021-12-10', 'Data Base and Web', '1'),
(2, '2021-12-10', 'Data Base and Web', '1'),
(3, '2021-12-10', 'Data Base and Web', '1'),
(4, '2021-12-10', 'Data Base and Web', '1'),
(1, '2021-12-06', 'Data Base and Web', '1'),
(2, '2021-12-06', 'Data Base and Web', '1'),
(3, '2021-12-06', 'Data Base and Web', '1'),
(4, '2021-12-06', 'Data Base and Web', '1'),
(1, '2021-12-03', 'Data Base and Web', '0'),
(2, '2021-12-03', 'Data Base and Web', '1'),
(3, '2021-12-03', 'Data Base and Web', '0'),
(4, '2021-12-03', 'Data Base and Web', '1'),
(1, '2021-12-14', 'Data Base and Web', '0'),
(2, '2021-12-14', 'Data Base and Web', '0'),
(3, '2021-12-14', 'Data Base and Web', '0'),
(4, '2021-12-14', 'Data Base and Web', '0');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phno` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `phno`, `password`, `dept`) VALUES
(1, 'kakashi', 12345123, 'pass', 'Ninjutsu'),
(2, 'Einstein', 123456, 'pass', 'CSE'),
(3, 'Linus Torvalds', 123456, 'pass', 'Data Bases');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_subjects`
--

CREATE TABLE `faculty_subjects` (
  `f_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `batch` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_subjects`
--

INSERT INTO `faculty_subjects` (`f_id`, `subject`, `batch`) VALUES
(2, 'Data Structures', 'B2'),
(2, 'Data Structures', 'B1'),
(1, 'Ninjutsu 101', 'B2'),
(2, 'Physics 101', 'B2'),
(3, 'Data Base and Web', 'B2'),
(3, 'Data Base and Web', 'B1');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `s_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`s_id`, `subject`, `semester`, `grade`) VALUES
(1, 'Data Base and Web', 3, 'A'),
(2, 'Data Base and Web', 3, 'A'),
(1, 'Data structures', 3, 'A'),
(1, 'DBW LAB', 3, 'A'),
(1, 'Data structures Lab', 3, 'A'),
(2, 'Data Structures', 3, 'A'),
(3, 'Data Structures', 3, 'A'),
(4, 'Data Structures', 3, 'A'),
(1, 'Ninjutsu 101', 3, 'A'),
(2, 'Ninjutsu 101', 3, 'A'),
(3, 'Ninjutsu 101', 3, 'A'),
(4, 'Ninjutsu 101', 3, 'B'),
(3, 'Data Base and Web', 3, 'B'),
(4, 'Data Base and Web', 3, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `batch` varchar(2) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `dob`, `semester`, `batch`, `course`, `password`) VALUES
(1, 'yathansh', '2002-08-18', 3, 'B2', 'CSE', 'pass'),
(2, 'arpit', '2001-05-01', 3, 'B2', 'CSE', 'pass'),
(3, 'nishttha', '2001-01-04', 3, 'B2', 'CSE', 'pass'),
(4, 'simran', '2002-07-10', 3, 'B2', 'CSE', 'pass'),
(5, 'sarthak', '2002-05-10', 3, 'B1', 'CSE', 'pass'),
(6, 'naman', '2002-08-11', 3, 'B1', 'CSE', 'pass'),
(7, 'sasuke uchiha', '2021-12-05', 1, 'B1', 'CSE', 'pass'),
(8, 'naruto', '2021-12-15', 1, 'B1', 'CSE', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
