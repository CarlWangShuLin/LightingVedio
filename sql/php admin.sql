-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-09 09:25:41
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
(1, 'jason', '123123', 21, '13938473492', 'z71x10@163.com', '1'),
(7, 'Carl', '123', 20, '1456789642', 'carl@123.com', '1'),
(8, 'Admin', '123', 20, '15678912456', '361@11.com', '2'),
(15, 'Fitch', '123123', 20, '14567956121', 'Fithc@123.com', '1'),
(16, 'Jay', '123123', 20, '15968956478', 'jay@123.com', '1'),
(17, 'Jamie', '123123', 20, '14562478962', 'jamie@123.com', '1');

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
  `ac_id` int(20) DEFAULT NULL,
  `bg_popularity` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blogs`
--

INSERT INTO `blogs` (`bg_id`, `bg_title`, `bg_date`, `bg_contents`, `ac_id`, `bg_popularity`) VALUES
(7, ' Jay', '2019-04-30', 'this is a test', 7, NULL),
(8, 'Class', '2019-05-10', 'This is EAD class', 7, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `cm_id` int(20) NOT NULL,
  `cm_name` varchar(30) NOT NULL,
  `cm_contents` text NOT NULL,
  `ac_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`cm_id`, `cm_name`, `cm_contents`, `ac_id`) VALUES
(1, 'Comment', 'This video is good, I think it should be very popular', 1),
(2, 'Video', 'This video is nice and good', 2);

-- --------------------------------------------------------

--
-- 表的结构 `statistics`
--

CREATE TABLE `statistics` (
  `st_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `share` varchar(11) NOT NULL,
  `upload` varchar(11) NOT NULL,
  `playback` varchar(11) NOT NULL,
  `vd_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `statistics`
--

INSERT INTO `statistics` (`st_id`, `month`, `share`, `upload`, `playback`, `vd_id`) VALUES
(1, '2019-04-02', '123', '456', '123', 1),
(2, '2019-04-01', '111', '222', '333', 2),
(3, '2019-04-02', '123', '456', '123', 3),
(4, '2019-04-01', '111', '222', '333', 4),
(5, '2019-04-04', '200', '300', '200', 5),
(6, '2019-04-06', '420', '400', '500', 6),
(7, '2019-04-04', '200', '300', '200', 7),
(8, '2019-04-06', '420', '400', '500', 8),
(9, '2019-05-01', '153', '453', '356', 1),
(10, '2019-05-02', '345', '235', '234', 2),
(11, '2019-05-08', '123', '234', '456', 1),
(12, '2019-05-08', '123', '234', '456', 1),
(13, '2019-04-10', '234', '124', '345', 0),
(14, '2019-04-11', '321', '342', '432', 0),
(15, '2019-04-12', '432', '234', '145', 0);

-- --------------------------------------------------------

--
-- 表的结构 `videos`
--

CREATE TABLE `videos` (
  `vd_id` int(20) NOT NULL,
  `vd_name` varchar(30) NOT NULL,
  `vd_date` date NOT NULL,
  `vd_file` text NOT NULL,
  `ac_id` int(20) NOT NULL,
  `vd_popularity` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ac_id`);

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
-- 表的索引 `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`st_id`);

--
-- 表的索引 `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vd_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `announcements`
--
ALTER TABLE `announcements`
  MODIFY `an_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `cm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `statistics`
--
ALTER TABLE `statistics`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `videos`
--
ALTER TABLE `videos`
  MODIFY `vd_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
