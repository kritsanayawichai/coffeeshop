-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 07:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_order`
--

CREATE TABLE `add_order` (
  `Add_MenuName` varchar(10) NOT NULL,
  `Add_MenuPrice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_order`
--

INSERT INTO `add_order` (`Add_MenuName`, `Add_MenuPrice`) VALUES
('ลาเต้ร้อน', 50),
('มอคค่าร้อน', 50),
('ช็อกโกแลตเ', 55),
('ชามะนาวเย็', 55),
('ลาเต้ปั่น', 60),
('มอคค่าปั่น', 60);

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `Customer_Id` int(11) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Customer_Tel` varchar(10) NOT NULL,
  `Customer_DateOfBirth` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`Customer_Id`, `Customer_Name`, `Customer_Tel`, `Customer_DateOfBirth`) VALUES
(104, '', '', ''),
(103, '', '', ''),
(65, 'ะะะะ', '2', '2019-11-09'),
(102, '', '', ''),
(98, '', '', ''),
(95, '', '', ''),
(96, 'kkkkkkk', '2', '2019-11-16'),
(101, 'โนบิ โบบิตะ', '0600667789', '2019-11-14'),
(100, '', '', ''),
(88, 'wdada', '1', '2019-11-09'),
(99, 'แฮรี่ พอตเตอร์', '0120010005', '2018-05-14'),
(105, '', '', ''),
(106, '', '', ''),
(107, '', '', ''),
(108, '', '', ''),
(109, '', '', ''),
(110, '', '', ''),
(111, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userlevel` varchar(10) DEFAULT NULL,
  `Employee_Name` varchar(30) NOT NULL,
  `Employee_Age` varchar(5) NOT NULL,
  `Employee_Tel` varchar(10) NOT NULL,
  `Employee_Address` varchar(100) NOT NULL,
  `Employee_JobPosition` varchar(20) NOT NULL,
  `Employee_Salary` varchar(11) NOT NULL,
  `Employee_DateOfBirth` varchar(20) NOT NULL,
  `Employee_Time_in` varchar(50) NOT NULL,
  `Employee_Time_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `userlevel`, `Employee_Name`, `Employee_Age`, `Employee_Tel`, `Employee_Address`, `Employee_JobPosition`, `Employee_Salary`, `Employee_DateOfBirth`, `Employee_Time_in`, `Employee_Time_out`) VALUES
(1, 'game', 'c8d46d341bea4fd5bff866a65ff8aea9', 'ADMIN', 'มณฑิรา ทองนา', '21', '0876543210', 'hdyrtes', 'Manager', '40000', '2019-11-25', '26/11/2019 05:47:16', '26/11/2019 05:03:39'),
(2, 'mild', '3cc4af7ce4af840e4a164d425281e8b1', 'USER', 'sukanya lew', '19', '0811234555', 'saraburi', 'เด็กเสิร์ฟ', '20', '2019-11-25', '26/11/2019 05:03:48', '25/11/2019 10:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Menu_ID` int(11) NOT NULL,
  `Menu_ Category` varchar(10) NOT NULL,
  `Menu_Name` varchar(30) NOT NULL,
  `Menu_Price` int(11) NOT NULL,
  `Menu_point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu_ID`, `Menu_ Category`, `Menu_Name`, `Menu_Price`, `Menu_point`) VALUES
