-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 10:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tododb`
--

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `dueDate` varchar(8) COLLATE utf8_persian_ci DEFAULT NULL,
  `addDate` varchar(8) COLLATE utf8_persian_ci NOT NULL,
  `editDate` varchar(8) COLLATE utf8_persian_ci DEFAULT NULL,
  `isDone` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `title`, `description`, `dueDate`, `addDate`, `editDate`, `isDone`) VALUES
(81, 'باشگاه', 'من باید برم به باشگاه و حرکات پا رو بزنم', '۲۰۲۰۱۰۲۰', '۱۳۹۸۱۲۲۸', '', 0),
(82, 'باشگاه', 'من باید برم به باشگاه و حرکات پا رو بزنم و همچنین باید نیم ساعت هم هوازی انجام بدم', '۱۳۹۹۰۴۲۲', '۱۳۹۸۱۲۲۸', '۱۳۹۸۱۲۲۸', 0),
(83, 'باشگاه', 'من باید امروز فقط حرکات سینه رو تمرین کنم', '۱۳۹۹۰۲۱۴', '۱۳۹۸۱۲۲۸', '', 0),
(84, 'آموزشگاه گیتار', 'من باید در تاریخ معین شده برای بار دوکین جلسه به کلاس برم', '۱۳۹۹۰۴۱۵', '۱۳۹۸۱۲۲۸', '', 0),
(85, 'آموزشگاه گیتار', 'جلسه اول کلاسم', '', '۱۳۹۸۱۲۲۸', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
