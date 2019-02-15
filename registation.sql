-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 10:26 AM
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
('dsfsf', 'sdfdsfds', 'do@gmail.com', '32432432432', '123'),
('dsc', 'adsadd', 'dos768@gmail.com', '32432432432', '123'),
('123', '1232', 'gg@gmail.com', '321321', '123'),
('xcvcvxzv', 'cvzxvzv', 'lovely@gmail.com', '123333', '123'),
('Pritam', 'Soni', 'pritamsoni5555@gmail.com', '9056186602', '123'),
('34254', '5435435', 'SONI@GMAIL.COM', '4324324324', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registation`
--
ALTER TABLE `registation`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
