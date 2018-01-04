-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2014 at 01:08 AM
-- Server version: 5.5.37
-- PHP Version: 5.5.12-2+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exceptio_mydev`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_details`
--

CREATE TABLE IF NOT EXISTS `assessment_details` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(12) DEFAULT NULL,
  `AssSc1` varchar(5) DEFAULT NULL,
  `AssSc2` varchar(5) DEFAULT NULL,
  `AssSc3` varchar(5) DEFAULT NULL,
  `AssSc4` varchar(5) DEFAULT NULL,
  `AssSc5` varchar(5) DEFAULT NULL,
  `AssSc6` varchar(5) DEFAULT NULL,
  `AssSc7` varchar(5) DEFAULT NULL,
  `AssSc8` varchar(5) DEFAULT NULL,
  `AssSc9` varchar(5) DEFAULT NULL,
  `AssCo1` varchar(5) DEFAULT NULL,
  `AssCo2` varchar(5) DEFAULT NULL,
  `AssCo3` varchar(5) DEFAULT NULL,
  `AssCo4` varchar(5) DEFAULT NULL,
  `AssCo5` varchar(5) DEFAULT NULL,
  `AssCo6` varchar(5) DEFAULT NULL,
  `AssCo7` varchar(5) DEFAULT NULL,
  `AssCo8` varchar(5) DEFAULT NULL,
  `AssCo9` varchar(5) DEFAULT NULL,
  `AssCo10` varchar(5) DEFAULT NULL,
  `AssCo11` varchar(5) DEFAULT NULL,
  `AssCo12` varchar(5) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assessment_details`
--

INSERT INTO `assessment_details` (`id`, `user_id`, `AssSc1`, `AssSc2`, `AssSc3`, `AssSc4`, `AssSc5`, `AssSc6`, `AssSc7`, `AssSc8`, `AssSc9`, `AssCo1`, `AssCo2`, `AssCo3`, `AssCo4`, `AssCo5`, `AssCo6`, `AssCo7`, `AssCo8`, `AssCo9`, `AssCo10`, `AssCo11`, `AssCo12`, `last_update`) VALUES
(1, '1', '60', '80', '20', '40', '60', '20', '80', '60', '40', '0', '20', '40', '60', '80', '100', '80', '60', '40', '20', '0', '100', '2014-06-13 11:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(60) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `ex_access` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7111dbb3aa3c61b684b206f72b2630d6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/34.0.1847.116 Chrome/34.0.1847.116 ', 1402771886, 'a:2:{s:9:"user_data";s:0:"";s:5:"login";a:1:{s:7:"user_id";s:1:"1";}}');

-- --------------------------------------------------------

--
-- Table structure for table `development_cat`
--

CREATE TABLE IF NOT EXISTS `development_cat` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(150) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `development_cat`
--

INSERT INTO `development_cat` (`id`, `cat_name`, `last_update`) VALUES
(1, 'Risk Assessment/ Management', '2014-06-13 16:47:52'),
(2, 'Business Acumen', '2014-06-13 16:47:52'),
(3, 'Talent Development', '2014-06-13 16:47:52'),
(4, 'Vendor/ supplier Management', '2014-06-13 16:47:52'),
(5, 'IT Control Standard', '2014-06-13 16:47:52'),
(6, 'Budget management', '2014-06-13 16:47:52'),
(7, 'Organizational Agility', '2014-06-13 16:47:52'),
(8, 'Regulatory Knowledge', '2014-06-13 16:47:52'),
(9, 'Incident Response', '2014-06-13 16:47:52'),
(10, 'Relationship Management', '2014-06-13 16:47:52'),
(11, 'Team Work', '2014-06-13 16:47:52'),
(12, 'Process Oriented', '2014-06-13 16:47:52'),
(13, 'Decision Making', '2014-06-13 16:47:52'),
(14, 'Influencing', '2014-06-13 16:47:52'),
(15, 'Creativity', '2014-06-13 16:47:52'),
(16, 'Learning Ability', '2014-06-13 16:47:52'),
(17, 'Analytical Ability', '2014-06-13 16:47:52'),
(18, 'Organizational Awareness', '2014-06-13 16:47:52'),
(19, 'Prioritization', '2014-06-13 16:47:52'),
(20, 'Business Results-Oriented', '2014-06-13 16:47:52'),
(21, 'Communication', '2014-06-13 16:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `development_details`
--

CREATE TABLE IF NOT EXISTS `development_details` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(5) DEFAULT NULL,
  `cat_name` varchar(150) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `item_name` varchar(150) DEFAULT NULL,
  `goal_date` varchar(50) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `development_sub_cat`
--

CREATE TABLE IF NOT EXISTS `development_sub_cat` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(150) DEFAULT NULL,
  `item_name` varchar(150) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `development_sub_cat`
--

INSERT INTO `development_sub_cat` (`id`, `cat_name`, `item_name`, `last_update`) VALUES
(1, 'act', 'Campus Recruiting', '2014-06-13 18:08:08'),
(2, 'act', 'Work with TIPL or other international resources', '2014-06-13 18:08:08'),
(3, 'act', 'Present a topic to a large group', '2014-06-13 18:08:08'),
(4, 'act', 'Host a learning session', '2014-06-13 18:08:08'),
(5, 'act', 'Host a Community of Interest', '2014-06-13 18:08:08'),
(6, 'act', 'Be a Mentor and an LDP Resource', '2014-06-13 18:08:08'),
(7, 'tra', 'Basics of Effective Communication', '2014-06-13 18:08:08'),
(8, 'tra', 'Communicating Clearly', '2014-06-13 18:08:08'),
(9, 'tra', 'Effective Listening', '2014-06-13 18:08:08'),
(10, 'tra', 'Strategies for Communicating with Tact and Diplomacy', '2014-06-13 18:08:08'),
(11, 'tra', 'Interpersonal Communication: Begin Approcahable', '2014-06-13 18:08:08'),
(12, 'tra', 'Interpersonal Communication: Communicating Assertively', '2014-06-13 18:08:08'),
(13, 'tra', 'Interpersonal Communication: Listening Essentials', '2014-06-13 18:08:08'),
(14, 'tra', 'Interpersonal Communication: Targeting Your Message', '2014-06-13 18:08:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
