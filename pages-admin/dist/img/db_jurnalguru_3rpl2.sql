/*
Navicat MySQL Data Transfer

Source Server         : db_piket3rpl2
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_jurnalguru_3rpl2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-01-25 14:44:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_guru`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_guru`;
CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_guru
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_jadwal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jadwal`;
CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `jam_ke` varchar(2) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_jadwal
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_jurnal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jurnal`;
CREATE TABLE `tbl_jurnal` (
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `materi` text NOT NULL,
  PRIMARY KEY (`id_jurnal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_jurnal
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_kelas`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_kelas
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_mapel`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mapel`;
CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_mapel
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_level` enum('guru','admin') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');
INSERT INTO `tbl_users` VALUES ('2', 'guru1', 'guru1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'guru');
INSERT INTO `tbl_users` VALUES ('3', 'guru2', 'guru2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'guru');
INSERT INTO `tbl_users` VALUES ('5', 'akbar', 'bar0211@gmail.com', '013f3fc5ec689983bc0722fb9fe56001', 'admin');
