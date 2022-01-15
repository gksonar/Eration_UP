-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 06:35 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_ration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'Nashik Road'),
(2, 'jailroad'),
(3, 'Indira Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `i_id` int(11) NOT NULL,
  `income` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`i_id`, `income`) VALUES
(1, 'Below 15000'),
(2, '15000 To 100000'),
(3, '100000 Above');

-- --------------------------------------------------------

--
-- Table structure for table `rationtype`
--

CREATE TABLE `rationtype` (
  `r_id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `rationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rationtype`
--

INSERT INTO `rationtype` (`r_id`, `i_id`, `rationname`) VALUES
(1, 1, 'AAY'),
(2, 2, 'BPL'),
(3, 3, 'APL');

-- --------------------------------------------------------

--
-- Table structure for table `ration_details`
--

CREATE TABLE `ration_details` (
  `ration_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `ration_name` varchar(50) NOT NULL,
  `ration_rate` varchar(50) NOT NULL,
  `ration_unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ration_details`
--

INSERT INTO `ration_details` (`ration_id`, `r_id`, `ration_name`, `ration_rate`, `ration_unit`) VALUES
(1, 1, 'whete', '3', 'Rs/kilogram'),
(2, 2, 'rice', '4', 'Rs/Liter'),
(3, 1, 'oil', '5', 'Rs/Liter'),
(4, 2, 'whete', '3', 'Rs/kilogram');

-- --------------------------------------------------------

--
-- Table structure for table `schems`
--

CREATE TABLE `schems` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schems`
--

INSERT INTO `schems` (`s_id`, `s_name`, `date`) VALUES
(1, 'new', '2020-02-06 12:46:30'),
(2, 'new govermnet schems', '2020-02-14 10:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `seller_password` varchar(50) NOT NULL,
  `seller_address` varchar(50) NOT NULL,
  `seller_area` varchar(50) NOT NULL,
  `seller_adhar_no` varchar(50) NOT NULL,
  `seller_mobile_no` varchar(50) NOT NULL,
  `seller_gender` varchar(50) NOT NULL,
  `seller_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_address`, `seller_area`, `seller_adhar_no`, `seller_mobile_no`, `seller_gender`, `seller_dob`) VALUES
(1, 'seller 1', 's1@gmail.com', 's1', 'jailroad ,nashik', 'jailroad', '45859586585474', '8975468575', 'Male', '1989-08-18'),
(2, 'seller 2', 's2@gmail.com', 's2', 'indira nagar,nashik', 'Indira Nagar', '95867458745847', '8759625874', 'Female', '1996-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `stripe_active` tinyint(1) NOT NULL DEFAULT 0,
  `stripe_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_plan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `subscription_ends_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `application_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_office` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `taluka` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_mobile_no` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_which_students_wants_to_take_admission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_school_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_school_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_school_principal_mobile_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_cast_is_primitive_or_not` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primitive_tribe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schedule_tribe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_application_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `slug`, `login_enabled`, `role_id`, `parent_id`, `image`, `phone`, `address`, `stripe_active`, `stripe_id`, `stripe_plan`, `paypal_email`, `card_brand`, `card_last_four`, `trial_ends_at`, `subscription_ends_at`, `remember_token`, `settings`, `deleted_at`, `application_no`, `student_name`, `father_name`, `surname`, `gender`, `date_of_birth`, `permanent_address`, `project_office`, `taluka`, `district`, `pin_code`, `parent_mobile_no`, `in_which_students_wants_to_take_admission`, `current_school_name`, `current_school_address`, `current_school_principal_mobile_no`, `student_cast_is_primitive_or_not`, `primitive_tribe`, `schedule_tribe`, `disability`, `application_date`, `modified_application_date`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'owner', 'owner@owner.com', '$2y$10$lhv.EE91oejqsnHNHkTO6uU7LjKPhONBFOFNX4bJcXPRR.sUtA4EW', 'owner', 1, 1, NULL, '', NULL, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'oCE2KOSBSe3xxlsybLeV7apGaPhgmMokKrDBtnp95B3EEFeECCzjcJFs3skj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 07:42:27', '2018-04-03 07:42:27'),
(2, 'Alison', 'Alison', 'alison@student.com', '$2y$10$0ZOxoHPXkyzUL9eZAuu1XOIDMuefpwC4h0m6iolYr1Fc0LPMw9Cd6', 'alison-1', 1, 5, NULL, '', '7897897897', '123 6th St. \nMelbourne, FL 32904', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:58:20', '2018-04-03 08:58:20'),
(3, 'Amy', 'Amy', 'amy@student.com', '$2y$10$u4jTPvoqFf8RjJiSUlCVrOadqOR6lzo8n69kXYjucx8hhvYWWCm1e', 'amy-2', 1, 5, NULL, '', '7894567894', '71 Pilgrim Avenue \nChevy Chase, MD 20815', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:58:20', '2018-04-03 08:58:20'),
(4, 'Andrea', 'Andrea', 'andrea@student.com', '$2y$10$eT7kFjoHjc6J9vurnKj8KuM4xC95gd2BV4lg13UEFtOTkG18tcfxu', 'andrea-3', 1, 5, NULL, '', '4567894444', '70 Bowman St. \nSouth Windsor, CT 06074', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:58:20', '2018-04-03 08:58:20'),
(5, 'Emily', 'Emily', 'emily@student.com', '$2y$10$MF78x65dEl63Q2HpWBnCUOKC4LaOHQz.uJbR.H66MVsQUIVMO8f1.', 'emily-4', 1, 5, NULL, '', '1234567897', '4 Goldfield Rd. \nHonolulu, HI 96815', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:58:20', '2018-04-03 08:58:20'),
(6, 'Grace', 'Grace', 'grace@student.com', '$2y$10$awvw9A/DfjMvWk3VdQX2MuMHWy5ayu3MI4sQ4rv8MOFGEyQhaJY4e', 'grace-5', 1, 5, NULL, '', '7897897897', '44 Shirley Ave. \nWest Chicago, IL 60185', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:58:20', '2018-04-03 08:58:20'),
(7, 'Student', 'Student', 'student@student.com', '$2y$10$hHmeyuOtOyHjTOjQdqwUi..C6AULYdvCe2rOWKWlp7F9q2ImOXbEK', 'student-6', 1, 5, 10, '7.jpeg', '7897897897', 'This is my Test Address', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iVCI5KtM5CKqennWPZpB3TUuDmZqEKHmHpxGuLAq5NLbeqi1GHzsJQ8mqNbx', '{\"user_preferences\":{\"quiz_categories\":[1,2,3,4,5],\"lms_categories\":[1,2,3,4,5,6]}}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 08:59:59', '2018-04-03 12:43:54'),
(8, 'Jan', 'Jan', 'jan@student.com', '$2y$10$.e/ao7PXSa1eszDO/ZYEaeXDfUL66f//ItLCKgB.QjUMkFeIKXQK6', 'jan-7', 1, 5, 10, '', '7894567894', 'This is my Test Address', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 09:05:06', '2018-04-03 12:48:53'),
(9, 'Austin', 'Austin', 'austin@parent.com', '$2y$10$TQABeb1vsU3PK29AEM7aiuogH14wB5clEwoRhBMZfJdyWP5ITGotu', 'austin-8', 1, 6, NULL, '', '7894567894', 'This is my test Address', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 10:50:28', '2018-04-03 10:50:28'),
(10, 'Parent', 'Parent', 'parent@parent.com', '$2y$10$IQkk50EbTN5r9wCY8r5s0ees8CAWwS2fh3IR7YqUVgNe.S9z8bwEe', 'parent-9', 1, 6, NULL, '', '7897897897', 'This is my Test Address', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"user_preferences\":{\"quiz_categories\":[1,2,3,4,5],\"lms_categories\":[1,2,3,4,5,6]}}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 10:51:01', '2018-04-03 12:54:43'),
(11, 'Eric', 'Eric', 'eric@student.com', '$2y$10$/4CxPOrf2aKWQwFyMR.ETu/Jo1NINAwNED7wzRvQqU0lxpmab9L.2', 'eric-10', 1, 5, 10, '', '7897897897', 'This is Billing Address', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-03 12:53:19', '2018-04-03 12:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_family_member`
--

CREATE TABLE `user_family_member` (
  `user_id` int(11) NOT NULL,
  `user_fmember_id` int(11) NOT NULL,
  `user_fmember_name` varchar(50) NOT NULL,
  `user_fmember_age` varchar(50) NOT NULL,
  `user_fmember_gender` varchar(50) NOT NULL,
  `user_fmember_dob` varchar(50) NOT NULL,
  `user_fmember_relation` varchar(50) NOT NULL,
  `user_fmember_adhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_family_member`
--

INSERT INTO `user_family_member` (`user_id`, `user_fmember_id`, `user_fmember_name`, `user_fmember_age`, `user_fmember_gender`, `user_fmember_dob`, `user_fmember_relation`, `user_fmember_adhar`) VALUES
(1, 1, 'csdd dsc dsd', '4', 'Male', '2021-02-02', 'Mother', ''),
(1, 2, 'cxvvd sdc', '3', 'Male', '2019-11-08', 'Father', ''),
(2, 3, 'cfgvdf fdvdf', '43', 'Male', '2014-11-03', 'Wife', ''),
(4, 4, 'cvbfd ', '54', 'Male', '2020-02-12', 'Father', ''),
(4, 5, 'gdf', '13', 'Female', '2020-02-05', 'Father', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_ration_booking`
--

CREATE TABLE `user_ration_booking` (
  `user_id` int(11) NOT NULL,
  `ration_booking_id` int(11) NOT NULL,
  `ration_product_name` varchar(50) NOT NULL,
  `ration_product_quantity` varchar(50) NOT NULL,
  `ration_product_total` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `booking_status` varchar(50) NOT NULL DEFAULT 'pending',
  `allcate_status` varchar(255) NOT NULL DEFAULT 'not yet',
  `allocate_schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_ration_form_details`
--

CREATE TABLE `user_ration_form_details` (
  `user_id` int(11) NOT NULL,
  `user_local_name` varchar(50) NOT NULL,
  `user_adhar_name` varchar(50) NOT NULL,
  `user_adhar_no` varchar(50) NOT NULL,
  `user_mobile_no` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_dob` varchar(50) NOT NULL,
  `ration_number` varchar(25) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `profile_photo` varchar(50) NOT NULL,
  `user_status` varchar(11) NOT NULL DEFAULT 'Register',
  `head_of_family_name` varchar(50) NOT NULL,
  `head_of_family_adhar_name` varchar(50) NOT NULL,
  `head_of_family_age` varchar(50) NOT NULL,
  `head_of_family_dob` date NOT NULL,
  `head_of_family_gender` varchar(50) NOT NULL,
  `head_of_family_nationality` varchar(50) NOT NULL,
  `user_addreess1` varchar(100) NOT NULL,
  `user_addreess2` varchar(100) NOT NULL,
  `user_area` varchar(50) NOT NULL,
  `head_of_family_job` varchar(50) NOT NULL,
  `user_bank_name` varchar(50) NOT NULL,
  `user_branch_name` varchar(50) NOT NULL,
  `user_account_no` varchar(50) NOT NULL,
  `user_bank_ifsc_code` varchar(50) NOT NULL,
  `i_id` int(11) NOT NULL,
  `user_select_card_type` varchar(50) NOT NULL,
  `user_gas_cname` varchar(50) NOT NULL,
  `user_consumer_no` varchar(50) NOT NULL,
  `user_income_certificate` varchar(50) NOT NULL,
  `user_adhar_card_photo` varchar(50) NOT NULL,
  `user_pass_size_photo` varchar(50) NOT NULL,
  `user_sign_photo` varchar(50) NOT NULL,
  `user_family_photo` varchar(50) NOT NULL,
  `apply_rc_id` varchar(255) NOT NULL DEFAULT '0',
  `rc_date` datetime NOT NULL DEFAULT current_timestamp(),
  `verify_rc_status` varchar(255) NOT NULL DEFAULT 'Not Yet',
  `verify_rc_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ration_form_details`
--

INSERT INTO `user_ration_form_details` (`user_id`, `user_local_name`, `user_adhar_name`, `user_adhar_no`, `user_mobile_no`, `user_email`, `user_password`, `user_dob`, `ration_number`, `user_gender`, `profile_photo`, `user_status`, `head_of_family_name`, `head_of_family_adhar_name`, `head_of_family_age`, `head_of_family_dob`, `head_of_family_gender`, `head_of_family_nationality`, `user_addreess1`, `user_addreess2`, `user_area`, `head_of_family_job`, `user_bank_name`, `user_branch_name`, `user_account_no`, `user_bank_ifsc_code`, `i_id`, `user_select_card_type`, `user_gas_cname`, `user_consumer_no`, `user_income_certificate`, `user_adhar_card_photo`, `user_pass_size_photo`, `user_sign_photo`, `user_family_photo`, `apply_rc_id`, `rc_date`, `verify_rc_status`, `verify_rc_date`) VALUES
(1, 'deepali', '', '88787878787878', '8657966528', 'd@gmail.com', 'ddd', '2021-03-02', '2408597361', 'Female', '418350.jpg', 'Approved', 'deepali', 'deepali', '', '0000-00-00', '', '', 'nashik', 'nashik', 'Indira Nagar', 'job', 'bank of maharashtra', 'nashikrd', '9898989888', '454dasd', 0, '2', 'bhart gas', '4545444', '1561-BE_1.pdf', '7609.jpg', '883819.jpg', '596168.jpg', '54861-BE_1.pdf', '1', '2020-02-16 14:49:04', 'Not ', '2020'),
(2, 'rohini kor', '', '99898988989898', '9989898989', 'rohini@gmail.com', 'rrr', '2019-11-03', '5420639817', 'Male', '246044.jpeg', 'Verified', 'vdvdvSFSD', 'FDFDS', '', '0000-00-00', '', '', 'sfsdfndsj nfjsdn', 'enfjsdnf cqfndjndfj', 'jailroad', 'fdfds', 'fdfs', 'dssd', '4545454', '54545', 0, '1', 'dfgvds', 'gfddfvfd', '67111-67832-BE (1).pdf', '146358.jpeg', '811369.jpeg', '368318.png', '27405-75281-BE_1 (3).pdf', '1', '2020-02-17 12:06:07', 'Verified', '0'),
(3, 'sssssssd', '', '99899888888888', '9898998988', 's@gmail.com', 'sss', '2020-02-13', '', 'Female', '', 'Verified', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '1', '2020-02-18 12:35:17', 'Allocate', '2020-02-13'),
(4, 'dshjfsdk', '', '98989888888888', '8998888888', 'a@gmail.com', 'aaa', '2021-12-03', '4651093872', ' ', '', 'Verified', 'dfvsd', 'sdfsd', '', '0000-00-00', '', '', 'fdsd', 'sdfsd', 'jailroad', 'cdsdsf', 'dfsdf', 'fsd', '659', '55898', 0, '1', 'xcdvfd', 'sdfas', '27252-67832-BE.pdf', '638559.jpeg', '504076.png', '790339.png', '41686-94784-BE.pdf', '1', '2020-02-18 18:16:52', 'Not Yet', '2020-02-20'),
(5, 'fjdflkdfjdsjfk', '', '98989888888888', '8988999999', 'q@gmail.com', 'qqq', '2020-11-03', '', 'Male', '', 'Register', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '0', '2020-02-18 18:27:41', 'Not Yet', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `rationtype`
--
ALTER TABLE `rationtype`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `ration_details`
--
ALTER TABLE `ration_details`
  ADD PRIMARY KEY (`ration_id`);

--
-- Indexes for table `schems`
--
ALTER TABLE `schems`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_family_member`
--
ALTER TABLE `user_family_member`
  ADD PRIMARY KEY (`user_fmember_id`);

--
-- Indexes for table `user_ration_booking`
--
ALTER TABLE `user_ration_booking`
  ADD PRIMARY KEY (`ration_booking_id`);

--
-- Indexes for table `user_ration_form_details`
--
ALTER TABLE `user_ration_form_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rationtype`
--
ALTER TABLE `rationtype`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ration_details`
--
ALTER TABLE `ration_details`
  MODIFY `ration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schems`
--
ALTER TABLE `schems`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller_details`
--
ALTER TABLE `seller_details`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_family_member`
--
ALTER TABLE `user_family_member`
  MODIFY `user_fmember_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_ration_booking`
--
ALTER TABLE `user_ration_booking`
  MODIFY `ration_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_ration_form_details`
--
ALTER TABLE `user_ration_form_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
