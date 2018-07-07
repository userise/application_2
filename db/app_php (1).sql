-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 10:33 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `colid` int(11) NOT NULL,
  `collegename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`colid`, `collegename`) VALUES
(1, 'Atmiya collge Rajkot'),
(2, 'AVPTI college rajkot'),
(3, 'VVP college Rajkot'),
(4, 'Patel Girls collge Junagad'),
(5, 'Goverment college Rajkot'),
(6, 'Labu bhai Trivedi college Rajkot'),
(7, 'Maravadi uvivercity Rajkot'),
(8, 'Vivekanand college of engineering rajkot'),
(9, 'Mj kundaliya colege rajkot'),
(10, 'jj kundaliya colege rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Usa'),
(3, 'China'),
(4, 'Australia'),
(5, 'Banagaladesh'),
(6, 'Srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eduid` int(11) NOT NULL,
  `eduname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eduid`, `eduname`) VALUES
(1, 'B.Tech(IT)'),
(2, 'M.Tech(IT)'),
(3, 'B.Tech(CSE)'),
(4, 'M.Tech(CSE)'),
(5, 'BCA'),
(6, 'MCA'),
(7, 'BSC(IT)'),
(8, 'MSC(IT)'),
(9, 'Diploma'),
(10, 'BE(IT)'),
(11, 'ME(IT)'),
(12, 'BA'),
(13, 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`, `cid`) VALUES
(1, 'Gujrat', 1),
(2, 'Uttar pradesh', 1),
(3, 'Madhya pradesh', 1),
(4, 'Punjab', 1),
(5, 'Assam', 1),
(6, 'Karnatka', 1),
(7, 'California', 2),
(8, 'Neyork', 2),
(9, 'Newjarcy', 2),
(10, 'dhaka', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `upload_photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `eduid` int(11) NOT NULL,
  `colid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `upload_cv` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `tehsil` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `upload_photo`, `username`, `mobile`, `email`, `password`, `gender`, `hobby`, `dob`, `message`, `eduid`, `colid`, `year`, `upload_cv`, `address1`, `address2`, `tehsil`, `village`, `cid`, `sid`, `city`) VALUES
(1, 'upload/5.jpg', 'jjjj', 9111, 'b@gmail.com', '1223', 'male', 'read,play,dance', '1/1/1970', 'jkjkj', 1, 1, 1970, 'upload/5.jpg', 'kjkjkj', 'kjkjk', 'kjkjk', 'kjkjk', 1, 1, 'rajkot'),
(2, 'upload/blogs.jpg', 'kjkkjk', 9454545454, 'jhjhjhj@gmail.com', '123456', 'male', 'read,play', '1/1/1970', 'xvvbcxvxc', 2, 1, 1970, 'upload/blogs.png', 'kjkjkjkj', 'kjkjkjk', 'jkjkjkj', 'kjkjkj', 1, 1, 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eduid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `eduid` (`eduid`),
  ADD KEY `colid` (`colid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `colid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eduid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
