-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness freak`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `docapp`) VALUES
('Raj', 'kumar', 'kumar@gmail.com', '201', '101'),
('saurabh', 'kumar', 'kumar121@gmail.com', '202', '102'),
('Suriya', 'Roy', 'suriya@gmail.com', '203', '103'),
('Raman', 'kumar', 'raman@gmail.com', '204', '103'),
('Aadarsh', 'thakur', 'thakur@gmail.com', '205', '103'),
('Rahul', 'kumar', 'rahul@gmail.com', '206', '102'),
('Sanjeev', 'Verma', 'verma12@gmail.com', '207', '103'),
('asraful islam ', 'sabbir', 'asrafulislamsabbir72@gmail.com', '208', '101'),
('eshita', 'eshu', 'eas@chgff.com', '209', '102'),
('fahim', 'hasan', 'fahim@gmail.com', '210', '103'),
('HR', 'Ratin', 'ratin@gmail.com', 'standard', '101');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `Instrument_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`Instrument_id`, `Name`, `Quantity`) VALUES
(1, 'Trademil', '10'),
(2, 'Dumbbel', '30'),
(3, 'Stationary Bike', '5'),
(4, 'Kettlebell', '20'),
(5, 'Bench', '15'),
(6, 'Chest Press Machine', '10'),
(7, 'Weight plate', '40');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'preliminary', 800),
('122', 'Wt. gain', 1500),
('123', 'Wt.loss', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Name On Card` varchar(255) NOT NULL,
  `Credit Card Number` varchar(255) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Name On Card`, `Credit Card Number`, `Month`, `Year`, `Amount`) VALUES
('Md.Asraful Islam Subbir', 'asrafulislamsabbir72@gmail.com', 'Dhorga bari road,Amanatgonj , Barishal', 'Barishal', 'k', '8200', '111', 'ss', '0000', '11', 0),
('Md.Asraful Islam Subbir', 'asrafulislamsabbir72@gmail.com', 'Dhorga bari road,Amanatgonj , Barishal', 'Barishal', 'iii', '8200', 'hh', '666', 'kk', '11', 1500),
('aa', 'adsa@dfg.com', 'hh', 'gg', 'ghss', '444', 'gg', '333', 'gg', '444', 1500),
('medha', 'medha@gmail.com', 'mogbazar', 'gram', 'bangladesh', '233', 'topper', '334352', 'feb', '23', 1000),
('ratin', 'ratin@gmail.com', 'bm clg', 'bar', 'ban', '8200', 'ratin', '25467688', 'june', '2023', 1000),
('fahim', 'fahim@gmail.com', 'usy', 'wee', 'eee', '3333', '444', '32847846326', 'octobar', '2023', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `phone`) VALUES
(101, 'Rakesh', 12365489),
(102, 'Ravi', 21365789),
(103, 'wasim', 123564789);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`) VALUES
(111, 'admin@gmail.com', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorapp`
--
ALTER TABLE `doctorapp`
  ADD PRIMARY KEY (`contact`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`Instrument_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `Instrument_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
