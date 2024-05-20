-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 07:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `email`, `phone`, `url`) VALUES
(2, 'Sarafat Murshid', 'asd12', 'sarafatmurshid@gmail.com', 1521506068, 'https://www.facebook.com'),
(3, 'ali haidar', 'sad12', 'sarafatmurshid`12@gmail.com', 1521506067, 'https://www.facebook.com'),
(4, 'ali', 'asd12', 'ali@gmail.com', 1521506068, 'https://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_date`) VALUES
(3, 'Hello', '2022-04-17'),
(4, 'Hello2', '2022-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `annex` int(11) NOT NULL,
  `chair` int(11) NOT NULL,
  `tables` int(11) NOT NULL,
  `computer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `room_no`, `annex`, `chair`, `tables`, `computer`) VALUES
(6, 123, 31, 312, 312, 31),
(7, 123, 123, 123, 1231, 2312);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `email`, `phone`, `url`) VALUES
(2, 'Sarafat Murshid', 'sad123', 'sarafatmurshid@gmail.com', 1521506067, 'https://www.facebook.com'),
(5, 'tanvir ahamed', 'tanvir123', 'tanvir@gmail.com', 1936443701, 'https://wwww.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `gender`) VALUES
(1, 'sarafat1', 'murshid', 'sam12', '54321', 'male'),
(2, 'Sarafat ', 'Murshid', 'sad12', '12345', 'male'),
(5, 'Sarafat ', 'Murshid', 'sad21', '12345', 'male'),
(6, 'Sarafat ', 'Murshid', 'sa123', '12345', 'male'),
(7, 'ali ', 'haidar', 'ah123', '12345', 'male'),
(11, 'ali ', 'haidar', 'admin', '12345', 'male'),
(12, 'Sarafat', 'Murshid', 'sa321', '12345', 'male'),
(13, 'Sarafat', 'Murshid', '&gt;			&lt;span class=', '', ''),
(14, '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;:  Undefined variable $fname1 in &lt;b&gt;C:xampphtdocsMID_WTP', '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;:  Undefined variable $lname1 in &lt;b&gt;C:xampphtdocsMID_WTP', '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;:  Undefined variable $uname1 in &lt;b&gt;C:xampphtdocsMID_WTP', '', ''),
(15, 'Sarafat', 'Murshid', 'sam17', 'sam17', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
