-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 12:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webenglab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `sl` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` varchar(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `staddress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(250) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `degree` varchar(225) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `cv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`sl`, `username`, `password`, `admin`, `firstname`, `lastname`, `email`, `phone`, `web`, `dob`, `address`, `staddress`, `city`, `province`, `postal`, `country`, `gender`, `bio`, `interest`, `salary`, `degree`, `experience`, `designation`, `cv`) VALUES
(45, 'atiqur', '6a4ad2086ded9b7c6d5ad908c845808a', '1', 'Md Atiqur', 'Rahman', 'atiqur@ru.ac.bd', '01918395969', 'http://www.atiqur.com.bd', '1989-03-15', 'ICT Center', 'Paris Road', 'RU', 'rajshahi', '6205', 'Bangladesh', 'Male', 'wait soon', 'IT Division,Other,', '3333', 'B Sc', '8', 'Assistant Network Engineer', '1581150756-72-1569158907.pdf'),
(46, 'sohag', 'f981615a98c2f1bfafc148ec99dee3ee', '', 'sohag', 'hosen', 'sohag@ru.ac.bd', '01918395969', 'http://www.sohag.com.bd', '2005-02-08', 'Thakurgaon', 'Joypurhat', 'rajshahi', 'rajshahi', '6205', 'Bangladesh', 'Male', 'wait', 'IT Division,Other,', '100000', 'M Sc', '7', 'Assistant Network Engineer', '1581151559-46-ADMS.pdf'),
(47, 'popel', '32c2999174afdc9d6dfa4fc31f757840', '', 'popel', 'popel', 'popel@ru.ac.bd', '66666666666', 'www.popel.ac.bd', '2020-02-08', 'rakib', 'rakib', 'rakib', 'rakib', 'rakib', 'Bangladesh', 'Male', 'popel', 'IT Division,', '77777', 'B Sc', '6', 'rakib rakib', '1581153107-93-stp.pdf'),
(48, 'limu', '8a3d0beb144b19016f8282256210eb77', '', 'limu', '1', 'limu@ru.a.c.bd', '11111111111', 'http://www.limu.com.bd', '2017-02-08', 'rajshahi', 'zigatola', 'road#2', 'no', 'no', 'Bangladesh', 'Male', 'limu', 'HR Division,IT Division,Marketing Division,', '1111', 'BBA', '6', 'none', '1581161868-27-bgp.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
