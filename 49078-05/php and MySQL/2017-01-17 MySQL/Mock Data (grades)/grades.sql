-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 06:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fs5`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `grade` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `fullname`, `course`, `grade`) VALUES
(1, 'Bobby Hall', 'MySQL', 77),
(2, 'Steven Fuller', 'MySQL', 66),
(3, 'Mildred Rivera', 'CSS', 95),
(4, 'Billy Grant', 'Java', 88),
(5, 'Janet Hayes', 'Java', 96),
(6, 'Lori Sims', 'CSS', 72),
(7, 'Anthony Wilson', 'CSS', 82),
(8, 'Marie Fox', 'Java', 87),
(9, 'Barbara Boyd', 'Java', 83),
(10, 'Brandon Flores', 'CSS', 65),
(11, 'Jean Griffin', 'CSS', 82),
(12, 'Randy Russell', 'MySQL', 82),
(13, 'Catherine Alexander', 'php', 76),
(14, 'Louis Kelly', 'MySQL', 86),
(15, 'Edward Chavez', 'php', 86),
(16, 'Amanda Montgomery', 'Java', 66),
(17, 'Ruth Cunningham', 'php', 99),
(18, 'Shawn Richards', 'MySQL', 91),
(19, 'Sarah Morgan', 'MySQL', 66),
(20, 'Benjamin Johnston', 'CSS', 67),
(21, 'Robert Wilson', 'CSS', 84),
(22, 'Samuel Johnson', 'php', 79),
(23, 'Nicole Rivera', 'MySQL', 89),
(24, 'Sara Alexander', 'Java', 82),
(25, 'Teresa Young', 'php', 100),
(26, 'Jessica Washington', 'php', 91),
(27, 'Janice Jenkins', 'CSS', 100),
(28, 'Russell Morrison', 'Java', 96),
(29, 'Peter Simmons', 'CSS', 68),
(30, 'Raymond Carroll', 'MySQL', 94),
(31, 'David Robertson', 'php', 94),
(32, 'Barbara Riley', 'Java', 94),
(33, 'Angela Rice', 'CSS', 69),
(34, 'Theresa Frazier', 'MySQL', 96),
(35, 'Emily Allen', 'CSS', 75),
(36, 'Lillian Olson', 'CSS', 66),
(37, 'Janet Stone', 'php', 97),
(38, 'Philip Reyes', 'CSS', 73),
(39, 'Larry Smith', 'Java', 83),
(40, 'Shirley Rivera', 'CSS', 70),
(41, 'Ruth Gilbert', 'CSS', 68),
(42, 'Lillian Gibson', 'MySQL', 72),
(43, 'Teresa Davis', 'CSS', 65),
(44, 'Steve Patterson', 'CSS', 81),
(45, 'Ann Ferguson', 'php', 83),
(46, 'Victor Lopez', 'Java', 83),
(47, 'Anthony Hanson', 'MySQL', 75),
(48, 'Jimmy Reed', 'Java', 92),
(49, 'Ryan Morales', 'CSS', 86),
(50, 'Jason Fuller', 'CSS', 65),
(51, 'Daniel Cook', 'CSS', 66),
(52, 'Theresa Reynolds', 'CSS', 89),
(53, 'Theresa Howard', 'MySQL', 79),
(54, 'Frances Reyes', 'php', 86),
(55, 'Michelle Price', 'php', 84),
(56, 'Fred Tucker', 'php', 89),
(57, 'Peter Hansen', 'php', 97),
(58, 'Phyllis Hart', 'MySQL', 77),
(59, 'Stephanie Mitchell', 'php', 85),
(60, 'Jeremy James', 'php', 80),
(61, 'Carlos Peterson', 'CSS', 69),
(62, 'Andrea Riley', 'Java', 86),
(63, 'Sharon Bowman', 'Java', 68),
(64, 'Angela Young', 'MySQL', 86),
(65, 'Richard Thomas', 'MySQL', 81),
(66, 'Kimberly Alvarez', 'CSS', 98),
(67, 'Diane Holmes', 'MySQL', 98),
(68, 'Denise Cunningham', 'php', 77),
(69, 'Richard Ford', 'CSS', 71),
(70, 'Joe Thompson', 'CSS', 85),
(71, 'Ann Greene', 'Java', 81),
(72, 'Michael Butler', 'Java', 75),
(73, 'Martin Griffin', 'CSS', 69),
(74, 'Julia Stanley', 'Java', 90),
(75, 'Douglas Greene', 'php', 100),
(76, 'Sandra Woods', 'MySQL', 85),
(77, 'Brian Diaz', 'php', 81),
(78, 'Brenda Harrison', 'CSS', 73),
(79, 'Michael Howell', 'CSS', 71),
(80, 'Mark Lewis', 'php', 95),
(81, 'Ruby Boyd', 'Java', 68),
(82, 'Ruby Wilson', 'MySQL', 91),
(83, 'Gary Riley', 'php', 89),
(84, 'Fred Hawkins', 'Java', 97),
(85, 'Cheryl Turner', 'Java', 92),
(86, 'Beverly Perkins', 'Java', 67),
(87, 'Joyce Hill', 'php', 94),
(88, 'Juan Holmes', 'php', 77),
(89, 'Nancy Hall', 'CSS', 78),
(90, 'Carol Howard', 'MySQL', 78),
(91, 'Lawrence Torres', 'Java', 75),
(92, 'Billy Stanley', 'php', 98),
(93, 'Keith Chavez', 'php', 69),
(94, 'Rose Johnston', 'Java', 77),
(95, 'Amy Berry', 'php', 94),
(96, 'Joe Riley', 'Java', 73),
(97, 'Stephen Little', 'MySQL', 83),
(98, 'Marie Frazier', 'MySQL', 67),
(99, 'Jeffrey Henry', 'Java', 83),
(100, 'James Graham', 'Java', 81);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
