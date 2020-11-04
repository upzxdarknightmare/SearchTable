-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 09:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `packing` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Remark` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SalesDoc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PurchaseOrderNum` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DocumentDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Material` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `OrderQuantity` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `StillDeliveryQty` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `RemainQuantity` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `OnHand` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DueDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ASNFrist` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ASNFull` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ASNHalf` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NameCss` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ShipTo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ModeofShipment` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LoadingDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SumOrder` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SumStill` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SumRemian` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SumOnHand` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`packing`, `Remark`, `SalesDoc`, `PurchaseOrderNum`, `DocumentDate`, `Material`, `Description`, `OrderQuantity`, `StillDeliveryQty`, `RemainQuantity`, `OnHand`, `DueDate`, `ASNFrist`, `ASNFull`, `ASNHalf`, `NameCss`, `customer`, `ShipTo`, `ModeofShipment`, `LoadingDate`, `SumOrder`, `SumStill`, `SumRemian`, `SumOnHand`) VALUES
('5', 'Partial', '1026303098', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '1500', '1500', '952', '548', '2020-12-07', ' ', ' ', ' ', 'Supreeya', 'Advance Photochormics LLC', 'Advanced Photochromics', 'SEA', '44124', '228055', '228055', '193638', '34417'),
('5', 'Partial', '1026303099', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '2000', '2000', '1105', '895', '2020-12-07', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('5', 'Partial', '1026303100', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '47000', '47000', '37344', '9656', '2020-12-07', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('5', 'Partial', '1026303101', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '100000', '100000', '84210', '15790', '2020-12-07', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('5', 'Partial', '1026303102', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '33500', '33500', '28481', '5019', '2020-12-07', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('5', 'Partial', '1026303103', 'P6500356-1', '2020-09-18', '5B1A31175000000000', 'P150T WH S SVY U75 BM', '2500', '2500', '1081', '1419', '2020-12-07', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1056300124', 'Replacment of 1.67', '2020-09-08', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '476', '476', '0', '476', '2020-09-16', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303105', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '6500', '6500', '6400', '100', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303106', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '14000', '14000', '13745', '255', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303107', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '9500', '9500', '9241', '259', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303108', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '5500', '5500', '5500', '0', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303109', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '5500', '5500', '5500', '0', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', ''),
('6', 'Partial', '1026303110', 'P6500356-1', '2020-09-18', '531291175000000000', 'P167 Wh S SB0 (T) U75 BM', '79', '79', '79', '0', '2020-11-25', ' ', ' ', ' ', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
