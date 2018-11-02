-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 11:54 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcat`
--

CREATE TABLE `tblcat` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcat`
--

INSERT INTO `tblcat` (`cid`, `cname`) VALUES
(1, 'sports'),
(2, 'foods'),
(3, 'cars'),
(4, 'bikes'),
(10, 'bikes'),
(11, 'bikes'),
(12, 'clothes'),
(13, 'Rendomize');

-- --------------------------------------------------------

--
-- Table structure for table `tblimg`
--

CREATE TABLE `tblimg` (
  `iid` int(10) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `pid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblimg`
--

INSERT INTO `tblimg` (`iid`, `iname`, `pid`) VALUES
(1, 'index.jpg', 1),
(2, 'Penguins.jpg', 5),
(3, 'cp ans.txt', 2),
(4, 'popular-3.jpg', 1),
(5, 'latest-2.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblpro`
--

CREATE TABLE `tblpro` (
  `pid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` double NOT NULL,
  `pdetails` text NOT NULL,
  `ptags` varchar(100) NOT NULL,
  `pcid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpro`
--

INSERT INTO `tblpro` (`pid`, `pname`, `pprice`, `pdetails`, `ptags`, `pcid`) VALUES
(1, 'Zinger Burger', 250, 'This is a tasty burger', 'burgur,food,eat', 2),
(2, 'Accp Pro', 300000, 'course IT ', 'web development,IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `uid` int(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `uname`, `upass`, `utype`) VALUES
(1, 'sam', '202cb962ac59075b964b07152d234b70', 'Admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpro`
-- (See below for the actual view)
--
CREATE TABLE `vpro` (
`pid` int(10)
,`pname` varchar(100)
,`pprice` double
,`pdetails` text
,`ptags` varchar(100)
,`pcid` int(10)
,`cname` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `vpro`
--
DROP TABLE IF EXISTS `vpro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpro`  AS  select `a`.`pid` AS `pid`,`a`.`pname` AS `pname`,`a`.`pprice` AS `pprice`,`a`.`pdetails` AS `pdetails`,`a`.`ptags` AS `ptags`,`a`.`pcid` AS `pcid`,`b`.`cname` AS `cname` from (`tblpro` `a` join `tblcat` `b` on((`a`.`pcid` = `b`.`cid`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcat`
--
ALTER TABLE `tblcat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tblimg`
--
ALTER TABLE `tblimg`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `tblpro`
--
ALTER TABLE `tblpro`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcat`
--
ALTER TABLE `tblcat`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblimg`
--
ALTER TABLE `tblimg`
  MODIFY `iid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpro`
--
ALTER TABLE `tblpro`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
