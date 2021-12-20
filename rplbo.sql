-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 04:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rplbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `levelid` int(11) NOT NULL,
  `levelnama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`levelid`, `levelnama`) VALUES
(1, 'Kepsek'),
(2, 'TU'),
(3, 'Staff'),
(4, 'Resepsionis'),
(5, 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuleges`
--

CREATE TABLE `pengajuleges` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuleges`
--

INSERT INTO `pengajuleges` (`id`, `nama`, `tanggal`, `keterangan`, `file`) VALUES
(1, 'Dita Sekar Asri', '2021-12-10', 'Mau leges ', 'leges dita.pdf'),
(22, 'jiji', '2021-11-28', 'lll', 'New Microsoft Word Document.do'),
(23, 'jiji', '2021-11-28', 'kl', '1_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengajusuratm`
--

CREATE TABLE `pengajusuratm` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajusuratm`
--

INSERT INTO `pengajusuratm` (`id`, `nama`, `tanggal`, `keterangan`, `file`) VALUES
(1, 'Kepala Dinas', '2021-12-09', 'Undangan Rapat Persiapan', 'UNDANGAN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(100) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `nosurat`, `perihal`, `kepada`, `tanggal`, `isi`, `file`) VALUES
(1, '06/B/sek/09/1436', 'Undangan', 'MTSN 3 PEKANBARU', '2021-12-18', 'DATAATAT', ''),
(2, 'nunu', 'mm', 'kkkk', '2021-12-20', 'uuuuu', '1_10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suratleges`
--

CREATE TABLE `suratleges` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `isi` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `asalsurat` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratleges`
--

INSERT INTO `suratleges` (`id`, `nosurat`, `perihal`, `isi`, `tanggal`, `asalsurat`, `file`) VALUES
(1, '06/B/sek/09/1436', 'Undangan', 'klk', '2021-11-30', 'dituuuurrrr', '');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(30) DEFAULT NULL,
  `perihal` varchar(50) DEFAULT NULL,
  `isi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `asalsurat` varchar(30) DEFAULT NULL,
  `file` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `nosurat`, `perihal`, `isi`, `tanggal`, `asalsurat`, `file`) VALUES
(1, '06/B/sek/09/1436', 'Undangan', 'Undangan untuk persiapan olahraga', '2021-12-06', 'Yayasan permata hati', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tandaterimaleges`
--

CREATE TABLE `tandaterimaleges` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tandaterimaleges`
--

INSERT INTO `tandaterimaleges` (`id`, `nama`, `tanggal`, `keterangan`, `file`) VALUES
(1, 'Dita Sekar Asri', '2021-12-10', 'Minta di leges', 'leges dita.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tandaterimamasuk`
--

CREATE TABLE `tandaterimamasuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tandaterimamasuk`
--

INSERT INTO `tandaterimamasuk` (`id`, `nama`, `tanggal`, `keterangan`, `file`) VALUES
(1, 'Kepala Dinas', '2021-12-12', 'Undangan Rapat Persiapan', 'UNDANGAN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` char(50) NOT NULL,
  `usernama` varchar(100) DEFAULT NULL,
  `userpassword` varchar(100) DEFAULT NULL,
  `userlevelid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `usernama`, `userpassword`, `userlevelid`) VALUES
('alumni', 'Mentari', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 5),
('kepsek', 'Ibrahim', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 1),
('pihakluar', 'Alfandri', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 6),
('resepsionis', 'Dita', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 4),
('staff', 'Amelia', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 3),
('tu', 'Nurainun', '$2y$10$iNOvKKR0qdfldbV5lmOhfeosmR6ie/wjvfdTwTBsXUwhAPw13qgdm', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`levelid`);

--
-- Indexes for table `pengajuleges`
--
ALTER TABLE `pengajuleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajusuratm`
--
ALTER TABLE `pengajusuratm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratleges`
--
ALTER TABLE `suratleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tandaterimaleges`
--
ALTER TABLE `tandaterimaleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tandaterimamasuk`
--
ALTER TABLE `tandaterimamasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `levelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuleges`
--
ALTER TABLE `pengajuleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengajusuratm`
--
ALTER TABLE `pengajusuratm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratleges`
--
ALTER TABLE `suratleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tandaterimaleges`
--
ALTER TABLE `tandaterimaleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tandaterimamasuk`
--
ALTER TABLE `tandaterimamasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
