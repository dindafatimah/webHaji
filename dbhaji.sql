-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(255) NOT NULL,
  `nm_admin` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Dinda', 'gointothebeach', 'abcdfk');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `judul` text NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `berita` longtext NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`judul`, `tanggal`, `berita`, `id`) VALUES
('3.233 Jemaah Haji Indonesia Pulang Hari ini, Berikut Jadwalnya', '08/08/2022', 'Madinah (PHU) --- Pemulangan jemaah haji Indonesia gelombang kedua masih terus berlanjut melalui Bandara Internasional Amir Muhammad bin Abdulaziz (AMAA) Madinah, Arab Saudi.<br />\r\n<br />\r\nBerlangsung sejak 15 Juli 2022, total sudah ada 74.380 jemaah yang sudah tiba di tanah air. Untuk jemaah haji gelombang pertama, mereka pulang melalui Bandara Internasional King Abdul Aziz, Jeddah.<br />\r\n<br />\r\nProses pemulangan jemaah haji gelombang pertama sudah berakhir pada 30 Juli 2022. Untuk jemaah haji gelombang kedua, pemulangan melalui Bandara AMAA Madinah hingga 13 Agustus 2022.<br />\r\n<br />\r\nHari ini, Senin (8/8/22), ada 3.233 jemaah yang akan pulang. Mereka tergabung dalam delapab kloter dan akan menuju enam debarkasi.<br />\r\n<br />\r\nBerikut jadwal lengkap pemulangan jemaah hari ini seperti dilansir PPIH Daerah Kerja Bandara:<br />\r\n<br />\r\n1. JKS 37 (Jakarta - Bekasi)<br />\r\n<br />\r\nSebanyak 410 jemaah haji asal Jawa Barat dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 7 Agustus 2022 pukul 22.50 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 03.50 WAS dari Bandara Madinah dengan pesawat Saudi Airlines (SV 5634) dan dijadwalkan mendarat pukul 12.00 WIB.<br />\r\n<br />\r\n2. SOC 35 (Solo)<br />\r\n<br />\r\nSebanyak 360 jemaah haji asal Jawa Tengah dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 01.10 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 06.10 WAS dari Bandara Madinah dengan pesawat Garuda Indonesia (GIA 6235) dan dijadwalkan mendarat pukul 23.05 WIB.<br />\r\n<br />\r\n3. BTH 12 (Batam)<br />\r\n<br />\r\nSebanyak 440 jemaah haji asal Jambi dan Riau dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 02.10 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 07.10 WAS dari Bandara Madinah pesawat Saudi Airlines (SV 5202) dan dijadwalkan mendarat pukul 20.00 WIB.<br />\r\n<br />\r\n4. UPG 13 (Makassar)<br />\r\n<br />\r\nSebanyak 393 jemaah haji asal Sulawesi Barat dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 03.50 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 08.50 WAS dari Bandara Madinah dengan pesawat Garuda Indonesia (GIA 1213) dan dijadwalkan mendarat pada 9 Agustus 2022 pukul 03.25 WIB.<br />\r\n<br />\r\n5. JKS 38 (Jakarta Bekasi)<br />\r\n<br />\r\nSebanyak 410 jemaah haji asal Jawa Barat dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 05.50 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 10.50 WAS dari Bandara Madinah dengan pesawat Saudi Airlines (SV 5234) dan dijadwalkan mendarat pada 9 Agustus 2022 pukul 00.50 WIB.<br />\r\n<br />\r\n6. BPN 5 (Balikpapan)<br />\r\n<br />\r\nSebanyak 360 jemaah haji asal Kalimantan Timur dan Sulawesi Tenggara dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 11.40 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 16.40 WAS dari Bandara Madinah dengan pesawat Garuda Indonesia (GIA 4205) dan dijadwalkan mendarat pada 9 Agustus 2022 pukul 11.10 WIB.<br />\r\n<br />\r\n7. PLM 5 (Palembang)<br />\r\n<br />\r\nSebanyak 450 jemaah haji asal Sumatera Selatan dan Banga Belitung berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 17.50 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 22.50 WAS dari Bandara Madinah dengan pesawat Saudi Airlines dengan nomor penerbangan SV 5052 dan dijadwalkan mendarat pada 9 Agustus 2022 pukul 12.30 WIB.<br />\r\n<br />\r\n8. JKS 39 (Jakarta Bekasi)<br />\r\n<br />\r\nSebanyak 410 jemaah haji asal Jawa Barat dijadwalkan berangkat dari hotel di Madinah menuju bandara pada 8 Agustus 2022 pukul 18.55 Waktu Arab Saudi (WAS). Mereka terbang pada 8 Agustus 2022 pukul 23.55 WAS dari Bandara Madinah dengan pesawat Saudi Airlines (SV 5556) dan dijadwalkan mendarat Air pada 9 Agustus 2022 pukul 13.55 WIB.<br />\r\n<br />\r\nPenulis<br />\r\nSholla Taufiq<br />\r\nEditor<br />\r\nHusni Anggoro', 9),
('Pemerintah Arab Saudi Apresiasi Petugas Haji Indonesia', '07/08/2022', 'Madinah (PHU) --- Pemerintah Kerajaan Arab Saudi memberikan apresiasi kepada seluruh petugas haji Indonesia. Hal ini disampaikan Wakil Menteri Haji dan Umrah Bidang Ziarah atau Kunjungan, Muhammad Abdurrahman Al Bijawi, saat menerima Wakil Ketua Panitia Penyelenggara Ibadah Haji (PPIH) Arab Saudi, Nasrullah Jasam di Kantornya Jalan As-Salam, Minggu Siang (7/8/2022).<br />\r\n<br />\r\nHadir juga, Kepala Daerah Kerja (Daker Madinah Amin Handoyo. <br />\r\n<br />\r\nBijawi mengaku menyaksikan langsung dedikai para petugas haji Indonesia, di bawah kepemimpinan Menteri Agama Yaqut Cholil Qoumas selaku Amirul Hajj, dalam melayani jemaah selama menjalani ibadah. “Kami ingin mengucapakan terima kasih kepada seluruh petugas haji Indoensia di bawah bimbingan Menteri Agama dan semua tim yang ada di sini. Semua sudah saling bahu membahu, sehingga memberikan yang terbaik bagi jemaah haji,” kata Muhammad Al-Bijawi.<br />\r\n<br />\r\n“Kami bersukur, tahun ini jemaah bisa beribadah dengan aman dan tenang.Kami terus berupaya memberikan pelayanan terbaik kpeda jemaah di bawah bimbingan Raja Salman,” sambungnya.<br />\r\n<br />\r\nKepada Nasrullah Jasam yang juga Konsul Haji KJRI Jeddah, Muhammad Al-Bijawi menjelaskan bahwa pemerintah Arab Saudi telah berusaha secara maksimal dalam memberikan layanan kepada jemaah dari seluruh dunia, khususnya Indonesia, setelah dua tahun vakum karena pandemi. Saat ini, lanjut Muhamamd, Kementerian Haji dan Umrah Arab Saudi akan segera melakukan koordinasi dengan Kementerian Agama RI guna mempersiapkan pelaksanaan haji tahun 2023.<br />\r\n<br />\r\n“Saat ini, kami sudah mulai berkoordinasi, mempersiapkan haji tahun depan. Kementerian Haji dan Umrah bersama Kementerian Agama akan segera bertemu guna membahas dan melakukan persiapan haji tahun 1444 H.” tukasnya.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` int(5) NOT NULL,
  `travel` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `travel`, `nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES
(41101, 'Umrah', 'Bima', 'Laki-laki', 'Jakarta', 'Cadangan', '41101.png'),
(41102, 'Haji', 'Dewi', 'Perempuan', 'Bandung', 'Diterima', ''),
(41103, 'Umrah', 'Ezra', 'Laki-laki', 'Surabaya', 'Cadangan', ''),
(41104, 'Haji', 'Ekka', 'Perempuan', 'Riau', 'Diterima', ''),
(41105, 'Umrah', 'Jehan', 'Laki-laki', 'Bali', 'Cadangan', ''),
(41106, 'Umrah', 'Via', 'Perempuan', 'Medan', 'Diterima', ''),
(41107, 'Haji', 'Rizi', 'Laki-laki', 'Makassar', 'Cadangan', ''),
(41108, 'Umrah', 'Citra', 'Perempuan', 'Manado', 'Diterima', ''),
(41109, 'Umrah', 'Theodore', 'Laki-laki', 'Aceh', 'Cadangan', ''),
(41110, 'Umrah', 'Andin', 'Perempuan', 'Lombok', 'Diterima', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
