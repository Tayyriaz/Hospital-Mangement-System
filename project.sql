-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 12:38 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `name` varchar(30) DEFAULT NULL,
  `cnic` int(30) NOT NULL,
  `phoneno` int(30) DEFAULT NULL,
  `password` int(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`name`, `cnic`, `phoneno`, `password`, `gender`) VALUES
('Ali', 123, 303456816, 564, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Name` varchar(30) DEFAULT NULL,
  `pat_no` int(20) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `stay_days` int(20) DEFAULT NULL,
  `chareges` int(20) DEFAULT NULL,
  `doc_fee` int(30) DEFAULT NULL,
  `surgeon_fee` int(30) DEFAULT NULL,
  `ICU_fee` int(30) DEFAULT NULL,
  `medicine` varchar(40) DEFAULT NULL,
  `lab_fee` int(30) DEFAULT NULL,
  `food` varchar(30) DEFAULT NULL,
  `Ssn` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Name`, `pat_no`, `age`, `gender`, `stay_days`, `chareges`, `doc_fee`, `surgeon_fee`, `ICU_fee`, `medicine`, `lab_fee`, `food`, `Ssn`, `no`) VALUES
('ahmad', 2, 34, 'on', 0, 200, 1500, 2000, 20000, '1200', 15000, '500', 1, 1),
('amir', 2, 54, 'Male', 3000, 400, 3000, 2000, 40000, '1200', 45000, '120', 2, 2),
('rabia', 3, 67, 'FEMALE', 5000, 1000, 4500, 4000, 60000, '5000', 645000, '780', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dischargesheet`
--

CREATE TABLE `dischargesheet` (
  `name` varchar(20) DEFAULT NULL,
  `patno` int(30) NOT NULL,
  `age` int(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `medtogive` varchar(100) DEFAULT NULL,
  `revistdate` date DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dischargesheet`
--

INSERT INTO `dischargesheet` (`name`, `patno`, `age`, `gender`, `medtogive`, `revistdate`, `ssn`, `no`) VALUES
('ahmad', 2, 45, 'male', 'panadol', '2022-09-30', 1, 1),
('amir', 2, 23, 'male', 'panadol', '2022-09-30', 2, 2),
('rabia', 3, 67, 'on', 'panadol', '2022-09-30', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `name` varchar(30) DEFAULT NULL,
  `specification` varchar(30) DEFAULT NULL,
  `cnic` int(30) NOT NULL,
  `password` int(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `mail` varchar(123) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`name`, `specification`, `cnic`, `password`, `gender`, `mail`) VALUES
('hamza', 'mbbs', 123, 123, 'male', '21115454@gift.edu.pk'),
('arqam', 'mbbs', 456, 123, 'male', 'arqam@gmail.com'),
('tayyab', 'mbbs', 789, 789, 'male', 'tayyab@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `roomchar` varchar(30) DEFAULT NULL,
  `feeno` int(30) NOT NULL,
  `wardchar` int(30) DEFAULT NULL,
  `surgeonfee` int(30) DEFAULT NULL,
  `theatrefee` int(50) DEFAULT NULL,
  `icucost` int(20) DEFAULT NULL,
  `otherexp` int(30) DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`roomchar`, `feeno`, `wardchar`, `surgeonfee`, `theatrefee`, `icucost`, `otherexp`, `ssn`) VALUES
('5400', 1, 5400, 540, 1200, 120, 320, 2),
('2000', 2, 2000, 20000, 29000, 2300, 33, 2);

-- --------------------------------------------------------

--
-- Table structure for table `general bill`
--

CREATE TABLE `general bill` (
  `Roomcharges` int(30) NOT NULL,
  `wardCharges` int(30) NOT NULL,
  `ICUcost` int(30) NOT NULL,
  `Surgeonfee` int(30) NOT NULL,
  `Theatrefee` int(30) NOT NULL,
  `Othercharges` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medcondition`
--

CREATE TABLE `medcondition` (
  `med_cond` varchar(12) DEFAULT NULL,
  `transfer_t0_icu` varchar(123) DEFAULT NULL,
  `transfer_to_ward` varchar(123) DEFAULT NULL,
  `stay_in_emer` varchar(123) DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petsignup`
--

CREATE TABLE `petsignup` (
  `name` varchar(30) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `cnic` int(50) NOT NULL,
  `phoneno` int(40) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petsignup`
--

INSERT INTO `petsignup` (`name`, `age`, `cnic`, `phoneno`, `gender`) VALUES
('arif', 34, 123, 300, 'male'),
('arslan', 31, 456, 30000, 'male'),
('ahmad', 789, 789, 3000, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `regpat`
--

CREATE TABLE `regpat` (
  `name` varchar(20) DEFAULT NULL,
  `ssn` int(30) NOT NULL,
  `patno` int(30) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `phoneno` int(50) DEFAULT NULL,
  `medcon` varchar(30) DEFAULT NULL,
  `slevel` varchar(20) DEFAULT NULL,
  `docs` varchar(20) DEFAULT NULL,
  `ward` int(50) DEFAULT NULL,
  `bed` int(20) DEFAULT NULL,
  `policecase` varchar(20) DEFAULT NULL,
  `patcarename` varchar(30) DEFAULT NULL,
  `patcaremob` int(30) DEFAULT NULL,
  `cnic` int(30) DEFAULT NULL,
  `docAssign` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regpat`
--

INSERT INTO `regpat` (`name`, `ssn`, `patno`, `age`, `gender`, `phoneno`, `medcon`, `slevel`, `docs`, `ward`, `bed`, `policecase`, `patcarename`, `patcaremob`, `cnic`, `docAssign`) VALUES
('ahmad ', 1, 1, 5, 'male', 8975447, 'bad', 'high', '123', 0, 3, 'no', 'arif', 30000000, 123, 123),
('amir', 2, 4, 45, 'MALE', 3000, 'GOOD', 'NO', 'HAMZA', 2, 5, 'NO', 'ASIM', 30000, 34100, 123),
('RABIA', 3, 2, 45, 'FEMALE', 300000, 'GOOD', 'NO', 'ARQAM', 5, 3, 'NO', 'ARIF', 3000, 2333, 456);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `name` varchar(30) DEFAULT NULL,
  `reportno` int(20) NOT NULL,
  `medconaft` varchar(30) DEFAULT NULL,
  `medi` varchar(30) DEFAULT NULL,
  `labtest` varchar(20) DEFAULT NULL,
  `gohome` varchar(30) DEFAULT NULL,
  `transtoward` varchar(30) DEFAULT NULL,
  `transtoicu` varchar(30) DEFAULT NULL,
  `stayinemer` varchar(30) DEFAULT NULL,
  `hosbill` int(50) DEFAULT NULL,
  `paybydate` date DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`name`, `reportno`, `medconaft`, `medi`, `labtest`, `gohome`, `transtoward`, `transtoicu`, `stayinemer`, `hosbill`, `paybydate`, `ssn`) VALUES
('ahmad', 1, 'good', 'no', 'no', 'yes', 'no', 'yes', 'no', 1200, '2022-09-05', 1),
('arif', 2, 'good', 'no', 'no', 'yes', 'yes', 'no', 'no', 4500, NULL, NULL),
('amir', 24, 'good', 'pnadol', 'yes', 'yes', 'yes', 'yes', 'yes', 1200, '2022-10-01', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`cnic`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`no`),
  ADD KEY `Ssn` (`Ssn`);

--
-- Indexes for table `dischargesheet`
--
ALTER TABLE `dischargesheet`
  ADD PRIMARY KEY (`no`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  ADD PRIMARY KEY (`cnic`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`feeno`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `medcondition`
--
ALTER TABLE `medcondition`
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `petsignup`
--
ALTER TABLE `petsignup`
  ADD PRIMARY KEY (`cnic`);

--
-- Indexes for table `regpat`
--
ALTER TABLE `regpat`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `docAssign` (`docAssign`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportno`),
  ADD KEY `ssn` (`ssn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Ssn`) REFERENCES `regpat` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `dischargesheet`
--
ALTER TABLE `dischargesheet`
  ADD CONSTRAINT `dischargesheet_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `regpat` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `regpat` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `medcondition`
--
ALTER TABLE `medcondition`
  ADD CONSTRAINT `medcondition_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `regpat` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `regpat`
--
ALTER TABLE `regpat`
  ADD CONSTRAINT `regpat_ibfk_1` FOREIGN KEY (`docAssign`) REFERENCES `doctorsignup` (`cnic`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `regpat` (`ssn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
