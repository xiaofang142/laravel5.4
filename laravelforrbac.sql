/*
Navicat MySQL Data Transfer

Source Server         : forlocalhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laravelforrbac

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-11 18:23:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for table_admins
-- ----------------------------
DROP TABLE IF EXISTS `table_admins`;
CREATE TABLE `table_admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) DEFAULT NULL COMMENT 'uf8',
  `password` char(100) DEFAULT NULL,
  `role_id` int(10) unsigned DEFAULT NULL,
  `status` tinyint(255) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table_admins
-- ----------------------------
INSERT INTO `table_admins` VALUES ('1', 'root', '123456', '1', '1');
INSERT INTO `table_admins` VALUES ('2', 'admin', '123456', '2', '2');
INSERT INTO `table_admins` VALUES ('3', 'user', '123456', '1', '1');

-- ----------------------------
-- Table structure for table_powers
-- ----------------------------
DROP TABLE IF EXISTS `table_powers`;
CREATE TABLE `table_powers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `power_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table_powers
-- ----------------------------

-- ----------------------------
-- Table structure for table_poweslists
-- ----------------------------
DROP TABLE IF EXISTS `table_poweslists`;
CREATE TABLE `table_poweslists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL,
  `description` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table_poweslists
-- ----------------------------

-- ----------------------------
-- Table structure for table_roles
-- ----------------------------
DROP TABLE IF EXISTS `table_roles`;
CREATE TABLE `table_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` char(255) DEFAULT NULL,
  `staus` tinyint(255) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table_roles
-- ----------------------------
