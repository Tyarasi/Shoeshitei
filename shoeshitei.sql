-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 03:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeshitei`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `id_ekspedisi` int(10) NOT NULL,
  `nama_kurir` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `alamat_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekspedisi`
--

INSERT INTO `ekspedisi` (`id_ekspedisi`, `nama_kurir`, `kota`, `kecamatan`, `kelurahan`, `alamat_email`) VALUES
(1, 'Rere', 'Pekanbaru', 'Rumbai Pesisir', 'Umban sari atas', 'rere01@gmail.com'),
(2, 'Riri', 'Pekanbaru', 'Rumbai Pesisir', 'tebing tinggi', 'riri01@gmail.com'),
(3, 'Ruru', 'Pekanbaru', 'Rumbai Pesisir', 'limbungan', 'ruru01@gmail.com'),
(4, 'Rara', 'Pekanbaru', 'Rumbai Pesisir', 'tebing tinggi', 'rara01@gmail.com'),
(5, 'Reres', 'Pekanbaru', 'Rumbai Pesisir', 'Rumbai', 'reres01@gmail.com'),
(6, 'Raras', 'Pekanbaru', 'Rumbai Pesisir', 'opura', 'raras01@gmail.com'),
(7, 'Rurus', 'Pekanbaru', 'Rumbai Pesisir', 'limbungan', 'rurus01@gmail.com'),
(8, 'Riris', 'Pekanbaru', 'Rumbai Pesisir', 'limbungan baru', 'riris01@gmail.com'),
(9, 'titi', 'Pekanbaru', 'Rumbai Pesisir', 'okura', 'titi01@gmail.com'),
(10, 'tutu', 'Pekanbaru', 'Rumbai Pesisir', 'okura atas', 'titi01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisijenis`
--

