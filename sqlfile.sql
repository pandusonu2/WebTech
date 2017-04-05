-- MySQL dump 10.16  Distrib 10.1.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	10.1.22-MariaDB

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
-- Table structure for table `db`
--

DROP TABLE IF EXISTS `db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db` (
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenInsti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenPer` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenYear` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twelveInsti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twelvePer` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twelveYear` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btechInsti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btechPer` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btechYear` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtechInsti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtechPer` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtechYear` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phdInsti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phdPer` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phdYear` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tors` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user`,`tors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db`
--

LOCK TABLES `db` WRITE;
/*!40000 ALTER TABLE `db` DISABLE KEYS */;
INSERT INTO `db` VALUES ('n','pass','f','l','Male','IT','40','emi@xyz.com','addr','12','12','12','','','','','','','','','',NULL,NULL,NULL,'0','1',NULL),('qwe','pass','qwe','qwe','Male','IT','12','xyz@email.com','addr','','','','','','','','','','','','',NULL,NULL,NULL,'0','1',NULL),('root','password',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','1','1',NULL),('student','password',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL),('tu','pass','fu','lu','Male','IT',NULL,'xyz@email.com','addr','p','pp','ppp','','','','','','','','','','','','','1','0',NULL),('user','','fname','lname','Male','IT','','','addr\r\n','','','tenY','twelveInsti','twe','twel','','bte','btec','mtechInsti','mte','mtec',NULL,NULL,NULL,'',NULL,NULL),('userxyz','pass','f','l','Male','IT','12','xyz@x.co','addr','','','','','','','','','','','','',NULL,NULL,NULL,'0','0',NULL),('Vamsi','pass','FF','LL','Male','IT','40','email@xyz.com','addr','1','100','111','12','122','1222','13','133','1333','14','144','1444','','','','0','1','1996-02-09');
/*!40000 ALTER TABLE `db` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-05  8:44:42
