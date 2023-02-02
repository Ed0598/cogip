-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 fév. 2023 à 14:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `update_at`) VALUES
(1, 'test', 1, 'belgique', 'qwertewr', '2023-02-09', '2023-02-03'),
(2, 'Company 6', 1, 'Canada', '30', '2022-06-01', '2022-06-01'),
(3, 'Company 5', 1, 'Canada', '30', '2022-06-01', '2022-06-01'),
(4, 'Company 4', 1, 'Canada', '30', '2022-06-01', '2022-06-01'),
(5, 'Company 3', 1, 'Canada', '30', '2022-06-01', '2022-06-01'),
(6, 'Company 2', 1, 'Canada', '30', '2022-06-01', '2022-06-01'),
(7, 'Company 1', 1, 'Canada', '30', '2022-06-01', '2022-06-01');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `email`, `phone`, `created_at`, `update_at`) VALUES
(1, 'test', 1, 'test@test.test', '0123456789', '2023-02-09', '2023-02-16'),
(2, 'John Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02'),
(3, 'Jane Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02'),
(4, 'Pierre Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02'),
(5, 'Stan Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02'),
(6, 'Steve Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02'),
(7, 'Marc Doe', 1, 'johndoe@example.com', '555-555-5555', '2022-01-01', '2022-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_company` (`id_company`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `ref`, `id_company`, `created_at`, `update_at`) VALUES
(1, 'INV0005', 5, '2022-05-01', '2022-05-02'),
(2, 'INV0004', 5, '2022-05-01', '2022-05-02'),
(3, 'INV0003', 5, '2022-05-01', '2022-05-02'),
(4, 'INV0002', 5, '2022-05-01', '2022-05-02'),
(5, 'INV0001', 5, '2022-05-01', '2022-05-02'),
(6, 'INV0006', 5, '2022-05-01', '2022-05-02');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE IF NOT EXISTS `roles_permission` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  KEY `role_id` (`role_id`),
  KEY `permission_id` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'test', '2023-02-02', '2023-02-02');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
