-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 02:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`) VALUES
(1, 'ishika', '202cb962ac59075b964b07152d234b70', 'sevaykar', 'prakash', 'ishikapawar578@gmail.com', '8238753330'),
(2, 'ishikapawa', 'ishika', 'ishika', 'pawar', '', '9898062900'),
(3, 'ishika.', 'ishika123', 'ishika', 'pawar', 'ishika@gmail.com', '9898062900');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Unknown',
  `chances` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `name`, `company`, `status`, `chances`) VALUES
(1, 'Mohith', 'Infosys', 'Attended', NULL),
(2, 'Mohith', 'TCS', 'Unknown', NULL),
(3, 'Girish', 'Mobinius', 'Unknown', NULL),
(4, 'Girish', 'Infosys', 'Selected', NULL),
(5, 'Naveen', 'Invensis Technologies Private Limited', 'Unknown', NULL),
(6, 'Vinay ', 'Transact Bpo Services', 'Unknown', NULL),
(7, 'Vinay ', 'Qbix Intergrated Services', 'Unknown', NULL),
(9, 'Bharath', 'Invensis Technologies Private Limited', 'Unknown', NULL),
(12, 'Girish', 'Mobinius', 'Unknown', NULL),
(13, 'Girish', 'Cognizant Technology Solutions', 'Unknown', NULL),
(14, 'Naveen', 'BigScal', 'Selected', NULL),
(15, 'Ishika', 'Cognizant Technology Solutions', 'Rejected', NULL),
(16, 'monika', 'Wipro', 'Selected', NULL),
(17, 'sagar', 'BigScal', 'Selected', NULL),
(18, 'sagar', 'Infosys', 'Unknown', NULL),
(19, 'nitin', 'Mobinius', 'Unknown', NULL),
(20, 'ishika', 'Infosys', 'Selected', NULL),
(21, 'monika', 'Cognizant Technology Solutions', 'Unknown', NULL),
(22, 'nikita', 'Wipro', 'Selected', NULL),
(23, 'sagar', 'Mobinius', 'Selected', NULL),
(24, 'anjali', 'BigScal', 'Rejected', NULL),
(25, 'anjali', 'abc', 'Selected', NULL),
(26, 'priya', 'Mobinius', 'Rejected', NULL),
(27, 'priya', 'BigScal', 'Selected', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `name` varchar(130) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `minperc` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `type`, `address`, `number`, `website`, `status`, `minperc`) VALUES
(2, 'TCS', 'IT', 'Mumbai, Maharashtra', '8967879890', 'https://www.tcs.com/', 'Inactive', '70'),
(5, 'Mobinius', 'IT', 'No. 311/ 19, 2nd Floor, 1st Main Rd, 8th Block, Jayanagar, Bengaluru, Karnataka 560082', '8050892700', 'https://www.mobinius.com', 'Active', '70'),
(6, 'Wipro', 'IT', ' Block C, Sarjapur Main Rd, Doddakannelli, Bengaluru, Karnataka 560035', '9078767654', 'https://www.wipro.com/', 'Active', '80%'),
(7, 'Techiesys Web design', 'IT', ' #65/2, Shree Ganesh towers 3rd floor Shop no 1,2, Near Unilet opp sumangali Silks, B Narayanaswamappa Rd, Yeswanthpur, Bengaluru, Karnataka 560022', '99003 44725', 'https://www.techiesys.in/', 'Active', '60%'),
(8, 'Cognizant Technology Solutions', 'IT', 'BLOCK D1, Manayata Tech Park, Thanisandra, Bengaluru, Karnataka 560045', '9898062900', 'https://www.cognizant.com', 'Active', '70'),
(15, 'abc', 'IT', 'surat', '7488600382', 'abc.com', 'Active', '0'),
(14, 'BigScal', 'IT', '309 aastik nagar', '9898062900', 'bigscal@gmail.com', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(255) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user`, `message`, `date`, `time`) VALUES
(1, 'sagar', 'hyy admin', '2023-12-12', '06:01:39'),
(2, 'sagar', 'ok', '2023-12-12', '06:02:31'),
(3, 'sagar', 'ok done this page', '2023-12-12', '06:25:07'),
(4, 'sagar', 'i', '2023-12-12', '06:25:37'),
(5, 'sagar', 'll', '2023-12-12', '06:26:25'),
(6, 'sagar', 'yess', '2023-12-12', '06:29:19'),
(7, 'sagar', 'ok pass', '2023-12-12', '06:30:05'),
(8, 'sagar', 'aditya', '2023-12-12', '06:30:57'),
(9, 'sagar', '', '2023-12-12', '06:33:26'),
(10, 'sagar', 'jnnn', '2023-12-12', '06:33:32'),
(11, 'sagar', 'HII Vidhi You Are Hired....!!!!!1', '2023-12-12', '12:59:10'),
(12, 'sagar', 'Hii Ishika ', '2023-12-12', '13:01:47'),
(13, 'sagar', 'hiii', '2023-12-12', '13:02:58'),
(14, 'sagar', 'hi monika', '2023-12-18', '13:08:49'),
(15, 'sagar', 'hi monika', '2023-12-18', '13:08:55'),
(16, 'sagar', 'hi monika u r hired in STPL Congragulations............................', '2023-12-18', '13:11:33'),
(17, 'sagar', 'hi ishika\r\n', '2023-12-19', '17:11:29'),
(18, 'sagar', 'Hi ishika congragulations on your placement...', '2023-12-19', '17:26:04'),
(19, 'sagar', 'ooy\r\n', '2023-12-19', '17:40:33'),
(20, 'sagar', 'hi\r\n', '2023-12-19', '17:43:25'),
(21, 'sagar', 'mhvdfs', '2023-12-19', '17:50:00'),
(22, 'sagar', 'jhgds', '2023-12-19', '18:14:30'),
(23, 'sagar', 'hi vandana\r\n', '2023-12-19', '18:15:14'),
(24, 'ishika', 'hi', '2023-12-22', '10:01:12'),
(25, 'ishika', 'hi\r\n', '2023-12-22', '11:25:35'),
(26, 'ishika', 'hi\r\n', '2023-12-22', '11:27:07'),
(27, 'ishika', 'gekio', '2023-12-22', '11:30:33'),
(28, 'ishika', 'hi\r\n', '2023-12-22', '11:31:15'),
(29, 'ishika', 'hi sir\r\n', '2023-12-22', '11:51:50'),
(30, 'ishika', 'hi nitin\r\n', '2023-12-22', '11:57:13'),
(31, 'ishika', 'hello mam', '2023-12-22', '13:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `education` varchar(100) NOT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skill` varchar(100) NOT NULL,
  `achivement` varchar(100) DEFAULT NULL,
  `hobby` varchar(50) DEFAULT NULL,
  `objective` varchar(300) NOT NULL,
  `linkdin` varchar(30) DEFAULT NULL,
  `github` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `fullname`, `phone`, `address`, `image`, `education`, `experience`, `skill`, `achivement`, `hobby`, `objective`, `linkdin`, `github`, `email`) VALUES
