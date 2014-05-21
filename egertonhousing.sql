-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: egertonhousing
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.10.2

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
-- Table structure for table `applicant_designations`
--

DROP TABLE IF EXISTS `applicant_designations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicant_designations` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicant_designations`
--

LOCK TABLES `applicant_designations` WRITE;
/*!40000 ALTER TABLE `applicant_designations` DISABLE KEYS */;
/*!40000 ALTER TABLE `applicant_designations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applicantsdetails`
--

DROP TABLE IF EXISTS `applicantsdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicantsdetails` (
  `ApplicantId` int(30) NOT NULL AUTO_INCREMENT COMMENT 'uniquely identify each applicant',
  `FirstName` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `LastName` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Gender` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `maritalStatus` text NOT NULL,
  `IdOrPassport` int(30) NOT NULL,
  `EmailAddress` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Password` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `PayrollNumber` int(100) NOT NULL,
  `Designation` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Grade` int(10) NOT NULL,
  `CommencementOfDuty` date NOT NULL,
  `Department` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `disabled` varchar(10) NOT NULL,
  `HeadOfDepartment` text NOT NULL,
  `nature_of_duty` int(11) NOT NULL DEFAULT '1',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aprovalStatus` varchar(10) NOT NULL DEFAULT 'Not',
  `user_stage` int(11) DEFAULT '11',
  PRIMARY KEY (`ApplicantId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicantsdetails`
--

LOCK TABLES `applicantsdetails` WRITE;
/*!40000 ALTER TABLE `applicantsdetails` DISABLE KEYS */;
INSERT INTO `applicantsdetails` VALUES (1,'peter','gor','Male ','Married',123456,'gor@gmail.com','123',1234567,'assistant lec',10,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:43:12','Not',11),(2,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','123',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:49:42','Not',11),(3,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','123',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:52:18','Not',11),(4,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','123',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:53:14','Not',11),(5,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:53:50','Not',11),(6,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:54:04','Not',11),(7,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:56:57','Not',11),(8,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:57:48','Not',11),(9,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:58:14','Not',11),(10,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 11:59:37','Not',11),(11,'alex ','maina','Male ','Single ',123456,'alex@gmail.com','',1234567,'assistant lec',13,'0000-00-00','comp sciemce','','gikaru',1,'2014-04-23 12:00:45','Not',11),(12,'obed','muthomi','Male ','Single ',23333,'obed@gmail.com','123',122333,'kiki',23,'0000-00-00','23','','gikaru',1,'2014-04-23 15:11:26','Not',11),(13,'dermi','data','Male ','Single ',222222,'dermi@gmail.com','123',333,'distinguish',12,'0000-00-00','dermi','','dermi',1,'2014-04-24 12:14:29','Not',12),(14,'','','','',0,'','',0,'',0,'0000-00-00','','','',1,'2014-05-21 07:57:05','Not',12);
/*!40000 ALTER TABLE `applicantsdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `children` (
  `ApplicantId` int(50) NOT NULL,
  `childId` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) CHARACTER SET greek COLLATE greek_bin NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `disabled` varchar(10) NOT NULL,
  PRIMARY KEY (`childId`),
  UNIQUE KEY `childId_2` (`childId`),
  KEY `childId` (`childId`),
  KEY `childId_3` (`childId`),
  KEY `childId_4` (`childId`),
  KEY `childId_5` (`childId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `children`
--

LOCK TABLES `children` WRITE;
/*!40000 ALTER TABLE `children` DISABLE KEYS */;
INSERT INTO `children` VALUES (11,1,'seline','adhiambo','0000-00-00','','No'),(12,2,'miemi','keee','0000-00-00','','No'),(12,3,'weww','weew','0000-00-00','','No'),(13,4,'a','a','0000-00-00','','Yes'),(2,5,'','','0000-00-00','',''),(2,6,'','','0000-00-00','',''),(13,7,'','','0000-00-00','',''),(13,8,'','','0000-00-00','',''),(13,9,'','','0000-00-00','',''),(13,10,'','','0000-00-00','',''),(13,11,'','','0000-00-00','',''),(13,12,'','','0000-00-00','',''),(13,13,'','','0000-00-00','',''),(13,14,'','','0000-00-00','',''),(13,15,'','','0000-00-00','',''),(13,16,'','','0000-00-00','','');
/*!40000 ALTER TABLE `children` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_allocation`
--

DROP TABLE IF EXISTS `house_allocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_allocation` (
  `allocation_Id` int(11) NOT NULL AUTO_INCREMENT,
  `applicationId` int(50) NOT NULL,
  `unit_id` int(50) DEFAULT NULL,
  `allocation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`allocation_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_allocation`
--

LOCK TABLES `house_allocation` WRITE;
/*!40000 ALTER TABLE `house_allocation` DISABLE KEYS */;
INSERT INTO `house_allocation` VALUES (1,2,2,'2014-04-09 11:59:03'),(2,1,1,'2014-04-09 11:59:12'),(3,0,0,'0000-00-00 00:00:00'),(4,0,0,'0000-00-00 00:00:00'),(5,0,0,'0000-00-00 00:00:00'),(6,0,0,'0000-00-00 00:00:00'),(7,0,0,'0000-00-00 00:00:00'),(8,0,0,'0000-00-00 00:00:00'),(9,0,0,'0000-00-00 00:00:00'),(10,0,0,'0000-00-00 00:00:00'),(11,0,0,'0000-00-00 00:00:00'),(12,0,0,'0000-00-00 00:00:00'),(13,0,0,'0000-00-00 00:00:00'),(14,0,0,'0000-00-00 00:00:00'),(15,0,0,'0000-00-00 00:00:00'),(16,0,0,'0000-00-00 00:00:00'),(17,0,0,'0000-00-00 00:00:00'),(18,0,0,'0000-00-00 00:00:00'),(19,0,0,'0000-00-00 00:00:00'),(20,0,0,'0000-00-00 00:00:00'),(21,0,0,'0000-00-00 00:00:00'),(22,0,0,'0000-00-00 00:00:00'),(23,0,0,'0000-00-00 00:00:00'),(24,0,0,'0000-00-00 00:00:00'),(25,0,0,'0000-00-00 00:00:00'),(26,0,0,'0000-00-00 00:00:00'),(27,0,0,'0000-00-00 00:00:00'),(28,0,0,'0000-00-00 00:00:00'),(29,0,0,'0000-00-00 00:00:00'),(30,0,0,'0000-00-00 00:00:00'),(31,0,0,'0000-00-00 00:00:00'),(32,0,0,'0000-00-00 00:00:00'),(33,0,0,'0000-00-00 00:00:00'),(34,0,0,'0000-00-00 00:00:00'),(35,0,0,'0000-00-00 00:00:00'),(36,0,0,'0000-00-00 00:00:00'),(37,0,0,'0000-00-00 00:00:00'),(38,0,0,'0000-00-00 00:00:00'),(39,0,0,'0000-00-00 00:00:00'),(40,0,0,'0000-00-00 00:00:00'),(41,0,0,'0000-00-00 00:00:00'),(42,0,0,'0000-00-00 00:00:00'),(43,0,0,'0000-00-00 00:00:00'),(44,0,0,'0000-00-00 00:00:00'),(45,0,0,'0000-00-00 00:00:00'),(46,0,0,'0000-00-00 00:00:00'),(47,0,0,'0000-00-00 00:00:00'),(48,0,0,'0000-00-00 00:00:00'),(49,0,0,'0000-00-00 00:00:00'),(50,0,0,'0000-00-00 00:00:00'),(51,0,0,'0000-00-00 00:00:00'),(52,0,0,'0000-00-00 00:00:00'),(53,0,0,'0000-00-00 00:00:00'),(54,0,0,'0000-00-00 00:00:00'),(55,0,0,'0000-00-00 00:00:00'),(56,0,0,'0000-00-00 00:00:00'),(57,0,0,'0000-00-00 00:00:00'),(58,0,0,'0000-00-00 00:00:00'),(59,0,0,'0000-00-00 00:00:00'),(60,0,0,'0000-00-00 00:00:00'),(61,0,0,'0000-00-00 00:00:00'),(62,0,0,'0000-00-00 00:00:00'),(63,0,0,'0000-00-00 00:00:00'),(64,0,0,'0000-00-00 00:00:00'),(65,0,0,'0000-00-00 00:00:00'),(66,0,0,'0000-00-00 00:00:00'),(67,0,0,'0000-00-00 00:00:00'),(68,0,0,'0000-00-00 00:00:00'),(69,0,0,'0000-00-00 00:00:00'),(70,0,0,'0000-00-00 00:00:00'),(71,0,0,'0000-00-00 00:00:00'),(72,0,0,'0000-00-00 00:00:00'),(73,0,0,'0000-00-00 00:00:00'),(74,0,0,'0000-00-00 00:00:00'),(75,0,0,'0000-00-00 00:00:00'),(76,0,0,'0000-00-00 00:00:00'),(77,0,0,'0000-00-00 00:00:00'),(78,0,0,'0000-00-00 00:00:00'),(79,0,0,'0000-00-00 00:00:00'),(80,0,0,'0000-00-00 00:00:00'),(81,0,0,'0000-00-00 00:00:00'),(82,0,0,'0000-00-00 00:00:00'),(83,0,0,'0000-00-00 00:00:00'),(84,0,0,'0000-00-00 00:00:00'),(85,0,0,'0000-00-00 00:00:00'),(86,0,0,'0000-00-00 00:00:00'),(87,0,0,'0000-00-00 00:00:00'),(88,0,0,'0000-00-00 00:00:00'),(89,0,0,'0000-00-00 00:00:00'),(90,0,0,'0000-00-00 00:00:00'),(91,0,0,'0000-00-00 00:00:00'),(92,0,0,'0000-00-00 00:00:00'),(93,0,0,'0000-00-00 00:00:00'),(94,0,0,'0000-00-00 00:00:00'),(95,0,0,'0000-00-00 00:00:00'),(96,0,0,'0000-00-00 00:00:00'),(97,0,0,'0000-00-00 00:00:00'),(98,0,0,'0000-00-00 00:00:00'),(99,0,0,'0000-00-00 00:00:00'),(100,0,0,'0000-00-00 00:00:00'),(101,0,0,'0000-00-00 00:00:00'),(102,0,0,'0000-00-00 00:00:00'),(103,0,0,'0000-00-00 00:00:00'),(104,0,0,'0000-00-00 00:00:00'),(105,0,0,'0000-00-00 00:00:00'),(106,0,0,'0000-00-00 00:00:00'),(107,0,0,'0000-00-00 00:00:00'),(108,0,0,'0000-00-00 00:00:00'),(109,0,0,'0000-00-00 00:00:00'),(110,0,0,'0000-00-00 00:00:00'),(111,0,0,'0000-00-00 00:00:00'),(112,0,0,'0000-00-00 00:00:00'),(113,0,0,'0000-00-00 00:00:00'),(114,0,0,'0000-00-00 00:00:00'),(115,0,0,'0000-00-00 00:00:00'),(116,0,0,'0000-00-00 00:00:00'),(117,0,0,'0000-00-00 00:00:00'),(118,0,0,'0000-00-00 00:00:00'),(119,0,0,'0000-00-00 00:00:00'),(120,0,0,'0000-00-00 00:00:00'),(121,0,0,'0000-00-00 00:00:00'),(122,0,0,'0000-00-00 00:00:00'),(123,0,0,'0000-00-00 00:00:00'),(124,0,0,'0000-00-00 00:00:00'),(125,0,0,'0000-00-00 00:00:00'),(126,0,0,'0000-00-00 00:00:00'),(127,0,0,'0000-00-00 00:00:00'),(128,0,0,'0000-00-00 00:00:00'),(129,0,0,'0000-00-00 00:00:00'),(130,0,0,'0000-00-00 00:00:00'),(131,0,0,'0000-00-00 00:00:00'),(132,0,0,'0000-00-00 00:00:00'),(133,0,0,'0000-00-00 00:00:00'),(134,0,0,'0000-00-00 00:00:00'),(135,0,0,'0000-00-00 00:00:00'),(136,0,0,'0000-00-00 00:00:00'),(137,0,0,'0000-00-00 00:00:00'),(138,0,0,'0000-00-00 00:00:00'),(139,0,0,'0000-00-00 00:00:00'),(140,0,0,'0000-00-00 00:00:00'),(141,0,0,'0000-00-00 00:00:00'),(142,0,0,'0000-00-00 00:00:00'),(143,0,0,'0000-00-00 00:00:00'),(144,0,0,'0000-00-00 00:00:00'),(145,0,0,'0000-00-00 00:00:00'),(146,0,0,'0000-00-00 00:00:00'),(147,3,6,'2014-04-24 12:31:39');
/*!40000 ALTER TABLE `house_allocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_applications`
--

DROP TABLE IF EXISTS `house_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_applications` (
  `aplicationId` int(50) NOT NULL AUTO_INCREMENT,
  `ApplicantId` int(50) NOT NULL,
  `house_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`aplicationId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_applications`
--

LOCK TABLES `house_applications` WRITE;
/*!40000 ALTER TABLE `house_applications` DISABLE KEYS */;
INSERT INTO `house_applications` VALUES (1,4,1),(2,5,2),(3,6,3),(4,7,4),(5,2,6),(6,2,7),(7,2,0);
/*!40000 ALTER TABLE `house_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_category`
--

DROP TABLE IF EXISTS `house_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_category` (
  `house_id` int(20) NOT NULL AUTO_INCREMENT,
  `house_category` text NOT NULL,
  `noOfUnits` int(20) DEFAULT NULL,
  `rent` bigint(50) NOT NULL,
  `Description` text NOT NULL,
  `QualifyingGrades` varchar(30) NOT NULL,
  `hasCompound` tinytext NOT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_category`
--

LOCK TABLES `house_category` WRITE;
/*!40000 ALTER TABLE `house_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `house_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_compound`
--

DROP TABLE IF EXISTS `house_compound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_compound` (
  `compound_id` int(11) NOT NULL AUTO_INCREMENT,
  `let_id` int(11) NOT NULL,
  `fence` varchar(200) DEFAULT NULL,
  `garden` tinytext,
  `roof` tinytext,
  `etc` tinytext,
  PRIMARY KEY (`compound_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_compound`
--

LOCK TABLES `house_compound` WRITE;
/*!40000 ALTER TABLE `house_compound` DISABLE KEYS */;
/*!40000 ALTER TABLE `house_compound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_general_condition`
--

DROP TABLE IF EXISTS `house_general_condition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_general_condition` (
  `house_general_condition_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `doorLock` varchar(200) DEFAULT NULL,
  `wals` varchar(200) DEFAULT NULL,
  `no_of_keys` int(11) DEFAULT NULL,
  PRIMARY KEY (`house_general_condition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_general_condition`
--

LOCK TABLES `house_general_condition` WRITE;
/*!40000 ALTER TABLE `house_general_condition` DISABLE KEYS */;
INSERT INTO `house_general_condition` VALUES (1,0,0,'','','','','','','',0),(2,0,0,'','','','','','','',0),(3,0,0,'','','','','','','',0),(4,0,0,'','','','','','','',0),(5,0,0,'','','','','','','',0),(6,0,0,'','','','','','','',0),(7,0,0,'','','','','','','',0),(8,0,0,'','','','','','','',0),(9,0,0,'','','','','','','',0),(10,0,0,'','','','','','','',0),(11,0,0,'','','','','','','',0),(12,0,0,'','','','','','','',0),(13,0,0,'','','','','','','',0),(14,0,0,'','','','','','','',0),(15,0,0,'','','','','','','',0),(16,0,0,'','','','','','','',0),(17,0,0,'','','','','','','',0),(18,0,0,'','','','','','','',0),(19,0,0,'','','','','','','',0),(20,0,0,'','','','','','','',0),(21,0,0,'','','','','','','',0),(22,0,0,'','','','','','','',0),(23,0,0,'','','','','','','',0),(24,0,0,'','','','','','','',0),(25,0,0,'','','','','','','',0),(26,0,0,'','','','','','','',0),(27,0,0,'','','','','','','',0),(28,0,0,'','','','','','','',0),(29,0,0,'','','','','','','',0),(30,0,0,'','','','','','','',0),(31,0,0,'','','','','','','',0),(32,0,0,'','','','','','','',0),(33,0,0,'','','','','','','',0),(34,0,0,'','','','','','','',0),(35,0,0,'','','','','','','',0),(36,0,0,'','','','','','','',0),(37,0,0,'','','','','','','',0),(38,0,0,'','','','','','','',0),(39,0,0,'','','','','','','',0),(40,0,0,'','','','','','','',0),(41,0,0,'','','','','','','',0),(42,0,0,'','','','','','','',0),(43,0,0,'','','','','','','',0),(44,0,0,'','','','','','','',0),(45,0,0,'','','','','','','',0),(46,0,0,'','','','','','','',0),(47,0,0,'','','','','','','',0),(48,0,0,'','','','','','','',0),(49,0,0,'','','','','','','',0),(50,0,1,'','','','','','','',0),(51,0,2,'','','','','','','',0),(52,0,3,'mmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm',0),(53,0,4,'mmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm',0),(54,0,5,'mmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm',0),(55,0,6,'mmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm',0),(56,0,1,'','','','','','','',0),(57,0,8,'','','','','','','',0),(58,0,9,'','','','','','','',0),(59,0,10,'','','','','','','',0),(60,0,11,'','','','','','','',0),(61,0,12,'','','','','','','',0),(62,0,13,'','','','','','','',0),(63,0,14,'','','','','','','',0),(64,0,15,'','','','','','','',0),(65,0,16,'','','','','','','',0),(66,0,17,'','','','','','','',0),(67,0,18,'','','','','','','',0),(68,0,19,'','','','','','','',0),(69,0,20,'','','','','','','',0),(70,0,21,'','','','','','','',0),(71,0,22,'','','','','','','',0),(72,0,23,'','','','','','','',0),(73,0,24,'','','','','','','',0),(74,0,25,'','','','','','','',0),(75,0,26,'','','','','','','',0),(76,0,27,'','','','','','','',0),(77,0,28,'','','','','','','',0),(78,0,29,'','','','','','','',0),(79,0,30,'','','','','','','',0),(80,0,31,'','','','','','','',0),(81,0,32,'','','','','','','',0),(82,0,33,'','','','','','','',0),(83,0,34,'','','','','','','',0),(84,0,35,'','','','','','','',0),(85,0,36,'','','','','','','',0),(86,0,37,'','','','','','','',0),(87,0,38,'','','','','','','',0),(88,0,39,'','','','','','','',0),(89,0,40,'','','','','','','',0),(90,0,41,'','','','','','','',0),(91,0,42,'','','','','','','',0),(92,0,43,'','','','','','','',0),(93,0,44,'','','','','','','',0),(94,0,45,'','','','','','','',0),(95,0,46,'','','','','','','',0),(96,0,47,'','','','','','','',0),(97,0,48,'','','','','','','',0),(98,0,49,'','','','','','','',0),(99,0,50,'','','','','','','',0),(100,0,51,'','','','','','','',0),(101,0,52,'','','','','','','',0),(102,0,53,'','','','','','','',0),(103,0,54,'','','','','','','',0),(104,0,55,'','','','','','','',0),(105,0,56,'','','','','','','',0),(106,0,57,'','','','','','','',0),(107,0,58,'','','','','','','',0);
/*!40000 ALTER TABLE `house_general_condition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_let_in_and_out`
--

DROP TABLE IF EXISTS `house_let_in_and_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_let_in_and_out` (
  `let_id` int(20) NOT NULL AUTO_INCREMENT,
  `allocation_Id` int(10) DEFAULT NULL,
  `in_or_out` tinytext NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT NULL,
  `officer_incharge` tinytext NOT NULL,
  PRIMARY KEY (`let_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_let_in_and_out`
--

LOCK TABLES `house_let_in_and_out` WRITE;
/*!40000 ALTER TABLE `house_let_in_and_out` DISABLE KEYS */;
INSERT INTO `house_let_in_and_out` VALUES (1,11,'in','2014-04-22 10:10:41','2020-10-04 00:00:00',''),(2,11,'in','2014-04-22 10:10:44','2020-10-04 00:00:00',''),(3,11,'in','2014-04-22 10:13:41','2020-10-04 00:00:00',''),(4,11,'in','2014-04-22 10:13:43','2020-10-04 00:00:00',''),(5,11,'in','2014-04-22 10:16:26','2020-10-04 00:00:00',''),(6,11,'in','2014-04-22 10:16:29','2020-10-04 00:00:00',''),(7,11,'in','2014-04-22 10:50:26','2020-10-04 00:00:00',''),(8,11,'in','2014-04-22 10:51:35','2020-10-04 00:00:00',''),(9,11,'in','2014-04-22 10:51:47','2020-10-04 00:00:00',''),(10,11,'in','2014-04-22 10:51:50','2020-10-04 00:00:00',''),(11,11,'in','2014-04-22 10:54:34','2020-10-04 00:00:00',''),(12,11,'in','2014-04-22 10:54:38','2020-10-04 00:00:00',''),(13,11,'in','2014-04-22 10:54:40','2020-10-04 00:00:00',''),(14,11,'in','2014-04-22 10:54:42','2020-10-04 00:00:00',''),(15,11,'in','2014-04-22 10:55:36','2020-10-04 00:00:00',''),(16,11,'in','2014-04-22 10:55:39','2020-10-04 00:00:00',''),(17,11,'in','2014-04-22 10:55:41','2020-10-04 00:00:00',''),(18,11,'in','2014-04-22 10:55:44','2020-10-04 00:00:00',''),(19,11,'in','2014-04-22 10:56:35','2020-10-04 00:00:00',''),(20,11,'in','2014-04-22 10:56:37','2020-10-04 00:00:00',''),(21,11,'in','2014-04-22 10:59:11','2020-10-04 00:00:00',''),(22,11,'in','2014-04-22 10:59:19','2020-10-04 00:00:00',''),(23,11,'in','2014-04-22 10:59:50','2020-10-04 00:00:00',''),(24,11,'in','2014-04-22 10:59:58','2020-10-04 00:00:00',''),(25,11,'in','2014-04-22 11:00:27','2020-10-04 00:00:00',''),(26,11,'in','2014-04-22 11:03:15','2020-10-04 00:00:00',''),(27,11,'in','2014-04-22 11:03:22','2020-10-04 00:00:00',''),(28,11,'in','2014-04-22 11:07:26','2020-10-04 00:00:00',''),(29,11,'in','2014-04-22 11:08:14','2020-10-04 00:00:00',''),(30,11,'in','2014-04-22 11:08:25','2020-10-04 00:00:00',''),(31,11,'in','2014-04-22 11:09:01','2020-10-04 00:00:00',''),(32,11,'in','2014-04-22 11:09:05','2020-10-04 00:00:00',''),(33,11,'in','2014-04-22 11:12:43','2020-10-04 00:00:00',''),(34,11,'in','2014-04-22 11:12:48','2020-10-04 00:00:00',''),(35,11,'in','2014-04-22 11:27:04','2020-10-04 00:00:00','satiti sitati'),(36,11,'in','2014-04-22 11:27:14','2020-10-04 00:00:00','satiti sitati'),(37,11,'in','2014-04-22 11:27:18','2020-10-04 00:00:00','satiti sitati'),(38,11,'in','2014-04-22 11:29:30','2020-10-04 00:00:00','satiti sitati'),(39,11,'in','2014-04-22 11:29:35','2020-10-04 00:00:00','satiti sitati'),(40,11,'in','2014-04-22 11:31:07','2020-10-04 00:00:00','satiti sitati'),(41,11,'in','2014-04-22 11:31:10','2020-10-04 00:00:00','satiti sitati'),(42,11,'in','2014-04-23 04:56:37','2020-11-04 00:00:00','satiti sitati'),(43,11,'in','2014-04-23 04:56:43','2020-11-04 00:00:00','satiti sitati'),(44,11,'in','2014-04-23 05:38:17','2020-11-04 00:00:00','satiti sitati'),(45,11,'in','2014-04-23 05:38:56','2020-11-04 00:00:00','satiti sitati'),(46,11,'in','2014-04-23 08:24:38','2020-11-04 00:00:00','satiti sitati'),(47,11,'in','2014-04-23 08:25:23','2020-11-04 00:00:00','satiti sitati'),(48,11,'in','2014-04-23 08:25:54','2020-11-04 00:00:00','satiti sitati'),(49,11,'in','2014-04-23 08:31:25','2020-11-04 00:00:00','satiti sitati'),(50,11,'in','2014-04-23 08:31:45','2020-11-04 00:00:00','satiti sitati'),(51,1,'in','2014-04-23 08:36:37','2020-11-04 00:00:00','satiti sitati'),(52,1,'in','2014-04-23 08:37:43','2020-11-04 00:00:00','satiti sitati'),(53,1,'in','2014-04-23 08:37:52','2020-11-04 00:00:00','satiti sitati'),(54,1,'in','2014-04-23 08:37:56','2020-11-04 00:00:00','satiti sitati'),(55,1,'in','2014-04-23 08:38:03','2020-11-04 00:00:00','satiti sitati'),(56,1,'in','2014-04-23 08:38:05','2020-11-04 00:00:00','satiti sitati'),(57,1,'in','2014-04-23 08:39:08','2020-11-04 00:00:00','satiti sitati'),(58,1,'in','2014-04-23 08:39:12','2020-11-04 00:00:00','satiti sitati');
/*!40000 ALTER TABLE `house_let_in_and_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_qualifying_grade`
--

DROP TABLE IF EXISTS `house_qualifying_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_qualifying_grade` (
  `house_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_qualifying_grade`
--

LOCK TABLES `house_qualifying_grade` WRITE;
/*!40000 ALTER TABLE `house_qualifying_grade` DISABLE KEYS */;
INSERT INTO `house_qualifying_grade` VALUES (1,6),(1,7),(2,9),(2,10),(2,10),(3,10),(3,10),(3,11),(4,11),(4,10),(4,12),(5,12),(5,10),(5,11),(6,13),(7,13),(5,12);
/*!40000 ALTER TABLE `house_qualifying_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_types`
--

DROP TABLE IF EXISTS `house_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_types` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `noOfUnits` int(11) NOT NULL,
  `noOfBedroms` int(11) NOT NULL,
  `hasCompound` tinytext NOT NULL,
  `hasSQ` tinytext NOT NULL,
  `qualifyingGrade` varchar(20) NOT NULL,
  `rent` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_types`
--

LOCK TABLES `house_types` WRITE;
/*!40000 ALTER TABLE `house_types` DISABLE KEYS */;
INSERT INTO `house_types` VALUES (1,'XY',5,2,'false','false','1,7,3',30998,'ttttttttttttttttttttttttttttttttttttttt'),(2,'AH',20,4,'true','true','1,2,3',30998,'ttttttttttttttttttttttttttttttttttttttt'),(3,'XY',5,2,'no','','1,7,3',30998,'ttttttttttttttttttttttttttttttttttttttt'),(4,'ABC',20,2,'true','false','123',2002,'eeeeeeeeeeeeeeeeeee'),(5,'DEF',20,3,'true','true','123',2002,'eeeeeeeeeeeeeeeeeee'),(6,'GHI',9,4,'false','false','123',2002,'eeeeeeeeeeeeeeeeeee'),(7,'MNO',9,1,'false','false','123',2002,'eeeeeeeeeeeeeeeeeee');
/*!40000 ALTER TABLE `house_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house_units`
--

DROP TABLE IF EXISTS `house_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_units` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_id` int(11) NOT NULL,
  `unit_index` int(11) NOT NULL,
  `ocupy_status` varchar(20) NOT NULL DEFAULT 'vacant',
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_units`
--

LOCK TABLES `house_units` WRITE;
/*!40000 ALTER TABLE `house_units` DISABLE KEYS */;
INSERT INTO `house_units` VALUES (1,1,1,'occupied'),(2,1,2,'occupied'),(3,1,3,'vacant'),(4,1,4,'vacant'),(5,1,6,'vacant'),(6,1,8,'vacant'),(7,2,8,'vacant'),(8,3,8,'vacant'),(9,2,1,'vacant'),(10,2,5,'vacant'),(11,2,7,'vacant'),(12,2,10,'vacant');
/*!40000 ALTER TABLE `house_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houserepair`
--

DROP TABLE IF EXISTS `houserepair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `houserepair` (
  `repair_id` int(11) NOT NULL AUTO_INCREMENT,
  `let_id` int(11) DEFAULT NULL,
  `repair_type` tinytext COLLATE latin1_bin,
  `tenant_description` tinytext COLLATE latin1_bin,
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EstimatedCost` int(11) NOT NULL,
  `OfficerIncharge` int(11) NOT NULL,
  `officers_comment` tinytext COLLATE latin1_bin,
  `repair_date` date DEFAULT NULL,
  PRIMARY KEY (`repair_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_bin COMMENT='for documenting repair details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houserepair`
--

LOCK TABLES `houserepair` WRITE;
/*!40000 ALTER TABLE `houserepair` DISABLE KEYS */;
INSERT INTO `houserepair` VALUES (1,NULL,NULL,'','2014-05-21 15:19:47',0,0,NULL,NULL),(2,NULL,NULL,'','2014-05-21 15:20:25',0,0,NULL,NULL),(3,NULL,NULL,'','2014-05-21 15:21:47',0,0,NULL,NULL),(4,NULL,NULL,'','2014-05-21 15:22:08',0,0,NULL,NULL),(5,NULL,NULL,'bgiwhbnsvjd','2014-05-21 15:22:57',0,0,NULL,NULL),(6,NULL,NULL,'bgiwhbnsvjd','2014-05-21 15:24:10',0,0,NULL,NULL),(7,NULL,NULL,'bgiwhbnsvjd','2014-05-21 15:24:23',0,0,NULL,NULL),(8,NULL,NULL,'bgiwhbnsvjd','2014-05-21 15:27:19',0,0,NULL,NULL),(9,NULL,'Electical','bgiwhbnsvjd','2014-05-21 15:33:16',0,0,NULL,NULL),(10,NULL,'Electical','bgiwhbnsvjd','2014-05-21 15:37:48',0,0,NULL,NULL),(11,NULL,'Electical','fewfqe','2014-05-21 15:38:57',0,0,NULL,NULL),(12,NULL,'Electical','fewfqe','2014-05-21 15:43:12',0,0,NULL,NULL),(13,NULL,'Electical','fewfqe','2014-05-21 16:04:39',0,0,NULL,NULL),(14,NULL,'Electical','fewfqe','2014-05-21 16:04:48',0,0,NULL,NULL),(15,NULL,'plumbing','fewfqe','2014-05-21 16:06:35',0,0,NULL,NULL),(16,NULL,'plumbing','fewfqe','2014-05-21 16:08:44',0,0,NULL,NULL),(17,NULL,'plumbing','fewfqe','2014-05-21 16:10:00',0,0,NULL,NULL),(18,NULL,'Electical','v kjv','2014-05-21 16:21:51',0,0,NULL,NULL),(19,NULL,'plumbing','wesq','2014-05-21 16:24:41',0,0,NULL,NULL),(20,NULL,'plumbing','wesq','2014-05-21 16:25:29',0,0,NULL,NULL);
/*!40000 ALTER TABLE `houserepair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_bathroom`
--

DROP TABLE IF EXISTS `rooms_bathroom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_bathroom` (
  `bathroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bathroom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bathroom`
--

LOCK TABLES `rooms_bathroom` WRITE;
/*!40000 ALTER TABLE `rooms_bathroom` DISABLE KEYS */;
INSERT INTO `rooms_bathroom` VALUES (1,0,5,'mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm'),(3,0,1,'','',''),(4,0,8,'','',''),(5,0,9,'','',''),(6,0,10,'','',''),(7,0,11,'','',''),(8,0,12,'','',''),(9,0,13,'','',''),(10,0,14,'','',''),(11,0,15,'','',''),(12,0,16,'','',''),(13,0,17,'','',''),(14,0,18,'','',''),(15,0,19,'','',''),(16,0,20,'','',''),(17,0,21,'','',''),(18,0,22,'','',''),(19,0,23,'','',''),(20,0,24,'','',''),(21,0,25,'','',''),(22,0,26,'','',''),(23,0,27,'','',''),(24,0,28,'','',''),(25,0,29,'','',''),(26,0,30,'','',''),(27,0,31,'','',''),(28,0,32,'','',''),(29,0,33,'','',''),(30,0,34,'','',''),(31,0,35,'','',''),(32,0,36,'','',''),(33,0,37,'','',''),(34,0,38,'','',''),(35,0,39,'','',''),(36,0,40,'','',''),(37,0,41,'','',''),(38,0,42,'','',''),(39,0,43,'','',''),(40,0,44,'','',''),(41,0,45,'','',''),(42,0,46,'','',''),(43,0,47,'','',''),(44,0,48,'','',''),(45,0,49,'','',''),(46,0,50,'','',''),(47,0,51,'','',''),(48,0,52,'','',''),(49,0,53,'','',''),(50,0,54,'','',''),(51,0,55,'','',''),(52,0,56,'','',''),(53,0,57,'','',''),(54,0,58,'','','');
/*!40000 ALTER TABLE `rooms_bathroom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_bedroom_1`
--

DROP TABLE IF EXISTS `rooms_bedroom_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_bedroom_1` (
  `bedroom_1_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_1_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_1`
--

LOCK TABLES `rooms_bedroom_1` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_1` DISABLE KEYS */;
INSERT INTO `rooms_bedroom_1` VALUES (1,0,5,'in good conditionmmmmmmmmmmm','in bad ','','mmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmm','mmmmmmmmmmmm'),(2,0,6,'in good conditionmmmmmmmmmmm','in bad ','','mmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmm','mmmmmmmmmmmm'),(3,0,1,'','','','','','',''),(4,0,8,'','','','','','',''),(5,0,9,'','','','','','',''),(6,0,10,'','','','','','',''),(7,0,11,'','','','','','',''),(8,0,12,'','','','','','',''),(9,0,13,'','','','','','',''),(10,0,14,'','','','','','',''),(11,0,15,'','','','','','',''),(12,0,16,'','','','','','',''),(13,0,17,'','','','','','',''),(14,0,18,'','','','','','',''),(15,0,19,'','','','','','',''),(16,0,20,'','','','','','',''),(17,0,21,'','','','','','',''),(18,0,22,'','','','','','',''),(19,0,23,'','','','','','',''),(20,0,24,'','','','','','',''),(21,0,25,'','','','','','',''),(22,0,26,'','','','','','',''),(23,0,27,'','','','','','',''),(24,0,28,'','','','','','',''),(25,0,29,'','','','','','',''),(26,0,30,'','','','','','',''),(27,0,31,'','','','','','',''),(28,0,32,'','','','','','',''),(29,0,33,'','','','','','',''),(30,0,34,'','','','','','',''),(31,0,35,'','','','','','',''),(32,0,36,'','','','','','',''),(33,0,37,'','','','','','',''),(34,0,38,'','','','','','',''),(35,0,39,'','','','','','',''),(36,0,40,'','','','','','',''),(37,0,41,'','','','','','',''),(38,0,42,'','','','','','',''),(39,0,43,'','','','','','',''),(40,0,44,'','','','','','',''),(41,0,45,'','','','','','',''),(42,0,46,'','','','','','',''),(43,0,47,'','','','','','',''),(44,0,48,'','','','','','',''),(45,0,49,'','','','','','',''),(46,0,50,'','','','','','',''),(47,0,51,'','','','','','',''),(48,0,52,'','','','','','',''),(49,0,53,'','','','','','',''),(50,0,54,'','','','','','',''),(51,0,55,'','','','','','',''),(52,0,56,'','','','','','',''),(53,0,57,'','','','','','',''),(54,0,58,'','','','','','','');
/*!40000 ALTER TABLE `rooms_bedroom_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_bedroom_2`
--

DROP TABLE IF EXISTS `rooms_bedroom_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_bedroom_2` (
  `bedroom_2_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_2_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_2`
--

LOCK TABLES `rooms_bedroom_2` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_2` DISABLE KEYS */;
INSERT INTO `rooms_bedroom_2` VALUES (1,0,5,'mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmm'),(3,0,1,'','','','','','',''),(4,0,8,'','','','','','',''),(5,0,9,'','','','','','',''),(6,0,10,'','','','','','',''),(7,0,11,'','','','','','',''),(8,0,12,'','','','','','',''),(9,0,13,'','','','','','',''),(10,0,14,'','','','','','',''),(11,0,15,'','','','','','',''),(12,0,16,'','','','','','',''),(13,0,17,'','','','','','',''),(14,0,18,'','','','','','',''),(15,0,19,'','','','','','',''),(16,0,20,'','','','','','',''),(17,0,21,'','','','','','',''),(18,0,22,'','','','','','',''),(19,0,23,'','','','','','',''),(20,0,24,'','','','','','',''),(21,0,25,'','','','','','',''),(22,0,26,'','','','','','',''),(23,0,27,'','','','','','',''),(24,0,28,'','','','','','',''),(25,0,29,'','','','','','',''),(26,0,30,'','','','','','',''),(27,0,31,'','','','','','',''),(28,0,32,'','','','','','',''),(29,0,33,'','','','','','',''),(30,0,34,'','','','','','',''),(31,0,35,'','','','','','',''),(32,0,36,'','','','','','',''),(33,0,37,'','','','','','',''),(34,0,38,'','','','','','',''),(35,0,39,'','','','','','',''),(36,0,40,'','','','','','',''),(37,0,41,'','','','','','',''),(38,0,42,'','','','','','',''),(39,0,43,'','','','','','',''),(40,0,44,'','','','','','',''),(41,0,45,'','','','','','',''),(42,0,46,'','','','','','',''),(43,0,47,'','','','','','',''),(44,0,48,'','','','','','',''),(45,0,49,'','','','','','',''),(46,0,50,'','','','','','',''),(47,0,51,'','','','','','',''),(48,0,52,'','','','','','',''),(49,0,53,'','','','','','',''),(50,0,54,'','','','','','',''),(51,0,55,'','','','','','',''),(52,0,56,'','','','','','',''),(53,0,57,'','','','','','',''),(54,0,58,'','','','','','','');
/*!40000 ALTER TABLE `rooms_bedroom_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_bedroom_3`
--

DROP TABLE IF EXISTS `rooms_bedroom_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_bedroom_3` (
  `bedroom_3_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_3_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_3`
--

LOCK TABLES `rooms_bedroom_3` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_3` DISABLE KEYS */;
INSERT INTO `rooms_bedroom_3` VALUES (1,0,5,'mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmm','mmmmmmmmmmm','mmmmmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmm','mmmmmmmmmmm','mmmmmmmmmmmmmmmmmm'),(3,0,9,'','','','','','',''),(4,0,10,'','','','','','',''),(5,0,11,'','','','','','',''),(6,0,12,'','','','','','',''),(7,0,13,'','','','','','',''),(8,0,14,'','','','','','',''),(9,0,15,'','','','','','',''),(10,0,16,'','','','','','',''),(11,0,17,'','','','','','',''),(12,0,18,'','','','','','',''),(13,0,19,'','','','','','',''),(14,0,20,'','','','','','',''),(15,0,21,'','','','','','',''),(16,0,22,'','','','','','',''),(17,0,23,'','','','','','',''),(18,0,24,'','','','','','',''),(19,0,31,'','','','','','',''),(20,0,32,'','','','','','',''),(21,0,33,'','','','','','',''),(22,0,34,'','','','','','',''),(23,0,38,'','','','','','',''),(24,0,39,'','','','','','',''),(25,0,42,'','','','','','',''),(26,0,43,'','','','','','',''),(27,0,44,'','','','','','',''),(28,0,45,'','','','','','',''),(29,0,46,'','','','','','',''),(30,0,47,'','','','','','',''),(31,0,48,'','','','','','',''),(32,0,49,'','','','','','',''),(33,0,50,'','','','','','',''),(34,0,51,'','','','','','',''),(35,0,52,'','','','','','',''),(36,0,53,'','','','','','',''),(37,0,54,'','','','','','',''),(38,0,55,'','','','','','',''),(39,0,56,'','','','','','',''),(40,0,57,'','','','','','',''),(41,0,58,'','','','','','','');
/*!40000 ALTER TABLE `rooms_bedroom_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_bedroom_4`
--

DROP TABLE IF EXISTS `rooms_bedroom_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_bedroom_4` (
  `bedroom_4_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_4_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_4`
--

LOCK TABLES `rooms_bedroom_4` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_4` DISABLE KEYS */;
INSERT INTO `rooms_bedroom_4` VALUES (1,0,5,'mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(3,0,9,'','','','','','',''),(4,0,10,'','','','','','',''),(5,0,11,'','','','','','',''),(6,0,12,'','','','','','',''),(7,0,13,'','','','','','',''),(8,0,14,'','','','','','',''),(9,0,15,'','','','','','',''),(10,0,16,'','','','','','',''),(11,0,17,'','','','','','',''),(12,0,18,'','','','','','',''),(13,0,19,'','','','','','',''),(14,0,20,'','','','','','',''),(15,0,21,'','','','','','',''),(16,0,22,'','','','','','',''),(17,0,23,'','','','','','',''),(18,0,24,'','','','','','',''),(19,0,31,'','','','','','',''),(20,0,32,'','','','','','',''),(21,0,33,'','','','','','',''),(22,0,34,'','','','','','',''),(23,0,38,'','','','','','',''),(24,0,39,'','','','','','',''),(25,0,42,'','','','','','',''),(26,0,43,'','','','','','',''),(27,0,44,'','','','','','',''),(28,0,45,'','','','','','',''),(29,0,46,'','','','','','',''),(30,0,47,'','','','','','',''),(31,0,48,'','','','','','',''),(32,0,49,'','','','','','',''),(33,0,50,'','','','','','',''),(34,0,51,'','','','','','',''),(35,0,52,'','','','','','',''),(36,0,53,'','','','','','',''),(37,0,54,'','','','','','',''),(38,0,55,'','','','','','',''),(39,0,56,'','','','','','',''),(40,0,57,'','','','','','',''),(41,0,58,'','','','','','','');
/*!40000 ALTER TABLE `rooms_bedroom_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_kitchen`
--

DROP TABLE IF EXISTS `rooms_kitchen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_kitchen` (
  `kitchen_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`kitchen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_kitchen`
--

LOCK TABLES `rooms_kitchen` WRITE;
/*!40000 ALTER TABLE `rooms_kitchen` DISABLE KEYS */;
INSERT INTO `rooms_kitchen` VALUES (1,0,5,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(3,0,1,'','',''),(4,0,8,'','',''),(5,0,9,'','',''),(6,0,10,'','',''),(7,0,11,'','',''),(8,0,12,'','',''),(9,0,13,'','',''),(10,0,14,'','',''),(11,0,15,'','',''),(12,0,16,'','',''),(13,0,17,'','',''),(14,0,18,'','',''),(15,0,19,'','',''),(16,0,20,'','',''),(17,0,21,'','',''),(18,0,22,'','',''),(19,0,23,'','',''),(20,0,24,'','',''),(21,0,25,'','',''),(22,0,26,'','',''),(23,0,27,'','',''),(24,0,28,'','',''),(25,0,29,'','',''),(26,0,30,'','',''),(27,0,31,'','',''),(28,0,32,'','',''),(29,0,33,'','',''),(30,0,34,'','',''),(31,0,35,'','',''),(32,0,36,'','',''),(33,0,37,'','',''),(34,0,38,'','',''),(35,0,39,'','',''),(36,0,40,'','',''),(37,0,41,'','',''),(38,0,42,'','',''),(39,0,43,'','',''),(40,0,44,'','',''),(41,0,45,'','',''),(42,0,46,'','',''),(43,0,47,'','',''),(44,0,48,'','',''),(45,0,49,'','',''),(46,0,50,'','',''),(47,0,51,'','',''),(48,0,52,'','',''),(49,0,53,'','',''),(50,0,54,'','',''),(51,0,55,'','',''),(52,0,56,'','',''),(53,0,57,'','',''),(54,0,58,'','','');
/*!40000 ALTER TABLE `rooms_kitchen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_servant_quaters`
--

DROP TABLE IF EXISTS `rooms_servant_quaters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_servant_quaters` (
  `servant_quater_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`servant_quater_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_servant_quaters`
--

LOCK TABLES `rooms_servant_quaters` WRITE;
/*!40000 ALTER TABLE `rooms_servant_quaters` DISABLE KEYS */;
INSERT INTO `rooms_servant_quaters` VALUES (1,0,5,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmm','mmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm'),(3,0,9,'','','','','','','',''),(4,0,10,'','','','','','','',''),(5,0,11,'','','','','','','',''),(6,0,12,'','','','','','','',''),(7,0,13,'','','','','','','',''),(8,0,14,'','','','','','','',''),(9,0,15,'','','','','','','',''),(10,0,16,'','','','','','','',''),(11,0,17,'','','','','','','',''),(12,0,18,'','','','','','','',''),(13,0,19,'','','','','','','',''),(14,0,20,'','','','','','','',''),(15,0,21,'','','','','','','',''),(16,0,22,'','','','','','','',''),(17,0,23,'','','','','','','',''),(18,0,24,'','','','','','','',''),(19,0,31,'','','','','','','',''),(20,0,32,'','','','','','','',''),(21,0,33,'','','','','','','',''),(22,0,34,'','','','','','','',''),(23,0,38,'','','','','','','',''),(24,0,39,'','','','','','','',''),(25,0,42,'','','','','','','',''),(26,0,43,'','','','','','','',''),(27,0,44,'','','','','','','',''),(28,0,45,'','','','','','','',''),(29,0,46,'','','','','','','',''),(30,0,47,'','','','','','','',''),(31,0,48,'','','','','','','',''),(32,0,49,'','','','','','','',''),(33,0,50,'','','','','','','',''),(34,0,51,'','','','','','','',''),(35,0,52,'','','','','','','',''),(36,0,53,'','','','','','','',''),(37,0,54,'','','','','','','',''),(38,0,55,'','','','','','','',''),(39,0,56,'','','','','','','',''),(40,0,57,'','','','','','','',''),(41,0,58,'','','','','','','','');
/*!40000 ALTER TABLE `rooms_servant_quaters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_sittingroom`
--

DROP TABLE IF EXISTS `rooms_sittingroom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_sittingroom` (
  `sittingroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `walls` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`sittingroom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_sittingroom`
--

LOCK TABLES `rooms_sittingroom` WRITE;
/*!40000 ALTER TABLE `rooms_sittingroom` DISABLE KEYS */;
INSERT INTO `rooms_sittingroom` VALUES (1,0,5,'mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmm','mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmmm','mmmmmmmmmmmmmmmm'),(3,0,1,'','','','','','',''),(4,0,8,'','','','','','',''),(5,0,9,'','','','','','',''),(6,0,10,'','','','','','',''),(7,0,11,'','','','','','',''),(8,0,12,'','','','','','',''),(9,0,13,'','','','','','',''),(10,0,14,'','','','','','',''),(11,0,15,'','','','','','',''),(12,0,16,'','','','','','',''),(13,0,17,'','','','','','',''),(14,0,18,'','','','','','',''),(15,0,19,'','','','','','',''),(16,0,20,'','','','','','',''),(17,0,21,'','','','','','',''),(18,0,22,'','','','','','',''),(19,0,23,'','','','','','',''),(20,0,24,'','','','','','',''),(21,0,25,'','','','','','',''),(22,0,26,'','','','','','',''),(23,0,27,'','','','','','',''),(24,0,28,'','','','','','',''),(25,0,29,'','','','','','',''),(26,0,30,'','','','','','',''),(27,0,31,'','','','','','',''),(28,0,32,'','','','','','',''),(29,0,33,'','','','','','',''),(30,0,34,'','','','','','',''),(31,0,35,'','','','','','',''),(32,0,36,'','','','','','',''),(33,0,37,'','','','','','',''),(34,0,38,'','','','','','',''),(35,0,39,'','','','','','',''),(36,0,40,'','','','','','',''),(37,0,41,'','','','','','',''),(38,0,42,'','','','','','',''),(39,0,43,'','','','','','',''),(40,0,44,'','','','','','',''),(41,0,45,'','','','','','',''),(42,0,46,'','','','','','',''),(43,0,47,'','','','','','',''),(44,0,48,'','','','','','',''),(45,0,49,'','','','','','',''),(46,0,50,'','','','','','',''),(47,0,51,'','','','','','',''),(48,0,52,'','','','','','',''),(49,0,53,'','','','','','',''),(50,0,54,'','','','','','',''),(51,0,55,'','','','','','',''),(52,0,56,'','','','','','',''),(53,0,57,'','','','','','',''),(54,0,58,'','','','','','','');
/*!40000 ALTER TABLE `rooms_sittingroom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_toilet`
--

DROP TABLE IF EXISTS `rooms_toilet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms_toilet` (
  `toilet_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `let_id` int(10) DEFAULT NULL,
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`toilet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_toilet`
--

LOCK TABLES `rooms_toilet` WRITE;
/*!40000 ALTER TABLE `rooms_toilet` DISABLE KEYS */;
INSERT INTO `rooms_toilet` VALUES (1,0,5,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmm'),(2,0,6,'mmmmmmmmmmmmmmmm','mmmmmmmmmmmmmm','mmmmmmmmmmmmm'),(3,0,1,'','',''),(4,0,8,'','',''),(5,0,9,'','',''),(6,0,10,'','',''),(7,0,11,'','',''),(8,0,12,'','',''),(9,0,13,'','',''),(10,0,14,'','',''),(11,0,15,'','',''),(12,0,16,'','',''),(13,0,17,'','',''),(14,0,18,'','',''),(15,0,19,'','',''),(16,0,20,'','',''),(17,0,21,'','',''),(18,0,22,'','',''),(19,0,23,'','',''),(20,0,24,'','',''),(21,0,25,'','',''),(22,0,26,'','',''),(23,0,27,'','',''),(24,0,28,'','',''),(25,0,29,'','',''),(26,0,30,'','',''),(27,0,31,'','',''),(28,0,32,'','',''),(29,0,33,'','',''),(30,0,34,'','',''),(31,0,35,'','',''),(32,0,36,'','',''),(33,0,37,'','',''),(34,0,38,'','',''),(35,0,39,'','',''),(36,0,40,'','',''),(37,0,41,'','',''),(38,0,42,'','',''),(39,0,43,'','',''),(40,0,44,'','',''),(41,0,45,'','',''),(42,0,46,'','',''),(43,0,47,'','',''),(44,0,48,'','',''),(45,0,49,'','',''),(46,0,50,'','',''),(47,0,51,'','',''),(48,0,52,'','',''),(49,0,53,'','',''),(50,0,54,'','',''),(51,0,55,'','',''),(52,0,56,'','',''),(53,0,57,'','',''),(54,0,58,'','','');
/*!40000 ALTER TABLE `rooms_toilet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffDetails`
--

DROP TABLE IF EXISTS `staffDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffDetails` (
  `staffId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userLevel` int(11) NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffDetails`
--

LOCK TABLES `staffDetails` WRITE;
/*!40000 ALTER TABLE `staffDetails` DISABLE KEYS */;
INSERT INTO `staffDetails` VALUES (1,'winnie','wndessy@gmail.com','winnie',0),(2,'','','alex',0),(3,'','','alex',0),(4,'','','€´\n§\nz¤',0),(5,'','','ÿ5o£I‡	WŽ',0),(6,'','','ÿ–²7p.I”ý',0),(7,'winnie','wndessy@gmail.com','123',1),(8,'winnie','wndessy@gmail.com','ÿGè`î|œ]',1),(9,'mimi','mimi@mimi.com','ÿGè`î|œ]',0),(10,'yeye','yeye','ÿGè`î|œ]',0),(11,'emma','emma@gmail.com','ÿGè`î|œ]',2),(12,'odiyo','bodiyo@gmail.com','ÿGè`î|œ]',3);
/*!40000 ALTER TABLE `staffDetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-21 22:41:53
