-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Mag 04, 2020 alle 08:59
-- Versione del server: 5.7.29-0ubuntu0.16.04.1
-- Versione PHP: 7.3.17-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowers`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `myflowers`
--

CREATE TABLE `myflowers` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `occasion_id` int(5) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(20) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `myflowers`
--

INSERT INTO `myflowers` (`id`, `name`, `occasion_id`, `price`, `quantity`, `created`, `modified`) VALUES
(1, 'rosa', 1, 10, 1, '2020-05-01', '2020-05-01'),
(2, 'gelsomino', 2, 5, 1, '2020-05-01', '2020-05-01'),
(3, 'papavero', 3, 7, 1, '2020-05-01', '2020-05-01'),
(4, 'fiore d\'arancio', 4, 15, 1, '2020-05-01', '2020-05-01'),
(5, 'tulipano', 5, 12, 1, '2020-05-01', '2020-05-01');

-- --------------------------------------------------------

--
-- Struttura della tabella `occasions`
--

CREATE TABLE `occasions` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `description`) VALUES
(1, 'anniversario', 'regala una rosa per il tuo anniversario.'),
(2, 'battesimo', 'regala un gelsomino per un battesimo'),
(3, 'laurea', 'regala un papavero per le lauree'),
(4, 'matrimonio', 'regala fiori d\'arancio per un matrimonio'),
(5, 'nascita', 'regala tulipani per una nascita');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `myflowers`
--
ALTER TABLE `myflowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myflowers_idfk` (`occasion_id`);

--
-- Indici per le tabelle `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `myflowers`
--
ALTER TABLE `myflowers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la tabella `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `myflowers`
--
ALTER TABLE `myflowers`
  ADD CONSTRAINT `myflowers_idfk` FOREIGN KEY (`occasion_id`) REFERENCES `occasions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
