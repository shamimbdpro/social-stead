-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2018 at 10:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialst_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `rolle` varchar(50) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `reset_pass` varchar(500) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` int(50) NOT NULL,
  `city` varchar(250) NOT NULL,
  `postal_code` int(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL,
  `skils` varchar(500) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twiteer` varchar(250) NOT NULL,
  `goggle` varchar(250) NOT NULL,
  `skype` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `created`, `last_login`, `rolle`, `user_name`, `password`, `reset_pass`, `address`, `phone`, `city`, `postal_code`, `title`, `about`, `skils`, `facebook`, `twiteer`, `goggle`, `skype`, `image`) VALUES
(12, 'Social', 'Stead', 'youremail@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', 'social.stead1', 'c1a6f268e114d9c71c8e3695ed2e0a84', '', '', 0, '', 0, 'Social Media Service', 'We can help to get more customer/audience  on your Linkedin account/page.We can give unlimited Linkedin followers,Likes,Share,Comments,Connections,Employers And Linkedin Group Member.Thanks.', 'Linkedin Like,Linkedin Followers,Linkedin Connections,Linkedin Comments,Group Member,Linkedin Employers,Buy Linkedin Service,How to buy unlimited Linkedin Like,How to buy unlimited Linkedin followers,How to buy unlimited Linkedin Connections,How to increase unlimited  Connections customer/audience  on my Linkedin account/page', '', '', '', '', '3818810745b27d068a7473.png'),
(13, 'Jagodish', 'Bairagi', 'jagodish391@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'jagodish391', 'c1a6f268e114d9c71c8e3695ed2e0a84', '', '', 0, '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) NOT NULL,
  `company_icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `company_icon`) VALUES
(1, '125215a1d47bc13178.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `company_logo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `company_logo`) VALUES
(1, '17583565785b27d294ef4eb.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`, `date`, `time`) VALUES
(27, 'Mamun Hossain', 'messgetest@gmail.com', 'test my msg', 'hei,,,,,test a message', 'June 7, 2018', '11:16 am'),
(28, 'Jagodish Bairagi', 'jagodishpppp@gmail.com', 'How to buy Like', 'Like', 'June 18, 2018', '10:01 pm'),
(29, 'Steve', 'steve.bizanalytics@gmail.com', 'LinkedIn company page employees', 'How much do you charge for this? I need 60 employees for my company page. I will supply the profiles for a few of them. ', 'July 1, 2018', '12:16 am');

-- --------------------------------------------------------

--
-- Table structure for table `online_activity`
--

CREATE TABLE `online_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `platform` varchar(250) NOT NULL,
  `activity` int(5) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `user_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online_activity`
--

INSERT INTO `online_activity` (`id`, `name`, `ip`, `agent`, `platform`, `activity`, `date`, `time`, `user_name`) VALUES
(1, '6', '::1', 'Chrome', 'Windows 8.1', 1, 'April 28, 2018', '10:36 am', 'Mamun4868'),
(3, '1', '192.140.254.216', 'Chrome', 'Windows 8.1', 1, 'June 4, 2018', '8:58 am', 'Rongdongbd'),
(4, '1', '192.140.254.155', 'Chrome', 'Windows 10', 1, 'June 5, 2018', '8:04 am', 'Rongdongbd'),
(5, '1', '192.140.254.241', 'Chrome', 'Windows 8.1', 1, 'June 7, 2018', '12:25 am', 'Rongdongbd'),
(6, '1', '192.140.254.216', 'Safari', 'Android', 1, 'June 7, 2018', '8:01 am', 'Rongdongbd'),
(7, '1', '192.140.254.216', 'Chrome', 'Windows 8.1', 1, 'June 7, 2018', '8:43 am', 'Rongdongbd'),
(8, '1', '192.140.254.241', 'Chrome', 'Windows 10', 1, 'June 7, 2018', '10:15 am', 'Rongdongbd'),
(9, '1', '192.140.254.216', 'Chrome', 'Windows 8.1', 1, 'June 7, 2018', '10:21 am', 'Rongdongbd'),
(14, '1', '192.140.254.216', 'Chrome', 'Windows 8.1', 1, 'June 7, 2018', '12:42 pm', 'Rongdongbd');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `txn_id` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `buyer_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `pr_id`, `price`, `qty`, `txn_id`, `url`, `buyer_email`) VALUES
(1, 46, 60, 1, '1', 'https://www.linkedin.com/groups/12077865', 'danielvalero@me.com'),
(2, 72, 80, 1, '2', 'https://www.linkedin.com/company/digital-uniq-plc/', 'steve.bizanalytics@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `product_id`, `txn_id`, `payment_gross`, `currency_code`, `payer_email`, `payment_status`, `date`, `time`, `qty`) VALUES
(1, 0, 0, '', 60.00, '', '', '', 'July 1, 2018', '4:17 am', 0),
(2, 0, 0, '', 80.00, '', '', '', 'July 1, 2018', '5:01 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE `paypal` (
  `id` int(11) NOT NULL,
  `b_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`id`, `b_email`) VALUES
(1, 'jagodish392@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'gdfsgdsfgdf', 'gfsdggdfgfg', 1212.00, '1'),
(2, 'fsdafsdfsd', 'gfdgdfg', 22.00, '1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `url` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `icon`, `s_name`, `url`, `status`) VALUES
(3, 'alico-linkedin2', 'LInkedin Marketing', 'linkedin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_pack`
--

CREATE TABLE `service_pack` (
  `s_id` int(11) NOT NULL,
  `c_id` int(10) NOT NULL,
  `su_id` int(10) NOT NULL,
  `pack_name` varchar(250) NOT NULL,
  `pack_price` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_pack`
--

INSERT INTO `service_pack` (`s_id`, `c_id`, `su_id`, `pack_name`, `pack_price`, `status`, `img`) VALUES
(14, 3, 6, 'LINKEDIN 250 FOLLOWER', 15, 0, '9618556985b00b752d275b.jpg'),
(15, 3, 6, 'LINKEDIN 500 FOLLOWER', 25, 0, '6430739075b00b7dfd717e.jpg'),
(16, 3, 6, 'LINKEDIN 1000  FOLLOWER', 40, 0, '19348194525b00b88857817.jpg'),
(17, 3, 6, 'LINKEDIN 2500 FOLLOWER', 100, 0, '15089034985b00b8a5c3ff5.jpg'),
(18, 3, 6, 'LINKEDIN 5000 FOLLOWER', 180, 0, '16838800885b00b8c4e4503.jpg'),
(19, 3, 6, 'LINKEDIN 10000 FOLLOWER', 350, 0, '14917723125b00b8df35728.jpg'),
(20, 3, 6, 'LINKEDIN 20000 FOLLOWER', 600, 0, '14735912335b00b9003c44e.jpg'),
(22, 3, 8, 'LINKEDIN 100 POST LIKE', 10, 1, '19107223675b036fa1189f9.jpg'),
(23, 3, 8, 'LINKEDIN 250 POST LIKE', 20, 1, '997718345b073816b0a5d.jpg'),
(25, 3, 8, 'LINKEDIN 1000 POST LIKE', 50, 0, '20949344655b073849e6e08.jpg'),
(26, 3, 8, 'LINKEDIN 2500 POST LIKE', 120, 0, '19254268165b07386629992.jpg'),
(27, 3, 8, 'LINKEDIN 5000 POST LIKE', 220, 0, '11580788865b0738d114438.jpg'),
(28, 3, 8, 'LINKEDIN 10000 POST LIKE', 400, 0, '7073551055b0738e108c4d.jpg'),
(29, 3, 8, 'LINKEDIN 25000 POST LIKE', 1000, 0, '20211217645b0738f0809bf.jpg'),
(34, 3, 16, 'LINKEDIN 100 CONNECTIONS', 10, 1, '6838154225b2de7b7dc1ad.jpg'),
(35, 3, 16, 'LINKEDIN 250 CONNECTIONS', 20, 1, '10339613295b2de7d143ef2.jpg'),
(36, 3, 16, 'LINKEDIN 500 CONNECTIONS', 35, 1, '6508799265b2de7e3c7c0a.jpg'),
(37, 3, 16, 'LINKEDIN 1000 CONNECTIONS', 60, 0, '5888206515b2de83413dc5.jpg'),
(38, 3, 16, 'LINKEDIN 1500 CONNECTIONS', 80, 0, '4930784595b2de865ed2a3.jpg'),
(39, 3, 16, 'LINKEDIN 2000 CONNECTIONS', 100, 0, '8717015675b2de88231e40.jpg'),
(40, 3, 16, 'LINKEDIN 2500 CONNECTIONS', 115, 0, '16197443535b2de8b7d9579.jpg'),
(41, 3, 16, 'LINKEDIN 3000 CONNECTIONS', 130, 0, '4007007755b2de8e24dd25.jpg'),
(42, 3, 17, 'LINKEDIN 100 Group Member', 10, 1, '6600811035b2de982cc99f.jpg'),
(44, 3, 17, 'LINKEDIN 250 GROUP MEMBER', 20, 1, '7778057405b2dea22821b7.jpg'),
(46, 3, 17, 'LINKEDIN 1000 GROUP MEMBER', 60, 0, '14122862785b2dea5e56484.jpg'),
(47, 3, 17, 'LINKEDIN 1500 GROUP MEMBER', 80, 0, '12105453835b2dea7a0c655.jpg'),
(48, 3, 17, 'LINKEDIN 2000 GROUP MEMBER', 100, 0, '9559747095b2deac4c5e2f.jpg'),
(49, 3, 17, 'LINKEDIN 2500 GROUP MEMBER', 120, 0, '10077936945b2deb0824b03.jpg'),
(50, 3, 17, 'LINKEDIN 3000 GROUP MEMBER', 150, 0, '11220441665b2deb312fdf6.jpg'),
(51, 3, 18, 'LINKEDIN 100 employees', 20, 1, '4014001875b2dec30acc0c.jpg'),
(52, 3, 18, 'LINKEDIN 250 EMPLOYEES', 35, 1, '21161349605b2dec701819e.jpg'),
(53, 3, 18, 'LINKEDIN 500 EMPLOYEES', 60, 1, '20016945485b2dec918de3a.jpg'),
(54, 3, 18, 'LINKEDIN 1000 EMPLOYEES', 100, 1, '18719422155b2decd85c333.jpg'),
(55, 3, 18, 'LINKEDIN 1500 EMPLOYEES', 140, 1, '20198179575b2decfdf2922.jpg'),
(56, 3, 18, 'LINKEDIN 2000 EMPLOYEES', 185, 1, '18544470425b2ded2ee510f.jpg'),
(57, 3, 18, 'LINKEDIN 2500 EMPLOYEES', 170, 1, '8767396185b2ded63c957d.jpg'),
(58, 3, 18, 'LINKEDIN 3000 EMPLOYEES', 220, 1, '5660167945b2ded99cf1d8.jpg'),
(65, 19, 21, 'LINKEDIN 1 SHARE', 1, 1, '12409798785b2fc931be1bd.jpg'),
(66, 19, 25, 'LINKEDIN 5 SHARE', 1, 1, '8394620915b2fcbe953b91.jpg'),
(67, 3, 26, 'LINKEDIN 25 SHARE', 5, 1, '8486774525b32a152a71fa.jpg'),
(68, 3, 26, 'LINKEDIN 50 SHARE', 10, 1, '12393097225b32a16ca7bd4.jpg'),
(69, 3, 26, 'LINKEDIN 100 SHARE', 15, 1, '15885845085b32a1900ab00.jpg'),
(70, 3, 26, 'LINKEDIN 200 SHARE', 25, 1, '7564304795b32a1b9edb18.jpg'),
(72, 3, 16, 'LINKEDIN 100 EMPLOYEE', 80, 1, '8556528685b388dda7413a.jpg'),
(73, 3, 19, 'Real Linkedin 50 Like', 5, 1, '3285967635b389a117cc75.jpg'),
(74, 3, 19, 'Real Linkedin 100 Like', 10, 1, '8419770635b389a2d7b284.jpg'),
(75, 3, 19, 'Real Linkedin 150 Like', 14, 1, '839873165b389a568ea2f.jpg'),
(76, 3, 19, 'Real Linkedin 200 Like', 18, 1, '21210620075b389a8381314.jpg'),
(77, 3, 19, 'Real Linkedin 250 Like', 23, 1, '15593743125b389aa53ea32.jpg'),
(78, 3, 19, 'Real Linkedin 300 Like', 27, 1, '21295169015b389aced2fe6.jpg'),
(79, 3, 19, 'Real Linkedin 350 Like', 30, 1, '14492748425b389b2c689e0.jpg'),
(81, 3, 8, 'LINKEDIN 350 POST LIKE', 25, 1, '20738866345b389c156c548.jpg'),
(82, 3, 17, 'LINKEDIN 350 GROUP MEMBER', 25, 1, '4250154205b389c84c31c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `url` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `cat_id`, `name`, `type`, `status`, `url`, `icon`) VALUES
(6, 3, 'LINKDIN', 'FOLLOWER', 1, 'linkedin-floowoer', ''),
(8, 3, 'LINKDIN', 'Post Like', 1, 'linkedin-postlike', ''),
(16, 3, 'LINKEDIN', 'Connections', 1, '', ''),
(17, 3, 'LINKEDIN', 'GROUP MEMBER', 1, '', ''),
(19, 3, 'LINKEDIN', 'LINKEDIN 100% real Like', 1, '', ''),
(26, 3, 'LINKEDIN', 'Article or post share', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `store_setting`
--

CREATE TABLE `store_setting` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `store_url` varchar(100) NOT NULL,
  `store_address` varchar(100) NOT NULL,
  `store_telephone` varchar(100) NOT NULL,
  `store_phone` varchar(100) NOT NULL,
  `store_email` varchar(100) NOT NULL,
  `supprot_email` varchar(255) NOT NULL,
  `exchange` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `Twitter` varchar(250) NOT NULL,
  `Google` varchar(250) NOT NULL,
  `Skype` varchar(250) NOT NULL,
  `Pinterest` varchar(250) NOT NULL,
  `Linkedin` varchar(250) NOT NULL,
  `Vimeo` varchar(250) NOT NULL,
  `some_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_setting`
--

INSERT INTO `store_setting` (`store_id`, `store_name`, `store_url`, `store_address`, `store_telephone`, `store_phone`, `store_email`, `supprot_email`, `exchange`, `facebook`, `Twitter`, `Google`, `Skype`, `Pinterest`, `Linkedin`, `Vimeo`, `some_info`) VALUES
(1, 'cyclestoreeight', 'http://cyclestoreeight.com/', 'shaymolli,dhaka,bangladesh', '+220 254254', '+880 1748167158', 'info@cyclestore.com', 'support@cyclestore.com', '3day', 'https://www.facebook.com', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_activity`
--
ALTER TABLE `online_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paypal`
--
ALTER TABLE `paypal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_pack`
--
ALTER TABLE `service_pack`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_setting`
--
ALTER TABLE `store_setting`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `online_activity`
--
ALTER TABLE `online_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paypal`
--
ALTER TABLE `paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_pack`
--
ALTER TABLE `service_pack`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `store_setting`
--
ALTER TABLE `store_setting`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
