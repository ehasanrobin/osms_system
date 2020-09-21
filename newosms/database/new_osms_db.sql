-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 12:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_osms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(3, 'admin ehasan', 'admin@gmail.com', '0c7540eb7e65b553ec1ba6b20de79608');

-- --------------------------------------------------------

--
-- Table structure for table `assetes_tb`
--

CREATE TABLE `assetes_tb` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_dop` date NOT NULL,
  `p_available` int(11) NOT NULL,
  `p_total` int(11) NOT NULL,
  `p_or_price` int(11) NOT NULL,
  `p_sel_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetes_tb`
--

INSERT INTO `assetes_tb` (`p_id`, `p_name`, `p_dop`, `p_available`, `p_total`, `p_or_price`, `p_sel_price`) VALUES
(10, 'mic', '2020-09-21', 9, 10, 500, 300);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `r_no` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` varchar(100) NOT NULL,
  `request_desc` text NOT NULL,
  `request_name` varchar(50) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(50) NOT NULL,
  `requester_state` varchar(50) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(50) NOT NULL,
  `request_mbl` int(11) NOT NULL,
  `assaign_tech` varchar(50) NOT NULL,
  `assaign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`r_no`, `request_id`, `request_info`, `request_desc`, `request_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `request_mbl`, `assaign_tech`, `assaign_date`) VALUES
(23, 30, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, 'technician2', '2020-09-30'),
(24, 34, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'adffffffffff', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, 'technician', '2020-09-21'),
(25, 36, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, 'technician', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `cp_id` int(11) NOT NULL,
  `cp_cust_name` varchar(50) NOT NULL,
  `cp_add` text NOT NULL,
  `cp_name` varchar(50) NOT NULL,
  `cp_quantity` int(11) NOT NULL,
  `cp_each` int(11) NOT NULL,
  `cp_total` int(11) NOT NULL,
  `cp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`cp_id`, `cp_cust_name`, `cp_add`, `cp_name`, `cp_quantity`, `cp_each`, `cp_total`, `cp_date`) VALUES
(1, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', '', 1, 2000, 2000, '2020-09-20'),
(2, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 2, 2000, 2000, '2020-09-20'),
(3, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 2, 2000, 2000, '2020-09-20'),
(4, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 10, 2000, 200000, '2020-09-20'),
(5, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 1, 2000, 2000, '2020-09-20'),
(6, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 1, 2000, 2000, '2020-09-20'),
(7, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 1, 2000, 2000, '2020-09-20'),
(8, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 1, 2000, 2000, '2020-09-20'),
(9, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mouse', 1, 2000, 2000, '2020-09-20'),
(10, 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'mic', 1, 2000, 2000, '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(27, 'Mohammad ', 'admin@gmail.com', '0c7540eb7e65b553ec1ba6b20de79608'),
(28, 'Mohammad Sa', 'admin@example.com', 'd93a5def7511da3d0f2d171d9c344e91');

-- --------------------------------------------------------

--
-- Table structure for table `submit_request_tb`
--

CREATE TABLE `submit_request_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` varchar(60) NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mbl` bigint(20) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_request_tb`
--

INSERT INTO `submit_request_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mbl`, `request_date`) VALUES
(30, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, '2020-09-18'),
(34, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'adffffffffff', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, '2020-09-15'),
(35, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, '2020-09-20'),
(36, 'ipad icloud locked', 'my ipad has been locked in icloud i want to unlock my icloud unlock ', 'Mohammad Samsul Ehasan', '38 no lanne,2 no joinagar,chawbazar,', 'baizid nagar', 'chittagong', 'chittagong', 4203, 'ehasanrobin44@gmail.com', 1611044616, '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_city` varchar(50) NOT NULL,
  `emp_mobile` bigint(20) NOT NULL,
  `emp_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `emp_name`, `emp_city`, `emp_mobile`, `emp_mail`) VALUES
(1, 'Mohammad Samsul Ehasan', 'chittagong', 16111144444, 'admin@gmail.com'),
(2, 'Mohammad Samsul Ehasan', 'chittagong', 16111144444, 'admin@gmail.com'),
(3, 'Mohammad Samsul Ehasan', 'chittagong', 16111144444, 'admin@gmail.com'),
(6, 'Mohammad Samsul Ehasan', 'chittagong', 16111144444, 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assetes_tb`
--
ALTER TABLE `assetes_tb`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`r_no`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submit_request_tb`
--
ALTER TABLE `submit_request_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assetes_tb`
--
ALTER TABLE `assetes_tb`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `r_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `submit_request_tb`
--
ALTER TABLE `submit_request_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
