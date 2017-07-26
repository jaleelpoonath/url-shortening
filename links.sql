-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 10:13 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `links`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_url_unique` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `short_url`, `created_at`, `updated_at`) VALUES
(7, 'https://www.google.co.in/search?q=where+do+i+add+js+and+css+laravel&rlz=1C1RLNS_enIN716IN716&oq=where+do+i+add+js+and+css+laravel&aqs=chrome..69i57j0.10175j0j4&sourceid=chrome&ie=UTF-8', 'http://localhost:8000712YUA17', '2017-07-26 02:30:05', '2017-07-26 02:30:05'),
(8, 'https://www.google.co.in/search?rlz=1C1RLNS_enIN716IN716&q=create+random+character+php+laravel&oq=create+random+character+php+laravel&gs_l=psy-ab.3...38555.40241.0.40622.8.8.0.0.0.0.214.1053.0j6j1.7.0....0...1.1.64.psy-ab..1.6.873...0i22i30k1j33i22i29i30k', 'http://localhost:8000/E9BI5W17', '2017-07-26 02:33:49', '2017-07-26 02:33:49'),
(9, 'https://www.w3schools.com/jquery/jquery_css.asp', 'http://localhost:8000/9XRRS917', '2017-07-26 02:34:57', '2017-07-26 02:34:57'),
(10, 'https://www.google.co.in/search?rlz=1C1RLNS_enIN716IN716&q=jquery+css+style&oq=jquery+css&gs_l=psy-ab.3.1.0l4.476374.479044.0.480660.10.10.0.0.0.0.174.1310.0j9.9.0....0...1.1.64.psy-ab..1.9.1310...0i131k1j0i67k1.16kVMoPYl44', 'http://localhost:8000/IK9SWU17', '2017-07-26 02:35:22', '2017-07-26 02:35:22'),
(11, 'http://gbcdonline.com/beta/page/services', 'http://localhost:8000/3CALQ317', '2017-07-26 02:36:00', '2017-07-26 02:36:00'),
(12, 'https://www.google.co.in/search?rlz=1C1RLNS_enIN716IN716&q=non-static+method+app+laravel+error&oq=non-static+method+app+laravel+error&gs_l=psy-ab.3...337616.342953.0.343190.14.14.0.0.0.0.347.2028.0j11j0j1.12.0....0...1.1.64.psy-ab..2.11.1831...0j0i22i30k1', 'http://localhost:8000/4QJ5J617', '2017-07-26 02:36:59', '2017-07-26 02:36:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
