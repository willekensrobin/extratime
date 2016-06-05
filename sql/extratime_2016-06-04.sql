# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.38)
# Database: extratime
# Generation Time: 2016-06-04 12:45:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table db_games
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_games`;

CREATE TABLE `db_games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hometeam` varchar(255) NOT NULL DEFAULT '',
  `visitors` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `picturetwo` varchar(255) NOT NULL DEFAULT '',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `db_games` WRITE;
/*!40000 ALTER TABLE `db_games` DISABLE KEYS */;

INSERT INTO `db_games` (`id`, `hometeam`, `visitors`, `picture`, `picturetwo`, `date`)
VALUES
	(2,'KV Mechelen','Standard','kv.jpeg','stand.png',NULL),
	(3,'Gent','STVV','gent.png','stvv.png',NULL),
	(4,'Genk','Lokeren','genk.png','lok.png',NULL),
	(5,'Anderlecht','Club Brugge','and.png','download.png',NULL);

/*!40000 ALTER TABLE `db_games` ENABLE KEYS */;
UNLOCK TABLES;


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
  `type` tinyint(1) NOT NULL,
  `code` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `db_user` WRITE;
/*!40000 ALTER TABLE `db_user` DISABLE KEYS */;

INSERT INTO `db_user` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `picture`, `type`, `code`)
VALUES
	(1,'Robin','Robin','Willekens','willekensrobin@hotmail.com','$2y$10$RjscDq.OIKjeOOMdmf7dkedhJvTN8zs.HeTgOPfWkxksM86Nxblh6',NULL,0,0),
	(4,'Robinn','Robinn','Willekenss','willekenssrobinn@hotmail.com','$2y$10$PMePULxag6PJhN8TT9qi.eQsl3D7IlDchTrQCZSjKskrc3unsZmym',NULL,1,111),
	(5,'Glen','Glen','Gledhof','glen@glen.be','$2y$10$yBxy1xE.Ewk1pK5XEA4l1.B7wZMAvys7kXJ/MQg4hektaCwDrAepS',NULL,0,0),
	(6,'Robinnn','Robin','Willekensss','enlfzej@nljefqfn.com','$2y$10$D7dQN95YHvCro1f/Sz1AuOwZci6kbx9JRVP9h7.wvBHdmflSf8M3q',NULL,1,111);

/*!40000 ALTER TABLE `db_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_votes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_votes`;

CREATE TABLE `db_votes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `gameid` int(11) DEFAULT NULL,
  `red1` int(11) DEFAULT NULL,
  `yellow1` int(11) DEFAULT NULL,
  `red2` int(11) DEFAULT NULL,
  `yellow2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `db_votes` WRITE;
/*!40000 ALTER TABLE `db_votes` DISABLE KEYS */;

INSERT INTO `db_votes` (`id`, `userid`, `gameid`, `red1`, `yellow1`, `red2`, `yellow2`)
VALUES
	(1,NULL,NULL,0,0,0,0),
	(2,NULL,NULL,0,0,1,0),
	(3,NULL,NULL,0,0,1,0),
	(4,NULL,NULL,0,0,1,0),
	(5,NULL,NULL,1,0,0,0);

/*!40000 ALTER TABLE `db_votes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
