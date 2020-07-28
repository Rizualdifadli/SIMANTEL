-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 06:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simantel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `pemilik_tower` varchar(255) NOT NULL,
  `tower_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`pemilik_tower`, `tower_id`) VALUES
('PT TELKOM INDONESIA', '01001'),
('PT TELKOMSEL', '01002'),
('PT. INDOSAT', '01003'),
('PT. XL AXIATA. Tbk', '01004'),
('PT TELKOMSEL', '01005'),
('PT TELKOM INDONESIA', '01006'),
('PT TBG (TOWER BERSAMA GROUP)', '01007'),
('PT DAYA MITRA TELEKOMUNIKASI', '01008'),
('PT DAYA MITRA TELEKOMUNIKASI', '01009'),
('PT PROTELINDO', '01010'),
('PT TELKOMSEL', '01011'),
('PT MITRATEL', '01012'),
('PT TBG (TOWER BERSAMA GROUP)', '01013'),
('PT. XL AXIATA. Tbk', '02001'),
('PT PROTELINDO', '02002'),
('PT SOLUSI TUNAS PRATAMA, TBK', '02003'),
('PT TELKOMSEL', '02004'),
('PT TELKOMSEL', '02005'),
('PT. INDOSAT', '02006'),
('PT PROTELINDO', '02007'),
('PT SAMPOERNA TELEKOMUNIKASI INDONESIA', '02008'),
('PT TELKOM INDONESIA', '02009'),
('PT TELKOMSEL', '02010'),
('PT TELKOMSEL', '02011'),
('PT TBG (TOWER BERSAMA GROUP)', '02012'),
('PT. INDOSAT', '02013'),
('PT DAYA MITRA TELEKOMUNIKASI', '02014'),
('TOWER KEPOLISIAN', '02015'),
('PT DAYA MITRA TELEKOMUNIKASI', '02016'),
('PT. INDOSAT', '03001'),
('PT SAMPOERNA TELEKOMUNIKASI INDONESIA', '03002'),
('PT TELKOMSEL', '03003'),
('PT TBG (TOWER BERSAMA GROUP)', '03004'),
('PT CENTRATAMA', '03005'),
('PT PROTELINDO', '03006'),
('PT TBG (TOWER BERSAMA GROUP)', '03007'),
('PT TELKOM INDONESIA', '03008'),
('PT PROTELINDO', '03009'),
('PT PROTELINDO', '03010'),
('PT INTI BANGUN SEJAHTERA', '03011'),
('PT TELKOMSEL', '03012'),
('PT TBG (TOWER BERSAMA GROUP)', '03013'),
('PT TELKOM INDONESIA', '03014'),
('PT PROTELINDO', '03015'),
('PT TELKOM INDONESIA', '03016'),
('PT. XL AXIATA. Tbk', '03017'),
('PT TELKOMSEL', '03018'),
('PT. XL AXIATA. Tbk', '03019'),
('PT HUTCHISON CV TELEKOMUNKASI', '03020'),
('PT DAYA MITRA TELEKOMUNIKASI', '03021'),
('PT DAYA MITRA TELEKOMUNIKASI', '03022'),
('PT TBG (TOWER BERSAMA GROUP)', '03023'),
('PT PROTELINDO', '03024'),
('PT TELKOMSEL', '03025'),
('PT TELKOMSEL', '03026'),
('PT PROTELINDO', '03027'),
('PT. TOWER  BERSAMA', '03028'),
('PT. DAYA MITRA TELEKOMUNIKASI', '03029'),
('PT DAYA MITRA TELEKOMUNIKASI', '04001'),
('PT PROTELINDO', '04002'),
('PT TELKOMSEL', '04003'),
('PT DAYA MITRA TELEKOMUNIKASI', '04004'),
('PT. XL AXIATA. Tbk', '04005'),
('PT DAYA MITRA TELEKOMUNIKASI', '04006'),
('PT TELKOMSEL', '04007'),
('PT TELKOMSEL', '04008'),
('PT TELKOMSEL', '04009'),
('PT DAYA MITRA TELEKOMUNIKASI', '04010'),
('PT TBG (TOWER BERSAMA GROUP)', '04011'),
('PT TELKOMSEL', '05001'),
('AKSES PRIMA INDONESIA', '05002'),
('TOWER POLRI POLDA JAMBI', '05003'),
('PT SOLUSI TUNAS PRATAMA, TBK', '05004'),
('PT TELKOMSEL', '05005'),
('PT. INDOSAT', '05006'),
('PT PROTELINDO', '05007'),
('PT PROTELINDO', '05008'),
('PT. INDOSAT', '05009'),
('PT. XL AXIATA. Tbk', '05010'),
('PT TELKOMSEL', '05011'),
('PT TELKOMSEL', '05012'),
('SMARTFREN', '05013'),
('PT. XL AXIATA. Tbk', '05014'),
('PT TELKOMSEL', '05015'),
('SMARTFREN', '05016'),
('PT TELKOMSEL', '05017'),
('PT. XL AXIATA. Tbk', '06001'),
('PT. INDOSAT', '06002'),
('PT. XL AXIATA. Tbk', '06003'),
('PT TELKOMSEL', '06004'),
('PT. SAMPOERNA TELEKOMUNIKASI INDONESIA', '06005'),
('PT. INDOSAT', '06006'),
('PT PROTELINDO', '06007'),
('PT. XL AXIATA. Tbk', '06008'),
('PT TELKOMSEL', '06009'),
('PT DAYA MITRA TELEKOMUNIKASI', '07001'),
('PT DAYA MITRA TELEKOMUNIKASI', '07002'),
('PT TELKOMSEL', '07003'),
('PT TELKOM INDONESIA', '07004'),
('PT PROTELINDO', '07005'),
('PT DAYA MITRA TELEKOMUNIKASI', '07006'),
('PT. INDOSAT', '07007'),
('PT PROTELINDO', '07008'),
('PT. INDOSAT', '07009'),
('PT PROTELINDO', '07010'),
('PT TELKOMSEL', '07011'),
('PT TBG (TOWER BERSAMA GROUP)', '07012'),
('PT DAYA MITRA TELEKOMUNIKASI', '07013'),
('PT PROTELINDO', '08001'),
('PT DAYA MITRA TELEKOMUNIKASI', '08002'),
('PT DAYA MITRA TELEKOMUNIKASI', '08003'),
('PT KOMET MITRA JAYA', '08004'),
('PT DAYA MITRA TELEKOMUNIKASI', '08005'),
('PT DAYA MITRA TELEKOMUNIKASI', '08006'),
('PT TELKOMSEL', '08007'),
('PT TELKOMSEL', '08008');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider` varchar(255) NOT NULL,
  `tower_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider`, `tower_id`) VALUES
