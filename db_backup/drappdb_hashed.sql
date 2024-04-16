-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2024 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `app_status` int(2) DEFAULT NULL,
  `app_type` varchar(255) DEFAULT NULL,
  `app_dt` datetime DEFAULT NULL,
  `app_tm_st` datetime DEFAULT NULL,
  `app_tm_end` datetime DEFAULT NULL,
  `app_pat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE `diagnosis` (
  `diag_id` int(11) NOT NULL,
  `diag_dt` datetime DEFAULT NULL,
  `diag_desc` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `diag_pat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE `financial_transactions` (
  `fin_tr_id` int(11) NOT NULL,
  `fin_tr_dt` datetime DEFAULT NULL,
  `fin_tr_type` varchar(255) DEFAULT NULL,
  `fin_tr_amount` decimal(10,2) DEFAULT NULL,
  `fin_pat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE `medical_record` (
  `mdr_id` int(11) NOT NULL,
  `mdr_desc` varchar(255) DEFAULT NULL,
  `mdr_pat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `pat_name` varchar(255) DEFAULT NULL,
  `pat_surname` varchar(255) DEFAULT NULL,
  `pat_apoint_valid` tinyint(1) DEFAULT NULL,
  `pat_address` varchar(255) DEFAULT NULL,
  `pat_tel` bigint(20) DEFAULT NULL,
  `pat_birth` date DEFAULT NULL,
  `pat_amk` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `pat_name`, `pat_surname`, `pat_apoint_valid`, `pat_address`, `pat_tel`, `pat_birth`, `pat_amk`) VALUES
