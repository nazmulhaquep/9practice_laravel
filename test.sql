-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for lv9_project_test
CREATE DATABASE IF NOT EXISTS `lv9_project_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `lv9_project_test`;

-- Dumping structure for table lv9_project_test.chief_complaints
CREATE TABLE IF NOT EXISTS `chief_complaints` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `how_long` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.chief_complaints: ~0 rows (approximately)

-- Dumping structure for table lv9_project_test.codes
CREATE TABLE IF NOT EXISTS `codes` (
  `id` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `reg_code` varchar(50) DEFAULT NULL,
  `barcode` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table lv9_project_test.codes: ~33 rows (approximately)
INSERT INTO `codes` (`id`, `code`, `reg_code`, `barcode`, `status`) VALUES
	('AABBCCDD', '10000001', 'AABBCCDD10000001', 'iVBORw0KGgoAAAANSUhEUgAAAaYAAAAeAQMAAABdUSjsAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAEhJREFUOI3tyyEKwEAMBMCDtYH9SuBsHh+ILeQrhdiDVlT2C+vGzBoDYXlvZDYQZnSPT+cJ96lqkrHPqayLjYmlpaWlpaX1Wy/s53jvlm5ZXQAAAABJRU5ErkJggg==', 1),
	('AABBCCDE', '10000001', '', '', 2),
	('AABBCCDF', '10000001', '', '', 2),
	('AABBCCDG', '10000001', NULL, NULL, 2),
	('AABBCCDH', '10000001', NULL, NULL, 2),
	('AABBCCDI', '10000001', NULL, NULL, 2),
	('AABBCCDJ', '10000001', NULL, NULL, 2),
	('AABBCCDK', '10000001', NULL, NULL, 2),
	('AABBCCDL', '10000001', NULL, NULL, 2),
	('AABBCCDM', '10000001', NULL, NULL, 2),
	('AABBCCDN', '10000001', NULL, NULL, 2),
	('AABBCCDO', '10000001', NULL, NULL, 2),
	('AABBCCDP', '10000001', NULL, NULL, 2),
	('AABBCCDQ', '10000001', NULL, NULL, 2),
	('AABBCCDR', '10000001', NULL, NULL, 2),
	('AABBCCDS', '10000001', NULL, NULL, 2),
	('AABBCCDT', '10000001', NULL, NULL, 2),
	('AABBCCDU', '10000001', NULL, NULL, 2),
	('AABBCCDV', '10000001', NULL, NULL, 2),
	('AABBCCDW', '10000001', NULL, NULL, 2),
	('AABBCCDD', '10000004', 'AABBCCDD10000004', 'iVBORw0KGgoAAAANSUhEUgAAAaYAAAAeAQMAAABdUSjsAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAEdJREFUOI3ty7EJQDEIBcDAawVXEdI6vOAArvLBVkiKlH+F111zqwUKiW8jogAXUTN/muNmnVkq5nsmI6cL7YuLi4uLi+u3LnmCnMt/lpZZAAAAAElFTkSuQmCC', 1),
	('AABBCCDD', '10000003', 'AABBCCDD10000003', 'iVBORw0KGgoAAAANSUhEUgAAAaYAAAAeAQMAAABdUSjsAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAEdJREFUOI3ty7EJQDEIBcDAawVXEdI6vOAArhKwFZLil3+F111zqwUKibMRUYCLqJl/mutmnVkqdvZMRs4U2hcXFxcXF9dvPVNFsvHbcag0AAAAAElFTkSuQmCC', 1),
	('AABBCCDE', '10000002', '', '', 2),
	('AABBCCDE', '10000003', '', '', 2),
	('AABBCCDF', '10000002', '', '', 2),
	('AABBCCDG', '10000002', NULL, NULL, 2),
	('AABBCCDH', '10000002', NULL, NULL, 2),
	('AABBCCDI', '10000002', NULL, NULL, 2),
	('AABBCCDJ', '10000002', NULL, NULL, 2),
	('AABBCCDJ', '10000003', NULL, NULL, 2),
	('AABBCCDF', '10000003', '', '', 2),
	('AABBCCDF', '10000002', '', '', 2),
	('AABBCCDD', '10000002', 'AABBCCDD10000002', 'iVBORw0KGgoAAAANSUhEUgAAAaYAAAAeAQMAAABdUSjsAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAEhJREFUOI3ty7EJQDEIRdHAawVXEdI6vOAAWSVgKySBX/4V3q1uc0YJFBJ7ImIBLqJm/l0fN6vMpa/ZnZG2FeWDioqKiorqpy4pq2U/o/+OEwAAAABJRU5ErkJggg==', 1);

-- Dumping structure for table lv9_project_test.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table lv9_project_test.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.migrations: ~8 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_18_080319_create_chief_complaints_table', 1),
	(6, '2023_05_18_084215_create_patient_present_illnesses_table', 1),
	(7, '2023_05_18_092728_create_patient_past_illnesses_table', 1),
	(8, '2023_05_21_060937_create_patients_table', 1);

-- Dumping structure for table lv9_project_test.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.password_resets: ~0 rows (approximately)

-- Dumping structure for table lv9_project_test.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `PatientId` char(36) NOT NULL,
  `WorkPlaceId` varchar(255) NOT NULL,
  `WorkPlaceBranchId` varchar(255) NOT NULL,
  `PatientCode` varchar(255) NOT NULL,
  `RegistrationId` varchar(255) NOT NULL,
  `GivenName` varchar(255) NOT NULL,
  `FamilyName` varchar(255) NOT NULL,
  `GenderId` varchar(255) NOT NULL,
  `BirthDate` date NOT NULL,
  `Age` int(11) NOT NULL,
  `AgeYear` int(11) NOT NULL,
  `AgeMonth` int(11) NOT NULL,
  `AgeDay` int(11) NOT NULL,
  `JoiningDate` date NOT NULL,
  `ReligionId` varchar(255) NOT NULL,
  `RefDepartmentId` varchar(255) NOT NULL,
  `MaritalStatusId` varchar(255) NOT NULL,
  `EducationId` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `SpouseName` varchar(255) NOT NULL,
  `HeadOfFamilyId` varchar(255) NOT NULL,
  `IdNumber` varchar(255) NOT NULL,
  `CellNumber` varchar(255) NOT NULL,
  `FamilyMembers` int(11) NOT NULL,
  `ChildrenNumber` int(11) NOT NULL,
  `ChildAge0To1` int(11) NOT NULL,
  `ChildAge1To5` int(11) NOT NULL,
  `ChildAgeOver5` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `PatientImage` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateDate` datetime NOT NULL,
  `UpdateUser` varchar(255) NOT NULL,
  `OrgId` varchar(255) NOT NULL,
  `IsCalculatedBirthday` tinyint(4) NOT NULL,
  `usersID` bigint(20) NOT NULL,
  `IdType` varchar(255) NOT NULL,
  `OwnerId` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PatientId`),
  UNIQUE KEY `patients_workplaceid_unique` (`WorkPlaceId`),
  UNIQUE KEY `patients_workplacebranchid_unique` (`WorkPlaceBranchId`),
  UNIQUE KEY `patients_genderid_unique` (`GenderId`),
  UNIQUE KEY `patients_religionid_unique` (`ReligionId`),
  UNIQUE KEY `patients_refdepartmentid_unique` (`RefDepartmentId`),
  UNIQUE KEY `patients_maritalstatusid_unique` (`MaritalStatusId`),
  UNIQUE KEY `patients_educationid_unique` (`EducationId`),
  UNIQUE KEY `patients_headoffamilyid_unique` (`HeadOfFamilyId`),
  UNIQUE KEY `patients_orgid_unique` (`OrgId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.patients: ~0 rows (approximately)

