-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db691514416.db.1and1.com
-- Generation Time: Oct 11, 2017 at 05:14 PM
-- Server version: 5.5.57-0+deb7u1-log
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db691514416`
--

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
(1, 6, 'Giancarlo Stanton', 27),
(2, 10, 'Mike Trout', 41),
(3, 8, 'Andrew McCutchen', 23),
(4, 10, 'Brandon Moss', 19),
(5, 3, 'Marlon Byrd', 23),
(6, 12, 'Matt Kemp', 23),
(7, 17, 'Carlos Santana', 19),
(8, 18, 'Kyle Seager', 26);

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
(1, 4, 'Nelson Cruz', 44),
(2, 10, 'Mike Trout', 41),
(3, 1, 'Chris Davis', 47),
(4, 12, 'Justin Upton', 26),
(5, 14, 'Buster Posey', 19),
(6, 19, 'Mark Teixeira', 31),
(7, 21, 'Troy Tulowitzki', 17),
(8, 23, 'David Wright', 5);

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
(4, 'Nelson Cruz', 'SEA', '', 44, 'http://espn.go.com/mlb/player/stats/_/id/6242', '0.0'),
(6, 'Giancarlo Stanton', 'MIA', ' ', 27, 'http://espn.go.com/mlb/player/stats/_/id/30583', '0.0'),
(5, 'David Ortiz', 'BOS', ' ', 37, 'http://espn.go.com/mlb/player/stats/_/id/3748', '0.0'),
(3, 'Chris Carter', 'HOU', ' ', 24, 'http://espn.go.com/mlb/player/stats/_/id/29486', '0.0'),
(2, 'Jose Bautista', 'TOR', ' ', 40, 'http://espn.go.com/mlb/player/stats/_/id/5890', '0.0'),
(1, 'Jose Abreu', 'CHW', ' ', 30, 'http://espn.go.com/mlb/player/stats/_/id/33095', '0.0');

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
(1, 'Miguel Cabrera', 'DET', '', 18, 'http://espn.go.com/mlb/player/stats/_/id/5544', '0.0'),
(2, 'Josh Donaldson', 'TOR', '', 41, 'http://espn.go.com/mlb/player/stats/_/id/29563', '0.0'),
(3, 'Lucas Duda', 'NYM', '', 27, 'http://espn.go.com/mlb/player/stats/_/id/30953', '0.0'),
(4, 'Edwin Encarnacion', 'TOR', '', 39, 'http://espn.go.com/mlb/player/stats/_/id/5904', '0.0'),
(5, 'Todd Frazier', 'CIN', '', 35, 'http://espn.go.com/mlb/player/stats/_/id/30004', '0.0'),
(6, 'Adam Jones', 'BAL', '', 27, 'http://espn.go.com/mlb/player/stats/_/id/28513', '0.0'),
(7, 'Victor Martinez', 'DET', '', 11, 'http://espn.go.com/mlb/player/stats/_/id/5007', '0.0'),
(8, 'Albert Pujols', 'LAA', '', 40, 'http://espn.go.com/mlb/player/stats/_/id/4574', '0.0'),
(9, 'Anthony Rizzo', 'CHC', '', 31, 'http://espn.go.com/mlb/player/stats/_/id/30782', '0.0'),
(10, 'Mike Trout', 'LAA', '', 41, 'http://espn.go.com/mlb/player/stats/_/id/30836', '0.0');

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
(1, 'Chris Davis', 'BAL', '', 47, 'http://espn.go.com/mlb/player/stats/_/id/29170', '0.0'),
(2, 'Ian Desmond', 'WSH', '', 19, 'http://espn.go.com/mlb/player/stats/_/id/29646', '0.0'),
(3, 'Adrian Gonzalez', 'LAD', '', 28, 'http://espn.go.com/mlb/player/stats/_/id/5405', '0.0'),
(4, 'Carlos Gonzalez', 'COL', '', 40, 'http://espn.go.com/mlb/player/stats/_/id/28658', '0.0'),
(5, 'Adam LaRoche', 'CHW', '', 12, 'http://espn.go.com/mlb/player/stats/_/id/5879', '0.0'),
(6, 'J.D. Martinez', 'DET', '', 38, 'http://espn.go.com/mlb/player/stats/_/id/31065', '0.0'),
(7, 'Brian McCann', 'NYY', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/6309', '0.0'),
(8, 'Andrew McCutchen', 'PIT', '', 23, 'http://espn.go.com/mlb/player/stats/_/id/28701', '0.0'),
(9, 'Devin Mesoraco', 'CIN', '', 0, 'http://espn.go.com/mlb/player/stats/_/id/29950', '0.0'),
(10, 'Brandon Moss', 'CLE', '', 19, 'http://espn.go.com/mlb/player/stats/_/id/28844', '0.0'),
(11, 'George Springer', 'HOU', '', 16, 'http://espn.go.com/mlb/player/stats/_/id/32078', '0.0'),
(12, 'Justin Upton', 'SD', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/28841', '0.0');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `groupD`
--

INSERT INTO `groupD` (`id`, `firstName`, `lastName`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Jay', 'Bruce', 'CIN', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/28954', '0.0'),
(2, 'Kris', 'Bryant', 'CHC', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/33172', '0.0'),
(3, 'Marlon', 'Byrd', 'CIN', '', 23, 'http://espn.go.com/mlb/player/stats/_/id/5033', '0.0'),
(4, 'Robinson', 'Cano', 'SEA', '', 21, 'http://espn.go.com/mlb/player/stats/_/id/6204', '0.0'),
(5, 'Yoenis', 'Cespedes', 'DET', '', 35, 'http://espn.go.com/mlb/player/stats/_/id/32080', '0.0'),
(6, 'Corey', 'Dickerson', 'COL', '', 10, 'http://espn.go.com/mlb/player/stats/_/id/31684', '0.0'),
(7, 'Evan', 'Gattis', 'HOU', '', 27, 'http://espn.go.com/mlb/player/stats/_/id/32863', '0.0'),
(8, 'Paul', 'Goldschmidt', 'ARI', '', 33, 'http://espn.go.com/mlb/player/stats/_/id/31027', '0.0'),
(9, 'Curtis', 'Granderson', 'NYM', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/6125', '0.0'),
(10, 'J.J.', 'Hardy', 'BAL', '', 8, 'http://espn.go.com/mlb/player/stats/_/id/5908', '0.0'),
(11, 'Bryce', 'Harper', 'WSH', '', 42, 'http://espn.go.com/mlb/player/stats/_/id/30951', '0.0'),
(12, 'Matt', 'Kemp', 'SD', '', 23, 'http://espn.go.com/mlb/player/stats/_/id/28476', '0.0'),
(13, 'Manny', 'Machado', 'BAL', '', 35, 'http://espn.go.com/mlb/player/stats/_/id/31097', '0.0'),
(14, 'Buster', 'Posey', 'SF', '', 19, 'http://espn.go.com/mlb/player/stats/_/id/30112', '0.0'),
(15, 'Hanley', 'Ramirez', 'BOS', '', 19, 'http://espn.go.com/mlb/player/stats/_/id/6195', '0.0'),
(16, 'Mark', 'Reynolds', 'STL', '', 13, 'http://espn.go.com/mlb/player/stats/_/id/28772', '0.0'),
(17, 'Carlos', 'Santana', 'CLE', '', 19, 'http://espn.go.com/mlb/player/stats/_/id/30280', '0.0'),
(18, 'Kyle', 'Seager', 'SEA', '', 26, 'http://espn.go.com/mlb/player/stats/_/id/30819', '0.0'),
(19, 'Mark', 'Teixeira', 'NYY', '', 31, 'http://espn.go.com/mlb/player/stats/_/id/4937', '0.0'),
(20, 'Mark', 'Trumbo', 'SEA', '', 22, 'http://espn.go.com/mlb/player/stats/_/id/29322', '0.0'),
(21, 'Troy', 'Tulowitzki', 'TOR', '', 17, 'http://espn.go.com/mlb/player/stats/_/id/28567', '0.0'),
(22, 'Joey', 'Votto', 'CIN', '', 29, 'http://espn.go.com/mlb/player/stats/_/id/28670', '0.0'),
(23, 'David', 'Wright', 'NYM', '', 5, 'http://espn.go.com/mlb/player/stats/_/id/6035', '0.0');

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
(1, 6, 'Giancarlo Stanton', 27),
(2, 2, 'Josh Donaldson', 41),
(3, 6, 'J.D. Martinez', 38),
(4, 8, 'Andrew McCutchen', 23),
(5, 4, 'Robinson Cano', 21),
(6, 5, 'Yoenis Cespedes', 35),
(7, 10, 'J.J. Hardy', 8),
(8, 22, 'Joey Votto', 29);

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
(1, 6, 'Giancarlo Stanton', 27),
(2, 10, 'Mike Trout', 41),
(3, 3, 'Adrian Gonzalez', 28),
(4, 8, 'Andrew McCutchen', 23),
(5, 12, 'Matt Kemp', 23),
(6, 21, 'Troy Tulowitzki', 17),
(7, 22, 'Joey Votto', 29),
(8, 23, 'David Wright', 5);

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
(1, 1, 'Jose Abreu', 30),
(2, 4, 'Edwin Encarnacion', 39),
(3, 3, 'Adrian Gonzalez', 28),
(4, 12, 'Justin Upton', 26),
(5, 6, 'Corey Dickerson', 10),
(6, 9, 'Curtis Granderson', 26),
(7, 14, 'Buster Posey', 19),
(8, 16, 'Mark Reynolds', 13);

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
(1, 1, 'Jose Abreu', 30),
(2, 10, 'Mike Trout', 41),
(3, 11, 'George Springer', 16),
(4, 12, 'Justin Upton', 26),
(5, 9, 'Curtis Granderson', 26),
(6, 19, 'Mark Teixeira', 31),
(7, 21, 'Troy Tulowitzki', 17),
(8, 23, 'David Wright', 5);

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
(1, 4, 'Nelson Cruz', 44),
(2, 10, 'Mike Trout', 41),
(3, 8, 'Andrew McCutchen', 23),
(4, 11, 'George Springer', 16),
(5, 2, 'Kris Bryant', 26),
(6, 8, 'Paul Goldschmidt', 33),
(7, 11, 'Bryce Harper', 42),
(8, 20, 'Mark Trumbo', 22);

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
(1, 'A', 'red', 'Nelson Cruz', 44),
(2, 'B', '#1e90ff', 'Mike Trout', 41),
(3, 'C', 'yellow', 'Chris Davis', 47),
(4, 'C', 'yellow', 'Carlos Gonzalez', 40),
(5, 'D', '#20ff00', 'Bryce Harper', 42),
(6, 'D', '#20ff00', 'Nolan Arenado', 42),
(7, 'D', '#20ff00', 'Manny Machado', 35),
(8, 'D', '#20ff00', 'Yoenis Cespedes', 35);

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
(1, 6, 'Giancarlo Stanton', 27),
(2, 4, 'Edwin Encarnacion', 39),
(3, 4, 'Carlos Gonzalez', 40),
(4, 12, 'Justin Upton', 26),
(5, 5, 'Yoenis Cespedes', 35),
(6, 7, 'Evan Gattis', 27),
(7, 0, 'Paul Goldschmidt', 0),
(8, 15, 'Hanley Ramirez', 19);

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
  `code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `paid` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`id`, `color`, `name`, `homeRuns`, `font`, `code`, `paid`) VALUES
