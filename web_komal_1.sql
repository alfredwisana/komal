-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 07:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_komal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'c14210030', 'bambang'),
(2, 'kentang', 'huha'),
(3, 'auk', 'ah');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `namaKategori`) VALUES
(1, 'pijat'),
(2, 'atasan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `category` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaServis`, `deskripsi`, `harga`, `gambar`, `category`) VALUES
(2, 'pijat plus', 'ya pijat biasa ada plusnya', 150000, 'https://images.unsplash.com/photo-1669394146376-4d59b2d016d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80', 'pijat'),
(3, 'pijat plus plus', 'ya pijat biasa ada plus plusnya', 200000, 'https://media.istockphoto.com/id/1336348648/id/foto/beberapa-pijat-di-resor-spa-pasangan-cantik-mendapatkan-pijatan-belakang-di-luar-ruangan-akhir.jpg?s=612x612&w=0&k=20&c=iQnv2c2JqjCb2h3LcL1sALdwWvUTvlLsiAOeWznJcDM=', 'pijat'),
(25, 'hehe', 'xsascsdc', 1000, '../images/hehe.jpg', 'ketawa'),
(27, 'baju', 'pokoknya baju', 1000, '../images/anakbayi.jpg', ''),
(28, 'absol', 'keren', 10000, '../images/Absol.jpg', 'ketawa');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `namaServis`, `kategori`, `deskripsi`, `harga`, `gambar`) VALUES
(2, 'pijat plus', '', 'ya pijat biasa ada plusnya', 150000, 'https://images.unsplash.com/photo-1669394146376-4d59b2d016d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80'),
(3, 'pijat plus plus', '', 'ya pijat biasa ada plus plusnya', 200000, 'https://media.istockphoto.com/id/1336348648/id/foto/beberapa-pijat-di-resor-spa-pasangan-cantik-mendapatkan-pijatan-belakang-di-luar-ruangan-akhir.jpg?s=612x612&w=0&k=20&c=iQnv2c2JqjCb2h3LcL1sALdwWvUTvlLsiAOeWznJcDM='),
(17, 'qwqwqwqw', '', 'uiuiui', 71, 'images/anakbayi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
