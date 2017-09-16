-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 16 Septembre 2017 à 18:42
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bonobo`
--

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `race` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `famille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nourriture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `nom`, `prenom`, `race`, `age`, `famille`, `nourriture`) VALUES
(1, 'marmosets', 'marmosets', 'marmosets@gmail.com', 'marmosets@gmail.com', 1, NULL, '$2y$13$gEGzOmWPcoKHUjtUQw7EhOgQ3bQWs5nkxi/zc70TFQnwL2nfarAje', '2017-09-16 18:27:45', NULL, NULL, 'N;', 'Jack', 'Lemarmosets', 'marmosets', 10, 'Callitrichidae', 'Fruits'),
(2, 'tamarins', 'tamarins', 'tamarins@gmail.com', 'tamarins@gmail.com', 1, NULL, '$2y$13$lNE3mBPa3NCUQElh1Jcr.uVjlAjiZVw05sCVJrJwuD4LhU0SDtZ0K', '2017-09-16 18:28:42', NULL, NULL, 'N;', 'Mike', 'Letamarins', 'tamarins', 5, 'Callitrichidae', 'Insects'),
(3, 'capuchin', 'capuchin', 'capuchin@gmail.com', 'capuchin@gmail.com', 1, NULL, '$2y$13$q2ijuiYtvfBrXefosb2EO.5anLdde9v.jLi2v2GEDBH9qN1Gf3lR2', '2017-09-16 18:29:59', NULL, NULL, 'N;', 'Antoine', 'Lecapuchin', 'capuchin', 14, 'Cebidae', 'Fruits , Insects'),
(4, 'saki', 'saki', 'saki@gmail.com', 'saki@gmail.com', 1, NULL, '$2y$13$UE966rv7LPJY1OA35Fh6o.RP3wuYeGfAtO4ySn9ey0DYrTqaBNxxm', '2017-09-16 18:31:06', NULL, NULL, 'N;', 'Robert', 'Lesaki', 'saki', 20, 'Pitheciidae', 'Fruits , Insects, autre'),
(5, 'uakari', 'uakari', 'uakari@gmail.com', 'uakari@gmail.com', 1, NULL, '$2y$13$rhnoDHdKB5YNzDUmV8UvROmYDMOIvtuUEir0y6VVr5IfG7meID9xy', '2017-09-16 18:41:14', NULL, NULL, 'N;', 'Leuakari', 'Paul', 'uakari', 80, 'Pitheciidae', 'Insects , Fruits');

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `thisis` int(11) NOT NULL,
  `friendwith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `friends`
--

INSERT INTO `friends` (`thisis`, `friendwith`) VALUES
(2, 5),
(5, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`thisis`,`friendwith`),
  ADD KEY `IDX_21EE7069415F1F91` (`thisis`),
  ADD KEY `IDX_21EE706953EAB07F` (`friendwith`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `FK_21EE7069415F1F91` FOREIGN KEY (`thisis`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_21EE706953EAB07F` FOREIGN KEY (`friendwith`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
