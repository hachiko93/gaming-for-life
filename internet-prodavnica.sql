-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2016 at 07:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internet-prodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id_korisnika` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `privilegija` int(11) NOT NULL,
  `omeni` varchar(200) DEFAULT NULL,
  `slika` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_korisnika`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnika`, `ime`, `prezime`, `email`, `password`, `privilegija`, `omeni`, `slika`) VALUES
(2, 'admin', 'admin', 'admin@admin.com', 'admin', 3, 'Admin sajta', '1454591785430275l.jpg'),
(5, 'user', 'user', 'user@user.com', 'user', 1, 'Prvi user sajta. Zanimljiva osoba koja voli igrice', '1454601504.jpg'),
(6, 'user2', 'user2', 'user2@user.com', 'user2', 1, 'Lorem ipsum dolorem sunt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kupio`
--

CREATE TABLE IF NOT EXISTS `kupio` (
  `id_korisnika` int(11) NOT NULL,
  `id_igrice` int(11) NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id_korisnika`,`id_igrice`),
  KEY `blabla` (`id_igrice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kupio`
--

INSERT INTO `kupio` (`id_korisnika`, `id_igrice`, `datum`) VALUES
(2, 3, '2016-01-01'),
(2, 4, '2015-12-09'),
(2, 5, '2015-12-07'),
(5, 3, '2016-01-06'),
(6, 3, '2015-11-03'),
(6, 5, '2015-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE IF NOT EXISTS `proizvodi` (
  `id_proizvoda` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `tekst` varchar(1000) NOT NULL,
  `slika` varchar(50) DEFAULT NULL,
  `cena` int(11) NOT NULL,
  `tip` int(11) NOT NULL,
  `zanr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_proizvoda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id_proizvoda`, `ime`, `tekst`, `slika`, `cena`, `tip`, `zanr`) VALUES
(3, 'FALLOUT 4', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming.\r\n\r\nAs the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.\r\n\r\n“We know what this game means to everyone,” said Game Director, Todd Howard. “The time and technology have allowed us to be more ambitious than ever. We’ve never been more excited about a game, and we can’t wait to share it.”\r\n\r\nThe game’s official trailer, created in-game at Bethesda Game Studios, can be viewed at: www.fallout4.com.', 'images/store/fallout4.jpg', 60, 1, 'fps'),
(4, 'Game: The Elder Scrolls IV OBLIVION', 'Oblivion Game of the Year edition presents one of the best RPGs of all time like never before. Step inside the most richly detailed and vibrant game-world ever created. With a powerful combination of freeform gameplay and unprecedented graphics, you can unravel the main quest at your own pace or explore the vast world and find your own challenges. Also included in the Game of the Year edition are Knights of the Nine and the Shivering Isles expansion, adding new and unique quests and content to the already massive world of Oblivion. See why critics called Oblivion the Best Game of 2006.', 'images/store/oblivion.jpg', 20, 1, 'rpg'),
(5, 'Game: The Elder Scrolls V SKYRIM', 'he long-awaited and much-anticipated next installment of the award-winning The Elder Scrolls franchise is here. Now, the expansive, open world that forever revolutionized the face of the fantasy epic leads you deeper into the combat, the magic and the myth than you have ever been before.', 'images/store/skyrim.jpg', 20, 1, 'rpg'),
(6, 'Console: Xbox One', '*500GB Xbox One console\r\n*Wireless controller\r\n*Chat headset\r\n*Kinect sensor sold separately\r\n\r\nMore fun. All in One!\r\n\r\nPlay games together with your friends on a network powered by over 300,000 servers for maximum performance. Find new challengers who fit your skill and style with Smart Match, which uses intelligent algorithms to bring the right players together. Turn your best game moments into personalized movies that you can share with friends, or broadcast your gameplay live. You can also switch quickly to apps, and connect with family and friends with Skype in HD (Kinect sensor required, sold separately*). Or do two things at once by snapping a game, live TV, a movie or apps side-by-side.', 'images/store/xbox2.jpg', 349, 2, NULL),
(7, 'Console: The 20th Anniversary Edition PS4', 'Think you are a gaming giant, a memory master, a PlayStation prodigy? Then put those skills to the test with our quiz on the last 20 years of PlayStation history.\r\n\r\nYou could win a 20th Anniversary Edition PlayStation 4 – we’ve got 20 to give away, with 20th Anniversary DUALSHOCK 4 Wireless Controllers for the runners-up.', 'images/store/ps4.png', 400, 2, NULL),
(8, 'Xbox One Special Edition Forza Motorsport 6 Wirele', 'Feel the road come to life in your hands with this Xbox One wireles controller created specially for Forza Motorsport 6. It is designed with a rubberized diamond grip for enhanced control and comfort, and also has a 3.5mm jack for use with any compatible headset. Impulse Triggers* deliver fingertip vibration feedback, while responsive thumbsticks and an enhanced D-pad provide greater precision.', 'images/store/xbox.jpg', 64, 3, NULL),
(9, 'DUALSHOCK 4 wireless controller: 20th Anniversary ', 'To celebrate 20 years of PlayStation, a very special 20th Anniversary Edition of the DUALSHOCK 4 wireles controller was created. Featuring the distinctive Original Grey colour scheme and the iconic, coloured PlayStation family logo, it is available now while stocks last.', 'images/store/ps4c.png', 60, 3, NULL),
(10, 'SIBERIA V3 FALLOUT 4 EDITION', 'he Siberia v3 Fallout 4 Edition combines the comfort and sound of the Siberia v3, with the survivability and color of a Vault Suit.\r\n\r\nSURVIVALIST SOUND: The Wasteland is a dangerous place, and you will need all your senses to survive.\r\n\r\nVAULT SUIT COMFORT: Exploring the Wasteland is a tough endevor. Thats why we wanted to make a headset as comfortable as your trusty Vault Suit. With the suspension headband and memory foam ear cusions, you might even forget you are wearing them.\r\n\r\nMULTI-PLATFORM USAGE: We want the Fallout 4 headset to be one peice of gear that you carry throughout your adventures, that is why we made it compatible for virtually every platform.', 'images/store/fallout4v3.png', 120, 3, NULL),
(11, 'DIABLO® III MOUSE', 'The Diablo® III mouse features demon red illumination settings has a guaranteed lifespan of 10 million clicks – 3x the lifespan of an average mouse.', 'images/store/diablo3.png', 32, 3, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kupio`
--
ALTER TABLE `kupio`
  ADD CONSTRAINT `bla` FOREIGN KEY (`id_korisnika`) REFERENCES `korisnici` (`id_korisnika`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `blabla` FOREIGN KEY (`id_igrice`) REFERENCES `proizvodi` (`id_proizvoda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
