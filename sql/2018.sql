-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2018 at 10:00 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `ant`
--

CREATE TABLE `ant` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ant`
--

INSERT INTO `ant` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 1, 'Cody Bellinger', 25),
(3, 7, 'Joey Gallo', 40),
(4, 9, 'Manny Machado', 37),
(5, 15, 'Carlos Correa', 15),
(6, 1, 'Rhys Hoskins', 34),
(7, 3, 'Matt Olson', 29),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ariel`
--

CREATE TABLE `ariel` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ariel`
--

INSERT INTO `ariel` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 5, 'Khris Davis', 48),
(3, 7, 'Joey Gallo', 40),
(4, 9, 'Manny Machado', 37),
(5, 1, 'Rhys Hoskins', 34),
(6, 22, 'Jonathan Schoop', 21),
(7, 5, 'Rougned Odor', 18),
(8, 3, 'Matt Olson', 29);

-- --------------------------------------------------------

--
-- Table structure for table `davevonte`
--

CREATE TABLE `davevonte` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `davevonte`
--

INSERT INTO `davevonte` (`id`, `pid`, `player`, `homeRuns`) VALUES
(6, 23, 'Paul DeJong', 19),
(7, 1, 'Rhys Hoskins', 34),
(8, 3, 'Matt Olson', 29),
(1, 5, 'Giancarlo Stanton', 38),
(2, 3, 'Nelson Cruz', 37),
(3, 8, 'Paul Goldschmidt', 33),
(4, 16, 'Joey Votto', 12),
(5, 15, 'Carlos Correa', 15);

-- --------------------------------------------------------

--
-- Table structure for table `evan`
--

CREATE TABLE `evan` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evan`
--

INSERT INTO `evan` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 9, 'Manny Machado', 37),
(4, 12, 'Anthony Rizzo', 25),
(5, 15, 'Carlos Correa', 15),
(6, 1, 'Rhys Hoskins', 34),
(7, 3, 'Matt Olson', 29),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ferg`
--

CREATE TABLE `ferg` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ferg`
--

INSERT INTO `ferg` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 4, 'Aaron Judge', 27),
(2, 3, 'Nelson Cruz', 37),
(3, 3, 'Jay Bruce', 9),
(4, 10, 'Mike Moustakas', 28),
(5, 9, 'Andrew McCutchen', 20),
(6, 7, 'Daniel Murphy', 12),
(7, 8, 'Yasiel Puig', 23),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `griesche`
--

CREATE TABLE `griesche` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `griesche`
--

INSERT INTO `griesche` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 4, 'Aaron Judge', 27),
(2, 1, 'Cody Bellinger', 25),
(3, 9, 'Manny Machado', 37),
(4, 10, 'Mike Moustakas', 28),
(5, 17, 'Mookie Betts', 32),
(6, 15, 'Carlos Correa', 15),
(7, 18, 'Scooter Gennett', 23),
(8, 9, 'Andrew McCutchen', 20);

-- --------------------------------------------------------

--
-- Table structure for table `groupA`
--

