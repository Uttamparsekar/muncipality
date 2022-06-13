-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2022 at 05:09 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth_certificate`
--

DROP TABLE IF EXISTS `birth_certificate`;
CREATE TABLE IF NOT EXISTS `birth_certificate` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `fathers_name` varchar(256) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `letter_from_hospital` int(11) NOT NULL,
  `paarents_id_proof` text NOT NULL,
  `parents_birth_certificate` text NOT NULL,
  `applicants_id_proof` text NOT NULL,
  `age_proof` text NOT NULL,
  `photo` text NOT NULL,
  `affidavit` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `wardnumber` int(100) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `image_path` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `address`, `mobile`, `wardnumber`, `subject`, `content`, `image_path`) VALUES
(1, 'manoj', 'mapusa', '12345678', 16, 'potholes', ' \r\n there are many potholes on road', NULL),
(2, 'sunil', 'panji goa', '1234567892', 16, 'potholes', ' there are many potholes on roads\r\n ', NULL),
(3, 'uttam parsekar', 'mapusa goa', '9764564483', 16, 'bad raods', ' \r\n dear sir the roads of ward number 16 are very bad.had told councilor earlier but no action was taken.i request you to take a action immedialtly. thank you', NULL),
(4, 'sunil', 'panji goa', '1234567892', 16, 'potholes', ' \r\n sir our wards roads are very bad .please take concern action thank you', NULL),
(5, 'kon tari', 'tuka kiryak zai', '10024', 16, 'potholes', 'potholes', 'images/1day4.png'),
(6, 'sunil', 'panji goa', '1234567892', 16, 'potholes', 'potholes', 'images/1day3.png'),
(7, 'satish', 'dond', '9764562298', 18, 'street liights', 'dear officer our wards street lights is not working', 'images/1day4.png'),
(8, 'uttam parsekar', 'mapusa goa', '9764564483', 12, 'st', 'street lights are not working in our ward', 'images/'),
(9, 'uttam parsekar', 'panji goa', '1234567892', 16, 'potholes', 'my name is khan', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `income_certificate`
--

DROP TABLE IF EXISTS `income_certificate`;
CREATE TABLE IF NOT EXISTS `income_certificate` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `applicants_name` varchar(256) NOT NULL,
  `fathers/husbands_name` varchar(256) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `purpose` text NOT NULL,
  `ration_cardno` int(100) NOT NULL,
  `annual_income` varchar(100) NOT NULL,
  `image_adhar` text NOT NULL,
  `image_ration` text NOT NULL,
  `image_affi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `subject` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

DROP TABLE IF EXISTS `schemes`;
CREATE TABLE IF NOT EXISTS `schemes` (
  `name` varchar(100) NOT NULL,
  `scheme_details` text NOT NULL,
  `eligibility` varchar(256) NOT NULL,
  `last_date_to_apply` text NOT NULL,
  `doc_required` text NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` int(100) NOT NULL,
  `address` text NOT NULL,
  `wardnumber` varchar(50) NOT NULL,
  `profession` varchar(256) NOT NULL,
  `pincode` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `uniue_id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `age`, `mobile`, `address`, `wardnumber`, `profession`, `pincode`) VALUES
(1, 'krishna', 'asdfg', 45, 987654321, 'panji goa', '16', 'student', 45678),
(2, 'akshay', 'kumar', 67, 6455281, 'panji goa', '16', 'student', 45678),
(3, 'teslin', 'sir', 28, 1234, 'mapusa', '16', 'teacher', 403507),
(4, 'narendra', 'modi', 27, 4567, 'mapusa', '16', 'teacher', 403507),
(5, 'satish', 'dond@123', 65, 7890, 'panji goa', '13', 'teacher', 403507),
(6, 'nehal', 'nehal@5', 21, 12345, 'panji goa', '18', 'student', 45678),
(7, 'rasik', 'rasik@', 21, 9876, '', '18', 'student', 45678),
(8, 'neali', 'nehali@', 21, 5678, '', '16', 'student', 45678),
(9, 'consistency', 'dedication123', 21, 1122334455, 'panji goa', '12', 'student', 45678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
