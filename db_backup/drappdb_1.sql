-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 04:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drappdb`
--
CREATE DATABASE IF NOT EXISTS `drappdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `drappdb`;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` int(2) DEFAULT NULL,
  `app_type` varchar(255) DEFAULT NULL,
  `app_dt` datetime DEFAULT NULL,
  `app_tm_st` datetime DEFAULT NULL,
  `app_tm_end` datetime DEFAULT NULL,
  `app_pat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `app_pat_id` (`app_pat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `app_status`, `app_type`, `app_dt`, `app_tm_st`, `app_tm_end`, `app_pat_id`) VALUES
(1, 1, 'normal', '2024-03-26 00:00:00', '2024-03-26 09:00:00', '2024-03-26 09:30:00', 1),
(2, 0, 'normal', '2024-03-27 00:00:00', '2024-03-27 10:00:00', '2024-03-27 10:30:00', 2),
(3, 1, 'emergency', '2024-03-28 00:00:00', '2024-03-28 11:00:00', '2024-03-28 11:30:00', 3),
(4, 1, 'normal', '2024-03-29 00:00:00', '2024-03-29 14:00:00', '2024-03-29 14:30:00', 4),
(5, 0, 'normal', '2024-03-30 00:00:00', '2024-03-30 15:00:00', '2024-03-30 15:30:00', 5),
(6, 1, 'emergency', '2024-03-31 00:00:00', '2024-03-31 16:00:00', '2024-03-31 16:30:00', 6),
(7, 1, 'normal', '2024-04-01 00:00:00', '2024-04-01 17:00:00', '2024-04-01 17:30:00', 7),
(8, 0, 'normal', '2024-04-02 00:00:00', '2024-04-02 09:00:00', '2024-04-02 09:30:00', 8),
(9, 1, 'emergency', '2024-04-03 00:00:00', '2024-04-03 10:00:00', '2024-04-03 10:30:00', 9),
(10, 1, 'normal', '2024-04-04 00:00:00', '2024-04-04 11:00:00', '2024-04-04 11:30:00', 10),
(11, 0, 'normal', '2024-04-05 00:00:00', '2024-04-05 14:00:00', '2024-04-05 14:30:00', 11),
(12, 1, 'emergency', '2024-04-06 00:00:00', '2024-04-06 15:00:00', '2024-04-06 15:30:00', 12),
(13, 1, 'normal', '2024-04-07 00:00:00', '2024-04-07 16:00:00', '2024-04-07 16:30:00', 13),
(14, 0, 'normal', '2024-04-08 00:00:00', '2024-04-08 17:00:00', '2024-04-08 17:30:00', 14),
(15, 1, 'emergency', '2024-04-09 00:00:00', '2024-04-09 09:00:00', '2024-04-09 09:30:00', 15),
(16, 1, 'normal', '2024-04-10 00:00:00', '2024-04-10 10:00:00', '2024-04-10 10:30:00', 16),
(17, 0, 'normal', '2024-04-11 00:00:00', '2024-04-11 11:00:00', '2024-04-11 11:30:00', 17),
(18, 1, 'emergency', '2024-04-12 00:00:00', '2024-04-12 14:00:00', '2024-04-12 14:30:00', 18),
(19, 1, 'normal', '2024-04-13 00:00:00', '2024-04-13 15:00:00', '2024-04-13 15:30:00', 19),
(20, 0, 'normal', '2024-04-14 00:00:00', '2024-04-14 16:00:00', '2024-04-14 16:30:00', 20),
(21, 1, 'emergency', '2024-04-15 00:00:00', '2024-04-15 17:00:00', '2024-04-15 17:30:00', 21),
(22, 1, 'normal', '2024-04-16 00:00:00', '2024-04-16 09:00:00', '2024-04-16 09:30:00', 22),
(23, 0, 'normal', '2024-04-17 00:00:00', '2024-04-17 10:00:00', '2024-04-17 10:30:00', 23),
(24, 1, 'emergency', '2024-04-18 00:00:00', '2024-04-18 11:00:00', '2024-04-18 11:30:00', 24),
(25, 1, 'normal', '2024-04-19 00:00:00', '2024-04-19 14:00:00', '2024-04-19 14:30:00', 25),
(26, 0, 'normal', '2024-04-20 00:00:00', '2024-04-20 15:00:00', '2024-04-20 15:30:00', 26),
(27, 1, 'emergency', '2024-04-21 00:00:00', '2024-04-21 16:00:00', '2024-04-21 16:30:00', 27),
(28, 1, 'normal', '2024-04-22 00:00:00', '2024-04-22 17:00:00', '2024-04-22 17:30:00', 28),
(29, 0, 'normal', '2024-04-23 00:00:00', '2024-04-23 09:00:00', '2024-04-23 09:30:00', 29),
(30, 1, 'emergency', '2024-04-24 00:00:00', '2024-04-24 10:00:00', '2024-04-24 10:30:00', 30),
(31, 1, 'normal', '2024-04-25 00:00:00', '2024-04-25 11:00:00', '2024-04-25 11:30:00', 31),
(32, 0, 'normal', '2024-04-26 00:00:00', '2024-04-26 14:00:00', '2024-04-26 14:30:00', 32),
(33, 1, 'emergency', '2024-04-27 00:00:00', '2024-04-27 15:00:00', '2024-04-27 15:30:00', 33),
(34, 1, 'normal', '2024-04-28 00:00:00', '2024-04-28 16:00:00', '2024-04-28 16:30:00', 34),
(35, 0, 'normal', '2024-04-29 00:00:00', '2024-04-29 17:00:00', '2024-04-29 17:30:00', 35),
(36, 1, 'emergency', '2024-04-30 00:00:00', '2024-04-30 09:00:00', '2024-04-30 09:30:00', 36),
(37, 1, 'normal', '2024-05-01 00:00:00', '2024-05-01 10:00:00', '2024-05-01 10:30:00', 37),
(38, 0, 'normal', '2024-05-02 00:00:00', '2024-05-02 11:00:00', '2024-05-02 11:30:00', 38),
(39, 1, 'emergency', '2024-05-03 00:00:00', '2024-05-03 14:00:00', '2024-05-03 14:30:00', 39),
(40, 1, 'normal', '2024-05-04 00:00:00', '2024-05-04 15:00:00', '2024-05-04 15:30:00', 40),
(41, 0, 'normal', '2024-05-05 00:00:00', '2024-05-05 16:00:00', '2024-05-05 16:30:00', 41),
(42, 1, 'emergency', '2024-05-06 00:00:00', '2024-05-06 17:00:00', '2024-05-06 17:30:00', 42),
(43, 1, 'normal', '2024-05-07 00:00:00', '2024-05-07 09:00:00', '2024-05-07 09:30:00', 43),
(44, 0, 'normal', '2024-05-08 00:00:00', '2024-05-08 10:00:00', '2024-05-08 10:30:00', 44),
(45, 1, 'emergency', '2024-05-09 00:00:00', '2024-05-09 11:00:00', '2024-05-09 11:30:00', 45),
(46, 1, 'normal', '2024-05-10 00:00:00', '2024-05-10 14:00:00', '2024-05-10 14:30:00', 46),
(47, 0, 'normal', '2024-05-11 00:00:00', '2024-05-11 15:00:00', '2024-05-11 15:30:00', 47),
(48, 1, 'emergency', '2024-05-12 00:00:00', '2024-05-12 16:00:00', '2024-05-12 16:30:00', 48),
(49, 1, 'normal', '2024-05-13 00:00:00', '2024-05-13 17:00:00', '2024-05-13 17:30:00', 49),
(50, 0, 'normal', '2024-05-14 00:00:00', '2024-05-14 09:00:00', '2024-05-14 09:30:00', 50),
(51, 1, 'emergency', '2024-03-26 00:00:00', '2024-03-26 09:00:00', '2024-03-26 09:30:00', 1),
(52, 0, 'normal', '2024-03-26 00:00:00', '2024-03-26 10:00:00', '2024-03-26 10:30:00', 1),
(53, 1, 'normal', '2024-03-27 00:00:00', '2024-03-27 11:00:00', '2024-03-27 11:30:00', 2),
(54, 0, 'normal', '2024-03-27 00:00:00', '2024-03-27 14:00:00', '2024-03-27 14:30:00', 2),
(55, 1, 'emergency', '2024-03-28 00:00:00', '2024-03-28 15:00:00', '2024-03-28 15:30:00', 3),
(56, 0, 'normal', '2024-03-28 00:00:00', '2024-03-28 16:00:00', '2024-03-28 16:30:00', 3),
(57, 1, 'normal', '2024-03-29 00:00:00', '2024-03-29 17:00:00', '2024-03-29 17:30:00', 4),
(58, 0, 'normal', '2024-03-29 00:00:00', '2024-03-29 09:00:00', '2024-03-29 09:30:00', 4),
(59, 1, 'emergency', '2024-03-30 00:00:00', '2024-03-30 10:00:00', '2024-03-30 10:30:00', 5),
(60, 0, 'normal', '2024-03-30 00:00:00', '2024-03-30 11:00:00', '2024-03-30 11:30:00', 5),
(61, 1, 'normal', '2024-03-31 00:00:00', '2024-03-31 14:00:00', '2024-03-31 14:30:00', 6),
(62, 0, 'normal', '2024-03-31 00:00:00', '2024-03-31 15:00:00', '2024-03-31 15:30:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

DROP TABLE IF EXISTS `diagnosis`;
CREATE TABLE IF NOT EXISTS `diagnosis` (
  `diag_id` int(11) NOT NULL AUTO_INCREMENT,
  `diag_dt` datetime DEFAULT NULL,
  `diag_desc` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `diag_pat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`diag_id`),
  KEY `diag_pat_id` (`diag_pat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diag_id`, `diag_dt`, `diag_desc`, `doctor_name`, `diag_pat_id`) VALUES
