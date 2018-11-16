-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2015 at 01:21 PM
-- Server version: 5.6.9-rc
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isti`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `page_name` varchar(55) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page_name` (`page_name`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `page_name`, `created_at`, `content`, `modified`, `page_id`) VALUES
(2, 'Handling Difficult Customers', '', '2015-06-04 10:42:43', '\r\n\r\nThere are various factors that lead to creation of challenging Customers which are:\r\n<br/>\r\n    Knowledgeable – awareness or lack of product knowledge is a key factor. If they are aware they might complain much in their own defence, if not aware, then they might go out of question and bring in other factors.\r\n   <br/> Unsatisfied – If the customer is satisfied then there is no complain at all and they will always keep on coming back. If they are not, then that posse a big challenge and nothing will stop them from bringing it forward until it is addressed fully to their satisfaction.\r\n  <br/>  Argumentative–There are people who just love to argue no matter what. A difficult Customer will argue with you to the end and leave you speechless because as the saying goes ‘the customer is always right’. For one to be a difficult Customer, he/she must be argumentative\r\n<br/>\r\nHandling Difficult Customers\r\n<br/>\r\nCustomers are of different categories and handling a difficult one needs expertise in the field. As a Customer service provider you should be able to acquire, retain and maintain your Customer as the first impression always matter<br/>\r\n\r\nYou Should:<br/>\r\n\r\nDig deep and get to know their needs and address them satisfactorily with the right attitude (positive), remembering to deliver what you promised\r\n<br/>\r\nAcknowledge the mistake and act upon it soonest possible\r\n<br/>\r\nLearn to listen and provide solutions\r\n<br/>\r\nRemember to follow up to find out if they were satisfied as to their expectations and keep calling them more often\r\n<br/>\r\nAlways remember to thank them for being your Customer, it can be through thank you notes, emails or even direct phone call.  This makes them feel appreciated and cared for and they will always come back or refer more people to your organization, which is both a benefit to your organization and the Customer too.\r\n<br/>\r\n"A smile is very important as it heals a broken heart and brightens the day. Always remember to smile"\r\n', '2015-06-04 13:42:43', NULL),
(3, 'Tips of an Effective Sales Person', '', '2015-06-04 10:46:34', '\r\n\r\nSuccessful selling requires that the product or service is of suitable quality for its target market and that the selling company takes good care of customers. Therefore it is helpful for a sales person to work for a professional, good quality product organization.<br/>\r\n\r\nProduct development, design and production, service integrity of the selling company are also important for successful selling and are typically outside the formal control of the sales person, hence why internal selling is an increasingly important aspect of modern sales role.\r\n<br/>\r\nEffective sales people are interpreters and translators [and increasingly educators too] who can enable the complex systems of the buying and selling organization to work together for the benefit of both.\r\n', '2015-06-04 13:46:34', NULL),
(4, 'Tips of a Sales Presentation', '', '2015-06-04 10:47:25', '\r\n\r\nSales presentation is a line of talk that attempts to persuade someone with a planned sales presentation strategy of a product or service designed to initiate and close a sale.\r\n<br/>\r\nHave a checklist that guides you in creating your presentation.\r\nAsk yourself these questions:<br/>\r\n\r\n    Does your introduction grab your audience’s attention? And does it need to explain your objectives?<br/>\r\n    Do you follow this by clearly defining points of the presentation?<br/>\r\n    Are the main points in a logical flowing sequence?<br/>\r\n    Do the main points need support from audio-visual aids or props?<br/>\r\n    Does your presentation’s conclusion summarize the presentation clearly and concisely?<br/>\r\n    Is the conclusion strong and connected to the introduction?<br/>\r\n    Is your presentation too complicated?<br/>\r\n    Does your presentation contain any jargon? (avoid jargons they can be confusing for many people)\r\n<br/>\r\nTips of a successful presentation<br/>\r\n\r\n    Keep the audience’s attention\r\n    Signal where you are at, in the presentation<br/>\r\n    Give an example\r\n    Refer to what you have said previously<br/>\r\n    Refer to what you will say<br/>\r\n    Refer to what an expert says e.g. Bible teachings or great authors<br/>\r\n    Refer to common knowledge<br/>\r\n\r\nIn creating a presentation we have Audio – visual aids and presentation tools<br/>\r\nAudio-visual aids include a wide variety of communication tools ranging from flip charts, power point slides, laminated posters, DVD’s and video tapes etc.<br/>\r\n\r\nLet’s look at the most common used visual aid.<br/>\r\n\r\nTips for PowerPoint slides\r\n<br/>\r\n    Start by creating an outline – The most important part of any presentation is the content, not the graphical appeal. By creating an outline first, you ensure that the content of your presentation is solid before you concern yourself with the visual elements.<br/>\r\n    Use Contrasting Colours – Needs to create a lot of contrast between the text colour and the background colour.\r\n  <br/>  Use a big enough font – When deciding what font size to use in your presentation, make sure it is big enough so that the audience can read it.\r\n   <br/> Use visuals instead of text slides – Instead of using slides that only contain text, use visuals such as graphs, diagrams, photos and media clips to engage the audience.\r\n   <br/> Blank the screen – sometimes we want the image on the screen to disappear so that the audience is focused solely on the presenter. So blank the screen when necessary.\r\n<br/>\r\nIn summary, with PowerPoint presentations, utilize the 10:20:30 rule:\r\n\r\n  <br/>  Have a minimum of 10 slides per session\r\n   <br/> Talk for a maximum of 20 minutes\r\n   <br/> Use a minimum of Font size ‘30’ for effective visibility\r\n\r\n', '2015-06-04 13:47:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4242d7f07128475cff62a6728b2e3400', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.124 Safari/537.36', 1435238069, 'a:3:{s:9:"user_data";s:0:"";s:9:"user_name";s:5:"admin";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `eventcal`
--

CREATE TABLE IF NOT EXISTS `eventcal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL DEFAULT 'anonimous',
  `user_id` int(11) NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTitle` varchar(100) DEFAULT NULL,
  `eventContent` text,
  `privacy` enum('public','private') NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `event_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Events Table' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `event_description`) VALUES
(1, 'Conference', '2015-06-16', '2015-06-17', 'statusText is not always accurate'),
(2, 'The Event Obama is Showing UP', '2015-06-18', '2015-06-29', 'African Preparation'),
(3, 'Graduation', '2015-06-07', '2015-06-10', 'A graduation of all time');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(25) NOT NULL,
  `category` enum('video','Photo','audio','document') NOT NULL,
  `description` text NOT NULL,
  `page_name` varchar(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `category`, `description`, `page_name`, `url`, `date_uploaded`) VALUES
(4, 'veronica', 'video', 'a photho of you', '', 'C:/apache2/htdocs/isti/assets/uploads/70px-____20131.jpg', '2015-05-27 11:49:01'),
(5, 'veronica', 'video', 'a photho of you', '', 'C:/apache2/htdocs/isti/assets/uploads/WIKI_LOVES_AFRICA.png', '2015-06-01 10:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `lists_details`
--

CREATE TABLE IF NOT EXISTS `lists_details` (
  `article_id` int(11) NOT NULL,
  `list_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_addres` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `pass_word` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_addres`, `user_name`, `pass_word`) VALUES
(1, 'John', 'Doe', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'john', 'ogucha', 'info@difbac.com', 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(5, 'Benefits'),
(4, 'Guerilla'),
(3, 'Home');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
