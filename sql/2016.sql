-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db617636683.db.1and1.com
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
-- Database: `db617636683`
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
(1, 5, 'Giancarlo Stanton', 27),
(2, 7, 'Manny Machado', 37),
(3, 2, 'Kris Bryant', 39),
(4, 3, 'Yoenis Cespedes', 31),
(5, 4, 'Miguel Cabrera', 38),
(6, 7, 'Chris Carter', 41),
(7, 14, 'Kyle Schwarber', 0),
(8, 18, 'Justin Upton', 31);

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
(1, 4, 'Bryce Harper', 24),
(2, 1, 'Nolan Arenado', 41),
(3, 2, 'Kris Bryant', 39),
(4, 11, 'Mark Teixeira', 15),
(5, 1, 'Pedro Alvarez', 22),
(6, 4, 'Miguel Cabrera', 38),
(7, 6, 'Matt Carpenter', 21),
(8, 8, 'Carlos Correa', 20);

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 2, 'Jose Bautista', 22),
(3, 3, 'Yoenis Cespedes', 31),
(4, 10, 'Miguel Sano', 25),
(7, 15, 'Kyle Seager', 30),
(8, 23, 'Troy Tulowitzki', 24),
(5, 4, 'Miguel Cabrera', 38),
(6, 12, 'Brian McCann', 20);

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
(1, 4, 'Bryce Harper', 24),
(2, 4, 'Todd Frazier', 40),
(3, 2, 'Kris Bryant', 39),
(4, 3, 'Yoenis Cespedes', 31),
(5, 5, 'Robinson Cano', 39),
(6, 10, 'Prince Fielder', 8),
(7, 11, 'Curtis Granderson', 30),
(8, 17, 'Mark Trumbo', 47);

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
(1, 'Nelson Cruz', 'SEA', '', 43, 'http://espn.go.com/mlb/player/_/id/6242', '4.3'),
(2, 'Chris Davis', 'BAL', '', 38, 'http://espn.go.com/mlb/player/_/id/29170', '13.0'),
(3, 'Josh Donaldson', 'TOR', '', 37, 'http://espn.go.com/mlb/player/_/id/29563', '0.0'),
(4, 'Bryce Harper', 'WAS', '', 24, 'http://espn.go.com/mlb/player/_/id/30951', '26.1'),
(5, 'Giancarlo Stanton', 'MIA', '', 27, 'http://espn.go.com/mlb/player/_/id/30583', '47.8'),
(6, 'Mike Trout', 'LAA', '', 29, 'http://espn.go.com/mlb/player/_/id/30836', '8.7');

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
(1, 'Nolan Arenado', 'COL', '', 41, 'http://espn.go.com/mlb/player/_/id/31261', '21.7'),
(2, 'Jose Bautista', 'TOR', '', 22, 'http://espn.go.com/mlb/player/_/id/5890', '39.1'),
(3, 'Edwin Encarnacion', 'TOR', '', 42, 'http://espn.go.com/mlb/player/_/id/5904', '8.7'),
(4, 'Todd Frazier', 'CWS', '', 40, 'http://espn.go.com/mlb/player/_/id/30004', '4.3'),
(5, 'Paul Goldschmidt', 'ARI', '', 24, 'http://espn.go.com/mlb/player/_/id/31027', '8.7'),
(6, 'Carlos Gonzalez', 'COL', '', 25, 'http://espn.go.com/mlb/player/_/id/28658', '4.3'),
(7, 'Manny Machado', 'BAL', '', 37, 'http://espn.go.com/mlb/player/_/id/31097', '4.3'),
(8, 'J.D. Martinez', 'DET', '', 22, 'http://espn.go.com/mlb/player/_/id/31065', '4.3'),
(9, 'David Ortiz', 'BOS', 'Bot 7th', 38, 'http://espn.go.com/mlb/player/_/id/3748', '4.3'),
(10, 'Albert Pujols', 'LAA', '', 31, 'http://espn.go.com/mlb/player/_/id/4574', '0.0');

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
(1, 'Jose Abreu', 'CWS', '', 25, 'http://espn.go.com/mlb/player/_/id/33095', '26.1'),
(2, 'Kris Bryant', 'CHC', '', 39, 'http://espn.go.com/mlb/player/_/id/33172', '47.8'),
(3, 'Yoenis Cespedes', 'NYM', '', 31, 'http://espn.go.com/mlb/player/_/id/32080', '34.8'),
(4, 'Lucas Duda', 'NYM', '', 7, 'http://espn.go.com/mlb/player/_/id/30953', '13.0'),
(5, 'Evan Gattis', 'HOU', '', 32, 'http://espn.go.com/mlb/player/_/id/32863', '4.3'),
(6, 'Adrian Gonzalez', 'LAD', '', 18, 'http://espn.go.com/mlb/player/_/id/5405', '0.0'),
(7, 'Adam Jones', 'BAL', '', 29, 'http://espn.go.com/mlb/player/_/id/28513', '0.0'),
(8, 'Anthony Rizzo', 'CHC', '', 32, 'http://espn.go.com/mlb/player/_/id/30782', '39.1'),
(9, 'Alex Rodriguez', 'NYY', 'Bot 7th', 9, 'http://espn.go.com/mlb/player/_/id/3115', '8.7'),
(10, 'Miguel Sano', 'MIN', '', 25, 'http://espn.go.com/mlb/player/_/id/31260', '17.4'),
(11, 'Mark Teixeira', 'NYY', 'Bot 7th', 15, 'http://espn.go.com/mlb/player/_/id/4937', '8.7'),
(12, 'Joey Votto', 'CIN', '', 29, 'http://espn.go.com/mlb/player/_/id/28670', '0.0');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `groupD`
--

