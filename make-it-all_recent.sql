-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 02:49 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `make-it-all`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) UNSIGNED NOT NULL,
  `line_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `line_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `line_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `line_1`, `line_2`, `line_3`, `province`, `postal_code`, `country_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, '123 Fake Street', '', NULL, 'Oxbridge', 'TM6 0FV', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, '456 Non-existent Av. ', NULL, NULL, 'East Weston', 'EW9 4RF', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, '789 Some-place Lane', 'Somewhere', 'Over-there', 'Somewhere in China', 'xxx xxx', 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'A house', 'A street', NULL, 'Berlin', 'GE4 TG5', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Dead End rd.', '', NULL, 'A city?', 'SA7 XX9', 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Head Office', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'East Weston - it - all', 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'China - it -all', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Germany - it - all', 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Saudi - it - all', 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` int(11) UNSIGNED NOT NULL,
  `operator_id` int(11) UNSIGNED DEFAULT NULL,
  `caller_id` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `operator_id`, `caller_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 2, 6, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(2, 4, 8, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(3, 4, 7, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(4, 4, 7, 4, '2017-02-01 00:04:00', 4, '2017-02-01 00:04:00'),
(5, 2, 3, 2, '2017-02-01 00:05:00', 2, '2017-02-01 00:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `call_problems`
--

CREATE TABLE `call_problems` (
  `id` int(11) UNSIGNED NOT NULL,
  `call_id` int(11) UNSIGNED NOT NULL,
  `problem_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `call_problems`
--

INSERT INTO `call_problems` (`id`, `call_id`, `problem_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 1, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(2, 2, 2, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(3, 4, 3, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(4, 3, 3, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(5, 5, 1, 2, '2017-02-01 00:01:30', 2, '2017-02-01 00:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iso2` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso3` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso_num` int(3) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso2`, `iso3`, `iso_num`, `updated_at`, `created_at`) VALUES
(1, 'UK', 'GB', 'GBR', 826, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(2, 'China', 'CN', 'CHN', 156, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(3, 'Germany', 'DE', 'DEU', 276, '2017-02-01 00:00:00', '2017-02-01 00:00:00'),
(4, 'Saudi Arabia', 'SA', 'SAU', 682, '2017-02-01 00:00:00', '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Sales', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Technical Support', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Marketing', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'PR', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Customer Service', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Helpdesk', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Managment', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Manufacturing', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Cleaning', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Logistics', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) UNSIGNED NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `describable_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `describable_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `body`, `language_id`, `describable_type`, `describable_id`, `author_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'All things to do with Windows\r\n', 1, 'specializations', 1, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Stuff to do with Word or Excel, not much else really', 1, 'specializations', 2, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Anything to do with Registry errors or the like', 1, 'specializations', 3, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'If it prints, or doesn\'t as the case may be then I can fix it.', 1, 'specializations', 4, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Stuff to do with driver\'s ', 1, 'specializations', 5, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Problem recorded and specialist assigned', 3, 'calls', 1, 2, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(7, 'Problem added to database, specialist notified', 4, 'calls', 2, 4, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(8, 'Problem recorded, solution provided', 4, 'calls', 3, 4, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(9, 'New Problem recorded, couldn\'t solve over phone', 4, 'calls', 4, 4, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(10, 'Problem recorded, solution required very fast', 3, 'calls', 5, 2, 2, '2017-02-01 00:01:30', 2, '2017-02-01 00:01:30'),
(11, 'Initial call, details recorded', 3, 'callproblems', 1, 2, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(12, 'Problem details recorded, specialist assigned, problem yet to be solved', 4, 'callproblems', 2, 4, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(13, 'Problem recorded, normal procedure followed, caller frequently gets same problem, perhaps training required', 4, 'callproblems', 3, 4, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(14, 'Follow up call, first solution didn\'t work , second solution provided and worked', 4, 'callproblems', 4, 4, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(15, 'Follow up call, first solution worked, records updated, specialist notified ', 3, 'callproblems', 5, 2, 2, '2017-02-01 00:01:30', 2, '2017-02-01 00:01:30'),
(16, 'Can\'t get mic to pick sound up, on machine running Linux', 3, 'problems', 1, 2, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(17, 'On a Linux machine, can\'t get the printer to print anything', 3, 'problems', 2, 4, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(18, 'The monitor won\'t turn on, running on a Windows machine, thinks that may have something to do with it', 4, 'problems', 3, 4, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00'),
(19, 'Turn the device off and on again', 1, 'solutions', 1, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(20, 'Try hitting it a few times', 1, 'solutions', 2, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(21, 'Not really sure, sorted itself out', 1, 'solutions', 3, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(22, 'Restart the program and try again', 1, 'solutions', 4, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(23, 'Cast it into the fire from whence it came', 1, 'solutions', 5, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(24, 'If it\'s a Linux problem, of any kind, then it\'s my problem', 1, 'specializations', 6, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(25, 'I can fix Ubuntu problems, nothing else', 1, 'specializations', 7, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(26, 'If you\'ve lost a file then I should be able to get it back', 1, 'specializations', 8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(27, 'All network issues and problems no matter the kind', 1, 'specializations', 9, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(28, 'Corrupted user profiles specifically, nothing else please', 1, 'specializations', 10, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(29, 'Reinstall the software if you can, otherwise a technical specialist will', 1, 'solutions', 6, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(30, 'Specialist dispatched to diagnose/fix the problem in person', 1, 'solutions', 7, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(31, 'Clear the web cache, instructions given', 1, 'solutions', 8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(32, 'Flush the DNS server, instructions already given', 1, 'solutions', 9, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(33, 'Turn the power on at the socket, try again', 1, 'solutions', 10, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hardware_type_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id`, `name`, `manufacturer`, `model`, `hardware_type_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Monitor 01', 'Helios', 'FV435', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Hard Drive 01', 'Notgoogle', 'GP1', 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Mic 01', 'ERRRmmm', 'HUH 3000', 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Keyboard 01', 'Maybe-a-keyboard-manufacture', 'MaK01', 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Printer 01', 'Best printers EU', 'WOW 32', 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Telephone 01', 'Tel. Inc.', 'C1', 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Photocopier 01', 'Copy Plus', 'PhotoC 01', 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Scanner 01', 'Scanners for you', 'Sc1', 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Mouse 01', 'Mouse\'y', 'M1', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'CPU 01', 'CPU\'Z', 'CP1', 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hardware_serial_numbers`
--

CREATE TABLE `hardware_serial_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hardware_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hardware_serial_numbers`
--

INSERT INTO `hardware_serial_numbers` (`id`, `number`, `hardware_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'SDFV-ASDFCC-WSEF', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'ASDCWE-565FB-5645HVD', 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'ASC6-6GHF4-345TEFG', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'ASC4545-4534TDFGX', 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, '123SDDW3-12ESDZX-QWD23-QASDW-SCXQ23', 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'AWD-24EQWDDE-21QRE', 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'D3-2DWQD32-DFEWF-213', 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'GF43-FG43-F231', 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'F-423-F323-23RFWEF3', 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, '23RRDF-D23D32-3-DF23DF23', 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hardware_types`
--

CREATE TABLE `hardware_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hardware_types`
--

INSERT INTO `hardware_types` (`id`, `name`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Monitor', 9, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Keyboard', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Mouse', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Hard-Drive', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Mic', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Printer', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Scanner', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Photocopier', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Telephone', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'CPU', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `user_id`, `start_date`, `end_date`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, '2017-02-08 07:17:16', '2017-02-17 13:33:27', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 5, '2017-02-14 00:00:00', '2017-02-25 12:20:14', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 6, '2017-02-10 09:26:17', '2017-02-28 10:17:39', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 5, '2017-02-27 08:20:18', '2017-03-12 14:00:21', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 10, '2017-02-25 12:19:15', '2017-06-21 07:18:11', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `rtl`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'English', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Mandarin', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Cantonese', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'German', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Arabic', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `language_personnel`
--

CREATE TABLE `language_personnel` (
  `id` int(11) UNSIGNED NOT NULL,
  `preferred` tinyint(1) NOT NULL DEFAULT '0',
  `personnel_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `language_personnel`
--

INSERT INTO `language_personnel` (`id`, `preferred`, `personnel_id`, `language_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 4, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 1, 5, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 1, 8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 1, 9, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 1, 10, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `language_users`
--

CREATE TABLE `language_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `preferred` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `language_users`
--

INSERT INTO `language_users` (`id`, `preferred`, `user_id`, `language_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 4, 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 1, 5, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 0, 4, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 0, 4, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 1, 3, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 1, 1, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 1, 2, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 1, 6, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 1, 7, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 1, 8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(11, 1, 8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(12, 0, 10, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(13, 0, 10, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(14, 0, 10, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(15, 1, 10, 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) UNSIGNED NOT NULL,
  `personnel_identifier` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_id` int(11) UNSIGNED DEFAULT NULL,
  `department_id` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `personnel_identifier`, `name`, `job_title`, `email`, `telephone_number`, `branch_id`, `department_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, '165165', 'Alice', 'Senior Operator', 'alice@make.com', '0531234122', 1, 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, '124456', 'Bob', 'Operator', 'bob@make.com', '01234463623', 2, 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, '456678', 'Mark', 'Secretary', 'mark@make.com', '0146431246', 3, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, '973568', 'Jack', 'Accountant', 'jack@make.com', '01234014045', 4, 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'B09867', 'James', 'Cleaner', 'James@make.com', '0123402350345', 5, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'M785675', 'Sarah', 'Admin', 'sarah@make.com', '012305214', 1, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'GHN456', 'Laura', 'Specialist', 'laura@make.com', '012404601234', 2, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'BO33', 'Bossman', 'Boss', 'boss@make.com', '012405125', 3, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'ASC235', 'Generic Employee 1', 'Personnel Manager', 'ge1@make.com', '012405324', 4, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, '23576BBE', 'Tiffany', 'Head of Marketing', 'tiffany@make.com', '012405301', 5, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(11, '1452124', 'Tom', 'Operator', 'tom@make.com', '0123054322', 1, 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(12, 'GHT2343', 'Greg', 'Lead Admin', 'greg@make.com', '0145632412', 2, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(13, 'GHJ234756', 'Lily', 'Temp Admin', 'lily@make.com', '012344235', 3, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(14, '12435423', 'Rob', 'Specialist', 'Rob@make.com', '013403521', 4, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(15, 'E2356', 'Alex', 'Senior Specialist', 'alex@make.com', '03450763354', 5, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` int(11) UNSIGNED NOT NULL,
  `hardware_id` int(11) UNSIGNED DEFAULT NULL,
  `software_id` int(11) UNSIGNED DEFAULT NULL,
  `specialization_id` int(11) UNSIGNED DEFAULT NULL,
  `submitted_by` int(11) UNSIGNED DEFAULT NULL,
  `assigned_to` int(11) UNSIGNED DEFAULT NULL,
  `worked_on` tinyint(1) NOT NULL DEFAULT '0',
  `solution_id` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `hardware_id`, `software_id`, `specialization_id`, `submitted_by`, `assigned_to`, `worked_on`, `solution_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 3, 3, 6, 2, 10, 1, 3, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(2, 5, 3, 4, 6, 9, 0, 0, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00'),
(3, 1, 1, 1, 5, 8, 1, 5, 4, '2017-02-01 00:03:00', 4, '2017-02-01 00:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `problem_tagging`
--

CREATE TABLE `problem_tagging` (
  `id` int(11) UNSIGNED NOT NULL,
  `problem_tag_id` int(11) UNSIGNED NOT NULL,
  `problem_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `problem_tagging`
--

INSERT INTO `problem_tagging` (`id`, `problem_tag_id`, `problem_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 9, 1, 2, '2017-02-01 00:01:00', 2, '2017-02-01 00:01:00'),
(2, 3, 3, 2, '2017-02-01 00:03:00', 2, '2017-02-01 00:03:00'),
(3, 6, 2, 4, '2017-02-01 00:02:00', 4, '2017-02-01 00:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `problem_tags`
--

CREATE TABLE `problem_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `problem_tags`
--

INSERT INTO `problem_tags` (`id`, `name`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'File Deleted', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Fire', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'No Power', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Program Uninstalled', 9, '2017-02-08 08:20:20', 9, '2017-02-02 00:00:00'),
(5, 'Wrong Password', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'No Ink', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'CPU Overheating', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Crashing on Startup', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Software Needs Updating', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Uninstalled Software', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `version`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Windows', '10', 10, '2017-02-08 06:15:00', 1, '2017-02-12 12:22:00'),
(2, 'macOS', 'X', 9, '2017-02-22 08:18:20', 1, '2017-02-14 06:16:34'),
(3, 'Linux', 'Good Question', 9, '2017-02-22 08:17:00', 7, '2017-02-12 11:19:00'),
(4, 'Photoshop', '1.2.5', 6, '2017-02-14 09:12:25', 9, '2017-02-05 08:18:00'),
(5, 'Word', '2016', 1, '2017-02-01 11:36:25', 10, '2017-02-02 07:14:10'),
(6, 'Excel', '1.09', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'GitHub', '9', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'IE', 'X', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Sage', '5.1', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Chrome', '6.1e', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `software_license_keys`
--

CREATE TABLE `software_license_keys` (
  `id` int(11) UNSIGNED NOT NULL,
  `soft_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `software_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `software_license_keys`
--

INSERT INTO `software_license_keys` (`id`, `soft_key`, `software_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'AWD3-SDC3FSED3-SDSX', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'ASC3R3-3REF3-FXFC3E', 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'E23E-23D3D32-RE', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, '23E-23E-23-5', 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'F3TR-3T43-T3-45', 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'AWD-AWD-AWD211E', 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'WEF-345-34T-ERG', 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'ERG-34T-ETG54GER-5234', 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'TY45-G4E5-G54-4G', 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, '2-3R23-4T45Y-QAD23', 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(11) UNSIGNED NOT NULL,
  `provided_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `provided_by`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `solution_tagging`
--

CREATE TABLE `solution_tagging` (
  `id` int(11) UNSIGNED NOT NULL,
  `solution_tag_id` int(11) UNSIGNED NOT NULL,
  `solution_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `solution_tagging`
--

INSERT INTO `solution_tagging` (`id`, `solution_tag_id`, `solution_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 3, 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 5, 4, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 4, 2, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 2, 5, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 1, 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 6, 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 10, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 9, 7, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 7, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 8, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `solution_tags`
--

CREATE TABLE `solution_tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `solution_tags`
--

INSERT INTO `solution_tags` (`id`, `name`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Power Cycle', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Physical Persuasion ', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Unknown', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Program Restart', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Purged by fire', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Reinstall Software', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Send Specialist Out To Fix', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Clear Cache', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Flush DNS Server', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Turn On At Socket', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name`, `parent_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Windows Operating Systems', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Microsoft Word/Excel', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Windows Registry Problems', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Printer Malfunctions', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Driver Configuration', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Linux', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Ubuntu', 6, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'File Recovery', 1, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Network Configuration', 0, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Corrupted User Profiles', 3, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `specialization_users`
--

CREATE TABLE `specialization_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `specialization_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `specialization_users`
--

INSERT INTO `specialization_users` (`id`, `specialization_id`, `user_id`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 1, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 4, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 5, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 3, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 10, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 6, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 7, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 2, 8, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 8, 10, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 9, 9, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_digest` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `current_sign_in_at` datetime DEFAULT NULL,
  `current_sign_in_ip` int(10) DEFAULT NULL,
  `last_sign_in_at` datetime DEFAULT NULL,
  `last_sign_in_ip` int(10) DEFAULT NULL,
  `personnel_id` int(11) UNSIGNED DEFAULT NULL,
  `is_specialist` tinyint(1) NOT NULL DEFAULT '0',
  `is_operator` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_lboro_admin` tinyint(1) NOT NULL DEFAULT '0',
  `last_seen_at` datetime DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_digest`, `current_sign_in_at`, `current_sign_in_ip`, `last_sign_in_at`, `last_sign_in_ip`, `personnel_id`, `is_specialist`, `is_operator`, `is_admin`, `is_lboro_admin`, `last_seen_at`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Henry', 'henry@make.com', 'pass123', '2017-02-01 01:01:01', 1254685934, '2017-02-01 00:00:00', 1238547965, NULL, 0, 0, 0, 1, '2017-02-01 01:01:01', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(2, 'Alice', 'alice@make.com', 'pass124', '2017-02-08 01:09:06', 1234521546, '2017-02-07 06:25:19', 1245652354, 1, 0, 1, 0, 0, '2017-02-08 01:09:06', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(3, 'Bob', 'bob@make.com', 'pass125', '2017-02-08 06:17:14', 2147483647, '2017-02-02 12:19:16', 2147483647, 2, 0, 1, 0, 0, '2017-02-08 06:17:14', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(4, 'Tom', 'tom@make.com', 'pass654', '2017-02-03 11:19:00', 2147483647, '2017-02-01 13:29:26', 2147483647, 11, 0, 1, 0, 0, '2017-02-03 11:19:00', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(5, 'Greg', 'greg@make.com', 'pass4568', NULL, NULL, '2017-02-02 07:19:13', 1255654245, 12, 0, 0, 1, 0, '2017-02-02 07:19:13', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(6, 'Sarah', 'sarah@make.com', 'pass1568', NULL, NULL, '2017-02-12 03:19:00', 2147483647, 6, 0, 0, 1, 0, '2017-02-12 03:19:00', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(7, 'Lily', 'lily@make.com', 'pass875', NULL, NULL, NULL, NULL, 13, 0, 0, 1, 0, NULL, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(8, 'Rob', 'rob@make.com', 'pass685', '2017-02-10 06:15:12', 2147483647, '2017-02-10 06:14:12', 2147483647, 14, 1, 0, 0, 0, '2017-02-10 06:15:12', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(9, 'Laura', 'laura@make.com', 'pass014', NULL, NULL, NULL, NULL, 7, 1, 0, 0, 0, NULL, 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00'),
(10, 'Alex', 'alex@make.com', 'pass415263', '2017-02-12 06:14:09', 1258998574, '2017-02-07 07:16:00', 1887493525, 15, 1, 0, 0, 0, '2017-02-12 06:14:09', 1, '2017-02-01 00:00:00', 1, '2017-02-01 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operator_id` (`operator_id`),
  ADD KEY `caller_id` (`caller_id`);

--
-- Indexes for table `call_problems`
--
ALTER TABLE `call_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `call_id` (`call_id`),
  ADD KEY `problem_id` (`problem_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `describable_type` (`describable_type`),
  ADD KEY `describable_id` (`describable_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hardware_type_id` (`hardware_type_id`);

--
-- Indexes for table `hardware_serial_numbers`
--
ALTER TABLE `hardware_serial_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hardware_id` (`hardware_id`);

--
-- Indexes for table `hardware_types`
--
ALTER TABLE `hardware_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_personnel`
--
ALTER TABLE `language_personnel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnel_id` (`personnel_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `language_users`
--
ALTER TABLE `language_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personnel_id` (`personnel_identifier`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hardware_id` (`hardware_id`),
  ADD KEY `software_id` (`software_id`),
  ADD KEY `specialization_id` (`specialization_id`),
  ADD KEY `submitted_by` (`submitted_by`),
  ADD KEY `assigned_to` (`assigned_to`),
  ADD KEY `solution_id` (`solution_id`);

--
-- Indexes for table `problem_tagging`
--
ALTER TABLE `problem_tagging`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_tag_id` (`problem_tag_id`),
  ADD KEY `problem_id` (`problem_id`);

--
-- Indexes for table `problem_tags`
--
ALTER TABLE `problem_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_license_keys`
--
ALTER TABLE `software_license_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provided_by` (`provided_by`);

--
-- Indexes for table `solution_tagging`
--
ALTER TABLE `solution_tagging`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solution_tag_id` (`solution_tag_id`),
  ADD KEY `solution_id` (`solution_id`);

--
-- Indexes for table `solution_tags`
--
ALTER TABLE `solution_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `specialization_users`
--
ALTER TABLE `specialization_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialization_id` (`specialization_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `personnel_id` (`personnel_id`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `call_problems`
--
ALTER TABLE `call_problems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hardware_serial_numbers`
--
ALTER TABLE `hardware_serial_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hardware_types`
--
ALTER TABLE `hardware_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language_personnel`
--
ALTER TABLE `language_personnel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language_users`
--
ALTER TABLE `language_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `problem_tagging`
--
ALTER TABLE `problem_tagging`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `problem_tags`
--
ALTER TABLE `problem_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `software_license_keys`
--
ALTER TABLE `software_license_keys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `solution_tagging`
--
ALTER TABLE `solution_tagging`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `solution_tags`
--
ALTER TABLE `solution_tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `specialization_users`
--
ALTER TABLE `specialization_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
