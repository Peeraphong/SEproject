-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 04:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_ID` int(4) NOT NULL,
  `Username` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Password` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Position` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Nisit_No` varchar(10) CHARACTER SET tis620 COLLATE tis620_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_ID`, `Username`, `Password`, `Position`, `Nisit_No`) VALUES
(1, 'b6220502175', '123456', 'Nisit', '6220502175'),
(2, 'staff01', '123456', 'Staff', NULL),
(3, 'prof01', '123456', 'Professor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annouce`
--

CREATE TABLE `annouce` (
  `Annouce_ID` int(4) NOT NULL,
  `Annouce_Name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Annouce_Detail` text CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Annouce_Date` date NOT NULL,
  `Annouce_Link` text CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annouce`
--

INSERT INTO `annouce` (`Annouce_ID`, `Annouce_Name`, `Annouce_Detail`, `Annouce_Date`, `Annouce_Link`) VALUES
(1, 'ประกาศมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน', 'เนื่องจากมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน ตั้งอยู่ในพื้นที่ควบคุมสูงสุดและ\r\nเข้มงวด เพื่อให้การดำเนินงานของมหาวิทยาลัยฯ เป็นไปด้วยความเรียบร้อยและเป็นไปตามมาตรการของ\r\nศูนย์บริหารสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา', '2022-03-19', 'https://eng.kps.ku.ac.th/cpe/wp-content/uploads/2021/07/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8-%E0%B8%A1%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99-COVID-%E0%B8%89%E0%B8%9A%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B5%E0%B9%88-18.pdf'),
(2, 'ข้อมูลบริษัทที่รับนิสิตฝึกงาน/สหกิจศึกษา', 'ข้อมูลบริษัทที่รับนิสิตฝึกงาน/สหกิจศึกษา ปีการศึกษา 2564 ภาควิชาวิศวกรรมคอมพิวเตอร์', '2022-03-19', 'https://eng.kps.ku.ac.th/cpe/wp-content/uploads/2021/12/2564.12.23_internship64.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` int(4) NOT NULL,
  `Company_Name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Company_Address` text CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Company_Contact` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin DEFAULT NULL,
  `Company_No` varchar(12) CHARACTER SET tis620 COLLATE tis620_bin DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `salary` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Company_Name`, `Company_Address`, `Company_Contact`, `Company_No`, `detail`, `salary`) VALUES
(1, 'Bangkok Web Solution Co., Ltd.', '182 Tawan Rung Soi 7, Wang Thonglang, Bangkok 10310', 'info@bangkokwebsolution.com', '089 721 2222', 'Web Developer, System Analyst', 'ไม่มี'),
(2, 'Gofive Co., Ltd.', 'FYI Center Tower 1 Unit 506, 2525 FYI Center, Rama IV Rd, Khlong Toei, Bangkok 10110', 'info@gofive.co.th', '02 784 5855', 'Full stack, Mobile Application, Front End, Back End', '300 บาท/วัน'),
(3, 'Drone Academy Thailand', '58/64 MeungThongThani เทศบาลนครนนทบุรี 11120', 'LINE ID:@droneacademy', '02 000 0199', 'Internet of Thing, Hardware, Drone Engineer', 'มี'),
(4, 'บริษัท Hyper Solution Co.,Ltd', '60/1 อาคารมนริริน ห้อง A202 ชั้น 2 ซอยพหลโยธิน 8 ถนนพหลโยธิน แขวงสามเสนใน เขตพญาไท กรุงเทพมหานคร 10400', 'contact@hyper.co.th', '02 279 1247', 'Support Engineer, Network Engineer', 'ไม่มี'),
(6, 'บริษัท บิท โซลูชั่น จำกัด', '454, RATCHADAPISEK RD. , SAMSENNOK, HUEYKWANG, BANGKOK, 10310', 'hr@bitsolution.co.th', '02 512 4375', 'Network Engineer', 'ไม่มี'),
(7, 'บริษัท แวนเนส พลัส คอนซัลติ้ง จำกัด', '98 Sathorn Square Building, North Sathorn Rd., Silom, Bangrak, Bangkok 10500', 'hr@vannessplus.com', '061 060 8113', 'Web Application, Mobile Application', '150 บาท/วัน'),
(8, 'บริษัท จีพีวี เอเซีย (ประเทศไทย) จํากัด', '834 นิคมอุตสาหกรรม 11 ซอย 12 บี ตำบล แพรกษา อำเภอเมืองสมุทรปราการ สมุทรปราการ 10280', 'chj@gpv-asia.co.th', '02 709 2550', 'Embedded System, Support Engineer', 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(4) NOT NULL,
  `Contact_Username` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Contact_Email` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Contact_Detail` text CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Contact_Username`, `Contact_Email`, `Contact_Detail`) VALUES
(31, 'Alex', 'Alexza@gmail.com', 'ข้อมูลมีน้อยมากเลยครับ'),
(32, 'บอย ปกรณ์', 'boyza5678@hotmail.com', 'Interface สวยมากครับ');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `Download_ID` int(4) NOT NULL,
  `Download_Name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Download_Link` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`Download_ID`, `Download_Name`, `Download_Link`) VALUES
(1, 'ใบคำร้องขอฝึกงาน/สหกิจศึกษาในสถานประกอบการ', 'https://bit.ly/3HPMQyY');

-- --------------------------------------------------------

--
-- Table structure for table `form_internship`
--

CREATE TABLE `form_internship` (
  `form_id` int(11) NOT NULL,
  `intern_coop` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `petition` date NOT NULL,
  `nisit_no` varchar(10) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `name_surname` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `telephone_no` varchar(12) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `facebook_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `intern_position` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `person1_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `pos_ps1` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `company_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `house_number` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `street` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `districts` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `amphures` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `provinces` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `postcode` int(5) NOT NULL,
  `HR_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `HR_number` varchar(12) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `email` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `start_intern` date NOT NULL,
  `end_intern` date NOT NULL,
  `salary` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `room` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `status` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_internship`
--

INSERT INTO `form_internship` (`form_id`, `intern_coop`, `petition`, `nisit_no`, `name_surname`, `telephone_no`, `facebook_name`, `intern_position`, `person1_name`, `pos_ps1`, `company_name`, `house_number`, `street`, `districts`, `amphures`, `provinces`, `postcode`, `HR_name`, `HR_number`, `email`, `start_intern`, `end_intern`, `salary`, `room`, `status`) VALUES
(3, 'ฝึกงาน', '2022-03-23', '6220502175', 'พีระพงศ์ ศิริชัย', '062 612 1549', 'Peerapong Sirichai', 'Web Dev', 'คุณสมศักดิ์ เเจ่มว้าว', 'CEO', 'Bangkok Web Solution', '98/11', 'เพชรเกษม', 'ท่าตำหนัก', 'นครชัยศรี', 'นครปฐม', 73120, 'คุณกิ่งเเก้ว แวววาว', '087 411 6568', 'kingkaew@contact.com', '2022-04-18', '2022-06-10', 'ไม่มี', 'ไม่มี', 'อนุมัติ'),
(6, 'ฝึกงาน', '2022-03-23', '6220504682', 'นภัสสร จิระ', '098 830 9304', 'Napatsorn Jira', 'Front end Dev', 'คุณจุติพันธุ์ มงคลสุธี', 'CEO', 'Gofive', '506', 'พระราม4', 'คลองเตย', 'คลองเตย', 'กรุงเทพมหานคร', 10110, 'คุณสมศรี มีสกุล', '085 158 3059', 'Hr@gofive.com', '2022-04-18', '2022-06-10', '150', 'มี', 'ไม่อนุมัติ'),
(24, 'ฝึกงาน', '2022-03-25', '6220502124', 'ธนาวุฒิ จิรสุวินัย', '0123456789', 'Thanawut Jirasuvinai', 'System analyst', 'คุณสมศักดิ์ เเจ่มว้าว', 'CEO', 'Bangkok Web Solution', '98/11', 'เพชรเกษม', 'ท่าตำหนัก', 'นครชัยศรี', 'นครปฐม', 73120, 'คุณกิ่งเเก้ว แวววาว', '087 411 6568', 'kingkaew@contact.com', '2022-03-26', '2022-03-29', 'ไม่มี', 'ไม่มี', 'อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` varchar(10) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Staff_Username` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Staff_Password` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Staff_Position` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Staff_Name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Username`, `Staff_Password`, `Staff_Position`, `Staff_Name`) VALUES
('1234567890', 'prof01', '123456', 'Professor', 'Prof01 P01'),
('1234567891', 'staff01', '123456', 'Staff', 'Staff01 S01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(10) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Student_Username` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Student_Password` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL,
  `Student_Name` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Student_Username`, `Student_Password`, `Student_Name`) VALUES
('6220502124', 'b6220502124', '123456', 'Thanawut Jirasuvinai'),
('6220502175', 'b6220502175', '123456', 'Peeraphong Sirichai'),
('6220504682', 'b6220504682', '123456', 'Napatsorn Jira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_ID`),
  ADD KEY `Nisit_No` (`Nisit_No`);

--
-- Indexes for table `annouce`
--
ALTER TABLE `annouce`
  ADD PRIMARY KEY (`Annouce_ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`Download_ID`);

--
-- Indexes for table `form_internship`
--
ALTER TABLE `form_internship`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `nisit_no` (`nisit_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `annouce`
--
ALTER TABLE `annouce`
  MODIFY `Annouce_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `Download_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_internship`
--
ALTER TABLE `form_internship`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`Nisit_No`) REFERENCES `student` (`Student_ID`);

--
-- Constraints for table `form_internship`
--
ALTER TABLE `form_internship`
  ADD CONSTRAINT `form_internship_ibfk_1` FOREIGN KEY (`nisit_no`) REFERENCES `student` (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
