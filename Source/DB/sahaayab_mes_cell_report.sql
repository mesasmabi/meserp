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
-- Table structure for table `cell_report`
--

DROP TABLE IF EXISTS `cell_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cell_report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `datestart` varchar(200) DEFAULT NULL,
  `dateend` varchar(200) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  `cell_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cell_report`
--

LOCK TABLES `cell_report` WRITE;
/*!40000 ALTER TABLE `cell_report` DISABLE KEYS */;
INSERT INTO `cell_report` VALUES (2,'Report of Tourism club','Shafna A S','Report of Tourism club which is conducted programs in the year 2022-2023','2022-06-29','2023-03-31','1680071829.pdf','167'),(3,'Annual Report','Chithra P','Annual Report of IEDC','2022-07-30','2023-03-31','1680229706.pdf','134'),(5,'Workshop on Research writing and publishing','Dr. Dhanya P. R.','First workshop in this series, Research writing and publishing was conducted on 21st September 2022 at 9.30 am. Welcome speech was given by Dr.Reshmi S., Member of Research promotion cell and  Assista','2022-09-21','2022-09-21','1680365237.pdf','162'),(6,'Workshop on Mendeley part II  was','Dr. Dhanya P. R.','Second workshop in this series, Mendeley part II was conducted on 19th October 2022 at 2.30 pm. Ms Saliha P.I , Librarian, M.E.S Asmabi College, was the resource person. Welcome speech was given by Dr','2022-10-19','2022-10-19','1680365408.pdf','162'),(7,'Workshop on Research data analysis - SPSS','Dr. Dhanya P. R.','Third workshop in this series, Research data analysis - SPSS was conducted on 29th November 2022 at 1.30 pm. Dr. Nisar M.P., Assistant Professor, Department of Economics, M.E.S Asmabi College, was the','2022-11-29','2022-11-29','1680365573.pdf','162'),(8,'Annual Report 2021-22','Dr. Jisha K.C.','Report on Intellectual Property Right Webinar- January 8th 2022\r\nAs a part of this programme, IPR Cell in association with PG and research Department of botany, PG and Research Department of English j','2021-06-01','2022-05-31','1680366425.pdf','160'),(11,'PTA ASMABI COLLEGE REPORT  2019-20','Dr. V.M. Asma','PTA ASMABI COLLEGE REPORT of 2019-20','2019-06-01','2020-03-31','1680426918.pdf','169'),(12,'PTA ASMABI COLLEGE REPORT 2020-21','Dr. Sefiya','PTA ASMABI COLLEGE REPORT 2020-21','2020-06-01','2021-03-31','1680427228.pdf','169'),(13,'PTA ASMABI COLLEGE REPORT 2021-22','DR. SEFIYA','PTA ASMABI COLLEGE REPORT 2021-22','2021-06-01','2022-03-31','1680427821.pdf','169'),(14,'PTA Report 2022-23','Dr. Sefiya K.M','In the year 2022-23 three PTA executive committee meeting and two general body meeting were conducted. The general body meeting were conducted on 23-11-2022 and  17-03-2023.','2022-06-01','2023-03-31','1680535109.pdf','169'),(15,'Women Cell Report 2022-23',NULL,NULL,'2022-06-01','2023-03-31','1680562894.pdf','164'),(16,'Placement Drive','Anu S','Placement Drive conducted for final year PG students in association with ESAF','2022-10-28',NULL,'1681230976.pdf','150'),(18,'IPR Cell Report 2021-22',NULL,NULL,NULL,NULL,'1694687871.pdf','160'),(19,'IPR Cell Annual Report 2022-23',NULL,NULL,NULL,NULL,'1694687926.pdf','160'),(21,'PTA ASMABI COLLEGE REPORT 2022-23','Dr. Sefiya K M',NULL,'2022-01-06',NULL,'1694794242.pdf','169'),(23,'NIRF OVERALL REPORT 2023','Dr. Kesavan K','NIRF OVERALL level data was submitted by including all essential details','2023-01-12','2023-01-12','1695030807.pdf','141'),(24,'NIRF COLLEGE REPORT 2023','Dr. Kesavan K','NIRF College level data was submitted as per NIRF guidelines','2023-01-12','2023-01-12','1695030961.pdf','141'),(25,'NIRF OVERALL REPORT 2022','Dr. Kesavan K','NIRF DATA  - OVERALL FOR 2022','2022-12-10','2022-12-10','1695045141.pdf','141'),(28,'NIRF COLLEGE REPORT 2022',NULL,'ATTACHED','2022-12-10','2022-12-10','1695045390.pdf','141'),(29,'NIRF OVERALL REPORT 2021',NULL,'ATTACHED',NULL,NULL,'1695045451.pdf','141'),(30,'NIRF COLLEGE REPORT 2021',NULL,NULL,NULL,NULL,'1695045498.pdf','141'),(31,'NIRF OVERALL REPORT 2020',NULL,NULL,NULL,NULL,'1695045547.pdf','141'),(32,'NIRF COLLEGE REPORT 2020',NULL,'ATTACHED','2020-01-18','2020-01-18','1695045772.pdf','141'),(33,'NIRF OVERALL REPORT 2019',NULL,'ATTACHED','2019-01-14','2020-01-14','1695045891.pdf','141'),(34,'NIRF COLLEGE REPORT 2019',NULL,'ATTACHED','2019-01-16','2019-01-16','1695046327.pdf','141'),(35,'NIRF OVERALL REPORT 2018',NULL,'ATTACHED','2018-12-30','2018-12-30','1695046427.pdf','141'),(36,'NIRF COLLEGE REPORT 2018',NULL,'ATTACHED','2018-12-30','2028-12-30','1695046489.pdf','141'),(38,'BMC Annual Report 2018-19','Dr. Jisha K.C.','Annual report of BMC','2018-06-01','2019-05-31','1695393910.pdf','145'),(39,'BMC Annual Report 2019-20','Dr. Jisha K.C.','Annual report of BMC activities 2019-20','2019-06-01','2020-05-31','1695393991.pdf','145'),(40,'Bhoo Mithra Sena Annual Report 2021-22','Dr. Amitha Bachan K.H.','Annual Report 2021-22','2021-06-01','2022-05-31','1697535353.pdf','145'),(41,'Annual Report 2022-23','Dr. Amitha Bachan KH','Annual Report 2022-23','2022-06-01','2023-05-31','1699853333.pdf','145'),(42,'Finearts Annual Report 2018-19','Sabitha M M','Fine Arts Annual Report 2018-2019','2018-04-01','2019-03-30','1702372827.pdf','136'),(43,'Fine Arts Annual Report 2019-2020','Sabitha M M',NULL,'2019-04-01','2020-03-30','1702373036.pdf','136'),(44,'Fine Arts Annual Report 2020-2021','Sabitha M M',NULL,'2020-04-01','2021-03-30','1702373193.pdf','136'),(45,'Fine Arts Annual Report 2021-2022','Sabitha M M',NULL,'2021-04-01','2022-03-30','1702373553.pdf','136'),(46,'annual report',NULL,'Annual report of NSS activities','2022-06-01','2023-03-31','1704556800.pdf','154'),(47,'Annual Report',NULL,'Annual report of NSS Activities on June 2021 to March 2022','2021-06-01','2022-03-31','1704556940.pdf','154'),(48,'REPORT OF GRIEVANCE REDRESSAL CELL',NULL,NULL,'2018-06-04','2019-05-31','1704631395.pdf','133'),(49,'REPORT OF GRIEVANCE REDRESSAL CELL 2019-20',NULL,NULL,'2019-06-01','2020-05-31','1704631550.pdf','133'),(50,'REPORT OF GRIEVANCE REDRESSAL CELL 2020-21',NULL,NULL,'2020-06-01','2021-05-31','1704631647.pdf','133'),(51,'REPORT OF GRIEVANCE REDRESSAL CELL 2021-22',NULL,NULL,'2021-06-01','2022-05-31','1704631810.pdf','133'),(52,'REPORT OF GRIEVANCE REDRESSAL CELL 2022-23',NULL,NULL,'2022-06-01','2023-05-31','1704631925.pdf','133'),(53,'Annual Report 18-19','sakkena M K',NULL,'2018-06-01','2019-03-31','1704636402.pdf','164'),(54,'Annual Report 2019-2020','sakkena M K',NULL,'2019-06-01','2020-03-31','1704636536.pdf','164'),(55,'REPORT OF ICC 2022-23',NULL,NULL,'2022-06-01','2023-05-31','1704699467.pdf','171'),(56,'REPORT OF ICC 2021-22',NULL,NULL,'2021-06-01','2022-05-31','1704699522.pdf','171'),(58,'REPORT OF ICC 2019-20',NULL,NULL,'2019-06-01','2020-05-31','1704699843.pdf','171'),(59,'REPORT OF ICC 2018-19',NULL,NULL,'2018-06-01','2019-05-31','1704699893.pdf','171'),(60,'REPORT OF ICC 2020-21',NULL,NULL,'2020-06-01','2021-05-31','1704699960.pdf','171'),(61,'Annual Report 2020-2021','Dhanya K','In pursuance of the directions issued by the University Grants Commission and Ministry of Human Resource Development, Government of India, the M.E.S Asmabi College has set up the Women Development Cel','2020-06-01','2021-05-31','1704732409.pdf','164'),(62,'Annual Report 2021-2022','Dhanya K',NULL,'2021-06-01','2022-05-31','1704732665.pdf','164'),(63,'Annual Report 18-19','OBC Cell','Annual Report','2018-06-01','2019-03-31','1704777945.pdf','146'),(65,'Annual Report 2020-2021','OBC Cell','Annual Report','2020-06-01','2021-03-31','1704778146.pdf','146'),(66,'Annual Report 2021-2022','OBC Cell','Annual Report','2021-06-01','2022-03-31','1704778238.pdf','146'),(67,'Annual report 2022-2023','OBC Cell','Annual Report','2022-06-01','2023-03-31','1704778352.pdf','146'),(68,'Annual Report 2019-2020','OBC Cell','Annual Report','2019-06-01','2020-03-31','1704778472.pdf','146'),(69,'7.4. Institutional Distinctiveness','A','Alumni Institutional Distinctivness report','2018-06-01','2023-05-31','1704903008.pdf','603'),(70,'Library advisory committee report','Librarian','The Library Advisory Committee has been constituted for advising, developing and monitoring policies for the overall development of the library in terms of collection development, processing, storage ','2019-06-01','2023-05-31','','616');
/*!40000 ALTER TABLE `cell_report` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:20:41
