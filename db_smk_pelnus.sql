-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 09:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smk_pelnus`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_bekerja` varchar(50) NOT NULL,
  `pesan_kesan` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `tempat_bekerja`, `pesan_kesan`, `foto`) VALUES
(4, 'Ahmad Resa Kurniawan', 'TNI AU', 'Saya Bangga dengan SMK Pelayaran Nusantara, Lulus Langsung Kerja', 'alumni2.jpg'),
(5, 'Nia Rahmawati', 'Angkatan Kepolisan', 'SMK Pelayaran Nusantara Menjadaikan saya seorang yang mampu berjuang dalam Kehidupan', 'alumni1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `gambar`, `deskripsi`) VALUES
(34, 'Kendala Belajar di Masa Covid-19', '2020-12-22', '111.jpg', 'Kendala Belajar di Masa Pandemi Ini Memang Sangatlah Banyak Tidak Hanya di Rasakan Oleh SMK Pelayaran Nusantara Serang Saja atau Sekolah-sekolah yang ada di Kabupaten Serang, Semua Merasakan Dampak dari Covid-19 Terutama Pada Kegiatan KBM, Mulai Dari Susahnya Sinyal, Tidak Adanya Kuota Hingga Tidak Memiliki Perangkat, Memang Ada Pemberian Kuota Belajar dari Pemerintah, Tetapi Tidak ada Pemberian Perangkat Bukan??, Selain dari Sisi Perangkat Kendala Belajar di Masa Pandemi Saat Ini Sulitnya Berkomunikasi dengan Guru Bila Ada Pertanyaan Mengenai Materi yang Kurang di Mengerti, Karna Guru Merespon Banyak Chat dari Semua Murid yang Bertanya Bahkan sampai tidak dapat Membalas Message Anak Tersebut, Karna Terselip lah, Tidak Inilah Tidak Itulah, Banyak Sekali Kendala yang di alami dalam Proses KBM Pada Masa Saat Ini, Sangat Jauh Berbeda ketika Kita Bertatap Muka Langsung Dengan Guru Itu Lebih Terasa Lebih baik di Bandingkan Dengan Proses KBM Saat Ini.'),
(35, 'Virus Corona Tak Membatasi Belajar Taruna/i SMK Pelayaran Nusantara Serang Tahun 2020 1', '2020-12-20', '7.jpg', 'Semangat Belajar Taruna/i SMK Pelayaran Nusantara Serang Sangatlah Membara Walau Keadaan Sedang Pandemi Para Taruna/i SMK Pelayaran Tetap Seamangat Unyuk Berkarya dan Berinovasi'),
(36, 'Model Akmil (Peraga SMK Pelayaran Nusantara Serang) 2020', '2020-12-20', '12.jpg', 'SMK Pelayaran Nusantara Menjadaikan saya seorang yang mampu berjuang dalam Kehidupan'),
(37, 'Antara Corona dan Belajar, SMK Pelayaran Nusantara Kota Serang', '2020-12-21', '32.jpg', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(39, 'Covid-19 dan Masa Depan Pendidikan Taruna/i SMK Pelayaran Serang', '2020-12-22', '15.jpg', 'Covid 19 Versus Masa Depan Pendidikan Taruna/i SMK Pelayaran Nusantara, Ya Pada Masa Pandemi Saat Ini , Memang Proses Pendidikan Mengalami Banyak Kendala dalam Melakukan KBM, Tapi Itu Tak Menjadikan Pendidikan Para Taruna/i di SMK Pelayaran Nusantara Terganggu, Karna dalam Situasi Apapun Pendidikan Tetaplah yang Utama');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `title_1` varchar(128) NOT NULL,
  `title_2` varchar(128) NOT NULL,
  `button` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title_1`, `title_2`, `button`, `image`) VALUES
(1, 'Welcom To', 'SMK PELAYARAN NUSANTARA KOTA SERANG', 'DAFTAR SEKARANG', 'pelnus1.jpg'),
(2, 'MOTO SMK PELAYARAN NUSANTARA', '\" DISIPLIN ADALAH NAFAS DAN DETAK JANTUNGKU \"', 'DAFTAR SEKARANG', 'pelnus3.jpg'),
(3, 'VISI SMK PELAYARAN NUSANTARA KOTA SERANG', '\" Pusat Pengembangan Sumber Daya Manusia yang Berkualitas, disiplin, tangguh dan bermartabat \"', 'START NOW', 'pelnus4.jpg'),
(4, 'MARI BERGABUNG BERSAMA KAMI', '', 'DAFTAR SEKARANG', 'pelnus5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pembina` varchar(50) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama`, `pembina`, `ketua`, `foto`) VALUES
(3, 'Merpati Putih', 'Mustafa Muchtar', 'Mister X', 'merpati.jpg'),
(4, 'Pramuka', 'Mustafa Muchtar', 'Nurul Hotimah', 'pramuka.png'),
(5, 'Paskibra', 'Mustafa Muchtar', 'Nina', 'paskibra.jpg'),
(6, 'Kelautan', 'Mustafa Muchtar', 'Mister X', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `tanggal`, `gambar`) VALUES
(11, 'Kegiatan Kebersamaan pelatihan Berenang', '2020-12-19', '111.jpg'),
(17, 'Kegiatan Kebersamaan pelatihan Berenang', '2020-12-21', '2.jpg'),
(18, 'Kegiatan Kebersamaan pelatihan Berenang', '2020-12-21', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `bidang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `foto`, `bidang`) VALUES
(7, '1', 'Asep Saefudin, S.Pd', '41.jpg', 'Simulasi Digital'),
(8, '2', 'Rika Veronika, S.Pd', '8.jpg', 'Bahasa Indonesia'),
(9, '3', 'Rain Mardiansaf, S.Sos', '9.jpg', 'Produktif'),
(10, '4', 'Hilma Nia, S.Pd', '10.jpg', 'Matematika'),
(11, '5', 'Meidita Nur Azizah, S.Pd', '111.jpg', 'Matematika'),
(12, '6', 'Novi Ningsih, S.Pd', '121.jpg', 'PPKn'),
(13, '7', 'Mustafa Muchtar, S.H', '13.jpg', 'PPKn/Kepsek'),
(14, '8', 'Agus Nurmalasari, S.Pd', '29.jpg', 'PJOK'),
(15, '9', 'Kristina, S.Pdi', '33.jpg', 'Bahasa Inggris/Inggris Maritim'),
(16, '10', 'Siti Nurhayati, S.Pd', '72.jpg', 'Kewirausahaan'),
(17, '11', 'Ira Nurpialawati, S.Pd', '5.jpg', 'Fisika/Kimia'),
(18, '12', 'Dudunhg Abdul Matin', '6.jpg', 'Produktif/Kaprodi');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama_prestasi` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama_prestasi`, `deskripsi`, `tanggal`, `foto`) VALUES
(1, 'Juara Lomba Futsal', 'Lomba Futsal Tingkat Kab.Serang', '2020-12-20', '41.jpg'),
(2, 'Juara Lomba Basket', 'Lomba Basket Antar Provinsi Banten', '2020-12-20', '26.jpg'),
(3, 'Voli', 'Lomba Voli Antar Provinsi', '2020-12-20', '11.jpg'),
(4, 'Permainan Bola Kecil', 'Memenangkan Permainan Bola Kecil 2', '2020-12-22', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `judul`) VALUES
(3, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Mustafa Muchtar', 'nurulhotimah629@gmail.com', '13.jpg', '$2y$10$i5iT4.wLie0Ntl8PB6nQuOqe.cS9klrRqrqIO2unhhcQEYN6EGj2G', 1, 1, 1606364387),
(3, 'Ardila Agesti', 'ardila@gmail.com', 'default.png', '$2y$10$79vpbnK94iDapqlaX3BguOVGjlMhP0unV9r5Ml8fYeKb5hEZW2Dcy', 2, 1, 1606490376);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
