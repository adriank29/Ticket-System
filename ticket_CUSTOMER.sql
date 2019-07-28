-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 10:15 PM
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
-- Table structure for table `ticket_CUSTOMER`
--

CREATE TABLE IF NOT EXISTS `ticket_CUSTOMER` (
  `t_ID` int(2) NOT NULL AUTO_INCREMENT,
  `t_TITLE` varchar(255) DEFAULT NULL,
  `t_SUMMARY` varchar(255) DEFAULT NULL,
  `t_USER` varchar(255) DEFAULT NULL,
  `t_UID` int(6) DEFAULT NULL,
  `t_USRGROUP` varchar(8) DEFAULT NULL,
  `t_CAT` varchar(9) DEFAULT NULL,
  `t_TIMESTAMP` varchar(16) DEFAULT NULL,
  `t_PRIORITY` int(1) DEFAULT NULL,
  `t_STATUS` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`t_ID`),
  UNIQUE KEY `user_uid_pair` (`t_USER`,`t_UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ticket_CUSTOMER`
--

INSERT INTO `ticket_CUSTOMER` (`t_ID`, `t_TITLE`, `t_SUMMARY`, `t_USER`, `t_UID`, `t_USRGROUP`, `t_CAT`, `t_TIMESTAMP`, `t_PRIORITY`, `t_STATUS`) VALUES
(1, 'Unable to place order using your software', 'The button is grey, why is it disabled?', 'Anne Richardson', 890304, 'CUSTOMER', 'TECHNICAL', '03/10/2018 16:19', 3, 'IN PROGRESS'),
(2, 'Line is ALWAYS busy', 'Why is your support line always busy?', 'Shirley Long', 802436, 'CUSTOMER', 'TECHNICAL', '04/10/2018 15:30', 0, 'FOLLOW'),
(3, 'Order is missing', 'Please check order id c903366 as it was placed 2 weeks ago andI haven''t received anything yet./', 'Michael Reed', 692467, 'CUSTOMER', 'ORDER', '04/10/2018 22:19', 1, 'CLOSED'),
(4, 'Cancel my order u900112', 'Please make sure it will be cancelled as it was a mistake.', 'Stephanie Lopez', 893835, 'CUSTOMER', 'ORDER', '06/10/2018 12:13', 0, 'IN PROGRESS'),
(5, 'Amend order p836542', 'Please can you help me amend the quantity of kitchen rolls to 5?', 'Phyllis Brooks', 661348, 'CUSTOMER', 'ORDER', '07/10/2018 05:21', 3, 'IN PROGRESS'),
(6, 'Cancel my order q700363', 'Please help me cancel it as I don''t have the option.', 'Daniel Wilson', 750343, 'CUSTOMER', 'ORDER', '07/10/2018 11:48', 1, 'IN PROGRESS'),
(7, 'Unable to place order through your online form', 'It says 404. Please fixed it ASAP!', 'Lillian Powell', 776900, 'CUSTOMER', 'ORDER', '08/10/2018 09:15', 0, 'IN PROGRESS'),
(8, 'Missing manual', 'Please can you supply manual for item 36452?', 'Emily Ross', 626523, 'CUSTOMER', 'TECHNICAL', '09/10/2018 21:21', 3, 'IN PROGRESS'),
(9, 'Wrong products', 'We ordered all small sizes but you sent us two large ones.', 'Brandon Gonzales', 667401, 'CUSTOMER', 'TECHNICAL', '13/10/2018 12:27', 2, 'FOLLOW'),
(10, 'Double charges', 'You charged me twice for the same order, please can you refund me?', 'Pamela Rogers', 793759, 'CUSTOMER', 'PAYMENT', '13/10/2018 15:36', 3, 'IN PROGRESS'),
(11, 'Account locked', 'My trade account is locked, what happened?', 'Richard Flores', 740248, 'CUSTOMER', 'TECHNICAL', '21/10/2018 18:45', 2, 'FOLLOW'),
(12, 'Account locked', 'My trade account is locked, what happened?', 'Wayne Morris', 700912, 'CUSTOMER', 'TECHNICAL', '25/10/2018 12:17', 1, 'IN PROGRESS'),
(13, 'Password reset', 'Hi I forgot my password, could you please reset it? Thanks!', 'Donna Cox', 661621, 'CUSTOMER', 'TECHNICAL', '26/10/2018 03:59', 2, 'FOLLOW'),
(14, 'Wrong invoice sent', 'This isn''t what we agreed over the phone. Please review it again.', 'Peter Mitchell', 757113, 'CUSTOMER', 'PAYMENT', '27/10/2018 01:03', 1, 'CLOSED'),
(15, 'Card payment', 'Why can''t you accept credit card payment?', 'Raymond Harris', 842897, 'CUSTOMER', 'PAYMENT', '29/10/2018 05:51', 2, 'CLOSED'),
(16, 'Wrong invoice sent', 'You sent the wrong one to us!', 'Earl Brown', 852558, 'CUSTOMER', 'PAYMENT', '29/10/2018 11:36', 0, 'FOLLOW'),
(17, 'Unable to pay over the phone', 'Do you take cheques then?', 'Willie Ramirez', 842114, 'CUSTOMER', 'PAYMENT', '31/10/2018 02:20', 2, 'FOLLOW'),
(18, 'New trade account', 'Please can I merge my invoice into the new account?', 'Andrea Young', 789314, 'CUSTOMER', 'PAYMENT', '01/11/2018 00:28', 1, 'CLOSED'),
(19, 'New trade account', 'Please can I merge my invoice into the new account?', 'Steven Davis', 668146, 'CUSTOMER', 'PAYMENT', '01/11/2018 01:08', 3, 'FOLLOW'),
(20, 'Cheques', 'Do you accept cheques?', 'Albert Jackson', 712795, 'CUSTOMER', 'PAYMENT', '02/11/2018 17:28', 0, 'FOLLOW'),
(21, 'Paypal', 'Can I paypal?', 'Doris Clark', 657040, 'CUSTOMER', 'PAYMENT', '03/11/2018 14:52', 2, 'CLOSED'),
(22, 'Sample packs', 'Do you charge for P&P?', 'Jerry Johnson', 841409, 'CUSTOMER', 'GENERAL', '06/11/2018 07:10', 1, 'CLOSED'),
(23, 'Discounts', 'Do you offer bulk purchase discount?', 'Patricia Wright', 711596, 'CUSTOMER', 'GENERAL', '07/11/2018 04:40', 1, 'CLOSED'),
(24, 'Samples', 'Do you have samples for item 67891', 'Angela Taylor', 814863, 'CUSTOMER', 'GENERAL', '07/11/2018 22:15', 2, 'CLOSED'),
(25, 'Samples', 'Do you have samples for item 67892', 'Benjamin Williams', 623933, 'CUSTOMER', 'GENERAL', '09/11/2018 17:05', 3, 'CLOSED'),
(26, 'Distributors', 'Are you Toby''s distributor?', 'Shawn Bennett', 704149, 'CUSTOMER', 'GENERAL', '12/11/2018 06:59', 3, 'CLOSED'),
(27, 'Dealership', 'Do you accept dealers?', 'Laura Jenkins', 834431, 'CUSTOMER', 'GENERAL', '12/11/2018 17:53', 0, 'OPEN'),
(28, 'Free samples', 'Do you do free samples?', 'Brian Anderson', 791801, 'CUSTOMER', 'GENERAL', '15/11/2018 10:40', 3, 'OPEN'),
(29, 'Samples', 'I''d like to have some samples please.', 'Lori Carter', 710102, 'CUSTOMER', 'GENERAL', '17/11/2018 18:21', 3, 'OPEN'),
(30, 'Samples', 'Can I order some samples from you?', 'Melissa Hughes', 750554, 'CUSTOMER', 'GENERAL', '18/11/2018 02:13', 1, 'OPEN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
