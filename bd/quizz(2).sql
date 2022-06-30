-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 juin 2022 à 18:26
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `id_choix` int(200) NOT NULL,
  `reponse` varchar(200) NOT NULL,
  `bonnereponse` tinyint(1) NOT NULL,
  `id_question` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`id_choix`, `reponse`, `bonnereponse`, `id_question`) VALUES
(1, 'Ramsès II', 0, 1),
(2, 'Khéops', 1, 1),
(3, 'Ptolémée Ier', 0, 1),
(4, 'Nécropole de Memphis', 0, 2),
(5, 'Nécropole de Thèbes', 0, 2),
(6, 'Nécropole de Gizeh', 1, 2),
(7, 'Khéphren', 0, 3),
(8, 'Mykérinos', 0, 3),
(9, 'Saqqarah', 1, 3),
(10, 'Bagdad', 0, 4),
(11, 'Babylone', 1, 4),
(12, 'Ur', 0, 4),
(13, 'Nabuchonodosor II', 1, 5),
(14, 'Sémiramis', 0, 5),
(15, 'Agamemnon', 0, 5),
(16, 'Le Jourdain', 0, 6),
(17, 'L\'Euphrate', 1, 6),
(18, 'Le Tigre', 0, 6),
(19, 'Zeus', 1, 7),
(20, 'Poséidon', 0, 7),
(21, 'Jupiter', 0, 7),
(22, 'Marbre et dorures', 0, 8),
(23, 'Or et Ivoire', 1, 8),
(24, 'Bronze et Argent', 0, 8),
(25, 'Myron', 0, 9),
(26, 'Praxitèle', 0, 9),
(27, 'Phidias', 1, 9),
(28, 'Athéna', 0, 10),
(29, 'Artémis', 1, 10),
(30, 'Aphrodite', 0, 10),
(31, 'Ménélas', 0, 11),
(32, 'Hérode', 0, 11),
(33, 'Crésus', 1, 11),
(34, 'Panthéon', 0, 12),
(35, 'Parthénon', 0, 12),
(36, 'Artémision', 1, 12),
(37, 'Delphes', 0, 13),
(38, 'Halicarnasse', 1, 13),
(39, 'Athènes', 0, 13),
(40, 'Alexandre le Grand', 0, 14),
(41, 'Mausole', 1, 14),
(42, 'Agamemnon', 0, 14),
(43, 'Théodore de Samos', 0, 15),
(44, 'Pythéos de Priène', 1, 15),
(45, 'Léocharès', 0, 15),
(46, ' Corinthe', 0, 16),
(47, ' Minos', 0, 16),
(48, 'Rhodes', 1, 16),
(49, 'Hélios', 1, 17),
(50, 'Apollon', 0, 17),
(51, 'Poséidon', 0, 17),
(52, 'Sostrate de Cnide', 0, 18),
(53, 'Lysippe', 0, 18),
(54, 'Charès de Lindos', 1, 18),
(55, 'Alexandrie', 1, 19),
(56, 'Le Caire', 0, 19),
(57, 'Carthage', 0, 19),
(58, 'Ptolémée Ier', 1, 20),
(59, 'Cléopâtre', 0, 20),
(60, 'Toutânkhamon', 0, 20),
(61, 'oui', 1, 21),
(62, 'non', 0, 21),
(63, 'Antipater de Sidon', 0, 22),
(64, 'Callimaque de Cyrène', 0, 22),
(65, 'Philon de Byzance', 1, 22);

-- --------------------------------------------------------

--
-- Structure de la table `demande_quizzeur`
--

