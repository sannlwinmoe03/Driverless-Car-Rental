-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 10:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driverless`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `adminname`, `email`, `password`, `username`) VALUES
(0, 'nan', 'nannan@gmail.com', '1234', 'nanan');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `CarID` int(11) NOT NULL,
  `Image` varchar(30) DEFAULT NULL,
  `CarBrandsName` varchar(20) DEFAULT NULL,
  `CarName` varchar(30) DEFAULT NULL,
  `CarType` varchar(30) DEFAULT NULL,
  `EngineType` varchar(30) DEFAULT NULL,
  `Model` varchar(30) DEFAULT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `EnginePower` varchar(20) DEFAULT NULL,
  `Seats` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`CarID`, `Image`, `CarBrandsName`, `CarName`, `CarType`, `EngineType`, `Model`, `Color`, `EnginePower`, `Seats`, `Quantity`, `UnitPrice`) VALUES
(4, '../imagesdownload (2).jpg', 'Tesla', 'Tesla Model 3', 'Van', 'Electric', '2020', 'White', '1000', 5, 6, 200),
(7, '../imagestesla model s.jpg', 'Tesla', 'Tesla Model S', 'Sedan', 'Electric', '2021', 'Red', '1020', 5, 8, 300),
(8, '../imagestesla model x.jpg', 'Tesla', 'Tesla Model X', 'Van', 'Electric', '2019', 'White', '1020', 7, 5, 400),
(13, '../imagestesla model y.jpg', 'Tesla', 'Tesla Model Y', 'Sedan', 'Electric', '2021', 'Blue', '1020', 5, 9, 400);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Sann Lwin Moe', 'sannlwinmoe19@gmail.', 'reason', 'I will late.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullName`, `username`, `email`, `dob`, `phonenumber`, `address`, `postcode`, `city`, `state`, `country`, `gender`, `password`) VALUES
(11, 'SANN LWIN MOE', 'admin', 'sannlwinmoe19@gmail.com', '2010-02-19', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', 'male', 'samsam'),
(13, 'SANN LWIN MOE', 'sannlwinmoe', 'SANNLWINMOE19@GMAIL.COM', '2021-10-01', '', 'Si Sone street, Sanchaung township', '', 'Yangon', 'yangon', '', '', 'sannlwinmoe@03'),
(14, 'YE MIN', 'yemin', 'yemin@gmail.com', '2021-10-01', '', 'Sanchaung township', '', 'Yangon', 'Yangon', '', '', 'yemin'),
(15, 'minmin', 'yemin', 'yemin@gmail.com', '2021-10-01', '', 'Si Sone street, Sanchaung township', '', 'Yangon', 'yangon', '', '', 'yemin'),
(16, 'SANN LWIN MOE', 'aamin', 'SANNLWINMOE19@GMAIL.COM', '2021-10-05', '', 'Si Sone street, Sanchaung township', '', 'Yangon', 'yangon', '', '', '1234'),
(17, 'SANN LWIN MOE', 'aamin', 'SANNLWINMOE19@GMAIL.COM', '2021-10-05', '', 'Si Sone street, Sanchaung township', '', 'Yangon', 'yangon', '', '', '1234'),
(21, 'SANN LWIN MOE', 'aamin', 'SANNLWINMOE19@GMAIL.COM', '2021-10-05', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', '', '1234'),
(22, 'Nan Nan', 'nanan', 'nannan@gmail.com', '2021-10-02', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', '', '1234'),
(23, 'hmu', 'hmu', 'hmu@gmail.com', '2021-02-04', '09777177356', 'Sanchaung township', '11111', 'Yangon', 'Yangon', 'Myanmar', '', '1234'),
(24, 'SANN LWIN MOE', 'admin', 'sannlwinmoe19@gmail.com', '2010-02-19', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', 'male', 'samsam'),
(25, 'SANN LWIN MOE', 'admin', 'sannlwinmoe19@gmail.com', '2003-02-19', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', 'male', 'samsam'),
(26, 'SANN LWIN MOE', 'sannlwinmoe', 'sannlwinmoe19@gmail.com', '2003-02-19', '+959777177356', 'Si Sone street, Sanchaung township', '11111', 'Yangon', 'yangon', 'Myanmar', 'male', 'samsam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
