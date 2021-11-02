-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2021 at 05:48 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14612239_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `admin` text COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `roll` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `admin`, `name`, `dept`, `year`, `roll`, `pass`) VALUES
(1, '0', 'Aranyak', 'ECE', 3, 'BTECH/ECE/18/001', 'Aranyak@01'),
(2, '0', 'Abhijit', 'ECE', 3, 'BTECH/ECE/18/002', 'Abhijit@02'),
(3, '0', 'Moumita', 'ECE', 3, 'BTECH/ECE/18/003', 'Moumita@03'),
(4, '0', 'Sahil', 'ECE', 3, 'BTECH/ECE/18/004', 'Sahil@04'),
(5, '0', 'Suhrid', 'ECE', 3, 'BTECH/ECE/18/005', 'Suhrid@05'),
(6, '0', 'Aditya', 'ECE', 3, 'BTECH/ECE/18/006', 'Aditya@06'),
(7, '0', 'Tadrishi', 'ECE', 3, 'BTECH/ECE/18/007', 'Tadrishi@07'),
(8, '0', 'Ranit', 'ECE', 3, 'BTECH/ECE/18/008', 'Ranit@08'),
(9, '0', 'Shivam', 'ECE', 3, 'BTECH/ECE/18/009', 'Shivam@09'),
(10, '0', 'Indranil', 'ECE', 3, 'BTECH/ECE/18/010', 'Indranil@10'),
(11, '0', 'Kaustav', 'ECE', 3, 'BTECH/ECE/18/011', 'Kaustav@11'),
(12, '0', 'Amlan', 'ECE', 3, 'BTECH/ECE/18/012', 'Amlan@12'),
(13, '0', 'Manas', 'ECE', 3, 'BTECH/ECE/18/013', 'Manas@13'),
(14, '0', 'Anish', 'ECE', 3, 'BTECH/ECE/18/014', 'Anish@14'),
(15, '0', 'Divyanshu', 'ECE', 3, 'BTECH/ECE/18/015', 'Divyanshu@15'),
(16, '0', 'Suchita', 'ECE', 3, 'BTECH/ECE/18/016', 'Suchita@16'),
(17, '0', 'Binay', 'ECE', 3, 'BTECH/ECE/18/017', 'Binay@17'),
(18, '1', 'Indra', 'ECE', 3, 'BTECH/ECE/18/018', 'Ami Gay'),
(19, '1', 'Anirban', 'ECE', 3, 'BTECH/ECE/18/019', 'Bantu'),
(20, '0', 'Diptarshi', 'ECE', 3, 'BTECH/ECE/18/020', 'Diptarshi@20'),
(21, '0', 'Soumyajit', 'ECE', 3, 'BTECH/ECE/18/021', 'Soumyajit@21'),
(22, '0', 'Udayan', 'ECE', 3, 'BTECH/ECE/18/022', 'Udayan@22'),
(23, '0', 'Yashodhara', 'ECE', 3, 'BTECH/ECE/18/023', 'Yashodhara@23'),
(24, '0', 'Anuska', 'ECE', 3, 'BTECH/ECE/18/024', 'Anuska@24'),
(25, '0', 'Debasmita', 'ECE', 3, 'BTECH/ECE/18/025', 'Debasmita@25'),
(26, '0', 'Arisha', 'ECE', 3, 'BTECH/ECE/18/026', 'Arisha@26'),
(27, '0', 'Sourav', 'ECE', 3, 'BTECH/ECE/18/027', 'Sourav@27'),
(28, '0', 'Abanti', 'ECE', 3, 'BTECH/ECE/18/028', 'Abanti@28'),
(29, '0', 'Anurag', 'ECE', 3, 'BTECH/ECE/18/029', 'Anurag@29'),
(30, '0', 'Aditya', 'ECE', 3, 'BTECH/ECE/18/030', 'Aditya@30'),
(31, '0', 'Anushka', 'ECE', 3, 'BTECH/ECE/18/031', 'Anushka@31'),
(32, '0', 'Amit', 'ECE', 3, 'BTECH/ECE/18/032', 'Amit@32'),
(33, '1', 'Subham', 'ECE', 3, 'BTECH/ECE/18/033', 'keshto'),
(34, '0', 'Saurav', 'ECE', 3, 'BTECH/ECE/18/034', 'Saurav@34'),
(35, '0', 'Arghya', 'ECE', 3, 'BTECH/ECE/18/035', 'Arghya@35'),
(36, '0', 'Ayananta', 'ECE', 3, 'BTECH/ECE/18/036', 'Ayananta@36'),
(37, '0', 'Nafis', 'ECE', 3, 'BTECH/ECE/18/037', 'Nafis@37'),
(38, '0', 'Anuska', 'ECE', 3, 'BTECH/ECE/18/038', 'Anuska@38'),
(39, '0', 'Sharmili', 'ECE', 3, 'BTECH/ECE/18/039', 'Sharmili@39'),
(40, '0', 'Shreyoshi', 'ECE', 3, 'BTECH/ECE/18/040', 'Shreyoshi@40'),
(41, '0', 'Ankit', 'ECE', 3, 'BTECH/ECE/18/041', 'Ankit@41'),
(42, '0', 'Shivam', 'ECE', 3, 'BTECH/ECE/18/042', 'Shivam@42'),
(43, '0', 'Aastha', 'ECE', 3, 'BTECH/ECE/18/043', 'Aastha@43'),
(44, '0', 'Vinay', 'ECE', 3, 'BTECH/ECE/18/044', 'Vinay@44'),
(45, '0', 'Suraj', 'ECE', 3, 'BTECH/ECE/18/045', 'Suraj@45'),
(46, '0', 'Subhadip', 'ECE', 3, 'BTECH/ECE/18/046', 'Subhadip@46'),
(47, '0', 'Rajdeep', 'ECE', 3, 'BTECH/ECE/18/047', 'Rajdeep@47'),
(48, '0', 'Itika', 'ECE', 3, 'BTECH/ECE/18/048', 'Itika@48'),
(49, '0', 'Pratibha', 'ECE', 3, 'BTECH/ECE/18/049', 'Pratibha@49'),
(50, '0', 'Abhiskek', 'ECE', 3, 'BTECH/ECE/18/050', 'Abhishek@50'),
(51, '0', 'Pushkar', 'ECE', 3, 'BTECH/ECE/18/051', 'Pushkar@51'),
(52, '1', 'Snehashish', 'ECE', 3, 'BTECH/ECE/18/052', '1609'),
(53, '0', 'Sayantan', 'ECE', 3, 'BTECH/ECE/18/053', 'Sayantan@53'),
(54, '0', 'Anushree', 'ECE', 3, 'BTECH/ECE/18/054', 'Anushree@54'),
(55, '0', 'Prosenjit', 'ECE', 3, 'BTECH/ECE/18/055', 'Prosenjit@55'),
(56, '0', 'Shivang', 'ECE', 3, 'BTECH/ECE/18/056', 'Shivang@56'),
(57, '0', 'Abhishek', 'ECE', 3, 'BTECH/ECE/18/057', 'Abhishek@57'),
(58, '0', 'Pousali', 'ECE', 3, 'BTECH/ECE/18/058', 'Pousali@58'),
(59, '0', 'Vinay', 'ECE', 3, 'BTECH/ECE/18/059', 'Vinay@59'),
(60, '0', 'Vishal', 'ECE', 3, 'BTECH/ECE/18/060', 'Vishal@60'),
(61, '0', 'Mona', 'ECE', 3, 'BTECH/ECE/18/061', 'Mona@61'),
(62, '0', 'Kushal', 'ECE', 3, 'BTECH/ECE/18/062', 'Kushal@62'),
(63, '0', 'Aastha', 'ECE', 3, 'BTECH/ECE/18/063', 'Aastha@63'),
(64, '0', 'Swarup', 'ECE', 3, 'BTECH/ECE/19/064', 'Swarup@64'),
(65, '0', 'Pamela', 'ECE', 3, 'BTECH/ECE/19/065', 'Pamela@65'),
(66, '0', 'Biplab', 'ECE', 3, 'BTECH/ECE/19/066', 'Biplab@66'),
(67, '0', 'Saheli', 'ECE', 3, 'BTECH/ECE/19/067', 'Saheli@67'),
(68, '0', 'Ushashi', 'ECE', 3, 'BTECH/ECE/19/068', 'Ushashi@68'),
(69, '0', 'Lisa', 'ECE', 3, 'BTECH/ECE/19/069', 'Lisa@69');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid_id` bigint(20) UNSIGNED NOT NULL,
  `sub` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `dated` date NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid_id`, `sub`, `dated`, `link`, `description`) VALUES
