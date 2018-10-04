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
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `postImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `postImage`) VALUES
(18, 'f', 'dsf', 'sdfg', '1970-01-01 01:00:00', 'DSC08566.jpg'),
(19, 'f', 'dsf', 'sdfg', '2018-10-03 18:57:45', 'DSC08566.jpg'),
(20, 'dsfg', 'sdfg', 'sdfgfd', '2018-10-03 18:59:39', '17901852_1451908914852199_370306731_o.jpg'),
(21, 'sfgs', 'dfgsdf', 'gsdfg', '2018-10-03 19:26:03', '41450075_1042679299226970_4846440121848823808_o.jpg'),
(22, 'sdfg', 'sdfg', 'fdsg', '2018-10-03 19:26:48', '41543089_758241867840920_8770770212858363904_o.jpg'),
(23, 'dsfgsd', 'sdfg', 'sdfg', '2018-10-04 17:35:29', '40464788_10157147880806323_5115781201767956480_n.jpg'),
(24, 'fsg', 'dfgsdfgsdfsfsdgsdfgsdfgsdfgsdfgsdfgsdfgssfsdgsdfgsdfgsdfgsdfgsdfgsdfgssfsdgsdfgsdfgsdfgsdfgsdfgsdfgssfsdgsdfgsdfgsdfgsdfgsdfgsdfgssfsdgsdfgsdfgsdfgsdfgsdfgsdfgs', 'sfsdgsdfgsdfgsdfgsdfgsdfgsdfgs', '2018-10-04 17:36:51', '40464788_10157147880806323_5115781201767956480_n.jpg'),
(25, 'fgsdf', '        sdf', 'fgsdf', '2018-10-04 19:44:51', '40464788_10157147880806323_5115781201767956480_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