('XL AXIATA', '01010'),
('TRI', '01010'),
('AXIS', '01010'),
('HCPT', '03015'),
('HCPT', '03002'),
('INDOSAT', '03027'),
('XL AXIATA', '03027'),
('HCPT', '03027'),
('INDOSAT', '03024'),
('TRI', '03024'),
('HCPT', '03024'),
('INDOSAT', '02006'),
('INDOSAT', '02013'),
('INDOSAT', '06006'),
('INDOSAT', '07009'),
('INDOSAT', '03001'),
('INDOSAT', '07007'),
('INDOSAT', '05009'),
('INDOSAT', '05006'),
('INDOSAT', '01003'),
('TRI', '06002'),
('INDOSAT', '06002'),
('XL AXIATA', '04002'),
('INDOSAT', '04002'),
('HCPT', '04011'),
('HCPT', '04011'),
('SMARTFREN', '05016'),
('SMARTFREN', '03011'),
('SMARTFREN', '05013'),
('TELKOMSEL', '05001'),
('TELKOMSEL', '05001'),
('TCPT (TRI) ', '02007'),
('TELKOMSEL', '03016'),
('TELKOMSEL', '02005'),
('TELKOMSEL', '08003'),
('TELKOMSEL', '08002'),
('TELKOMSEL', '05011'),
('TELKOMSEL', '05005'),
('TELKOMSEL', '05002'),
('TELKOMSEL', '08004'),
('TELKOMSEL', '08005'),
('TELKOMSEL', '07013'),
('TELKOMSEL', '04010'),
('TELKOMSEL', '08006'),
('TELKOMSEL', '04009'),
('TELKOMSEL', '04008'),
('TELKOMSEL', '04007'),
('TELKOMSEL', '04006'),
('TELKOMSEL', '07004'),
('TELKOMSEL', '07012'),
('TELKOMSEL', '05012'),
('TELKOMSEL', '07005'),
('TELKOMSEL', '07002'),
('TELKOMSEL', '07001'),
('TELKOMSEL', '06009'),
('TELKOMSEL', '06007'),
('TELKOMSEL', '07006'),
('TELKOMSEL', '08007'),
('TELKOMSEL', '06005'),
('TELKOMSEL', '06004'),
('TELKOMSEL', '08008'),
('TELKOMSEL', '05017'),
('TELKOMSEL', '07010'),
('TELKOMSEL', '07003'),
('TELKOMSEL', '05015'),
('TELKOMSEL', '07011'),
('TELKOMSEL', '04004'),
('TELKOMSEL', '01001'),
('TELKOMSEL ', '03008'),
('TELKOMSEL', '02012'),
('TELKOMSEL', '03003'),
('TELKOMSEL', '02014'),
('TELKOMSEL', '02011'),
('TELKOMSEL', '02010'),
('TELKOMSEL', '02008'),
('TELKOMSEL', '02004'),
('TELKOMSEL', '02003'),
('TELKOMSEL', '02016'),
('TELKOMSEL', '01012'),
('TELKOMSEL', '01011'),
('TELKOMSEL', '01009'),
('TELKOMSEL', '01008'),
('TELKOMSEL', '01006'),
('TELKOMSEL', '01005'),
('TELKOMSEL', '01002'),
('TELKOMSEL', '03012'),
('TELKOMSEL', '03013'),
('TELKOMSEL', '03021'),
('TELKOMSEL', '03023'),
('TELKOMSEL', '03022'),
('TELKOMSEL', '03025'),
('TELKOMSEL', '04001'),
('TELKOMSEL', '03026'),
('TELKOMSEL', '03028'),
('TELKOMSEL', '03029'),
('TELKOMSEL', '04003'),
('TELKOMSEL', '03018'),
('INDOSAT', '02009'),
('TELKOMSEL', '02009'),
('INDOSAT', '01007'),
('TELKOMSEL', '01007'),
('XL AXIATA', '03019'),
('TRI', '03019'),
('TELKOMSEL', '03019'),
('XL AXIATA', '05004'),
('TRI', '05004'),
('TELKOMSEL', '05004'),
('INDOSAT', '03007'),
('XL AXIATA', '03007'),
('TELKOMSEL', '03007'),
('XL AXIATA', '03004'),
('TELKOMSEL', '03004'),
('TRI', '07008'),
('TRI', '03005'),
('TRI', '03020'),
('TRI', '03020'),
('XL AXIATA', '04005'),
('XL AXIATA', '01004'),
('XL AXIATA', '06001'),
('XL AXIATA', '06003'),
('XL AXIATA', '05010'),
('XL AXIATA', '06008'),
('XL AXIATA', '05008'),
('XL AXIATA', '08001'),
('XL AXIATA', '02001'),
('XL AXIATA', '02002'),
('XL AXIATA', '03017'),
('XL AXIATA', '03010'),
('AXIS', '05007'),
('XL AXIATA', '05007'),
('TRI', '05014'),
('TRI', '05014'),
('TRI', '03014'),
('TELKOMSEL', '03014'),
('TELKOMSEL', '03014');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `kode_kecamatan` varchar(10) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`kode_kecamatan`, `kecamatan`) VALUES
('150401', 'Mersam'),
('150402', 'Muara Tembesi'),
('150403', 'Muara Bulian'),
('150404', 'Batin XXIV'),
('150405', 'Pemayung'),
('150406', 'Maro Sebo Ulu'),
('150407', 'Bajubang'),
('150408', 'Maro Sebo Ilir');

