-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 08:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyingprice`
--

CREATE TABLE `buyingprice` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Buying_Price_Lot` double NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Buying_Price` double NOT NULL,
  `Employee_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyingprice`
--

INSERT INTO `buyingprice` (`Id`, `Product_Id`, `Buying_Price_Lot`, `Date_Time`, `Quantity`, `Buying_Price`, `Employee_Id`) VALUES
(1, 4, 500, '0000-00-00 00:00:00', 2, 250, 6),
(2, 2, 400, '2019-04-12 14:01:00', 10, 40, 1),
(3, 4, 500, '0000-00-00 00:00:00', 2, 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Product_Id`, `Customer_Id`, `Quantity`, `Date_Time`) VALUES
(43, 5, 2, 13, '2020-01-07 23:29:23'),
(44, 14, 4, 10, '2020-07-02 11:55:42'),
(62, 12, 4, 16, '2020-07-02 12:27:08'),
(65, 1, 4, 2, '2020-07-02 12:54:19'),
(100, 9, 2, 5, '2020-07-02 15:42:50'),
(101, 2, 2, 5, '2020-07-02 15:49:53'),
(102, 9, 7, 6, '2020-07-02 15:54:51'),
(104, 2, 7, 1, '2020-07-02 15:56:21'),
(109, 3, 5, 2, '2020-07-08 02:57:46'),
(110, 19, 5, 1, '2020-07-08 02:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Description`, `img_path`) VALUES
(1, 'Cloths', 'saree or sharee is a women\'s garment from the Indian subcontinent th', 'img/sare.jpg'),
(2, 'Foods', 'All-natural food and nutrition approaches to alternative  ', 'img/asparagus-barbecue-bbq-675951.jpg'),
(3, 'Kids zone', 'showcases Kids Items from all categories such as School Bag, Music ', 'img/adorable-baby-beautiful-35188.jpg'),
(4, 'Electronic Accesories', 'Electronics from a great selection of Home Audio & Video Accessories', 'img/computer-keyboard-connection-contemporary-2585916.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `Join_Date` datetime NOT NULL,
  `Login_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Phone`, `Address`, `ZipCode`, `Join_Date`, `Login_Id`) VALUES
(1, 'Shawn Joy', 'shawn@gmail.com', 16888888, 'lalmai,cumilla', 3500, '2019-08-21 09:00:00', 2),
(2, 'Mahibul Islam', 'aaa@gmail.com', 183212345, 'Barura', 3500, '2019-03-22 00:00:00', 17),
(3, 'asg', 'ing', 12345, 'asghds', 3500, '2019-02-03 00:00:00', 9),
(4, 'kew na', 'kew@gmail.com', 420, 'nai', 3500, '2016-11-21 00:00:00', 4),
(5, 'hahaha', 'haha@gmail.com', 321, 'nai', 3500, '2019-09-16 00:00:00', 24),
(6, 'israt', 'israt@email.com', 116888544, 'Cumilla', 0, '1996-11-11 00:00:00', 31),
(7, 'Miss Rupa', 'rupa@gmail.com', 18975554, 'cumilla', 0, '1996-09-11 00:00:00', 32);

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerlogin`
-- (See below for the actual view)
--
CREATE TABLE `customerlogin` (
`Id` int(11)
,`Name` varchar(20)
,`Email` varchar(30)
,`Phone` int(11)
,`Address` varchar(50)
,`Join_Date` datetime
,`Login_Id` int(11)
,`User_Name` varchar(40)
,`Password` varchar(30)
,`Type` varchar(20)
,`Status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Join_Date` datetime NOT NULL,
  `Salary` int(11) NOT NULL,
  `Login_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Email`, `Phone`, `Address`, `Join_Date`, `Salary`, `Login_Id`) VALUES
(1, 'Mahibul Islam', 'mahibulislam404@gmail.com', 1832545802, 'Bissawroad,Comilla', '2019-08-21 09:00:00', 50000, 1),
(2, 'Taslimul Islam', 'taslimulislam4004@gmail.com', 1865425856, 'bissawroad, comilla', '2019-08-15 09:00:00', 50000, 3),
(3, 'Kazi Ifrat', 'ifratbinte@gmail.com', 1234567878, 'Canada', '2000-02-01 00:00:00', 60000, 17),
(4, 'Ifrat', 'info@gmail.com', 12345, 'asd', '2019-01-02 00:00:00', 122, 18),
(5, 'Ifrat', 'info@gmail.com', 123, 'asd', '2019-02-03 00:00:00', 123, 19),
(6, 'Ifrat', 'info@gmail.com', 12345, 'uganda', '2122-02-11 00:00:00', 122, 20),
(7, 'hdbxjhsa', 'jagshwas', 123213, 'dsds', '1012-02-12 00:00:00', 123213, 21),
(8, 'w2e', 'qewew', 1232, 'sdsf', '3232-12-02 00:00:00', 12313, 22),
(9, 'oyon', 'taslimul4001@gmail.com', 1846951141, 'padwar bazar,cumilla,bangladesh', '2020-05-01 00:00:00', 420, 33);

-- --------------------------------------------------------

--
-- Stand-in structure for view `employeelogin`
-- (See below for the actual view)
--
CREATE TABLE `employeelogin` (
`Id` int(11)
,`Name` varchar(40)
,`Email` varchar(50)
,`Phone` int(11)
,`Address` varchar(100)
,`Join_Date` datetime
,`Salary` int(11)
,`Login_Id` int(11)
,`User_Name` varchar(40)
,`Password` varchar(30)
,`Type` varchar(20)
,`Status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Employee_Id` int(11) DEFAULT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total_Price` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'On Process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `Employee_Id`, `Customer_Id`, `Date_Time`, `Total_Price`, `Status`) VALUES
(1, 1, 1, '2019-08-22 09:00:08', 200, 'packaging'),
(2, 1, 7, '2020-07-05 01:43:24', 1111, 'On Process'),
(3, NULL, 6, '0000-00-00 00:00:00', 1200, 'On process'),
(21, 1, 5, '2020-07-07 10:59:44', 3400, 'On Process'),
(22, 1, 5, '2020-07-07 10:59:45', 3400, 'On Process'),
(23, 1, 5, '2020-07-07 11:00:01', 3400, 'On Process'),
(24, 1, 5, '2020-07-07 11:00:02', 3400, 'On Process'),
(25, 1, 5, '2020-07-07 11:00:03', 3400, 'On Process'),
(26, 1, 5, '2020-07-07 11:00:03', 3400, 'On Process'),
(27, 1, 6, '2020-07-12 10:58:46', 70700, 'On Process'),
(28, 1, 6, '2020-07-12 10:58:53', 70700, 'On Process'),
(33, 1, 7, '2020-07-12 09:38:54', 73300, 'On Process'),
(34, 1, 7, '2020-07-12 09:41:37', 73300, 'On Process'),
(35, 1, 6, '2020-07-12 09:50:59', 700, 'On Process'),
(45, 1, 6, '2020-07-13 07:07:41', 5200, 'On Process'),
(48, 1, 6, '2020-07-13 08:08:55', 4700, 'On Process'),
(49, 1, 6, '2020-07-13 08:08:56', 0, 'On Process'),
(50, 1, 6, '2020-07-13 08:08:57', 0, 'On Process'),
(51, 1, 6, '2020-07-14 08:09:37', 300, 'On Process'),
(52, 1, 6, '2020-07-14 08:09:37', 0, 'On Process'),
(53, 1, 6, '2020-07-14 08:09:37', 0, 'On Process'),
(54, 1, 6, '2020-07-14 08:09:37', 0, 'On Process'),
(55, 1, 6, '2020-07-14 08:09:37', 0, 'On Process'),
(56, 1, 6, '2020-07-14 08:09:37', 0, 'On Process'),
(57, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(58, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(59, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(60, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(61, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(62, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(63, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(64, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(65, 1, 6, '2020-07-14 08:09:38', 0, 'On Process'),
(66, 1, 6, '2020-07-14 08:09:39', 0, 'On Process'),
(67, 1, 6, '2020-07-14 08:09:39', 0, 'On Process'),
(68, 1, 6, '2020-07-14 08:09:39', 0, 'On Process'),
(69, 1, 6, '2020-07-14 08:09:39', 0, 'On Process'),
(70, 1, 6, '2020-07-14 08:09:39', 0, 'On Process'),
(71, 1, 6, '2020-07-14 08:09:44', 0, 'On Process'),
(72, 1, 6, '2020-07-14 08:09:44', 0, 'On Process'),
(73, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(74, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(75, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(76, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(77, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(78, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(79, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(80, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(81, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(82, 1, 6, '2020-07-14 08:09:45', 0, 'On Process'),
(83, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(84, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(85, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(86, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(87, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(88, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(89, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(90, 1, 6, '2020-07-14 08:09:46', 0, 'On Process'),
(91, 1, 6, '2020-07-14 08:10:22', 0, 'On Process');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `User_Name`, `Password`, `Type`, `Status`) VALUES
(1, 'Mahibul Islam', 'mahibul28', 'admin', 'ACTIVE'),
(2, 'Shawn Joy', '12345', 'user', 'ACTIVE'),
(3, 'Taslimul Islam', '12345', 'admin', 'ACTIVE'),
(4, 'admin', '111', 'user', 'ACTIVE'),
(5, 'abul', 'asdd', 'customer', 'ACTIVE'),
(6, 'mnbm', '123', 'customer', 'ACTIVE'),
(7, 'mnbm', '123', 'customer', 'ACTIVE'),
(8, 'mnbm', '123', 'customer', 'ACTIVE'),
(9, 'sdhjks', 'ksdjks', 'customer', 'ACTIVE'),
(10, '', '123', 'employee', 'ACTIVE'),
(11, 'ifrat', '123', 'employee', 'ACTIVE'),
(12, 'ifrat', '111', 'employee', 'ACTIVE'),
(13, 'ifrat', '111', 'employee', 'ACTIVE'),
(14, 'ifrat', '123', 'employee', 'ACTIVE'),
(15, 'ifrat', '123', 'employee', 'ACTIVE'),
(16, 'abul', '12345', 'employee', 'ACTIVE'),
(17, 'mahibul', '12345', 'user', 'ACTIVE'),
(18, 'ifrat', '1235', 'admin', 'ACTIVE'),
(19, 'ifrat', '1233', 'user', 'ACTIVE'),
(20, 'ifrat', 'ksdjks', 'user', 'ACTIVE'),
(21, 'dsd', '1231', 'admin', 'ACTIVE'),
(22, 'def', 'dwef', 'user', 'ACTIVE'),
(24, 'nai', '1111', 'user', 'ACTIVE'),
(28, 'alu', '1234555', 'admin', 'ACTIVE'),
(30, 'asd', '123qwe', 'user', 'ACTIVE'),
(31, 'israt', '12345', 'user', 'ACTIVE'),
(32, 'rupa', '0008', 'user', 'ACTIVE'),
(33, 'oyon', '1111', 'admin', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Invoice_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`Id`, `Product_Id`, `Customer_Id`, `Quantity`, `Price`, `Total_Price`, `Invoice_Id`) VALUES
(1, 1, 1, 2, 200, 400, 1),
(48, 5, 6, 1, 1200, 5200, 45),
(54, 1, 6, 1, 4000, 4700, 48),
(55, 6, 6, 1, 700, 4700, 48),
(56, 10, 6, 2, 150, 300, 51);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderproduct`
-- (See below for the actual view)
--
CREATE TABLE `orderproduct` (
`Id` int(11)
,`Product_Id` int(11)
,`Customer_Id` int(11)
,`Quantity` int(11)
,`Price` int(11)
,`Total_Price` int(11)
,`Invoice_Id` int(11)
,`Name` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderproductinvoice`
-- (See below for the actual view)
--
CREATE TABLE `orderproductinvoice` (
`Id` int(11)
,`Product_Id` int(11)
,`Customer_Id` int(11)
,`Quantity` int(11)
,`Price` int(11)
,`Total_Price` int(11)
,`Invoice_Id` int(11)
,`Name` varchar(30)
,`Status` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Buying_Price` float NOT NULL,
  `Selling_Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Sub_Category_Id` int(11) NOT NULL,
  `img_path` varchar(1000) DEFAULT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Buying_Price`, `Selling_Price`, `Quantity`, `Status`, `Description`, `Sub_Category_Id`, `img_path`, `Date_Time`) VALUES
(1, 'Suit', 3000, 4000, 10, 'popular', 'Buy Formal Suits & Blazers for men online at lowest prices', 1, 'productImg/subcategory/man_suit.jpg', '0000-00-00 00:00:00'),
(2, 'Laptop', 60000, 70000, 5, 'popular', 'Laptop Mag reviews and benchmarks the latest laptops', 9, 'productImg/subcategory/apple.jpg', '0000-00-00 00:00:00'),
(3, 'Biscuit', 600, 700, 7, 'recent', 'Butter Cookies ', 2, 'productImg/subcategory/biscuit.jpg', '0000-00-00 00:00:00'),
(4, 'Headset', 1500, 2000, 10, 'popular', 'Here\'s our list of the 15 best PC gaming headsets we\'ve tested', 12, 'productImg/subcategory/headset.jpg', '0000-00-00 00:00:00'),
(5, 'Shoe', 1000, 1200, 1, 'popular', ' Buy Tanjim, Orion, Apex & more Men\'s casual & sports shoes', 1, 'productImg/subcategory/man_shoe.jpg', '0000-00-00 00:00:00'),
(6, 'Watch', 500, 700, 2, 'available', 'Branded watches have their own charm', 1, 'productImg/subcategory/man_watch.jpg', '0000-00-00 00:00:00'),
(7, 'Shari', 1500, 2000, 10, 'recent', 'Indian Jorjet', 3, 'productImg/subcategory/ladies_wedding_dress.jpg', '0000-00-00 00:00:00'),
(8, 'Suiter', 3500, 4000, 5, 'available', 'ladies Suiter', 3, 'productImg/subcategory/ladies_sweater.jpg', '0000-00-00 00:00:00'),
(9, 'Juice', 400, 550, 6, 'popular', 'Mango Juice', 4, 'productImg/subcategory/juice.jpg', '0000-00-00 00:00:00'),
(10, 'Oil', 100, 150, 3, 'availabe', 'Olive oil', 4, 'productImg/subcategory/olive_oil.jpg', '0000-00-00 00:00:00'),
(11, 'Chocolate', 400, 600, 6, 'recent', 'Dark katbery ', 10, 'productImg/subcategory/chocolate.jpg', '0000-00-00 00:00:00'),
(12, 'Suiter', 1500, 2200, 10, 'available', 'Baby switer', 7, 'productImg/subcategory/baby_dress.jpg', '0000-00-00 00:00:00'),
(13, 'Shoe', 200, 300, 4, 'available ', 'Baby shoe', 7, 'productImg/subcategory/baby_shoe.jpg', '0000-00-00 00:00:00'),
(14, 'Car', 400, 550, 5, 'available', 'car', 8, 'productImg/subcategory/car.jpg', '0000-00-00 00:00:00'),
(15, 'Hat', 500, 580, 3, 'recent', 'Baby Hat', 8, 'productImg/subcategory/kids_hat.jpg', '0000-00-00 00:00:00'),
(16, 'Hair Bent', 100, 150, 10, 'available', 'Hair baby bent', 11, 'productImg/subcategory/baby_sweeter.jpg', '0000-00-00 00:00:00'),
(17, 'Doll', 300, 400, 3, 'available', 'Plastic Doll', 11, 'productImg/subcategory/doll.jpg', '0000-00-00 00:00:00'),
(18, 'I_phone', 15000, 17000, 8, 'available', 'I_phone phone', 6, 'productImg/subcategory/i_phone.jpg', '0000-00-00 00:00:00'),
(19, 'Blooth Speaker', 1500, 2000, 10, 'available', 'Speaker', 12, 'productImg/subcategory/mini_speaker.jpg', '0000-00-00 00:00:00'),
(20, 'tree', 100, 100, 2, 'available', 'Buautiful tree', 2, 'productimg/subcategory/1568912127287455157.jpg', '0000-00-00 00:00:00'),
(23, 'flower', 100, 120, 5, 'available', 'flowers', 2, 'productimg/subcategory/15784182961917885308.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `productandsubcatandcat`
-- (See below for the actual view)
--
CREATE TABLE `productandsubcatandcat` (
`Id` int(11)
,`Name` varchar(30)
,`Buying_Price` float
,`Selling_Price` float
,`Quantity` int(11)
,`Status` varchar(50)
,`Description` varchar(500)
,`Sub_Category_Id` int(11)
,`img_path` varchar(1000)
,`SCid` int(11)
,`SCname` varchar(30)
,`cid` int(11)
,`cname` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `productcart`
-- (See below for the actual view)
--
CREATE TABLE `productcart` (
`Id` int(11)
,`Name` varchar(30)
,`Buying_Price` float
,`Selling_Price` float
,`Quantity` int(11)
,`Status` varchar(50)
,`Description` varchar(500)
,`Sub_Category_Id` int(11)
,`img_path` varchar(1000)
,`Cart_Id` int(11)
,`Customer_Id` int(11)
,`Cart_Quantity` int(11)
,`Date_Time` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `Id` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `Product_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`Id`, `img_path`, `Product_Id`) VALUES
(1, 'productImg/subcategory/i_phone.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`Id`, `Product_Id`, `Customer_Id`, `Date_Time`, `Ratings`) VALUES
(1, 1, 1, '2019-08-22 22:59:59', 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subcatandcat`
-- (See below for the actual view)
--
CREATE TABLE `subcatandcat` (
`Id` int(11)
,`Name` varchar(30)
,`Category_Id` int(11)
,`Description` varchar(500)
,`cid` int(11)
,`Cname` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `Category_Id`, `Description`, `img_path`) VALUES
(1, 'Mens Fashion', 1, 'Get men\'s fashion tips and style advice daily from the experts at FashionBeans', 'img/product/cloth/man_jeans.jpg'),
(2, 'Junk-Food', 2, 'All the latest breaking news on junk food.', 'img/product/food/biscuit.jpg'),
(3, 'Womens Fashion', 1, ' Womens fashion online shopping in Bangladesh. Buy Best Quality Ladies dress, Jewelry, Bags & more at ajkerdeal in Bangladesh', 'img/product/cloth/ladies_watch.jpg'),
(4, 'Liquid ', 2, 'A full-liquid diet involves consuming only liquids', 'img/product/food/jelly.jpg\"'),
(6, 'Mobile', 4, ' Buy mobile phones online at best price in Bangladesh.', 'img/product/mobile and acccsoris/samsung_mobile.jpg'),
(7, 'Winter Package', 3, 'Cradle Togs Available In Various Colors Infant Baby Suits Rs 380/Piece', 'img/product/kids/baby_dress.jpg '),
(8, 'Car', 3, 'understand how a person can leave a child in a car', 'img/product/kids/car.jpg'),
(9, 'Computer & Laptop', 4, 'Shop a wide selection of laptops, tablets, desktop ', 'img/product/computer and leptop/work_station.jpg'),
(10, 'Chocolate', 2, 'Choose from a wide selection of Chocolate', 'img/product/food/chocolate.jpg'),
(11, 'Doll', 3, ' Discover the best selection of Barbie Dolls', 'img/product/kids/doll.jpg '),
(12, 'Audio', 4, 'Feel the clear, crisp sound engineered', 'img/product/audio/headset.jpg'),
(13, 'Hizab', 1, 'A hijab is a veil worn by Muslim women in the presence of any male outside of their immediate family', 'img/product/cloth/hizab.jpg'),
(14, 'Burqa', 1, 'A burqa or burka, also known as a chadaree in Afghanistan or a paranja in Central Asia, is an enveloping outer garment', 'img/product/cloth/borkha.jpg'),
(15, 'Pestry', 2, 'Cake is a form of sweet food made from flour, sugar, and other ingredients, that is usually baked', 'img/product/food/s1.jpg'),
(16, 'Frock', 3, 'There are small baby prints on paper frocks. On the waist, there is a white paper belt', 'img/product/kids/baby1.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Id`, `Product_Id`, `Customer_Id`, `Date_Time`) VALUES
(1, 1, 1, '2019-08-22 09:28:08');

-- --------------------------------------------------------

--
-- Structure for view `customerlogin`
--
DROP TABLE IF EXISTS `customerlogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customerlogin`  AS  select `c`.`Id` AS `Id`,`c`.`Name` AS `Name`,`c`.`Email` AS `Email`,`c`.`Phone` AS `Phone`,`c`.`Address` AS `Address`,`c`.`Join_Date` AS `Join_Date`,`c`.`Login_Id` AS `Login_Id`,`l`.`User_Name` AS `User_Name`,`l`.`Password` AS `Password`,`l`.`Type` AS `Type`,`l`.`Status` AS `Status` from (`customer` `c` join `login` `l`) where (`c`.`Login_Id` = `l`.`Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `employeelogin`
--
DROP TABLE IF EXISTS `employeelogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employeelogin`  AS  select `e`.`Id` AS `Id`,`e`.`Name` AS `Name`,`e`.`Email` AS `Email`,`e`.`Phone` AS `Phone`,`e`.`Address` AS `Address`,`e`.`Join_Date` AS `Join_Date`,`e`.`Salary` AS `Salary`,`e`.`Login_Id` AS `Login_Id`,`l`.`User_Name` AS `User_Name`,`l`.`Password` AS `Password`,`l`.`Type` AS `Type`,`l`.`Status` AS `Status` from (`employee` `e` join `login` `l`) where (`e`.`Login_Id` = `l`.`Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `orderproduct`
--
DROP TABLE IF EXISTS `orderproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderproduct`  AS  select `o`.`Id` AS `Id`,`o`.`Product_Id` AS `Product_Id`,`o`.`Customer_Id` AS `Customer_Id`,`o`.`Quantity` AS `Quantity`,`o`.`Price` AS `Price`,`o`.`Total_Price` AS `Total_Price`,`o`.`Invoice_Id` AS `Invoice_Id`,`p`.`Name` AS `Name` from (`orderlist` `o` join `product` `p`) where (`p`.`Id` = `o`.`Product_Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `orderproductinvoice`
--
DROP TABLE IF EXISTS `orderproductinvoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderproductinvoice`  AS  select `o`.`Id` AS `Id`,`o`.`Product_Id` AS `Product_Id`,`o`.`Customer_Id` AS `Customer_Id`,`o`.`Quantity` AS `Quantity`,`o`.`Price` AS `Price`,`o`.`Total_Price` AS `Total_Price`,`o`.`Invoice_Id` AS `Invoice_Id`,`o`.`Name` AS `Name`,`i`.`Status` AS `Status` from (`orderproduct` `o` join `invoice` `i`) where (`i`.`Id` = `o`.`Invoice_Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `productandsubcatandcat`
--
DROP TABLE IF EXISTS `productandsubcatandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productandsubcatandcat`  AS  select `p`.`Id` AS `Id`,`p`.`Name` AS `Name`,`p`.`Buying_Price` AS `Buying_Price`,`p`.`Selling_Price` AS `Selling_Price`,`p`.`Quantity` AS `Quantity`,`p`.`Status` AS `Status`,`p`.`Description` AS `Description`,`p`.`Sub_Category_Id` AS `Sub_Category_Id`,`p`.`img_path` AS `img_path`,`s`.`Id` AS `SCid`,`s`.`Name` AS `SCname`,`s`.`cid` AS `cid`,`s`.`Cname` AS `cname` from (`product` `p` join `subcatandcat` `s`) where (`p`.`Id` = `s`.`Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `productcart`
--
DROP TABLE IF EXISTS `productcart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productcart`  AS  select `p`.`Id` AS `Id`,`p`.`Name` AS `Name`,`p`.`Buying_Price` AS `Buying_Price`,`p`.`Selling_Price` AS `Selling_Price`,`p`.`Quantity` AS `Quantity`,`p`.`Status` AS `Status`,`p`.`Description` AS `Description`,`p`.`Sub_Category_Id` AS `Sub_Category_Id`,`p`.`img_path` AS `img_path`,`c`.`Id` AS `Cart_Id`,`c`.`Customer_Id` AS `Customer_Id`,`c`.`Quantity` AS `Cart_Quantity`,`c`.`Date_Time` AS `Date_Time` from (`product` `p` join `cart` `c`) where (`p`.`Id` = `c`.`Product_Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `subcatandcat`
--
DROP TABLE IF EXISTS `subcatandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subcatandcat`  AS  select `s`.`Id` AS `Id`,`s`.`Name` AS `Name`,`s`.`Category_Id` AS `Category_Id`,`s`.`Description` AS `Description`,`c`.`Id` AS `cid`,`c`.`Name` AS `Cname` from (`subcategory` `s` join `category` `c`) where (`s`.`Category_Id` = `c`.`Id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyingprice`
--
ALTER TABLE `buyingprice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `EmployeeId` (`Employee_Id`),
  ADD KEY `Id_2` (`Id`),
  ADD KEY `EmployeeId_2` (`Employee_Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `EmployeeId_3` (`Employee_Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Id_2` (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `LoginId` (`Login_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Login_Id` (`Login_Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `EmployeeId` (`Employee_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`),
  ADD KEY `InvoiceId` (`Invoice_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Sub_Category_Id` (`Sub_Category_Id`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `CategoryId` (`Category_Id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `ProductId` (`Product_Id`),
  ADD KEY `CustomerId` (`Customer_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyingprice`
--
ALTER TABLE `buyingprice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyingprice`
--
ALTER TABLE `buyingprice`
  ADD CONSTRAINT `buyingprice_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `buyingprice_ibfk_2` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Login_Id`) REFERENCES `login` (`Id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Login_Id`) REFERENCES `login` (`Id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Id`);

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `orderlist_ibfk_3` FOREIGN KEY (`Invoice_Id`) REFERENCES `invoice` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Sub_Category_Id`) REFERENCES `subcategory` (`Id`);

--
-- Constraints for table `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`Id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`Customer_Id`) REFERENCES `customer` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
