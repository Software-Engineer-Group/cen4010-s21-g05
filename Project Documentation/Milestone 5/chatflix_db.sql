-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 12:21 AM
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
-- Database: `chatflix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `defaultuser`
--

CREATE TABLE `defaultuser` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `fullName` varchar(20) DEFAULT NULL,
  `dateJoined` varchar(10) DEFAULT NULL,
  `userEmail` varchar(25) DEFAULT NULL,
  `activityStatus` int(11) DEFAULT NULL,
  `privacySet` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userBio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defaultuser`
--

INSERT INTO `defaultuser` (`id`, `user_id`, `user_name`, `password`, `avatar_id`, `fullName`, `dateJoined`, `userEmail`, `activityStatus`, `privacySet`, `date`, `userBio`) VALUES
(1, 235125794241, 'jabdool2016', 'abdool22', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-07 21:49:54', NULL),
(9, 5946914717974223, 'Steven23', '123test', NULL, 'Steven Richards', NULL, 'stevenwonder@gmail.com', NULL, NULL, '2021-04-07 23:17:40', 'Hey I am Steven!'),
(10, 567786186595862665, 'test123', '$2y$10$sU2s8a0pTUfyM', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-12 02:57:25', NULL),
(11, 8879557488973931, 'test', 'pass', NULL, '', NULL, '', NULL, NULL, '2021-04-13 07:33:09', ''),
(12, 9223372036854775807, 'test25', '$2y$10$cn96miCSboLNvoHjIwQhvOdL/Nv1rYI04iNRVqfbamAjYo12hARHO', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-14 22:12:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discgenre`
--

CREATE TABLE `discgenre` (
  `gid` int(11) NOT NULL,
  `genreTitle` varchar(100) NOT NULL,
  `genreDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discgenre`
--

INSERT INTO `discgenre` (`gid`, `genreTitle`, `genreDesc`) VALUES
(1, 'Season 1', 'Talk about general Season 1 moments here'),
(2, 'Season 2', 'Talk about general Season 2 moments here.');

-- --------------------------------------------------------

--
-- Table structure for table `discpost`
--

CREATE TABLE `discpost` (
  `threadId` int(11) NOT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `userName` varchar(20) NOT NULL,
  `postCont` varchar(2000) DEFAULT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discpost`
--

INSERT INTO `discpost` (`threadId`, `avatar_id`, `userName`, `postCont`, `gid`) VALUES
(19, NULL, '8879557488973931', 'testing', 1),
(20, NULL, '8879557488973931', 'yo', 1),
(22, NULL, '8879557488973931', 'COOOOOOOOOOOOOOOOOOOOOOOOOOM', 2),
(1, NULL, 'SillyMan12', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA ', 1),
(1, NULL, 'fassSass', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA ', 1),
(23, NULL, '8879557488973931', '', 1),
(24, NULL, '8879557488973931', '', 1),
(25, NULL, '8879557488973931', '', 1),
(0, NULL, '', '', 1),
(0, NULL, '', '', 1),
(0, NULL, '', '', 1),
(0, NULL, '8879557488973931', 'ffffff', 1),
(0, NULL, '8879557488973931', 'test reply', 1),
(0, NULL, '8879557488973931', 'test reply', 1),
(0, NULL, '8879557488973931', 'test reply', 1),
(0, NULL, '8879557488973931', 'test reply', 1),
(1, NULL, '8879557488973931', 'test reply', 1),
(1, NULL, '8879557488973931', 'another test reply', 1),
(1, NULL, '', 'tttttt', 1),
(1, NULL, 'test', 'fgggggggg', 1),
(1, NULL, 'test25', 'good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discthread`
--

CREATE TABLE `discthread` (
  `threadId` int(11) NOT NULL,
  `threadTopic` varchar(20) DEFAULT NULL,
  `gid` int(11) NOT NULL,
  `threadKeyword` varchar(100) DEFAULT NULL,
  `threadContent` varchar(2000) DEFAULT NULL,
  `userId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discthread`
--

INSERT INTO `discthread` (`threadId`, `threadTopic`, `gid`, `threadKeyword`, `threadContent`, `userId`) VALUES
(1, 'actions movies suc,', 1, 'action, movie', 'I think action movies suck, SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT ', 0),
(19, 'test', 1, 'ttttt', 'testing', 2147483647),
(20, 'yoyoy', 1, 'yo', 'yo', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE `friendlist` (
  `user_id` int(11) NOT NULL,
  `avatar_id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moduser`
--

CREATE TABLE `moduser` (
  `id` int(11) NOT NULL,
  `completed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `defaultuser`
--
ALTER TABLE `defaultuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `avatarId` (`avatar_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`) USING BTREE;

--
-- Indexes for table `discgenre`
--
ALTER TABLE `discgenre`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `discthread`
--
ALTER TABLE `discthread`
  ADD PRIMARY KEY (`threadId`);

--
-- Indexes for table `seriespg`
--
ALTER TABLE `seriespg`
  ADD PRIMARY KEY (`seriesId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defaultuser`
--
ALTER TABLE `defaultuser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `discgenre`
--
ALTER TABLE `discgenre`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discthread`
--
ALTER TABLE `discthread`
  MODIFY `threadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
