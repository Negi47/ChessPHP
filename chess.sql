-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 10:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chess`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameid` int(10) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `uid`) VALUES
(246, 8),
(140, 20),
(189, 20),
(543, 20),
(947, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `active` varchar(20) NOT NULL DEFAULT 'Not Active',
  `userlog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `email`, `active`, `userlog`, `lastlogin`) VALUES
(8, 'traitor', '12345', 'rohan@gmail.com', 'active', '2019-01-02 07:30:23', '2019-01-02 12:07:28'),
(16, 'someuser', 'bobthebuilder', 'bob@gmail.com', 'not active', '2018-12-30 11:10:00', '2018-12-30 10:30:28'),
(19, 'hello', 'password', 'narendra.negi47@gmail.com', 'not active', '2019-01-01 19:04:03', '2019-01-01 14:39:23'),
(20, 'negi47', '12345', 'narendra.negi67@gmail.com', 'not active', '2019-01-02 08:21:59', '2019-01-02 12:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE `moves` (
  `id` int(20) NOT NULL,
  `uid` int(10) NOT NULL,
  `gameid` int(20) NOT NULL,
  `dragfrom` varchar(10) NOT NULL,
  `dropto` varchar(10) NOT NULL,
  `dragele` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`id`, `uid`, `gameid`, `dragfrom`, `dropto`, `dragele`) VALUES
(1340, 20, 543, 'r2c6', 'r4c6', 'w-p6'),
(1341, 20, 543, 'r7c5', 'r5c5', 'b-p5'),
(1342, 20, 543, 'r2c4', 'r4c4', 'w-p4'),
(1343, 20, 543, 'r7c3', 'r5c3', 'b-p3'),
(1344, 20, 543, 'r4c6', 'r5c5', 'w-p6'),
(1345, 20, 543, 'r5c3', 'r4c3', 'b-p3'),
(1346, 20, 543, 'r2c2', 'r3c2', 'w-p2'),
(1347, 20, 543, 'r4c3', 'r3c2', 'b-p3'),
(1348, 20, 947, 'r2c5', 'r4c5', 'w-p5'),
(1349, 20, 947, 'r7c4', 'r5c4', 'b-p4'),
(1350, 20, 947, 'r4c5', 'r5c4', 'w-p5'),
(1351, 20, 947, 'r7c3', 'r5c3', 'b-p3'),
(1352, 20, 189, 'r2c5', 'r4c5', 'w-p5'),
(1355, 8, 246, 'r2c4', 'r4c4', 'w-p4'),
(1356, 20, 189, 'r7c6', 'r5c6', 'b-p6'),
(1357, 8, 246, 'r7c5', 'r5c5', 'b-p5'),
(1358, 8, 246, 'r2c2', 'r4c2', 'w-p2'),
(1359, 20, 140, 'r2c6', 'r4c6', 'w-p6'),
(1360, 20, 140, 'r7c6', 'r5c6', 'b-p6'),
(1361, 20, 140, 'r2c5', 'r4c5', 'w-p5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `gameid` (`gameid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1362;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `moves`
--
ALTER TABLE `moves`
  ADD CONSTRAINT `moves_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`),
  ADD CONSTRAINT `moves_ibfk_3` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
