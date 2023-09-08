-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 sep. 2023 à 13:41
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reselve_sphere`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_services`
--

CREATE TABLE `commentaires_services` (
  `id_commentaire` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `date_de_création` datetime NOT NULL,
  `commentaire` varchar(400) NOT NULL,
  `opérateur` varchar(30) NOT NULL,
  `remarque_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires_services`
--

INSERT INTO `commentaires_services` (`id_commentaire`, `id_service`, `date_de_création`, `commentaire`, `opérateur`, `remarque_id`) VALUES
(11, 117, '2023-09-02 09:17:18', 'NHAR KBIR HADA', 'layla.husseini@gmail.com', 4308),
(12, 117, '2023-09-02 09:20:30', 'ggg', 'layla.husseini@gmail.com', 4308),
(13, 117, '2023-09-02 09:21:54', 'tes', 'layla.husseini@gmail.com', 4308),
(14, 117, '2023-09-02 09:23:04', 'gg', 'layla.husseini@gmail.com', 4308),
(15, 117, '2023-09-02 09:25:01', 'NHAR KBIR HADA', 'layla.husseini@gmail.com', 4308);

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `group_id` int(11) NOT NULL,
  `name` varchar(201) NOT NULL,
  `niveau` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`group_id`, `name`, `niveau`) VALUES
(1, 'GRP_centre_d--apostrophe--appel_1', 'L0'),
(2, 'GRP_centre_d--apostrophe--appel_2', 'L0'),
(3, 'GRP_centre_d--apostrophe--appel_3', 'L0'),
(4, 'GRP_Réseaux_1', 'L1'),
(5, 'GRP_Réseaux_2', 'L1'),
(6, 'GRP_cyber_1', 'L1');

-- --------------------------------------------------------

--
-- Structure de la table `operator`
--

