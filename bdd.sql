-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Mai 2016 à 07:34
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ligue` varchar(20) NOT NULL,
  `rang` int(6) NOT NULL,
  `sexe` int(2) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `MotPasse` varchar(255) NOT NULL,
  `Droits` enum('ADMIN','USER') NOT NULL,
  PRIMARY KEY (`ID`,`rang`,`sexe`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`ID`, `ligue`, `rang`, `sexe`, `Pseudo`, `mail`, `MotPasse`, `Droits`) VALUES
(100, 'or', 2, 1, 'salut', 'jean@', 'jean', 'USER'),
(99, 'argent', 3, 1, 'Jacky', 'jacky@gmail.com', 'Saimon007', 'USER'),
(97, 'or', 5, 1, 'Eylidal', 'sim.roux1@gmail.com', 'Sault', 'USER'),
(98, 'or', 4, 1, 'Jeanbon', 'salut@jean.fr', 'salut', 'USER'),
(94, '', 0, 0, 'Zapp', '', '', 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Pseudo` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii AUTO_INCREMENT=63 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `message`, `Pseudo`) VALUES
(53, '			Salut\r\n', 'pseudo'),
(54, 'salut à toi', 'JeanEude'),
(55, 'Bonjour', 'Michelle'),
(56, 'ça va ?', 'Momo'),
(57, 'Bien bien', 'JeanEude'),
(58, 'rwsgws', 'gg'),
(59, 'qrgqergqreg', 'gg'),
(60, 'resgrege', 'gg'),
(61, 'iliulhil', 'gg'),
(62, 'wdfghjt', 'gg');

-- --------------------------------------------------------

--
-- Structure de la table `t_news`
--

CREATE TABLE IF NOT EXISTS `t_news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Texte` tinytext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Auteur` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateModification` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idNews`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii AUTO_INCREMENT=49 ;

--
-- Contenu de la table `t_news`
--

INSERT INTO `t_news` (`idNews`, `Titre`, `Texte`, `Auteur`, `DateCreation`, `DateModification`) VALUES
(27, 'Bonsoir, ceci est peut ?tre l''un des derniers test', 'Bonne soir?e.', 'Jean', '0000-00-00 00:00:00', NULL),
(26, 'Salut', 'brefffffff', 'Jean', '0000-00-00 00:00:00', NULL),
(28, 'Salut éé', 'ééér"''yg''(', 'Paul', '0000-00-00 00:00:00', NULL),
(29, 'CECI EST UNE NEEEWWWSSS', 'BONSOIR JE SUIS JEAN ET JE SUIS ENERVE', 'Jean', '0000-00-00 00:00:00', NULL),
(30, 'DENIS', 'Déééééééééé', 'Jean', '0000-00-00 00:00:00', NULL),
(31, 'àààééé', 'àààééé', 'Jean', '0000-00-00 00:00:00', NULL),
(32, 'azeéé', 'éééàà', 'Jean', '0000-00-00 00:00:00', NULL),
(33, 'Sudrtur', 'aezres', 'Jean', '0000-00-00 00:00:00', NULL),
(34, 'azeretr', 'er"''(''''gzzfe', 'Jean', '2016-03-09 08:23:39', '2016-03-09 08:23:39'),
(35, 'qzsedrf', 'yguyhu', 'Jean', '0000-00-00 00:00:00', NULL),
(36, 'test', 'test 1', 'Jean', '2016-03-09 08:30:00', NULL),
(37, '''(z''-e(', 'erz"etr', 'Jean', '2016-03-09 08:37:07', '2016-03-09 08:38:30'),
(38, 'ersrty', 'errdytfyg', 'Jean', '2016-03-18 13:36:35', NULL),
(39, 'Une new toute neuve', 'Salut', 'Eylidal', '2016-03-21 23:41:26', NULL),
(40, 'Srehqe', 'qsfqgrggreg485', 'Jeanbon', '2016-03-23 07:20:18', NULL),
(41, 'ar"zetry', 'azGRQEHREJ', 'Eylidal', '2016-03-23 08:01:21', NULL),
(42, 'Salut jean mi', 'CACACACACACACAPROUTPROUTPROUT2', 'Jeanbon', '2016-05-04 06:15:03', NULL),
(43, 'Truc', 'Szgzg', 'Jacky', '2016-05-04 06:54:39', NULL),
(44, 'Salut jean mi 2', 'DFZRHYFKULMOUILYUKYFTHR', 'Jacky', '2016-05-04 06:55:16', NULL),
(45, 'Guy il est trop bete...', 'Guy c''est un guy ', 'Jeanbon', '2016-05-10 15:30:48', NULL),
(46, 'Un après-midi ou Une après-midi', 'Les deux sont possible en réalité.', 'Jeanbon', '2016-05-10 15:36:42', NULL),
(47, 'Une news pas comme les autres', 'Ceci n''est pas une news comme les autres..', 'Jacky', '2016-05-10 15:38:44', NULL),
(48, 'Que dire de plus ?', 'Il était une fois dans la ville de fois un homme de fois qui dit.', 'Eylidal', '2016-05-10 15:40:03', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
