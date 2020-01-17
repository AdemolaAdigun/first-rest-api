-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premierleague`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `PlayerID` int(11) NOT NULL,
  `MatchID` int(11) NOT NULL,
  `TeamID` int(11) NOT NULL,
  `Goals` int(11) NOT NULL,
  `Shots` int(11) NOT NULL,
  `ShotsOnTarget` int(11) NOT NULL,
  `Fouls` int(11) NOT NULL,
  `YellowCards` int(11) NOT NULL,
  `RedCards` int(11) NOT NULL,
  `Passes` int(11) NOT NULL,
  `Dribbles` int(11) NOT NULL,
  `Tackles` int(11) NOT NULL,
  `Saves` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`PlayerID`, `MatchID`, `TeamID`, `Goals`, `Shots`, `ShotsOnTarget`, `Fouls`, `YellowCards`, `RedCards`, `Passes`, `Dribbles`, `Tackles`, `Saves`) VALUES
(1, 2, 3, 3, 6, 6, 0, 0, 0, 15, 5, 1, 0),
(2, 2, 3, 1, 3, 1, 0, 0, 0, 20, 4, 4, 0),
(4, 2, 3, 2, 4, 3, 1, 1, 0, 13, 5, 2, 0),
(5, 2, 3, 0, 0, 0, 0, 0, 0, 7, 0, 1, 8),
(6, 2, 3, 0, 2, 0, 1, 1, 0, 12, 2, 6, 0),
(7, 2, 3, 0, 1, 1, 0, 0, 0, 10, 0, 5, 0),
(8, 2, 3, 0, 0, 0, 0, 0, 0, 9, 3, 3, 0),
(9, 2, 3, 0, 3, 1, 0, 0, 0, 20, 4, 4, 0),
(10, 2, 3, 0, 4, 4, 0, 0, 0, 22, 6, 3, 0),
(11, 2, 3, 0, 2, 1, 0, 0, 0, 9, 8, 3, 0),
(12, 2, 3, 0, 0, 0, 2, 1, 0, 6, 1, 5, 0),
(13, 2, 4, 3, 10, 7, 1, 0, 0, 11, 4, 0, 0),
(14, 2, 4, 0, 0, 0, 3, 0, 1, 9, 0, 3, 0),
(15, 2, 4, 0, 0, 0, 1, 0, 0, 9, 3, 3, 0),
(16, 2, 4, 0, 0, 0, 1, 0, 0, 9, 0, 3, 0),
(17, 2, 4, 0, 3, 1, 0, 0, 0, 7, 4, 1, 0),
(18, 2, 4, 0, 0, 0, 0, 0, 0, 8, 0, 0, 6),
(19, 2, 4, 0, 0, 0, 3, 1, 0, 7, 0, 0, 0),
(20, 2, 4, 0, 4, 2, 0, 0, 0, 12, 6, 0, 0),
(21, 2, 4, 0, 4, 2, 0, 0, 0, 11, 9, 0, 0),
(22, 2, 4, 0, 0, 0, 0, 0, 0, 10, 1, 2, 0),
(23, 2, 4, 0, 6, 4, 0, 0, 0, 6, 5, 3, 0),
(25, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(29, 1, 1, 0, 3, 1, 0, 0, 0, 21, 9, 4, 0),
(30, 1, 1, 0, 0, 0, 1, 1, 0, 12, 2, 2, 0),
(31, 1, 1, 0, 0, 0, 2, 0, 0, 11, 2, 2, 0),
(32, 1, 1, 0, 2, 1, 0, 0, 0, 14, 3, 3, 0),
(33, 1, 1, 1, 4, 3, 0, 0, 0, 22, 8, 1, 0),
(34, 1, 1, 0, 3, 1, 1, 0, 0, 20, 10, 1, 0),
(35, 1, 1, 0, 3, 3, 0, 0, 0, 18, 12, 0, 0),
(36, 1, 1, 1, 4, 3, 0, 0, 0, 11, 2, 0, 0),
(37, 1, 1, 1, 4, 3, 0, 0, 0, 28, 10, 1, 0),
(38, 1, 1, 0, 2, 2, 0, 0, 0, 19, 10, 0, 0),
(39, 1, 2, 0, 0, 2, 8, 0, 0, 7, 8, 7, 0),
(40, 1, 2, 1, 1, 1, 0, 0, 0, 17, 12, 2, 0),
(41, 1, 2, 0, 1, 0, 1, 1, 0, 23, 2, 3, 0),
(42, 1, 2, 0, 3, 2, 0, 0, 0, 29, 12, 0, 0),
(43, 1, 2, 0, 6, 4, 0, 0, 0, 18, 2, 3, 0),
(44, 1, 2, 0, 7, 6, 0, 0, 0, 29, 18, 0, 0),
(45, 1, 2, 0, 0, 0, 2, 1, 0, 12, 1, 4, 0),
(46, 1, 2, 0, 1, 0, 2, 1, 0, 16, 2, 4, 0),
(47, 1, 2, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(48, 1, 2, 0, 0, 0, 0, 0, 0, 10, 0, 0, 13),
(49, 1, 2, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(50, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(51, 3, 5, 0, 3, 1, 0, 0, 0, 21, 9, 4, 0),
(52, 3, 5, 0, 0, 0, 1, 1, 0, 12, 2, 2, 0),
(53, 3, 5, 0, 0, 0, 2, 0, 0, 11, 2, 2, 0),
(54, 3, 5, 0, 2, 1, 0, 0, 0, 14, 3, 3, 0),
(55, 3, 5, 1, 4, 3, 0, 0, 0, 22, 8, 1, 0),
(56, 3, 5, 0, 3, 1, 1, 0, 0, 20, 10, 1, 0),
(57, 3, 5, 0, 3, 3, 0, 0, 0, 18, 12, 0, 0),
(58, 3, 5, 1, 4, 3, 0, 0, 0, 11, 2, 0, 0),
(59, 3, 5, 1, 4, 3, 0, 0, 0, 28, 10, 1, 0),
(60, 3, 5, 0, 2, 2, 0, 0, 0, 19, 10, 0, 0),
(61, 3, 6, 0, 0, 2, 8, 0, 0, 7, 8, 7, 0),
(62, 3, 6, 1, 1, 1, 0, 0, 0, 17, 12, 2, 0),
(63, 3, 6, 0, 1, 0, 1, 1, 0, 23, 2, 3, 0),
(64, 3, 6, 0, 3, 2, 0, 0, 0, 29, 12, 0, 0),
(65, 3, 6, 0, 6, 4, 0, 0, 0, 18, 2, 3, 0),
(66, 3, 6, 0, 7, 6, 0, 0, 0, 29, 18, 0, 0),
(67, 3, 6, 0, 0, 0, 2, 1, 0, 12, 1, 4, 0),
(68, 3, 6, 0, 1, 0, 2, 1, 0, 16, 2, 4, 0),
(69, 3, 6, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(70, 3, 6, 0, 0, 0, 0, 0, 0, 10, 0, 0, 13),
(71, 3, 6, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(1, 6, 3, 3, 6, 6, 0, 0, 0, 15, 5, 1, 0),
(2, 6, 3, 1, 3, 1, 0, 0, 0, 20, 4, 4, 0),
(4, 6, 3, 2, 4, 3, 1, 1, 0, 13, 5, 2, 0),
(5, 6, 3, 0, 0, 0, 0, 0, 0, 7, 0, 1, 8),
(6, 6, 3, 0, 2, 0, 1, 1, 0, 12, 2, 6, 0),
(7, 6, 3, 0, 1, 1, 0, 0, 0, 10, 0, 5, 0),
(8, 6, 3, 0, 0, 0, 0, 0, 0, 9, 3, 3, 0),
(9, 6, 3, 0, 3, 1, 0, 0, 0, 20, 4, 4, 0),
(10, 6, 3, 0, 4, 4, 0, 0, 0, 22, 6, 3, 0),
(11, 6, 3, 0, 2, 1, 0, 0, 0, 9, 8, 3, 0),
(12, 6, 3, 0, 0, 0, 2, 1, 0, 6, 1, 5, 0),
(13, 6, 4, 3, 10, 7, 1, 0, 0, 11, 4, 0, 0),
(14, 6, 4, 0, 0, 0, 3, 0, 1, 9, 0, 3, 0),
(15, 6, 4, 0, 0, 0, 1, 0, 0, 9, 3, 3, 0),
(16, 6, 4, 0, 0, 0, 1, 0, 0, 9, 0, 3, 0),
(17, 6, 4, 0, 3, 1, 0, 0, 0, 7, 4, 1, 0),
(18, 6, 4, 0, 0, 0, 0, 0, 0, 8, 0, 0, 6),
(19, 6, 4, 0, 0, 0, 3, 1, 0, 7, 0, 0, 0),
(20, 6, 4, 0, 4, 2, 0, 0, 0, 12, 6, 0, 0),
(21, 6, 4, 0, 4, 2, 0, 0, 0, 11, 9, 0, 0),
(22, 6, 4, 0, 0, 0, 0, 0, 0, 10, 1, 2, 0),
(23, 6, 4, 0, 6, 4, 0, 0, 0, 6, 5, 3, 0),
(25, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(29, 7, 1, 0, 3, 1, 0, 0, 0, 21, 9, 4, 0),
(30, 7, 1, 0, 0, 0, 1, 1, 0, 12, 2, 2, 0),
(31, 7, 1, 0, 0, 0, 2, 0, 0, 11, 2, 2, 0),
(32, 7, 1, 0, 2, 1, 0, 0, 0, 14, 3, 3, 0),
(33, 7, 1, 1, 4, 3, 0, 0, 0, 22, 8, 1, 0),
(34, 7, 1, 0, 3, 1, 1, 0, 0, 20, 10, 1, 0),
(35, 7, 1, 0, 3, 3, 0, 0, 0, 18, 12, 0, 0),
(36, 7, 1, 1, 4, 3, 0, 0, 0, 11, 2, 0, 0),
(37, 7, 1, 1, 4, 3, 0, 0, 0, 28, 10, 1, 0),
(38, 7, 1, 0, 2, 2, 0, 0, 0, 19, 10, 0, 0),
(39, 7, 2, 0, 0, 2, 8, 0, 0, 7, 8, 7, 0),
(40, 7, 2, 1, 1, 1, 0, 0, 0, 17, 12, 2, 0),
(41, 7, 2, 0, 1, 0, 1, 1, 0, 23, 2, 3, 0),
(42, 7, 2, 0, 3, 2, 0, 0, 0, 29, 12, 0, 0),
(43, 7, 2, 0, 6, 4, 0, 0, 0, 18, 2, 3, 0),
(44, 7, 2, 0, 7, 6, 0, 0, 0, 29, 18, 0, 0),
(45, 7, 2, 0, 0, 0, 2, 1, 0, 12, 1, 4, 0),
(46, 7, 2, 0, 1, 0, 2, 1, 0, 16, 2, 4, 0),
(47, 7, 2, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(48, 7, 2, 0, 0, 0, 0, 0, 0, 10, 0, 0, 13),
(49, 7, 2, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(50, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(51, 8, 5, 0, 3, 1, 0, 0, 0, 21, 9, 4, 0),
(52, 8, 5, 0, 0, 0, 1, 1, 0, 12, 2, 2, 0),
(53, 8, 5, 0, 0, 0, 2, 0, 0, 11, 2, 2, 0),
(54, 8, 5, 0, 2, 1, 0, 0, 0, 14, 3, 3, 0),
(55, 8, 5, 1, 4, 3, 0, 0, 0, 22, 8, 1, 0),
(56, 8, 5, 0, 3, 1, 1, 0, 0, 20, 10, 1, 0),
(57, 8, 5, 0, 3, 3, 0, 0, 0, 18, 12, 0, 0),
(58, 8, 5, 1, 4, 3, 0, 0, 0, 11, 2, 0, 0),
(59, 8, 5, 1, 4, 3, 0, 0, 0, 28, 10, 1, 0),
(60, 8, 5, 0, 2, 2, 0, 0, 0, 19, 10, 0, 0),
(61, 8, 6, 0, 0, 2, 8, 0, 0, 7, 8, 7, 0),
(62, 8, 6, 1, 1, 1, 0, 0, 0, 17, 12, 2, 0),
(63, 8, 6, 0, 1, 0, 1, 1, 0, 23, 2, 3, 0),
(64, 8, 6, 0, 3, 2, 0, 0, 0, 29, 12, 0, 0),
(65, 8, 6, 0, 6, 4, 0, 0, 0, 18, 2, 3, 0),
(66, 8, 6, 0, 7, 6, 0, 0, 0, 29, 18, 0, 0),
(67, 8, 6, 0, 0, 0, 2, 1, 0, 12, 1, 4, 0),
(68, 8, 6, 0, 1, 0, 2, 1, 0, 16, 2, 4, 0),
(69, 8, 6, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0),
(70, 8, 6, 0, 0, 0, 0, 0, 0, 10, 0, 0, 13),
(71, 8, 6, 0, 13, 10, 0, 0, 0, 22, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `MatchID` int(11) NOT NULL,
  `TeamHomeID` int(11) NOT NULL,
  `TeamAwayID` int(11) NOT NULL,
  `TeamHomeFormation` int(11) NOT NULL,
  `TeamAwayFormation` int(11) NOT NULL,
  `ResultOfTeamHome` int(11) NOT NULL,
  `ResultOfTeamAway` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MatchID`, `TeamHomeID`, `TeamAwayID`, `TeamHomeFormation`, `TeamAwayFormation`, `ResultOfTeamHome`, `ResultOfTeamAway`) VALUES
