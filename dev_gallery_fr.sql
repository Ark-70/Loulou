-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Novembre 2017 à 16:26
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

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
-- Structure de la table `admin`
--

CREATE TABLE `dtwl_admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `param`
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
-- Structure de la table `tiles`
--

CREATE TABLE `dtwl_tiles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `layout` tinyint(4) NOT NULL,
  `bg_color_text` varchar(20) NOT NULL,
  `color_text` varchar(20) NOT NULL,
  `position` int(11) NOT NULL,
  `bg_color_image` varchar(20) NOT NULL,
  `auto_size` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `dtwl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `param`
--
ALTER TABLE `dtwl_param`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tiles`
--
ALTER TABLE `dtwl_tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `dtwl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `param`
--
ALTER TABLE `dtwl_param`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tiles`
--
ALTER TABLE `dtwl_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
