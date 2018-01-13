-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 13 Janvier 2018 à 03:50
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dev.gallery.fr`
--

-- --------------------------------------------------------

--
-- Structure de la table `dtwl_admin`
--

CREATE TABLE `dtwl_admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dtwl_param`
--

CREATE TABLE `dtwl_param` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `copyright` int(11) NOT NULL,
  `random` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dtwl_tiles`
--

CREATE TABLE `dtwl_tiles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `layout` varchar(15) NOT NULL,
  `bg_color_text` varchar(20) DEFAULT NULL,
  `color_text` varchar(20) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `bg_color_image` varchar(20) DEFAULT NULL,
  `auto_size` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `dtwl_admin`
--
ALTER TABLE `dtwl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dtwl_param`
--
ALTER TABLE `dtwl_param`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dtwl_tiles`
--
ALTER TABLE `dtwl_tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `dtwl_admin`
--
ALTER TABLE `dtwl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `dtwl_param`
--
ALTER TABLE `dtwl_param`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `dtwl_tiles`
--
ALTER TABLE `dtwl_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
