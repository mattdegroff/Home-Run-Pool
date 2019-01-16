-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db667170268.db.1and1.com
-- Generation Time: Oct 11, 2017 at 05:13 PM
-- Server version: 5.5.57-0+deb7u1-log
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db667170268`
--

-- --------------------------------------------------------

--
-- Table structure for table `ant`
--

CREATE TABLE IF NOT EXISTS `ant` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ant`
--

INSERT INTO `ant` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 10, 'Giancarlo Stanton', 59),
(3, 12, 'Anthony Rizzo', 32),
(4, 14, 'Trevor Story', 24),
(5, 17, 'Jose Bautista', 23),
(6, 13, 'Gary Sanchez', 33),
(7, 5, 'Miguel Sano', 28),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `antonio`
--

CREATE TABLE IF NOT EXISTS `antonio` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `antonio`
--

INSERT INTO `antonio` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 3, 'Chris Davis', 26),
(2, 1, 'Kris Bryant', 29),
(3, 4, 'Freddie Freeman', 28),
(4, 5, 'Carlos Gonzalez', 14),
(5, 2, 'Mookie Betts', 24),
(6, 8, 'Evan Gattis', 12),
(7, 21, 'Curtis Granderson', 26),
(8, 22, 'Ian Kinsler', 22);

-- --------------------------------------------------------

--
-- Table structure for table `ariel`
--

CREATE TABLE IF NOT EXISTS `ariel` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ariel`
--

INSERT INTO `ariel` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 9, 'Manny Machado', 33),
(3, 3, 'Robinson Cano', 23),
(4, 12, 'Anthony Rizzo', 32),
(5, 3, 'Paul Goldschmidt', 36),
(6, 5, 'Miguel Sano', 28),
(7, 13, 'Gary Sanchez', 33),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `date`) VALUES
(1, '2016-11-07 11:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `davevonte`
--

CREATE TABLE IF NOT EXISTS `davevonte` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `davevonte`
--

INSERT INTO `davevonte` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 2, 'Nelson Cruz', 39),
(2, 4, 'Yoenis Cespedes', 17),
(3, 3, 'Robinson Cano', 23),
(4, 14, 'Trevor Story', 24),
(5, 2, 'Mookie Betts', 24),
(6, 21, 'Curtis Granderson', 26),
(7, 11, 'Daniel Murphy', 23),
(8, 27, 'Yasmany Tomas', 8);

-- --------------------------------------------------------

--
-- Table structure for table `dunbar`
--

CREATE TABLE IF NOT EXISTS `dunbar` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dunbar`
--

INSERT INTO `dunbar` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 5, 'Josh Donaldson', 33),
(3, 4, 'Freddie Freeman', 28),
(4, 12, 'Anthony Rizzo', 32),
(5, 28, 'J.D. Martinez', 45),
(6, 5, 'Miguel Sano', 28),
(7, 6, 'Kyle Schwarber', 30),
(8, 7, 'George Springer', 34);

-- --------------------------------------------------------

--
-- Table structure for table `ferg`
--

