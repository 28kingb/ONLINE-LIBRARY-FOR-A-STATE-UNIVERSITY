-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 08:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `dob`, `username`, `email`, `contact`, `address`, `gender`, `type`, `password`) VALUES
(1, 'Bilal', 'Ahmad', '0000-00-00', '28kingb', 'mohmmedbilalahmad@gmail.com', 766404540, '259/42, Pallansenawatte, Thimbirigaskatuwa, Dalupotha', 'male', 'professor', '2801'),
(3, 'Fateha', 'Ahmad', '0000-00-00', 'Fateha06', '22fawme@gmail.com', 701232533, '8th silver stein road', 'female', 'student', '123456'),
(4, 'TIm', 'Lorer', '0000-00-00', '22Dean', '22deam@gmail.com', 701232645, '8th street chese road', 'male', 'student', '369'),
(5, 'Dean', 'Weisskopf', '0000-00-00', '001', '28kingb@gmail.com', 701234596, 'ninth street', 'male', 'professor', '789');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `year`, `status`, `quantity`, `department`) VALUES
(1, 'The Lord Of The Ring', 'James Hold', '2002', 'Available', 25, 'Fiction'),
(2, 'Brene Brown', 'Atlas of the Heart', '2021', 'Available', 30, 'Children'),
(3, 'Will', 'Will Smith', '2005', 'Available', 51, 'Actors'),
(4, 'Wimpy Kid', 'Jeff Kiney', '2016', 'Available', 20, 'Children'),
(5, 'IT ENDS WITH US', 'Collen Hoovers', '2003', 'Available', 59, 'Novel'),
(6, 'Atomic Habits', 'James Clear', '1987', 'Available', 40, 'Novel'),
(7, 'LIFE SKILLS', 'Karen Harris', '1980', 'Available', 30, 'Teenagers'),
(8, 'CAT KID', 'Dav Pilker', '2008', 'Available', 80, 'Children'),
(9, 'All American Christmas', 'Rachel Campos-Duffy and Sean Duffy', '2021', 'Available', 35, 'Christmas'),
(10, 'The Horror', 'Filip De Morono', '1978', 'Available', 30, 'Horror'),
(11, 'Little Woman', 'Louisa May Alcoet', '2003', 'Available', 35, 'Christmas');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `status`, `bid`, `returned`, `day`, `fine`) VALUES
('28kingb', '8', 2021, '13', 325, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `returned` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `returned`) VALUES
('28kingb', 3, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2017-10-12', '2019-02-28'),
('28kingb', 5, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2018-02-23', '2021-12-11'),
('28kingb', 8, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2021-10-09', '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `dob`, `username`, `email`, `contact`, `address`, `gender`, `type`, `password`) VALUES
('TIm', 'Lorer', '0000-00-00', '22Dean', '22deam@gmail.com', 701232645, '8th street chese road', 'male', 'student', '369'),
('Bilal', 'Ahmad', '2001-10-28', '28kingb', 'mohmmedbilalahmad@gmail.com', 766404540, '259/42, Pallansenawatte, Thimbirigaskatuwa, Dalupotha', 'male', 'student', '2801'),
('Fateha', 'Ahmad', '0000-00-00', 'Fateha06', '22fawme@gmail.com', 701232533, '8th silver stein road', 'female', 'student', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
