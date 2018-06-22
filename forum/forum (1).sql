-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jun 2018 om 21:09
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
-- Tabelstructuur voor tabel `reacties`
--

CREATE TABLE `reacties` (
  `ID` int(11) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_rol_ID` int(11) NOT NULL,
  `topics_jd` int(11) NOT NULL,
  `tekst` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reacties`
--

INSERT INTO `reacties` (`ID`, `datum`, `user_rol_ID`, `topics_jd`, `tekst`) VALUES
(1, '2018-06-22 20:44:56', 3, 1, 'Hallo,\r\n\r\ndit is een reactie test.\r\n\r\ndaag.\r\n');

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
(9, 'HTML'),
(10, 'JavaScript'),
(11, 'hoi');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE `topics` (
  `ID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `user_id` int(25) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `views` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`ID`, `datum`, `tijd`, `user_id`, `titel`, `text`, `views`, `thread_id`) VALUES
(1, '2018-06-14', '09:00:00', 1, 'Test1', 'test', 10, 11),
(3, '2018-06-18', '00:00:00', 1, 'TITEL', 'Hier voor javascript', 0, 10),
(5, '2018-06-21', '00:00:00', 18, 'hallo', 'hoi', 0, 0);

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
(14, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.nl', 3, '5b150b2f2f23f', 'no', NULL, '2018-06-04 09:49:35'),
(19, 'hoi', '1e354c3d41dc0d3c403db19f22de23299a33a1c8', 'hoi@hoi.nl', 2, '', 'yes', NULL, '2018-06-21 19:16:05'),
(20, 'oke', '6d73d34e71cd212d35f709b9dff6a52b2aa582ec', 'oke@oke.nl', 2, '5b2d2710eb392', 'no', NULL, '2018-06-22 16:42:56');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reacties`
--
ALTER TABLE `reacties`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
