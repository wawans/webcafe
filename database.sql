/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : lacafe

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-01-22 15:51:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `idmenu` char(7) CHARACTER SET latin1 NOT NULL COMMENT 'ex: F16P001 - MAKANAN TH.16 PANAS NO:1',
  `nama` varchar(45) NOT NULL,
  `deskripsi` varchar(254) DEFAULT NULL,
  `harga` decimal(15,0) NOT NULL DEFAULT '0',
  `status` char(1) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `tgl_rekam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('D16D001', 'ES TEH', 'ESTEH', '3000', '1', '2016-01-22 09:12:16');
INSERT INTO `menu` VALUES ('D16D002', 'ES JERUK', 'ES JERUK', '4000', '1', '2016-01-22 09:12:38');
INSERT INTO `menu` VALUES ('D16D003', 'JUS ALPUKAT', 'JUS ALPUKAT', '8000', '1', '2016-01-22 09:13:13');
INSERT INTO `menu` VALUES ('D16D004', 'JUS MELON', 'JUS MELON', '8000', '1', '2016-01-22 09:13:33');
INSERT INTO `menu` VALUES ('D16D005', 'JUS MANGGA', 'JUS MANGGA', '8000', '1', '2016-01-22 09:13:54');
INSERT INTO `menu` VALUES ('D16D006', 'JUS STROBERI', 'JUS STROBERI', '10000', '1', '2016-01-22 09:14:18');
INSERT INTO `menu` VALUES ('D16D007', 'JUS SIRSAK', 'JUS SIRSAK', '8000', '1', '2016-01-22 09:15:00');
INSERT INTO `menu` VALUES ('D16P001', 'Teh Poci', 'Teh Poci hangat', '8000', '1', '2016-01-22 09:08:32');
INSERT INTO `menu` VALUES ('D16P002', 'TEH HANGAT MANIS', 'TEH HANGAT MANIS', '3000', '1', '2016-01-22 09:15:36');
INSERT INTO `menu` VALUES ('D16P003', 'JERUK HANGAT', 'JERUK HANGAT', '4000', '1', '2016-01-22 09:16:26');
INSERT INTO `menu` VALUES ('F16N001', 'Nasi Putih', 'Nasi dari beras berkualitas tinggi', '3000', '1', '2016-01-13 00:00:00');
INSERT INTO `menu` VALUES ('F16N002', 'Nasi Goreng Ayam', 'Variasi Pedas sesuai selera', '12000', '1', '2016-01-22 09:11:01');
INSERT INTO `menu` VALUES ('F16N003', 'CAP CAY', 'CAPCAY TANPA JAMUR', '10000', '1', '2016-01-22 09:17:50');
INSERT INTO `menu` VALUES ('F16N004', 'CAP CAY JAMUR', 'CAPCAY JAMURAN', '12000', '1', '2016-01-22 09:18:14');
INSERT INTO `menu` VALUES ('F16N005', 'AYAM PANGGANG', 'AYAM PANGGANG', '18000', '1', '2016-01-22 09:19:17');
INSERT INTO `menu` VALUES ('F16N006', 'BANDENG PRESTO', 'BANDENG PRESTO', '18000', '1', '2016-01-22 09:19:46');
INSERT INTO `menu` VALUES ('F16N007', 'GURAME BAKAR', 'GURAME BAKAR', '20000', '1', '2016-01-22 09:20:52');
INSERT INTO `menu` VALUES ('F16N008', 'UDANG SAUS TIRAM', 'UDANG SAUS TIRAM', '20000', '1', '2016-01-22 09:21:13');
INSERT INTO `menu` VALUES ('F16N009', 'KEPITING KEPROK', 'KEPITING KEPROK SEPSIAL', '45000', '1', '2016-01-22 09:21:40');
INSERT INTO `menu` VALUES ('F16N010', 'JAMUR SAUS TIRAM', 'JAMUR SAUS TIRAM', '12000', '1', '2016-01-22 09:23:20');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `nip` char(6) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(35) DEFAULT NULL,
  `telp` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('160101', 'Administrator', 'Pekalongan', 'Pekalongan', null, 'admin@lacafe.net', '2016-01-01', null);

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `nip` char(6) CHARACTER SET latin1 NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `akses` char(3) CHARACTER SET latin1 NOT NULL DEFAULT '000',
  PRIMARY KEY (`nip`),
  UNIQUE KEY `username` (`username`),
  CONSTRAINT `c_pengguna_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('160101', 'admin', 'admin123', '111');

-- ----------------------------
-- Table structure for webconf
-- ----------------------------
DROP TABLE IF EXISTS `webconf`;
CREATE TABLE `webconf` (
  `ref_nama` varchar(255) NOT NULL,
  `des_isi` varchar(255) NOT NULL,
  UNIQUE KEY `ref_nama` (`ref_nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webconf
-- ----------------------------
INSERT INTO `webconf` VALUES ('alamat', 'Jl. Patriot No. 25');
INSERT INTO `webconf` VALUES ('email', 'lacafe_pkl@gmail.com');
INSERT INTO `webconf` VALUES ('judul', 'Patriot Cafe');
INSERT INTO `webconf` VALUES ('kota', 'Pekalongan, Indonesia');
INSERT INTO `webconf` VALUES ('slogan', 'Menyatukan Kehangatan Bersama');
INSERT INTO `webconf` VALUES ('telp', '(0285) 491714');
