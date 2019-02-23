-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 06:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catId` int(20) NOT NULL,
  `catName` varchar(50) NOT NULL,
  `catType` varchar(50) NOT NULL,
  `catdesc` varchar(1000) NOT NULL,
  `catdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catId`, `catName`, `catType`, `catdesc`, `catdate`) VALUES
(52, 'Pritam', 'silver', 'GOOD', '2019-02-21'),
(53, 'xyz', 'silver', 'sdfafdsfds', '2019-02-21'),
(54, 'Chain', 'silver', 'gold', '2019-02-21'),
(55, 'Sonis', 'silver', 'dffsfdsfds', '2019-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES
('Pritam', '', ' fgdgfdgdfgfdgdf'),
('Pritam', 'Soni@gmail.com', ' dsffdsf'),
('hhgjhg', 'Soni@gmail.com', ' dfdfds'),
('Pritam', 'dsadsa@gmail.com', ' sdadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
('Pritam', 'ghfhgfhgf@gmail.com', ' sadadsa'),
('dfdsf', 'ghfhgfhgf@gmail.com', ' fdsfdsf'),
('dsfsdfdsf', 'gg@gmail.com', ' fdsfdsfdsfdsfdsfds'),
('dfs', 'dsadsa@gmail.com', ' dsadsad'),
('Pritam', 'ghfhgfhgf@gmail.com', ' dsadasdsa'),
('Pritam', 'fdsf@gmail.com', ' asdsadas'),
('Pritam', 'fdsf@gmail.com', ' dfdsfds'),
('Pritam', 'ghfhgfhgf@gmail.com', ' ddf'),
('Pritam', 'dsadsa@gmail.com', ' sadsadsa'),
('hhhh@gmail.com', 'hhhhhhhh@gmail.com', ' Good'),
('Pritam', 'fdsf@gmail.com', ' fdgfd'),
('Sonip', 'sonip@gmail.com', ' Good');

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE `registation` (
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registation`
--

INSERT INTO `registation` (`Fname`, `Lname`, `Email`, `Phone`, `Password`) VALUES
('455', '435435', 'bb@gmail.com', '34324324', '123'),
('Deepak', 'Soni', 'deepaksoni@gmail.com', '90675654656', '123'),
('G', 'Kumar', 'g@gmail.com', '9067564545', '123'),
('dsd', 'dsadsadadas', 'hhhhh@gmail.com', '2341423143242', '123'),
('Pritam', 'Kumar', 'pritamsoni5555@gmail.com', '9078675656', '123'),
('saurav', 'soni', 'saurav@gmail.com', '09897987978', '123'),
('user', 'soni', 'user@gmail.com', '9078675656', '123');

-- --------------------------------------------------------

--
-- Table structure for table `subemail`
--

CREATE TABLE `subemail` (
  `Suemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subemail`
--

INSERT INTO `subemail` (`Suemail`) VALUES
('ghfhgfh@gmail.com'),
('pritamsoni5555@gmail.com'),
('pritamsoni5555@gmail.com'),
('deepaksoni@gmail.com'),
('deepaksoni@gmail.com'),
('deepaksoni@gmail.com'),
('deepaksoni@gmail.com'),
('ghfhgfh@gmail.com'),
('saurav@gmail.com'),
('saurav@gmail.com'),
('saurav@gmail.com'),
('dddd@gmail.com'),
('hhhhhhhhhh@gmail.com'),
('hhhhhhhhhh@gmail.com'),
(''),
(''),
(''),
(''),
('hhhhhhhhhh@gmail.com'),
(''),
(''),
('dfdsfdsf@gmail.com'),
('dfdsfdsf@gmail.com'),
('deepaksoni@gmail.com'),
('dddd@gmail.com'),
('bb@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `registation`
--
ALTER TABLE `registation`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
