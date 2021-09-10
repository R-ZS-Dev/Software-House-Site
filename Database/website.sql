-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 12:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'a@123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(1, 'Muhammad', 'Irfan', 'razaq@gmail.com', 'razaq123', '12345'),
(2, 'Muhammad', 'Nouman', 'numan@example.com', 'nouman123', '12345'),
(3, 'Hamza', 'Amir', 'hello@.com', 'hamza123', '123454');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cnumber` varchar(12) NOT NULL,
  `intro` text NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `fname`, `lname`, `email`, `cnumber`, `intro`, `cv`) VALUES
(1, 'Muhammad', 'Amir', 'ali@example.com', '00000000000', 'I Am Your Employee.', ''),
(2, 'Muhammad', 'Ahmad', 'ahmad@example.com', '11111111111', 'I Am your DaD. :)', ''),
(3, 'Hamza', 'Javeed', 'javeed@123.com', '99999999999', 'I am Your Boss.', ''),
(4, 'Muhammad', 'Jameel', 'jameel@example.com', '77777777777', 'I am your Brother.', ''),
(5, 'Mr', 'Jhon Smith', 'john123@yahoo.com', '12345111111', 'I am your dad', '1628074239.'),
(6, 'Abdul', 'Baloch', 'abdul@yahoo.com', '33333333333', 'I am your Abdullah.', ''),
(7, 'Khan', 'Muhammad', 'khan@hotmail.com', '88888888888', 'I am Your DaD Khan Muhammad.', ''),
(8, 'Khan', 'Ali', 'ali@outlook.com', '22222222222', 'khan-Muhammad is your DaD.', ''),
(10, 'Mr', 'Muhammad', 'mr@example.com', '88888888888', 'I am Mr. Muhammad.', ''),
(11, 'Mr', 'Kamran', 'kami@yahoo.com', '77777777777', 'I am Mr. Kami mean Kamran.', ''),
(13, 'Mr.', 'Muhammad', 'muhammad@yahoo.com', '11111111111', 'Mr. Muhammad writes a book on your life.', ''),
(14, 'Khan', 'Muhammad', 'khan@hotmail.com', '00000000000', 'I Am mr. khan', ''),
(15, 'Noor', 'Khan', 'kami@yahoo.com', '33333333333', 'Are you mr kami', ''),
(19, 'Muhammad', 'Ali', 'abdul@yahoo.com', '11111111111', 'i', 'name21080170.pdf'),
(20, 'Muhammad', 'Nouman', 'numan@example.com', '00000000000', 'numan ali khan kpk', 'name21080192.pdf'),
(27, 'Muhammad', 'Amir', 'abdul@yahoo.com', '00000000000', 'Muhammad Amir', ''),
(28, 'Muhammad', 'Tahir', 'tahir@yahoo.com', '99999999999', 'Muhammad Tahir', ''),
(33, '', 'Ahmad', 'ali@example.com', '00000000000', 'Ali', ''),
(34, 'Muhammad', 'Ali', 'abdul@yahoo.com', '33333333333', 'Abdul Qadir', 'name21080371.pdf'),
(46, 'Hamza', 'Amir', 'ahmad@example.com', '00000000000', 'Ahmad', 'name21080325.pdf'),
(56, 'Mohsin', 'KSA', 'mr@example.com', '11111111111', 'Mohsin KSA', 'name21080313.pdf'),
(58, 'Ali', 'Muhammad', 'starkecathleen@gmail.com', '88888888888', 'M-Ali ', 'name21080355.pdf'),
(59, '', 'Hose', 'hello@.com', '77777777777', 'Hookah Hose', '1627979008.pdf'),
(60, 'Mr', 'Razaq', 'razaq@gmail.com', '66666665555', 'Hamza Razaq khan butt', '1627978872.pdf'),
(61, 'Muhammad', 'Nouman', 'nomi@yahoo.com', '12345111111', 'Nouman', 'name21080392.pdf'),
(62, 'Muhammad', 'Muhammad', 'muhammad@yahoo.com', '00000000000', 'conectdb', 'name21080453.pdf'),
(63, 'Mr', 'Amir', 'admin', '11111111111', 'Amir', 'name21080528.pdf'),
(64, 'Muhammad', 'Nouman', 'nomi@yahoo.com', '33333333333', 'NOuman', 'name21080559.pdf'),
(65, 'Hamza', 'Ahmad', 'abdul@yahoo.com', '77777777777', 'Ahmad', 'name21080555.pdf'),
(66, 'Hamza', 'Ahmad', 'abdul@yahoo.com', '77777777777', 'Ahmad', 'name21080517.pdf'),
(67, 'Muhammad', 'Ahmad', 'admin', '99999999999', '786', 'name21080516.pdf'),
(68, 'Muhammad', 'Razaq', 'admin', '33333333333', 'Raqza', 'name21080528.pdf'),
(69, 'Ali', 'Khan', 'kami@yahoo.com', '33333333333', 'ALi', 'name21080549.pdf'),
(70, 'Mr', 'Ali', 'ali@example.com', '88888888888', 'Ali', 'name21080566.pdf'),
(71, 'Junaid', 'Jamal', 'jameel@example.com', '88888888888', 'Jamal', 'name21080533.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
