-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 04:12 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--
CREATE DATABASE IF NOT EXISTS `inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `staffid` varchar(50) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int(11) NOT NULL,
  `itemid` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `requestdate` varchar(50) DEFAULT NULL,
  `returndate` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `itemid`, `purpose`, `requestdate`, `returndate`, `department`, `firstname`, `lastname`, `venue`, `date`) VALUES
(1, 'ds/02/ru/20', 'desktop', '2016-06-05', '2016-06-05', 'SIET', 'Kalaba', 'Goat', 'Ikeji', '2016-06-02 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE IF NOT EXISTS `borrowers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `firstname`, `lastname`, `title`, `id_number`, `level`, `department`) VALUES
(2, 'Nat', 'Abanga', 'Student', '12453', '200 ', 'Telecommunication'),
(3, 'sumaiya ', 'hussain', 'Student', '01280112', '400', 'Info. System Science'),
(4, 'bernice', 'abban', 'Student', '01550112', '400', 'Computer Science'),
(5, 'Jeffrey Boma ', 'Kio', 'Student', '01250133', '100', 'Info. System Science'),
(7, 'bernice', 'abban', 'Lecturer', '123', '100', 'Info. System Science'),
(8, 'Mr. Chris', 'Quist', 'Lecturer', 'STF13', '100', 'Info. System Science');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`) VALUES
(1, 'Projector'),
(2, 'Mouse'),
(3, 'keyboard'),
(4, 'monitor'),
(5, 'desktop'),
(6, 'extension wire'),
(7, 'router'),
(8, 'modem'),
(9, 'externalharddrive'),
(10, 'extensionwire'),
(11, 'digitalcamera'),
(12, 'ups'),
(13, 'hardwareutensils'),
(14, 'printer'),
(16, 'scanner');

-- --------------------------------------------------------

--
-- Table structure for table `dismissed`
--

DROP TABLE IF EXISTS `dismissed`;
CREATE TABLE IF NOT EXISTS `dismissed` (
  `id` int(11) NOT NULL,
  `itemname` varchar(20) DEFAULT NULL,
  `itemid` int(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `brandname` varchar(50) DEFAULT NULL,
  `serialno` varchar(20) DEFAULT NULL,
  `staffincharge_id` int(11) DEFAULT NULL,
  `purchasecost` int(20) DEFAULT NULL,
  `warranty` varchar(20) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `arrivaldate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL,
  `itemid` varchar(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `arrival_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'AVAILABLE',
  `warranty` varchar(50) DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `purchase_cost` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemid`, `name`, `category`, `brand_name`, `serial_no`, `arrival_date`, `description`, `status`, `warranty`, `supplier`, `manufacturer`, `purchase_cost`) VALUES
