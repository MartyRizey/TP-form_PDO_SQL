-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 19 jan. 2020 à 13:03
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php_form_login`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `age`, `email`) VALUES
(111, 'Sarah', '123456', 22, 'sarah.biboche@mail.com'),
(147, 'Larry', 'auBeurre', 0, 'larry.cohvert@mail.com'),
(149, 'Laurent', 'abracadabra', 12, 'laurent.barre@mail.fr'),
(150, 'Marcel', 'ploufdansleau', 0, 'marcel.demer@mail.com'),
(151, 'Lorie', 'oreille', 0, 'lorie.culaire@mail.fr'),
(152, 'Mélanie', 'pastis51', 51, 'melanie.zetdanlever@hic.fr'),
(153, 'Akim', 'papiertoilette', 38, 'akim.fechier@mail.com'),
(156, 'Marc', 'sanglier', 47, 'marc.hassin@mail.fr'),
(158, 'Momo', 'motdepasse', 11, 'toto.mobile@gmail.fr'),
(159, 'Th&eacute;o', 'sixGarettes', 63, 'theo.rifumeuse@mail.fr'),
(160, 'patrice', '', 58, 'patrice.tounais@mail.uk'),
(161, 'Jean', 'lequel?', 0, 'jean-peuplu@email.fr'),
(162, 'Félicie', '', 0, 'felicie-tation@net.net'),
(164, 'Vincent', 'jai1longueurdavance', 42, 'vincentTimetre@gratos.com'),
(165, 'Tom', '', 0, 'tom.hawok@siounet.us'),
(174, 'Remy', '123', 15, 'remy.fasol@dingdong.eu'),
(177, 'Remy', 'centFamille', 10, ''),
(182, 'toto', 'motdepasse', 32, 'lequel@surprise.fr'),
(184, 'toto', 'tartine', 0, 'auchocolat@miam.fr'),
(185, 'toto', 'ilyenapas', 12, 'passnull@toto.to');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
