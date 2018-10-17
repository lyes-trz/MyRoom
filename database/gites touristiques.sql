

--
-- Base de données :  `gites touristiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

CREATE TABLE IF NOT EXISTS `gites` (
  `name` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `room` int(11) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`name`)
 );

--
-- Contenu de la table `gites`
--

INSERT INTO `gites` (`name`, `city`, `room`, `img`, `url`, `price`) VALUES
('Le Tichka', 'ouarzazate', 20, 'http://localhost/gites%20touristiques/pic/4.jpeg','gites.php', 240 );

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `N` int(11) NOT NULL AUTO_INCREMENT,
  `gite` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rroom` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `tprice` int(60) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `tele` text NOT NULL,
  PRIMARY KEY (`N`)
);

