-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24. Nov, 2020 23:49 PM
-- Server-versjon: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aadnehh`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.no');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Bestillinger`
--

CREATE TABLE `Bestillinger` (
  `id` int(6) UNSIGNED NOT NULL,
  `farge` varchar(60) NOT NULL,
  `hjulstorrelse` varchar(40) NOT NULL,
  `felg` varchar(60) NOT NULL,
  `sete` varchar(60) NOT NULL,
  `ratt` varchar(60) NOT NULL,
  `cruise` varchar(60) NOT NULL,
  `lydanlegg` varchar(60) NOT NULL,
  `sikkerhet` varchar(60) NOT NULL,
  `fornavn` varchar(60) DEFAULT NULL,
  `etternavn` varchar(60) DEFAULT NULL,
  `pris` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `Bestillinger`
--

INSERT INTO `Bestillinger` (`id`, `farge`, `hjulstorrelse`, `felg`, `sete`, `ratt`, `cruise`, `lydanlegg`, `sikkerhet`, `fornavn`, `etternavn`, `pris`) VALUES
(2, 'blÃ¥ lakk', '20 tommer felg', 'turbin felg', 'S-line seter', 'S-line flat bottom ratt', 'med cruise control', 'Bang&Olufsen lyd', 'lane keeping assist', 'Ola', 'Nordmann', 593000);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Prisliste`
--

CREATE TABLE `Prisliste` (
  `ID` int(11) DEFAULT NULL,
  `produkt` varchar(255) DEFAULT NULL,
  `pris` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `Prisliste`
--

INSERT INTO `Prisliste` (`ID`, `produkt`, `pris`) VALUES
(1, 'rød lakk', 4000),
(2, 'blå lakk', 4500),
(3, 'hvit lakk', 7000),
(4, '18 tommer felg', 500),
(5, '20 tommer felg', 1000),
(6, '22 tommer felg', 2000),
(7, '5v felg', 5000),
(8, 'turbin felg', 7000),
(9, 'standard seter', 8000),
(10, 'S-line seter', 13000),
(11, 'standard ratt', 5000),
(12, 'S-line flat bottom ratt', 14000),
(13, 'med cruise control', 20000),
(14, 'uten cruise control', 0),
(15, 'standard lydanlegg', 5000),
(16, 'Bang&Olufsen lyd', 18000),
(17, 'airbag', 1000),
(18, 'lane keeping assist', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Bestillinger`
--
ALTER TABLE `Bestillinger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Bestillinger`
--
ALTER TABLE `Bestillinger`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
