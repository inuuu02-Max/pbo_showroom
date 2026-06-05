-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2026 at 03:47 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `jenis_type` varchar(50) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `tahun_manufaktur` year DEFAULT NULL,
  `harga` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `brand`, `jenis_type`, `warna`, `tahun_manufaktur`, `harga`) VALUES
(1, 'Toyota', 'Avanza', 'Hitam', '2022', 250000000),
(2, 'Honda', 'Brio', 'Putih', '2023', 220000000),
(3, 'Mitsubishi', 'Xpander', 'Silver', '2021', 280000000),
(4, 'Suzuki', 'Ertiga', 'Merah', '2022', 240000000),
(5, 'Daihatsu', 'Xenia', 'Abu-Abu', '2023', 230000000),
(6, 'Toyota', 'Innova', 'Hitam', '2024', 420000000),
(7, 'Honda', 'HR-V', 'Putih', '2023', 380000000),
(8, 'Hyundai', 'Creta', 'Biru', '2024', 350000000),
(9, 'Wuling', 'Alvez', 'Merah', '2023', 300000000),
(10, 'Nissan', 'Livina', 'Silver', '2022', 270000000),
(11, 'Mazda', 'CX-5', 'Putih', '2024', 550000000),
(12, 'Toyota', 'Fortuner', 'Hitam', '2023', 600000000),
(13, 'Mitsubishi', 'Pajero Sport', 'Putih', '2022', 650000000),
(14, 'Honda', 'CR-V', 'Abu-Abu', '2024', 720000000),
(15, 'Suzuki', 'XL7', 'Orange', '2023', 290000000),
(16, 'Daihatsu', 'Terios', 'Hitam', '2022', 310000000),
(17, 'Hyundai', 'Stargazer', 'Putih', '2024', 280000000),
(18, 'Wuling', 'Air EV', 'Biru', '2023', 240000000),
(19, 'Toyota', 'Raize', 'Kuning', '2024', 295000000),
(20, 'Honda', 'WR-V', 'Merah', '2023', 310000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