CREATE TABLE `demande_quizzeur` (
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_img` int(200) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(200) NOT NULL,
  `intituléQuestion` varchar(200) NOT NULL,
  `difficulter` int(200) NOT NULL,
  `date_creation` date NOT NULL,
  `commentaire` varchar(600) NOT NULL,
  `id_img` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `intituléQuestion`, `difficulter`, `date_creation`, `commentaire`, `id_img`) VALUES
(1, 'A quel pharaon était dédiée la Grande pyramide d\'Egypte, la première des sept merveilles du monde antique ?', 0, '2022-06-28', 'Tombeau du pharaon Khéops, la Grande pyramide fut édifiée il y a plus de 4 500 ans, sous la IVe dynastie. Elle est la seule des sept merveilles du monde de l\'Antiquité à avoir survécu jusqu\'à nos jours. ', 0),
(2, 'Comment appelle-t-on cet ensemble de tombeaux comportant plusieurs pyramides datant de l\'Ancien Empire égyptien ?', 0, '2022-06-28', 'La pyramide de Khéops fut, jusqu\'au début du xxe siècle, le plus volumineux et le plus massif monument jamais construit par l\'homme. Elle a détenu le record de la hauteur (147m) durant 4 000 ans ', 0),
(3, 'Laquelle de ces pyramides ne trouve-t-on pas sur ce site ?', 0, '2022-06-28', 'Saqqarah est une vaste nécropole de la région de Memphis. On y trouve la première pyramide à degrés, construite pour le pharaon Djéser par son architecte Imhotep, au cours de la IIIe dynastie de l\'Ancien Empire.', 0),
(4, 'Dans quelle ville de Mésopotamie se trouvent les jardins suspendus qui constituent la deuxième merveille du monde antique ?', 0, '2022-06-28', 'Babylone est également une ville mythique pour la Tour de Babel et pour ses remparts. Les jardins suspendus dateraient du VIe siècle avant JC. Ils auraient disparus vers le IIIe siècle av. J. -C. , avec le déclin puis l\'abandon de la cité.', 0),
(5, 'Quel roi a décidé la construction de cette merveille en l\'honneur de son épouse ?', 0, '2022-06-28', 'Nadochonodosor (604-562 av J. -C. ) aurait fait construire cet édifice pour son épouse Amytis, originaire de Médie, pour soigner sa nostalgie de son pays natal et de sa verdure, qui contrastait avec le relief plat et le climat aride de Babylone. Ce n\'est que plus tard que le nom de Sémiramis, la reine mythique assyrienne, fut accolé à ces jardins. ', 0),
(6, 'Quel fleuve fut détourné par le système d\'irrigation le plus complexe de l\'Antiquité ? Les voyageurs étaient émerveillés par la splendeur luxuriante de ces jardins situés en pleine zone aride', 0, '2022-06-28', 'Selon les historiens, toute une \"machinerie hydraulique\" permettait d\'amener l\'eau jusqu\'aux jardins situés sur des batiments aménagés en terrasses. Les jardins suspendus seraient constitués de cinq terrasses superposées.', 0),
(7, 'A quel dieu de la mythologie grecque était dédié le temple à Olympie, dont la statue constitue la troisième merveille du monde antique ?', 0, '2022-06-28', 'Le temple colossal de Zeus Olympien, de style dorique (64, 2 m de long, 24, 6 m de large), fut érigé entre 470 et 456 av. J. -C. ', 0),
(8, 'Avec quels matériaux l\'immense statue de ce dieu (12m de hauteur) avait-elle été construite ?', 0, '2022-06-28', 'On désigne sous le terme \"chryséléphantines\" les statues réalisées à l\'aide de ces deux matériaux.', 0),
(9, 'A quel sculpteur grec devait-on ce chef-d\'oeuvre aujourd\'hui disparu ?', 0, '2022-06-28', ' La statue de Zeus a été détruite lors d\'un incendie en 475, à Constantinople où elle avait été transportée.', 0),
(10, 'A quelle déesse était dédié le Temple d\'Ephèse qui constitue la quatrième merveille du monde antique ?', 0, '2022-06-28', 'Chersiphron est l\'architecte du temple d\'Artémis construit vers 550 avant JC. Le Temple était connu pour ses dimensions colossales (137, 74 m de longueur et 71, 74 m de largeur) et la richesse de sa décoration', 0),
(11, 'Quel roi de Lydie, connu pour sa grande richesse, a financé sa construction ?', 0, '2022-06-28', ' Le temple fut incendié en -356 par Érostrate, qui voulait ainsi se rendre célèbre. Apprenant le mobile de l\'incendiaire qui avait détruit le temple qui faisait l\'envie de tous les Grecs, les magistrats de la cité le firent torturer et tuer.', 0),
(12, 'Sous quel nom ce temple est-il également connu ?', 0, '2022-06-28', 'Les archéologues ont pu identifier trois temples successifs construits sur le même emplacement que le temple d\'Artémis à Éphèse. Il ne reste aujourd\'hui sur le site plus qu\'une seule colonne du temple', 0),
(13, 'Dans quelle ville se trouve le Mausolée qui constitue la cinquième merveille du monde antique ?', 0, '2022-06-28', 'Le Mausolée a été construit vers -350. Haut d\'environ 45 mètres, le Mausolée d\'Halicarnasse était orné de sculptures sur ses quatre côtés', 0),
(14, 'Pour quel haut personnage ce tombeau avait-il été érigé ?', 0, '2022-06-28', 'Mausole était un satrape (Gouverneur de Carie) d\'origine grecque de l\'Empire achéménide ', 0),
(15, 'Qui est l\'architecte principal de cette oeuvre monumentale ?', 0, '2022-06-28', 'Le batiment commença à subir de graves détériorations à partir du IVe siècle (guerres d\'invasion , seismes, exploitation en carrière)', 0),
(16, 'Sur quelle île grecque se trouve le célèbre colosse qui constitue la sixième merveille du monde antique ?', 0, '2022-06-28', 'Le colosse fut construit en -292 à l\'entrée du port de Rhodes.', 0),
(17, 'Quelle divinité gardant l\'entrée du port représentait-il ?', 0, '2022-06-28', 'Le Colosse de Rhodes était une statue d\'Hélios (le dieu du Soleil). La statue devait avoir une armature de bois et recouverte de bronze.', 0),
(18, 'Quel est le nom du sculpteur et architecte de ce colosse de 30m de haut ?', 0, '2022-06-28', 'Cette gigantesque effigie fut renversée en -226 par un tremblement de terre. Cassée au niveau des genoux, elle s\'effondra et tomba en morceaux. La statue brisée resta sur place jusqu\'en 654. Aujourd\'hui, il ne reste plus rien sur l\'emplacement.', 0),
(19, 'Dans quelle ville se trouve le phare qui constitue la septième merveille du monde antique ?', 0, '2022-08-28', 'Sa construction aurait débuté vers 290 avant notre ère et duré une quinzaine d\'années. Il était situé sur Île de Pharos à Alexandrie (Égypte). Son architecte est Sostrate de Cnide.', 0),
(20, 'Quel pharaon a ordonné sa construction ?', 0, '2022-06-28', 'Les travaux sont initiés par Ptolémée Ier mais celui-ci meurt avant la fin du chantier qui est achevé sous le règne de son fils Ptolémée II.', 0),
(21, 'Le phare se dressait-il encore pendant l\'époque des croisades (1095-1291) ?', 0, '2022-06-28', 'Endommagé et restauré plusieurs fois à partir du IVe siècle, il fut presque entièrement détruit en 1303 par un tremblement de terre. Il avait une hauteur d\'environ 135 m et son rayon de visibilité s\'étendait sur environ 50 km.', 0),
(22, 'A quel poète grec doit-on la première liste des 7 merveilles du monde antique telle qu\'on la connait de nos jours ? (à une exception près)', 0, '2022-06-28', 'Antipater a repris la liste de Philon de Byzance dans un poème datant d\'environ 140 av. J. -C. : « J\'ai contemplé le rempart de la superbe Babylone où peuvent courir les chars, le Zeus des bords de l\'Alphée, les Jardins suspendus, le colosse d\'Hélios, l\'énorme travail des hautes pyramides, l\'opulent tombeau de Mausole ;mais quand je vis la maison d\'Artémis qui s\'élance jusqu\'aux nues, tout le reste fut éclipsé, et je dis : « hormis le sublime Olympe, l\'œil d\'Hélios vit-il jamais une chose semblable ! » Le Phare a remplacé les remparts dans les listes tardives', 0);

-- --------------------------------------------------------

--
-- Structure de la table `quizzs`
--

CREATE TABLE `quizzs` (
  `id_quizz` int(200) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `difficulter` int(200) NOT NULL,
  `date_creation` date NOT NULL,
  `id_user` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quizzs`
--

INSERT INTO `quizzs` (`id_quizz`, `titre`, `difficulter`, `date_creation`, `id_user`) VALUES
(1, 'Les sept merveilles du monde antique  ', 2, '2022-06-23', 1),
(2, '21\r\nLes nouvelles merveilles du monde ', 2, '2022-06-23', 1),
(3, 'Peinture, sculpture et architecture ', 2, '2022-06-23', 1),
(4, 'L\'architecture  ', 2, '2022-06-23', 1),
(5, 'Notions d\'architecture  ', 2, '2022-06-23', 1),
(6, 'Les églises : des oeuvres d\'art ', 2, '2022-06-26', 1),
(7, 'Antoni Gaudí ', 2, '2022-06-23', 1),
(8, 'C\'est un scandale !  ', 2, '2022-06-23', 1),
(9, 'Peinture, Sculture, Musique, Architecture ', 2, '2022-06-23', 1),
(10, 'A11 - Art et culture ', 2, '2022-06-23', 1),
(11, 'De l\'art - n°1 ', 2, '2022-06-23', 1),
(12, 'A6 - Splendeurs du Moyen Âge ', 3, '2022-06-23', 1),
(13, 'Complètement timbré (51) : Et Dieu dans tout ça ?  ', 3, '2022-06-23', 1),
(14, 'Complètement timbré (55) : Les voies de St-Jacques  ', 2, '2022-06-23', 1),
(15, 'Complètement timbré (27) : vive l\'argot...hique !  ', 2, '2022-06-23', 1),
(16, 'Reconnaître les formes de l\'art grec', 2, '2022-06-23', 1),
(17, 'Complètement timbré (51 bis) : Et Dieu dans tout ça ?  ', 2, '2022-06-23', 1),
(18, '10 Monuments de l\'architecture contemporaine ', 2, '2022-06-23', 1),
(19, 'Beaux arts', 2, '2022-06-23', 1),
(20, 'Complètement timbré (30) : Comment en venir roman ?', 2, '2022-06-23', 1),
(21, 'Complètement timbré (28) : vive l\'argot...hique !', 2, '2022-06-23', 1),
(22, 'Architecture de nos régions ', 2, '2022-06-23', 1),
(23, 'Les monuments', 2, '2022-06-23', 1),
(24, '10\r\nLe Taj Mahâl ', 2, '2022-06-23', 1),
(25, 'Architecture de l\'antiquité méditerranéenne ', 2, '2022-06-23', 2),
(26, 'Art et culture - 9   ', 2, '2022-06-23', 1),
(27, 'Sculpture : En France, on a de l\'art(r)iste !', 2, '2022-06-23', 1),
(37, '', 2, '0000-00-00', 1),
(38, '', 2, '0000-00-00', 1),
(39, '', 2, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `quizz_question`
--

CREATE TABLE `quizz_question` (
  `id_quizz` int(200) NOT NULL,
  `id_question` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quizz_question`
--

INSERT INTO `quizz_question` (`id_quizz`, `id_question`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22);

-- --------------------------------------------------------

--
-- Structure de la table `quizz_theme`
--

CREATE TABLE `quizz_theme` (
  `id_theme` int(11) NOT NULL,
  `id_quizz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quizz_theme`
--

INSERT INTO `quizz_theme` (`id_theme`, `id_quizz`) VALUES
(1, 1),
(1, 1),
(2, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` int(200) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `nom`) VALUES
(1, 'Architecture'),
(2, 'Arts'),
(3, 'Cinéma'),
(4, 'Culture générale'),
(5, 'Divers'),
(6, 'Médecine'),
(7, 'Musique'),
(8, 'Histoire'),
(9, 'Sport'),
(10, 'Sciences'),
(11, 'Géographie et géopolitique'),
(12, 'Littérature'),
(13, 'Spiritualité');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(200) NOT NULL,
  `speudo` varchar(200) NOT NULL,
  `e-mail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(200) NOT NULL,
  `isconnect` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `speudo`, `e-mail`, `password`, `role`, `isconnect`) VALUES
(1, 'df', 'foman@gmail.com', '123', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user-quizz`
--

CREATE TABLE `user-quizz` (
  `id_user` int(200) NOT NULL,
  `id_quizz` int(200) NOT NULL,
  `score` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user-quizz`
--

INSERT INTO `user-quizz` (`id_user`, `id_quizz`, `score`) VALUES
(1, 1, '10'),
(2, 1, '10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD PRIMARY KEY (`id_choix`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_img`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Index pour la table `quizzs`
--
ALTER TABLE `quizzs`
  ADD PRIMARY KEY (`id_quizz`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `choix`
--
ALTER TABLE `choix`
  MODIFY `id_choix` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_img` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `quizzs`
--
ALTER TABLE `quizzs`
  MODIFY `id_quizz` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
