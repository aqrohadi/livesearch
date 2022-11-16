-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livesearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_search`
--

CREATE TABLE `tbl_mahasiswa_search` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_mahasiswa_search`
--

INSERT INTO `tbl_mahasiswa_search` (`id`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `tgl_masuk`, `jurusan`) VALUES
(1, 'Dewan Komputer', 'Cilacap', 'Laki-laki', '2019-01-01', 'Sistem Informasi'),
(2, 'Sule', 'Jakarta', 'Laki-laki', '2019-01-01', 'Teknik Informatika'),
(3, 'Maemunah', 'Yogyakarta', 'Perempuan', '2019-01-01', 'Sistem Informasi'),
(4, 'Siti', 'Semarang', 'Perempuan', '2019-01-01', 'Teknik Informatika'),
(5, 'Andre', 'Purwokerto', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(6, 'John Smith', 'Njojog', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(7, 'Adam Levine', 'Prapatan Ciamis', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(10, 'Sudirman', 'Jakarta', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(11, 'Ahmad Yani', 'Jakarta', 'Laki-laki', '2019-01-22', 'Teknik Informatika'),
(12, 'Suprapto', 'Jakarta', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(13, 'Adul', 'Medan', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(14, 'Komeng', 'Palangkaraya', 'Laki-laki', '2019-01-22', 'Teknik Informatika'),
(15, 'Dono', 'Riau', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(16, 'Kasino', 'Jakarta', 'Laki-laki', '2019-01-22', 'Teknik Informatika'),
(17, 'Indro', 'Purbalingga', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(18, 'Titik Puspa', 'Purwokerto', 'Perempuan', '2019-01-22', 'Sistem Informasi'),
(19, 'Meriam Belina', 'Cilacap', 'Perempuan', '2019-01-22', 'Sistem Informasi'),
(20, 'John Gundulmu', 'Jakarta', 'Laki-laki', '2019-01-22', 'Teknik Informatika'),
(21, 'Adele', 'Jakarta', 'Laki-laki', '2019-01-22', 'Teknik Informatika'),
(22, 'Jokowi', 'Jakarta', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(23, 'Megawati', 'Medan', 'Perempuan', '2019-01-22', 'Teknik Informatika'),
(24, 'Prabowo', 'Palangkaraya', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(25, 'Raisa', 'Riau', 'Perempuan', '2019-01-22', 'Teknik Informatika'),
(26, 'Luna Maya', 'Jakarta', 'Perempuan', '2019-01-22', 'Teknik Informatika'),
(27, 'Dery', 'Purbalingga', 'Laki-laki', '2019-01-22', 'Sistem Informasi'),
(28, 'Septian', 'Purwokerto', 'Laki-laki', '2019-01-22', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa_search`
--
ALTER TABLE `tbl_mahasiswa_search`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa_search`
--
ALTER TABLE `tbl_mahasiswa_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