-- Dumping structure for table lv9_project_test.patient_past_illnesses
CREATE TABLE IF NOT EXISTS `patient_past_illnesses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `past_illness` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.patient_past_illnesses: ~2 rows (approximately)
INSERT INTO `patient_past_illnesses` (`id`, `patient_id`, `past_illness`, `created_at`, `updated_at`) VALUES
	(38, '1', 'Hypertension', '2023-05-24 05:29:00', '2023-05-24 05:29:00'),
	(39, '1', 'Asthma', '2023-05-24 05:29:01', '2023-05-24 05:29:01');

-- Dumping structure for table lv9_project_test.patient_present_illnesses
CREATE TABLE IF NOT EXISTS `patient_present_illnesses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `present_illness` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.patient_present_illnesses: ~3 rows (approximately)
INSERT INTO `patient_present_illnesses` (`id`, `patient_id`, `present_illness`, `created_at`, `updated_at`) VALUES
	(90, '1', 'Hypertension', '2023-05-24 06:02:32', '2023-05-24 06:02:32'),
	(91, '1', 'Diabetes', '2023-05-24 06:02:32', '2023-05-24 06:02:32'),
	(92, '1', 'Asthma', '2023-05-24 06:02:32', '2023-05-24 06:02:32');

-- Dumping structure for table lv9_project_test.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table lv9_project_test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lv9_project_test.users: ~30 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Johnny Kutch Jr.', 'gkeebler@example.com', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lLCgIH26Wk', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(2, 'Piper Reilly', 'abraham.bins@example.org', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2xHAfDHS1c', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(3, 'Dr. Garret Braun III', 'fadel.lizzie@example.net', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dbaQWFBu9k', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(4, 'Prof. Savion Bogisich II', 'eklocko@example.com', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qw94WfTlvn', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(5, 'Haleigh Torp', 'gleason.shemar@example.net', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NtpJilQBT4', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(6, 'Betsy Murphy', 'jwilkinson@example.net', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sr8usxjory', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(7, 'Kayden Metz', 'ocie49@example.org', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4znyU7NLEY', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(8, 'Spencer Lebsack', 'dorris56@example.net', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SDlQzxsEz7', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(9, 'Prof. Israel Bahringer', 'lexus64@example.org', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd6BqEE3f4e', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(10, 'Miss Rosella Bosco', 'koconner@example.org', '2023-05-24 05:12:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M0rHi3hoSj', '2023-05-24 05:12:31', '2023-05-24 05:12:31'),
	(11, 'Kassandra Bogan', 'mateo.durgan@example.com', '2023-05-24 21:36:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eQFFHgUuna', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(12, 'Wyatt Ryan Jr.', 'daniel.georgette@example.net', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OY13VTbrTj', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(13, 'Jace Waters II', 'mark.koch@example.net', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ai4PqwjAHX', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(14, 'Alessia Feil', 'gussie18@example.net', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3LbI369Kub', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(15, 'Hailie Beer PhD', 'gerlach.jayde@example.com', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u3gNsj01my', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(16, 'Dr. Brennon Monahan Sr.', 'jblock@example.net', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'w0DZ0rOQLo', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(17, 'Stephania Blanda', 'ashleigh.bartoletti@example.org', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HgPuEv12ao', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(18, 'Letha Sawayn I', 'katelin35@example.org', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2LftE6UCqY', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(19, 'Barbara Mills', 'jasmin17@example.com', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7R9RuihVUj', '2023-05-24 21:36:14', '2023-05-24 21:36:14'),
	(20, 'Dr. Devonte Mayer', 'btowne@example.com', '2023-05-24 21:36:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TqyOFJQAen', '2023-05-24 21:36:15', '2023-05-24 21:36:15'),
	(21, 'Josefa Kris DDS', 'orlando.spencer@example.net', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RlT26tXQAM', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(22, 'Mckenna Herzog', 'mertz.zelma@example.com', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RcAb2LJe7t', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(23, 'Keven Legros', 'xbeatty@example.org', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jkKaxljTRV', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(24, 'Edison Dickinson Sr.', 'isai38@example.org', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1Q3p5TDAnP', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(25, 'Lesly Schoen', 'eleazar90@example.net', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CXfcd1Dn0l', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(26, 'Garnet Mills', 'fpollich@example.org', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XbKhQAV1E6', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(27, 'Irving Aufderhar', 'kuhlman.tobin@example.net', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2RvmrxJrdq', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(28, 'Brendan Rodriguez', 'casey72@example.com', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YEwgqZ0JcB', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(29, 'Shaina Dach DDS', 'xspinka@example.org', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'P3Rs9uQWvh', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(30, 'Sarina Walsh', 'ykunze@example.net', '2023-05-24 22:09:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yaYrJE5DLp', '2023-05-24 22:09:03', '2023-05-24 22:09:03'),
	(31, 'Nazmul', 'nazmul@gmail.com', NULL, '$2y$10$tqU7dK65BiU7nt0pke5QgOmcbz1KQG2tVbZE4pjoIDEIPeBfF0CbW', NULL, '2023-05-24 22:13:42', '2023-05-24 22:13:42');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
