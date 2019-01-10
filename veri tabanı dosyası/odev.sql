-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2018, 16:23:22
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_sifre` varchar(14) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `chat_mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `chat_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_nick`, `chat_mesaj`, `chat_tarih`) VALUES
(41, '', '', '2018-04-29 13:39:23'),
(42, '', 'sad', '2018-04-29 13:40:16'),
(43, 'dsad', '', '2018-04-29 13:43:51'),
(44, 'dsad', '', '2018-04-29 13:43:53'),
(45, 'dsad', '', '2018-04-29 13:44:03'),
(46, 'dsad', 'adsada', '2018-04-29 13:44:05'),
(47, 'sa', 'sadas', '2018-04-29 13:45:21'),
(48, 'sa', '', '2018-04-29 13:45:37'),
(49, 'sa', 'casda', '2018-04-29 13:47:21'),
(50, 'sdadsa', 'asdsadas', '2018-04-29 13:50:02'),
(51, 'sadsa', 'asdddddddddddddddddd', '2018-04-29 13:52:47'),
(52, 'sdaaaaaa', 'adsdsdsdsdsdsdsd', '2018-04-29 13:53:06'),
(53, 'sdaaaaaa', 'adsdsdsdsdsdsdsdsdsd', '2018-04-29 13:53:13'),
(54, 'll', 'p', '2018-04-29 14:14:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kanallar`
--

CREATE TABLE `kanallar` (
  `kanal_id` int(11) NOT NULL,
  `kanal_ad` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kanal_kategori` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kanal_logo` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kanal_url` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kanal_akislink` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kanallar`
--

INSERT INTO `kanallar` (`kanal_id`, `kanal_ad`, `kanal_kategori`, `kanal_logo`, `kanal_url`, `kanal_akislink`) VALUES
(22, 'FOX TV', 'genel', 'img/27672202823195028185fox.jpg', '<iframe src=\"http://www.canlitvlive.io/tvizle.php?t=1&tv=foxtv-turkiye\" frameborder=\"0\" width=\"100%\" height=\"480\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', '<iframe src=\"http://www.canlitvlive.io/tvyayinakisi.php?css=eyJndW5zZWMiOiIwIiwibGlzdGUiOiIiLCJkdW4iOiIxIiwidGVrZ3VuIjoiMSJ9&t=1&tv=foxtv-turkiye\" frameborder=\"0\" width=\"100%\" height=\"220\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(23, 'ATV', 'genel', 'img/25452291483179528175atv.jpg', '<iframe src=\"http://www.canlitvlive.io/tvizle.php?t=1&tv=atv-canli-tv-hd-izle\" frameborder=\"0\" width=\"100%\" height=\"480\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', '<iframe src=\"http://www.canlitvlive.io/tvyayinakisi.php?css=eyJndW5zZWMiOiIwIiwibGlzdGUiOiIiLCJkdW4iOiIxIiwidGVrZ3VuIjoiMSJ9&t=1&tv=atv-canli-tv-hd-izle\" frameborder=\"0\" width=\"100%\" height=\"200\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'),
(24, 'TRT SPOR', 'spor', 'img/21776216532093828554trt1.jpg', '<iframe src=\"http://www.canlitvlive.io/tvizle.php?t=1&tv=trt-3-spor\" frameborder=\"0\" width=\"100%\" height=\"480\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', '<iframe src=\"http://www.canlitvlive.io/tvyayinakisi.php?css=eyJndW5zZWMiOiIwIiwibGlzdGUiOiIiLCJkdW4iOiIxIiwidGVrZ3VuIjoiMSJ9&t=1&tv=trt-3-spor\" frameborder=\"0\" width=\"100%\" height=\"420\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Tablo için indeksler `kanallar`
--
ALTER TABLE `kanallar`
  ADD PRIMARY KEY (`kanal_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Tablo için AUTO_INCREMENT değeri `kanallar`
--
ALTER TABLE `kanallar`
  MODIFY `kanal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
