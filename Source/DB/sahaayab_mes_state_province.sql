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
-- Table structure for table `state_province`
--

DROP TABLE IF EXISTS `state_province`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `state_province` (
  `state_province_id` int NOT NULL,
  `state_province_code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `state_province_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country_id` int NOT NULL,
  `country_iso_numeric_code` int DEFAULT NULL,
  PRIMARY KEY (`state_province_id`),
  KEY `state_province_country_country_id_fk` (`country_id`),
  CONSTRAINT `state_province_country_country_id_fk` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state_province`
--

LOCK TABLES `state_province` WRITE;
/*!40000 ALTER TABLE `state_province` DISABLE KEYS */;
INSERT INTO `state_province` VALUES (108,'AK','Alaska',236,840),(109,'AL','Alabama',236,840),(110,'AR','Arkansas',236,840),(111,'AZ','Arizona',236,840),(112,'CA','California',236,840),(113,'CO','Colorado',236,840),(114,'CT','Connecticut',236,840),(115,'DC','District of Columbia',236,840),(116,'DE','Delaware',236,840),(117,'FL','Florida',236,840),(118,'GA','Georgia',236,840),(119,'HI','Hawaii',236,840),(120,'IA','Iowa',236,840),(121,'ID','Idaho',236,840),(122,'IL','Illinois',236,840),(123,'IN','Indiana',236,840),(124,'KS','Kansas',236,840),(125,'KY','Kentucky',236,840),(126,'LA','Louisiana',236,840),(127,'MA','Massachusetts[E]',236,840),(128,'MD','Maryland',236,840),(129,'ME','Maine',236,840),(130,'MI','Michigan',236,840),(131,'MN','Minnesota',236,840),(132,'MO','Missouri',236,840),(133,'MS','Mississippi',236,840),(134,'MT','Montana',236,840),(135,'NC','North Carolina',236,840),(136,'ND','North Dakota',236,840),(137,'NE','Nebraska',236,840),(138,'NH','New Hampshire',236,840),(139,'NJ','New Jersey',236,840),(140,'NM','New Mexico',236,840),(141,'NV','Nevada',236,840),(142,'NY','New York',236,840),(143,'OH','Ohio',236,840),(144,'OK','Oklahoma',236,840),(145,'OR','Oregon',236,840),(146,'PA','Pennsylvania',236,840),(147,'PR','Puerto Rico (US Territory)',236,840),(148,'RI','Rhode Island',236,840),(149,'SC','South Carolina',236,840),(150,'SD','South Dakota',236,840),(151,'TN','Tennessee',236,840),(152,'TX','Texas',236,840),(153,'UT','Utah',236,840),(154,'VA','Virginia',236,840),(155,'VI','Virgin Islands (US Territory)',236,840),(156,'VT','Vermont',236,840),(157,'WA','Washington',236,840),(158,'WI','Wisconsin',236,840),(159,'WV','West Virginia',236,840),(160,'WY','Wyoming',236,840),(161,NULL,'Andaman and Nicobar Islands',103,356),(162,NULL,'Andhra Pradesh',103,356),(163,NULL,'Arunachal Pradesh',103,356),(164,NULL,'Assam',103,356),(165,NULL,'Bihar',103,356),(166,NULL,'Chandigarh',103,356),(167,NULL,'Chhattisgarh',103,356),(168,NULL,'Delhi',103,356),(169,NULL,'Goa',103,356),(170,NULL,'Gujarat',103,356),(171,NULL,'Haryana',103,356),(172,NULL,'Himachal Pradesh',103,356),(173,NULL,'Jammu and Kashmir',103,356),(174,NULL,'Jharkhand',103,356),(175,NULL,'Karnataka',103,356),(176,NULL,'Kerala',103,356),(177,NULL,'Lakshadweep',103,356),(178,NULL,'Madhya Pradesh',103,356),(179,NULL,'Maharashtra',103,356),(180,NULL,'Manipur',103,356),(181,NULL,'Meghalaya',103,356),(182,NULL,'Mizoram',103,356),(183,NULL,'Nagaland',103,356),(184,NULL,'Odisha',103,356),(185,NULL,'Puducherry',103,356),(186,NULL,'Punjab',103,356),(187,NULL,'Rajasthan',103,356),(188,NULL,'Sikkim',103,356),(189,NULL,'Tamil Nadu',103,356),(190,NULL,'Telangana',103,356),(191,NULL,'Tripura',103,356),(192,NULL,'Uttar Pradesh',103,356),(193,NULL,'Uttarakhand',103,356),(194,NULL,'West Bengal',103,356);
/*!40000 ALTER TABLE `state_province` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:49
