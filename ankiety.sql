-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Maj 2019, 21:58
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ankiety`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ankiety`
--

CREATE TABLE `ankiety` (
  `idankiety` int(10) UNSIGNED NOT NULL,
  `imie` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nrtel` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nrdomu` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `nrmieszkania` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `miejscowosc` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  `kod` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `uzytkownicy_iduzytkownicy` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ankiety`
--

INSERT INTO `ankiety` (`idankiety`, `imie`, `nazwisko`, `mail`, `nrtel`, `ulica`, `nrdomu`, `nrmieszkania`, `miejscowosc`, `kod`, `uzytkownicy_iduzytkownicy`) VALUES
(4, 'Adam', 'Mickiewicz', 'adam@mickiewicz.pl', '1233211122', 'Miłosna', '18A', '13', 'Zaosie', '02-123', 3),
(5, 'Juliusz', 'Słowacki', 'jjulek@slowacki.com', '567765567', 'Balladyny', '2B', '12', 'Krzemieniec', '01-129', 3),
(6, 'Zygmunt', 'Krasiński', 'zigi@krasik.pl', '098890098', 'Paryska', '3', '', 'Opinog&oacute;ra', '09-098', 3),
(7, 'Ignacy', 'Krasicki', 'ignas@polski.pl', '876789987', 'Biskupia', '8', '', 'Dubiecko', '06-123', 3),
(8, 'J&oacute;zef', 'Kraszewski', 'ziutek@kraszek.pl', '653098123', 'Genewska', '8A', '12', 'Warszawa', '02-210', 3),
(9, 'Henryk', 'Sienkiewicz', 'heniek@siny.com', '876123456', 'Szwajcarska', '8A', '9', 'Wola Okrzejska', '09-098', 3),
(10, 'Bolesław', 'Prus', 'aleksander@glowacki.pl', '987123321', 'Siedlecka', '2A', '', 'Hrubiesz&oacute;w', '09-099', 3),
(11, 'Stefan', 'Żeromski', 'stefek@syzyf.com', '987123456', 'Szklana', '1', '', 'Strawczyn', '09-765', 3),
(12, 'Maria', 'Konopnicka', 'marysia@krasnoludki.com', '8763459876', 'Lwowska', '9', '', 'Suwałki', '11-111', 3),
(13, 'Eliza', 'Orzeszkowa', 'nad@niemnem.pl', '987789987', 'Milkowszczyzneńska', '3', '', 'Grodno', '09-091', 3),
(14, 'Jan', 'Kochanowski', 'trenydla@orszulki.pl', '765555555', 'Czarnoleska', '3A', '', 'Lublin', '87-098', 3),
(15, 'Mikołaj', 'Rej', 'polacynie@gesi.pl', '123123123', 'Rejowiecka', '7D', '', 'Żurawno', '77-765', 3),
(16, 'Adam', 'Asnyk', 'daremne@zale.com', '876876876', 'Krakowska', '9A', '3', 'Krakowska', 'Kalisz', 3),
(17, 'Cyprian', 'Norwid', 'fortepian@szopena.pl', '987654321', 'Głucha', '5', '', 'Paryż', '88-888', 3),
(18, 'Fryderyk', 'Szopen', 'polonez@polski.pl', '098890098', 'Paryska', '2', '', 'Żelazowa Wola', '09-098', 3),
(19, 'Stanisław', 'Moniuszko', 'halka@strasznydwor.pl', '543345543', 'Warszawska', '98', '', 'Ubiel', '09-654', 3),
(20, 'Aleksander', 'Fredro', 'pawel@gawel.pl', '098765434', 'Surochowska', '6A', '7', 'Lw&oacute;w', '67-678', 3),
(21, 'Kazimierz', 'Przerwa-Tetmajer', 'przerwa@spacja.pl', '876543345', 'Warszawska', '5b', '13', 'Ludźmierz', '87-098', 4),
(22, 'Aleksander', 'Świętochowski', 'alek@olek.pl', '987789876', 'Gołotczyźnieńska', '5', '', 'Stoczek Łukowski', '08-112', 4),
(23, 'Bolesław', 'Leśmian', 'malinowy@chrusniak.pl', '654321234', 'Dusiołka', '5B', '', 'Warszawa', '01-121', 4),
(24, 'Stanisław', 'Przybyszewski', 'deka@dentyzm.com', '876545678', 'Łojewska', '1', '', 'Jarnoty', '09-654', 4),
(25, 'Stanisław', 'Brzozowski', 'legendamlodej@polski.pl', '3857395622', 'Florencka', '2', '', 'Maziarnia', '07-683', 4),
(26, 'Władysław', 'Reymont', 'chlopi@nobel.pl', '5794785676', 'Chłopska', '5', '', 'Kobiele Wielkie', '89-649', 4),
(27, 'Lucjan', 'Rydel', 'rydlowka@uj.pl', '79-135', 'Krakowska', '9C', '7', 'Bronowice Małe', '82-629', 4),
(28, 'Leopold', 'Staff', 'sciezki@polne.com', '12423144', 'Lwowieńska', '2', '', 'Skarżysko-Kamienna', '01-263', 4),
(29, 'Włodzimierz', 'Tetmajer', 'asp@crac.pl', '5698632', 'Harklowa', '8', '', 'Krak&oacute;w', '83-129', 4),
(30, 'Stanisław', 'Wyspiański', 'wesele@chochol.pl', '6293692692', 'Malarska', '63A', '8', 'Krak&oacute;w', '97-269', 4),
(31, 'Tadeusz', 'Boy-Żeleński', 'ludzzie@zywi.com', '692679382', 'Lwowska', '3C', '9', 'Warszawa', '81-620', 4),
(32, 'Jan', 'Matejko', 'grunwal@krol.pl', '719279382', 'Grunwaldzka', '7', '90', 'Krak&oacute;w', '09-379', 4),
(33, 'Alfred', 'Szklarski', 'tomek@wilmowski.pl', '720362693', 'Podr&oacute;żnicza', '3', '', 'Katowice', '96-372', 4),
(34, 'Tomek', 'Wilmowski', 'tommy@poland.pl', '6202769392', 'Angielska', '8', '', 'Warszawa', '83-282', 5),
(35, 'Sally', 'Allan', 'sally@allan.pl', '7203692694', 'Angielska', '9', '', 'Melbourne', '77-272', 5),
(36, 'Jan', 'Smuga', 'jan@smuga.pl', '7295203592', 'Zimowa', '9', '', 'Gran', '72-276', 5),
(37, 'Tadeusz', 'Nowicki', 'tadek@kapitan.pl', '7207683819', 'Bosmańska', '89', '6', 'Kapitanowo', '73-269', 5),
(38, 'Zbigniew', 'Karski', 'zbyszek@karski.com', '63926983792', 'Piękna', '8', '', 'Warszawa', '8203682682', 5),
(39, 'Natasza', 'Bestużewa', 'natasza@karska.pl', '73973973982', 'Zimna', '8', '', 'Irkuck', '73-279', 5),
(40, 'Andrzej', 'Wilmowski', 'andrzej@wilmowski.pl', '739692849', 'Brytyjska', '9', '9', 'Londyn', '93-829', 5),
(41, 'Jan', 'Skrzetuski', 'janek@namiestnik.com', '7392793893', 'Heleńska', '8', '', 'Zbaraż', '92-273', 5),
(42, 'Michał', 'Wołodyjowski', 'michal@jerzy.pl', '849382928', 'Zbarska', '9', '9', 'Kamieniec Podolski', '98-987', 5),
(43, 'Andrzej', 'Kmicic', 'babinicz@kmicic.pl', '732098346', 'Częstochowska', '9', '13', 'Billewicze', '84-283', 5),
(44, 'Wojciech', 'Kossak', 'bitwa@raclowice.pl', '829173964', 'Paryska', '99', '6', 'Krak&oacute;w', '92-639', 3),
(45, 'Juliusz', 'Kossak', 'zolte@wody.com', '829473812', 'Krakowska', '17', '12', 'Nowy Wiśnicz', '82-739', 3),
(46, 'Stanisław', 'Witkiewicz', 'szewcy@nienasycenie', '437843678', 'Warszawska', '2', '', 'Jeziory', '91-123', 3),
(47, 'Jerzy', 'Kossak', 'odwrot@napoleona.pl', '920182930', 'Krakowianki', '98A', '7', 'Krak&oacute;w', '92-193', 3),
(48, 'Magdalena', 'Samozwaniec', 'magda@kossak.pl', '629174908', 'Krakowska', '56', '98', 'Warszawa', '96-362', 3),
(49, 'Maria', 'Pawlikowska-Jasnorzewska', 'marysia@kossak.pl', '82048082', 'Niemiecka', '9A', '7', 'Krak&oacute;w', '83-124', 3),
(50, 'Zofia', 'Kossak-Szczucka', 'zosia@kossak.pl', '810373028', 'Kośmińska', '8', '', 'Bielsko-Biała', '92-192', 3),
(51, 'Karol', 'Kossak', 'karol@kossak.pl', '927082749', 'Lwowska', '9A', '9', 'Ciechocinek', '72-369', 3),
(52, 'Leon', 'Kossak', 'leon@kossak.pl', '937898392', 'Krakowska', '7', '', 'Wiślnicz Nowy', '87-278', 3),
(53, 'Władysław', 'Kossak', 'wladek@kossak.com', '739261767', 'Polska', '78', '76', 'Melbourne', '73-264', 3),
(54, 'Gloria', 'Kossak', 'gloria@kossak.pl', '630173829', 'Plastyczna', '89', '34', 'Krak&oacute;w', '92-193', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `iduzytkownicy` int(10) UNSIGNED NOT NULL,
  `login` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(256) COLLATE utf8_polish_ci NOT NULL,
  `czyAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`iduzytkownicy`, `login`, `haslo`, `czyAdmin`) VALUES
(3, 'admin', '$2y$10$j1f1Drkv9vowDBzW3/NXXeN5E5OvwV9EhKXhdYVuLwRHOSDKAgYwu', 1),
(4, 'user', '$2y$10$/6psKuJRiJlS96brIGtVb.XGzENU0CaAUKYSJgbM4/cv6Y2w0ABvW', 0),
(5, 'czytelnik', '$2y$10$aGMbPLm1/jR0LqaQelpwV.jARqs7t8dVYmo1cxoO.Y1vgr6u2oBFW', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ankiety`
--
ALTER TABLE `ankiety`
  ADD PRIMARY KEY (`idankiety`),
  ADD KEY `uzytkownicy_iduzytkownicy` (`uzytkownicy_iduzytkownicy`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`iduzytkownicy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ankiety`
--
ALTER TABLE `ankiety`
  MODIFY `idankiety` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `iduzytkownicy` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ankiety`
--
ALTER TABLE `ankiety`
  ADD CONSTRAINT `ankiety_ibfk_1` FOREIGN KEY (`uzytkownicy_iduzytkownicy`) REFERENCES `uzytkownicy` (`iduzytkownicy`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
