-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 10:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_dep`
--

CREATE TABLE IF NOT EXISTS `add_dep` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `des` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_dep`
--

INSERT INTO `add_dep` (`id`, `hosid`, `dept`, `des`) VALUES
(1, 'kims@gmail.com', 'Cardiology', 'Nil'),
(2, 'kims@gmail.com', 'Neurology', 'Nil'),
(3, 'kims@gmail.com', 'Nephrology', 'Nil');

-- --------------------------------------------------------

--
-- Table structure for table `add_icu`
--

CREATE TABLE IF NOT EXISTS `add_icu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bed` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `bbed` varchar(50) NOT NULL,
  `nextavl` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `add_icu`
--

INSERT INTO `add_icu` (`id`, `hosid`, `dept`, `name`, `bed`, `des`, `bbed`, `nextavl`) VALUES
(1, 'kims@gmail.com', 'Cardiology ', 'Cardiac ICU', '10', 'Nil', '4', '6'),
(2, 'kims@gmail.com', 'Neurology ', 'Neuro Lab1', '8', 'Nil', '8', '0'),
(3, 'kims@gmail.com', 'Neurology ', 'Neuro Lab2', '5', 'Nil', '3', '2'),
(4, 'kims@gmail.com', 'Nephrology ', 'NPH ICU', '12', 'Nil', '2', '10');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE IF NOT EXISTS `ambulance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `ambu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `hid`, `ambu`) VALUES
(1, 'kims@gmail.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `hid`, `blood`) VALUES
(1, 'kims@gmail.com', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `blood_reg`
--

CREATE TABLE IF NOT EXISTS `blood_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `em` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `typ` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph1` varchar(150) NOT NULL,
  `ph2` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `hid`, `uid`, `des`, `status`) VALUES
(1, '', 'Appumaaman', 'sdfsfsfsd', ''),
(2, 'kims@gmail.com', 'Appumaaman', 'sdfdgdd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosreg`
--

CREATE TABLE IF NOT EXISTS `hosreg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hosreg`
--

INSERT INTO `hosreg` (`id`, `name`, `address`, `pin`, `district`, `email`, `land`, `mobile`, `uid`, `password`, `type`, `lattitude`, `longitude`, `photo`, `status`) VALUES
(1, 'KIMS', 'Kerala Institute of Medical Science\r\nP.B.No.1, Ana', '695029', 'trivandrum', 'relations@kimsglobal.com', '04713041312', '04713071938', 'kims@gmail.com', 'kims', 'private', '8.513628560363507', '76.90953254699707', '1.jpg', '1'),
(2, 'Ananthapuri Hospital', 'NH bypass, Chackai, Thiruvananthapuram, Kerala 695', '695024', 'trivandrum', 'ananthapurihri@vsnl.net', '04712579900', '04712506565', 'ahri@gmail.com', 'ahri', 'private', '8.486725219413499', '76.92766285214225', '2.jpg', '1'),
(3, 'PRS Hospital', 'NH 47, Killipalam, Thiruvananthapuram, Kerala 6950', '695002', 'trivandrum', 'admin@prshospital.com ', '04712344442', '04712344443', 'prs@gmail.com', 'prs', 'private', '8.480861591194726', '76.95931434631348', '3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `acc_id`, `hid`, `image`, `lattitude`, `longitude`, `status`, `dt`) VALUES
(1, 1, 'kims@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '3', '2018-03-10'),
(2, 1, 'ahri@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '4', '2018-03-10'),
(3, 1, 'prs@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '4', '2018-03-10'),
(4, 2, 'kims@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(5, 2, 'ahri@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(6, 2, 'prs@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(7, 3, 'kims@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '5', '2018-03-16'),
(8, 3, 'ahri@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '4', '2018-03-16'),
(9, 3, 'prs@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '4', '2018-03-16'),
(10, 4, 'kims@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '3', '2018-03-16'),
(11, 4, 'ahri@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '4', '2018-03-16'),
(12, 4, 'prs@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '4', '2018-03-16'),
(13, 8, 'kims@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '3', '2018-04-23'),
(14, 8, 'ahri@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '4', '2018-04-23'),
(15, 8, 'prs@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '4', '2018-04-23'),
(16, 10, 'kims@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(17, 10, 'ahri@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(18, 10, 'prs@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(19, 11, 'kims@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '2', '2018-06-01'),
(20, 11, 'ahri@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '0', '2018-06-01'),
(21, 11, 'prs@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '0', '2018-06-01'),
(22, 12, 'kims@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '1', '2018-06-01'),
(23, 12, 'ahri@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '0', '2018-06-01'),
(24, 12, 'prs@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '0', '2018-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `audio` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `new_patient`
--

CREATE TABLE IF NOT EXISTS `new_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` varchar(250) NOT NULL,
  `bar_code` varchar(250) NOT NULL,
  `info_todoc` text NOT NULL,
  `deses` text NOT NULL,
  `doc_descp` text NOT NULL,
  `tmp` varchar(20) NOT NULL,
  `wight` varchar(20) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `doc` varchar(250) NOT NULL,
  `dt1` date NOT NULL,
  `dt2` date NOT NULL,
  `mnth` varchar(200) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `new_patient`
--

INSERT INTO `new_patient` (`id`, `h_id`, `bar_code`, `info_todoc`, `deses`, `doc_descp`, `tmp`, `wight`, `bp`, `dep`, `doc`, `dt1`, `dt2`, `mnth`, `st`) VALUES
(1, 'kims', '695612-12-101-382', 'Body pain and heavy headache.', 'Fever', 'Nothing serious. need to tale rest.', '101', '75', '85-95', '6', 'gm@gmail.com', '2016-11-08', '0000-00-00', '', 1),
(2, 'kims', '695612-12-101-755', 'Cold, Fever, Body Pain', 'Fever', 'Provide Medicine, Need Good Rest', '101', '80', '95-105', '6', 'gm@gmail.com', '2016-11-08', '0000-00-00', '2016-11', 1),
(3, 'kims', '6965010-12-101-415', 'head ache', 'Multiple Sclerosis', 'need rest.', '102', '50', '100-125', '5', 'avp@gmail.com', '2016-11-12', '0000-00-00', '2016-11', 1),
(4, 'kims', '6965010-12-101-415', 'Head ache, Feaver', 'Allergy', 'Need to admit here', '103', '50', '100-125', '6', 'vl@gmail.com', '2016-11-15', '2016-11-18', '2016-11', 2),
(5, 'kims', '695101-12-123-947', 'Feaver, Headach, ', 'Allergy', 'take rest', '101', '52', '95-101', '6', 'vl@gmail.com', '2016-11-17', '0000-00-00', '2016-11', 1),
(6, 'ah101', '6965010-12-101-415', 'Head ache, Fever, ', 'Allergy', 'Need to observe the patient', '102', '52', '100-125', '6', 'sudha101', '2016-11-19', '0000-00-00', '2016-11', 2),
(9, 'kims', '695584-15-100-537', 'fever', 'Fever', 'need rest', '102', '75', '100-125', '6', 'vl@gmail.com', '2016-11-25', '0000-00-00', '2016-11', 1),
(10, 'kims', '695584-15-100-537', 'fever', 'Fever', 'need rest', '100', '50', '100-125', '6', 'vl@gmail.com', '2016-11-30', '0000-00-00', '2016-11', 1),
(11, 'kims', '695612-12-101-382', 'headache', 'Fever', 'take rest', '99', '52', '100-125', '6', 'vl@gmail.com', '2016-12-01', '0000-00-00', '2016-12', 1),
(12, 'kims', '695101-12-123-947', 'fever', '', '', '', '', '', '6', 'vl@gmail.com', '2016-12-01', '0000-00-00', '2016-12', 0),
(13, 'kims', '695584-15-100-537', 'test', 'Allergy', 'need rest', '103', '50', '100-125', '6', 'vl@gmail.com', '2016-12-03', '0000-00-00', '2016-12', 1),
(15, 'ah101', '6965010-12-101-415', 'kkk', 'Allergy', '', '', '', '', '1', 'pj@gmail.com', '2016-12-04', '0000-00-00', '2016-12', 0),
(16, 'kims', '695101-12-123-947', 'chuma', '', '', '', '', '', '1', 'pj@gmail.com', '2016-12-07', '0000-00-00', '2016-12', 0),
(17, 'kims', '695584-15-100-537', 'fever.', 'Fever', 'need rest. ', '102', '75', '100-125', '6', 'vl@gmail.com', '2017-01-01', '0000-00-00', '2017-01', 1),
(18, 'kims', '6965010-12-101-415', 'fever', '', '', '', '', '', '6', 'vl@gmail.com', '2017-01-03', '0000-00-00', '2017-01', 0),
(19, 'kims', '695528-5-356-886', 'fever', 'Fever', 'nee drest', '102', '52', '100-125', '6', 'vl@gmail.com', '2017-01-07', '0000-00-00', '2017-01', 1),
(20, 'kims', '691601-50-25-267', 'pain', '', 'need rest', '99', '52', '95-101', '13', 'oaj@gmaol.com', '2017-01-11', '0000-00-00', '2017-01', 2),
(21, 'kims', '695012-16-102-056', 'headache', '', '', '', '', '', '6', 'vl@gmail.com', '2017-01-21', '0000-00-00', '2017-01', 0),
(22, 'kims', '695101-12-101-142', 'pain', '', '', '', '', '', '1', 'meera@gmail.com', '2017-03-01', '0000-00-00', '2017-03', 0),
(23, 'kims', '695612-12-101-382', 'shvbm', '', '', '', '', '', '6', 'vl@gmail.com', '2018-02-11', '0000-00-00', '2018-02', 0),
(24, 'kims', '6788987-11-11-787', 'bgyhgbunh', '', '', '', '', '', '1', 'pj@gmail.com', '2018-03-10', '0000-00-00', '2018-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE IF NOT EXISTS `staff_reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `addrs` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`id`, `hosid`, `dept`, `name`, `dob`, `gender`, `addrs`, `mobile`, `email`, `uid`, `pwd`, `pic`) VALUES
(1, 'kims@gmail.com', 'All', 'Venugopal', '1982-10-05', 'male', 'Venu Bhavan\r\nKilimanoor\r\nTrivandrum', '9446563002', 'venu@gmail.com', 'venu@gmail.com', 'venu', 'venu@gmail.com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_communi`
--

CREATE TABLE IF NOT EXISTS `user_communi` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `cid` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `msgfrm` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_communi`
--

INSERT INTO `user_communi` (`id`, `cid`, `msg`, `msgfrm`) VALUES
(1, '', '1', 'JL72'),
(2, '', '1', 'JL72'),
(3, 'JL72', 'heloooo', 'user'),
(4, 'JL72', 'Yes tel me the details', 'hospital'),
(5, 'JL72', 'we r on the way', 'user'),
(6, 'JL72', 'ok ok came fast', 'hospital'),
(7, 'SDXE', 'hi<br />\r\n', 'hospital'),
(8, '2318', 'heloooo<br />\r\n', 'user'),
(9, '2318', 'dsfdsf<br />\r\n', 'user'),
(10, '2318', 'sdfsdfsdfds', 'user'),
(11, '2318', 'dfdfgfd<br />\r\n', 'user'),
(12, '2318', 'adasdasd', 'hospital'),
(13, '2318', 'entha', 'hospital'),
(14, '2318', 'ayyada', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `uid`, `pwd`, `type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'kims@gmail.com', 'kims', 'hospital', '1'),
(3, 'ahri@gmail.com', 'ahri', 'hospital', '1'),
(4, 'prs@gmail.com', 'prs', 'hospital', '1'),
(5, 'venu@gmail.com', 'venu', 'staff', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ventilator`
--

CREATE TABLE IF NOT EXISTS `ventilator` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `ventilator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ventilator`
--

INSERT INTO `ventilator` (`id`, `hid`, `ventilator`) VALUES
(1, 'kims@gmail.com', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
