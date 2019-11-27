-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 10:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_solo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `posisi_lowongan` varchar(150) NOT NULL,
  `status_lowongan` varchar(10) NOT NULL,
  `gaji_lowongan` int(11) NOT NULL,
  `pengalaman_lowongan` text NOT NULL,
  `desk_lowongan` text NOT NULL,
  `id_pelamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nik_pelamar` int(17) NOT NULL,
  `npwp_pelamar` varchar(50) NOT NULL,
  `nama_pelamar` varchar(50) NOT NULL,
  `alamat_pelamar` text NOT NULL,
  `kelamin_pelamar` varchar(2) NOT NULL,
  `tempatlahir_pelamar` varchar(50) NOT NULL,
  `tanggallahir_pelamar` date NOT NULL,
  `agama_pelamar` varchar(10) NOT NULL,
  `status_pelamar` varchar(2) NOT NULL,
  `tinggi_pelamar` int(3) NOT NULL,
  `berat_pelamar` int(3) NOT NULL,
  `telp_pelamar` varchar(15) NOT NULL,
  `email_pelamar` varchar(50) NOT NULL,
  `password_pelamar` varchar(64) NOT NULL,
  `confirm_password_pelamar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `lengkap_perusahaan` text NOT NULL,
  `npwp_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `telp_perusahaan` varchar(15) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(64) NOT NULL,
  `confirm_password_user` varchar(64) NOT NULL,
  `id_role` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_workshop`
--

CREATE TABLE `tb_workshop` (
  `id_workshop` int(11) NOT NULL,
  `nama_workshop` varchar(150) NOT NULL,
  `lokasi_workshop` text NOT NULL,
  `tanggal_workshop` date NOT NULL,
  `kuota_workshop` int(11) NOT NULL,
  `status_workshop` varchar(10) NOT NULL,
  `id_pelamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_workshop`
--
ALTER TABLE `tb_workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_workshop`
--
ALTER TABLE `tb_workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
