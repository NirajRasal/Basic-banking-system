-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 11:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tno` int(11) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `date and time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tno`, `sender`, `receiver`, `amount`, `date and time`) VALUES
(1, 'Sam', 'John', 1000, '2021-06-10 18:46:12'),
(2, 'Sam', 'Simran', 1000, '2021-06-10 19:00:28'),
(3, 'Simran', 'Akash', 500, '2021-06-11 20:05:40'),
(4, 'Miranda', 'Shubham', 10, '2021-06-13 15:01:56'),
(5, 'Sam', 'Vishal', 100, '2021-06-13 15:03:50'),
(6, 'Sam', 'Simran', 500, '2021-06-13 15:05:36'),
(7, 'John', 'Sam', 600, '2021-06-13 15:08:43'),
(8, 'Mike', 'John', 100, '2021-06-13 15:20:42'),
(9, 'John', 'Akash', 500, '2021-06-13 15:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Sam', 'Sam@email.com', 5000),
(2, 'John', 'john@email.com', 24000),
(3, 'Miranda', 'miranda@email.com', 69990),
(4, 'Simran', 'simran@email.com', 10000),
(5, 'Akash', 'akash@email.com', 46000),
(6, 'Nikita', 'nikita@email.com', 35000),
(7, 'Shubham', 'shubh@email.com', 21010),
(8, 'Vishal', 'vishal@email.com', 48100),
(9, 'Mike', 'mike@email.com', 14900),
(10, 'Neha', 'neha@email.com', 33000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
