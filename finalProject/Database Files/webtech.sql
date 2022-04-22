-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 09:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `class_id` varchar(12) NOT NULL,
  `class` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `file_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`class_id`, `class`, `section`, `file_name`) VALUES
('abcde', '01', 'A', 'finaltermexamsc'),
('ONE01', '01', 'A', 'routine01A'),
('ONE02', '01', 'B', 'routine01B'),
('ONE03', '01', 'C', 'routine01C'),
('TWO01', '02', 'A', 'routine02A'),
('TWO02', '02', 'B', 'routine02B'),
('TWO03', '02', 'C', 'webtech-admin.x');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `class_id` varchar(15) NOT NULL,
  `class` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `room` varchar(12) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `teacher_phone` varchar(11) NOT NULL,
  `teacher_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`class_id`, `class`, `section`, `room`, `teacher`, `teacher_phone`, `teacher_email`) VALUES
('ONE01', '01', 'A', '1001', 'MdRasen', '01630406235', 'aamin.h@gmail.com'),
('ONE02', '01', 'B', '1002', 'Fahim Ahmed', '12345678901', 'fahim@gmail.com'),
('ONE03', '01', 'C', '1003', 'Arif Sadi', '45127898653', 'sadi@gmail.com'),
('THREE01', '03', 'A', '3001', 'Anisul Islam', '12345678901', 'anisul@yahoo.com'),
('TWO01', '02', 'A', '2001', 'Rasel Kabir', '12345678901', 'rasel@gmail.com'),
('TWO02', '02', 'B', '2002', 'Sanjana Islam', '12345678901', 'sanjana@gmail.com'),
('TWO03', '02', 'C', '2003', 'Fahim Ahmmed', '78965432110', 'fahimahmed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` varchar(15) NOT NULL,
  `notice_title` varchar(40) NOT NULL,
  `recipient` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `notice` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_title`, `recipient`, `date`, `notice`) VALUES
('N01', 'Notice for Document Submission', 'student', '2022-03-08', 'This is to notify students to submit their documents by March 15, 2022.'),
('N02', 'Student ID distribution', 'student', '2022-01-03', 'Students who didn’t receive their student ID yet are requested to contact the information office.'),
('N03', 'Deadline for Clearing Tuition Fees', 'student', '2021-11-24', 'To whomever applicable, students are advised to clear their Tuition Fees by Tuesday, March 10, 2022.'),
('N04', 'AIUB Premier League 2022 (APL-T10)', 'everyone', '2022-03-10', 'Students who are interested to participate in the APL T10 Cricket Tournament, 2022 are requested to register their name at the Office of Sports within 14th March 2022 for the selection session.'),
('N05', 'Holiday due to Independence Day', 'everyone', '2022-03-23', 'It is to notify to all concerned that the University would remain closed on Saturday , March 26th, 2022, due to Independence Day of Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `profile_details`
--

CREATE TABLE `profile_details` (
  `username` varchar(30) NOT NULL,
  `file_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_details`
--

INSERT INTO `profile_details` (`username`, `file_name`) VALUES
('abc', 'Screenshot (51).png'),
('admin', 'aaIcon.png'),
('MdRasen', 'aIcon.png'),
('MdRasen9', 'mdrasen9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users`, `username`, `name`, `email`, `phone`, `dob`, `gender`, `address`, `password`, `cpassword`, `status`) VALUES
('admin', 'abc', 'abc xyz', 'abc@gmail.com', '78965432110', '2022-03-16', 'male', 'Puran Dhaka', '123', '123', 'verified'),
('admin', 'admin', 'admin', 'admin@gmail.com', '01234567890', '2022-03-21', 'male', 'Romna, Dhaka', 'admin', 'admin', 'verified'),
('student', 'arbho420', 'Arbho Ahmed', 'arbho@gmail.com', '45678912301', '2009-08-18', 'male', 'Dhanmondi, Dhaka', '123', '123', 'verified'),
('student', 'arif420', 'Arif Sadi', 'sadi420@gmail.com', '78965432110', '2022-03-09', 'male', 'Puran Dhaka', '123', '123', 'verified'),
('admin', 'ariya', 'Ariya Jahan', 'ariya@gmail.com', '78965432110', '2016-02-08', 'male', 'Mohakhali, Dhaka', '123', '123', 'verified'),
('teacher', 'Fahim', 'Fahim Mojummder', 'fahim@gmail.com', '98765432102', '2016-03-02', 'male', 'Rampura', '123', '123', 'verified'),
('teacher', 'Fahima', 'Fahima Ahmed', 'fahima@gmail.com', '96385274121', '2022-03-08', 'female', 'Dhaka', '123', '123', 'verified'),
('student', 'hima9', 'Al Hima', 'hima9@gmail.cm', '52857441966', '2022-03-08', 'female', 'Basundhara', '123', '123', 'verified'),
('student', 'IshikaJahan', 'Ishika Jahan', 'ishika@gmail.com', '12345678901', '2014-03-15', 'female', 'Puran Dhaka', '123', '123', 'verified'),
('student', 'isratkhan', 'Israt Binte Khan', 'israt@gmail.com', '45657898123', '2008-01-11', 'female', 'Romna, Dhaka', '123', '123', 'verified'),
('admin', 'MdRasen', 'Md Rasen', 'aamin.hossen99@gmail.com', '85967414254', '2022-03-01', 'male', 'Romna', '123', '123', 'verified'),
('student', 'natasha45', 'Natasha Rahmann', 'natasha@gmail.com', '85259636741', '2009-05-13', 'female', 'Uttara, Dhaka', '123', '123', 'verified'),
('student', 'raadrahman', 'Raad Rahman', 'raad@gmail.com', '98765432101', '2022-03-01', 'male', 'Uttara, Dhaka', '123', '123', 'verified'),
('student', 'rafy6', 'Al Rafy', 'rafy@gmail.com', '45678912301', '2022-03-08', 'male', 'Komolapur, Dhaka', '123', '123', 'verified'),
('teacher', 'sanjida', 'Sanjida Islam', 'sanjida4@gmail.com', '52634174859', '1996-03-08', 'female', 'Badda, Dhaka', '123', '123', 'verified'),
('student', 'student', 'student', 'student@gmail.com', '01234567890', '2022-03-07', 'male', 'Dhaka, Bangladesh', 'student', 'student', 'verified'),
('student', 'student1', 'Student1', 'student1@gmail.com', '12345678901', '2019-04-05', 'male', 'Uttara, Dhaka', '123', '123', 'verified'),
('student', 'student2', 'Student2', 'student2@gmail.com', '12345678910', '2022-01-13', 'female', 'Romna', '123', '123', 'verified'),
('student', 'student3', 'Student3', 'student3@gmail.com', '12345678901', '2016-04-04', 'female', 'Puran Dhaka', '123', '123', 'unverified'),
('student', 'student4', 'Student4', 'student4@gmail.com', '78965432110', '2016-02-09', 'female', 'Uttara, Dhaka', '123', '123', 'unverified'),
('teacher', 'teacher', 'teacher', 'teacher@gmail.com', '01234567890', '1998-03-02', 'male', 'Romna, Dhaka', 'teacher', 'teacher', 'verified'),
('teacher', 'teacher1', 'Teacher1', 'teacher1@gmail.com', '85967414254', '2016-04-04', 'female', 'Puran Dhaka', '123', '123', 'verified'),
('teacher', 'teacher2', 'Teacher2', 'teacher2@gmail.com', '96385274120', '2008-04-04', 'male', 'Rampura', '123', '123', 'verified'),
('teacher', 'teacher3', 'Teacher3', 'teacher3@gmail.com', '12345678910', '2012-04-05', 'female', 'Puran Dhaka', '123', '123', 'unverified'),
('teacher', 'teacher4', 'Teacher4', 'teacher4@gmail.com', '96385274120', '2012-12-04', 'male', 'Romna', '123', '123', 'unverified'),
('teacher', 'tishajaman', 'Tisha Jaman', 'tisha43@gmail.com', '12345678901', '2005-01-05', 'female', 'Uttara, Dhaka', '123', '123', 'verified'),
('teacher', 'xyz', 'XYZ', 'xyz@gmail.com', '96385274120', '2006-11-28', 'male', 'Romna', '123', '123', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `profile_details`
--
ALTER TABLE `profile_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
