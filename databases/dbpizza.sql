-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 06:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblulu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Pakaian'),
(2, 'Makanan'),
(3, 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `alamat_pemesan` varchar(45) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-05-01', 'Lala', 'Jl. Kalibata 1', '081381620777', 'lala23@gmail.com', 2, 'warna biru', 3),
(4, '2023-05-04', 'lulu', 'Jl Kartini 2', '081381620716', 'lulu16@gmail.com', 5, 'yang warna hitam', 1),
(5, '2023-05-05', 'keana', 'Jl Dewi Sartika 1', '081381620712', 'keana12@gmail.com', 4, 'celana warna coklat', 2),
(6, '2023-05-06', 'keany', 'Jl Dewi Sartika 2', '081381620718', 'keany18@gmail.com', 6, 'yang 1kg', 4),
(7, '2023-05-07', 'kyla', 'Jl Asia Afrika', '081381620555', 'kyla11@gmail.com', 7, 'rasa vanila', 5),
(8, '2023-05-08', 'keanu', 'Jl Braga', '081381621618', 'keanu1618@gmail.com', 8, 'yang rasa jambu', 6),
(9, '2023-05-09', 'keyli', 'Jl Dahlia', '081381620718', 'keyli@gmail.com', 1, 'yang 15 inch', 8);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(1, '001', 'kemeja', 200000, 160000, 39, 3, 'bahannya bagus', 1),
(2, '002', 'jeans', 250000, 220000, 32, 2, 'bahan adem', 1),
(3, '003', 'dress', 300000, 275000, 26, 5, 'nyaman dipakai', 1),
(4, '011', 'beras', 40000, 33000, 90, 7, 'pulen', 2),
(5, '012', 'snack', 25000, 16000, 126, 16, 'renyah dan manis', 2),
(6, '013', 'jus', 16000, 12000, 99, 9, 'segar dan sehat', 2),
(7, '111', 'handphone', 3000000, 2700000, 16, 3, 'kamera jernih', 3),
(8, '112', 'Laptop', 7000000, 6000000, 9, 2, 'ram besar', 3),
(9, '113', 'speaker', 600000, 550000, 50, 5, 'suara jernih', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_produk_id` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
