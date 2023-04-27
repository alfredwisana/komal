-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 06:38 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `namaCustomer` varchar(100) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `noHP` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `namaCustomer`, `namaServis`, `noHP`, `tanggal`, `waktu`) VALUES
(7, 'aa', 'eeehh', 'pijat normal', 1231, '2022-11-03', '19:43:00'),
(8, '0', 'testla', 'pijat normal', 123098, '2022-11-18', '19:52:00'),
(9, 'aa', 'awdada', 'pijat normal', 123132, '2022-11-02', '20:08:00'),
(10, 'aa', 'awdada', 'pijat normal', 123132, '2022-11-02', '20:08:00'),
(11, '0', 'wadas', 'pijat normal', 1231, '2022-11-02', '20:08:00'),
(12, 'aa', 'awdada', 'pijat normal', 213, '2022-11-09', '20:13:00'),
(13, '0', 'sadaw', 'pijat normal', 1231, '2022-11-10', '20:18:00'),
(14, '0', 'sdadsad', 'pijat normal', 131231, '2022-11-02', '20:19:00'),
(15, '0', 'sdasdadas', 'pijat normal', 1231, '2022-11-10', '20:20:00'),
(16, '0', 'asdas', 'pijat normal', 1231, '2022-11-11', '20:22:00'),
(17, '0', 'awdasda', 'pijat normal', 1231, '2022-11-03', '20:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `tanggalBooking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'pijat normal', 'ya pijat biasa mau apa lg 123123123', 100000, 'images/istockphoto-1150999338-612x612.jpg'),
(2, 'pijat plus', 'ya pijat biasa ada plusnya', 150000, 'https://images.unsplash.com/photo-1669394146376-4d59b2d016d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80'),
(3, 'pijat plus plus', 'ya pijat biasa ada plus plusnya', 200000, 'https://media.istockphoto.com/id/1336348648/id/foto/beberapa-pijat-di-resor-spa-pasangan-cantik-mendapatkan-pijatan-belakang-di-luar-ruangan-akhir.jpg?s=612x612&w=0&k=20&c=iQnv2c2JqjCb2h3LcL1sALdwWvUTvlLsiAOeWznJcDM='),
(17, 'qwqwqwqw', 'uiuiui', 71, 'images/anakbayi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'aa', 'aa'),
(4, '0', '0'),
(5, 'm', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
