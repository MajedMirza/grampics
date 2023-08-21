-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 05:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grampics`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileImage` varchar(255) NOT NULL DEFAULT 'public\\profileImage\\default-user.png',
  `bio` text NOT NULL,
  `pri_ip` varchar(255) NOT NULL,
  `pri_os` varchar(255) NOT NULL,
  `pri_browser` varchar(255) NOT NULL,
  `signup` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `fullName`, `email`, `password`, `profileImage`, `bio`, `pri_ip`, `pri_os`, `pri_browser`, `signup`) VALUES
(5, 'meimei', 'mei', 'itsmayud@gmail.com', '$2y$10$o5tPH017ZDXN64qie/8ZEuQHGslKFRosNW3amskeUv1Tk0T3lOTb6', 'public\\profileImage\\default-user.png', '', '::1', 'Windows 10', 'Chrome', '2023-08-21 03:17:52'),
(6, 'esmeimei', 'Esmei', 'billypogi15@gmail.com', '$2y$10$V4I1tcIsQQXbOIQJjzr3meg2FhhhnRmBMV3exVUxJxwpi.H7qpuVW', 'public\\profileImage\\default-user.png', '', '::1', 'Windows 10', 'Chrome', '2023-08-21 07:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
