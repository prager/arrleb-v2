-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 10:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrleb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id_sessions` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `session_id` varchar(128) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(42) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `logged` tinyint(4) NOT NULL DEFAULT '0',
  `date_logged_in` int(11) NOT NULL DEFAULT '0',
  `date_logged_out` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id_sessions`, `id_user`, `session_id`, `ip_address`, `logged`, `date_logged_in`, `date_logged_out`) VALUES
(9, 4, 'nohod8v7dg34uma15r319e4ngqlds6t3', '::1', 0, 1538541046, 0),
(10, 4, 'nohod8v7dg34uma15r319e4ngqlds6t3', '::1', 0, 1538541113, 0),
(11, 4, 'nohod8v7dg34uma15r319e4ngqlds6t3', '::1', 0, 1538541180, 0),
(12, 4, '0ev6ptnq2i5g9aue3aktknh86f0piemm', '::1', 0, 1538541275, 0),
(13, 4, '0ev6ptnq2i5g9aue3aktknh86f0piemm', '::1', 0, 1538541565, 0),
(14, 4, 'hdcm6talej9su2b2cbmvldko8ch89rv2', '::1', 1, 1538541611, 0),
(15, 1, 'hdcm6talej9su2b2cbmvldko8ch89rv2', '::1', 0, 1538541846, 0),
(16, 1, 'hdcm6talej9su2b2cbmvldko8ch89rv2', '::1', 0, 1538541893, 0),
(17, 1, '94157q3od1j4a3570qcnj104an51jp42', '::1', 0, 1538542099, 0),
(18, 1, '5cq9s5iqo3clii19t4rk584bhen12u12', '::1', 0, 1538542707, 0),
(19, 1, '5cq9s5iqo3clii19t4rk584bhen12u12', '::1', 0, 1538542736, 0),
(20, 1, '5cq9s5iqo3clii19t4rk584bhen12u12', '::1', 0, 1538542811, 1538543660),
(21, 1, 'sgn4q4tduf5v7qtc2rch8e0t52s6v22k', '::1', 0, 1538543708, 1538543710),
(22, 1, 'k6mbu8ut25ihqbdlch1srrd1r2dpi9rm', '::1', 0, 1538543921, 0),
(23, 1, 'k6mbu8ut25ihqbdlch1srrd1r2dpi9rm', '::1', 0, 1538543956, 0),
(24, 1, 'k6mbu8ut25ihqbdlch1srrd1r2dpi9rm', '::1', 0, 1538543975, 0),
(25, 1, 'k6mbu8ut25ihqbdlch1srrd1r2dpi9rm', '::1', 0, 1538544034, 0),
(26, 1, 'k6mbu8ut25ihqbdlch1srrd1r2dpi9rm', '::1', 0, 1538544051, 1538544246),
(27, 1, 'p85orpj712rira6k4toi7acceltkib9f', '::1', 0, 1538544277, 1538544299),
(28, 1, 'i4m3kc8le755u76qi3askooqc8nk4j8c', '::1', 0, 1538547720, 1538547734),
(29, 1, 'ks989l6f9j9r8t5chl7eefe29vt79mcl', '::1', 0, 1538593618, 1538593669),
(30, 1, 'ghlan112bj0nm4ee4ljur2rmm682tdts', '::1', 0, 1538595518, 0),
(31, 1, 'ghlan112bj0nm4ee4ljur2rmm682tdts', '::1', 0, 1538595628, 1538595637),
(32, 1, 'is1jpv6bp3n9melmbt0rsns015rtemvq', '::1', 0, 1538595719, 1538595725),
(33, 1, '73j9v6uanlc4aj4lddjm2d6q5rai6h84', '::1', 0, 1538595744, 1538595748),
(34, 1, 'vjt34b81nlr0sfimrmgmop53gik5ghj6', '::1', 0, 1538595874, 1538595886),
(35, 1, 'cbal55da5oo6hj9fpqbug8hoc4834bev', '::1', 0, 1538596077, 1538596082),
(36, 1, '0k0lr1c3du8ov6odscq0tcal49l9l79n', '::1', 0, 1538596730, 1538596751),
(37, 1, 'go003r23tatl5v1r8u5gvop8k5qd6ogn', '::1', 0, 1538605957, 1538606529),
(38, 1, 'kthc4o85d6u0bn6e3h6av47tfdpbcpr4', '::1', 0, 1538606544, 1538609753),
(39, 1, 'kfvt34hb44eqboit25l4l1elt0ibltq5', '::1', 0, 1538609761, 1538609873),
(40, 1, '24qsrfkk4vg54ar9fov34k90tgui0blo', '::1', 0, 1538609884, 1538610435),
(41, 1, 'puc8thauoetqeo40cnhe637bgbebr1fd', '::1', 0, 1538610530, 1538610550),
(42, 1, 'cejp30otanhgsgirgbk7saamo7rmlhac', '::1', 0, 1538611122, 1538611211),
(43, 1, 'o73j339bvvj8994ebh4g1rdbifg05do6', '::1', 0, 1538631085, 1538631110),
(44, 1, 'b2964pbm828ca45i4sch1948lbhjurp3', '::1', 0, 1538631174, 1538631196),
(45, 1, 'aakp866pk1j5l171eni5837t8qhjoe1q', '::1', 0, 1538631236, 1538631760),
(46, 1, '518deo77nm7h90mia65ahvd75j5qkq21', '::1', 0, 1538632314, 1538632320),
(47, 1, 'eqg6f5fodmahqacktuubmdvtlvt98pfa', '::1', 0, 1538632643, 1538632768),
(48, 1, 'npdfhs4ni53fij68q6fbp4mg6pstv4mh', '::1', 0, 1538687250, 1538687293),
(49, 1, 'vrchgdvq6u67av57qk30823kn1fr1aan', '::1', 0, 1538687322, 1538692462),
(50, 1, 'd6chsqvq1c9l7l1ek9heqv3kkr37u0rr', '::1', 0, 1538692637, 1538692802),
(51, 1, 'aa6m98a4e69taei5o7vf6e1ph4clu47d', '::1', 0, 1538692817, 1538692840),
(52, 5, 'ib3l7hamrimbab3q5vq8l9cmctqd5n60', '::1', 0, 1538693117, 1538693337),
(53, 5, '6tfukfk3au1gbp2oo873ogotgtp7d983', '::1', 0, 1538693352, 1538693362),
(54, 5, 'ko03emi04ihosvvi02137dm79rcvglh8', '::1', 0, 1538693426, 0),
(55, 5, 'cnha263jl7kucpd8k1rigeq3qn106aes', '::1', 0, 1538693806, 0),
(56, 5, 'cnha263jl7kucpd8k1rigeq3qn106aes', '::1', 0, 1538693866, 0),
(57, 5, 'cnha263jl7kucpd8k1rigeq3qn106aes', '::1', 0, 1538693920, 0),
(58, 5, 'cnha263jl7kucpd8k1rigeq3qn106aes', '::1', 0, 1538694037, 0),
(59, 5, 'cnha263jl7kucpd8k1rigeq3qn106aes', '::1', 0, 1538694093, 0),
(60, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694173, 0),
(61, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694186, 0),
(62, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694220, 0),
(63, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694239, 0),
(64, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694261, 0),
(65, 5, 'h890rgbpq81nice0v751tq6qq5p8ej28', '::1', 0, 1538694274, 0),
(66, 5, 'h58ebju54g195jfe6o7ca5saaon6gft5', '::1', 0, 1538694521, 0),
(67, 5, 'h58ebju54g195jfe6o7ca5saaon6gft5', '::1', 0, 1538694538, 0),
(68, 5, 'h58ebju54g195jfe6o7ca5saaon6gft5', '::1', 0, 1538694559, 1538694592),
(69, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694603, 0),
(70, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694629, 0),
(71, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694763, 0),
(72, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694782, 0),
(73, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694819, 0),
(74, 5, 'ihnuqasl6pk4bmkoqj56oluvuojdne1q', '::1', 0, 1538694840, 1538696995),
(75, 5, 'vfvtr0u35bb3v8f4n3mn4rpoin7a2ula', '::1', 0, 1538697009, 1538703571),
(76, 1, '1f2jm3hh0il41t7oks63rc2onqbte2gh', '::1', 0, 1538703643, 0),
(77, 1, 'j2q451kt6ksd1o0fp02i0m355veovqq8', '::1', 0, 1538714596, 0),
(78, 1, '2c70q4jcjtljank123snhaoggrb1enda', '::1', 0, 1538716894, 0),
(79, 1, '2i2uooiplv7heu1vk80vqmjh6je3lvhh', '::1', 0, 1538716960, 1538720161),
(80, 1, 'cbjo4bpe0gmbeh9amdtvueqs5fgifcrt', '::1', 1, 1538768436, 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `course` varchar(128) COLLATE utf8_bin NOT NULL,
  `date_from` int(11) NOT NULL,
  `date_to` int(11) NOT NULL,
  `fee` decimal(10,0) DEFAULT '0',
  `status` varchar(32) COLLATE utf8_bin NOT NULL,
  `location` varchar(1024) COLLATE utf8_bin NOT NULL,
  `details_url` varchar(512) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `course`, `date_from`, `date_to`, `fee`, `status`, `location`, `details_url`) VALUES
