-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
-- AIT ELAHMADI Farah
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 03:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_livres`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `CIN` varchar(12) NOT NULL,
  `NOM_PRENOM` varchar(40) NOT NULL,
  `E_MAIL` varchar(51) NOT NULL,
  `DATE_` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`CIN`, `NOM_PRENOM`, `E_MAIL`, `DATE_`) VALUES
('c142003', 'Farah ahmadi2', 'ahmadifar@gmail.com', '2000-11-02'),
('c142599', 'karima ahmadi', 'hkarima@yahoo', '1999-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `CODE` int(11) NOT NULL,
  `TITRE` varchar(40) NOT NULL,
  `ANNEE` varchar(20) NOT NULL,
  `AUTEUR` varchar(28) NOT NULL,
  `PHOTO` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`CODE`, `TITRE`, `ANNEE`, `AUTEUR`, `PHOTO`) VALUES
(4, 'MVC Framework for PHP', '2020-05-08', 'Adam Omelak', 'im2.jpg'),
(5, 'Advanced Guide to Learn the Realms of PH', '2021-01-13', 'Logan Pratt', 'patt.jpg'),
(6, 'A Beginner’s Guide', '2015-03-02', 'Vikram Vaswani', 'guide.jpg'),
(8, 'A Beginner’s Guide', '2015-03-05', 'Vikram Vaswani', 'guide.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `LOGIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `NIVEAU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`LOGIN`, `PASSWORD`, `NIVEAU`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`CIN`);

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`LOGIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
