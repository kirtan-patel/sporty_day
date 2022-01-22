-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 08:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Number` int(50) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `D.O.B` varchar(20) NOT NULL,
  `Age` int(50) NOT NULL,
  `Games` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `Name`, `Number`, `Gender`, `D.O.B`, `Age`, `Games`) VALUES
(1, 'kirtan kamlesh Patel', 700116183, 'male', '01/03/1999', 23, 'swim,rally,kabaddi,'),
(2, 'kirtan kamlesh Patel', 700116183, 'male', '01/03/1999', 23, 'swim,rally,kabaddi,'),
(3, 'kirtan kamlesh Patel', 700116183, 'male', '01/01/2001', 21, 'swim,rally,kabaddi,'),
(5, 's kamlesh Desai', 700116183, 'male', '01/30/1986', 35, 'Obstacle Race,Frozen Tshirt,Khaudra Gali,'),
(6, 'kirtan kamlesh Patel', 2147483647, 'male', '01/23/2001', 20, 'Slip & Slide,Obstacle Race,Frozen Tshirt,'),
(7, 'kirtan kamlesh Amin', 700116183, 'male', '01/31/2006', 15, 'Track Events,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
