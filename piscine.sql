-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 mai 2018 à 07:27
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `date_de_naissance` varchar(100) DEFAULT NULL,
  `ville` varchar(40) DEFAULT NULL,
  `travail` varchar(30) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='table membre';

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`nom`, `prenom`, `date_de_naissance`, `ville`, `travail`, `adresse`, `email`, `id`) VALUES
('a', 'a', NULL, NULL, NULL, NULL, 'a', 94),
('Blanc', 'Corentin', NULL, NULL, NULL, NULL, 'qc@gmail.com', 95),
('Chabennet', 'Quentin', '25 Avril 1995', NULL, 'Etudiant ING 3', '16 Sentier des Sablons Cachan 94230', 'qchabennet@gmail.com', 93),
('aze', 'aze', NULL, NULL, NULL, NULL, 'aze', 99),
('az', 'aze', NULL, NULL, NULL, NULL, 'aze', 102),
('az', 'azer', NULL, NULL, NULL, NULL, 'azer', 103);

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `id_1` int(100) NOT NULL,
  `id_2` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `relation`
--

INSERT INTO `relation` (`id_1`, `id_2`) VALUES
(93, 95);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1 COMMENT='table utilisateur';

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `mdp`, `nom`, `prenom`, `admin`) VALUES
(93, 'qchabennet@gmail.com', '$2y$10$bjXI4W8VaiYCGGJtHA2O7e0ViNdR0satr.iBQZk6Ge/ZNxFX0mfXy', 'Chabennet', 'Quentin', NULL),
(94, 'a', '$2y$10$f9jpzaOGEVVpiBVE2hrSxeUtg9nxAlHciAhyx9XgUPQf4fwTEDfQK', 'a', 'a', NULL),
(95, 'qc@gmail.com', '$2y$10$9780d/.Sdx84YQRMj7CCU.M3Pz2oAtk8fRLhxRnbMnGSZeuftx/kS', 'Blanc', 'Corentin', NULL),
(96, 'a', '$2y$10$3nslFQ1vSgHPDWe9P2qmzOhDlJFFcAOTRswwCdWAHAcZw09mN0zZW', 'Chabennet', 'Thomas', NULL),
(97, 'a', '$2y$10$7c/toNTFUXH7gyhVAYTvgur/DF5DS4QTDxekbR6f4mZPFzMMNUYxi', 'Chabennet', 'a', NULL),
(98, 'a', '$2y$10$WduxhPhpYS8FV7OZjuuQ/.A.vUWRnRO429tNFCfeaxOwG.oMyhJt.', 'a', 'a', NULL),
(99, 'aze', '$2y$10$F.3Zy/jtoLZBosphRhnTDeHzrDxPW0PtrTRTa/Ln0PeD.BptNScAS', 'aze', 'aze', NULL),
(102, 'aze', '$2y$10$wvIyQUlGH.7xOycdCQabSeFY4CnJuDw/huBpF4wNAwNUcvgYy/iDa', 'az', 'aze', NULL),
(103, 'azer', '$2y$10$fNO4sGbjBypzRBAKi4Ele.wIcM6wzYMJmAxfan9wS/MBnszq1yzk.', 'az', 'azer', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
