# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: cart
# Generation Time: 2017-11-29 18:19:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table HiFi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `HiFi`;

CREATE TABLE `HiFi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `brand` varchar(255) NOT NULL DEFAULT '',
  `price` float NOT NULL,
  `path` longtext NOT NULL COMMENT 'img/products/HiFi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `HiFi` WRITE;
/*!40000 ALTER TABLE `HiFi` DISABLE KEYS */;

INSERT INTO `HiFi` (`id`, `Category`, `name`, `brand`, `price`, `path`)
VALUES
	(1,'HiFi','Denon Ceol N9 Mini System Black inc Dali Zensor 1 Walnut (R)','Denon',1866,'img/products/HiFi/Denon Ceol N9 Mini System Black inc Dali Zensor 1 Walnut (R).jpg\n'),
	(2,'HiFi','Denon Ceol N9 Mini System Black inc Dali Zensor 1 White (R)','Denon',1866,'img/products/HiFi/Denon Ceol N9 Mini System Black inc Dali Zensor 1 White (R).jpg'),
	(3,'HiFi','Denon Ceol Piccolo N4 Mini System White inc Q Acoustics 3050 Gloss Black (R)','Denon\n',4817,'img/products/HiFi/Denon Ceol Piccolo N4 Mini System White inc Q Acoustics 3050 Gloss Black (R).jpg\n'),
	(4,'HiFi','Denon CEOL Piccolo Network Music Receiver with Wi-Fi and Ethernet Connectivity - Black','Denon',4079,'img/products/HiFi/Denon CEOL Piccolo Network Music Receiver with Wi-Fi and Ethernet Connectivity - Black.jpg'),
	(5,'HiFi','Genius 3-Way Hi-Fi Wood Speakers for PC, MP3 players, and Tablets (SP-HF800A)','Genius ',4371,'img/products/HiFi/Genius 3-Way Hi-Fi Wood Speakers for PC, MP3 players, and Tablets (SP-HF800A).jpg'),
	(6,'HiFi','Genius SP-HF1800A 50 W Three-way Hi-Fi Wood Speakers\n','Genius ',4720,'img/products/HiFi/Genius SP-HF1800A 50 W Three-way Hi-Fi Wood Speakers.jpg'),
	(7,'HiFi','Panasonic SC-AKX200E-K 400 W Wireless Audio Streaming Speaker - Black','Panasonic ',2759,'img/products/HiFi/Panasonic SC-AKX200E-K 400 W Wireless Audio Streaming Speaker - Black.jpg'),
	(8,'HiFi','Panasonic SC-PM250BEBS DAB Micro Hi-Fi System','Panasonic ',2679,'img/products/HiFi/Panasonic SC-PM250BEBS DAB Micro Hi-Fi System.jpg'),
	(9,'HiFi','Panasonic SC-PM602EB-K 40 W DAB+ CD Micro Hi-Fi with USB Playback and Wireless Audio Streaming via Bluetooth','Panasonic ',5764,'img/products/HiFi/Panasonic SC-PM602EB-K 40 W DAB+ CD Micro Hi-Fi with USB Playback and Wireless Audio Streaming via Bluetooth.jpg'),
	(10,'HiFi','Pioneer X-CM35-K 30 W CD Micro System with Bluetooth, NFC, FM Tuner and USB Input - Black','Pioneer ',3144,'img/products/HiFi/Pioneer X-CM35-K 30 W CD Micro System with Bluetooth, NFC, FM Tuner and USB Input - Black.jpg'),
	(11,'HiFi','Pioneer X-CM35-N 30 W CD Micro System with Bluetooth_NFC_ FM Tuner and USB Input - Green','Pioneer ',2719,'img/products/HiFi/Pioneer X-CM35-N 30 W CD Micro System with Bluetooth_NFC_ FM Tuner and USB Input - Green.jpg'),
	(12,'HiFi','Pioneer X-CM56D-W Hi-Fi System with CD_DAB_DAB+Bluetooth and USB - White','Pioneer ',3223,'img/products/HiFi/Pioneer X-CM56D-W Hi-Fi System with CD_DAB_DAB+Bluetooth and USB - White.jpg'),
	(13,'HiFi','Sony CMT-SBT40D 50W Bluetooth Hi-Fi System with CD and FM Radio - Black_Grey','Sony ',7972,'img/products/HiFi/Sony CMT-SBT40D 50W Bluetooth Hi-Fi System with CD and FM Radio - Black_Grey.jpg'),
	(14,'HiFi','Volume and Bass Hi-Fi Wireless Bluetooth Speaker for Bluetooth Enabled Devices - White','Null',5603,'img/products/HiFi/Volume and Bass Hi-Fi Wireless Bluetooth Speaker for Bluetooth Enabled Devices - White.jpg'),
	(15,'HiFi','Yamaha MCRB043D Micro Stereo System - Blue','Yamaha',7439,'img/products/HiFi/Yamaha MCRB043D Micro Stereo System - Blue.jpg');

/*!40000 ALTER TABLE `HiFi` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
