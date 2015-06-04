-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: buildcake2_property
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `accountingautoexpenses`
--

DROP TABLE IF EXISTS `accountingautoexpenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountingautoexpenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `automobile_expenses` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountingautoexpenses`
--

LOCK TABLES `accountingautoexpenses` WRITE;
/*!40000 ALTER TABLE `accountingautoexpenses` DISABLE KEYS */;
INSERT INTO `accountingautoexpenses` VALUES (1,'Fuel'),(2,'Insurance'),(3,'Interest Exp'),(4,'Lease payments'),(5,'Maintenance'),(6,'Other Exp'),(7,'Registration');
/*!40000 ALTER TABLE `accountingautoexpenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountingexpenses`
--

DROP TABLE IF EXISTS `accountingexpenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountingexpenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accounting_expense` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountingexpenses`
--

LOCK TABLES `accountingexpenses` WRITE;
/*!40000 ALTER TABLE `accountingexpenses` DISABLE KEYS */;
INSERT INTO `accountingexpenses` VALUES (1,'Advertising'),(2,'Auto'),(3,'Bad Debt'),(4,'Fuel'),(5,'Home'),(6,'Insurance, Business'),(7,'Interest Paid'),(8,'Legal & professional fees'),(9,'Licences & Permits'),(10,'Maintenance'),(11,'Management'),(12,'Meals & Entertainment'),(13,'Office'),(14,'Other Expenses'),(15,'Postage & Delivery'),(16,'Property Tax (Business)'),(17,'Rent Expenses'),(18,'Salary & Wages'),(19,'Supplies, Business'),(20,'Telephone & Utilities'),(21,'Travel, Business');
/*!40000 ALTER TABLE `accountingexpenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountinghomeexpenses`
--

DROP TABLE IF EXISTS `accountinghomeexpenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountinghomeexpenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountinghomeexpense` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountinghomeexpenses`
--

LOCK TABLES `accountinghomeexpenses` WRITE;
/*!40000 ALTER TABLE `accountinghomeexpenses` DISABLE KEYS */;
INSERT INTO `accountinghomeexpenses` VALUES (1,'Electric'),(2,'Heat'),(3,'Insurance'),(4,'Maintenance'),(5,'Mortgage Interest'),(6,'Other Exp'),(7,'Property Tax (Business use of  home)');
/*!40000 ALTER TABLE `accountinghomeexpenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountingperiods`
--

DROP TABLE IF EXISTS `accountingperiods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountingperiods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accounting_period` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountingperiods`
--

LOCK TABLES `accountingperiods` WRITE;
/*!40000 ALTER TABLE `accountingperiods` DISABLE KEYS */;
INSERT INTO `accountingperiods` VALUES (1,'2015'),(2,'2016');
/*!40000 ALTER TABLE `accountingperiods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountings`
--

DROP TABLE IF EXISTS `accountings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountings` (
  `id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `accountingtype_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `reference_#` varchar(50) NOT NULL,
  `accountingperiod_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `amount` float DEFAULT NULL,
  `Tax_id` float NOT NULL,
  `accountingexpense_id` int(11) NOT NULL,
  `accountingautoexpense_id` int(11) NOT NULL,
  `accountinghomeexpense_id` int(11) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `memo` text,
  `recurring_id` int(11) NOT NULL,
  `repeating_id` int(11) NOT NULL,
  `starting_on` date NOT NULL,
  `repeat_until` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountings`
--

LOCK TABLES `accountings` WRITE;
/*!40000 ALTER TABLE `accountings` DISABLE KEYS */;
/*!40000 ALTER TABLE `accountings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accountingtypes`
--

DROP TABLE IF EXISTS `accountingtypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accountingtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accounting_type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accountingtypes`
--

LOCK TABLES `accountingtypes` WRITE;
/*!40000 ALTER TABLE `accountingtypes` DISABLE KEYS */;
INSERT INTO `accountingtypes` VALUES (1,'Income'),(2,'Expense');
/*!40000 ALTER TABLE `accountingtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alternateemails`
--

DROP TABLE IF EXISTS `alternateemails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alternateemails` (
  `id` int(200) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `alternate_email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternateemails`
--

LOCK TABLES `alternateemails` WRITE;
/*!40000 ALTER TABLE `alternateemails` DISABLE KEYS */;
/*!40000 ALTER TABLE `alternateemails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `marital_status_id` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `alternate emails` varchar(200) NOT NULL,
  `cell_phone` varchar(15) DEFAULT NULL,
  `home_phone` varchar(200) NOT NULL,
  `work_phone` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `street` text NOT NULL,
  `City` varchar(15) NOT NULL,
  `zip` int(11) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `driver_license_number` varchar(15) DEFAULT NULL,
  `driver_license_state` varchar(15) DEFAULT NULL,
  `total_number_of_occupants` varchar(15) DEFAULT NULL,
  `unit_or_address_applying_for` varchar(40) DEFAULT NULL,
  `requested_lease_term` varchar(15) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `emergency_contact` varchar(100) DEFAULT NULL,
  `emergency_contact_email` varchar(200) NOT NULL,
  `emergency_contact_phone` varchar(200) NOT NULL,
  `relationship_to_tenant` varchar(200) NOT NULL,
  `co_signer_details` varchar(100) DEFAULT NULL,
  `notes` text,
  `photo` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `property_or_address_applying_for` (`unit_or_address_applying_for`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicants`
--

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applications_leases`
--

DROP TABLE IF EXISTS `applications_leases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications_leases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` int(10) unsigned DEFAULT NULL,
  `property_id` int(10) unsigned DEFAULT NULL,
  `unit_id` int(10) unsigned DEFAULT NULL,
  `leasestype_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `automatically_end_the_lease` tinyint(1) NOT NULL,
  `recurringcharge_id` int(11) DEFAULT NULL,
  `next_due_date` date DEFAULT NULL,
  `rent_mount` varchar(40) DEFAULT NULL,
  `security_deposit` decimal(15,0) DEFAULT NULL,
  `security_deposit_date` date DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `notes` text,
  `agreement` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications_leases`
--

LOCK TABLES `applications_leases` WRITE;
/*!40000 ALTER TABLE `applications_leases` DISABLE KEYS */;
INSERT INTO `applications_leases` VALUES (1,1,1,1,0,'2014-04-01','2015-04-01',0,0,'2014-05-01','700',1400,'2014-03-03',0,'<br>','1',NULL,NULL),(2,3,2,2,0,'2014-05-01','2016-04-30',0,0,'2014-06-01','800',1600,'2014-03-01',0,'<br>','1',NULL,NULL),(3,2,2,6,0,'2014-04-01','2016-03-31',0,0,'2014-05-01','900',1800,'2014-03-01',0,'<br>','1',NULL,NULL);
/*!40000 ALTER TABLE `applications_leases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authake_groups`
--

DROP TABLE IF EXISTS `authake_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authake_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authake_groups`
--

LOCK TABLES `authake_groups` WRITE;
/*!40000 ALTER TABLE `authake_groups` DISABLE KEYS */;
INSERT INTO `authake_groups` VALUES (1,'Administrators'),(2,'Registered users'),(3,'author');
/*!40000 ALTER TABLE `authake_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authake_groups_users`
--

DROP TABLE IF EXISTS `authake_groups_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authake_groups_users` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authake_groups_users`
--

LOCK TABLES `authake_groups_users` WRITE;
/*!40000 ALTER TABLE `authake_groups_users` DISABLE KEYS */;
INSERT INTO `authake_groups_users` VALUES (2,2),(3,2),(1,1);
/*!40000 ALTER TABLE `authake_groups_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authake_rules`
--

DROP TABLE IF EXISTS `authake_rules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authake_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Rule description',
  `group_id` int(10) unsigned DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  `action` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '0',
  `forward` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authake_rules`
--

LOCK TABLES `authake_rules` WRITE;
/*!40000 ALTER TABLE `authake_rules` DISABLE KEYS */;
INSERT INTO `authake_rules` VALUES (1,'Allow everything for Administrators',1,999999,'*',1,'',''),(2,'Allow anybody to see the home page, the error page, to register, to log in, see profile and log out',NULL,200,'/ or /* or  /authake/user/* or /register or /login or /logout or /lost-password or /verify(/)?* or /pass(/)?* or /profile or /denied or /pages(/)?* or //pages/*',1,'',''),(4,'Deny everything for everybody by default (allow to have allow by default then deny)',NULL,0,'*',0,'','Access denied!'),(6,'Display a message for denied admin page',NULL,100,'/authake(/index)? or /authake/users* or /authake/groups* or /authake/rules*',0,'','You are not allowed to access the administration page!');
/*!40000 ALTER TABLE `authake_rules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authake_users`
--

DROP TABLE IF EXISTS `authake_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authake_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `emailcheckcode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwordchangecode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `disable` tinyint(1) NOT NULL COMMENT 'Disable/enable account',
  `expire_account` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authake_users`
--

LOCK TABLES `authake_users` WRITE;
/*!40000 ALTER TABLE `authake_users` DISABLE KEYS */;
INSERT INTO `authake_users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','alezyy@yahoo.com','','',0,'2031-05-05','2008-02-12 12:19:31','2008-02-12 12:19:31'),(2,'test','098f6bcd4621d373cade4e832627b4f6','tizpeople@gmail.com','e367590af7d67b32a0180845703fe4de','',0,'2034-05-14','2015-05-05 19:48:19','2015-05-05 19:48:19'),(3,'mona','1a1dc91c907325c69271ddf0c944bc72','mona@email.com','','',0,'2021-05-05','2015-05-05 19:58:02','2015-05-05 19:58:02');
/*!40000 ALTER TABLE `authake_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cake_sessions`
--

DROP TABLE IF EXISTS `cake_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cake_sessions`
--

LOCK TABLES `cake_sessions` WRITE;
/*!40000 ALTER TABLE `cake_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cake_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,93,3,'Delmas'),(2,93,4,'Milo'),(3,38,7,'kiji');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competitions`
--

DROP TABLE IF EXISTS `competitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `restaurant` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `condition` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competitions`
--

LOCK TABLES `competitions` WRITE;
/*!40000 ALTER TABLE `competitions` DISABLE KEYS */;
INSERT INTO `competitions` VALUES (1,'Casa Grec $25 Gift certificate.','You can win Casa Grec $25 Gift certificate.','Casa Grec','2015-05-19','2015-05-31','We must ....',0),(2,'Le Ridgewood','$ 25 carte cadeau du  Ridgewood. ','Le Ridgewood','2015-05-25','2015-07-20','consommation cash',1),(3,'Pizza palace price','$50 gift certificate','Pizza palace','2015-05-20','2015-05-30','$50 gift certificate',0),(4,'Caribec','caribec gift certificate','Caribec','2015-05-22','2015-05-30','caribec gift certificate',0),(5,'DEF gift ','Def gift certificate $ 45','DEF gift ','2015-06-26','2015-05-29','Def gift certificate $ 45',0),(6,'Maks resto','Maks resto','Maks resto','2015-05-28','2015-05-31','Maks resto',0);
/*!40000 ALTER TABLE `competitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptable`
--

DROP TABLE IF EXISTS `comptable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptable` (
  `id` int(10) NOT NULL,
  `id_tenants` int(10) NOT NULL,
  `id_payments` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptable`
--

