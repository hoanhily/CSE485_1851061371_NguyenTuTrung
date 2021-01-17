-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 10:56 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chungchi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungchi`
--

CREATE TABLE `chungchi` (
  `id` int(100) NOT NULL,
  `ten` varchar(500) NOT NULL,
  `noicap` varchar(100) NOT NULL,
  `danhhieu` varchar(255) NOT NULL,
  `namnhan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chungchi`
--

INSERT INTO `chungchi` (`id`, `ten`, `noicap`, `danhhieu`, `namnhan`) VALUES
(2, 'Hackathon', 'mindx', 'giải 3', 2020),
(3, 'Desginer', 'ITPlus', 'Loại khá', 2018),
(4, 'graphic desgin', 'color me', 'giỏi', 2020),
(6, 'IELTS', 'British Council', 'ielts 5.0', 2017);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'trung', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(27, 0, 'aaaaa', 'tryht', '2021-01-16 03:44:18'),
(28, 0, '  bon', 'trung', '2021-01-16 03:46:57'),
(29, 0, '  ytytrey', 'trht', '2021-01-16 03:50:35'),
(30, 0, '  ewf', 'fewf', '2021-01-16 03:58:41'),
(31, 0, '  chooooooo', 'trung', '2021-01-16 04:03:22'),
(32, 0, '  dewd', 'ewd', '2021-01-16 04:05:20'),
(33, 0, '  dcsd', 'cdc', '0000-00-00 00:00:00'),
(34, 0, '  ', 'rtref', '2021-01-16 05:49:12'),
(35, 0, '  bank', 'chào', '2021-01-17 03:47:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chungchi`
--
ALTER TABLE `chungchi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chungchi`
--
ALTER TABLE `chungchi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
