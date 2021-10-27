-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2021 at 01:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Videos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Email`, `username`, `password`) VALUES
(28, 'hello1@gmail.com', 'hello1', 'hello1'),
(3, '', 'infs', '3202'),
(38, 'fundkfnkd@gmail.com', 'jfdnfkdjn', 'ikslnsnlsfl'),
(42, 'lel@gmail.com', 'lel', 'lel'),
(41, 'lol@gmail.com', 'lol', 'lol'),
(31, 'mjkid221@gmail.com', 'mjkid', 'test'),
(1, 'mlee221@eq.edu.au', 'mlee221', 'mlee221'),
(39, 'oimfimdlfm@gmail.com', 'mlsdmlsm', 'jsndksnkjsd'),
(44, 'okay@gmail.com', 'okay', 'okayokay'),
(46, 's4536380@uqconnect.edu.au', 's4536380', '45363809'),
(37, 'skmlkdsmsldk', 'sjdnskjndkls', 'dsklksdm kl'),
(11, 'testing@gmail.com', 'testing', 'testing'),
(12, 'testing2@gmail.com', 'testing2', 'yeet'),
(45, 'testtest@gmail.com', 'testtest', 'lkdmlskd ls'),
(43, 'yes@gmail.com', 'yes', 'yesyes');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CID` int(11) NOT NULL,
  `VID` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `posted_dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CID`, `VID`, `content`, `username`, `posted_dateTime`) VALUES
(1, 8, 'Test comment. Ignore.', 'lel', '0000-00-00 00:00:00'),
(2, 8, 'Okay let\'s go', 'mlee221', '0000-00-00 00:00:00'),
(3, 8, 'OMG it\'s working', 'mlee221', '0000-00-00 00:00:00'),
(4, 8, ' Enter comment.', 'mlee221', '0000-00-00 00:00:00'),
(5, 15, 'Thanks for the upload!', 'lol', '0000-00-00 00:00:00'),
(6, 15, 'Testingfor time', 'lol', '2020-05-31 08:01:01'),
(7, 15, ' Enter comment.', 'okay', '2020-05-31 18:28:24'),
(8, 15, 'Liked', 'mlee221', '2020-05-31 21:40:18'),
(9, 15, 'Another test', 'mlee221', '2020-05-31 22:37:49'),
(10, 15, 'Ok so what is this', 'mlee221', '2020-09-10 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `LID` int(11) NOT NULL,
  `VID` int(11) NOT NULL,
  `UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`LID`, `VID`, `UID`) VALUES
(1, 15, 41),
(2, 15, 1),
(3, 14, 1),
(4, 15, 12),
(5, 15, 43);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `ID_MASTER` int(11) NOT NULL,
  `ID_FOLLOWER` int(11) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `VID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `UID` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `uploaded_dateTime` datetime NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VID`, `description`, `UID`, `title`, `filename`, `uploaded_dateTime`, `likes`) VALUES
(8, 'This is an example upload 1.', 1, 'Example Upload 1', 'uploads/Example1.mp4', '0000-00-00 00:00:00', 0),
(14, 'Pleasework.', 42, 'Pleasewor', 'uploads/Example1.mp4', '0000-00-00 00:00:00', 1),
(15, 'This is a very bunny video. Enjoy.', 41, 'Very Bunny Video', 'uploads/mov_bbb.mp4', '0000-00-00 00:00:00', 4),
(17, 'Date and time description', 41, 'TestingdateandTime f', 'uploads/mov_bbb.mp4', '2020-05-31 12:34:38', 0),
(22, 'The most important part of developing database systems is to repeat....', 44, 'Populating Video Num', 'uploads/mov_bbb.mp4', '2020-05-31 18:37:20', 0),
(23, 'The most important part of developing database systems is to repeat....', 44, 'Populating Video Num', 'uploads/mov_bbb.mp4', '2020-05-31 18:37:30', 0),
(24, 'In order to resolve database problems, one must populate the database...', 44, 'Populating Database ', 'uploads/mov_bbb.mp4', '2020-05-31 18:44:08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

