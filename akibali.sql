-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Des 2019 pada 09.01
-- Versi server: 5.6.45
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akibali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `gambar`) VALUES
(2, 'Woke', '/asset/img/Woke.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merek`
--

INSERT INTO `merek` (`id_merek`, `nama`) VALUES
(12, 'Yuasa'),
(17, 'GS Astra'),
(22, 'Incoe'),
(23, 'G-Force'),
(24, 'NS'),
(25, 'VS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `harga` int(11) NOT NULL,
  `merk` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `keterangan`, `gambar`, `harga`, `merk`, `tgl`) VALUES
(13, 'Aki Sepeda Motor GS', '<p>Tersedia</p>', '/asset/img/pTersediap.jpg', 0, 17, '2019-12-20 08:54:30'),
(14, 'Aki Mobil Kering GS ', '<p>Tersedia</p>', '/asset/img/pTersediap1.jpg', 0, 17, '2019-12-20 08:55:30'),
(15, 'Aki Mobil Basah GS', '<p>Tersedia</p>', '/asset/img/pTersediap2.jpg', 0, 17, '2019-12-20 08:56:15'),
(16, 'Aki Sepeda Motor Kering Yuasa ', '<p>Tersedia</p>', '/asset/img/pTersediap3.jpg', 0, 12, '2019-12-20 09:02:34'),
(17, 'Aki Sepeda Motor Basah Yuasa', '<p>Tersedia</p>', '/asset/img/pTersediap4.jpg', 0, 12, '2019-12-20 09:04:09'),
(18, 'Aki Mobil  Yuasa Basah ', '<p>Tersedia</p>', '/asset/img/pTersediap5.jpg', 0, 12, '2019-12-20 09:06:06'),
(19, 'Aki Mobil Yuasa Kering', '<p>Tersedia</p>', '/asset/img/pTersediap6.jpg', 0, 12, '2019-12-20 09:07:14'),
(20, 'Aki Mobil Incoe Kering', '<p>Tersedia</p>', '/asset/img/pTersediap7.jpg', 0, 22, '2019-12-20 09:36:28'),
(21, 'Aki Mobil Incoe Basah ', '<p>Tersedia</p>', '/asset/img/pTersediap8.jpg', 0, 22, '2019-12-20 09:37:34'),
(22, 'Aki Mobil GS Astra Kering', '<p>Tersedia</p>', '/asset/img/pTersediap9.jpg', 0, 17, '2019-12-20 09:43:23'),
(23, 'Aki Mobil GS Astra Basah', '<p>Tersedia</p>', '/asset/img/pTersediap10.jpg', 0, 17, '2019-12-20 09:45:13'),
(24, 'Aki Sepeda Motor GS Astra Kering', '<p>Tersedia</p>', '/asset/img/pTersediap11.jpg', 0, 17, '2019-12-20 09:48:25'),
(25, 'Aki Mobil G-Force Basah', '<p>Tersedia</p>', '/asset/img/pTersediap12.jpg', 0, 23, '2019-12-20 09:57:04'),
(26, 'Aki Mobil G-Force Kering', '<p>Tersedia</p>', '/asset/img/pTersediap13.jpg', 0, 23, '2019-12-20 09:58:26'),
(27, 'Aki Sepeda Motor G-Force Kering', '<p>Tersedia</p>', '/asset/img/pTersediap14.jpg', 0, 23, '2019-12-20 10:00:05'),
(29, 'Aki Sepeda Motor NS Basah', '<p>Tersedia</p>', '/asset/img/pTersediap15.jpg', 0, 24, '2019-12-20 10:13:15'),
(30, 'Aki Mobil NS Basah', '<p>Tersedia</p>', '/asset/img/pTersediap16.jpg', 0, 24, '2019-12-20 10:13:55'),
(31, 'Aki Sepeda Motor NS Kering', '<p>Tersedia</p>', '/asset/img/pTersediap17.jpg', 0, 24, '2019-12-20 10:16:58'),
(32, 'Aki Mobil NS Kering', '<p>Tersedia</p>', '/asset/img/pTersediap18.jpg', 0, 24, '2019-12-20 10:19:37'),
(33, 'Aki Sepeda Motor VS Kering', '<p>Tersedia</p>', '/asset/img/pTersediap19.jpg', 0, 25, '2019-12-20 10:23:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`) VALUES
(1, 'akibali', 'd708dabe42a13a90772198a2344e704c', 'Aki Bali', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
