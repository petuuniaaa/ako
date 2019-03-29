-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 29 mars 2019 à 18:35
-- Version du serveur :  10.3.13-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `philippetran_tamaiticorp`
--

-- --------------------------------------------------------

--
-- Structure de la table `avatar`
--

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `nom` varchar(140) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avatar`
--

INSERT INTO `avatar` (`id`, `nom`, `image`) VALUES
(1, 'Clown', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarClown.svg'),
(2, 'Etoile', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarEtoiledeMer.svg'),
(3, 'Fleur', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarFleur.svg'),
(4, 'Nuage', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarNuage.svg'),
(5, 'Poire', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarPoire.svg'),
(6, 'Princesse', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarPrincesse.svg'),
(7, 'Trefle', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarTrefle.svg'),
(8, 'Coeur', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarCoeur.png'),
(9, 'Beta', 'https://image.tamaiticorp.fr/Graphisme/Avatar%20Compte%20Uti/AvatarBeta.svg');

-- --------------------------------------------------------

--
-- Structure de la table `Collection`
--

CREATE TABLE `Collection` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `joueur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Collection`
--

INSERT INTO `Collection` (`id`, `image`, `joueur`) VALUES
(1, '14', 0),
(2, '18', 0),
(3, '12', 0),
(4, '13', 0),
(5, '19', 0),
(6, '18', 0),
(7, '20', 0),
(8, '2', 0),
(9, '11', 0),
(10, '21', 3),
(11, '12', 3),
(12, '7', 3),
(13, '32', 0),
(14, '18', 2),
(15, '5', 2),
(16, '14', 2),
(17, '12', 2),
(18, '20', 2),
(19, '17', 3),
(20, '38', 3),
(21, '7', 3),
(22, '32', 3),
(23, '36', 3),
(24, '5', 3),
(25, '35', 34),
(26, '20', 2),
(27, '33', 2),
(28, '8', 2),
(29, '21', 2);

-- --------------------------------------------------------

--
-- Structure de la table `email_news`
--

CREATE TABLE `email_news` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Image_jeu`
--

