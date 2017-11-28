-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017 年 11 月 28 日 05:50
-- 伺服器版本: 10.1.26-MariaDB
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `products`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cable`
--

CREATE TABLE `cable` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `cap`
--

CREATE TABLE `cap` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` varchar(50) DEFAULT NULL,
  `Imagepath` varchar(500) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Total_price` bigint(50) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `temp` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `headphone`
--

CREATE TABLE `headphone` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `hifi`
--

CREATE TABLE `hifi` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `keyboard`
--

CREATE TABLE `keyboard` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `mouse`
--

CREATE TABLE `mouse` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `mouse`
--

INSERT INTO `mouse` (`id`, `name`, `brand`, `price`, `pic`) VALUES
(1, 'Deathadder Elite', 'Razer', 459.00, ''),
(2, 'G903 LIGHTSPEED', 'Logitech', 1299.00, '');

-- --------------------------------------------------------

--
-- 資料表結構 `pants`
--

CREATE TABLE `pants` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `portspeaker`
--

CREATE TABLE `portspeaker` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
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
-- 資料表結構 `shirt`
--

CREATE TABLE `shirt` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `speaker`
--

CREATE TABLE `speaker` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` double(7,2) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cable`
--
ALTER TABLE `cable`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cap`
--
ALTER TABLE `cap`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cart1`
--
ALTER TABLE `cart1`
  ADD PRIMARY KEY (`Cart_id`),
  ADD KEY `email` (`email`);

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
-- 資料表索引 `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portspeaker`
--
ALTER TABLE `portspeaker`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `cable`
--
ALTER TABLE `cable`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `cap`
--
ALTER TABLE `cap`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `cart1`
--
ALTER TABLE `cart1`
  MODIFY `Cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `headphone`
--
ALTER TABLE `headphone`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `hifi`
--
ALTER TABLE `hifi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `pants`
--
ALTER TABLE `pants`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `portspeaker`
--
ALTER TABLE `portspeaker`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `router`
--
ALTER TABLE `router`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表 AUTO_INCREMENT `shirt`
--
ALTER TABLE `shirt`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