CREATE TABLE IF NOT EXISTS `ferg` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ferg`
--

INSERT INTO `ferg` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 2, 'Nelson Cruz', 39),
(2, 1, 'Kris Bryant', 29),
(3, 6, 'Matt Kemp', 19),
(4, 12, 'Anthony Rizzo', 32),
(5, 19, 'Carlos Beltran', 14),
(6, 8, 'Evan Gattis', 12),
(7, 20, 'Brandon Moss', 22),
(8, 7, 'George Springer', 34);

-- --------------------------------------------------------

--
-- Table structure for table `groupA`
--

CREATE TABLE IF NOT EXISTS `groupA` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT ' ',
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `groupA`
--

INSERT INTO `groupA` (`id`, `player`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Nolan Arenado', 'COL', '', 37, 'http://espn.go.com/mlb/player/_/id/31261', '70.8'),
(3, 'Chris Davis', 'BAL', '', 26, 'http://espn.go.com/mlb/player/_/id/29170', '8.3'),
(7, 'Mark Trumbo', 'BAL', '', 23, 'http://espn.go.com/mlb/player/_/id/29322', '4.2'),
(4, 'Khris Davis', 'OAK', '', 43, 'http://espn.go.com/mlb/player/_/id/31478', '0.0'),
(5, 'Edwin Encarnacion', 'CLE', '', 38, 'http://espn.go.com/mlb/player/_/id/5904', '4.2'),
(6, 'Todd Frazier', 'NYY', '', 27, 'http://espn.go.com/mlb/player/_/id/30004', '0.0'),
(2, 'Nelson Cruz', 'SEA', ' ', 39, 'http://espn.go.com/mlb/player/_/id/6242', '12.5');

-- --------------------------------------------------------

--
-- Table structure for table `groupB`
--

CREATE TABLE IF NOT EXISTS `groupB` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `groupB`
--

INSERT INTO `groupB` (`id`, `player`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Kris Bryant', 'CHC', '', 29, 'http://espn.go.com/mlb/player/_/id/33172', '54.2'),
(2, 'Miguel Cabrera', 'DET', '', 16, 'http://espn.go.com/mlb/player/_/id/5544', '0.0'),
(8, 'Bryce Harper', 'WAS', '', 29, 'http://espn.go.com/mlb/player/_/id/30951', '0.0'),
(4, 'Yoenis Cespedes', 'NYM', '', 17, 'http://espn.go.com/mlb/player/_/id/32080', '8.3'),
(5, 'Josh Donaldson', 'TOR', '', 33, 'http://espn.go.com/mlb/player/_/id/29563', '4.2'),
(6, 'Brian Dozier', 'MIN', '', 34, 'http://espn.go.com/mlb/player/_/id/31009', '0.0'),
(9, 'Manny Machado', 'BAL', '', 33, 'http://espn.go.com/mlb/player/_/id/31097', '12.5'),
(3, 'Chris Carter', 'FA', '', 8, 'http://espn.go.com/mlb/player/_/id/29486', '0.0'),
(10, 'Giancarlo Stanton', 'MIA', '', 59, 'http://espn.go.com/mlb/player/_/id/30583', '16.6'),
(7, 'Adam Duvall', 'CIN', '', 31, 'http://espn.go.com/mlb/player/_/id/32664', '0.0'),
(11, 'Mike Trout', 'LAA', '', 33, 'http://espn.go.com/mlb/player/_/id/30836', '4.2');

-- --------------------------------------------------------

--
-- Table structure for table `groupC`
--

CREATE TABLE IF NOT EXISTS `groupC` (
  `id` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `groupC`
--

INSERT INTO `groupC` (`id`, `player`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Ryan Braun', 'MIL', '', 17, 'http://espn.go.com/mlb/player/_/id/28721', '0.0'),
(2, 'Jay Bruce', 'CLE', '', 36, 'http://espn.go.com/mlb/player/_/id/28954', '0.0'),
(3, 'Robinson Cano', 'SEA', '', 23, 'http://espn.go.com/mlb/player/_/id/6204', '33.3'),
(5, 'Carlos Gonzalez', 'COL', '', 14, 'http://espn.go.com/mlb/player/_/id/28658', '12.5'),
(4, 'Freddie Freeman', 'ATL', '', 28, 'http://espn.go.com/mlb/player/_/id/30193', '20.8'),
(6, 'Matt Kemp', 'ATL', '', 19, 'http://espn.go.com/mlb/player/_/id/28476', '4.2'),
(7, 'Evan Longoria', 'TB', '', 20, 'http://espn.go.com/mlb/player/_/id/28639', '8.3'),
(12, 'Anthony Rizzo', 'CHC', '', 32, 'http://espn.go.com/mlb/player/_/id/30782', '66.7'),
(9, 'Mike Napoli', 'TEX', '', 29, 'http://espn.go.com/mlb/player/_/id/28444', '8.3'),
(10, 'Rougned Odor', 'TEX', '', 30, 'http://espn.go.com/mlb/player/_/id/32170', '4.2'),
(8, 'Kendrys Morales', 'TOR', '', 28, 'http://espn.go.com/mlb/player/_/id/6188', '4.2'),
(11, 'Albert Pujols', 'LAA', '', 23, 'http://espn.go.com/mlb/player/_/id/4574', '4.2'),
(13, 'Carlos Santana', 'CLE', '', 23, 'http://espn.go.com/mlb/player/_/id/30280', '4.2'),
(14, 'Trevor Story', 'COL', '', 24, 'http://espn.go.com/mlb/player/_/id/32150', '25.0'),
(15, 'Justin Upton', 'LAA', '', 35, 'http://espn.go.com/mlb/player/_/id/28841', '8.3');

-- --------------------------------------------------------

--
-- Table structure for table `groupD`
--

CREATE TABLE IF NOT EXISTS `groupD` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `groupD`
--

INSERT INTO `groupD` (`id`, `firstName`, `lastName`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(2, 'Mookie', 'Betts', 'BOS', '', 24, 'http://espn.go.com/mlb/player/_/id/33039', '0.0'),
(1, 'Jose', 'Abreu', 'CWS', '', 33, 'http://espn.go.com/mlb/player/_/id/33095', '0.0'),
(3, 'Paul', 'Goldschmidt', 'ARI', '', 36, 'http://espn.go.com/mlb/player/_/id/31027', '0.0'),
(4, 'Adam', 'Jones', 'BAL', '', 26, 'http://espn.go.com/mlb/player/_/id/28513', '0.0'),
(5, 'Miguel', 'Sano', 'MIN', '', 28, 'http://espn.go.com/mlb/player/_/id/31260', '0.0'),
(6, 'Kyle', 'Schwarber', 'CHC', '', 30, 'http://espn.go.com/mlb/player/_/id/33712', '0.0'),
(7, 'George', 'Springer', 'HOU', '', 34, 'http://espn.go.com/mlb/player/_/id/32078', '0.0'),
(28, 'J.D.', 'Martinez', 'ARI', '', 45, 'http://espn.go.com/mlb/player/_/id/31065', '0.0'),
(8, 'Evan', 'Gattis', 'HOU', '', 12, 'http://espn.go.com/mlb/player/_/id/32863', '0.0'),
(9, 'Kyle', 'Seager', 'SEA', '', 27, 'http://espn.go.com/mlb/player/_/id/30819', '0.0'),
(10, 'Joey', 'Votto', 'CIN', '', 36, 'http://espn.go.com/mlb/player/_/id/28670', '0.0'),
(11, 'Daniel', 'Murphy', 'WAS', '', 23, 'http://espn.go.com/mlb/player/_/id/29200', '0.0'),
(12, 'Jedd', 'Gyorko', 'STL', '', 20, 'http://espn.go.com/mlb/player/_/id/31402', '0.0'),
(26, 'Adrian', 'Beltre', 'TEX', '', 17, 'http://espn.go.com/mlb/player/_/id/3878', '0.0'),
(13, 'Gary', 'Sanchez', 'NYY', '', 33, 'http://espn.go.com/mlb/player/_/id/31095', '0.0'),
(14, 'Corey', 'Seager', 'LAD', '', 22, 'http://espn.go.com/mlb/player/_/id/32691', '0.0'),
(15, 'Wil', 'Myers', 'SD', '', 30, 'http://espn.go.com/mlb/player/_/id/31265', '0.0'),
(16, 'Hanley', 'Ramirez', 'BOS', '', 23, 'http://espn.go.com/mlb/player/_/id/6195', '0.0'),
(17, 'Jose', 'Bautista', 'TOR', '', 23, 'http://espn.go.com/mlb/player/_/id/5890', '0.0'),
(23, 'Maikel', 'Franco', 'PHI', '', 24, 'http://espn.go.com/mlb/player/_/id/32163', '0.0'),
(18, 'Greg', 'Bird', 'NYY', '', 9, 'http://espn.go.com/mlb/player/_/id/32695', '0.0'),
(19, 'Carlos', 'Beltran', 'HOU', '', 14, 'http://espn.go.com/mlb/player/_/id/3971', '0.0'),
(20, 'Brandon', 'Moss', 'KC', '', 22, 'http://espn.go.com/mlb/player/_/id/28844', '0.0'),
(27, 'Yasmany', 'Tomas', 'ARI', '', 8, 'http://espn.go.com/mlb/player/_/id/33662', '0.0'),
(25, 'Aaron', 'Judge', 'NYY', '', 52, 'http://espn.go.com/mlb/player/_/id/33192', '0.0'),
(24, 'Andrew', 'McCutchen', 'PIT', '', 28, 'http://espn.go.com/mlb/player/_/id/28701', '0.0'),
(21, 'Curtis', 'Granderson', 'LAD', '', 26, 'http://espn.go.com/mlb/player/_/id/6125', '0.0'),
(22, 'Ian', 'Kinsler', 'DET', '', 22, 'http://espn.go.com/mlb/player/_/id/6197', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE IF NOT EXISTS `grup` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 2, 'Nelson Cruz', 39),
(2, 1, 'Kris Bryant', 29),
(3, 3, 'Robinson Cano', 23),
(4, 4, 'Freddie Freeman', 28),
(5, 2, 'Mookie Betts', 24),
(6, 4, 'Adam Jones', 26),
(7, 5, 'Miguel Sano', 28),
(8, 7, 'George Springer', 34);

-- --------------------------------------------------------

--
-- Table structure for table `justin`
--

CREATE TABLE IF NOT EXISTS `justin` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `justin`
--

INSERT INTO `justin` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 4, 'Yoenis Cespedes', 17),
(3, 3, 'Robinson Cano', 23),
(4, 4, 'Freddie Freeman', 28),
(5, 2, 'Mookie Betts', 24),
(6, 18, 'Greg Bird', 9),
(7, 8, 'Evan Gattis', 12),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kev`
--

