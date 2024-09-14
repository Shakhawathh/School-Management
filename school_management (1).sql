-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 04:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('Male','Female','Other') NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date_of_join` date NOT NULL,
  `parent_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `password`, `name`, `dob`, `sex`, `address`, `phone`, `date_of_join`, `parent_name`) VALUES
(1, 'john.doe@example.com', 'password123', 'John Doe', '2005-04-15', 'Male', '123 Elm St, Springfield', '555-1234', '2024-09-01', 'Jane Doe'),
(2, 'jane.smith@example.com', 'password456', 'Jane Smith', '2006-07-20', 'Female', '456 Oak St, Springfield', '555-5678', '2024-09-01', 'John Smith'),
(3, 'michael.brown@example.com', 'password789', 'Michael Brown', '2005-12-05', 'Male', '789 Pine St, Springfield', '555-8765', '2024-09-01', 'Sarah Brown'),
(4, 'emma.jones@example.com', 'password321', 'Emma Jones', '2006-02-28', 'Female', '101 Maple St, Springfield', '555-4321', '2024-09-01', 'Michael Jones');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_Id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('Male','Female','Other') NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date_of_join` date NOT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_Id`, `email`, `password`, `name`, `dob`, `sex`, `address`, `phone`, `date_of_join`, `department`) VALUES
(1, 'mr.jones@example.com', 'securepass123', 'Mr. Jones', '1980-03-12', 'Male', '102 Birch St, Springfield', '555-1122', '2024-09-01', 'Mathematics'),
(2, 'ms.davis@example.com', 'securepass456', 'Ms. Davis', '1985-08-25', 'Female', '103 Cedar St, Springfield', '555-3344', '2024-09-01', 'English'),
(3, 'dr.white@example.com', 'securepass789', 'Dr. White', '1978-11-18', '', '104 Willow St, Springfield', '555-5566', '2024-09-01', 'Science'),
(4, 'mrs.miller@example.com', 'securepass321', 'Mrs. Miller', '1982-09-30', 'Female', '105 Maple St, Springfield', '555-7788', '2024-09-01', 'History');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
