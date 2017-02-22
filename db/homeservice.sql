-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 07:28 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homeservice`
--
CREATE DATABASE IF NOT EXISTS `homeservice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `homeservice`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(256) NOT NULL,
  `admin_email` varchar(256) NOT NULL,
  `admin_password` varchar(256) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_status` varchar(11) NOT NULL DEFAULT '1',
  `admin_login_date` datetime NOT NULL,
  `admin_updated_date` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`, `admin_status`, `admin_login_date`, `admin_updated_date`) VALUES
(1, 'brijesh kumar', 'brijesh101@gmail.com', '3ca6dcb467c9ca94b66db6ac51a06e04efe994eb', 'profile.jpg', '1', '2017-02-08 10:47:12', '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE IF NOT EXISTS `service_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_parent_id` varchar(255) NOT NULL,
  `cat_status` varchar(20) NOT NULL DEFAULT '1',
  `cat_image` text NOT NULL,
  `cat_created_date` datetime NOT NULL,
  `cat_updated_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`cat_id`, `cat_name`, `cat_parent_id`, `cat_status`, `cat_image`, `cat_created_date`, `cat_updated_date`) VALUES
(1, 'electrical', '1', '0', '148649709320170207.png', '2017-02-05 00:00:00', '2017-02-07 20:51:33'),
(2, 'plumbing', '0', '1', '148630848020170205.png', '2017-02-05 16:28:00', '2017-02-07 20:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email_id` varchar(100) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `user_state` varchar(30) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_pic` text,
  `user_status` varchar(10) NOT NULL DEFAULT '0',
  `user_created_date` datetime NOT NULL,
  `user_updated_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email_id`, `user_mobile`, `user_password`, `user_city`, `user_state`, `user_address`, `user_pic`, `user_status`, `user_created_date`, `user_updated_date`) VALUES
(26, 'brijesh kumar', 'brijew121@gmail.com', '9582338275', '3ca6dcb467c9ca94b66db6ac51a06e04efe994eb', 'varanasi', 'up', '3456 E. Wieding Road \r\nTucson AZ, 3456', NULL, '1', '2017-02-20 08:37:05', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