CREATE TABLE `ekspedisijenis` (
  `id_ekspedisijenis` int(10) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `id_ekspedisi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategoriproduk`
--

CREATE TABLE `kategoriproduk` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `ket_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoriproduk`
--

INSERT INTO `kategoriproduk` (`id_kategori`, `nama_kategori`, `ket_kategori`) VALUES
(1, 'Anak-anak S', 'Sport kids'),
(2, 'Laki laki S', 'Sport man'),
(3, 'Anak-anak perempuan S', 'Sport kids girl'),
(4, 'Anak-anak laki laki S', 'Sport kids boy'),
(5, 'Wanita S', 'Sport woman'),
(6, 'Anak anak FI', 'Fashion kids'),
(7, 'Anak-anak perempuan FI', 'Fashion kids girl'),
(8, 'Anak-anak laki laki FI', 'Fashion kids boy'),
(9, 'Laki laki FI', 'Fashion man'),
(10, 'Woman FI', 'Fashion girl');

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_stok` int(10) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `jumlah_pasokan` int(100) DEFAULT NULL,
  `tanggal_dipasok` varchar(100) DEFAULT NULL,
  `tanggal_pengiriman` varchar(100) DEFAULT NULL,
  `tanggal_diterima` varchar(100) DEFAULT NULL,
  `id_supplier` int(10) DEFAULT NULL,
  `id_ekspedisi` int(10) DEFAULT NULL,
  `id_produk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasok`
--

INSERT INTO `pasok` (`id_stok`, `nama_produk`, `jumlah_pasokan`, `tanggal_dipasok`, `tanggal_pengiriman`, `tanggal_diterima`, `id_supplier`, `id_ekspedisi`, `id_produk`) VALUES
(1, 'Sneaker Az', 30, '01 Maret 2020', '02 Maret 2020', '03 Maret 2020', 1, 1, 1),
(2, 'Sneaker AZI', 30, '04 Maret 2020', '05 Maret 2020', '06 Maret 2020', 2, 2, 2),
(3, 'Sneaker AII', 20, '07 Maret 2020', '08 Maret 2020', '09 Maret 2020', 3, 3, 3),
(4, 'Sneaker AII', 30, '08 Maret 2020', '09 Maret 2020', '10 Maret 2020', 4, 4, 4),
(5, 'Sneaker BII', 20, '10 Maret 2020', '11 Maret 2020', '12 Maret 2020', 5, 5, 5),
(6, 'All Stars AII', 20, '14 Maret 2020', '15 Maret 2020', '16 Maret 2020', 6, 6, 6),
(7, 'Sneaker Kids', 20, '15 Maret 2020', '16 Maret 2020', '17 Maret 2020', 7, 7, 7),
(8, 'Sneaker Kids AI', 30, '19 Maret 2020', '20 Maret 2020', '21 Maret 2020', 8, 8, 8),
(9, 'Sneaker Kids AI', 40, '23 Maret 2020', '24 Maret 2020', '25 Maret 2020', 9, 9, 9),
(10, 'Tomcat Swaloww', 20, '27 Maret 2020', '28 Maret 2020', '29 Maret 2020', 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(10) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` int(12) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_pelanggan`, `no_telp`, `kota`, `kecamatan`, `kelurahan`, `password`) VALUES
(1, 'Imam', 2147483647, 'Pekanbaru', 'Rumbai Pesisir', 'Rumbai', 'imam123'),
(2, 'Prengky', 81234321, 'Pekanbaru', 'Rumbai Pesisir', 'Rumbai', 'prengky123'),
(3, 'Wawan', 81234212, 'Payakumbuh', 'Payakumbuh Utara', 'Koto baru', 'wawan123'),
(4, 'Aji', 81234219, 'Payakumbuh', 'Payakumbuh Utara', 'Balai tua', 'Aji123'),
(5, 'Fikri', 812341202, 'Pekanbaru', 'Rumbai Pesisir', 'Umban Sari Atas', 'fikri123'),
(6, 'Putri', 81534213, 'Pekanbaru', 'Rumbai Pesisir', 'Umban Sari Atas', 'putri123'),
(7, 'Widya', 81237812, 'Pekanbaru', 'Rumbai Pesisir', 'Umban Sari Atas', 'widya123'),
(8, 'Imama', 812345421, 'Pekanbaru', 'Rumbai Pesisir', 'Rumbai', 'imamam123'),
(9, 'PrengkyA', 81231321, 'Pekanbaru', 'Rumbai Pesisir', 'Rumbai', 'prengkya123'),
(10, 'Wawani', 81234232, 'Payakumbuh', 'Payakumbuh Utara', 'Koto baru', 'wawani123'),
(16, 'Loli', 88123123, 'Payakumbuh', 'Payakumbuh Utara', 'Kelurahan Payonibung', 'loli123'),
(18, 'Teguh', 8127312, 'ssgda', 'asda', 'asdsa', 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `pelangganhobi`
--

CREATE TABLE `pelangganhobi` (
  `id_pelangganhobi` int(10) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `pelanggan_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelangganhobi`
--

INSERT INTO `pelangganhobi` (`id_pelangganhobi`, `hobi`, `pelanggan_id`) VALUES
(1, 'Jogging', 10),
(2, 'Marathon', 9),
(3, 'Sit Up', 8),
(4, 'Push Up', 7),
(5, 'Renang', 6),
(6, 'Badminton', 5),
(7, 'Catur', 4),
(8, 'Traveling', 3),
(9, 'Membaca Buku', 2),
(10, 'Nonton TV', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `jumlah_pesanan` int(100) DEFAULT NULL,
  `total_harga_pesanan` int(255) DEFAULT NULL,
  `tanggal_order` varchar(255) DEFAULT NULL,
  `tanggal_pengiriman` varchar(255) DEFAULT NULL,
  `tanggal_diterima` varchar(255) DEFAULT NULL,
  `pelanggan_id` int(12) DEFAULT NULL,
  `id_ekspedisi` int(10) DEFAULT NULL,
  `id_produk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `jumlah_pesanan`, `total_harga_pesanan`, `tanggal_order`, `tanggal_pengiriman`, `tanggal_diterima`, `pelanggan_id`, `id_ekspedisi`, `id_produk`) VALUES
(1, 2, 1000000, '01 April 2020', '02 April 2020', '03 April 2020', 1, 10, 1),
(2, 2, 800000, '03 April 2020', '04 April 2020', '05 April 2020', 2, 9, 2),
(3, 1, 350000, '04 April 2020', '05 April 2020', '06 April 2020', 3, 8, 3),
(4, 2, 700000, '08 April 2020', '09 April 2020', '10 April 2020', 4, 7, 4),
(5, 2, 500000, '10 April 2020', '11 April 2020', '12 April 2020', 5, 6, 5),
(6, 1, 350000, '12 April 2020', '13 April 2020', '14 April 2020', 6, 5, 6),
(7, 1, 200000, '14 April 2020', '15 April 2020', '16 April 2020', 7, 4, 7),
(8, 2, 400000, '16 April 2020', '17 April 2020', '18 April 2020', 8, 3, 8),
(9, 2, 400000, '17 April 2020', '18 April 2020', '19 April 2020', 9, 2, 9),
(10, 1, 250000, '23 April 2020', '25 April 2020', '28 April 2020', 10, 1, 10),
(70, 2, 1020000, '11,July,2020', '11,July,2020', '11,July,2020', 4, 4, 1),
(71, 1, 520000, '11,July,2020', '11,July,2020', '11,July,2020', 4, 4, 1),
(72, 3, 1520000, '11,July,2020', '11,July,2020', '11,July,2020', 7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `harga` int(100) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `ukuran` int(100) DEFAULT NULL,
  `pelanggan_id` int(10) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `harga`, `nama_produk`, `ukuran`, `pelanggan_id`, `id_kategori`) VALUES