(1, 'Ishika Bhimrao Pawar', '7283940396', 'aaspass', 'abc.png', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'abc', 'ishika@gmail.com'),
(2, 'Ishika Bhimrao Pawar', '7283940396', 'aaspass', 'qb', 'g', 'e', 'hgh', 'bn', 'abc', 'vvh', 'abc', 'abc', 'ishika@gmail.com'),
(3, 'monika', '09909119923', '307 aastik nagar', 'monika.jpeg', 'kgkjg', 'gkg', 'jk', 'khghk', 'hhgk', 'khgkg', 'linkdinid', 'githubid', 'monika@gmail.com'),
(4, 'Monika Mishra', '9898062900', '302 Astik Apartment godadara s', 'monika.jpeg', 'BSC Computer science cgpa: 7.45\r\nmsc ict informatin communication ', '-', 'html, java programming,php', 'certificate by iit Bombay html , javascript , web development', 'playing, music,traveling', 'shdh sjdkhfk hfa ywe i careets kjsk kjcklcmzbjdhcjx cxmnjbjshkajb c bckjsbcmnjhksjkcmbkjcckcmcbkjsbsckjsbc nbckjsksbcmslksjnkjbcscbsbmccmn', 'monikakumari05linkdin.com', 'monika05kumari', 'monika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `secque` varchar(100) NOT NULL,
  `secans` varchar(100) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `yop` varchar(10) DEFAULT 'curdate()',
  `sslc` varchar(100) DEFAULT NULL,
  `puc` varchar(100) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`, `secque`, `secans`, `course`, `percentage`, `yop`, `sslc`, `puc`, `image_name`) VALUES
(35, 'anjali', '12ed51686a83dff335014f5960cf94a4', 'anjali', 'singh', 'anjali@gmail.com', '9898062900', 'Which is Favourite Food?', 'pizza', 'BCOM', '90', '2018', '90', '90', 'student_name_6412.jpeg'),
(36, 'priya', 'a02005bfad55ba8f265a532e874142d0', 'priya', 'pawar', 'priya@gmail.com', '9898062900', 'Which is Favourite Food?', 'pizza', 'ME/MTECH', '90', '2018', '90', '90', 'student_name_3434.jpeg'),
(33, 'ishika05pawar', '064d6f413fb035c56c9fd1aad577779e', 'ishika', 'pawar', 'ishikapawar578@gmail.com', '9909119923', 'Which is Favourite Food?', 'abc', NULL, NULL, 'curdate()', NULL, NULL, 'student_name_16.jpeg'),
(34, 'sagar', '41ed44e3038dbeee7d2ffaa7f51d8a4b', 'sagar', 'sevaykar', 'sagar@gmail.com', '9898062900', 'Which is Favourite Food?', 's', 'MCOM', '90', '2018', '90', '90', 'student_name_7802.jpeg'),
(25, 'aditya', '202cb962ac59075b964b07152d234b70', 'aditya', 'aditya', 'kumarimonikadav@gmail.com', '9925252525', 'Which is Favourite Food?', 'pk', NULL, NULL, 'curdate()', NULL, NULL, 'student_name_3300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studentsdata`
--

CREATE TABLE `studentsdata` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sgpa` varchar(10) DEFAULT NULL,
  `programming_languages` varchar(50) DEFAULT NULL,
  `resume` varchar(20) DEFAULT NULL,
  `backlog` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentsdata`
--

INSERT INTO `studentsdata` (`id`, `name`, `course`, `contact`, `email`, `sgpa`, `programming_languages`, `resume`, `backlog`) VALUES
(1, 'sagar', '', '9955555555', 'nitin@gmail.com', '6.71', 'Android, DotNet Core', 'jay-SQA.pdf', 'on'),
(2, 'sagar', '', '9955555555', 'sagarsevaykar@gmail.com', '6.71', 'Android, DotNet Core, IOS', 'jay-SQA.pdf', 'on'),
(3, 'sagar', 'bsc it', '9955555555', 'hiteshotari12@gmail.com', '', 'Java, MERN', 'jay-SQA.pdf', 'yes'),
(4, 'Ishika bhimrao pawar', 'bca', '8989898989', 'ishikapawar578@gmail.com', '7.45', 'Android', 'IshikaPawar.pdf', 'no'),
(5, 'nikita mishra', 'msc it', '8989898989', 'nikita@gmail.com', '7.45', 'DotNet Core, IOS', 'Veer Narmad South Gu', 'no'),
(6, 'Nikhil Pawar', 'msc ict', '8989898989', 'nikhilpawar2003@gmail.com', '7.45', 'IOS, Java', 'IshikaPawar.pdf', 'no'),
(7, 'anjali singh', 'msc ict', '8989898989', 'anjali@gmail.com', '7.45', 'Android, IOS, Java', '', 'yes'),
(8, 'priya', 'msc ict', '8989898989', 'priya@gmail.com', '7.45', 'DotNet Core, IOS, Java', '', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `studentsdata`
--
ALTER TABLE `studentsdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `studentsdata`
--
ALTER TABLE `studentsdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
