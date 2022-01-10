-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 01:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_patients`
--

CREATE TABLE `accept_patients` (
  `id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `doctor_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept_patients`
--

INSERT INTO `accept_patients` (`id`, `patient_id`, `doctor_id`, `name`, `age`, `gender`, `details`) VALUES
(2, 1, 1, 'rahim', '25', 'male', 'fever'),
(3, 2, 2, 'karim', '30', 'male', 'dysentery');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `name`, `username`, `email`, `password`, `flag`) VALUES
(1, 'ash', 'ash12', 'ash@gmail.com', '12345', 1),
(2, 'karim', 'karim1', 'karim@gmail.com', '12345', 1),
(3, 'rahim', 'rahim1', 'rahim@gmail.com', '12345', 1),
(4, 'rahima', 'rahima1', 'rahima@gmail.com', '12345', 1),
(5, 'Dr anika', 'Dr anika', 'anika@gmail.com', '12346', 1),
(6, 'nusrat', 'nusrat1', 'nusrat@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `age`, `gender`, `blood_group`) VALUES
(1, 'rahima', '30', 'female', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `company`) VALUES
(1, 'ace', 'square'),
(2, 'ciprocin', 'square'),
(3, 'monas', 'acme'),
(4, 'tofen', 'beximco'),
(5, 'senabin', 'renata'),
(6, 'napa', 'beximco'),
(7, 'alatrol', 'square'),
(8, 'lorafast', 'square'),
(9, 'Ghitika', 'Hamdard');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `details` varchar(200) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `name`, `age`, `gender`, `details`, `flag`) VALUES
(1, 'rahim', '25', 'male', 'fever', 0),
(2, 'karim', '30', 'male', 'dysentery', 0),
(3, 'rahima', '35', 'female', 'diarrhea', 1),
(4, 'anika', '22', 'female', 'fever', 1),
(5, 'nusrat', '25', 'female', 'fever', 1),
(6, 'Farhan', '27', 'male', 'Asthma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_schedule`
--

CREATE TABLE `time_schedule` (
  `id` int(100) NOT NULL,
  `doctor_id` int(100) NOT NULL,
  `morning1` varchar(100) NOT NULL,
  `morning2` varchar(100) NOT NULL,
  `afternoon1` varchar(100) NOT NULL,
  `afternoon2` varchar(100) NOT NULL,
  `night1` varchar(100) NOT NULL,
  `night2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_schedule`
--

INSERT INTO `time_schedule` (`id`, `doctor_id`, `morning1`, `morning2`, `afternoon1`, `afternoon2`, `night1`, `night2`) VALUES
(1, 1, '10:00', '12:00', '16:00', '18:00', '19:00', '22:00'),
(2, 5, '10:00', '12:00', '12:01', '17:00', '19:00', '21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_patients`
--
ALTER TABLE `accept_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `time_schedule`
--
ALTER TABLE `time_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_patients`
--
ALTER TABLE `accept_patients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `time_schedule`
--
ALTER TABLE `time_schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
