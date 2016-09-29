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

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemId` varchar(20) DEFAULT NULL,
  `itemName` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `item` */

insert  into `item`(`id`,`itemId`,`itemName`,`description`) values (4,'11','projector','the second projector'),(5,'47','Marker','We need a box of marker to satisfy our learning needs. Please kindly provide make provition to our request as we can move on with lectures successfully without it. Thank you.');

/*Table structure for table `lecturer` */

DROP TABLE IF EXISTS `lecturer`;

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lecturer` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `level` int(50) DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

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

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `idNumber` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(200) NOT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(150) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`firstname`,`lastname`,`idNumber`,`phoneNumber`,`badge`,`sex`,`password`,`level_user`,`date`,`email`,`department`,`faculty`) values (1,'Ruffy','Rufaida',NULL,'admin',NULL,NULL,'7a1eabc3deb7fd02ceb1e16eafc41073','admin',NULL,NULL,NULL,NULL),(2,'Emmanuel','Gamor',NULL,'0277131592',NULL,NULL,'','Staff','2016-05-22 14:26:50','gamoremmanuel94@gmail.com','Staff','Staff'),(3,'Emmanuel','Gamor',NULL,'0277131592',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99','Staff','2016-05-22 14:34:27','gamoremmanuel94@gmail.com','Staff','Staff'),(4,'Emmanuel','Gamor',NULL,'0277131592',NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99','Staff','2016-05-22 14:34:40','gamoremmanuel94@gmail.com','Staff','Staff'),(6,'Emmanuel','Gamor','','',NULL,NULL,'','Lecturer','2016-05-27 13:35:37',NULL,'',''),(7,'Emmanuel','Gamor','145236698','',NULL,NULL,'','Lecturer','2016-05-27 13:38:14',NULL,'Computer Science','FAS '),(8,'Emmanuel','Gamor','12366321','','200',NULL,'','Student','2016-05-27 14:10:24',NULL,'Info. System Science','SIET');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
