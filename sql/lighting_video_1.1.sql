-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 23, 2019 at 11:06 AM
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
  `vd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `popularity`
--

INSERT INTO `popularity` (`pop_id`, `pop_time`, `vd_id`) VALUES
(1, '2019-05-23 13:28:14', 33),
(2, '2019-05-23 13:28:14', 32),
(3, '2019-05-23 13:28:14', 25),
(4, '2019-05-23 13:28:14', 28),
(5, '2019-05-23 11:03:48', 36),
(6, '2019-05-23 11:03:50', 36),
(7, '2019-05-23 11:03:52', 32),
(8, '2019-05-23 11:03:54', 32),
(9, '2019-05-23 11:04:12', 32);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vd_id` int(20) NOT NULL,
  `vd_name` varchar(30) NOT NULL,
  `vd_content` text NOT NULL,
  `vd_date` date NOT NULL,
  `vd_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vd_id`, `vd_name`, `vd_content`, `vd_date`, `vd_file`) VALUES
(20, '2018 German Grand Prix', 'The Ferrari formula driver Vettel lost his 1st position', '2019-05-17', '../mp4/20190517003211299.mp4'),
(21, 'Game', 'This is a game called Polybridge. I think that it is very good to practice your IQ and Architecture!', '2019-05-17', '../mp4/20190517003440458.mp4'),
(22, 'Ukulele', 'This is a girl who played the Ukulele.', '2019-05-17', '../mp4/20190517003523491.mp4'),
(23, 'Hurrcan', 'This is a car called hurrcan which drive too fast and it is over speed.', '2019-05-17', '../mp4/20190517003608535.mp4'),
(24, 'Win the FIA GTC', 'This is a game called Gran Turismo Sport and I get the 1st position!', '2019-05-17', '../mp4/20190517003721648.mp4'),
(25, 'Dangerous driving', 'This is a very closed accident I have ever met. Please guys must drive safety in street!', '2019-05-17', '../mp4/20190517003822447.mp4'),
(28, 'Music-five hundred miles', 'a music video', '2019-05-20', '../mp4/20190520185620663.mp4'),
(29, 'Durant', 'The god of death', '2019-05-20', '../mp4/20190520193753513.mp4'),
(32, 'CXK', 'This is a famous star which come from NBA image ambassador', '2019-05-20', '../mp4/20190520195857650.mov'),
(33, 'Westlife', 'This is a good music video', '2019-05-20', '../mp4/20190520200340431.mp4'),
(36, 'IP man joins Marvel', 'IP man confirms to join marvel universe! Put on a quantum suit and fight with the avengers.', '2019-05-20', '../mp4/20190520205708415.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ac_id`);

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
  MODIFY `pop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vd_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
