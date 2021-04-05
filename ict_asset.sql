-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 07:27 PM
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
-- Database: `ict_asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `abbreviation`, `name`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(1, 'MAC', 'MAC BUILDERS', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00'),
(2, 'PMI', 'PREMIUM MEGASTUCTURES INC.', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00'),
(3, 'MBI', 'MEGASHIP BUILDERS INC.', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00'),
(4, 'OCS', 'OCTAGON CONCRETE SOLUTION', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00'),
(5, 'BDT', 'BADMINTON', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00'),
(6, 'TMP', 'TEMPURA HAUS', '2020-12-03 15:23:30', NULL, '2020-12-03 15:19:17', NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `item_addon`
--

CREATE TABLE `item_addon` (
  `addonid` int(11) NOT NULL,
  `addonname` varchar(50) NOT NULL,
  `asset_code` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `receive_date` date NOT NULL,
  `receive_no` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `payment_order_no` varchar(50) NOT NULL,
  `payment_order_date` date NOT NULL,
  `item_amount` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `rf` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_addon`
--

INSERT INTO `item_addon` (`addonid`, `addonname`, `asset_code`, `serial_no`, `brand`, `model`, `description`, `receive_date`, `receive_no`, `supplier`, `payment_order_no`, `payment_order_date`, `item_amount`, `invoice`, `warranty`, `rf`, `status`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(62, 'RAM', 'ICT-DC-000001', 'RAM', 'RAM', 'RAM', 'CDF', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '18', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00'),
(63, 'INTERNAL-HDD', 'ICT-DC-000001', 'HDD', 'HDD', 'HDD', 'VDD', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '19', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00'),
(64, 'VIDEOCARD', 'ICT-DC-000001', 'VC', 'VC', 'VC', 'DSFD', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '20', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00'),
(65, 'MOTHERBOARD', 'ICT-DC-000001', 'MB', 'MB', 'MB', 'MB', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '34', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00'),
(66, 'POWER-SUPPLY', 'ICT-DC-000001', 'PS', 'PS', 'PS', 'CNDF', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '22', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `item_addon_history`
--

CREATE TABLE `item_addon_history` (
  `item_historyid` int(11) NOT NULL,
  `addonid` int(11) NOT NULL,
  `asset_code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `datesrf` date NOT NULL,
  `srf` varchar(250) NOT NULL,
  `problem` varchar(1000) NOT NULL,
  `solution` varchar(1000) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `checkedby` varchar(250) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_deploy`
--

CREATE TABLE `item_deploy` (
  `item_deployid` int(11) NOT NULL,
  `companyid` int(10) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `itemid` int(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(50) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_deploy`
--

INSERT INTO `item_deploy` (`item_deployid`, `companyid`, `user_lname`, `user_fname`, `user_location`, `itemid`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(16, 1, 'LABARTINE', 'J-GEAR', 'MAC', 114, '2021-04-04 19:13:42', 3, NULL, NULL, b'00'),
(17, 1, 'LABARTINE', 'J-GEAR', 'MAC', 113, '2021-04-04 19:13:42', 3, NULL, NULL, b'00'),
(18, 1, 'CONALES', 'CORRINE', 'MARKETING DEPT', 115, '2021-04-04 21:02:29', 3, NULL, NULL, b'00'),
(19, 1, 'CONALES', 'CORRINE', 'MARKETING DEPT', 114, '2021-04-04 21:02:29', 3, NULL, NULL, b'00'),
(22, 5, 'LABARTINE', 'J-ANN', 'PUR DEPT', 115, '2021-04-04 21:52:38', 3, NULL, NULL, b'00'),
(23, 5, 'LABARTINE', 'J-ANN', 'PUR DEPT', 114, '2021-04-04 21:52:38', 3, NULL, NULL, b'00'),
(24, 5, 'LABARTINE', 'J-ANN', 'PUR DEPT', 113, '2021-04-04 21:52:38', 3, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `item_history`
--

CREATE TABLE `item_history` (
  `item_historyid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `datesrf` date NOT NULL,
  `srf` varchar(250) NOT NULL,
  `problem` varchar(1000) NOT NULL,
  `solution` varchar(1000) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_history`
--

INSERT INTO `item_history` (`item_historyid`, `itemid`, `datesrf`, `srf`, `problem`, `solution`, `remarks`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(9, 113, '2021-04-03', '7327', 'rthg', 'ererht', 'tht', '2021-04-02 19:24:02', NULL, NULL, NULL, b'00'),
(10, 113, '2021-04-09', '44444', 'df', 'eth', 'er', '2021-04-02 19:30:45', NULL, NULL, NULL, b'00'),
(11, 113, '2021-04-02', '5725', 'fger', 're', 'gre', '2021-04-02 19:32:51', NULL, NULL, NULL, b'00'),
(12, 114, '2021-04-08', '111111', 'ge', 'rger', 're', '2021-04-04 09:29:34', NULL, NULL, NULL, b'00'),
(13, 114, '2021-04-05', '5555', 'Printer', 'prinet', 'fe', '2021-04-04 17:53:52', 3, NULL, NULL, b'00'),
(16, 114, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-GEAR of ICT DEPARTMENT', 'Deployed', '2021-04-04 19:13:42', 3, NULL, NULL, b'00'),
(17, 113, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-GEAR of ICT DEPARTMENT', 'Deployed', '2021-04-04 19:13:42', 3, NULL, NULL, b'00'),
(18, 115, '2021-04-05', '', 'Deploy Item', 'Deploy item to CONALES, CORRINE of MARKETING DEPT', 'Deployed', '2021-04-04 21:02:29', 3, NULL, NULL, b'00'),
(19, 114, '2021-04-05', '', 'Deploy Item', 'Deploy item to CONALES, CORRINE of MARKETING DEPT', 'Deployed', '2021-04-04 21:02:29', 3, NULL, NULL, b'00'),
(20, 115, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-ANN of PUR DEPT', 'Deployed', '2021-04-04 21:52:05', 3, NULL, NULL, b'00'),
(21, 114, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-ANN of PUR DEPT', 'Deployed', '2021-04-04 21:52:05', 3, NULL, NULL, b'00'),
(22, 115, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-ANN of PUR DEPT', 'Deployed', '2021-04-04 21:52:38', 3, NULL, NULL, b'00'),
(23, 114, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-ANN of PUR DEPT', 'Deployed', '2021-04-04 21:52:38', 3, NULL, NULL, b'00'),
(24, 113, '2021-04-05', '', 'Deploy Item', 'Deploy item to LABARTINE, J-ANN of PUR DEPT', 'Deployed', '2021-04-04 21:52:38', 3, NULL, NULL, b'00'),
(25, 116, '2021-04-02', '8978', 'trgh', 'tgrt', 'rthbrt', '2021-04-05 09:08:35', 3, NULL, NULL, b'00'),
(26, 116, '2021-04-10', '52572', 'trgh', 'tgrter', 'rthbrt', '2021-04-05 09:10:02', 3, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE `item_type` (
  `item_typeid` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`item_typeid`, `code`, `type`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(25, 'DC', 'DESKTOP', '2020-12-04 15:00:33', NULL, NULL, NULL, b'00'),
(26, 'LC', 'LAPTOP', '2020-12-04 15:02:10', NULL, NULL, NULL, b'00'),
(27, 'MT', 'MONITOR', '2020-12-04 15:02:10', NULL, NULL, NULL, b'00'),
(28, 'KB', 'KEYBOARD', '2020-12-04 15:02:36', NULL, NULL, NULL, b'00'),
(29, 'MS', 'MOUSE', '2020-12-04 15:02:36', NULL, NULL, NULL, b'00'),
(30, 'AV', 'AVR', '2020-12-04 15:03:01', NULL, NULL, NULL, b'00'),
(31, 'PS', 'UPS', '2020-12-04 15:03:01', NULL, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `non_consumable_item`
--

CREATE TABLE `non_consumable_item` (
  `itemid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `equipment_code` varchar(50) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `location` varchar(500) NOT NULL,
  `operating_system` varchar(50) NOT NULL,
  `system_type` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `receive_date` date NOT NULL,
  `receive_no` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `payment_order_no` varchar(50) NOT NULL,
  `payment_order_date` date NOT NULL,
  `item_amount` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `rf` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_consumable_item`
--

INSERT INTO `non_consumable_item` (`itemid`, `companyid`, `item_code`, `equipment_code`, `brand`, `model`, `serial_no`, `location`, `operating_system`, `system_type`, `processor`, `receive_date`, `receive_no`, `supplier`, `payment_order_no`, `payment_order_date`, `item_amount`, `invoice`, `warranty`, `rf`, `status`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_deleted`) VALUES
(113, 2, 'DC', 'ICT-DC-000001', 'ACER', 'WE', 'BQ', 'fhg', 'WIN 10 PR0', '', 'RGER', '2021-04-03', 'df', 'DH', 'DGH', '2021-04-30', '500', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-02 19:18:05', 3, NULL, NULL, b'00'),
(114, 2, 'KB', 'ICT-KB-000001', 'ACER', 'WE', 'BQ', 'fhg', 'N/A', '', 'N/A', '2021-04-04', 'df', 'DH', 'DGH', '2021-04-22', '500', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-04 07:55:52', 3, NULL, NULL, b'00'),
(115, 1, 'MT', 'ICT-MT-000001', 'ACER', 'WE', 'BQ', 'fdew', 'N/A', '', 'N/A', '2021-04-05', 'df', 'DH', 'DGH', '2021-04-09', '500', 'FGH', 'gh', 'HTFG', 'ACTIVE', '2021-04-04 20:59:08', 3, NULL, NULL, b'00'),
(116, 2, 'MS', 'ICT-MS-000001', 'WFER', 'ETEY', 'ER', 'fhg', 'N/A', '', 'N/A', '2021-04-06', 'df', 'DH', 'DGH', '2021-04-09', '1500', 'RTHRT', 'egttr', 'TRHR', 'ACTIVE', '2021-04-05 09:08:19', 3, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT NULL,
  `is_deleted` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `names`, `username`, `passwords`, `added_on`, `updated_on`, `is_deleted`) VALUES
(3, 'J-GEAR LABARTINE', 'admin', '$2y$10$TuoDMr56sRod9/DM/BSjXemexiii4rLw762zqE0zByytJ5tgIspcO', '2021-01-05 16:23:51', NULL, b'00'),
(4, 'JEFF JUROLANS', 'jeff', '$2y$10$T964mcqLFjjHyPCkubO4QegbJdJka1LmFJQMXr/W2OlJOO4ta9kaG', '2021-01-20 16:17:59', '2021-01-20 04:21:15', b'00'),
(5, 'CRESCILDA BACO', 'cbaco', '$2y$10$VRDnfRD6AcBp7/XcdNFvxuZV2Lw7moqzZFEAEkzqF4/SqrYEKaSpq', '2021-04-05 09:26:01', NULL, b'00'),
(6, 'RESMAR CORDERO', 'rcordero', '$2y$10$VRDnfRD6AcBp7/XcdNFvxuZV2Lw7moqzZFEAEkzqF4/SqrYEKaSpq', '2021-04-05 09:26:01', NULL, b'00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`),
  ADD UNIQUE KEY `abbreviation` (`abbreviation`);

--
-- Indexes for table `item_addon`
--
ALTER TABLE `item_addon`
  ADD PRIMARY KEY (`addonid`);

--
-- Indexes for table `item_addon_history`
--
ALTER TABLE `item_addon_history`
  ADD PRIMARY KEY (`item_historyid`);

--
-- Indexes for table `item_deploy`
--
ALTER TABLE `item_deploy`
  ADD PRIMARY KEY (`item_deployid`);

--
-- Indexes for table `item_history`
--
ALTER TABLE `item_history`
  ADD PRIMARY KEY (`item_historyid`);

--
-- Indexes for table `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`item_typeid`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `non_consumable_item`
--
ALTER TABLE `non_consumable_item`
  ADD PRIMARY KEY (`itemid`),
  ADD UNIQUE KEY `equipment_code` (`equipment_code`,`serial_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_addon`
--
ALTER TABLE `item_addon`
  MODIFY `addonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `item_addon_history`
--
ALTER TABLE `item_addon_history`
  MODIFY `item_historyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_deploy`
--
ALTER TABLE `item_deploy`
  MODIFY `item_deployid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `item_history`
--
ALTER TABLE `item_history`
  MODIFY `item_historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `item_type`
--
ALTER TABLE `item_type`
  MODIFY `item_typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `non_consumable_item`
--
ALTER TABLE `non_consumable_item`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
