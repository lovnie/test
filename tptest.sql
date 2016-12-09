/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tptest

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-12-09 17:57:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_goods
-- ----------------------------
DROP TABLE IF EXISTS `tp_goods`;
CREATE TABLE `tp_goods` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(45) NOT NULL COMMENT '商品名称',
  `logo` varchar(150) NOT NULL DEFAULT '' COMMENT '商品logo',
  `sm_logo` varchar(150) NOT NULL DEFAULT '' COMMENT '商品缩略图logo',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `goods_desc` longtext COMMENT '商品描述',
  `is_on_sale` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否上架：1：上架，0：下架',
  `is_delete` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经删除，1：已经删除 0：未删除',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `price` (`price`),
  KEY `is_on_sale` (`is_on_sale`),
  KEY `is_delete` (`is_delete`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_goods
-- ----------------------------
INSERT INTO `tp_goods` VALUES ('1', '测试商品11', 'Goods/2016-12-09/584a7e0bd8e11.jpg', 'Goods/2016-12-09/thumb_584a7e0bd8e11.jpg', '20.90', '商品11111', '1', '0', '1481276939');
INSERT INTO `tp_goods` VALUES ('2', '测试商品222', 'Goods/2016-12-09/584a7eff8bb73.jpg', 'Goods/2016-12-09/thumb_584a7eff8bb73.jpg', '239.00', '111432w35', '1', '0', '1481277183');
INSERT INTO `tp_goods` VALUES ('3', '测试商品333', 'Goods/2016-12-09/584a7f1815e4d.jpg', 'Goods/2016-12-09/thumb_584a7f1815e4d.jpg', '33.00', '3252', '1', '0', '1481277208');
INSERT INTO `tp_goods` VALUES ('4', 'cess44', 'Goods/2016-12-09/584a7f3ba0d17.jpg', 'Goods/2016-12-09/thumb_584a7f3ba0d17.jpg', '34.00', '23252', '1', '0', '1481277243');
INSERT INTO `tp_goods` VALUES ('5', 'tetet555测试', 'Goods/2016-12-09/584a7f4d0d99a.jpg', 'Goods/2016-12-09/thumb_584a7f4d0d99a.jpg', '23.00', '325', '1', '0', '1481277261');
INSERT INTO `tp_goods` VALUES ('6', '测试商品66', 'Goods/2016-12-09/584a7fb2b835b.jpg', 'Goods/2016-12-09/thumb_584a7fb2b835b.jpg', '12.00', '1215215', '1', '0', '1481277362');
