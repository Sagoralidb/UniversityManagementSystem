-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 06:59 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(50) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Sagor Ali BD', 'topnews24onlin@gmail.com', 2147483647, 'I am requesting for my admission'),
(2, 'Ruby', 'ruby@gamil.com', 1773925952, 'I am new student '),
(3, 'fasf', 'asdfas@gmail.com', 65555646, 'sadfsfsfs'),
(4, 'tttasdjf', 'tttasdfj@gmail.com', 4566666, 'sdfaefasdfasfas'),
(5, 'sfefasds', 'sdasdfaef@gmail.com', 963852, 'asdfasfsa'),
(6, 'dfsadfas', 'sdfasfae40@gmail.com', 6546565, ''),
(7, 'sdafas', 'sdfaexfg@gmail.com', 65165616, 'sfdasfasf'),
(8, 'Md.Masud Rana', 'rana@gamail.com', 96325896, 'dsafsdfasf'),
(9, 'sdfas', 'sefxd@gmail.com', 525646, 'test'),
(10, 'sdfafe', 'eeee@gmail.com', 7441258, 'sfefafa'),
(11, 'à¦¸à¦¾à¦—à¦° à¦†à¦² à¦¬à¦¿à¦¡à¦¿', 'er@gamil.com', 9635854, 'à¦†à¦®à¦¾à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾'),
(12, 'Rony', 'rony@gmail.com', 177392569, 'Hi I am Rony, applying for admission'),
(13, 'sdfasf', 'safsaeeww@gmail.com', 8646, 'testing boy'),
(14, 'kkk', 'lk@gmail.com', 6654, 'sfasfef33232323223232'),
(15, 'saddkljf', 'alskfd@gmail.com', 654654, 'sftttttttte9999999999999'),
(16, 'aefd', 'asdfe@gmail.com', 6546546, 'sadfeeeeee9999999999999999999999999test'),
(17, 'tania', 'taniatani03@gmail.com', 65465654, '56466asfdsafsaf'),
(18, 'Md.Sagor Ali', 'mdsagorali033@gmail.com', 221546284, 'Hello sir \r\nPlease check it'),
(19, 'fssfd', 'dfasfd@gmail.com', 6546565, 'sdfaeofafsfas'),
(20, 'sdfasf', 'fasfda@gmail.com', 5466136, 'sfaefaefaf');

-- --------------------------------------------------------

--
-- Table structure for table `classroutine`
--

