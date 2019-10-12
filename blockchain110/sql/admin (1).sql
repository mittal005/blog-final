-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 04:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `parentcategory` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `parentcategory`, `description`) VALUES
(6, 'pondichery', 'fdfdfd', 'credit-card.png', 'fdfdfd', 'fdfdfd'),
(7, 'moshin', 'dsds', '', 'News', 'dsdssdsd'),
(8, 'moshin', 'dsds', '', 'News', 'dsdssdsd'),
(9, 'moshin', 'dsds', '', 'News', 'dsdssdsd'),
(10, 'moshin', 'dsds', '', 'News', 'dsdssdsd'),
(11, 'moshin', 'dsds', '', 'News', 'dsdssdsd'),
(12, 'sdfsdfds', 'rer', '', 'News', 'rtrtrt'),
(13, 'sdfsdfds', 'rer', '', 'News', 'rtrtrt'),
(14, 'ssssd', 'ssss', '', 'News', 'sssdd'),
(15, 'moshin', 'ewewew', '', 'News', 'qqqq'),
(16, 'moshin', 'ewewew', '', 'News', 'qqqq'),
(17, 'wqqwwq', 'wqwqwq', '', 'select category', 'wqwqwq'),
(18, 'wqqwwq', 'wqwqwq', '', 'select category', 'wqwqwq'),
(19, 'moshin', 'ewewew', '', 'select category', 'qqqq'),
(20, 'moshin', 'ewewew', '', 'select category', 'qqqq'),
(21, 'moshin', 'ewewew', '', 'select category', 'qqqq'),
(22, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(23, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(24, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(25, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(26, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(27, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(28, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(29, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(30, 'baranee', 'ewewew', '', 'moshin', 'qqqq'),
(31, 'pondichery', '', '', 'baranee', ''),
(32, 'pondichery', '', '', 'baranee', ''),
(33, 'pondichery', '', '', 'baranee', ''),
(34, 'pondichery', '', '', 'baranee', ''),
(35, 'moshin', 'ewewew', '', 'News', 'aaaa'),
(36, 'moshin', 'ewewew', '', 'News', 'aaaa'),
(37, 'moshin', 'ewewew', '', 'News', 'aaaa'),
(38, 'ewewew', 'ewewew', '', 'baranee', 'aaaa'),
(39, 'moshin', 'ewewew', '', 'moshin', 'zsss'),
(40, 'moshin', 'ewewew', '', 'moshin', 'zsss'),
(41, 'moshin', 'ewewew', '', 'moshin', 'zsss'),
(42, 'ewewew', 'ewewew', '', 'moshin', 'adwsdz'),
(43, 'moshin', 'ewewew', '', 'moshin', 'fszdss'),
(44, 'sdfsdfds', 'ssss', '', 'moshin', 'xz'),
(45, 'sdfsdfds', 'ssss', '', 'moshin', 'xz'),
(46, 'sdfsdfds', 'ssss', '', 'moshin', 'xz'),
(47, 'moshin', 'ewewew', '', 'baranee', 'dcvx'),
(48, 'sdfsdfds', 'ssss', '', 'baranee', 'Szcs'),
(49, 'easrt', 'ewewew', '', 'baranee', 'ZXxzc'),
(50, 'easrt', 'ewewew', '', 'baranee', 'ZXxzc'),
(51, 'india', 'ewewew', '', 'baranee', 'dadsad'),
(52, 'mittal', 'ewewew', '', 'baranee', 'dsdsdsds'),
(53, 'mittal', 'ewewew', '', 'baranee', 'dsdsdsds'),
(54, 'sdfsdfds', 'cx', '', 'baranee', 'cxcxcxcx'),
(55, 'baranee', '', '', 'moshin', ''),
(56, 'baranee', '', '', 'baranee', ''),
(57, 'd', 'd', '', 'moshin', 'dddddddddd'),
(58, 'mttal', 'e', '', 'ewewew', 'ffffffffffffffffffe'),
(59, 'mttal', 'e', '', 'ewewew', 'ffffffffffffffffffe'),
(60, 'mttal', 'e', '', 'ewewew', 'ffffffffffffffffffe'),
(61, 'mttal', 'e', '', 'ewewew', 'ffffffffffffffffffe'),
(62, 'm', 'm', '', 'select category', 'm'),
(63, 'm', 'm', '', 'select category', 'm'),
(64, 'hegdhjkh', 'sufyxhiksjf', '', 'easrt', 'skjfxbjkcdnmxvc'),
(65, 'm', 'm', '', 'ewewew', 'eaaaaa'),
(66, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(67, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(68, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(69, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(70, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(71, 'dddf', 'dddddd', '', 'mittal', 'dddddddddddd'),
(72, 't', 't', '', 'mittal', 'tttttttttttttttttttttt'),
(73, '3er', 'dddddddd', '', 'india', 'ddddddddddddd'),
(74, '3er', 'dddddddd', '', 'india', 'ddddddddddddd'),
(75, '3er', 'dddddddd', '', 'india', 'ddddddddddddd'),
(76, 't', 'f', '', 'select category', 'f'),
(77, 't', 'f', '', 'select category', 'f'),
(78, 'd', 'd', '', 'mttal', 'd'),
(79, 'd', 'd', '', 'mttal', 'd'),
(82, 'mit', 'ddddd.sb', '', 'mittal', 'ddddddddddddddd'),
(84, 'hg5', 'v', '', 'd', 'vvvvvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `FilePath` varchar(1000) NOT NULL,
  `FileName` varchar(1000) NOT NULL,
  `LoggedTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `FilePath`, `FileName`, `LoggedTime`) VALUES
(1, 'Upload', 'bulb.png', '2019-09-27 05:35:10.000000'),
(2, 'Upload', 'gas.png', '2019-09-27 05:36:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `LoggedTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `logoutTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `signed_in` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `LoggedTime`, `logoutTime`, `signed_in`) VALUES
(3, 'admin', 'admin', '2019-10-11 04:15:19.000000', '2019-10-11 04:15:34.000000', '1'),
(4, 'teekz', 'teekz', '2019-10-09 03:53:01.000000', '2019-10-09 04:01:57.000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `medialibrary`
--

CREATE TABLE `medialibrary` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medialibrary`
--

INSERT INTO `medialibrary` (`id`, `user_id`, `username`, `image`) VALUES
(1, 0, 'william', 'bsnl.png'),
(2, 0, 'william', 'bsnl.png'),
(3, 0, 'william', 'bsnl.png'),
(4, 0, 'william', 'bsnl.png'),
(5, 0, 'william', 'airtel-1.png'),
(6, 0, 'william', 'airtel-1.png'),
(7, 0, 'william', 'debit.jpg'),
(8, 0, 'william', 'debit.jpg'),
(9, 0, 'william', 'debit.jpg'),
(10, 0, 'william', 'motelku_full (3).psd'),
(11, 0, 'william', ''),
(12, 0, 'william', ''),
(13, 0, 'william', 'motelku_full (3).psd'),
(14, 0, 'william', ''),
(15, 0, 'william', ''),
(16, 0, 'william', ''),
(17, 0, 'william', 'motelku_full (3).psd'),
(18, 0, 'william', 'motelku_full (3).psd'),
(19, 0, 'william', 'airtel.jpg'),
(20, 0, 'william', 'vodafone1.jpg'),
(21, 0, 'ajay', 'airtel.jpg'),
(22, 0, 'ajay', 'airtel.jpg'),
(23, 0, 'william', 'brand-vouchers.png'),
(24, 0, 'william', 'amusement-parks.png'),
(25, 0, 'ajithkumar', 'airtel.jpg'),
(26, 0, 'ajithkumar', 'amusement-parks.png'),
(27, 0, 'ajithkumar', 'amusement-parks.png'),
(28, 0, 'ajithkumar', 'airtel-1.png'),
(29, 0, 'ajithkumar', 'airtel-1.png'),
(30, 0, 'ajithkumar', 'brand.png'),
(31, 0, 'new', 'airtel-1.png'),
(32, 0, 'admin', 'admin index.png'),
(33, 0, 'admin', 'admin index.png'),
(34, 0, 'admin', '87802967-ethereum-cryptocurrency-ethereum-logo-cry'),
(35, 0, 'admin', '87802967-ethereum-cryptocurrency-ethereum-logo-cry'),
(36, 0, 'admin', 'admin index.png'),
(37, 0, 'mittal', 'cart.png'),
(38, 0, 'mittal', 'book fees.png');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `NickName` varchar(100) NOT NULL,
  `Biographicalinfo` varchar(1000) NOT NULL,
  `ProfilePicture` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `createdTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updatedTime` varchar(50) NOT NULL,
  `LoggedTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `logoutTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `signed_in` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`id`, `username`, `email`, `firstname`, `lastname`, `NickName`, `Biographicalinfo`, `ProfilePicture`, `password`, `role`, `createdTime`, `updatedTime`, `LoggedTime`, `logoutTime`, `signed_in`) VALUES
(16, 'mittal', 'santhiyamittal555q@gmail.com', 'santhiya', 'mittal', 'fhdgkj    ', '', '', 'zzz', 'Administrator', '2019-09-29 19:39:56.000000', '0000-00-00 00:00:00.000000', '2019-10-09 03:58:39.112262', '2019-10-09 03:58:39.112262', '1'),
(19, 'admin550', 'santhiyamittal5554@gmail.com', 'santhiya', 'mittal', '', '', '', 'qqq', 'Administrator', '2019-10-01 12:36:19.895984', '0000-00-00 00:00:00.000000', '2019-10-09 03:58:39.112262', '2019-10-09 03:58:39.112262', ''),
(20, 'admin605', 'baraneedharan777@gmail.com', 'sasasas', 'sasssa', 'mit', '', '', 'qqq', 'Administrator', '2019-10-01 12:36:33.525251', '0000-00-00 00:00:00.000000', '2019-10-09 03:58:39.112262', '2019-10-09 03:58:39.112262', ''),
(21, 'ajithkumar', 'baraneedharan77@gmail.com', 'sasasasqqqqq', 'sasssa', 'aaaa', '', '', '', 'Administrator', '2019-10-07 19:40:31.000000', '0000-00-00 00:00:00.000000', '2019-10-09 03:58:39.112262', '2019-10-09 03:58:39.112262', '1'),
(25, 'admin1', 'baraneedharan77@gmail.com', 'sasasasq', 'dharan', 'aaaa', 'aaaaaa', '', 'qq', 'Administrator', '2019-10-09 04:59:39.342702', '', '2019-10-09 05:28:28.000000', '2019-10-09 05:50:41.000000', '1'),
(26, 'admin2', 'baraneedharan77@gmail.com', 'sasasasqqzzzzzzzzzz', 'sadsddsa', '', '', '', 'qqq', 'Administrator', '2019-10-09 05:07:52.526857', '', '2019-10-09 05:07:52.526857', '2019-10-09 05:07:52.526857', ''),
(27, 'admin3', 'baraneedharan77@gmail.com', 'sasasasqqzzzzzzzzzz', 'sasssa', '', '', '', 'qqq', 'Administrator', '2019-10-09 06:31:35.315291', '', '2019-10-09 06:31:35.315291', '2019-10-09 06:31:35.315291', ''),
(28, '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00.000000', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', ''),
(29, 'mittal', '', 'santhiya', 'mittal', '', '', '', '805652', 'Administrator', '2019-10-10 13:54:10.791159', '', '2019-10-11 12:52:17.000000', '2019-10-11 12:52:08.000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_id` text NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `draftTime` varchar(50) NOT NULL,
  `publishTime` varchar(50) NOT NULL,
  `Visibility` varchar(50) NOT NULL,
  `publihedOn` varchar(50) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryType` varchar(100) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `url` varchar(50) NOT NULL,
  `seo_schema` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `createdDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `username`, `user_id`, `Title`, `Content`, `Status`, `draftTime`, `publishTime`, `Visibility`, `publihedOn`, `categoryName`, `categoryType`, `seo_title`, `description`, `url`, `seo_schema`, `image`, `createdDate`) VALUES
(1, 'mittal1', '21', 'addpost4ssss954', '<p>sdasdz</p>', 'Draft', 'October 11, 2019, 9:18 am', 'October 8, 2019, 6:30 pm', 'Private', '', 'baranee', 'baranee', 'fdfdfd', 'sassasaf', 'iofngifidj', 'fdfdfddf', 'airtel.jpg', ''),
(7, 'new', '10', 'draft3', '<p>adadasd</p>', 'Publish', 'October 9, 2019, 2:59 pm', 'October 11, 2019, 9:18 am', 'Private', '2019-10-31', 'baranee', 'wqqwwq', 'uihuhfg', 'sasasa', 'ewwewe', 'fdfdfddf', 'airtel-1.png', ''),
(8, 'admin', '3', 'dddddddddddddddddd', '<p>dddddddddddddddddddddddddd<strong>ddddddddddddddddddddddd<em>ddddddddddddddddd<u>ddddddddddddddddddddddddddddddddddddddddddddd</u></em></strong></p>', 'Publish', '', 'October 10, 2019, 3:16 pm', 'Public', '2019-10-11', 'dddddddddddddddd', 'mittal', 'dddddddddddddddddddddddddd', 'ddddddddddddddddddddddddddd', 'ddddddddddddd', 'dddddddddddddddddd', 'admin index.png', ''),
(10, 'admin', '3', '12345', '<p>mittal is a good boy<strong>&nbsp;sahshja<em>&nbsp;sagjhdgsa<u>s sagjhsgjha</u></em></strong></p>', 'Publish', '', 'October 10, 2019, 7:23 pm', 'Public', '2019-10-09', 'mit77', 'moshin', 'mit', 'teekz', 'pages', 'pages1', '87802967-ethereum-cryptocurrency-ethereum-logo-cry', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Status` varchar(1000) NOT NULL,
  `draftTime` varchar(50) NOT NULL,
  `publishTime` varchar(50) NOT NULL,
  `Visibility` varchar(100) NOT NULL,
  `Format` varchar(100) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryType` varchar(1000) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `url` varchar(100) NOT NULL,
  `seo_schema` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `onlyDate` date NOT NULL DEFAULT current_timestamp(),
  `PublishedOn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `username`, `Title`, `Content`, `Status`, `draftTime`, `publishTime`, `Visibility`, `Format`, `categoryName`, `categoryType`, `seo_title`, `description`, `url`, `seo_schema`, `image`, `Date`, `onlyDate`, `PublishedOn`) VALUES
(141, 0, 'admin', 'addpost', '<p>sasdsda</p>', 'Draft', 'October 8, 2019, 11:00 am', '', 'Public', 'Quote', 'baranee', 'baranee', 'uihuhfg', 'sasd', 'iofngifidj', 'fdfdfddf', 'brand-vouchers.png', '2019-10-08 05:30:31.521412', '2019-10-08', ''),
(142, 0, 'admin', 'addpost', '<p>sasdsda</p>', 'Draft', 'October 8, 2019, 11:02 am', '', 'Public', 'Quote', 'baranee', 'baranee', 'uihuhfg', 'sasd', 'iofngifidj', 'fdfdfddf', 'brand-vouchers.png', '2019-10-08 05:32:19.516243', '2019-10-08', ''),
(143, 0, 'admin', 'october', '<p>sffwqfw</p>', 'Publish', '', 'October 8, 2019, 11:02 am', 'Public', 'Picture', 'dsds', 'baranee', 'uihuhfg', 'sadsddsa', 'fddffd', 'onjfgioijgf', 'bikes.png', '2019-10-08 05:32:59.812372', '2019-10-08', ''),
(144, 0, 'william', 'wiilaiam draft', '<p>sdsdadsa</p>', 'Draft', 'October 8, 2019, 11:39 am', '', 'Public', 'Picture', 'baranee', 'moshin', 'sasadsda', 'dsdsadsa', 'dsadasdsa', 'dsadsasad', 'arrow.png', '2019-10-08 06:09:41.398393', '2019-10-08', ''),
(145, 0, 'william', 'draft7', '<p>vzcvxcxvcvx</p>', 'Publish', '', 'October 8, 2019, 11:51 am', 'Private', 'Link', 'baranee', 'wqqwwq', 'uihuhfg', 'cvxcvxcvx', 'cvxcxcvx', 'cxcxcx', 'bsnl.png', '2019-10-08 06:21:14.390794', '2019-10-08', ''),
(146, 0, 'william', 'draft7', '<p>vzcvxcxvcvx</p>', 'Publish', '', 'October 8, 2019, 12:14 pm', 'Private', 'Link', 'baranee', 'wqqwwq', 'uihuhfg', 'cvxcvxcvx', 'cvxcxcvx', 'cxcxcx', 'bsnl.png', '2019-10-08 06:44:16.575689', '2019-10-08', ''),
(147, 0, 'william', 'draft7', '<p>vzcvxcxvcvx</p>', 'Publish', '', 'October 8, 2019, 12:15 pm', 'Private', 'Link', 'baranee', 'wqqwwq', 'uihuhfg', 'cvxcvxcvx', 'cvxcxcvx', 'cxcxcx', 'bsnl.png', '2019-10-08 06:45:48.782682', '2019-10-08', ''),
(148, 0, 'william', 'draft7', '<p>vzcvxcxvcvx</p>', 'Publish', '', 'October 8, 2019, 12:16 pm', 'Private', 'Link', 'baranee', 'wqqwwq', 'uihuhfg', 'cvxcvxcvx', 'cvxcxcvx', 'cxcxcx', 'bsnl.png', '2019-10-08 06:46:28.801389', '2019-10-08', ''),
(149, 0, 'william', '', '', 'Publish', '', 'October 8, 2019, 12:16 pm', '', '', '', 'Parent Category', '', '', '', '', 'airtel-1.png', '2019-10-08 06:46:50.944235', '2019-10-08', ''),
(150, 0, 'william', '', '', 'Publish', '', 'October 8, 2019, 12:17 pm', '', '', '', 'Parent Category', '', '', '', '', 'airtel-1.png', '2019-10-08 06:47:24.950884', '2019-10-08', ''),
(151, 0, 'william', '', '', 'Draft', 'October 8, 2019, 12:20 pm', '', '', '', '', 'Parent Category', '', '', '', '', 'debit.jpg', '2019-10-08 06:50:13.487350', '2019-10-08', ''),
(152, 0, 'william', '', '', 'Draft', 'October 8, 2019, 12:27 pm', '', '', '', '', 'Parent Category', '', '', '', '', 'debit.jpg', '2019-10-08 06:57:20.704175', '2019-10-08', ''),
(153, 0, 'william', '', '', 'Draft', 'October 8, 2019, 12:28 pm', '', '', '', '', 'Parent Category', '', '', '', '', 'debit.jpg', '2019-10-08 06:58:53.070252', '2019-10-08', ''),
(154, 0, 'william', '', '', 'Publish', '', 'October 8, 2019, 1:54 pm', '', '', '', 'Parent Category', '', '', '', '', 'motelku_full (3).psd', '2019-10-08 08:24:10.770504', '2019-10-08', ''),
(157, 0, 'william', 'october', '', 'Publish', '', 'October 8, 2019, 2:04 pm', '', 'Quote', '', 'Parent Category', '', '', '', '', 'motelku_full (3).psd', '2019-10-08 08:34:46.567426', '2019-10-08', ''),
(164, 0, 'william', '', '', 'Publish', '', 'October 8, 2019, 2:24 pm', '', '', '', 'Parent Category', '', '', '', '', 'motelku_full (3).psd', '2019-10-08 08:54:47.760797', '2019-10-08', ''),
(165, 0, 'william', '', '', 'Draft', 'October 8, 2019, 2:25 pm', '', '', '', '', 'Parent Category', '', '', '', '', 'motelku_full (3).psd', '2019-10-08 08:55:18.525197', '2019-10-08', ''),
(166, 0, 'william', 'new title', '', 'Publish', '', 'October 8, 2019, 2:34 pm', '', '', '', 'Parent Category', '', '', '', '', 'airtel.jpg', '2019-10-08 09:04:07.289081', '2019-10-08', ''),
(167, 15, 'william', 'addpost', '', 'Publish', '', 'October 8, 2019, 2:45 pm', '', '', '', 'Parent Category', '', '', '', '', 'vodafone1.jpg', '2019-10-08 09:15:02.203745', '2019-10-08', ''),
(168, 22, 'ajay', '', '', 'Publish', '', 'October 8, 2019, 2:51 pm', '', '', '', 'Parent Category', '', '', '', '', 'airtel.jpg', '2019-10-08 09:21:54.079216', '2019-10-08', ''),
(169, 22, 'ajay', '', '', 'Publish', '', 'October 8, 2019, 2:52 pm', '', '', '', 'Parent Category', '', '', '', '', 'airtel.jpg', '2019-10-08 09:22:06.214630', '2019-10-08', ''),
(170, 15, 'william', 'october', '', 'Publish', '', 'October 8, 2019, 2:55 pm', '', '', '', 'Parent Category', '', '', '', '', 'brand-vouchers.png', '2019-10-08 09:25:29.913035', '2019-10-08', ''),
(171, 15, 'william1', 'mit', '', 'Draft', 'October 8, 2019, 2:50 am', 'October 8, 2019, 2:55 pm', '', '', '', 'Parent Category', '', '', '', '', 'amusement-parks.png', '2019-10-09 12:05:39.741608', '2019-10-08', ''),
(172, 3, 'admin', 'dddddddddddddddd', '<p>dddddddddddd<strong>dddddddddddddddddddddddddd<em>dddddddddd<u>ddddddddddddddddddd</u></em></strong></p>', 'Publish', '', '10-10-19', 'Public', 'Standard', 'ddddddddd', 'mittal', 'dddddddddddddddddddddd', 'dddddddddddddddddddddd', 'dddddddddddddddddddddddddddddd', 'dddddddddddddddddddddd', 'admin index.png', '2019-10-10 09:44:03.726251', '2019-10-10', ''),
(173, 3, 'admin', 'mittal', '<p>dhasghdgj&nbsp;<strong>dasddddddas&nbsp;<em>eeeeeeeeeeeeeeeeeeeee&nbsp;<u>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvveasd</u></em></strong></p>', 'Publish', '', '10-10-19', 'Public', 'Standard', 'mitt', 'wqqwwq', 'mittt', 'agsdjkhasjd', 'www.google.com', 'mittal', 'admin index.png', '2019-10-10 14:02:25.769808', '2019-10-10', ''),
(174, 10, 'mittal', 'Blockchain in digital identity', '<p style=\"text-align: justify;\"><em>Blockchain in digital identity</em></p><p style=\"text-align: justify; font-size: 20px; color: red;\"><em>blockchain for real estate</em></p><h1 style=\"text-align: center;\"><span style=\"font-size: 20px; color: red;\"><u>BLOCKCHAIN IN VOTING</u></span></h1><p><br></p>', 'Publish', '', '11-10-19', '', '', '', 'Parent Category', 'Blockchain in digital identity', 'Blockchain in digital identity', 'http://www.blockchainfirm.io/blog/', '', 'cart.png', '2019-10-11 05:37:44.302513', '2019-10-11', ''),
(175, 10, 'mittal', 'Blockchain in digital identity1', '<p>blcoichain firm digtal</p>', 'Publish', '', '11-10-19', '', '', '', 'Parent Category', 'Blockchain in digital identity', 'Blockchain in digital identity', 'htp://www.blockchainfirm.io/blog/', '', 'book fees.png', '2019-10-11 11:26:25.068522', '2019-10-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `quickdraft`
--

CREATE TABLE `quickdraft` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickdraft`
--

INSERT INTO `quickdraft` (`id`, `title`, `content`, `time`) VALUES
(66, 'jjjj', 'qqqq', '2019-09-23 12:17:43.036637'),
(67, 'oooo', 'qqq', '2019-09-23 12:17:59.442238'),
(68, 'oooo', 'qqq', '2019-09-23 12:18:06.311691'),
(69, 'oooo', 'qqq', '2019-09-23 12:19:59.809499'),
(70, 'adsssaas', 'assaas', '2019-09-23 12:20:12.931884'),
(71, 'adsssaas', 'assaas', '2019-09-23 12:20:16.446380'),
(72, 'huihuh', 'mkmkm', '2019-09-23 13:25:20.829330'),
(73, 'huihuh', 'mkmkm', '2019-09-23 13:27:50.151265'),
(74, 'huihuh', 'mkmkm', '2019-09-23 13:43:43.711813'),
(75, 'huihuh', 'mkmkm', '2019-09-23 13:56:07.731469'),
(76, 'oooo', 'saas', '2019-09-23 14:00:15.222560'),
(77, 'qqqq', 'saas', '2019-09-23 14:00:45.479900'),
(78, 'qqqq', 'saas', '2019-09-23 14:00:59.962800'),
(79, 'jjjj', 'z', '2019-09-23 14:01:13.175456'),
(80, 'jjjj', 'z', '2019-09-23 14:01:38.622724'),
(81, 'oooo', 'aa', '2019-09-23 14:01:44.368724'),
(82, 'oijera', 'oina', '2019-09-23 14:02:10.497441'),
(83, 'jjjj', 'aaaa', '2019-09-24 05:35:37.265724'),
(84, 'jjjj', 'aaaa', '2019-09-24 05:36:02.226736'),
(85, 'jjjj', 'aaaa', '2019-09-24 05:36:40.801011'),
(86, 'jjjj', 'aaaa', '2019-09-24 05:45:34.110071'),
(87, 'blockchain', 'dvasdsfad', '2019-09-24 05:46:23.546872'),
(88, 'blockchain', 'qqqqq', '2019-09-26 15:41:04.258644'),
(89, 'oooo', 'q', '2019-09-26 15:55:44.256035'),
(90, 'oooo', 'q', '2019-09-26 15:56:37.300706'),
(91, 'blockchain', 'q', '2019-09-26 15:56:49.082763'),
(92, 'php', 'php', '2019-09-26 15:57:06.513987'),
(93, 'blockchain', 'aaa', '2019-09-26 18:14:20.437798'),
(94, 'blockchain', 'qqqq', '2019-09-28 09:57:53.761838'),
(95, 'blockchain', 'qqqq', '2019-10-01 09:53:34.977176'),
(96, 'october', 'sasasasa', '2019-10-01 09:59:07.507117'),
(97, 'october', 'sasasasa', '2019-10-01 10:00:15.714818'),
(98, 'blockchain1', 'aassa', '2019-10-01 10:00:21.672662'),
(99, 'blockchain1', 'aassa', '2019-10-01 10:05:20.720615'),
(100, 'blockchain1', 'aassa', '2019-10-01 10:06:14.527910'),
(101, 'blockchain1', 'aassa', '2019-10-01 10:07:43.648847'),
(102, 'sxf', 'dsedzsd', '2019-10-09 16:49:13.993997'),
(103, 'mit', 'teekz', '2019-10-10 19:19:52.737822'),
(104, 'dddd', 'dddd', '2019-10-11 09:51:41.373201'),
(105, 'mittal', 'santhiya', '2019-10-11 09:53:12.996105'),
(106, 'x', 'x', '2019-10-11 10:18:05.404509'),
(107, 'x', 'x', '2019-10-11 10:18:43.724632'),
(108, 'x', 'x', '2019-10-11 10:19:27.564530'),
(109, 'x', 'x', '2019-10-11 10:20:08.302859'),
(110, 'x', 'x', '2019-10-11 10:24:58.294727'),
(111, 'x', 'x', '2019-10-11 10:25:18.979635'),
(112, 'mi', 'mi', '2019-10-11 10:25:41.517418'),
(113, 'mi', 'mi', '2019-10-11 10:25:49.479742');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `add_new_tag` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `image`, `slug`, `parent_category`, `description`, `add_new_tag`) VALUES
(1, 'moshin', '', 'ewewew', 'News', 'nfijfr', ''),
(2, 'ewewew', '', 'ewewew', 'News', 'szszsz', ''),
(3, 'sdfsdfds', '', 'ewewew', 'News', 'znikzj', ''),
(4, 'dddsds', '', 'ewewew', 'News', 'znkxzmkmxc', ''),
(5, 'ewewew', '', 'ongiojnfrg', 'News', 'nfwoniofevnfe', '');

-- --------------------------------------------------------

--
-- Table structure for table `texteditor`
--

CREATE TABLE `texteditor` (
  `id` int(10) NOT NULL,
  `textcontent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texteditor`
--

INSERT INTO `texteditor` (`id`, `textcontent`) VALUES
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, 'fddffdss'),
(48, '<u><i>xxxxxxx</i></u>'),
(49, '<u>aaaaaaa</u>'),
(50, '<u>aaaaaaa</u>'),
(51, '<u>aaaaaaa</u>'),
(52, '<u>aaaaaaa</u>'),
(53, '<u>aaaaaaa</u>'),
(54, '<i>qqqqqq</i>'),
(55, '<i>zzzzzzzzzzz</i>'),
(56, '<i>zzzzzzzzzzz</i>'),
(57, '<i>zzzzzzzzzzz</i>'),
(58, 'qqqq'),
(59, 'qqqq'),
(60, 'qqqq'),
(61, '<u>aaaaa</u>'),
(62, '<i>eeee</i>'),
(63, '<i>eeee</i>'),
(64, '<u>rrrr</u>'),
(65, '<u>rrrr</u>'),
(66, 'ttttt'),
(67, 'ttttt'),
(68, 'ttttt'),
(69, '<u>zzzzz</u>'),
(70, '<u>zzzzz</u>'),
(71, '<i>kkkk</i>'),
(72, '<i>kkkk</i>'),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, 'edit'),
(82, ''),
(83, ''),
(84, ''),
(85, 'qqqqqqq'),
(86, '1111q'),
(87, '1111q'),
(88, '1111q'),
(89, 'qqqqq'),
(90, 'aaaa'),
(91, 'aaaa'),
(92, 'aaaa'),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, '<p><em>qqqq</em></p>'),
(117, '<p><em>qqqq</em></p>'),
(118, '<p><u>kgkgkgkg</u></p>'),
(119, ''),
(120, '<p><u>kgkgkgkg</u></p>'),
(121, '<p><strong>xcxccx</strong></p>'),
(122, '<p><strong>xcxccx</strong></p>'),
(123, '<p><img src=\"blob:http://localhost/2e457947-6841-4030-941f-f1715f7223dd\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>'),
(124, '<p><img src=\"blob:http://localhost/2e457947-6841-4030-941f-f1715f7223dd\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>'),
(125, '<p><img src=\"blob:http://localhost/2e457947-6841-4030-941f-f1715f7223dd\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>'),
(126, '<p><img src=\"blob:http://localhost/2e457947-6841-4030-941f-f1715f7223dd\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>'),
(127, '<p><em>aaaa</em></p>'),
(128, '<p><u>sssss</u></p>'),
(129, '<p><u>kgkgkg</u></p>'),
(130, '<p><u>kgkgkg</u></p>'),
(131, '<p><img src=\"blob:http://localhost/7c5dd67d-d933-4f48-bbbd-f1b65410f764\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tinymce`
--

CREATE TABLE `tinymce` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webimages`
--

CREATE TABLE `webimages` (
  `WID` int(11) NOT NULL,
  `Text` varchar(40) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webimages`
--

INSERT INTO `webimages` (`WID`, `Text`, `Image`) VALUES
(1, '', '1570008593airtel-1.png'),
(2, '', '1570008950idea.jpg'),
(3, '', '1570009845arrow.png'),
(4, '', '1570014561internet-banking.png'),
(5, '', '1570074979debit.jpg'),
(6, '', '1570169628internet-banking.png'),
(7, '', '1570510060airtel-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medialibrary`
--
ALTER TABLE `medialibrary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickdraft`
--
ALTER TABLE `quickdraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texteditor`
--
ALTER TABLE `texteditor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinymce`
--
ALTER TABLE `tinymce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webimages`
--
ALTER TABLE `webimages`
  ADD PRIMARY KEY (`WID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medialibrary`
--
ALTER TABLE `medialibrary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `quickdraft`
--
ALTER TABLE `quickdraft`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `texteditor`
--
ALTER TABLE `texteditor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tinymce`
--
ALTER TABLE `tinymce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `webimages`
--
ALTER TABLE `webimages`
  MODIFY `WID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
