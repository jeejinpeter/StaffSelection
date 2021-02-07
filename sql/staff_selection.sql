-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 11:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_selection`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_basic_info`
--

CREATE TABLE `application_basic_info` (
  `id` int(11) NOT NULL,
  `application_id` varchar(50) NOT NULL,
  `enquiry_no` int(11) NOT NULL,
  `post` varchar(30) NOT NULL,
  `department` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `place_of_birth_district` varchar(50) NOT NULL,
  `place_of_birth_state` varchar(50) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `physical_disability` varchar(250) NOT NULL,
  `disability_percentage` varchar(30) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `present_city` varchar(250) NOT NULL,
  `present_district` varchar(250) NOT NULL,
  `present_state` varchar(250) NOT NULL,
  `present_pincode` varchar(20) NOT NULL,
  `contact_address` varchar(500) NOT NULL,
  `contact_city` varchar(250) NOT NULL,
  `contact_district` varchar(250) NOT NULL,
  `contact_state` varchar(250) NOT NULL,
  `contact_pincode` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `father_education` varchar(250) NOT NULL,
  `father_occupation` varchar(200) NOT NULL,
  `father_remarks` text NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `mother_education` varchar(250) NOT NULL,
  `mother_occupation` varchar(200) NOT NULL,
  `mother_remarks` text NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `spouse_education` varchar(250) DEFAULT NULL,
  `spouse_occupation` varchar(200) DEFAULT NULL,
  `applied_other_job` varchar(10) NOT NULL,
  `other_job_detail` text,
  `minimum_period` int(10) NOT NULL,
  `language_one` varchar(100) NOT NULL,
  `language_two` varchar(100) NOT NULL,
  `language_three` varchar(100) NOT NULL,
  `language_four` varchar(100) NOT NULL,
  `international_publication` int(11) NOT NULL,
  `national_publication` int(11) NOT NULL,
  `regional_publication` int(11) NOT NULL,
  `issn_proceedings` int(11) NOT NULL,
  `other_publications` int(11) NOT NULL,
  `extracurricular_activities` longtext NOT NULL,
  `reference_name_1` varchar(250) NOT NULL,
  `reference_phone_1` varchar(30) NOT NULL,
  `reference_name_2` varchar(250) NOT NULL,
  `reference_phone_2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `application_basic_info`
--

INSERT INTO `application_basic_info` (`id`, `application_id`, `enquiry_no`, `post`, `department`, `name`, `gender`, `age`, `dob`, `place_of_birth_district`, `place_of_birth_state`, `religion`, `caste`, `physical_disability`, `disability_percentage`, `present_address`, `present_city`, `present_district`, `present_state`, `present_pincode`, `contact_address`, `contact_city`, `contact_district`, `contact_state`, `contact_pincode`, `phone`, `mobile`, `email`, `father_name`, `father_education`, `father_occupation`, `father_remarks`, `mother_name`, `mother_education`, `mother_occupation`, `mother_remarks`, `marital_status`, `spouse_education`, `spouse_occupation`, `applied_other_job`, `other_job_detail`, `minimum_period`, `language_one`, `language_two`, `language_three`, `language_four`, `international_publication`, `national_publication`, `regional_publication`, `issn_proceedings`, `other_publications`, `extracurricular_activities`, `reference_name_1`, `reference_phone_1`, `reference_name_2`, `reference_phone_2`) VALUES
(1, 'S19000186', 1, 'professor', 'Physics', 'Saniya Sunil', 'Female', 39, '12-02-1980', 'Kollam', 'Kerala', 'Christian', 'LC', 'No', '', 'OSMe Text, Addres lin1', 'Kollam', 'Kollam', 'Kerala', '691001', 'OSMe Text, Addres lin1', 'Kollam', 'Kollam', 'Kerala', '691001', '', '9568845786', 'sani@gmail.com', 'John', 'somke', 'some', 'text', 'Mary', 'some text', 'text', 'text', 'Single', '', '', 'NO', '', 5, 'English -on,on,on', 'Malayalam -on,on,on', 'Hindi-on,on,off', '-', 0, 0, 0, 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `application_education_details`
--

CREATE TABLE `application_education_details` (
  `enquiry_no` int(11) NOT NULL,
  `examination` varchar(250) NOT NULL,
  `institution` text NOT NULL,
  `board` varchar(500) NOT NULL,
  `subjects` text NOT NULL,
  `year_of_passing` varchar(30) NOT NULL,
  `no_of_attempts` int(11) NOT NULL,
  `class_grade` varchar(30) NOT NULL,
  `percentage_marks` varchar(50) NOT NULL,
  `group_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `application_education_details`
--

INSERT INTO `application_education_details` (`enquiry_no`, `examination`, `institution`, `board`, `subjects`, `year_of_passing`, `no_of_attempts`, `class_grade`, `percentage_marks`, `group_type`) VALUES
(1, 'SSLC', 'sdfdgfghf', 'dfghd', 'dfgdf', '1996', 1, 'First', '67', 'SSLC'),
(1, 'Plus Two', 'df', 'dfgdf', 'dfgf', '1998', 1, 'First', '74', 'Plus Two'),
(1, 'B.Sc.', 'fgdfg', 'fgf', 'dfgfg', '2001', 1, 'First', '78', 'UG'),
(1, 'B.Ed.', 'cbvcb', 'vgc', 'fvbgc', '2002', 1, 'First', '73', 'UG'),
(1, 'M.Sc.', 'bcvbf', 'fg', 'fgf', '2004', 1, 'First', '79', 'PG');

-- --------------------------------------------------------

--
-- Table structure for table `application_experience_details`
--

CREATE TABLE `application_experience_details` (
  `enquiry_no` int(11) NOT NULL,
  `organisation` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `work_type` varchar(30) NOT NULL,
  `salary_type` varchar(30) NOT NULL,
  `pay_scale` varchar(50) NOT NULL,
  `work_period` varchar(20) NOT NULL,
  `supervisor_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `application_form_status`
--

CREATE TABLE `application_form_status` (
  `enquiry_id` int(30) NOT NULL,
  `application_id` varchar(30) NOT NULL,
  `step_one` tinyint(4) NOT NULL DEFAULT '0',
  `step_two` tinyint(4) NOT NULL DEFAULT '0',
  `step_three` tinyint(4) NOT NULL DEFAULT '0',
  `step_four` tinyint(4) NOT NULL DEFAULT '0',
  `step_five` tinyint(4) NOT NULL DEFAULT '0',
  `step_six` tinyint(4) NOT NULL DEFAULT '0',
  `step_seven` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_form_status`
--

INSERT INTO `application_form_status` (`enquiry_id`, `application_id`, `step_one`, `step_two`, `step_three`, `step_four`, `step_five`, `step_six`, `step_seven`) VALUES
(1, 'S19000186', 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_enquiry`
--

CREATE TABLE `staff_enquiry` (
  `id` int(11) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `s_email` varchar(250) NOT NULL,
  `s_mobile` varchar(30) NOT NULL,
  `s_dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_enquiry`
--

INSERT INTO `staff_enquiry` (`id`, `s_name`, `s_email`, `s_mobile`, `s_dob`) VALUES
(1, 'Saniya Sunil', 'sani@gmail.com', '9568845786', '12-02-1980');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`id`, `enquiry_id`, `username`, `password`) VALUES
(1, 1, 'S19000186', '12-02-1980');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_basic_info`
--
ALTER TABLE `application_basic_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiry_no` (`enquiry_no`);

--
-- Indexes for table `application_experience_details`
--
ALTER TABLE `application_experience_details`
  ADD KEY `enquiry_no` (`enquiry_no`);

--
-- Indexes for table `staff_enquiry`
--
ALTER TABLE `staff_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_basic_info`
--
ALTER TABLE `application_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_enquiry`
--
ALTER TABLE `staff_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
