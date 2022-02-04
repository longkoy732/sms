-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 10:59 AM
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
-- Table structure for table `tbl_acad`
--

CREATE TABLE `tbl_acad` (
  `sacad_id` int(11) NOT NULL,
  `safname` varchar(50) DEFAULT NULL,
  `samname` varchar(50) DEFAULT NULL,
  `salname` varchar(50) DEFAULT NULL,
  `sanext` varchar(10) DEFAULT NULL,
  `sadbirth` varchar(10) DEFAULT NULL,
  `sactship` varchar(50) DEFAULT NULL,
  `saaddress` varchar(100) DEFAULT NULL,
  `sapemail` varchar(50) DEFAULT NULL,
  `sacontact` varchar(50) DEFAULT NULL,
  `sacourse` varchar(50) DEFAULT NULL,
  `sagyl` varchar(20) DEFAULT NULL,
  `sagender` varchar(50) DEFAULT NULL,
  `sagfname` varchar(50) DEFAULT NULL,
  `sagmname` varchar(50) DEFAULT NULL,
  `saglname` varchar(50) DEFAULT NULL,
  `sagnext` varchar(10) DEFAULT NULL,
  `sagaddress` varchar(100) DEFAULT NULL,
  `sagcontact` varchar(50) DEFAULT NULL,
  `sagoccu` varchar(50) DEFAULT NULL,
  `sagcompany` varchar(50) DEFAULT NULL,
  `saffname` varchar(50) DEFAULT NULL,
  `safmname` varchar(50) DEFAULT NULL,
  `saflname` varchar(50) DEFAULT NULL,
  `safnext` varchar(10) DEFAULT NULL,
  `safaddress` varchar(50) DEFAULT NULL,
  `safcontact` varchar(50) DEFAULT NULL,
  `safoccu` varchar(50) DEFAULT NULL,
  `safcompany` varchar(50) DEFAULT NULL,
  `samfname` varchar(50) DEFAULT NULL,
  `sammname` varchar(50) DEFAULT NULL,
  `samlname` varchar(50) DEFAULT NULL,
  `samnext` varchar(10) DEFAULT NULL,
  `samaddress` varchar(100) DEFAULT NULL,
  `samcontact` varchar(50) DEFAULT NULL,
  `samoccu` varchar(50) DEFAULT NULL,
  `samcompany` varchar(50) DEFAULT NULL,
  `saspcyincome` varchar(50) DEFAULT NULL,
  `sagwa` varchar(50) DEFAULT NULL,
  `saraward` varchar(50) DEFAULT NULL,
  `sadawardrceive` varchar(10) DEFAULT NULL,
  `sadsprc` varchar(10) DEFAULT NULL,
  `sadsprcstat` varchar(50) DEFAULT NULL,
  `sadspgm` varchar(10) DEFAULT NULL,
  `sadspgmstat` varchar(50) DEFAULT NULL,
  `sadspcr` varchar(10) DEFAULT NULL,
  `sadspcrstat` varchar(50) DEFAULT NULL,
  `sacapstype` varchar(30) DEFAULT NULL,
  `saaemail` varchar(50) DEFAULT NULL,
  `sapass` varchar(50) DEFAULT NULL,
  `sagrantstat` varchar(20) DEFAULT NULL,
  `sascholarstat` varchar(30) DEFAULT NULL,
  `sadapply` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_acad`
--

INSERT INTO `tbl_acad` (`sacad_id`, `safname`, `samname`, `salname`, `sanext`, `sadbirth`, `sactship`, `saaddress`, `sapemail`, `sacontact`, `sacourse`, `sagyl`, `sagender`, `sagfname`, `sagmname`, `saglname`, `sagnext`, `sagaddress`, `sagcontact`, `sagoccu`, `sagcompany`, `saffname`, `safmname`, `saflname`, `safnext`, `safaddress`, `safcontact`, `safoccu`, `safcompany`, `samfname`, `sammname`, `samlname`, `samnext`, `samaddress`, `samcontact`, `samoccu`, `samcompany`, `saspcyincome`, `sagwa`, `saraward`, `sadawardrceive`, `sadsprc`, `sadsprcstat`, `sadspgm`, `sadspgmstat`, `sadspcr`, `sadspcrstat`, `sacapstype`, `saaemail`, `sapass`, `sagrantstat`, `sascholarstat`, `sadapply`) VALUES
(78, '1', '2', '3', 'N/A', '2021-12-01', '5', '6', '7', '8', '9', '10', 'Male', '11', '12', '13', 'Jr.', '14', '15', '16', '17', '18', '19', '20', 'Sr.', '21', '22', '23', '24', '25', '26', '27', 'N/A', '28', '29', '30', '31', '32', '33', '34', '2021-12-02', '', 'Received', '', 'Received', '', 'Received', 'Academic', '35', '$2y$10$7e60RfTsGt0n2MbAYdh1hulm2POlcAHjLu./wuheeTJ', 'New', 'Pending', '2021-12-09'),
(79, 'Kevin Odonnell', 'Lamar Moses', 'Urielle Mack', 'Jr.', '1999-02-27', 'Iusto eaque in ipsum', 'Eum sapiente nostrud', 'pawomuvu@mailinator.com', 'Deserunt commodo eli', 'Sit commodi aperiam', 'Rerum aliquid iusto', 'Female', 'Dana Allen', 'Colorado Valenzuela', 'Cailin Carey', 'Jr.', 'Ut non labore eum et', 'Laborum omnis quod q', 'Consectetur cupidita', 'Bryan Cherry Associates', 'Brett Schultz', 'Audra Mccarty', 'Diana Patel', 'Sr.', 'Enim est quia fuga', 'Do facere blanditiis', 'Est earum esse comm', 'Stanton Cross Associates', 'Gabriel Wall', 'Aspen Mcdowell', 'Nevada Blake', 'Sr.', 'Aute est quod dolore', 'Et doloremque est vo', 'Consequatur iste cil', 'Chambers Carpenter Traders', '327', 'Hic impedit eius la', 'Atque eum deserunt r', '2021-12-24', '', 'Not-Received', '', 'Received', '', 'Not-Received', 'Academic', 'jojivo@mailinator.com', '$2y$10$V2Tr2YOWX1MGF/RdpWHtMeJYuPMuBHoMXfkS9hY4bMm', 'Old', 'Pending', '2021-12-09'),
(80, 'Elijah Barker', 'Mallory Rosa', 'Imelda Garner', 'Jr.', '1988-09-27', 'Rerum cupidatat dolo', 'Rem ipsum sunt enim', 'misyne@mailinator.com', 'Asperiores cum proid', 'Ab et consequat Qua', 'Eaque sit nobis eni', 'Male', 'Aaron Cabrera', 'Paul Cabrera', 'Fiona Long', 'Sr.', 'Duis et voluptates s', 'Recusandae Nostrud', 'Quo sed harum eum id', 'Joyce Nolan Associates', 'Akeem Beck', 'Giselle William', 'Jack Wooten', 'N/A', 'Vitae laborum dolore', 'Dolorem sunt et recu', 'Ex dignissimos sapie', 'Hutchinson Andrews Inc', 'Kalia Johnston', 'Autumn Calderon', 'Palmer Mooney', 'Jr.', 'Voluptatem fugiat a', 'Ratione reiciendis v', 'Sequi velit nostrud', 'Giles and Roth Associates', '173', 'Error laudantium at', 'In tempora voluptas', '1989-04-27', '', 'Received', '', 'Not-Received', '', 'Not-Received', 'Academic', 'jafihyfece@mailinator.com', '$2y$10$7t3gNe8QL.fYOfFxRYgEcuXkc8m3SimIg598Lub1Aoa', 'Old', 'Rejected', '2021-12-09'),
(81, 'Violet Cote', 'Kylie Rose', 'Hunter Whitehead', 'N/A', '1985-08-24', 'Vitae ut facilis vol', 'Soluta fuga Lorem a', 'qapilitiga@mailinator.com', 'Ipsa sint dolorem c', 'Tempor eiusmod nesci', 'Eiusmod lorem numqua', 'Female', 'Macon Mckee', 'Shaine Raymond', 'Haley Phelps', 'Sr.', 'Et ut a labore ducim', 'Eaque consequatur ex', 'Magnam odio accusant', 'Nixon Haney Plc', 'Cadman Curtis', 'Ariel Workman', 'Maya Mason', 'Sr.', 'Neque quas assumenda', 'Assumenda quia velit', 'Laborum Dolores tot', 'Franco and Day Co', 'Chastity Sanders', 'Allistair Wood', 'Sydney Burnett', 'Sr.', 'Eiusmod omnis enim a', 'Mollit anim ea ut pe', 'Delectus consequat', 'Middleton Gilbert Trading', '445', 'Atque odit minim est', 'Pariatur Autem volu', '1976-10-21', '1986-02-19', 'Not-Received', '2018-06-15', 'Not-Received', '2013-12-07', 'Received', 'Academic', 'petoboly@mailinator.com', '$2y$10$6Q062qMZHOv0oWMJslR5g.N9Tr0fuSz04jstWyL/21K', 'New', 'Approved', '2021-12-09'),
(82, 'Zorita Jackson', 'Finn Bradford', 'Daryl Cardenas', 'Jr.', '1974-07-06', 'Consequatur Sed est', 'Voluptate rem ipsum', 'mogaf@mailinator.com', 'Magna cillum volupta', 'Autem quia lorem exp', 'Veniam et deserunt', 'Male', 'Vielka Sheppard', 'Reuben Kaufman', 'Julie Bell', 'N/A', 'Velit aperiam qui cu', 'Et alias autem facer', 'Ut vitae ullamco eum', 'Gonzales and Sargent Trading', 'Matthew Chapman', 'Stacey Garza', 'Ayanna Hinton', 'N/A', 'Nisi delectus et qu', 'Laborum ut eiusmod l', 'Aliquid sint quia mi', 'Rojas Walls Co', 'Sophia Barber', 'Alexander Huff', 'Lavinia Roth', 'Jr.', 'Sint voluptatem dolo', 'Tenetur in doloremqu', 'Enim ea deleniti ass', 'Williamson Hogan Plc', '787', 'Id id dolores sit', 'Obcaecati commodi es', '2002-01-10', '2019-10-20', 'Received', '1974-11-15', 'Not-Received', '1983-02-18', 'Received', 'Academic', 'fynoxudow@mailinator.com', '$2y$10$QrwW4/RlOSwuoRmK9SZMweISgTotyQmIbSYz4eVBrKd', 'Old', 'Approved', '2021-12-09');

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
-- Table structure for table `tbl_ched`
--

CREATE TABLE `tbl_ched` (
  `sched_id` int(11) NOT NULL,
  `scfname` varchar(50) DEFAULT NULL,
  `scmname` varchar(50) DEFAULT NULL,
  `sclname` varchar(50) DEFAULT NULL,
  `scnext` varchar(20) DEFAULT NULL,
  `scdbirth` varchar(10) DEFAULT NULL,
  `scgender` varchar(20) DEFAULT NULL,
  `sccivilstat` varchar(20) DEFAULT NULL,
  `scpbirth` varchar(100) DEFAULT NULL,
  `scaddress` varchar(100) DEFAULT NULL,
  `sczcode` varchar(20) DEFAULT NULL,
  `scschname` varchar(100) DEFAULT NULL,
  `scsaddress` varchar(100) DEFAULT NULL,
  `scstype` varchar(20) DEFAULT NULL,
  `schygrade` varchar(50) DEFAULT NULL,
  `scctship` varchar(50) DEFAULT NULL,
  `scmnum` varchar(20) DEFAULT NULL,
  `scpemail` varchar(50) DEFAULT NULL,
  `scdisability` varchar(100) DEFAULT NULL,
  `scflname` varchar(50) DEFAULT NULL,
  `scffname` varchar(50) DEFAULT NULL,
  `scfmname` varchar(50) DEFAULT NULL,
  `scfnext` varchar(20) DEFAULT NULL,
  `scfstatus` varchar(20) DEFAULT NULL,
  `scfaddress` varchar(100) DEFAULT NULL,
  `scfoccu` varchar(50) DEFAULT NULL,
  `scfeduc` varchar(50) DEFAULT NULL,
  `scmlname` varchar(50) DEFAULT NULL,
  `scmfname` varchar(50) DEFAULT NULL,
  `scmmname` varchar(50) DEFAULT NULL,
  `scmnext` varchar(20) DEFAULT NULL,
  `scmstatus` varchar(20) DEFAULT NULL,
  `scmaddress` varchar(100) DEFAULT NULL,
  `scmoccu` varchar(50) DEFAULT NULL,
  `scmeduc` varchar(50) DEFAULT NULL,
  `scptgross` varchar(20) DEFAULT NULL,
  `scnsibling` varchar(20) DEFAULT NULL,
  `scsintend` varchar(100) DEFAULT NULL,
  `scsadd` varchar(100) DEFAULT NULL,
  `scschooltype` varchar(10) DEFAULT NULL,
  `sccourse` varchar(50) DEFAULT NULL,
  `sccoursestat` varchar(20) DEFAULT NULL,
  `scdrprc` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `scdrprcstat` varchar(50) DEFAULT NULL,
  `scdrbrgyin` varchar(10) DEFAULT NULL,
  `scdrbrgyinstat` varchar(50) DEFAULT NULL,
  `scdrpgm` varchar(10) DEFAULT NULL,
  `scdrpgmstat` varchar(50) DEFAULT NULL,
  `scschtype` varchar(50) DEFAULT NULL,
  `scaemail` varchar(50) DEFAULT NULL,
  `scapass` varchar(50) DEFAULT NULL,
  `scgrantstat` varchar(50) DEFAULT NULL,
  `scschstat` varchar(10) DEFAULT NULL,
  `scdapply` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ched`
--

INSERT INTO `tbl_ched` (`sched_id`, `scfname`, `scmname`, `sclname`, `scnext`, `scdbirth`, `scgender`, `sccivilstat`, `scpbirth`, `scaddress`, `sczcode`, `scschname`, `scsaddress`, `scstype`, `schygrade`, `scctship`, `scmnum`, `scpemail`, `scdisability`, `scflname`, `scffname`, `scfmname`, `scfnext`, `scfstatus`, `scfaddress`, `scfoccu`, `scfeduc`, `scmlname`, `scmfname`, `scmmname`, `scmnext`, `scmstatus`, `scmaddress`, `scmoccu`, `scmeduc`, `scptgross`, `scnsibling`, `scsintend`, `scsadd`, `scschooltype`, `sccourse`, `sccoursestat`, `scdrprc`, `scdrprcstat`, `scdrbrgyin`, `scdrbrgyinstat`, `scdrpgm`, `scdrpgmstat`, `scschtype`, `scaemail`, `scapass`, `scgrantstat`, `scschstat`, `scdapply`) VALUES
(11, 'Camden Rivas', 'Aphrodite Brown', 'Shay James', 'N/A', '1992-09-04', 'Male', 'Single', 'Est ipsam aliquam q', 'Doloribus nemo conse', 'Culpa error deserunt', 'Commodo quo placeat', 'In quia sint enim d', 'Private', 'In maiores molestiae', 'Cum est ea voluptas', 'Eveniet quidem quia', 'kifilehom@mailinator.com', 'Suscipit in voluptat', 'Amy Gay', 'Athena Perez', 'Jin Odom', 'N/A', 'Living', 'Voluptatum eiusmod d', 'Et a excepteur vitae', 'Quo ullamco labore e', 'Lucius Ray', 'Basia Wolfe', 'Justin Barton', 'N/A', 'Deceased', 'Dolor ipsa est nequ', 'Molestiae quisquam s', 'Voluptatibus provide', 'Omnis at quam veniam', 'Explicabo Voluptate', 'Vero ut ab ipsum deb', 'Consequat Voluptas', 'Public', 'Suscipit deserunt ut', 'Not Priority', '1987-11-21', 'Not-Received', '1970-12-12', 'Received', '1992-03-06', 'Received', 'CHED', 'calerelizu@mailinator.com', '$2y$10$rAe88fVrC/5hL4qCtZUt0OqVNScCVzxtgFZzsf25Sj6', 'New', 'Rejected', '2021-12-09'),
(14, '1', '2', '3', 'N/A', '2021-12-01', 'Male', 'Single', '4', '5', '6', '7', '8', 'Private', '9', '10', '11', '12', '13', '14', '15', '16', 'Jr.', 'Living', '19', '17', '18', '20', '21', '22', 'Sr.', 'Living', '25', '23', '24', '26', '27', '28', '29', 'Public', '30', 'Priority', '2021-12-02', 'Received', '2021-12-04', 'Received', '2021-12-03', 'Received', 'CHED', '31', '$2y$10$EqYgnDcxrsraCfliI1xdT.Whzt0S.J7U/ZySeGcWnc1', 'New', 'Pending', '2021-12-09'),
(16, 'Tasha Ramos', 'Martin Stanton', 'Camille Franco', 'Sr.', '2021-12-09', 'Male', 'Single', 'Tempora qui eveniet', 'Omnis irure quae ips', 'Quod et dolorem offi', 'Modi quod omnis tota', 'Quo porro laboris do', 'Public', 'Enim rerum voluptate', 'Esse blanditiis qua', 'Maiores sed dolore d', 'babunadok@mailinator.com', 'Culpa sed omnis con', 'Shaeleigh Vasquez', 'Keely Frank', 'Wyoming Chase', 'N/A', 'Living', 'Et eos illo quod ad ', 'Officiis qui praesen', 'Amet non ipsam magn', 'Aretha Carney', 'Jesse Watkins', 'Jr.', 'Iliana Watson', 'Living', 'Sed voluptas hic mol', 'Incidunt ducimus v', 'In fuga Aliquid ass', 'Veritatis rerum dolo', 'Officia doloribus qu', 'Doloribus dolorem vo', 'Error suscipit proid', 'Private', 'Est labore nihil des', 'Priority', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'CHED', 'jyvaly@mailinator.com', '$2y$10$7lYDrLNvnEIxciurbrB8O.RXF4u8qwaznbCf.dSJ.W2', 'New', 'Approved', '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonacad`
--

CREATE TABLE `tbl_nonacad` (
  `snacad_id` int(11) NOT NULL,
  `snfname` varchar(50) DEFAULT NULL,
  `snmname` varchar(50) DEFAULT NULL,
  `snlname` varchar(50) DEFAULT NULL,
  `snnext` varchar(10) DEFAULT NULL,
  `sndbirth` varchar(10) DEFAULT NULL,
  `snctship` varchar(50) DEFAULT NULL,
  `snaddress` varchar(100) DEFAULT NULL,
  `snpemail` varchar(50) DEFAULT NULL,
  `sncontact` varchar(50) DEFAULT NULL,
  `sngender` varchar(50) DEFAULT NULL,
  `sncourse` varchar(50) DEFAULT NULL,
  `snyrlvl` varchar(10) DEFAULT NULL,
  `sngfname` varchar(50) DEFAULT NULL,
  `sngmname` varchar(50) DEFAULT NULL,
  `snglname` varchar(50) DEFAULT NULL,
  `sngnext` varchar(10) DEFAULT NULL,
  `sngaddress` varchar(50) DEFAULT NULL,
  `sngcontact` varchar(50) DEFAULT NULL,
  `sngoccu` varchar(50) DEFAULT NULL,
  `sngcompany` varchar(50) DEFAULT NULL,
  `snffname` varchar(50) DEFAULT NULL,
  `snfmname` varchar(50) DEFAULT NULL,
  `snflname` varchar(50) DEFAULT NULL,
  `snfnext` varchar(10) DEFAULT NULL,
  `snfaddress` varchar(100) DEFAULT NULL,
  `snfcontact` varchar(50) DEFAULT NULL,
  `snfoccu` varchar(50) DEFAULT NULL,
  `snfcompany` varchar(50) DEFAULT NULL,
  `snmfname` varchar(50) DEFAULT NULL,
  `snmmname` varchar(50) DEFAULT NULL,
  `snmlname` varchar(50) DEFAULT NULL,
  `snmnext` varchar(10) DEFAULT NULL,
  `snmaddress` varchar(100) DEFAULT NULL,
  `snmcontact` varchar(50) DEFAULT NULL,
  `snmoccu` varchar(50) DEFAULT NULL,
  `snmcompany` varchar(50) DEFAULT NULL,
  `snspcyincome` varchar(50) DEFAULT NULL,
  `snrappnas` varchar(200) DEFAULT NULL,
  `snbos` varchar(100) DEFAULT NULL,
  `snsskills` varchar(100) DEFAULT NULL,
  `sntwinterest` varchar(100) DEFAULT NULL,
  `snpschatt` varchar(100) DEFAULT NULL,
  `snpschadd` varchar(100) DEFAULT NULL,
  `snpyrlvl` varchar(100) DEFAULT NULL,
  `snasprc` varchar(10) DEFAULT NULL,
  `snasprcstat` varchar(50) DEFAULT NULL,
  `snapgm` varchar(10) DEFAULT NULL,
  `snapgmstat` varchar(50) DEFAULT NULL,
  `sntbytpic` varchar(10) DEFAULT NULL,
  `sntbytpicstat` varchar(50) DEFAULT NULL,
  `snpbrgyin` varchar(10) DEFAULT NULL,
  `snpbrgyinstat` varchar(50) DEFAULT NULL,
  `snpscef` varchar(10) DEFAULT NULL,
  `snpscefstat` varchar(50) DEFAULT NULL,
  `snacapstype` varchar(30) DEFAULT NULL,
  `snaemail` varchar(50) DEFAULT NULL,
  `snapass` varchar(50) DEFAULT NULL,
  `sngrantstat` varchar(20) DEFAULT NULL,
  `snascholarstat` varchar(30) DEFAULT NULL,
  `snadapply` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nonacad`
--

INSERT INTO `tbl_nonacad` (`snacad_id`, `snfname`, `snmname`, `snlname`, `snnext`, `sndbirth`, `snctship`, `snaddress`, `snpemail`, `sncontact`, `sngender`, `sncourse`, `snyrlvl`, `sngfname`, `sngmname`, `snglname`, `sngnext`, `sngaddress`, `sngcontact`, `sngoccu`, `sngcompany`, `snffname`, `snfmname`, `snflname`, `snfnext`, `snfaddress`, `snfcontact`, `snfoccu`, `snfcompany`, `snmfname`, `snmmname`, `snmlname`, `snmnext`, `snmaddress`, `snmcontact`, `snmoccu`, `snmcompany`, `snspcyincome`, `snrappnas`, `snbos`, `snsskills`, `sntwinterest`, `snpschatt`, `snpschadd`, `snpyrlvl`, `snasprc`, `snasprcstat`, `snapgm`, `snapgmstat`, `sntbytpic`, `sntbytpicstat`, `snpbrgyin`, `snpbrgyinstat`, `snpscef`, `snpscefstat`, `snacapstype`, `snaemail`, `snapass`, `sngrantstat`, `snascholarstat`, `snadapply`) VALUES
(23, '1', '2', '3', 'N/A', '2021-12-01', '4', '5', 'xydik@mailinator.com', '7', 'Female', '8', '9', '10', '11', '12', 'Jr.', '13', '14', '15', '16', '17', '18', '19', 'Sr.', '20', '21', '22', '23', '24', '25', '26', 'Sr.', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '38', '37', '2021-12-02', 'Not-Received', '2021-12-03', 'Not-Received', '2021-12-04', 'Received', '2021-12-05', 'Received', '2021-12-06', 'Not-Received', 'Non-Academic', '39', '$2y$10$qyP4poAi.PZ7K8RyY.sgFek2MrOLEVACfSdKx0WS1Y3', 'Old', 'Pending', '2021-12-08'),
(27, 'Lilah', 'Melyssa Hunt', 'Scarlett Middleton', 'Sr.', '1983-03-21', 'Quia ut quis atque q', 'Velit repellendus A', 'lifiz@mailinator.com', 'Esse beatae quia non', 'Female', 'Molestias quae itaqu', 'Ipsa delec', 'Hamilton Clemons', 'Caryn Salas', 'Nolan Kinney', 'Jr.', 'Elit laborum Elit', 'Ea hic dolor eos qui', 'Autem impedit tempo', 'Valdez and Kent Co', 'Emmanuel Forbes', 'Beatrice Kerr', 'Kenyon Mcbride', 'Jr.', 'Adipisci dolor sit', 'Eveniet non in aliq', 'Veritatis adipisci a', 'Contreras and Nelson Traders', 'Roth Robles', 'Maxine Hood', 'Meghan Mills', 'N/A', 'A earum dolore in ab', 'Nihil sit minim a do', 'Ad rerum laboris ex', 'Mann Livingston Inc', '748', 'Maiores perspiciatis', 'Perspiciatis et sim', 'Ipsam quod totam sed', 'Non ratione et labor', 'Aut velit natus laud', 'Fugit laudantium t', 'Est corporis commod', '2000-12-13', 'Not-Received', '2016-02-07', 'Not-Received', '2000-01-28', 'Not-Received', '2021-02-12', 'Received', '2001-12-11', 'Not-Received', 'Non-Academic', 'qafohynac@mailinator.com', '$2y$10$7M3J6OYEYYy/.uJ3mdozWuzLMQUSG56X/puIlxYYenY', 'New', 'Approved', '2021-12-09'),
(28, 'Yuri', 'Paula Wyatt', 'Cruz Moss', 'N/A', '2020-03-01', 'Ea suscipit adipisci', 'Voluptate dolor null', 'xurewahi@mailinator.com', 'Qui suscipit sit ut', 'Male', 'Aperiam nesciunt om', 'Inventore ', 'Katell Patrick', 'Phillip Mullen', 'Caesar Harrington', 'N/A', 'Totam debitis quia i', 'Incididunt aperiam i', 'Ab sunt esse itaque', 'Raymond and Wynn Associates', 'Fay Parsons', 'Colette Richmond', 'Phyllis Vega', 'Sr.', 'Quisquam laborum nis', 'Illum ex lorem beat', 'Quis ex adipisicing', 'Brown and Bullock Traders', 'Linus Wells', 'Dustin Johnson', 'Nolan Patton', 'Jr.', 'Tempora eos corrupt', 'Excepteur et sapient', 'Commodo tempora aut', 'Sparks Massey Associates', '373', 'Et quae autem non as', 'Sit est qui dolore', 'Ex commodi officia i', 'Voluptate molestias', 'Ea minima ipsum dis', 'Quibusdam praesentiu', 'Voluptatum dolor mol', '2010-07-09', 'Not-Received', '1984-09-21', 'Received', '1987-10-05', 'Not-Received', '2007-06-26', 'Not-Received', '1973-06-14', 'Received', 'Non-Academic', 'qeziqo@mailinator.com', '$2y$10$M61s//.UsksnUleRBhI4YezD299b8Q7O5WMs71c/RDs', 'Old', 'Rejected', '2021-12-12'),
(29, 'Anthony', 'Rahim Armstrong', 'Richard Turner', 'Sr.', '1982-11-12', 'Voluptatem aliqua', 'Reiciendis in molest', 'xydik@mailinator.com', 'Deleniti odio aut ve', 'Female', 'Adipisicing veniam', 'Blanditiis', 'Noel Tyson', 'Cailin Copeland', 'Nichole Summers', 'N/A', 'Eos id voluptatem', 'Cupiditate ipsam cil', 'Dolores omnis accusa', 'Lynn Wolfe LLC', 'Dennis Ochoa', 'Marvin Henson', 'Wanda Keller', 'Jr.', 'Magna dolor at provi', 'Reprehenderit offici', 'Vel et voluptatem S', 'Joseph and Gamble Trading', 'Hadley Pacheco', 'Howard Woodward', 'Zenaida Durham', 'Jr.', 'Commodi quo nulla no', 'Voluptatem accusamu', 'Quis dolore incididu', 'Hamilton Crawford Trading', '373', 'Iure et cumque dolor', 'Dolore eius magna na', 'Eligendi neque elit', 'Ea nulla sit volupta', 'Vel ipsa culpa illu', 'Duis corporis iusto', 'Impedit distinctio', '1976-05-15', 'Received', '1991-03-04', 'Not-Received', '1996-02-20', 'Not-Received', '1972-08-11', 'Not-Received', '2011-12-02', 'Not-Received', 'Non-Academic', 'qylo@mailinator.com', '$2y$10$UOL1IFBtszlMhS0aBEUVMuOz/tt8YYP6vq6gpE87iy5', 'Old', 'Pending', '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requirements`
--

CREATE TABLE `tbl_requirements` (
  `ss_rid` int(11) NOT NULL,
  `sdrprc` varchar(20) DEFAULT NULL,
  `sdrprcstat` varchar(30) NOT NULL,
  `sdrpgm` varchar(20) DEFAULT NULL,
  `sdrpgmstat` varchar(30) NOT NULL,
  `sdrpbrgyin` varchar(20) DEFAULT NULL,
  `sdrpbrgyinstat` varchar(30) NOT NULL,
  `sdrobr` varchar(20) DEFAULT NULL,
  `sdrobrstat` varchar(30) NOT NULL,
  `sdrpsa` varchar(20) DEFAULT NULL,
  `sdrpsastat` varchar(30) NOT NULL,
  `sdrpscef` varchar(20) DEFAULT NULL,
  `sdrpscefstat` varchar(30) NOT NULL,
  `sdrtbytpic` varchar(20) DEFAULT NULL,
  `sdrtbytpicstat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `s_id` int(11) NOT NULL,
  `sfname` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`s_id`, `sfname`, `last_name`, `email`) VALUES
(28, 'Barbara', 'Motes', 'barbarapmotes@armyspy.com'),
(29, 'Paul', 'Minter', 'paulcminter@rhyta.com'),
(30, 'Robin', 'Morton', 'robinamorton@armyspy.com'),
(31, 'Alvin', 'Sarvis', 'AlvinMSarvis@armyspy.com'),
(32, 'Daniel', 'Retana', 'DanielSRetana@teleworm.us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schship_info`
--

CREATE TABLE `tbl_schship_info` (
  `sshipinfo_id` int(11) NOT NULL,
  `sscapstype` varchar(20) NOT NULL,
  `ssgrantstat` varchar(20) NOT NULL,
  `ssscholarstat` varchar(30) NOT NULL,
  `ssdrejected` varchar(20) DEFAULT NULL,
  `ssdapprove` varchar(20) DEFAULT NULL,
  `ssdapply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `sgeduc` varchar(30) DEFAULT NULL,
  `sgcontact` varchar(20) DEFAULT NULL,
  `sgaddress` text DEFAULT NULL,
  `sgoccu` varchar(30) DEFAULT NULL,
  `sgcompany` varchar(30) DEFAULT NULL,
  `sffname` varchar(50) DEFAULT NULL,
  `sfmname` varchar(50) DEFAULT NULL,
  `sflname` varchar(50) DEFAULT NULL,
  `sfnext` varchar(10) DEFAULT NULL,
  `sflstatus` varchar(10) DEFAULT NULL,
  `sfeduc` varchar(30) DEFAULT NULL,
  `sfcontact` varchar(20) DEFAULT NULL,
  `sfaddress` text DEFAULT NULL,
  `sfoccu` varchar(30) DEFAULT NULL,
  `sfcompany` varchar(30) DEFAULT NULL,
  `smfname` varchar(50) DEFAULT NULL,
  `smmname` varchar(50) DEFAULT NULL,
  `smlname` varchar(50) DEFAULT NULL,
  `smnext` varchar(10) DEFAULT NULL,
  `smlstatus` varchar(10) DEFAULT NULL,
  `smeduc` varchar(30) DEFAULT NULL,
  `smcontact` varchar(20) DEFAULT NULL,
  `smaddress` text DEFAULT NULL,
  `smoccu` varchar(30) DEFAULT NULL,
  `smcompany` varchar(30) DEFAULT NULL,
  `snsibling` varchar(10) DEFAULT NULL,
  `spcyincome` varchar(50) DEFAULT NULL,
  `spschname` text DEFAULT NULL,
  `spsaddress` text DEFAULT NULL,
  `spstype` varchar(20) DEFAULT NULL,
  `spscourse` varchar(50) DEFAULT NULL,
  `spsyrlvl` varchar(20) DEFAULT NULL,
  `spsgwa` int(10) DEFAULT NULL,
  `spsraward` text DEFAULT NULL,
  `spsdawardrceive` date DEFAULT NULL,
  `scsintend` text DEFAULT NULL,
  `scsadd` text DEFAULT NULL,
  `scschooltype` varchar(20) DEFAULT NULL,
  `sccourse` varchar(50) DEFAULT NULL,
  `sccourseprio` varchar(50) DEFAULT NULL,
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
(820, 'Error ut odio velit', 'Kermit Murphy', 'Leslie Mcconnell', 'Samantha Morse', 'N/A', '1986-10-11', 'Female', 'Sit dolore ratione', NULL, 'Voluptas sit et ex a', 'muritiw@mailinator.com', 'Officiis adipisci re', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brielle Lynch', NULL, NULL, NULL, NULL, NULL, 'Sed assumenda harum', 'Perspiciatis sed ea', 'Labore voluptatem s', 'Torres and Day Plc', 'Prescott Dickerson', NULL, NULL, NULL, NULL, NULL, 'Mollitia quisquam qu', 'Aut eaque officia du', 'Autem ut magni ex du', 'Flores and Meyers LLC', 'Jescie Kirk', NULL, NULL, NULL, NULL, NULL, 'Ex dolore incidunt', 'Quis nisi est ullam', 'Eos magna incidunt', 'Gallagher and Talley Co', NULL, '607', NULL, NULL, NULL, NULL, NULL, 0, 'Unde molestiae simil', '1992-05-26', NULL, NULL, NULL, 'BSED', NULL, '2nd Year', '$argon2i$v=19$m=65536,t=4,p=1$WU4xWHo4SzdFeXd4bkU2OQ$M0edrcj7atjDR+Nx6uc8oP5sx7hIPaez5W9E/b6OCXc', '1981-09-20', 'Not-Received', '1997-01-26', 'Not-Received', '1994-08-05', 'Not-Received', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-02-04', 'd9257e5a2ecb2b87e9f99cd1e9befa7c', 'No', 'Active', '', 'Pending', 'Academic'),
(821, 'Fuga Quidem dolor v', 'Lamar Harrell', 'Ursula Levine', 'Odette Winters', 'Jr.', '1971-11-09', 'Male', 'Ut non aperiam place', NULL, 'Consectetur cumque', 'bozyp@mailinator.com', 'Molestiae sunt ullam', NULL, NULL, NULL, NULL, NULL, NULL, 'Culpa eligendi quae', 'Excepturi lorem qui', 'Enim fugiat dolores', 'Facilis praesentium', NULL, 'Isadora Conley', NULL, NULL, NULL, NULL, NULL, 'Vitae possimus aliq', 'Deleniti incidunt i', 'Non quibusdam quia h', 'Carr Webb Co', 'Freya Cervantes', NULL, NULL, NULL, NULL, NULL, 'Amet sunt ab at de', 'Sed sunt dolores und', 'Et rerum tempore an', 'Lopez Sosa Inc', 'Rebecca Lloyd', NULL, NULL, NULL, NULL, NULL, 'Vel neque minus sequ', 'Repellendus Rerum u', 'Blanditiis ipsum ni', 'Franco Rodriquez Trading', NULL, '930', 'Voluptas quas et eum', 'Consectetur omnis a', NULL, NULL, 'Veritatis a autem do', NULL, NULL, NULL, NULL, NULL, NULL, 'BSTM', NULL, '3rd Year', '$argon2i$v=19$m=65536,t=4,p=1$S1BlZGY3Q3EuSS5DNFJRcA$WJHYn97IEPSHOsRYpwNFMW09/INoAXWrMhljrSlqgS4', '1997-01-08', 'Received', '1970-04-26', 'Not-Received', NULL, NULL, '1996-12-20', 'Not-Received', '1977-06-23', 'Not-Received', '2007-01-20', 'Received', NULL, NULL, '', '', NULL, NULL, '2022-02-04', '4cf58c06abd982ef6a4088677a9c9c39', 'No', 'Active', '', 'Pending', 'Non-Academic'),
(822, NULL, 'Bradley Morgan', 'Aphrodite Johns', 'Dana Suarez', 'Jr.', '2021-04-06', 'Male', 'Qui irure sit labor', NULL, 'Ullamco sunt rerum', 'sazusipenu@mailinator.com', NULL, NULL, NULL, NULL, 'Non dolore vitae in', 'Nostrud magna fugiat', NULL, NULL, NULL, NULL, NULL, '1999-10-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kaseem Kim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ashely Mccormick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '497', 'Nisi quasi neque quo', NULL, NULL, 'Obcaecati animi aut', 'Nostrum nihil deseru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$argon2i$v=19$m=65536,t=4,p=1$WXJFeG9uU0hsb3Azam9ESQ$b+tBqQt9e3kPQPHE4Zj4yBTTkmRD6nC1neBfS3Rdl+8', NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-10', 'Not-Received', '2017-10-25', 'Not-Received', NULL, NULL, '1991-09-01', 'Received', '', '', NULL, NULL, '2022-02-04', 'e8e3bf5c499b04470911f9fac7859142', 'No', 'Active', '', 'Pending', 'UNIFAST'),
(823, 'Exercitation in cill', 'Mia Diaz', 'Cecilia Goodwin', 'Ocean Dawson', 'N/A', '2011-08-27', 'Female', 'Magni nisi ipsum ip', 'Quas disti', 'Nihil ad ut aliquip', 'godala@mailinator.com', 'Cumque facilis nulla', 'Married', 'Tenetur culpa asper', 'Commodi nihil ea pra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Zia Byers', NULL, NULL, NULL, 'Deceased', 'Ea mollit ea omnis s', NULL, 'Corrupti distinctio', 'Perferendis dolore q', NULL, 'Renee Nicholson', NULL, NULL, NULL, 'Living', 'Quaerat ipsum est a', NULL, 'Veniam temporibus o', 'Dolor dolorem et vol', NULL, 'Et dolorem', '625', 'Cupiditate et earum', 'Proident voluptas i', 'Public', NULL, 'Ex nulla deserunt et', NULL, NULL, NULL, 'Voluptatum iste quas', 'Pariatur Unde aperi', 'Private', 'Amet eum cumque con', 'Not Priority', NULL, '$argon2i$v=19$m=65536,t=4,p=1$OHVmRS9UYXIxbjUyQjhtVw$DEJzRg4UvwKb84xsh0oyOfOtn0vND3toObt1xp8AiVA', '1973-02-17', 'Received', '1989-05-06', 'Received', NULL, NULL, NULL, NULL, '2011-10-16', 'Not-Received', NULL, NULL, NULL, NULL, '', '', NULL, NULL, '2022-02-04', 'febd8886930a9d6e0e196d085b4b42db', 'No', 'Active', '', 'Pending', 'CHED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unifast`
--

CREATE TABLE `tbl_unifast` (
  `sunifast_id` int(11) NOT NULL,
  `sustudent_id` varchar(50) DEFAULT NULL,
  `suslname` varchar(50) DEFAULT NULL,
  `susfname` varchar(50) DEFAULT NULL,
  `susmname` varchar(50) DEFAULT NULL,
  `susnext` varchar(10) DEFAULT NULL,
  `susgender` varchar(10) DEFAULT NULL,
  `susdbirth` varchar(10) DEFAULT NULL,
  `suscontact` varchar(20) DEFAULT NULL,
  `susaddress` varchar(100) DEFAULT NULL,
  `susspattended` varchar(100) DEFAULT NULL,
  `suscp` varchar(50) DEFAULT NULL,
  `susyl` varchar(50) DEFAULT NULL,
  `suspemail` varchar(20) DEFAULT NULL,
  `susflname` varchar(50) DEFAULT NULL,
  `susffname` varchar(50) DEFAULT NULL,
  `susfmname` varchar(50) DEFAULT NULL,
  `susfnext` varchar(20) DEFAULT NULL,
  `susmlname` varchar(50) DEFAULT NULL,
  `susmfname` varchar(50) DEFAULT NULL,
  `susmmname` varchar(50) DEFAULT NULL,
  `susmnext` varchar(20) DEFAULT NULL,
  `susdswd` varchar(100) DEFAULT NULL,
  `sushci` varchar(50) DEFAULT NULL,
  `susdid` varchar(100) DEFAULT NULL,
  `susdfilled` varchar(10) DEFAULT NULL,
  `sudrpic` varchar(10) DEFAULT NULL,
  `sudrpicstat` varchar(50) DEFAULT NULL,
  `sudrpsa` varchar(10) DEFAULT NULL,
  `sudrpsastat` varchar(50) DEFAULT NULL,
  `sudrobr` varchar(10) DEFAULT NULL,
  `sudrobrstat` varchar(50) DEFAULT NULL,
  `sustype` varchar(50) DEFAULT NULL,
  `susaemail` varchar(100) DEFAULT NULL,
  `susapass` varchar(100) DEFAULT NULL,
  `susgrantstat` varchar(50) DEFAULT NULL,
  `susschstat` varchar(20) DEFAULT NULL,
  `susdapply` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unifast`
--

INSERT INTO `tbl_unifast` (`sunifast_id`, `sustudent_id`, `suslname`, `susfname`, `susmname`, `susnext`, `susgender`, `susdbirth`, `suscontact`, `susaddress`, `susspattended`, `suscp`, `susyl`, `suspemail`, `susflname`, `susffname`, `susfmname`, `susfnext`, `susmlname`, `susmfname`, `susmmname`, `susmnext`, `susdswd`, `sushci`, `susdid`, `susdfilled`, `sudrpic`, `sudrpicstat`, `sudrpsa`, `sudrpsastat`, `sudrobr`, `sudrobrstat`, `sustype`, `susaemail`, `susapass`, `susgrantstat`, `susschstat`, `susdapply`) VALUES
(13, 'Id mollit consequat', 'Sheila Spears', 'Victoria Barron', 'Aurelia Alford', 'Sr.', 'Female', 'Sit placea', 'Dolorum illo libero', 'Labore sint reprehen', 'Magnam molestiae pla', 'Quis vel a dolor ani', 'Repudiandae dolore d', 'lemyboty@mailinator.', 'Geraldine Burke', 'Cedric Hancock', 'Irene Johns', 'N/A', 'Marah Keith', 'Brooke Hahn', 'Sierra Guzman', 'N/A', 'Recusandae Facilis', 'Inventore in exceptu', 'Qui odio dolorem lab', 'Dolorem mi', '', 'Received', '', 'Not-Received', '', 'Received', 'Unifast', 'dedo@mailinator.com', '$2y$10$gxOkb5wLuIvITl3pRkHDHufrhlVd7/h4xSnCpTq57S0GTx93G4ZJm', 'Old', 'Approved', '2021-12-08'),
(29, 'Veniam omnis magna', 'Helen Lester', 'Gabriel Barton', 'Taylor Hewitt', 'Jr.', 'Male.', '1985-07-13', 'Do irure sed nulla q', 'Corrupti iste deser', 'Consectetur odit of', 'Ut ea asperiores dol', 'Omnis vel ipsum quo', 'xuhysexoz@mailinator', 'Paula Welch', 'Yoshio Evans', 'Inga Herring', 'N/A', 'Orlando Trevino', 'Cassady Petersen', 'Ahmed Herrera', 'Sr.', 'Ea vero et est rerum', 'Delectus sunt sed u', 'Rerum eveniet et co', '1975-04-12', '2021-12-01', 'Not-Received', '2009-01-12', 'Not-Received', '1975-11-14', 'Not-Received', 'Unifast', 'pinucimigo@mailinator.com', '$2y$10$WP1SvAC/lxbTwSzA4aCVVO6FVLFO2ej7w1iuTW0vTsBpuZryXXv2q', 'New', 'Rejected', '2021-12-09'),
(30, '1', '2', '3', '4', 'N/A', 'Male.', '2021-12-01', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'Jr.', '14', '15', '16', 'Sr.', '17', '18', '19', '2021-12-02', '', 'Not-Received', '', 'Not-Received', '', 'Not-Received', 'Unifast', '20', '$2y$10$omck4/pz.820BSHDoAEK0eOSDkDUb4aFIDN.TysCrdZTeLrL8i6e.', 'New', 'Pending', '2021-12-09'),
(31, 'Eveniet accusamus m', 'Zeus Rowe', 'Garrett Ferguson', 'Austin Watson', 'Jr.', 'Female', '2022-01-13', 'Optio commodi conse', 'Ut Nam nulla tempore', 'Aliqua Delectus ul', 'Est autem voluptates', 'Illum omnis anim te', 'famoxe@mailinator.co', 'Jolie Mcintosh', 'Emily Beard', 'Castor Price', 'Sr.', 'Burke Durham', 'Cynthia Adams', 'Quynn Bullock', 'Jr.', 'Molestias architecto', 'Laborum non sunt co', 'Dolor lorem aspernat', '2022-01-13', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'nunuqetado@mailinator.com', '$2y$10$8hc8Do0Cudr01ub.zv03Tu4rwXl/lzy45mmKFw1Cv/jEDGCTi3QKG', 'New', 'Pending', '2022-01-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acad`
--
ALTER TABLE `tbl_acad`
  ADD PRIMARY KEY (`sacad_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_ched`
--
ALTER TABLE `tbl_ched`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `tbl_nonacad`
--
ALTER TABLE `tbl_nonacad`
  ADD PRIMARY KEY (`snacad_id`);

--
-- Indexes for table `tbl_requirements`
--
ALTER TABLE `tbl_requirements`
  ADD PRIMARY KEY (`ss_rid`);

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_schship_info`
--
ALTER TABLE `tbl_schship_info`
  ADD PRIMARY KEY (`sshipinfo_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  ADD PRIMARY KEY (`sunifast_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acad`
--
ALTER TABLE `tbl_acad`
  MODIFY `sacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ched`
--
ALTER TABLE `tbl_ched`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_nonacad`
--
ALTER TABLE `tbl_nonacad`
  MODIFY `snacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=824;

--
-- AUTO_INCREMENT for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  MODIFY `sunifast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
