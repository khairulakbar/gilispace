/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : endogasin

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-26 14:40:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories_table`
-- ----------------------------
DROP TABLE IF EXISTS `categories_table`;
CREATE TABLE `categories_table` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories_table
-- ----------------------------
INSERT INTO `categories_table` VALUES ('1', 'Design & Illustration');
INSERT INTO `categories_table` VALUES ('2', 'Web');
INSERT INTO `categories_table` VALUES ('3', 'Mobile Apps');

-- ----------------------------
-- Table structure for `projects_table`
-- ----------------------------
DROP TABLE IF EXISTS `projects_table`;
CREATE TABLE `projects_table` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `project_name` varchar(150) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `price` varchar(150) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of projects_table
-- ----------------------------
INSERT INTO `projects_table` VALUES ('1', '1', 'Work From Home Vector Assets', 'Vector Assets tema work from home, desain menggunakan Adobe Illustrator. Silahkan Download di bawah ini', '2', '0', 'Image_gara.jpg');
INSERT INTO `projects_table` VALUES ('2', '2', 'Holiday Vectorsss', 'AVector Assets tema Holiday', '2', '0', 'Image_www.jpg');
INSERT INTO `projects_table` VALUES ('3', '1', 'Office Vector', 'Vector Assets tema Office Part 1', '2', '0', 'Image_aeare.jpg');
INSERT INTO `projects_table` VALUES ('4', '1', 'adqeq', '<p>asdfadfasdf<br></p>', '2', '0', 'Pic_1123.jpg');

-- ----------------------------
-- Table structure for `tb_login`
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `word` varchar(250) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES ('2', 'super', '250cf8b51c773f3f8dc8b4be867a9a02', '', 'super', '1', '1');
INSERT INTO `tb_login` VALUES ('58', 'admin', '250cf8b51c773f3f8dc8b4be867a9a02', '456', 'admin', '1', '1');