LOCK TABLES `comptable` WRITE;
/*!40000 ALTER TABLE `comptable` DISABLE KEYS */;
/*!40000 ALTER TABLE `comptable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptable1`
--

DROP TABLE IF EXISTS `comptable1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptable1` (
  `ID` int(10) NOT NULL,
  `tenant_id` int(10) NOT NULL,
  `payment_id` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptable1`
--

LOCK TABLES `comptable1` WRITE;
/*!40000 ALTER TABLE `comptable1` DISABLE KEYS */;
/*!40000 ALTER TABLE `comptable1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptable1s`
--

DROP TABLE IF EXISTS `comptable1s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptable1s` (
  `ID` int(10) NOT NULL,
  `tenant_id` int(10) NOT NULL,
  `payment_id` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptable1s`
--

LOCK TABLES `comptable1s` WRITE;
/*!40000 ALTER TABLE `comptable1s` DISABLE KEYS */;
/*!40000 ALTER TABLE `comptable1s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactaddresses`
--

DROP TABLE IF EXISTS `contactaddresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactaddresses` (
  `id` int(19) NOT NULL DEFAULT '0',
  `contact_id` int(11) NOT NULL,
  `mailing_city` varchar(40) DEFAULT NULL,
  `mailing_street` varchar(250) DEFAULT NULL,
  `mailing_country` varchar(40) DEFAULT NULL,
  `other_country` varchar(30) DEFAULT NULL,
  `mailing_state` varchar(30) DEFAULT NULL,
  `mailing_pobox` varchar(30) DEFAULT NULL,
  `other_city` varchar(40) DEFAULT NULL,
  `others_tate` varchar(50) DEFAULT NULL,
  `mailing_zip` varchar(30) DEFAULT NULL,
  `other_zip` varchar(30) DEFAULT NULL,
  `other_street` varchar(250) DEFAULT NULL,
  `other_pobox` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactaddresses`
--

LOCK TABLES `contactaddresses` WRITE;
/*!40000 ALTER TABLE `contactaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactaddresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(19) NOT NULL DEFAULT '0',
  `contact_no` varchar(100) NOT NULL,
  `salutation` varchar(200) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `contacttype_id` int(11) DEFAULT NULL,
  `otheremail` varchar(100) DEFAULT NULL,
  `secondaryemail` varchar(100) DEFAULT NULL,
  `donotcall` varchar(3) DEFAULT NULL,
  `emailoptout` varchar(3) DEFAULT '0',
  `imagename` varchar(150) DEFAULT NULL,
  `reference` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactsubdetails`
--

DROP TABLE IF EXISTS `contactsubdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactsubdetails` (
  `id` int(19) NOT NULL DEFAULT '0',
  `contact_id` int(11) NOT NULL,
  `home_phone` varchar(50) DEFAULT NULL,
  `other_phone` varchar(50) DEFAULT NULL,
  `assistant` varchar(30) DEFAULT NULL,
  `assistant_phone` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `laststayintouchrequest` int(30) DEFAULT '0',
  `laststayintouchsavedate` int(19) DEFAULT '0',
  `lead_source` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactsubdetails`
--

LOCK TABLES `contactsubdetails` WRITE;
/*!40000 ALTER TABLE `contactsubdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactsubdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacttypes`
--

DROP TABLE IF EXISTS `contacttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacttypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacttypes`
--

LOCK TABLES `contacttypes` WRITE;
/*!40000 ALTER TABLE `contacttypes` DISABLE KEYS */;
INSERT INTO `contacttypes` VALUES (1,'Real Estate Agent'),(2,'Broker'),(3,'Electrician contractor'),(4,'Refrigeration contractor'),(5,'Electrician technician'),(6,'Electrician technician'),(7,'Leads'),(8,'Contact');
/*!40000 ALTER TABLE `contacttypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(2) NOT NULL,
  `name` varchar(44) DEFAULT NULL,
  `paypal` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','Afghanistan',0),(2,'AL','Albania',1),(3,'DZ','Algeria',1),(4,'AS','American Samoa',0),(5,'AD','Andorra',1),(6,'AO','Angola',1),(7,'AI','Anguilla',1),(8,'AQ','Antarctica',0),(9,'AG','Antigua and Barbuda',1),(10,'AR','Argentina',1),(11,'AM','Armenia',1),(12,'AW','Aruba',1),(13,'AU','Australia',1),(14,'AT','Austria',1),(15,'AZ','Azerbaijan',1),(16,'BS','Bahamas',1),(17,'BH','Bahrain',1),(18,'BD','Bangladesh',0),(19,'BB','Barbados',1),(20,'BY','Belarus',0),(21,'BE','Belgium',1),(22,'BZ','Belize',1),(23,'BJ','Benin',1),(24,'BM','Bermuda',1),(25,'BT','Bhutan',1),(26,'BO','Bolivia',1),(27,'BA','Bosnia and Herzegovina',1),(28,'BW','Botswana',1),(29,'BV','Bouvet Island',0),(30,'BR','Brazil',1),(31,'IO','British Indian Ocean Territory',0),(32,'BN','Brunei Darussalam',1),(33,'BG','Bulgaria',1),(34,'BF','Burkina Faso',0),(35,'BI','Burundi',1),(36,'KH','Cambodia',1),(37,'CM','Cameroon',0),(38,'CA','Canada',1),(39,'CV','Cape Verde',1),(40,'KY','Cayman Islands',1),(41,'CF','Central African Republic',0),(42,'TD','Chad',1),(43,'CL','Chile',1),(44,'CN','China',1),(45,'CX','Christmas Island',0),(46,'CC','Cocos (Keeling) Islands',0),(47,'CO','Colombia',1),(48,'KM','Comoros',1),(49,'CG','Congo',1),(50,'CD','Congo, The Democratic Republic of The',1),(51,'CK','Cook Islands',1),(52,'CR','Costa Rica',1),(53,'CI','Cote D\'ivoire',0),(54,'HR','Croatia',1),(55,'CU','Cuba',0),(56,'CY','Cyprus',1),(57,'CZ','Czech Republic',1),(58,'DK','Denmark',1),(59,'DJ','Djibouti',1),(60,'DM','Dominica',1),(61,'DO','Dominican Republic',1),(62,'EC','Ecuador',1),(63,'EG','Egypt',0),(64,'SV','El Salvador',1),(65,'GQ','Equatorial Guinea',0),(66,'ER','Eritrea',1),(67,'EE','Estonia',1),(68,'ET','Ethiopia',1),(69,'FK','Falkland Islands (Malvinas)',1),(70,'FO','Faroe Islands',1),(71,'FJ','Fiji',1),(72,'FI','Finland',1),(73,'FR','France',1),(74,'GF','French Guiana',1),(75,'PF','French Polynesia',1),(76,'TF','French Southern Territories',0),(77,'GA','Gabon',1),(78,'GM','Gambia',1),(79,'GE','Georgia',0),(80,'DE','Germany',1),(81,'GH','Ghana',0),(82,'GI','Gibraltar',1),(83,'GR','Greece',1),(84,'GL','Greenland',1),(85,'GD','Grenada',1),(86,'GP','Guadeloupe',1),(87,'GU','Guam',0),(88,'GT','Guatemala',1),(89,'GG','Guernsey',0),(90,'GN','Guinea',1),(91,'GW','Guinea-bissau',1),(92,'GY','Guyana',1),(93,'HT','Haiti',0),(94,'HM','Heard Island and Mcdonald Islands',0),(95,'VA','Holy See (Vatican City State)',1),(96,'HN','Honduras',1),(97,'HK','Hong Kong',1),(98,'HU','Hungary',1),(99,'IS','Iceland',1),(100,'IN','India',1),(101,'ID','Indonesia',1),(102,'IR','Iran, Islamic Republic of',0),(103,'IQ','Iraq',0),(104,'IE','Ireland',1),(105,'IM','Isle of Man',0),(106,'IL','Israel',1),(107,'IT','Italy',1),(108,'JM','Jamaica',1),(109,'JP','Japan',0),(110,'JE','Jersey',0),(111,'JO','Jordan',1),(112,'KZ','Kazakhstan',1),(113,'KE','Kenya',1),(114,'KI','Kiribati',1),(115,'KP','Korea, Democratic People\'s Republic of',0),(116,'KR','Korea, Republic of',1),(117,'KW','Kuwait',1),(118,'KG','Kyrgyzstan',1),(119,'LA','Lao People\'s Democratic Republic',1),(120,'LV','Latvia',1),(121,'LB','Lebanon',0),(122,'LS','Lesotho',1),(123,'LR','Liberia',0),(124,'LY','Libyan Arab Jamahiriya',0),(125,'LI','Liechtenstein',1),(126,'LT','Lithuania',1),(127,'LU','Luxembourg',1),(128,'MO','Macao',0),(129,'MK','Macedonia, The Former Yugoslav Republic of',0),(130,'MG','Madagascar',1),(131,'MW','Malawi',1),(132,'MY','Malaysia',1),(133,'MV','Maldives',1),(134,'ML','Mali',1),(135,'MT','Malta',1),(136,'MH','Marshall Islands',1),(137,'MQ','Martinique',1),(138,'MR','Mauritania',1),(139,'MU','Mauritius',1),(140,'YT','Mayotte',1),(141,'MX','Mexico',1),(142,'FM','Micronesia, Federated States of',1),(143,'MD','Moldova, Republic of',0),(144,'MC','Monaco',0),(145,'MN','Mongolia',1),(146,'ME','Montenegro',0),(147,'MS','Montserrat',1),(148,'MA','Morocco',1),(149,'MZ','Mozambique',1),(150,'MM','Myanmar',0),(151,'NA','Namibia',1),(152,'NR','Nauru',1),(153,'NP','Nepal',1),(154,'NL','Netherlands',1),(155,'AN','Netherlands Antilles',1),(156,'NC','New Caledonia',1),(157,'NZ','New Zealand',1),(158,'NI','Nicaragua',1),(159,'NE','Niger',1),(160,'NG','Nigeria',0),(161,'NU','Niue',1),(162,'NF','Norfolk Island',1),(163,'MP','Northern Mariana Islands',0),(164,'NO','Norway',1),(165,'OM','Oman',1),(166,'PK','Pakistan',0),(167,'PW','Palau',1),(168,'PS','Palestinian Territory, Occupied',0),(169,'PA','Panama',1),(170,'PG','Papua New Guinea',1),(171,'PY','Paraguay',0),(172,'PE','Peru',1),(173,'PH','Philippines',1),(174,'PN','Pitcairn',1),(175,'PL','Poland',1),(176,'PT','Portugal',1),(177,'PR','Puerto Rico',0),(178,'QA','Qatar',1),(179,'RE','Reunion',1),(180,'RO','Romania',1),(181,'RU','Russian Federation',1),(182,'RW','Rwanda',1),(183,'SH','Saint Helena',1),(184,'KN','Saint Kitts and Nevis',1),(185,'LC','Saint Lucia',1),(186,'PM','Saint Pierre and Miquelon',1),(187,'VC','Saint Vincent and The Grenadines',1),(188,'WS','Samoa',1),(189,'SM','San Marino',1),(190,'ST','Sao Tome and Principe',0),(191,'SA','Saudi Arabia',1),(192,'SN','Senegal',1),(193,'RS','Serbia',0),(194,'SC','Seychelles',1),(195,'SL','Sierra Leone',1),(196,'SG','Singapore',1),(197,'SK','Slovakia',1),(198,'SI','Slovenia',1),(199,'SB','Solomon Islands',1),(200,'SO','Somalia',1),(201,'ZA','South Africa',1),(202,'GS','South Georgia and The South Sandwich Islands',0),(203,'ES','Spain',1),(204,'LK','Sri Lanka',1),(205,'SD','Sudan',0),(206,'SR','Suriname',1),(207,'SJ','Svalbard and Jan Mayen',1),(208,'SZ','Swaziland',1),(209,'SE','Sweden',1),(210,'CH','Switzerland',1),(211,'SY','Syrian Arab Republic',0),(212,'TW','Taiwan, Province of China',1),(213,'TJ','Tajikistan',1),(214,'TZ','Tanzania, United Republic of',1),(215,'TH','Thailand',1),(216,'TL','Timor-leste',0),(217,'TG','Togo',1),(218,'TK','Tokelau',0),(219,'TO','Tonga',1),(220,'TT','Trinidad and Tobago',1),(221,'TN','Tunisia',1),(222,'TR','Turkey',1),(223,'TM','Turkmenistan',1),(224,'TC','Turks and Caicos Islands',1),(225,'TV','Tuvalu',1),(226,'UG','Uganda',1),(227,'UA','Ukraine',1),(228,'AE','United Arab Emirates',1),(229,'GB','United Kingdom',1),(230,'US','United States',1),(231,'UM','United States Minor Outlying Islands',0),(232,'UY','Uruguay',1),(233,'UZ','Uzbekistan',0),(234,'VU','Vanuatu',1),(235,'VE','Venezuela',1),(236,'VN','Viet Nam',1),(237,'VG','Virgin Islands, British',1),(238,'VI','Virgin Islands, U.S.',0),(239,'WF','Wallis and Futuna',1),(240,'EH','Western Sahara',0),(241,'YE','Yemen',1),(242,'ZM','Zambia',1),(243,'ZW','Zimbabwe',0);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deposits` (
  `id` int(200) NOT NULL,
  `security_deposit` decimal(65,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employment_and_income_histories`
--

DROP TABLE IF EXISTS `employment_and_income_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employment_and_income_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` int(10) unsigned DEFAULT NULL,
  `employer_name` varchar(15) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `employer_phone` varchar(15) DEFAULT NULL,
  `employed_from` date DEFAULT NULL,
  `employed_till` date DEFAULT NULL,
  `monthly_gross_pay` decimal(6,2) DEFAULT NULL,
  `occupation` varchar(40) DEFAULT NULL,
  `additional_income_2nd_job` varchar(40) DEFAULT NULL,
  `assets` varchar(15) DEFAULT NULL,
  `notes` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employment_and_income_histories`
--

LOCK TABLES `employment_and_income_histories` WRITE;
/*!40000 ALTER TABLE `employment_and_income_histories` DISABLE KEYS */;
INSERT INTO `employment_and_income_histories` VALUES (1,1,'Anderson Lopez','New Yourk','4989582423','2012-12-01','2014-01-31',5000.00,'database developer','None','None ','<br>',NULL,NULL);
/*!40000 ALTER TABLE `employment_and_income_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genders`
--

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` VALUES (1,'Man'),(2,'Woman');
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'administrator','2015-04-23 03:23:27','2015-04-23 03:23:27'),(2,'tenant','2015-04-23 03:23:38','2015-04-23 03:23:38'),(3,'visitor','2015-04-28 01:02:45','2015-04-28 01:02:45');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `i18n`
--

DROP TABLE IF EXISTS `i18n`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` mediumtext,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `i18n`
--

LOCK TABLES `i18n` WRITE;
/*!40000 ALTER TABLE `i18n` DISABLE KEYS */;
/*!40000 ALTER TABLE `i18n` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leasestypes`
--

DROP TABLE IF EXISTS `leasestypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leasestypes` (
  `id` int(200) NOT NULL,
  `type_lease` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leasestypes`
--

LOCK TABLES `leasestypes` WRITE;
/*!40000 ALTER TABLE `leasestypes` DISABLE KEYS */;
INSERT INTO `leasestypes` VALUES (1,'Fixed'),(2,'Fixed w/rollover'),(3,'At-will');
/*!40000 ALTER TABLE `leasestypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text NOT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `time` int(11) NOT NULL,
  `authorized` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uri` (`uri`),
  KEY `ip_address` (`ip_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marital_statuses`
--

DROP TABLE IF EXISTS `marital_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marital_statuses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `marital_status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marital_statuses`
--

LOCK TABLES `marital_statuses` WRITE;
/*!40000 ALTER TABLE `marital_statuses` DISABLE KEYS */;
INSERT INTO `marital_statuses` VALUES (1,'married'),(2,'Single'),(3,'divorced'),(4,'civil union'),(5,'widowed'),(6,'cohabiting');
/*!40000 ALTER TABLE `marital_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_grouppermissions`
--

DROP TABLE IF EXISTS `membership_grouppermissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_grouppermissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_membership_group` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_grouppermissions`
--

LOCK TABLES `membership_grouppermissions` WRITE;
/*!40000 ALTER TABLE `membership_grouppermissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `membership_grouppermissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_groups`
--

DROP TABLE IF EXISTS `membership_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_groups`
--

LOCK TABLES `membership_groups` WRITE;
/*!40000 ALTER TABLE `membership_groups` DISABLE KEYS */;
INSERT INTO `membership_groups` VALUES (1,'anonymous','Anonymous group created automatically on 2014-03-02',0,0),(2,'Admins','Admin group created automatically on 2014-03-02',0,1);
/*!40000 ALTER TABLE `membership_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_userpermissions`
--

DROP TABLE IF EXISTS `membership_userpermissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_userpermissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_membership_user` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_userpermissions`
--

LOCK TABLES `membership_userpermissions` WRITE;
/*!40000 ALTER TABLE `membership_userpermissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `membership_userpermissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_userrecords`
--

DROP TABLE IF EXISTS `membership_userrecords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_userrecords` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `id_membership_user` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) unsigned DEFAULT NULL,
  `dateUpdated` bigint(20) unsigned DEFAULT NULL,
  `id_membership_group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  KEY `pkValue` (`pkValue`),
  KEY `tableName` (`tableName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_userrecords`
--

LOCK TABLES `membership_userrecords` WRITE;
/*!40000 ALTER TABLE `membership_userrecords` DISABLE KEYS */;
/*!40000 ALTER TABLE `membership_userrecords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_users`
--

DROP TABLE IF EXISTS `membership_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_users` (
  `id` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `id_membership_group` int(10) unsigned DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_users`
--

LOCK TABLES `membership_users` WRITE;
/*!40000 ALTER TABLE `membership_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `membership_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operating_accounts`
--

DROP TABLE IF EXISTS `operating_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operating_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(15) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operating_accounts`
--

LOCK TABLES `operating_accounts` WRITE;
/*!40000 ALTER TABLE `operating_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `operating_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competition_id` int(11) NOT NULL,
  `firstname` varchar(90) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `email` varchar(80) NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `winner` tinyint(1) NOT NULL DEFAULT '0',
  `unikkey` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants`
--

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;
INSERT INTO `participants` VALUES (1,1,'Joe','Kanc','jkan@jk.com',1,0,'1jkan@jk.com'),(2,2,'Abdias','Bullxx','bull@yahoo.com',1,0,'2bull@yahoo.com'),(3,2,'Georges','Makes','makes@yourmail.com',0,0,'2.makes@yourmail.com'),(4,2,'Kola','Marc','bull@yahoo.com',0,0,'2bull@yahoo.com'),(5,4,'JOK','KOKO','koko@mail.com',1,0,'koko@mail'),(7,2,'poul','Adi','adi@mail.com',1,0,'123'),(8,2,'azibe','joseph','azibe@yahoo.com',1,1,'abc'),(9,2,'Melanie','Marjo','melanie@gmail.com',1,1,'x'),(10,2,'koral','lap','koralie@k.com',1,1,'c'),(11,2,'kalil','Vilver','vilver@vilver.com',1,1,'CONCAT(11, \' \', email)'),(12,2,'moe','kol','fy@fv.com',1,1,'12email'),(13,2,'bobo','martine','martine@yahoo.fr',1,1,'2email'),(14,2,'Jipo','Koit','koit@yahoo.com',1,1,'2koit@yahoo.com'),(15,2,'Madeleine','Marie','madeleine',1,0,'2madeleine'),(16,2,'Madeleine','Marie','madeleine@yahoo.com',1,0,'2madeleine@yahoo.com'),(19,2,'ko','koo','koooo@ko.com',1,0,'2koooo@ko.com'),(21,2,'bb','bbb','bbbbb@b.net',0,0,'2bbbbb@b.net'),(27,2,'njo','kopl','bbbbb@b.net',0,0,'2bbbbb@b.net'),(28,2,'hjo','vbb','bbbbb@b.net',0,0,'2bbbbb@b.net'),(29,2,'mo','mo','mo@mo.com',0,0,'2mo@mo.com'),(30,2,'goo','ooo','hjh@w.com',0,0,'2hjh@w.com'),(31,2,'polo','molo','molo@mail.net',1,0,'2molo@mail.net'),(32,2,'Hio','Paloma','delmas@delmas.com',1,0,'2delmas@delmas.com');
/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `id_tenant` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `post_file` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT '0',
  `parent_id` char(36) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'LA FEMME DANS LA FOULE','femme','','2015-04-23',0,NULL,NULL,'2015-04-23 20:11:35','2015-04-23 20:14:42','La plus belle femme de la planete');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` varchar(36) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `language` varchar(3) NOT NULL DEFAULT 'en',
  `image` varchar(36) DEFAULT NULL,
  `timezone` varchar(32) DEFAULT 'America/Montreal',
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_name` varchar(15) NOT NULL,
  `number_of_units` decimal(15,0) DEFAULT NULL,
  `propertiestype_id` int(11) NOT NULL,
  `propertiestypes_specification_id` int(10) NOT NULL,
  `rental_owner_id` int(10) unsigned DEFAULT NULL,
  `operating_account_id` int(11) NOT NULL,
  `property_reserve` decimal(15,0) DEFAULT NULL,
  `rental_amount` decimal(6,2) DEFAULT NULL,
  `deposit_amount` decimal(6,2) DEFAULT NULL,
  `lease_term` varchar(15) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `street` varchar(40) DEFAULT NULL,
  `City` varchar(40) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `description` text,
  `photo` longblob,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'1600 decarie',25,0,0,1,0,1000,700.00,1400.00,NULL,0,0,'795 E DRAGRAM','TUCSON','85705','','‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0½\0\0\0X\0\0\0/<aV\0\0\0sBITÛáOà\0\0\0tEXtSoftware\0gnome-screenshotï¿>\0\0§IDATxœíwxÕúÇß33Û{I/¤ÆÊT\rUP¹ˆ  ED¯\\ËµÁÅ‹\"U:Ò¥J$tBZH%›l6Ù^fæüşØ°,!@²$!á·Ÿ\'OÍÌ™Sv¾sÎ{ŞóÎ	Âƒ5„xÒğÑ(ñéÆ‡7øtãÃ|ºñá\r>İøğŸn|xƒO7>¼Á§ŞàÓoğéÆ‡7øtãÃ|ºñá\r>İøğŸn|xƒO7>¼Á§›*p:4M?éZ4h¨\']‡^¯Ÿ6mšD\"IHHĞh4jµ\Z!ô¤ëÕ°@¾x?Ol6Û˜1c222\"##\0!$“É‚ƒƒ5\ZMóæÍãââÁ“®cƒàiÓ\ríd’ \0ğ¦‡˜3gÎ7ß|£R©\\º©D³fÍ¾ûî»Ç­âSÁS5N±ÏœµéÂaiB¢¿¦…\"¶™,*F\"Ö F£±îª÷4ñTéæÒ¥s­Å†øŒc­\0a’$¸\":V’ĞB¡I’7k¡È<÷³§¬÷­;*İ|;c•Éd%Ğe!±˜¡±•f.+»x®lÃJŒRªy¡áÂÈ¦’f-q\ZyTŒDíÏ÷ÌÁgÿV“§G7{SO¦î;\02çÕ”È-¿ßé<\\R@c]±MWl;wºtËº[‡àóÉÀ`aBsYóVÊ8,*Fê°×Zc³ÑIPœ§ÓÓñ”èÆh²üğßÕ4Í\0Àˆ7{ñìÑ´ı·óI<5\0˜vb“Óy-Óp-³|ûÆ\0$7PÀ¼‰-eæ2–Ë7Q<B5VÒíkêü­›.ô\"öF7ï,ôÎS¢›õÓÎœÍ€ĞPÿ1£û:ìå=úŠWÌÓ€»¿¹÷\ntÿ)«•«”Ï2\\`Äé$)_¤ç‰u|q	WPÆ2f1\"î×@vs>£ô÷ßnşµ¯H_j·’ç/ä]ïÕ«­J)­›F?Iİ”ê3f­f1&bâ;¯JÄ¼+y7»ô”ü¹ÕPTàô2SL°4¥¹N›Ô¨k€bJ®ÓKÆÄK5IÊ°&¢ 0¡XÌ9ÙæÔù[ÖßºzÙàºë n”ëÿ÷Óú/?ùô™MOƒÿæó/—ü<w#\0$j\"wn›©-*(++€Œ£ì¬/oaÖëŒ+\rm÷œŠ(•š)æñÈ3\'tez‡«×©8ÍÕ³`r¹xû¦ï5Íªğ5j\Z½Õváâõe+w\0BhÚÇÃXÆY^^\0E½64±y+åÛïÅãlš ‹™É½e9r@›öga™Şq\'}EYêšëy,+3}óÃJ§ói[íjÜº¡iæÇŸÖ\0Üá…;¶º}»ĞÕƒJe‚·\'Æd•öMİERp¢B×g\0Ø›zrß¾³¬÷İ^C¤qSûÓN\Zú9Ã°B!ÿ÷µ_GGääd€@ ˆ#Ic<¬ïSÇttj\0CG55‘\'üºÕ}”Oª¢äâ5êÄ–Š„DyœF®Pq%RQ…‰İ8hÄv±ÍæøÏ÷+†€¾½^h™ÔôêÕL\0@’$éúüîÇ‰£r:Á«¡ª¦ ºöôN´mÇáÂB]EU™Ò|İE]ZBzZ\0p¸((X%O”kZÈ£ã¤Q’‡x±=-\'O,:=ívP“¨iR\'­y0O@7f³íçYÇø¤_Pˆ (D*R(¹\\Áã‘\\ù¨™Çİopõº½çÎ_\0‘ˆ?uÊ®Øáp\0 ¡P¤P(Ü´j£êØ#(uG~½U8<’/S•ŠÀ©™üÑ/lÅø„ÍèŸŒ\0F\0€œ“mÊÉ6Ş!àñI‘˜› Õ´T&$Ê5I\n…Š+sHÒ]á{jÎĞ8/Ç¼u}öÖõ·\nµ·š¶ÉY÷Û¯î[w—\' ›½ûNÎ¿PÉöaiWéH  j¾Ê§ö‚BA!Bÿ@BÉUúñJ®G^ñA«ÕÿôËF×]5¢O`€<++\0!„‚ƒƒ=ç½1fRÂáı·mÖú01’»‹­V³N§øJ—\r›9zÁuœÆ&3œAÛ;æs…1Ø¬¬Íj;Zl?zH€…Mã¤£&ÆµyŞÏ3s‹™>‘^¼aå£‡´V\r\0´äæ‘c—·íHôj—zh›ú¶oX–Mé;åä©+šğîºì0ŒáA–E!.äHâ…ˆ\\S`° 8L´fãö9óÖàĞPõîí3ìvcii)\0ÈåŠÈÈÈJşŒñ´wOm^w«®[\'£…Ê•EQ		ÍNgdõ{åc\'Í@E©\0²vHïm/öPx”H©™Úuè\Z€1Z·®»µu}vŞ-M³®Ä<!­…Í6»1<< =m®HT±Aõ­›ô#úøˆÃ¡vmıñ»³/œÑWÛbu\'Ã\0€°ÈF³æàPQÇÎñ@Ôş”_\0G“*÷àWºøæ5ãÀn©f3ó [áñ¨È³Cwñ˜ü\0 V©ÃÂÃ\'O³lå.wµ%œH‘£#f«9ÅBgø¸˜ë™†ƒ©·mV×dşnåSø¥Y~+ç6\0L<äã‡Ör³L½ê†eñĞá_îŞs<å¥v+–ü{ï×?\ZwŞáp\r¸—ÁÎÉóIu_ˆ]‹Ù!,X¹½“BuÏxÏ²øÛigWızÍ_í4É’„É_$ıCèªAM›Æ”êÍ/õ|»¨ÔUI¤šìF8B«ë=OËÏ\0\0.±xCûWONùè\0P«å;·Îh\ZR{\rzõê¿9qåà¡³5vôËM‡DZ;t¯îÚ‡¼+ƒi°ÅL_¿fX½äz¥Ç Ğ›ãbÕşüº±1\0\nå$´¸+Æ²lA~~X¨ÿ¹ÖˆN$Síœİ¾ÇÊÕ üCì¯¿Ö­YB\0”””Íš½Ö5»¬êO7Ã.]¾Ój³·LŠiÓ:A¯×;ÎÃT~‚{Ÿ§‡SÉ‡{ÿŒ†µË®æY*]\Z.\Z8,êqšğpÚ&‹¸<âN\r\02™Íz½~ÈàîÍ›G»“Ùh³½òb#O—tû.â²2ÆÌäIƒ)Š€M[>“Ykíy(õ§››Ù[wFİÃ!‹‹µ\0¯	yïcËÕR… —E\\¢µ®\\˜uÿé7ÇÄ¨ıê¢ËA$…’{Hî?QPPÀá_}>’Ã©˜<@‰õ4¢¬î?k‰¶É\"†aòóóz¾Ôîùv‰\0àp8§µÄn÷v)·&ÔŸn–,ÛaµØÃÃz¥<WZZêp8(Š£T*z¿Öú9um•‚1¸Ëõ+³s²M•ÎÊäÜÑïÅÕVYÅ¶j#SùUáÔp8ÅÅÚvm4ıû%»R€›¬ä¥ÇñC&µÊ$\0˜ŒF‹ÅüÑ”¡B\0pêô•mö:ÛêSOºÉËÓ®ÿ=\r\0ÆŒêKRdII	\0V(—/ >œÄãÕnMÅì\\üs&ËzŞ\0}†GÇJ]Ií•†ş3V¥R°w~Ü™c­Vët:¦Nâç\'w_ab¯ Á»ÕV’$Úw@Paaaëgcûôn\0Nš™ùã\Z]©¡6Zõ0êI7«ÖìÕëAAª—û&\r‹ÅL’¤J¥rÕ´PÙ\0j÷vîØ”{ù|™Ç\0\noÄøØ;Ú)+0˜ÿ|§€àà.—çaUˆeqAA~dDĞ„±Ü—0¬ÓJñ.,\' „¼c€\0Øl¶âbí¤wJ¥BpõZŞâ¥<f‹I}è¦DW¾fİ^Œñ+/w\nP:¥R¥VûSåp8‹Ùãc›D‰\0 ³É¹t^Ö½]\0@ïWÃbâ%µXP§îÁj—Ëˆˆd–Ï¨Tj•ÊO¡PÉå\n©TBÓ´Åb9¢w\\\\¸û*“ãæÖ¼4Ü¦½˜/¸§òZ­6&&dà+]\0\0·p‹Ë©SwÔ‡ÿfáâmO›/ìı922hÁ‚/^ôL0aÂ„¸¸¸][r¦Œ=ÁVŠZ\rVmïÔªMeûiÏö¼÷GcÙÇòbÀ€¤ˆ5;:7F	\0¹¹¹“\'O¶Ùl\0 ‹¥R©L&“H$r¹¼E‹ÉÉÉ»÷1ê·é*æŠ­İ1Ë©¶7“$±jç?X(®ä_–Éä¸[Ê¤]9\0Ô}ö¬÷\\‹»uA÷7N\'½hñv\0x©GÛÈˆ «ÕªÕjoİ‹ë‹îÑ\'¬}ç€Ú]µfYX8;óş.§c÷ ÖÏù=^—ƒ\0\0j\Z+Ñ´¼»Œê~M&SAAÁåË—Oœ8±gÏŒŒŒòòòn[¿Ø½­;±Ù^ÄVÌÉ«Yôl;uó¤P©´²ßË`(—H¸#ŞìéúsË¶C\'O]ñ¶i¦Îu³qÓ7¸jìè~f‹ù!/D’$šòy’TÎ­İ\n¤(:”Z¹ÓæñÉÑã8œÇÑM…óêĞ¨ê„Ñ „nß.Ä˜™şé[‰Ğuc\\NŸ¦xÕ™9W¬®I’DppˆT*år¹Eñx<‘H$JKKÇŒêÑ$\0,Vûô¯—ĞSGÑ#u«‹Õ¶|Õ.Œqr‡¤ÄÄ¨’’b–e¤ iœäÑ1µÄít0Ëç_½³šq—vüŸëPÓÜd\nB®$¥r!,•s:½T1Æ4ÍŞh8fÔËîãv§ÅÉ»X»‹\0 0Dğ\\\0\n…jµzñâÅ3gÎœ={ö/¿Ì]¾|Ezz:‡ƒŞ;À5\'?qòò¶í‡ë(z¤nã(şJ?:#‹C‘#GôfYF¯×=À¢B\0€\Z>.&uG~æßeîƒ\r:~¸hßÎü”—Ã<R1~J³c‡´Sı²Ô~¼/f‹$@‘dB‚†¤HU­B\0Ød2²,;¨ß39n×/2<$ÙsQwî¬ò«X²åñx6›Íï‚$I­VÛÿå«ÖìqE&}?ó·É­êâEœ:Ô\rÆxŞüÍÃhšGwìĞª¸Xë\n—Ñh4|>ß!$—ËİŸÅÎ¤i‰†¥3µf cŒÑ¯?gvM	æòÜv\"@‰-/ö\rİ¾±ñÚ\"Ûßçìí:òH\nq¸IŞÓa!“Éìv;MÓf³¹R%ÜŸB<}äìlH\n=×I$‘’\0 T*=j„¦v›å‹OGş™zÂ•~~q#ÓÍ©ŒÌ¿œ€‘Ã{“$Ò—–\0BÈf³™L÷xr†¸ûnv‡.=û‡¹Ş¡¬¥ºàËË¶¬»õÚİï\0I¢ãcì)0\Zªí›Ç(mWyÛdÿ*OªTª÷Ş{cŒ1v=$N§Ó`0 „‚‚‚ªÒ‡çrweh	çöyMÄÆÆ‰ÅâGÔƒÃáHî”Ü!©º-òŠºÒ\rË²sçoÂ,\rñğr²N§sÒNŠâÈd²7nœ9sÆ3ñ€<ÿ$)ôÎ‡ÍÒ–híµO\0\0³°ráµû†Èä÷ÄW$4Wô\Z¾vÙõêgwéœ©0OYÅWW\\\\üÕW_ÙíöûOuíÚµ[·®ªŞƒŞÒ@{·:¿$‘È*Ï¨)ŠJII1,Ëº~‡††€ËJ<>Q£\r\\jJ]ÙÅ—şÎŞ \0ŞøçK<G§+\0™LÆãU+¶I”øí‰ñµûÂõ,Ãæ5UIoOŠ—Hk0‰Ã,:´§Ş¶ÉÁ¥%Ìş]UGÓtjjêæÍ›·nİš––vğàÁsçÎaÌ «WÊ?{B¯«B¾µEè†eñ’å;ŒF‹Z-üZ×²²2»İáçç÷è‹+@ƒ†G\'&¹ü\"µ3“Ä–ÎÍ2+IAÁÂ×GÔ,¾âø!“ÉX‘.LêvC¹¾Šâœ÷ÂT˜„³°oWş¤‘ÇtÅ¶:ªYè¦ °ä÷Í O¯çC‚ÕZ­\0I¥¡PXıL¸\\bòg-xüÚôxjo[W,¸Vù(‚Á#¢ƒÕh±Öyî¤µFEc\\åÒÛ#»R\0zs`wM—*Ñ‰ôâqCÓoçWCªêdÜ¼åX,IEãÇô7™L,Ër8ÿ\0\0@‰Åb¥Ré™ÃáT™OÛşƒßŒŞµ-·Â7û¸`\0HÛ]0xx”RÍó8ˆ‚B„ÃÆÄ,Ÿ—…u/+Ø¿Ï8*ùñI’T*•UÚ7b±˜¢¸®À?ŠBş|\0@Pİ]RÎŸrXL¬§Yìš‡Z­wå+‘H(Š\"IŠË#üù\0¨¨Àúñ„“ßÏmTË!ëu²>Uª78ì4\"P€¿‚a×ÌÂ-£ÑètŞ3XH$’IÇfeåN¨\rWüB\n—sßvF;[®w`Wœò#2@ Tó*ù0†1U~¥<ÏeÛQÅĞXWRaò£j´ÌUs¥Šç¹ÆØ`00î\n‡#B,ƒô¥vwäµXÊÖ¶Ü¸ßóõñ¤hÜû\nøxRøtãÃ|ºñá\r>İøğŸn|xƒO7>¼áÿ©ngö­Û4ı°X\r›ÍqãfÏOQ%\rw¿­µë÷eœÉ´;îñ’>h`W¹üĞ4“ºÿT¢&24Ä??¿xúWK2¯ææ;´Àó&7W¯å}ûÃÊÌ¬œÂBİåó¿ñx“Éúñ´ù™Y94ÃhšEş4kâW¾+£Ó•ı­Éd	è×§Ã€—“kÔêFn¨0{üÄ%E@ÊGÓæ9´ÓIÛl}i§›6Ü¾Óø²2cõ³:pèŒ_Hï£¿Á³,[^nêÕïCE@J‘¶´Êô,Ëj‹õ»NP¤Øl;õaÒ\\P¤({<}ùAeÍ˜µZŞÏl¶²,[“7&\Zî8EˆÏç\0Š\")Šäñ8]:=3~LÿK—oş¹÷Dõ³j®‰\ZıVŸ¡¯÷\0\0„T*ò÷W<$=BH¥”UêŠ‚ˆár)EÎ¿W5~•–\ZÖ¬Kõó“¡ÿômwí¦áSÂ¯ÏÔd_W¥RúŸ/ß®•Òcš†)ä’Ôı§Î_¼Ô¼i¥³+~Ûıì3q¹yZWxïSLÃíoªc¼?ítHˆ_®ÿp¡iæJfÎµëyî4Ãf]Í­tçìvGö­G¼ÂÈ²øÆÍ‚´ƒgöÈ¸v=¯J{˜ËåŒz«·Åb[¶bW¥×²ŠKÊÖmØ?nLÿ*;™²rSú‘¹³‡\0€ÕjÏ8›µuûaÏƒ,‹§Ÿ?vüÒÃkûdiı\rMÓ«\0X†İöÇáS™¿ÎûH¥’ÀŠßv/^ºãÆÍ‚	ã|4åŸ\0°dÙÕk÷f]ËíÚùÙ¥‹>€Ôı§¶m?|øÈ…˜˜Ğu«¾xP)yùÅÿş|¡@Àï”Üòò•[[·.Ò–V™2åÅvÑQ!›¶œôîÀ&áîãë7ìo^)½Él]¼ôœÜ\"šfÒœ±Û“ß<rDo’ Š´ú_æmÚ²í¯”Û-ûõ×66;v™öÙ¢/?ù¸_\\]Òtsôø¥Ï¾ø\0Ìf[ÖÕÜgZÅÚìŒ1Bhèë/òyÜ±fº¿5¼W»¶šöÇ»;ƒÖÏÄÓ4óû–ƒáaU“@^~ñkC>{á¹Äo¿ëºyÿ|½GÿŸ–ÜŸ˜Ã¡Æ½İÿƒ©?/^úÇ—Ÿr4š,ËWí?gr¥7\0 í@†^oüï÷\0 H«>ò?Ó¿\\Ò¦uBË¤˜ˆ&ó~\\^nÚ¹ûèÒ;G¿Õçfvá7ß¯üéÇ‰’[=Ö·VÇ4‚qªÃI3¿{gæwïÌıyò¦õÿq:™ÁC§¯ß¸\0©*¥¸×æ•ËÅ­Ÿ‰ãñªï\0Œñ/ó6åäÜşpò—h\0 :*$>ş›I÷îù|“ğÀõÓŠîŒ/«×îMHhÒ2)æşÄ“[¾?që³¿Ÿ¼Cû$›İa4U„áq¹œßõÿ~æo\'N]öÙÂ·GöíØ¡åÃ¿“\'N#Ğ “Šş5u¨HÈŸ3oSMö²{Ø¼†aØ»h4Q*¥¬š×¨Õ²¡¯÷(.)[¹úO\0ĞéÊ—,Ûùş{ƒªtêH%\"E¦¹0köºO>]øçŞã•DFÿ8ã]³É:pğ§M£C‡Kiø±Æ¤¡!~!!~z½Ñl®Y„ïƒ`Y¶H«çó¹5ºY¯ê&—‹W¯K--5lŞöWTdP‹Äè*S^ÉÌ0èßßÍX•¨‰|wü+;>sš.ŸøJg£Éâ\Z½kH}Òøtãr¥I¥\"¡°ò&ÅŞx7³NÏeìxè?ÿ	VzµKvváòU»-ŞşŞ;¯V¹»€Ùl›0i–Ñ`^³rznm‚ƒÕUnˆ%3çêõ¼k¾hÉvWH§ñé&ëjî­œÛıû%»m\0`=Ü9EZ}2$\">6</O›v0Ã}Ğ`´üı÷Í‡_8|XO€7óÇ5MZ?_e\Zm±şâ¥Í£Äb«¹¹ÚJiŠŠJ\'Lúñ“©oü÷‡	\"ÿÓé‹2³rjÔ„ú§Aë¦’Ocœ]øş”ŸÚş£Ù;wö<	<.\'uÿé›Ù…£ùÌÙ¬e+wUº{lçïÂe14\0$IÜ$‰ÉSç¤î?¥×ss‹¾øz©«?³ÙïşsW‡İÉ²¬[£ÑQ!½{>ïtÒïõÎv¡À0¬Íî6›\0¸\\J(ä§<s8ıüõù3f­ÉÍ×€Ã^Ñ™–	ïÿ/¹}RûZÄÆ„ıkêÚbı;4™jg®#ÈéÓ§?é:TÍ©ÓWæÌûıJfN©ŞpõZnúÑ‹kÖ¦.^¾ãÅîm¿>Úõø€J%Õëî=¾nÃ¾Í[êõ¦	ã^YğëVƒÁ,ñc›†8tvöœ\r/İ0-%ºòøØ&ßş°r÷ãV«=3+Çfs$µh\ZnµÚÓ^Üğûşß·:yúÊÛoõÉºš{3»ğÂ…ëEF4	Z°hëœù›.^º©Õê”şJ‚@~jya‘îƒ‰ƒ\\FÉöé?ı²ñĞ_g4“™•#“‰›k¢Ä\"ÁÉSW–¯ÚuúLÖ[oöd6ıÈ…Ì¬•JFÄ›#¿v8èÿş0Ïç@³„ˆŒ³W»x:ãJÇäVq\rŞ8«O\Zîû£¥’å‹âó¸2™¸’áHÓÌµëy9¹Ú\0EB|E®¡Š µJf¶ØÜù „TJ©k\'3<.G©”\0Ã°¹yE7nÈå’ø¸p¡_ª7Úí\0xR‰Ğsø“JE\"!\0–µZíâ;ÿP£´Ôà¹€/ğe2Æ¸Ü`¶ÛR‰H à™LV×$\\$äóxÜR½A$H%wõáN VÉÜİXC£áêÆGC¦AÛ7>\Z,>İøğŸn|xƒO7>¼Á§ŞàÓoğéÆ‡7üÌ¢eêa¥Û¨\0\0\0\0IEND®B`‚',NULL,NULL),(2,'1500 decarie',10,0,0,4,0,2000,1000.00,2500.00,NULL,38,1,'421 E DRACHMAN','Saint-Laurent','7598','','GIF89aòËæ\0\0²´ªsRForg”fTQQIëÕÊ‘‰õäÛˆYJ«xfÉ©•æÊºXB5×¹¦ûúødE8-!\Z¬§›G2(»™„ÚÛÕ\0ÇÅœ‡·‹vİÇ¸ìÛÓ¤n[if[êêåÅ¤µåòèÏÃôŞÕÅ“zÊÌÆW;0–ub‡‰|º“|ÖÕÎòØÍR6+%&\"7\' f90ÆÆ¼rI;Õ´\"·„j572Ì²œ÷ìæÒ­˜Í·¥ÙÍÅ©ƒjA,$İÄ­81):UW‡L>®†rJ8.œ –Ú¾°õôñÎÑÌ{t¼Á·]^UáãÜÒ¤‹F&Ùğú¾»¶‹¨ [ME¶×à½ªîñëyP@Ì­ U-$Ïå,.(@B=fO>­’zğúøÕ¯¡±~`E`b+o~ºoaA0ÑÖÓ¼|o  Q–¦èáß€9..00ÉÂ¯ß¸àÑ¿Ö±v@3­oÉ¯¥ª¢¼ ğÑÄôïïïïïßßßÔÁ¿),,\Z\Z>g+\"/0,)ÏĞÀ\0\0\0ÿÿÿ!ù\0\0\0\0\0,\0\0\0\0òË\0ÿ€‚ƒ„…†‡ˆ‰Š‹Œ‘’“”•–—˜™š“ŸC¡£¤C§¨©ª©RC­¯®±°³²µ´·¶¶sR¼½¼sstÁ»Át5tÂRÅÇÂ›ÎÏĞÑÒÓÔÕÖ×Ø‰ÛŸ¢¢«áâ§¸å¹·¾és5RÇîÆğïòÙôõö÷øùúûôÛ‚Ş ¾™\Z·ª•«ttxÁk—ğÃ‡ïèğ›H±¢Å‹3Vè-¸R SÍ¬¤2(Sª\\É²¥ËHş:½œI³¦Í›8sêÜÉ³§ÏŸ@ƒ\nJ´¨Ñ£†<\r©±n$)oH£JJµZH`50c&D×®Z½j8Ğé)UÓª]»VÔº\ZpÿãfÕº•nˆ\ZRäÕÀ—ï§hÙ\nL8g©¹ZåÊ¥ËøÀ]¼|ñĞP\0_3sdŞÌ¹³E’æ\"zñVÄ4<î«ZˆÉ“ÿöL»¶mg‡‹Ş5ãtûN†\\ 8“Oİ^Î¼ù¢Nst‡¸úïÆt³öÕ;™oqÊ82¬)p`ˆóóèkî`Æ±tì¾±ße¯^ïÂ×d°“G‡Ùé( RĞmÕv\'İh¿ÍçdÛyekàäi6à†ötJtd!èàuÚÅXWª9Yq,Çâq,ÁŒv p\0€æ¨#J¢ÔĞÁÊg{\">6bX©(!ÿe,¾Â“k€ ß~(ÔÊXf9Ñz\"v…—ƒs9pÀµ÷àjw	×$“N.€Ãv<ùdxı­aÆ•Zæ©\'5¥Dgfia±YXD’hš­	*hw!7_¯ Gs.à¦”2Ê˜š¡á †*Éa\\Af$](ÖGæc©×„­!Ê¤„İ¥Æâ¬”åú\"ÇiÚŸ…¼j`%¢k,hªvdË¦é ³J™ ÎŞG+lİE‰Â­ø‡\\””âàb¥¼†ĞyÆ¦êa¦ª¨×ª³Ş\na“ïî¥×²y`_“üRê¢….bËo¤ØòZÀ\Z¾‰0fX©îÃ:ºeF_fªªdÿwÔ^i\n)èÛqsü]\nr\Z\'gÉ\Z¬±@Àÿ¼¦w¯­AŒ“I‰ÜÄB¬³zëhÅÚ˜FÂ<\\µÊ6\Z²É,vi£Æ!MéÉn.ğd¿Ö\\\n.çª¨psV†º;‡İY)Vœ¢_Ú7ë˜ªİuvÜ…².¿ÖqÇt¿–wŞOJm)¸Oƒ|\\ÉkNØ¶´ºŞZ\\cá)öãi9ĞówŞ5éX…<¦]™»·rp:£OZúÉOÒm©ß¨C)ŞkRÖ‰ÜËŠ,ğw’‡_Ãæùï<I>WÊú²iylg¾¦‚Fjè¡KJºŞ pÂê«‘¥B±ÃöR«ıÿõ±¿>ŞxÈq7w0^Û$°Èxo¿O=O;4îwL¦æF\n`óÚ–çAORĞë›¥f´ƒ(tïŞÛA÷V¾ëYê`Ú;X”¤Ô¤G5ê|1¡‹T¦‰…‹<qÜıVÈ’Nø¨v\n*Ğ2Ç1¸	Ğ=«b•ÑÎVC¸…ntäƒöf„=MuoS2Òö¶G§(O<ã`‹\n4d€IbQ05\nC\Z8—ïXHF|p)U‡Se˜·ªôğTH\Z¡’\'ºç…îy¤{ôä$KåR“ö¸©%Š§ŠPœ’x3\rVè:¯æ­`¥†	WÄS ¡ÿ,*,£(±Ñ§Ml,[ñK«æó.¾M+ÊË!™‡ÃÍMnr3èwK—ìi©æ!g$¥(mÑ_†£PÕºÕ[¥`vá	Ö~Ö`™†1Å£Ìæ3N1±‰ÁªmzqL,mÈÆêH× \rq)2Ñ¬s“ÔÇØI\\\ZÇ`ÜòŸ½d™¤UÖ®[Oêß\"q0¿–ğ,cÔ¦B“²öœrkâa,ÏF$®D=“:s™:^²ÅùXÒ:¦Nµ™ÊZœã¡R“FY±IábÀf†8%”Í)7jP\r A2¬ÒxÒXšˆUÊJ|â(@‰Æ“‡wT^á \Z4åÅJ2ßÿÑ×æ4­»üIEßdÓÔX$.øÙ/Œ+!YpªÓ2.¥f°Z0»~¬€ö±á™öª ¸Tg©¨Ié˜ úNçYô^ësçƒ«¾$K8‡sìQ¥JC=h+ÌSr®5£ÍòEf|ABMÒÖ¾•¥\nO…^£šöPÕ>Lµ,:•ºÔ©“pé«ê¥«úé¡xAg²l	7õAè^¡SPvÄ¹UQÎ;ÊÀkªö\\JRÌ¦)íÎàj†O’Yt¬rô®Ëò5£\"*ÔòÀJCeYtZ˜£R—ë¥Œ’‰I”r°F©ì€µGò+:•«$­˜ğ8ÒU¤j±ÊšN2+fÑ®ÿ¨ÖC™öÈŠRßIgIUš^!5÷T-àİ4—(g=vœåTQ‰<‡áâĞMR–š^·ºÉ hhó­NpcB\n¹I?Ú£dÀ*3™´^¦=€‘p$\'¹T‚çªJJQXî•Cß¦S£éİ¨ò4Z\\ÍÔm…oš0–6)ÛÅpË×/#?©¥NˆjàBpßDõ…µ%ökŠôŒÙ¶©¬|ÃœQÂ@_ğì®agQr€$71Ÿ%Wâ<›Ö¨*s\"ÉÌ‚eî”[IÎæ‰ìÊjqw(:«Òin©H95Aw´jPCÔ ‡àråg‚z,*»DINm\rŞ#¢tK0	1®È\Z _\rÿªèÁJQ&¶%ÿRä6ZÔ¼yMi‘Èy/4;!õtKÓÖÌ\\uY¢…\'0ï(£ËÑ\rtˆ‚\r`°€Z³´„¦¦vkÑö3Æ(Õ1Qì˜ŒŞ%ÕÙA{Àª«_&¶­50,sh¶g„×\rÔ¡™2”PÉXä	·QÑ“\'µaÇØJ+€íôÜ.˜Kz8ßcynàF*·±’Ot|1Şv 6Dlj¦Û†1F)éÂÕÑÚ§uK2øUĞ—AİlæW\0úµBâƒÂtÌğ\\5Ë	´°ºëĞ’%EšLç–í\\·ñê6€{+®ÿÒ>mIËı—ôÙk4.İwÊaFLZ` †ÿX4Ràz£(Ã¸Å{œU/½ê]´7¢SÒ‚¦uñ\"ä\nùÔ\\ÇºT SqŒ=ÊºÅ|”\'3Š~p}iŒ´ïxÇu6ïÜß`óŠ\Z²ëU«o{£_X‰á·Iê—G{çÆÄtÊlKB B ÕSQº’¾Oj\0÷¶W¹¦·-îªÏôåFF¦‘BÍ¬¿v°ƒ!\rß«S™-z›”bfx¾ :¹•qQ’EÃ£ãA|x7w™ónÕs=ÉåCé–{ì$OÅµNxãQ»7vã<Z•YŸ¦nÈ×e!%=ï„D\r@ğGR£qœR<¯âF[4NK¢&º3;Ö*ZAEä§ÿ\\è+a!ì—\rğ=t\".ÑÄ8ÿQÁ³¨^÷õ\\X52ğ?àt7ëT|ıÕ7y4:1fOrÓ€™#O¸4)8—7u´tnS=if“rWïncÖ£@î;}}BPcƒ“°‚”vpbxiÖ}3/R·Y8À)ƒƒ;”D`¶b74oj\0;@}rHüÁ‚†HH!‘	s0®\"_ ÈxOPt7nn…åtñÓ…ts6Atn?ôv¶øn¢#5xT=ï†¡C:*Â\"Àn#f€5„Gg);@ô¦:Do–RW}Iv—W›R=róR×u®ÑE7 ¼b!+cÿ;H•$Ls†<Ç>gxs?$ó·‰)á\0¤á%\Z IB€0*ó&ó:ÅyPt0UD}r\"hÆjõ¶‹¹´7\nˆGµøCµhGs³K@äG>d7ToeG×|dpN%bn7«:4Ö\06Ğ\0¤)Q°7l”}P\\D\'HBGÎ#WGiÄ‘á¢á(%@gU2ä¤S\0ì—QÀj@:Ñ£‡B°:*³)0p\r\0âQ¡Gá\0R01Ô$t®±0ED2rBwÖzÚ˜[°c¼={#Q´•¿>³Wc	=éfïc£#]\Zgx}ÄG]V˜]£x®QXşóÿ1c«Ã~}Ô\000g“èf1\'O}TÀ‘”;@BÀ˜{±=Âáh¥ÆE®±\0.ü(Œ©Ñ{2ò_>¥“){(53Â@\r@\n \04@T@i ôç•ĞP\n¯01Ë¤Jt%pU$3ú‘à¢f1Iä(’“); 2SI{ŸSk!UÉ×fĞsç	•Ï³)àSoéy—õæG¬–—~D}º“hRØLáƒDõ¶•Ù~Qà@$#r²\0ÒG˜Ms=\\p‡kø\"ÒÕ[à\ZLƒJLM°1\'®ø&›µŠşÕ\0,	7ìgAäc)QĞ\'\r \0q\0œÁIkpœÈiÿ	°@?Rd;?C+#k@2ã1H¬ESâ\"˜ói}´)ßÓ~Äô$sƒ}axD:~Dª#cØÓGá“……ù¤\'?|oñéGMçŠäãb€„b˜)}T ñf\\ Aí÷ô’Ş£)%Xo€C:v(0	h\"R!,{elÆŸyp›´2B!\Z„ğ6‰›ùõ jIà£¢ù~3Bp£É¹£Ë&Ÿä#fPà2ıóYW¤”vcD»Y>LªJ‹©ïf:<c×ÈCÚc—·D2Úƒ¦|”:ä7Êj¢c\n¦ğ““r`ù–(	“-¹›Ã&§bØ¦æÿtDxMé7°\0YÙ~\"\Z„0„ìç›S¹=í#\\À(³™7?bc \Z@7`¨b!S©P¢â%á±:¼x=“8:\rğ “è@R#o\" @oSyp7pi`i\06¨Z	§ĞRp\0(P¡ñPA—°‹Ê4‚©ğ=Åzñ3féç1O³]J2€:,\n;µæQ-™7\'c˜D`JA¬ó¤R3Aä¥2ÖG0™=Û ÔÇ|S³€i)”‰T0g\rpêÚ›+É~,ª\0ç:•oiÒG7‡t=Ğ±	Xk1Ù4-vLt……)P·‡êHÅDL‚¦[TD˜]Ô=*ÿ¢ìg\"@60g…dÛ±²#°l%[	Õ„VûY°!3T´w1€¶.šR=T=kÀ õ$%V\\ü!5Ò#—vI)\'H{ğIAZDá“~$HZê4A—›Óš=—‰=)Ú¼22‡$¼ÈH2hY³Q 1Z™{È®4`İíÚ\0o¯4Hp0}íyDeÛ¬×ã¶-†ÄD}«i7†Úµ8‚ŠÈ18*cxÔ=s\ZkI@PxşuDı±‡iğ~ü‘.P5°¹“€( ºÅQ³¤›ú¡‹s†ÙRT›’şÊ)´›~é×?ï\'$s|Ùn}T´´Ç=~ÿŸ-¦\nh—o}³K‚´=Y*#?\'B@±QĞ\0Ûs™“YÄ{úw’Ë‘ß©Ü#¢\nª\\à~”Ù@İkÀÙ®0pÅTü@-ú {˜“àc‡3VÆO²=Å×Eqò&û»p²1ÔÛt\Z@LşRª‡D›YÄ‰.z6@H‘]ŞspU´¢.Ğ	ä(Q’@–“lÂ1ªW-T2ğ“k³/ÛyïäÁ«3gî‰sÆÃ¥ƒ³7=Ó3•Ïó¥H;Hà³Äñ¶½²Ì§“¨®EÜ\0/9‰í©)T½ôzsÆ\nĞ®4ğ,\nTÀÅàû›\"Ú®,ÊË\\àJtDsÒÄ/É”ñ*ÿ¯t;H}tp“©”Ø(´k2+óu;ğßó7oé’\nğ©x´ÜJ‰ÀV¶û~\Z@²¬j’[)#bJ¤|ó\ZÍÕbn8\'õ…ZØtQ5Â1œTÀIKÊÄ‹ovy‰˜	ÔfÃ•şµ@6ËÄ»,g»A,zÄ½\\¯/Ù¬ÎØ7ò\Z±¼Ü@‘Æ\":o0àó¦\0àÓ\\Ğ®QP¯\\@IP¯œòÔ¼ B@Ìİ#¢e¬›…tDİ³™P‚³£qq23T”¯SHî\']°>íGx¡#!áÜ­@Ö±‡¬=vàf 6z£g2}¤UQ$]ˆÈ¦j´iUJ£xä-|ÿs\n(Dš\n¶T° £l›îÙÑ{£…w)c»È|Më°(Š®d»¸0à=WIÔÓlÓG¬½)Ú~É:›@œ¯Û=0¹ò¦\0\"ú›íÊÅ@­\0Tğ›ÒÇºMP¯ÌŒÅ4àÛ*ÅX)Õ\"Ê¢×<ÍnûÔÊDåÀÕS·9ù\ZèzÕPºDT»Êè§w9·ïwDºé&3Ò›$F}\Z÷4!°\rP¤âê˜âJ}jƒr\"b‚\rˆıcGÜC­Oj¾TÔ…Çl™õ)DI)‘gúÊ“ÃñIc©«´ñFÅ¼,o`\n0ÔÑ\\™ƒ±Ç¼®ä~J›Õ›ÂÏÓÜ±\"Jà\\`2ÿã\\£¿yÌ6°Û@í½ÈüÌ¢:¾XéÜQ­ÌÈİ=ùZÆX\'{?ÓHÈj4¯,zÑÿU2~³ÀFô_Ş‘°±3©²2tÂ­éıÏ™q×X\'\',Z¤!€®¯(³1ò4E3i3#\'İÖbTˆ7\nz®x[Ê^Z  Ğ@%½¥¥Œ˜›¹X=5\\Ã$]³Â:•»®0ÀŒ”éÛ¿9o\\ğ½ÛT0Ú½Iî÷@eÌ”Ëí_Aé6àZ \0\\lÜÕÔ•ÔoPÍº£ÌÈáÙë›oÌA>ÍÉ\\âAÎ”ß˜ä4üLë~\'Û3x \06Ü¦kŒ‰ÒUÕü¡/”d7ZÄ­üX•Ódÿ!qf®dlçÊÁt¼jSÓvŠ‡CRëNg\0HX¹ØğS:Ÿ§¼¥{©“zcÙâ³wø·•­…››EŒÓ_üÅÃi§¸}ÅÌü›\\‰óÖéÉÜbì®xŠ§”¹®-Úì3îê1:ò¿Ô\"ïqPò‚lë‘>£{•ÃŞ›Ãé®,şÛÒg­O=¶ù\\Än»ÆGÔÓI@gĞ?N‡«5käo“…¼H2µ2ıñô…[‘LEòû\0À}‡Ï´1jÔæ¸wmGTpâ?€Ñ{ô¾d\r¦{©Ê¦ƒ@m?{xtå>¦-ù=s:•:x±-Û7ã1j§±}ã”¾’ÑüÿA˜øÔ®ä~j{•7àéƒ7ë0Ï&ª1êÛpÔ˜ªŸª@ÍŒÁñÇ¾éé\"ÚÌ»m®e+ÆĞÕG<}åÛ=ÖjQp\"`›SƒŞKtİ3ÂÜßh¶íœ“!óìşzKZVNç¡ºépËî9Eğ.è›&(¯wu2î\"×Ç×†\'N¹¥<hx\0]$Ãz½Æ¿Ë—¿Jó”K˜G^DU››Øã~{Ï÷§n§¾ÍÅ§\'ƒ\\6\n\nT64\r044047BB7;Q;\r7š“T‹ˆ\n¦¨ˆ§®¯¨²®³‰4ŠoŠ¸Š\n0¿º4T60T\r˜\\\n\\\rÿ\rT0BËËÎ\rBIIrrv88× × 8v7›;;Bí7Ø\Z\Z!úkk kö\n¤@·ÀˆlêÔ-è‡	!şHœH±¢Å‹3jÜÈ±£Ç CŠ¤â`ƒ3¤!\"…†‚¨á@\rè^‚˜Ù2ƒM})Rèê-¨Q£rvÊ	:óhÚ3\ZÂ[Ò¥r²!’•ÜÕl ä¼‹²\0„\'!`²‘ÄÆ¡$¦Øbğ@–+péÂ¸!é\r¨HÕ 5ğÊÚ§GÃÙP@(Õ²U\'(0¦@™ò…Èƒì¢;™3ç^Š¨ğò‰¥eÇ`,2•è¦×¸©A&ÄÎÿ‚zÌí<ˆ6!¨v†Egq€Ÿ=€CóÛ‰¹5æ2àX“.\r\r ÜÎ½»÷ïàEÖ\0qc¾¤ånïZ ìI6AäÛ—Ì)ÂÜm[èÑ£Ş„%PKıçL-EU\0VeØÕ5·e#D6Y•¥UYïÜÖ@\'Ø°X\\¨Á,\nP€ÁTÄ‹\"œEòÆ}Aâ¢#;ĞğÆ$í”FLb…$BW-\'BÁ	`@Y§¬RtQ‡“tE)åb,*ğ†\r£ò4TÊ²Øpq6pEÍ d˜ì´\0·‘“_—È“É\rº”§ÏKÄİÄ?\0Ô\\:@—ÆJê¤ÿ#Ï&\ZĞQxF*é¤’Ê!)à·Ûnæğ”m»Ù£Ï:ö€ğTK)ÈÒP/Í×RPï	´PA½úŸ\n6åiUE\r!6Ø ´@W;¬Vgyˆp8Ê(GFöã,Œ%É˜VöB–VâÒˆ.‹E¹ˆ”ÕÎR‘‘ğƒ ¤dº–%Ùdfq\\ğ$]q$¢­¸Šœ9Y*ª¡ÈhiÃ™c\"¤Nm3İÖf2íÈ9&4x eMøØ:şüI]B$Ï9fÌAéÊ,·ìòDæLà°é%%UIí\\Õ;Q5Õ§>PƒĞ?\rÕ}\ZÛÔ¬GKeRŞ7®)ˆÿ%a2BHáÀ’%V\'Á\nq¦\Zj)®¾\nDv$“I¦RËÄ\\ÛX½Oö\Z‹LÊÂ¤\"vâA”i¤ºDXä»ˆ\0¸â‚¨eeö6ÉäbˆÂb”£ğmˆ\Z±‰pŒ9\r`a›aãf&˜¸‚Ë3-;<¥!˜a“1áƒB©ƒ®“ĞJ8Øqè\riØqÀ£/\'¯üòù:ánŞ4ÈÔ?¹Ñƒ§), ›¦öy”Òö¸\ZôÑ@ÑZ«­şyU­U/İ JbqaXÉ,°ÃQ`’Õ`t²ƒ1nY–¨T¢ÆœÂ]ñj[c.wÀhefvAàô7µa¦pP\\»<ğƒüÿ HEBEW8#Å«2ùRÄÔ–\nS‚2?ZMµ–Ñ..D¡\\ ‚k vœ$!;±¨ÔLÈ‰1%BE\n´Ì\'¸3“BI\'Ò)”: ƒ²ÌyÌ£“—­hAa9ˆRrC…ìc7°*GĞh•3–$*@K­^E¾–)ÿ1zRÆ]h+œ0×’…wpB‹)[*ƒy™^{[·Âw‰„ïGÙ.Ê€]—Á@bóƒ€¡ƒ2ø º×Ê$àƒ§4R´0¤öRm¨ÈÛµÀŠ¥3!Ê¡,<OdÍ{ÃbŸtXˆÿœÙ%h©›tàÄ]øÚcÅ5¤á\ZçL×˜ƒ`ç‹`£<çéŞ”%,Bãm\n$G!@å)YÕö°!\\Écù`ßzÎg4 ØãQãÕ€¢–=úi/(±Vú\'Íl<‚ªÆZl0ˆCâZ«À€t‰™L~—íb\\»ŠÔJÔòƒ2ArÊSYÉ” ì`:xKØÔ¨±ƒ-ÀÔ(Õ¦5¥)­N®m0tßAˆ$P›Œ†\Z•	Å	tcJ:äxÀ€6¨/©°†\Z\'øØ“7;³bÂvjG\ZÊÂ5¸Ó5€H<éÉØÆf$=ùDÿÏ=Z{# qLzÖ•˜©C‡°sSs¨‚¡”/AU+PQ’² « ’%Çd“,®¥Î~|ñ„3&á	“F©rIb›Ú$É¸…‹êQqiTÄR9HÀssš€.0ÕºL½¥M•ÚÁ.x0±Ìn–š€èŞ2Eâ®-×kSæ’„Ä%îe„$=‚mñ…ja×L¡;htÒ±\0Ã•”Ù‰	N0œ½ŞdŠ[«sT²°xÌÃNú‡+0;ÄA;\r±ˆo³4bí3,ÙóçfgR€ÚÜ³TØ£PÕ’ÁsÜà\')ĞPÎG•QM}0±ÙÔ¬fµ4kX13+YÿÆb˜Á8#7¸á223DÄáZo#Lá›ğª’§E®y³[]2oÀÌgÎ®yÇ|æ1“ùÍçMÀšªŞZÚ”¦5RO¡R-ÓEt!(µ(¦™©FùW.Æ	Æ K×`‡uiAN¬İíŒ#ÎRì¬¿™\nÃşiwˆuÔbEÌjåµo lÅèÒP• ™D7ëk­¥\Z´€c«\0m¼}Ì·¨8èØWi9vsO¬é&¢3âkœÁ	x<ùFléE!zä#SÖò–5u¥sojŞ1<ÍH·ºpfu§9îfj	Ò=ïyGwóÆw»Kğæ\r×ƒM­¥RÿÕ-Ût¥4%/`\\A+ YÎÈÄ\'š‘³Ã± ¬“6(†A*„@\0ğÅ(º§ğ³¥È? Ãğ¥|±B¨~ØuğâZÍsWOo³3•¯jÕÙ°˜N)ZËÆ‚°f‡öÉÚ%­Ê«—¶ ÷©/+›RãdQ\"¶lä ï ö/@ºÛGü\"[HÔÖ,æ_§â²–97tŸëæ|§{\0ì.Ş7€÷½³ûî|wÂßû>ø3ë]ßˆ‡7œË«æ(õÍ\0?ïkŠ.ÁW€ş e`ö_páóÊß\rı[§×Ä8ËHXwNp¬ÎààXÇl~~H§BHƒË¡œ£MÿJ9\"ujâÅU÷üøõd1­Ğ3ÑšÉñ}šM´Õ˜Q +=0Áï;¬”¸j3Y\nJ˜}ÏØŞæLp†:n`Cûqˆ·¿XLi Aˆ,\rB‡%b»‰¤]€»©]f^ü¦wüÆw„·wHxˆ7\0 x\rØwĞ€p€HoğÆwúV€õÆxÈoŠ×J·]“‡^èrgzf$©d$À%™\Z0	©X\ZG™Àìwc°p	`Úg<°>4Nü€;ÿP(Ğ‘	„±i`#ÄCğià)\Zğ{³÷\'Âw)ã\0Æ‡|^è,&¶‚ué1m¨B}b\rI![aÿDbaƒ,r u0±¸¢YWÁ¿6~eÔ‡öà0^\'6“?Í 6dqCƒ8	ªQ»@Õâ7° gÔA6%yJ5fHoš8oØ‰\nè8\0¢èS‚ç‰ì†w‡§nõ–f]ÆTk‚MåEå^PegšçT\'€6Ô‡À‘0Œ‹ö	—q¿¡CÏà7F’4€Nt÷>·Ç}0ÑË1ö#º‡\'/b#oàoĞ\0æñ÷p¿\'2ë@(p\0ğô…òøÒï\'Ïp	Ù`Î¤Yn²2}[aEcÃr2¡OÙ#=„ÔƒÔVG\'mÊ¢hb‚ÿCõ×\0”ch©\"ƒ&ï2$“÷mè%oŠgø&owGx8809Šx\'Š/y“>ğ>à/É€1©Š w{·gäK±8fKµRµ\n–c94€%’p8r_uƒ\'Ÿ€yÃK?8„\Zpàäƒ»aH†\rğ`m17Œ.#°iâ¤ÇÁrr(]8|©l¯qcÏòL% ğƒÏ ?VC!lâbø´P;ch¨Feä&Ár™‚	ù“‘Æ€\\@³ñV0P#ğˆÍ€MºL–\'U•h’	PõöŠ™ÈwB‰w8Ù“¸)“¼ù’¦È“Sğÿm0;\079“0©€¯˜f³›j&oó†’9 ›²p­„8¥4˜ÁÅ	8r#\r@9¤C˜\0€%»d_iu0–¸³;c–AGø…â	4ğíğ@4°ş|Æ6—.}€HğE|Ù ‘sÒ\0ŠÒF§›÷¤üh!F~ë™kTH¸\"~êQ!Â‚D6Ç[A	\r@6ƒ@0‹(fÃyo¥9Ø\"í\"Kã–8?0^äeKˆx‡”ğ”	“ÈÙ“½ù’§ˆ\0ÁÙmğÂÙ/\0/0S\0^Š\0Æyœ¼©œLµ‰Îéé›ï¦ÿJÔIì5B>E”\nXÂWòUÆ9_ZŸ·§ŒA$\0<áÀ}yNàN,Ö;…²ıp„÷Ã„°Ÿ6b1Qb.q1>+×¬s ÖQ\0Ùá úCY”:œB3ÿ(™ÑaVÏ„¿r[Œ)Yå—bµQ÷?©ÓYZ	X$7æœñy›10á’8”j@RvÑ. ]ËU^#X,Ùw¸¤ø¤ÈÉ¤7\0ÀiŠSĞ$\0-@Xj¥Zº¥]\Z¦bê“îª¤AéwCI€ëj\ZEySpç£¼$hµ /äÂ\" µ§9¤B\'pi8p±Nø`;¨»[Ô·±ÿ›à	l /ò\"/¤‘1ŞÄ}™ªK2¬S‰%ªó¸¦Ãh’9&—U!¼!i!ë\'&çpqĞC™ba,hë”~1³ ‹Ä5X”záŒá!¿X-lÁ,×’\"µà¯\"8şW$n&‹+]Ö:”(“»9Šb\n¦/ù¥hœÁi¥-Ğ*@* \0rk¥êê¥vû¥ğ®.	”~Wo¬Øµ}\'›üöo±ùA+B9M\"%Ø2° %i AˆsP²G;oTXĞÁ:Ğ±–ğ€[5R\Z;óYƒZ±Òi’E%ƒ(»s*‹|\n!85†:·e³€C£°ÿ™B\0äP\r°‚—À1\'’I3×€0_GˆÔFÈ`mËà!0 ½À´‡ğ„–\' M#ÀK’3n\"ğ`V¦ÌIoª(”·	¶7¥`êŞjœø\0ë*¥Rª¿/@®$P Àm·`Àt{·x{œaû®FJx·‰›>9î–x¨‹3….,ô”™±‚‹ğ,¦Â =Dá`—+Rw;FXEêpN$c?º‡Ÿë\"ä¨pÚck>N›(672} N—{9»ó4&T ·q† Œ¦sf¡CŸ×§®q[\"mÊÀ~æ`×\'}b3ø“,İØHéÇ!Q ÿ#N6@ _2@Ø2@KŒyÆU¾¤A¼”6Aâx6uf¶¤oH*›Øz€x€Új¶dë¥ö{¿ö›¶tûåÚ: <mK,·s‹®w›ÈìÚ®É)Á Ø®¸‰+)gnwS$ÔKÿzÚ¢§K¼‚p\0{è0¨µlr\r²šì0k\0h!qPf#ÙB\Zãˆº¶F„4W{Ç¡E–.€RpÄHFY‘%ÖÀa…‘X:ª1\n6$qöşEµqcµO+,ÎĞ~jaˆ\"ÏNÖ½óÕòp•cá²7ÂJ$wp•? gU+ìÛn	è·|¿<¶d“÷;ÿÑL·äÊ\0n;J0ÉĞÑ@PÀÌ\0- ÉYÀÉwÛ¥e{“Üª›ÍÀ=¹¤+9€ü¦”‡³š¬I\"Ã@Å{1=T¹°7¨Õ¨}ßä1~¥•Fû–@6/’vqp1;VaH{u9øpsv(ÅSzÍ•d™\0\r94q8Ä_„!ÎŒÑ4À!ÂpÇ\0˜‰ÎXS±À‚-öy¢`C.Š!…½\"²ŸW%Rë\nyÅT8;\Z-\'0yX»n«È·¡ü’Bé¤ÇùÉ\n|·[š®}Àl«0É, ¢İÑ\0$pÚ·™<·%]Ò\'Í¥vÑh¶(­¿úK“<“Hš\0y—ÿL5J¨d\"–Ñm„ ÅéX¶L?X\0(gÃŠ¢N\rà÷™[ŠshG©\n@„5Ÿ¥F µgN/¼0ip}`ÖÌÕ.Ã« õÇ€&ÍCÀ“°ÏtzŒ¡ •ÖÕp‹éHÓv?ğ‚÷Ü!“À‘\ZéÆüüˆøÓ\nU¢®œJcpIPµMùx§¦-ÁÆ)ÊxÇÈb+¦\nœÀ]Š®V\nY É@İÑ:À4Nã:PÚ@`Ú¦É©}À.^ÒĞ¥i›®_Êø‹\0$~Ò[j¥ÁyŠô;¶„<”§¬¯1…®Ø+xÜÅ}1TÀ:ƒè+ï{.‡kÿËO&©:bÌ40\0a¨j{$ÄS<k ŞëÍŞ“2&rv“CsŸP1ÌT¼î7ODäT©Î ãdƒ±»UšÅ\0	0àdC9³ARÌ h6¤\n“DtŒ\n\"LJş7s6ynæ’c\Z¶)\r¦@âckë—¿^ZÑ¥ÿëânëÙŸ=ã5,ÀÈãğÑ¦Ñ<îãšüëZêÚ&·¶m¥UÚëLÎ¥OÎÒŸøwïvKO5!ÔKä¸äy\0pv\0ZıµÔ÷•CØ¨pb±6BHxŞÿÓèöî|Ñİo¹	™Z—`ÎEŸ›{Ö€Õ} 5Àçaô\Z“ÿZÅjQ€.=Re’ğV`½’‘3WK˜~|Á´QÙİñ‡½ˆà!â‰PL¤I $³”äÎêN•]ë‚ƒ\'ëÚJ¶İz¶‰lë`j·ëú¥¬¥½Îô¿~À§\rãÃ.Ú5Î|`õ6Î8ãoõ˜aàâ¿şë@ÎÉ¼ŞëĞÚ^·ëúäzKxjún9åv§T\0Ë§].€iTÀåä¹ÎC…B(l)6÷?lp%x=Œ0Ât1Œºœ[sÀ·ÚÌñÀ„…1\Z\0bßŞ¾L_.¤¿°éñ\'’¬`94\"cµ‹°Wf–@ÌÆêÿ!W²éú¥\Zwã½\'ğˆ-´B\rà\nHbyì’AUëv§’}WŠ<9ôGŸÈBoí,ä¾nÒ+nÑ¿nÀ©½ì¤Í:À5nşæ_õ¡ì9Şş:Ñğş=îâÑNÿlÀk[öêÊíÜ‚ƒNŠ		?c?‘?\'\'™\n\nT\\T7\rB7kv\nT­¡BBv³´¤;}k§\ro44oÀÂ04\nÆoqqÎÀ\rkÖ×Õ¼ºk³B;;\r7¢07ivkCêëìíîïğñòóôõöì6”46œ\\llòpÁ†\rÔÀğ@á„³MI¸(Øô”‚ÿ9) ¥\r6`ÀP`ãŒœØ°ùç\r^ĞBa\"Á.¸ \0SÃJ$UqaL#GJ$Ø¨\"> úğñbJ\0²jİÊ5ë‹\0VÁŠ}Aö«Ù\0d!¼È¡-$À%¤®»:øèàÁBG_€³à»‚ÇŒºˆ™+—ñÛ0n#»eĞ‚„Š¸‘Ë‚RuJTB\n!\Z½AéÒ£	rDŠdé’&œ<[™*eGÃ™:yº!$\n,X´qQ\0‰¶w¸9cØIQ;š+£ Ú0eon|ûf\r·k¼v¬Ypkû\réÆ\0d0ãàû÷ğãËWGáB}O\\Ô Ìÿ¯€úÃ‚Ôß&÷‘dCCÈxB35!ãÑK$QáÁA\\ 4a\'›Ä´‘34‘8a@Á\'`0‘}AMâk¨¡V\ZSO!0…ŒTq6ÅV……Ua¡õ•X>’åcf½ –da0\01Á“ÜÅ{	+°ÀtC—|ğ0ÁaO*×bp56\\m1—e*Lp	-d¦–;¢§h£%ÒT¦9”%™¼æŠ8v,`ov\\ğNØğ	oÈ2‹5¬aÛ\Zo ‚Æ|Ã7o0ãÌ\"!¤L«¾ÑÀvã²€wÜd\0‚kl2ü”“F\ZÌ‘Î|Äk¬=ÿ8Q b@8q1ÁÄÅKfÔ_}şC\'0HX“AººC-ÄOä^ B\rœHÒ>]Ğ:a«¬ˆT…AN?Èp”$?PÒb	0\"ãT•e$YDfÁÕZ_©å0Ä3ì[’EÆØ™uEIåÇ~	Æå–\\Æ`rODğe—ƒM &”ÔE×b*ÌYóš8«€×œrÕ™YUø´g{Ò\'i¬”Q‚ZÉ}­!„¤UßI°ÒJ²˜q€q\Z¤Â%¼ÕI\\\'8Ë c.l4Óö0Ğğ¦ëxÔP3MŞß„“êl³¤‘A5Hqìáˆ›O¶O-u\"©¤ÿqÑÒ@ÉK.+7PÁ“HÎ4\0R»º½ûFQh¢¬Ìt‚\r\\øtµ\'Zäğô%õ(¶c;RŒX2Á~ö)ÕmüØV™5¬ğÄ	1‘Ffl=“M\"å].çµå÷Wb©òÉ\'?ñÄ1±Ë{‰ùrÌ‰Ñ¥ÂbhZDœqVÍnRö³`‘QÑàA„æ€ˆPÄ\0\"J``„Ê\'ÊŠØ!‚8‰ƒ„ ‹¯uà\0!ØA	<Ó†©€\']sB¢6hÈÍFK°ó‘4èjÕ(®Â¡†èĞàUÕXƒ\rÓ „>h`X‰K¢é‘;h1\'™3ˆ}Ş…€$ÿsb‰÷Ñ9léf$œH•n–AƒèLd_ĞÊ	î>dŸLüãôÁ¾0Ğˆ(ë	P#”ò¦1Å`€ôÁ:1¯N>#Ò‘œ×–êEÏzÃ$9æ$¼èÀeT\"Ù–²>x‰|O@™(Ï§²¤ìJ<>?í)F10‹ÙœÒ™FB\0-AÂÑŒf4@>‘†uÃjX‰tbˆ³¡‚0À	*p°ƒ\ZØAÜ œa*N¸@0D‡ƒäD*Æ2šQªº‰C;ºZ@tDÑ€vö°‡¯ÚÁ4nqÎrh =KÌ§>Õq¢$¡!²	\'œ£–Ó†\nRÅPxK7oÿ Â1R’Šö\'‘È€2áše*€XfM”Õ>°ÈACJ ”Ò,EI[Jh1•ãUÏg-heH\0ÉNÆ-IÒ©$±÷¦™Åì}İã`ø¥¦š(ƒ*(QÊó¥ì”1Xß•öK˜¹f{á^üã3·(l™Ñghú™CÀh.…„0!H‰C4è^%9x\'!ÌA5§r†6\\qÆDšQNdí\'Ì9H©BÊªë ªÛi§:OÒÃÜà\rlÈì7fqaäÕ†§À÷ÉZc©+D\'H‚MpÂ‰\0}ªâ}â¥¨\Z2Âl+&æ\"Hÿ&¢À-œ ÊZf‰DÄ»GQ€^ŸHÂ	ê(0–à/ÊA–@Bf#Ë!ß’S:]FIJê)|—_%¥)Mı‹Ëü%*…50|ğd\'Çw2©BõÀREÙªš22”2«)Ó’Ëbù¾—¹O¬—¼]ÓŸ),­äZ¹§C”w-‚ãÓ4(Œ8œ@jç\r<@Í©Xó8.la\0\rè6ö)‘C¾¹ªç>cÁ G;1»54 \n;ˆB;Ûäo@\'8¶Œöà³µ`vr÷7ŒÈCõ1DqŒfdÂİòPÛfL*Pg/‰sğ\rQ öÙ	œ{ÿR	ÛÕ\'(9¸Ä2éE †\0*ºk„%ÆË=e¦ƒ ÚÚĞ‚6$¯…\\Ï†:TúÆe§Éï™6Ë\'á%•ß#YL†@µªä;ğ(¯J†«š’ªXÁ¯»´‚\0¯1‡©œ´ì)¥2Ùõ;u|Íz\'…¡e	qTÖê„v{N¨ôK!‘€.X‚&î³”B¼jæø-€·§„)*\0£\ZœÈ	À0Ô»Ş``]ÖÈ™ŒëÃÉÆ€\ZnÀ†xF‡MîÈ?>²Bg¨­@á†ğå|: ãa~Ç?‚âzSçPéİÜ\0]…êDAe~NĞ€%¡£Üîíÿ†ĞËr?È¿À İ¨¤ôú‰‚€	-È4ÛÀ#FC<LL—\nãt^Ğ^›İ¬D%êÆŞ¤&¸\\æ~NrÌÄVïFØ*¥­Ÿ:w]Çà&«5ƒEéà\'Ôº×\rîµŞI™J\'Í`Â©äË\'WĞ½˜m˜1L²^ôªÒ™ Y^Ä5•Š ºmâE,Å2½Üà†Gˆş4N ,=}=¶\'$Ê2Á\\\"	ÁÉ%D@ö¹ÀX9]Õ\06 9\ZMÆ,5šÜg6Dá$¯’\r+qd R\0y|>şñ!ÔÀû5?è <äëx¢}¹µ“\nÍˆ	lÒ‰ØÿYrû=\'<[E”$uQÊ…\"×•9ñh‰Ff\"bÎõ]Œf{N4J@ˆğ\"¶ƒäiw’Subv5S32ƒ&r1‚8S‚¬Ö1ÚS&@p°ŸD>äƒwwUxWƒº†kº†€w\rök=Hkf2{€>ëó%\'C`°l*(38£S8åÌS‚„Všac6FŞfbán‰\Zğ\"†@@PñnzĞ®—S®\'&‡	|ö²]¸Ñ\0jĞ¥u³ÇÀ 4àdj\0O7@ej eÄMÎ!:ò$µ’+iP(PÚWà} +°°dB@D6„Ö€ß·ÿZúD.,![¢£´å1°\n0Ö.œĞ.\ròõWEÍÇ4a41{9A3Á;I£;–†0?°h(D\ZNa4¡á›‘<VH]wÖ(\'¯„3ô3?ó33_3‡qx< `&³ƒèx0xkêXƒs7wæ3w5ˆ;˜>Á6k³ÆwF¨2èƒ&ƒ„r&(HXğxMÈSeÕH¦^¹mPñYİ†7S6–c¬g†ğ¦‰\0­!h6ñ{ÿÀXâOOi cçËğg\0*\nWe*!.X{!Í¡\0l@e×ˆÓ×ˆy…‰ğ0‰–X+; -´ÿ*›\0Z|(§•k0”û„\0F7GQgò§Â\nyÕg&‰g67{Á X³d…Â	-‡;ßUZ`G¼ct˜hôò],•Œ,Õ}ÄKX‘0EÌ3•\'qK—3eB­”Š¡Jc2åˆ%wG˜érÇòxw‰w	v`¡¤ƒ™‰w@(l´&w0„–U£”w†‚C¶é?Ô6yÈ“^UQSÛf…>P@¹y†œVhX…U†eXÊÙ\0`[6ğX6°ñjğ¹ñd°0}µÇXvÍ`|ØÙd7Xœ5Z¹2Š(•³Ğÿ7ƒ(ìAsp”ã!Ÿº2ˆIÀ*ÁI°‘5³g\nfÀqJ´Å-)*Ì sûĞ¬8\n2§Z`’Ô¢—\0]¥:är]\"‚;ñg¼SŒs/Çx]ì†Jc^Gã9‚<>R˜ ¶£…Ô5³=—”xOò2j™Ì&&ä˜*SšLZ ™ƒíø™u7JÖ¤ôhÂw¡dJãÓw¿6U£&˜”³y$$ñ…HPXH¹›Dœ¿‰Mpzœ¯g†fØœzPSĞıpj-,§A¼²ÀA:4ˆ@h™À<a;©Æ7 ¥ÿà|N¸B\r×Ğ“à€Wİÿ\nµA”CÀŸ–˜©ÛAZ\0Ğ)G¼G\rn\n\0,D)¤3Ÿs–À‡á0P1„%bIUg-ÁÈºo#ú–qqIvVÌtŒß•,jÖj­©A<•–4£1@œ‘u=ê„JR\'nr&ó%RB%ƒqI~á®~1%‚‘x€ášàVÊ¤:¸¯2ø\0ºæ2š&JVz™N\Z+Pl	W€ñ‚Gk[k,à2E\Z?4S‚•A®jê3Ò˜<œ!bÇ§ÀYX†eXñÆ‘wÚœÌ¹@]`n2@rµ¼Âa² Û*µGä©>j|l@úI ÿ[Ik\n“°²\r—È\rßYZ\\9T€s\0r5p‰ 6Ö™š˜Lp‡6€´\"à/åÖÂ„õ&Œ˜àµÇò	¢ÓN{fs¯p¥•eµ«ÅÇPN‹Ê\rq	„ò]4á¬TôR]N‘hN(,š	TWy‚\0@CH\\·£sÑaK2û•vIµT\\ï*2\\â‚ĞŸ™¯VŠ¶ë¯\0°ïxk9X°S•2Âæ™À{ÂÆTÄë°ñX©4¤Køfw_n¢StB\'Ô¨9µ›¼™0T1»é\'{²ˆ†wZÌÉœS\0LFgtÃˆ5|v¶ç²e†š”Ş\0ÿÅ—9\raŒ>AGváù’YÓ´L&rÀµ»€‰Kvsp(0ê00b#`›ŸB„‡BëoêÒß6WÂ$] n@šßW,¢ Î”0º€0vU»5\nH6ÀJ-qà‹÷r	9@/ıÑ4:ñ‰vÚj\Z;^2j@2ÚŒOAVÑY±£Ò‹S˜!T€v(˜¤J5€ñÅZ]RÆşH»˜9»šlü™U\Zi°é°RåwÁÆT+JxÇ[¬%AÇ3ˆÅvx‡÷JàXTor˜”Áa ¦„™<É‘Œ<’¾–ÜU€É˜œ§UĞÿT×J‘nÀªµu?¤eß™ˆ™UZæ¢¸AgnÑ	Ô‘xgpee8´¸‚+ 0+ê””IV[sp0—x+}ÕW)ÀËr°\0r€<Ìğ\\%—\"0œçcÀ¶/+z–€4ñSY«ó0\ná05{CuÖ9±ŠªÀ*|„!ı±5Ñr\rá•09@AáöqJĞÊ€riLl<$Òº†_Øs˜¬fTk‡®{%Í%e»]rU¶†Æ«»¸ÈÂ+J4È¤€Lw`| (cJxW8`\0|áI_B°RJšxÇh°‚– xÿ3&¸±ş“S‡ÔÔ’ÉLÍZ‡†*ÀÉäK¾-p¢ñ\"©1Ê˜ 76ğ*¥¥·0\n™ÕN7g¿ãzıBÎÏÅ¨5ªp/QFßP\rxíÀ¼|0‡ö§ÃÏ7`\rÎ,Á}Í¼¬NÂP*\"` ÂÑ‰5I0àÖÍz4ŠF\0° ˆÎï‰7+AµºÁf4 5òC7|(÷\r:×¡Á	…·¶W	2 ^A¬;Aü,£‰¶Å‚À¢½äËcÅsÁ±e7¨;¤ #Æ°Ë2í%/ˆ2&™r|¥:x6xw£©Çiìæ£2d %<°—I>KÊğÿs PâóÇ<Ş10Í¦J)è$Şhº&H\'áK‡Ôi—,¾¨*ÉUĞàWM\'Rl4“\ZevËApÍqÊôû*˜…Ö1¡FİFwá\rnğØY“´Ã [\n×YyÃË ğËy³|ÃLÌ,§æÌËb¶ÍÜW5.i`Í\'¾Í¡§;¼WÙİ¬c G&uŒ$€§° ö 4,¬QZïG¨R#Ã§­Šx{¡Î@ÂF\r‘	Z\0ĞF,^ğ]’FG\ZS§¹œ+WáZ­X!\\×*€ÅÓ‹=¦ö^[œ‚câ1Uâº\"sİfl„à½İ¥ÙŞ¸›Ò–ƒ‘ÇPõÿwéã`Å`ì-ƒŞ%À†óÀ€@°%³&»O%êõÈ«T&ŒKG}?Öø¼Mè	Nà[3š|Õ5óàŞà—ÁÔUÁ\'{³®·;ìÔNV¾d!;Åä/¶SWÙ2ĞªÇX!¡dw]ã6äÔî¥Å	ÒÍ?ØÑŒCêôÊ­*cz¢·ÛßÎ{ÜœN@nfŒIw«@ipD¢½dÄ<\nŸEsy¥W®p:|Ê¬°Ø^Ù\n²‹»«nàæxÄG”€¹}ğ… ¹)/@YWÁçUl$€Nà”¦ø…®èzºj÷1¬Ë®şº!­Uq§Æ&İÿİõÔôøÆS*UîXÓø¸°Ml3¨`ÿ¸¥1ÀgÀ\0ãˆ%{Pk\'3íM|@ÈDÍ˜j·_ûƒÔ6ã»^™¼&Æ>ì$`ìÆ? ?ÉN˜fãÄ©a;!š!ßáìtur4(‚\"^Çª¬*õq¶ÑéÌæÌòû ±ÓÜîíşã|C*«\"ŞşÍù®ïÂTnßïK~suäA«\n4À £í\rh\rumZy%+uö\nT ½*–6FZüjNÎAÊÖºÄ,:^NÁR¡qOq72\0¼„KZ!$YĞ0o1½lòÜÎ«ë·º>ÏèVôe\\„0(ÿé´ûÓz<Şÿêd ±Ç›°%-ƒ)1{„,:(Š‹fGX:|,{‚—x1x|<@3@¥¥¦¦*@*$*®°°U²®¯-µ¹U»*´¾:JJÁ´*--//Í%?ZZ\'446\n\rß\r0ß\n\næI\"ê?ï?	%	n``\'\"Øol0â;;¢\0¸`Ç‚‚	îÈ $\Z\r.3Qœ5/Fd£æÍ›8\"Àt‘Ñ%A—\r&Ç$£2A‚90°tâdå”,ßuÙîDœron¨PcÎE„4lĞğF\Z7n¼Q A\r*QoPQpCˆÿÓ47¤BÆ\Z\n~Æ±æ¡\nZ´¼ƒ™£K‰9Üä˜—à™¼gšM	€€0‚)‡_¬8@\0Ê^d™™	‘hq™ÏŸ_¡bµj‚iÓ<tğ`ÁºµëÖ\"ƒvŒÛ4yÚÍ»·oNš4ezò$FñM12eŠA†ùíà·—ï~Î¼xlB€8ŠT‘ƒ8`0G„={šß~‚‡S¦N1Vˆ‚Ê4ıT¦Xµj¥¢­Ó½Ó‹,îÂK:T1y° ƒ,è°Š+È´ÁŒ3~åğ6édãA9P=µÍ6æ”ãA:ë`p;?ŒÏ%ü\0†Öˆ°\rı|3ÿ@<”Ğí 44pĞ‘Gb¤$EİÀ†qÄaOcœ´Á•(%¥K\\æ ƒ9\\3Í;È€A<uÉx‚Oû„˜Ìá€M‰£Õ6QquæôéTTBìÕ\Z4H qó!\\Z˜s\r+ş—%T\ZÏK†@¦Î4ƒ@c…ö‚2,£Œ2Y@–ê¨Ùbf—…VJ©œV^yª½¦ëuØõjÜsœø&¬\'ºÁ—\\tÇ§ì±ïGÜ¯ÂÜpØÍÆ8Ğ]w5àF&pX¬†[tí%×	,ğ@\n¨àwJ­ôÙg\Z,÷ÊRLi\núÒŸ‚¢W-k:H8ÿ!	½€˜3|ıĞÎ5Ù$ª\0Q4pƒ\rgq£À_°\";ì´tå\0o,@ZD™\r4øó\rj¨…\ZBDQqCBF¡@J…“ĞA1	ô@lH¥H]$½X6¥<.M:O˜7¤‚y©†?XóÓˆZ½¹FCP5%OIU\ZTTuC\ZU5\0VTskEP÷‡\'h¡7\\Ô¤³W¥˜ÎS©¦Sdªi3¥:@ªAVê¨Un9@ĞÂ~ûY\Z}¬vj§­¦ƒ®­QÂk¯OD@{Ç\r+l³¹-·lqÇ\"k;sK,|Ó=×{zÖQÄÚn«üf ÑÜ& ÿy¾óîbo}õvoë¾ß÷ÛK1:DÁçİFz•l0,™C…3[æ°æ	z¨€\r#¢ÅMŞ£€Š\\t¦’Œì\ràBß|\"‚8\\ 	@A^Ö\0›í ‚\r©XB\Z †E¡ H\ZÚÔ\0ƒ |dJTºMV¸´f\nK“‚Ñ\06Ğ  my;Á`D—w°åCVñ_¥Âr<OPÙÓC¢ò±ĞÍaé“˜.°1¸ÄR’Òş\"\r<C†Î Œ¦3Ç¤*2¥Ê‚dNÌÄ‰c)bUŠ‚Åë{ğ\"]jPçšØÈ†+pîp\';ÙËY·[Ï¯¨Óº@\'7ÿ¤t¨3ììX(\0: ¼NvÇCè€:€€K<, d\'ü\0„âV¨0˜(ì%!ƒAßË%ÀNÇI¢ç—±iP„vR‰q†%ĞPLÚÑ±t\0ñCåPT\0!u¦2}Ø<`ƒ“¡ã&ÿXæqXp):\nÒA€0\"‰Xf–8¸Á\rI[¡>W8\0\'(î….¹‹€( ;¸;®45x¨ˆäàJ‘ş¤\r´`e‰oó€ \"D¯deOnSÀV1À¥orÙK@%õOhpŠqšÂ¦˜šñq”ƒ@*ƒ9È\\†®€DhúS\ZÓ¬–ªÿ¥-Wƒ:>ÄFuNe]ï˜UHÙ\rÇYéùU\"[×ºÚ<‡XÔÉ$Ÿc‰J²\0Gœ<ÉV¶:`Rè€$`€è=©œj!°Ç×ÔäÑ¨À°ãQAØ\\¶ÆŠô¥ÀÎÃšaè 4aX†§\0\n“®Y£™Ğ4ÑŞ°ÁYa †%ØÁ(P‚ÈÀ\rDG’ €7”£Ü°8(h³oÄl„<²àÌbÖÁ–°3RÚ>õ‰\0\'4Ã¸ùb¦üùŒÏ6 ¸Æ‹¼È—‚NƒŠ_Û‘•(&^¥P£\0hàÑ¨à),¢Áfµ–jh.“ÊTAï˜Å9¦0÷%ã2W9Éä´2™óœgÿâØ™ÏĞç±Ü3ª`\r†šÓ1UW”øãl\\§HöX¯ªÓ)Ns¶J×Q¸w½;$Å*Ö±ªï±G(‚¨ĞäµõÅ/S\\;€À!A¨«ôàTWòáÇª	2ö*XÂú•—†HÖëEÉÅú1B÷BØ~7•¡‚®Ioæp¦9²YgrlE2p	ŒÖ 7à%*bÇ7›é!ÚàÍ6(§Ëj«†uŞ6 äíy«6ğ#Jõ°Ò\n}àxêĞ“E´?™æ0\n¬¡ÒÕÒ@Ÿ#˜œ oİ†6` D}(OqØhT$ğ!¯$qOñHZ¢”·+BÊ\Z+â\ZáèKåÅ…ê02İ/cãÿßËùÚ°[QT[Õ«`©!]`MÇGÖø;^E†e\'bf!ë9¸«!I|I,@ \0Ìàb›ûÜÊÓV8õx+`A¼ìÊz;ÚºÁö’_gbKŒ`«(æ”÷¨(XVÔVÕ!lDê$%XCŞk°C\"àË‘8Û€ş\0¹Í,Èç˜	Ää3ãHŸç™µÜSiK#4mèšzæ‡^Ød+ıƒ·È\ZK£ò–.şLˆ†EÓUÙJ´1Ş°ˆzO#ê4â \nD÷\ZkÒÂŒ´¾—À\Z´NŒ§&çSÕT~½®\\22S9ËÀ±3o÷¾Jc°RÿÀË–¤;*³›\rÚLUÛÓîÍ#<`­‡},@Å€ëHäÇ2à €˜€N¢ûò˜ßŠĞ×á=Î\nÖ@IÑ~ßÏZÖX+YˆØ#UÍ©<I½£\Z	÷ÀVH½¨kˆàc2@Iİ ÄE÷SÇ¢ô vœ\npæ`IÈì™ÏóÌ¾Ÿh|ª&> 9Îm~L¡ì3=ÿÎP½É…S‹V\\ícr\rB*¥ÊV\0±?ˆ\ngáZQ2u&r\rWt÷zñuZB_‡Ãkm0ËPªÉĞFØSÁ\ZqGŠg+*pw„5§1Xz7	Höÿ\Zªã+¸x–;bµÉ–P& i`L Z`% \0` @psJC0 DC@Tø„R8…N8\'Oh…SX…t…Wx…P…`È…]8…àO@kÈ†ÄÁ†«ƒ°†¯#H!öUŒ”#!¡‘0ç‡ÈT]Õ5õ—t}²´\"+bfxsuõ×pğM\r„\r×\'åÀ ÚWr¼5Oü\0ŠIĞ@ö„O‚Vhå—Šªh~eWûå„a8ğ?ğRÆ…!0)/ñ7%ÒZxó!qpQx’Oa^­UO¡%Z \rp|(5Õ€!/5ÿS­¨9-`*§B9ÿµ=ÕFn+ŸÑ¦À`¥c+&ˆ=·’\Z§s:|0	¬a€ä:n(‡öØ£×Ÿ;tÈäB\0)fW@\0äÂ\0ÀâFX&ĞAP	‘‘DX‘EˆcÑS‘\rYÀ&À‘\ri„`\0D¨bÙ‘FXWI’+€+°oŸG¦gë‚zÙ6I”$O/˜‘0Ç4C(ÁZ¤e‡¸pU´&gRP\ràˆ\0ğˆ8Dj§\"q´ZĞq\\03\nÙ÷‰ÚÇX9ŠU	¦xà§Š3÷‡ŒQ2…-`!†Q)ğ{¡8ˆ¶)A¹ø³õÿ¤¶wM4â5f±­Æ|q%	89\0#‘\\Tvh„19¥‚1	s9›ñ©l\0``tT/ßƒš/ì8d~Å\Z«qõÆô’ÄA“¸ùù¸üha«äÀœ¬ä	Âœ0œÅ	œ@ÉÙœÅù›ÎÙœĞ)œğ+°nøy/é	øè…4“.é†ü¶HÆBIç1vÄ“hŠs%\\¢&?´e}\"MÔ& LÀu7÷!Te ìP•V™\r6Ğg–,§}«%\rjÁuŠ©øè‡~3USˆ\Z*—›B8g‚—2e~ÔèE]ã?æ€z³ÿp»GP1É8€W”2Œâ7ïU)*%.Å) \0ÍÀ·\03¥v—‘É@¤\Z{—óFp$+Ÿ3/	¦lGÖ.+¬!›®Da3‰œ¸9;ùh“¯C`\n¦×ydpWpcj¦Wp¦cŠ¦ÖI¦Øù’áù¥ìñy»‰ÜYÓ6œ»‘¦×I‡t¸¥Âb›ûæù¦X…\0es´Ép_şäƒèPWD[Ğ”eò7`øÉv`ÃŸX–`f&_¢\"ÊZ-ç•IŠb¹Z«±J–\"{12¨~màm`!ò¿j*m-@¬\ZJ*Œ\0	p% 2õ¬ˆ6C9°ÿ\'iaÍ×\'Û°Q­R®~CR(•ZLU)wqµ¶)Œ£¢B9EJ!lG¬™ÓãkøS !:µ’K…+¯é\ZL%›´)o+P,|:,|z°§›Ë›oø:/ù’`ú¦~:¦WP±[¦cÊ†pJ¨âéyúX§ºé¢‡§½akê§«›‚*,…ú,`šo4ønçÙ\Z5š*B\'”Õ”fÇ·e‚¹Uô8€ŸÊœj7{ƒ7eò%f‚UN\r:««õªdÙ@Z•(sı¤«­¸½\n¿z*œQ¬È@!hD0\0-2\0S¬Ë sÎ\0$R6ŸESQÿ\"ys|qRàY$)‡C_ÿ´)\0—Y3•™m”·ÀC\n	a@a?<…9ÂÆÄ†	/ç³laoWxÂ¢°¸Ùy£7zoh›‹\Zk»[±›»;¦¨¨—°Ã	#»	±kUW€kš²iÊ²-ëK6Ïr`Õd‰šx{ìZkĞ5†u—MT ‰w³1—&ŸŠ ğ©J‘w“¢£ø#µšqeé VK–YK•R™4nP]¨¸«ü«Ş¨9ÄÚ*gÛ_@ÚÕ¬a¬À\n¤87ChAXvEÚ@j7Ğiö£káÓ€0‘L*uÿ—‰›)Íº)†q™Ìà8£B¹—{+£)šqwŠ+úš¹t+È¦\Z&òF°®ƒa®û¼\r‹zØù°µy»¼k¦{±T¼)»»Q§eê¥çyÆK²Õé.ËËU‡U5“yZ²¼Á›û¦Vœo3¨“Œe¦1¤z_BçcàYb\"\"ÅQÑ\0\\0RĞ7ŸÊ©ŠÌŸ\0D/Â+2”H [KÉ”l_â¿váE3Ç«½Ú«/—¡Ì™:%¹œQ˜«*Š‘në)¡|¬Ù¨02µ)BjzCˆ7¬K§ŒÕà­ŸåŸE®Ä,5Š³¸‹;\0_-ÜŒQ93<ÿ 4ÜàH`­‚/û!wú‘K@l¶´šAæ\Z”o‹Ä²“Äë¥n¼±§¼[ÅKÆWLÅW ÏV|ÏUœ»[ÌÅ¯»[30hÀÊ«¼)ËºÏËK±õÌ²ı6ÂT>¶Š¡s/”%-â0øCEü‰cybtT€¾Š¬´‡r7C\0©,1 ”8Šû{ÉR	µI“4.ÕÊmÊC\ZÍş¢£)?ñËüÈ`¬É —€8uWTÜ%q!ÕSç^„«nğzQÂæZ_š‚—†1eä82•F–3Ã@ >ÓlÍ×L+t´Í?Xy¥°A›ÆAœqXUèLÿ“ï¡Îô§eª±Pì§»K›Ë{Øõ¼¦ØVŒØù¬²\ZK„JûØ	+Ğ˜3pİ’	a€\Z±…Í‡:V{(Ñ§³B‡Ñó0mÈè;7şIŠœ´œ\Zƒ,´r\"pzÌS	¡”8ÉRÙ¿#sIóR9=¨Ez¯ ¦A?¥*\0Íj*g‹Ÿ¹_0\0bò(­Õi)3ÕrñÂ,Ì•Å~æÊEôÅÉ_­Ìcç¸bÍk0|Fo§/ÅĞ\n¯@`s”\nMZrı=éé¯¥ÛG·ùÙÏ²K&¦Ûaî,Øø¬»dŒ¦ô¼¼h ¼¼mĞ|pd¼ØÅ¶+ÿ¦m½W@.3€˜=îr¦‡ÆŸ,Úy»Ëë.ÌyH·L—4LŠ?Sv\\\0õìÀ1¾¡FÉ›jÛèë\"õØ`+}%Àı%˜\\•P‹å§•É5ÍP´¦«Ì\r—ô*Ã¸ ßÃPüİ“mwñšİÇ°aĞƒ\04\n(ÕÊøŒ’k{¡‹†ó€2¤£=šh‹Qß¼VF”“ùİ/:±Ğ¤øAé¶ÂšÊfGğ‚:«Ë{×\n.xë†îÆƒ-ÅğÜØw°¦òŒØÍ}=ĞÉ[ë®¼­~Ø÷\\±oJşÈâ+Şâ3°¡x.)ÚÎ¤\0ÇÔA³ƒàÿ>?^9Öxsı”z,µåL!IŞ\0úYÈJäv€ÈJ‘Û(\r\n°Ò41$±å2 îNÓ$s_‡8qÛ«\Zšïi+ç½@Ã °‚9-À£Ëâ*Ùxçbò­3ê7\' €gÂ5ƒÓŞ•2iõSĞÂËŒ_Ï\ZzÖÂ6w¥æ°Íó\"/¶b)Ÿ‚«qº½SìŸÍl8±N¦ê„=ÆôlĞnëîòóNĞš-Ğ}ã³îâ¸Îê‰½ëiºâäòô-~0oì(âØ£ÙXÀìMöì\0\Z±g!åg\\4Q\\°Ç2±Ñ\n ‰Nñ\r^7µ”J1îÜŞ3š(Ez^´ÿ5MÓTR%U2ï_ŞB3Õ«u®ïÑÌï¦¡ÀÀø\nBÃ–ÑøÕF°7 ·€FS§çp!®y±ùï@¸\'<èˆëÕˆ#Fƒh‹Q*S Fj”v>eÍ\nBdöÑÃ÷º>|‚yôWAÌTN…Ğ>õVe“¶ÅîL±~J›jªë!Ø°Îá³®Ø²ôî.COıBïØ»{ÅO¿ı,N.Än¼gş1OÅ-ì@ -dUã>¬Ğßù¾«7WhLSö,±ÇViš˜ÿï«7ÛvBQvB\\\\T\nŒ\"II	N2]•]2c™–]c›ŸN%%SSmm-¬-$®$U$*-*³*Uÿ:ºJº:@¶$$a±¸*Ì²aaYZ\'nnnZ9Ù9Zn9%9ãä¤¥èéèííÆğïî/SÆY/ûúY8Ë—/}YdÃ„\r:œÀ#!E<0ò`!BŒ Aú	r$É“%Qª\\Éä“—0Ÿ¬ 3s…Ì8sê¼Â“ÏŸWĞğ@t¨P4Bgğ˜t©ÒPÑ@ú”jS¤D‰\Z½²â\nXÂŠeŸ–hÓª\rùäNĞ©dÉb‰á\'F<ì’ÙÓ1G,N`6Œ„6>#p²ØÉ†	2a#BÄ…T)¢BÅÌ\\\Z±ÿ³@È‚(ˆ)HráóeJ]l²Ô‰S¥Ps¯+\0AUZ…U…03fuğâ%Ø×°	YJ»5¡JuÂÃş°†AÛmâ¶û‘À\\¹QéĞq0…`ı€xøÜÁ‹wï^|cüöAFàñã‘DY´Aı²`v¥´Öƒ¢õOA¡M:åÄO]uÔ‡GURLQ5Ã[p9×T*®˜”TJE\0X_‰%Öæá$®(ÖGyåeW{ñå`º ÔL+-¨âO:áØ\'™HvÙI(`ƒ–Šxp\n„6šd†–È\"^^ ‚\"lĞ(clĞ‰”nŞ–›”Nÿ$¦Ş/&\\-®ü÷_r¼ÖÜÃ¨\0\0ìguƒÇLşdáÖ|ÇÍÜh!N	„c)èğ6\0ë°Óª÷´sŸø¡ëúì£_p	”hu%)àD*ôk°-è:š¤£ZHNÏfˆ‡ş„”ˆD]±VJÁ¸â·à†î[3~E#Xà^jáÅî²-‘¡bYaÉ…G] \ri×|±`†>Z“/ æCx†RåjBr™Td™„`&Ò€hˆ4 Y\"Y^pÂ	€Ê›¸u1%(çù¤)Sü6œ+Ä53hr:\0Æœ`\r‘0Æ0Ë¼@ªa\0ÿeÁéœ’³Mœ–GJ8è£ÎªìáÓ›1¨ØƒÏñíƒ_?}úP@ÍbBIöÑÚ›`E@T´QGCF¨,¼Ëâñ†ÒNÛá´ÕşôÔQYÛbYUÅ…¸â²ˆ†¹å‚…î\nºû\0»˜_®¹åœ£õîŠÛXc#}4ä^1DÀW¿J¦Äu³RpbO6FçÂ”]™æ—`rf±˜BÀÀ#[*@ñ		€B§›N˜Ê\')«üBo|¾ÜBq×/ ¤µ¤¯ÀøÒ3g£mà0–†CN8ß=í¾Óç”‚*ª½½sê<÷s=õS«4ÿè@ÊvĞ,mj#P0ÖÆ Ì ÿnÚìò„<o-y×Iğ`¹İd\'ÚPOªu•IÅ)-j\\•Å¹p*ôjá‰Ì–”»ÛJ4b$#YAèl’˜nH{Hİ‘öp3„T!vMzbj‡29-Ì2WzØ—Âd&.é\r€\rh\0ƒ4àoHŞórƒÜ¤ì`OòA¨—…VĞBRÅÉ£-R3€Jp›@\0à¨_FmƒQŒ6ªO~æ(zÒCµùÔüëÚ×ôñÜêdKucÈ$ÌW†,PF|Áƒ¸õ‘_IR&øÃ\rjîrÌ%ïò¶äƒ\\Ü‡|RÂ«Àå(Œÿ[¡\\X¸LÄÑk,0¬4åbCÈU“ëB	ç:×ÁZ²Dˆ¢;€4$<è–übÁXp³\'B±\rR”\"íR§*eQM—ñ\0k<\Z0f\0kĞ\025, 7pİ=8Ò1²zÁpîøD\\¸“W	Ñ…OÙ‹…#$H[)}µŒ£‘(%UüÒ±Ş˜B>ô˜G;øg+{xÍ“bëä?Z°Q\ZG\"ôcÍ†\n˜_(h\0S],—šº\'xÄ—Ê%.ñÒË\'èíªV­ TWøä\n_åIVD¤-©œ0qâŠ¡¥éLÑÅĞFŠ‹ëftÉÙF”óÜ.xAnrğ–;,ÿ„È@Ä\ZÖˆ.¦Ò¾V·N€)á±Jx\"“ÚpƒÍeõ¤Ì0€Ê`ñ2 B\n4@Z$˜´(øç\Z2Ç€N\rU™CS0xNáeÍãÙÒÄÀ\0¬±CM	šƒa@	Ê³R•Jj¥p.zŞA?ı]MúëZ­Xz·èÏ,nA ¦Í·X)ıB·$º÷XÇjŞ2GU¬š3«¼Œ‰M2şîunéŠ[@4\"\\¡DÇTa\\¥ÙL»õ™¢káXîJ×»bá‚:$	77§¹¾nN—ÙÄà\njT£Ò%H\rÒKĞ™Nv:{­8íÎ€0zân³µŒ\r¾ÿ$„ÔàÇ5Â 5¤`\r2@@(^ÛÄÈ–¶ªx†DuÑ\\<Q¹0/ÀşÅQò\0˜…r8úG…0\0jéQ);&©u¼\'\0ìÁ®«ğ‘5›ÖÃ¦Åğ¤wÿ1]Ù\"@©q7Jè¾pÄ.xÂœ*Ër¢¤¿ä`/±\Z“JÛ¤Y¢PU_bÁ\nI‚\Z¡X2”©x+­~fè\Z<–?˜Õõºk]ëzM½nøÖ‚\r1‡5ì.£œb±ëŒNüsî+uJlñ.ªãËø²ôŒÌep%7ÄAk\0Áv…ì€\rqpÃ^ËäÅ˜{Š´{(<WñŒ0ü§\nıYuvq3ÿ?é{F°A5I!\0tÓ!5vÈÏ¥ôsÏ<êCgûĞôÎwÖN\0w\Zœg„ì•–5ŠŞ¤ö¥/D6İâ+ßµäÒªz»\\¥aâ¬–[(C]!X©EV±\"SÁßR+[]a]Á0­@ëj>!Ã\Zæ0U•Şawyx›íõ_­Êt\rò¡ÄÖœÑÑ¨¯\n\Zi{X6³qÁ\nU<›Æ4N(’™ÈÈ\0–CÀp©X\"‹)·”º˜t\'1ªPE-‘=xÃ²Êórú˜<4ÖPa	ÀoÅÛìòá‚r¥ÖÒu0j\n7EœëÇªVÙ§>5íi%ÀNfÿ‡àıO°.bÜóÖŒ÷6`è¦D‘3ºnAb‰.³ºò\n}&ÑêÛ†ş&ÂÀ‰U[h\r—3a¸Ìêûüú’+lĞIlXİûE/×½„¯ò½¦œêîkæ<|A]÷0›íïHFœ}\nauÁËeÙ‘Õ9ËXöN”å2Fc=ËcE2 H	Ğ³w¯ÕŒÁ}\'[ˆ!c×ÃQ§[µ‰÷X——TıòGC”÷„&T±y§b\nëáôs?ÆÀ*í1ô\0Sú“¶R÷]¯ĞSÔ±Gd{gor²D‰ö‰–bÁ—r¶ÄWÅ×7LÎjC\"¥æÿ§¦LÖk°Æs@GCgˆ††…uÁFtn8kŞ‡d€tIwk(÷tU—‡N·kİô.ãG5$l0‡(¦/‹¥:ñ/Ë€´Pv”U€XcÑ\'cğv\"à€—\'Uõs€P%êxe×nî†ÕY¨è=„ö/ıwJP\\ŒçGŠˆƒêáR1˜ƒ{²ƒ–„]ÀH+øq¤za¸Ò°\0 FhTAeJ—TKØŒ–háTDu‰¥rñg~Äw!¤!Yná>qÖb„³)Ä8ªöj×§}İÇ}Õt†‘Cbõw.GÀoè³æX@_¶T_öe…UEi)‡ÿk{Ø9O\'íçhHaÄ¦XÇKñiãNx	G*#‰R2ÍÃ	”ğ€èFS?½Q; ŠaÀnMz(*€©¸ş²Šq‚\0“, y²¸eá\"¥\\¹È	Gz¤·ƒÖŒø\r¬ÇIú¡zÄ\0-\0\r¯@“\0’QñŠD5‹ùqr‹F!„bÁ÷\0dÀ.±7áB\\˜-Y0#Û‚sÒ\'e®†.÷9åt–4$=@Woø†0@‡ğ\'içg_FŞh‡æ·‡YåšÙM\0‘vW|P:ùr	KêäXñ&Y­`v)c‰€Sâ&u¢ÿ‰{§2H;+é’LbG’4Êx­Ãe´È^Œuo€±Hqã[wšBÅ°‹9ˆ*SĞ6h?9è”À˜SÄzÑ°g¸²ÃQ@ÈAJ|TJ†‚$K8#…QhìrD£)DW iÒÒ|`…¥†—ÔÇB­aşÉ—á$˜jø™İGa%6˜Ÿy.6Ä‰ù}^À˜¶¶WZÅi•™w!¡/‘MÛd~{µ™šìw€˜ G@:BRˆ”D÷x©éNLRYÏ‰è‘	[°™nyÒ’´3r$ŠgÀ\n2‰Ê`@¿Ù:$¨ŠÂéyĞa™Tá“³˜“Ë©@ÀRìàëë0?ô±ÿpùĞ2öĞIş @R©gÁA°Â`[Ù+ÎØG_Éxìu×ˆlåŸää<.{%BhV|pjí¨Ll5†påV{‰}š}øˆu	\Z‘Š ‚x˜G \0üÈ GàG\0¡¹f9è7Uw¨rö%ª(uJ§|˜‡!ñ8öwW\'Vˆ†xˆ°Ô:» ‘zc3š«2z€°‰23*cPÂ£Ó™<Z[Q&“­pQ¤DoìÔ¬Iº¤Kº“LºQÉáG`§¤»x?*‰ƒô³*ù£?`3qùÑy¦S¹JC:ƒoŠ„`I§±\n|ù‚–1be+`Va¸B…\n \0Ë—7$l\Z©	zÿ°›°	ÊşÈ^à°n8‰KÄWi¶r÷µt™ÉWšÙ±‘™|Å™+°Gš\Z«*ªTÅN‘å¢·Ú0\n‰3æ‰0¼j³Ø‘Y;Åê<\nO=z•¬`QËğ:¾ ÿòX\\&œ¬øKŠˆ¹{ñŠ€ÑX`Ç/ªó=UZí\0Ò°1Õ¥LÙpİ5qŞ¹g^±\" hS{¾5T+À+P§óJN¦cNhyu€°‡°:7ä¨ˆ›õ˜v•¸ª°Ûª	û°P¹û¨˜30~¿¤±ÆW|«_œ[¢›UIºøõW@„²f&\Z{‹D+ÆÿbÍÊ.Z1Ëš­	‰<»³7{v¹«|R¬û°nQ–¬¸ Çë}ä´T»{ĞÊ¤†vµ:À\0He­áxğ¼†R¥ëb8h]€`Ûzië]éÚgÇ®p+hş67¼çiúb¯òŸx0u5Ÿc†nE˜ş«¸‹˜Y¹¬°pˆ˜ß·ºnhC³vÀDW¹{¹n¸î÷~½6²iºöurzCºdN¢ËKõõ±’v™Fu+¹t…FD‘¹µé´-\Z³2Û$­É»¹›Ã:|Ã@‹\n> EëV0L2“µàN5Êñ/Ì›“ìu½}¡{~ÁY°QYÛ/Ml(XÀ(‡ÿ¥×µƒ¥w¥\'\rYP)Şc“+ı¡+m«ÑŒrTîKTwk§ÇÂ·‰u§xúX@tW\0:Á˜‚ˆ°‡yWƒ\\À†Œ°á·ºŞ— ^°È\\tC·È‡¼È™J\0–Z¹—ú†Œ‰tÙW ;ºXÅK¤y~—™‰~ŠKzU$ËÀ6#ÀÂyjA*kšK›$/;04Ü$¸ÃÀ¬ÃeS©wÖS´œ¼`@Ñ¨Ä9y½ş’½+ºDÀ@TÌ©{C	0ÜË*8Øá[M)®œd®csÆc3\\l»ÆÇñ’ F•†´ »_Ç$ú—Ç\'Ú O@\0üx„uÈ‚La…\\ÿÉ…L\0íÈmCƒÜuUÉC÷ÈíşXa©E§©Š‰ÀüÈšÌ ì°Uâr(í,Ÿë¹-½Ò½Ô¡(q\nÌÀ­«·úâ^°äÌeeu«@İ@­g@ÔD­ÃzÔE]Ô”Õ|’zcÌDKeÅ4ĞŠÎÑ¬N~±:b©NÓ‹TŒ·Q{$†vo@”:(_,ŒÙ	¶Ñ i\nà^º¢ÆZi@lì\rôÆ¬Ô+>YÏ#7¿£Y¯)&¿\r²`©\\a.”ê}šJ\0\Z­©”İ ¬˜\rLt“MW“­Ù–üœ˜İÀŸ\r~¡mÙıè†-Úû˜É!½ÿp#áKK\'¡’öÁ/]|š¶ryÓÀ™REû«ÈŞ‡²yêÂ±‹ˆÎ¬>m«C]ÔJ=İI]İÒ}Ô- ´Å\0OÃ+Q¸\n¬00¹µ·¤ºàxë$Í§ÙÕÒj‘|Á‚5óxˆ¸“‚İ<°*Ô_»püƒ]-¦95×gl×ÉP6ÁÀÆà|] ¿â•}äˆ,)fl)fË3 \0–\n`ŸıÀÜ  âš-âß‡Ù\"®Ñ‰‰â%~Ù#>ÉıhÚ¨ãšªá‹M¹šÜêB~”Yª¸$Â¹]ªÃ§KP\'UQ\'uB^™œä!Q²$ê}7mØ9½Ó[k¤¿©‘0+ÔIÿåÔMİKíÔ*ğ\0*À\'ğô8ÕÈ‚Ái‘ë½ÍUl‘íµµ†d­Z«TĞÛÀ(<8ã‹¥Nù?´2ÆcÜb“¦„Şâåg·P„ÂB ¿B{{ˆFrxš ¼WuCšA‚EP³<WëÚûX¹–šÉ¡.ê–Ò§îá›Lâ¬şá­şê¡â˜ú†İ ¦^ë°C;$i–Ö,5A2|.\'Æ‡iàh!ÜÉ>!Üi­|4À’L\0­åÇ¶bª­…x¶j»C]İàîÕı\ZEP¾}ÒdNx0#Ş”JKÖèNY;Zû^Ç¢¢‚!”îİ÷~‘\06Èÿ”7(®a3•Ú‰¾”ÆeÃ¦À²GŒŞè!1rDrhIá^ˆ$`œ>b­½Ø\Z^ò4^ò$¿Ø)?êšœÉP©­òšlã±^ë—j¹—›ê¨®Ñ›Üó´îóóAoã§®á^àò—Ûy¥Z±Z!˜viÅ»­ì•fìÅ~iĞ2XÏÛ‚E°œÀŞ\'±\\gˆ_7µ6‚‡7v¶«Aıíz`»¶‹åZ0p÷\0\0È @ê0ÓU¦ÙËb„ÿÄ±´b©“D@@ıf‚sNçÑû“ïÑ•]{5g[®ç›+È°Î7\rä®òÎ¿rh±$é£y§÷åÿÂŠ•G`\0&pOĞ¢nò¸Ÿû4Nò¹ô¼¯ò@¹\'ßò£üÁûÈü2ôËÏüÉD/êDÏò-/ó\'oô/_¹Ğ~êÇt¦±¹Dš½ôÁ kU>îÊ)u\"¬ÁúÛ¼]UXªöCÇ:tËüâxBõ›¿	UƒUzƒ†-zŠ……z‰-9f““C$/-aa›$--*U*¢J:Jy{«{®{1±1®²·,,®:3:¹¾¹º{µÄ{,Å<ÌĞÍYYÖ//Y/ÜÛÜYÜÜãaã$èé*$¤@î@ğğôõöö<:<ºÄ1¶±b<(Oÿ,ƒÆH0 € &°!  b‘‹‹T´¨Q£Å CŠÉ¡bÉ“!½()@¥É•-ašäÀÁËÉš&UÒ\\i“æÎ#-iÚ\\)çFŸ%öxâg Ó§ğàyBõ	™\'+ÈdÕª5ëŠ¯]±rİjµlÕ³hÓª]KujÚ©DŠgà\nGğÀ›wïŠ¦ŞšåoX],|)Q¢CG•ÆU\rEèP#EJ ˜C©ó-* €õ‰©R§+a‘G˜áW„5,˜í`¯Œ%«U;ÂiÍ0£F­Z5pà¾‰9¹sÒ¡Bˆ\nyñ²»Ó~ïúö	ÈV»``óÿÆx²> ÁdŠ@Ä²hF;\nÈñ£ş‘t”€,½D L‚ÄP\nVäRH(˜ Hp`P9U×n‰u]}%âˆ`y5Öˆcu•¢‰,’(bˆ+r…\\u9…_{¡ã^DĞ”@Éb-‡óKc¨0æXj•bÈ\"-”€BgTşÑÁ\0Uh2š:*\"ˆ’¾´FÌkÆÈ&Ë+µs˜šÉsL2¹\0!\\3tgÍáäÉ\r&æ˜ÓÂséPWu×úÎ;ñZ¢ğğÀ2Ä°GŞlƒ™Ç{³!ôÀ@„Æûa‚	‘:ª¨üñê}øuà~ÆJ’¬´JØ ÿL¢4 OäUc†O¹E‡qÕ¥‡ÈÎˆìT²åì³Ğ6+±pûÀ9æ˜W^@$m³ğ–Kk,(iîb‹™Ò$!*”àB•ğğI¥¡sZd=ÖX0­ÁæŠ™´½¹æ£æ¢›acƒL0@ÔÙ4ÖØ™\\ì	AÅåCBtÑMg\Z)x‡¨vòÌ“¨ğÃ‚xµÈR`ïÉ¥Pz%ôŞA@´Â`À¨@_ô©ù‘ŠÑªª¦ªßÒõGk­¸Bø´Ô·êDL;Ğ†T]UV‰¸¢Za{\ríZÌ.«vÚ\"TUÚQQ;¶:n»-{üè-m	³öc¦ +¸ÿàôdQğÂ[Aˆ&İi^æ‹J*ãKl·ÀbØm,ì©1®|..ok6\\\'pÖ@0±á`|±9wìqu†ZGOÉÛ1º(=ûÖéÿÌŒP,’Î†^yï‰…pAB›àóÏ>m½ÑA­´«I«Ê¬L÷÷_¨°Nı‘ù°FèS+h\rU×VèâˆW|Uÿı+àÏGşó÷Obˆ/bQŒ¶²yÍlU‰š2mñ¥/ø‹SCYlÎ`åÊÅj§ŠÅ¨€& Â¯P@\0ÈÂãî9”)IMÒærsÁ…ÙÆr…ÓÂt\'‡\rg8¬ÃØs.–±slL:ÿH4\r¡Ff2Eİã†,#OÍˆw™ÍÌ=/›\0ç`TÓ«^§74ê]ïŒ¢ÂŞöÖxŸ£1mUşqúÊ ]ùD\0XË\\~5—­MË gCÛB’¥–fÅ-ºJËò!Fš¥*dKûxõeGÜÒÛy*.Î™+¦PA  ;Á$,!8 á„âcøŠÜäVS¹1¡‰0D:ÌšØä;[îF7\n›À4¦AŠ]ŒˆDÔt(ê8“víÙw˜89®,ÿ¨àË†3\n^Š‚à|À˜\0áÓËõ:å³ qŒÕc<M%*3\Z-zÚËÈ=×ˆ´6zOiı¤ÿ#Ô·“C’Š!ãW@a%~ŠŒßC#È·µe$¤ZÔS©Ğ¥£{ÜH­u-KÚM/>:™Òä7”…ŒÔ@@	´€ÊTÂk7@!3J0€\0ˆ’±ŒÌ)\Z³¯Õ¬‰7´@Ó–\"˜m‘”ñCâd9{V¡Ã±@U\'‰„\nça²É#QœÔ6µÙd1œz€àp„p Œ9Ë+;Û	Ï¾šñgÒ,Ğ\0Ø4*h¨b£b*>7ösiRÓ	Ü§¡¸P¥Eöãÿ®À>\\á³Ÿõ¬ş8»YÍÖÏ¨Mm\0Ç2ÑB2ëW•´[İôÂ‚QjfhrÓ/ÿ¨SœÀ6…J0§€§/8M—‚:ÔTœƒ»AØnv˜°ƒ)L—Å`XU‡§¬n5v\ZÛ˜;¾êëT‡ãeTî²s	äcek8V©pÚ×<x0Á\\p‡\"¤3¯zm\'€áéÎwÂ³Œd4•<¥wÏ¡ñGÁ©Úçc›´Ç\ZAxÔZjD¬¶T´l rhDeäĞ††Ø¡gid‰Të•ÔªhF{|€èvIJĞ<œ-Z“‡£l™øÁ‚Û™¸Á8\0°@`2]ú)ˆº/Î¬6ÃÈ0ù±¹Üf™t¬¨œmL§ºl¨.@æVµ\nô¢—¼ƒzÇ›Eÿçö¢‚)3ZfmÒw0€¼/ëB† ³<û/€íÎwªÀêL§_×9O0^Ï\0†Å^ö´GÏ}&v±©š	…°°@ÊÆM…ÖzşøZµ¡£TYµ\\–E£Y³mm#d‡¦U¬S—T[uÛQJƒ”cæ–5éªBW\"OB\nq€ØXi\\&# ¥xÈÌJeZ¶Æ¨ä\"×¸ü~i¹IeM¹±0q³@˜ÊÁê8¹fµÙÍmÎ7zÓ;ç8ãÎó ªmX–M—ıùy«Â°8ÌXè&®N\0ÃÑ‹pÆ!½×I6°>¬õPuFk:±j|°öv5ÿÌ Ôî›ÖeÅ\"\"üöæ8Ïù\nîpZ£€\'ú\nVXDsø™ø‘ËÖ(©—`ß­[ç‘æĞ´ŠÖ@†9%‚³àLA˜ÆnÜ\r  §ˆG—H2*W™–ã¶2?Š´îƒ¹BËµÀ;+va&gbBLæwñí}jÎÏ¤³¢Ö{²îY¾·ı³ŸßÒû>àLpA°ĞƒGSüâA˜øç1¾ñ?š–´Ç8XÁ\n¶ŒF#\ZñééXq`²¦VºÌÓâóŞûŞ÷ õß4ë\"­¨¥×6jz°õ’·¨—¡ëñbĞ¡gÿÁn@3Æ>v\'0y\0 Á(êAA¸½ÿ¨·9Æ›ÈUndèİ5;6˜–mx üğB¼tïÌ|+şÿNd2úàSÅsp–<\n7~0#`0G`q¢Gq9Sx Gz–qcÔh	ÖWòDiƒ{™{$‡Xiô*âydj\nÕ\nåjÊ‚k©Vƒ8˜66xƒ©Öjt1\rät³EÄ62Duí7\n* [\'G :#và}T~-@‘Ñ%¼ƒ\nÜvp—~tı²w*Ó~‡án”£ö·:âPoÌgˆ×r&MŠ·(RVehUâa<(Ã3÷Å ˆWz¢§ˆˆˆÈÆhxÿzX¬7‚	fi‚eX¯7X,(·\'c¹‡şcs¥•Zøó{)6«Å òsb²hQhÓÅG—§|G° }uV”9”w¿P 	D† Ü …Ü~\0 J\02ÑBÜÆ_(w¸1ä~änœcõ¦LàVû–^\0˜Øá.õ\\+3×‡“¢8AQaD\0\0&à\0\0\0\0Ÿçÿ8é‰™¡Çéh©—z\"x‰Õ‰ƒåN±r¸GY\nÕ,ô{¿×sö| Ys+ ZU’8\'Z9w<÷Y<çb‹t– BX7X0lÅv9ÆöÿmJP4EdP©#Y0HéÍøŒ9€\0Ò2@E~¼CeMåîhF’Y)&rw•@ xFÔUËÄ1²3ş—xæeêpSyCãñ|òˆp‚V2æ€F&0YØè—yq‚˜€	z˜zUq†q€5&q/GYz$·¸»¶{<X‹¶ƒ•™lÑHaƒtõƒ5[7‰‘<À°àgFè;¬Qàl`\rĞ‘	/0/ ”J‰\0M–\09àAÊå%öp~T™q§·a•U©†Y UGô]I$;ÏD\nãLí mŒGx–š7¤&q)yêA\nø-~€ÿ(À&ğaÑó‰²b+´Ò4şQ>ÿ>Û>ö	YÜC>ı±™¸\\S\r…YÙ{*2@$bfAQšiQ9ƒ4âQÂB#Oq#uÃ‹˜Äh$R÷\ny 1\0uàlHÀ\Z£c›·9»Éd €mğ“2õmgœÀ\0wîüwß¶/Î¹U÷voäğLH$;‡—DÊU^ÿ¶ó(+_ÁôÅMD—áP\0`D`\0­²£²z 7á»ø¦oº º¡§©#5q^€§zš§|º§~Ú§€ú§GĞà…j§BH\0‘©‘Åb \0ôÃgÿ?w0©”Ê’+é’“zs-|›z?–z?-™?ª©Ÿ*ª–ºsÃ—©ªÅZt¡Q¡¡N· {¡Ï7uY¶$ÀÎf°¢“	İ›¹9…Ğ€\"  ÓH:jBÅ…ÜÆœô£gwp&¶AeJj–øöù¶é`D„2;‚B^uf2ûà9ÄZzpSä¥t)çID0xqAP#à.P›q\0qX0°<r°dIzq°Û°8r7;Òt+±A—ä@»[°30ç±X0hpz$Š	cÚ6º{:èa›y6ÒB6)Ib˜%6(â?6Ûÿ5”kT1±õ@³E\0,c¶\ny\0iPS6å\0³yëĞ¢ ğm@µJ9\09ğÇ*È:\0h7ì°‘a\nÅ9­Æ™WŒa«Ae@\0Ş\Z·Ğ	gâ\Z§AN*(‰G2gU€ñõ®g,ã	$ö8dpWÎƒûsˆF\0—Y9›Y %²3phğ)ŸÅ u¹œ«¹•Û±Ÿò¹WP¹£k©™ú’.i¹–{¹Ÿ%²Ÿ…¹©Kª°û)ÃW?ÃGR…!\"5³ò3?$v Aš:¼=«QÆ-´¦ƒ¯Åj*+,ëkÌb™5?û Ë°Y #$p&¸$#jÀ´6¥G`ÿ–ãµ1Ìá8 Ğb·Çú20ñ+	àU0Ñ4\n±´…>ê£hÛT\0Ü¶hë¶ÑánÆo6®èĞ1N\Z;æÅLr(eì\Z_¹€9€K_“t<YäÆò>ÖÒK—{c”7”¹‘ö¼˜	Â\nU,+|HÉëQÍ[ 0\\²¹7“]ÓbŸ•C‡’ªëº”º•û)<º\"‹”»º¤{¹<7ª E©ù3²©[»T©Äç‘±ÈÃH‡jOpZWÀXğ¶:Â…¢´¡Y(PÖ7A°1X Œ	¡0\Z/€\0Ïøc\0ò+¿\"ğÇ	ğ÷»Q¹\\\\ˆ$ıÛ¿Íé£“Ófäõÿ­Iz¾_ÕUITÉêPgS9€œ3$ŒÁ–×¥„‹P¢¨GMÁG€!§,ŠM±Êªì¬üÊ­Ë°ÜÊ±\\Ë³ŒÊ&›Ê¬ü©l²•ÕQ¶ö³~0ÌÄ\\ÌÇG½VA ,n±Z`ã»V©/Y»¦šªÔœ©–ú)¬‹sÅ×bo3HB×Å<àG&\0l•_	B.ĞCf}€o·s®ì0\n£4Ï¸Ç|ÜÇcğÇI÷;‚Ğ%i—É‰l•·ĞDÅKú­\\x¬·ë`Ï‰çÀzgÅ©ÉNÕÉğú-Î·€\rxà(+ 6R7¬a-ıÒ0\rÓ¢œËZÕÂ{]\\ÿ°Ğ0°3 cÅŒÊA]Ì\ZruQÊF]Ã/ÔCİŸé 2ÉÌÃÂ˜Î;CÎ\0`f`.\0 ÿ˜.PCPâëlPí^ğp/”!J/`\\%\0|œ\0]ÀÇÇŠ¬\"Ğ0\0‚\\.ì2c[ˆlœfk¤ı;9à*ÑIz-¥_ÕLsŒ®ƒ¢Ğ\0Ì{&u²a‡€*5¯ M¸ËdàG¹7Ì@MË3mj²ÜÚÀÒË°İÒ«ÜË\Zé¨#ÂsOP(à(PÀÍ¯DPN`4áNÁúaê$VXğÄ8G©ªŠ“Xğ¡¼ÛE ]sÔqa\"¥ÿÅX±?_X1@€Y œ1	ßCpJg\rÏà´p|gägÈU@wü}°	 àx¬j Ğ9àµ?9\nm=9f5•‡á2ù ­oí×Y^^%(û¶¤˜,p¹°®G_—óY\ZÒX$Ò\"í-…`<|pÃ¶íÊUÛÄÌÔCİİqŞ´µ½Úª-Ë¶äÁâ>•Q¼û\0E€LåFÀF0Öš÷Û€HåHĞ[ÎåÀİu0æ÷:DĞ.Ğ[î¸¶;?©šAà\0(ĞıêUŞpPGÓ+–D:RG`÷êt*AZ/9\"T±ŞûÿdÀË\0›öm}pTšìUñ\0dç}à>¤>ğÏpI`6€ààmp¿Œ1¶ú‚$>€DuØŞv„¤ŒÍoáºÑHìı±ëMõ(+n&*M,Å³pá´I^\n$,²õ3³½aü¶<Â\0XÀ1À2À³‡Ä3ìÁ!K°;6ü>!	’zÃW²\"Ë;ísã6mƒåä(ÌóşØL.pæ}ĞsŞ¯f>ç(`¯b€bàR\0R(0~P¼o3½pĞi€æhæ`\0ñD bp¯.0O¿òDàÛ\'oÿ(?iN\0~ptÔ5aœİ+Ã<@\0`Œ•NdCÀ€^ù3á¤\0Î`\\N\0ê£~×¥.ª¾ê­ĞıV(ëú+­„}öŞ£¨Àfl¯á„—À‘­·ç¸oõ€gTö^s€<É7ÀSÀspÑ>í Ú0î²ûc½‹š!ç‰?Ï+°ì>ù»±K\0ÚÍøØb°\Z²ôss¦E\"ì>°»øÀ’ÌcZw`ÚĞ)¿ğ?ç\\ä¯\0ip\0ÖÌ3ğF0òT.åF ñ?\rªÖŒª“új\0i üi.A@çişòhó²?ç}àò.€ñcjç	ïßÿP…T’%™šø®Ş\0PßIŸ8Àëí^OoV‘±1wÌ}dGàtM×¦®×\r6I\n60jjI-JUU:U•:•<•˜J—J˜:¢–¤§@§ª©¬­¯¨§$@$³µ³¯@º$¥—¢¢<,,1Æ1ÅÉ{OÄ1ÍÇÑÒÒÇxÆÕ×ÙÜ1Õßİâ1<3h|OXX~âî~XòóóGGGøùúüşòÃŒvîÄa!ÈËu#JŒÈàB,O&ìö„Ì“d<® ³bÅ}\0¸X¹²8\\	\"\0\0iŒH¨	 çDP¸`²ÒHš•Hˆ\\yÿPòÎŠ+Wî@ŠfÆ4P\0Á²\np‚ä”@“lO˜0ƒ¨ìc„«—\\Gxar*T>PK–$ €\0–xğˆ`‚ÎŸÃˆ+^ÌXñ­xè,ù×$ @À™³F	€ƒA„éI.x0Ô\0†\r6IÆtcºË†‘ ]®dBoN•<ùºäk”%T)_…ŠU*çjÑ’.}WoKš~‰b¡c˜4fÈ K6­ü³lO°»¶í[8õÙŞoäã°äwx´‰#P¤‰şı™€ĞŸˆ`‚*H ƒ…FïÜ?G =uĞ=û”Ï:uÓ¡ÿøÑŠ¤•FÈÔVJAŒÀ„E4@ÈAi|”L#ÙG‘H €Æ‰Úàáä“N’ñÀ\0hu”L.ÑL/©eN\0Ğt\01\nÅQ.på’P+ø±BG$ÅYŠt€‚	ì\0(8ĞØŸ€*6D`!w•qç		¼°™\"0\0#”&0†¤‰pÁ\"¬æZ!\n\\ C³™&B2äp[º©àª«Pë&Ä×Åòs±À’Š-ÔQ§Ë&Àqò‹0ìaL1È8ãl3â™7MzîÅÀ{ñÓ|ò3ƒU)¢¨_~ìp`Â¹çj‘n‚E$(ÀópPÂ‚ó˜ÿĞ.€š@\0“ù‘ËWƒ>\ZX@ÚÃÏ>ÒÃ`_•¨\rw8µ‚TwQDÀc[D\0“LØ\0 Î.t0ÂYöÑ+w@\Zô¦^!…4ç\n;nÅR–DÀGJ0X„Qí&ˆ0¯¤ÒÏ-Kù„ŠS§xßf‚~Hà€Ÿ†ı§}dA\0,#ŒÚ¢¨Ğh\0ø0E¤LºhcXJ\Zj©ƒI¤†l¦‚qê¦tQa°ª›¬w\"k/¤(t­ìÚëtÓİ¢Ë°¥h2wÛ%{Ìxá%ÓŒ³ÒJN5×`km8Ùb»í|<„4Ã}ãêç‡\0Ahÿa€ğQ|»ö\n\0ÄS`Â<¬Àæk€½EØ«}ûöŸG``€ù`\Zhğp‡>ß:„E÷/OGAaBrêÕNñâÆLà „k‚\0¸æ‡+ @eD¨ÀPŠ²’`L¹úĞp«|ëƒhÀŸ\\\0¦¡ A‚LŠ@®\0 $z\0* 3¹\0\0LÈ¡˜ğº<\0/W\0âTĞ0’¬€~\0BÄÆÄÆÁ¸âº“6*Š\"3pkÃ^\0©|Ænw»ÛiPcƒ2¾!pœ¦R#‚lJ£’§r0€)¼ -¨¬f%+ì†€ÿ¬„Û–£\nF1Š¯8ä-jEÒ7×¹%€g4«YãAİV·¬ÖÉZé‰İµj—­RrcJßzïœ¤\rŞ= Aˆ%Mb¹“ş\\O\0Wh‡À=vLI\0¦ñLp=b\n³{Ssï€=í¡xÒ;ÚQ “LíÊŞ¹´)¿69¬Iı”üp1>Á¬HDƒÇdb‚ƒ°£Hà€.g •¡@F “ŒV\"\"DE	(œH‚‡ğ‰Lh2Ó„6”\"LÓ…}à”¦­D.’Iˆh»Œ¤x1p“šHRÅÌ§@e„1\n,¾ Zô¤¼èEJu¡4§	\\ÿ=`\Z”&pƒxÃD\0Õ4\'(ªhêfG´€{d/ü˜Šä²‘†ldt¶Ê¨­Ê\":´Vo>‡ÉLf¦[F&#€Öñ(‹ÌbVë¨kY£Z§´İíÜñ+Eıš’¸`‚°ì&;À¹‚`H4Op À8@	„¥x±Ä,\0Ğd˜Ä4&fåÑXÉ\"äGŞdÊ3¯ÌÖ6S\0©İHAKr½D,bD„ÃXt\Z€F0A.¹Oy²cDÓd£†¹IÎ¦›³\\„hº(ÌÈÒĞ=€#&)’T$·@me}hÓ_­ÆÊ\\ğ\\ÿ\0¶’–”	YpÈYÅR¨\0/\00€_Ğ™ºmà3w“Á	4µ©$„ê\'ÀiƒËhğ]\0.‡Ë 4@€ÛğTP˜@q)ªJÈ«võ«]}±,jAÕÏ‰5À`Á20¹V¶öx<œD†\'ÓsŸõ¸ÇIêÉÏ7¶AÊ„Ä@P±J“XÔ\rµÔä&<IÃõÈRwúAO’åHÂ„å²ìD-.à\0G$%ÂÂA˜Å+\0„#ÓL¸Aƒ	‚ğf>ËÒxÆ+B.õ“<ä%*P‘Ê¯@@2mL¡êÔmpí‡\"t€³!¥g^†Ï¶¬¬H\0èçR­Asl°*VÁ‚úÀÿ®hw±dµ\0˜ePL\0¿CB?WF¤‹¢×K‘mŸR[éµ	°¯²Ÿˆ œ•|€6éşjÃÔQœñ¢œ\0Ÿ–5¸\0D€7X§©ñ@â@Ô\r«†\'øˆ â)8õ©€œDw”À~s9-n±Œ•cHé`*°1­BQIµÆ`hEV&Û*¸ÎU\Zé‡(g;oœ2[~ˆ_f€³€êLA`OV®’`rù±8bøxì,³œ¥úàĞšålN2@X„Fôdúb*m€\\æç\n|ºâÌĞº…ø	+¡ô€ÁAc0\ZA¤Q0iZÿš³ì@6Ä.†’ÉÑ\0€Ù:>2ıÙ¶¶X@¯®+À÷\nÀzç\0(®£À—@’ÚN·ã°\'LpÑ\'D>pP}oš”m_àà—Œ0„1EMd9-hf:³íI\r`™úöİÈ74’qSeäp„\Z‡8@øÃK‚Soâ=‚‚ßüÖA\"\0!ÏªŒ_c`y¬¼™¤×ºüÑ{¿­;vF´ä\Z\rP>Ã¡4òìÖSºã	\0‹Vd’Ä‡;$ÓQbé±vêòL0!èg\0ù#_Ârq‡\'>P(&±TtFptp\rCXM‡3uDgYañÿ€Ø\rX§\rv7‚NÑ\\i’&+Ó1@ÁåegrğPöÔiE‚‚#ÒSóWQñ\03€#°1,–E4ÁÄ@&&PGxºvN1R^è„}pU£ƒóWP_œ×D@\0 zŞ\'¾q\nO•z\\Äz5\ZFåm¦Â)kT›¢\Zƒ€FqÀlğ7@0o\"`©×¯+ÛÁoŞ\'\n@`U„”x\n8c‹„pœcccÕÁ V>6£×}‡:ÄğoÕIæAWègd×;ëáq´#;~Ğ<#G\0h°\":hx04Fq%2Ñü\'& 2àãûr5*¤O=1ÿ<”C<Nx5£K0BL\00¾ôJpóä\\+7&6qĞ&äX5ƒjU>Ô>m!4$îHC6Á°$Ä%œÅ53 ƒ”%H€uÀwH 3§vßRW@\0,ÈLà¼wS‡5 €C} xfàThBLÃwFp#¨?dp–ö…%U2­mjÃ’:€H¤z>°à5é¡{?€Sš2F¨Á©!n \Záfl@Hù\09°Tô†\0/@bÕPH:€|Â\0\nÎgUŒp\\	pËÁH3††d‰“´h9ß·–d–dqÑ ÿ,BFdE¦~©8;w;´ƒ?á>%lwÀ*á\\h(°ù2~°tGğ!W3ºE)‘Œ;´CH ù!l%7¡7q1\"gA fúQ<Xø\0X\0wXtÄ/á¢ƒÁ\"uF /Ã4î˜N6!!Swu¢fÖB\0úØOD€R œıˆûb3·õœç@rpOY‚N?kUKPZÀy°5`\'bàj<„%-‘ë€å$7L€’$åygÏ†(3ğ+·ĞkÈz£a)2àSä¶`æ†F\'@{\r¦\0oĞ\0;Bea@¢bõfGF•dé*Úñÿ ğ|‰GHÒw}–èlÃ–lIEŞ·‰kÅIäq:Ğà:çwé×¯Ã-ÙğŠú ‹5Sw>Ê‘ç2Vè^ša\"Q\\3^ûÂ5·HvÅ4çtƒAp>\nt<“O+W€#P<3¡f\\ó\0jq@~0\ZC˜8ÿ¤\"*\"‚%¡3ù3máÇØ1p ‚ğ2xCYROà‰€6A9%„Z5Öõ1Ò4C’r¼ĞL Bo¡pA kå¹2_QC5ä&ÍØob3O\0ŸòÙDº ƒAzš@V˜ÁŸ4‰\0Â°g)?p)2ğGÕ“qh‡@\rÀÿ 4à<un\0uÓSĞp¡T~\nÚá|YÀ•S¢ ŠU™“9%::Ë\0qß×*ú}>öc©#~BF~\r7Š£¶ó\rd°£ßr(2]&±Ïe^Cèà1;9b C“#b­–&Ls$5ØH €U]<£&.³\\°3Qõ·_C=P$\Z##,÷[\"Xä²áä>ÍvÓ#t8tCÁT^¸Iœ¿õDGC91·…A1+€å	¨E’r‡	b€t0ğ( Cà\0~—©M#P3!ëÅ\"R‚ B§ÊDuÀ@Àª|@Ü1†ŸcbXäÿı	\Z¡1·t{¥Á“uè`\n”o@o ‡Æ”	PÍÚ¬’Â­ÉUÕz­/™­Õ†‘»­İ\Zpº\0®6ÖiÉV‰hŸjÃ–m5€‘I1\ZWï:\r7º-²óq¯X 0~¡AB+´»3rÑ•%(0@7$à:14_!AÆ‚<;&P‹é·•0\"§d\"|6’êøÄ2qO†¥8×\'XÊôs³i[#Ö¥ıtf#ëàŒPOL“OTØ}J3Ä¶AîYwÀu#™Z$å©D0uŸùf{v_—Nåu‚½Õx<\0„écîIñ9¶âÿ\0\0À\03Àªœ˜6$HÕ¶EQY“ A)NÂ£±“¦ÒF\'0nC©\0Ö·ÁÚan@*%ĞOù”œ±pÓT‹[­“\n$\0¹S9•Ğ¹!º\n¿òd¥É¢V‹(ş¶¢œ˜Idà–£ŠBvºæ‘º«ë~@ôCrD@ø\\^À»Lğ‹WP°¤!< @³. Êkhd€0ÂC`—%B3æs^ÀLE ğS#Ch€Ü«F0Œ´˜\"#Áƒ<ØƒN²_çhëØëe`j1¦b îX€iò[F°vÚø$àT¨_V‹³~§±}L}P£)t_aRbÿu€OC¨‘çûj3¶åd\0#…Á€Ò1†Á Ekó9ş…B`)l`)ÎmH6u¸)…\0~{4\Z\'¶¡Ã‡;\0„[öL¸Ğ\n7ÕU9+~d\nIL¹É}ÊqÄJVà\n®âº,Ğ|;”qŸèÊ¹¢ÛcãgŠíêI¤d-Mö\rOàºtÍøs\rDBAñ2šZ>xÑP5OÅÉkó2Ö«@‹™LáhÀĞ[›b\n¦3wÊP®6É>aB¨¬¤²áñ2Û1=Œ\'±hRÈ&éT˜\r	#àRÒÌšÙ¼ñ»2ıäÿ§0\nÅË@‘;W ÌäÔ§å…»5A.<(X<ø\rª&Íc€g+zÑÂÃ¢™1Â5))á<Ùr{\Z‡\"@ƒà\\@o\0\rà· aŠ£Ãô|Ï?ğM\Zö­ÒÊ¸¯+`Ä^©­“¢¸À+¿¡ch¹–fÑMzœ{Åé\Z[W¨CŠïZ—3\ZÆñ1Æ?òºGĞ+pjw0üA1¼\'„=Á&àMx R„(°vQÚ‘8ı¤†İXÀ‚ãjî(4°&2UFûB.Š\'²æË\\E‚LÊ”Lƒ>\Z„[²[‘\\ƒ4U\0ÀHNCĞÕğ`×+ÿ#ÄIœ`÷ÑAèÈ²GğÖ0û\\ ³jA\0<ià„o!kñàwæåk#ğÖ™‡¦6», È†İ5ÀÍ†¶U”Ÿ¿Á(#L“6Ù ¤‘*¹\n{v{8«Qa¼GÚ¤Â¤’9p  ÚMiÏôLoúìT4Û”8Û\r\r–Hp·Ğ­0:Qœˆ,U(l9Ü¶=–Å«“/êÅ§Æ]\r?r\\UQ´5ş›Úİ2\\¾„0mè\rAè„¾\nÄ9nPævÒwpàNù½/á@2Y[\"à~\0\'v÷WMRë²Œò\nåà£ëU6á	ÿ9¿µ™Nï(\0ÀŒ=8±:ƒ€…©1×û\\Ü3Ûå0}6ùã™:…Tèi°QD¥6|`ª=¾#€Ìª¬j	3P	FN`)Û¶äc>Å)ã¦FJÎê{IEÚ©Ò9 a`à? ğ?`Ï9ÃO©ÏOÛ»!Vhæm~Ğ]éU«0:y€–=z¿M”1†Ïö¹£·Ø¤mÆıc¡ˆÜî*-DV-K–\r6Z3‡»h0ÒrÂ5ŞğèwJ&à]0‘S‚šõ$v+ƒB9›¼‹›Íø\0=Í‚0¥õ­Pî«5’ƒİ\0OçDã›v+X>»§öAwÿß\Zãj)ˆC*}š`ÊÕ\'òeÃ.ßîÈÎE]>ø\0^\0í#‹á #vî‹Y \0k/G€é\0 35(ö\'Äá±®L…úd.î‚\"!X`ÍiS@Ÿ˜ÀHØÖÙf7u‹·-Ì)›òÂã¶`ã¦a©ÊšZ ¬\r¯åÿåb.`³Ğ¸ÉçÓcÄG¼¸ñË¡šK®Y¹¡“QšÑ£‡ò+/m™tÜ ]ó\Z\r¯4oèú@13€¶Ëx(]ã€C‡\'‹	¦OÔ„máıdƒCH[ ¼î\rw‚hOXD#..#‹.bpFDp3~–AD~O–ER‡#F\0£ÿp£FbG•xO¬¬x+3XX±±²¶Xb¢F¢L\0Db£u\0”–~AC©1O~H#D¼ºLF\0x33hÚİÚ³XwHHæåH\0˜bAZYF(\Z<~\0(.D.¥F(•ë	+‚® t‡Ï\n,.şHœH±¢Å‹‘`\0dÆ|xˆœ\0D $T@\0ÁS8°!Í\r8ŒÙ9ƒ\n\"Nˆ¸ä‚QAÁ€‘ÁTF.9äÈñãGR§b€ À‹-Rª˜ C	‹y\"¨ƒGp0€A.\\ŞÊİË·$‹³yş²Ğ1x°Ã‡\'(V¬ã#a‚ÿYğ‰LùïÚËd\"<¹ƒmŒÏ C‹ñ`4èÒ¤-= ÃÁÄ,=° ™EK6–H¡Cç\0“CEğTzd‹‰J`©@‡H…Eb~ù%¥ÈXİfù·«{$1À»”É2?š/\nåÂû/M¯î¬˜¿‚ŒıxòëÏOæU®H‹L$\0€E%•á@210ÓA¿ì‚BtbŒ ÆpXbß|u(ÈG ¡Kw\ZÁNYG	Q‡=ø<À?ë)Í!\0ğÛ Á73°€i$F\0!Ë3ğqÅI<8¦J$0ÅK>d)Ó\04ÙäÄ—9% `ÄqRÿ>!%‚R\"ŒÙTT5á´A	%ä0\0trÙÕp…5Yf¡µGƒÆÀB{ÑU×[Y4ªh^yí5ÁY‘f˜adE©X”@\0ád&=Ùd–¥¬pÙZªªµ™gl©eÚ¬´–&@Ì²á|öİñÀ#T Æ°b €B9\0ÂÖù\r`IrË5WÁ/ÄF‡ÄlBß}Ë±—H\"„7ÉpÀQ&1`“^…¡Ñ^{§ôŸ}øöê¡‡hÜqw àŒêÈIºp`Ş2<8¬(.ô¡H$Rdø@+ûáÇ6^ İt¿ˆ„…(rğ‹i q,\0<<PMŠÌk£?ÿñ€ıµb¾…¤qäÏGvpX\0ÁÃ\"-%I$dñU/´áp)ç—NÔ4†HeTAÉ0†M]8ÕÔn@ÕE	P•0g\\uå\\a¤Tb–E0è|ïqh]y5úV\0ÂÕ(^2@Y€ıu˜a‘ùb’´éa<f™óaé¨¨šºêZ¯v¦L¬Ÿê­¡¡F\Z˜à`ß\nò¡\Z¸™ã»3êĞÃ¬jxÀñ‡´PËœsÓ¡S‡°Tçl}õùŠ¼Ò‰‘çbó\0\0u¤r°\0[`/ÆóÄv †&\Zgü8µİr[{‚L\0. ÁÄ7Ÿ°*ÿÌ ƒúrÑ‡ß•cAX€ô£Z\\A\0êˆ@¢12¸qà\0pc\0¬àD ÃsA¬İ \0–¸xµB2<AUš/\"m&	ƒ’¼|%jR£šœ¬¦µœàˆF9Ó	0°ÄŒ¡l]°ÉT¢2E7¸!`˜JJ7¯ÔÍn‡QB`Ğ¢·S™1- á² F6:Íp/pGGÄåšZI:µ˜(Šs¡’LecFÑ¥J-­\Z]g\\«Í|fu¬k]b—«#ô µ¤0çXƒD(ºŒ‡<N`¡Ÿ¨4¢sçlA”WÈ¤,¼°#Ô/XàiÿÄ06a	\0 !p—¢/ï|‡\0«Á2•ÙŸ|µw©B¬û¹ fÈÔ\0¦š¤g€ˆÄVé\0‹Ég>ºƒÖ	;İ[ÂÀD$x@(xF’3:T(\Z\0Àó€X6~Xàˆ4Ã†JÄ\0²è\Z>¢´ÌM	sy ö‚©emˆ5IÀÆt xà(hƒPÒ4”Äáˆ<à€Á\r?ÀWX¤dfaA`X „B^Š0@8B\08€\0,•%,a#áàR´ÏUszÌªbøè)>âñS¡òœ #³‚¿Ê“1ãª23ºXAÒtµ:Í\nÿ(9ùĞ§zÊÑŞ°vS‡1ášb0ÁÍœe¼\"¨aÍ©C_;`uà•ŞZ¡ @\0b‚è€ƒ…ä‡ÎºBÏ0Y9]ó—Ó“,Ï¹¡]­à…bÂ¶ …Ç–o\0A\\ Qˆ.J:<œíl¥ ÛâÇ ûÙO¼)#PƒD\"ƒ\0J \0\Z˜@\0ù4æóÛhHX%D*ÑLgÎ§u¨çÀN3èˆÑşÒ)Ğ¥\0nCKªÆ%«% ?`\"P.°`¤P@(AAÓPå¥Ğ\nwÊ’6´ §*‹\nPb*y1S*ÁS™êÿT§ApsŒ¥Pœ˜=vµS8ÆqÓ˜Ìe¬b…Ì Q•V”5‘£ck”ü„A½5’É‹%k·š|­ÀX@Âfë€-8`RPG5áP„2›Àt0‚\0Ö\\80–7^Ş‚D¼ì€náÁ…;\"C6Ä …0+Öê#š³c)˜\0<ÀÔC$,áÂªm*¢›Ÿ_ÉïÒÀ8p+E°%: …¾RD€rˆ»…áÕ	‚	\\sç+¬SëÌ5LÀXG“£÷ƒÃ°c«æ@²Z-Í<V¶}ŞBœ{g<K·-Æ“¯Q…üb$úİ/T@‚¹ÿ@\0À~É–fòQ‘b€‰g:“OŞıî’2)G<QŞıƒ(nq¦ZKøŸæetAG*wGtÀ\0p±àcÌ]nr6Îq®c=VNS •XI5™’KF-“¹‚ O¥*$³jt›yÕ“G“Bàİlä‡A L€Cä…YrA\nQ_*ÂØ%üG{‡ˆ52ïğ\rÚéxĞµF@ıöAH¨-ÌĞ3ĞaŠÍE)vñêRÀ™d`¯p§Â»Ò\'!Wè¬Ş;»RìÈnl¯ï»i÷¯}‚¿Èz9‚à@ÀÑ+u† Û?,ÿ`v€D†°„- ¡=(‚`‚2€\0¸Òãymjh\0PµAQÂ0.$\0ğ¨Vµ-ÕDlL,i„ß-æ3˜F9)˜ˆØ$CÔñYò•+\r\0TPÅıt1øÃªƒP…s\\ã\\5\Z“àßßúÃŸr›Ò£?Å¹şÙ¬QVÀ…ÔVØ7©I¤±Eà\Z™Æx¹¦\rzæY‰ÇtàR@}–C `Æ\\Ø„u\n1hĞ?O ê´@ÛB@\0ıùC[ÑgØeà\0}¦#`Ä w*È!û‚/úÑÑµ##\r#,¿fBÏóÿ< …È–>:ZÄƒíCiú1X7ƒ¶ƒR`zõw€æX½ö; J{§w;rNûâ¸t·g$ÑrÚ€cHóŠá_Š£\0ÆFÄG5]’`É@ÁDøvoKtï&Øpn“\'\0p-Áw‚\':åTäWp>Åp@ª&ì—8å\'>Eô§q¡Š…\Zg9^¥Uú§9B€*€F–*gA€†dHœÁ7„òH¢1(À\r˜+áàLùÒMÅğ\0bĞÈFx€v†bæ XRp…%–Ğµ\n«0X{wu mhÈXìH‚S¸îèlª°®`ià`uµ±ÿ\r‚@`8\\\0	½5iEÀ	yVmÕCwr‡Ô£gªÑY måÀéğ„¿ãÚƒÇáÈ…úñ1ÀŠV‡F’G_‰Ö*)L“Š)Ã7ˆ\\ân\nÖ|ÉgoÓ‡“ô¶L‰8±6]0\'sB|\\‚\'TayB5Wòuó‡$ñ8@`C Z \0\'X°å¶¯Èï—c{´Uø×G‹şG*G€»XVÈr”R*£³e$’3÷É¸Œ—i—FòáBzF\0€D`˜ˆĞ}ò’}€˜¥Å&0˜;Ó+GÛP+ä3PÆ…lF‚¾ã<„ÿ# \0\Z²B:³Bv·é›ı¸\'ØMâ(Y?2Ê‡WğZ« Yâ‚Ù±İ ‚\r>\'yÊi\0ÊùjÎÙvBîğ\\yœˆkÚ*Cb’QEÀùe4QB*Qn$P>õa/ğ}PU K¤ˆÖ|cğ;!Rc‚OÔo2àoÿv”tâZğ2¥”\0\'7QUª8#+:€CĞë \0òÀÚb)–]‰QcI–]ecfùı§A¶9‚)7Vpid‘q*g%Œvi—2g:Ä¸—Eğ\Z² {¸†qWXpB:¤Bši1H\0ŸF¤CJ\03À\n»ÿwT×#ŞN*tNªÇz«—¥&¥«·¥\\ºzE€×Ñš´é£ë„+\0’\\è\nåØ?mø¦pºwƒ1ÕÙZšéŒFxg«¦Y(±#­Ù!õá§¬©/ı’k>z4+pàÃ!ñÀ\0!IC*\'áS*Pä&“à-q”69}[ÃŸô6oÿy}bâRÑôVcâSaEqPa³zSQ‰L9_!Bz\Z,p$ L`y„C\0‡“x±ê¡(A4¯h±¢Šá>ö¡’9œãck9H§ò‹¼¸*†d—š¡…RŒ\0ß•i*„§€ª„­§ò\Z§¿éBw6¨ö¡ÿ§H’z\n§æ‡‡xÃ±šxæ\ncißÀ£SÚ\r>Ò›®õöQ§õ!±¬yW…Š/©™+˜ùjó:¯–À¦ä’­ sà¨T)X)©‰öâÆL!|-ğVˆøYRt`=ÉŸf? Rõ¦“ñ9Sq \0o´4ğ/Ö— Ğ”t3bŒ³7z©—Á\n4s€ÛÅ/ÖFo±¬ê¡`)–°x|r¡’­\"‘­ØZ¢İúˆ*ˆ´*6ú\0, zk&˜É£ç\r+²!i¯Ú.Êà¤B›}	y²Ğ~	>º\r½YôèY	GX\r»x½©3¬@u;š™4ÿº}ë/ıhW‰{NË¤º1œ…I¢º˜Ä°>J›wêB¯±ë¹x¥¨¹¦N|€+@\0t€²a\r% AF£{{\'Ñ)™Jn-0ëY5sr}9«Ÿ	†&p`)}fr4E¾4¥\04pé{êË´Z´a.¡«c(7š\Z–@\Z1°\rå\0ò¸òT/6q°Ìš¡X Šf­:–¶ù—4~Án;\"q‹ cr”ñ­¦‚d‰D\Zzœö—·°ğ£\rWà$dzº¶k»“Û‚hpv+­×€4\\jkÆi9\Zƒ;¤^àÃHê^+¤ğÃkæi?¬¤1È¸ºÿ]ûZmHèŒ«P	‰§VöLÔ¨wwºûâ!“û^uú®ªÙBdL„èt™²7| È+t Ü…(ES4!\"¡{dAnåÆ©†RT?°RÔ\'ŸÌçv´4å\n \06`ëÛ¾1•6¸\Z¿/aQB%\Z¥±Éú[\Z _0 â\' TÈªQxQÀ\\©¡]IEãŠ\rì)Ñ»cû÷)½gQDÁ¢ò¢.*1Ú‹u«7|°ÄıbÅ­U±xv§Y\\ÆÎŒ±÷àœÌÙœÌYÍ¯†ÍÏ¹ÍÔ¼œÙ¼œ]:k³VÃeVÎ®—£ı¢º©ÎvW¨ëŒÌìLü‘¯Q¬¦ölÿĞ5¬ 1Jù|ÏN<²”E‡:¬P—sÜL2wì): ©é¹Ÿ:\0[d÷I}¥šoGTo0ST \0çëÈ4PÒ4@7 \0ñùŸ	JÉa@¿U F¨É—›<u˜f–‡\0§¬Ê\Z€“¡e»ŠÓ\nŠ´ˆq(ÆËGõ9À<V.*€¢ó{ğ\0ğz3 B±	¼\r{¨gº^ÜÅ¡Õ‹úsmçœB7Öe-\\Âj­ÖhiİÍY*yZŠ¥³9š¤>¼¤^€¤|}¤~Fj+Â#œ¶€™²«°=ò#é¬­µ{w¯õ-YL=W@ÆyF§”5È[\0Z`\'NeÿC³p4qe93«FiÑğKt]ª†HR%•T Èé»´&Sà´ØÇY50­f1ÓzYÓüÉ&Y(\0\0¬T;¶î7¶rÑ),ÔeIÔZuÔCcİM1ú­\Z¬y`y2x„½Ş¡»î?ÚjÑ9Ò¹Öö}ßømßĞÉÍ×,××¬ÍŞü¥àŒ¥_:×âÌz­—àâ<Î6lÎ~ÄÎfG<áG¼ináköiB,¤IüÃs^`¡8ç¸~ƒ8‡¶Ç5\0Ç%ĞT\n\r­PòÑËGèip×K`wb²=o=1RÌ÷Ià¼ÈT@‹LS2«7ÿÜmĞa 1mi¡7çÚÉ5\ZYë¨fàÆ\nİÉš8ŒÀåÖ•×-ÔÔêqYeQŞíİÛZÁ•¡Á„´9GÕ{»ÍŒÅ’Mw«‹º©k=¶”,»,‚Ş‚t£@èÙ[%nÇÖÃÅÍÛàNÖÜ|ÖÒ¹ßÑùè“×Ï‰Í«gÍ›¾éŸ.éÿ]ê\\êß^zà\\Š:Ûµ¼¡½y$ĞëU2ëSa`³„è6\"È9;oÀ>aäÛÈT\0\'Ò‹¼Ò¿M5>5\0ÓyíÑNåUŞMl\Z<ĞÆP.käåÈ\nÔ|‘À,ËfÎp•£İŒj.9ßm‹r{rş]G@ÿ¼^½›)w‰{W|¾ïšYñB/»À˜ÖeLòrğ9.òBğßğ.\névô}ßißø-Œ>\\ô\r\0Àñp€ñÿññkİÖÑ9ÖéfÖmıœe}Ö¡şÍß¬ÍñuÓ\n`ËÛÊ\n­j,:[e|LˆÙ´=Ÿ8ùÑw¾‹¬\0T@6ğ*\rÛ8áÜmPZOÜÒNíÅ¨É£1:Ù®íĞiÀ~òğb¼¬Ó=¶Œc®hî!Úq–s9´˜<¦­×ªÔŞz­Wï3pâ°1øì}i±Aø¶pø·p¬w+ffÎ_Î~à^\Z×Ğœ)¥ñ5ñéÿùú/ú‰î¥_è½ÕñQ\n¿ñ®ßù§ú„èè)AßèŸ,¢W‡R@EÀE·J²‡OâGqëşEÑTÃ9®½6Ùªú–DæKäG~Rß›\0ğ%Yâa-°õbí3Ú7Vk\Z~#c‘1•d?z8€öj?q©Ì¬aN4ÕÔf+÷Ø-7–GY:‚ƒ‚,…‡†,{G&E3hXwhW”hh”—hœœ˜¡3¥œXX©ª­««¨©²´µG·¸G·¹¼ÃÄÅÃÂÄEÃÊÊÆÎÏÆÌÉËEÍËÓÕ×ÕÛÜİEÜ&âãâææAéAìApAìÿïpõp\0\0÷øûLL\0LHşH° Á!iL”(1 À‘,`„Ç\n<xL˜¡C#*H0x \0‚6”H°2Ë~ÀÄ@á‚\nnâT À†‚\'ÀäH°a\0mÎ´hQ¥©’§Jòì™JujŒ=1®^ÇĞ„¯4òèÄ Ù³hP¢H–,G¼…˜…AİXòê•¨÷£D,8ğÁ‡‡ıªq¡Ç„2bTä–;+2k^AfófÌw@¯Àüyô23w&ƒÜ×¹àê’ñÖ®Û¸déš÷mT¶wß%|v-à·j?Ü%WóäÄÆN~¤ÿ/ë×{a÷Åİ—véÎ£ßİ=˜y`ÑÈ€Ó!-Z.´,D b*Š3x°¸’QìW $„AI\'\r°Ğ&ƒLŒÓğÄÓN^@P	tQ´ÑÆRz¨àTTyHUâ‰T™Ø•`\r„@„£{4ÖøG(¸`ÂCs½E@]@€×^Db‘—_Æ\0E„#E‰=	Ö”‹	¢‹}…¥,a€# âJ®”iæ™h¶2LH`Â0%Ğ+<1uF°+ğ‘Q~<Üyg+´”9Ë*‡¾2‹,ˆ¢Œyæ‡J/¨ĞE‹}’fú#*±hjék?:ÇKuÚA\ZÿÌ¨Ûq\'^n¹UZq§`cA±rm*Ñ<\\q‘Xc\rÆ\0\'1¤’‚	ü,4A(!THH1u‘\0JFù0ÅêbPEÅB\\± È\'*q€y½•—HK&FÖ¬ô¢ei8RŸ–vŠWDíed^X\0/€M:e”OÆ8ecTB,X&I)ƒRÊÅ3\\,‰ÇwŒ±šÜÃ-äPÄBX<à‡Ë0¿,³Ëxä\'(Æ¥d¤\n¥ğ|s ½^ñÀĞD=44S¼Pœ0@ô\nWÄ0´ĞC¿lôH#}õÖF[M´Ô<bcıÄÙœMvOpÖ6Ôw\\!ÿ7üõg·İùMè Fv,Y¤ìv&TPïs(°\0õÙÑD@\\AFı\r².	$@@¶®$Ó‚0P…\nPACNA)KÔ\0N8áƒ¶.ÕÔˆJ˜ÛÕ¸¸³@0—\\r	y$Ec±PÖáÈ¤i|×¾÷hA\nOäõ{ùØ’$ìä÷T:l˜–:p`€	»˜€Æªq¶\ZdŒ-ÿüx †\Zg¨mÿıö]õx”\0®ğ2­aíhE{‚¦%‘W)\rÄÂŞ`Ö5¢YÍOÀ‚5€@AºÌ¡GÂ’ğ„(ô\Z×º–Â¶Ğ„.Z \'8q@‚OÿàÀ7„(d\0€õ–4¬ ~\Z‹•.7’’`k!.IÖ´0-›@h\'TxÃ<pÈàZpÂQ|ğnhv:\0WT\"¨`Îw2	®JRá†1óJâ\03˜Ám\"àø•…:)/A\nöô/¾,0MÚŞ÷ 4É	À|E8™Ğ±2‘©d= À\'K\ZM„Æ™(%&î0/À»Y®f¶M„ÅÅ$¦X8ĞHk™-+(\'€€eZï£ËTQ3m»‚*2¬T3Ø¼İ:V¨ñà	Ã$\ZÒb\0µ#úê	z§Ñ²bË—¡ğ¬fÿÑ^À8	à1\0!P/$¤¸r—¿€€è	‰ñÊº\0Ç•`.ÉÁ‚šUED\'8Ê¾¸¡1z¨[³S£ª ƒ§ÌNa 	‡Œ‚’“p¨$sÒ;R¼ãíñ¦‚ê€ˆƒqí‘P}7¤ˆÜe‘ÓKÁúr¤%Mò#y	à¼[”LdXXÁ˜@„xuDèªÜaw\0À#0\0Èzz¡<í@Ò„7jbËÚÖpÙ(MÇ—j\nçÕØ©ií	~¸zŠÁ4å<çTÁ¹\r„§lƒjµÌšü8´5#ÈÂ&À–)#¯‚ÔrÔÿù\0 \0ˆYÁĞÈ~ÚhPH@g‰T$“ëÓX”¸.”h¥+¢‚~0­*ZBêâPVçÑØµ@!mÊª°]©à¸[\ZKh”\0L!½ƒÀSãáô½ñc\Z$ À5è¿öEˆU‘Ö+¼ŒÕ%,ª~‰k«*\0Ù’ál^°…-tàÂHÈğş †!8À¶iqÀ†ÿ Ód\0Ğ‚	8ZºxkxàÔªºÓÛH„\0´Tá0\'§\ri+0ÕßNåŒó£ÚQFœ–¬ğ€TfÕ4¸29­¬\ZBÏß€!ãŠ\0ÂphP´ÿ+ô¢.<(\ZP`#øháµ3ù€N2$‘†èˆ\n&ğ]¡$¹R„	N :+ZÌúÁPŠ\"F2ÆNL	éHU ¢*¨ /(–D‡²?cë¥S°Ã¸d.sM\0¾¨æãæ W;0æXñ[\0Ç#õèG½K$õ†˜—\0/ò×€Š±@š!›ÁĞ1 Õ«.p:`\"À5Ã®€¶yšákc»ÚFBàà ölP†1/I%dÕ¾êUÁ±`fàj‰ÅE\0pÅî, ½ï0î¸v›‡óÚÕn›\n‚„¸\0º\\péÔæ5CËg—|DK¢aÿ	5r€O\Z\0^«‚`¿}\'ğœgİ\rË$O\\	è˜%:Ñ5·‹2øAr€ 0å£K¹®\n°;;Ùµ 0´@hE‹·Óô¡cïÂĞ=-ÕÎ æ²iª·ş‡Ïa5˜ÃP€ƒùÆ	ˆûúÑ\\Ô_¡nÊ××s8J`€4¸\0f˜Ãœ\'W°ÇEkXÁ* ¡L0\nF°|ôşèú íÊk(èÃZŒAp²vk´ q•£‹À&|hõÆçÙ·R=Ä<m±§1pe€CîBÀkÓ6úmÖ€3\0ª )¾o\\Í^öÈ8Æ©¾ï[8DäA%Òâ¡äÿî¡r0q¹,	r@`æ9Ÿ\0Ï•›KÌŸhšúæ2qIÏY÷: _D$`J Yà 9\0hóu%a S{Ö^`P”Ãuxü4€#€)Ögkuá.!È;Â‚P|rbLàv€8€5Ğu!APÃ\0NîÓwàG  @(€#H pÀàx+øxÿ°V\00H\0nH`ybĞ}Eàd1\0N¤WGSZ¿±@‹‚\n%	§÷2ì†@X“XØÑÅçzçp–b¯÷p …YÄZQFX‡{¸\0w*\'hÿÏ÷F4Ò·¼74X +i1\0p€·÷ã[tDèä\'¥Öë¢~âPÁ ¡ÓE`Š?0‚;Öt°¸/PSd91h¸i\nb/S¼£`ìEj8XŒ!fb\ZpykĞ&ñ\0ÊZñ@ğ\0\07P( ~Ô v\0E@\0Y•1¥ğàƒD êøƒu`„L0nƒ#\0.Ğoÿ U„à¦m…ç\0`¼÷{Fƒ4¸4³qrAªÀ(«Ğq§GYP}Ägæwx`5WpA3rWoí&\0N&NlØ5­aBF*ÒÁ=¸²$Ú”ÿz²Ñ²á42ãZA¤Ex=t+ŞW0Pu†<ƒMg³úQjÃõ…dÈÕ2ñ”‰ò×:­ó:¯SFfÔfÔ’i´€\"€Z hŠv€Št”T 12¥ØtjÆ8—·5«öufp\05Ğ5 —s@t0v¹CõÒEà´·d‚¡4& bà# ™`UğX\03P@µuoZ€# puy˜\'„™\'n€îdƒ@¤U~0Ä(‰†§÷\0\0²e4ÒÇàQ»Ğ64<P•Á`ö*¸(¨‡z†D“œÕvèoQwn¡ÿ& ğ2©°Âä2\ZG\0O¦“hÑCE€v``àLX5è„PXçé—$Á”a Q”\0¢ %)Á:ct•]ÙS€\\é•9€§C0@¸ \'àœ6^€\0çÕ;li¤†M\"JŒtY¢&Š†I*E©¡áç(aV0Z„ø@ş¨šàC@\0Of@y•W…(VCØ7`lÊä?ós@~dºO*Y´Éb²\n(X/SÃ†pâä‹H£B)C3À\0 &@9©œ©u#ùœ©5àXÍw`\0P5(\0ğ™ 50I–rÿ>†z\nÁ8äqØg(`h¾…EP<6ÕÄè0Â;@>P hÓE«È:U‰ m€:S  \'z7 E@€Zc	u.EéÕ=\0 añ–#º<p¢Æz¬AŞp€O`	¢€xpìXu`pxÿ`£\0 šH[À£€ên¢9…pÅS}0_àNdã?G4w’Rz¥Õ(ˆB(¹z\\óP_Zà­E3Òá›¯Ro‘«ğ\r‰\nôÊ\0ì&dÎY’ôö¹€’?\"!`+E\0Aú\0lú<¾\0ãéYPW+–ÿ¨XÃ\0;_ö5H¾\ZB™˜6è¤M|°¡;$ ŸûŠş©:åU¬(FŠ ¬ª-¬Š\0	p`:²:«µZàŸ“¼Ø‹/^G/í5Œ{ÄŠ¬j[¢†I\0E`lJ8ö˜A˜êhxİ¨xşØ®à;ú\0 D­ë¸má†óÅCÃ6jCZdö6’;¥¼T¥¶9oñˆGã@0µÍ‘‘YA°>BkB)(™Z½0’üŠo­AÏCk€Ã\0p\0 \'Xp¦E\0¨Ótq4é2G *Æ§j³1AĞeî\"€‚³Ô…]¸™Êÿ%@‚Xù©£,O)«(F­Ó´P›ª¬úSP,Z \07Ğ\0ĞB4àLw¡º¸¡¨€…ôTw$e;Œh[MÅº¶\\Êz˜À q	P>š8„H ¬zÛ­Vã·-?(š–gyU˜7 ¸as6ñ:6ê´l÷´)È!›2V¹w¥Ã„‰%\0A@fFƒËÖIÇæR3C›ù2Åù*{²ÚA5Q–nt§²{°öf»À}&`¦0²Ñ! \"Z$\0ke\0%@\02l}ÊKbÜÂƒ<P7‹°Y±³¡\'yÖgeÄ”ş)EcÀ,«ŠVyäûÿ:ù»TäğK²z:¶zcÉµŸóµ\rA\n¨^ş+ŒÖ+¢g»:PÀœ¼um[A€ÏªÀ˜›ùl_e™g•#\0Ğ®.c\0+50„u Á‹mÓ6Wi \0IºYñŠXŠ’‹ˆµ€¯²ĞIû\ZN‰\0i\0\0Üy5ÅIºA¨¶Á„5ÀA|°»E0Y÷›ÔÉ¥zÖ!¢¹·kfºX<›‚)Â¹~Pó¥n¡f‹š¬ATñ²l¼ÆtÕ´‰ ĞH„\"Ñ;~QHËi}ì:V™ªg`•Ÿú©+5\09@¥¿7@o !8-öëp€-•¿r´€ïòÿ\"?kúA”Õ„ÜÉ4}Sm©J¯Ğh`\0Íš@Xxup™Š§y®ü\0°|oĞ.­?xyáV…ÌÓ»€\Z$œWfó\0| ¼±Â¥TúwÉ¼c3`Í,¼ÌY Ãò9›¼qÃ‰A\0İlÏ`öÕöá8Á®côÖ±`ÎO\n\0Hp}`@  Â¢ÛØË1`šç&øT@\0áO°U6k7Á3Yq#J$ègİûe,œCHaÑŸê¼èŸ\Z}µW\0[$[d«n 9àÛ•¿ùûi¬%?ûÒØÉ3]ÓÎ}8Ÿ|d7\Z³ÿ>ÉmfbE\r\0B&à\0í\Z3à·¼B-WÑ–¦acÕïêy2ŒX¤G†–;Öí„ÑÖÌT­fãÑÌ!4]~sEµ ;œu×œò\nËÑ4\Z`\0¸Š;aî¼Ãµ0¼~`\0ˆšOà4#0sÀsáTıxS©O`M#j.\Z‘9 øgÉµÚ*QJ‹\0âªš%€Ğ\"« œÈoàÑ:ôËµ}ÒÒe]æ}€¡£v~æ‚Mg{MÌıÜ^^/L\0&dÀ>«Q\'ó, j~am¾Ê€ôö\0C°#&`\0F WOmÖšaë\ZÿÈ$^ˆX| ‘‘+¥”kz$¹BÆÔFğiêZãX’ö&Ø´`oe\n0FLCG@j­Y	’¦âÁY)õÆ\0,€œÊùn¬\"L/#ˆo¦°08@bğf%À\"#@c¬yP\"šuJ™Rn şÙs«¨´œÓÇê9`4Ğ\07€È\rĞ\0§sµcyŠ*ÁìQ>^r^T·gŠ¡G9¢\"šÍıåò¢p€>&\0‰2=İD€V’)™(€xHhÖÖuˆ×vÉj•Ô6j–‰}0Afªñ`b“WRs†şz»A)c¸è\r™†PLÍì­W:œÿvèÃºZÃP÷D¤\"@wz¬k*¡bo…Í`&Ìà¬ê»à²€;WkUÃY3q À}à.áâv#õ•*5ätPæÂ›ÚP­¥*ÛÑ QR¥Ãí]:Ğ¢7A€]ääHË9ı‰-&QrïâTx$¬ÌåH4ï~ì;²ƒUş*#xF ™\\%ø#_é`\0#hÅ†‹C\rñ} ´Tñ$ÌšêÔÓoÂ¦kjÅ|Œ¥\0ñÍ<ñ”6–úÑA¯· L1à¶+{\0E&p=£âÁ êK¼ÄaYßA¯ÌQÎüş¶& ÿA)ÿ›´Ÿ\nÿCØF@5hÍÄ™2$g÷€‘TŸPÁRƒNG”64½\n}Ñ^-ö öCQŠ8a¦£\04\074o\n4‡\n‡q`?9		%%%9”Y$£$::<,ª¬¬{1°<µ¶·¸¹º»¼½¾¿ÀÁÂµpEExdOÎÍ~ERbDbbÖ\0\0(.~xA.H(}Dí×îuH}}\0ÎxOúûËO~h˜(’å‡#8@x!\r	`øpâŒ1.ËÈq™óú0	ÂÃÏ“ŒX6\\y0! áp0A È\"ÿLô!È!‡ƒ+şdÑ±è2?ƒ)”˜ÈòÀ	,üàqY0hAˆÄùY‘¦‚\0r”ÄcF\0:„‡İ»wuğIëA„d\"<‰Àb/:!ØÄ˜±“,ŞãÇ7(\\8Ä…A\n@+½HAœZN»qƒ	R—.–ºdb€Ã”,/ èf\0È:~«bÑêUŒW­h\r[Î¼¹óç½èÀ¡i\0\0–×±hÇBÆÄ\"FFŒp!¾Â6#fˆ{p¥’ AÚ¡@á®\n\"øëHABÄÅ\rpOÑŒ3:ó\0\ZA$”Pp1ED%TÑuU˜ÑFáÿP=i¼…VøøÁÀJ]ôD\\„\0 E°`À\ZEdbm?åÈÁ\nëYX¡II£‰B=…Ä\Z$e•%=AäAA.uùÁóÜ @ˆƒG àI¼õfWa…ñ±v­\0K,¹É&@0\0A,&YcŒm0À$P™\'P‡\nP44Àèh‰xp¨Zè	`°¶Új9°f‰%›”ÀÜöB¨’	Ä)¨¤Bq®°Ë`³@gë­¸æJŒ1^!À=H´h˜ĞA;H QÇ²òÀa„7d4Ã±p±Æ|ôaSâO:}q>Wÿ¬\0`øÀA$ƒ\"BÀõîC¥T/<ø¨o8\0Ìƒ‚L€3~$$TGÀe\"•caÂT \0Ö¡#\\:şTÄ\ZÓ1G-³B¼:šˆqO&hP	9Òğ^“\n•¬T†3\n\Z„+b4•Y_iª©\nÄ=ç_¨iWx0\0Œ•0‰Õ‚v!(œ‡oĞ@…\r£5Ú€!‰zÈ!œp‚™B²šÛ™^½%zŠéÉc†2Áß¿éğ*¬­ÈR¸rº&®øâ¹sŒ`$ ºdøÁAÜâGÄ}ñHğ¬h…Çbt\0ß†óÕgß5HìÇaäxÿØŒ> ãÁ#»É@y\0Ï‹âCJD€ŠûşØ¯:i¤¡FÿlãOñ¬b,DEL`-ËĞw}¼W€èÏÀc4òBIA‰¾\0È Q€	$I@œ1ô=û¦!AYG&@\0T•éLW(È‚¨‰n2_STÔ)1y\nÕ$6(¨êšA¢ÊF…B”ğ›ajÜæ67ü\0?p´€‰È†šØß:ñ	@€3Åp˜V8YÄˆcœ—h«b˜\0€®pXO(B¨1ĞGÉr–7B‡\'A\nE0@Î6§:eÕÁò ÿB\Zú`É¥+@µ;Éş÷°˜ÀWèk	6/‹ÏGFèÀ|\\`2zd&ºXOà2=q@($°ø}.ñ\neVp¡\n%#d ™÷T)€,¨ğƒæ—•\'pÀb\n	eÌâU3?ü9KÔc’:ÂL‚cÁX±X=a/| F˜æ&5‡Ì`%,ÑÁ\Zæ 3ˆº€8Ç9\ZÍ•\Z\'`ÈÂvvMœ‹À\0$.ªOQÂ6€@HğC ¨À7Ã!(«X$‘‰M(0¤sŒLD;^0Š§f\0\0z@ç%<¸`EˆÏÖQkt	ÚøWÿÑ™ë\\w\\wç’é!-IÉ‰B¼CÆ„éøW\ZLĞÑ@2G¢Üİ¯ÆÁKJ@\0ÂöJ\0ªê2^EØ˜ø<vJ5”¹Ä*ô€\0R\0L8€JB†[†ò­oÍ†°¡³H Z~hË(°à›35Ğ\\Ôl\Zc@Ø85mNT>åÁKTÆ2ZĞL¥‘Î$Á—½€Áˆt-„›©T¡6Ó6-X&W¨ğ¾\"ü\\2‡H¸X49\nÍ­nwá¸#<Œ/%ƒ¹,w¬v´£î©\\°!Gâ	CHcÎÈc\\kŒ ?òjH‰®\0İ‘”3€Ã– —ÿUûr%‘OORJì@µVê¥p$Ì pÅ¥¯T´‚\"hOå\0$€øùÊW%Èj‚y‡“ì$§\\ÆÊ×+¤FjÜÉ‚o -ğhd†k(æ8 # Á]5Â¡ñ\0inrÓ_³‚Ã‚-1Ğ¤ƒ:y\"ƒ%¸ÛÕ«…ÈrV†•BÔe“ Y€N.Ô!’Ò¢ÆRn{„[s5Éˆ	OYƒÊô7à°@„a…@GĞƒîöÍ	eh„;<á\nw¸C9&€-nns\'E\0F°¡\"¬Ç£ 5€\"[‡w 4øI7Lp’}ˆvúXZ Ç;ÿÜòÀgÍX¼€W3ŸŒÉ¢Oòê¨_²2—¾JØRı\"€ \0¸G°²\njP3x”&!W=†‘	ƒšª¼¾0YÍ`VÀ\0\Z0@øàì\",ØªVeŸXŠpâ\r xÀzÓ½°ƒ¡Õ¢ƒÄ€ÆÍ$Lbó¤\'«Y‚È„º”gG+Ntj9×ÀBIµíÊG¾ò–[“	¼}ùTw\n{ó·ÙÎ¢ˆ´Ê8+Üç3Îq<F úP,˜ ÷ñ\"6P°,\0l\Z!¢Ø\0ò¸†IûÃ&\0 \0€`^J¹É=\0\0€§Y4‡ñ:Ä Œ5D°ĞnŸfdÿ­‡Š ‘eÈZ”(üÕˆcä]TW°4&¸éÖ>ğ@\"0lÕ½Øù5¯Y–à#h¡;Q{\ZÌ`‚4î¿ş5Öc‚?¨cLøo8Ğ+¾˜D¤Õ\nÊÕ@ÂÆn‚QE‹ï¤˜z[\r?ĞB×VÿÙJm¶ktãšÛ,KE,âP6xÛf¨ú<â2³‘L\':¡›İô†«š­èW!cVĞª ÷¸ôseº\Z±=åZÁ´ÿ€#`®[İª@\0Ğ‡\r!~¸@T?ˆC\0@Â;»­\0ZÈ—¹&\'Üş“>XÅk¢T^\na2YåSbuáKıñÿsA°<vVaå0?¥ö\0@P=Ô““`\n/ñı€u·3wg%vcLÇ·d\0Z\0\rc\0\"ètM7‹G0G áòs¿ånãö©€y‘n¡ç&Jó\0{\0X/Õ€\'¤B*\Zt	–a°×Y\\sp°YãÄ¦!Njó5dó¹)q°†…n\0*^Æ7·¡O¤€|¦À*58EÔ\nm6}~¨8t €Oa\0¤$;“ãK@Ú \r(5ã÷g\00<)Ñ\0w0İÆ?^t]CğR LÀ1³“¦ø\0øs ¶K·4vJQm@E¥„!¦A u,Uÿ>d·w67a1A/=!ØDv6ç0½˜ŒAÀuÄ¶(xíæ3 È8½ØŠÀ\0	d.	£M¸‚Ö½˜F(€Z Iâ@yXp&1&J3ë¶Uçd.lr¨Rz¡(˜…°‡d’5N–¥NdH#4\ZŒ2kSe3äB.”Cœ`a»Af§`fg¶\niÆ‡yDÑ÷‡·â\00fP*£2E’ +@<Xk#G\0#·W \0ìP$9€r.Àu¶à\0=)¸Ğ“ÊÂr‰ø‰P’ÀÜS0%MXpËètç †K±”0¾ÿ€!´øÿ#Ğ€RPiÎxØ‘8J,˜ŒÕh &àXùV	x1`wıàŒ2$S€ygsìóu¬¤v¼˜ŒÉØ3ÿpsôsã\"d Ù§„JónÍDl¬ÁRˆAVx…¤…™Áè”şBşv6@4@‰’(Š )lÈBÕ¥\0·vXf¨pfHP{xœµ\"’¸â\0s0€v`4àA‘poL@LP\0‰H’Ğqb>Gw€V$VTh@Óè.\0DĞLÉ’$¹[Póé\0ò)Ÿb`tà\05Ğpä\0‘£}DGtGg[çtµ¶%[©ÿZ©†y\"í¥/ÃõÉç÷Œî\'JVtÙ‹vY—ZP—$J¢	R#èW%‡––Æ^ş` Ê¡1àlti—Ê˜8j—%ğ€=J\0Ò;ÒØñ\'hMòX3@L(ïÖ4+™±#\\²ÀpAQSšAvz¨9Z(„£‘B\nÀ\rĞ\0\\0\Z!›³6ònŠN\'PCpÈ	cò	Ÿ\0[¾á§À&y¸fÈ9!©œÀ@”€èD	Ğ2°¨2 5‰š\0€’\0•z7à:É”Ëá\0#‘$3 ;S\n2Í ¢1Šî)C`ª%9C0,I[ t ‰È?™ä~E€ÿiĞsh±S bTŒ$áXkíÒiö L‡1À^cw]E0ü‰É’,C°xjÉ¬!\0Õğ¡Üú?ÜÚ­ğA¢Ze!æ—ø€®ûb%Ağ?4Ø®á\Z®Ş:¢óJg¡£î×jXP€ª\0\0ó3Ğ£Qê|J\'nBXîF³Bã6\n¤©\'› (	\0\'Ğoˆ’±96T ›£q²	\r \r ´9›wBOÛ¤C¦r\'>ÄO@4*\0\ZI[E„Ç¨‚ÊD‰ëC/$\\Ã¨c0’´(¡’ î¹tÀ3€h€Ã²å™@\r¸¯(—\\H ÿf`*ƒ8€QÉ\"(§E°â`\0iĞ®‘8ûgˆÍğà1½(\0îêlZR¾˜FÉ0jì˜w5ñsà\ZTâGaiø0Ha¥wYµƒÕˆŒ;RFığ`¾Ú¹{J±%ñ\Z¯ï\Z®u	ÌhJG1ĞôÑ\Z€B<`E°à„5:Ö—îöô˜Çg\'TXoûB²Ço`ª\0±©¼có±e#7P²0à¦`£\0°†ZÀ\Z¨5	€‚7{S|d‚|¾q‡BÔ§Y8:[D<Û³¸ğ³A; D¿\\S¿H{´*	¢¿UCuÀªÁà\0\0àh@\0^pEå™V”ÿ}D7ˆ‡m5**NW¹¾B\0t·L .À\\Ñ²y›‡gj.F•·6Gâ%€& ¼Ó.ÆÂÑa‡{J¨Ø ^i`v(øŒy¤¢1Q!ïöne¥Â¢³}Ù™Ëüğ—ùÀa0ÂX`u?5siñ¸\"€Okk•vXƒñÃñ8A\nÛ»ÏÁq¥ˆ1|‹ÁM\0y¼é™¢\0ŒRB…0›x\\º7\ZºE¦²	°Á¤Ò	·*1ëO\'8¨LÅ¹\n¯‚œÍ·¾ì[Eöğ+¿cpòK´ó‹ğ‹´’0û›¿~ò\'› L@‰¿à\0#`1XUv$ÿ K|Š¾ûŠ~1ÊtYbÁÃîædÀtP#p\0uä»â]BJ=à\r\0 uY[ì0ÅšÂƒ›ÂËøÂv¸Í³ˆ(à\0£–ü@>c¹=Ì1¡Îë±¹µÏ!ó`yD;\\E;ùŠ¯=ò#U’¢ÏHl(Xb.ÅşSKÌà¤éöÃ9¦°„Õ—Î`ÆVzğ@ÆMÅûBn“—(x\\B³yÇuü\'´6ŠĞY3ÈöFÈUH|»¡.½ÈŒ¼§®B‘Ü‘È™œ•Ü Ç5œÊŸ¿A¿¦|´K(€¢ÊU8\07@¤:íURDåiy|€h &{&MëšÃû\"ÿMÅLW. ÀU şgT i%jp ŠÜìl|älğ‘wGğe„ÎuWb²JR@JbÅ–¶Ä±“G-jŠdÀ¹V|ØÍ°Øñ\\ }ùØ´˜·Œ­éÜÃû2Ïğ¬×ÓŠ8œq`kÄ‘»¾Ë&ÁÁOŠ!\0•°AYˆÑH6BËÇÇsLÒ‡*CmpÁÇ›+]|bÆOÁ¹§¬|Æ‰¾E4É9í³\Z ñ»ÉŸüÉš¥YC}´E\r(FÊ„<\0@½0<˜µâ]ÕUgu+;Q*\\¨Î\0X“3:\0pÌ#Ğ&`;h€gÛg.årh=Ó¬Í&À\rËh[‚ÍİÌÍy—ÿ¹§¨Ä\'øE\0LìĞ¤ä¬ó\\;ãÀÄ“Ø2Ùúğn€á‘í¹-JÏ¦HØù\02½á€GÑX\"»yå]³’»Î»÷Ğ|€\n4/@*8´A¨g¼&sŒÇ´(6àod(CtÃ\Zúk	©ìeÃw‘È\'¾Ã*Ãy4yhÓ¾‡“Üºà\0vàÓ£ìÓ)¿gN´ÔmÔH½¦Üæ|\"|˜´s`±VˆŠí©Sšçƒ];‡Ø\"ŞÌŞ%MO\0R€óm\0ø°R©ŞPşİ.sÍ\rÂ\ZEËhéCg,l10ÜU9|¡ˆ@ÕëŒ0\\i.ÏÎ‘İêÎZâ\Zâ$ÿâNá®á…]Øˆ­Ä\0f@f\0ãalÄJÃ”»;Æ4KY ±ŒÕÆõ‹Û›1Ç-²Y{LÖ6ÉqC9\0İë½¦ÒC¿MnuÑ*zÑÈ®2HÓ‘°âå¸æ¸€ªWæĞ]ÑïÒ½æcàonÔHç±	N\'#àİCYÂÊƒ4|gñ¿}ŸßzñÏ}…>ˆn: sŞ\"\\~àÈÌ§»ŒÜ0–î0|”Fp t	HJ÷Î~ÀŸ0ß(pë.â+è‚Îó@¯âÅÎó.Ø\rÏN;G<>˜æğ—ŠÔ39fÄ6.–ònª0*Ÿ\"ÿ	©í•¯o`íw)Ñ`ïB	DÈÃ7¹b\nÿt¥¦\0ÃÙÈæ{¾ED8´BÉ\"Ù \"p´‡/Ôâ”L&N\"æ‡_ÔÔín^Ô	ğI\rN@*/ğüê\0f 0,r|€‰âúÃ‚ä]»µKÕä]Õâ©}\0@W} p`.3€Õ÷­gz†Nbúi\0|4®t)„È˜U˜w<âáC¼¹•ö\0p \rgdîĞFßê=ÿòİ¿Øß_ ?èAÏóãïıá/ş²s&fb@¶òn{ÄUÇMè|Æõv7X?9?Z??\'\'‰\'ÿ‘\n““Z\'ZŠ\"‰‹†n9£9%¨ªSYa$±±@µ<µ:<:¹¼,,|¾,ÂÄ{Å1Ê<ÎÏĞÑÒÓÔÕÖÒT 2c\"İ\"\"œäåäIIâŞccíîíc	ó		öN«Lv8LP¤ˆ\"GøÙƒg™‡#>Ä#Q¢ÃO’YÁ±£G>á8¨0BŠ‘;x®ÜY¹âNÇ+ a$H	lê\'§	&Š˜à	\'ˆP+<YºÏ§àÁóÀ“Pau*U©`©zëUªX±M™ªeêÔéÚ·iáº…K—)™¥1Ú}ñ‰ÿŸ\"C²š©@ÀÏ“1¦Æˆº8ªÒ\'Q#\0É\0ªS%îÚ\\HË!G<4­ÀÃ$Ñ(:”\0‘\"Cƒ*1ûTªåEX$TWA«ÖºtùZkù°`Ë¢Kov­ºõëÕ†¤‘Á{7 Ö©3w!:qŞÉ{Go=zîîm˜¿OÕ‹-&TÑA¢DP|¸ÄÑFmd !èÑ‚\nvD R\08PGR¸\0Ó€>H@4Ù\0\0L|(\"$’¨a‚	HE•VX]9FV%ğX]8æˆ×]{éøV[?)äSD¹Vi‘å•_8@\nƒÖb_9Öÿ{LÀ@\0¬rÙ=9`Ğ™\'(â9¢]\Z‘x‡¡‘S&(‰’@?Èm£tQÂŸ©°@+/@À€,±0Pœ-¶ôÂ:ÌsĞ\r£ÌÊP‡İ¦œZSA]ŒáwÜxã‘3:â¨çª{îÅ«>ğãC¡P…\n À+ì°Ä;Ç&‹ì²3$ÛìwğÀHT0„h1\ZÜ^áíhÌ€‡LD!\0iáÂº.á®\"Æ@MB	\0Ó\\<®5ÕuĞ8„=æ8àÀ.hğÁ\'|‘ÁŒ0ÂêõÖCLùÁÁR@Y~$fåÇŒ±À\0ÿe•Y6ÀŸ	Œ‚H!b:Z©©Ij^Pši”ÌLEš€ƒˆä)Û\'£‚ÊnSğ†+	a0pè,ÆÙr‹r¾èà\\1Ğ)c©tÌtêõ×ÎAE2tj¨Ü¼Şt3«ªr’;ë©Ÿ<øÜ“À\08QŸ@\0Á®ş!ÄÇá+±”øâŒ+ŞRKŞ®à’_Á‡å”xG¶OñGDláBRwİ5WC~ºL°Ëî»ğº+/Š*š À\n~€l¥[QU€q£[KN•¤ãÅÔE|MÜ<_+¿céÍcDñõ¥ç› !“CQí†5¦;–@ŒL™—fæÿf†œÉ¦šlŠ¦ÀÎPqÃ$T\00³ip²è$?ÙÆh©Ô re(Á\nÄ1Î-s«=ê‚ËÑš0¶Æµeh\nl ´F1†³ÑãlïÕ«Ö±ªu¸ª=°ŠÇ|êùĞ\n·Ê	ğğaa\Z)P*‘,bòàğ‡ÀŒ„\0Éò·Ğp…\\@‚\\»ØÍ®\':Šíî;İå#0™¤€üÁJ¼ÒîÌ2–§P…-ÄSË\\Ö’¯ç%o)S\" ¼AŞE/)¤ôø(Hè¥nCÀ:@>O2€Àú`²l ­ß!´°¦H¼I7ãßÿÌî§€7(€oJÍ\'a§dFÜ\ro”&8ÎÀœ@q&ˆœãøƒ’*Æ\n:†ğ™Ôè\0¨î4Ãùta>5Œ‡«ÂqN´êUmcz´™7½éÃV…jA8`\0a@Ö³˜õ¬y:«øÌg>ïR:8ÃÂˆ@u`¯sW*@„†á u]»`¢Å&A)‚FPxÔ£mg„À\'…?àc¹+£cÊÈRµt¥ç«JLQ:ÓšÚdUÚ]êèĞÆÔ@Jç{fà´õ™Œoöˆ\r(4q‚8•7kÓ#b¦&7IfeZÄf@ù\'Sí•IÚZÿáŠ^’\0±ˆš0…9ƒã<Š‘šT14¸Lf:šx}†4åsM\'ô­o~µ¡_ï1¶…Ãm¯J¬<â‘\0\'°\'7¼OĞ+„è@rAt	ãZ-Ê}ë³+á\Z·‚È™#\0Àš8)¸Öµ×Ø€•Úv€¶¸Íílw‹„:ôv¶x­mk[-\"Àö\0èçppà£}®t§ëÜæZ—GÈ.¶K€#l(V>½ÅƒÏ–v{vÙôìh¼;~%§7ŠÅCÔ UñƒJ©ôea“˜qŸÊ\n\ZG”†ü»Ùh@S?7²L!Å=<y\n\\&°IëM/ŸFÿÔ‚ÀœÚ–ƒÁ¸^Í+à`ïšWh: \r¼æ|œ@ã\ZûµÆµGbéöo€\"±0lOŞfŒÃ\0´€JBø€\0‹»àİnv\0^ïV™»V¯–Ãûä`AQ\0Ûk¥0Œ‘y­3šË\\æ-¸ùÍp†3$×LçäÚÙ[Às™õ<çäÁIL.m!ùgğ%7Ï‡æ3¡ÉìZ:tÀÑ¶m&½PT@@\n\nQ„®Ë]LQEG\0•¨D9¹hƒ`\0›\0(°^‘ƒBk\Z#)va\Zƒ\\¤oK•¹ÌŸ@¹™•g¥Y%\rh`U)¢°D\0e3a¯rÿ’“¬ÈÂÄºa<í—À&.tIxƒĞY&êJH¶øİÈ½@e¶\ZÒØø,`C «\'œŠí·|àáÀ©“‡îä Ën¤xnGA:qèrÔâÑå(˜ğ9¬¸6¸Ãİ­o+P­İV \'÷­o%=Û…N\Zå(ïmÌyKóİŞ+½íÀP~òàJzkMhBçùÏˆ¾ó?áÍtìØ’s€\n°PÆdè@˜#¶°C9M¬	VÀ²ÇN*¸R4p2U(\ná†´]?°¥\'¥\nNö†P¯`\0pdnaŠ»‚À0q29øv3sMÇ«nà&78”ÿ5¬\0ë¶°ì!ì¿äÇâÃoøÆO\0lw\'!ºÙõhs»{zt·£Øu.v/û‹{”ºAèÀB«¥™¨z\'À?OlR”âŸúø%²(òM-¯¡¢.(î¥+}iK‹ÁÒÖ×ôB¯¿Ğî{¿û<ùÊY.òßŸæ¶•BmÕOõ³_ı 4VMÿG7úşío4Úé˜a¶f`5Ğó\0ÉàéZ‡T´1J\Zm\"v7@vËF­„Jà2à  \nzCa„mº¤K‚ã\nÿ¥CNLŠ2L»`5VóævnË€b\\ƒ)ÉÀb‰×)`	Z çIôA+>€ÿCù†cöM:&põ0N¯2dDv+-pÿádÇQ\ZÅÛõ\\\Zw{Øµz\r§k·7e]ÈpÏ%º§°–×†7qµQpèptX‡vx‡vø\\­Ó..\0Q}Èi\rµiØWišVˆšF×‡ˆ(p}šÆˆÕG‹‰‰›æP–¨}Ó×ˆ‘Èˆ××‰‹¨ˆ›8‰šˆ‰‘˜i›¨}P’s`Z3$ €uÇ7îcl¥Ô&’ ?4Ğ\08	`U¥\'§t¢`\n†mIƒ4»ñ½ñ_¼a(N“‚gb»0ÍƒƒÇLÑax™’ƒÏô/9 \n³qœÄDˆo•Gc9fCØ+uóÿ3t‰eC\"xp&p@°pª7eî´îD\0\rçzGP{å]©²§z€ğÙp ]·×†9‘iqZH‘™]AÀDĞ%ˆİ\'‰˜–iX}•h‰–(”xˆ5‰(9›æ‘I8€’‚èP5Y““\r¥“}ĞP?9A)”¹i5iˆ¦hˆ…xr«XWWlug\n)sd’\Z’`\ZfG7°•\r°•8	o\0\'¦A? \Z0sn w¸d¬°mƒ²m½A‚ÎøŒ F-¨ÍÁ>)ÎÄ b)ÆÌÄˆÇ!¤ícª`ŒÙ˜Eˆ7VCNî8Cœ‡ÿ©\0…™„h€ÍÕ…ÙU]«\0U0\0‡]¬wz`8İÕ]\rWf@iĞA@\0^À¹éÍ•›½{Îå›º{Sf]¿¹›Ã9œÈœàÍœªi@r$gs’–r2ç}Ú\'~”ö}!™”8`”499Iã‰ByPè‰PvÀ}¸.ì‰På‘ä™è‰?‰ï©D)Šß™i`tP«ØŠ¯¸J^\'KV‰lo •\\™¸l`iU¢–\'Ğ	‡P¦\nSĞ–\nt\ZæŒÖwÆq—TSæ6ƒÄA†)†Bp]…m84>€£8ú·Ò>:„µrÿcê8cî oÕB¦71toøQ,°+ày…0zZ€2àPlµaP¢¹QÉQLà;f€¯öj?¡¦iÚ¦?±¦+§r:§+¢Q…‡¶WqE\0Ep.îâ‘}€?Ùª”(…Õ{¿u[»€ƒQÈsà7›³9i“:›\Z~ßgi\0š”.s’\n©–z©Ÿê}¢úr\'w©ƒa\0°‚V/lRÙ\Z‰P&_m÷ÃlÊ•ÊlW•\Z«‘	óF\n{2«¬Û&¢Íh(MãŒÄñwã¶Tsb~‰5\\SW)Æ5£2Š9€@¬àm°£9Ú£mÀ£Cxÿ)X9æX~5ñZXıæ…CmĞ»Àd§ç\\\'3\nnĞ3åÁ*,´` `°¡%P%š¥k§Ç“:í\"ğÒ|Uj\Z‹\"¤†±KjÌ§|ËwjA€]?a\0„ª±\"bjÂ:\"jF.\\”¬#Q¬£.ïÉ.ê¹iF“(pPí™“‡úPˆªiF{¨,	“=)´ˆ¨;Y‰C4ÙPàğ\0» °ˆ\0³Hk3ÈfbGdwvk¢\0J9°¤Ğ>t§\nºtŒ ¢æ4ÑnÅA­*Ê—çf)*¦Ú0ê­ ä\0p@ãú>ê£÷á¸k«`ÿyB\n¯ïªc˜÷?À6îÁF¦ÀÎUn rcè°ºæáMë	°1\0YÀzİÅQi ©CK[\0p´&½K§µ¼tÊ¦kÚ¦mÊj­–¼È«¦Y`\0ç2/ÑLP³L\0pi½7à„Š½\0 i€kàáû!iğ½ÑËäÛ‚Ğ‡LpğÛ:á¿ñë¾8q¾úy¾¥Æ8\"Ñ\00¹½\"Â¾\" â½î«À\0 ³\0`PÒFÀ\\ëŠ³j\rèuhUiKvaw\Z0\nrG™q@·\0Z2ºt‚‚ãmOÃ·@0AÔH5ÂP­×8¸„»˜²ÿ5İŠ¸`3£ŠÙ¸›®‘-P®<Z¹AjcFøñ\nïÑmÃ\Z`*À1ŸQ¬»ºåÁ¬Æ`\\°Ÿ€%€\0Z¸QL€»(àS%›qmèœgÇ™Çz¬z3;&0/ Qa@¨H`€\0P¾8P€¨€. kA°4I½¶#©ŸĞp Ò:LÀ\"póò!í$¾èkA7\0/!2i\"İ\0& ¾8›i \"èÒŞ;ÊA€.ºŒ½Á¬Ë.¾} #Àb\0©LÀP@\0‹\'JÇ†`f‡‹4ğT0vfG	m‚UÔT¶dKÄ(·FÓÿn9‚¼ñ_Ms(FÃ-xÃû‚‚û\Z„ØˆƒBl\0\0{’¬9ê¸KÜp¯>Š£ëZyCÅ7æXê¨7ULÜwœôU S€å\"\0Òa¼ºl`b<7\"\rÒ+Zµ\'XÈ\00©D0s`x¼Ç8Óé\\TÁì½€\0%WLp1Ğm„H°Šª#¨Y±suP\'åAP¾3u†1¾JÍ¸3…ì\Z <@\0H@¨k`U!„ªø€Ñ—BÍi {5`‹ÁH }P Éì3<`ĞğÌP¦pœÿ*ğ\0L£m—‘V?üó Ë6\00v\rÎq\03LõvqgÎ²˜Âr—ÎÊÂwËKaà\nz{VX·(VSA½°¢÷l¸s¥ÏZı6Ÿ(«0‘kĞí¸J¬NÛÆĞåÈÒûFNKHXZõ}C®°#Íº&\rŞ«+\"MŞ!-q°°á\\EğÆYQ( ­éœx|ÓÏeßºq÷ıœÎÕœwÌp\0^…şí›yË¬æb@¾eiÕ2ËÀ¥{»,IHp\0Õ¢\"\n9€ÚAYH@ÓX\0<`\0$Gá\Z \0³Eái0`†¾S\0ğ| ±HPH <X€1Ã8WÿF€;Y}[5 <+Ø8Ç1E X}€Ğ³I.1p –a+­TvËÚi‹`áœ\Zš\0‚€2¸Daö0wâÊÂºeåÎŞFÃ¸İ‚~kr•Ï[c)ˆÚˆ€Ãı5`\'s\n,Ü–½´Ä­ÄUP-0«Ûæ˜ìjc€eCì8{éó€\n]àİäıİjŞIÀß=Ş ÒpÃÒ\0¶ôÆu \0\0`jÉ7²$»|Â|Êk¼j*§Bá»åzìd/xÀ0™iA0à(§{%+½5i-ßF@¨ş‡ÁÜ}Á•ÓH°ÕÒAà™¦Ô\ZàAĞÿÈ}`èD]F0·õ!ƒÁèÒ8\0\0P\0pÉ5ÀD]º<[Fàê\Z ¾PLğ×?ÕÂ¾ı’àî\0]ü&ƒå…Ğ ÷“•Ûü ßñ\0TÚq 	¦â¶7¶QŒâš@ìÜKYğŒğÌ·kÅ¹v.¸ZS¸ÇÏè–Ãî5ğ`K4t{·øÑJÜÜGV¹çº®¶Ñ9&N04@q&ãQŞè`&\rê\\ \\ ê\\`Ò¢Òç}*Mé\r¢p»ÕòØ\\Q^Ä±[÷ëEëE±ÓE°3/ğr›ìD>~@\0}€Ÿ(Púe\0s\0‰u°Š<àtàÿê/îYdÈ$¹ç;L@u+Ó•&Ô3 ÔÕ\"IA\0Pr\0‡O9s=[(`dÀ¹7›8 \0O È“äª‰}Mf<°Eà;  T\0@[…ÌxÀDÀûPºGÉo2`\"&¤$“€¶Ëæño a‰U$l*ÔVmEsmél£E¢0ó­´€ÉQÃ»pL\'†Ïs5Ú:ƒ½\r,ƒ3†‡ˆ‰Š‹Œ‹C99%•S/›-$-U-›/m/S>>ªN®N±²N	c	¸c¾?\"\"IIÂÃÃIlÉ\\IÇjj\\l\\Ğ\\ÌÈÈÂÇÇÄÿ`ZBfb(fpEéEëííêïòóôõò&øùúüı&8`9\0&}\\ôéƒ‚Ã‘\nR†t¨à‹€şH©ÀaE†H	ò`\0‰Hpğ3ÃE\r3(8>áĞ§B\0øá€I‡†~ü¨?‚Ğ©S§¢Ÿ\0:ÔA\"A\'–f²š* ¦M,A] ‰™&†,6CTbb\"Î:0\rP\"AZ(èõ ÀÃ\Z€¿ù;ØoœÃ\'Ÿpó£ñ¤Jl˜;W.&Ëd¢)\0Y>“`@š *€L˜ šÇ×­ñ`1[ rÛ´B·ïA¸sÇÿÍbÂ£ãÈ“wÆM‘J•d Ë&O-BeUªT+¯`ÍªUò­1?Ğ£Çì˜°÷×†M³ÁÅ†üg\\¢P£Ûµ8xBh`ÆMCÀÁ\04È`:^<(a:¦³ …f¨á†:Øà3øÁ@H†<Ì\0@6sHT †OAÀÄD}L$\0>1á‚H€‚(Â)u€ÄXãÄèS\ZA˜AT\Z0ñóSº`B”\Z `\0EHğÓXQ„ipSpôTAŒ}U}Œ‡=ÅSuŒ€B\ZE€À\\ĞåpÂ^$Ê—ƒ5:X¨Wb`0ÿöÃcºHFÙ —Qv	&ÔM\0\'ŸAi§2 Bj§©öÚj@¸Æƒ³gÛ ¾åÊÛoº\rG!Ê+¬rHha	&%ÀÁt¤n§\n$”Á&«TË¹Ø’‹.?È\0Æ{ğÅ—„}IDC3ë>Í~ç\"ã24Ç\r8ÔBqÄ‚Fğ‡zA°Cü¡‡\0?80ƒ\r?,€Ás@\0an	Àá£}˜p±HÔÑÁGD`€Jp a†8ñ@WYÁ$À\nÜ4Q&ğ@‹p\0fÔq &!†MHh %Ü´$UYhÁ¢O\0J+ÿ‰Â@c\ZXôìSLA`\02‚9@\0]uJ¤Šò¥€…ùõF¤\0N¥9Èƒ.·LVfœ^¶g½Pj¦’Æ\0	¦±ÊÚ´Êªm´\'¯ÄEĞ›n«§n«p,\01ìì´/BU	T@%ÔQg8«B¡0ğ™)/¨2Åe¯Ä’­-ĞÛ¢K	È n0ÃÄa.2lØĞ=}Ğ€_5ï¦KŸ\rèÇ‹®I(@\nPPÉ:\rFL!ÿ{?;\Z6ñÿ÷{Ãêçb\Z\0\0J`-\0 vHƒp€œ¨­]Š‰—F0¸ \r.P”$\0?¬ \rR0ÿƒrâĞ‰	(0ÀZx¥!(B‹à0CÌÁÈÂS‚P\0t\0\0Jğ	n0–\n@	ÈÄ0‚\ZÄEhb€à‡\'\0@}Ú±P:ŒvĞBP‰¸{ã‹¢•¨Ã1\'¨Tc.õ˜ÈDfSûÔ%43*ê¼ 4¥*Õæ8¸êU´z\réfcºàì¦W¾YAp~…+K«v ¬]â0—ê¬±Ó1¤å²#\nÎ¢Tm8E*¾Ó<l‘§qÑK@À0.í‘«×°Ø¾iÔ‡|ĞĞO5–Ij¤Ï>6xƒ\r¨à	PÀ%P‡	Š\0b\0\0\0ÿà@N8\0 èL\'›à€Nôcîä‡>\0b€wàXÈ&ÀşÅÏ\0AdËfIätÅ’™P\"°€\0í”€V”4¤Áˆ\ZX‰Öà£>0a3À`p &L@\0fP“9˜µ¨ ‚\nLPƒäha¨‚@±¬A1Â¼t\0\0…Àà´0&AM8H\rL0(]äÅ\ZŒ¼\\ ^+N\0Ö<¾1]˜õê½8N‚”\\f¬“…Ş…&ˆ\\$#W:Ğñà¯ £Õè:i+Kb2“¹iİ&s»P:vvRèƒ80…ĞìnYÕ\r\"UÀÿJh]îŞaŞ hAÚ[0Î»†jUKy5#ĞTƒ\rd».ò1s¶0x†÷êÓ>ô¡ïo[í†*ñ‚EÆJ+¸€O,üuW¸Âbğ€é>á	+Hî	Àİír·»ÁwÿÉÜı“€›°àH,¬÷¸3˜Õ¬& ”W\0&\0\r¤¦””1ˆAğ€¸º1XÄ‹…?xHpuã»\Z@ÀÂÁë¨ƒ\0¯Q‡.k@\0–%€6L!&ø	J …\0´`:x…À\0Š…@\0%`€²ğ:(Àn8”GƒÁh¬Á¡òÈK0,æ¬]H«.%ãGBÿmêS’ãŒ¨JaWD~F¯d•jt°\ZyVƒíä­.Éæ^iòV©ƒ³ìKgå8 \0(Aï…»Şy$PÁæ0—ÈiqFrØr«-j!½(Gùzª×j±×dø–?ÃX`À…TÃÓ\r@mm €ó·JÃ\0^ ‡*ä!{0uLë%(3Äuu}à<adàÃ_ù ìX±@ØåÍ‚ÕûØÄÀ˜­Éba4±$àÿj \0A`@b=ëZßúÖ»>wÈ½‡Wç¡\nzP¼[@ïYfBTƒúÔ¡/1HLL.™ƒ(^ı€\0çA	ÂT°Ñÿ\rn°c£â`äIQŠ—2pCÆ/…µfÊ’ÑT’å),gâ2Z€&²0…Ëx,M#OóªÀÊÚ¾ªäéÆÍØÛÖçƒàÃœëLôåPEÄÔY`Ÿ=C\0à]Øx.ô&R±<~3:zÖ¥õš<.Iw}Ò¯Í´|.À[.(@\r®Ğ…úØ§/¥uû.p` ğ(ëXçAÖ€pÁ_ëŞÀÎ²5™Ü¿æ†ªS¯a2˜0ëÍƒVÕ¸ÀÁP`ÜÄºÖå>|Á#àny\"m‹iÀo$91z¹æºz-üÀ«HÎı¡&A‰UëáÕ­ÿn‰ù\\‚.”\0âZ ¸¢cG<æ±1¼ñ\'±çƒÜ”ù£§²\\õP…ª®‡T¤Ó5Gš™?ò5fN³Î«+LÖW½ê|Ñ÷¿œèYT”ágˆda›óĞ	²”\nr~X×}f=â‚q¼¨ZIÖÚ`.¤Æ[èsLÌ`vñ’.õ¡\0J†2€wSĞ-ÀwGxÔx/Hx´†‡ƒ¿ÖÙElWĞØ•]@Ö…ÖƒÖ+Èv\ZÀàk`< k–zª—xom°\nnµìqM‰wT\0?ó…Ô$Gà7hè7z?\'pw|&†7iq‡ñBÿ}|)ßd q“ 8Û—V’á}ä8ùÆ)&\'Wš *£RhŸWÆÓH1÷~}%X9·I†ÅslæIÀ¡IÃAI<À\0ü7Šà\0Àz6bÙc1VhÁS*Ôrh˜h\rˆZ]\02p‹¸ˆ‹º(.¾°Zİ 8ìS/êã[í“õ’>%x‚y§‚UÀwë`ä&xÖ(x«/X`³fƒ·²a¾6]µ†f`×…ˆ`Ó•x@l³GZĞ`Üˆyª×	ÿf‰İÀ>¥F7\0?€A€ğ£	\n €ó7E8o`‘4à>°{°\nİ—`ÿ\'}ƒãuD}—Gm¸}€Xhr Wrq…e*GHÌbHxW¥’¥¡9­â*‚efA×lq¶sšØs·±9W+úGŠN¹¦ˆŠÔ‘MÊ¢;1F\ZN7-Ó‚\nœ±\n³8µèhb9–&cĞc`=v\'Á08ŒØ\rb×ÚĞ\rT€j\"ğ´àĞÈwíƒ÷ßƒ0ƒƒ˜Şèk¹‡a‹i`æx‰¥1°„:0x–z4Hƒ1, °WU¿çUB‘€q7\0\r€š\r\0¨î›î›aø‚\0Aq`VnDqvØ(‚S‡ñUuV¾ĞÿqÁG‹C	oåV2‰e“	6©J™åˆšÃ9“È\Z­²\Z Ãò—”õw:™¸f°£x²A+C÷”îy\07A€\0J7\0G ;\Z¥â	 5u2Ğ‹by–Q¶-QF ê‹ìá–n	ŒIÖ\rIöZ:¡êc0`\n{×wÓxˆù¡ˆ÷¡àh˜#\n˜å†4hx*ÊDXƒaVp+ğ‚x 5¸J@\n`2àUCF\\€š¬™\rĞ\0BP¤HÚš7°ªÙ\0€á¤¥¯IKº¤Tz«Ù\0é>w(œ$)8‘\" tw(`ğaÛ“`)“—¡mšr[f9v£œ“ÿ*›ó“ßé\Z£Ä±lèù†…‰q†‰¡#Xíùˆú ÆRÏ\0÷‰Wuu9ÇS\n\nX˜\Z~dÙ}Û\"²Ğ¶8i)ª¼@ªÁÀ¨ê ·§d\"@ªå\'H¬Ğ$îV\n‚9¢\"Š˜$:˜€i`)Zxæ¢‹)…-J„TÈ ş8\0¸Ğ‰bWºšAZ¤B°G*Q@¤«‰¥I\n®T L›F›všX*¤L\nB`¥1œ28%)cE)‰±œ‰q)º0r‹S	Ñyeråoœ1u£’~:‰•ÀÃ	ëHx\n”fV+CY”{ ”¼gtò5+X¨‹[@ÿ’°ª;<„6u²˜-ÓÙ| Jú²/Û²&ª¢j–¦j¡2`‚v§ZmÈª=k¡? ¯à/ \nÑÈ{´w˜ºÚ´¿ú´ƒé«ğ8n§‡¢ªG`û˜zŞø˜vpa0(9ÀÂ¸Œô‘¤Bp¶FŠ¶; ­àŠ¥MŠ¤TÊ4°i×ê¤ª9·0@N:¥©ù¤¼I¥ò(†ZĞ{`U¦`Ğ2@{úZ	gˆ€$9n\n*Z¶aÒb9rJ€z…mÛ°ğ±¦yåÙs¡ë:ËF:ğ7¢Ø±¬ë\0[R\00Y]&§ˆ²)ëV‰æbªğ»¾Û©Ğƒ–Ú}4‹–8ÿª4Û½°œvç‹ƒ¡DÛÃc«¯¦´RØ«MË\\¢\"j„‚à\Z¥{°k+Ê˜.º¬OñnSP¼WšğÓiœ¦j­;`¤E\Zk»¶IªšàZ¤›¶š®¹¤®	¥y;·á®E6ç\Z¸ïú¼)}xhViõœuAeš‚©‹rvok¹œ°ağr›Ó~Ûi\Z×æ*§AIøÇ:¹²:™ä§éy“$¾¡Èº8Œ Êb7v<Ğ[Iuùæ)Â9œÇ»-›-C¼·–Ür R¬K¹@³¥º8y7½Ô[: ,À¡&º½Oë‚$\nƒI;±‚\0+ì,@]V»™æ‹ÿ¾…÷U\0;:š^Õ[æš[\r€v\r ¿Ú\Zù»¿ü{¿Hê¿w{·z»ã\nÔzÀTê‚!¯R‡²À\'YV*Ùq#÷qÉ~Õ°„´<†4°˜+-ZùŠëHØ†(Ls«qs¡[0,½A½RXŸX¨¯²±9ÌH bu•YrZ©Z¦e®À)9 Z\0q‡V]\0H¿›…g \nÚòÄ¹$=ÜÒÍûŠ¸`³¼`‚ZìoBLoU0J0:°kc¬«İÛkg\\˜±¶²q\ZØ¦Y“ªäk¾ÃÊ˜ìhx10kT=ÂØ\r|>yËªÀ¼„¼¿\r`ÈˆŒÈyÛĞ­Yj¤ö[¤&ÿM¦I­Ô\n?’(òzGgÒ‡[)oˆ#7$¹¬°<2=9š0u‡$§ÙérìgÂ°f?9Ëiæ‰çùf“©ÏÆ‰¼,²2Ë5ÌÁ<zVW^¦•İÁ•^‰.é”à|ÓŒ	¿û»gĞgpzpÍ± ¥=WGZŒv¡ºğ-fÉ8— \nœ@½¦á‰´Ø»´ÈZ˜~M˜²VÏI;¬¡9xÕÁmê* ±¦k)jµ5:–\0ptp§Ñ›†ÑMÊiO:Ñ@ÈXª¿Q@È­™Ùx+L	ÒÀõ…À%M[Š>i_µ7IpM–‡!Âd*ıŒ±87~‰˜Ì™±,7ÿ*•E*°ø	¡u;½ßé*²RË™t¸ál˜t´ALù*¡NÌ!ÕÙi9ÖÑ)§ˆt¡VÜÄ_Í—±¤YÈ\nàñ<ÊÖ·$¼sZ§> 	¢q×‹-”º‘Æ¸\n¬à‚½n‚@f\n[ô‰	>Vr BıÙª‡*ğo¿wM[ªÑs›¤\"^¤4p¿4nÈı;·\n½v§–>©ŒoƒÓ>Ù>€SÛµœÂ¨Û¼ä•Òd§8€H|ÎrV°2­Ì÷F9É~ÇœHÍ\rs;}\Z«\ZXI:pºçºBÔ‚ Ã@wòõ¹,À\0L\0áÌ.@Ÿ¦”a•jÿ©¶»<mŠ7/=×YÈ—g°	±Ô°7K«`KL³/ë²à7m1­ÜaÀ9xÍ§ÁaàõL¾n’né’nà}ç™dvm ±gVF~U–U`¼Ç1ğ?dBã@‰­ˆœ­Q`ëY:ÑÚ\ZÀ¥·—æ[Š¢Œ¯U/Š ‰‚Ğyìˆád\"0``=iEäÒL=Ô3r¤îVw®ˆ™ğßÉLHÕ±e¡å¸~TŞ~ø,ËàÉ@+m6ºØËÃ±leŞy¯ÁYPv°æNM²{Ø­\ZU\rÂLÎsá|Ôœ<Ïç°7u_h„ş²L<Û\"ñËÓ›H›ƒ×õÿ:T+é<—ŸéIò+\0-PÌËâc$û\Z¶‹#eº„w/\0E¹&¬ğ	ğ!y8®\0òK¥ø{¤MÊ­k›·MÈF¯â½ş7Ñt.¤F¡T _õUVŒ®ÊÛçQ¦K&Í<êwşÒËí•‹¹¢R¹¿ÄÚi<p_Â<s(Ì\Zd¥Ãl©£Æ¢‹ƒÍ¶‰‹¡Ó\Z³’@ ïN]Q-©’ºÜè]ÓÊ¬excr¨Ü~No²¤<¬ ZÍ#²0èŸhŠ.ÓÒ’Wuã™Æ—¨@ÇÎƒ`Ï`ì™ƒppf6f7kTÄÉ’7hÚËéÕ~%0ÿJ@]y09Õ%ĞáÛ0ë#ÈªIÚEÊTàĞ0 ¿€Àİ7Æ\ruÙãÁq°Z]\'ÏíQÆ²#ªTöVÿ\Z¹KÌİ1Ä‡”˜“ÿŸq*ù	a$a‡‡†@@‹<<‘:<:|,,,+O›š›¡¡™§,’•@<,fµ¶·¸¹º»¼½¾¿Àº&ÅYÇ//aa/ÎÏÎS/ÒYÏS%İSÒm/áËm-máßS>>ìîİNñòNõõòÜóÜß/Õ <D‚Ä\"GtèÈ”I¡C…,Jœ¨C‰	*T( ¶\rHPbCÿ‰	~`Py¢å	-Áœp#ÃM—<L0Ã…lØ FƒB*måhÑFap\nC\rT50n4À\nƒ\r$I<ˆıIAÄ	\"À 5»íY´jÓÊ˜+ÌÜ.2rtIĞeƒI¿~\0Ş­p¶nˆLé\'ñ3ea ü!ref3d@h`‚X\Z„4CÒL™0]aÁÇT¨š:•r=[U¤V’^e‘¬·ïßÀƒÛ2S‚CÇcÇ”QN-Ú´çÉ¦Nü\rZ¹-ùp¶N]»nì¾Ï¯<¼nŒÿ-HÙPÁƒğ<R©•|Œ÷\'\\¬¯_Eı*m$Y1ÜdSB	ÿ$!˜C0µÓ-•õ„\'Äá¢Ôhy„PO9¥TRLQµTJÑ0o´H\nØğ†@ıÄÖ	2­¥9òèãyåÕEz\r™@`„	–M’Óí“˜béT÷˜@a´™3—Âg$d4È †p†H#4Ú|–HÂ*¤Ğ[£Ìæ	›™äÖÊ°\0ÂõéçŸÀu@rÕd!P2‡*óL5Í%ãQHû\\Sm@€vã¨M:ë´ãÎ:ï|GbPJóÂ?“\rTæ˜•Ù%™±\ZëF]zé¥f™µp(ØdCRÀ2¨RƒgÙ8¡Xo(àAh]Ö³*ÀÆSÿQD!ÄQì°D=åmQà²ÃŒ6°!TXIü„;‚¼‹A]sÅ;¯¼tí¥¯‘H\ZV6½>É7Qb‰eÌ$,eejIk—…àJ«h¢!¤%iª’Énš[)m‚ÌP%<Èg	.\0ªòÊ,ß21Æ@€ÜrÌe*{\0!ÊÌ½îã¢ØÔ‚©á #Ş\Zj§ ¶¥?ÿäl¨!-”ˆÌ†d$ĞÔS¯\nÁf_Ó:ĞØízM7Û XÂºo¡³@‰%–Œ4Æ‘„ŞÌêíÓ•í;¨¸6Äø†P*v[Ô,²øFXy_Ä³i½4o]÷n.Ã»ÿtå0°úªíWIÓüä5ğ“”Êµ§«¥¹Zæ\"ƒÜZFTq~”(´Ê+ÍAk¦À†<k!£²‰*¬,òŠ\0\Zì2Ä-g¯½/hqÄqí-—(sÌ•-H­sàäzX\nb¥uaŒc:H3Şw’\"]?ä³7v![@˜\n1³TÉ.|H1ŠÑ\rnlc$YĞrà.™œå,ª›X €7Ğ€Fv³Ûº‚bo1…pHqÊ¢2”ÅK0ˆBW\"×\"t] o\"`–8G—Ê\0/İ^€¬Á†Iÿzü¡ÆPQ™]eĞÍÂP]zX­xçû	>·ÑÿD2¶&8Ñæx¤àmÖT§’•O:\0-v„:lïx´…$`œ©‰”ñcãW0œ\r$ü€•šA©„ã‘âàÎ7ê§´üÌT‹*_øXŒ­ê8éˆ3\n…³œIæ“Ÿd Àã— Ä•N@!Pà\'!ä \r¨ ,(€rvK‚¹ÀU\Z4€pBÈ\n\r\\Ø8%n…’›Ñän¸7gõM‡r¹‹‘~È¾ôHD,â‘˜Dğ8Íû›B¤Ä(/2[™4R&XA#öô\nâS²û<$\"ac›Ş‚ªñÏKÂ‡8 f°c\'ª=P„\nŸí*ÿÈÈx;*`\0ÏÔ‡¨AÑURGÅ1ıqJ0u©4LÕN(¶Çf6c18ÉÉœ¥ÒÅ\0j*¸˜ö¬$t¥è~ :´Üƒf¡\08¨,%,7ôX>TBpİÀ(L¡¨ğÌÂY2šQX,”78KGiÙ¡Æ°/\"B°tÒ÷‚ $Ñ_ò ş¦Á˜uNA9Sâ(	ª´İIŒû„Õ>3rÏÉ¾*>‘pÄ?5F§LÎƒ“óF–& àéEè€/¤@Šº6{i@rxˆ*Y\n€€ÌÒI €$f2[`Î7+E1’Ú‘©şL\"\nKQH(‘Óºÿ~ ª1@]àz¢¶ÀÖ}£‰gëÙéŠøWnH\' €,Óû’	iª[¥‘T“%.¨Á\\¹QT$£_..,\n¸aİĞµ,·2sqõ!]èj×#%•tâtğ_ıå$Ä<Í9êôß•˜ÁQBT± T³UF&»ÊŸ”…OÅp3	JôyŸm\'>vFÖØ©dy*Á^Ëã»\0£]#nÄ™(Êè\n3FŠÑGQ£uY($ˆ¥8*K¦RrNbR©­Ù¬»ª|]P‹±˜ëvw`nà>4Á”¤›	øœLŞE7™\\@ª·ô¥\rxÙÁtÀ—ö\0`£A“Ğ*båÒE ¬ÿëÑkÁfße—|	Xc°ù¤úË	\0u&%ç’2–I˜@¾$å-¦8#­Ğç#Ñ».ÆÇb•¨CP£	6ÏxuÍ6‘ë~FâdHè±²_‹ƒ>2l UÌ-•¨ÈÛÌ„A\0ªGÀ,\\Cœ¯ŠUšİ9Û\\ç6J9Ù‰¢®¤¶ÀUW»f«n”H…æ]ã0…ñ«_öR^ÑÙ«½t{[£{ÉAø™–1ª[	cäU)kB#4Ë\rqø#™¸KÁxÑëÅiÄ†Â\0Sb©\ZÅ¨­1c¸*u•µw7â{ºÜò‰ù¬ó£0\n/M	hkókÏzB6›àÃ$ú‰\'\0áÿ\0ÀŞ²—G\r˜\0£†`o±Öxb¦¸šñ”0á#6s6•¾ôÑè­QÍA¬¢ºœÀ¡¶Û1ÖÆbĞén‘ß¾*8÷\"ƒ8-jVòœK8«%ˆÑX_B±&î—:¼ZâpÍ%ø^wù!7»¹—{0Kúxêì.©,Š=~LuÂO<\"²1H+fízú8b¹H±Úë_{l6@GhD$q{X˜ \r;fºòï8‡”à32S{\\UéKL#Z¯BE&@‚/ó#£B«\Z‡›Q©dœıÜéÖ¤¥ÖM¾jh·»eRuí}6ÖÑ1û(`\0Î	i^/1ÿgÒ,¶ä^WuKGUé—8cU:dqhWiB’Dtiá4û\'z…!jx÷$%P²(ÒPdU·z‚O¼ó*°‡Yö¡Y­`&‹p– <:§sg´F;˜\nC7E7EP\0ËW„xT \0Ğ5¸U 6„01›¡uş \nÑ}¾\\a3*ÕsnPT)l‡@ÌI£fƒNEõ]’â4\"j®A\ZÒ9ñâ.0¡D|È‡n%th‹gp1ÒKcÑÈ#4¡?ô\Z·}A’hDJâ„Q¡–‰æ‘Nr?—DXìfSCb…YÄ‚1wk÷1ÿ\Z57\Z27Å¦kiÔƒg|fdıd\Z$ \0v`„¾xG8 \0Çp5a²Q}…`Š®rb²¦: 6v†R}ZÂ	3;ºR~Ê!†–’RÙ(nĞ…vÍ5¦ò41E?×Àé0¢‚rN)Q/g/qåÒi/@ñp„g7f#‰è#n\06¡qzgƒQDv–‡™˜Ö)¤V0ƒ35c…aBŠ¸bOï¡Š²×b®hs·‡ƒœåk=èsÉccq“ \0€ğ‹4™=\Z E Ha}µU}St}ZwO°„åm\rƒÅaâÖÊ +Gf)ác0¤Ä(Œrÿ]óãDé@*ßu?ø‡¢æqFó‚WóÂ#8B,/¡9oƒU·ä^Ì¢^gQq>4$?¤quÅq­4‰ Gaÿ2jŞ •êH0æ–(µHœ6‰Ğzy&1XªFüaƒQF*I‹£\n“05¨G “5ù™ÙSÀ6Ãˆ[bÒ0™ÁŒ°7{­°„Ä*Äeu¶ÕHU)‘!EïH±ƒ(Ñ4Õè„•I#rúàØJxE—?4Figğ/nug|øV:²C4aiF²qšÆWŸ·—ŸÖ$#haæ˜eäC©F‹EE*·šº+™$6{Àƒ‹ \ZöÁC§s³hÿ™;ÈÇö%Ã\r| ™ *3v`G0* 3:Y¦Ÿø$”õ±„ßƒÖÈj…¤Rlg%ØÁV¢0–ñ\\Ô›h§Nç%õ£DåÁJÉNÌiiõBiñò9? *1!i	ˆ8Â#¡C$uÙwú¦w|Ù—\"˜f‚Ù¢Z¦Q\n£˜\"†}ùä‘’ƒÒ#ûqküÉŸl$\'´\nÀÖF³¦P3© lª2`ÏYĞ[3&©©˜™]Ô}Æ0[ŞæX‹e¢$Ê…‚zeS(•‡RSr×¢/jNˆéÉ©œœÇz¥M>gRj™£}G$zU$$ñz×qJ’ÿªKr«dwZyaé w™Ô…‚ğ-8Ÿïñz÷d$¶O¿“Š3s#i2ûqd„’;H¦1\n\Zs–P(€ m:­‚P F§É±„´‚\\²õÄ«”µ„}”µ\nY¼“RHY\\ï$¨‰š¢døGĞNúR\\™ó\0†$IuWŞ	C² À\"g0$<*ª„ ¤ãiH¢i«º¤ wJTzç)±“%W7óÔ‚Ø\'®%ö˜û©¥g²Šü1úa	aÚ&ÃFËz‹mÔOòasD­6( & \0à(pÛ:5 f5®×æj|\n´Û:@¸âQëZE%Ú®%ÿmòj(ĞP\rO”Nõƒe¢r%©_™ªü×¯yy$f‰—\0+Á£¡Úw·¡z˜\r ¨!Ø3­ú¤æ†Š‚Rcça³rŠYdbªO0k©	Œ™¸öy²“ {ĞS<!³/û	+ÉÄ×<p ­7û¹}Rf€\0°©´3#}—ñ­¸®_3‡0dç´	#eíj¢\ZE%ºË5}k\rÏ1SĞ1\rîàú$ &Iò•è–øyÆ¯4D”èWùö†£ –¯ø\'±œ¸:èé&%¯º»‚‹Õz”Å«/<®ˆŸû´Ÿ\'kŸ¬‘™²şùY¦@¹¡@¦3¦\nğÁÿ±°¦ ÀÒA@]@\0Yàl‚„ŒÚ*±’úŸ;`’%ª%\Zá®U‡±Z²52ã»²\Z«Éu\"*÷CØ@©bÛ/Õ;N‚q$§\Z‡HDN=C·«T\"¸>FE‘âxRP¹~V+e&ÍÈ«³¦¸«¿Œ‰²#»¸òK °ˆ™Å#¦€¿ğ²ûË1ÈàÉ&À`ì\'s€\0 ŒÈñ=Óå§S…‚\0+*G@„â§ªæm+XÇ:;]8µNø®¼N~¬NXYnó¶÷\n£ø ‰É‡–X·bÛªz½tË½7œÃÇëªMä:æ¦~¢]U\"4#F¥­IƒO|ÄïëšHÿ¬§\\8™*»sÂVÅ•«P.É\0&Pa|Ëâ\0(„†’ÀÂU”Ô(&­‚;nÇ:™ŒNø%-µT¤O9¾««ÇT)5±j†@å¢¤iwŒœ½™Â“z‰ÈJÇ›!\'08|Î]ûnNÄ¨ˆ‚0ñ“RÑmPËrŸœu\'ö˜2g²&#Fôq1ÅZÊïË¥GÜb7H™³Ñ²U¼Ã¶&®F Z¸\\Ñ}28ÀG_¦´Ç±´Ïf§›6ÉÁ»FyÁÄŒ5\ncë‰£ôÒ\0¼›R*ZYÓëÈÍ•Ó:¯ÿRÉ^‰o–¼:†4Ô1È—”aãW˜F6mcÏU€m¬™ÿÏ0WÊº÷Ï¦,ĞªŒÄy1ùÑbÂC™,ë	\n	• ™òqD`Ñjí\'€i`\0Æñ³?›QĞ‡Œ+«B”³µä«_ÃEçÃ›kŒº+¡0](ûƒØéàDŠQÈiw8œÎF¥D’ı—YY]*-ú3Š2¾îª®—nú±°fbXmÕü<¹fƒYİ¸ùq{­]º×Ê®,ÖWtu2À`ËkıÛ¡;Z`qİ§„@V31E»Æ,3Ç¨*ç>‡¹Á±0ì›ıÓ‚l3çIo7İ†‰Á•÷Ê4ßQÈãíªõ×¢ß¥·Õü›Ê¡z×˜+Bƒ×A|b\0¢§í«OÎèÿÏºÅı¸}ÕG¬Ä\\Ú’ş)K<µ}Û	UZòa\0\rÜt@¥\0Äıdº„vz×o,¡3sEìiŒÔQ&Ú0dµØİ»›’3,ªŞ—­?6-0hÂáeÃ;INºŞlxÙŠ1¯{ûÒ4³Hª·š¸r«ø<b:P.\'FNÎÄïk	aà4çßpŸşìš-åÇZÛ-=2ÛÅR0ád.àZ0\0}ú=¨û?>Ì§xS‰°´s>3Q‡”\n&¥9\\!5Íµ/½Nó£Şš=oêX?/ á5I8Ş¨[Ûã$¸Déô4åç»ÎõŞğ- É¬˜èzŠ(æÅ\n.Û)ÿ‹àÕ¯@7Ø¥ññ”pÄÊÚNNÛ’ë\Zm$=ğÅe¾ëÀ!»L ±¡JkÌ*²Bv¸ÇÈHuÓÈÒÖ˜Ìã7µË°¨Ù\r\rŠâÎ0n2^Í3S…ŞâƒuÔšMfinÎen‘Ô+ˆÒ»U¾YÚ-wÕ®nêüİßªåÑb¥¼Ä\'kï	A$ãŸÍæá¼~ğÁá\0R9‰ásmÌuMÁVã0\0D]½uß}‚äQ\\˜‚\ZÕË6eJ‰†İ>èÜnÔ2ı4”²†ôÍ°)RBœüƒNé©v7UØİè>å;ßUŠä•õ±ï;ï(;ïÅªï8¸HÿäIßÄ¯mêKÿğñbÃgX ‹ğX`8vO(@[vJ¡\Z»‚ÁåGÇ­ñÂQ•¨¥(§“7ß·,îS&ÿ»ZÖ¨Ñğò.Ïò?+_Íäó4TijÉğ>ŠJ%ÑOõ-Ä\\ÔEøôN_Õõ.êı™¨mï¤™CoÊHõ›¦•pEÀ\0œõªCP7PTÜv>&Ó…‰`ŠâJ{=u|,mSÃÇštR\'¸N&…a+ÚW²%ÊeÎ¿ü0ŸİVr£ÔÙ†ªØÇxÚ´ökLL¡\0uô£àS>ùUıÏX>¿êP?™Ï¿ŒÀ(ú«ÿ¿àÿ\0€%\0G…YˆYŠŠ‹‹$$‹‰‡‰$‰ˆS‹a–YaŒa¤’©ª§©/’®/ˆ±±Y/SS¶Y¸¶´/²¿¬m¤§-a-±§Ä¿®aÌ·®Ñ±¿ŠÎ½¯Ê¬Ù§¦•$¡à$*ãæà*@éìJ:ï:ñïï,:öòóù<ìüì@â	d^Àÿà„‡à@yôâñ¸G…Å‹\0Â¡Èœ? CŠI²¤É“(Sª\\É²¥Ë—0c’t ¥O	ê¤(#U’\"Mº”iÔ#FGÃô<\nT*POb“FËÚ3`Íœ=Ófì˜2d ^£µ«¯le¹EEÿÛ-T[q•ÊÁUA—.¹ºxÉMPÁP`D}	Ò“ç¯!ÁÃ‚ç	,p£ay†±=‹@4r\0Ğá£ÌÏ C‹MºtJ:˜h14h\'OL©\n…„È‘&¦Hy:ÂJÛØm@•õrÆMVÙQÅ³Á:¹ï§ÚdO¬\Z#TÏ}Ç%aj\\¹¸åÔáİK]v*ş)™àn°{ÆŠæ;¤ğA†ŒİÿsY2;ÉùäCĞD€Ù“œ9`Ú‚6èàƒŸ90Dä@H\0:é”…k¼1Å€#n(bm»1r›ORTFuJ5/BeK4¶ãLvÊˆU	)Æ\0PÁ°…–Qj±Òÿ]%¦°¨$9Ln‡]êìPzè	æzî´÷~òñCØ…yğ=f!ôdúL0=<dvD\Z\nBhçxæiÚt¨FÈ††ü©‰$³$â$D‚ÈNHÙ¶èˆI™ÒH¢*b§T¨HGJV6¢N6áPEWŸ%5/Še#,licÎ[¦Pòİ]{¥cë:UÖª«|îáó^|[6Ä@^â7Ÿ˜í÷_š		{ß¯™QAzVkíµØäÀ(ô@	„p€À…špˆ¢\"Ü±ˆÉn#b[¹ƒ~¢TÙD²œ$áxCÌlÜ\\œ[;†1k“>¶Ë/Pq:2æ”ó](vQÿà©¥xTÒ…•‡QVOA‹qéŸa!C$ì²FÊ$Ÿ©²:¤CdkóÍ8ß9D¤Ä!ƒË!¢>yC¨¼Eñ”ôPK¥2›6ı*9É¿Üì˜/u³“]¥ËÁÛxŠ/8;\\E£ã]:•¨CÆµ¦g+{:\\é×dƒ]F`$Ó§¦€È¼ò:·ìP@l1(P›óãGáÎ}hnkŠxRD‡H	Ò€bh®ÒJ×‹pGB‰éõ†zä]â°;È°X{‘½…‚{¨j3YWO~§ÂyA97Ç$¿så–úÁ}ş¡Éò\ZËÍâèá%w]ä¥Gÿñ\Z¥ƒæ‡x&ùùè§¯M}Ü`ˆ¨kˆ**ï‡“È­\r2©O…Z\nv ±$ÕÅŠ;ù‡ïb	HÈË.[ÛÑ7JU©&1gÜ‘U]>¸§å‘Ò@4F2¾0ïW†Sâ6&&ÉÌÍb·jÈw,FÂÏ{o{ÛF¨¨ï‡@\"H@$hÀ\0E(Aâ÷§ıäs÷k’l#¨Nä¦PCá\\[Z”AîÄ…dQ“¢˜—îHbâH’º¶F0ŠQ/vqXõîR=¹±y¹BŞ_ÌÔ,Ãôge$ ÷l%+ïÔpnåQìâ;íÙe#òÊ 9ÀÇ	ñ’˜<Ÿ‚ÿ: €‹G(Z)\"ñ¶Êƒ.‹jâ#:±¹Y”ˆY¸ß\'àEr0Pzä%ÆE*Rmêú\\\\öÂÀ.:¬{Œ[ÆÔ7ÃÙí<Íò[\nWÖñ½\r \Z‘RxÔ0¶aÌm‹<xÆ!ËûÅòÈ¤:×™>ØªI\"L”…²­ƒÿàĞXƒR\00–¯(¢&¡H[r0‡l!5‚$1ÊQ]dRb¦ŠIÑ†‰Cä“)CA“ ë™&B†E1\ZRÌ›‘ÉaÖ¦È»Ş•ò¤-}Õ8BQÎH€&H\';wÊSÈíÌ\00zâ®Gds‡Ìƒ2³›Ö@êQ˜ (ÿËoXT–x9¨\"YD	†Û;%@t¸jóuq›EÅ#Cm†Ğ¬è9•\"#>µ¾Œ‹Å„YÎ3ŠÓ¹lhMÍI€2Á|=M¬b³Uƒ:H@\0@‹emöÊÁdï]\Z:Qn5‹%’^m^Î	ˆÕ*´`<ŞH3#=<Âô¤7T«ÃhÅHGÚñÚÛaIÇ\n·I²¦fŒU¬àò9®òğ~4­)&kÄ.ö¹ĞÍ“„˜àIAÄ’ª••ËWuˆ”ş½æŠø+Q#~ËAŒ1òéZä€\'Es””{Ødf¸wJ(r†¸:-§”ÃfO<‰‹ŒFŠ÷¼R6áŠçĞâ4ÿ“Â€÷S°‚#ĞÌ fÑÍ°†ñD÷µ]Çb%ØQKVˆD(ŞM%\ZÁpæ…ƒfA­×_)rLzSrÛ2gÑZÏ¾²\"fh‹YÃ\Z25ƒƒCA#,”õDuªàMo8§¨\'Ö…ıĞF8P\r{ùË\ZB\Z’ÙÍM¸¦rãNC´PJö6»	¯,íiæˆsx´a{L&ò”¬´ToxÆ#%…j5­¿m›–yHŞÄØìZ¹ÉTJ¸É±y¥¼A€Id92\0\0˜GMê™Á\0†XŠ&ÂÌ ¸«:àÎ¢\na]+VùM~X‹ÀˆZ¥Ö¾­&5±W<ñ¹ÿ¿Â»%y‡lĞ6JŠ‘¬é^§ˆ×\Z—tÏ¾Mo“¡ì4û½ú~XFPj—Ğ!EÀÂüÀn?<\0X0@È]î;@EØ	xÀ<´»İ1x@XàêYfæmøƒWmÅƒøûßî8¶ÊM:Le3lõ.¯—RE·±¦eõ¦;gi3 ËZæ8ÜFí—¼¥ÂíÆÈA$íÈ`!#E@A½WÂ@üçÇ‚	ê€\0ıèHOzĞEbt¥;½İ+€wLÀ—4ıéXGº	ZR\0aYw7ÁeEóh7uQ@ˆAØîÅˆùR÷ìõ^nùØıîxÏ»Ş÷Îw»{ƒuÿï»à÷Ş„Âá=hïÇ\'¨¤Àşñ·BI¬\0ùÊ^òØªÂñ˜€%¹:çGï,0ôY§äJDz¬o%šo=ÛE\"^ní	²@]ª=Ô–rî9t¼å‡÷ÈKøÄ‡<âkÌRp ?ù–ÇüH(ıäK¿ZpX÷ÏÉP80	Aà\0Ø‘N’ø¼õœÀéÑÿô\"€¾èìÏºéW’} ãá&0A\0°Àí¤Ó	 G\'pÁ—tt”@Õ¦:tñ|Õ÷x_PZ8|÷XÀCEˆ|“‚–\'‚ÖG÷z$dptU7›tÀAğÿ}E t3à}pP-xt\"Qß÷}&0~Z„L\0Àşwthğ~&„A8„JWF…@\0Døsó—(t*øĞÅ\0KøopEJC€@Ç‘(ĞG§ª :ÌaœP\'×zè_Ğƒ÷^ˆ‚È‡}è‡(X ‡zØ‡¨ˆ=@ˆ×UJæˆŠÈˆ‚‡x¸ˆe\0PĞw&8Kğ¤øVğ‰‚g¥¸ŠVpŠ¨¸w¡˜\'LptA€tÀ^H1qà„ 1Iç‹Àzí†ptpp…?7ÂhŒIW*Aç·t)1‹@W‹\'q‹@ÿ?J\0pt<@T³6\0tsE-æJÜÆ4^‰Ø	^`ˆy÷V%@Ğ™HNyv‚×X@%E¶fq1}§IA€aKğŠx‹\'ñ©¨	‹ÕBÌÈnÉ¨]øo_»Øn9ÄØn3PD\0t¶˜tp`‹htĞtt/’Zx\Zé\'‰!ÙnÒ‚ª&„‡P†ì®ád’jøoÀ$â \"U•`´‡ x^@:LFÏ÷\'<é x=Pl{ö6X€{§D‰¤e–ä9™wi[ xÀw9‘Õ’’~@t«q#ùÌXÿ“¡‡t[8AÉn„i8É““É•¹é)!˜‘¹™†95“\0pGâÂM3?ÁÇMAµ1aßa\\‰`¶V„|M€Pfi+ÌW	k)—æM9ô›t•S&A}xÇ|ÙÌywÕ¢”~°’-Œív˜÷\0Ï‚Yz\'Q’~P—$q™\'‘™ÿÖ˜)a*‹ÿ–Ôi,ìv˜!AP§:ª9KÈ®$«ã@úC	QBLk%—q%8´MlÙ³rKc–í•h8q×hà —d\0Î5}yçœ}×—Ğ¢yrŒ@§)¢Y\"yß©¢!QÿG#Á’Œ–‰t6j‹K)ê,ê“&1¤Ryš…0äò”Pùo1\0Z¡õFÎæv¼yœ}×+õAGV	şxw»‰$åÀkÚ;U	ƒN€µr$   –D{Ùœ+ñœ-§Ò™\'‚)Ÿ,A„*úoÜ	£Œ‰%Ù£!£%!5º£.øîÉnİéG§§+Á§&!˜w 0.S0TŞ…š˜à05*—.aÊ›•†Uz¥lÄkäFø¸›v–/¡0¦*l©w‰7E=¶g¾y¥<À\0\0ğ¦#xw[0§#úÑY¬xR?÷¨&qƒìÖ§B	G\'£!”„\n†JßéÿöYÛz-ÙnÙÊ¬ç¬%­àYæúoà\0\0YJš¤ìªSƒ@¸@WµiÍÇ•\n¤$»¦d” |¢JS$°é5dqñğâtm5d–­$ñ—@¢)A§-¡±k\'ˆš.ë\Z&ëôV©Š/záº~)¨¨@‡±&ÑƒãZW²íf­#[Ÿ!á\0İ\"nÀ¹ÀO@\0pª9¶”(\n”?S%/›`»¶iù³•w×b$FfY@®óFû-0+ï¥V½Êw^`³$ñŠ!{Ûl›\'?ënåÇ7Én’j²êG­AŠÕø­ÚÊ£…¹³+±­A\0ÿo*Ú¨Ù:·P·+q·ÕiŒë¸!!LğA\0.>Ñn°Jw	Cñ[¯ÖbÂ•ªKCQˆ(YŒ€±ó\rø¦+F4%«´¶Ùf<%%x¢6y˜—q«o+®¼w×¶2·~€+«ş7&«˜€Z­	´0+¸*Ñ­Ú¨ÛzuÜÚn1)¹IÇ¼-ñ¼‡:¾Í;(\0\0\0€©¢·p…4rF ”EP›¤cˆM°YY€Ÿ£`\rD¡ËU4Å\"‹¥ä¤cPr¶{‡¼ Áœ$ÁœLÃ¢v7ÁÒ­î¸0XŒ\"a²<Œ-{\"ì²Ø›íúoé{½‹ZJÿ\'Ì²I÷\0#»HÃHgÃ§q\0f°‹Tß(\0„Ği¬ëd£D4‚GÄğÄš£¿<\0×•Q…?LÜw^PÀ©cPì²ey¬Ãj{w×ç¶dÁw*™Æ‚Z¨¶Ó›³|»“/ÉnÒ®)Œôùs+ĞÛJŸ‡\noÛ»‚O‡tÌ…‰¼È Á3€P\ZÀ%pá?9Dœ<\0ø§D&\0Ê‚g#€¦¬\0&&à¥ú™J…×â’²ğ›\\¡B°·Šw»9+TVQÁ ñŠ%ñ»p\\ÀüÂ¼¶XÌ\rBÔ™¢,³¹˜Ô›ãg­ûÂy<ÿ³4ûs=J£ ÎŒuŠ\ZãÜÈŸA}àvà v0fĞôLÏ#`õLÏĞo†ÀœPZ ĞuCuŠğ°¦ëFä:÷»îU¶ˆÃÀzçÀK § ÌİÆ8£®O7‡ÌsÙ[Âç™#}£}lrì+€®,­Í2«™2ÒN\'ÒŸÓ8¸ÒëCD`øôüÀüŠP0C@D=Ãi ZÊEğ	\"Â\\ùj‘$(‰OI8À¢ñÕ\Z3çœu+ğyŒÒ ³PÖŞì8:?*nıtg-Ó%Q×Nw×ÕRÁÑ™—C4f`DìëÿÔ‰P› @@ŞÑhÛ$|TeUÁíÑ2!Ù&ú8#@z6Œ×V§ÖŸ³tğÇçÓ(LÓPïù™=z›ı«~h\'Ã\0Ø\'1. %P›®À¤@\0¹|w^0NıGt1¼\Zkwa½Æ ‘Üf9/­t<L\Z1J\ZÛznÏü\0ÑœÍ^ø};Ø“¡İ5|Ã‰zÓm\'©HŠ­(‘vgÛ(1H xG0\r   |g|¿fdEWé­Ş|·Ü|§Š\0¾wç#×¨·Û­Ãx,\ZÈx”ùgé&ÚÇœí¢­\'\ZNz\nî>z!èŞ»‡wâ…˜‰©Ã€×¤C:DÿI (àÕ‡>Üˆzä]½}ëàñçd0tŸ~£Qã¤wã !ä£Gä11â•M‚Ğ_PX‚…Z\\\ra \0:ã¡åèÃÊ‹Œ¡Qİ£Á~PÓìW\Z\\z?És]tkn\ZJä øä?Ñ\r–pË½ô!7` ¡åŸè[Şæ@÷æ]Í:©ˆ«nŒI¹f½}òu?· i>z†~„şs—.ã\r[`ŠzGâ(!x¿ë‰iÄ¬w±&\0\0\Z\0ÔNÆŸ~ŠzÇéyG¢³ÎŞÏ\rD•vH’-ìY+ìn-×-mä6Mé™ş²/ÑëY÷ë\"Êwm›‘w\'êjLÿí¢¨ëwwSJBSŠ”\0\07À5ğ¦Ãkí”-çÚ.ê®Ü—íOçè-æ‰^³ìZ€ô.È-ı‹©İ òîtûÎæœ7ğÍÜ 1Ùµ½äí>Ünw-Ğ0ĞL€ò,¬!QÔcÍğ\r<ÌDuĞ¨N‡Í8Şà¡a¨àtdpáï$1¤vòò\Z2OÎ\"ÖíÍñN\n¯wFÀìËÔ\Z@I]â\rïÆÀ¬±ì{OWæƒ›ã\'ßï !ò\'nÚ…\ZÎâôNõ.áõJöğÍ}í:ëËÙwÌ,¼fëğ~ğG/Io-L\0ád/Ã=ù™0aïS¯õ 1®€Ïÿ½Tÿ9LÍËÂxßL°÷Îw_Òy½O²pşö€öìŞñ%áÜx§Á£ùÉÌÆqŸíœ¿¶ëşÀ©¿ \0¾æVì=~¿Ö…ÿû0±­1œïìV­Ïnák·°­#ñû~ü;ü\'K\ZÇ¬ùJùÈŠ›¿ó¤¿ë¿útùŒú¥ï W\'íV¿²ìYïò%İŞ½\\/Ø¹·Àn½.ş~úşŞ\nòÏ¹rÌ¨ˆí&‚ƒ„‡ˆˆV„Œ†‰‘‡…’‹‚–Pƒ–‰”ƒ‘˜šœ§¨&~¬©’3¬²³~¯‘«´²X¶©¹³L§¾­¼ˆÃ¬ÿÀ’¸µ’ºÊ²®Å‡±ÇªĞÒÓÇÌØŸ‚¡›PÜŞ§çäÒçà‰£–ƒëéŞîŠ¦‘òåÅË+ÜLÚ¸-Ëµk_\"mÉ,\rÌUG\ZBnpœİ’åÀj‰úıh0_=KK>|XR®İ©Q”H3‰íƒ>T,¥¹4¯ã©\r±Qó%ğXA›;ÕÑÆÁá±„Å8H´&+§´¹˜²rZ*-›bbõô±Ó’sVØu•6ªf¼±ÅÊn½9+·\"Ãfôö³cĞN´Ñ)v—a¬ê\"\Zè\\_r3¶}wí$´µJ÷iËJÈ¯¶2+IræÍÎJ,má5l¦—Ú=Šêâ0|ÿY—%øĞ@Òü†E<zn®İ[=Çiæ§°¼„£BÉÙã\'{©˜‡–ä\Zê×¾	níkiÅ±{mqOU0«¢‘ªûAj+µØ‰Ô³åşZå6ñ#¢LÉArâ§|Erô<\'€ƒ8\"êÕ–ŠU²„7]ÛÉvJÚöÊx¨ä5‹}ñÑâ *²\"á!\rê4Ì‰Xég‹—€õŸÅğg‚gÑÈ‹8.¨Ş{Å1z×Qˆ‡üu¼ i‰R´€È`.R¢\"¤/DNeCNcI\0&¢™7ÍåH	t $HÎ™V#l†ö£\Z>èxå†VthÇ+zúRg\'}ÿó§-Pn™ ¼”ˆ\'$szŠ£,Ú4¦]êft2¦¢i#hNFIœˆ|ÊH¨‘Ø¸æ‚#i$t$JË|¼ ¡—MS¥$C}Wi$¹SÄ+Aİ¢Œ¢ë0´ÎIg*ËúBkGÆº`µp¾‚à\'¯`Ë©ï¨ºê)ŞøŠâŞÈjˆºQi‰ÏÚRô2‡¬¾`D½LA¿&x÷	üº‹Ú¬`Lä4o½kó\0ÁüÖ„	˜çË®ÎúA€ÁÂûêÜ	\"c’H¨9*Ë,«ÄËÊ\"¹\'Ì2‡£\"©DsËç¬	3ÌV4?ÛüíĞ,­t‚ëÿjyA8EDß9­hÚtíÇˆŠy­«%Áv\rŸ{b§MË¡­U5\"WgË[w|ŞÛ‡Ä=İ[=4hoşíMœåZ£àˆÿíß‰\'êVuÀ«¶,üÊÖäÚ¡‚¶Ø»\"°Ù¶a.ú¬¼Jyå§D>:––sÃ¸àe¦Ùx¶fvúúìA/ûî DHAp`¬èp\0r*›‹\r6o«É5è$ß<³B?<æÅ	ğÂ}h·»%á\'ûßÈ•Ïû©¨¿~ï¾o‡	GÈ}\'E°ÿşü÷Jó«ŸÄğ§?i\0~ö›ıÇÀ:ğ´ÄÃêå¯Zğ‚Q› ÿ½*¸ \röƒ ¡GHÂšğ„(L¡\nWÈÂºğ…0Œ¡gHÃ\ZÚğ†8Ì¡wÈÃúğ‡@¢‡HÄ\"\ZñˆHL¢—ÈÄ&:ñ‰PŒb9ğ5\Zh/ŠJÉRÿÕ:D$êŠRÜaÃˆ\r*æbXdLÄ˜¨Î!BISI£×(ÇW(¥Jt05´F:úO)±À$0$00Ö±†~<d\'î¸HVŒì‰‰äß…ÁAI †T¤#©IH0²Ş¤9¿;Â¼bÅ•2ÙÉ’²•ø¤%ÓE&¾2jw“Dó±8Â2‡·ì¤,éKHXçAÈË„²Œ¸ñ½jôÿD€v\"b~p¦æ¾MCJîÉRŸ+a°Ò“@òÎ´¼‡hjÎC_³&:ÑÃo¶¢’– ‚=Ya‚Z\"™²Ğ&É†™	ôšÜü§‡VP§:,Ãd­ITF:_šÀC{-ø(LçÍÒDÍXäœ°Ñ‚øüİTà9‹’FbŸ¨öV±‹²á3œÈËÈ0´¼S(Å\0ÑóGGà‡eº“l\Z;Í“„\n= ¥od©,øF¨Í /)+f0Sn¢ŒJ‡ \"®(Y¸±W#(ëy¥_zÑ£’0–(ÁŠ¦zlk¸ @¿ú€ãõÊ;ú:s¡È5_%ƒåhŠ¡ÿŒúT¨ˆÈˆöHT0r(äDÄ)ÿpÔH@ib9ƒwÜ(«üåÍV#\"`P˜eeÔ°]³IÑíE±P¬h°\0%+r6‚0ŠTNÄ¨<LçzÅ\n4ô3tëi$GIP5ÖÕ¬0Ö3{U%„¨W°f®¦•QÆbº«0ÖXSqKsn¯¨ş\\*|(	aP´³‰ C,\\JÔe.¹,ºT;Ÿ¼tC~Héy-QŞH,˜­B=Qe1(¥ì2W*`®@Ö«X3/.}ëtaYİèÅ¶”³lB“$Zõ\nª±\\q\"Vù^?€l™¼%\\ª´Š³×y<…DDƒ_!wÿ\'ÁK®0äI²_a(ÄÈG/R)\ZC¢È¡¯$\0k°‹0²ó•‹©˜¹†UÌn}«Ä˜LW2KbÉ5.\"°œ7ZcDf«­ëc¢V$êÜÇ\'•D•<sÖÍÈkq’\\ÙôäeDŞ™*\'‚g¸òfDÆz•—ß]5•6&æŸÃ¼gMš±@E1*êËE\r Ö¢sjiŞp0&5‰:\"?\\˜²4ô\n:\'Ée)3\n8ÀVªI³aÅŠÚ&BØÖ¸µŒ¯¶IâJpï˜C	ıziFw9øÙ\Z?ŒzÜ±îD,$eºÀ<Ã¿vDó3²Tb^ÈrÈÿ¼Ù±m£U{*[ßˆˆt\'ˆ€/,<úËEp¥ê½íĞaºÛì’DÙ,4gD#ÓİÒM7Ÿ÷qÌ“ùZ(¬ˆ·%è	­î‰ÒşFx’à+XqO®öÍ††Œ­:VÁ>–Ä²1nRgV0ÈÔ)¹`å —çb®4etÒ·‘wÍšt6wÈE~æR£˜×–\0È»gœò\ZkoŞ‘`ynz:òÅé‚†ëf1+!cŸÆ:øt¬ÀXûŸ×,»ÿ)0¨ªQ+Ñ{Mõ)<\'äÖ¹ÌS(Ô®ş´ÙÃ\röC`»=_4*\"Ã®ı\rj–²>éH]×Š•wBw`%•TÿÄçéz¾{ÛÓëÏİvÊË\\<ç4“ábc_©R‰_{Ì½.:Ğ½#…hÁNç¼Èy½ë?a\'‡Øt÷sw{‹kºìõMşÿ\"rñ‹¼ò_ßšàTÅ\ZÉBxt¦G7zèu;f\0Ç—–¶\nŞqntfz5\'16]Ó\"TR(¹&AG€Ï\0iş·i°wed°+Ã7y÷·€½@¿óMvr ¦eBvyo5,‚~!Èpaf@Th~Øgi…biİ‡pÂeƒ]\'u`esæ!¸VÒ\0H98xwf	˜q 6(uğ€Ãzø=ÈuK¸n.˜¹¢ÿW‡0[0öW_“jƒµj’@XL5èe€Çõ}°À\naÈ€Uâ!îÂzÎ“GŞpv€XèrU[÷ÙôQsc¾e	tèkvˆ‡ì·e#Çe<Ğõ\0×qä	ZÇ5|Hb,¨jgˆ†Zƒr	&U¬PX©S\"n}Ğ¢1>¦ƒ6Q]µMemCJ¾Gv¹°ö¢y/u{-åW¶ˆPî7u—C\\å¥Xuõ7‡º˜nø‡]­˜_û41]äNÓ\rl¦\n;Q‰›h—b°xN…GÁµy\nSAÌgÒæ0ğD\0pØz/Ht&`\0Pò‡zdVW„‹Üö~Á×„z¨XñHLÄ7c‰âudø@÷B’E†pñH# ¶‘&¹.éBøKsE»w’0™AÁøB\0o\"#¦$Ï“<	93ÙBI¸“šDÆ¢0TáPÂğZ=¹”k‘’\'´\Z©Hu@\'ÕLy•Üà”&%ùKõ”@EĞ•X9–dY–fy–h™–j¹–lÙ–nù–p—r9—tY—vy—x™—z¹—|Ù—~ù—€é—\0\0;',NULL,NULL),(3,'1400 decarie',5,0,0,3,0,16000,1000.00,2000.00,NULL,0,0,'FLOYLSTONE AVE','SEATTLE ','42525','','36299700_1394029775.jpg',NULL,NULL),(4,'2500 Outremont',100,0,1,1,1200,NULL,NULL,NULL,'',38,1,'2500 outremont','Montreal','H2H2X4','','wznkw.png',NULL,NULL);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propertiestypes`