INSERT INTO `groupD` (`id`, `firstName`, `lastName`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Pedro', 'Alvarez', 'BAL', '', 22, 'http://espn.go.com/mlb/player/_/id/29962', '17.4'),
(2, 'Ryan', 'Braun', 'MIL', '', 30, 'http://espn.go.com/mlb/player/_/id/28721', '8.7'),
(3, 'Jay', 'Bruce', 'NYM', '', 33, 'http://espn.go.com/mlb/player/_/id/28954', '4.3'),
(4, 'Miguel', 'Cabrera', 'DET', '', 38, 'http://espn.go.com/mlb/player/_/id/5544', '43.5'),
(5, 'Robinson', 'Cano', 'SEA', '', 39, 'http://espn.go.com/mlb/player/_/id/6204', '13.0'),
(6, 'Matt', 'Carpenter', 'STL', '', 21, 'http://espn.go.com/mlb/player/_/id/31015', '17.4'),
(7, 'Chris', 'Carter', 'MIL', '', 41, 'http://espn.go.com/mlb/player/_/id/29486', '13.0'),
(8, 'Carlos', 'Correa', 'HOU', '', 20, 'http://espn.go.com/mlb/player/_/id/32653', '13.0'),
(9, 'Brian', 'Dozier', 'MIN', '', 42, 'http://espn.go.com/mlb/player/_/id/31009', '26.1'),
(10, 'Prince', 'Fielder', 'TEX', '', 8, 'http://espn.go.com/mlb/player/_/id/5915', '26.1'),
(11, 'Curtis', 'Granderson', 'NYM', '', 30, 'http://espn.go.com/mlb/player/_/id/6125', '26.1'),
(12, 'Brian', 'McCann', 'NYY', 'Bot 7th', 20, 'http://espn.go.com/mlb/player/_/id/6309', '13.0'),
(13, 'Byung Ho', 'Park', 'MIN', '', 12, 'http://espn.go.com/mlb/player/_/id/34839', '17.4'),
(14, 'Kyle', 'Schwarber', 'CHC', '', 0, 'http://espn.go.com/mlb/player/_/id/33712', '17.4'),
(15, 'Kyle', 'Seager', 'SEA', '', 30, 'http://espn.go.com/mlb/player/_/id/30819', '13.0'),
(16, 'George', 'Springer', 'HOU', '', 29, 'http://espn.go.com/mlb/player/_/id/32078', '8.7'),
(17, 'Mark', 'Trumbo', 'BAL', '', 47, 'http://espn.go.com/mlb/player/_/id/29322', '21.7'),
(18, 'Justin', 'Upton', 'DET', '', 31, 'http://espn.go.com/mlb/player/_/id/28841', '21.7'),
(19, 'Brett', 'Gardner', 'NYY', 'Bot 7th', 7, 'http://espn.go.com/mlb/player/_/id/29174', '4.3'),
(20, 'Evan', 'Longoria', 'TB', '', 36, 'http://espn.go.com/mlb/player/_/id/28639', '4.3'),
(21, 'Salvador', 'Perez', 'KC', '', 22, 'http://espn.go.com/mlb/player/_/id/31127', '4.3'),
(22, 'Andrew', 'McCutchen', 'PIT', '', 24, 'http://espn.go.com/mlb/player/_/id/28701', '8.7'),
(23, 'Troy', 'Tulowitzki', 'TOR', '', 24, 'http://espn.go.com/mlb/player/_/id/28567', '13.0'),
(24, 'Carlos', 'Gomez', 'TEX', '', 13, 'http://espn.go.com/mlb/player/_/id/28762', '4.3'),
(25, 'Joc', 'Pederson', 'LAD', '', 25, 'http://espn.go.com/mlb/player/_/id/31392', '17.4'),
(29, 'David', 'Wright', 'NYM', '', 7, 'http://espn.go.com/mlb/player/_/id/6035', '4.3'),
(30, 'Hanley', 'Ramirez', 'BOS', 'Bot 7th', 30, 'http://espn.go.com/mlb/player/_/id/6195', '4.3'),
(28, 'Daniel', 'Murphy', 'WAS', '', 25, 'http://espn.go.com/mlb/player/_/id/29200', '4.3'),
(27, 'Matt', 'Holliday', 'STL', '', 20, 'http://espn.go.com/mlb/player/_/id/5940', '4.3'),
(26, 'Carlos', 'Beltran', 'TEX', 'Bot 7th', 29, 'http://espn.go.com/mlb/player/_/id/3971', '4.3');

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
(1, 2, 'Chris Davis', 38),
(2, 3, 'Edwin Encarnacion', 42),
(3, 3, 'Yoenis Cespedes', 31),
(4, 8, 'Anthony Rizzo', 32),
(5, 3, 'Jay Bruce', 33),
(6, 6, 'Matt Carpenter', 21),
(7, 9, 'Brian Dozier', 42),
(8, 12, 'Brian McCann', 20);

-- --------------------------------------------------------

--
-- Table structure for table `julia`
--

CREATE TABLE IF NOT EXISTS `julia` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `julia`
--

INSERT INTO `julia` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 4, 'Bryce Harper', 24),
(2, 3, 'Edwin Encarnacion', 42),
(3, 2, 'Kris Bryant', 39),
(4, 4, 'Lucas Duda', 7),
(5, 19, 'Brett Gardner', 7),
(6, 20, 'Evan Longoria', 36),
(7, 22, 'Andrew McCutchen', 24),
(8, 21, 'Salvador Perez', 22);

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
(1, 1, 'Nelson Cruz', 43),
(2, 1, 'Nolan Arenado', 41),
(3, 2, 'Kris Bryant', 39),
(4, 8, 'Anthony Rizzo', 32),
(5, 4, 'Miguel Cabrera', 38),
(6, 10, 'Prince Fielder', 8),
(7, 11, 'Curtis Granderson', 30),
(8, 14, 'Kyle Schwarber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kyle`
--

CREATE TABLE IF NOT EXISTS `kyle` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kyle`
--

INSERT INTO `kyle` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 27),
(2, 2, 'Jose Bautista', 22),
(3, 3, 'Yoenis Cespedes', 31),
(4, 8, 'Anthony Rizzo', 32),
(5, 4, 'Miguel Cabrera', 38),
(6, 9, 'Brian Dozier', 42),
(7, 24, 'Carlos Gomez', 13),
(8, 23, 'Troy Tulowitzki', 24);

-- --------------------------------------------------------

--
-- Table structure for table `lively`
--

CREATE TABLE IF NOT EXISTS `lively` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lively`
--

INSERT INTO `lively` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 6, 'Mike Trout', 29),
(2, 2, 'Jose Bautista', 22),
(3, 8, 'Anthony Rizzo', 32),
(4, 9, 'Alex Rodriguez', 9),
(5, 4, 'Miguel Cabrera', 38),
(6, 5, 'Robinson Cano', 39),
(7, 22, 'Andrew McCutchen', 24),
(8, 25, 'Joc Pederson', 25);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 4, 'Bryce Harper', 24),
(2, 8, 'J.D. Martinez', 22),
(3, 4, 'Lucas Duda', 7),
(4, 10, 'Miguel Sano', 25),
(5, 2, 'Ryan Braun', 30),
(6, 10, 'Prince Fielder', 8),
(7, 11, 'Curtis Granderson', 30),
(8, 29, 'David Wright', 7);

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 2, 'Jose Bautista', 22),
(3, 2, 'Kris Bryant', 39),
(4, 4, 'Lucas Duda', 7),
(5, 4, 'Miguel Cabrera', 38),
(6, 13, 'Byung Ho Park', 12),
(7, 14, 'Kyle Schwarber', 0),
(8, 17, 'Mark Trumbo', 47);

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
(1, 4, 'Bryce Harper', 24),
(2, 1, 'Nolan Arenado', 41),
(3, 1, 'Jose Abreu', 25),
(4, 2, 'Kris Bryant', 39),
(5, 6, 'Matt Carpenter', 21),
(6, 9, 'Brian Dozier', 42),
(7, 11, 'Curtis Granderson', 30),
(8, 18, 'Justin Upton', 31);

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
(1, 5, 'Giancarlo Stantion', 27),
(2, 2, 'Jose Bautista', 22),
(3, 1, 'Jose Abreu', 25),
(4, 10, 'Miguel Sano', 25),
(5, 1, 'Pedro Alvarez', 22),
(6, 13, 'Byung Ho Park', 12),
(7, 25, 'Joc Pederson', 25),
(8, 18, 'Justin Upton', 31);

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
(1, 4, 'Bryce Harper', 24),
(2, 2, 'Jose Bautista', 22),
(3, 2, 'Kris Bryant', 39),
(4, 5, 'Evan Gattis', 32),
(5, 1, 'Pedro Alvarez', 22),
(6, 8, 'Carlos Correa', 20),
(7, 11, 'Curtis Granderson', 30),
(8, 15, 'Kyle Seager', 30);

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(11) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `name`, `pass`) VALUES
(1, 'vinnyC', '302336'),
(2, 'matt', '497674'),
(3, 'ferg', '583297'),
(4, 'grup', '329741'),
(5, 'mistron', '651226'),
(6, 'davevonte', '066608'),
(7, 'vinnyS', '178857'),
(8, 'par', '480577'),
(9, 'scott', '902548'),
(10, 'kev', '860850'),
(11, 'tom', '233526'),
(12, 'ant', '351172'),
(13, 'julia', '430939'),
(14, 'nestor', '560225'),
(15, 'ariel', '730797'),
(16, 'lively', '077929'),
(17, 'rebekah', '344922'),
(18, 'zo', '291264'),
(19, 'mark', '485748'),
(20, 'kyle', '065686'),
(21, 'steve', '671635'),
(22, 'zippy', '276969'),
(23, 'pedowitz', '045631');

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 6, 'Carlos Gonzalez', 25),
(3, 1, 'Jose Abreu', 25),
(4, 8, 'Anthony Rizzo', 32),
(5, 4, 'Miguel Cabrera', 38),
(6, 10, 'Prince Fielder', 8),
(7, 12, 'Brian McCann', 20),
(8, 23, 'Troy Tulowitzki', 24);

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
(1, 'A', '#ffd700', 'Nelson Cruz', 43),
(2, 'B', 'silver', 'Edwin Encarnacion', 42),
(3, 'C', '#cd7f32', 'Kris Bryant', 39),
(4, 'C', '#cd7f32', 'Anthony Rizzo', 32),
(5, 'D', '#a4c639', 'Mark Trumbo', 47),
(6, 'D', '#a4c639', 'Khris Davis', 42),
(7, 'D', '#a4c639', 'Brian Dozier', 42),
(8, 'D', '#a4c639', 'Chris Carter', 41);

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 9, 'David Ortiz', 38),
(3, 3, 'Yoenis Cespedes', 31),
(4, 8, 'Anthony Rizzo', 32),
(5, 2, 'Ryan Braun', 30),
(6, 6, 'Matt Carpenter', 21),
(7, 9, 'Brian Dozier', 42),
(8, 15, 'Kyle Seager', 30);

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 5, 'Paul Goldschmidt', 24),
(3, 2, 'Kris Bryant', 39),
(4, 8, 'Anthony Rizzo', 32),
(5, 1, 'Pedro Alvarez', 22),
(6, 9, 'Brian Dozier', 42),
(7, 14, 'Kyle Schwarber', 0),
(8, 18, 'Justin Upton', 31);

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE IF NOT EXISTS `standings` (
  `id` int(11) NOT NULL,
  `color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL,
  `font` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`id`, `color`, `name`, `homeRuns`, `font`, `code`) VALUES
(1, 'red', 'Vinny C', 206, 0, 'vinnyC'),
(2, 'purple', 'DeGroff', 192, 1, 'matt'),
(3, 'silver', 'Ferg', 250, 0, 'ferg'),
(4, '#85bb65', 'Grupski', 239, 0, 'grup'),
(5, '#228b22', 'Mistron', 232, 0, 'mistron'),
(6, 'black', 'Davevonte', 197, 1, 'davevonte'),
(7, 'navy', 'Vinny S', 216, 1, 'vinnyS'),
(8, 'orange', 'Parchinsky', 199, 0, 'par'),
(9, '#1e90ff', 'Scott', 217, 0, 'scott'),
(10, 'yellow', 'Kev', 231, 0, 'kev'),
(11, 'blue', 'Tom', 222, 2, 'tom'),
(12, '#add8e6', 'Ant', 244, 0, 'ant'),
(13, '#ffe4b3', 'Julia', 194, 0, 'julia'),
(14, 'white', 'Nestor', 177, 0, 'nestor'),
(15, '#8b4513', 'Ariel', 205, 1, 'ariel'),
(16, '#90ee90', 'Lively', 209, 0, 'lively'),
(17, '#ffa2d0', 'Rebekah', 230, 0, 'rebekah'),
(18, 'maroon', 'Zo', 176, 1, 'zo'),
(19, '#414141', 'Mark', 146, 2, 'mark'),
(20, '#b299e5', 'Kyle', 216, 0, 'kyle'),
(21, '#20ff00', 'Steve', 287, 0, 'steve'),
(22, '#00ffdc', 'Zippy', 218, 0, 'zippy'),
(23, '#ecd540', 'Pedowitz', 191, 0, 'pedowitz');

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
(1, 2, 'Chris Davis', 38),
(2, 1, 'Nolan Arenado', 41),
(3, 2, 'Kris Bryant', 39),
(4, 10, 'Miguel Sano', 25),
(5, 5, 'Robinson Cano', 39),
(6, 7, 'Chris Carter', 41),
(7, 9, 'Brian Dozier', 42),
(8, 17, 'Mark Trumbo', 47);

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

--
-- Dumping data for table `timelineA`
--

INSERT INTO `timelineA` (`id`, `player`, `4/3`, `4/4`, `4/5`, `4/6`, `4/7`, `4/8`, `4/9`, `4/10`, `4/11`, `4/12`, `4/13`, `4/14`, `4/15`, `4/16`, `4/17`, `4/18`, `4/19`, `4/20`, `4/21`, `4/22`, `4/23`, `4/24`, `4/25`, `4/26`, `4/27`, `4/28`, `4/29`, `4/30`, `5/1`, `5/2`, `5/3`, `5/4`, `5/5`, `5/6`, `5/7`, `5/8`, `5/9`, `5/10`, `5/11`, `5/12`, `5/13`, `5/14`, `5/15`, `5/16`, `5/17`, `5/18`, `5/19`, `5/20`, `5/21`, `5/23`, `5/24`, `5/25`, `5/26`, `5/27`, `5/28`, `5/29`, `5/30`, `5/31`, `6/1`, `6/2`, `6/3`, `6/4`, `6/5`, `6/6`, `6/7`, `6/8`, `6/9`, `6/10`, `6/11`, `6/12`, `6/13`, `6/14`, `6/15`, `6/16`, `6/17`, `6/18`, `6/19`, `6/20`, `6/21`, `6/22`, `6/23`, `6/24`, `6/25`, `6/26`, `6/27`, `6/28`, `6/29`, `6/30`, `7/1`, `7/2`, `7/3`, `7/4`, `7/5`, `7/6`, `7/7`, `7/8`, `7/9`, `7/10`, `7/11`, `7/12`, `7/13`, `7/14`, `7/15`, `7/16`, `7/17`, `7/18`, `7/19`, `7/20`, `7/21`, `7/22`, `7/23`, `7/24`, `7/25`, `7/26`, `7/27`, `7/28`, `7/29`, `7/30`, `7/31`, `8/1`, `8/6`, `8/7`, `8/8`, `8/9`, `8/10`, `8/11`, `8/12`, `8/13`, `8/14`, `8/15`, `8/16`, `8/17`, `8/18`, `8/19`, `8/20`, `8/21`, `8/22`, `8/23`, `8/24`, `8/25`, `8/26`, `8/27`, `8/28`, `8/29`, `8/30`, `8/31`, `9/1`, `9/2`, `9/3`, `9/4`, `9/5`, `9/6`, `9/7`, `9/8`, `9/9`, `9/10`, `9/11`, `9/12`, `9/13`, `9/14`, `9/15`, `9/16`, `9/17`, `9/18`, `9/19`, `9/20`, `9/21`, `9/22`, `9/23`, `9/24`, `9/25`, `9/26`, `9/27`, `9/28`, `9/29`, `9/30`, `10/1`, `10/2`, `10/3`, `10/4`, `10/5`, `10/6`, `10/7`, `10/8`, `10/9`, `10/10`, `10/11`, `10/12`, `10/13`, `10/14`, `10/15`, `10/16`, `10/17`, `10/18`, `10/19`, `10/20`, `10/21`, `10/22`, `10/23`, `10/24`, `10/25`, `10/26`, `10/27`, `10/28`, `10/29`, `10/30`, `10/31`, `11/1`, `11/2`, `11/3`, `11/4`, `11/5`, `11/6`) VALUES
(1, 'Nelson Cruz', 0, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 7, 7, 7, 7, 7, 7, 8, 8, 8, 9, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 11, 11, 12, 13, 13, 15, 15, 15, 15, 15, 15, 15, 15, 16, 16, 16, 16, 16, 16, 16, 16, 18, 18, 18, 19, 19, 20, 20, 20, 20, 21, 21, 21, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 25, 25, 25, 25, 25, 25, 25, 25, 26, 26, 27, 27, 27, 27, 28, 28, 28, 29, 29, 30, 30, 30, 31, 31, 31, 31, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, 33, 34, 35, 35, 35, 35, 35, 35, 35, 35, 35, 36, 37, 37, 37, 37, 37, 37, 37, 37, 37, 38, 39, 41, 41, 41, 41, 41, 42, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43, 43),
(2, 'Chris Davis', 0, 0, 0, 1, 1, 2, 2, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 9, 9, 9, 9, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 11, 11, 11, 11, 12, 12, 13, 14, 15, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 17, 18, 18, 19, 19, 19, 20, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 25, 27, 28, 29, 29, 29, 30, 30, 30, 30, 32, 32, 32, 32, 32, 32, 33, 33, 33, 34, 35, 35, 35, 35, 36, 36, 37, 37, 37, 37, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38),
(3, 'Josh Donaldson', 0, 1, 1, 2, 2, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 6, 6, 6, 7, 7, 7, 7, 7, 7, 8, 8, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 10, 10, 11, 11, 11, 11, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 14, 14, 14, 14, 14, 14, 15, 16, 16, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 18, 19, 19, 20, 20, 20, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 25, 25, 25, 25, 25, 25, 25, 27, 27, 27, 27, 27, 27, 27, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 29, 30, 30, 33, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 35, 35, 35, 36, 36, 36, 36, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37),
(4, 'Bryce Harper', 0, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 3, 4, 5, 6, 6, 7, 7, 8, 8, 8, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 10, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 12, 12, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 14, 14, 14, 14, 14, 15, 15, 15, 15, 15, 15, 15, 16, 16, 16, 16, 16, 17, 17, 17, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24),
(5, 'Giancarlo Stanton', 0, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 4, 5, 6, 6, 7, 7, 8, 8, 8, 8, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 10, 11, 11, 11, 11, 11, 11, 11, 11, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 13, 13, 13, 14, 14, 14, 14, 14, 15, 15, 15, 15, 15, 15, 15, 17, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 23, 24, 24, 24, 24, 24, 24, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 26, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27),
(6, 'Mike Trout', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 5, 5, 5, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 8, 8, 8, 9, 10, 10, 10, 10, 10, 10, 10, 10, 11, 11, 11, 12, 12, 12, 12, 12, 12, 12, 12, 13, 13, 13, 13, 13, 13, 13, 13, 13, 13, 14, 14, 14, 14, 14, 14, 14, 15, 16, 17, 17, 17, 17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 21, 21, 21, 21, 21, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 25, 25, 25, 25, 26, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 27, 28, 28, 28, 28, 28, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29, 29);

-- --------------------------------------------------------

--
-- Table structure for table `today`
--

CREATE TABLE IF NOT EXISTS `today` (
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(1, 5, 'Giancarlo Stanton', 27),
(2, 2, 'Jose Bautista', 22),
(3, 1, 'Jose Abreu', 25),
(4, 8, 'Anthony Rizzo', 32),
(5, 4, 'Miguel Cabrera', 38),
(6, 13, 'Byung Ho Park', 12),
(7, 17, 'Mark Trumbo', 47),
(8, 18, 'Justin Upton', 31);

-- --------------------------------------------------------

--
-- Table structure for table `vinnyC`
--

CREATE TABLE IF NOT EXISTS `vinnyC` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL,
  `AB` int(11) NOT NULL,
  `ABHR` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vinnyC`
--

INSERT INTO `vinnyC` (`id`, `pid`, `player`, `homeRuns`, `AB`, `ABHR`) VALUES
(1, 5, 'Giancarlo Stanton', 27, 136, '12.36'),
(2, 2, 'Jose Bautista', 22, 0, '0.00'),
(3, 1, 'Jose Abreu', 25, 0, '0.00'),
(4, 8, 'Anthony Rizzo', 32, 0, '0.00'),
(5, 7, 'Chris Carter', 41, 0, '0.00'),
(6, 10, 'Prince Fielder', 8, 0, '0.00'),
(7, 16, 'George Springer', 29, 0, '0.00'),
(8, 30, 'Hanley Ramirez', 30, 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `vinnyS`
--

CREATE TABLE IF NOT EXISTS `vinnyS` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vinnyS`
--

INSERT INTO `vinnyS` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 27),
(2, 5, 'Paul Goldschmidt', 24),
(3, 1, 'Jose Abreu', 25),
(4, 2, 'Kris Bryant', 39),
(5, 13, 'Byung Ho Park', 12),
(7, 16, 'George Springer', 29),
(8, 17, 'Mark Trumbo', 47),
(6, 25, 'Joc Pederson', 25);

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
(1, 2, 'Chris Davis', 38),
(2, 1, 'Nolan Arenado', 41),
(3, 3, 'Yoenis Cespedes', 31),
(4, 11, 'Mark Teixeira', 15),
(5, 4, 'Miguel Cabrera', 38),
(6, 10, 'Prince Fielder', 8),
(7, 11, 'Curtis Granderson', 30),
(8, 25, 'Joc Pederson', 25);

-- --------------------------------------------------------

--
-- Table structure for table `zo`
--

CREATE TABLE IF NOT EXISTS `zo` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `zo`
--

INSERT INTO `zo` (`id`, `pid`, `player`, `homeRuns`) VALUES
(3, 3, 'Yoenis Cespedes', 31),
(2, 2, 'Jose Bautista', 22),
(1, 6, 'Mike Trout', 29),
(4, 9, 'Alex Rodriguez', 9),
(5, 8, 'Carlos Correa', 20),
(6, 26, 'Carlos Beltran', 29),
(7, 27, 'Matt Holliday', 20),
(8, 28, 'Daniel Murphy', 25);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
