-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 03:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsalesf1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpremium`
--

CREATE TABLE `tblpremium` (
  `premiumid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `subscriptionRate` double NOT NULL,
  `subscriptionDuration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `acctid` bigint(20) UNSIGNED NOT NULL,
  `emailadd` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isPublisher` tinyint(1) NOT NULL,
  `isReader` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`acctid`, `emailadd`, `username`, `password`, `isPublisher`, `isReader`) VALUES
(1, '', 'sdsa', '', 0, 0),
(2, 'sdsale', 'sdsales', '', 0, 0),
(3, 'summer@gmail.com', 'summerbatignawng', 'summer123', 0, 0),
(4, 'rhixinvalles@gmail.c', 'zhaztedbreezy', 'zhazteddy', 0, 0),
(5, '', 'zha', '', 0, 0),
(6, 'stephensales@gmail.c', 'stephensales', 'stephen', 0, 0),
(7, 'sdasdade@gmail', 'stapsal', 'asdwdasdw', 0, 0),
(8, 'wdwdwd@gmail.com', 'adwdwd', 'sadawdwd', 0, 0),
(9, 'sdasdawdw@gmail.com', 'awdwad', 'qdqwdqwd', 0, 0),
(10, 'gemrodz@gmail.com', 'gemrods', 'asdwdasd', 0, 0),
(11, 'sdsalesstpn@gmail.co', 'kiemondeu', 'SDSelas147', 0, 0),
(12, 'rodgem@gmail.com', 'rodgem', 'rodel', 0, 0),
(13, 'weetoa@gmail.com', 'Weetoa', 'adrian', 0, 0),
(14, 'ibambz@gmail.com', 'bambz', 'bbm', 0, 0),
(16, 'mrloverman@gmail.com', 'mrloverman', 'love', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `userid` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `accType` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `favGenre` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`userid`, `firstname`, `lastname`, `gender`, `birthdate`, `accType`, `country`, `favGenre`, `age`) VALUES
(13, 'Stephen', 'Sales', 'Male', '0000-00-00', 'User', 'Philippines', 'Romance', 2024),
(14, 'Roddneil', 'Gemina', 'Other', '1907-11-14', 'Publisher', 'China', 'Action', 116),
(15, 'Adrian', 'Sajulga', 'Male', '2024-05-21', 'User', 'Malaysia', 'Romance', 0),
(16, 'Bambi', 'Bascug', 'Female', '2024-02-06', 'Publisher', 'USA', 'Romance', 0),
(18, 'Mr', 'Loverman', 'Other', '2003-02-14', 'User', 'France', 'Comedy', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpremium`
--
ALTER TABLE `tblpremium`
  ADD PRIMARY KEY (`premiumid`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD UNIQUE KEY `acctid` (`acctid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpremium`
--
ALTER TABLE `tblpremium`
  MODIFY `premiumid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
