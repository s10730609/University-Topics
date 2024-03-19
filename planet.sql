-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-10-17 01:48:29
-- 伺服器版本: 5.7.11
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `planet`
--

-- --------------------------------------------------------

--
-- 資料表結構 `planet`
--

CREATE TABLE `planet` (
  `no` int(20) NOT NULL,
  `model` int(10) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `planet`
--

INSERT INTO `planet` (`no`, `model`, `name`, `photo`, `text`) VALUES
(1, 1, '豆芽菜', 'http://img.chinatimes.com/newsphoto/2016-04-24/656/20160424001044.jpg', '\r\n\r\n其實種豆芽菜很簡單，不需要土和任何農具，只需要一點綠豆和足夠的水，約四天後就能輕鬆種出豆芽菜囉！'),
(2, 2, '蔥', 'http://3.bp.blogspot.com/_TV-T57NkLCc/SdlnerLBw_I/AAAAAAAAB0U/vVovMlK_Tsg/s1600/%E8%94%A5%E6%9C%80%E6%96%B0%E9%BB%A8%E5%A4%A7.jpg', '\r\n可以直接從農資市場、超市、菜友或網店購買蔥苗，把蔥葉切下來，留下大約三到四公分的蔥頭，蔥頭上一定要有根須，否則很難成活，不耐旱，需小水勤澆，保持土壤濕潤。\r\n'),
(3, 3, '香菜', 'https://cw1.tw/CW/images/article/201703/article-58cb55a01228c.jpg', '\n香菜是人們最熟悉不過的提味蔬菜，葉小且嫩，莖纖細，味郁香，是湯、飲中的佳佐。有起表出體外又可開胃消郁止痛解毒功效。香菜屬耐寒性蔬菜，要求較冷涼濕潤的環境條件，要保持充足的陽光。'),
(4, 2, '九層塔', 'https://d.share.photo.xuite.net/lily_life.share99/1d43896/10268574/469619704_m.jpg', '九層塔生長強健，相當耐熱、耐寒、耐乾、耐濕、耐陰、耐雨。 \r\n九層塔性喜向陽日照充足溫暖潮濕的氣候，'),
(5, 3, '番薄荷', 'http://image.hkplants.com/data/forum/forumid_50/1007162129fff83463f74aca6a.jpg', '薄荷非常喜歡水，露天在陽台上種可以天天澆。其實年輕的薄荷是不怕旱澇的，有很好的生長能力和適應能力。\r\n\r\n不同的品種在需水量上有區別，葉片較多較密的，需水多;葉片較少稀疏的，需水量較少。\r\n\r\n');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
