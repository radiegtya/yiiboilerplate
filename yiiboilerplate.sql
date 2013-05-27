/*
SQLyog Enterprise - MySQL GUI v7.12 
MySQL - 5.5.8 : Database - yiiboilerplate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`yiiboilerplate` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `yiiboilerplate`;

/*Table structure for table `group` */

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `group` */

insert  into `group`(`id`,`name`) values (1,'developer'),(2,'admin'),(3,'@');

/*Table structure for table `group_auth` */

DROP TABLE IF EXISTS `group_auth`;

CREATE TABLE `group_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(256) NOT NULL,
  `action` varchar(256) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_group_auth_group` (`group_id`),
  CONSTRAINT `FK_group_auth_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

/*Data for the table `group_auth` */

insert  into `group_auth`(`id`,`className`,`action`,`group_id`) values (1,'user','index,view,create,update,admin,delete',1),(2,'user','index,view,admin',2),(3,'group','index,view,admin',2),(4,'group','index,view,create,update,admin,delete	',1),(5,'groupauth','index,view,admin',2),(6,'groupauth','index,view,create,update,admin,delete',1),(80,'profile','index,view,create,update,admin,delete',1);

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `email` varchar(12) NOT NULL,
  `cursed` enum('yes','no') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`id`,`name`,`image`,`email`,`cursed`) values (1,'maho','','super@maho.c','yes'),(2,'kekek','','radiegtya@ya',''),(3,'gogogo','','pop','yes'),(4,'asdsad','','dsa','yes'),(5,'asda','','ra','yes'),(6,'asd','','asd',''),(10,'ad','','asd','yes');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_group` (`group_id`),
  CONSTRAINT `FK_user_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`last_login_time`,`group_id`) values (1,'admin','b6124939f16adaeaaa44350d7e7d0634',NULL,1),(2,'enik','e26626dca41a52ba69bd53c590a12246',NULL,2),(3,'kasir','c7911af3adbd12a035b289556d96470a',NULL,3),(4,'heri@ultravelman.com','4dd39f49f898c062283963c187532af8',NULL,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
