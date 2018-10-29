-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: oh_terroir_2018
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `grower`
--

DROP TABLE IF EXISTS `grower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `description` varchar(100) NOT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL,
  `siteInternet` varchar(200) DEFAULT NULL,
  `growerCategoriesId` int(11) NOT NULL,
  PRIMARY KEY (`id`,`growerCategoriesId`),
  KEY `fk_grower_growerCategories1_idx` (`growerCategoriesId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grower`
--

LOCK TABLES `grower` WRITE;
/*!40000 ALTER TABLE `grower` DISABLE KEYS */;
INSERT INTO `grower` VALUES (1,'Maison Martin Pouret','Vinaigre et moutarde','Orléans - 45',1,'https://www.martin-pouret.com/',6),(2,'Yves de Rochefort','Quinoa','Patay - 45',1,NULL,3),(3,'Ferme de Lutheau ','Poulets','Toury - 28 et Beaune la Rollande - 45',1,NULL,1),(4,'M. Leprince','Petit Epeautre','Greneville en beauce - 45',1,NULL,1),(5,'Ferme des grands champs','Faisselle et fromage frais','Lorris - 45',1,'http://gatinais.amapp.fr/spip.php?rubrique24',4),(6,'Jean Batiste Drouin, Ferme de la petite Brosse','Eleveur de Boeuf, Abeerden angnus','Girolles - 45',1,'http://chevrerieandcow.com/',1),(7,'Pizza Line & Big Terroir','Sauces maison','Montargis - 45',1,NULL,6),(8,'Confiserie de Luxe','Pralines Mazet ','Montargis - 45',1,NULL,7),(9,'Famille Rivière, Ferme des Fouets','Huiles de colza','Courtenay - 45',1,'http://www.huileriedesfouets.com/pages/des-huiles-artisanales-en-premiere-pression-a-froid-dans-le-loiret-45.html',6),(10,'Coopérative Ouvrière TPC','Compotes et confitures','Amilly - 45',1,NULL,7),(11,'Les jeunes pousses de Cortrat','Légumes','Cortrat - 45',1,NULL,3),(12,'Olivier Chaloche Agriculteur','Pommes de terres spéciales frites','Cortrat - 45',1,NULL,3),(13,'Jean Michel Pingot','Lentilles','Oussoy en Gatinais - 45',1,'gatinais.amapp.fr/?-Oeufs',3),(14,'Philippe Legrelle','Oeufs','Ouzouer sur Loire - 45',1,NULL,4),(15,'Brasserie des Ecluses','Bière artisanale','St Hilaire St Mesmin - 45',1,NULL,5),(16,'Famille Lonqueu ','Pates fermières locales','Mauves - 41',1,NULL,8),(17,'Producteur/Récoltant, Famille Javoy','Vins d\'Orléans','Mezieres les Clery - 45',1,NULL,5),(18,'Isabelle Gallier, Boulangerie O Levain','Tartines et patiseries','Ouzouer les champs - 45',1,NULL,2),(19,'Etik&Bio','Legumes et fruits bio','Orléans - 45',1,'http://solembio.org/',3),(20,'Gran Leo et Cantal AOP','Fromage de vache affiné','Lozère - 48',1,'http://www.aop-cantal.com/le-fromage-cantal',4),(21,'Maison Bioviver','Purées de fruits, pour les faisselles','Lot et Garonne',0,NULL,7),(22,'Bionatis','Buns Burger','Rhone',0,NULL,8),(23,'Maison Meneau - St Loubès','Sirops','Bordeaux',1,'http://www.meneau.com/',5),(24,'Chef Roellinger','Epices pour les sauces','Cancale',1,NULL,6),(25,'Chorizo et Ventreche','Charcuteries artisanales basque','Pierre Oteiza - aux Aldudes',1,'https://www.decreuse.com/',1),(26,'Brasserie de Vezelay','Bière sans gluten','Vezelay - 89',1,NULL,5);
/*!40000 ALTER TABLE `grower` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'oh_terroir_2018'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-29 14:58:41
