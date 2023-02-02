-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 fév. 2023 à 14:06
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

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'test', '2023-02-02', '2023-02-02');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
