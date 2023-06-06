-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2021 at 06:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LOGIN`
--

-- --------------------------------------------------------

--
-- Table structure for table `REGISTER`
--

CREATE TABLE `REGISTER` (
  `USER_ID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `AGE` int(255) NOT NULL,
  `GENDER` enum('Male','Female') NOT NULL,
  `EMAIL_ID` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `REGISTER`
--

INSERT INTO `REGISTER` (`USER_ID`, `NAME`, `AGE`, `GENDER`, `EMAIL_ID`, `PASSWORD`) VALUES
(1, 'Prashansa Erande', 18, 'Female', 'prashansa@gmail.com', 'prash123'),
(2, 'Akshit Erande\r\n', 12, 'Male', 'aksh123@gmail.com', 'akshit123'),
(4, 'Sakshi Kadam ', 18, 'Female', 'sakshi14k@gmail.com', 'sakshi123'),
(6, 'Arfia Shaikh', 17, 'Female', 'skarfia@gmail.com', 'arfia123'),
(8, 'Yukta Khanekar', 18, 'Female', 'yukta11@gmail.com', 'yukta123'),
(9, 'Dhruv Trivedi', 23, 'Male', 'dhruv@gmail.com', 'dhruv123'),
(11, 'Shubham Jadhav', 23, 'Male', 'shubham9583@gmail.com', 'shu123'),
(12, 'Divya Agarwal', 30, 'Female', 'divya1@gmail.com', 'divya123'),
(15, 'Vaishnavi Rajguru', 32, 'Female', 'vaish111@gmail.com', 'vaish123'),
(16, 'Devesh Mahale', 20, 'Male', 'devesh10@gmail.com', 'dev123'),
(17, 'Shrey Raut', 23, 'Male', 'shrey10@gmail.com', 'shrey123'),
(18, 'Suyash Pawar', 19, 'Male', 'suyash492@gmail.com', 'suyash123'),
(19, 'Nandini Sawant', 27, 'Female', 'nandini21@gmail.com', 'nandini123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `REGISTER`
--
ALTER TABLE `REGISTER`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `REGISTER`
--
ALTER TABLE `REGISTER`
  MODIFY `USER_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
