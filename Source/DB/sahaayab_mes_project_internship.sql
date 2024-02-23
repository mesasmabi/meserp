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
-- Table structure for table `project_internship`
--

DROP TABLE IF EXISTS `project_internship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_internship` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program` varchar(200) DEFAULT NULL,
  `batch` varchar(200) DEFAULT NULL,
  `stname` varchar(200) DEFAULT NULL,
  `stid` varchar(200) DEFAULT NULL,
  `Semester` varchar(200) DEFAULT NULL,
  `title_project` varchar(1000) DEFAULT NULL,
  `supervising_teacher` varchar(200) DEFAULT NULL,
  `internship_note` varchar(200) DEFAULT NULL,
  `name_of_institution` varchar(200) DEFAULT NULL,
  `period` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_internship`
--

LOCK TABLES `project_internship` WRITE;
/*!40000 ALTER TABLE `project_internship` DISABLE KEYS */;
INSERT INTO `project_internship` VALUES (3,'B.Sc. Aquaculture','2019-2022','SAWFA.O.A','6493','Semester 6','Variations in the critical water quality parameters by the introduction of Vallisneria spiralis in aquarium','Dr. Dhanya P R','No',NULL,NULL),(4,'B.Sc. Botany','2019-2022','ARCHA V A','6014','Semester 6','Cultivation methods and varieties of Wheat','Dr. Girija TP','No',NULL,NULL),(5,'B.Sc. Aquaculture','2019-2022','FAMITHA RASHEED','6495',NULL,'A study on gut content of lunar tailed bull’s eye Priacanthus hamrur (Forsskal) along Munambam coast, Kerala','Dr. Kesavan K','No','K M Fisheries','10/3/2022'),(6,'B.Sc. Aquaculture','2019-2022','EDNA EDISON','6550','Semester 6','Variations in the critical water quality parameters by the introduction of Vallisneria spiralis in aquarium','Dr. Dhanya P R','No','NA','NA'),(7,'B.Sc. Aquaculture','2019-2022','ASNITHA.M','6556','Semester 6','A study on gut content of lunar tailed bull’s eye Priacanthus hamrur (Forsskal) along Munambam coast, Kerala','Dr. Kesavan K','No','NA','NA'),(8,'B.Sc. Aquaculture','2019-2022','ARUSHI.T.P','6559','Semester 6','A study of K. M. Fisheries – an export firm, Azhikode','Shibu A Nair','No','NA','NA'),(9,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 4','STUDY OF DIVERSITY OF ANGIOSPERM CLIMBERS IN PALLIKKAL PANCHAYAT, MALAPPURAM DISTRICT, KERALA','Dr.JISHA K.C.','No',NULL,NULL),(10,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 4','STUDY OF DIVERSITY OF ANGIOSPERM CLIMBERS IN PALLIKKAL PANCHAYAT, MALAPPURAM DISTRICT, KERALA','Dr.JISHA K.C.','No',NULL,NULL),(11,'B.Sc. Aquaculture','2019-2022','APARNA.K.A','6561','Semester 6','Omellete noodles from honey prawn','Shibu A Nair','No','NA','NA'),(12,'B.Sc. Aquaculture','2019-2022','ABHISHA.K','6565','Semester 6','Study of model shrimp farm and training centre, Poyya','Shibu A Nair','No','NA','NA'),(13,'B.Sc. Aquaculture','2019-2022','AAGNA','6567','Semester 6','Assessment of water quality parameters in selected brackish water ponds in Poyya, Kodungallur.','Dr. Kesavan K','No','NA','NA'),(14,'B.Sc. Aquaculture','2019-2022','SHAMEEM AYYAPPAN KANDATHIL','6569','Semester 6','A study on gut content of lunar tailed bull’s eye Priacanthus hamrur (Forsskal) along Munambam coast, Kerala','Dr. Kesavan K','No','NA','10/3/2022'),(15,'B.Sc. Aquaculture','2019-2022','ANSHIN PAUL','6591','Semester 6','Variations in the critical water quality parameters by the introduction of Hydrilla verticillata in aquarium','Dr. Dhanya P R','No','NA','NA'),(16,'B.Sc. Aquaculture','2019-2022','AYSHA RISHANA. A. K','6593','Semester 6','A study on gut content of lunar tailed bull’s eye Priacanthus hamrur (Forsskal) along Munambam coast, Kerala','Dr. Kesavan K','No','NA','NA'),(17,'B.Sc. Aquaculture','2019-2022','IRFANA. C S','6594','Semester 6','Variations in the critical water quality parameters by the introduction of Vallisneria spiralis in aquarium','Dr. Dhanya P R','No','NA','NA'),(18,'B.Sc. Aquaculture','2019-2022','KRIDHU PRASAD','6595','Semester 6','Assessment of water quality parameters in selected brackish water ponds in Poyya, Kodungallur','Dr. Kesavan K','No','NA','NA'),(19,'B.Sc. Aquaculture','2019-2022','MOHAMMED NASEEH','6607','Semester 6','Omellete noodles from honey prawn','Shibu A Nair','No','NA','NA'),(20,'B.Sc. Aquaculture','2019-2022','HENNA. V. K','6608','Semester 6','Omellete noodles from honey prawn','Shibu A Nair','No','NA','NA'),(21,'B.Sc. Aquaculture','2019-2022','AYSHA. A. F','6609','Semester 6','A study on gut content of lunar tailed bull’s eye Priacanthus hamrur (Forsskal) along Munambam coast, Kerala','Dr. Kesavan K','No','NA','NA'),(22,'B.Sc. Aquaculture','2019-2022','SARA JOHNY','6611','Semester 6','Variations in the critical water quality parameters by the introduction of Hydrilla verticillata in aquarium','Dr. Dhanya P R','No','NA','NA'),(23,'B.Sc. Aquaculture','2019-2022','NEJMA V A','6615','Semester 6','Study of model shrimp farm and training centre, Poyya','Shibu A Nair','No','NA','NA'),(24,'B.Sc. Aquaculture','2019-2022','SAHADANATH','6612','Semester 6','Omlette Noodle from Honey Prawn','Shibu A Nair','No','NA','NA'),(25,'B.Sc. Aquaculture','2019-2022','NIVED JOSHY','6616','Semester 6','Variations in the critical water quality parameters by the introduction of Pistia stratiotes in aquarium','Dr. Dhanya P R','No','NA','NA'),(26,'B.Sc. Aquaculture','2019-2022','SHINSIYA T A','6618','Semester 6','Omlette Noodle from Honey Prawn','Shibu A Nair','No','NA','NA'),(27,'B.Sc. Aquaculture','2019-2022','SISIRA V','6619','Semester 6','Assessment of water quality parameters in selected brackish water ponds in Poyya, Kodungallur','Dr. Kesavan K','No','NA','NA'),(28,'B.Sc. Aquaculture','2019-2022','SUNISHA K S','6620','Semester 6','Variations in the critical water quality parameters by the introduction of Hydrilla verticillata in aquarium','Dr. Dhanya P R','No','NA','NA'),(29,'B.Sc. Aquaculture','2019-2022','SWETHA SASIKUMAR','6714','Semester 6','Study of model shrimp farm and training centre, Poyya','Shibu A Nair','No','NA','NA'),(30,'B.Sc. Botany','2019-2022','ATHULYA.P.S','6013','Semester 6','Cultivation methods and varieties of Arecanut','Smt. Shemi CB','No',NULL,NULL),(31,'B.Sc. Botany','2019-2022','FATHIMA SABNAM C H','6015','Semester 6','Cultivation methods and varieties of Wheat','Dr. Girija TP','No',NULL,NULL),(32,'B.Sc. Botany','2019-2022','HASEENA K H','6016','Semester 6','Cultivation methods and varieties of Wheat','Dr. Girija TP','No',NULL,NULL),(33,'B.Sc. Botany','2019-2022','MEHJA N M','6017','Semester 6','Cultivation methods and varieties of Wheat','Dr. Girija TP','No',NULL,NULL),(34,'B.Sc. Botany','2019-2022','MOHAMMED ZIDAN V P','6018','Semester 6','Cultivation methods and varieties of Wheat','Dr. Girija TP','No',NULL,NULL),(35,'B.Sc. Botany','2019-2022','BHAVYA MOHAN M','6019','Semester 6','Taxonomic identity, Varieties, Economic importance and Research on Cocos nucifera L. (Araceae) in Kerala','Dr. Amitha Bachan KH','No',NULL,NULL),(36,'B.Sc. Botany','2019-2022','KAVYA SHRI I S','6020','Semester 6','Taxonomic identity, Varieties, Economic importance and Research on Cocos nucifera L. (Araceae) in Kerala','Dr. Amitha Bachan KH','No',NULL,NULL),(37,'B.Sc. Botany','2019-2022','NAVAMI P S','6065','Semester 6','Taxonomic identity, Varieties, Economic importance and Research on Cocos nucifera L. (Araceae) in Kerala','Dr. Amitha Bachan KH','No',NULL,NULL),(38,'B.Sc. Botany','2019-2022','PRASEEDA S','6067','Semester 6','Taxonomic identity, Varieties, Economic importance and Research on Cocos nucifera L. (Araceae) in Kerala','Dr. Amitha Bachan KH','No',NULL,NULL),(39,'B.Sc. Botany','2019-2022','RAMSEENA K A','6070','Semester 6','Taxonomic identity, Varieties, Economic importance and Research on Cocos nucifera L. (Araceae) in Kerala','Dr. Amitha Bachan KH','No',NULL,NULL),(40,'B.Sc. Botany','2019-2022','SAHALA THASNIM M S','6071','Semester 6','Cultivation of Rubber','Dr. Jisha KC','No',NULL,NULL),(41,'B.Sc. Botany','2019-2022','SUBHISHA K','6074','Semester 6','Cultivation of Rubber','Dr. Jisha KC','No',NULL,NULL),(42,'B.Sc. Botany','2019-2022','SUMAYYA K J','6075','Semester 6','Cultivation of Rubber','Dr. Jisha KC','No',NULL,NULL),(43,'B.Sc. Botany','2019-2022','UMMUKULSU K A','6076','Semester 6','Cultivation of Rubber','Dr. Jisha KC','No',NULL,NULL),(44,'B.Sc. Botany','2019-2022','ADITHYA M S','6077','Semester 6','Cultivation methods and varieties of Arecanut','Smt. Shemi CB','No',NULL,NULL),(45,'B.Sc. Botany','2019-2022','BISMINA JABBAR','6078','Semester 6','Cultivation methods and varieties of Arecanut','Smt. Shemi CB','No',NULL,NULL),(46,'B.Sc. Botany','2019-2022','FATHIMA NOORA','6080','Semester 6','Cultivation methods and varieties of Arecanut','Smt. Shemi CB','No',NULL,NULL),(47,'B.Sc. Botany','2019-2022','NAIZAM K S','6023','Semester 6','Cultivation methods and varieties of Arecanut','Smt. Shemi CB','No',NULL,NULL),(48,'B.Sc. Botany','2019-2022','HASNA A A','6146','Semester 6','Cultivation methods and varieties of Cashew','Smt. Nazeema MK','No',NULL,NULL),(49,'B.Sc. Botany','2019-2022','HASNA E M','6148','Semester 6','Cultivation methods and varieties of Cashew','Smt. Nazeema MK','No',NULL,NULL),(50,'B.Sc. Botany','2019-2022','JIBITHRA K B','6155','Semester 6','Cultivation methods and varieties of Cashew','Smt. Nazeema MK','No',NULL,NULL),(51,'B.Sc. Botany','2019-2022','MIGHA','6157','Semester 6','Cultivation methods and varieties of Cashew','Smt. Nazeema MK','No',NULL,NULL),(52,'B.Sc. Botany','2019-2022','RUMSEENA P S','6160','Semester 6','Cultivation of Pepper','Dr. Jisha KC','No',NULL,NULL),(53,'B.Sc. Botany','2019-2022','SAJANA K Y','6161','Semester 6','Cultivation of Pepper','Dr. Jisha KC','No',NULL,NULL),(54,'B.Sc. Botany','2019-2022','SNEHA SANTHOSH N','6163','Semester 6','Cultivation of Pepper','Dr. Jisha KC','No',NULL,NULL),(55,'B.A. English Language & Literature','2019-2022','SANJAY.V','6032','Semester 6','MAKING THEM VISIBLE:A BLACK FEMINIST READING OF GIRL,WOMAN AND OTHER','VEENALEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(56,'B.A. English Language & Literature','2019-2022','GOPIKA.A.J','6033','Semester 6','PSYCHOANALYTIC ELEMENTS HIDDEN IN BROTHERS GRIMM\'S SNOW WHITE AND THE SEVEN DWARFS AND RAPUNZEL : A COMPARATIVE STUDY','SABITHA M M','No','MES ASMABI COLLEGE',NULL),(57,'B.A. English Language & Literature','2019-2022','FATHIMA.V.A','6035','Semester 6','POST COLONIAL FEMINISM IN SUDHA MURTY\'S MAHASWETA AND GENTLY FALLS THE BACULA','MONA V M',NULL,'MES ASMABI COLLEGE',NULL),(58,'B.A. English Language & Literature','2019-2022','HAMEEM ABDUL AZEEZ','6036','Semester 6','ASPECTS OF QUEER THEORY IN THE FICTION  AND FILM ADAPTATION CALL ME BY YOUR NAME','DR. AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(59,'B.A. English Language & Literature','2019-2022','FARSANA SHAHIN.M.A','6038','Semester 6','STRADDLING TO WORLDS: A DIASPORIC READING OF JASMINE DAYS','VEENA LEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(60,'B.A. English Language & Literature','2019-2022','ARYA.P.A','6039','Semester 6','FEMINIST READING OF ENOLA HOLMES : THE CASE OF MISSING MARQUESS','DR. REENA MOHAMED','No','MES ASMABI COLLEGE',NULL),(61,'B.A. English Language & Literature','2019-2022','NIJIYA.P.A','6040','Semester 6','FEMINISM IN NADIYA HASHIMI\'S A HOUSE WITHOUT WINDOWS','DR.AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(62,'B.A. English Language & Literature','2019-2022','ASNA.M.S','6042',NULL,'A WALK INTO THE STRANGE PSYCHE OF HUMAN MIND THROUGH ALBERT CAMUS\'S THE STRANGER','JAMEELATHU K S','No','MES ASMABI COLLEGE',NULL),(63,'M.A. English Language and Literature','2020-2022','APARNA.K.G','6723','Semester 4','A Study of joothan and untouchable;narration of margenalised life of Dalith','SHIJI','No','MES ASMABI COLLEGE',NULL),(64,'M.A. English Language and Literature','2020-2022','ARYA ASOKAN','6724','Semester 4','Archetypal and feminist study of Boons and Curses by Yugal Joshi','shiji','No','MES Asmabi college',NULL),(65,'M.A. English Language and Literature','2020-2022','ARYA ASOKAN','6724','Semester 4','Archetypal and feminist study of Boons and Curses by Yugal Joshi','shiji','No','MES Asmabi college',NULL),(66,'M.A. English Language and Literature','2020-2022','DRISHYA PRADEEP','6725','Semester 4','Locating the artocities against Dalits through Yashica Dutt\'s coming out as Dalit','K A Jameelath','No','MES ASMABI COLLEGE',NULL),(67,'M.A. English Language and Literature','2020-2022','FATHIMA JUMANA.K.N','6726','Semester 4','The inevitablity of art in a healing world: a Postapocalyptic Study on Emily St. John Mandel\'s Station Eleven','K A JAMEELATH','No','MES ASMABI COLLEGE',NULL),(68,'M.A. English Language and Literature','2020-2022','FATHIMA THEBSHI.K','6727','Semester 4','The Magical Silhouttes Of Gender : An Expediation To The World Of Gender Fluidity With Reference To The Selected Works Of Kai Cheng Tom And Anna-Marie Mclemore','MONA VM','No','MES ASMABI COLLEGE',NULL),(69,'M.A. English Language and Literature','2020-2022','HINA FATHIMA.K','6728','Semester 4','An Analyses of Popular Culture In Cultural Studies with Reference to Korean Drama: Squid Game','MONA VM','No','MES ASMABI COLLEGE',NULL),(70,'M.A. English Language and Literature','2020-2022','JINSY NAZRIN','6729','Semester 4','Analysis of Literary Trauma in Thomas Harris\' Silence of the Lambs and Hannibal Rising','REENA MOHAMED PM','No','MES ASMABI COLLEGE',NULL),(71,'B.A. English Language & Literature','2019-2022','SANAL KRISHNA.P.S','6043','Semester 6','A WALK INTO THE STRANGE PSYCHE OF HUMAN MIND THROUGH ALBERT CAMUS\'S THE STRANGER','JAMEELATHU K S','No','MES ASMABI COLLEGE',NULL),(72,'B.A. English Language & Literature','2019-2022','FAHAD.P.A','6044','Semester 6','ANALYSIS OF QUEER THEORY THROUGH CASEY MCQUISTON\'S RED,WHIT AND ROYAL BLUE','SABITHA M M','No','MES ASMABI COLLEGE',NULL),(73,'B.A. English Language & Literature','2019-2022','THASNI.P.J','6046','Semester 6','TRANSGENDER IDENTITY IN IF I WAS YOUR GIRL : AN ANALYSIS','RESHMA T M','No','MES ASMABI COLLEGE',NULL),(74,'B.A. English Language & Literature','2019-2022','AKHILA.O.S','6047','Semester 6','CULTURAL ECOFEMINISM AND PSYCHOANALYTICAL ELEMENTS IN THE QUEEN OF JASMINE COUNTRY BY SHARANYA MANIVANNAN','JAMEELATHU K A','No','MES ASMABI COLLEGE',NULL),(75,'B.A. English Language & Literature','2019-2022','SRIYA.T','6048','Semester 6','A WALK INTO THE STRANGE PSYCHE 0F HUMAN MIND THROUGH ALBERT CAMUS\'S THE STRANGER','JAMEELATHU K S','No','MES ASMABI COLLEGE',NULL),(76,'B.A. English Language & Literature','2019-2022','DEVADEVAN.A.D','6049','Semester 6','REVERBERATING WAVES : A FEMINIST STUDY AND ANALYSIS ON SEXUAL EXPLOITATION WITH REFERENCE TO SUDA MURTY\'S MAHASHWETA','SHIJI IBRAHIM','No','MES ASMABI COLLEGE',NULL),(77,'M.A. English Language and Literature','2020-2022','JUHAINA.K.S','6730','Semester 4','A Testament To Hope And Resilence: A Study On The Strength Of Nature And Human Spirit To Survive Adversity In Kristine Hannah\'s The Four Winds','SABITHA','No','MES ASMABI COLLEGE',NULL),(78,'M.A. English Language and Literature','2020-2022','JUVAIRIYA CHAKKEERI','6731','Semester 4','Representation Of Untouchability In Postcolonial India ; A Study nOf Perumal Murugan\'s Season of the Palm','SHIJI','No','MES ASMABI COLLEGE',NULL),(79,'M.A. English Language and Literature','2020-2022','KAVYA.V.A','6732','Semester 4','Using Magic: Magic Realism in The Girl Who Chased The Moon and Practical Magic','SABITHA','No','MES ASMABI COLLEGE',NULL),(80,'M.A. English Language and Literature','2020-2022','KEERTHANA ANISH','6733','Semester 4','Beloved;The Story Of Boundaries Imposed And  Crossed','SABITHA','No','MES ASMABI C0LLEGE',NULL),(81,'B.A. English Language & Literature','2019-2022','FAMEELA.M.K','6050','Semester 6','FORTIS MULIER: A FEMINIST SUDY OF CHETAN BHAGAT\"S NOVELS ONE INDIAN GIRL , THE GIRL IN ROOM 105 AND HALF GIRLFRIEND','SHIJI IBRAHIM','No','MES ASMABI COLLEGE',NULL),(82,'M.A. English Language and Literature','2020-2022','NISHWA.P.K','6734','Semester 4','Reconstruction of Female identity  Through Traveling: A Study On Rayn Murphy\'s Eat Pray Love And Vikas Bahl\'s Queen','SABITHA','No','MES ASMABI COLLEGE',NULL),(83,'M.A. English Language and Literature','2020-2022','SHANCY YESUDAS','6735','Semester 4','Reading Trauma In Nadia Murad\'s The Last Girl','SABITHA','No','MES ASMABI COLLEGE',NULL),(84,'M.A. English Language and Literature','2020-2022','SILPA .C.M','6736','Semester 4','Struggle For Existence; The Trauma Being An \'other\' in Living Smile Vidya\'s Iam Vidya a Transgenders Journey','MONA VM','No','MES ASMABI COLLEGE',NULL),(85,'M.A. English Language and Literature','2020-2022','SUBHASHINI.K.R','6737','Semester 4','Post Feminist Analysis Of Sudha Moorthi\'s The Mother I Never Knew','MONA VM','No','MES ASMABI COLLEGE',NULL),(86,'M.A. English Language and Literature','2020-2022','SUMAYYA SHAMSU','6738','Semester 3','The Female Son Of Afghanistan:A Study Of Cultural Practice And Queer Theory In Nadiya Hashmi\'s The Pearl That Broke Its Shell And One Half From The East','MONA VM','No','MES ASMABI COLLEGE',NULL),(87,'M.A. English Language and Literature','2020-2022','THAMANNA NASAR','6739','Semester 4','Catographies Of Struggling Bodies And Minds: Exploring The Female Psych In Mahasweta Devi\'s Breast Stories','MONA VM','No','MES ASMABI COLLEGE',NULL),(88,'M.A. English Language and Literature','2020-2022','THASNA NASAR','6740','Semester 4','Blamed, Trivialized And Maligned Voices: A Study Of Indian Mythological Women Characters In Divakar uni\'s The F0rest Of Enchanments','RESMI','No','MES ASMABI COLLEGE',NULL),(89,'M.A. English Language and Literature','2020-2022','ABHISHNA JAYAPRAKASH','6718','Semester 4','A Study On The Racial Prejudices Revealed In Harper Lee\'s To Kill A Mocking Bird','AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(90,'M.A. English Language and Literature','2020-2022','AISWARYA.C.R','6719','Semester 4','Psrchological Trauma : Survival And Resistance In Farida Khalaf\'s A Girl Who escaped ISIS','AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(91,'M.A. English Language and Literature','2020-2022','AISWARYA JOLY','6720','Semester 4','Pschoanalytical Reading Of Araminta Hall\'s Fiction Our Kind Of Cruelity','AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(92,'M.A. English Language and Literature','2020-2022','AMJIDHA JASMIN','6721','Semester 4','Subtextual Narratives Of Ecopoetics: A Study  On Malgudi Days By R K Narrayan','AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(93,'M.A. English Language and Literature','2020-2022','FATHIMA JUMANA.K.N','6472','Semester 4','The Inevitability Of Art In A Healing World: A Postapocalitic Study om Emily St.John Mandel\'s Station Eleven','RESHMI','No','MES ASMABI COLLEGE',NULL),(94,'M.A. English Language and Literature','2020-2022','THRISHNA.A','6741','Semester 4','Breaking That Long SIilence: The QuesT For  Space ,Identity , amd Freedom In Shahi Deshpande\'s The Long Silence','RESHMI','No','MES ASMABI COLLEGE',NULL),(95,'M.A. English Language and Literature','2020-2022','VEENA.P.U','6742','Semester 4','Developing Dalit Feminist Standponit In Urmila Pawar\'s The Weave Of My Life','RESHMI','No','MES ASMABI COLLEGE',NULL),(96,'B.A. English Language & Literature','2019-2022','MURSHIDA.P','6052','Semester 6','PSYCHOANALYTIC ELEMENTS HIDDEN IN BROTHERS  GRIMM\'S SNOW WHITE AND THE SEVEN DWARFS AND RAPUNZEL : A COMPARATIVE STUDY','SABITHA M M','No','MES ASMABI COLLEGE',NULL),(97,'B.A. English Language & Literature','2019-2022','SAFREENA.P.M','6055','Semester 6','TRANSGENDER IDENTITY IN IF I WAS YOUR GIRL : AN ANALYSIS','RESHMA T M','No','MES ASMABI COLLEGE',NULL),(98,'B.A. English Language & Literature','2019-2022','SAMAH MOHAMED','6056','Semester 6','ANALYSIS OF THE NEW WOMAN THROUGH THE FEMALE CHARACTERS IN BRAM STOKER\'S DRACULA','DR. RESHMI S','No','MES ASMABI COLLEGE',NULL),(99,'B.A. English Language & Literature','2019-2022','SWALIHA.K.A','6058','Semester 6','FORTIS MULIER: A FEMINIST STUDY OF CHETAN BHAGAT\'S NOVELS ONE INDIAN GIRL, THE GIRL IN ROOM 105 AND HALF GIRLFRIEND.','SHIJI IBRAHIM','No','MES ASMABI COLLEGE',NULL),(100,'B.C.A','2019-2022','Jasik .m.j','6540','Semester 6','Give it','Anu S','No',NULL,NULL),(101,'B.A. English Language & Literature','2019-2022','P.CHITHRALEKHA','6059','Semester 6','POSTCOLONIAL FEMINISM IN SUDHAMURTY\'S  MAHASWETA AND GENTLY FALLS THE BACULA','MONA V M','No','MES ASMABI COLLEGE',NULL),(102,'B.A. English Language & Literature','2019-2022','ADEEB ABDUL RASHEED','6063','Semester 6','MAKING THEM VISIBLE: A BLACK FEMINIST READING OF GIRL, WOMAN AND OTHER.','VEENALEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(103,'B.A. English Language & Literature','2019-2022','AISWARYA.T.J','6064','Semester 6','EXISTENTIAL PREDICAMENT OF DIASPORIC WOMEN IN LAHIRI\'S  WHEREABOUTS','DR.RESHMI S','No','MES ASMABI COLLEGE',NULL),(104,'B.A. English Language & Literature','2019-2022','ANAGHA.C.M','6066','Semester 6','ANALYSIS OF QUEER THEORY THROUGH MCQUISTON\'S RED, WHITE AND ROYAL BLUE','SABITHA M M','No','MES ASMABI COLLEGE',NULL),(105,'B.A. English Language & Literature','2019-2022','ANJALA ANVAR','6069','Semester 6','ANALYSIS OF THE NEW WOMAN THROUGH THE FEMALE CHARACTERS  IN BRAM STOKER\'S  DRACULA.','DR. RESHMI S','No','MES ASMABI COLLEGE',NULL),(106,'B.A. English Language & Literature','2019-2022','ANJALI.K.S','6085','Semester 6','ANALYSIS OF THE NEW WOMAN THROUGH THE FEMALE CHARACTERS IN BRAM STOKER\'S DRACULA','DR.RESHMI S','No','MES ASMABI COLLEGE',NULL),(107,'B.A. English Language & Literature','2019-2022','ASNA.T.A','6088','Semester 6','MAKING THEM VISIBLE: A BLACK FEMINIST READING OF GIRL, WOMAN AND OTHER .','VEENALEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(108,'B.A. English Language & Literature','2019-2022','AVYA ANAND DEV','6089','Semester 6','ANALYSIS OF QUEER THEORY THROUGH CASEY MCQUISTON\'S RED, WHITE AND ROYAL BLUE.','SABITHA M M','No','MES ASMABI COLLEGE',NULL),(109,'B.B.A','2019-2022','ZAFA ZAKEER','6211','Semester 6','A STUDY ON THE CUSTOMER SATISFACTION AND THE USAGE OF HEALTHCARE APPS AMONG WOMEN-A SPECIAL REFERENCE TO PERINJANAM PANCHAYATH','FATHIMA ALIA','No',NULL,'3 WEEKS'),(110,'B.A. English Language & Literature','2019-2022','ABHIJITH .U.LALSAN','6061','Semester 6','RACIAL PREJUDICE IN TO KILL A MOCKING BIRD','DR. REENA MOHAMED','No','MES ASMABI COLLEGE',NULL),(119,'B.A. English Language & Literature','2019-2022','ANJALI.T.D','6086','Semester 6','STRADDLING  TWO WORLDS: A DIASPORIC READING OF JASMINE DAYS','VEENALEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(120,'B.A. English Language & Literature','2019-2022','AYSHA SAHLA.V.N','6090','Semester 6','TRANSGENDER IDENTITY IN IF I WAS YOUR GIRL: AN ANALYSIS','RESHMA T M','No','MES ASMABI COLLEGE',NULL),(121,'B.A. English Language & Literature','2019-2022','CHITHRA.K.S','6091','Semester 6','ASPECTS OF QUEER THEORY IN THE FICTION AND FILM ADAPTATION CALL ME BY YOUR NAME','DR. AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(122,'B.A. English Language & Literature','2019-2022','FARHANA.P.S','6092','Semester 6','STUDY ON THE CONCEPT OF LGBT, GENDER AND SEXUALITY IN ARUNDHATI ROY\'S THE MINISTRY OF UTMOST HAPPINESS','MONA V M','No','MES ASMABI COLLEGE',NULL),(123,'B.A. English Language & Literature','2019-2022','FAYAS RAHMAN.K.A','6093','Semester 6','RACIAL PREJUDICE IN TO KILL A MOCKING BIRD','DR. REENA MOHAMED','No','MES ASMABI COLLEGE',NULL),(124,'B.A. English Language & Literature','2019-2022','MAYA UNNIKRISHNAN.N.U','6110','Semester 6','STRADDLING TWO WORLDS: A DIASPORIC READING OF JASMINE DAYS','VEENALEKSHMI U R','No','MES ASMABI COLLEGE',NULL),(125,'B.A. English Language & Literature','2019-2022','MARY JISNA PERIERA','6108','Semester 6','FEMINISM IN NADIA HASHIMI\'S A HOUSE WITHOUT WINDOWS','DR AMITHA P MANI','No','MES ASMABI COLLEGE',NULL),(126,'B.A. English Language & Literature','2019-2022','NAFIA MANAF','6111','Semester 6','CULTURAL ECOFEMINISM AND PSYCHOANALYTICAL ELEMENTS IN  THE QUEEN OF JASMINE COUNTRY BY SHARANYA MANIVANNAN','JAMEELATHU K A','No','MES ASMABI COLLEGE',NULL),(127,'B.A. English Language & Literature','2019-2022','NAJIYA.R.A','6115','Semester 6','STUDY ON THE CONCEPT OF LGBT, GENDER AND SEXUALITY IN ARUNDHATI ROY\'S THE MINISTRY OF UTMOST HAPPINESS','MONA V M','No','MES ASMABI COLLEGE',NULL),(128,'B.C.A','2019-2022','Mohamed thanzeeh','6545','Semester 6','Gymn','Najula K M','No',NULL,NULL),(129,'B.C.A','2019-2022','fathima k.m','6557','Semester 6','Face Mask Detector','Jabin T H','No',NULL,NULL),(130,'B.C.A','2019-2022','lakshmi nandhana.v.v','6560','Semester 6','Tumour Detection Using MRI Images','Anu S','No',NULL,NULL),(131,'B.C.A','2019-2022','Mohammed nabeel.a.m','6562','Semester 6','FREELANCER','Nasiya P M','No',NULL,NULL),(132,'B.C.A','2019-2022','ARJUN CHANDRAN','6491','Semester 6','GIVE IT','Anu S','No',NULL,NULL),(133,'B.C.A','2019-2022','shamas.p.s','6563','Semester 6','Give It','Anu S','No',NULL,NULL),(134,'B.C.A','2019-2022','sreesanth .k.s','6566','Semester 6','FREELANCER','Nasiya P M','No',NULL,NULL),(135,'B.C.A','2019-2022','VIJAYDEV .K.M','6568','Semester 6','Freelancer','Najula K M','No',NULL,NULL),(136,'B.C.A','2019-2022','VISMAYVALSAN','6570','Semester 6','Gymn','Najula K M','No',NULL,NULL),(137,'B.C.A','2019-2022','AMEENA .C.R','6571','Semester 6','Face Mask Detector','Jabin T H','No',NULL,NULL),(138,'B.C.A','2019-2022','ARJUN','6572','Semester 6','MEDSPACE','Nasiya P M','No',NULL,NULL),(139,'B.C.A','2019-2022','ARJUN .K.A','6573','Semester 6','GYMN','Najula K M','No',NULL,NULL),(140,'B.C.A','2019-2022','ATHUL MUHAMMED','6574','Semester 6','GIVE IT','Anu . S','No',NULL,NULL),(141,'B.C.A','2019-2022','BIJOY RAJU','6575','Semester 6','CONSTRUCTION TRACKER','Nasiya P M','No',NULL,NULL),(142,'B.C.A','2019-2022','FARDEENSHA.K.N','6576','Semester 6','Tumour Detection Using MRI Images','Anu S','No',NULL,NULL),(143,'B.C.A','2019-2022','MOHAMED SHAHID.R.S','6581','Semester 6','MEDSPACE','Nasiya P M','No',NULL,NULL),(144,'B.C.A','2019-2022','FATHIMA','6577','Semester 6','MEDSPACE','Nasiya P M','No',NULL,NULL),(145,'B.C.A','2019-2022','JASMI.K.A','6579','Semester 6','Face Mask Detector','Jabin T H','No',NULL,NULL),(146,'B.C.A','2019-2022','MESHMOOM.K.M','6580','Semester 6','MEDSPACE','Nasiya P M','No',NULL,NULL),(147,'B.C.A','2019-2022','SREESHMA.E.U','6586','Semester 6','Face Mask Detector','Jabin T H','No',NULL,NULL),(148,'B.C.A','2019-2022','SWATHYKRISHNA.T.S','6587','Semester 6','Face Mask Detector','Jabin T H','No',NULL,NULL),(149,'B.C.A','2019-2022','VINI BABU.T','6589','Semester 6','MEDSPACE','Nasiya P M','No',NULL,NULL),(150,'B.C.A','2019-2022','MOHAMMED AZHAR.P.S','6582','Semester 6','CONSTRUCTION TRACKER','Najula K M','No',NULL,NULL),(151,'B.C.A','2019-2022','MOHAMMED MUSHTHAQUE T.A','6583','Semester 6','Gymn','Najula K M','No',NULL,NULL),(152,'B.C.A','2019-2022','MUHAMMED MUBARAK.V.P','6815','Semester 6','GIVE IT','Anu S','No',NULL,NULL),(153,'B.C.A','2019-2022','NIHAL .A.AQ','6584','Semester 6','FREELANCER','Najula K M','No',NULL,NULL),(154,'B.C.A','2019-2022','NOUFAL','6585','Semester 6','Tumour Detection Using MRI Images','Anu S','No',NULL,NULL),(155,'B.C.A','2019-2022','salmanul faris','6535','Semester 6','Tumour Detection Using MRI Images','Anu S','No',NULL,NULL),(156,'B.C.A','2019-2022','THAUFEEQU M.S','6588','Semester 6','Tumour Detection Using MRI Images','Anu S','No',NULL,NULL),(157,'B.C.A','2019-2022','salmanul faris V S','6538','Semester 6','FREELANCER','Najula K M','No',NULL,NULL),(158,'B.A. English Language & Literature','2020-2023','AYSHA T N','5464','Semester 6','Postcolonial Reading of J M Coetzee\'s Life and Times of Michael K','Dr. Amitha P Mani','No',NULL,NULL),(159,'B.A. English Language & Literature','2020-2023','FARHANA FATHIMA R M','5465','Semester 6','An Analysis of Traumatic Influence on Characterization and Behaviour With Reference to the Films Joker, Three and Uyare.','Ms. Shiji Ibrahim',NULL,NULL,NULL),(160,'B.A. English Language & Literature','2020-2023','KAULATH SULTHANA PS','5466','Semester 6','Redeeming Ourselves: A Reading of It Ends With Us and  My Dark Vanessa in the light of Trauma Theory','Ms. Veenalekshmi U R',NULL,NULL,NULL),(161,'B.A. English Language & Literature','2020-2023','NAJA T A','5467','Semester 6','Dismantling the Core of Myths and Beliefs in the Movies: Tumbbad and Kanthara','Ms.Jameelathu K A',NULL,NULL,NULL),(162,'B.A. English Language & Literature','2020-2023','SANA MOL M I','5468','Semester 6','Portrayal of Empowered Womanhood in Being Reshma','Dr.Reshmi S',NULL,NULL,NULL),(163,'B.A. English Language & Literature','2020-2023','SHABANA K S','5469','Semester 6','An Analysis of Traumatic Influence on Characterization and Behaviour With Reference to the Films Joker, Three and Uyare.','Ms. Shiji Ibrahim',NULL,NULL,NULL),(164,'B.A. English Language & Literature','2020-2023','SHAHANAZ K S','5470','Semester 6','A Quest Towards Individuation: Psychological Study of Haruki Murakami\'s South of The Border, West of the Sun','Dr. Reena Mohamed',NULL,NULL,NULL),(165,'B.A. English Language & Literature','2020-2023','AFRA JASIRA','5471','Semester 6','Traces of Enormities in the Movies: The Good Nurse, Ambulance and Anjaam Paathira','Ms. Shiji Ibrahim',NULL,NULL,NULL),(166,'B.A. English Language & Literature','2020-2023','ASMI V H','5472','Semester 6','Traces of Enormities in the Movies: The Good Nurse, Ambulance and Anjaam Paathira','Ms. Shiji Ibrahim',NULL,NULL,NULL),(167,'B.A. English Language & Literature','2020-2023','FARHANA NAZRIN P A','5473','Semester 6','Celebrity Culture in Priyanka Chopra\'s Unfinished and Michelle Obama\'s Becoming','Dr. Amitha P Mani',NULL,NULL,NULL),(168,'B.A. English Language & Literature','2020-2023','FARZANA SIRAJ','5474','Semester 6','Voice of the Voiceless: Life of Yazidis Under ISIS Terrorists in Nadia Murad\'s The Last Girl: My Story of Captivity, and My Fight Against The Islamic State.','Ms. Sabitha M M',NULL,NULL,NULL),(169,'B.A. English Language & Literature','2020-2023','JUBAIRIYA A A','5475','Semester 6','Redeeming Ourselves: A Reading of It Ends With Us and  My Dark Vanessa in the light of Trauma Theory','Ms. Veenalekshmi U R',NULL,NULL,NULL),(170,'B.A. English Language & Literature','2020-2023','MEGHA P K','5476','Semester 6','An Exploratory Study on Casteism and Racism in Select Indian Movies: Celluloid, Chalkkudykkaran Changathy and Asuran','Ms. Mona V M',NULL,NULL,NULL),(171,'B.A. English Language & Literature','2020-2023','MIDHUNA P S','5477','Semester 6','Dismantling the Core of Myths and Beliefs in the Movies: Tumbbad and Kanthara','Ms.Jameelathu K A',NULL,NULL,NULL),(172,'B.A. English Language & Literature','2020-2023','PARVATHY P','5478','Semester 6','A Panoramic Approach to gender Representation in Select Indian Movies:Gangubai Kathiawadi, The Great Indian Kitchen and Jayajayajayajayahe.','Dr.Reshmi S',NULL,NULL,NULL),(173,'B.A. English Language & Literature','2020-2023','SARATH KRISHNA V S','5479','Semester 6','Redeeming Ourselves: A Reading of It Ends With Us and  My Dark Vanessa in the light of Trauma Theory','Ms. Veenalekshmi U R',NULL,NULL,NULL),(174,'B.A. English Language & Literature','2020-2023','SOPNALI M N','5480','Semester 6','Voice of the Voiceless: Life of Yazidis Under ISIS Terrorists in Nadia Murad\'s The Last Girl: My Story of Captivity, and My Fight Against The Islamic State.','Ms. Sabitha M M',NULL,NULL,NULL),(175,'B.A. English Language & Literature','2020-2023','SUMAYYA C A','5481','Semester 6','An Exploratory Study on Casteism and Racism in Select Indian Movies: Celluloid, Chalkkudykkaran Changathy and Asuran','Ms. Mona V M',NULL,NULL,NULL),(176,'B.A. English Language & Literature','2020-2023','ANJANA RAJESH','5482','Semester 6','Portrayal of Empowered Womanhood in Being Reshma','Dr.Reshmi S',NULL,NULL,NULL),(177,'B.A. English Language & Literature','2020-2023','MOHAMMED IRFAN TP','5483','Semester 6','Postcolonial Reading of J M Coetzee\'s Life and Times of Michael K','Dr. Amitha P Mani',NULL,NULL,NULL),(178,'B.A. English Language & Literature','2020-2023','AAKHIL C AMEER','5484','Semester 6','Dismantling the Core of Myths and Beliefs in the Movies: Tumbbad and Kanthara','Ms.Jameelathu K A',NULL,NULL,NULL),(179,'B.A. English Language & Literature','2020-2023','ADHARSH KS','5485','Semester 6','A Panoramic Approach to gender Representation in Select Indian Movies:Gangubai Kathiawadi, The Great Indian Kitchen and Jayajayajayajayahe.','Dr. Reshmi S',NULL,NULL,NULL),(180,'B.A. English Language & Literature','2020-2023','AHLA K I','5486','Semester 6','A Panoramic Approach to gender Representation in Select Indian Movies:Gangubai Kathiawadi, The Great Indian Kitchen and Jayajayajayajayahe.','Dr.Reshmi S',NULL,NULL,NULL),(181,'B.A. English Language & Literature','2020-2023','ANNA GRACE','5487','Semester 6','Ecological Terrorism: neo-Colonial Ascendancy in James Cameron\'s Avatar and Avatar: The Way of Water','Ms. Mona V M',NULL,NULL,NULL),(182,'B.A. English Language & Literature','2020-2023','ANSILA U N','5488','Semester 6','An Exploratory Study on Casteism and Racism in Select Indian Movies: Celluloid, Chalkkudykkaran Changathy and Asuran','Ms. Mona V M',NULL,NULL,NULL),(183,'B.A. English Language & Literature','2020-2023','ANUSREE M J','5489','Semester 6','A Feminist Rereading on the Struggles of Women in the Androcentric Society in Blerta Basholli\'s Hive','Dr.Reena Mohamed',NULL,NULL,NULL),(184,'B.A. English Language & Literature','2020-2023','APSANA K B','5490','Semester 6','Postcolonial Reading of J M Coetzee\'s Life and Times of Michael K','Dr. Amitha P Mani',NULL,NULL,NULL),(185,'B.A. English Language & Literature','2020-2023','BAHJA T B','5491','Semester 6','Celebrity Culture in Priyanka Chopra\'s Unfinished and Michelle Obama\'s Becoming','Dr. Amitha P Mani',NULL,NULL,NULL),(186,'B.A. English Language & Literature','2020-2023','GOUTHAVU PRASANNAN V','5492','Semester 6','Ecological Terrorism: neo-Colonial Ascendancy in James Cameron\'s Avatar and Avatar: The Way of WaterMaking Them Normal: A Queer Analysis of the Movie Moothon and the Short Movie New Normal','Ms. Mona V M',NULL,NULL,NULL),(187,'B.A. English Language & Literature','2020-2023','HANNA IBRAHIM','5493','Semester 6','The Wounded Mind: A Reading of My Name is Lucy Barton and 22 Female Kottayam in the Light of Trauma Theory','Ms. Veenalekshmi U R',NULL,NULL,NULL),(188,'B.A. English Language & Literature','2020-2023','HASHIDHA HABEEB','5494','Semester 6','The Wounded Mind: A Reading of My Name is Lucy Barton and 22 Female Kottayam in the Light of Trauma Theory','Ms. Veenalekshmi U R',NULL,NULL,NULL),(189,'B.A. English Language & Literature','2020-2023','HUDHA PARVEEN N M','5495','Semester 6','Voice of the Voiceless: Life of Yazidis Under ISIS Terrorists in Nadia Murad\'s The Last Girl: My Story of Captivity, and My Fight Against The Islamic State.','Ms. Sabitha M M',NULL,NULL,NULL),(190,'B.A. English Language & Literature','2020-2023','KAMALIYA K B','5496','Semester 6','A Feminist Rereading on the Struggles of Women in the Androcentric Society in Blerta Basholli\'s Hive','Dr.Reena Mohamed',NULL,NULL,NULL),(191,'B.A. English Language & Literature','2020-2023','KAVYA T T','5497','Semester 6','Ecological Terrorism: neo-Colonial Ascendancy in James Cameron\'s Avatar and Avatar: The Way of Water','Ms. Mona V M',NULL,NULL,NULL),(192,'B.A. English Language & Literature','2020-2023','LATHEEDHA NASRIN K M','5498','Semester 6','A Feminist Reading of the Movie Little Women by Greta Grewig','Ms. Reshma T M',NULL,NULL,NULL),(193,'B.A. English Language & Literature','2020-2023','MANJIMADAS T M','5499','Semester 6','Eerie Landscapes:Gothic Reading of Nirmal Sahadev\'s Movie Kumari','Ms. Reshma T M',NULL,NULL,NULL),(194,'B.A. English Language & Literature','2020-2023','MOHAMED ASLAM O N','5500','Semester 6','Making Them Normal: A Queer Analysis of the Movie Moothon and the Short Movie New Normal','Ms. Sabitha M M',NULL,NULL,NULL),(195,'B.A. English Language & Literature','2020-2023','RAISA BASHEER','5501','Semester 6','A Quest Towards Individuation: Psychological Study of Haruki Murakami\'s South of The Border, West of the Sun','Dr. Reena Mohamed',NULL,NULL,NULL),(196,'B.A. English Language & Literature','2020-2023','SAFA P F','5502','Semester 6','Traces of Enormities in the Movies: The Good Nurse, Ambulance and Anjaam Paathira','Ms. Shiji Ibrahim',NULL,NULL,NULL),(197,'B.A. English Language & Literature','2020-2023','SALMA BEEVI K N','5503','Semester 6','Eerie Landscapes:Gothic Reading of Nirmal Sahadev\'s Movie Kumari','Ms. Reshma T M',NULL,NULL,NULL),(198,'B.A. English Language & Literature','2020-2023','SANA','5504','Semester 6','Theoretical Evaluation of the Life of the Disabled in the Film Margarita With a Straw and the Novel Out of My Mind','Ms. Jameelathu K A',NULL,NULL,NULL),(199,'B.A. English Language & Literature','2020-2023','SHABEELA E H','5505','Semester 6','A Feminist Reading of the Movie Little Women by Greta Grewig','Ms. Reshma T M',NULL,NULL,NULL),(200,'B.A. English Language & Literature','2020-2023','SMRITHI K S','5506','Semester 6','Making Them Normal: A Queer Analysis of the Movie Moothon and the Short Movie New Normal','Sabitha M M',NULL,NULL,NULL),(201,'B.A. English Language & Literature','2020-2023','SREEHARI K U','5507','Semester 6','A Feminist Rereading on the Struggles of Women in the Androcentric Society in Blerta Basholli\'s Hive','Dr.Reena Mohamed',NULL,NULL,NULL),(202,'B.A. English Language & Literature','2020-2023','TESSA JOSE','5508','Semester 6','Theoretical Evaluation of the Life of the Disabled in the Film Margarita With a Straw and the Novel Out of My Mind','Ms.Jameelathu K A',NULL,NULL,NULL),(203,'B.A. English Language & Literature','2020-2023','THANHA V S','5509','Semester 6','Making Them Normal: A Queer Analysis of the Movie Moothon and the Short Movie New Normal','Ms. Sabitha M M',NULL,NULL,NULL),(204,'B.A. English Language & Literature','2020-2023','VISHNUPRIYA M R','5510','Semester 6','Eerie Landscapes:Gothic Reading of Nirmal Sahadev\'s Movie Kumari','Ms. Reshma T M',NULL,NULL,NULL),(205,'B.Voc. Tourism & Hospitality Management','2021-2024','ADHIL K S','4686','Semester 2','Tour Operations; Internship Training- I and  Viva','Pranav P Kumar','Yes','Universal Travel Company','8 Weeks');
/*!40000 ALTER TABLE `project_internship` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:29
