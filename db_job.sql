-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 04:31 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_account`
--

CREATE TABLE `t_account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nik` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_account`
--

INSERT INTO `t_account` (`id_account`, `username`, `password`, `email`, `nik`, `level`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 1234567890, 1),
(2, 'hrd', '4bf31e6f4b818056eaacb83dff01c9b8', 'hrd@gmail.com', 1234567891, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_account`
--

CREATE TABLE `t_detail_account` (
  `id_detail_account` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_account`
--

INSERT INTO `t_detail_account` (`id_detail_account`, `id_account`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(2, 1, '', '', '', '', 0),
(3, 2, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_perusahaan`
--

CREATE TABLE `t_detail_perusahaan` (
  `id_detail_perusahaan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `no_siup` int(20) NOT NULL,
  `more_info` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_perusahaan`
--

INSERT INTO `t_detail_perusahaan` (`id_detail_perusahaan`, `id_perusahaan`, `owner`, `kategori`, `deskripsi`, `alamat`, `no_siup`, `more_info`) VALUES
(1, 1, 'Dr. Brian', 'Informasi', 'Artha adalah perusahaan untuk media berita secara region maupun global', 'Jl. Teka teki no 5', 32141531, 'Terbuka'),
(2, 2, 'Prof. Jajat Hidayat', 'Produksi', 'PT. Digital adalah perusahaan yang berfokus pada penjualan barang-barang tentang gaya hidup', 'Jl. Sasak Gantung no. 11-12', 341232344, 'Tutup');

-- --------------------------------------------------------

--
-- Table structure for table `t_form`
--

CREATE TABLE `t_form` (
  `id_form` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `status_terima` enum('terima','tolak') NOT NULL,
  `isi_form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `start_work` int(11) NOT NULL,
  `finish_work` int(11) NOT NULL,
  `daily_activity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_lulusan`
--

CREATE TABLE `t_lulusan` (
  `id_lulusan` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `nama_lulusan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_notifikasi`
--

CREATE TABLE `t_notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pendidikan`
--

CREATE TABLE `t_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_detail_account` int(11) NOT NULL,
  `nama_jenjang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengalaman`
--

CREATE TABLE `t_pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `tempat_kerja` varchar(20) NOT NULL,
  `id_detail_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_perusahaan`
--

CREATE TABLE `t_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_perusahaan`
--

INSERT INTO `t_perusahaan` (`id_perusahaan`, `nama_perusahaan`) VALUES
(1, 'PT. Artha'),
(2, 'PT. Digital');

-- --------------------------------------------------------

--
-- Table structure for table `t_request`
--

CREATE TABLE `t_request` (
  `id_request` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `status` enum('buka','tutup') NOT NULL,
  `syarat` text NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `prepare` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_account`
--
ALTER TABLE `t_account`
  ADD PRIMARY KEY (`id_account`),
  ADD UNIQUE KEY `uniknik` (`nik`);

--
-- Indexes for table `t_detail_account`
--
ALTER TABLE `t_detail_account`
  ADD PRIMARY KEY (`id_detail_account`),
  ADD KEY `profil_id_account_t_account_fk` (`id_account`);

--
-- Indexes for table `t_detail_perusahaan`
--
ALTER TABLE `t_detail_perusahaan`
  ADD PRIMARY KEY (`id_detail_perusahaan`),
  ADD KEY `profil_id_perusahaan_t_perusahaan_fk` (`id_perusahaan`);

--
-- Indexes for table `t_form`
--
ALTER TABLE `t_form`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `pengisi_id_account_t_account_fk` (`id_account`),
  ADD KEY `dari_id_perusahaan_t_perusahaan_fk` (`id_perusahaan`),
  ADD KEY `permintaan_id_request_t_request_fk` (`id_request`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `t_lulusan`
--
ALTER TABLE `t_lulusan`
  ADD PRIMARY KEY (`id_lulusan`),
  ADD KEY `jenjang_id_pendidikan_t_pendidikan_fk` (`id_pendidikan`);

--
-- Indexes for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `info_id_form_t_form_fk` (`id_form`),
  ADD KEY `untuk_id_account_t_account_fk` (`id_account`);

--
-- Indexes for table `t_pendidikan`
--
ALTER TABLE `t_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `jenjang_id_detail_account_t_detail_account_fk` (`id_detail_account`);

--
-- Indexes for table `t_pengalaman`
--
ALTER TABLE `t_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `pengalaman_id_detail_account_t_detail_account_fk` (`id_detail_account`);

--
-- Indexes for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `t_request`
--
ALTER TABLE `t_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `daily_id_jadwal_t_jadwal_fk` (`id_jadwal`),
  ADD KEY `creator_id_account_t_account_fk` (`id_account`),
  ADD KEY `asal_id_perusahaan_t_perusahaan_fk` (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_account`
--
ALTER TABLE `t_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_detail_account`
--
ALTER TABLE `t_detail_account`
  MODIFY `id_detail_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_detail_perusahaan`
--
ALTER TABLE `t_detail_perusahaan`
  MODIFY `id_detail_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_form`
--
ALTER TABLE `t_form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_lulusan`
--
ALTER TABLE `t_lulusan`
  MODIFY `id_lulusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pendidikan`
--
ALTER TABLE `t_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pengalaman`
--
ALTER TABLE `t_pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_request`
--
ALTER TABLE `t_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_account`
--
ALTER TABLE `t_detail_account`
  ADD CONSTRAINT `profil_id_account_t_account_fk` FOREIGN KEY (`id_account`) REFERENCES `t_account` (`id_account`);

--
-- Constraints for table `t_detail_perusahaan`
--
ALTER TABLE `t_detail_perusahaan`
  ADD CONSTRAINT `profil_id_perusahaan_t_perusahaan_fk` FOREIGN KEY (`id_perusahaan`) REFERENCES `t_perusahaan` (`id_perusahaan`);

--
-- Constraints for table `t_form`
--
ALTER TABLE `t_form`
  ADD CONSTRAINT `dari_id_perusahaan_t_perusahaan_fk` FOREIGN KEY (`id_perusahaan`) REFERENCES `t_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `pengisi_id_account_t_account_fk` FOREIGN KEY (`id_account`) REFERENCES `t_account` (`id_account`),
  ADD CONSTRAINT `permintaan_id_request_t_request_fk` FOREIGN KEY (`id_request`) REFERENCES `t_request` (`id_request`);

--
-- Constraints for table `t_lulusan`
--
ALTER TABLE `t_lulusan`
  ADD CONSTRAINT `jenjang_id_pendidikan_t_pendidikan_fk` FOREIGN KEY (`id_pendidikan`) REFERENCES `t_pendidikan` (`id_pendidikan`);

--
-- Constraints for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  ADD CONSTRAINT `info_id_form_t_form_fk` FOREIGN KEY (`id_form`) REFERENCES `t_form` (`id_form`),
  ADD CONSTRAINT `untuk_id_account_t_account_fk` FOREIGN KEY (`id_account`) REFERENCES `t_account` (`id_account`);

--
-- Constraints for table `t_pendidikan`
--
ALTER TABLE `t_pendidikan`
  ADD CONSTRAINT `jenjang_id_detail_account_t_detail_account_fk` FOREIGN KEY (`id_detail_account`) REFERENCES `t_detail_account` (`id_detail_account`);

--
-- Constraints for table `t_pengalaman`
--
ALTER TABLE `t_pengalaman`
  ADD CONSTRAINT `pengalaman_id_detail_account_t_detail_account_fk` FOREIGN KEY (`id_detail_account`) REFERENCES `t_detail_account` (`id_detail_account`);

--
-- Constraints for table `t_request`
--
ALTER TABLE `t_request`
  ADD CONSTRAINT `asal_id_perusahaan_t_perusahaan_fk` FOREIGN KEY (`id_perusahaan`) REFERENCES `t_perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `creator_id_account_t_account_fk` FOREIGN KEY (`id_account`) REFERENCES `t_account` (`id_account`),
  ADD CONSTRAINT `daily_id_jadwal_t_jadwal_fk` FOREIGN KEY (`id_jadwal`) REFERENCES `t_jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
