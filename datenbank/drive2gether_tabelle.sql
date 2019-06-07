-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Apr 2019 um 10:33
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `drive2gether`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `drive2gether_tabelle`
--

CREATE TABLE `drive2gether_tabelle` (
  `id` int(11) NOT NULL,
  `vorname` text COLLATE utf16_german2_ci NOT NULL,
  `nachname` text COLLATE utf16_german2_ci NOT NULL,
  `email` text COLLATE utf16_german2_ci NOT NULL,
  `geschlecht` text COLLATE utf16_german2_ci NOT NULL,
  `inhalt` text COLLATE utf16_german2_ci NOT NULL,
  `preis` text COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `drive2gether_tabelle`
--

INSERT INTO `drive2gether_tabelle` (`id`, `vorname`, `nachname`, `email`, `geschlecht`, `inhalt`, `preis`) VALUES
(1, 'Lisa ', 'MÃ¼ller', 'mueller@mail.com', 'weiblich', 'Ich fahre von Hamburg nach Heidelberg und nehme gerne Leute mit.', '15'),
(2, 'Markus', 'Mustermann', 'mustermail@mail.com', 'maenlich', 'Ich nehme gerne Leute mit von KÃ¶ln nach Heidelberg.', '15'),
(4, 'Laura', 'Schreiber', 'Laura@aol.com', 'weiblich', 'Ich fahre von Rom aus nach Heidelberg und suche nette Mitfahrer. Meldet euch einfach bei mir per Mail und wir machen einfach was aus.', '30'),
(5, 'Laura', 'Schreiber', 'Laura@aol.com', 'weiblich', 'Ich fahre von Rom aus nach Heidelberg und suche nette Mitfahrer. Meldet euch einfach bei mir per Mail und wir machen einfach was aus.', '30'),
(6, 'Anton', 'Siebert', 'sieber@mail.com', 'maenlich', 'Ich werde am 06 Juni nach Heidelberg fahren. Beginne die Fahrt von KÃ¶ln Hauptbahnhof. Wer mit mÃ¶chte, kann mir gerne eine Email senden, ich melde mich dann umgehen.', '20');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `drive2gether_tabelle`
--
ALTER TABLE `drive2gether_tabelle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `drive2gether_tabelle`
--
ALTER TABLE `drive2gether_tabelle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
