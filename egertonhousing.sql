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
  PRIMARY KEY (`ApplicantId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicantsdetails`
--

LOCK TABLES `applicantsdetails` WRITE;
/*!40000 ALTER TABLE `applicantsdetails` DISABLE KEYS */;
INSERT INTO `applicantsdetails` VALUES (1,'Telewa','Emmanuel','Male','Engaged',28437394,'emmanuelt2009@gmail.com','123',1111,'Computer Science ',6,'2010-11-30','Department','No','Winnie',1,'0000-00-00 00:00:00','Not'),(2,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',7,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(3,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',8,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(4,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',9,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(5,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(6,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(7,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','njj',3828292,'estates',10,'2010-11-30','6','','8',1,'0000-00-00 00:00:00','Not'),(8,'james','mnyole','Male ','Single ',2147483647,'jmnyole@gmail.com','123',387288,'2872828',13,'2010-11-30','winnie','','mr keband',1,'0000-00-00 00:00:00','Not'),(9,'james','mnyole','Male ','Single ',2147483647,'jmnyolei@gmail.com','123',387288,'2872828',10,'2010-11-30','winnie','','mr keband',1,'0000-00-00 00:00:00','Not'),(10,'aggy','bollo','Female','Single ',111,'aggy@gmail.com','123',111,'ssss',13,'2010-11-30','36','','222',1,'0000-00-00 00:00:00','Not'),(11,'naphtally','ndessy','Male ','Married',23412322,'nnn@gmail.com','123',12341,'',11,'2010-11-30','','','67654563632',1,'0000-00-00 00:00:00','Not'),(12,'','','','',0,'','',0,'',11,'2010-11-30','','','',1,'0000-00-00 00:00:00','Not'),(13,'test3','test3','Male ','Married',141414,'123@egerton.ac.ke','123',141414,'carpenter',6,'2010-11-30','estates','','mungai',1,'0000-00-00 00:00:00','Not');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `children`
--

LOCK TABLES `children` WRITE;
/*!40000 ALTER TABLE `children` DISABLE KEYS */;
INSERT INTO `children` VALUES (9,1,'karama','mnyole','0000-00-00','female','No'),(9,3,'peter','mnyole','0000-00-00','male','No'),(9,4,'karis','mnyole','0000-00-00','male','No'),(9,5,'karis','mnyole','0000-00-00','male','No'),(10,6,'nyasudan','mnyole','0000-00-00','male','No'),(10,7,'nyasudan','akawambo','0000-00-00','female','No'),(10,8,'nyasudan','akawambo','0000-00-00','female','No'),(11,9,'kenedy','akawambo','0000-00-00','female','No'),(11,10,'kenedy','hoiaioa','0000-00-00','female','No');
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
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_allocation`
--

LOCK TABLES `house_allocation` WRITE;
/*!40000 ALTER TABLE `house_allocation` DISABLE KEYS */;
INSERT INTO `house_allocation` VALUES (1,2,2,'2014-04-09 11:59:03'),(2,1,1,'2014-04-09 11:59:12'),(3,0,0,'0000-00-00 00:00:00'),(4,0,0,'0000-00-00 00:00:00'),(5,0,0,'0000-00-00 00:00:00'),(6,0,0,'0000-00-00 00:00:00'),(7,0,0,'0000-00-00 00:00:00'),(8,0,0,'0000-00-00 00:00:00'),(9,0,0,'0000-00-00 00:00:00'),(10,0,0,'0000-00-00 00:00:00'),(11,0,0,'0000-00-00 00:00:00'),(12,0,0,'0000-00-00 00:00:00'),(13,0,0,'0000-00-00 00:00:00'),(14,0,0,'0000-00-00 00:00:00'),(15,0,0,'0000-00-00 00:00:00'),(16,0,0,'0000-00-00 00:00:00'),(17,0,0,'0000-00-00 00:00:00'),(18,0,0,'0000-00-00 00:00:00'),(19,0,0,'0000-00-00 00:00:00'),(20,0,0,'0000-00-00 00:00:00'),(21,0,0,'0000-00-00 00:00:00'),(22,0,0,'0000-00-00 00:00:00'),(23,0,0,'0000-00-00 00:00:00'),(24,0,0,'0000-00-00 00:00:00'),(25,0,0,'0000-00-00 00:00:00'),(26,0,0,'0000-00-00 00:00:00'),(27,0,0,'0000-00-00 00:00:00'),(28,0,0,'0000-00-00 00:00:00'),(29,0,0,'0000-00-00 00:00:00'),(30,0,0,'0000-00-00 00:00:00'),(31,0,0,'0000-00-00 00:00:00'),(32,0,0,'0000-00-00 00:00:00'),(33,0,0,'0000-00-00 00:00:00'),(34,0,0,'0000-00-00 00:00:00'),(35,0,0,'0000-00-00 00:00:00'),(36,0,0,'0000-00-00 00:00:00'),(37,0,0,'0000-00-00 00:00:00'),(38,0,0,'0000-00-00 00:00:00'),(39,0,0,'0000-00-00 00:00:00'),(40,0,0,'0000-00-00 00:00:00'),(41,0,0,'0000-00-00 00:00:00'),(42,0,0,'0000-00-00 00:00:00'),(43,0,0,'0000-00-00 00:00:00'),(44,0,0,'0000-00-00 00:00:00'),(45,0,0,'0000-00-00 00:00:00'),(46,0,0,'0000-00-00 00:00:00'),(47,0,0,'0000-00-00 00:00:00'),(48,0,0,'0000-00-00 00:00:00'),(49,0,0,'0000-00-00 00:00:00'),(50,0,0,'0000-00-00 00:00:00'),(51,0,0,'0000-00-00 00:00:00'),(52,0,0,'0000-00-00 00:00:00'),(53,0,0,'0000-00-00 00:00:00'),(54,0,0,'0000-00-00 00:00:00'),(55,0,0,'0000-00-00 00:00:00'),(56,0,0,'0000-00-00 00:00:00'),(57,0,0,'0000-00-00 00:00:00'),(58,0,0,'0000-00-00 00:00:00'),(59,0,0,'0000-00-00 00:00:00'),(60,0,0,'0000-00-00 00:00:00'),(61,0,0,'0000-00-00 00:00:00'),(62,0,0,'0000-00-00 00:00:00'),(63,0,0,'0000-00-00 00:00:00'),(64,0,0,'0000-00-00 00:00:00'),(65,0,0,'0000-00-00 00:00:00'),(66,0,0,'0000-00-00 00:00:00'),(67,0,0,'0000-00-00 00:00:00'),(68,0,0,'0000-00-00 00:00:00'),(69,0,0,'0000-00-00 00:00:00'),(70,0,0,'0000-00-00 00:00:00'),(71,0,0,'0000-00-00 00:00:00'),(72,0,0,'0000-00-00 00:00:00'),(73,0,0,'0000-00-00 00:00:00'),(74,0,0,'0000-00-00 00:00:00'),(75,0,0,'0000-00-00 00:00:00'),(76,0,0,'0000-00-00 00:00:00'),(77,0,0,'0000-00-00 00:00:00'),(78,0,0,'0000-00-00 00:00:00'),(79,0,0,'0000-00-00 00:00:00'),(80,0,0,'0000-00-00 00:00:00'),(81,0,0,'0000-00-00 00:00:00'),(82,0,0,'0000-00-00 00:00:00'),(83,0,0,'0000-00-00 00:00:00'),(84,0,0,'0000-00-00 00:00:00'),(85,0,0,'0000-00-00 00:00:00'),(86,0,0,'0000-00-00 00:00:00'),(87,0,0,'0000-00-00 00:00:00'),(88,0,0,'0000-00-00 00:00:00'),(89,0,0,'0000-00-00 00:00:00'),(90,0,0,'0000-00-00 00:00:00'),(91,0,0,'0000-00-00 00:00:00'),(92,0,0,'0000-00-00 00:00:00'),(93,0,0,'0000-00-00 00:00:00'),(94,0,0,'0000-00-00 00:00:00'),(95,0,0,'0000-00-00 00:00:00'),(96,0,0,'0000-00-00 00:00:00'),(97,0,0,'0000-00-00 00:00:00'),(98,0,0,'0000-00-00 00:00:00'),(99,0,0,'0000-00-00 00:00:00'),(100,0,0,'0000-00-00 00:00:00'),(101,0,0,'0000-00-00 00:00:00'),(102,0,0,'0000-00-00 00:00:00'),(103,0,0,'0000-00-00 00:00:00'),(104,0,0,'0000-00-00 00:00:00'),(105,0,0,'0000-00-00 00:00:00'),(106,0,0,'0000-00-00 00:00:00'),(107,0,0,'0000-00-00 00:00:00'),(108,0,0,'0000-00-00 00:00:00'),(109,0,0,'0000-00-00 00:00:00'),(110,0,0,'0000-00-00 00:00:00'),(111,0,0,'0000-00-00 00:00:00'),(112,0,0,'0000-00-00 00:00:00'),(113,0,0,'0000-00-00 00:00:00'),(114,0,0,'0000-00-00 00:00:00'),(115,0,0,'0000-00-00 00:00:00'),(116,0,0,'0000-00-00 00:00:00'),(117,0,0,'0000-00-00 00:00:00'),(118,0,0,'0000-00-00 00:00:00'),(119,0,0,'0000-00-00 00:00:00'),(120,0,0,'0000-00-00 00:00:00'),(121,0,0,'0000-00-00 00:00:00'),(122,0,0,'0000-00-00 00:00:00'),(123,0,0,'0000-00-00 00:00:00'),(124,0,0,'0000-00-00 00:00:00'),(125,0,0,'0000-00-00 00:00:00'),(126,0,0,'0000-00-00 00:00:00'),(127,0,0,'0000-00-00 00:00:00'),(128,0,0,'0000-00-00 00:00:00'),(129,0,0,'0000-00-00 00:00:00'),(130,0,0,'0000-00-00 00:00:00'),(131,0,0,'0000-00-00 00:00:00'),(132,0,0,'0000-00-00 00:00:00'),(133,0,0,'0000-00-00 00:00:00'),(134,0,0,'0000-00-00 00:00:00'),(135,0,0,'0000-00-00 00:00:00'),(136,0,0,'0000-00-00 00:00:00'),(137,0,0,'0000-00-00 00:00:00'),(138,0,0,'0000-00-00 00:00:00'),(139,0,0,'0000-00-00 00:00:00'),(140,0,0,'0000-00-00 00:00:00'),(141,0,0,'0000-00-00 00:00:00'),(142,0,0,'0000-00-00 00:00:00'),(143,0,0,'0000-00-00 00:00:00'),(144,0,0,'0000-00-00 00:00:00'),(145,0,0,'0000-00-00 00:00:00'),(146,0,0,'0000-00-00 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_applications`
--

LOCK TABLES `house_applications` WRITE;
/*!40000 ALTER TABLE `house_applications` DISABLE KEYS */;
INSERT INTO `house_applications` VALUES (1,13,1),(2,12,2),(3,11,3),(4,10,4);
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
-- Table structure for table `house_general_condition`
--

DROP TABLE IF EXISTS `house_general_condition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_general_condition` (
  `house_general_condition_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  `floor` varchar(200) DEFAULT NULL,
  `doorLock` varchar(200) DEFAULT NULL,
  `wals` varchar(200) DEFAULT NULL,
  `no_of_keys` int(11) DEFAULT NULL,
  PRIMARY KEY (`house_general_condition_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_general_condition`
--

LOCK TABLES `house_general_condition` WRITE;
/*!40000 ALTER TABLE `house_general_condition` DISABLE KEYS */;
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
  `house_id` int(20) NOT NULL,
  `unit_id` int(50) DEFAULT NULL,
  `in_or_out` tinytext NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` date NOT NULL,
  `allocationId` int(11) NOT NULL,
  PRIMARY KEY (`let_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_let_in_and_out`
--

LOCK TABLES `house_let_in_and_out` WRITE;
/*!40000 ALTER TABLE `house_let_in_and_out` DISABLE KEYS */;
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
INSERT INTO `house_units` VALUES (1,1,1,'vacant'),(2,1,2,'vacant'),(3,1,3,'vacant'),(4,1,4,'vacant'),(5,1,6,'vacant'),(6,1,8,'vacant'),(7,2,8,'vacant'),(8,3,8,'vacant'),(9,2,1,'vacant'),(10,2,5,'vacant'),(11,2,7,'vacant'),(12,2,10,'vacant');
/*!40000 ALTER TABLE `house_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houserepair`
--

DROP TABLE IF EXISTS `houserepair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `houserepair` (
  `RepairId` int(11) NOT NULL,
  `houseId` int(11) NOT NULL,
  `repairType` int(11) NOT NULL,
  `EstimatedCost` int(11) NOT NULL,
  `OfficerIncharge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin COMMENT='for documenting repair details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houserepair`
--

LOCK TABLES `houserepair` WRITE;
/*!40000 ALTER TABLE `houserepair` DISABLE KEYS */;
/*!40000 ALTER TABLE `houserepair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_sittingroom`
--

DROP TABLE IF EXISTS `room_sittingroom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_sittingroom` (
  `sittingroom_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`sittingroom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_sittingroom`
--

LOCK TABLES `room_sittingroom` WRITE;
/*!40000 ALTER TABLE `room_sittingroom` DISABLE KEYS */;
/*!40000 ALTER TABLE `room_sittingroom` ENABLE KEYS */;
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
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bathroom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bathroom`
--

LOCK TABLES `rooms_bathroom` WRITE;
/*!40000 ALTER TABLE `rooms_bathroom` DISABLE KEYS */;
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
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_1`
--

LOCK TABLES `rooms_bedroom_1` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_1` DISABLE KEYS */;
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
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_2`
--

LOCK TABLES `rooms_bedroom_2` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_2` DISABLE KEYS */;
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
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_3`
--

LOCK TABLES `rooms_bedroom_3` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_3` DISABLE KEYS */;
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
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bedroom_4_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_bedroom_4`
--

LOCK TABLES `rooms_bedroom_4` WRITE;
/*!40000 ALTER TABLE `rooms_bedroom_4` DISABLE KEYS */;
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
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`kitchen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_kitchen`
--

LOCK TABLES `rooms_kitchen` WRITE;
/*!40000 ALTER TABLE `rooms_kitchen` DISABLE KEYS */;
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
  `sockets` varchar(200) DEFAULT NULL,
  `ceiling` varchar(200) DEFAULT NULL,
  `switches` varchar(200) DEFAULT NULL,
  `lights` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`servant_quater_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_servant_quaters`
--

LOCK TABLES `rooms_servant_quaters` WRITE;
/*!40000 ALTER TABLE `rooms_servant_quaters` DISABLE KEYS */;
/*!40000 ALTER TABLE `rooms_servant_quaters` ENABLE KEYS */;
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
  `electrical` varchar(200) DEFAULT NULL,
  `plumbing` varchar(200) DEFAULT NULL,
  `tiles` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`toilet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_toilet`
--

LOCK TABLES `rooms_toilet` WRITE;
/*!40000 ALTER TABLE `rooms_toilet` DISABLE KEYS */;
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

-- Dump completed on 2014-04-09 19:46:30
