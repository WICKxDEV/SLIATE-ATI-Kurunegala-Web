-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for srms
CREATE DATABASE IF NOT EXISTS `srms` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `srms`;

-- Dumping structure for table srms.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.admin: ~1 rows (approximately)
REPLACE INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2024-05-02 12:54:42');

-- Dumping structure for table srms.tblclasses
CREATE TABLE IF NOT EXISTS `tblclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(11) NOT NULL DEFAULT 0,
  `Section` varchar(50) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblclasses: ~5 rows (approximately)
REPLACE INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
	(1, 'HNDIT-2022', 1, '1st year FullTime', '2024-04-29 11:31:39', '2024-05-31 18:57:29'),
	(2, 'HNDIT-2022', 1, '1st year PartTime', '2024-05-31 09:41:58', '2024-05-31 18:57:26'),
	(3, 'HNDIT-2022', 2, '1st year FullTime', '2024-05-31 09:43:02', '2024-05-31 18:57:23'),
	(4, 'HNDIT-2022', 2, '1st year PartTime', '2024-05-31 09:43:10', '2024-05-31 18:57:20'),
	(6, 'HNDIT-2023', 1, '1st year FullTime', '2024-05-31 18:56:22', NULL);

-- Dumping structure for table srms.tblresult
CREATE TABLE IF NOT EXISTS `tblresult` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblresult: ~12 rows (approximately)
REPLACE INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
	(10, 7, 2, 23, 95, '2024-05-31 18:31:06', NULL),
	(11, 7, 2, 20, 85, '2024-05-31 18:31:06', NULL),
	(12, 7, 2, 22, 75, '2024-05-31 18:31:06', NULL),
	(13, 7, 2, 21, 86, '2024-05-31 18:31:06', NULL),
	(14, 7, 2, 18, 89, '2024-05-31 18:31:06', NULL),
	(15, 7, 2, 19, 99, '2024-05-31 18:31:06', NULL),
	(16, 6, 2, 23, 98, '2024-05-31 18:47:23', '2024-05-31 19:06:53'),
	(17, 6, 2, 20, 97, '2024-05-31 18:47:23', '2024-05-31 19:06:53'),
	(18, 6, 2, 22, 86, '2024-05-31 18:47:23', '2024-05-31 19:06:53'),
	(19, 6, 2, 21, 82, '2024-05-31 18:47:23', '2024-05-31 19:06:53'),
	(20, 6, 2, 18, 98, '2024-05-31 18:47:23', '2024-05-31 19:06:53'),
	(21, 6, 2, 19, 99, '2024-05-31 18:47:23', '2024-05-31 19:06:53');

-- Dumping structure for table srms.tblstudents
CREATE TABLE IF NOT EXISTS `tblstudents` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblstudents: ~1 rows (approximately)
REPLACE INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
	(6, 'B.G.I.S.Wickramasinghe', '0007', 'isuru@gmail.com', 'Male', '1999-04-27', 2, '2024-05-31 18:30:34', NULL, 1);

-- Dumping structure for table srms.tblsubjectcombination
CREATE TABLE IF NOT EXISTS `tblsubjectcombination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblsubjectcombination: ~12 rows (approximately)
REPLACE INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
	(11, 1, 18, 1, '2024-05-31 10:32:55', '2024-05-31 10:32:55'),
	(12, 1, 19, 1, '2024-05-31 10:33:02', '2024-05-31 10:33:02'),
	(13, 1, 20, 1, '2024-05-31 10:33:07', '2024-05-31 10:33:07'),
	(15, 1, 21, 1, '2024-05-31 10:33:28', '2024-05-31 10:33:28'),
	(16, 1, 22, 1, '2024-05-31 10:33:34', '2024-05-31 10:33:34'),
	(17, 1, 23, 1, '2024-05-31 10:33:39', '2024-05-31 10:33:39'),
	(18, 2, 18, 1, '2024-05-31 10:35:11', '2024-05-31 10:35:11'),
	(19, 2, 19, 1, '2024-05-31 10:35:17', '2024-05-31 10:35:17'),
	(20, 2, 20, 1, '2024-05-31 10:35:22', '2024-05-31 10:35:22'),
	(21, 2, 21, 1, '2024-05-31 10:35:30', '2024-05-31 10:35:30'),
	(22, 2, 22, 1, '2024-05-31 10:35:52', '2024-05-31 10:35:52'),
	(23, 2, 23, 1, '2024-05-31 10:35:59', '2024-05-31 10:35:59');