(1, 'Frappe', 'cappuccino', 60, 6),
(2, 'Frappe', 'latte', 60, 6),
(3, 'Frappe', 'mocha', 60, 6),
(4, 'Frappe', 'macchiato', 60, 6),
(5, 'Frappe', 'nesvita tea', 60, 6),
(6, 'Frappe', 'matcha with milk', 60, 6),
(7, 'Frappe', 'milk tea', 60, 6),
(8, 'Frappe', 'fresh milk', 60, 6),
(9, 'Frappe', 'chocolate', 60, 6),
(10, 'Frappe', 'red bean green tea', 60, 6),
(11, 'Frappe', 'matcha latte', 60, 6),
(12, 'Frappe', 'fresh milk tea', 60, 6),
(13, 'Frappe', 'dark chocolate', 60, 6),
(14, 'Frappe', 'pink milk', 60, 6),
(15, 'Frappe', 'iced tea', 60, 6),
(16, 'Hot', 'cuppuccino', 50, 5),
(17, 'Hot', 'latte', 50, 5),
(18, 'Hot', 'mocha', 50, 5),
(19, 'Hot', 'macchiato', 50, 5),
(20, 'Hot', 'tea', 50, 5),
(21, 'Hot', 'matcha with milk', 50, 5),
(22, 'Hot', 'milk tea', 50, 5),
(23, 'Hot', 'black tea', 50, 5),
(24, 'Hot', 'fresh milk', 50, 5),
(25, 'Hot', 'chocolate', 50, 5),
(26, 'Iced', 'cuppuccino', 55, 0),
(27, 'Iced', 'latte', 55, 0),
(28, 'Iced', 'mocha', 55, 0),
(29, 'Iced', 'macchiato', 55, 0),
(30, 'Iced', 'tea', 55, 0),
(31, 'Iced', 'matcha with milk', 55, 0),
(32, 'Iced', 'milk tea', 55, 0),
(33, 'Iced', 'black tea', 55, 0),
(34, 'Iced', 'fresh milk', 55, 0),
(35, 'Iced', 'chocolate', 55, 0),
(36, 'Iced', 'lemon tea', 55, 0),
(37, 'Iced', 'green tea honey', 55, 0),
(38, 'Iced', 'red bean green tea', 55, 0),
(39, 'Iced', 'matcha latte', 55, 0),
(40, 'Iced', 'fresh milk tea', 55, 0),
(41, 'Iced', 'americano', 55, 0),
(42, 'Iced', 'dark chocolate', 55, 0),
(43, 'Iced', 'pink milk', 55, 0),
(44, 'Iced', 'iced tea', 55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Orders_PurchasingNumber` int(11) NOT NULL,
  `Order_CustomerName` varchar(20) NOT NULL,
  `Orders_MoneyReceived` int(11) NOT NULL,
  `Orders_Date` varchar(30) NOT NULL,
  `Orders_Change` int(11) NOT NULL,
  `Orders_TotalNet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Orders_PurchasingNumber`, `Order_CustomerName`, `Orders_MoneyReceived`, `Orders_Date`, `Orders_Change`, `Orders_TotalNet`) VALUES
(1, '', 0, '0000-00-00', 0, 280),
(2, '', 200, '0000-00-00', 35, 165),
(3, '', 200, '0000-00-00', 40, 160),
(4, '', 0, '0000-00-00', 0, 60),
(5, '', 0, '0000-00-00', 0, 590),
(6, '', 0, '0000-00-00', 0, 175),
(7, '', 2000, '0000-00-00', 990, 1010),
(8, '', 200, '0000-00-00', 20, 180),
(9, '', 100, '0000-00-00', 40, 60),
(10, '', 0, '0000-00-00', 0, 60),
(11, '', 0, '0000-00-00', 0, 60),
(12, '', 0, '0000-00-00', 0, 55),
(13, '', 200, '0000-00-00', 95, 105),
(14, '', 0, '0000-00-00', 0, 215),
(15, '', 0, '0000-00-00', 0, 175),
(16, '', 200, '0000-00-00', 80, 120),
(17, 'แฮรี่ พอตเตอร์', 500, '0000-00-00', 265, 235),
(18, '', 300, '0000-00-00', 10, 290),
(19, '', 200, '0000-00-00', 20, 180),
(20, 'แฮรี่ พอตเตอร์', 300, '0000-00-00', 10, 290),
(21, '', 300, '0000-00-00', 0, 105),
(22, '', 0, '0000-00-00', 0, 60),
(23, '', 0, '0000-00-00', 0, 60),
(24, '', 0, '0000-00-00', 0, 0),
(25, '', 100, '0000-00-00', 40, 60),
(26, '', 500, '0000-00-00', 95, 405),
(27, '', 200, '26/11/2019', 30, 170),
(28, '', 500, '26/11/2019', 260, 240),
(29, '', 400, '26/11/2019', 45, 355),
(30, '', 150, '26/11/2019', 30, 120),
(31, '', 200, '26/11/2019', 45, 155);

-- --------------------------------------------------------

--
-- Table structure for table `timeinout`
--

CREATE TABLE `timeinout` (
  `EmployeeName` varchar(30) NOT NULL,
  `TimeIn` varchar(30) NOT NULL,
  `TimeOut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeinout`
--

INSERT INTO `timeinout` (`EmployeeName`, `TimeIn`, `TimeOut`) VALUES
('', '24/11/2019 09:29:02', ''),
('', '', '24/11/2019 09:29:27'),
('', '24/11/2019 09:53:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `Warehouse_MaterialID` int(11) NOT NULL,
  `Warehouse_MaterialName` varchar(20) NOT NULL,
  `Warehouse_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`Warehouse_MaterialID`, `Warehouse_MaterialName`, `Warehouse_Total`) VALUES
(1, 'เมล็ดกาแฟ', 53),
(2, 'ผงชาเขียว', 40),
(3, 'ชา', 36),
(4, 'ช็อกโกแลต', 50),
(5, 'นมสด', 7),
(6, 'น้ำแดง', 5),
(7, 'นมข้นหวาน', 20),
(8, 'คอฟฟี่เมท', 10),
(9, 'น้ำเชื่อม', 50),
(10, 'Nesvita', 5),
(11, 'แก้ว', 10),
(12, 'ฝา', 10),
(13, 'หลอด', 10),
(14, 'ทิชชู่', 10),
(15, 'ถุง', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Menu_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Orders_PurchasingNumber`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`Warehouse_MaterialID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Menu_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Orders_PurchasingNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `Warehouse_MaterialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
