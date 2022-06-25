-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Lip 2020, 00:51
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kwiaciarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kwiaciarnie`
--

CREATE TABLE `kwiaciarnie` (
  `id_kwiaciarni` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kwiaciarnie`
--

INSERT INTO `kwiaciarnie` (`id_kwiaciarni`, `nazwa`, `miasto`, `ulica`) VALUES
(1, 'Astra', 'Warszawa', 'Sobieskiego'),
(2, 'Melisa', 'Malbork', 'Konopnickiej');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zam` int(10) UNSIGNED NOT NULL,
  `id_kwiaciarni` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL DEFAULT '0000-00-00',
  `kwiaty` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `cena` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zam`, `id_kwiaciarni`, `data`, `kwiaty`, `cena`) VALUES
(1, 1, '2017-01-16', 'róża', '250'),
(2, 1, '2017-01-10', 'gerbera', '120'),
(3, 2, '2017-01-06', 'róża', '200'),
(4, 2, '2017-01-09', 'goździk', '170'),
(5, 1, '2017-01-07', 'róża', '125'),
(6, 1, '2017-01-11', 'róża', '75');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kwiaciarnie`
--
ALTER TABLE `kwiaciarnie`
  ADD PRIMARY KEY (`id_kwiaciarni`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kwiaciarnie`
--
ALTER TABLE `kwiaciarnie`
  MODIFY `id_kwiaciarni` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
