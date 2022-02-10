-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:53 PM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_idno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_schname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_schaddress` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `admin_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `admin_profile` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_idno`, `admin_email_address`, `admin_password`, `admin_name`, `admin_position`, `admin_schname`, `admin_schaddress`, `admin_contact_no`, `admin_profile`) VALUES
(1, 'SCC-0001368', 'admin@gmail.com', '$2y$10$4Ri/0r2Pxh2OPgcAevnOXuMkd7l/RZ6hp/3.of/hQDFimcZ.VQ12W', 'Administrator', '', 'St. Cecilia\'s College Cebu, Inc.', 'Natalio B. Bacalso S National Hwy, Minglanilla, Cebu', '(032) 490 8511', '../images/1940074418.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `s_id` int(11) NOT NULL,
  `ss_id` varchar(20) DEFAULT NULL,
  `sfname` varchar(50) DEFAULT NULL,
  `smname` varchar(50) DEFAULT NULL,
  `slname` varchar(50) DEFAULT NULL,
  `snext` varchar(10) DEFAULT NULL,
  `sdbirth` varchar(10) DEFAULT NULL,
  `sgender` varchar(10) DEFAULT NULL,
  `saddress` text DEFAULT NULL,
  `szcode` varchar(10) DEFAULT NULL,
  `scontact` varchar(20) DEFAULT NULL,
  `semail` varchar(50) DEFAULT NULL,
  `sctship` varchar(20) DEFAULT NULL,
  `scivilstat` varchar(20) DEFAULT NULL,
  `spbirth` text DEFAULT NULL,
  `sdisability` varchar(20) DEFAULT NULL,
  `s4psno` varchar(20) DEFAULT NULL,
  `spwdid` varchar(20) DEFAULT NULL,
  `srappsship` text DEFAULT NULL,
  `srappnas` text DEFAULT NULL,
  `sbos` text DEFAULT NULL,
  `ssskills` text DEFAULT NULL,
  `stwinterest` text DEFAULT NULL,
  `ssdfile` varchar(10) DEFAULT NULL,
  `sgfname` varchar(50) DEFAULT NULL,
  `sgmname` varchar(50) DEFAULT NULL,
  `sglname` varchar(50) DEFAULT NULL,
  `sgnext` varchar(10) DEFAULT NULL,
  `sglstatus` varchar(10) DEFAULT NULL,
  `sgeduc` text DEFAULT NULL,
  `sgcontact` varchar(20) DEFAULT NULL,
  `sgaddress` text DEFAULT NULL,
  `sgoccu` varchar(30) DEFAULT NULL,
  `sgcompany` varchar(30) DEFAULT NULL,
  `sffname` varchar(50) DEFAULT NULL,
  `sfmname` varchar(50) DEFAULT NULL,
  `sflname` varchar(50) DEFAULT NULL,
  `sfnext` varchar(10) DEFAULT NULL,
  `sflstatus` varchar(10) DEFAULT NULL,
  `sfeduc` text DEFAULT NULL,
  `sfcontact` varchar(20) DEFAULT NULL,
  `sfaddress` text DEFAULT NULL,
  `sfoccu` varchar(30) DEFAULT NULL,
  `sfcompany` varchar(30) DEFAULT NULL,
  `smfname` varchar(50) DEFAULT NULL,
  `smmname` varchar(50) DEFAULT NULL,
  `smlname` varchar(50) DEFAULT NULL,
  `smnext` varchar(10) DEFAULT NULL,
  `smlstatus` varchar(10) DEFAULT NULL,
  `smeduc` text DEFAULT NULL,
  `smcontact` varchar(20) DEFAULT NULL,
  `smaddress` text DEFAULT NULL,
  `smoccu` varchar(30) DEFAULT NULL,
  `smcompany` varchar(30) DEFAULT NULL,
  `snsibling` varchar(10) DEFAULT NULL,
  `spcyincome` varchar(50) DEFAULT NULL,
  `spschname` text DEFAULT NULL,
  `spsaddress` text DEFAULT NULL,
  `spstype` varchar(20) DEFAULT NULL,
  `spscourse` varchar(20) DEFAULT NULL,
  `spsyrlvl` varchar(20) DEFAULT NULL,
  `spsgwa` int(10) DEFAULT NULL,
  `spsraward` text DEFAULT NULL,
  `spsdawardrceive` date DEFAULT NULL,
  `scsintend` text DEFAULT NULL,
  `scsadd` text DEFAULT NULL,
  `scschooltype` varchar(20) DEFAULT NULL,
  `sccourse` varchar(20) DEFAULT NULL,
  `sccourseprio` varchar(20) DEFAULT NULL,
  `scsyrlvl` varchar(20) DEFAULT NULL,
  `spass` varchar(100) DEFAULT NULL,
  `sdsprc` varchar(20) DEFAULT NULL,
  `sdsprcstat` varchar(20) DEFAULT NULL,
  `sdspgm` varchar(20) DEFAULT NULL,
  `sdspgmstat` varchar(20) DEFAULT NULL,
  `sdspcr` varchar(20) DEFAULT NULL,
  `sdspcrstat` varchar(20) DEFAULT NULL,
  `sdstbytpic` varchar(20) DEFAULT NULL,
  `sdstbytpicstat` varchar(20) DEFAULT NULL,
  `sdsbrgyin` varchar(20) DEFAULT NULL,
  `sdsbrgyinstat` varchar(20) DEFAULT NULL,
  `sdscef` varchar(20) DEFAULT NULL,
  `sdscefstat` varchar(20) DEFAULT NULL,
  `sdspsa` varchar(20) DEFAULT NULL,
  `sdspsastat` varchar(20) DEFAULT NULL,
  `sdsobr` varchar(20) NOT NULL,
  `sdsobrstat` varchar(20) NOT NULL,
  `student_profile_image` varchar(100) DEFAULT NULL,
  `s_added_on` date DEFAULT NULL,
  `s_applied_on` date DEFAULT NULL,
  `s_verification_code` varchar(100) DEFAULT NULL,
  `s_email_verify` varchar(10) DEFAULT NULL,
  `s_account_status` varchar(20) DEFAULT NULL,
  `s_grant_stat` varchar(20) NOT NULL,
  `s_scholar_stat` varchar(20) NOT NULL,
  `s_scholarship_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`s_id`, `ss_id`, `sfname`, `smname`, `slname`, `snext`, `sdbirth`, `sgender`, `saddress`, `szcode`, `scontact`, `semail`, `sctship`, `scivilstat`, `spbirth`, `sdisability`, `s4psno`, `spwdid`, `srappsship`, `srappnas`, `sbos`, `ssskills`, `stwinterest`, `ssdfile`, `sgfname`, `sgmname`, `sglname`, `sgnext`, `sglstatus`, `sgeduc`, `sgcontact`, `sgaddress`, `sgoccu`, `sgcompany`, `sffname`, `sfmname`, `sflname`, `sfnext`, `sflstatus`, `sfeduc`, `sfcontact`, `sfaddress`, `sfoccu`, `sfcompany`, `smfname`, `smmname`, `smlname`, `smnext`, `smlstatus`, `smeduc`, `smcontact`, `smaddress`, `smoccu`, `smcompany`, `snsibling`, `spcyincome`, `spschname`, `spsaddress`, `spstype`, `spscourse`, `spsyrlvl`, `spsgwa`, `spsraward`, `spsdawardrceive`, `scsintend`, `scsadd`, `scschooltype`, `sccourse`, `sccourseprio`, `scsyrlvl`, `spass`, `sdsprc`, `sdsprcstat`, `sdspgm`, `sdspgmstat`, `sdspcr`, `sdspcrstat`, `sdstbytpic`, `sdstbytpicstat`, `sdsbrgyin`, `sdsbrgyinstat`, `sdscef`, `sdscefstat`, `sdspsa`, `sdspsastat`, `sdsobr`, `sdsobrstat`, `student_profile_image`, `s_added_on`, `s_applied_on`, `s_verification_code`, `s_email_verify`, `s_account_status`, `s_grant_stat`, `s_scholar_stat`, `s_scholarship_type`) VALUES
