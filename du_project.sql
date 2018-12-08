-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 09:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_code`
--

CREATE TABLE `college_code` (
  `id` int(11) NOT NULL,
  `college_code` int(11) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_code`
--

INSERT INTO `college_code` (`id`, `college_code`, `college_name`) VALUES
(1, 3030, 'Dhaka College'),
(2, 3090, 'Kushtia College'),
(3, 3080, 'Jamalpur College');

-- --------------------------------------------------------

--
-- Table structure for table `first_year_result`
--

CREATE TABLE `first_year_result` (
  `id` int(11) NOT NULL,
  `nu_reg` varchar(50) DEFAULT NULL,
  `du_reg` varchar(50) DEFAULT NULL,
  `code1` varchar(255) DEFAULT NULL,
  `code2` varchar(255) DEFAULT NULL,
  `code3` varchar(255) DEFAULT NULL,
  `code4` varchar(255) DEFAULT NULL,
  `code5` varchar(255) DEFAULT NULL,
  `code6` varchar(255) DEFAULT NULL,
  `code7` varchar(255) DEFAULT NULL,
  `code9` varchar(255) DEFAULT NULL,
  `code10` varchar(255) DEFAULT NULL,
  `total_credit` varchar(255) DEFAULT NULL,
  `total_cgpa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year_result`
--

INSERT INTO `first_year_result` (`id`, `nu_reg`, `du_reg`, `code1`, `code2`, `code3`, `code4`, `code5`, `code6`, `code7`, `code9`, `code10`, `total_credit`, `total_cgpa`) VALUES
(1, '484704', '6576', '1052=C+=2.25', '1053=c=2.00', '1054=B+=3.25', '1055=A+=3.75', '6192=C+=2.95', '6203=C=2.50', NULL, NULL, NULL, '24', '2.3'),
(2, '484705', '6568', '1052=C=2.00', '1053=A-=3.60', '1054=B+=3.25', '1055=c=2.50', '6192=C=2.50', '6203=C+=2.75', '1054=B+=3.25', '1053=A-=3.60', '6203=C+=2.75', '30', '2'),
(3, '484706', '6578', '1052=B+=3.26', '1053=c=2.00', '1054=B+=3.25', '1055=B+=3.30', '6192=B=3.00', '6203=A=3.80', '1054=B+=3.25', '1053=c=2.00', '6203=A=3.80', '26', '3');

-- --------------------------------------------------------

--
-- Table structure for table `fourth_year_result`
--

CREATE TABLE `fourth_year_result` (
  `id` int(11) NOT NULL,
  `nu_reg` varchar(255) DEFAULT NULL,
  `du_reg` varchar(255) DEFAULT NULL,
  `codefo1` varchar(255) DEFAULT NULL,
  `codefo2` varchar(255) DEFAULT NULL,
  `codefo3` varchar(255) DEFAULT NULL,
  `codefo4` varchar(255) DEFAULT NULL,
  `codefo5` varchar(255) DEFAULT NULL,
  `codefo6` varchar(255) DEFAULT NULL,
  `codefo7` varchar(255) DEFAULT NULL,
  `codefo8` varchar(255) DEFAULT NULL,
  `codefo9` varchar(255) DEFAULT NULL,
  `codefo10` varchar(255) DEFAULT NULL,
  `codefo11` varchar(255) DEFAULT NULL,
  `total_credit_fo` varchar(255) DEFAULT NULL,
  `total_cgpa_fo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourth_year_result`
--

INSERT INTO `fourth_year_result` (`id`, `nu_reg`, `du_reg`, `codefo1`, `codefo2`, `codefo3`, `codefo4`, `codefo5`, `codefo6`, `codefo7`, `codefo8`, `codefo9`, `codefo10`, `codefo11`, `total_credit_fo`, `total_cgpa_fo`) VALUES
(1, '484704', '6576', '1062=C+=2.25', '1063=c=2.00', '1064=B+=3.25', '1065=A+=3.75', '1096=C+=2.95', '7192=C=2.50', '7203=B+=3.25', '1063=c=2.00', '7192=C=2.50', '7203=B+=3.25', '1062=C=2.50', '24', '3.3'),
(2, '484705', '6568', '1062=C=2.00', '1063=A-=3.60', '1064=B+=3.25', '1065=c=2.50', '1096=C=2.50', '7192=C+=2.75', '7203=B+=3.25', '1063=A-=3.60', '7192=C+=2.75', '7203=B+=3.25', '1062=C+=2.75', '30', '4.8'),
(3, '484706', '6578', '1062=B+=3.26', '1063=c=2.00', '1064=B+=3.25', '1065=B+=3.30', '1096=B=3.00', '7192=A=3.80', '7203=B+=3.25', '1063=c=2.00', '7192=A=3.80', '7203=B+=3.25', '1062=A=3.80', '26', '3.9');

-- --------------------------------------------------------

--
-- Table structure for table `paper_code_title_credits`
--

CREATE TABLE `paper_code_title_credits` (
  `id` int(11) NOT NULL,
  `code_id` int(11) DEFAULT NULL,
  `paper_code` varchar(255) DEFAULT NULL,
  `paper_code_title` varchar(255) DEFAULT NULL,
  `credits` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_code_title_credits`
--

INSERT INTO `paper_code_title_credits` (`id`, `code_id`, `paper_code`, `paper_code_title`, `credits`) VALUES
(1, 123, '1052', 'History And Culture Of Bangladesh And Bengalies (From Ancients To 2000 AD)', '4'),
(2, 124, '1053', 'History Of Bangla Language And Functional Bangla', '3'),
(3, 125, '1054', 'Bangla Novel-1', '4'),
(4, 126, '1055', 'Bangla Poetry', '4'),
(5, 127, '6192', 'Introduction To Political Theory', '4'),
(6, 128, '6203', 'ntroducing Sociology', '4'),
(7, 129, '1062', 'History Of Bengali Literature -1', '4'),
(8, 130, '1063', 'Poetry Of Medieval', '4'),
(9, 131, '1064', 'Bengali Poetry -2', '4'),
(10, 132, '1065', 'Bengali Drama -1', '4'),
(11, 133, '1096', 'Viva-Voce', '4'),
(12, 134, '7192', 'Political Organization And The Political', '4'),
(13, 135, '7203', 'Sociology Of Bangladesh', '4');

-- --------------------------------------------------------

--
-- Table structure for table `second_year_result`
--

CREATE TABLE `second_year_result` (
  `id` int(11) NOT NULL,
  `nu_reg` varchar(255) DEFAULT NULL,
  `du_reg` varchar(255) DEFAULT NULL,
  `codes1` varchar(255) DEFAULT NULL,
  `codes2` varchar(255) DEFAULT NULL,
  `codes3` varchar(255) DEFAULT NULL,
  `codes4` varchar(255) DEFAULT NULL,
  `codes5` varchar(255) DEFAULT NULL,
  `codes6` varchar(255) DEFAULT NULL,
  `codes7` varchar(255) DEFAULT NULL,
  `codes8` varchar(255) DEFAULT NULL,
  `codes9` varchar(255) DEFAULT NULL,
  `total_credit_s` varchar(255) DEFAULT NULL,
  `total_cgpa_s` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_year_result`
--

INSERT INTO `second_year_result` (`id`, `nu_reg`, `du_reg`, `codes1`, `codes2`, `codes3`, `codes4`, `codes5`, `codes6`, `codes7`, `codes8`, `codes9`, `total_credit_s`, `total_cgpa_s`) VALUES
(1, '484704', '6576', '1062=C+=2.25', '1063=c=2.00', '1064=B+=3.25', '1065=A+=3.75', '1096=C+=2.95', '7192=C=2.50', '7203=B+=3.25', '1063=c=2.00', '1062=C=2.50', '24', '2.3'),
(2, '484705', '6568', '1062=C=2.00', '1063=A-=3.60', '1064=B+=3.25', '1065=c=2.50', '1096=C=2.50', '7192=C+=2.75', '7203=B+=3.25', '1063=A-=3.60', '1062=C+=2.75', '30', '3.50'),
(3, '484706', '6578', '1062=B+=3.26', '1063=c=2.00', '1064=B+=3.25', '1065=B+=3.30', '1096=B=3.00', '7192=A=3.80', '7203=B+=3.25', '1063=c=2.00', '1062=A=3.80', '26', '3.75');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `college_code` int(11) DEFAULT NULL,
  `subject_code` int(11) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `nu_reg` varchar(255) DEFAULT NULL,
  `du_reg` varchar(255) DEFAULT NULL,
  `exam_roll` varchar(255) DEFAULT NULL,
  `result_publish_date` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `ncc` varchar(255) DEFAULT NULL,
  `total_gpa` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `college_code`, `subject_code`, `session`, `nu_reg`, `du_reg`, `exam_roll`, `result_publish_date`, `student_name`, `ncc`, `total_gpa`, `result`) VALUES
(1, 3030, 5912, '2011-12', '484704', '6576', '2132', '6/12/2018', 'Jamal Khan', 'PASS', '3.4', 'PASSED'),
(2, 3090, 5913, '2011-12', '484705', '6568', '2134', '3/12/2017', 'Kamal Hosen', 'FAIL', '2', 'FAILED'),
(3, 3080, 5914, '2012-13', '484706', '6578', '2136', '8/3/2018', 'Asif Hosen', 'PASS', '3.8', 'PASSED');

-- --------------------------------------------------------

--
-- Table structure for table `subject_code_title`
--

CREATE TABLE `subject_code_title` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(50) DEFAULT NULL,
  `subject_title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_code_title`
--

INSERT INTO `subject_code_title` (`subject_id`, `subject_code`, `subject_title`) VALUES
(1, '5912', 'BANGLA'),
(2, '5913', 'ENGLISH'),
(3, '5914', 'ENVT');

-- --------------------------------------------------------

--
-- Table structure for table `third_year_result`
--

CREATE TABLE `third_year_result` (
  `id` int(11) NOT NULL,
  `nu_reg` varchar(255) DEFAULT NULL,
  `du_reg` varchar(255) DEFAULT NULL,
  `codet1` varchar(255) DEFAULT NULL,
  `codet2` varchar(255) DEFAULT NULL,
  `codet3` varchar(255) DEFAULT NULL,
  `codet4` varchar(255) DEFAULT NULL,
  `codet5` varchar(255) DEFAULT NULL,
  `codet6` varchar(255) DEFAULT NULL,
  `codet7` varchar(255) DEFAULT NULL,
  `codet8` varchar(255) DEFAULT NULL,
  `codet9` varchar(255) DEFAULT NULL,
  `codet10` varchar(255) DEFAULT NULL,
  `codet11` varchar(255) DEFAULT NULL,
  `total_credit_t` varchar(255) DEFAULT NULL,
  `total_cgpa_t` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_year_result`
--

INSERT INTO `third_year_result` (`id`, `nu_reg`, `du_reg`, `codet1`, `codet2`, `codet3`, `codet4`, `codet5`, `codet6`, `codet7`, `codet8`, `codet9`, `codet10`, `codet11`, `total_credit_t`, `total_cgpa_t`) VALUES
(1, '484704', '6576', '1062=C+=2.25', '1063=c=2.00', '1064=B+=3.25', '1065=A+=3.75', '1096=C+=2.95', '7192=C=2.50', '7203=B+=3.25', '1063=c=2.00', '7192=C=2.50', '7203=B+=3.25', '1062=C=2.50', '24', '3.3'),
(2, '484705', '6568', '1062=C=2.00', '1063=A-=3.60', '1064=B+=3.25', '1065=c=2.50', '1096=C=2.50', '7192=C+=2.75', '7203=B+=3.25', '1063=A-=3.60', '7192=C+=2.75', '7203=B+=3.25', '1062=C+=2.75', '30', '4.8'),
(3, '484706', '6578', '1062=B+=3.26', '1063=c=2.00', '1064=B+=3.25', '1065=B+=3.30', '1096=B=3.00', '7192=A=3.80', '7203=B+=3.25', '1063=c=2.00', '7192=A=3.80', '7203=B+=3.25', '1062=A=3.80', '26', '3.9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first_year_result`
--
ALTER TABLE `first_year_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fourth_year_result`
--
ALTER TABLE `fourth_year_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_code_title_credits`
--
ALTER TABLE `paper_code_title_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second_year_result`
--
ALTER TABLE `second_year_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_code_title`
--
ALTER TABLE `subject_code_title`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `third_year_result`
--
ALTER TABLE `third_year_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first_year_result`
--
ALTER TABLE `first_year_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fourth_year_result`
--
ALTER TABLE `fourth_year_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paper_code_title_credits`
--
ALTER TABLE `paper_code_title_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `second_year_result`
--
ALTER TABLE `second_year_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_code_title`
--
ALTER TABLE `subject_code_title`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `third_year_result`
--
ALTER TABLE `third_year_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
