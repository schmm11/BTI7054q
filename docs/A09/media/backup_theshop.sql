-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Nov 2016 um 16:13
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `theshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Sport'),
(2, 'Taktik'),
(3, 'Adventure'),
(4, 'Shooter');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `console`
--

CREATE TABLE `console` (
  `id` int(11) NOT NULL,
  `name` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `console`
--

INSERT INTO `console` (`id`, `name`) VALUES
(1, 'PC'),
(2, 'XBOX'),
(3, 'PS 4');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL COMMENT 'Foreign Key to Category',
  `manufacturer` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `category`, `manufacturer`) VALUES
(1, 'Need For Speed', 'Beschreibung zu dem Rennspiel', 1, 'Nintendo'),
(2, 'Call of Doodle', 'Bla Blubber Beschreibung', 4, 'Activision'),
(3, 'Battlefield 1', 'Beschreibung would be here', 4, 'EA'),
(4, 'Snow', 'Juhu Schnee', 1, 'Indie'),
(5, 'FIFA', 'Beschreibung', 1, 'EA'),
(6, 'Grand Theft Auto', 'Beschreibung', 3, 'Take 2');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `console_id` int(11) NOT NULL COMMENT 'Foreign Key to console',
  `price` decimal(10,0) NOT NULL,
  `sold_units` int(11) NOT NULL,
  `description` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Standart' COMMENT 'Normalerweise: Standart Edition'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `game_id`, `console_id`, `price`, `sold_units`, `description`) VALUES
(1, 1, 1, '59', 199, 'Standart'),
(3, 2, 1, '80', 1, 'Standart'),
(4, 2, 2, '80', 2, 'Standart'),
(5, 2, 3, '79', 1, 'Standart'),
(6, 2, 1, '100', 100, ''),
(7, 3, 1, '80', 1, 'Standart'),
(8, 3, 2, '79', 45, 'Standart'),
(9, 3, 3, '87', 765, 'Standart'),
(10, 5, 1, '89', 34, 'Standart'),
(11, 5, 2, '87', 768, 'Standart'),
(12, 5, 3, '87', 345, 'Standart'),
(13, 5, 4, '234', 34, 'Standart'),
(14, 4, 1, '23', 765, 'Standart'),
(15, 4, 1, '56', 59, 'Special'),
(16, 6, 1, '45', 666, 'Standart'),
(17, 6, 3, '756', 657, 'Standart');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street_number` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `console`
--
ALTER TABLE `console`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
