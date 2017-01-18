-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 18. Jan 2017 um 14:31
-- Server Version: 10.1.19-MariaDB
-- PHP-Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `nljguser_theshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `console` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `console`
--

INSERT INTO `console` (`id`, `name`) VALUES
(1, 'PC'),
(2, 'XBOX'),
(3, 'PS4');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL COMMENT 'Foreign Key to Category',
  `manufacturer` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `releaseDate` date NOT NULL DEFAULT '2015-01-01',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Daten für Tabelle `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `category`, `manufacturer`, `releaseDate`) VALUES
(1, 'Need For Speed', 'Need for Speed, also known by its initials NFS, is a racing video game franchise published by Electronic Arts and developed by several studios including EA Black Box, Criterion Games and Ghost Games.\r\n\r\nThe series released its first title, The Need for Speed in 1994. The title comes from a famous quote from the 1986 film Top Gun. All installments of the series consist of racing cars on various tracks, with several titles including police pursuits in races. Since Need for Speed: High Stakes, the series has also integrated car body customization into gameplay.\r\n\r\nNeed for Speed is the most successful racing video game series in the world, and one of the most successful video game franchises of all time. Over 150 million copies of games in the series have been sold to date.', 1, 'EA', '2015-01-01'),
(2, 'Call of Doodle', 'Call of Duty is a first-person shooter video game franchise. The series began on Microsoft Windows, and later expanded to consoles and handhelds. Several spin-off games have been released. The earlier games in the series are set primarily in World War II, including Call of Duty, Call of Duty 2, and Call of Duty 3. Beginning with Call of Duty 4: Modern Warfare, which is set in modern times, the series has shifted focus away from World War II. Modern Warfare, released November 2007, was followed by World at War and Modern Warfare 2. Black Ops, released November 2010, takes place in the Cold War, while Modern Warfare 3, released November 2011, takes place in a near-future setting. Black Ops II, released November 2012, takes place mainly in the year 2025. Call of Duty: Ghosts was released in November 2013. In May 2014, Advanced Warfare was announced. On April 9, 2015, Treyarch announced Black Ops III.\r\n\r\nThe Call of Duty games are published and owned by Activision. While Infinity Ward is still a developer, Treyarch and Sledgehammer Games also develop several of the titles with the release of the studios'' games alternating with each other. Some games have been developed by Gray Matter Interactive, Nokia, Exakt Entertainment, Spark Unlimited, Amaze Entertainment, n-Space, Aspyr, Rebellion Developments, Ideaworks Game Studio, and nStigate Games. The games use a variety of engines, including the id Tech 3, the Treyarch NGL, and the IW engine.\r\n\r\nAs of April 2015, the Call of Duty series has sold over 175 million copies.[1][2] Sales of all Call of Duty games topped US$10 billion.[3]', 4, 'Activision', '2015-01-07'),
(3, 'Battlefield 1', 'Battlefield 1 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. It is the fifteenth installment in the Battlefield series, and the first main entry in the series since Battlefield 4.[1] The game was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 21, 2016.\r\n\r\nBattlefield 1 received very positive reviews by critics and was seen as an improvement over previous installments Battlefield 4 and Battlefield Hardline, with most praise given to its World War I theme, multiplayer modes, visuals and single-player campaign.', 4, 'EA', '2015-03-12'),
(4, 'Snow', 'Snow is precipitation in the form of flakes of crystalline water ice that falls from clouds.\r\n\r\nSince snow is composed of small ice particles, it is a granular material. It has an open and therefore soft, white, and fluffy structure, unless subjected to external pressure. Snowflakes come in a variety of sizes and shapes. Types that fall in the form of a ball due to melting and refreezing, rather than a flake, are hail, ice pellets or snow grains.\r\n\r\nThe process of precipitating snow is called snowfall. Snowfall tends to form within regions of upward movement of air around a type of low-pressure system known as an extratropical cyclone. Snow can fall poleward of these systems'' associated warm fronts and within their comma head precipitation patterns (called such due to the comma-like shape of the cloud and precipitation pattern around the poleward and west sides of extratropical cyclones). Where relatively warm water bodies are present, for example because of water evaporation from lakes, lake-effect snowfall becomes a concern downwind of the warm lakes within the cold cyclonic flow around the backside of extratropical cyclones. Lake-effect snowfall can be heavy locally. Thundersnow is possible within a cyclone''s comma head and within lake effect precipitation bands. In mountainous areas, heavy snow is possible where upslope flow is maximized within windward sides of the terrain at elevation, if the atmosphere is cold enough. Snowfall amount and its related liquid equivalent precipitation amount are measured using a variety of different rain gauges.', 1, 'Indie', '2015-10-23'),
(5, 'FIFA', 'Beschreibung', 1, 'EA', '2012-01-01'),
(6, 'Grand Theft Auto', 'Grand Theft Auto is an open world action-adventure video game series created by David Jones and Mike Dailly;[3] the later titles of which were created by brothers Dan and Sam Houser, Leslie Benzies and Aaron Garbut. It is primarily developed by Rockstar North (formerly DMA Design), and published by Rockstar Games. The name of the series references the term used in the US for motor vehicle theft.\r\n\r\nMost games in the series are set in fictional locales modelled on American cities, usually either Liberty City, Vice City, or San Andreas, which are stand-ins for New York City, Miami, and the state of California, respectively. The first game encompassed three fictional cities, while subsequent titles tend to emphasise a single city and its outlying areas. Gameplay focuses on an open world where the player can choose missions to progress an overall story, as well as engaging in side activities, all consisting of action-adventure, driving, third-person shooting, occasional role-playing, stealth, and racing elements. The series also has elements of the earlier beat ''em up games from the 16-bit era. The series has gained controversy for its adult nature and violent themes. The series focuses around many different protagonists who attempt to rise through the ranks of the criminal underworld, although their motives for doing so vary in each game. The antagonists are commonly characters who have betrayed the protagonist or his organisation, or characters who have the most impact impeding the protagonist''s progress. With its British origin, the series contains satire and humour.[4]\r\n\r\nBritish video game developer DMA Design began the series in 1997. As of 2014, it has eleven stand-alone games and four expansion packs. The third chronological title, Grand Theft Auto III, was widely acclaimed, as it brought the series to a 3D setting and more immersive experience, and is considered a landmark title that has subsequently influenced many other open world action games and led to the label "Grand Theft Auto clone" on similar games. Subsequent titles would follow and build upon the concept established in Grand Theft Auto III and the series has continued receiving significant acclaim ever since. Film and music veterans have voiced characters, including Ray Liotta, Burt Reynolds, Dennis Hopper, Samuel L. Jackson, James Woods, Debbie Harry, Phil Collins, Axl Rose, and Peter Fonda.[5] The series has been critically acclaimed and commercially successful, having shipped more than 235 million units, as of September 2015.[6] In 2006, Grand Theft Auto featured in a list of British design icons in the Great British Design Quest organised by the BBC and the Design Museum.[7] In 2013 The Telegraph ranked the GTA series among Britain''s most successful exports.[4]', 3, 'Take 2', '2013-01-01'),
(24, 'Limbo', 'Limbo ist ein 2D-Side-Scroller-Computerspiel des dÃ¤nischen Unternehmens Playdead Studios, das zunÃ¤chst nur Ã¼ber die Online-Distributionsplattform Xbox Live Arcade erhÃ¤ltlich war. Release der PlayStation-3-Version war am 20. Juli 2011 in Europa, die Windows-Version folgte am 2. August. Am 15. MÃ¤rz 2012 erschien in Deutschland, Ã–sterreich und der Schweiz Ã¼ber Headup Games eine Collectorâ€™s Edition.[2] Im Juni 2012 wurde Limbo Teil des Humble Indie Bundle V mit einer auch auf Linux spielbaren Version.[1] Verglichen mit anderen Xbox-Live-Arcade-Spielen konnte sich Limbo gut verkaufen und gewann mehrere Spielepreise. Die gesamte Spielumgebung wird unbunt dargestellt, jedes Element trÃ¤gt einen Graustufenton. Die dÃ¼stere Umgebung und die Musikuntermalung bewirken eine gruselige AtmosphÃ¤re. Laut der USK befindet sich anscheinend auch eine Wii U-Version in Entwicklung.', 2, 'Playdead St', '2016-12-10'),
(25, 'Banner Saga', 'The Banner Saga handelt von den Dredge â€“ einer kriegerischen Rasse, die die Menschen verachtet, angefÃ¼hrt von Bellower, einem fast unbesiegbaren Dredge, der sie in den Krieg fÃ¼hrt. Ein umherziehender Trupp aus Kriegern, FlÃ¼chtlingen und Varls (eine riesenÃ¤hnlichen Rasse) versucht, die Dredge zu bekÃ¤mpfen und eine Schwachstelle bei ihrem AnfÃ¼hrer Bellower zu finden. Auf der Reise werden viele Entscheidungen getroffen, die das Schicksal der Karawane beeinflussen. WÃ¤hrenddessen beginnt eine Dunkelheit die Welt zu umschlieÃŸen, als eine gigantische Schlange Erdbeben und BrÃ¼che im gesamten Land verursacht.', 2, 'Stoic Studi', '2015-12-12'),
(26, 'The Crew', 'The Crew Ultimate Edition ist eine All-in-One-Ausgabe des revolutionÃ¤ren Rennspiels. Sie enthÃ¤lt das Originalspiel The Crew mit allen Missionen und Modi, die seither erschienen sind, ausserdem die Erweiterung The Crew Wild Run plus Season-Pass-Inhalten sowie die brandneue Erweiterung The Crew Calling All Units. Das ist die ideale Edition, um das ganze FahrvergnÃ¼gen in einer riesigen, actiongeladenen Welt zu geniessen.  Erkunde die erste realistische Nachstellung der gesamten USA, die jemals fÃ¼r ein Rennspiel erschaffen wurde und hole dir mit The Crew Ultimate Edition die bislang umfassendste Ausgabe des revolutionÃ¤ren Action-Rennspiels aus dem Jahre 2014. Durchquere vÃ¶llig frei 5000 kmÂ² in dieser der Automobilkultur und dem Tempo gewidmeten offenen Welt. Setze dich ans Steuer deines Traumautos und hÃ¶re niemals auf, dir und deinen Freunden neue Herausforderungen zu stellen.', 1, 'Ubisoft', '2016-12-10');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `console_id` int(11) NOT NULL COMMENT 'Foreign Key to console',
  `price` decimal(10,0) NOT NULL,
  `sold_units` int(11) NOT NULL,
  `description` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Standart' COMMENT 'Normalerweise: Standart Edition',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `game_id`, `console_id`, `price`, `sold_units`, `description`) VALUES
