-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2008 at 12:49 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- --------------------------------------------------------

--
-- Table structure for table `cl_groups`
--

CREATE TABLE IF NOT EXISTS `cl_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cl_groups`
--

INSERT INTO `cl_groups` (`id`, `name`) VALUES
(0, 'Registered User'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `cl_group_uri`
--

CREATE TABLE IF NOT EXISTS `cl_group_uri` (
  `group_id` int(11) NOT NULL,
  `request_uri` varchar(40) collate utf8_bin NOT NULL,
  `is_admin` varchar(1) collate utf8_bin NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cl_group_uri`
--

INSERT INTO `cl_group_uri` (`group_id`, `request_uri`, `is_admin`) VALUES
(0, '/auth', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cl_users`
--

CREATE TABLE IF NOT EXISTS `cl_users` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `user_ip` varchar(40) collate utf8_bin NOT NULL,
  `username` varchar(25) collate utf8_bin NOT NULL,
  `username_clean` varchar(25) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `banned` varchar(1) collate utf8_bin NOT NULL default '0',
  `ban_reason` varchar(255) collate utf8_bin default NULL,
  `login_attempts` mediumint(1) unsigned NOT NULL default '0',
  `newpass` varchar(34) collate utf8_bin default NULL,
  `newpass_key` varchar(32) collate utf8_bin default NULL,
  `newpass_time` datetime default NULL,
  `active_time` mediumint(8) unsigned NOT NULL default '0',
  `last_visit` datetime NOT NULL default '0000-00-00 00:00:00',
  `created` timestamp NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cl_users`
--

INSERT INTO `cl_users` (`id`, `group_id`, `user_ip`, `username`, `username_clean`, `password`, `email`, `banned`, `ban_reason`, `login_attempts`, `newpass`, `newpass_key`, `newpass_time`, `active_time`, `last_visit`, `created`, `modified`) VALUES
(1, 0, '127.0.0.1', 'Example', 'example', '$1$LV4.2x/.$BvzpsCWupwbHqqFa15uAa/', 'example@your-host.com', '0', NULL, 0, NULL, NULL, NULL, 25, '2008-08-17 14:56:39', '2008-08-17 14:56:01', '2008-08-17 14:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `cl_user_autologin`
--

CREATE TABLE IF NOT EXISTS `cl_user_autologin` (
  `key_id` char(32) collate utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` int(11) NOT NULL default '0',
  PRIMARY KEY  (`key_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cl_user_autologin`
--


-- --------------------------------------------------------

--
-- Table structure for table `cl_user_profile`
--

CREATE TABLE IF NOT EXISTS `cl_user_profile` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) collate utf8_bin default NULL,
  `location` varchar(25) collate utf8_bin default NULL,
  `website` varchar(100) collate utf8_bin default NULL,
  `occupation` varchar(50) collate utf8_bin default NULL,
  `introduction` text collate utf8_bin,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cl_user_profile`
--

INSERT INTO `cl_user_profile` (`user_id`, `fullname`, `location`, `website`, `occupation`, `introduction`) VALUES
(1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cl_user_temp`
--

CREATE TABLE IF NOT EXISTS `cl_user_temp` (
  `id` int(11) NOT NULL auto_increment,
  `user_ip` varchar(40) collate utf8_bin NOT NULL,
  `username` varchar(255) collate utf8_bin NOT NULL,
  `username_clean` varchar(255) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `activation_key` varchar(50) collate utf8_bin NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cl_user_temp`
--

