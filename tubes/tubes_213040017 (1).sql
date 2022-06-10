-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040017`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `img`, `nama_produk`, `deskripsi_produk`, `Harga`, `stok`) VALUES
(18, 'ps3slim.png', 'Playstation 3 Slim and stick Playstation 3', 'PS3 Super Slim merupakan salah satu varian PlayStation 3 yang dikenal karena ciri khas desainnya yang lebih ramping.', 'Rp. 2,399,000', 10),
(19, 'ps4.png', 'Playstation 4 and stick ps 4', 'PlayStation 4 menggunakan Accelerated Processing Unit (APU) yang dikembangkan AMD bersama dengan Sony. Menggabungkan central processing unit (CPU) dan graphics processing unit (GPU), serta komponen lain seperti kontroler memori dan video decoder.', 'Rp. 4,065,000', 10),
(20, 'ps5.png', 'Playstation 5 and stick ps 5', 'Walau sama-sama mengusung chip AMD Radeon khusus, chipset milik PS5 diklaim punya tenaga dan kekuatan ekstra. Pasalnya, terdapat 36 CPU pada PS5, sedangkan PS4 hanya membawa 18 CPU. Otomatis kinerja PS5 jauh lebih cepat, kuat, dan efisien.', 'Rp. 7,300,000', 10),
(21, 'nintendo switch.png', 'Nintendo switch', 'Nintendo Switch merupakan konsol game dari Nintendo yang bisa dimainkan langsung tanpa TV atau secara portable.', 'Rp. 2,265,000', 10),
(22, 'xbox series s.png', 'XBOX series S and stick XBOX series S', 'xbox series s adalah konsol permainan video mendatang yang dikembangkan oleh Microsoft.', 'Rp. 2,554,000', 10),
(23, 'xbox360.png', 'XBOX360 and Stick XBOX360', 'Xbox 360 adalah konsol pertama yang dapat memutar film HD-DVD dengan membeli paketnya terlebih dahulu, yang akan direlease kemudian. Xbox 360 juga adalah konsol pertama yang menggunakan stik wireless.', 'Rp. 2,554,000', 10);

-- --------------------------------------------------------

--
-- Table structure for table `produkstik`
--

CREATE TABLE `produkstik` (
  `id_stik` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama_stik` varchar(255) NOT NULL,
  `deskripsi_stik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkstik`
--

INSERT INTO `produkstik` (`id_stik`, `img`, `nama_stik`, `deskripsi_stik`) VALUES
(1, 'stikps4.jpg', 'stick Playstation 4', 'For play ps 4'),
(2, 'stikps5.jpg', 'stick Playstation 5', 'For play ps 5'),
(3, 'stikps3.jpg', 'stick Playstation 3', 'For play ps 3'),
(4, 'stikxboxs.jpg', 'stick XBOX series S', 'For play XBOX series S'),
(5, 'stikxbox360.jpg', 'stick XBOX 360', 'For play XBOX 360');

-- --------------------------------------------------------

--
-- Table structure for table `produk_stick`
--

CREATE TABLE `produk_stick` (
  `id_ps` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_stik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(4, 'admin', '$2y$10$64X3m/XFNbQ8h2u8gruhZe1yd81rKU1vJBa7LDN1DOBYxUKjOpA5C', 'admin'),
(5, 'alif', '$2y$10$ZieXmRhx9exOnBp742rBoO1XAb8iMUV/12XWafbkfKMlpZN7Y/HsK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkstik`
--
ALTER TABLE `produkstik`
  ADD PRIMARY KEY (`id_stik`);

--
-- Indexes for table `produk_stick`
--
ALTER TABLE `produk_stick`
  ADD PRIMARY KEY (`id_ps`),
  ADD KEY `id` (`id`),
  ADD KEY `id_stik` (`id_stik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produkstik`
--
ALTER TABLE `produkstik`
  MODIFY `id_stik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk_stick`
--
ALTER TABLE `produk_stick`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk_stick`
--
ALTER TABLE `produk_stick`
  ADD CONSTRAINT `produk_stick_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_stick_ibfk_2` FOREIGN KEY (`id_stik`) REFERENCES `produkstik` (`id_stik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
