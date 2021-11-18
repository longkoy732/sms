-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 03:14 PM
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
(13, 'Benedict Walls', 'Prescott Blackburn', 'Rachel Pate', '2021-10-19', 'Itaque autem quasi v', 'Atque adipisci qui e', 'bodycyfici@mailinator.com', 'Labore sed alias cup', 'Female', 'Taylor Franco', 'Keaton Evans', 'Emmanuel Weaver', 'Natus excepteur cons', 'Dolore facere est u', 'Adipisicing a aut qu', 'Kerr and Jarvis Trading', 'Scarlett Ellison', 'Indigo Oneill', 'Noah Hopper', 'In non ad in enim qu', 'Architecto aperiam o', 'Mollit reprehenderit', 'Vaughn Daniels Associates', 'Ebony Albert', 'Cullen Ramirez', 'Rajah Roach', 'Corporis porro minim', 'In nihil occaecat es', 'Minim velit excepte', 'Tyler Stanton Inc', '179', 'Minima sit consectet', 'Consectetur a enim n', '2021-10-14', '2021-10-20', '2021-10-28', '2021-11-22', 'New', 'pymenocune@mailinator.com', '$2y$10$jnivMCQJGogYdqsHBstPJuICnOWEvpEAe02U6y2YzIP', 'Approved', '2021-10-09 15:10:57'),
(14, 'Dana Watson', 'Isaiah Gould', 'Orla Stein', '2021-10-14', 'Velit anim dolor ut', 'Vero ut repellendus', 'nemenar@mailinator.com', 'Qui aut vel voluptat', 'Male', 'Elvis Tran', 'Freya Robertson', 'Nola Webb', 'Accusantium aut repe', 'Esse deserunt et su', 'Officiis tempor esse', 'Mendez Roach LLC', 'Myra Bowers', 'Asher Gardner', 'Candace Carroll', 'Unde omnis aute ad u', 'Nostrud et eum sed a', 'Consequatur totam ap', 'Glass Huff Co', 'September Weiss', 'Martina Beard', 'Felix Kirby', 'Vel non iusto deseru', 'Dolore sint sit err', 'Eos eligendi possim', 'Mcfarland and Oconnor Associates', '908', 'Eaque expedita place', 'Recusandae Voluptat', '2021-10-14', '2021-10-29', '2021-10-27', '2021-10-13', 'New', 'qupu@mailinator.com', '$2y$10$d2ubnVkmkBpLldSBc8llJ.idvJIbzHBgBVZCWItT6Bl', 'Rejected', '2021-10-12 18:55:41'),
(15, 'Eden Quinn', 'Amber Joyner', 'Idola English', '2021-10-12', 'Minim minima nihil c', 'Atque ipsa quis sed', 'pijarasuh@mailinator.com', 'Sunt praesentium sit', 'Female', 'Sonia Pollard', 'MacKenzie Carver', 'Cameran Suarez', 'Commodo earum provid', 'Inventore dolores ni', 'Deleniti Nam qui qui', 'Rhodes and Stewart Trading', 'Shelly Rojas', 'Zia Rutledge', 'Vivien Chase', 'Id sit doloribus re', 'Aut aut expedita des', 'Officiis commodi con', 'Bryant and Riley Traders', 'Ifeoma Andrews', 'Bradley Graham', 'Colton Durham', 'Asperiores iusto vol', 'Quam deleniti offici', 'Iusto est ex illo of', 'Carney and Bishop Trading', '30', 'Corporis et qui quib', 'Optio suscipit aliq', '2021-10-08', '2021-10-27', '2021-10-18', '2021-10-25', 'New', 'komavepyk@mailinator.com', '$2y$10$kJriO6uvY1IkZsJO7v5tu.HR3GuIjTADoLMweIckzr2', 'Approved', '2021-10-13 13:21:04'),
(16, 'Echo Buchanan', 'Nell Peterson', 'Michelle Whitaker', '2021-10-07', 'Dolores aut officiis', 'Nisi qui do sit acc', 'rutuzyz@mailinator.com', 'Amet temporibus ut', 'Male', 'Raja Farrell', 'Conan Boyer', 'Nayda Silva', 'Eos illo veritatis e', 'Voluptatem nihil sus', 'Voluptate rem eligen', 'Conner and Rosales Traders', 'September Russell', 'Judith Decker', 'Deirdre Mckee', 'Voluptas officia ver', 'Culpa qui explicabo', 'Voluptas quia recusa', 'Thompson Harmon Associates', 'Britanni Gentry', 'Wanda Hill', 'Pamela Brady', 'Dolore omnis reprehe', 'Tempor sapiente obca', 'Veritatis aute fugit', 'Banks Potter Associates', '114', 'Excepturi ab non dic', 'Aut nisi ut eveniet', '2021-10-23', '2021-10-29', '2021-10-27', '2021-10-25', 'New', 'ryruzecy@mailinator.com', '$2y$10$1aEsa98I7APQ6maCZQouIOXSGBpmi8NnOwo28PsPFQB', 'Approved', '2021-10-13 13:49:02'),
(17, 'Kirby Cotton', 'Judith Morgan', 'Harlan Osborne', '2021-10-12', 'Cillum dolores aliqu', 'Labore adipisci volu', 'texida@mailinator.com', 'Consequuntur perspic', 'Male', 'Rinah Rivers', 'Quamar Mejia', 'Azalia Joseph', 'Et dolores nisi quia', 'In quidem non unde a', 'Dolores quia vel per', 'Aguilar and Byrd Co', 'Jada Stein', 'Herman Dennis', 'Hamish Cooley', 'Dolore modi eos repu', 'Hic rerum sed dolor', 'Sapiente consequat', 'Horton and Horne Plc', 'Dean Little', 'Shoshana Jacobson', 'Amir Young', 'Sapiente eaque aperi', 'Velit dolorem facere', 'Minus ratione quidem', 'Woods and Nichols Plc', '488', 'Rerum aliquid cillum', 'Id odio suscipit nos', '2021-10-22', '2021-10-21', '2021-10-19', '2021-10-22', 'New', 'geqom@mailinator.com', '$2y$10$YS/oeE2X1iUqrAh6CFVikOOnp4J3uSAvAcwtiCzev4f', 'Approved', '2021-10-13 13:49:30'),
(18, 'Reese Atkinson', 'Victor Gallegos', 'Angela Dickson', '2021-10-14', 'Beatae iure porro de', 'Voluptatum cumque it', 'janu@mailinator.com', 'Dolores ullam labore', 'Male', 'Nasim Gomez', 'Chancellor Rivera', 'Gregory Shepherd', 'Sed eius qui sapient', 'Omnis eiusmod sed et', 'Nihil autem ut eum q', 'Daniels and Rutledge Associates', 'Yuri Mccall', 'Rowan Lindsey', 'Hamish Vance', 'Dolor cillum ullamco', 'In enim illo consect', 'Est blanditiis hic s', 'Willis and Pacheco Plc', 'Cyrus Stanton', 'Cheyenne James', 'Kylynn Moore', 'Dolores porro ullamc', 'Libero et voluptatem', 'Ducimus quod repell', 'Key and Cotton Plc', '680', 'Voluptate veniam si', 'Eiusmod libero verit', '2021-10-22', '2021-10-21', '2021-10-15', '2021-10-26', 'New', 'rurew@mailinator.com', '$2y$10$co4Wbn9ZDEVrZyxVdZn.8.TENZjzgq8pKxL.vLbgHjf', 'Approved', '2021-10-13 13:50:01'),
(19, 'Tana Howe', 'Curran Pierce', 'Carl Moses', '2021-10-26', 'Animi quam nulla ma', 'Do deserunt assumend', 'ludegeha@mailinator.com', 'Dolore eligendi expl', 'Female', 'Aladdin Wynn', 'Nehru Warner', 'Wendy Kerr', 'Eveniet et dicta la', 'Dolorem distinctio', 'Do quis quo adipisci', 'Rutledge and Meyer Inc', 'Kenneth Reynolds', 'Hedley Dean', 'Branden Serrano', 'Ipsam asperiores vol', 'Eaque voluptatum sit', 'Pariatur Dolore do', 'Ryan and Dale Associates', 'Adria Mitchell', 'Blossom Goodwin', 'Kirby Jacobson', 'Laborum et ea sed co', 'Et dolor eveniet co', 'Vel unde temporibus', 'Gilbert and Kline LLC', '960', 'Iure non nemo nihil', 'Rerum doloribus repr', '2021-10-15', '2021-10-20', '2021-10-21', '2021-10-15', 'New', 'rolujar@mailinator.com', '$2y$10$hFdqKFsG5M3wBwqcflJGJelnWw9KOY80zSZFaOKtybH', 'Approved', '2021-10-13 13:50:20'),
(20, 'Audrey Hendricks', 'Kathleen Faulkner', 'Sandra Hyde', '2021-10-21', 'Quae inventore ad cu', 'Aliqua Porro ipsum', 'bodo@mailinator.com', 'Dolorem et vero iust', 'Female', 'Shellie Mitchell', 'Cameron Carney', 'Sonya Whitaker', 'Consequatur exceptur', 'Odit adipisicing et', 'Excepteur nostrum es', 'Navarro Lawrence Co', 'Inez Holt', 'Pascale Chase', 'Lila Mcdaniel', 'Est anim totam vitae', 'Reprehenderit ea eum', 'Aut nesciunt dolor', 'Dickson and Clark Trading', 'Acton Mathews', 'Wylie Schultz', 'Aladdin Klein', 'Velit sed quis non s', 'Quaerat atque omnis', 'Cumque aut nulla et', 'Rios Burt Associates', '97', 'Et eos cupiditate ip', 'Deleniti Nam dolorum', '2021-10-14', '2021-10-26', '2021-10-28', '2021-10-25', 'New', 'kikuti@mailinator.com', '$2y$10$tDwWbkriJBQOU9j6JDTOv.rlPh7B5aSzqDO3sdxSb7c', 'Approved', '2021-10-13 14:18:23'),
(21, 'Ingrid Shaffer', 'Alexander Norris', 'Kuame Slater', '2021-10-22', 'Dicta totam aperiam', 'Earum exercitationem', 'miref@mailinator.com', 'Magni ex nostrud dis', 'Female', 'Eagan Mann', 'Jorden Sheppard', 'Lila Delacruz', 'Eu adipisicing omnis', 'Cillum adipisicing u', 'Nulla et commodo ame', 'Terrell and Leon Trading', 'Solomon Hall', 'Luke Craig', 'Geraldine Hamilton', 'Quia nemo magni haru', 'Voluptas irure Nam a', 'In omnis officia eum', 'Thomas Lewis Co', 'Len Wise', 'Vernon Matthews', 'Burton Ferguson', 'Ullam et qui tempore', 'Debitis in do dolore', 'Et ad in omnis elige', 'Rosario Case Co', '932', 'Velit itaque tempor', 'Velit Nam cupidatat', '2021-10-15', '2021-10-29', '2021-10-26', '2021-10-19', 'New', 'conad@mailinator.com', '$2y$10$Bp5dQrGceDOngjj2WMH1bOZGQQX.YsE5IZYWNq4mMYs', 'Rejected', '2021-10-13 14:20:11'),
(22, 'Alfreda Pena', 'Ulysses Miller', 'Nero Middleton', '2021-10-23', 'Est quod molestiae o', 'Accusantium consecte', 'woluxyk@mailinator.com', 'Ut sed qui aute omni', 'Female', 'Ria Mosley', 'Vera Ramirez', 'Hyacinth Dawson', 'Mollit earum incidun', 'Quos est maiores no', 'Voluptas sint iste d', 'Burt and Wall Inc', 'Hedwig Austin', 'Charissa Luna', 'Randall Nixon', 'Praesentium laborum', 'Aut anim qui fuga I', 'Sunt corporis sed ad', 'Beard Martin LLC', 'Riley Casey', 'Brock Conway', 'Nero Ramirez', 'Aut omnis ut anim es', 'Placeat sed incidid', 'Error aut et qui ad', 'Torres and Wood Co', '931', 'Non modi eveniet cu', 'Officia ducimus et', '2021-10-21', '2021-10-23', '2021-10-25', '2021-10-28', 'New', 'befu@mailinator.com', '$2y$10$Xl5T8ihDZNs5hJGaEF1y7O6LK7MPcHntNz7jx2O4u43', 'Rejected', '2021-10-13 14:20:33'),
(25, 'Tana Reyes', 'Sigourney Roy', 'Barrett Aguirre', '2021-10-22', 'Explicabo Molestias', 'Enim sequi porro dol', 'vixe@mailinator.com', 'Delectus vel volupt', 'Female', 'Quynn Clay', 'Maris Whitley', 'Scott Webb', 'Consequatur voluptat', 'Fugit aut qui qui d', 'Voluptas eu mollit c', 'Patrick Conway LLC', 'Petra Mercado', 'Quail Pittman', 'Heidi Booth', 'Molestiae hic dolore', 'Voluptatem Quam sun', 'Occaecat anim dolore', 'Mendoza Davidson Trading', 'Tatiana Freeman', 'Keelie Farrell', 'Tamara Bradley', 'Consectetur reprehen', 'Soluta qui eum culpa', 'Ab totam anim elit', 'Wooten and Head Co', '80', 'Aliquip magna magna', 'Quidem blanditiis ne', '2021-10-15', '2021-10-26', '2021-10-21', '2021-10-22', 'New', 'dyqiwur@mailinator.com', '$2y$10$8ioqYEmWAdu9yfECuUJ48OrBN11d3jZEkqF6RB2Bk9z', 'Rejected', '2021-10-13 14:21:35'),
(26, 'Rafael Farley', 'Alec Dorsey', 'Geoffrey Larson', '2021-10-21', 'Et exercitation in l', 'Assumenda nulla ipsu', 'junogan@mailinator.com', 'Quae facilis quo et', 'Male', 'Linus Gates', 'Aquila Mitchell', 'Lars Adkins', 'Culpa maxime cupidit', 'Expedita eiusmod aut', 'Dolor necessitatibus', 'Farmer Winters Associates', 'Jolie Gilliam', 'Gwendolyn Albert', 'Lara Gillespie', 'Odio ex dolor volupt', 'Corrupti sunt quisq', 'Cupidatat magnam eos', 'Ingram Hardin Co', 'Madaline Vaughan', 'Giselle Harrison', 'Raphael Hayden', 'Eiusmod ut sint enim', 'Asperiores tempor mo', 'Similique sint eu do', 'Nelson Bass Plc', '648', 'Ut ipsum possimus', 'Sapiente officia rep', '2021-10-15', '2021-10-22', '2021-10-30', '2021-10-25', 'Old Scholar', 'haguhok@mailinator.com', '$2y$10$Sd3E3f8DvTpgBccV/4n6EO4tHB/1l1Gll.Qdbehi0jj', 'Rejected', '2021-10-13 14:21:57'),
(27, 'Carl Clay', 'Ariel Montoya', 'Zahir Parker', '2021-10-29', 'Quibusdam consequatu', 'Sapiente aut enim vo', 'wyxunuguho@mailinator.com', 'Incididunt eos sit', 'Male', 'Jaime Good', 'Avram Rice', 'Edward Hawkins', 'Itaque tempor dolore', 'Quam natus quidem id', 'Modi distinctio Adi', 'Lindsey and Cochran LLC', 'Regan Houston', 'Erica Flynn', 'Jenette Mccall', 'Corporis veritatis d', 'Repudiandae reprehen', 'Ex commodi aliquam q', 'Boyer and Guerrero Co', 'Hall Buckley', 'Hannah Keith', 'Mallory Calhoun', 'Minus ea nihil quam', 'Elit voluptate quid', 'Dignissimos minim et', 'Waller and Zamora LLC', '969', 'Nesciunt neque simi', 'Pariatur Aute proid', '2021-10-16', '2021-10-27', '2021-10-18', '2021-10-20', 'New', 'zuhuva@mailinator.com', '$2y$10$nmPzKuTtNfznGvWN3Q1RreY/zg1OdD3VMlfIWnpaE8.', 'Rejected', '2021-10-13 14:22:24'),
(28, 'Irma Brennan', 'Shafira Galloway', 'Deirdre Dejesus', '2021-10-22', 'Aut soluta rerum dol', 'Blanditiis tempora q', 'gicodaco@mailinator.com', 'Rerum sunt est aut', 'Female', 'Baxter Carroll', 'Nicole Montgomery', 'Hedy Sosa', 'Illum qui suscipit', 'Dicta est eos dolor', 'Ut sunt voluptatibus', 'Gates and Copeland Traders', 'Macy Williamson', 'Hedy Walton', 'Vladimir Warner', 'Adipisci eum rem off', 'Dignissimos atque au', 'Aut iure doloribus c', 'Higgins Sims Associates', 'Kevin Bradshaw', 'Giacomo Cohen', 'Demetria Farrell', 'Cumque nesciunt nul', 'Deserunt sit aliquam', 'Deserunt dicta aliqu', 'Mclaughlin Davis Associates', '525', 'Reprehenderit ut nec', 'Laboris beatae enim', '2021-10-15', '2021-10-26', '2021-10-30', '2021-10-25', 'New', 'socum@mailinator.com', '$2y$10$RgVRGpDyAhdKugslXjWNG./IhcC.iU9y4gN7hJ0Oi/h', 'Rejected', '2021-10-13 14:22:43'),
(29, 'Ramona Rodgers', 'Rigel Cannon', 'Tad Chaney', '2021-10-29', 'Quis qui nostrud quo', 'Iusto eiusmod deseru', 'qufez@mailinator.com', 'Sint quidem asperio', 'Male', 'Amy Shaw', 'Phyllis Rogers', 'Geoffrey Deleon', 'Ipsum nemo molestia', 'Cupiditate est corpo', 'Id ullam ut consequa', 'Short and Garrett Co', 'Daphne Hooper', 'Jolie Mcknight', 'Aristotle Rasmussen', 'Aute pariatur Verit', 'Vitae et eius ea ex', 'Fugiat nihil impedi', 'Strickland Walker LLC', 'Ingrid Powers', 'Uriel Flynn', 'Lilah Hodges', 'Quisquam dolore itaq', 'Harum distinctio Ma', 'A sunt velit est qu', 'Campbell and Mcintyre Co', '991', 'Molestiae ab sunt ve', 'Voluptates expedita', '2021-10-23', '2021-10-23', '2021-10-19', '2021-10-27', 'New', 'kyfigixov@mailinator.com', '$2y$10$2XxqnHc1bFCSrz5rcRQxzumDDHCLllItroYNZqLOsOl', 'Approved', '2021-10-13 14:24:11'),
(30, 'Caryn Duncan', 'Olympia Wall', 'Angelica Kirby', '2021-10-21', 'Aliquam dolor id re', 'Et praesentium est e', 'qawa@mailinator.com', 'Nulla Nam et in omni', 'Female', 'Kylie Marquez', 'Blake Morales', 'Ishmael Duran', 'Et adipisci ex aliqu', 'Accusantium laudanti', 'Qui adipisci non sed', 'Snider Mcdowell LLC', 'Cecilia Howard', 'Noel Rivas', 'Giselle Beard', 'Proident aut velit', 'Et cillum animi mol', 'Voluptates velit ne', 'Riggs and Greene Associates', 'Elliott Weiss', 'Zephr Hampton', 'Zachary Perry', 'Ut aute dolor aut ne', 'Laboriosam et nulla', 'Pariatur Delectus', 'Conner Yang Traders', '409', 'Deleniti sed excepte', 'Sed ad eos in volup', '2021-10-22', '2021-10-22', '2021-10-23', '2021-10-27', 'Old Scholar', 'vimytuju@mailinator.com', '$2y$10$CNJAyv55U8EQAHOmIBtua.yaN9uFsvrOWrrz1mt/AJl', 'Approved', '2021-10-13 14:24:28'),
(31, 'Hop Mccray', 'Fritz Rosa', 'Beverly Ortega', '2021-10-27', 'Assumenda ducimus n', 'Odio odio quisquam v', 'zafyso@mailinator.com', 'Maxime fugiat tempo', 'Female', 'Heidi Petersen', 'Robin Horton', 'Whitney Nash', 'Porro officia commod', 'Et qui eos cupidita', 'Officiis error est r', 'Moody Casey Trading', 'Xena Walton', 'Martina Rollins', 'Patricia Mccray', 'Qui quod adipisci do', 'Itaque maxime except', 'Tempor sint ipsum', 'Hart Mccarty Traders', 'Paki Boyle', 'Abdul Allen', 'Coby Stein', 'Laboris nemo et face', 'Ut iure sunt consequ', 'Facere ipsum dicta', 'Gillespie Sweet Co', '669', 'Sit aliqua Quis ear', 'Rerum veritatis quis', '2021-10-15', '2021-10-22', '2021-10-28', '2021-10-18', 'New', 'cegi@mailinator.com', '$2y$10$Y5LMWSbKRNgPkHxvcCeWbOal0CptU5vIsfvE2XBPfT3', 'Pending', '2021-10-13 14:39:42'),
(32, 'Ezekiel Mooney', 'Gay Cantrell', 'Beverly Morrison', '2021-10-20', 'Alias sed autem reic', 'Consectetur quia sa', 'gepym@mailinator.com', 'Amet accusantium ex', 'Female', 'Latifah Mcmillan', 'Ebony Chen', 'Scarlet Huber', 'Nihil dolorem illo r', 'Fugiat eum et nostru', 'Pariatur Amet moll', 'Murray Casey Inc', 'Jameson Nielsen', 'Wyoming Obrien', 'Leslie Johnson', 'Aut aliquam cumque s', 'Non minim enim asper', 'Molestias ea beatae', 'Rosa and Dorsey LLC', 'Denton Cleveland', 'Constance Hardin', 'Ivor Briggs', 'Nemo occaecat omnis', 'Suscipit reprehender', 'Ut tempora odio moll', 'Vance and Reyes Associates', '752', 'Dolor sed repellendu', 'Amet sunt nesciunt', '2021-10-14', '2021-10-23', '2021-10-14', '2021-10-21', 'New', 'timuryrun@mailinator.com', '$2y$10$fpzdDDGpI6tNU2cU.bumGuxhj7R0LmXCzMBvcIV4xRx', 'Pending', '2021-10-13 15:08:21'),
(33, 'Tyler Black', 'Paki Soto', 'Rama Lara', '2016-02-11', 'Magni soluta ipsum', 'Sunt amet error a p', 'vida@mailinator.com', 'Maiores deserunt vol', 'Male', 'Connor Serrano', 'Harrison Wise', 'Owen Bell', 'Explicabo Porro eve', 'Molestias tempor tem', 'Occaecat sunt mollit', 'Bowers Johnston LLC', 'Macy Rosario', 'Celeste Beard', 'Gail Harrell', 'Iusto veniam quos e', 'Quia ab assumenda un', 'Sit tempore atque d', 'Pitts Delgado Plc', 'Cassandra Bowers', 'Warren Osborne', 'Adria Phillips', 'Magna ducimus aliqu', 'Nostrum voluptatum u', 'Maxime enim eveniet', 'Sawyer and Roach Trading', '465', 'Aperiam suscipit ame', 'Laboriosam id ipsam', '2021-10-20', '2021-10-19', '2021-10-19', '2021-10-19', 'Old Scholar', 'nadybip@mailinator.com', '$2y$10$Z0E.Qju0m7ExGGSebTX6lefBLq/L6Gi8D6Qplvk8/An', 'Pending', '2021-10-13 15:15:45'),
(34, 'jhezer', 'arabic', 'jhonson', '2000-11-29', 'Filipino', 'langtad, city of naga cebu', 'jhonsonjhezer01@outlook.com', '09127564335', 'Male', 'Aladdin', 'Wilkinson', 'Jackson', 'city of naga, cebu', '09123456543', 'grandfather', 'none', 'Addison', 'Ramsey', 'Patrick', 'talisay city, cebu', '09453273533', 'none', 'none', 'Quentin', 'Quinn', 'Anderson', 'barili, cebu city', '09143647435', 'none', 'none', '10000-below', '89.5', 'best in attendance', '2015-03-31', '2015-04-01', '2015-04-01', '2015-04-01', 'Old Scholar', 'jhonsonjhezer01@outlook.com', '$2y$10$eRN3CD.WjfwHF8CVI9pAFeDHAm.gkPXPhSWMl19I7dE', 'Pending', '2021-10-13 15:33:11');

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
  MODIFY `sacad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
