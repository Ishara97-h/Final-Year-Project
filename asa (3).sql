-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 07:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asa`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(20) NOT NULL,
  `reg_id` varchar(20) NOT NULL,
  `Surgical_Diagnosis` varchar(100) NOT NULL,
  `General` varchar(50) NOT NULL,
  `PR` varchar(10) NOT NULL,
  `BP` varchar(10) NOT NULL,
  `Murmurs` varchar(10) NOT NULL,
  `IHD` varchar(10) NOT NULL,
  `symptoms_cardiovascular` varchar(50) NOT NULL,
  `Cardiovascular_Other` varchar(30) NOT NULL,
  `Cardiovascular_status_controled` varchar(20) NOT NULL,
  `Cardiovascular_status_danger` varchar(20) NOT NULL,
  `RR` varchar(10) NOT NULL,
  `SPO2` varchar(10) NOT NULL,
  `COPD` varchar(10) NOT NULL,
  `BA` varchar(10) NOT NULL,
  `symptoms_respiratory` varchar(50) NOT NULL,
  `Respiratory_other` varchar(30) NOT NULL,
  `Respiratory_status_controled` varchar(20) NOT NULL,
  `Respiratory_status_danger` varchar(20) NOT NULL,
  `Chronic_Kidney_Disease` varchar(10) NOT NULL,
  `Stones` varchar(10) NOT NULL,
  `Renal_other` varchar(30) NOT NULL,
  `Renal_status_controled` varchar(20) NOT NULL,
  `Renal_status_danger` varchar(20) NOT NULL,
  `GORD_yn` varchar(20) NOT NULL,
  `GORD_Other` varchar(30) NOT NULL,
  `GORD_status_controled` varchar(20) NOT NULL,
  `GORD_status_danger` varchar(20) NOT NULL,
  `Anaemia` varchar(10) NOT NULL,
  `Diabetes` varchar(10) NOT NULL,
  `Hypo` varchar(10) NOT NULL,
  `Haem_other` varchar(30) NOT NULL,
  `Haem_status_controled` varchar(20) NOT NULL,
  `Haem_status_danger` varchar(20) NOT NULL,
  `Strikes` varchar(10) NOT NULL,
  `TIA` varchar(10) NOT NULL,
  `Osteoartheritis` varchar(10) NOT NULL,
  `Osteoporosis` varchar(10) NOT NULL,
  `Neuro_other` varchar(30) NOT NULL,
  `Neuro_status_controled` varchar(20) NOT NULL,
  `Neuro_status_danger` varchar(20) NOT NULL,
  `POA_other` varchar(30) NOT NULL,
  `POA` varchar(20) NOT NULL,
  `POA_status_controled` varchar(20) NOT NULL,
  `POA_status_danger` varchar(20) NOT NULL,
  `Allergies_types` varchar(20) NOT NULL,
  `Allergies_other` varchar(30) NOT NULL,
  `MET_yn` varchar(20) NOT NULL,
  `MET_other` varchar(30) NOT NULL,
  `MET_status_controled` varchar(20) NOT NULL,
  `MET_status_danger` varchar(20) NOT NULL,
  `smoking_yn` varchar(20) NOT NULL,
  `smoking_other` varchar(30) NOT NULL,
  `Smoking_status_controled` varchar(20) NOT NULL,
  `Smoking_status_danger` varchar(20) NOT NULL,
  `Alcohol_yn` varchar(20) NOT NULL,
  `alcohol_other` varchar(30) NOT NULL,
  `Alcohol_status_controled` varchar(20) NOT NULL,
  `Alcohol_status_danger` varchar(20) NOT NULL,
  `Current_Medication` varchar(20) NOT NULL,
  `Current_Medication_other` varchar(30) NOT NULL,
  `Previous_anesthesia_types` varchar(20) NOT NULL,
  `Operations` varchar(20) NOT NULL,
  `Operations_types` varchar(30) NOT NULL,
  `Operations_other` varchar(30) NOT NULL,
  `Airway_Assessment_types` varchar(30) NOT NULL,
  `Fasting` varchar(20) NOT NULL,
  `time` varchar(5) NOT NULL,
  `Investigations` varchar(30) NOT NULL,
  `Premedication` varchar(30) NOT NULL,
  `Drugs_to_be_omitted` varchar(30) NOT NULL,
  `DVT_Prophyluxis` varchar(30) NOT NULL,
  `Preoperative_instructions_other` varchar(30) NOT NULL,
  `Na` varchar(10) NOT NULL,
  `K` varchar(10) NOT NULL,
  `Urea` varchar(10) NOT NULL,
  `Creatinine` varchar(10) NOT NULL,
  `Bilirubin` varchar(10) NOT NULL,
  `Albumin` varchar(10) NOT NULL,
  `Alk_Phos` varchar(10) NOT NULL,
  `AST` varchar(10) NOT NULL,
  `ALT` varchar(10) NOT NULL,
  `PT_INR` varchar(10) NOT NULL,
  `APTT` varchar(10) NOT NULL,
  `Hb` varchar(10) NOT NULL,
  `WBC` varchar(10) NOT NULL,
  `Platelets` varchar(10) NOT NULL,
  `FBS_RBS_PPBS` varchar(30) NOT NULL,
  `Investigation_status_controled` varchar(20) NOT NULL,
  `Investigation_status_danger` varchar(20) NOT NULL,
  `ECG` varchar(30) NOT NULL,
  `Echocardiogram` varchar(30) NOT NULL,
  `CXR` varchar(30) NOT NULL,
  `ECG_other` varchar(30) NOT NULL,
  `Anticipated_Anesthetic_problem_types` varchar(30) NOT NULL,
  `Anesthetic_Plan` varchar(30) NOT NULL,
  `R_L` varchar(20) NOT NULL,
  `Consent_yn` varchar(20) NOT NULL,
  `Post_Op_Analgesia` varchar(20) NOT NULL,
  `Nurse` varchar(20) NOT NULL,
  `Doctor` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Done_Time` time(6) NOT NULL,
  `Informed_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`id`, `reg_id`, `Surgical_Diagnosis`, `General`, `PR`, `BP`, `Murmurs`, `IHD`, `symptoms_cardiovascular`, `Cardiovascular_Other`, `Cardiovascular_status_controled`, `Cardiovascular_status_danger`, `RR`, `SPO2`, `COPD`, `BA`, `symptoms_respiratory`, `Respiratory_other`, `Respiratory_status_controled`, `Respiratory_status_danger`, `Chronic_Kidney_Disease`, `Stones`, `Renal_other`, `Renal_status_controled`, `Renal_status_danger`, `GORD_yn`, `GORD_Other`, `GORD_status_controled`, `GORD_status_danger`, `Anaemia`, `Diabetes`, `Hypo`, `Haem_other`, `Haem_status_controled`, `Haem_status_danger`, `Strikes`, `TIA`, `Osteoartheritis`, `Osteoporosis`, `Neuro_other`, `Neuro_status_controled`, `Neuro_status_danger`, `POA_other`, `POA`, `POA_status_controled`, `POA_status_danger`, `Allergies_types`, `Allergies_other`, `MET_yn`, `MET_other`, `MET_status_controled`, `MET_status_danger`, `smoking_yn`, `smoking_other`, `Smoking_status_controled`, `Smoking_status_danger`, `Alcohol_yn`, `alcohol_other`, `Alcohol_status_controled`, `Alcohol_status_danger`, `Current_Medication`, `Current_Medication_other`, `Previous_anesthesia_types`, `Operations`, `Operations_types`, `Operations_other`, `Airway_Assessment_types`, `Fasting`, `time`, `Investigations`, `Premedication`, `Drugs_to_be_omitted`, `DVT_Prophyluxis`, `Preoperative_instructions_other`, `Na`, `K`, `Urea`, `Creatinine`, `Bilirubin`, `Albumin`, `Alk_Phos`, `AST`, `ALT`, `PT_INR`, `APTT`, `Hb`, `WBC`, `Platelets`, `FBS_RBS_PPBS`, `Investigation_status_controled`, `Investigation_status_danger`, `ECG`, `Echocardiogram`, `CXR`, `ECG_other`, `Anticipated_Anesthetic_problem_types`, `Anesthetic_Plan`, `R_L`, `Consent_yn`, `Post_Op_Analgesia`, `Nurse`, `Doctor`, `Date`, `Done_Time`, `Informed_By`) VALUES
(1, '46', '', '', 'gggg', 'ff', 'ggg', 'hy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(2, '12', '', '', '123', '56', '89k', '', 'kk,kk,ll,jj', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '1', '', '1', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(3, '12', '', '', '123', '56', '89k', '', 'kk,kk,ll,jj', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '1', '', '1', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(4, '12', '', '', '123', '56', '89k', '', 'kk,kk,ll,jj', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(5, '14', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(6, '14', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(7, '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(8, '14', '', '', 'zz', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(9, '14', '', '', '123', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(17, '444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(18, '444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(19, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-11-30', '00:00:00.000000', ''),
(20, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-11-30', '15:57:36.000000', ''),
(21, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-11-30', '15:59:09.000000', ''),
(22, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(23, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(25, '58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(28, '152', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(29, '152', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(30, '152', '', '', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', ''),
(31, '152', '', '', '11', '23', '45', 'kkk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '2021-11-30', '16:27:01.000000', ''),
(32, '152', '', '2021-11-29', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '09:09:22.000000', ''),
(33, '152', '', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '09:10:54.000000', ''),
(34, '152', '', '2021-11-29', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '09:12:21.000000', ''),
(36, '152', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:14:02.000000', ''),
(37, '152', 'jjrv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:14:42.000000', ''),
(38, '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:15:46.000000', ''),
(39, '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:24:16.000000', ''),
(40, '69', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:30:40.000000', ''),
(41, '10', '', '', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', 'momo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-12-01', '11:54:51.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `reg_id` varchar(30) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `age` int(30) NOT NULL,
  `bg` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `nic` varchar(30) NOT NULL,
  `bht` varchar(20) NOT NULL,
  `inch` float NOT NULL,
  `kg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`reg_id`, `pname`, `age`, `bg`, `gender`, `address`, `phone_no`, `nic`, `bht`, `inch`, `kg`) VALUES