(1, 1, 1, '59', 199, 'Standart'),
(3, 2, 1, '80', 1, 'Standart'),
(4, 2, 2, '80', 2, 'Standart'),
(5, 2, 3, '79', 1, 'Standart'),
(7, 3, 1, '80', 1, 'Standart'),
(8, 3, 2, '79', 45, 'Standart'),
(9, 3, 3, '87', 765, 'Standart'),
(10, 5, 1, '89', 34, 'Standart'),
(11, 5, 2, '87', 768, 'Standart'),
(12, 5, 3, '87', 345, 'Standart'),
(13, 5, 4, '234', 34, 'Standart'),
(15, 4, 1, '56', 59, 'Special'),
(16, 6, 1, '45', 666, 'Standart'),
(17, 6, 3, '756', 657, 'Standart'),
(24, 24, 2, '15', 0, 'Standard'),
(25, 24, 1, '25', 0, 'Extended'),
(26, 25, 3, '123', 0, 'Standard'),
(27, 26, 1, '49', 0, 'Standard'),
(28, 1, 2, '21', 0, 'Standard'),
(29, 26, 3, '29', 0, 'Standard');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street_number` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `first_name`, `street`, `street_number`, `postal_code`, `city`, `mail`, `password_hash`) VALUES
(1, 'admin', 'The ', 'Admin', 'Adminnstreet', 13, 3201, 'Admintown', 'admin@jeah.ch', '$2y$10$/Vcho.z3zZlASwkMscOXhOw4BFVMeNgjoxFuGtry5DzY6xMxmWTL6'),
(2, 'mmax', 'Mustermann', 'Max', 'Musterweg', 42, 3000, 'Bern', 'max.mustermann@be.ch', '$2y$10$/Vcho.z3zZlASwkMscOXhOw4BFVMeNgjoxFuGtry5DzY6xMxmWTL6'),
(3, 'test', 'Mustermann', 'Max', 'Musterweg', 42, 3000, 'Bern', 'max.mustermann@be.ch', '$2y$10$6v21Wv8wMkXJn3BFckfxAu1PRjaF.NJoHayxW.haM4O.dUkUDNJA6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
