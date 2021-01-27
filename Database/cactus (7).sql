-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 06:26 AM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `aid` int(3) NOT NULL,
  `uid` int(3) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `subdistrict` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `Postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`aid`, `uid`, `province`, `district`, `subdistrict`, `house_no`, `Postal_code`) VALUES
(1, 1, 'sadasdas', 'sadsadas', 'dsadas', 'adasd', 74120),
(2, 3, 'สมุทรสาคร', 'บ้านเเพ้ว', 'หนองสามห้อง', '42 หมู่ 3', 74120);

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `BasketID` int(3) NOT NULL,
  `Amout` int(10) NOT NULL,
  `Sumprice` int(10) NOT NULL,
  `StatusBK` varchar(3) NOT NULL,
  `uid` int(3) NOT NULL,
  `Cac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`BasketID`, `Amout`, `Sumprice`, `StatusBK`, `uid`, `Cac_id`) VALUES
(12, 5, 500, 'no', 1, 18),
(13, 9, 900, 'no', 1, 14),
(14, 17, 2550, 'no', 1, 12),
(17, 8, 640, 'no', 1, 2),
(18, 1, 100, 'no', 1, 8),
(19, 1, 100, 'no', 1, 1),
(22, 9, 900, 'no', 2, 1),
(28, 10, 1000, 'no', 4, 17),
(29, 12, 1080, 'no', 5, 3),
(30, 7, 560, 'yes', 3, 2),
(31, 1, 100, 'no', 7, 6),
(32, 8, 800, 'yes', 3, 1),
(33, 25, 3000, 'yes', 3, 4),
(34, 18, 1620, 'yes', 3, 3),
(35, 25, 2500, 'yes', 8, 14),
(36, 1, 90, 'yes', 8, 16),
(37, 1, 120, 'yes', 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(3) NOT NULL,
  `statusorder` varchar(10) NOT NULL,
  `BasketID` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `uid` int(3) NOT NULL,
  `totalprice` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `statusorder`, `BasketID`, `datetime`, `uid`, `totalprice`) VALUES
