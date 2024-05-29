-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 07:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity_in_stock` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id`, `title`, `author`, `genre`, `publication_year`, `description`, `price`, `quantity_in_stock`, `publisher`, `created_at`, `updated_at`) VALUES
(6, 'Manga 6', 'Autor 6', 'Gênero 6', 2005, 'Descrição do Manga 6', 11.99, 80, 'Editora 6', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(7, 'Manga 7', 'Autor 7', 'Gênero 7', 2006, 'Descrição do Manga 7', 13.99, 90, 'Editora 7', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(8, 'Manga 8', 'Autor 8', 'Gênero 8', 2007, 'Descrição do Manga 8', 16.99, 100, 'Editora 8', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(9, 'Manga 9', 'Autor 9', 'Gênero 9', 2008, 'Descrição do Manga 9', 8.99, 110, 'Editora 9', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(10, 'Manga 10', 'Autor 10', 'Gênero 10', 2009, 'Descrição do Manga 10', 17.99, 120, 'Editora 10', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(11, 'Manga 11', 'Autor 11', 'Gênero 11', 2010, 'Descrição do Manga 11', 7.99, 130, 'Editora 11', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(12, 'Manga 12', 'Autor 12', 'Gênero 12', 2011, 'Descrição do Manga 12', 18.99, 140, 'Editora 12', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(13, 'Manga 13', 'Autor 13', 'Gênero 13', 2012, 'Descrição do Manga 13', 6.99, 150, 'Editora 13', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(14, 'Manga 14', 'Autor 14', 'Gênero 14', 2013, 'Descrição do Manga 14', 19.99, 160, 'Editora 14', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(15, 'Manga 15', 'Autor 15', 'Gênero 15', 2014, 'Descrição do Manga 15', 5.99, 170, 'Editora 15', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(16, 'Manga 16', 'Autor 16', 'Gênero 16', 2015, 'Descrição do Manga 16', 20.99, 180, 'Editora 16', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(17, 'Manga 17', 'Autor 17', 'Gênero 17', 2016, 'Descrição do Manga 17', 4.99, 190, 'Editora 17', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(18, 'Manga 18', 'Autor 18', 'Gênero 18', 2017, 'Descrição do Manga 18', 21.99, 200, 'Editora 18', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(19, 'Manga 19', 'Autor 19', 'Gênero 19', 2018, 'Descrição do Manga 19', 3.99, 210, 'Editora 19', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(20, 'Manga 20', 'Autor 20', 'Gênero 20', 2019, 'Descrição do Manga 20', 22.99, 220, 'Editora 20', '2024-04-23 22:26:32', '2024-04-23 22:26:32'),
(25, 'Terceiro 15', 'Autor 1', 'Gênero 1', 2000, 'Descrição do Manga 1', 10.99, 50, 'AMAZON', '2024-04-24 10:34:51', '2024-04-24 10:34:51'),
(26, 'Terceiro 15', 'Autor 1', 'Gênero 1', 2000, 'Descrição do Manga 1', 10.99, 50, 'AMAZON', '2024-04-24 10:35:36', '2024-04-24 10:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass_hash` varchar(255) NOT NULL,
  `superUser` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass_hash`, `superUser`) VALUES
(1, 'exemplo', 'zatch73@duck.com', '03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
