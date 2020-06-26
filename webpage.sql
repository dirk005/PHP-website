-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 03:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'test@test.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Car_id` int(250) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Make` varchar(250) DEFAULT NULL,
  `Mileage` varchar(250) DEFAULT NULL,
  `Model` varchar(250) DEFAULT NULL,
  `Year` varchar(250) DEFAULT NULL,
  `Transmission` varchar(250) DEFAULT NULL,
  `Price` varchar(250) DEFAULT NULL,
  `Details` varchar(500) DEFAULT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `img5` varchar(250) NOT NULL,
  `img6` varchar(250) NOT NULL,
  `img7` varchar(250) NOT NULL,
  `img8` varchar(250) NOT NULL,
  `img9` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Car_id`, `Title`, `Make`, `Mileage`, `Model`, `Year`, `Transmission`, `Price`, `Details`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`) VALUES
(8, 'Polo Classic', 'Volkswagen', '120 000 km', 'Classic 1.6', '2008', 'Manual', '80 000', '<p>Air Conditioning, Power Steering, Automatic Brake System, Radio / CD, Security System, Air Bag, Central Locking , For more information on this vehicle please contact *******. All the space and comfort you would expect from a Polo Sedan. And with features that include Air Bags and Power Steering, you''ll be sure to travel in safety at all times.</p>', 'img/cars/1471513914.jpg ', 'img/cars/1471513918.jpg ', 'img/cars/1471513921.jpg ', 'img/cars/1471513932.jpg ', 'img/cars/1471513938.jpg ', '', '', '', ''),
(9, '2013 BMW 3 Series 320i', 'BMW', '9 675 Km', '320i', '2013', 'Automatic', '239 995 ', '<p>ABS, Air bags, Aircon, Alarm, Climate control, Cruise control, Electric Windows, Leather seats, Park distance control, Radio, Sunroof, Xenon lights</p>', 'img/cars/1471514273.jpg ', 'img/cars/1471514276.jpg ', 'img/cars/1471514279.jpg ', 'img/cars/1471514284.jpg ', 'img/cars/1471514290.jpg ', 'img/cars/1471514294.jpg ', 'img/cars/1471514301.jpg ', 'img/cars/1471514305.jpg ', 'img/cars/1471514309.jpg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `Car_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
