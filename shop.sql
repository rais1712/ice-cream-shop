-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 12:42 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `tipe_harga` int(3) NOT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`tipe_harga`, `harga`) VALUES
(1, 15000),
(2, 16000),
(3, 17000),
(4, 18000),
(5, 19000),
(6, 20000),
(7, 21000),
(8, 22000),
(9, 23000),
(10, 24000),
(11, 25000),
(12, 26000),
(13, 27000),
(14, 28000),
(15, 29000),
(16, 30000),
(17, 31000),
(18, 32000),
(19, 33000),
(20, 34000);

-- --------------------------------------------------------

--
-- Table structure for table `icecream`
--

CREATE TABLE `icecream` (
  `id_iceCream` int(3) NOT NULL,
  `nama_iceCream` varchar(50) DEFAULT NULL,
  `topping` varchar(20) DEFAULT NULL,
  `tipe_harga` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icecream`
--

INSERT INTO `icecream` (`id_iceCream`, `nama_iceCream`, `topping`, `tipe_harga`) VALUES
(1, 'Chocolate Blue', 'Oreo', 2),
(5, 'Chocochips Ice Cream', 'Kacang', 14),
(6, 'Snow Oreo Ice Cream', 'Oreo', 3),
(7, 'Choco-Mocca Ice Cream', 'Cokelat', 7),
(8, 'Sweet Corn Ice Cream', 'Kacang', 11),
(9, 'Sweet Vanilla Ice Cream', 'Kismis', 18),
(10, 'Biscuit Ice Cream', 'Cokelat', 4),
(11, 'Wealth Chocolate Ice Cream', 'Cokelat', 13),
(12, 'Sweet Cutton Ice Cream', 'Susu', 1),
(20, 'Santa Oreo Ice cream', 'Kacang', 14);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(3) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` int(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`, `email`) VALUES
(9, 'Aen', 'Lampung', 2147483647, 'Aen@gmail.com'),
(10, 'Kenneth', 'Surakarta', 2147483647, ''),
(11, 'Serena', 'Aceh', 493827267, ''),
(12, 'Serena', 'Aceh', 493827267, ''),
(13, 'Sisca', 'Bandung', 839462787, ''),
(14, 'Nicho', 'Yogyakarta', 2147483647, ''),
(15, 'Mika', 'Yogyakarta', 2147483647, ''),
(16, 'Villenn', 'Jakarta', 34456322, ''),
(17, 'Eilen', 'Sumatra Barat', 24243251, ''),
(18, 'Elsa', 'Bandung', 12433, ''),
(20, 'qwe', 'sdad', 1222, ''),
(26, 'Damar', 'Surabaya', 1234321567, ''),
(29, 'Lim', 'Yogyakarta', 121356743, ''),
(31, 'Violet', 'Surakarta', 346573823, 'violetX@gmail.com'),
(32, 'Rika', 'Yogyakarta', 493827267, 'rika@gmail.com'),
(33, 'Miya', 'Bandung', 2147483647, 'miya339@gmail.com'),
(34, 'sannie', 'Palangkaraya', 214748340, 'sanny@gmail.com'),
(35, 'Vina', 'Yogyakarta', 202742661, 'viina23@gmail.com'),
(36, 'Glory', 'Jatinangor', 182637493, 'glorycornelia26@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(3) NOT NULL,
  `id_pelanggan` int(3) DEFAULT NULL,
  `id_iceCream` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_pelanggan`, `id_iceCream`) VALUES
(7, 29, 9),
(8, 13, 10),
(9, 35, 5),
(10, 35, 8),
(11, 35, 11),
(12, 35, 12),
(13, 34, 7),
(14, 35, 20),
(15, 34, 11),
(16, 36, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `level`) VALUES
(1, 'anemonlaut7@gmail.com', '$2y$10$QAqNeF4e1CLpdXLIQbpvfOTcox37X/JdP3JWqD7tlcet5VNXn5eRa', 1),
(2, 'Ellen12@gmail.com', '$2y$10$pUI4SqaCDA2yFqFgMfo9IuV1JU5kwAEY7DXqy3QhAZRDPmBZdfhOO', 2),
(3, 'limo31@gmail.com', '$2y$10$l2lD9VXVTDEbm79R/fkPnO5K8UjB0B/wROjc7EZiAiY7nI2Kb0qt2', 1),
(4, 'rika@gmail.com', '$2y$10$SeeeBe9Zq/0enh1U7zF7PesVQBBqBPUj1criaJoVOKuwzeI79IFAm', 2),
(5, 'testing@gmail.com', '$2y$10$6/ZXmF4fAK58Y3K/o6EUJukYsGWOaf/F.FDXR9pDHd.Sbaoc1xgUC', 1),
(6, 'sanny@gmail.com', '$2y$10$qVxutZHD36Kx/am/UdcaPuUjPfQbGCQ0pPdU/bQWhifR2QjunDWFa', 2),
(7, 'viina23@gmail.com', '$2y$10$euQo.5h7Ki2XFubjDVi4q.FG05KRr2cE.UVHuOSeAxlexnPloHkBW', 1),
(8, 'glorycornelia26@gmail.com', '$2y$10$/wmK071LwwI1QIVZCN2t5OSNK9XnnPJae.jBaW4h4oNsHml6BvFKe', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`tipe_harga`);

--
-- Indexes for table `icecream`
--
ALTER TABLE `icecream`
  ADD PRIMARY KEY (`id_iceCream`),
  ADD KEY `tipe_harga` (`tipe_harga`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `idx_email` (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_iceCream` (`id_iceCream`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
