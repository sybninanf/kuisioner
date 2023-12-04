-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 09:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dimensi`
--

CREATE TABLE `dimensi` (
  `dimensi_id` int(11) NOT NULL,
  `dimensi_nama_id` text DEFAULT NULL,
  `dimensi` text DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dimensi`
--

INSERT INTO `dimensi` (`dimensi_id`, `dimensi_nama_id`, `dimensi`, `id_pelanggan`) VALUES
(3, 'X1', 'Bukti Fisik', NULL),
(4, 'X2', 'Kehandalan', NULL),
(5, 'X3', 'Daya Tanggap', NULL),
(6, 'X4', 'Jaminan', NULL),
(7, 'X5', 'Empati', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `harapan`
--

CREATE TABLE `harapan` (
  `harapan_id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `harapan_SP` int(11) NOT NULL,
  `harapan_P` int(11) NOT NULL,
  `harapan_CP` int(11) NOT NULL,
  `harapan_TP` int(11) NOT NULL,
  `harapan_STP` int(11) NOT NULL,
  `dimensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harapan`
--

INSERT INTO `harapan` (`harapan_id`, `pertanyaan_id`, `harapan_SP`, `harapan_P`, `harapan_CP`, `harapan_TP`, `harapan_STP`, `dimensi`) VALUES
(232, 1, 1, 0, 0, 0, 0, ''),
(233, 2, 0, 1, 0, 0, 0, ''),
(234, 3, 0, 0, 1, 0, 0, ''),
(235, 4, 0, 1, 0, 0, 0, ''),
(236, 5, 1, 0, 0, 0, 0, ''),
(237, 6, 1, 0, 0, 0, 0, ''),
(238, 7, 0, 0, 1, 0, 0, ''),
(239, 8, 0, 1, 0, 0, 0, ''),
(240, 9, 1, 0, 0, 0, 0, ''),
(241, 10, 0, 1, 0, 0, 0, ''),
(242, 11, 0, 0, 1, 0, 0, ''),
(243, 12, 0, 1, 0, 0, 0, ''),
(244, 13, 1, 0, 0, 0, 0, ''),
(245, 14, 0, 1, 0, 0, 0, ''),
(246, 15, 0, 0, 1, 0, 0, ''),
(247, 16, 0, 1, 0, 0, 0, ''),
(248, 17, 1, 0, 0, 0, 0, ''),
(249, 18, 0, 1, 0, 0, 0, ''),
(250, 19, 1, 0, 0, 0, 0, ''),
(251, 20, 0, 1, 0, 0, 0, ''),
(252, 1, 1, 0, 0, 0, 0, ''),
(253, 2, 0, 1, 0, 0, 0, ''),
(254, 3, 0, 0, 1, 0, 0, ''),
(255, 4, 0, 1, 0, 0, 0, ''),
(256, 5, 1, 0, 0, 0, 0, ''),
(257, 6, 0, 1, 0, 0, 0, ''),
(258, 7, 0, 0, 1, 0, 0, ''),
(259, 8, 0, 1, 0, 0, 0, ''),
(260, 9, 1, 0, 0, 0, 0, ''),
(261, 10, 0, 1, 0, 0, 0, ''),
(262, 11, 0, 0, 1, 0, 0, ''),
(263, 12, 0, 1, 0, 0, 0, ''),
(264, 13, 1, 0, 0, 0, 0, ''),
(265, 14, 0, 1, 0, 0, 0, ''),
(266, 15, 0, 0, 1, 0, 0, ''),
(267, 16, 0, 0, 1, 0, 0, ''),
(268, 17, 1, 0, 0, 0, 0, ''),
(269, 18, 0, 0, 1, 0, 0, ''),
(270, 19, 0, 1, 0, 0, 0, ''),
(271, 20, 0, 1, 0, 0, 0, ''),
(272, 1, 1, 0, 0, 0, 0, ''),
(273, 2, 0, 1, 0, 0, 0, ''),
(274, 3, 0, 0, 1, 0, 0, ''),
(275, 4, 0, 1, 0, 0, 0, ''),
(276, 5, 1, 0, 0, 0, 0, ''),
(277, 6, 0, 1, 0, 0, 0, ''),
(278, 7, 0, 0, 1, 0, 0, ''),
(279, 8, 0, 1, 0, 0, 0, ''),
(280, 9, 1, 0, 0, 0, 0, ''),
(281, 10, 0, 1, 0, 0, 0, ''),
(282, 11, 0, 1, 0, 0, 0, ''),
(283, 12, 0, 1, 0, 0, 0, ''),
(284, 13, 1, 0, 0, 0, 0, ''),
(285, 14, 0, 1, 0, 0, 0, ''),
(286, 15, 0, 0, 1, 0, 0, ''),
(287, 16, 0, 1, 0, 0, 0, ''),
(288, 17, 1, 0, 0, 0, 0, ''),
(289, 18, 1, 0, 0, 0, 0, ''),
(290, 19, 1, 0, 0, 0, 0, ''),
(291, 20, 1, 0, 0, 0, 0, ''),
(292, 1, 1, 0, 0, 0, 0, ''),
(293, 2, 0, 1, 0, 0, 0, ''),
(294, 3, 0, 0, 1, 0, 0, ''),
(295, 4, 0, 1, 0, 0, 0, ''),
(296, 5, 1, 0, 0, 0, 0, ''),
(297, 6, 0, 1, 0, 0, 0, ''),
(298, 7, 0, 0, 1, 0, 0, ''),
(299, 8, 0, 1, 0, 0, 0, ''),
(300, 9, 0, 1, 0, 0, 0, ''),
(301, 10, 1, 0, 0, 0, 0, ''),
(302, 11, 1, 0, 0, 0, 0, ''),
(303, 12, 0, 1, 0, 0, 0, ''),
(304, 13, 1, 0, 0, 0, 0, ''),
(305, 14, 0, 1, 0, 0, 0, ''),
(306, 15, 0, 1, 0, 0, 0, ''),
(307, 16, 1, 0, 0, 0, 0, ''),
(308, 17, 1, 0, 0, 0, 0, ''),
(309, 18, 0, 1, 0, 0, 0, ''),
(310, 19, 0, 1, 0, 0, 0, ''),
(311, 20, 1, 0, 0, 0, 0, ''),
(312, 1, 1, 0, 0, 0, 0, ''),
(313, 2, 0, 1, 0, 0, 0, ''),
(314, 3, 0, 0, 1, 0, 0, ''),
(315, 4, 0, 1, 0, 0, 0, ''),
(316, 5, 1, 0, 0, 0, 0, ''),
(317, 6, 0, 1, 0, 0, 0, ''),
(318, 7, 1, 0, 0, 0, 0, ''),
(319, 8, 0, 1, 0, 0, 0, ''),
(320, 9, 1, 0, 0, 0, 0, ''),
(321, 10, 0, 1, 0, 0, 0, ''),
(322, 11, 0, 0, 1, 0, 0, ''),
(323, 12, 0, 1, 0, 0, 0, ''),
(324, 13, 1, 0, 0, 0, 0, ''),
(325, 14, 0, 1, 0, 0, 0, ''),
(326, 15, 0, 1, 0, 0, 0, ''),
(327, 16, 0, 1, 0, 0, 0, ''),
(328, 17, 1, 0, 0, 0, 0, ''),
(329, 18, 0, 1, 0, 0, 0, ''),
(330, 19, 0, 1, 0, 0, 0, ''),
(331, 20, 0, 1, 0, 0, 0, ''),
(332, 1, 1, 0, 0, 0, 0, ''),
(333, 2, 0, 1, 0, 0, 0, ''),
(334, 3, 0, 0, 1, 0, 0, ''),
(335, 4, 0, 1, 0, 0, 0, ''),
(336, 5, 1, 0, 0, 0, 0, ''),
(337, 6, 0, 1, 0, 0, 0, ''),
(338, 7, 0, 0, 1, 0, 0, ''),
(339, 8, 0, 1, 0, 0, 0, ''),
(340, 9, 1, 0, 0, 0, 0, ''),
(341, 10, 0, 1, 0, 0, 0, ''),
(342, 11, 0, 0, 1, 0, 0, ''),
(343, 12, 0, 1, 0, 0, 0, ''),
(344, 13, 1, 0, 0, 0, 0, ''),
(345, 14, 1, 0, 0, 0, 0, ''),
(346, 15, 1, 0, 0, 0, 0, ''),
(347, 16, 1, 0, 0, 0, 0, ''),
(348, 17, 1, 0, 0, 0, 0, ''),
(349, 18, 0, 1, 0, 0, 0, ''),
(350, 19, 0, 0, 1, 0, 0, ''),
(351, 20, 0, 1, 0, 0, 0, ''),
(352, 1, 1, 0, 0, 0, 0, ''),
(353, 2, 1, 0, 0, 0, 0, ''),
(354, 3, 0, 0, 1, 0, 0, ''),
(355, 4, 0, 1, 0, 0, 0, ''),
(356, 5, 1, 0, 0, 0, 0, ''),
(357, 6, 0, 1, 0, 0, 0, ''),
(358, 7, 0, 0, 1, 0, 0, ''),
(359, 8, 0, 1, 0, 0, 0, ''),
(360, 9, 1, 0, 0, 0, 0, ''),
(361, 10, 0, 1, 0, 0, 0, ''),
(362, 11, 1, 0, 0, 0, 0, ''),
(363, 12, 0, 1, 0, 0, 0, ''),
(364, 13, 0, 0, 1, 0, 0, ''),
(365, 14, 0, 1, 0, 0, 0, ''),
(366, 15, 1, 0, 0, 0, 0, ''),
(367, 16, 0, 1, 0, 0, 0, ''),
(368, 17, 1, 0, 0, 0, 0, ''),
(369, 18, 0, 1, 0, 0, 0, ''),
(370, 19, 0, 0, 1, 0, 0, ''),
(371, 20, 0, 1, 0, 0, 0, ''),
(372, 1, 1, 0, 0, 0, 0, ''),
(373, 2, 0, 1, 0, 0, 0, ''),
(374, 3, 0, 0, 1, 0, 0, ''),
(375, 4, 0, 1, 0, 0, 0, ''),
(376, 5, 0, 1, 0, 0, 0, ''),
(377, 6, 0, 0, 0, 1, 0, ''),
(378, 7, 0, 1, 0, 0, 0, ''),
(379, 8, 0, 0, 0, 1, 0, ''),
(380, 9, 0, 1, 0, 0, 0, ''),
(381, 10, 0, 0, 1, 0, 0, ''),
(382, 11, 0, 0, 1, 0, 0, ''),
(383, 12, 0, 1, 0, 0, 0, ''),
(384, 13, 0, 0, 0, 1, 0, ''),
(385, 14, 0, 0, 1, 0, 0, ''),
(386, 15, 0, 0, 1, 0, 0, ''),
(387, 16, 0, 1, 0, 0, 0, ''),
(388, 17, 1, 0, 0, 0, 0, ''),
(389, 18, 0, 1, 0, 0, 0, ''),
(390, 19, 0, 0, 1, 0, 0, ''),
(391, 20, 1, 0, 0, 0, 0, ''),
(392, 1, 1, 0, 0, 0, 0, ''),
(393, 2, 0, 1, 0, 0, 0, ''),
(394, 3, 0, 0, 1, 0, 0, ''),
(395, 4, 0, 1, 0, 0, 0, ''),
(396, 5, 1, 0, 0, 0, 0, ''),
(397, 6, 1, 0, 0, 0, 0, ''),
(398, 7, 0, 1, 0, 0, 0, ''),
(399, 8, 0, 0, 1, 0, 0, ''),
(400, 9, 1, 0, 0, 0, 0, ''),
(401, 10, 0, 1, 0, 0, 0, ''),
(402, 11, 0, 0, 1, 0, 0, ''),
(403, 12, 0, 1, 0, 0, 0, ''),
(404, 13, 0, 1, 0, 0, 0, ''),
(405, 14, 0, 1, 0, 0, 0, ''),
(406, 15, 0, 0, 1, 0, 0, ''),
(407, 16, 0, 1, 0, 0, 0, ''),
(408, 17, 0, 0, 1, 0, 0, ''),
(409, 18, 0, 1, 0, 0, 0, ''),
(410, 19, 0, 1, 0, 0, 0, ''),
(411, 20, 0, 1, 0, 0, 0, ''),
(412, 1, 1, 0, 0, 0, 0, ''),
(413, 2, 0, 0, 1, 0, 0, ''),
(414, 3, 0, 1, 0, 0, 0, ''),
(415, 4, 0, 0, 1, 0, 0, ''),
(416, 5, 1, 0, 0, 0, 0, ''),
(417, 6, 0, 1, 0, 0, 0, ''),
(418, 7, 0, 0, 1, 0, 0, ''),
(419, 8, 0, 1, 0, 0, 0, ''),
(420, 9, 0, 0, 1, 0, 0, ''),
(421, 10, 1, 0, 0, 0, 0, ''),
(422, 11, 0, 1, 0, 0, 0, ''),
(423, 12, 0, 0, 1, 0, 0, ''),
(424, 13, 0, 0, 1, 0, 0, ''),
(425, 14, 0, 1, 0, 0, 0, ''),
(426, 15, 0, 0, 1, 0, 0, ''),
(427, 16, 1, 0, 0, 0, 0, ''),
(428, 17, 1, 0, 0, 0, 0, ''),
(429, 18, 0, 1, 0, 0, 0, ''),
(430, 19, 0, 0, 1, 0, 0, ''),
(431, 20, 0, 1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `telp_pelanggan` varchar(13) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jk`, `telp_pelanggan`, `alamat_pelanggan`) VALUES
(0, 'jaehyun', 'Laki-Laki', '0895673542738', 'Jl. Raya Kresek, Kp.Merak, RT009/001, Kec.Sukamulya, Kab.Tangerang-Banten'),
(0, 'ryujim', 'Perempuan', '097654477', 'korea'),
(0, 'mark', 'Laki-Laki', '083652736292', 'korea'),
(0, 'kyungsoo', 'Laki-Laki', '083652736344', 'korea'),
(0, 'jamal', 'Laki-Laki', '083652736342', 'korea'),
(0, 'jnita sauan', 'Perempuan', '0836527232', 'Indonesia'),
(0, 'nistina shaiya', 'Perempuan', '084352245667', 'Indonesia'),
(0, 'slda', 'Perempuan', '08432453543', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','super_admin','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `email`, `password`, `role`) VALUES
(12, 'Super Admin', 's.admin', 's.admin@gmail.com', '$2y$10$DozEGbjzq6ijS9nESc5tg.CF6HnOu5YS7SUCm6zg0EsDqj.KwXcOe', 'super_admin'),
(13, 'admin', 'admin', 'admin@admin.com', '$2y$10$1wIz0P9ETjiw/eX8qkyE7OBC6njxC45oSwmMg.47i0VEFqcAB8RXO', 'admin'),
(14, 'Owner', 'owner', 'owner@gmail.com', '$2y$10$Tyo52D1gunra3YvF9lm98uH6yIgLnVxumGJl8qr31faiuywaWpvzG', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `pertanyaan_id` int(11) NOT NULL,
  `id_pertanyaan` text NOT NULL,
  `dimensi` text NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`pertanyaan_id`, `id_pertanyaan`, `dimensi`, `pertanyaan`) VALUES
(1, 'P01', 'Bukti Fisik', 'Apakah Lingkungan bengkel rapih dan bersih?'),
(2, 'P02', 'Bukti Fisik', 'Peralatan bengkel yang lengkap?'),
(3, 'P03', 'Bukti Fisik', 'Fasilitas Kamar Mandi/WC yang bersih dan nyaman?'),
(4, 'P04', 'Bukti Fisik', 'Ruang tunggu yang nyaman (kursi,meja,AC,Softdrink,WIfi)?'),
(5, 'P05', 'Kehandalan', 'Ongkos servis dan harga sparepart standar dan terjangkau?'),
(6, 'P06', 'Kehandalan', 'Mekanik mempunyai pengetahuan luas dalam bidangnya?'),
(7, 'P07', 'Kehandalan', 'Mekanik mampu meperbaiki kerusakan?'),
(8, 'P08', 'Kehandalan', 'Karyawan bengkel selalu tersenyum saat melayani?'),
(9, 'P09', 'Daya Tanggap', 'Memenuhi permintaan khusus dari pelanggan?'),
(10, 'P10', 'Daya Tanggap', 'Karyawan bengkel mampu bekerja dalam tim?'),
(11, 'P11', 'Daya Tanggap', 'Karyawan dan staf mekanik memberikan tanggapan dan perhatian kepada pelanggan sebagai orang yang penting?'),
(12, 'P12', 'Daya Tanggap', 'Pemberian informasi yang jelas kepada pelanggan?'),
(13, 'P13', 'Jaminan', 'Peralatan yang digunakan servis dan perawatan dapat dipertanggungjawabkan?'),
(14, 'P14', 'Jaminan', 'Tempar parkir aman dan luas?'),
(15, 'P15', 'Jaminan', 'Memberikan garansi servis dan sparepart?'),
(16, 'P16', 'Jaminan', 'Aman dari kerusakan,lecet,penyok dan hilang saat proses servis berlangsung?'),
(17, 'P17', 'Empati', 'Karyawan dan staf mekanik memberikan tanggapan dan perhatian kepada pelanggan sebagai orang yang penting?'),
(18, 'P18', 'Empati', 'Memahami kebutuhan pelanggan?'),
(19, 'P19', 'Empati', 'Pelayanan ramah dan santun terhadap pelanggan?'),
(20, 'P20', 'Empati', 'Pelayanan yang adil tanpa memandang status sosial?');

-- --------------------------------------------------------

--
-- Table structure for table `presepsi`
--

CREATE TABLE `presepsi` (
  `presepsi_id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `presepsi_SP` int(11) NOT NULL,
  `presepsi_P` int(11) NOT NULL,
  `presepsi_CP` int(11) NOT NULL,
  `presepsi_TP` int(11) NOT NULL,
  `presepsi_STP` int(11) NOT NULL,
  `dimensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presepsi`
--

INSERT INTO `presepsi` (`presepsi_id`, `pertanyaan_id`, `presepsi_SP`, `presepsi_P`, `presepsi_CP`, `presepsi_TP`, `presepsi_STP`, `dimensi`) VALUES
(232, 1, 0, 1, 0, 0, 0, ''),
(233, 2, 0, 1, 0, 0, 0, ''),
(234, 3, 1, 0, 0, 0, 0, ''),
(235, 4, 0, 1, 0, 0, 0, ''),
(236, 5, 0, 0, 1, 0, 0, ''),
(237, 6, 0, 0, 1, 0, 0, ''),
(238, 7, 0, 0, 1, 0, 0, ''),
(239, 8, 0, 0, 1, 0, 0, ''),
(240, 9, 1, 0, 0, 0, 0, ''),
(241, 10, 0, 1, 0, 0, 0, ''),
(242, 11, 0, 1, 0, 0, 0, ''),
(243, 12, 0, 0, 1, 0, 0, ''),
(244, 13, 1, 0, 0, 0, 0, ''),
(245, 14, 0, 1, 0, 0, 0, ''),
(246, 15, 0, 0, 1, 0, 0, ''),
(247, 16, 0, 1, 0, 0, 0, ''),
(248, 17, 1, 0, 0, 0, 0, ''),
(249, 18, 0, 1, 0, 0, 0, ''),
(250, 19, 0, 0, 1, 0, 0, ''),
(251, 20, 0, 1, 0, 0, 0, ''),
(252, 1, 1, 0, 0, 0, 0, ''),
(253, 2, 0, 1, 0, 0, 0, ''),
(254, 3, 0, 0, 1, 0, 0, ''),
(255, 4, 0, 1, 0, 0, 0, ''),
(256, 5, 1, 0, 0, 0, 0, ''),
(257, 6, 0, 1, 0, 0, 0, ''),
(258, 7, 0, 0, 1, 0, 0, ''),
(259, 8, 0, 1, 0, 0, 0, ''),
(260, 9, 1, 0, 0, 0, 0, ''),
(261, 10, 0, 0, 1, 0, 0, ''),
(262, 11, 0, 1, 0, 0, 0, ''),
(263, 12, 0, 0, 0, 1, 0, ''),
(264, 13, 1, 0, 0, 0, 0, ''),
(265, 14, 0, 1, 0, 0, 0, ''),
(266, 15, 0, 0, 1, 0, 0, ''),
(267, 16, 0, 1, 0, 0, 0, ''),
(268, 17, 0, 1, 0, 0, 0, ''),
(269, 18, 0, 1, 0, 0, 0, ''),
(270, 19, 0, 0, 1, 0, 0, ''),
(271, 20, 0, 0, 1, 0, 0, ''),
(272, 1, 0, 0, 1, 0, 0, ''),
(273, 2, 0, 0, 0, 1, 0, ''),
(274, 3, 0, 0, 1, 0, 0, ''),
(275, 4, 1, 0, 0, 0, 0, ''),
(276, 5, 0, 0, 1, 0, 0, ''),
(277, 6, 0, 0, 1, 0, 0, ''),
(278, 7, 0, 0, 1, 0, 0, ''),
(279, 8, 0, 0, 1, 0, 0, ''),
(280, 9, 1, 0, 0, 0, 0, ''),
(281, 10, 1, 0, 0, 0, 0, ''),
(282, 11, 1, 0, 0, 0, 0, ''),
(283, 12, 1, 0, 0, 0, 0, ''),
(284, 13, 0, 0, 1, 0, 0, ''),
(285, 14, 0, 1, 0, 0, 0, ''),
(286, 15, 0, 0, 1, 0, 0, ''),
(287, 16, 0, 1, 0, 0, 0, ''),
(288, 17, 1, 0, 0, 0, 0, ''),
(289, 18, 0, 1, 0, 0, 0, ''),
(290, 19, 0, 1, 0, 0, 0, ''),
(291, 20, 0, 1, 0, 0, 0, ''),
(292, 1, 1, 0, 0, 0, 0, ''),
(293, 2, 0, 1, 0, 0, 0, ''),
(294, 3, 0, 0, 1, 0, 0, ''),
(295, 4, 0, 0, 0, 1, 0, ''),
(296, 5, 1, 0, 0, 0, 0, ''),
(297, 6, 0, 1, 0, 0, 0, ''),
(298, 7, 0, 0, 1, 0, 0, ''),
(299, 8, 0, 1, 0, 0, 0, ''),
(300, 9, 1, 0, 0, 0, 0, ''),
(301, 10, 0, 1, 0, 0, 0, ''),
(302, 11, 0, 0, 1, 0, 0, ''),
(303, 12, 0, 0, 0, 1, 0, ''),
(304, 13, 1, 0, 0, 0, 0, ''),
(305, 14, 0, 1, 0, 0, 0, ''),
(306, 15, 0, 0, 1, 0, 0, ''),
(307, 16, 0, 1, 0, 0, 0, ''),
(308, 17, 1, 0, 0, 0, 0, ''),
(309, 18, 0, 1, 0, 0, 0, ''),
(310, 19, 0, 1, 0, 0, 0, ''),
(311, 20, 1, 0, 0, 0, 0, ''),
(312, 1, 0, 1, 0, 0, 0, ''),
(313, 2, 0, 0, 1, 0, 0, ''),
(314, 3, 0, 1, 0, 0, 0, ''),
(315, 4, 1, 0, 0, 0, 0, ''),
(316, 5, 0, 1, 0, 0, 0, ''),
(317, 6, 0, 0, 1, 0, 0, ''),
(318, 7, 0, 1, 0, 0, 0, ''),
(319, 8, 0, 0, 1, 0, 0, ''),
(320, 9, 1, 0, 0, 0, 0, ''),
(321, 10, 0, 1, 0, 0, 0, ''),
(322, 11, 0, 0, 1, 0, 0, ''),
(323, 12, 0, 1, 0, 0, 0, ''),
(324, 13, 1, 0, 0, 0, 0, ''),
(325, 14, 0, 1, 0, 0, 0, ''),
(326, 15, 0, 0, 1, 0, 0, ''),
(327, 16, 0, 1, 0, 0, 0, ''),
(328, 17, 1, 0, 0, 0, 0, ''),
(329, 18, 0, 1, 0, 0, 0, ''),
(330, 19, 0, 1, 0, 0, 0, ''),
(331, 20, 0, 1, 0, 0, 0, ''),
(332, 1, 0, 1, 0, 0, 0, ''),
(333, 2, 0, 0, 1, 0, 0, ''),
(334, 3, 0, 1, 0, 0, 0, ''),
(335, 4, 1, 0, 0, 0, 0, ''),
(336, 5, 1, 0, 0, 0, 0, ''),
(337, 6, 0, 1, 0, 0, 0, ''),
(338, 7, 0, 0, 1, 0, 0, ''),
(339, 8, 0, 1, 0, 0, 0, ''),
(340, 9, 1, 0, 0, 0, 0, ''),
(341, 10, 0, 1, 0, 0, 0, ''),
(342, 11, 0, 0, 1, 0, 0, ''),
(343, 12, 0, 1, 0, 0, 0, ''),
(344, 13, 1, 0, 0, 0, 0, ''),
(345, 14, 0, 1, 0, 0, 0, ''),
(346, 15, 0, 0, 1, 0, 0, ''),
(347, 16, 0, 1, 0, 0, 0, ''),
(348, 17, 1, 0, 0, 0, 0, ''),
(349, 18, 0, 0, 1, 0, 0, ''),
(350, 19, 0, 0, 1, 0, 0, ''),
(351, 20, 0, 0, 1, 0, 0, ''),
(352, 1, 0, 1, 0, 0, 0, ''),
(353, 2, 0, 1, 0, 0, 0, ''),
(354, 3, 0, 0, 1, 0, 0, ''),
(355, 4, 0, 0, 1, 0, 0, ''),
(356, 5, 1, 0, 0, 0, 0, ''),
(357, 6, 0, 1, 0, 0, 0, ''),
(358, 7, 0, 0, 1, 0, 0, ''),
(359, 8, 0, 1, 0, 0, 0, ''),
(360, 9, 1, 0, 0, 0, 0, ''),
(361, 10, 0, 1, 0, 0, 0, ''),
(362, 11, 0, 0, 1, 0, 0, ''),
(363, 12, 0, 0, 1, 0, 0, ''),
(364, 13, 1, 0, 0, 0, 0, ''),
(365, 14, 0, 1, 0, 0, 0, ''),
(366, 15, 0, 0, 1, 0, 0, ''),
(367, 16, 0, 1, 0, 0, 0, ''),
(368, 17, 1, 0, 0, 0, 0, ''),
(369, 18, 0, 1, 0, 0, 0, ''),
(370, 19, 0, 0, 1, 0, 0, ''),
(371, 20, 0, 0, 1, 0, 0, ''),
(372, 1, 0, 1, 0, 0, 0, ''),
(373, 2, 0, 0, 1, 0, 0, ''),
(374, 3, 0, 0, 0, 1, 0, ''),
(375, 4, 0, 0, 1, 0, 0, ''),
(376, 5, 1, 0, 0, 0, 0, ''),
(377, 6, 0, 1, 0, 0, 0, ''),
(378, 7, 0, 0, 1, 0, 0, ''),
(379, 8, 0, 0, 0, 1, 0, ''),
(380, 9, 0, 1, 0, 0, 0, ''),
(381, 10, 0, 0, 1, 0, 0, ''),
(382, 11, 0, 0, 1, 0, 0, ''),
(383, 12, 0, 0, 0, 1, 0, ''),
(384, 13, 0, 0, 1, 0, 0, ''),
(385, 14, 0, 0, 1, 0, 0, ''),
(386, 15, 0, 0, 1, 0, 0, ''),
(387, 16, 0, 0, 1, 0, 0, ''),
(388, 17, 0, 1, 0, 0, 0, ''),
(389, 18, 0, 1, 0, 0, 0, ''),
(390, 19, 0, 0, 1, 0, 0, ''),
(391, 20, 0, 0, 1, 0, 0, ''),
(392, 1, 0, 0, 1, 0, 0, ''),
(393, 2, 0, 0, 1, 0, 0, ''),
(394, 3, 0, 0, 1, 0, 0, ''),
(395, 4, 0, 0, 1, 0, 0, ''),
(396, 5, 1, 0, 0, 0, 0, ''),
(397, 6, 0, 1, 0, 0, 0, ''),
(398, 7, 0, 0, 1, 0, 0, ''),
(399, 8, 0, 0, 1, 0, 0, ''),
(400, 9, 1, 0, 0, 0, 0, ''),
(401, 10, 0, 1, 0, 0, 0, ''),
(402, 11, 0, 1, 0, 0, 0, ''),
(403, 12, 1, 0, 0, 0, 0, ''),
(404, 13, 0, 0, 0, 1, 0, ''),
(405, 14, 0, 0, 1, 0, 0, ''),
(406, 15, 0, 0, 1, 0, 0, ''),
(407, 16, 0, 0, 0, 1, 0, ''),
(408, 17, 0, 0, 0, 1, 0, ''),
(409, 18, 0, 0, 0, 1, 0, ''),
(410, 19, 0, 0, 1, 0, 0, ''),
(411, 20, 0, 0, 1, 0, 0, ''),
(412, 1, 1, 0, 0, 0, 0, ''),
(413, 2, 0, 0, 1, 0, 0, ''),
(414, 3, 0, 0, 1, 0, 0, ''),
(415, 4, 0, 0, 1, 0, 0, ''),
(416, 5, 1, 0, 0, 0, 0, ''),
(417, 6, 0, 1, 0, 0, 0, ''),
(418, 7, 0, 0, 1, 0, 0, ''),
(419, 8, 0, 1, 0, 0, 0, ''),
(420, 9, 1, 0, 0, 0, 0, ''),
(421, 10, 0, 1, 0, 0, 0, ''),
(422, 11, 0, 0, 1, 0, 0, ''),
(423, 12, 0, 1, 0, 0, 0, ''),
(424, 13, 0, 0, 1, 0, 0, ''),
(425, 14, 0, 0, 1, 0, 0, ''),
(426, 15, 0, 0, 1, 0, 0, ''),
(427, 16, 0, 0, 0, 1, 0, ''),
(428, 17, 1, 0, 0, 0, 0, ''),
(429, 18, 1, 0, 0, 0, 0, ''),
(430, 19, 0, 0, 1, 0, 0, ''),
(431, 20, 0, 0, 0, 0, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`dimensi_id`);

--
-- Indexes for table `harapan`
--
ALTER TABLE `harapan`
  ADD PRIMARY KEY (`harapan_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`pertanyaan_id`);

--
-- Indexes for table `presepsi`
--
ALTER TABLE `presepsi`
  ADD PRIMARY KEY (`presepsi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dimensi`
--
ALTER TABLE `dimensi`
  MODIFY `dimensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `harapan`
--
ALTER TABLE `harapan`
  MODIFY `harapan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `pertanyaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `presepsi`
--
ALTER TABLE `presepsi`
  MODIFY `presepsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
