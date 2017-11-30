-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-30 07:10:21
-- 伺服器版本: 10.1.28-MariaDB
-- PHP 版本： 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cart`
--

-- --------------------------------------------------------

--
-- 資料表結構 `administrator`
--

CREATE TABLE `administrator` (
  `Email_id` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `administrator`
--

INSERT INTO `administrator` (`Email_id`, `Password`) VALUES
('Admin@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- 資料表結構 `cart1`
--

CREATE TABLE `cart1` (
  `Cart_id` int(5) NOT NULL,
  `Order_id` int(10) NOT NULL,
  `Product_id` int(5) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Total_price` bigint(50) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `temp` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cart1`
--

INSERT INTO `cart1` (`Cart_id`, `Order_id`, `Product_id`, `productname`, `brand`, `Imagepath`, `price`, `quantity`, `Total_price`, `email`, `temp`) VALUES
(6, 1002, 4, 'Formal shirts', 'Peter England', '/project/Collection/Men/Formal shirts/peter-england-royal-blue-formal-shirt.jpg', 1449, 1, 1449, 'machhigaurav@gmail.com', ''),
(7, 1003, 95, 'Slogan T-shirts', 'Peter England', '/project/Collection/Men/slogan/rootstock-yellow-round-neck-t-shirt.jpg', 499, 1, 499, 'machhigaurav@gmail.com', ''),
(8, 1004, 99, 'Slogan T-shirts', 'Lotto', '/project/Collection/Men/slogan/beer-studio-white-round-neck-t-shirt.jpg', 499, 1, 499, 'machhigaurav@gmail.com', ''),
(9, 1005, 84, 'V-neck T-shirts', 'LondonBridge', '/project/Collection/Men/Vneck/slingshot-red-v-neck-t-shirt.jpg', 599, 1, 599, 'temporily@gmail.com', ''),
(10, 1006, 30, 'Formal shirts', 'LondonBridge', '/project/Collection/Men/Formal shirts/londonbridge-light-green-formal-shirt.jpg', 799, 1, 799, 'machhigaurav@gmail.com', ''),
(11, 1007, 96, 'Slogan T-shirts', 'LondonBridge', '/project/Collection/Men/slogan/om-hari-white-t-shirt.jpg', 499, 1, 499, 'kwanyuhung@gmail.com', ''),
(12, 1007, 30, 'Formal shirts', 'LondonBridge', '/project/Collection/Men/Formal shirts/londonbridge-light-green-formal-shirt.jpg', 799, 1, 799, 'kwanyuhung@gmail.com', ''),
(13, 1007, 71, 'Round neck T-shirts', 'LondonBridge', '/project/Collection/Men/Rneck/no-logo-blue-full-sleeves-henley-t-shirt.jpg', 699, 1, 699, 'kwanyuhung@gmail.com', ''),
(14, 1008, 1, 'RT-AC88U', 'ASUS', 'img/products/router/RT-AC88U.png', 1900, 1, 1900, 'i@gmail.com', ''),
(15, 1009, 2, 'Google WIFI', 'Google', 'img/products/router/Google wifi.png', 2400, 1, 2400, '1@h.com', ''),
(16, 1009, 1, 'RT-AC88U', 'ASUS', 'img/products/router/RT-AC88U.png', 1900, 1, 1900, '1@h.com', ''),
(17, 1010, 0, 'RT-AC88U', 'ASUS', 'img/products/router/RT-AC88U.png', 1900, 1, 1900, '1@h.com', ''),
(18, 1010, 0, 'RT2600ac', 'Synology', 'img/products/router/RT2600ac.png', 1709, 1, 1709, '1@h.com', ''),
(19, 1011, 1, 'RT-AC88U', 'ASUS', '', 1900, 1, 1900, '1@h.com', ''),
(20, 1012, 2, 'Google WIFI', 'Google', 'img/products/router/Google wifi.png', 2400, 1, 2400, '1@h.com', '');

-- --------------------------------------------------------

--
-- 資料表結構 `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Chung', 'Chung@gmail.com', 'TESTING', 'MSG '),
(2, 'Chung', 'Chung@gmail.com', 'TESTING', '@@ ');

