-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 03:43 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nilamee`
--
CREATE DATABASE IF NOT EXISTS `nilamee` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nilamee`;

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE IF NOT EXISTS `addproducts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `descri` text NOT NULL,
  `price` int(20) NOT NULL,
  `btime` datetime NOT NULL,
  `cid` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mob` text NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`pid`, `title`, `descri`, `price`, `btime`, `cid`, `image`, `name`, `email`, `mob`) VALUES
(1, 'Honda RCB - KTM', 'new well maintained...in short mast h bhai', 89499, '2016-08-27 14:20:00', 4, 'productimages/bikekk.jpg', 'Alex', 'alex123@hotmail.com', '46852325'),
(2, 'Alesis DM6', 'Alesis DM6 is a electronic drum.\r\nUSB supportable.', 1899, '2016-08-27 14:20:00', 6, 'productimages/alesis dm6 electric drum.jpg', 'Peter India', 'PeterIn@gmail.com', '9568456884'),
(20, 'Yamaha m1', 'Yamaha m1 chromozome is a keyboard instrument..well maintained..play well', 1499, '2016-08-27 14:20:00', 6, 'productimages/Chromozome_Yamaha_102013_m_1_2x-3141c.jpg', 'Neel Saxena', 'Neel1122@yahoo.com', '6591235965'),
(24, 'Guitar LH', '71019131_5_1000x700_left-handed-electric-guitar-fender-standard-stratocaster-west-bengal_rev002', 1299, '2016-08-27 14:20:00', 6, 'productimages/71019131_5_1000x700_left-handed-electric-guitar-fender-standard-stratocaster-west-bengal_rev002.jpg', 'Roxtar ', 'roxtar1122@yahoo.com', '6656516565'),
(25, 'Drum TAMA', 'TAMA drum-fender-standard-stratocasterl_rev002...Bajate raho', 1799, '2016-08-27 14:20:00', 6, 'productimages/drums.jpg', 'Duryodhan', 'mahabhart122@yahoo.com', '6655568100'),
(26, 'Rabbit painting', 'Bunnie_Rabbit_Painting_for_sale..original hai', 1999, '2016-08-27 14:20:00', 2, 'productimages/Bunnie_Rabbit_Painting_for_sale.jpg', 'M.F.Hussain', 'mfhasina@artist.com', '8899665588'),
(27, 'Texture painting', 'Textured-painting.-For-sale-30031..ye bhi original hai', 1890, '2016-08-27 14:20:00', 2, 'productimages/Textured-painting.-For-sale-30031.jpg', 'M.F.Hussain', 'mfhasina@artist.com', '8899665588'),
(28, 'girl painting', 'mark-spain-young-girl-ii-85340 Textured-painting.-For-sale-30031..ye bhi original hi hai', 2099, '2016-08-27 14:20:00', 2, 'productimages/mark-spain-young-girl-ii-85340.jpg', 'M.F.Hussain', 'mfhasina@artist.com', '8899665588'),
(29, 'children painting', 'children-paintings-for-sale-children39s-gifts-free-shipping-1339119488_b..ye cute hai yr', 2049, '2016-08-27 14:20:00', 2, 'productimages/children-paintings-for-sale-children39s-gifts-free-shipping-1339119488_b.jpg', 'M.F.Hussain', 'mfhasina@artist.com', '8899665588'),
(30, 'Honda Fury - R', 'new and well maintained...in short mast h bhai..aram se chalana', 89949, '2016-08-27 14:20:00', 4, 'productimages/09_Honda_Fury_review_01.jpg', 'Alex', 'alex123@hotmail.com', '46852325'),
(31, 'Yamaha Vmax - R', 'Yamaha-vmax-2 new and well maintained...in short mast h bhai..aram se chalana', 98999, '2016-08-27 14:20:00', 4, 'productimages/Yamaha-vmax-2.jpg', 'Alex', 'alex123@hotmail.com', '46852325'),
(32, 'Bugati Veron', 'Bugati Veron-2 Black-beast, new and well maintained...in short mast h bhai..aram se chalana', 202020, '2016-08-27 14:20:00', 3, 'productimages/Black-beast.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(33, 'Maserati', 'Maserati-Mistrale Black-beast, new and well maintained...', 178990, '2016-08-27 14:20:00', 3, 'productimages/Maserati-Mistrale.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(34, 'Marussia', 'Marussia Black&white-beast, new and well maintained...best-cars-in-the-world', 300999, '2016-08-27 14:20:00', 3, 'productimages/best-cars-in-the-world.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(35, 'Audi-Sport', 'Latest-Audi-Sport-car-model-2door--beast, new and well maintained...best-cars', 146844, '2016-08-27 14:20:00', 3, 'productimages/Latest-Audi-Sport-car-model-2door-images-wallpaper-picture.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(36, '1 Indian paise', 'historical coin used in old days..in india', 99, '2016-08-27 14:20:00', 5, 'productimages/1 paisa.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(37, '2-3 Indian paise', 'historical coin used in old days..in india', 199, '2016-08-27 14:20:00', 5, 'productimages/2 paisa.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(38, 'shivaji coin', 'chhatrapati shivaji coin...historical coin used in old days..in india', 499, '2016-08-27 14:20:00', 5, 'productimages/chhatrapati shivaji coin.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(39, 'victoria coin', 'victoria british indian coin...historical coin used in old days..in india', 899, '2016-08-27 14:20:00', 5, 'productimages/victoria british indian coin.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(40, 'ram darbar coin', 'ram darbar coin...historical coin used in old days..in india', 480, '2016-08-27 14:20:00', 5, 'productimages/ram darbar coin.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(41, '5 rs note 3 deer', '5 rs note 3 deer...historical coin used in old days..in india', 149, '2016-08-27 14:20:00', 5, 'productimages/5 rs note 3 deer.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(42, 'East India Copany coin', 'East India Copany coin...historical coin used in old days..in india', 399, '2016-08-27 14:20:00', 5, 'productimages/270431williams-300x292.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(43, '1 rupee 1947', '1 rupee 1947 coin...historical coin used in old days..in india', 299, '2016-08-27 14:20:00', 5, 'productimages/1 rupee 1947.jpg', 'Pitbull', 'pitgyabull@hotmail.com', '659856623'),
(45, 'phonograph', 'antique_phonograph_by_scrapbee...suno sunao life bnao', 3999, '2016-08-27 14:20:00', 6, 'productimages/antique_phonograph_by_scrapbee.png', 'Radhe', 'radhe.krishna@yahoo.com', '9658656454'),
(46, 'Antique 20524171', 'antique show ', 2999, '2016-08-27 14:20:00', 1, 'productimages/20524171.jpg', 'ramu kaka', 'ramukaka566@rediff.com', '9568659965'),
(47, 'Antique design', 'antique design 56864 ', 3049, '2016-08-27 14:20:00', 1, 'productimages/Antique.jpg', 'ramu kaka', 'ramukaka566@rediff.com', '9568659965'),
(48, ' painting fathers day', 'fathers day painting 56864 ', 3999, '2016-08-27 14:20:00', 2, 'productimages/art.jpg', 'sallu ', 'sallu566@rediff.com', '9568659965'),
(49, 'tailer swift Guitar', 'swift_left-handed-electric-guitar-fender-standard-stratocaster-west-bengal_rev002', 10000, '2016-08-27 14:20:00', 6, 'productimages/Instruments.jpg', 'Roxtar ', 'roxtar1122@yahoo.com', '6656516565'),
(50, 'burnt Guitar', 'burnt electric guitar-fender-standard-stratocaster-west-bengal_rev002', 7889, '2016-08-27 14:20:00', 6, 'productimages/burnt electric guitar.jpeg', 'Roxtar ', 'roxtar1122@yahoo.com', '6656516565'),
(51, 'Ducati MS4R-RS', 'ducati MS4R-RS-Straight-Sky-THUMB-700, new and well maintained...in short mast h bhai..aram se chalana', 65999, '2016-08-27 14:20:00', 4, 'productimages/ducati MS4R-RS-Straight-Sky-THUMB-700.jpg', 'Viny', 'Viny007@gmail.com', '9569569877'),
(52, 'harley davidson', 'harley davidson, new and well maintained...in short mast h bhai..aram se chalana', 98999, '2016-08-27 14:20:00', 4, 'productimages/harley davidson_bike_cover_4.jpg', 'Viny', 'Viny007@gmail.com', '9569569877'),
(53, 'harley davidson 077', 'harley davidson, new and well maintained...in short mast h bhai..aram se chalana', 97898, '2016-08-27 14:20:00', 4, 'productimages/harley_timeline_cover_5.jpg', 'Viny', 'Viny007@gmail.com', '9569569877'),
(54, 'Sachin Farewell', 'Sachin Tendulkarv Farewell...the living lagends', 4999, '2016-08-27 14:20:00', 7, 'productimages/sports.jpg', 'Ujjwal', 'ujjwal5@gmail.com', '3546303651'),
(55, 'Antique car 232', 'beast, new and well maintained..aram se chalana', 202999, '2016-08-27 14:20:00', 3, 'productimages/images.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(56, 'Antique car 233', '736793-antique-car beast, new and well maintained..aram se chalana', 199568, '2016-08-27 14:20:00', 3, 'productimages/736793-antique-car.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(57, 'world_top', 'world_top_ beast, new and well maintained..aram se chalana', 395948, '2016-08-27 14:20:00', 3, 'productimages/world_top_10.jpeg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(58, 'world_top 566', 'world_top_566 beast, new and well maintained..aram se chalana', 395999, '2016-08-27 14:20:00', 3, 'productimages/World-Top-Exotic-Car-Wallpaper-HD.jpg', 'Ven Martin', 'Martin3@hotmail.com', '556591651'),
(60, 'antique_phonograph', 'antique_phonograph_by_scrapbee...suno sunao life bnao', 3999, '2016-08-27 14:20:00', 1, 'productimages/antique_phonograph_by_scrapbee.png', 'Radhe', 'radhe.krishna@yahoo.com', '9658656454'),
(61, 'Ulysse-Nardin', 'Ulysse-Nardin-Chairman-back...the most expensive phone in the world', 150000, '2016-08-27 14:20:00', 8, 'productimages/Ulysse-Nardin-Chairman-back.jpg', 'john', 'john787@hotmail.com', '64586544'),
(62, 'mobiado_grand 350', 'mobiado_grand 350 pioneer...the most expensive phone in the world', 120000, '2016-08-27 14:20:00', 8, 'productimages/mobiado_grand 350 pioneer.jpg', 'john', 'john787@hotmail.com', '64586544'),
(63, 'ulysse_nardin', 'ulysse_nardin_chairman...the most expensive phone in the world', 117000, '2016-08-27 14:20:00', 8, 'productimages/ulysse_nardin_chairman.jpg', 'john', 'john787@hotmail.com', '64586544'),
(64, 'blackberry porsche', 'blackberry_porsche_p9981...the most expensive phone in the world', 130000, '2016-08-27 14:20:00', 8, 'productimages/blackberry_porsche_p9981.jpg', 'john', 'john787@hotmail.com', '64586544'),
(65, 'tag_heuer_link', 'tag_heuer_link_exclusive...the most expensive phone in the world', 1180000, '2016-08-27 14:20:00', 8, 'productimages/tag_heuer_link_exclusive.jpg', 'john', 'john787@hotmail.com', '64586544'),
(66, 'iphone_5', 'iphone_5_black_diamond_back_stuart_hughes...the most expensive phone in the world', 2000000, '2016-08-27 14:20:00', 8, 'productimages/iphone_5_black_diamond_back_stuart_hughes.jpg', 'john', 'john787@hotmail.com', '64586544'),
(67, 'lamborghini', 'tonino lamborghini_antares..the most expensive phone in the world', 1890000, '2016-08-27 14:20:00', 8, 'productimages/tonino lamborghini_antares.jpg', 'john', 'john787@hotmail.com', '64586544'),
(68, 'htc_one_gold', 'htc_one_gold..the most expensive phone in the world', 1880000, '2016-08-27 14:20:00', 8, 'productimages/htc_one_gold.jpg', 'john', 'john787@hotmail.com', '64586544'),
(69, 'antique-design', 'antique-design-Wall-Tapestry-art', 2226, '2016-08-27 14:20:00', 2, 'productimages/antique-design-Wall-Tapestry-art.jpg', 'abhishek babu', 'abhi223@gmail.com', '46585584');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `Email`, `FirstName`, `LastName`, `Mob`, `password`) VALUES
(1, 'vinit1111', 'vinit', 'kumar', '9509042871', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Price` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `Name`, `Price`, `pid`) VALUES
(7, 'vinitraj11', 3000, 46),
(24, 'ashish11', 90000, 1),
(25, 'vinitraj11', 600000, 1),
(26, 'ashish11', 600500, 1),
(27, 'ashish11', 610000, 1),
(28, 'vinitraj11', 620000, 1),
(29, 'vinitraj11', 620500, 1),
(30, 'ashish11', 1234555, 35);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`uid`, `Email`, `FirstName`, `LastName`, `Mob`, `password`) VALUES
(2, 'ujjawalpvce', 'ujjawal', 'kumar', '8389972892', '45322'),
(4, 'vinitraj11', 'Vinit', 'Kumar', '9509042871', '123456'),
(10, 'wewe', 'qwq', 'wqw', 'sa', '123'),
(11, 'ashish11', 'ashish', 'kumar', '9024511865', '112233'),
(12, 'mahi123', 'mahesh', 'kumar', '8290027454', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'Antique', '#', 0, 0),
(2, 'Art', '#', 0, 0),
(3, 'Cars', '#', 0, 0),
(4, 'Bikes', '#', 0, 0),
(5, 'coins', '#', 0, 0),
(6, 'Instruments', '#', 0, 0),
(7, 'Sports', '#', 0, 0),
(8, 'Mobiles', '#', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD CONSTRAINT `parent` FOREIGN KEY (`cid`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
