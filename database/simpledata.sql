-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 08:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpledata`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(255) NOT NULL,
  `st_id` int(255) NOT NULL,
  `rollno` int(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `year` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `att` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `st_id`, `rollno`, `studentname`, `date`, `year`, `month`, `att`) VALUES
(128, 107, 0, 'cabdiraxman', '0000-00-00', '1990/1991', 'January', 'absent'),
(129, 108, 0, 'muslimo', '0000-00-00', '1990/1991', 'January', 'present'),
(130, 111, 0, 'salaad', '2017-11-19', '1992/1993', 'March', 'absent'),
(131, 112, 0, 'maxamuud', '2017-11-19', '2016/2017', 'March', 'leave'),
(132, 2, 0, 'farxiyo jamac ', '2017-11-20', '1999/2000', 'May', 'absent'),
(133, 24, 0, 'anizo', '2017-11-20', '1999/2000', 'May', 'present'),
(134, 76, 0, 'maymuun', '2017-11-20', '1999/2000', 'May', 'absent'),
(136, 100, 0, 'Yuusuf', '2017-11-20', '1999/2000', 'May', 'leave'),
(137, 20, 0, 'Yuusuf', '2017-11-21', '2016/2017', 'July', 'absent'),
(139, 114, 0, 'nux cali', '2017-11-21', '2016/2017', 'July', 'leave');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'physics'),
(2, 'math'),
(3, 'arabic'),
(4, 'english'),
(5, 'sciecnce'),
(6, 'geo'),
(7, 'somali');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `days_id` int(11) NOT NULL,
  `days_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`days_id`, `days_name`) VALUES
(1, 'sabti'),
(2, 'axad'),
(3, 'isiniin'),
(4, 'talaado'),
(5, 'arbaco'),
(6, 'khamiis');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(255) NOT NULL,
  `st_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(11) NOT NULL,
  `term` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `islamic` int(11) NOT NULL,
  `arabic` int(11) NOT NULL,
  `somali` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `geography` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `discipline` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `average` int(11) NOT NULL,
  `term3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `st_id`, `name`, `branch`, `level`, `class`, `section`, `term`, `year`, `islamic`, `arabic`, `somali`, `english`, `math`, `science`, `social`, `geography`, `history`, `physics`, `biology`, `chemistry`, `discipline`, `total`, `average`, `term3`) VALUES
