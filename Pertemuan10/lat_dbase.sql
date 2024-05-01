-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 06:22 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE `tblmhs` (
  `Nim` int(9) NOT NULL,
  `Nama_awal` varchar(20) NOT NULL,
  `Nama_akhir` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`Nim`, `Nama_awal`, `Nama_akhir`, `Tanggal_lahir`, `Umur`) VALUES
(21110, 'Firman', 'Sadewa', '2003-01-04', 21),
(21144, 'Rafli', 'Eka Putra', '2003-06-11', 20),
(21177, 'Ahmad', 'Saputra', '2000-05-21', 23),
(21188, 'Nanang', 'Komarudin', '2000-04-03', 24),
(21199, 'Fahmi', 'Bukhori', '2000-06-02', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD PRIMARY KEY (`Nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmhs`
--
ALTER TABLE `tblmhs`
  MODIFY `Nim` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21200;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
