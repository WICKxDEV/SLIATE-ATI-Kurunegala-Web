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
INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2024-05-02 12:54:42');

-- Dumping structure for table srms.tblclasses
CREATE TABLE IF NOT EXISTS `tblclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(20) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblclasses: ~1 rows (approximately)
INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
	(1, 'HNDIT-2021', 0, '1st year 2st Semester', '2024-04-29 11:31:39', '2024-04-29 11:35:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblresult: ~6 rows (approximately)
INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
	(1, 1, 1, 2, 95, '2024-04-29 11:36:58', NULL),
	(2, 1, 1, 3, 89, '2024-04-29 11:36:58', NULL),
	(3, 1, 1, 1, 86, '2024-04-29 11:36:58', NULL),
	(4, 2, 1, 2, 90, '2024-05-05 05:42:32', NULL),
	(5, 2, 1, 3, 99, '2024-05-05 05:42:32', NULL),
	(6, 2, 1, 1, 60, '2024-05-05 05:42:32', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblstudents: ~2 rows (approximately)
INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
	(1, 'B.G.I.S.Wickramasinghe', '007', 'isuruwickramaisnghe.sliate@gmail.com', 'Male', '1999-04-27', 1, '2024-04-29 11:36:28', NULL, 1),
	(2, 'kaveesha lakshan abeywickrama', '0008', 'kaveesha2002lakshan2@gmail.com', 'Male', '2002-12-10', 1, '2024-05-05 05:41:53', NULL, 1);

-- Dumping structure for table srms.tblsubjectcombination
CREATE TABLE IF NOT EXISTS `tblsubjectcombination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblsubjectcombination: ~3 rows (approximately)
INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
	(1, 1, 1, 1, '2024-04-29 11:35:22', '2024-04-29 11:35:22'),
	(2, 1, 2, 1, '2024-04-29 11:35:28', '2024-04-29 11:35:28'),
	(3, 1, 3, 1, '2024-04-29 11:35:35', '2024-04-29 11:35:35');

-- Dumping structure for table srms.tblsubjects
CREATE TABLE IF NOT EXISTS `tblsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table srms.tblsubjects: ~3 rows (approximately)
INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
	(1, 'Software Develpemnt', 'HNDIT2022 ', '2024-04-29 11:30:48', '0000-00-00 00:00:00'),
	(2, 'Fundamentals of Programming', 'HNDIT2032 ', '2024-04-29 11:30:55', '0000-00-00 00:00:00'),
	(3, 'Principles of User Interface Design Summary', 'HNDIT2042 ', '2024-04-29 11:31:03', '0000-00-00 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
