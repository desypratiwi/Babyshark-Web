/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : babydudu

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2018-12-23 21:33:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for informasi_web
-- ----------------------------
DROP TABLE IF EXISTS `informasi_web`;
CREATE TABLE `informasi_web` (
  `policy_footer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of informasi_web
-- ----------------------------
INSERT INTO `informasi_web` VALUES ('kentang');

-- ----------------------------
-- Table structure for tb_mst_brand
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_brand`;
CREATE TABLE `tb_mst_brand` (
  `id_brand` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_brand` varchar(255) DEFAULT NULL,
  `deskripsi_brand` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_brand
-- ----------------------------

-- ----------------------------
-- Table structure for tb_mst_customer
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_customer`;
CREATE TABLE `tb_mst_customer` (
  `id_customer` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(255) DEFAULT NULL,
  `telp_customer` varchar(255) DEFAULT NULL,
  `email_customer` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `poin` varchar(255) DEFAULT NULL,
  `banyak_order` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_customer
-- ----------------------------

-- ----------------------------
-- Table structure for tb_mst_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_kategori`;
CREATE TABLE `tb_mst_kategori` (
  `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `deskripsi_kategori` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `aktif` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_kategori
-- ----------------------------
INSERT INTO `tb_mst_kategori` VALUES ('1', 'test', 'tes', null, null, null, null);
INSERT INTO `tb_mst_kategori` VALUES ('2', 'hore', 'hore', null, null, null, null);

-- ----------------------------
-- Table structure for tb_mst_kurir
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_kurir`;
CREATE TABLE `tb_mst_kurir` (
  `id_kurir` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi_perusahaan` varchar(255) DEFAULT NULL,
  `telp_perusahaan` varchar(255) DEFAULT NULL,
  `logo_perusahaan` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kurir`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_kurir
-- ----------------------------
INSERT INTO `tb_mst_kurir` VALUES ('1', 'galih', 'galih', 'galih', null, null, null, null, null);
INSERT INTO `tb_mst_kurir` VALUES ('2', 'tester', 'tester', 'tester', null, null, null, null, null);

-- ----------------------------
-- Table structure for tb_mst_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_pembayaran`;
CREATE TABLE `tb_mst_pembayaran` (
  `id_pembayaran` varchar(255) DEFAULT NULL,
  `tipe_pembayaran` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for tb_mst_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_produk`;
CREATE TABLE `tb_mst_produk` (
  `id_produk` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `modified_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_produk
-- ----------------------------

-- ----------------------------
-- Table structure for tb_mst_vendor
-- ----------------------------
DROP TABLE IF EXISTS `tb_mst_vendor`;
CREATE TABLE `tb_mst_vendor` (
  `id_vendor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_vendor` varchar(255) DEFAULT NULL,
  `nama_owner` varchar(255) DEFAULT NULL,
  `telp_vendor` varchar(255) DEFAULT NULL,
  `alamat_vendor` varchar(255) DEFAULT NULL,
  `kota_vendor` varchar(255) DEFAULT NULL,
  `email_vendor` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banyak_order` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_mst_vendor
-- ----------------------------

-- ----------------------------
-- Table structure for tb_role
-- ----------------------------
DROP TABLE IF EXISTS `tb_role`;
CREATE TABLE `tb_role` (
  `id_role` int(5) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_role
-- ----------------------------
INSERT INTO `tb_role` VALUES ('1', 'admin');
INSERT INTO `tb_role` VALUES ('2', 'penjual');
INSERT INTO `tb_role` VALUES ('3', 'pembeli');

-- ----------------------------
-- Table structure for tb_tr_detail_order
-- ----------------------------
DROP TABLE IF EXISTS `tb_tr_detail_order`;
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

-- ----------------------------
-- Records of tb_tr_detail_order
-- ----------------------------

-- ----------------------------
-- Table structure for tb_tr_order
-- ----------------------------
DROP TABLE IF EXISTS `tb_tr_order`;
CREATE TABLE `tb_tr_order` (
  `id_order` bigint(20) NOT NULL,
  `tgl_order` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `total_pembayaran` bigint(20) DEFAULT NULL,
  `id_pembayaran` bigint(20) DEFAULT NULL,
  `id_customer` bigint(20) DEFAULT NULL,
  `lunas` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_tr_order
-- ----------------------------
INSERT INTO `tb_tr_order` VALUES ('1', '2018-12-23 21:08:21', '20000', '1', '1', 'y', '2018-12-23 21:08:15', '2018-12-23 21:08:18', null, null);
INSERT INTO `tb_tr_order` VALUES ('2', '2018-12-23 21:08:21', '20000', '1', '1', 'y', '2018-12-23 21:08:15', '2018-12-23 21:08:18', null, null);

-- ----------------------------
-- Table structure for tb_tr_produk_vendor
-- ----------------------------
DROP TABLE IF EXISTS `tb_tr_produk_vendor`;
CREATE TABLE `tb_tr_produk_vendor` (
  `id_produk` bigint(20) DEFAULT NULL,
  `id_vendor` bigint(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_tr_produk_vendor
-- ----------------------------

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(5) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `role` (`role`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tb_role` (`id_role`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'tiwi', 'tiwi', '1', 'Desy pratiwi', 'Malang', 'tiwi@stiki.ac.id', '085546101510');
INSERT INTO `tb_user` VALUES ('7', 'rian', '12345', '3', 'Rianto', 'Kediri', 'rian@stiki.ac.id', '085546987412');
SET FOREIGN_KEY_CHECKS=1;
