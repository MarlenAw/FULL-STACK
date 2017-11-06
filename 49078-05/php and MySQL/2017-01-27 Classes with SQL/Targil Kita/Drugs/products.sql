-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 11:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fs5`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`) VALUES
(1, 'Neupro', '91.65', 'Abata'),
(2, 'Ximino', '119.22', 'Edgeblab'),
(3, 'Acetaminophen', '131.93', 'Mynte'),
(4, 'PHARMACIST CHOICE ALCOHOL PREP PAD', '44.14', 'Pixope'),
(5, 'Levitra', '17.48', 'Feedfish'),
(6, 'Miconazole 3 Combination Pack', '212.10', 'Leexo'),
(7, 'Preferred Plus Severe Nite Time', '45.63', 'Youfeed'),
(8, 'Rocuronium Bromide', '58.29', 'Oba'),
(9, 'SUNMARK 12 HOUR ALLERGY RELIEF', '125.13', 'Pixonyx'),
(10, 'Good Neighbor Pharmacy Sinus and Allergy PE', '165.33', 'Voolith'),
(11, 'Trazodone Hydrochloride', '144.67', 'Mita'),
(12, 'ILLUMINATING FINISH', '63.46', 'Zoonoodle'),
(13, 'OPANA ER', '51.87', 'Yata'),
(14, 'Diaderm Antifungal', '139.19', 'Feedbug'),
(15, 'Bupropion Hydrochloride', '124.99', 'Meetz'),
(16, 'SEPHORA BY OPI MOISTURIZING HAND SANITIZER', '158.31', 'Feedfish'),
(17, 'Unblemish', '162.90', 'Wikizz'),
(18, 'ADVATE', '136.36', 'Wordtune'),
(19, 'PLANTAGO LANCEOLATA POLLEN', '96.94', 'Eadel'),
(20, 'Ulta Freshwater Mist Anti-Bacterial Deep Cleansing', '175.83', 'Livetube'),
(21, 'Diclofenac Sodium', '78.26', 'Wordify'),
(22, 'IFEX', '180.68', 'Avamba'),
(23, 'RANITIDINE', '130.71', 'Wordware'),
(24, 'Smart Sense Hydrocortisone', '77.48', 'Quatz'),
(25, 'BETULA LENTA POLLEN', '16.16', 'Jabberstorm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