(820, '100', 'Angelika', 'Parba', 'Singcol', 'N/A', '1999-01-23', 'Female', 'Lawaan 3 Minglanilla, Cebu', '6046', '09943251989', 'sio@yopmail.com', 'Filipino', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brielle Lynch', NULL, NULL, NULL, NULL, NULL, 'Sed assumenda harum', 'Perspiciatis sed ea', 'Labore voluptatem s', 'Torres and Day Plc', 'Prescott Dickerson', NULL, NULL, NULL, NULL, NULL, 'Mollitia quisquam qu', 'Aut eaque officia du', 'Autem ut magni ex du', 'Flores and Meyers LLC', 'Jescie Kirk', NULL, NULL, NULL, NULL, NULL, 'Ex dolore incidunt', 'Quis nisi est ullam', 'Eos magna incidunt', 'Gallagher and Talley Co', NULL, '607', NULL, NULL, NULL, NULL, NULL, 0, 'Unde molestiae simil', '1992-05-26', NULL, NULL, NULL, 'BSED', NULL, '4th Year', '$argon2i$v=19$m=65536,t=4,p=1$cW10MC8wMUU0OFN6U0twUA$dLhHWg79Ms4elgRJanyat9V7mWXuN8V1+XNCKYbrzfQ', '1981-09-20', 'Not-Received', '1997-01-26', 'Not-Received', '1994-08-05', 'Not-Received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '2022-02-06', '2022-02-04', 'a52db891e01f661eb73a18c6b6513b20', 'Yes', 'Active', '', 'Pending', 'Academic'),
(821, 'Fuga Quidem dolor v', 'Lamar Harrell', 'Ursula Levine', 'Odette Winters', 'Jr.', '1971-11-09', 'Male', 'Ut non aperiam place', NULL, 'Consectetur cumque', 'unswaa20@gmail.com', 'Molestiae sunt ullam', NULL, NULL, NULL, NULL, NULL, NULL, 'Culpa eligendi quae', 'Excepturi lorem qui', 'Enim fugiat dolores', 'Facilis praesentium', NULL, 'Isadora Conley', NULL, NULL, NULL, NULL, NULL, 'Vitae possimus aliq', 'Deleniti incidunt i', 'Non quibusdam quia h', 'Carr Webb Co', 'Freya Cervantes', NULL, NULL, NULL, NULL, NULL, 'Amet sunt ab at de', 'Sed sunt dolores und', 'Et rerum tempore an', 'Lopez Sosa Inc', 'Rebecca Lloyd', NULL, NULL, NULL, NULL, NULL, 'Vel neque minus sequ', 'Repellendus Rerum u', 'Blanditiis ipsum ni', 'Franco Rodriquez Trading', NULL, '930', 'Voluptas quas et eum', 'Consectetur omnis a', NULL, NULL, 'Veritatis a autem do', NULL, NULL, NULL, NULL, NULL, NULL, 'BEED', NULL, '3rd Year', '$argon2i$v=19$m=65536,t=4,p=1$S1BlZGY3Q3EuSS5DNFJRcA$WJHYn97IEPSHOsRYpwNFMW09/INoAXWrMhljrSlqgS4', '1997-01-08', 'Received', '1970-04-26', 'Not-Received', NULL, NULL, '1996-12-20', 'Not-Received', '1977-06-23', 'Not-Received', '2007-01-20', 'Received', NULL, NULL, '', '', NULL, NULL, '2022-02-04', '4cf58c06abd982ef6a4088677a9c9c39', 'No', 'Active', '', 'Pending', 'Non-Academic'),
(831, NULL, 'Summer Gonzales', 'Shea Knapp', 'Gregory George', 'N/A', '1991-09-08', 'Female', 'Harum qui magni comm', NULL, 'Sed dolor tenetur cu', 'annamay.llevares@gmail.com', NULL, NULL, NULL, NULL, 'Facilis ut et ipsum', 'Quos et voluptatem q', NULL, NULL, NULL, NULL, NULL, '1996-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mara Conley', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Carol Willis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '139', 'Quibusdam in quibusd', NULL, NULL, 'Ullamco laborum In', 'Iure in aut lorem qu', NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '1st Year', '$argon2i$v=19$m=65536,t=4,p=1$NkxWcWVTQVlLVVc5eHp4Ng$vcRUtQaBfiSA/xiUzJENPLxq0qXS14wWykgYxYe4ATU', NULL, NULL, NULL, NULL, NULL, NULL, '2005-03-02', 'Received', '2007-01-18', 'Not-Received', NULL, NULL, '1992-02-22', 'Not-Received', '', '', NULL, NULL, '2022-02-07', '888433449e66a404f36505e1a5669f69', 'No', 'Active', '', 'Pending', 'UNIFAST'),
(832, 'Aliquam necessitatib', 'Lucian Williamson', 'Mari Banks', 'Margaret Davis', 'Sr.', '1973-02-20', 'Female', 'Necessitatibus imped', 'Qui irure', 'Qui atque qui ration', 'sio1@yopmail.com', 'Deserunt id omnis n', 'Single', 'Est dolore laboriosa', 'Maxime tenetur et qu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Steven Walker', NULL, NULL, NULL, 'Living', 'Nesciunt dolore eu', NULL, 'Consectetur Nam vol', 'Magnam pariatur Nec', NULL, 'Silas Chase', NULL, NULL, NULL, 'Deceased', 'Quis non nihil numqu', NULL, 'Rerum consectetur m', 'Quia blanditiis sapi', NULL, 'Odio iure', '482', 'Laborum in labore nu', 'Eum harum optio par', 'Public', NULL, 'Perspiciatis incidi', NULL, NULL, NULL, 'Ea nihil delectus l', 'Aut recusandae Enim', 'Public', 'BSBA', 'Priority', '2nd Year', '$argon2i$v=19$m=65536,t=4,p=1$QWptM25DdVJ0a2pwUHZaaQ$hiCDK7X/xDDgVJN/UY3dIiKwsi3SwGy1AvzB9xBGvsw', '1971-06-20', 'Received', '1975-06-27', 'Not-Received', NULL, NULL, NULL, NULL, '1973-08-08', 'Not-Received', NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-02-07', '059d75fe56b97d4db963e0a2216aecaf', 'No', 'Active', '', 'Approved', 'CHED'),
(881, 'SCC-18-0007077', 'Vincent Xyron', 'A.', 'Albina', 'N/A', '1999-02-07', 'M', '651 South Boundary Tungkop, Minglanilla, Cebu', NULL, '09339330521', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mary Ann A. Albina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Arman Albina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Instructor', NULL, 'Mary Ann A. Albina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Housewife', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'New Unifast'),
(882, 'SCC-16-0003965', 'John Rey', 'T.', 'Cilin', NULL, '01/23/1999', 'M', 'Tubod Hillroad Minglanilla Cebu', NULL, '9970750660', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reynaldo Cilin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DRIVER', NULL, 'Gina Cilin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HOUSEWIFE', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'New Unifast'),
(883, 'SCC-18-0005842', 'Jhezer', 'R.', 'Libor', NULL, '11/01/1998', 'M', 'Langtad, City of Naga, Cebu', NULL, '9124345667', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alma R. Libor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jeffrey Y. Libor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, 'Alma R. Libor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'College Student Disc'),
(884, 'SCC-16-0003997', 'Joshua', '', 'Parba', NULL, '10/25/1996', 'M', 'Poblacion Ward II, Minglanilla Cebu', NULL, '0956-056-1438', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edgar Parages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CONSTRUCTION', NULL, 'Emily Parba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HOUSEWIFE', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'New Unifast'),
(885, 'SCC-16-0003180', 'Angelika', '', 'Singcol', NULL, '10/05/1999', 'F', 'Pungsod Lawa-an 3, Talisay City', NULL, '9673159901', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ricky Sarsalijo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ricky Sarsalijo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'construction', NULL, 'Jessica Singcol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Housewife', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'Working Scholar'),
(886, 'SCC-18-0007501', 'Eliezer', 'C.', 'Aguipo', NULL, '01/05/2000', 'M', 'Cantao-an Naga City Cebu', NULL, '9532219598', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Exequila Aguipo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Asis Aguipo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Driver', NULL, 'Exequila Aguipo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'House Wife', NULL, NULL, NULL, 'scc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BSIT', NULL, '3rd Year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Active', '', '', 'Naga Scholar 1516 ne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=887;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
