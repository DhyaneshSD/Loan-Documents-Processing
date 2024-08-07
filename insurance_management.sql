-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2021 at 02:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insurance_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `email_id` varchar(300) NOT NULL,
  `password` varchar(10) NOT NULL,
  `contact_no` int(10) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email_id`, `password`, `contact_no`) VALUES
('admin1@gmail.com', 'admin1', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `applied_policies`
--

CREATE TABLE IF NOT EXISTS `applied_policies` (
  `Sr_no` int(255) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(300) NOT NULL,
  `Fullname` text NOT NULL,
  `cust_address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `contact_no` int(255) NOT NULL,
  `nationality` text NOT NULL,
  `cust_age` int(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `guardian_name` text NOT NULL,
  `adhaar_no` int(255) NOT NULL,
  `pan_no` int(255) NOT NULL,
  `nominee_nm` text NOT NULL,
  `nominee_age` int(255) NOT NULL,
  `nominee_email` varchar(400) NOT NULL,
  `nominee_address` text NOT NULL,
  `policy_name` text NOT NULL,
  `policy_type` text NOT NULL,
  `policy_period` int(255) NOT NULL,
  `premium_paid` int(255) NOT NULL,
  `tenure` date NOT NULL,
  `maturity` date NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`Sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `applied_policies`
--

INSERT INTO `applied_policies` (`Sr_no`, `email_id`, `Fullname`, `cust_address`, `city`, `state`, `country`, `contact_no`, `nationality`, `cust_age`, `dob`, `gender`, `guardian_name`, `adhaar_no`, `pan_no`, `nominee_nm`, `nominee_age`, `nominee_email`, `nominee_address`, `policy_name`, `policy_type`, `policy_period`, `premium_paid`, `tenure`, `maturity`, `status`) VALUES
(8, 'mayuresh@gmail.com', 'Mayuresh', 'Ahmednagar', 'Ahmednagar', 'Maharastra', 'India', 2147483647, 'Indian', 18, '2021-09-14', 'male', 'Mahendra Firodiya', 456123, 789654, 'Mahendra Firodiya', 45, 'mahendra@gmail.com', 'Ahmednagar', 'LIC term life insurance', 'Life insurance', 8, 50000, '2021-09-14', '2029-09-14', 'Approved'),
(14, 'mayuresh@gmail.com', 'Mayuresh Firodiya', 'Ahmednagar', 'Ahmednagar', 'Maharastra', 'India', 2147483647, 'Indian', 18, '2003-04-19', 'male', 'Mahendra Firodiya', 456123, 789123, 'Mahendra Firodiya', 45, 'mahendra@gmail.com', 'Ahmednagar', 'HDFC Life Insurance', 'Life Insurance', 40, 6000, '2021-09-15', '2061-09-15', 'Approved'),
(24, 'mayuresh@gmail.com', 'Mayuresh Firodiya', 'Ahmednagr', 'Ahmednagar', 'Maharastra', 'India', 2147483647, 'Indian', 18, '2003-04-19', 'male', 'Mahendar Firodiya ', 458987, 121256, 'Mahendra Firodiya', 45, 'mahendra@gmail.com', 'Ahmednagar', 'SBI Home Insurance', 'Home Insurance', 15, 3500, '2021-09-15', '2036-09-15', 'Under scrutiny');

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_policies`
--

CREATE TABLE IF NOT EXISTS `apply_for_policies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` text NOT NULL,
  `policy_type` text NOT NULL,
  `tenure` int(2) NOT NULL,
  `premium` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `apply_for_policies`
--

INSERT INTO `apply_for_policies` (`ID`, `policy_name`, `policy_type`, `tenure`, `premium`) VALUES
(1, 'General Motor Insurance', 'Vehicle Insurance', 7, 7500),
(2, 'HDFC Ergo Insurance', 'Two wheeler insurance', 5, 2000),
(3, 'HDFC Life Insurance', 'Life Insurance', 40, 6000),
(4, 'One Assistant Mobile Insurance', 'Mobile Insurance', 2, 2700),
(5, 'SBI Home Insurance', 'Home Insurance', 15, 3500),
(6, 'SBI Life Insurance', 'Life Insurance', 10, 5500),
(7, 'Star Health Insurance', 'Health Insurance', 2, 5000),
(9, 'LIC term life insurance', 'Life insurance', 8, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` text NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `feedback_date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email_id`, `feedback_date`, `message`) VALUES
('Mayuresh Firodiya', 'mayuresh@gmail.com', '2021-09-15', 'Amazing Service!!!');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(400) NOT NULL,
  `name` text NOT NULL,
  `dt` date NOT NULL,
  `query` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sr_no`, `email_id`, `name`, `dt`, `query`, `reply`) VALUES
(10, 'mayuresh@gmail.com', 'Mayuresh Firodiya', '2021-09-14', 'If i want to break the policy in middle, will it be OK', 'Yes, you can break the policy in middle, but for some reason.'),
(17, 'mayuresh@gmail.com', 'Mayuresh Firodiya', '2021-09-15', 'Can i get Tax Benefit, if i apply for an Insurance ?', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `fullname` text NOT NULL,
  `mobile_no.` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `mobile_no.`, `email`, `password`) VALUES
('Mayuresh Firodiya', 2147483647, 'mayuresh@gmail.com', 'May');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `email_id` varchar(300) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`email_id`, `password`) VALUES
('mayuresh@gmail.com', 'May');
