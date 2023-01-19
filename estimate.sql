-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 10:24:48
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `valve`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `estimate`
--

CREATE TABLE `estimate` (
  `id` int(11) NOT NULL,
  `request_type` varchar(128) NOT NULL,
  `plant_name` varchar(100) NOT NULL,
  `valve_number` varchar(20) NOT NULL,
  `valve_name` varchar(100) NOT NULL,
  `valve_jo` varchar(20) NOT NULL,
  `valve_pat` varchar(20) NOT NULL,
  `valve_size` varchar(10) NOT NULL,
  `body` varchar(200) NOT NULL,
  `deadline` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `estimate`
--

INSERT INTO `estimate` (`id`, `request_type`, `plant_name`, `valve_number`, `valve_name`, `valve_jo`, `valve_pat`, `valve_size`, `body`, `deadline`, `updated_at`) VALUES
(1, 'バルブの更新', 'GHO', 'SV-1', '主蒸気止弁', 'B9292-001', '15082', '200', '弁', '2023-02-07 00:00:00', NULL),
(2, 'バルブの更新', '九州電力㈱新大分', 'HS-404', '給水加熱器入口弁', 'ー', 'ー', '100A', '弁一式（駆動部流用）', '2023-02-09 00:00:00', '2023-01-19 18:22:52');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `estimate`
--
ALTER TABLE `estimate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
