-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jan-2018 às 23:21
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

--
-- Extraindo dados da tabela `elencos`
--

INSERT INTO `elencos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Paulla Sousa', NULL, NULL),
(2, 'Julia', NULL, NULL),
(3, 'Ricardo', '2017-12-21 22:26:17', '2017-12-21 22:26:17'),
(6, 'Amanda A', '2017-12-22 04:59:03', '2017-12-22 04:59:03'),
(7, 'Castro', '2017-12-22 05:00:29', '2017-12-22 05:00:29'),
(8, 'Norton Rodrigues', '2017-12-28 03:15:30', '2017-12-28 03:15:30');

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `ano_lancamento`, `sinopse`, `genero`, `duracao`, `created_at`, `updated_at`) VALUES
(1, 'A volta do Zero', 2018, 'ashuahushauha', 'Aventura', '02:00:00', NULL, '2017-12-22 11:56:03'),
(3, 'V de Vingança', 2017, 'Era uma vez..', 'Ação', '02:00:00', '2017-12-22 04:58:24', '2017-12-22 04:58:24'),
(4, 'Revenge', 2016, 'Era uma vez uma menina vingativa', 'Ação, Drama', '02:00:00', '2017-12-22 13:53:10', '2017-12-28 01:00:10'),
(5, 'ijenkcj', 2017, '5210fe', 'Zoeira', '02:00:00', '2017-12-28 02:57:17', '2017-12-28 02:57:17'),
(6, 'wqdwqswdqwqqq', 2018, '5522', 'Funny', '02:00:00', '2017-12-28 02:57:39', '2017-12-28 02:57:39'),
(7, '512055', 2018, 'Um trem que não voltou', 'Ação', '02:00:00', '2017-12-28 02:58:03', '2017-12-28 02:58:03');

--
-- Extraindo dados da tabela `elencos_filmes`
--

INSERT INTO `elencos_filmes` (`id_filme`, `id_elenco`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(3, 6, NULL, NULL),
(3, 7, NULL, NULL),
(3, 1, NULL, NULL),
(4, 1, NULL, NULL),
(4, 2, NULL, NULL),
(7, 8, NULL, NULL),
(7, 1, NULL, NULL);

--
-- Extraindo dados da tabela `sessoes`
--

INSERT INTO `sessoes` (`id`, `horario`, `lugares_disponiveis`, `lugares_ocupados`, `id_filme`, `created_at`, `updated_at`) VALUES
(1, '18:00:00', 20, 1, 3, NULL, '2017-12-28 00:57:35'),
(3, '16:00:00', 30, 1, 1, '2017-12-22 04:57:27', '2017-12-28 02:31:16'),
(5, '20:00:00', 0, 3, 4, '2017-12-28 03:14:33', '2017-12-28 04:07:03'),
(6, '18:00:00', 20, 0, 7, '2017-12-28 03:14:46', '2017-12-28 03:14:46'),
(7, '20:00:00', 50, 0, 6, '2017-12-28 03:14:59', '2017-12-28 03:14:59');

--
-- Extraindo dados da tabela `ingressos`
--

INSERT INTO `ingressos` (`id`, `id_sessao`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-12-27 20:28:09', '2017-12-27 20:28:09'),
(2, 1, '2017-12-27 20:30:11', '2017-12-27 20:30:11'),
(3, 1, '2017-12-27 20:30:43', '2017-12-27 20:30:43'),
(4, 1, '2017-12-27 20:31:23', '2017-12-27 20:31:23'),
(5, 1, '2017-12-28 00:57:35', '2017-12-28 00:57:35'),
(6, 3, '2017-12-28 00:57:38', '2017-12-28 00:57:38'),
(7, 3, '2017-12-28 00:57:41', '2017-12-28 00:57:41'),
(8, 3, '2017-12-28 02:31:15', '2017-12-28 02:31:15'),
(19, 5, '2017-12-28 04:06:59', '2017-12-28 04:06:59'),
(20, 5, '2017-12-28 04:07:01', '2017-12-28 04:07:01'),
(21, 5, '2017-12-28 04:07:03', '2017-12-28 04:07:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