(13, 'ds/02/ru/20', 'mouse', 'desktop', NULL, '', '2016-06-03 00:36:02', 'This is a new mouse', 'BORROWED', '4 months', 'BEST & CROMPTON ENG. LTD.', 'Apple', '25.00'),
(14, 'pr/01/ru/16', 'projector', 'Projector', NULL, '', '2016-06-03 01:37:22', 'white projector ', 'AVAILABLE', '1 month', 'GHANA TECH CENTER', 'HP', '400'),
(15, 'pr/02/ru/16', 'projector', 'Projector', NULL, '', '2016-06-03 01:38:05', 'white projector ', 'AVAILABLE', '1 month', 'BEST BUY COMPUTERS', 'Dell', '400'),
(16, 'pr/03/ru/16', 'projector', 'Projector', NULL, '', '2016-06-03 01:38:34', 'white projector ', 'AVAILABLE', '1 month', 'BEST BUY COMPUTERS', 'Toshiba', '400'),
(18, 'ms/01/ru/16', 'mouse', 'Mouse', NULL, '', '2016-06-03 01:41:07', 'white mouse with pear shape', 'AVAILABLE', '2 months', 'GHANA TECH CENTER', 'Dell', '20'),
(19, 'ms/02/ru/16', 'mouse', 'Mouse', NULL, '', '2016-06-03 01:41:26', 'white mouse with pear shape', 'AVAILABLE', '2 months', 'GHANA TECH CENTER', 'Dell', '20'),
(20, 'ms/03/ru/16', 'mouse', 'Mouse', NULL, '', '2016-06-03 01:41:33', 'white mouse with pear shape', 'AVAILABLE', '2 months', 'GHANA TECH CENTER', 'Dell', '20'),
(21, 'ds/01/ru/16', 'Desktop', 'desktop', NULL, '', '2016-06-03 01:43:19', 'ash apple desktop', 'AVAILABLE', '1 year', 'BEST BUY COMPUTERS', 'Apple', '1,000'),
(22, 'ds/02/ru/16', 'Desktop', 'desktop', NULL, '', '2016-06-03 01:44:07', 'black desktop', 'AVAILABLE', '1 year', 'BEST BUY COMPUTERS', 'Toshiba', '800'),
(23, 'sc/01/ru/16', 'scanner', 'scanner', NULL, '', '2016-06-03 01:44:54', 'scanner', 'AVAILABLE', 'None', 'BEST BUY COMPUTERS', 'HP', '800'),
(25, 'ms/20/ru/16', 'mouse', 'Mouse', NULL, '', '2016-06-03 13:34:58', 'dep', 'AVAILABLE', 'None', 'BEST BUY COMPUTERS', 'Apple', '12'),
(26, 'ca/01/ru/16', 'cable', 'extensionwire', NULL, '', '2016-06-03 13:45:19', 'cfdfdf', 'AVAILABLE', '9 months', 'GHANA TECH CENTER', 'Dell', '11');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturer_id` varchar(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `firstname`, `lastname`, `department`) VALUES
('RU0553', 'Dilys', 'Dickson', 'SIET'),
('RU0854', 'Chris', 'Quist', 'SIET');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `type`) VALUES
(1, 'Apple'),
(2, 'Asus'),
(3, 'Canon'),
(4, 'Cisco'),
(5, 'Dell'),
(6, 'Microsoft'),
(7, 'Toshiba'),
(8, 'TP-Link'),
(9, 'Samsung'),
(10, 'Binatone'),
(11, 'Toshiba'),
(12, 'LG'),
(13, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `level` int(50) DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `level`, `department`) VALUES
('00710112', 'Stephen', 'Okwechime', 400, 'SIET');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

DROP TABLE IF EXISTS `stuff`;
CREATE TABLE IF NOT EXISTS `stuff` (
  `Stuff_id` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `faculty` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `arrival_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone_number`, `arrival_date`, `country`, `city`, `email`) VALUES
(3, 'GHANA TECH CENTER', 'Tema Greater Accra', '0303212323', '2016-06-01 15:59:46', 'GHANA', 'Tema', 'info@ghanatechcenter.com'),
(4, 'BEST BUY COMPUTERS', 'T junction, kotobabi, Accra, Ghana', '0244698456', '2016-06-01 16:02:13', 'GHANA', 'Accra', 'bestcomputers@gmail.com'),
(7, 'BEST & CROMPTON ENG. LTD.', 'Trobu St. near Darold Hotel, New Achimota,Accra,Ghana', '0302400096', '2016-06-01 16:32:13', 'GHANA', 'Accra', 'best&cromp@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) unsigned NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `othernames` varchar(50) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `othernames`, `username`, `badge`, `sex`, `password`, `level_user`, `date`) VALUES
(1, 'Ruffy', 'Rufaida', NULL, 'admin', NULL, NULL, '7f6a9ce5c2da3a874c51869e6af2800d', 'admin', NULL),
(2, 'rufaida', 'adamu', 'hussaini', 'Ruffy', NULL, 'FAS ', '7f6a9ce5c2da3a874c51869e6af2800d', 'member', '2016-05-31 21:45:12'),
(3, 'Danny', 'Kobe', '', 'dan', NULL, 'SIET', '21232f297a57a5a743894a0e4a801fc3', 'member', '2016-06-03 04:29:20'),
(4, 'Roggy', 'Mean', '', 'Rog', NULL, 'male', '81dc9bdb52d04dc20036dbd8313ed055', 'member', '2016-06-03 04:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`) VALUES
(1, 'LH201'),
(2, 'LH202'),
(3, 'LH203'),
(4, 'MPH300'),
(5, 'GF001'),
(6, 'GF002');

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
CREATE TABLE IF NOT EXISTS `warranty` (
  `warid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`warid`, `type`) VALUES
(1, 'None'),
(2, '1 month'),
(3, '2 months'),
(4, '3 months'),
(5, '4 months'),
(6, '5 months'),
(7, '6 months'),
(8, '7 months'),
(9, '8 months'),
(10, '9 months'),
(11, '10 months'),
(12, '11 months'),
(13, '1 year'),
(14, '2 years'),
(15, '3 years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`), ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dismissed`
--
ALTER TABLE `dismissed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `itemid` (`itemid`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`Stuff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranty`
--
ALTER TABLE `warranty`
  ADD PRIMARY KEY (`warid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dismissed`
--
ALTER TABLE `dismissed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `Stuff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `warranty`
--
ALTER TABLE `warranty`
  MODIFY `warid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
