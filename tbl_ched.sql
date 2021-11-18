-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 11:20 AM
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
(4, 'Nichole Duran', 'Lacey Valencia', 'Hanae Frazier', 'N/A', '2021-11-17', 'Male', 'Married', 'Quia dolores et moll', 'Perferendis sunt se', 'Nisi doloremque cum ', 'Ullamco sit dolorem ', 'Id occaecat vitae qu', 'Private', 'Quia nisi ratione au', 'Est molestias excep', 'Dicta voluptatum at ', 'hixu@mailinator.com', 'Labore est sunt aute', 'Adena Rose', 'Dara Olsen', 'Connor Leon', 'Deceased', 'Aute eum dolorem des', 'Reiciendis enim sit', 'Quas maxime aperiam ', 'Beatrice Schwartz', 'Joan Russell', 'Rylee Puckett', 'Living', 'Voluptas eaque commo', 'Cum qui sed est lab', 'Sunt sit magna deser', 'Eiusmod sit ab sequi', 'Reiciendis ad aute r', 'Qui dolores ea id co', 'Vero sunt aperiam au', 'Public', 'Iste tempor quibusda', 'Not Priority', NULL, 'Not-Received', NULL, 'Not-Received', NULL, 'Not-Received', 'CHED', 'rasyg@mailinator.com', '$2y$10$b4gXusHpaSDUPj6p3AXVpeIQQ4rDpKGZDqy0tFfW9OzuZ3MXd1Q0a', 'New', 'Pending', '2021-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ched`
--
ALTER TABLE `tbl_ched`
  ADD PRIMARY KEY (`sched_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ched`
--
ALTER TABLE `tbl_ched`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
