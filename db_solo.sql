-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 03:31 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `tb_det_lowongan`
--

CREATE TABLE `tb_det_lowongan` (
  `id_detlow` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_lowongan`
--

INSERT INTO `tb_det_lowongan` (`id_detlow`, `id_lowongan`, `id_pelamar`) VALUES
(3, 1, 1),
(9, 1, 2),
(10, 1, 5),
(5, 2, 1),
(6, 2, 2),
(8, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_workshop`
--

CREATE TABLE `tb_det_workshop` (
  `id_detwork` int(11) NOT NULL,
  `id_workshop` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_workshop`
--

INSERT INTO `tb_det_workshop` (`id_detwork`, `id_workshop`, `id_pelamar`) VALUES
(3, 1, 1),
(4, 1, 2),
(6, 1, 5);

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
  `desk_lowongan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `posisi_lowongan`, `status_lowongan`, `gaji_lowongan`, `pengalaman_lowongan`, `desk_lowongan`) VALUES
(1, 1, 'Chief Technology Officer', 'Active', 100000000, '7+ years’ software engineering and IT experience, Proven track record of success in leadership positions, Familiarity with marketing platforms, programs and policies, Extensive experience with MVC frameworks, Exceptional project management and organization skills', '7+ years’ software engineering and IT experience, Proven track record of success in leadership positions, Familiarity with marketing platforms, programs and policies, Extensive experience with MVC frameworks, Exceptional project management and organization skills'),
(2, 15, 'Systems Analyst', 'Active', 10000000, '7 tahun mager', 'Sarjana Mager Professional'),
(8, 1, 'OB', 'Active', 15000000, 'asdasd', 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nik_pelamar` varchar(17) NOT NULL,
  `npwp_pelamar` varchar(50) NOT NULL,
  `nama_pelamar` varchar(50) NOT NULL,
  `alamat_pelamar` text NOT NULL,
  `kelamin_pelamar` varchar(1) NOT NULL,
  `tplahir_pelamar` varchar(50) NOT NULL,
  `tglahir_pelamar` date NOT NULL,
  `agama_pelamar` varchar(10) NOT NULL,
  `status_pelamar` varchar(2) NOT NULL,
  `tinggi_pelamar` int(3) NOT NULL,
  `berat_pelamar` int(3) NOT NULL,
  `telp_pelamar` varchar(15) NOT NULL,
  `email_pelamar` varchar(50) NOT NULL,
  `password_pelamar` varchar(64) NOT NULL,
  `confirm_password_pelamar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `nik_pelamar`, `npwp_pelamar`, `nama_pelamar`, `alamat_pelamar`, `kelamin_pelamar`, `tplahir_pelamar`, `tglahir_pelamar`, `agama_pelamar`, `status_pelamar`, `tinggi_pelamar`, `berat_pelamar`, `telp_pelamar`, `email_pelamar`, `password_pelamar`, `confirm_password_pelamar`) VALUES
(1, '3510130312970001', '03.026.562.3-805.000', 'Ady Bagus Sugih Susanto', 'Rogojampi, Banyuwangi', 'L', 'Banyuwangi', '1997-12-03', 'Islam', 'BN', 172, 65, '082232567731', '4yukihana@gmail.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307'),
(2, '3510130607690001', '03.026.562.3-805.000', 'Yulianto', 'Rogojampi, Banyuwangi', 'L', 'Yogyakarta', '1969-07-06', 'Islam', 'SN', 170, 70, '082839303948', 'asd@gmail.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307'),
(5, '3510130607690002', '03.026.562.3-805.000', 'Hatsune Miku', 'UwU', 'P', 'UwU', '2007-08-31', 'Kristen', 'BN', 158, 42, '123', 'hatsune@miku.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307'),
(6, '3510130607690003', '03.026.562.3-805.000', 'Kiana Kaslana', 'UwU', 'P', 'UwU', '7777-12-07', 'Kristen', 'BN', 163, 49, '123', 'kiana@kaslana.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307');

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
  `password_perusahaan` varchar(64) NOT NULL,
  `confirm_password_perusahaan` varchar(64) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `lengkap_perusahaan`, `npwp_perusahaan`, `alamat_perusahaan`, `telp_perusahaan`, `email_perusahaan`, `password_perusahaan`, `confirm_password_perusahaan`, `date_created`) VALUES
