-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 03:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_san_jose`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_card`
--

CREATE TABLE `news_card` (
  `card_id` int(11) NOT NULL,
  `card_title` varchar(255) NOT NULL,
  `card_desc` text NOT NULL,
  `card_content` text NOT NULL,
  `card_img` text NOT NULL,
  `card_author` varchar(255) NOT NULL,
  `card_date` date NOT NULL,
  `card_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_card`
--

INSERT INTO `news_card` (`card_id`, `card_title`, `card_desc`, `card_content`, `card_img`, `card_author`, `card_date`, `card_tag`) VALUES
(1, 'Unang balita', 'Description nang unang balita', '<p><i><strong>Teams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends. Teams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends.</strong></i></p>', 'valotourna.jfif', 'Admin', '2021-04-08', 'Games'),
(2, 'Pangalawang balita', 'Description nang pangalawang balita', '<blockquote><p>Teams from a<i>round the world will qualify into </i><a href=\"facebook.com\"><i>Masters Reykjavík</i></a><i> through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends. Teams from around the world will qualify into Masters Reykjavík through their regional St</i>age 2 Challengers events. <strong>Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends.</strong></p></blockquote><ul><li>asd</li><li>qweqwe</li></ul><p>&nbsp;</p><ol><li><i>asd</i></li><li><i>asd</i></li><li><i>asdasdadsad</i></li><li>&nbsp;</li><li><i>asd</i></li></ol><p>&nbsp;</p>', 'money ayuda.jpg', '', '2021-04-11', 'sample'),
(3, 'Pangatlong Balita', 'Description nang pangatlong balita', 'Teams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends.\r\n\r\nTeams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends.', 'laptop distribution.jpg', 'Admin', '2021-03-09', 'sample'),
(5, 'CK EDITOR', 'Eto yung ang eedit ng text content', '<ul><li>Hahahahah a</li><li>asdasd</li><li>asd</li><li>asd</li><li>asd</li><li>asd</li></ul><p>&nbsp;</p><p>&nbsp;</p><p><i><strong>Teams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends. Teams from around the world will qualify into Masters Reykjavík through their regional Stage 2 Challengers events. Competition at Masters will take place on offline game servers, creating virtually a lag free experience, similar to competitive League of Legends.</strong></i></p><p>&nbsp;</p>', '1st.jpg', '', '2021-04-08', 'ckeditor'),
(7, 'hahaha', 'hahaha', '<p>hahahaha</p>', 'news5.jpg', 'admin Last Name', '2021-04-11', 'hahah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`announcement_id`, `announcement_img`) VALUES
(2, 'news1.jpg'),
(3, 'news2.jpg'),
(4, 'news3.jpg'),
(5, 'news4.png'),
(6, 'news5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business`
--

CREATE TABLE `tbl_business` (
  `business_id` int(11) NOT NULL,
  `business_lname` varchar(255) NOT NULL,
  `business_fname` varchar(255) NOT NULL,
  `business_mname` varchar(255) NOT NULL,
  `business_suffix` varchar(255) NOT NULL,
  `business_owner_address` text NOT NULL,
  `business_name` text NOT NULL,
  `business_address` text NOT NULL,
  `business_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_business`
--

INSERT INTO `tbl_business` (`business_id`, `business_lname`, `business_fname`, `business_mname`, `business_suffix`, `business_owner_address`, `business_name`, `business_address`, `business_date`) VALUES
(1, 'ROMANTICO', 'ABBY GAYLE', 'QUINTO', '', 'KAHUNARI ST. SAN JOSE NAVOTAS CITY', 'AD ASTRA PRINTING ', '5 E NAVAL ST. SAN JOSE NAVOTAS CITY', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`carousel_id`, `carousel_img`) VALUES
(2, '1st.jpg'),
(3, '2nd.jpg'),
(6, 'coastal_clean.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clearance`
--

CREATE TABLE `tbl_clearance` (
  `clearance_id` int(11) NOT NULL,
  `clearance_lname` varchar(255) NOT NULL,
  `clearance_fname` varchar(255) NOT NULL,
  `clearance_mname` varchar(255) NOT NULL,
  `clearance_suffix` varchar(255) NOT NULL,
  `clearance_address` text NOT NULL,
  `clearance_purpose` varchar(255) NOT NULL,
  `clearance_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clearance`
--

INSERT INTO `tbl_clearance` (`clearance_id`, `clearance_lname`, `clearance_fname`, `clearance_mname`, `clearance_suffix`, `clearance_address`, `clearance_purpose`, `clearance_date`) VALUES
(1, 'RIVERA', 'CHARLES JASON', 'IRIOLA', '', '14 DAVID COMP. 379 GOV A PASCUAL ST', 'WORK', '2021-04-06'),
(2, 'SAMPLE', 'SAMPLE LANG', 'HEHE', '', 'ASDASD', 'PERSONAL', '2021-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_img` text NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `event_title`, `event_description`, `event_img`, `event_location`, `event_date`, `event_time`) VALUES
(1, 'Motor Race', 'Racing games are a video game genre in which the player participates in a racing competition with any type of land, water, air, or space vehicles. They may be based on anything from real-world racing leagues to fantastical settings. They are distributed a', 'race.jpg', 'Navotas City Hall', '2021-02-11', '11:05:37'),
(2, 'Sample lang muna', 'Barilan 2020', 'funrun.jpg', 'Samin lang', '2021-03-24', '08:07:00'),
(5, 'Valorant Online Tournament ', 'Phewphew bangbang', 'valotourna.jfif', 'Home', '2021-03-31', '00:00:00'),
(12, 'Free Swab Test', 'Sundot sundot', 'swab.jpg', 'Navotas Court', '2021-03-24', '00:12:00'),
(13, 'asdasd', 'asdasd', '2nd.jpg', 'asdasd', '0000-00-00', '11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fishfolk`
--

CREATE TABLE `tbl_fishfolk` (
  `fishfolk_id` int(11) NOT NULL,
  `fishfolk_lname` varchar(255) NOT NULL,
  `fishfolk_fname` varchar(255) NOT NULL,
  `fishfolk_mname` varchar(255) NOT NULL,
  `fishfolk_suffix` varchar(255) NOT NULL,
  `fishfolk_address` text NOT NULL,
  `fishfolk_class` varchar(255) NOT NULL,
  `fishfolk_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fishfolk`
--

INSERT INTO `tbl_fishfolk` (`fishfolk_id`, `fishfolk_lname`, `fishfolk_fname`, `fishfolk_mname`, `fishfolk_suffix`, `fishfolk_address`, `fishfolk_class`, `fishfolk_date`) VALUES
(1, 'RIVERA', 'CHARLES JASON', 'IRIOLA', 'Sr.', '14 DAVID COMP. 379 GOV A PASCUAL ST', '', '2021-04-06'),
(2, 'ASD', 'ASD', 'ASD', 'III', 'ASD', '', '2021-04-06'),
(3, 'ROMANTICO', 'ABBY GAYLE', 'QUINTO', 'IV', '14 DAVID COMP. 379 GOV A PASCUAL ST', 'Boat Owner', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indigency`
--

CREATE TABLE `tbl_indigency` (
  `indigency_id` int(11) NOT NULL,
  `indigency_lname` varchar(255) NOT NULL,
  `indigency_fname` varchar(255) NOT NULL,
  `indigency_mname` varchar(255) NOT NULL,
  `indigency_suffix` varchar(255) DEFAULT NULL,
  `indigency_address` text NOT NULL,
  `indigency_purpose` varchar(255) NOT NULL,
  `indigency_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_indigency`
--

INSERT INTO `tbl_indigency` (`indigency_id`, `indigency_lname`, `indigency_fname`, `indigency_mname`, `indigency_suffix`, `indigency_address`, `indigency_purpose`, `indigency_date`) VALUES
(1, 'rivera', 'charles jason', 'iriola', 'Jr.', '14 DAVID COMP. 379 GOV A PASCUAL ST', 'CHED shcolarchip', '2021-03-28'),
(2, 'SAMPLE LANG ', 'ad', 'asd', '', 'asd', 'asd', '2021-03-28'),
(3, 'SNOW', 'JOHN', 'RIVERA', '', 'EAST WEST ST. SAN JOSE', 'FOOD', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resident`
--

CREATE TABLE `tbl_resident` (
  `resident_id` int(11) NOT NULL,
  `resident_lname` varchar(255) NOT NULL,
  `resident_fname` varchar(255) NOT NULL,
  `resident_age` int(11) NOT NULL,
  `resident_gender` varchar(10) NOT NULL,
  `resident_status` varchar(255) NOT NULL,
  `resident_address` text NOT NULL,
  `resident_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resident`
--

INSERT INTO `tbl_resident` (`resident_id`, `resident_lname`, `resident_fname`, `resident_age`, `resident_gender`, `resident_status`, `resident_address`, `resident_contact`) VALUES
(5, 'Rivera', 'Charles Jason', 21, 'Male', 'Single', '14 DAVID COMP. 379 GOV A PASCUAL', '09754018144'),
(6, 'Romantico', 'Abby Gayle', 20, 'Female', 'Single', '14 DAVID COMP. 379 GOV A PASCUAL ST', '09751040103');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resolution`
--

CREATE TABLE `tbl_resolution` (
  `resolution_id` int(11) NOT NULL,
  `resolution_date` date NOT NULL,
  `resolution_title` varchar(255) NOT NULL,
  `resolution_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resolution`
--

INSERT INTO `tbl_resolution` (`resolution_id`, `resolution_date`, `resolution_title`, `resolution_file`) VALUES
(1, '2019-12-01', 'Pagpapatibay ng Annual Budget', '063-2019-12 Pagpapatibay ng Annual Budget.pdf'),
(2, '2019-12-01', 'Annual Investment Plan', '064-2019-12 Annual Investment Plan.pdf'),
(3, '2019-12-01', 'Community Development Plan', '065-2019-12 Community Development Plan.pdf'),
(4, '2019-12-01', 'Paglalaan ng pondo sa GAD', '066-2019-12 Paglalaan ng pondo sa GAD.pdf'),
(5, '2019-12-01', 'Paglalaan ng pondo sa BADAC', '067-2019-12 Paglalaan ng pondo sa BADAC.pdf'),
(6, '2019-12-01', 'Paglalaan ng pondo sa BCPC', '068-2019-12 Paglalaan ng pondo sa BCPC.pdf'),
(7, '2019-12-01', 'Paglalaan ng pondo sa Solid Waste', '069-2019-12 Paglalaan ng pondo sa Solid Waste.pdf'),
(8, '2019-12-01', 'Paglalaan ng pondo sa BDRRM', '070-2019-12 Paglalaan ng pondo sa BDRRM.pdf'),
(9, '2019-12-01', 'Sampung porsiyento ng SK', '071-2019-12 sampung porsiyento ng SK.pdf'),
(10, '2019-12-01', 'Walang Re alignment', '072-2019-12 Walang Re alignment.pdf'),
(11, '2019-12-01', 'Araw ng Barangay', '073-2019-12 Araw ng Barangay.pdf'),
(12, '2019-12-01', 'Pagbibigay Pondo sa Senior', '074-2019-12 Pagbibigay Pondo sa Senior.pdf'),
(13, '2019-12-01', 'Pagbibigay pondo sa PWD', '075-2019-12 Pagbibigay pondo sa PWD.pdf'),
(14, '2019-12-01', 'Pagdaragdag ng Honoraria', '076-2019-12 Pagdaragdag ng Honoraria.pdf'),
(15, '2019-12-01', 'Paragdag ng Isang Utility Worker', '077-2019-12 Paragdag ng Isang Utility Worker.pdf'),
(16, '2019-12-01', 'Paragdag ng Isang Office Staff', '078-2019-12 Paragdag ng Isang Office Staff.pdf'),
(17, '2019-12-01', 'Pagdagdag ng Barangay palero', '079-2019-12 pagdagdag ng Barangay palero.pdf'),
(18, '2019-12-01', 'Pagdagdag ng Barangay Caminero', '080-2019-12 pagdagdag ng Barangay Caminero.pdf'),
(19, '2019-12-01', 'Pagdagdag ng Barangay Garbage Truck Driver', '080-2019-12 pagdagdag ng Barangay Garbage Truck Driver.pdf'),
(20, '2019-12-01', 'BADAC Desk Officer', '081-2019-12 BADAC Desk Officer.pdf'),
(21, '2019-12-01', 'Sampung Barangay Disaster Brigade', '082-2019-12 sampung Barangay Disaster Brigade.pdf'),
(22, '2019-12-01', 'Barangay Office staff', '083-2019-12 Barangay Office staff.pdf'),
(23, '2020-02-18', 'DITO', '066-2020-02 DITO.pdf'),
(24, '2020-02-18', 'Pagpapatibay ng Annual Budget', '067-2020-02 Pagpapatibay ng Annual Budget.pdf'),
(25, '2020-02-18', 'Annual Investment Plan', '068-2020-02 Annual Investment Plan.pdf'),
(26, '2020-02-18', 'Community Development Plan', '069-2020-02 Community Development Plan.pdf'),
(27, '2020-02-18', 'Paglalaan ng pondo sa GAD', '070-2020-02 Paglalaan ng pondo sa GAD.pdf'),
(28, '2020-02-18', 'Paglalaan ng pondo sa BADAC', '071-2020-02 Paglalaan ng pondo sa BADAC.pdf'),
(29, '2020-02-18', 'Paglalaan ng pondo sa BCPC', '072-2020-02 Paglalaan ng pondo sa BCPC.pdf'),
(30, '2020-02-18', 'Paglalaan ng pondo sa Solid Waste', '073-2020-02 Paglalaan ng pondo sa Solid Waste.pdf'),
(31, '2020-02-18', 'Walang Re alignment', '076-2020-02 Walang Re alignment.pdf'),
(32, '2020-02-18', 'Araw ng Barangay', '077-2020-02 Araw ng Barangay.pdf'),
(33, '2020-02-18', 'Pagbibigay Pondo sa Senior', '078-2020-02 Pagbibigay Pondo sa Senior.pdf'),
(34, '2020-02-18', 'Pagbibigay pondo sa PWD', '079-2020-02 Pagbibigay pondo sa PWD.pdf'),
(35, '2020-02-18', 'MULTI PURPOSE VAN EURO 4', '080-2020-02 MULTI PURPOSE VAN EURO 4.pdf'),
(36, '2020-02-18', 'Pagdaragdag ng Honoraria', '080-2020-02 Pagdaragdag ng Honoraria.pdf'),
(37, '2020-02-18', 'Paragdag ng Isang Utility Worker', '081-2020-02 Paragdag ng Isang Utility Worker.pdf'),
(38, '2020-02-18', 'Paragdag ng Isang Office Staff', '083-2020-02 Paragdag ng Isang Office Staff.pdf'),
(39, '2020-02-18', 'Barangay Office staff', '084-2020-02 Barangay Office staff.pdf'),
(40, '2020-02-18', 'Pagdagdag ng 4 Barangay palero', '085-2020-02 pagdagdag ng 4 Barangay palero.pdf'),
(41, '2020-02-18', 'Pagdagdag ng Barangay Garbage Truck Driver', '086-2020-02 pagdagdag ng Barangay Garbage Truck Driver.pdf'),
(42, '2020-02-18', 'Paragdag ng Barangay Affairs Internal', '087-2020-02 Paragdag ng Barangay Affairs Internal.pdf'),
(43, '2020-02-18', 'Isang Barangay Disaster Brigade Team Leader1', '088-2020-02 isang Barangay Disaster Brigade Team Leader1.pdf'),
(44, '2020-02-18', 'Paglalagay ng isang Human Rights Action Officer', '089-2020-02Paglalagay ng isang Human Rights Action Officer.pdf'),
(45, '2020-02-18', 'Paragdag ng Isang Barangay Liaison Officer II', '090-2020-02 Paragdag ng Isang Barangay Liaison Officer II.pdf'),
(46, '2020-02-18', 'Barangay Information Desk Officer', '091-2020-02 Barangay Information Desk Officer.pdf'),
(47, '2020-02-18', 'Lupon tagapamayapa', '092-2020-02 Lupon tagapamayapa.pdf'),
(48, '2020-02-18', 'Paragdag ng Tent Staller', '093-2020-02 Paragdag ng Tent Staller.pdf'),
(49, '2020-02-18', 'Paragdag ng Isang Task Force Disiplina', '094-2020-02 Paragdag ng Isang Task Force Disiplina.pdf'),
(50, '2020-03-14', 'Utilize Quick Response Fund Balance', '097-2020-03 Utilize Quick Response Fund Balance.pdf'),
(51, '2020-03-25', 'Utilize Quick Response Fund Additional Fund', '100-2020-03 Utilize Quick Response Fund Additional Fund.pdf'),
(52, '2020-05-18', 'CONTAINEMENT ZONE', '102-2020-05 CONTAINEMENT ZONE.pdf'),
(53, '2020-05-18', 'CRITICAL ZONE', '103-2020-05 CRITICAL ZONE.pdf'),
(54, '2020-05-18', 'BUFFER ZONE', '104-2020-05 BUFFER ZONE.pdf'),
(55, '2021-01-05', 'ELCAC', '108-2021-01 ELCAC.pdf'),
(56, '2021-01-05', 'BPOP', '120-2021-12 BPOP.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_username`, `user_password`, `user_lname`, `user_fname`, `user_email`, `user_role`) VALUES
(5, 'admin', 'admin123', 'admin Last Name', 'Admin First Name', 'admin@gmail.com', 'admin'),
(6, 'author', 'author123', 'Author Last Name', 'Author First Name', 'author@gmail.com', 'author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_card`
--
ALTER TABLE `news_card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `tbl_business`
--
ALTER TABLE `tbl_business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_fishfolk`
--
ALTER TABLE `tbl_fishfolk`
  ADD PRIMARY KEY (`fishfolk_id`);

--
-- Indexes for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  ADD PRIMARY KEY (`indigency_id`);

--
-- Indexes for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `tbl_resolution`
--
ALTER TABLE `tbl_resolution`
  ADD PRIMARY KEY (`resolution_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_card`
--
ALTER TABLE `news_card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_business`
--
ALTER TABLE `tbl_business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  MODIFY `clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_fishfolk`
--
ALTER TABLE `tbl_fishfolk`
  MODIFY `fishfolk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  MODIFY `indigency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_resolution`
--
ALTER TABLE `tbl_resolution`
  MODIFY `resolution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
