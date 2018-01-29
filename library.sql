-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 09:44 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookno` varchar(20) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `issued` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bookno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookno`, `isbn`, `title`, `author`, `publisher`, `price`, `issued`) VALUES
('1565', '457854578445', 'The Fog', 'James Herbert', 'Penguine Classics', '459', 1),
('1566', '4578545', 'Gullivers Travel', 'Jonathan Swift', 'Tree Books', '399', 0),
('1567', '45782145', 'Robinson Crisoe', 'Daniel Difoe', 'Crew Cat', '799', 0),
('1568', '32654578', 'ANSI C', 'Balagurusamy', 'Classic Publishers', '349', 0),
('1569', '65124578', 'The Complete Refernce PHP', 'Steve Holzner', 'Raw Books', '559', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_register`
--

CREATE TABLE IF NOT EXISTS `issue_register` (
  `bookno` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `stud_name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `rdate` date NOT NULL,
  PRIMARY KEY (`bookno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_register`
--

INSERT INTO `issue_register` (`bookno`, `title`, `regno`, `stud_name`, `date`, `rdate`) VALUES
('1565', 'The Fog', '360', 'Amith', '2017-11-07', '2017-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `login_staff`
--

CREATE TABLE IF NOT EXISTS `login_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `staff_email` varchar(40) NOT NULL,
  `staff_mobile` varchar(10) NOT NULL,
  `staff_user` varchar(40) NOT NULL,
  `staff_password` varchar(40) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login_staff`
--

INSERT INTO `login_staff` (`staff_id`, `staff_name`, `department`, `staff_email`, `staff_mobile`, `staff_user`, `staff_password`) VALUES
(3, 'Ashique', 'MCA', 'ashique@gmail.com', '99576652', 'ashique', '1234'),
(4, 'Saju', 'MCA', 'saju@gmail.com', '8943522458', 'saju', '1234'),
(5, 'Joseph Zacharia', 'MCA', 'joseph@gmail.com', '7845788512', 'joseph', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE IF NOT EXISTS `login_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(10) NOT NULL,
  `stu_name` varchar(40) NOT NULL,
  `class` varchar(10) NOT NULL,
  `stud_user` varchar(40) NOT NULL,
  `stud_password` varchar(40) NOT NULL,
  `fine` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`id`, `regno`, `stu_name`, `class`, `stud_user`, `stud_password`, `fine`) VALUES
(5, '360', 'Amith', 'S3', 'amith', '123', 0),
(6, '361', 'Akshay Narayan', 'S3', 'akshay', '123', 0),
(7, '362', 'Anjali', 'S3', 'anjali', '123', 0),
(8, '364', 'James Jacob', 'S3', 'james', '123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
