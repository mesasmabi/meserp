-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: dbyesterday1.cn2s3sbkzmf4.ap-northeast-1.rds.amazonaws.com    Database: sahaayab_mes
-- ------------------------------------------------------
-- Server version	8.0.33

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `mou`
--

DROP TABLE IF EXISTS `mou`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mou` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `from_date` varchar(200) DEFAULT NULL,
  `to_date` varchar(200) DEFAULT NULL,
  `funding_agency` varchar(200) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL,
  `signed_authority` varchar(200) DEFAULT NULL,
  `authority_name` varchar(200) DEFAULT NULL,
  `principle_investigator` varchar(200) DEFAULT NULL,
  `co_investigator` varchar(200) DEFAULT NULL,
  `granteed` varchar(200) DEFAULT NULL,
  `total_amt` varchar(200) DEFAULT NULL,
  `upload_document` varchar(200) DEFAULT NULL,
  `profile_id` varchar(200) DEFAULT NULL,
  `role` int DEFAULT NULL COMMENT '2: faculty,7:researchguide,8:researchfellow',
  `cell` varchar(200) DEFAULT NULL,
  `research_fellow` varchar(200) DEFAULT NULL,
  `link_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mou`
--

LOCK TABLES `mou` WRITE;
/*!40000 ALTER TABLE `mou` DISABLE KEYS */;
INSERT INTO `mou` VALUES (4,'Mou','Research Extension Centre of Western Ghats Hornbill Foundation','2011-06-02','2031-06-01','Western Ghats Hornbill Foundation','National','Authority 1','Western Ghats Hornbill Foundation','Dr. K.H. Amitha Bachan',NULL,NULL,'NA','1679719662.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(5,'Mou','MoU with Hajee Karutha Rowther Howdia college, Uthamapalayam , Theni, Tamil Nadu','2019-02-15','2024-02-15',NULL,NULL,NULL,'Hajee Karutha Rowther Howdia college, Uthamapalayam , Theni, Tamil Nadu',NULL,NULL,NULL,NULL,'1679721904.pdf','31',2,NULL,NULL,NULL),(6,'Mou','MoU with Ansar Women\'s College, Perumbilavu','2019-07-22','2024-07-22',NULL,NULL,NULL,'Ansar Women\'s College, Perumbilavu',NULL,NULL,NULL,NULL,'','31',2,NULL,NULL,NULL),(7,'Mou','Coastal Restoration','2022-12-19','2023-05-31','BMC Sree Narayana Puram , Grama Panchayath & Kerala State  Biodiversity Board','State','Authority 1','Sree Narayana Puram , Grama Panchayath','Dr. K.H. Amitha Bachan',NULL,'Western Ghats Hornbill Foundation','300000','1679726802.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(8,'Project','Niche Profile based Ecorestoration and Community Based Management of Coastal Ecosystems  Ensuring Sustainable Livelihood','2022-12-19','2023-05-31','BMC Sree Narayana Puram , Grama Panchayath & Kerala State Biodiversity BoardBMC SNP & KSBB','State','Authority 2','Western Ghats Hornbill Foundation','Dr. K.H. Amitha Bachan',NULL,'CEtC of WGHF at MES Asmabi College','300000','1679727407.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(9,'Mou','Mangrove Restoration at Eriyad','2023-03-07','2023-04-07','Eriyad Grama Panchayath','State','Authority 1','Eriyad Grama Panchayath','Dr. K.H. Amitha Bachan',NULL,'Eriyad Grama Panchayath','67500','1679727726.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(10,'Mou','People\'s Biodiversity Register Updation','2022-12-19','2023-05-31','BMC Sree Narayana Puram , Grama Panchayath','State','Authority 1','BMC SN Puram Gram Panchayath','Dr. K.H. Amitha Bachan',NULL,'BMC Sree Narayana Puram , Grama Panchayath','75000','1679728208.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(11,'Mou','Niche Profile Based Ecorestoration of Three Threatened Tree Species in the Low Elevation Habitats','2023-01-26','2023-12-31','Centre for Applied Research and People\'s Engagement','National','Authority 1','Centre for Applied Research and People\'s Engagement (CARPE)','Dr. K.H. Amitha Bachan',NULL,'Devika M Anilkumar','200000','1679728988.pdf','3',2,'127','29','https://www.ecosattva.in/fellowship'),(12,'Fellowship','Prakriti Research Fellowship','2023-01-26','2023-12-31','Centre for Applied Research and People\'s Engagement','National','Authority 1','Centre for Applied Research and People\'s Engagement','Dr. K.H. Amitha Bachan',NULL,'Devika M Anilkumar','200000','1679729149.pdf','3',2,'127','29','https://www.ecosattva.in/fellowship'),(13,'Mou','IUCN Status Assessment, Niche Modelling and Niche Profiling of Endemic Tree Species for Effective Species Recovery and Ecorestoration','2022-05-27','2023-06-30','Rufford Foundation, UK','International','Authority 1','Rufford Foundation UK','Dr. K.H. Amitha Bachan',NULL,'Devika M Anilkumar','580000','1679729733.pdf','3',2,'127','29','https://www.rufford.org/projects/devika-m-anilkumar-madathil/iucn-status-assessment-niche-modelling-and-niche-profiling-endemic-tree-species-effective-species-recovery-and-ecorestoration/'),(14,'Fellowship','Rufford Nature Conservation Grant  UK','2022-05-27','2023-06-30','Rufford Foundation UK','International','Authority 1','Rufford Foundation UK','Dr. K.H. Amitha Bachan',NULL,'Devika M Anilkumar','580000','1679729861.pdf','3',2,'127','29','https://www.rufford.org/projects/devika-m-anilkumar-madathil/iucn-status-assessment-niche-modelling-and-niche-profiling-endemic-tree-species-effective-species-recovery-and-ecorestoration/'),(15,'Mou','Develop a Perspective Strategic Plan for the Conservation, Monitoring and Ecorestoration of the Coastal Ecosystems and Its Biodiversity in the Sn Puram Grama Panchayat','2021-03-22','2022-07-22','Kerala State Biodiversity Board & BMC Sree Narayana Puram','State','Authority 1','BMC Sree Narayana Puram, Grama Panchayath','Dr. K.H. Amitha Bachan','Dr. Girija T. P','BMC Sree Narayana Puram, Grama Panchayath','106000','1679730550.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(16,'Project','Develop a Perspective Strategic Plan for the Conservation, Monitoring and Ecorestoration of the Coastal Ecosystems and Its Biodiversity in the Sn Puram Grama Panchayat','2021-03-22','2022-07-22','Kerala State Biodiversity Board','State','Authority 1','BMC Sree Narayana Puram','Dr. K.H. Amitha Bachan','Dr. Girija T. P','BMC Sree Narayana Puram','106000','1679730681.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(17,'Project','Threatened Status Assessment and Ecorestoration of Endemic Tree Species and Ecosystems in the Western Ghats','2021-10-08','2023-10-07','WGHF, BMC Sree Narayanapuram Grama Panchayath, BGCI, Rufford','National','Authority 1','MES Asmabi College','Dr. K.H. Amitha Bachan',NULL,'Dr. Amitha Bachan K.H.','1580000','1679735238.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(18,'Mou','Threatened Status Assessment and Ecorestoration of Endemic Tree Species and Ecosystems in the Western Ghats','2021-10-22','2023-10-22','WGHF','National','Authority 1','WGHF','Dr. K.H. Amitha Bachan',NULL,'Dr. Amitha Bachan K.H.','1580000','1679735412.pdf','3',2,'127','29','https://hornbillfoundation.org/mycentre/2'),(19,'Mou','Intellectual Property Rights','2022-07-29','2023-07-23','nil','State','Authority 1','Principal','Dr. Jisha K.C','NAZEEMA M. K','na','na','','8',2,'128','39',NULL),(20,'Mou','Memorandum of Understanding with Department of Media and Communication, Majlis Arts and Science College, Puramannur,','2021-04-04','2024-04-01',NULL,NULL,NULL,NULL,'Prof. (Dr.) A. Biju','Mynag Suresh',NULL,NULL,'1681200047.pdf','113',2,NULL,NULL,NULL),(21,'Mou','MEMORANDUM OF UNDERSTANDING SREE NARAYANA PURAM GRAMA PANCHAYATH','2022-06-30','2024-06-30',NULL,NULL,NULL,'MS MOHANAN','Prof. (Dr.) A. Biju',NULL,NULL,NULL,'1681200363.pdf','113',2,NULL,NULL,NULL),(22,'Mou','Muziris Heritage Project','2021-11-15','2027-03-31','Both parties','State','Authority 2','Muziris Heritage Project','Rasmin Mohd Ismail','Shafna A S','THM students',NULL,'1682005241.pdf','229',2,'167',NULL,NULL),(23,'Mou','Team Yathri India Pvt Ltd','2023-03-17','2026-03-31','Team Yathri India Pvt Ltd','State','Authority 2','Team Yathri India Pvt Ltd','Shafna A S','Rasmin Mohd Ismail','THM students',NULL,'1681227122.pdf','229',2,'167',NULL,NULL),(24,'Mou','Speedwings Academy of Aviation Studies','2019-08-05','2025-03-31','MES ASMABI COLLEGE','State','Authority 2','Speedwings Academy of Aviation Studies','Rasmin Mohd Ismail','Shafna A S','THM students','1000/Hour','1682005536.pdf','229',2,'167',NULL,NULL),(25,'Mou','MOU','2021-11-01','2025-05-31',NULL,'International','Authority 1','Ahamed Shabeer','Prof. (Dr.) A. Biju','Abdul Yafiz K.M','Dolphin shipping line ltd',NULL,'1683552128.pdf','67',2,'150',NULL,NULL),(26,'Mou','MoU','2021-08-16','2025-05-31',NULL,'State','Authority 1','Dr,Babu P.K','Prof. (Dr.) A. Biju','Abdul Yafiz K.M','Al shifa College',NULL,'1683554850.pdf','67',2,NULL,NULL,NULL),(27,'Mou','MoU','2020-01-01','2025-05-31',NULL,'State','Authority 1','Iype kurian','Prof. (Dr.) A. Biju','Abdul Yafiz K.M','Aiwa Shipping company',NULL,'1683642990.pdf','67',2,NULL,NULL,NULL),(28,'Mou','Aiwa shipping company','2020-01-01','2022-01-01',NULL,'State',NULL,NULL,'Prof. (Dr.) A. Biju','Abdul Yafiz K.M','B.voc Logistics Management Department',NULL,'','235',2,NULL,NULL,NULL),(29,'Mou','MoU AGREEMENT FOR ACADEMIC COOPERATION with Skill Developer, Chennai','2023-04-12','2028-04-11',NULL,'National','Authority 1','Principal, MES Asmabi College',NULL,NULL,NULL,NULL,'1687254142.pdf','156',2,NULL,NULL,NULL),(30,'Mou','MOU for Academic Workshop, Placement etc. with Zoople Technologies, Kochi','2023-01-18','2028-01-18',NULL,'State','Authority 1','Principal, MES Asmabi College',NULL,NULL,NULL,NULL,'1687254487.pdf','156',2,NULL,NULL,NULL),(31,'Mou','MOU for Add on Course with GrapesGenix Technical Solutions, Thrissur','2022-07-28','2027-07-28',NULL,'State','Authority 1','Principal, MES Asmabi College',NULL,NULL,NULL,NULL,'1687255207.pdf','156',2,NULL,NULL,NULL),(32,'Mou','FlyCreative Pvt Ltd','2023-04-26','2027-04-26',NULL,'State','Authority 1','FlyCreative Pvt Ltd',NULL,NULL,NULL,NULL,'1690473706.pdf','229',2,NULL,NULL,NULL),(33,'Mou','MoU with Earth Sense Recycle Pvt. Ltd., Palakkad','2023-03-01','2023-03-01',NULL,'State',NULL,'Earth Sense Recycle Pvt. Ltd., Palakkad',NULL,NULL,NULL,NULL,'1694061537.pdf','103',2,'155',NULL,NULL),(34,'Mou','MoU with Kerala State Electronics Development Corporation Ltd.','2023-03-02','2023-03-02',NULL,'State',NULL,NULL,NULL,NULL,NULL,NULL,'1694062392.pdf','103',2,NULL,NULL,NULL),(35,'Mou','MOU with Scuba, Cochin, Kochi','2023-02-20','2028-03-31',NULL,'National','Authority 2','Scuba Cochin, Kochi',NULL,NULL,NULL,NULL,'1694069151.pdf','160',2,NULL,NULL,NULL),(36,'Mou','MEMORANDUM OF UNDERSTANDING SREE NARAYANAPURAM PANCHAYATH AND DEPARTMENT OF PSYCHOLOGY MES ASMABI COLLEGE, P VEMBALLUR','2022-10-14','2025-06-01',NULL,'State','Authority 2','M S MOHANAN PRESIDENT SREE NARAYANAPURAM GRAMA PANCHAYATH KODUNGALLOOR','Prof. (Dr.) A. Biju','Lathif Penath',NULL,NULL,'1694079300.pdf','197',2,'139',NULL,NULL),(37,'Project','Assessment of Impact of flood/landslide on Biodiversity and developing methodology for long-term monitoring and evaluation of changes in the ecosystem and biodiversity: A case study in the Athirapilly','2018-12-17','2019-09-02','KSBB','State','Authority 1','MES Asmabi College','Dr. K.H. Amitha Bachan',NULL,'Kerala State Biodiversity Board','607200','1694414332.pdf','3',2,'127','8','https://web.cdit.org/ksbb/wp-content/uploads/2023/02/Amithab_KSBB_Final_opt.pdf'),(38,'Mou','Sports training partnership','2022-02-11','2027-02-10','nil','State','Authority 1','Dr. A.Biju','Lt. M.B.Bindil',NULL,NULL,'nil','1694623085.pdf','42',2,'602',NULL,NULL),(40,'Project','Environmental perspectives in Sufi Poetry','2011-06-01','2012-06-01','UGC','National',NULL,NULL,'Dr. Ranjith M',NULL,NULL,'100000','','242',2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `mou` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-14 12:22:55