(1, 'Dana', 'PT. Espay Debit Indonesia Koe', '03.026.562.3-805.000', 'Capital Place fl.18, Jl. Gatot Subroto, RT.6/RW.1, Kuningan Bar., Kec. Mampang Prpt., Kota Jakarta Selatan', '1 500 445', 'dana@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(3, 'OVO', 'PT. Visionet Internasional', '03.026.562.3-805.000', 'Lippo Kuningan Lt. 20, Jl. HR. Rasuna Said Kav. B-12 Setiabudi, Jakarta 12940', '1 500 696', 'cs@ovo.id', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(4, 'Go Pay', 'PT Aplikasi Karya Anak Bangsa', '03.026.562.3-805.000', 'Pasaraya Blok M Gedung B Lt. 6,\r\nJalan Iskandarsyah II No.7, RW. 2, Melawai, Kebayoran Baru, RT.3/RW.1, Melawai, Kby. Baru,\r\nKota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160', '1 500 445', 'gopay@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(5, 'Gojek', 'PT Aplikasi Karya Anak Bangsa', '03.026.562.3-805.000', 'Pasaraya Blok M Gedung B Lt. 6,\r\nJalan Iskandarsyah II No.7, RW. 2, Melawai, Kebayoran Baru, RT.3/RW.1, Melawai, Kby. Baru,\r\nKota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160', '1 500 445', 'gojek@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(6, 'Grab', 'Grab Holdings Inc', '03.026.562.3-805.000', 'Jl. Klampis Jaya 8H, Klampis Ngasem, Kec. Sukolilo, Kota SBY, Jawa Timur 60117', '(021) 80648777', 'grab@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(7, 'Google', 'Google LLC', '03.026.562.3-805.000', '1600 Amphitheatre Parkway, Mountain View, California, U.S.', '1 500 445', 'google@llc.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(8, 'Air Asia', 'AirAsia Group', '03.026.562.3-805.000', 'Kuala Lumpur International Airport', '(021) 29270999', 'airasia@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(9, 'Honda', 'Honda Motor Company, Ltd', '03.026.562.3-805.000', 'Minato, Tokyo, Japan', '1 500 445', 'honda@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(10, 'Yamaha', 'PT. Yamaha Indonesia Motor Manufacturing', '03.026.562.3-805.000', 'Jl. DR. KRT. Rajiman Widyodiningrat\r\n(Jl. Raya Bekasi Km 23) Pulo Gadung\r\nJakarta 13920, Indonesia', '1 500 445', 'yamaha@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(11, 'Kawasaki', 'Kawasaki Motor Indonesia', '03.026.562.3-805.000', 'Jl. Madura Blok L11, Kawasan Industri MM2100,\r\nCikarang Barat, Bekasi 17530', '1 500 445', 'kawasaki@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(12, 'Garuda Indonesia', 'PT Garuda Indonesia Tbk', '03.026.562.3-805.000', 'Soekarno–Hatta International Airport', '1 500 445', 'garuda@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(13, 'Garnier', 'PT. L\'Oreal Indonesia', '03.026.562.3-805.000', 'DBS Bank Tower 29th FL - Ciputra World 1, Jl. Prof. Dr. Satrio kav. 3-5, Jakarta 12940, Indonesia', '1 500 445', 'garnier@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(14, 'Sony', 'Sony Corporation', '03.026.562.3-805.000', 'Nihonbashi, Tokyo, Japan', '1 500 445', 'sony@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(15, 'Apple', 'Apple Inc.', '03.026.562.3-805.000', 'Cupertino, California', '1 500 445', 'apple@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(16, 'Microsoft', 'Microsoft Corporation', '03.026.562.3-805.000', 'Redmond, Washington, United States', '1 500 445', 'microsoft@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(17, 'Cisco', 'PT. Cisco System Indonesia', '03.026.562.3-805.000', 'Perkantoran Hijau Arkadia Siemens Tower F Lantai 5, Jl. TB Simatupang No.88, RT.1/RW.2, Kebagusan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520', '1 500 445', 'cisco@indonesia.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', '2019-11-30'),
(18, 'Uwu', 'PT. Uwu', '03.026.562.3-805.000', 'asda', '123', 'uwu@indonesia.com', '174a3f4fa44c7bb22b3b6429cb4ea44c', '174a3f4fa44c7bb22b3b6429cb4ea44c', '2019-12-06'),
(19, 'Uwu2', 'PT. Uwu2', '03.026.562.3-805.0002', 'asda2', '1232', 'uwu2@indonesia.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2019-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL,
  `status_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`, `status_role`) VALUES
(1, 'Super Admin', 'Active'),
(2, 'Admin', 'Active'),
(5, 'rolas', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(64) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(64) NOT NULL,
  `confirm_password_user` varchar(64) NOT NULL,
  `id_role` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username_user`, `email_user`, `password_user`, `confirm_password_user`, `id_role`, `date_created`) VALUES
('a87ff679a2f3e71d9181a67b7542122c', 'ss', 'yukiq', 'asd@asd.com', '6d1bd1aa1f32499e4ec69dc8dce2cc5b', '6d1bd1aa1f32499e4ec69dc8dce2cc5b', 1, '2019-12-07'),
('c4ca4238a0b923820dcc509a6f75849b', 'Yuki', 'yuki', '4yukihana@gmail.com', 'ffbd6cbb019a1413183c8d08f2929307', 'ffbd6cbb019a1413183c8d08f2929307', 1, '2019-11-29'),
('c81e728d9d4c2f636f067f89cc14862c', 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1, '2019-11-29'),
('eccbc87e4b5ce2fe28308fd9f2a7baf3', 'mimin', 'mimin', 'mimin@gmail.com', '03f7f7198958ffbda01db956d15f134a', '03f7f7198958ffbda01db956d15f134a', 2, '2019-12-05');

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
  `status_workshop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_workshop`
--

INSERT INTO `tb_workshop` (`id_workshop`, `nama_workshop`, `lokasi_workshop`, `tanggal_workshop`, `kuota_workshop`, `status_workshop`) VALUES
(1, 'BYTE (Becraft Young Technology Enterpreneur)s', 'Dafam Lotus Jembers', '2020-12-02', 3, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_det_lowongan`
--
ALTER TABLE `tb_det_lowongan`
  ADD PRIMARY KEY (`id_detlow`),
  ADD KEY `id_lowongan` (`id_lowongan`,`id_pelamar`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `tb_det_workshop`
--
ALTER TABLE `tb_det_workshop`
  ADD PRIMARY KEY (`id_detwork`),
  ADD KEY `id_workshop` (`id_workshop`,`id_pelamar`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`),
  ADD UNIQUE KEY `nik_pelamar` (`nik_pelamar`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_user` (`username_user`);

--
-- Indexes for table `tb_workshop`
--
ALTER TABLE `tb_workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_det_lowongan`
--
ALTER TABLE `tb_det_lowongan`
  MODIFY `id_detlow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_det_workshop`
--
ALTER TABLE `tb_det_workshop`
  MODIFY `id_detwork` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_workshop`
--
ALTER TABLE `tb_workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_det_lowongan`
--
ALTER TABLE `tb_det_lowongan`
  ADD CONSTRAINT `tb_det_lowongan_ibfk_1` FOREIGN KEY (`id_lowongan`) REFERENCES `tb_lowongan` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_det_lowongan_ibfk_2` FOREIGN KEY (`id_pelamar`) REFERENCES `tb_pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_det_workshop`
--
ALTER TABLE `tb_det_workshop`
  ADD CONSTRAINT `tb_det_workshop_ibfk_1` FOREIGN KEY (`id_workshop`) REFERENCES `tb_workshop` (`id_workshop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_det_workshop_ibfk_2` FOREIGN KEY (`id_pelamar`) REFERENCES `tb_pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD CONSTRAINT `tb_lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
