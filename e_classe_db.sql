-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 fév. 2022 à 11:52
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_classe_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title_course` varchar(30) NOT NULL,
  `duree_course` varchar(20) NOT NULL,
  `prix_course` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `title_course`, `duree_course`, `prix_course`) VALUES
(18, 'PHP', 'OS', 190),
(19, 'What It Means to Be You', '2j', 65),
(23, 'death note ', '4j', 200),
(28, 'HTML', '5j', 200),
(29, 'java', '1ans', 10000);

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`id`, `email`, `password`) VALUES
(1, 'oumaimaabouelhaitam@', '1234'),
(2, 'oumaimaabouelhaitam@gmail.com', '1');

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `payment_schedule` varchar(20) NOT NULL,
  `b_Number` int(11) NOT NULL,
  `Amount_paid` float NOT NULL,
  `Balance_amount` float NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment_details`
--

INSERT INTO `payment_details` (`id`, `nom`, `payment_schedule`, `b_Number`, `Amount_paid`, `Balance_amount`, `dat`) VALUES
(1, 'kati', '536353', 464654, 0, 0, '0000-00-00'),
(12, 'oumaima', '12929', 3232323, 323232, 0, '0000-00-00'),
(26, 'KATI', '12929', 3232323, 323232, 0, '2022-02-16'),
(27, 'amal', '12929', 3546789, 2345680, 0, '2022-02-12');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `dt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `img`, `nom`, `email`, `phone1`, `phone2`, `dt`) VALUES
(51, 'téléchargement.png', 'haitam', 'omaima9ouma@gmail.com', 1234, 123, '2022-02-18'),
(52, 'téléchargement.png', 'RANA', 'omaima9ouma@gmail.com', 1234, 123, '2022-02-18'),
(53, 'youcode.png', 'MERY', 'MERY@GMAIL.COM', 12345678, 324567, '2022-02-18'),
(56, 'hero.png', 'hajar', 'hajar@gmail.com', 2147483647, 584848, '2022-02-11'),
(60, 'hero.png', 'nassim', 'nassim@gmail.com', 1234, 32462464, '2022-02-18'),
(63, 'youcode.png', 'johan', 'johan@gmail.com', 2147483647, 3333, '2022-02-17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_stud` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
