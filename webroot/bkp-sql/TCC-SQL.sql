-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Out-2023 às 21:20
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `user_id` int UNSIGNED DEFAULT NULL,
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `cep` int NOT NULL DEFAULT '8',
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `complement` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addr_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `addresses`
--

INSERT INTO `addresses` (`user_id`, `id`, `cep`, `street`, `number`, `complement`, `district`) VALUES
(16, 66, 8, 'av. beta', '07', 'casa 1', NULL),
(17, 67, 8, 'abagiba', '674', 'casa 1', NULL),
(18, 68, 8, 'gumercindo araujo', '302', 'casa 1', NULL),
(19, 69, 8, 'rua 01, quadra 35', '35b', 'casa 1', NULL),
(20, 70, 8, 'rua piauí', '23d', 'casa 1', NULL),
(21, 71, 8, 'rua leopoldina araãºjo', '380', 'casa 1', NULL),
(22, 72, 8, 'rua conceiã§ã£o', '101', 'casa 1', NULL),
(23, 73, 8, 'rua benedetto bonfilgi', '755', 'casa 1', NULL),
(24, 74, 8, 'rua sã£o francisco', '17', 'casa 1', NULL),
(25, 75, 8, 'rua dona zulmira', '479', 'casa 1', NULL),
(26, 76, 8, 'rua mampituba', '740', 'casa 1', NULL),
(27, 77, 8, 'dezeseis', '151', 'casa 1', NULL),
(28, 78, 8, 'rua dos goitacazes', '375', 'casa 1', NULL),
(29, 79, 8, 'av lucio jose de meneses', '930', 'casa 1', NULL),
(30, 80, 8, 'caetano', '3457', 'casa 1', NULL),
(31, 81, 8, 'um nova ', '335', 'casa 1', NULL),
(32, 82, 8, 'sres area especial', '19', 'casa 1', NULL),
(33, 83, 8, 'islandia', '99', 'casa 1', NULL),
(34, 84, 8, 'independência', '700', 'casa 1', NULL),
(35, 85, 8, 'sebastiã£o thomaz de oliveira', '25', 'casa 1', NULL),
(36, 86, 8, 'nogueira', '185', 'casa 1', NULL),
(37, 87, 8, 'tv londrina', '12', 'casa 1', NULL),
(38, 88, 8, 'teofilo otoni', '222', 'casa 1', NULL),
(39, 89, 8, 'joã£o rasmussen', '244', 'casa 1', NULL),
(40, 90, 8, 'travessa elizeu araãºjo', '46', 'casa 1', NULL),
(41, 91, 8, 'av. dr. joão pessoa', '185', 'casa 1', NULL),
(42, 92, 8, 'travessa brandão', '4', 'casa 1', NULL),
(43, 93, 8, 'coqueiros', 'SN', 'casa 1', NULL),
(44, 94, 8, 'estrada m boi mirim', '820', 'casa 1', NULL),
(45, 95, 8, 'travessa dos comerciarios ', '5', 'casa 1', NULL),
(46, 96, 8, 'dos jacarandas', '30', 'casa 1', NULL),
(47, 97, 8, 'dona ermelinda pereira', '413', 'casa 1', NULL),
(48, 98, 8, 'rua projetada 02', '742', 'casa 1', NULL),
(49, 99, 8, 'samambaia', '96', 'casa 1', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher_coordinator` varchar(255) DEFAULT NULL,
  `acronym` varchar(10) DEFAULT NULL COMMENT 'Sigla',
  `name` varchar(50) NOT NULL,
  `requisito` varchar(255) DEFAULT NULL,
  `carga_horaria` smallint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `teacher_coordinator`, `acronym`, `name`, `requisito`, `carga_horaria`) VALUES
(1, '', 'TRDC', 'Tecnologias em Redes de Computadores', '', 3200),
(3, '', 'LBIO', 'Licenciatura em Ciências Biológicas', '', NULL),
(4, '', 'LMAT', 'Licenciatura em Matemática', '', NULL),
(5, '', 'EAGRO', 'Engenharia Agronômica', '', NULL),
(6, '', 'EAGRI', 'Engenharia de Agrimensura e Cartográfica', '', NULL),
(7, '', 'EALI', 'Engenharia de Alimentos', '', NULL),
(8, '', 'TGAMB', 'Tecnologia em Gestão Ambiental', '', NULL),
(9, '', 'LEDCA', 'Licenciatura em Educação do Campo', '', NULL),
(10, '', 'LPED', 'Licenciatura em Pedagogia', '', NULL),
(11, '', 'LHIS', 'Licenciatura em História', '', NULL),
(12, '', 'EAMB', 'Engenharia Ambiental', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplines`
--

DROP TABLE IF EXISTS `disciplines`;
CREATE TABLE IF NOT EXISTS `disciplines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `teacher_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `workload` int DEFAULT NULL COMMENT 'carga horaria',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `room_id` int DEFAULT NULL COMMENT 'Numero da sala',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `disciplines`
--

INSERT INTO `disciplines` (`id`, `name`, `teacher_id`, `course_id`, `workload`, `created`, `modified`, `room_id`) VALUES
(1, 'Programação I', NULL, NULL, 80, '2023-06-28 15:07:20', '2023-06-28 18:07:56', NULL),
(3, 'Ética e Cidadania', NULL, NULL, 40, '2023-06-28 18:19:20', '2023-06-28 18:19:20', NULL),
(4, 'Fundamentos de Matemática', NULL, NULL, 120, '2023-06-28 18:19:31', '2023-06-28 18:19:31', NULL),
(5, 'Inglês', NULL, NULL, 80, '2023-06-28 18:19:44', '2023-06-28 18:19:44', NULL),
(6, 'Lógica de Programação', NULL, NULL, 40, '2023-06-28 18:19:55', '2023-06-28 18:19:55', NULL),
(7, 'Organização de Computadores', NULL, NULL, 40, '2023-06-28 18:20:05', '2023-07-10 20:47:09', NULL),
(11, 'Comunicação de Dados I', 29, 1, 40, '2023-07-13 20:33:55', '2023-07-13 20:33:55', NULL),
(13, 'Tópicos Especiais em Redes', NULL, 1, 40, '2023-08-20 17:06:19', '2023-08-20 17:06:19', NULL),
(14, 'Virtualização', NULL, 1, 40, '2023-08-20 17:06:35', '2023-08-20 17:06:35', NULL),
(15, 'Projeto Prático II', NULL, 1, 160, '2023-08-20 17:06:52', '2023-08-20 17:06:52', NULL),
(16, 'Legislação', NULL, 1, 40, '2023-08-20 17:07:03', '2023-08-20 17:07:03', NULL),
(17, 'Governança em Tecnologia da Informação', NULL, 1, 80, '2023-08-20 17:07:19', '2023-08-20 17:07:19', NULL),
(18, 'Gestão Sustentável da Inovação', NULL, 1, 40, '2023-08-20 17:07:31', '2023-08-20 17:07:31', NULL),
(19, 'Redes Sem Fio', NULL, 1, 80, '2023-08-20 17:07:45', '2023-08-20 17:07:45', NULL),
(20, 'Redes Ópticas', NULL, 1, 40, '2023-08-20 17:08:41', '2023-08-20 17:08:41', NULL),
(21, 'Projeto Prático I', NULL, 1, 80, '2023-08-20 17:09:01', '2023-08-20 17:09:01', NULL),
(22, 'Gerenciamento de Redes', NULL, 1, 80, '2023-08-20 17:09:16', '2023-08-20 17:09:16', NULL),
(23, 'Energia e Infraestrutura', NULL, 1, 40, '2023-08-20 17:09:37', '2023-08-20 17:09:37', NULL),
(24, 'Português Instrumental', 43, 1, 40, '2023-08-20 17:18:44', '2023-08-20 17:18:44', NULL),
(25, 'Ingles Instrumental e Técnico', NULL, NULL, 80, '2023-08-20 17:19:41', '2023-08-20 17:19:41', NULL),
(26, 'Administração de Servidores', 46, 1, 80, '2023-08-20 17:22:51', '2023-08-20 17:22:51', NULL),
(27, 'Eletromagnetismo', 47, 1, 60, '2023-08-20 17:24:15', '2023-08-20 17:24:15', NULL),
(28, 'Programação II', 49, 1, 80, '2023-08-20 17:26:10', '2023-08-20 17:26:10', NULL),
(29, 'Programação III', 49, 1, 80, '2023-08-20 17:26:22', '2023-08-20 17:26:22', NULL),
(30, 'Comunicação de Dados II', 29, 1, 80, '2023-08-20 15:02:47', '2023-08-20 18:02:47', NULL),
(31, 'Fundamentos de Sistemas Operacionais', NULL, NULL, 80, '2023-08-20 15:03:48', '2023-08-20 18:03:48', NULL),
(32, 'Introdução aos Sistemas Abertos', NULL, NULL, 80, '2023-08-20 15:04:31', '2023-08-20 18:04:31', NULL),
(33, 'Protocolos Básicos e de Applicações', NULL, NULL, 40, '2023-08-20 15:05:21', '2023-08-20 18:05:21', NULL),
(34, 'Banco de Dados', NULL, NULL, 40, '2023-08-20 15:06:39', '2023-08-20 18:06:39', NULL),
(35, 'Programação de Scripts', NULL, NULL, 80, '2023-08-20 15:06:39', '2023-08-20 18:06:39', NULL),
(36, 'Redes de Longa Distancia', NULL, NULL, 60, '2023-08-20 15:07:57', '2023-08-20 18:07:57', NULL),
(37, 'Redes Locais', NULL, NULL, 60, '2023-08-20 15:07:57', '2023-08-20 18:07:57', NULL),
(38, 'Cabeamento Estruturado', NULL, NULL, 60, '2023-08-20 15:09:11', '2023-08-20 18:09:11', NULL),
(39, 'Laboratório de Interconexões e Serviço', NULL, NULL, 80, '2023-08-20 15:09:11', '2023-08-20 18:09:11', NULL),
(40, 'Laboratorio de Redes Locais', NULL, NULL, 60, '2023-08-20 15:09:56', '2023-08-20 18:09:56', NULL),
(41, 'Metodologia Científica', NULL, NULL, 40, '2023-08-20 15:09:56', '2023-08-20 18:09:56', NULL),
(43, 'Auditoria e Segurança', NULL, NULL, 80, '2023-08-20 15:12:41', '2023-08-20 18:12:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disponibilities`
--

DROP TABLE IF EXISTS `disponibilities`;
CREATE TABLE IF NOT EXISTS `disponibilities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) DEFAULT '1',
  `teacher_id` int NOT NULL,
  `hour_id` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `07:00` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `hour_id` (`hour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Table of disponibilityes in hours';

-- --------------------------------------------------------

--
-- Estrutura da tabela `hours`
--

DROP TABLE IF EXISTS `hours`;
CREATE TABLE IF NOT EXISTS `hours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `shift_id` varchar(10) DEFAULT NULL COMMENT 'periodo ou turno das aulas',
  `hour_initial` time DEFAULT NULL,
  `hour_final` time DEFAULT NULL,
  `day_week` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `hours`
--

INSERT INTO `hours` (`id`, `description`, `shift_id`, `hour_initial`, `hour_final`, `day_week`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Aula1', 'vespertino', '07:00:00', '07:50:00', 'segunda-feira', 1, '2023-05-15 23:40:49', '2023-07-11 00:09:27'),
(2, 'Aula 2', 'vespertino', '07:50:00', '08:40:00', 'segunda-feira', 1, '2023-05-15 23:40:53', '2023-07-10 23:49:08'),
(3, 'Aula 3', 'vespertino', '09:00:00', '09:50:00', 'segunda-feira', 1, '2023-05-15 23:40:57', '2023-05-16 02:40:58'),
(4, 'Aula 4', 'vespertino', '09:50:00', '10:40:00', 'segunda-feira', 1, '2023-05-15 23:41:04', '2023-05-16 02:41:05'),
(5, 'Aula 1', 'vespertino', '07:00:00', '07:50:00', 'terca-feira', 1, '2023-05-15 20:00:34', '2023-05-16 02:40:32'),
(6, 'Aula 1', 'vespertino', '07:00:00', '07:50:00', 'quarta-feira', 1, '2023-05-15 20:28:06', '2023-05-16 02:39:56'),
(7, 'Aula 1', 'vespertino', '07:00:00', '07:50:00', 'quinta-feira', 1, '2023-05-15 20:28:19', '2023-05-16 02:40:00'),
(8, 'Aula 1', 'vespertino', '07:00:00', '07:50:00', 'sexta-feira', 1, '2023-05-15 20:28:31', '2023-05-16 02:40:03'),
(9, 'Aula 2', 'vespertino', '07:50:00', '08:40:00', 'sexta-feira', 1, '2023-05-15 20:41:34', '2023-05-16 02:40:06'),
(10, 'Aula 1', 'vespertino', '07:00:00', '07:50:00', 'sexta-feira', 1, '2023-05-15 20:41:35', '2023-05-16 02:40:09'),
(11, 'Aula 2', 'vespertino', '07:50:00', '08:40:00', 'sexta-feira', 1, '2023-05-16 02:23:03', '2023-05-16 05:23:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periods`
--

DROP TABLE IF EXISTS `periods`;
CREATE TABLE IF NOT EXISTS `periods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `period` int DEFAULT NULL,
  `bimester` int DEFAULT NULL,
  `semester` int DEFAULT NULL,
  `year` year DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `periods`
--

INSERT INTO `periods` (`id`, `period`, `bimester`, `semester`, `year`, `created`, `modified`) VALUES
(1, 1, 1, 1, 2018, '2023-07-10 22:05:33', '2023-07-10 22:05:33'),
(2, 1, 2, 1, 2018, '2023-07-10 22:07:05', '2023-07-10 22:15:42'),
(3, 2, 3, 2, 2018, '2023-07-10 22:07:18', '2023-07-10 22:16:14'),
(4, 1, 1, 3, 2019, '2023-07-10 22:07:35', '2023-07-10 22:16:24'),
(5, 1, 1, 1, 2020, '2023-07-10 22:07:58', '2023-07-10 22:14:09'),
(6, 1, 2, 1, 2020, '2023-07-10 22:08:16', '2023-07-10 22:14:22'),
(7, 2, 3, 2, 2020, '2023-07-10 22:11:37', '2023-07-10 22:14:41'),
(8, 2, 4, 2, 2020, '2023-07-10 22:15:05', '2023-07-10 22:15:05'),
(9, 1, 1, 1, 2023, '2023-07-10 22:17:31', '2023-07-10 22:17:31'),
(10, 3, 2, 1, 2023, '2023-07-10 22:17:42', '2023-08-20 17:37:10'),
(11, 2, 3, 2, 2023, '2023-07-10 22:18:04', '2023-07-10 22:18:04'),
(12, 4, 4, 2, 2023, '2023-07-10 22:18:30', '2023-08-20 17:37:36'),
(13, 6, 4, 2, 2023, '2023-08-20 17:38:10', '2023-08-20 17:38:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT CURRENT_TIMESTAMP /*!80023 INVISIBLE,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP /*!80023 INVISIBLE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `description`, `ativo`, `created`, `modified`) VALUES
(1, 'Administrador', 1, '2023-10-22 11:16:47', '2023-10-22 11:16:47'),
(2, 'Diretor', 1, '2023-10-22 11:17:06', '2023-10-22 11:17:06'),
(3, 'Professor', 1, '2023-10-22 11:19:23', '2023-10-22 11:19:23'),
(4, 'Usuario', 1, '2023-10-22 11:19:54', '2023-10-22 11:19:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tb de salas';

--
-- Extraindo dados da tabela `rooms`
--

INSERT INTO `rooms` (`id`, `location`, `name`, `created`, `modified`, `active`) VALUES
(1, 'Predio Principal', 'LAB INFO-01', '2023-06-26 17:42:53', '2023-06-28 20:54:02', 1),
(2, 'Predio Principal', 'LAB INFO-02', '2023-06-26 17:43:01', '2023-06-28 20:53:56', 1),
(3, 'Informática e Redes', 'LAB INFO-03', '2023-06-28 20:53:36', '2023-06-28 20:53:36', 1),
(4, 'Informática e Redes', 'LAB REDES', '2023-06-28 20:54:18', '2023-06-28 20:54:18', 1),
(5, 'Informática e Redes', 'LAB HARDWARE', '2023-06-28 20:54:33', '2023-06-28 20:54:33', 1),
(6, 'INFORMATICA', 'INFO-01', '2023-07-09 18:21:44', '2023-07-09 18:22:09', 1),
(7, 'INFORMATICA', 'INFO-02', '2023-07-09 18:22:41', '2023-07-09 18:22:41', 1),
(8, 'INFORMATICA', 'INFO-03', '2023-07-09 18:23:08', '2023-07-09 18:25:17', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sectors`
--

DROP TABLE IF EXISTS `sectors`;
CREATE TABLE IF NOT EXISTS `sectors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `sectors`
--

INSERT INTO `sectors` (`id`, `active`, `name`, `created`, `modified`) VALUES
(1, 1, 'Alimentação e Nutrição', '2023-07-09 17:30:31', '2023-07-09 17:30:31'),
(2, 1, 'Assessoria de Comunicação', '2023-07-09 17:30:44', '2023-07-09 17:30:44'),
(3, 1, 'Informática | Redes', '2023-07-11 19:26:43', '2023-07-11 19:27:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `shifts`
--

DROP TABLE IF EXISTS `shifts`;
CREATE TABLE IF NOT EXISTS `shifts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'nome do turno',
  `sunday` tinyint(1) DEFAULT NULL COMMENT 'domingo',
  `monday` tinyint(1) DEFAULT NULL COMMENT 'segunda',
  `tuesday` tinyint(1) DEFAULT NULL COMMENT 'Terça',
  `wednesday` tinyint(1) DEFAULT NULL COMMENT 'quarta',
  `thursday` tinyint(1) DEFAULT NULL COMMENT 'quinta',
  `friday` tinyint(1) DEFAULT NULL COMMENT 'sexta',
  `saturday` tinyint(1) DEFAULT NULL COMMENT 'sabado',
  `amount_lessions` int DEFAULT NULL COMMENT 'Quantidade de aulas',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela de turnos e periodos';

--
-- Extraindo dados da tabela `shifts`
--

INSERT INTO `shifts` (`id`, `name`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `amount_lessions`, `created`, `modified`) VALUES
(1, 'Matutino', 0, 1, 1, 1, 1, 1, 0, 5, '2023-07-05 11:20:17', '2023-07-05 16:08:05'),
(2, 'Vespertino', 0, 1, 1, 1, 1, 1, 0, 9, '2023-07-05 11:22:14', '2023-07-05 16:05:22'),
(3, 'Noturno', 0, 1, 1, 1, 1, 1, 0, 4, '2023-07-05 11:22:39', '2023-07-05 16:05:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qrcode` text,
  `hash` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `acronym` varchar(10) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `discipline_id` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL COMMENT 'titulo da graduação',
  `phone` varchar(14) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `teachers`
--

INSERT INTO `teachers` (`id`, `qrcode`, `hash`, `first_name`, `last_name`, `acronym`, `user_id`, `discipline_id`, `email`, `title`, `phone`, `active`, `created_at`, `updated_at`) VALUES
(37, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEn0lEQVR4nO3dW47jNhQA0XSQ/W958m8gBAheluTOOb/9sHumQIgySf38+fPnL7js76ffAP8LOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMK/5z88M/Pz9T7WPvYxLB+3a0dD9mvWlv/geu38dT/whbjGQWdUdAZBZ1ROJoHfBjccjx4eb62NcPY+lUf1pf269fdmhZk/wtbjGcUdEZBZxR0RmFyHvBh6yry5M774O3ypy6iB6cjg29jkPGMgs4o6IyCzihcnAdkTm6Xn9yIv/ehxe87zNV4RkFnFHRGQWcUfsM84EP2OcTWN5+sGvoFjGcUdEZBZxR0RuHiPODexWy2q/bkT/h4oaeu9F8ypTCeUdAZBZ1R0BmFyXlAdnDN1nKdp5YJDS75f+fxQVuMZxR0RkFnFHRG4ecl94tPDE4LntoQkJ2P9BTjGQWdUdAZBZ1ROJoHvOSUzacuk19y5/3eOqjBf2fjGQWdUdAZBZ1RmJwHDK6TObm2fedzxO6dDLqWPSBhzXhGQWcUdEZBZxS6zwOyS/sTgyvxv2IOkZ1iZDyjoDMKOqOgMwpH+4TvbVgdXKByb4Pu4B7jd35YMsh4RkFnFHRGQWcUuucH3LvlPXhA0OCl/Yl7JyA9tfHCeEZBZxR0RkFnFI7mAdkDdU8uZrdeaO1kdrL1zYPLdZ7al/DBeEZBZxR0RkFnFB77PCA7BP8ls4T/+ZFHxjMKOqOgMwo6ozD5/IDBVe0nq3cGb6bfW6e/du/kpacmK8YzCjqjoDMKOqPQrQsavALdWrZ/8kL3ljadvKvB180YzyjojILOKOiMwuS6oJfceh68TZ8t27/3NtaySYPxjILOKOiMgs4oXDw3dOubT27Tr3cRb3nJ3fN7n0MMHlC6xXhGQWcUdEZBZxQuPk948GfvPbBscKvB1tsYlG2PsD+At9MZBZ1R0BmFi/uEs+2s67exZXAqc2+f8Pqb156auxjPKOiMgs4o6IzC5OcBWwaXr6x/84fsQvjeLGFt8M/3eQBfRmcUdEZBZxQu7g84eRjv4Ffveere+uAkaXBrxZrxjILOKOiMgs4ovGVd0Id7a2zuGbx7/hV/7xbjGQWdUdAZBZ1RmHx+QHba/vpn1576LCH7hGNwvuW8IL6MzijojILOKLzl3NCtb753Xby29a7uTWUGNwZnjGcUdEZBZxR0RuHi84QHbT3m995W2JOnGtw742jw9NZ7jGcUdEZBZxR0RuHi84RPPHXoZvYMsuwU1a3f7NxQvpvOKOiMgs4oTM4DPtxbGLPl5Mo3e/ru1gs9dSCSc0N5O51R0BkFnVG4OA+452TP7b1lMyczjPVXB1c6DT5OeYvxjILOKOiMgs4ofOU8YO3elf7JpX12AtLWb7Y/gF9FZxR0RkFnFC7OA546uH/tqWOLTt7G+mfvvQ3rgvgyOqOgMwo6ozA5D3jqiMqn9r6evI1sEVG2hmrNeEZBZxR0RkFnFCafJwz/xXhGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRG4V+i1u+fvYGBbAAAAABJRU5ErkJggg==\" alt=\"QR Code\" />', '5db743d734e8cb752821273ab87e15727a4c235f75db0ee15850440ef5d8494f', 'Helder Palmieri', 'Luiz Palmieri', 'hlpc', NULL, 23, 'helder@infs.edu.br', 'Especialista', '17323739', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(38, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEoElEQVR4nO3dwY7rKBRF0U6r//+Xq+cZ8GTB3bbrrTWtxLZSRwgMXD4/Pz//wLB/734A/gpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKPy38+XP53PqOdbWmxi+HmNnx8POpe76NR7yX1jTnlGQMwpyRkHOKGyNA74c3HK87tte6vnudJN3vrvTW9/5JbP/wiXaMwpyRkHOKMgZhZPjgC9zPd91F3t930tTC3PfvTTxkM1SzBWP0p5RkDMKckZBzigMjgPm7PS4L11q58Pr714aFvyC2q7aMwpyRkHOKMgZhVeOA3benh/cTLC28xg70xLPpD2jIGcU5IyCnFEYHAfc1cVeO9gfX195Z1ri4E7ghwwatGcU5IyCnFGQMwonxwFZ4ZodB1/T78w0zNX8eeZ/QXtGQc4oyBkFOaOwNQ64613zpS72jp35gGx50kPe+K9pzyjIGQU5oyBnFD4Hq+3vmHs/vrP0fq5u6NwhB9mUxiXaMwpyRkHOKMgZhZPjgGf2bQ8+xsFLPeTwr+yH1Z5RkDMKckZBzigM7g/Y6fnO9ce/HCzcP9enznYRmw/g3eSMgpxRkDMKW/MB39caOxtrbpnQzo0OrjjK5j/uKj2kPaMgZxTkjIKcUbhtf8BdGwLm6oauH2PtjfMfl2jPKMgZBTmjIGcUTs4H/OFO587GekUZn7mphUuX+mI+gN9MzijIGQU5ozC4T/iuhfmXbnTpUmt3vWq/60aXaM8oyBkFOaMgZxROnh8wdzbvl50bHTzta64i6cH7PqQQk/aMgpxRkDMKckbhKfsD1lc+OB/wzPMDspmVnYfcoT2jIGcU5IyCnFE4WTd0p0M61xG+9OE3nogwN0owH8DLyBkFOaMgZxQG9wlnxT4P3ndu9c7aXUehZZsJtGcU5IyCnFGQMwqD5wes3bUw5iH7orNLrR3ctLGmPaMgZxTkjIKcUejGAW8szZ91kx9Sr3SO9oyCnFGQMwpyRmFwn/BDeutzWw0uPcbaMwdJ9gfwMnJGQc4oyBmFwfMD1h/+8sbTvnZu9MwdAOoF8W5yRkHOKMgZhZP1gtZ2qvpc6q1npYfW97304bnzEuwT5i8iZxTkjIKcUejGAV8OltV8RYGgg4esHfyw8wP4VeSMgpxRkDMKg3VD52RvsS/d9656QWvZIc9r2jMKckZBzijIGYWt+YCDJwSs3VXk5+AxW3Njl50rqxfEryJnFOSMgpxR6M4TvmRuFf/B1TsH5wMOfnht7odd055RkDMKckZBzigM7g+YW3MyNw9xqQO+06d+SIHSjPaMgpxRkDMKckbhtn3CBx18a7++8iUHe+sH9yev/2o+gHeTMwpyRkHOKPyGccClzuzBN/7rK+/McNy1xEi9IN5NzijIGQU5ozA4DsiWoGSleOYKhR7c8bBTVNV8AO8mZxTkjIKcUTg5DsjKBx2871wd/4PTEjsOFhndoT2jIGcU5IyCnFF45fkBvI72jIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCv8DB2AZtDEIpBcAAAAASUVORK5CYII=\" alt=\"QR Code\" />', '4c67bf022ab3d8d92b6cf93a6014d2cfbc6bc7b3c31b7060df777b774517c552', 'Mateus Guedes', 'Guedes Vilas Boas', 'mgvb', NULL, 15, 'Mateus@ifs.com', 'Doutor', '544722760', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(39, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEiUlEQVR4nO3dQW6cMABA0U7V+1853bOwZNn+wOS9bSZAmy8LDxg+Pz8/f+Cwv3cfAL+CzijojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IzCv5Vf/nw+u45jbLyI4XIY51Y8TO1o/OGVn453dM7Kf6zxjILOKOiMgs4oLM0DLjaegI/PbafOfMcfHp+AT235sqmVLa9MC7K/whTjGQWdUdAZBZ1R2DkPuFg585368GVHUyf+KzZeD5iaUkw591eYYjyjoDMKOqOgMwoH5wHnbPyKf+Ur75XD+G2PazWeUdAZBZ1R0BmFV84Dzt2Yv9HUYUx54xzCeEZBZxR0RkFnFA7OAx6yXvdi43rdlfUBU8f8BZMG4xkFnVHQGQWdUdg5D8geXLPi3In/xjP9bEFAxnhGQWcUdEZBZxQ+D/m+OLPxdp2p31358BcwnlHQGQWdUdAZhae8P2Dj7fPjLV9svAAw3u/G+cczL2mMGc8o6IyCzijojMLB9wdsfOvW+MPjw5j66bnXe2XTginZtMB4RkFnFHRGQWcUlu4LOndzy11ftW/83YuV/6tsXcLUUU0xnlHQGQWdUdAZhYPrA5659vWZ1wPGB5l92PUA3k1nFHRGQWcUunXC5x5+md0vf9dBTm1q/OGL7K9vPKOgMwo6o6AzCjvvC3rmt+fnTu0vsoN8yNWCKcYzCjqjoDMKOqPQzQMyG7/j3ni2Pt7y+HdfMQ0aM55R0BkFnVHQGYWD7xO+yN66ld3zfu6dwOfmH2OuB/BuOqOgMwo6o9A9L2jjh8ey5/ZM/W7mmQdpPKOgMwo6o6AzCu94n/C591tt3NFd90FdrExlVrY8ZjyjoDMKOqOgMwoHrwdc3PUYn42yt+9evGIl8JjxjILOKOiMgs4oLK0PeOOK3LseQTre0dhdjzyyTpiX0RkFnVHQGYWnPDd0asvjD4+dW5A8Jfte/iHLBYxnFHRGQWcUdEbhtvuCVnaUPUB/6jCmPpzd+JQtwB4znlHQGQWdUdAZhYPXA6Z+d0V2f86UjTfzZHOXc4xnFHRGQWcUdEbh4PsDsmd/rjyaf2W/U+fU2fWAu949MGY8o6AzCjqjoDMKB+cBK+e2U2fc2TfvF9n6gPGOpn7qegDfTGcUdEZBZxTe8f6Ai4ec246de7jQXUudrQ/g6XRGQWcUdEZh6XpA9hz/jStyV7Y8JVu1sHHL7gvi3XRGQWcUdEZh531Br3ja5UNW1W7c0cZlCucYzyjojILOKOiMwlPWCd/1rKHxYWy80rDxksa5VcTnGM8o6IyCzijojMLBecBD3PX8zo3ToI2TpOz9ZRfGMwo6o6AzCjqj8A3zgHNn6+deHDaWve0rmxYYzyjojILOKOiMQvfc0HMeslB25Z6i7Et864T5ZjqjoDMKOqOwcx6QLTq9WDlN3ngtYbwg4NzJ+8q/d2VTU4xnFHRGQWcUdEbhle8P4HWMZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxT+A2l+IqhVYgT7AAAAAElFTkSuQmCC\" alt=\"QR Code\" />', '012bd5d6a2ec2d99e5576b66044a3ae3dba3e98d333767cf339bc7f87d5ec387', 'Kleber Marcelo', 'Da Silva Rezende', 'cmsr', NULL, 11, 'kleber@ifs.com', 'Mestre', '1984846393', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(40, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEjElEQVR4nO3dy27bOABA0cmg///L6V4LAgTJS9k9Z9skdpMLQrL4+Pn9/f0PDvv/9hvgn6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqOgMwo6o/Bn5Zt/fn52vY+x8SKGx9s4t+Jh/P99vO7Uu5r6TY5f6JyVX6zxjILOKOiMgs4oLN0HPGy8AB9f205d+a5cvI+/ePxC5754LPsrTDGeUdAZBZ1R0BmFnfcBD+euXscX7yvX8mPnLt7PfaZ/6x7iwXhGQWcUdEZBZxQO3gecs/Ej/nMTcqamCWVTm24xnlHQGQWdUdAZhY+8D1iZcrNyxb1x5s/Uvz584l2C8YyCzijojILOKBy8D8jW626cU7Txbaw8ltj4Jl9y02A8o6AzCjqjoDMKO+8Dso1rVmz8mH7lScO5PX/e+VcwnlHQGQWdUdAZhZ+XfF6cOTcTf+Mq4u/7oxjPKOiMgs4o6IzC0n3Axo+ez30+vnFx70Yr6xLGPyp7pDHFeEZBZxR0RkFnFHY+D3jJNvfZzqAbf1R2bsHU6069jTHjGQWdUdAZBZ1R6NYJ39pP/yOOBtt4lzD1xdkEJOMZBZ1R0BkFnVF4yzliDyvXxbfOETu3QenDrZ1QVxjPKOiMgs4o6IzCtXXC7zzAa6OXXK2/ZEGy8YyCzijojILOKFxbH/CQLRfIVgBsvP/Y+L0P1gfwVXRGQWcUdEZhaV7QuYvZc59ib/wg/tz5AeeOF84mAj0YzyjojILOKOiMQvc84J3zZM5tujnl1lSfbNaQ8YyCzijojILOKOx8HnBug6BsRe653faz+55zs4bMC+LtdEZBZxR0RuHgOWLn5pzcOhN44+ydbJn0mPUBfBWdUdAZBZ1ROLhv6Nita+rxj3o4d5mc3WGsvKuNjGcUdEZBZxR0RmHnfcDKJJONc2xWPi4/t7nQw9Qy6fG7urX0d4rxjILOKOiMgs4odOeIrVyAT73QORtfaOPV+saziMffa14Qb6czCjqjoDMK3bygc88DHjZ+b3a6wJSNs4ayWyjjGQWdUdAZBZ1R2LlO+NZ63bGNKwCmfvL4hbKNiaZYH8Bn0xkFnVHQGYVuXtCUWzvkZFufnttG9Nx+QSuMZxR0RkFnFHRG4drzgOwKNDsLbPy6K879rpwnzFfRGQWdUdAZhZ3nCWc2zqI55yUX79nCizHjGQWdUdAZBZ1R2Hme8Dm3Djs7txf/xl/dS670x4xnFHRGQWcUdEahOz9gSnY279TrTnnn8ohz86DGjGcUdEZBZxR0RuEt64Rfstb31p6j2XkJtyZNGc8o6IyCzijojEJ3fkDm3J6j79ywc+MeR+YF8dl0RkFnFHRG4RvuAzaeq/Vwa0HyuS1Ib/2PjGcUdEZBZxR0RuHgfUA25yTb5X/lSUM25X/qiz0P4KvojILOKOiMws77gGzR6UM2qWbjRfTUDcc5ngfwVXRGQWcUdEbhI88P4OMYzyjojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IyCzij8BVbn3bpR3tdwAAAAAElFTkSuQmCC\" alt=\"QR Code\" />', '08902305979f4e6f77acd06dbd29e86765cbfc862968618e45fd851f43def5a4', 'Mark Pereira', 'Pereira dos Anjos', 'mpda', NULL, 3, 'ihane@yahoo.com', 'Mestre', '165363701', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(41, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEi0lEQVR4nO3dQW7jOBRAwcmg73/l9N4LAgL5nyR31XYcx9N5IChZJH9+f3//g2H/3/0B+CfojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IyCzijojILOKOiMgs4o6IyCzij82fnhn5+fU59j7WMRw87vvfRW68UTB39258V3/RUuMZ5R0BkFnVHQGYWt64APB5cc70yx12918J13Ju/rufzOv2T2V7jEeEZBZxR0RkFnFE5eB3y4NIvcmb1emkSvJ+APuUo4KPsrrBnPKOiMgs4o6IzC4HVAZu45mZ13Pjin/oK9XY1nFHRGQWcUdEbhG64DLpm7ET93OZJ9eTDHeEZBZxR0RkFnFAavA7Lp6qVltAcf6l/buSx45nKBHcYzCjqjoDMKOqNw8jog27hmZ+K/M8U++M5znzn7K1xiPKOgMwo6o6AzCj8PuV98ydxmn2s7Fw07b/UFjGcUdEZBZxR0RmHw/ICdnfp3Nt28JHt6J9sRaG7fUOcH8HQ6o6AzCjqj0J0fcPCy4NKLd57x/zB3ntfctxQ7n/ngJYXxjILOKOiMgs4odOcHzD1Uc3Al8CUHL2XWDh5rfNe/lfGMgs4o6IyCzihsXQdkS2HXp30dPN5r/eK5U8bmzjxYyxYVG88o6IyCzijojMLgOuE3nue1884HrxLmbvEf/L2XGM8o6IyCzijojMLJdcJz9+UPPoFzcAVy9ozN3Nan6190kPGMgs4o6IyCzijctm/owTvv2dLfu3YknTvz4OAvWjOeUdAZBZ1R0BmF7hyxhxzGO/df73ogZ26fIuuEeRmdUdAZBZ1R2Po+4CEb5nyYO05g7ouH9Ys/ZOcnH2Q8o6AzCjqjoDMKD9039NJb3TURnttsJ/sCIDtOwHhGQWcUdEZBZxQG9w3dsXNU70NOzlp7yE18+4byVXRGQWcUdEbh5HNBz5xEf3jIjHture+lt7rE9wE8nc4o6IyCzijctk74ITfE17JNje7agvTgO68ZzyjojILOKOiMwuD6gJ158cEHgT5c2iHn0qfK1ifP7Z40x3hGQWcUdEZBZxQGnwvKFvfO3bU/eHDxM/dWWrNvKC+jMwo6o6AzCt36gLk5dTaJPnj3/OCahp0Xr3/2IOMZBZ1R0BkFnVEYXB+w8+RPdpDvJa9Y3HtwQyTfB/AyOqOgMwo6o7D1fcBdssd1dt7qrqekdj7VB+uEeRmdUdAZBZ1RGDxP+KDsMaG5ZbRzDy89ZKa/ZjyjoDMKOqOgMwonnwt6yFG92cz30oz7rrUUa9nurcYzCjqjoDMKOqMwuG/o3GR2bqZ/1xcAB1cAXOL7AL6KzijojILOKAxeB2Tu2hM/27Zo7oC29YutD+BldEZBZxR0RuGV1wHZ1pjZRj1z9+V3LlY8F8TL6IyCzijojEJ3nvBB2cFhd53JdfCe/l1PHH0wnlHQGQWdUdAZhcHzA15h54b4wf/fh/yiOcYzCjqjoDMKOqPwyvMDeB3jGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGYW/FVL1q1Pm2CcAAAAASUVORK5CYII=\" alt=\"QR Code\" />', 'd093268c3a611582d37b5dafe505fdd401f3b6be4a3e7a9adb1029aaa3de4a8e', 'Filipe Mendonça', 'Mendonça Lope', 'fmdç', NULL, 4, 'eliza.dicki@gmail.com', 'Mestre', '1401873708', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(42, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEtUlEQVR4nO3dy47kOBJFwclB//8vV++1IEDQeaSsNltHSMqMCwcpvn7+/PnzP7js/28/AP8JckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzij8c/Lln5+fqedYeyxiOLnv1qXWiyce39368OCN3voVtqhnFOSMgpxRkDMKR/2Ah8Elxyet5vWlBtvUWXt86+/NfoUt6hkFOaMgZxTkjMJkP+DhpE19cqP1pdaN95PRgpPxgK0/YUv2K6ypZxTkjIKcUZAzChf7AZnB9/JbDf97jfe/j3pGQc4oyBkFOaPwN/QDtrz15v2ks/IXdDjUMwpyRkHOKMgZhYv9gKy5ujW3594EpJMb3Xvmj3Qa1DMKckZBzijIGYXJfkC2cc1JezzrNDxkT5X9ClvUMwpyRkHOKMgZhZ+PvC/eMrgH5/q7J92Ce1se/cafTD2jIGcU5IyCnFG4eH7Ayd4765bvW8cJPGQzjgaPMRh8qi3qGQU5oyBnFOSMwtF4wOBu+/dO7Bp8if8wePbA4GOsL/XWlkfqGQU5oyBnFOSMQrdOeHCS+72zee+NNGw9xvpS65PRtr47eLrymnpGQc4oyBkFOaMwuT5g8EV81j49cW+pwb3+x8mN9AP4OjmjIGcU5IzC5PqAtxr+91bkrr01l2nwoLTB8Y819YyCnFGQMwpyRuHieMCWe32IrIeRNbHfOvvshHpGQc4oyBkFOaPQ9QPurYy9t2/P+r4nl1obXPq7deV71DMKckZBzijIGYXX1gmvP/ww+DL93lymh48svNi68pr1AXydnFGQMwpyRmGyHzA4E+Zew//kRvd26Ly3A9JHul/qGQU5oyBnFOSMQrdOeGvzy5MPrw22fO8tCMiW79678oN6RkHOKMgZBTmjMDke8M0tgAYfY7D/cW/wYPC+g9QzCnJGQc4oyBmF184P+I17jr71zGtZS9/6AL5OzijIGQU5o/Da+oBv7nKz9VT3FtkODgCcPMYg9YyCnFGQMwpyRuFoPOAjAwBbPnLIwcl3B//t93YielDPKMgZBTmjIGcULu4berLmduvD3zz8KzvHeP0nnCzeXn94i3pGQc4oyBkFOaPQnR/wcPJSe+tS67W+J+4tZh680VsLAh7UMwpyRkHOKMgZhYv7BT3cO0/4LScdjnvbl669NR1LPaMgZxTkjIKcUZjcLyhz7/CvrUu9dcxvNuNokHpGQc4oyBkFOaMwuU74nnst3/WNBrc8GnTvpOJ7PRv1jIKcUZAzCnJG4eK+oSc+MjHm3vvxwZ7NW8eZbVHPKMgZBTmjIGcUvrJf0Fvt4q0rb93o3lEEgwMP2aww9YyCnFGQMwpyRuFiPyBzb8OctbeOCF5/eG3rUuYF8cvIGQU5oyBnFH5lP+Bk+sq987y2DA4PbN3oZJTCvCC+Ts4oyBkFOaPw2vkBJ05mtQ/OiD/5AwePCB5czHxv7EQ9oyBnFOSMgpxR6M4PuOfktfXgCWWD7s0pemubWPWMgpxRkDMKckbhV54fwK+jnlGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRuFfKzvszHL2+J0AAAAASUVORK5CYII=\" alt=\"QR Code\" />', '5d1cbb6c71ea7487221ba3c19152619e7aa0cace50f1cbe7685146dce28b1d64', 'Agnaldo Alves', 'Alves Pinto', 'agap', NULL, 7, 'graham.desmond@bartoletti.com', 'Mestre', '2064833321', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(43, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEhklEQVR4nO3dy46kOBRF0c5W//8vV88ZWLLw3UDWWtNKCKLi6MrGr58/f/78A8P+ffoB+CvIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5o/DfnYt/fn5OPcfaZRHDnc/dutV68cTl2q0/PvhBT/0KW9QzCnJGQc4oyBmFW/2Ai4NLju+0mte3OthqfmfjPfsVtqhnFOSMgpxRkDMKJ/sBF1utyDut16338lvt8YNv/A9+0JbsV1hTzyjIGQU5oyBnFAb7AZm5V+1zk4juPMYXqWcU5IyCnFGQMwq/oR+w5ak373c6K3PPnFHPKMgZBTmjIGcUBvsBWXN1ayb+1r9eHFw2vHbwVi/pNKhnFOSMgpxRkDMKJ/sB2cY1cw3/g52Gi+xzs19hi3pGQc4oyBkFOaNwqx/wknfNWfN87eC1W17yK6ypZxTkjIKcUZAzCoPnB9xZZLtuns8dJ7D1xwe//tb33br2joN3Vs8oyBkFOaMgZxR+3tlsvPNBc/P0L7KDw9bmjjE4+AuqZxTkjIKcUZAzCoP9gLWXnOt7sBGd7Rs6NwxzYTyAj5EzCnJGQc4ovHTf0DvThLbufNDc1kMH39pnxxpfqGcU5IyCnFGQMwqPjQdkntq/MxulWLuzMdH6VlvUMwpyRkHOKMgZhW6d8PrarJk811nJJhEdvNb6AH4VOaMgZxTkjMLJ8YA7nprGPrfX0FMLArYeI/v11TMKckZBzijIGYWuH/DUKuL1Y7zz2rlBi7m9ldbUMwpyRkHOKMgZhcfWCa8bpFmree51+dxEoJf88Rb1jIKcUZAzCnJGoesHzDU552bRPLXU4ODi3otsAOBCPaMgZxTkjIKcUfjkecLZEV3rOx9snl9kOy/ZN5RfRc4oyBkFOaPwyfOEtx7j4qnDh9ePsb5Vtkx67j9HPaMgZxTkjIKcUTg5HvCSY28zBz/3Tnv8zijFncPOtqhnFOSMgpxRkDMKJ9cHHJwnM3dE8MEp/0+d9rXlJYM06hkFOaMgZxTkjMKteUFzbcwvLsHNzi14inlBvJ2cUZAzCnJGYXC/oKdmDc1t8nNwJfBTO5Ie/Apb1DMKckZBzijIGYWT4wEX2RZAa9n8nC8ucXB+AL+KnFGQMwpyRqE7T/igueOF1+Ze4s/t25N9wTX1jIKcUZAzCnJGYXA84KBs6v3B5vk7lzhkAwAX6hkFOaMgZxTkjMLJ9QEvWSd88GX6U5tuPvUS3/kBfJucUZAzCnJGoVsnvPaS068OHgI8N3hwcKQhmxWmnlGQMwpyRkHOKAz2A15ibn7O3Lygg8uVnSPGX0TOKMgZBTmj8Ml+wFO7/N9pF89NuVnb2kXVvCC+Tc4oyBkFOaMw2A/I2rZzc4ruPNXa3AEJd66dGztRzyjIGQU5oyBnFE72A754Ru7BiflzoxR3PjcbeFhTzyjIGQU5oyBnFD55fgCfo55RkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckbhf0lm1MnLxtn5AAAAAElFTkSuQmCC\" alt=\"QR Code\" />', '3e6c2c88d8a2a5c51ee05ff29102251b51eee11948e4c4ed576c179867da34e1', 'Davi Vieira', 'Vieira Medeiros', 'dvms', NULL, NULL, 'elijah.vonrueden@swift.com', 'Mestre', '377670501', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(44, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEmElEQVR4nO3dwW7sKBRF0U6r//+XX889QELANs5baxqX7SRHCAou/Pz58+cfOOzft1+Av4KcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCv+tfPjn52fXe4yNixger7FS8bByq7f+Gpf8F8a0ZxTkjIKcUZAzCkvjgIeNJcfjvu1Uz3elm7zy2XFv/dwII/svTNGeUZAzCnJGQc4o7BwHPJzrvY672OPnrkwtTP106uLxS26c4Rg7t3mU9oyCnFGQMwpyRuHgOOCcqU701NTCxs+uXPz7aM8oyBkFOaMgZxQ+OQ7IvtPfuHpn46L+L44htGcU5IyCnFGQMwoHxwHnuqsrvfXxxW+t3hnf+ZJbrdCeUZAzCnJGQc4o7BwHZBvXrNg4W3DJnccXX0J7RkHOKMgZBTmj8HPJ98WZjX3qlcmDlWLmL9KeUZAzCnJGQc4o3HJ+wLk98TeW764UE2SHHLxVHjGmPaMgZxTkjIKcUdg5H7CxyHZlWHBJF3vqrVZ+wU+cTKA9oyBnFOSMgpxR2DkfsLHzvnE+IHuNjeOe7LMPzg/g2+SMgpxRkDMKr+0XtLKaPjtHbOqz41tle50+jDc1yoqKtWcU5IyCnFGQMwoH64Sz/ni2Xn5KtvR+7JKCZO0ZBTmjIGcU5IzCwTrht5YJZYWy52610crcyfhWU7RnFOSMgpxRkDMKt9QJj2/1cGeh7FvbB935Gg/aMwpyRkHOKMgZhYPjgBXZavpLlvw/ZHMYY/YN5WPkjIKcUZAzCt1+QSsn6J5zbsPOqaMINj734ZLlSdozCnJGQc4oyBmFg/sFjZ1bgrKxA/5wrqh4yrlzjB82rhrSnlGQMwpyRkHOKHT1AXcePnzuVg9ZffL44jH1AXybnFGQMwpyRuHguqAVK7fKNuxcWSaUfS8/NUo4t8mo9oyCnFGQMwpyRuHguqCV79bfqi14a5PRlYvHnB/AX0TOKMgZBTmjsLQu6M6TwqZuNb74IXuNjS5ZNaQ9oyBnFOSMgpxR2DkO+MSBAVPPHb/GyoOyY5ydH8BfRM4oyBkFOaPw2n5BYysLgc7NQ0zZ+M5TD1r59dUH8G1yRkHOKMgZhW/UBzxk+wWtrPzZWGqwUlQ8fsnxZ50jxsfIGQU5oyBnFHbuG5rJVrNMeaviYeqtVkYY5gO4nZxRkDMKckbhYJ3wRtlRBA9vLeofe2tIsUJ7RkHOKMgZBTmjsHNd0LkjyVYedO7UrakHZXsrTVEnzK8iZxTkjIKcUbilPuBc137KuPOeHYl8brDy1hoq7RkFOaMgZxTkjMKl+wVtdG5F/MbS36w+YPxT8wF8m5xRkDMKckbhF44Dxn3bjTuSnjvVYOO0xPg1zv0KD9ozCnJGQc4oyBmFg+OAS7bxeTi3I+nGzT43bkG68tyNtGcU5IyCnFGQMwo7xwHZ9kEbn3uui72yemfjgQHji80H8KvIGQU5oyBnFD55fgCfoz2jIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IzC/7rb+My0KBHVAAAAAElFTkSuQmCC\" alt=\"QR Code\" />', '735014e0cb04741f2d27a591154359972faf471b223bde9fed9808ef1e77036e', 'Giulianno Silva', 'Loghan Silva Lima Marques', 'glslm', NULL, 5, 'scarlett.lehner@yahoo.com', 'Mestre', '176040445', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(45, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEpklEQVR4nO3dS67sKBRFwbqlmv+UX/XdQELAMr4vop3+ZOYWApsDP3/+/PkHDvv37RvgryBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMwn8rB//8/Oy6j7GpIobHXa0UQIy/4OPMUx/OrrvRyi+pPaMgZxTkjIKcUVgaBzxsLDke92039nynBg3jDvi5wcrUmbN/YYr2jIKcUZAzCnJGYec44GGqF7nSe9147Lh7PvWNxqfKlmnK/oUx7RkFOaMgZxTkjMLBccA5K8/lp7rnK2eeum42t+ct2jMKckZBzijIGYVPjgNWetzZh1eqB37fsEB7RkHOKMgZBTmjcHAckE19WelEn+utbxxhrBQiXLJPnPaMgpxRkDMKckZh5zjg9z3FXqke2NiXn3Lnv6A9oyBnFOSMgpxR+LnkefGUlbn2G1f12Vg9MPbF/+hBe0ZBzijIGQU5o7A0DliZRbPSa964Fv/Umc8NC7IRxrkx05j2jIKcUZAzCnJG4dI64WyUMD7zxg74ueHI1LErF7KPGLeTMwpyRkHOKBzcR2zjSpkbt9laOXaq17xxs4GVOUXZ5KUx7RkFOaMgZxTkjEJXH7CxyPacSyoAsuk6Y94H8DFyRkHOKMgZhYPjgJVe5LlBw8Ye9yUT88/VJazc1YP2jIKcUZAzCnJGYWle0Lm9eTeu1J9tCbBxptNYVpew8TWM9oyCnFGQMwpyRmHn+4BLVrmZOtXDWz39cysvTV1ofN0V2jMKckZBzijIGYWD64ZOObfIT1Z5kF33ksVNp2jPKMgZBTmjIGcUluYFndtQd+Pbgrdu8twqRufmBVkviG+TMwpyRkHOKBysDzj36Hm8QudbRbZTF3qY+ununNo0pj2jIGcU5IyCnFG4pT7gkqf2G2fCjG/j3GBlfOwK84K4nZxRkDMKckbhG/sJZ0vzP2y8bjZ5aeNKqN4H8DFyRkHOKMgZhdf2D7hk8f2xt5bmf2vrhalTTdGeUZAzCnJGQc4odO8DNvZPpy70MHXmjUOKbB+xO2nPKMgZBTmjIGcUDq4bmq1Ieskc/zvfUoyPneJ9ALeTMwpyRkHOKHR1wufmrV/yLuHcc/ls9s65oYz2jIKcUZAzCnJGYef7gKwHmpXCXlKR+9YIYyPtGQU5oyBnFOSMwsE64XPeWiI/W7YoKxsef3h8V1O0ZxTkjIKcUZAzCjv3ETtnY3HvuQny5+oSxi7p6Y9pzyjIGQU5oyBnFHauF3Su1GB8oTsn9U91z7NXGvYP4DeTMwpyRkHOKBxcN/RcZ3bqVNkc/6ljx6ca32T2Gsb+AXyMnFGQMwpyRuHS/YTHNi4fdK63Pj52fBvntiR7i/aMgpxRkDMKckbhk+OAt8poVx6Irzzif2tS/0baMwpyRkHOKMgZhYPjgHP906ln3OdGCSu38bDxIf7K91UnzLfJGQU5oyBnFA7uJ7zRubkul6zQ+dZmA9lWzNozCnJGQc4oyBmFT+4fwOdozyjIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5o/A/XwMWqGjWfK0AAAAASUVORK5CYII=\" alt=\"QR Code\" />', '89ce605a4bf402fc5994e30561d5ff9eabce81088e2af18e9315e99d0da32751', 'Roberta Bonamichi', 'Bonamichi', 'robmc', NULL, 1, 'mthiel@beier.com', 'Mestra', '2091142148', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(46, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEpklEQVR4nO3dy44jKRRF0Xar/v+Xs+YxQELADpy11tQZDzmPEBgufH5+fv6Dw/5/+wX4J8gZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmj8Gfl4s/ns+s9xsZFDI/XWKl4yG618un4QeesfBvaMwpyRkHOKMgZhaVxwMPGkuNx33aq5zv+48c7b+ytj7+NqU+nhgXZf2GK9oyCnFGQMwpyRmHnOOBhqhc51Xsdd5OnOv4rVgYNU3feOC0x9dyNtGcU5IyCnFGQMwoHxwHnTPX0p6YWpqYHxs8dWxklfCPtGQU5oyBnFOSMwleOA1bKBTYOC8bXPmycPPjGIx+0ZxTkjIKcUZAzCgfHAee6qyvVvFN/vNIfP/fplEsGDdozCnJGQc4oyBmFneOAr1jcsnEbn7eee8n2QVO0ZxTkjIKcUZAzCkvjgLd+a85+TJ+yMtOwsaj4TtozCnJGQc4oyBmFT7YXzdi5utmsIveSQw6yiYcp2jMKckZBzijIGYWD44CNta9f8fv4xm9jo4011c4R43ZyRkHOKMgZhaVxwPNeL22Yc26NzZ0nFa/c+a0RlfaMgpxRkDMKckbhtX1Dz/XlN048ZNW8Kz3ubG3PCu0ZBTmjIGcU5IzCzvmA561fWidzbr38ymusWOnaXzIs0J5RkDMKckZBzigcHAc8n1QtjHl46zf9S0qdzy24mqI9oyBnFOSMgpxR6PYL2ngYbybrNZ87Xvit1UoP2jMKckZBzijIGYXX5gMezvWas1X8b20BtHH8MX7QCu0ZBTmjIGcU5IzCUp3wxp7vubUuG587vvaSSouVa88NZbRnFOSMgpxRkDMKB/cNzc7IzX7UzgoCHs59k9k2otozCnJGQc4oyBmF1+oD3upTP5xb6pMNgx7OlRqs0J5RkDMKckZBzigsrQs61218q/b13Fr7sUt2+X+wXxBfRs4oyBkFOaOwcz4g22Uz23rordN3x+4cBo1pzyjIGQU5oyBnFA6uC8q6nBtLYS9ZJbXxWucH8A+RMwpyRkHOKHTzAeNrz7mkUPathfmXrFbSnlGQMwpyRkHOKCzVB6zYWDZ8bnOhS84EHrtkVmZMe0ZBzijIGQU5o3BwHHDJkQDjvu25XYymnjt27oCEcwuBHrRnFOSMgpxRkDMK3XnCG2W/Yq84t+foxrOXz137oD2jIGcU5IyCnFG45TzhsWyX//Gdp7rn56p5p15y6trxW63QnlGQMwpyRkHOKOxcF3Tu5N7xg1Z66+PnbnxQVnkw5hwxfjM5oyBnFOSMwqX1AVN33tjFPlcusLFq4ZItgKZozyjIGQU5oyBnFF7bLyhzbqf+c+emTfXWp17DfAC/mZxRkDMKckbhN4wDNv7UPr7zW6+xcu1bhcEP2jMKckZBzijIGYWD44BsCcq5owguOfT4ktVKK7RnFOSMgpxRkDMKO8cB2fZBYyuLajZOD0w9d/zpxkqLjTXVU7RnFOSMgpxRkDMKX3l+AF9He0ZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGQU5oyBnFOSMgpxRkDMKckZBzijIGYW/YOAHhCLdHv8AAAAASUVORK5CYII=\" alt=\"QR Code\" />', 'df5aaf1e8f43071860be0e5be34cb27480641aefe446ad8be601f83a67809c0a', 'André Luigi', 'Amaral di Salvo', 'alds', NULL, NULL, 'balistreri.gwen@klein.com', 'Especialista', '2090899553', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(47, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEjUlEQVR4nO3dy27EKBRF0U6r//+X03MPkBCwTVXWmqbKdpIjdDGvn9/f33/gsH/ffgD+BDmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU5IyCnFGQMwpyRkHOKMgZBTmjIGcU/lv58s/Pz67nGBsvYng8xsqKh+xSK3+6jZdaue8U7RkFOaMgZxTkjMJSP+Bh45LjcW07VfmOP7yxh7Gx8F/5S2b/hSnaMwpyRkHOKMgZhZ39gIdzle+4xF4p/MdWugUrVkYpsv7HmPaMgpxRkDMKckbhYD/gnKlKf2poYeW7U48xdaMv2NtVe0ZBzijIGQU5o/CR/YCN83Omfjpl42M8fGK3QHtGQc4oyBkFOaNwsB9wrlxdqdbPTaoZ32hlfs7Gx3iL9oyCnFGQMwpyRmFnPyDbuGbFVB9i40v8lStPufO/oD2jIGcU5IyCnFH4ueR9cWZjxb1y37Hv+6dozyjIGQU5oyBnFG45P+DcnvjZZp/j+27cXOjcAohznSTtGQU5oyBnFOSMwtJ4QLY1/9Rj3Hmpsawb9NZSA+0ZBTmjIGcU5IzCzn7Aysvlc5Prs3r8kn7PnROQtGcU5IyCnFGQMwoH+wHnvju+1Ni5av3cq/ZzpX02TUh7RkHOKMgZBTmjsLQ+4FzJuWLjWWDnBjxWauqNvRPrA/gqckZBzijIGYWD+4aeK3Wz4n3lyg8rv9G5mU7GA/gqckZBzijIGYWD64QfsqkvG1/TZ4X/JSckGw/gs8kZBTmjIGcUdp4fkL2In5JtnLmx05AtvMgWFWvPKMgZBTmjIGcUunPELpmons3AmXLurf0lf3btGQU5oyBnFOSMQrdv6Nidm/5fMmiRfXjMeAC3kzMKckZBzijcMi9o42vrt+rxsTuP+c1ozyjIGQU5oyBnFJb2CzpXn2YnhT2cGw/YWPh/xGqJB+0ZBTmjIGcU5IzCwf2CNq5QHbvkJf7UU2VnrlkfwB8iZxTkjIKcUdh5fsBG2daY4/ue24Nz4xkAK981HsBXkTMKckZBzigcXCe88t23JgKteGvnpbdGdKZozyjIGQU5oyBnFA6OB6yUq2+dRfzWqumNj5FNi5qiPaMgZxTkjIKcUXhtXtDGunhlNstbG3ZunOM/NaTx1sZE2jMKckZBzijIGYXuHLGNsnf64/ueWx9w5/HCxgO4nZxRkDMKckZh576h52x8pz915XPH/I4fY+Mr/vGHx4+xkfaMgpxRkDMKckZh57ygc5Prxze65PyAc7sYTd136sNZT057RkHOKMgZBTmj0K0THts4X37Fxh7Gubk9K7/+W0cTa88oyBkFOaMgZxQuPT9go3ODBw/ZGMa5ZQrmBfHZ5IyCnFGQMwrf3w94mKrHs4MKNp72NfVU9gviq8gZBTmjIGcUDvYD3tqJ6Fw9fm5twbla3ngAf4icUZAzCnJGYWc/IFt0+rDx0LGN5xiPb/SQ3df5AXwzOaMgZxTkjMJHnh/Ax9GeUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJG4X+eKy6isusBPAAAAABJRU5ErkJggg==\" alt=\"QR Code\" />', '7f7f7664922993678c5c7ef6a415ab8f311e223d7e7036bd71f92cc2c34543c3', 'Geraldo Magella', 'Rodrigues de Almeida', 'gmra', NULL, NULL, 'isidro.oberbrunner@gmail.com', 'Mestre', '1495481805', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(48, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEm0lEQVR4nO3dy46lNhRA0VSU///lyiwDBkiWfTbQWWt8X9W9ZWHA5uf39/cvGPb30z+A/wWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGYV/dt788/Nz6nfcuyxi2PnepY+6Xzxxee/Si+8tLdp46n9hifGMgs4o6IyCzihszQMuDi45PnjUvHSkv/O9S9OCgzOb+0/ecfBXGc8o6IyCzijojMLJecDF3BnwpQPwg6fpl957/6uW3nsxd7VgbvMo4xkFnVHQGQWdURicB2TmjvSXPuqpyxKfYDyjoDMKOqOgMwqfnAcs3YHzRX/etMB4RkFnFHRGQWcUBucB2eH5zqn2nWXDlxfvrA+Y85JJkvGMgs4o6IyCziicnAc8ddo6O3u+M4fY+eSdj3oJ4xkFnVHQGQWdUdiaB7zkXPPBE/Fzf9EXF/ceZDyjoDMKOqOgMwrd8wMOLqNdcnCBbjZLmLvw8NT/gvGMgs4o6IyCziicvB5w8OaWg2ftn1pz+9Ri5p1nn839WxnPKOiMgs4o6IzC4PWApZPaB9fr3r/4/kcumXtCQPZF2WTFeEZBZxR0RkFnFH4O3nKzcyZ67ovuPbWp0dyllOyLlhjPKOiMgs4o6IzCY88PeOfagqcuLSzJ1lIcnCUYzyjojILOKOiMwlv2DX3qEPupXTaful1n7jLMPeMZBZ1R0BkFnVHo9g3N7ohf+qjM3J9wcJXGHOMZBZ1R0BkFnVEYXB+QrQS+f++SgzfXZ1uQzk10XA/gY3RGQWcUdEZhax6w9k3nFhUfPMc9dyw/t4h6blbk+QF8m84o6IyCziic3Dd0adP/nY3sd54u8NSCgCUvuZfpIOMZBZ1R0BkFnVEYfI7Y/Ysvdu6XX/qiHXO3CWU/48L6AP4oOqOgMwo6o9BdDzh4q89LzvgffGBy9gc+tWzYeEZBZxR0RkFnFAb3Czp4uLrzydmkYe4xBk9t9nmQ8YyCzijojILOKAw+P2DudPnOiw9+7xftrOHYYTyjoDMKOqOgMwon7wvaefHcjkBLC5KXHPzzD773nRcPjGcUdEZBZxR0RmFw39CnHi/81IFw9lEH11JkjGcUdEZBZxR0RuHkc8Tuzd1zkt0XdPAZAPfvnfPUJMl4RkFnFHRGQWcUBtcJz733cnyaHa0v2fmiL+4Mes94RkFnFHRGQWcUuvUBO5Zu6n9qD86lF88tU3jJjUAXxjMKOqOgMwo6o3Byv6CDR6A7+4Ye3GsouzF/bi3F/RftPJl5ifGMgs4o6IyCziicnAdczO1ykz3HeO6JXTvmLsPMPajZeEZBZxR0RkFnFAbnAZlPbJhzkW0FusS+oXybzijojILOKHxyHrB0r/3OjflzW4HuvHfuAW1zMyrjGQWdUdAZBZ1ROLlv6NytLzs7gz51pD+38uAie9bCDuMZBZ1R0BkFnVE4eT3gJVtUXsztCLR0HeLeF2djS4xnFHRGQWcUdEZh8HnC8B/jGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGYV/AafnmOEQJxP9AAAAAElFTkSuQmCC\" alt=\"QR Code\" />', 'dc28da1a3ef7ca546714ab18878d1a81079d0867e954742d113ae13e146dd09f', 'Regis Fernandes', 'Gontijo', 'rfgj', NULL, 27, 'shaun.abbott@yahoo.com', 'Mestre', '467154582', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53'),
(49, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEiUlEQVR4nO3dQW7jOBRAwclg7n/l9KZXWgggyP8ke6q2cSIneSBEi6J+fn9//4Fh/z79Bvhf0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R0BkFnVHQGQWdUdAZBZ1R+G/nm39+fk69j3v3NzFc3sbcHQ9LB7p/8c6f7uCP2jnuEuMZBZ1R0BkFnVHYmgdcHDwBvz+3XTrzXXpxdrY+N1nJ/gtLjGcUdEZBZxR0RuHkPOBi5wR86cWXA90fd+dA9w5eLdh58f333pubnRjPKOiMgs4o6IzC4DxgztKZ/tKlhbklNztn+l+wt6vxjILOKOiMgs4ofOQ84ODC/LnVO3PrkT5xWmA8o6AzCjqjoDMKg/OAl9yve5FdLdiZYRz8071k0mA8o6AzCjqjoDMKJ+cB2cY1O+auFuz8+gevUrzzv2A8o6AzCjqjoDMKPy/5vDjz1Caj96wLggN0RkFnFHRGYWseMHcb7VM/+eAFgIN3Hsy952xzU+MZBZ1R0BkFnVE4OQ/ITpPnPi7PfqPsqQZzE44lxjMKOqOgMwo6o3ByXdDB7Tx3vvede3/unGIf/N6nnm5mPKOgMwo6o6AzClv3CWeP21366lOL659atv/UrGiJ8YyCzijojILOKGzNA3bOMXc27Dz4ruZW7yx9deldLckeXHzPeEZBZxR0RkFnFF76/IBsYX52N++OuesuS8d1fwBvpzMKOqOgMwqD+4bO7Xr/1Gaf79wCaOlATy1eMp5R0BkFnVHQGYXH9gu699R9swdfPOcldyAvMZ5R0BkFnVHQGYXH1gUtLdtfOtBTZ/rZVYq59zw3lTGeUdAZBZ1R0BmF7jliT+1YueSd9wdkZ/pz/yPjGQWdUdAZBZ1ROHk94OCymbkVRxdPPRJg6UD35pYJWRfEh9EZBZ1R0BmFwXVBFwfPbee2AJqbFrxkfc6F54jxVXRGQWcUdEbh5Dzg4J4/B0/edxy8ieHiJbuZZou1jGcUdEZBZxR0RuEtzw/Ith5aOi/ONlPa+eq9g1c43B/A2+mMgs4o6IxCt2/oO3e9zz7TX3obB2/u3eF6AB9GZxR0RkFnFLrrATsfxB+ccLxknf7BT/ztFwR/6YyCzijojMJbrgdkW/NnOxHde2pHUs8T5pvpjILOKOiMwtY84CkHF8jPeephy/dvY+knux7Ah9EZBZ1R0BmFrXVBL/n0fO5Kw873vmSJ0YXnB/DNdEZBZxR0RqF7jtiSuWVC2aRh6Y6H+wPN/TU8P4CvojMKOqOgMwqD9wnPrd55ySajBx8ctmTnF8xO/C+MZxR0RkFnFHRGoXue8Jy5LYAO3vmc3R+Q3XG9xHhGQWcUdEZBZxS+YR4wt+TmJSf+9we62JklLP2oJcYzCjqjoDMKOqPwlucJ75jbbf+gua14PuJtGM8o6IyCzijojMLJeUC2fdDF3MqfpRcf3IpnbvHS3COg7xnPKOiMgs4o6IzCRz4/gI9jPKOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqPwB70a+6j/JzTiAAAAAElFTkSuQmCC\" alt=\"QR Code\" />', 'bde48f61f91b03372c71e2cb8c12b056f541984fe7e439fb040ba5602b3b6644', 'Ivan Paulino', 'Pereira', 'ippa', NULL, 1, 'annie01@rice.com', 'Especialista', '313923462', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(50, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEkklEQVR4nO3dQY7bOBRAwfEg979yZ5OVFgII8j/JSdU27baTPBCULJKfn5+f/2DY/09/AP4JOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKOqOgMwo6o6AzCjqjoDMKv3Ze/Pl8Tn2Oe/eLGC4fY2fFQ/ardv70/o3m7PxrGM8o6IyCzijojMLWdcDFwSXH93PbpZnvzjR56bWXv/7Bif/SZUH2v7DEeEZBZxR0RkFnFE5eB1zsTKKXfvjyRvfvu3Nv/eBrD0787839LywxnlHQGQWdUdAZhcHrgDk7M+65X3X/2p0/PXhZ8BTjGQWdUdAZBZ1R+MrrgJ3lAjtz6qUfPvhQzTdO/C+MZxR0RkFnFHRGYfA6YG72OjeX33ku6P6Hn3o+5yXXEMYzCjqjoDMKOqNw8jog27hmx86a27nVvEsPL71k+6AlxjMKOqOgMwo6o/B5yf3iTLZA9+DHuPjG/zLjGQWdUdAZBZ1R2LoOmHsE/p2/eWe2vnOFke1ENHcZZDyjoDMKOqOgMwonvw/I7nE/dbt85/mcg8sF5l47d1lgPKOgMwo6o6AzCoPniC1NhOem9gd3Bp2bU7/keGHfB/DddEZBZxR0RuHkc0HZdp4Hn+25NzcvfsmRANk3K8YzCjqjoDMKOqMwuF/QZRaZPaj+1DliO5dBS17yxNES4xkFnVHQGQWdUXjL+oCLbHHv3F9/6WMsyVYg37/vEuMZBZ1R0BkFnVEYvA5Y8pI773PLaP/xHUmNZxR0RkFnFHRGYXB9wMEJ6Uvunt97aiueg9c99gviu+mMgs4o6IzCY98HZBv1XMw9Ap/d4r9/3+xRnyXGMwo6o6AzCjqjcHKd8MVTz8ksLVc+6KkrDOsD4A+dUdAZBZ1RGLwOuLdzi39uqnvQ3PM5S2/01IKAC+MZBZ1R0BkFnVHYug54au/PnTd66vyAg/Pxpb/+U8e3XRjPKOiMgs4o6IxC933A3OkCc+YevX/qzLWnDiwznlHQGQWdUdAZhbecJ7zzRgfPIn7np7p4atW09QG8nc4o6IyCzii8dN/Qi7mp/VM7kj61TPopxjMKOqOgMwo6o9DtF5Tden7JutmDlwVzn9n5AfxVdEZBZxR0RuGl+wW9cwVAthB6yf1rnzrd7MJ4RkFnFHRGQWcUTp4jlnnqqKy51ctzXwDMLctYYjyjoDMKOqOgMwon9w2dc3DvnYOvvbc0tT/4fcDBwxV8H8CX0RkFnVHQGYWTzwXN3Xm/f6OD5wccnPgffG02W5/7csh4RkFnFHRGQWcUBtcHzD29M3dv/eBN/KUzkOc2Gd15o4OMZxR0RkFnFHRG4bF1wnNesmP+U0cCLH2M7LLAeEZBZxR0RkFnFP6G64C5jXrmtvOc2yDo/mNkG4VeGM8o6IyCzijojEJ3fkAm24s/2/sz26/U9wF8N51R0BkFnVE4eR2QbR908H2z8wPmdvV56kjkJcYzCjqjoDMKOqPwlecH8HWMZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxR0RkFnFHRGQWcUdEZBZxR+A55TEJPQg3LqAAAAAElFTkSuQmCC\" alt=\"QR Code\" />', 'f125e13b87907dd0bfa7518e4cff46269da0eb4c11c653fc8a2b5c928b97eddf', 'Diego Andres', 'Parada Rozo', 'dapr', NULL, 19, 'frederic75@wintheiser.com', 'Doutor', '781447704', 1, '2023-01-01 20:42:30', '2023-08-28 23:43:16'),
(51, '<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAM0AAADNCAIAAACU3mM+AAAABnRSTlMA/wD/AP83WBt9AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEnElEQVR4nO3dzY7rKBSF0a5Wv/8r355ngITgfHbqrjVN/JOqLQT2AX7+/PnzDwz79+kb4K8gZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjMJ/Jwf//Pzcuo+19SSGj9s4mfGQnerk0/WF5pz8NbRnFOSMgpxRkDMKR+OADxenHK/7tls93/WXP+553R9fH7v+dOsXnQwLsv/CFu0ZBTmjIGcU5IzCzXHAh61e5Fbvdd1NPum8nxy7PtXJsODE3H9hi/aMgpxRkDMKckZhcBwwZ6u3fvIgfuu669vY+vTkuu+kPaMgZxTkjIKcUfjKccDJdIGTYcFTnfdfsMeD9oyCnFGQMwpyRmFwHDDXez2ZzZv15eeKiOZ+7xztGQU5oyBnFOSMws1xwFeUr8wt43OxAOnEO/8L2jMKckZBzijIGYWflzwvzsw9eV9faG3uNl5Ce0ZBzijIGQU5o3A0DpgrgX/qzHOr/J/I7nnuF2nPKMgZBTmjIGcU3jIO+PBU73WuLujEyYXmhkFbtGcU5IyCnFGQMwrdPmIXF/vcMtdrPjnVS2YRb13ohPaMgpxRkDMKckZhcH7A3J5cJy6uOZq9eFjLSqpOaM8oyBkFOaMgZxQG64Iu9vTnOu9Pra5zMsKY+/LFYz9ozyjIGQU5oyBnFG6+D5hbbf+kL/+Syb0XRycnX17f5JpxAG8nZxTkjIKcUejWDb34FPti9c47VwSaGxWtzf1A7RkFOaMgZxTkjMJjdUEnPd+1r6iTufg+4ER2Ie0ZBTmjIGcU5IzCzfWC1rb68tkmXHNbBJ90sS8+4s96+mvaMwpyRkHOKMgZhcFxwMnT86fWwLn4tuDkuutjLw6SsrIo7RkFOaMgZxTkjMLgPOG5ua/rY9d3dXLdr6ih2qIuiF9FzijIGQU5o3D0PuAl9fJzi95cnJ+cVRx9mPu9W7RnFOSMgpxRkDMKXV3Q2txz+bmpBiejk5P5AXPVSvYT5rvJGQU5oyBnFG6uF5T1T7fMrbafre6ZvQ+YKxPSnlGQMwpyRkHOKAyOA56ac7tlboSRTbxYf3mL/QP4bnJGQc4oyBmFx94HbJ3qYnHL3LThuUWNXlIldUJ7RkHOKMgZBTmj8Nj8gKwCZ+2kL5+NTk5uY31XJ6faoj2jIGcU5IyCnFG4uW5o5qmH2ltOiqaeegGwZn4AbydnFOSMgpxRuLlu6Jy5R/wXn4+vFwpdu/g+IFuJaIv2jIKcUZAzCnJG4WZd0FP7W633yF0fu3Xdd57qqdcDW7RnFOSMgpxRkDMKL90/4OKZt8ztEDA3p3rLU1VS2jMKckZBzijIGYXBcUDmnQvmPLUn8MlUZ3VBfDc5oyBnFOSMwm8YB1wskN8688VynadKjOwnzK8iZxTkjIKcURgcB2QlKE/tUPaS+RAXlz71PoDvJmcU5IyCnFG4OQ54ag7qh7nXA+9c+3PuQt4H8GXkjIKcUZAzCl+5fwBfR3tGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBkFOaMgZxTkjIKcUZAzCnJGQc4oyBmF/wGQp/6uBXrWhQAAAABJRU5ErkJggg==\" alt=\"QR Code\" />', '56a9ea49dcbf1699d31730fc2fbe62f83d1866989fc53a5d073b55f67c9193b5', 'Kelen Cristina', 'Duarte', 'kcrt', NULL, 18, 'zoconnell@hotmail.com', 'Mestra', '1764365054', 1, '2023-01-01 20:42:30', '2023-08-28 23:42:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teacher_disciplines`
--

DROP TABLE IF EXISTS `teacher_disciplines`;
CREATE TABLE IF NOT EXISTS `teacher_disciplines` (
  `id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `discipline_id` int DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teacher_disponibilities`
--

DROP TABLE IF EXISTS `teacher_disponibilities`;
CREATE TABLE IF NOT EXISTS `teacher_disponibilities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `teacher_id` int DEFAULT NULL,
  `disponibilitie_id` int DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `teacher_id` int NOT NULL COMMENT 'professor cordenador',
  `cursos_id` int UNSIGNED NOT NULL,
  `sector_id` int DEFAULT NULL,
  `period_id` int DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `carga_horaria` smallint UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `acronym` varchar(10) DEFAULT NULL COMMENT 'sigla da turma',
  `collor` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `turmas_FKIndex1` (`cursos_id`),
  KEY `turmas_FKIndex2` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `teacher_id`, `cursos_id`, `sector_id`, `period_id`, `data_inicio`, `data_final`, `carga_horaria`, `name`, `acronym`, `collor`, `created`, `modified`) VALUES
(3, 2, 1, 3, 1, '2023-07-11', '2023-12-31', 320, '1REDES', '1RDC', 'RED', '2023-07-11 16:57:00', '2023-07-11 20:34:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `role_id` int DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'registered' COMMENT 'registered, confirmed',
  `password` varchar(255) NOT NULL DEFAULT '',
  `forget` varchar(255) DEFAULT NULL,
  `document` varchar(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `users_roles_id_fk` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `role_id`, `status`, `password`, `forget`, `document`, `photo`, `created_at`, `updated_at`, `level`) VALUES
(16, 'Daniel', 'Santos', 'daniel41@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(17, 'Pedro', 'Santos', 'pedro42@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(18, 'Andre Roberto', 'Santos', 'andre roberto43@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(19, 'Ozeias', 'Santos', 'ozeias44@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(20, 'Arnobio', 'Santos', 'arnobio45@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(21, 'Roniel', 'Santos', 'roniel46@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(22, 'Caíque', 'Santos', 'caíque47@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(23, 'Lucas', 'Santos', 'lucas48@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(24, 'Francisco', 'Santos', 'francisco49@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(25, 'Cristian', 'Santos', 'cristian50@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(26, 'Eduardo', 'Santos', 'eduardo51@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(27, 'Rodrigo', 'Santos', 'rodrigo52@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(28, 'Raphael', 'Santos', 'raphael53@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(29, 'Jose', 'Santos', 'jose54@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(30, 'Rodrigo', 'Santos', 'rodrigo55@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(31, 'Diego', 'Santos', 'diego56@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(32, 'Alexandre', 'Santos', 'alexandre57@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(33, 'Edimar', 'Santos', 'edimar58@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(34, 'Jackell', 'Santos', 'jackell59@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(35, 'Luis', 'Santos', 'luis60@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(36, 'Lucas', 'Santos', 'lucas61@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(37, 'Wander', 'Santos', 'wander62@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(38, 'Tairo', 'Santos', 'tairo63@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(39, 'Rubens', 'Santos', 'rubens64@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(40, 'Hugo', 'Santos', 'hugo65@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(41, 'Gustavo', 'Santos', 'gustavo66@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(42, 'Paulo', 'Santos', 'paulo67@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(43, 'Rodrigo', 'Santos', 'rodrigo68@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(44, 'Denio', 'Santos', 'denio69@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(45, 'Idalmir', 'Santos', 'idalmir70@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(46, 'Ataide', 'Santos', 'ataide71@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(47, 'Luiz', 'Santos', 'luiz72@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(48, 'Luciano', 'Santos', 'luciano73@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(49, 'Adir', 'Santos', 'adir74@email.com.br', NULL, 'registered', '', NULL, NULL, NULL, '2018-09-03 19:39:07', '2023-06-14 16:56:43', 1),
(51, 'Israel', 'Silva', 'admin@israelcasilva.com.br', NULL, 'registered', 'agathasilva', NULL, '1234567890', NULL, '2023-10-22 11:22:57', NULL, NULL),
(52, 'teste1', 'teste', 'teste@teste.com', NULL, 'registered', '$2y$10$rjREbSzn9LGn8qj6mEt0ee6oI5rCz3o.HUgPUJYoR3vBzd2EkeZ2q', NULL, NULL, NULL, '2023-10-22 11:56:06', NULL, NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `disponibilities`
--
ALTER TABLE `disponibilities`
  ADD CONSTRAINT `fk_hour_id` FOREIGN KEY (`hour_id`) REFERENCES `hours` (`id`),
  ADD CONSTRAINT `fk_teache` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`cursos_id`) REFERENCES `courses` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