(54, 2, 'farxiyo jamac ', '', '', '', '', 'Term one', '1990/1991', 90, 9, 67, 78, 90, 9, 88, 78, 90, 99, 76, 78, 50, 902, 69, 0),
(56, 76, 'maymuun', '', '', '', '', 'Term one', '1990/1991', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 1170, 90, 0),
(57, 77, 'ayaan', '', '', '', '', 'Term one', '1990/1991', 56, 43, 65, 7, 45, 56, 87, 54, 0, 0, 9, 90, 8, 520, 40, 0),
(58, 100, 'Yuusuf', '', '', '', '', 'Term one', '1990/1991', 56, 56, 56, 56, 5, 65, 65, 65, 65, 65, 65, 65, 67, 751, 58, 0),
(59, 106, 'cawaale', '', '', '', '', 'Term two', '1990/1991', 78, 87, 87, 78, 78, 78, 78, 78, 7, 87, 7, 56, 45, 844, 65, 0),
(60, 115, 'abdirahmaan', '', '', '', '', 'Term two', '1990/1991', 45, 4, 54, 54, 54, 54, 54, 54, 53, 42, 32, 3, 4, 507, 39, 0),
(61, 107, 'cabdiraxman', '', '', '', '', 'Term one', '2017/2018', 67, 5, 34, 34, 67, 89, 87, 60, 34, 46, 8, 8, 88, 627, 48, 0),
(63, 116, 'yuusuf ahmed said', '', '', '', '', 'Term one', '2017/2018', 56, 9, 86, 53, 2, 45, 8, 80, 75, 43, 45, 88, 8, 598, 46, 0),
(65, 2, 'farxiyo jamac ', '', '', '', '', 'Term one', '1990/1991', 87, 87, 78, 78, 87, 8, 78, 78, 87, 78, 78, 99, 90, 1013, 78, 0),
(72, 12, 'aamino ahmed aadan', '', '', '', '', 'Term two', '1990/1991', 87, 78, 78, 78, 87, 78, 78, 7, 87, 100, 78, 87, 8, 931, 72, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `fee_id` int(255) NOT NULL,
  `st_id` int(255) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `recept_no` int(20) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(30) NOT NULL,
  `money_type` varchar(200) NOT NULL,
  `letters` varchar(100) NOT NULL,
  `remaining` int(10) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fee_id`, `st_id`, `studentname`, `recept_no`, `date`, `month`, `money_type`, `letters`, `remaining`, `amount`) VALUES
(7, 9, 'fadumo ahmed', 87565, '2017-11-21', 'March', 'cash', 'sodon doller', 1, 29),
(10, 106, 'cawaale', 0, '2017-11-08', 'March', 'doller', 'labaatan', 0, 20),
(12, 8, 'xalimo saciid aadan', 2, '2017-11-14', 'January', 'cash', 'zero', 0, 90),
(13, 11, 'mohamed said abdi', 8989, '2017-11-07', 'February', 'cash', 'labtan', 0, 20),
(14, 12, 'aamino ahmed aadan', 7654, '2017-11-07', 'February', 'doller', 'sodon', 1, 29);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `type` enum('Member','Adminstrator') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Adminstrator'),
(2, 'user', '202cb962ac59075b964b07152d234b70', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `name`) VALUES
(1, 'Aruba'),
(2, 'Afghanistan'),
(3, 'Angola'),
(4, 'Anguilla'),
(5, 'Albania'),
(6, 'Andorra'),
(7, 'Netherlands Antilles'),
(8, 'United Arab Emirates'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'American Samoa'),
(12, 'Antarctica'),
(13, 'French Southern territories'),
(14, 'Antigua and Barbuda'),
(15, 'Australia'),
(16, 'Austria'),
(17, 'Azerbaijan'),
(18, 'Burundi'),
(19, 'Belgium'),
(20, 'Benin'),
(21, 'Burkina Faso'),
(22, 'Bangladesh'),
(23, 'Bulgaria'),
(24, 'Bahrain'),
(25, 'Bahamas'),
(26, 'Bosnia and Herzegovina'),
(27, 'Belarus'),
(28, 'Belize'),
(29, 'Bermuda'),
(30, 'Bolivia'),
(31, 'Brazil'),
(32, 'Barbados'),
(33, 'Brunei'),
(34, 'Bhutan'),
(35, 'Bouvet Island'),
(36, 'Botswana'),
(37, 'Central African Republic'),
(38, 'Canada'),
(39, 'Cocos (Keeling) Islands'),
(40, 'Switzerland'),
(41, 'Chile'),
(42, 'China'),
(43, 'CÃ´te dâ€™Ivoire'),
(44, 'Cameroon'),
(45, 'Congo, The Democratic Republic'),
(46, 'Congo'),
(47, 'Cook Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Cape Verde'),
(51, 'Costa Rica'),
(52, 'Cuba'),
(53, 'Christmas Island'),
(54, 'Cayman Islands'),
(55, 'Cyprus'),
(56, 'Czech Republic'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Dominica'),
(60, 'Denmark'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Egypt'),
(65, 'Eritrea'),
(66, 'Western Sahara'),
(67, 'Spain'),
(68, 'Estonia'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji Islands'),
(72, 'Falkland Islands'),
(73, 'France'),
(74, 'Faroe Islands'),
(75, 'Micronesia, Federated States o'),
(76, 'Gabon'),
(77, 'United Kingdom'),
(78, 'Georgia'),
(79, 'Ghana'),
(80, 'Gibraltar'),
(81, 'Guinea'),
(82, 'Guadeloupe'),
(83, 'Gambia'),
(84, 'Guinea-Bissau'),
(85, 'Equatorial Guinea'),
(86, 'Greece'),
(87, 'Grenada'),
(88, 'Greenland'),
(89, 'Guatemala'),
(90, 'French Guiana'),
(91, 'Guam'),
(92, 'Guyana'),
(93, 'Hong Kong'),
(94, 'Heard Island and McDonald Isla'),
(95, 'Honduras'),
(96, 'Croatia'),
(97, 'Haiti'),
(98, 'Hungary'),
(99, 'Indonesia'),
(100, 'India'),
(101, 'British Indian Ocean Territory'),
(102, 'Ireland'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Iceland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Jordan'),
(110, 'Japan'),
(111, 'Kazakstan'),
(112, 'Kenya'),
(113, 'Kyrgyzstan'),
(114, 'Cambodia'),
(115, 'Kiribati'),
(116, 'Saint Kitts and Nevis'),
(117, 'South Korea'),
(118, 'Kuwait'),
(119, 'Laos'),
(120, 'Lebanon'),
(121, 'Liberia'),
(122, 'Libyan Arab Jamahiriya'),
(123, 'Saint Lucia'),
(124, 'Liechtenstein'),
(125, 'Sri Lanka'),
(126, 'Lesotho'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Latvia'),
(130, 'Macao'),
(131, 'Morocco'),
(132, 'Monaco'),
(133, 'Moldova'),
(134, 'Madagascar'),
(135, 'Maldives'),
(136, 'Mexico'),
(137, 'Marshall Islands'),
(138, 'Macedonia'),
(139, 'Mali'),
(140, 'Malta'),
(141, 'Myanmar'),
(142, 'Mongolia'),
(143, 'Northern Mariana Islands'),
(144, 'Mozambique'),
(145, 'Mauritania'),
(146, 'Montserrat'),
(147, 'Martinique'),
(148, 'Mauritius'),
(149, 'Malawi'),
(150, 'Malaysia'),
(151, 'Mayotte'),
(152, 'Namibia'),
(153, 'New Caledonia'),
(154, 'Niger'),
(155, 'Norfolk Island'),
(156, 'Nigeria'),
(157, 'Nicaragua'),
(158, 'Niue'),
(159, 'Netherlands'),
(160, 'Norway'),
(161, 'Nepal'),
(162, 'Nauru'),
(163, 'New Zealand'),
(164, 'Oman'),
(165, 'Pakistan'),
(166, 'Panama'),
(167, 'Pitcairn'),
(168, 'Peru'),
(169, 'Philippines'),
(170, 'Palau'),
(171, 'Papua New Guinea'),
(172, 'Poland'),
(173, 'Puerto Rico'),
(174, 'North Korea'),
(175, 'Portugal'),
(176, 'Paraguay'),
(177, 'Palestine'),
(178, 'French Polynesia'),
(179, 'Qatar'),
(180, 'RÃ©union'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saudi Arabia'),
(185, 'Sudan'),
(186, 'Senegal'),
(187, 'Singapore'),
(188, 'South Georgia and the South Sa'),
(189, 'Saint Helena'),
(190, 'Svalbard and Jan Mayen'),
(191, 'Solomon Islands'),
(192, 'Sierra Leone'),
(193, 'El Salvador'),
(194, 'San Marino'),
(195, 'Somalia'),
(196, 'Saint Pierre and Miquelon'),
(197, 'Sao Tome and Principe'),
(198, 'Suriname'),
(199, 'Slovakia'),
(200, 'Slovenia'),
(201, 'Sweden'),
(202, 'Swaziland'),
(203, 'Seychelles'),
(204, 'Syria'),
(205, 'Turks and Caicos Islands'),
(206, 'Chad'),
(207, 'Togo'),
(208, 'Thailand'),
(209, 'Tajikistan'),
(210, 'Tokelau'),
(211, 'Turkmenistan'),
(212, 'East Timor'),
(213, 'Tonga'),
(214, 'Trinidad and Tobago'),
(215, 'Tunisia'),
(216, 'Turkey'),
(217, 'Tuvalu'),
(218, 'Taiwan'),
(219, 'Tanzania'),
(220, 'Uganda'),
(221, 'Ukraine'),
(222, 'United States Minor Outlying I'),
(223, 'Uruguay'),
(224, 'United States'),
(225, 'Uzbekistan'),
(226, 'Holy See (Vatican City State)'),
(227, 'Saint Vincent and the Grenadin'),
(228, 'Venezuela'),
(229, 'Virgin Islands, British'),
(230, 'Virgin Islands, U.S.'),
(231, 'Vietnam'),
(232, 'Vanuatu'),
(233, 'Wallis and Futuna'),
(234, 'Samoa'),
(235, 'Yemen'),
(236, 'Yugoslavia'),
(237, 'South Africa'),
(238, 'Zambia'),
(239, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `1` int(1) NOT NULL,
  `2` int(1) NOT NULL,
  `3` int(1) NOT NULL,
  `4` int(1) NOT NULL,
  `5` int(1) NOT NULL,
  `6` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pob`
--

CREATE TABLE `pob` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pob`
--

INSERT INTO `pob` (`id`, `name`) VALUES
(1, 'Hargeysa'),
(2, 'Berbera'),
(3, 'Gebilay'),
(4, 'Boorame'),
(5, 'Saylac'),
(6, 'Baki'),
(7, 'Lug-haye'),
(8, 'Seylac'),
(9, 'Burco'),
(10, 'Buuhoodle'),
(11, 'Ood-weyne'),
(12, 'Sheikh'),
(13, 'Laas-caanood'),
(14, 'Taleex'),
(15, 'Ceynabo'),
(16, 'Xuddun'),
(17, 'Ceerigaabo'),
(18, 'Xuddun'),
(19, 'Laas-qoray'),
(20, 'Ceel-afwen'),
(21, 'Baran'),
(22, 'Boosaaso'),
(23, 'Bandar-beyla'),
(24, 'Qardho'),
(25, 'Isku-shuban'),
(26, 'Qandala'),
(27, 'Caluula'),
(28, 'Baar-gaal'),
(29, 'Xaafuun'),
(30, 'Garowe'),
(31, 'Eyl'),
(32, 'Dan-gorayo'),
(33, 'Bur-tinle'),
(34, 'Gaal-kacyo'),
(35, 'Hobyo'),
(36, 'Xarar-dheere'),
(37, 'Jarriiban'),
(38, 'Goldogob'),
(39, 'Dhuusa-mareeb'),
(40, 'Ceel-buur'),
(41, 'Ceel-dheer'),
(42, 'Cadaado'),
(43, 'Cabuud-waaq'),
(44, 'Gal-hareeri'),
(45, 'Balan-bal'),
(46, 'Beled-weyne'),
(47, 'Buulo-burte'),
(48, 'Jalalaqsi'),
(49, 'Matabaan'),
(50, 'Maxaas'),
(51, 'Jowhar'),
(52, 'Bal-cad'),
(53, 'Cadale'),
(54, 'Aadan yabaal'),
(55, 'Mahaddaay'),
(56, 'Ruun-nirgood'),
(57, 'War-sheikh'),
(58, 'Marka'),
(59, 'Af-gooye'),
(60, 'Wanle-weyn'),
(61, 'Qoryo-leey'),
(62, 'Baraawe'),
(63, 'Sablaale'),
(64, 'Kurtun-waareey'),
(65, 'Dajuuma'),
(66, 'Aw-dheegle'),
(67, 'Bu-aale'),
(68, 'Jilib'),
(69, 'Saakoow'),
(70, 'Kismaayo'),
(71, 'Jamaame'),
(72, 'Af-madow'),
(73, 'Badhaadhe'),
(74, 'Xagar'),
(75, 'Baydhabo'),
(76, 'Buur-hakaba'),
(77, 'Baydhabo'),
(78, 'Diin-soor'),
(79, 'Qansax-dheere'),
(80, 'Berdaale'),
(81, 'Xuddur'),
(82, 'Tayeegloow'),
(83, 'Waa-jid'),
(84, 'Ceel-berde'),
(85, 'Yeed'),
(86, 'Rab-dhuurre'),
(87, 'Garba-haarreey'),
(88, 'Luuq'),
(89, 'Baar-dheere'),
(90, 'Beled-xaawo'),
(91, 'Dooloow'),
(92, 'Ceel-waaq'),
(93, 'Xamar-weyne'),
(94, 'Xamar-jajab'),
(95, 'Boon-dheere'),
(96, 'Waaberi'),
(97, 'Wada-jir'),
(98, 'Dharkeyn-leey'),
(99, 'Hodon'),
(100, 'Howl-wadaag'),
(101, 'War-dhiigleey'),
(102, 'Shibis'),
(103, 'C/casiis'),
(104, 'Kaaraan'),
(105, 'Huriwaa'),
(106, 'Dayniile'),
(107, 'Yaaq-shiid'),
(108, 'Shingaani');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mothername` varchar(200) NOT NULL,
  `guardianname` varchar(200) NOT NULL,
  `guardianrelation` varchar(100) NOT NULL,
  `guardiantell` int(50) NOT NULL,
  `guardianoccupation` varchar(1000) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `registrationdate` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `studentname`, `gender`, `mothername`, `guardianname`, `guardianrelation`, `guardiantell`, `guardianoccupation`, `pob`, `address`, `dob`, `phone`, `level`, `classname`, `section`, `branch`, `nationality`, `registrationdate`, `image`) VALUES
