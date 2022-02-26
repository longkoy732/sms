-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 02:22 AM
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
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `csv_file`
--

CREATE TABLE `csv_file` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `customer_email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`) VALUES
(1, 'Kathleen J. Nicholson', 'sio@yopmail.com'),
(2, 'Vance J. Head', 'sio1@yopmail.com'),
(3, 'Jon P. Unger', 'ernestocalimpong1008@gmail.com'),
(4, 'Rhonda G. Nieto', 'johnsoposo13@gmail.com'),
(5, 'Efren Y. Farley', 'eliezeraguipo@gmail.com'),
(6, 'Donald A. Mitchell', 'boholarongj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_otp` int(6) NOT NULL,
  `last_activity` datetime NOT NULL,
  `login_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`login_id`, `user_id`, `login_otp`, `last_activity`, `login_datetime`) VALUES
(13, 28, 676421, '2014-02-22 07:51:34', '2022-02-14 06:51:34'),
(14, 28, 612954, '2014-02-22 07:51:52', '2022-02-14 06:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `register_user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `user_otp` int(11) NOT NULL,
  `user_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`register_user_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`, `user_otp`, `user_datetime`, `user_avatar`) VALUES
(28, 'ambot', 'sccjohn@yopmail.com', '$2y$10$7z5toTX8Bm3KzPYCqtCXMO0xT3aI5S/iQlEI5KYxoGdotTLM/pgf.', 'b5941199c8b41a2084b048cabbc1bc54', 'not verified', 582517, '2022-02-13 14:40:59', ''),
(29, 'ambotlang', 'sio@yopmail.com', '$2y$10$YsNocrJo82wZcyuqLjQQSO2F69401GOHWVe0hHF.p4KhCXB1LpwX2', '6a5af2d1c4d15e713c8ab65f8ed69992', 'not verified', 775393, '2022-02-13 14:42:36', ''),
(30, 'Nana', 'sio00@yopmail.com', '$2y$10$lKczeoCPTyWox.jj9YjMLOzlzsdZHvljnYC5vEgtpb4R/iJNYIzZG', '1b1c834ac9d1e14f74ad44da01aa9407', 'not verified', 713535, '2022-02-14 06:51:11', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Gender`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Female', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Female', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Male', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', 'Male', '120 Hanover Sq.', 'London', 'WA1 1DP', 'United Kingdom'),
(5, 'Paula Parente', 'Female', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'Male', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Male', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', 'Male', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'United States'),
(9, 'Paula Parente', 'Female', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'John Koskitalo', 'Male', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(39, 'Ann Devon', 'Female', '35 King George', 'London', 'WX3 6FW', 'United Kingdom'),
(38, 'Janine Labrune', 'Female', '67, rue des Cinquante Otages', 'Nantes', '44000', 'Finland'),
(37, 'Kathryn Segal', 'Female', 'Augsburger Strabe 40', 'Ludenscheid Gevelndorf', '58513', 'Germany'),
(36, 'Elizabeth Brown', 'Female', 'Berkeley Gardens 12 Brewery', 'London', 'WX1 6LT', 'United Kingdom'),
(30, 'Trina Davidson', 'Female', '1049 Lockhart Drive', 'Barrie', 'ON L4M 3B1', 'Canada'),
(31, 'Jeff Putnam', 'Male', 'Industrieweg 56', 'Bouvignies', '7803', 'Belgium'),
(32, 'Joyce Rosenberry', 'Female', 'Norra Esplanaden 56', 'HELSINKI', '380', 'Finland'),
(33, 'Ronald Bowne', 'Male', '2343 Shadowmar Drive', 'New Orleans', '70112', 'United States'),
(34, 'Justin Adams', 'Male', '45, rue de Lille', 'ARMENTIERES', '59280', 'France'),
(35, 'Pedro Afonso', 'Male', 'Av. dos Lusiadas, 23', 'Sao Paulo', '05432-043', 'Brazil'),
(100, 'Kathryn Segal', 'Female', 'Augsburger Strabe 40', 'Ludenscheid Gevelndorf', '58513', 'Germany'),
(101, 'Tonia Sayre', 'Female', '84 Haslemere Road', 'ECHT', 'AB32 2DY', 'United Kingdom'),
(102, 'Loretta Harris', 'Female', 'Avenida Boavista 71', 'SANTO AMARO', '4920-111', 'Portugal'),
(103, 'Sean Wong', 'Male', 'Rua Vito Bovino, 240', 'Sao Paulo-SP', '04677-002', 'Brazil'),
(104, 'Frederick Sears', 'Male', 'ul. Marysiuska 64', 'Warszawa', '04-617', 'Poland'),
(105, 'Tammy Cantrell', 'Female', 'Lukiokatu 34', 'HAMEENLINNA', '13250', 'Finland'),
(106, 'Megan Kennedy', 'Female', '1210 Post Farm Road', 'Norcross', '30071', 'United States'),
(107, 'Maria Whittaker', 'Female', 'Spresstrasse 62', 'Bielefeld Milse', '33729', 'Germany'),
(108, 'Dorothy Parker', 'Female', '32 Lairg Road', 'NEWCHURCH', 'HR5 5DR', 'United Kingdom'),
(109, 'Roger Rudolph', 'Male', 'Avenida Julio Saul Dias 78', 'PENAFIEL', '4560-470', 'Portugal'),
(110, 'Karen Metivier', 'Female', 'Rua Guimaraes Passos, 556', 'Sao Luis-MA', '65025-450', 'Brazil'),
(111, 'Charles Hoover', 'Male', 'Al. Tysiaclecia 98', 'Warszawa', '03-851', 'Poland'),
(112, 'Becky Moss', 'Female', 'Laivurinkatu 6', 'MIKKELI', '50120', 'Finland'),
(113, 'Frank Kidd', 'Male', '2491 Carson Street', 'Cincinnati', 'KY 45202', 'United States'),
(114, 'Donna Wilson', 'Female', 'Hallesches Ufer 69', 'Dettingen', '73265', 'Germany'),
(115, 'Lillian Roberson', 'Female', '36 Iolaire Road', 'NEW BARN', 'DA3 3FT', 'United Kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`) VALUES
(231, 'Simona', 'Morasca'),
(230, 'Donette', 'Foller'),
(229, 'Lenna', 'Paprocki'),
(228, 'Art', 'Venere'),
(227, 'Josephine', 'Darakjy'),
(226, 'James', 'Butt'),
(225, 'John', 'Smith'),
(224, 'Maryann', 'Royster'),
(223, 'Willard', 'Kolmetz'),
(222, 'Veronika', 'Inouye'),
(221, 'Bette', 'Nicka'),
(220, 'Fletcher', 'Flosi'),
(219, 'Yuki', 'Whobrey'),
(218, 'Gladys', 'Rim'),
(217, 'Meaghan', 'Garufi'),
(216, 'Mattie', 'Poquette'),
(215, 'Cammy', 'Albares'),
(214, 'Graciela', 'Ruta'),
(213, 'Kiley', 'Caldarera'),
(212, 'Abel', 'Maclead'),
(211, 'Minna', 'Amigon'),
(210, 'Kris', 'Marrier'),
(209, 'Sage', 'Wieser'),
(208, 'Leota', 'Dilliard'),
(207, 'Mitsue', 'Tollner'),
(206, 'Simona', 'Morasca'),
(205, 'Donette', 'Foller'),
(204, 'Lenna', 'Paprocki'),
(203, 'Art', 'Venere'),
(202, 'Josephine', 'Darakjy'),
(201, 'James', 'Butt'),
(200, 'John', 'Smith'),
(199, 'Maryann', 'Royster'),
(198, 'Willard', 'Kolmetz'),
(197, 'Veronika', 'Inouye'),
(196, 'Bette', 'Nicka'),
(195, 'Fletcher', 'Flosi'),
(194, 'Yuki', 'Whobrey'),
(193, 'Gladys', 'Rim'),
(192, 'Meaghan', 'Garufi'),
(191, 'Mattie', 'Poquette'),
(190, 'Cammy', 'Albares'),
(189, 'Graciela', 'Ruta'),
(188, 'Kiley', 'Caldarera'),
(187, 'Abel', 'Maclead'),
(186, 'Minna', 'Amigon'),
(185, 'Kris', 'Marrier'),
(184, 'Sage', 'Wieser'),
(183, 'Leota', 'Dilliard'),
(182, 'Mitsue', 'Tollner'),
(181, 'Simona', 'Morasca'),
(180, 'Donette', 'Foller'),
(179, 'Lenna', 'Paprocki'),
(178, 'Art', 'Venere'),
(177, 'Josephine', 'Darakjy'),
(176, 'James', 'Butt'),
(175, 'John', 'Smith'),
(174, 'Maryann', 'Royster'),
(173, 'Willard', 'Kolmetz'),
(172, 'Veronika', 'Inouye'),
(171, 'Bette', 'Nicka'),
(170, 'Fletcher', 'Flosi'),
(169, 'Yuki', 'Whobrey'),
(168, 'Gladys', 'Rim'),
(167, 'Meaghan', 'Garufi'),
(166, 'Mattie', 'Poquette'),
(165, 'Cammy', 'Albares'),
(164, 'Graciela', 'Ruta'),
(163, 'Kiley', 'Caldarera'),
(162, 'Abel', 'Maclead'),
(161, 'Minna', 'Amigon'),
(160, 'Kris', 'Marrier'),
(159, 'Sage', 'Wieser'),
(158, 'Leota', 'Dilliard'),
(157, 'Mitsue', 'Tollner'),
(156, 'Simona', 'Morasca'),
(155, 'Donette', 'Foller'),
(154, 'Lenna', 'Paprocki'),
(153, 'Art', 'Venere'),
(152, 'Josephine', 'Darakjy'),
(151, 'James', 'Butt'),
(232, 'Mitsue', 'Tollner'),
(233, 'Leota', 'Dilliard'),
(234, 'Sage', 'Wieser'),
(235, 'Kris', 'Marrier'),
(236, 'Minna', 'Amigon'),
(237, 'Abel', 'Maclead'),
(238, 'Kiley', 'Caldarera'),
(239, 'Graciela', 'Ruta'),
(240, 'Cammy', 'Albares'),
(241, 'Mattie', 'Poquette'),
(242, 'Meaghan', 'Garufi'),
(243, 'Gladys', 'Rim'),
(244, 'Yuki', 'Whobrey'),
(245, 'Fletcher', 'Flosi'),
(246, 'Bette', 'Nicka'),
(247, 'Veronika', 'Inouye'),
(248, 'Willard', 'Kolmetz'),
(249, 'Maryann', 'Royster'),
(250, 'John', 'Smith'),
(251, 'James', 'Butt'),
(252, 'Josephine', 'Darakjy'),
(253, 'Art', 'Venere'),
(254, 'Lenna', 'Paprocki'),
(255, 'Donette', 'Foller'),
(256, 'Simona', 'Morasca'),
(257, 'Mitsue', 'Tollner'),
(258, 'Leota', 'Dilliard'),
(259, 'Sage', 'Wieser'),
(260, 'Kris', 'Marrier'),
(261, 'Minna', 'Amigon'),
(262, 'Abel', 'Maclead'),
(263, 'Kiley', 'Caldarera'),
(264, 'Graciela', 'Ruta'),
(265, 'Cammy', 'Albares'),
(266, 'Mattie', 'Poquette'),
(267, 'Meaghan', 'Garufi'),
(268, 'Gladys', 'Rim'),
(269, 'Yuki', 'Whobrey'),
(270, 'Fletcher', 'Flosi'),
(271, 'Bette', 'Nicka'),
(272, 'Veronika', 'Inouye'),
(273, 'Willard', 'Kolmetz'),
(274, 'Maryann', 'Royster'),
(275, 'John', 'Smith'),
(276, 'James', 'Butt'),
(277, 'Josephine', 'Darakjy'),
(278, 'Art', 'Venere'),
(279, 'Lenna', 'Paprocki'),
(280, 'Donette', 'Foller'),
(281, 'Simona', 'Morasca'),
(282, 'Mitsue', 'Tollner'),
(283, 'Leota', 'Dilliard'),
(284, 'Sage', 'Wieser'),
(285, 'Kris', 'Marrier'),
(286, 'Minna', 'Amigon'),
(287, 'Abel', 'Maclead'),
(288, 'Kiley', 'Caldarera'),
(289, 'Graciela', 'Ruta'),
(290, 'Cammy', 'Albares'),
(291, 'Mattie', 'Poquette'),
(292, 'Meaghan', 'Garufi'),
(293, 'Gladys', 'Rim'),
(294, 'Yuki', 'Whobrey'),
(295, 'Fletcher', 'Flosi'),
(296, 'Bette', 'Nicka'),
(297, 'Veronika', 'Inouye'),
(298, 'Willard', 'Kolmetz'),
(299, 'Maryann', 'Royster'),
(300, 'John', 'Smith');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csv_file`
--
ALTER TABLE `csv_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`register_user_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csv_file`
--
ALTER TABLE `csv_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `register_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
