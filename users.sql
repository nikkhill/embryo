-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 12:19 PM
-- Server version: 5.5.32-MariaDB
-- PHP Version: 5.5.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `phone`) VALUES
(1, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.', 0),
(19, 'nikhil', '$1$XTT..7Qt$AUImZkrJmqCfn21tLnHSy1', 7777788888),
(20, 'bhale', '$1$6/qv8KyE$T9CTFSaccJpI3CTAG3RQ31', 7979846459),
(21, 'neeraj', '$1$sgzlysJJ$GwS.3ffW3cbBeB2hHQ777.', 9999944444),
(22, 'akshay', '$1$KkwuLIcf$8uKwvLHkGA8IHLfNU/X//1', 1111122222),
(23, 'pratik', '$1$Jol4WDfx$Xm41cGicSjZ86c88cqxki/', 9999999991),
(24, 'nikhil12', '$1$Iug/x7kC$oiLp/esKPxARRjtfBJ.Iz.', 1111122222),
(25, 'nikhil g', '$1$v3670GHO$o864l828ypZLOipGoDpDo/', 1234567890),
(26, 'nikb', '$1$n3kqkOB1$ZJ4XDi9Fm/dwn7QiqSjT11', 4444455555),
(27, 'yo123', '$1$Vq2u2LHK$bU4L/iuS.O9ZIHQGL8Sk8.', 7897897894);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