(1, 1, 2, 433, 433, 3, 1),
(2, 3, 4, 4231, 442, 6, 3),
(3, 5, 6, 442, 433, 3, 1),
(6, 4, 3, 433, 433, 3, 6),
(7, 2, 1, 442, 4231, 1, 3),
(8, 6, 5, 433, 442, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PlayerID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerID`, `Name`) VALUES
(1, 'COURTOIS'),
(2, 'CARVAJAL'),
(4, 'SERGIO RAMOS'),
(5, 'MARCELO'),
(6, 'KROOS'),
(7, 'MODRIC'),
(8, 'HAZARD'),
(9, 'BALE'),
(10, 'BENZEMA'),
(11, 'ISCO'),
(12, 'VARANE'),
(13, 'MESSI'),
(14, 'SUAREZ'),
(15, 'GRIEZMAN'),
(16, 'DE JONG'),
(17, 'ARTHUR'),
(18, 'BUSQUETS'),
(19, 'PIQUE'),
(20, 'SAMEDO'),
(21, 'UMTITI'),
(22, 'TER STEGEN'),
(23, 'ALBA'),
(25, 'EDERSON'),
(29, 'WALKER'),
(30, 'MENDY'),
(31, 'STONES'),
(32, 'LAPORTE'),
(33, 'WALKER'),
(34, 'FERNANDINHO'),
(35, 'SILVA'),
(36, 'DE BRUYNE'),
(37, 'SANE'),
(38, 'AGUERO'),
(39, 'STERLING'),
(40, 'LENO'),
(41, 'BELLERIN'),
(42, 'MUSTAFI'),
(43, 'HOLDING'),
(44, 'KOLASINAC'),
(45, 'CEBALLOS'),
(46, 'OZIL'),
(47, 'WILLOCK'),
(48, 'LACAZETTE'),
(49, 'AUBAMEYANG'),
(50, 'PEPE'),
(51, 'ALISSON'),
(52, 'ARNOLD'),
(53, 'VIRGIL'),
(54, 'LOVREN'),
(55, 'ROBERTSON'),
(56, 'KEITA'),
(57, 'FABINHO'),
(58, 'MILNER'),
(59, 'SALAH'),
(60, 'MANE'),
(61, 'FERMINHO'),
(62, 'HUGO'),
(63, 'ROSE'),
(64, 'TOBY'),
(65, 'JAN'),
(66, 'SANCHEZ'),
(67, 'DIER'),
(68, 'WINKS'),
(69, 'LAMELA'),
(70, 'KANE'),
(71, 'SON'),
(72, 'LUCAS');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TeamID` int(11) NOT NULL,
  `TeamName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TeamID`, `TeamName`) VALUES
(1, 'RealMadrid'),
(2, 'Barcelona'),
(3, 'ManchesterCity'),
(4, 'Arsenal'),
(5, 'Liverpool'),
(6, 'Tottenham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD KEY `PlayerID` (`PlayerID`),
  ADD KEY `MatchID` (`MatchID`),
  ADD KEY `TeamID` (`TeamID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MatchID`),
  ADD KEY `TeamHomeID` (`TeamHomeID`),
  ADD KEY `TeamAwayID` (`TeamAwayID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `MatchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `TeamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `actions_ibfk_1` FOREIGN KEY (`PlayerID`) REFERENCES `players` (`PlayerID`),
  ADD CONSTRAINT `actions_ibfk_2` FOREIGN KEY (`MatchID`) REFERENCES `matches` (`MatchID`),
  ADD CONSTRAINT `actions_ibfk_3` FOREIGN KEY (`TeamID`) REFERENCES `teams` (`TeamID`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`TeamHomeID`) REFERENCES `teams` (`TeamID`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`TeamAwayID`) REFERENCES `teams` (`TeamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
