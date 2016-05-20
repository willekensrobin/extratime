# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.38)
# Database: extratime
# Generation Time: 2016-05-20 09:06:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table db_game
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_game`;

CREATE TABLE `db_game` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visitors` varchar(255) NOT NULL DEFAULT '',
  `hometeam` varchar(255) NOT NULL DEFAULT '',
  `picture` longblob NOT NULL,
  `picturetwo` longblob NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table db_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_user`;

CREATE TABLE `db_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `picture` longblob,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `db_user` WRITE;
/*!40000 ALTER TABLE `db_user` DISABLE KEYS */;

INSERT INTO `db_user` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `picture`, `type`)
VALUES
	(1,'Robin','','','willekensrobin@hotmail.com','$2y$10$ZvbbBDm1r7qP5ZKdbHsyvu.u/.hddHVrLR9LESTCXz0tAJgu4TUNm',NULL,NULL),
	(2,'Bobin','','','rillekens@hotmail.be','$2y$10$yVFd2Z/42JrG0hK0CLQ4r.47sGHYqzBHGrdjrcEtxBRT/J85d813O',NULL,NULL),
	(3,'eeee','','','willekens@hotmal.com','$2y$10$ljGb6N7M/9uNPXKqkBHVE.LHTdcfoMBd2rG1QV/1177re6DaVTw5u',NULL,NULL);

/*!40000 ALTER TABLE `db_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
