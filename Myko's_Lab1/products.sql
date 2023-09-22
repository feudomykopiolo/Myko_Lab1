-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2023 at 12:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int NOT NULL,
  `ProductCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `ProductCategory`) VALUES
(5, 'Apparel'),
(6, 'Beverages'),
(3, 'Food'),
(4, 'Furniture'),
(7, 'Sport Products');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `id` int NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductDescription` varchar(100) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductQuantity` int NOT NULL,
  `ProductPrice` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `ProductName`, `ProductDescription`, `ProductCategory`, `ProductQuantity`, `ProductPrice`) VALUES
(1, 'Laptop Table', 'mini table for students', 'Furniture', 1, 125),
(2, 'shoes', 'to style', 'Apparel', 1, 280),
(3, 'milk', 'Strengthens immune system', 'Beverages', 1, 180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ProductCategory` (`ProductCategory`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`ProductCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`ProductCategory`) REFERENCES `table_category` (`ProductCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