CREATE TABLE `Image_jeu` (
  `id` int(11) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `nom_image` varchar(50) CHARACTER SET utf8 NOT NULL,
  `image_jeu` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Image_jeu`
--

INSERT INTO `Image_jeu` (`id`, `theme`, `nom_image`, `image_jeu`, `description`, `id_jeu`) VALUES
(1, 'animaux', 'Chat', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/chat.svg', 'Voici le chat ! Les chats sont des petits animaux à 4 pattes qui aiment dormir, jouer, manger et se promener.', 0),
(2, 'animaux', 'Cheval', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/cheval.svg', 'Voici le cheval ! Le cheval est un grand animal qui aime la vie en plein air. Tu peux, toi aussi, les chevaucher et explorer le monde comme un héro qui vie une grande aventure !', 0),
(3, 'animaux', 'Chien', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/chien.svg', 'Voici le chien ! Le chien est un animal à 4 pattes, mais c’est aussi le meilleur ami de l’homme. Il aime les croquettes, les os, et accompagner ses maîtres en toutes circonstances.', 0),
(4, 'animaux', 'Coccinelle', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/coccinelle.svg', 'La coccinelle est un insecte volant de couleur rouge ou orange avec des points noirs. Il se raconte que la coccinelle porte chance. Si une coccinelle se pose sur toi, le nombre de points noirs indiquerait le nombre de mois où tu auras de la chance !', 0),
(5, 'animaux', 'Cochon', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/cochon.svg', 'Voici le cochon ! Le cochon est un petit animal rose avec une queue en forme de tire-bouchon. Il aime se rouler dans la boue.', 0),
(6, 'animaux', 'Coq', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/coq.svg', 'Voici le coq ! Le coq est le mâle de la poule. Il est là, chaque matin, pour te réveiller grâce à son chant.', 0),
(7, 'animaux', 'Éléphant', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/elephant.svg', 'L’éléphant est un animal imposant possédant une grande trompe. Il aime prendre soin de sa famille, ainsi que se baigner dans des points d’eau.', 0),
(8, 'animaux', 'Girafe', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/giraffe.svg', 'La girafe est un animal africain très grand possédant des taches sur tout son corps, ainsi qu’un très long cou.', 0),
(9, 'animaux', 'Grenouille', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/grenouille.svg', 'La grenouille est un petit animal de couleur verte avec de gros yeux. Son environnement préféré est le lac.', 0),
(10, 'animaux', 'Koala', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/koala.svg', 'Le koala est un petit animal australien au pelage gris qui aime grimper et s’accrocher aux arbres. Sa feuille favorite est l’eucalyptus.', 0),
(11, 'animaux', 'Lapin', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/lapin.svg', 'Le lapin est un petit animal avec de grandes oreilles qui adore les carottes et qui se déplace avec des petits sauts.', 0),
(12, 'animaux', 'Lion', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/lion.svg', 'Voici le lion ! Le lion est un animal à 4 pattes vivant en Afrique et en Asie qui rugit et chasse pour nourrir sa famille.', 0),
(13, 'animaux', 'Mouton', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/mouton.svg', 'Voici le mouton ! Le mouton est un petit animal à 4 pattes avec une toison laineuse et frisée. Il se déplace en troupeau avec tous ses amis.', 0),
(14, 'animaux', 'Panda', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/panda.svg', 'Le panda est un animal vivant dans les forêts d’Inde et en Chine au pelage noir et blanc qui se nourrit de tiges et de feuilles de bambou.', 0),
(15, 'animaux', 'Poisson', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/poisson.svg', 'Le poisson est un animal vivant sous l’eau avec des nageoirs qui lui permettent de se déplacer et des branchies pour respirer.', 0),
(16, 'animaux', 'Renard', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/renard.svg', 'Le renard est un animal au pelage orange et blanc avec des oreilles pointues et une queue touffue.', 0),
(17, 'animaux', 'Singe', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/singe.svg', 'Le singe est un mammifère qui vit en forêt. Il aime manger des bananes et faire l’acrobate en se balançant de lianes en lianes entre les arbres.', 0),
(18, 'animaux', 'Souris', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/souris.svg', 'La souris est un tout petit animal à 4 pattes qui est très discret, qui court très vite, et qui aime manger du fromage.', 0),
(19, 'animaux', 'Tigre', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/tigre.svg', 'La tigre est l’animal le plus grand et le plus puissant de la famille des félins. Il vient d’Asie et possède un pelage roux avec des rayures noires.', 0),
(20, 'animaux', 'Tortue', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/tortue.svg', 'La tortue est un petit reptile à 4 pattes possédant une peau verte ainsi qu’une carapace. Ne la défier pas à la course, elle est très lente.', 0),
(21, 'animaux', 'Vache', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20animaux/vache.svg', 'Voici la vache ! La vache est la femelle du boeuf. Comme lui, la vache est très imposante, et c’est elle qui produit le lait que nous buvons.', 0),
(22, 'drapeaux', 'Algérie', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/Alg%C3%A9rie.svg', 'Voici le drapeau de l’Algérie ! Sa capitale est Alger, et ses habitants sont appelés les algériens.', 0),
(23, 'drapeaux', 'Allemagne', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/Allemagne-01.svg', 'Voici le drapeau de l’Allemagne ! Sa capitale est Berlin, et ses habitants sont appelés les allemands.', 0),
(24, 'drapeaux', 'France', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/France.svg', 'Voici le drapeau de la France ! Sa capitale est Paris, et ses habitants sont appelés les francais.', 0),
(25, 'drapeaux', 'Italie', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/Italie.svg', 'Voici le drapeau de l’Italie ! Sa capitale est Rome, et ses habitants sont appelés les italiens.', 0),
(26, 'drapeaux', 'Japon', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/Japon.svg', 'Voici le drapeau du Japon ! Sa capitale est Tokyo, et ses habitants sont appelés les japonais.', 0),
(27, 'drapeaux', 'Nigéria', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/nigeria.svg', 'Voici le drapeau du Nigeria ! Sa capitale est Abuja, et ses habitants sont les nigérians.\r\n', 0),
(28, 'drapeaux', 'Norvège', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/norvege.svg', 'Voici le drapeau de la Norvège ! Sa capitale est Oslo, et ses habitants sont appelés les norvégiens.', 0),
(29, 'drapeaux', 'Suède', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20drapeaux/suede888-01.svg', 'Voici le drapeau de la Suède ! Sa capitale est Stockholm, et ses habitants sont appelés les suédois.', 0),
(30, 'monuments', 'Arc de Triomphe', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/ArcTriomphe.svg', 'Voici le drapeau de la Suède ! Sa capitale est Stockholm, et ses habitants sont appelés les suédois.', 0),
(31, 'monuments', 'Big Ben', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/BigBen.svg', 'Big Ben est le nom donné à la grande cloche se trouvant au sommet de la tour Elizabeth en Angleterre. Ce monument a été construit en 1858.', 0),
(32, 'monuments', 'Colisée', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/Colise.svg', 'Le Colisée est un grand amphithéâtre Italien dont la construction a commencé entre 70 et 72 avant J.-C sous l’empereur Vespasien, et s’est terminé en 80 sous Titus.', 0),
(33, 'monuments', 'Grande Muraille de Chine', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/MurailleChine.svg', 'La Grande Muraille de Chine a été construite et reconstruite plusieurs fois et à plusieurs endroits entre le 3e siècle av. J.-C. et le 17e siècle. Son but était de défendre la frontière nord de la Chine.', 0),
(34, 'monuments', 'Sphinx', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/Sphinx.svg', 'Le Sphinx est une statue de l’Antiquité qui se dresse devant les pyramides de Gizeh. Elle a été construite en 2500 avant JC. Il s’agit de la sculpture la plus grande du monde.', 0),
(35, 'monuments', 'Taj Mahal', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/TajMahal.svg', 'Le Taj Mahal, appelé aussi le palais de la couronne, est un palais se situant en Inde et dont la construction a été achevée en 1648.', 0),
(36, 'monuments', 'Tour de Pise', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/TourdePise.svg', 'La Tour de Pise est un monument italien considéré comme un symbole de l’Italie. Cette tour est notamment célèbre par son inclinaison. Sa construction a eu lieu en 1173.', 0),
(37, 'monuments', 'Pyramide', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/pyramides.svg', 'Les pyramides d’Egypte, dont les pyramides de Gizeh, sont des vestiges de l’Antiquité, comportant de grand mystères autour de leur construction.', 0),
(38, 'monuments', 'Statue de la Liberté', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/statuedelaliberte.svg', 'La statue de la Liberté est un des monuments les plus populaires des Etats-Unis par son symbolisme de la Liberté. Cette statue a été dévoilée au grand jour en 1886.', 0),
(39, 'monuments', 'Tour Effiel', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20monuments/tourEiffel.svg', 'La Tour Eiffel est un monument français considéré comme le monument le plus haut pendant 40 ans. Sa construction s’est terminée en 1889. Elle sert aujourd’hui d’émetteur de programmes radiophoniques et télévisés par ses antennes.', 0),
(40, 'mythologie', 'Cupidon', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20Mythologie-Fantastique/Cupidon.svg', 'Cupidon, dans la mythologie romaine, représente le dieu de l’Amour. En effet, grâce à son arc et son carquois, Cupidon pourrait lancer des flèches qui rendrait les personnes touchées amoureuses du premier individu qu’elles verrait.', 0),
(41, 'mythologie', 'Licorne', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Theme%20Mythologie-Fantastique/Licorne.svg', 'La licorne est un animal fantastique ressemblant à un cheval avec une corne au milieu du front. Elle est souvent représentée en blanc avec une crinière rose.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Jeu`
--

CREATE TABLE `Jeu` (
  `id` int(11) NOT NULL,
  `nom_jeu` varchar(50) NOT NULL,
  `image_collection` varchar(50) NOT NULL,
  `miniature_collection` varchar(50) NOT NULL,
  `type_jeu` int(11) NOT NULL,
  `theme_jeu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Jeu_reseau`
--

CREATE TABLE `Jeu_reseau` (
  `id` int(11) NOT NULL,
  `joueur1` int(11) NOT NULL,
  `joueur2` int(11) NOT NULL,
  `debut` datetime NOT NULL,
  `fin_joueur1` datetime NOT NULL,
  `fin_joueur2` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `puzzle`
--

CREATE TABLE `puzzle` (
  `id` int(11) NOT NULL,
  `nom_puzzle` varchar(50) NOT NULL,
  `piece_puzzle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `puzzle`
--

INSERT INTO `puzzle` (`id`, `nom_puzzle`, `piece_puzzle`) VALUES
(1, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle1.svg'),
(2, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle2.svg'),
(3, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle3.svg'),
(4, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle4.svg'),
(5, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle5.svg'),
(6, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle6.svg'),
(7, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle7.svg'),
(8, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle8.svg'),
(9, '1', 'https://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/CoccinellePuzzle/coccinellepuzzle9.svg'),
(10, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-01.svg'),
(11, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-02.svg'),
(12, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-03.svg'),
(13, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-04.svg'),
(14, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-05.svg'),
(15, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-06.svg'),
(16, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-07.svg'),
(17, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-08.svg'),
(18, '2', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/ElephantPuzzle/elephantpuzzle-09.svg'),
(19, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-01.svg'),
(20, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-02.svg'),
(21, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-03.svg'),
(22, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-04.svg'),
(23, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-05.svg'),
(24, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-06.svg'),
(25, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-07.svg'),
(26, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-08.svg'),
(27, '3', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/PoissonPuzzle/poissonpuzzle-09.svg'),
(28, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-01.svg'),
(29, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-02.svg'),
(30, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-03.svg'),
(31, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-04.svg'),
(32, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-05.svg'),
(33, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-06.svg'),
(34, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-07.svg'),
(35, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-08.svg'),
(36, '4', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/RenardPuzzle/renardpuzzle-09.svg'),
(37, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-01.svg'),
(38, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-02.svg'),
(39, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-03.svg'),
(40, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-04.svg'),
(41, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-05.svg'),
(42, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-06.svg'),
(43, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-07.svg'),
(44, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-08.svg'),
(45, '5', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/AnimauxPuzzle/koalaPuzzle/koalapuzzle-09.svg'),
(46, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-01.svg'),
(47, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-02.svg'),
(48, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-03.svg'),
(49, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-04.svg'),
(50, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-05.svg'),
(51, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-06.svg'),
(52, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-07.svg'),
(53, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-08.svg'),
(54, '6', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/ColiseePuzzle/ColiseePuzzle-09.svg'),
(55, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-01.svg'),
(56, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-02.svg'),
(57, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-03.svg'),
(58, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-04.svg'),
(59, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-05.svg'),
(60, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-06.svg'),
(61, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-07.svg'),
(62, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-08.svg'),
(63, '7', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/MuraillePuzzle/MurailleChinePuzzle-09.svg'),
(64, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-01.svg'),
(65, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-02.svg'),
(66, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-03.svg'),
(67, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-04.svg'),
(68, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-05.svg'),
(69, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-06.svg'),
(70, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-07.svg'),
(71, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-08.svg'),
(72, '8', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/PyramidesPuzzle/pyramidesPuzzle-09.svg'),
(73, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-01.svg'),
(74, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-02.svg'),
(75, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-03.svg'),
(76, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-04.svg'),
(77, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-05.svg'),
(78, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-06.svg'),
(79, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-07.svg'),
(80, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-08.svg'),
(81, '9', 'http://image.tamaiticorp.fr/Graphisme/ImagesTheme/Puzzle/MonumentPuzzle/SphinxPuzzle/SphinxPuzzle-09.svg');

-- --------------------------------------------------------

--
-- Structure de la table `Quizz_question`
--

CREATE TABLE `Quizz_question` (
  `id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `id_theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Quizz_reponse`
--

CREATE TABLE `Quizz_reponse` (
  `id` int(11) NOT NULL,
  `reponse` int(11) NOT NULL,
  `valeur` bit(2) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Theme`
--

CREATE TABLE `Theme` (
  `id` int(11) NOT NULL,
  `nom_theme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Theme`
--

INSERT INTO `Theme` (`id`, `nom_theme`) VALUES
(1, 'animaux'),
(2, 'drapeaux'),
(3, 'monument'),
(4, 'mythologie');

-- --------------------------------------------------------

--
-- Structure de la table `Type_jeu`
--

CREATE TABLE `Type_jeu` (
  `id` int(11) NOT NULL,
  `nom_jeu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pieces_de_puzzle` varchar(50) NOT NULL,
  `reglages` varchar(50) NOT NULL,
  `controle_parental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id`, `pseudo`, `avatar`, `password`, `age`, `pieces_de_puzzle`, `reglages`, `controle_parental`) VALUES
(2, 'celine', 'https://image.tamaiticorp.fr/Graphisme/Avatar Compte Uti/AvatarFleur.svg', '$2y$10$4dIIeAyJWCa1TZpg17wl5uIymgXbbnxMB3BgjQAy7NjqIv3TODEx.', 0, '', '', ''),
(3, 'keny', 'https://image.tamaiticorp.fr/Graphisme/Avatar Compte Uti/AvatarPoire.svg', '$2y$10$.XTZ6917MmUrR9RNFJ/iKe7r920AKuB17ZbTc4JiLjtz0.pAxSxhS', 0, '', '', ''),
(8, 'ninadou', '', '$2y$10$azlXMP.NrVDxt.yYTtZ8MOg63WTyxJkSoukfIL6dmguAk6YVgJLkO', 0, '', '', ''),
(10, 'jujudu77', 'https://image.tamaiticorp.fr/Graphisme/Avatar Compte Uti/AvatarPoire.svg', '$2y$10$LaDLhC.SHQt0ykTQDbRXU.og9PchL11NKxjT7peSLiqbmRn64Z4J2', 0, '', '', ''),
(11, 'aurelien3', '', '$2y$10$Skt8t13VdcAWdjULRLGNgOamiksVqgdf5KGx7KZGZqpWQP.6bYkEm', 0, '', '', ''),
(14, 'aurelien', '', '$2y$10$HnOK2gcV.t/OFD1KW9BMJOhpjIkAJYJWpqaMhXAySdLBR1Zg6M0Ly', 0, '', '', ''),
(16, 'philippe', 'https://image.tamaiticorp.fr/Graphisme/Avatar Compte Uti/AvatarTrefle.svg', '$2y$10$fbOrU9Mgy6n4wZEDHxTGjeBxpVxYALdsu4/SpQjbaKxH1/0sBG6Uy', 0, '', '', ''),
(19, 'aurelsan', 'https://image.tamaiticorp.fr/Graphisme/Avatar Compte Uti/AvatarNuage.svg', '$2y$10$/Ww24OXj8Cy.IHHl/YF8y.WUUYh3Tu5qUt4OS2YwOUlhe.Er2yHZa', 0, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `Victoire_utilisateur`
--

CREATE TABLE `Victoire_utilisateur` (
  `id` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Collection`
--
ALTER TABLE `Collection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email_news`
--
ALTER TABLE `email_news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Image_jeu`
--
ALTER TABLE `Image_jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Jeu`
--
ALTER TABLE `Jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Jeu_reseau`
--
ALTER TABLE `Jeu_reseau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `puzzle`
--
ALTER TABLE `puzzle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Quizz_question`
--
ALTER TABLE `Quizz_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_theme` (`id_theme`);

--
-- Index pour la table `Quizz_reponse`
--
ALTER TABLE `Quizz_reponse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Theme`
--
ALTER TABLE `Theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Type_jeu`
--
ALTER TABLE `Type_jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Victoire_utilisateur`
--
ALTER TABLE `Victoire_utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Collection`
--
ALTER TABLE `Collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `email_news`
--
ALTER TABLE `email_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Image_jeu`
--
ALTER TABLE `Image_jeu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `puzzle`
--
ALTER TABLE `puzzle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `Theme`
--
ALTER TABLE `Theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
