-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2022 at 09:32 AM
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
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(4, 'rayyh', 'paramadina', 'laki-laki', 'Hindu', 'sma 7'),
(6, 'hggg', 'cfctrdrdrdrdrdd', 'laki-laki', 'Islam', 'sma ada'),
(7, 'wswswsw', 'wwww', 'laki-laki', 'Buddha', 'sma adadeh'),
(8, 'gjgj', 'qwqqwqwq', 'laki-laki', 'Islam', 'sma adadeh'),
(9, 'qqwqwwq', 'qwqwqw', 'laki-laki', 'Islam', 'qqq'),
(10, 'pppp', 'xxxxxx', 'laki-laki', 'Islam', 'SMA NEGERI 1 SERUI'),
(11, 'bbbbb', 'qqqqq', 'laki-laki', 'Islam', 'SMA NEGERI 1 SERUI'),
(12, 'gjgj', 'xesesses', 'laki-laki', 'Khonghucu', 'sma terserah'),
(13, 'rayhan alsauqi', 'jl.d no 7', 'laki-laki', 'Islam', 'sma terserah'),
(14, 'ale', '', '', 'Islam', ''),
(15, 'ale', '', '', 'Islam', ''),
(16, 'bjhuhu', '', '', 'Islam', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'reyhan12', 'rayhan.alsauqi@students.paramadina.ac.id', '698d51a19d8a121ce581499d7b701668'),
(2, '', 'reyhanalsauqi12@gmail.com', '149815eb972b3c370dee3b89d645ae14'),
(3, '', 'reyh12@gmail.com', 'c6f057b86584942e415435ffb1fa93d4'),
(4, '', 'dzulfanpohan1m@gmail.com', '698d51a19d8a121ce581499d7b701668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
