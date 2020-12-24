-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 12:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
`id` int(11) NOT NULL,
  `announcement` varchar(50) NOT NULL,
  `bloodneed` varchar(3) NOT NULL,
  `dat` date NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `dat`, `organizer`, `requirements`) VALUES
(1, 'DEMO ANNOUNCEMENT', 'B+', '2018-06-24', 'Helping Hands', 'Weight at least 50kg, No alcohol intake in 24hrs prior to donation, light meal should be taken before donation, be in good health, must be 18 years old and must have at least 3 month interval than the last donation.');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bloodqty` int(11) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `bloodqty`, `collection`) VALUES
(3, 'shawn mendez', 'M', '1997-05-26', 60, 'b-', 'los', '8521479633', 310, '2018-02-20'),
(4, 'Tony Stark', 'M', '1966-08-08', 65, 'a+', 'demo address', '1237896540', 321, '2018-02-20'),
(8, 'bruno den', 'M', '1991-05-26', 88, 'o+', 'demo address', '8555555545', 360, '2016-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `campaigndb`
--

CREATE TABLE IF NOT EXISTS `campaigndb` (
`id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `phn` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigndb`
--

INSERT INTO `campaigndb` (`id`, `cname`, `oname`, `phn`, `cdate`, `descp`) VALUES
(7, 'demo', 'demo', 2147483647, '2017-05-05', 'demo'),
(8, 'Saving Lives Together', 'demo organizer', 1597534560, '2018-06-21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES
(18, 'demo', 'demo', 'M', '2020-09-03', 50, 'b+', 'demo@demo.com', 'demo', '8520002500', 'demo', 'demo'),
(19, 'Harry Den', 'Stephen Den', 'M', '1998-06-17', 70, 'B+', 'harry.den20@gmail.co', 'Demo Address', '7854445420', 'harry', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `donorname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `donorname`) VALUES
(1, 'user', 'pass', 'harryden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndb`
--
ALTER TABLE `campaigndb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `campaigndb`
--
ALTER TABLE `campaigndb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
