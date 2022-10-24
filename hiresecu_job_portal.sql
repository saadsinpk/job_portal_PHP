-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 10:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiresecu_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

CREATE TABLE `appliedjobs` (
  `apId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`apId`, `UserId`, `JobId`, `Timestamp`) VALUES
(1, 2, 1, '2022-10-20 08:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `sender_userid` int(11) NOT NULL,
  `reciever_userid` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `sender_userid`, `reciever_userid`, `message`, `timestamp`) VALUES
(1, 2, 1, 'Hello', '2022-10-20 18:27:27'),
(2, 1, 2, 'Yes HRU?', '2022-10-20 18:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `JobId` int(11) NOT NULL,
  `Location` varchar(555) NOT NULL,
  `Days` varchar(250) NOT NULL,
  `Hours` varchar(25) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Pay` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `MasterLicenseNo` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Timestamp` datetime DEFAULT current_timestamp(),
  `UpdatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`JobId`, `Location`, `Days`, `Hours`, `Position`, `Pay`, `Description`, `MasterLicenseNo`, `Status`, `Timestamp`, `UpdatedOn`, `Uid`) VALUES
(1, 'Karachi', 'Mon,Tue,Wed,Thurs,Fri', '12:00pm - 08:00pm', 'Full Stack', '150000', 'Urgent Required', '1254-6532-4587', 'Available', '2022-10-20 23:11:02', '2022-10-20 20:25:44', 1),
(2, 'Lahore', 'Mon,Tue,Wed', '7hours', 'Retail Shopping Centre', '25000', 'Urgent Required!', '1254', 'Available', '2022-10-20 23:45:20', '2022-10-20 20:23:34', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `DriversLicense` varchar(555) NOT NULL,
  `SecurityLicense` varchar(555) NOT NULL,
  `CovidVacc` varchar(555) NOT NULL,
  `FirstAid` varchar(555) NOT NULL,
  `RSALicense` varchar(555) NOT NULL,
  `ProfileImage` varchar(555) NOT NULL,
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserId`, `FirstName`, `LastName`, `ContactNo`, `DriversLicense`, `SecurityLicense`, `CovidVacc`, `FirstAid`, `RSALicense`, `ProfileImage`, `Uid`) VALUES
(1, 'ZEESHAN', 'KHAN', '111111111', 'long-hairstyles-men-header.jpg', 'pump-shotgun.png', 'clipart3569503.png', 'Attachment_1645807549 (1).png', 'Attachment_1645807549.png', 'dotawallpapers.com-dread-retribution-wallpaper-4k-dota-2-2560x1440.jpg', 1),
(2, 'M.Muzammil', 'Umar Siddiqui', '23215699654', 'rocket-launcher (1).png', 'rocket-launcher.png', 'submachine.png', 'machine-gun.png', 'pngfind.com-csgo-guns-png-6784378.png', 'pump-shotgun.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `registrationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `uemail`, `upassword`, `registrationDate`) VALUES
(1, 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-20 08:07:40'),
(2, 'user1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-20 08:11:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD PRIMARY KEY (`apId`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  MODIFY `apId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
