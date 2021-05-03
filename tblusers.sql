-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 08:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(140, 'Justine', 'Ambrad', 'chief@gmail.com', '0943467292', 'Talamban', '2021-05-01 07:39:16'),
(141, 'Romeo', 'Rodemio', 'romeo@gmail.com', '13235678975', 'Dalaguete', '2021-05-01 07:51:55'),
(145, 'Aldrin ', 'Odiong', 'aldrin@gmail.com', '01324845111', 'Dalaguete', '2021-05-01 08:01:32'),
(156, 'Mary Anne', 'Telez', 'telex@gmail.com', '1215455', 'Pinamungajan', '2021-05-02 05:53:29'),
(159, 'Jolly', 'Borbon', 'jolly23@gmail.com', '0943467292', 'Argao', '2021-05-02 05:57:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
