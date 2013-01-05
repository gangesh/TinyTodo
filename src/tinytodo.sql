-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 09:26 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tinytodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tt_lists`
--

CREATE TABLE IF NOT EXISTS `tt_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL DEFAULT '',
  `ow` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `d_created` int(10) unsigned NOT NULL DEFAULT '0',
  `d_edited` int(10) unsigned NOT NULL DEFAULT '0',
  `sorting` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `taskview` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tt_lists`
--

INSERT INTO `tt_lists` (`id`, `uuid`, `ow`, `name`, `d_created`, `d_edited`, `sorting`, `published`, `taskview`) VALUES
(1, '40425cee-01d1-40b8-a8f1-d238fcd4e477', 0, 'Todo', 1350473534, 0, 0, 0, 1),
(2, '476576da-9fe7-4801-8648-2cdd7c2a50a0', 1, 'Todo', 1350641919, 1350641919, 0, 0, 0),
(3, '55b99c9e-622a-48c2-bebb-5398006d32a9', 2, 'New project', 1352489439, 1352489439, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tt_tag2task`
--

CREATE TABLE IF NOT EXISTS `tt_tag2task` (
  `tag_id` int(10) unsigned NOT NULL,
  `task_id` int(10) unsigned NOT NULL,
  `list_id` int(10) unsigned NOT NULL,
  KEY `tag_id` (`tag_id`),
  KEY `task_id` (`task_id`),
  KEY `list_id` (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tt_tag2task`
--

INSERT INTO `tt_tag2task` (`tag_id`, `task_id`, `list_id`) VALUES
(1, 2, 2),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tt_tags`
--

CREATE TABLE IF NOT EXISTS `tt_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tt_tags`
--

INSERT INTO `tt_tags` (`id`, `name`) VALUES
(2, 'commerce'),
(1, 'project abc');

-- --------------------------------------------------------

--
-- Table structure for table `tt_todolist`
--

CREATE TABLE IF NOT EXISTS `tt_todolist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL DEFAULT '',
  `list_id` int(10) unsigned NOT NULL DEFAULT '0',
  `d_created` int(10) unsigned NOT NULL DEFAULT '0',
  `d_completed` int(10) unsigned NOT NULL DEFAULT '0',
  `d_edited` int(10) unsigned NOT NULL DEFAULT '0',
  `compl` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `note` text,
  `prio` tinyint(4) NOT NULL DEFAULT '0',
  `ow` int(11) NOT NULL DEFAULT '0',
  `tags` varchar(600) NOT NULL DEFAULT '',
  `tags_ids` varchar(250) NOT NULL DEFAULT '',
  `duedate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `list_id` (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tt_todolist`
--

INSERT INTO `tt_todolist` (`id`, `uuid`, `list_id`, `d_created`, `d_completed`, `d_edited`, `compl`, `title`, `note`, `prio`, `ow`, `tags`, `tags_ids`, `duedate`) VALUES
(1, 'b4787bcd-f3f5-4db5-b2d9-221c3f579edd', 1, 1350642076, 0, 1350642076, 0, 'Test', NULL, 0, 1, '', '', NULL),
(2, '94d78889-ff31-4da9-be76-47fca7cb44fd', 2, 1350647587, 0, 1350720673, 0, 'new test', '', 0, 1, 'project abc,commerce', '1,2', NULL),
(3, '8930c12c-0349-4dae-919a-44110c62c871', 2, 1350647605, 0, 1350647605, 0, 'again', NULL, 0, 2, '', '', NULL),
(4, '3149cc83-bece-467f-8a41-e864a1777502', 2, 1350649662, 0, 1350649662, 0, 'test', NULL, 0, 3, '', '', NULL),
(5, '5075b1a7-8498-4296-96f0-89db3356673b', 1, 1350997818, 0, 1350998149, 0, 'req1', NULL, 0, 2, '', '', NULL),
(6, '60f492b0-65c7-4c24-8979-673529e0a255', 3, 1352489449, 0, 1352489449, 0, 'new task', NULL, 0, 1, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `um`
--

CREATE TABLE IF NOT EXISTS `um` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `cookie_pass` varchar(50) NOT NULL DEFAULT '',
  `state` char(1) NOT NULL DEFAULT '0',
  `mail` varchar(100) NOT NULL DEFAULT '',
  `active` char(1) NOT NULL DEFAULT '0',
  `actcode` varchar(15) NOT NULL DEFAULT '',
  `lastactive` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `um`
--

INSERT INTO `um` (`id`, `name`, `password`, `cookie_pass`, `state`, `mail`, `active`, `actcode`, `lastactive`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '1', 'gangeshmatta@gmail.com', '1', '', '2012-11-09 15:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE IF NOT EXISTS `user_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `taskids` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id`, `name`, `email`, `comment`, `taskids`, `date`) VALUES
(1, 'sdfsdf', 'a@b.com', 'adasdas', '1', '2012-10-19 16:37:18'),
(2, 'dafaa', 'asdkfajs@sdflaskd.com', 'adsfasdf adf adsf', '1', '2012-10-20 14:09:55'),
(3, 'Gangesh Matta', 'a@b.com', 'df dsf d', '', '2012-10-23 13:59:18'),
(4, 'Gangesh Matta', 'a@b.com', 'a aa dsf df', '1', '2012-10-23 13:59:56'),
(5, 'GangeshMatta', 'a@b.com', 'sdfds fdsf dsf', '1', '2012-10-23 14:00:43'),
(6, 'Gangesh Matta', 'ankush0264@yahoo.com', 'sdjf lksjfksd fds', '1', '2012-10-23 14:01:04'),
(7, 'Gangesh Matta', 'a@b.com', 'sdsds sd s', '1', '2012-10-23 14:08:12'),
(8, 'Gangesh Matta', 'a@b.com', 'd fsdf sdf sd', '1', '2012-10-23 16:09:09'),
(9, 'yati', 'a@b.com', 'wow!!!', '4', '2012-10-23 16:12:21'),
(10, 'Yati', 'a@b.com', 'next step is to create a heirarchy', '4', '2012-10-23 17:25:27'),
(11, 'Yati', 'a@b.com', 'Eros elementum magna, turpis et cum, tempor, eros, arcu eros! Odio, turpis sociis duis, urna in? Vut, parturient ut aenean! Cursus ultrices dolor porta, urna sagittis sit tempor elit risus? Turpis diam! Elementum non ac, lacus. Ultricies phasellus mid non? Ut augue scelerisque in! Nisi in cursus quis! Nisi amet porttitor amet, sit penatibus, eros eu parturient mid sed cum, enim scelerisque lectus, ac nec sit ut enim rhoncus lundium mauris nascetur, penatibus adipiscing, natoque sociis, et montes', '1', '2012-10-23 17:27:57'),
(12, 'Aman', 'a@b.com', 'What is going on?', '1', '2012-10-23 18:39:45'),
(13, 'Aman', 'a@b.com', 'sdf sdf sdfsd', '5', '2012-10-23 18:40:27'),
(14, 'Yati', 'a@b.com', 'No, NExt step will be user management', '4', '2012-10-31 11:26:03'),
(15, 'test', 'gangeshmatta@gmail.com', 'lkdhsfkj sdfkjs hfsdf s', '1', '2012-11-10 01:01:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
