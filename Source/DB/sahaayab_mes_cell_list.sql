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
-- Table structure for table `cell_list`
--

DROP TABLE IF EXISTS `cell_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cell_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fid` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `from_date` varchar(256) NOT NULL,
  `to_date` varchar(256) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `agenda` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `no_teachers` varchar(11) NOT NULL,
  `no_students` varchar(11) NOT NULL,
  `community_name` varchar(256) NOT NULL,
  `community_details` varchar(256) NOT NULL,
  `panchayath` varchar(256) NOT NULL,
  `ward` varchar(256) NOT NULL,
  `no_male` varchar(256) NOT NULL,
  `no_female` varchar(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `eventtype` varchar(200) NOT NULL,
  `main_criteria` varchar(256) DEFAULT NULL,
  `sub_criteria` varchar(256) NOT NULL,
  `post_date` varchar(256) NOT NULL,
  `male_teacher` int DEFAULT NULL,
  `female_teacher` int DEFAULT NULL,
  `other_teacher` int DEFAULT NULL,
  `male_student` int DEFAULT NULL,
  `female_student` int DEFAULT NULL,
  `other_student` int DEFAULT NULL,
  `specially_abled` int DEFAULT NULL,
  `caste_sc` int DEFAULT NULL,
  `caste_st` int DEFAULT NULL,
  `caste_obc` int DEFAULT NULL,
  `collaborators` varchar(200) DEFAULT NULL,
  `dept` varchar(5) NOT NULL,
  `cell` varchar(5) NOT NULL,
  `promotors` varchar(255) DEFAULT NULL,
  `action` int NOT NULL,
  `ews` int NOT NULL,
  `comm_name` varchar(2000) NOT NULL,
  `comm_details` varchar(2000) NOT NULL,
  `male_parts` int NOT NULL,
  `female_parts` int NOT NULL,
  `practice` varchar(1000) DEFAULT NULL,
  `brochure` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cell_list`
--

LOCK TABLES `cell_list` WRITE;
/*!40000 ALTER TABLE `cell_list` DISABLE KEYS */;
INSERT INTO `cell_list` VALUES (7,16,'‘Fundamentals of Finfish Hatchery Technology’','13-07-2021','13-07-2021','St. Albert\'s College, Ernakulam','<p>Online Training for&nbsp;<span style=\"font-family: Arial, \'sans-serif\'; font-size: 11pt;\">B.Voc. Commercial Aquaculture students of St. Albert\'s College, Ernakulam.</span></p>','<p>Served as Resource Person for Online Training for&nbsp;<span style=\"font-family: Arial, \'sans-serif\'; font-size: 11pt;\">B.Voc. Commercial Aquaculture students of St. Albert\'s College, Ernakulam.</span></p>','NaN','56','','','NA','NA','25','27','Webinar','','Criterion 3- Research, Innovations and Extension','','06-08-2022',0,0,0,25,27,0,0,3,NULL,16,NULL,'','','',1,2,'NA','NA',0,0,NULL,''),(16,45,'Career Guidance ','10-06-2021','10-06-2021','Online','<p>Career Guidance&nbsp;</p>','<p>Interactive session on Career Guidance for UG and PG students of Department of Physics by Mr Zakkariya M V, Director, Career Division, CIGI</p>','0','0','','','','','','','Webinar','Recent',NULL,'','24-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'','','',1,0,'','',0,0,NULL,''),(27,3,'Environemnet Program','05-06-2022','11-06-2022','MES Asabi College','<p>World Environemnt Day Celebration 2022</p>\r\n<p>Make A Difference Program 2022 Launch</p>','<p>World Environemnt Day Celebration 2022</p>\r\n<p>Make A Difference Program 2022 Launch</p>','3','125','','','a','a','11','','Seminar','Upcoming','Criterion 2- Teaching- Learning and Evaluation,Criterion7 –Institutional Values and Best Practice','','24-08-2022',1,1,1,1,1,111,0,1,NULL,1,'Dr. Amitha Bachan K.H','8','127','State',1,1,'SN Puram Panchayath','a',11,0,'Best Practice 2: Support the Marginalised',''),(31,130,'HINDI DAY SEMINAR','13-09-2022','14-09-2022','MES Asmabi College','<p>Hindi Day</p>','<p><strong>Hindi Department of MES Asmabi College Organized Seminar on Hindi Day-Inaugurated by Dr. M.S Muraleedharan,Trustee Board Chairman ,Dhakshina Bharata Hindi Pracharana Sabha.</strong></p>','0','0','','','','','','','Seminar','Upcoming','','','15-09-2022',0,0,0,0,0,0,0,0,NULL,0,'','','','',1,0,'','',0,0,NULL,''),(35,130,'MES Asmabi College Bagged 1st prize -AKCAF-All Kerala Colleges Alumni Forum Coopetition ','25-09-2022','25-09-2022','MES Asmabi College','<p>AKCAF-All Kerala Colleges Alumni Forum&nbsp;</p>','','0','0','','','','','','','Symposium','Upcoming','','','03-10-2022',0,0,0,0,0,0,0,0,NULL,0,'','','','',1,0,'','',0,0,NULL,''),(36,131,'Internal Examinations Starts on 10th Oct 2022 Onwards','10-09-2022','10-09-2022','Lab','<p>Internal Exam</p>','<p>Internal Exam</p>','0','0','','','','','','','Workshop','Upcoming','','','30-09-2022',0,0,0,0,0,0,0,0,NULL,0,'','','','',1,0,'','',0,0,NULL,''),(37,129,'MES Asmabi College Alumni Meet 2022 on 2nd October 2022','13-09-2022','13-09-2022','','<p>tehrshdrth</p>','<p>jrdjdtrjtrs</p>','0','0','','','','','','','Seminar','Upcoming','','','11-10-2022',0,0,0,0,0,0,0,0,NULL,0,'','','','',1,0,'','',0,0,NULL,''),(40,127,'TWST','01-10-2022','01-10-2022','1','<p>1</p>','<p>1</p>','3','3','','','1','1','1','1','Workshop','Recent','Criterion7 –Institutional Values and Best Practice','','01-10-2022',1,1,1,1,1,1,1,1,NULL,1,'Dr. Amitha Bachan K.H','8','127','Central',1,1,'1','1',1,1,'Best Practice 2: Support the Marginalised',''),(53,145,'Environment Day 2022','01-10-2022','01-10-2022','Conference hall','<p>1</p>','<p>1</p>','0','0','','','','','','','Seminar','Recent','Criterion7 –Institutional Values and Best Practice','','01-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr. Amitha Bachan K.H,Dr. Kesavan K.','8','127','State',1,0,'','',0,0,'Best Practice 2: Support the Marginalised',''),(55,140,'kalapattu','01-11-2019','01-11-2019','MES Asmabi college vemballoor','<p>as a part of kerala piravi</p>','','0','0','','','','','','','Workshop','Recent','Criterion 5- Student Support and Progression','','02-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr.Jaisy David,Liji.T','12','140','',1,0,'','',0,0,NULL,''),(57,142,'Devika M Anilkumar, PhD Fellow received Rufford Nature Conservation Grant- Rufford Foundation, UK','15-07-2022','15-07-2022','UK','','','0','0','','','','','','','Workshop','Upcoming','','','03-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr. Amitha Bachan K.H','8','127','',1,0,'','',0,0,NULL,''),(58,130,'MES Asmabi College Alumni Meet 2022 (2nd October 2022)','03-10-2022','03-10-2022','MES Asmabi College ','','','0','0','','','','','','','Workshop','Recent','','','03-10-2022',0,0,0,0,0,0,0,0,NULL,0,'K P Sumedhan','8','130','',1,0,'','',0,0,'Best Practice 1: Experiencial Learning\r\n',''),(59,130,'Devika M Anilkumar, Research Fellow under Dr. K.H. Amitha Bachan achieved Rufford International Conservation Grant for Her Research','05-07-2022','05-07-2022','UK','','','0','0','','','','','','','Workshop','Recent','','','03-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr. Amitha Bachan K.H','8','127','',1,0,'','',0,0,'Best Practice 1: Experiencial Learning\r\n',''),(60,137,'WORLD SUICIDE PREVENTION DAY OBSERVATION 2022','30-09-2022','30-09-2022','College Auditorium','<p>AWARENESS ON SUICIDE PREVENTION&nbsp;</p>','<p>As Part of Suicide Prevention Day observation Counseling cell in Association with department of Psychology and Mental Health Club has conducted a Talk by Asst. Professor Lathif Penath student counselor MES Asmabi College on the topic \" Why do people rom','3','125','','','NA','NA','20','115','Seminar','Recent','Criterion 5- Student Support and Progression','','06-10-2022',0,0,0,20,115,0,0,0,NULL,0,'Lathif Penath,MINSILA HILAL,Farhana Nasar k','26','138','State',1,0,'STUDENT','AWARENESS',20,115,'Best Practice 1: Experiencial Learning\r\n',''),(61,155,'World Environment Day','03-06-2022','03-06-2022','','<p>1. campus cleaning</p>\r\n<p>2. Planting trees</p>','<p class=\"MsoNormal\" style=\"text-align: center;\" align=\"center\"><strong style=\"mso-bidi-font-weight: normal;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: EN-US;\">World Environme','5','0','','','','','30','48','Workshop','Recent','Criterion7 –Institutional Values and Best Practice','','15-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr. Princy Francis, Assistant Professor and Research Guide,Dr. Ansar E B','13,41','','Central',1,0,'','',30,48,NULL,''),(62,128,'IPR WEBNAR','08-01-2022','08-01-2022','NA','<p>WEBINAR ON IPR</p>','<p><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, \'sans-serif\';\">As a part of this programme, IPR Cell in association with PG and research Department of botany, PG and Research Department of English jointly organized a webinar on IP','13','150','','','','','','','Webinar','Recent','Criterion 3- Research, Innovations and Extension','','15-10-2022',0,0,0,35,115,0,0,30,NULL,117,'Dr.Reena Mohamed PM,Dr. Reshmi S','15','128','',1,0,'','',0,0,NULL,''),(63,155,'A meeting on \" Clean Campus Green Campus\"','28-09-2022','28-09-2022','','','<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 36.0pt;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: EN-US;\"><span style=\"mso-spacerun: yes;\">&nbsp; &nbsp; &nbsp; ','12','0','','','','','','','Conference','Recent','Criterion7 –Institutional Values and Best Practice','','17-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Dr. Amitha Bachan K.H,Mohammed Areej E M','8,18','','Central',1,0,'','',0,0,NULL,''),(65,131,'Fifth Semester Degree University Examination November 2022','11-02-2022','30-11-2022','','','<p>Fifth Semester Degree examination scheduled on 2/11/2022 rescheduled to 14/11/2022</p>','0','0','','','','','','','Conference','Upcoming','','','18-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Chithra P','41','131','',1,0,'','',0,0,NULL,''),(66,130,'Manoneetham','14-10-2022','14-10-2022','S N Puram Panchayath','<p><span style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small;\">CMHEP and Department of Psychology Collaburated with Manoneetham programme for S N Puram Panchayath students to reduce the study related stress</span></p>','<p>Manoneetham Programme for Students mental development -</p>','0','0',' ????????????? ?????? ???????? ???????????? ?????????','','S N PURAM','','','','Symposium','Upcoming','','','19-10-2022',0,0,0,0,0,0,0,0,NULL,0,'Lathif Penath,Minsila Hilal,Farhana Nasar K','26','139','',1,0,' ????????????? ?????? ???????? ???????????? ?????????','',0,0,NULL,'');
/*!40000 ALTER TABLE `cell_list` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:05
