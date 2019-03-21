-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Dez 2018 um 19:52
-- Server-Version: 10.1.33-MariaDB
-- PHP-Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `markup`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `material` varchar(50) NOT NULL,
  `shape` varchar(50) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `fFamily` varchar(255) NOT NULL,
  `fSize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `material`, `shape`, `color`, `text`, `icon`, `fFamily`, `fSize`) VALUES
(45, 'leather', 'heart', 'rgba(0,0,0,0);', 'Hier bitte den Text eingeben', 'fas fa-smile', 'Arial Black', '20'),
(46, 'metal', 'star', 'maroon', 'Apple Talk', 'fab fa-apple', 'Comic Sans MS', '32'),
(47, 'metal', 'circle', '#99003d', 'Happy Birthday', 'fas fa-birthday-cake', 'Comic Sans MS', '32'),
(48, 'metal', 'star', '#99003d', 'Coffee Star', 'fas fa-coffee', 'Arial Black', '24'),
(49, 'leather', 'circle', 'maroon', 'Hier bitte den Text eingeben', 'fab fa-apple', 'Impact', '32'),
(50, 'metal', 'star', '#006699', 'Hier bitte den Text eingeben', 'fas fa-smile', 'Arial Black', '20'),
(51, 'leather', 'star', 'goldenrod', 'Party', 'fas fa-smile', 'Comic Sans MS', '32'),
(52, 'metal', 'circle', '#99003d', 'Schönes Wochenende', 'fas fa-coffee', 'Comic Sans MS', '32'),
(53, 'leather', 'circle', '<br /><b>Notice</b>:  Undefined index: color in <b', 'Glückwunsch zum Führerschein', 'fas fa-car', 'Comic Sans MS', '24'),
(54, 'metal', 'heart', '#006600', 'Guten Tag', 'fas fa-smile', 'Arial Black', '32');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
