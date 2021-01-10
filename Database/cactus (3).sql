-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 08:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `BasketID` int(3) NOT NULL,
  `Amout` int(10) NOT NULL,
  `Sumprice` int(10) NOT NULL,
  `StatusBK` int(1) NOT NULL,
  `CusID` int(3) NOT NULL,
  `Cac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`BasketID`, `Amout`, `Sumprice`, `StatusBK`, `CusID`, `Cac_id`) VALUES
(258, 3, 300, 0, 3, 4),
(261, 5, 600, 0, 3, 7),
(262, 1, 120, 0, 3, 8),
(263, 3, 360, 0, 1, 10),
(265, 2, 240, 0, 1, 5),
(266, 4, 480, 0, 1, 6),
(267, 1, 120, 0, 1, 4),
(268, 1, 120, 0, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CusID` int(3) NOT NULL,
  `Imgprofile` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CusID`, `Imgprofile`, `Name`, `Lastname`, `Email`, `Password`, `Phone`, `Address`) VALUES
(1, 'https://cdn.discordapp.com/attachments/792729018608648204/794089291360763914/profile.jpg', 'Chetsadakorn', 'Mueangnam', 'chetsadakorn2543@gmail.com', 'Chet1708', 823636036, '42 หมู่3 ตหนองสองห้อง อ.บ้านเเพ้ว จ.สมุทรสาคร 74120'),
(3, 'https://cdn.discordapp.com/attachments/792729018608648204/796720785279811614/135865438_224714649180167_1622948695454171292_n.jpg', 'Supansa', 'rodtane', 'chetsadakorn2543@gmail.com', '12345678', 823636036, '42. หมู่ 3'),
(4, '....', 'Kewalin', 'Chinpibrun', 'kewalin@gmail.com', '12345678', 123456789, '4634534748'),
(5, 'https://cdn.discordapp.com/attachments/792729018608648204/795204486817120266/wp6819293.jpg', 'root', 'Phothong', 'chetsadakorn2543@gmail.com', '25d55ad283aa', 823636036, '42. หมู่ 3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Cac_id` int(11) NOT NULL,
  `Cac_name` varchar(255) NOT NULL,
  `Cac_img` varchar(255) NOT NULL,
  `Cac_Price` varchar(255) NOT NULL,
  `Cac_Type` varchar(255) NOT NULL,
  `Cac_Size` varchar(255) NOT NULL,
  `Cac_Farm` varchar(255) NOT NULL,
  `Cac_Existing` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Cac_id`, `Cac_name`, `Cac_img`, `Cac_Price`, `Cac_Type`, `Cac_Size`, `Cac_Farm`, `Cac_Existing`) VALUES
(1, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '100', 'Astrophytum', '5', 'Oasis farm', 200),
(3, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '90', 'Astrophytum', '4', 'Oasis farm', 200),
(4, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '120', 'Astrophytum', '6', 'Oasis farm', 200),

(2, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '80', 'Astrophytum', '3', 'Oasis farm', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`BasketID`),
  ADD UNIQUE KEY `CusID` (`CusID`,`Cac_id`),
  ADD UNIQUE KEY `CusID_2` (`CusID`,`Cac_id`),
  ADD KEY `Cac_id` (`Cac_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Cac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `BasketID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CusID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Cac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`Cac_id`) REFERENCES `product` (`Cac_id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`CusID`) REFERENCES `customer` (`CusID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
