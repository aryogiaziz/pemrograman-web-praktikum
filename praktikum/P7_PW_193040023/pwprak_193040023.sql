-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 02:44 PM
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
-- Database: `pwprak_193040023`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul_buku`, `kategori`, `author`, `penerbit`, `harga`) VALUES
(1, 'geez.jpg', 'Geez & Ann', 'Novel', 'Rintik Sedu', 'Gagas Media', 65000),
(2, 'kata.jpg', 'Kata', 'Novel', 'Rintik Sedu', 'Gagas Media', 99000),
(3, 'dilan1990.jpeg', 'Dilan 1990', 'Novel', 'Pidi Baiq', 'PT Mizan Pustaka', 70000),
(4, 'milea.jpg', 'Milea: Suara dari Dilan', 'Novel', 'Pidi Baiq', 'PT Mizan Pustaka', 70000),
(5, 'cintabrontosaurus.jpg', 'Cinta Brontosaurus', 'Novel', 'Raditya Dika', 'Gagas Media', 45000),
(6, 'koala.jpg', 'Koala Kumal', 'Novel', 'Raditya Dika', 'Gagas Media', 65000),
(7, 'tentangkamu.jpg', 'Tentang Kamu', 'Novel', 'Tere Liye', 'Republika', 75000),
(8, 'satuhari.jpeg', 'Satu Hari di 2018', 'Novel', 'Boy Candra', 'Media Kita', 55000),
(9, 'sebuah.jpg', 'Sebuah Usaha Melupakan', 'Novel', 'Boy Candra', 'Media Kita', 55000),
(10, 'laskarpelangi.jpg', 'Laskar Pelangi', 'Novel', 'Andrea Hirata', 'Bentang Pustaka', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
