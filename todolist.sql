-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 05:41 AM
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
(93, 'کلاس رقص', 'من باید بیست روز دیگه برای جلسه سوم به کلاس رقص برم', '13990123', '13990103', '13990103', 1),
(94, 'باشگاه', 'من امروز تمرین پا داشتم', '', '13990103', '', 1),
(95, 'باشگاه', 'باید هفته اینده برای سینه تمرین کنم', '13990110', '13990103', '13990103', 0),
(96, 'باشگاه', 'باید فردا پرس پا بزنم', '13990105', '13990104', '', 0),
(97, 'باشگاه', 'باید فردا پرس پا بزنم', '13990105', '13990104', '', 0),
(98, 'باشگاه', 'سه روز دیگه تمرین جلو بازو میزنم', '13990107', '13990104', '', 0),
(99, 'باشگاه', 'پنج روز دیگه تمرین پشت بازو میزنم', '13990109', '13990104', '', 0),
(100, 'باشگاه', 'نه روز دیگه تمرین پشت پا میزنم', '13990113', '13990104', '', 0),
(101, 'باشگاه', 'ده  روز دیگه تمرین پرس  پا میزنم', '13990114', '13990104', '', 0),
(103, 'دانشگاه', 'باید در تاریخ معین شده به استاد مربوطه جهت ارائه گزارش نهایی پرو\nژه مراجعه کنم', '13990322', '13990104', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
