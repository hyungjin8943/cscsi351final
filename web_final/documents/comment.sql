-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2012 at 07:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `url` varchar(20000) NOT NULL,
  `name` varchar(450) NOT NULL,
  `comment` longtext NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`url`, `name`, `comment`, `time`) VALUES
('http://localhost/web_final/academ.php', 'HAPPY1932', 'Like the way image gets bigger :)', '9:03 4/17/2012'),
('http://localhost/web_final/resume.php', 'Jame', 'nice resume', '5:56 4/17/2012'),
('http://localhost/web_final/academ.php', 'HI1234', 'WOW nice factory !!!', '9:02 4/17/2012'),
('http://localhost/web_final/academ.php', 'Jessy', 'COOOOOOLLL', '9:03 4/17/2012'),
('http://localhost/web_final/resume.php', 'HELLEO', 'HI good website ~~~~~~~~~~~~', '6:14 4/17/2012'),
('http://localhost/web_final/photo.php', 'Jung HO ', 'COOOOOOOOLLLLLLlolololololololololol', '11:29 4/17/2012'),
('http://localhost/web_final/photo.php', 'Alex 123', 'hahahaah ', '11:31 4/17/2012'),
('http://localhost/web_final/photo.php', 'asdf', 'cool picture', '11:46 4/17/2012');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
