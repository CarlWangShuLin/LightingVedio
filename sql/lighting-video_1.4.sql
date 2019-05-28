-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-26 15:54:08
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ead`
--

-- --------------------------------------------------------

--
-- 表的结构 `accounts`
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
-- 转存表中的数据 `accounts`
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
-- 表的结构 `admin_day`
--

CREATE TABLE `admin_day` (
  `date` date NOT NULL,
  `popularity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin_day`
--

INSERT INTO `admin_day` (`date`, `popularity`) VALUES
('2019-05-24', 8),
('2019-05-26', 1);

-- --------------------------------------------------------

--
-- 表的结构 `admin_pop`
--

CREATE TABLE `admin_pop` (
  `vd_id` varchar(18) DEFAULT NULL,
  `date` date NOT NULL,
  `popularity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin_pop`
--

INSERT INTO `admin_pop` (`vd_id`, `date`, `popularity`) VALUES
('190524042244', '2019-05-24', 16),
('190524042405', '2019-05-24', 2),
('190524042421', '2019-05-24', 9),
('190524042434', '2019-05-24', 2),
('190524042447', '2019-05-24', 18),
('190524042507', '2019-05-24', 9),
('190524042535', '2019-05-24', 19),
('190524042604', '2019-05-24', 20),
('190526120405', '2019-05-26', 3);

-- --------------------------------------------------------

--
-- 表的结构 `announcements`
--

CREATE TABLE `announcements` (
  `an_id` int(20) NOT NULL,
  `an_name` varchar(30) NOT NULL,
  `an_contents` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `announcements`
--

INSERT INTO `announcements` (`an_id`, `an_name`, `an_contents`) VALUES
(1, 'Upload', 'If you want to upload, please login first'),
(2, 'Login', 'Please check your information before login and upload'),
(3, 'Time', 'Lighting Video will meet you on may 10th'),
(4, 'Security', 'Please abide by the rules consciously');

-- --------------------------------------------------------

--
-- 表的结构 `blogs`
--

CREATE TABLE `blogs` (
  `bg_id` int(20) NOT NULL,
  `bg_title` text CHARACTER SET utf8 COLLATE utf8_bin,
  `bg_date` date DEFAULT NULL,
  `bg_contents` text,
  `ac_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blogs`
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
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `cm_id` int(20) NOT NULL,
  `cm_name` varchar(30) NOT NULL,
  `cm_contents` text NOT NULL,
  `vd_id` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`cm_id`, `cm_name`, `cm_contents`, `vd_id`) VALUES
(1, 'Wow', 'Wow, awesome! This music is incredible.', '190524042405'),
(2, '111', 'nice', '190524042405'),
(3, 'Jason', 'It sounds so good. I feel home.', '190524042405'),
(5, 'Amazing!', 'That is a big 3-point！Obviously, KD is a top shooter in NBA history.', '190526120405'),
(6, 'Comment', 'I also like this ', '190524042405');

-- --------------------------------------------------------

--
-- 表的结构 `popularity`
--

CREATE TABLE `popularity` (
  `pop_id` int(11) NOT NULL,
  `pop_time` datetime NOT NULL,
  `vd_id` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `popularity`
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
(70, '2019-05-24 04:27:56', '190524042507'),
(71, '2019-05-26 09:40:00', '190524042604'),
(72, '2019-05-26 09:40:13', '190524042604'),
(73, '2019-05-26 11:48:57', '190524042604'),
(74, '2019-05-26 11:49:06', '190524042604'),
(75, '2019-05-26 11:49:12', '190524042604'),
(76, '2019-05-26 11:49:17', '190524042604'),
(77, '2019-05-26 11:49:30', '190524042604'),
(78, '2019-05-26 11:49:46', '190524042604'),
(79, '2019-05-26 11:49:50', '190524042604'),
(80, '2019-05-26 11:49:57', '190524042604'),
(81, '2019-05-26 11:52:14', '190524042604'),
(82, '2019-05-26 11:53:15', '190524042604'),
(83, '2019-05-26 11:53:26', '190524042604'),
(84, '2019-05-26 11:54:09', '190524042604'),
(85, '2019-05-26 11:54:43', '190524042535'),
(86, '2019-05-26 11:54:56', '190524042535'),
(87, '2019-05-26 11:55:24', '190524042535'),
(88, '2019-05-26 11:56:32', '190524042535'),
(89, '2019-05-26 11:58:27', '190524042535'),
(90, '2019-05-26 11:58:29', '190524042535'),
(91, '2019-05-26 11:58:53', '190524042535'),
(92, '2019-05-26 11:59:00', '190524042535'),
(93, '2019-05-26 11:59:31', '190524042535'),
(94, '2019-05-26 11:59:39', '190524042535'),
(95, '2019-05-26 12:01:31', '190524042434'),
(96, '2019-05-26 12:01:41', '190524042421'),
(97, '2019-05-26 12:01:48', '190524042405'),
(98, '2019-05-26 12:04:05', '190526120405'),
(99, '2019-05-26 12:04:08', '190526120405'),
(100, '2019-05-26 12:04:38', '190526120405');

-- --------------------------------------------------------

--
-- 表的结构 `videos`
--

CREATE TABLE `videos` (
  `vd_id` varchar(18) NOT NULL,
  `vd_name` varchar(30) NOT NULL,
  `vd_content` text NOT NULL,
  `vd_date` datetime NOT NULL,
  `vd_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `videos`