-- --------------------------------------------------------

--
-- Table structure for table `tower`
--

CREATE TABLE `tower` (
  `tower_id` varchar(5) NOT NULL,
  `kode_kecamatan` varchar(10) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `koordinat` varchar(50) NOT NULL,
  `ketinggian_meter` int(3) DEFAULT NULL,
  `pemilik_tanah` varchar(255) DEFAULT NULL,
  `izin_tower` varchar(50) DEFAULT NULL,
  `listrik` char(1) DEFAULT NULL,
  `jalan_meter` int(4) DEFAULT NULL,
  `perumahan` char(1) DEFAULT NULL,
  `jarak_perumahan_meter` int(11) DEFAULT NULL,
  `pagar_tower` char(1) DEFAULT NULL,
  `papan_nama` char(1) DEFAULT NULL,
  `petugas` varchar(255) DEFAULT NULL,
  `hp_petugas` varchar(50) DEFAULT NULL,
  `shelter_genset` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tower`
--

INSERT INTO `tower` (`tower_id`, `kode_kecamatan`, `desa`, `koordinat`, `ketinggian_meter`, `pemilik_tanah`, `izin_tower`, `listrik`, `jalan_meter`, `perumahan`, `jarak_perumahan_meter`, `pagar_tower`, `papan_nama`, `petugas`, `hp_petugas`, `shelter_genset`) VALUES
('01001', '150401', 'DESA BENTENG RENDAH KEC. 150401', 'E 00149189 N 01314340', 72, 'HAVIS', '503.7/ SK. 46/ SIMB/ DPMPTSP', 'Y', 25, 'Y', 10, 'Y', 'N', '', '', 'Y'),
('01002', '150401', 'RT.13 DS. PEMATANG GADUNG', 'E 00143187 N 01316814', 45, 'M SAFI\'I', '503.7/ SK. 44/ SIMB/ DPMPTSP', 'Y', 50, 'Y', 10, 'Y', 'Y', 'M SAFI\'I', '85838633836', 'Y'),
('01003', '150401', 'RT. 09 KEL. KEMBANG PASEBAN', 'E 00145168 N 01315130', 72, 'RIDWAN', '', 'Y', 35, 'Y', 10, 'Y', 'N', '', '', 'Y'),
('01004', '150401', 'RT 12 KEL. KEMBANG PASEBAN', 'E 00745438 N 01315163', 72, 'H SYAUGI SOFI', '', 'Y', 20, 'Y', 15, 'Y', 'N', 'MUNIR', '', 'Y'),
('01005', '150401', 'RT 13 KEL. KEMBANG PASEBAN', 'E 00145366 N 01315127', 72, 'H MUHAMMAD', '', 'Y', 10, 'Y', 10, 'Y', 'N', 'DARWIS', '', 'Y'),
('01006', '150401', 'RT 11 150401', 'E 00144536 N 01312103', 72, 'MUHAMMAD KARIM', '503/768/2012', 'Y', 75, 'Y', 25, 'Y', 'N', 'ZAIMA', '85366902009', 'Y'),
('01007', '150401', 'RT 01 BUKIT HARAPAN', 'E 00139768 N 01326300', 72, 'HANAPI', '503.7/ SK. 116/ SIMB/ BPMPPT', 'Y', 50, 'Y', 20, 'Y', 'N', '', '', 'Y'),
('01008', '150401', 'RT 08 DS BUKIT KEMUNING', 'E 00139066 N 01322712', 72, 'BUMRA', '503/SK,104/Ho/BPTSP', 'Y', 5, 'Y', 20, 'Y', 'N', 'BUMRA', '', 'Y'),
('01009', '150401', 'RT 10 DS SIMP RANTAU GEDANG', 'E 00133009 N 01318417', 62, 'NURBAYA', '503.7/ SK. 30/ SIMB/ BPTSP', 'Y', 50, 'Y', 5, 'Y', 'Y', 'HIDAYAT', '85382553795', 'Y'),
('01010', '150401', 'RT 13 DS RANTAU GEDANG', 'E 00134810 N 01318620', 64, 'ANNISA', '', 'Y', 20, 'Y', 20, 'Y', 'N', 'SUPRIYADI', '81274827278', 'Y'),
('01011', '150401', 'DS TANJUNG PUTRA', 'E 00137625 N 01317549', 72, '', '', 'Y', 20, 'Y', 5, 'Y', 'Y', '', '', 'Y'),
('01012', '150401', 'RT 03 DS SENGKATI BARU', 'E 00140456 N 01317854', 72, 'ZAINAB', '503.7/ SK. 32/ SIMB/ BPTSP', 'Y', 50, 'Y', 10, 'Y', 'N', 'MUHAMMAD', '85381823234', 'Y'),
('01013', '150401', 'DESA TAPAK SARI ', 'S 01.71394 E 103.26250', 42, '', '', '', 0, '', 0, '', '', '', '', ''),
('02001', '150402', 'RT 02 KEL.PASAR 150402', 'S 01°42\'07.8\" E 103°06\'25.4\"', 72, 'KELURAHAN', '', 'Y', 15, 'Y', 30, 'Y', 'N', 'LAGUAN (ICIL)', '', 'Y'),
('02002', '150402', 'KM5 RT 02 KELURAHAN KAMPUNG BARU', 'S 01°43.32.0\" E 103°08 13.7\"', 70, 'MAINAR', '502/15/HO/BPTSP', 'Y', 30, 'Y', 30, 'Y', 'N', 'MAINAR', '', 'Y'),
('02003', '150402', 'JL.PAYO LEBAR RT 13 KEL.KAMPUNG BARU', 'S 01°43\'1 7.0\" E 103°08 35.4\"', 42, 'TEGUH SWONO', '503.7/ SK. 42/ SIMB/ DPMPTSP', 'Y', 30, 'Y', 5, 'Y', 'N', 'TEGUH SWONO', '', 'N'),
('02004', '150402', 'RT 03 KAMPUNG BARU', 'S 01°43.33.6\" E 103°08.13.O\"', 72, '', '', 'N', 50, 'Y', 30, 'Y', 'N', '', '', 'Y'),
('02005', '150402', 'JL.SEBOPO RT 02 KAMPUNG BARU', 'S 01°43 37.4\" E 103°08\'14.2\"', 72, 'ARIS', '', 'Y', 30, 'Y', 5, 'Y', 'Y', 'HIDIR', '', 'Y'),
('02006', '150402', 'DESA SUKA RAMAI JL.JBIMA.BUNGO RT 09', 'S 01°42\'58.2\" E 103°07\'16.2\"', 70, 'ASHAR', 'SK 6459008', 'Y', 45, 'Y', 15, 'Y', 'Y', '', '', 'Y'),
('02007', '150402', 'DUSUN SUMBER SARI KEL DESA SUKA RAMAI RT 05', 'S 01°43\'01.9\" E 103°07 06.1\"', 54, 'BURHANUDIN', '', 'Y', 40, 'Y', 5, 'Y', 'Y', '', '', 'Y'),
('02008', '150402', 'DESA SUKA RAMAI RT 8', 'S 01°42.58.5\" E 103°07\'13.8\"', 72, 'SUPARTONO', '', 'Y', 30, 'Y', 15, 'Y', 'Y', 'SUPARTONO', '', 'Y'),
('02009', '150402', 'SIMPANG BUKIT PAKU', 'E 00154283 N 01314946', 72, '', '', 'Y', 100, 'N', 0, 'Y', 'N', 'SULAIMAN', '', 'Y'),
('02010', '150402', 'BUKIT PAKU RT 04', 'E 0015 4012 N 0131 5393', 72, '', '', 'Y', 50, 'Y', 20, 'Y', 'N', '', '', 'Y'),
('02011', '150402', 'PEMATANG LIMO SUKU RT 10', 'E 00156962 N 01311561', 62, 'JAMHUR', '503,7/SK,33/SIMR/BPTSP', 'Y', 15, 'Y', 15, 'Y', 'Y', 'JAMHURI', '85268218481', 'N'),
('02012', '150402', 'JL.TANJUNG MARWO RT 04', 'S 01°45\'0.0\" E 103°07.25\"', 50, 'RADEN SWAIMI', '503.7/ SK. 185/ SIMB/ DPMPTSP', 'Y', 10, 'Y', 15, 'Y', 'Y', 'RADEN SWAIMI', '', 'N'),
('02013', '150402', 'RM SINGGALANG KM 5 RT 01', 'S 01°43\'22\" E 103°08.13\"', 70, '', '', 'Y', 45, 'Y', 40, 'Y', 'Y', '', '', 'Y'),
('02014', '150402', 'JL.LINTAS SAROLANGUN DESA AMPLU MUDO', 'S 01°46\'23\" E 103°06.23\"', 62, 'SUJONO', '503.7/ SK. 327/ SIMB/ BPTSP', 'Y', 45, 'Y', 5, 'Y', 'Y', '', '', 'Y'),
('02015', '150402', 'DESA JEBAK', 'S 01 97\'18\" E 103\'05.29\"', 92, '', '', 'Y', 0, 'Y', 0, 'Y', 'Y', '', '', 'Y'),
('02016', '150402', 'DESA JEBAK ', 'S 01 47 36,4\" E 103\'05 21 8', 42, 'ADI IRAWAN ', '503.7/ SK. 45/ SIMB/ DPMPTSP', 'Y', 0, 'Y', 10, 'Y', 'Y', 'MAISARO', '', 'N'),
('03001', '150403', 'Jl.Panti Asuhan Ma.Bulian Kel.Rengas Condong', 'S 01°42\'134\"  E 103°15\'54,5\"', 90, '', 'NO. Sk.647/43/04/IMB', 'Y', 40, 'Y', 5, 'Y', 'Y', '', '', 'Y'),
('03002', '150403', 'RENGAS CONDONG RT 04 RW 1', 'S 01.42\'41.4\" E 103.15\'55.4\"', 60, 'TAUFIK', '', 'Y', 20, 'Y', 10, 'Y', 'Y', 'TAUFIK', '', 'Y'),
('03003', '150403', 'RT 14 KELURAHAN TERATAI', 'S 01.41\'41.4 E 103.17\'02.3\"', 72, 'DR SUMANI', '', 'Y', 30, 'Y', 50, 'Y', 'Y', 'MARJONO', '', 'Y'),
('03004', '150403', 'JLN GAJAH MADA RT 02 KELURAHAN TERATAI', 'S 01.41\'21.6\" E 103.16\'14.0\"', 52, 'DOPAR', '503.7/ SK. 118/ SIMB/ BPMPPT', 'Y', 20, 'Y', 10, 'Y', 'Y', 'ABU BAKAR ', '', 'N'),
('03005', '150403', 'RT 01 RW 02 KELURAHAN RENGAS CONDONG', 'S 01.42\'01.0\" E 103.16\'05.0\"', 52, 'ASRUL', '', 'Y', 100, 'Y', 50, 'Y', 'Y', 'ASRUL', '', 'N'),
('03006', '150403', 'RT 09 KELURAHAN RENGAS CONDONG JL.SRI SUDEWI', 'S 01.42\'03.3\" E 103.15\'56.0\"', 60, 'ROSULAN', '', 'Y', 100, 'Y', 5, 'Y', 'Y', 'ROSULAN', '', 'Y'),
('03007', '150403', 'JL.LINTAS SUMATRA RT 04 KELURAHAN SRIDADI', 'S 01.43\'52.2\" E 103.13\'23.4\"', 71, '', '503.7/ SK. 20/ SIMB/ BPTSP', 'Y', 25, 'Y', 40, 'Y', 'Y', '', '', 'Y'),
('03008', '150403', 'JLN GAJAH MADA RT 01 150403', 'S 01.43\'07.3\" E 103.14\'46.3\" ', 72, '', '', 'Y', 40, 'Y', 5, 'Y', 'Y', '', '', 'Y'),
('03009', '150403', 'JL GAJAH MADA RT 07', 'S 01.42\'45.0\" E 103.15\'20.5\"', 54, '', '', 'Y', 100, 'Y', 10, 'Y', 'Y', '', '', 'N'),
('03010', '150403', 'RT 05 RW 02 SRIDADI', 'S 01.43\'34.5\" E 103.14\'23.3\"', 50, 'ZARNIDAH', '503.7/ SK. 279/ SIMB/ DPMPTSP', 'Y', 20, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('03011', '150403', 'JL.GAJAH MADA RT 34 KEL MUARA BULIAN', 'S 01.42\'43.5\" E 103.15\'18.0\"', 52, '', '503.7/ SK. 41/ SIMB/ DPMPTSP', 'Y', 10, 'Y', 5, 'Y', 'N', '', '', 'Y'),
('03012', '150403', 'KEL RENGAS CONDONG RT 24 LRG ILHAM', 'S 01.42\'53.7\" E 103.15\'57.3\"', 42, 'ABDUL HAMID', '503.7/ SK. 181 / SIMB / BPTSP', 'Y', 10, 'Y', 25, 'Y', 'Y', '', '', 'N'),
('03013', '150403', 'JL. JENDRAL SUDIRMAN LRG CINTA DAMAI', 'S 01\'43\'24.1\" E 103\'16\'08.0\"', 36, '', '503.7/ SK. 117/ SIMB/ BPMPPT', 'Y', 8, 'Y', 10, 'Y', 'Y', '', '', 'N'),
('03014', '150403', 'JL.JENDRAL SUDIRMAN LRG LINDUNG INDAH', 'S 01.43\'53.6 E 103.16\'29.0\"', 42, 'KARYANTO', '', 'Y', 3, 'Y', 15, 'Y', 'Y', 'KARYANTO', '', 'N'),
('03015', '150403', 'JL.JENDRAL SUDIRMAN LRG KPU RT 30 RW 8 ', 'S 01.43\'05.9\" E 103.15\'50.9\"', 42, 'SUPRIYANTO', '503.7/SK.97/SIMB/BPTSP', 'Y', 2, 'Y', 5, 'Y', 'Y', 'SUPRIYANTO', '', 'N'),
('03016', '150403', 'JLN PRAMUKA NO.1', 'S 01.42\'56.1\" E 103.15\'45.9\"', 70, 'PT TELKOM', '', 'Y', 30, 'N', 0, 'N', 'Y', 'PT TELKOM', '', 'N'),
('03017', '150403', 'RT 04 RW 01 KEL RENGAS CONDONG', 'S 01.42\'41.9\" E 103.15\'48.3\"', 50, 'DASUKI', '', 'Y', 3, 'Y', 1, 'Y', 'N', '', '', 'Y'),
('03018', '150403', 'RANTAU PURI RT 04', 'E 0018 0006 N 0131 6220', 72, 'ASMAWI', '503,7/SK,509/SIMB/BPTSP', 'Y', 7, 'Y', 7, 'Y', 'Y', 'ASMAWI', '', 'Y'),
('03019', '150403', 'DESA ARO  RT 02 ', 'E 00173430 N 01310174', 72, 'MUSTADI', '', 'Y', 15, 'Y', 5, 'Y', 'N', 'MUSTADI', '', 'Y'),
('03020', '150403', 'JL LINTAS MA. BULIAN RT 07', 'E 00168993 N 01308567', 42, '', '', 'Y', 100, 'Y', 35, 'Y', 'Y', '', '', 'N'),
('03021', '150403', 'RT 03 DESA PELAYANGAN', 'E 00168637 N 01311851', 62, '', '503.7/ SK. 34/ SIMB/ BPTSP', 'Y', 100, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('03022', '150403', 'RT 02 SUNGAI BULUH', 'E 00181764 N 01312235', 72, '', '503.7/ SK. 300/ SIMB/ BPTSP', 'Y', 50, 'Y', 20, 'Y', 'Y', '', '', 'N'),
('03023', '150403', 'RT 11 SUNGAI BULUH', 'E 00177988 N 01310959', 42, '', '503.7/ SK. 186/ SIMB/ DPMPTSP', 'Y', 50, 'Y', 10, 'Y', 'Y', '', '', 'N'),
('03024', '150403', 'DESA TENAM RT 06', 'S 01.44\'06.9\" E 103.11\'19.7\"', 54, 'SUGENG', '', 'Y', 8, 'Y', 2, 'Y', 'Y', '', '', 'N'),
('03025', '150403', 'JL.JMB TEMBESI RT 04 KEL. DS SIMPANG TERUSAN', 'S 01.43\'30.6\" E 103.10\'06.7\"', 72, 'PT TELKOM', '', 'Y', 50, 'Y', 10, 'Y', 'Y', '', '', 'N'),
('03026', '150403', 'RT 01 SIMP. KILANGAN', 'E 00174784 N 01304946', 72, '', '', 'Y', 40, 'Y', 10, 'Y', 'N', '', '', 'N'),
('03027', '150403', 'JL. LINTAS MA.BULIAN DESA KILANGAN', 'E 00174841 N 01305755', 42, '', '', 'Y', 100, 'N', 0, 'Y', 'Y', '', '', 'N'),
('03028', '150403', 'JL. MULYA', 'E 00173620 N 01309687', 42, 'HJ. GUSNI', '503.7/ SK. 251/ SIMB/ BPMPPT', 'Y', 10, 'Y', 5, 'Y', 'Y', 'HJ. GUSNI', '', 'N'),
('03029', '150403', 'RT 04 DESA KILANGAN', 'E 00177353 N 01304172', 42, '', '503.7/ SK. 47/ SIMB/ DPMPTSP', 'Y', 50, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('04001', '150404', 'RT 01 DS KARMEO', 'S 01 47\'21.3\" E 103\'02\'01.8\"', 92, '', '503.7/ SK. 38/ SIMB/ DPMPTS', 'Y', 3, 'Y', 10, 'Y', 'Y', 'NASRULLAH', '', 'N'),
('04002', '150404', 'RT 02  DS SIMPANG KARMEO ', 'S 01 48\'42.9\" E 103\'02\'58.4\"', 72, 'ROSMANIAH', '', 'Y', 30, 'Y', 10, 'Y', 'Y', 'AMDANI', '', 'N'),
('04003', '150404', 'DS SIMP KARMEO ', 'S 01 48\'91.1\" E 103\'04\'07.5\"', 72, 'SYAMSALIS', '', 'Y', 20, 'Y', 5, 'Y', 'N', 'SYAMSALIS', '85838119691', 'Y'),
('04004', '150404', 'RT07 DESA BULIAN BARU', 'S 01 56\'09.9\" E 103\'09\'31.5\"', 42, 'DWI SRIYATI', '503.7/ SK. 184/ SIMB/ DPMPTSP', 'Y', 5, 'Y', 5, 'Y', 'N', 'KIMIN', '', 'Y'),
('04005', '150404', 'DS SIMPANG KARMEO', 'S 01 48\'43 \" E 103\'02.51\"', 70, 'NAJIB', '', 'Y', 45, 'N', 15, 'Y', 'N', 'NAJIB', '', 'Y'),
('04006', '150404', 'DS TERENTANG BARU', 'S 01 56\'26.5 \" E 103\'05.15.0\"', 42, 'SUTARTO', '503.7/ SK. 36/ SIMB/ DPMPTSP', 'Y', 5, 'Y', 30, 'Y', 'Y', 'SUTARTO', '', 'Y'),
('04007', '150404', 'RT09 DS JANGGA BARU', 'S 01 55\'43.3 \" E 103\'07.29.8\"', 42, '', '', 'Y', 15, 'N', 0, 'Y', 'N', '', '', 'N'),
('04008', '150404', 'RT02 JL AMD  PTP VI SIMP DURIAN LUNCUK', 'S 01 52\'51.8 \" E 102\'59.57.9\"', 72, 'SARUDIN', '', 'Y', 30, 'Y', 7, 'Y', 'Y', 'JAMHURI', '', 'Y'),
('04009', '150404', 'RT 02 DS MUARA JANGGA', 'S 01 98\'41.1 \" E 103\'04.07.5\"', 72, 'ASIH', '503.7/ SK. 171/ SIMB/ BPTSP', 'Y', 90, 'Y', 15, 'Y', 'Y', 'ASIH', '', 'Y'),
('04010', '150404', 'RT 06 DS KOTO BOYO', 'S 01 48\'58.9 \" E 103\'01.42.9\"', 72, 'JOSWANDI', '503.7/ SK. 48/ SIMB/ DPMPTSP', 'Y', 15, 'Y', 30, 'Y', 'Y', 'JOSWANDI', '', 'N'),
('04011', '150404', 'RT 08 KEL DURIAN LUNCUK', 'S 01°52\'47.2 E 102°59,52.5\"', 70, 'M NUR', '', 'Y', 45, 'Y', 30, 'Y', 'Y', 'DWAHAR', '', 'Y'),
('05001', '150405', 'KEL JEMBATAN MAS SAMPING KANTOR CAMAT 150405 ', 'E 00186169 N 01323050', 72, '', '', 'Y', 25, 'Y', 10, 'Y', 'Y', '', '', 'Y'),
('05002', '150405', 'DESA TEBING TINGGI KEC 150405', 'E 00181697 N 01319216', 72, '', '', 'Y', 150, 'Y', 20, 'Y', 'N', '', '', 'N'),
('05003', '150405', 'KUBU KANDANG', 'E 00183292 N 01321424', 72, '', '', 'Y', 150, 'N', 0, 'Y', 'Y', '', '', 'Y'),
('05004', '150405', 'RT 02 PULAU BETUNG', 'E 00191504 N 01327344', 72, 'SRI BANUN', '', 'Y', 25, 'Y', 10, 'Y', 'N', 'SAZULI', '81366073033', 'Y'),
('05005', '150405', 'LUBUK RUSO', 'E 00184821 N 01327568', 72, 'HERI', '503,7/305/SOMB/BPTSP', 'Y', 50, 'Y', 10, 'Y', 'N', '', '', 'N'),
('05006', '150405', 'RT 03 KEL. JEMBATAN MAS', 'E 00186072 N 01322827', 72, 'AMIN', '', 'Y', 30, 'Y', 10, 'Y', 'Y', '', '', 'Y'),
('05007', '150405', 'DESA TELUK RT 05', 'E 00193273 N 01332438', 52, 'HASAN', '503.7/ SK. 278/ SIMB/ DPMPTSP', 'Y', 5, 'Y', 2, 'Y', 'Y', 'HASAN', '85211349217', 'Y'),
('05008', '150405', 'DESA SELAT RT 02', 'E 00194158 N 01328656', 52, 'HUSIN', '503.7/ SK. 277/ SIMB/ DPMPTSP', 'Y', 50, 'Y', 10, 'Y', 'N', '', '', 'N'),
('05009', '150405', 'RT 04 LUBUK RUSO', 'E 00184906 N 01327400', 72, 'SUMIATI', '503,7/290/SIMB/BPTSP', 'Y', 50, 'Y', 20, 'Y', 'Y', 'SUMIATI', '85367329969', 'N'),
('05010', '150405', 'DESA SERASAH RT 02', 'E 00189599 N 01322656', 72, 'TUGIMAN', '', 'Y', 40, 'Y', 20, 'Y', 'N', 'TUGIMAN', '', 'Y'),
('05011', '150405', 'DESA SERASAH RT 02', 'E 103405954 S 1.604278', 72, 'TUGIMAN', '503.7/ SK. 521/ SIMB/ BPTSP', 'Y', 50, 'Y', 20, 'Y', 'N', 'TUGIMAN', '', 'N'),
('05012', '150405', 'DESA AWIN RT 09', 'E 00190603 N 01314404', 72, 'AMINAH', '503.7/ SK. 61/ SIMB/ BPTSP', 'Y', 10, 'Y', 5, 'Y', 'Y', '', '', 'N'),
('05013', '150405', 'RT 03 KEL JEMBATAN MAS', 'E 00186063 N 01322740', 72, 'MARDINA WATI', '', 'Y', 100, 'Y', 10, 'Y', 'Y', '', '', 'Y'),
('05014', '150405', 'RT 016 KEL JEMBATAN MAS', 'E 103376365 S 1,601146', 72, 'SUDARSONO', '', 'Y', 50, 'Y', 2, 'Y', 'N', 'SUDARSONO', '85266283827', 'Y'),
('05015', '150405', 'RT 03 KEL JEMBATAN MAS', 'E 103374107 S 1,602055', 72, '', '', 'Y', 25, 'Y', 15, 'Y', 'Y', '', '', 'Y'),
('05016', '150405', 'DS.LUBUK RUSO PT WKS', 'S 01 26\'00.3 E 1 03\'13\'50.3', 92, '', '503.7/ SK. 290/ SIMB/ BPTSP', 'Y', 60, 'Y', 10, 'Y', 'N', '', '', 'Y'),
('05017', '150405', 'DS. LUBUK RUSO PT WKS', 'S 01 26\'03.7 E 103\'13\'52.7', 92, '', '503.7/ SK. 305/ SIMB/ BPTSP', 'Y', 100, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('06001', '150406', 'Desa Teluk Leban Kec. Maro Sebo Ulu', 'S 01°48\'1 92\"  E 103°09\'32,0\"', 70, '', '', 'Y', 50, 'Y', 8, 'Y', 'N', 'M Saleh', '81274059241', 'Y'),
('06002', '150406', 'RT 07 SUNGAI RENGAS', 'S 01 38\'09,8 E 102 52\'35.2\"', 72, '', '', 'Y', 50, 'Y', 1, 'Y', 'Y', '', '', 'Y'),
('06003', '150406', 'SUNGAI RENGAS', 'S 01 38\'05.9\" E 102 52\' 19.7\"', 70, '', '', 'Y', 50, 'Y', 5, 'Y', 'N', '', '', 'Y'),
('06004', '150406', 'RT 03 SUNGAI RENGAS', 'S 01 38\'02.5\" E 102 52\'18.7\"', 92, '', '', 'Y', 40, 'N', 0, 'Y', 'Y', 'RONI', '85217344577', 'Y'),
('06005', '150406', 'SUNGAI RENGAS', 'S 01 35\' 17.4\" E 102\' 49\'44.3\"', 70, '', '', 'N', 7, 'N', 0, 'Y', 'Y', '', '', 'Y'),
('06006', '150406', 'RT 06 KEMBANG SERI', 'S 01 35\'20.7\" E 102 49\'44.2\"', 70, '', '', 'Y', 25, 'N', 0, 'Y', 'Y', '', '', 'Y'),
('06007', '150406', 'RT 02 DS SUNGAI RUAN ULU', 'S 01 42\'18.8\" E 102\'54\'11.1\"', 72, '', '503.7/ SK. 503/ SIMB/ BPTSP', 'Y', 40, 'N', 0, 'Y', 'Y', '', '', 'Y'),
('06008', '150406', 'RT 07 DS KEMBANG SERI', 'S 01 35\'1 7,2\"', 70, '', '503.7/ SK. 145/ SIMB/ BPTSP', 'Y', 40, 'Y', 30, 'Y', 'N', 'BADAR SUDARSONO', '082379421839/085789457986', 'Y'),
('06009', '150406', 'RT 01 DESA PENINJAUAN ', 'S 01\'39 58 7\" E 102\'46 59 4', 72, 'TELKOMSEL', '503.7/ SK. 301/ SIMB/ BPTSP', 'Y', 40, 'Y', 5, 'Y', 'Y', 'NURSIMAH', '', 'N'),
('07001', '150407', 'RT 10 DESA BUNGKU', 'E 00173490 N 01310447', 72, 'RUDIANO', '503.7/ SK. 115/ SIMB/ BPMPPT', 'Y', 20, 'Y', 15, 'Y', 'N', 'RUDIONO', '81272792529', 'N'),
('07002', '150407', 'RT 10 DESA MEKAR JAYA', 'S 01°501\'03.0\" E 103°15\'09.0\"', 42, 'SAHID', '503.7/ SK. 183/ SIMB/ DPMPTSP', 'Y', 10, 'Y', 15, 'Y', 'N', 'SAHID', '', 'N'),
('07003', '150407', 'RT 05 POMPA AIR', 'S 01°51\'08.7\" E 103°16\'49.5\"', 72, '', '503.7/ SK. 308/ SIMB/ BPTSP', 'Y', 20, 'Y', 10, 'Y', 'N', '', '', 'N'),
('07004', '150407', 'RT 08 KEL. POMPA AIR KEC. 150407', 'S 01°48\'11.5\" E 103°19\'56.6\"', 72, '', '', 'Y', 20, 'N', 0, 'Y', 'Y', '', '', 'Y'),
('07005', '150407', 'RT 07 MEKAR SARI ', 'E 00180622 N 01307203', 72, 'NURHADI', '', 'Y', 20, 'Y', 10, 'Y', 'N', 'NURHADI', '81379763661', 'N'),
('07006', '150407', 'RT 14 KM 46 DESA PENEROKAN', 'E 00173490 N 01310447', 72, 'SUPRAPTA', '503.7/ SK. 37/ SIMB/ DPMPTSP', 'Y', 50, 'Y', 10, 'Y', 'N', '', '', 'Y'),
('07007', '150407', 'RT 7 KAMPUNG BARU ', 'E 00181913 N 01302893', 72, '', '', 'Y', 20, 'Y', 2, 'Y', 'Y', '', '', 'Y'),
('07008', '150407', 'RT 12 KARANG ANYAR', 'E 00182182 N 01302607', 70, 'EDI SURONO', '', 'Y', 20, 'Y', 20, 'Y', 'N', 'EDI SURONO', '85357962220', 'Y'),
('07009', '150407', 'RT 03  DS PENEROKAN KM42', 'E 00188520 N 01302261', 70, 'SUHUT', '', 'Y', 15, 'Y', 15, 'Y', 'Y', 'SUHUT', '81366247016', 'Y'),
('07010', '150407', 'RT 04 PURWOSARI PENEROKAN', 'E 00188599 N 01302190', 72, 'MARDIANA', '', 'Y', 15, 'Y', 7, 'Y', 'N', 'SUWARSONO', '', 'Y'),
('07011', '150407', 'DESA PETAJEN RT 11', 'E 00185669 N 01313401', 72, 'RAHMAD', '508/SK,132/SIMB/BPTSP', 'Y', 10, 'Y', 10, 'Y', 'N', 'SAMSUL ARIFIN', '', 'N'),
('07012', '150407', 'DUSUN SEROJA RT 6 DESA NES', 'E 00184411 N 01307932', 72, '', '503.7/ SK. 131/ SIMB/ BPMPPT', 'Y', 20, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('07013', '150407', 'DUSUN PERIS BARU RT 08 DS. LADANG PERIS', 'S 01\'50\'48.1\" E 1 03\'23\'15.6', 92, 'SARKONI', '503.7/ SK. 43/ SIMB/ DPMPTSP', 'Y', 40, 'Y', 5, 'Y', 'Y', 'ROHMANTO', '82307183209', ''),
('08001', '150408', 'RT 01 DS TERUSAN ', 'E 103.177695 N 1.537199', 50, 'YUSIKA', '503.7/ SK. 276/ SIMB/ DPMPTSP', 'Y', 10, 'Y', 15, 'Y', 'Y', '', '', 'N'),
('08002', '150408', 'RT 07 DS DANAU EMBAT', 'E 103.163038 N 1.657094', 72, 'SUROTO', '503.7/ SK. 35/ SIMB/ BPTSP', 'Y', 20, 'Y', 5, 'Y', 'Y', '', '', 'N'),
('08003', '150408', 'RT 11 DS TERUSAN', 'E 00163314 N 01313054', 52, 'EFENDI', '503.7/ SK. 02/ SIMB/ DPMPTSP', 'Y', 5, 'N', 0, 'Y', 'Y', '', '', 'N'),
('08004', '150408', 'RT 05 DS BULIAN JAYA', 'E 103.177641 N 1.614441', 42, '', '503.7/ SK. 45/ SIMB/ DPMPTSP', 'Y', 15, 'Y', 0, 'Y', 'N', '', '', 'N'),
('08005', '150408', 'RT 09 DS TIDAR KURANJI', 'E 00157840 N 01326669', 72, 'AHMAD RIFA\'I', '503.7/ SK. 545/ SIMB/ BPTSP', 'Y', 50, 'N', 0, 'Y', 'Y', 'AHMAD RIFAI', '', 'N'),
('08006', '150408', 'RT 10 DS BULIAN JAYA', 'E 00166227 N 01325093', 72, '', '503.7/ SK. 49/ SIMB/ DPMPTSP', 'Y', 50, 'N', 0, 'Y', 'Y', '', '', 'N'),
('08007', '150408', 'RT 09 BUKIT SARI', 'E 00168347 N 01329024', 32, 'MAJI', '', 'Y', 10, 'Y', 5, 'N', 'N', '', '', 'N'),
('08008', '150408', 'RT 07 DS KARYA MUKTI', 'E 0016 4136 N 01330039', 92, '', '', 'Y', 15, 'N', 0, 'Y', 'Y', 'ZAINUDIN', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD KEY `FK_tower_id` (`tower_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD KEY `FK_provider_id` (`tower_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`kode_kecamatan`);

--
-- Indexes for table `tower`
--
ALTER TABLE `tower`
  ADD PRIMARY KEY (`tower_id`),
  ADD KEY `FK_Kecamatan` (`kode_kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `FK_tower_id` FOREIGN KEY (`tower_id`) REFERENCES `tower` (`tower_id`);

--
-- Constraints for table `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `FK_provider_id` FOREIGN KEY (`tower_id`) REFERENCES `tower` (`tower_id`);

--
-- Constraints for table `tower`
--
ALTER TABLE `tower`
  ADD CONSTRAINT `FK_Kecamatan` FOREIGN KEY (`kode_kecamatan`) REFERENCES `region` (`kode_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
