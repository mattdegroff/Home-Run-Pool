-- -------------------------------------------------------------
-- TablePlus 2.1(204)
--
-- https://tableplus.com/
--
-- Database: heroku_80a1a731e2f8880
-- Generation Time: 2019-03-29 11:41:11.2880
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `ant` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `ariel` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `davevonte` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `evan` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `ferg` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `griesche` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `groupa` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `groupb` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `groupc` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `groupd` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `grup` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `katie` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `kevin` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `lark` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `matt` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `menke` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `mistron` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `moresky` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `nestor` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `par` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `pedowitz` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `pooch` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `rabbit` (
  `id` int(11) NOT NULL,
  `gr` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `color` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `ram` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `scott` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `sorkin` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `standings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL,
  `font` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `steve` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `steves` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `today` (
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `tom` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `vinny` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `vinnye` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `zaccheo` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `zippy` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `ariel` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '4', 'Giancarlo Stanton', '0'),
('2', '5', 'Joey Gallo', '0'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '10', 'Trevor Story', '1'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '5', 'Cody Bellinger', '1'),
('7', '19', 'Vladimir Guerrero Jr.', '0'),
('8', '3', 'Mike Moustakas', '1');

INSERT INTO `davevonte` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '2', 'Khris Davis', '2'),
('2', '2', 'Mookie Betts', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '5', 'Paul Goldschmidt', '0'),
('5', '8', 'Charlie Blackmon', '0'),
('6', '15', 'Alex Bregman', '0'),
('7', '16', 'Freddie Freeman', '0'),
('8', '9', 'Anthony Rizzo', '0');

INSERT INTO `griesche` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '6', 'Mike Trout', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '7', 'Francisco Lindor', '0'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '8', 'Charlie Blackmon', '0'),
('7', '15', 'Alex Bregman', '0'),
('8', '17', 'Justin Upton', '0');

INSERT INTO `groupa` (`id`, `player`, `team`, `homeRuns`, `link`, `picks`) VALUES ('5', 'JD Martinez', 'BOS', '0', 'http://www.espn.com/mlb/player/_/id/31065', '5.3'),
('1', 'Bryce Harper', 'PHI', '0', 'http://www.espn.com/mlb/player/_/id/30951', '5.3'),
('3', 'Aaron Judge', 'NYY', '0', 'http://www.espn.com/mlb/player/_/id/33192', '15.8'),
('4', 'Giancarlo Stanton', 'NYY', '0', 'http://www.espn.com/mlb/player/_/id/30583', '15.8'),
('6', 'Mike Trout', 'LAA', '0', 'http://www.espn.com/mlb/player/_/id/30836', '26.3'),
('2', 'Khris Davis', 'OAK', '2', 'http://www.espn.com/mlb/player/_/id/31478', '0.0');

INSERT INTO `groupb` (`id`, `player`, `team`, `homeRuns`, `link`, `picks`) VALUES ('1', 'Nolan Arenado', 'COL', '0', 'http://www.espn.com/mlb/player/_/id/31261', '47.4'),
('3', 'Kris Bryant', 'CHC', '1', 'http://www.espn.com/mlb/player/_/id/33172', '0.0'),
('2', 'Mookie Betts', 'BOS', '0', 'http://www.espn.com/mlb/player/_/id/33039', '0.0'),
('5', 'Joey Gallo', 'TEX', '0', 'http://www.espn.com/mlb/player/_/id/32818', '21.1'),
('6', 'Jose Ramirez', 'CLE', '0', 'http://www.espn.com/mlb/player/_/id/32801', '0.0'),
('4', 'Nelson Cruz', 'MIN', '0', 'http://www.espn.com/mlb/player/_/id/6242', '0.0');

INSERT INTO `groupc` (`id`, `player`, `team`, `homeRuns`, `link`, `picks`) VALUES ('1', 'Ronald Acu&#241;a Jr.', 'ATL', '0', 'http://www.espn.com/mlb/player/_/id/36185', '26.3'),
('2', 'Javier Baez', 'CHC', '2', 'http://www.espn.com/mlb/player/_/id/32127', '0.0'),
('3', 'Matt Carpenter', 'STL', '0', 'http://www.espn.com/mlb/player/_/id/31015', '0.0'),
('6', 'Rhys Hoskins', 'PHI', '1', 'http://www.espn.com/mlb/player/_/id/35291', '31.6'),
('4', 'Edwin Encarnacion', 'SEA', '1', 'http://www.espn.com/mlb/player/_/id/5904', '0.0'),
('7', 'Francisco Lindor', 'ATL', '0', 'http://www.espn.com/mlb/player/_/id/32129', '26.3'),
('11', 'Christian Yelich', 'MIL', '1', 'http://www.espn.com/mlb/player/_/id/31283', '0.0'),
('8', 'Manny Machado', 'SD', '0', 'http://www.espn.com/mlb/player/_/id/31097', '0.0'),
('9', 'Kyle Schwarber', 'CHC', '1', 'http://www.espn.com/mlb/player/_/id/33172', '0.0'),
('5', 'Paul Goldschmidt', 'STL', '0', 'http://www.espn.com/mlb/player/_/id/31027', '15.8'),
('10', 'Trevor Story', 'COL', '1', 'http://www.espn.com/mlb/player/_/id/32150', '36.8');

INSERT INTO `groupd` (`id`, `firstName`, `lastName`, `team`, `homeRuns`, `link`, `picks`) VALUES ('1', 'Jesus', 'Aguilar', 'MIL', '0', 'http://www.espn.com/mlb/player/_/id/32132', '31.6'),
('2', 'Michael', 'Conforto', 'NYM', '0', 'http://www.espn.com/mlb/player/_/id/33711', '31.6'),
('3', 'Mike', 'Moustakas', 'MIL', '1', 'http://www.espn.com/mlb/player/_/id/29999', '15.8'),
('4', 'Yasiel', 'Puig', 'CIN', '0', 'http://www.espn.com/mlb/player/_/id/32574', '10.5'),
('5', 'Cody', 'Bellinger', 'LAD', '1', 'http://www.espn.com/mlb/player/_/id/33912', '36.8'),
('6', 'Max', 'Muncy', 'LAD', '1', 'http://www.espn.com/mlb/player/_/id/33303', '15.8'),
('7', 'Eugenio', 'Suarez', 'CIN', '0', 'http://www.espn.com/mlb/player/_/id/32367', '21.1'),
('8', 'Charlie', 'Blackmon', 'COL', '0', 'http://www.espn.com/mlb/player/_/id/31084', '21.1'),
('9', 'Anthony', 'Rizzo', 'CHC', '0', 'http://www.espn.com/mlb/player/_/id/30782', '15.8'),
('10', 'Miguel', 'Andujar', 'NYY', '0', 'http://www.espn.com/mlb/player/_/id/33743', '5.3'),
('11', 'Gary', 'Sanchez', 'NYY', '0', 'http://www.espn.com/mlb/player/_/id/31095', '5.3'),
('12', 'Gleyber', 'Torres', 'NYY', '0', 'http://www.espn.com/mlb/player/_/id/33804', '5.3'),
('13', 'Matt', 'Olson', 'OAK', '0', 'http://www.espn.com/mlb/player/_/id/32767', '10.5'),
('14', 'Travis', 'Shaw', 'MIL', '0', 'http://www.espn.com/mlb/player/_/id/32890', '5.3'),
('15', 'Alex', 'Bregman', 'HOU', '0', 'http://www.espn.com/mlb/player/_/id/34886', '15.8'),
('16', 'Freddie', 'Freeman', 'ATL', '0', 'http://www.espn.com/mlb/player/_/id/30193', '10.5'),
('17', 'Justin', 'Upton', 'LAA', '0', 'http://www.espn.com/mlb/player/_/id/28841', '5.3'),
('18', 'Eloy', 'Jimenez', 'CWS', '0', 'http://www.espn.com/mlb/player/_/id/33867', '5.3'),
('19', 'Vladimir', 'Guerrero Jr.', 'TOR', '0', 'http://www.espn.com/mlb/player/_/id/35002', '5.3'),
('20', 'Jason', 'Kipnis', NULL, '0', 'http://www.espn.com/mlb/player/_/id/31007', '0.0'),
('21', 'Luke', 'Voit', NULL, '0', 'http://www.espn.com/mlb/player/_/id/35201', '0.0'),
('22', 'Joc', 'Pederson', NULL, '0', 'http://www.espn.com/mlb/player/_/id/31392', '0.0'),
('23', 'Robinson', 'Cano', NULL, '0', 'http://www.espn.com/mlb/player/_/id/6204', '0.0'),
('24', 'George', 'Springer', NULL, '0', 'http://www.espn.com/mlb/player/_/id/32078', '0.0');

INSERT INTO `grup` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '3', 'Aaron Judge', '0'),
('2', '5', 'Joey Gallo', '0'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '10', 'Trevor Story', '1'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '5', 'Cody Bellinger', '1'),
('7', '3', 'Mike Moustakas', '1'),
('8', '6', 'Max Muncy', '1');

INSERT INTO `katie` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '1', 'Bryce Harper', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '5', 'Paul Goldschmidt', '0'),
('4', '10', 'Trevor Story', '1'),
('5', '2', 'Michael Conforto', '0'),
('6', '13', 'Matt Olson', '0'),
('7', '9', 'Anthony Rizzo', '0'),
('8', '14', 'Travis Shaw', '0');

INSERT INTO `kevin` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '3', 'Aaron Judge', '0'),
('2', '3', 'Kris Bryant', '1'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '11', 'Christian Yelich', '1'),
('5', '10', 'Miguel Andujar', '0'),
('6', '20', 'Jason Kipnis', '0'),
('7', '14', 'Travis Shaw', '0'),
('8', '21', 'Luke Voit', '0');

INSERT INTO `lark` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '3', 'Aaron Judge', '0'),
('2', '5', 'Joey Gallo', '0'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '10', 'Trevor Story', '1'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '5', 'Cody Bellinger', '1'),
('7', '13', 'Matt Olson', '0'),
('8', '7', 'Eugenio Suarez', '0');

INSERT INTO `matt` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '4', 'Giancarlo Stanton', '0'),
('2', '5', 'Joey Gallo', '0'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '10', 'Trevor Story', '1'),
('5', '5', 'Cody Bellinger', '1'),
('6', '2', 'Michael Conforto', '0'),
('7', '6', 'Max Muncy', '1'),
('8', '7', 'Eugenio Suarez', '0');

INSERT INTO `menke` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '6', 'Mike Trout', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '7', 'Francisco Lindor', '0'),
('5', '5', 'Cody Bellinger', '1'),
('6', '8', 'Charlie Blackmon', '0'),
('7', '16', 'Freddie Freeman', '0'),
('8', '6', 'Max Muncy', '1');

INSERT INTO `mistron` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '6', 'Mike Trout', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '6', 'Rhys Hoskins', '1'),
('4', '7', 'Francisco Lindor', '0'),
('5', '8', 'Charlie Blackmon', '0'),
('6', '2', 'Michael Conforto', '0'),
('7', '9', 'Anthony Rizzo', '0'),
('8', '7', 'Eugenio Suarez', '0');

INSERT INTO `par` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '1', 'Bryce Harper', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '5', 'Paul Goldschmidt', '0'),
('4', '11', 'Christian Yelich', '1'),
('5', '2', 'Michael Conforto', '0'),
('6', '19', 'Vladimir Guerrero Jr.', '0'),
('7', '22', 'Joc Pederson', '0'),
('8', '21', 'Luke Voit', '0');

INSERT INTO `rabbit` (`id`, `gr`, `color`, `player`, `homeRuns`) VALUES ('1', 'A', '#92d050', 'Khris Davis', '2'),
('2', 'B', '#00b0f0', 'Kris Bryant', '1'),
('3', 'C', '#ffd966', 'Javier Baez', '2'),
('4', 'C', '#ffd966', 'Christian Yelich', '1'),
('5', 'D', '#00b050', 'Tim Beckham', '3'),
('6', 'D', '#00b050', 'Enrique Hernandez', '2'),
('7', 'D', '#00b050', 'Joc Pederson', '2'),
('8', 'D', '#00b050', 'Domingo Santana', '2');

INSERT INTO `ram` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '3', 'Aaron Judge', '0'),
('2', '5', 'Joey Gallo', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '9', 'Kyle Schwarber', '1'),
('5', '5', 'Cody Bellinger', '1'),
('6', '23', 'Robinson Cano', '0'),
('7', '11', 'Gary Sanchez', '0'),
('8', '24', 'George Springer', '0');

INSERT INTO `scott` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '3', 'Aaron Judge', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '5', 'Paul Goldschmidt', '0'),
('5', '10', 'Miguel Andujar', '0'),
('6', '4', 'Yasiel Puig', '0'),
('7', '11', 'Gary Sanchez', '0'),
('8', '12', 'Gleyber Torres', '0');

INSERT INTO `sorkin` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '6', 'Mike Trout', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '7', 'Francisco Lindor', '0'),
('4', '10', 'Trevor Story', '1'),
('5', '15', 'Alex Bregman', '0'),
('6', '2', 'Michael Conforto', '0'),
('7', '16', 'Freddie Freeman', '0'),
('8', '9', 'Anthony Rizzo', '0');

INSERT INTO `standings` (`id`, `color`, `name`, `homeRuns`, `font`, `code`, `paid`) VALUES ('-22', '#90ee90', 'Vincent E', '0', '0', 'vinnyE', '0'),
('-21', '#a9a9a9', 'Steve S', '0', '3', 'steveS', '0'),
('-18', '#cb355d', 'Evan', '0', '0', 'evan', '0'),
('-17', '#6e7f39', 'Zaccheo', '0', '1', 'zaccheo', '0'),
('-16', '#9135FF', 'Moresky', '0', '1', 'moresky', '0'),
('-15', '#ecd540', 'Pedowitz', '0', '0', 'pedowitz', '0'),
('-10', 'white', 'Nestor', '0', '0', 'nestor', '0'),
('-1', 'silver', 'Ferg', '0', '0', 'ferg', '0'),
('1', 'red', 'Vinny C', '1', '0', 'vinny', '1'),
('2', 'purple', 'DeGroff', '4', '1', 'matt', '1'),
('3', '#228b22', 'Mistron', '1', '0', 'mistron', '1'),
('4', '#1e90ff', 'Scott', '0', '0', 'scott', '1'),
('5', '#f7e4be', 'Katie', '1', '0', 'katie', '1'),
('6', '#85bb65', 'Grupski', '5', '0', 'grup', '1'),
('7', '#3F393E', 'Sorkin', '1', '2', 'sorkin', '1'),
('8', '#ffa2d0', 'Griesche', '0', '0', 'griesche', '1'),
('9', 'maroon', 'Menke', '2', '1', 'menke', '1'),
('10', 'yellow', 'Lark', '3', '0', 'lark', '1'),
('11', '#20ff00', 'Descalso', '2', '0', 'steve', '1'),
('12', '#00ffdc', 'Zippy', '2', '0', 'zippy', '1'),
('13', '#8b4513', 'Ariel', '4', '1', 'ariel', '1'),
('14', '#add8e6', 'Ant', '0', '0', 'ant', '1'),
('15', '#ae9be0', 'Kevin A', '0', '0', 'kevin', '1'),
('16', 'black', 'Davevonte', '0', '1', 'davevonte', '1'),
('17', 'navy', 'JP', '0', '1', 'pooch', '1'),
('18', 'orange', 'Par', '0', '0', 'par', '0'),
('19', 'blue', 'J-Ram', '0', '2', 'ram', '1');

INSERT INTO `steve` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '5', 'JD Martinez', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '7', 'Francisco Lindor', '0'),
('4', '10', 'Trevor Story', '1'),
('5', '15', 'Alex Bregman', '0'),
('6', '5', 'Cody Bellinger', '1'),
('7', '8', 'Charlie Blackmon', '0'),
('8', '7', 'Eugenio Suarez', '0');

INSERT INTO `today` (`player`, `HR`) VALUES ('Khris Davis', '1'),
('Cody Bellinger', '1'),
('Edwin Encarnacion', '1'),
('George Springer', '1'),
('Mike Moustakas', '1'),
('Rhys Hoskins', '1'),
('Wil Myers', '1'),
('Andrew McCutchen', '1'),
('Greg Bird', '1'),
('Maikel Franco', '1'),
('Robinson Cano', '1'),
('Jose Altuve', '1'),
('Kris Bryant', '1'),
('Javier Baez', '2'),
('Kyle Schwarber', '1'),
('Trevor Story', '1'),
('Christian Yelich', '1');

INSERT INTO `vinny` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '4', 'Giancarlo Stanton', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '5', 'Paul Goldschmidt', '0'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '2', 'Michael Conforto', '0'),
('7', '3', 'Mike Moustakas', '1'),
('8', '4', 'Yasiel Puig', '0');

INSERT INTO `zippy` (`id`, `pid`, `player`, `homeRuns`) VALUES ('1', '6', 'Mike Trout', '0'),
('2', '1', 'Nolan Arenado', '0'),
('3', '1', 'Ronald Acu&#241;a Jr.', '0'),
('4', '6', 'Rhys Hoskins', '1'),
('5', '1', 'Jesus Aguilar', '0'),
('6', '5', 'Cody Bellinger', '1'),
('7', '2', 'Michael Conforto', '0'),
('8', '18', 'Eloy Jimenez', '0');




/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;