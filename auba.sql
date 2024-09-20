-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20/09/2024 às 17:41
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `auba`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `audits`
--

CREATE TABLE `audits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci,
  `new_values` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `audits`
--

INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Config', 1, '{\"rodape\":\"Auba\"}', '{\"rodape\":\"Auba Bank\"}', 'http://localhost:8000/admin/config/1', '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-17 11:44:14', '2024-09-17 11:44:14'),
(2, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Config', 1, '{\"imagem\":null}', '{\"imagem\":\"upload\\/1726573454-logo-auba.png\"}', 'http://localhost:8000/admin/config/1', '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-17 11:44:14', '2024-09-17 11:44:14'),
(3, 'App\\Models\\User', 1, 'created', 'App\\Models\\Home', 1, '[]', '{\"id_user\":\"1\",\"titulo\":\"Somos um ecossistema de solu\\u00e7\\u00f5es financeiras que protege aquilo que \\u00e9 importante para voc\\u00ea.\",\"exibir\":\"Sim\",\"video\":\"UkT3EOCy0P0\",\"titulo_link\":null,\"link\":null,\"bg_cor\":\"#000000\",\"descricao\":\"<p>Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/p>\",\"bg_imagem\":\"upload\\/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-bg-1726573616.jpg\",\"id\":1}', 'http://localhost:8000/admin/homes/store', '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-17 11:46:56', '2024-09-17 11:46:56'),
(4, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"titulo_link\":null,\"link\":null}', '{\"titulo_link\":\"Fale Conosco\",\"link\":\"#\"}', 'http://localhost:8000/admin/homes/1', '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-17 11:47:19', '2024-09-17 11:47:19'),
(5, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"descricao\":\"<p>Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/p>\"}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\"}', 'http://localhost:8000/admin/homes/1', '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-17 15:51:49', '2024-09-17 15:51:49'),
(6, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"cor_titulo\":null,\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\",\"cor_link\":null}', '{\"cor_titulo\":\"#ffffff\",\"descricao\":\"<p><span style=\\\"color:hsl(0,0%,100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\",\"cor_link\":\"#ffd500\"}', 'http://auba.test/admin/homes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 13:40:42', '2024-09-18 13:40:42'),
(7, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"cor_link\":\"#ffd500\"}', '{\"cor_link\":\"btn-main\"}', 'http://auba.test/admin/homes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 13:45:46', '2024-09-18 13:45:46'),
(8, 'App\\Models\\User', 1, 'created', 'App\\Models\\Home', 2, '[]', '{\"id_user\":\"1\",\"titulo\":\"Nossos Servi\\u00e7os\",\"cor_titulo\":\"#ffffff\",\"exibir\":\"Sim\",\"video\":\"UkT3EOCy0P0\",\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-white\",\"bg_cor\":\"#000000\",\"descricao\":\"<p><a href=\\\"#\\\">Seguros<\\/a> <a href=\\\"#\\\">Banco Digital<\\/a> <a href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\",\"bg_imagem\":\"upload\\/nossos-servicos-bg-1726691328.jpg\",\"id\":2}', 'http://auba.test/admin/homes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:28:48', '2024-09-18 20:28:48'),
(9, 'App\\Models\\User', 1, 'created', 'App\\Models\\Home', 3, '[]', '{\"id_user\":\"1\",\"titulo\":\"Solu\\u00e7\\u00f5es seguras atendem diferentes momentos da vida.\",\"cor_titulo\":\"#ffffff\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-white\",\"bg_cor\":\"#000000\",\"descricao\":\"<p>Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/p>\",\"bg_imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-bg-1726691855.jpg\",\"id\":3}', 'http://auba.test/admin/homes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:37:35', '2024-09-18 20:37:35'),
(10, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"descricao\":\"<p>Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/p>\"}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:37:58', '2024-09-18 20:37:58'),
(11, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a href=\\\"#\\\">Seguros<\\/a> <a href=\\\"#\\\">Banco Digital<\\/a> <a href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:46:11', '2024-09-18 20:46:11'),
(12, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', '{\"descricao\":\"<p style=\\\"align-items:flex-start;display:flex;flex-direction:column;flex-wrap:nowrap;\\\"><a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:47:32', '2024-09-18 20:47:32'),
(13, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p style=\\\"align-items:flex-start;display:flex;flex-direction:column;flex-wrap:nowrap;\\\"><a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', '{\"descricao\":\"<p style=\\\"align-items:flex-start;display:flex;flex-direction:column;flex-wrap:nowrap;\\\"><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:48:32', '2024-09-18 20:48:32'),
(14, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p style=\\\"align-items:flex-start;display:flex;flex-direction:column;flex-wrap:nowrap;\\\"><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Seguros<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Banco Digital<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Plano de Sa\\u00fade<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\">Prote\\u00e7\\u00e3o Veicular<\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"> <img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:56:37', '2024-09-18 20:56:37'),
(15, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"> <img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 20:57:55', '2024-09-18 20:57:55'),
(16, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:03:47', '2024-09-18 21:03:47'),
(17, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin-bottom:20px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"160\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"160\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"160\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"160\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:04:57', '2024-09-18 21:04:57'),
(18, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"160\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"160\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"160\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"160\\\"><\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:06:20', '2024-09-18 21:06:20'),
(19, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"link\":\"#\"}', '{\"link\":null}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:07:42', '2024-09-18 21:07:42'),
(20, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"video\":\"UkT3EOCy0P0\"}', '{\"video\":null}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:10:25', '2024-09-18 21:10:25'),
(21, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Config', 1, '{\"titulo\":\"Auba\",\"rodape\":\"Auba Bank\",\"email\":null,\"phone\":null,\"facebook\":null,\"instagram\":null,\"linkedin\":null,\"youtube\":null,\"google\":null,\"endereco\":null,\"whatsapp\":null,\"atendimento\":null}', '{\"titulo\":\"Auba Bank\",\"rodape\":\"Auba Bank - Todos os direitos reservados\",\"email\":\"contato@aubabank.com.br\",\"phone\":\"(73) 9 9999-9999\",\"facebook\":\"https:\\/\\/facebook.com\",\"instagram\":\"https:\\/\\/instagram.com\",\"linkedin\":\"https:\\/\\/linkedin.com\",\"youtube\":\"https:\\/\\/youtube.com\",\"google\":\"https:\\/\\/google.com\",\"endereco\":\"Av. Rio Branco, 00 - Centro - Jequi\\u00e9-BA\",\"whatsapp\":\"https:\\/\\/whatsapp.com\",\"atendimento\":\"Seg. a Sex. 8:00 - 18:00 - S\\u00e1b. 8:00 - 13:00\"}', 'http://auba.test/admin/config/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 21:14:53', '2024-09-18 21:14:53'),
(22, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\"}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0,0%,100%);\\\">Evoluir e ajudar as pessoas a evolu\\u00edrem com a gente \\u00e9 um compromisso da Evogard, por isso desenhamos cada solu\\u00e7\\u00e3o para atender diferentes momentos da vida dos nossos clientes. Da concretiza\\u00e7\\u00e3o de um sonho \\u00e0 prote\\u00e7\\u00e3o do patrim\\u00f4nio, do cuidado com a sa\\u00fade ao zelo por aqueles que ama, tudo isso promove evolu\\u00e7\\u00e3o e impulsiona conquistas.<\\/span><\\/p>\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:14:49', '2024-09-18 22:14:49'),
(23, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"imagem\":null}', '{\"imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726697689.png\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:14:49', '2024-09-18 22:14:49'),
(24, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"link\":\"#\",\"bg_cor\":\"#000000\"}', '{\"link\":\"#554128\",\"bg_cor\":\"#554128\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:16:54', '2024-09-18 22:16:54'),
(25, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726697689.png\"}', '{\"imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726697814.png\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:16:54', '2024-09-18 22:16:54'),
(26, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"bg_cor\":\"#000000\"}', '{\"bg_cor\":\"#ffa300\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:45:02', '2024-09-18 22:45:02'),
(27, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"bg_imagem\":\"upload\\/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-bg-1726573616.jpg\"}', '{\"bg_imagem\":\"upload\\/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-fundo-1726700095.jpg\"}', 'http://auba.test/admin/homes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:54:55', '2024-09-18 22:54:55'),
(28, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"bg_imagem\":\"upload\\/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-fundo-1726700095.jpg\"}', '{\"bg_imagem\":\"upload\\/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-fundo-1726700163.jpg\"}', 'http://auba.test/admin/homes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:56:03', '2024-09-18 22:56:03'),
(29, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 1, '{\"bg_cor\":\"#000000\"}', '{\"bg_cor\":\"#212121\"}', 'http://auba.test/admin/homes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 22:56:42', '2024-09-18 22:56:42'),
(30, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726697814.png\"}', '{\"imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726703670.png\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 23:54:30', '2024-09-18 23:54:30'),
(31, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"bg_imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-bg-1726691855.jpg\"}', '{\"bg_imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-fundo-1726703868.jpg\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-18 23:57:48', '2024-09-18 23:57:48'),
(32, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 3, '{\"bg_imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-fundo-1726703868.jpg\"}', '{\"bg_imagem\":\"upload\\/solucoes-seguras-atendem-diferentes-momentos-da-vida-fundo-1726704910.jpg\"}', 'http://auba.test/admin/homes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 00:15:10', '2024-09-19 00:15:10'),
(33, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"#\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/banco\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/protecao\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/saude\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"consorcio\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 00:20:13', '2024-09-19 00:20:13'),
(34, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Home', 2, '{\"descricao\":\"<p><a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/banco\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/protecao\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\">&nbsp;<\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"\\/saude\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a style=\\\"background-color:#111;border-radius:7px;color:#fff;display:inline-block;margin:5px;padding:30px 50px;\\\" href=\\\"consorcio\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', '{\"descricao\":\"<p><a class=\\\"btn-pages\\\" href=\\\"\\/banco\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/banco_1726692794.png\\\" width=\\\"140\\\"><\\/a> <a class=\\\"btn-pages\\\" href=\\\"\\/protecao\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/protecao_1726692925.png\\\" width=\\\"140\\\"><\\/a> <a class=\\\"btn-pages\\\" href=\\\"\\/saude\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/saude_1726692879.png\\\" width=\\\"140\\\"><\\/a> <a class=\\\"btn-pages\\\" href=\\\"consorcio\\\"><img src=\\\"http:\\/\\/auba.test\\/storage\\/upload\\/consorcio_1726693387.png\\\" width=\\\"140\\\"><\\/a><\\/p>\"}', 'http://auba.test/admin/homes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 00:28:23', '2024-09-19 00:28:23'),
(35, 'App\\Models\\User', 1, 'created', 'App\\Models\\Saude', 1, '[]', '{\"id_user\":\"1\",\"titulo\":\"Cuide-se com nossos planos de Benef\\u00edcios \\u00e0 sa\\u00fade\",\"cor_titulo\":\"#ffffff\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-white\",\"bg_cor\":\"#000000\",\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Escolha a melhor op\\u00e7\\u00e3o para voc\\u00ea e sua fam\\u00edlia e tenha acesso a uma rede ampla de profissionais e servi\\u00e7os m\\u00e9dicos.<\\/span><\\/p>\",\"imagem\":\"upload\\/cuide-se-com-nossos-planos-de-beneficios-a-saude-1726752379.png\",\"bg_imagem\":\"upload\\/cuide-se-com-nossos-planos-de-beneficios-a-saude-bg-1726752379.jpg\",\"id\":1}', 'http://auba.test/admin/saudes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 13:26:19', '2024-09-19 13:26:19'),
(36, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 1, '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Escolha a melhor op\\u00e7\\u00e3o para voc\\u00ea e sua fam\\u00edlia e tenha acesso a uma rede ampla de profissionais e servi\\u00e7os m\\u00e9dicos.<\\/span><\\/p>\",\"link\":\"#\",\"bg_cor\":\"#000000\"}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0,0%,100%);\\\">Escolha a melhor op\\u00e7\\u00e3o para voc\\u00ea e sua fam\\u00edlia e tenha acesso a uma rede ampla de profissionais e servi\\u00e7os m\\u00e9dicos.<\\/span><\\/p>\",\"link\":\"#015fa5\",\"bg_cor\":\"#015fa5\"}', 'http://auba.test/admin/saudes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 13:30:55', '2024-09-19 13:30:55'),
(37, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 1, '{\"cor_link\":\"btn-white\"}', '{\"cor_link\":\"btn-blue\"}', 'http://auba.test/admin/saudes/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 13:33:49', '2024-09-19 13:33:49'),
(38, 'App\\Models\\User', 1, 'created', 'App\\Models\\Saude', 2, '[]', '{\"id_user\":\"1\",\"titulo\":\"O Que Oferecemos\",\"cor_titulo\":\"#000000\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-white\",\"bg_cor\":\"#00529e\",\"descricao\":\"<div><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div>\",\"id\":2}', 'http://auba.test/admin/saudes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 13:57:37', '2024-09-19 13:57:37'),
(39, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 2, '{\"cor_titulo\":\"#000000\"}', '{\"cor_titulo\":\"#ffffff\"}', 'http://auba.test/admin/saudes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 13:58:21', '2024-09-19 13:58:21'),
(40, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 2, '{\"descricao\":\"<div><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div>\"}', '{\"descricao\":\"<div class=\\\"row\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><\\/div>\"}', 'http://auba.test/admin/saudes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:00:41', '2024-09-19 14:00:41'),
(41, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 2, '{\"descricao\":\"<div class=\\\"row\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><\\/div>\"}', '{\"descricao\":\"<div class=\\\"row\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Rede credenciada de excel\\u00eancia<\\/h3><p>Contamos com uma ampla rede de profissionais, cl\\u00ednicas e hospitais renomados, prontos para atender voc\\u00ea com qualidade e efici\\u00eancia.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Agilidade nos atendimentos<\\/h3><p>Esque\\u00e7a as longas esperas. Com nosso Plano de benef\\u00edcio \\u00e0 sa\\u00fade, voc\\u00ea ter\\u00e1 acesso a consultas e exames de forma r\\u00e1pida e descomplicada.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Atendimento 24 horas<\\/h3><p>Nosso time de especialistas est\\u00e1 dispon\\u00edvel 24 horas por dia, 7 dias por semana, para esclarecer suas d\\u00favidas e oferecer todo o suporte necess\\u00e1rio.<\\/p><\\/div><\\/div><\\/div>\"}', 'http://auba.test/admin/saudes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:06:01', '2024-09-19 14:06:01'),
(42, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 2, '{\"descricao\":\"<div class=\\\"row\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Rede credenciada de excel\\u00eancia<\\/h3><p>Contamos com uma ampla rede de profissionais, cl\\u00ednicas e hospitais renomados, prontos para atender voc\\u00ea com qualidade e efici\\u00eancia.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Agilidade nos atendimentos<\\/h3><p>Esque\\u00e7a as longas esperas. Com nosso Plano de benef\\u00edcio \\u00e0 sa\\u00fade, voc\\u00ea ter\\u00e1 acesso a consultas e exames de forma r\\u00e1pida e descomplicada.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Atendimento 24 horas<\\/h3><p>Nosso time de especialistas est\\u00e1 dispon\\u00edvel 24 horas por dia, 7 dias por semana, para esclarecer suas d\\u00favidas e oferecer todo o suporte necess\\u00e1rio.<\\/p><\\/div><\\/div><\\/div>\"}', '{\"descricao\":\"<div class=\\\"row mb-3\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Cobertura ampla e abrangente<\\/h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontol\\u00f3gicos e muito mais. Tudo o que voc\\u00ea precisa para cuidar da sua sa\\u00fade em um s\\u00f3 lugar.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Rede credenciada de excel\\u00eancia<\\/h3><p>Contamos com uma ampla rede de profissionais, cl\\u00ednicas e hospitais renomados, prontos para atender voc\\u00ea com qualidade e efici\\u00eancia.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Agilidade nos atendimentos<\\/h3><p>Esque\\u00e7a as longas esperas. Com nosso Plano de benef\\u00edcio \\u00e0 sa\\u00fade, voc\\u00ea ter\\u00e1 acesso a consultas e exames de forma r\\u00e1pida e descomplicada.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-saude\\\"><h3>Atendimento 24 horas<\\/h3><p>Nosso time de especialistas est\\u00e1 dispon\\u00edvel 24 horas por dia, 7 dias por semana, para esclarecer suas d\\u00favidas e oferecer todo o suporte necess\\u00e1rio.<\\/p><\\/div><\\/div><\\/div>\"}', 'http://auba.test/admin/saudes/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:07:26', '2024-09-19 14:07:26'),
(43, 'App\\Models\\User', 1, 'created', 'App\\Models\\Saude', 3, '[]', '{\"id_user\":\"1\",\"titulo\":\"Descubra o Plano de benef\\u00edcios \\u00e0 sa\\u00fade Perfeito para Voc\\u00ea e Sua Fam\\u00edlia\",\"cor_titulo\":\"#000000\",\"exibir\":\"Sim\",\"video\":null,\"link\":null,\"titulo_link\":null,\"cor_link\":\"btn-blue\",\"bg_cor\":\"#000000\",\"descricao\":\"<p>Na correria do dia a dia, sua sa\\u00fade n\\u00e3o pode ficar em segundo plano. Por isso, apresentamos a voc\\u00ea a solu\\u00e7\\u00e3o ideal: nossos Planos de Sa\\u00fade completos, pensados para atender todas as suas necessidades e proporcionar o cuidado que voc\\u00ea e sua fam\\u00edlia merecem.<\\/p>\",\"imagem\":\"upload\\/descubra-o-plano-de-beneficios-a-saude-perfeito-para-voce-e-sua-familia-1726757033.png\",\"id\":3}', 'http://auba.test/admin/saudes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:43:53', '2024-09-19 14:43:53'),
(44, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 3, '{\"bg_cor\":\"#000000\"}', '{\"bg_cor\":\"#ffffff\"}', 'http://auba.test/admin/saudes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:44:09', '2024-09-19 14:44:09'),
(45, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 3, '{\"bg_imagem\":null}', '{\"bg_imagem\":\"upload\\/descubra-o-plano-de-beneficios-a-saude-perfeito-para-voce-e-sua-familia-fundo-1726757049.jpg\"}', 'http://auba.test/admin/saudes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:44:09', '2024-09-19 14:44:09'),
(46, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 3, '{\"cor_titulo\":\"#000000\",\"titulo_link\":null,\"link\":null}', '{\"cor_titulo\":\"#008ae0\",\"titulo_link\":\"Fale Conosco\",\"link\":\"#\"}', 'http://auba.test/admin/saudes/3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:44:32', '2024-09-19 14:44:32'),
(47, 'App\\Models\\User', 1, 'created', 'App\\Models\\Saude', 4, '[]', '{\"id_user\":\"1\",\"titulo\":\"Pra quem \\u00e9 feito nossos Planos:\",\"cor_titulo\":\"#00478a\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-blue\",\"bg_cor\":\"#ffffff\",\"descricao\":\"<ul style=\\\"list-style-type:disc;\\\"><li>De forma individual e\\/ou familiar para os que valorizam sua sa\\u00fade e buscam a melhor assist\\u00eancia m\\u00e9dica.<\\/li><li>Empresas preocupadas com o bem-estar de seus funcion\\u00e1rios.<\\/li><li>Pessoas que desejam ter acesso a uma ampla rede de profissionais qualificados.<\\/li><\\/ul>\",\"imagem\":\"upload\\/pra-quem-e-feito-nossos-planos-1726757376.jpg\",\"id\":4}', 'http://auba.test/admin/saudes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:49:36', '2024-09-19 14:49:36');
INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(48, 'App\\Models\\User', 1, 'created', 'App\\Models\\Saude', 5, '[]', '{\"id_user\":\"1\",\"titulo\":\"Planos\",\"cor_titulo\":\"#4797ff\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"00529e\",\"titulo_link\":null,\"cor_link\":\"btn-main\",\"bg_cor\":\"#00529e\",\"descricao\":\"<div class=\\\"row\\\"><div class=\\\"col-lg-4\\\"><div class=\\\"col-plan\\\"><h2>R$59,90<\\/h2><h3>Evogard Odonto<\\/h3><ul><li>Odonto<\\/li><li>Assist\\u00eancia residencial<\\/li><li>Assist\\u00eancia funeral<\\/li><\\/ul><\\/div><\\/div><div class=\\\"col-lg-4\\\"><div class=\\\"col-plan\\\"><h2>R$69,90<\\/h2><h3>Evogard Med<\\/h3><ul><li>Consulta m\\u00e9dica<\\/li><li>Check-up m\\u00e9dico<\\/li><li>Exame de imagem e laboratorial com Cashback<\\/li><li>Assist\\u00eancia residencial<\\/li><li>Assist\\u00eancia funeral<\\/li><\\/ul><\\/div><\\/div><div class=\\\"col-lg-4\\\"><div class=\\\"col-plan\\\"><h2>R$89,90<\\/h2><h3>Sa\\u00fade completa<\\/h3><ul><li>Consulta m\\u00e9dica<\\/li><li>Check-up m\\u00e9dico<\\/li><li>Exame de imagem e laboratorial com Cashback<\\/li><li>Assist\\u00eancia residencial<\\/li><li>Assist\\u00eancia funeral<\\/li><\\/ul><\\/div><\\/div><\\/div>\",\"id\":5}', 'http://auba.test/admin/saudes/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:57:08', '2024-09-19 14:57:08'),
(49, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 5, '{\"titulo_link\":null,\"cor_link\":\"btn-main\",\"link\":\"00529e\"}', '{\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-white\",\"link\":\"#\"}', 'http://auba.test/admin/saudes/5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 14:58:43', '2024-09-19 14:58:43'),
(50, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Saude', 5, '{\"titulo\":\"Planos\",\"cor_titulo\":\"#4797ff\"}', '{\"titulo\":\"Nossos Planos\",\"cor_titulo\":\"#ffffff\"}', 'http://auba.test/admin/saudes/5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 15:03:22', '2024-09-19 15:03:22'),
(51, 'App\\Models\\User', 1, 'created', 'App\\Models\\Seguro', 1, '[]', '{\"id_user\":\"1\",\"titulo\":\"Proteja seu ve\\u00edculo com confian\\u00e7a e tranquilidade\",\"cor_titulo\":\"#ffffff\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"bg_cor\":\"#000000\",\"descricao\":\"<p><span style=\\\"background-color:hsl(0, 0%, 100%);\\\">Cobertura abrangente para o seu carro\\/moto, assist\\u00eancia 24h e reparos r\\u00e1pidos. Obtenha uma cota\\u00e7\\u00e3o gratuita agora!<\\/span><\\/p>\",\"imagem\":\"upload\\/proteja-seu-veiculo-com-confianca-e-tranquilidade-1726766222.png\",\"bg_imagem\":\"upload\\/proteja-seu-veiculo-com-confianca-e-tranquilidade-bg-1726766222.jpg\",\"id\":1}', 'http://auba.test/admin/seguros/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:17:02', '2024-09-19 17:17:02'),
(52, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Seguro', 1, '{\"descricao\":\"<p><span style=\\\"background-color:hsl(0, 0%, 100%);\\\">Cobertura abrangente para o seu carro\\/moto, assist\\u00eancia 24h e reparos r\\u00e1pidos. Obtenha uma cota\\u00e7\\u00e3o gratuita agora!<\\/span><\\/p>\"}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Cobertura abrangente para o seu carro\\/moto, assist\\u00eancia 24h e reparos r\\u00e1pidos. Obtenha uma cota\\u00e7\\u00e3o gratuita agora!<\\/span><\\/p>\"}', 'http://auba.test/admin/seguros/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:18:04', '2024-09-19 17:18:04'),
(53, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Seguro', 1, '{\"descricao\":\"<p><span style=\\\"color:hsl(0, 0%, 100%);\\\">Cobertura abrangente para o seu carro\\/moto, assist\\u00eancia 24h e reparos r\\u00e1pidos. Obtenha uma cota\\u00e7\\u00e3o gratuita agora!<\\/span><\\/p>\",\"cor_link\":null}', '{\"descricao\":\"<p><span style=\\\"color:hsl(0,0%,100%);\\\">Cobertura abrangente para o seu carro\\/moto, assist\\u00eancia 24h e reparos r\\u00e1pidos. Obtenha uma cota\\u00e7\\u00e3o gratuita agora!<\\/span><\\/p>\",\"cor_link\":\"btn-white\"}', 'http://auba.test/admin/seguros/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:18:11', '2024-09-19 17:18:11'),
(54, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Seguro', 1, '{\"bg_cor\":\"#000000\"}', '{\"bg_cor\":\"#f77d00\"}', 'http://auba.test/admin/seguros/1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:18:53', '2024-09-19 17:18:53'),
(55, 'App\\Models\\User', 1, 'created', 'App\\Models\\Seguro', 2, '[]', '{\"id_user\":\"1\",\"titulo\":\"A seguran\\u00e7a que voc\\u00ea precisa para ir mais longe!\",\"cor_titulo\":\"#ffffff\",\"exibir\":\"Sim\",\"video\":null,\"link\":\"#\",\"titulo_link\":\"Fale Conosco\",\"cor_link\":\"btn-main\",\"bg_cor\":\"#000000\",\"descricao\":\"<div class=\\\"row mb-3\\\"><div class=\\\"col-lg-3\\\"><div class=\\\"col-seguro\\\"><h3>Roubo ou Furto<\\/h3><p>\\u00cdndice de roubo e furto n\\u00e3o para de crescer, ter essa prote\\u00e7\\u00e3o \\u00e9 essencial.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-seguro\\\"><h3>Rastreamento 24 horas<\\/h3><p>Controle total da localiza\\u00e7\\u00e3o do seu ve\\u00edculo na palma da m\\u00e3o, com op\\u00e7\\u00e3o de bloqueio.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-seguro\\\"><h3>Reboque 24 horas<\\/h3><p>Se seu ve\\u00edculo parar, um reboque pode sair muito caro. Aqui voc\\u00ea conta com at\\u00e9 2.000 Km de benef\\u00edcio.<\\/p><\\/div><\\/div><div class=\\\"col-lg-3\\\"><div class=\\\"col-seguro\\\"><h3>Assist\\u00eancia 24 horas<\\/h3><p>N\\u00e3o fique no prego, conte com assist\\u00eancia completa na hora dos imprevistos.<\\/p><\\/div><\\/div><\\/div>\",\"id\":2}', 'http://auba.test/admin/seguros/store', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:24:02', '2024-09-19 17:24:02'),
(56, 'App\\Models\\User', 1, 'updated', 'App\\Models\\Seguro', 2, '{\"bg_imagem\":null}', '{\"bg_imagem\":\"upload\\/a-seguranca-que-voce-precisa-para-ir-mais-longe-fundo-1726767125.jpg\"}', 'http://auba.test/admin/seguros/2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', NULL, '2024-09-19 17:32:05', '2024-09-19 17:32:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bancos`
--

