-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 07:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nightsafari_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `vote_animal`
--

CREATE TABLE `vote_animal` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Source` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vote_animal`
--

INSERT INTO `vote_animal` (`ID`, `Name`, `Timestamp`, `Source`) VALUES
(28, 'White Tiger', '2019-06-14 16:15:42', 2),
(29, 'Red-shanked douc', '2019-06-14 16:33:45', 1),
(30, 'White Tiger', '2019-06-14 16:34:31', 1),
(31, 'Asian Elephant', '2019-06-14 16:34:44', 2),
(32, 'Giraffe', '2019-06-14 18:01:48', 2),
(33, 'Giraffe', '2019-06-14 18:01:51', 2),
(34, 'Giraffe', '2019-06-14 18:01:54', 2),
(35, 'Giraffe', '2019-06-14 18:02:20', 2),
(36, 'Giraffe', '2019-06-14 18:02:21', 2),
(37, 'Giraffe', '2019-06-14 18:02:21', 2),
(38, 'Giraffe', '2019-06-14 18:02:22', 2),
(39, 'Giraffe', '2019-06-14 18:02:24', 2),
(40, 'Giraffe', '2019-06-14 18:02:39', 2),
(41, 'Giraffe', '2019-06-14 18:02:44', 2),
(42, 'White Tiger', '2019-06-14 18:04:58', 2),
(43, 'Giraffe', '2019-06-14 18:05:01', 2),
(44, 'Giraffe', '2019-06-14 18:05:04', 2),
(45, 'Giraffe', '2019-06-14 18:05:08', 2),
(46, 'White Tiger', '2019-06-14 18:05:10', 2),
(47, 'Asian Elephant', '2019-06-14 18:05:13', 2),
(48, 'Red-shanked douc', '2019-06-14 18:05:16', 2),
(49, 'Asian Elephant', '2019-06-14 18:05:19', 2),
(50, 'White Tiger', '2019-06-14 18:05:22', 2),
(51, 'Giraffe', '2019-06-14 18:05:24', 2),
(52, 'Asian Elephant', '2019-06-15 03:09:18', 2),
(53, 'White Tiger', '2019-06-15 03:10:21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vote_animal`
--
ALTER TABLE `vote_animal`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vote_animal`
--
ALTER TABLE `vote_animal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
