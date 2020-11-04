-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 03:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamir`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(15) DEFAULT NULL,
  `Phone No:` varchar(10) DEFAULT NULL,
  `Address` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Phone No:`, `Address`) VALUES
('Abdullah Ahmed', '1734322248', 'Mirpur'),
('Nasima Akter', '1687585345', 'Mirpur'),
('Sharif Rashid', '1921218552', 'Mirpur'),
('Sohel Rana', '1687565842', 'Mirpur'),
('Shopon  Ahmed', '1977355350', 'Mirpur'),
('Asif Rahman', '1734552258', 'Mirpur'),
('Asma Akter', '1934562235', 'Mirpur'),
('Dipa Begum', '1633582355', 'Mirpur'),
('Shumi Akter', '1734582580', 'Mirpur'),
('Kamal Hossain', '1934522250', 'Mirpur'),
('Kulsum', '1337544258', 'Mirpur'),
('Tanjila Khatun', '1714556656', 'Rampura'),
('Nusrat Jahan', '1924557745', 'Rampura'),
('Adiba Rahman', '1424536776', 'Rampura'),
('Tanvir Ahmed', '1754538657', 'Rampura'),
('shumon Badsha', '1954786753', 'Rampura'),
('Shanta Akter', '1314546646', 'Rampura'),
('Aminul Islam', '1734582522', 'Rampura'),
('Enamul Huque', '1337544578', 'Rampura'),
('Sabbir Hossain', '1934527890', 'Rampura'),
('Ishana Khan', '1934533350', 'Banani'),
('Ibrhim Khalil', '1924556675', 'Banani'),
('Shakil Mahmud', '1930722581', 'Banani'),
('Tanjil Rahman', '1424536676', 'Banani'),
('Nila Akter', '1854546866', 'Banani'),
('Niloy Ahmed', '1922154878', 'Banani'),
('Salman Rahman', '1732175878', 'Banani'),
('Enamul Islam', '1433154877', 'Banani'),
('Sany Rahman', '1944154845', 'Banani'),
('Mitu Akter', '1935154877', 'Motijhil'),
('Manik Rahman', '1357178889', 'Motijhil'),
('Habiba Akter', '1931155898', 'Motijhil'),
('Shathi Begum', '1922444587', 'Motijhil'),
('Habibur Rahman', '1723536876', 'Motijhil'),
('Harunur Rashid', '1434555390', 'Motijhil'),
('salam Akter', '1733154888', 'Motijhil'),
('Hena Begum', '1944154877', 'Motijhil'),
('Mina Begum', '1915166875', 'Motijhil'),
('hasib Rahman', '1492138872', 'Motijhil'),
('minarul Ahmed', '1683553733', 'Uttara'),
('Tanha Akter', '1922885587', 'Uttara'),
('Titu Hossain', '1683553733', 'Uttara'),
('Thamina Akter', '1983553733', 'Uttara'),
('AB.Razzak', '1783553443', 'Uttara'),
('Azad Hossain', '1383554533', 'Uttara'),
('Khyrul Islam', '1683575755', 'Uttara'),
('Selim Rahman', '1682553785', 'Uttara'),
('Sharmin Akter', '1983553783', 'Uttara'),
('Munni Akter', '1683573747', 'Uttara'),
('Dolon Akter', '1783553889', 'Badda'),
('Ekramul Islam', '1686643778', 'Badda'),
('Jishan Ahmed', '1678245900', 'Badda'),
('Appon Ahmed', '1944154888', 'Badda'),
('Nasimul Islam', '1683443755', 'Badda'),
('Mahima Akter', '1687588545', 'Badda'),
('Jenia Islam', '1687591078', 'Badda'),
('Ome  Ahmed', '1687593611', 'Badda'),
('Amit Ray', '1687596144', 'Badda'),
('Shikhon Rahman', '1687598677', 'Badda'),
('Sumaya Akter', '1687601210', 'Banasree '),
('Tasmia Akter', '1687603743', 'Banasree '),
('Ruma Akter', '1687606276', 'Banasree '),
('Rumi jahan', '1687608809', 'Banasree '),
('Shams Rahman', '1687611342', 'Banasree '),
('Rupa Akter', '1687613875', 'Banasree '),
('Azmal Hossain', '1687616408', 'Banasree '),
('Jhohirul Islam', '1687618941', 'Banasree '),
('Bikash  Das', '1687621474', 'Banasree '),
('Sohel Hossain', '1687624007', 'Banasree '),
('Uzzal Rahman', '1687626540', 'Banasree '),
('Ali Hossain', '1687629073', 'Banasree '),
('Zia Rahman', '1687631606', 'Banasree '),
('Monjurul  Islam', '1687634139', 'Banasree '),
('Asadul Islam', '1687636672', 'Banasree '),
('anisur Rahnan', '1687639205', 'Dhanmandi'),
('Shirin Begum', '1687641738', 'Dhanmandi'),
('nishan Ahmed', '1687644271', 'Dhanmandi'),
('alim Rahman', '1687646804', 'Dhanmandi'),
('Anowar Ahmed', '1687649337', 'Dhanmandi'),
('Rifat Hossain', '1687651870', 'Dhanmandi'),
('Asha Akter', '1687654403', 'Dhanmandi'),
('Amena Begum', '1687656936', 'Dhanmandi'),
('Shajal Ahmed', '1687659469', 'Dhanmandi'),
('Sahin Ahmed', '1687662002', 'Dhanmandi'),
('Masum  Rahman', '1687664535', 'Dhanmandi'),
('Nayem Hossain', '1687667068', 'Dhanmandi'),
('Polash Hossain', '1687669601', 'Dhanmandi'),
('Parvej  Rahman', '1687672134', 'Dhanmandi'),
('Pintu Rahman', '1687674667', 'Dhanmandi'),
('Nahid Rahman', '1687677200', 'Malibag'),
('Nila Akter', '1687679733', 'Malibag'),
('Monisha Akter', '1687682266', 'Malibag'),
('Amittra Das', '1687684799', 'Malibag'),
('Urmi Isalm', '1687687332', 'Malibag'),
('Minu Begum', '1687689865', 'Malibag'),
('Rumpa Akter', '1687692398', 'Malibag'),
('Jesmin Akter', '1687694931', 'Malibag'),
('Jibon  Rahman', '1687697464', 'Malibag'),
('Shahnaj Begum', '1687699997', 'Malibag');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
