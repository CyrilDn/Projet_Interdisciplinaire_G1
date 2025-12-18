-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2025 at 10:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_brassin_or`
--

-- --------------------------------------------------------

--
-- Table structure for table `brassin`
--

CREATE TABLE `brassin` (
  `id_brassin` int NOT NULL,
  `nom_brassin` varchar(25) NOT NULL,
  `date_debut` date NOT NULL,
  `volume` int NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `id_ingredient` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brassin`
--

INSERT INTO `brassin` (`id_brassin`, `nom_brassin`, `date_debut`, `volume`, `statut`, `id_ingredient`) VALUES
(1, 'Brassin Blonde', '2025-12-16', 40, 0, 0),
(2, 'Brassin Brune', '2025-12-17', 25, 0, 0),
(3, 'Brassin Ambrée', '2025-12-10', 45, 1, 0),
(4, 'Brassin Blanche', '2025-12-16', 30, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id_document` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `type_doc` varchar(50) NOT NULL,
  `date_ajout` date NOT NULL,
  `chemin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id_employe` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `specialisation` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `occupe` varchar(1) NOT NULL,
  `id_materiel` int NOT NULL,
  `id_brassin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id_employe`, `nom`, `specialisation`, `occupe`, `id_materiel`, `id_brassin`) VALUES
(1, 'Jean', 'Brasseur', '1', 2, 2),
(2, 'Pierre', 'Directeur', '1', 1, 3),
(3, 'Maxime', 'Brasseur', '0', 1, 1),
(4, 'Cyril', 'Brasseur', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int NOT NULL,
  `type_evenement` varchar(25) NOT NULL,
  `debut_evenement` date NOT NULL,
  `fin_evenement` date NOT NULL,
  `id_employe` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `type_evenement`, `debut_evenement`, `fin_evenement`, `id_employe`) VALUES
(1, 'Fête de Noël', '2025-12-25', '2025-12-25', 2),
(2, 'Dégustation de nos bières', '2025-12-29', '2025-12-30', 4),
(3, 'Visite du site', '2026-12-29', '2025-12-30', 3),
(4, 'Réveillon du nouvel an', '2025-12-31', '2025-12-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_ingredient` int NOT NULL,
  `nom_ingredient` varchar(25) NOT NULL,
  `quantite_kg` float NOT NULL,
  `seuil_min_kg` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id_ingredient`, `nom_ingredient`, `quantite_kg`, `seuil_min_kg`) VALUES
(1, 'Levure', 760, 250),
(2, 'Malts', 532.4, 150),
(3, 'Houblons', 639, 150);

-- --------------------------------------------------------

--
-- Table structure for table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `utilise` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `nom`, `utilise`) VALUES
(1, 'Moulin à malte', 0),
(2, 'Gants de brassage', 0),
(3, 'Verre Gradué', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `quantite` int NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom`, `quantite`, `prix`) VALUES
(1, 'Bière Brune', 200, 11.5),
(2, 'Bière Blonde', 140, 9.5),
(3, 'Bière Ambre', 50, 13.5),
(4, 'Bière Blanche', 70, 10.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brassin`
--
ALTER TABLE `brassin`
  ADD PRIMARY KEY (`id_brassin`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_employe`),
  ADD KEY `fk_employe_materiel` (`id_materiel`),
  ADD KEY `fk_employe_brassin` (`id_brassin`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`),
  ADD KEY `fk_evenement_employe` (`id_employe`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_ingredient`);

--
-- Indexes for table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brassin`
--
ALTER TABLE `brassin`
  MODIFY `id_brassin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_employe` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id_ingredient` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id_materiel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `fk_employe_brassin` FOREIGN KEY (`id_brassin`) REFERENCES `brassin` (`id_brassin`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_employe_materiel` FOREIGN KEY (`id_materiel`) REFERENCES `materiel` (`id_materiel`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_evenement_employe` FOREIGN KEY (`id_employe`) REFERENCES `employe` (`id_employe`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
