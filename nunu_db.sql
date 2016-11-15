-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 12:51 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nunu db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `image`) VALUES
(1, 'Signature d''une convention INSAT- RFR', '																				<p>En présence des ministres de transport et de l''enseignement supérieur et la recherche scientifique, les directeurs de l''INSAT, de l''EPT, de l''ENIT, de l''ENAU, de l''ENSIT et de l''ISTLS ont signé des conventions de ...</p>																		', '																				<h2>Signature d''une convention INSAT- RFR (société du Réseau Ferroviaire Rapide de Tunis)</h2>\r\n<p>En présence des ministres de transport et de l''enseignement supérieur et la recherche scientifique, les directeurs de l''INSAT, de l''EPT, de l''ENIT, de l''ENAU, de l''ENSIT et de l''ISTLS ont signé des conventions de partenariat avec la société du Réseau Ferroviaire Rapide de Tunis RFR, L''objectif est d''intégrer les jeunes ingénieurs dans un grand projet à l''échelle nationale.</p>\r\n<p>Le projet consiste à relier le centre de Tunis à ses périphéries et banlieues par 5 nouvelles lignes de train.</p>\r\n<p>La convention signée permettra d''impliquer les futures ingénieurs dans des stages de fin d''études en rapport avec le transport ferroviaire.</p>																		', '2016-02-26 00:00:00', 'article1.jpe'),
(2, 'Inauguration Samsung Academy à l''Insat', '<p>Le mercredi 02 décembre Samsung Tunisie, a inauguré une nouvelle « Samsung Academy » à l’Institut National des Sciences Appliquées et de Technologie (INSAT).Cette action s’inscrit dans le cadre du ... </p>', '<h2>Inauguration Samsung Academy à l''Insat</h2>\r\n<p>Le mercredi 02 décembre Samsung Tunisie, a inauguré une nouvelle « Samsung Academy » à l’Institut National des Sciences Appliquées et de Technologie (INSAT).</p>\r\n<p>Cette action s’inscrit dans le cadre du programme « Hope For Youth » en vue de perpétrer les principes des activités citoyennes de Samsung en mettant à la disposition des jeunes de la technologie et du soutien nécessaires à la valorisation de leurs talents pour contribuer à construire un monde meilleur. En effet, grâce à un espace agréable et au matériel disponible (téléviseurs, tablettes et smartphones), les élèves ingénieurs ingénieurs pourront apprendre, créer, développer et tester des applications inédites ou des programmes innovants et pourront laisser libre court à leurs créativités pour développer les futures idées révolutionnaires ou les start-up de demain.</p>\r\n<table>\r\n<tr><td><img src="content/SamAca.jpe" alt="Not found"/>\r\n<td><img src="content/SamAca1.jpe" alt="Not found"/>\r\n<tr><td><img src="content/SamAca2.jpe" alt="Not found"/>\r\n<td><img src="content/SamAca3.jpe" alt="Not found"/>\r\n</table>', '2015-12-17 23:10:35', 'article2.jpe'),
(3, 'TuniRobots: trois gagnants qualifiés pour Eurorobots 2016', '<p>Le rideau est tombé sur la 7ème édition de la Journée nationale tunisienne de la robotique, TUNIROBOTS 2016, hier, le 24 avril à l’Institut national des sciences appliquées et de technologie ( INSAT ).\nCe concours ... </p>', '<h2>TuniRobots : trois gagnants qualifiés pour Eurorobots 2016</h2>\r\n<h3>Le rideau est tombé sur la 7ème édition de la Journée nationale tunisienne de la robotique, TUNIROBOTS 2016, hier, le 24 avril à l’Institut national des sciences appliquées et de technologie ( INSAT ).</h3>\r\n<p>Ce concours, dont l’objectif est de familiariser les jeunes avec le monde de la robotique et d’introduire la culture des technologies et de la robotique, a annoncé  la liste des équipes gagnante.  Trois équipes ont été primées à savoir : 1) Step One (ESPRIT) – 2) IEEE ULT SB (ULT) – 3) Aerobotix (INSAT).</p>\r\n<p>Contacté par leconomistemaghrebin.com, Ibtissem Boughzou, responsable du club électromécanique à Esprit et de l’équipe qui a remporté le premier prix, a affirmé qu’avec ce prix l’équipe a été qualifiée pour le concours Eurobotos France 2016 (qui se tiendra le 20 mai). Cette équipe, composée d’étudiants en électromécaniques a pu concevoir un robot conformément au cahier des charges conçu par le jury du concours. Différent de la 6ème  édition, le cahier des charges de la 7ème édition exigeait  la conception d’un robot capable de jouer des scènes théâtrales  et  cinématographiques.  Sur chaque fonction accomplie par le robot, l’équipe en compétition gagne un certain nombre de points. Après les éliminatoires, seules trois équipes ont été primées.</p>\r\n<p>Mais en quoi ces robots peuvent être utiles au secteur culturel ou industriel?</p>\r\n<p>En premier lieu ces robots permettent aux étudiants d’appliquer leurs  connaissances en matière d’électronique, de mécanisme et d’autres disciplines. S’ajoute à cela qu’ils peuvent être adaptés aux besoins de l’entreprise et aux besoins de la scène culturelle explique notre interlocutrice : « Il suffit qu’un chef d’entreprise exprime son besoin pour concevoir  le robot adéquat  », précise-t-elle.</p>\r\n<p>Notons que le domaine de la robotique connait des avancées considérables en Tunisie, notamment grâce aux écoles d’ingénieurs à l’instar de l’INSAT et l’ENISO. Notons qu’une autre équipe tunisienne composée d’élèves- ingénieurs s’est distinguée au World Robot Olympiade ??WRO 2015.</p>', '2016-04-27 23:20:24', 'article3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `matiereID` int(10) unsigned NOT NULL,
  `lvlID` int(10) unsigned NOT NULL,
  `documentID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` enum('C','AD','E') NOT NULL,
  `nom_sur_disque` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`documentID`),
  KEY `matiereID` (`matiereID`,`documentID`),
  KEY `lvlID` (`lvlID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`matiereID`, `lvlID`, `documentID`, `nom`, `author`, `type`, `nom_sur_disque`, `date`) VALUES
(1, 1, 1, 'Chapitre1', 'Mr Ahmed', 'C', 'Chapitre1.pdf', '2015-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `prenom` varchar(200) NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `carteEtudiant` int(7) NOT NULL,
  `filiereID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cin`,`carteEtudiant`),
  KEY `carteEtudiant` (`carteEtudiant`,`filiereID`),
  KEY `filiereID` (`filiereID`),
  KEY `cin` (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`prenom`, `cin`, `nom`, `carteEtudiant`, `filiereID`) VALUES
('Ghazi', 7470730, 'Ben Dahmen', 1400346, 1),
('Nadhem', 7473661, 'FEKIH HASSEN', 1400278, 1),
('Ghaith', 7476969, 'Troudi', 1400696, 1),
('kallel', 2147483647, 'wassim', 151557, 1),
('Achraf', 2147483647, 'cheikh mohamed ', 68768767, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eventDateAndTime` datetime NOT NULL,
  `eventPoster` varchar(200) NOT NULL,
  `eventTitle` text NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventDateAndTime`, `eventPoster`, `eventTitle`) VALUES
(1, '2016-04-16 08:00:00', 'tunirobots2016.jpg', 'TUNIROBOTS 2016'),
(2, '2016-04-30 08:00:00', 'securiday2016.png', 'SECURIDAY 2016'),
(3, '2016-04-16 08:00:00', 'JNB2016.jpg', 'Journée Nationale du Bénévolat');

-- --------------------------------------------------------

--
-- Table structure for table `filierefullinfo`
--

CREATE TABLE IF NOT EXISTS `filierefullinfo` (
  `filiereID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) NOT NULL,
  `short_name` varchar(5) NOT NULL,
  `icon` varchar(20) NOT NULL,
  PRIMARY KEY (`filiereID`),
  KEY `full_name` (`full_name`,`short_name`),
  KEY `short_name` (`short_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `filierefullinfo`
--

INSERT INTO `filierefullinfo` (`filiereID`, `full_name`, `short_name`, `icon`) VALUES
(1, 'Génie Logiciel\r\n\r\n', 'GL', 'fa-code'),
(2, 'Informatique Industrielle & Automatique', 'IIA', 'fa-cogs'),
(3, 'Réseaux Informatiques et Télécommunications', 'RT', 'fa-wifi'),
(4, 'Instrumentation et Maintenance Industrielle', 'IMI', 'fa-wrench'),
(5, 'Chimie Industrielle', 'CH', 'fa-flask'),
(6, 'Biologie industrielle', 'BIO', 'fa-leaf'),
(7, 'Tronc Commun MPI', 'MPI', 'fa-graduation-cap'),
(8, 'Tronc Commun CBA', 'CBA', 'fa-filter');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `matiereID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(50) NOT NULL,
  PRIMARY KEY (`matiereID`),
  KEY `matiereID` (`matiereID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`matiereID`, `nom_matiere`) VALUES
(1, 'Analyse'),
(2, 'Electrotechnique');

-- --------------------------------------------------------

--
-- Table structure for table `matiereparfiliere`
--

CREATE TABLE IF NOT EXISTS `matiereparfiliere` (
  `lvlID` int(10) unsigned NOT NULL,
  `matiereID` int(10) unsigned NOT NULL,
  `coef` float NOT NULL,
  PRIMARY KEY (`matiereID`,`lvlID`),
  KEY `filiereID` (`lvlID`,`matiereID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matiereparfiliere`
--

INSERT INTO `matiereparfiliere` (`lvlID`, `matiereID`, `coef`) VALUES
(1, 1, 2.5),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE IF NOT EXISTS `niveau` (
  `lvlID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filiereID` int(10) unsigned NOT NULL,
  `valeur` int(1) NOT NULL,
  PRIMARY KEY (`lvlID`),
  KEY `filiereID` (`filiereID`),
  KEY `valeur` (`valeur`),
  KEY `lvlID` (`lvlID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`lvlID`, `filiereID`, `valeur`) VALUES
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
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `valeur` double NOT NULL,
  `matiereID` int(10) unsigned NOT NULL,
  `lvlID` int(10) unsigned NOT NULL,
  `carteEtudiant` int(7) NOT NULL,
  `nature` enum('ds1','examen1','ds2','examen2','tp') NOT NULL,
  PRIMARY KEY (`matiereID`,`lvlID`,`carteEtudiant`,`nature`),
  KEY `matiereID` (`matiereID`,`carteEtudiant`),
  KEY `carteEtudiant` (`carteEtudiant`),
  KEY `lvlID` (`lvlID`),
  KEY `nature` (`nature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`valeur`, `matiereID`, `lvlID`, `carteEtudiant`, `nature`) VALUES
(12, 1, 1, 1400278, 'ds1'),
(15, 1, 1, 1400278, 'examen2'),
(14, 1, 1, 1400278, 'tp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `CIN` int(11) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`memberID`, `username`, `password`, `email`, `isadmin`, `CIN`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com', 1, 7470730),
(3, 'hama', '$2y$10$qeiMj..8SgWzesxU6Ste2.nSnajHwI1Telk86gqjFZt8a9lAi65vK', 'nunu@gmail.com', 0, 7473661);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `Documents_ibfk_1` FOREIGN KEY (`matiereID`) REFERENCES `matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Documents_ibfk_2` FOREIGN KEY (`lvlID`) REFERENCES `niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matiereparfiliere`
--
ALTER TABLE `matiereparfiliere`
  ADD CONSTRAINT `MatiereParFiliere_ibfk_2` FOREIGN KEY (`matiereID`) REFERENCES `matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `MatiereParFiliere_ibfk_3` FOREIGN KEY (`lvlID`) REFERENCES `niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `niveau`
--
ALTER TABLE `niveau`
  ADD CONSTRAINT `Niveau_ibfk_1` FOREIGN KEY (`filiereID`) REFERENCES `filierefullinfo` (`filiereID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `Note_ibfk_1` FOREIGN KEY (`matiereID`) REFERENCES `matiere` (`matiereID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Note_ibfk_2` FOREIGN KEY (`carteEtudiant`) REFERENCES `etudiant` (`carteEtudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Note_ibfk_3` FOREIGN KEY (`lvlID`) REFERENCES `niveau` (`lvlID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
