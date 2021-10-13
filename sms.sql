-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 04:36 AM
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
  `sfname` varchar(50) NOT NULL,
  `smname` varchar(50) NOT NULL,
  `slname` varchar(50) NOT NULL,
  `sdbirth` date NOT NULL,
  `sctship` varchar(50) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `scontact` varchar(50) NOT NULL,
  `sgender` varchar(50) NOT NULL,
  `gfname` varchar(50) NOT NULL,
  `gmname` varchar(50) NOT NULL,
  `glname` varchar(50) NOT NULL,
  `gaddress` varchar(50) NOT NULL,
  `gcontact` varchar(50) NOT NULL,
  `goccu` varchar(50) NOT NULL,
  `gcompany` varchar(50) NOT NULL,
  `ffname` varchar(50) NOT NULL,
  `fmname` varchar(50) NOT NULL,
  `flname` varchar(50) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fcontact` varchar(50) NOT NULL,
  `foccu` varchar(50) NOT NULL,
  `fcompany` varchar(50) NOT NULL,
  `mfname` varchar(50) NOT NULL,
  `mmname` varchar(50) NOT NULL,
  `mlname` varchar(50) NOT NULL,
  `maddress` varchar(100) NOT NULL,
  `mcontact` varchar(50) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `mcompany` varchar(50) NOT NULL,
  `spcyincome` varchar(50) NOT NULL,
  `sagwa` varchar(50) NOT NULL,
  `sraward` varchar(50) NOT NULL,
  `sdawardrceive` date DEFAULT NULL,
  `sadsprc` date DEFAULT NULL,
  `sadspgm` date DEFAULT NULL,
  `sadspcr` date DEFAULT NULL,
  `sacapstype` varchar(30) NOT NULL,
  `saemail` varchar(50) NOT NULL,
  `sapass` varchar(50) NOT NULL,
  `sascholarstat` varchar(30) NOT NULL,
  `sadapply` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_acad`
--

