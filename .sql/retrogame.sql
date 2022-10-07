-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 oct. 2022 à 10:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `retrogame`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `grade` varchar(9) NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `email`, `password`, `username`, `grade`, `token`) VALUES
(3, 'ryan.leparq@hotmail.com', '$2y$12$6pV3aod4i/jKkceGCxUlzu5fdUdda0u1Xq/elbLOTSI0O2W3la9ei', 'R0X4S', 'CUSTOMER', '1dbda96e45be8e2ded55c427aa99f4b9d1d3602dcb346659d98ded5c7dbb29794f1678b63260e71f2ea4030bab7eab0ea58f01bae778d3971ff11dd3bd370762'),
(4, 'rousseauc28200@gmail.com', '$2y$12$gUTJmvv5gfY9hrNrcn/io.JDsWt2r074cQfbS9upz2.Hi0zEJ/yFK', 'Chrisoukalm', 'CUSTOMER', '19b729b9e4f151e345e1896829982f88970588566e740189ec2106b1c79a5eb5bcfbb078f93905c67e32e733e2521f73c908d501cf354b056e0a780a5160dc03');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` decimal(6,0) NOT NULL,
  `description` text NOT NULL,
  `date d'ajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
