-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 juin 2022 à 01:13
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cowgrow`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_validate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abonnements`
--

INSERT INTO `abonnements` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `telephone`, `raison`, `date_validate`, `photo`, `etat`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'pour etudier', '1 mois', 'DSC08631.JPG', 0, 12, '2022-06-06 20:01:06', '2022-06-06 21:54:34', '2022-06-06 21:54:34'),
(2, 'nedra123', 'jendoubi', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'pour etudier', '2 mois', '3.jpg', 1, 12, '2022-06-06 21:56:44', '2022-06-19 20:19:30', NULL),
(3, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'qsdfvgb', '2 mois', 'image1.jpg', 0, 12, '2022-06-06 22:30:28', '2022-06-06 22:30:28', NULL),
(4, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'qsdfvgb', '2 mois', 'image1.jpg', 0, 12, '2022-06-06 22:32:07', '2022-06-06 22:32:07', NULL),
(5, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'qsdfvgb', '2 mois', 'image1.jpg', 0, 12, '2022-06-06 22:42:47', '2022-06-06 22:42:47', NULL),
(6, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'qsdfvgb', '2 mois', 'image1.jpg', 0, 12, '2022-06-06 22:43:53', '2022-06-06 22:43:53', NULL),
(7, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'ertyuiopoiuytre', '5 mois', '6.jpg', 0, 12, '2022-06-06 22:53:03', '2022-06-06 22:53:03', NULL),
(8, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'ertyuiopoiuytre', '5 mois', '6.jpg', 0, 12, '2022-06-06 22:53:24', '2022-06-06 22:53:24', NULL),
(9, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'fghj', '3 mois', '6.png', 0, 12, '2022-06-06 23:00:11', '2022-06-06 23:00:11', NULL),
(10, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'wWxx', '1 mois', '3.jpg', 0, 12, '2022-06-06 23:06:39', '2022-06-06 23:06:39', NULL),
(11, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'wWxx', '1 mois', '3.jpg', 0, 12, '2022-06-06 23:17:47', '2022-06-06 23:17:47', NULL),
(12, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'wWxx', '1 mois', '3.jpg', 0, 12, '2022-06-07 00:05:08', '2022-06-07 00:05:08', NULL),
(13, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'QWsxdcf', '1 mois', '1.jpg', 0, 12, '2022-06-07 00:05:41', '2022-06-07 00:05:41', NULL),
(14, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'qszdefrmlkjnhb', '12 mois', '55.jpg', 0, 12, '2022-06-07 10:14:26', '2022-06-07 10:14:26', NULL),
(15, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'pour etudier', '1 mois', '6.jpg', 0, 12, '2022-06-07 19:54:53', '2022-06-07 19:54:53', NULL),
(16, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'pour etudier', '1 mois', '6.jpg', 0, 12, '2022-06-07 19:54:53', '2022-06-07 19:54:53', NULL),
(17, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'pour etudier', '1 mois', '6.jpg', 0, 12, '2022-06-07 19:55:09', '2022-06-07 19:55:09', NULL),
(18, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'jklmlkj', '8 mois', '5.jpg', 0, 12, '2022-06-07 20:01:02', '2022-06-07 20:01:02', NULL),
(19, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'free leance', '3 mois', '44.jpg', 0, 12, '2022-06-07 20:29:08', '2022-06-07 20:29:08', NULL),
(20, 'ala', 'hammami', '2000-01-01', 'alahammami@gmail.com', '25048903', 'pour etudier', '10 mois', '6.jpg', 0, 2, '2022-06-19 20:35:53', '2022-06-20 08:54:33', NULL),
(21, 'ala', 'hammami', '2000-01-01', 'alahammami@gmail.com', '25048903', 'parc f', '7 mois', '5.jpg', 0, 2, '2022-06-19 20:51:15', '2022-06-19 20:51:40', NULL),
(22, 'ala', 'hammami', '2000-01-01', 'alahammami@gmail.com', '25048903', 'fghjklmù*', '8 mois', '3.jpg', 0, 2, '2022-06-20 08:53:23', '2022-06-20 08:53:23', NULL),
(23, 'ameni', 'ben slimen', '1999-12-03', 'amenibenslimen9@gmail.com', '52274191', 'zertghjkl', '2 mois', '4.webp', 0, 1, '2022-06-20 20:11:02', '2022-06-20 20:11:02', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_equipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `nom_equipe`, `prenom_equipe`, `description_equipe`, `image_equipe`, `specialite`, `telephone_equipe`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'rtztye', 'ytht', 'jjjjjjjjjjjjjjj', 'images2.jpg', 'developpement web', '25048903', 1, '2022-05-06 13:28:32', '2022-06-19 21:35:47'),
(2, 'Ghorbeli', 'Chalbia', 'Ex représentante régionale de programme TADAEEM à Siliena .', 'assoc.JPG', 'Présidente', '(+216) 55 555 555', 1, '2022-05-17 17:30:20', '2022-05-17 17:30:20'),
(3, 'Hammami', 'Walid', 'Professeur d\'animation culturelle', '4.webp', 'Financiére d\'ADECO', '(+216) 66 666 666', 1, '2022-05-17 17:36:37', '2022-05-17 17:36:37');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE `materiels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`id`, `code_serie`, `nom_m`, `prix`, `description`, `space_id`, `created_at`, `updated_at`) VALUES
(6, '547845', 'PC Portable', 3500, 'en trées bon etat', 24, '2022-06-13 20:23:30', '2022-06-13 20:23:30'),
(7, '57848', 'tableaux', 500, 'en tres bon etat', 24, '2022-06-13 20:23:57', '2022-06-13 20:23:57'),
(8, '78485', 'chése', 20, 'en tres bon etat', 24, '2022-06-13 20:24:21', '2022-06-13 20:24:21'),
(9, '4444', 'PC Asus', 4, 'En trés bon etat', 27, '2022-06-13 22:38:01', '2022-06-13 22:38:01'),
(10, '565555', 'tableaux', 8555, 'dfghjklm', 27, '2022-06-13 22:38:42', '2022-06-13 22:38:42'),
(11, '66666', 'pc HP', 3500, 'bien', 24, '2022-06-20 14:07:03', '2022-06-20 14:07:03');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_27_224401_create_spaces_table', 1),
(6, '2022_03_27_224619_create_photos_table', 1),
(7, '2022_03_27_224837_create_materiels_table', 1),
(8, '2022_03_27_225150_create_demande_abonnements_table', 1),
(9, '2022_03_27_225525_create_reservations_table', 1),
(10, '2022_03_27_231124_create_demande_reparations_table', 1),
(11, '2022_04_11_231059_create_equipes_table', 1),
(12, '2022_04_13_220832_create_projets_table', 1),
(13, '2022_04_13_220912_create_images_table', 1),
(14, '2022_05_07_194952_create_reclamations_table', 2),
(15, '2022_05_07_200314_create_reclamations_table', 3),
(16, '2022_05_07_200813_create_reclamations_table', 4),
(17, '2022_05_07_220521_add_to_reclamations_table', 5),
(18, '2022_05_07_222630_create_abonnements_table', 6),
(19, '2022_05_08_202656_add_to_abonnements_table', 7),
(20, '2022_05_08_205232_create_projets_table', 8),
(21, '2022_05_08_205600_create_photo_projets_table', 9),
(22, '2022_05_13_143159_create_reservations_table', 10),
(23, '2022_05_13_150718_create_reservations_table', 11),
(24, '2022_05_16_225051_create_spaces_table', 12),
(25, '2022_05_16_225305_create_materiels_table', 13),
(26, '2022_05_16_225859_create_photo_espaces_table', 14),
(27, '2022_05_18_214353_add_user_id_to_materiels_table', 15),
(28, '2022_05_18_215702_add_url_to_materiels_table', 16),
(29, '2022_05_18_215718_add_prix_to_materiels_table', 16),
(30, '2022_05_18_215732_add_description_to_materiels_table', 16),
(31, '2022_05_20_222252_create_photo_espaces_table', 17),
(32, '2022_05_25_141448_create_materiels_table', 18),
(33, '2022_05_26_130848_create_photo_espaces_table', 19),
(34, '2022_06_02_173223_create_partenaires_table', 20),
(35, '2022_06_04_133536_create_reservations_table', 21),
(36, '2022_06_04_145319_create_reservations_table', 22),
(37, '2022_06_05_103221_add_to_reservations_table', 23),
(38, '2022_06_06_153357_create_abonnements_table', 24),
(39, '2022_06_06_172333_create_abonnements_table', 25),
(40, '2022_06_06_185640_create_abonnements_table', 26),
(41, '2022_06_06_195731_create_abonnements_table', 27),
(42, '2022_06_06_200047_add_to_abonnements_table', 27),
(43, 'create_model-stats_table', 28);

-- --------------------------------------------------------

--
-- Structure de la table `model_stats_dashboards`
--

CREATE TABLE `model_stats_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`body`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_stats_dashboards`
--

INSERT INTO `model_stats_dashboards` (`id`, `name`, `description`, `body`, `created_at`, `updated_at`) VALUES
(1, 'utilisateur', 'utilisateur', '{\"widgets\":[{\"id\":686034489,\"model\":{\"name\":\"Reservation\",\"namespace\":\"App\\/Models\",\"value\":\"\\\\App\\\\Models\\\\Reservation\"},\"aggregate_type\":\"daily_count\",\"date_column\":\"created_at\",\"aggregate_column\":null,\"graph_color\":\"#F59E0B\",\"title\":\"utilisateur\",\"position\":{\"x\":0,\"y\":0,\"w\":3,\"h\":4,\"i\":686034489},\"moved\":false}]}', '2022-06-12 18:18:06', '2022-06-14 21:23:56'),
(2, 'Réservation', 'Réservation', '{\"widgets\":[]}', '2022-06-14 21:22:51', '2022-06-14 21:22:51');

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `nom`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'nedra', 'fdsqsxdcfvgccc;lf;kslflll:ff', 'assoc.JPG', '2022-06-02 15:47:59', '2022-06-02 15:47:59'),
(2, 'ameni', 'qazertyuikolpmù\r\nmk,', 'DSC08629.JPG', '2022-06-02 21:08:49', '2022-06-02 21:08:49'),
(3, 'ameni', 'fghjfghjk\r\ndfghjklmù*\r\nsdfghjklmù*\r\ndfghjklmù*\r\n4sxdcfghjklmù*\r\nxcvgbhjklmù*', 'images2.jpg', '2022-06-12 10:51:55', '2022-06-12 10:51:55');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photo_espaces`
--

