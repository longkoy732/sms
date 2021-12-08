-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 05:31 AM
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
  `sagaddress` varchar(50) DEFAULT NULL,
  `sagcontact` varchar(50) DEFAULT NULL,
  `sagoccu` varchar(50) DEFAULT NULL,
  `sagcompany` varchar(50) DEFAULT NULL,
  `saffname` varchar(50) DEFAULT NULL,
  `safmname` varchar(50) DEFAULT NULL,
  `saflname` varchar(50) DEFAULT NULL,
  `safnext` varchar(10) DEFAULT NULL,
  `safaddress` varchar(100) DEFAULT NULL,
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
(74, 'Emerald Williams', 'Carlos Ramirez', 'Gary Guy', 'Jr.', '2021-12-01', 'Sapiente quam distin', 'Voluptate rerum at p', 'genokaxy@mailinator.com', 'Deleniti voluptatum', 'Corporis quaerat vol', 'Aliquid qui velit v', 'Female', 'Andrew Arnold', 'Tanya Mccullough', 'Oren Alvarado', 'Sr.', 'Dolore deleniti dolo', 'Eaque sit velit nul', 'Modi qui expedita iu', 'Rojas Gonzales Inc', 'Timothy Rosales', 'Edward Holloway', 'Rose Blackwell', 'Sr.', 'A molestiae consequa', 'In vel non aut exped', 'Architecto soluta qu', 'Ross and Barker Traders', 'Bell Jennings', 'Lois Kirkland', 'Erasmus Garrett', 'N/A', 'Incidunt elit qui', 'Sit tempore molesti', 'A quo perspiciatis', 'Marks Mcgowan Traders', '24', 'Quis ullamco volupta', 'Ipsum quas incididu', '2021-12-02', '2021-12-03', 'Received', '2021-12-04', 'Received', '2021-12-05', 'Not-Received', 'Academic', 'fetow@mailinator.com', '$2y$10$RDX9q.hoJsKNlWYlhfF0JurXDFuewelwExaLcPk15M6', 'Old', 'Pending', '2021-12-07'),
(75, 'Brenda Rivers', 'Lyle Green', 'Warren Howard', 'Jr.', '2021-12-01', 'Similique eu tempor', 'Et quis molestiae co', 'hobomybojy@mailinator.com', 'Consequat Porro und', 'Culpa quis rerum off', 'Perspiciatis et rec', 'Male', 'Hilda Estes', 'Camilla Dotson', 'Quentin Jacobs', 'Jr.', 'Eu consequatur Sit', 'Aut iste assumenda n', 'Nostrum accusamus ad', 'Brady Lee LLC', 'Kasimir Murphy', 'Dana Gomez', 'Chancellor Gates', 'Sr.', 'Placeat est reprehe', 'Veritatis sequi maxi', 'Mollitia consequatur', 'Melendez Rocha Co', 'Ferris Ashley', 'Alvin Marsh', 'Norman Lambert', 'Sr.', 'Consequatur Tempor', 'Officia quasi libero', 'Reprehenderit sit q', 'Franklin Carrillo LLC', '317', 'Accusantium elit ut', 'Est dolorum voluptas', '2021-12-02', '', 'Not-Received', '', 'Received', '', 'Received', 'Academic', 'nuvypab@mailinator.com', '$2y$10$OLt8pG3WwQV5R3CwZex/cOnDoVrO.qsk.qSZ/DJ9wbC', 'New', 'Pending', '2021-12-07'),
(76, 'Mia Coffey', 'Vance Rodriguez', 'George Gibbs', 'Sr.', '2021-12-01', 'Ipsum voluptate exp', 'Rerum itaque qui mol', 'teluna@mailinator.com', 'Nam itaque provident', 'Rerum aliquam quaera', 'Dolores velit quaera', 'Female', 'Thor Carpenter', 'August Tucker', 'Deborah Mercado', 'Sr.', 'Officiis perspiciati', 'Explicabo Commodo b', 'Est harum fuga Veli', 'Britt Anderson Inc', 'Keane Whitehead', 'Faith Stewart', 'Todd Clark', 'N/A', 'Excepturi enim sint', 'Nesciunt non exerci', 'In qui non in labori', 'Long Becker Traders', 'Herrod Woodward', 'Nadine Mcknight', 'Tobias Mcintosh', 'Jr.', 'Quod nobis proident', 'Eum sit dolorum numq', 'Esse delectus labo', 'Benton Mcgowan LLC', '951', 'Est laborum Labore', 'Dicta at aperiam ut', '2021-12-01', '', 'Received', '', 'Received', '', 'Received', 'Academic', 'qijyxydud@mailinator.com', '$2y$10$wvyuQJYCzfCxMlUN5.zLx.3ZZU3Sl42Agn/3UJy6rzu', 'New', 'Pending', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
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
  `scfname` varchar(50) NOT NULL,
  `scmname` varchar(50) NOT NULL,
  `sclname` varchar(100) NOT NULL,
  `scnext` varchar(20) NOT NULL,
  `scdbirth` date NOT NULL,
  `scgender` varchar(20) NOT NULL,
  `sccivilstat` varchar(20) NOT NULL,
  `scpbirth` varchar(100) NOT NULL,
  `scaddress` varchar(100) NOT NULL,
  `sczcode` varchar(20) NOT NULL,
  `scschname` varchar(100) NOT NULL,
  `scsaddress` varchar(100) NOT NULL,
  `scstype` varchar(20) NOT NULL,
  `schygrade` varchar(50) NOT NULL,
  `scctship` varchar(50) NOT NULL,
  `scmnum` varchar(20) NOT NULL,
  `scpemail` varchar(50) NOT NULL,
  `scdisability` varchar(100) NOT NULL,
  `scflname` varchar(50) NOT NULL,
  `scffname` varchar(50) NOT NULL,
  `scfmname` varchar(50) NOT NULL,
  `scfstatus` varchar(20) NOT NULL,
  `scfaddress` varchar(100) NOT NULL,
  `scfoccu` varchar(50) NOT NULL,
  `scfeduc` varchar(50) NOT NULL,
  `scmlname` varchar(100) NOT NULL,
  `scmfname` varchar(100) NOT NULL,
  `scmmname` varchar(50) NOT NULL,
  `scmstatus` varchar(20) NOT NULL,
  `scmaddress` varchar(100) NOT NULL,
  `scmoccu` varchar(50) NOT NULL,
  `scmeduc` varchar(50) NOT NULL,
  `scptgross` varchar(20) NOT NULL,
  `scnsibling` varchar(20) NOT NULL,
  `scsintend` varchar(100) NOT NULL,
  `scsadd` varchar(100) NOT NULL,
  `scschooltype` varchar(10) NOT NULL,
  `sccourse` varchar(50) NOT NULL,
  `sccoursestat` varchar(20) NOT NULL,
  `scdrprc` date DEFAULT NULL,
  `scdrprcstat` varchar(50) DEFAULT NULL,
  `scdrbrgyin` date DEFAULT NULL,
  `scdrbrgyinstat` varchar(50) DEFAULT NULL,
  `scdrpgm` date DEFAULT NULL,
  `scdrpgmstat` varchar(50) DEFAULT NULL,
  `scschtype` varchar(50) DEFAULT NULL,
  `scaemail` varchar(50) NOT NULL,
  `scapass` varchar(100) NOT NULL,
  `scgrantstat` varchar(50) NOT NULL,
  `scschstat` varchar(10) NOT NULL,
  `scdapply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ched`
--

INSERT INTO `tbl_ched` (`sched_id`, `scfname`, `scmname`, `sclname`, `scnext`, `scdbirth`, `scgender`, `sccivilstat`, `scpbirth`, `scaddress`, `sczcode`, `scschname`, `scsaddress`, `scstype`, `schygrade`, `scctship`, `scmnum`, `scpemail`, `scdisability`, `scflname`, `scffname`, `scfmname`, `scfstatus`, `scfaddress`, `scfoccu`, `scfeduc`, `scmlname`, `scmfname`, `scmmname`, `scmstatus`, `scmaddress`, `scmoccu`, `scmeduc`, `scptgross`, `scnsibling`, `scsintend`, `scsadd`, `scschooltype`, `sccourse`, `sccoursestat`, `scdrprc`, `scdrprcstat`, `scdrbrgyin`, `scdrbrgyinstat`, `scdrpgm`, `scdrpgmstat`, `scschtype`, `scaemail`, `scapass`, `scgrantstat`, `scschstat`, `scdapply`) VALUES
(5, 'Nomlanga Walls', 'Claudia English', 'Mariko Velazquez', 'N/A', '2021-11-18', 'Male', 'Single', 'Fugiat eum vero cupi', 'Aut ipsa quis est c', 'Dolores labore repre', 'Ut enim vero ut cupi', 'Doloremque reprehend', 'Private', 'Numquam illo id qui', 'Qui aut exercitation', 'Voluptatem itaque vo', 'vejep@mailinator.com', 'Iure anim doloribus ', 'Karleigh Salazar', 'Deborah Harding', 'Chava Santos', 'Deceased', 'Est exercitation sit', 'Minus nobis culpa c', 'Minima facere lorem ', 'Clare Manning', 'Sylvia Crawford', 'Sade Hendricks', 'Deceased', 'Ut nulla minima dolo', 'Exercitationem nihil', 'Laudantium aliqua ', 'Sit ex provident i', 'Soluta assumenda fac', 'Veniam vel illum e', 'Labore laudantium u', 'Private', 'Minim aut et veniam', 'Priority', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'CHED', 'decen@mailinator.com', '$2y$10$7U3HZQ.59eX2wTNKuYbgT.n5kL/b/jiIM6KVBhenN0jfneCB9923O', 'New', 'Pending', '2021-11-18'),
(6, 'Burke Molina', 'Quon Espinoza', 'Sonya Tyler', 'Sr.', '2021-11-18', 'Female', 'Married', 'Impedit et eos par', 'Doloremque consectet', 'In quas quam maxime ', 'Illo labore ad quo q', 'Ullam explicabo Id ', 'Private', 'Sed officia quos acc', 'Ea dolore fugit aut', 'Voluptatum nulla qui', 'coqetymula@mailinator.com', 'Pariatur Minim dist', 'Driscoll Villarreal', 'Inga Curry', 'Taylor Lynch', 'Deceased', 'Tenetur recusandae ', 'Excepteur dolorem ac', 'Velit aut corporis v', 'Hasad Gilbert', 'Sara Norton', 'Kiona Elliott', 'Living', 'Illo doloremque ut a', 'Rem non ut quisquam ', 'Esse laborum do ut ', 'Nihil sunt voluptas', 'Nulla consequuntur e', 'Ut occaecat voluptat', 'Aliquid minus dolor ', 'Public', 'Qui ad aliqua Lauda', 'Not Priority', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'CHED', 'kyfebo@mailinator.com', '$2y$10$3BEEYrhamKbDkiakcg9NVOCj71gUJgS1pMiqgX1HqgyVISRIBx.Um', 'New', 'Pending', '2021-11-18');

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
  `sncourse` varchar(100) DEFAULT NULL,
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
(15, 'Jena Henderson', 'Mariam Mercado', 'Christen Salas', 'Jr.', '2021-12-01', 'Iusto eu incididunt', 'Et iusto est id dolo', 'magu@mailinator.com', 'Inventore sit soluta', 'Male', 'Voluptates rerum fug', 'Explicabo ', 'Bryar Sullivan', 'Zane Lloyd', 'Jessamine Watson', 'N/A', 'Voluptatem dolor asp', 'Officiis maiores sin', 'Aut eaque nisi duis', 'Cruz and Heath Associates', 'Walter Mccoy', 'Beck Oconnor', 'Basia Stanton', 'Sr.', 'Possimus obcaecati', 'Commodi aliquid eaqu', 'Odio sunt quibusdam', 'Wilkerson and Mcleod Co', 'Felicia Ramsey', 'Ruth Mann', 'Acton Daniel', 'Jr.', 'Possimus quod volup', 'Eiusmod beatae dicta', 'Dolores deserunt vol', 'Jimenez and Vazquez Trading', '739', 'Voluptate dicta occa', 'Delectus quis et di', 'Sed expedita dolorem', 'Magna sed quod illo', 'Minim eaque cupidata', 'Aut pariatur Consec', 'Tempor quo eligendi', '2021-12-02', 'Received', '2021-12-03', 'Not-Received', '2021-12-04', 'Not-Received', '2021-12-05', 'Received', '2021-12-06', 'Received', 'Non-Academic', 'wawi@mailinator.com', '$2y$10$lR2cDowuyEfFSwoQIt/FOuFkJ9OooGNKdrsFEKxBGTC', 'New', 'Pending', '2021-12-07'),
(16, 'Katell Kemp', 'Ocean Massey', 'Jacob Knox', 'N/A', '2021-12-01', 'Quae voluptatibus ir', 'Est est pariatur It', 'dobupose@mailinator.com', 'Qui nostrum amet au', 'Female', 'Dolorem possimus qu', 'Incidunt r', 'Honorato Blackwell', 'Camden Hughes', 'Yuri Sweeney', 'N/A', 'In illum cillum fug', 'Fugiat dolores aut e', 'Ut deserunt rem aut', 'Brennan and Richards Traders', 'Ruth Slater', 'Gareth Rodriguez', 'Aimee Wood', 'Sr.', 'Omnis enim laborum', 'Dolorem ea labore ma', 'Fugiat qui dolor vo', 'Reyes Ward Associates', 'Ryder Mathis', 'Bo Tanner', 'Dominic Marquez', 'Jr.', 'Quia nesciunt dolor', 'Qui mollit pariatur', 'Accusamus quasi labo', 'Buchanan and Moody Traders', '686', 'Accusamus molestias', 'Nihil praesentium ra', 'Fuga Provident adi', 'Amet alias est omni', 'Incidunt similique', 'Culpa unde eiusmod', 'Quia qui aut nisi ma', '2021-12-02', 'Not-Received', '2021-12-03', 'Received', '2021-12-04', 'Received', '2021-12-05', 'Received', '', 'Received', 'Non-Academic', 'mydu@mailinator.com', '$2y$10$5TiibImwEB1ZkRKg0lHYMuERIYCUmYAWBQBiluUpKtI', 'New', 'Pending', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_secretary`
--

CREATE TABLE `tbl_secretary` (
  `doctor_id` int(11) NOT NULL,
  `doctor_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_profile_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `doctor_date_of_birth` date NOT NULL,
  `doctor_degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_expert_in` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_secretary`
--

INSERT INTO `tbl_secretary` (`doctor_id`, `doctor_email_address`, `doctor_password`, `doctor_name`, `doctor_profile_image`, `doctor_phone_no`, `doctor_address`, `doctor_date_of_birth`, `doctor_degree`, `doctor_expert_in`, `doctor_status`, `doctor_added_on`) VALUES
(1, 'peterparker@gmail.com', 'password', 'Dr. Peter Parker', '../images/10872.jpg', '7539518520', '102, Sky View, NYC', '1985-10-29', 'MBBS MS', 'Sergen', 'Active', '2021-02-15 17:04:59'),
(2, 'adambrodly@gmail.com', 'password', 'Dr. Adam Broudly', '../images/21336.jpg', '753852963', '105, Fort, NYC', '1982-08-10', 'MBBS MD(Cardiac)', 'Cardiologist', 'Active', '2021-02-18 15:00:32'),
(3, 'sophia.parker@gmail.com', 'password', 'Dr. Sophia Parker', '../images/13838.jpg', '7417417410', '50, Best street CA', '1989-04-03', 'MBBS', 'Gynacologist', 'Active', '2021-02-18 15:05:02'),
(4, 'williampeterson@gmail.com', 'password', 'Dr. William Peterson', '../images/9498.jpg', '8523698520', '32, Green City, NYC', '1984-06-11', 'MBBS MD', 'Nurologist', 'Active', '2021-02-18 15:08:24'),
(5, 'emmalarsdattor@gmail.com', 'password', 'Dr. Emma Larsdattor', '../images/1613641523.png', '9635852025', '25, Silver Arch', '1988-03-03', 'MBBS MD', 'General Physian', 'Active', '2021-02-18 15:15:23'),
(6, 'manuel.armstrong@gmail.com', 'password', 'Dr. Manuel Armstrong', '../images/1614081376.png', '8523697410', '2378 Fire Access Road Asheboro, NC 27203', '1989-03-01', 'MBBS MD (Medicine)', 'General Physician', 'Active', '2021-02-23 17:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `patient_id` int(11) NOT NULL,
  `patient_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_date_of_birth` date NOT NULL,
  `patient_gender` enum('Male','Female','Other') COLLATE utf8_unicode_ci NOT NULL,
  `patient_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_maritial_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_added_on` datetime NOT NULL,
  `patient_verification_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_verify` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`patient_id`, `patient_email_address`, `patient_password`, `patient_first_name`, `patient_last_name`, `patient_date_of_birth`, `patient_gender`, `patient_address`, `patient_phone_no`, `patient_maritial_status`, `patient_added_on`, `patient_verification_code`, `email_verify`) VALUES
(3, 'jacobmartin@gmail.com', 'password', 'Jacob', 'Martin', '2021-02-26', 'Male', 'Green view, 1025, NYC', '85745635210', 'Single', '2021-02-18 16:34:55', 'b1f3f8409f7687072adb1f1b7c22d4b0', 'Yes'),
(4, 'oliviabaker@gmail.com', 'password', 'Olivia', 'Baker', '2001-04-05', 'Female', 'Diamond street, 115, NYC', '7539518520', 'Married', '2021-02-19 18:28:23', '8902e16ef62a556a8e271c9930068fea', 'Yes'),
(5, 'web-tutorial@programmer.net', 'password', 'Amber', 'Anderson', '1995-07-25', 'Female', '2083 Cameron Road Buffalo, NY 14202', '75394511442', 'Single', '2021-02-23 17:50:06', '1909d59e254ab7e433d92f014d82ba3d', 'Yes');

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
  `suscp` varchar(100) DEFAULT NULL,
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
(8, 'Qui pariatur Ea inc', 'Stephen Franks', 'Isadora Bond', 'Jordan Gates', 'Jr.', 'Female', '2021-11-18', 'Consequat Ex qui sa', 'Voluptate accusantiu', 'Facere voluptas sit', 'Sunt aut qui qui ut ', 'Et et consequuntur p', 'pyvyh@mailinator.com', 'Brendan Murphy', 'Edan Heath', 'Quinn Burch', 'Sr.', 'Gwendolyn Montgomery', 'Kirby Booth', 'Blaine Morin', 'Sr.', 'Cupidatat numquam Na', 'Sunt qui sint asper', 'Quia quibusdam et ea', '2021-11-18', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'raxo@mailinator.com', '$2y$10$uqhpvDPd1zHCJWAad40se.qQ86UmuRZeqouKtWrhr5/ANHNNjmy1m', 'New', 'Pending', '2021-11-18'),
(9, 'Incididunt deserunt ', 'Vanna Goodman', 'Brendan Nguyen', 'Ferris Torres', 'Sr.', 'Male.', '2021-11-18', 'Aute iure irure omni', 'Et at magnam cupidit', 'Laborum quam et quis', 'Repudiandae aperiam ', 'Reprehenderit aute n', 'mecirebe@mailinator.', 'Jermaine Stewart', 'Hilel Randolph', 'Marny Jackson', 'Jr.', 'Vladimir Nguyen', 'Bernard Frazier', 'Ethan Lopez', 'Jr.', 'Et qui deserunt qui ', 'Ex facere laboriosam', 'Minim recusandae Es', '2021-11-18', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'ruvehy@mailinator.com', '$2y$10$VUFnvRnP2n8SmVHnC5V06.UcUa5tpsW5sXvjIvQRbxs3xdetd725O', 'New', 'Pending', '2021-11-18'),
(10, 'Quo itaque sapiente ', 'Alice Guerrero', 'Dane Dixon', 'Jasper Lang', 'Jr.', 'Male.', '2021-11-18', 'Sit vero dolor quo ', 'Quia minima cum duis', 'Magna veniam qui es', 'Et veniam praesenti', 'Non sit do excepteu', 'jyba@mailinator.com', 'Lysandra Sheppard', 'Thane Scott', 'Whitney Fletcher', 'N/A', 'Erich Odonnell', 'Micah Hamilton', 'Isabelle Wyatt', 'Jr.', 'Dolorem aut ad nesci', 'Laboris nostrum et a', 'Quo quis libero libe', '2021-11-18', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'myxigoxig@mailinator.com', '$2y$10$cp9la5MwZo5Rrqsy2rBHJektmnwTxdFklFjN1I8MN4WPL156rmiIe', 'New', 'Pending', '2021-11-18'),
(11, 'Et sunt recusandae', 'Kaye Holman', 'Eleanor Sims', 'Lee Graves', 'Sr.', 'Female', '2021-11-18', 'Ea sed Nam omnis mol', 'Soluta quos id cupi', 'Voluptatum ea atque ', 'Anim quasi fuga Ani', 'Ipsa irure sapiente', 'jele@mailinator.com', 'Hadassah Wyatt', 'Karen Martinez', 'Evan Delaney', 'Jr.', 'Inga Logan', 'Phillip Santiago', 'Kelsey Clemons', 'Sr.', 'Ipsam enim quod dese', 'Quasi quasi nesciunt', 'Sed consequuntur ut ', '2021-11-18', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'Unifast', 'jequko@mailinator.com', '$2y$10$13pzmwsgOgGSTJFFwJvrU.47nkWofWKzYriCAQ4WSDJD2xcub6oYW', 'New', 'Pending', '2021-11-18');

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
-- Indexes for table `tbl_secretary`
--
ALTER TABLE `tbl_secretary`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`patient_id`);

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
  MODIFY `sacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ched`
--
ALTER TABLE `tbl_ched`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_nonacad`
--
ALTER TABLE `tbl_nonacad`
  MODIFY `snacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_secretary`
--
ALTER TABLE `tbl_secretary`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_unifast`
--
ALTER TABLE `tbl_unifast`
  MODIFY `sunifast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
