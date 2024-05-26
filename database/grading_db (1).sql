-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 04:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grading_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `equip_pro`
--

CREATE TABLE `equip_pro` (
  `ID` int(60) NOT NULL,
  `PROGRAM_ID` int(60) NOT NULL,
  `EQUIP_QUANTITY` int(11) NOT NULL,
  `UNIT` varchar(100) NOT NULL,
  `ARTICLE` varchar(60) NOT NULL,
  `EQUIP_DESCRIPTION` varchar(255) NOT NULL,
  `PROPERTY_NO` varchar(100) NOT NULL,
  `AVAILABILITY` varchar(60) NOT NULL,
  `COST` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equip_pro`
--

INSERT INTO `equip_pro` (`ID`, `PROGRAM_ID`, `EQUIP_QUANTITY`, `UNIT`, `ARTICLE`, `EQUIP_DESCRIPTION`, `PROPERTY_NO`, `AVAILABILITY`, `COST`) VALUES
(1, 6, 2, 'pieces', '2 way-radio', 'sdf', '2012-75', 'OUT OF STOCK/UNAVAILABLE', '75'),
(2, 6, 2, 'UNITS', 'cELLPHONE', 'NOKIA 3315', '2023-CP-890', 'OUT OF STOCK/UNAVAILABLE', '8990'),
(3, 7, 5, 'Unit', 'Isuzu 4x4', '6 cylinders disel engine, 10 wheels, chassis #89687698', '2023-11-321385', 'OUT OF STOCK/UNAVAILABLE', '1400000'),
(4, 8, 105, 'reams', 'Paper One', 'Plain bond paper', '2023-11-168413', '92', '250'),
(5, 7, 2, 'Unit', 'Mitsubishi Lancer 2X4', 'Four Wheel vehicle for DRR', '2024-01-VH01', '2', '1,214,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `grade`, `status`) VALUES
(1, '7', ''),
(2, '8', ''),
(3, '9', ''),
(4, '10', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(10) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `transaction`, `user_id`, `date_added`) VALUES
(361, 'logged out', 1, '2023-11-17 21:41:37'),
(362, 'logged in', 1, '2023-11-17 21:41:45'),
(363, 'ID No. 3?prog=COM E?desc=used for communication. updated in the Type of Equipment list', 0, '2023-11-17 21:41:52'),
(364, 'ID No. 3?prog=?desc= updated in the Type of Equipment list', 0, '2023-11-17 21:41:59'),
(365, 'ID No. 3?prog=?desc= updated in the Type of Equipment list', 0, '2023-11-17 21:43:04'),
(366, 'ID No. 3?prog=?desc= updated in the Type of Equipment list', 0, '2023-11-17 21:43:11'),
(367, 'ID No. 3?prog=?desc= updated in the Type of Equipment list', 0, '2023-11-17 21:43:50'),
(368, 'ID No. 3 updated in the Type of Equipment list', 0, '2023-11-17 21:44:02'),
(369, 'delete type of equipment list where ID is 3', 0, '2023-11-17 21:44:49'),
(370, 'ID No. 4?prog=COM E?desc=used for communication. updated in the Type of Equipment list', 0, '2023-11-17 21:44:56'),
(371, 'delete type of equipment list where ID is 4', 0, '2023-11-17 21:45:07'),
(372, 'added 2 way-radio as new Propert/Equipment', 1, '2023-11-17 21:47:06'),
(373, 'added 2 way-radio as new Propert/Equipment', 1, '2023-11-17 21:52:57'),
(374, 'added 2 way-radio as new Propert/Equipment', 1, '2023-11-18 10:07:44'),
(375, 'added 2 way-radio 6 2 pieces fxthdg 2012-75 75 as new Property/Equipment', 1, '2023-11-18 10:16:02'),
(376, 'added 2 way-radio 6 2 pieces zdg 2012-75 75 as new Property/Equipment', 1, '2023-11-18 10:26:32'),
(377, 'added 2 way-radio 6 2 pieces sdf 2012-75 75 as new Property/Equipment', 1, '2023-11-18 10:36:14'),
(378, 'added cELLPHONE as new Property/Equipment', 1, '2023-11-18 11:16:29'),
(379, 'logged out', 1, '2023-11-20 13:13:41'),
(380, 'logged in', 1, '2023-11-20 15:30:25'),
(381, 'logged out', 1, '2023-11-20 15:59:49'),
(382, 'logged in', 1, '2023-11-21 20:24:11'),
(383, 'updated 1 in the student list', 0, '2023-11-22 15:12:03'),
(384, 'updated 1 in the student list', 0, '2023-11-22 15:12:13'),
(385, 'updated 1 in the student list', 0, '2023-11-22 16:26:15'),
(386, 'updated 1 in the student list', 0, '2023-11-22 16:28:46'),
(387, 'updated 1 in the student list', 0, '2023-11-22 16:51:19'),
(388, 'issue order/MR to NECTOR P. GABORNES', 1, '2023-11-22 18:53:39'),
(389, 'issue order/MR to NECTOR P. GABORNES', 1, '2023-11-22 18:58:09'),
(390, 'issue order/MR to NECTOR P. GABORNES', 1, '2023-11-22 20:10:42'),
(391, 'issue order/MR to NECTOR P. GABORNES', 1, '2023-11-22 20:24:33'),
(392, 'issue order/MR to NECTOR P. GABORNES', 1, '2023-11-22 20:33:06'),
(393, 'printed   permanent record', 1, '2023-11-22 23:29:40'),
(394, 'printed   permanent record', 1, '2023-11-22 23:46:16'),
(395, 'printed   permanent record', 1, '2023-11-22 23:48:24'),
(396, 'printed   permanent record', 1, '2023-11-22 23:49:18'),
(397, 'printed   permanent record', 1, '2023-11-22 23:57:26'),
(398, 'logged in', 1, '2023-11-23 06:55:51'),
(399, 'logged out', 1, '2023-11-23 06:58:35'),
(400, 'logged in', 0, '2023-11-23 06:58:42'),
(401, 'logged out', 0, '2023-11-23 07:03:03'),
(402, 'logged in', 1, '2023-11-23 07:03:12'),
(403, 'logged in', 1, '2023-11-23 11:12:53'),
(404, 'added Isuzu 4x4 as new Property/Equipment', 1, '2023-11-23 11:16:53'),
(405, 'added Paper One as new Property/Equipment', 1, '2023-11-23 11:19:01'),
(406, 'issue order/MR to Carl Anos', 1, '2023-11-23 11:22:44'),
(407, 'issue order/MR to Nector Gabornes', 1, '2023-11-23 11:23:35'),
(408, 'logged out', 1, '2023-11-23 11:25:33'),
(409, 'logged in', 0, '2023-11-23 11:25:39'),
(410, 'logged out', 0, '2023-11-23 11:26:22'),
(411, 'logged in', 1, '2023-11-23 11:26:28'),
(412, 'logged in', 0, '2024-01-05 21:07:36'),
(413, 'logged out', 0, '2024-01-05 21:08:00'),
(414, 'logged in', 1, '2024-01-05 21:08:20'),
(415, 'logged out', 1, '2024-01-05 21:31:51'),
(416, 'logged in', 1, '2024-01-05 21:32:02'),
(417, 'logged out', 1, '2024-01-05 21:32:06'),
(418, 'logged in', 1, '2024-01-05 21:39:05'),
(419, 'logged out', 1, '2024-01-05 22:44:20'),
(420, 'added Nector P. Gabornes as new requester', 0, '2024-01-06 00:33:58'),
(421, 'added Nector P. Gabornes as new requester', 0, '2024-01-06 00:35:44'),
(422, 'added Nector P. Gabornes as new requester', 0, '2024-01-06 00:36:27'),
(423, 'added Dessaryl D. Elgar as new requester', 0, '2024-01-06 00:37:39'),
(424, 'logged in', 1, '2024-01-06 00:38:10'),
(425, 'added Mitsubishi Lancer 2X4 as new Property/Equipment', 1, '2024-01-06 00:51:23'),
(426, 'issue order/MR to ', 0, '2024-01-06 01:45:11'),
(427, 'issue order/MR to Nector P. Gabornes', 0, '2024-01-06 02:04:43'),
(428, 'issue order/MR to Nector P. Gabornes', 0, '2024-01-06 02:16:34'),
(429, 'issue order/MR to Nector P. Gabornes', 0, '2024-01-06 02:17:39'),
(430, 'issue order/MR to Dessaryl D. Elgar', 0, '2024-01-06 02:18:01'),
(431, 'added Nector P. Gabornes as new requester', 0, '2024-01-06 03:28:42'),
(432, 'logged in', 1, '2024-01-13 09:00:54'),
(433, 'added Joezyl Tanquion as new requester', 0, '2024-01-13 09:09:31'),
(434, 'logged out', 1, '2024-01-13 09:26:46'),
(435, 'logged in', 1, '2024-01-13 09:31:03'),
(436, 'added Dessaryl D. Elgar as new requester', 0, '2024-01-13 09:35:53'),
(437, 'issue order/MR to Joezyl Tanquion', 0, '2024-01-13 09:44:26'),
(438, 'added Nector P. Gabornes as new requester', 0, '2024-01-13 09:49:37'),
(439, 'issue order/MR to Nector P. Gabornes', 0, '2024-01-13 09:49:53'),
(440, 'logged out', 1, '2024-01-13 09:59:08'),
(441, 'logged in', 1, '2024-01-13 09:59:20'),
(442, 'logged out', 1, '2024-01-13 09:59:40'),
(443, 'logged in', 0, '2024-01-13 09:59:50'),
(444, 'logged out', 0, '2024-01-13 10:00:25'),
(445, 'logged in', 1, '2024-01-13 10:00:31'),
(446, 'logged out', 1, '2024-01-13 10:01:08'),
(447, 'logged in', 1, '2024-01-13 10:01:18'),
(448, 'logged out', 1, '2024-01-13 10:02:53'),
(449, 'logged in', 0, '2024-01-13 10:03:02'),
(450, 'logged out', 0, '2024-01-13 10:03:44'),
(451, 'logged in', 1, '2024-01-13 10:03:51'),
(452, 'logged out', 1, '2024-01-13 10:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `material_requisition`
--

CREATE TABLE `material_requisition` (
  `MR_ID` int(60) NOT NULL,
  `EQUIP_ID` int(60) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `DETAILS` varchar(255) NOT NULL,
  `MR_DATE` datetime NOT NULL,
  `QUANTITY` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_requisition`
--

INSERT INTO `material_requisition` (`MR_ID`, `EQUIP_ID`, `NAME`, `DETAILS`, `MR_DATE`, `QUANTITY`) VALUES
(4, 2, 'NECTOR P. GABORNES', 'ASSESSOR OFFICE', '2023-11-22 20:24:33', '2'),
(5, 2, 'NECTOR P. GABORNES', 'ASSESSOR OFFICE', '2023-11-22 20:33:06', '2'),
(6, 4, 'Carl Anos', 'Mayor Office', '2023-11-23 11:22:44', '5'),
(7, 3, 'Nector Gabornes', 'MDRRMO', '2023-11-23 11:23:35', '5'),
(10, 4, 'Nector P. Gabornes', 'DILG', '2024-01-06 02:16:34', '3'),
(11, 4, 'Nector P. Gabornes', 'DILG', '2024-01-06 02:17:39', '3'),
(12, 1, 'Dessaryl D. Elgar', 'Treasurer', '2024-01-06 02:18:01', '1'),
(13, 4, 'Joezyl Tanquion', 'Health Unit', '2024-01-13 09:44:26', '2'),
(14, 1, 'Nector P. Gabornes', 'DILG', '2024-01-13 09:49:53', '1');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PROGRAM_ID` int(20) NOT NULL,
  `EQUIP_TYPE` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PROGRAM_ID`, `EQUIP_TYPE`, `DESCRIPTION`) VALUES