(2, 'farxiyo jamac ', 'female', 'maryan mohamed ahmed', 'maryan mohamed', 'Mother', 976554456, 'work', 'Berbera', 'laantahawada', '2009-12-19', 908765433, 'Necessary', 'Kindergartner', 'A', 'Nawawi', 'Somalia', '2017-09-25', 'pictures/t-simple-fade-slideshow.jpg '),
(8, 'xalimo saciid aadan', 'Female', 'farhia mohamed', 'siciid adan', 'Father', 907680294, 'work', 'Xuddun', 'new bosaso', '2003-12-25', 0, 'Primary', 'Grade Two', 'A', 'Nawawi', 'Somalia', '2017-09-25', 'pictures/15.jpg '),
(9, 'fadumo ahmed', 'Female', 'khadiijo adan', 'aadan cali', 'Father', 907680294, 'undp president', 'Laas-qoray', 'raxiis', '2005-12-21', 0, 'Primary', 'Grade Two', 'A', 'Ridwaan', 'SELECT', '2017-09-25', 'pictures/16.jpg '),
(10, 'amino saciid aadan', 'Female', 'farhia mohamed', 'cali aadan', 'Ancle', 907680294, 'work', 'Hargeysa', 'laantahawada', '2006-12-14', 0, 'Primary', 'Grade Two', 'A', 'Ridwaan', 'Somalia', '2017-09-25', 'pictures/t-banner-slider.jpg '),
(11, 'mohamed said maxamed', 'Male', 'caaliyo axmed', 'ahmed', 'Father', 907680294, 'selt work', 'Dayniile', 'laantahawada', '2002-12-28', 0, 'Primary', 'Grade Three', 'A', 'Ridwaan', 'Somalia', '2017-09-26', 'pictures/5.jpg '),
(12, 'aamino ahmed aadan', 'Female', 'caaliyo axmed', 'xalimo', 'sister', 976554456, 'selt work', 'Huriwaa', 'boqolka buush', '2006-07-19', 0, 'Primary', 'Grade Three', 'A', 'Ridwaan', 'Somalia', '2017-09-26', 'pictures/find-out-more-bt.png '),
(13, 'khadiijo adan siciid', 'Female', 'farhia mohamed', 'siciid', 'grand Father', 907680294, 'selt work', 'Dharkeyn-leey', 'laantahawada', '2006-12-12', 0, 'Primary', 'Grade Four', 'A', 'Ridwaan', 'Somalia', '2017-09-26', 'pictures/9.jpg '),
(14, 'mohamed salax carafaad', 'Male', 'sahro mahamoud jama', 'xalimo', 'sister', 907680294, 'selt work', 'Xamar-weyne', 'laantahawada', '2004-12-30', 0, 'Primary', 'Grade Four', 'A', 'Ridwaan', 'Somalia', '2017-09-26', 'pictures/19.jpg '),
(15, 'cabdiwahaab', 'Male', 'Xaliimo ', 'MOHAMOUD ABDI', 'Father', 907754174, 'MANAGER', 'Ceerigaabo', 'laantahawada', '2017-10-10', 908765644, 'Secondary', 'Form Three', 'I', 'Nawawi', 'Zambia', '2017-10-10', 'green.jpg'),
(16, 'said mohamed farah', 'Male', 'aamino nuux cali', 'aamino mohamed', 'Mother', 907764544, 'selt_work', 'Seylac', 'xeryaha', '1998-07-23', 907766545, 'Secondary', 'Form Two', 'A', 'Nawawi', 'Somalia', '2017-10-10', '{quruxdi adunka}.jpg'),
(17, 'abdullahi', 'Male', 'Xaliimo ', 'faarax', 'Father', 907754174, 'Self_worker', 'Ceerigaabo', 'Ridwaan', '2017-10-10', 908765644, 'Primary', 'Form Two', 'A', 'Raxma', 'Malta', '0000-00-00', 'IMG_0345.PNG'),
(18, 'MOHAMED', 'Male', 'Xaliimo ', 'MOHAMOUD ABDI', 'Father', 907754174, 'work', 'Xuddun', 'Ridwaan', '2017-10-12', 908765644, 'Primary', 'Grade Eight', 'A', 'Nawawi', 'SELECT', '2017-10-10', 'IMG_0344.PNG'),
(19, 'YAXYE', 'Male', 'FARHIO', 'MOHAMOUD ABDI', 'Father', 909876876, 'MANAGER', 'Gebilay States', 'Ridwaan', '2017-10-10', 908765644, 'Secondary', 'Form Three', 'A', 'Nawawi', 'Somalia', '2017-10-10', 'IMG_1220.JPG'),
(20, 'Yuusuf said nuur', 'Male', 'Faadumo', 'faarax', 'Father', 907754174, 'MANAGER', 'Ceerigaabo', 'laantahawada', '2017-10-10', 908765644, 'Primary', 'Form One', 'A', 'Nawawi', 'Somalia', '0000-00-00', 'pictures/16.jpg '),
(21, 'Guuleed', 'Male', 'cambaro', 'Rooble', 'Father', 906252564, 'CEO Apple', 'Ood-weyne', 'Raf iyo Raaxo', '1995-01-01', 907651234, 'Primary', 'Grade Six', 'A', 'Nawawi', 'Somalia', '2017-10-10', 'pictures.IMG_1565.PNG'),
(22, 'faadumo', 'Female', 'Fartuun', 'abdirazak', 'Mother', 9087654, 'MANAGER', 'Xuddun', 'Ridwaan', '2017-10-10', 907541268, 'Secondary', 'Form Four', 'A', 'Nawawi', 'Somalia', '2017-10-10', 'pictures$info[18]'),
(23, 'ayaanle', 'Male', 'Maryama', 'mohamed', 'Father', 907754174, 'work', 'SELECT', 'Raxiis', '2017-10-10', 907541268, 'Primary', 'Grade Seven', 'A', 'Nawawi', 'Somalia', '2017-10-23', 'pictures/IMG_1574.JPG'),
(24, 'anizo', 'Female', 'faynuuz', 'faarax', 'Ancle', 909876876, 'Self_worker', 'SELECT', 'Raxiis', '2017-10-20', 908765644, 'Kindergartner', 'Kindergartner', 'A', 'Nawawi', 'SELECT', '2017-10-24', 'pictures/t-bootstrap-carousel.jpg '),
(25, 'vjvuvyvv', 'Male', 'jhjhhuhuh', 'huhuihiuhiu', 'Mother', 86875768, 'guigug', 'SELECT', 'huhiuhuihui', '2017-10-23', 698657475, 'Kindergartner', 'Kindergartner', 'A', 'Ridwaan', 'Somalia', '0000-00-00', 'IMG_0336.PNG'),
(56, 'yacquub', 'Male', 'Faadumo', 'faarax', 'Mother', 907754174, 'MANAGER', 'Ceerigaabo', 'Ridwaan', '2017-10-11', 908765644, 'Primary', 'Form Two', 'A', 'Nawawi', 'Somalia', '2017-10-11', 'pictures/IMG_0336.PNG'),
(71, 'Yuusuf', 'Male', 'Faadumo', 'casho', 'Mother', 0, 'work', 'Ceynabo', 'Raxiis', '0000-00-00', 0, 'Secondary', 'Kindergartner', 'M', 'Ridwaan', 'Zambia', '0000-00-00', ''),
(72, 'sacido', 'Female', 'Xaliimo ', 'casho', 'Aunt', 909876876, 'Self_worker', 'Ceynabo', 'Raxiis', '0000-00-00', 90457521, 'Kindergartner', 'Form One', 'A', 'Nawawi', 'Somalia', '0000-00-00', 'IMG_0362.PNG'),
(76, 'maymuun', 'Male', 'FARHIO', 'casho', 'Mother', 907754174, 'work', 'Ceerigaabo', 'Raxiis', '0000-00-00', 907451254, 'Primary', 'Kindergartner', 'A', 'Nawawi', 'Somalia', '0000-00-00', 'pictures/t-content-slider.jpg '),
(77, 'ayaan', 'Female', 'Faadumo', 'MOHAMOUD ABDI', 'Father', 907754174, 'MANAGER', 'SELECT', 'Ridwaan', '0000-00-00', 907541268, 'Kindergartner', 'Kindergartner', 'A', 'Nawawi', 'SELECT', '0000-00-00', 'pictures/13.jpg '),
(100, 'Yuusuf', 'Male', 'Faadumo', 'Abdullahi', 'Mother', 907754174, 'MANAGER', 'Xuddun', 'laantahawada', '2017-10-03', 908765644, 'Kindergartner', 'Kindergartner', 'A', 'Nawawi', 'Somalia', '2017-10-24', 'pictures/19.jpg '),
(101, 'abdullahi', 'Male', 'Faadumo', 'faarax', 'Father', 907754174, 'MANAGER', 'Lug-haye', 'Ridwaan', '2017-10-01', 907541268, 'Secondary', 'Form One', 'A', 'Ridwaan', 'Malta', '2017-10-27', ''),
(102, 'mohamed abdirazak', 'Male', 'faynuuz', 'abdirazak', 'Father', 907754174, 'MANAGER', 'SELECT', 'lanta hawada', '2017-10-15', 908765644, 'Secondary', 'Form One', 'A', 'Raxma', 'SELECT', '2017-10-15', 'tx-wave.jpg'),
(103, 'mohamed said abdi', 'Male', 'sahro mahamoud jama', 'abdi', 'Mother', 907680294, 'selt work', 'Berbera', 'laantahawada', '2017-10-02', 908765433, 'Primary', 'Grade Two', 'N', 'Raxma', 'Malta', '2017-10-15', 'pictures/Screenshot (2).png '),
(105, 'abdullahi', 'Male', 'Xaliimo ', 'mohamed', 'Father', 907754174, 'MANAGER', 'Xuddun', 'laantahawada', '2017-10-12', 908765644, 'Secondary', 'Grade Six', 'A', 'Nawawi', 'Malta', '2017-10-11', 'pictures/Screenshot (4).png '),
(106, 'cawaale', 'Male', 'Xaliimo ', 'MOHAMOUD ABDI', 'Father', 909876876, 'work', 'SELECT', 'Ridwaan', '0000-00-00', 90457521, 'Kindergartner', 'Grade One', 'A', 'Nawawi', 'Somalia', '0000-00-00', 'Screenshot (1).png'),
(107, 'cabdiraxman', 'Male', 'Xaliimo ', 'Abdullahi', 'Father', 907544652, 'Self_worker', 'SELECT', 'Ridwaan', '2017-10-05', 90457521, 'Kindergartner', 'Grade Three', 'A', 'Nawawi', 'Somalia', '2017-10-20', 'pictures/t-bootstrap-carousel.jpg '),
(108, 'muslimo', 'Female', 'Xaliimo ', 'faarax', 'Father', 907544652, 'MANAGER', 'Gebilay States', 'New Bosaaso', '0000-00-00', 908765644, 'Secondary', 'Grade Three', 'A', 'Nawawi', 'Yemen', '0000-00-00', 'pictures/t-bootstrap-carousel.jpg '),
(109, 'nadiifo', 'Female', 'Xaliimo ', 'faarax', 'Father', 907754174, 'MANAGER', 'SELECT', 'laantahawada', '0000-00-00', 90457521, 'Kindergartner', 'Grade Four', 'A', 'Nawawi', 'Somalia', '2017-10-05', 'pictures/tx-dodge-pet.jpg '),
(110, 'bishaar', 'Male', 'Faadumo', 'abdirazak', 'Father', 907754174, 'MANAGER', 'SELECT', 'laantahawada', '0000-00-00', 90457521, 'Primary', 'Grade Four', 'A', 'Nawawi', 'SELECT', '0000-00-00', ''),
(111, 'salaad', 'Male', 'faynuuz', 'abdirazak', 'Father', 9087654, 'MANAGER', 'Xuddun', 'laantahawada', '0000-00-00', 908765644, 'Secondary', 'Grade Five', 'A', 'Nawawi', 'Malta', '0000-00-00', 'pictures/tx-jump.jpg '),
(112, 'maxamuud', 'Male', 'Maryama', 'faarax', 'Father', 907754174, 'MANAGER', 'Boorame', 'laantahawada', '0000-00-00', 90457521, 'Primary', 'Grade Five', 'A', 'Nawawi', 'Somalia', '2017-10-18', 'pictures/tx-compound.jpg '),
(113, 'nuradiin mohamed cali', 'Male', 'aamino mohamed aadan', 'aamino', 'Mother', 907680294, 'Self_worker', 'Dayniile', 'laantahawada', '1999-06-17', 907451254, 'Secondary', 'Form One', 'B', 'Nawawi', 'Somalia', '2017-11-07', 'pictures/t-image-slider-with-caption.jpg '),
(115, 'abdirahmaan', 'Male', 'mulki', 'mulki', 'Mother', 907754174, 'Self_worker', 'Ceerigaabo', 'macruuf', '2002-06-14', 907713239, 'Primary', 'Grade One', 'A', 'Nawawi', 'Somalia', '2017-11-08', 'pictures/tx-wave.jpg '),
(116, 'yuusuf ahmed said', 'Male', 'aamino maxamed cali', 'aamino maxamed', 'Mother', 907564322, 'work', 'Boosaaso', 'golis', '2009-07-25', 97643257, 'Primary', 'Grade Three', 'A', 'Nawawi', 'Somalia', '2017-11-08', 'pictures/Screenshot (2).png '),
(117, 'mustafe farah isse', 'Male', 'baar ciise cali', 'baar cise cali', 'Mother', 906754335, 'work', 'Boosaaso', 'laanta hawada', '1994-06-23', 907770473, 'Secondary', 'Form Four', 'A', 'Nawawi', 'Somalia', '2017-11-27', 'pictures/15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(255) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `tellphone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `c_level` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `fullname`, `dob`, `tellphone`, `email`, `c_level`, `course_id`, `branch`, `shift`) VALUES
(1, 'carafaad abdi ahmed ', '2017-11-13', 907776865, 'carafaad20000@gmail.com', 'Bachular', 0, 'Ridwaan', 'Morning'),
(2, 'abdiwah omer said', '1981-06-24', 907544456, 'abdiwahab@gmail.com', 'Bachulor', 0, 'Nawawi', 'Morning');

-- --------------------------------------------------------

--
-- Table structure for table `tijaabo`
--

CREATE TABLE `tijaabo` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nametwo` varchar(20) NOT NULL,
  `namethree` varchar(20) NOT NULL,
  `namefour` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `time_id` int(255) NOT NULL,
  `days` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `p_1` varchar(15) NOT NULL,
  `p_2` varchar(15) NOT NULL,
  `p_3` varchar(15) NOT NULL,
  `p_4` varchar(15) NOT NULL,
  `p_5` varchar(15) NOT NULL,
  `p_6` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`time_id`, `days`, `branch`, `classname`, `section`, `year`, `p_1`, `p_2`, `p_3`, `p_4`, `p_5`, `p_6`) VALUES
(128, 'sabti', 'Nawawi', 'Grade One', 'A', '1990/1991', 'islamic', 'english', 'somali', 'phyiscs', 'physics', 'english'),
(129, 'axad', 'Nawawi', 'Grade One', 'A', '1990/1991', 'bology', 'biology', 'arabic', 'math', 'math', 'islamic'),
(130, 'isiniin', 'Nawawi', 'Grade One', 'A', '1990/1991', 'chemistry', 'chemistry', 'english', 'geo', 'geo', 'arabic'),
(131, 'talaado', 'Nawawi', 'Grade One', 'A', '1990/1991', 'history', 'history', 'somali', 'biology', 'biology', 'arabic'),
(132, 'arbaco', 'Nawawi', 'Grade One', 'A', '1990/1991', 'math', 'math', 'physics', 'chemistry', 'chemistry', 'taariikh'),
(133, 'khamiis', 'Nawawi', 'Grade One', 'A', '1990/1991', 'phyics', 'history', 'arabic', '', ' ', ''),
(134, 'sabti', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'english', 'biology', 'biology', 'islamic', 'islamic', 'english'),
(135, 'axad', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'physics', 'physics', 'arabic', 'chemistry', 'chemistry', 'islamic'),
(136, 'isiniin', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'geo', 'geo', 'english', 'math', 'math', 'history'),
(137, 'talaado', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'biology', 'biology ', 'history', 'chemistry', 'chemistry ', 'geo'),
(138, 'arbaco', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'math', 'math ', 'arabic', 'history', 'physics ', 'physics'),
(139, 'khamiis', 'Nawawi', 'Grade Two', 'A', '2017/2018', 'english', 'arabic ', 'somali', '', ' ', ''),
(140, 'sabti', 'Nawawi', 'Kindergartner', 'A', '1990/1991', 'ciyaar', 'hurdo', 'nasasho', 'maaweelo', 'sheeko', 'sambuus'),
(141, 'sabti', 'Raxma', 'Form One', 'A', '2016/2017', 'phyiscs', 'physics', 'biology', 'arabicÂ ', 'english', 'somali'),
(142, 'axad', 'Raxma', 'Form One', 'A', '2016/2017', 'history', 'geo', 'islamic', 'chemsitry', 'chemsitry ', 'arabicÂ '),
(143, 'isiniin', 'Raxma', 'Form One', 'A', '2016/2017', 'physics', 'physics ', 'somali', 'math', 'math', 'english'),
(144, 'talaado', 'Raxma', 'Form One', 'A', '2016/2017', 'math', 'math ', 'geo', 'geo', 'history ', 'history'),
(145, 'arbaco', 'Raxma', 'Form One', 'A', '2016/2017', 'chemsitry', 'chemsitry ', 'english', 'islamic', 'islamic ', 'arabicÂ '),
(146, 'khamiis', 'Raxma', 'Form One', 'A', '2016/2017', 'biology', 'biology ', 'arabicÂ ', '', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload_image`
--

CREATE TABLE `upload_image` (
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`days_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `st_fk` (`st_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_id`),
  ADD KEY `fee_st_fk1` (`st_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pob`
--
ALTER TABLE `pob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tijaabo`
--
ALTER TABLE `tijaabo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `days_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `fee_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `pob`
--
ALTER TABLE `pob`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tijaabo`
--
ALTER TABLE `tijaabo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `time_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `st_fk` FOREIGN KEY (`st_id`) REFERENCES `registration` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_st_fk1` FOREIGN KEY (`st_id`) REFERENCES `registration` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