INSERT INTO `tbl_acad` (`sacad_id`, `sfname`, `smname`, `slname`, `sdbirth`, `sctship`, `saddress`, `semail`, `scontact`, `sgender`, `gfname`, `gmname`, `glname`, `gaddress`, `gcontact`, `goccu`, `gcompany`, `ffname`, `fmname`, `flname`, `faddress`, `fcontact`, `foccu`, `fcompany`, `mfname`, `mmname`, `mlname`, `maddress`, `mcontact`, `moccu`, `mcompany`, `spcyincome`, `sagwa`, `sraward`, `sdawardrceive`, `sadsprc`, `sadspgm`, `sadspcr`, `sacapstype`, `saemail`, `sapass`, `sascholarstat`, `sadapply`) VALUES
(2, 'John', 'Aiko Wright', 'Collins', '2021-10-13', 'Corporis sit numquam', 'Provident temporibu', 'kuhyjer@mailinator.com', 'Sed perferendis debi', 'Female', 'Nyssa Johns', 'Quintessa Cline', 'Rina Jackson', 'Ad in quis proident', 'Dolores assumenda ne', 'Sit quam eaque volu', 'Rollins and Cole Inc', 'Drake Whitney', 'Noelani Ramsey', 'Patrick Hester', 'Dolor et et et anim', 'Nulla et mollitia au', 'Optio nostrud aut a', 'Burt and Coffey Trading', 'Craig Mcintyre', 'Illana Simmons', 'Yeo Owen', 'Pariatur Fugit tem', 'Nisi architecto eos', 'Et in doloribus cons', 'Gibson Farley Traders', '31', 'Voluptatum voluptas', 'Mollitia autem perfe', '2021-10-06', '2021-10-21', '2021-10-29', '2021-10-19', 'New', 'kits@mailinator.com', '$2y$10$PqVxVPjbPmlX1BJCwTgDt.vQ6qFQE7V/3ubdh6B.S2d', 'Approved', '2021-10-07 14:06:33'),
(3, 'Angel', 'Aiko Wright', 'Singkol', '2021-10-13', 'Corporis sit numquam', 'Provident temporibu', 'kuhyjer@mailinator.com', 'Sed perferendis debi', 'Female', 'Nyssa Johns', 'Quintessa Cline', 'Rina Jackson', 'Ad in quis proident', 'Dolores assumenda ne', 'Sit quam eaque volu', 'Rollins and Cole Inc', 'Drake Whitney', 'Noelani Ramsey', 'Patrick Hester', 'Dolor et et et anim', 'Nulla et mollitia au', 'Optio nostrud aut a', 'Burt and Coffey Trading', 'Craig Mcintyre', 'Illana Simmons', 'Yeo Owen', 'Pariatur Fugit tem', 'Nisi architecto eos', 'Et in doloribus cons', 'Gibson Farley Traders', '31', 'Voluptatum voluptas', 'Mollitia autem perfe', '2021-10-06', '2021-10-21', '2021-10-29', '2021-10-19', 'New', 'kitys@mailinar.com', '$2y$10$e3PKL5uuVD6vNnfuDV/xlevR6apexAm37izMrMVTfx6', 'Approved', '2021-10-07 14:18:06'),
(6, 'Sigourney Moss', 'Madison Cleveland', 'Jenette Murray', '2021-10-19', 'Laboriosam consequa', 'Perferendis suscipit', 'monixyn@mailinator.com', 'Nisi dolor ullam est', 'Male', 'Leigh Wall', 'Odysseus Cantu', 'Abra Spencer', 'Veniam adipisci acc', 'Ratione aliquip quis', 'In laborum dolore di', 'Peck Henderson LLC', 'Martha Stevenson', 'Alice Bradford', 'Hedda Hutchinson', 'Et nulla ullamco nat', 'Eiusmod qui cillum p', 'Qui in aliquip ea ve', 'Sosa and Ryan Associates', 'Walter Wagner', 'Berk Contreras', 'Quynn Frye', 'Nulla dolor voluptat', 'Alias voluptatem iur', 'Ut ipsum in ex ipsam', 'Holden and Carpenter Trading', '304', 'Laborum Dolores des', 'Sit possimus repud', '2021-10-07', '2021-10-28', '2021-10-25', '2021-10-12', 'Old Scholar', 'qokacat@mailinator.com', '$2y$10$fYE6RyKTtQ5D166HRCMCbOEm4H44LbEFRS4RQUv7IHO', 'Approved', '2021-10-09 12:42:37'),
(7, 'Steven Myers', 'Demetrius Burgess', 'Cullen Salinas', '2021-10-13', 'Sunt quae reiciendis', 'Sed aut laborum Rer', 'xuboxe@mailinator.com', 'Dolor dolorum minim', 'Female', 'Rhoda Hayden', 'Teegan Bailey', 'Jakeem Nguyen', 'Provident iste nihi', 'Quis eius eum laboru', 'Iusto aut et eius et', 'Faulkner and Day Co', 'Walker Wise', 'Christian Vincent', 'Allistair Patrick', 'Et voluptatum possim', 'Necessitatibus ab ut', 'Sint consequatur ven', 'Dominguez and Hernandez LLC', 'Eliana Figueroa', 'Oscar Burgess', 'Yvonne Mcgowan', 'Aut ut temporibus bl', 'Vel ut rerum molesti', 'Et cupidatat laborum', 'Greene and Barnett Co', '67', 'Doloribus est sint q', 'Natus quia sed offic', '2021-10-20', '2021-10-21', '2021-10-26', '2021-10-18', 'New', 'cufap@mailinator.com', '$2y$10$bOGuF0/wJYPJUiyNtRQnvO3m6pEMnColmUmZbsUkTO0', 'Approved', '2021-10-09 14:35:43'),
(9, 'Maya Foreman', 'Germane Buckley', 'Ifeoma Robbins', '2021-10-13', 'Velit voluptate inv', 'Eum expedita natus e', 'xenuvory@mailinator.com', 'Modi veniam reprehe', 'Female', 'Germane Stout', 'Stewart Hendricks', 'Rhona Jenkins', 'In tempore maiores', 'Nostrum dicta enim c', 'Ea dicta dolorem tem', 'Bishop Snow Traders', 'Dacey Dunn', 'Kirestin Raymond', 'Darryl Mitchell', 'Est laborum numquam', 'Ut ut rem voluptatem', 'Magnam pariatur Sap', 'Perkins Bell Associates', 'Timothy Castro', 'Kenyon Mcfarland', 'Brendan Middleton', 'Ad accusantium vel e', 'Sequi ex et lorem do', 'Nulla at nostrum sin', 'Warner Potter LLC', '587', 'Commodo nihil lorem', 'Iste ad excepteur qu', '2021-10-27', '2021-10-12', '2021-10-20', '2021-10-17', 'New', 'sefale@mailinator.com', '$2y$10$TUHbwOx/64XMWAHh3/xn9.cl20nXRD/sPG4lzO7O5Aa', 'Approved', '2021-10-09 14:50:45'),
(13, 'Benedict Walls', 'Prescott Blackburn', 'Rachel Pate', '2021-10-19', 'Itaque autem quasi v', 'Atque adipisci qui e', 'bodycyfici@mailinator.com', 'Labore sed alias cup', 'Female', 'Taylor Franco', 'Keaton Evans', 'Emmanuel Weaver', 'Natus excepteur cons', 'Dolore facere est u', 'Adipisicing a aut qu', 'Kerr and Jarvis Trading', 'Scarlett Ellison', 'Indigo Oneill', 'Noah Hopper', 'In non ad in enim qu', 'Architecto aperiam o', 'Mollit reprehenderit', 'Vaughn Daniels Associates', 'Ebony Albert', 'Cullen Ramirez', 'Rajah Roach', 'Corporis porro minim', 'In nihil occaecat es', 'Minim velit excepte', 'Tyler Stanton Inc', '179', 'Minima sit consectet', 'Consectetur a enim n', '2021-10-14', '2021-10-20', '2021-10-28', '2021-11-22', 'New', 'pymenocune@mailinator.com', '$2y$10$jnivMCQJGogYdqsHBstPJuICnOWEvpEAe02U6y2YzIP', 'Pending', '2021-10-09 15:10:57'),
(14, 'Dana Watson', 'Isaiah Gould', 'Orla Stein', '2021-10-14', 'Velit anim dolor ut', 'Vero ut repellendus', 'nemenar@mailinator.com', 'Qui aut vel voluptat', 'Male', 'Elvis Tran', 'Freya Robertson', 'Nola Webb', 'Accusantium aut repe', 'Esse deserunt et su', 'Officiis tempor esse', 'Mendez Roach LLC', 'Myra Bowers', 'Asher Gardner', 'Candace Carroll', 'Unde omnis aute ad u', 'Nostrud et eum sed a', 'Consequatur totam ap', 'Glass Huff Co', 'September Weiss', 'Martina Beard', 'Felix Kirby', 'Vel non iusto deseru', 'Dolore sint sit err', 'Eos eligendi possim', 'Mcfarland and Oconnor Associates', '908', 'Eaque expedita place', 'Recusandae Voluptat', '2021-10-14', '2021-10-29', '2021-10-27', '2021-10-13', 'New', 'qupu@mailinator.com', '$2y$10$d2ubnVkmkBpLldSBc8llJ.idvJIbzHBgBVZCWItT6Bl', 'Pending', '2021-10-12 18:55:41');

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
(1, 'admin@gmail.com', 'password', 'Administrator', 'St. Cecilia\'s College Cebu, Inc.', 'Natalio B. Bacalso S National Hwy, Minglanilla, Cebu', 'SCC-00002648', '../images/15001.png');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acad`
--
ALTER TABLE `tbl_acad`
  MODIFY `sacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
