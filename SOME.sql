-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2023 at 04:53 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SOME`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `picture_name` varchar(200) DEFAULT NULL,
  `picture_unique_id` varchar(255) DEFAULT NULL,
  `picture_description` varchar(2048) DEFAULT NULL,
  `picture_file_path` varchar(512) DEFAULT NULL,
  `picture_owner_first_name` varchar(100) DEFAULT NULL,
  `picture_owner_last_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int PRIMARY KEY,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `md5_pass` varchar(100) DEFAULT NULL,
  UNIQUE INDEX nickname_unique (nickname),
  UNIQUE INDEX email_unique (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `nickname`, `email`, `md5_pass`) VALUES
(53, 'Simen', 'Bjune-Grythe', 's', 'rawr@pp.map', '$2y$10$sJjEqeRjbnNTX25dyMAdouGF/roXb6orzJm97MJoybOM57Sr3IRZq'),
(54, 'ada', 'wada', 'wada', 'dada', '$2y$10$J/UBf2dJQTCPRz31t.ER3eJzc/GPh75j8nXgx50k5h/wIyfcYxAt6'),
(55, '', '', 'per', '', '$2y$10$GcASBhqEGwVjcoGtMGO/NuYkRPuQupMT64m7J66fMiUnvfEWYggDy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
