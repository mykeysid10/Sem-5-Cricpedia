-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 06:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `TeamId` int(3) NOT NULL,
  `Champions_Trophy` int(5) NOT NULL DEFAULT 0,
  `WorldCups` int(5) NOT NULL DEFAULT 0,
  `T20Cups` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`TeamId`, `Champions_Trophy`, `WorldCups`, `T20Cups`) VALUES
(1, 2, 2, 1),
(2, 2, 5, 0),
(3, 0, 1, 1),
(4, 1, 0, 0),
(5, 1, 1, 1),
(6, 1, 0, 0),
(7, 0, 0, 0),
(8, 1, 1, 1),
(9, 1, 2, 2),
(10, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `TeamId` int(2) NOT NULL,
  `CoachName` varchar(30) NOT NULL,
  `Duration` int(6) NOT NULL DEFAULT 0,
  `DOB` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`TeamId`, `CoachName`, `Duration`, `DOB`) VALUES
(1, 'Ravi Shastri', 5, '1962-05-27 17:36:19.000000'),
(2, 'Justin Langer', 3, '1970-11-21 17:07:45.353000'),
(3, 'Chris Silverwood', 3, '1975-03-05 07:24:40.369000'),
(4, 'Gary Stead', 3, '1972-01-09 03:50:09.000000'),
(5, 'Misbah-ul-Haq', 3, '1974-05-28 07:53:10.000000'),
(6, 'Mark Boucher', 3, '1976-12-03 13:54:18.000000'),
(7, 'Russell Domingo', 2, '1974-08-30 13:55:49.000000'),
(8, 'Mickey Arthur', 2, '1968-05-17 22:57:12.000000'),
(9, 'Phil Simmons', 2, '1943-04-18 13:58:42.000000'),
(10, 'Lance Klusener', 2, '1971-09-04 13:59:57.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Msg_Id` int(6) NOT NULL DEFAULT 1,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `message` varchar(10000) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `MatchId` int(5) NOT NULL,
  `Team1Name` varchar(50) NOT NULL,
  `Team2Name` varchar(50) NOT NULL,
  `TotRunsT1` int(3) DEFAULT NULL,
  `TotWktsT1` int(2) DEFAULT NULL,
  `TotRunsT2` int(3) DEFAULT NULL,
  `TotWktsT2` int(2) DEFAULT NULL,
  `Date` datetime(6) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `TotAudience` int(6) DEFAULT 0,
  `WinnerId` int(2) DEFAULT NULL,
  `MOTM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MatchId`, `Team1Name`, `Team2Name`, `TotRunsT1`, `TotWktsT1`, `TotRunsT2`, `TotWktsT2`, `Date`, `Location`, `TotAudience`, `WinnerId`, `MOTM`) VALUES
(1, 'Pakistan', 'West Indies', 105, 10, 108, 3, '2019-05-31 14:26:06.336336', 'Trent Bridge ', 8233, 9, 'Oshane Thomas'),
(2, 'India', 'Australia', 352, 5, 316, 10, '2019-06-09 19:31:31.259509', 'The Oval', 12234, 1, 'Shikhar Dhawan'),
(3, 'Bangladesh', 'Afghanistan', 262, 7, 200, 10, '2019-06-24 11:19:31.150634', 'Rose Bowl ', 7300, 7, 'Shakib Al Hasan'),
(4, 'Sri Lanka', 'South Africa', 203, 10, 206, 1, '2019-06-28 17:46:30.000000', 'Riverside ', 8234, 6, 'Dwaine Pretorius'),
(5, 'New Zealand', 'India', 239, 8, 221, 10, '2019-07-09 17:49:49.000000', 'Old Trafford ', 15566, 4, 'Matt Henry'),
(6, 'New Zealand', 'England', 256, 9, 256, 10, '2019-07-14 17:53:11.000000', 'Lord\'s ', 16746, 3, 'Ben Stokes');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PlayerId` int(4) NOT NULL,
  `MatchId` int(5) NOT NULL,
  `PlayerName` varchar(30) NOT NULL,
  `RunsScored` int(3) DEFAULT NULL,
  `Balls_Faced` int(4) DEFAULT NULL,
  `4s` int(4) DEFAULT NULL,
  `6s` int(4) DEFAULT NULL,
  `SR` float DEFAULT NULL,
  `WktsTaken` int(2) DEFAULT NULL,
  `Econ` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerId`, `MatchId`, `PlayerName`, `RunsScored`, `Balls_Faced`, `4s`, `6s`, `SR`, `WktsTaken`, `Econ`) VALUES
