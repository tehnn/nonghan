/*
Navicat MySQL Data Transfer

Source Server         : localhost_3309
Source Server Version : 50533
Source Host           : localhost:3309
Source Database       : nonghan

Target Server Type    : MYSQL
Target Server Version : 50533
File Encoding         : 65001

Date: 2015-01-12 14:47:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mdisease`
-- ----------------------------
DROP TABLE IF EXISTS `mdisease`;
CREATE TABLE `mdisease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT '',
  `disease` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mdisease
-- ----------------------------
INSERT INTO `mdisease` VALUES ('1', 'E', 'เบาหวาน');
INSERT INTO `mdisease` VALUES ('2', 'I', 'ความดัน');
INSERT INTO `mdisease` VALUES ('3', 'IE', 'เบาหวานและความดัน');

-- ----------------------------
-- Table structure for `mprename`
-- ----------------------------
DROP TABLE IF EXISTS `mprename`;
CREATE TABLE `mprename` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mprename
-- ----------------------------

-- ----------------------------
-- Table structure for `msex`
-- ----------------------------
DROP TABLE IF EXISTS `msex`;
CREATE TABLE `msex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msex
-- ----------------------------

-- ----------------------------
-- Table structure for `patient`
-- ----------------------------
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(255) DEFAULT NULL,
  `prename` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `disease` varchar(255) DEFAULT NULL,
  `reg_date` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of patient
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `officeid` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `lastlogin` varchar(255) DEFAULT NULL,
  `countlogin` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '112233', 'ADMIN01', 'อายุรกรรมชาย', 'admin', '2014-09-25 13:37:34', '27');
INSERT INTO `user` VALUES ('admin1', '112233', 'sasASas', 'asasas', 'admin', null, null);
INSERT INTO `user` VALUES ('admin2', '1122334', 'sadsd', 'sdasdadsad', 'user', null, null);
INSERT INTO `user` VALUES ('sa', 'sa', 'SysAdmin', 'อายุรกรรมชาย', 'admin', '2014-09-24 17:21:15', '1');
