-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 03:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatflix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `seriespg`
--

CREATE TABLE `seriespg` (
  `seriesId` int(11) NOT NULL,
  `seriesSeasons` int(11) DEFAULT NULL,
  `seriesName` varchar(50) NOT NULL,
  `seriesBio` text DEFAULT NULL,
  `seriesLink` varchar(100) NOT NULL,
  `seriesKeywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seriespg`
--

INSERT INTO `seriespg` (`seriesId`, `seriesSeasons`, `seriesName`, `seriesBio`, `seriesLink`, `seriesKeywords`) VALUES
(2, NULL, 'Grey\'s Anatomy', 'Meredith Grey and friends learn how to do doctor stuff.', 'http://localhost/chatflix/greys.php', 'grey g grey\'s grey anatomy gray grays gray\'s '),
(3, NULL, 'Guardians of the Galaxy', 'A band of intergalactic outlaws who teamed together to protect the galaxy from planetary threats.', 'http://localhost/chatflix/guardians.php', 'g gu gua guard guardian guardians gala galaxy of the'),
(4, NULL, 'Spirited Away', 'A 10-year-old girl who, while moving to a new neighborhood, enters the world of spirits.', 'http://localhost/chatflix/spirited.php', 's spir spirit spirited aw away'),
(5, NULL, 'Jurassic Park', 'Scientists visiting a safari amusement park of genetically engineered dinosaurs on an island over one weekend.', 'http://localhost/chatflix/jurassic.php', 'j jur juras jurasic jurassic pa par park'),
(6, NULL, 'Forrest Gump', 'The story of a man whose slow-wittedness doesn\'t hold him back.', 'http://localhost/chatflix/forrest.php', 'f for forr forrest gu gum gump'),
(7, NULL, 'Friends', 'Three young men and three young women live in the same apartment complex and face life and love in New York.', 'http://localhost/chatflix/friend.php', 'f fr fri friend friends'),
(8, NULL, 'Parks and Recreation', 'A story that revolves around Leslie Knope, the deputy director of the parks and recreation department in the fictional Indiana town of Pawnee.', 'http://localhost/chatflix/parks.php', 'p par park parks and r re recre recrea recreat recreation '),
(9, NULL, 'Game of Thrones', 'Nine noble families fight for control of the mythical land of Westeros.', 'http://localhost/chatflix/got.php', 'g ga game of th thr thro thron thrones');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seriespg`
--
ALTER TABLE `seriespg`
  ADD PRIMARY KEY (`seriesId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
