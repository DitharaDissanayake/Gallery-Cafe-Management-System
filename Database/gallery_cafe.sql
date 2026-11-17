-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2026 at 03:49 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cuisine_type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name`, `cuisine_type`, `price`, `description`, `image_url`) VALUES
(1, 'Biriyani', 'Italian', 1500.00, 'Biryani is a fragrant, spiced rice dish often cooked with tender meat, vegetables, and aromatic spices, creating a rich and flavorful experience.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.hO8hKgT-deiEfqRlw6BIPAAAAA?w=192&h=192&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(2, 'Noodles', 'Italian', 1000.00, 'Noodles are versatile, savory strands of dough that can be stir-fried, boiled, or served in soups, often accompanied by a variety of vegetables, meats, and sauces.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.te9gPiD8UiUZ0XQ1qcAjEAHaEL?w=311&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(3, 'Pasta', 'Italian', 1000.00, 'Pasta is a beloved Italian staple made from wheat flour and water, typically shaped into various forms and served with a wide range of sauces and ingredients.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.IiN__wtfN_K_u2ersw5hWgHaFp?w=251&h=191&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(4, 'BBQ', 'Italian', 2500.00, 'BBQ is a cooking method and social event featuring meat and vegetables grilled over open flames or coals, often seasoned with flavorful marinades or sauces.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.0z3NYdpBSA11rEXYpf8jNgHaHZ?w=160&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(5, 'Rice and Curry', 'Sri Lankan', 900.00, 'Rice and curry is a classic dish consisting of steamed rice served with a variety of rich, spiced curry sauces, often including vegetables, meat, or legumes.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.Wx5kHDANRdvkef-o7Src5AHaET?w=322&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(6, 'Hoppers', 'Sri Lankan', 250.00, 'Hoppers are a type of crispy, bowl-shaped pancake made from fermented rice flour and coconut milk, often enjoyed with a variety of savory or sweet accompaniments.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.jp4mcbj-nX9DH8dODReplwHaEp?w=311&h=195&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(9, 'Kimchi', 'Chinese', 1500.00, 'Kimchi is a traditional Korean side dish of fermented vegetables, usually cabbage or radishes, seasoned with spices, garlic, and ginger for a tangy, spicy flavor.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.JTz0XL3D95WpdRsjrcW3BAHaHa?w=167&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(7, 'Kottu', 'Sri Lankan', 1000.00, 'Kottu is a popular Sri Lankan dish made from chopped roti stir-fried with vegetables, meat, and spices, creating a flavorful and hearty meal.\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.7IvE1E7OqApE-i8b9NcuvQAAAA?w=168&h=186&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(10, 'Ramen', 'Chinese', 3000.00, 'Ramen is a Japanese noodle soup featuring rich, flavorful broth, tender noodles, and a variety of toppings such as sliced pork, soft-boiled eggs, and fresh vegetables.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.7rI1K8BzNGJGiDg0KmKK_wHaHt?w=165&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(8, 'Roti', 'Sri Lankan', 350.00, 'Roti is a type of unleavened flatbread made from whole wheat flour, commonly served as an accompaniment to a variety of dishes and curries.\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.WBPgY1s7kRuGow-07rU2EQHaF7?w=217&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(11, 'Hot Dog', 'Chinese', 600.00, 'A hot dog is a grilled or steamed sausage served in a sliced bun, often topped with condiments like mustard, ketchup, onions, and relish.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.NPKd3KI63tONI5Ifkr9EnQHaFx?w=227&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(12, 'Bibimbap', 'Chinese', 950.00, 'Bibimbap is a Korean mixed rice dish topped with a variety of vegetables, meats, a fried egg, and gochujang (red chili paste), all stirred together before eating.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'https://th.bing.com/th/id/OIP.LCNvZ28wPwZ3ODl1r5JUrgHaFV?w=238&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7');

-- --------------------------------------------------------

--
-- Table structure for table `pre_orders`
--

DROP TABLE IF EXISTS `pre_orders`;
CREATE TABLE IF NOT EXISTS `pre_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `meal_id` int NOT NULL,
  `quantity` int NOT NULL,
  `order_date` datetime NOT NULL,
  `status` enum('confirmed','pending','canceled') DEFAULT 'pending',
  `order_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `user_id` (`user_id`),
  KEY `meal_id` (`meal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `table_capacity` int NOT NULL,
  `reservation_date` datetime NOT NULL,
  `status` enum('confirmed','pending','canceled') DEFAULT 'pending',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `table_capacity`, `reservation_date`, `status`) VALUES
(13, 1, 4, '2024-08-09 11:50:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Name` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Name`, `Role`, `Email`) VALUES
('Anurada', 'Admin', 'anu@gmail.com'),
('Anurada', 'Admin', 'anu@gmail.com'),
('aruni', 'staff', 'arni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff','customer') NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(13, 'amith', '$2y$10$ui.lG./.a2NUVR6z8BASnuVcowhIAsO4wtfgmYEVSFM0oCjKjurHi', 'admin', 'amith@gmail.com'),
(12, 'shanika', '$2y$10$pdV07W7/770/zHixAkQ.2uCyKg5quAeP8Spw4XHcNP0aU165tJ3yW', 'staff', 'sa@gmail.com'),
(9, 'kamal', '$2y$10$bK/I3j6OBnHimAm7n/4lT.fXqeaf9h8e/mj8dCk.0ZPwq0Cf/AXgW', 'admin', 'kama@gmail.com'),
(10, 'hiruki', '$2y$10$0QeVCWkGMklF6d8vBi16VOyywmcvgrY8owtnp7qJl/uAR7/uiqS0i', 'staff', 'hiruki@gmail.com'),
(11, 'kalani', '$2y$10$68INa.eZ0Qnc9fW9VOg1SOEAhq67SEj6LPsWNw81MhyM0nD.71lHO', 'customer', 'kal@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