CREATE TABLE `bancos` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `exibir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configs`
--

CREATE TABLE `configs` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rodape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` text COLLATE utf8mb4_unicode_ci,
  `endereco` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` text COLLATE utf8mb4_unicode_ci,
  `analytcs` text COLLATE utf8mb4_unicode_ci,
  `maps` text COLLATE utf8mb4_unicode_ci,
  `pixel` text COLLATE utf8mb4_unicode_ci,
  `download` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `atendimento` text COLLATE utf8mb4_unicode_ci,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `configs`
--

INSERT INTO `configs` (`id`, `titulo`, `rodape`, `email`, `phone`, `facebook`, `instagram`, `tiktok`, `linkedin`, `twitter`, `youtube`, `google`, `endereco`, `whatsapp`, `analytcs`, `maps`, `pixel`, `download`, `description`, `keywords`, `atendimento`, `site`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'Auba Bank', 'Auba Bank - Todos os direitos reservados', 'contato@aubabank.com.br', '(73) 9 9999-9999', 'https://facebook.com', 'https://instagram.com', NULL, 'https://linkedin.com', NULL, 'https://youtube.com', 'https://google.com', 'Av. Rio Branco, 00 - Centro - Jequié-BA', 'https://whatsapp.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Seg. a Sex. 8:00 - 18:00 - Sáb. 8:00 - 13:00', NULL, 'upload/1726573454-logo-auba.png', '2024-09-17 08:42:01', '2024-09-18 21:14:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consorcios`
--

CREATE TABLE `consorcios` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `exibir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `homes`
--

CREATE TABLE `homes` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `exibir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `homes`
--

INSERT INTO `homes` (`id`, `titulo`, `cor_titulo`, `descricao`, `exibir`, `imagem`, `video`, `titulo_link`, `cor_link`, `link`, `bg_cor`, `bg_imagem`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Somos um ecossistema de soluções financeiras que protege aquilo que é importante para você.', '#ffffff', '<p><span style=\"color:hsl(0,0%,100%);\">Evoluir e ajudar as pessoas a evoluírem com a gente é um compromisso da Evogard, por isso desenhamos cada solução para atender diferentes momentos da vida dos nossos clientes. Da concretização de um sonho à proteção do patrimônio, do cuidado com a saúde ao zelo por aqueles que ama, tudo isso promove evolução e impulsiona conquistas.</span></p>', 'Sim', NULL, 'UkT3EOCy0P0', 'Fale Conosco', 'btn-main', '#', '#212121', 'upload/somos-um-ecossistema-de-solucoes-financeiras-que-protege-aquilo-que-e-importante-para-voce-fundo-1726700163.jpg', 1, '2024-09-17 11:46:56', '2024-09-18 22:56:42'),
(2, 'Nossos Serviços', '#ffffff', '<p><a class=\"btn-pages\" href=\"/banco\"><img src=\"http://auba.test/storage/upload/banco_1726692794.png\" width=\"140\"></a> <a class=\"btn-pages\" href=\"/protecao\"><img src=\"http://auba.test/storage/upload/protecao_1726692925.png\" width=\"140\"></a> <a class=\"btn-pages\" href=\"/saude\"><img src=\"http://auba.test/storage/upload/saude_1726692879.png\" width=\"140\"></a> <a class=\"btn-pages\" href=\"consorcio\"><img src=\"http://auba.test/storage/upload/consorcio_1726693387.png\" width=\"140\"></a></p>', 'Sim', NULL, NULL, 'Fale Conosco', 'btn-white', NULL, '#ffa300', 'upload/nossos-servicos-bg-1726691328.jpg', 1, '2024-09-18 20:28:48', '2024-09-19 00:28:23'),
(3, 'Soluções seguras atendem diferentes momentos da vida.', '#ffffff', '<p><span style=\"color:hsl(0,0%,100%);\">Evoluir e ajudar as pessoas a evoluírem com a gente é um compromisso da Evogard, por isso desenhamos cada solução para atender diferentes momentos da vida dos nossos clientes. Da concretização de um sonho à proteção do patrimônio, do cuidado com a saúde ao zelo por aqueles que ama, tudo isso promove evolução e impulsiona conquistas.</span></p>', 'Sim', 'upload/solucoes-seguras-atendem-diferentes-momentos-da-vida-1726703670.png', NULL, 'Fale Conosco', 'btn-white', '#554128', '#554128', 'upload/solucoes-seguras-atendem-diferentes-momentos-da-vida-fundo-1726704910.jpg', 1, '2024-09-18 20:37:35', '2024-09-19 00:15:10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_02_235200_create_configs_table', 1),
(5, '2024_08_05_120053_create_audits_table', 1),
(6, '2024_09_16_144050_create_homes_table', 1),
(7, '2024_09_16_145020_create_seguros_table', 1),
(8, '2024_09_18_201226_create_bancos_table', 2),
(9, '2024_09_18_201234_create_saudes_table', 2),
(10, '2024_09_18_201243_create_consorcios_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saudes`
--

CREATE TABLE `saudes` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `exibir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `saudes`
--

INSERT INTO `saudes` (`id`, `titulo`, `cor_titulo`, `descricao`, `exibir`, `imagem`, `video`, `titulo_link`, `cor_link`, `link`, `bg_cor`, `bg_imagem`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Cuide-se com nossos planos de Benefícios à saúde', '#ffffff', '<p><span style=\"color:hsl(0,0%,100%);\">Escolha a melhor opção para você e sua família e tenha acesso a uma rede ampla de profissionais e serviços médicos.</span></p>', 'Sim', 'upload/cuide-se-com-nossos-planos-de-beneficios-a-saude-1726752379.png', NULL, 'Fale Conosco', 'btn-blue', '#015fa5', '#015fa5', 'upload/cuide-se-com-nossos-planos-de-beneficios-a-saude-bg-1726752379.jpg', 1, '2024-09-19 13:26:19', '2024-09-19 13:33:49'),
(2, 'O Que Oferecemos', '#ffffff', '<div class=\"row mb-3\"><div class=\"col-lg-3\"><div class=\"col-saude\"><h3>Cobertura ampla e abrangente</h3><p>Consultas, exames de imagem e laboratorial, procedimentos odontológicos e muito mais. Tudo o que você precisa para cuidar da sua saúde em um só lugar.</p></div></div><div class=\"col-lg-3\"><div class=\"col-saude\"><h3>Rede credenciada de excelência</h3><p>Contamos com uma ampla rede de profissionais, clínicas e hospitais renomados, prontos para atender você com qualidade e eficiência.</p></div></div><div class=\"col-lg-3\"><div class=\"col-saude\"><h3>Agilidade nos atendimentos</h3><p>Esqueça as longas esperas. Com nosso Plano de benefício à saúde, você terá acesso a consultas e exames de forma rápida e descomplicada.</p></div></div><div class=\"col-lg-3\"><div class=\"col-saude\"><h3>Atendimento 24 horas</h3><p>Nosso time de especialistas está disponível 24 horas por dia, 7 dias por semana, para esclarecer suas dúvidas e oferecer todo o suporte necessário.</p></div></div></div>', 'Sim', NULL, NULL, 'Fale Conosco', 'btn-white', '#', '#00529e', NULL, 1, '2024-09-19 13:57:37', '2024-09-19 14:07:26'),
(3, 'Descubra o Plano de benefícios à saúde Perfeito para Você e Sua Família', '#008ae0', '<p>Na correria do dia a dia, sua saúde não pode ficar em segundo plano. Por isso, apresentamos a você a solução ideal: nossos Planos de Saúde completos, pensados para atender todas as suas necessidades e proporcionar o cuidado que você e sua família merecem.</p>', 'Sim', 'upload/descubra-o-plano-de-beneficios-a-saude-perfeito-para-voce-e-sua-familia-1726757033.png', NULL, 'Fale Conosco', 'btn-blue', '#', '#ffffff', 'upload/descubra-o-plano-de-beneficios-a-saude-perfeito-para-voce-e-sua-familia-fundo-1726757049.jpg', 1, '2024-09-19 14:43:53', '2024-09-19 14:44:32'),
(4, 'Pra quem é feito nossos Planos:', '#00478a', '<ul style=\"list-style-type:disc;\"><li>De forma individual e/ou familiar para os que valorizam sua saúde e buscam a melhor assistência médica.</li><li>Empresas preocupadas com o bem-estar de seus funcionários.</li><li>Pessoas que desejam ter acesso a uma ampla rede de profissionais qualificados.</li></ul>', 'Sim', 'upload/pra-quem-e-feito-nossos-planos-1726757376.jpg', NULL, 'Fale Conosco', 'btn-blue', '#', '#ffffff', NULL, 1, '2024-09-19 14:49:36', '2024-09-19 14:49:36'),
(5, 'Nossos Planos', '#ffffff', '<div class=\"row\"><div class=\"col-lg-4\"><div class=\"col-plan\"><h2>R$59,90</h2><h3>Evogard Odonto</h3><ul><li>Odonto</li><li>Assistência residencial</li><li>Assistência funeral</li></ul></div></div><div class=\"col-lg-4\"><div class=\"col-plan\"><h2>R$69,90</h2><h3>Evogard Med</h3><ul><li>Consulta médica</li><li>Check-up médico</li><li>Exame de imagem e laboratorial com Cashback</li><li>Assistência residencial</li><li>Assistência funeral</li></ul></div></div><div class=\"col-lg-4\"><div class=\"col-plan\"><h2>R$89,90</h2><h3>Saúde completa</h3><ul><li>Consulta médica</li><li>Check-up médico</li><li>Exame de imagem e laboratorial com Cashback</li><li>Assistência residencial</li><li>Assistência funeral</li></ul></div></div></div>', 'Sim', NULL, NULL, 'Fale Conosco', 'btn-white', '#', '#00529e', NULL, 1, '2024-09-19 14:57:08', '2024-09-19 15:03:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seguros`
--

CREATE TABLE `seguros` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `exibir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cor_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `seguros`
--

INSERT INTO `seguros` (`id`, `titulo`, `cor_titulo`, `descricao`, `exibir`, `imagem`, `video`, `titulo_link`, `cor_link`, `link`, `bg_cor`, `bg_imagem`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Proteja seu veículo com confiança e tranquilidade', '#ffffff', '<p><span style=\"color:hsl(0,0%,100%);\">Cobertura abrangente para o seu carro/moto, assistência 24h e reparos rápidos. Obtenha uma cotação gratuita agora!</span></p>', 'Sim', 'upload/proteja-seu-veiculo-com-confianca-e-tranquilidade-1726766222.png', NULL, 'Fale Conosco', 'btn-white', '#', '#f77d00', 'upload/proteja-seu-veiculo-com-confianca-e-tranquilidade-bg-1726766222.jpg', 1, '2024-09-19 17:17:02', '2024-09-19 17:18:53'),
(2, 'A segurança que você precisa para ir mais longe!', '#ffffff', '<div class=\"row mb-3\"><div class=\"col-lg-3\"><div class=\"col-seguro\"><h3>Roubo ou Furto</h3><p>Índice de roubo e furto não para de crescer, ter essa proteção é essencial.</p></div></div><div class=\"col-lg-3\"><div class=\"col-seguro\"><h3>Rastreamento 24 horas</h3><p>Controle total da localização do seu veículo na palma da mão, com opção de bloqueio.</p></div></div><div class=\"col-lg-3\"><div class=\"col-seguro\"><h3>Reboque 24 horas</h3><p>Se seu veículo parar, um reboque pode sair muito caro. Aqui você conta com até 2.000 Km de benefício.</p></div></div><div class=\"col-lg-3\"><div class=\"col-seguro\"><h3>Assistência 24 horas</h3><p>Não fique no prego, conte com assistência completa na hora dos imprevistos.</p></div></div></div>', 'Sim', NULL, NULL, 'Fale Conosco', 'btn-main', '#', '#000000', 'upload/a-seguranca-que-voce-precisa-para-ir-mais-longe-fundo-1726767125.jpg', 1, '2024-09-19 17:24:02', '2024-09-19 17:32:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EDGkj23yx8HmNl9tPmOoBLuXVDECtvmkrse5opwN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQUZ1S2pWWGJlaU0xczgzZUdmMmF0M2VFcjhRb1BmUGZIbldWUFNkdCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoxNjoiaHR0cDovL2F1YmEudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726769823);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `instagram`, `facebook`, `linkedin`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'Henrique Brandão', 'contato@agenciabm7.com.br', '2024-09-17 11:42:29', '$2y$12$YC6fI9RtyDLbTR6USOKGxuu/GUONmQA5NTrhNWZTIyGDMkrpidojq', 'cbroSrRGxt', NULL, NULL, NULL, NULL, NULL, '2024-09-17 11:42:29', '2024-09-17 11:42:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Índices de tabela `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bancos_id_user_foreign` (`id_user`);

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `consorcios`
--
ALTER TABLE `consorcios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consorcios_id_user_foreign` (`id_user`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homes_id_user_foreign` (`id_user`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `saudes`
--
ALTER TABLE `saudes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saudes_id_user_foreign` (`id_user`);

--
-- Índices de tabela `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seguros_id_user_foreign` (`id_user`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `consorcios`
--
ALTER TABLE `consorcios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `saudes`
--
ALTER TABLE `saudes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `seguros`
--
ALTER TABLE `seguros`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `bancos`
--
ALTER TABLE `bancos`
  ADD CONSTRAINT `bancos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `consorcios`
--
ALTER TABLE `consorcios`
  ADD CONSTRAINT `consorcios_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `homes`
--
ALTER TABLE `homes`
  ADD CONSTRAINT `homes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `saudes`
--
ALTER TABLE `saudes`
  ADD CONSTRAINT `saudes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `seguros`
--
ALTER TABLE `seguros`
  ADD CONSTRAINT `seguros_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
