﻿# Host: localhost  (Version: 5.5.53)
# Date: 2018-11-30 11:07:20
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "mz"
#

DROP TABLE IF EXISTS `mz`;
CREATE TABLE `mz` (
  `mz_id` int(11) NOT NULL AUTO_INCREMENT,
  `mzname` varchar(20) NOT NULL,
  PRIMARY KEY (`mz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

#
# Data for table "mz"
#

INSERT INTO `mz` VALUES (1,'汉族'),(2,'蒙古族'),(3,'回族'),(4,'藏族'),(5,'维吾尔族'),(6,'苗族'),(7,'彝族'),(8,'壮族'),(9,'布依族'),(10,'朝鲜族'),(11,'满族'),(12,'侗族'),(13,'瑶族'),(14,'白族'),(15,'土家族'),(16,'哈尼族'),(17,'哈萨克族'),(18,'傣族'),(19,'黎族'),(20,'傈僳族'),(21,'佤族'),(22,'畲族'),(23,'高山族'),(24,'拉祜族'),(25,'水族'),(26,'东乡族'),(27,'纳西族'),(28,'景颇族'),(29,'柯尔克孜族'),(30,'土族'),(31,'达斡尔族'),(32,'仫佬族'),(33,'羌族'),(34,' 布朗族'),(35,' 撒拉族'),(36,' 毛难族'),(37,' 仡佬族'),(38,' 锡伯族'),(39,' 阿昌族'),(40,' 普米族'),(41,' 塔吉克族'),(42,' 怒族'),(43,' 乌孜别克族'),(44,' 俄罗斯族'),(45,' 鄂温克族'),(46,' 崩龙族'),(47,' 保安族'),(48,' 裕固族'),(49,' 京族'),(50,' 塔塔尔族'),(51,' 独龙族'),(52,' 鄂伦春族'),(53,' 赫哲族'),(54,' 门巴族'),(55,' 珞巴族'),(56,' 基诺族'),(57,' 其他');