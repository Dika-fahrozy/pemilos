-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Nov 2017 pada 04.11
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
(9, 'XII. Teknik Komputer Jaringan'),
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
('151610002', 'ALDI NURPADILAH', 'L', 9, 'BELUM'),
('171810016', 'Fery Kurniawan Saputra', 'L', 1, 'BELUM'),
('151610004', 'DAFFA ABDILAH YANUAR', 'L', 9, 'BELUM'),
('151610031', 'ADE PERMANA', 'L', 10, 'BELUM'),
('151610006', 'EKA', 'L', 9, 'BELUM'),
('151610007', 'EUIS ANDIANI', 'P', 9, 'BELUM'),
('151610008', 'FEBY YULYANTI', 'P', 9, 'BELUM'),
('151610009', 'GITA PUJI PRAMESTI', 'P', 9, 'BELUM'),
('151610010', 'HENDRA DHARMAWAN', 'L', 9, 'BELUM'),
('151610011', 'KHARIS DWI NUGROHO', 'L', 9, 'BELUM'),
('151610012', 'LUAY MAULANA', 'L', 9, 'BELUM'),
('151610013', 'MUHAMAD ABDUL GOPAR S', 'L', 9, 'BELUM'),
('151610014', 'M. MUKHLIS', 'L', 9, 'BELUM'),
('151610015', 'MARHAN FAUJI', 'L', 9, 'BELUM'),
('151610016', 'MUHAMMAD RIZKI ADE PANJI', 'L', 9, 'BELUM'),
('151610017', 'MUHAMAD FAISAL', 'L', 9, 'BELUM'),
('151610018', 'MUHAMAD FIQRI SUSANTO', 'L', 9, 'BELUM'),
('151610019', 'MUHAMMAD ARDIYANTO EKO SA', 'L', 9, 'BELUM'),
('151610021', 'MUHAMMAD NEGARTI', 'L', 9, 'BELUM'),
('151610022', 'NAUFAL HANDI WIJAYA', 'L', 9, 'BELUM'),
('151610023', 'NURSA FITRIAH', 'P', 9, 'BELUM'),
('151610024', 'PAHMUROJI', 'L', 9, 'BELUM'),
('151610025', 'PANI BARIKLANA', 'L', 9, 'BELUM'),
('151610026', 'SALSABILA', 'P', 9, 'BELUM'),
('151610027', 'SEPTA LESMANA', 'L', 9, 'BELUM'),
('151610028', 'SITI NURFITRI', 'P', 9, 'BELUM'),
('151610029', 'WESIL KURNI', 'L', 9, 'BELUM'),
('151610030', 'YAKUB ', 'L', 9, 'BELUM'),
('151610032', 'ADITIA AWANDA', 'P', 10, 'BELUM'),
('151610033', 'CHOIRUNNISSA', 'P', 10, 'BELUM'),
('151610034', 'CINDY NANDARIE', 'P', 10, 'BELUM'),
('151610035', 'DIAN APGIANTI', 'L', 10, 'BELUM'),
('151610036', 'DIKA FAHROZY', 'L', 10, 'BELUM'),
('151610037', 'DIMAS ADIETTYA IRAWAN', 'L', 10, 'BELUM'),
('151610038', 'DIMAS PRAYOGA', 'L', 10, 'BELUM'),
('151610039', 'FARHAN MUZAKY', 'L', 10, 'BELUM'),
('151610040', 'FELIX FERNANDO', 'L', 10, 'BELUM'),
('151610041', 'FITRI LESTARI', 'P', 10, 'BELUM'),
('151610042', 'IRMA ANGGRAENI', 'P', 10, 'BELUM'),
('151610043', 'IRMAWATI DEWI', 'P', 10, 'BELUM'),
('151610044', 'ISMAIL ALAMSYAH', 'L', 10, 'BELUM'),
('151610045', 'ISNANIA', 'P', 10, 'BELUM'),
('151610046', 'MARIA GABY LUSIA', 'P', 10, 'BELUM'),
('171810001', 'Ades Rohmandani', 'L', 1, 'BELUM'),
('151610048', 'MELLYNIA RIMA INSANI', 'P', 10, 'BELUM'),
('151610049', 'MUHAMAD ABDUL PATAH', 'L', 10, 'BELUM'),
('151610050', 'MUHAMMAD FAIZ', 'L', 10, 'BELUM'),
('151610051', 'MUHAMAD HARRY IMAMWAN', 'L', 10, 'BELUM'),
('151610052', 'RANU PIRMANSYAH', 'L', 10, 'BELUM'),
('151610053', 'RAZIP AHMAD N', 'L', 10, 'BELUM'),
('151610054', 'RIKA FEBRIANI', 'P', 10, 'BELUM'),
('151610055', 'RIKA RAHMAN', 'P', 10, 'BELUM'),
('151610056', 'SATRIO SEMBODO', 'L', 10, 'BELUM'),
('151610057', 'SHELA AJENG MELANIA', 'P', 10, 'BELUM'),
('151610058', 'SHITNY RATNA AMELIA', 'P', 10, 'BELUM'),
('151610059', 'SILVIA WADININGSIH', 'P', 10, 'BELUM'),
('151610060', 'SRI RAHMAWATI', 'P', 10, 'BELUM'),
('151610061', 'VIRA NADIA MAULINA', 'P', 10, 'BELUM'),
('151610062', 'YANDIKA ANANDA PRATAMA', 'L', 10, 'BELUM'),
('151610064', 'ALIYUDIN', 'L', 11, 'BELUM'),
('151610065', 'AMANDANUR INSAN JAMIL', 'L', 11, 'BELUM'),
('171810008', 'Allviyan Bomas Ilham', 'L', 0, 'BELUM'),
('151610067', 'ANDRE ADITYA', 'L', 11, 'BELUM'),
('151610068', 'CARAKA JIANG', 'L', 11, 'BELUM'),
('151610069', 'DEDE LIA MUFLIKAH', 'P', 11, 'BELUM'),
('171810007', 'Algi Radiatullah', 'P', 1, 'BELUM'),
('151610071', 'FAJAR RACHMADINATA', 'L', 11, 'BELUM'),
('151610072', 'FATHURRAHMAN ALHADI', 'L', 11, 'BELUM'),
('151610074', 'FITRILIA RAMDHANI', 'P', 11, 'BELUM'),
('151610075', 'ISNIANI LUTFIA', 'P', 11, 'BELUM'),
('151610076', 'JIHAN FADILAH', 'P', 11, 'BELUM'),
('151610077', 'KUKUH ROIHAN', 'L', 11, 'BELUM'),
('151610079', 'MIA PUJIATI', 'P', 11, 'BELUM'),
('151610080', 'MITA ARYA SARI', 'P', 11, 'BELUM'),
('151610082', 'MUHAMAT REZA ALHAFIZ', 'L', 11, 'BELUM'),
('151610083', 'MUHAMMAD RAMAHADI SUTOMO', 'L', 11, 'BELUM'),
('151610078', 'MUHAMMAD RIZKI ALDINAN', 'L', 11, 'BELUM'),
('171810006', 'Alfi Salam Nugraha', '', 0, 'BELUM'),
('151610085', 'NIDA SOLIHAT', 'P', 11, 'BELUM'),
('151610086', 'NOVI MARYANAH', 'P', 11, 'BELUM'),
('151610087', 'NURUL ANTIKA ALFIQRI', 'P', 11, 'BELUM'),
('151610088', 'PITRI NURHIDAYAH', 'P', 11, 'BELUM'),
('151610089', 'PUJI LESTARI', 'P', 11, 'BELUM'),
('151610090', 'PUTRI INDAH ASRI', 'P', 11, 'BELUM'),
('151610091', 'RAISNA AMELIA', 'P', 11, 'BELUM'),
('151610092', 'REKA NOVITA', 'P', 11, 'BELUM'),
('151610093', 'REZA SAFITRA HARLINA', 'L', 11, 'BELUM'),
('151610094', 'RIFKA ANNISA', 'P', 11, 'BELUM'),
('151610095', 'RIZKI WAHYU PRATAMA', 'L', 11, 'BELUM'),
('171810005', 'Ahmad Fahruziansyah', 'L', 0, 'BELUM'),
('171810004', 'Agung Supriatna', 'L', 1, 'BELUM'),
('151610098', 'STEVIA AZKA OKTA FAHYUMI', 'P', 11, 'BELUM'),
('171810003', 'Agis Mugia Rizki', '', 0, 'BELUM'),
('151610073', 'VIFI NURAFIAH', 'P', 11, 'BELUM'),
('171810119', 'Iqbal Amarullah', 'L', 0, 'BELUM'),
('171810118', 'Susi', 'P', 0, 'BELUM'),
('171810117', 'Sri Mutiara', 'P', 0, 'BELUM'),
('171810116', 'Siti Sarah', 'P', 0, 'BELUM'),
('171810115', 'Siti Nurohmawati', 'P', 0, 'BELUM'),
('171810114', 'Siti Nurmala', 'P', 0, 'BELUM'),
('171810113', 'Siti Arafah Ajahra', 'P', 0, 'BELUM'),
('171810112', 'Siti Aminah', 'P', 0, 'BELUM'),
('171810111', 'Satria Arif Achyadi', 'L', 0, 'BELUM'),
('171810110', 'Sarah Adetia', 'P', 0, 'BELUM'),
('171810109', 'Ryan Winata', 'L', 0, 'BELUM'),
('171810107', 'Rizwan Nur Ramadhan', 'L', 0, 'BELUM'),
('171810106', 'Rivaudin', 'L', 0, 'BELUM'),
('171810105', 'Risa Handayani', 'P', 0, 'BELUM'),
('171810104', 'Putri Rofina Waturu', 'P', 0, 'BELUM'),
('171810103', 'Putri Intan Nuraini', 'P', 0, 'BELUM'),
('171810102', 'Putri', 'P', 0, 'BELUM'),
('171810101', 'Nurmawati', 'P', 0, 'BELUM'),
('171810100', 'Nurma Sukmawati', 'P', 0, 'BELUM'),
('171810099', 'Nandira Izma', 'P', 0, 'BELUM'),
('171810098', 'Muhammad Farhan', 'L', 0, 'BELUM'),
('171810097', 'Mohammad Ramdhani', 'L', 0, 'BELUM'),
('171810096', 'Nur Giansyah', 'P', 0, 'BELUM'),
('171810095', 'Mohamad Rahmat Fauzi', 'L', 3, 'BELUM'),
('171810094', 'Mochammad Nasrul Nugraha', 'L', 3, 'BELUM'),
('171810093', 'Mila', 'P', 3, 'BELUM'),
('171810091', 'Muhamad Al Idrus', 'L', 3, 'BELUM'),
('171810090', 'Laras Dwi Syahputri', 'P', 3, 'BELUM'),
('171810089', 'Ilham Teguh Prasetya', 'L', 3, 'BELUM'),
('171810088', 'Ilham Romadan', 'L', 3, 'BELUM'),
('171810087', 'Ikhsan Maulana', 'L', 3, 'BELUM'),
('171810086', 'Heriyana Muhazir', '', 3, 'BELUM'),
('171810085', 'Herawati', 'P', 3, 'BELUM'),
('171810084', 'Gusti Ngurah Agung Kencana', 'L', 3, 'BELUM'),
('171810083', 'Firdha Aulia Putri', 'P', 3, 'BELUM'),
('171810082', 'Ferdi Nando Petrus Sakka', 'L', 3, 'BELUM'),
('171810081', 'Eplin Deskayanti', 'P', 3, 'BELUM'),
('171810080', 'Dede Indra', 'P', 3, 'BELUM'),
('171810079', 'Bunga Tanjung Sari', 'P', 3, 'BELUM'),
('171810078', 'Ari Hidayat', 'L', 3, 'BELUM'),
('171810077', 'Ardhea Syarofah', 'P', 3, 'BELUM'),
('171810076', 'Anisa Neng', 'P', 3, 'BELUM'),
('171810075', 'Ahmad Marhaban', 'L', 3, 'BELUM'),
('171810074', 'Adela Nadindra', 'P', 3, 'BELUM'),
('171810073', 'Abdul Aziz', 'L', 3, 'BELUM'),
('171810072', 'Aa Andri', 'L', 3, 'BELUM'),
('171810071', 'Yunika Supriyanti', 'P', 3, 'BELUM'),
('171810070', 'Winda Agustin', 'P', 0, 'BELUM'),
('171810069', 'Wardah Hanifah', 'P', 3, 'BELUM'),
('171810068', 'Tiara Putri Dewi', 'P', 0, 'BELUM'),
('171810067', 'Tarisa', 'P', 3, 'BELUM'),
('171810066', 'Susi Ayuni', 'P', 3, 'BELUM'),
('171810065', 'Sri Wulantami', 'P', 2, 'BELUM'),
('171810064', 'Shinta Pramudita', 'P', 2, 'BELUM'),
('171810063', 'Shela Alfrida', 'P', 2, 'BELUM'),
('171810062', 'Sahrial Hakiki', 'L', 2, 'BELUM'),
('171810061', 'Ryan Azhari', 'L', 2, 'BELUM'),
('171810060', 'Riska Hermawati', 'P', 2, 'BELUM'),
('171810059', 'Risa Dulyana', 'P', 2, 'BELUM'),
('171810058', 'Rifdah Nafillah', 'P', 2, 'BELUM'),
('171810057', 'Resty Yunita', 'P', 2, 'BELUM'),
('171810056', 'Ramanda Maulana', 'L', 2, 'BELUM'),
('171810055', 'Rahmy Roswina', 'P', 2, 'BELUM'),
('171810054', 'Muhammad Vickri Fadilah', 'L', 2, 'BELUM'),
('171810053', 'Muhammad Rafli Aryansyah', 'L', 2, 'BELUM'),
('171810052', 'Muhammad Adi Siswanto', 'L', 2, 'BELUM'),
('171810051', 'Mohamad Rifkiyani', 'L', 2, 'BELUM'),
('171810050', 'Mita Maliha', 'P', 2, 'BELUM'),
('171810049', 'Mahesa', 'L', 2, 'BELUM'),
('171810048', 'Linda', 'P', 2, 'BELUM'),
('171810047', 'Intan Nurtika', 'P', 2, 'BELUM'),
('171810046', 'Fajjar Rezky Pratama', 'L', 2, 'BELUM'),
('171810045', 'Desy Devina Hermawati', 'P', 2, 'BELUM'),
('171810044', 'Deni Febrian', 'L', 2, 'BELUM'),
('171810043', 'Chikal Asri Duta Sapardan', 'P', 2, 'BELUM'),
('171810042', 'Aprilia Herawati', 'P', 2, 'BELUM'),
('171810041', 'Aprilana Rif Hidayat', 'L', 0, 'BELUM'),
('171810040', 'Anis Setiawati', 'P', 2, 'BELUM'),
('171810039', 'Ahmad sholikhin', 'L', 2, 'BELUM'),
('171810038', 'Ahmad Fauzan Adzima', 'L', 1, 'BELUM'),
('171810037', 'Abu Bakar', 'L', 2, 'BELUM'),
('171810036', 'Abdul Goni Murod', 'L', 2, 'BELUM'),
('171810035', 'Shinta Fatimatusahra', 'P', 1, 'BELUM'),
('171810034', 'Rusmini', 'P', 1, 'BELUM'),
('171810033', 'Rizky Agung Karunia', 'L', 1, 'BELUM'),
('171810032', 'Ridwan Rinaldi', 'L', 1, 'BELUM'),
('171810031', 'Rezna Rahma Dianti', 'P', 1, 'BELUM'),
('171810030', 'Reza Saputra', 'L', 1, 'BELUM'),
('171810029', 'Reza Adinda Marpaung', 'L', 0, 'BELUM'),
('171810028', 'Reynaldy Nurdiansyah', 'L', 1, 'BELUM'),
('171810027', 'Pranawisesa Respati Diwas', 'P', 1, 'BELUM'),
('171810026', 'Pahruroji', 'L', 1, 'BELUM'),
('171810025', 'Muhammad Iqbal Naufal', 'L', 1, 'BELUM'),
('171810024', 'Muhamad Bakir', 'L', 1, 'BELUM'),
('171810023', 'Muhamad Arifin', 'L', 1, 'BELUM'),
('171810022', 'Misbahur Rizal', 'L', 1, 'BELUM'),
('171810021', 'Ina Noviana', 'P', 1, 'BELUM'),
('171810020', 'Glory Suryanto Mangalik', 'L', 1, 'BELUM'),
('171810019', 'Gina Sofia Maharani', 'P', 1, 'BELUM'),
('171810018', 'Firman Ardiansyah', 'L', 1, 'BELUM'),
('9994423612', 'Dede Rumyati', 'P', 12, 'BELUM'),
('9992027889', 'Denia Oktaviani Saian', 'P', 12, 'BELUM'),
('9993456221', 'Devi Rahmawati', 'P', 12, 'BELUM'),
('0002499393', 'Dina Rachmania', 'P', 12, 'BELUM'),
('0010230812', 'Eka Dian Wulandari', 'P', 12, 'BELUM'),
('9994231480', 'Fitri', 'P', 12, 'BELUM'),
('9993535693', 'Fitriana Sari', 'P', 12, 'BELUM'),
('0011004068', 'Marisa Nurul Parida', 'P', 12, 'BELUM'),
('9993485356', 'Mega Bintang', 'P', 12, 'BELUM'),
('0002472461', 'Merlin', 'P', 12, 'BELUM'),
('0010231022', 'Nenden Nabilatul Aulia', 'P', 12, 'BELUM'),
('0001663009', 'Putri Retno Susanti', 'P', 12, 'BELUM'),
('0002432108', 'Risa Rizkia Agustin', 'P', 12, 'BELUM'),
('171810002', 'Adi Rohana', 'L', 1, 'BELUM'),
('0002599243', 'Siti Nabila Aulia Zulfa', 'P', 12, 'BELUM'),
('0002599124', 'Tidora Aritonang', 'P', 12, 'BELUM'),
('0002597233', 'Vhannesa Nur Rahma', 'P', 12, 'BELUM'),
('9993711414', 'Wahyu Hidayat', 'L', 12, 'BELUM'),
('171810015', 'Fajar Ali Akbar', 'L', 1, 'BELUM'),
('171810014', 'Erdi Sunardi', 'L', 1, 'BELUM'),
('171810013', 'Elsa Lesmana', 'P', 1, 'BELUM'),
('171810012', 'Eka Aulia Al-faridzie', 'P', 1, 'BELUM'),
('171810011', 'Christyan Batista Subdino', 'L', 0, 'BELUM'),
('171810010', 'Bogas Ardiansyah', 'L', 1, 'BELUM'),
('171810017', 'Fikri Haikal', 'L', 1, 'BELUM'),
('171810009', 'Apryan Rivaldo', 'L', 1, 'BELUM'),
('161710048', 'Abdul Dana Wirnata', 'L', 7, 'BELUM'),
('161710049', 'Abdul Wahab', 'L', 7, 'BELUM'),
('161710050', 'Ahmad Prayoga Khoiri Miftah', 'L', 7, 'BELUM'),
('161710051', 'Aris Sugiarto', 'L', 7, 'BELUM'),
('161710052', 'Bella Noviani', 'P', 7, 'BELUM'),
('161710053', 'Ede', 'P', 7, 'BELUM'),
('161710054', 'Erna Lidia', 'P', 7, 'BELUM'),
('161710055', 'Fahran Anggara Harahap', 'L', 7, 'BELUM'),
('161710056', 'Firlia', 'P', 7, 'BELUM'),
('161710057', 'Irna Ilmiyanah', 'P', 7, 'BELUM'),
('161710058', 'Lulu Rahayu', 'P', 7, 'BELUM'),
('161710059', 'Lustia', 'P', 7, 'BELUM'),
('161710060', 'Maya Sari', 'P', 7, 'BELUM'),
('161710061', 'Muhammad Jahidin', 'L', 7, 'BELUM'),
('161710062', 'Nilam Cahya', 'P', 7, 'BELUM'),
('161710063', 'Noval', 'L', 7, 'BELUM'),
('161710064', 'Revani Chrisman', 'P', 7, 'BELUM'),
('161710065', 'Rinalsyah Nurfarid', 'L', 7, 'BELUM'),
('161710066', 'Suhela', 'P', 7, 'BELUM'),
('161710067', 'Tanti Hijriyanti', 'P', 7, 'BELUM'),
('161710068', 'Suhela', 'P', 7, 'BELUM'),
('161710013', 'Muhamad Faisal Tanjung', 'L', 5, 'BELUM'),
('161710012', 'Muarif', 'L', 5, 'BELUM'),
('161710011', 'Miftahudin', 'L', 5, 'BELUM'),
('161710006', 'Erik Setiadi', 'L', 5, 'BELUM'),
('161710007', 'Farhan Sukanto', 'L', 5, 'BELUM'),
('161710001', 'Andis', 'L', 5, 'BELUM'),
('161710010', 'Iman Mustakim', 'L', 5, 'BELUM'),
('161710009', 'Hendri Ariles Prasetiyo', 'L', 5, 'BELUM'),
('161710008', 'Ferdiansyah', 'L', 5, 'BELUM'),
('161710003', 'Andriyani', 'L', 5, 'BELUM'),
('161710004', 'Cepi', 'L', 5, 'BELUM'),
('161710005', 'Elang Kurnia Dewa', 'L', 5, 'BELUM'),
('161710002', 'Andri Ardiansyah', 'L', 5, 'BELUM'),
('161710014', 'Muhamad Padilah', 'L', 5, 'BELUM'),
('161710015', 'Muhammad Fahri', 'L', 5, 'BELUM'),
('161710016', 'Nita Oktaviani', 'P', 5, 'BELUM'),
('161710017', 'Nur Ikhsan', 'L', 5, 'BELUM'),
('161710018', 'Padilah', 'L', 5, 'BELUM'),
('161710019', 'Pajri Ramdani', 'L', 5, 'BELUM'),
('161710020', 'Rifai', 'L', 5, 'BELUM'),
('161710021', 'Septian Adi Pramono', 'L', 5, 'BELUM'),
('161710022', 'Sri Nurhayati', 'P', 5, 'BELUM'),
('161710023', 'Sumiyati', 'P', 5, 'BELUM'),
('161710024', 'Trio Saputra', 'L', 5, 'BELUM'),
('161710025', 'Yoki Pradana', 'L', 5, 'BELUM'),
('161710026', 'AFIFAH YASMIN', 'P', 6, 'BELUM'),
('161710027', 'ACHMAD NURFIKRI', 'L', 6, 'BELUM'),
('161710028', 'ALDO FAHREZI ZAKARIA', 'L', 6, 'BELUM'),
('161710030', 'ANISAH', 'P', 6, 'BELUM'),
('161710031', 'BAIHAKI AL BIRUNI', 'L', 6, 'BELUM'),
('161710032', 'DAFFA ERFANDY', 'L', 6, 'BELUM'),
('161710033', 'DENI DWI SETYAWAN', 'L', 6, 'BELUM'),
('161710035', 'EDNAS PRASETIO', 'L', 6, 'BELUM'),
('161710036', 'FAHMI', 'L', 6, 'BELUM'),
('161710037', 'IKE RAHAYU', 'P', 6, 'BELUM'),
('161710039', 'LILI SUSILAWATI', 'P', 6, 'BELUM'),
('161710040', 'LUTHFAN RIZKY RADHYAN', 'L', 6, 'BELUM'),
('161710042', 'MUHAMMAD KHADAFI', 'L', 6, 'BELUM'),
('161710043', 'NURUL ROHMAH', 'P', 6, 'BELUM'),
('161710044', 'PAKHRU RAFLI', 'L', 6, 'BELUM'),
('161710045', 'PARADITA RIZKI SAHPUTRI', 'P', 6, 'BELUM'),
('161710046', 'TEGAR HARTADY', 'L', 6, 'BELUM'),
('161710047', 'TIA NURULITA FITRIANI', 'P', 6, 'BELUM');

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
