-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 31, 2016 at 04:09 AM
-- Server version: 5.6.30
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xncjeazd_mmino`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGE` text NOT NULL,
  `ARTIST` varchar(50) NOT NULL,
  `BIO` text NOT NULL,
  `BIO2` text NOT NULL,
  `FACEBOOK` text NOT NULL,
  `TWITTER` text NOT NULL,
  `WEBSITE` text NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `IMAGE`, `ARTIST`, `BIO`, `BIO2`, `FACEBOOK`, `TWITTER`, `WEBSITE`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/1.png', 'LIZZY BIGGS', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                                                        ', '																																	Cras euismod, odio non gravida convallis, purus mauris vestibulum dolor, at volutpat ante est quis nisi. Aenean venenatis ligula et ex mattis, et iaculis ligula convallis.                                                                                                                        ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/2.png', 'ROB HARTLEY', '																																												                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                               ', '																																	Cras euismod, odio non gravida convallis, purus mauris vestibulum dolor, at volutpat ante est quis nisi. Aenean venenatis ligula et ex mattis, et iaculis ligula convallis.                                                                                                                        ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(3, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/3.png', 'DJ T3CHNO', '																																																							                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                                                                       ', '																																																							Cras euismod, odio non gravida convallis, purus mauris vestibulum dolor, at volutpat ante est quis nisi. Aenean venenatis ligula et ex mattis, et iaculis ligula convallis.                                                                                                                                 ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/4.png', 'ANDY PIPES', '																																	                                                                                																																												                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                                                                       ', '																																																							                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                                                                                                                 ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(5, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/5.png', 'WILLOW', '																																																							                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                                                                       ', '																																	                                                                                																																												                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti.                                                   ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(6, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/6.png', 'LADY BELLA', '																																																										                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                               																			                                                                                                                        ', '																																																																													                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.                                                                                                                                                                                           ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(7, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/7.png', 'LACY STONE', '																																																										                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                               																			                                                                                                                        ', '																																																																											                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.                                                                         		                                                                                                                        ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y'),
