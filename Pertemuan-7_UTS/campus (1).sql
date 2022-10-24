-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 03:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `nrp` char(12) DEFAULT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `id_prodi`, `nrp`, `nama_mhs`, `alamat_mhs`) VALUES
(1, 5, '210411100100', 'Apinnndgdf', 'Gresik, Jawa timur'),
(2, 4, '210411100101', 'aaadsdefer', 'Gresik'),
(3, 6, '210411100102', 'Bagas', 'Sidoarjo'),
(4, 7, '210411100103', 'Bagus', 'Lamongan'),
(5, 2, '210411100104', 'Evy', 'Balongpanggang'),
(6, 4, '210411100105', 'Era', 'Nganjuk'),
(19, 4, '210411100783', 'Ach Ilham Firmansyah', 'Gresik'),
(22, 2, '5345345', 'dgdgdf', 'fhfhgf'),
(23, 1, '867987', 'hdfhdfh', 'gdgdfg'),
(24, 1, '534634', 'aaaa', 'dsgdf'),
(29, 4, '427427394729', 'Muhammad Muqtafin Nuha', 'Gresik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) DEFAULT NULL,
  `ket_prodi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `nama_prodi`, `ket_prodi`) VALUES
(1, 'Fakultas Hukum', 'aktif'),
(2, 'Fakultas Pertanian', 'aktif'),
(3, 'Fakultas Ekonomi', 'aktif'),
(4, 'Fakultas Teknik', 'aktif'),
(5, 'FISIB', 'aktif'),
(6, 'FIP', 'aktif'),
(7, 'FKIs', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_fakultas` (`id_prodi`) USING BTREE;

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD CONSTRAINT `FK_tbl_mhs_tbl_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_prodi` (`id_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