('01', 'Ishara Rashi Nagoda Gamage', 54, 'A+', 'male', 'NG Rathnasiri\r\nHingalgoda Tea Factory,\r\nHIniduma,\r\nGalle\r\nSri Lanka\r\n80080', '0712517737', '9999', '55', 5.5, 45),
('10', 'bb', 23, 'O-', 'male', 'nn', '23', '23', '12', 23, 12),
('111', 'mm', 22, 'A+', 'male', 'nn', '33', '22', '', 0, 0),
('12', 'sanduni', 26, 'AB+', 'female', 'kandy', '07125346789', '9715364V', '21T', 66, 56),
('13', 'tharu', 23, 'A-', 'male', 'kandy', '123', '123', '23', 23, 12),
('14', 'kane', 23, 'O-', 'male', 'matara', '123', '12', '12', 55, 45),
('152', 'nn', 23, 'O+', 'male', 'nn', '6', '6', '6', 12, 12),
('22', 'Rathnasiri Nagoda Gamage', 45, 'A+', 'male', 'NG Rathnasiri\r\nHingalgoda Tea Factory, HIniduma', '0715561725', '25', '22', 22, 22),
('23', 'rashi', 22, 'A+', 'male', 'galle', '56', '12', '23', 56, 56),
('234', 'mm', 46, 'A+', 'female', 'nn', '12', '23', '', 0, 0),
('237', 'mm', 46, 'A+', 'male', 'nn', '12', '23', '', 0, 0),
('25', 'Rathnasiri Nagoda Gamage', 54, 'A+', 'male', 'NG Rathnasiri\r\nHingalgoda Tea Factory, HIniduma', '0715561725', '9999', '56', 23, 32),
('444', 'll', 22, 'O+', 'male', 'nn', '123', '123', '456', 23, 23),
('45', 'Ishara Rashi Nagoda Gamage', 22, 'A+', 'male', 'NG Rathnasiri\r\nHingalgoda Tea Factory,\r\nHIniduma,\r\nGalle\r\nSri Lanka\r\n80080', '0712517737', 'dd', '', 0, 0),
('46', '', 56, 'O+', 'male', '', '', '123', '12', 32, 23),
('5', 'jane', 56, 'O-', 'male', 'us', '66', '55', '77', 35, 25),
('55', 'Jane', 54, 'O+', 'male', 'galle', '31', '123', '12', 123, 56),
('58', 'kk5', 55, 'O-', 'male', 'mm', '44', '44', '44', 44, 55),
('69', 'nn', 23, 'O+', 'female', 'mm', '12', '3', '23', 23, 23),
('896', 'bob', 56, 'A+', 'female', 'eng', '456', '45', '132', 56, 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cno` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emp_id`, `username`, `cno`, `password`) VALUES
(1, '0', 'hi', 0, 'hi14'),
(2, '0', 'hy', 0, 'hy12'),
(3, '56ko', 'rash', 1472583694, 'rash1234'),
(4, '56ko', 'rashi', 1472583694, 'rashi789');

-- --------------------------------------------------------

--
-- Table structure for table `user_nurse`
--

CREATE TABLE `user_nurse` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_nurse`
--

INSERT INTO `user_nurse` (`id`, `username`, `password`) VALUES
(1, 'jake', 'jake12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_nurse`
--
ALTER TABLE `user_nurse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_nurse`
--
ALTER TABLE `user_nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
