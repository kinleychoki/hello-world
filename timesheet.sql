-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 06:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `password`, `cpassword`) VALUES
(1, 'jim', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b'),
(2, 'kim', '0d7e9415c7edd2c0abe0445cbc4a9254', '0d7e9415c7edd2c0abe0445cbc4a9254');

-- --------------------------------------------------------

--
-- Table structure for table `tabledata`
--

CREATE TABLE `tabledata` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `dayName` varchar(6) NOT NULL,
  `division` varchar(6) NOT NULL,
  `startTime` varchar(6) NOT NULL,
  `endTime` varchar(6) NOT NULL,
  `breakTime` varchar(6) NOT NULL,
  `totalTime` varchar(6) NOT NULL,
  `extraTime` varchar(6) NOT NULL,
  `extraWork` varchar(6) NOT NULL,
  `content` varchar(50) NOT NULL,
  `Wrecord` varchar(20) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabledata`
--

INSERT INTO `tabledata` (`id`, `date`, `dayName`, `division`, `startTime`, `endTime`, `breakTime`, `totalTime`, `extraTime`, `extraWork`, `content`, `Wrecord`, `user_id`) VALUES
(8, '2020-01-14', '火', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' development', '', 1),
(9, '2020-01-15', '水', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', 'database', '', 1),
(10, '2020-01-16', '木', '平日', '9.00', '16.45', '1.00', '6.45 ', '0 ', '0', ' timesheet', '', 1),
(11, '2020-01-17', '金', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', 'php', '', 1),
(14, '2020-01-20', '月', '平日', '9.00', '19.45', '1.30', '7.45', '1.30', '0', 'timesheet', '', 1),
(26, '2020-01-21', '火', '平日', '9.00', '18.45', '1.30', '7.45', '0.30', '0', 'database', '', 1),
(27, '2020-01-22', '水', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', 'php', '', 1),
(28, '2020-01-23', '木', '平日', '9.00', '17.45', '1.00', '7.45  ', '0   ', '0', 'database', '', 1),
(29, '2020-01-24', '金', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', 'time calculation', '', 1),
(30, '2020-01-25', '土', '休日', '9.00', '17.45', '1.00', '0', '7.45', '0', 'database', '', 1),
(31, '2020-01-26', '日', '休日', '10.00', '17.45', '1.00', '0', '0', '6.45', '  timesheet', '', 1),
(33, '2020-01-27', '水', '平日', '9.00', '15.40', '1.00', '5.40', '0', '0', ' time management', '早退', 1),
(66, '2020-01-17', '金', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', 'timesheet', '', 2),
(68, '2020-01-14', '火', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' time calculation', '', 2),
(69, '2020-01-15', '水', '平日', '9.00', '16.00', '1.00', '6.00', '0', '0', '  correction', '早退', 2),
(70, '2020-01-16', '木', '平日', '9.00', '18.45', '1.30', '7.45 ', '0.30 ', '0', ' test', '', 2),
(71, '2020-01-20', '月', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', '   button creation', '', 2),
(72, '2020-01-21', '火', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' home page design', '', 2),
(73, '2020-01-22', '水', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' timesheet\r\ndatabase', '', 2),
(74, '2020-01-23', '水', '平日', '9.00', '17.45', '1.00', '7.45  ', '0    ', '0', 'etc...', '', 2),
(75, '2020-01-24', '木', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' system management', '', 2),
(76, '2020-01-25', '木', '平日', '9.00', '17.45', '1.00', '7.45 ', '0 ', '0', ' management system\r\n', '', 2),
(77, '2020-01-26', '金', '平日', '10.00', '17.45', '1.00', '6.45', '0', '0', '  navigation button', '遅刻', 2),
(78, '2020-01-27', '木', '平日', '9.00', '17.45', '1.00', '7.45', '0', '0', '   php', '', 2),
(81, '2020-01-28', '月', '平日', '', '', '', '', '', '', '', '欠勤', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tabledata`
--
ALTER TABLE `tabledata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`,`user_id`),
  ADD KEY `foreign key` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabledata`
--
ALTER TABLE `tabledata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabledata`
--
ALTER TABLE `tabledata`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
