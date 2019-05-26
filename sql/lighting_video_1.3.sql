-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 26, 2019 at 06:43 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lighting_video`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ac_id` int(20) NOT NULL,
  `ac_name` varchar(30) NOT NULL,
  `ac_password` varchar(20) NOT NULL,
  `ac_age` int(3) NOT NULL,
  `ac_phone` varchar(33) NOT NULL,
  `ac_email` varchar(30) NOT NULL,
  `ac_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ac_id`, `ac_name`, `ac_password`, `ac_age`, `ac_phone`, `ac_email`, `ac_type`) VALUES
(1, 'Jason', '123123', 21, '13938473492', 'z71x10@163.com', '1'),
(7, 'Carl', '123', 20, '1456789642', 'carl@123.com', '1'),
(8, 'Admin', '123', 20, '15678912456', '361@11.com', '2'),
(15, 'Fitch', '123123', 20, '14567956121', 'Fithc@123.com', '1'),
(16, 'Jay', '123123', 20, '15968956478', 'jay@123.com', '1'),
(17, 'Jamie', '123123', 20, '14562478962', 'jamie@123.com', '1'),
(18, 'nmd', 'nmd', 0, '', '100@qq.com', '1'),
(20, 'fitch', '123', 111, '111', '11@qq.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_day`
--

CREATE TABLE `admin_day` (
  `date` date NOT NULL,
  `popularity` varchar(11) NOT NULL,
  `upload` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin_pop`
--

CREATE TABLE `admin_pop` (
  `vd_id` varchar(22) NOT NULL,
  `vd_name` text NOT NULL,
  `popularity` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `an_id` int(20) NOT NULL,
  `an_name` varchar(30) NOT NULL,
  `an_contents` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`an_id`, `an_name`, `an_contents`) VALUES
(1, 'Upload', 'If you want to upload, please login first'),
(2, 'Login', 'Please check your information before login and upload'),
(3, 'Time', 'Lighting Video will meet you on may 10th'),
(4, 'Security', 'Please abide by the rules consciously');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `bg_id` int(20) NOT NULL,
  `bg_title` text CHARACTER SET utf8 COLLATE utf8_bin,
  `bg_date` date DEFAULT NULL,
  `bg_contents` text,
  `ac_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`bg_id`, `bg_title`, `bg_date`, `bg_contents`, `ac_id`) VALUES
(7, ' Jay', '2019-04-30', 'this is a test', 7),
(8, 'Class', '2019-05-10', 'This is EAD class', 7),
(9, 'Test', '2019-05-16', 'This is a bug of blog', 1),
(10, 'Bug', '2019-05-16', 'Other user can not change blog', 1),
(11, 'Test', '2019-05-16', 'Testing other user can change Blog', 16),
(12, 'Testing', '2019-05-16', 'Testing page function', 8),
(13, 'Class', '2019-05-16', 'Fitch is a dog', 8),
(14, 'Hello Lighting Video!', '2019-05-17', 'I am Jason, and u?', 1),
(16, '1231', '2019-05-20', '13213', 20);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cm_id` int(20) NOT NULL,
  `cm_name` varchar(30) NOT NULL,
  `cm_contents` text NOT NULL,
  `vd_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cm_id`, `cm_name`, `cm_contents`, `vd_id`) VALUES
(1, 'Wow', 'Wow, awesome! This music is incredible.', 27),
(2, '111', 'nice啊', 28),
(3, 'Jason', 'It sounds so good. I feel home.', 28),
(4, 'Wow', 'love this song 3000!', 28),
(5, 'Amazing!', 'That is a big 3-point！Obviously, KD is a top shooter in NBA history.', 29),
(6, 'Comment', 'I also like this ', 28);

-- --------------------------------------------------------

--
-- Table structure for table `popularity`
--

CREATE TABLE `popularity` (
  `pop_id` int(11) NOT NULL,
  `pop_time` datetime NOT NULL,
  `vd_id` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `popularity`
--

INSERT INTO `popularity` (`pop_id`, `pop_time`, `vd_id`) VALUES
(3, '2019-05-24 04:22:44', '190524042244'),
(4, '2019-05-24 04:24:05', '190524042405'),
(5, '2019-05-24 04:24:21', '190524042421'),
(6, '2019-05-24 04:24:34', '190524042434'),
(7, '2019-05-24 04:24:47', '190524042447'),
(8, '2019-05-24 04:25:07', '190524042507'),
(9, '2019-05-24 04:25:35', '190524042535'),
(10, '2019-05-24 04:26:04', '190524042604'),
(11, '2019-05-24 04:27:34', '190524042244'),
(12, '2019-05-24 04:27:36', '190524042244'),
(13, '2019-05-24 04:27:36', '190524042244'),
(14, '2019-05-24 04:27:36', '190524042244'),
(15, '2019-05-24 04:27:36', '190524042244'),
(16, '2019-05-24 04:27:36', '190524042244'),
(17, '2019-05-24 04:27:37', '190524042244'),
(18, '2019-05-24 04:27:37', '190524042244'),
(19, '2019-05-24 04:27:37', '190524042244'),
(20, '2019-05-24 04:27:37', '190524042244'),
(21, '2019-05-24 04:27:37', '190524042244'),
(22, '2019-05-24 04:27:37', '190524042244'),
(23, '2019-05-24 04:27:37', '190524042244'),
(24, '2019-05-24 04:27:38', '190524042244'),
(25, '2019-05-24 04:27:38', '190524042244'),
(26, '2019-05-24 04:27:42', '190524042447'),
(27, '2019-05-24 04:27:43', '190524042447'),
(28, '2019-05-24 04:27:43', '190524042447'),
(29, '2019-05-24 04:27:43', '190524042447'),
(30, '2019-05-24 04:27:43', '190524042447'),
(31, '2019-05-24 04:27:43', '190524042447'),
(32, '2019-05-24 04:27:43', '190524042447'),
(33, '2019-05-24 04:27:44', '190524042447'),
(34, '2019-05-24 04:27:44', '190524042447'),
(35, '2019-05-24 04:27:44', '190524042447'),
(36, '2019-05-24 04:27:44', '190524042447'),
(37, '2019-05-24 04:27:44', '190524042447'),
(38, '2019-05-24 04:27:44', '190524042447'),
(39, '2019-05-24 04:27:44', '190524042447'),
(40, '2019-05-24 04:27:45', '190524042447'),
(41, '2019-05-24 04:27:45', '190524042447'),
(42, '2019-05-24 04:27:45', '190524042447'),
(43, '2019-05-24 04:27:47', '190524042421'),
(44, '2019-05-24 04:27:48', '190524042421'),
(45, '2019-05-24 04:27:48', '190524042421'),
(46, '2019-05-24 04:27:48', '190524042421'),
(47, '2019-05-24 04:27:48', '190524042421'),
(48, '2019-05-24 04:27:48', '190524042421'),
(49, '2019-05-24 04:27:49', '190524042421'),
(50, '2019-05-24 04:27:50', '190524042604'),
(51, '2019-05-24 04:27:50', '190524042604'),
(52, '2019-05-24 04:27:51', '190524042604'),
(53, '2019-05-24 04:27:51', '190524042604'),
(54, '2019-05-24 04:27:51', '190524042604'),
(55, '2019-05-24 04:27:53', '190524042535'),
(56, '2019-05-24 04:27:53', '190524042535'),
(57, '2019-05-24 04:27:53', '190524042535'),
(58, '2019-05-24 04:27:53', '190524042535'),
(59, '2019-05-24 04:27:53', '190524042535'),
(60, '2019-05-24 04:27:54', '190524042535'),
(61, '2019-05-24 04:27:54', '190524042535'),
(62, '2019-05-24 04:27:54', '190524042535'),
(63, '2019-05-24 04:27:55', '190524042507'),
(64, '2019-05-24 04:27:55', '190524042507'),
(65, '2019-05-24 04:27:55', '190524042507'),
(66, '2019-05-24 04:27:55', '190524042507'),
(67, '2019-05-24 04:27:56', '190524042507'),
(68, '2019-05-24 04:27:56', '190524042507'),
(69, '2019-05-24 04:27:56', '190524042507'),
(70, '2019-05-24 04:27:56', '190524042507');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vd_id` varchar(18) NOT NULL,
  `vd_name` varchar(30) NOT NULL,
  `vd_content` text NOT NULL,
  `vd_date` datetime NOT NULL,
  `vd_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vd_id`, `vd_name`, `vd_content`, `vd_date`, `vd_file`) VALUES
