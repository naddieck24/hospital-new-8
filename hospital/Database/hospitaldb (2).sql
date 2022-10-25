-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 10:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed capacity`
--

CREATE TABLE `bed capacity` (
  `bed_id` int(11) NOT NULL,
  `bed_name` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `room_capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_number`, `room_capacity`) VALUES
(15, 'private', 'A-1', 1),
(16, 'private ', 'A-2', 1),
(18, 'private', 'A-4', 1),
(19, 'private', 'A-5', 1),
(20, 'private', 'A-6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users`, `fname`, `lname`, `username`, `email`, `address`, `mobile_number`, `password`, `usertype`) VALUES
(1, 'studentOne', 'quijani', 'Yanyan', 'luffy@gmail.com', 'Oroquieta City', '09668403948', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(2, 'Keanu ', 'Quijano', 'naddie', 'zamkeanu@gmail.com', 'Oroquieta City', '09665746546', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(3, 'Keanu ', 'Quijano', 'Stamborlyt199282', 'aaa@gmail.com', 'Oroquieta City', '09665746546', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(9, 'Keanu ', 'Quijano', 'Stamborlyt199282', 'hoho@aw', 'canubay', '09983232', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(10, 'Keanu ', 'Quijano', 'Stamborlyt199282', 'gege@geg', 'Oroquieta City', '09665746546', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(11, 'bob', 'keke', 'admin', 'admin@admin', 'Oroquieta City', '0966840283', '24b458370234d42ed8c85f62a0a63eac', 'admin'),
(12, 'Keanu ', 'Quijano', 'Administrator', 'admin24@123', 'Oroquieta City', '0993728', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(13, 'Keanu ', 'Quijano', 'naddie', 'new@new', 'Oroquieta City', '096682084736', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(14, 'pedot', 'gwapa', 'mami dotlang', 'pedot@123', 'mobod', '09878324', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(15, 'Administrator', 'admin', 'Administrator', 'admin123@admin', 'Layawan', '0972736', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(16, 'Keanu', 'P.Quijano', 'xt7ZXu', 'tete@tete', 'Canubay', '0967277', '24b458370234d42ed8c85f62a0a63eac', 'users'),
(17, 'Kevin', 'Quijano', 'Yip-Yip', 'hehe@hehe', 'Canubay', '0967277', '24b458370234d42ed8c85f62a0a63eac', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed capacity`
--
ALTER TABLE `bed capacity`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed capacity`
--
ALTER TABLE `bed capacity`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed capacity`
--
ALTER TABLE `bed capacity`
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
