-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 07:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemName`, `price`) VALUES
(4, 'Cake', 15),
(2, 'Coffee', 10),
(3, 'Samosa', 15),
(1, 'Tea', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ram', 'ram123'),
('umesh', 'umesh');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `password`, `phone`, `email`, `address`) VALUES
('Ram Kumar', 'ram', 'ram123', '8738433332', 'ramsharma@gmail.com', 'Ranchi'),
('Umesh Kumar Rana', 'umesh', 'umesh', '7631200530', 'umesh.rana0269@gmail.com', 'Ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `sold_item`
--

CREATE TABLE `sold_item` (
  `empname` varchar(20) NOT NULL,
  `itemsold` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(4) NOT NULL,
  `totalamount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_item`
--

INSERT INTO `sold_item` (`empname`, `itemsold`, `date`, `quantity`, `totalamount`) VALUES
('umesh', 'Cake', '2018-06-23', 3, 45),
('umesh', 'Samosa', '2018-06-13', 4, 60),
('umesh', 'Samosa', '2018-06-25', 5, 75),
('umesh', 'Coffee', '2018-06-25', 3, 30),
('umesh', 'Cake', '2018-06-25', 5, 75),
('admin', 'Samosa', '2018-06-18', 5, 75),
('admin', 'Cake', '2018-06-05', 15, 225),
('umesh', 'Cake', '2018-06-24', 4, 60),
('umesh', 'Coffee', '2018-06-05', 14, 40),
('ram', 'Cake', '2018-06-25', 2, 30),
('ram', 'Coffee', '2018-06-25', 9, 90),
('ram', 'Samosa', '2018-06-18', 15, 225),
('umesh', 'Coffee', '2018-12-13', 4, 40),
('umesh', 'Tea', '2018-12-21', 5, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
