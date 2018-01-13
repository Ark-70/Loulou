-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 13 Janvier 2018 à 03:51
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

--
-- Contenu de la table `dtwl_admin`
--

INSERT INTO `dtwl_admin` (`id`, `pseudo`, `password`, `email`) VALUES
(1, 'Riza335', 'c6355555ca267ce0ca7f11ae3851695c5d83439b', 'william.lafarie@etu.univ-poitiers.fr'),
(2, 'Daiv33', '14e8ed162ddb14ba5024452845c8c3875bbe5157', 'david.traparic@etu.univ-poitiers.fr');

--
-- Contenu de la table `dtwl_param`
--

INSERT INTO `dtwl_param` (`id`, `title`, `status`, `copyright`, `random`) VALUES
(1, 'Gallerie', 1, 12, 0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
