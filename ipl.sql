/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ipl

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-02-10 09:01:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) DEFAULT NULL,
  `team_city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'team a', 'a');
INSERT INTO `team` VALUES ('2', 'team b', 'b');
INSERT INTO `team` VALUES ('3', 'team c', 'c');
INSERT INTO `team` VALUES ('4', 'team d', 'd');
INSERT INTO `team` VALUES ('5', 'team e', 'e');
INSERT INTO `team` VALUES ('6', 'team f', 'f');
INSERT INTO `team` VALUES ('7', 'team g', 'g');
INSERT INTO `team` VALUES ('8', 'team h', 'h');
