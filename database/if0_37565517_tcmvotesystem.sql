-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2025 at 01:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37565517_tcmvotesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'EzlikDragonMontederamos', '$2y$10$N2JRBOJ8u2i4SwNSZ4oXiuLkDKM.cK0eDz59M5JgkvZAhWocBgwwK', 'Nicole Dominique', 'Montederamos', 'IMG_9270.JPG', '2018-04-02'),
(10, 'admin', 'password', 'Nicole Dominique', 'Montederamos', '', '2024-10-25'),
(11, 'admin', '$2y$10$.Uo7YEbDDUdngz7obbNyRu7NUaVLN1FcQQNw87ow9LoH/NvZHPstS', 'Nicole Dominique', 'Montederamos', '', '0000-00-00'),
(12, 'admin', '$2y$10$pUKgqfWG9wPJoqJvYYvi9OKY.EBHVQILZuUsF1FbxH8OgZ6T2rKr2', 'admin', 'ko', '', '0000-00-00'),
(13, 'adminuser', '$2y$10$AwM5L0/aLGNoYtiUu0AyMeATDlcsH/2UFniL4Dzh4etsHvdHJ8ilm', 'TCM', 'ADMIN', 'NEW CM LOGO.png', '0000-00-00'),
(14, 'demo', '$2y$10$GsSSlvWZez/jd5fq9fQ9u..boPsN4E6WJf.rlYZbsz7GansSGVazu', 'Demo', 'Test', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(4) NOT NULL,
  `year` varchar(7) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` varchar(580) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `course`, `year`, `photo`, `platform`) VALUES
(22, 7, 'Juan', 'Dela Cruz', 'BSBA', '4thYear', '', 'hello panelist!'),
(23, 7, 'Jean Randell', 'Raniel', 'BSIT', '2ndYear', '', 'hello panelist!'),
(24, 7, 'Jasper', 'Petracorta', 'BSBA', '2ndYear', '', 'hello panelist!'),
(25, 7, 'Diomar', 'Serdan', 'BSN', '2ndYear', '', 'hello panelist!'),
(26, 7, 'Kenneth', 'Bugnos', 'BSBA', '3rdYear', '', 'hello panelist!'),
(27, 6, 'Francis Joseph', 'Cutamora', 'BSN', '3rdYear', '', 'hello panelist!'),
(28, 6, 'Joshua', 'SIkas', 'BSN', '4thYear', '', 'hello panelist!'),
(29, 6, 'Jasper', 'Gates', 'BSA', '3rdYear', '', 'hello panelist!'),
(30, 3, 'Kenneth', 'Serdan', 'BSN', '1stYear', '', 'hello panelist!'),
(31, 3, 'Francis Joseph', 'Raniel', 'BSN', '2ndYear', '', 'hello panelist!'),
(33, 1, 'Len John', 'Gates', 'BSIT', '4thYear', '', 'Real Change, Real Action!\r\nVote LenJohn Gates for President, and together we will:\r\n\r\nWork to reduce school stress with better resources\r\nPlan more clubs and activities for every interest\r\nFight for a cleaner, safer school environment\r\nImprove communication with both students and staff\r\nLetâ€™s create a better school, together!'),
(34, 1, 'Jevy Jon', 'Yotina', 'BSIT', '4thYear', '', 'Empower Every Student!\r\nIâ€™m running for school president to:\r\n\r\nRepresent ALL voices in school decisions\r\nOrganize fun, engaging activities after school\r\nImprove communication between students, teachers, and staff\r\nFocus on student wellness and mental health\r\nVote EzlikDragon for a school that empowers YOU!'),
(35, 1, 'Rafael', 'Sanoria', 'BSIT', '4thYear', '', 'Vote Pael for School President!\r\n\r\nTogether, we can create a school where every voice matters! I promise to:\r\n\r\nImprove communication between students and staff\r\nOrganize more fun events and activities\r\nFocus on mental health and student well-being\r\nEnsure every student\'s concerns are heard\r\nYour ideas and concerns will drive my actions. Letâ€™s build a stronger, more united schoolâ€”Vote Pael for President!'),
(36, 4, 'Bob', 'Marley', '', '', '', 'Thank you Joy, Thank you Pain.'),
(37, 4, 'Michael', 'Jackson', '', '', '', 'Heee heeeee! Smooth Criminal'),
(38, 5, 'Lebron', 'James', '', '', '', 'I\'m going to take my talent to South Beach.'),
(39, 5, 'Michael', 'Jordan', '', '', '', 'Air Jordan baby!'),
(40, 2, 'Dwayne', 'Johnson', '', '', '', 'If you smell! What the rock is cooking.'),
(41, 2, 'Steve', 'Austin', '', '', '', 'I\'m the GOAT of WWE.'),
(43, 1, 'jen randell', 'cutamora', '', '', '', 'ibutar ko aron daghang ayuda tag 10k kada buwan'),
(44, 1, 'Jeric', 'Tanqueson', '', '', '', 'My name is jeric tanqueson ibutar ko ninjo aron ibutar pd mo nahu'),
(45, 9, 'Diomar', 'Serdan', '', '', '', 'Gwapo ko');

-- --------------------------------------------------------

--
-- Table structure for table `election_results`
--

CREATE TABLE `election_results` (
  `id` int(11) NOT NULL,
  `election_title` varchar(255) DEFAULT NULL,
  `pdf_content` longblob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `election_status`
--

CREATE TABLE `election_status` (
  `id` int(11) NOT NULL,
  `status` enum('open','closed') NOT NULL DEFAULT 'open'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `election_status`
--

INSERT INTO `election_status` (`id`, `status`) VALUES
(1, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `user_type`, `event_type`, `ip_address`, `log_time`) VALUES
(1, 2770, 'voter', 'login', '64.224.133.56', '2025-05-12 00:53:17'),
(2, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:01:40'),
(3, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:01:44'),
(4, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:03:51'),
(5, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:03:59'),
(6, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:04:31'),
(7, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:04:37'),
(8, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:04:42'),
(9, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:04:51'),
(10, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:05:53'),
(11, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:05:58'),
(12, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:06:51'),
(13, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:06:59'),
(14, 1, 'voter', 'login', '64.224.136.100', '2025-05-25 23:09:07'),
(15, 0, 'voter', 'failed_login', '64.224.136.100', '2025-05-25 23:16:02'),
(16, 3, 'voter', 'login', '64.224.136.100', '2025-05-25 23:16:36'),
(17, 3, 'voter', 'login', '64.224.136.100', '2025-05-25 23:22:58'),
(18, 3, 'voter', 'login', '64.224.136.100', '2025-05-25 23:33:11'),
(19, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 07:50:57'),
(20, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:39:56'),
(21, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:40:09'),
(22, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:40:25'),
(23, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:40:51'),
(24, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:41:01'),
(25, 0, 'voter', 'failed_login', '64.224.135.6', '2025-05-31 09:41:09'),
(26, 0, 'voter', 'failed_login', '89.39.107.203', '2025-07-11 19:31:57'),
(27, 2772, 'voter', 'login', '89.39.107.203', '2025-07-11 19:34:56'),
(28, 0, 'voter', 'failed_login', '165.101.58.10', '2025-08-01 13:58:12'),
(29, 0, 'voter', 'failed_login', '165.101.58.10', '2025-08-01 13:58:30'),
(30, 0, 'voter', 'failed_login', '165.101.58.10', '2025-08-01 13:58:48'),
(31, 2772, 'voter', 'login', '64.224.136.203', '2025-08-24 16:37:25'),
(32, 2772, 'voter', 'login', '::1', '2025-08-24 23:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(1, 'President', 1, 1),
(2, 'Vice-President', 1, 2),
(3, 'Secretary', 1, 3),
(4, 'Treasurer', 1, 4),
(5, 'Auditor', 1, 5),
(6, 'PIO', 2, 6),
(7, 'Senator', 4, 7),
(9, 'Prince Charming', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` int(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(5) NOT NULL,
  `year` int(7) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `course`, `year`, `photo`) VALUES
(1, 20203456, 'password', 'Juan', 'Dela Cruz', 'BSIT', 2, 'NEW CM LOGO.png'),
(2, 20207891, 'password', 'Maria', 'Santos', 'BSA', 3, ''),
(3, 20204583, 'password', 'Jose', 'Garcia', 'BSBA', 2, ''),
(4, 20209274, 'password', 'Ana', 'Reyes', 'BSBA', 1, ''),
(5, 20201367, 'password', 'Miguel', 'Bautista', 'BSIT', 3, ''),
(6, 20205682, 'password', 'Elena', 'Mendoza', 'BSA', 2, ''),
(7, 20207459, 'password', 'Carlos', 'Perez', 'BSA', 3, ''),
(8, 20209834, 'password', 'Grace', 'Rivera', 'BSA', 2, ''),
(9, 20203128, 'password', 'Rafael', 'Torres', 'BSN', 2, ''),
(10, 20206745, 'password', 'Isabella', 'Gonzales', 'BSN', 4, ''),
(11, 20208372, 'password', 'Daniel', 'Ramos', 'BSBA', 3, 'IMG_0899.jpeg'),
(12, 20202159, 'password', 'Angela', 'Fernandez', 'BSBA', 2, ''),
(13, 20205483, 'password', 'Roberto', 'Navarro', 'BSN', 1, ''),
(14, 20207648, 'password', 'Sofia', 'Diaz', 'BSBA', 1, ''),
(15, 20204921, 'password', 'Emilio', 'Flores', 'BSBA', 4, ''),
(16, 20203864, 'password', 'Cristina', 'Valdez', 'BSIT', 3, ''),
(17, 20209732, 'password', 'Felix', 'Cruz', 'BSIT', 2, ''),
(18, 20201258, 'password', 'Lucia', 'Morales', 'BSBA', 1, ''),
(19, 20208541, 'password', 'Andres', 'Castillo', 'FPST', 4, ''),
(20, 20206397, 'password', 'Carmela', 'Aquino', 'FPST', 1, ''),
(21, 20202458, 'password', 'Marco', 'Villanueva', 'BSIT', 2, ''),
(22, 20207436, 'password', 'Patricia', 'Alvarez', 'BSIT', 2, ''),
(23, 20205129, 'password', 'Diego', 'Salazar', 'FPST', 2, ''),
(24, 20208973, 'password', 'Estela', 'Francisco', 'BSBA', 3, ''),
(25, 20204715, 'password', 'Enrique', 'Santiago', 'BSN', 2, ''),
(26, 20203984, 'password', 'Maricel', 'Vargas', 'BSIT', 3, ''),
(27, 20206852, 'password', 'Tomas', 'Herrera', 'BSIT', 2, ''),
(28, 20207316, 'password', 'Rosario', 'Ortiz', 'BSBA', 1, ''),
(29, 20209164, 'password', 'Ramon', 'Luna', 'BSA', 3, ''),
(30, 20204857, 'password', 'Diana', 'Soriano', 'BSA', 1, ''),
(31, 20205638, 'password', 'Victor', 'Manalo', 'BSN', 1, ''),
(32, 20203249, 'password', 'Catherine', 'Gutierrez', 'BSN', 2, ''),
(33, 20208615, 'password', 'Francisco', 'Mercado', 'BSN', 3, ''),
(34, 20207934, 'password', 'Lourdes', 'Ponce', 'BSN', 1, ''),
(35, 20204126, 'password', 'Adrian', 'De Leon', 'BSN', 2, ''),
(36, 20201999, 'password', 'Gellah Honey', 'Maglines', 'BSIT', 0, '1000030420.jpg'),
(37, 20209418, 'password', 'Benjamin', 'Cruzado', 'BSN', 2, ''),
(38, 20205741, 'password', 'Veronica', 'Lim', 'BSBA', 2, ''),
(39, 20203489, 'password', 'Edgardo', 'Pascual', 'BSA', 2, ''),
(40, 20207625, 'password', 'Beatriz', 'Salvador', 'BSA', 2, ''),
(41, 20205371, 'password', 'Joaquin', 'Magbanua', 'BSA', 2, ''),
(42, 20208716, 'password', 'Margarita', 'Sevilla', 'BSBA', 4, ''),
(43, 20204632, 'password', 'Leandro', 'Marquez', 'BSBA', 2, ''),
(44, 20203597, 'password', 'Alicia', 'Fajardo', 'FPST', 3, ''),
(45, 20206413, 'password', 'Gregorio', 'Romero', 'BSA', 1, ''),
(46, 20207825, 'password', 'Celia', 'Padilla', 'BSN', 1, ''),
(47, 20209368, 'password', 'Pedro', 'Sandoval', 'BSA', 2, ''),
(48, 20204189, 'password', 'Melinda', 'Ramos', 'BSBA', 2, ''),
(49, 20205836, 'password', 'Hector', 'Lozano', 'FPST', 4, ''),
(50, 20207961, 'password', 'Clarissa', 'Delos Santos', 'BSN', 1, ''),
(2694, 20201994, 'password', 'Test', 'Montederamos', 'BSIT', 4, 'Python.jpg'),
(2695, 0, '$2y$10$859jHzshUX6BzvZYT22tfumQ8kZMU981C8gqjNVWjyJB9TTsBZYvO', 'Diomar', 'Serdan', '', 0, ''),
(2696, 20206666, 'password', 'Marion Dave', 'Montederamos', 'BSIT', 3, 'IT LOGO FINAL.png'),
(2697, 1, 'password', 'Niel', 'Bautista', 'BSIT', 4, 'image001.jpg'),
(2698, 0, 'kadoks', 'Diomar', 'Serdan', '', 0, 'inbound2743132559535457757.jpg'),
(2699, 0, 'dokiesgwapo', 'Kadoks', 'Vlog', '', 0, 'inbound3734863302150810905.jpg'),
(2700, 15100315, 'password', 'Rafael', 'Sanoria', 'BSIT', 4, 'pael.jpg'),
(2701, 20201281, 'password', 'LenJohn', 'Gates Sr.', 'BSIT', 4, 'gates.jpg'),
(2702, 2, 'password', 'Joyce', 'Saludo', 'BS', 4, ''),
(2703, 20206969, 'password', 'Test', 'Test', 'BSBA', 3, ''),
(2704, 20221663, 'password', 'Althea Bea', 'Dolorito', 'BSIT', 2, 'Bea.jpg'),
(2705, 0, '123456', 'TCM', 'ahh', '', 0, ''),
(2709, 69, '$2y$10$6kaGqO4TiAPHxDTE/FbyyeYmnrG6GoGw7UnQvTUQBNh1n4hqgSiTi', 'Brian', 'Gwapo', 'BSIT', 0, 'brian.jpg'),
(2710, 202016666, '$2y$10$c.J2fcaNwrI9l70UxX5X8Off4QF6OXVd8LnvB7CSZI0VgcF8czVA.', 'Brian', 'ADMIN', 'BSIT', 0, 'brian.jpg'),
(2711, 111111, '$2y$10$evikHeiiQwCYNkjx6ISs8u4qp91uATWZazMqgoFWNrC8vTkamSWp2', 'Panel', '1', 'BSIT', 0, 'goldenlogo.jpg'),
(2712, 222222, '$2y$10$Rx9Q4IAXWeZpQUS0ju0uFOyCEdbLKtz/SExT3UoEut.ZrgddfqBCq', 'Panel', '2', 'BSIT', 0, 'jersey front.jpg'),
(2713, 333333, '$2y$10$GOe8C/t20ATD749ZKbpHiOMiZzAeHmHLAhWWqYDmvNP1Lcf6KYU3S', 'Panel', '3', 'BSIT', 0, 'NEW CM LOGO.png'),
(2714, 444444, '$2y$10$T87eSD9RARSEuiOKQTl6nudWXHFwH9WOXPjrD3oRwbFArI6JnhRzS', 'Panel', '4', 'BSIT', 0, 'IT LOGO FINAL.png'),
(2715, 20201207, '$2y$10$MSE9Q.bTIxgBaKlqNb7XYuz0WAt/dfJVEtw3B6YPYwZmZg3JswaJO', 'Jean Randell', 'Raniel', 'BSIT', 4, '432045215_6991393454315724_5152349785558012059_n.jpg'),
(2716, 16200202, '$2y$10$J/aIwfLYKIWgGG4T33RSMOPW7ZJI78YeChkKIojdZf8XAH4e45rQi', 'Serdan', 'Diomar', 'Bsit', 4, ''),
(2717, 987654, '$2y$10$qi0j8lhNVrIs8htFbwZdCOwizuW36CHj.zXW8HxLsokqJ8q6783Dy', 'Erson', 'Sanico', 'BSIT', 4, ''),
(2718, 992561, '$2y$10$itDOW80zH6g5A9GFlLPIM.oKG7xE.0Aolv11ZSA/3bijVqKVebnO6', 'Erica ', 'Fuentes', 'Bsit', 4, ''),
(2719, 9925615, '$2y$10$D7rzle.FVdER.JmjKa4eVejNTC8ooYp7gbggmmnGTfslTTigrnSsa', 'Jessa mae', 'Serdan', 'BSBA', 3, 'fb2d571f2f1f88b71196375748e8d8ae.jpg'),
(2721, 20240513, '$2y$10$M1JF1JaDZ5Ae7SlU5JEcUu9EAlDUTqZ/.AsJOk/kndNeP1ZXptoX2', 'Rodel', 'Dayons', 'BSIT', 1, 'received_851614399779703.jpeg'),
(2722, 20201669, '$2y$10$Ek4G978BcL/rGA/0Aw4ulOUGjO8hVZmBWQJmmoKwYXtkwfEL0qtKe', 'Nicole Dominique', 'Montederamos', 'BSIT', 4, 'newCMlogo.png'),
(2723, 20203457, '$2y$10$jpKalhbeAvxUgnAsaFG7c.81MSrUZKnh3.2r0KJIyDgwa0uUIsBVG', 'Layla', 'Blaster', 'BSIT', 3, ''),
(2724, 20204584, '$2y$10$YzjpO9I5lLdeZD19xrdhj.ffYeosdVrqXpCwgL3oJgNkCiFT4Paba', 'Gusion', 'Ransomware', 'BSBA', 2, ''),
(2725, 20206746, '$2y$10$MDEA0wntNnDqbNeJPQ.a1.plo163LIMPNEjT3t57O3kQuUdznD0K6', 'Lancelot', 'Trojan', 'BSA', 3, ''),
(2726, 20205000, '$2y$10$m4AK6ayviFzBz4m2H3THceAXXUYDYwdb.CGfHXdf/rm3i4oncNtC.', 'Irene', 'Santos', 'BSIT', 2, ''),
(2727, 20202359, '$2y$10$/ogxXqRIN3jUA55DFIAkXO6.wnGsOlwbHV44elSPnC2FXpULIn2Aa', 'Gina', 'Torres', 'BSBA', 3, ''),
(2728, 20201110, '$2y$10$4VYblLOaXh7eE903cDqwaOp8251gsoVL0KW9k3ZDyIlx7f5CmeFxS', 'Andrea', 'Gomez', 'BSA', 4, ''),
(2729, 20207888, '$2y$10$U/oFljzJoRoRN64MelUOquOThHJNqMv9rCPxQixeLivRONmaygQMe', 'Hannah', 'Reyes', 'BSHRM', 2, ''),
(2730, 20204589, '$2y$10$KndD0o2eKxNpuNwi.j1vA.Rt1MNVH/ENYrAxPLQAppg57SZYA78xi', 'Rafaela', 'Santiago', 'BSIT', 3, ''),
(2731, 20205432, '$2y$10$8IkyztslAVajlsQTMoXWYuT3AB5vsk3sBQWmqGVRkMxXiJGXP7n2.', 'Max', 'Dela Cruz', 'BSBA', 1, ''),
(2732, 20206987, '$2y$10$LjtV74AxW2PZZa0Gvl3bjuKnuwp2pCs19pbaahQH/Mt3aa0Wm4dGu', 'Miguel', 'Fernandez', 'BSCS', 3, ''),
(2733, 20206573, '$2y$10$eFqVe1MjKeGTumtYVHAL1eJhexnG5nypxt5w4YXLuTbNMlQ56C3BG', 'Patricia', 'Paredes', 'BSE', 4, ''),
(2734, 20207692, '$2y$10$IiC/XJK1FqrZ8KJV9GDxhOw2G/E6z.9Vhs2Bab78MykCqQXpsV7Va', 'Martin', 'Rivera', 'BSHRM', 2, ''),
(2735, 20205421, '$2y$10$3e476RHrfUNDYCStA/CVc.jQQL8I6EZJQkcaY8MiNaCxfNUZfGr8G', 'Angela', 'Hernandez', 'BSBA', 2, ''),
(2736, 20202099, '$2y$10$ezMn3b/QUaatNxVy7q2Q3e7QI3FR.ELCh1adpEQM9DHhps63W.cmW', 'Eliza', 'Sison', 'BSA', 3, ''),
(2737, 20207285, '$2y$10$5wlr7h6KWDKxtAG6sPeJmu85T5rEasLqqAnDc/24kNB3W5bPXXNLa', 'Laura', 'Garcia', 'BSIT', 1, ''),
(2738, 20206784, '$2y$10$89qX1XQoRH/USjZBirA9NuCSxs/5cEgvw7Y9k5k8Ow8QkDiiSr2JC', 'James', 'Martinez', 'BSBA', 3, ''),
(2739, 20205478, '$2y$10$Sc0KGOyjDsiSioaZHqKS7O2FEx3I9vwUwwqczhsxRW1p8IVSz3rlG', 'Jasmine', 'Vega', 'BSCS', 2, ''),
(2740, 20203672, '$2y$10$6A/KLYX5tbWhUtRt2hd4HOWOzM6lXVNaEV0oHc07/eP79n1lJ8trG', 'Olivia', 'Diaz', 'BSHRM', 1, ''),
(2741, 20206534, '$2y$10$mH5M3YXHp9cEqWS.45qv9ePIpeqvRNBWqn5IaMElvLO.jLUy5qEie', 'Oliver', 'Delos Reyes', 'BSBA', 2, ''),
(2742, 20204021, '$2y$10$Vr41lI4sMYSoBQKss0My8.snYks.vj/.dzFkl1uJNwJQRH.vWOiAW', 'Charlotte', 'Valencia', 'BSE', 4, ''),
(2743, 20205728, '$2y$10$csNV0wFdABmkdLAy3vorleHYhZY9c8gjDNZ4egET9BgssIUAZDwMS', 'Rafael', 'Ramirez', 'BSA', 2, ''),
(2744, 20207829, '$2y$10$.dkVWBSTDv/uiM6Nu84c5O4MESRC6SMK6iGa20WlcjY73QTVy2RAS', 'Diana', 'Mendoza', 'BSIT', 3, ''),
(2745, 20207684, '$2y$10$Rug5t2h9GEAXWYWyRrlf3eKeABTerZCnzkVrmRrllZ3vhWZso5QBO', 'Bella', 'Martinez', 'BSBA', 1, ''),
(2746, 20205684, '$2y$10$QPp/febdcWyujkVzTpcPWecGqIPjcS/xOK0RueaQAkPVA/IRqXR42', 'Antonio', 'Morales', 'BSHRM', 4, ''),
(2747, 20202184, '$2y$10$wvEUJv8naC0905phlda.4uPEO0J13FV6qsdtSi61ZXOs25Ubda9Gu', 'Eva', 'Alvarez', 'BSE', 2, ''),
(2748, 20205412, '$2y$10$pW7/003aqazXe9Ldufq0WuSDRrgiupWgd2Q7XQ7OzMehYUG3O9Ak6', 'Emilio', 'Sanchez', 'BSA', 3, ''),
(2749, 20206728, '$2y$10$Rg.9FWdSInKbH6ueY0r5cuZCetrBy3de6zJ6Bxb411aIzMh9EoA/G', 'Carla', 'Perez', 'BSBA', 1, ''),
(2750, 20205832, '$2y$10$fy1T.EIAB/pePbTElr07Gu1wyrD5L38piywLFBpLSRMMJzd2dI3V2', 'Diego', 'Flores', 'BSCS', 3, ''),
(2751, 20206583, '$2y$10$XGm6zs4xYnyF37SMIAIq2OycH6YNnbt8Jsyyqa7paTCQMv5c0s9k6', 'Leila', 'Bautista', 'BSIT', 4, ''),
(2752, 20207356, '$2y$10$bBdiLc1yvqm458LpbDDOFeEKxMeuNoA3cs7AANUZyTfZ6swgP4/7a', 'Giorgio', 'Lopez', 'BSBA', 2, ''),
(2753, 20207892, '$2y$10$N/wzCPe0V1zAF1U4O9SiJ.waLiWxePcejKQ5idt0BMLvVf.EwdUGq', 'Jocelyn', 'Lozada', 'BSHRM', 1, ''),
(2754, 20207144, '$2y$10$2E2V93iY7QaApVJb0C5QE.ZPwKGps.AGULbxjwwITJBfUCstKmV9q', 'Samson', 'Gonzales', 'BSE', 3, ''),
(2755, 20206091, '$2y$10$LOWQD42MKoeXpKXlXFPG2uCbLL34FDR44oQKPSpIvGiKD4cJ1ZnoO', 'Erica', 'Santos', 'BSA', 2, ''),
(2756, 20207591, '$2y$10$mWtfppMGiVH1szpSoJ0y3uL171L2xZGeaJ1LYe/hvA7NQ0nH09.4O', 'Nicole', 'Jimenez', 'BSCS', 3, ''),
(2757, 20202211, '$2y$10$4Szx8R3yNUn1zsPTLMzZbut3H7Yn0WZK7/z0wLwyRoNnxlUu4YV4W', 'Martin', 'Chavez', 'BSBA', 2, ''),
(2758, 20206794, '$2y$10$HigLx4B.WqF3o8vcGN7fves3mMwW.vp5GdNMsLpduzJqqlF.HU2XK', 'Lucia', 'Escobar', 'BSHRM', 4, ''),
(2759, 20203452, '$2y$10$456yzVQuVxntsS0xSefvCuIZS0aSlIOHPLDWNlLstyaQPd74DMR4W', 'Harold', 'Torres', 'BSIT', 1, ''),
(2760, 20206173, '$2y$10$h9cWwDvOrFXXK3zX0cacWeP6nanmK5y9h4MPuCfW2PnIQ.xb8ry/C', 'Ava', 'Martinez', 'BSBA', 2, ''),
(2761, 20206085, '$2y$10$XD7tBWiyHBZpUiUAFG/0j.6kKWyrZRz9Nv/K4qGKs/TNWVSrPehF2', 'Kara', 'Lopez', 'BSCS', 2, ''),
(2762, 20206238, '$2y$10$KAq.XJ1L8ZE2iSa411wr.ePBOQVemZkBV4nolVsTx/vuFmMxvLA.e', 'Quinn', 'Serrano', 'BSHRM', 1, ''),
(2763, 20206304, '$2y$10$hYxmJM0GxlZzHATuwNIjkelEpVLlpt3pnActNTTC4WhXLco5vAN2O', 'Emil', 'Santos', 'BSA', 3, ''),
(2764, 20205891, '$2y$10$7B48OLl83ZMS3vxR4sou5u7xxc4YQBiFyOHZrRRmXFN.Zhadgsp4u', 'Isabel', 'Castro', 'BSBA', 4, ''),
(2765, 20206452, '$2y$10$G3/T4ai797z6qU2QXDXnNu.sHcVyaxfP8vJPJoGLlq98oAyfpQz96', 'Roy', 'Guerra', 'BSCS', 1, ''),
(2766, 20207239, '$2y$10$xUnwjjSOOymnueo4LLMS0uPw66SOfYgMZCIHzpyMiAsDHjddzimla', 'Katherine', 'Salazar', 'BSE', 4, ''),
(2767, 20206152, '$2y$10$o8rjxqCnaE79Zi9TOaFmn.BoPnFqiw.lDLG7rhmCM.P1zJ/FdUfFi', 'Arthur', 'Calderon', 'BSBA', 1, ''),
(2768, 160020222, '$2y$10$BwLDaJE60w/KWkLSODZTtOtLR3s1WniWHN14eKCGATA9/M6NoIKXu', 'Kadoks', 'Vlog', 'Bsit', 4, ''),
(2769, 90123, 'password', 'Bobsicles', 'Montederamos', 'BSIT', 4, '472239951_554845300871513_726863307577222369_n.jpg'),
(2770, 101010, 'demo123', 'demo', 'test', 'BSIT', 4, 'BSIT-BATCH2025.png'),
(2772, 91094, 'password', 'Demo', 'SlickLab', 'BSIT', 0, 'igrad.jpg'),
(2773, 20202020, '$2y$10$bRiybm.A2CNX3gijqaS.KOaUp.pg7OpQtTN5Rooz3N1GKrBy.huIC', 'TEST', 'DEMO', 'Upwor', 4, 'Screenshot 2025-04-15 201252.png');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `election_results`
--
ALTER TABLE `election_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `election_status`
--
ALTER TABLE `election_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `election_results`
--
ALTER TABLE `election_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `election_status`
--
ALTER TABLE `election_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2774;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
