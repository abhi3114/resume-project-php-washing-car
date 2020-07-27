-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 03:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washingcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `mobile`, `email`, `password`, `cpassword`) VALUES
(5, 'abhishek', 'ravindra', 'chavan', 'male', '30/03/1996', '9869011741', 'chavan204@gmail.com', 'abhi3718', 'abhi3718'),
(7, 'pratik', 'anil', 'joil', 'male', '30/03/1996', '9869011741', 'pratikjoil999@gmail.com', 'pratik999', 'pratik999');

-- --------------------------------------------------------

--
-- Table structure for table `twowheeler`
--

CREATE TABLE `twowheeler` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `vtype` varchar(20) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vnumber` varchar(15) NOT NULL,
  `wtype` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `amobile` varchar(10) DEFAULT NULL,
  `day` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `timing` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twowheeler`
--

INSERT INTO `twowheeler` (`name`, `email`, `vtype`, `vname`, `vnumber`, `wtype`, `mobile`, `amobile`, `day`, `date`, `payment`, `timing`) VALUES
('abhishek', 'chavan204@gmail.com', 'Two Wheeler', 'honda city', 'mh-06-ag-3114', 'Express 1', '9869011741', '9920839370', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet Schedule'),
('abhishek', 'chavan204@gmail.com', 'Two Wheeler', 'shine', 'mh-06-ag-3115', 'Express 1', '9224918420', '9920839370', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet Schedule'),
('abhishek', 'chavan204@gmail.com', 'Two Wheeler', 'shine', 'mh-06-ag-31', 'Express 1', '9869011741', '9920839370', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet Schedule'),
('abhishek', 'chavan204@gmail.com', 'Three Wheeler', 'honda city', 'mh-06-ag-3114', 'Express 1', '9869011741', '9920839370', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet Schedule'),
('abhishek', 'chavan204@gmail.com', 'Three Wheeler', 'mh-06-ag-3114', 'honda city', 'Express 1', '9869011741', '9920839370', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet Schedule'),
('pratik', 'pratikjoil999@gmail.com', 'Three Wheeler', 'risk', 'mh-06-ag-3115', 'Express 1', '9869011741', '', 'Monday', '30-03-2015', 'NOT DONE', 'Not yet schedule'),
('pratik', 'pratikjoil999@gmail.com', 'Two Wheeler', 'passion plus', 'mh-06-ag-3115', 'Express 1', '9869011741', '9920839370', 'Wednesday', '30-03-2015', 'NOT DONE', 'Not yet schedule'),
('abhishek', 'chavan204@gmail.com', 'Four Wheeler', 'waganor', 'mh-07-ag-997', 'Express 1', '9869011741', '9920839370', 'Wednesday', '13-11-17', 'NOT DONE', 'Not yet schedule');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
