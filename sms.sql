-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:14 AM
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
  `sacourse` varchar(50) NOT NULL,
  `sagyl` varchar(20) NOT NULL,
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
(80, 'Elijah Barker', 'Mallory Rosa', 'Imelda Garner', 'Jr.', '1988-09-27', 'Rerum cupidatat dolo', 'Rem ipsum sunt enim', 'misyne@mailinator.com', 'Asperiores cum proid', 'Ab et consequat Qua', 'Eaque sit nobis eni', 'Male', 'Aaron Cabrera', 'Paul Cabrera', 'Fiona Long', 'Sr.', 'Duis et voluptates s', 'Recusandae Nostrud', 'Quo sed harum eum id', 'Joyce Nolan Associates', 'Akeem Beck', 'Giselle William', 'Jack Wooten', 'N/A', 'Vitae laborum dolore', 'Dolorem sunt et recu', 'Ex dignissimos sapie', 'Hutchinson Andrews Inc', 'Kalia Johnston', 'Autumn Calderon', 'Palmer Mooney', 'Jr.', 'Voluptatem fugiat a', 'Ratione reiciendis v', 'Sequi velit nostrud', 'Giles and Roth Associates', '173', 'Error laudantium at', 'In tempora voluptas', '1989-04-27', '', 'Received', '', 'Not-Received', '', 'Not-Received', 'Academic', 'jafihyfece@mailinator.com', '$2y$10$7t3gNe8QL.fYOfFxRYgEcuXkc8m3SimIg598Lub1Aoa', 'Old', 'Pending', '2021-12-09'),
(81, 'Violet Cote', 'Kylie Rose', 'Hunter Whitehead', 'N/A', '1985-08-24', 'Vitae ut facilis vol', 'Soluta fuga Lorem a', 'qapilitiga@mailinator.com', 'Ipsa sint dolorem c', 'Tempor eiusmod nesci', 'Eiusmod lorem numqua', 'Female', 'Macon Mckee', 'Shaine Raymond', 'Haley Phelps', 'Sr.', 'Et ut a labore ducim', 'Eaque consequatur ex', 'Magnam odio accusant', 'Nixon Haney Plc', 'Cadman Curtis', 'Ariel Workman', 'Maya Mason', 'Sr.', 'Neque quas assumenda', 'Assumenda quia velit', 'Laborum Dolores tot', 'Franco and Day Co', 'Chastity Sanders', 'Allistair Wood', 'Sydney Burnett', 'Sr.', 'Eiusmod omnis enim a', 'Mollit anim ea ut pe', 'Delectus consequat', 'Middleton Gilbert Trading', '445', 'Atque odit minim est', 'Pariatur Autem volu', '1976-10-21', '1986-02-19', 'Not-Received', '2018-06-15', 'Not-Received', '2013-12-07', 'Received', 'Academic', 'petoboly@mailinator.com', '$2y$10$6Q062qMZHOv0oWMJslR5g.N9Tr0fuSz04jstWyL/21K', 'New', 'Pending', '2021-12-09'),
(82, 'Zorita Jackson', 'Finn Bradford', 'Daryl Cardenas', 'Jr.', '1974-07-06', 'Consequatur Sed est', 'Voluptate rem ipsum', 'mogaf@mailinator.com', 'Magna cillum volupta', 'Autem quia lorem exp', 'Veniam et deserunt', 'Male', 'Vielka Sheppard', 'Reuben Kaufman', 'Julie Bell', 'N/A', 'Velit aperiam qui cu', 'Et alias autem facer', 'Ut vitae ullamco eum', 'Gonzales and Sargent Trading', 'Matthew Chapman', 'Stacey Garza', 'Ayanna Hinton', 'N/A', 'Nisi delectus et qu', 'Laborum ut eiusmod l', 'Aliquid sint quia mi', 'Rojas Walls Co', 'Sophia Barber', 'Alexander Huff', 'Lavinia Roth', 'Jr.', 'Sint voluptatem dolo', 'Tenetur in doloremqu', 'Enim ea deleniti ass', 'Williamson Hogan Plc', '787', 'Id id dolores sit', 'Obcaecati commodi es', '2002-01-10', '2019-10-20', 'Received', '1974-11-15', 'Not-Received', '1983-02-18', 'Received', 'Academic', 'fynoxudow@mailinator.com', '$2y$10$QrwW4/RlOSwuoRmK9SZMweISgTotyQmIbSYz4eVBrKd', 'Old', 'Pending', '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `school_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `school_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `school_logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email_address`, `admin_password`, `admin_name`, `school_name`, `school_address`, `school_contact_no`, `school_logo`) VALUES
(1, 'admin@gmail.com', 'password', 'Administrator', 'St. Cecilia\'s College Cebu, Inc.', 'Natalio B. Bacalso S National Hwy, Minglanilla, Cebu', '(032) 490 8511', '../images/1940074418.png');

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
(11, 'Camden Rivas', 'Aphrodite Brown', 'Shay James', 'N/A', '1992-09-04', 'Male', 'Single', 'Est ipsam aliquam q', 'Doloribus nemo conse', 'Culpa error deserunt', 'Commodo quo placeat', 'In quia sint enim d', 'Private', 'In maiores molestiae', 'Cum est ea voluptas', 'Eveniet quidem quia', 'kifilehom@mailinator.com', 'Suscipit in voluptat', 'Amy Gay', 'Athena Perez', 'Jin Odom', 'N/A', 'Living', 'Voluptatum eiusmod d', 'Et a excepteur vitae', 'Quo ullamco labore e', 'Lucius Ray', 'Basia Wolfe', 'Justin Barton', 'N/A', 'Deceased', 'Dolor ipsa est nequ', 'Molestiae quisquam s', 'Voluptatibus provide', 'Omnis at quam veniam', 'Explicabo Voluptate', 'Vero ut ab ipsum deb', 'Consequat Voluptas', 'Public', 'Suscipit deserunt ut', 'Not Priority', '1987-11-21', 'Not-Received', '1970-12-12', 'Received', '1992-03-06', 'Received', 'CHED', 'calerelizu@mailinator.com', '$2y$10$rAe88fVrC/5hL4qCtZUt0OqVNScCVzxtgFZzsf25Sj6', 'New', 'Pending', '2021-12-09'),
(14, '1', '2', '3', 'N/A', '2021-12-01', 'Male', 'Single', '4', '5', '6', '7', '8', 'Private', '9', '10', '11', '12', '13', '14', '15', '16', 'Jr.', 'Living', '19', '17', '18', '20', '21', '22', 'Sr.', 'Living', '25', '23', '24', '26', '27', '28', '29', 'Public', '30', 'Priority', '2021-12-02', 'Received', '2021-12-04', 'Received', '2021-12-03', 'Received', 'CHED', '31', '$2y$10$EqYgnDcxrsraCfliI1xdT.Whzt0S.J7U/ZySeGcWnc1', 'New', 'Pending', '2021-12-09'),
(16, 'Tasha Ramos', 'Martin Stanton', 'Camille Franco', 'Sr.', '2021-12-09', 'Male', 'Single', 'Tempora qui eveniet', 'Omnis irure quae ips', 'Quod et dolorem offi', 'Modi quod omnis tota', 'Quo porro laboris do', 'Public', 'Enim rerum voluptate', 'Esse blanditiis qua', 'Maiores sed dolore d', 'babunadok@mailinator.com', 'Culpa sed omnis con', 'Shaeleigh Vasquez', 'Keely Frank', 'Wyoming Chase', 'N/A', 'Living', 'Et eos illo quod ad ', 'Officiis qui praesen', 'Amet non ipsam magn', 'Aretha Carney', 'Jesse Watkins', 'Jr.', 'Iliana Watson', 'Living', 'Sed voluptas hic mol', 'Incidunt ducimus v', 'In fuga Aliquid ass', 'Veritatis rerum dolo', 'Officia doloribus qu', 'Doloribus dolorem vo', 'Error suscipit proid', 'Private', 'Est labore nihil des', 'Priority', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'CHED', 'jyvaly@mailinator.com', '$2y$10$7lYDrLNvnEIxciurbrB8O.RXF4u8qwaznbCf.dSJ.W2', 'New', 'Pending', '2021-12-09');

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
(23, '1', '2', '3', 'N/A', '2021-12-01', '4', '5', '6', '7', 'Female', '8', '9', '10', '11', '12', 'Jr.', '13', '14', '15', '16', '17', '18', '19', 'Sr.', '20', '21', '22', '23', '24', '25', '26', 'Sr.', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '38', '37', '2021-12-02', 'Not-Received', '2021-12-03', 'Not-Received', '2021-12-04', 'Received', '2021-12-05', 'Received', '2021-12-06', 'Not-Received', 'Non-Academic', '39', '$2y$10$siJbcGSmAqm/vIjdAQ.LxeJici89MYu8DC6/KyzUGke', 'Old', 'Pending', '2021-12-08'),
(27, 'Lilah', 'Melyssa Hunt', 'Scarlett Middleton', 'Sr.', '1983-03-21', 'Quia ut quis atque q', 'Velit repellendus A', 'lifiz@mailinator.com', 'Esse beatae quia non', 'Female', 'Molestias quae itaqu', 'Ipsa delec', 'Hamilton Clemons', 'Caryn Salas', 'Nolan Kinney', 'Jr.', 'Elit laborum Elit', 'Ea hic dolor eos qui', 'Autem impedit tempo', 'Valdez and Kent Co', 'Emmanuel Forbes', 'Beatrice Kerr', 'Kenyon Mcbride', 'Jr.', 'Adipisci dolor sit', 'Eveniet non in aliq', 'Veritatis adipisci a', 'Contreras and Nelson Traders', 'Roth Robles', 'Maxine Hood', 'Meghan Mills', 'N/A', 'A earum dolore in ab', 'Nihil sit minim a do', 'Ad rerum laboris ex', 'Mann Livingston Inc', '748', 'Maiores perspiciatis', 'Perspiciatis et sim', 'Ipsam quod totam sed', 'Non ratione et labor', 'Aut velit natus laud', 'Fugit laudantium t', 'Est corporis commod', '2000-12-13', 'Not-Received', '2016-02-07', 'Not-Received', '2000-01-28', 'Not-Received', '2021-02-12', 'Received', '2001-12-11', 'Not-Received', 'Non-Academic', 'qafohynac@mailinator.com', '$2y$10$7M3J6OYEYYy/.uJ3mdozWuzLMQUSG56X/puIlxYYenY', 'New', 'Pending', '2021-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `s_id` int(11) NOT NULL,
  `sidnum` varchar(30) NOT NULL,
  `sfname` varchar(50) NOT NULL,
  `smname` varchar(50) NOT NULL,
  `slname` varchar(50) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `scourse` varchar(50) NOT NULL,
  `syearlvl` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `scontact` varchar(30) NOT NULL,
  `saemail` varchar(50) NOT NULL,
  `spass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(29, 'Veniam omnis magna', 'Helen Lester', 'Gabriel Barton', 'Taylor Hewitt', 'Jr.', 'Male.', '1985-07-13', 'Do irure sed nulla q', 'Corrupti iste deser', 'Consectetur odit of', 'Ut ea asperiores dol', 'Omnis vel ipsum quo', 'xuhysexoz@mailinator', 'Paula Welch', 'Yoshio Evans', 'Inga Herring', 'N/A', 'Orlando Trevino', 'Cassady Petersen', 'Ahmed Herrera', 'Sr.', 'Ea vero et est rerum', 'Delectus sunt sed u', 'Rerum eveniet et co', '1975-04-12', '2021-12-01', 'Not-Received', '2009-01-12', 'Not-Received', '1975-11-14', 'Not-Received', 'Unifast', 'pinucimigo@mailinator.com', '$2y$10$WP1SvAC/lxbTwSzA4aCVVO6FVLFO2ej7w1iuTW0vTsBpuZryXXv2q', 'New', 'Pending', '2021-12-09'),
(30, '1', '2', '3', '4', 'N/A', 'Male.', '2021-12-01', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'Jr.', '14', '15', '16', 'Sr.', '17', '18', '19', '2021-12-02', '', 'Not-Received', '', 'Not-Received', '', 'Not-Received', 'Unifast', '20', '$2y$10$omck4/pz.820BSHDoAEK0eOSDkDUb4aFIDN.TysCrdZTeLrL8i6e.', 'New', 'Pending', '2021-12-09');

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
  MODIFY `sacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
  MODIFY `snacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  MODIFY `sunifast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
