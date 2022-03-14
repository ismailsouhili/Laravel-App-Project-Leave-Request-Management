-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 mars 2022 à 15:37
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionconges`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'En Attente...',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `holidays`
--

INSERT INTO `holidays` (`id`, `user_ID`, `start`, `end`, `type`, `certificate`, `status`, `created_at`, `updated_at`, `total_days`) VALUES
(41, 1, '2022-03-03', '2022-03-07', 'Congé legal annuel', '1646320275.pdf', 'Accepté', '2022-03-03 14:11:15', '2022-03-03 14:16:11', 3),
(42, 1, '2022-03-09', '2022-03-14', 'maladie', '1646320302.pdf', 'En Attente...', '2022-03-03 14:11:42', '2022-03-03 14:11:42', 4),
(43, 16, '2022-03-04', '2022-03-08', 'Congé naissance', '1646320448.pdf', 'Refusé', '2022-03-03 14:14:08', '2022-03-03 14:16:16', 3),
(44, 24, '2022-03-11', '2022-03-17', 'Congé legal annuel', '1646320515.pdf', 'En Attente...', '2022-03-03 14:15:15', '2022-03-03 14:15:15', 5),
(50, 1, '2022-03-07', '2022-03-30', 'Congé legal annuel', '1646656374.docx', 'Accepté', '2022-03-07 11:32:54', '2022-03-07 11:33:15', 18);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_01_20_111028_create_admin_table', 1),
(10, '2022_01_21_153523_create_users_table', 3),
(11, '2022_01_21_160111_create_users_table', 4),
(12, '2022_01_23_192615_create_users_table', 5),
(18, '2022_01_23_195403_create_users_table', 6),
(24, '2022_01_23_210053_create_users_table', 8),
(36, '2014_10_12_100000_create_password_resets_table', 9),
(37, '2019_08_19_000000_create_failed_jobs_table', 9),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(39, '2022_01_21_152837_create_role_table', 9),
(40, '2022_01_23_210425_create_users_table', 9),
(41, '2022_01_23_214347_create_users_table', 10),
(42, '2022_01_24_123249_create_holidays_table', 11),
(43, '2022_02_27_225932_add_google2fa_column_to_users', 12),
(44, '2022_03_03_122804_add_total_days_to_holidays_table', 13),
(45, '2022_03_09_142523_create_password_securities_table', 14),
(46, '2022_03_11_132547_add_google2fa_secret_to_users_table', 15),
(47, '2022_03_11_152322_add_google2fa_secret_to_users_table', 16),
(48, '2022_03_11_153549_add_google2fa_secret_to_users_table', 17);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('loko@gmail.com', '$2y$10$cJedxoDk5u6yGqbYDPyI9evGR5HeE4VflZ44GUeKhP9mBO7B6u28m', '2022-03-04 09:41:15');

-- --------------------------------------------------------

--
-- Structure de la table `password_securities`
--

CREATE TABLE `password_securities` (
  `id` int(10) UNSIGNED NOT NULL,
  `use_id` int(11) NOT NULL,
  `google_enable` tinyint(1) NOT NULL DEFAULT 0,
  `google_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `holidays` int(11) NOT NULL DEFAULT 0,
  `max_holdiays` int(11) NOT NULL DEFAULT 0,
  `start_work` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google2fa_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `email`, `email_verified_at`, `password`, `role_as`, `holidays`, `max_holdiays`, `start_work`, `salary`, `remember_token`, `created_at`, `updated_at`, `google2fa_secret`) VALUES
(1, 'loko', 'Moritz', 'loko@gmail.com', NULL, '$2y$10$PP.zw9qKno2VvpmXiS1eDeuXvEmfi2DuJcGPAPq56gdwUUyL3w3.G', 2, 7, 8, '2022-01-01', 3200, NULL, '2022-01-23 20:46:16', '2022-03-04 10:13:31', ''),
(2, 'ismail', 'souhili', 'souhili@gmail.com', NULL, '$2y$10$y5J4wTaoDLdoV82w4dJHuOdUpLbfDytO0J8AJbT4h3CV07S7vmXiC', 1, 0, 12, '2022-01-05', 4200, NULL, '2022-01-24 09:02:12', '2022-03-04 10:14:11', ''),
(16, 'tomas', 'karlos', 'toto@gmail.com', NULL, '$2y$10$BUximGWLxq96sZpRCS92LeFFiEiZv.9YVJhSelcC7RjH5W7.QiVWG', 2, 3, 11, '2022-01-20', 2800, NULL, '2022-01-31 11:43:49', '2022-03-04 10:14:24', ''),
(24, 'alex', 'jeans', 'alex@gmail.com', NULL, '$2y$10$pv3DUMVM/PF11OoqCUOaYOwbD7Miwi4hG0C.I/EjkqPXDugTXcyZS', 2, 5, 13, '2022-01-01', 2500, NULL, '2022-02-07 15:00:50', '2022-03-04 10:14:34', ''),
(43, 'morata', 'lil', 'morata@gmail.com', NULL, '$2y$10$tfliLcRB56cbyM106fqXaulDAnNnPdq85CifZQHrgohiVxh3w2pga', 2, 0, 0, NULL, NULL, NULL, '2022-03-14 11:59:14', '2022-03-14 11:59:14', 'VLEGV7BJYVMCYP3R');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `holidays_user_id_foreign` (`user_ID`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_securities`
--
ALTER TABLE `password_securities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_as_foreign` (`role_as`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `password_securities`
--
ALTER TABLE `password_securities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `holidays`
--
ALTER TABLE `holidays`
  ADD CONSTRAINT `holidays_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_as_foreign` FOREIGN KEY (`role_as`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
