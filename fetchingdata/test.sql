-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 05:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentbookingdata`
--

CREATE TABLE `appointmentbookingdata` (
  `ID` int(250) NOT NULL,
  `SelectedPlan` varchar(250) NOT NULL,
  `AppointmentRequest` date NOT NULL,
  `Contactnumber` int(250) NOT NULL,
  `PromoCode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookcounsellingplans`
--

CREATE TABLE `bookcounsellingplans` (
  `ID` int(250) NOT NULL,
  `PlanName` varchar(250) NOT NULL,
  `Amount` int(250) NOT NULL,
  `Created_at` timestamp(6) NULL DEFAULT NULL,
  `Updated_at` timestamp(6) NULL DEFAULT NULL,
  `GST` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcounsellingplans`
--

INSERT INTO `bookcounsellingplans` (`ID`, `PlanName`, `Amount`, `Created_at`, `Updated_at`, `GST`) VALUES
(1, 'Free', 0, '2021-03-25 11:00:45.000000', '2021-03-25 11:00:45.000000', 18),
(2, 'Preliminary Session', 550, '2021-03-25 11:00:45.000000', '2021-03-25 11:00:45.000000', 18),
(3, 'Comprehensive Session', 750, '2021-03-25 11:02:25.000000', '2021-03-25 11:02:25.000000', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentbookingdata`
--
ALTER TABLE `appointmentbookingdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookcounsellingplans`
--
ALTER TABLE `bookcounsellingplans`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
