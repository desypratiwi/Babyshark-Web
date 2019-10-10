-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 05:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babydudu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner_promo`
--

CREATE TABLE `tb_banner_promo` (
  `id_banner` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner_promo`
--

INSERT INTO `tb_banner_promo` (`id_banner`, `nama_file`) VALUES
(1, 'Screenshot_134.png'),
(2, 'Screenshot_36.png'),
(3, 'Screenshot_361.png'),
(4, 'Screenshot_5.png'),
(5, 'Screenshot_11.png'),
(6, 'bee4b756-7b96-4427-9f87-f5e8bb9ec813.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner_promo`
--
ALTER TABLE `tb_banner_promo`
  ADD PRIMARY KEY (`id_banner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner_promo`
--
ALTER TABLE `tb_banner_promo`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
