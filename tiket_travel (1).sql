-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 06:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nick_user` int(11) NOT NULL,
  `pass_user` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kdpembayaran` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kdpesan` int(11) NOT NULL,
  `jum` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telepon` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kdpesan`, `jum`, `nama`, `email`, `telepon`) VALUES
(1, 1, 'daad', 'aadas@gmail.com', 834342334),
(2, 1, 'Gabril', 'gabril@gmailcom', 823545466),
(3, 1, 'Gabril', 'gabril@gmailcom', 823545466),
(4, 1, 'andika', 'aadas@gmail.com', 834342334),
(6, 1, 'Rinto', 'aadas@gmail.com', 834342334);

-- --------------------------------------------------------

--
-- Table structure for table `pendafatar`
--

CREATE TABLE `pendafatar` (
  `telepon` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('P','W') DEFAULT NULL,
  `umur` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nick` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kdtiket` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `wkt_berangkat` datetime NOT NULL,
  `wkt_tiba` datetime NOT NULL,
  `tmpt_tujuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`nick_user`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kdpembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kdpesan`);

--
-- Indexes for table `pendafatar`
--
ALTER TABLE `pendafatar`
  ADD PRIMARY KEY (`telepon`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kdtiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `nick_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kdpembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kdpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kdtiket` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
