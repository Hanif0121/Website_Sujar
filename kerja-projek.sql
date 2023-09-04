-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2022 pada 11.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerja-projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tanggal-Lahir` varchar(20) NOT NULL,
  `Jenis-Kelamin` varchar(20) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Nama`, `Tanggal-Lahir`, `Jenis-Kelamin`, `Email`, `Username`, `Password`, `Image`) VALUES
(15, 'Hidan', '2022-12-08', 'Laki-Laki', 'hidan@gmail.com', 'hidan', '827ccb0eea8a706c4c34a16891f84e7b', '6399324857af0.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_nama` varchar(255) NOT NULL,
  `isi_video` varchar(225) NOT NULL,
  `kuis_video` varchar(100) NOT NULL,
  `video_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`video_id`, `video_nama`, `isi_video`, `kuis_video`, `video_category`) VALUES
(1, 'Luas Alam Semesta', 'Ujung Alam Semesta.mp4', 'kuis1.php', 'Objek'),
(2, 'Dunia Paralel', 'Dunia paraler.mp4', 'kuis2.php', 'Objek'),
(3, 'Menguasai Galaksi', 'Penguasa galaxsi.mp4', 'kuis3.php', 'Objek'),
(4, 'Terdingin di Alam Semesta', 'Titik dingin Alam Semesta.mp4', 'kuis4.php', 'Objek'),
(5, 'Gelap nya luar angkasa', 'Gelap Luar Angkasa.mp4', 'kuis5.php', 'Objek'),
(6, 'Besarnya Bintang', 'Besarnya  bintang.mp4', 'kuis6.php', 'Bintang'),
(7, 'Black Hole', 'Black Hole.mp4', 'kuis7.php', 'Objek'),
(8, 'Bumi dua Bulan', 'Bumi dua Bulan.mp4', 'kuis8.php', 'Planet'),
(9, 'Mengukur Luar Angkasa', 'Ngukur Alam Semesta.mp4', 'kuis9.php', 'Objek');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
