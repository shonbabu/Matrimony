/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : matrimony

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2020-11-22 19:03:47
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_famchild`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_famchild`;
CREATE TABLE `tbl_famchild` (
  `famchildid` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `siblingname` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `gen` varchar(20) NOT NULL,
  PRIMARY KEY (`famchildid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_famchild
-- ----------------------------
INSERT INTO `tbl_famchild` VALUES ('1', '1', 'Mathew', 'Single', 'M');
INSERT INTO `tbl_famchild` VALUES ('2', '2', 'Ali', 'Married', 'F');

-- ----------------------------
-- Table structure for `tbl_fammas`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_fammas`;
CREATE TABLE `tbl_fammas` (
  `fammas id` int(30) NOT NULL AUTO_INCREMENT,
  `fathername` varchar(30) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `fs` varchar(50) NOT NULL,
  `fv` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fammas id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_fammas
-- ----------------------------
INSERT INTO `tbl_fammas` VALUES ('1', 'John', 'Mary', 'Sneha Villa', 'Middle', 'Orthodox', '1', 'fuploads/ff.jpg');
INSERT INTO `tbl_fammas` VALUES ('2', 'Daniel', 'Anna', 'Paradise', 'Middle', 'Orthodox', '2', 'fuploads/2family1.jpg');

-- ----------------------------
-- Table structure for `tbl_intr`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_intr`;
CREATE TABLE `tbl_intr` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `iuid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_intr
-- ----------------------------
INSERT INTO `tbl_intr` VALUES ('1', '2', '1');
INSERT INTO `tbl_intr` VALUES ('2', '2', '3');

-- ----------------------------
-- Table structure for `tbl_login`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE `tbl_login` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_login
-- ----------------------------
INSERT INTO `tbl_login` VALUES ('0', 'admin', 'admin', 'admin', 'true');
INSERT INTO `tbl_login` VALUES ('1', 'sneha@gmail.com', 'sneha', 'user', 'true');
INSERT INTO `tbl_login` VALUES ('2', 'alan@gmail.com', 'alan', 'user', 'true');

-- ----------------------------
-- Table structure for `tbl_package`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_package`;
CREATE TABLE `tbl_package` (
  `pkid` int(11) NOT NULL AUTO_INCREMENT,
  `packname` varchar(30) NOT NULL,
  `desp` varchar(300) NOT NULL,
  `validity` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`pkid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_package
-- ----------------------------
INSERT INTO `tbl_package` VALUES ('1', 'Gold', 'Better Experience', '12', '2000');
INSERT INTO `tbl_package` VALUES ('2', 'Silver', 'Better Experience', '6', '1500');

-- ----------------------------
-- Table structure for `tbl_personal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_personal`;
CREATE TABLE `tbl_personal` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `comp` varchar(30) NOT NULL,
  `ms` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_personal
-- ----------------------------
INSERT INTO `tbl_personal` VALUES ('1', '1990-11-19', '159', '62', 'Fair', 'Single', '1', 'uploads/girl11.jpg');
INSERT INTO `tbl_personal` VALUES ('2', '1990-11-17', '160', '70', 'Fair', 'Single', '2', 'uploads/2use11.jpg');

-- ----------------------------
-- Table structure for `tbl_proff`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_proff`;
CREATE TABLE `tbl_proff` (
  `profid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `education` varchar(250) NOT NULL,
  `occufield` varchar(200) NOT NULL,
  `occup` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`profid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_proff
-- ----------------------------
INSERT INTO `tbl_proff` VALUES ('1', '1', 'B.Tech', 'IT', 'Project Head', 'India', 'Kochi');
INSERT INTO `tbl_proff` VALUES ('2', '2', 'B.Tech', 'IT', 'Software Developer', 'India', 'Trivandrum');

-- ----------------------------
-- Table structure for `tbl_review`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_review`;
CREATE TABLE `tbl_review` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `review` varchar(300) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_review
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_story`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE `tbl_story` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `bride` varchar(20) NOT NULL,
  `bgroom` varchar(20) NOT NULL,
  `wdate` date NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_story
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `pack` int(20) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `pstatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'Sneha', 'John', 'Sneha Villa', 'Ernakulam', 'Ernakulam', '682016', 'sneha@gmail.com', 'F', '9898767890', '2', '2021-05-21', 'true', 'uploads/girl1.jpg', 'paid');
INSERT INTO `tbl_user` VALUES ('2', 'Alan', 'Daniel', 'Paradise', 'Kochi', 'Ernakulam', '682016', 'alan@gmail.com', 'M', '8989786756', '2', '2021-05-21', 'true', 'uploads/use1.jpg', 'paid');
