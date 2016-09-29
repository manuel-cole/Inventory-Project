/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.5.16 : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `inventory`;

USE `inventory`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `activity` */

DROP TABLE IF EXISTS `activity`;

CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `staffid` varchar(50) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `activity` */

/*Table structure for table `borrow` */

DROP TABLE IF EXISTS `borrow`;

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `requestdate` varchar(50) DEFAULT NULL,
  `returndate` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `itemid` (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

/*Data for the table `borrow` */

insert  into `borrow`(`id`,`itemid`,`purpose`,`requestdate`,`returndate`,`department`,`firstname`,`lastname`,`venue`,`date`) values (3,'Desktop - ds/01/ru/16','class','2016-06-13','2016-06-14','SIET','Stephen','Okwechime','LH202','2016-06-13 02:36:09'),(4,'mouse - ms/03/ru/16','class','2016-06-21','2016-07-01','SIET','Stephen','Okwechime','LH201','2016-06-13 03:47:51'),(32,'mouse - 19','cc','2016-06-13','2016-06-14','SIET','Stephen','Okwechime','LH201','2016-06-13 06:18:15'),(36,'Desktop - ds/01/ru/16','meme','','','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','LH201','2016-06-13 18:45:51'),(37,'Desktop - 21','meme','','','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','LH201','2016-06-13 18:45:51'),(53,'ms/20/ru/16 - mouse','1qqqqqqqqqqqqqq','','','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','<br /><b>Notice</b>:  Undefined variable: row in <','LH201','2016-06-13 23:10:04');

/*Table structure for table `borrowers` */

DROP TABLE IF EXISTS `borrowers`;

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `borrowers` */

insert  into `borrowers`(`id`,`firstname`,`lastname`,`title`,`id_number`,`level`,`department`) values (2,'Nat','Abanga','Student','12453','200 ','Telecommunication'),(3,'sumaiya ','hussain','Student','01280112','400','Info. System Science'),(4,'bernice','abban','Student','01550112','400','Computer Science'),(5,'Jeffrey Boma ','Kio','Student','01250133','100','Info. System Science'),(7,'bernice','abban','Lecturer','123','100','Info. System Science'),(8,'Mr. Chris','Quist','Lecturer','STF13','100','Info. System Science');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`type`) values (1,'Projector'),(2,'Mouse'),(3,'keyboard'),(4,'monitor'),(5,'desktop'),(6,'extension wire'),(7,'router'),(8,'modem'),(9,'externalharddrive'),(10,'extensionwire'),(11,'digitalcamera'),(12,'ups'),(13,'hardwareutensils'),(14,'printer'),(16,'scanner');

/*Table structure for table `dismissed` */

DROP TABLE IF EXISTS `dismissed`;

