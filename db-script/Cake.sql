-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 05:04 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customerName` varchar(100) NOT NULL,
  `cakeType` int(10) NOT NULL,
  `requestCreated` datetime NOT NULL,
  `requestDue` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` VALUES('Wei', 2, '2012-10-18 16:45:15', '2012-10-26 16:45:18', 2, NULL);
INSERT INTO `orders` VALUES('Alex', 2, '2012-10-19 15:21:42', '2012-10-20 15:21:45', 10, NULL);
INSERT INTO `orders` VALUES('Pavel', 1, '2012-10-24 15:21:55', '2012-10-27 15:21:59', 13, NULL);
INSERT INTO `orders` VALUES('Ezekiel', 1, '2012-10-19 15:22:40', '2012-10-31 15:22:43', 14, NULL);
INSERT INTO `orders` VALUES('mmmCake', 2, '2012-10-24 01:31:00', '2012-10-24 01:31:00', 15, NULL);
INSERT INTO `orders` VALUES('fewfef', 1, '2012-10-24 01:35:00', '2012-10-24 01:35:00', 16, NULL);
INSERT INTO `orders` VALUES('vevefwe', 1, '2012-10-24 01:36:00', '2012-10-24 01:36:00', 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'admin', 'admin', 'admin', '2012-10-24 00:14:25', '2012-10-24 00:14:25');
INSERT INTO `users` VALUES(2, 'admin', '891226c92695035081bedb06ec4def6cb91eb0e9', 'admin', '2012-10-24 01:03:55', '2012-10-24 01:03:55');
INSERT INTO `users` VALUES(3, 'user', '904a821ae3d76f09a313f5520f2fcfe0e9f38ea1', 'user', '2012-10-24 01:31:13', '2012-10-24 01:31:13');
