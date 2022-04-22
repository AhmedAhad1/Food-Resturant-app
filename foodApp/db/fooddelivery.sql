-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 02:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `fname`, `lname`, `email`, `address`, `phone`, `message`) VALUES
(1, 'rakib', 'hasan', 'abc@gmail.com', '123', '123', 'good'),
(2, 'Ahad', 'ahmed', 'ahad714@gmail.com', '123', '123', 'nice work');

-- --------------------------------------------------------

--
-- Table structure for table `menu_table`
--

CREATE TABLE `menu_table` (
  `order_no` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_table`
--

INSERT INTO `menu_table` (`order_no`, `type`, `name`, `price`, `image`, `description`) VALUES
(1, 'burger', 'Cheesy Blast', '300', 'burger-1.jpg\r\n', 'Freshly baked brioche bun, a juicy grilled beef patty with double sliced cheese, smothered in the best cheese sauce'),
(2, 'burger', 'BBQ temptation', '250', 'burger-4.jpg', 'Infused with BBQ-flavors, made in soft pretzel buns, and topped with caramelized onions and jalapenos'),
(3, 'burger', 'Beef Burger', '200', 'burger-3.jpg', 'Seasoned beef patty in sesame bun, topped with sliced cheese and fresh green lettuce, pickles, onion'),
(4, 'pizza', 'Pepperoni Pizza', '400', 'pizza-1.jpg', 'Pepperoni slices, tomato sauce, and fresh mozzarella cheese are layered on top of this delectable pizza'),
(5, 'Pizza', 'Chicken Sausage Pizza', '300', 'pizza-2.jpg', 'Sliced chicken sausages with an additional mushrooms, topped with shredded mozzarella cheese and pizza sauce'),
(6, 'pizza', 'Vegiteria Delight', '450', 'pizza-3.jpg', 'Whole wheat, topped with cheese, curd and added vegetables like spinach and onion'),
(7, 'pasta', 'Red Sauce pasta', '399', 'pasta-1.jpg', 'Filled with tangy tomatoes, bell peppers, onions, garlic, and herbs'),
(8, 'pasta', 'Pasta de filipino', '450', 'pasta-5.jpg', 'Filipino styled with sauteed ground beef, sliced hotdogs, and banana sauce'),
(9, 'pasta', 'Creamy Cheese ', '499', 'pasta-6.jpg', 'Loaded with cream cheese, garlic, onions, and seasonings with lots of melty parmesan cheese'),
(10, 'shake', 'Strawberry Shake', '180', 'shake-1.jpg', 'Rich, creamy ice-cream, and frozen strawberries, honey, with a hint of malt, topped with whipped cream'),
(11, 'shake', 'Mountain Lava', '200', 'shake-2.jpg', 'Refreshing smoothie with juice, yogurt, frozen blueberries, and strawberries'),
(12, 'shake', 'Oreo Shake', '180', 'shake-3.jpg', 'Chocolate ice cream, milk, whipped cream, and Oreo cookie'),
(13, 'shake', 'Vanilla Shake', '180', 'shake-4.jpg', 'Vanilla Ice cream, milk, vanilla extract, topped with whipped cream and sprinkles');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `order_no` text NOT NULL,
  `item_name` text NOT NULL,
  `price` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `total_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `order_no`, `item_name`, `price`, `email`, `name`, `address`, `qty`, `total_price`) VALUES
(34, '5', 'Chicken Sausage Pizza', '300', 'ahad714@gmail.com', 'Ahad Tanvir', 'jamuna', '2', '600'),
(35, '8', 'Pasta de filipino', '450', 'ahad714@gmail.com', 'Ahad Tanvir', 'My house', '2', '900'),
(36, '8', 'Pasta de filipino', '450', 'ahad714@gmail.com', 'Ahad Tanvir', 'bashundhara', '4', '1800');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `email` varchar(100) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`email`, `fname`, `lname`, `password`, `type`) VALUES
('admin@gmail.com', 'Tanvir', 'Ahmed', '123', 'admin'),
('ahad714@gmail.com', 'Ahad', 'Ahmed', '123', 'user'),
('fayeeza@gmail.com', 'fayeeza', 'islam', '123', 'user'),
('shaba@gmail.com', 'sumaia', 'shaba', '123', 'user'),
('tahsin@email.com', 'tahsin', 'chowdhury', '123', 'user'),
('tanvir@gmail.com', 'tanvir', 'Ahmed', '123', 'user'),
('zakaria@gmail.com', 'zakaria', 'kabir', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_table`
--
ALTER TABLE `menu_table`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_table`
--
ALTER TABLE `menu_table`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
