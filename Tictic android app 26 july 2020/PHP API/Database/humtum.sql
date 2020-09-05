-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2020 at 11:27 PM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtrack_dtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(250) NOT NULL COMMENT 'password should be md5()'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `device_tokon`
--

CREATE TABLE `device_tokon` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(250) NOT NULL,
  `tokon` varchar(250) NOT NULL,
  `phone_id` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discover_section`
--

CREATE TABLE `discover_section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discover_section`
--

INSERT INTO `discover_section` (`id`, `section_name`, `created`) VALUES
(1, 'Sport Lover', '2020-05-26 02:45:28'),
(2, 'Smiles', '2020-05-23 15:14:18'),
(3, 'Times We Had', '2020-05-23 15:14:18'),
(4, 'ROCKSTAR', '2020-05-23 15:14:18'),
(5, 'Ice Me Out', '2020-05-23 15:14:18'),
(6, 'The Sharkboy Beat', '2020-05-23 15:14:18'),
(7, 'Party Girl', '2020-05-23 15:14:18'),
(8, 'Laxed (Siren Beat)', '2020-05-23 15:14:18'),
(9, 'Dream Girl', '2020-05-23 15:14:18'),
(15, 'true love', '2020-05-27 17:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `fav_sound`
--

CREATE TABLE `fav_sound` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(50) NOT NULL,
  `sound_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow_users`
--

CREATE TABLE `follow_users` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(250) NOT NULL,
  `followed_fb_id` varchar(250) NOT NULL COMMENT 'a person who follow by other'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `my_fb_id` varchar(250) NOT NULL,
  `effected_fb_id` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL COMMENT 'likes,comments,mention,followers',
  `value` varchar(250) NOT NULL COMMENT 'this could be a video id',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `sound_name` varchar(250) NOT NULL,
  `description` varchar(150) NOT NULL,
  `thum` varchar(500) NOT NULL,
  `section` varchar(250) NOT NULL,
  `uploaded_by` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound`
--

INSERT INTO `sound` (`id`, `sound_name`, `description`, `thum`, `section`, `uploaded_by`, `created`) VALUES
(1, 'meri shazadi', 'tan meri shazadi', '', '1', 'admin', '2020-07-20 04:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `sound_section`
--

CREATE TABLE `sound_section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound_section`
--

INSERT INTO `sound_section` (`id`, `section_name`, `created`) VALUES
(27, 'Comedy', '2020-07-04 13:18:39'),
(28, 'Fashion', '2020-07-07 19:15:35'),
(24, 'Mood', '2020-07-04 10:29:22'),
(26, 'Recommended', '2020-05-23 11:28:08'),
(25, 'Funny s', '2020-07-20 15:41:04'),
(23, 'World popular', '2020-07-04 13:18:58'),
(22, 'Snapvid star 1', '2020-07-21 16:50:36'),
(34, 'odd', '2020-07-02 19:47:26'),
(29, 'bhojpuri Music', '2020-07-07 19:19:06'),
(33, 'Naats', '2020-05-31 16:31:22'),
(31, 'Trending', '2020-05-23 11:53:08'),
(32, 'Romantic', '2020-07-04 13:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(150) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(150) NOT NULL,
  `bio` varchar(150) NOT NULL,
  `profile_pic` varchar(250) NOT NULL,
  `block` varchar(100) NOT NULL DEFAULT '0',
  `version` varchar(15) DEFAULT '0',
  `device` varchar(25) NOT NULL,
  `signup_type` varchar(110) NOT NULL,
  `tokon` varchar(500) NOT NULL,
  `bearer_token` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fb_id`, `username`, `verified`, `first_name`, `last_name`, `gender`, `bio`, `profile_pic`, `block`, `version`, `device`, `signup_type`, `tokon`, `bearer_token`, `created`) VALUES
(31, '101912475854216608665', 'Bringthings1705765032', 1, 'Bringthings', 'Inc', 'Male', '', 'upload/images/105137970237338569578_1271336036.jpg', '0', '1.0', 'android', 'gmail', 'fL-3tF5gjmQ:APA91bH2y7NrC_NJtTBVw1JGicvi1DTljyMy-6flE9BVIIT3Re9g1EsLHgGQrogm91muTpS-LGpNU_lmPibcCHCKPHnA93Z7DizaCX5ssyxvHmk-glfa7Jsrn56MGAZt65gp75dVsUYi', '', '2020-07-20 04:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `verification_request`
--

CREATE TABLE `verification_request` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(150) NOT NULL,
  `attachment` longtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `fb_id` varchar(50) NOT NULL,
  `description` varchar(320) NOT NULL,
  `video` varchar(500) NOT NULL DEFAULT 'NULL',
  `thum` varchar(500) NOT NULL DEFAULT 'NULL',
  `gif` varchar(500) NOT NULL DEFAULT 'NULL',
  `view` int(11) NOT NULL DEFAULT '0',
  `section` varchar(250) NOT NULL DEFAULT '0',
  `sound_id` int(11) NOT NULL DEFAULT '0',
  `privacy_type` varchar(155) NOT NULL DEFAULT 'public' COMMENT 'public and private',
  `allow_comments` varchar(155) NOT NULL DEFAULT 'true' COMMENT 'true=allow  and false=not allowed',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `fb_id`, `description`, `video`, `thum`, `gif`, `view`, `section`, `sound_id`, `privacy_type`, `allow_comments`, `created`) VALUES
(6847, '101912475854216608665', 'very sweet', 'https://tictic-videos.s3.ap-south-1.amazonaws.com/videos/1595236513_332465805withSound.mp4', 'https://tictic-videos.s3.ap-south-1.amazonaws.com/thum/1595236513_332465805.jpg', 'https://tictic-videos.s3.ap-south-1.amazonaws.com/gif/1595236513_332465805.gif', 2, '1', 1, 'public', 'true', '2020-07-20 04:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `video_comment`
--

CREATE TABLE `video_comment` (
  `id` int(11) NOT NULL,
  `video_id` varchar(50) NOT NULL,
  `fb_id` varchar(50) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_like_dislike`
--

CREATE TABLE `video_like_dislike` (
  `id` int(11) NOT NULL,
  `video_id` varchar(50) NOT NULL,
  `fb_id` varchar(50) NOT NULL,
  `action` int(11) NOT NULL COMMENT '1= like ',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_tokon`
--
ALTER TABLE `device_tokon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discover_section`
--
ALTER TABLE `discover_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav_sound`
--
ALTER TABLE `fav_sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_users`
--
ALTER TABLE `follow_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound_section`
--
ALTER TABLE `sound_section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section_name` (`section_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `fb_id` (`fb_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `verification_request`
--
ALTER TABLE `verification_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_comment`
--
ALTER TABLE `video_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_like_dislike`
--
ALTER TABLE `video_like_dislike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device_tokon`
--
ALTER TABLE `device_tokon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discover_section`
--
ALTER TABLE `discover_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `fav_sound`
--
ALTER TABLE `fav_sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_users`
--
ALTER TABLE `follow_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sound_section`
--
ALTER TABLE `sound_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `verification_request`
--
ALTER TABLE `verification_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6848;

--
-- AUTO_INCREMENT for table `video_comment`
--
ALTER TABLE `video_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_like_dislike`
--
ALTER TABLE `video_like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