CREATE TABLE IF NOT EXISTS `kev` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kev`
--

INSERT INTO `kev` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 9, 'Manny Machado', 33),
(3, 3, 'Robinson Cano', 23),
(4, 12, 'Anthony Rizzo', 32),
(5, 2, 'Mookie Betts', 24),
(6, 3, 'Paul Goldschmidt', 36),
(7, 14, 'Corey Seager', 22),
(8, 13, 'Gary Sanchez', 33);

-- --------------------------------------------------------

--
-- Table structure for table `lark`
--

CREATE TABLE IF NOT EXISTS `lark` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lark`
--

INSERT INTO `lark` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 3, 'Chris Davis', 26),
(2, 10, 'Giancarlo Stanton', 59),
(3, 12, 'Anthony Rizzo', 32),
(4, 14, 'Trevor Story', 24),
(5, 17, 'Jose Bautista', 23),
(6, 2, 'Mookie Betts', 24),
(7, 25, 'Aaron Judge', 52),
(8, 5, 'Miguel Sano', 28);

-- --------------------------------------------------------

--
-- Table structure for table `matt`
--

CREATE TABLE IF NOT EXISTS `matt` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `matt`
--

INSERT INTO `matt` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 10, 'Giancarlo Stanton', 59),
(3, 4, 'Freddie Freeman', 28),
(4, 9, 'Mike Napoli', 29),
(5, 2, 'Mookie Betts', 24),
(6, 3, 'Paul Goldschmidt', 36),
(7, 5, 'Miguel Sano', 28),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `menke`
--