CREATE TABLE `groupA` (
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
(1, 'Nolan Arenado', 'COL', '', 38, 'http://www.espn.com/mlb/player/_/id/31261', '8.0'),
(3, 'Bryce Harper', 'WAS', '', 34, 'http://www.espn.com/mlb/player/_/id/30951', '0.0'),
(4, 'Aaron Judge', 'NYY', '', 27, 'http://www.espn.com/mlb/player/_/id/33192', '16.0'),
(5, 'Giancarlo Stanton', 'NYY', '', 38, 'http://www.espn.com/mlb/player/_/id/30583', '68.0'),
(6, 'Mike Trout', 'LAA', '', 39, 'http://www.espn.com/mlb/player/_/id/30836', '8.0'),
(2, 'Kris Bryant', 'CHC', ' ', 13, 'http://www.espn.com/mlb/player/_/id/33172', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `groupB`
--

CREATE TABLE `groupB` (
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
(1, 'Cody Bellinger', 'LAD', '', 25, 'http://www.espn.com/mlb/player/_/id/33912', '16.0'),
(4, 'Chris Davis', 'BAL', '', 16, 'http://www.espn.com/mlb/player/_/id/29170', '0.0'),
(8, 'J.D. Martinez', 'BOS', '', 43, 'http://www.espn.com/mlb/player/_/id/31065', '28.0'),
(2, 'Yoenis Cespedes', 'NYM', '', 9, 'http://www.espn.com/mlb/player/_/id/32080', '4.0'),
(5, 'Khris Davis', 'OAK', '', 48, 'http://www.espn.com/mlb/player/_/id/31478', '20.0'),
(6, 'Josh Donaldson', 'CLE', '', 8, 'http://www.espn.com/mlb/player/_/id/29563', '0.0'),
(9, 'Gary Sanchez', 'NYY', '', 18, 'http://www.espn.com/mlb/player/_/id/31095', '8.0'),
(3, 'Nelson Cruz', 'SEA', '', 37, 'http://www.espn.com/mlb/player/_/id/6242', '20.0'),
(10, 'George Springer', 'HOU', '', 22, 'http://www.espn.com/mlb/player/_/id/32078', '4.0'),
(7, 'Edwin Encarnacion', 'CLE', '', 32, 'http://www.espn.com/mlb/player/_/id/5904', '0.0'),
(11, 'Mark Trumbo', 'BAL', '', 17, 'http://www.espn.com/mlb/player/_/id/29322', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `groupC`
--

CREATE TABLE `groupC` (
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
(1, 'Jose Abreu', 'CWS', '', 22, 'http://www.espn.com/mlb/player/_/id/33095', '0.0'),
(2, 'Charlie Blackmon', 'COL', '', 29, 'http://www.espn.com/mlb/player/_/id/31084', '8.0'),
(3, 'Jay Bruce', 'NYM', '', 9, 'http://www.espn.com/mlb/player/_/id/28954', '8.0'),
(5, 'Adam Duvall', 'ATL', '', 15, 'http://www.espn.com/mlb/player/_/id/32664', '0.0'),
(4, 'Brian Dozier', 'LAD', '', 21, 'http://www.espn.com/mlb/player/_/id/31009', '4.0'),
(6, 'Freddie Freeman', 'ATL', '', 23, 'http://www.espn.com/mlb/player/_/id/30193', '4.0'),
(7, 'Joey Gallo', 'TEX', '', 40, 'http://www.espn.com/mlb/player/_/id/32818', '36.0'),
(12, 'Anthony Rizzo', 'CHC', '', 25, 'http://www.espn.com/mlb/player/_/id/30782', '16.0'),
(9, 'Manny Machado', 'LAD', '', 37, 'http://www.espn.com/mlb/player/_/id/31097', '60.0'),
(10, 'Mike Moustakas', 'MIL', '', 28, 'http://www.espn.com/mlb/player/_/id/29999', '8.0'),
(8, 'Paul Goldschmidt', 'ARI', '', 33, 'http://www.espn.com/mlb/player/_/id/31027', '28.0'),
(11, 'Marcell Ozuna', 'STL', '', 23, 'http://www.espn.com/mlb/player/_/id/31668', '8.0'),
(13, 'Miguel Sano', 'MIN', '', 13, 'http://www.espn.com/mlb/player/_/id/31260', '4.0'),
(14, 'Justin Smoak', 'TOR', '', 25, 'http://www.espn.com/mlb/player/_/id/30175', '0.0'),
(15, 'Justin Upton', 'LAA', '', 30, 'http://www.espn.com/mlb/player/_/id/28841', '0.0'),
(16, 'Joey Votto', 'CIN', '', 12, 'http://www.espn.com/mlb/player/_/id/28670', '12.0');

-- --------------------------------------------------------

--
-- Table structure for table `groupD`
--

CREATE TABLE `groupD` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `team` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `inning` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `homeRuns` int(11) DEFAULT '0',
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `picks` decimal(10,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `groupD`
--

INSERT INTO `groupD` (`id`, `firstName`, `lastName`, `team`, `inning`, `homeRuns`, `link`, `picks`) VALUES
(1, 'Rhys', 'Hoskins', 'PHI', '', 34, 'http://www.espn.com/mlb/player/_/id/35291', '60.0'),
(2, 'Wil', 'Myers', 'SD', '', 11, 'http://www.espn.com/mlb/player/_/id/31265', '24.0'),
(3, 'Matt', 'Olson', 'OAK', '', 29, 'http://www.espn.com/mlb/player/_/id/32767', '24.0'),
(4, 'Kyle', 'Schwarber', 'CHC', '', 26, 'http://www.espn.com/mlb/player/_/id/33712', '64.0'),
(13, 'Todd', 'Frazier', 'NYM', '', 18, 'http://www.espn.com/mlb/player/_/id/30004', '8.0'),
(5, 'Rougned', 'Odor', 'TEX', '', 18, 'http://www.espn.com/mlb/player/_/id/32170', '12.0'),
(6, 'Jake', 'Lamb', 'ARI', '', 6, 'http://www.espn.com/mlb/player/_/id/32742', '12.0'),
(7, 'Daniel', 'Murphy', 'CHC', '', 12, 'http://www.espn.com/mlb/player/_/id/29200', '4.0'),
(8, 'Yasiel', 'Puig', 'LAD', '', 23, 'http://www.espn.com/mlb/player/_/id/32574', '4.0'),
(9, 'Andrew', 'McCutchen', 'NYY', '', 20, 'http://www.espn.com/mlb/player/_/id/28701', '12.0'),
(10, 'Greg', 'Bird', 'NYY', '', 11, 'http://www.espn.com/mlb/player/_/id/32695', '4.0'),
(11, 'Maikel', 'Franco', 'PHI', '', 22, 'http://www.espn.com/mlb/player/_/id/32163', '8.0'),
(12, 'Francisco', 'Lindor', 'CLE', '', 38, 'http://www.espn.com/mlb/player/_/id/32129', '28.0'),
(14, 'Jose', 'Ramirez', 'CLE', '', 39, 'http://www.espn.com/mlb/player/_/id/32801', '4.0'),
(17, 'Mookie', 'Betts', 'BOS', '', 32, 'http://www.espn.com/mlb/player/_/id/33039', '12.0'),
(16, 'Didi', 'Gregorius', 'NYY', '', 27, 'http://www.espn.com/mlb/player/_/id/31376', '16.0'),
(15, 'Carlos', 'Correa', 'HOU', '', 15, 'http://www.espn.com/mlb/player/_/id/32653', '24.0'),
(18, 'Scooter', 'Gennett', 'CIN', '', 23, 'http://www.espn.com/mlb/player/_/id/31175', '4.0'),
(20, 'Carlos', 'Santana', 'PHI', '', 24, 'http://www.espn.com/mlb/player/_/id/30280', '4.0'),
(19, 'Robinson', 'Cano', 'SEA', '', 10, 'http://www.espn.com/mlb/player/_/id/6204', '8.0'),
(21, 'Justin', 'Turner', 'LAD', '', 14, 'http://www.espn.com/mlb/player/_/id/29607', '0.0'),
(22, 'Jonathan', 'Schoop', 'MIL', '', 21, 'http://www.espn.com/mlb/player/_/id/31988', '16.0'),
(23, 'Paul', 'DeJong', 'STL', '', 19, 'http://www.espn.com/mlb/player/_/id/35185', '4.0'),
(24, 'Mike', 'Napoli', 'FA', '', 0, 'http://www.espn.com/mlb/player/_/id/28444', '0.0'),
(25, 'Andrew', 'Benintendi', 'BOS', '', 16, 'http://www.espn.com/mlb/player/_/id/34986', '8.0'),
(26, 'Logan', 'Morrison', 'MIN', '', 15, 'http://www.espn.com/mlb/player/_/id/30536', '12.0'),
(27, 'Travis', 'Shaw', 'MIL', '', 32, 'http://www.espn.com/mlb/player/_/id/32890', '4.0'),
(28, 'Yonder', 'Alonso', 'CLE', '', 23, 'http://www.espn.com/mlb/player/_/id/30016', '4.0'),
(29, 'Ryan', 'Zimmerman', 'WAS', '', 13, 'http://www.espn.com/mlb/player/_/id/6389', '4.0'),
(30, 'Jose', 'Altuve', 'HOU', '', 13, 'http://www.espn.com/mlb/player/_/id/31662', '4.0'),
(31, 'Michael', 'Conforto', 'NYM', '', 28, 'http://www.espn.com/mlb/player/_/id/33711', '4.0'),
(32, 'Ian', 'Happ', 'CHC', '', 15, 'http://www.espn.com/mlb/player/_/id/34945', '4.0');

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 3, 'Nelson Cruz', 37),
(3, 7, 'Joey Gallo', 40),
(4, 11, 'Marcell Ozuna', 23),
(5, 10, 'Greg Bird', 11),
(6, 19, 'Robinson Cano', 10),
(8, 20, 'Carlos Santana', 24),
(7, 16, 'Didi Gregorius', 27);

-- --------------------------------------------------------

--
-- Table structure for table `kev`
--

CREATE TABLE `kev` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kev`
--

INSERT INTO `kev` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 9, 'Manny Machado', 37),
(4, 16, 'Joey Votto', 12),
(5, 17, 'Mookie Betts', 32),
(6, 1, 'Rhys Hoskins', 34),
(7, 12, 'Francisco Lindor', 38),
(8, 22, 'Jonathan Schoop', 21);

-- --------------------------------------------------------

--
-- Table structure for table `lark`
--

CREATE TABLE `lark` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lark`
--

INSERT INTO `lark` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 5, 'Khris Davis', 48),
(3, 7, 'Joey Gallo', 40),
(4, 9, 'Manny Machado', 37),
(5, 17, 'Mookie Betts', 32),
(6, 1, 'Rhys Hoskins', 34),
(7, 3, 'Matt Olson', 29),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `matt`
--

CREATE TABLE `matt` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `matt`
--

INSERT INTO `matt` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 1, 'Cody Bellinger', 25),
(3, 7, 'Joey Gallo', 40),
(4, 9, 'Manny Machado', 37),
(5, 1, 'Rhys Hoskins', 34),
(6, 2, 'Wil Myers', 11),
(7, 3, 'Matt Olson', 29),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `menke`
--

CREATE TABLE `menke` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `menke`
--

INSERT INTO `menke` (`id`, `pid`, `player`, `homeRuns`) VALUES
(5, 13, 'Todd Frazier', 18),
(3, 8, 'Paul Goldschmidt', 33),
(7, 14, 'Jose Ramirez', 39),
(8, 4, 'Kyle Schwarber', 26),
(6, 2, 'Wil Myers', 11),
(4, 9, 'Manny Machado', 37),
(2, 1, 'Cody Bellinger', 25),
(1, 5, 'Giancarlo Stanton', 38);

-- --------------------------------------------------------

--
-- Table structure for table `mistron`
--

CREATE TABLE `mistron` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mistron`
--

INSERT INTO `mistron` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 3, 'Nelson Cruz', 37),
(3, 7, 'Joey Gallo', 40),
(4, 8, 'Paul Goldschmidt', 33),
(7, 22, 'Jonathan Schoop', 21),
(5, 11, 'Maikel Franco', 22),
(6, 12, 'Francisco Lindor', 38),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `moresky`
--

CREATE TABLE `moresky` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `moresky`
--

INSERT INTO `moresky` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 10, 'George Springer', 22),
(3, 3, 'Jay Bruce', 9),
(4, 9, 'Manny Machado', 37),
(5, 13, 'Todd Frazier', 18),
(6, 2, 'Wil Myers', 11),
(7, 12, 'Francisco Lindor', 38),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `nestor`
--

CREATE TABLE `nestor` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `nestor`
--

INSERT INTO `nestor` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 5, 'Khris Davis', 48),
(3, 9, 'Manny Machado', 37),
(4, 12, 'Anthony Rizzo', 25),
(5, 19, 'Robinson Cano', 10),
(6, 1, 'Rhys Hoskins', 34),
(7, 26, 'Logan Morrison', 15),
(8, 27, 'Travis Shaw', 32);

-- --------------------------------------------------------

--
-- Table structure for table `par`
--

CREATE TABLE `par` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `par`
--

INSERT INTO `par` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 6, 'Freddie Freeman', 23),
(4, 7, 'Joey Gallo', 40),
(5, 28, 'Yonder Alonso', 23),
(6, 11, 'Maikel Franco', 22),
(7, 16, 'Didi Gregorius', 27),
(8, 1, 'Rhys Hoskins', 34);

-- --------------------------------------------------------

--
-- Table structure for table `pedowitz`
--

CREATE TABLE `pedowitz` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pedowitz`
--

INSERT INTO `pedowitz` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 9, 'Gary Sanchez', 18),
(3, 8, 'Paul Goldschmidt', 33),
(4, 9, 'Manny Machado', 37),
(5, 1, 'Rhys Hoskins', 34),
(6, 26, 'Logan Morrison', 15),
(7, 5, 'Rougned Odor', 18),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `pooch`
--

CREATE TABLE `pooch` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pooch`
--

INSERT INTO `pooch` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 8, 'Paul Goldschmidt', 33),
(4, 9, 'Manny Machado', 37),
(5, 25, 'Andrew Benintendi', 16),
(6, 1, 'Rhys Hoskins', 34),
(7, 2, 'Wil Myers', 11),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `rabbit`
--

CREATE TABLE `rabbit` (
  `id` int(11) NOT NULL,
  `gr` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `color` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `rabbit`
--

INSERT INTO `rabbit` (`id`, `gr`, `color`, `player`, `homeRuns`) VALUES
(1, 'A', '#00cc66', 'Mike Trout', 39),
(2, 'B', '#d9d9d9', 'Khris Davis', 48),
(3, 'C', '#00cc66', 'Joey Gallo', 40),
(4, 'C', '#00cc66', 'Manny Machado', 37),
(5, 'D', '#d9d9d9', 'Jose Ramirez', 39),
(6, 'D', '#d9d9d9', 'Francisco Lindor', 38),
(7, 'D', '#d9d9d9', 'Trevor Story', 37),
(8, 'D', '#d9d9d9', 'Matt Carpenter', 36);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 4, 'Aaron Judge', 27),
(2, 2, 'Yoenis Cespedes', 9),
(3, 13, 'Miguel Sano', 13),
(4, 16, 'Joey Votto', 12),
(5, 30, 'Jose Altuve', 13),
(6, 31, 'Michael Conforto', 28),
(7, 6, 'Jake Lamb', 6),
(8, 12, 'Francisco Lindor', 38);

-- --------------------------------------------------------

--
-- Table structure for table `scott`
--

CREATE TABLE `scott` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `scott`
--

INSERT INTO `scott` (`id`, `pid`, `player`, `homeRuns`) VALUES
(8, 4, 'Kyle Schwarber', 26),
(2, 9, 'Gary Sanchez', 18),
(3, 9, 'Manny Machado', 37),
(4, 11, 'Marcell Ozuna', 23),
(7, 1, 'Rhys Hoskins', 34),
(5, 15, 'Carlos Correa', 15),
(6, 16, 'Didi Gregorius', 27),
(1, 4, 'Aaron Judge', 27);

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `id` int(11) NOT NULL,
  `color` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL,
  `font` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `paid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`id`, `color`, `name`, `homeRuns`, `font`, `code`, `paid`) VALUES
(1, 'red', 'Vinny C', 233, 0, 'vinny', 1),
(2, 'purple', 'DeGroff', 229, 1, 'matt', 1),
(3, 'silver', 'Ferg', 173, 0, 'ferg', 1),
(4, '#85bb65', 'Grupski', 200, 0, 'grup', 1),
(5, '#228b22', 'Mistron', 234, 0, 'mistron', 1),
(6, 'black', 'Davevonte', 205, 1, 'davevonte', 1),
(7, 'navy', 'JP', 227, 1, 'pooch', 1),
(8, 'orange', 'Par', 228, 0, 'par', 1),
(9, '#1e90ff', 'Scott', 192, 0, 'scott', 1),
(10, '#3F393E', 'Kevin', 243, 2, 'kev', 1),
(23, '#a9a9a9', 'Steve S', 228, 3, 'steveS', 1),
(11, '#add8e6', 'Ant', 229, 0, 'ant', 1),
(12, 'white', 'Nestor', 229, 0, 'nestor', 1),
(13, '#8b4513', 'Ariel', 247, 1, 'ariel', 1),
(24, '#90ee90', 'Vincent E', 208, 0, 'vinnyE', 1),
(14, 'maroon', 'Menke', 216, 1, 'menke', 1),
(15, '#20ff00', 'Descalso', 227, 0, 'steve', 1),
(16, '#00ffdc', 'Zippy', 235, 0, 'zippy', 1),
(17, '#ecd540', 'Pedowitz', 204, 0, 'pedowitz', 1),
(18, '#9135FF', 'Moresky', 190, 1, 'moresky', 1),
(19, '#6e7f39', 'Zaccheo', 207, 1, 'zaccheo', 1),
(20, '#cb355d', 'Evan', 232, 0, 'evan', 1),
(22, 'yellow', 'Lark', 258, 0, 'lark', 1),
(21, '#ffa2d0', 'Griesche', 192, 0, 'griesche', 1),
(25, 'blue', 'J-Ram', 140, 2, 'ram', 1);

-- --------------------------------------------------------

--
-- Table structure for table `steve`
--

CREATE TABLE `steve` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `steve`
--

INSERT INTO `steve` (`id`, `pid`, `player`, `homeRuns`) VALUES
(4, 8, 'Paul Goldschmidt', 33),
(5, 12, 'Francisco Lindor', 38),
(6, 26, 'Logan Morrison', 15),
(7, 4, 'Kyle Schwarber', 26),
(8, 29, 'Ryan Zimmerman', 13),
(1, 5, 'Giancarlo Stanton', 38),
(2, 5, 'Khris Davis', 48),
(3, 2, 'Charlie Blackmon', 29);

-- --------------------------------------------------------

--
-- Table structure for table `steveS`
--

CREATE TABLE `steveS` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steveS`
--

INSERT INTO `steveS` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 1, 'Nolan Arenado', 38),
(2, 5, 'Khris Davis', 48),
(3, 4, 'Brian Dozier', 21),
(4, 7, 'Joey Gallo', 40),
(5, 32, 'Ian Happ', 15),
(6, 1, 'Rhys Hoskins', 34),
(7, 22, 'Jonathan Schoop', 21),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `today`
--

CREATE TABLE `today` (
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `today`
--

INSERT INTO `today` (`player`, `HR`) VALUES
('Khris Davis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tom`
--

CREATE TABLE `tom` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vinny`
--

CREATE TABLE `vinny` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vinny`
--

INSERT INTO `vinny` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 6, 'Mike Trout', 39),
(2, 8, 'J.D. Martinez', 43),
(3, 7, 'Joey Gallo', 40),
(4, 8, 'Paul Goldschmidt', 33),
(5, 1, 'Rhys Hoskins', 34),
(6, 6, 'Jake Lamb', 6),
(7, 5, 'Rougned Odor', 18),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `vinnyE`
--