(1, 500000, 'Sneakers AZ', 40, 1, NULL),
(2, 400000, 'Sneakers AZI', 39, 2, NULL),
(3, 350000, 'Sneakers AII', 37, 3, NULL),
(4, 350000, 'Sneakers AII', 42, 4, NULL),
(5, 250000, 'Sneakers BII', 40, 5, NULL),
(6, 350000, 'All Stars AII', 41, 6, NULL),
(7, 200000, 'Sneakers Kids', 35, 7, NULL),
(8, 200000, 'Sneakers Kids AI', 36, 8, NULL),
(9, 200000, 'Sneakers Kids AI', 34, 9, NULL),
(10, 250000, 'Tomcat Swaloww', 40, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produkjenis`
--

CREATE TABLE `produkjenis` (
  `id_produkjenis` int(10) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `id_produk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produkwarna`
--

CREATE TABLE `produkwarna` (
  `id_produkwarna` int(10) NOT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `id_produk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama_supplier` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `alamat_email` varchar(255) DEFAULT NULL,
  `id_ekspedisi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `kota`, `kecamatan`, `kelurahan`, `alamat_email`, `id_ekspedisi`) VALUES
(1, 'yeye', 'Pesisir', 'Pesisir Selatan', 'Tinggi atas', 'yeye01@gmail.com', 1),
(2, 'yiyi', 'Ujung batu', 'Damang', 'tebing Umban', 'yiyi01@gmail.com', 2),
(3, 'yuyu', 'Padang', 'Kayu Tanam', 'limbungan Tinggi', 'yuyu01@gmail.com', 3),
(4, 'yaya', 'Padang panjang', 'Payonibung', 'tebing Umban', 'yaya01@gmail.com', 4),
(5, 'yeyes', 'Bukittingi', 'Canduang', 'Tinggi bawah', 'yeyes01@gmail.com', 5),
(6, 'yayas', 'Payakumbuh', 'Payakumbuh Utara', 'Tebing Belok', 'yayas01@gmail.com', 6),
(7, 'yuyus', 'Batusangkar', 'Belokkan Patah', 'tebing belok', 'yuyus01@gmail.com', 7),
(8, 'yiyis', 'Padang', 'Tarandam', 'simpang lima', 'yiyis01@gmail.com', 8),
(9, 'wiwi', 'Bukittingi', 'Sungai Pua', 'Limbungan air danau', 'wiwi01@gmail.com', 9),
(10, 'wuwu', 'Payakumbuh', 'Payakumbuh Barat', 'Limbunga air payau', 'wuwu01@gmail.com', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indexes for table `ekspedisijenis`
--
ALTER TABLE `ekspedisijenis`
  ADD PRIMARY KEY (`id_ekspedisijenis`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`);

--
-- Indexes for table `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pelangganhobi`
--
ALTER TABLE `pelangganhobi`
  ADD PRIMARY KEY (`id_pelangganhobi`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `produkjenis`
--
ALTER TABLE `produkjenis`
  ADD PRIMARY KEY (`id_produkjenis`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produkwarna`
--
ALTER TABLE `produkwarna`
  ADD PRIMARY KEY (`id_produkwarna`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  MODIFY `id_ekspedisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ekspedisijenis`
--
ALTER TABLE `ekspedisijenis`
  MODIFY `id_ekspedisijenis` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id_stok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelangganhobi`
--
ALTER TABLE `pelangganhobi`
  MODIFY `id_pelangganhobi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `produkjenis`
--
ALTER TABLE `produkjenis`
  MODIFY `id_produkjenis` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produkwarna`
--
ALTER TABLE `produkwarna`
  MODIFY `id_produkwarna` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ekspedisijenis`
--
ALTER TABLE `ekspedisijenis`
  ADD CONSTRAINT `ekspedisijenis_ibfk_1` FOREIGN KEY (`id_ekspedisi`) REFERENCES `ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasok_ibfk_2` FOREIGN KEY (`id_ekspedisi`) REFERENCES `ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasok_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasok_ibfk_4` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `pelangganhobi`
--
ALTER TABLE `pelangganhobi`
  ADD CONSTRAINT `pelangganhobi_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_ekspedisi`) REFERENCES `ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategoriproduk` (`id_kategori`);

--
-- Constraints for table `produkjenis`
--
ALTER TABLE `produkjenis`
  ADD CONSTRAINT `produkjenis_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produkwarna`
--
ALTER TABLE `produkwarna`
  ADD CONSTRAINT `produkwarna_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`id_ekspedisi`) REFERENCES `ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
