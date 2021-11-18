-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 11:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unifast`
--

CREATE TABLE `tbl_unifast` (
  `sunifast_id` int(11) NOT NULL,
  `sustudent_id` varchar(50) NOT NULL,
  `suslname` varchar(50) NOT NULL,
  `susfname` varchar(50) NOT NULL,
  `susmname` varchar(50) NOT NULL,
  `susnext` varchar(10) NOT NULL,
  `susgender` varchar(10) NOT NULL,
  `susdbirth` date NOT NULL,
  `suscontact` varchar(20) NOT NULL,
  `susaddress` varchar(100) NOT NULL,
  `susspattended` varchar(100) NOT NULL,
  `suscp` varchar(100) NOT NULL,
  `susyl` varchar(50) NOT NULL,
  `suspemail` varchar(20) NOT NULL,
  `susflname` varchar(50) NOT NULL,
  `susffname` varchar(50) NOT NULL,
  `susfmname` varchar(50) NOT NULL,
  `susfnext` varchar(20) NOT NULL,
  `susmlname` varchar(50) NOT NULL,
  `susmfname` varchar(50) NOT NULL,
  `susmmname` varchar(50) NOT NULL,
  `susmnext` varchar(20) NOT NULL,
  `susdswd` varchar(100) NOT NULL,
  `sushci` varchar(50) NOT NULL,
  `susdid` varchar(100) NOT NULL,
  `susdfilled` date NOT NULL,
  `sudrpic` date DEFAULT NULL,
  `sudrpicstat` varchar(50) DEFAULT NULL,
  `sudrpsa` date DEFAULT NULL,
  `sudrpsastat` varchar(50) DEFAULT NULL,
  `sudrobr` date DEFAULT NULL,
  `sudrobrstat` varchar(50) DEFAULT NULL,
  `sustype` varchar(50) NOT NULL,
  `susaemail` varchar(100) NOT NULL,
  `susapass` varchar(100) NOT NULL,
  `susgrantstat` varchar(50) NOT NULL,
  `susschstat` varchar(20) NOT NULL,
  `susdapply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unifast`
--

INSERT INTO `tbl_unifast` (`sunifast_id`, `sustudent_id`, `suslname`, `susfname`, `susmname`, `susnext`, `susgender`, `susdbirth`, `suscontact`, `susaddress`, `susspattended`, `suscp`, `susyl`, `suspemail`, `susflname`, `susffname`, `susfmname`, `susfnext`, `susmlname`, `susmfname`, `susmmname`, `susmnext`, `susdswd`, `sushci`, `susdid`, `susdfilled`, `sudrpic`, `sudrpicstat`, `sudrpsa`, `sudrpsastat`, `sudrobr`, `sudrobrstat`, `sustype`, `susaemail`, `susapass`, `susgrantstat`, `susschstat`, `susdapply`) VALUES
(6, 'Sint deleniti aut i', 'Tyler Rios', 'Aileen Gillespie', 'Juliet Bond', 'Sr.', 'Male.', '2021-11-17', 'Dolores dignissimos ', 'Atque nulla sit et ', 'Fuga Doloremque exe', 'Possimus iste sint ', 'Porro facere accusam', 'vihe@mailinator.com', 'Beatrice Fulton', 'Mari Whitney', 'Harrison Valentine', 'Sr.', 'Peter Chapman', 'Declan Donaldson', 'Karen Mccarthy', 'N/A', 'Sequi vero aliquid c', 'Impedit consectetur', 'Omnis dolor maxime a', '2021-11-17', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'fozomom@mailinator.com', '$2y$10$0diGtIQsDz6fWynIdnVjiOGkmbIaE2yGodrY29ARxE7ivcovvj/Iq', 'New', 'Pending', '2021-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  ADD PRIMARY KEY (`sunifast_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  MODIFY `sunifast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
