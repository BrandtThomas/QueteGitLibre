-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 sep. 2022 à 12:40
-- Version du serveur :  5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dessin`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `redirection` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageExtrait` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `titre`, `description`, `redirection`, `studio`, `image`, `imageExtrait`) VALUES
(1, ' Shrek', '', '', 'DreamWorks Animation', 'img/affiche/shrekAffiche.jpg', 'img/extrait/shrekExtrait.jpg'),
(3, ' Kung fu Panda', '', '', '\r\nDreamWorks Animation', 'img\\Affiche\\kungFuPandaAffiche.jpg', 'img\\extrait\\kungFuPandaExtrait.jpg'),
(4, '\r\nMadagascar', '', '', 'DreamWorks Animation', 'img\\affiche\\madagascarAffiche.jpg', 'img\\extrait\\madagascarExtrait.jpg'),
(5, '\r\nLe Chat potté', '', '', 'DreamWorks Animation', 'img\\affiche\\leChatPotteAffiche.jpg', 'img\\extrait\\chatPotteExtrait.jpg'),
(6, 'Kung fu Panda 2', '', '', 'DreamWorks Animation', 'img\\affiche\\KungFuPanda2Affiche.jpg', 'img\\extrait\\kungFuPanda2.jpg'),
(7, 'Toys Story', '', '', 'Pixar', 'img\\affiche\\toysStoryAffiche.jpg', 'img\\extrait\\toyStoryExtrait.jpg\"'),
(8, 'Les indéstructibles', '', '', 'Pixar', 'img\\affiche\\lesIndestructiblesAffiche.jpg', 'img\\extrait\\lesIndestructiblesExtrait.jpg'),
(9, 'Monstre & cie', '', '', 'Pixar', 'img\\affiche\\monstreEtCompagnieAffiche.jpg', 'img\\extrait\\monstreEtCompagnieExtrait.jpg'),
(10, 'Vice Versa', '', '', 'Pixar', 'img\\affiche\\viceVersaAffiche.jpg', 'img\\extrait\\viceVersaExtrait.jpg'),
(11, ' Mulan', '', '', '\r\nDisney', 'img\\affiche\\mulanAffiche.jpg', 'img\\extrait\\mulanExtrait.jpg\"'),
(12, ' Pocahontas', '', '', '\r\nDisney', 'img\\affiche\\pocahontasAffiche.jpg', 'img\\extrait\\chatPotteExtrait.jpg'),
(13, ' Aladin', '', '', 'Disney', 'img\\affiche\\aladdinAffiche.jpg', 'img\\extrait\\aladdinExtrait.jpg'),
(14, ' Rebel', '', '', 'Disney', 'img\\affiche\\rebelleAffiche.jpg', 'img\\extrait\\rebelExtrait.jpg'),
(15, 'Raya et le Dernier Dragon', '', '', 'Disney', 'img\\affiche\\dragonBallAffiche.jpg', 'img\\extrait\\dragonBallExtrait.jpg'),
(16, 'Raiponce', '', '', 'Disney', 'img\\affiche\\raiponceAffiche.jpg', 'img\\extrait\\raiponceExtrait.jpg'),
(17, 'Wakfu', '', '', 'Ankama', 'img\\affiche\\wakfuAffiche.jpg', 'img\\extrait\\wakfuExtrait.jpg'),
(18, 'One Piece', '', '', 'Toei Animation', 'img\\affiche\\onePieceAffiche.jpg', 'img\\extrait\\onePieceExtrait.jpg'),
(19, ' Dragon Ball', '', '', 'One Piece', 'img\\affiche\\dragonBallAffiche.jpg', 'img\\extrait\\dragonBallExtrait.jpg'),
(20, 'Goldorak', '', '', 'Toei Animation', 'img\\affiche\\goldorakAffiche.jpg', 'img\\extrait\\goldorakExtrait.jpg'),
(21, '4 Digimon\r\n', '', '', 'Toei Animation', 'img\\affiche\\digimonAffiche.jpg', 'img\\extrait\\digimonExtrait.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
