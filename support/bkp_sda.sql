-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: sida
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `user_id` int(11) unsigned DEFAULT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cep` int(11) NOT NULL DEFAULT '8',
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `complement` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addr_user` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (2,52,8,'paraguai','2041','casa 1',NULL),(3,53,8,'emilio daroz ','107','casa 1',NULL),(4,54,8,'rua lavinia moreira da silva','145','casa 1',NULL),(8,58,8,'rua das violetas','330','casa 1',NULL),(9,59,8,'francisco carlos ','105','casa 1',NULL),(10,60,8,'torino','95','casa 1',NULL),(11,61,8,'rua erotidas','64','casa 1',NULL),(12,62,8,'r. orquideas','169','casa 1',NULL),(13,63,8,'rua joffre motta','44','casa 1',NULL),(14,64,8,'rua piauí','17','casa 1',NULL),(15,65,8,'fernandes marques','1229','casa 1',NULL),(16,66,8,'av. beta','07','casa 1',NULL),(17,67,8,'abagiba','674','casa 1',NULL),(18,68,8,'gumercindo araujo','302','casa 1',NULL),(19,69,8,'rua 01, quadra 35','35b','casa 1',NULL),(20,70,8,'rua piauí','23d','casa 1',NULL),(21,71,8,'rua leopoldina araãºjo','380','casa 1',NULL),(22,72,8,'rua conceiã§ã£o','101','casa 1',NULL),(23,73,8,'rua benedetto bonfilgi','755','casa 1',NULL),(24,74,8,'rua sã£o francisco','17','casa 1',NULL),(25,75,8,'rua dona zulmira','479','casa 1',NULL),(26,76,8,'rua mampituba','740','casa 1',NULL),(27,77,8,'dezeseis','151','casa 1',NULL),(28,78,8,'rua dos goitacazes','375','casa 1',NULL),(29,79,8,'av lucio jose de meneses','930','casa 1',NULL),(30,80,8,'caetano','3457','casa 1',NULL),(31,81,8,'um nova ','335','casa 1',NULL),(32,82,8,'sres area especial','19','casa 1',NULL),(33,83,8,'islandia','99','casa 1',NULL),(34,84,8,'independência','700','casa 1',NULL),(35,85,8,'sebastiã£o thomaz de oliveira','25','casa 1',NULL),(36,86,8,'nogueira','185','casa 1',NULL),(37,87,8,'tv londrina','12','casa 1',NULL),(38,88,8,'teofilo otoni','222','casa 1',NULL),(39,89,8,'joã£o rasmussen','244','casa 1',NULL),(40,90,8,'travessa elizeu araãºjo','46','casa 1',NULL),(41,91,8,'av. dr. joão pessoa','185','casa 1',NULL),(42,92,8,'travessa brandão','4','casa 1',NULL),(43,93,8,'coqueiros','SN','casa 1',NULL),(44,94,8,'estrada m boi mirim','820','casa 1',NULL),(45,95,8,'travessa dos comerciarios ','5','casa 1',NULL),(46,96,8,'dos jacarandas','30','casa 1',NULL),(47,97,8,'dona ermelinda pereira','413','casa 1',NULL),(48,98,8,'rua projetada 02','742','casa 1',NULL),(49,99,8,'samambaia','96','casa 1',NULL),(50,100,8,'rua dos gerã¢nios','110','casa 1',NULL);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disponibilityes`
--

DROP TABLE IF EXISTS `disponibilityes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disponibilityes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `hour_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `hour_id` (`hour_id`),
  CONSTRAINT `fk_hour_id` FOREIGN KEY (`hour_id`) REFERENCES `hours` (`id`),
  CONSTRAINT `fk_teache` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='Table of disponibilityes in hours';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disponibilityes`
--