CREATE TABLE `dismissed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` varchar(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `arrival_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'AVAILABLE',
  `warranty` varchar(50) DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `purchase_cost` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemid` (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `dismissed` */

insert  into `dismissed`(`id`,`itemid`,`name`,`category`,`brand_name`,`serial_no`,`arrival_date`,`description`,`status`,`warranty`,`supplier`,`manufacturer`,`purchase_cost`) values (50,'','Array','Array',NULL,NULL,'0000-00-00 00:00:00',NULL,'AVAILABLE',NULL,NULL,'','');

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` varchar(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `brand_name` varchar(50) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `arrival_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'AVAILABLE',
  `warranty` varchar(50) DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `purchase_cost` varchar(20) DEFAULT NULL,
  `purpose` text,
  `requestdate` date DEFAULT NULL,
  `returndate` date DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemid` (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `item` */

insert  into `item`(`id`,`itemid`,`name`,`firstname`,`lastname`,`category`,`brand_name`,`serial_no`,`arrival_date`,`description`,`status`,`warranty`,`supplier`,`manufacturer`,`purchase_cost`,`purpose`,`requestdate`,`returndate`,`venue`,`item`) values (19,'ms/02/ru/16','mouse',NULL,NULL,'Mouse',NULL,'','2016-06-03 02:41:26','white mouse with pear shape','BORROWED','2 months','GHANA TECH CENTER','Dell','20',NULL,NULL,NULL,NULL,'ms/02/ru/16 - mouse'),(20,'ms/03/ru/16','mouse',NULL,NULL,'Mouse',NULL,'','2016-06-03 02:41:33','white mouse with pear shape','BORROWED','2 months','GHANA TECH CENTER','Dell','20',NULL,NULL,NULL,NULL,'ms/03/ru/16 - mouse'),(21,'ds/01/ru/16','Desktop',NULL,NULL,'desktop',NULL,'','2016-06-03 02:43:19','ash apple desktop','AVAILABLE','1 year','BEST BUY COMPUTERS','Apple','1,000',NULL,NULL,NULL,NULL,'ds/01/ru/16 - Desktop'),(22,'ds/02/ru/16','Desktop',NULL,NULL,'desktop',NULL,'','2016-06-03 02:44:07','black desktop','BORROWED','1 year','BEST BUY COMPUTERS','Toshiba','800',NULL,NULL,NULL,NULL,'ds/02/ru/16 - Desktop'),(23,'sc/01/ru/16','scanner',NULL,NULL,'scanner',NULL,'','2016-06-03 02:44:54','scanner','AVAILABLE','None','BEST BUY COMPUTERS','HP','800',NULL,NULL,NULL,NULL,'sc/01/ru/16 - scanner'),(25,'ms/20/ru/16','mouse',NULL,NULL,'Mouse',NULL,'','2016-06-03 14:34:58','dep','BORROWED','None','BEST BUY COMPUTERS','Apple','12',NULL,NULL,NULL,NULL,'ms/20/ru/16 - mouse'),(26,'ca/01/ru/16','cable',NULL,NULL,'extensionwire',NULL,'','2016-06-03 14:45:19','cfdfdf','BORROWED','9 months','GHANA TECH CENTER','Dell','11',NULL,NULL,NULL,NULL,'ca/01/ru/16 - cable'),(27,'pr/04/ru/16','printer',NULL,NULL,'printer',NULL,'','2016-06-10 01:01:03','white printer','BORROWED','2 months','GHANA TECH CENTER','Apple','100 ghs',NULL,NULL,NULL,NULL,'pr/04/ru/16 - printer'),(28,'ms/07/ru/16','mouse','Emmanuel','Gamor','mouse',NULL,NULL,'2016-06-13 18:46:24',NULL,'AVAILABLE',NULL,NULL,NULL,NULL,'pepe','2016-06-14','2016-06-15','GF001','ms/07/ru/16 - mouse');

/*Table structure for table `item_location` */

DROP TABLE IF EXISTS `item_location`;

CREATE TABLE `item_location` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `itemid` varchar(20) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `location` varchar(500) NOT NULL,
  `date_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `item_location` */

/*Table structure for table `lecturer` */

DROP TABLE IF EXISTS `lecturer`;

CREATE TABLE `lecturer` (
  `lecturer_id` varchar(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lecturer` */

insert  into `lecturer`(`lecturer_id`,`firstname`,`lastname`,`department`) values ('RU0553','Dilys','Dickson','SIET'),('RU0854','Chris','Quist','SIET');

/*Table structure for table `manufacturer` */

DROP TABLE IF EXISTS `manufacturer`;

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `manufacturer` */

insert  into `manufacturer`(`id`,`type`) values (1,'Apple'),(2,'Asus'),(3,'Canon'),(4,'Cisco'),(5,'Dell'),(6,'Microsoft'),(7,'Toshiba'),(8,'TP-Link'),(9,'Samsung'),(10,'Binatone'),(11,'Toshiba'),(12,'LG'),(13,'HP');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` varchar(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `level` int(50) DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`student_id`,`firstname`,`lastname`,`level`,`department`) values ('00710112','Stephen','Okwechime',400,'SIET');

/*Table structure for table `stuff` */

DROP TABLE IF EXISTS `stuff`;

CREATE TABLE `stuff` (
  `Stuff_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `faculty` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Stuff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stuff` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `arrival_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`name`,`address`,`phone_number`,`arrival_date`,`country`,`city`,`email`) values (3,'GHANA TECH CENTER','Tema Greater Accra','0303212323','2016-06-01 16:59:46','GHANA','Tema','info@ghanatechcenter.com'),(4,'BEST BUY COMPUTERS','T junction, kotobabi, Accra, Ghana','0244698456','2016-06-01 17:02:13','GHANA','Accra','bestcomputers@gmail.com'),(7,'BEST & CROMPTON ENG. LTD.','Trobu St. near Darold Hotel, New Achimota,Accra,Ghana','0302400096','2016-06-01 17:32:13','GHANA','Accra','best&cromp@yahoo.com');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `othernames` varchar(50) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`firstname`,`lastname`,`othernames`,`username`,`badge`,`sex`,`password`,`level_user`,`date`) values (1,'Ruffy','Rufaida',NULL,'admin',NULL,NULL,'7f6a9ce5c2da3a874c51869e6af2800d','admin',NULL),(2,'rufaida','adamu','hussaini','Ruffy',NULL,'FAS ','7f6a9ce5c2da3a874c51869e6af2800d','member','2016-05-31 22:45:12'),(3,'Danny','Kobe','','dan',NULL,'SIET','21232f297a57a5a743894a0e4a801fc3','member','2016-06-03 05:29:20'),(4,'Roggy','Mean','','Rog',NULL,'male','81dc9bdb52d04dc20036dbd8313ed055','member','2016-06-03 05:33:41');

/*Table structure for table `venue` */

DROP TABLE IF EXISTS `venue`;

CREATE TABLE `venue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `venue` */

insert  into `venue`(`id`,`name`) values (1,'LH201'),(2,'LH202'),(3,'LH203'),(4,'MPH300'),(5,'GF001'),(6,'GF002');

/*Table structure for table `warranty` */

DROP TABLE IF EXISTS `warranty`;

CREATE TABLE `warranty` (
  `warid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`warid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `warranty` */

insert  into `warranty`(`warid`,`type`) values (1,'None'),(2,'1 month'),(3,'2 months'),(4,'3 months'),(5,'4 months'),(6,'5 months'),(7,'6 months'),(8,'7 months'),(9,'8 months'),(10,'9 months'),(11,'10 months'),(12,'11 months'),(13,'1 year'),(14,'2 years'),(15,'3 years');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
