-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 07:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `threadid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `userid`, `threadid`, `status`) VALUES
(1, 2, 18, 1),
(2, 2, 17, 0),
(3, 4, 15, 0),
(4, 4, 14, 1),
(11, 2, 14, 1),
(12, 2, 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `name`, `type`, `description`, `admin`) VALUES
(14, 'Harshit', '1private', 'abcd', 2),
(15, 'hutiye', '1private', 'hudai', 3),
(16, 'hgharshit', 'ji', 'hi', 1),
(17, 'harshhh', 'ddd', 'dd', 1),
(18, 'dddd', 'ddd', 'dd', 2),
(19, 'hhh', '1private', '14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` mediumtext NOT NULL,
  `regno` varchar(10) NOT NULL,
  `year` varchar(100) NOT NULL,
  `programme` varchar(11) NOT NULL,
  `branch` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `regno`, `year`, `programme`, `branch`) VALUES
(2, 'Harshit Shah', 'hsallbd@gmail.com', '202cb962ac59075b964b07152d234b70', '20144144', 'first', 'btech', 'CSE'),
(3, 'Anshul', 'h1@gmail.com', '202cb962ac59075b964b07152d234b70', '123654', 'first', 'btech', '96'),
(4, 'Anshul Singh', '98abn@gmail.com', '202cb962ac59075b964b07152d234b70', '20148091', 'first', 'btech', 'it');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