CREATE TABLE `operator` (
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `remarques_services`
--

CREATE TABLE `remarques_services` (
  `remarque_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `remarque` longtext NOT NULL,
  `opérateur` longtext NOT NULL,
  `type_service` varchar(50) NOT NULL,
  `date_de_remarque` datetime DEFAULT NULL,
  `niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `remarques_services`
--

INSERT INTO `remarques_services` (`remarque_id`, `service_id`, `remarque`, `opérateur`, `type_service`, `date_de_remarque`, `niveau`) VALUES
(4310, 118, 'Est ce que vous avez essayé de redémarrer le pc ?', 'layla.husseini@gmail.com', 'interne', '2023-09-02 18:40:12', 'L0'),
(4311, 118, 'Est ce que vous avez essayé de redémarrer le pc ?', 'layla.husseini@gmail.com', 'externe', '2023-09-02 18:41:58', '');

-- --------------------------------------------------------

--
-- Structure de la table `réaffectation`
--

CREATE TABLE `réaffectation` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `réaffecté_par` varchar(50) NOT NULL,
  `justification` varchar(300) NOT NULL,
  `groupe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `demandé_par` varchar(50) NOT NULL,
  `demandé_pour` varchar(50) NOT NULL,
  `état` varchar(50) DEFAULT NULL,
  `groupes_affectation` varchar(100) NOT NULL,
  `date_de_création` varchar(50) NOT NULL,
  `date_de_résolution` varchar(50) NOT NULL,
  `emplacement` varchar(40) NOT NULL,
  `SLA` varchar(40) NOT NULL,
  `details` longtext DEFAULT NULL,
  `contact_method` varchar(50) DEFAULT NULL,
  `urgence` varchar(200) DEFAULT NULL,
  `categorie` varchar(200) DEFAULT NULL,
  `prise_L0_par` varchar(50) DEFAULT NULL,
  `prise_L1_par` varchar(50) DEFAULT NULL,
  `Vu_par` varchar(300) DEFAULT '__',
  `diagnostique` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `titre`, `demandé_par`, `demandé_pour`, `état`, `groupes_affectation`, `date_de_création`, `date_de_résolution`, `emplacement`, `SLA`, `details`, `contact_method`, `urgence`, `categorie`, `prise_L0_par`, `prise_L1_par`, `Vu_par`, `diagnostique`) VALUES
(117, 'activation windows', 'layla.husseini@gmail.com', 'amina.moussaoui@gmail.com', 'ouverte au niveau L0', '__GRP_centre_d--apostrophe--appel_3', '2023-08-31 01:59:09', '', 'Abdoune/Merah', '', '&lt;p&gt;Je veux récupérer le compte &lt;strong&gt;windows &lt;/strong&gt;que j&#039;ai perdu&lt;img src=&quot;data:image/png;base64,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&quot;&gt;&lt;/p&gt;', 'email', 'modéré', 'Systèmes/Systèmes d<apostrophe/>exploitation', NULL, NULL, '__', NULL),
(118, 'activation windows', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'En cours de traitement en L0', '__GRP_centre_d--apostrophe--appel_3__', '2023-08-31 02:01:51', '', 'Gantour/Youssoufia', '', '&lt;p&gt;s&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', 'layla.husseini@gmail.com', '', '__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__layla.husseini@gmail.com__', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(119, 'activation windows', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'ouverte au niveau L0', '__GRP_centre_d--apostrophe--appel_3__', '2023-08-31 02:02:23', '', 'Gantour/Youssoufia', '', '&lt;p&gt;sss&lt;/p&gt;', 'email', 'mineur', 'Réseau/SDN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(120, '', 'layla.husseini@gmail.com', 'amina.moussaoui@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:03:36', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(121, 'activation windows', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:07:20', '', 'Gantour/Youssoufia', '', '&lt;p&gt;ddd&lt;/p&gt;', 'email', 'mineur', 'Réseau/VLAN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(122, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:09:47', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(123, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:11:01', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(124, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:11:49', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', 'NULL', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(125, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:12:28', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', 'NULL', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(126, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:13:23', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(127, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'open', '', '2023-08-31 02:15:05', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(128, '', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'open', '', '2023-08-31 02:16:41', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(129, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '', '2023-08-31 02:20:45', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(130, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '', '2023-08-31 02:22:42', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(131, 'f', 'layla.husseini@gmail.com', 'amina.moussaoui@gmail.com', 'open', '', '2023-08-31 02:24:08', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', '', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(132, 'xx', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'open', '', '2023-08-31 02:27:07', '', 'Gantour/Youssoufia', '', '&lt;p&gt;xx&lt;/p&gt;', 'téléphone', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(133, 'xx', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'open', '', '2023-08-31 02:29:37', '', 'Gantour/Youssoufia', '', '&lt;p&gt;x&lt;/p&gt;', 'téléphone', 'mineur', 'Réseau/SDN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(134, 'activation windows', 'layla.husseini@gmail.com', 'hamdaouihajar2000@gmail.com', 'ouverte au niveau L0', '', '2023-08-31 02:30:25', '', 'Gantour/Youssoufia', '', '&lt;p&gt;xxx&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(135, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'ouverte au niveau L0', '__GRP_centre_d<apostrophe/>appel_1__GRP_centre_d<apostrophe/>appel_2__GRP_centre_d<apostrophe/>appel', '2023-08-31 10:36:10', '', 'Gantour/Youssoufia', '', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', '', '', '', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(136, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-01 17:57:32', '', 'Gantour/Youssoufia', '', '&lt;p&gt;fffff&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, NULL, '__', '&lt;p&gt;Madrassa&lt;/p&gt;'),
(137, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-02 04:09:49', '', 'Gantour/Youssoufia', '', '&lt;p&gt;fff&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, NULL, '__', NULL),
(138, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-02 04:14:24', '', 'Gantour/Youssoufia', '', '&lt;p&gt;f&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, NULL, '__', NULL),
(139, 'testttttttt', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-02 04:15:14', '', 'Gantour/Youssoufia', '', '&lt;p&gt;testttttttttttttt&lt;/p&gt;', 'email', 'mineur', 'Réseau/LAN', NULL, NULL, '__', NULL),
(140, '', '', '', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-02 04:24:15', '', '', '', '', '', '', '', NULL, NULL, '__', NULL),
(141, '', 'layla.husseini@gmail.com', 'layla.husseini@gmail.com', 'open', '__GRP_centre_d--apostrophe--appel_1__GRP_centre_d--apostrophe--appel_2__GRP_centre_d--apostrophe--ap', '2023-09-02 04:24:26', '', 'Gantour/Youssoufia', '', '', 'email', 'mineur', 'Réseau/LAN', NULL, NULL, '__', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `is_he_admin` tinyint(1) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `user_image` varchar(500) NOT NULL DEFAULT 'userIcon.png',
  `is_RH` tinyint(1) DEFAULT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `postal_address` varchar(30) DEFAULT NULL,
  `postal_adresse` varchar(30) DEFAULT NULL,
  `drivers_license` varchar(30) DEFAULT NULL,
  `poste` varchar(200) DEFAULT NULL,
  `emplacement` varchar(200) DEFAULT NULL,
  `user_description` varchar(1000) DEFAULT NULL,
  `niveau` varchar(10) DEFAULT NULL,
  `is_plateform_admin` tinyint(1) DEFAULT NULL,
  `affectation_groups` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `user_id`, `user_email`, `user_phone`, `user_password`, `is_he_admin`, `gender`, `user_image`, `is_RH`, `CIN`, `birth_date`, `postal_address`, `postal_adresse`, `drivers_license`, `poste`, `emplacement`, `user_description`, `niveau`, `is_plateform_admin`, `affectation_groups`) VALUES
('Layla', 'Husseini', 45, 'layla.husseini@gmail.com', 2147483647, '123456', NULL, 'Female', 'userIcon.png', NULL, '987654321', '1995-05-15', NULL, '456 Rue des Amandiers, Ville', '987654321', 'Ingénieur en Génie Civil__2', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', 'L0', NULL, '__GRP_centre_d--apostrophe--appel_3__GRP_centre_d--apostrophe--appel_1__'),
('Amina', 'Moussaoui', 47, 'amina.moussaoui@gmail.com', 2147483647, '1234567', NULL, 'Female', 'userIcon.png', NULL, '789654123', '1985-07-18', NULL, '987 Avenue des Oliviers, Ville', '654321987', 'Spécialiste en Gestion des Déchets', 'Abdoune/Mera', 'Description de l\'utilisateur ici.', 'L1', NULL, '__GRP_centre_d--apostrophe--appel_3'),
('Nadia', 'Rami', 49, 'nadia.rami@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654321', '1990-06-30', NULL, '456 Avenue des Palmiers, Ville', '456987123', 'Ingénieur de Recherche en Énergie Renouvelable', 'Jorf Lasfar/CCI', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Khalid', 'Mansouri', 51, 'khalid.mansouri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '789456123', '1987-02-22', NULL, '987 Avenue des Roses, Ville', '987456012', 'Spécialiste en Sécurité Alimentaire', 'Gantour/Benguerir', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Ranya', 'Kadiri', 54, 'ranya.kadiri@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '123654789', '1993-08-03', NULL, '123 Boulevard des Artisans, Vi', '123456789', 'Directeur Juridique', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Amine', 'Zaïdi', 55, 'amine.zaidi@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '987123789', '1989-04-28', NULL, '456 Avenue des Cèdres, Ville', '789012345', 'Ingénieur en Mécanique Industrielle', 'Laayoune/Boucraa', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Mehdi', 'Hassani', 57, 'mehdi.hassani@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '789654123', '1991-11-25', NULL, '654 Chemin de la Vallée, Ville', '123789456', 'Directeur Commercial', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Omar', 'Hassani', 59, 'omar.hassani@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '789654321', '1990-06-30', NULL, '456 Avenue des Palmiers, Ville', '456987123', 'Ingénieur de Recherche en Énergie Renouvelable', 'Jorf Lasfar/CCI', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Khalid', 'Mansouri', 61, 'khalid.mansouri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '789456123', '1987-02-22', NULL, '987 Avenue des Roses, Ville', '987456012', 'Spécialiste en Sécurité Alimentaire', 'Gantour/Benguerir', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Fouzia', 'Haddi', 62, 'fouzia.haddi@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '456789654', '1994-10-08', NULL, '456 Chemin de la Mosquée, Vill', '123789654', 'Planificateur de Projet Industriel', 'Abdoune/Sidi Chennane/T1', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Rachid', 'Kadiri', 64, 'rachid.kadiri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '123654789', '1993-08-03', NULL, '123 Boulevard des Artisans, Vi', '123456789', 'Directeur Juridique', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nora', 'Zaïdi', 65, 'nora.zaidi@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '987123789', '1989-04-28', NULL, '456 Avenue des Cèdres, Ville', '789012345', 'Ingénieur en Mécanique Industrielle', 'Laayoune/Boucraa', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Hassan', 'Chakir', 66, 'hassan.chakir@gmail.com', 1237894560, '', NULL, 'Male', 'userIcon.png', NULL, '987654321', '1985-07-18', NULL, '987 Avenue des Oliviers, Ville', '654321987', 'Spécialiste en Gestion des Déchets', 'Abdoune/Mera', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Aïcha', 'Hassani', 67, 'aicha.hassani@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654123', '1991-11-25', NULL, '654 Chemin de la Vallée, Ville', '123789456', 'Directeur Commercial', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nadia', 'Rami', 69, 'nadia.rami@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654321', '1990-06-30', NULL, '456 Avenue des Palmiers, Ville', '456987123', 'Ingénieur de Recherche en Énergie Renouvelable', 'Jorf Lasfar/CCI', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Hassan', 'El Fassi', 70, 'hassan.elfassi@gmail.com', 1234560123, '', NULL, 'Male', 'userIcon.png', NULL, '987123654', '1998-04-12', NULL, '123 Boulevard du Marché, Ville', '789654012', 'Analyste en Commerce International', 'Abdoune/SOTREG', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Loubna', 'Mansouri', 71, 'loubna.mansouri@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789456123', '1987-02-22', NULL, '987 Avenue des Roses, Ville', '987456012', 'Spécialiste en Sécurité Alimentaire', 'Gantour/Benguerir', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Karim', 'Kadiri', 74, 'karim.kadiri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '123654789', '1993-08-03', NULL, '123 Boulevard des Artisans, Vi', '123456789', 'Directeur Juridique', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nora', 'Zaïdi', 75, 'nora.zaidi@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '987123789', '1989-04-28', NULL, '456 Avenue des Cèdres, Ville', '789012345', 'Ingénieur en Mécanique Industrielle', 'Laayoune/Boucraa', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Hassan', 'Chakir', 76, 'hassan.chakir@gmail.com', 1237894560, '', NULL, 'Male', 'userIcon.png', NULL, '987654321', '1985-07-18', NULL, '987 Avenue des Oliviers, Ville', '654321987', 'Spécialiste en Gestion des Déchets', 'Abdoune/Mera', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Aïcha', 'Hassani', 77, 'aicha.hassani@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654123', '1991-11-25', NULL, '654 Chemin de la Vallée, Ville', '123789456', 'Directeur Commercial', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nadia', 'Rami', 79, 'nadia.rami@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654321', '1990-06-30', NULL, '456 Avenue des Palmiers, Ville', '456987123', 'Ingénieur de Recherche en Énergie Renouvelable', 'Jorf Lasfar/CCI', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Khalid', 'Mansouri', 81, 'khalid.mansouri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '789456123', '1987-02-22', NULL, '987 Avenue des Roses, Ville', '987456012', 'Spécialiste en Sécurité Alimentaire', 'Gantour/Benguerir', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Fouzia', 'Haddi', 82, 'fouzia.haddi@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '456789654', '1994-10-08', NULL, '456 Chemin de la Mosquée, Vill', '123789654', 'Planificateur de Projet Industriel', 'Abdoune/Sidi Chennane/T1', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Samir', 'El Amrani', 83, 'samir.elamrani@gmail.com', 1234509876, '', NULL, 'Male', 'userIcon.png', NULL, '789654012', '1986-12-15', NULL, '789 Rue du Palais, Ville', '456789123', 'Gestionnaire de la Mobilité Internationale', 'Jorf Lasfar', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Rachid', 'Kadiri', 84, 'rachid.kadiri@gmail.com', 2147483647, '', NULL, 'Male', 'userIcon.png', NULL, '123654789', '1993-08-03', NULL, '123 Boulevard des Artisans, Vi', '123456789', 'Directeur Juridique', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nora', 'Zaïdi', 85, 'nora.zaidi@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '987123789', '1989-04-28', NULL, '456 Avenue des Cèdres, Ville', '789012345', 'Ingénieur en Mécanique Industrielle', 'Laayoune/Boucraa', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Hassan', 'Chakir', 86, 'hassan.chakir@gmail.com', 1237894560, '', NULL, 'Male', 'userIcon.png', NULL, '987654321', '1985-07-18', NULL, '987 Avenue des Oliviers, Ville', '654321987', 'Spécialiste en Gestion des Déchets', 'Abdoune/Mera', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Aïcha', 'Hassani', 87, 'aicha.hassani@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654123', '1991-11-25', NULL, '654 Chemin de la Vallée, Ville', '123789456', 'Directeur Commercial', 'Gantour/Youssoufia', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Nadia', 'Rami', 89, 'nadia.rami@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789654321', '1990-06-30', NULL, '456 Avenue des Palmiers, Ville', '456987123', 'Ingénieur de Recherche en Énergie Renouvelable', 'Jorf Lasfar/CCI', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Hassan', 'El Fassi', 90, 'hassan.elfassi@gmail.com', 1234560123, '', NULL, 'Male', 'userIcon.png', NULL, '987123654', '1998-04-12', NULL, '123 Boulevard du Marché, Ville', '789654012', 'Analyste en Commerce International', 'Abdoune/SOTREG', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Loubna', 'Mansouri', 91, 'loubna.mansouri@gmail.com', 2147483647, '', NULL, 'Female', 'userIcon.png', NULL, '789456123', '1987-02-22', NULL, '987 Avenue des Roses, Ville', '987456012', 'Spécialiste en Sécurité Alimentaire', 'Gantour/Benguerir', 'Description de l\'utilisateur ici.', NULL, NULL, ''),
('Ai', 'Hibara', 94, 'hamdaouihajar2000@gmail.com', 0, '', NULL, 'Femme', 'userIcon.png', NULL, 'FA1234', '2000-08-06', NULL, 'DDD', 'B', 'Directeur des Opérations__5', 'Abdoune/Khouribgaa Ville', 'RRR', NULL, NULL, ''),
('dddd', 'Hibara', 95, '', 0, '', NULL, 'Femme', 'userIcon.png', NULL, '', '0000-00-00', NULL, '', 'Aucun', 'Directeur Général__5', 'Abdoune/Khouribgaa Ville', '', NULL, NULL, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires_services`
--
ALTER TABLE `commentaires_services`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`group_id`);

--
-- Index pour la table `operator`
--
ALTER TABLE `operator`
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `remarques_services`
--
ALTER TABLE `remarques_services`
  ADD PRIMARY KEY (`remarque_id`);

--
-- Index pour la table `réaffectation`
--
ALTER TABLE `réaffectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires_services`
--
ALTER TABLE `commentaires_services`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `remarques_services`
--
ALTER TABLE `remarques_services`
  MODIFY `remarque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4312;

--
-- AUTO_INCREMENT pour la table `réaffectation`
--
ALTER TABLE `réaffectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
