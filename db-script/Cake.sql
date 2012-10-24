-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2012 at 09:21 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cake`
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

INSERT INTO `orders` (`customerName`, `cakeType`, `requestCreated`, `requestDue`, `id`, `user_id`) VALUES
('Wei', 2, '2012-10-18 16:45:15', '2012-10-26 16:45:18', 2, NULL),
('Alex', 2, '2012-10-19 15:21:42', '2012-10-20 15:21:45', 10, NULL),
('Pavel', 1, '2012-10-24 15:21:55', '2012-10-27 15:21:59', 13, NULL),
('Ezekiel', 1, '2012-10-19 15:22:40', '2012-10-31 15:22:43', 14, NULL),
('mmmCake', 2, '2012-10-24 01:31:00', '2012-10-24 01:31:00', 15, NULL),
('fewfef', 1, '2012-10-24 01:35:00', '2012-10-24 01:35:00', 16, NULL),
('vevefwe', 1, '2012-10-24 01:36:00', '2012-10-24 01:36:00', 17, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', 'admin', 'admin', '2012-10-24 00:14:25', '2012-10-24 00:14:25'),
(2, 'admin', '891226c92695035081bedb06ec4def6cb91eb0e9', 'admin', '2012-10-24 01:03:55', '2012-10-24 01:03:55'),
(3, 'user', '904a821ae3d76f09a313f5520f2fcfe0e9f38ea1', 'user', '2012-10-24 01:31:13', '2012-10-24 01:31:13'),
(4, 'chocolate', '113baa9bd98c295d83d2ce204f305b12dd84043b', 'admin', '2012-10-24 07:22:28', '2012-10-24 07:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'first post', 'woohhoo cake!! shake and bake!!! :)', '2012-10-24 09:50:24', '2012-10-24 10:11:40');
