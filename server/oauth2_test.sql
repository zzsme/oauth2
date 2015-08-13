/*
Navicat MySQL Data Transfer

Source Server         : 192.168.146.185_3306
Source Server Version : 50173
Source Host           : 192.168.146.185:3306
Source Database       : oauth2_test

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-08-12 16:40:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `auth_codes`;
CREATE TABLE `auth_codes` (
  `code` varchar(40) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `redirect_uri` varchar(200) NOT NULL,
  `expires` int(11) NOT NULL,
  `scope` varchar(250) DEFAULT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_codes
-- ----------------------------
INSERT INTO `auth_codes` VALUES ('08c1388ce9546eff51514db70bef6995', '1000000012', 'http://client.oauth.org/auth.php', '1439368789', null, '1');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_secret` varchar(32) NOT NULL,
  `redirect_uri` varchar(200) NOT NULL,
  `appname` varchar(30) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000000016 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('1000000012', 'doeLO2vJOlnwhA4Cv08YAUoxzJRtWisK', 'client.oauth.org', 'oauth_1');

-- ----------------------------
-- Table structure for tokens
-- ----------------------------
DROP TABLE IF EXISTS `tokens`;
CREATE TABLE `tokens` (
  `oauth_token` varchar(40) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `expires` int(11) NOT NULL,
  `scope` varchar(200) DEFAULT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`oauth_token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tokens
-- ----------------------------
INSERT INTO `tokens` VALUES ('cc3ffa69d89d249eed44aa55766150de', '1000000012', '1439372361', null, '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'user1', '123456', 'user1@test.com', '2147483647', 'http://static.test.com/user1.jpg');
INSERT INTO `user` VALUES ('2', 'user2', '123456', 'user2@test.com', '2147483647', 'http://static.test.com/user2.jpg');
