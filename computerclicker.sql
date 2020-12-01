-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 11:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerclicker`
--

-- --------------------------------------------------------

--
-- Table structure for table `pocetsup`
--

CREATE TABLE `pocetsup` (
  `vlast` tinyint(1) NOT NULL,
  `idu` int(11) UNSIGNED NOT NULL,
  `idsup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pocetup`
--

CREATE TABLE `pocetup` (
  `pocet` int(11) NOT NULL,
  `idu` int(11) UNSIGNED NOT NULL,
  `idup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skore`
--

CREATE TABLE `skore` (
  `idu` int(11) UNSIGNED NOT NULL,
  `aktualne` int(11) NOT NULL,
  `celkove` int(11) NOT NULL,
  `hps` int(11) NOT NULL,
  `ids` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idu` int(11) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pocetsup`
--
ALTER TABLE `pocetsup`
  ADD KEY `idu` (`idu`);

--
-- Indexes for table `pocetup`
--
ALTER TABLE `pocetup`
  ADD KEY `Fk_idu` (`idu`);

--
-- Indexes for table `skore`
--
ALTER TABLE `skore`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `idu` (`idu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idu`),
  ADD UNIQUE KEY `nameU` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skore`
--
ALTER TABLE `skore`
  MODIFY `ids` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pocetsup`
--
ALTER TABLE `pocetsup`
  ADD CONSTRAINT `pocetsup_ibfk_1` FOREIGN KEY (`idu`) REFERENCES `users` (`idu`);

--
-- Constraints for table `pocetup`
--
ALTER TABLE `pocetup`
  ADD CONSTRAINT `Fk_idu` FOREIGN KEY (`idu`) REFERENCES `users` (`idu`);

--
-- Constraints for table `skore`
--
ALTER TABLE `skore`
  ADD CONSTRAINT `skore_ibfk_1` FOREIGN KEY (`idu`) REFERENCES `users` (`idu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
