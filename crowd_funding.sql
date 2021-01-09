-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowd_funding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `sq` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uid`, `name`, `phone`, `address`, `sq`) VALUES
(1, 1, 'Md. Nur Islam', '01622114901', 'Dhalpur, Jatrabari, Dhaka - 1204', 'me'),
(2, 23, 'Md.Nur Islam', '01622114910', 'kuratoli,Dhaka', 'me'),
(3, 35, 'Md.Nur Islam', '01622114901', 'kuratoli,Dhaka', 'me'),
(4, 36, 'Md.Nur Islam ', '01622114901', 'kuratoli,Dhaka ', 'me'),
(5, 37, 'Md. Shaheen Alam Jony', '01622114914', 'Tangail Sadar. Tangail', 'me'),
(6, 39, 'test', '+8801622114901', 'kuratoli,Dhaka, Tangail', 'me'),
(7, 40, 'test', '+8801622114901', 'kuratoli,Dhaka, Tangail', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `UpdatedDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `target_fund` int(9) DEFAULT NULL,
  `raised_fund` int(9) DEFAULT NULL,
  `ctype` int(1) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `publisedDate` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `endDate` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `uid`, `target_fund`, `raised_fund`, `ctype`, `description`, `image`, `publisedDate`, `endDate`, `status`, `title`) VALUES
(2, 3, 1000, 215, 1, 'Amn koren kn vai. Kisu taka dile kisui hoibo na ektu taka den na please.', 'https://i.pinimg.com/originals/3d/43/21/3d4321adf7b22ac83eeff9375c84b6f3.jpg', '21/11/2020', '25/11/2020', 1, 'Give us more money.'),
(3, 4, 1000, 110, 2, 'Vai khaite pai na amn onek polapan ami chini \r\nPlease oder kisu khaite den', 'https://i.pinimg.com/originals/3d/43/21/3d4321adf7b22ac83eeff9375c84b6f3.jpg', '20/11/2020', '25/11/2020', 1, 'Give Them some Money'),
(4, 4, 500, 130, 2, 'Please Help Us for better future', 'https://www.businessknowhow.com/uploads/create-better-future.jpg', '22/11/2020', '28/11/2020', 1, 'Please Donate money'),
(5, 4, 500, 500, 2, 'We Should help each other out. If you donate me you will get free subscription in my website.', 'https://d.wildapricot.net/images/default-album/how-to-get-donations.jpg', '24/11/2020', '28/11/2020', 3, 'Please Help Together Grow Together'),
(7, 4, 1500, 0, 2, 'Please Help Us', 'https://www.businessknowhow.com/uploads/create-better-future.jpg', '28/12/2020', '31/12/2020', 0, 'Please Donate some money');

-- --------------------------------------------------------

--
-- Table structure for table `contactadmins`
--

CREATE TABLE `contactadmins` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `description` text NOT NULL,
  `UpdatedDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactadmins`
--

INSERT INTO `contactadmins` (`id`, `uid`, `description`, `UpdatedDate`) VALUES
(6, 3, 'Dear Admin,\r\nPlease unblock my campaign\r\ntitle : please give us money\r\nid: 2', '2020-12-29'),
(7, 4, 'Dear Admin,\r\nPlease unblock my campaign\r\ntitle : please give them some money\r\nid: 3', '2020-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `donationDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `uid`, `cid`, `amount`, `donationDate`) VALUES
(1, 1, 3, 20, 'Mon Nov 23 2020'),
(2, 1, 1, 50, 'Tue Nov 24 2020'),
(3, 3, 2, 10, 'Tue Nov 23 2020'),
(4, 2, 1, 30, 'Mon Nov 24 2020'),
(5, 1, 5, 100, 'Tue Nov 24 2020'),
(6, 2, 5, 10, 'Sat Nov 28 2020'),
(7, 1, 3, 50, 'Fri Dec 04 2020'),
(8, 1, 2, 10, 'Thu Dec 24 2020'),
(9, 1, 2, 200, 'Thu Dec 24 2020'),
(10, 3, 5, 380, 'Thu Dec 24 2020'),
(11, 2, 5, 10, 'Thu Dec 24 2020'),
(12, 1, 4, 20, '2020-12-27'),
(13, 1, 4, 10, '2020-12-27'),
(14, 1, 5, 20, '2020-12-27'),
(15, 1, 5, 1, '2020-12-27'),
(16, 51, 2, 5, '2020-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `uid`, `name`, `contactno`, `address`) VALUES
(1, 3, 'Bright Light', '01622114902', 'Kurigram, Bangladesh'),
(2, 6, 'Md. Nur Islam', '01622114906', 'dhalupur'),
(3, 7, 'Md.Nur Islam', '01622114907', 'dhal;so');

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `gender` int(1) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`uid`, `id`, `name`, `contactno`, `gender`, `address`) VALUES
(2, 1, 'Md. Nur Islam', '01622114901', 0, 'Dhalpur, jatrabari'),
(5, 2, 'Md. Nur Islam', '01622114905', 0, 'Dhalpur');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `updatedDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `description` text NOT NULL,
  `updatedDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `cid`, `uid`, `description`, `updatedDate`) VALUES
(4, 2, 4, 'This is a fake campaign. Please block this one.', '2020-12-29'),
(5, 5, 3, 'This is a fake campaign. Please block this one.', '2020-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `image` text NOT NULL,
  `provider_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`, `status`, `image`, `provider_id`) VALUES
(1, 'nur', 'nursm@gmail.com', '1', 0, 1, '/system_images/nur.jpg', '0'),
(2, 'nur1', 'nursm1@gmail.com', '1', 1, 1, '', '0'),
(3, 'nur2', 'nursm2@gmail.com', '2', 2, 1, '', '0'),
(4, 'nur3', 'nursm3@gmail.com', '3', 3, 1, '', '0'),
(5, 'nur4', 'nursm4@gmail.com', '4', 1, 1, '', '0'),
(6, 'nur5', 'nursm5@gmail.com', '5', 2, 1, '', '0'),
(7, 'nur6', 'nursm686@gmail.com', '6', 2, 2, '', '0'),
(8, 'nur8', 'nursm8@gmail.com', '8', 3, 1, '', '0'),
(9, 'nur9', 'nursm9@gmail.com', '9', 3, 2, '/system_images/1.jpg', '0'),
(23, 'nur10', 'lucifersm7861@gmail.com', '1', 0, 1, '', '0'),
(35, 'n', 'lucifersm786@gmail.com', '1', 0, 1, '', '0'),
(36, 'Nur_SM786', 'lucifersm786@gmail.comss', '1', 0, 1, '/system_images/neymar1.jpg', '0'),
(37, 's', 'shaheenalamjony@gmail.com', '1', 0, 1, '/system_images/messi.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `gender` int(1) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `uid`, `name`, `contactno`, `gender`, `address`) VALUES
(1, 4, 'Md. Nur Islam', '01622114904', 0, 'Bashundhara, Jatrabari'),
(2, 8, 'Md. Nur Islam', '01622114908', 0, 'dhalpur'),
(3, 9, 'Md.Nur Islam', '01622114909', 0, 'dhaodi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactadmins`
--
ALTER TABLE `contactadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactadmins`
--
ALTER TABLE `contactadmins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
