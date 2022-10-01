-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 07:37 AM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `nama` text NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nim`, `jabatan`, `nilai`, `nama`, `jenis`) VALUES
(1, '215160100111001', 'Juara III', 1.29, 'Solo Medical Cup 2018', 'ORGANISASI'),
(2, '215160100111001', 'Anggota', 1.17, 'Klub Basket 2018', 'PENMAS'),
(3, '215160100111001', 'Pemateri', 1.09, 'Sekolah Ilmiah 2018', 'PENALARAN'),
(4, '215160100111002', 'Suporter', 0.14, 'P3MU 2018', 'PENALARAN'),
(5, '215160100111003', 'Peserta', 0.12, 'SEMUSIM 2018', 'PENALARAN'),
(6, '215160100111002', 'SC', 0.25, 'AIJECT 2018', 'ORGANISASI'),
(7, '215160100111004', 'SC', 0.51, 'MUNJAM 2018', 'ORGANISASI'),
(8, '215160100111003', 'Juara III', 1.2, 'Solo Medical Cup 2018', 'LAIN-LAIN'),
(9, '215160100111004', 'SC', 0.52, 'MUNJAM 2018', 'ORGANISASI'),
(10, '215160100111001', 'Anggota', 0.17, 'Klub Basket 2018', 'LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `angkatan`, `alamat`, `hp`, `email`, `jk`) VALUES
(1, '215160100111001', 'Winda Ayu Lestari', '2021', 'P', '098756392265', 'p', 'P'),
(2, '215160100111002', 'Kayla Putri Vania Laowo', '2021', 'p', '0868948995', 'p', 'P'),
(3, '215160100111003', 'Asyell Rachielah Nahwa S', '2021', 'P', '098756392265', 'p', 'P'),
(4, '215160100111004', 'Nila Nurhalizah', '2021', 'P', '098756392265', 'p', 'P'),
(5, '215160100111005', 'Humaira Adiiba I', '2021', 'P', '098756392265', 'p', 'P'),
(6, '215160100111006', 'Alifiyan Agung A', '2021', 'P', '098756392265', 'p', 'P'),
(7, '215160100111007', 'Putri Nabila M', '2021', 'P', '098756392265', 'p', 'P'),
(8, '215160107111001', 'Silvia Fauziyah Z', '2021', 'P', '098756392265', 'p', 'P'),
(9, '215160107111002', 'Tarissa Quin N', '2021', 'P', '098756392265', 'p', 'P'),
(10, '215160107111003', 'M Zakka Fuad A', '2021', 'P', '098756392265', 'p', 'L'),
(11, '215160107111004', 'Raka Naufal A', '2021', 'P', '098756392265', 'p', 'L'),
(12, '215160107111005', 'Hazel Geraldy M', '2021', 'P', '098756392265', 'p', 'L'),
(13, '215160107111006', 'Fionna Kynda P', '2021', 'P', '098756392265', 'p', 'P'),
(14, '215160107111007', 'Baiq Fadhila A', '2021', 'P', '098756392265', 'p', 'L'),
(15, '215160100111008', 'Gracella P', '2021', 'P', '098756392265', 'p', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `probinmaba`
--

CREATE TABLE `probinmaba` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `pk2maba` int(1) NOT NULL,
  `bkm` int(1) NOT NULL,
  `pkmmaba` int(1) NOT NULL,
  `penmas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `probinmaba`
--

INSERT INTO `probinmaba` (`id`, `nim`, `pk2maba`, `bkm`, `pkmmaba`, `penmas`) VALUES
(1, '215160100111001', 1, 1, 1, 1),
(3, '215160100111002', 1, 1, 1, 1),
(4, '215160100111003', 0, 0, 0, 0),
(5, '215160100111004', 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Naufal Ulinnuha', 'naufal', '21232f297a57a5a743894a0e4a801fc3', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `probinmaba`
--
ALTER TABLE `probinmaba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `probinmaba`
--
ALTER TABLE `probinmaba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
