CREATE DATABASE  IF NOT EXISTS `bespoke_properties` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `bespoke_properties`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bespoke_properties
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `Property_id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) DEFAULT NULL,
  `Location` varchar(256) DEFAULT NULL,
  `Size` varchar(256) DEFAULT NULL,
  `Beds` int(11) DEFAULT NULL,
  `Power` varchar(256) DEFAULT NULL,
  `Water` varchar(256) DEFAULT NULL,
  `Baths` int(11) DEFAULT NULL,
  `Rent_price` int(11) DEFAULT NULL,
  `Buy_price` int(11) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  PRIMARY KEY (`Property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(256) DEFAULT NULL,
  `Username` varchar(256) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'lenon@gmail.com','lenon','1213'),(2,'lenon1@gmail.com','Lenon','d41d8cd98f00b204e9800998ecf8427e'),(3,'user@gmail.com','user1','81dc9bdb52d04dc20036dbd8313ed055'),(4,'user2@gmail.com','user2','81dc9bdb52d04dc20036dbd8313ed055'),(5,'user3@gmail.com','user3','33ceb07bf4eeb3da587e268d663aba1a'),(6,'user4@gmail.com','user4','33ceb07bf4eeb3da587e268d663aba1a'),(7,'user5@gmail.com','user5','d41d8cd98f00b204e9800998ecf8427e'),(8,'user6@gmail.com','user6','81dc9bdb52d04dc20036dbd8313ed055'),(9,'user7@gmail.com','user7','81dc9bdb52d04dc20036dbd8313ed055'),(10,'user8@gmail.com','user8','33ceb07bf4eeb3da587e268d663aba1a'),(11,'user9@gmail.com','user9','33ceb07bf4eeb3da587e268d663aba1a'),(12,'lenonkoech@gmail.com','rio','81dc9bdb52d04dc20036dbd8313ed055'),(13,'lnonkoech@gmail.com','ian','81dc9bdb52d04dc20036dbd8313ed055'),(14,'alexmaende03@gmail.com','aleko','04c35cd4deace5b11bb3fb8c68a1bb0a');
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

-- Dump completed on 2024-03-12 13:59:45