LOCK TABLES `disponibilityes` WRITE;
/*!40000 ALTER TABLE `disponibilityes` DISABLE KEYS */;
INSERT INTO `disponibilityes` VALUES (1,1,1,2,'2023-05-16 08:15:00','2023-05-16 02:36:25'),(2,1,1,4,'2023-05-16 02:36:42','2023-05-16 02:36:41'),(3,2,1,3,'2023-05-16 02:37:04','2023-05-16 02:36:46'),(4,2,1,8,'2023-05-16 02:36:51','2023-05-16 02:36:50'),(5,3,1,5,'2023-05-16 02:37:08','2023-05-16 02:36:58'),(6,3,1,1,'2023-05-16 02:37:11','2023-05-16 02:37:01'),(7,1,1,1,NULL,NULL),(8,1,1,3,NULL,NULL),(9,1,1,5,NULL,NULL),(10,1,1,6,NULL,NULL),(11,1,1,7,NULL,NULL),(12,1,1,8,NULL,NULL),(13,1,1,9,'2023-05-16 06:11:28','2023-05-16 06:11:28'),(14,1,1,10,'2023-05-16 03:12:05','2023-05-16 06:11:36'),(15,1,1,11,'2023-05-16 06:12:18','2023-05-16 06:12:17');
/*!40000 ALTER TABLE `disponibilityes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hours`
--

DROP TABLE IF EXISTS `hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `hour_initial` time DEFAULT NULL,
  `hour_final` time DEFAULT NULL,
  `week` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hours`
--

LOCK TABLES `hours` WRITE;
/*!40000 ALTER TABLE `hours` DISABLE KEYS */;
INSERT INTO `hours` VALUES (1,'Aula1','vespertino','07:00:00','07:50:00','segunda-feira',1,'2023-05-15 23:40:49','2023-05-16 02:40:50'),(2,'Aula 2','vespertino','07:50:00','08:40:00','segunda-feira',1,'2023-05-15 23:40:53','2023-05-16 02:40:55'),(3,'Aula 3','vespertino','09:00:00','09:50:00','segunda-feira',1,'2023-05-15 23:40:57','2023-05-16 02:40:58'),(4,'Aula 4','vespertino','09:50:00','10:40:00','segunda-feira',1,'2023-05-15 23:41:04','2023-05-16 02:41:05'),(5,'Aula 1','vespertino','07:00:00','07:50:00','terca-feira',1,'2023-05-15 20:00:34','2023-05-16 02:40:32'),(6,'Aula 1','vespertino','07:00:00','07:50:00','quarta-feira',1,'2023-05-15 20:28:06','2023-05-16 02:39:56'),(7,'Aula 1','vespertino','07:00:00','07:50:00','quinta-feira',1,'2023-05-15 20:28:19','2023-05-16 02:40:00'),(8,'Aula 1','vespertino','07:00:00','07:50:00','sexta-feira',1,'2023-05-15 20:28:31','2023-05-16 02:40:03'),(9,'Aula 2','vespertino','07:50:00','08:40:00','sexta-feira',1,'2023-05-15 20:41:34','2023-05-16 02:40:06'),(10,'Aula 1','vespertino','07:00:00','07:50:00','sexta-feira',1,'2023-05-15 20:41:35','2023-05-16 02:40:09'),(11,'Aula 2','vespertino','07:50:00','08:40:00','sexta-feira',1,'2023-05-16 02:23:03','2023-05-16 05:23:03');
/*!40000 ALTER TABLE `hours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Israel','Silva',NULL,NULL,NULL),(2,'Helder','Caldas',NULL,NULL,NULL),(3,'Diego','Parada Roso','diego@teste.com','2023-05-16 00:30:51','2023-05-16 03:30:51'),(4,'Diego','Parada Roso','diego@teste.com','2023-05-16 00:33:46','2023-05-16 03:33:46');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `document` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `genre` varchar(10) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,NULL,'Alexandre','Santos','alexandre27@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(3,NULL,'Willian','Santos','willian28@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(4,NULL,'Eleno','Santos','eleno29@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(8,NULL,'Felipe','Santos','felipe33@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(9,NULL,'Anderson','Santos','anderson34@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(10,NULL,'Elton','Santos','elton35@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(11,NULL,'Leonardo','Santos','leonardo36@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(12,NULL,'Regilton','Santos','regilton37@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(13,NULL,'Sidney','Santos','sidney38@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(14,NULL,'Lourival','Santos','lourival39@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(15,NULL,'Henrique','Santos','henrique40@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(16,NULL,'Daniel','Santos','daniel41@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(17,NULL,'Pedro','Santos','pedro42@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(18,NULL,'Andre Roberto','Santos','andre roberto43@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(19,NULL,'Ozeias','Santos','ozeias44@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(20,NULL,'Arnobio','Santos','arnobio45@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(21,NULL,'Roniel','Santos','roniel46@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(22,NULL,'Caíque','Santos','caíque47@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(23,NULL,'Lucas','Santos','lucas48@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(24,NULL,'Francisco','Santos','francisco49@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(25,NULL,'Cristian','Santos','cristian50@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(26,NULL,'Eduardo','Santos','eduardo51@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(27,NULL,'Rodrigo','Santos','rodrigo52@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(28,NULL,'Raphael','Santos','raphael53@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(29,NULL,'Jose','Santos','jose54@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(30,NULL,'Rodrigo','Santos','rodrigo55@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(31,NULL,'Diego','Santos','diego56@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(32,NULL,'Alexandre','Santos','alexandre57@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(33,NULL,'Edimar','Santos','edimar58@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(34,NULL,'Jackell','Santos','jackell59@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(35,NULL,'Luis','Santos','luis60@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(36,NULL,'Lucas','Santos','lucas61@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(37,NULL,'Wander','Santos','wander62@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(38,NULL,'Tairo','Santos','tairo63@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(39,NULL,'Rubens','Santos','rubens64@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(40,NULL,'Hugo','Santos','hugo65@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(41,NULL,'Gustavo','Santos','gustavo66@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(42,NULL,'Paulo','Santos','paulo67@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(43,NULL,'Rodrigo','Santos','rodrigo68@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(44,NULL,'Denio','Santos','denio69@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(45,NULL,'Idalmir','Santos','idalmir70@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(46,NULL,'Ataide','Santos','ataide71@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(47,NULL,'Luiz','Santos','luiz72@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(48,NULL,'Luciano','Santos','luciano73@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(49,NULL,'Adir','Santos','adir74@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(50,NULL,'Tainan','Santos','tainan75@email.com.br',NULL,'2023-04-28 16:32:29','2023-04-28 16:32:50',NULL,1),(51,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:46:23','2023-05-15 20:46:23','M',1),(52,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:46:49','2023-05-15 20:46:49','M',1),(53,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:46:50','2023-05-15 20:46:50','M',1),(54,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:50:05','2023-05-15 20:50:05','M',1),(55,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:53:35','2023-05-15 20:53:35','M',1),(56,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:54:54','2023-05-15 20:54:54','M',1),(57,NULL,'Eduardo','Miguel',NULL,NULL,'2023-05-15 20:55:02','2023-05-15 20:55:02','M',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16  3:39:44
