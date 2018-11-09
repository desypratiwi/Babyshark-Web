/*
Navicat MySQL Data Transfer

Source Server         : 192.168.1.156_3306
Source Server Version : 50505
Source Host           : 192.168.1.63:3306
Source Database       : babydudu

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-09 09:52:47
*/

SET FOREIGN_KEY_CHECKS=0;

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
