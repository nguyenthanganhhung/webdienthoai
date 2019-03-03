-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2015 at 01:27 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Url` varchar(500) NOT NULL,
  `Width` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Target` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categoryproduct`
--

CREATE TABLE IF NOT EXISTS `categoryproduct` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `GroupProduct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Phonenumber` varchar(500) NOT NULL,
  `Fax` varchar(500) NOT NULL,
  `Mail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Company` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` char(20) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Birthday` datetime NOT NULL,
  `Province` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` char(20) NOT NULL,
  `Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groupproduct`
--

CREATE TABLE IF NOT EXISTS `groupproduct` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Order` int(255) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Order` int(11) NOT NULL,
  `Parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`Id` int(11) NOT NULL,
  `News_category` varchar(500) NOT NULL,
  `News_name` varchar(5000) NOT NULL,
  `News_content` text NOT NULL,
  `Date` datetime NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`Id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `TotalMoney` float NOT NULL,
  `Date` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
`Id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Value` varchar(500) NOT NULL,
  `Product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Price` float NOT NULL,
  `Image` varchar(500) NOT NULL,
  `PriceNew` float(255,0) NOT NULL,
  `Date` datetime NOT NULL,
  `Order` int(255) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` char(20) NOT NULL,
  `Province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
`Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Tel` char(20) NOT NULL,
  `Type` int(255) NOT NULL,
  `Nick` varchar(500) NOT NULL,
  `Order` int(255) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`Id` int(11) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `Password` char(255) NOT NULL,
  `Rule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categoryproduct`
--
ALTER TABLE `categoryproduct`
 ADD PRIMARY KEY (`Id`), ADD KEY `GroupProduct_id` (`GroupProduct_id`), ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `groupproduct`
--
ALTER TABLE `groupproduct`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`Id`), ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
 ADD PRIMARY KEY (`Id`), ADD KEY `Order_id` (`Order_id`), ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
 ADD PRIMARY KEY (`Id`), ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
 ADD PRIMARY KEY (`Id`), ADD KEY `Province_id` (`Province_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groupproduct`
--
ALTER TABLE `groupproduct`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoryproduct`
--
ALTER TABLE `categoryproduct`
ADD CONSTRAINT `categoryproduct_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Id`),
ADD CONSTRAINT `categoryproduct_ibfk_1` FOREIGN KEY (`GroupProduct_id`) REFERENCES `groupproduct` (`Id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Id`) REFERENCES `orderdetail` (`Order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Id`);

--
-- Constraints for table `parameter`
--
ALTER TABLE `parameter`
ADD CONSTRAINT `parameter_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
ADD CONSTRAINT `province_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `shop` (`Province_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
