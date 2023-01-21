-- MySQL dump 10.13  Distrib 5.7.23, for Win64 (x86_64)
--
-- Host: localhost    Database: GMR
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Current Database: `GMR`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `dbbstjj7jkcrjt` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbbstjj7jkcrjt`;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,1,124275,'Mazda','Miata',1991,'5.jpg',NULL,'2020-08-04 00:04:28'),(2,2,125,'Make','Model',2000,'CarIcon.png',NULL,NULL),(3,3,85106,'Ford','Mustang GT',2007,'6BA5853F-50F7-4C41-95C0-B55E4592D036.jpeg',NULL,NULL),(4,6,105822,'Honda','VTEC machine',2000,'image.jpg',NULL,'2020-08-03 23:53:46'),(5,4,78000,'Hyundai ','Elantra',2013,'33F6B69F-7C9A-4673-91B7-59CBD2D04221.jpeg',NULL,NULL);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,1,0,0,0,0,'{}',1),(2,1,'name','text','Name',1,1,1,1,1,1,'{}',2),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',3),(4,1,'password','password','Password',1,0,0,1,1,0,'{}',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'{}',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',0,1,1,1,1,1,'{}',9),(22,4,'id','text','Id',1,0,0,0,0,0,'{}',1),(23,4,'car_id','text','Car Id',1,1,1,1,1,1,'{}',2),(24,4,'date','date','Date',1,1,1,1,1,1,'{}',3),(25,4,'mileage','text','Mileage',1,1,1,1,1,1,'{}',4),(26,4,'description','text','Description',1,1,1,1,1,1,'{}',5),(27,4,'cost','text','Cost',1,1,1,1,1,1,'{}',6),(28,4,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',7),(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(30,5,'id','text','Id',1,0,0,0,0,0,'{}',1),(31,5,'car_id','text','Car Id',1,1,1,1,1,1,'{}',2),(32,5,'date','date','Date',1,1,1,1,1,1,'{}',3),(33,5,'trip_miles','text','Trip Miles',1,1,1,1,1,1,'{}',4),(34,5,'mileage','text','Mileage',1,1,1,1,1,1,'{}',5),(35,5,'gallons','text','Gallons',1,1,1,1,1,1,'{}',6),(36,5,'price_per_gallon','text','Price Per Gallon',1,1,1,1,1,1,'{}',7),(37,5,'total','text','Total',1,1,1,1,1,1,'{}',8),(38,5,'gas_mileage','text','Gas Mileage',1,1,1,1,1,1,'{}',9),(39,5,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',10),(40,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(50,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(51,8,'user_id','text','User Id',1,1,1,1,1,1,'{}',2),(52,8,'mileage','text','Mileage',1,1,1,1,1,1,'{}',3),(53,8,'make','text','Make',1,1,1,1,1,1,'{}',4),(54,8,'model','text','Model',1,1,1,1,1,1,'{}',5),(55,8,'year','text','Year',1,1,1,1,1,1,'{}',6),(56,8,'photo_name','text','Photo Name',1,1,1,1,1,1,'{}',7),(57,8,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',8),(58,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(59,1,'email_verified_at','timestamp','Email Verified At',0,1,1,1,1,1,'{}',6),(60,1,'isAdmin','text','IsAdmin',1,1,1,1,1,1,'{}',10);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2020-08-03 21:07:54','2020-08-03 23:39:09'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2020-08-03 21:07:54','2020-08-03 21:07:54'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2020-08-03 21:07:54','2020-08-03 21:07:54'),(4,'maintenance_events','maintenance-events','Maintenance Event','Maintenance Events',NULL,'App\\MaintenanceEvent',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2020-08-03 23:34:33','2020-08-03 23:34:33'),(5,'gas_events','gas-events','Gas Event','Gas Events',NULL,'App\\GasEvent',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2020-08-03 23:35:07','2020-08-03 23:35:07'),(8,'cars','cars','Car','Cars',NULL,'App\\Car',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2020-08-03 23:38:21','2020-08-03 23:38:21');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gas_events`
--

DROP TABLE IF EXISTS `gas_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gas_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `trip_miles` double(10,1) NOT NULL,
  `mileage` int(11) NOT NULL,
  `gallons` double(10,2) NOT NULL,
  `price_per_gallon` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `gas_mileage` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gas_events`
