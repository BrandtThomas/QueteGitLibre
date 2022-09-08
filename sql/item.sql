-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 sep. 2022 à 12:08
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quetegit`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `redirection` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageExtrait` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `titre`, `description`, `redirection`, `studio`, `image`, `imageExtrait`) VALUES
(1, ' Shrek', 'Il était une fois, dans un marais lointain, un ogre au nom de Shrek qui voit sa précieuse solitude brisée pas une invasion de personnages de contes de fées agaçants. Ils ont tous été bannis de leur royaume par le méchant Lord Farquaad. Décidé à sauver leurs maisons -- pour ne pas dire la sienne -- Shrek conclut un marché avec Farquad et décide de sauver la princesse Fiona pour qu\'elle se marie avec ce dernier. Mais Shrek ne réalise pas que la princesse à un secret sombre et profond.', '', 'DreamWorks Animation', 'img/affiche/shrekAffiche.jpg', 'img/extrait/shrekExtrait.jpg'),
(2, 'Digimon\n', 'Au fur et à mesure des saisons de la série, différents groupes de jeunes enfants fuient une certaine réalité quotidienne peu enviable pour se réfugier dans un autre monde fantastique, le monde digital, où ils sont voués à vivre des aventures aux côtés de créatures capables de se transformer appelées les Digimon.', '', 'Toei Animation', 'img/affiche/digimonAffiche.jpg', 'img/extrait/digimonExtrait.jpg'),
(3, ' Kung fu Panda', 'Passionné, costaud et quelque peu maladroit, Po est sans conteste le plus grand fan de kung fu. Serveur dans le restaurant de nouilles de son père, son habileté reste encore à prouver. Elu pour accomplir une ancienne prophétie, Po rejoint le monde du kung fu afin d\'apprendre les arts martiaux auprès de ses idoles, les légendaires `Cinq Cyclones\' : Tigresse, Grue, Mante, Vipère et Singe, sous les ordres de leur professeur et entraîneur, maître Shifu.', '', '\r\nDreamWorks Animation', 'img/Affiche/kungFuPandaAffiche.jpg', 'img/extrait/kungFuPandaExtrait.jpg'),
(4, '\r\nMadagascar', 'Un lion, un zèbre, une girafe, un hippopotame et une poignée de pingouins psychotiques fuient leur zoo new-yorkais pour secourir l\'un des leurs. Le destin les réunit sur l\'île de Madagascar. Ils doivent alors apprendre en formation accélérée les rudiments de la vie à l\'air libre.', '', 'DreamWorks Animation', 'img/affiche/madagascarAffiche.jpg', 'img/extrait/madagascarExtrait.jpg'),
(5, '\r\nLe Chat potté', 'Bien avant sa rencontre avec Shrek, le Chat potté avait déjà vécu de nombreuses aventures trépidantes. Tout commence le jour où, pour sauver la petite ville où il a grandi, le félin doit relever une mission périlleuse : s\'emparer de l\'Oie aux oeufs d\'or. Pour réussir cette opération délicate, le Chat potté décide de faire équipe avec la sublime Kitty Pattes de velours et le rusé Humpty Alexandre Dumpty.', '', 'DreamWorks Animation', 'img/affiche/leChatPotteAffiche.jpg', 'img/extrait/chatPotteExtrait.jpg'),
(6, 'Kung fu Panda 2', 'Le rêve de Po s\'est, enfin, exaucé : il est devenu le `Guerrier Dragon\'. Il a donc la lourde mission de protéger la `Vallée de la paix\' avec ses compagnons les `Cinq Cyclones\' : Tigresse, Grue, Mante, Vipère et Singe. Hélas, un nouvel ennemi vient bouleverser la sérénité de Po et ses amis. En effet, cet inconnu est fermement décidé à conquérir la Chine et à éliminer le kung fu au moyen d\'une arme secrète et indestructible.', '', 'DreamWorks Animation', 'img/affiche/KungFuPanda2Affiche.jpg', 'img/extrait/kungFuPanda2.jpg'),
(7, 'Toys Story', 'Quand le jeune Andy quitte sa chambre, ses jouets se mettent à mener leur propre vie sous la houlette de son pantin préféré, Woody le cow-boy. Andy ignore également que chaque anniversaire est une source d\'angoisse pour ses jouets qui paniquent à l\'idée d\'être supplantés par un nouveau venu -- ce qui arrive quand Buzz l\'Éclair est offert à Andy. Cet intrépide aventurier de l\'espace, venu d\'une lointaine galaxie, va semer la zizanie dans ce petit monde.', '', 'Pixar', 'img/affiche/toysStoryAffiche.jpg', 'img/extrait/toyStoryExtrait.jpg'),
(8, 'Les indestructibles', 'Bob Paar était jadis l\'un des plus grands super-héros de la planète. Tout le monde connaissait Mr. Indestructible, le héros qui, chaque jour, sauvait des centaines de vies et combattait le mal. Aujourd\'hui, Mr. Indestructible est un petit expert en assurances qui n\'affronte plus que l\'ennui et un tour de taille en constante augmentation.', '', 'Pixar', 'img/affiche/lesIndestructiblesAffiche.jpg', 'img/extrait/lesIndestructiblesExtrait.jpg'),
(9, 'Monstre & cie', 'À Monstropolis, la principale source d\'énergie provient des cris des enfants. Monstres & Cie est la plus grande usine de traitement de cris de la ville. Grâce au nombre impressionnant de portes de placards dont dispose l\'usine, une équipe de monstres pénètre dans le monde des humains pour terrifier durant la nuit les enfants et récolter leurs hurlements. Or, l\'arrivée d\'une enfant vient interrompre la compétition que se livrent deux monstres pour le titre de la créature la plus terrifiante.', '', 'Pixar', 'img/affiche/monstreEtCompagnieAffiche.jpg', 'img/extrait/monstreEtCompagnieExtrait.jpg'),
(10, 'Vice Versa', 'Grandir n\'est pas de tout repos, et la petite Riley ne fait pas exception à la règle. À cause du travail de son père, elle vient de quitter le Midwest et la vie qu\'elle a toujours connue pour emménager avec sa famille à San Francisco. Riley est guidée par ses émotions - la Joie, la Peur, la Colère, le Dégoût, et la Tristesse. Ces émotions vivent au quartier Général, le centre de contrôle de l\'esprit de Riley, et l\'aident et la conseillent dans sa vie quotidienne.', '', 'Pixar', 'img/affiche/viceVersaAffiche.jpg', 'img/extrait/viceVersaExtrait.jpg'),
(11, ' Mulan', 'Mulan est une belle jeune fille qui vit dans un village chinois. Malgré son amour et son respect pour sa famille, son mépris des conventions l\'éloigne des rôles dévolus aux filles devouées. Quand son pays est envahi par les Huns, Mulan, n\'écoutant que son courage, s\'engage à la place de son père dans le but de lui sauver la vie. Elle va devenir, avec l\'aide d\'un dragon en quète de réhabilitation, un guerrier hors du commun.', '', 'Disney', 'img/affiche/mulanAffiche.jpg', 'img/extrait/mulanExtrait.jpg'),
(12, ' Pocahontas', '1607, les colons font route vers le Nouveau Monde. John Smith, un jeune aventurier, part à la découverte de son rêve. Là-bas, à l\'écoute de ses instincts, une jeune indienne, Pocahontas, fera la connaissance de John et trouvera une réponse à ses rêves.', '', '\r\nDisney', 'img/affiche/pocahontasAffiche.jpg', 'img/extrait/pocahontasExtrait.jpg'),
(13, ' Aladdin', 'Le jeune et pauvre Aladdin vit avec son singe Abu dans les rues et est obligé de voler des aliments pour se nourrir. Un jour, il fait la connaissance de la princesse Jasmine, fille du Sultan, venue se promener incognito dans les quartiers populaires, à la recherche d\'aventure. Entre les deux jeunes gens, le coup de foudre est immédiat. Mais ils sont rapidement rattrapés par les gardes du sultan.', '', 'Disney', 'img/affiche/aladdinAffiche.jpg', 'img/extrait/aladdinExtrait.jpg'),
(14, ' Rebelle', 'Depuis la nuit des temps, au coeur des terres sauvages et mystérieuses des Highlands d\'Écosse, récits de batailles épiques et légendes mythiques se transmettent de génération en génération. Merida, l\'impétueuse fille du roi Fergus et de la reine Elinor, a un problème: elle est la seule fille au monde à ne pas vouloir devenir princesse. Merida va involontairement voir se réaliser un voeu bien malheureux et précipite le royaume dans le chaos.', '', 'Disney', 'img/affiche/rebelleAffiche.png', 'img/extrait/rebelExtrait.jpg'),
(15, 'Raya et le Dernier Dragon', 'Humains et dragons vivaient en harmonie au royaume de Kumandra, jusqu\'à ce qu\'une force maléfique ne s\'abatte sur le royaume. Les dragons se sacrifièrent alors pour sauver l\'humanité. Lorsque cette force réapparait cinq siècles plus tard, Raya, une guerrière solitaire, se met en quête du dernier dragon pour restaurer l\'harmonie sur Kumandra, désormais divisée. Commence pour elle un long voyage au cours duquel elle découvrira qu\'il lui faudra bien plus qu\'un dragon pour sauver le monde.', '', 'Disney', 'img/affiche/rayaAffiche.jpg', 'img/extrait/rayaExtrait.jpg'),
(16, 'Raiponce', 'Lorsque Flynn Rider, le bandit le plus recherché du royaume, se réfugie dans une mystérieuse tour, il se retrouve pris en otage par Raiponce, une belle et téméraire jeune fille à l\'impressionnante chevelure de 20 mètres de long, gardée prisonnière par Mère Gothel. L\'étonnante geôlière de Flynn cherche un moyen de sortir de cette tour où elle est enfermée depuis des années. Elle passe alors un accord avec le séduisant brigand.', '', 'Disney', 'img/affiche/raiponceAffiche.jpg', 'img/extrait/raiponceExtrait.jpg'),
(17, 'Wakfu', 'C\'est en l\'an 981 que Yugo, un jeune enfant qui a été confié il y a 12 ans à Alibert, un aubergiste ex chasseur de primes, prend conscience de ses pouvoirs alors qu\'il cuisinait : il peut créer des portails de téléportation.', '', 'Ankama', 'img/affiche/wakfuAffiche.jpg', 'img/extrait/wakfuExtrait.jpg'),
(18, 'One Piece', 'L\'histoire de One Piece se déroule dans un monde fictif dominé par les océans, où certains pirates aspirent à une ère de liberté et d\'aventure connue comme « l\'âge d\'or de la piraterie ». Cette époque fut inaugurée à la suite des derniers mots prononcés par le roi des pirates, Gol D.', '', 'Toei Animation', 'img/affiche/onePieceAffiche.jpg', 'img/extrait/onePieceExtrait.jpg'),
(19, ' Dragon Ball', 'L\'histoire de Dragon Ball suit la vie de Son Goku, un garçon à la queue de singe inspiré du conte traditionnel chinois La Pérégrination vers l\'Ouest. Son Goku est un jeune garçon simple d\'esprit et pur doté d\'une queue de singe et d\'une force extraordinaire.', '', 'One Piece', 'img/affiche/dragonBallAffiche.png', 'img/extrait/dragonBallExtrait.jpg'),
(20, 'Goldorak', 'Vega, Grand Stratéguerre de la planète Stykadès, s\'empare d\'Euphor, une planète pacifique qu\'il va ravager avec sa flotte de soucoupes et de robots géants. Durant l\'attaque qui mènera à la destruction finale d\'Euphor, la famille royale est exterminée.', '', 'Toei Animation', 'img/affiche/goldorakAffiche.png', 'img/extrait/goldorakExtrait.jpg'),
(27, 'kompromat', 'zaheoiazioeoazhieouiazheoiaheoiahezoiehaoihzoziehaoihze', 'https://www.php.net/manual/fr/function.unlink.php', 'Ankama', 'img/affiche/1433854.jpg', 'img/extrait/0082010.jpg'),
(28, 'kompromat', 'azejhioazhjeoiazheioaz ehoiazheoiahzoiehaoi zehaozheoiahozieh aoihzeoi', 'https://www.google.com/search?rlz=1C1VDKB_frFR1012FR1012&sxsrf=ALiCzsb232rxxdtBI0rta4qUIa3JnbXHfQ:1662631511471&si=AC1wQDB_GlWiC_HqSzJZa__4YlVCH7kWkGlsal7Zs1e0EacnLx9rL-3oHJg73CTqTqtIJK8pMrxOt9ve5RxWWM28sOzwocYeEm1Wr2mHgHVXyGgIIL1QMXpGq0GbL5PErGKZwiuvYKzt', 'Ankama', 'img/affiche/1433854.jpg', 'img/extrait/0082010.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