('190524042244', '2018 German Grand Prix', 'The Ferrari formula driver Vettel lost his 1st position', '2019-05-24 04:22:44', '../mp4/20190524042244105.mp4'),
('190524042405', 'Song 1', 'This is a song', '2019-05-24 04:24:05', '../mp4/20190524042405775.mp4'),
('190524042421', 'Sandra', 'This is a girl who played the Ukulele.', '2019-05-24 04:24:21', '../mp4/20190524042421221.mp4'),
('190524042434', 'Game', 'This is a game called Polybridge. I think that it is very good to practice your IQ and Architecture!', '2019-05-24 04:24:34', '../mp4/20190524042434534.mp4'),
('190524042447', 'NBA', 'This is NBA', '2019-05-24 04:24:47', '../mp4/20190524042447647.mp4'),
('190524042507', 'Hurrcan', 'This is a car called hurrcan which drive too fast and it is over speed.', '2019-05-24 04:25:07', '../mp4/20190524042507673.mp4'),
('190524042535', 'FIA GTC', 'This is FiA GTC', '2019-05-24 04:25:35', '../mp4/20190524042535407.mp4'),
('190524042604', 'Dangerous driving', 'This is an closed accident', '2019-05-24 04:26:04', '../mp4/20190524042604141.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `vip`
--

CREATE TABLE `vip` (
  `vip_id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin_pop`
--
ALTER TABLE `admin_pop`
  ADD UNIQUE KEY `vd_id` (`vd_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `popularity`
--
ALTER TABLE `popularity`
  ADD PRIMARY KEY (`pop_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vd_id`);

--
-- Indexes for table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`vip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `an_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `popularity`
--
ALTER TABLE `popularity`
  MODIFY `pop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `vip`
--
ALTER TABLE `vip`
  MODIFY `vip_id` int(11) NOT NULL AUTO_INCREMENT;
