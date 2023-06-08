-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2023, 15:11:56
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `219f2_rangars`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_blacklist`
--

CREATE TABLE `219f2_blacklist` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `tc` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `accountType` varchar(255) DEFAULT NULL,
  `bannedDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_help`
--

CREATE TABLE `219f2_help` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `message` varchar(800) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `accessType` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `msgHash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_logs`
--

CREATE TABLE `219f2_logs` (
  `id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `219f2_logs`
--

INSERT INTO `219f2_logs` (`id`, `message`, `type`, `date`, `hash`) VALUES
(399, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:09:19', NULL),
(400, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Kaan Atalay kaan@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-01 22:09:24', NULL),
(401, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:09:38', NULL),
(402, 'Devilyxrd Was Here başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:10:24', NULL),
(403, 'Devilyxrd Was Here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-01 22:10:51', 'c7ec09c132ca2e9326b187ec8d16397d'),
(404, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:11:50', NULL),
(405, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Devilyxrd was here devilyxrd@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-01 22:12:06', NULL),
(406, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:13:52', NULL),
(407, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2001-06-23 22:14:34', NULL),
(408, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-01 22:14:37', 'b927e4c1c4b84acf01cacdc90be43e10'),
(409, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-01 22:14:37', 'b927e4c1c4b84acf01cacdc90be43e10'),
(410, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-01 23:23:33', 'b927e4c1c4b84acf01cacdc90be43e10'),
(411, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 17:28:49', NULL),
(412, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-02 17:28:59', 'b927e4c1c4b84acf01cacdc90be43e10'),
(413, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 17:30:22', NULL),
(414, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-02 17:30:25', 'b927e4c1c4b84acf01cacdc90be43e10'),
(415, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 17:31:04', NULL),
(416, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Kaan Atalay kaan@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-02 17:31:16', NULL),
(417, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 17:32:32', NULL),
(418, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-02 17:32:49', 'b927e4c1c4b84acf01cacdc90be43e10'),
(419, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 19:47:10', NULL),
(420, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-02 19:47:16', 'b927e4c1c4b84acf01cacdc90be43e10'),
(421, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 22:00:10', NULL),
(422, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Kaan Atalay kaan@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-02 22:02:45', NULL),
(423, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1   ', 'Admin Yetkisiz Hesap', '2023-06-02 22:03:04', NULL),
(424, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2002-06-23 22:03:17', NULL),
(425, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 01:32:16', NULL),
(426, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 01:33:12', NULL),
(427, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1   ', 'Admin Yetkisiz Hesap', '2023-06-04 01:33:26', NULL),
(428, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 01:34:39', NULL),
(429, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 01:36:03', 'b927e4c1c4b84acf01cacdc90be43e10'),
(430, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 04:22:31', 'b927e4c1c4b84acf01cacdc90be43e10'),
(431, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 12:49:37', NULL),
(432, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:49:46', 'b927e4c1c4b84acf01cacdc90be43e10'),
(433, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:50:15', 'b927e4c1c4b84acf01cacdc90be43e10'),
(434, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:50:16', 'b927e4c1c4b84acf01cacdc90be43e10'),
(435, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:54:09', 'b927e4c1c4b84acf01cacdc90be43e10'),
(436, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:54:20', 'b927e4c1c4b84acf01cacdc90be43e10'),
(437, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 12:54:21', 'b927e4c1c4b84acf01cacdc90be43e10'),
(438, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 12:59:19', NULL),
(439, 'Hakan Aktan başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 14:00:21', NULL),
(440, 'Mehmet Arvaş başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 14:40:14', NULL),
(441, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 14:44:51', NULL),
(442, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 14:46:22', 'b927e4c1c4b84acf01cacdc90be43e10'),
(443, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 21:23:37', NULL),
(444, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Kaan Atalay kaan@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-04 21:47:29', NULL),
(445, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2004-06-23 21:50:43', NULL),
(446, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 21:50:46', 'b927e4c1c4b84acf01cacdc90be43e10'),
(447, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-04 21:50:46', 'b927e4c1c4b84acf01cacdc90be43e10'),
(448, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2005-06-23 09:11:57', NULL),
(449, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2005-06-23 09:13:12', NULL),
(450, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 09:13:17', 'b927e4c1c4b84acf01cacdc90be43e10'),
(451, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2005-06-23 23:20:08', NULL),
(452, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2005-06-23 23:23:26', NULL),
(453, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:23:29', 'b927e4c1c4b84acf01cacdc90be43e10'),
(454, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:23:29', 'b927e4c1c4b84acf01cacdc90be43e10'),
(455, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:23:43', 'b927e4c1c4b84acf01cacdc90be43e10'),
(456, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:23:58', 'b927e4c1c4b84acf01cacdc90be43e10'),
(457, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:24:12', 'b927e4c1c4b84acf01cacdc90be43e10'),
(458, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:24:13', 'b927e4c1c4b84acf01cacdc90be43e10'),
(459, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:24:27', 'b927e4c1c4b84acf01cacdc90be43e10'),
(460, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:24:28', 'b927e4c1c4b84acf01cacdc90be43e10'),
(461, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:24:47', 'b927e4c1c4b84acf01cacdc90be43e10'),
(462, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:25:02', 'b927e4c1c4b84acf01cacdc90be43e10'),
(463, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:25:19', 'b927e4c1c4b84acf01cacdc90be43e10'),
(464, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:25:35', 'b927e4c1c4b84acf01cacdc90be43e10'),
(465, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:27:12', 'b927e4c1c4b84acf01cacdc90be43e10'),
(466, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:27:25', 'b927e4c1c4b84acf01cacdc90be43e10'),
(467, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:28:12', 'b927e4c1c4b84acf01cacdc90be43e10'),
(468, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:28:22', 'b927e4c1c4b84acf01cacdc90be43e10'),
(469, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-05 23:28:35', 'b927e4c1c4b84acf01cacdc90be43e10'),
(470, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2007-06-23 15:00:38', NULL),
(471, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2007-06-23 15:02:21', NULL),
(472, 'Başarısız giriş denemesi. Engellenen IP adresi: ::1 Kaan Atalay kaan@gmail.com', 'Admin Yetkisiz Hesap', '2023-06-07 15:02:39', NULL),
(473, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2007-06-23 15:03:25', NULL),
(474, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-07 15:04:39', 'b927e4c1c4b84acf01cacdc90be43e10'),
(475, 'Kaan Atalay başarılı bir şekilde giriş yaptı.', 'account', '2007-06-23 23:20:09', NULL),
(476, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2007-06-23 23:47:22', NULL),
(477, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-07 23:47:28', 'b927e4c1c4b84acf01cacdc90be43e10'),
(478, 'Devilyxrd was here başarılı bir şekilde giriş yaptı.', 'account', '2008-06-23 08:49:27', NULL),
(479, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-08 12:01:17', 'b927e4c1c4b84acf01cacdc90be43e10'),
(480, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-08 13:45:29', 'b927e4c1c4b84acf01cacdc90be43e10'),
(481, 'Devilyxrd was here başarılı bir şekilde admin paneline giriş yaptı.', 'Giriş Yap', '2023-06-08 15:47:26', 'b927e4c1c4b84acf01cacdc90be43e10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_product`
--

CREATE TABLE `219f2_product` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productImg` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subCategory` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `commission` varchar(255) DEFAULT NULL COMMENT 'Ürünün Komisyonlu Fiyatı',
  `productHash` varchar(255) DEFAULT NULL,
  `environment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `219f2_product`
--

INSERT INTO `219f2_product` (`id`, `productName`, `productImg`, `category`, `subCategory`, `price`, `commission`, `productHash`, `environment`) VALUES
(3, 'Erkek Kolej Ceketi', 'C:/xampp/htdocs/assets/media/products/erkekkolejceket.jpg', 'Giyim ve Moda', 'Erkek Giyim', '500', '550', '126d7b2a4724ad67dc3ca7080e8ef475', '0'),
(4, 'Koltuk Takımı', 'C:/xampp/htdocs/assets/media/products/koltuktakimlari.jpg', 'Ev ve Bahçe', 'Mobilya', '10000', '11000', 'ead7b1b6f3932753126a8eaf6132452c', '0'),
(5, 'Erkek Tıraş Köpüğü', 'C:/xampp/htdocs/assets/media/products/tiraskopugu.jpg', 'Güzellik ve Kişisel Bakım', 'Tıraş ve Epilasyon Ürünleri', '60', '66', 'caa2c7957d0adbc2f65271ca068e85a4', '0'),
(6, 'Kamp Çadırı', 'C:/xampp/htdocs/assets/media/products/kampcadiri.jpg', 'Spor ve Outdoor', 'Kamp Malzemeleri', '670', '737', '92851caea4266b6c6ccba06268c00c51', '0'),
(7, 'Gölgeler Serisi Paula Weston', 'C:/xampp/htdocs/assets/media/products/kitapciklar.png', 'Kitaplar ve Medya', 'Kitaplar', '50', '55', '8f0485fc5f491288e43bf21ae72db808', '0'),
(8, 'İç Araba Aksesuarı', 'C:/xampp/htdocs/assets/media/products/arabaaksesuar.jpg', 'Otomotiv', 'Araba Aksesuarları', '20', '22', '15e1ed8abac3eb0df1d7378c38592015', '0'),
(9, 'Laptop', 'C:/xampp/htdocs/assets/media/products/laptop.jpg', 'Elektronik Ürünler', 'Bilgisayarlar ve Tabletler', '12000', '13200', '8a6f5d7c34ed74776aa7147cdac8e14a', '0'),
(10, 'Samsung Galaxy S21', 'C:/xampp/htdocs/assets/media/products/telefon.jpg', 'Elektronik Ürünler', 'Cep Telefonları ve Aksesuarlar', '21000', '23100', 'd64fc55d1af57806283624da513f0b9a', '0'),
(11, 'Xiaomi Redmi 10', 'C:/xampp/htdocs/assets/media/products/redmi.jpg', 'Elektronik Ürünler', 'Cep Telefonları ve Aksesuarlar', '12000', '13200', '37341728f9fa435879ed24c469488196', '0'),
(12, 'iPhone 11', 'C:/xampp/htdocs/assets/media/products/iphone11.jpg', 'Elektronik Ürünler', 'Cep Telefonları ve Aksesuarlar', '25000', '27500', '0a8d98f39b290226b8bc797808f777a0', '0'),
(13, 'Kadın Elbise Siyah', 'C:/xampp/htdocs/assets/media/products/kadinsiyahelbise.jpg', 'Giyim ve Moda', 'Kadın Giyim', '150', '165', '6709e5f4227848b096c8ab57c2448b17', '0'),
(14, 'Çevre Dostu Mutfak Aletleri', 'C:/xampp/htdocs/assets/media/products/cevredostu.jpg', 'Ev ve Bahçe', 'Mutfak ve Yemek Eşyaları', '500', '550', 'c11386a0a6d8a6e39269a28aa1f7d544', '1'),
(17, 'Samsung Galaxy a71', 'C:/xampp/htdocs/assets/media/products/samsunga71.jpg', 'Elektronik Ürünler', 'Cep Telefonları ve Aksesuarlar', '18000', '19800', '7196bbf2a541f947fbe195608c6cd700', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_productrequest`
--

CREATE TABLE `219f2_productrequest` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productImg` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subCategory` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `commission` varchar(255) DEFAULT NULL,
  `productHash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_request`
--

CREATE TABLE `219f2_request` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tc` varchar(255) DEFAULT NULL,
  `bDate` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `addDate` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `219f2_request`
--

INSERT INTO `219f2_request` (`id`, `ip`, `name`, `surname`, `email`, `tc`, `bDate`, `phoneNumber`, `hash`, `addDate`, `status`) VALUES
(16, '::1', 'Kaan', 'Atalay', 'kaan@gmail.com', '12345678901', '2006-05-29', '+905557771122', '4c1a7168adde441ca54ae61a5cc7f480', '2023-06-04 01:35:24', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `219f2_users`
--

CREATE TABLE `219f2_users` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `tc` varchar(255) DEFAULT NULL,
  `bDate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `accessLevel` varchar(255) DEFAULT NULL,
  `accountType` varchar(255) DEFAULT NULL,
  `rDate` datetime DEFAULT NULL,
  `lastLoginTime` datetime DEFAULT NULL,
  `profileImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `219f2_users`
--

INSERT INTO `219f2_users` (`id`, `ip`, `tc`, `bDate`, `name`, `surname`, `email`, `phoneNumber`, `pass`, `hash`, `accessLevel`, `accountType`, `rDate`, `lastLoginTime`, `profileImg`) VALUES
(10, '::1', NULL, NULL, 'Devilyxrd', 'was here', 'devilyxrd@gmail.com', NULL, '70cf0eecebd9f1a38720a1e793328529', 'b927e4c1c4b84acf01cacdc90be43e10', '1', 'admin', '2023-06-01 22:11:40', NULL, 'C:/xampp/htdocs/assets/media/profiles/b927e4c1c4b84acf01cacdc90be43e10/CraweL.jpeg'),
(11, '::1', '12345678901', '2006-05-29', 'Kaan', 'Atalay', 'kaan@gmail.com', '+90 555 777 1122', 'f40f155eff54c6888dc8e167218bc336', '4c1a7168adde441ca54ae61a5cc7f480', '0', 'business', '2023-06-01 22:13:38', NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `219f2_blacklist`
--
ALTER TABLE `219f2_blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_help`
--
ALTER TABLE `219f2_help`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_logs`
--
ALTER TABLE `219f2_logs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_product`
--
ALTER TABLE `219f2_product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_productrequest`
--
ALTER TABLE `219f2_productrequest`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_request`
--
ALTER TABLE `219f2_request`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `219f2_users`
--
ALTER TABLE `219f2_users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `219f2_blacklist`
--
ALTER TABLE `219f2_blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_help`
--
ALTER TABLE `219f2_help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_logs`
--
ALTER TABLE `219f2_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=482;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_product`
--
ALTER TABLE `219f2_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_productrequest`
--
ALTER TABLE `219f2_productrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_request`
--
ALTER TABLE `219f2_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `219f2_users`
--
ALTER TABLE `219f2_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
