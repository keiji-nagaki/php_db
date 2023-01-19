-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 10:25:02
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
-- テーブルの構造 `member_registration`
--

CREATE TABLE `member_registration` (
  `id` int(11) NOT NULL,
  `company` varchar(128) NOT NULL,
  `affiliation` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `member_registration`
--

INSERT INTO `member_registration` (`id`, `company`, `affiliation`, `address`, `username`, `tel`, `mail`, `password`, `is_admin`, `updated_at`, `created_at`, `deleted_at`) VALUES
(2, '岡野バルブ', 'メンテナンス事業部', '福岡県行橋市西泉4-4-1', '長城　恵二', '0930-23-0023', 'k-nagaki@olano-valve.co.jp', '15082', 1, '2023-01-15 12:54:52', '2023-01-15 12:54:52', NULL),
(3, 'gho', '補修', '大分', '渡邊', '090-1111-1111', 'gho@gmail.com', '11111', 0, '2023-01-15 12:58:24', '2023-01-15 12:58:24', NULL),
(4, '岡野バルブ製造㈱', 'メンテナンス事業部', '福岡県行橋市西泉4-4-1', '森　良太', '0930-23-0023', 'r-mori@okano-valve.co.jp', '12345', 0, '2023-01-16 15:54:53', '2023-01-16 15:54:53', NULL),
(5, '岡野バルブ', 'メンテナンス事業部', '福岡県行橋市西泉4-4-1', '俺', '0930-23-0023', 'r-mori@okano-valve.co.jp', '12345', 0, '2023-01-16 15:57:16', '2023-01-16 15:57:16', NULL),
(6, '1111', '2222', '3333', '4444', '5555', '6666', '7777', 0, '2023-01-16 15:59:03', '2023-01-16 15:59:03', NULL),
(7, '1', '2', '3', '4', '5', '6', '7', 0, '2023-01-16 16:00:02', '2023-01-16 16:00:02', NULL),
(8, '岡野クラフト', '工事部', '福岡県行橋市', '塩田　広志', '090-1111-1111', 'shiota@hiroshi.jp', '00000', 0, '2023-01-17 14:45:49', '2023-01-17 14:45:49', NULL),
(9, '岡野バルブ', '製造部', '行橋', '濱田', '0000-000-000', 'hamada.hamada', 'hamada', 0, '2023-01-19 10:27:23', '2023-01-19 10:27:23', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