--

DROP TABLE IF EXISTS `propertiestypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propertiestypes` (
  `id` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propertiestypes`
--

LOCK TABLES `propertiestypes` WRITE;
/*!40000 ALTER TABLE `propertiestypes` DISABLE KEYS */;
INSERT INTO `propertiestypes` VALUES ('','Aerospace'),('1','Industrial'),('2','Commercial'),('3','Residential');
/*!40000 ALTER TABLE `propertiestypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propertiestypes_specifications`
--

DROP TABLE IF EXISTS `propertiestypes_specifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propertiestypes_specifications` (
  `id` int(10) NOT NULL,
  `propertiestype_id` int(10) NOT NULL,
  `propertiestypes_specification` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propertiestypes_specifications`
--

LOCK TABLES `propertiestypes_specifications` WRITE;
/*!40000 ALTER TABLE `propertiestypes_specifications` DISABLE KEYS */;
INSERT INTO `propertiestypes_specifications` VALUES (1,3,'apartment'),(2,2,'Entrepot'),(3,1,'laboratoire'),(4,3,'bongalot');
/*!40000 ALTER TABLE `propertiestypes_specifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recurringcharges`
--

DROP TABLE IF EXISTS `recurringcharges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recurringcharges` (
  `id` int(200) NOT NULL,
  `frequency` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurringcharges`
--

LOCK TABLES `recurringcharges` WRITE;
/*!40000 ALTER TABLE `recurringcharges` DISABLE KEYS */;
INSERT INTO `recurringcharges` VALUES (1,'Monthly'),(2,'Daily'),(3,'Weekly'),(4,'Every two weeks'),(5,'Every two months'),(6,'Quartely'),(7,'Every six months'),(8,'Yearly'),(9,'One time');
/*!40000 ALTER TABLE `recurringcharges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recurrings`
--

DROP TABLE IF EXISTS `recurrings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recurrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recurring` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurrings`
--

LOCK TABLES `recurrings` WRITE;
/*!40000 ALTER TABLE `recurrings` DISABLE KEYS */;
INSERT INTO `recurrings` VALUES (1,'month'),(2,'day'),(3,'7 days'),(4,'3 months');
/*!40000 ALTER TABLE `recurrings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `references`
--

DROP TABLE IF EXISTS `references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `id_government` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phone2` varchar(15) DEFAULT NULL,
  `email` varchar(25) CHARACTER SET ucs2 NOT NULL,
  `fax` varchar(20) NOT NULL,
  `relationship_to_tenant` varchar(25) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `photo` longblob,
  `notes` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `references`
--

LOCK TABLES `references` WRITE;
/*!40000 ALTER TABLE `references` DISABLE KEYS */;
/*!40000 ALTER TABLE `references` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rental_owners`
--

DROP TABLE IF EXISTS `rental_owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rental_owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `id_government` varchar(25) DEFAULT NULL,
  `company_name` varchar(40) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `primary_email` varchar(40) DEFAULT NULL,
  `alternate_email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `comments` text,
  `photo` longblob,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rental_owners`
--

LOCK TABLES `rental_owners` WRITE;
/*!40000 ALTER TABLE `rental_owners` DISABLE KEYS */;
INSERT INTO `rental_owners` VALUES (1,'Marry','Miller ',0,NULL,'SMALLSYS INC','1969-03-12','marrymiller@she.com','mmiller@we.com','3456789012',NULL,'795 E DRAGRAM',0,0,'TUCSON','85705','<br>',NULL,NULL,NULL),(2,'Anthony','White',0,NULL,'JOHN GULLIBLE','1969-03-12','anthonywhite@he.com','antonwhite@he.com','7665342187',NULL,'200 E MAIN ST',0,0,'PHOENIX','8512','<br>',NULL,NULL,NULL),(3,'Suzan','Edward',0,NULL,'MARY ROE','1976-07-16','suzanedward@she.com','suzan89@she.com','3452877690',NULL,'799 E DRAGRAM SUITE 5A   ',0,0,'TUCSON','8570','<br>',NULL,NULL,NULL),(4,'John','Smith',0,NULL,'MEGASYSTEMS INC','1964-09-16','johnsmith@he.com','jsmith@megasystems.com','2345678912',NULL,'300 BOYLSTON AVE E',0,0,'SEATTLE','98102','<br>',NULL,NULL,NULL);
/*!40000 ALTER TABLE `rental_owners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repeatings`
--

DROP TABLE IF EXISTS `repeatings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repeatings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repeating` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repeatings`
--

LOCK TABLES `repeatings` WRITE;
/*!40000 ALTER TABLE `repeatings` DISABLE KEYS */;
INSERT INTO `repeatings` VALUES (1,'indefinitely'),(2,'until a specific date'),(3,'a specific number of times');
/*!40000 ALTER TABLE `repeatings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residence_and_rental_histories`
--

DROP TABLE IF EXISTS `residence_and_rental_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residence_and_rental_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` int(10) unsigned NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `landlord_or_manager_name` varchar(15) DEFAULT NULL,
  `landlord_or_manager_phone` varchar(15) DEFAULT NULL,
  `monthly_rent` decimal(6,2) DEFAULT NULL,
  `date_of_residency_from` date DEFAULT NULL,
  `date_of_residency_to` date DEFAULT NULL,
  `reason_for_leaving` varchar(40) DEFAULT NULL,
  `notes` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residence_and_rental_histories`
--

LOCK TABLES `residence_and_rental_histories` WRITE;
/*!40000 ALTER TABLE `residence_and_rental_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `residence_and_rental_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salutations`
--

DROP TABLE IF EXISTS `salutations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salutations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salutations`
--

LOCK TABLES `salutations` WRITE;
/*!40000 ALTER TABLE `salutations` DISABLE KEYS */;
INSERT INTO `salutations` VALUES (1,'Mr.'),(2,'Ms'),(3,'Mrs.'),(4,'Dr.');
/*!40000 ALTER TABLE `salutations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` VALUES (1,'1-1/2'),(2,'2-1/2'),(3,'studio');
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,38,'Quebec'),(2,38,'Toronto'),(3,93,'Port-au-Prince'),(4,93,'Cap-Haitien'),(5,30,'Brazilia'),(6,108,'kingston'),(7,38,'Vancouver'),(8,230,'Florida'),(9,230,'New York'),(10,230,'California'),(11,230,'New Jersey');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'Applicant'),(2,'Reserved'),(3,'Lease'),(4,'Free'),(5,'Not available'),(6,'N/A');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `tax` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxes`
--

LOCK TABLES `taxes` WRITE;
/*!40000 ALTER TABLE `taxes` DISABLE KEYS */;
INSERT INTO `taxes` VALUES (1,15),(2,9);
/*!40000 ALTER TABLE `taxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenants`
--

DROP TABLE IF EXISTS `tenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tenants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `marital_status_id` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `alternate emails` varchar(200) NOT NULL,
  `cell_phone` varchar(15) DEFAULT NULL,
  `home_phone` varchar(200) NOT NULL,
  `work_phone` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `street` text NOT NULL,
  `City` varchar(15) NOT NULL,
  `zip` int(11) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `driver_license_number` varchar(15) DEFAULT NULL,
  `driver_license_state` varchar(15) DEFAULT NULL,
  `total_number_of_occupants` varchar(15) DEFAULT NULL,
  `unit_or_address_applying_for` varchar(40) DEFAULT NULL,
  `requested_lease_term` varchar(15) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `emergency_contact` varchar(100) DEFAULT NULL,
  `emergency_contact_email` varchar(200) NOT NULL,
  `emergency_contact_phone` varchar(200) NOT NULL,
  `relationship_to_tenant` varchar(200) NOT NULL,
  `co_signer_details` varchar(100) DEFAULT NULL,
  `notes` text,
  `photo` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `property_or_address_applying_for` (`unit_or_address_applying_for`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenants`
--

LOCK TABLES `tenants` WRITE;
/*!40000 ALTER TABLE `tenants` DISABLE KEYS */;
INSERT INTO `tenants` VALUES (1,'Nancy','Walker',0,0,'nancywalker@she.com','','9876543210','','0','0',0,0,'','0',0,'1973-03-01','34267789','CA','5','1',NULL,0,'Name: Carola Paul\r\ne-mail: carolapaul@she.com\r\nPhone:1348973884\r\nAddress: POB 65502\r\nTUCSON AZ 85728','','','','Name: John Steve \r\ne-mail: johnsteve@he.com\r\nPhone:48245543\r\nAddress: 300 BOYLSTON AVE E\r\nSEATTLE WA','<br>','87076300_1394033914.jpg',NULL,NULL),(2,'Olivia','Medison',0,0,'oliviamedison@she.com','','8998435325','','0','0',0,0,'','0',0,'1980-01-23','76895432','GU','3','2',NULL,0,'Name: Nim Jackson\r\nemail: nimjackson@she.com','','','','Name: Nim Jackson\r\nemail: nimjackson@she.com','<br>',NULL,NULL,NULL),(3,'Elisabeth','Ban',0,0,'elisabethban@live.com','','2098435890','','0','0',0,0,'','0',0,'1985-07-20','76589965','GU','6','2',NULL,0,NULL,'','','',NULL,'<br>',NULL,NULL,NULL),(4,'Mona','Karim',0,0,'karim@yahoo.com','','4387658987','5147894562','5145453689','4387894523',38,1,'225 plateau mont-royal','1',-1,'2015-04-23','12365456','Quebec','3','45','',0,'Marie Andre Joseph','marieaj@gmail.com','5141237856','Wife','N/A','Application pour un nouveau','',NULL,NULL),(5,'Jean','Joseph',0,0,'jeanj@gmail.com','','5144569878','5147894546','4502589876','5124567823',1,1,'1234 outremont','1',-2,'2015-04-23','','','','','',0,'Darlene','dada@yahoo.ca','4504567823','Wife','','','',NULL,NULL);
/*!40000 ALTER TABLE `tenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int(10) unsigned NOT NULL,
  `rental_owner_id` int(11) DEFAULT NULL,
  `unit_number` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `market_rent` decimal(15,0) NOT NULL,
  `bedrooms` varchar(40) NOT NULL,
  `bath` decimal(15,0) NOT NULL,
  `lease_term` text,
  `leasestype_id` int(11) DEFAULT NULL,
  `rental_amount` double NOT NULL,
  `deposit_amount` int(11) NOT NULL,
  `description` text,
  `features` text,
  `photo` longblob,
  `status_id` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_number` (`unit_number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,1,NULL,12,122,344,'4',2,NULL,NULL,0,0,'5-1/2 en bon etat et prore','climatise pour ete',NULL,'available',NULL,NULL),(2,3,NULL,80,45,43,'7',3,NULL,NULL,0,0,'good condition',NULL,NULL,'',NULL,NULL),(3,4,NULL,567,34,567,'3',0,NULL,NULL,0,0,'good condition','ok my friend',NULL,'',NULL,NULL);
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL DEFAULT '2',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vba@vba.com','vba',1,'2015-04-23 03:31:48','2015-04-23 03:31:48'),(2,'alezyy@yahoo.com','123456',1,'2015-04-24 16:17:20','2015-04-24 16:17:20'),(53,'goooo@oo.cm','123',2,'2015-04-27 17:36:53','2015-04-27 17:36:53'),(54,'qw@h.com','1234',2,'2015-04-27 17:37:58','2015-04-27 17:37:58'),(55,'qwnn@h.com','321',1,'2015-04-27 17:44:49','2015-04-27 17:44:49'),(56,'polo@yahoo.com','123456789',2,'2015-04-27 17:47:14','2015-04-27 17:47:14'),(57,'polobar@yahoo.com','123456789',2,'2015-04-27 17:49:00','2015-04-27 17:49:00'),(58,'tizpeople@gmail.com','123456789',2,'2015-04-27 18:18:46','2015-04-27 18:18:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workorders`
--

DROP TABLE IF EXISTS `workorders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `summary` varchar(150) NOT NULL,
  `date_opened` date NOT NULL,
  `date_due` date NOT NULL,
  `work_description` text NOT NULL,
  `worktype_id` int(11) NOT NULL,
  `workstatus_id` int(11) NOT NULL,
  `workpriority_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `repeating_id` int(11) NOT NULL,
  `starting_on` date NOT NULL,
  `repeat_until` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workorders`
--

LOCK TABLES `workorders` WRITE;
/*!40000 ALTER TABLE `workorders` DISABLE KEYS */;
/*!40000 ALTER TABLE `workorders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workpriorities`
--

DROP TABLE IF EXISTS `workpriorities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workpriorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workpriority` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workpriorities`
--

LOCK TABLES `workpriorities` WRITE;
/*!40000 ALTER TABLE `workpriorities` DISABLE KEYS */;
INSERT INTO `workpriorities` VALUES (1,'Normal'),(2,'Low'),(3,'Medium'),(4,'High'),(5,'Urgent');
/*!40000 ALTER TABLE `workpriorities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workstatuses`
--

DROP TABLE IF EXISTS `workstatuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workstatuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workstatuses`
--

LOCK TABLES `workstatuses` WRITE;
/*!40000 ALTER TABLE `workstatuses` DISABLE KEYS */;
INSERT INTO `workstatuses` VALUES (1,'Open'),(2,'Pending'),(3,'Closed');
/*!40000 ALTER TABLE `workstatuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worktypes`
--

DROP TABLE IF EXISTS `worktypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worktypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worktypes`
--

LOCK TABLES `worktypes` WRITE;
/*!40000 ALTER TABLE `worktypes` DISABLE KEYS */;
INSERT INTO `worktypes` VALUES (1,'Repair'),(2,'Maintenance'),(3,'Incident'),(4,'Checkup'),(5,'Meter Reading'),(6,'Remove & Replace'),(7,'Violation'),(8,'Other');
/*!40000 ALTER TABLE `worktypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-03 20:39:11
