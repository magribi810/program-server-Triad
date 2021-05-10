-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efaz5919_sbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelsensor`
--

CREATE TABLE `tabelsensor` (
  `A` float NOT NULL,
  `B` float NOT NULL,
  `C` float NOT NULL,
  `D` float NOT NULL,
  `E` float NOT NULL,
  `F` float NOT NULL,
  `G` float NOT NULL,
  `H` float NOT NULL,
  `I` float NOT NULL,
  `J` float NOT NULL,
  `K` float NOT NULL,
  `L` float NOT NULL,
  `M` float NOT NULL,
  `N` float NOT NULL,
  `O` float NOT NULL,
  `P` float NOT NULL,
  `Q` float NOT NULL,
  `R` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelsensor`
--

INSERT INTO `tabelsensor` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`, `M`, `N`, `O`, `P`, `Q`, `R`) VALUES
(31, 42, 66, 65, 64, 64, 64, 23, 42, 68, 53, 67, 44, 45, 87, 45, 64, 43),
(45, 95, 32, 46, 954, 64, 97, 123, 64, 8749, 156, 645, 651, 68, 3215, 651, 654, 654);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