CREATE TABLE IF NOT EXISTS `menke` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `menke`
--

INSERT INTO `menke` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(4, 12, 'Anthony Rizzo', 32),
(3, 5, 'Carlos Gonzalez', 14),
(5, 3, 'Paul Goldschmidt', 36),
(6, 15, 'Wil Myers', 30),
(8, 14, 'Corey Seager', 22),
(7, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `mistron`
--

CREATE TABLE IF NOT EXISTS `mistron` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mistron`
--

INSERT INTO `mistron` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 13, 'Carlos Santana', 23),
(4, 15, 'Justin Upton', 35),
(5, 2, 'Mookie Betts', 24),
(6, 8, 'Evan Gattis', 12),
(7, 9, 'Kyle Seager', 27),
(8, 10, 'Joey Votto', 36);

-- --------------------------------------------------------

--
-- Table structure for table `moresky`
--

CREATE TABLE IF NOT EXISTS `moresky` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `moresky`
--

INSERT INTO `moresky` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 9, 'Manny Machado', 33),
(3, 12, 'Anthony Rizzo', 32),
(4, 14, 'Trevor Story', 24),
(5, 17, 'Jose Bautista', 23),
(6, 26, 'Adrian Beltre', 17),
(7, 2, 'Mookie Betts', 24),
(8, 11, 'Daniel Murphy', 23);

-- --------------------------------------------------------

--
-- Table structure for table `nestor`
--

CREATE TABLE IF NOT EXISTS `nestor` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `nestor`
--

INSERT INTO `nestor` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 10, 'Giancarlo Stanton', 59),
(3, 3, 'Robinson Cano', 23),
(4, 5, 'Carlos Gonzalez', 14),
(5, 1, 'Jose Abreu', 33),
(6, 17, 'Jose Bautista', 23),
(7, 3, 'Paul Goldschmidt', 36),
(8, 13, 'Gary Sanchez', 33);

-- --------------------------------------------------------

--
-- Table structure for table `par`
--

CREATE TABLE IF NOT EXISTS `par` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `par`
--

INSERT INTO `par` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 3, 'Robinson Cano', 23),
(4, 10, 'Rougned Odor', 30),
(5, 23, 'Maikel Franco', 24),
(6, 25, 'Aaron Judge', 52),
(7, 24, 'Andrew McCutchen', 28),
(8, 13, 'Gary Sanchez', 33);

-- --------------------------------------------------------

--
-- Table structure for table `pedowitz`
--

CREATE TABLE IF NOT EXISTS `pedowitz` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pedowitz`
--

INSERT INTO `pedowitz` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 12, 'Anthony Rizzo', 32),
(4, 14, 'Trevor Story', 24),
(5, 17, 'Jose Bautista', 23),
(6, 4, 'Adam Jones', 26),
(7, 16, 'Hanley Ramirez', 23),
(8, 13, 'Gary Sanchez', 33);

-- --------------------------------------------------------

--
-- Table structure for table `playing`
--