(1, '2024-03-26 10:00:00', 'Cavity detected.', 'George Giannopoulos', 1),
(2, '2024-03-27 11:00:00', 'Gingivitis diagnosed.', 'Kwstas Markopoulos', 2),
(3, '2024-03-28 12:00:00', 'Toothache reported.', 'George Giannopoulos', 3),
(4, '2024-03-29 13:00:00', 'Root Canal needed due to severe infection.', 'Kwstas Markopoulos', 4),
(5, '2024-03-30 14:00:00', 'Bruxism diagnosed.', 'George Giannopoulos', 5),
(6, '2024-03-31 15:00:00', 'Periodontitis detected.', 'Kwstas Markopoulos', 6),
(7, '2024-04-01 16:00:00', 'Dental Abscess found.', 'George Giannopoulos', 7),
(8, '2024-04-02 17:00:00', 'Tooth Sensitivity reported.', 'Kwstas Markopoulos', 8),
(9, '2024-04-03 10:00:00', 'Tooth Fracture identified.', 'George Giannopoulos', 9),
(10, '2024-04-04 11:00:00', 'Gum Recession observed.', 'Kwstas Markopoulos', 10),
(11, '2024-04-05 12:00:00', 'Dental Erosion noted.', 'George Giannopoulos', 11),
(12, '2024-04-06 13:00:00', 'Halitosis diagnosed.', 'Kwstas Markopoulos', 12),
(13, '2024-04-07 14:00:00', 'Oral Cancer suspected.', 'George Giannopoulos', 13),
(14, '2024-04-08 15:00:00', 'Temporomandibular Joint Disorder diagnosed.', 'Kwstas Markopoulos', 14),
(15, '2024-04-09 16:00:00', 'Malocclusion identified.', 'George Giannopoulos', 15),
(16, '2024-04-10 17:00:00', 'Plaque buildup observed.', 'Kwstas Markopoulos', 16),
(17, '2024-04-11 10:00:00', 'Dental Caries detected.', 'George Giannopoulos', 17),
(18, '2024-04-12 11:00:00', 'Enamel Hypoplasia found.', 'Kwstas Markopoulos', 18),
(19, '2024-04-13 12:00:00', 'Mouth Ulcers diagnosed.', 'George Giannopoulos', 19),
(20, '2024-04-14 13:00:00', 'Gingival Hyperplasia observed.', 'Kwstas Markopoulos', 20),
(21, '2024-04-15 14:00:00', 'Xerostomia reported.', 'George Giannopoulos', 21),
(22, '2024-04-16 15:00:00', 'Tooth Abrasion identified.', 'Kwstas Markopoulos', 22),
(23, '2024-04-17 16:00:00', 'Wisdom Tooth Impaction noted.', 'George Giannopoulos', 23),
(24, '2024-04-18 17:00:00', 'Dental Fluorosis diagnosed.', 'Kwstas Markopoulos', 24),
(25, '2024-04-19 10:00:00', 'Dental Hyperesthesia reported.', 'George Giannopoulos', 25),
(26, '2024-04-20 11:00:00', 'Dental Malocclusion detected.', 'Kwstas Markopoulos', 26),
(27, '2024-04-21 12:00:00', 'Teething Troubles observed.', 'George Giannopoulos', 27),
(28, '2024-04-22 13:00:00', 'Pericoronitis diagnosed.', 'Kwstas Markopoulos', 28),
(29, '2024-04-23 14:00:00', 'Dental Plaque identified.', 'George Giannopoulos', 29),
(30, '2024-04-24 15:00:00', 'Tooth Attrition noted.', 'Kwstas Markopoulos', 30),
(31, '2024-04-25 16:00:00', 'Alveolar Osteitis diagnosed.', 'George Giannopoulos', 31),
(32, '2024-04-26 17:00:00', 'Ankylosis suspected.', 'Kwstas Markopoulos', 32),
(33, '2024-04-27 10:00:00', 'Dental Hypersensitivity reported.', 'George Giannopoulos', 33),
(34, '2024-04-28 11:00:00', 'Dental Calculus detected.', 'Kwstas Markopoulos', 34),
(35, '2024-04-29 12:00:00', 'Oral Thrush observed.', 'George Giannopoulos', 35),
(36, '2024-04-30 13:00:00', 'Tooth Enamel Erosion noted.', 'Kwstas Markopoulos', 36),
(37, '2024-05-01 14:00:00', 'Hypodontia diagnosed.', 'George Giannopoulos', 37),
(38, '2024-05-02 15:00:00', 'Stomatitis reported.', 'Kwstas Markopoulos', 38),
(39, '2024-05-03 16:00:00', 'Hypersalivation observed.', 'George Giannopoulos', 39),
(40, '2024-05-04 17:00:00', 'Tooth Resorption suspected.', 'Kwstas Markopoulos', 40),
(41, '2024-05-05 10:00:00', 'Trench Mouth diagnosed.', 'George Giannopoulos', 41),
(42, '2024-05-06 11:00:00', 'Dental Pulp Calcification found.', 'Kwstas Markopoulos', 42),
(43, '2024-05-07 12:00:00', 'Amelogenesis Imperfecta detected.', 'George Giannopoulos', 43),
(44, '2024-05-08 13:00:00', 'Dentin Hypersensitivity reported.', 'Kwstas Markopoulos', 44),
(45, '2024-05-09 14:00:00', 'Dry Socket diagnosed.', 'George Giannopoulos', 45),
(46, '2024-05-10 15:00:00', 'Tooth Discoloration observed.', 'Kwstas Markopoulos', 46),
(47, '2024-05-11 16:00:00', 'Dental Trauma suspected.', 'George Giannopoulos', 47),
(48, '2024-05-12 17:00:00', 'Peri-implantitis diagnosed.', 'Kwstas Markopoulos', 48),
(49, '2024-05-13 10:00:00', 'Dentigerous Cyst found.', 'George Giannopoulos', 49),
(50, '2024-05-14 11:00:00', 'Tooth Impaction observed.', 'Kwstas Markopoulos', 50),
(51, '2024-05-15 12:00:00', 'Oral Lesion identified.', 'George Giannopoulos', 1),
(52, '2024-05-16 13:00:00', 'Dental Caries detected.', 'Kwstas Markopoulos', 2),
(53, '2024-05-17 14:00:00', 'Tooth Abscess diagnosed.', 'George Giannopoulos', 3),
(54, '2024-05-18 15:00:00', 'Dental Injury reported.', 'Kwstas Markopoulos', 4),
(55, '2024-05-19 16:00:00', 'Orthodontic issues observed.', 'George Giannopoulos', 5),
(56, '2024-05-20 17:00:00', 'Tooth Extraction recommended.', 'Kwstas Markopoulos', 6),
(57, '2024-05-21 10:00:00', 'Periodontal Disease diagnosed.', 'George Giannopoulos', 7),
(58, '2024-05-22 11:00:00', 'Gum Disease observed.', 'Kwstas Markopoulos', 8),
(59, '2024-05-23 12:00:00', 'Impacted Wisdom Teeth identified.', 'George Giannopoulos', 9),
(60, '2024-05-24 13:00:00', 'Tooth Decay detected.', 'Kwstas Markopoulos', 10);

