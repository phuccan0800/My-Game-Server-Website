-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 17, 2023 lúc 06:15 AM
-- Phiên bản máy phục vụ: 8.0.33-0ubuntu0.20.04.2
-- Phiên bản PHP: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `serverlist`
--

CREATE TABLE `serverlist` (
  `id` bigint NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `rcon_user` varchar(255) DEFAULT NULL,
  `rcon_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `serverlist`
--

INSERT INTO `serverlist` (`id`, `ip`, `port`, `rcon_user`, `rcon_password`) VALUES
(1, 'csgo.ttphuc.com', '27015', NULL, NULL),
(2, 'csgo.ttphuc.com', '27025', NULL, NULL),
(3, 'csgo.ttphuc.com', '27035', NULL, NULL),
(4, 'csgo.ttphuc.com', '37035', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `UserBanned`
--

CREATE TABLE `UserBanned` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `steamid` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `user_report` varchar(255) NOT NULL,
  `Time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `UserBanned`
--

INSERT INTO `UserBanned` (`id`, `name`, `steamid`, `reason`, `user_report`, `Time`) VALUES
(1, 'Ngọc', 'Steamid:1239081239823', 'Cheating', 'TTP', '12/05/2023');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `serverlist`
--
ALTER TABLE `serverlist`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `UserBanned`
--
ALTER TABLE `UserBanned`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
