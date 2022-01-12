-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2022 às 19:41
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dvds`
--

CREATE TABLE `dvds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dvds`
--

INSERT INTO `dvds` (`id`, `nome`, `legenda`, `preco`, `quantidade`, `imagem`, `created_at`, `updated_at`, `categoria`, `disponibilidade`) VALUES
(1, 'Round 6', 'yr', '23', '18', 'public/ywf1YnB8acukKSjnobIKhULVxTYtnVGGcTtjj7Vz.jpg', '2021-12-26 18:49:42', '2022-01-12 21:19:16', 'Show de TV', 1),
(2, 'tteste', '23123', '123', '105', 'public/BXu0SIFgFZOINMHMaZXHzPfklRspiYxIyAD9PLiH.jpg', '2021-12-26 20:12:32', '2022-01-12 20:46:47', 'Show de TV', 1),
(3, 'bob esponja', 'desenho', '2222', '1', 'public/q0iuO4SjYJTPG6gqnVgBBynCtYh1wbfy43Wosjbr.jpg', '2021-12-26 21:40:38', '2022-01-07 21:48:51', 'Show de TV', 0),
(4, '123', '321', '23', '25', 'public/qB2Ab0kBAhvwd1p92o4kSEZpr3mQl7y44ClyPdDq.jpg', '2021-12-27 03:08:29', '2022-01-12 20:25:22', 'Show de TV', 0),
(5, 'teste', 'tste', '21', '1', 'public/ci2xcroOBzqVQb05ijj7p28wL4wnEQcj7fILBWhX.jpg', '2021-12-27 03:09:22', '2022-01-09 15:43:07', 'Show de TV', 0),
(6, '2222', '2222', '2222', '2221', 'public/kUJJ3TnpMw4PK9An9jY6gSaVgw2xPzV03qbE50pI.jpg', '2021-12-27 03:10:03', '2022-01-12 20:47:01', 'Show de TV', 0),
(8, 'ffffffffff', 'ffffffffff', 'ffffffff', '22', 'public/vhmgVa0DUycmccVlUuUnLCy88l16PFOv6v8ajtka.jpg', '2022-01-04 20:42:25', '2022-01-12 21:16:42', 'Show de TV', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_locador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_filme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `devolucao_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devolucao_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dvd_devolvido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `locacao`
--

