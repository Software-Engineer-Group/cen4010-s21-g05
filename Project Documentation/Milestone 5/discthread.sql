-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 02:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `discthread`
--

CREATE TABLE `discthread` (
  `threadId` bigint(20) NOT NULL,
  `threadTopic` varchar(200) DEFAULT NULL,
  `gid` int(11) NOT NULL,
  `threadKeyword` varchar(100) NOT NULL,
  `threadContent` varchar(2000) NOT NULL,
  `userId` int(20) NOT NULL,
  `userName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discthread`
--

INSERT INTO `discthread` (`threadId`, `threadTopic`, `gid`, `threadKeyword`, `threadContent`, `userId`, `userName`) VALUES
(26, 'Lion King', 2, 'lion king', 'Fuck Scar', 0, 'smiley');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discthread`
--
ALTER TABLE `discthread`
  ADD PRIMARY KEY (`threadId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discthread`
--
ALTER TABLE `discthread`
  MODIFY `threadId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
