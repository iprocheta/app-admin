-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 08:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'procheta@gmail.com', 'f09696910bdd874a99cd74c8f05b5c44');

-- --------------------------------------------------------

--
-- Table structure for table `heartattack`
--

CREATE TABLE `heartattack` (
  `unique_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `hypertension` varchar(5) NOT NULL,
  `hyp_med` int(5) NOT NULL,
  `diabetes` varchar(5) NOT NULL,
  `dia_med` int(5) NOT NULL,
  `cholesterol` varchar(5) NOT NULL,
  `chol_med` int(5) NOT NULL,
  `smoke` varchar(10) NOT NULL,
  `family_history` varchar(5) NOT NULL,
  `chest_pain` varchar(5) NOT NULL,
  `Dyspnea` int(5) NOT NULL,
  `Giddiness` int(5) NOT NULL,
  `Neausea` int(5) NOT NULL,
  `Sweating` int(5) NOT NULL,
  `Syncope` int(5) NOT NULL,
  `Vomiting` int(5) NOT NULL,
  `cp_loaction` varchar(20) NOT NULL,
  `cp_mark` varchar(20) NOT NULL,
  `cp_type` varchar(50) NOT NULL,
  `cp_duration` int(5) NOT NULL,
  `LeftArm` tinyint(2) NOT NULL,
  `RightArm` tinyint(2) NOT NULL,
  `Back` tinyint(2) NOT NULL,
  `UpperJaw` int(11) NOT NULL,
  `NoMovement` int(11) NOT NULL,
  `AssoticateDyspnea` tinyint(2) NOT NULL,
  `AssosiateGiddiness` varchar(10) NOT NULL,
  `AssoticateNeausea` tinyint(5) NOT NULL,
  `AssoticatePalpitation` tinyint(2) NOT NULL,
  `AssoticateSweating` tinyint(2) NOT NULL,
  `AssosiateSyncope` varchar(10) NOT NULL,
  `AssoticateVomiting` tinyint(2) NOT NULL,
  `doing_while` varchar(50) NOT NULL,
  `relieved` varchar(5) NOT NULL,
  `subsided` varchar(5) NOT NULL,
  `persistence` int(5) NOT NULL,
  `similar_pain` varchar(5) NOT NULL,
  `class` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heartattack`
--

INSERT INTO `heartattack` (`unique_id`, `id`, `hypertension`, `hyp_med`, `diabetes`, `dia_med`, `cholesterol`, `chol_med`, `smoke`, `family_history`, `chest_pain`, `Dyspnea`, `Giddiness`, `Neausea`, `Sweating`, `Syncope`, `Vomiting`, `cp_loaction`, `cp_mark`, `cp_type`, `cp_duration`, `LeftArm`, `RightArm`, `Back`, `UpperJaw`, `NoMovement`, `AssoticateDyspnea`, `AssosiateGiddiness`, `AssoticateNeausea`, `AssoticatePalpitation`, `AssoticateSweating`, `AssosiateSyncope`, `AssoticateVomiting`, `doing_while`, `relieved`, `subsided`, `persistence`, `similar_pain`, `class`, `Time`) VALUES
(1, 68, 'Yes', 6, 'Yes', 13, 'Yes', 2, 'Yes', 'Yes', '', 0, 0, 0, 0, 0, 0, 'Center of chest', 'With palm', 'Heaviness', 4, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 'Not remember', 'Yes', 'No', 0, 'Yes', 'Heart Attack', '2018-01-07 11:22:27'),
(2, 69, 'Yes', 6, 'Yes', 13, 'Yes', 2, 'Yes', 'Yes', '', 0, 0, 0, 0, 0, 0, 'Left side of chest', 'With palm', 'Heaviness', 4, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 'Not remember', 'Yes', 'No', 0, 'Yes', 'Heart Attack', '2018-01-07 11:22:27'),
(3, 69, 'Yes', 2, 'Yes', 1, 'No', 0, 'Yes', 'No', '', 0, 0, 0, 0, 0, 0, 'Epigastric', 'With figure', 'Burning', 4, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 'Working', 'Yes', 'No', 0, 'No', 'Heart Attack', '2018-01-07 11:22:27'),
(4, 0, '', 0, '', 0, '', 0, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, '', '', '', 0, '', '', '2018-01-07 11:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Age` varchar(11) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Profession` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Mobile` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `FirstName`, `LastName`, `Age`, `Gender`, `Profession`, `Mobile`, `Email`) VALUES
(66, 'Proc', 'Nag', '24', 'Female', 'Student', '01988384900', 'abc@gmail.com'),
(68, 'foysal', 'Ah', '', 'Male', 'Private job', '01677400731', 'abc@gmail.com'),
(69, 'rayhan', 'morshed', '45', 'Male', 'servise', '01521541076', ''),
(71, '', '', '', 'Male', '', '01913134100', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heartattack`
--
ALTER TABLE `heartattack`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heartattack`
--
ALTER TABLE `heartattack`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
