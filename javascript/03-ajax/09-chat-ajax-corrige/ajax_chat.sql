-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: ajax_chat
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `moment` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (6,'Ben','Yo','2017-02-24 16:05:37'),(7,'Lior','Bonjour à tous !','2017-02-24 16:05:42'),(8,'Liinaa','Hello','2017-02-24 16:05:48'),(9,'Liinaa','Hello','2017-02-24 16:05:50'),(10,'Kelly','Coucou !','2017-02-24 16:06:13'),(11,'Damien','Bonjour bonjour','2017-02-24 16:06:14'),(12,'Gael','I\'m still alive :)','2017-02-24 16:06:48'),(13,'chris','Un bon WE','2017-02-24 16:06:52'),(14,'marjo','hello','2017-02-24 16:07:09'),(15,'Lior','Kikoo !','2017-02-24 16:07:11'),(16,'Lior','Ca va bien tout le monde ?','2017-02-24 16:07:17'),(17,'Pier','Salut !','2017-02-24 16:07:17'),(18,'jo','il est pourri ce chat !','2017-02-24 16:07:24'),(19,'domi','mais kessss que c\'est?','2017-02-24 16:08:03'),(20,'Lior','kikoo','2017-02-24 16:08:06'),(21,'Lior','Ca suffit d\'être trop fort.','2017-02-24 16:10:00'),(22,'Lior','Trop c\'est trop.','2017-02-24 16:10:03'),(23,'Lior','je suis nul en javascript','2017-02-24 16:10:11'),(24,'Tom','yo poto','2017-02-24 16:10:12'),(25,'','ghfg','2017-02-24 16:10:19'),(26,'Damien','c\'est pas faux','2017-02-24 16:10:26'),(27,'Gael','Still writing some crasy things !!!!','2017-02-24 16:10:31'),(28,'pseudo','On tente','2017-02-24 16:10:31'),(29,'Pier','','2017-02-24 16:10:35'),(30,'Damien','On en as gros','2017-02-24 16:10:40'),(31,'jo','je suis zoophile','2017-02-24 16:10:40'),(32,'Pier','Test 1','2017-02-24 16:10:44'),(33,'domi','bon alors il s\'passe quoi??','2017-02-24 16:10:44'),(34,'Lior','On en A .. pas AS.','2017-02-24 16:10:47'),(35,'Pier','Test 2','2017-02-24 16:10:48'),(36,'','','2017-02-24 16:10:48'),(37,'pseudo','mais t\'as le droit de te taire si tu veux Pier...','2017-02-24 16:10:49'),(38,'','','2017-02-24 16:10:50'),(39,'Tom','c pas faux','2017-02-24 16:10:50'),(40,'Kelly','C\'est que tu as pas compris Damien?','2017-02-24 16:10:50'),(41,'mamisoa','c\'est il est fort  ','2017-02-24 16:11:04'),(42,'jo',' $statement = $db->prepare(\'INSERT INTO messages SET author = :author, content = :message, moment = NOW()\');','2017-02-24 16:11:13'),(43,'jo','','2017-02-24 16:11:13'),(44,'Liinaa','en tout cas c\'est cool !!','2017-02-24 16:11:17'),(45,'Gael','Ux scrowldown bar :)','2017-02-24 16:11:18');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-24 16:12:12