-- --------------------------------------------------------

--
-- 資料表結構 `headphone`
--

CREATE TABLE `headphone` (
  `id` int(25) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `headphone`
--

INSERT INTO `headphone` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'headphone', 'Beyerdynamic Bryon', 'Byrons', 40.98, 'img/products/headphone/Beyerdynamic Bryon.jpg'),
(2, 'headphone', 'Sennheiser Momentum M2 IEi', 'Sennheiser', 99.95, 'img/products/headphone/Sennheiser Momentum M2 IEi.jpg'),
(3, 'headphone', 'AKG N40', 'AKG', 399.95, 'img/products/headphone/AKG N40.jpg'),
(5, 'headphone', 'Shure SE846-CL', 'Shure', 999.00, 'img/products/headphone/Shure SE846.jpg'),
(6, 'headphone', 'Etymotic ER4 XR', 'Etymotic', 349.00, 'img/products/headphone/Etymotic ER4 XR.png'),
(7, 'headphone', '1More Triple Driver In-Ear Headphones', '1More', 71.47, 'img/products/headphone/1More Triple Driver In-Ear Headphones.png'),
(8, 'headphone', 'Shure SE215 Wireless', 'Shure', 149.00, 'img/products/headphone/Shure SE215 Wireless.jpg'),
(9, 'headphone', 'B&O Play Beoplay H5', 'B&O', 249.00, 'img/products/headphone/B&O Play Beoplay H5.jpg'),
(10, 'headphone', 'Beats BeatsX', 'Beats', 97.99, 'img/products/headphone/Beats BeatsX.jpg'),
(11, 'headphone', 'Bose SoundSport Free', 'Bose', 249.00, 'img/products/headphone/Bose SoundSport Free.jpg'),
(12, 'headphone', 'Jaybird X3', 'Jaybird', 128.99, 'img/products/headphone/Jaybird X3.jpg'),
(13, 'headphone', 'JLab Epic Air', 'JLab', 149.99, 'img/products/headphone/JLab Epic Air.jpg'),
(14, 'headphone', 'Libratone Q Adapt Lightning', 'Libratone', 119.00, 'img/products/headphone/Libratone Q Adapt Lightning.jpg'),
(15, 'headphone', 'Skullcandy Jib Wireless', 'Skullcandy', 33.99, 'img/products/headphone/Skullcandy Jib Wireless.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `hifi`
--

CREATE TABLE `hifi` (
  `id` int(11) UNSIGNED NOT NULL,
  `Category` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `brand` varchar(255) NOT NULL DEFAULT '',
  `price` float NOT NULL,
  `path` longtext NOT NULL COMMENT 'img/products/HiFi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `hifi`
--

INSERT INTO `hifi` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'HiFi', 'Denon Ceol N9 Mini System Black inc Dali Zensor 1 Walnut (R)', 'Denon', 1866, 'img/products/HiFi/Denon Ceol N9 Mini System Black inc Dali Zensor 1 Walnut (R).jpg\n'),
(2, 'HiFi', 'Denon Ceol N9 Mini System Black inc Dali Zensor 1 White (R)', 'Denon', 1866, 'img/products/HiFi/Denon Ceol N9 Mini System Black inc Dali Zensor 1 White (R).jpg'),
(3, 'HiFi', 'Denon Ceol Piccolo N4 Mini System White inc Q Acoustics 3050 Gloss Black (R)', 'Denon\n', 4817, 'img/products/HiFi/Denon Ceol Piccolo N4 Mini System White inc Q Acoustics 3050 Gloss Black (R).jpg\n'),
(4, 'HiFi', 'Denon CEOL Piccolo Network Music Receiver with Wi-Fi and Ethernet Connectivity - Black', 'Denon', 4079, 'img/products/HiFi/Denon CEOL Piccolo Network Music Receiver with Wi-Fi and Ethernet Connectivity - Black.jpg'),
(5, 'HiFi', 'Genius 3-Way Hi-Fi Wood Speakers for PC, MP3 players, and Tablets (SP-HF800A)', 'Genius ', 4371, 'img/products/HiFi/Genius 3-Way Hi-Fi Wood Speakers for PC, MP3 players, and Tablets (SP-HF800A).jpg'),
(6, 'HiFi', 'Genius SP-HF1800A 50 W Three-way Hi-Fi Wood Speakers\n', 'Genius ', 4720, 'img/products/HiFi/Genius SP-HF1800A 50 W Three-way Hi-Fi Wood Speakers.jpg'),
(7, 'HiFi', 'Panasonic SC-AKX200E-K 400 W Wireless Audio Streaming Speaker - Black', 'Panasonic ', 2759, 'img/products/HiFi/Panasonic SC-AKX200E-K 400 W Wireless Audio Streaming Speaker - Black.jpg'),
(8, 'HiFi', 'Panasonic SC-PM250BEBS DAB Micro Hi-Fi System', 'Panasonic ', 2679, 'img/products/HiFi/Panasonic SC-PM250BEBS DAB Micro Hi-Fi System.jpg'),
(9, 'HiFi', 'Panasonic SC-PM602EB-K 40 W DAB+ CD Micro Hi-Fi with USB Playback and Wireless Audio Streaming via Bluetooth', 'Panasonic ', 5764, 'img/products/HiFi/Panasonic SC-PM602EB-K 40 W DAB+ CD Micro Hi-Fi with USB Playback and Wireless Audio Streaming via Bluetooth.jpg'),
(10, 'HiFi', 'Pioneer X-CM35-K 30 W CD Micro System with Bluetooth, NFC, FM Tuner and USB Input - Black', 'Pioneer ', 3144, 'img/products/HiFi/Pioneer X-CM35-K 30 W CD Micro System with Bluetooth, NFC, FM Tuner and USB Input - Black.jpg'),
(11, 'HiFi', 'Pioneer X-CM35-N 30 W CD Micro System with Bluetooth_NFC_ FM Tuner and USB Input - Green', 'Pioneer ', 2719, 'img/products/HiFi/Pioneer X-CM35-N 30 W CD Micro System with Bluetooth_NFC_ FM Tuner and USB Input - Green.jpg'),
(12, 'HiFi', 'Pioneer X-CM56D-W Hi-Fi System with CD_DAB_DAB+Bluetooth and USB - White', 'Pioneer ', 3223, 'img/products/HiFi/Pioneer X-CM56D-W Hi-Fi System with CD_DAB_DAB+Bluetooth and USB - White.jpg'),
(13, 'HiFi', 'Sony CMT-SBT40D 50W Bluetooth Hi-Fi System with CD and FM Radio - Black_Grey', 'Sony ', 7972, 'img/products/HiFi/Sony CMT-SBT40D 50W Bluetooth Hi-Fi System with CD and FM Radio - Black_Grey.jpg'),
(14, 'HiFi', 'Volume and Bass Hi-Fi Wireless Bluetooth Speaker for Bluetooth Enabled Devices - White', 'Null', 5603, 'img/products/HiFi/Volume and Bass Hi-Fi Wireless Bluetooth Speaker for Bluetooth Enabled Devices - White.jpg'),
(15, 'HiFi', 'Yamaha MCRB043D Micro Stereo System - Blue', 'Yamaha', 7439, 'img/products/HiFi/Yamaha MCRB043D Micro Stereo System - Blue.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `keyboard`
--

CREATE TABLE `keyboard` (
  `id` int(25) NOT NULL,
  `Category` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `keyboard`
--

INSERT INTO `keyboard` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'keyboard', 'Corsair K95 RGB', 'Corsair', 236.99, 'img/products/keyboard/CorsairK95RGB.jpg'),
(2, 'keyboard', 'Razer BlackWidow Chroma V2', 'Razer', 236.99, 'img/products/keyboard/RazerBlackWidowChromaV2.jpg'),
(3, 'keyboard', 'Das Keyboard 4 Professional', 'Daskeyboard', 165.00, 'img/products/keyboard/DasKeyboard4Professional.jpg'),
(4, 'keyboard', 'Logitech G413 Carbon', 'Logitech', 52.48, 'img/products/keyboard/LogitechG413Carbon.jpg'),
(5, 'keyboard', 'Unicomp Ultra Classic', 'Unicomp', 94.00, 'img/products/keyboard/UnicompUltraClassic.jpg'),
(6, 'keyboard', 'Cherry MX-Board 3.0 G80-3850', 'Cherry', 110.00, 'img/products/keyboard/CherryMX-Board3.0G80-3850.jpg'),
(7, 'keyboard', 'Logitech K480 Bluetooth Multi-Device Keyboard', 'Logitech', 20.99, 'img/products/keyboard/LogitechK480BluetoothMulti-DeviceKeyboard.jpg'),
(8, 'keyboard', 'Microsoft All-in-One Media Keyboard', 'Microsoft', 29.95, 'img/products/keyboard/MicrosoftAll-in-OneMediaKeyboard.jpg'),
(9, 'keyboard', 'Nixeus Moda Pro', 'Nixeus', 69.99, 'img/products/keyboard/NixeusModaPro.jpg'),
(10, 'keyboard', 'SteelSeries Apex M500', 'SteelSeries', 84.99, 'img/products/keyboard/SteelSeriesApexM500.jpg'),
(11, 'keyboard', 'Das Keyboard Prime 13', 'Daskeyboard', 129.00, 'img/products/keyboard/DasKeyboardPrime13.jpg'),
(12, 'keyboard', 'Razer BlackWidow X Chroma Mercury Edition', 'Razer', 149.99, 'img/products/keyboard/RazerBlackWidowXChromaMercuryEdition.jpg'),
(13, 'keyboard', 'Razer Ornata Chroma', 'Razer', 92.07, 'img/products/keyboard/RazerOrnataChroma.jpg'),
(14, 'keyboard', 'Razer Cynosa', 'Razer', 45.20, 'img/products/keyboard/RazerCynosa.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `mouse`
--

CREATE TABLE `mouse` (
  `id` int(25) NOT NULL,
  `Category` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `mouse`
--

INSERT INTO `mouse` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'mouse', 'Logitech G502 Proteus Spectrum RGB Tunable Gaming Mouse', 'Logitech', 169.87, 'img/products/mouse/Logitech G502 Proteus Spectrum RGB Tunable Gaming Mouse.jpg'),
(2, 'mouse', 'HyperX Pulsefire FPS Gaming Mouse', 'HyperX', 49.99, 'img/products/mouse/HyperX Pulsefire FPS Gaming Mouse.jpg'),
(3, 'mouse', 'Logitech G900 Chaos Spectrum Professional Grade Wired', 'Logitech', 99.03, 'img/products/mouse/Logitech G900 Chaos Spectrum Professional Grade Wired.jpg'),
(4, 'mouse', 'Razer  - Chroma Enabled RGB FPS Gaming Mouse', 'Razer', 69.99, 'img/products/mouse/Razer Basilisk - Chroma Enabled RGB FPS Gaming Mouse.jpg'),
(5, 'mouse', 'Razer Lancehead Tournament Edition - Professional Grade', 'Razer', 59.99, 'img/products/mouse/Razer Lancehead Tournament Edition - Professional Grade Chroma Ambidextrous Gaming Mouse.jpg'),
(6, 'mouse', 'Razer Naga Epic Chroma MMO Gaming Mouse', 'Razer', 121.57, 'img/products/mouse/Razer Naga Epic Chroma MMO Gaming Mouse.jpg'),
(7, 'mouse', 'SteelSeries Sensei 310 Gaming Mouse', 'Razer', 59.99, 'img/products/mouse/SteelSeries Sensei 310 Gaming Mouse.jpg'),
(8, 'mouse', 'Logitech G903 LIGHTSPEED Gaming Mouse', 'Logitech', 124.99, 'img/products/mouse/Logitech G903 LIGHTSPEED Gaming Mouse.jpg'),
(9, 'mouse', 'ASUS ROG Gladius II Aura Sync USB Wired Optical Ergonom', 'ASUS', 98.01, 'img/products/mouse/ASUS ROG Gladius II Aura Sync USB Wired Optical Ergonomic Gaming Mouse.jpg'),
(10, 'mouse', 'CORSAIR GLAIVE - RGB Gaming Mouse', 'CORSAIR', 59.99, 'img/products/mouse/CORSAIR GLAIVE - RGB Gaming Mouse.jpg'),
(11, 'mouse', 'Creative Labs Sound BlasterX Siege M04 Gaming Mouse', 'Creative Labs', 62.34, 'img/products/mouse/Creative Labs Sound BlasterX Siege M04 Gaming Mouse.jpg'),
(12, 'mouse', 'Razer DeathAdder Elite - Chroma Enabled RGB Ergonomic G', 'Razer', 62.34, 'img/products/mouse/Razer DeathAdder Elite - Chroma Enabled RGB Ergonomic Gaming Mouse.jpg'),
(13, 'mouse', 'SteelSeries Rival 700 Gaming Mouse', 'Steel', 55.99, 'img/products/mouse/SteelSeries Rival 700 Gaming Mouse.jpg'),
(14, 'mouse', 'CORSAIR HARPOON - RGB Gaming Mouse', 'CORSAIR', 24.99, 'img/products/mouse/CORSAIR HARPOON - RGB Gaming Mouse.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(10) NOT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip_code` int(10) NOT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `ShippingAddress` varchar(40) DEFAULT NULL,
  `ShippingMethod` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `TypeOfCreditcard` varchar(25) DEFAULT '                  -',
  `NameOnCC` varchar(30) DEFAULT '                   -',
  `CCNo` bigint(50) DEFAULT NULL,
  `CVV` int(5) DEFAULT NULL,
  `ExpirationDate` varchar(20) DEFAULT NULL,
  `Order_Ammount` bigint(50) NOT NULL,
  `temp` varchar(50) DEFAULT NULL,
  `OrderDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Email_id` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`Order_id`, `FirstName`, `LastName`, `Email`, `Country`, `State`, `City`, `Zip_code`, `contactNo`, `ShippingAddress`, `ShippingMethod`, `PaymentMethod`, `TypeOfCreditcard`, `NameOnCC`, `CCNo`, `CVV`, `ExpirationDate`, `Order_Ammount`, `temp`, `OrderDateTime`, `Email_id`) VALUES
(1003, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', 0, 0, '', 499, '', '2016-07-28 14:24:35', 'machhigaurav@gmail.com'),
(1006, 'Gaurav', 'machhi', 'machhigaurav@gmail.com', 'India', 'Gujarat', 'Vadodara', 3900009, '9714576098', '1164, Tarsali, Vishal nagar Vadodara', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', 0, 0, '', 799, '', '2016-10-01 22:51:15', 'machhigaurav@gmail.com'),
(1007, 'kkk', 'kkk', 'kkkwan@gmail.com', 'India', 'Gujarat', 'Vadodara', 852, '221231412', 'bbccc', 'Standard Shiping', 'Credit Card', 'Visa', '', 0, 0, 'Month/Year', 2006, '', '2017-11-28 03:53:07', 'kwanyuhung@gmail.com'),
(1008, 'hgf', 'gfh', 'gh@hj.com', 'India', 'Gujarat', 'Vadodara', 0, '5654', 'fdgf', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', NULL, NULL, NULL, 1900, '', '2017-11-28 08:12:00', 'i@gmail.com'),
(1009, 'y', 'h', 'w@fgmail.com', 'India', 'Gujarat', 'Vadodara', 9, '9', 'g', 'Free Shipping', 'Credit Card', 'Visa', '', 0, 0, 'Month/Year', 4300, '', '2017-11-28 09:55:31', '1@h.com'),
(1010, 'sd', 'sd', 'sd@gmail.com', 'India', 'Gujarat', 'Vadodara', 123, '123', '123', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', NULL, NULL, NULL, 3609, '', '2017-11-28 09:58:40', '1@h.com'),
(1011, 'u', 'u', 'r@y.com', 'India', 'Gujarat', 'Vadodara', 56, '5646554786', 'yyu', 'Free Shipping', 'Credit Card', 'Visa', '', 0, 0, 'Month/Year', 1900, '', '2017-11-28 10:03:43', '1@h.com'),
(1012, 'a', 'a', 'a@hotmail.com', 'India', 'Gujarat', 'Vadodara', 123, '123', '123', 'Free Shipping', 'Cash on delivery', '                  -', '                   -', NULL, NULL, NULL, 2400, '', '2017-11-28 10:06:35', '1@h.com');

-- --------------------------------------------------------

--
-- 資料表結構 `portablespeaker`
--

CREATE TABLE `portablespeaker` (
  `id` int(25) NOT NULL,
  `Category` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `router`
--

CREATE TABLE `router` (
  `id` int(25) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `router`
--

INSERT INTO `router` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'router', 'RT-AC88U', 'ASUS', 1900.00, 'img/products/router/RT-AC88U.png'),
(2, 'router', 'Google WIFI', 'Google', 2400.00, 'img/products/router/Google wifi.png'),
(3, 'router', 'RT2600ac', 'Synology', 1709.00, 'img/products/router/RT2600ac.png'),
(4, 'router', ' Velop WHWH0303', 'Linksys', 2970.00, 'img/products/router/Velop WHWH0303.png'),
(5, 'router', 'Orbi AC2200(RBK43)', 'Netgear', 3080.00, 'img/products/router/Orbi AC2200(RBK43).png'),
(6, 'router', 'Max Stream EA7500', 'Linksys', 860.00, 'img/products/router/Max Stream EA7500.png'),
(7, 'router', 'RT-AC5300', 'ASUS', 2540.00, 'img/products/router/RT-AC5300.png'),
(8, 'router', 'G10 Gaming Router', 'ASRock', 860.00, 'img/products/router/G10 Gaming Router.png'),
(9, 'router', 'Archer C5400', 'TP-link', 1940.00, 'img/products/router/Archer C5400.png'),
(10, 'router', 'Archer C3150', 'TP-link', 1210.00, 'img/products/router/Archer C3150.png'),
(11, 'router', 'RE590T(AC1900 Universal Dual-Band Touchscreen)', 'TP-link', 900.00, 'img/products/router/RE590T.png'),
(12, 'router', 'DIR-882 (AC2600 EXO MU-MIMO Wi-Fi Router)', 'D-link', 1100.00, 'img/products/router/DIR-882.png'),
(13, 'router', 'RT-AC86U', 'ASUS', 1590.00, 'img/products/router/RT-AC86U.png');

-- --------------------------------------------------------

--
-- 資料表結構 `signuptable`
--

CREATE TABLE `signuptable` (
  `User_id` int(5) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `ContactNo` bigint(12) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `DateAndTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `signuptable`
--

INSERT INTO `signuptable` (`User_id`, `FirstName`, `LastName`, `Gender`, `ContactNo`, `EmailId`, `Password`, `DateAndTime`) VALUES
(48, 'Tino', 'Mwadeyi', 'male', 755174253, 'tinomwadeyi@gmail.com', 'Naruto06', '2017-03-19 15:17:51'),
(49, 'Test', 'Test', 'male', 4353453, 'admin@admin.co.uk', 'password', '2017-05-09 15:47:24'),
(50, 'test', 'subject', 'male', 915419944, 'asdasd@yahoo.com', '12312312', '2017-05-13 04:01:48'),
(51, 'testsubject', 'asss', 'male', 912612121, 'hanswin@yahoo.com', '12312312', '2017-05-13 04:03:04'),
(52, 'azee', 'rox', 'male', 33534545, 'azeebrox@gmail.com', 'aseeb', '2017-05-15 05:36:36'),
(54, 'kwan', 'yuhung', 'male', 12345, 'kwanyuhung@gmail.com', 'Kwan1314', '2017-11-28 03:52:19'),
(55, 'isme', 'isme', 'female', 123, 'i@gmail.com', '123', '2017-11-27 17:59:16'),
(56, 'gfgf', 'agfgfg', 'female', 1, '1@h.com', '1', '2017-11-28 10:14:47');

-- --------------------------------------------------------

--
-- 資料表結構 `speaker`
--

CREATE TABLE `speaker` (
  `id` int(25) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `path` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `speaker`
--

INSERT INTO `speaker` (`id`, `Category`, `name`, `brand`, `price`, `path`) VALUES
(1, 'speaker', 'A2+', 'Audioengine', 2340.00, 'img/products/speaker/Audioengine A2+.png'),
(2, 'speaker', 'Audio Hampden', 'Polk', 3890.00, 'img/products/speaker/Polk Audio Hampden.png'),
(3, 'speaker', 'teVolo', 'BenQ', 2090.00, 'img/products/speaker/BenQ treVolo.png'),
(15, 'speaker', 'A5+', 'Audioengine', 3690.00, 'img/products/speaker/Audioengine A5+.png'),
(16, 'speaker', 'X300A', 'KEF', 5280.00, 'img/products/speaker/KEF X300A.png'),
(17, 'speaker', 'Bose Companion 20', 'Bose', 2250.00, 'img/products/speaker/Bose Companion 20.png'),
(18, 'speaker', 'MM-1 Speakers', 'Bowers & Wilkins', 4888.00, 'img/products/speaker/B&W MM-1 Speakers.png'),
(19, 'speaker', 'Addon One', 'Audio Pro', 2480.00, 'img/products/speaker/Audio Pro Addon One.png'),
(20, 'speaker', 'e25HD', 'Edifier', 1445.00, 'img/products/speaker/Edifier e25HD.png'),
(21, 'speaker', 'NX-50', 'Yamaha', 1000.00, 'img/products/speaker/Yamaha NX-50.png'),
(22, 'speaker', 'Soundsticks III', 'Harman Kardon', 1400.00, 'img/products/speaker/Harman Kardon Soundsticks III.png'),
(23, 'speaker', 'Z623', 'Logitech', 1190.00, 'img/products/speaker/Logitech Z623.png'),
(24, 'speaker', 'ZP1000', 'Sony', 1400.00, 'img/products/speaker/Sony ZP1000.png'),
(25, 'speaker', 'MX6021', 'Altec Lansing', 1300.00, 'img/products/speaker/Altec Lansing MX6021.png'),
(26, 'speaker', 'RDP-V20IP', 'Sony', 1380.00, 'img/products/speaker/Sony RDP-V20IP.png');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Email_id`);

--
-- 資料表索引 `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`Cart_id`),
  ADD KEY `email` (`email`);

--
-- 資料表索引 `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `headphone`
--
ALTER TABLE `headphone`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `hifi`
--
ALTER TABLE `hifi`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- 資料表索引 `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `signuptable`
--
ALTER TABLE `signuptable`
  ADD PRIMARY KEY (`EmailId`),
  ADD UNIQUE KEY `User_id` (`User_id`);

--
-- 資料表索引 `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `cart1`
--
ALTER TABLE `cart1`
  MODIFY `Cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表 AUTO_INCREMENT `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `headphone`
--
ALTER TABLE `headphone`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表 AUTO_INCREMENT `hifi`
--
ALTER TABLE `hifi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表 AUTO_INCREMENT `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表 AUTO_INCREMENT `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- 使用資料表 AUTO_INCREMENT `router`
--
ALTER TABLE `router`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表 AUTO_INCREMENT `signuptable`
--
ALTER TABLE `signuptable`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用資料表 AUTO_INCREMENT `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
