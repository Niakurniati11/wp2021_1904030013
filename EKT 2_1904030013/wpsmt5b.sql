-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 09:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5b`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Nia Kurniati', 'Lombok', 'Perempuan', 'Islam', 'SMK Kesehatan', 'foto2.png'),
(2, 'Lesi yanti', 'Banjar', 'Perempuan', 'Islam', 'SMAN 11', 'foto2.png'),
(3, 'Oka ardelia', 'Medan', 'perempuan', 'Islam', 'SMK 2', 'foto2.png'),
(4, 'Wahid Wahyu', 'Jakarta', 'Laki-laki', 'Islam', 'SMAN 11', 'foto1.png'),
(5, 'Yogi okta', 'Bali', 'Perempuan', 'Islam', 'SMK Kesehatan', 'foto2.png'),
(6, 'Abi Yusuf', 'Lampung', 'Laki-laki', 'islam', 'SMK 2', 'foto1.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `Nama` varchar(30) NOT NULL,
  `NIDN` int(11) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(55) NOT NULL,
  `Pendidikan S1` varchar(35) NOT NULL,
  `Pendidikan S2` varchar(35) NOT NULL,
  `Pendidikan S3` varchar(35) NOT NULL,
  `Foto_dosen` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`Nama`, `NIDN`, `Jenis_kelamin`, `Email`, `Alamat`, `Pendidikan S1`, `Pendidikan S2`, `Pendidikan S3`, `Foto_dosen`) VALUES
('Fajar nurhidayat', 1904030001, 'laki-laki', 'fajarnur@gmail.com', 'Balikpapan', 'Hukum', 'Hukum', 'Hukum', 'foto1.png'),
('Feki', 1904030002, 'laki-laki', 'fekim@gmail.com', 'Bali', 'Teknik informatika', 'Teknik informatika', 'Teknik informatika', 'foto1.png'),
('Ferdi', 1904030003, 'laki-laki', 'ferdim@gmail.com', 'Jawa barat', 'Ekonomi', 'Ekonomi', 'Ekonomi', 'foto1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`NIDN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