CREATE TABLE `classroutine` (
  `id` int(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `days` varchar(50) NOT NULL,
  `start-time` time(5) NOT NULL,
  `end-time` time(5) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroutine`
--

INSERT INTO `classroutine` (`id`, `batch_no`, `days`, `start-time`, `end-time`, `subject`, `subject_code`, `room`, `teacher`, `email`, `phone`) VALUES
(27, '19', 'Sunday', '10:00:00.00000', '11:00:00.00000', 'Basic Electronics Circuit', 'EEE 1211', '205', 'robiul', 'robiul121@gmail.com', '2147483647'),
(28, '20', 'Sunday', '10:00:00.00000', '11:00:00.00000', 'Basic Electronics Circuit', 'EEE 1211', '205', 'robiul', 'robiul121@gmail.com', '2147483647'),
(29, '21', 'Sunday', '10:00:00.00000', '11:00:00.00000', 'Basic Electronics Circuit', 'EEE 1211', '205', 'robiul', 'robiul121@gmail.com', '2147483647'),
(30, '22', 'Sunday', '10:00:00.00000', '11:00:00.00000', 'Basic Electronics Circuit', 'EEE 1211', '205', 'robiul', 'robiul121@gmail.com', '2147483647'),
(31, '23', 'Sunday', '10:00:00.00000', '11:00:00.00000', 'Basic Electronics Circuit', 'EEE 1211', '205', 'robiul', 'robiul121@gmail.com', '2147483647'),
(32, '19', 'Monday', '10:00:00.00000', '11:00:00.00000', 'Introduction to Bengali language and Literature', 'Ban 1111', '306', 'rohima', 'rohima124@gmail.com', '2147483647'),
(33, '23', 'Monday', '10:00:00.00000', '11:00:00.00000', 'Introduction to Bengali language and Literature', 'Ban 1111', '306', 'rohima', 'rohima124@gmail.com', '2147483647'),
(34, '20', 'Thursday', '09:00:00.00000', '10:00:00.00000', 'Fundamental of Computer Systems', 'CSE1111', '307', 'sila', 'shila79@gmail.com', '1773925958'),
(35, '19', 'Tuesday', '15:00:00.00000', '16:00:00.00000', 'Electricity, Optics, Waves & Modern Physics', 'Phy 1111', '207', 'Jotirmoy', 'coordinator@gmail.com', '2147483647'),
(36, '19', 'Monday', '10:00:00.00000', '11:00:00.00000', 'Digital Image Processsing', 'CSE 4251', '205', 'sumia', 'sumia3@gmail.com', '5444545'),
(37, '20', 'Monday', '15:30:00.00000', '16:30:00.00000', 'Wirless Communication & networks Sessional', 'CSE 4332', '314', 'teacher', 'teachers12@gmail.com', '646546'),
(38, '25', 'Monday', '15:30:00.00000', '16:30:00.00000', 'Wirless Communication & networks Sessional', 'CSE 4332', '314', 'teacher', 'teachers12@gmail.com', '646546'),
(39, '20', 'Monday', '15:30:00.00000', '16:30:00.00000', 'Wirless Communication & networks Sessional', 'CSE 4332', '314', 'teacher', 'teachers12@gmail.com', '646546'),
(40, '25', 'Monday', '15:30:00.00000', '16:30:00.00000', 'Wirless Communication & networks Sessional', 'CSE 4332', '314', 'teacher', 'teachers12@gmail.com', '646546'),
(41, '23', 'Sunday', '10:30:00.00000', '11:00:00.00000', 'Digital Image Processsing', 'CSE 4251', '309', 'Joya', 'joya234@gmail.com', '15897412369'),
(42, '25', 'Sunday', '10:30:00.00000', '11:00:00.00000', 'Digital Image Processsing', 'CSE 4251', '309', 'Joya', 'joya234@gmail.com', '15897412369'),
(43, '20', 'Monday', '11:00:00.00000', '12:00:00.00000', 'Introduction to Digital Electronics', 'CSE 1211', '305', 'rohima', 'rohima124@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dpt_id` int(250) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dpt_id`, `department_name`, `department_code`) VALUES
(1, 'Computer Science and Engineering', 'CSE'),
(2, 'Electrical And Electronics Engineering', 'EEE'),
(4, 'Computer Technology', 'CT'),
(5, 'Civil Engineering', 'CVIL884'),
(6, 'Machanical Technology', 'MT1DOP'),
(7, 'Electronics Technologhi', 'ET1D'),
(8, 'Electro Medical Technology', 'EMT1D'),
(9, 'Law', 'LLB'),
(10, 'English', 'ENG'),
(12, '', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `fid` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `pay_date` datetime NOT NULL,
  `semister` varchar(20) NOT NULL,
  `mathods` varchar(20) NOT NULL,
  `fees` int(100) NOT NULL,
  `tranjection_id` varchar(100) NOT NULL,
  `fine` int(20) NOT NULL,
  `screenshort` varchar(250) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`fid`, `student_id`, `pay_date`, `semister`, `mathods`, `fees`, `tranjection_id`, `fine`, `screenshort`, `note`) VALUES
(1, 654656, '2024-01-10 00:00:00', '1st Semister', '3rd Semister', 10546, 'f65sf654', 0, 'Screenshot 2024-01-10 133708.png', ''),
(2, 0, '2024-01-08 00:00:00', '1st Semister', '3rd Semister', 8596, '1546efsfesf', 0, '1705754204_987985.jpg', ''),
(3, 12546, '2024-01-02 00:00:00', '2nd Semister', '3rd Semister', 9500, '9eseTeaTE6', 0, '1705754697_Screenshot 2024-01-07 221459.png', ''),
(4, 6549852, '2024-01-03 00:00:00', '1st Semister', '1st Semister', 8500, '5465eFtaEf', 0, '1705754828_Khalid Mahmud (1).png', ''),
(5, 765163, '2024-01-04 00:00:00', '1st Semister', '3rd Semister', 8692, 'sdfa7ef54sf', 0, '1705771121_65465.jpg', ''),
(6, 654656, '2024-01-01 00:00:00', '1st Semister', '1st Semister', 65456, 'fsaf65s', 0, '1705771224_65465.jpg', ''),
(7, 654656, '2024-01-02 00:00:00', '2nd Semister', '3rd Semister', 32424, '23424323424', 0, '1705771306_65465.jpg', ''),
(8, 654656, '2024-01-01 00:00:00', '3rd Semister', '4th Semister', 9950, 'sdgfasd65g', 0, '1705771544_65465.jpg', ''),
(9, 654656, '2024-01-01 00:00:00', '4th Semister', '2nd Semister', 10560, 'sdkjfs546sdf', 0, '1705771925_65465.jpg', ''),
(10, 654656, '2024-01-01 00:00:00', '3rd Semister', '2nd Semister', 10256, 'safe', 0, '1705772046_65465.jpg', ''),
(11, 765163, '2024-01-11 00:00:00', '4th Semister', '2nd Semister', 23313, '231313qdsafdasf', 0, '1705772202_65465.jpg', ''),
(12, 1909859, '2024-01-01 00:00:00', '4th Semister', '2nd Semister', 89652, 'TKLJKE', 0, '1705772456_digital_camera_photo-1080x675.jpg', ''),
(13, 654656, '2024-01-03 00:00:00', '3rd Semister', '2nd Semister', 78932, '34325353FFD', 0, '1705772558_e5f9b5854a9f865ca.jpg', ''),
(14, 6932, '2024-01-17 00:00:00', '2nd Semister', '3rd Semister', 10592, '4EfT8565', 0, '1706626215_IMG_20221104_163908.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(20) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `file`) VALUES
(9, '1704911223_logo.png'),
(10, '1704911323_logo.png'),
(11, '1704911391_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `notice_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expirydate` datetime NOT NULL,
  `department_code` varchar(100) NOT NULL,
  `notice_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `username`, `notice`, `notice_time`, `expirydate`, `department_code`, `notice_type`) VALUES
(1, 'samiya', 'CSE-egular :\r\nà¦à¦¤à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦¸à¦¿à¦à¦¸à¦‡ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¸à¦•à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¯à¦¾à¦šà§à¦›à§‡ à¦¯à§‡, à¦†à¦—à¦¾à¦®à§€ à§¨à§«/à§¦à§¯/à§¨à§© à¦¤à¦¾à¦°à¦¿à¦– à¦°à§‹à¦œ à¦¸à§‹à¦®à¦¬à¦¾à¦° à¦¦à§à¦ªà§à¦° à§§ à¦Ÿà¦¾à¦¯à¦¼ à§©à§¦à§® à¦¨à¦‚ à¦°à§à¦®à§‡ à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦¸à§‹à¦¸à¦¾à¦‡à¦Ÿà¦¿à¦° à¦ªà¦•à§à¦· à¦¥à§‡à¦•à§‡ à¦à¦•à¦Ÿà¦¿ à¦œà¦°à§à¦°à§€ à¦®à¦¿à¦Ÿà¦¿à¦‚ à¦à¦° à¦†à¦¯à¦¼à§‹à¦œà¦¨ à¦•à¦°à¦¾ à¦¹à¦¯à¦¼à§‡à¦›à§‡à¥¤\r\nà¦‰à¦•à§à¦¤ à¦®à¦¿à¦Ÿà¦¿à¦‚ à¦ à¦¸à¦¿à¦à¦¸à¦‡ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¸à¦•à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦‰à¦ªà¦¸à§à¦¥à¦¿à¦¤ à¦¥à¦¾à¦•à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¬à¦²à¦¾ à¦¹à¦šà§à¦›à§‡à¥¤\r\nà¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦à¥¤', '2023-10-02 07:32:54', '0000-00-00 00:00:00', '', ''),
(2, 'admin', 'à¦ªà§à¦°à¦¤à¦¿à¦¦à¦¿à¦¨ à¦…à¦¸à¦‚à¦–à§à¦¯ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œ à¦à¦¸à§‡ à¦­à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¥¤ à¦ªà§à¦°à¦¥à¦®à¦¤ à¦­à§à¦²à¦­à¦¾à¦² à¦®à§‡à¦¸à§‡à¦œà§‡ à¦‡à¦¨à¦¬à¦•à§à¦¸à¦Ÿà¦¾ à¦­à¦°à§‡ à¦¯à¦¾à§Ÿ à¦à¦¬à¦‚ à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿà¦¤ à¦¤à¦¾à¦° à¦«à¦²à§‡ à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦®à§‡à¦¸à§‡à¦œ à¦–à§à¦à¦œà¦¤à§‡ à¦—à¦¿à§Ÿà§‡ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦à¦¾à¦®à§‡à¦²à¦¾ à¦ªà§‹à¦¹à¦¾à¦¤à§‡ à¦¹à§Ÿà¥¤ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦®à§‡à¦¸à§‡à¦œà¦¿à¦‚ à¦…à§à¦¯à¦¾à¦ªà§‡à¦° à¦®à¦¤à§‹ à¦—à§à¦—à¦² à¦®à§‡à¦¸à§‡à¦œà§‡à¦“ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œà§‡ à¦­à¦°à¦ªà§à¦°à¥¤', '2023-11-29 07:35:10', '0000-00-00 00:00:00', '', ''),
(3, 'admin', '65464 à¦ªà§à¦°à¦¤à¦¿à¦¦à¦¿à¦¨ à¦…à¦¸à¦‚à¦–à§à¦¯ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œ à¦à¦¸à§‡ à¦­à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¥¤ à¦ªà§à¦°à¦¥à¦®à¦¤ à¦­à§à¦²à¦­à¦¾à¦² à¦®à§‡à¦¸à§‡à¦œà§‡ à¦‡à¦¨à¦¬à¦•à§à¦¸à¦Ÿà¦¾ à¦­à¦°à§‡ à¦¯à¦¾à§Ÿ à¦à¦¬à¦‚ à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿà¦¤ à¦¤à¦¾à¦° à¦«à¦²à§‡ à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦®à§‡à¦¸à§‡à¦œ à¦–à§à¦à¦œà¦¤à§‡ à¦—à¦¿à§Ÿà§‡ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦à¦¾à¦®à§‡à¦²à¦¾ à¦ªà§‹à¦¹à¦¾à¦¤à§‡ à¦¹à§Ÿà¥¤ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦®à§‡à¦¸à§‡à¦œà¦¿à¦‚ à¦…à§à¦¯à¦¾à¦ªà§‡à¦° à¦®à¦¤à§‹ à¦—à§à¦—à¦² à¦®à§‡à¦¸à§‡à¦œà§‡à¦“ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œà§‡ à¦­à¦°à¦ªà§à¦°à¥¤', '2023-11-29 07:36:12', '0000-00-00 00:00:00', '', ''),
(4, 'admin', 'à¦ªà§à¦°à¦¤à¦¿à¦¦à¦¿à¦¨ à¦…à¦¸à¦‚à¦–à§à¦¯ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œ à¦à¦¸à§‡ à¦­à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¥¤ à¦ªà§à¦°à¦¥à¦®à¦¤ à¦­à§à¦²à¦­à¦¾à¦² à¦®à§‡à¦¸à§‡à¦œà§‡ à¦‡à¦¨à¦¬à¦•à§à¦¸à¦Ÿà¦¾ à¦­à¦°à§‡ à¦¯à¦¾à§Ÿ à¦à¦¬à¦‚ à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿà¦¤ à¦¤à¦¾à¦° à¦«à¦²à§‡ à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦®à§‡à¦¸à§‡à¦œ à¦–à§à¦à¦œà¦¤à§‡ à¦—à¦¿à§Ÿà§‡ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦à¦¾à¦®à§‡à¦²à¦¾ à¦ªà§‹à¦¹à¦¾à¦¤à§‡ à¦¹à§Ÿà¥¤ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦®à§‡à¦¸à§‡à¦œà¦¿à¦‚ à¦…à§à¦¯à¦¾à¦ªà§‡à¦° à¦®à¦¤à§‹ à¦—à§à¦—à¦² à¦®à§‡à¦¸à§‡à¦œà§‡à¦“ à¦¸à§à¦ªà§à¦¯à¦¾à¦® à¦®à§‡à¦¸à§‡à¦œà§‡ à¦­à¦°à¦ªà§à¦°à¥¤', '2023-11-29 07:36:30', '0000-00-00 00:00:00', '', ''),
(5, 'robiul', 'à¦“à¦¯à¦¼à§‡à¦¬ à¦¹à§‹à¦¸à§à¦Ÿà¦¿à¦‚ à¦¹à¦² à¦à¦• à¦§à¦°à¦¨à§‡à¦° à¦ªà¦°à¦¿à¦·à§‡à¦¬à¦¾ à¦¯à¦¾ à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§‡à¦Ÿà§‡ à¦¯à§‡à¦•à§‹à¦¨à§‹ à¦¬à§à¦¯à¦•à§à¦¤à¦¿ à¦¬à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦“à¦¯à¦¼à§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿ à¦…à§à¦¯à¦¾à¦•à§à¦¸à§‡à¦¸à¦¯à§‹à¦—à§à¦¯ à¦•à¦°à§‡ à¦¤à§‹à¦²à§‡à¥¤\r\n\r\nà¦¦à§‡à¦¶à§‡ à¦…à¦°à§à¦¥à¦¨à§ˆà¦¤à¦¿à¦• à¦…à¦¸à§à¦¥à¦¿à¦¤à¦¿à¦¶à§€à¦²à¦¤à¦¾ à¦šà¦²à¦®à¦¾à¦¨ à¦¥à¦¾à¦•à¦¾ à¦¸à¦¤à§à¦¤à§à¦¬à§‡à¦“ à¦†à¦®à¦¾à¦° à¦¹à§‹à¦¸à§à¦Ÿà¦¾à¦° à¦¸à¦°à§à¦¬à§‹à¦šà§à¦š à¦›à¦¾à§œ à¦ à¦“à§Ÿà§‡à¦¬ à¦¹à§‹à¦¸à§à¦Ÿà¦¿à¦‚ à¦“ à¦«à§à¦°à§€ à¦¡à§‹à¦®à§‡à¦‡à¦¨ à¦¸à¦°à¦¬à¦°à¦¾à¦¹ à¦•à¦°à¦›à§‡à¥¤ à¦à¦–à¦¨ à¦®à¦¾à¦¤à§à¦° à§­à§®à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦¥à§‡à¦•à§‡ NVMe à¦¸à¦¿à¦ªà§à¦¯à¦¾à¦¨à§‡à¦² à¦¹à§‹à¦¸à§à¦Ÿà¦¿à¦‚ à¦à¦° à¦¸à¦¾à¦¥à§‡ à¦«à§à¦°à§€ à¦¡à¦Ÿà¦•à¦® à¦¬à¦¾ XYZ à¦¡à§‹à¦®à§‡à¦‡à¦¨ à¦¨à§‡à§Ÿà¦¾ à¦¯à¦¾à¦¬à§‡ ðŸ˜‰ï¸', '2023-11-29 08:44:54', '0000-00-00 00:00:00', '', ''),
(6, 'teacher', 'à¦†à¦°à§à¦Ÿà¦¿à¦«à¦¿à¦¶à¦¿à¦¯à¦¼à¦¾à¦² à¦‡à¦¨à§à¦Ÿà§‡à¦²à¦¿à¦œà§‡à¦¨à§à¦¸, à¦•à§ƒà¦¤à§à¦°à¦¿à¦® à¦¬à§à¦¦à§à¦§à¦¿à¦®à¦¤à§à¦¤à¦¾ à¦¬à¦¾ à¦à¦†à¦‡ à¦à¦–à¦¨ à¦•à§‹à¦¨ à¦ªà¦°à§à¦¯à¦¾à§Ÿà§‡ à¦ªà§Œà¦à¦›à§‡ à¦—à§‡à¦›à§‡ à¦¤à¦¾ à¦¨à¦¤à§à¦¨ à¦•à¦°à§‡ à¦¬à¦²à¦¾à¦° à¦…à¦ªà§‡à¦•à§à¦·à¦¾ à¦°à¦¾à¦–à§‡ à¦¨à¦¾à¥¤ à¦¸à¦¬ à¦•à¦¿à¦›à§à¦¤à§‡à¦‡ à¦à¦†à¦‡à§Ÿà§‡à¦° à¦›à§‹à¦à§Ÿà¦¾à¥¤ à¦à¦†à¦‡ à¦¦à¦¿à§Ÿà§‡ à¦‡à¦šà§à¦›à¦¾à¦®à¦¤à§‹ à¦›à¦¬à¦¿, à¦­à¦¿à¦¡à¦¿à¦“ à¦¬à¦¾à¦¨à¦¾à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦šà¦¾à¦‡à¦²à§‡ à¦—à¦²à§à¦ª à¦²à¦¿à¦–à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨, à¦¸à¦¿à¦­à¦¿ à¦¬à¦¾à¦‡à¦¨à¦¿à§Ÿà§‡ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦à¦†à¦‡ à¦¦à¦¿à§Ÿà§‡à¥¤', '2023-12-02 08:57:54', '0000-00-00 00:00:00', '', ''),
(8, 'runa', '#REMINDER #EEE #Thesis_and_Project #16th_Batch_Regular #19th_Batch_Diploma à¦¸à¦•à¦²à§‡à¦° à¦…à¦¬à¦—à¦¤à¦¿à¦° à¦œà¦¨à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¯à¦¾à¦šà§à¦›à§‡ à¦¯à§‡, à¦†à¦—à¦¾à¦®à§€ à§§à§® à¦à¦¬à¦‚ à§§à§¯ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à¦¿ à§¨à§¦à§¨à§ª à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦¯à¦¥à¦¾à¦•à§à¦°à¦®à§‡ à§§à§¬ (à¦°à§‡à¦—à§à¦²à¦¾à¦°) à¦à¦¬à¦‚ à§§à§¯ (à¦¡à¦¿à¦ªà§à¦²à§‹à¦®à¦¾) à¦¬à§à¦¯à¦¾à¦šà§‡à¦° Final Thesis/Project Presentation à¦…à¦¨à§à¦·à§à¦ à¦¿à¦¤ à¦¹à¦¬à§‡à¥¤ à¦«à¦¾à¦‡à¦¨à¦¾à¦² à¦ªà§à¦°à§‡à¦œ\r\nLink: http://localhost/student/view_post.php?post_id=32', '2024-01-11 09:05:38', '0000-00-00 00:00:00', '', ''),
(11, 'admin', 'à¦¸à¦•à¦²à§‡à¦° à¦‰à¦¦à§à¦¦à§‡à¦¶à§à¦¯à§‡ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¯à¦¾à¦šà§à¦›à§‡ à¦¯à§‡, à¦†à¦—à¦¾à¦®à¦¿ 25/01/2024 à¦‡à¦‚ à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦°à§‡ à¦®à¦§à§à¦¯à§‡ à¦¸à¦•à¦² à¦•à§‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦œà¦¨à§à¦¯ à¦ªà§‡à¦®à§‡à¦¨à§à¦Ÿ à¦ªà¦°à¦¿à¦¶à¦§ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤', '2024-01-17 05:25:48', '2024-01-25 00:00:00', 'CSE', 'Payment'),
(23, 'admin', 'à¦†à¦—à¦¾à¦®à§€ à¦¦à§à¦¦à¦¿à¦¨ à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿ à¦¬à¦¨à§à¦§ à¦¥à¦¾à¦•à¦¬à§‡ à¦à¦¬à¦‚ 20 à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦–à§à¦²à¦¬à§‡à¥¤', '2024-01-17 06:18:41', '2024-01-20 00:00:00', 'All', 'Payment'),
(24, 'admin', '#IMPORTANT_NOTICE #CSE #EEE \r\n#SPRING_24 \r\nà¦à¦¤à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦¸à¦¿à¦à¦¸à¦‡ à¦à¦¬à¦‚ à¦‡à¦‡à¦‡ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¸à¦•à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦…à¦¬à¦—à¦¤à¦¿à¦° à¦œà¦¨à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¯à¦¾à¦šà§à¦›à§‡ à¦¯à§‡, à¦¸à§à¦ªà§à¦°à¦¿à¦‚-à§¨à§ª à¦à¦° à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦¬à§à¦¯à¦¾à¦šà§‡à¦° à¦¸à¦•à¦² à¦•à§à¦²à¦¾à¦¸ à¦†à¦—à¦¾à¦®à§€ à§§à§ª/à§¦à§§/à§¨à§¦à§¨à§ª à¦‡à¦‚ à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦à¦¬à¦‚ à¦à¦•à§à¦¸à¦¿à¦•à¦¿à¦‰à¦Ÿà¦¿à¦­ à¦¬à§à¦¯à¦¾à¦šà§‡à¦° à¦¸à¦•à¦² à¦•à§à¦²à¦¾à¦¸ à¦†à¦—à¦¾à¦®à§€ à§§à§¯/à§¦à§§/à§¨à§¦à§¨à§ª à¦‡à¦‚ à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦¶à§à¦°à§ à¦¹à¦¬à§‡à¥¤ à¦¸à¦¿à¦à¦¸à¦‡ à¦à¦¬à¦‚ à¦‡à¦‡à¦‡ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¸à¦•à¦² à¦¬à§à¦¯à¦¾à¦šà§‡à¦° (à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦à¦¬à¦‚ à¦à¦•à§à¦¸à¦¿à¦•à¦¿à¦‰à¦Ÿà¦¿à¦­) à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦Ÿà¦¿à¦¨ à¦–à§à¦¬ à¦¦à§à¦°à§à¦¤ à¦ªà§à¦°à¦•à¦¾à¦¶ à¦•à¦°à¦¾ à¦¹à¦¬à§‡à¥¤', '2024-01-19 06:17:31', '2024-01-25 00:00:00', 'CSE', 'General'),
(26, 'admin', 'à¦¸à¦•à¦²à§‡à¦° à¦…à¦¬à¦—à¦¤à¦¿à¦° à¦œà¦¨à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¯à¦¾à¦šà§à¦›à§‡ à¦¯à§‡, à¦†à¦—à¦¾à¦®à§€ à§§à§® à¦à¦¬à¦‚ à§§à§¯ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à¦¿ à§¨à§¦à§¨à§ª à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦¯à¦¥à¦¾à¦•à§à¦°à¦®à§‡ à§§à§¬ (à¦°à§‡à¦—à§à¦²à¦¾à¦°) à¦à¦¬à¦‚ à§§à§¯ (à¦¡à¦¿à¦ªà§à¦²à§‹à¦®à¦¾) à¦¬à§à¦¯à¦¾à¦šà§‡à¦° Final Thesis/Project Presentation à¦…à¦¨à§à¦·à§à¦ à¦¿à¦¤ à¦¹à¦¬à§‡à¥¤ à¦«à¦¾à¦‡à¦¨à¦¾à¦² à¦ªà§à¦°à§‡à¦œà§‡à¦¨à§à¦Ÿà§‡à¦¶à¦¨ à¦à¦° à¦†à¦—à§‡ à¦†à¦—à¦¾à¦®à§€ à§§à§ª à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à¦¿ à§¨à§¦à§¨à§ª à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦¥à¦¿à¦¸à¦¿à¦¸ à¦¬à§à¦• à¦à¦° à¦ªà§à¦°à¦¿à¦¨à§à¦Ÿà§‡à¦¡ à¦•à¦ªà¦¿ (à¦¬à¦¾à¦‡à¦¨à§à¦¡à¦¿à¦‚ à¦›à¦¾à§œà¦¾, à¦•à§à¦²à¦¿à¦ª à¦¦à¦¿à§Ÿà§‡) à¦…à¦«à¦¿à¦¸à§‡ à¦œà¦®à¦¾ à¦¦à¦¿à¦¤à§‡ à¦¹à¦¬à§‡ à¥¤ à¦ à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à§‡ à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦ªà¦¦à¦•à§à¦·à§‡à¦ª à¦¨à§‡à¦“à§Ÿà¦¾à¦° à¦œà¦¨à§à¦¯ à¦¨à¦¿à¦°à§à¦¦à§‡à¦¶à¦¨à¦¾ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à¦²à¥¤\r\nN.B.:\r\nà§§. à¦¥à¦¿à¦¸à¦¿à¦¸ à¦¬à§à¦• à¦à¦° à¦ªà§à¦°à¦¿à¦¨à§à¦Ÿà§‡à¦¡ à¦•à¦ªà¦¿ ', '2024-01-19 07:33:28', '2024-01-26 00:00:00', 'EEE', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `examtype` varchar(25) NOT NULL,
  `semister` varchar(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_code` varchar(25) NOT NULL,
  `examDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `assignment` int(10) NOT NULL,
  `attendance` int(10) NOT NULL,
  `classTest` int(10) NOT NULL,
  `midTerm` int(10) NOT NULL,
  `finalExam` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_id`, `examtype`, `semister`, `subject`, `subject_code`, `examDate`, `assignment`, `attendance`, `classTest`, `midTerm`, `finalExam`) VALUES
(1, 0, 'Summer', '1st Semister', 'Basic Electronics Circuit', '', '2023-10-14 18:00:00.000000', 10, 10, 10, 18, 44),
(2, 0, 'Summer', '1st Semister', 'Basic Electronics Circuit', '', '2023-10-14 18:00:00.000000', 10, 10, 10, 18, 44),
(3, 0, 'Spring', '2nd Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-10 18:00:00.000000', 10, 10, 10, 10, 10),
(4, 0, 'Spring', '2nd Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-10 18:00:00.000000', 10, 10, 10, 10, 10),
(5, 0, 'Spring', '1st Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2023-12-14 18:00:00.000000', 10, 10, 10, 8, 25),
(6, 0, 'Spring', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-01 18:00:00.000000', 5, 5, 5, 10, 25),
(7, 0, 'Spring', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-01 18:00:00.000000', 5, 5, 5, 10, 25),
(8, 0, 'Spring', '2nd Semister', 'Basic Electronics Circuit', 'EEE 1211', '2022-12-04 18:00:00.000000', 5, 5, 5, 15, 25),
(9, 0, 'Spring', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2021-12-04 18:00:00.000000', 10, 10, 10, 15, 25),
(10, 0, 'Summer', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2021-02-04 18:00:00.000000', 10, 10, 10, 12, 25),
(11, 0, 'Spring', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2023-02-04 18:00:00.000000', 10, 10, 10, 15, 25),
(12, 0, 'Spring', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2023-02-04 18:00:00.000000', 10, 10, 10, 15, 25),
(13, 0, 'Spring', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2021-12-10 18:00:00.000000', 10, 10, 10, 15, 20),
(14, 0, 'Spring', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2021-12-10 18:00:00.000000', 10, 10, 10, 15, 20),
(15, 0, 'Spring', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2021-12-10 18:00:00.000000', 10, 10, 10, 15, 20),
(16, 0, 'Fall', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-09 18:00:00.000000', 10, 10, 7, 10, 10),
(17, 0, 'Fall', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-09 18:00:00.000000', 10, 10, 7, 10, 10),
(18, 0, 'Fall', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2023-12-09 18:00:00.000000', 10, 10, 7, 10, 10),
(19, 0, 'Spring', '2nd Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2021-11-30 18:00:00.000000', 10, 10, 10, 10, 25),
(20, 0, 'Spring', '2nd Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2021-11-30 18:00:00.000000', 10, 10, 10, 10, 25),
(21, 0, 'Spring', '2nd Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2021-11-30 18:00:00.000000', 10, 10, 10, 10, 25),
(22, 0, 'Spring', '3rd Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2023-12-10 18:00:00.000000', 10, 10, 10, 10, 25),
(23, 0, 'Spring', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2023-12-10 18:00:00.000000', 10, 10, 10, 15, 25),
(25, 1, 'Spring', '2nd Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2023-10-10 18:00:00.000000', 10, 10, 10, 15, 23),
(26, 118462156, 'Spring', '1st Semister', 'Introduction to Bengali language and Literature', 'Ban 1111', '2023-12-10 18:00:00.000000', 10, 10, 10, 15, 25),
(27, 12546, 'Summer', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2023-10-11 18:00:00.000000', 10, 10, 10, 15, 25),
(28, 698455, 'Spring', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2023-12-10 18:00:00.000000', 10, 10, 10, 15, 25),
(29, 698455, 'Spring', '2nd Semister', 'Computer Networks', 'CSE2131', '2023-10-10 18:00:00.000000', 10, 10, 10, 15, 25),
(30, 698455, 'Spring', '2nd Semister', 'Computer Networks', 'CSE2131', '2023-10-10 18:00:00.000000', 10, 10, 10, 15, 25),
(31, 654656, 'Summer', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2021-12-10 18:00:00.000000', 10, 10, 9, 15, 25),
(32, 118462156, '', '1st Semister', 'Digital Image Processsing', 'CSE 4251', '2023-12-10 18:00:00.000000', 10, 10, 10, 15, 23),
(33, 118462156, 'Spring', '1st Semister', 'Wirless Communication & networks Sessional', 'CSE 4332', '2021-12-10 18:00:00.000000', 10, 10, 10, 19, 34),
(34, 7895446, 'Spring', '1st Semister', 'Computer Networks', 'CSE2131', '2023-10-14 18:00:00.000000', 5, 5, 10, 15, 35),
(35, 654656, 'Summer', '1st Semister', 'Electricity, Optics, Waves & Modern Physics', 'Phy 1111', '2022-09-30 18:00:00.000000', 10, 4, 7, 10, 45),
(36, 77987, 'Spring', '1st Semister', 'Fundamental of Computer Systems', 'CSE1111', '2022-09-30 18:00:00.000000', 5, 5, 5, 5, 5),
(37, 6549852, 'Spring', '1st Semister', 'Basic Electronics Circuit', 'EEE 1211', '2022-12-10 18:00:00.000000', 10, 10, 5, 15, 20),
(38, 5465, 'Spring', '1st Semister', 'Differential and Integral Calculus', 'MATH 1211', '2021-12-10 18:00:00.000000', 10, 5, 3, 2, 12),
(39, 879654546, 'Spring', '2nd Semister', 'Digital Image Processsing', 'CSE 4251', '2024-01-15 18:00:00.000000', 5, 7, 9, 10, 30),
(40, 125987, 'Spring', '1st Semister', 'Computer Networks', 'CSE2131', '2024-01-16 18:00:00.000000', 9, 10, 10, 15, 39),
(41, 846546, 'Spring', '1st Semister', 'Electricity, Optics, Waves & Modern Physics', 'Phy 1111', '2022-12-31 18:00:00.000000', 9, 7, 5, 20, 40);

-- --------------------------------------------------------

--
-- Table structure for table `studentbatch`
--

CREATE TABLE `studentbatch` (
  `id` int(250) NOT NULL,
  `student_batch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentbatch`
--

INSERT INTO `studentbatch` (`id`, `student_batch`) VALUES
(1, '19'),
(6, '20'),
(7, '21'),
(8, '22'),
(9, '23'),
(10, '24'),
(11, '25');

-- --------------------------------------------------------

--
-- Table structure for table `subjectsdetails`
--

CREATE TABLE `subjectsdetails` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(250) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `sub_credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectsdetails`
--

INSERT INTO `subjectsdetails` (`id`, `subject_name`, `subject_code`, `sub_credit`) VALUES
(2, 'Basic Electronics Circuit', 'EEE 1211', '3'),
(3, 'Introduction to Bengali language and Literature', 'Ban 1111', '3'),
(5, 'Digital Image Processsing', 'CSE 4251', '3'),
(6, 'Computer Networks', 'CSE2131', '3'),
(7, 'Object Oriented Programming with C++', 'CSE 1311', '3'),
(8, 'Object oriented Technology with Java', 'CSE 2221', '3'),
(9, 'Wireless Communication & Networks', 'CSE 4331', '3'),
(10, 'Wirless Communication & networks Sessional', 'CSE 4332', '3'),
(11, 'Introduction to Digital Electronics', 'CSE 1211', '3'),
(21, 'Fundamental of Computer Systems', 'CSE1111', '3'),
(22, 'Programming Technology with C Sessional', 'CSE1211', '3'),
(23, 'Electricity, Optics, Waves & Modern Physics', 'Phy 1111', '3'),
(24, 'Introduction to English Language & Literature', 'Eng 1211', '3'),
(25, 'Algebra,Co-ordinate Geometry and Vector Analysis', 'Math1211', '3'),
(28, 'Calculus and Complex Variable', 'Math1111', ''),
(41, 'Organic Chamistry', 'OC 546', '3'),
(42, 'Economics', 'HUM 2211', '2'),
(43, 'Differential and Integral Calculus', 'MATH 1211', '3'),
(44, 'Numerical Analysis Sessional', 'MATH 2212', '3');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(50) NOT NULL,
  `newtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `newtitle`) VALUES
(15, 'NORTH BENGAL INTERNATIONAL UNIVERSITY');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `student_id` int(200) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fname` text NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `father` varchar(200) NOT NULL,
  `mother` varchar(200) NOT NULL,
  `gender` text NOT NULL,
  `job_title` text,
  `jobtype` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `degree` varchar(50) NOT NULL,
  `total_semester` int(50) NOT NULL,
  `course_duration` int(50) NOT NULL,
  `total_course_price` int(50) NOT NULL,
  `semester_fee` int(50) NOT NULL,
  `present_address` varchar(250) NOT NULL,
  `permanent_address` varchar(250) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `joiningdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `student_id`, `username`, `fname`, `batch_no`, `department`, `father`, `mother`, `gender`, `job_title`, `jobtype`, `salary`, `nid`, `phone`, `email`, `degree`, `total_semester`, `course_duration`, `total_course_price`, `semester_fee`, `present_address`, `permanent_address`, `profile_picture`, `description`, `usertype`, `password`, `time`, `joiningdate`) VALUES
(1, 0, 'admin', 'MD.SAGOR ALI', '23', '', '', '', '', NULL, '', 0, '0', '1773925952', 'mdsagorali033@gmail.com', '', 0, 3, 0, 0, '', '', '', NULL, 'admin', '1234', '2023-09-30 11:27:47', NULL),
(35, 118462156, 'student', 'Our Student', '23', 'CSE', '', '', 'Female', NULL, '', 0, '0', '65465652', 'student@gmail.com', 'BSc', 0, 4, 160000, 40000, '', '', '1694936984_50.JPG', NULL, 'student', '1234', '2022-07-29 11:27:47', NULL),
(36, 0, 'maya3', 'Maya', '', 'CSE', 'sfasfd', 'asfdasfd', 'Male', NULL, '', 0, '1236985264789', '123466546', 'maya@gmail.com', 'Diploma', 6, 3, 0, 0, '								', '								', '1694934861_petite-woman-1-820x500.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(37, 0, 'kaya', 'Kaya Akhter', '23', 'CSE', 'asdf', 'safdas', 'Female', NULL, '', 0, '1598674593', '65666165', 'keya@gmail.com', 'BSc', 6, 3, 126589754, 21098292, '							asfa									', '						sfsaf										', '1695102999_keya.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(38, 654656, 'Safa', 'Safa Joha', '19', 'CSE', 'afefasf1', 'easfsa1', 'Female', NULL, '', 0, '546546545', '01938752493', 'safafoha1999@gmail.com', 'BSc', 8, 4, 160000, 20000, 'Godagari									', 'Rajshahi1							', '1700467660_suki (4).png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(46, 0, 'à¦•à¦¾à¦²à¦¿', '', '', '', '', '', '', NULL, '', 0, '0', '354654654', 'kali@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2022-09-30 11:27:47', NULL),
(47, 12546, 'Kanna', 'Kanna Akter', '23', 'CSE', 'Sadekul', 'Mother', 'Female', NULL, '', 0, '0', '2147483647', 'kanna@gmail.com', 'Bsc', 0, 4, 165000, 41250, 'Choddo pai,Rajshahi', 'Same', '', NULL, 'student', '1234', '2021-09-29 18:00:00', NULL),
(48, 0, 'sanzida', 'Sanzida Nahar', '', 'CSE', 'dfasfd', 'sadfasf', '', NULL, '', 0, '12356987456987412', '17568524565', 'sanzidanaharbd@gmail.com', 'BSc', 6, 3, 0, 0, '								', '								', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(49, 765163, 'rana', 'Masud Rana', '23', 'CSE', 'sfsaf', 'safdsa', 'Female', NULL, '', 0, '5986741269', '2147483647', 'rana12@gamil.com', 'BSc', 6, 3, 654654, 109109, '													fasfdsa											', '												fsafsafasf												', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(50, 0, 'ratantata', 'Ratan Tata', '', '', '', '', '', NULL, '', 0, '0', '963852147', 'ratantata@gamil.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(51, 0, 'laboni', 'Laboni Akter', '', '', '', '', '', NULL, '', 0, '0', '12364646', 'laboni@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(52, 0, 'nura', 'Norin Akter Nura', '', '', '', '', '', NULL, '', 0, '0', '741258369', 'nura@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(53, 0, 'habiba1', 'Habiba', '2023', 'Civil', 'zf', 'sadf', 'Male', NULL, '', 0, '2147483647', '2147483647', 'habiba@gmail.com', 'BSc', 8, 4, 120000, 15000, '										sadf														', '											sadf													', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(54, 0, 'jony', 'Jony Islam', '', '', '', '', '', NULL, '', 0, '0', '46546464', 'jony@gmail.com', '', 0, 0, 0, 0, '', '', '1694936765_656465.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(55, 0, 'sdfasf', 'sadfasf', '', '', '', '', '', NULL, '', 0, '0', '2147483647', 'asdfsafd@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(56, 0, 'safsdf', 'sadfasfd', '', '', '', '', '', NULL, '', 0, '0', '2147483647', 'asdfasexdf@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(57, 0, 'tomur', 'à¦¤à¦®à§à¦° à¦°à¦¾à¦¨à¦¾', '', '', '', '', '', NULL, '', 0, '0', '516464613', 'ttt2@gmail.com', '', 0, 0, 0, 0, '', '', '1694935792_question.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(58, 0, 'tuli', 'Tuli', '2023', 'Choose you Department', 'tuliF', 'tuniM', '', NULL, '', 0, '0', '2147483647', 'tuli22@gmail.com', 'BSc', 9, 0, 150000, 0, '				TuliRaj				', '				TuliRaj													', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(59, 0, 'sdf', 'sadfasfd', '', '', '', '', '', NULL, '', 0, '0', '65546465', 'sfasfasdsadfas@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(60, 0, 'teacher', 'Teacher', '', '', '', '', '', 'Computer Engineer', '', 0, '0', '646546', 'teachers12@gmail.com', '', 0, 0, 0, 0, '', '', '1695537051_teachers.png', 'A teacher, also called a schoolteacher or formally an educator, is a person who helps students to acquire knowledge, competence, or virtue, via the practice of teaching. Informally the role of teacher may be taken on by anyone. ', 'teacher', '1234', '2023-09-30 11:27:47', NULL),
(61, 0, '9asdfas', 'Utra', '', '', '', '', '', NULL, '', 0, '0', '9545', 'utrafi@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(62, 0, 'kochu', 'Kothuya', '', '', '', '', '', NULL, '', 0, '0', '5646646', 'kotu@gmail.com', '', 0, 0, 0, 0, '', '', '', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(63, 0, 'account', 'account', '', '', '', '', '', NULL, '', 0, '0', '1231654654', 'account@gmail.com', '', 0, 0, 0, 0, '', '', '1694863177_img2.jpg', NULL, 'account', '1234', '2023-09-30 11:27:47', NULL),
(64, 0, 'roy', 'Roy Babu', '', '', '', '', '', NULL, '', 0, '0', '316464654', 'roy@gmail.com', '', 0, 0, 0, 0, '', '', '1694867448_img2.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(65, 0, 'darrun', 'Dada', '', '', '', '', '', NULL, '', 0, '0', '211649795', 'dada@gmail.com', '', 0, 0, 0, 0, '', '', '1694870492_Screenshot 2023-09-16 at 11-06-41 1pcs-zebra-pliuÅ¡inis-Å¾aislas-pagalvÄ—-minkÅ¡ta-modeliavimas_2-upload.jpeg (PNG Image 800 Ã— 800 pixels).png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(67, 0, 'ranu', 'Ranu', '', '', '', '', '', NULL, '', 0, '0', '6646', 'ranu@gmal.com', '', 0, 0, 0, 0, '', '', '1694930923_6546546 (3).png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(68, 0, 'habiba', 'Habiba Sultana', '2023', 'Civil', 'opop', 'opooiyy', 'Female', NULL, '', 0, '999', '2147483647', 'habiba123@gmail.com', 'BSc', 8, 4, 122000, 15250, '	uooto	', '		ueuyeryr						', '1694936432_habiba.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(69, 0, 'luna', 'Luna Akhter', '', '', '', '', '', NULL, '', 0, '0', '2147483647', 'lunaakhter@gmail.com', '', 0, 0, 0, 0, '', '', '1695102660_ayman (6).jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(70, 0, 'rani', 'Rani Akther', '', '', '', '', '', NULL, '', 0, '0', '13216546', 'rani@gmail.com', '', 0, 0, 0, 0, '', '', '1695469295_cute-girl-pic-2-1024x1024.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(71, 0, 'lara', 'Lara Khatun', '', '', '', '', '', NULL, '', 0, '0', '123486458', 'lara@gmail.com', '', 0, 0, 0, 0, '', '', '1695469460_olivia-rodrigo-mag-rollout-4-091223-e6c307e9a3e84c3c9bb49a913561d985.jpg', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(72, 0, 'tota', 'Tota miya', '', '', '', '', '', NULL, '', 0, '0', '6546489', 'tota@gmail.com', '', 0, 0, 0, 0, '', '', '1695499141_totamiya.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(73, 0, 'bablu', 'Bablu', '2023', 'EEE', 'lolo', 'momo', 'Female', NULL, '', 0, '2147483647', '2147483647', 'bablu23@gmail.com', 'BSc', 8, 4, 165000, 20625, '																					raj																			', '																raj																								', '1695499374_bablu.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(74, 0, 'noyon', 'Noyon Hossain', '', '', '', '', '', NULL, '', 0, '0', '84916964', 'noyon@gmail.com', '', 0, 0, 0, 0, '', '', '1695501379_successful-college-student-lg.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(75, 0, 'sabana', 'Sabana Akter', '', '', '', '', '', NULL, '', 0, '0', '4664961', 'sabana@gmail.com', '', 0, 0, 0, 0, '', '', '1695502081_sabana.png', NULL, 'student', '1234', '2023-09-30 11:27:47', NULL),
(76, 0, 'robiul', 'Robiul Awol', '', '', '', '', '', 'Professor ', '', 0, '0', '2147483647', 'robiul121@gmail.com', '', 0, 0, 0, 0, '', '', '1695536578_Teacher-in-the-classroom.jpg', NULL, 'teacher', '1234', '2023-09-30 11:27:47', NULL),
(77, 0, 'samiya', 'Samiya Islam', '', '', '', '', '', 'Asst.Teacher', '', 0, '0', '89616161', 'samiya12@gmail.com', '', 0, 0, 0, 0, '', '', '1695537922_sultana mam.jpg', NULL, 'teacher', '1234', '2023-09-30 11:27:47', NULL),
(79, 0, 'julekha', 'Julekha Khatun', '', '', '', '', '', 'Asst.Teacher', '', 0, '0', '1234567895', 'Julekah123@gmail.com', '', 0, 0, 0, 0, '', '', '1695539149_julekha.png', NULL, 'teacher', '1234', '2023-09-30 11:27:47', NULL),
(80, 0, 'july', 'July Akter', '', 'CSE', 'asfjo', 'askfasf', 'Female', NULL, '', 0, '1236985478963', '131646646', 'juli21@gmail.com', 'BSc', 6, 3, 0, 0, '																								', '																								', '1696074759_july-2-1024x1024.jpg', NULL, 'student', '1234', '2023-09-30 11:52:40', NULL),
(81, 0, 'rohima', 'Rohima Akhter', '', '', '', '', '', 'Professor', '', 0, '0', '2147483647', 'rohima124@gmail.com', '', 0, 0, 0, 0, '', '', '1696150216_new-teachers-Vs-experienced-teachers._WEB.jpg', NULL, 'teacher', '1234', '2023-10-01 08:50:17', NULL),
(83, 1909859, 'taniatani', 'Tania Tani', '19', 'CSE', 'mister x', 'MRS y', 'Female', NULL, '', 0, '9666666', '2147483647', 'taniatani04@gmail.com', 'BSc', 6, 3, 165900, 27650, '												C/O: Abul Kalam,sladkfjslkfsl,flksajflksa,Rajshahi												', '												same												', '1696313347_tiania tani1-820x500.jpg', NULL, 'student', '1234', '2023-10-03 06:09:07', NULL),
(84, 0, 'tania2', 'asdlkdfj', '22', 'CSE', 'asdljflk', 'salkfjlksjf', 'Female', NULL, '', 0, '65465464', '654654654', 'taniatani@gmail.com', 'BSc', 6, 3, 165000, 27500, '				salkfjsaklf				', '				same				', '1696315671_654646asdfsf4s (1).png', NULL, 'student', '1234', '2023-10-03 06:47:51', NULL),
(85, 879654546, 'rania', 'Tania Tani', '20', 'CSE', 'mister xsadf', 'MRS yfsaf', 'Female', NULL, '', 0, '6985741236', '65656568888', 'taniatani03@gmail.com', 'BSc', 6, 3, 165400, 27567, '																				sdaf																				', '																				safdas																				', '1697665786_role-of-teachers-in-education-1024x594.jpg', NULL, 'student', '1234', '2023-10-03 07:13:44', NULL),
(86, 6549852, 'tania', 'Tani akhter', '21', 'CSE', 'asdfasf', 'sadfasf', 'Female', NULL, '', 0, '6464646546', '656464654', 'taniatani034@gmail.com', 'Diploma', 6, 21, 150000, 12500, 'safasf				', 'safsaf				', '1703622255_6666aa (2).png', NULL, 'student', '1234', '2023-10-03 08:19:54', NULL),
(87, 0, 'munna', 'Munna Raju', '2024', 'civil', 'Msadfk', 'sdlkfjas', 'Female', NULL, '', 0, '0', '45654656', 'munna32@gmail.com', 'BSc', 12, 0, 156000, 13000, 'sdfjaslf', 'lsfjas', '1696324575_munna.jpg', NULL, 'student', '1234', '2023-10-03 09:16:16', NULL),
(88, 0, 'junia2', 'Junia akhter2', '2023', 'CSE', 'Juniasi2', 'Junim2', 'Female', NULL, '', 0, '122', '2147483647', 'juniaupdate2@gmail.com', 'BSc', 8, 4, 225300, 28163, '												Rajshahi		2															', '												Rajshahi		2																		', '1697570676_junia2.jpg', NULL, 'student', '1234', '2023-10-06 05:06:30', NULL),
(89, 0, 'Jotirmoy', 'Jotirmoy Sir', '', '', '', '', '', 'Coordinator', '', 0, '0', '2147483647', 'coordinator@gmail.com', '', 0, 0, 0, 0, '', '', '1697270873_jotirmoy.jpg', NULL, 'teacher', '1234', '2023-10-14 08:07:53', NULL),
(92, 0, 'tani', 'Tani moni', '', 'EEE', 'sdfasdf1', 'asfdas1', 'Female', 'Teacher', 'Full Time', 20000, '65466464646', '01938755495', 'tanimoni1@gmail.com', '', 0, 0, 0, 0, 'Raj2	', 'same', '1697314886_tani.png', NULL, 'teacher', '1234', '2023-10-14 20:21:27', '2022-01-01'),
(93, 0, 'runa', 'Runa akhter', '', 'cse', 'faslfk', 'slfkjaslf', 'Female', 'Asst.Teacher', 'Full Time', 20500, '0', '464649646', 'runaakhter@gmail.com', '', 0, 0, 0, 0, 'sfssafasfs', 'safsa', '1697315473_runa.jpg', NULL, 'teacher', '1234', '2023-10-14 20:31:14', NULL),
(94, 0, 'sumia', 'Sumia Khatun', '', 'eee', 'asfewf', 'sfwefafs', 'Female', 'Asst.Teacher', 'Full Time', 20000, '0', '5444545', 'sumia3@gmail.com', '', 0, 0, 0, 0, 'fafwfsadfsafsfsf', 'aefawfsafsaf', '1697316010_65465465tled.jpeg', NULL, 'teacher', '1234', '2023-10-14 20:40:11', NULL),
(96, 0, 'rony', 'Rony', '', 'civil', 'saf', 'fasf', 'Male', 'sfasfs', 'Choose Job type', 25599, '0', '646442342', 'rony21@gmail.com', '', 0, 0, 0, 0, 'sf', 'asf', '1697317505_rony.jpg', NULL, 'teacher', '1234', '2023-10-14 21:05:05', NULL),
(97, 0, 'rafi', 'Rafi Islam', '', 'civil', 'sdfa', 'efs', 'Male', 'Civil Engineer', 'Full Time', 50000, '0', '2147483647', 'rafi32@gmail.com', '', 0, 0, 0, 0, 'fefas', 'fs', '1697318547_Male-Teacher-Gifts.jpg', NULL, 'teacher', '1234', '2023-10-14 21:22:28', NULL),
(98, 0, 'lota', 'Lota moni', '', 'eee', 'asfdklj', 'aslkfja', 'Female', 'Asst.Teacher', 'Full Time', 20000, '0', '2147483647', 'lotamoni213@gmail.com', '', 0, 0, 0, 0, 'alskkfjsa', 'aslfjslkfj', '1697396612_lota.jpg', NULL, 'teacher', '1234', '2023-10-15 19:03:33', '0000-00-00'),
(99, 0, 'purabi', 'Purabi Roy', '', 'eee', 'sdfslk', 'sklfjaslkfj', 'Female', 'Asst.Teacher', 'Choose Job type', 18000, '0', '15649846', 'purabi34@gmail.com', '', 0, 0, 0, 0, 'alskfdjalfj', 'aslfkjaslfals', '1697397870_ima5646ges.jpeg', NULL, 'teacher', '1234', '2023-10-15 19:24:31', '2021-10-22'),
(100, 0, 'suvo', 'Shuvo', '', 'cse', 'sfasfasfas', 'sdfsafas', 'Male', 'asfsafas', 'Choose Job type', 65465, '0', '1773925951', 'saflsakfl@gamil.com', '', 0, 0, 0, 0, 'Sorkar para', 'Sorkar para', '1697402331_386100195_2654721341346468_7887095015400214550_n.jpg', NULL, 'teacher', '1234', '2023-10-15 20:38:52', '2023-09-24'),
(101, 0, 'sila', 'Sila mow', '', 'civil', 'shilan', 'Mshilan', 'Female', 'Professor', 'Choose Job type', 70000, '0', '1773925958', 'shila79@gmail.com', '', 0, 0, 0, 0, 'Rajshahi', 'same', '1697438592_shila.jpg', NULL, 'teacher', '1234', '2023-10-16 06:43:13', '2005-10-01'),
(102, 0, 'lata', 'Lata Ruby', '', 'CSE', 'salkfja', 'asfjefsadf', 'Female', 'Computer Engineer', 'Full Time', 35000, '876434376413', '15888796451', 'lata23@gmail.com', '', 0, 0, 0, 0, '				aslfaslf				', '				slfjaslfj				', '1697441471_lataji.png', NULL, 'teacher', '1234', '2023-10-16 07:31:12', '2022-09-02'),
(104, 0, 'ratul', 'Ratul Mon', '', 'Civil', 'Md Ratuli isam 2', 'mom Ratul', 'Male', 'Asst.Teacher', 'Full Time', 18600, '46546464', '17725254444', 'ratulrana10@gmail.com', '', 0, 0, 0, 0, 'Ratul raj1																																				', 'e raj1																																				', '1697664381_black-teacher-male.png', NULL, 'teacher', '1234', '2023-10-16 07:52:09', '2021-12-22'),
(105, 0, 'rubina', 'Runina Akhter', '2023', 'CSE', 'RF', 'RM', 'Female', NULL, '', 0, '64646566', '1938752020', 'rubina23@gmail.com', 'Diploma', 6, 3, 16000, 2667, '																Raj2																', '																Raj2																', '1697574222_rubina.jpeg', NULL, 'student', '1234', '2023-10-17 20:23:43', NULL),
(107, 0, 'titila', 'Titila khatun', '2023', 'EEE', 'Titila21', 'Titla324', 'Female', NULL, '', 0, '9879899797', '19387588888', 'titla23@gmail.com', 'BSc', 8, 4, 156000, 19500, '								sdfsa								', '								fasf								', '1697576902_titla.jpg', NULL, 'student', '1234', '2023-10-17 21:08:23', NULL),
(108, 0, 'Babul', 'sfasdfasf', '2023', 'EEE', 'sdfasfd', 'sdfasf', 'Male', NULL, '', 0, '777', '99963258777', 'sfasdf12r@gmail.com', 'BSc', 6, 3, 160000, 26667, '																																																				asdfasfas																																																				', '																																																				fasfdaf																																																				', '1697660855_babul.jpg', NULL, 'student', '1234', '2023-10-17 21:16:44', NULL),
(109, 0, 'shiraji12', 'Shiraji vai1d', '2023', 'CSE', 'sadfe12d', 'safde12d', 'Male', NULL, '', 0, '777777778', '18888888888', 'babu90@gmail.com', 'Diploma', 8, 4, 126000, 15750, '																																								sfdafsdf																																								', '																																								fasfsafs																																								', '1697660084_shirajied-2.png', NULL, 'student', '1234', '2023-10-17 21:21:51', NULL),
(110, 0, 'harun', 'Harun Islam', '2024', 'eee', 'aslkdfja', 'aslkfjsfj', 'Male', NULL, '', 0, '6546464646', '65465464645', 'harun23@gmail.com', 'BSc', 8, 4, 165000, 20625, 'salkfjaslfj', 'aslfjaslfj', '1697699166_harun.png', NULL, 'student', '1234', '2023-10-19 07:06:07', NULL),
(111, 6932, 'momin', 'Momin Uddin', '19', 'CSE', 'momin Fa', 'Momin Mother', 'Female', NULL, '', 0, '6546464654', '01596325891', 'momin23@gmail.com', 'BSc', 8, 4, 150000, 18750, '																Raj																', '																same																', '1697874597_mominuddin.png', NULL, 'student', '1234', '2023-10-21 07:49:58', NULL),
(112, 6546596, 'saju', 'Saju1', '21', 'EEE', 'salkkf', 'aslkfdj', 'Female', NULL, '', 0, '6546565463', '01596395891', 'saju12@gmail.com', 'Diploma', 8, 4, 156000, 19500, '																aslkf																', '																aslkkdfj																', '1697875269_successful-college-student-lg.png', NULL, 'student', '1234', '2023-10-21 08:01:09', NULL),
(113, 0, 'ayesa', 'Ayesa Islam', '23', 'eee', 'aslkfj', 'salkkfdj', 'Female', NULL, '', 0, '6546546546', '01938752496', 'ayesaislam21@gmail.com', 'BSc', 8, 4, 165000, 20625, 's64646', 'asdfef', '1698308159_6546 ayesa.png', NULL, 'student', '1234', '2023-10-26 08:16:00', NULL),
(114, 0, 'arif', 'Ariful Islam', '23', 'cse', 'sadf', 'sadf', 'Male', NULL, '', 0, '6565465324', '01938752596', 'arif23@gmail.com', 'Diploma', 8, 4, 165000, 20625, 'sdfas', 'sadf', '1698308346_afir.jpg', NULL, 'student', '1234', '2023-10-26 08:19:07', NULL),
(115, 56478, 'sonia', 'Chattar miya', '20', 'CSE', 'sfsdfas', 'sfe', 'Female', NULL, '', 0, '6464984654', '01789825952', 'chattarmiya@gmail.com', 'Diploma', 8, 4, 165000, 20625, '												sfdsaf												', '												fasfasf												', '1701807347_indira (1).png', NULL, 'student', '1234', '2023-12-05 20:15:48', NULL),
(116, 78965, 'Chattar', 'Chattar miya', '21', 'cse', 'sfsdfas', 'sfe', 'Female', NULL, '', 0, '6464984654', '01789825952', 'chattarmiya@gmail.com', 'Diploma', 8, 4, 165000, 20625, 'sfdsaf', 'fasfasf', '1701807415_indira (1).png', NULL, 'student', '1234', '2023-12-05 20:16:56', NULL),
(117, 78965, 'Chattar', 'Chattar miya', '21', 'cse', 'sfsdfas', 'sfe', 'Female', NULL, '', 0, '6464984654', '01789825952', 'chattarmiya@gmail.com', 'Diploma', 8, 4, 165000, 20625, 'sfdsaf', 'fasfasf', '1701807562_indira (1).png', NULL, 'student', '1234', '2023-12-05 20:19:23', NULL),
(118, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701807705_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:21:46', NULL),
(119, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701807729_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:22:10', NULL),
(120, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701807769_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:22:50', NULL),
(121, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701807785_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:23:05', NULL),
(122, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808149_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:29:09', NULL),
(123, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808200_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:30:01', NULL),
(124, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808297_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:31:38', NULL),
(125, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808310_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:31:51', NULL),
(126, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808502_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:35:02', NULL),
(127, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808529_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:35:30', NULL),
(128, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808581_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:36:22', NULL),
(129, 698455, 'Jubayer', 'Jubayer Ali', '22', 'eee', 'à¦–à¦•à¦¨', 'à¦¸à¦¾à¦¥à¦¿', 'Male', NULL, '', 0, '58494646', '01775489745', 'jubayer23@gmail.com', 'BSc', 8, 4, 200000, 25000, 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€', 'à¦¢à¦¾à¦•à¦¾', '1701808776_215080.jpg', NULL, 'student', '1234', '2023-12-05 20:39:37', NULL),
(130, 7895446, 'tata', 'sfdas', '20', 'cse', 'fasfa', 'fasf', 'Female', NULL, '', 0, '6546464654', '65846985131', 'sfsaf3424@gmail.com', 'BSc', 8, 4, 465464, 58183, 'asfasf', 'asfsa', '1701808892_03-12-17-Sheikh-Moni_File-P_425x600.jpg', NULL, 'student', '1234', '2023-12-05 20:41:32', NULL),
(132, 7895446, 'tata', 'sfdas', '20', 'cse', 'fasfa', 'fasf', 'Female', NULL, '', 0, '6546464654', '65846985131', 'sfsaf3424@gmail.com', 'BSc', 8, 4, 465464, 58183, 'asfasf', 'asfsa', '1701808966_03-12-17-Sheikh-Moni_File-P_425x600.jpg', NULL, 'student', '1234', '2023-12-05 20:42:47', NULL),
(133, 7895446, 'tata', 'sfdas', '20', 'cse', 'fasfa', 'fasf', 'Female', NULL, '', 0, '6546464654', '65846985131', 'sfsaf3424@gmail.com', 'BSc', 8, 4, 465464, 58183, 'asfasf', 'asfsa', '1701809018_03-12-17-Sheikh-Moni_File-P_425x600.jpg', NULL, 'student', '1234', '2023-12-05 20:43:39', NULL),
(134, 7895446, 'tata', 'sfdas', '20', 'cse', 'fasfa', 'fasf', 'Female', NULL, '', 0, '6546464654', '65846985131', 'sfsaf3424@gmail.com', 'BSc', 8, 4, 465464, 58183, 'asfasf', 'asfsa', '1701809167_03-12-17-Sheikh-Moni_File-P_425x600.jpg', NULL, 'student', '1234', '2023-12-05 20:46:08', NULL),
(135, 7895446, 'tata', 'sfdas', '20', 'cse', 'fasfa', 'fasf', 'Female', NULL, '', 0, '6546464654', '65846985131', 'sfsaf3424@gmail.com', 'BSc', 8, 4, 465464, 58183, 'asfasf', 'asfsa', '1701809203_03-12-17-Sheikh-Moni_File-P_425x600.jpg', NULL, 'student', '1234', '2023-12-05 20:46:44', NULL),
(136, 7794, 'Jamvu', 'Jamvu Ali', '19', 'eee', 'asdfa56s4', 's65f4', 'Male', NULL, '', 0, '65466646464', '58963215897', 'jamvu23@gmail.com', 'BSc', 8, 4, 874522, 109315, 's65fd4a', 's65f4', '1701809297_s3fs6fa (2).jpg', NULL, 'student', '1234', '2023-12-05 20:48:18', NULL),
(137, 5465, 'asf', '4646safd', '20', 'cse', 'sfdas', 'sa', 'Female', NULL, '', 0, '654646', '96325874123', 'sfa32@gmail.com', 'BSc', 8, 4, 6546546, 818318, 'fsafasf', 'sadfsa', '1701810481_Un564titled.jpeg', NULL, 'student', '1234', '2023-12-05 21:08:02', NULL),
(138, 0, 'afefasfa', 'faefsafaf', '', 'CSE', 'aefsa', 'fasfds', 'Male', 'teacher', 'Full Time', 64646, '65464646', '55895674562', 'dfasdf@gmail.com', '', 0, 0, 0, 0, 'afasfd', 'asfdasf', '1701810648_White house (1).jpeg', NULL, 'teacher', '1234', '2023-12-05 21:10:48', '2020-11-22'),
(139, 77987, 'Jubayda', 'Jubaida Khatun', '20', 'eee', 'lskdjfa', 'salkfja', 'Female', NULL, '', 0, '57418963154', '15464945464', 'jubaidakhatun2@gmail.com', 'BSc', 8, 4, 179000, 22375, 'aslfkj', 'sadflkaj', '1701840343_jubaida.jpg', NULL, 'student', '1234', '2023-12-06 05:25:44', NULL),
(141, 0, 'Joya', 'Joya akldf', '', 'CSE', 'sdfaef', 'asfdasfe', 'Female', 'Ast.Teacher', 'Full Time', 20000, '745895441167', '15897412369', 'joya234@gmail.com', '', 0, 0, 0, 0, 'fasdfasfdsa', 'fasdfasfsaf', '1701840614_pexels-photo-1580271.jpeg', NULL, 'teacher', '1234', '2023-12-06 05:30:14', '2022-11-11'),
(142, 54684365, 'Ayesha', 'Ayesha Islam', '24', 'cse', 'Fm Asfaj', 'Faefasf', 'Female', NULL, '', 0, '46598456464', '01759862148', 'ayeshaislam22@gmail.com', 'BSc', 8, 4, 250000, 31250, 'Dhaka, Bangladesh', 'slkfjalkfjljlasfs, Rajshahi', '1704216524_pexels-min-an-675920.jpg', NULL, 'student', '1234', '2024-01-02 17:28:45', NULL),
(143, 6546546, 'sfdasf', '6546sadfasf', '', 'CSE', 'asdfasf', 'asdfa', 'Female', NULL, '', 0, '65465436985237891', '36546546464', '654654654@kutub.com', 'BSc', 6, 3, 65465, 10911, '				asfd				', '				asfdas				', '1704217986_Sequence 13.00_32_16_05.Still002.jpg', NULL, 'student', '1234', '2024-01-02 17:53:07', NULL),
(144, 210001, 'liya', 'Mst Liya', '19', 'CSE', 'safdasf', 'sadfas', 'Female', NULL, '', 0, '1234567891234', '01234567895', 'liya@gmail.com', 'BSc', 8, 4, 256486, 32061, '																																												Rajsahahi																																												', '																																												Nowga																																												', '1704218792_liya.png', NULL, 'student', '1234', '2024-01-02 18:06:33', NULL),
(145, 654654689, 'raifa', 'Raifa Islam', '21', 'EEE', 'sadfa', 'fasdfas', 'Female', NULL, '', 0, '6987459871', '01987042590', 'raifa02@gmail.com', 'BSc', 8, 4, 670600, 83825, '								fasfas								', '								fasfdas								', '1704224385_raifa.png', NULL, 'student', '1234', '2024-01-02 19:39:46', NULL),
(146, 789635, 'touhid', 'Touhid Hasan', '23', 'civil', 'Sowkot Ali', 'aslkdfj', 'Male', NULL, '', 0, '1236985789', '01789632587', 'touhidhasan@gmail.com', 'BSc', 8, 4, 136580, 17073, 'aslkdfja', 'aslkfj', '1704361453_20210524_143754.jpg', NULL, 'student', '1234', '2024-01-04 09:44:14', NULL),
(147, 125987, 'roja', 'Mst. Roja Khatun', '24', 'cse', 'Sadekul', 'Fatema', 'Male', NULL, '', 0, '6985696325891', '01489859612', 'roja1@gmail.com', 'BSc', 8, 4, 159600, 19950, 'Godagari', 'Godagari', '1704720242_IMG_20221104_171305_1.jpg', NULL, 'student', '1234', '2024-01-08 13:24:03', NULL),
(148, 8794654, 'rifat', 'salkfjsalk', '24', 'cse', 'asdfsafsafefasf', 'safsfdsef3sfadf', 'Male', NULL, '', 0, '1598745698', '01789651489', 'rifat12@gmail.com', 'BSc', 8, 4, 150000, 18750, 'sfawefsafs', 'fasefasfsfs', '1704961577_Glasses-for-Oval-shape-741x505.jpg', NULL, 'student', '1234', '2024-01-11 08:26:17', NULL),
(149, 846546, 'joni', 'Joni Sorkar', '24', '', 'asdfae', 'eafsd', 'Male', NULL, '', 0, '5896357412', '59863214569', 'joni23@gmail.com', 'BSc', 8, 4, 400000, 50000, 'efsrtsf', 'eterwfsfs', '1705740990_food (2).png', NULL, 'student', '1234', '2024-01-20 08:56:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_content` varchar(2000) NOT NULL,
  `feature_image` varchar(200) NOT NULL,
  `post_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `username`, `post_title`, `post_content`, `feature_image`, `post_time`) VALUES
(1, '', '66654sfdasf', '				sfd654s6f5s65f46sf4', '', '2023-09-27 14:03:27'),
(2, '', 'sfeasfsdafasfas', '				sadfsafsfsf', '', '2023-09-27 14:03:27'),
(3, '', 'safsafsfsf', '				sdfsfsaf6546546test', '', '2023-09-27 14:03:27'),
(4, 'teacher', 'test1', 'mosque...stljlasf', '1695798813_65464651.jpg', '2023-09-27 14:03:27'),
(5, 'teacher', 'test1', 'mosque...stljlasf', '1695798938_65464651.jpg', '2023-09-27 14:03:27'),
(6, 'teacher', 'slkfjsklf', 'fasjflsajflsajflksa', '1695799171_us (2).jpeg', '2023-09-27 14:03:27'),
(7, 'samiya', 'à§¯à§¦à§¦ à¦•à§‹à¦Ÿà¦¿ à¦Ÿà¦¾à¦•à¦¾à¦° à¦šà¦¶à¦®à¦¾ à¦¬à¦¾à¦œà¦¾à¦°, à¦¨à§‡à¦‡ à¦¦à§‡à¦¶à¦¿ à¦¬à§œ à¦¬à¦¿à¦¨à¦¿à§Ÿà§‹à¦— ', 'à¦¦à§‡à¦¶à§‡ à¦ªà§à¦°à¦¥à¦® à¦šà¦¶à¦®à¦¾à¦° à¦¦à§‹à¦•à¦¾à¦¨ à¦šà¦¾à¦²à§ à¦¹à§Ÿà§‡à¦›à¦¿à¦² à¦ªà§à¦°à¦¾à¦¨ à¦¢à¦¾à¦•à¦¾à§Ÿà¥¤ à¦¸à§‡à¦Ÿà¦¾ à¦¬à§à¦°à¦¿à¦Ÿà¦¿à¦¶ à¦¶à¦¾à¦¸à¦¨à¦¾à¦®à¦²à§‡à¦° à¦¶à§‡à¦·à¦¦à¦¿à¦•à§‡à¦° à¦•à¦¥à¦¾à¥¤ à¦à¦°à¦ªà¦° à¦¦à§‡à¦¶à§‡à¦° à¦¸à§à¦¬à¦¾à¦§à§€à¦¨à¦¤à¦¾à¦°à¦“ à¦ªà¦žà§à¦šà¦¾à¦¶ à¦¬à¦›à¦° à¦ªà§‡à¦°à¦¿à§Ÿà§‡à¦›à§‡à¥¤ à¦…à¦¥à¦š à¦à¦–à¦¨à§‹ à¦†à¦®à¦¦à¦¾à¦¨à¦¿à¦¨à¦¿à¦°à§à¦­à¦° à¦¸à¦®à§à¦­à¦¾à¦¬à¦¨à¦¾à¦®à§Ÿ à¦ à¦–à¦¾à¦¤à¥¤ à¦ªà§à¦°à¦¾à§Ÿ à¦¨à§Ÿà¦¶à§‹ à¦•à§‹à¦Ÿà¦¿ à¦Ÿà¦¾à¦•à¦¾à¦° à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦¨à§‡à¦‡ à¦¦à§‡à¦¶à¦¿ à¦•à§‹à¦¨à§‹ à¦¬à§œ à¦¬à¦¿à¦¨à¦¿à§Ÿà§‹à¦—à¥¤ à¦à¦–à¦¨ à¦ªà¦°à§à¦¯à¦¨à§à¦¤ à¦¦à§‡à¦¶à§‡ à§§à§«à¦Ÿà¦¿à¦° à¦®à¦¤à§‹ à¦šà¦¶à¦®à¦¾à¦° à¦•à¦¾à¦°à¦–à¦¾à¦¨à¦¾ à¦—à§œà§‡ à¦‰à¦ à¦²à§‡à¦“ à¦¸à§‡à¦—à§à¦²à§‹à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾ à¦°à§à¦—à¦£à¥¤ à¦†à¦° à¦¬à§à¦°à§à¦¯à¦¾à¦¨à§à¦¡à§‡à¦° à¦¨à¦¾à¦®à§‡ à¦¯à§‡à¦¸à¦¬ à¦šà¦¶à¦®à¦¾ à¦¬à¦¿à¦•à§à¦°à¦¿ à¦¹à¦šà§à¦›à§‡ à¦¤à¦¾à¦° à¦¸à¦¿à¦‚à¦¹à¦­à¦¾à¦—à¦‡ à¦°à§‡à¦ªà§à¦²à¦¿à¦•à¦¾à¥¤ à¦šà§€à¦¨à§‡à¦° à¦¤à§ˆà¦°à¦¿ à¦à¦¸à¦¬ à¦°à§‡à¦ªà§à¦²à¦¿à¦•à¦¾ à¦®à§‡à¦²à§‡ à¦•à¦® à¦¦à¦¾à¦®à§‡à¥¤ à¦¦à§‡à¦¶à¦¿ à¦¬à¦¿à¦¨à¦¿à§Ÿà§‹à¦—à¦•à¦¾à¦°à§€à¦°à¦¾ à¦¬à§œ à¦¬à¦¿à¦¨à¦¿à§Ÿà§‹à¦—à§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦à¦²à§‡à¦“ à¦¬à¦¾à¦œà¦¾à¦', '1695799626_chosma.png', '2023-09-27 14:03:27'),
(8, 'samiya', 'à¦…à¦¨à¦²à¦¾à¦‡à¦¨ à¦²à§‡à¦¨à¦¦à§‡à¦¨à§‡ à¦¨à§€à¦¤à¦¿à¦®à¦¾à¦²à¦¾ à¦˜à§‹à¦·à¦£à¦¾ ', 'à¦¡à¦¿à¦œà¦¿à¦Ÿà¦¾à¦² à¦²à§‡à¦¨à¦¦à§‡à¦¨ à¦†à¦‡à¦¨à§‡à¦° à¦†à¦“à¦¤à¦¾à§Ÿ à¦†à¦¨à¦¤à§‡ à¦¨à§€à¦¤à¦¿à¦®à¦¾à¦²à¦¾ à¦˜à§‹à¦·à¦£à¦¾ à¦•à¦°à§‡à¦›à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦¬à§à¦¯à¦¾à¦‚à¦•à¥¤ à¦¡à¦¿à¦œà¦¿à¦Ÿà¦¾à¦² à¦ªà¦°à¦¿à¦¶à§‹à¦§ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦•à§‡ à¦¨à¦¿à¦°à¦¾à¦ªà¦¦, à¦•à¦¾à¦°à§à¦¯à¦•à¦°, à¦¸à¦¹à¦œ à¦à¦¬à¦‚ à¦—à§à¦°à¦¾à¦¹à¦•à§‡à¦° à¦¸à§à¦¬à¦¾à¦°à§à¦¥à¦¹à¦¾à¦¨à¦¿ à¦°à§‹à¦§à§‡ â€˜à¦®à¦¾à¦°à§à¦šà§‡à¦¨à§à¦Ÿ à¦…à§à¦¯à¦¾à¦•à§‹à§Ÿà¦¾à¦°à¦¿à¦‚ à¦“ à¦à¦¸à¦•à§à¦°à§‹ à¦¸à§‡à¦¬à¦¾ à¦¨à§€à¦¤à¦¿à¦®à¦¾à¦²à¦¾-à§¨à§¦à§¨à§©â€™ à¦¶à§€à¦°à§à¦·à¦• à¦¨à§€à¦¤à¦¿à¦®à¦¾à¦²à¦¾à¦Ÿà¦¿ à¦ªà§à¦°à¦£à§Ÿà¦¨ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤\r\n\r\nà¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦° (à§¨à§¬ à¦¸à§‡à¦ªà§à¦Ÿà§‡à¦®à§à¦¬à¦°) à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦¬à§à¦¯à¦¾à¦‚à¦•à§‡à¦° à¦ªà§‡à¦®à§‡à¦¨à§à¦Ÿ à¦¸à¦¿à¦¸à§à¦Ÿà§‡à¦® à¦¡à¦¿à¦ªà¦¾à¦°à§à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¥à§‡à¦•à§‡ à¦ à¦¸à¦‚à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦à¦•à¦Ÿà¦¿ à¦ªà§à¦°à¦œà§à¦žà¦¾à¦ªà¦¨ à¦œà¦¾à¦°à¦¿ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤', '1695799762_bank.jpg', '2023-09-27 14:03:27'),
(9, 'teacher', 'à¦¨à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à§§à§¦à¦® à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¬à¦¾à¦°à§à¦·à¦¿à¦•à§€ à¦‰à¦¦à¦¯à¦¾à¦ªà¦¨', 'à¦ªà§à¦°à§‡à¦¸ à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿: à¦¨à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à§§à§¦à¦® à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¬à¦¾à¦°à§à¦·à¦¿à¦•à§€ à¦à¦¬à¦‚ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¤à¦¾ à¦‰à¦ªà¦¾à¦šà¦¾à¦°à§à¦¯ à¦“ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦‰à¦ªà¦¦à§‡à¦·à§à¦Ÿà¦¾ à¦ªà§à¦°à¦«à§‡à¦¸à¦° à¦¡. à¦†à¦¬à¦¦à§à¦² à¦–à¦¾à¦²à§‡à¦•à¦•à§‡ à¦¸à¦®à§à¦®à¦¾à¦¨à¦¨à¦¾ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨ à¦…à¦¨à§à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦ à¦‰à¦ªà¦²à¦•à§à¦·à§‡ à¦¶à§à¦•à§à¦°à¦¬à¦¾à¦° (à§§à§« à¦¸à§‡à¦ªà§à¦Ÿà§‡à¦®à§à¦¬à¦°, à§¨à§¦à§¨à§©) à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦¨à¦—à¦°à§€à¦° à¦šà§Œà¦¦à§à¦¦à¦ªà¦¾à¦‡-à¦ à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à¦¨à¦¿à¦œà¦¸à§à¦¬ à¦•à§à¦¯à¦¾à¦®à§à¦ªà¦¾à¦¸à§‡ à¦¦à¦¿à¦¨à¦¬à§à¦¯à¦¾à¦ªà§€ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦†à§Ÿà§‹à¦œà¦¨ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤\r\nà¦¸à¦•à¦¾à¦² à¦¸à¦¾à§œà§‡ à§¯à¦Ÿà¦¾à§Ÿ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦Ÿà§à¦°à¦¾à¦¸à§à¦Ÿà¦¿à¦¬à§‹à¦°à§à¦¡à§‡à¦° à¦šà§‡à§Ÿà¦¾à¦°à¦®à§à¦¯à¦¾à¦¨ à¦…à¦§à§à¦¯à¦¾à¦ªà¦¿à¦•à¦¾ à¦°à¦¾à¦¶à§‡à¦¦à¦¾ à¦–à¦¾à¦²à§‡à¦• à¦“ à¦‰à¦ªà¦¾à¦šà¦¾à¦°à§à¦¯ à¦ªà§à¦°à¦«à§‡à¦¸à¦° à¦¡. à¦¬à¦¿à¦§à¦¾à¦¨ à¦šà¦¨à§à¦¦à§à¦° à¦¦', '1695870542_150923.jpg', '2023-09-28 09:09:03'),
(10, 'teacher', 'à¦®à¦¾à¦¤à¦¾à¦°à¦¬à¦¾à¦¡à¦¼à§€ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦ªà§à¦°à¦•à¦²à§à¦ªà§‡ à§§à§«à§¦à§¦ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦¡à¦²à¦¾à¦° à¦‹à¦£ à¦¦à§‡à¦¬à§‡ à¦œà¦¾à¦ªà¦¾à¦¨', 'à¦®à¦¾à¦¤à¦¾à¦°à¦¬à¦¾à¦¡à¦¼à§€ à¦†à¦²à§à¦Ÿà§à¦°à¦¾ à¦¸à§à¦ªà¦¾à¦° à¦•à§à¦°à¦¿à¦Ÿà¦¿à¦•à§à¦¯à¦¾à¦² à¦•à§‹à¦²-à¦«à¦¾à§Ÿà¦¾à¦°à§à¦¡ à¦ªà¦¾à¦“à§Ÿà¦¾à¦° à¦ªà§à¦°à¦œà¦•à§à¦Ÿà§‡à¦° à¦œà¦¨à§à¦¯ à¦œà¦¾à¦ªà¦¾à¦¨ à¦¸à¦°à¦•à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à¦•à§‡ à§¨ à¦²à¦¾à¦– à§§à§­ à¦¹à¦¾à¦œà¦¾à¦° à§«à§«à§¬ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦œà¦¾à¦ªà¦¾à¦¨à¦¿à¦œ à¦‡à§Ÿà§‡à¦¨ (à¦†à¦¨à§à¦®à¦¾à¦¨à¦¿à¦• à§§ à¦¹à¦¾à¦œà¦¾à¦° à§«à§¦à§¦ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦®à¦¾à¦°à§à¦•à¦¿à¦¨ à¦¡à¦²à¦¾à¦°) à¦‹à¦£ à¦¸à¦¹à¦¾à§Ÿà¦¤à¦¾ à¦¦à§‡à¦¬à§‡à¥¤ à¦ à¦¬à¦¿à¦·à§Ÿà§‡ à¦à¦•à¦Ÿà¦¿ à¦¬à¦¿à¦¨à¦¿à¦®à§Ÿ à¦¨à§‹à¦Ÿ à¦“ à¦‹à¦£à¦šà§à¦•à§à¦¤à¦¿ à¦¸à¦‡ à¦¹à§Ÿà§‡à¦›à§‡à¥¤\r\n\r\nà¦¶à¦¨à¦¿à¦¬à¦¾à¦° (à§©à§¦ à¦¸à§‡à¦ªà§à¦Ÿà§‡à¦®à§à¦¬à¦°) à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦à¦¬à¦‚ à¦œà¦¾à¦ªà¦¾à¦¨ à¦¸à¦°à¦•à¦¾à¦°à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦ à¦šà§à¦•à§à¦¤à¦¿ à¦¸à¦‡ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦¸à¦°à¦•à¦¾à¦°à§‡à¦° à¦ªà¦•à§à¦·à§‡ à¦…à¦°à§à¦¥à¦¨à§ˆà¦¤à¦¿à¦• à¦¸à¦®à§à¦ªà¦°à§à¦• à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¸à¦šà¦¿à¦¬ à¦¶à¦°à¦¿à¦«à¦¾ à¦–à¦¾à¦¨ à¦¬à¦¿à¦¨à¦¿à¦®à§Ÿ à¦¨à§‹à¦Ÿ à¦“ à¦‹à¦£à¦šà§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¸à¦‡ à¦•à¦°à§‡à¦¨à¥¤\r\nà¦…à¦¬à§à¦¯à¦¾à¦¹à¦¤ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦šà¦¾à¦¹à¦¿à¦¦à¦¾ à¦ªà§‚à¦°à¦£à§‡à¦° à¦²à¦•à§à¦·à§à¦¯à§‡ à¦ªà§', '1696071727_Screenshot 2023-09-30 170200.jpg', '2023-09-30 17:02:08'),
(11, 'teacher', 'à¦¸à§‹à¦¨à¦¾à¦° à¦¦à¦¾à¦® à¦•à¦®à¦²à§‹', 'à¦°à§‡à¦•à¦°à§à¦¡ à¦¦à¦¾à¦® à¦¹à¦“à§Ÿà¦¾à¦° à¦ªà¦° à¦¦à§‡à¦¶à§‡à¦° à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦à¦¬à¦¾à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¦à¦¾à¦® à¦•à¦¿à¦›à§à¦Ÿà¦¾ à¦•à¦®à¦¾à¦¨à§‹ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦­à¦¾à¦²à§‹ à¦®à¦¾à¦¨à§‡à¦° (à§§à§§ à¦¦à¦¶à¦®à¦¿à¦• à§¬à§¬à§ª à¦—à§à¦°à¦¾à¦®) à¦¸à§‹à¦¨à¦¾à§Ÿ à¦­à¦°à¦¿à¦ªà§à¦°à¦¤à¦¿ à¦à¦• à¦¹à¦¾à¦œà¦¾à¦° à§­à§ªà§¯ à¦Ÿà¦¾à¦•à¦¾ à¦•à¦®à¦¿à§Ÿà§‡ à¦¨à¦¤à§à¦¨ à¦¦à¦¾à¦® à¦¨à¦¿à¦°à§à¦§à¦¾à¦°à¦£ à¦•à¦°à¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦¤à§‡ à¦­à¦¾à¦²à§‹ à¦®à¦¾à¦¨à§‡à¦° à¦à¦• à¦­à¦°à¦¿ à¦¸à§‹à¦¨à¦¾ à¦•à¦¿à¦¨à¦¤à§‡ à¦•à§à¦°à§‡à¦¤à¦¾à¦•à§‡ à¦—à§à¦¨à¦¤à§‡ à¦¹à¦¬à§‡ à§¯à§® à¦¹à¦¾à¦œà¦¾à¦° à§¨à§§à§§ à¦Ÿà¦¾à¦•à¦¾à¥¤\r\n\r\nà¦¸à§à¦¥à¦¾à¦¨à§€à¦¯à¦¼ à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦¤à§‡à¦œà¦¾à¦¬à§€ à¦¸à§‹à¦¨à¦¾à¦° (à¦ªà¦¾à¦•à¦¾ à¦¸à§‹à¦¨à¦¾) à¦¦à¦¾à¦® à¦•à¦®à¦¾à¦° à¦ªà¦°à¦¿à¦ªà§à¦°à§‡à¦•à§à¦·à¦¿à¦¤à§‡ à¦ à¦¦à¦¾à¦® à¦•à¦®à¦¾à¦¨à§‹à¦° à¦¸à¦¿à¦¦à§à¦§à¦¾à¦¨à§à¦¤ à¦¹à¦¯à¦¼à§‡à¦›à§‡à¥¤ à¦†à¦—à¦¾à¦®à§€à¦•à¦¾à¦² à¦°à§‹à¦¬à¦¬à¦¾à¦° (à§§ à¦…à¦•à§à¦Ÿà§‹à¦¬à¦°) à¦¥à§‡à¦•à§‡ à¦¨à¦¤à§à¦¨ à¦¦à¦¾à¦® à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦¹à¦¬à§‡ à¦¬à¦²à§‡ à¦œà¦¾à¦¨à¦¿à§Ÿà§‡à¦›à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦œà§à¦¯à¦¼à§‡à¦²à¦¾à¦°à§à¦¸ à¦¸à¦®à¦¿à¦¤à¦¿ (à¦¬à¦¾à¦œà§à¦¸)à¥¤\r\n\r\nà¦—à¦¤ à§¨à§® à¦¸à§‡à¦ªà§à¦Ÿ', '1696082217_Screenshot 2023-09-30 195649.jpg', '2023-09-30 19:56:58'),
(12, 'teacher', 'afsadfsafsaf', 'fasfdasfasfasfsafsafasfsafsdfasfasfdsafasfsa', '1696082659_384098294_336402865578114_744606686333753314_n.jpg', '2023-09-30 20:04:20'),
(14, 'samiya', 'sadfasfsf fsafsafas fasfsaf', 'sdfsfsafsfsafsfsfsfsfsfsfsfsf4sf4s654f6sa4f6sa4f6as4f6as4f65sa4', '1696083790_tea-282x300.jpg', '2023-09-30 20:23:11'),
(15, 'samiya', 'Myanmar summoned', 'ldfsfslkfjlsakfjlksajflsajflsajflsajflsjflsjfl fsfjslfjslk flsajflsakf fsajdfljsasdlkkfj fsalkfjsalfj fsldfj ', '1696083859_9849.jpg', '2023-09-30 20:24:19'),
(16, 'samiya', 'World Samucha Day', 'â€œLetâ€™s have a chat with friends, but no samucha!â€ This is what food enthusiasts, especially Bengalis, say every day. Whether itâ€™s hanging out with friends, office meetings, or a light evening snack with loved ones, samucha plays a significant role everywhere. So, whether itâ€™s the office canteen, a street food stall, or a fancy restaurant, you can find this delectable food everywhere.', '1696083982_samucha.jpeg', '2023-09-30 20:26:23'),
(17, 'samiya', 'â€œThe Elevated Expressway Launches for Public Useâ€', 'The highly anticipated elevated expressway in Dhaka is now open for public use. Today, on Sunday (September 3), the expressway officially started operations with toll collection commencing at 6 AM. However, itâ€™s important to note that this route is restricted to four-wheel vehicles only, as three-wheelers, motorcycles, and bicycles are prohibited. Passengers are also not allowed access to the elevated expressway.\r\nYesterday, on Saturday (September 2) afternoon, Prime Minister Sheikh Hasina inaugurated the 11-kilometer elevated expressway, which spans from Kawla to Tejgaon. In a symbolic gesture, Prime Minister Sheikh Hasina became the first passenger to cross the expressway by paying the toll and using a car for the journey.', '1696084045_collage-03.09.23-.jpg', '2023-09-30 20:27:26'),
(18, 'admin', 'à¦à¦¬à¦¾à¦° à¦¸à¦®à§à¦¦à§à¦°à§‡à¦° à¦“à¦ªà¦° à¦¦à¦¿à§Ÿà§‡ à¦›à§à¦Ÿà¦›à§‡ à¦šà§€à¦¨à§‡à¦° à¦¬à§à¦²à§‡à¦Ÿ à¦Ÿà§à¦°à§‡à¦¨', 'à¦šà§€à¦¨à§‡à¦° à¦¬à¦¿à¦¶à§à¦¬à¦œà§‹à§œà¦¾ à¦–à§à¦¯à¦¾à¦¤à¦¿ à¦°à§Ÿà§‡à¦›à§‡ à¦¦à§à¦°à§à¦¤à¦—à¦¤à¦¿à¦° à¦Ÿà§à¦°à§‡à¦¨ à¦¨à¦¿à¦°à§à¦®à¦¾à¦£à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§‡à¦¶à¦Ÿà¦¿à¦° à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à§Ÿ à¦¬à§ˆà¦ªà§à¦²à¦¬à¦¿à¦• à¦ªà¦°à¦¿à¦¬à¦°à§à¦¤à¦¨ à¦à¦¨à§‡à¦›à§‡ à¦à¦‡ à¦Ÿà§à¦°à§‡à¦¨à¥¤ à¦šà§€à¦¨à§‡ à¦à¦¬à¦¾à¦° à¦à¦®à¦¨ à¦à¦• à¦¦à§à¦°à§à¦¤à¦—à¦¤à¦¿à¦° à¦Ÿà§à¦°à§‡à¦¨ à¦šà¦¾à¦²à§ à¦•à¦°à¦¾ à¦¹à§Ÿà§‡à¦›à§‡, à¦¯à§‡à¦Ÿà¦¿ à¦¸à¦®à§à¦¦à§à¦°à§‡à¦° à¦“à¦ªà¦° à¦¨à¦¿à¦°à§à¦®à¦¿à¦¤ à¦°à§‡à¦²à¦²à¦¾à¦‡à¦¨ à¦§à¦°à§‡ à¦›à§à¦Ÿà¦›à§‡! à¦à¦¤à§‡ à¦¤à¦¾à¦‡à¦“à§Ÿà¦¾à¦¨ à¦“ à¦«à§à¦œà¦¿à§Ÿà¦¾à¦¨à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦†à¦°à¦“ à¦­à¦¾à¦²à§‹ à¦¸à¦‚à¦¯à§‹à¦— à¦¸à§à¦¥à¦¾à¦ªà¦¨à§‡à¦° à¦“à¦ªà¦° à¦œà§‹à¦° à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦šà§€à¦¨à§‡à¦° à¦¦à¦•à§à¦·à¦¿à¦£-à¦ªà§‚à¦°à§à¦¬à¦¾à¦žà§à¦šà¦²à§‡à¦° à¦«à§à¦œà¦¿à§Ÿà¦¾à¦¨ à¦ªà§à¦°à¦¦à§‡à¦¶à§‡à¦° à¦‰à¦ªà¦•à§‚à¦²à§‡ à¦šà¦²à¦›à§‡ à¦à¦‡ à¦¬à§à¦²à§‡à¦Ÿ à¦Ÿà§à¦°à§‡à¦¨à¥¤ à§¨à§­à§­ à¦•à¦¿à¦²à§‹à¦®à¦¿à¦Ÿà¦¾à¦° à¦°à§‡à¦²à¦²à¦¾à¦‡à¦¨ à¦¯à§à¦•à§à¦¤ à¦•à¦°à§‡à¦›à§‡ à¦à¦¾à¦‚à¦à§‹à¦‰, à¦œà¦¿à§Ÿà¦¾à¦®à§‡à¦¨ à¦“ à¦«à§à¦œà¦¹à§‹à¦‰ à¦¶à¦¹à¦°à¦•à§‡à¥¤ à¦à¦‡ à¦ªà¦¥à§‡ à¦šà¦²à¦¾à¦šà¦²à¦•à¦¾à¦°à§€ à¦Ÿà§à¦°à§‡à¦¨à§‡à¦° à¦¸à¦°à§à¦¬à§‹à¦šà§à¦š à¦—à¦¤à¦¿ à¦˜à¦£à§à¦Ÿà¦¾à§Ÿ à§©à§«à§¦ à¦•à¦¿à¦²à§‹à¦®à¦¿à¦Ÿà¦¾à¦°à¥¤ à¦ à¦ªà¦¥à§‡ à¦à¦¬à¦¾à¦°à¦‡ à¦ªà§à¦°à¦¥à¦® à¦¦à§à¦°à§à¦¤à¦—à¦¤à¦¿à¦° à¦Ÿà§à¦°à§‡à¦¨ à¦šà¦¾à¦²à§ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦¦à¦¿à¦¨ à¦¸à¦•à¦¾à¦²à§‡ à¦«à§à¦œà¦¹à§‹à¦‰ à¦¶à¦¹à¦° à¦¥à§‡à¦•à§‡ à¦›à¦¾à§œà§‡ à¦Ÿà§à¦°à§‡à¦¨à¦Ÿà¦¿à¥¤ à¦à¦‡ à¦°à§‡à¦²à¦ªà¦¥à§‡ à§®à§ªà¦Ÿà¦¿ à¦¸à§‡à¦¤à§ à¦“ à§¨à§¯à¦Ÿà¦¿ à¦Ÿà¦¾à¦¨à§‡à¦² à¦°à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦° à¦¸à¦™à§à¦—à§‡ à¦°à§Ÿà§‡à¦›à§‡ à¦…à¦¨à§à¦¯ à¦°à§‹à¦®à¦¾à¦žà§à¦šà¦“-- à§¨à§¦ à¦•à¦¿à¦²à§‹à¦®à¦¿à¦Ÿà¦¾à¦° à¦°à§‡à¦²à¦ªà¦¥ à¦¬à¦¾à¦¨à¦¾à¦¨à§‹ à¦¹à§Ÿà§‡à¦›à§‡ à¦¸à¦®à§à¦¦à§à¦°à§‡à¦° à¦“à¦ªà¦°à§‡! à¦šà§€à¦¨à§‡ à¦à¦Ÿà¦¿à¦‡ à¦ªà§à¦°à¦¥à¦® à¦¸à¦®à§à¦¦à§à¦°à§‡à¦° à¦“à¦ªà¦° à¦¦à¦¿à§Ÿà§‡ à¦›à§à¦Ÿà§‡ à¦šà¦²à¦¾ à¦¬à§à¦²à§‡à¦Ÿ à¦Ÿà§à¦°à§‡à¦¨à', '1696150966_7-samakal-65182b6ab696b.jpg', '2023-10-01 15:02:46'),
(19, 'admin', 'à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦¶à¦¿ à¦°à¦¾à¦¨à§‡à¦° à¦¤à¦¾à¦²à¦¿à¦•à¦¾à§Ÿ à¦¶à§€à¦°à§à¦·à§‡ à¦¸à¦¾à¦•à¦¿à¦¬', 'à¦†à¦—à¦¾à¦®à§€ à¦®à¦¾à¦¸à§‡à¦‡ à¦¶à§à¦°à§ à¦¹à¦šà§à¦›à§‡ à¦“à§Ÿà¦¾à¦¨à¦¡à§‡ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡à¦° à¦®à§‚à¦² à¦ªà¦°à§à¦¬à¥¤ à§¨à§¦à§§à§¯ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡ à¦¬à§à¦¯à¦¾à¦Ÿ à¦¹à¦¾à¦¤à§‡ à¦¦à§à¦°à§à¦¦à¦¾à¦¨à§à¦¤ à¦›à¦¨à§à¦¦à§‡ à¦¥à¦¾à¦•à¦¾ à¦¸à¦¾à¦•à¦¿à¦¬à§‡à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦à¦¬à¦¾à¦°à¦“ à¦°à§Ÿà§‡à¦›à§‡ à¦à¦•à¦¾à¦§à¦¿à¦• à¦°à§‡à¦•à¦°à§à¦¡ à¦¨à¦¿à¦œà§‡à¦° à¦•à¦°à§‡ à¦¨à§‡à§Ÿà¦¾à¦°à¥¤ à¦¤à¦¬à§‡ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦¶à§à¦°à§à¦° à¦†à¦—à§‡ à¦…à¦¨à§à¦¯ à¦à¦•à¦Ÿà¦¿ à¦¤à¦¾à¦²à¦¿à¦•à¦¾à§Ÿ à¦¶à§€à¦°à§à¦·à§‡ à¦°à§Ÿà§‡à¦›à§‡à¦¨ à¦¸à¦¾à¦•à¦¿à¦¬, à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦Ÿà¦¾à¦‡à¦—à¦¾à¦° à¦…à¦²à¦°à¦¾à¦‰à¦¨à§à¦¡à¦¾à¦°à§‡à¦° à¦ªà§‡à¦›à¦¨à§‡ à¦°à§Ÿà§‡à¦›à§‡à¦¨ à¦­à¦¾à¦°à¦¤à§‡à¦° à¦¬à¦¿à¦°à¦¾à¦Ÿ à¦•à§‹à¦¹à¦²à¦¿à¥¤ \r\n \r\nà¦à¦¦à¦¿à¦•à§‡ à¦œà¦¾à¦¤à§€à§Ÿ à¦¦à¦²à§‡à¦° à¦¹à§Ÿà§‡ à¦à¦–à¦¨à§‹ à¦–à§‡à¦²à§‡ à¦šà¦²à¦¾ à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿà¦¾à¦°à¦¦à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦“à§Ÿà¦¾à¦¨à¦¡à§‡ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡ à¦¸à¦¾à¦•à¦¿à¦¬à§‡à¦° à¦°à¦¾à¦¨à¦¸à¦‚à¦–à§à¦¯à¦¾à¦‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦¶à¦¿à¥¤ à¦šà¦¾à¦° à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡ à¦–à§‡à¦²à¦¾ à¦¸à¦¾à¦•à¦¿à¦¬ à¦¬à§à¦¯à¦¾à¦Ÿ à¦¹à¦¾à¦¤à§‡ à¦°à¦¾à¦¨ à¦•à¦°à§‡à¦›à§‡à¦¨ à§§à§§à§ªà§¬à¥¤ à¦œà¦¾à¦¤à§€à§Ÿ à¦¦à¦²à§‡à¦° à¦¹à§Ÿà§‡ à¦à¦–à¦¨à§‹ à¦–à§‡à¦²à§‡ à¦šà¦²à¦¾ à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿà¦¾à¦°à¦¦à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ªà§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦…à¦§à¦¿à¦¨à¦¾à§Ÿà¦•à§‡à¦° à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦¶à¦¿ à¦°à¦¾à¦¨ à¦•à¦¾à¦°à§‹ à¦¨à§‡à¦‡à¥¤ ', '1704959857_sakib.jpg', '2023-10-01 15:33:57'),
(20, 'samiya', 'à¦¨à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦¤à§‡ à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥à§‡à¦° à¦•à¦¥à¦¾à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯ à¦¬à¦¿à¦·à§Ÿà§‡ à¦à¦•à¦• à¦¬à¦•à§à¦¤à§ƒà¦¤à¦¾ à¦…à¦¨à§à¦·à§à¦ à¦¿à¦¤', 'à¦ªà§à¦°à§‡à¦¸ à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿ (à§¨à§§ à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦°, à§¨à§¦à§¨à§©): à¦¨à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦‰à¦¦à§à¦¯à§‹à¦—à§‡ à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥à§‡à¦° à¦•à¦¥à¦¾à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯ à¦¬à¦¿à¦·à§Ÿà¦• à¦à¦•à¦• à¦¬à¦•à§à¦¤à§ƒà¦¤à¦¾ à¦…à¦¨à§à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¬à§ƒà¦¹à¦¸à§à¦ªà¦¤à¦¿à¦¬à¦¾à¦° à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦¨à¦—à¦°à§€à¦° à¦šà§Œà¦¦à§à¦¦à¦ªà¦¾à¦‡-à¦ à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à¦¨à¦¿à¦œà¦¸à§à¦¬ à¦•à§à¦¯à¦¾à¦®à§à¦ªà¦¾à¦¸à§‡ à¦à¦•à¦• à¦¬à¦•à§à¦¤à§ƒà¦¤à¦¾ à¦•à¦°à§‡à¦¨ à¦­à¦¾à¦°à¦¤à§‡à¦° à¦ªà¦¶à§à¦šà¦¿à¦®à¦¬à¦™à§à¦—à§‡à¦° à¦ªà¦¾à¦à¦šà¦¥à§à¦ªà¦¿ à¦¹à¦°à¦¿à¦ªà¦¦ à¦—à§Œà¦°à§€à¦¬à¦¾à¦²à¦¾ à¦•à¦²à§‡à¦œà§‡à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦¬à¦¿à¦­à¦¾à¦—à§€à§Ÿ à¦ªà§à¦°à¦§à¦¾à¦¨ à¦¡. à¦¶à§ˆà¦¬à¦¾à¦² à¦°à¦¾à§Ÿà¥¤ à¦à¦•à¦• à¦¬à¦•à§à¦¤à§ƒà¦¤à¦¾ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦¤à¦¿à¦¨à¦¿ à¦¬à¦²à§‡à¦¨, à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥ à¦•à¦¥à¦¾à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯ à¦¸à§ƒà¦œà¦¨à§‡ à¦ªà§à¦°à¦¤à¦¿à¦¨à¦¿à§Ÿà¦¤ à¦­à¦¾à¦™à¦¾ à¦—à§œà¦¾à¦° à¦®à¦§à§à¦¯ à¦¦à¦¿à§Ÿà§‡ à¦—à§‡à¦›à§‡à¦¨à¥¤ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦ªà§à¦°à¦§à¦¾à¦¨ à¦…à¦¤à¦¿à¦¥à¦¿ à¦¨à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦‡à¦‰à¦¨à¦¿à¦­à¦¾à¦°à§à¦°à§à¦¸à¦¿à¦Ÿà¦¿à¦° à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¤à¦¾ à¦‰à¦ªà¦¾à¦šà¦¾à¦°à§à¦¯ à¦“ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦‰à¦ªà¦¦à§‡à¦·à§à¦Ÿà¦¾ à¦ªà§à¦°à¦«à§‡à¦¸à¦° à¦¡. à¦†à¦¬à¦¦à§à¦² à¦–à¦¾à¦²à§‡à¦• à¦¬à¦²à§‡à¦¨, à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥à§‡à¦° à¦•à¦¥à¦¾à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯à§‡à¦° à¦à¦•à¦Ÿà¦¾ à¦—à§à¦°à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£ à¦®à¦¾à¦§à§à¦¯à¦® à¦¹à¦²à§‹ à¦›à§‹à¦Ÿà¦—à¦²à§à¦ªà¥¤ à¦¸à§‡à¦‡ à¦›à§‹à¦Ÿà¦—à¦²à§à¦ªà§‡à¦° à¦­à¦¿à¦¤à§à¦¤à¦¿à¦­à§‚à¦®à¦¿ à¦ªà§‚à¦°à§à¦¬à¦¬à¦™à§à¦— à¦¤à¦¥à¦¾ à¦†à¦œà¦•à§‡à¦° à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à¥¤ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦¸à¦®à§à¦®à¦¾à¦¨à¦¿à¦¤ à¦…à¦¤à¦¿à¦¥à¦¿ à¦¨à¦°à§à¦°à§à¦¥ à¦¬à§‡à¦™à§à¦—à¦² à¦‡', '1704962080_robindronuth.png', '2023-10-06 11:09:33'),
(21, 'admin', 'à¦œà§à¦¬à¦¾à¦²à¦¾à¦¨à¦¿ à¦›à¦¾à§œà¦¾à¦‡ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦‰à§Žà¦ªà¦¾à¦¦à¦¨ à¦®à§‹à¦¸à§à¦¤à¦¾à¦•à§‡à¦°, à¦šà¦²à¦¬à§‡ à¦ªà¦¾à¦®à§à¦ª-à¦«à§à¦°à¦¿à¦œ-à¦¬à¦¾à¦¤à¦¿', 'à¦œà§à¦¬à¦¾à¦²à¦¾à¦¨à¦¿ à¦›à¦¾à§œà¦¾à¦‡ à¦¶à§à¦§à§ à¦…à¦Ÿà§‹à¦°à¦¿à¦•à¦¶à¦¾à¦° à¦ªà§à¦°à§‹à¦¨à§‹ à¦¬à§à¦¯à¦¾à¦Ÿà¦¾à¦°à¦¿ à¦“ à¦®à§‹à¦Ÿà¦° à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à§‡ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦‰à§Žà¦ªà¦¾à¦¦à¦¨ à¦•à¦°à¦›à§‡à¦¨ à¦•à¦¿à¦¶à§‹à¦°à¦—à¦žà§à¦œà§‡à¦° à¦­à§ˆà¦°à¦¬ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦¯à§à¦¬à¦• à¦®à§‹à¦¸à§à¦¤à¦¾à¦• à¦®à¦¿à§Ÿà¦¾à¥¤ à¦‰à§Žà¦ªà¦¾à¦¦à¦¿à¦¤ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦¥à§‡à¦•à§‡à¦‡ à¦¸à§‡à¦‡ à¦®à§‹à¦Ÿà¦°à§‡à¦° à¦¬à§à¦¯à¦¾à¦Ÿà¦¾à¦°à¦¿à¦“ à¦šà¦¾à¦°à§à¦œ à¦¹à¦šà§à¦›à§‡à¥¤\r\n\r\nà¦¦à§€à¦°à§à¦˜ à¦¦à§à¦¬à¦›à¦°à§‡à¦°à¦“ à¦¬à§‡à¦¶à¦¿ à¦¸à¦®à§Ÿ à¦§à¦°à§‡ à¦šà§‡à¦·à§à¦Ÿà¦¾à¦° à¦ªà¦° à¦ªà§à¦°à§‹à¦¨à§‹ à¦¬à§à¦¯à¦¾à¦Ÿà¦¾à¦°à¦¿ à¦“ à¦®à§‹à¦Ÿà¦°à§‡à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦‰à§Žà¦ªà¦¾à¦¦à¦¨à§‡ à¦¸à¦«à¦²à¦¤à¦¾ à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à¦¤à¦¿à¦¨à¦¿à¥¤ à¦¶à§à¦§à§à¦®à¦¾à¦¤à§à¦° à¦à¦•à¦•à¦¾à¦²à§€à¦¨ à¦…à¦°à§à¦¥ à¦–à¦°à¦š à¦•à¦°à§‡ à¦ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦‰à§Žà¦ªà¦¾à¦¦à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡à¥¤ à¦à¦¤à§‡ à¦ªà§à¦°à¦¤à¦¿ à¦®à¦¾à¦¸à§‡ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦¬à¦¿à¦²à§‡à¦° à¦®à¦¤à§‹ à¦¬à¦¾à§œà¦¤à¦¿ à¦•à§‹à¦¨à§‹ à¦–à¦°à¦š à¦²à¦¾à¦—à¦¬à§‡ à¦¨à¦¾à¥¤', '1701238686_kis-1-20231129105650.jpg', '2023-11-29 12:18:07'),
(22, 'admin', 'à¦…à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦œà¦¿-à¦®à§‡à¦‡à¦² à¦¡à¦¿à¦²à¦¿à¦Ÿ à¦•à¦°à§à¦¨ à¦à¦• à¦•à§à¦²à¦¿à¦•à§‡à¦‡', '<p>à¦…à¦¨à§‡à¦• à¦¸à¦®à§Ÿ à¦ªà§à¦°à¦®à§‹à¦¶à¦¨à¦¾à¦² à¦¬à¦¾ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à§€ à¦®à§‡à¦‡à¦²à§‡ à¦œà¦¿-à¦®à§‡à¦‡à¦² à¦…à§à¦¯à¦¾à¦•à¦¾à¦‰à¦¨à§à¦Ÿ à¦­à¦°à§‡ à¦¥à¦¾à¦•à§‡à¥¤ à¦à¦¤à§‡ à¦¸à§à¦Ÿà§‹à¦°à§‡à¦œ à¦¯à§‡à¦®à¦¨ à¦¦à¦–à¦² à¦•à¦°à§‡ à¦°à¦¾à¦–à§‡, à¦¤à§‡à¦®à¦¨ à¦à¦¸à¦¬ à¦…à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦®à§‡à¦‡à¦²à§‡à¦° à¦­à§€à§œà§‡ à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦®à§‡à¦‡à¦² à¦–à§à¦à¦œà§‡ à¦ªà¦¾à¦“à§Ÿà¦¾ à¦•à¦ à¦¿à¦¨ à¦¹à§Ÿà§‡ à¦ªà§œà§‡à¥¤ à¦¸à§à¦Ÿà§‹à¦°à§‡à¦œ à¦«à§à¦² à¦¥à¦¾à¦•à¦¾à¦° à¦•à¦¾à¦°à¦£à§‡ à¦¨à¦¤à§à¦¨ à¦®à§‡à¦‡à¦²à¦“ à¦¢à§à¦•à¦›à§‡ à¦¨à¦¾ à¦†à¦°à¥¤</p>\r\n<p>à¦—à§à¦—à¦² à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦œà¦¨à§à¦¯ à§§à§« à¦œà¦¿à¦¬à¦¿ à¦«à§à¦°à¦¿ à¦¸à§à¦Ÿà§‹à¦°à§‡à¦œ à¦¦à§‡à§Ÿ, à¦¯à¦¾à¦¤à§‡ à¦¤à¦¾à¦°à¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦«à¦Ÿà§‹, à¦‡-à¦®à§‡à¦‡à¦² à¦à¦¬à¦‚ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦¡à¦¾à¦Ÿà¦¾ à¦¬à¦¾ à¦«à¦¾à¦‡à¦² à¦¸à§‡à¦­ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦•à¦–à¦¨à§‹ à¦•à¦–à¦¨à§‹ à¦à¦¤ à¦¬à§‡à¦¶à¦¿ à¦…à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨à§€à¦¯à¦¼ à¦®à§‡à¦² à¦†à¦¸à§‡, à¦¤à¦¾à¦¤à§‡à¦‡ à¦­à¦°à§à¦¤à¦¿ à¦¹à§Ÿà§‡ à¦¯à¦¾à§Ÿ à§§à§« à¦œà¦¿à¦¬à¦¿ à¦«à§à¦°à¦¿ à¦¸à§à¦Ÿà§‹à¦°à§‡à¦œà¥¤ à¦¦à§‡à¦–à§‡ à¦¨à¦¿à¦¨ à¦•à§€à¦­à¦¾à¦¬à§‡ à¦–à§à¦¬ à¦¸à¦¹à¦œà§‡à¦‡ à¦…à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦œà¦¿-à¦®à§‡à¦‡à¦² à¦¡à¦¿à¦²à¦¿à¦Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨-</p>\r\n<p>&gt;&gt; à¦ªà§à¦°à¦¥à¦®à§‡ à¦“à¦¯à¦¼à§‡à¦¬ à¦¬à§à¦°à¦¾à¦‰à¦œà¦¾à¦° à¦–à§à¦²à§à¦¨à¥¤<br>&gt;&gt; à¦¤à¦¾à¦°à¦ªà¦° à¦œà¦¿-à¦®à§‡à¦‡à¦² à¦…à§à¦¯à¦¾à¦•à¦¾à¦‰à¦¨à§à¦Ÿà§‡ à¦²à¦—à¦‡à¦¨ à¦•à¦°à§à¦¨à¥¤<br>&gt;&gt; à¦à¦¬à¦¾à¦° à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦°à¦¿à¦«à§à¦°à§‡à¦¶ à¦¬à§‹à¦¤à¦¾à¦®à§‡à¦° à¦¸à¦®à¦¾à¦¨ à¦†à¦ªà¦¨à¦¾à¦° à¦‡à¦¨à¦¬à¦•à§à¦¸à§‡à¦° à¦à¦•à¦¦à¦® à¦‰à¦ªà¦°à§‡ à¦à¦•à¦Ÿà¦¿ à¦šà§‡à¦•à¦¬à¦•à§à¦¸à§‡ à¦•à§à¦²à¦¿à¦• à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤<br>&gt;&gt; à¦à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦ªà§‡à¦œà§‡à¦° à¦¸à¦¬ à¦®à§‡à¦‡à¦² à¦à¦•à¦‡ à¦¸à¦™à§à¦—à§‡ à¦®à§à¦›à§‡ à¦«à§‡à¦²à¦¾ à¦¯à¦¾à¦¬à§‡à¥¤</p>\r\n<p>&nbsp;</p>\r\n<p>à¦¤à¦¬à§‡ à¦à¦‡ à¦¸à¦¬ à¦•à¦¿à¦›à§ à¦¡à¦¿à¦²à¦¿à¦Ÿ à¦•à¦°à¦¾à¦° à¦¸à¦', '1701239791_Screenshot 2023-11-29 123619.png', '2023-11-29 12:36:32'),
(23, 'admin', 'à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿà§‡à¦° à¦¸à¦¹à¦œ à§© à¦‰à¦ªà¦¾à§Ÿ', '<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦…à¦¨à§à¦¯à¦¤à¦® à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦­à¦¿à¦¡à¦¿à¦“ à¦¸à§à¦Ÿà§à¦°à¦¿à¦®à¦¿à¦‚ à¦ªà§à¦²à§à¦¯à¦¾à¦Ÿà¦«à¦°à§à¦®à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦¬à¦¿à¦¨à§‹à¦¦à¦¨à§‡à¦° à¦–à§‹à¦°à¦¾à¦• à¦®à§‡à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦–à§à¦¬ à¦¸à¦¹à¦œà§‡à¦‡à¥¤ à¦¸à¦¿à¦¨à§‡à¦®à¦¾, à¦—à¦¾à¦¨, à¦¨à¦¾à¦Ÿà¦• à¦¸à¦¬ à¦•à¦¿à¦›à§à¦‡ à¦°à§Ÿà§‡à¦›à§‡ à¦à¦–à¦¾à¦¨à§‡à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦®à¦¾à¦¸à§‡ à¦²à¦¾à¦– à¦²à¦¾à¦– à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦›à§‡à¦¨à¥¤</p>\r\n<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦¤à¦¬à§‡ à¦†à¦œ à§©à¦Ÿà¦¿ à¦¸à¦¹à¦œ à¦‰à¦ªà¦¾à§Ÿà§‡à¦° à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à§‡ à¦œà¦¾à¦¨à¦¾à¦¬à¥¤ à¦šà¦²à§à¦¨ à¦œà§‡à¦¨à§‡ à¦¨à§‡à¦“à§Ÿà¦¾ à¦¯à¦¾à¦• à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿ à¦•à¦°à¦¾à¦° à§© à¦‰à¦ªà¦¾à§Ÿ-</p>\r\n<p><strong>à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨</strong><br>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡ à¦­à¦¿à¦¡à¦¿à¦“ à¦†à¦ªà¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦¸à¦™à§à¦—à§‡ à¦¸à¦™à§à¦—à§‡ à¦†à¦°à¦“ à¦à¦• à¦¦à¦¿à¦• à¦¥à§‡à¦•à§‡ à¦†à¦ªà¦¨à¦¿ à¦ªà§à¦°à¦šà§à¦° à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦•à¦¾à¦°à¦£ à¦­à¦¿à¦¡à¦¿à¦“à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¿ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦“ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦¬à§‡à¦¨ à¦à¦¬à¦‚ à¦à¦‡ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦à¦•à¦œà¦¨ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à§‡à¥¤ à¦¤à¦¬à§‡ à¦à¦œà¦¨à§à¦¯ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¦° à¦•à¦¿à¦›à§ à¦¨à§€à¦¤à¦¿ à¦…à¦¨à§à¦¸à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤</p>\r\n<p>à¦…à§à¦¯à¦¾à¦«à¦¿à¦²à¦¿à¦¯à¦¼à§‡à¦Ÿ à¦²à¦¿à¦‚à¦•à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦‡à¦¨à¦•à¦¾à¦®<br>à¦†à¦°à¦“ à¦•à§à¦°à¦¿à¦¯à¦¼à§‡à¦Ÿà¦¿à¦­ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à¦¯à¦¼ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¥¤ à¦à¦œà¦¨à§à¦¯ à¦•à§‹à¦¨à§‹ à¦•à§‹à¦®à§à¦ªà¦¾à¦¨à¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦šà§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡, à¦à¦°à¦ªà¦° à¦¤à¦¾à¦¦à§‡à¦° à¦ªà¦£à§', '1701240006_Screenshot 2023-11-29 123958.png', '2023-11-29 12:40:06'),
(24, 'admin', 'à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿà§‡à¦° à¦¸à¦¹à¦œ à§© à¦‰à¦ªà¦¾à§Ÿ', '<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦…à¦¨à§à¦¯à¦¤à¦® à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦­à¦¿à¦¡à¦¿à¦“ à¦¸à§à¦Ÿà§à¦°à¦¿à¦®à¦¿à¦‚ à¦ªà§à¦²à§à¦¯à¦¾à¦Ÿà¦«à¦°à§à¦®à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦¬à¦¿à¦¨à§‹à¦¦à¦¨à§‡à¦° à¦–à§‹à¦°à¦¾à¦• à¦®à§‡à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦–à§à¦¬ à¦¸à¦¹à¦œà§‡à¦‡à¥¤ à¦¸à¦¿à¦¨à§‡à¦®à¦¾, à¦—à¦¾à¦¨, à¦¨à¦¾à¦Ÿà¦• à¦¸à¦¬ à¦•à¦¿à¦›à§à¦‡ à¦°à§Ÿà§‡à¦›à§‡ à¦à¦–à¦¾à¦¨à§‡à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦®à¦¾à¦¸à§‡ à¦²à¦¾à¦– à¦²à¦¾à¦– à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦›à§‡à¦¨à¥¤</p>\r\n<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦¤à¦¬à§‡ à¦†à¦œ à§©à¦Ÿà¦¿ à¦¸à¦¹à¦œ à¦‰à¦ªà¦¾à§Ÿà§‡à¦° à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à§‡ à¦œà¦¾à¦¨à¦¾à¦¬à¥¤ à¦šà¦²à§à¦¨ à¦œà§‡à¦¨à§‡ à¦¨à§‡à¦“à§Ÿà¦¾ à¦¯à¦¾à¦• à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿ à¦•à¦°à¦¾à¦° à§© à¦‰à¦ªà¦¾à§Ÿ-</p>\r\n<p><strong>à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨</strong><br>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡ à¦­à¦¿à¦¡à¦¿à¦“ à¦†à¦ªà¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦¸à¦™à§à¦—à§‡ à¦¸à¦™à§à¦—à§‡ à¦†à¦°à¦“ à¦à¦• à¦¦à¦¿à¦• à¦¥à§‡à¦•à§‡ à¦†à¦ªà¦¨à¦¿ à¦ªà§à¦°à¦šà§à¦° à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦•à¦¾à¦°à¦£ à¦­à¦¿à¦¡à¦¿à¦“à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¿ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦“ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦¬à§‡à¦¨ à¦à¦¬à¦‚ à¦à¦‡ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦à¦•à¦œà¦¨ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à§‡à¥¤ à¦¤à¦¬à§‡ à¦à¦œà¦¨à§à¦¯ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¦° à¦•à¦¿à¦›à§ à¦¨à§€à¦¤à¦¿ à¦…à¦¨à§à¦¸à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤</p>\r\n<p>à¦…à§à¦¯à¦¾à¦«à¦¿à¦²à¦¿à¦¯à¦¼à§‡à¦Ÿ à¦²à¦¿à¦‚à¦•à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦‡à¦¨à¦•à¦¾à¦®<br>à¦†à¦°à¦“ à¦•à§à¦°à¦¿à¦¯à¦¼à§‡à¦Ÿà¦¿à¦­ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à¦¯à¦¼ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¥¤ à¦à¦œà¦¨à§à¦¯ à¦•à§‹à¦¨à§‹ à¦•à§‹à¦®à§à¦ªà¦¾à¦¨à¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦šà§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡, à¦à¦°à¦ªà¦° à¦¤à¦¾à¦¦à§‡à¦° à¦ªà¦£à§', '1701240019_Screenshot 2023-11-29 123958.png', '2023-11-29 12:40:19'),
(25, 'admin', 'à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿà§‡à¦° à¦¸à¦¹à¦œ à§© à¦‰à¦ªà¦¾à§Ÿ', '<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦…à¦¨à§à¦¯à¦¤à¦® à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦­à¦¿à¦¡à¦¿à¦“ à¦¸à§à¦Ÿà§à¦°à¦¿à¦®à¦¿à¦‚ à¦ªà§à¦²à§à¦¯à¦¾à¦Ÿà¦«à¦°à§à¦®à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦¬à¦¿à¦¨à§‹à¦¦à¦¨à§‡à¦° à¦–à§‹à¦°à¦¾à¦• à¦®à§‡à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦–à§à¦¬ à¦¸à¦¹à¦œà§‡à¦‡à¥¤ à¦¸à¦¿à¦¨à§‡à¦®à¦¾, à¦—à¦¾à¦¨, à¦¨à¦¾à¦Ÿà¦• à¦¸à¦¬ à¦•à¦¿à¦›à§à¦‡ à¦°à§Ÿà§‡à¦›à§‡ à¦à¦–à¦¾à¦¨à§‡à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦®à¦¾à¦¸à§‡ à¦²à¦¾à¦– à¦²à¦¾à¦– à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦›à§‡à¦¨à¥¤</p>\r\n<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦¤à¦¬à§‡ à¦†à¦œ à§©à¦Ÿà¦¿ à¦¸à¦¹à¦œ à¦‰à¦ªà¦¾à§Ÿà§‡à¦° à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à§‡ à¦œà¦¾à¦¨à¦¾à¦¬à¥¤ à¦šà¦²à§à¦¨ à¦œà§‡à¦¨à§‡ à¦¨à§‡à¦“à§Ÿà¦¾ à¦¯à¦¾à¦• à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿ à¦•à¦°à¦¾à¦° à§© à¦‰à¦ªà¦¾à§Ÿ-</p>\r\n<p><strong>à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨</strong><br>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡ à¦­à¦¿à¦¡à¦¿à¦“ à¦†à¦ªà¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦¸à¦™à§à¦—à§‡ à¦¸à¦™à§à¦—à§‡ à¦†à¦°à¦“ à¦à¦• à¦¦à¦¿à¦• à¦¥à§‡à¦•à§‡ à¦†à¦ªà¦¨à¦¿ à¦ªà§à¦°à¦šà§à¦° à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦•à¦¾à¦°à¦£ à¦­à¦¿à¦¡à¦¿à¦“à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¿ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦“ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦¬à§‡à¦¨ à¦à¦¬à¦‚ à¦à¦‡ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦à¦•à¦œà¦¨ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à§‡à¥¤ à¦¤à¦¬à§‡ à¦à¦œà¦¨à§à¦¯ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¦° à¦•à¦¿à¦›à§ à¦¨à§€à¦¤à¦¿ à¦…à¦¨à§à¦¸à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤</p>\r\n<p>à¦…à§à¦¯à¦¾à¦«à¦¿à¦²à¦¿à¦¯à¦¼à§‡à¦Ÿ à¦²à¦¿à¦‚à¦•à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦‡à¦¨à¦•à¦¾à¦®<br>à¦†à¦°à¦“ à¦•à§à¦°à¦¿à¦¯à¦¼à§‡à¦Ÿà¦¿à¦­ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à¦¯à¦¼ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¥¤ à¦à¦œà¦¨à§à¦¯ à¦•à§‹à¦¨à§‹ à¦•à§‹à¦®à§à¦ªà¦¾à¦¨à¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦šà§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡, à¦à¦°à¦ªà¦° à¦¤à¦¾à¦¦à§‡à¦° à¦ªà¦£à§', '1701240036_Screenshot 2023-11-29 123958.png', '2023-11-29 12:40:37'),
(26, 'admin', 'à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿà§‡à¦° à¦¸à¦¹à¦œ à§© à¦‰à¦ªà¦¾à§Ÿ', '<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦…à¦¨à§à¦¯à¦¤à¦® à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦­à¦¿à¦¡à¦¿à¦“ à¦¸à§à¦Ÿà§à¦°à¦¿à¦®à¦¿à¦‚ à¦ªà§à¦²à§à¦¯à¦¾à¦Ÿà¦«à¦°à§à¦®à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦¬à¦¿à¦¨à§‹à¦¦à¦¨à§‡à¦° à¦–à§‹à¦°à¦¾à¦• à¦®à§‡à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦–à§à¦¬ à¦¸à¦¹à¦œà§‡à¦‡à¥¤ à¦¸à¦¿à¦¨à§‡à¦®à¦¾, à¦—à¦¾à¦¨, à¦¨à¦¾à¦Ÿà¦• à¦¸à¦¬ à¦•à¦¿à¦›à§à¦‡ à¦°à§Ÿà§‡à¦›à§‡ à¦à¦–à¦¾à¦¨à§‡à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦®à¦¾à¦¸à§‡ à¦²à¦¾à¦– à¦²à¦¾à¦– à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦›à§‡à¦¨à¥¤</p>\r\n<p>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦¤à¦¬à§‡ à¦†à¦œ à§©à¦Ÿà¦¿ à¦¸à¦¹à¦œ à¦‰à¦ªà¦¾à§Ÿà§‡à¦° à¦¬à§à¦¯à¦¾à¦ªà¦¾à¦°à§‡ à¦œà¦¾à¦¨à¦¾à¦¬à¥¤ à¦šà¦²à§à¦¨ à¦œà§‡à¦¨à§‡ à¦¨à§‡à¦“à§Ÿà¦¾ à¦¯à¦¾à¦• à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬ à¦¥à§‡à¦•à§‡ à¦†à§Ÿ à¦•à¦°à¦¾à¦° à§© à¦‰à¦ªà¦¾à§Ÿ-</p>\r\n<p><strong>à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨</strong><br>à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡ à¦­à¦¿à¦¡à¦¿à¦“ à¦†à¦ªà¦²à§‹à¦¡ à¦•à¦°à¦¾à¦° à¦¸à¦™à§à¦—à§‡ à¦¸à¦™à§à¦—à§‡ à¦†à¦°à¦“ à¦à¦• à¦¦à¦¿à¦• à¦¥à§‡à¦•à§‡ à¦†à¦ªà¦¨à¦¿ à¦ªà§à¦°à¦šà§à¦° à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦•à¦¾à¦°à¦£ à¦­à¦¿à¦¡à¦¿à¦“à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¿ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦“ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦¬à§‡à¦¨ à¦à¦¬à¦‚ à¦à¦‡ à¦¬à¦¿à¦œà§à¦žà¦¾à¦ªà¦¨à¦—à§à¦²à§‹à¦° à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡ à¦à¦•à¦œà¦¨ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦Ÿà¦¾à¦•à¦¾ à¦†à§Ÿ à¦•à¦°à§‡à¥¤ à¦¤à¦¬à§‡ à¦à¦œà¦¨à§à¦¯ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¦° à¦•à¦¿à¦›à§ à¦¨à§€à¦¤à¦¿ à¦…à¦¨à§à¦¸à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤</p>\r\n<p>à¦…à§à¦¯à¦¾à¦«à¦¿à¦²à¦¿à¦¯à¦¼à§‡à¦Ÿ à¦²à¦¿à¦‚à¦•à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦‡à¦¨à¦•à¦¾à¦®<br>à¦†à¦°à¦“ à¦•à§à¦°à¦¿à¦¯à¦¼à§‡à¦Ÿà¦¿à¦­ à¦‰à¦ªà¦¾à§Ÿà§‡ à¦†à¦¯à¦¼ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦‡à¦‰à¦Ÿà¦¿à¦‰à¦¬à§‡à¥¤ à¦à¦œà¦¨à§à¦¯ à¦•à§‹à¦¨à§‹ à¦•à§‹à¦®à§à¦ªà¦¾à¦¨à¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦šà§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡, à¦à¦°à¦ªà¦° à¦¤à¦¾à¦¦à§‡à¦° à¦ªà¦£à§', '1701240160_Screenshot 2023-11-29 123958.png', '2023-11-29 12:42:40'),
(27, 'admin', 'à¦—à§à¦—à¦²à§‡à¦° à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦° à¦†à¦° à¦¥à¦¾à¦•à¦¬à§‡ à¦¨à¦¾ à¦¯à§‡à¦¸à¦¬ à¦«à§‹à¦¨à§‡', '                            <p>à¦—à§à¦—à¦²à§‡à¦° à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦«à¦¿à¦šà¦¾à¦° à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦°à¥¤ à¦¯à¦¾ à¦¸à¦¬ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦‡ à¦¥à¦¾à¦•à§‡à¥¤ à¦…à§à¦¯à¦¾à¦¨à§à¦¡à§à¦°à§Ÿà§‡à¦¡ à¦¹à§‹à¦• à¦¬à¦¾ à¦†à¦‡à¦«à§‹à¦¨, à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦¹à§‹à¦• à¦¬à¦¾ à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¸à¦°à§à¦¬à¦¤à§à¦°à¦‡ à¦¡à§‡à¦Ÿ à¦¶à¦¿à¦¡à¦¿à¦‰à¦² à¦•à¦°à¦¾ à¦¥à§‡à¦•à§‡ à¦®à§à¦¯à¦¾à¦¨à§‡à¦œ, à¦¸à¦¬à¦•à§à¦·à§‡à¦¤à§à¦°à§‡à¦‡ à¦—à§à¦—à¦² à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦°à§‡à¦° à¦¬à¦¿à¦•à¦²à§à¦ª à¦•à¦¿à¦›à§ à¦¹à§Ÿ à¦¨à¦¾à¥¤ à¦¤à¦¬à§‡ à¦à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦«à§‹à¦¨ à¦¥à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦…à§à¦¯à¦¾à¦ª à¦¸à¦°à¦¿à§Ÿà§‡ à¦¨à¦¿à¦šà§à¦›à§‡ à¦—à§à¦—à¦²à¥¤</p>                        ', '1704958885_googletips_calendar_mini.jpg', '2023-11-29 12:46:14'),
(28, 'admin', 'à¦—à§à¦—à¦²à§‡à¦° à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦° à¦†à¦° à¦¥à¦¾à¦•à¦¬à§‡ à¦¨à¦¾ à¦¯à§‡à¦¸à¦¬ à¦«à§‹à¦¨à§‡', '<p>à¦—à§à¦—à¦²à§‡à¦° à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦«à¦¿à¦šà¦¾à¦° à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦°à¥¤ à¦¯à¦¾ à¦¸à¦¬ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦«à§‹à¦¨à§‡à¦‡ à¦¥à¦¾à¦•à§‡à¥¤ à¦…à§à¦¯à¦¾à¦¨à§à¦¡à§à¦°à§Ÿà§‡à¦¡ à¦¹à§‹à¦• à¦¬à¦¾ à¦†à¦‡à¦«à§‹à¦¨, à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦¹à§‹à¦• à¦¬à¦¾ à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¸à¦°à§à¦¬à¦¤à§à¦°à¦‡ à¦¡à§‡à¦Ÿ à¦¶à¦¿à¦¡à¦¿à¦‰à¦² à¦•à¦°à¦¾ à¦¥à§‡à¦•à§‡ à¦®à§à¦¯à¦¾à¦¨à§‡à¦œ, à¦¸à¦¬à¦•à§à¦·à§‡à¦¤à§à¦°à§‡à¦‡ à¦—à§à¦—à¦² à¦•à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¡à¦¾à¦°à§‡à¦° à¦¬à¦¿à¦•à¦²à§à¦ª à¦•à¦¿à¦›à§ à¦¹à§Ÿ à¦¨à¦¾à¥¤ à¦¤à¦¬à§‡ à¦à¦¬à¦¾à¦° à¦…à¦¨à§‡à¦• à¦«à§‹à¦¨ à¦¥à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦…à§à¦¯à¦¾à¦ª à¦¸à¦°à¦¿à§Ÿà§‡ à¦¨à¦¿à¦šà§à¦›à§‡ à¦—à§à¦—à¦²à¥¤</p>', '1701240548_Screenshot 2023-11-29 124523.png', '2023-11-29 12:49:09'),
(29, 'admin', 'à¦…à§à¦¯à¦¾à¦®à§‹à¦²à§‡à¦¡ à¦¡à¦¿à¦¸à¦ªà§à¦²à§‡à¦° à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦“à§Ÿà¦¾à¦š à¦†à¦¨à¦›à§‡ à¦°à§‡à¦¡à¦®à¦¿', '<p>à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦“à§Ÿà¦¾à¦š à¦¨à¦¿à¦°à§à¦®à¦¾à¦¤à¦¾ à¦¸à¦‚à¦¸à§à¦¥à¦¾ à¦¶à¦¾à¦“à¦®à¦¿ à¦†à¦¨à¦›à§‡ à¦¨à¦¤à§à¦¨ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦“à§Ÿà¦¾à¦šà¥¤ à¦°à§‡à¦¡à¦®à¦¿ à¦“à§Ÿà¦¾à¦š à§ª à¦†à¦¸à¦›à§‡ à¦…à§à¦¯à¦¾à¦®à§‹à¦²à§‡à¦¡ à¦¡à¦¿à¦¸à¦ªà§à¦²à§‡à¦¤à§‡à¥¤ à¦…à§à¦¯à¦¾à¦²à§à¦®à¦¿à¦¨à¦¿à§Ÿà¦¾à¦® à¦…à§à¦¯à¦¾à¦²à§Ÿ à¦«à§à¦°à§‡à¦® à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à¦šà§à¦›à§‡ à¦˜à¦¡à¦¼à¦¿à¦Ÿà¦¿à¦¤à§‡à¥¤ à¦¸à§‡à¦‡ à¦¸à¦™à§à¦—à§‡à¦‡ à¦†à¦¬à¦¾à¦° à¦à¦Ÿà¦¿ à¦ªà§à¦°à¦¥à¦® à¦°à§‡à¦¡à¦®à¦¿ à¦¸à§à¦®à¦¾à¦°à§à¦Ÿà¦“à§Ÿà¦¾à¦š à¦¹à¦¤à§‡ à¦šà¦²à§‡à¦›à§‡, à¦¯à¦¾à¦¤à§‡ à¦®à§‡à¦Ÿà¦¾à¦² à¦¬à¦¡à¦¿ à¦¥à¦¾à¦•à¦›à§‡à¥¤ à¦«à§à¦°à§‡à¦®à¦Ÿà¦¿à¦¤à§‡ à¦°à§Ÿà§‡à¦›à§‡ à¦¸à§à¦Ÿà§‡à¦‡à¦¨à¦²à§‡à¦¸ à¦¸à§à¦Ÿà¦¿à¦²à§‡à¦° à¦°à§‹à¦Ÿà§‡à¦Ÿà¦¿à¦‚ à¦•à§à¦°à¦¾à¦‰à¦¨à¥¤ à¦¸à¦‚à¦¸à§à¦¥à¦¾ à¦à¦‡ à¦¡à¦¿à¦œà¦¼à¦¾à¦‡à¦¨à¦Ÿà¦¿à¦•à§‡ à¦¬à¦²à¦›à§‡, &lsquo;à¦¡à¦¾à§Ÿà¦®à¦¨à§à¦¡ à¦•à¦¾à¦Ÿ&rsquo;à¥¤</p>', '1701240596_Screenshot 2023-11-29 124946.png', '2023-11-29 12:49:56'),
(32, 'admin', 'à¦¹à¦°à¦¤à¦¾à¦²-à¦…à¦¬à¦°à§‹à¦§à§‡ à¦à¦• à¦®à¦¾à¦¸à§‡ à¦†à¦—à§à¦¨à§‡ à¦ªà§à§œà¦² à§¨à§§à§­ à¦¯à¦¾à¦¨à¦¬à¦¾à¦¹à¦¨', '<p>à¦¸à¦°à¦•à¦¾à¦° à¦ªà¦¤à¦¨à§‡à¦° à¦à¦• à¦¦à¦«à¦¾ à¦à¦¬à¦‚ à¦¨à¦¿à¦°à¦ªà§‡à¦•à§à¦· à¦¨à¦¿à¦°à§à¦¦à¦²à§€à§Ÿ à¦¸à¦°à¦•à¦¾à¦°à§‡à¦° à¦…à¦§à§€à¦¨à§‡ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§‡à¦° à¦¦à¦¾à¦¬à¦¿à¦¤à§‡ à¦à¦• à¦®à¦¾à¦¸ à¦§à¦°à§‡ à¦²à¦¾à¦—à¦¾à¦¤à¦¾à¦° à¦¹à¦°à¦¤à¦¾à¦²-à¦…à¦¬à¦°à§‹à¦§ à¦•à¦°à¦›à§‡ à¦¬à¦¿à¦à¦¨à¦ªà¦¿-à¦œà¦¾à¦®à¦¾à§Ÿà¦¾à¦¤à¥¤ à¦—à¦¤ à¦à¦• à¦®à¦¾à¦¸à§‡ à§¨à§§à§­à¦Ÿà¦¿ à¦¯à¦¾à¦¨à¦¬à¦¾à¦¹à¦¨ à¦†à¦—à§à¦¨à§‡ à¦ªà§à§œà¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¬à¦¾à¦¦ à¦¯à¦¾à§Ÿà¦¨à¦¿&nbsp; à¦Ÿà§à¦°à§‡à¦¨à¦“à¥¤ à¦à¦¸à¦¬ à¦…à¦—à§à¦¨à¦¿à¦•à¦¾à¦£à§à¦¡à§‡ à¦®à¦¾à¦°à¦¾ à¦—à§‡à¦›à§‡à¦¨ à¦•à§Ÿà§‡à¦• à¦œà¦¨à¥¤ à¦†à¦¹à¦¤ à¦¹à§Ÿà§‡à¦›à§‡à¦¨ à¦…à¦¨à§‡à¦•à§‡à¥¤</p>\r\n<table style=\"border-collapse: collapse; width: 52.0903%; height: 114px;\" border=\"1\"><colgroup><col style=\"width: 33.3333%;\"><col style=\"width: 33.3333%;\"><col style=\"width: 33.1738%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">dfasdf</td>\r\n<td style=\"height: 22.4px;\">sadf</td>\r\n<td style=\"height: 22.4px;\">safasfsfd</td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">fsa</td>\r\n<td style=\"height: 22.4px;\">safsa</td>\r\n<td style=\"height: 22.4px;\">fsf</td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">fsafsas</td>\r\n<td style=\"height: 22.4px;\">saf</td>\r\n<td style=\"height: 22.4px;\">sdfsa</td>\r\n</tr>\r\n<tr style=\"height: 24.4px;\">\r\n<td style=\"height: 24.4px;\">fsfa</td>\r\n<td style=\"height: 24.4px;\">fsafsa</td>\r\n<td style=\"height: 24.4px;\">fs</td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">a</td>\r\n<td style=\"height: 22.4px;\">fasfs</td>\r\n<td style=\"height: 22.4px;\">fafsaf</td>\r\n</tr>\r\n</tbody>\r\n</table>', '1701635404_368641389_1131030404974897_799716733449560930_n.jpg', '2023-12-04 02:30:07'),
(33, 'admin', 'à¦¸à¦®à§à¦ªà¦¦ à¦²à¦¾à¦­à§‡à¦° à¦¦à§‹à§Ÿà¦¾ à¦“ à¦†à¦®à¦²', 'à¦¸à§à¦–-à¦¶à¦¾à¦¨à§à¦¤à¦¿, à¦¸à¦®à§ƒà¦¦à§à¦§à¦¿-à¦¸à¦¾à¦«à¦²à§à¦¯ à¦“ à¦ªà¦¾à¦°à§à¦¥à¦¿à¦¬ à¦¸à§Œà¦¨à§à¦¦à¦°à§à¦¯-à¦¸à¦®à§à¦ªà¦¦ à¦†à¦²à§à¦²à¦¾à¦¹ à¦¤à¦¾à¦†à¦²à¦¾à¦° à¦¬à¦¿à¦¶à§‡à¦· à¦…à¦¨à§à¦•à¦®à§à¦ªà¦¾à¥¤ à¦…à¦¨à§‡à¦• à¦®à¦¾à¦¨à§à¦· à¦†à¦›à§‡, à¦¯à¦¾à¦¦à§‡à¦° à¦œà§€à¦¬à¦¨à§‡ à¦…à¦°à§à¦¥-à¦¬à¦¿à¦¤à§à¦¤ à¦“ à¦¸à¦®à§à¦ªà¦¦-à¦¬à§ˆà¦­à¦¬ à¦¥à¦¾à¦•à¦²à§‡à¦“ à¦¸à§à¦–-à¦¶à¦¾à¦¨à§à¦¤à¦¿ à¦¨à§‡à¦‡à¥¤ à¦«à¦²à§‡ à¦¸à¦®à§à¦ªà¦¦-à¦¸à¦®à§à¦ªà¦¤à§à¦¤à¦¿ à¦šà¦°à¦® à¦†à¦•à¦¾à¦™à§à¦•à§à¦·à¦¿à¦¤ à¦¨à¦¾ à¦¹à¦²à§‡à¦“ à¦…à¦®à§à¦–à¦¾à¦ªà§‡à¦•à§à¦·à§€ à¦œà§€à¦¬à¦¨à¦¯à¦¾à¦ªà¦¨à§‡à¦° à¦œà¦¨à§à¦¯ à¦•à¦–à¦¨à§‹ à¦•à¦–à¦¨à§‹ à¦¤à¦¾ à¦—à§à¦°à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£à¥¤\r\nà¦¦à§à¦¨à¦¿à§Ÿà¦¾à¦¤à§‡ à¦‰à¦¤à§à¦¤à¦® à¦œà§€à¦¬à¦¨à¦¯à¦¾à¦ªà¦¨ à¦“ à¦†à¦–à¦¿à¦°à¦¾à¦¤à§‡ à¦¸à¦°à§à¦¬à§‹à¦šà§à¦š à¦¸à¦¾à¦«à¦²à§à¦¯ à¦²à¦¾à¦­à§‡à¦° à¦œà¦¨à§à¦¯ à¦†à¦²à§à¦²à¦¾à¦¹à¦° à¦•à¦¾à¦›à§‡ à¦¦à§‹à§Ÿà¦¾ à¦•à¦°à¦¾ à¦šà¦¾à¦‡à¥¤ à¦•à¦¾à¦°à¦£, à¦†à¦²à§à¦²à¦¾à¦¹à¦° à¦•à¦¾à¦›à§‡ à¦•à§à¦·à¦®à¦¾ à¦ªà§à¦°à¦¾à¦°à§à¦¥à¦¨à¦¾à¦•à¦¾à¦°à§€ à¦…à¦¨à§à¦—à¦¤ à¦¬à¦¾à¦¨à§à¦¦à¦¾ à¦“ à¦¤à¦¾à¦° à¦…à¦¨à§à¦—à§à¦°à¦¹ à¦ªà§à¦°à¦¤à§à¦¯à¦¾à¦¶à§€ à¦¹à¦“à§Ÿà¦¾à¦° à¦¬à¦¿à¦•à¦²à§à¦ª à¦¨à§‡à¦‡à¥¤ à¦†à¦²à§à¦²à¦¾à¦¹à¦° à¦•à¦¾à¦›à§‡ à¦•à¦¾à¦®à¦¨à¦¾ à¦•à¦°à¦²à§‡ à¦“ à¦…à¦®à§à¦–à¦¾à¦ªà§‡à¦•à§à¦·à¦¿à¦¤à¦¾ à¦šà¦¾à¦‡à¦²à§‡ à¦•à§‹à¦¨à§‹ à¦¬à§à¦¯à¦•à§à¦¤à¦¿ à¦²à§‹à¦­à§€-à¦¨à¦¾à¦¶à§‹à¦•à¦° à¦¬à¦¾à¦¨à§à¦¦à¦¾à¦¦à§‡à¦° à¦…à¦¨à§à¦¤à¦°à§à¦­à§à¦•à§à¦¤ à¦¹à¦¬à§‡ à¦¨à¦¾à¥¤\r\nà¦†à¦¬à§ à¦¹à§à¦°à¦¾à§Ÿà¦°à¦¾ (à¦°à¦¾.) à¦¥à§‡à¦•à§‡ à¦¬à¦°à§à¦£à¦¿à¦¤, à¦¨à¦¬à§€ (à¦¸à¦¾.) à¦¬à¦²à§‡à¦¨, à¦à¦•à¦¦à¦¾ à¦†à¦‡à§Ÿà§à¦¬ (à¦†.) à¦¨à¦—à§à¦¨ à¦¶à¦°à§€à¦°à§‡ à¦—à§‹à¦¸à¦² à¦•à¦°à¦›à¦¿à¦²à§‡à¦¨à¥¤ à¦à¦®à¦¨ à¦¸à¦®à§Ÿ à¦¤à¦¾à¦° à¦“à¦ªà¦° à¦¸à§à¦¬à¦°à§à¦£à§‡à¦° à¦à¦•à¦à¦¾à¦à¦• à¦ªà¦™à§à¦—à¦ªà¦¾à¦² à¦ªà¦¤à¦¿à¦¤ à¦¹à¦²à§‹à¥¤ à¦¤à¦¿à¦¨à¦¿ à¦¸à§‡à¦—à§à¦²à§‹ à¦¦à§à¦‡ à¦¹à¦¾à¦¤à§‡ à¦§à¦°à§‡ à¦•à¦¾à¦ªà§œà§‡ à¦°à¦¾à¦–à¦¤à§‡ à¦²à¦¾à¦—à¦²à§‡à¦¨à¥¤ ', '1704958910_doya.jpg', '2023-12-30 14:01:07'),
(34, 'admin', 'à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦®à¦¹à¦¾à¦¨à¦—à¦°à§€à¦¤à§‡ à¦…à¦Ÿà§‹à¦°à¦¿à¦•à§à¦¸à¦¾ à¦“ à¦šà¦¾à¦°à§à¦œà¦¾à¦° à¦°à¦¿à¦•à§à¦¸à¦¾à¦° à¦¬à§ˆà¦§ à¦•à¦¾à¦—à¦œà¦ªà¦¤à§à¦° à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦•à¦¾à¦°à§à¦¯à¦•à§à¦°à¦® à¦šà¦²à¦®à¦¾à¦¨', 'à¦Ÿà¦ª à¦¨à¦¿à¦‰à¦œ à¦¡à§‡à¦¸à§à¦• : à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦®à¦¹à¦¾à¦¨à¦—à¦°à§€à¦° à¦¯à¦¾à¦¨ à¦šà¦²à¦¾à¦šà¦² à¦“ à¦ªà¦¥à¦šà¦¾à¦°à§€à¦¦à§‡à¦° à¦¨à¦¿à¦°à§à¦¬à¦¿à¦˜à§à¦¨à§‡ à¦¯à¦¾à¦¤à¦¾à¦¯à¦¼à¦¾à¦¤à§‡à¦° à¦œà¦¨à§à¦¯ à¦¨à¦—à¦°à§€à¦¤à§‡ à¦šà¦²à¦¾à¦šà¦²à¦°à¦¤ à¦¸à¦•à¦² à¦…à¦Ÿà§‹à¦°à¦¿à¦•à§à¦¸à¦¾ à¦“ à¦šà¦¾à¦°à§à¦œà¦¾à¦° à¦°à¦¿à¦•à§à¦¸à¦¾à¦° à¦¬à§ˆà¦§ à¦•à¦¾à¦—à¦œà¦ªà¦¤à§à¦° à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦•à¦°à¦¾ à¦¹à¦šà§à¦›à§‡à¥¤ à¦¬à§ƒà¦¹à¦¸à§à¦ªà¦¤à¦¿à¦¬à¦¾à¦° à¦¸à¦•à¦¾à¦² à¦¸à¦¾à¦¡à¦¼à§‡ à§¯à¦Ÿà¦¾ à¦¹à¦‡à¦¤à§‡ à¦¨à¦—à¦° à¦­à¦¬à¦¨ à¦à¦° à¦ªà¦¶à§à¦šà¦¿à¦® à¦—à§‡à¦Ÿà§‡ à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦¸à¦¿à¦Ÿà¦¿ à¦•à¦°à§à¦ªà§‹à¦°à§‡à¦¶à¦¨à§‡à¦° à¦‰à¦¦à§à¦¯à§‹à¦—à§‡ à¦—à¦ à¦¿à¦¤ à¦Ÿà¦¿à¦® à¦…à¦Ÿà§‹ à¦°à¦¿à¦•à§à¦¸à¦¾ à¦“ à¦šà¦¾à¦°à§à¦œà¦¾à¦° à¦°à¦¿à¦•à§à¦¸à¦¾à¦° à¦¨à¦¬à¦¾à¦¯à¦¼à¦¨à§‡à¦° à¦²à¦•à§à¦·à§à¦¯à§‡ à¦à¦‡ à¦…à¦­à¦¿à¦¯à¦¾à¦¨ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¨à¦¾ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦†à¦—à¦¾à¦®à§€à¦¤à§‡ à¦ à¦…à¦­à¦¿à¦¯à¦¾à¦¨ à¦…à¦¬à§à¦¯à¦¾à¦¹à¦¤ à¦¥à¦¾à¦•à¦¬à§‡à¥¤ à¦¯à¦¾à¦°à¦¾ à¦¨à¦¬à¦¾à¦¯à¦¼à¦¨ à¦•à¦°à§‡à¦¨ à¦¨à¦¾à¦‡, à¦¤à¦¾à¦¦à§‡à¦°à¦•à§‡ à¦¦à§à¦°à§à¦¤ à¦¨à¦¬à¦¾à¦¯à¦¼à¦¨ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¬à¦²à¦¾ à¦¹à¦²à§‹à¥¤ à¦…à¦¨à§à¦¯à¦¥à¦¾à¦¯à¦¼ à¦†à¦‡à¦¨à¦—à¦¤ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦¨à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡à¥¤ à¦°à¦¾à¦œà¦¶à¦¾à¦¹à§€ à¦¸à¦¿à¦Ÿà¦¿ à¦•à¦°à§à¦ªà§‹à¦°à§‡à¦¶à¦¨à§‡à¦° à¦°à¦¾à¦œà¦¸à§à¦¬ à¦¬à¦¿à¦­à¦¾à¦— à¦¥à§‡à¦•à§‡ à¦ªà§à¦°à§‡à¦°à¦¿à¦¤ à¦à¦• à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿à¦¤à§‡ à¦à¦‡ à¦¤à¦¥à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¹à¦¯à¦¼à§‡à¦›à§‡à¥¤', '1705650730_564654.png', '2024-01-19 13:52:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classroutine`
--
ALTER TABLE `classroutine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dpt_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentbatch`
--
ALTER TABLE `studentbatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectsdetails`
--
ALTER TABLE `subjectsdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `classroutine`
--
ALTER TABLE `classroutine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dpt_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `studentbatch`
--
ALTER TABLE `studentbatch`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subjectsdetails`
--
ALTER TABLE `subjectsdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
