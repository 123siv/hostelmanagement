-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 01, 2020 at 06:19 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` int(10) NOT NULL AUTO_INCREMENT,
  `hostel_loc_id` varchar(30) DEFAULT NULL,
  `hostel_floor` int(2) DEFAULT NULL,
  `hostel_name` varchar(30) DEFAULT NULL,
  `hostel_desc` varchar(100) NOT NULL,
  `hostel_type` varchar(6) DEFAULT NULL,
  `hostel_email` varchar(30) DEFAULT NULL,
  `hostel_address` varchar(100) DEFAULT NULL,
  `hostel_contact` varchar(15) DEFAULT NULL,
  `hostel_photo` varchar(40) NOT NULL,
  `hostel_status` char(1) DEFAULT 'a',
  PRIMARY KEY (`hostel_id`),
  UNIQUE KEY `hostel_email` (`hostel_email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_loc_id`, `hostel_floor`, `hostel_name`, `hostel_desc`, `hostel_type`, `hostel_email`, `hostel_address`, `hostel_contact`, `hostel_photo`, `hostel_status`) VALUES
(16, '7', 3, 'MARIYA hostel', 'very friendly and fresh surroundings', 'ladies', 'mariya@gmail.com', 'Mariya hostel \r\nmanorama ', '9846110100', '80470940b578f211eecb896474c297fa.jpg', 'b'),
(15, '8', 2, 'Jhons Hostel', 'Calm and quiet surroundings.\r\nsmoking.drinking are not allowed', 'gents', 'jhons@gmail.com', 'jhons hostel\r\nkaloor (jn)\r\nernakulam ', '9846210210', '238c36b31d0d637f5a6d87a8257d9e03.jpg', 'a'),
(14, '7', 1, 'paradise', 'No smoking ,No drinking they are strictly avoided.Very friendly surrounding.', 'gents', 'paradise@gmail.com', 'kadavntara giringar', '9846100101', '05d519cf227f1dd2d7eb981757ab7a6a.jpg', 'a'),
(13, '8', 2, 'Maya\'s Nest', 'peacefull freedom and commonly restricted rules.', 'ladies', 'mayasnest@gmail.com', 'Maya\'s Nest\r\nkaloor jn ernakulam', '9846200200', '743a1dc98d0f348550b91592de99ff69.jpg', 'a'),
(12, '10', 2, 'Wanders hostel', 'No smoking\r\nNo drinking\r\nNo other activities allowed in this hostel', 'ladies', 'wandershostel@gmail.com', 'wanders hostel panampilly nagar \r\nkadavanthra', '9846100100', 'cfdb9771c8b74af4f949319ca0fea830.jpg', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `loc_id` int(5) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(30) DEFAULT NULL,
  `loc_status` char(2) DEFAULT NULL,
  PRIMARY KEY (`loc_id`),
  UNIQUE KEY `loc_name` (`loc_name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`, `loc_status`) VALUES
(7, 'kadavanthara', NULL),
(8, 'kaloor', NULL),
(9, 'manorama', NULL),
(10, 'panampilly nagar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(5) NOT NULL AUTO_INCREMENT,
  `log_email` varchar(50) DEFAULT NULL,
  `log_pwd` varchar(50) DEFAULT NULL,
  `log_utype` varchar(10) NOT NULL,
  `log_status` char(2) NOT NULL DEFAULT 'a',
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `log_email` (`log_email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `log_email`, `log_pwd`, `log_utype`, `log_status`) VALUES
(2, 'techbot@gmail.com', 'qwerty', 'admin', 'a'),
(3, 'paradise@gmail.com', 'qwerty', 'hostel', 'a'),
(4, 'mayasnest@gmail.com', 'qwerty', 'hostel', 'a'),
(5, 'wandershostel@gmail.com', 'qwerty', 'hostel', 'a'),
(6, 'jhons@gmail.com', 'qwerty', 'hostel', 'a'),
(7, 'mariya@gmail.com', 'qwerty', 'hostel', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(5) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) DEFAULT NULL,
  `room_cond` varchar(15) DEFAULT NULL,
  `room_rent_food` int(5) NOT NULL,
  `room_rent_notfood` int(5) NOT NULL,
  `room_capacity` int(5) NOT NULL,
  `room_desc` varchar(30) NOT NULL,
  `room_hostel_id` int(5) NOT NULL,
  `room_vacancy` int(5) NOT NULL,
  `room_bath_type` varchar(15) NOT NULL,
  `room_photo` varchar(50) NOT NULL,
  `room_status` char(2) DEFAULT 'a',
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `room_cond`, `room_rent_food`, `room_rent_notfood`, `room_capacity`, `room_desc`, `room_hostel_id`, `room_vacancy`, `room_bath_type`, `room_photo`, `room_status`) VALUES
(28, 'singlebed', 'Air Condition', 6000, 5000, 2, 'clean and fresh .calm and quie', 16, 1, 'Bath type', '4c164a8e2e68c1a21f0a867a0bbeb0f4.jpg', 'a'),
(27, 'doublebed', 'Air Condition', 5000, 6000, 6, 'good room from us.............', 14, 5, 'Bath type', 'a3ae55c8098b964d5c0ef09ad1ced50f.jpg', 'b'),
(26, 'doublebed', 'Air Condition', 5000, 3500, 3, 'Bed sheets are provided.fresh ', 15, 2, 'Bath type', '273f6db365a4ba9fffce991bc231347b.jpg', 'a'),
(25, 'singlebed', 'Air Condition', 6000, 4000, 1, 'Bed sheets are provided . fres', 15, 1, 'Bath type', 'a9eebc7ef89f50641901f2a0c5c61bbc.jpg', 'a'),
(24, 'triplebed', 'Air Condition', 4000, 3000, 3, 'well  cleaned and fresh condit', 12, 3, 'Bath type', '4a84f4b9e10c4f4fd417865c614af975.jpg', 'a'),
(23, 'doublebed', 'Air Condition', 5000, 5000, 1, 'good room from us.............', 14, 5, 'Bath type', '09207d7978fa2fa029ee3604a23ad2ba.jpg', 'a'),
(22, 'doorm', 'Air Condition', 5000, 3500, 10, ' Its a Dorm Room so there will', 13, 5, 'not Bath type', '2a3f35f1e509956c6d54cff0ea43871b.jpg', 'a'),
(21, 'singlebed', 'Air Condition', 5000, 4000, 5, 'Well cleaned room with bed and', 12, 3, 'Bath type', 'd52104fd682b93b7c4a50abc226a611a.jpg', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