-- --------------------------------------------------------

--
-- Table structure for table `financial_transactions`
--

DROP TABLE IF EXISTS `financial_transactions`;
CREATE TABLE IF NOT EXISTS `financial_transactions` (
  `fin_tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `fin_tr_dt` datetime DEFAULT NULL,
  `fin_tr_type` varchar(255) DEFAULT NULL,
  `fin_tr_amount` decimal(10,2) DEFAULT NULL,
  `fin_pat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fin_tr_id`),
  KEY `fin_pat_id` (`fin_pat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_transactions`
--

INSERT INTO `financial_transactions` (`fin_tr_id`, `fin_tr_dt`, `fin_tr_type`, `fin_tr_amount`, `fin_pat_id`) VALUES
(1, '2024-03-26 09:15:00', 'payment', 100.00, 1),
(2, '2024-03-27 10:30:00', 'payment', 150.00, 2),
(3, '2024-03-28 11:45:00', 'payment', 200.00, 3),
(4, '2024-03-29 12:00:00', 'debt', 50.00, 4),
(5, '2024-03-30 13:15:00', 'payment', 120.00, 5),
(6, '2024-03-31 14:30:00', 'debt', 75.00, 6),
(7, '2024-04-01 15:45:00', 'payment', 180.00, 7),
(8, '2024-04-02 16:00:00', 'payment', 90.00, 8),
(9, '2024-04-03 09:15:00', 'debt', 60.00, 9),
(10, '2024-04-04 10:30:00', 'payment', 200.00, 10),
(11, '2024-04-05 11:45:00', 'payment', 150.00, 11),
(12, '2024-04-06 12:00:00', 'debt', 30.00, 12),
(13, '2024-04-07 13:15:00', 'payment', 100.00, 13),
(14, '2024-04-08 14:30:00', 'debt', 80.00, 14),
(15, '2024-04-09 15:45:00', 'payment', 175.00, 15),
(16, '2024-04-10 16:00:00', 'payment', 120.00, 16),
(17, '2024-04-11 09:15:00', 'debt', 40.00, 17),
(18, '2024-04-12 10:30:00', 'payment', 190.00, 18),
(19, '2024-04-13 11:45:00', 'payment', 220.00, 19),
(20, '2024-04-14 12:00:00', 'debt', 65.00, 20),
(21, '2024-04-15 13:15:00', 'payment', 130.00, 21),
(22, '2024-04-16 14:30:00', 'debt', 50.00, 22),
(23, '2024-04-17 15:45:00', 'payment', 200.00, 23),
(24, '2024-04-18 16:00:00', 'payment', 90.00, 24),
(25, '2024-04-19 09:15:00', 'debt', 70.00, 25),
(26, '2024-04-20 10:30:00', 'payment', 150.00, 26),
(27, '2024-04-21 11:45:00', 'payment', 180.00, 27),
(28, '2024-04-22 12:00:00', 'debt', 35.00, 28),
(29, '2024-04-23 13:15:00', 'payment', 100.00, 29),
(30, '2024-04-24 14:30:00', 'debt', 60.00, 30),
(31, '2024-04-25 15:45:00', 'payment', 175.00, 31),
(32, '2024-04-26 16:00:00', 'payment', 110.00, 32),
(33, '2024-04-27 09:15:00', 'debt', 45.00, 33),
(34, '2024-04-28 10:30:00', 'payment', 200.00, 34),
(35, '2024-04-29 11:45:00', 'payment', 160.00, 35),
(36, '2024-04-30 12:00:00', 'debt', 85.00, 36),
(37, '2024-05-01 13:15:00', 'payment', 140.00, 37),
(38, '2024-05-02 14:30:00', 'debt', 55.00, 38),
(39, '2024-05-03 15:45:00', 'payment', 190.00, 39),
(40, '2024-05-04 16:00:00', 'payment', 95.00, 40),
(41, '2024-05-05 09:15:00', 'debt', 75.00, 41),
(42, '2024-05-06 10:30:00', 'payment', 170.00, 42),
(43, '2024-05-07 11:45:00', 'payment', 210.00, 43),
(44, '2024-05-08 12:00:00', 'debt', 25.00, 44),
(45, '2024-05-09 13:15:00', 'payment', 120.00, 45),
(46, '2024-05-10 14:30:00', 'debt', 90.00, 46),
(47, '2024-05-11 15:45:00', 'payment', 160.00, 47),
(48, '2024-05-12 16:00:00', 'payment', 100.00, 48),
(49, '2024-05-13 09:15:00', 'debt', 55.00, 49),
(50, '2024-05-14 10:30:00', 'payment', 180.00, 50);

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

DROP TABLE IF EXISTS `medical_record`;
CREATE TABLE IF NOT EXISTS `medical_record` (
  `mdr_id` int(11) NOT NULL AUTO_INCREMENT,
  `mdr_desc` varchar(255) DEFAULT NULL,
  `mdr_pat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mdr_id`),
  KEY `mdr_pat_id` (`mdr_pat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`mdr_id`, `mdr_desc`, `mdr_pat_id`) VALUES
