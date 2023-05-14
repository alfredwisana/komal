-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 05:05 PM
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
(1, 'Atasan'),
(2, 'Bawahan'),
(3, 'Dress'),
(4, 'Set'),
(5, 'Aksesoris'),
(6, 'Kebutuhan Bayi');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaServis` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `category` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaServis`, `deskripsi`, `harga`, `gambar`, `category`) VALUES
(1, 'kemeja dan rompi', 'Kemeja berwarna putih dan rompi berwarna abu-abu. Baju ini untuk anak laki-laki. Material pada baju ini nyaman untuk dipakai. Baju ini stylish untuk bepergian. <br> Size yang tersedia: S (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47), M (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49), L (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50), XL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 85000, '../images/catalog_baju/atasan1.jpg', 'Atasan'),
(2, 'kemeja abu-abu', 'Kemeja berwarna abu-abu. Baju untuk anak laki-laki. Kemeja nyaman dan tidak transparan. Baju sangat bagus untuk dipakai bepergian.<br> Size yang tersedia:\r\nS (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47),\r\nM (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49),\r\nL (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50),\r\nXL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 77000, '../images/catalog_baju/atasan2.jpg', 'Atasan'),
(3, 'Kemeja merah', 'Kemeja berwarna merah. Baju untuk anak laki-laki. Kemeja nyaman dan tidak transparan. Baju sangat bagus untuk dipakai bepergian dan cocok untuk CNY. <br> Size yang tersedia: S (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47), M (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49), L (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50), XL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 77000, '../images/catalog_baju/atasan3.jpg', 'Atasan'),
(4, 'Kaos Domino Kids bergaris', 'Kaos berwarna biru. Baju untuk anak laki-laki dan perempuan. Baju memiliki motif garis-garis warna warni. Baju ini dapat digunakan untuk berpergian atau bersantai di rumah. Size yang tersedia: S (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47), M (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49), L (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50), XL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 75000, '../images/catalog_baju/atasan4.jpg', 'Atasan'),
(5, 'Kaos bergaris oren bear', 'Kaos berwarna putih. Baju untuk anak laki-laki dan perempuan. Baju memiliki motif garis-garis berwarna oren. Baju ini dapat digunakan untuk berpergian atau bersantai di rumah.<br> Size yang tersedia: S (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47), M (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49), L (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50), XL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 74999, '../images/catalog_baju/atasan5.jpg', 'Atasan'),
(29, 'Kaos Domino Kids Venice Beach', 'Kaos berwarna abu-abu. Baju untuk anak laki-laki dan perempuan. Baju memiliki motif berwarna biru. Baju ini dapat digunakan untuk berpergian atau bersantai di rumah.<br> Size yang tersedia: S (Tinggi badan: 68-74cm; Lingkar dada: 46cm; Lingkar pinggang: 47), M (Tinggi badan: 75-80cm; Lingkar dada: 49cm; Lingkar pinggang: 49), L (Tinggi badan: 81-86cm; Lingkar dada: 51cm; Lingkar pinggang: 50), XL (Tinggi badan: 87-92cm; Lingkar dada: 53cm; Lingkar pinggang: 51)', 75000, '../images/catalog_baju/atasan6.jpg', 'Atasan'),
(30, 'Celana pendek hijau', 'Celana pendek berwarna hijau. Celana untuk anak laki-laki. Sangat nyaman untuk dipakai.<br> Size yang tersedia: S (pinggang: belum ditarik(normal)35cm, sudah ditarik 57cm; panjang: 31cm; Cris(slangkang): 20cm; Paha: 20cm), M (pinggang:belum ditarik(normal) 38cm, sudah ditarik 60cm; panjang: 32cm; Cris(slangkang): 21cm; Paha: 21cm), L (pinggang:belum ditarik(normal)41cm, sudah ditarik 63cm; panjang: 33cm; Cris(slangkang): 22cm; Paha: 22cm)', 68999, '../images/catalog_baju/bawahan1.jpg', 'Bawahan'),
(31, 'Celana pendek putih', 'Celana pendek berwarna putih. Celana untuk anak laki-laki. Bermotif bulan sabit dan jangkar berwarna biru tua. Nyaman untuk dipakai.<br> Size yang tersedia: S (pinggang: belum ditarik(normal)35cm, sudah ditarik 57cm; panjang: 31cm; Cris(slangkang): 20cm; Paha: 20cm), M (pinggang:belum ditarik(normal) 38cm, sudah ditarik 60cm; panjang: 32cm; Cris(slangkang): 21cm; Paha: 21cm), L (pinggang:belum ditarik(normal)41cm, sudah ditarik 63cm; panjang: 33cm; Cris(slangkang): 22cm; Paha: 22cm)', 70000, '../images/catalog_baju/bawahan2.jpg', 'Bawahan'),
(32, 'Celana panjang abu-abu', 'Celana panjang berwarna abu-abu. Celana untuk anak laki-laki dan perempuan. Celana panjang sangat nyaman untuk dipakai.<br> Size yang tersedia: S (pinggang: belum ditarik(normal)35cm, sudah ditarik 57cm; panjang: 62cm; Cris(slangkang): 20cm; Paha: 20cm), M (pinggang:belum ditarik(normal) 38cm, sudah ditarik 60cm; panjang: 63cm; Cris(slangkang): 21cm; Paha: 21cm), L (pinggang:belum ditarik(normal)41cm, sudah ditarik 63cm; panjang: 64cm; Cris(slangkang): 22cm; Paha: 22cm)', 72999, '../images/catalog_baju/bawahan3.jpg', 'Bawahan'),
(33, 'Rok jeans LOL', 'Rok jeans bermotif LOL. Celana untuk anak perempuan. Rok nyaman untuk dipakai. Rok dapat dipakai saat bepergian.<br> Size yang tersedia: S  (Panjang: 21 cm ; LP: 21 cm), M (Panjang: 23 cm ; LP: 23 cm), L (Panjang: 25 cm ; LP: 25 cm)', 75000, '../images/catalog_baju/bawahan4.jpg', 'Bawahan'),
(34, 'Rok jeans', 'Rok jeans. Celana untuk anak perempuan. Rok nyaman untuk dipakai. Rok dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 21 cm ; LP: 21 cm), M (Panjang: 23 cm ; LP: 23 cm), L (Panjang: 25 cm ; LP: 25 cm)', 73999, '../images/catalog_baju/bawahan5.jpg', 'Bawahan'),
(35, 'Celana panjang krem', 'Rok berwarna krem. Celana untuk anak perempuan. Rok nyaman untuk dipakai. Rok dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 21 cm ; LP: 51 cm), M (Panjang: 23 cm ; LP: 53 cm), L (Panjang: 25 cm ; LP: 55 cm)', 68000, '../images/catalog_baju/bawahan6.jpg', 'Bawahan'),
(36, 'Celana panjang biru tua', 'Rok berwarna biru. Celana untuk anak perempuan. Rok nyaman untuk dipakai. Rok dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 21 cm ; LP: 51 cm), M (Panjang: 23 cm ; LP: 53 cm), L (Panjang: 25 cm ; LP: 55 cm)', 68000, '../images/catalog_baju/bawahan7.jpg', 'Bawahan'),
(37, 'Dress biru', 'Dress berwarna biru pucat. Dress untuk anak perempuan. Dress nyaman untuk dipakai. Dress dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 40 cm ; LP: 50 cm), M (Panjang: 42.5 cm ; LP: 52 cm), L (Panjang: 45 cm ; LP: 54 cm), XL (panjang: 47.5 cm; LP: 56 cm)', 80000, '../images/catalog_baju/dress1.jpg', 'Dress'),
(38, 'Dress hitam', 'Dress berwarna hitam. Dress untuk anak perempuan. Dress memiliki motif berwarna putih. Dress nyaman untuk dipakai. Dress dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 40 cm ; LP: 50 cm), M (Panjang: 42.5 cm ; LP: 52 cm), L (Panjang: 45 cm ; LP: 54 cm), XL (panjang: 47.5 cm; LP: 56 cm)', 80000, '../images/catalog_baju/dress2.jpg', 'Dress'),
(39, 'Dress pink', 'Dress berwarna pink. Dress untuk anak perempuan. Dress nyaman untuk dipakai. Dress dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 40 cm ; LP: 50 cm), M (Panjang: 42.5 cm ; LP: 52 cm), L (Panjang: 45 cm ; LP: 54 cm), XL (panjang: 47.5 cm; LP: 56 cm)', 80000, '../images/catalog_baju/dress3.jpg', 'Dress'),
(40, 'Dress kuning', 'Dress berwarna kuning. Dress untuk anak perempuan. Dress nyaman untuk dipakai. Terdapat gambar kucing pada dress. Dress dapat dipakai saat bepergian. <br> Size yang tersedia: S  (Panjang: 40 cm ; LP: 50 cm), M (Panjang: 42.5 cm ; LP: 52 cm), L (Panjang: 45 cm ; LP: 54 cm), XL (panjang: 47.5 cm; LP: 56 cm)', 80000, '../images/catalog_baju/dress4.jpg', 'Dress'),
(41, 'Set kaos Rock City dan celana pendek', 'Set kaos Rock and City dan Celana pendek.<br>Size yang tersedia: S (Lebar dada : 27 cm; Panjang baju : 37 cm; Panjang celana : 26 cm), M (Lebar dada : 30 cm; Panjang baju : 39 cm; Panjang celana : 29 cm), L (Lebar dada : 32 cm; Panjang baju : 41 cm; Panjang celana : 31 cm)', 140000, '../images/catalog_baju/set1.jpg', 'Set'),
(42, 'Set kaos Buaya dan celana', 'Set kaos Buaya dan celana pendek jeans.<br>Size yang tersedia: S (Lebar dada : 27 cm; Panjang baju : 37 cm; Panjang celana : 26 cm), M (Lebar dada : 30 cm; Panjang baju : 39 cm; Panjang celana : 29 cm), L (Lebar dada : 32 cm; Panjang baju : 41 cm; Panjang celana : 31 cm)', 140000, '../images/catalog_baju/set2.jpg', 'Set'),
(43, 'Set sleeveless shirt Dino & celana', 'Set kaos tanpa lengan Dinosaurus dan celana pendek abu-abu.<br>Size yang tersedia: S (Lebar dada : 27 cm; Panjang baju : 37 cm; Panjang celana : 26 cm), M (Lebar dada : 30 cm; Panjang baju : 39 cm; Panjang celana : 29 cm), L (Lebar dada : 32 cm; Panjang baju : 41 cm; Panjang celana : 31 cm)', 120000, '../images/catalog_baju/set3.jpg', 'Set'),
(44, 'Set fancy fashion', 'Set kemeja, rompi, dasi dan celana pendek.<br>Size yang tersedia: S (Lebar dada : 27 cm; Panjang baju : 37 cm; Panjang celana : 26 cm), M (Lebar dada : 30 cm; Panjang baju : 39 cm; Panjang celana : 29 cm), L (Lebar dada : 32 cm; Panjang baju : 41 cm; Panjang celana : 31 cm)', 150000, '../images/catalog_baju/set4.jpg', 'Set'),
(45, 'Sarung tangan bayi', '1 pasang sarung tangan bayi dengan motif. Sarung tangan ini sangat nyaman dipakai.', 10000, '../images/catalog_baju/aksesoris1.jpg', 'Aksesoris'),
(46, 'Topi doraemon', 'Topi dengan gambar doraemon.', 13500, '../images/catalog_baju/aksesoris2.jpg', 'Aksesoris'),
(47, 'Sandal bayi', '1 pasang sandal bayi berwarna merah dari brand Dulux. Sandal ini terbuat dari bahan-bahan yang berkualitas', 23000, '../images/catalog_baju/aksesoris3.jpg', 'Aksesoris'),
(50, 'Sepatu sandal bayi', '1 pasang sepatu sandal bayi berwarna biru dari brand Dulux. Sepatu sandal ini terbuat dari bahan-bahan yang berkualitas', 22500, '../images/catalog_baju/aksesoris4.jpg', 'Aksesoris'),
(51, 'Kaos kaki bayi', '3 pasang kaos kaki bayi dengan motif. Kaos kaki bayi ini sangat nyaman dipakai.', 18000, '../images/catalog_baju/aksesoris5.jpg', 'Aksesoris'),
(52, 'My Baby Powder', 'My Baby\'s baby powder (Soft & Gentle) 100 g + 25 g extra. Keep your baby\'s skin smooth and comfort all day', 6500, '../images/catalog_baju/kbthn_bayi1.jpg', 'Kebutuhan Bayi'),
(53, 'My Baby Lotion', 'My Baby\'s Milk Bath (Sweet Floral) 100 ml. Terrbuat dari milk dan oat. Keep your baby\'s skin smooth and comfort all day', 9500, '../images/catalog_baju/kbthn_bayi2.jpg', 'Kebutuhan Bayi'),
(54, 'Cussons Baby Powder', 'Cussons Baby Powder (Smooth & Soft) 200 + 100g extra. Wangi sakura yang tahan lama selembut kasih sayang ibu.', 15000, '../images/catalog_baju/kbthn_bayi3.jpg', 'Kebutuhan Bayi'),
(55, 'Johnson\'s Baby Powder', 'Johnson\'s Bedtime Baby Powder 500 g. Dengan wangi NATURAL CALM yang menenangkan, membantu bayi nyaman sebelum tidur.', 25000, '../images/catalog_baju/kbthn_bayi4.jpg', 'Kebutuhan Bayi'),
(56, 'Zwitsal Body Shampoo', 'Zwitsal Body Shampoo (aleo vera, kemiri, & seledri) 100 ml. Untukrambut bersih dan lembut.', 10000, '../images/catalog_baju/kbthn_bayi5.jpg', 'Kebutuhan Bayi'),
(57, 'Cussons Baby Shampoo', 'Cussons Baby Shampoo (Almond Oil & Honey) 100 + 100 ml. For soft and moisturized baby\'s hair.', 6500, '../images/catalog_baju/kbthn_bayi6.jpg', 'Kebutuhan Bayi'),
(58, 'Johnson\'s Baby Shampoo', 'Johnson\'s Baby Shampoo 200 ml. Ultra gentle for baby\'s hair mild on eyes.', 24500, '../images/catalog_baju/kbthn_bayi7.jpg', 'Kebutuhan Bayi'),
(59, 'Pigeons Botol susu', 'Pigeons botol susu dengan motif cherry (BPA Free)', 37500, '../images/catalog_baju/kbthn_bayi8.jpg', 'Kebutuhan Bayi'),
(60, 'Botol susu beruang space', 'Botol susu yang bermotif beruang di luar angkasa.', 24500, '../images/catalog_baju/kbthn_bayi9.jpg', 'Kebutuhan Bayi'),
(61, 'Botol susu singa', 'Botol susu yang bermotif singa.', 30000, '../images/catalog_baju/kbthn_bayi10.jpg', 'Kebutuhan Bayi'),
(62, 'Baby Huki Botol susu', 'Babu Huki botol susu dengan gambar anak-anak.', 26000, '../images/catalog_baju/kbthn_bayi11.jpg', 'Kebutuhan Bayi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
