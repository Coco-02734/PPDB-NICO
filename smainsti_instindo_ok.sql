-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jul 2020 pada 01.22
-- Versi server: 10.2.32-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smainsti_instindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `role_id`, `is_active`) VALUES
(2, 'Nico ( Admin )', 'nico@instindo.com', 'adminabu123', 1, 1),
(3, 'Admin II', 'admin@instindo.com', 'instindo123', 1, 1),
(4, 'Raras ( Admin )', 'raras@instindo.com', 'adminchok123', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alumni`
--

CREATE TABLE `data_alumni` (
  `id` int(11) NOT NULL,
  `nis` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lulus` int(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `univ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_un`
--

CREATE TABLE `hasil_un` (
  `id` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_un`
--

INSERT INTO `hasil_un` (`id`, `nisn`, `nama`, `kelas`, `hasil`) VALUES
(85, '0027058290', 'ALDINO PUTRA PANGESTU', 'XII IPA 1', 'LULUS'),
(86, '0012239330', 'ALOUDINA FAWWAZ', 'XII IPA 1', 'LULUS'),
(87, '0023890596', 'AQIL ILHAN PUTRA', 'XII IPA 1', 'LULUS'),
(88, '0014558532', 'AURELLIA LEILANY SHAYNA', 'XII IPA 1', 'LULUS'),
(89, '0020894478', 'CHIKA DWITYA SULISTYOWATI', 'XII IPA 1', 'HUBUNGI SEKOLAH'),
(90, '0020878249', 'DANDY RIZKY PRAMANA PUTRA', 'XII IPA 1', 'HUBUNGI SEKOLAH'),
(91, '0010161351', 'DESI RAMADANI', 'XII IPA 1', 'LULUS'),
(92, '0020675292', 'DEVI MARINA PUTRI', 'XII IPA 1', 'LULUS'),
(93, '0014750223', 'DINA SEPTIA KARTIKASARI', 'XII IPA 1', 'HUBUNGI SEKOLAH'),
(94, '0012239316', 'DINO FARHANSYAH', 'XII IPA 1', 'LULUS'),
(95, '0020490326', 'FELIA DEVYA SEPTIANE', 'XII IPA 1', 'LULUS'),
(96, '0026178856', 'HESTI INTAN YULIATI', 'XII IPA 1', 'LULUS'),
(97, '0014937022', 'LAILA SUCI ANGGRAINI', 'XII IPA 1', 'LULUS'),
(98, '0010297119', 'LENNY FAHMAWATI', 'XII IPA 1', 'LULUS'),
(99, '0014945616', 'MUHAMMAD IQBAL', 'XII IPA 1', 'LULUS'),
(100, '0010827166', 'NARMEDYA SALSABILA', 'XII IPA 1', 'HUBUNGI SEKOLAH'),
(101, '0024194464', 'NAVILIO PRIMAHENDRA VERSANDO', 'XII IPA 1', 'LULUS'),
(102, '0014918498', 'NOVA NUR RASMI', 'XII IPA 1', 'LULUS'),
(103, '0020676181', 'OKTI SARITHA', 'XII IPA 1', 'LULUS'),
(104, '0023038342', 'REZA ARJUU ROZAAQ', 'XII IPA 1', 'HUBUNGI SEKOLAH'),
(105, '0020490324', 'RONALD DONISTIAR SUSILO', 'XII IPA 1', 'LULUS'),
(106, '0017493170', 'SAMMY ISYA\' PEARL ABABIL', 'XII IPA 1', 'LULUS'),
(107, '0024949696', 'ACHMAD RIZKI', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(108, '0026017125', 'AMAYRILIS BRESILIANI KARYADI', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(109, '0020793866', 'ANJELI PANGESTIKA SYAHRANI', 'XII IPA 2', 'LULUS'),
(110, '0026173691', 'ARTAWAN BAKTI WIJONO', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(111, '0005764596', 'AYU MANDELA', 'XII IPA 2', 'LULUS'),
(112, '0024211209', 'BIMA WAHYU LAKSONO', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(113, '0010719952', 'CINDY FATIHASARI INDIARTI', 'XII IPA 2', 'LULUS'),
(114, '0022116320', 'DENNY YOGIARTO', 'XII IPA 2', 'LULUS'),
(115, '0020676092', 'DESTIA PUTRI MAWARIZKI', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(116, '0020579088', 'DEWI UTARI SEKAR PERTIWI', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(117, '0020598953', 'DIVA AULIYA RAHMANANDA', 'XII IPA 2', 'LULUS'),
(118, '0020690546', 'FARDHAN FAHREZA MAULANA', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(119, '0015514160', 'FATAHILAH GULAM MAGHRIBI', 'XII IPA 2', 'LULUS'),
(120, '0002799598', 'JISNU PRAMUDITA RACHMAN', 'XII IPA 2', 'LULUS'),
(121, '0020659400', 'Julia Puspita Arum', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(122, '0020894453', 'MOHAMMAD DANY HAIDAR ALLAM', 'XII IPA 2', 'LULUS'),
(123, '0020675558', 'NAFAS LANTANG BUMI AMARA', 'XII IPA 2', 'LULUS'),
(124, '0020492931', 'NARIKA HURIN FAZA', 'XII IPA 2', 'LULUS'),
(125, '0026955860', 'NAUFALDY AZRIEL ANWAR', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(126, '0022116252', 'NAUFHAL ARDYANSYAH WIBOWO', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(127, '0021598234', 'NIA FEBRIANTINI', 'XII IPA 2', 'LULUS'),
(128, '0014670244', 'NOVIKA ADIS PUTRI DEVIANI', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(129, '0020793889', 'RAYHANDANA RISANDHA YUNAR', 'XII IPA 2', 'LULUS'),
(130, '0003199993', 'RICKY MAHESWARA', 'XII IPA 2', 'LULUS'),
(131, '0014754954', 'RIYU SETYA WIBOWO', 'XII IPA 2', 'LULUS'),
(132, '0017533118', 'RONAN PERMANA', 'XII IPA 2', 'LULUS'),
(133, '0021598256', 'SALSABILA FATHIMATUZZAHROO', 'XII IPA 2', 'HUBUNGI SEKOLAH'),
(134, '0026017176', 'SAMUEL INDIANTO', 'XII IPA 2', 'LULUS'),
(135, '0024211761', 'SEPTIAN ARIF MAULANA', 'XII IPA 2', 'LULUS'),
(136, '0020878200', 'ALDO HERMAWAN', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(137, '0026017090', 'AMBAR FITRI LESTARI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(138, '0020056914', 'ANAS SETIAWATI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(139, '0010730021', 'AUDIA AMARTA ISLAMIA SARASWATI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(140, '0020793823', 'CHIKA SHALSABILA PRATAMA', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(141, '0020674531', 'DEPRILIA DAMAYANTI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(142, '0021598074', 'DEVY NUR AZIZAH', 'XII IPA 3', 'LULUS'),
(143, '0022116595', 'DINDA KARUNIA PUTRI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(144, '0026278534', 'FAHRUL CAHYO SEMBODO', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(145, '0021132369', 'FATMA SAFIRA', 'XII IPA 3', 'LULUS'),
(146, '9991096522', 'FAUZI DWI SURYO', 'XII IPA 3', 'LULUS'),
(147, '0023878603', 'KALINDRA MURTI NUR SHANJIWANI', 'XII IPA 3', 'LULUS'),
(148, '0010161570', 'KEKE CAHAYA NIKITASARI', 'XII IPA 3', 'LULUS'),
(149, '0026191460', 'MUHAMMAD FAHMI SHIDIQ', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(150, '0000149598', 'MAUDY MAULIDA IVONI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(151, '0020878379', 'MEGA NUR MIFTAKHULJANAH', 'XII IPA 3', 'LULUS'),
(152, '0037118089', 'MUADZAN RIZAL RAHMAN', 'XII IPA 3', 'LULUS'),
(153, '0020676198', 'MOCHAMMAD HANIBAL NARINDRA', 'XII IPA 3', 'LULUS'),
(154, '0026873621', 'RENDI ANANTO SETIAWAN', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(155, '0020937973', 'RIZMA OCTAVIANI', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(156, '0030193496', 'SALMA ZAHRA WIJAYA', 'XII IPA 3', 'LULUS'),
(157, '0026192422', 'SHELVANESIA ARTHAMEVITA', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(158, '0020894491', 'SOBIRIN GIGIH SASONGKO', 'XII IPA 3', 'HUBUNGI SEKOLAH'),
(159, '0030335544', 'SYAHARANI ANGGUN PRASASTI', 'XII IPA 3', 'LULUS'),
(160, '0015935026', 'THANIA NABILLA HANIFAH', 'XII IPA 3', 'LULUS'),
(161, '0020659264', 'TITHO DARWIKA', 'XII IPA 3', 'LULUS'),
(162, '0022116720', 'ZIDAN RIFQI RAMADHAN', 'XII IPA 3', 'LULUS'),
(163, '0020659141', 'AFIF AZRIEL PUTRA', 'XII IPA 4', 'LULUS'),
(164, '0027660203', 'AGIL AYU ASY\'ARI', 'XII IPA 4', 'LULUS'),
(165, '0020659258', 'ANIDA HANIFAH', 'XII IPA 4', 'LULUS'),
(166, '0015514168', 'ANISA DESTI ADELIANA', 'XII IPA 4', 'LULUS'),
(167, '0020675798', 'ARLIA RAHMA HARIANTO', 'XII IPA 4', 'LULUS'),
(168, '0026278662', 'ARYA FADILAH IRATANA', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(169, '0024194537', 'DEWI ARTI OKTAFIANA', 'XII IPA 4', 'LULUS'),
(170, '0028237885', 'DITO VEBRIANSYAH', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(171, '0014331329', 'ERLANGGA DIAR AJI PRAYITNO', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(172, '0022380456', 'FAIRUZ TIFANI', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(173, '0014750336', 'FAIZAL AKBAR', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(174, '0021190018', 'Faradila Risma Izzati', 'XII IPA 4', 'LULUS'),
(175, '0026278647', 'GALANG SETIAWAN WIBISONO', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(176, '0020397236', 'Helen Nadia Seputri Kurniawan', 'XII IPA 4', 'LULUS'),
(177, '0017733571', 'LINTANG TRIYANI NIAGUSTI', 'XII IPA 4', 'LULUS'),
(178, '0020658974', 'MUHAMAD RIFKI MAULANA', 'XII IPA 4', 'LULUS'),
(179, '0015132331', 'NADYA DWI NUR FIANDISSA', 'XII IPA 4', 'LULUS'),
(180, '0014750557', 'NIKEN NUGRAHINI ARIYANTI', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(181, '0015889500', 'ODDIKA RAFEL HERNANDA', 'XII IPA 4', 'LULUS'),
(182, '0024289625', 'RESTY TRIANDRIYANI', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(183, '0020659298', 'RIKO DWI ARIYANTO', 'XII IPA 4', 'LULUS'),
(184, '0014750835', 'SHILVI MARGA RENI', 'XII IPA 4', 'LULUS'),
(185, '0020659253', 'SURYO SETIAWAN', 'XII IPA 4', 'LULUS'),
(186, '0023935569', 'TIARA ROMADHONA', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(187, '0021615320', 'VIERAS IKRIMAH LESTARI', 'XII IPA 4', 'HUBUNGI SEKOLAH'),
(188, '0020676069', 'YOGA ADRIANSYAH', 'XII IPA 4', 'LULUS'),
(189, '0020611639', 'Adi Satria Maulana', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(190, '0026034522', 'Agustina Indah Ariyani', 'XII IPA 5', 'LULUS'),
(191, '0026955859', 'AHMAD KHARIM MUSTOFA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(192, '0012397333', 'AJENG AYU RAHMAWATI', 'XII IPA 5', 'LULUS'),
(193, '0020659261', 'ALMA DWI MAULIDA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(194, '0011308098', 'AMALIA NUR UTAMI', 'XII IPA 5', 'LULUS'),
(195, '0024211630', 'ANIFAH NUR SAFITRI', 'XII IPA 5', 'LULUS'),
(196, '0024211305', 'ARETA SALSABELLA HANDAYANI', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(197, '0010335063', 'ARIF KURNIYANTO', 'XII IPA 5', 'LULUS'),
(198, '0017256053', 'BAGUS SUBAGYA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(199, '0014739053', 'DINDA NUR AZIZAH', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(200, '0021598247', 'DWI JULIANSYAH SAPUTRA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(201, '0020878098', 'FARIZ HERMANSYAH', 'XII IPA 5', 'LULUS'),
(202, '0020598985', 'FERELEVINSA AYODYA PRAMESTRYCIA SHEVIRA GUSTI', 'XII IPA 5', 'LULUS'),
(203, '0030078235', 'INTAN RAFIKA AULIA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(204, '0014918465', 'IQBAL PRAMUDYA SEPTIAWAN', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(205, '0023476542', 'LUTFI DEVIANA ANGGRAENI', 'XII IPA 5', 'LULUS'),
(206, '0017757712', 'MAULANA FILLAH ARTHUR BRISBANE', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(207, '0020397246', 'MONITA NANDA APRILLIA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(208, '0026795473', 'MUHAMMAD VIERI ARDIANZA', 'XII IPA 5', 'LULUS'),
(209, '0022116663', 'RADITYO HUDA PRATAMA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(210, '0020937970', 'REZA KURNIA SARI', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(211, '0024211765', 'RIANA CIPTA EMILIA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(212, '0010297589', 'RINA TRIMURTI', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(213, '0018871052', 'SHINDY FERDIANA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(214, '0014750328', 'SINDU ADI NUGROHO', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(215, '0014853358', 'SYARIF RIYADI NUR STADIANTO', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(216, '0026795474', 'VITA MAHARANI NURPERMATASARI', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(217, '0022115721', 'YUSA DWIYANA', 'XII IPA 5', 'HUBUNGI SEKOLAH'),
(218, '0010718511', 'ALAM SANCA', 'XII IPS 1', 'LULUS'),
(219, '0020599028', 'ARNETTA SAFIRA ROSSI', 'XII IPS 1', 'LULUS'),
(220, '0026877472', 'AURALIA ASA DIAJENG PUTRI DEA', 'XII IPS 1', 'LULUS'),
(221, '0015815513', 'BERLIANA ANGGUN PERWITASARI', 'XII IPS 1', 'LULUS'),
(222, '0020976961', 'BINTANG ADITYA WIBOWO', 'XII IPS 1', 'LULUS'),
(223, '0012413020', 'BINTANG RIDWAN SAPUTRA', 'XII IPS 1', 'HUBUNGI SEKOLAH'),
(224, '0026017142', 'DIKA SETO PRASETYO', 'XII IPS 1', 'LULUS'),
(225, '0010289495', 'DIMAS DWI WICAKSONO', 'XII IPS 1', 'HUBUNGI SEKOLAH'),
(226, '0026137273', 'ELSA ADHISTA AULIA DEWI', 'XII IPS 1', 'LULUS'),
(227, '0021160867', 'FARA AMALIA', 'XII IPS 1', 'LULUS'),
(228, '0018695141', 'GHALIB NANDO RAMADHAN', 'XII IPS 1', 'LULUS'),
(229, '0012253648', 'ILHAM MAULANA RAKHMAN', 'XII IPS 1', 'LULUS'),
(230, '0020675826', 'INSANI CAHYA ZABELIA', 'XII IPS 1', 'LULUS'),
(231, '0026178866', 'KARLIN EKA MARSUDIRINI', 'XII IPS 1', 'LULUS'),
(232, '0014754884', 'MARVELLOUS PUTRI KURNIANING DEWA', 'XII IPS 1', 'LULUS'),
(233, '0027070899', 'MUHAMAD FAHMI FARDIAN SYAH', 'XII IPS 1', 'LULUS'),
(234, '0003340460', 'MUHAMMAD KHAIRUL \'AZILIN', 'XII IPS 1', 'LULUS'),
(235, '0020878395', 'MUHAMMAD RIZKY FEBERTA', 'XII IPS 1', 'HUBUNGI SEKOLAH'),
(236, '0026016997', 'REIGA HADI ANUGRAHA', 'XII IPS 1', 'HUBUNGI SEKOLAH'),
(237, '0020658920', 'RIVALDO IVAN SAPUTRA', 'XII IPS 1', 'LULUS'),
(238, '0010297048', 'RIZKY HARYANTO PUTRO', 'XII IPS 1', 'LULUS'),
(239, '0015151975', 'SABILLA DEWANTY ARZENA WILIYANTO', 'XII IPS 1', 'LULUS'),
(240, '0014918423', 'SAGITA FITRIYANTINA', 'XII IPS 1', 'LULUS'),
(241, '0012397164', 'SATRIO BAGUS PRIYO UTOMO', 'XII IPS 1', 'HUBUNGI SEKOLAH'),
(242, '0028697219', 'VAVA ALESSANDRO RIYANTO', 'XII IPS 1', 'LULUS'),
(243, '0023878552', 'WIDYA MOCAHANI', 'XII IPS 1', 'LULUS'),
(244, '0027225048', 'A VANYA SABRINA', 'XII IPS 2', 'LULUS'),
(245, '0018693805', 'ACHMAD SHOBIRIN', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(246, '0022116754', 'ALBIM CIKAL DEISYAMARTHA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(247, '0022117055', 'ALIFIA SUKMAFIDY RAMADHANI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(248, '0017672667', 'ANANDA PRASETYA ADJI WIDJAYA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(249, '0010730017', 'ANINDYA SEKAR AYU OKTAVIANA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(250, '0020653518', 'AULIA FARADIVA', 'XII IPS 2', 'LULUS'),
(251, '0014571309', 'BAYU RAHARJA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(252, '0018832320', 'BERLY RAFLINO', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(253, '0020492933', 'DHEA AMANDA PUTRI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(254, '0014654867', 'DHITO ROMADHON', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(255, '0020659114', 'DISTYA REGGINA PUTRI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(256, '0015934831', 'DRI RATNA FITRIA NASUTION', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(257, '0027036009', 'FANI PUTRI WARSITO', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(258, '9993171423', 'FERRY GOTARI PURNOMO', 'XII IPS 2', 'LULUS'),
(259, '0020579075', 'FIDYA CHINTYA SARI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(260, '0024709649', 'GIBRAN AL GIVARI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(261, '0020579181', 'HERIKA KALES NOFIANA DEWI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(262, '0014409349', 'KHOIRUL HADI YUDA PRATAMA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(263, '0021157975', 'KHUSNA NUR AURORA', 'XII IPS 2', 'LULUS'),
(264, '0020899128', 'KRIESNA DANAR JATI', 'XII IPS 2', 'LULUS'),
(265, '0028288832', 'MERNINDITA RAFIF HASNA', 'XII IPS 2', 'LULUS'),
(266, '0020659135', 'MORENO SAPUTRA WIDODO ABADI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(267, '0024033744', 'MUHAMMAD ALIFIO DAFFA SETIYAWAN', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(268, '0014676633', 'NIA NOVIANI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(269, '0022117054', 'NINO MARCELO ZHEVA', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(270, '0016170227', 'NIRMALA SWANTIKA DEWI', 'XII IPS 2', 'LULUS'),
(271, '0013044418', 'PUTRI PATMAWATI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(272, '0026017182', 'RAVIN RACHMATULLAH', 'XII IPS 2', 'LULUS'),
(273, '0014918572', 'Surya Wahyu Putra', 'XII IPS 2', 'LULUS'),
(274, '0020598901', 'TEUKU MUHAMMAD FIRDAUS ZAKARIA', 'XII IPS 2', 'LULUS'),
(275, '0020517373', 'VIOLINA PRAMESTIWI', 'XII IPS 2', 'HUBUNGI SEKOLAH'),
(276, '0021235774', 'ADE PUTRA GATRYA', 'XII IPS 3', 'LULUS'),
(277, '0015132398', 'ADELIA CITRA ANGGRAINI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(278, '0020878284', 'ADITYA PUTRA SATRIAWAN', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(279, '0026278344', 'ALFITO DEVA PRAMANA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(280, '0020397237', 'AMILIA RAFIKAMALA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(281, '0020579093', 'ATHAYA TERTIA SHAVIRA', 'XII IPS 3', 'LULUS'),
(282, '0029769745', 'BENNY TANJUNG WIJAYA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(283, '0026173702', 'BINTANG PRADANA PUTRA', 'XII IPS 3', 'LULUS'),
(284, '0013440833', 'DESY RAHMAWATI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(285, '0000849398', 'DHEA NOOR AMALLIA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(286, '0017142741', 'ELLA NOVITASARI', 'XII IPS 3', 'LULUS'),
(287, '0020676088', 'FAUSTINA LEONITA SAPUTRI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(288, '0020056917', 'FERRI ARGA MUKTI SETIAWAN', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(289, '0017757720', 'FRANKA WIDYAN PUTRA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(290, '0021236455', 'HANAN AIMAN NAJID', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(291, '0021236213', 'INTAN NOVITA SARI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(292, '0023057075', 'KHAIRUN NAFIDA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(293, '0021236452', 'LISTIAWATI DWI HASTUTI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(294, '0020517338', 'MOHAMAD WAHYU IRAWAN', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(295, '0026016988', 'MUHAMAD LUTFI ALFAN', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(296, '0026772764', 'MUHAMMAD HASIF RAHMAN ALZAKI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(297, '0022116498', 'NAFA RIZYA AULIAFANI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(298, '0020659163', 'NDARU SATRIO WIBOWO', 'XII IPS 3', 'LULUS'),
(299, '0010335081', 'PREM SAMBOJA', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(300, '0010426086', 'PUTRI DEVINA FITRIANI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(301, '0015934986', 'RAMADHAN SULISTIYANTO', 'XII IPS 3', 'LULUS'),
(302, '0010394943', 'Renny Setiyani', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(303, '0014754873', 'RIDWAN ROHMANSYAH', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(304, '0018403757', 'RIYO ARKAAN ZAKI', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(305, '0020659126', 'TEGAR ARIYANTO BERE', 'XII IPS 3', 'HUBUNGI SEKOLAH'),
(306, '0026914914', 'YUMNA QURROTUL \'AIN', 'XII IPS 3', 'HUBUNGI SEKOLAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `isi` longtext NOT NULL,
  `waktu` int(225) NOT NULL,
  `waktu_terjawab` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `isi`, `waktu`, `waktu_terjawab`) VALUES
(9, 'Mulyadi', 'Mulyadihore3@gmail.Com', 'Cara mendaftar on line di sma institut indonesia bagaimana? Saya mau mendaftarkan anak saya', 1591448742, NULL),
(10, 'Alif Dwi Prasetio', 'alifdwi2005@gmail.com', 'Assalamualaikum, permisi apakah ada surat keterangan lebih lanjut mengenai PPDB nya?', 1593046987, NULL),
(11, 'irma', 'irmayulianita94@gmail.com', 'Apakah pendaftaran peserta didik baru masih dibuka ??', 1593520423, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar_ppdb`
--

CREATE TABLE `pendaftar_ppdb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nis_siswa` varchar(40) NOT NULL,
  `asal_smp` varchar(255) NOT NULL,
  `kecamatan_smp` varchar(255) NOT NULL,
  `kota_smp` varchar(225) NOT NULL,
  `provinsi_smp` varchar(225) NOT NULL,
  `no_ijazah` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `password` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(30) DEFAULT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `no_tlpn` varchar(30) NOT NULL,
  `nama_ortu` varchar(225) NOT NULL,
  `no_tlpn_ortu` varchar(225) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `alamat_wali` longtext NOT NULL,
  `no_wali` varchar(255) NOT NULL,
  `sudah_daftar_di` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `verify_data` int(2) NOT NULL,
  `verify_pembayaran` int(2) NOT NULL,
  `date_created` int(255) NOT NULL,
  `gel` int(10) NOT NULL DEFAULT 1,
  `benar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar_ppdb`
--

INSERT INTO `pendaftar_ppdb` (`id`, `nama`, `status`, `nis_siswa`, `asal_smp`, `kecamatan_smp`, `kota_smp`, `provinsi_smp`, `no_ijazah`, `jenis_kelamin`, `password`, `tempat_lahir`, `tgl_lahir`, `umur`, `agama`, `alamat`, `no_tlpn`, `nama_ortu`, `no_tlpn_ortu`, `nama_wali`, `alamat_wali`, `no_wali`, `sudah_daftar_di`, `image`, `verify_data`, `verify_pembayaran`, `date_created`, `gel`, `benar`) VALUES
(2, 'zulfiana puspa larasti', 'Alumni SMA Institut Indonesia Tahun Pelajaran 2019/2020', '10260', 'smp institut indonesia', 'semarang selatan', 'semarang', 'jawa tengah', '0', 'Perempuan', 'puspacantik', 'semarang', '2004-08-30', 15, 'Islam', 'jln medoho 1 raya', '081328953848', 'untung priyadi', '081328953848', '', '', '', '', 'default.png', 1, 0, 1587108092, 1, 1),
(23, 'Avia lushandi fitria', '', '10125', 'SMP institut indonesia', '', '', '', '', 'Perempuan', 'lushandi23', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1587661936, 1, 0),
(24, 'Rita Anjani ', 'Alumni SMP Institut Indoensia Tahun Pelajaran 2019/2020', '10152', 'Smp Institut Indonesia', 'Semarang Timur', 'Semarang', 'Jawa Tengah', '-', 'Perempuan', 'anjani', 'Boyolali', '2005-06-10', 15, 'Islam', 'Jl tambak boyo ', '0895350885030', 'Suprih', '082137727313', '', '', '', '', 'default.png', 1, 0, 1587858175, 1, 1),
(25, 'Inez oktarensya rahmadaniar', 'Alumni SMP Institut Indoensia Tahun Pelajaran 2019/2020', '10141', 'Smp institut indonesia', 'Semarang timur', 'Semarang', 'Jawa tengah', '-', 'Perempuan', '391185', 'Semarang', '2004-10-21', 15, 'Islam', 'Jl.kelapa sawit III/254', '089668185568', 'Eny setyowati', '081391755422', '', '', '', 'SMA Institut Indonesia', 'default.png', 1, 0, 1588224204, 1, 1),
(31, 'Reni Febriani', 'Alumni SMP Institut Indoensia Tahun Pelajaran 2019/2020', '10243', 'Smp Institut Indonesia', 'Semarang utara', 'Semarang', 'Jawa Tengah', '-', 'Perempuan', 'febiani123', 'Semarang', '2005-02-24', 15, 'Islam', 'Jl lodan 3', '08818570246', 'Jumron', '089602733533', 'Jumron', 'Jl lodan 3', '089602733533', '', 'default.png', 0, 0, 1588753077, 1, 1),
(32, 'Vincentius Arya Safaldo', 'UMUM', '0041798062', 'smp kesatrian 2 semarang', 'pedurungan', 'Semarang', 'Jawa Tengah', '-', 'Laki-Laki', 'vincent123', 'semarang', '2004-08-12', 15, 'Islam', 'jl cebolok indah 2 no 43 Semarang', '082241386400', 'Isty Abdyah', '082241386400', '', '', '', '', 'default.png', 0, 0, 1589026685, 1, 1),
(33, 'Mutiara Putri', '', '3374063472928282', 'Smp Kesatrian 1', '', '', '', '', 'Perempuan', 'azwar123', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1589208048, 1, 0),
(34, 'Deni', '', '123456789', 'Smp Kesatrian 1', '', '', '', '', 'Laki-Laki', 'aaa', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1589208141, 1, 0),
(35, 'Muna Sabrina', 'UMUM', '6679', 'SMP N 34 Semarang', 'Pedurungan', 'Kota Semarang', 'Jawa Tengah', '-', 'Perempuan', 'muna12345', 'semarang ', '2004-09-05', 15, 'Islam', 'Tlogomulyo Rt 01 / 07 Pedurungan Semarang', '085727021964', 'Nur Subkhan', '085727021964', '', '', '', '', 'default.png', 0, 0, 1591412169, 1, 1),
(36, 'Carissa Gantari Cetta Muthi', 'UMUM', '0050672052', 'SMP Negeri 14 Semarang ', 'Pedurungan ', 'Semarang ', 'Jawa Tengah', '-', 'Perempuan', 'carissagcm03', 'Semarang ', '2005-01-03', 15, 'Islam', 'Bangetayu Kulon RT 05 RW 02 Kecamatan Genuk Kota Semarang ', '08122894473', 'Akhmad Mulyono ', '08122894473', '', '', '', '', 'default.png', 0, 0, 1592464080, 1, 1),
(37, 'Syamsudin', '', '10221', 'SMP Institut Indonesia ', '', '', '', '', 'Laki-Laki', 'raldarald23', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1592472141, 1, 0),
(38, 'Fadhila Aulia Rachma', 'UMUM', '0051435564', 'SMPN 37 Semarang', 'Semarang Selatan', 'Kota Semarang', 'Jawa Tengah', '-', 'Perempuan', 'f0A7U0R5A', 'Semarang', '2005-11-07', 14, 'Islam', 'Jalan Parang Kusumo I nomor 9, Tlogosari Kulon, Semarang', '0857 2640 8960', 'Yoni Sandra Astari, ST', '083842469733', '', '', '', '', 'default.png', 0, 0, 1592720683, 1, 1),
(39, 'CALISTA MELGA AULIA', 'UMUM', '13927', 'SMPN 4 SEMARANG', 'GAYAMSARI', 'SEMARANG', 'JAWA TENGAH', '-', 'Perempuan', 'CALISTAMELGAAULIA', 'SEMARANG', '2005-03-31', 15, 'Islam', 'Jl.Kanguru Utara IV No.26 Rt07 Rw03 Gayamsari Semarang', '081931159273', 'JOKO PURWANTO', '085706987297', '', '', '', '', 'default.png', 0, 0, 1592878188, 1, 1),
(40, 'Nur Rohim', 'UMUM', '0041669055', 'SMP NEGERI 36 SEMARANG', 'SEMARANG TENGAH', 'SEMARANG', 'JAWA TENGAH', '-', 'Perempuan', 'sid123', 'SEMARANG', '2004-12-26', 15, 'Islam', 'Jl Kebonharjo RT 05 / RW 08, Tanjungmas, Semarang', '081329395938', 'KUNAWAN', '085226523688', '', '', '', '', 'default.png', 0, 0, 1593002722, 1, 1),
(41, 'Rivaldo Ramadhan', 'UMUM', '0057051550', 'SMPN 32 Semarang', 'Semarang Tengah', 'Kota Semarang', 'Jawa Tengah', '-', 'Laki-Laki', 'tirtoyoso8', 'Semarang', '2005-10-22', 14, 'Islam', 'Jalan Tirtoyoso VIII No. 2 RT.06 RW.12 Kelurahan Rejosari Kecamatan Semarang Timur Semarang Jawa Tengah', '081548182649', 'Puguh Ardiyanto', '08562667016', '', '', '', '', 'default.png', 0, 0, 1593129269, 1, 1),
(42, 'Rafael Albion Savero', 'UMUM', '0051416626', 'SMPN 8 SEMARANG', 'candisari', 'semarang', 'jawa tengah', '-', 'Laki-Laki', 'Rafael29oktober', 'Balikpapan', '2005-10-29', 14, 'Islam', 'jl cut mutia no 21 Banda aceh', '082138845125', 'Antoni steven', '082361658007', 'dr Erwinantyo Sp THT-KL', 'jl cinde raya dalam no 19 semarang', '081225008927', '-', 'default.png', 0, 0, 1593135010, 1, 1),
(43, 'Farrikha', '', '0041669055', 'SMP Negeri 36 Semarang', '', '', '', '', 'Perempuan', 'sid123', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1593152209, 1, 0),
(44, 'Farrikha', '', '0041669055', 'SMP Negeri 36 Semarang', '', '', '', '', 'Perempuan', 'sid123', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1593152278, 1, 0),
(45, 'Farrikha', '', '0041669056', 'SMP Negeri 36', '', '', '', '', 'Perempuan', 'farrikha36', '', '0000-00-00', NULL, '', '', '', '', '', '', '', '', '', 'default.png', 0, 0, 1593152397, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_alumni`
--

CREATE TABLE `pesan_alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `telepon` int(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan_alumni`
--

INSERT INTO `pesan_alumni` (`id`, `nama`, `kelas`, `telepon`, `jk`, `kota`, `pesan`, `tahun`) VALUES
(11, 'Raras MD', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Menarik dan Baik', 2019),
(12, 'Nico Fernades', 'XII IPA 1', 2147483647, 'Laki-Laki', 'Semarang', 'Sekolahnya bagus dan strategis. Bagus dan bagus lah', 2019),
(13, 'Raras MD', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Menarik dan Baik', 2019),
(14, 'Anisa berlianda vista', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Sekolahnya strategis, sangat menarikk bangettðŸ¤—ðŸ˜Ž', 2019),
(15, 'Diana ayu pramitasari ', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Sangat menyenangkan mempunyaii temen temen yang sangat baik , dan suatu kebanggan juga sekolah di sma institut indonesia ((:', 2019),
(16, 'Andry Yatno', 'XII IPA 3', 2147483647, 'Laki-Laki', 'Semarang', 'Sangat nyaman, guru gurunya baik semua, tempat yang sangat amat strategis', 2019),
(17, 'Tiara Tunjung Asyifa', 'XII IPA 3', 0, 'Perempuan', 'Atlas ', 'Pengembangan Sumber Daya Siswanya bintang lima\r\n\"Beranilah Beraksi daripada hanya membaca Teori\"ðŸ™ƒ', 2019),
(18, 'mhr', 'XII IPA 3', 884007617, 'Laki-Laki', 'Semarang', 'Alhamdullilah bisa lulus', 2019),
(19, 'Achmad Fauzan', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang', 'Tempat ke 2 untuk tidur setelah rumah :v', 2019),
(20, 'gento', 'XII IPS 2', 82223239, 'Laki-Laki', 'Semarang', 'kangen telat berjamaah', 2019),
(21, 'Abdee', 'XII IPS 2', 82223239, 'Laki-Laki', 'Semarang', 'kangen ngasih upil ke achmad fauzan', 2019),
(22, 'Debby Permata Sari', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Saya bangga menjadi bangian SMA Institut Indonesia karna di sanalah saya belajar , dan di pandu oleh guru guru yang hebat. \r\nSemoga SMA Institut Indonesia menjadi SMA Swasta pertama di Semarang ', 2019),
(23, 'Dewi lidiyawati', 'XII IPA 6', 2147483647, 'Perempuan', 'Semarang', 'Kangen baris pagi biar bisa salim sama bapak ibu guru kadang juga bisa caper dikit â™¡â™¡â™¡', 2019),
(24, 'Ahmad Andri N', 'XII IPS 2', 2147483647, 'Laki-Laki', 'semarang', 'Kenangan indah bersamamu akan kuingat sampai lupa.', 2019),
(25, 'Masa iya ga kenal yohanesss', 'XII IPS 3', 2147483647, 'Laki-Laki', 'Semarang', 'Rindu liat achmad fauzan XII IPS 2 ditolak cintanya.. ', 2019),
(26, 'Jihan dhiya ulhaq arifin', 'XII IPA 6', 2147483647, 'Perempuan', 'Semarang', 'Sekolahan yg sangat disiplin,nyaman,seru,dan asyik dlm pembelajaran', 2019),
(27, 'Achmad Fauzan', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang', 'Suatu hari di kantin setelah pulang sekolah dan akhirnya losee :v', 2019),
(28, 'Masplang', 'XII IPS 3', 2147483647, 'Laki-Laki', 'Semarang', 'Kangen jajan ke kantin bareng kamu \r\n\r\n\r\nhehe. ', 2019),
(29, 'Aca', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang', 'Pengen sama andini', 2019),
(30, 'Anita Mutiara Dewi', 'XII IPA 1', 2147483647, 'Perempuan', 'Semarang', 'Saya sangat bangga bisa sekolah disana, karena guru-gurunya menuntun para siswa belajar dengan sangat baik. Sangat patut jika Institut Indonesia menjadi sekolah swasta favoritðŸ’š', 2019),
(31, 'Bima', 'XII IPA 1', 2147483647, 'Laki-Laki', 'London', '3thn keturon tangi tangi wes lulus :(\r\n#ealah #hm #bdrk', 2019),
(32, 'Asha Adonia', 'XII IPA 2', 2147483647, 'Perempuan', 'Semarang', 'Sangat senang bersekolah disini bapak ibu gurunya ter the bestðŸ˜', 2019),
(33, 'KennethfOuch', 'pilih', 2147483647, 'pilih', 'KennethfOuch', 'Good day!  smainstindosmg.sch.id \r\n \r\nDid you know that it is possible to send commercial offer fully legit? \r\nWe suggesting a new unique way of sending proposal through contact forms. Such forms are located on many sites. \r\nWhen such messages are sent, n', 0),
(34, 'Diana Rarasati', 'XII IPA 3', 2147483647, 'Perempuan', 'Demak', 'Saya bangga bisa sekolah di sana, cara belajar mengajar guru-gurunya  sangatlah menuntun siswa dengan penuh kesabaran dan baik. Patutlah SMA INSTINDO menjadi satu-satunya SMA swasta di Semarang ter favorit ðŸ’š', 2015),
(35, 'Rymarsa', 'XII IPA 1', 2147483647, 'Laki-Laki', 'Semarang', 'Bagus', 2019),
(36, 'RIBUT BUDI YATI', 'XII IPA 1', 2147483647, 'Perempuan', 'Semarang ', 'Semoga semakin sukses dan membanggakan ðŸ‘ðŸ‘ðŸ‘   oiya waktu angkatan kita kelasnya itu A1 A2 dan A3 dan aku kebetulan di A1-1 (fisika) ', 1991),
(37, 'RIBUT BUDI YATI', 'XII IPA 1', 2147483647, 'Perempuan', 'Semarang ', 'Semoga semakin sukses dan membanggakan ðŸ‘ðŸ‘ðŸ‘   oiya waktu angkatan kita kelasnya itu A1 A2 dan A3 dan aku kebetulan di A1-1 (fisika) ', 1991),
(38, 'Bagus Tri Atmaja', 'XII IPA 1', 2147483647, 'Laki-Laki', 'Semarang', 'Kangen dengan suasana taman sekolah yang asri. Begitu pula dengan bapak ibu guru yang dulu mengajar. Berkat didikan anda semua, saya bisa mencapai posisi sekarang ini.', 2010),
(39, 'Salsabila Alfi Latifah', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang ', 'Sekolahnya sangat disiplin\r\nTeman teman sangat kompak dan menyenangkan\r\nSukses selalu Jaya selalu INSTINDO KUðŸ¥°', 2019),
(40, 'Riski Yuli Haryanti', 'XII IPS 3', 2147483647, 'Perempuan', 'Mranggen', 'Bangga lulusan dari ii karna banyak kenangan yg indahðŸ˜¬', 2014),
(41, 'Yusi virgowati', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'Meskipun sudah modern, jangan dilunturkan kekentalan budaya jawa nya. ', 2008),
(42, 'Imelia', 'XII IPS 1', 2147483647, 'Perempuan', 'Semarang', 'Sekolah terrr-the best pokoknyaâ¤', 2019),
(43, 'Imelia', 'XII IPS 1', 2147483647, 'Perempuan', 'Semarang', 'Sekolah terrr-the best pokoknyaâ¤', 2019),
(44, 'Darwo', 'pilih', 2147483647, 'Laki-Laki', 'Surabaya', 'Semoga tetap jaya amin\r\nDulu di kelas budaya masih pendirinya alm pak Sutiono dan kepsek Bu Is', 1968),
(45, 'diah prawesti', 'XII IPA 1', 2147483647, 'pilih', 'semarang', 'Sangat bangga dengan smkn maju sma yg dl sma skrg', 1999),
(46, 'R. Hansie Sukma', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Jakarta Timur', 'Kesan saya selama bersekolah disini, sangat menyenangkan. Banyak hal tak terlupakan yang saya dapatkan selama bersekolah disini. Sekolah ini telah mengajarkan banyal hal dan banyak membantu saya untuk menjadi seorang pribadi yang lebih baik dengan cara ya', 2000),
(47, 'Ravin Rachmatullah', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang ', 'Pekerjaan akan terasa ringan jika tidak di kerjakanâ˜ºï¸â˜ºï¸', 2020),
(48, 'Ravin Rachmatullah', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang ', 'Pekerjaan akan terasa ringan jika tidak di kerjakanâ˜ºï¸â˜ºï¸', 2020),
(49, 'Mega Nur Miftakhuljanah', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'tetap Semangat angkatan 2020!! usaha tidak menghianati hasil:-)', 2020),
(50, 'Mega Nur Miftakhuljanah', 'XII IPA 3', 2147483647, 'Perempuan', 'Semarang', 'tetap Semangat angkatan 2020!! usaha tidak menghianati hasil:-)', 2020),
(51, 'Surya Wahyu Putra', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang', 'Teruslah bernafas agar tetap hidup', 2020),
(52, 'Ayu Mandella ', 'XII IPA 2', 2147483647, 'Perempuan', 'Semarang ', 'Untuk bapak, ibu, guru terimakasih sudah mendidik saya ', 2019),
(53, 'Mernindita Rafif Hasna', 'XII IPS 2', 2147483647, 'Perempuan', 'Semarang', 'Terimakasih', 2020),
(54, 'Ananda prasetya ', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang ', 'Rindu tidur di kelas ', 2020),
(55, 'Ronan permana', 'XII IPA 2', 2147483647, 'Laki-Laki', 'SEMARANG', 'Semoga SMA INSTINDO bisa lebih baik kedepannya dan semoga selalu sukses di segala bidang, bidang akademik maupun non akademik. Sukses selalu INSTINDOðŸ’™ðŸ’™ðŸ’™ðŸ’™', 2020),
(56, 'Ronan permana', 'XII IPA 2', 2147483647, 'Laki-Laki', 'SEMARANG', 'Semoga SMA INSTINDO semakin maju dan jaya selalu dalam bidang akademik maupun non akademik, jaya selalu SMA INSTINDO ðŸ’™ðŸ’™', 2020),
(57, 'Erlangga Diar Aji P.', 'XII IPA 4', 2147483647, 'Laki-Laki', 'Semarang City ', 'Angkatan 2020 Menciptakan Sejarah baru \"ANGKATAN  PALING KUAT \" \r\nTerima kasih kepada Semua guru \"SMA INSTITUT INDONESIA SEMARANG \"yang  telah mendidik saya menjadi pribadi yang lebih baik ðŸ¤—ðŸ¤—ðŸ¤—ðŸ¤—ðŸ¤—ðŸ¤—', 2020),
(58, 'ALIFIA SUKMAFIDY R', 'XII IPS 2', 2147483647, 'Perempuan', 'SEMARANG', 'Semoga menjadi yang lebih baik', 2020),
(59, 'ALIFIA SUKMAFIDY R', 'XII IPS 2', 2147483647, 'Perempuan', 'SEMARANG', 'Semoga menjadi yang lebih baik', 2020),
(60, 'ALIFIA SUKMAFIDY R', 'XII IPS 2', 2147483647, 'Perempuan', 'SEMARANG', 'Semoga menjadi yang lebih baik', 2020),
(61, 'Ricky maheswara', 'XII IPA 2', 2147483647, 'Laki-Laki', 'Semarang', 'Tetap semangat dalam menjalani pademi covid_19 \r\n', 2020),
(62, 'Dhito Romadhon', 'XII IPS 2', 2147483647, 'Laki-Laki', 'Semarang', 'Semoga SMA INSTINDO bisa lebih maju lagi dan bangga sudah pernah menjadi bagian dari SMA INSTINDO', 2020),
(63, 'Renny Setiyani', 'XII IPS 3', 2147483647, 'Perempuan', 'Semarang', 'Semoga sukses selalu ya teman teman', 2020),
(64, 'Renny Setiyani', 'XII IPS 3', 2147483647, 'Perempuan', 'Semarang', 'Sekolah strategiss pokok e the best bgt ', 2020),
(65, 'Maulana Fillah AB', 'XII IPA 5', 2147483647, 'Laki-Laki', 'Semarang', 'Semoga kedepannya lebih baik lagi  aamiin', 2020),
(66, 'Hanan', 'XII IPS 3', 2147483647, 'Laki-Laki', 'Semarang', 'Seng jikuk paket ku sopo yo? Hayo ngaku', 2020),
(67, 'Okti Saritha', 'XII IPA 1', 2147483647, 'Perempuan', 'Semarang', 'Pak Bu saya kangen cabut pelajaran secara resmi (alias kalo ada panggilan OSIS atau pramuka) ðŸ˜‚', 2020),
(68, 'Prem ganteng ', 'XII IPS 3', 2147483647, 'Laki-Laki', 'Kota Semarang', 'Untuk semua guruku , walaupun saya nakal walaupun sering membuat kalian jengkel , tapi di hati saya guru2 instindo tetap yg paling hebat , terimakasih pahlawankuu ðŸ’š  i love u poll banget sekali', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `image` varchar(400) NOT NULL,
  `isi_singkat` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `url` varchar(30) NOT NULL,
  `waktu` int(225) NOT NULL,
  `waktu_update` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_un`
--
ALTER TABLE `hasil_un`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar_ppdb`
--
ALTER TABLE `pendaftar_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_alumni`
--
ALTER TABLE `pesan_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_alumni`
--
ALTER TABLE `data_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasil_un`
--
ALTER TABLE `hasil_un`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pendaftar_ppdb`
--
ALTER TABLE `pendaftar_ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `pesan_alumni`
--
ALTER TABLE `pesan_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