(1, 'ec502', '2020-08-18', 'mhb8vtqjTdw', 'Difference between Computer Architecture and Computer Organisation'),
(2, 'ec503', '2020-08-19', 'FYItkYX0xDo', 'Introduction to Digital Communication. It\'s components and sub-divisions.'),
(3, 'ec501', '2020-08-19', 'hLmYslBlXpM', 'Transmission Lines and its different types | Different Methods of Analysis: Lumped and Distributed parameter'),
(4, 'ec502', '2020-08-20', 'hEWq6fIQCnM', 'Basics of Computer Organization | IAS Computer'),
(5, 'ec501', '2020-08-21', '9NR0HEZ6Rj8', 'Image Impedance'),
(6, 'oeec506c', '2020-08-21', 'DdXyRE1nqaA', 'What is HRM? And Objectives of HRM.'),
(7, 'ec504', '2020-08-21', 'H1VSteomfjY', 'Introduction to DSP | Recap of Digital Communication System'),
(8, 'ec503', '2020-08-21', 'PGjY_Z8CT8Q', 'Difference between Analog and Digital Communication | Elements of Digital Communication System'),
(9, 'oeec506c', '2020-08-20', 'A3KEsJMhoAI', 'Importance & Roles of HR Department | HRM'),
(10, 'ec501', '2020-08-24', 'p7gNfI-LUV0', 'Symmetrical Network | Characteristic Impedance for T type and Pi type networks'),
(11, 'ec502', '2020-08-24', 'DYPhu94JEoo', 'Characteristics of IAS and its embedded components'),
(12, 'ec504', '2020-08-24', '8f37-T3lTL4', 'S-Plane to Z-Plane Conversion'),
(13, 'ec503', '2020-08-25', '7SiW1nOqD7w', 'Sampling and Pulse Amplitude Modulation (1) | Different types of Sampling'),
(14, 'ec502', '2020-08-25', 'x6TOCeZJL1o', 'Harvard Architecture & Von Neumann Architecture'),
(15, 'ec502', '2020-08-27', 'f59B5EEmVfs', 'Bus Architecture'),
(16, 'oeec506c', '2020-08-27', 'FpFCwyoHSao', 'Principles of HRM'),
(17, 'peec505d', '2020-08-27', 'x-iR4o8yxRo', 'Truncation and Rounding-off'),
(18, 'peec505d', '2020-08-27', '6JRLLyLik38', 'Forward and Backward Error'),
(19, 'ec501', '2020-08-26', 'sS82_7CW1HA', 'RF Transmission Lines - Current & Voltage Ratios as Exponentials, The Propagation Constant.'),
(20, 'ec503', '2020-08-26', 'CKqUY-OOZT0', 'Pulse Amplitude Modulation(PAM) - Digital Communication'),
(21, 'ec501', '2020-08-28', 'iNqBlwMriwE', 'Relation between Characteristic Impedance & Primary constants of line | EM Waves - Symmetrical Networks'),
(22, 'ec504', '2020-08-28', 'Snr_ztAQN6c', 'Addition, Folding and other properties of a Signal'),
(23, 'ec502', '2020-08-31', 'oT2KnqTifQg', 'Bus Transfer'),
(24, 'ec501', '2020-08-31', '788Gx6x8IRg', 'Numerical on Previous topics '),
(25, 'oeec506c', '2020-09-01', 'K4waUe17jJc', 'Points a HR needs to keep'),
(26, 'ec502', '2020-09-01', 'aDaYqjRbDhc', 'Binary Multiplication'),
(27, 'ec503', '2020-09-01', 'k1o6G-g1HBg', 'Elements of PCM System | PCM Generator'),
(28, 'oeec506c', '2020-09-03', '5krkWc48Zc8', 'HR Planning'),
(29, 'peec505d', '2020-09-02', 'yHGir93eBTE', 'Floating point and Normalizing a Number '),
(30, 'peec505d', '2020-09-03', 'tmmds3CJ6h4', 'Chopping, Rounding and Machine number'),
(31, 'peec505d', '2020-09-04', 'QC99Lx4huIw', 'Least Square Curve Fitting'),
(32, 'ec501', '2020-09-02', 'QZNXL_VL_44', 'Transmission Line Equations | EM Waves 2.9.2020'),
(33, 'ec503', '2020-09-02', 'p8XOWvgCoqo', 'Quantization Noise/Error in PCM | Dig Comm. 2.9.2020 : Signal to Quantization Noise Ration for Linear Quantization,  Digital Representation of Signals(Adv. & Disadv.)'),
(34, 'ec504', '2020-09-04', 'ugprQxGijOY', 'Causality and different properties of a signal'),
(35, 'ec503', '2020-09-08', '9zXu3iV9DSg', 'Uniform and Non-Uniform Quantization'),
(36, 'oeec506c', '2020-09-08', 'CIXms2l_iio', 'Factors affecting HRP'),
(37, 'ec501', '2020-09-08', 'b3YeBqj80XE', 'Physical significance of Tx Line Equation'),
(38, 'ec502', '2020-09-08', 'b5jW1_7pkLw', 'Array Multiplication & Restoring Division Algorithm'),
(39, 'ec504', '2020-09-08', 'ziwGo-LiGwU', 'FIR Filter'),
(40, 'peec505d', '2020-09-10', 'zioQG0qOQtg', 'Simpson\'s 1/3rd Rule'),
(41, 'peec505d', '2020-09-11', 'Nqdl-XFRouI', 'Forward and Backward Interpolation (1) *disconnected'),
(42, 'peec505d', '2020-09-11', 'Fm7zvvuXhZs', 'Forward and Backward Interpolation (2)'),
(43, 'ec502', '2020-09-11', 'B_wRrcuV5vo', 'Microoperations (1) *disconnected'),
(44, 'ec502', '2020-09-10', 'E_Y4ppfFF8I', 'Microoperations (2)'),
(45, 'oeec506c', '2020-09-10', '35R0FsFieqI', 'Entire Process of HRP'),
(46, 'ec501', '2020-09-11', 'QxSpdigIeRg', 'Reflection Coefficient and Transmission Coefficient'),
(47, 'ec502', '2020-09-14', 'fQkWaoL6_oY', 'Logical Microoperations (Bitwise Operations)'),
(48, 'ec501', '2020-09-14', 'QkzoeiRp-jU', 'Types of Distortion (Frequency and Phase)'),
(49, 'oeec506c', '2020-09-15', 'J8ALVygDMak', 'Role of HR Manager'),
(50, 'ec503', '2020-09-15', 'BvdC2-eYz90', 'Discussion of Question Bank QnA'),
(51, 'ec503', '2020-09-16', 'VoWt7Q5FAv0', 'Deltamodulation Working Principle'),
(52, 'ec501', '2020-09-16', 'EbCQy8K0Qgc', 'How to have a Distortion Free Line'),
(53, 'peec505d', '2020-09-16', 'B23-wlYQcwg', 'Lagranges Theorem'),
(54, 'ec502', '2020-09-16', 'QwtDNjg_gZ4', 'Logical Shift (microoperations)'),
(55, 'ec504', '2020-09-18', 'y1xJJHhAUKY', 'Z-transforms and Techniques'),
(56, 'peec505d', '2020-09-18', 'dzyA5YOU1kY', 'Numerical on Taylor Series'),
(57, 'ec501', '2020-09-18', '4HGaz-mK2gM', 'Numerical on Distortion Free Lines'),
(58, 'ec502', '2020-09-21', 'RQVkdjYMHsM', 'Function Table for ALU & Register Transfer'),
(59, 'ec501', '2020-09-21', '1SHVMXWHioU', 'Standing Waves'),
(60, 'ec504', '2020-09-19', 'AWR8OKzf09c', 'Basic Discussion of Syllabus (RS Sir)'),
(61, 'ec504', '2020-09-21', 'g6ULSeiLUFk', '1st order Butterworth filter (RS Sir)'),
(62, 'oeec506c', '2020-09-22', 'MLNZX82Dabk', 'Ways of Recruitment'),
(63, 'ec502', '2020-09-22', 'UPNON4XLmGA', 'Instruction Format'),
(64, 'ec501', '2020-09-23', 'q7jNFsWn-WE', 'Tx Line Equation in Trigonometric Form'),
(65, 'ec502', '2020-09-24', 'fveSst_RMS0', 'Computer Registers & Common Bus System'),
(66, 'ec503', '2020-09-23', 'njJUiGi1fXE', 'Difference between delta Modulation, adaptive delta modulation and differential PCM'),
(67, 'oeec506c', '2020-09-24', '2nNpslHKfj0', 'Recruitment Strategies & Factors affecting recruitment'),
(68, 'ec502', '2020-09-25', 'fP7Eoh8n3A0', 'Control Timing System'),
(69, 'ec504', '2020-09-25', 'MbOmbibiby8', 'Laplas and Z-transform'),
(70, 'ec501', '2020-09-25', 'qxLpPF0qdj8', 'Tx Line Equation in Trigonometric Form (2)'),
(71, 'ec501', '2020-09-28', '1Na_GQK7ie8', 'Familiarization with Lab Components'),
(72, 'ec501', '2020-09-28', 'ckr97D9qarQ', 'Standing Wave Pattern | SWR | Reflection Coeff'),
(73, 'ec504', '2020-10-01', '39_fMlL88vE', 'Programs using MATLAB'),
(74, 'ec502', '2020-10-01', 'NBH_M4zWXJ8', 'Doubt Clearance and Discussion'),
(75, 'ec503', '2020-10-01', 'CEaejvYBURM', 'Numericals for Dig. Com. | 1.10.20'),
(76, 'oeec506c', '2020-10-02', 'nLc1W_MI-GE', 'Methods of performance Appraisal'),
(77, 'oeec506c', '2020-10-02', 'Fc7JyzdEJKE', 'Importance and process of training'),
(78, 'oeec506c', '2020-10-02', 'Jf2ElDgnKa8', 'Continuation of Part 1 -  Trainings'),
(79, 'ec502', '2020-10-12', '7kRqiWsoEqU', 'Instruction cycle, its phases and its flow chart.'),
(80, 'ec502', '2020-10-13', 'AKHra-b0iFU', 'Type of instruction and how to build the opcode for the instruction.'),
(81, 'ec501', '2020-10-12', '2GxT7kl6mis', 'Input impedence and variations of sc and oc lines'),
(82, 'ec504', '2020-10-13', 'grq1mPh1W6w', 'Z transform and techniques'),
(83, 'oeec506c', '2020-10-13', 'j5STl1c3fS0', 'Concept of industrial relations'),
(84, 'ec502', '2020-10-15', 'tU1m2nfNFe4', 'CPU: its introduction and organisation with registers'),
(85, 'oeec506c', '2020-10-15', 'gZ0HXROtbfc', 'Conti. of Industrial relation and its objectives'),
(86, 'ec503', '2020-10-16', 'hPlnL5FF1sI', 'LAB- study of PAM and demodulation'),
(87, 'ec504', '2020-10-16', 'twNNnQ-5fag', 'Circular convolution and section convolution and'),
(88, 'peec505d', '2020-10-16', 'brK4J5mkQw4', 'Optimization'),
(89, 'ec503', '2020-10-17', 'hmV6baSDfQ4', 'Introduction to binary communication(RS sir)'),
(90, 'peec505d', '2020-11-06', '--Hv_Hy0Ybo', 'Gauss Elimination Process'),
(91, 'ec502', '2020-11-09', '_cqH7vjPXKs', 'Instruction Categories and their details'),
(92, 'ec502', '2020-11-09', '5Fv-9XZfbHI', 'Instruction Categories and their details(2) | EC-502'),
(93, 'ec503', '2020-11-06', 'Yv30P47Q3ic', 'Study of Pulse Code Modulation and Demodulation | DC lab'),
(94, 'ec504', '2020-11-03', 'CkMSpTIam2Q', 'Performing Delay operation and Advancement of a signal | DSP Lab'),
(95, 'oeec506c', '2020-11-05', '2bSNF6RUnJk', 'Causes of Industrial Dispute'),
(96, 'oeec506c', '2020-11-03', 'zmkgEbyhjC4', 'Causes of Industrial Dispute (2)'),
(97, 'oeec506c', '2020-11-10', 'GwKK69N1k14', 'Method to settle and prevent Industrial dispute'),
(98, 'oeec506c', '2020-11-12', 'r6LNflMt6D8', 'Method to Settle and prevent Collective bargaining discussed'),
(99, 'oeec506c', '2020-11-03', '7I-JV5WtU94', 'Industrial Dispute'),
(100, 'ec501', '2020-11-09', 'bF7BB1VUm8U', 'Basic laws of Electrostatics'),
(101, 'ec501', '2020-11-11', 'rHLxaJW00yo', 'Electric and Magnetic Fields'),
(102, 'peec505d', '2020-11-05', 'JCqW3zHze-Q', 'Eigen Values and Eigen Vectors'),
(103, 'ec502', '2020-11-12', 'PWcFnXypJW0', 'Control Unit of a basic Computer'),
(104, 'ec503', '2020-11-25', '4LzS0gzHXZs', 'Waveforms '),
(105, 'ec503', '2020-11-27', 'Q_yCDBiS4Eg', 'Delta Modulation (DC lab)'),
(106, 'ec501', '2020-11-13', 'BponKLia3E0', 'Gauss\'s Law '),
(107, 'oeec506c', '2020-11-26', 'utQndUE1U_4', 'Forms of Worker Participation in India'),
(108, 'ec502', '2020-12-14', 'CjNRZbRPC0s', 'Numerical of Cache memory'),
(109, 'ec502', '2020-12-15', 'skdOg5wGKZ8', 'Virtual Memory and Memory Management'),
(110, 'ec504', '2020-12-15', 'FnKgZqpK5qc', 'Assignment 5 | DSP lab'),
(111, 'ec501', '2020-12-14', 'hB2-OgioEIk', 'Smith Chart Black Magic Design ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD UNIQUE KEY `vid_id` (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
