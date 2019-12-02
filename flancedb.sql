-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 02, 2019 at 01:49 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `flancers`
--

CREATE TABLE `flancers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flancetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `recommendations` int(11) NOT NULL,
  `pricelow` int(11) NOT NULL,
  `pricehigh` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `jobs` int(11) NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `worktypeabbr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worktype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image-big` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flancers`
--

INSERT INTO `flancers` (`id`, `firstname`, `lastname`, `flancetype`, `location`, `recommendations`, `pricelow`, `pricehigh`, `age`, `jobs`, `bio`, `worktypeabbr`, `worktype`, `image`, `image-big`) VALUES
(1, 'Johanna', 'Wils', 'UX designer', 5, 7, 500, 1500, 23, 6, 'Johanna is a UX designer who recently graduated from Devine Howest in Kortrijk. At this school Johanna learnt pretty much everything from Design to Development but she did like the design side more than coding.\r\n', 'pt', 'part-time', 'johanna.jpg', 'johanna-big.jpg'),
(2, 'Wannes', 'Deroo', 'UX designer and Front-end Developer', 10, 20, 1000, 3000, 32, 27, 'Wannes had worked at a design firm for about 7 years when he decided to go for the freelance path. He is very skilled and experienced in UX design.', 'fh', 'from home', 'wannes.jpg', 'wannes-big.jpg'),
(3, 'Dirk', 'Janssen', 'UX and Motion designer', 20, 12, 200, 1500, 28, 18, 'After graduating from graphical design at Artevelde in Gent, Dirk started promoting his work on Instagram. He makes websites with a beautiful sense of depth and is a huge fan of the parallax effect.', 'FT', 'fulltime', 'dirk.jpg', 'dirk-big.jpg'),
(4, 'Klaas', 'Vanassche', 'Logo designer', 50, 12, 50, 500, 23, 12, 'Ever since Klaas could work with Adobe Illustrator he made artwork for friends and family. He wanted to make this hobby his job and so he did. He has made logos for some big companies and they were very happy with the result.\r\n', 'fh', 'from home', 'klaas.jpg', 'klaas-big.jpg'),
(5, 'Anne', 'Koolmans', 'UX designer', 20, 4, 300, 1000, 24, 3, 'Anne is quite new to the flancing scene with only three jobs completed so far, but wow, they are very impressive. Anne designed websites for 2 big Belgian companies with zero problems encountered.', 'fh', 'from home', 'anne.jpg', 'anne-big.jpg'),
(6, 'Tjorven', 'Jonckheere', 'Front-end developer and Back-end developer', 5, 15, 2000, 4000, 47, 20, 'Tjorven has completed a lot of jobs for Flance. He is a backend developer that has been freelancing for quite some time. He prefers fulltime flancing which means that he works at a company until his job is complete.', 'ft', 'fulltime', 'placeholder.jpg', 'placeholder-big.svg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `jobname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flancers`
--
ALTER TABLE `flancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flancers`
--
ALTER TABLE `flancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
