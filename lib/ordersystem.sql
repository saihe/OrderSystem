-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 4 朁E02 日 10:59
-- サーバのバージョン： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ordersystem`
--
CREATE DATABASE IF NOT EXISTS `ordersystem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ordersystem`;

-- --------------------------------------------------------

--
-- テーブルの構造 `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` varchar(32) NOT NULL DEFAULT '' COMMENT 'yyyymmdd_hhmm_[0-9[0-9]',
  `number` int(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `histories`
--

DROP TABLE IF EXISTS `histories`;
CREATE TABLE IF NOT EXISTS `histories` (
  `id` int(255) NOT NULL,
  `customer_id` varchar(32) DEFAULT NULL COMMENT 'yyyymmdd_hhmm_[0-9][0-9]',
  `product_id` int(128) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(128) NOT NULL,
  `cord` varchar(8) NOT NULL DEFAULT '',
  `name` varchar(128) DEFAULT NULL,
  `unit_price` int(6) DEFAULT NULL,
  `type_id` int(1) DEFAULT NULL COMMENT '1: drink/ 2: food',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`id`, `cord`, `name`, `unit_price`, `type_id`, `created`, `modified`) VALUES
(1, 'D001', 'ビール', 500, 1, '2016-03-31 00:00:00', '2016-03-31 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `product_types`
--

DROP TABLE IF EXISTS `product_types`;
CREATE TABLE IF NOT EXISTS `product_types` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL COMMENT 'drink/food',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'drink', '2016-04-02 00:00:00', '2016-04-02 00:00:00'),
(2, 'food', '2016-04-02 00:00:00', '2016-04-02 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`,`cord`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
