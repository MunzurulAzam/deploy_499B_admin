-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 04:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freaktem_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinic_adminlogin`
--

CREATE TABLE `clinic_adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_adminlogin`
--

INSERT INTO `clinic_adminlogin` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `icon`, `is_active`) VALUES
(1, 'admin', '123', 'administrator', 'admin@gmail.com', '9601604082', 'admin_1547267849.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_city`
--

CREATE TABLE `clinic_city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_city`
--

INSERT INTO `clinic_city` (`id`, `name`, `created_at`) VALUES
(3, 'Dhaka', 1659690280);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_notification`
--

CREATE TABLE `clinic_notification` (
  `id` int(11) NOT NULL,
  `apikey` varchar(300) NOT NULL,
  `ioskey` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_notification`
--

INSERT INTO `clinic_notification` (`id`, `apikey`, `ioskey`) VALUES
(1, 'AAAAfN5W0dY:APA91bH-oKIpNgNptzVObPl84eUR2GomuF9Oaj1yobRUhGzoF5NJnj9WoaY87P8K1jHhB-UqASz3peLMhdl0dcBo95Lj9xtvZXpHGvY1uTxsk9ZH3w7KcgOuUqHbFOkB5pBEHE3t0Vl-', '12334');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_profile`
--

CREATE TABLE `clinic_profile` (
  `id` int(11) NOT NULL,
  `mcat_id` int(11) NOT NULL,
  `spcat_id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(120) NOT NULL,
  `hours` varchar(50) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lon` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `services` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `goole_plus` varchar(200) NOT NULL,
  `helthcare` text NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twiter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_profile`
--

INSERT INTO `clinic_profile` (`id`, `mcat_id`, `spcat_id`, `icon`, `name`, `phone`, `email`, `hours`, `lat`, `lon`, `about`, `services`, `address`, `city`, `goole_plus`, `helthcare`, `facebook`, `twiter`) VALUES
(4, 1, 5, 'profile_1659692743.jpg', 'Azam', '01761 538865', 'munzurul1998@gmail.com', '9.00 to 8.00', '23.815061608004726', '90.42128652057896', 'aassdddss', 'ssdddddff', 'Kuril, Dhaka', '3', '', 'ssdddfff', 'https://www.facebook.com/profile.php?id=100006756030334', ''),
(5, 2, 0, 'profile_1659820577.jpg', 'Azamfarmacy', '01761 538865', 'munzurul1998@gmail.com', '12 to 3', '23.820525367797504', '90.42038889712994', 'ddddd', 'ddddddd', 'Kuril, Dhaka', '3', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_reviewratting`
--

CREATE TABLE `clinic_reviewratting` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `ratting` varchar(10) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_sendnotification`
--

CREATE TABLE `clinic_sendnotification` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_specialist`
--

CREATE TABLE `clinic_specialist` (
  `id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(300) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_specialist`
--

INSERT INTO `clinic_specialist` (`id`, `sp_id`, `name`, `icon`, `created_at`) VALUES
(5, 1, 'Ear', 'specialities_1659690368.jpg', 1659690368);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_tokendata`
--

CREATE TABLE `clinic_tokendata` (
  `id` int(11) NOT NULL,
  `device_id` text NOT NULL,
  `device_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_users`
--

CREATE TABLE `clinic_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `reg_type` varchar(100) NOT NULL,
  `reg_id` text NOT NULL,
  `platform` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_users`
--

INSERT INTO `clinic_users` (`id`, `username`, `email`, `password`, `image`, `created_at`, `reg_type`, `reg_id`, `platform`) VALUES
(1, '', '', 'Azam@77?', 'file:///C:/Users/munzu/OneDrive/Pictures/user-avatar-svgrepo-com.svg', 21, 'user', '101010', 'azax');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinic_adminlogin`
--
ALTER TABLE `clinic_adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_city`
--
ALTER TABLE `clinic_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_notification`
--
ALTER TABLE `clinic_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_profile`
--
ALTER TABLE `clinic_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_reviewratting`
--
ALTER TABLE `clinic_reviewratting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_sendnotification`
--
ALTER TABLE `clinic_sendnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_specialist`
--
ALTER TABLE `clinic_specialist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_tokendata`
--
ALTER TABLE `clinic_tokendata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_users`
--
ALTER TABLE `clinic_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinic_adminlogin`
--
ALTER TABLE `clinic_adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic_city`
--
ALTER TABLE `clinic_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clinic_notification`
--
ALTER TABLE `clinic_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic_profile`
--
ALTER TABLE `clinic_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clinic_reviewratting`
--
ALTER TABLE `clinic_reviewratting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic_sendnotification`
--
ALTER TABLE `clinic_sendnotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic_specialist`
--
ALTER TABLE `clinic_specialist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clinic_tokendata`
--
ALTER TABLE `clinic_tokendata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic_users`
--
ALTER TABLE `clinic_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