(10, '', 0, 0, '0', '', '', NULL),
(14, 'Amateur Radio Extra License Class', 1533765600, 1539208800, '8', 'In Session', 'The Salvation Army, 950 Clayton Road (at West St.), Concord ', 'http://www.mdarc.org/activities/education'),
(18, '', 0, 0, '0', '', '', ''),
(19, 'License Testing', 1539122400, 1539122400, '15', 'Open', 'The Salvation Army, 950 Clayton Road (at West St.), Concord ', 'http://www.mdarc.org/activities/education'),
(20, 'One-Day Technician License Class + Testing', 1539986400, 1539986400, '15', 'Open', 'PACIFICON 2018:  San Ramon Marriott 2600 Bishop Drive San Ramon  CA  94583', 'Class: https://tinyurl.com/y9ybrm3z and Exams: https://tinyurl.com/ybctm9w8');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

DROP TABLE IF EXISTS `new_user`;
CREATE TABLE `new_user` (
  `id_new_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_division` int(11) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `fname` varchar(64) COLLATE utf8_bin NOT NULL,
  `lname` varchar(64) COLLATE utf8_bin NOT NULL,
  `street` varchar(64) COLLATE utf8_bin NOT NULL,
  `city` varchar(64) COLLATE utf8_bin NOT NULL,
  `state_cd` varchar(6) COLLATE utf8_bin NOT NULL,
  `zip_cd` varchar(10) COLLATE utf8_bin NOT NULL,
  `phone` varchar(24) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `callsign` varchar(12) COLLATE utf8_bin DEFAULT 'none',
  `category` tinyint(4) NOT NULL,
  `team_name` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `league_name` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `division_name` varchar(128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id_new_user`, `id_team`, `id_league`, `id_division`, `role`, `fname`, `lname`, `street`, `city`, `state_cd`, `zip_cd`, `phone`, `email`, `callsign`, `category`, `team_name`, `league_name`, `division_name`) VALUES
(1, 0, 0, 0, 0, 'John', 'Doe', '123 Street St.', 'San Francisco', 'CA', '94108', '8889997777', 'doe@spearheads.com', '', 0, NULL, NULL, NULL),
(2, 0, 0, 0, 0, 'John', 'Doe', '123 Street St.', 'San Francisco', 'CA', '94108', '8889997777', 'doe@spearheads.com', '', 0, NULL, NULL, NULL),
(3, 0, 0, 0, 0, 'John', 'Doe', '123 Street St.', 'San Francisco', 'CA', '94108', '8889997777', 'doe@spearheads.com', '', 0, NULL, NULL, NULL),
(4, 0, 0, 0, 0, 'Tad', 'Sammer', '888 Sabre Street', 'Sabre Town', 'KS', '99447', '8889997777', 'sammer@sabers.com', '', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `type_code` tinyint(4) NOT NULL,
  `role` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pass` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lname` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `callsign` varchar(12) COLLATE latin1_general_ci DEFAULT 'none',
  `phone` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `street` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `state_cd` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `zip_cd` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `authorized` tinyint(4) NOT NULL DEFAULT '0',
  `verifystr` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `email_key` varchar(128) COLLATE latin1_general_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `type_code`, `role`, `pass`, `username`, `fname`, `lname`, `email`, `callsign`, `phone`, `street`, `city`, `state_cd`, `zip_cd`, `authorized`, `verifystr`, `email_key`, `active`) VALUES
(1, 99, 'MST', '$2y$12$OTeRu3bWj4Ll8QWqcdUyzeHv47wLEuBetjPGgdMTyAkFFEwkijiGS', 'hacq', 'Craig', 'Topper', 'topper@spearheads.com', 'KM6NFC', '8889997777', '123 Street St.', 'Chicago', 'AL', '99447', 1, 'http://localhost/mdarc/index.php/public_ctl/confirm_reg/573f016b853c92b03f51adf9', '573f016b853c92b03f51adf9', 1),
(5, 1, 'EDU', '$2y$12$4PnWvE3Hb8nBOtMni6pzwOoiVgZjtSlKblCAhyds0ehxxFsom65eG', 'homer', 'Tad', 'Sammer', 'sammer@sabers.com', '', '8889997777', '888 Sabre Street', 'Sabre Town', 'KS', '99447', 1, 'http://localhost/arrleb/index.php/public_ctl/confirm_reg/619fa4fd00affac15218d440', '619fa4fd00affac15218d440', 0),
(4, 0, NULL, '$2y$12$genmVbBXZI05e0LBu95T.e8uKinn2jHpjctENLW9xuCDz/aUQ14Um', 'hector', 'John', 'Doe', 'doe@spearheads.com', '', '8889997777', '123 Street St.', 'San Francisco', 'CA', '94108', 0, 'http://localhost/arrleb/index.php/public_ctl/confirm_reg/da9e75bd133304e176165a61', 'da9e75bd133304e176165a61', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_1_tbl`
--

DROP TABLE IF EXISTS `user_1_tbl`;
CREATE TABLE `user_1_tbl` (
  `id_user_1_tbl` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL DEFAULT '',
  `lname` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(32) NOT NULL DEFAULT '',
  `street` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(128) NOT NULL DEFAULT '',
  `state_cd` varchar(2) NOT NULL DEFAULT '',
  `zip_cd` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_1_tbl`
--

INSERT INTO `user_1_tbl` (`id_user_1_tbl`, `id_user`, `fname`, `lname`, `username`, `email`, `phone`, `street`, `city`, `state_cd`, `zip_cd`) VALUES
(1, 1, 'Craig', 'Topper', 'hacq', 'topper@spearheads.com', '8889997777', '123 Street St.', 'Chicago', 'AL', '99447');

-- --------------------------------------------------------

--
-- Table structure for table `user_5_tbl`
--

DROP TABLE IF EXISTS `user_5_tbl`;
CREATE TABLE `user_5_tbl` (
  `id_user_5_tbl` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL DEFAULT '',
  `lname` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(32) NOT NULL DEFAULT '',
  `street` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(128) NOT NULL DEFAULT '',
  `state_cd` varchar(2) NOT NULL DEFAULT '',
  `zip_cd` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_5_tbl`
--

INSERT INTO `user_5_tbl` (`id_user_5_tbl`, `id_user`, `fname`, `lname`, `username`, `email`, `phone`, `street`, `city`, `state_cd`, `zip_cd`) VALUES
(1, 5, 'Tad', 'Sammer', 'homer', 'sammer@sabers.com', '8889997777', '888 Sabre Street', 'Wichita', 'KS', '99447');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `id_user_types` int(11) NOT NULL,
  `type_code` tinyint(4) NOT NULL,
  `description` varchar(32) COLLATE utf8_bin NOT NULL,
  `code_str` varchar(4) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id_user_types`, `type_code`, `description`, `code_str`) VALUES
(1, 99, 'master', 'MST'),
(2, 1, 'education', 'EDU'),
(3, 2, 'events', 'EVS'),
(4, 0, 'Not Set', 'NON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id_sessions`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`id_new_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_types` (`type_code`),
  ADD KEY `id_user_types_2` (`type_code`);

--
-- Indexes for table `user_1_tbl`
--
ALTER TABLE `user_1_tbl`
  ADD PRIMARY KEY (`id_user_1_tbl`);

--
-- Indexes for table `user_5_tbl`
--
ALTER TABLE `user_5_tbl`
  ADD PRIMARY KEY (`id_user_5_tbl`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id_user_types`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  MODIFY `id_sessions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `id_new_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_1_tbl`
--
ALTER TABLE `user_1_tbl`
  MODIFY `id_user_1_tbl` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_5_tbl`
--
ALTER TABLE `user_5_tbl`
  MODIFY `id_user_5_tbl` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id_user_types` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
