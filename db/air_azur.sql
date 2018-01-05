-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 05 Janvier 2018 à 14:43
-- Version du serveur :  5.7.17-log
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `air_azur`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `rsr_num` int(11) NOT NULL,
  `gnc_id` int(11) NOT NULL,
  `nbr_places_res` int(11) DEFAULT NULL,
  `date_reservation` date DEFAULT NULL,
  `cln_id` int(11) DEFAULT NULL,
  `vlg_num` varchar(20) DEFAULT NULL,
  `date_dep` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rsr_num`,`gnc_id`),
  ADD KEY `fk_rsr_gnc` (`gnc_id`),
  ADD KEY `fk_cln_id` (`cln_id`),
  ADD KEY `FK_num_dep_vol` (`vlg_num`,`date_dep`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_num_dep_vol` FOREIGN KEY (`vlg_num`,`date_dep`) REFERENCES `vol` (`vlg_num`, `date_dep`),
  ADD CONSTRAINT `fk_cln_id` FOREIGN KEY (`cln_id`) REFERENCES `client` (`cln_id`),
  ADD CONSTRAINT `fk_rsr_gnc` FOREIGN KEY (`gnc_id`) REFERENCES `agence` (`gnc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
