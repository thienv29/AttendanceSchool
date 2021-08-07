-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2021 lúc 04:50 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdiemdanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `userName` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `name` varchar(20) NOT NULL,
  `id_class` int(11) NOT NULL,
  `stringChat` text NOT NULL,
  `time` datetime NOT NULL,
  `distin` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `distinv2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`name`, `id_class`, `stringChat`, `time`, `distin`, `id`, `distinv2`) VALUES
('Văn Tuấn', 2, 'dawdw', '2021-04-04 01:14:00', 1, 8227, 'thienv29@gmail.com'),
('Văn Tuấn', 4, 'hey man', '2021-04-04 22:44:23', 1, 8228, 'thienv29@gmail.com'),
('Trọng Hoàng', 1, 'xScxs', '2021-04-05 10:45:13', 0, 8229, '3119560088'),
('Văn Tuấn', 11, 'rtgyhjukl', '2021-04-04 18:18:34', 1, 8230, 'thienv29@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculty`
--

CREATE TABLE `faculty` (
  `faculty_name` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `id_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `faculty`
--

INSERT INTO `faculty` (`faculty_name`, `id`, `id_school`) VALUES
('Toán', 300, 5000),
('Công nghệ thông tin', 301, 5000),
('Đông phương', 302, 5000),
('Kinh tế', 303, 5000),
('Ngôn ngữ', 304, 5000),
('Điện', 305, 5000),
('Sư phạm', 306, 5000),
('Du lịch', 307, 5000),
('Khoa học xã hội và truyền thông', 308, 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`Email`, `Name`, `Message`) VALUES
('thienv29@gmail.com', 'Vũ Quý Thiện', 'dasdsa'),
('thienv29@gmail.com', 'Vũ Quý Thiện', 'dasdsa'),
('ngocanhbl@gmail.com', 'Ngoc anh', '32a1s5d1as'),
('thienv29@gmail.com', 'VuQuyThien', 'sdasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `id_faculty` int(11) NOT NULL,
  `industry_name` varchar(100) NOT NULL,
  `id_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `industry`
--

INSERT INTO `industry` (`id`, `id_faculty`, `industry_name`, `id_school`) VALUES
(10, 306, 'Sư phạm Hóa học', 5000),
(11, 306, 'Công nghệ thông tin', 5000),
(12, 306, 'Sư phạm Tin học', 5000),
(13, 306, 'Ngôn ngữ Trung Quốc', 5000),
(14, 306, 'Sư phạm Toán', 5000),
(15, 306, ' Sư phạm Vật lý', 5000),
(16, 301, 'Kỹ thuật phần mềm', 5000),
(17, 301, 'Công nghệ thông tin ', 5000),
(18, 301, 'Kỹ thuật phần mềm (CLC)', 5000),
(19, 301, 'Công nghệ thông tin (CLC)', 5000),
(20, 306, 'Sư phạm Sinh học', 5000),
(28, 306, 'Sư phạm Tiếng Anh', 5000),
(29, 306, 'Việt Nam học', 5000),
(30, 306, 'Sư phạm Ngữ văn', 5000),
(31, 301, 'Khoa học máy tính.', 5000),
(32, 301, 'Mạng máy tính và Truyền thông dữ liệu.', 5000),
(33, 301, 'Công nghệ phần mềm.', 5000),
(34, 301, ' Kỹ thuật máy tính', 5000),
(35, 301, 'Hệ thống quản lý thông tin', 5000),
(36, 301, 'Robot và Trí tuệ nhân tạo', 5000),
(37, 301, 'Kỹ thuật mạng', 5000),
(38, 304, 'Ngôn ngữ Anh', 5000),
(39, 304, 'Ngôn ngữ Hàn', 5000),
(40, 304, 'Ngôn ngữ Nhật', 5000),
(41, 304, 'Ngôn ngữ Ý', 5000),
(42, 302, 'Hàn Quốc học', 5000),
(43, 302, 'Nhật Bản học', 5000),
(44, 307, 'Quản trị khách sạn', 5000),
(45, 307, 'Quản trị nhà hàng và dịch vụ ăn uống.', 5000),
(46, 307, 'Quản trị dịch vụ du lịch và lữ hành', 5000),
(47, 307, 'Quản trị kinh doanh du lịch', 5000),
(48, 308, 'Báo chí', 5000),
(49, 308, 'Chính trị', 5000),
(50, 308, 'Nhiếp ảnh', 5000),
(51, 308, 'Truyền thông', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qrcode`
--

CREATE TABLE `qrcode` (
  `stringrandom` varchar(200) NOT NULL,
  `id_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qrcode`
--

INSERT INTO `qrcode` (`stringrandom`, `id_class`) VALUES
('zzhyralhht', 1),
('xppdeffigx', 2),
('crpnqcqfsv', 3),
('tyrvafgvnz', 4),
('ytmbdumagd', 5),
('omgdrabadk', 7),
('rdywtjvfob', 8),
('axtbvefhik', 9),
('kyedikvybr', 10),
('kbfnbegpoj', 11),
('kmypyckese', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schools`
--

CREATE TABLE `schools` (
  `school_name` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `wokingTimeStart` time NOT NULL,
  `wokingTimeOver` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `schools`
--

INSERT INTO `schools` (`school_name`, `id`, `email`, `pass`, `wokingTimeStart`, `wokingTimeOver`) VALUES
('SGU-SAIGON UNIVERSITY', 5000, 'saigonuni@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '07:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id_student` varchar(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `id_class` int(11) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id_class` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `dayOfWeek` varchar(10) NOT NULL,
  `timeStart` time NOT NULL,
  `timeOver` time NOT NULL,
  `id_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_class`
--

INSERT INTO `tbl_class` (`id_class`, `subject`, `id_teacher`, `dayOfWeek`, `timeStart`, `timeOver`, `id_school`) VALUES
(1, 'Toán rời rạc', 4005, 'Saturday', '07:00:00', '09:00:00', 5000),
(2, 'Toán cao cấp', 4006, 'Tuesday', '07:00:00', '08:50:00', 5000),
(3, 'Đại số', 4003, 'Wednesday', '15:00:00', '19:30:00', 5000),
(4, 'Kinh tế vĩ mô', 4006, 'Monday', '07:00:00', '09:15:00', 5000),
(5, 'Lý thuyết đồ thị', 4006, 'Wednesday', '08:00:00', '10:20:00', 5000),
(6, 'Kinh tế chính trị MAC-LENIN', 4003, 'Tuesday', '12:20:00', '18:00:00', 5000),
(7, 'Tư tưởng Hồ Chí Minh', 4006, 'Monday', '13:00:00', '16:00:00', 5000),
(8, 'Phương pháp luận sáng tạo', 4002, 'Thursday', '10:00:00', '12:00:00', 5000),
(9, 'Pháp luật đại cương', 4006, 'Thursday', '15:00:00', '17:00:00', 5000),
(10, 'Quốc Phòng', 4006, 'Friday', '15:00:00', '17:00:00', 5000),
(11, 'Tin học đại cương', 4006, 'Friday', '09:00:00', '11:50:00', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_group_student`
--

CREATE TABLE `tbl_group_student` (
  `id_student` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `stringAtten` varchar(500) NOT NULL,
  `id_school` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_group_student`
--

INSERT INTO `tbl_group_student` (`id_student`, `id_class`, `stringAtten`, `id_school`, `id`) VALUES
(1, 1, 'xxxxxxxvvxxxvxx', 5000, 1),
(2, 1, 'vxxxxxxvvxvxxxx', 5000, 2),
(3, 1, 'xvvvxxxxxvxxxxx', 5000, 3),
(4, 1, 'xxvxxxxvxxxvxxv', 5000, 4),
(5, 1, 'vxxxvxvxxxvxxxx', 5000, 5),
(6, 1, 'xxxxxvvxxxxxxxx', 5000, 6),
(7, 1, 'vxxxxxxxxxvvxxx', 5000, 7),
(8, 1, 'xxxvvxxxxvvxvxv', 5000, 8),
(9, 1, 'vxxvxvxvxxxxxvx', 5000, 9),
(10, 1, 'xxxxxxxxvxxxxvx', 5000, 10),
(11, 1, 'xxxxxxxxxxxvvxx', 5000, 11),
(12, 1, 'vxxvxvxxxvxxxvx', 5000, 12),
(13, 1, 'xxxvvxvxvxxxxxv', 5000, 13),
(14, 1, 'xvxvvxvxxvxxvxx', 5000, 14),
(15, 1, 'xxxxxxvvxvxvvvx', 5000, 15),
(16, 1, 'vxvvxxxxxxvxvxx', 5000, 16),
(17, 1, 'vxvxxxxxxxxxxxv', 5000, 17),
(18, 1, 'xxxxxxxvvxxvxxx', 5000, 18),
(19, 1, 'vxxxxxvxxxxxvvv', 5000, 19),
(20, 1, 'xxvxxxxvvvxxvxv', 5000, 20),
(20, 2, 'xxvvxxxxvvxxxxv', 5000, 21),
(21, 2, 'xvxxxxxxxxxxvvv', 5000, 22),
(22, 2, 'xxxvxxxxvxvxxxv', 5000, 23),
(23, 2, 'vvxxxxxxxxvvvxx', 5000, 24),
(24, 2, 'xxxxvxvxxxxxxxx', 5000, 25),
(25, 2, 'xxxxvvxxvxxxxvx', 5000, 26),
(26, 2, 'vxxxvxvvvvvxvxx', 5000, 27),
(27, 2, 'vxxxxxxxxxvxxxx', 5000, 28),
(28, 2, 'xvxxxvvxxxxxxxx', 5000, 29),
(29, 2, 'xvxxvxxvvxxvxxx', 5000, 30),
(30, 2, 'xvxxvvxxvvvxxxv', 5000, 31),
(31, 2, 'xxvvxxvxxvxxxxx', 5000, 32),
(32, 2, 'xvxvxxxxxxvxvxx', 5000, 33),
(33, 2, 'vxvxxxxxxxxxxvv', 5000, 34),
(34, 2, 'xxxvxxxxxxxxvvx', 5000, 35),
(35, 2, 'vxxxxxvvvvvxxxx', 5000, 36),
(36, 2, 'xxxxvxvvxxxvxxx', 5000, 37),
(37, 2, 'vxxxxxxvxvxvvvx', 5000, 38),
(38, 2, 'xvxxvvxxvxvvxvx', 5000, 39),
(39, 2, 'xxvxxxxvxxvvxxx', 5000, 40),
(40, 2, 'vxxxvvxxxvxxxvx', 5000, 41),
(20, 3, 'xxxxxxvvvxxxvxv', 5000, 42),
(21, 3, 'vxxxxxvxxvxxxxx', 5000, 43),
(22, 3, 'xvxxxxxxvvxxxvx', 5000, 44),
(23, 3, 'vvxxxvxxvxvxvxx', 5000, 45),
(24, 3, 'xxxvvvxvvxxvxxx', 5000, 46),
(25, 3, 'xxvvxxvxxvxvxvx', 5000, 47),
(26, 3, 'xxxxvxvxxxxvxxv', 5000, 48),
(27, 3, 'xxvxxxxxxvxxxxx', 5000, 49),
(28, 3, 'xvvvxvxvxxxvxvx', 5000, 50),
(29, 3, 'vxvxxvxxvxvvxxv', 5000, 51),
(30, 3, 'xxvxvvvvxvvxxxv', 5000, 52),
(31, 3, 'xxxxxxvvvvxvxvx', 5000, 53),
(32, 3, 'vxxxxxxxvvvvxxx', 5000, 54),
(33, 3, 'xvxvxxxxxxxxxvv', 5000, 55),
(34, 3, 'vxxxxxvxxxxxxxv', 5000, 56),
(35, 3, 'xvvxxxvxxxxvxxx', 5000, 57),
(36, 3, 'xxxvxxxxxxxvvxv', 5000, 58),
(37, 3, 'vxxxxvxvvxvvxvv', 5000, 59),
(38, 3, 'xvxxxvvvxxvxvxx', 5000, 60),
(39, 3, 'vxxxxxxxvvxvvvv', 5000, 61),
(40, 3, 'vvxvxxxxvvxxxxv', 5000, 62),
(41, 3, 'xxxxvvxvxxxxvxx', 5000, 63),
(42, 3, 'xxxxvxxxxxxxxxv', 5000, 64),
(43, 3, 'vvxxxvxxxxxxxxx', 5000, 65),
(44, 3, 'xxxvxxxxvvxxvxx', 5000, 66),
(45, 3, 'xvvvvxxxxvxxxxx', 5000, 67),
(46, 3, 'xvxxvvvxvxxxxxv', 5000, 68),
(47, 3, 'xxxvxxvxxxxxxxv', 5000, 69),
(48, 3, 'xxvvxxxvxxvxvxx', 5000, 70),
(49, 3, 'xvvvxxxvxxxxxxv', 5000, 71),
(50, 3, 'xxxxxxxvxxxxxvv', 5000, 72),
(51, 3, 'xvxvxxvxxxvxvxv', 5000, 73),
(52, 3, 'vxvxxxxvxxvxvvx', 5000, 74),
(53, 3, 'xxvvvvvvxxxxvxx', 5000, 75),
(54, 3, 'xxxxxvxxxxvvxxx', 5000, 76),
(55, 3, 'xxvxxvvvxvxxvxx', 5000, 77),
(56, 3, 'xxxvvxxvxxvxvxx', 5000, 78),
(57, 3, 'xxvxxvxxxvxxvxx', 5000, 79),
(58, 3, 'vxxxxxvxvxxxvxx', 5000, 80),
(59, 3, 'xxvvxvxvxvxxxxx', 5000, 81),
(60, 3, 'xxxxvxxxvxvxxvx', 5000, 82),
(12, 4, 'vxxxxxxxxxxvxvv', 5000, 83),
(13, 4, 'xxvvvxvxvxxxxxx', 5000, 84),
(14, 4, 'xvvxxvxxvxxxxxx', 5000, 85),
(15, 4, 'xxxxxxxxxxxvvxx', 5000, 86),
(16, 4, 'vxvxxvxxvvxxxvx', 5000, 87),
(17, 4, 'vxxxvxxxvxxxvvv', 5000, 88),
(18, 4, 'xvxxxxxxvxxxvvx', 5000, 89),
(19, 4, 'xxxxvxxxxxvxxxx', 5000, 90),
(20, 4, 'vxxxxxxxvxxvxvv', 5000, 91),
(21, 4, 'xxxxxxvxvxvxxxx', 5000, 92),
(22, 4, 'xxxxvvxvxvxvxxv', 5000, 93),
(23, 4, 'xxxxvxvvxxvxxvx', 5000, 94),
(24, 4, 'xxxxxxvxxvxvxxx', 5000, 95),
(25, 4, 'xvxxvxxvxxxxvvv', 5000, 96),
(26, 4, 'vxxvxxvvxxxxxvv', 5000, 97),
(27, 4, 'vxxvvxxvxvvxvxx', 5000, 98),
(28, 4, 'vxxxxxxxvxxvvxx', 5000, 99),
(29, 4, 'vxxxxxxxvxvxvxv', 5000, 100),
(30, 4, 'vxxvxvxxxxxvxvv', 5000, 101),
(31, 4, 'xxxvxxxvxvxxxxv', 5000, 102),
(32, 4, 'xxxxxvxxxxxvxxx', 5000, 103),
(33, 4, 'xxxxxxvvxxxvxxx', 5000, 104),
(34, 4, 'xxxvxxxxxxvvxxv', 5000, 105),
(35, 4, 'xxvxvxxxxxvxvxx', 5000, 106),
(36, 4, 'vxxxxvxxvxxxvxx', 5000, 107),
(37, 4, 'xxxxxxxxxvvvxvx', 5000, 108),
(38, 4, 'xxxxxxxxvxxxvxx', 5000, 109),
(39, 4, 'vvxxxxxvxxxvxxx', 5000, 110),
(40, 4, 'xxxxxxxxxxxvxxv', 5000, 111),
(41, 4, 'xxxxxxxxxxxvxxx', 5000, 112),
(42, 4, 'vxxxvxvxxxxxvvv', 5000, 113),
(21, 5, 'vxxxvvvxxxxxxxx', 5000, 114),
(22, 5, 'xvxxvxxxvxvxvxx', 5000, 115),
(23, 5, 'vxvxvxvxxvxxxxx', 5000, 116),
(24, 5, 'xvvxxxxvvvxxxxv', 5000, 117),
(25, 5, 'xxxxxxxxvvxxxvx', 5000, 118),
(26, 5, 'xxxxxxxxxxxxxvx', 5000, 119),
(27, 5, 'vxvvxxxxvxxxvvx', 5000, 120),
(28, 5, 'vxvxxxxxxxxxxxx', 5000, 121),
(29, 5, 'xvxxxxvxxxxxvxx', 5000, 122),
(30, 5, 'vxvvvxxvxxxxxvx', 5000, 123),
(31, 5, 'xxxvxxxxvxxvxxx', 5000, 124),
(32, 5, 'xvvvxxvvxxxxxxx', 5000, 125),
(33, 5, 'xvxvxvvxxvxvxxx', 5000, 126),
(34, 5, 'xxxxxxxxxvvxvxx', 5000, 127),
(35, 5, 'xvvvxxvxxxxvxvx', 5000, 128),
(36, 5, 'vxxxvvxxxxxxvxx', 5000, 129),
(37, 5, 'xvxvxxvxvvvxxxx', 5000, 130),
(38, 5, 'vxxvvvxxvxxxxxx', 5000, 131),
(39, 5, 'xxxxvxxvvxxxxxx', 5000, 132),
(40, 5, 'vvvxvxvxvvxxvvx', 5000, 133),
(41, 5, 'xvvvxxxxxvvxxxv', 5000, 134),
(42, 5, 'xvxxxxxvxxvxxxx', 5000, 135),
(43, 5, 'xxxvxvvxxxxxxvx', 5000, 136),
(44, 5, 'xvvxvxxxvvvxxxv', 5000, 137),
(45, 5, 'vxxxxvxxvvxxvvv', 5000, 138),
(46, 5, 'xxvxxvxxxxxvxxv', 5000, 139),
(47, 5, 'xxxxxxxvxvvxxvx', 5000, 140),
(48, 5, 'xxvxvvxxvvxxxxx', 5000, 141),
(49, 5, 'xxxxxxxxxxxxvxx', 5000, 142),
(50, 5, 'xxxxxvxvxvxvxvx', 5000, 143),
(51, 5, 'xvxxxvvvvxxvxvx', 5000, 144),
(52, 5, 'xxxvxxxxxxxxxvx', 5000, 145),
(12, 6, 'xvxxvxxvxvxxxxx', 5000, 146),
(13, 6, 'vxxxxxxxxvxvxxv', 5000, 147),
(14, 6, 'xvvvxxxvxxxvxxx', 5000, 148),
(15, 6, 'xxxxxxvxxxvxxxx', 5000, 149),
(16, 6, 'xxxxvvxvxxxxxxx', 5000, 150),
(17, 6, 'xvxxxxxxxxxxxxx', 5000, 151),
(18, 6, 'xxxxvxxxxxxxxxx', 5000, 152),
(19, 6, 'xxxxvvxxxxxxxxv', 5000, 153),
(20, 6, 'vvxvxvvxxxxvxxv', 5000, 154),
(21, 6, 'vvvvxxxxvxxxxvx', 5000, 155),
(22, 6, 'xvvvxxvxxvxvvxv', 5000, 156),
(23, 6, 'vvvvxxxxxxxxxxx', 5000, 157),
(24, 6, 'xvxxvxxvvxxxxvx', 5000, 158),
(25, 6, 'xxxvxxxxvvxxxvv', 5000, 159),
(26, 6, 'xxxxxxxvxxvvxxv', 5000, 160),
(27, 6, 'xxxvxxxvxxvxxxv', 5000, 161),
(28, 6, 'xxxxxxxxvxxvxvv', 5000, 162),
(29, 6, 'xxxxvxvxxxxxxxv', 5000, 163),
(30, 6, 'xvxxxxxvxxxxxxx', 5000, 164),
(31, 6, 'vxxxxxvxvvxxxvx', 5000, 165),
(32, 6, 'xxvxxxvvxxxxvvx', 5000, 166),
(33, 6, 'vvxxxxxxxxxxvxx', 5000, 167),
(34, 6, 'xvxvxxxxvxxxxxx', 5000, 168),
(35, 6, 'vxxxxxvvxvxxxxx', 5000, 169),
(36, 6, 'xxxxvxvxxxxxxxx', 5000, 170),
(37, 6, 'xxxvxxxxxxvvxvx', 5000, 171),
(38, 6, 'xxxvxxxxxxvxvvx', 5000, 172),
(39, 6, 'vvxxxxxxvvvxvxx', 5000, 173),
(40, 6, 'vxxvxxxvxvxxvvv', 5000, 174),
(41, 6, 'xxvxvxxvxxxxxvx', 5000, 175),
(42, 6, 'xvxvvxxvxxxvxvx', 5000, 176),
(43, 6, 'xxxxxxvxvxxxvvx', 5000, 177),
(44, 6, 'xxxvxxxxvvxxvxx', 5000, 178),
(45, 6, 'vxvxvxvxxvxxvxv', 5000, 179),
(46, 6, 'xxxxxxxxxxxxxxx', 5000, 180),
(47, 6, 'xxvxxxxxxxxxxxx', 5000, 181),
(48, 6, 'vvxxvxxxxxxvvvx', 5000, 182),
(49, 6, 'xxxxvxvvvxxxvxx', 5000, 183),
(50, 6, 'xvvxvxxxxvxxxxx', 5000, 184),
(51, 6, 'vxxxxvxxxxxvxvx', 5000, 185),
(52, 6, 'xxvxxvxxxxxvxxx', 5000, 186),
(53, 6, 'xvxvxxvxvxvxxxx', 5000, 187),
(25, 7, 'xvxxvxxvvxvxxvx', 5000, 188),
(26, 7, 'xxxxxxxxxxxxvxx', 5000, 189),
(27, 7, 'xvxxxvxxvxxxxxx', 5000, 190),
(28, 7, 'xxxxxxxxxxxvxxx', 5000, 191),
(29, 7, 'xxxxvxvxvvxxvvx', 5000, 192),
(30, 7, 'xxxvxxxvxxxxxvx', 5000, 193),
(31, 7, 'xxxxvxxxxvxxxxx', 5000, 194),
(32, 7, 'xxxxxvxvvxvxvxx', 5000, 195),
(33, 7, 'xxvvxvvxxvxxxvv', 5000, 196),
(34, 7, 'xxxxvxxxxxxvxxv', 5000, 197),
(35, 7, 'xvxxvxxxvxxxxxx', 5000, 198),
(36, 7, 'xxxxxvvxvxxxvxx', 5000, 199),
(37, 7, 'xxxxxvxvvxxvvvx', 5000, 200),
(38, 7, 'xxxxvxxxxvxxxxv', 5000, 201),
(39, 7, 'xvxxxxxxxxxxxxx', 5000, 202),
(40, 7, 'vxvvxxvxxxxxxvv', 5000, 203),
(41, 7, 'xxxxxxxxxvvxxvx', 5000, 204),
(42, 7, 'vxvxvxxvvxvvvxv', 5000, 205),
(43, 7, 'xxxxxxxvxxxvvxx', 5000, 206),
(44, 7, 'vxvxxxxxvxxxxxx', 5000, 207),
(45, 7, 'xxxxxvxvvvxxvxx', 5000, 208),
(46, 7, 'xxxxxxxxxxvxxvv', 5000, 209),
(47, 7, 'xxvxxxxxxxvxvxx', 5000, 210),
(48, 7, 'xvxxxxxvxvxxxvv', 5000, 211),
(49, 7, 'xxxxxxvxvvvvxxx', 5000, 212),
(50, 7, 'xvxvxxvvxxxvxxx', 5000, 213),
(51, 7, 'xvxxxvvvxxxxxvx', 5000, 214),
(52, 7, 'xxxvxxvvxxxxxvx', 5000, 215),
(53, 7, 'xxxvxxxxxxxvxvx', 5000, 216),
(54, 7, 'xxxxvxxxvvxxxvv', 5000, 217),
(55, 7, 'xxxxxxvvxxxxxxx', 5000, 218),
(15, 8, 'xvxxxvxvxxxxxxx', 5000, 219),
(16, 8, 'xxvxvxxvvxxxxvx', 5000, 220),
(17, 8, 'vvxvxxxxxxxxxxx', 5000, 221),
(18, 8, 'vxxxxxvvxvxxxxv', 5000, 222),
(19, 8, 'xvvxvvxxxxxvxxv', 5000, 223),
(20, 8, 'xxxxvxxxxxxxxvv', 5000, 224),
(21, 8, 'vvxvvxxxxxvxxxv', 5000, 225),
(22, 8, 'xxvxvxxxxxxxvxx', 5000, 226),
(23, 8, 'xvxxxxvxxxxxxxv', 5000, 227),
(24, 8, 'vxvxvxxvxxvxxxx', 5000, 228),
(25, 8, 'vxxxxxvxxvxxxxv', 5000, 229),
(26, 8, 'xxxxvvxxvvxxvvx', 5000, 230),
(27, 8, 'xvxxxxvvvvxvxxx', 5000, 231),
(28, 8, 'xvxxxxxxxxxxxxv', 5000, 232),
(29, 8, 'xvxxxxvxvxxxvxx', 5000, 233),
(30, 8, 'vxxvvxxxxvvvxxx', 5000, 234),
(31, 8, 'vxxvxxvvvvxxxxv', 5000, 235),
(32, 8, 'xxxxxvxxvxxxxxx', 5000, 236),
(33, 8, 'xxxxxxxvxxxxxxx', 5000, 237),
(34, 8, 'xvxxxxvxxvxxxvx', 5000, 238),
(35, 8, 'xxxxxxxxxxxvxvv', 5000, 239),
(36, 8, 'xxxxvxvxxvvxxxv', 5000, 240),
(37, 8, 'vxxxxvxvxxxxxxx', 5000, 241),
(38, 8, 'xxvvxvxvxxxxxxx', 5000, 242),
(39, 8, 'vxxxvxxxxxxxxxx', 5000, 243),
(40, 8, 'xxxvxxvxxvxxxvx', 5000, 244),
(41, 8, 'vxvvxxvxxvxxvxx', 5000, 245),
(42, 8, 'vxvxxvxvxvxxxxx', 5000, 246),
(43, 8, 'xxxxxxxvvxxxxvx', 5000, 247),
(44, 8, 'vxxxxxxxvxxxxvx', 5000, 248),
(45, 8, 'xxvxxvvvxxxvxxv', 5000, 249),
(5, 9, 'xxxxxxvxxxvvxxxvvv', 5000, 250),
(6, 9, 'vxvxxxxvvxxxvvxvvv', 5000, 251),
(7, 9, 'xxxxxvvxxvvvxxxvvv', 5000, 252),
(8, 9, 'xxxxvxxxvxvxxxxvvv', 5000, 253),
(9, 9, 'xxvxvxvxxxxxxxvvvv', 5000, 254),
(10, 9, 'vxxxxvxxxvxvvxxvvv', 5000, 255),
(11, 9, 'xxxxxxxxvxvxxxxvvv', 5000, 256),
(12, 9, 'vvxxvvxxvxvxxxvvvv', 5000, 257),
(13, 9, 'vxxxvvxvxxxxxxxvvv', 5000, 258),
(14, 9, 'vxvxxxxxxxxxxvxvvv', 5000, 259),
(15, 9, 'xxvvxxxxxxxvxvxvvv', 5000, 260),
(16, 9, 'vxxxxxvvxxvvxxxvvv', 5000, 261),
(17, 9, 'vxvxxxxvxvxxvxvvvv', 5000, 262),
(18, 9, 'vxvxvvxxxxvxxvvvvv', 5000, 263),
(19, 9, 'vxxxxvxxxxvvxvvvvv', 5000, 264),
(20, 9, 'xvvxvxxvvxxvxxxvvv', 5000, 265),
(21, 9, 'xxvxxxxxxxvxxvxvvv', 5000, 266),
(22, 9, 'xxxxxxxxxxxvxvvvvv', 5000, 267),
(23, 9, 'xvvxxxxxxxvxvvxvvv', 5000, 268),
(24, 9, 'xvxvxxxvvxvvvxvvvv', 5000, 269),
(25, 9, 'xxxxxxxxxxxxxxvvvv', 5000, 270),
(26, 9, 'vxvxvxxxxxxxvxxvvv', 5000, 271),
(27, 9, 'vxxvxxxvvxvxvxxvvv', 5000, 272),
(28, 9, 'xvxvxxxxxxvxvxxvvv', 5000, 273),
(29, 9, 'xxxxvxxxvxxxxvxvvv', 5000, 274),
(30, 9, 'xvxxxvxvxxvxvxxvvv', 5000, 275),
(31, 9, 'xxxxxxxxxxvxvvxvvv', 5000, 276),
(32, 9, 'vvvvxxxxxxxxxvxvvv', 5000, 277),
(33, 9, 'xxxxxxxvxxxxvxxvvv', 5000, 278),
(34, 9, 'xxxxxxvxxxxxvxxvvv', 5000, 279),
(35, 9, 'xvxxvxxxvxxvxxxvvv', 5000, 280),
(20, 10, 'xxxvxvxvxxvxxvx', 5000, 281),
(21, 10, 'vvxxxxvxvxxxxvx', 5000, 282),
(22, 10, 'vxvxxxxvxxxvvxx', 5000, 283),
(23, 10, 'xxxxvxxvxxxvxvx', 5000, 284),
(24, 10, 'xxvxxvxxvvxxxxx', 5000, 285),
(25, 10, 'vxxxxxxvxvxxvxx', 5000, 286),
(26, 10, 'xxxxxvxvxxxxxxx', 5000, 287),
(27, 10, 'xxxxxvvxvvxxxxx', 5000, 288),
(28, 10, 'vvxxxvvxxxvvvxv', 5000, 289),
(29, 10, 'vvvxvvxvvvxvxxx', 5000, 290),
(30, 10, 'vvvxvvvxxxvxvxv', 5000, 291),
(31, 10, 'vxvxvxxxxvxvxvx', 5000, 292),
(32, 10, 'xxxvxxxxxxxxxvx', 5000, 293),
(33, 10, 'vxxxxxvvxxxxxxv', 5000, 294),
(34, 10, 'xxxvvxxxvxvxxxx', 5000, 295),
(35, 10, 'xxxxxxxxxxvvxvx', 5000, 296),
(36, 10, 'xvxxxxxxxxxxvxx', 5000, 297),
(37, 10, 'vxxvxxxxxvvvxxx', 5000, 298),
(38, 10, 'vvxxxxxxxxvxxvv', 5000, 299),
(39, 10, 'xxxxxxxxxvxxxvx', 5000, 300),
(40, 10, 'xxxxxxxxxvxxxxx', 5000, 301),
(41, 10, 'xvvxvxxxxvvxxxx', 5000, 302),
(42, 10, 'vxxxxxvxvxvxxvx', 5000, 303),
(43, 10, 'xxxxxvxxxvvvxvx', 5000, 304),
(44, 10, 'xxxxxxxxxxvvxxx', 5000, 305),
(45, 10, 'xxxxxxxxxxxxvxx', 5000, 306),
(46, 10, 'xvvvxxvxxvxvxxv', 5000, 307),
(47, 10, 'xxxxvxxxxxxxvvv', 5000, 308),
(48, 10, 'xxxvvvxvvxxxvxv', 5000, 309),
(49, 10, 'xxxvxvxxvvvxxxx', 5000, 310),
(50, 10, 'xxxxvxvxxvvxxxx', 5000, 311),
(51, 10, 'xvvxxxxxvxvxxvx', 5000, 312),
(52, 10, 'vxxxxxvvxxvxxxx', 5000, 313),
(53, 10, 'xxxxxvxxxxvxxxx', 5000, 314),
(54, 10, 'xvxxxvxxxxxvxxx', 5000, 315),
(55, 10, 'vxxxxxvxxxxxxxx', 5000, 316),
(56, 10, 'vvxxxxvxxxxxvxx', 5000, 317),
(57, 10, 'xxxvvxvxvxvvvxx', 5000, 318),
(58, 10, 'xxvxvxxvxxvxxxx', 5000, 319),
(59, 10, 'xvvvxvxvvxvxvxx', 5000, 320),
(60, 10, 'vvxxxvxxvxvxxxv', 5000, 321),
(30, 11, 'xvvvxxxvxxxxxxv', 5000, 322),
(31, 11, 'xxvxxxxvxxxvxxv', 5000, 323),
(32, 11, 'xvvxvvxxxxvvvxv', 5000, 324),
(33, 11, 'xxvvxxxxxxxxxvx', 5000, 325),
(34, 11, 'xxxxxxxvxvvxxxv', 5000, 326),
(35, 11, 'xxxvvxxvxxvvvxx', 5000, 327),
(36, 11, 'vxxxvxxvvxxxvxx', 5000, 328),
(37, 11, 'vxxxvxxvvxvxvvx', 5000, 329),
(38, 11, 'xvxxxxvvxxxxxxx', 5000, 330),
(39, 11, 'xxxvxvvxxxxxxxx', 5000, 331),
(40, 11, 'xxvvxxxxxxvxxvv', 5000, 332),
(41, 11, 'vvxvxxxxxxxxxxx', 5000, 333),
(42, 11, 'xxxvvxvxxxxxxvx', 5000, 334),
(43, 11, 'xxxvvxxxvvxvxvx', 5000, 335),
(44, 11, 'vxvvxxxvvxxvxxx', 5000, 336),
(45, 11, 'xxxxxxxxxxxvvxx', 5000, 337),
(46, 11, 'xvvxxvxvxxxxxvx', 5000, 338),
(47, 11, 'vvvxvvvvxxxvxxx', 5000, 339),
(48, 11, 'xxxxvvvxvxxvxxx', 5000, 340),
(49, 11, 'xxxvxvvxxxvxxxx', 5000, 341),
(50, 11, 'xxxxxxvxxxxxxvx', 5000, 342),
(51, 11, 'xvxxxxxxxxvvxxv', 5000, 343),
(52, 11, 'xxvvvxxxxvxxxxx', 5000, 344),
(53, 11, 'xxxxxvvxxvxxxxv', 5000, 345),
(54, 11, 'xxxxxxxxvxxxxxx', 5000, 346),
(55, 11, 'xxxvxxxvvxxxvvv', 5000, 347),
(56, 11, 'xxvxxxxxxxxxxxx', 5000, 348),
(57, 11, 'vxxvvxxvxxvvxxx', 5000, 349),
(58, 11, 'xxvxxvxxxxvxvvx', 5000, 350),
(59, 11, 'xvvvvxxxxvvxxxx', 5000, 351),
(60, 11, 'vxvxxvxxxxxxvxx', 5000, 352);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_student`
--

CREATE TABLE `tbl_student` (
  `lastName` varchar(100) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `fisrtName` varchar(100) NOT NULL,
  `id_school` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_student`
--

INSERT INTO `tbl_student` (`lastName`, `id_student`, `id`, `fisrtName`, `id_school`, `gender`, `pass`, `email`) VALUES
('Anh', 1, '3119560067', 'Ngọc', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'hoe3rqk7ep@domain.com'),
('Thiện', 2, '3119560069', 'Vũ Quý', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'wltah1auvj@domain.com'),
('Vy', 3, '3119560070', 'Khánh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'm6mze6riv8@domain.com'),
('Linh', 4, '3119560071', 'Ngọc', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '7h047hakw1@domain.com'),
('Đào', 5, '3119560072', 'Thị', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'y2jmukobka@domain.com'),
('Huy', 6, '3119560073', 'Hoàng', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'ufr2f4ur8b@domain.com'),
('Ánh', 7, '3119560074', 'Ngọc', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'bzpi7km6i2@domain.com'),
('Nhật', 8, '3119560075', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '3cnena80jx@domain.com'),
('Trọng', 9, '3119560076', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'xaz6tq0lpp@domain.com'),
('Nghĩa', 10, '3119560077', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'essmk688im@domain.com'),
('Vũ', 11, '3119560078', 'Thiên', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '9hrlr8qve3@domain.com'),
('Thương', 12, '3119560079', 'Nhật', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '8atmbkhga3@domain.com'),
('Vỹ', 13, '3119560080', 'Trà', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '05jdw4442w@domain.com'),
('Ngô', 14, '3119560081', 'Ngọc', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '6oyzv2pniw@domain.com'),
('Khánh', 15, '3119560082', 'Vũ', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'wvqutzqqx8@domain.com'),
('kha', 16, '3119560083', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'au0ik0340d@domain.com'),
('Tú', 17, '3119560085', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 't0ockdf9pz@domain.com'),
('Anh', 18, '3119560086', 'Lê', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'v6rp78u0j7@domain.com'),
('Khôi', 19, '3119560087', 'Minh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'f8jovz05zd@domain.com'),
('Hoàng', 20, '3119560088', 'Trọng', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'wkjc4986o4@domain.com'),
('Vũ', 21, '3119560089', 'Anh', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'y9wz9gaovd@domain.com'),
('Tuấn', 22, '3119560090', 'Văn', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'mn6oorbuzj@domain.com'),
('Thăng', 23, '3119560091', 'Văn', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '0ilkrdavaq@domain.com'),
('An', 24, '3119560092', 'Lê', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'po3bb2xolq@domain.com'),
('Anh', 25, '3119560093', 'Ngọc', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'svarrht0pg@domain.com'),
('Tâm', 26, '3119560122', 'Lê Văn', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'pg8h7b8a22@domain.com'),
('Ngọc', 27, '3119560123', 'Hồng', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'u5ltq67dhz@domain.com'),
('Thư', 28, '3119560124', 'Trang', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'bok2jvmrw4@domain.com'),
('Julie', 29, '3119560125', 'Nguyễn', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', 'tz3891yqwo@domain.com'),
('Vy', 30, '3119560126', 'Nancy', 5000, 'Nam', 'e10adc3949ba59abbe56e057f20f883e', '8fuj3vh16e@domain.com'),
('Mie', 31, '3119560127', 'DJ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'ugqbht8npy@domain.com'),
('Phụng', 32, '3119560128', 'Jimin', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '4okogrlenu@domain.com'),
('Minhyung', 33, '3119560129', 'Kim', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 's2ux12a4g8@domain.com'),
('Thiên', 34, '3119560095', 'Nguyễn Than', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'x2pxx4vf8x@domain.com'),
('Mẫn', 35, '3119560096', 'Vũ Minh', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '1dif6gwtsh@domain.com'),
('Anh', 36, '3119560097', 'Cao Kim', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'exc7o77m38@domain.com'),
('Thuận', 37, '3119560098', 'Nguyễn', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'twf3ps01xr@domain.com'),
('Ánh', 38, '3119560099', 'Nguyễn Vũ B', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '1yz9fxh7dt@domain.com'),
('Hà', 39, '3119560100', 'Nguyễn Mai ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'hamoz5aobb@domain.com'),
('Loan', 40, '3119560101', 'Trương Mỹ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'q54752l8qd@domain.com'),
('Ánh', 41, '3119560102', 'Lê Kim', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'r8tsamzxl6@domain.com'),
('Qúy', 42, '3119560103', 'Trần Xuân', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'iri4l1ydoe@domain.com'),
('Đào', 43, '3119560104', 'Lê Hồng', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'ezolh66cuq@domain.com'),
('Bảo', 44, '3119560105', 'Hoàng', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'xzkabhsvvk@domain.com'),
('Khang', 45, '3119560106', 'Vũ Duy', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'nnnyhm3izt@domain.com'),
('Phương', 46, '3119560107', 'Nguyễn Thái', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '0elvfm8ggt@domain.com'),
('Lam', 47, '3119560108', 'Nguyễn Kiều', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '9enfjm5fa1@domain.com'),
('Ny', 48, '3119560109', 'Lê Mỹ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'rkb1xa5crg@domain.com'),
('Ánh', 49, '3119560110', 'Lương Ngọc', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '65kjq9gf19@domain.com'),
('Sương', 50, '3119560111', 'Trang Thiên', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'awfj7k8ydy@domain.com'),
('Mẫn', 51, '3119560112', 'Bùi Thiên', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '23ofqzm4a1@domain.com'),
('Ái', 52, '3119560113', 'Bùi Nguyễn ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'wcnhxex8st@domain.com'),
('My', 53, '3119560114', 'Hà Hải', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'j8ib3zknve@domain.com'),
('Minh', 54, '3119560115', 'Vũ Quang', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '29n6ohog79@domain.com'),
('Hải', 55, '3119560116', 'Bùi Phúc', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'ybb4r1a27b@domain.com'),
('Long', 56, '3119560117', 'Trịnh Thành', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '572age974u@domain.com'),
('Trinh', 57, '3119560118', 'Nguyễn Ngọc', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'vvls0h477u@domain.com'),
('Nghi', 58, '3119560119', 'Cao Mỹ', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'md4m09kiql@domain.com'),
('Thảo', 59, '3119560120', 'Trần Thanh', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', 'rzvlpfkv94@domain.com'),
('Anh', 60, '3119560121', 'Lê Kiều', 5000, 'Nữ', 'e10adc3949ba59abbe56e057f20f883e', '632vgy1mia@domain.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id_giaovien` int(11) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fisrtName` varchar(100) NOT NULL,
  `email_teacher` varchar(100) NOT NULL,
  `id_faculty` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id_giaovien`, `lastName`, `password`, `fisrtName`, `email_teacher`, `id_faculty`, `gender`, `id_school`) VALUES
(4002, 'Anh', 'feaf7b14be2e020dafaf60831442ed3b', 'Ngoc', 'ngocanhbl@gmail.com', 301, 'Nữ', 5000),
(4003, 'Tu', 'e10adc3949ba59abbe56e057f20f883e', 'Minh', 'tuminh@gmail.com', 301, 'Nữ', 5000),
(4004, 'Anh', 'dbb34fee8267ae5caec4884a7db97fb6', 'Ngoc', 'ngocanhbl16@gmail.com', 301, 'Nữ', 5000),
(4005, 'Thiện', 'dbb34fee8267ae5caec4884a7db97fb6', 'Vũ', 'thienv298@gmail.com', 300, 'Nam', 5000),
(4006, 'Tuấn', 'dbb34fee8267ae5caec4884a7db97fb6', 'Văn', 'thienv29@gmail.com', 300, 'Nam', 5000),
(4007, 'Hương', '4ff8e98b5ed39899f2bd721dab4ff513', 'Đinh', 'huongdinh@gmail.com', 300, 'Nam', 5000),
(4008, 'Sâm', '26e01afc72d8e1f189483b22ef4a3f14', 'Lâm', 'doanhsam2692001@gmail.com', 300, 'Nữ', 5000),
(4009, 'Ngọc', 'f0c8505ed10d2fe1631f7839d164dfe5', 'Anh', 'lengocanhbl2018@gmail.com', 0, '', 5000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_school` (`id_school`);

--
-- Chỉ mục cho bảng `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_faculty` (`id_faculty`),
  ADD KEY `id_school` (`id_school`);

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_student` (`id_student`);

--
-- Chỉ mục cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Chỉ mục cho bảng `tbl_group_student`
--
ALTER TABLE `tbl_group_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_class` (`id_class`);

--
-- Chỉ mục cho bảng `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id_student`);

--
-- Chỉ mục cho bảng `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id_giaovien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8231;

--
-- AUTO_INCREMENT cho bảng `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT cho bảng `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5001;

--
-- AUTO_INCREMENT cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_group_student`
--
ALTER TABLE `tbl_group_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT cho bảng `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id_giaovien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4010;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`id_school`) REFERENCES `schools` (`id`);

--
-- Các ràng buộc cho bảng `industry`
--
ALTER TABLE `industry`
  ADD CONSTRAINT `industry_ibfk_1` FOREIGN KEY (`id_faculty`) REFERENCES `faculty` (`id`),
  ADD CONSTRAINT `industry_ibfk_2` FOREIGN KEY (`id_school`) REFERENCES `schools` (`id`);

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`id_class`) REFERENCES `tbl_class` (`id_class`);

--
-- Các ràng buộc cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD CONSTRAINT `tbl_class_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `tbl_teacher` (`id_giaovien`);

--
-- Các ràng buộc cho bảng `tbl_group_student`
--
ALTER TABLE `tbl_group_student`
  ADD CONSTRAINT `tbl_group_student_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `tbl_student` (`id_student`),
  ADD CONSTRAINT `tbl_group_student_ibfk_3` FOREIGN KEY (`id_class`) REFERENCES `tbl_class` (`id_class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
