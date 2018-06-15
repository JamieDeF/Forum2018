-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 jun 2018 om 13:33
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `thread`
--

CREATE TABLE `thread` (
  `ID` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `thread`
--

INSERT INTO `thread` (`ID`, `naam`) VALUES
(1, 'Jamie'),
(2, 'Reinoud'),
(3, 'Dennis');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_rol_ID` int(11) NOT NULL DEFAULT '2',
  `reg_key` varchar(255) NOT NULL,
  `reg_confirmed` varchar(10) NOT NULL DEFAULT 'no',
  `reset_key` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `user_name`, `user_pwd`, `user_email`, `user_rol_ID`, `reg_key`, `reg_confirmed`, `reset_key`, `time_stamp`) VALUES
(13, 'aardappel', '661fc1f182f7f8a81eae83dbe7a2282c5a04f73c', 'aardappel@aardappel.aardappel', 2, '5b0fa9157d238', 'no', NULL, '2018-05-31 07:49:41'),
(14, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.nl', 3, '5b150b2f2f23f', 'no', NULL, '2018-06-04 09:49:35');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `thread`
--
ALTER TABLE `thread`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
