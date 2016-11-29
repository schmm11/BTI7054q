-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Nov 2016 um 19:01
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `phpmyadmin`
--
DROP DATABASE `phpmyadmin`;
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Daten für Tabelle `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"theshop","table":"product"},{"db":"theshop","table":"game"},{"db":"theshop","table":"console"},{"db":"theshop","table":"users"},{"db":"theshop","table":"category"},{"db":"shop","table":"test"},{"db":"webshop","table":"products"},{"db":"theshop","table":"productversion"},{"db":"theshop","table":"productVersion"},{"db":"theShop","table":"console"}]');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Daten für Tabelle `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'theshop', 'product', '{"sorted_col":"`product`.`game_id` ASC"}', '2016-11-23 16:33:51'),
('root', 'theshop', 'productversion', '{"sorted_col":"`productversion`.`price` ASC"}', '2016-11-01 19:16:59');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Daten für Tabelle `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-11-01 17:16:46', '{"lang":"de","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indizes für die Tabelle `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indizes für die Tabelle `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indizes für die Tabelle `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indizes für die Tabelle `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indizes für die Tabelle `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indizes für die Tabelle `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indizes für die Tabelle `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indizes für die Tabelle `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indizes für die Tabelle `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indizes für die Tabelle `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indizes für die Tabelle `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Datenbank: `theshop`
--
DROP DATABASE `theshop`;
CREATE DATABASE IF NOT EXISTS `theshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `theshop`;

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
(3, 'PS4');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL COMMENT 'Foreign Key to Category',
  `manufacturer` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `releaseDate` date NOT NULL DEFAULT '2015-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(24, 'Limbo', 'Limbo ist ein 2D-Side-Scroller-Computerspiel des dÃ¤nischen Unternehmens Playdead Studios, das zunÃ¤chst nur Ã¼ber die Online-Distributionsplattform Xbox Live Arcade erhÃ¤ltlich war. Release der PlayStation-3-Version war am 20. Juli 2011 in Europa, die Windows-Version folgte am 2. August. Am 15. MÃ¤rz 2012 erschien in Deutschland, Ã–sterreich und der Schweiz Ã¼ber Headup Games eine Collectorâ€™s Edition.[2] Im Juni 2012 wurde Limbo Teil des Humble Indie Bundle V mit einer auch auf Linux spielbaren Version.[1] Verglichen mit anderen Xbox-Live-Arcade-Spielen konnte sich Limbo gut verkaufen und gewann mehrere Spielepreise. Die gesamte Spielumgebung wird unbunt dargestellt, jedes Element trÃ¤gt einen Graustufenton. Die dÃ¼stere Umgebung und die Musikuntermalung bewirken eine gruselige AtmosphÃ¤re. Laut der USK befindet sich anscheinend auch eine Wii U-Version in Entwicklung.', 2, 'Playdead St', '2016-12-10');

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
(7, 3, 1, '80', 1, 'Standart'),
(8, 3, 2, '79', 45, 'Standart'),
(9, 3, 3, '87', 765, 'Standart'),
(10, 5, 1, '89', 34, 'Standart'),
(11, 5, 2, '87', 768, 'Standart'),
(12, 5, 3, '87', 345, 'Standart'),
(15, 4, 1, '56', 59, 'Special'),
(17, 6, 3, '756', 657, 'Standart'),
(25, 24, 1, '25', 0, 'Extended'),
(26, 1, 2, '70', 0, 'Standard'),
(27, 1, 3, '81', 0, 'Standard');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `street_number` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `first_name`, `street`, `street_number`, `postal_code`, `city`, `mail`, `password_hash`) VALUES
(0, 'admin', 'The ', 'Admin', 'Adminnstreet', 13, 3201, 'Admintown', 'admin@jeah.ch', '');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `console`
--
ALTER TABLE `console`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
