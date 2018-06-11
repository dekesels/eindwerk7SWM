-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 jun 2018 om 12:10
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dekesels`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `email` char(50) NOT NULL,
  `telefoon` int(12) NOT NULL,
  `adres` varchar(25) NOT NULL,
  `woonplaats` varchar(25) NOT NULL,
  `postcode` int(4) NOT NULL,
  `bedrijf` varchar(25) NOT NULL,
  `vraag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `voornaam`, `naam`, `email`, `telefoon`, `adres`, `woonplaats`, `postcode`, `bedrijf`, `vraag`) VALUES
(1, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.co', 494815017, '', '', 0, '', 'Help'),
(2, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'Help'),
(3, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'Help'),
(4, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'Help'),
(5, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'Help'),
(6, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'Werkt dit?'),
(7, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'hahz'),
(8, 'stefanie', 'de kesel', 'stefanie.dekesel@gmail.com', 494815017, '', '', 0, '', 'hhh'),
(9, 'stefanie', 'de kesel', 'dekesels@visocloud.org', 494815017, '', '', 0, '', 'hh'),
(10, 'stefanie', 'de kesel', 'dekesels@visocloud.org', 494815017, '', '', 0, '', 'hh'),
(11, 'stefanie', 'de kesel', 'dekesels@visocloud.org', 494815017, '', '', 0, '', 'hh');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `wachtwoord` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rank` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `naam`, `wachtwoord`, `email`, `rank`) VALUES
(17, 'admin', '14edf29b2448f22c66643b59d048462f', 'stefanie.dekesel@gmail.com', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `onderwerp` varchar(100) NOT NULL,
  `brief` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `mail`
--

INSERT INTO `mail` (`id`, `onderwerp`, `brief`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuwsbrief`
--

CREATE TABLE `nieuwsbrief` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `newsletter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nieuwsbrief`
--

INSERT INTO `nieuwsbrief` (`id`, `email`, `newsletter`) VALUES
(1, 'stefanie.dekesel@gmail.com', 2),
(2, 'stefanie.dekesel@gmail.com', 2),
(3, 'stefanie.dekesel@gmail.com', 2),
(4, 'stefanie.dekesel@gmail.com', 2),
(5, 'stefanie.dekesel@gmail.com', 2),
(6, 'dekesels@visocloud.org', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefoon` int(12) NOT NULL,
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
-- Gegevens worden geëxporteerd voor tabel `order_product`
--

INSERT INTO `order_product` (`id`, `voornaam`, `naam`, `email`, `telefoon`, `adres`, `woonplaats`, `postcode`, `bedrijf`, `betaalmethodes`, `lemon`, `raspberry`, `peach`) VALUES
(2, '', 'Testende', '', 0, '', '', 0, '', NULL, 6, 5, 6),
(3, '', 'Testende', '', 0, '', '', 0, '', NULL, 6, 9, 5),
(4, '', '', '', 0, '', '', 0, '', NULL, 1, 1, 1),
(5, '', 'De Kesel', '', 0, '', '', 0, '', NULL, 4, 2, 2),
(6, '', '', '', 0, '', '', 0, '', NULL, 1, 7500, 1),
(7, 'Stefanie', 'De Kesel', '', 0, '', '', 0, '', NULL, 1, 1, 9000),
(8, 'Stefanie', 'De Kesel', '', 127, 'Vlamingstraat 31', 'Eeklo', 9900, '', NULL, 1, 1, 1200),
(9, 'Stefanie', 'De Kesel', '', 127, 'Vlamingstraat 31 ', 'Eeklo', 9900, '', NULL, 666, 666, 666),
(10, 'Stefanie', 'De Kesel', '', 127, 'Vlamingstraat 31', 'Eeklo', 9900, '', NULL, 1, 1, 1),
(11, 'Stefanie', 'De Kesel', '', 494815017, 'Vlamingstraat 31', 'Eeklo', 9900, '', NULL, 1, 1, 1),
(12, 'stefanie', 'de kesel', '', 494815017, 'Vlamingstraat 31', 'Eeklo', 9900, '', NULL, 1, 1, 1),
(13, 'stefanie', 'de kesel', '', 494815017, 'vlamingstraat 31', 'Eeklo', 9900, '', NULL, 1, 4, 1),
(14, 'stefanie', 'de kesel', '', 494815017, 'vlamingstraat 31', 'Eeklo', 9900, '', 2, 1, 1, 1),
(15, 'Stefanie', 'De Kesel', '', 494815017, 'Vlamingstraat 31', 'Eeklo', 9900, '', 3, 5, 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `product_id` smallint(6) UNSIGNED NOT NULL,
  `naam` varchar(50) DEFAULT NULL,
  `uitleg` varchar(100) NOT NULL,
  `prijs` decimal(6,2) DEFAULT NULL,
  `foto` varchar(150) DEFAULT 'geen.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`product_id`, `naam`, `uitleg`, `prijs`, `foto`) VALUES
(1, 'Citroen', 'Je zure vriend die eerder zorgt voor een explosie van smaak in je mond', '1.59', 'images/citroen.svg'),
(2, 'Framboos', 'De gulden middenweg, heeft zowel een explosie van smaak als een zoete nasmaak', '1.59', 'image/framboos.svg'),
(3, 'Perzik', 'Je zoete vriend die ook zoet is zonder een bom van suikers', '1.59', 'images/peach.svg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `product_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
