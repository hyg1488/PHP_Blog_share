/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - PHP_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`PHP_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `PHP_blog`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `regDate` datetime DEFAULT current_timestamp(),
  `updateDate` datetime DEFAULT NULL,
  `nickname` varchar(100) NOT NULL,
  `views` int(100) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `article` */

insert  into `article`(`id`,`title`,`contents`,`regDate`,`updateDate`,`nickname`,`views`) values 
(1,'My current problem, how to overcome it.','My current problem, how to overcome it.','2021-06-01 18:58:24',NULL,'Yungi',39),
(2,'Test 01 - test','test\r\ntest\r\ntest\r\ntest','2021-06-01 18:58:49','2021-06-02 14:18:42','admin',4),
(3,'Test 02 - test','test','2021-06-01 19:00:09',NULL,'admin',0),
(4,'Test 02 - test','test','2021-06-01 19:01:59',NULL,'admin',5),
(5,'Test 06-02 : test','Test 06-02 : test\r\ntest','2021-06-02 12:58:25',NULL,'Admin',2),
(6,'작성 테스트 합니다. ','작성\r\n테스트\r\n합니다.\r\n\r\n글을 작성합니다.\r\n\r\n테스트','2021-06-02 14:21:58',NULL,'TangE',0),
(7,'안녕 내이름은 톰이야!','내 이름은 톰이야!\r\n * 만나서 반가워 !\r\n * 반가워 !\r\n * 정말 반가워 !','2021-06-02 16:10:36',NULL,'Tom',10),
(8,'Test 01 - 테스트 글 작성','Test 01 - 테스트 글 작성\r\nTest 01 - 테스트 글 작성\r\nTest 01 - 테스트 글 작성\r\n','2021-06-02 21:13:33',NULL,'Admin',0),
(9,'글 작성 테스트 01 - TEST ','글 작성 테스트 01 - TEST \r\n글 작성 테스트 01 - TEST \r\n글 작성 테스트 01 - TEST \r\n글 작성 테스트 01 - TEST \r\n\r\n글 작성 테스트 01 - TEST 글 작성 테스트 01 - TEST 글 작성 테스트 01 - TEST \r\nvv\r\n글 작성 테스트 01 - TEST 글 작성 테스트 01 - TEST 글 작성 테스트 01 - TEST vvvvv','2021-06-02 21:14:32',NULL,'Admin',9),
(10,'무야호','무야호~~ 그만큼 신나신다는거지~','2021-06-02 23:27:11',NULL,'dandigh',3),
(11,'test','test\r\n\r\ntest * tset *','2021-06-03 09:43:59',NULL,'TEST',3);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `regDate` datetime DEFAULT current_timestamp(),
  `updateDate` datetime DEFAULT NULL,
  `nickname` varchar(100) NOT NULL,
  `views` int(100) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `post` */

insert  into `post`(`id`,`title`,`contents`,`regDate`,`updateDate`,`nickname`,`views`) values 
(1,'01. 포스트 테스트 - 글쓰기 테스트 TEST !','01. 포스트 테스트 - 글쓰기 테스트 TEST !\r\n\r\n* 테스트 : 글 쓰기 테스트 - 포스트 테스트 - 글쓰기 테스트 TEST !\r\n\r\n* 글 쓰기 테스트 !\r\n\r\n[ 01. 포스트 테스트 - 글쓰기 테스트 TEST ! 01. 포스트 테스트 - 글쓰기 테스트 TEST !01. 포스트 테스트 - 글쓰기 테스트 TEST !01. 포스트 테스트 - 글쓰기 테스트 TEST !01. 포스트 테스트 - 글쓰기 테스트 TEST !]','2021-06-02 21:24:22',NULL,'Admin',20);


/*Table structure for table `reply` */

DROP TABLE IF EXISTS `reply`;

CREATE TABLE `reply` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `regDate` datetime DEFAULT current_timestamp(),
  `upDateDate` datetime DEFAULT NULL,
  `relTypeCode` varchar(100) DEFAULT 'article',
  `relId` int(100) NOT NULL,
  `contents` text NOT NULL,
  `nickname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reply` */

insert  into `reply`(`id`,`regDate`,`upDateDate`,`relTypeCode`,`relId`,`contents`,`nickname`) values 
(1,'2021-06-02 22:20:45',NULL,'article',1,'Hi !','admin'),
(2,'2021-06-02 22:23:39',NULL,'article',1,'welcome !! ','Yungi'),
(3,'2021-06-02 23:10:17',NULL,'article',4,'TEST !','Tom'),
(4,'2021-06-02 23:10:48',NULL,'article',4,'Hello, TEST !','Tom'),
(5,'2021-06-02 23:11:01',NULL,'article',7,'테스트 ! 테스트 !','Tom'),
(6,'2021-06-02 23:11:08',NULL,'article',7,'테스트 합니다 !','Tom'),
(7,'2021-06-02 23:11:12',NULL,'article',7,'TEST !','Tom'),
(8,'2021-06-02 23:11:36',NULL,'article',2,'test','Tom'),
(9,'2021-06-02 23:14:19',NULL,'article',9,'테스트','Tom'),
(10,'2021-06-02 23:16:04',NULL,'post',1,'테스트!','Tom'),
(11,'2021-06-02 23:16:24',NULL,'article',7,'마지막 테스트 !','Tom'),
(12,'2021-06-02 23:21:42',NULL,'post',1,'테스트 !','Admin'),
(13,'2021-06-02 23:26:14',NULL,'article',1,'hi!','dandigh'),
(14,'2021-06-03 09:44:08',NULL,'article',11,'TEST','TEST');

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `num` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) NOT NULL,
  `regDate` datetime DEFAULT current_timestamp(),
  `updateDate` datetime DEFAULT NULL,
  `aboutMe` text DEFAULT NULL,
  `rank` varchar(100) DEFAULT 'user',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_info` */

insert  into `user_info`(`num`,`id`,`passwd`,`email`,`nickname`,`regDate`,`updateDate`,`aboutMe`,`rank`) values 
(1,'admin','1234','hyg1488@naver.com','Admin','2021-05-31 12:05:14','2021-06-07 10:04:01','hi hi ~!!! hello','admin'),
(2,'hyg1488','1234','hyg1488@naver.com','TEST','2021-06-02 12:59:34','2021-06-03 09:41:44','hi, hello !\r\nheloo ~ hello ~~~','user'),
(3,'yungi','1234','hyg1488@naver.com','Tom','2021-06-02 16:09:47',NULL,NULL,'user'),
(4,'test','1234','hsda@sasdas.com','dandigh','2021-06-02 23:24:43',NULL,NULL,'user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
