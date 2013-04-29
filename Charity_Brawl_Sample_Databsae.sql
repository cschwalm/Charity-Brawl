-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 03:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartsys_charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE IF NOT EXISTS `badges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `commonName` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imageFilename` text NOT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `badges`
--


-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE IF NOT EXISTS `charities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `commonName` varchar(32) NOT NULL,
  `shortDescription` varchar(145) NOT NULL,
  `description` mediumtext NOT NULL,
  `handle` varchar(200) NOT NULL,
  `donators` blob NOT NULL,
  `created` date NOT NULL,
  `rewards` blob NOT NULL,
  `photoFilename` text NOT NULL,
  UNIQUE KEY `handle` (`handle`),
  KEY `id` (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`id`, `username`, `commonName`, `shortDescription`, `description`, `handle`, `donators`, `created`, `rewards`, `photoFilename`) VALUES
(7, 'cschwalm', 'Family In Need!', 'Our new born was recently diagnosed with rare and deadly disease of tiny-head syndrome.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'family-in-need', '', '2013-02-02', '', 'images/charity_images/8f4d5b4/8f4d5b4.jpg'),
(6, 'cschwalm', 'Help Fund our School', 'Please help us purchase new textbooks for the following semester.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'help-fund-our-school', '', '2013-02-02', '', 'images/charity_images/69dc185/69dc185.jpg'),
(11, 'cschwalm', 'Polio Still Exists', 'Please help my village eradicate polio, we currently don''t have the funding for treatment.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'polio-still-exists', '', '2013-02-02', '', 'images/charity_images/a44e72d/a44e72d.jpg'),
(10, 'cschwalm', 'Save Walter White', 'This high school chemistry teacher was recently diagnosed with lung cancer.', 'My dad is amazing. It''s funny, but I didn''t know that until I found out he was going to die. That it was going to happen soon. That it was real. Then I thought about a lot of stuff. Things I hadn''t thought about for a long time. I guess I kind of took him for granted or something. I mean, our parents are just always there. You expect them to always be bugging you to clean up your room or study harder or have good manners or try new things to grow up to be a more well-rounded person one day. And make you get up early on the weekend to have "family time" and all that other stuff that used to drive me crazy. I don''t feel that way now. Everything''s different since Dad got his diagnosis. Since I realized that one day in the near future, he might not be around to drive me crazy. Now I feel lucky when he asks me about my day (I used to totally hate that question) or nags me about coming home on time at night and being respon- sible. One day he won''t be here to ask. Now I feel lucky when I hear his car pulling into the driveway after school. I even like to hear him cough- ing. It means he''s still around. Still my dad.', 'save-walter-white', '', '2013-02-02', '', 'images/charity_images/e814e25/e814e25.jpg'),
(12, 'cschwalm', 'Support Our Foster Home', 'Our foster home currently houses 12 children which all are good students.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'support-our-foster-home', '', '2013-02-02', '', 'images/charity_images/d0c5ffc/d0c5ffc.jpg'),
(13, 'cschwalm', 'Help Our Village', 'Our village in mozambique is try to provide basic needs to our community such as electricity.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'village-get-electricity', '', '2013-02-02', '', 'images/charity_images/d325e14/d325e14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `points` int(11) NOT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `points`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `profilePicture` varchar(400) NOT NULL,
  `bio` text NOT NULL,
  `badges` blob NOT NULL,
  `signedUp` date NOT NULL,
  `lastSignedIn` date NOT NULL,
  `ipAddress` varchar(15) NOT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `password`, `email`, `profilePicture`, `bio`, `badges`, `signedUp`, `lastSignedIn`, `ipAddress`) VALUES
(4, 'cschwalm', 'Corbin', 'Schwalm', '$P$BgINsd49eau91dROItR73v/3JaL8oy.', 'test@test.com', '', '', '', '2013-02-03', '2013-02-05', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `badges`
--
ALTER TABLE `badges`
  ADD CONSTRAINT `badges_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;
