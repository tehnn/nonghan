/*
Navicat MySQL Data Transfer

Source Server         : localhost_3309
Source Server Version : 50533
Source Host           : localhost:3309
Source Database       : nonghan

Target Server Type    : MYSQL
Target Server Version : 50533
File Encoding         : 65001

Date: 2015-01-13 22:58:39
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mprename
-- ----------------------------
INSERT INTO `mprename` VALUES ('1', 'นาย');
INSERT INTO `mprename` VALUES ('2', 'นาง');
INSERT INTO `mprename` VALUES ('3', 'นางสาว');

-- ----------------------------
-- Table structure for `msex`
-- ----------------------------
DROP TABLE IF EXISTS `msex`;
CREATE TABLE `msex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msex
-- ----------------------------
INSERT INTO `msex` VALUES ('1', 'ชาย');
INSERT INTO `msex` VALUES ('2', 'หญิง');
INSERT INTO `msex` VALUES ('3', 'เด็กชาย');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of patient
-- ----------------------------
INSERT INTO `patient` VALUES ('4', '12131313', '1', 'sdsdsdsd', 'sdsd', '2', '12', '3', '', null);
INSERT INTO `patient` VALUES ('5', 'sfdfdfdf', '1', 'ffffffff', 'fffffff', '2', null, '2', '', null);
INSERT INTO `patient` VALUES ('6', 'trdsadsd', '2', 'sdsd', 'sdsd', '2', '23', '2', '2015-01-13', null);
INSERT INTO `patient` VALUES ('7', 'wwww', '1', 'อุเทน', 'จาดยางโทน', '1', '23', '1', null, null);

-- ----------------------------
-- Table structure for `t_test`
-- ----------------------------
DROP TABLE IF EXISTS `t_test`;
CREATE TABLE `t_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pcu` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `pdate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_test
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
INSERT INTO `user` VALUES ('admin', '112233', 'ADMIN01', 'อายุรกรรมชาย', 'admin', '2015-01-13 22:18:44', '29');
INSERT INTO `user` VALUES ('admin1', '112233', 'sasASas', 'asasas', 'admin', '2015-01-13 13:48:34', '1');
INSERT INTO `user` VALUES ('admin2', '1122334', 'sadsd', 'sdasdadsad', 'user', null, null);
INSERT INTO `user` VALUES ('sa', 'sa', 'SysAdmin', 'อายุรกรรมชาย', 'admin', '2015-01-13 21:18:43', '6');

-- ----------------------------
-- View structure for `v_patient`
-- ----------------------------
DROP VIEW IF EXISTS `v_patient`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_patient` AS select `patient`.`id` AS `id`,`patient`.`cid` AS `cid`,`mprename`.`name` AS `name`,`patient`.`fname` AS `fname`,`patient`.`lname` AS `lname`,`msex`.`name` AS `sex`,`patient`.`age` AS `age`,`patient`.`reg_date` AS `reg_date`,`mdisease`.`disease` AS `disease` from (((`patient` join `msex` on((`msex`.`id` = `patient`.`sex`))) join `mprename` on((`mprename`.`id` = `patient`.`prename`))) join `mdisease` on((`mdisease`.`id` = `patient`.`disease`))) ;
