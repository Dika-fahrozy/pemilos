-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Nov 2017 pada 04.34
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(7) NOT NULL,
  `username` char(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('AD-001', 'Dika-vrak', '0c06a8fb5e56d84eeb612f47e3f5206a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_calon`
--

CREATE TABLE `tab_calon` (
  `gambar` text NOT NULL,
  `id_calon` int(2) NOT NULL,
  `ketua_umum` varchar(100) NOT NULL,
  `ketua_1` varchar(100) NOT NULL,
  `ketua_2` varchar(100) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_calon`
--

INSERT INTO `tab_calon` (`gambar`, `id_calon`, `ketua_umum`, `ketua_1`, `ketua_2`, `visi`, `misi`) VALUES
('1.jpg', 1, 'Faisal Tanjung', 'Fahmi', 'Anisah', 'Kami akan menjadikan siswa/i SMK BPM menjadi Siswa/i yang kreatif dan aktif dalam hal rohani maupun jasmani dan semoga kedepannya kami bisa menjadi ketua OSIS yang baik dan dapat menjalankan program - program kerja kami (AMIN)', '1. Menumbuh kembangkan keimanan dan ketakwaan kepada Tuhan yang Maha Esa, bagi seluruh Siswa/i SMK BPM\r\n2. Menjadikan Siswa/i SMK BPM menjadi Siswa/i yang disiplin dan menumbuhkan rasa kekeluargaan antar warga sekolah SMK BPM\r\n3. Mengadakan kegiatan untuk menigkatkan kreatifitas dan bakat Siswa/i melalui program ekstrakulikuler dan berbagai organisasi yang ada'),
('2.jpg', 2, 'Hendri Ariles P', 'Yoki Pradana', 'Revani Chrisman', 'Menciptakan lingkungan SMK BPM memiliki sikap yang berkualitas, berpengetahuan luas, mempunyai sifat solidaritas yang tinggi, terbuka, aktif, kreatif dan inovatif melalui pengembangan organisasi yang berkualitas pula dengan landasan iman', '1. Memberi contoh tauladan yang baik kepada Siswa/i SMK BPM\r\n2. Meningkatkan kegiatan kerohanian serta pembinaan agama untuk menigkatkan keimanan serta ketakwaan kepada Tuhan Yang Maha Esa\r\n3. Mengajak Siswa/i untuk aktif dalam mengikuti ekstrakulikuler\r\n4. Mengadakan program - program kerja yang bermanfaat dan memiliki berdaya guna'),
('3.jpg', 3, 'Ednas Prasetyo', 'Lili Susilawati', 'Muhtadin', '1. Menjadikan OSIS SMK BPM aktif dalam segala bidang\r\n2. Menjadikan OSIS sebagai organisasi yang aktif, kreatif, dan yang akan memajukan nama baik sekolah', '1. Menumbuh kembangkan keimanan kepada Tuhan Yang Maha Esa\r\n2. Meningkatkan kedisiplinan siswa melalui ekstrakulikuler\r\n3. Mengoptimalkan fungsi peranan OSIS serta meningkatkan kinerja dan kerja sama khususnya dalam organisasi siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_kelas`
--

CREATE TABLE `tab_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_kelas`
--

INSERT INTO `tab_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X. A'),
(2, 'X. B'),
(3, 'X. C'),
(4, 'X. Kesehatan'),
(5, 'XI. Teknik Komputer Jaringan'),
(6, 'XI. Rekayasa Perangkat Lunak'),
(7, 'XI. Multimedia'),
(8, 'XI. Farmasi'),
(10, 'XII. Rekayasa Perangkat Lunak'),
(11, 'XII. Multimedia'),
(12, 'XII. Farmasi'),
(13, 'Dewan Guru'),
(14, 'X. D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_siswa`
--

CREATE TABLE `tab_siswa` (
  `nis` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_siswa`
--
INSERT INTO `tab_siswa` (`nis`, `nama`, `gender`, `id_kelas`, `status`) VALUES
('171810008', 'Allviyan Bomas Ilham', 'L', '0', 'BELUM'),
('171810016', 'Fery Kurniawan Saputra', 'L', '1', 'BELUM'),
('171810065', 'Sri Wulantami', 'P', '2', 'BELUM'),
('171810095', 'Mohamad Rahmat Fauzi', 'L', '3', 'BELUM'),
('161710013', 'Muhamad Faisal Tanjung', 'L', '5', 'BELUM'),
('161710026', 'AFIFAH YASMIN', 'P', '6', 'BELUM'),
('161710048', 'Abdul Dana Wirnata', 'L', '7', 'BELUM'),
('151610002', 'ALDI NURPADILAH', 'L', '9', 'BELUM'),
('151610031', 'ADE PERMANA', 'L', '10', 'BELUM'),
('151610064', 'ALIYUDIN', 'L', '11', 'BELUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_suara`
--

CREATE TABLE `tab_suara` (
  `nis` char(10) NOT NULL,
  `id_calon` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_calon`
--
ALTER TABLE `tab_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `tab_kelas`
--
ALTER TABLE `tab_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tab_siswa`
--
ALTER TABLE `tab_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tab_suara`
--
ALTER TABLE `tab_suara`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_kelas`
--
ALTER TABLE `tab_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
