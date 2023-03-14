-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2021 at 09:11 AM
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
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_discription` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_discription`, `created`) VALUES
(1, 'python', 'Python is an interpreted high-level general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant indentation.', '2021-08-04 20:17:09'),
(2, 'java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2021-08-04 20:18:30'),
(3, 'javascript', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-or', '2021-08-04 20:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(10) NOT NULL,
  `comment_by` int(10) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(33, 'python is scripting as well as scripting language.', 18, 12, '2021-08-12 10:46:12'),
(34, 'ha bhai video tho banna chahiye.', 19, 11, '2021-08-12 16:33:49'),
(36, 'collection is like a bundle of interfaces and class.', 21, 9, '2021-08-14 13:50:23'),
(37, 'bhai collection bahut asan hai durga sir ka video dek lo.', 22, 12, '2021-08-15 17:51:57'),
(38, 'computer is an electronic device which take input procesing the input and generate output accordinlgy.', 23, 16, '2021-08-16 16:40:11'),
(39, 'From the forest of his matted lock, water flows and wets his neck,\r\nOn which hangs the greatest of snake-like a garland,\r\nAnd his drum incessantly plays damat, damat, damat, damat,\r\nAnd Shiva is engaged in the very vigorous manly dance,\r\nTo bless and shower, prosperity on all of us.\r\nFrom the forest of his matted lock, water flows and wets his neck,\r\nOn which hangs the greatest of snake-like a garland,\r\nAnd his drum incessantly plays damat, damat, damat, damat,\r\nAnd Shiva is engaged in the very vigorous manly dance,\r\nTo bless and shower, prosperity on all of us.\r\nFrom the forest of his matted lock, water flows and wets his neck,\r\nOn which hangs the greatest of snake-like a garland,\r\nAnd his drum incessantly plays damat, damat, damat, damat,\r\nAnd Shiva is engaged in the very vigorous manly dance,\r\nTo bless and shower, prosperity on all of us.', 24, 11, '2021-08-17 11:07:05'),
(40, 'Encapsulation is one of the pilar of javahgdfhgwedguyguighweuighduytguidqwa.', 25, 9, '2021-08-17 21:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(18, 'what is python?', ' pls define it properly. ', 1, 10, '2021-08-12 10:44:37'),
(19, 'bhai java mein video banao', ' ha bhai pls banaho  ', 2, 9, '2021-08-12 16:32:16'),
(21, 'what is collection in java?', ' please response me as soon as possible ', 2, 13, '2021-08-14 13:48:03'),
(22, 'bhai muje collection mein problem ho rahi hai', ' pls solution do bhai ', 2, 14, '2021-08-15 17:49:33'),
(23, 'What is computer?', ' Please give me answer as soon as possile .i m waiting for your ansewer. ', 2, 15, '2021-08-16 16:35:59'),
(24, 'go to university', ' From the forest of his matted lock, water flows and wets his neck,\r\nOn which hangs the greatest of snake-like a garland,\r\nAnd his drum incessantly plays damat, damat, damat, damat,\r\nAnd Shiva is engaged in the very vigorous manly dance,\r\nTo bless and shower, prosperity on all of us. ', 3, 11, '2021-08-17 11:06:41'),
(25, 'what is encapsulation?', ' please give me answer asap. ', 2, 17, '2021-08-17 21:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileNo` bigint(12) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `email`, `mobileNo`, `date`) VALUES
(9, 'subham', '$2y$10$bija060kJu2ZmF/G5nPROOOUWMTlYvfb5maSxdzr.UWKuJbhsVTJa', 's@gmail.com', 9988772233, '2021-08-12 10:41:43'),
(10, 'admin', '$2y$10$6leAZcUtI516mF7g47q.4eCTtzA4wILXvpCMv2qLbq9qyAjy.dvh.', 'a@gmail.com', 3445456, '2021-08-12 10:42:21'),
(11, 'sittu', '$2y$10$o/Y/uRkdFzv8BT2liveU3ec2Yn5Aln9j07CEAwEgJq/kardz3ckSG', 'soni@gmail.com', 993254455, '2021-08-12 10:43:05'),
(12, 'bittu', '$2y$10$ffI9uWjxGu2pGRfurL.cweSf3q3lokd2zF.dOG/OtdHx3Vp3BBO4S', 'dcds@gmail.com', 923445456, '2021-08-12 10:43:29'),
(13, 'sonu gorain', '$2y$10$ydrKK5AGDc4mPtF.s/5OdubeaLF.N9gz2Wi7jyPjMwg9.F8xK9r0a', 's@gmail.com', 99887743321, '2021-08-14 13:45:52'),
(14, 'chhitu', '$2y$10$huLDWlpNkAwrltS09509Ku3YlPyZm5o0CB/RD/0VPJZCiHhXZLCIi', 'k@gmail.com', 9977332264, '2021-08-15 17:47:00'),
(15, 'aakarsh arya', '$2y$10$2XjzxriK4l4VDu3l5bPlVek3BryD/SCAqce2YAKpLZgWyLCmoB.KS', 'aakarsharya@gmail.com', 797998345, '2021-08-16 16:32:57'),
(16, 'kuku', '$2y$10$4YwK52j17Jp/9nnYR//yi.xaT9y/eeBgWsJq4CgCVq8TteBP0wFlO', 'kuku@gmail.com', 80543210, '2021-08-16 16:38:06'),
(17, 'santosh', '$2y$10$8RrLOf59tYz2nUwcSo8hAeQeYLbkp6pKVUy9VwxLxSBHA3Gix.Zcy', 's@gmail.com', 987654321, '2021-08-17 21:00:37'),
(18, 'admin2', '$2y$10$8LvCIxG1oV.D/sDBlKOjYuz3xhkSU/7ZBex1.kmj16VPK4wdsId7O', 'a2@gmail.com', 9872000123, '2021-09-14 12:22:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
