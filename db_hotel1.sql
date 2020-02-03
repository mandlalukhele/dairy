-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 06:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `updated_on`) VALUES
(1, 'admin', 'admin@admin.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'admin', 'admina', 'Male', '2011-05-02', '9423979339', 'Nashik', '5.jpg', '2018-04-30', '0000-00-00'),
(5, 'admin', 'ndbhalerao91@gmail.com', 'bbcff4db4d8057800d59a68224efd87e545fa1512dfc3ef68298283fbb3b6358', 'Nikhil ', 'Bhalerao1', 'Male', '2019-11-04', '9423979339', 'nasik', '3.png', '2019-11-12', '2019-11-12'),
(6, 'admin', 'mandla.enkhosi@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Mandla', 'Lukhele', 'Male', '2019-11-13', '6766768687', 'gjgfgjjhgjh', 'WIN_20180228_21_51_04_Pro.jpg', '2019-11-13', '0000-00-00'),
(7, 'admin', 'sabelo@sabelo.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'sabelo', 'nsibande', 'Male', '2019-11-15', '6766768687', 'gjgfgjjhgjh', 'WIN_20180402_10_47_31_Pro.jpg', '2019-11-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, '', '', 'dailogo.png', '', '', '', 'bg.jpg', '', 'hay green.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `importer` varchar(50) NOT NULL,
  `borderpost` varchar(50) NOT NULL,
  `permitNo` varchar(50) NOT NULL,
  `hevicle` varchar(50) NOT NULL,
  `sad500` varchar(50) NOT NULL,
  `dairy` varchar(30) NOT NULL,
  `invoiceNo` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `levy` varchar(20) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `importer`, `borderpost`, `permitNo`, `hevicle`, `sad500`, `dairy`, `invoiceNo`, `qty`, `amount`, `levy`, `created_date`) VALUES
(0, 0, 'L.C.V Malala', 'Ngwenya', '11/117/201-1', 'spar10mp', 'C201700', 'creamers', '258756', '20', '493.92', '49.39', '2019-11-13'),
(0, 0, 'Parmalat swd', 'Ngwenya', '11/126/2011-1', 'dxc978ec', 'c201923', 'HHT Milk', '546', '30600', '183855.00', '18385', '2019-11-13'),
(0, 6, 'L.C.V Malala', 'Ngwenya', '11/126/2011-1', 'spar10mp', 'C201700', 'creamers', '258756', '20', '183855.00', '18385', '2019-11-13'),
(0, 7, 'emais', 'oshoek', '86868989', '6886689', 'c0ghghjhj', 'HHT Milk', '66777', '900', '77000', '2000', '2019-11-26'),
(0, 1, 'bred', 'Ngwenya', '4565656', '5564656', '53535', 'yogurt', '55666', '5000', '500', '39', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `roomname` varchar(500) NOT NULL,
  `kidno` int(200) NOT NULL,
  `adultno` int(200) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `taxamount` int(200) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `totalamount` int(200) NOT NULL,
  `paid` int(200) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `user_id`, `name`, `roomname`, `kidno`, `adultno`, `fromdate`, `todate`, `taxamount`, `tax_id`, `totalamount`, `paid`, `created_date`) VALUES
(1, 1, '1', '1', 2, 2, '2019-10-22', '2019-10-24', 1308, 0, 1200, 0, '2019-10-21'),
(3, 5, '2', '2', 1, 2, '2019-11-14', '2019-11-15', 826, 4, 700, 0, '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `currcode` varchar(50) NOT NULL,
  `currsymbol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `user_id`, `currcode`, `currsymbol`) VALUES
(1, 1, 'DOLLER', '$'),
(2, 5, 'rs', 'rs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `user_id`, `name`, `email`, `gender`, `birthdate`, `contact`, `address`, `created_date`) VALUES
(1, 1, 'Nikhil Bhalerao', 'ndbhalerao91@gmail.com', 'Male', '1993-08-19', '9423979339', 'nashik', '2019-10-21'),
(4, 6, 'sfiso', 'sifiso@gmail.com', 'Male', '2019-11-13', '5765875856', 'gjgfgjjhgjh', '2019-11-13'),
(5, 7, 'sipho dlamini', 'sipho@sipho.com', 'Female', '2019-11-15', '6766768687', 'gjgjgjh', '2019-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bookingid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `user_id`, `bookingid`, `amount`, `datee`) VALUES
(1, 1, 1, 1000, '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `floorno` int(50) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `peradultprice` int(50) NOT NULL,
  `perkidprice` int(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `user_id`, `floorno`, `roomname`, `peradultprice`, `perkidprice`, `color`) VALUES
(1, 1, 1, 'Deluxe', 200, 100, 'light blue'),
(2, 5, 2, 'Superior', 300, 100, 'light pink');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

CREATE TABLE `tbl_tax` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `taxname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `shortcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tax`
--

INSERT INTO `tbl_tax` (`id`, `user_id`, `taxname`, `percentage`, `shortcode`) VALUES
(2, 1, 'SGST', 9, 'sgst'),
(4, 5, 'GST', 18, 'gst'),
(5, 5, 'GSTgb', 18, 'gst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_website`
--
ALTER TABLE `manage_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_website`
--
ALTER TABLE `manage_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;