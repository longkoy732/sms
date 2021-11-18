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
-- Table structure for table `tbl_nonacad`
--

CREATE TABLE `tbl_nonacad` (
  `snacad_id` int(11) NOT NULL,
  `sfname` varchar(50) NOT NULL,
  `smname` varchar(50) NOT NULL,
  `slname` varchar(50) NOT NULL,
  `snext` varchar(10) NOT NULL,
  `sdbirth` date NOT NULL,
  `sctship` varchar(50) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `scontact` varchar(50) NOT NULL,
  `sgender` varchar(50) NOT NULL,
  `scourse` varchar(100) NOT NULL,
  `syrlvl` varchar(10) NOT NULL,
  `gfname` varchar(50) NOT NULL,
  `gmname` varchar(50) NOT NULL,
  `glname` varchar(50) NOT NULL,
  `gnext` varchar(10) NOT NULL,
  `gaddress` varchar(50) NOT NULL,
  `gcontact` varchar(50) NOT NULL,
  `goccu` varchar(50) NOT NULL,
  `gcompany` varchar(50) NOT NULL,
  `ffname` varchar(50) NOT NULL,
  `fmname` varchar(50) NOT NULL,
  `flname` varchar(50) NOT NULL,
  `fnext` varchar(10) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fcontact` varchar(50) NOT NULL,
  `foccu` varchar(50) NOT NULL,
  `fcompany` varchar(50) NOT NULL,
  `mfname` varchar(50) NOT NULL,
  `mmname` varchar(50) NOT NULL,
  `mlname` varchar(50) NOT NULL,
  `mnext` varchar(10) NOT NULL,
  `maddress` varchar(100) NOT NULL,
  `mcontact` varchar(50) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `mcompany` varchar(50) NOT NULL,
  `spcyincome` varchar(50) NOT NULL,
  `srappnas` varchar(200) NOT NULL,
  `sbos` varchar(100) NOT NULL,
  `ssskills` varchar(100) NOT NULL,
  `stwinterest` varchar(100) NOT NULL,
  `spschatt` varchar(100) NOT NULL,
  `spschadd` varchar(100) NOT NULL,
  `spyrlvl` varchar(100) NOT NULL,
  `snasprc` date DEFAULT NULL,
  `snasprcstat` varchar(50) DEFAULT NULL,
  `snapgm` date DEFAULT NULL,
  `snapgmstat` varchar(50) DEFAULT NULL,
  `stbytpic` date DEFAULT NULL,
  `stbytpicstat` varchar(50) DEFAULT NULL,
  `spbrgyin` date DEFAULT NULL,
  `spbrgyinstat` varchar(50) DEFAULT NULL,
  `snacapstype` varchar(30) NOT NULL,
  `snaemail` varchar(50) NOT NULL,
  `snapass` varchar(50) NOT NULL,
  `snascholarstat` varchar(30) NOT NULL,
  `snadapply` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nonacad`
--

INSERT INTO `tbl_nonacad` (`snacad_id`, `sfname`, `smname`, `slname`, `snext`, `sdbirth`, `sctship`, `saddress`, `semail`, `scontact`, `sgender`, `scourse`, `syrlvl`, `gfname`, `gmname`, `glname`, `gnext`, `gaddress`, `gcontact`, `goccu`, `gcompany`, `ffname`, `fmname`, `flname`, `fnext`, `faddress`, `fcontact`, `foccu`, `fcompany`, `mfname`, `mmname`, `mlname`, `mnext`, `maddress`, `mcontact`, `moccu`, `mcompany`, `spcyincome`, `srappnas`, `sbos`, `ssskills`, `stwinterest`, `spschatt`, `spschadd`, `spyrlvl`, `snasprc`, `snasprcstat`, `snapgm`, `snapgmstat`, `stbytpic`, `stbytpicstat`, `spbrgyin`, `spbrgyinstat`, `snacapstype`, `snaemail`, `snapass`, `snascholarstat`, `snadapply`) VALUES
(1, 'Sydnee Henderson', 'Brynn Holden', 'Brody Rodriquez', 'Jr.', '2021-10-22', 'In optio dolore eli', 'Sunt et nisi sint ', 'bamad@mailinator.com', 'Ex est ad alias quo', 'Male', 'Vero eligendi natus ', 'Velit eum ', 'Kylan Ray', 'Addison Mccoy', 'Jolie Sears', 'N/A', 'A ut autem expedita ', 'Et quod culpa veniam', 'Voluptatem consequat', 'Miller and Houston Co', 'Winter Wright', 'Ivy Wiggins', 'Noble Sharp', 'Jr.', 'Dolores unde ut nobi', 'Ullam nostrud odio e', 'Placeat vel nostrum', 'Wiley Mullen Plc', 'Tanya Everett', 'Cara Newton', 'Echo Gilbert', 'Sr.', 'Dolor et voluptas ev', 'Aut modi adipisci si', 'Sit sint dolor reic', 'Pollard and Barber LLC', '914', 'In suscipit laborum', 'Quia amet voluptate', 'Ut quia quia incidun', 'Voluptas consequatur', 'Mollit aut beatae di', 'Voluptatem et error ', 'Et enim placeat est', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Non-Academic', 'zyqewyxok@mailinator.com', '$2y$10$RlDL3eBJEfqqgb.FWyHYg.aPEm3AeHg2QMJGXKVrlwn', 'Pending', '2021-10-22 17:23:30'),
(2, 'Martina Woodard', 'Eliana Cochran', 'Samson Skinner', 'Jr.', '2021-11-09', 'Non laboris aut cill', 'Praesentium quo plac', 'myva@mailinator.com', 'Ex tenetur odit dolo', 'Female', 'Qui praesentium rati', 'Ea aliquip', 'Basil Massey', 'Imogene Chambers', 'Penelope Burton', 'N/A', 'Beatae delectus min', 'Sed omnis eos distin', 'Ullam sunt ducimus', 'Beasley and Fowler Co', 'Kaitlin Merrill', 'Aspen Solomon', 'Thane Mccarty', 'N/A', 'Reiciendis sit exce', 'Voluptatem autem qui', 'Aliqua Laborum Ad ', 'Parks Middleton Associates', 'Iola Bright', 'Tiger Dawson', 'Ruby Sharp', 'Sr.', 'Rem fugiat cum quid', 'Totam excepteur qui ', 'Est odio veniam en', 'Rodriquez and Finch Associates', '208', 'Fugit eveniet est ', 'Culpa vel culpa quis', 'Deserunt dolorem dis', 'Odit necessitatibus ', 'Quia pariatur Paria', 'Consectetur laborum', 'Dolor ipsa aute rep', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Non-Academic', 'qaxizewiz@mailinator.com', '$2y$10$AjX8WkTW6mUBuqY.S4AoI.Tqo/Q68orAywcXpGsDOB0', 'Pending', '2021-11-09 13:44:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nonacad`
--
ALTER TABLE `tbl_nonacad`
  ADD PRIMARY KEY (`snacad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nonacad`
--
ALTER TABLE `tbl_nonacad`
  MODIFY `snacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
