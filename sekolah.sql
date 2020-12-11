-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 07.28
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telpon` int(20) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `jenis_kelamin`, `telpon`, `statuss`, `foto`) VALUES
(13, '2627282930', 'Hendra Dikesuma', 'laki-laki', 2147483647, 'aktif', 'a21.jpg'),
(14, '2627282930', 'Hendra Dikesuma', 'wanita', 2147483647, 'aktif', 'a21.jpg'),
(15, '2627282930', 'Agustina Heriyati', 'wanita', 2147483647, 'aktif', 'a21.jpg'),
(16, '2122232425', 'Jhon coyanda', 'laki', 2147483647, 'aktif', 'a21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(35) NOT NULL,
  `tahun_ajaran` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `statuss` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `tahun_ajaran`, `kelas`, `nama_guru`, `statuss`) VALUES
(1, '3', '2011', '3', 'Hendra Dikesuma', 'Aktif'),
(2, '5', '2018', '5', 'Agustina Heriyati', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelassiswa`
--

CREATE TABLE `kelassiswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `statuss` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpelsiswa`
--

CREATE TABLE `matpelsiswa` (
  `id` int(11) NOT NULL,
  `kode_matpel` varchar(40) NOT NULL,
  `nama_matpel` varchar(35) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matpelsiswa`
--

INSERT INTO `matpelsiswa` (`id`, `kode_matpel`, `nama_matpel`, `keterangan`) VALUES
(1, 'PKN-1-PKS', 'PKNN', 'Wajib'),
(2, 'PAI-1-AGA', 'PAI', 'Wajib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `telepon` int(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `jenis_kelamin`, `telepon`, `tanggal_lahir`, `foto`) VALUES
(2, '2018220046', 'Febri Eka Saputra', 'Laki', 2147483647, '11/02/2000', 'febri.jpg'),
(3, '209948586886', 'Cindi Alfiani', 'wanita', 2147483647, '16/05/1999', 'cindi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelassiswa`
--
ALTER TABLE `kelassiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matpelsiswa`
--
ALTER TABLE `matpelsiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelassiswa`
--
ALTER TABLE `kelassiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matpelsiswa`
--
ALTER TABLE `matpelsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