--

INSERT INTO `videos` (`vd_id`, `vd_name`, `vd_content`, `vd_date`, `vd_file`) VALUES
('190524042244', '2018 German Grand Prix', 'The Ferrari formula driver Vettel lost his 1st position', '2019-05-24 04:22:44', '../mp4/20190524042244105.mp4'),
('190524042405', 'Song 1', 'This is a song', '2019-05-24 04:24:05', '../mp4/20190524042405775.mp4'),
('190524042421', 'Sandra', 'This is a girl who played the Ukulele.', '2019-05-24 04:24:21', '../mp4/20190524042421221.mp4'),
('190524042434', 'Game', 'This is a game called Polybridge. I think that it is very good to practice your IQ and Architecture!', '2019-05-24 04:24:34', '../mp4/20190524042434534.mp4'),
('190524042447', 'NBA', 'This is NBA', '2019-05-24 04:24:47', '../mp4/20190524042447647.mp4'),
('190524042507', 'Hurrcan', 'This is a car called hurrcan which drive too fast and it is over speed.', '2019-05-24 04:25:07', '../mp4/20190524042507673.mp4'),
('190524042535', 'FIA GTC', 'This is FiA GTC', '2019-05-24 04:25:35', '../mp4/20190524042535407.mp4'),
('190524042604', 'Dangerous driving', 'This is an closed accident', '2019-05-24 04:26:04', '../mp4/20190524042604141.mp4'),
('190526120405', 'KD', 'The god of death', '2019-05-26 12:04:05', '../mp4/20190526120405486.mp4');

-- --------------------------------------------------------

--
-- 表的结构 `vip`
--

CREATE TABLE `vip` (
  `vip_id` int(11) NOT NULL,
  `ac_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vip`
--

INSERT INTO `vip` (`vip_id`, `ac_id`, `date`, `type`) VALUES
(1, 7, '2019-05-26', 'annual'),
(2, 17, '2019-04-12', 'annual'),
(3, 15, '2019-05-03', 'season'),
(4, 18, '2019-05-09', 'season');

--
-- 转储表的索引
--

--
-- 表的索引 `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ac_id`);

--
-- 表的索引 `admin_day`
--
ALTER TABLE `admin_day`
  ADD PRIMARY KEY (`date`);

--
-- 表的索引 `admin_pop`
--
ALTER TABLE `admin_pop`
  ADD UNIQUE KEY `vd_id` (`vd_id`);

--
-- 表的索引 `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`an_id`);

--
-- 表的索引 `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bg_id`);

--
-- 表的索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cm_id`);

--
-- 表的索引 `popularity`
--
ALTER TABLE `popularity`
  ADD PRIMARY KEY (`pop_id`);

--
-- 表的索引 `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vd_id`);

--
-- 表的索引 `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`vip_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `announcements`
--
ALTER TABLE `announcements`
  MODIFY `an_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `cm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `popularity`
--
ALTER TABLE `popularity`
  MODIFY `pop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- 使用表AUTO_INCREMENT `vip`
--
ALTER TABLE `vip`
  MODIFY `vip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
