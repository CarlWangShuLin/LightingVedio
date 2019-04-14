-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-04-14 10:04:06
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.3

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
(1, 'jason', '123123', 21, '13938473492', 'z71x10@163.com', '1');

-- --------------------------------------------------------

--
-- 表的结构 `ac_cm`
--

CREATE TABLE `ac_cm` (
  `ac_id` int(20) NOT NULL,
  `cm_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `announcements`
--

CREATE TABLE `announcements` (
  `an_id` int(20) NOT NULL,
  `an_name` varchar(30) NOT NULL,
  `an_contents` varchar(9999) NOT NULL,
  `ac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Nulla sem risus, vestibulum in11111', '2019-03-29', 'Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in', NULL),
(2, 'Nulla sem risus, vestibulum in22222', '2019-03-19', 'Nulla sem risNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inus, vestibulum in', NULL),
(3, 'Nulla sem risus, vestibulum in33333', '2019-03-06', 'Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in', NULL),
(4, 'Nulla sem risus, vestibulum in44444', '2019-03-19', 'Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222Nulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum inNulla sem risus, vestibulum in222', NULL),
(5, 'Nulla sem risus, vestibulum in55222', '2019-03-15', '111885555555555555555555555555555fffffffffffffffffffdddddddddddddddddcccccc', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `cl_vd`
--

CREATE TABLE `cl_vd` (
  `cl_id` int(20) NOT NULL,
  `vd_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `collection`
--

CREATE TABLE `collection` (
  `cl_id` int(10) NOT NULL,
  `cl_name` varchar(30) NOT NULL,
  `ac_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `cm_id` int(20) NOT NULL,
  `cm_name` varchar(30) NOT NULL,
  `cm_contents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `videos`
--

CREATE TABLE `videos` (
  `vd_id` int(20) NOT NULL,
  `vd_name` varchar(30) NOT NULL,
  `vd_classification` varchar(20) NOT NULL
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
-- 表的索引 `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`cl_id`);

--
-- 表的索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cm_id`);

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
  MODIFY `ac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `announcements`
--
ALTER TABLE `announcements`
  MODIFY `an_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `collection`
--
ALTER TABLE `collection`
  MODIFY `cl_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `cm_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `videos`
--
ALTER TABLE `videos`
  MODIFY `vd_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