(100, 2, 'Rohit Sharma', 57, 70, 3, 1, 81.43, NULL, NULL),
(100, 5, 'Rohit Sharma', 1, 4, 0, 0, 25, NULL, NULL),
(101, 2, 'Shikhar Dhawan', 117, 109, 16, 0, 107.34, NULL, NULL),
(102, 2, 'Virat Kohli', 82, 77, 4, 2, 106.49, NULL, NULL),
(102, 5, 'Virat Kohli', 1, 6, 0, 0, 16.67, NULL, NULL),
(103, 2, 'Hardik Pandya', 48, 27, 4, 3, 177.78, 0, 6.8),
(103, 5, 'Hardik Pandya', 32, 62, 2, 0, 51.61, 1, 5.5),
(104, 2, 'MS Dhoni', 27, 14, 3, 1, 192.86, NULL, NULL),
(104, 5, 'MS Dhoni', 50, 72, 1, 1, 69.44, NULL, NULL),
(105, 2, 'KL Rahul', 11, 3, 1, 1, 366.67, NULL, NULL),
(105, 5, 'KL Rahul', 1, 7, 0, 0, 14.29, NULL, NULL),
(106, 2, 'Kedar Jadhav', NULL, NULL, NULL, NULL, NULL, 0, 14),
(107, 2, 'Bhuvneshwar Kumar', NULL, NULL, NULL, NULL, NULL, 3, 5),
(107, 5, 'Bhuvneshwar Kumar', 0, 1, 0, 0, 0, 3, 4.3),
(108, 2, 'Kuldeep Yadav', NULL, NULL, NULL, NULL, NULL, 0, 6.11),
(109, 2, 'Yuzvendra Chahal', NULL, NULL, NULL, NULL, NULL, 2, 6.2),
(109, 5, 'Yuzvendra Chahal', 5, 5, 1, 0, 100, 1, 6.3),
(110, 2, 'Jasprit Bumrah', NULL, NULL, NULL, NULL, NULL, 3, 6.1),
(110, 5, 'Jasprit Bumrah', NULL, NULL, NULL, NULL, NULL, 1, 3.9),
(111, 5, 'Rishabh Pant', 32, 56, 4, 0, 57.14, NULL, NULL),
(112, 5, 'Dinesh Karthik', 6, 25, 1, 0, 24, NULL, NULL),
(113, 5, 'Ravindra Jadeja', 77, 59, 4, 4, 130.51, 1, 3.4),
(200, 2, 'David Warner', 56, 84, 5, 0, 66.67, NULL, NULL),
(201, 2, 'Aaron Finch', 36, 35, 3, 1, 102.86, NULL, NULL),
(202, 2, 'Steve Smith', 69, 70, 5, 1, 98.57, NULL, NULL),
(203, 2, 'Usman Khawaja', 42, 39, 4, 1, 107.69, NULL, NULL),
(204, 2, 'Glenn Maxwell', 28, 14, 5, 0, 200, 0, 6.43),
(205, 2, 'Marcus Stoinis', 0, 2, 0, 0, 0, 2, 8.86),
(206, 2, 'Alex Carey', 55, 35, 5, 1, 157.14, NULL, NULL),
(207, 2, 'Nathan Coulter-Nile', 4, 9, 0, 0, 44.44, 1, 6.3),
(208, 2, 'Pat Cummins', 8, 7, 1, 0, 114.29, 1, 5.5),
(209, 2, 'Mitchell Starc ', 3, 3, 0, 0, 100, 1, 7.4),
(210, 2, 'Adam Zampa', 1, 3, 0, 0, 33.33, 0, 8.33),
(300, 6, 'Jason Roy', 17, 20, 3, 0, 85, NULL, NULL),
(301, 6, 'Jonny Bairstow', 36, 55, 7, 0, 65.45, NULL, NULL),
(302, 6, 'Joe Root', 7, 30, 0, 0, 23.33, NULL, NULL),
(303, 6, 'Eoin Morgan', 9, 22, 0, 0, 40.91, NULL, NULL),
(304, 6, 'Ben Stokes', 84, 98, 5, 2, 85.71, 0, 6.67),
(305, 6, 'Jos Buttler', 59, 60, 6, 0, 98.33, NULL, NULL),
(306, 6, 'Chris Woakes', 2, 4, 0, 0, 50, 3, 4.11),
(307, 6, 'Liam Plunkett', 10, 10, 1, 0, 100, 3, 4.2),
(308, 6, 'Jofra Archer', 0, 1, 0, 0, 0, 1, 4.2),
(309, 6, 'Adil Rashid', 0, 0, 0, 0, NULL, 0, 4.88),
(310, 6, 'Mark Wood', 0, 0, 0, 0, NULL, 1, 4.9),
(400, 5, 'Martin Guptill', 1, 14, 0, 0, 7.14, NULL, NULL),
(400, 6, 'Martin Guptill', 19, 8, 2, 1, 105.56, NULL, NULL),
(401, 5, 'Henry Nicholls', 28, 51, 2, 0, 54.9, NULL, NULL),
(401, 6, 'Henry Nicholls', 55, 77, 4, 0, 71.43, NULL, NULL),
(402, 5, 'Kane Williamson', 67, 95, 6, 0, 70.53, NULL, NULL),
(402, 6, 'Kane Williamson', 30, 53, 2, 0, 56.6, NULL, NULL),
(403, 5, 'Ross Taylor', 74, 90, 3, 1, 83.22, NULL, NULL),
(403, 6, 'Ross Taylor', 15, 31, 0, 0, 48.39, NULL, NULL),
(404, 5, 'James Neesham', 12, 18, 1, 0, 66.67, 1, 6.53),
(404, 6, 'James Neesham', 19, 25, 3, 0, 76, 3, 6.14),
(405, 5, 'Colin de Grandhomme', 16, 10, 2, 0, 160, 0, 6.5),
(405, 6, 'Colin de Grandhomme', 16, 28, 0, 0, 57.14, 1, 2.5),
(406, 5, 'Tom Latham', 10, 11, 0, 0, 90.91, NULL, NULL),
(406, 6, 'Tom Latham', 47, 56, 2, 1, 83.93, NULL, NULL),
(407, 5, 'Mitchell Santner', 9, 6, 1, 0, 150, 2, 3.4),
(407, 6, 'Mitchell Santner', 5, 9, 0, 0, 55.56, 0, 3.67),
(408, 5, 'Matt Henry', 1, 2, 0, 0, 50, 3, 3.7),
(408, 6, 'Matt Henry', 4, 2, 1, 0, 200, 1, 4),
(409, 5, 'Trent Boult', 3, 3, 0, 0, 100, 2, 4.2),
(409, 6, 'Trent Boult', 1, 2, 0, 0, 50, 0, 6.7),
(410, 5, 'Lockie Ferguson', NULL, NULL, NULL, NULL, NULL, 1, 4.3),
(410, 6, 'Lockie Ferguson', NULL, NULL, NULL, NULL, NULL, 3, 5),
(500, 1, 'Imam-ul-Haq', 2, 11, 0, 0, 18.18, NULL, NULL),
(501, 1, 'Fakhar Zaman', 22, 16, 2, 1, 137.5, NULL, NULL),
(502, 1, 'Babar Azam', 22, 33, 2, 0, 66.67, NULL, NULL),
(503, 1, 'Haris Sohail', 8, 11, 1, 0, 72.73, NULL, NULL),
(504, 1, 'Sarfaraz Ahmed', 8, 12, 1, 0, 66.67, NULL, NULL),
(505, 1, 'Mohammad Hafeez ', 16, 24, 2, 0, 66.67, NULL, NULL),
(506, 1, 'Imad Wasim', 1, 3, 0, 0, 33.33, NULL, NULL),
(507, 1, 'Shadab Khan', 0, 1, 0, 0, 0, NULL, NULL),
(508, 1, 'Hasan Ali', 1, 4, 0, 0, 25, 0, 9.75),
(509, 1, 'Wahab Riaz', 18, 11, 1, 2, 163.64, 0, 10.91),
(510, 1, 'Mohammad Amir', 3, 6, 0, 0, 50, 3, 4.33),
(600, 4, 'Dimuth Karunaratne', 0, 1, 0, 0, 0, NULL, NULL),
(601, 4, 'Kusal Perera', 30, 34, 4, 0, 88.24, NULL, NULL),
(602, 4, 'Avishka Fernando', 30, 29, 4, 0, 103.45, NULL, NULL),
(603, 4, 'Kusal Mendis', 23, 51, 2, 0, 45.1, NULL, NULL),
(604, 4, 'Angelo Mathews', 11, 29, 1, 0, 37.93, NULL, NULL),
(605, 4, 'Dhananjaya de Silva', 24, 41, 2, 0, 58.54, 0, 4.5),
(606, 4, 'Jeevan Mendis', 18, 46, 1, 1, 39.13, 0, 5.14),
(607, 4, 'Thisara Perera', 21, 25, 0, 0, 84, 1, 5.25),
(608, 4, 'Isuru Udana', 17, 32, 1, 0, 53.13, 0, 5.8),
(609, 4, 'Suranga Lakmal', 5, 7, 0, 0, 71.43, 0, 7.83),
(610, 4, 'Lasith Malinga', 4, 2, 1, 0, 200, 1, 4.7),
(700, 3, 'Liton Das', 16, 17, 2, 0, 94.12, NULL, NULL),
(701, 3, 'Tamim Iqbal', 36, 53, 4, 0, 67.92, NULL, NULL),
(702, 3, 'Shakib Al Hasan', 51, 69, 1, 0, 73.91, 5, 2.9),
(703, 3, 'Mushfiqur Rahim', 83, 87, 4, 1, 95.4, NULL, NULL),
(704, 3, 'Soumya Sarkar', 3, 10, 0, 0, 30, NULL, NULL),
(705, 3, 'Mahmudullah', 27, 38, 2, 0, 71.05, NULL, NULL),
(706, 3, 'Mosaddek Hossain', 35, 24, 4, 0, 145.83, 1, 4.17),
(707, 3, 'Mohammad Saifuddin', 2, 2, 0, 0, 100, 1, 4.13),
(708, 3, 'Mehidy Hasan', NULL, NULL, NULL, NULL, NULL, 0, 4.63),
(709, 3, 'Mashrafe Mortaza', NULL, NULL, NULL, NULL, NULL, 0, 5.29),
(710, 3, 'Mustafizur Rahman', NULL, NULL, NULL, NULL, NULL, 2, 4),
(800, 4, 'Quinton de Kock', 15, 16, 3, 0, 93.75, NULL, NULL),
(801, 4, 'Hashim Amla', 80, 105, 5, 0, 76.19, NULL, NULL),
(802, 4, 'Faf du Plessis', 96, 103, 10, 1, 93.2, NULL, NULL),
(803, 4, 'Aiden Markram', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(804, 4, 'Rassie Van Der Dussen', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(805, 4, 'JP Duminy', NULL, NULL, NULL, NULL, NULL, 1, 7.5),
(806, 4, 'Chris Morris', NULL, NULL, NULL, NULL, NULL, 3, 4.84),
(807, 4, 'Andile Phehlukwayo', NULL, NULL, NULL, NULL, NULL, 1, 4.75),
(808, 4, 'Dwaine Pretorius', NULL, NULL, NULL, NULL, NULL, 3, 2.5),
(809, 4, 'Kagiso Rabada', NULL, NULL, NULL, NULL, NULL, 2, 3.6),
(810, 4, 'Imran Tahir', NULL, NULL, NULL, NULL, NULL, 0, 3.6),
(900, 1, 'Chris Gayle', 50, 34, 6, 3, 147.06, NULL, NULL),
(901, 1, 'Shai Hope', 11, 17, 1, 0, 64.71, NULL, NULL),
(902, 1, 'Darren Bravo', 0, 4, 0, 0, 0, NULL, NULL),
(903, 1, 'Nicholas Pooran', 34, 19, 4, 2, 178.95, NULL, NULL),
(904, 1, 'Shimron Hetmyer', 7, 8, 0, 0, 87.5, NULL, NULL),
(905, 1, 'Jason Holder', NULL, NULL, NULL, NULL, NULL, 3, 8.4),
(906, 1, 'Andre Russell', NULL, NULL, NULL, NULL, NULL, 2, 1.33),
(907, 1, 'Carlos Brathwaite', NULL, NULL, NULL, NULL, NULL, 0, 3.5),
(908, 1, 'Ashley Nurse', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(909, 1, 'Sheldon Cottrell', NULL, NULL, NULL, NULL, NULL, 1, 4.5),
(910, 1, 'Oshane Thomas', NULL, NULL, NULL, NULL, NULL, 4, 4.76),
(1000, 3, 'Gulbadin Naib', 47, 75, 3, 0, 62.67, 2, 5.6),
(1001, 3, 'Rahmat Shah', 24, 35, 3, 0, 68.57, 0, 7),
(1002, 3, 'Hashmatullah Shahidi', 11, 31, 0, 0, 35.48, NULL, NULL),
(1003, 3, 'Asghar Afghan', 20, 38, 1, 0, 52.63, NULL, NULL),
(1004, 3, 'Mohammad Nabi', 0, 2, 0, 0, 0, 1, 4.4),
(1005, 3, 'Samiullah Shinwari', 49, 51, 3, 1, 96.08, NULL, NULL),
(1006, 3, 'Najibullah Zadran', 23, 23, 2, 0, 100, NULL, NULL),
(1007, 3, 'Rashid Khan', 2, 3, 0, 0, 66.67, 0, 5.2),
(1008, 3, 'Dawlat Zadran', 0, 8, 0, 0, 0, 1, 7.11),
(1009, 3, 'Mujeeb Ur Rahman', 0, 4, 0, 0, 0, 3, 3.9);

-- --------------------------------------------------------

--
-- Table structure for table `playersstats`
--

CREATE TABLE `playersstats` (
  `Player_Name` varchar(30) NOT NULL,
  `JerseyColor` varchar(20) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `DOB` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Age` int(3) NOT NULL,
  `Height` int(5) NOT NULL,
  `TotalMatches` int(7) DEFAULT 0,
  `TotalRuns` int(7) DEFAULT 0,
  `BatAvg` float DEFAULT 0,
  `HighestScore` int(6) DEFAULT 0,
  `StrikeRate` float DEFAULT 0,
  `50s` int(6) DEFAULT 0,
  `100s` int(6) DEFAULT 0,
  `200s` int(5) DEFAULT 0,
  `TotalWkts` int(7) DEFAULT 0,
  `Best` varchar(20) DEFAULT '0',
  `Eco` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playersstats`
--

INSERT INTO `playersstats` (`Player_Name`, `JerseyColor`, `Role`, `DOB`, `Age`, `Height`, `TotalMatches`, `TotalRuns`, `BatAvg`, `HighestScore`, `StrikeRate`, `50s`, `100s`, `200s`, `TotalWkts`, `Best`, `Eco`) VALUES
('Aaron Finch', 'Yellow', 'Captain - Batsman', '1986-11-17 11:01:41.879587', 33, 176, 129, 4983, 40.84, 153, 88.3, 27, 16, 0, 4, '2/1', 5.47),
('AB de Villiers', 'Springbok', 'Wk - Batsman', '1984-02-17 15:24:48.022000', 36, 178, 228, 9577, 53.5, 176, 101.1, 53, 25, 0, 7, '15/2', 6.31),
('Adam Zampa', 'Yellow', 'Bowler', '1992-03-31 15:22:46.000000', 28, 175, 58, 124, 6.53, 22, 59.9, 0, 0, 0, 85, '43/4', 5.56),
('Adil Rashid', 'Red', 'Bowler', '1988-02-17 05:54:25.000000', 32, 173, 105, 644, 18.94, 69, 102.71, 1, 0, 0, 155, '27/5', 5.6),
('Aiden Markram', 'Springbok', 'Batsman', '1994-10-04 21:05:00.000000', 26, 185, 26, 643, 27.96, 67, 85.17, 2, 0, 0, 3, '18/2', 6.6),
('Alex Carey', 'Yellow', 'Wk - Batsman', '1991-08-27 15:23:11.000000', 29, 182, 39, 1036, 35.72, 106, 91.36, 4, 1, 0, 0, '0', 0),
('Alex Hales', 'Red', 'Batsman', '1989-01-03 12:55:59.000000', 31, 196, 69, 2419, 37.8, 171, 95.73, 14, 6, 0, 0, '0', 0),
('Alzarri Joseph', 'Brown', 'Bowler', '1996-11-20 16:38:49.000000', 24, 193, 27, 121, 20.17, 29, 77.07, 0, 0, 0, 48, '56/5', 5.91),
('Andile Phehlukwayo', 'Springbok', 'All Rounder', '1996-03-03 23:49:36.000000', 24, 175, 58, 563, 29.63, 69, 87.56, 1, 0, 0, 69, '22/4', 5.61),
('Andre Russell', 'Brown', 'All Rounder', '1988-04-29 19:35:29.000000', 32, 185, 56, 1034, 27.21, 92, 130.23, 4, 0, 0, 70, '35/4', 5.84),
('Andrew Tye', 'Yellow', 'Bowler', '1986-12-12 15:23:32.000000', 33, 191, 7, 57, 14.25, 19, 118.75, 0, 0, 0, 12, '46/5', 6.08),
('Angelo Mathews', 'Dark_Blue', 'All Rounder', '1987-06-02 13:29:14.246000', 33, 183, 217, 5830, 41.94, 139, 83.33, 40, 3, 0, 120, '20/6', 4.63),
('Anrich Nortje', 'Springbok', 'Bowler', '1993-11-16 18:50:11.000000', 27, 183, 7, 9, 9, 8, 47.37, 0, 0, 0, 14, '57/3', 5.08),
('Asghar Afghan', 'Blue2', 'Vice Captain - Batsman', '1987-12-22 13:14:54.000000', 32, 168, 111, 2399, 24.48, 101, 67.27, 12, 1, 0, 3, '1/1', 3.93),
('Ashley Nurse', 'Brown', 'Bowler', '1988-12-22 15:26:37.000000', 31, 194, 52, 502, 19.31, 44, 97.86, 0, 0, 0, 49, '51/4', 5.35),
('Ashton Agar', 'Yellow', 'All Rounder', '0000-00-00 00:00:00.000000', 27, 188, 13, 189, 21, 46, 89.15, 0, 0, 0, 10, '48/2', 5.68),
('Avishka Fernando', 'Dark_Blue', 'Batsman', '1998-04-05 21:17:26.000000', 22, 181, 18, 653, 36.28, 127, 96.6, 3, 2, 0, 0, '0', 0),
('Babar Azam', 'Green', 'Captain - Batsman', '1994-10-15 12:50:35.631000', 26, 180, 76, 3455, 54.84, 125, 87.49, 16, 11, 0, 0, '0', 0),
('Ben Stokes', 'Red', 'All Rounder', '1991-06-04 15:15:34.127000', 29, 183, 95, 2682, 40.64, 102, 93.94, 20, 3, 0, 70, '61/5', 6.02),
('Bhuvneshwar Kumar', 'Blue', 'Bowler', '1990-02-05 15:42:48.000000', 30, 175, 114, 526, 14.22, 53, 74.82, 1, 0, 0, 132, '42/5', 5.03),
('Brandon King', 'Brown', 'Batsman', '1994-12-16 11:22:04.000000', 25, 178, 4, 97, 24.25, 39, 67.36, 0, 0, 0, 0, '0', 0),
('Carlos Brathwaite', 'Brown', 'All Rounder', '1988-07-18 15:28:47.000000', 32, 193, 43, 559, 16.44, 101, 91.04, 1, 1, 0, 43, '27/5', 5.81),
('Chris Gayle', 'Brown', 'All Rounder', '1979-09-21 17:06:21.711000', 41, 188, 300, 10480, 37.7, 215, 87.2, 54, 25, 1, 167, '46/5', 4.79),
('Chris Jordan', 'Red', 'Bowler', '1988-10-04 14:06:11.350000', 32, 179, 34, 170, 12.14, 38, 88.08, 0, 0, 0, 45, '29/5', 5.97),
('Chris Morris', 'Springbok', 'All Rounder', '1987-04-30 21:50:57.000000', 33, 196, 42, 468, 20.35, 62, 100.65, 1, 0, 0, 48, '31/4', 5.56),
('Chris Woakes', 'Red', 'All - Rounder', '1989-03-02 10:01:32.000000', 31, 185, 103, 1315, 25.78, 95, 90.88, 5, 0, 0, 149, '45/6', 5.54),
('Colin de Grandhomme', 'Black', 'All - Rounder', '1986-07-22 17:28:51.000000', 34, 183, 42, 722, 27.77, 74, 110.4, 4, 0, 0, 27, '26/3', 4.86),
('Colin Munro', 'Black', 'Batting', '1987-03-11 16:22:31.000000', 33, 178, 57, 1271, 24.92, 87, 104.7, 8, 0, 0, 7, '10/2', 5.23),
('Darren Bravo', 'Brown', 'Batsman', '1989-02-06 15:24:28.000000', 31, 175, 112, 2902, 29.92, 124, 70.23, 18, 3, 0, 0, '0', 0),
('David Miller', 'Springbok', 'Batsman', '1989-06-10 18:51:40.000000', 31, 191, 132, 3231, 40.39, 139, 100.62, 14, 5, 0, 0, '0', 0),
('David Warner', 'Yellow', 'Batsman', '1986-10-27 09:01:41.879587', 34, 170, 126, 5303, 44.56, 179, 95.43, 21, 18, 0, 0, '8/0', 8),
('Dawid Malan', 'Red', 'Batsman', '1987-09-03 16:20:25.000000', 33, 183, 1, 24, 24, 24, 80, 0, 0, 0, 0, '0', 0),
('Dawlat Zadran', 'Blue2', 'Bowler', '1988-03-19 19:53:03.000000', 32, 178, 81, 513, 17.1, 47, 77.26, 0, 0, 0, 115, '22/4', 5.45),
('Dhananjaya de Silva', 'Dark_Blue', 'All Rounder', '1991-09-06 17:26:05.000000', 29, 173, 45, 895, 25.57, 84, 77.56, 5, 0, 0, 22, '32/3', 5.17),
('Dimuth Karunaratne', 'Dark_Blue', 'Captain - Batsman', '1988-04-21 21:11:51.000000', 32, 183, 31, 683, 27.32, 97, 74.16, 5, 0, 0, 0, '7/0', 6.75),
('Dinesh Karthik', 'Blue', 'Wk - Batsman', '1985-06-01 15:39:59.000000', 35, 170, 94, 1752, 30.21, 79, 73.24, 9, 0, 0, 0, '0', 0),
('Dwaine Pretorius', 'Springbok', 'All Rounder', '1989-03-29 23:00:52.000000', 31, 186, 22, 135, 15, 50, 93.1, 1, 0, 0, 29, '5/3', 4.77),
('Dwayne Bravo', 'Brown', 'All Rounder', '1983-10-07 20:45:51.000000', 37, 175, 164, 2968, 25.37, 112, 82.31, 10, 2, 0, 199, '43/6', 5.41),
('Dwayne Smith', 'Brown', 'All Rounder', '1983-04-12 18:50:46.000000', 37, 185, 105, 1560, 18.57, 97, 92.69, 8, 0, 0, 61, '45/5', 5.03),
('Eoin Morgan', 'Red', 'Captain - Batsman', '1986-09-10 14:01:41.879587', 34, 175, 241, 7598, 39.37, 148, 91.44, 46, 14, 0, 0, '0', 0),
('Evin Lewis', 'Brown', 'Batsman', '1991-12-27 16:38:31.000000', 28, 183, 50, 1610, 35, 176, 83.9, 8, 3, 0, 0, '0', 0),
('Faf du Plessis', 'Springbok', 'Captain - Batsman', '1984-07-13 13:40:29.367000', 36, 180, 143, 5507, 46.67, 185, 88.57, 35, 12, 0, 2, '8/1', 5.91),
('Fakhar Zaman', 'Green', 'Batsman', '1990-04-10 19:06:57.000000', 30, 180, 47, 1960, 45.58, 210, 95.24, 13, 4, 1, 1, '19/1', 12),
('Glenn Maxwell', 'Yellow', 'All Rounder', '1988-10-14 15:24:47.000000', 32, 182, 113, 3063, 33.29, 108, 123.06, 20, 2, 0, 50, '46/4', 5.62),
('Gulbadin Naib', 'Blue2', 'Captain - All Rounder', '1991-03-16 16:00:04.000000', 29, 170, 64, 1041, 21.69, 82, 73.1, 5, 0, 0, 59, '43/6', 5.38),
('Hardik Pandya', 'Blue', 'All  Rounder', '1993-10-11 22:31:16.000000', 27, 183, 54, 957, 29.91, 83, 115.58, 4, 0, 0, 54, '31/3', 5.56),
('Haris Sohail', 'Green', 'Batsman', '1989-01-09 22:24:23.000000', 31, 180, 42, 1685, 46.81, 130, 85.27, 14, 2, 0, 11, '45/3', 5.73),
('Hasan Ali', 'Green', 'Bowler', '1994-07-02 15:16:04.000000', 26, 174, 53, 280, 14, 59, 113.36, 2, 0, 0, 82, '34/5', 5.61),
('Hashim Amla', 'Springbok', 'Batsman', '1983-03-31 20:59:20.000000', 37, 183, 181, 8113, 49.47, 159, 88.39, 39, 27, 0, 0, '0', 0),
('Hashmatullah Shahidi', 'Blue2', 'Batsman', '1994-11-04 20:28:58.000000', 26, 183, 40, 1063, 32.21, 97, 63.73, 9, 0, 0, 0, '8/0', 8.33),
('Hayden Walsh', 'Brown', 'Bowler', '1992-04-23 20:12:47.000000', 28, 171, 10, 99, 33, 46, 86.09, 0, 0, 0, 12, '36/4', 5.28),
('Hazratullah Zazai', 'Blue2', 'Batsman', '1998-03-23 13:19:14.000000', 22, 183, 16, 361, 22.56, 67, 88.26, 2, 0, 0, 0, '0', 0),
('Henry Nicholls', 'Black', 'Batsman', '1991-11-15 21:24:00.000000', 29, 173, 49, 1329, 35.92, 124, 81.78, 11, 1, 0, 0, '0', 0),
('Ikram Alikhil', 'Blue2', 'Batsman', '1994-11-04 20:13:48.000000', 26, 183, 40, 1063, 32.21, 97, 63.73, 9, 0, 0, 0, '8/0	', 8.33),
('Imad Wasim', 'Green', 'All Rounder', '1988-12-18 22:27:06.000000', 31, 187, 55, 986, 42.87, 63, 110.29, 5, 0, 0, 44, '14/5', 4.89),
('Imam-ul-Haq', 'Green', 'Batsman', '1995-12-12 21:50:07.000000', 24, 168, 40, 1834, 52.4, 151, 80.44, 7, 7, 0, 0, '0', 0),
('Imran Tahir', 'Springbok', 'Bowler', '1979-03-27 18:46:50.000000', 41, 178, 107, 157, 7.85, 29, 69.78, 0, 0, 0, 173, '45/7', 4.65),
('Ish Sodhi', 'Black', 'Bowler', '1992-10-31 12:24:41.000000', 28, 183, 33, 81, 7.36, 24, 77.88, 0, 0, 0, 43, '58/4', 5.59),
('Isuru Udana', 'Dark_Blue', 'All Rounder', '1988-02-17 21:23:43.000000', 32, 182, 18, 190, 15.83, 78, 95, 1, 0, 0, 16, '82/3', 6.21),
('James Anderson', 'Red', 'Bolwer', '1982-07-30 11:36:59.303000', 38, 188, 194, 273, 7.58, 28, 48.75, 0, 0, 0, 269, '23/5', 4.92),
('James Neesham', 'Black', 'All Rounder', '1990-09-17 20:48:12.000000', 30, 188, 63, 1286, 29.23, 97, 97.87, 6, 0, 0, 61, '31/5', 6.14),
('Jason Holder', 'Brown', 'Captain - All Rounder', '1991-11-05 15:48:44.000000', 28, 201, 113, 1821, 24.95, 99, 94.3, 9, 0, 0, 136, '27/5', 5.55),
('Jason Roy', 'Red', 'Batsman', '1990-07-21 04:11:41.879587', 30, 182, 92, 3483, 40.03, 180, 106.68, 18, 9, 0, 0, '0', 0),
('Jasprit Bumrah', 'Blue', 'Bowler', '1993-12-06 15:59:24.000000', 26, 178, 64, 19, 3.8, 10, 43.18, 0, 0, 0, 104, '27/5', 4.56),
('Jeevan Mendis', 'Dark_Blue', 'All Rounder', '1983-01-15 21:28:22.000000', 37, 176, 58, 636, 18.71, 72, 82.7, 1, 0, 0, 28, '15/3', 5.15),
('Joe Root', 'Red', 'Vice Captain - Batsman', '1990-12-30 11:01:41.879587', 29, 183, 148, 5962, 50.5, 133, 86.91, 33, 16, 0, 26, '52/3', 5.76),
('Jofra Archer', 'Red', 'Bowler', '1995-04-01 04:52:53.000000', 25, 182, 17, 27, 6.75, 8, 79.41, 0, 0, 0, 30, '27/3', 4.74),
('Jonny Bairstow', 'Red', 'Wk - Batsman', '1989-09-26 20:01:45.879587', 31, 178, 82, 3207, 47.16, 141, 103.72, 13, 10, 0, 0, '0', 0),
('Jos Buttler', 'Red', 'Wk - Batsman', '1990-09-08 07:51:46.000000', 30, 180, 144, 3855, 39.74, 150, 119.05, 20, 9, 0, 0, '0', 0),
('Josh Hazlewood', 'Yellow', 'Bowler', '1991-01-08 15:25:07.000000', 29, 196, 51, 46, 15.33, 11, 63.01, 0, 0, 0, 82, '52/6', 4.7),
('JP Duminy', 'Springbok', 'All Rounder', '1984-04-14 21:02:48.000000', 36, 170, 199, 5117, 36.81, 150, 84.58, 27, 4, 0, 69, '16/4', 5.37),
('Kagiso Rabada', 'Springbok', 'Bowler', '1995-05-25 15:55:00.000000', 25, 191, 75, 259, 16.19, 31, 77.78, 0, 0, 0, 117, '16/6', 5),
('Kane Richardson', 'Yellow', 'Bowler', '1991-02-12 15:25:41.000000', 29, 190, 25, 75, 15, 24, 110.29, 0, 0, 0, 39, '68/5', 5.67),
('Kane Williamson', 'Black', 'Captain - Batsman', '1990-08-08 12:15:31.000000', 30, 173, 151, 6173, 47.48, 148, 81.76, 39, 13, 0, 37, '22/4', 5.36),
('Karim Janat', 'Blue2', 'Bowler', '1998-08-11 11:34:43.000000', 22, 170, 1, 9, 9, 9, 27.27, 0, 0, 0, 0, '31/0', 7.75),
('Kedar Jadhav', 'Blue', 'All Rounder', '1985-03-26 15:37:15.000000', 35, 163, 73, 1389, 42.09, 120, 101.61, 6, 2, 0, 27, '23/3', 5.16),
('Keemo Paul', 'Brown', 'All Rounder', '1998-02-21 19:40:51.000000', 22, 180, 19, 214, 23.78, 46, 89.92, 0, 0, 0, 23, '44/3', 6.05),
('Kemar Roach', 'Brown', 'Bowler', '1988-06-30 23:08:44.000000', 32, 172, 92, 308, 13.39, 34, 53.47, 0, 0, 0, 124, '27/6', 5.07),
('Kieron Pollard', 'Brown', 'Vice Captain - All Rounder', '1987-05-12 15:59:56.903000', 33, 196, 113, 2496, 26, 119, 94.65, 10, 3, 0, 53, '27/3', 5.77),
('KL Rahul', 'Blue', 'Wk - Batsman', '1992-04-18 11:02:14.879587', 28, 180, 32, 1239, 47.65, 112, 87.07, 7, 4, 0, 0, '0', 0),
('Kuldeep Yadav', 'Blue', 'Bowler', '1994-12-14 10:03:36.000000', 25, 168, 60, 118, 13.11, 19, 62.77, 0, 0, 0, 104, '25/6', 5.11),
('Kusal Mendis', 'Dark_Blue', 'Batsman', '1995-02-02 23:18:52.000000', 25, 171, 76, 2167, 30.52, 119, 84.68, 17, 2, 0, 0, '13/0', 8.4),
('Kusal Perera', 'Dark_Blue', 'Wk - Batsman', '1990-08-17 11:15:11.000000', 30, 168, 101, 2825, 30.71, 135, 92.62, 14, 5, 0, 0, '0', 0),
('Lasith Malinga', 'Dark_Blue', 'Captain - Bowler', '1983-08-28 21:21:33.000000', 37, 173, 226, 567, 6.83, 56, 74.51, 1, 0, 0, 338, '38/6', 5.35),
('Liam Plunkett', 'Red', 'Bowler', '1985-04-06 20:53:31.000000', 35, 191, 88, 646, 20.84, 56, 102.7, 1, 0, 0, 135, '52/5', 5.82),
('Liton Das', 'Green2', 'Wk - Batsman', '1994-10-13 15:54:02.000000', 26, 176, 36, 1079, 31.74, 176, 95.23, 3, 3, 0, 0, '0', 0),
('Lockie Ferguson', 'Black', 'Bowler', '1991-06-13 15:55:27.702000', 29, 182, 37, 63, 7, 19, 47.73, 0, 0, 0, 69, '45/5', 5.46),
('Lungi Ngidi', 'Springbok', 'Bowler', '1996-03-29 09:45:39.000000', 24, 193, 26, 47, 15.67, 19, 71.21, 0, 0, 0, 53, '58/6', 5.06),
('Mahmudullah', 'Green2', 'All Rounder', '1986-02-04 19:40:15.000000', 34, 180, 188, 4070, 33.64, 128, 76.59, 21, 3, 0, 76, '4/3', 5.17),
('Manish Pandey', 'Blue', 'Batsman', '1989-09-10 15:42:44.000000', 31, 173, 26, 492, 35.14, 104, 91.96, 2, 1, 0, 0, '0', 0),
('Marcus Stoinis', 'Yellow', 'All Rounder', '1989-08-16 21:26:04.977000', 31, 185, 44, 1106, 32.53, 146, 92.32, 6, 1, 0, 33, '16/3', 6.18),
('Mark Wood', 'Red', 'Bolwer', '1990-01-11 15:02:02.000000', 30, 183, 52, 56, 8, 13, 88.89, 0, 0, 0, 64, '33/4', 5.51),
('Marnus Labuschagne', 'Yellow', 'All Rounder', '1994-06-22 15:26:43.000000', 26, 180, 10, 394, 43.78, 108, 88.94, 2, 1, 0, 0, '11/0', 9),
('Martin Guptill', 'Black', 'Batsman', '1986-09-30 15:57:59.000000', 34, 188, 183, 6843, 42.24, 237, 87.46, 37, 16, 1, 4, '6/2', 5.39),
('Mashrafe Mortaza', 'Green2', 'Captain - Bowler', '1983-10-05 15:53:02.000000', 37, 185, 220, 1787, 13.75, 51, 87.56, 1, 0, 0, 270, '26/6', 4.88),
('Matt Henry', 'Black', 'Batsman', '1991-12-14 21:22:27.000000', 28, 188, 52, 211, 15.07, 48, 100, 0, 0, 0, 92, '30/5', 5.41),
('Matthew Wade', 'Yellow', 'Wk-Batsman', '1987-12-26 15:15:09.016000', 32, 170, 94, 1777, 25, 100, 82.12, 10, 1, 0, 0, '0', 0),
('Mayank Agarwal', 'Blue', 'Batsman', '1991-02-16 05:04:29.000000', 29, 173, 3, 36, 12, 32, 92.31, 0, 0, 0, 0, '0', 0),
('Mehidy Hasan', 'Green2', 'All Rounder', '1997-10-25 19:33:03.000000', 23, 170, 41, 393, 393, 51, 77.36, 1, 0, 0, 40, '29/4', 4.65),
('Mitchell Marsh', 'Yellow', 'All Rounder', '1991-10-20 15:22:36.432000', 29, 193, 60, 1615, 34.36, 102, 90.37, 12, 1, 0, 49, '33/5', 5.55),
('Mitchell Santner', 'Black', 'All Rounder', '1992-02-05 20:25:31.491000', 28, 182, 72, 924, 27.18, 67, 88.34, 2, 0, 0, 71, '50/5', 4.9),
('Mitchell Starc ', 'Yellow', 'Bowler', '1990-01-30 15:58:07.911000', 30, 196, 94, 401, 12.15, 52, 91.14, 1, 0, 0, 183, '28/6', 5.12),
('Moeen Ali', 'Red', 'Vice Captain - All Rounder', '1987-06-18 01:50:57.000000', 33, 183, 105, 1790, 24.86, 128, 103.23, 5, 3, 0, 85, '46/4', 5.25),
('Mohammad Amir', 'Green', 'Bowler', '1992-04-13 12:53:07.000000', 28, 188, 61, 363, 18.15, 73, 81.76, 2, 0, 0, 81, '30/5', 4.78),
('Mohammad Hafeez ', 'Green', 'All Rounder', '1980-10-17 18:52:07.046000', 40, 175, 218, 6614, 32.91, 140, 76.6, 38, 11, 0, 139, '41/4', 4.19),
('Mohammad Nabi', 'Blue2', 'All Rounder', '1985-01-01 06:04:07.000000', 35, 175, 124, 2796, 27.41, 116, 85.5, 15, 1, 0, 130, '30/4', 4.28),
('Mohammad Rizwan', 'Green', 'Wk - Batsman', '1992-06-01 21:58:10.000000', 28, 180, 35, 730, 30.42, 115, 86.19, 3, 2, 0, 0, '0', 0),
('Mohammad Saifuddin', 'Green2', 'All Rounder', '1996-11-01 09:44:27.000000', 24, 179, 22, 290, 32.22, 51, 86.05, 2, 0, 0, 31, '5.87', 41),
('Mohammed Shami', 'Blue', 'Bowler', '1990-09-03 16:23:41.000000', 30, 178, 77, 147, 7.74, 25, 81.67, 0, 0, 0, 144, '69/5', 5.59),
('Mosaddek Hossain', 'Green2', 'All Rounder', '1995-12-10 19:42:03.000000', 24, 174, 35, 549, 27.45, 52, 87.28, 2, 0, 0, 14, '13/3', 5.24),
('MS Dhoni', 'Blue', 'Wk - Batsman', '1981-07-07 07:07:07.000000', 39, 180, 350, 10773, 50.58, 183, 87.56, 73, 10, 0, 1, '14/1', 5.17),
('Mujeeb Ur Rahman', 'Blue2', 'Bowler', '2001-03-28 13:21:24.000000', 19, 180, 40, 69, 6.27, 15, 87.34, 0, 0, 0, 63, '50/5', 3.94),
('Mushfiqur Rahim', 'Green2', 'Wk - Batsman', '1987-06-09 15:52:43.000000', 33, 160, 218, 6174, 36.11, 144, 79.21, 38, 7, 0, 0, '0', 0),
('Mustafizur Rahman', 'Green2', 'Bowler', '1995-09-06 19:47:43.000000', 25, 180, 58, 58, 7.8, 18, 57.35, 0, 0, 0, 109, '43/6', 5.22),
('Najibullah Zadran', 'Blue2', 'Batsman', '1993-02-28 13:24:28.000000', 27, 180, 67, 1586, 29.92, 104, 89.86, 11, 1, 0, 0, '9/0', 6),
('Nathan Coulter-Nile', 'Yellow', 'Bowler', '1987-11-11 15:28:02.000000', 33, 191, 32, 252, 16.8, 92, 96.18, 1, 0, 0, 52, '48/4', 5.56),
('Nathan Lyon', 'Yellow', 'Bowler', '1987-11-20 17:28:20.321000', 33, 181, 29, 77, 19.25, 30, 92.77, 0, 0, 0, 29, '44/4', 4.92),
('Navdeep Saini', 'Blue', 'Bowler', '1992-11-23 22:53:05.000000', 27, 178, 5, 53, 53, 45, 96.36, 0, 0, 0, 5, '58/2', 6.27),
('Naveen-ul-Haq', 'Blue2', 'Bowler', '1999-09-23 13:59:09.000000', 21, 186, 4, 9, 9, 8, 42.86, 0, 0, 0, 6, '60/3', 5.69),
('Nicholas Pooran', 'Brown', 'Wk - Batsman', '1995-10-02 22:22:37.000000', 25, 173, 25, 932, 49.05, 118, 106.51, 7, 1, 0, 0, '0', 0),
('Oshane Thomas', 'Brown', 'Bowler', '1997-02-18 15:22:06.000000', 23, 183, 19, 8, 4, 8, 72.73, 0, 0, 0, 27, '21/5', 6.74),
('Pat Cummins', 'Yellow', 'Vice Captain -Bowler', '1993-05-08 22:14:33.000000', 27, 192, 67, 284, 9.79, 36, 73.58, 0, 0, 0, 108, '70/5', 5.21),
('Quinton de Kock', 'Springbok', 'Captain - Wk - Batsman', '1992-12-17 15:48:09.000000', 27, 170, 121, 5135, 44.65, 178, 94.85, 25, 15, 0, 0, '0', 0),
('Rahmat Shah', 'Blue2', 'All Rounder', '1993-07-06 20:24:03.000000', 27, 177, 72, 2359, 35.21, 114, 70.08, 16, 4, 0, 14, '32/5', 5.77),
('Rashid Khan', 'Blue2', 'Bowler', '1998-09-20 16:02:50.000000', 22, 168, 70, 905, 19.26, 60, 99.89, 4, 0, 0, 133, '18/7', 4.16),
('Rassie Van Der Dussen', 'Springbok', 'Batsman', '1989-02-07 18:44:19.000000', 31, 188, 21, 707, 70.7, 95, 81.83, 7, 0, 0, 0, '0', 0),
('Ravindra Jadeja', 'Blue', 'All Rounder', '1988-12-06 16:22:30.000000', 31, 174, 165, 2296, 31.89, 87, 85.96, 12, 0, 0, 187, '36/5', 4.9),
('Rishabh Pant', 'Blue', 'Wk - Batsman', '1997-10-04 02:06:37.000000', 23, 170, 16, 374, 26.71, 71, 103.6, 1, 0, 0, 0, '0', 0),
('Rohit Sharma', 'Blue', 'Vice Captain - Batsman', '1987-04-30 13:01:24.879587', 33, 170, 224, 9115, 49.3, 264, 88.93, 43, 29, 3, 8, '27/2', 5.21),
('Ross Taylor', 'Black', 'Batsman', '1984-03-08 18:12:02.000000', 36, 185, 232, 8569, 48.41, 181, 83.4, 51, 21, 0, 0, '0', 0),
('Roston Chase', 'Brown', 'All Rounder', '1992-03-22 18:30:22.000000', 28, 195, 29, 520, 26, 94, 76.58, 2, 0, 0, 15, '30/3', 4.83),
('Sam Billings', 'Red', 'Wk - Batsman', '1991-06-15 12:49:16.000000', 29, 178, 21, 586, 36.62, 118, 93.46, 4, 1, 0, 0, '0', 0),
('Sam Curran', 'Red', 'All - Rounder', '1998-06-03 20:59:18.590000', 22, 175, 5, 25, 6.25, 15, 48.08, 0, 0, 0, 5, '35/3', 6.04),
('Samiullah Shinwari', 'Blue2', 'All Rounder', '1987-02-03 13:27:34.000000', 33, 173, 85, 1850, 29.84, 96, 66.57, 11, 0, 0, 47, '31/4', 4.88),
('Sarfaraz Ahmed', 'Green', 'Captain - Wk - Batsman', '1987-05-22 19:03:14.000000', 33, 173, 116, 2302, 33.85, 105, 87.8, 11, 2, 0, 0, '15/0', 7.5),
('Shadab Khan', 'Green', 'All Rounder', '1998-10-04 22:36:26.000000', 22, 178, 43, 337, 25.92, 54, 68.64, 3, 0, 0, 59, '28/4', 5.03),
('Shai Hope', 'Brown', 'Wk - Batsman', '1993-11-10 21:47:43.000000', 27, 175, 76, 3289, 51.39, 170, 74.38, 17, 9, 0, 0, '0', 0),
('Shakib Al Hasan', 'Green2', 'Captain - All Rounder', '1987-03-24 11:52:04.127000', 33, 175, 206, 6323, 37.64, 134, 82.75, 47, 9, 0, 260, '29/5', 4.48),
('Shapoor Zadran', 'Blue2', 'Bowler', '1985-01-01 13:41:44.000000', 35, 178, 45, 67, 7.44, 17, 41.88, 0, 0, 0, 44, '24/4', 4.81),
('Shardul Thakur', 'Blue', 'Bowler', '1991-10-16 01:04:09.000000', 29, 175, 11, 77, 19.25, 22, 145.28, 0, 0, 0, 12, '52/4', 7),
('Sheldon Cottrell', 'Brown', 'Bowler', '1989-08-19 16:21:17.000000', 31, 191, 34, 84, 12, 17, 75, 0, 0, 0, 49, '46/5', 5.88),
('Shikhar Dhawan', 'Blue', 'Batsman', '1985-12-05 02:01:30.879587', 34, 180, 136, 5688, 45.14, 143, 94.02, 29, 17, 0, 0, '0', 0),
('Shimron Hetmyer', 'Brown', 'Batsman', '1996-12-26 15:40:45.000000', 23, 178, 44, 1430, 36.67, 139, 106.88, 4, 5, 0, 0, '0', 0),
('Shreyas Iyer', 'Blue', 'Batsman', '1994-12-06 11:57:04.000000', 25, 178, 18, 748, 49.87, 103, 100.81, 8, 1, 0, 0, '2/0', 7.5),
('Soumya Sarkar', 'Green2', 'Batsman', '1993-02-25 15:54:02.000000', 27, 183, 55, 1728, 33.88, 127, 98.57, 11, 2, 0, 9, '56/3', 5.89),
('Steve Smith', 'Yellow', 'Batsman', '1989-06-02 11:01:41.879587', 31, 176, 125, 4162, 42.5, 164, 86.67, 25, 9, 0, 28, '16/3', 5.41),
('Stuart Broad', 'Red', 'Bowler', '1986-06-24 12:07:56.420000', 34, 196, 121, 529, 12.3, 45, 74.61, 0, 0, 0, 178, '23/5', 5.27),
('Sunil Ambris', 'Brown', 'Batsman', '1993-03-23 23:46:18.000000', 27, 173, 13, 447, 44.7, 148, 97.17, 2, 1, 0, 0, '0', 0),
('Sunil Narine', 'Brown', 'Bowler', '1988-05-26 16:11:38.000000', 32, 180, 65, 363, 11, 36, 82.5, 0, 0, 0, 92, '27/6', 4.13),
('Suranga Lakmal', 'Dark_Blue', 'Bowler', '1987-03-10 21:31:18.000000', 33, 183, 85, 244, 9.38, 26, 60.4, 0, 0, 0, 107, '13/4', 5.46),
('Tamim Iqbal', 'Green2', 'Batsman', '1989-03-20 15:51:28.000000', 31, 175, 207, 7202, 36.74, 158, 78.68, 47, 13, 0, 0, '6/0', 13),
('Temba Bavuma', 'Springbok', 'Batsman', '1990-05-17 19:12:11.000000', 30, 162, 6, 335, 55.83, 113, 92.29, 1, 1, 0, 0, '0', 0),
('Thisara Perera', 'Dark_Blue', 'Bowler', '1989-04-03 15:49:41.000000', 31, 185, 164, 2316, 20.14, 140, 112.59, 10, 1, 0, 172, '44/6', 5.84),
('Tim Southee', 'Black', 'Vice Captain - Bowler', '1988-12-11 22:02:14.000000', 31, 193, 143, 681, 12.61, 55, 97.84, 1, 0, 0, 190, '33/7', 5.47),
('Tom Banton', 'Red', 'Wk - Batsman', '1998-11-11 12:19:59.603000', 22, 180, 6, 134, 26.8, 58, 92.41, 1, 0, 0, 0, '0', 0),
('Tom Latham', 'Black', 'Wk - Batsman', '1992-04-02 16:08:45.000000', 28, 173, 99, 2696, 32.88, 137, 83.42, 16, 4, 0, 0, '0', 0),
('Trent Boult', 'Black', 'Bowler', '1989-07-22 16:01:12.000000', 31, 180, 90, 159, 9.35, 21, 74.65, 0, 0, 0, 164, '34/7', 5.03),
('Usman Ghani', 'Blue2', 'Batsman', '1996-11-20 19:31:21.000000', 24, 185, 15, 411, 27.4, 118, 79.04, 2, 1, 0, 1, '21/1', 5.37),
('Usman Khawaja', 'Yellow', 'Batsman', '1986-12-18 15:49:17.000000', 33, 177, 40, 1554, 42, 104, 84.09, 12, 2, 0, 0, '0', 0),
('Virat Kohli', 'Blue', 'Captain - Batsman', '1988-11-05 22:11:41.879587', 31, 175, 248, 11867, 59.34, 183, 93.25, 58, 43, 0, 4, '15/1', 6.22),
('Wahab Riaz', 'Green', 'Bowler', '1985-06-28 15:55:51.206000', 35, 185, 90, 688, 13.76, 54, 86.76, 2, 0, 0, 119, '46/5', 5.7),
('Yuzvendra Chahal', 'Blue', 'Bowler', '1990-07-23 12:35:54.000000', 30, 168, 52, 49, 8.17, 18, 58.33, 0, 0, 0, 91, '42/6', 5.08);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `phno`, `email`, `pass`) VALUES
('Atharv', 'Chaudhari', '0987654321', 'ahc@gmail.com', 'atharv@123'),
('Div', 'Shaw', '1234567890', 'div@gmail.com', 'div@123'),
('Sid', 'Kulkarni', '8787878787', 'sid@gmail.com', 'mikey@123'),
('Thanos', 'Patil', '3434343434', 'thanos@populationhalf.com', 'thanos@123');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TeamId` int(5) NOT NULL,
  `CountryName` varchar(30) NOT NULL,
  `JerseyColor` varchar(15) NOT NULL,
  `Ranking` int(5) NOT NULL,
  `Ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TeamId`, `CountryName`, `JerseyColor`, `Ranking`, `Ratings`) VALUES
(1, 'India', 'Blue', 2, 116),
(2, 'Australia', 'Yellow', 4, 113),
(3, 'England', 'Red', 1, 123),
(4, 'New Zealand', 'Black', 3, 116),
(5, 'Pakistan', 'Green', 6, 100),
(6, 'South Africa', 'Springbok', 5, 108),
(7, 'Bangladesh', 'Green2', 7, 88),
(8, 'Sri Lanka', 'Dark_Blue', 8, 85),
(9, 'West Indies', 'Brown', 9, 76),
(10, 'Afghanistan', 'Blue2', 10, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD UNIQUE KEY `TeamId` (`TeamId`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD UNIQUE KEY `TeamId` (`TeamId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Msg_Id`,`email`),
  ADD UNIQUE KEY `Msg_Id` (`Msg_Id`),
  ADD KEY `Msg_Id_2` (`Msg_Id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MatchId`,`Team1Name`,`Team2Name`),
  ADD UNIQUE KEY `MatchId` (`MatchId`),
  ADD KEY `Team1Name` (`Team1Name`),
  ADD KEY `Team2Name` (`Team2Name`),
  ADD KEY `MOTM` (`MOTM`),
  ADD KEY `WinnerId` (`WinnerId`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PlayerId`,`MatchId`),
  ADD KEY `Match_Id` (`MatchId`),
  ADD KEY `PlayerName` (`PlayerName`);

--
-- Indexes for table `playersstats`
--
ALTER TABLE `playersstats`
  ADD UNIQUE KEY `Player_Name` (`Player_Name`),
  ADD KEY `Jersey_Color` (`JerseyColor`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`,`pass`),
  ADD UNIQUE KEY `email` (`email`,`pass`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamId`),
  ADD UNIQUE KEY `TeamId` (`TeamId`),
  ADD UNIQUE KEY `CountryName` (`CountryName`),
  ADD UNIQUE KEY `JerseyColor` (`JerseyColor`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `Team_Id` FOREIGN KEY (`TeamId`) REFERENCES `teams` (`TeamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `TeamId` FOREIGN KEY (`TeamId`) REFERENCES `teams` (`TeamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `MOM` FOREIGN KEY (`MOTM`) REFERENCES `players` (`PlayerName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Team1Name` FOREIGN KEY (`Team1Name`) REFERENCES `teams` (`CountryName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Team2Name` FOREIGN KEY (`Team2Name`) REFERENCES `teams` (`CountryName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Winner_id` FOREIGN KEY (`WinnerId`) REFERENCES `teams` (`TeamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `Match_Id` FOREIGN KEY (`MatchId`) REFERENCES `matches` (`MatchId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Player_Name` FOREIGN KEY (`PlayerName`) REFERENCES `playersstats` (`Player_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playersstats`
--
ALTER TABLE `playersstats`
  ADD CONSTRAINT `Jersey_Color` FOREIGN KEY (`JerseyColor`) REFERENCES `teams` (`JerseyColor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
