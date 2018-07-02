-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 07:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `message_num` int(13) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`message_num`, `title`, `message`) VALUES
(1, 'Access CMD Commands', 'c:\\xamppmysqlinmysql -u root'),
(2, 'Check Databases', 'SHOW databases;'),
(3, 'Check User for privileges', 'Use select user();'),
(4, 'Create a table', 'CREATE TABLE tablename (inputs and datatypes.'),
(5, 'Discover columns and datatypes', 'DESCRIBE information'),
(6, 'Remove a column', 'ALTER TABLE information DROP columname'),
(7, 'Rename a Table', 'ALTER TABLE information RENAME facts'),
(8, 'Select a database', 'USE information;'),
(9, 'Add a column', 'ALTER TABLE information DATATYPE;'),
(11, 'Add a column', 'ALTER TABLE information DATATYPE;'),
(12, 'Rename a column', 'ALTER TABLE information CHANGE name1 name2 DATATYPE);'),
(13, 'Delete a row of data', 'DELETE FROM information WHERE column=attribute'),
(14, 'Remove a table', 'DROP TABLE tablename');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`message_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `message_num` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
