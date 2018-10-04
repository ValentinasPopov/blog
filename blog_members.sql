-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mano_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'standart'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`, `roles`) VALUES
(1, 'dfg', 'sdfg', 'sfdg', 'standart'),
(2, 'ka', 'ka', 'ka', 'standart'),
(3, 'pzdc', 'pzdc', 'pzdc', 'admin'),
(4, 'pzdc', 'pzdc', 'pzdc', 'standart'),
(5, 'pzdc', 'pzdc', 'pzdc@gmail.com', 'standart'),
(6, 'pzdc', 'pzdc', 'pzdc', 'standart'),
(7, 'pzdc', 'pzdc', 'pzdc', 'standart'),
(8, 'gfh', 'h', 'hdfg', 'standart'),
(9, 'pzdc', 'pzdc', 'pzdc', 'standart'),
(10, 'lopas', 'lopas', 'lopas', 'admin'),
(11, 'valentinas', 'vale@gmail.com', 'valentinas', 'standart'),
(12, 'asd', 'asd', 'asd', 'standart'),
(13, 'gsdfgs', 'dfgsd', 'sdfgfsd', 'standart'),
(14, 'sdfgdf', '$2y$10$MDBSIHB6Fd5z1DD.ty9GI.bOwEcIwWUJEihkCkbnY/bgdwxgM7spC', 'sdfg', 'standart'),
(15, 'suka', '$2y$10$icbPew7rkPWibe1pLIGHse5iVtyyzs3f7MU8f3jBGFXDS7ZfW5qty', 'suka', 'standart'),
(16, 'vale', '$2y$10$4i7JECNQFCXzzRXatdCgSOXP5d2BJrhlsD19iDKVdrnSDgb2lnVxu', 'vale', 'standart'),
(17, 'ale', NULL, 'ale', 'standart'),
(18, 'fuck', '$2y$10$d1dqnUs7xAFqL4xL0jVOWeFY9Xztr3o.oWG0nGXuBx0IALOGNMBJu', 'fuck', 'standart'),
(19, 'Duperinis', 'root', '', 'standart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
