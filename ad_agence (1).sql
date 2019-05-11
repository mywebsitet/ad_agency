-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 03:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad_agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_detals`
--

CREATE TABLE `add_detals` (
  `s_no` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_upload` varchar(60) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `delete_d` int(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `upload` date NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_detals`
--

INSERT INTO `add_detals` (`s_no`, `p_name`, `p_upload`, `product_details`, `delete_d`, `email`, `upload`, `e_date`) VALUES
(1, 'parle-G', '925036427-549455-1.jpg', 'Parle Gluco Biscuits - Parle-G 70 gm Pouch\r\nâ‚¹ 4', 0, 'parleg@gmail.com', '2018-05-28', '2018-06-30'),
(2, 'Parle Monaco Biscuit', '811LL3daqoL._SL1500_.jpg', '\r\nParle Monaco Biscuit, Classic, 75.4g\r\nRS-10/-', 1, 'parleg@gmail.com', '2018-05-28', '2018-07-05'),
(3, 'Horlicks Chocolate', 'horlicks-chocolate-health-drink-500-gm.jpg', 'Horlicks Chocolate Health Drink - 500 Gm\r\nRs219.00', 0, 'boton@gmail.com', '2018-05-29', '2018-07-04'),
(4, 'horlick', 'hor0152.jpg', 'Horlicks Classic Malt Refill Pack 750g\r\nR.S 295.00', 0, 'boton@gmail.com', '2018-05-29', '2018-07-05'),
(5, 'Mothers Horlicks', 'mother-s-horlicks-refill-520x520.jpg', '  HORLICKS MOTHER VANILLA POWDER  500-gm\r\nR.s :451/-', 0, 'boton@gmail.com', '2018-05-30', '0000-00-00'),
(6, '', 'mother-s-horlicks-refill-520x520.jpg', '', 1, 'boton@gmail.com', '2018-05-30', '0000-00-00'),
(7, '', 'images.jpg', '', 1, 'boton@gmail.com', '2018-05-30', '2019-05-30'),
(8, '', 'thumb-1920-4010.jpg', '', 1, 'boton@gmail.com', '2018-05-30', '2018-06-29'),
(9, '', 'thumb-1920-4010.jpg', '', 1, 'boton@gmail.com', '2018-05-30', '2018-06-29'),
(10, 'WomensHorlicks', 'horlicks_womenshorlicks_500gmpack.jpg', 'WomensHorlicks-Horlicks-CheapBestSuperMart-500gmPa', 0, 'boton@gmail.com', '2018-05-30', '2018-08-28'),
(11, 'horlick biscuits', 'horlicks-biscuit.png', 'Horlicks Biscuits contain  Protein, Calcium and Vitamin D equal to 2 cups of Horlicks.\r\n54g Horlicks (Original)\r\nin 100 grams of biscuits', 0, 'boton@gmail.com', '2018-06-05', '2018-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `pas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pas`) VALUES
('admin', '12345'),
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `s_no` int(11) NOT NULL,
  `ad_s_no` int(11) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `day` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`s_no`, `ad_s_no`, `email_id`, `day`, `amount`, `e_date`) VALUES
(1, 0, 'parleg@gmail.com', '90 DAY', 300, '2018-05-28'),
(2, 0, 'parleg@gmail.com', '120 DAY', 650, '2018-05-28'),
(3, 0, 'boton@gmail.com', '120 DAY', 650, '2018-05-29'),
(4, 0, 'boton@gmail.com', '365 DAY', 1000, '2018-05-29'),
(5, 0, 'boton@gmail.com', '90 DAY', 300, '2018-05-30'),
(6, 0, 'boton@gmail.com', '90 DAY', 300, '2018-05-30'),
(7, 0, 'boton@gmail.com', '90 DAY', 300, '2018-05-30'),
(8, 0, 'boton@gmail.com', '90 DAY', 300, '2018-05-30'),
(9, 0, 'boton@gmail.com', '30 DAY', 120, '2018-05-30'),
(10, 0, 'boton@gmail.com', 'Select Time', 0, '2018-05-30'),
(11, 0, 'boton@gmail.com', '90 DAY', 300, '2018-05-30'),
(12, 3, 'boton@gmail.com', '30 DAY', 120, '2018-07-04'),
(13, 4, 'boton@gmail.com', '30 DAY', 120, '2018-07-05'),
(14, 0, 'boton@gmail.com', '30 DAY', 120, '2018-06-05'),
(15, 2, 'parleg@gmail.com', '30 DAY', 120, '2018-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `company_detals`
--

CREATE TABLE `company_detals` (
  `s_no` int(11) NOT NULL,
  `entry` int(11) DEFAULT NULL,
  `email_id` varchar(30) NOT NULL,
  `ow_name` text NOT NULL,
  `c_name` text NOT NULL,
  `street` varchar(30) NOT NULL,
  `town` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `c_email_id` varchar(30) NOT NULL,
  `ph_number` varchar(15) NOT NULL,
  `p_upload` varchar(60) NOT NULL,
  `web_url` varchar(200) NOT NULL,
  `fax_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_detals`
--

INSERT INTO `company_detals` (`s_no`, `entry`, `email_id`, `ow_name`, `c_name`, `street`, `town`, `city`, `post_code`, `c_email_id`, `ph_number`, `p_upload`, `web_url`, `fax_no`) VALUES
(2, 1, 'boton@gmail.com', 'HORLICK', 'HORLICK', 'Dlf Plaza Tower', 'DLF City Phase I', ' Gurgaon ', '122002', 'botonroy@gmail.com', '987564231', 'horlicks76.jpg', 'www.horlicks.in', '01242540720'),
(3, NULL, 'botonroy@gmail.com', 'boton roy', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'parleg@gmail.com', 'parle_g', 'PARLE_G', ' Maharashtra', 'Mumbai', 'Mumbai', '400057', 'parleg@gmail.com', '02267130300', 'footer-logo.png', 'http://www.parleproducts.com/', '022-6691 6926');

-- --------------------------------------------------------

--
-- Table structure for table `exp_date`
--

CREATE TABLE `exp_date` (
  `s_no` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_date`
--

INSERT INTO `exp_date` (`s_no`, `time`, `amount`) VALUES
(1, '30 DAY', 120),
(2, '90 DAY', 300),
(3, '120 DAY', 650),
(4, '365 DAY', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `s_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`s_no`, `name`, `mail`, `password`) VALUES
(2, 'HORLICK', 'boton@gmail.com', '123456'),
(3, 'boton roy', 'botonroy@gmail.com', '1234'),
(1, 'parle_g', 'parleg@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_detals`
--
ALTER TABLE `add_detals`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `company_detals`
--
ALTER TABLE `company_detals`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- Indexes for table `exp_date`
--
ALTER TABLE `exp_date`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_detals`
--
ALTER TABLE `add_detals`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_detals`
--
ALTER TABLE `company_detals`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exp_date`
--
ALTER TABLE `exp_date`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