-- Dumping structure for table srms.tblsubjects
CREATE TABLE IF NOT EXISTS `tblsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblsubjects: ~23 rows (approximately)
REPLACE INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
	(1, 'Fundamentals of Programming', 'HNDIT2012', '2024-04-29 11:30:48', '2024-05-31 09:50:40'),
	(2, 'Software Development', 'HNDIT2022', '2024-04-29 11:30:55', '2024-05-31 09:51:06'),
	(3, 'System Analysis and Design', 'HNDIT2032', '2024-04-29 11:31:03', '2024-05-31 09:51:35'),
	(4, 'Data communication and Computer Networks', 'HNDIT2042', '2024-05-31 09:52:30', '0000-00-00 00:00:00'),
	(5, 'Principles of User Interface Design', 'HNDIT2052', '2024-05-31 09:52:51', '0000-00-00 00:00:00'),
	(6, 'ICT Project (Group)', 'HNDIT2062', '2024-05-31 09:53:08', '0000-00-00 00:00:00'),
	(7, 'Technical Writing', 'HNDIT2072', '2024-05-31 09:53:22', '0000-00-00 00:00:00'),
	(8, 'Human Value and Professionalism', 'HNDIT2082', '2024-05-31 09:53:41', '0000-00-00 00:00:00'),
	(9, 'Software Engineering', 'HNDIT4012', '2024-05-31 09:53:54', '0000-00-00 00:00:00'),
	(10, 'Software Quality Assurance', 'HNDIT4022', '2024-05-31 09:55:32', '0000-00-00 00:00:00'),
	(11, 'IT Project Management', 'HNDIT4032', '2024-05-31 09:55:44', '0000-00-00 00:00:00'),
	(12, 'Professional World', 'HNDIT4042', '2024-05-31 09:55:58', '0000-00-00 00:00:00'),
	(13, 'Programming Individual Project', 'HNDIT4052', '2024-05-31 09:56:09', '0000-00-00 00:00:00'),
	(14, 'Machine Learning', 'HNDIT4212', '2024-05-31 09:56:19', '0000-00-00 00:00:00'),
	(15, 'Business Analysis Practice', 'HNDIT4222', '2024-05-31 09:56:29', '0000-00-00 00:00:00'),
	(16, 'Enterprise Architecture', 'HNDIT4232', '2024-05-31 09:56:41', '0000-00-00 00:00:00'),
	(17, 'Computer Services Management', 'HNDIT4242', '2024-05-31 09:56:57', '0000-00-00 00:00:00'),
	(18, 'Visual Application Programming', 'HNDIT1012', '2024-05-31 10:05:04', '2024-05-31 10:06:01'),
	(19, 'Web Design', 'HNDIT1022', '2024-05-31 10:05:47', '2024-05-31 10:06:37'),
	(20, 'Computer and Network Systems', 'HNDIT1032', '2024-05-31 10:07:05', '0000-00-00 00:00:00'),
	(21, 'Information Management and Information Systems', 'HNDIT1042', '2024-05-31 10:07:26', '0000-00-00 00:00:00'),
	(22, 'ICT PROJECT (INDIVIDUAL)', 'HNDIT1052', '2024-05-31 10:07:45', '0000-00-00 00:00:00'),
	(23, 'Communication Skills', 'HNDIT1062', '2024-05-31 10:11:08', '0000-00-00 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
