-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 05:12 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`admin_id`, `firstname`, `lastname`, `contact`, `username`, `password`) VALUES
(1, 'chekwube', 'okafor', '', 'admin', 'admin'),
(2, 'Nwaeze', 'okolie', '8034565344', 'oko', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tb`
--

CREATE TABLE IF NOT EXISTS `cat_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `symptoms` text NOT NULL,
  `drugs` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cat_tb`
--

INSERT INTO `cat_tb` (`id`, `name`, `symptoms`, `drugs`, `description`) VALUES
(1, 'Plasmodium Ovals', 'High Fever, Headach', 'Concurrent Chloroquine and Primaquine', 'This Very Deadly Malaria');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'cynthia Emma', 'cynthia@yahoo.com', 'Visa Procession', 'How to Register'),
(2, 'Okolo Chika', 'okolo@yahoo.com', 'EEDC Tariff Rate', 'Pls the tariff Rate is much on us');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE IF NOT EXISTS `customer_tb` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(50) NOT NULL,
  `names` varchar(225) NOT NULL,
  `service_address` varchar(225) NOT NULL,
  `tariff_code` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `account_no` (`account_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`customer_id`, `account_no`, `names`, `service_address`, `tariff_code`, `phone`, `email`, `username`, `password`) VALUES
(1, 'EEDC:1109924760', 'Okolo Chika Franca', '22 Okigwe Street, Onitsha', 'R1', '08034544434', 'okolo@yahoo.com', 'okolo@yahoo.com', 'okolo2016'),
(2, '', 'Emeka Okolo', 'Ansu Road, Ihiala anambra', '', '08978777777', 'emeka@yahoo.com', 'emeka@yahoo.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tb`
--

CREATE TABLE IF NOT EXISTS `invoice_tb` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `names` varchar(50) NOT NULL,
  `service_address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tariff_code` varchar(10) NOT NULL,
  `energy` float(8,2) NOT NULL,
  `metre` float(8,2) NOT NULL,
  `fixed_charge` float(8,2) NOT NULL,
  `minimum_charge` float(8,2) NOT NULL,
  `consumption_charge` float(8,2) NOT NULL,
  `vat` float(8,2) NOT NULL,
  `demand_level` int(11) NOT NULL,
  `total_due` float(8,2) NOT NULL,
  `invoice_date` date NOT NULL,
  `transaction_code` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'not paid',
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invoice_tb`
--

INSERT INTO `invoice_tb` (`invoice_id`, `user_id`, `account_no`, `names`, `service_address`, `phone`, `tariff_code`, `energy`, `metre`, `fixed_charge`, `minimum_charge`, `consumption_charge`, `vat`, `demand_level`, `total_due`, `invoice_date`, `transaction_code`, `status`) VALUES
(1, 1, 'EEDC:1109924760', 'Okolo Chika Franca', '22 Okigwe Street, Onitsha', '08034544434', 'R1', 1.30, 154.00, 31.00, 31.00, 300.00, 1.15, 5, 2114.35, '2016-07-06', '585128', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE IF NOT EXISTS `payment_tb` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `teller_no` varchar(10) NOT NULL,
  `amount_paid` float(8,2) NOT NULL,
  `date_paid` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment_tb`
--

INSERT INTO `payment_tb` (`payment_id`, `invoice_id`, `user_id`, `bank`, `teller_no`, `amount_paid`, `date_paid`) VALUES
(4, 1, 1, 'Eco Bank ', '2011021', 2114.35, '2016-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tariff_tb`
--

CREATE TABLE IF NOT EXISTS `tariff_tb` (
  `tariff_id` int(11) NOT NULL AUTO_INCREMENT,
  `tariff_code` varchar(10) NOT NULL,
  `energy` float NOT NULL,
  `metre_maintenance` float(8,2) NOT NULL,
  `fixed_charge` float(8,2) NOT NULL,
  `minimum_charge` float(8,2) NOT NULL,
  `consumption_charge` float(8,2) NOT NULL,
  `vat` float(8,2) NOT NULL,
  PRIMARY KEY (`tariff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tariff_tb`
--

INSERT INTO `tariff_tb` (`tariff_id`, `tariff_code`, `energy`, `metre_maintenance`, `fixed_charge`, `minimum_charge`, `consumption_charge`, `vat`) VALUES
(1, 'R1', 1.3, 154.00, 31.00, 31.00, 300.00, 1.15),
(2, 'R2', 4.4, 154.00, 46.00, 46.00, 400.00, 1.15),
(3, 'C1', 7.4, 153.00, 138.00, 138.00, 400.00, 1.15),
(4, 'C2', 9.7, 153.00, 184.00, 184.00, 500.00, 1.15),
(5, 'D1', 7.9, 151.00, 136.00, 136.00, 500.00, 1.15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
