-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 juil. 2023 à 10:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionemplois`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `username`, `password`) VALUES
(1, 'SONON', 'Charbel', 'asking', 'asking07'),
(11, 'ADANDEDJAN', 'Deodat ', 'Flemme', 'Flemme123'),
(9, 'KOUKOUI', 'Uriel', 'Uriel', 'Uriel1234');

-- --------------------------------------------------------

--
-- Structure de la table `gl2`
--

DROP TABLE IF EXISTS `gl2`;
CREATE TABLE IF NOT EXISTS `gl2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gl2`
--

INSERT INTO `gl2` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE ', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda G.', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda G.'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GNONLONFOUN', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GNONLONFOUN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 Miranda GNONLONFOUN', 'SystÃ¨me RÃ©partis OUATTARA 2 Miranda GNONLONFOUN', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GNONLONFOUN', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GNONLONFOUN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `gl3`
--

DROP TABLE IF EXISTS `gl3`;
CREATE TABLE IF NOT EXISTS `gl3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gl3`
--

INSERT INTO `gl3` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `im2`
--

DROP TABLE IF EXISTS `im2`;
CREATE TABLE IF NOT EXISTS `im2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `im2`
--

INSERT INTO `im2` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'AAACS IRAN 2 Miranda G.', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `im3`
--

DROP TABLE IF EXISTS `im3`;
CREATE TABLE IF NOT EXISTS `im3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `im3`
--

INSERT INTO `im3` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `l1g1`
--

DROP TABLE IF EXISTS `l1g1`;
CREATE TABLE IF NOT EXISTS `l1g1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `l1g1`
--

INSERT INTO `l1g1` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `l1g2`
--

DROP TABLE IF EXISTS `l1g2`;
CREATE TABLE IF NOT EXISTS `l1g2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `l1g2`
--

INSERT INTO `l1g2` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `massehorairegl2`
--

DROP TABLE IF EXISTS `massehorairegl2`;
CREATE TABLE IF NOT EXISTS `massehorairegl2` (
  `libelle_cours` varchar(50) NOT NULL,
  `nom_cours` varchar(200) NOT NULL,
  `masse_horaire_totale` int(11) NOT NULL,
  `masse_horaire_restante` int(11) NOT NULL,
  UNIQUE KEY `libelle_cours` (`libelle_cours`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `massehorairegl2`
--

INSERT INTO `massehorairegl2` (`libelle_cours`, `nom_cours`, `masse_horaire_totale`, `masse_horaire_restante`) VALUES
('Maths', 'jbln', 25, 3),
('BDD', 'HGVI', 40, 40),
('fs', 'vfdn', 45, 45),
('sdv', 'cds', 35, 35),
('sdvj', 'cdsj', 21, 21),
('BXDL', 'BAXDIUQB DSCDSBO', 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `si2`
--

DROP TABLE IF EXISTS `si2`;
CREATE TABLE IF NOT EXISTS `si2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `si2`
--

INSERT INTO `si2` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'Eval des risques et politiques de sÃ©curitÃ©s PADTICE A. AHOUANDJINOU', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');

-- --------------------------------------------------------

--
-- Structure de la table `si3`
--

DROP TABLE IF EXISTS `si3`;
CREATE TABLE IF NOT EXISTS `si3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Jour` varchar(10) NOT NULL,
  `7H-10H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `10H-13H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `13H-16H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  `16H-19H` varchar(200) NOT NULL DEFAULT 'Aucun cours',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Jour` (`Jour`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `si3`
--

INSERT INTO `si3` (`id`, `Jour`, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H`) VALUES
(1, 'Lundi', 'Examen de DÃ©ontologie PADTICE', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(2, 'Mardi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(3, 'Mercredi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours'),
(4, 'Jeudi', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'SystÃ¨me RÃ©partis OUATTARA 2 ', 'Aucun cours', 'Aucun cours'),
(5, 'Vendredi', 'Aucun cours', 'Aucun cours', 'SystÃ¨me RÃ©partis OUATTARA 3 ', 'SystÃ¨me RÃ©partis OUATTARA 3 Miranda GN'),
(7, 'Samedi', 'Aucun cours', 'Aucun cours', 'Aucun cours', 'Aucun cours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
