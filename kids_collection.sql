-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2020 at 05:20 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kids_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('ucsc', 'ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `buyes_feedbacks`
--

DROP TABLE IF EXISTS `buyes_feedbacks`;
CREATE TABLE IF NOT EXISTS `buyes_feedbacks` (
  `feedback_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `item_code` int(10) NOT NULL,
  `item_condition` text NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyes_feedbacks`
--

INSERT INTO `buyes_feedbacks` (`feedback_no`, `name`, `item_code`, `item_condition`, `feedback`) VALUES
(1, 'prabhath', 33, 'High', 'adeee meka nam elakiri..podi ekaata aran dunnata gaththa dawase indan mamai sellam kareeee... supiri.. :p'),
(2, 'athapaththu', 10, 'Medium', 'this is amazing. very beautiful...'),
(3, 'supun', 70, 'High', 'niyamai niyamai niyamai niyamai niyamai ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `supplier_name`) VALUES
(100, 'Baby Milk Bottle', 'PRABHATH'),
(200, 'Baby Shoes', 'HIRUNI'),
(300, 'Electric Cars', 'SHASHINI'),
(400, 'Electric Bikes', 'PAHANI'),
(500, 'Desk & Chair', 'SAMANMALI'),
(600, 'Diapers', 'PRAMEETH'),
(700, 'Baby Mosquito Net', 'RUVINI');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ftp` int(10) NOT NULL,
  `mtp` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `useful` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `ftp`, `mtp`, `comment`, `useful`) VALUES
('qqqqqq', 'qqqqqqq', 'qqqqqqqqq', 1111111111, 1111111111, 'pppppppppppp', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `daily_update`
--

DROP TABLE IF EXISTS `daily_update`;
CREATE TABLE IF NOT EXISTS `daily_update` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `sold_date` date NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_update`
--

INSERT INTO `daily_update` (`no`, `sold_date`, `item_id`, `item_name`, `category`, `qty`) VALUES
(16, '2020-01-01', 10, 'Baby Plactic Milk Bottle', 'Baby Milk Bottle', 1),
(17, '2020-01-01', 11, 'USB milk bottle', 'Baby Milk Bottle', 5),
(22, '2020-01-14', 21, 'Light Up Shoes', 'Baby Shoes', 4),
(19, '2020-01-07', 42, 'Electric Byk small', 'Electric Bikes', 7),
(20, '2020-01-03', 11, 'USB milk bottle', 'Baby Milk Bottle', 6),
(21, '2020-01-13', 42, 'Electric Byk small', 'Electric Bikes', 12),
(23, '2020-01-10', 41, 'Electric Byk', 'Electric Bikes', 2),
(24, '2020-01-25', 41, 'Electric Byk', 'Electric Bikes', 6),
(25, '2020-02-11', 61, 'colored diaper', 'Diapers', 10),
(26, '2020-02-11', 70, 'pink baby net', 'Baby Mosquito Net', 2),
(27, '2020-02-13', 71, 'blue baby net', 'Baby Mosquito Net', 20),
(28, '2020-02-04', 11, 'USB milk bottle', 'Baby Milk Bottle', 4),
(29, '2020-02-04', 72, 'small baby net', 'Baby Mosquito Net', 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `num` int(10) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `item_code` int(10) NOT NULL,
  `item_price` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `item_description` varchar(500) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`num`, `item_name`, `item_code`, `item_price`, `category`, `supplier_name`, `supplier_id`, `image_name`, `item_description`) VALUES
(2, 'Baby Plactic Milk Bottle', 10, 150, 'Baby Milk Bottle', 'PRABHATH', 4, 'feeding-bottle.jpg', 'snskjxbask sxhaskc nmn icjasiochaoscn'),
(3, 'USB milk bottle', 11, 500, 'Baby Milk Bottle', 'PRABHATH', 4, 'USB-milk-bottle.jpg', 'Material: Crystal velvet, Cotton.\r\nColor:Blue / Pink .\r\nSize: 30 x 14 cm / 11.81 x 5.51 inch (appr.).\r\nCable Length: 62 cm / 24.40 inch (appr.).'),
(4, 'stainless steel milk bottle', 12, 550, 'Baby Milk Bottle', 'PRABHATH', 4, 'stainless-steel-milk-bottle.jpg', 'abscbcn  joc sco csoc hs oc'),
(20, 'Electric Byk small', 42, 15000, 'Electric Bikes', 'PAHANI', 3, 'index.jpg', 'gjvk itfiyugogo o8go yg'),
(21, 'soft diaper', 60, 100, 'Diapers', 'PRAMEETH', 6, 'GettyImages-551150261-800x1176.jpg', 'soft diaper. white color. slkdsa dnjasd jsd ijdpas'),
(22, 'colored diaper', 61, 120, 'Diapers', 'PRAMEETH', 6, 'mother-earth-cloth-diaper-rental.jpg', 'colored diaper.for babies under 4 year '),
(23, 'pampers swaddler', 62, 90, 'Diapers', 'PRAMEETH', 6, 'GUEST_1afd23b5-d0e5-44b6-b4e2-79e0bb1438a4.jpg', 'dabsdkb odhao dpsojd sodihsoidoasd o oodhaso dhoasd'),
(5, 'Blue Suede baby shes', 20, 1000, 'Baby Shoes', 'HIRUNI', 2, 'blue-suede-baby-shoes.jpg', '    Product Feature:\r\n    Product Category: Toddler Shoes\r\n    Applicability: Neutral/Both men and women can\r\n    Upper Material: Canvas\r\n    Suitable for the season: Autumn\r\n    Function: Anti-skid\r\n    Thickness: normal thick\r\n    Cylinder Height: Medium cylinder\r\n    Is there a light: no\r\n    Is there a noise: no\r\n    Upper Height: High gang\r\n    Color: Powder, blue, dark blue, grey\r\n    Size: 11,12,13\r\n    Package Content: 1 pair shoes'),
(6, 'Light Up Shoes', 21, 2500, 'Baby Shoes', 'HIRUNI', 2, 'light-up-shoes.jpg', 'scmSCOKA CPOA;NCAL.'),
(7, 'Electric Jeep', 30, 15000, 'Electric Cars', 'SHASHINI', 1, 'Jeep-Website.jpg', 'c clka jcoi jcd choiachoica;hn.c '),
(8, 'Toddler Shoes', 22, 1900, 'Baby Shoes', 'HIRUNI', 2, 'toddler-shoes.jpg', 'cakshcb cocjadcn;a'),
(9, 'Remote control Electric car', 31, 12000, 'Electric Cars', 'SHASHINI', 1, 'remote-control-car.jpg', 'clcjnj ch hcouchod coi '),
(10, 'Remote control Electric Red BENZ car', 33, 20000, 'Electric Cars', 'SHASHINI', 1, 'remote-control-kids-electric-cars-kids-ride-on-toys.jpg_q50.jpg', 'kja iojao  aijcpias'),
(11, 'Harley davidion electric Byk', 40, 18000, 'Electric Bikes', 'PAHANI', 3, 'Harley-Davidson-electric-bikes-for-Kids-1.jpg', 'nasjc hk hclcjk dklcjsd'),
(12, 'Electric Byk', 41, 25000, 'Electric Bikes', 'PAHANI', 3, 'electric_bike.jpg', 'ASCSDC DVSDVSVS'),
(13, 'Blue theme chair and desk', 50, 5000, 'Desk & Chair', 'SAMANMALI', 5, 'chair-&-desk.jpg', 'cnadclka lkdcj c jdc'),
(14, 'One desk & couple chair', 51, 6500, 'Desk & Chair', 'SAMANMALI', 5, 'desk-chair.jpg', 'msnca cpjcpancp a'),
(15, 'Mini Table & Chair', 52, 6800, 'Desk & Chair', 'SAMANMALI', 5, 'small-desk-and-chair-set-small-desk-desk-chair-small-desk-small-desk-large-size-of-kids-desk-chairs-desk-small-desk-small-office-table-and-chair-set.jpg', 'nsjkn j;osj;lasnx; xj;as'),
(16, 'Rotating Chair', 53, 7000, 'Desk & Chair', 'SAMANMALI', 5, 'desk-chairs-for-kids-kids-desk-chairs-child-desk-chair-awesome-boys-desk-chair-kqgyxuk-.jpg', 'asb oijcoaidhcj cpjcpa dcjp'),
(17, 'Soften Wool Chair', 54, 3900, 'Desk & Chair', 'SAMANMALI', 5, 'ab10e0f018465e83559bc1a38daa1f47.jpg', 'xhsnx pokpo jhsb ccui coh oqsuchqs cojs'),
(18, 'Kids Play chair and Desk', 55, 9000, 'Desk & Chair', 'SAMANMALI', 5, 'Children-Furniture-Sets-1-desk-2-chairs-sets-plastic-kids-Furniture-sets-kids-chair-and-study.jpg', 'sjncakjc dcjdcijd cpkcpadhcoadnc'),
(19, 'Pink theme Desk and Chair', 56, 7599, 'Desk & Chair', 'SAMANMALI', 5, 'Hellokitty-cat-lift-desk-chair-desk-baby-learning-table-and-chairs-child-furniture-set.jpg', 'asnn  csj cionc mca dmc oicjas ocjaspc'),
(24, 'pink baby net', 70, 2000, 'Baby Mosquito Net', 'RUVINI', 7, '71ZpVyh0CKL._SY355_.jpg', 'very nice very nice very nice very nice very nice '),
(25, 'blue baby net', 71, 3200, 'Baby Mosquito Net', 'RUVINI', 7, 'baby-bucket-mosquito-net-floral-design-may-vary-bluelarge.jpg', 'very nice good very nice good very nice good very nice good \r\n'),
(26, 'small baby net', 72, 1500, 'Baby Mosquito Net', 'RUVINI', 7, 'Colorful-Baby-Umbrella-Mosquito-Net.jpg_350x350.jpg', 'GOOD GOOD GOOD GOOD GOOD GOOD GOOD'),
(27, 'baby bedding with net', 73, 2500, 'Baby Mosquito Net', 'RUVINI', 7, 'Summer-Baby-Bedding-Crib-Netting-Baby-Infant-Bed-Canopy-Mosquito-Nets-with-Mattress-Pillow-Baby-Mosquito.jpg', 'sbblnjs osjih9psj  sxh09w jx0');

-- --------------------------------------------------------

--
-- Table structure for table `manager_to_supplier`
--

DROP TABLE IF EXISTS `manager_to_supplier`;
CREATE TABLE IF NOT EXISTS `manager_to_supplier` (
  `supplier` varchar(50) NOT NULL,
  `msg_date` text NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_to_supplier`
--

INSERT INTO `manager_to_supplier` (`supplier`, `msg_date`, `msg`) VALUES
('0', '2020-01-01', 'hello...'),
('', '2020-01-02', 'hello machan'),
('', '2020-01-02', 'hello machan'),
('PAHANI', '2020-01-03', 'hellowwwwwww'),
('PRABHATH', '2020-01-09', 'adoo bokka moko wenne?'),
('PRABHATH', '2020-01-26', 'hellooo machan kohomada?');

-- --------------------------------------------------------

--
-- Table structure for table `m_to_sk_msg`
--

DROP TABLE IF EXISTS `m_to_sk_msg`;
CREATE TABLE IF NOT EXISTS `m_to_sk_msg` (
  `msg_date` text NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_to_sk_msg`
--

INSERT INTO `m_to_sk_msg` (`msg_date`, `msg`) VALUES
('2020-01-01', 'hello'),
('2020-01-26', 'oi pissu kelinnathuwa hariyata update eka dipan');

-- --------------------------------------------------------

--
-- Table structure for table `new_inventory`
--

DROP TABLE IF EXISTS `new_inventory`;
CREATE TABLE IF NOT EXISTS `new_inventory` (
  `item_name` varchar(50) NOT NULL,
  `item_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_inventory`
--

INSERT INTO `new_inventory` (`item_name`, `item_code`, `qty`) VALUES
('Electric Byk', 41, 20),
('pink baby net', 70, 12),
('blue baby net', 71, 50),
('baby bedding with net', 73, 25);

-- --------------------------------------------------------

--
-- Table structure for table `new_suppliers`
--

DROP TABLE IF EXISTS `new_suppliers`;
CREATE TABLE IF NOT EXISTS `new_suppliers` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `id` text NOT NULL,
  `age` text NOT NULL,
  `email` text NOT NULL,
  `fixed_tp` text NOT NULL,
  `mobile_tp` text NOT NULL,
  `sex` text NOT NULL,
  `ex_year` text NOT NULL,
  `goods` varchar(200) NOT NULL,
  `import_from` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_suppliers`
--

INSERT INTO `new_suppliers` (`fname`, `lname`, `id`, `age`, `email`, `fixed_tp`, `mobile_tp`, `sex`, `ex_year`, `goods`, `import_from`, `username`, `password`) VALUES
('prameeth', 'maduwantha', '982543658v', '21', 'prameethmaduwantha@gmail.com', '0112546987', '0759846524', 'male', 'about 4 years', 'Diapers', 'German', 'PRAMEETH', '123123'),
('sadareaka', 'nuwanmali', '981111111v', '21', 'samanmali@gmail.com', '0113000000', '0754111111', 'female', '', 'Desk & Chair', 'Korea', 'SAMANMALI', '123123'),
('pahani', 'attanayake', '990000000v', '20', 'pahani@gmail.com', '0112333333', '0762222222', 'female', '6', 'Electric Bikes', 'Japan', 'PAHANI', '123123'),
('shashini', 'tharuka', '970000000v', '22', 'shashini@gmial.com', '0114000000', '0780000000', 'female', '', 'Electric Cars', 'China', 'SHASHINI', '123123'),
('prabhath', 'darshana', '971672498v', '22', 'prabhathdarshana@icloud.com', '0112666666', '0766666666', 'male', '5', 'Baby Milk Bottle', 'Japan', 'PRABHATH', '123123'),
('hiruni', 'amarakoon', '980000000v', '21', 'hiruni@gmail.com', '0112000000', '0760000000', 'female', '3', 'Baby Shoes', 'Japan', 'HIRUNI', '123123'),
('pavithra', 'janani', '929865134v', '27', 'pavijanani@gmail.com', '0112456789', '0789465312', 'female', '', 'Playmats & Playpens', 'France', 'JANANI', 'ucsc'),
('ruvini', 'sachithra', '992645887v', '21', 'ruvinisachi@gmail.com', '0115647862', '0752647852', 'female', '4', 'Baby Mosquito Net', 'Japan', 'RUVINI', 'ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

DROP TABLE IF EXISTS `search_history`;
CREATE TABLE IF NOT EXISTS `search_history` (
  `search_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_history`
--

INSERT INTO `search_history` (`search_by`) VALUES
('name'),
('name'),
(''),
('name'),
('name'),
('name'),
(''),
(''),
(''),
(''),
(''),
(''),
('');

-- --------------------------------------------------------

--
-- Table structure for table `send_quota_to_supplier`
--

DROP TABLE IF EXISTS `send_quota_to_supplier`;
CREATE TABLE IF NOT EXISTS `send_quota_to_supplier` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `sup_id` int(11) NOT NULL,
  `send_date` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_quota_to_supplier`
--

INSERT INTO `send_quota_to_supplier` (`no`, `sup_id`, `send_date`, `item_id`, `item_name`, `qty`) VALUES
(3, 4, '2020-01-25', 10, 'Baby Plactic Milk Bottle', 10),
(2, 4, '2020-01-01', 10, 'Baby Plactic Milk Bottle', 10),
(4, 4, '2020-01-27', 12, 'stainless steel milk bottle', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

DROP TABLE IF EXISTS `sk`;
CREATE TABLE IF NOT EXISTS `sk` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`username`, `password`) VALUES
('store_keeper', 'ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `sk_contact_manager`
--

DROP TABLE IF EXISTS `sk_contact_manager`;
CREATE TABLE IF NOT EXISTS `sk_contact_manager` (
  `msg_date` text NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_contact_manager`
--

INSERT INTO `sk_contact_manager` (`msg_date`, `msg`) VALUES
('2020-01-01', 'hello manager'),
('2020-01-16', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
('2020-01-23', 'ascbasycvschbaco'),
('2020-01-02', 'aaaaaaaaaaaaaaaaaaaaaaaaaa'),
('2020-01-26', 'hari hari oi update karanawa baya wennepa');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `item_name` varchar(100) NOT NULL,
  `item_code` int(10) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item_name`, `item_code`, `qty`) VALUES
('USB milk bottle', 11, 1),
('Baby Plactic Milk Bottle', 10, 4),
('stainless steel milk bottle', 12, 1),
('Blue Suede baby shes', 20, 10),
('Light Up Shoes', 21, 6),
('Toddler Shoes', 22, 10),
('Electric Jeep', 30, 10),
('Remote control Electric car', 31, 10),
('Remote control Electric Red BENZ car', 33, 10),
('Harley davidion electric Byk', 40, 10),
('Electric Byk', 41, 2),
('Blue theme chair and desk', 50, 10),
('One desk & couple chair', 51, 10),
('Mini Table & Chair', 52, 24),
('Rotating Chair', 53, 16),
('Soften Wool Chair', 54, 18),
('Kids Play chair and Desk', 55, 4),
('Pink theme Desk and Chair', 56, 11),
('Electric Byk small', 42, 6),
('soft diaper', 60, 40),
('colored diaper', 61, 15),
('pampers swaddler', 62, 30),
('pink baby net', 70, 10),
('blue baby net', 71, 30),
('small baby net', 72, 3),
('baby bedding with net', 73, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sup_to_admin`
--

DROP TABLE IF EXISTS `sup_to_admin`;
CREATE TABLE IF NOT EXISTS `sup_to_admin` (
  `sup_id` int(10) NOT NULL,
  `sup_name` varchar(50) NOT NULL,
  `msg_date` text NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sup_to_admin`
--

INSERT INTO `sup_to_admin` (`sup_id`, `sup_name`, `msg_date`, `msg`) VALUES
(4, 'PRABHATH', '2020-01-02', 'adoooo manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(4, 'PRABHATH', 'ucsc'),
(2, 'HIRUNI', 'ucsc'),
(1, 'SHASHINI', 'ucsc'),
(7, 'RUVINI', 'ucsc'),
(3, 'PAHANI', 'ucsc'),
(5, 'SAMANMALI', 'ucsc'),
(6, 'PRAMEETH', 'ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `user_duplicate`
--

DROP TABLE IF EXISTS `user_duplicate`;
CREATE TABLE IF NOT EXISTS `user_duplicate` (
  `user_id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_duplicate`
--

INSERT INTO `user_duplicate` (`user_id`, `username`, `password`) VALUES
(4, 'PRABHATH', 'ucsc'),
(2, 'HIRUNI', 'ucsc'),
(1, 'SHASHINI', 'ucsc'),
(3, 'PAHANI', 'ucsc'),
(5, 'SAMANMALI', 'ucsc'),
(7, 'RUVINI', 'ucsc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
