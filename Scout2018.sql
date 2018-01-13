-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2018 at 01:33 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Scout2018`
--
CREATE DATABASE IF NOT EXISTS `Scout2018` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Scout2018`;

-- --------------------------------------------------------

--
-- Table structure for table `TeamKeys`
--

DROP TABLE IF EXISTS `TeamKeys`;
CREATE TABLE IF NOT EXISTS `TeamKeys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teamKey` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `Teams`
--

DROP TABLE IF EXISTS `Teams`;
CREATE TABLE IF NOT EXISTS `Teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teamName` varchar(250) DEFAULT NULL,
  `teamNumber` int(11) DEFAULT NULL,
  `comments` text,
  `groundCubes` varchar(11) DEFAULT NULL,
  `returnCubes` varchar(11) DEFAULT NULL,
  `stackCubes` varchar(11) DEFAULT NULL,
  `switch` varchar(11) DEFAULT NULL,
  `scale` varchar(11) DEFAULT NULL,
  `climb` varchar(11) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `losses` int(11) DEFAULT NULL,
  `forces` int(11) DEFAULT NULL,
  `boosts` int(11) DEFAULT NULL,
  `levitates` int(11) DEFAULT NULL,
  `timeScale` int(11) DEFAULT NULL,
  `timeSwitch` int(11) DEFAULT NULL,
  `driveTrainType` varchar(30) DEFAULT NULL,
  `liftOthers` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
