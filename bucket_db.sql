-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 04:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucket_list`
--

CREATE TABLE `bucket_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updcated_at` datetime NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` date NOT NULL,
  `updcated_at` datetime NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updcated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `province` varchar(45) NOT NULL,
  `barangay` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `ratings` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `flag` int(11) NOT NULL,
  `updcated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `messages_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updcated_at` datetime NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(3, 'fdfd', 'fdfdfdf', 'dfdfdff@yahoo.com', '$2y$10$NwqCQl93itXkHbXGgwIL2eCunUeji8eQlrZJHN6s7qSOmUgN7c5Z2', '2023-02-08 11:32:53'),
(4, 'james', 'renegado', 'james@yahoo.com', '$2y$10$RJs8MjMAieRaJx.J.fw.kOsH6eLu10HMYTDQYWoGncQHsisgU9Sc2', '2023-02-08 11:51:00'),
(5, 'nino', 'millianes', 'nino@gmail.com', '$2y$10$8YcovE37iOgyhPB0OvHvO.rUG1yurhpoTF1hVTfGB3xjZAn.P/E6S', '2023-02-08 15:15:52'),
(6, 'marj', 'amoin', 'marj@gmail.com', '$2y$10$Wu9zm0hM2trpPf.UVh7bcuktNet6zB0baj9h7usUKOpv/po2vhw1q', '2023-02-08 20:19:43'),
(7, 'admin', 'toragsoy', 'admin@gmail.com', '$2y$10$NTdWu13KE/Cry3LvowkPseCc.wl/H/VxOwH9qNUkJOsQ3CWIvNn5O', '2023-03-06 23:18:49'),
(8, 'caroline', 'pinote', 'caroline@gmail.com', '$2y$10$ZPqUZ42FmpKq9edEhOKfQeaPUDDXg.erRG6.upVUfOhWM5XIa9Uve', '2023-04-01 15:11:24'),
(9, 'marjorie', 'amoin', 'marjorie.amoin@gmail.com', '$2y$10$Gl1qA184F3nM/Z0UJd0gKOF8EwkmvncJjgeBUcgrL5gXLMcAzX/bC', '2023-04-04 11:54:19'),
(10, 'cyd', 'pinote', 'sugamin@gmail.com', '$2y$10$Yga0zpU0kKEodAqUgRdjYOEuuMpQ1Lw5Chlchsi8tPMqWDivi6azK', '2023-04-13 16:30:18'),
(11, 'marjorie', 'amoin', 'marjorie.amoin@gmail.com', '$2y$10$XszvolKcnrBCZrNipEBd.erGclJzNYqZKE.SATD.sgQogdTgRwlFO', '2023-04-14 12:03:11'),
(12, 'marjorie', 'amoin', 'marjorie.amoin@gmail.com', '$2y$10$92maj.rEWrG/KdznqIQTLe53HMvYX8RJC8FT8VN6mos92UzyE0odO', '2023-04-14 12:04:21'),
(13, 'marjorie', 'amoin', 'james@yahoo.com', '$2y$10$YZFzn1weoSHyb.XNH5wKYOFZOA7YZVSdCYM4dQYMeF2C3LBklDBci', '2023-04-14 14:28:49'),
(14, 'marjorie', 'amoin', 'marjorie.amoin@gmail.com', '$2y$10$PCNGajYsl4FPN1fEk4Cw/.zVHuHz8isgv4.74HZ8v4mImlfFbBSPa', '2023-04-14 14:29:58'),
(15, 'patrick', 'tamboboy', 'patricklumungsod@gmail.com', '$2y$10$z8fJMwu9YIxUQIgYywkXRuON1j8jd9.5521tw4J4sGcxdAgfsNivS', '2023-04-15 20:49:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucket_list`
--
ALTER TABLE `bucket_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
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
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