(1, 'Cavity', 1),
(2, 'Gingivitis', 2),
(3, 'Toothache', 3),
(4, 'Root Canal', 4),
(5, 'Bruxism', 5),
(6, 'Periodontitis', 6),
(7, 'Dental Abscess', 7),
(8, 'Tooth Sensitivity', 8),
(9, 'Tooth Fracture', 9),
(10, 'Gum Recession', 10),
(11, 'Dental Erosion', 11),
(12, 'Halitosis', 12),
(13, 'Oral Cancer', 13),
(14, 'Temporomandibular Joint Disorder', 14),
(15, 'Malocclusion', 15),
(16, 'Plaque', 16),
(17, 'Dental Caries', 17),
(18, 'Enamel Hypoplasia', 18),
(19, 'Mouth Ulcers', 19),
(20, 'Gingival Hyperplasia', 20),
(21, 'Xerostomia', 21),
(22, 'Tooth Abrasion', 22),
(23, 'Bruxism', 23),
(24, 'Wisdom Tooth Impaction', 24),
(25, 'Dental Fluorosis', 25),
(26, 'Dental Hyperesthesia', 26),
(27, 'Dental Malocclusion', 27),
(28, 'Teething Troubles', 28),
(29, 'Pericoronitis', 29),
(30, 'Dental Plaque', 30),
(31, 'Tooth Attrition', 31),
(32, 'Alveolar Osteitis', 32),
(33, 'Ankylosis', 33),
(34, 'Dental Hypersensitivity', 34),
(35, 'Dental Calculus', 35),
(36, 'Oral Thrush', 36),
(37, 'Tooth Enamel Erosion', 37),
(38, 'Hypodontia', 38),
(39, 'Stomatitis', 39),
(40, 'Hypersalivation', 40),
(41, 'Tooth Resorption', 41),
(42, 'Trench Mouth', 42),
(43, 'Dental Pulp Calcification', 43),
(44, 'Amelogenesis Imperfecta', 44),
(45, 'Dentin Hypersensitivity', 45),
(46, 'Dry Socket', 46),
(47, 'Tooth Discoloration', 47),
(48, 'Dental Trauma', 48),
(49, 'Peri-implantitis', 49),
(50, 'Dentigerous Cyst', 50);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pat_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_name` varchar(255) DEFAULT NULL,
  `pat_surname` varchar(255) DEFAULT NULL,
  `pat_apoint_valid` tinyint(1) DEFAULT NULL,
  `pat_address` varchar(255) DEFAULT NULL,
  `pat_tel` bigint(20) DEFAULT NULL,
  `pat_birth` date DEFAULT NULL,
  `pat_amk` bigint(20) DEFAULT NULL,
  `pat_us_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pat_id`),
  KEY `fk_pat_user` (`pat_us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `pat_name`, `pat_surname`, `pat_apoint_valid`, `pat_address`, `pat_tel`, `pat_birth`, `pat_amk`, `pat_us_id`) VALUES
