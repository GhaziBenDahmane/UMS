-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 07:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadhem_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `image`) VALUES
(1, 'Signature d\'une convention INSAT- RFR', '<p>En présence des ministres de transport et de l\'enseignement supérieur et la recherche scientifique, les directeurs de l\'INSAT, de l\'EPT, de l\'ENIT, de l\'ENAU, de l\'ENSIT et de l\'ISTLS ont signé des conventions de ...</p>', '<h2>Signature d\'une convention INSAT- RFR (société du Réseau Ferroviaire Rapide de Tunis)</h2>\r\n<p>En présence des ministres de transport et de l\'enseignement supérieur et la recherche scientifique, les directeurs de l\'INSAT, de l\'EPT, de l\'ENIT, de l\'ENAU, de l\'ENSIT et de l\'ISTLS ont signé des conventions de partenariat avec la société du Réseau Ferroviaire Rapide de Tunis RFR, L\'objectif est d\'intégrer les jeunes ingénieurs dans un grand projet à l\'échelle nationale.</p>\r\n<p>Le projet consiste à relier le centre de Tunis à ses périphéries et banlieues par 5 nouvelles lignes de train.</p>\r\n<p>La convention signée permettra d\'impliquer les futures ingénieurs dans des stages de fin d\'études en rapport avec le transport ferroviaire.</p>', '2016-02-26 00:00:00', 'article1.jpe'),
(2, 'Inauguration Samsung Academy à l\'Insat', '<p>Le mercredi 02 décembre Samsung Tunisie, a inauguré une nouvelle « Samsung Academy » à l’Institut National des Sciences Appliquées et de Technologie (INSAT).Cette action s’inscrit dans le cadre du ... </p>', '<h2>Inauguration Samsung Academy à l\'Insat</h2>\r\n<p>Le mercredi 02 décembre Samsung Tunisie, a inauguré une nouvelle « Samsung Academy » à l’Institut National des Sciences Appliquées et de Technologie (INSAT).</p>\r\n<p>Cette action s’inscrit dans le cadre du programme « Hope For Youth » en vue de perpétrer les principes des activités citoyennes de Samsung en mettant à la disposition des jeunes de la technologie et du soutien nécessaires à la valorisation de leurs talents pour contribuer à construire un monde meilleur. En effet, grâce à un espace agréable et au matériel disponible (téléviseurs, tablettes et smartphones), les élèves ingénieurs ingénieurs pourront apprendre, créer, développer et tester des applications inédites ou des programmes innovants et pourront laisser libre court à leurs créativités pour développer les futures idées révolutionnaires ou les start-up de demain.</p>\r\n<table>\r\n<tr><td><img src="content/SamAca.jpe" alt="Not found"/>\r\n<td><img src="content/SamAca1.jpe" alt="Not found"/>\r\n<tr><td><img src="content/SamAca2.jpe" alt="Not found"/>\r\n<td><img src="content/SamAca3.jpe" alt="Not found"/>\r\n</table>', '2015-12-17 23:10:35', 'article2.jpe'),
(3, 'TuniRobots : trois gagnants qualifiés pour Eurorobots 2016', '<p>Le rideau est tombé sur la 7ème édition de la Journée nationale tunisienne de la robotique, TUNIROBOTS 2016, hier, le 24 avril à l’Institut national des sciences appliquées et de technologie ( INSAT ).\r\nCe concours ... </p>', '<h2>TuniRobots : trois gagnants qualifiés pour Eurorobots 2016</h2>\r\n<h3>Le rideau est tombé sur la 7ème édition de la Journée nationale tunisienne de la robotique, TUNIROBOTS 2016, hier, le 24 avril à l’Institut national des sciences appliquées et de technologie ( INSAT ).</h3>\r\n<p>Ce concours, dont l’objectif est de familiariser les jeunes avec le monde de la robotique et d’introduire la culture des technologies et de la robotique, a annoncé  la liste des équipes gagnante.  Trois équipes ont été primées à savoir : 1) Step One (ESPRIT) – 2) IEEE ULT SB (ULT) – 3) Aerobotix (INSAT).</p>\r\n<p>Contacté par leconomistemaghrebin.com, Ibtissem Boughzou, responsable du club électromécanique à Esprit et de l’équipe qui a remporté le premier prix, a affirmé qu’avec ce prix l’équipe a été qualifiée pour le concours Eurobotos France 2016 (qui se tiendra le 20 mai). Cette équipe, composée d’étudiants en électromécaniques a pu concevoir un robot conformément au cahier des charges conçu par le jury du concours. Différent de la 6ème  édition, le cahier des charges de la 7ème édition exigeait  la conception d’un robot capable de jouer des scènes théâtrales  et  cinématographiques.  Sur chaque fonction accomplie par le robot, l’équipe en compétition gagne un certain nombre de points. Après les éliminatoires, seules trois équipes ont été primées.</p>\r\n<p>Mais en quoi ces robots peuvent être utiles au secteur culturel ou industriel?</p>\r\n<p>En premier lieu ces robots permettent aux étudiants d’appliquer leurs  connaissances en matière d’électronique, de mécanisme et d’autres disciplines. S’ajoute à cela qu’ils peuvent être adaptés aux besoins de l’entreprise et aux besoins de la scène culturelle explique notre interlocutrice : « Il suffit qu’un chef d’entreprise exprime son besoin pour concevoir  le robot adéquat  », précise-t-elle.</p>\r\n<p>Notons que le domaine de la robotique connait des avancées considérables en Tunisie, notamment grâce aux écoles d’ingénieurs à l’instar de l’INSAT et l’ENISO. Notons qu’une autre équipe tunisienne composée d’élèves- ingénieurs s’est distinguée au World Robot Olympiade ??WRO 2015.</p>', '2016-04-27 23:20:24', 'article3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Documents`
--

CREATE TABLE `Documents` (
  `matiereID` int(10) UNSIGNED NOT NULL,
  `lvlID` int(10) UNSIGNED NOT NULL,
  `documentID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` enum('C','AD','E') NOT NULL,
  `nom_sur_disque` varchar(100) NOT NULL,
  `annee` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `prenom` varchar(200) NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `carteEtudiant` int(7) NOT NULL,
  `filiereID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Etudiant`
--

INSERT INTO `Etudiant` (`prenom`, `cin`, `nom`, `carteEtudiant`, `filiereID`) VALUES
('Nadhem', 7473661, 'FEKIH HASSEN', 1400278, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `eventID` int(11) UNSIGNED NOT NULL,
  `eventDateAndTime` datetime NOT NULL,
  `eventPoster` varchar(200) NOT NULL,
  `eventTitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`eventID`, `eventDateAndTime`, `eventPoster`, `eventTitle`) VALUES
(1, '2016-04-16 08:00:00', 'tunirobots2016.jpg', 'TUNIROBOTS 2016'),
(2, '2016-04-30 08:00:00', 'securiday2016.png', 'SECURIDAY 2016'),
(3, '2016-04-29 08:00:00', 'JNB2016.jpg', 'Journée Nationale du Bénévolat');

-- --------------------------------------------------------

--
-- Table structure for table `FiliereFullinfo`
--

CREATE TABLE `FiliereFullinfo` (
  `filiereID` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `short_name` varchar(5) NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FiliereFullinfo`
--

INSERT INTO `FiliereFullinfo` (`filiereID`, `full_name`, `short_name`, `icon`) VALUES
(1, 'Génie Logiciel', 'GL', 'fa-code'),
(2, 'Informatique Industrielle & Automatique', 'IIA', 'fa-cogs'),
(3, 'Réseaux Informatiques et Télécommunications', 'RT', 'fa-wifi'),
(4, 'Instrumentation et Maintenance Industrielle', 'IMI', 'fa-wrench'),
(5, 'Chimie Industrielle', 'CH', 'fa-flask'),
(6, 'Biologie industrielle', 'BIO', 'fa-leaf'),
(7, 'Tronc Commun MPI', 'MPI', 'fa-graduation-cap'),
(8, 'Tronc Commun CBA', 'CBA', 'fa-filter');

-- --------------------------------------------------------

--
-- Table structure for table `Matiere`
--

CREATE TABLE `Matiere` (
  `matiereID` int(10) UNSIGNED NOT NULL,
  `coeiff` double NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Matiere`
--

INSERT INTO `Matiere` (`matiereID`, `coeiff`, `nom`) VALUES
(1, 3, 'Analyse'),
(2, 4, 'Electrotechnique');

-- --------------------------------------------------------

--
-- Table structure for table `MatiereParFiliere`
--

CREATE TABLE `MatiereParFiliere` (
  `lvlID` int(10) UNSIGNED NOT NULL,
  `matiereID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MatiereParFiliere`
--

INSERT INTO `MatiereParFiliere` (`lvlID`, `matiereID`) VALUES
(1, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Niveau`
--

CREATE TABLE `Niveau` (
  `lvlID` int(10) UNSIGNED NOT NULL,
  `filiereID` int(10) UNSIGNED NOT NULL,
  `valeur` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Niveau`
--

INSERT INTO `Niveau` (`lvlID`, `filiereID`, `valeur`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 2, 2),
(6, 2, 3),
(7, 2, 4),
(8, 2, 5),
(9, 3, 2),
(10, 3, 3),
(11, 3, 4),
(12, 3, 5),
(13, 4, 2),
(14, 4, 3),
(15, 4, 4),
(16, 4, 5),
(17, 5, 2),
(18, 5, 3),
(19, 5, 4),
(20, 5, 5),
(21, 6, 2),
(22, 6, 3),
(23, 6, 4),
(24, 6, 5),
(27, 7, 1),
(28, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Note`
--

CREATE TABLE `Note` (
  `valeur` double NOT NULL,
  `matiereID` int(10) UNSIGNED NOT NULL,
  `lvlID` int(10) UNSIGNED NOT NULL,
  `carteEtudiant` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `Documents`
--
ALTER TABLE `Documents`
  ADD PRIMARY KEY (`documentID`),
  ADD KEY `matiereID` (`matiereID`,`documentID`),
  ADD KEY `lvlID` (`lvlID`);

--
-- Indexes for table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`cin`,`carteEtudiant`),
  ADD KEY `carteEtudiant` (`carteEtudiant`,`filiereID`),
  ADD KEY `filiereID` (`filiereID`),
  ADD KEY `cin` (`cin`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `FiliereFullinfo`
--
ALTER TABLE `FiliereFullinfo`
  ADD PRIMARY KEY (`filiereID`),
  ADD KEY `full_name` (`full_name`,`short_name`),
  ADD KEY `short_name` (`short_name`);

--
-- Indexes for table `Matiere`
--
ALTER TABLE `Matiere`
  ADD PRIMARY KEY (`matiereID`),
  ADD KEY `matiereID` (`matiereID`);

--
-- Indexes for table `MatiereParFiliere`
--
ALTER TABLE `MatiereParFiliere`
  ADD PRIMARY KEY (`matiereID`,`lvlID`),
  ADD KEY `filiereID` (`lvlID`,`matiereID`);

--
-- Indexes for table `Niveau`
--
ALTER TABLE `Niveau`
  ADD PRIMARY KEY (`lvlID`),
  ADD KEY `filiereID` (`filiereID`),
  ADD KEY `valeur` (`valeur`),
  ADD KEY `lvlID` (`lvlID`);

--
-- Indexes for table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`matiereID`,`lvlID`,`carteEtudiant`),
  ADD KEY `matiereID` (`matiereID`,`carteEtudiant`),
  ADD KEY `carteEtudiant` (`carteEtudiant`),
  ADD KEY `lvlID` (`lvlID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Documents`
--
ALTER TABLE `Documents`
  MODIFY `documentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `eventID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `FiliereFullinfo`
--
ALTER TABLE `FiliereFullinfo`
  MODIFY `filiereID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Matiere`
--
ALTER TABLE `Matiere`
  MODIFY `matiereID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Niveau`
--
ALTER TABLE `Niveau`
  MODIFY `lvlID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Documents`
--
ALTER TABLE `Documents`
  ADD CONSTRAINT `Documents_ibfk_1` FOREIGN KEY (`matiereID`) REFERENCES `Matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Documents_ibfk_2` FOREIGN KEY (`lvlID`) REFERENCES `Niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `MatiereParFiliere`
--
ALTER TABLE `MatiereParFiliere`
  ADD CONSTRAINT `MatiereParFiliere_ibfk_2` FOREIGN KEY (`matiereID`) REFERENCES `Matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MatiereParFiliere_ibfk_3` FOREIGN KEY (`lvlID`) REFERENCES `Niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Niveau`
--
ALTER TABLE `Niveau`
  ADD CONSTRAINT `Niveau_ibfk_1` FOREIGN KEY (`filiereID`) REFERENCES `FiliereFullinfo` (`filiereID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Note`
--
ALTER TABLE `Note`
  ADD CONSTRAINT `Note_ibfk_1` FOREIGN KEY (`matiereID`) REFERENCES `Matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Note_ibfk_2` FOREIGN KEY (`carteEtudiant`) REFERENCES `Etudiant` (`carteEtudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Note_ibfk_3` FOREIGN KEY (`lvlID`) REFERENCES `Niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