(13, 'yes', '6,7', '0000-00-00 00:00:00', 1, 7980),
(20, 'yes', '6,12,13', '0000-00-00 00:00:00', 1, 4280),
(21, 'yes', '6,12,13,14', '0000-00-00 00:00:00', 1, 6830),
(24, 'yes', '6,12,13,14,15,16', '0000-00-00 00:00:00', 1, 10630),
(25, 'yes', '12,13,14', '0000-00-00 00:00:00', 1, 3950),
(30, 'yes', '22', '0000-00-00 00:00:00', 2, 900),
(34, 'yes', '28', '0000-00-00 00:00:00', 4, 1000),
(35, 'yes', '29', '0000-00-00 00:00:00', 5, 1080),
(37, 'yes', '32,30', '0000-00-00 00:00:00', 3, 10860),
(38, 'yes', '32,30', '2021-01-15 17:38:27', 3, 10860),
(39, 'yes', '32,30', '0000-00-00 00:00:00', 3, 4160),
(40, 'yes', '32,30', '2021-01-26 12:31:52', 3, 4160),
(41, 'yes', '32,30,33', '2021-01-16 12:31:48', 3, 7160),
(43, 'yes', '32,30,33', '2021-01-24 12:31:37', 3, 7160),
(44, 'yes', '34', '2021-01-25 12:29:06', 3, 450),
(45, 'yes', '35,36', '0000-00-00 00:00:00', 8, 2090),
(46, 'no', '35,36', '0000-00-00 00:00:00', 8, 2090),
(47, 'no', '35,36', '0000-00-00 00:00:00', 8, 2090),
(48, 'no', '35,36', '0000-00-00 00:00:00', 8, 2590),
(49, 'yes', '32,37', '0000-00-00 00:00:00', 3, 920);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `uid` int(3) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`uid`, `phonenumber`) VALUES
(1, 823636036),
(2, 699999999),
(3, 823636036);

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
(2, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '80', 'Astrophytum', '3', 'Oasis farm', 200),
(3, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '90', 'Astrophytum', '4', 'Oasis farm', 200),
(4, 'Astrophytum asterias', 'https://cdn.discordapp.com/attachments/792729018608648204/793827037361733652/astrophythum_asterias.jpg', '120', 'Astrophytum', '6', 'Oasis farm', 200),
(5, 'gymnocalycium', 'https://media.discordapp.net/attachments/723792442859716619/799290058603102218/Gymnocalcium_baldianium.jpg?width=745&height=559', '150', 'gymnocalycium', '7', 'Oasis farm', 100),
(6, 'gymnocalycium', 'https://cdn.discordapp.com/attachments/723792442859716619/799290060725157919/Gymnocalycium_pseudoragonesei_18325_l.jpg ', '100', 'gymnocalycium', '5', 'Oasis farm', 200),
(7, 'gymnocalycium', 'https://cdn.discordapp.com/attachments/723792442859716619/799290062977761320/3fd70a42-e427-79c2-9fcf-5edc6163d980.jpg', '80', 'gymnocalycium', '4', 'Oasis farm', 200),
(8, 'astropitum', 'https://cdn.discordapp.com/attachments/723792442859716619/799290826504405062/astrophytum_asterias_nudum_03.jpg', '100', 'astropitum', '6', 'Oasis farm', 100),
(9, 'astropitum', 'https://cdn.discordapp.com/attachments/723792442859716619/797383778552643584/Astrophytum_asterias_cv._Star_Type_495_l.jpg ', '120', 'astropitum', '5', 'Oasis farm', 100),
(10, 'astropitum', 'https://cdn.discordapp.com/attachments/723792442859716619/797383778564702268/42047dcbd4da824b.jpg ', '100', 'astropitum', '8', 'Oasis farm', 100),
(11, 'mammilaria', 'https://media.discordapp.net/attachments/723792442859716619/798766296900435998/mammillaria_microthele_1.jpg', '120', 'mammilaria', '6', 'Oasis farm', 100),
(12, 'mammilaria', 'https://media.discordapp.net/attachments/723792442859716619/798766318635057163/Screenshot_2021-01-13_110625.png', '150', 'astropitum', '7', 'Oasis farm', 150),
(13, 'mammilaria', 'https://media.discordapp.net/attachments/723792442859716619/798766321239982130/V036.jpg?width=1015&height=676', '180', 'astropitum', '8', 'Oasis farm', 100),
(14, 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896574825758761/Prickly-pear-cactus-plantlets-paddle.jpg', '100', 'astropitum', '8', 'Oasis farm', 200),
(15, 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896586956341268/24321ca00731a22edec41b617f402a9a.jpg', '120', 'astropitum', '7', 'Oasis farm', 200),
(16, 'opuntia', 'https://cdn.discordapp.com/attachments/723792442859716619/798896590181761074/02_02_Opuntia_rufida__Purple_variety_2_600px.jpg', '90', 'astropitum', '6', 'Oasis farm', 200),
(17, 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897824012042240/61_08_04_Echeveria_agavoides_v_Contepec.jpg', '100', 'astropitum', '6', 'Oasis farm', 200),
(18, 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897830408224788/81dIMXbe2qL._AC_SL1500_.jpg', '100', 'astropitum', '6', 'Oasis farm', 200),
(19, 'Echeveria', 'https://cdn.discordapp.com/attachments/723792442859716619/798897831783956510/9355c19420baac62d289ca51a12f9548.jpg', '100', 'astropitum', '6', 'Oasis farm', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(3) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `password`, `uimg`, `First_name`, `Last_name`) VALUES
(1, 'Chetsadakorn', 'chetsadakorn2543@gmail.com', '103cd85d2d36d508b28f8fb5cb6bbd90', 'https://cdn.discordapp.com/attachments/792729018608648204/794089291360763914/profile.jpg', 'เจษฎากร', 'เมืองนาม'),
(2, 'Supansa', 'Supansa@gmail.com', '827ccb0eea8a706c4c34', 'https://cdn.discordapp.com/attachments/792729018608648204/796720785279811614/135865438_224714649180167_1622948695454171292_n.jpg', 'เจษฎากร', 'เมืองนาม'),
(3, 'CHETcica', 'chetsadakorn@gmail.com', '$2y$10$9r40EGYmCSERRMoZijJHW.ru27dsSKEDf8.D7WWM4OPHm.vN0GIaO', 'https://cdn.discordapp.com/attachments/792729018608648204/794089291360763914/profile.jpg', 'เจษฎากร', 'เมืองนาม'),
(4, 'Aum', 'Aum@gmail.com', '$2y$10$SXfV84V.YpvxgrDm9J79peaOAdZ8RVQZSWTDnfCoWrQtdMjI3fHHK', '', 'เจษฎากร', 'เมืองนาม'),
(5, 'Aum2', 'Aum2@gmail.com', '$2y$10$0kkqIaVFNTzoH142VFBoUuUcEJ/eGv8P4HAJkIEHpYCQmBJwXo8TC', '', 'เจษฎากร', 'เมืองนาม'),
(6, 'chet', 'chetsadakorn2@gmail.com', '$2y$10$MkfvZUkBzEsy772k.SLnneOfuguSC7H4XASbeSG0CEHT4fiXvmOj2', 'https://cdn.discordapp.com/attachments/792729018608648204/800269781693497404/profile4.jpg', 'เจษฎากร', 'เมืองนาม'),
(7, 'chet1', 'chetsadakorn1@gmail.com', '$2y$10$8QnnkJZ8RcDsytNgoM..lOviB337OTBFujD.9XSHpQcMLSloGMO62', 'https://cdn.discordapp.com/attachments/792729018608648204/800269776999022612/profile2.jpg', 'เจษฎากร', 'เมืองนาม'),
(8, '้้้hhh', 'chetsadakornhhh@gmail.com', '$2y$10$CFeFnbowxjM0bkQFnp7LM.jA21rzeITow03iuaKwHAk3fjlMQPgwG', 'https://cdn.discordapp.com/attachments/792729018608648204/800269785073451018/profile6.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `uid_2` (`uid`),
  ADD KEY `uid_3` (`uid`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`BasketID`),
  ADD UNIQUE KEY `uid` (`uid`,`Cac_id`),
  ADD KEY `Cac_id` (`Cac_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Cac_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `BasketID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Cac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`Cac_id`) REFERENCES `product` (`Cac_id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
