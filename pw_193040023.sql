-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 07:55 AM
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
-- Database: `pw_193040023`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul_buku`, `kategori`, `author`, `penerbit`) VALUES
(1, 'geez.kpg', 'Geez & Ann', 'Novel', 'Rintik Sedu', 'Gagas Media'),
(2, 'kata.jpg', 'Kata', 'Novel', 'Rintik Sedu', 'Gagas Media'),
(3, 'dilan1990.jpeg', 'Dilan 1990', 'Novel', 'Pidi Baiq', 'PT Mizan Pustaka'),
(4, 'milea.jpg', 'Milea: suara dari dilan', 'Novel', 'Pidi Baiq', 'PT Mizan Pustaka'),
(5, 'cintabrontosaurus.jpg', 'Cinta Brontosaurus', 'Novel', 'Raditya Dika', 'Gagas Media'),
(6, 'koala.jpg', 'Koala Kumal', 'Novel', 'Raditya Dika ', 'Gagas Media'),
(7, 'tentangkamu.jpg', 'Tentang Kamu', 'Novel', 'Tere Liye', 'Republika'),
(8, 'satuhari.jpeg', 'Satu Hari Di 2018', 'Novel', 'Boy Candra', 'Media Kita'),
(9, 'sebuah.jpg', 'Sebuah Usaha Melupakan', 'Novel', 'Boy Candra', 'Media Kita'),
(10, 'laskarpelangi.jpg', 'Laskar Pelangi', 'Novel', 'Andrea Hirata', 'Bentang Pustaka');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Aryogi Aziz', '193040023', 'aaryogi@gmail.com', 'Teknik Informatika', 'aryogi.jpg'),
(2, 'Yusril Azi', '193040024', 'yusrilazi@gmail.com', 'Teknik Informatika', 'azi.jpg'),
(3, 'Muhammad Alwi Ramadhan', '193040029', 'alwiramadhan@gmail.com', 'Teknik Informatika', 'alwi.jpg'),
(4, 'Taufik Hidayat', '193040019', 'taufikhidayat@gmail.com', 'Teknik Informatika', 'taufik.jpg'),
(5, 'Aji Fattah Adriansyah', '193040012', 'ajifattah@gmail.com', 'Teknik Informatika', 'aji.jpg'),
(6, 'Yanida Nur Nabila', '193040022', 'yanidanabila@gmail.com', 'Teknik Informatika', 'bila.jpg'),
(7, 'Sofyan Egi Lesmana', '193040025', 'sofyanegi@gmail.com', 'Teknik Informatika', 'egi.jpg'),
(8, 'Antasafariq Fikriansyah', '193040030', 'antasafarik@gmail.com', 'Teknik Informatika', 'ariq.jpg'),
(9, 'Silvi Fitriawati', '193040028', 'silvi@gmail.com', 'Teknik Informatika', 'silvi.jpg'),
(10, 'Lamhot Kristopher', '193040007', 'lamhotkris@gmail.com', 'Teknik Informatika', 'kris.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
