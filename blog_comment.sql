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
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id_comment` int(255) NOT NULL,
  `comment_username` varchar(255) NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id_comment`, `comment_username`, `comment_date`, `comment`, `id`, `id_member`) VALUES
(11, 'lopas', '', 'fdgsdf', 71, 10),
(10, 'pzdc', '', 'fgsdfg', 75, 3),
(10, 'pzdc', '', 'dfgdsfg', 76, 3),
(11, 'pzdc', '', 'sdfgsdf', 77, 3),
(20, 'pzdc', '', 'fgsd', 78, 3),
(20, 'pzdc', '', 'sdfgsdf', 79, 3),
(20, 'pzdc', '', 'sfdg', 80, 3),
(20, 'pzdc', '', 'sdfg', 81, 3),
(18, 'pzdc', '', 'ssfdg', 82, 3),
(18, 'pzdc', '', 'gsdf', 83, 3),
(19, 'pzdc', '', 'fgsdfg', 84, 3),
(19, 'pzdc', '', 'dfsg', 85, 3),
(19, 'pzdc', '', 'sdfgsdf', 86, 3),
(19, 'pzdc', '', 'fdgsdf', 87, 3),
(19, 'pzdc', '', 'sdfg', 88, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