--

LOCK TABLES `gas_events` WRITE;
/*!40000 ALTER TABLE `gas_events` DISABLE KEYS */;
INSERT INTO `gas_events` VALUES (1,1,'2019-01-17',172.2,0,6.59,2.54,16.74,26.13,NULL,NULL),(2,1,'2019-01-26',128.4,0,4.81,2.48,11.94,26.69,NULL,NULL),(3,1,'2019-02-06',180.2,0,6.77,2.33,15.84,26.61,NULL,NULL),(4,1,'2019-02-16',176.2,0,7.17,2.24,16.07,24.57,NULL,NULL),(5,1,'2020-02-11',129.3,122557,6.55,2.61,17.10,19.74,NULL,NULL),(6,1,'2019-02-27',178.1,0,6.89,2.15,14.88,25.84,NULL,NULL),(7,1,'2019-03-14',186.6,0,7.51,2.25,16.97,24.84,NULL,NULL),(8,1,'2019-03-26',171.7,0,6.47,2.27,14.69,26.53,NULL,NULL),(9,1,'2019-04-13',158.4,0,6.19,2.50,15.49,25.58,NULL,NULL),(10,1,'2020-01-29',144.4,0,6.66,2.67,17.84,21.68,NULL,NULL),(11,1,'2019-04-27',167.4,0,6.26,2.89,18.10,26.74,NULL,NULL),(12,1,'2019-05-08',157.2,0,6.03,3.14,18.98,26.06,NULL,NULL),(13,1,'2019-05-22',173.2,0,6.11,3.18,19.43,28.34,NULL,NULL),(14,1,'2019-06-10',157.1,0,5.60,3.13,17.58,28.05,NULL,NULL),(15,1,'2019-06-19',172.0,0,5.87,3.06,18.00,29.30,NULL,NULL),(16,1,'2019-07-01',192.3,0,6.74,3.00,20.28,28.53,NULL,NULL),(17,1,'2019-07-15',171.4,0,6.40,2.84,18.19,26.78,NULL,NULL),(18,1,'2019-07-31',167.5,0,5.92,2.89,17.11,28.29,NULL,NULL),(19,1,'2019-08-15',172.0,0,5.87,2.94,17.27,29.30,NULL,NULL),(20,1,'2019-08-31',181.7,0,6.44,2.89,18.62,28.21,NULL,NULL),(21,1,'2019-09-12',155.0,0,5.92,2.83,16.81,26.18,NULL,NULL),(22,1,'2019-09-28',182.2,0,6.60,2.87,19.00,27.60,NULL,NULL),(23,1,'2019-10-11',162.1,0,6.27,2.83,17.79,25.85,NULL,NULL),(24,1,'2019-10-22',159.7,0,5.93,2.79,16.60,26.93,NULL,NULL),(25,1,'2019-11-06',158.2,0,6.12,2.87,17.62,25.84,NULL,NULL),(26,1,'2019-11-22',166.8,0,6.26,3.23,20.22,26.64,NULL,NULL),(27,1,'2019-12-10',156.7,0,6.65,2.92,19.48,23.56,NULL,NULL),(28,1,'2019-12-21',140.9,0,5.96,2.83,16.92,23.64,NULL,NULL),(29,1,'2020-01-03',138.8,0,5.73,2.78,15.93,24.22,NULL,NULL),(30,1,'2020-01-15',156.1,0,7.12,2.72,19.43,21.92,NULL,NULL),(31,1,'2018-12-31',174.5,0,5.84,2.55,14.90,29.88,NULL,NULL),(32,1,'2018-12-14',186.2,0,7.40,2.72,20.17,25.16,NULL,NULL),(33,1,'2020-02-22',135.4,122768,6.34,2.57,16.30,21.35,NULL,NULL),(34,1,'2020-03-06',145.3,122913,6.50,2.49,16.20,22.35,NULL,NULL),(35,1,'2020-03-23',160.5,123074,6.41,2.43,15.64,25.03,NULL,NULL),(36,1,'2020-04-08',162.9,123237,6.19,2.30,14.24,26.31,NULL,NULL),(37,1,'2020-04-27',171.7,123408,6.33,2.12,13.42,27.12,NULL,NULL),(38,2,'1970-01-01',125.0,125,10.00,2.50,25.00,12.50,NULL,'2020-08-04 00:03:58'),(39,1,'2020-05-13',169.2,123578,6.15,2.07,12.79,27.51,NULL,NULL),(40,3,'2020-05-28',145.2,84918,10.81,2.21,24.00,13.42,NULL,NULL),(41,1,'2020-05-29',188.2,123766,6.45,2.33,15.03,29.17,NULL,NULL),(42,1,'2020-06-15',177.1,123943,6.43,2.33,15.04,27.54,NULL,NULL),(43,1,'2020-07-01',166.1,124109,6.16,2.37,14.60,26.96,NULL,NULL),(44,3,'2020-07-17',188.2,85106,12.56,2.28,28.75,14.98,NULL,NULL),(45,1,'2020-07-18',166.4,124275,6.27,2.43,15.25,26.53,NULL,NULL);
/*!40000 ALTER TABLE `gas_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maintenance_events`
--

DROP TABLE IF EXISTS `maintenance_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maintenance_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mileage` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maintenance_events`
--

LOCK TABLES `maintenance_events` WRITE;
/*!40000 ALTER TABLE `maintenance_events` DISABLE KEYS */;
INSERT INTO `maintenance_events` VALUES (1,1,'2019-08-30',120413,'Replaced headlights with LEDs',120.00,NULL,NULL),(2,1,'2019-08-12',120019,'Replaced turn signal housings',60.00,NULL,NULL),(3,1,'2019-08-10',120000,'Replaced air filter',15.00,NULL,NULL),(4,1,'2019-06-22',119890,'Paint restoration, Wax/Seal',50.00,NULL,NULL),(5,1,'2019-06-06',119578,'New radiator',100.00,NULL,NULL),(6,1,'2019-05-30',119575,'Wheel alignment',95.00,NULL,NULL),(7,1,'2019-05-29',119569,'Installed adjustable coilovers',500.00,NULL,NULL),(8,1,'2019-03-16',119051,'New rims/tires',750.00,NULL,NULL),(9,1,'2019-02-22',118905,'Heater core flush',15.00,NULL,NULL),(10,1,'2019-02-05',118755,'New cat-back exhaust',105.00,NULL,NULL),(11,1,'2019-11-21',121750,'Replaced catalytic converter',150.00,NULL,NULL),(12,1,'2019-09-28',121000,'Installed power locks',40.00,NULL,NULL),(13,1,'2019-10-11',121157,'Refilled power steering pump with Castrol Dexron IV ATF',10.00,NULL,NULL),(14,1,'2019-10-07',121124,'Installed heated seats',40.00,NULL,NULL),(15,2,'1970-01-01',125,'Maintenance Description',100.00,NULL,NULL),(16,3,'2020-05-09',84870,'Winter tires off',0.00,NULL,NULL);
/*!40000 ALTER TABLE `maintenance_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2020-08-03 21:07:54','2020-08-03 21:07:54','voyager.dashboard',NULL),(2,1,'Users','','_self','voyager-person',NULL,NULL,3,'2020-08-03 21:07:54','2020-08-03 21:07:54','voyager.users.index',NULL),(3,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2020-08-03 21:07:54','2020-08-03 21:07:54',NULL,NULL),(4,1,'Menu Builder','admin/menus/1/builder','_self','voyager-list',NULL,3,10,'2020-08-03 21:07:54','2020-08-03 21:07:54',NULL,NULL),(5,1,'Database','','_self','voyager-data',NULL,3,11,'2020-08-03 21:07:54','2020-08-03 21:07:54','voyager.database.index',NULL),(6,1,'BREAD','','_self','voyager-bread',NULL,3,13,'2020-08-03 21:07:54','2020-08-03 21:07:54','voyager.bread.index',NULL),(7,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2020-08-03 21:07:54','2020-08-03 21:07:54','voyager.settings.index',NULL),(8,1,'Maintenance Events','','_self',NULL,NULL,NULL,15,'2020-08-03 23:34:33','2020-08-03 23:34:33','voyager.maintenance-events.index',NULL),(9,1,'Gas Events','','_self',NULL,NULL,NULL,16,'2020-08-03 23:35:07','2020-08-03 23:35:07','voyager.gas-events.index',NULL),(11,1,'Cars','','_self',NULL,NULL,NULL,17,'2020-08-03 23:38:21','2020-08-03 23:38:21','voyager.cars.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2020-08-03 21:07:54','2020-08-03 21:07:54');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=596 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (570,'2014_10_12_000000_create_users_table',1),(571,'2014_10_12_100000_create_password_resets_table',1),(572,'2016_01_01_000000_add_voyager_user_fields',1),(573,'2016_01_01_000000_create_data_types_table',1),(574,'2016_05_19_173453_create_menu_table',1),(575,'2016_10_21_190000_create_roles_table',1),(576,'2016_10_21_190000_create_settings_table',1),(577,'2016_11_30_135954_create_permission_table',1),(578,'2016_11_30_141208_create_permission_role_table',1),(579,'2016_12_26_201236_data_types__add__server_side',1),(580,'2017_01_13_000000_add_route_to_menu_items_table',1),(581,'2017_01_14_005015_create_translations_table',1),(582,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(583,'2017_03_06_000000_add_controller_to_data_types_table',1),(584,'2017_04_21_000000_add_order_to_data_rows_table',1),(585,'2017_07_05_210000_add_policyname_to_data_types_table',1),(586,'2017_08_05_000000_add_group_to_settings_table',1),(587,'2017_11_26_013050_add_user_role_relationship',1),(588,'2017_11_26_015000_create_user_roles_table',1),(589,'2018_03_11_000000_add_user_settings',1),(590,'2018_03_14_000000_add_details_to_data_types_table',1),(591,'2018_03_16_000000_make_settings_value_nullable',1),(592,'2019_08_19_000000_create_failed_jobs_table',1),(593,'2020_06_22_174843_create_gas_events_table',1),(594,'2020_06_22_175025_create_maintenance_events_table',1),(595,'2020_06_22_191338_create_cars_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(41,1),(42,1),(43,1),(44,1),(45,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2020-08-03 21:07:55','2020-08-03 21:07:55'),(2,'browse_bread',NULL,'2020-08-03 21:07:55','2020-08-03 21:07:55'),(3,'browse_database',NULL,'2020-08-03 21:07:55','2020-08-03 21:07:55'),(4,'browse_media',NULL,'2020-08-03 21:07:55','2020-08-03 21:07:55'),(5,'browse_compass',NULL,'2020-08-03 21:07:55','2020-08-03 21:07:55'),(6,'browse_menus','menus','2020-08-03 21:07:55','2020-08-03 21:07:55'),(7,'read_menus','menus','2020-08-03 21:07:55','2020-08-03 21:07:55'),(8,'edit_menus','menus','2020-08-03 21:07:55','2020-08-03 21:07:55'),(9,'add_menus','menus','2020-08-03 21:07:55','2020-08-03 21:07:55'),(10,'delete_menus','menus','2020-08-03 21:07:55','2020-08-03 21:07:55'),(11,'browse_roles','roles','2020-08-03 21:07:55','2020-08-03 21:07:55'),(12,'read_roles','roles','2020-08-03 21:07:55','2020-08-03 21:07:55'),(13,'edit_roles','roles','2020-08-03 21:07:55','2020-08-03 21:07:55'),(14,'add_roles','roles','2020-08-03 21:07:55','2020-08-03 21:07:55'),(15,'delete_roles','roles','2020-08-03 21:07:55','2020-08-03 21:07:55'),(16,'browse_users','users','2020-08-03 21:07:55','2020-08-03 21:07:55'),(17,'read_users','users','2020-08-03 21:07:55','2020-08-03 21:07:55'),(18,'edit_users','users','2020-08-03 21:07:55','2020-08-03 21:07:55'),(19,'add_users','users','2020-08-03 21:07:55','2020-08-03 21:07:55'),(20,'delete_users','users','2020-08-03 21:07:55','2020-08-03 21:07:55'),(21,'browse_settings','settings','2020-08-03 21:07:55','2020-08-03 21:07:55'),(22,'read_settings','settings','2020-08-03 21:07:55','2020-08-03 21:07:55'),(23,'edit_settings','settings','2020-08-03 21:07:55','2020-08-03 21:07:55'),(24,'add_settings','settings','2020-08-03 21:07:55','2020-08-03 21:07:55'),(25,'delete_settings','settings','2020-08-03 21:07:55','2020-08-03 21:07:55'),(26,'browse_gas_events','gas_events','2020-08-03 21:07:55','2020-08-03 21:07:55'),(27,'read_gas_events','gas_events','2020-08-03 21:07:55','2020-08-03 21:07:55'),(28,'edit_gas_events','gas_events','2020-08-03 21:07:55','2020-08-03 21:07:55'),(29,'add_gas_events','gas_events','2020-08-03 21:07:55','2020-08-03 21:07:55'),(30,'delete_gas_events','gas_events','2020-08-03 21:07:55','2020-08-03 21:07:55'),(31,'browse_maintenance_events','maintenance_events','2020-08-03 23:34:33','2020-08-03 23:34:33'),(32,'read_maintenance_events','maintenance_events','2020-08-03 23:34:33','2020-08-03 23:34:33'),(33,'edit_maintenance_events','maintenance_events','2020-08-03 23:34:33','2020-08-03 23:34:33'),(34,'add_maintenance_events','maintenance_events','2020-08-03 23:34:33','2020-08-03 23:34:33'),(35,'delete_maintenance_events','maintenance_events','2020-08-03 23:34:33','2020-08-03 23:34:33'),(41,'browse_cars','cars','2020-08-03 23:38:21','2020-08-03 23:38:21'),(42,'read_cars','cars','2020-08-03 23:38:21','2020-08-03 23:38:21'),(43,'edit_cars','cars','2020-08-03 23:38:21','2020-08-03 23:38:21'),(44,'add_cars','cars','2020-08-03 23:38:21','2020-08-03 23:38:21'),(45,'delete_cars','cars','2020-08-03 23:38:21','2020-08-03 23:38:21');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2020-08-03 21:07:54','2020-08-03 21:07:54'),(2,'user','Normal User','2020-08-03 21:07:54','2020-08-03 21:07:54');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',1,'Site'),(2,'admin.bg_image','Admin Background Image','','','image',1,'Admin'),(3,'admin.title','Admin Title','My Cars','','text',2,'Admin'),(4,'admin.loader','Admin Loader','','','image',3,'Admin'),(5,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(6,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',5,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Wyatt','wyatt.j1834@gmail.com','users/default.png',NULL,'$2y$10$HDtuqifRrWDrw6BxCnMjsu7xGeKaRuopRd7ZxRA6qEmfB6qRo9sUi','te67PVKyQmXB1tbFus22128kQsxgKpgmhsIBBKyYpGmGdJhoYDR6WZjoEsMg',NULL,0,'2020-08-03 21:07:54','2020-08-03 21:12:29'),(2,2,'guest','guest@mycars.com','users/default.png',NULL,'$2y$10$T3tY6Hr91bqHGKHaGHiJ3uJhasYa5ffJrzzqQD3F0QDHYIMtKfB6i',NULL,'{\"locale\":\"en\"}',0,'2020-08-03 23:23:30','2020-08-03 23:29:21'),(3,2,'MustangKarl','MustangKarl@mycars.com','users/default.png',NULL,'$2y$10$jjzkZIyQMC2YyAqKl1H2quIlWsJoZLnuvVUEp4QUc2hp5IJ9c1FI2','ormsauoM04DuL5FSL97hjuPA7rj6orbofhJa1ceet9RJIN1J9cYzQGAnQwbH','{\"locale\":\"en\"}',0,'2020-08-03 23:25:07','2020-08-03 23:25:07'),(4,2,'HotMomma','HotMomma@mycars.com','users/default.png',NULL,'$2y$10$ILiiuencaK3n2WOjVr5JUOJr1pxMpeYzmFVPuvqyfS1SnUF3sl0Su',NULL,'{\"locale\":\"en\"}',0,'2020-08-03 23:29:52','2020-08-03 23:29:52'),(6,2,'Aaron','Aaron@mycars.com','users/default.png',NULL,'$2y$10$7LucQSpHi6joFA.P6oJ4MuzywkoUOSKvNanknvNyraKGFWo7vWpQq',NULL,'{\"locale\":\"en\"}',0,'2020-08-03 23:31:48','2020-08-03 23:31:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-03 12:06:39
