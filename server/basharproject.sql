-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 أبريل 2020 الساعة 17:34
-- إصدار الخادم: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basharproject`
--

-- --------------------------------------------------------

--
-- بنية الجدول `temp`
--

CREATE TABLE `temp` (
  `login` text NOT NULL,
  `logout` text NOT NULL,
  `id` int(11) NOT NULL,
  `css` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `temp`
--

INSERT INTO `temp` (`login`, `logout`, `id`, `css`) VALUES
('Welcome Hi, username', 'Bye, ', 1, '4');

-- --------------------------------------------------------

--
-- بنية الجدول `time`
--

CREATE TABLE `time` (
  `atime` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `time`
--

INSERT INTO `time` (`atime`, `id`) VALUES
(140000000, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `disable` varchar(255) NOT NULL,
  `flogout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `name`, `active`, `disable`, `flogout`) VALUES
('noor', '987777', 'nookkj', 'noorheeh', 'no', 'no', 'no'),
('samarhajj', ' $2y$10$hE709r8btDGArI3C5L8Z5O8Vnw4GHr2JthviJvCzInQ41U8jRO99i', 'samoora.hj@gmail.com', 'samar', 'no', '', ''),
('samarhajjj588', 'samarhajjJJJ5525566322333$%', '201706578@bethlehem.edu', 'noorheeh', '', '', ''),
('samarhajj5555', '66526263axnckcnsl@@$$K;L,', '201706578@bethlehem.edu', 'noorheeh', '', '', ''),
('renal', '$2y$10$nbOFXgqc.zIIknTzbfVPxe1JKfvbU9Ev7bhHl8eW2iXWFZQ4HKpKW', 'renal@gmail.com', 'rena', 'no', '', ''),
('runal', '$2y$10$XhnCKpwgEOLr3A8EQ0qBhuqWVqmMf6vrmY3HzPE4ojx5Adp5z/I0S', 'lolo@gmail.com', 'sara', 'no', '', ''),
('samoora', '$2y$10$gW193nebEzloZbek.loC9uFhJWFFv5j8SSoRNwqh7AzsZmFSpLzDW', 'sammrhajj@gmail.com', 'samarhajj55', 'no', '', ''),
('lana', '$2y$10$EE9k2.4lW6T1XYQ5Hbhv3eQ/jrIi5qK1cP1z2sdrzT5B7TFF7JdbO', 'lana@gmail.com', 'lanaa', 'no', '', ''),
('reta', '$2y$10$dZ9K03RJmqtQHxShV5gQPuDVRZxMKH7nG9cokp0hhfSIL92zCb4xy', 'retal@gmail.com', 'retaal', 'no', '', ''),
('lara', '987456321samm!SS', 'lara@gmail.com', 'lara', 'no', 'no', 'no'),
('laralllll', '586545gkhSS&&', '2017065lkk78@bethlehem.edu', 'hll', 'yes', 'no', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
