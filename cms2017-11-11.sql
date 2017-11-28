-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: yitian_tpcms
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cms_files`
--

DROP TABLE IF EXISTS `cms_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文件ID',
  `name` varchar(100) NOT NULL COMMENT '文件名',
  `path` varchar(100) NOT NULL COMMENT '文件路径',
  `updata_time` datetime NOT NULL COMMENT '商船时间',
  `author` varchar(64) NOT NULL COMMENT '上传作者名',
  `type` varchar(32) NOT NULL COMMENT '文件类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_files`
--

LOCK TABLES `cms_files` WRITE;
/*!40000 ALTER TABLE `cms_files` DISABLE KEYS */;
INSERT INTO `cms_files` VALUES (1,'59f99b4794e1f.jpg','/upload/2017/11/01/59f99b4794e1f.jpg','2017-11-01 18:00:39','ceshi','image/jpeg'),(2,'59f9dbe54371d.png','/upload/2017/11/01/59f9dbe54371d.png','2017-11-01 22:36:21','ceshi','image/png'),(3,'59f9dc86a4ced.jpg','/upload/2017/11/01/59f9dc86a4ced.jpg','2017-11-01 22:39:02','ceshi','image/jpeg'),(4,'59f9dd2c70066.png','/upload/2017/11/01/59f9dd2c70066.png','2017-11-01 22:41:48','ceshi','image/png'),(5,'59f9dd90d77df.png','/upload/2017/11/01/59f9dd90d77df.png','2017-11-01 22:43:28','ceshi','image/png'),(6,'59f9dd9c8336f.png','/upload/2017/11/01/59f9dd9c8336f.png','2017-11-01 22:43:40','ceshi','image/png'),(7,'59f9de9256000.png','/upload/2017/11/01/59f9de9256000.png','2017-11-01 22:47:46','ceshi','image/png'),(8,'59f9df0770a90.png','/upload/2017/11/01/59f9df0770a90.png','2017-11-01 22:49:43','ceshi','image/png'),(9,'59fab550c4b03.png','/upload/2017/11/02/59fab550c4b03.png','2017-11-02 14:04:00','ceshi','image/png'),(10,'59fab860edb48.png','/upload/2017/11/02/59fab860edb48.png','2017-11-02 14:17:04','ceshi','image/png'),(11,'59fbd56fcb0e5.png','/upload/2017/11/03/59fbd56fcb0e5.png','2017-11-03 10:33:19','ceshi','image/png'),(12,'59fc905e0c874.png','/upload/2017/11/03/59fc905e0c874.png','2017-11-03 23:50:54','ceshi','image/png'),(13,'59fc91241a71c.jpg','/upload/2017/11/03/59fc91241a71c.jpg','2017-11-03 23:54:12','ceshi','image/jpeg'),(14,'59fedc4e8217d.jpg','/upload/2017/11/05/59fedc4e8217d.jpg','2017-11-05 17:39:26','ceshi','image/jpeg');
/*!40000 ALTER TABLE `cms_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_leavingmsg`
--

DROP TABLE IF EXISTS `cms_leavingmsg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_leavingmsg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言id',
  `name` varchar(64) NOT NULL COMMENT '留言人姓名',
  `email` varchar(64) NOT NULL COMMENT '留言人的email',
  `ip` varchar(32) NOT NULL COMMENT '留言人ip地址',
  `title` varchar(100) NOT NULL COMMENT '留言主题',
  `content` varchar(1000) NOT NULL COMMENT '留言内容',
  `answer` varchar(1000) DEFAULT NULL COMMENT '回复',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `answer_time` datetime DEFAULT NULL COMMENT '回复时间',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '留言状态（0待答复，1已答复，-1驳回）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_leavingmsg`
--

LOCK TABLES `cms_leavingmsg` WRITE;
/*!40000 ALTER TABLE `cms_leavingmsg` DISABLE KEYS */;
INSERT INTO `cms_leavingmsg` VALUES (2,'asda12','1203290283@qq.com','::1','dfsdfsdf','sdfdfgdfgdasd','123asdasdasdsdf            123123123','2017-11-06 15:26:09','2017-11-06 16:57:15',1),(3,'asda12','1203290283@qq.com','::1','dfsdfsdf','sdfdfgdfgdasd','caonimacanimacaonimacacacacacacacacacacasdkjdfsdfmgksdnjfndfjgnjsdfngjdfngjdfnjgnjdfngjdfnjgndfjngjdfnkgmdlkmlkgmfghlkmjkfnghjnsdnfjsdnfhjsndkfmsdjknfjsdnkfmsdlm,flsdlfmsldm,;flms;dlkfm;lsdmfl,sdlf,;sld,flmkgndfmg','2017-11-06 23:02:31','2017-11-06 23:06:19',1);
/*!40000 ALTER TABLE `cms_leavingmsg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_menu`
--

DROP TABLE IF EXISTS `cms_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_menu` (
  `menu_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(64) NOT NULL DEFAULT '' COMMENT '菜单名',
  `menu_descript` varchar(128) DEFAULT '' COMMENT '菜单描述',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '菜单状态',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_menu`
--

LOCK TABLES `cms_menu` WRITE;
/*!40000 ALTER TABLE `cms_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_news`
--

DROP TABLE IF EXISTS `cms_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_news` (
  `news_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `menu_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '菜单id',
  `title` varchar(80) NOT NULL DEFAULT '' COMMENT '文章标题',
  `small_title` varchar(30) DEFAULT '' COMMENT '文章小标题',
  `title_font_color` varchar(250) DEFAULT NULL COMMENT '标题颜色',
  `thumb` varchar(100) DEFAULT '' COMMENT '封面图片',
  `keywords` char(40) DEFAULT '' COMMENT '关键字',
  `description` varchar(250) NOT NULL COMMENT '文章描述',
  `posids` varchar(250) NOT NULL DEFAULT '',
  `listorder` tinyint(3) unsigned DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态',
  `copyfrom` varchar(250) DEFAULT NULL COMMENT '来源',
  `username` char(20) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime DEFAULT '0000-00-00 00:00:00',
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`),
  KEY `status` (`status`,`listorder`,`news_id`),
  KEY `listorder` (`menu_id`,`status`,`listorder`,`news_id`),
  KEY `catid` (`menu_id`,`status`,`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_news`
--

LOCK TABLES `cms_news` WRITE;
/*!40000 ALTER TABLE `cms_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_news_content`
--

DROP TABLE IF EXISTS `cms_news_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_news_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `news_id` mediumint(8) unsigned NOT NULL,
  `content` mediumtext NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_news_content`
--

LOCK TABLES `cms_news_content` WRITE;
/*!40000 ALTER TABLE `cms_news_content` DISABLE KEYS */;
INSERT INTO `cms_news_content` VALUES (20,33,'&lt;p&gt;测试123123&lt;br&gt;&lt;/p&gt;','2017-07-31 00:32:06','2017-07-31 01:24:35',1),(23,36,'&lt;p&gt;sdfsdfsdfsdfsfsfdfsfs&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;touxiang.png&quot; src=&quot;http://localhost/yitian/upload/2017/10/30/59f6908332db9.png&quot; data-image-size=&quot;799,800&quot;&gt;&lt;br&gt;&lt;/p&gt;','2017-10-30 10:37:59','2017-10-30 10:37:59',1);
/*!40000 ALTER TABLE `cms_news_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_position`
--

DROP TABLE IF EXISTS `cms_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_position` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` char(100) DEFAULT NULL,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_position`
--

LOCK TABLES `cms_position` WRITE;
/*!40000 ALTER TABLE `cms_position` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_position_content`
--

DROP TABLE IF EXISTS `cms_position_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_position_content` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` int(5) unsigned NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) DEFAULT '',
  `url` varchar(100) DEFAULT NULL,
  `news_id` mediumint(8) unsigned DEFAULT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_position_content`
--

LOCK TABLES `cms_position_content` WRITE;
/*!40000 ALTER TABLE `cms_position_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_position_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_rule`
--

DROP TABLE IF EXISTS `cms_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_rule` (
  `status` smallint(8) NOT NULL DEFAULT '1' COMMENT '权限状态',
  `rule_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `rule_name` varchar(32) NOT NULL DEFAULT '' COMMENT '权限名',
  `rule_descript` varchar(100) DEFAULT '' COMMENT '权限描述',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_rule`
--

LOCK TABLES `cms_rule` WRITE;
/*!40000 ALTER TABLE `cms_rule` DISABLE KEYS */;
INSERT INTO `cms_rule` VALUES (1,1,'用户管理','用于管理用户的权限','2017-07-04 20:51:03','2017-07-04 20:51:09'),(1,2,'测试','测试下','2017-07-21 11:50:59',NULL),(1,3,'测试1','测试下','2017-07-29 22:47:41','2017-07-31 15:09:43'),(-1,4,'ceshi','ceshi123','2017-07-31 11:36:15','2017-07-31 15:09:36');
/*!40000 ALTER TABLE `cms_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_user`
--

DROP TABLE IF EXISTS `cms_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_user` (
  `user_id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户信息id',
  `realname` varchar(16) DEFAULT '' COMMENT '用户真实姓名',
  `head_portrait` varchar(64) DEFAULT '' COMMENT '头像URL',
  `jurisdiction` varchar(32) NOT NULL COMMENT '权限',
  `qq_number` varchar(32) DEFAULT '' COMMENT 'qq号码',
  `phone_number` varchar(32) DEFAULT '' COMMENT '电话号码',
  `email` varchar(64) DEFAULT '' COMMENT 'email',
  `lastlogin_time` datetime DEFAULT NULL COMMENT '上次登陆时间',
  `lastlogin_ip` varchar(64) DEFAULT NULL COMMENT '上次登陆ip地址',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  `login_name` varchar(64) NOT NULL COMMENT '帐号',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `pwdkey` varchar(32) NOT NULL COMMENT '密钥',
  `status` smallint(5) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_user`
--

LOCK TABLES `cms_user` WRITE;
/*!40000 ALTER TABLE `cms_user` DISABLE KEYS */;
INSERT INTO `cms_user` VALUES (11,'ceshi','/upload/2017/11/01/59f9df0770a90.png','1,3','123123123','12312312312','ceshi@qq.com','2017-11-11 19:42:16','::1','2017-11-11 19:36:46','ceshi','cc17c30cd111c7215fc8f51f8790e0e1','123',1),(12,'周叶飞','','1','123123123123','123123123123123','1312@qq.com',NULL,NULL,'2017-11-05 15:17:39','admin','21232f297a57a5a743894a0e4a801fc3','212',-1),(13,'123','','1','123','123','1203290283@qq.com',NULL,NULL,'2017-11-01 17:44:33','123','202cb962ac59075b964b07152d234b70','202',-1),(15,'qweqwe','/upload/2017/11/01/59f996e6067fe.jpg','1','12312','123123','123456@qq.com',NULL,NULL,'2017-11-11 19:36:37','123123','4297f44b13955235245b2497399d7a93','429',-1);
/*!40000 ALTER TABLE `cms_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_usergroud`
--

DROP TABLE IF EXISTS `cms_usergroud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_usergroud` (
  `groud_id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组Id',
  `groud_name` varchar(64) NOT NULL DEFAULT '' COMMENT '用户组名',
  `discript` varchar(100) NOT NULL DEFAULT '' COMMENT '描述',
  `rule` varchar(64) NOT NULL DEFAULT '' COMMENT '权限',
  PRIMARY KEY (`groud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_usergroud`
--

LOCK TABLES `cms_usergroud` WRITE;
/*!40000 ALTER TABLE `cms_usergroud` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_usergroud` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-11 19:43:03