(1, 'George', 'Papadopoulos', 1, '15 Athens St, Athens', 6981234567, '1975-04-22', 12345678901, 6),
(2, 'Anastasia', 'Konstantinidou', 0, '10 Thessaloniki St, Thessaloniki', 6982345678, '1988-09-15', 23456789012, 7),
(3, 'Dimitrios', 'Georgiou', 1, '20 Patras St, Patras', 6983456789, '1963-12-05', 34567890123, 8),
(4, 'Eleni', 'Kyriakopoulou', 0, '5 Constantinople St, Heraklion', 6984567890, '1978-07-18', 45678901234, 9),
(5, 'Alexander', 'Demetriou', 1, '30 Democracy Ave, Patras', 6985678901, '1995-03-10', 56789012345, 10),
(6, 'Sophia', 'Panagiotou', 1, '25 Kifissias Ave, Athens', 6986789012, '1969-11-28', 67890123456, 11),
(7, 'Panagiotis', 'Nikolaou', 0, '12 National Resistance St, Thessaloniki', 6987890123, '1982-05-07', 78901234567, 12),
(8, 'Maria', 'Papandreou', 1, '8 Papaflessa St, Athens', 6988901234, '1972-08-14', 89012345678, 13),
(9, 'Constantine', 'Dimitrakopoulos', 0, '17 Agias Sofias St, Thessaloniki', 6989012345, '1990-02-20', 90123456789, 14),
(10, 'Vasiliki', 'Andreadou', 1, '22 Aristotelous St, Thessaloniki', 6989123456, '1985-06-30', 91234567890, 15),
(11, 'Nikos', 'Papanikolaou', 0, '3 Ionias St, Larissa', 6989234567, '1970-10-12', 92345678901, 16),
(12, 'Elena', 'Papadopoulou', 1, '7 Leoforos Posidonos, Piraeus', 6989345678, '1983-01-25', 93456789012, 17),
(13, 'Andreas', 'Georgiou', 0, '9 Alexandras Ave, Thessaloniki', 6989456789, '1976-12-08', 94567890123, 18),
(14, 'Maria', 'Konstantinou', 1, '14 Dimokratias St, Heraklion', 6989567890, '1992-04-17', 95678901234, 19),
(15, 'Dimitra', 'Papadaki', 0, '19 Ermou St, Athens', 6989678901, '1980-09-03', 96789012345, 20),
(16, 'Stavros', 'Nikolaidis', 1, '11 El Venizelou St, Thessaloniki', 6989789012, '1974-07-22', 97890123456, 21),
(17, 'Ioanna', 'Papageorgiou', 0, '16 Solomou St, Patras', 6989890123, '1987-05-14', 98901234567, 22),
(18, 'Christos', 'Papadimitriou', 1, '28 Ethnikis Antistaseos St, Athens', 6989901234, '1979-02-28', 99012345678, 23),
(19, 'Katerina', 'Koutroumpa', 0, '32 Egnatia St, Thessaloniki', 6989912345, '1965-11-07', 99123456789, 24),
(20, 'Dimitrios', 'Karagiannis', 1, '6 Korai St, Heraklion', 6989923456, '1989-08-10', 99234567890, 25),
(21, 'Despina', 'Antoniadou', 0, '1 Omirou St, Patras', 6989934567, '1973-03-19', 99345678901, 26),
(22, 'Yannis', 'Papadopoulos', 1, '4 Leoforos Stratou, Athens', 6989945678, '1994-01-01', 99456789012, 27),
(23, 'Georgia', 'Konstantinou', 0, '8 Othonos St, Thessaloniki', 6989956789, '1981-06-05', 99567890123, 28),
(24, 'Kostas', 'Papageorgiou', 1, '18 Ploutarchou St, Patras', 6989967890, '1977-09-23', 99678901234, 29),
(25, 'Vasilis', 'Georgiadis', 0, '2 Tsimiski St, Thessaloniki', 6989978901, '1984-04-15', 99789012345, 30),
(26, 'Eirini', 'Papandreou', 1, '24 Papanastasiou St, Athens', 6989989012, '1971-12-03', 99890123456, 31),
(27, 'Nikolaos', 'Papanastasiou', 0, '26 Kallidromiou St, Larissa', 6989990123, '1968-08-18', 99901234567, 32),
(28, 'Marina', 'Papadopoulou', 1, '3 Zinonos St, Heraklion', 6989991234, '1993-05-26', 99912345678, 33),
(29, 'Dimitris', 'Papageorgiou', 0, '5 Venizelou St, Patras', 6989992345, '1986-02-09', 99923456789, 34),
(30, 'Eleni', 'Georgiou', 1, '7 Mavromichali St, Athens', 6989993456, '1975-10-14', 99934567890, 35),
(31, 'Giorgos', 'Papanikolaou', 0, '9 Navarinou St, Thessaloniki', 6989994567, '1980-04-27', 99945678901, 36),
(32, 'Katerina', 'Nikolaou', 1, '13 Riga Feraiou St, Patras', 6989995678, '1967-11-30', 99956789012, 37),
(33, 'Nikos', 'Papadakis', 0, '22 Kastritsiou St, Heraklion', 6989996789, '1979-07-12', 99967890123, 38),
(34, 'Eirini', 'Papandreou', 1, '24 Papanastasiou St, Athens', 6989997890, '1986-03-25', 99978901234, 39),
(35, 'Giannis', 'Papageorgiou', 0, '26 Voulis St, Thessaloniki', 6989998901, '1973-09-08', 99989012345, 40),
(36, 'Maria', 'Georgiadou', 1, '28 Kifissias Ave, Patras', 6989999012, '1990-05-14', 99990123456, 41),
(37, 'Stavroula', 'Nikolaou', 0, '30 Sofokli Venizelou St, Heraklion', 6989990123, '1978-01-27', 99991012345, 42),
(38, 'Dimitris', 'Papadopoulos', 1, '32 Ermou St, Athens', 6989991234, '1984-08-03', 99991234567, 43),
(39, 'Eleni', 'Papadopoulou', 0, '34 Leoforos Kifisias, Thessaloniki', 6989992345, '1965-12-17', 99992345678, 44),
(40, 'Nikolaos', 'Papanikolaou', 1, '36 Aristotelous St, Patras', 6989993456, '1972-06-20', 99993456789, 45),
(41, 'Katerina', 'Papageorgiou', 0, '38 Ethnikis Antistaseos St, Heraklion', 6989994567, '1989-03-14', 99994567890, 46),
(42, 'Panagiotis', 'Georgiou', 1, '40 Dimokratias St, Athens', 6989995678, '1976-10-08', 99995678901, 47),
(43, 'Christina', 'Nikolaou', 0, '42 Eleftheriou Venizelou St, Thessaloniki', 6989996789, '1981-07-22', 99996789012, 48),
(44, 'Giorgos', 'Papadakis', 1, '44 Solomou St, Patras', 6989997890, '1994-02-05', 99997890123, 49),
(45, 'Eleni', 'Papadimitriou', 0, '46 Konstantinou Karamanli St, Heraklion', 6989998901, '1970-11-28', 99998901234, 50),
(46, 'Nikos', 'Papageorgiou', 1, '48 Agiou Mina St, Athens', 6989999012, '1987-09-10', 99999012345, 51),
(47, 'Maria', 'Georgiou', 0, '50 Kallidromiou St, Thessaloniki', 6989990123, '1975-04-03', 99999123456, 52),
(48, 'Dimitris', 'Papanikolaou', 1, '52 Kifissias Ave, Patras', 6989991234, '1991-12-17', 99999234567, 53),
(49, 'Eirini', 'Papadopoulou', 0, '54 Ethnikis Antistaseos St, Heraklion', 6989992345, '1988-08-25', 99999345678, 54),
(50, 'Giannis', 'Georgiadis', 1, '56 Leoforos Syngrou, Athens', 6989993456, '1973-03-11', 99999456789, 55),
(51, 'Maria', 'Papadimitriou', 0, '58 Tsimiski St, Thessaloniki', 6989994567, '1969-10-27', 99999567890, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL,
  `role_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_desc`) VALUES
