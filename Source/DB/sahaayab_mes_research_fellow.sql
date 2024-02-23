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
-- Table structure for table `research_fellow`
--

DROP TABLE IF EXISTS `research_fellow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `research_fellow` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `guardian` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `date_of_join` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `research_centre` varchar(11) DEFAULT NULL,
  `guide_name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `research_title` varchar(200) DEFAULT NULL,
  `subject_one` varchar(200) DEFAULT NULL,
  `subject_two` varchar(200) DEFAULT NULL,
  `subject_three` varchar(200) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `reg_award` varchar(200) DEFAULT NULL,
  `memo` varchar(200) DEFAULT NULL,
  `pqe` varchar(200) DEFAULT NULL,
  `research_award` varchar(200) DEFAULT NULL,
  `is_belongs_to_faculty` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `research_fellow`
--

LOCK TABLES `research_fellow` WRITE;
/*!40000 ALTER TABLE `research_fellow` DISABLE KEYS */;
INSERT INTO `research_fellow` VALUES (8,'SREEHARI S NAIR','N SIVAN NAIR','1995-09-21','2019-04-12','Male','8547394911',NULL,'Botany','4','17','Ph.D. (full-time)','TAXONOMY, MOLECULAR PHYLOGENY AND ECOLOGICAL FUNCTIONS IN FOREST DYNAMICS OF FICUS L. (MORACEAE) IN THE WESTERN GHATS','FICUS','TAXONOMY','ECOLOGY AND PHYLOGENY','659995841.jpg','6663531674811047.pdf','4928951674811047.pdf','1220661674811047.pdf',NULL,'No'),(9,'DEVIKRISHNA C S','Sughesh Babu C S','1991-09-15','2016-11-08','Female','9497089706','csdevi777@gmail.com','Botany','4','24','Ph.D. (full-time)','Algal Flora of Karuvannur River, Thrissur District, Kerala.','Algal taxonomy','Water quality','River','1674811223.jpg','6618051674811223.pdf','4903071674811223.pdf','7111141674811223.pdf','','No'),(10,'BHAVYASREE P S','RATHEESH T P','1994-03-26','2021-06-29','Female','7558866848','bhavyasreeps1994@gmail.com','Botany','4','25','Ph.D. (full-time)','EFFICACY OF SILVER NANOPARTICLE COMPOSITES FROM THE FAMILY EUPHORBIACEAE ON CANCER CELL LINES','PHARMACOGNOSY','PHYTOCHEMISTRY','NANOPARTICLES','1674811507.jpg','70071674811507.pdf','3256561674811507.pdf','','','No'),(11,'Sabin.P.Q',NULL,'1989-05-21','2019-04-24','Male','9567941475','Sabinasmabi@gmail.com','Botany','4','26','Ph.D. (full-time)',': Phytochemical and Pharmacological profiling of selected species of Apocynaceae','Phytochemistry','extraction, Antimicrobial','cytotoxicity','1674811861.jpg','5339971674811861.pdf','6786391674811861.pdf','','','No'),(12,'ATHIRA TR','AKHILRAJ KA','1996-12-09','2020-11-03','Female','7012955879','trathira48476@gmail.com','Botany','4','18','Ph.D. (full-time)','STUDIES ON PRIMING EFFECTS FOR ABIOTIC AND BIOTIC STRESS TOLERANCE IN                                         CURCUMA LONGA L.','TURMERIC','PRIMING','STRESS RESISTANCE','1674812096.jpg','7055831674812096.pdf','1919061674812096.pdf','','','No'),(13,'Sumitha Thomas','Ajith PC','1992-10-07','2020-06-11','Female','9746175066','sumithat07@gmail.com','Botany','4','18','Ph.D. (full-time)','Priming for abiotic and biotic stress tolerance in Zingiber officinale Rosc.','Biochemistry','Stress physiology','Priming','1674812325.jpg','9197581674812325.pdf','9430521674812325.pdf','','','No'),(14,'SHILPA SUNDARAN','SUNDARAN N. K','1998-10-07','2022-11-29','Female','9497819582','shilpasundaran2@gmail.com','Commerce','6','22','Ph.D. (full-time)','THE EFFECTS OF CUSTOMER INCIVILITY ON SERVICE QUALITY AND WORK WITHDRAWAL BEHAVIOUR AMONG GIG WORKERS IN KERALA','GIG WORKERS','CUSTOMER INCIVILITY','SERVICE QUALITY','1674812372.jpg','1554081674812372.pdf','3307491674812372.pdf','','','No'),(15,'ASWATHY C R','USHA K K','1997-04-08','2023-01-03','Female','9656712498','aswathycr08@gmail.com','Commerce','6','21','Ph.D. (full-time)','TRANSITION OF ONLINE RETAILERS INTO CLICK AND BRICK BUSINESS MODEL IN KERALA','TRANSITION','CLICK AND BRICK','E COMMERCE','1674812696.JPG','4555731674812696.pdf','1854031674812696.pdf','','','No'),(16,'Famina C C','Shihabul Haq M','1991-07-27','2016-05-13','Female','7907293462',NULL,'Botany','4','28','Ph.D. (full-time)','characterisation and biomanagement of banana nematode Radopholus similis Cobb Thorne of Malappuram district, Kerala.','Nematodes','biomanagement','banana','1674813161.jpeg','6117691674813161.pdf','9925481674813161.pdf',NULL,NULL,'No'),(17,'SUDHEESH T V','VASU T K','1992-02-10','2021-06-01','Male','9037560928','sudheeshthekkoott@gmail.com','Commerce','6','21','Ph.D. (part-time)','RETIREMENT FINANCIAL PLANNING AMONG THE STATE GOVERNMENT EMPLOYEES IN KERALA','FINANCIAL PLANNING','GOVERNMENT EMPLOYEES','RETIREMENT PLANS','1674813309.jpg','9302111674813309.pdf','5255191674813309.pdf','','','No'),(18,'Anitha K.T.','Anish Kumar T A','1985-12-04','2019-04-12','Female','9526479060',NULL,'Botany','4','17','Ph.D. (full-time)','STRUCTURE AND COMPOSITION OF HORNBILL NESTING TREE HABITATS AND ITS CONSERVATION SIGNIFICANCE IN THE TROPICAL FORESTS OF SOUTHERN WESTERN GHATS','Hornbill','Conservation','Western Ghats','986206965.jpg','4192221674813447.pdf','9543711674813447.pdf','1682833552C001.pdf',NULL,'No'),(19,'JANITHA N P','N S PADMANABHAN','1994-03-01','2021-06-14','Female','9847433844','janithageetha@gmail.com','Commerce','6','22','Ph.D. (full-time)','AN ASSESSMENT OF SERVICE QUALITY AND CUSTOMER LOYALTY OF SUPPLYCO SUPERMARKETS IN KERALA','SERVICE QUALITY','LOYALTY','CUSTOMER','1674813683.jpg','6605281674813683.pdf','262151674813683.pdf','','','No'),(20,'BHARATHAN SYAM','SYAM LAL P','1996-04-30','2022-11-25','Male','9946070113','bharathansyam88@gmail.com','Commerce','6','23','Ph.D. (full-time)','CONSUMER BEHAVIOUR ON MASSTIGE GENTS\' FASHION  APPAREL BRANDS IN KERALA','CONSUMER BEHAVIOUR','MASSTIGE','APPAREL BRAND','1674813994.JPG','6014111674813994.pdf','5233381674813994.pdf','','','No'),(21,'GOUTHAMI V','Aneesh C S','1994-05-14','2018-09-07','Female','9946500349','gouthamimanjeri@gmail.com','Botany','4','17','Ph.D. (full-time)','ETHNOECOLOGY OF KADAR AND MALASAR ETHNIC COMMUNITY ENDEMIC TO ANAMALAIS OF WESTERN GHATS','ETHNOECOLOGY OF KADAR','MALASAR ETHNIC COMMUNITY','WESTERN GHATS','1674814329.jpeg','1930111674814329.pdf','6095081674814329.pdf','','','No'),(22,'CELIN DIFNA C A','ANTONY C J','1997-07-30','2022-04-19','Female','8289827388','difnaantony143@gmail.com','Commerce','6','21','Ph.D. (full-time)','social media as a platform for the sustainability of micro entrepreneurship','SUSTAINABILITY','SOCIAL ENTREPRENEURSHIP','SOCIAL MEDIA','1674814417.jpg','2153211674814417.pdf','1715821674814417.pdf','','','No'),(23,'Thansila M.M','Musthafa M.P','1995-11-29','2021-06-14','Female','81119 64366','thansilamm@gmail.com','Commerce','6','23','Ph.D. (full-time)','THE EFFECT OF TOTAL QUALITY MANAGEMENT PRACTICES ON PERFORMANCE OF NABH ACCREDITED PRIVATE HOSPITALS IN KERALA','NABH','TOTAL QUALITY MANAGEMENT','ACCREDITED PRIVATE HOSPITALS','1674814879.jpeg','4919991674814879.pdf','5582581674814879.pdf','','','No'),(24,'JASEEL P H','HAMZA P','1994-11-10','2021-08-06','Male','9496964708','JASEELPH@GMAIL.COM','Commerce','6','22','Ph.D. (full-time)','EFFECT OF SENSORY MARKETING ON CONSUMER BUYING BEHAVIOUR IN INTERNATIONAL FOOD CHAIN RESTAURANTS IN KERALA','SENSORY MARKETING','CONSUMER','BUYING BEHAVIOUR','1674815202.jpeg','5230071674815202.pdf','4172061674815202.pdf','','','No'),(25,'RAGA R',NULL,'1986-11-22','2021-08-16','Female','9048889157','ragarmenon@gmail.com','Botany','4','18','Ph.D. (part-time)','CYTOTOXIC, ANTIMICROBIAL AND PHYTOCHEMICAL STUDIES IN Acrostichum aureum L. ( PTERIDACEAE )','CYTOTOXIC','ANTIMICROBIAL','PHYTOCHEMICAL STUDIES','1674815426.jpeg','9043191674815426.pdf','8758211674815426.pdf','','','No'),(26,'Thahasin. N.P','P IBRAHIM','1993-05-17','2022-11-25','Female','9495867188','THAHASINSHEMIL14@GMAIL.COM','Commerce','6','23','Ph.D. (full-time)','HILL TOURISM IN KERALA - COMPETITIVE POSITIONING AND MARKETING STRATEGIES','HILL TOURISM','COMPETITIVE POSITIONING','MARKETING STRATEGIES','755170644.jpg','6918031674815592.pdf','2497481674815592.pdf','','','No'),(27,'THANZEELA EBRAHIM K','SHAJI T A','1978-01-30','2021-05-24','Female','9747670956','THANZEELAEBRAHIM@MESPONNANICOLLEGE.AC.IN','Commerce','6','21','Ph.D. (part-time)','TALENT MANAGEMENT AND ITS INFLUENCE ON ORGANISATIONAL PERFORMANCE AMONG STAFF NURSES','ORGANISATIONAL PERFORMANCE','TALENT MANAGEMENT','ORGANISATION','2127417614.jpg','3021211674816172.pdf','9120591674816172.pdf','','','No'),(28,'Vinu Thomas','K S Thomas','1977-02-17','2016-05-20','Male','7902321507','vinuthms@gmail.com','Botany','4','24','Ph.D. (part-time)','ALGAL FLORA OF INLAND WATER BODIES OF COASTAL AREAS OF MALAPPURAM DISTRICT, KERALA','Algae','Flora','Malappuram','1674817433.jpg','5765591674817433.pdf','4264301674817433.pdf','8193671674817433.pdf','','No'),(29,'Devika M Anilkumar','M Anilkumar','1999-03-15','2022-09-14','Female','9400315889',NULL,'Botany','4','17','Ph.D. (part-time)','NICHE SPECIFICITY AND OVERLAP OF THREATENED ANGIOSPERMS IN THE WESTERN GHATS AND ITS APPLICABILITY IN RED LIST ASSESSMENT, CONSERVATION AND ECORESTORATION','Niche','Conservation','Ecorestoration','1674817809.png','7916731674817809.pdf','1125671674817809.pdf','1683038582C001.pdf',NULL,'No'),(31,'Shaheedha T.M','Shahir M.A','1985-05-28','2016-05-13','Female','9895993276',NULL,'Botany','4','28','Ph.D. (part-time)','Systematic study of endophytic and periphytic cyanobacteria of Thrissur district and bioactive compound assay of selected members','Cyanobacteria','diversity','culture, bioactive compounds','1674818102.jpg','241791674818102.pdf','4725701674818102.pdf',NULL,NULL,'Yes'),(32,'Mohammed Areej EM',NULL,'1985-05-31','2021-10-22','Male','9496844901','mohammedareejem@gmail.com','Botany','4','18','Ph.D. (part-time)','Phytochemical Studies and Molecular Characterisation of Reinwardtiodendron anamalaiense (Bedd.) Mabb. (Meliaceae)','Phytochemicals','antimicrobial','Cytotoxicity','1674818953.jpg','3966351674818953.pdf','9946991674818953.pdf','','','Yes'),(33,'Shabnam Sakiya P S',NULL,'1997-09-09','2022-05-26','Female','7907604673','shabnamsakiya@gmail.com','English','5','20','Ph.D. (full-time)','THE DYNAMICS OF SPATIALITY IN ABDUL                                                      RAZAK GURNAH’S AFTERLIVES, BY THE SEA                                                      AND PARADISE','Geocriticism','Post colonialism','Cartography','1674818983.jpg','1391611674818983.pdf','5804631674818983.pdf','','','No'),(34,'Pooja Suresh','Sathi','1994-10-17','2018-09-07','Female','9497356174',NULL,'Botany','4','17','Ph.D. (full-time)','RIPARIAN FOREST COMPOSITION, CLASSIFICATION AND MAPPING IN RELATION TO BIOCLIMATE TOWARDS AN ECORESTORATION PROTOCOL : A CASE STUDY IN THE ANAMALAI LANDSCAPE UNIT, WESTERN GHATS','Riparian','Mapping','Anamalai','1674818990.jpg','6203761674818990.pdf','9505991674818990.pdf','1793431674818990.pdf',NULL,'No'),(35,'NAZEEMA M K',NULL,'0087-05-15','2020-02-24','Female','8606335137','nasi0814@gmail.com','Botany','4','30','Ph.D. (part-time)','EVALUATION OF PHYTOREMEDIATION POTENTIAL OF SELECTED PLANTS INHABITING THE POLLUTED AREAS OF TIRUPUR DIST., TAMIL NADU','Heavy metal stress','Proline','Phenolics','1676441707.jpeg','4312171676441707.pdf','9394651676441707.pdf','9245451676441707.pdf','','Yes'),(39,'xxxxxxx','xxx','2023-02-16','2023-02-17','Male','1223334','xxx@gmail.com','English','5','20','Ph.D. (full-time)','xxxx','xx','xx','xx','','','','','','No'),(40,'Smriti Sudarshanan V',NULL,'2023-04-18','2023-04-19','Female','+91 90372 17849','smrithisudarsanan93@gmail.com','English','5','20',NULL,'English',NULL,NULL,NULL,'','','','','','No'),(41,'MAHMOOD ASLAM K',NULL,'1981-02-21','2021-06-29','Male','9947195160','mahmoodaslamk@gmail.com','Commerce','6','23','Ph.D. (part-time)','NEEDS AND READINESS FOR ISLAMIC BANKING: AN      ASSESSMENT IN THE LENS OF THEORIES OF PLANNED BEHAVIOUR AND REASONED ACTION WITH READINESS RULER',NULL,NULL,NULL,'','','','','','No'),(45,'Chithra P',NULL,'1986-12-26','2021-06-24','Female','9847440933',NULL,'Commerce','6','22','Ph.D. (part-time)','Antecedents and outcomes of organisational citizenship behaviour among aided college teachers in kerala',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Yes');
/*!40000 ALTER TABLE `research_fellow` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:49