CREATE TABLE `vinnyE` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vinnyE`
--

INSERT INTO `vinnyE` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 8, 'Pauk Goldschmidt', 33),
(4, 9, 'Manny Machado', 37),
(5, 6, 'Jake Lamb', 6),
(6, 9, 'Andrew McCutchen', 20),
(7, 2, 'Wil Myers', 11),
(8, 4, 'Kyle Schwarber', 26);

-- --------------------------------------------------------

--
-- Table structure for table `zaccheo`
--

CREATE TABLE `zaccheo` (
  `id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `player` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `homeRuns` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zaccheo`
--

INSERT INTO `zaccheo` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 6, 'Mike Trout', 39),
(2, 3, 'Nelson Cruz', 37),
(3, 9, 'Manny Machado', 37),
(4, 12, 'Anthony Rizzo', 25),
(5, 25, 'Andrew Benintendi', 16),
(6, 15, 'Carlos Correa', 15),
(7, 12, 'Francisco Lindor', 38),
(8, 2, 'Wil Myers', 11);

-- --------------------------------------------------------

--
-- Table structure for table `zippy`
--

CREATE TABLE `zippy` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `player` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `homeRuns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `zippy`
--

INSERT INTO `zippy` (`id`, `pid`, `player`, `homeRuns`) VALUES
(1, 5, 'Giancarlo Stanton', 38),
(2, 8, 'J.D. Martinez', 43),
(3, 2, 'Charlie Blackmon', 29),
(4, 12, 'Anthony Rizzo', 25),
(5, 16, 'Didi Gregorius', 27),
(6, 1, 'Rhys Hoskins', 34),
(7, 12, 'Francisco Lindor', 38),
(8, 4, 'Kyle Schwarber', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupD`
--
ALTER TABLE `groupD`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rabbit`
--
ALTER TABLE `rabbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupD`
--
ALTER TABLE `groupD`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `standings`
--
ALTER TABLE `standings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