(1, 'George', 'Papadopoulos', 1, '15 Athens St, Athens', 6981234567, '1975-04-22', 12345678901),
(2, 'Anastasia', 'Konstantinidou', 0, '10 Thessaloniki St, Thessaloniki', 6982345678, '1988-09-15', 23456789012),
(3, 'Dimitrios', 'Georgiou', 1, '20 Patras St, Patras', 6983456789, '1963-12-05', 34567890123),
(4, 'Eleni', 'Kyriakopoulou', 0, '5 Constantinople St, Heraklion', 6984567890, '1978-07-18', 45678901234),
(5, 'Alexander', 'Demetriou', 1, '30 Democracy Ave, Patras', 6985678901, '1995-03-10', 56789012345),
(6, 'Sophia', 'Panagiotou', 1, '25 Kifissias Ave, Athens', 6986789012, '1969-11-28', 67890123456),
(7, 'Panagiotis', 'Nikolaou', 0, '12 National Resistance St, Thessaloniki', 6987890123, '1982-05-07', 78901234567),
(8, 'Maria', 'Papandreou', 1, '8 Papaflessa St, Athens', 6988901234, '1972-08-14', 89012345678),
(9, 'Constantine', 'Dimitrakopoulos', 0, '17 Agias Sofias St, Thessaloniki', 6989012345, '1990-02-20', 90123456789),
(10, 'Vasiliki', 'Andreadou', 1, '22 Aristotelous St, Thessaloniki', 6989123456, '1985-06-30', 91234567890),
(11, 'Nikos', 'Papanikolaou', 0, '3 Ionias St, Larissa', 6989234567, '1970-10-12', 92345678901),
(12, 'Elena', 'Papadopoulou', 1, '7 Leoforos Posidonos, Piraeus', 6989345678, '1983-01-25', 93456789012),
(13, 'Andreas', 'Georgiou', 0, '9 Alexandras Ave, Thessaloniki', 6989456789, '1976-12-08', 94567890123),
(14, 'Maria', 'Konstantinou', 1, '14 Dimokratias St, Heraklion', 6989567890, '1992-04-17', 95678901234),
(15, 'Dimitra', 'Papadaki', 0, '19 Ermou St, Athens', 6989678901, '1980-09-03', 96789012345),
(16, 'Stavros', 'Nikolaidis', 1, '11 El Venizelou St, Thessaloniki', 6989789012, '1974-07-22', 97890123456),
(17, 'Ioanna', 'Papageorgiou', 0, '16 Solomou St, Patras', 6989890123, '1987-05-14', 98901234567),
(18, 'Christos', 'Papadimitriou', 1, '28 Ethnikis Antistaseos St, Athens', 6989901234, '1979-02-28', 99012345678),
(19, 'Katerina', 'Koutroumpa', 0, '32 Egnatia St, Thessaloniki', 6989912345, '1965-11-07', 99123456789),
(20, 'Dimitrios', 'Karagiannis', 1, '6 Korai St, Heraklion', 6989923456, '1989-08-10', 99234567890),
(21, 'Despina', 'Antoniadou', 0, '1 Omirou St, Patras', 6989934567, '1973-03-19', 99345678901),
(22, 'Yannis', 'Papadopoulos', 1, '4 Leoforos Stratou, Athens', 6989945678, '1994-01-01', 99456789012),
(23, 'Georgia', 'Konstantinou', 0, '8 Othonos St, Thessaloniki', 6989956789, '1981-06-05', 99567890123),
(24, 'Kostas', 'Papageorgiou', 1, '18 Ploutarchou St, Patras', 6989967890, '1977-09-23', 99678901234),
(25, 'Vasilis', 'Georgiadis', 0, '2 Tsimiski St, Thessaloniki', 6989978901, '1984-04-15', 99789012345),
(26, 'Eirini', 'Papandreou', 1, '24 Papanastasiou St, Athens', 6989989012, '1971-12-03', 99890123456),
(27, 'Nikolaos', 'Papanastasiou', 0, '26 Kallidromiou St, Larissa', 6989990123, '1968-08-18', 99901234567),
(28, 'Marina', 'Papadopoulou', 1, '3 Zinonos St, Heraklion', 6989991234, '1993-05-26', 99912345678),
(29, 'Dimitris', 'Papageorgiou', 0, '5 Venizelou St, Patras', 6989992345, '1986-02-09', 99923456789),
(30, 'Eleni', 'Georgiou', 1, '7 Mavromichali St, Athens', 6989993456, '1975-10-14', 99934567890),
(31, 'Giorgos', 'Papanikolaou', 0, '9 Navarinou St, Thessaloniki', 6989994567, '1980-04-27', 99945678901),
(32, 'Katerina', 'Nikolaou', 1, '13 Riga Feraiou St, Patras', 6989995678, '1967-11-30', 99956789012),
(33, 'Nikos', 'Papadakis', 0, '22 Kastritsiou St, Heraklion', 6989996789, '1979-07-12', 99967890123),
(34, 'Eirini', 'Papandreou', 1, '24 Papanastasiou St, Athens', 6989997890, '1986-03-25', 99978901234),
(35, 'Giannis', 'Papageorgiou', 0, '26 Voulis St, Thessaloniki', 6989998901, '1973-09-08', 99989012345),
(36, 'Maria', 'Georgiadou', 1, '28 Kifissias Ave, Patras', 6989999012, '1990-05-14', 99990123456),
(37, 'Stavroula', 'Nikolaou', 0, '30 Sofokli Venizelou St, Heraklion', 6989990123, '1978-01-27', 99991012345),
(38, 'Dimitris', 'Papadopoulos', 1, '32 Ermou St, Athens', 6989991234, '1984-08-03', 99991234567),
(39, 'Eleni', 'Papadopoulou', 0, '34 Leoforos Kifisias, Thessaloniki', 6989992345, '1965-12-17', 99992345678),
(40, 'Nikolaos', 'Papanikolaou', 1, '36 Aristotelous St, Patras', 6989993456, '1972-06-20', 99993456789),
(41, 'Katerina', 'Papageorgiou', 0, '38 Ethnikis Antistaseos St, Heraklion', 6989994567, '1989-03-14', 99994567890),
(42, 'Panagiotis', 'Georgiou', 1, '40 Dimokratias St, Athens', 6989995678, '1976-10-08', 99995678901),
(43, 'Christina', 'Nikolaou', 0, '42 Eleftheriou Venizelou St, Thessaloniki', 6989996789, '1981-07-22', 99996789012),
(44, 'Giorgos', 'Papadakis', 1, '44 Solomou St, Patras', 6989997890, '1994-02-05', 99997890123),
(45, 'Eleni', 'Papadimitriou', 0, '46 Konstantinou Karamanli St, Heraklion', 6989998901, '1970-11-28', 99998901234),
(46, 'Nikos', 'Papageorgiou', 1, '48 Agiou Mina St, Athens', 6989999012, '1987-09-10', 99999012345),
(47, 'Maria', 'Georgiou', 0, '50 Kallidromiou St, Thessaloniki', 6989990123, '1975-04-03', 99999123456),
(48, 'Dimitris', 'Papanikolaou', 1, '52 Kifissias Ave, Patras', 6989991234, '1991-12-17', 99999234567),
(49, 'Eirini', 'Papadopoulou', 0, '54 Ethnikis Antistaseos St, Heraklion', 6989992345, '1988-08-25', 99999345678),
(50, 'Giannis', 'Georgiadis', 1, '56 Leoforos Syngrou, Athens', 6989993456, '1973-03-11', 99999456789),
(51, 'Maria', 'Papadimitriou', 0, '58 Tsimiski St, Thessaloniki', 6989994567, '1969-10-27', 99999567890);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_desc` varchar(255) DEFAULT NULL
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
CREATE TABLE `treatment` (
  `tr_id` int(11) NOT NULL,
  `tr_desc` varchar(255) DEFAULT NULL,
  `tr_st_dt` datetime DEFAULT NULL,
  `tr_end_dt` datetime DEFAULT NULL,
  `tr_diag_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_tel` bigint(20) DEFAULT NULL,
  `us_pat_id` int(11) DEFAULT NULL,
  `us_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_email`, `user_tel`, `us_pat_id`, `us_role_id`) VALUES
(1, 'admin', '$2y$10$InIknDcGAHrvTFrQIgjQn.6V2HVW6BXXY8thRo54WGn6zprgiWHl.', 'admin@example.com', 6981234567, NULL, 4),
(2, 'receptionist1', '$2y$10$33Iq73VV5bDLn/63pTmKoOyw8fO9nr5Ab/60beKvaC5IMqWa1Y4Uy', 'receptionist1@example.com', 6981234568, NULL, 3),
(3, 'receptionist2', '$2y$10$s38n6KWfeoFBdkyXqHq45OFmaghxiFzUFy0jfx6GsrvfiR8lKk5o.', 'receptionist2@example.com', 6981234569, NULL, 3),
(4, 'doctor1', '$2y$10$k0hIsrOr7FplTeKfYzPPQ.tvtCjMABIhIAuAW0YYmYz5ftZOrz3Ge', 'doctor1@example.com', 6981234570, NULL, 2),
(5, 'doctor2', '$2y$10$573kAu0skmklkuBytjyqIOyf5F/WHZ5ur4789/jj3mlNJbhVsTf0.', 'doctor2@example.com', 6981234571, NULL, 2),
(6, 'user1', '$2y$10$EFUdOrCFoJgke1LlHv9zXuj8GpsokqK5An9mBHzTEbj0cNyu65BUW', 'user1@example.com', 6981234572, 1, 1),
(7, 'user2', '$2y$10$qK.EvwdRY1itoZPURQY/B.4BH/aCeAJwQau4Ug9vA0An8yXtYtpXe', 'user2@example.com', 6981234573, 2, 1),
(8, 'user3', '$2y$10$31Qoa98.y1UdtIlUz1u.L.uXqbtg7qK9KL1Z.fCMzNgwOAge/Zw.e', 'user3@example.com', 6981234574, 3, 1),
(9, 'user4', '$2y$10$gKAAXOWym920945N1Isj6.bo2PWKOKZKFUMuYLQMm6RTla36WZlc6', 'user4@example.com', 6981234575, 4, 1),
(10, 'user5', '$2y$10$Dg9NDPhADe0jZPQyU37yg.3QDNvl6tn1sAYfRf.HK2uFpD.57H1Bq', 'user5@example.com', 6981234576, 5, 1),
(11, 'user6', '$2y$10$Yxg0hR4kFXBqknjqEhfWM.DTJfYZ1Zj.IsChemMhmvxqGxk73lPZm', 'user6@example.com', 6981234577, 6, 1),
(12, 'user7', '$2y$10$MOv8pawGtC6Mw1CrRm4e3.7pllXnp5rtR7TmWpCF.so5T6KN0gQMu', 'user7@example.com', 6981234578, 7, 1),
(13, 'user8', '$2y$10$8VU0ZPilHprE1Dy87lOvd.AnIoVIFY1Rtp.qyaX9zjM9oiMeCFGLy', 'user8@example.com', 6981234579, 8, 1),
(14, 'user9', '$2y$10$ZNrU9d1TcHuoM/nZz/J2g.ksJxyfnc1hpefCdZ4bDwBSuCWp0Ndla', 'user9@example.com', 6981234580, 9, 1),
(15, 'user10', '$2y$10$sNXiqjuDcnhDu0IYtXCrpO4t2.rO8KSJFNl.nxaaXbPNVW7kWl5xi', 'user10@example.com', 6981234581, 10, 1),
(16, 'user11', '$2y$10$RZUewJsuZGn6.YXO0D29z.nCRpHp5aMzEY0c8X9Uu8VXznIMJA2ZG', 'user11@example.com', 6981234582, 11, 1),
(17, 'user12', '$2y$10$vkgctjwVTVgZh4zZ6cZJeenLBJUDfrmYOa0sARhGmtpKguEte5Aja', 'user12@example.com', 6981234583, 12, 1),
(18, 'user13', '$2y$10$wsPSHzNREQPhSjcg.fydaOq5ZbUJq5iSmmBK/6WwEupy3sVaz19C.', 'user13@example.com', 6981234584, 13, 1),
(19, 'user14', '$2y$10$DvhgWVaHbHkykm/sLKQ6vOKJWH7gB7wyc3CXa2uEUwN1JBiGmyIdi', 'user14@example.com', 6981234585, 14, 1),
(20, 'user15', '$2y$10$OSpNYRfwxStcYbRSV4swjOLQn9tK93lEhsR5OVxdpmrSTGwPcxwi.', 'user15@example.com', 6981234586, 15, 1),
(21, 'user16', '$2y$10$3xEdEaAqEqf1g6a.ZvouRe0rfLdv8l64AIhCkUO/uHw2liel8CWrO', 'user16@example.com', 6981234587, 16, 1),
(22, 'user17', '$2y$10$pJiQfFKaXHdlnuUIbluJB.8id0MatHIzQQNnBzVzl35anPGbUYBUS', 'user17@example.com', 6981234588, 17, 1),
(23, 'user18', '$2y$10$JaOtHKMagMW1PX62aAsn/eOtUdbBgqnMp9tsuhhdZod5qxRDOiFoS', 'user18@example.com', 6981234589, 18, 1),
(24, 'user19', '$2y$10$kejwLwjJa.yZxmnQJ.Iph.HTRc/1wHGkHx6RavUKVlk.4ggRSEyOe', 'user19@example.com', 6981234590, 19, 1),
(25, 'user20', '$2y$10$GjpRNwcPFRbTuJngsBRvhOk9Qa/Lrks8pPHTPNd86sh99pCY6CIfG', 'user20@example.com', 6981234591, 20, 1),
(26, 'user21', '$2y$10$EaBvhdSdFrTzdOJoGvKrY.gsrQcrkCxaTslVkH4v25UryRhDw.x9W', 'user21@example.com', 6981234592, 21, 1),
(27, 'user22', '$2y$10$Evz0yAzd0N2NQAMZ4pNul.AxbhbinqyoOwjUPBUfONfaBxSitRcY2', 'user22@example.com', 6981234593, 22, 1),
(28, 'user23', '$2y$10$Tp8n7ObKKfwMY1ODmZRoHu/jRntYXTZSM0gGngjDK6LG02q338L2O', 'user23@example.com', 6981234594, 23, 1),
(29, 'user24', '$2y$10$NlHYPaWf/fdli2Y1qCUcouMWXnWzZ8pd85kMvrgc9OnuWP5zksr9W', 'user24@example.com', 6981234595, 24, 1),
(30, 'user25', '$2y$10$SoK4t87ZNqoAlxMowvsECOoEvueqBi.7mDwUjN8OfYnv8ksf.hz7W', 'user25@example.com', 6981234596, 25, 1),
(31, 'user26', '$2y$10$6torNNz4h5y1nw46.PMM5OOM/GNWvpZF70SirjZWqJ3R3uXp509GG', 'user26@example.com', 6981234597, 26, 1),
(32, 'user27', '$2y$10$w6UWIa6qZM/PlY5Ks2Yb6uVCIAfwZENhfPG3GpY9GZzqIwXIbKpt2', 'user27@example.com', 6981234598, 27, 1),
(33, 'user28', '$2y$10$L/FjZ3hLKBY8iGCnZKLeIOJ/hnTnfaX8lT6j5e6GS6xoYo3Nwgjmu', 'user28@example.com', 6981234599, 28, 1),
(34, 'user29', '$2y$10$0uBceAGi7xDT1ma6QFaSPuFTb2NjMFmHCkESKK/QYGj.dz3NkibGy', 'user29@example.com', 6981234600, 29, 1),
(35, 'user30', '$2y$10$fuNgNF11dParxS2fW4CiV.B8tH0OADRBat7Xsi1WdUV7qySd4ypj6', 'user30@example.com', 6981234601, 30, 1),
(36, 'user31', '$2y$10$KbRIbigimXqeQuvg4BPdMe7dNQC7uTnP9VKBzVuflH8X9.GcmVomW', 'user31@example.com', 6981234602, 31, 1),
(37, 'user32', '$2y$10$0RbTuiuPQSgg0QXkG6.W/.QCOxktF8nDDxhdIUDLS7Z6mK3.yXMqi', 'user32@example.com', 6981234603, 32, 1),
(38, 'user33', '$2y$10$XhEUHgWu0zUKEDRdivEqhukQ9OOqC5gK9Faa8Huk4h1yvmt09ZYcS', 'user33@example.com', 6981234604, 33, 1),
(39, 'user34', '$2y$10$nN04RY.3V2lOivfEedhbP.RKBJTCuUxkC4Cxe38nfDrTeMXsOYAwa', 'user34@example.com', 6981234605, 34, 1),
(40, 'user35', '$2y$10$M9WpkETQmi5T4FWOd99CHOK81VYVRah7xtQ5gx0N88SAboT9mRlUa', 'user35@example.com', 6981234606, 35, 1),
(41, 'user36', '$2y$10$1xBic7wZljSmkAXoW4/QR.EY5vH/vQJbK7yxokBH5GPbNSkHxsDtW', 'user36@example.com', 6981234607, 36, 1),
(42, 'user37', '$2y$10$jvl5e7CokQ.ftLlvSEeDBOkF3a9tyBJWtBBBHrXF.I8yANjUK5wDO', 'user37@example.com', 6981234608, 37, 1),
(43, 'user38', '$2y$10$IOlLlJdhjtIzn0JlGu7K.OSOge9LwvBKkQz3uwJ08y0.j8AGyUqC6', 'user38@example.com', 6981234609, 38, 1),
(44, 'user39', '$2y$10$2pp5fp.6tN7/77NccyAC/ufqQt23Q/I.mPIoNVyLe0qYEmYtAl9ka', 'user39@example.com', 6981234610, 39, 1),
(45, 'user40', '$2y$10$cuEUbhgaJqILjwe7Hd398OE3Yu1A.FjM0E73wtSMJ6t6I6tj/K2MW', 'user40@example.com', 6981234611, 40, 1),
(46, 'user41', '$2y$10$4aRUWcRWL7U21WlpF5.rZeOpQk2QWiw3vwukGffo.IWmgHE32HBWO', 'user41@example.com', 6981234612, 41, 1),
(47, 'user42', '$2y$10$rotsjCFuWAOoyWtPaO6qeuc17NFN5BSciNEFUUDY24gbpO/UqQaj6', 'user42@example.com', 6981234613, 42, 1),
(48, 'user43', '$2y$10$IKgeLEY88Vee0A9cqWuWgOiE.kyo5ILGYvZWHy4q5Ud8ASfNorCwW', 'user43@example.com', 6981234614, 43, 1),
(49, 'user44', '$2y$10$AD8TAhZRxqdmPbAUr6UkeeeM9NWa.Y2sx50UF1tRL0/KKgtno0bR2', 'user44@example.com', 6981234615, 44, 1),
(50, 'user45', '$2y$10$MZyKlt0SLEl.eeUPrpRGSeY4Ilx6473KUkX3yG6kmTX8mf2LyZcz2', 'user45@example.com', 6981234616, 45, 1),
(51, 'user46', '$2y$10$t2QjDHUb5rNq41.4Xc7lguSjqGNMBHsS2l/TFTItKsN1Q8ez.5P3K', 'user46@example.com', 6981234617, 46, 1),
(52, 'user47', '$2y$10$QB..49a5dSMGwJ25gTCKF.71YN6Tzq2LRr8GH7f235S6s8B14jQp.', 'user47@example.com', 6981234618, 47, 1),
(53, 'user48', '$2y$10$vy5t4q.JwSVduALq5d1fkeh1SWCIuSQLMZqxr06T6/msVb8MdbMMu', 'user48@example.com', 6981234619, 48, 1),
(54, 'user49', '$2y$10$E8jkH9Ulh22MScL2Y.PobuqkJG1DiJ4f7k64DNydv1zPsy3Qn75R6', 'user49@example.com', 6981234620, 49, 1),
(55, 'user50', '$2y$10$bUu8K.1v9ASca8TnbbhJm.D2cxv/uB5nz25RuhlNKpGRnOd.e43bO', 'user50@example.com', 6981234621, 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_pat_id` (`app_pat_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diag_id`),
  ADD KEY `diag_pat_id` (`diag_pat_id`);

--
-- Indexes for table `financial_transactions`
--
ALTER TABLE `financial_transactions`
  ADD PRIMARY KEY (`fin_tr_id`),
  ADD KEY `fin_pat_id` (`fin_pat_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`mdr_id`),
  ADD KEY `mdr_pat_id` (`mdr_pat_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `tr_diag_id` (`tr_diag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `us_role_id` (`us_role_id`),
  ADD KEY `us_pat_id` (`us_pat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `financial_transactions`
--
ALTER TABLE `financial_transactions`
  MODIFY `fin_tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `mdr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`tr_diag_id`) REFERENCES `diagnosis` (`diag_id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`us_role_id`) REFERENCES `roles` (`role_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`us_pat_id`) REFERENCES `patient` (`pat_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