INSERT INTO `locacao` (`id`, `nome_locador`, `nome_filme`, `data_inicial`, `data_final`, `created_at`, `updated_at`, `devolucao_usuario`, `devolucao_admin`, `dvd_devolvido`) VALUES
(30, 'Mrs. Clarabelle Torphy', 'tteste', '2022-01-11', '2022-01-26', '2022-01-11 23:08:23', '2022-01-11 23:08:23', '', '', ''),
(31, 'Mrs. Clarabelle Torphy', '123', '2022-01-11', '2022-01-26', '2022-01-11 23:09:38', '2022-01-11 23:09:38', '', '', ''),
(32, 'Mrs. Clarabelle Torphy', '123', '2022-01-11', '2022-01-26', '2022-01-11 23:11:02', '2022-01-11 23:11:02', '', '', ''),
(33, 'Mrs. Clarabelle Torphy', 'tteste', '2022-01-11', '2022-01-26', '2022-01-11 23:11:59', '2022-01-11 23:11:59', '', '', ''),
(34, 'Mrs. Clarabelle Torphy', 'tteste', '2022-01-11', '2022-01-26', '2022-01-11 23:29:02', '2022-01-11 23:29:02', '', '', ''),
(35, 'Mrs. Clarabelle Torphy', '123', '2022-01-11', '2022-01-26', '2022-01-11 23:31:12', '2022-01-11 23:31:12', '', '', ''),
(36, 'Lucinda Upton', 'tteste', '2022-01-12', '2022-01-10', '2022-01-12 17:17:38', '2022-01-12 17:17:38', '', '', ''),
(37, 'Lucinda Upton', '123', '2022-01-12', '2022-01-27', '2022-01-12 17:17:44', '2022-01-12 17:17:44', '', '', ''),
(38, 'Lucinda Upton', 'tteste', '2022-01-12', '2022-01-27', '2022-01-12 20:25:04', '2022-01-12 20:25:04', '', '', ''),
(39, 'Lucinda Upton', '123', '2022-01-12', '2022-01-27', '2022-01-12 20:25:22', '2022-01-12 20:25:22', '', '', ''),
(40, 'Lucinda Upton', 'tteste', '2022-01-12', '2022-01-27', '2022-01-12 20:37:39', '2022-01-12 20:37:39', '', '', ''),
(42, 'Lucinda Upton', 'tteste', '2022-01-12', '2022-01-27', '2022-01-12 20:46:47', '2022-01-12 20:46:47', '', '', ''),
(44, 'Lucinda Upton', 'ffffffffff', '2022-01-12', '2022-01-27', '2022-01-12 21:16:42', '2022-01-12 21:16:42', '', '', ''),
(45, 'Lucinda Upton', 'Round 6', '2022-01-12', '2022-01-27', '2022-01-12 21:19:16', '2022-01-12 21:32:57', 'sim', 'sim', 'devolvido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_atualizacao_coluna_dvd', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_10_12_000000_atualizacao_level_admin_usuario', 1),
(8, '2021_12_17_185555_create_dvd_table', 1),
(9, '2021_12_17_185555_create_produtos_table', 1),
(10, '2021_12_21_134020_create_sessions_table', 1),
(11, '2014_10_12_000000_atualizacao_coluna_dvd_categoria', 2),
(12, '2022_01_05_000000_create_locacao_table', 3),
(13, '2022_01_05_000000_create_disponibilidade_column_dvd_table', 4),
(14, '2022_01_10_000000_update_locacao_table', 5),
(15, '2022_01_12_000000_update_locacao_table_devolveu', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0lqWQjCX6CLlcCI162uCEmisldSXzH7JN8kUhd1D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36 Edg/97.0.1072.55', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHdzQkc1UGhoUXYyMmEzT0lNV0F2QmRVVmFSaWkxbzQyVTVNbk9MeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1642012713),
('63JHn2b3vqMUeHfV55etzdmlPuPLzUQjwiM6GAdY', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36 Edg/97.0.1072.55', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiM0pTUHFhZE51dFgwUlNjREJ5UFVTajVYOTFoMnNpd3dleDBQRzZ1WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kdmRzL3ZlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjt9', 1642012392),
('HVP8E4ZGbEKkOpV3zD3ohgpOLI49eIkw8gsyvyss', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36 Edg/97.0.1072.55', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidWJ5bVVQYTFLb2wxN3pLanpVQU96cG92OVZ1RXBOVWk3MUMzWkNIVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2NhY2FvL3ZlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ5MklYVU5wa2pPMHJPUTVieU1pLlllNG9Lb0VhM1JvOWxsQy8ub2cvYXQyLnVoZVdHL2lnaSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO30=', 1641992494),
('xbEiujVI57mYxcPcgjaFBr4eplGcSgiA2m4MI4qc', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36 Edg/97.0.1072.55', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQk1scDFNOGdCQ3RLRWc4Y1hza3k1UzNXYzV4alNOV2N5UjR2NXl2TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2NhY2FvL3ZlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjt9', 1641999352);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cliente` tinyint(4) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `cliente`, `admin`) VALUES
(1, 'Devon King', 'blanche.langworth@example.org', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'BJo19vJBnf0CdsKonmFVxOx9Fe1N2hAVv45yVmGnBYCExMhvYSRrGESb9qV1', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 0, 1),
(4, 'Dr. Miller Weissnat II', 'vthiel@example.com', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'SFyuW4u2B8yxbOgoeboSOrBSm0dNRtF3UJR6aJ0Ify3d1K9htoJJy67LUBbf', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 1, 0),
(5, 'Javonte Balistreri', 'savanna.ryan@example.net', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'FRd9soU9xu', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 0, 1),
(6, 'Prof. Christian Hansen', 'dicki.rylan@example.org', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'kxsI7POnF0EC1l0uo8drlZavBqyZEyUIf0JWPUTPD1W6zp9eRyXYbvOZqDLf', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 0, 1),
(7, 'Mrs. Clarabelle Torphy', 'king.charlene@example.net', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'F85C0lzRdsRmA0T7acVCuxty1j3zVxJFXgiHYnYtMlOgnvk7wO1TtzTtrwId', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 1, 1),
(8, 'Floy Macejkovic', 'acollins@example.org', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'QJyf5e8Tls', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 0, 1),
(9, 'Julien Kulas', 'leatha.weissnat@example.org', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'ayJrAfnUd3', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 0, 0),
(10, 'Lucinda Upton', 'waylon.bayer@example.com', '2021-12-26 15:33:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'RKkMgWMpgC', NULL, NULL, '2021-12-26 15:33:54', '2021-12-26 15:33:54', 1, 0),
(11, 'dfdf', 'fdfd', NULL, 'dfdf', NULL, NULL, NULL, NULL, NULL, '2022-01-02 20:28:07', '2022-01-02 20:28:07', 0, 0),
(12, 'teste', 'brunoinacio3000@hotmail.com', NULL, '1234', NULL, NULL, NULL, NULL, NULL, '2022-01-02 20:42:37', '2022-01-02 20:42:37', 0, 0),
(13, '1233', '1233', NULL, '123', NULL, NULL, NULL, NULL, NULL, '2022-01-02 21:26:12', '2022-01-04 17:42:47', 0, 0),
(14, '22', '22', NULL, '22', NULL, NULL, NULL, NULL, NULL, '2022-01-02 21:29:48', '2022-01-02 21:29:48', 0, 0),
(15, '1', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, '2022-01-02 21:36:33', '2022-01-02 21:36:33', 0, 0),
(19, '123123', '123123', NULL, '213', NULL, NULL, NULL, NULL, NULL, '2022-01-02 21:42:42', '2022-01-02 21:42:42', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dvds`
--
ALTER TABLE `dvds`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dvds`
--
ALTER TABLE `dvds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `locacao`
--
ALTER TABLE `locacao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
