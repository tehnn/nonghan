/*
Navicat MySQL Data Transfer

Source Server         : localhost_3309
Source Server Version : 50533
Source Host           : localhost:3309
Source Database       : loei

Target Server Type    : MYSQL
Target Server Version : 50533
File Encoding         : 65001

Date: 2015-01-12 14:23:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `disease`
-- ----------------------------
DROP TABLE IF EXISTS `disease`;
CREATE TABLE `disease` (
  `code` varchar(100) NOT NULL DEFAULT '',
  `disease` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of disease
-- ----------------------------
INSERT INTO `disease` VALUES ('E', 'เบาหวาน');
INSERT INTO `disease` VALUES ('I', 'ความดัน');
INSERT INTO `disease` VALUES ('IE', 'เบาหวานและความดัน');

-- ----------------------------
-- Table structure for `patient`
-- ----------------------------
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `cid` varchar(13) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(8) DEFAULT NULL,
  `disease` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datereg` date DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of patient
-- ----------------------------
INSERT INTO `patient` VALUES ('234', '03', 'ererer', 'ererer', '1', '45', 'IE', '2014-09-25');
INSERT INTO `patient` VALUES ('wdasdsd', '02', 'sdsd', 'sdsdsd', '1', '12', 'I', '2014-09-25');
INSERT INTO `patient` VALUES ('121313', '01', '13133', '313', '1', '12', 'I', '2014-09-25');
INSERT INTO `patient` VALUES ('sadsdsd', '01', 'sdsdsd', 'sdsdsd', '1', '12', 'E', '2014-09-25');

-- ----------------------------
-- Table structure for `prename`
-- ----------------------------
DROP TABLE IF EXISTS `prename`;
CREATE TABLE `prename` (
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prename
-- ----------------------------
INSERT INTO `prename` VALUES ('01', 'นาย');
INSERT INTO `prename` VALUES ('02', 'นาง');
INSERT INTO `prename` VALUES ('03', 'นางสาว');
INSERT INTO `prename` VALUES ('04', 'เด็กชาย');
INSERT INTO `prename` VALUES ('05', 'เด็กหญิง');
INSERT INTO `prename` VALUES ('06', 'พระภิกษุ');

-- ----------------------------
-- Table structure for `sum_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `sum_tbl`;
CREATE TABLE `sum_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sum_tbl
-- ----------------------------
INSERT INTO `sum_tbl` VALUES ('1', '2014-09-25 15:03:48', '1');
INSERT INTO `sum_tbl` VALUES ('2', '2014-09-25 15:03:51', '1');
INSERT INTO `sum_tbl` VALUES ('3', '2014-09-25 15:03:54', '1');
INSERT INTO `sum_tbl` VALUES ('4', '2014-09-25 15:03:57', '1');
INSERT INTO `sum_tbl` VALUES ('5', '2014-09-25 15:04:00', '1');
INSERT INTO `sum_tbl` VALUES ('6', '2014-09-25 15:04:03', '1');
INSERT INTO `sum_tbl` VALUES ('7', '2014-09-25 15:04:06', '1');
INSERT INTO `sum_tbl` VALUES ('8', '2014-09-25 15:04:09', '1');
INSERT INTO `sum_tbl` VALUES ('9', '2014-09-25 15:04:12', '1');
INSERT INTO `sum_tbl` VALUES ('10', '2014-09-25 15:04:15', '1');
INSERT INTO `sum_tbl` VALUES ('11', '2014-09-25 15:04:18', '1');
INSERT INTO `sum_tbl` VALUES ('12', '2014-09-25 15:04:21', '1');
INSERT INTO `sum_tbl` VALUES ('13', '2014-09-25 15:04:24', '1');
INSERT INTO `sum_tbl` VALUES ('14', '2014-09-25 15:04:27', '1');
INSERT INTO `sum_tbl` VALUES ('15', '2014-09-25 15:04:30', '1');
INSERT INTO `sum_tbl` VALUES ('16', '2014-09-25 15:04:33', '1');
INSERT INTO `sum_tbl` VALUES ('17', '2014-09-25 15:04:36', '1');
INSERT INTO `sum_tbl` VALUES ('18', '2014-09-25 15:04:39', '1');
INSERT INTO `sum_tbl` VALUES ('19', '2014-09-25 15:04:42', '1');
INSERT INTO `sum_tbl` VALUES ('20', '2014-09-25 15:04:45', '1');
INSERT INTO `sum_tbl` VALUES ('21', '2014-09-25 15:04:48', '1');
INSERT INTO `sum_tbl` VALUES ('22', '2014-09-25 15:04:51', '1');

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
