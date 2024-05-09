-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camellia`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates_result`
--

CREATE TABLE `candidates_result` (
  `candidate_national_id` int(11) NOT NULL,
  `first_name` varchar(34) NOT NULL,
  `last_name` varchar(54) NOT NULL,
  `gender` varchar(43) NOT NULL,
  `date_of_birth` varchar(34) NOT NULL,
  `post_id` int(11) NOT NULL,
  `exam_date` varchar(54) NOT NULL,
  `phone_number` varchar(54) NOT NULL,
  `marks` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates_result`
--

INSERT INTO `candidates_result` (`candidate_national_id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `post_id`, `exam_date`, `phone_number`, `marks`) VALUES
(1, 'gedeon', 'ndahiriwe', 'M', '2004-07-09', 6, '2024-04-23', '0788888888', '14'),
(3, 'timee', 'niwe', '', '2024-04-03', 6, '2024-04-16', '0784756487', '45');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`) VALUES
(8, 'barman'),
(10, 'chef'),
(11, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(43) NOT NULL,
  `password` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(1, 'gedeon', '123'),
(2, 'Manzi', '321'),
(3, 'Papy', '132'),
(4, 'manzi', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates_result`
--
ALTER TABLE `candidates_result`
  ADD PRIMARY KEY (`candidate_national_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates_result`
--
ALTER TABLE `candidates_result`
  MODIFY `candidate_national_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates_result`
--
ALTER TABLE `candidates_result`
  ADD CONSTRAINT `candidates_result_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