CREATE TABLE IF NOT EXISTS `playing` (
  `group` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `players` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `playing`
--

INSERT INTO `playing` (`group`, `players`, `inning`, `homeRuns`) VALUES
('', 'David Ortiz', 'Bot 7th', 0),
('', 'Alex Rodriguez', 'Bot 7th', 0),
('', 'Mark Teixeira', 'Bot 7th', 0),
('', 'Brian McCann', 'Bot 7th', 0),
('', 'Brett Gardner', 'Bot 7th', 0),
('', 'Hanley Ramirez', 'Bot 7th', 0),
('', 'Carlos Beltran', 'Bot 7th', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pooch`
--

CREATE TABLE IF NOT EXISTS `pooch` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pooch`
--

INSERT INTO `pooch` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(4, 12, 'Anthony Rizzo', 32),
(3, 3, 'Robinson Cano', 23),
(5, 2, 'Mookie Betts', 24),
(6, 13, 'Gary Sanchez', 33),
(7, 14, 'Corey Seager', 22),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `rabbit`
--

CREATE TABLE IF NOT EXISTS `rabbit` (
  `id` int(11) NOT NULL,
  `gr` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `color` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rabbit`
--

INSERT INTO `rabbit` (`id`, `gr`, `color`, `player`, `homeRuns`) VALUES
(1, 'A', '#d10000', 'Khris Davis', 43),
(2, 'B', '#ff7171', 'Giancarlo Stanton', 59),
(3, 'C', '#ffafaf', 'Jay Bruce', 36),
(4, 'C', '#ffafaf', 'Justin Upton', 35),
(5, 'D', 'white', 'Aaron Judge', 52),
(6, 'D', 'white', 'J.D. Martinez', 45),
(7, 'D', 'white', 'Joey Gallo', 41),
(8, 'D', 'white', 'Cody Bellinger', 39);

-- --------------------------------------------------------

--
-- Table structure for table `rebekah`
--

CREATE TABLE IF NOT EXISTS `rebekah` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rebekah`
--

INSERT INTO `rebekah` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 7, 'Mark Trumbo', 23),
(2, 1, 'Kris Bryant', 29),
(3, 12, 'Anthony Rizzo', 32),
(4, 15, 'Justin Upton', 35),
(5, 2, 'Mookie Betts', 24),
(6, 12, 'Jedd Gyorko', 20),
(7, 4, 'Adam Jones', 26),
(8, 11, 'Daniel Murphy', 23);

-- --------------------------------------------------------

--
-- Table structure for table `scott`
--

CREATE TABLE IF NOT EXISTS `scott` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `scott`
--

INSERT INTO `scott` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 7, 'Evan Longoria', 20),
(4, 12, 'Anthony Rizzo', 32),
(5, 2, 'Mookie Betts', 24),
(6, 18, 'Greg Bird', 9),
(7, 13, 'Gary Sanchez', 33),
(8, 6, 'Kyle Schwarber', 30);

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE IF NOT EXISTS `standings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL,
  `font` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  `pass` varchar(32) COLLATE latin1_general_ci NOT NULL DEFAULT '000000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`id`, `color`, `name`, `homeRuns`, `font`, `code`, `paid`, `pass`) VALUES
(1, 'red', 'Vinny', 229, 0, 'vinnyC', 1, 's6fane'),
(2, 'purple', 'DeGroff', 247, 1, 'matt', 1, 'thefr8'),
(3, 'silver', 'Ferg', 189, 0, 'ferg', 1, 'muc3ac'),
(4, '#85bb65', 'Grupski', 208, 0, 'grup', 1, 'sa2utr'),
(5, '#228b22', 'Mistron', 211, 0, 'mistron', 1, 'ne8esp'),
(6, 'black', 'Davevonte', 176, 1, 'davevonte', 1, 'he6esw'),
(7, 'navy', 'Pooch Cake', 208, 1, 'pooch', 1, 'cr2pru'),
(8, 'orange', 'Parchinsky', 233, 0, 'par', 1, 'jep5eg'),
(9, '#1e90ff', 'Scott', 205, 0, 'scott', 1, 's4uwew'),
(10, '#3F393E', 'Kevin', 218, 2, 'kev', 1, 'nuc4ep'),
(11, 'blue', 'Tom', 218, 2, 'tom', 1, 'qum7ta'),
(12, '#add8e6', 'Ant', 243, 0, 'ant', 1, 'zujuz7'),
(13, 'white', 'Nestor', 244, 0, 'nestor', 1, 'sef8ap'),
(14, '#8b4513', 'Ariel', 229, 1, 'ariel', 1, 'fep2er'),
(15, '#ffa2d0', 'Rebekah', 192, 0, 'rebekah', 1, 'm5mubr'),
(16, 'maroon', 'Menke', 216, 1, 'menke', 1, 'nuf7pu'),
(17, '#20ff00', 'Steve', 201, 0, 'steve', 1, 's7chet'),
(18, '#00ffdc', 'Zippy', 216, 0, 'zippy', 1, 'prer3s'),
(19, '#ecd540', 'Pedowitz', 204, 0, 'pedowitz', 1, 'xutr3n'),
(20, '#9135FF', 'Moresky', 196, 1, 'moresky', 1, 'th8upr'),
(21, '#6e7f39', 'Antonio', 169, 1, 'antonio', 1, '6uhawu'),
(22, '#cb355d', 'Justin', 171, 0, 'justin', 1, 'stu7es'),
(23, 'yellow', 'Lark', 245, 0, 'lark', 1, '000000'),
(24, '#b299e5', 'Dunbar', 239, 0, 'dunbar', 1, '000000');

-- --------------------------------------------------------

--
-- Table structure for table `steve`
--

CREATE TABLE IF NOT EXISTS `steve` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `steve`
--

INSERT INTO `steve` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 12, 'Anthony Rizzo', 32),
(4, 14, 'Trevor Story', 24),
(5, 2, 'Mookie Betts', 24),
(6, 21, 'Curtis Granderson', 26),
(7, 4, 'Adam Jones', 26),
(8, 9, 'Kyle Seager', 27);

-- --------------------------------------------------------

--
-- Table structure for table `timelineA`
--

CREATE TABLE IF NOT EXISTS `timelineA` (
  `id` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `4/3` int(11) NOT NULL DEFAULT '0',
  `4/4` int(11) NOT NULL DEFAULT '0',
  `4/5` int(11) NOT NULL DEFAULT '0',
  `4/6` int(11) NOT NULL DEFAULT '0',
  `4/7` int(11) NOT NULL DEFAULT '0',
  `4/8` int(11) NOT NULL DEFAULT '0',
  `4/9` int(11) NOT NULL DEFAULT '0',
  `4/10` int(11) NOT NULL DEFAULT '0',
  `4/11` int(11) NOT NULL DEFAULT '0',
  `4/12` int(11) NOT NULL DEFAULT '0',
  `4/13` int(11) NOT NULL DEFAULT '0',
  `4/14` int(11) NOT NULL DEFAULT '0',
  `4/15` int(11) NOT NULL DEFAULT '0',
  `4/16` int(11) NOT NULL DEFAULT '0',
  `4/17` int(11) NOT NULL DEFAULT '0',
  `4/18` int(11) NOT NULL DEFAULT '0',
  `4/19` int(11) NOT NULL DEFAULT '0',
  `4/20` int(11) NOT NULL DEFAULT '0',
  `4/21` int(11) NOT NULL DEFAULT '0',
  `4/22` int(11) NOT NULL DEFAULT '0',
  `4/23` int(11) NOT NULL DEFAULT '0',
  `4/24` int(11) NOT NULL DEFAULT '0',
  `4/25` int(11) NOT NULL DEFAULT '0',
  `4/26` int(11) NOT NULL DEFAULT '0',
  `4/27` int(11) NOT NULL DEFAULT '0',
  `4/28` int(11) NOT NULL DEFAULT '0',
  `4/29` int(11) NOT NULL DEFAULT '0',
  `4/30` int(11) NOT NULL DEFAULT '0',
  `5/1` int(11) NOT NULL DEFAULT '0',
  `5/2` int(11) NOT NULL DEFAULT '0',
  `5/3` int(11) NOT NULL DEFAULT '0',
  `5/4` int(11) NOT NULL DEFAULT '0',
  `5/5` int(11) NOT NULL DEFAULT '0',
  `5/6` int(11) NOT NULL DEFAULT '0',
  `5/7` int(11) NOT NULL DEFAULT '0',
  `5/8` int(11) NOT NULL DEFAULT '0',
  `5/9` int(11) NOT NULL DEFAULT '0',
  `5/10` int(11) DEFAULT '0',
  `5/11` int(11) NOT NULL DEFAULT '0',
  `5/12` int(11) NOT NULL DEFAULT '0',
  `5/13` int(11) NOT NULL DEFAULT '0',
  `5/14` int(11) NOT NULL DEFAULT '0',
  `5/15` int(11) NOT NULL DEFAULT '0',
  `5/16` int(11) NOT NULL DEFAULT '0',
  `5/17` int(11) NOT NULL DEFAULT '0',
  `5/18` int(11) DEFAULT NULL,
  `5/19` int(11) DEFAULT NULL,
  `5/20` int(11) DEFAULT NULL,
  `5/21` int(11) DEFAULT NULL,
  `5/23` int(11) DEFAULT NULL,
  `5/24` int(11) DEFAULT NULL,
  `5/25` int(11) DEFAULT NULL,
  `5/26` int(11) DEFAULT NULL,
  `5/27` int(11) DEFAULT NULL,
  `5/28` int(11) DEFAULT NULL,
  `5/29` int(11) DEFAULT NULL,
  `5/30` int(11) DEFAULT NULL,
  `5/31` int(11) DEFAULT NULL,
  `6/1` int(11) DEFAULT NULL,
  `6/2` int(11) DEFAULT NULL,
  `6/3` int(11) DEFAULT NULL,
  `6/4` int(11) DEFAULT NULL,
  `6/5` int(11) DEFAULT NULL,
  `6/6` int(11) DEFAULT NULL,
  `6/7` int(11) DEFAULT NULL,
  `6/8` int(11) DEFAULT NULL,
  `6/9` int(11) DEFAULT NULL,
  `6/10` int(11) DEFAULT NULL,
  `6/11` int(11) DEFAULT NULL,
  `6/12` int(11) DEFAULT NULL,
  `6/13` int(11) DEFAULT NULL,
  `6/14` int(11) DEFAULT NULL,
  `6/15` int(11) DEFAULT NULL,
  `6/16` int(11) DEFAULT NULL,
  `6/17` int(11) DEFAULT NULL,
  `6/18` int(11) DEFAULT NULL,
  `6/19` int(11) DEFAULT NULL,
  `6/20` int(11) DEFAULT NULL,
  `6/21` int(11) DEFAULT NULL,
  `6/22` int(11) DEFAULT NULL,
  `6/23` int(11) DEFAULT NULL,
  `6/24` int(11) DEFAULT NULL,
  `6/25` int(11) DEFAULT NULL,
  `6/26` int(11) DEFAULT NULL,
  `6/27` int(11) DEFAULT NULL,
  `6/28` int(11) DEFAULT NULL,
  `6/29` int(11) DEFAULT NULL,
  `6/30` int(11) DEFAULT NULL,
  `7/1` int(11) DEFAULT NULL,
  `7/2` int(11) DEFAULT NULL,
  `7/3` int(11) DEFAULT NULL,
  `7/4` int(11) DEFAULT NULL,
  `7/5` int(11) DEFAULT NULL,
  `7/6` int(11) DEFAULT NULL,
  `7/7` int(11) DEFAULT NULL,
  `7/8` int(11) DEFAULT NULL,
  `7/9` int(11) DEFAULT NULL,
  `7/10` int(11) DEFAULT NULL,
  `7/11` int(11) DEFAULT NULL,
  `7/12` int(11) DEFAULT NULL,
  `7/13` int(11) DEFAULT NULL,
  `7/14` int(11) DEFAULT NULL,
  `7/15` int(11) DEFAULT NULL,
  `7/16` int(11) DEFAULT NULL,
  `7/17` int(11) DEFAULT NULL,
  `7/18` int(11) DEFAULT NULL,
  `7/19` int(11) DEFAULT NULL,
  `7/20` int(11) DEFAULT NULL,
  `7/21` int(11) DEFAULT NULL,
  `7/22` int(11) DEFAULT NULL,
  `7/23` int(11) DEFAULT NULL,
  `7/24` int(11) DEFAULT NULL,
  `7/25` int(11) DEFAULT NULL,
  `7/26` int(11) DEFAULT NULL,
  `7/27` int(11) DEFAULT NULL,
  `7/28` int(11) DEFAULT NULL,
  `7/29` int(11) DEFAULT NULL,
  `7/30` int(11) DEFAULT NULL,
  `7/31` int(11) DEFAULT NULL,
  `8/1` int(11) DEFAULT NULL,
  `8/6` int(11) DEFAULT NULL,
  `8/7` int(11) DEFAULT NULL,
  `8/8` int(11) DEFAULT NULL,
  `8/9` int(11) DEFAULT NULL,
  `8/10` int(11) DEFAULT NULL,
  `8/11` int(11) DEFAULT NULL,
  `8/12` int(11) DEFAULT NULL,
  `8/13` int(11) DEFAULT NULL,
  `8/14` int(11) DEFAULT NULL,
  `8/15` int(11) DEFAULT NULL,
  `8/16` int(11) DEFAULT NULL,
  `8/17` int(11) DEFAULT NULL,
  `8/18` int(11) DEFAULT NULL,
  `8/19` int(11) DEFAULT NULL,
  `8/20` int(11) DEFAULT NULL,
  `8/21` int(11) DEFAULT NULL,
  `8/22` int(11) DEFAULT NULL,
  `8/23` int(11) DEFAULT NULL,
  `8/24` int(11) DEFAULT NULL,
  `8/25` int(11) DEFAULT NULL,
  `8/26` int(11) DEFAULT NULL,
  `8/27` int(11) DEFAULT NULL,
  `8/28` int(11) DEFAULT NULL,
  `8/29` int(11) DEFAULT NULL,
  `8/30` int(11) DEFAULT NULL,
  `8/31` int(11) DEFAULT NULL,
  `9/1` int(11) DEFAULT NULL,
  `9/2` int(11) DEFAULT NULL,
  `9/3` int(11) DEFAULT NULL,
  `9/4` int(11) DEFAULT NULL,
  `9/5` int(11) DEFAULT NULL,
  `9/6` int(11) DEFAULT NULL,
  `9/7` int(11) DEFAULT NULL,
  `9/8` int(11) DEFAULT NULL,
  `9/9` int(11) DEFAULT NULL,
  `9/10` int(11) DEFAULT NULL,
  `9/11` int(11) DEFAULT NULL,
  `9/12` int(11) DEFAULT NULL,
  `9/13` int(11) DEFAULT NULL,
  `9/14` int(11) DEFAULT NULL,
  `9/15` int(11) DEFAULT NULL,
  `9/16` int(11) DEFAULT NULL,
  `9/17` int(11) DEFAULT NULL,
  `9/18` int(11) DEFAULT NULL,
  `9/19` int(11) DEFAULT NULL,
  `9/20` int(11) DEFAULT NULL,
  `9/21` int(11) DEFAULT NULL,
  `9/22` int(11) DEFAULT NULL,
  `9/23` int(11) DEFAULT NULL,
  `9/24` int(11) DEFAULT NULL,
  `9/25` int(11) DEFAULT NULL,
  `9/26` int(11) DEFAULT NULL,
  `9/27` int(11) DEFAULT NULL,
  `9/28` int(11) DEFAULT NULL,
  `9/29` int(11) DEFAULT NULL,
  `9/30` int(11) DEFAULT NULL,
  `10/1` int(11) DEFAULT NULL,
  `10/2` int(11) DEFAULT NULL,
  `10/3` int(11) DEFAULT NULL,
  `10/4` int(11) DEFAULT NULL,
  `10/5` int(11) DEFAULT NULL,
  `10/6` int(11) DEFAULT NULL,
  `10/7` int(11) DEFAULT NULL,
  `10/8` int(11) DEFAULT NULL,
  `10/9` int(11) DEFAULT NULL,
  `10/10` int(11) DEFAULT NULL,
  `10/11` int(11) DEFAULT NULL,
  `10/12` int(11) DEFAULT NULL,
  `10/13` int(11) DEFAULT NULL,
  `10/14` int(11) DEFAULT NULL,
  `10/15` int(11) DEFAULT NULL,
  `10/16` int(11) DEFAULT NULL,
  `10/17` int(11) DEFAULT NULL,
  `10/18` int(11) DEFAULT NULL,
  `10/19` int(11) DEFAULT NULL,
  `10/20` int(11) DEFAULT NULL,
  `10/21` int(11) DEFAULT NULL,
  `10/22` int(11) DEFAULT NULL,
  `10/23` int(11) DEFAULT NULL,
  `10/24` int(11) DEFAULT NULL,
  `10/25` int(11) DEFAULT NULL,
  `10/26` int(11) DEFAULT NULL,
  `10/27` int(11) DEFAULT NULL,
  `10/28` int(11) DEFAULT NULL,
  `10/29` int(11) DEFAULT NULL,
  `10/30` int(11) DEFAULT NULL,
  `10/31` int(11) DEFAULT NULL,
  `11/1` int(11) DEFAULT NULL,
  `11/2` int(11) DEFAULT NULL,
  `11/3` int(11) DEFAULT NULL,
  `11/4` int(11) DEFAULT NULL,
  `11/5` int(11) DEFAULT NULL,
  `11/6` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `today`
--

CREATE TABLE IF NOT EXISTS `today` (
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `today`
--

INSERT INTO `today` (`player`, `HR`) VALUES
('Maikel Franco', 1),
('Khris Davis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tom`
--

CREATE TABLE IF NOT EXISTS `tom` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tom`
--

INSERT INTO `tom` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 11, 'Mike Trout', 33),
(3, 9, 'Mike Napoli', 29),
(4, 12, 'Anthony Rizzo', 32),
(5, 4, 'Adam Jones', 26),
(6, 9, 'Kyle Seager', 27),
(7, 7, 'George Springer', 34),
(8, 16, 'Hanley Ramirez', 23);

-- --------------------------------------------------------

--
-- Table structure for table `vinnyC`
--

CREATE TABLE IF NOT EXISTS `vinnyC` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vinnyC`
--

INSERT INTO `vinnyC` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 37),
(2, 1, 'Kris Bryant', 29),
(3, 8, 'Kendrys Morales', 28),
(4, 12, 'Anthony Rizzo', 32),
(5, 1, 'Jose Abreu', 33),
(6, 3, 'Paul Goldschmidt', 36),
(7, 4, 'Adam Jones', 26),
(8, 7, 'George Springer', 34);

-- --------------------------------------------------------

--
-- Table structure for table `zippy`
--

CREATE TABLE IF NOT EXISTS `zippy` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `zippy`
--

INSERT INTO `zippy` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Edwin Encarnacion', 38),
(2, 1, 'Kris Bryant', 29),
(3, 11, 'Albert Pujols', 23),
(4, 12, 'Anthony Rizzo', 32),
(5, 1, 'Jose Abreu', 33),
(6, 17, 'Jose Bautista', 23),
(7, 13, 'Gary Sanchez', 33),
(8, 5, 'Miguel Sano', 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
