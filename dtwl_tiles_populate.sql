-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Janvier 2018 à 22:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

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
-- Contenu de la table `dtwl_tiles`
--

INSERT INTO `dtwl_tiles` (`id`, `title`, `description`, `image`, `layout`, `bg_color_text`, `color_text`, `position`, `bg_color_image`, `auto_size`) VALUES
(1, 'GrumpyCat', '', 'Cat.jpg', 'full', NULL, NULL, NULL, NULL, NULL),
(2, 'ZlataillePain', 'Zlataille revient de la boulangerie', 'ZlataillePain.jpg', 'half txtfirst', NULL, NULL, NULL, NULL, NULL),
(3, 'ZlataillePlage', 'Zlataille va à la plage avec sa jolie bouée', 'ZlataillePlage.jpg', 'half', NULL, NULL, NULL, NULL, NULL),
(4, 'ZlataillePlongée', 'Zlataille part faire de la plongée !', 'ZlataillePLonge.jpg', 'tier txtfirst', NULL, NULL, NULL, NULL, NULL),
(5, 'ZlatailleCinéma', 'Zlataille viens de voir un super film ! ', 'ZlatailleCine.jpg', 'tier', NULL, NULL, NULL, NULL, NULL),
(6, 'ZlataillePolice', 'Zlataille joue aux policiers avec son fils', 'ZlataillePolice.jpg', 'full', NULL, NULL, NULL, NULL, NULL),
(7, 'ZlatailleRPG', 'Zlataille va à la Comic Con avec son cosplay de Gandalf ! ', 'ZlatailleRPG.jpg', 'full', NULL, NULL, NULL, NULL, NULL),
(8, 'ZlatailleCarnaval', 'Zlataille participe au carnaval de Rio', 'ZlatailleCarnaval.jpg', 'half', NULL, NULL, NULL, NULL, NULL),
(9, 'ZlatailleOtage', 'Zlataille a été pris en otage alors qu\'il était au cirque ! ', 'ZlatailleOtage.jpg', 'half txtfirst', NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `dtwl_tiles`
--
ALTER TABLE `dtwl_tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `dtwl_tiles`
--
ALTER TABLE `dtwl_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
