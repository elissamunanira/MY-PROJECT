-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 10:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `FNAME`, `LNAME`, `email`, `password`) VALUES
(1111, 'Elissa', 'MUNANIRA', 'munanira64@gmail.com', '123454321');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(255) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `TELEPHONE` int(20) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `FNAME`, `LNAME`, `email`, `password`, `TELEPHONE`, `admin_id`) VALUES
(2222, 'ERIC', 'MAHORO', 'mahoro@gmail.com', '123456', 98765432, 12345),
(3256, 'dsvcb ', 'dfvb', 'qerwgfd@gmail.com', 'ewdf', 1266657, 0),
(3333, 'Gelard', 'NDUWAYEZU', 'nduwagelard@gmail.com', 'jerari', 0, 0),
(4444, 'Aimable', 'MAHORO', 'aimablemahoro@gmail.com', 'mahony', 0, 0),
(5555, 'marc', 'Habakubaho', 'marchabakuba@gmail.com', '4321@mnmh', 785243361, 1111),
(6666, 'abraham', 'Ndizeye', 'abrahamndizeye@gmail.com', '4321@an', 788654322, 1111),
(7777, 'emmauel', 'Murindahabi', 'emmymurinda@gmail.com', '4321@em', 78525464, 1111),
(8888, 'elie', 'Rukundo', 'elierukundo@gmail.com', '4321@er', 788654387, 1111),
(9999, 'fidele', 'niyonzima', 'Niyonzima', 'niyofid@1', 788654321, 1111),
(789876546, 'edwsdf', 'ggggggfd', 'gfdfg@d', 'hjgfds', 7686543, 789876546);

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `client_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `date_of_request` int(11) NOT NULL,
  `date_of_getting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `account_no` int(15) NOT NULL,
  `user_id` int(16) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `TELNO` int(30) NOT NULL,
  `BALANCE` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`FNAME`, `LNAME`, `account_no`, `user_id`, `username`, `password`, `TELNO`, `BALANCE`, `created_at`) VALUES
('ERIC', 'MUNEZERO', 36, 155555666, 'MUNEZERO', 'muner@1', 2147483647, 0, '2021-08-15 08:57:43'),
('Olivier', 'NTAGENGWA', 42, 413427658, 'NTAGENGWA', 'ntagol@1', 78333555, 0, '2021-08-14 19:12:34'),
('ERIC', 'TUYIRI', 47, 144576, 'TUYIRI', 'ERICT', 2147483647, 0, '2021-08-14 19:12:34'),
('Eric', 'HAKIZA', 49, 17, 'hakiza@eric', '123456', 98756, 10000, '2021-08-14 19:12:34'),
('Gilbert', 'TUYISHIME', 50, 40, 'Tuyishime', 'TUYIGIL@1', 78966666, 0, '2021-08-14 19:12:34'),
('KARAKE', 'Emma', 144, 1111113, '1112', 'wrfd', 7771, 67623871, '2021-08-14 19:13:09'),
('Emmy', 'HARERA', 10001, 453, 'harera@emmy', '35462354', 781234356, 0, '2021-08-14 19:12:34'),
('Jean', 'KWIZERA', 10002, 14758, 'kwizera@jean', '8754210', 784325645, 0, '2021-08-14 19:12:34'),
('Emma', 'KARAKE', 10003, 1234, 'karake@emma', '1234e', 783456213, 15000, '2021-08-14 19:12:34'),
('Jeanne', 'HERENA', 10004, 12334, 'herenajeanne@gmail.com', '13333', 785634254, 0, '2021-08-14 19:12:34'),
('BEN ', 'USABAYEZU', 12435, 2147483647, 'USABAYEZU', 'usababen@1', 2147483647, 20000, '2021-08-14 19:12:34'),
('iktyr', 'i7yurtre', 12439, 0, 'trsdsda', 'jygfgd', 23456, 0, '2021-08-16 09:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `client_id` int(20) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `date_of_request` date NOT NULL,
  `date_of_getting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `country` varchar(15) NOT NULL,
  `province` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `client_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TRANSNO` int(11) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ACCNO` int(50) NOT NULL,
  `DEBITAM` int(50) NOT NULL,
  `CREDITAM` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TRANSNO`, `DATE`, `ACCNO`, `DEBITAM`, `CREDITAM`) VALUES
(12, '2021-08-16 14:28:29', 435, 3353400, 21000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANSNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `account_no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12440;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANSNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
