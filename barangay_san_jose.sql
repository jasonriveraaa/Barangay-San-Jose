-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:14 PM
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
(1, 'Pera Ayuda Hunyo 2021', 'Pamamahagi ng pera bilang ayuda para sa mga kababayan nating nawalan ng trabaho ngayong hunyo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p>', 'money ayuda.jpg', 'Rayel John Bravo', '2021-06-06', 'Ayuda '),
(2, 'Laptop Para Sa Ating Magigiting Na Guro', 'Pag bibigay ng laptop sa mga public school teachers', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p><ul><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet</li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p>', 'laptop distribution.jpg', 'Jason David Matica', '2021-06-06', 'school'),
(3, 'Covid case update', 'Bilang nang naitalang kaso ng covid ngayong hunyo ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nisl, feugiat vel finibus eu, placerat sed erat. Aliquam libero tellus, feugiat eget elit consequat, iaculis pharetra orci. Pellentesque a nisi ex. Nullam elementum maximus dui, quis venenatis massa iaculis vel. Etiam quis aliquet eros. Nunc cursus laoreet enim nec vehicula. Phasellus luctus auctor turpis sed consequat. Nulla at justo porttitor, sodales massa sed, lobortis turpis. Ut mattis facilisis dictum. Fusce eu sagittis sem. Suspendisse auctor ante ligula, quis lobortis urna placerat mattis. Cras ultricies lacus sed elit vehicula, nec luctus lorem suscipit.</p>', 'news5.jpg', 'Rayel John Bravo', '2021-06-06', 'covid');

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
  `business_date` date NOT NULL,
  `business_appointment_date` date NOT NULL,
  `business_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_business`
--

INSERT INTO `tbl_business` (`business_id`, `business_lname`, `business_fname`, `business_mname`, `business_suffix`, `business_owner_address`, `business_name`, `business_address`, `business_date`, `business_appointment_date`, `business_status`) VALUES
(1, 'Amatosa', 'Elmira', 'Pelagio', '', '#113 Jacinto St., San Jose, Malabon City', 'H&M Clothing Shop', '#113 Jacinto St., San Jose, Malabon City', '2021-06-06', '2021-06-08', ''),
(2, 'Alfato', 'Hazel Ann', '', '', '#96 Hererra St., San Jose, Malabon City', 'Gringos', '#96 Hererra St., San Jose, Malabon City', '2021-06-06', '2021-06-08', ''),
(3, 'Veneranda', 'Jessica ', 'Lorejas', '', '#96 Gulayan St., San Jose, Navotas City', 'Good Man\'s Electrical Shop', '#96 Gulayan St., San Jose, Navotas City', '2021-06-06', '2021-06-08', ''),
(4, 'Tinio', 'Dana', 'Isabelle', '', '#75 Boy Chinayao St., San Jose, Navotas City', 'Reaton Mart', '#75 Boy Chinayao St., San Jose, Navotas City', '2021-06-06', '2021-06-08', ''),
(5, 'Baterzal', 'Gwynne', 'Louis', '', '#459 North Bay Boulevard North St., San Jose, Navotas City', 'Minipixel Printing Shop', '#459 North Bay Boulevard North St., San Jose, Navotas City', '2021-06-06', '2021-06-08', ''),
(6, 'Paglinawan', 'Samantha', 'Jay', '', '#456 Bagong Rosario St,. San Jose, Navotas City', 'Kim\'s Barber Shop\r\n', '#456 Bagong Rosario St,. San Jose, Navotas City', '2021-06-07', '2021-06-09', ''),
(7, 'Bitagara ', 'Joshua', 'Alcoriza', '', '#65 San Roque St., San Jose, Navotas City', 'Hera Lounge Spa', '#65 San Roque St., San Jose, Navotas City', '2021-06-07', '2021-06-09', ''),
(8, 'Mia', 'Christian', 'Silangan', '', '#65 NBBN East St., San Jose, Navotas City', 'Teapop', '#65 NBBN East St., San Jose, Navotas City', '2021-06-07', '2021-06-09', ''),
(9, 'Bejerano', 'Allan', 'Santos', '', '#447 Delta St., San Jose, Navotas City', 'Ajdo Chocolate Store', '#447 Delta St., San Jose, Navotas City', '2021-06-07', '2021-06-09', ''),
(10, 'Co', 'Arlene', 'Bejerano', '', '#481 Bagong Silang St., San Jose, Navotas City', 'Mary Jay\'s Restaurant\r\n', '#481 Bagong Silang St., San Jose, Navotas City', '2021-06-07', '2021-06-09', ''),
(11, 'Bravo', 'Kenneth', 'Co', '', '#56 Obando St., San Jose, Navotas City', 'Tako tako dan', '#56 Obando St., San Jose, Navotas City', '2021-06-08', '2021-06-10', ''),
(12, 'Bravo', 'Kershey', 'Co', '', '#47 Kilawin St., San Jose, Navotas City', 'Miguel\'s Diner', '#47 Kilawin St., San Jose, Navotas City', '2021-06-08', '2021-06-10', ''),
(13, 'Acaba', 'Jiro', 'Talas', '', '#69 Gagalangin St., San Jose, Navotas City', 'Via Resto', '#69 Gagalangin St., San Jose, Navotas City', '2021-06-08', '2021-06-10', ''),
(14, 'Ambrocio', 'Jacer', 'Tamayo', '', '#12 Malate St., San Jose, Navotas City', 'Drunk Yard', '#12 Malate St., San Jose, Navotas City', '2021-06-08', '2021-06-08', ''),
(15, 'Velazques', 'Lincoln ', 'Cong', '', '#169 Gov. Pascual Ave. St., San Jose, Navotas City', 'Pulpeetea', '#169 Gov. Pascual Ave. St., San Jose, Navotas City', '2021-06-08', '2021-06-10', '');

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
(1, 'parish.jpg'),
(2, 'nochina.jpg');

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
  `clearance_status` varchar(50) NOT NULL,
  `clearance_date` date NOT NULL,
  `clearance_appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clearance`
--

INSERT INTO `tbl_clearance` (`clearance_id`, `clearance_lname`, `clearance_fname`, `clearance_mname`, `clearance_suffix`, `clearance_address`, `clearance_purpose`, `clearance_status`, `clearance_date`, `clearance_appointment_date`) VALUES
(1, 'RIVERA', 'CHARLES JASON', 'IRIOLA', '', '14 DAVID COMP. 379 GOV A PASCUAL ST', 'WORK', 'Done', '2021-06-06', '2021-06-08'),
(2, 'Romantico', 'Abby Gayle', 'Quinto', '', '23 C. Kahunari 1 St. San Jose Navotas City San Jose Navotas City', 'Work', 'Cancelled', '2021-06-06', '2021-06-08'),
(3, 'Lothbrok', 'Ragnar', '', '', 'Valhala St. San Jose Navotas City', 'Personal', 'Done', '2021-06-07', '2021-06-09'),
(4, 'Bravo', 'Rayel John', 'Bejerano', '', 'Kabayuhan 32 St. San Jose Navotas City San Jose Navotas City', 'School', 'Done', '2021-06-08', '2021-06-10'),
(5, 'Mantica', 'Mary Jane', 'Espinosa', '', '#75 Bagong Silang St., San Jose, Navotas City', 'APPLICATION ABROAD', 'Done', '2021-06-06', '2021-06-08'),
(6, 'Mantica', 'Pablito', 'Monaka', 'Sr.', '#47 Bagong Silang St., San Jose, Navotas City', 'WORK REQUIREMENT', 'Cancelled', '2021-06-06', '2021-06-08'),
(7, 'Versoza', 'Edjardo', 'Sugarol', '', '#13 Kahunari 1st, San Jose, Navotas City', 'APPLICATION FOR ID', 'Cancelled', '2021-06-06', '2021-06-08'),
(8, 'Gulapa', 'Adela', '', '', '#11 M. Naval St., San Jose, Navotas City', 'APPLICATION FOR BARANGAY ID', 'Done', '2021-06-06', '2021-06-08'),
(9, 'Sabuito', 'Cloey', 'Cruz', '', '#459 Miguel St., San Jose, Navotas City', 'APPLICATION FOR DRIVER\'S LICENSE', 'Cancelled', '2021-06-07', '2021-06-09'),
(10, 'Sabuito', 'Honeycoke', 'Santos', '', '#113 Burgos St., San Jose, Navotas City', 'APPLICATION FOR VACCINATION', 'Done', '2021-06-07', '2021-06-09'),
(11, 'Cruz', 'Louisy', 'Peralta', '', '#32 Daanghari St., San Jose, Navotas City', 'SCHOOL REQUIREMENT', 'Cancelled', '2021-06-07', '2021-06-09'),
(12, 'Tinio', 'Dana Isabelle', '', '', '#65 Hererra St., San Jose Navotas City', 'APPLICATION FOR FREE EDUCATION', 'Done', '2021-06-07', '2021-06-09'),
(13, 'Pelagio', 'Aichibel', 'Amatosa', '', '#63 Poblacion St., San Jose, Navotas City', 'APPLICATION FOR WORK', 'Done', '2021-06-08', '2021-06-10'),
(14, 'Manoban', 'Lisa', '', '', '#75 Agustin St., San Jose, Navotas City', 'APPLICATION FOR WORK VACCINATION', 'Cancelled', '2021-06-08', '2021-06-10'),
(15, 'Targaryen', 'Daenerys ', 'Valyrian', 'IV', '#123 House Targaryen St., San Jose, Navotas City', 'APPLICATION FOR THRONE', 'Done', '2021-06-08', '2021-06-10');

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
(1, 'Zumba', 'Zumba is a fitness program that combines Latin and international music with dance moves.', 'zumba.jpg', 'San Jose Patio', '2021-06-12', '06:30:00'),
(2, 'Funrun 2021', 'Run For Your Breakthrough is a 3K and 5K run for a cause project for the benefit of selected public schools in Navotas City and Malabon City on Brigada Eskwela 2021', 'funrun.jpg', 'Navotas City Hall', '2021-06-20', '05:00:00'),
(3, 'Free Swab Test', 'Workers who are not residents of Navotas City are welcome to avail of the free swab testing', 'swabfree.jpg', 'Navotas Covered Court ', '2021-06-25', '07:00:00'),
(4, 'Barangay Online Games Tournament', 'IN A bid to provide relaxation to youth amid the continuing community quarantine, the local government of San Jose, Navotas has launched an online gaming tournament.', 'valotourna.jfif', '', '2021-06-14', '10:00:00');

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
  `fishfolk_date` date NOT NULL,
  `fishfolk_appointment_date` date NOT NULL,
  `fishfolk_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fishfolk`
--

INSERT INTO `tbl_fishfolk` (`fishfolk_id`, `fishfolk_lname`, `fishfolk_fname`, `fishfolk_mname`, `fishfolk_suffix`, `fishfolk_address`, `fishfolk_class`, `fishfolk_date`, `fishfolk_appointment_date`, `fishfolk_status`) VALUES
(1, 'Dosal ', 'Edmar', 'Reyes', '', '#23 Newborn Town St., San Jose, Navotas City', 'Boat Owner', '2021-06-06', '2021-06-08', ''),
(2, 'Raymundo', 'Ariel', 'Villanueva', 'Jr.', '#23 Bangkulasi St., San Jose, Navotas City', 'Boat Owner', '2021-06-06', '2021-06-08', ''),
(3, 'Sori', 'Jimmybhoy', 'Lazo', '', '#22 Sampaguita St., San Jose, Navotas City', 'Fish Vendor', '2021-06-06', '2021-06-08', ''),
(4, 'Avendanio', 'Jenny', 'Macapagal', '', '#42 Sampaloc St., San Jose, Navotas City', 'Boat Owner', '2021-06-06', '2021-06-08', ''),
(5, 'Quilana', 'Ginalyn', 'Rivera', '', '#13 Ilang-ilang St., San Jose, Navotas City', 'Fish Vendor', '2021-06-06', '2021-06-08', ''),
(6, 'Pante', 'Ella', 'Clarina', '', '#63 Legarda St., San Jose, Navotas City', 'Fish Vendor', '2021-06-07', '2021-06-09', ''),
(7, 'Navas', 'Jennifer', 'Soriano', '', '#03 Phase A Loyola St., San Jose, Navotas City', 'Fish Vendor', '2021-06-07', '2021-06-09', ''),
(8, 'Mantica', 'Jason David', 'Pablito', '', '#12 Sipac Almacen St., San Jose, Navotas City', 'Boat Owner', '2021-06-07', '2021-06-09', ''),
(9, 'Bravo', 'Rayel John ', 'Bejerano', 'Jr.', '#447 North Bay Boulevard North St., San Jose, Navotas City', 'Boat Owner', '2021-06-07', '2021-06-09', ''),
(10, 'Verzosa', 'Joseph', 'Edgardo', 'Sr.', '#23 Newborn Town St., San Jose, Navotas City', 'Fish Vendor', '2021-06-07', '2021-06-09', ''),
(11, 'Andres', 'Aimor', 'Aquial', '', '#256 Maya-maya St., San Jose, Navotas City', 'Fish Vendor', '2021-06-08', '2021-06-10', ''),
(12, 'Belgica', 'Venice', 'Legaspi', '', '#233 Nagtahan St., San Jose, Navotas City', 'Fish Vendor', '2021-06-08', '2021-06-10', ''),
(13, 'Apaya', 'Miguel Karlos', 'Sta. Cruz', '', '#56 Concepcion St., San Jose, Navotas City', 'Boat Owner', '2021-06-08', '2021-06-10', ''),
(14, 'Pelagio', 'Elmar', 'Amatosa', '', '#67 Tangos St., San Jose, Navotas City', 'Boat Owner', '2021-06-08', '2021-06-10', ''),
(15, 'Kim', 'Jisoo', 'Turtle Rabbit', '', '#19 Korea St., San Jose, Navotas City', 'Boat Owner', '2021-06-08', '2021-06-10', '');

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
  `indigency_date` date NOT NULL,
  `indigency_appointment_date` date NOT NULL,
  `indigency_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_indigency`
--

INSERT INTO `tbl_indigency` (`indigency_id`, `indigency_lname`, `indigency_fname`, `indigency_mname`, `indigency_suffix`, `indigency_address`, `indigency_purpose`, `indigency_date`, `indigency_appointment_date`, `indigency_status`) VALUES
(1, 'RIVERA', 'CHARLES JASON', 'IRIOLA', '', '14 DAVID COMP. 379 GOV A PASCUAL ST SAN JOSE NAVOTAS CITY', 'SCHOLARSHIP', '2021-06-06', '2021-06-08', ''),
(2, 'Amatosa', 'Elmira', 'Pelagio', '', '#168 Jacinto St., Concepcion, Malabon City', 'SCHOOL REQUIREMENT', '2021-06-06', '2021-06-08', ''),
(3, 'Alfato', 'Hazel Ann', 'Santos', NULL, '#56 Miguel St., NBBN, Navotas City', 'WORK REQUIREMENT', '2021-06-06', '2021-06-08', ''),
(4, 'Veneranda', 'Jessica', 'Cruz', NULL, '#96 Gulayan St., San Jose, Navotas City', 'SPES REQUIREMENT', '2021-06-06', '2021-06-08', ''),
(5, 'Bustin', 'Jieber', 'Gomez', 'Jr.', '#56 Lacson St., Bangkulasi, Navotas City', 'CHED REQUIREMENT', '2021-06-06', '2021-06-08', ''),
(6, 'Dela Cruz', 'Joshua', 'Poblacion', NULL, '#49 Bagong Silang St., San Jose ,Navotas City', 'WORK REQUIREMENT', '2021-06-06', '2021-06-08', ''),
(7, 'Junlee', 'Fajardo', 'Gabad', 'Jr.', '#23 Bagong Silang St., San Jose, Navotas City', 'SCHOLARSHIP PROGRAM', '2021-06-07', '2021-06-09', ''),
(8, 'Caringal', 'Hugo', 'Mariano', NULL, '#78 Bagong Silang St., San Jose, Navotas City', 'VACCINATION PROGRAM', '2021-06-07', '2021-06-09', ''),
(9, 'Cabangon', 'Savion', 'Martino', NULL, '#11 Bagong Silang St., San Jose, Navotas City', 'TDP SCHOLARSHIP PROGRAMM', '2021-06-07', '2021-06-09', ''),
(10, 'Puno', 'Drew', 'Manolito', 'Sr.', '#46 Bagong Silang St., San Jose, Navotas City', 'WORK REQUIREMENT', '2021-06-07', '2021-06-09', ''),
(11, 'Pamintuan', 'Marquise', 'Devonte', NULL, '#14 Bagong Silang St., San Jose, Navotas City', 'FREE TUTOR PROGRAM', '2021-06-07', '2021-06-09', ''),
(12, 'Alejandro', 'Justin', 'Meneses', NULL, '#33 Bagong Silang St., San Jose, Navotas City', 'SCHOOL REQUIREMENT', '2021-06-08', '2021-06-10', ''),
(13, 'Natividad', 'Trebor', 'Aluino', NULL, '#88 Bagong Silang St., San Jose, Navotas City', 'SCHOOL PROGRAM', '2021-06-08', '2021-06-10', ''),
(14, 'Baterzal', 'Gwynne', 'Arquiza', NULL, '#449 North Bay Boulevard North, Navotas City', 'WORK REQUIREMENT', '2021-06-08', '2021-06-10', ''),
(15, 'Park', 'Roseanne', 'Chaeyoung', NULL, '#21 Bagong Silang St., San Jose, Navotas City', 'NBI APPLICATION', '2021-06-08', '2021-06-09', '');

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
(1, 'Rivera', 'Charles Jason', 21, 'Male', 'Single', '14 David Compound 379 Gov A Pascual St. San Jose Navotas City', '09754018144'),
(2, 'Romantico', 'Abby Gayle', 20, 'Female', 'Single', '23 C. Kahunari 1 St. San Jose Navotas City San Jose Navotas City', '09751040103'),
(3, 'Rivera', 'Christian', 23, 'Male', 'Single', '14 DAVID COMP. 379 GOV A PASCUAL ST', '09125745588'),
(4, 'Mantica', 'Jason David', 18, 'Male', 'Married', 'Daanghari St. San Jose Navotas City', '09584589755'),
(5, 'Bravo', 'Rayel John', 21, 'Male', 'Single', '66 Los marteres St. San Jose Navotas City', '09668574877'),
(6, 'Juan', 'Marques', 34, 'Male', 'Married', '44 Tuazon St. San Jose Navotas City', '09557987266'),
(7, 'Mendoza', 'Victor', 28, 'Male', 'Divorced', '66 Doble nuebe St. San Jose Navotas City', '09124569875'),
(8, 'De Guia', 'Denver', 28, 'Male', 'Divorced', 'Hernandez Owner St. San Jose Navotas City', '09324562425'),
(9, 'Lucio', 'Karen', 33, 'Female', 'Widowed', '12 St. Joseph Comp St. San Jose, Navotas City', '09785697488'),
(10, 'Valencia', 'Daniela ', 26, 'Female', 'Single', '321 Hernandez St. San Jose Navotas City', '09126543299'),
(11, 'Castro', 'Carl', 45, 'Male', 'Widowed', 'Almacen corner St. San Jose Navotas City', '09745689422'),
(12, 'Felix', 'Christian', 33, 'Male', 'Married', 'Losma Owner St. San Jose Navotas City', '09666846999');

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
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'last name', 'first name', 'admin@gmail.com', 'admin'),
(2, 'jasonriveraaa', 'acc0aa297d5bbd540006807c57c0affb', 'Rivera', 'Charles Jason', 'jason.kandabog@gmail.com', 'author'),
(3, 'jasondavidmantica', '3156776a8dcfbdcbaccf9dee7770477a', 'Mantica', 'Jason David', 'jasondavidmantica@gmail.com', 'author'),
(4, 'rayeljohnbravo', 'b0af58eedebcdaae228d7d42a14c0786', 'Bravo', 'Rayel John', 'rayeljohnbravo@gmail.com', 'author');

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
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_business`
--
ALTER TABLE `tbl_business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  MODIFY `clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_fishfolk`
--
ALTER TABLE `tbl_fishfolk`
  MODIFY `fishfolk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  MODIFY `indigency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_resolution`
--
ALTER TABLE `tbl_resolution`
  MODIFY `resolution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
