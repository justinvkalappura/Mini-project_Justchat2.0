-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `i_id` int(10) NOT NULL,
  `u_email` varchar(25) NOT NULL,
  `u_pwd` varchar(25) NOT NULL,
  `role` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`i_id`, `u_email`, `u_pwd`, `role`, `status`) VALUES
(6, 'admin@gmail.com', 'Admin@1234', 1, 0),
(7, 'justin@gmail.com', 'Justin@1234', 0, 0),
(8, 'bbc@gmail.com', 'Bbc@1234', 2, 0),
(10, 'keerthanadinesh@gmail.com', 'Kee@123', 0, 0),
(11, 'jackson@gmail.com', 'Jackson@1234', 0, 0),
(12, 'jackson@gmail.com', 'Jackson@1234', 0, 0),
(13, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(14, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(15, 'manorama@gmaiil.com', 'Manorama@1234', 2, 0),
(16, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(17, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(18, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(19, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(20, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(21, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(22, 'joel@gmail.com', 'Joel@1234', 0, 0),
(23, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(24, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(25, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(26, 'janet@gmail.com', 'Janet@1234', 0, 0),
(27, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(28, 'manorama@gmail.com', 'Manorama@1234', 2, 0),
(29, 'manorama@gmail.com', 'Manorama@1234', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newshead_table`
--

CREATE TABLE `newshead_table` (
  `i_id` int(10) NOT NULL,
  `n_company` text NOT NULL,
  `u_email` varchar(25) NOT NULL,
  `u_pwd` varchar(25) NOT NULL,
  `n_ln` varchar(25) NOT NULL,
  `n_pic` varchar(25) NOT NULL,
  `n_role` int(10) NOT NULL,
  `n_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newshead_table`
--

INSERT INTO `newshead_table` (`i_id`, `n_company`, `u_email`, `u_pwd`, `n_ln`, `n_pic`, `n_role`, `n_status`) VALUES
(1, 'BBC', 'bbc@gmail.com', 'Bbc@1234', '123456', '123.webp', 2, 0),
(3, 'manorama', 'manorama@gmail.com', 'Manorama@1234', '7654321987', 'maxresdefault.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

CREATE TABLE `news_feed` (
  `i_id` int(10) NOT NULL,
  `news_feed` varchar(25) NOT NULL,
  `news_desc` varchar(150) NOT NULL,
  `post_time` time NOT NULL,
  `post_date` varchar(30) NOT NULL,
  `post_id` varchar(25) NOT NULL,
  `news_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`i_id`, `news_feed`, `news_desc`, `post_time`, `post_date`, `post_id`, `news_pic`) VALUES
(1, 'n1.webp', 'Pan card registeration?', '02:58:52', '05-11-2022', 'BBC ', '123.webp'),
(5, 'n2.jpg', 'Stand with salman', '08:43:04', '06-11-2022', 'manorama', 'maxresdefault.jpg'),
(7, 'PXL_2022.jpg', 'Beautiful sky?', '10:05:58', '06-11-2022', 'BBC', '123.webp'),
(8, '_MG_0031.JPG', 'Dark is better thn ggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhccccccccccccccccccccccccccccccccccccccccccccccccccccccccckkkkkkkkkkkk', '11:13:57', '07-11-2022', 'manorama', 'maxresdefault.jpg'),
(9, 'IMG-20211228-WA0154.jpg', 'family time', '11:40:48', '07-11-2022', 'BBC', '123.webp');

-- --------------------------------------------------------

--
-- Table structure for table `post_feed`
--

CREATE TABLE `post_feed` (
  `i_id` int(10) NOT NULL,
  `post_pic` varchar(25) NOT NULL,
  `post_desc` varchar(150) NOT NULL,
  `post_time` time NOT NULL,
  `post_date` varchar(30) NOT NULL,
  `post_id` varchar(25) NOT NULL,
  `user_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_feed`
--

INSERT INTO `post_feed` (`i_id`, `post_pic`, `post_desc`, `post_time`, `post_date`, `post_id`, `user_pic`) VALUES
(1, '1.jpg', 'World is so beautiful', '02:55:03', '05-11-2022', 'Justin v Kalappura', 'IMG_6174.JPG'),
(2, 'background.jpg', 'Everything depends on how', '02:55:46', '05-11-2022', 'Jackson Kalappura', '_MG_0031.JPG'),
(3, 'n4.webp', 'Always with you', '12:32:10', '06-11-2022', 'Justin v Kalappura', 'IMG_6174.JPG'),
(4, 'coffee.webp', 'coffee time', '03:06:15', '06-11-2022', 'janet celinevarghese', 'n2.jpg'),
(5, 'food.webp', 'Healthy life means healthy diet', '03:15:43', '06-11-2022', 'janet celinevarghese', 'n2.jpg'),
(7, '2.png', 'Be happy always', '07:02:16', '06-11-2022', 'Keerthana Dinesh A', '20211223_130238.jpg'),
(8, 'IMG-20211228-WA0154.jpg', 'family time', '11:39:49', '07-11-2022', 'Justin v Kalappura', 'IMG_6174.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `i_id` int(10) NOT NULL,
  `u_firstname` text NOT NULL,
  `u_lastname` text NOT NULL,
  `u_email` varchar(25) NOT NULL,
  `u_pwd` varchar(25) NOT NULL,
  `u_city` text NOT NULL,
  `u_contact` int(20) NOT NULL,
  `u_pic` varchar(25) NOT NULL,
  `u_role` int(10) NOT NULL,
  `u_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`i_id`, `u_firstname`, `u_lastname`, `u_email`, `u_pwd`, `u_city`, `u_contact`, `u_pic`, `u_role`, `u_status`) VALUES
(4, 'admin', 'only', 'admin@gmail.com', 'Admin@1234', 'Cochin', 987654321, '111.jfif', 1, 0),
(5, 'Justin', 'v Kalappura', 'justin@gmail.com', 'Justin@1234', 'Cochin', 2147483647, 'IMG_6174.JPG', 0, 0),
(6, 'Keerthana', 'Dinesh A', 'keerthanadinesh@gmail.com', 'Kee@123', 'Kozhikode', 2147483647, '20211223_130238.jpg', 0, 0),
(7, 'justinj', 'ackson', 'jackson@gmail.com', 'Jackson@1234', 'palarivattom', 2147483647, 'IMG-20211228-WA0154.jpg', 0, 0),
(8, 'Jackson', 'Kalappura', 'jackson@gmail.com', 'Jackson@1234', 'cochin', 2147483647, '_MG_0031.JPG', 0, 0),
(9, 'Joel', 'johnjoseph', 'joel@gmail.com', 'Joel@1234', 'kottayam', 2147483647, 'PXL_2022.jpg', 0, 0),
(10, 'janet', 'celinevarghese', 'janet@gmail.com', 'Janet@1234', 'pala', 2147483647, 'n2.jpg', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `newshead_table`
--
ALTER TABLE `newshead_table`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `news_feed`
--
ALTER TABLE `news_feed`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `post_feed`
--
ALTER TABLE `post_feed`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newshead_table`
--
ALTER TABLE `newshead_table`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_feed`
--
ALTER TABLE `news_feed`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_feed`
--
ALTER TABLE `post_feed`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
