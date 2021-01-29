-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 12:45 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scanlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(1, 'frankdmin', '996d4b86c1e36c36484103bf22e3ea0b9095780c'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `audio_accessories`
--

CREATE TABLE `audio_accessories` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_accessories`
--

INSERT INTO `audio_accessories` (`id`, `name`, `price`, `image`, `description`, `type`) VALUES
(1, 'Sony XT100HD', 750, 'images/sony.jpg', 'HD Radio Tuner Built-in Sony Bus connectivity for external source', 'Tuner'),
(2, 'Sony WX-GS920BH', 1500, 'images/sony1.jpg', 'High-Power Receiver with Bluetooth and Sirius XM Tuner Bundle', 'Stereo'),
(9, 'Pioneer speaker', 1900, 'images/sound systems and accessories/20191205_104835.jpg', 'Pionner 12 inch speaker for subwoofer', 'Speaker'),
(10, 'XTC Amplifier', 2500, 'images/sound systems and accessories/20200106_181234.jpg', '12V XTC 1500 watts black Amplifier', 'Amplifier'),
(12, 'XTC Audio Flat Sub', 3500, 'images/sound systems and accessories/IMG_20191204_092321.jpg', 'XTC Audio flat subwoofer complete with amplifier ', 'Subwoofer'),
(13, 'JBL Speaker', 2000, 'images/sound systems and accessories/IMG_20191204_092911.jpg', 'JBL 12 inch 800watts  double coil speaker ', 'Speaker');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `ID` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(75) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`ID`, `email`, `name`, `subject`, `message`) VALUES
(7, 'admin@portal.com', 'Admin Nimda', 'Fan Clutch', 'Invitation to quote for Benz Atego Fan clutch');

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` int(70) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `name`, `type`, `price`, `description`, `image`) VALUES
(1, 'AIR DRYER FILTER', 'SCANIA', 400, 'OEM Number:2081360, 1774598, 1455253, 1384549\'\'', 'images/truck and trailers/airdryerfilter.jpg'),
(2, 'AIR DRYER(COMPLETE)', 'SCANIA', 1200, 'OEM Number:2057999, 1532140', 'images/truck and trailers/airdryer.jpg'),
(3, 'BELT TENSIONER', 'VOLVO', 1500, 'H&S Part Number:3979980, 21257889\r\nOEM Number:VE36', 'images/truck and trailers/tensioner.jpg'),
(4, 'FLEX EXHAUST PIPE', 'VOLVO', 850, 'H&S Part Number:VE101 OEM Number:20709027', 'images/truck and trailers/flexpipe.jpg'),
(26, 'Air Dryer ', 'VOLVO', 350, '  TKL Electrical Air Dryer Valve Volvo FH, FM   ', 'images/truck and trailers/TKL_Electrical_Air_Dryer_Valve_Volvo_FH_FM_fgilje.jpg'),
(27, 'Gearbox Actuator', 'Mercedes Benz', 350, 'Kongsberg Atego Select Gearbox Actuator Mercedes Benz, Atego, Universal', 'images/truck and trailers/atego.jpg'),
(28, 'Oil filter', 'Cummins', 750, 'Fleetguard filters for truck and bus engines', 'images/truck and trailers/cummins.jpg'),
(29, '12V Solenoid ', 'Freight Liner', 1200, 'Freight Liner Stater Motor Solenoid ', 'images/truck and trailers/12v solenoid.jpg'),
(30, '10 Spline Slack Adjuster', 'Trailer', 400, '10 Spline Slack Adjuster for trailers', 'images/truck and trailers/10 spline.jpg'),
(31, '12V Flasher Unit', 'Electricals', 850, '12V 3 Legged Universal Flasher Unit ', 'images/truck and trailers/12v flasher unit - Copy.jpg'),
(32, 'Brake Booster', 'Trailer', 1000, '24 -30 Trailer Brake Booster', 'images/truck and trailers/24-30 brake booster - Copy.jpg'),
(33, 'Four way valve', 'Trailer', 600, '            \r\n        Four way valve trailer Hydraulic controller \'', 'images/truck and trailers/4way valve.jpg'),
(34, 'Wheel Drum', 'Trailer', 1850, 'Universal trailer wheel drum \'', 'images/truck and trailers/Brake Drum.jpg'),
(35, 'Air Dryer Filter ', 'SCANIA', 890, 'Air dryer filter for SCANIA trucks coarse thread', 'images/truck and trailers/airdryer coarse thread.jpg'),
(36, 'Cab Tilting Pump', 'SCANIA', 2900, 'Cabin tilting hand oil hydraulic cabin pump for SCANIA', 'images/truck and trailers/cab tilt pump.jpg'),
(37, 'Tail pipe', 'Electricals', 450, '12V L.E.D exhaust tail pipes', 'images/truck and trailers/20200117_102251.jpg'),
(38, 'Bar light', 'Electricals', 1500, '12V L.E.D Bar light ', 'images/truck and trailers/bar lights.jpg'),
(39, 'Air Bag', 'Trailer', 4000, 'Universal suspension Trailer Air bag', 'images/truck and trailers/Airbag.jpg'),
(40, 'Ubolt', 'Trailer', 350, 'Universal Trailer U-bolts ', 'images/truck and trailers/ubolts.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `audio_accessories`
--
ALTER TABLE `audio_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `spares`
--
ALTER TABLE `spares`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_accessories`
--
ALTER TABLE `audio_accessories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `spares`
--
ALTER TABLE `spares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