(6, 'COM E', 'dfgdfgd'),
(7, 'Vehicle', 'this is used for transportation.'),
(8, 'Office Supplies', 'this is used for the processing of offices and departments.');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_candidates`
--

CREATE TABLE `promotion_candidates` (
  `id` int(10) NOT NULL,
  `STUDENT_ID` int(10) NOT NULL,
  `SY` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `REQUEST_ID` int(60) NOT NULL,
  `EQUIP_ID` int(60) NOT NULL,
  `REQUEST_QUANTITY` varchar(60) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `CONTACT` varchar(60) NOT NULL,
  `OFFICE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`REQUEST_ID`, `EQUIP_ID`, `REQUEST_QUANTITY`, `NAME`, `CONTACT`, `OFFICE`) VALUES
(7, 4, '2', 'Dessaryl D. Elgar', '09662444960', 'DILG'),
(8, 1, '1', 'Nector P. Gabornes', '09662444960', 'Treasurer');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `SY_ID` int(10) NOT NULL,
  `school_year` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`SY_ID`, `school_year`, `status`) VALUES
(1, '2016-2017', 'No'),
(2, '2017-2018', 'No'),
(3, '2018-2019', 'No'),
(4, '2019-2020', 'Yes'),
(5, '2017-2018', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `STUDENT_ID` int(50) NOT NULL,
  `LRN_NO` int(12) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `MIDDLENAME` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `PROVINCE` varchar(30) NOT NULL,
  `TOWN` varchar(30) NOT NULL,
  `BRGY` varchar(30) NOT NULL,
  `PARENT_GUARDIAN` varchar(50) NOT NULL,
  `P_ADDRESS` varchar(60) NOT NULL,
  `INT_COURSE_COMP` varchar(50) NOT NULL,
  `SCHOOL_YEAR` varchar(10) NOT NULL,
  `GEN_AVE` int(6) NOT NULL,
  `TOTAL_NO_OF_YEAR` int(5) NOT NULL,
  `PROGRAM` varchar(20) NOT NULL,
  `BIRTH_PLACE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `USER` varchar(10) NOT NULL,
  `PASSWORD` text NOT NULL,
  `USER_TYPE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `LASTNAME`, `FIRSTNAME`, `USER`, `PASSWORD`, `USER_TYPE`) VALUES
(1, 'admin', 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 'ADMINISTRATOR'),
(2, 'staff', 'staff', 'staff', 'de9bf5643eabf80f4a56fda3bbb84483', 'STAFF'),
(0, 'Joezyl', 'Tanquion', 'staff', '1253208465b1efa876f982d8a9e73eef', 'STAFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equip_pro`
--
ALTER TABLE `equip_pro`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `material_requisition`
--
ALTER TABLE `material_requisition`
  ADD PRIMARY KEY (`MR_ID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PROGRAM_ID`);

--
-- Indexes for table `promotion_candidates`
--
ALTER TABLE `promotion_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`REQUEST_ID`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`SY_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equip_pro`
--
ALTER TABLE `equip_pro`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `material_requisition`
--
ALTER TABLE `material_requisition`
  MODIFY `MR_ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `PROGRAM_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promotion_candidates`
--
ALTER TABLE `promotion_candidates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `REQUEST_ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `SY_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `STUDENT_ID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