CREATE TABLE `photo_espaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_espace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photo_espaces`
--

INSERT INTO `photo_espaces` (`id`, `image_espace`, `space_id`, `created_at`, `updated_at`) VALUES
(16, '1655038207.4.webp', 24, '2022-06-12 10:50:07', '2022-06-12 10:50:07'),
(17, '1655038208.5.jpg', 24, '2022-06-12 10:50:08', '2022-06-12 10:50:08'),
(18, '1655038208.6.jpg', 24, '2022-06-12 10:50:08', '2022-06-12 10:50:08'),
(19, '1655045934.6.png', 25, '2022-06-12 12:58:54', '2022-06-12 12:58:54'),
(20, '1655045934.7.jpg', 25, '2022-06-12 12:58:54', '2022-06-12 12:58:54'),
(21, '1655045934.8.jpg', 25, '2022-06-12 12:58:54', '2022-06-12 12:58:54'),
(22, '1655045935.11.jpg', 25, '2022-06-12 12:58:55', '2022-06-12 12:58:55'),
(23, '1655045935.44.jpg', 25, '2022-06-12 12:58:55', '2022-06-12 12:58:55'),
(24, '1655045935.55.jpg', 25, '2022-06-12 12:58:55', '2022-06-12 12:58:55'),
(25, '1655046053.3.jpeg', 26, '2022-06-12 13:00:53', '2022-06-12 13:00:53'),
(26, '1655046053.3.jpg', 26, '2022-06-12 13:00:53', '2022-06-12 13:00:53'),
(27, '1655046053.4.jpg', 26, '2022-06-12 13:00:53', '2022-06-12 13:00:53'),
(28, '1655046074.3.jpeg', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(29, '1655046074.3.jpg', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(30, '1655046074.4.jpg', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(31, '1655046074.4.webp', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(32, '1655046074.5.jpg', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(33, '1655046074.6.jpg', 27, '2022-06-12 13:01:14', '2022-06-12 13:01:14'),
(34, '1655741901.1.jpg', 24, '2022-06-20 14:18:21', '2022-06-20 14:18:21');

-- --------------------------------------------------------

--
-- Structure de la table `photo_projets`
--

CREATE TABLE `photo_projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photo_projets`
--

INSERT INTO `photo_projets` (`id`, `url`, `projet_id`, `created_at`, `updated_at`) VALUES
(39, '1653176169.img3.jpg', 19, '2022-05-21 21:36:09', '2022-05-21 21:36:09'),
(40, '1655211997.3.jpeg', 26, '2022-06-14 11:06:37', '2022-06-14 11:06:37'),
(41, '1655211998.3.jpg', 26, '2022-06-14 11:06:38', '2022-06-14 11:06:38'),
(42, '1655211998.4.jpg', 26, '2022-06-14 11:06:38', '2022-06-14 11:06:38'),
(43, '1655211998.4.webp', 26, '2022-06-14 11:06:38', '2022-06-14 11:06:38'),
(44, '1655211998.5.jpg', 26, '2022-06-14 11:06:38', '2022-06-14 11:06:38'),
(45, '1655211998.6.jpg', 26, '2022-06-14 11:06:38', '2022-06-14 11:06:38'),
(46, '1655242297.3.jpeg', 27, '2022-06-14 19:31:37', '2022-06-14 19:31:37'),
(47, '1655242297.3.jpg', 27, '2022-06-14 19:31:37', '2022-06-14 19:31:37'),
(48, '1655242297.4.jpg', 27, '2022-06-14 19:31:37', '2022-06-14 19:31:37'),
(49, '1655739849.3.jpeg', 19, '2022-06-20 13:44:09', '2022-06-20 13:44:09'),
(50, '1655739849.3.jpg', 19, '2022-06-20 13:44:09', '2022-06-20 13:44:09'),
(51, '1655740062.4.webp', 19, '2022-06-20 13:47:42', '2022-06-20 13:47:42'),
(52, '1655740062.5.jpg', 19, '2022-06-20 13:47:42', '2022-06-20 13:47:42');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `date_debut`, `date_fin`, `intitule`, `description`, `created_at`, `updated_at`) VALUES
(19, '2005-01-01', '2006-01-01', 'ameni ben slimen', 'ameniben slimen dsi31', '2022-05-21 21:35:46', '2022-05-21 21:35:46'),
(26, '2021-01-01', '2022-01-01', 'Projet FEMDH LES SYNDICALISTES DES DROITS DE L’HOMME', 'L’adeco avait sollicité le soutien de la FEMDH pour un projet qui s’intitule « les syndicalistes des droits de l’Homme »\r\nEn effet, on avait assurer deux  cycles  de  formations l’un dédié au renforcement des connaissances en  matière  des  droits  de  l’Homme et  des standards internationaux,\r\nRégionaux  et nationaux en la matière ; et le second dédié aux techniques de communication, de campagne et de plaidoyer.\r\nL’association prévoit aussi le lancement  d’un journal   citoyen  « Zamamag »\r\nDestiné à renforcer la contribution citoyenne des jeunes bénéficiaires   de   ces   formations   sur   les problématiques  locales  au  niveau  des  droits  civils,   politiques,   économiques,   sociaux   et\r\nculturels. Zamamag sera élaborée en\r\ncollaboration avec la section locale de la LTDH.\r\nIl  permettra  d’offrir  plus  de  visibilité  aux dynamiques citoyennes dans le gouvernorat de Siliana et de vulgariser la culture des droits de l’Homme au niveau local', '2022-06-14 11:06:18', '2022-06-14 11:06:18'),
(27, '2005-01-01', '2006-01-01', 'ameni ben slimen', 'ameniben slimen dsi31 ameni ameni', '2022-06-14 19:31:18', '2022-06-14 19:31:18');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_materiel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_panne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `materiel_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `nom`, `code_serie`, `nom_materiel`, `description_panne`, `etat`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `materiel_id`) VALUES
(8, 'ameni', 'dfghjklm', 'fghjklmù', 'fghjklmù', 0, 1, '2022-05-07 20:45:04', '2022-05-07 21:31:55', '2022-05-07 21:31:55', 0),
(9, 'ameni', 'dfghjklm', 'fghjklmù', 'fghjklmù*', 2, 1, '2022-05-07 20:45:15', '2022-05-07 21:37:47', '2022-05-07 21:37:47', 0),
(11, 'ameni', '25555', 'table de nuit', 'tres panne', 2, 1, '2022-05-18 19:08:18', '2022-06-05 14:45:14', '2022-06-05 14:45:14', 0),
(12, 'ameni', '55255', 'pc', 'en panne', 2, 1, '2022-05-19 05:01:04', '2022-06-19 21:30:24', '2022-06-19 21:30:24', 0),
(13, 'ala', '85158582852', 'imremente', 'dfghjklmù', 2, 2, '2022-05-19 11:29:46', '2022-06-19 21:58:09', '2022-06-19 21:58:09', 0),
(14, 'ameni', 'ghjklmù', 'fghjklmù', 'fghjiop', 2, 1, '2022-06-19 21:49:37', '2022-06-19 21:58:27', '2022-06-19 21:58:27', 0),
(15, 'ameni', '8587858', 'PC aAsus', 'en panne c\'est tres urgant', 2, 4, '2022-06-20 05:56:06', '2022-06-20 08:59:18', '2022-06-20 08:59:18', 4),
(16, 'ameni', '8587858', 'PC aAsus', 'dfghjk', 0, 4, '2022-06-20 09:05:33', '2022-06-20 09:05:33', NULL, 4),
(17, 'ameni', '547845', 'PC Portable', 'edrtyujk', 0, 6, '2022-06-20 20:16:31', '2022-06-20 20:16:31', NULL, 6);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_space` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_entre` datetime NOT NULL,
  `date_sorti` datetime NOT NULL,
  `etat` int(11) NOT NULL,
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `prenom`, `telephone`, `email`, `nom_space`, `date_entre`, `date_sorti`, `etat`, `space_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 'ala', 'hammami', '25048903', 'alahammami@gmail.com', 'salle 1', '2001-01-01 12:00:00', '2001-01-01 14:00:00', 0, 24, 2, '2022-06-19 21:04:26', '2022-06-19 21:21:38', '2022-06-19 21:21:38'),
(26, 'ala', 'hammami', '93782409', 'alahammami@gmail.com', 'salle 4', '2022-06-21 10:00:00', '2022-06-21 12:00:00', 3, 26, 2, '2022-06-20 18:28:51', '2022-06-20 19:33:24', '2022-06-20 19:33:24'),
(27, 'ala', 'hammami', '93782409', 'alahammami@gmail.com', 'salle 4', '2001-01-01 10:00:00', '2001-02-02 11:00:00', 1, 26, 2, '2022-06-20 18:38:50', '2022-06-20 19:36:03', '2022-06-20 19:36:03'),
(28, 'ala', 'hammami', '93782409', 'alahammami@gmail.com', 'salle 4', '2001-01-31 10:00:00', '2001-01-31 12:00:00', 0, 26, 2, '2022-06-20 19:26:01', '2022-06-20 19:37:23', '2022-06-20 19:37:23'),
(29, 'ameni', 'ben slimen', '52274191', 'amenibenslimen9@gmail.com', 'salle 4', '2012-01-12 12:00:00', '2012-04-12 14:00:00', 0, 26, 1, '2022-06-20 19:35:05', '2022-06-20 19:38:39', '2022-06-20 19:38:39'),
(30, 'ameni', 'ben slimen', '52274191', 'amenibenslimen9@gmail.com', 'salle 3', '2022-11-11 10:00:00', '2022-11-11 12:00:00', 2, 25, 1, '2022-06-20 19:39:48', '2022-06-20 19:41:53', '2022-06-20 19:41:53'),
(31, 'salha', 'farhani', '25048903', 'salhafarhani12@gmail.com', 'salle 4', '2022-06-21 13:00:00', '2022-06-21 14:00:00', 0, 26, 5, '2022-06-20 21:09:10', '2022-06-20 21:10:07', '2022-06-20 21:10:07');

-- --------------------------------------------------------

--
-- Structure de la table `spaces`
--

CREATE TABLE `spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_space` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_space` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `spaces`
--

INSERT INTO `spaces` (`id`, `nom_space`, `description_space`, `created_at`, `updated_at`) VALUES
(24, 'salle 1', 'en tres bon etat', '2022-06-12 10:49:44', '2022-06-12 10:49:44'),
(25, 'salle 3', 'Comment se fait la description ? Commencer la description par une accroche vivante. Choisir un point de vue (une description vue par un personnage ou vue de l\'extérieur). Ne pas chercher à tout décrire, mais choisir les éléments significatifs. Ordonner sa description (pour un portrait, passer du portrait physique au portrait mental par exemple).', '2022-06-12 12:58:36', '2022-06-12 12:58:36'),
(26, 'salle 4', 'Comment se fait la description ? Commencer la description par une accroche vivante. Choisir un point de vue (une description vue par un personnage ou vue de l\'extérieur). Ne pas chercher à tout décrire, mais choisir les éléments significatifs. Ordonner sa description (pour un portrait, passer du portrait physique au portrait mental par exemple).', '2022-06-12 13:00:42', '2022-06-12 13:00:42'),
(27, 'salle 5', 'Comment se fait la description ? Commencer la description par une accroche vivante. Choisir un point de vue (une description vue par un personnage ou vue de l\'extérieur). Ne pas chercher à tout décrire, mais choisir les éléments significatifs. Ordonner sa description (pour un portrait, passer du portrait physique au portrait mental par exemple).', '2022-06-12 13:01:03', '2022-06-12 13:01:03');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','technicien','client','membre') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `telephone`, `role`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ameni', 'ben slimen', '1999-12-03', 'amenibenslimen9@gmail.com', '52274191', 'admin', 'hamza.jpg', NULL, '$2y$10$qtNcsS.yPaypwkvxL75XEeMX7o2GMVig.AEWZeZHI1OGsaJVP0ACO', NULL, '2022-04-23 21:41:06', '2022-05-29 13:39:52'),
(2, 'ala', 'hammami', '2000-01-01', 'alahammami@gmail.com', '93782409', 'client', 'eng.webp', NULL, '$2y$10$Kl1KU49k88EU0zHH13V3uOAM21luZIjQdHMUPSOadk4CTjJ0RE622', NULL, '2022-04-23 21:50:22', '2022-06-20 08:57:28'),
(4, 'salha', 'farhani', '2005-01-01', 'salhafarhani@gmail.com', '10827926', 'client', '6.jpg', NULL, '$2y$10$zrSHpnPZQOR8mSPTLBhtQOI3Xd1.uHBK9XoDlbmeEtM6evfjwCGmW', NULL, '2022-05-05 17:33:33', '2022-05-05 17:33:33'),
(5, 'salha', 'farhani', '2002-01-01', 'salhafarhani12@gmail.com', '25048903', 'technicien', 'image1.jpg', NULL, '$2y$10$.tVAmfs0v9C8yDgy8BaZ8uqOyh9g5/bwDsAf6bvF2q93YFTUimNsK', NULL, '2022-05-05 17:35:26', '2022-06-14 19:15:34'),
(6, 'nedra', 'jn', '2022-05-03', 'jendoubinedra221@gmail.com', '23456789', 'client', '6.jpg', NULL, '$2y$10$.zitq6M0sc0gDBSUf1V4..dlZMEC/qHQvWitT/MlgmMlmD1nRFD82', NULL, '2022-05-06 18:53:51', '2022-05-06 18:53:51'),
(7, 'Ahmed', 'Siwar', '2000-01-01', 'siwarahmed@gmail.com', '93782409', 'client', 'received_904007820271430.jpeg', NULL, '$2y$10$jviCfJz9YBQ8rEBP3EON0OyD18RYjRzE5U6i1/QjWoh.5V53RAqNS', NULL, '2022-05-18 15:20:32', '2022-05-18 15:20:32'),
(8, 'souaad', 'yaakoubi', '2001-01-01', 'sou@gmail.com', '25048903', 'membre', '4.webp', NULL, '$2y$10$.xHjrYcQZkRnyfOtDV5GEejAYaSAkWWnyr1XkOo/w0ijKhpnYgYui', NULL, '2022-05-19 06:42:19', '2022-05-19 06:42:19'),
(9, 'hjk', 'yhui', '1785-01-01', 'amenibenslimen200@gmail.com', '25048906', 'client', '3.jpg', NULL, '$2y$10$jSBVbWvFCgCREVEjkdQZdeMAGWj2k.ijyzSxicHuJhnH40/4GiX0G', NULL, '2022-05-21 09:12:27', '2022-05-21 09:12:27'),
(10, 'ghj', 'sdfghj', '0125-01-01', 'nkl@gmail.com', '25048903', 'client', '4.webp', NULL, '$2y$10$VXeGxa98YdRIz.P7v4houuri3GMxfsmF2uONAPVY/2wArgo3127vG', NULL, '2022-05-21 09:25:23', '2022-05-21 09:25:23'),
(11, 'nedra', 'jendoubi', '2002-01-01', 'hh@gmail.com', '25048903', 'membre', '5.jpg', NULL, '$2y$10$fTEdEzB3NGxjYWD2ph7nNempXrryhNuYEV8ogLtPBz7Ny14kBxYRe', NULL, '2022-05-30 21:51:03', '2022-05-30 21:51:03'),
(12, 'nedra', 'jn', '2022-05-15', 'jendoubinedra@gmail.com', '23456789', 'client', 'nedra.jpg', NULL, '$2y$10$cozx08n0ef3QA.3zKgTEUeczASdVOstpSIRvkKdOLMIDPbfIlMz4u', NULL, '2022-05-31 13:18:25', '2022-06-06 20:51:58'),
(13, 'nada', 'bk', '2022-05-08', 'jendoubinada@gmail.com', '23456789', 'admin', 'DSC08631.JPG', NULL, '$2y$10$MN7Ca0uypKkwzsfrMWCN7.RAfBORGfp2oNsAveK0TSekmpPRcHkwS', NULL, '2022-05-31 17:03:45', '2022-05-31 17:03:45'),
(15, 'hama', 'farah', '2022-06-05', 'hama@gmailcom', '29964264', 'technicien', 'image1.jpg', NULL, '$2y$10$3fzr9uyq2BiR6kN.bQJtr.5amwcyvdM4L8IZKdgoYRmNyYYCOWBpa', NULL, '2022-05-31 21:33:38', '2022-05-31 21:35:59'),
(16, 'souad', 'jn', '2022-06-11', 'souadjn@gmail.com', '23379319', 'client', '1.jpg', NULL, '$2y$10$oNmMhtMLa1IMykOVqQPMfOCtsCv7VUhs5PUYPrugIfJNMMAQKJZ26', NULL, '2022-06-04 20:45:44', '2022-06-04 20:45:44'),
(17, 'ala', 'hammami', '2001-01-01', 'alahammami123@gmail.com', '250148903', 'client', '4.webp', NULL, '$2y$10$9wBSII51FFe5UAJqRZZXOOzdqZoV1oo0GBDfjZTKMykE8uxkuA3CK', NULL, '2022-06-09 21:10:31', '2022-06-09 21:10:31'),
(18, 'ghjkg', 'hjkg', '2005-01-01', 'hjkl55@gmail.co', '6655', 'client', '3.jpg', NULL, '$2y$10$GvDci9SH8caWsSv139OiQOTIrRvFoYxMw7o.SyR3/weAZOATlwE8K', NULL, '2022-06-11 09:45:24', '2022-06-11 09:45:24'),
(19, 'ghjfghj', 'cvbnj', '2001-12-01', 'fghjkl@gmail.com', '123456789', 'client', '3.jpg', NULL, '$2y$10$Cri437sf4fxmIJyripEmieV2OFs9TlX/lWfltXdgDYOPDkX6PU6QS', NULL, '2022-06-11 11:15:35', '2022-06-11 11:15:35'),
(20, 'fghj', 'dfghj', '2001-01-01', 'ddd@gmail.com', '58798789', 'client', '4.jpg', NULL, '$2y$10$4keIObyX6.ro5lgRw3m.3eIt7jmEd4XhVH0k1MrcreorF/r9F.HxS', NULL, '2022-06-14 11:28:43', '2022-06-14 11:28:43'),
(21, 'ofghjik', 'cvbn', '2005-05-05', 'v@gmail.com', '25048926', 'client', '3.jpeg', NULL, '$2y$10$MqQw1.KjO9JpymXY3P13Ae4jblzE6JR2VA7sqQwCLrbfiQZt8RfgK', NULL, '2022-06-14 11:31:04', '2022-06-14 11:31:04'),
(22, 'sdfg', 'cvgbhj', '2002-01-01', 'membre@gmail.com', '25048903', 'client', '', NULL, '$2y$10$xopuK/zsoj.9gxexNDWasebf3LbT0591N5L0nbEyyFTi6L/TYrwPm', NULL, '2022-06-14 11:33:49', '2022-06-14 11:33:49'),
(23, 'fghjklmù*', 'dfghjklmù*', '2002-02-01', 'm@gmail.com', '25048903', 'membre', '3.jpeg', NULL, '$2y$10$VodZT8iEnFNklc1hSUu54egcJt6w6RAccPYYli9Z6UXy/.qs26sW.', NULL, '2022-06-14 20:27:00', '2022-06-14 20:27:00'),
(24, 'achref', 'ben slimen', '2002-01-01', 'achref@gmail.com', '25048906', 'membre', '6.jpg', NULL, '$2y$10$1YKQjJOoVL9YHFd2LFfCG.HoNU6LLSfPbvIE8HHyq1Wf/BGkF3qR2', NULL, '2022-06-14 20:28:59', '2022-06-14 21:12:41');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abonnements_user_id_foreign` (`user_id`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipes_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materiels_space_id_foreign` (`space_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_stats_dashboards`
--
ALTER TABLE `model_stats_dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `photo_espaces`
--
ALTER TABLE `photo_espaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_espaces_space_id_foreign` (`space_id`);

--
-- Index pour la table `photo_projets`
--
ALTER TABLE `photo_projets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_projets_projet_id_foreign` (`projet_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reclamations_user_id_foreign` (`user_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_space_id_foreign` (`space_id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`);

--
-- Index pour la table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `model_stats_dashboards`
--
ALTER TABLE `model_stats_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photo_espaces`
--
ALTER TABLE `photo_espaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `photo_projets`
--
ALTER TABLE `photo_projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD CONSTRAINT `abonnements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD CONSTRAINT `equipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD CONSTRAINT `materiels_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `photo_espaces`
--
ALTER TABLE `photo_espaces`
  ADD CONSTRAINT `photo_espaces_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `photo_projets`
--
ALTER TABLE `photo_projets`
  ADD CONSTRAINT `photo_projets_projet_id_foreign` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD CONSTRAINT `reclamations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
