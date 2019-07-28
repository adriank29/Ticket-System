-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 10:37 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `njiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket_STAFF`
--

CREATE TABLE IF NOT EXISTS `ticket_STAFF` (
  `t_ID` int(2) NOT NULL AUTO_INCREMENT,
  `t_TITLE` varchar(255) DEFAULT NULL,
  `t_SUMMARY` varchar(255) DEFAULT NULL,
  `t_USER` varchar(64) DEFAULT NULL,
  `t_UID` varchar(64) DEFAULT NULL,
  `t_USRGROUP` varchar(5) DEFAULT NULL,
  `t_CAT` varchar(8) DEFAULT NULL,
  `t_TIMESTAMP` varchar(16) DEFAULT NULL,
  `t_PRIORITY` int(1) DEFAULT NULL,
  `t_STATUS` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`t_ID`),
  UNIQUE KEY `user_uid_pair` (`t_USER`,`t_UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ticket_STAFF`
--

INSERT INTO `ticket_STAFF` (`t_ID`, `t_TITLE`, `t_SUMMARY`, `t_USER`, `t_UID`, `t_USRGROUP`, `t_CAT`, `t_TIMESTAMP`, `t_PRIORITY`, `t_STATUS`) VALUES
(1, 'My keyboard is broken!', 'It has been doing funaaany things sss and IIIIII don''t know what to do, help!', 'Terrell Hale', 'thale', 'STAFF', 'HARDWARE', '01/09/2018 03:46', 0, 'CLOSED'),
(2, 'Resintall OFFICE', 'I can''t find Excel anymore on my PC, can you please have a check?', 'Szymon Singleton', 'ssingleton', 'STAFF', 'SOFTWARE', '23/09/2018 10:23', 3, 'IN PROGRESS'),
(3, 'Accessing company emails on my phone', 'How do I do this?', 'Tevin Blackwell', 'tblackwell', 'STAFF', 'SOFTWARE', '16/09/2018 18:28', 0, 'OPEN'),
(4, 'Install SPSS', 'Hi, I need SPSS ASAP, could you install it for me? Thanks!', 'Aarya Kearns', 'akearns', 'STAFF', 'SOFTWARE', '20/09/2018 23:01', 2, 'CLOSED'),
(5, 'Computer has been running SLOW', 'Not sure why so please send someone to have a look. TA', 'Aalia Preston', 'apreston', 'STAFF', 'SOFTWARE', '03/09/2018 02:53', 0, 'CLOSED'),
(6, 'Remote access', 'How to set up remote access to my office PC? Thanks.', 'Agata Brock', 'abrock', 'STAFF', 'SOFTWARE', '28/09/2018 14:01', 3, 'CLOSED'),
(7, 'Invoicing system is broken', 'Please fixed it ASAP!', 'Korben Peck', 'kpeck', 'STAFF', 'SOFTWARE', '16/09/2018 12:31', 0, 'CLOSED'),
(8, 'File system error', 'I got a message about file system corruption, what should I do now?', 'Karolina Collier', 'kcollier', 'STAFF', 'SOFTWARE', '20/09/2018 19:11', 3, 'CLOSED'),
(9, 'Data recovery', 'I accidentally deleted my report, could you help me restore it?', 'Loui Sanchez', 'lsanchez', 'STAFF', 'SOFTWARE', '30/09/2018 13:17', 0, 'IN PROGRESS'),
(10, 'Account locked', 'Can''t acces my email anymore, can you please investigagte? Thanks.', 'Mariana East', 'meast', 'STAFF', 'GENERAL', '07/09/2018 16:11', 3, 'CLOSED'),
(11, 'New staff account', 'We have a new part time staff Rita, please can you create an account for her? Thanks.', 'Kalvin Ford', 'kford', 'STAFF', 'GENERAL', '09/09/2018 05:14', 3, 'IN PROGRESS'),
(12, 'Access Intranet at home', 'How do I access intranet at home?', 'Harvey-Lee Hardy', 'hhardy', 'STAFF', 'GENERAL', '29/09/2018 19:31', 0, 'CLOSED'),
(13, 'Password reset', 'Hi I forgot my password, could you please reset it? Thanks!', 'Rita Reid', 'rreid', 'STAFF', 'GENERAL', '20/09/2018 13:07', 2, 'IN PROGRESS'),
(14, 'Change password', 'How can I do this when using my laptop? Thanks.', 'Denny Mccarthy', 'dmccarthy', 'STAFF', 'GENERAL', '06/09/2018 06:31', 0, 'OPEN'),
(15, NULL, NULL, 'Maksymilian Bridges', 'mbridges', 'STAFF', 'GENERAL', '01/10/2018 17:58', 2, 'OPEN'),
(16, NULL, NULL, 'Sasha Wooten', 'swooten', 'STAFF', 'GENERAL', '09/09/2018 00:36', 2, 'IN PROGRESS'),
(17, 'Account locked', 'Can''t acces my email anymore, can you please investigagte? Thanks.', 'Jill Sherman', 'jsherman', 'STAFF', 'GENERAL', '29/09/2018 23:34', 3, 'IN PROGRESS'),
(18, 'Internet is slow', 'It takes me ages to load a website in IE, do you have any idea why? Other people seem to be fine with their machines.', 'Marlie Sloan', 'msloan', 'STAFF', 'GENERAL', '15/09/2018 10:08', 0, 'OPEN'),
(19, 'Pop-up ads', 'I always get pop-up ads with any website I''m trying to access, is this normal?', 'Hassan Noel', 'hnoel', 'STAFF', 'SOFTWARE', '24/09/2018 02:27', 1, 'IN PROGRESS'),
(20, 'Local admin right', 'Hi, John said I should get local admin right for my work. Could you enable this for me? Thanks.', 'Jon Durham', 'jdurham', 'STAFF', 'SOFTWARE', '12/09/2018 20:16', 1, 'IN PROGRESS'),
(21, 'Calculator is missing', 'Where can I find the Calculator on Windows 10?', 'Leighton Camacho', 'lcamacho', 'STAFF', 'SOFTWARE', '07/09/2018 06:19', 3, 'OPEN'),
(22, 'Need a 4-way extension socket', 'I need one for a tele conference TOMORROW', 'Kathy Mullen', 'kmullen', 'STAFF', 'MISC', '14/09/2018 17:01', 1, 'OPEN'),
(23, 'Computer keeps restarting', 'It suddently happened yesterday and it is still doing it occasionally. Please could you send someone to have a look?', 'Shivani Tyson', 'styson', 'STAFF', 'HARDWARE', '25/09/2018 01:12', 1, 'OPEN'),
(24, 'Noises from the chasis', 'Hi guys, my machine is making unusual noises, could you have a look? Thanks.', 'Clay Hall', 'chall', 'STAFF', 'HARDWARE', '16/09/2018 17:34', 3, 'OPEN'),
(25, 'An additional monitor', 'Please purchase an additional monitor for me as I need it for my work. I got the approval number CX68. Thanks.', 'Isabell Hough', 'ihough', 'STAFF', 'HARDWARE', '19/09/2018 17:25', 2, 'OPEN'),
(26, 'Webcam stopped working', 'Please send someone to have a look ASAP as I need it for a SKYPE meeting in 1 hour.', 'Zubair Downes', 'zdownes', 'STAFF', 'HARDWARE', '13/09/2018 21:10', 0, 'OPEN'),
(27, 'What''s Jimmy''s extension?', 'The number in the system is wrong, can we have an update?', 'Kodi Rivera', 'krivera', 'STAFF', 'MISC', '30/09/2018 07:57', 0, 'CHECK'),
(28, 'Test', 'This is an internal testing message. Please IGNORE.', 'Aarron Vega', 'avega', 'STAFF', 'MISC', '22/09/2018 13:56', 0, 'CHECK'),
(29, 'Mouse replacement', 'The right click button is becoming sticky, could you send me a replacement? Thanks.', 'Thalia Welch', 'twelch', 'STAFF', 'HARDWARE', '28/09/2018 20:35', 1, 'CHECK'),
(30, 'Keyboard replacement', 'Hi I need a wireless keyboard instead of the standard one. Where I can get it? Thanks.', 'Rylan Crosby', 'rcrosby', 'STAFF', 'HARDWARE', '27/09/2018 20:56', 3, 'CHECK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
