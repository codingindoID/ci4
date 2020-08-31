/*
 Navicat Premium Data Transfer

 Source Server         : lokal
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : ci4

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 31/08/2020 14:54:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_komik
-- ----------------------------
DROP TABLE IF EXISTS `tb_komik`;
CREATE TABLE `tb_komik`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penulis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sampul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_komik
-- ----------------------------
INSERT INTO `tb_komik` VALUES (1, 'Naruto', 'naruto', 'agus', 'agus jaya', 'naruto.jpg', NULL, NULL);
INSERT INTO `tb_komik` VALUES (2, 'One Peace', 'one-peace', 'ole', 'ole jaya', 'one-peace.jpg', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
