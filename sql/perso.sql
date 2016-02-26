-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 26 Février 2016 à 17:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `id_parent`, `libelle`) VALUES
(2, NULL, 'DevOps'),
(3, NULL, 'IT'),
(4, NULL, 'dev');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `path` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` int(11) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `resume` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `driver_license` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `img` (`img`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id`, `img`, `firstname`, `lastname`, `mail`, `phonenumber`, `adress1`, `adress2`, `birthdate`, `resume`, `title`, `driver_license`) VALUES
(1, NULL, 'Jonathan', 'Duval', 'jtj.duval@gmail.com', '0649246333', '13 rue de la destinée app 101', '95800 Cergy', '1990-01-19', 'Développeur Web autodidacte et véritable passionné, j''aime ce que je fais et j''aime le faire bien.<br>\r\nJe m''adapte facilement et je cherche toujours a m''améliorer.', 'Développeur web', 1);

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `libelle` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `job_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`id_category`,`img`),
  KEY `category_2` (`id_category`),
  KEY `id_category` (`id_category`),
  KEY `img` (`img`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `job`
--

INSERT INTO `job` (`id`, `id_category`, `img`, `libelle`, `company`, `content`, `disabled`, `start`, `end`, `url`, `job_type`) VALUES
(1, 4, NULL, 'G2J', '', 'test content', 0, '2015-09-01', '2016-03-11', NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `link_job_project`
--

CREATE TABLE IF NOT EXISTS `link_job_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_job` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_job` (`id_job`,`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `link_job_skill`
--

CREATE TABLE IF NOT EXISTS `link_job_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skill` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skill` (`id_skill`,`id_job`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `link_skill_project`
--

CREATE TABLE IF NOT EXISTS `link_skill_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_skill` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skill` (`id_skill`,`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `img` int(11) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `source` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`,`img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category` (`category`,`img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `FK_INFORMATION_FILE` FOREIGN KEY (`img`) REFERENCES `files` (`id`);

--
-- Contraintes pour la table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `FK_JOB_CATEGORY` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
