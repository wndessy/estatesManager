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
  `aprovalStatus` varchar(10) NOT NULL DEFAULT 'Not',
  PRIMARY KEY (`ApplicantId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicantsdetails`
--

LOCK TABLES `applicantsdetails` WRITE;
/*!40000 ALTER TABLE `applicantsdetails` DISABLE KEYS */;
INSERT INTO `applicantsdetails` VALUES (1,'Telewa','Emmanuel','Male','Engaged',28437394,'emmanuelt2009@gmail.com','123',1111,'Computer Science ',0,'0000-00-00','Department','No','Winnie','Not'),(2,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'0000-00-00','6','','8','Not'),(3,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'0000-00-00','6','','8','Not'),(4,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'0000-00-00','6','','8','Not'),(5,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'0000-00-00','6','','8','Not'),(6,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','',3828292,'estates',4,'0000-00-00','6','','8','Not'),(7,'winnie','ndessy','Female','Married',28321329,'wndessy@gmail.com','njj',3828292,'estates',4,'0000-00-00','6','','8','Not'),(8,'james','mnyole','Male ','Single ',2147483647,'jmnyole@gmail.com','123',387288,'2872828',10,'0000-00-00','winnie','','mr keband','Not'),(9,'james','mnyole','Male ','Single ',2147483647,'jmnyolei@gmail.com','123',387288,'2872828',10,'0000-00-00','winnie','','mr keband','Not'),(10,'aggy','bollo','Female','Single ',111,'aggy@gmail.com','123',111,'ssss',13,'0000-00-00','36','','222','Not'),(11,'naphtally','ndessy','Male ','Married',23412322,'nnn@gmail.com','123',12341,'',0,'0000-00-00','','','67654563632','Not'),(12,'','','','',0,'','',0,'',0,'0000-00-00','','','','Not'),(13,'test3','test3','Male ','Married',141414,'123@egerton.ac.ke','123',141414,'carpenter',6,'0000-00-00','estates','','mungai','Not');
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
-- Table structure for table `house_applications`
--

DROP TABLE IF EXISTS `house_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house_applications` (
  `aplicationId` int(50) NOT NULL AUTO_INCREMENT,
  `ApplicantId` int(50) NOT NULL,
  `house_id` int(10) DEFAULT NULL,
  `houseType` tinytext,
  PRIMARY KEY (`aplicationId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_applications`
--

LOCK TABLES `house_applications` WRITE;
/*!40000 ALTER TABLE `house_applications` DISABLE KEYS */;
INSERT INTO `house_applications` VALUES (1,11,0,'BF'),(2,11,0,'BH'),(3,11,0,''),(4,11,0,'BF'),(5,11,0,'BH'),(6,0,0,'BF'),(7,0,0,'BH'),(8,11,0,'AH'),(9,11,0,'AH'),(10,11,0,'BH'),(11,11,0,'BH'),(12,11,0,'BH'),(13,11,0,'BH'),(14,11,0,'BH'),(15,11,0,'BH'),(16,11,0,'BH'),(17,11,0,'AH'),(18,13,0,'AH');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_types`
--

LOCK TABLES `house_types` WRITE;
/*!40000 ALTER TABLE `house_types` DISABLE KEYS */;
INSERT INTO `house_types` VALUES (1,'XY',5,2,'false','false','1,7,3',30998,'ttttttttttttttttttttttttttttttttttttttt'),(2,'AH',20,4,'true','true','1,2,3',30998,'ttttttttttttttttttttttttttttttttttttttt');
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
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house_units`
--

LOCK TABLES `house_units` WRITE;
/*!40000 ALTER TABLE `house_units` DISABLE KEYS */;
INSERT INTO `house_units` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,6),(6,1,8),(7,2,8),(8,3,8),(9,2,1),(10,2,5),(11,2,7),(12,2,10);
/*!40000 ALTER TABLE `house_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houseallocation`
--

DROP TABLE IF EXISTS `houseallocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `houseallocation` (
  `applicationId` int(50) NOT NULL,
  `unit_id` int(50) DEFAULT NULL,
  `allocationDate` int(50) NOT NULL,
  `Confirmatiion` int(5) NOT NULL,
  `allocationId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`allocationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houseallocation`
--

LOCK TABLES `houseallocation` WRITE;
/*!40000 ALTER TABLE `houseallocation` DISABLE KEYS */;
/*!40000 ALTER TABLE `houseallocation` ENABLE KEYS */;
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
-- Table structure for table `housesletting`
--

DROP TABLE IF EXISTS `housesletting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `housesletting` (
  `LettingId` int(100) NOT NULL AUTO_INCREMENT,
  `Category_id` int(20) NOT NULL,
  `unit_id` int(50) DEFAULT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `allocationId` int(11) NOT NULL,
  PRIMARY KEY (`LettingId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `housesletting`
--

LOCK TABLES `housesletting` WRITE;
/*!40000 ALTER TABLE `housesletting` DISABLE KEYS */;
/*!40000 ALTER TABLE `housesletting` ENABLE KEYS */;
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

-- Dump completed on 2014-04-02 11:05:06
