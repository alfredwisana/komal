-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 01:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'c14210030', 'bambang'),
(2, 'kentang', 'huha'),
(3, 'auk', 'ah');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaServis`, `deskripsi`, `harga`, `gambar`, `category`) VALUES
(1, 'pijat normal', 'ya pijat biasa mau apa lg', 100000, 'images/istockphoto-1150999338-612x612.jpg', NULL),
(2, 'pijat plus', 'ya pijat biasa ada plusnya', 150000, 'https://images.unsplash.com/photo-1669394146376-4d59b2d016d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80', NULL),
(3, 'pijat plus plus', 'ya pijat biasa ada plus plusnya', 200000, 'https://media.istockphoto.com/id/1336348648/id/foto/beberapa-pijat-di-resor-spa-pasangan-cantik-mendapatkan-pijatan-belakang-di-luar-ruangan-akhir.jpg?s=612x612&w=0&k=20&c=iQnv2c2JqjCb2h3LcL1sALdwWvUTvlLsiAOeWznJcDM=', NULL),
(17, 'qwqwqwqw', 'uiuiui', 71, 'images/anakbayi.jpg', NULL),
(19, 'anak bayi', 'asdsad', 69000, 'images/Screenshot 2023-04-16 195651.png', 'atasan'),
(20, 'anak bayi', 'asdsad', 69000, 'images/Screenshot 2023-04-16 195651.png', 'atasan'),
(21, 'anak bayi', 'qwer', 123, 'images/Screenshot 2023-04-16 195651.png', 'atasan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `namaServis`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'pijat normal', 'ya pijat biasa mau apa lg', 100000, 'images/istockphoto-1150999338-612x612.jpg'),
(2, 'pijat plus', 'ya pijat biasa ada plusnya', 150000, 'https://images.unsplash.com/photo-1669394146376-4d59b2d016d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80'),
(3, 'pijat plus plus', 'ya pijat biasa ada plus plusnya', 200000, 'https://media.istockphoto.com/id/1336348648/id/foto/beberapa-pijat-di-resor-spa-pasangan-cantik-mendapatkan-pijatan-belakang-di-luar-ruangan-akhir.jpg?s=612x612&w=0&k=20&c=iQnv2c2JqjCb2h3LcL1sALdwWvUTvlLsiAOeWznJcDM='),
(17, 'qwqwqwqw', 'uiuiui', 71, 'images/anakbayi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
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
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