(1, 'red', 'Vinny', 217, 0, 'vinnyC', 1),
(2, '#20ff00', 'DeGroff', 181, 0, 'matt', 1),
(3, 'silver', 'Ferg', 225, 0, 'ferg', 1),
(4, '#c353eb', 'Grupski', 214, 0, 'grup', 1),
(5, '#85bb65', 'Mistron', 187, 0, 'mistron', 1),
(6, 'black', 'Davevonte', 182, 1, 'davevonte', 1),
(8, 'orange', 'Parch', 231, 0, 'par', 1),
(9, '#00ffdc', 'Scott', 213, 0, 'scott', 1),
(10, 'yellow', 'Kev', 188, 0, 'kev', 1),
(7, '#1e90ff', 'Tom', 199, 0, 'tom', 1);

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
(1, 6, 'Giancarlo Stanton', 27),
(2, 4, 'Edwin Encarnacion', 39),
(3, 1, 'Chris Davis', 47),
(4, 11, 'George Springer', 16),
(5, 1, 'Jay Bruce', 26),
(6, 7, 'Evan Gattis', 27),
(7, 0, 'Paul Goldschmidt', 0),
(8, 21, 'Troy Tulowitzki', 17);

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
(1, 6, 'Giancarlo Stanton', 27, 0, '0.00'),
(2, 9, 'Anthony Rizzo', 31, 0, '0.00'),
(3, 8, 'Andrew McCutchen', 23, 0, '0.00'),
(4, 11, 'George Springer', 16, 0, '0.00'),
(5, 1, 'Jay Bruce', 26, 0, '0.00'),
(6, 8, 'Paul Goldschmidt', 33, 0, '0.00'),
(7, 11, 'Bryce Harper', 42, 0, '0.00'),
(8, 13, 'Manny Machado', 35, 0, '0.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