(8, 'http://vakaweb.co.za/adminpanel/mmino/images/artists/8.png', 'LI SUMMERS', '																																																																										                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur semper vulputate. Integer nec luctus augu                                                                                               			                                                                                                                        ', '																																	                                                                                																																												                                                                                											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti.                                                                                                                   ', 'http://facebook.com', 'http://twitter.com', 'http://appimobile.co.za', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `THUMBNAIL` text NOT NULL,
  `BANNER` text NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `START_DATE` varchar(100) NOT NULL,
  `END_DATE` varchar(100) NOT NULL,
  `DATE` datetime NOT NULL,
  `URL` text NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `NOTES` text NOT NULL,
  `BOOK` text NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `FEATURED` enum('n','y') NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `THUMBNAIL`, `BANNER`, `TITLE`, `DESCRIPTION`, `START_DATE`, `END_DATE`, `DATE`, `URL`, `LOCATION`, `NOTES`, `BOOK`, `EMAIL`, `PHONE`, `FEATURED`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/events/1-1.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/1.png', 'Lorem ipsum', '                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                        ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/events/2-2.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/2.png', 'Lorem ipsum', '                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                                                                ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y'),
(3, 'http://vakaweb.co.za/adminpanel/mmino/images/events/3-3.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/3.png', 'Lorem ipsum', '                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                                                                ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/events/4-4.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/4.png', 'Lorem ipsum', '                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                                                                ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y'),
(5, 'http://vakaweb.co.za/adminpanel/mmino/images/events/1-1.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/1.png', 'Lorem ipsum', '                                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                                                                                                        ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y'),
(6, 'http://vakaweb.co.za/adminpanel/mmino/images/events/2-2.png', 'http://vakaweb.co.za/adminpanel/mmino/images/events/2.png', 'Lorem ipsum', '                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis                                                                                ', '2016, 9, 6, 18, 30, 0, 0', '2016, 9, 6, 18, 30, 0, 0', '2016-09-22 00:00:00', 'vakaweb.co.za', 'Maecenas dictum', 'Etiam mi urna, accumsan eu ex sit amet, consequat cursus augue.', 'vakaweb.co.za', 'example@email.com', '+2778767876', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `more`
--

CREATE TABLE IF NOT EXISTS `more` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGE` text NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `WEBSITE` text NOT NULL,
  `TEXT` text NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`id`, `IMAGE`, `TITLE`, `WEBSITE`, `TEXT`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/more/1.png', 'ABOUT US', 'http://appimobile.co.za/', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/more/2.png', 'AUDIO STREAM', 'http://listen.shoutcast.com/zimdancehall', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                                                                                                                         ', 'y'),
(3, 'http://vakaweb.co.za/adminpanel/mmino/images/more/3.png', 'VIDEO STREAM', 'https://www.youtube.com/embed/oXr7HHuCy6s', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/more/4.png', 'SHOP', 'http://ambitiouz.co.za/index.html', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y'),
(5, 'http://vakaweb.co.za/adminpanel/mmino/images/more/5.png', 'CONTACT US', 'http://appimobile.co.za', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y'),
(6, 'http://vakaweb.co.za/adminpanel/mmino/images/more/6.png', 'WEBSITE', 'http://appimobile.co.za', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y'),
(7, 'http://vakaweb.co.za/adminpanel/mmino/images/more/7.png', 'DEVELOPERS', 'http://appimobile.co.za', '											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                        ', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGE` text NOT NULL,
  `BANNER` text NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `ARTIST` varchar(50) NOT NULL,
  `FEAT` text NOT NULL,
  `YEAR` year(4) NOT NULL,
  `SOUNDCLOUD` text NOT NULL,
  `WEBSITE` text NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `IMAGE`, `BANNER`, `TITLE`, `ARTIST`, `FEAT`, `YEAR`, `SOUNDCLOUD`, `WEBSITE`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/1.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/1-1.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/2.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/2-2.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(3, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/3.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/3-3.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/4.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/4-4.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(5, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/5.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/5-5.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(6, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/6.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/6-6.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(7, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/7.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/7-7.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y'),
(8, 'http://vakaweb.co.za/adminpanel/mmino/images/songs/0.png', 'http://vakaweb.co.za/adminpanel/mmino/images/songs/0-0.png', 'AMENI', 'Miss Pru DJ', 'Ft. Emtee, Saudi, Sjava, Fifi Cooper, A-Reece & B3nchMarQ', 2016, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243190602&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://ambitiouz.co.za', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE IF NOT EXISTS `stream` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGE` text NOT NULL,
  `STREAM` varchar(100) NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `IMAGE`, `STREAM`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/more/2.png', 'http://listen.shoutcast.com/zimdancehall', 'n'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/more/3.png', 'https://www.youtube.com/embed/oXr7HHuCy6s', 'n'),
(3, '', 'https://www.youtube.com/embed/qLKdBbaGImI?&showinfo=0', 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/events/home.png', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `THUMBNAIL` text NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `ARTIST` varchar(50) NOT NULL,
  `DES` text NOT NULL,
  `VIDEO` varchar(20) NOT NULL,
  `YEAR` year(4) NOT NULL,
  `isActive` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `THUMBNAIL`, `TITLE`, `ARTIST`, `DES`, `VIDEO`, `YEAR`, `isActive`) VALUES
(1, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/1.png', 'B3nchMarq Interview Guests on HN9', 'B3nchMarq', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                                                                                       ', 'hWzLGcG2SSc', 2016, 'y'),
(2, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/2.png', 'Emtee and A-Reece Interview - Clebs on HN9', 'Emtee and A-Reece', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.                                  ', 'ZFJulZuX6ow', 2016, 'y'),
(3, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/3.png', 'Areece', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.', 'tJAfJjY8Cwc', 2016, 'y'),
(4, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/4.png', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tempus elit. Vivamus sed tellus odio. Suspendisse potenti. Praesent tempus mi porttitor, rutrum mauris non, pulvinar felis.', 'yHrhIpixeXM', 2016, 'y'),
(5, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/1.png', '', '', '											A description                   \r\n                                                                                ', 'hWzLGcG2SSc', 2016, 'y'),
(6, 'http://vakaweb.co.za/adminpanel/mmino/images/videos/2.png', '', '', '											A description                   \r\n                                                                                ', 'ZFJulZuX6ow', 2016, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE IF NOT EXISTS `webpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EVENT_BOOK` text NOT NULL,
  `EVENT_WEBSITE` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `EVENT_BOOK`, `EVENT_WEBSITE`) VALUES
(1, 'http://appimobile.co.za', 'http://appimobile.co.za');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
