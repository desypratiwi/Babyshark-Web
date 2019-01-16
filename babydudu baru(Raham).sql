-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 05:45 PM
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
-- Table structure for table `informasi_web`
--

CREATE TABLE `informasi_web` (
  `policy_footer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_web`
--

INSERT INTO `informasi_web` (`policy_footer`) VALUES
('kentang');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_hlp_status`
--

CREATE TABLE `tb_hlp_status` (
  `id_status` varchar(255) NOT NULL,
  `status_order` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hlp_status`
--

INSERT INTO `tb_hlp_status` (`id_status`, `status_order`) VALUES
('B', 'Batal'),
('BM', 'Belum Membayar'),
('BTD', 'Barang Telah Dikirim'),
('MKP', 'Menunggu Konfirmasi Pembayaran'),
('PB', 'Pengiriman Barang'),
('PTD', 'Pembayaran Telah Dikonfirmasi'),
('S', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_brand`
--

CREATE TABLE `tb_mst_brand` (
  `id_brand` bigint(20) NOT NULL,
  `nama_brand` varchar(255) DEFAULT NULL,
  `deskripsi_brand` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_brand`
--

INSERT INTO `tb_mst_brand` (`id_brand`, `nama_brand`, `deskripsi_brand`) VALUES
(1, 'NIKE', 'Nike'),
(2, 'Adidas', 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_customer`
--

CREATE TABLE `tb_mst_customer` (
  `id_customer` bigint(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_customer` varchar(255) DEFAULT NULL,
  `telp_customer` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `poin` varchar(255) DEFAULT NULL,
  `customer_aktif` varchar(255) DEFAULT NULL,
  `banyak_order` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_customer`
--

INSERT INTO `tb_mst_customer` (`id_customer`, `username`, `nama_customer`, `telp_customer`, `email`, `jk`, `alamat`, `kota`, `tgl_lahir`, `poin`, `customer_aktif`, `banyak_order`, `date_created`, `date_modified`, `created_by`, `modified_by`) VALUES
(1, 'galih', 'galih', '085', 'galih@stiki.ac.id', 'L', 'Malang', 'Malang', '1998-08-05', '10', NULL, '9', '2018-12-25 22:40:52', '2018-12-25 22:40:52', NULL, NULL),
(2, 'tiwi', 'tiwi', '085', 'tiwi@stiki.ac.id', 'P', 'Blitar', 'Blitar', '1997-12-15', '10', NULL, '10', '2018-12-25 22:41:24', '2018-12-25 22:41:24', NULL, NULL),
(3, 'rian', 'rian', '085', 'rian@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_kategori`
--

CREATE TABLE `tb_mst_kategori` (
  `id_kategori` bigint(20) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `deskripsi_kategori` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `aktif` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_kategori`
--

INSERT INTO `tb_mst_kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`, `gambar`, `aktif`, `date_created`, `date_modified`) VALUES
(1, 'Jaket', 'Jaket', NULL, NULL, NULL, NULL),
(5, 'Sepatu', 'Sepatu', NULL, NULL, NULL, NULL),
(7, 'Sandal', 'Sandal', 'asset/kategori/yr.png', 'Yes', '2019-01-16 12:09:41', '2019-01-16 12:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_kurir`
--

CREATE TABLE `tb_mst_kurir` (
  `id_kurir` bigint(20) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi_perusahaan` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `email_perusahaan` varchar(255) DEFAULT NULL,
  `telp_perusahaan` varchar(255) DEFAULT NULL,
  `logo_perusahaan` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_kurir`
--

INSERT INTO `tb_mst_kurir` (`id_kurir`, `nama_perusahaan`, `deskripsi_perusahaan`, `harga`, `email_perusahaan`, `telp_perusahaan`, `logo_perusahaan`, `date_created`, `date_modified`, `created_by`, `modified_by`) VALUES
(23, 'oke', 'siap', 20000, 'kentang@gmail.com', 'mantep', 'asset/kurir/oke.png', '2019-01-16 22:56:23', '2019-01-16 22:56:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_pembayaran`
--

CREATE TABLE `tb_mst_pembayaran` (
  `id_pembayaran` varchar(255) DEFAULT NULL,
  `tipe_pembayaran` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_produk`
--

CREATE TABLE `tb_mst_produk` (
  `id_produk` bigint(20) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `harga_awal` bigint(20) DEFAULT NULL,
  `harga_jual` bigint(20) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `produk_tersedia` char(1) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `id_brand` bigint(20) DEFAULT NULL,
  `id_kategori` bigint(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_produk`
--

INSERT INTO `tb_mst_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `gambar`, `harga_awal`, `harga_jual`, `diskon`, `stok`, `produk_tersedia`, `catatan`, `id_brand`, `id_kategori`, `date_created`, `date_modified`, `created_by`, `modified_by`) VALUES
(1, 'Jaket Adidas', 'Jaketnya Adidas', NULL, 11000, 10000, NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL, NULL),
(2, 'Sepatu Nike', 'Sepatunya Nike', NULL, 200000, 200000, NULL, NULL, NULL, NULL, 1, 5, '2019-01-16 12:08:35', '2019-01-16 12:08:35', NULL, NULL),
(171, 'Sandal Nike', 'Ini barang', NULL, 10000, 15000, 0, NULL, NULL, NULL, 1, 7, '2019-01-16 12:09:07', '2019-01-16 12:09:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_vendor`
--

CREATE TABLE `tb_mst_vendor` (
  `id_vendor` bigint(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `nama_owner` varchar(255) DEFAULT NULL,
  `telp_vendor` varchar(255) DEFAULT NULL,
  `alamat_vendor` varchar(255) DEFAULT NULL,
  `kota_vendor` varchar(255) DEFAULT NULL,
  `email_vendor` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banyak_order` bigint(20) DEFAULT NULL,
  `vendor_aktif` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_vendor`
--

INSERT INTO `tb_mst_vendor` (`id_vendor`, `username`, `nama_vendor`, `nama_owner`, `telp_vendor`, `alamat_vendor`, `kota_vendor`, `email_vendor`, `logo`, `banyak_order`, `vendor_aktif`) VALUES
(1, 'galih', 'raham', 'Jl.', '085885858585', 'Jl.', 'Malang', 'rasuyas@gmail.com', NULL, NULL, NULL),
(2, 'tiwi', 'tiwi', 'tiwi', '085', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'rian', 'rian', 'rian', '085', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(5) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Penjual/Pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tr_cart`
--

CREATE TABLE `tb_tr_cart` (
  `id_customer` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tr_cart`
--

INSERT INTO `tb_tr_cart` (`id_customer`, `id_barang`, `jumlah`, `harga`, `subtotal`) VALUES
(7, 1, 1, 10000, 10000),
(7, 2, 1, 200000, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tr_detail_order`
--

CREATE TABLE `tb_tr_detail_order` (
  `id_order` bigint(20) DEFAULT NULL,
  `id_produk` bigint(20) DEFAULT NULL,
  `banyak` varchar(255) DEFAULT NULL,
  `subtotal` bigint(20) DEFAULT NULL,
  `id_kurir` bigint(20) DEFAULT NULL,
  `alamat_tujuan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tr_order`
--

CREATE TABLE `tb_tr_order` (
  `id_order` bigint(20) NOT NULL,
  `tgl_order` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `total_pembayaran` bigint(20) DEFAULT NULL,
  `id_pembayaran` bigint(20) DEFAULT NULL,
  `id_customer` bigint(20) DEFAULT NULL,
  `id_status` varchar(255) DEFAULT NULL,
  `resi` int(11) NOT NULL,
  `lunas` varchar(255) DEFAULT NULL,
  `expired` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tr_order`
--

INSERT INTO `tb_tr_order` (`id_order`, `tgl_order`, `total_pembayaran`, `id_pembayaran`, `id_customer`, `id_status`, `resi`, `lunas`, `expired`, `date_created`, `date_modified`, `created_by`, `modified_by`) VALUES
(1, '2018-12-25 09:18:29', 20000, 1, 1, 'BM', 0, 'y', NULL, '2018-12-25 09:18:29', '2018-12-25 09:18:29', NULL, NULL),
(2, '2018-12-25 09:18:35', 20000, 1, 1, 'MKP', 0, 'y', NULL, '2018-12-25 09:18:35', '2018-12-25 09:18:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tr_produk_vendor`
--

CREATE TABLE `tb_tr_produk_vendor` (
  `id_produk` bigint(20) DEFAULT NULL,
  `id_vendor` bigint(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_role` int(5) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `id_role`, `nama`, `alamat`, `email`, `no_telp`, `tgl_lahir`, `jk`) VALUES
(1, 'tiwi', 'tiwi', 1, 'Desy pratiwi', 'Malang', 'tiwi@stiki.ac.id', '085546101510', NULL, NULL),
(7, 'rian', '12345', 2, 'Rianto', 'Kediri', 'rian@stiki.ac.id', '085546987412', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner_promo`
--
ALTER TABLE `tb_banner_promo`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_hlp_status`
--
ALTER TABLE `tb_hlp_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_mst_brand`
--
ALTER TABLE `tb_mst_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tb_mst_customer`
--
ALTER TABLE `tb_mst_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_mst_kategori`
--
ALTER TABLE `tb_mst_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_mst_kurir`
--
ALTER TABLE `tb_mst_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tb_mst_produk`
--
ALTER TABLE `tb_mst_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_brand` (`id_brand`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_mst_vendor`
--
ALTER TABLE `tb_mst_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_tr_order`
--
ALTER TABLE `tb_tr_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`,`username`),
  ADD KEY `role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner_promo`
--
ALTER TABLE `tb_banner_promo`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_mst_brand`
--
ALTER TABLE `tb_mst_brand`
  MODIFY `id_brand` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_mst_customer`
--
ALTER TABLE `tb_mst_customer`
  MODIFY `id_customer` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mst_kategori`
--
ALTER TABLE `tb_mst_kategori`
  MODIFY `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_mst_kurir`
--
ALTER TABLE `tb_mst_kurir`
  MODIFY `id_kurir` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_mst_produk`
--
ALTER TABLE `tb_mst_produk`
  MODIFY `id_produk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `tb_mst_vendor`
--
ALTER TABLE `tb_mst_vendor`
  MODIFY `id_vendor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mst_produk`
--
ALTER TABLE `tb_mst_produk`
  ADD CONSTRAINT `tb_mst_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_mst_kategori` (`id_kategori`),
  ADD CONSTRAINT `tb_mst_produk_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `tb_mst_brand` (`id_brand`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_role` (`id_role`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
