-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 30 jan. 2022 à 14:09
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cerbs`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nomEt` varchar(50) NOT NULL,
  `prenomEt` varchar(25) NOT NULL,
  `villeEt` varchar(100) NOT NULL,
  `emailEt` varchar(40) NOT NULL,
  `adresseEt` varchar(30) NOT NULL,
  `filEt` varchar(30) NOT NULL,
  `telEt` varchar(15) NOT NULL,
  `idNivF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nomEt`, `prenomEt`, `villeEt`, `emailEt`, `adresseEt`, `filEt`, `telEt`, `idNivF`) VALUES
(1, 'ATTOISSE', 'MOHAMED', 'BANDAMADJI KOUBOINI', 'atoissemohamed@gmail.com', 'GD DAKAR', 'GENIE LOGICIEL', '781029060', 2),
(2, 'MOUAN-OUIA', 'ANLY KHALIFA', 'GNOUMADZA NVOUBARI', 'foretespoir@gmail.com', 'GD DAKAR', 'DROIT PUBLIC', '781081334', 3),
(3, 'ABDILLAH', 'AHAMADA', 'MDOUDE ', 'abdillahahamada368@gmail.com', 'CASTOR', 'SANTE PUBLIC  ', '772685628', 5);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `idNiv` int(11) NOT NULL,
  `nomNiv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`idNiv`, `nomNiv`) VALUES
(1, 'LICENCE 1'),
(2, 'LICENCE 2'),
(3, 'LICENCE 3'),
(4, 'MASTER 1'),
(5, 'MASTER 2'),
(6, 'THESE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNivF` (`idNivF`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`idNiv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `idNiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`idNivF`) REFERENCES `niveau` (`idNiv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
