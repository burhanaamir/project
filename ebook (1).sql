-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 11:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bdis` varchar(500) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `bprice` int(255) NOT NULL,
  `sprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `bname`, `bdis`, `aname`, `img`, `bprice`, `sprice`) VALUES
(28, 'Life Of The Wild', 'Memoir', ' John Grisham', 'main-banner1.jpg', 600, 40),
(29, 'Fashion System', 'Creative Non Fiction', 'Sarah J. Maas', 'product-item7.jpg', 2000, 200),
(30, 'Muscical ', 'ebook test', 'talha', 'product-item8.jpg', 200, 20);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact number` varchar(255) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `fname`, `lname`, `address`, `contact number`, `cod`) VALUES
(1, 'Burhanuddin', 'aamir', 'SFC', '2147483647', ''),
(2, 'Burhanuddin', 'aamir', 'SFC', '2147483647', ''),
(3, 'zain', 'aamir', 'SFC', '3213205', ''),
(4, 'zain', 'aamir', 'SFC', '05432056410', ''),
(5, 'zain', 'aamir', 'SFC', '05432056410', 'Cash On Delivery'),
(6, 'Burhanuddin', 'aamir', 'SFC', '03213205', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(8, 'zain', 'ckbjx@dkuj', 'lfdklxn'),
(9, 'zain', 'ckbjx@dkuj', 'lfdklxn');

-- --------------------------------------------------------

--
-- Table structure for table `featurecard`
--

CREATE TABLE `featurecard` (
  `id` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bdis` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `bprice` varchar(255) NOT NULL,
  `sprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `ordered` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `address`, `number`, `ordered`, `paytype`, `amount`) VALUES
(1, 'zain', 'burhanaamir19@gmail.com', 'SFC', '03330234475', 'book test', '2550', 'Cash On Delivery'),
(2, 'zain', 'burhanaamir10@gmail.com', 'SFC', '03330234475', 'BOOK', 'Cash On Delivery', '1500'),
(3, 'Burhanuddin', 'premsubs191@outlook.com', 'SFC', '05432056410', 'BOOK', '', '1500'),
(4, 'Burhanuddin', 'burhanaamir10@gmail.com', 'SFC', '03330234475', 'Life Of The Wild', 'Cash On Delivery', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'admin@ebook.com', '1234'),
(12, 'burhan@gmail.com', '1234'),
(13, 'burhanaamir10@gmail.com', '7536');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featurecard`
--
ALTER TABLE `featurecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `featurecard`
--
ALTER TABLE `featurecard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