(1, 'Normal User'),
(2, 'Doctor'),
(3, 'Receptionist'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
CREATE TABLE IF NOT EXISTS `treatment` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_desc` varchar(255) DEFAULT NULL,
  `tr_st_dt` datetime DEFAULT NULL,
  `tr_end_dt` datetime DEFAULT NULL,
  `tr_diag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `tr_diag_id` (`tr_diag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`tr_id`, `tr_desc`, `tr_st_dt`, `tr_end_dt`, `tr_diag_id`) VALUES
(1, 'Fill cavity with composite resin', '2024-03-26 10:30:00', '2024-03-26 11:30:00', 1),
(2, 'Gingivectomy surgery', '2024-03-28 13:00:00', '2024-03-28 15:00:00', 2),
(3, 'Prescription of pain relievers and antibiotics', '2024-03-29 14:00:00', '2024-03-30 14:00:00', 3),
(4, 'Root canal therapy', '2024-03-30 14:30:00', '2024-03-31 17:00:00', 4),
(5, 'Prescription of mouthguard for bruxism', '2024-03-31 17:30:00', '2024-04-01 17:30:00', 5),
(6, 'Scaling and root planing', '2024-04-01 18:00:00', '2024-04-02 18:00:00', 6),
(7, 'Incision and drainage of dental abscess', '2024-04-02 18:30:00', '2024-04-03 18:30:00', 7),
(8, 'Desensitizing toothpaste recommendation', '2024-04-03 19:00:00', '2024-04-04 19:00:00', 8),
(9, 'Dental bonding to restore fractured tooth', '2024-04-04 19:30:00', '2024-04-05 19:30:00', 9),
(10, 'Gum graft surgery to correct recession', '2024-04-05 20:00:00', '2024-04-06 20:00:00', 10),
(11, 'Application of fluoride varnish', '2024-04-06 20:30:00', '2024-04-07 20:30:00', 11),
(12, 'Prescription of antimicrobial mouthwash', '2024-04-07 21:00:00', '2024-04-08 21:00:00', 12),
(13, 'Referral to oral surgeon for biopsy', '2024-04-08 21:30:00', '2024-04-09 21:30:00', 13),
(14, 'Prescription of muscle relaxants and pain relievers', '2024-04-09 22:00:00', '2024-04-10 22:00:00', 14),
(15, 'Orthodontic braces placement', '2024-04-10 22:30:00', '2024-04-11 22:30:00', 15),
(16, 'Professional dental cleaning', '2024-04-11 23:00:00', '2024-04-12 23:00:00', 16),
(17, 'Dental filling procedure', '2024-04-12 23:30:00', '2024-04-13 23:30:00', 17),
(18, 'Application of enamel microabrasion', '2024-04-13 00:00:00', '2024-04-14 00:00:00', 18),
(19, 'Topical corticosteroid ointment for mouth ulcers', '2024-04-14 00:30:00', '2024-04-15 00:30:00', 19),
(20, 'Surgical removal of gingival hyperplasia', '2024-04-15 01:00:00', '2024-04-16 01:00:00', 20),
(21, 'Recommendation of saliva substitutes', '2024-04-16 01:30:00', '2024-04-17 01:30:00', 21),
(22, 'Polishing of tooth surfaces', '2024-04-17 02:00:00', '2024-04-18 02:00:00', 22),
(23, 'Surgical extraction of impacted wisdom tooth', '2024-04-18 02:30:00', '2024-04-19 02:30:00', 23),
(24, 'Application of dental fluorosis treatment', '2024-04-19 03:00:00', '2024-04-20 03:00:00', 24),
(25, 'Use of desensitizing toothpaste and fluoride gel', '2024-04-20 03:30:00', '2024-04-21 03:30:00', 25),
(26, 'Orthodontic treatment planning', '2024-04-21 04:00:00', '2024-04-22 04:00:00', 26),
(27, 'Recommendation of teething gel for discomfort', '2024-04-22 04:30:00', '2024-04-23 04:30:00', 27),
(28, 'Antibiotics and warm saltwater rinses for pericoronitis', '2024-04-23 05:00:00', '2024-04-24 05:00:00', 28),
(29, 'Professional dental plaque removal', '2024-04-24 05:30:00', '2024-04-25 05:30:00', 29),
(30, 'Use of dental night guard to prevent tooth attrition', '2024-04-25 06:00:00', '2024-04-26 06:00:00', 30),
(31, 'Treatment of alveolar osteitis with medicated dressing', '2024-04-26 06:30:00', '2024-04-27 06:30:00', 31),
(32, 'Referral to oral surgeon for suspected ankylosis', '2024-04-27 07:00:00', '2024-04-28 07:00:00', 32),
(33, 'Desensitizing dental treatments', '2024-04-28 07:30:00', '2024-04-29 07:30:00', 33),
(34, 'Scaling and root planing for calculus removal', '2024-04-29 08:00:00', '2024-04-30 08:00:00', 34),
(35, 'Antifungal medication for oral thrush treatment', '2024-04-30 08:30:00', '2024-05-01 08:30:00', 35),
(36, 'Enamel microabrasion for tooth enamel erosion', '2024-05-01 09:00:00', '2024-05-02 09:00:00', 36),
(37, 'Treatment planning for hypodontia', '2024-05-02 09:30:00', '2024-05-03 09:30:00', 37),
(38, 'Antibiotics and antifungal medication for stomatitis', '2024-05-03 10:00:00', '2024-05-04 10:00:00', 38),
(39, 'Recommendation of saliva-controlling medications', '2024-05-04 10:30:00', '2024-05-05 10:30:00', 39),
(40, 'Root canal therapy for tooth resorption', '2024-05-05 11:00:00', '2024-05-06 11:00:00', 40),
(41, 'Antibiotics and antiseptic mouthwash for trench mouth', '2024-05-06 11:30:00', '2024-05-07 11:30:00', 41),
(42, 'Application of fluoride gel for dental pulp calcification', '2024-05-07 12:00:00', '2024-05-08 12:00:00', 42),
(43, 'Placement of dental crowns for amelogenesis imperfecta', '2024-05-08 12:30:00', '2024-05-09 12:30:00', 43),
(44, 'Desensitizing toothpaste and fluoride varnish for dentin hypersensitivity', '2024-05-09 13:00:00', '2024-05-10 13:00:00', 44),
(45, 'Socket preservation procedure for dry socket', '2024-05-10 13:30:00', '2024-05-11 13:30:00', 45),
(46, 'Teeth whitening treatment for tooth discoloration', '2024-05-11 14:00:00', '2024-05-12 14:00:00', 46),
(47, 'Oral examination and dental radiographs for dental trauma', '2024-05-12 14:30:00', '2024-05-13 14:30:00', 47),
(48, 'Prescription of antibiotics and antiseptic mouthwash for peri-implantitis', '2024-05-13 15:00:00', '2024-05-14 15:00:00', 48),
(49, 'Surgical removal of dentigerous cyst', '2024-05-14 15:30:00', '2024-05-15 15:30:00', 49),
(50, 'Oral surgery for impacted tooth extraction', '2024-05-15 16:00:00', '2024-05-16 16:00:00', 50),
(51, 'Chemical plaque control for oral hygiene maintenance', '2024-05-16 16:30:00', '2024-05-17 16:30:00', 51),
(52, 'Orthodontic adjustment and wire changes', '2024-05-17 17:00:00', '2024-05-18 17:00:00', 52),
(53, 'Gum grafting surgery for recession coverage', '2024-05-18 17:30:00', '2024-05-19 17:30:00', 53),
(54, 'Teeth polishing and fluoride application', '2024-05-19 18:00:00', '2024-05-20 18:00:00', 54),
(55, 'Antimicrobial therapy for periodontal disease', '2024-05-20 18:30:00', '2024-05-21 18:30:00', 55),
(56, 'Dental sealants for cavity prevention', '2024-05-21 19:00:00', '2024-05-22 19:00:00', 56),
(57, 'Surgical extraction of impacted third molars', '2024-05-22 19:30:00', '2024-05-23 19:30:00', 57),
(58, 'Orthognathic surgery for malocclusion correction', '2024-05-23 20:00:00', '2024-05-24 20:00:00', 58),
(59, 'Periodontal flap surgery for pocket reduction', '2024-05-24 20:30:00', '2024-05-25 20:30:00', 59),
(60, 'Dental implant placement for missing teeth restoration', '2024-05-25 21:00:00', '2024-05-26 21:00:00', 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_tel` bigint(20) DEFAULT NULL,
  `us_role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `us_role_id` (`us_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `user_tel`, `us_role_id`) VALUES
(1, 'admin', 'admin_password', 'admin@example.com', 6981234567, 4),
(2, 'receptionist1', 'receptionist1_password', 'receptionist1@example.com', 6981234568, 3),
(3, 'receptionist2', 'receptionist2_password', 'receptionist2@example.com', 6981234569, 3),
(4, 'doctor1', 'doctor1_password', 'doctor1@example.com', 6981234570, 2),
(5, 'doctor2', 'doctor2_password', 'doctor2@example.com', 6981234571, 2),
(6, 'user1', 'user1_password', 'user1@example.com', 6981234572, 1),
(7, 'user2', 'user2_password', 'user2@example.com', 6981234573, 1),
(8, 'user3', 'user3_password', 'user3@example.com', 6981234574, 1),
(9, 'user4', 'user4_password', 'user4@example.com', 6981234575, 1),
(10, 'user5', 'user5_password', 'user5@example.com', 6981234576, 1),
(11, 'user6', 'user6_password', 'user6@example.com', 6981234577, 1),
(12, 'user7', 'user7_password', 'user7@example.com', 6981234578, 1),
(13, 'user8', 'user8_password', 'user8@example.com', 6981234579, 1),
(14, 'user9', 'user9_password', 'user9@example.com', 6981234580, 1),
(15, 'user10', 'user10_password', 'user10@example.com', 6981234581, 1),
(16, 'user11', 'user11_password', 'user11@example.com', 6981234582, 1),
(17, 'user12', 'user12_password', 'user12@example.com', 6981234583, 1),
(18, 'user13', 'user13_password', 'user13@example.com', 6981234584, 1),
(19, 'user14', 'user14_password', 'user14@example.com', 6981234585, 1),
(20, 'user15', 'user15_password', 'user15@example.com', 6981234586, 1),
(21, 'user16', 'user16_password', 'user16@example.com', 6981234587, 1),
(22, 'user17', 'user17_password', 'user17@example.com', 6981234588, 1),
(23, 'user18', 'user18_password', 'user18@example.com', 6981234589, 1),
(24, 'user19', 'user19_password', 'user19@example.com', 6981234590, 1),
(25, 'user20', 'user20_password', 'user20@example.com', 6981234591, 1),
(26, 'user21', 'user21_password', 'user21@example.com', 6981234592, 1),
(27, 'user22', 'user22_password', 'user22@example.com', 6981234593, 1),
(28, 'user23', 'user23_password', 'user23@example.com', 6981234594, 1),
(29, 'user24', 'user24_password', 'user24@example.com', 6981234595, 1),
(30, 'user25', 'user25_password', 'user25@example.com', 6981234596, 1),
(31, 'user26', 'user26_password', 'user26@example.com', 6981234597, 1),
(32, 'user27', 'user27_password', 'user27@example.com', 6981234598, 1),
(33, 'user28', 'user28_password', 'user28@example.com', 6981234599, 1),
(34, 'user29', 'user29_password', 'user29@example.com', 6981234600, 1),
(35, 'user30', 'user30_password', 'user30@example.com', 6981234601, 1),
(36, 'user31', 'user31_password', 'user31@example.com', 6981234602, 1),
(37, 'user32', 'user32_password', 'user32@example.com', 6981234603, 1),
(38, 'user33', 'user33_password', 'user33@example.com', 6981234604, 1),
(39, 'user34', 'user34_password', 'user34@example.com', 6981234605, 1),
(40, 'user35', 'user35_password', 'user35@example.com', 6981234606, 1),
(41, 'user36', 'user36_password', 'user36@example.com', 6981234607, 1),
(42, 'user37', 'user37_password', 'user37@example.com', 6981234608, 1),
(43, 'user38', 'user38_password', 'user38@example.com', 6981234609, 1),
(44, 'user39', 'user39_password', 'user39@example.com', 6981234610, 1),
(45, 'user40', 'user40_password', 'user40@example.com', 6981234611, 1),
(46, 'user41', 'user41_password', 'user41@example.com', 6981234612, 1),
(47, 'user42', 'user42_password', 'user42@example.com', 6981234613, 1),
(48, 'user43', 'user43_password', 'user43@example.com', 6981234614, 1),
(49, 'user44', 'user44_password', 'user44@example.com', 6981234615, 1),
(50, 'user45', 'user45_password', 'user45@example.com', 6981234616, 1),
(51, 'user46', 'user46_password', 'user46@example.com', 6981234617, 1),
(52, 'user47', 'user47_password', 'user47@example.com', 6981234618, 1),
(53, 'user48', 'user48_password', 'user48@example.com', 6981234619, 1),
(54, 'user49', 'user49_password', 'user49@example.com', 6981234620, 1),
(55, 'user50', 'user50_password', 'user50@example.com', 6981234621, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`app_pat_id`) REFERENCES `patient` (`pat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`diag_pat_id`) REFERENCES `patient` (`pat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `financial_transactions`
--
ALTER TABLE `financial_transactions`
  ADD CONSTRAINT `financial_transactions_ibfk_1` FOREIGN KEY (`fin_pat_id`) REFERENCES `patient` (`pat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`mdr_pat_id`) REFERENCES `patient` (`pat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `fk_pat_user` FOREIGN KEY (`pat_us_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`tr_diag_id`) REFERENCES `diagnosis` (`diag_id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`us_role_id`) REFERENCES `roles` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
