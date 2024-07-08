-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2024 at 05:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int NOT NULL,
  `nama_donasi` varchar(255) NOT NULL,
  `kategori_donasi` varchar(50) NOT NULL,
  `target_donasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `perolehan_donasi` text NOT NULL,
  `tenggat` date NOT NULL,
  `deskripsi_donasi` varchar(255) NOT NULL,
  `img_1` varchar(50) NOT NULL,
  `img_2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `nama_donasi`, `kategori_donasi`, `target_donasi`, `perolehan_donasi`, `tenggat`, `deskripsi_donasi`, `img_1`, `img_2`, `img3`) VALUES
(5, 'Bantu Deksa', 'Bencana Alam', '20000000', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(6, 'Bantu Deksa', 'Bencana Alam', '20000000', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(7, 'Bantu Dekda', 'Bencana Alam', '0', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(8, 'tes', 'tes', '20000000', '0', '2025-11-03', '0', 'Screenshot (32).png', 'Horizontal-Logo (1).png', 'web_2.jpg'),
(9, 'thtrh', 'Bencana Alam', '70000000', '0', '2025-12-03', '0', 'star-half-yellow-icon.png', 'web_5.jpeg', 'web_2.jpg'),
(10, 'thtrh', 'fghyth', '70', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(11, 'thtrh', 'fghyth', '70', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(12, 'thtrh', 'fghyth', '70', '0', '2025-02-01', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(13, 'rgrgf', 'sosial', '70', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(14, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(15, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(16, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(17, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(18, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(19, 'rgrgf', 'sosial', '0', '0', '2025-12-04', '0', 'Screenshot (33).png', 'Horizontal-Logo (1).png', 'Wairinding.jpg'),
(20, 'Banjir', 'Bencana Alam', '20000000', '0.00', '2026-12-03', '0', 'bni-removebg-preview.png', 'bca.jpeg', 'logo-bri-png.png'),
(21, 'Banjir', 'Bencana Alam', '65000000', '0.00', '2025-11-02', '0', 'Screenshot 2024-06-03 140726.jpg', 'Screenshot 2023-12-28 023218.jpg', 'Screenshot 2024-06-26 085521.jpg'),
(22, 'Banjir', 'Bencana Alam', '65000000', '0.00', '2025-11-02', '0', 'Screenshot 2024-06-03 140726.jpg', 'Screenshot 2023-12-28 023218.jpg', 'Screenshot 2024-06-26 085521.jpg'),
(23, 'gempa', 'Bencana Alam', '20000000', '0.00', '2000-02-01', '0', 'Screenshot 2024-07-04 093902.jpg', 'data kargo.jpg', 'Screenshot 2024-07-02 233901.jpg'),
(24, 'bantu dekda', 'korban longsor', '2000', '0.00', '2025-11-05', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg'),
(25, 'bantu ', 'korban longsor', '2000', '0.00', '2025-11-05', '0', 'WhatsApp Image 2024-07-04 at 08.46.23.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.40.jpeg', 'WhatsApp Image 2024-07-04 at 08.46.42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `userName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `born` date NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `userName`, `email`, `born`, `gender`, `password`, `level`) VALUES
(10, '', '', 'dsvfsvf', 'srgfef', '2000-01-01', 'm', '$2y$10$1QsK2w1hZVjoHBTIN80onuaWBGipg40lbVTnONO9cuq.fC2P3FNg2', ''),
(12, '', '', 'dsgfrefew', 'fewfewf', '1324-03-21', 'f', 'ef4ewf3f', ''),
(13, '', '', 'esfref', 'twoodoo12@gmail.com', '2004-12-03', 'm', '123456', ''),
(14, '', '', 'ygrrhyt', 'fdghyrjyj', '2000-11-22', 'm', 'rt5y6yu6yu', ''),
(15, '', '', 'ygrrhyt', 'fdghyrjyj', '2000-11-22', 'm', 'rt5y6yu6yu', ''),
(16, '', '', 'fr5s-ofytfvyg', 'gteigtrhyiok', '2000-11-05', 'o', 'regtytryutiuyttjthrfdffdvdsfgdsgdffddsfdsfcdsfsdfdsfreje4ureugf', ''),
(17, '', '', 'fr5s-ofytfvyg', 'gteigtrhyiok', '2000-11-05', 'm', 'regtytrygdsgdffddsfdsfcdsfsdfdsfreje4ureugf', ''),
(18, '', '', 'test2', 'gteigtrhyiok', '2000-11-02', 'm', '123456789', ''),
(19, '', '', 'patrisa123', 'patrisius2005@gmail.com', '0200-11-02', 'm', 'qwerty', ''),
(20, '', '', 'twodoo12', 'twoodoo12@gmail.com', '2005-11-04', 'o', 'qwerty', ''),
(21, '', '', 'twodoo12', 'twoodoo12@gmail.com', '2005-11-04', 'o', '$2y$10$X1EqA8orhrdACxz46wnVIeFw3LzDITpHbhBL9tnje1YAREJ3tqN5y', ''),
(22, '', '', 'twodoo12', 'twoodoo12@gmail.com', '2005-11-04', 'o', '$2y$10$O7p.kQoEoY5Erg.2Ej0hheflB6KK8nv8j4SThTxzhZ/4HJMKh5OOK', ''),
(23, '', '', 'twodoo12', 'twoodoo12@gmail.com', '2005-11-04', 'o', '$2y$10$gE7wmSI1joKmIXbJrunv/.mp1oPPRYpnzFEYLxiHLJ18zqbselASK', ''),
(26, '', '', 'efefef', 'efefef', '1988-11-02', 'f', '$2y$10$1kobBvijAd2fuT7NXW3sIu7zxOKlhzcs96v92wo4/BKAA43mOkEOq', ''),
(27, '', '', 'patris123', 'patrisius2005@gmail.com', '2005-11-04', 'm', '$2y$10$ri9QWpUXy0fuu7GGNrKiPum3tOmbjjG6C5//UuxIMKapEdCLpHWs2', ''),
(28, '', '', 'tektok123', 'tektok18@gmail.com', '2000-11-05', 'o', '$2y$10$cugtB0hOgNmjEzLosKvgneFp.SknA2tGwIpuBK3UmydN7GWNiY2Iu', ''),
(29, 'Patrisius ', 'Remijawa', 'Remijawa05', 'patrisius2005@gmail.com', '2005-04-11', 'm', '$2y$10$5V95roIkxT7im/SXQ1aWCehxxtyMj6Uy/frnOeL6ctrKS8fe7JJc.', 'admin'),
(30, 'testing4', 'tester', 'testering42', 'twoodoo12@gmail.com', '2005-11-04', 'o', '$2y$10$YEu1X.2zEtjXDMx63QnIweqFkDRsL0ZY.YNy2tr1A3w7sOp1c04Ym', 'user'),
(31, 'testing4', 'tester', 'testering42', 'twoodoo12@gmail.com', '2005-11-04', 'o', '$2y$10$gFZlffuuSEET8RZaTzFciuTnyBs2NYJdHDlzoP7HF1R9iUiEPlM3y', 'user'),
(32, 'patris', 'ffdh', 'test123', 'jazzz@gmail.com', '2000-03-02', 'f', '$2y$10$HWt4n16AKxplblJaxULV7upIWABoMLbvne9hcmPiHPoAjy7Tx8.Zm', 'user'),
(36, 'patris', 'renijawa', 'remijawa', 'patrisius2005@gmail.com', '2005-11-04', 'm', '$2y$10$MtO.Mh0qx3kipTmoal9pV.zbmj2lraChvD08rfbERZGz5n0opAgCS', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_donasi` int NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  `jumlah_donasi` int NOT NULL,
  `kode_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bayar` enum('belum','sudah') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_donasi` (`id_donasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_donasi`) REFERENCES `donasi` (`id_donasi`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
