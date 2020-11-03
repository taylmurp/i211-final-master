-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 07:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNum` int(6) UNSIGNED NOT NULL,
  `productNum` int(6) UNSIGNED NOT NULL,
  `userNum` int(6) UNSIGNED NOT NULL,
  `orderDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNum`, `productNum`, `userNum`, `orderDate`) VALUES
(600001, 300000, 1, '2018-11-06 08:31:12'),
(600002, 300003, 5, '2018-11-01 13:27:00'),
(600003, 300004, 4, '2018-11-05 16:29:39'),
(600004, 300001, 3, '2018-11-03 00:00:00'),
(600005, 300002, 2, '2018-11-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productNum` int(6) UNSIGNED NOT NULL,
  `productName` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productNum`, `productName`, `price`, `image`, `description`) VALUES
(1, 'Whole Milk', '1.79', '', 'You can find it on the doors of almost every refrigerator and in countless bowls of cereal across the world. With a smooth, creamy flavor in every sip and an added serving of calcium and Vitamin D, what is not to love about Vitamin D Whole Milk? There is a reason why it is always at the top of your grocery list.'),
(2, '2% Reduced Fat Milk', '1.79', '', 'You can find it on the doors of almost every refrigerator and in countless bowls of cereal across the world. From cake to yogurt, milk is an essential ingredient in a variety of recipes. 2% Reduced Fat Milk offers 37% less fat than regular milk with no loss to its smooth, refreshing flavor. There is a reason why it is always at the top of your grocery list.'),
(3, 'Extra Large Eggs, Dozen', '0.69', '', 'From savory omelets to tasty cakes, Grade-A Eggs are an essential in countless delectable dishes. No matter how you like your eggs, there is nothing quite like their versatile taste. You can enjoy them on sandwiches, doused on hot sauce, or even tossed in rice. You can try something different for every meal with Cage Free Eggs!'),
(4, 'Liquid Laundry Detergent', '6.29', '', 'Cool and crisp with intangible charm. One sniff and you will understand why it is the scent that started the phenomenon. LL detergent is designed especially for high efficiency washing machines both the front and top loading kinds.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userNum` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `creditCard` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userNum`, `firstname`, `lastname`, `phoneNumber`, `address`, `creditCard`, `username`, `password`, `role`) VALUES
(1, 'Mick', 'Jager', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'MJager', 'MJager', 2),
(2, 'Steve ', 'Lukather', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'SLukather', 'SLukather', 2),
(3, 'Colin', 'Hay', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'CHay', 'CHay', 2),
(4, 'Hawkeye', 'Pierce', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'HPierce', 'HPierce', 2),
(5, 'Frank', 'Burns', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'FBurns', 'FBurns', 2),
(6, 'Admin', 'Admin', 123456789, '1840 Century Park East, Los Angeles, CA 90067 ', 2147483647, 'Admin', 'Password', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
