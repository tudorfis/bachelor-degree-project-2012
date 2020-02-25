-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2012 at 08:13 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dictionar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibliografie`
--

CREATE TABLE IF NOT EXISTS `bibliografie` (
  `uid` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `definitii_de`
--

CREATE TABLE IF NOT EXISTS `definitii_de` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `definitii_en`
--

CREATE TABLE IF NOT EXISTS `definitii_en` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `definitii_fr`
--

CREATE TABLE IF NOT EXISTS `definitii_fr` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `definitii_ro`
--

CREATE TABLE IF NOT EXISTS `definitii_ro` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` text NOT NULL,
  `sumar` text NOT NULL,
  `definitie` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `documentatie`
--

CREATE TABLE IF NOT EXISTS `documentatie` (
  `uid` int(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE IF NOT EXISTS `imagini` (
  `uid` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `uid` int(10) NOT NULL,
  `embed` varchar(255) NOT NULL,
  `tip_film` varchar(255) NOT NULL,
  `titlu` text NOT NULL,
  `data_crearii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_modificarii` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
