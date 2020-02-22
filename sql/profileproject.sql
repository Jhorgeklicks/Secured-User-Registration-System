-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 11:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profileproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_confirmation`
--

CREATE TABLE `email_confirmation` (
  `Id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Confirmation_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passswordreset`
--

CREATE TABLE `passswordreset` (
  `Id` int(11) NOT NULL,
  `User_Id` int(4) NOT NULL,
  `Reset_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `User_Image` varchar(50) NOT NULL,
  `User_Job` varchar(50) NOT NULL,
  `User_Skills` varchar(50) NOT NULL,
  `User_Biography` varchar(200) NOT NULL,
  `User_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `User_Name`, `email`, `User_Password`, `User_Image`, `User_Job`, `User_Skills`, `User_Biography`, `User_Status`) VALUES
(1, 'Jhorge klicks jnr', 'jhorgeklicks@gmail.com', '$2y$10$DToCPvs.Jueel368JoC2nuQjIKm9muf7lrnibhxBeWJsLdqu3P1i2', '20023721.jpg', 'Senior Software Analyst', 'Php,Css,Html,Sass,Jquery', 'i am a very freelancer who likes to deliver to the best of my abilities. i work hard to make sure my clients smiles even when paying me. Programming is my way of life', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_confirmation`
--
ALTER TABLE `email_confirmation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `passswordreset`
--
ALTER TABLE `passswordreset`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_confirmation`
--
ALTER TABLE `email_confirmation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passswordreset`
--
ALTER TABLE `passswordreset`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
