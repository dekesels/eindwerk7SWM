-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 10:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stefanie`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefoon` int(11) NOT NULL,
  `adres` varchar(25) NOT NULL,
  `woonplaats` varchar(25) NOT NULL,
  `postcode` int(4) NOT NULL,
  `bedrijf` varchar(25) NOT NULL,
  `vraag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `wachtwoord` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rank` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `naam`, `wachtwoord`, `email`, `rank`) VALUES
(9, 'stefanie', '23430838a76292176983bf3bfe185f61', 'stefanie.dekesel@gmail.com', 1),
(10, 'kekeroo', '4e4d6c332b6fe62a63afe56171fd3725', 'kekeroowastaken@gmail.com', 1),
(11, 'stefanie', '657f8b8da628ef83cf69101b6817150a', 'stefanie.dekesel@gmail.com', 1),
(12, 'stefanie', '23430838a76292176983bf3bfe185f61', 'stefanie.dekesel@gmail.com', 1),
(13, 'bob', 'edeee8f93fded5d72328f773125fb118', 'kekeroowastaken@gmail.com', 1),
(14, 'jefke', 'dbff2130761798185f6915a1434d63ee', 'stefanie.dekesel@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefoon` tinyint(15) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `postcode` int(4) NOT NULL,
  `bedrijf` varchar(50) NOT NULL,
  `betaalmethodes` int(3) DEFAULT NULL,
  `lemon` int(11) NOT NULL,
  `raspberry` int(11) NOT NULL,
  `peach` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `voornaam`, `naam`, `email`, `telefoon`, `adres`, `woonplaats`, `postcode`, `bedrijf`, `betaalmethodes`, `lemon`, `raspberry`, `peach`) VALUES
(2, '', 'Testende', '', 0, '', '', 0, '', NULL, 6, 5, 6),
(3, '', 'Testende', '', 0, '', '', 0, '', NULL, 6, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `product_id` smallint(6) UNSIGNED NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `uitleg` varchar(100) NOT NULL,
  `prijs` decimal(6,2) DEFAULT NULL,
  `foto` varchar(150) DEFAULT 'geen.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`product_id`, `naam`, `uitleg`, `prijs`, `foto`) VALUES
(1, 'Citroen', 'Je zure vriend die eerder zorgt voor een explosie van smaak in je mond', '1.59', 'images/citroen.svg'),
(2, 'Framboos', 'De gulden middenweg, heeft zowel een explosie van smaak als een zoete nasmaak', '1.59', 'image/framboos.svg'),
(3, 'Perzik', 'Je zoete vriend die ook zoet is zonder een bom van suikers', '1.59', 'images/peach.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `product_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
