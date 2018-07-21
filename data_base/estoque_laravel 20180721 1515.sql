-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.58


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema estoque_laravel
--

CREATE DATABASE IF NOT EXISTS estoque_laravel;
USE estoque_laravel;

--
-- Definition of table `back_produtos`
--

DROP TABLE IF EXISTS `back_produtos`;
CREATE TABLE `back_produtos` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `back_produtos`
--

/*!40000 ALTER TABLE `back_produtos` DISABLE KEYS */;
INSERT INTO `back_produtos` (`ID`,`nome`,`valor`,`descricao`,`quantidade`) VALUES 
 (1,'Geladeira','5900.00','Side by Side com gelo na porta',2),
 (2,'FogÃ£o','950.00','Painel automÃ¡tico e forno elÃ©trico',5),
 (3,'Microondas','1520.00','Manda SMS quando termina de esquentar',1);
/*!40000 ALTER TABLE `back_produtos` ENABLE KEYS */;


--
-- Definition of table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`,`batch`) VALUES 
 ('2014_10_12_000000_create_users_table',1),
 ('2014_10_12_100000_create_password_resets_table',1),
 ('2018_07_15_002826_create_produtos_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Definition of table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


--
-- Definition of table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produtos`
--

/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`,`nome`,`valor`,`descricao`,`quantidade`,`created_at`,`updated_at`) VALUES 
 (5,'Fogão','950.00','Painel automático e forno elétrico',5,'2018-07-15 01:22:40','2018-07-15 01:22:40'),
 (6,'Microondas','999.99','Manda SMS quando termina de esquentar',1,'2018-07-15 01:22:40','2018-07-15 01:22:40'),
 (8,'Armario de cozinha','999.99','Armario de cozinha com balcao',5,NULL,NULL),
 (9,'Armario de cozinha','999.99','Armario de cozinha com balcao',3,NULL,NULL),
 (10,'Armario de cozinha','1.00','Armario de cozinha com balcao',5,NULL,NULL),
 (11,'Armario de cozinha','1333.00','Armario de cozinha com balcao',3,NULL,NULL),
 (12,'Armario de cozinha','1333.00','Armario de cozinha com balcao',3,NULL,NULL),
 (13,'Cama solteiro','439.89','Cama de solteiro em madeira',6,NULL,NULL),
 (14,'Painel','200.00','Painel sala de televisao',3,NULL,NULL),
 (15,'Painel','200.00','Painel sala de televisao',4,NULL,NULL),
 (16,'Painel','200.00','Painel sala de televisao',4,NULL,NULL),
 (17,'Umidificador','899.99','Umidificador de ambientes',2,NULL,NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
