-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Mei 2016 pada 13.36
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `mormo`
--
CREATE DATABASE IF NOT EXISTS `mormo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mormo`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` int(1) NOT NULL,
  `waktu_login` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `status`, `waktu_login`) VALUES
('superadmin', 'mormo123', 1, '2016-05-21 22:44:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id_carousel` varchar(1) NOT NULL,
  `nama_carousel` varchar(100) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_carousel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `nama_carousel`, `wkt_upload`) VALUES
('1', '1 copy.jpg', '2016-04-23 20:08:10'),
('2', '2 copy.jpg', '2016-04-23 20:08:51'),
('3', '3 copy.jpg', '2016-04-23 20:08:57'),
('4', '4 copy.jpg', '2016-04-23 20:09:04'),
('5', '5 copy.jpg', '2016-04-23 20:09:11'),
('6', '6 copy.jpg', '2016-04-23 20:09:19'),
('7', '7 copy.jpg', '2016-04-23 20:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelready_detail`
--

CREATE TABLE IF NOT EXISTS `gelready_detail` (
  `id_detail` int(4) NOT NULL AUTO_INCREMENT,
  `nama_detail` varchar(100) NOT NULL,
  `id_gelready` int(4) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_detail`),
  UNIQUE KEY `nama_detail` (`nama_detail`),
  KEY `id_gelready` (`id_gelready`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gel_kompak`
--

CREATE TABLE IF NOT EXISTS `gel_kompak` (
  `id_gelkompak` int(4) NOT NULL AUTO_INCREMENT,
  `nama_gelkompak` varchar(100) NOT NULL,
  `desk_gelkompak` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gelkompak`),
  UNIQUE KEY `nama_gelkompak` (`nama_gelkompak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `gel_kompak`
--

INSERT INTO `gel_kompak` (`id_gelkompak`, `nama_gelkompak`, `desk_gelkompak`) VALUES
(1, 'GELANG KARET KOMPAK ACCOUNTING ANDALAS UNIVERSITY.jpg', 'Gelang karet kompak jurusan Akuntansi UNAND'),
(6, 'GELANG KARET KOMPAK AGRICULTURE BRIDGE CLUB.jpg', 'Gelang karet kompak Agriculture Bridge Club'),
(7, 'GELANG KARET KOMPAK AIESEC.jpg', 'Gelang karet kompak AIESEC'),
(8, 'GELANG KARET KOMPAK BALIVIDGRAM.jpg', 'Gelang karet kompak BaliVidgram'),
(9, 'GELANG KARET KOMPAK BKTVIDGRAM.jpg', 'Gelang karet kompak BukittinggiVidgram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gel_readystock`
--

CREATE TABLE IF NOT EXISTS `gel_readystock` (
  `id_gelready` int(4) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(100) NOT NULL,
  `nama_gelready` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_gelready`),
  UNIQUE KEY `nama_foto` (`nama_foto`,`nama_gelready`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `gel_readystock`
--

INSERT INTO `gel_readystock` (`id_gelready`, `nama_foto`, `nama_gelready`, `kategori`, `harga`, `wkt_upload`) VALUES
(2, '1.1.jpg', 'Star Wars', 'Film', 99999, '2016-04-24 20:20:13'),
(3, '2.1.jpg', 'Mormo (Red)', 'Mormo', 99999, '2016-04-24 20:21:37'),
(4, '3.1.jpg', 'Mormo (Blue)', 'Mormo', 9999, '2016-04-24 20:22:09'),
(5, '4.1.jpg', 'Mormo (Black)', 'Mormo', 99999, '2016-04-24 20:23:56'),
(6, '5.1.jpg', 'My Trip My Adventure', 'Mormo', 99999, '2016-04-24 20:24:36'),
(7, '6.1.jpg', 'Rang Minang', 'Mormo', 99999, '2016-04-24 20:24:57'),
(8, '7.1.jpg', 'One Piece', 'Mormo', 99999, '2016-04-24 20:26:10'),
(9, '8.1.jpg', 'UNAND (Yellow)', 'Mormo', 99999, '2016-04-24 20:26:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumbotron`
--

CREATE TABLE IF NOT EXISTS `jumbotron` (
  `id_jumbotron` int(1) NOT NULL,
  `nama_jumbotron` varchar(100) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_jumbotron`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumbotron`
--

INSERT INTO `jumbotron` (`id_jumbotron`, `nama_jumbotron`, `wkt_upload`) VALUES
(1, 'PRODUCT.jpg', '2016-04-23 21:08:52'),
(2, 'PROJECT.jpg', '2016-04-23 21:09:16'),
(3, 'ABOUT US.jpg', '2016-04-23 21:09:32'),
(4, 'HOW TO ORDER.jpg', '2016-04-23 21:09:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navhome`
--

CREATE TABLE IF NOT EXISTS `navhome` (
  `id_navhome` varchar(1) NOT NULL,
  `nama_navhome` varchar(100) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_navhome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `navhome`
--

INSERT INTO `navhome` (`id_navhome`, `nama_navhome`, `wkt_upload`) VALUES
('1', 'gelang karet kompak.jpg', '2016-05-21 23:35:09'),
('2', 'gelang ready stock.jpg', '2016-05-21 23:35:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi_gambar`
--

CREATE TABLE IF NOT EXISTS `opsi_gambar` (
  `id_opsi` varchar(1) NOT NULL,
  `nama_opsi` varchar(100) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_opsi`),
  UNIQUE KEY `nama_opsi` (`nama_opsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teks`
--

CREATE TABLE IF NOT EXISTS `teks` (
  `id_tulisan` varchar(1) NOT NULL,
  `desk_tulisan` varchar(2000) NOT NULL,
  `wkt_upload` datetime NOT NULL,
  PRIMARY KEY (`id_tulisan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teks`
--

INSERT INTO `teks` (`id_tulisan`, `desk_tulisan`, `wkt_upload`) VALUES
('1', 'Mormo Worldwide didirikan pada Oktober 2015 oleh Teguh Setiawan a.k.a Teguh Mormo. nama "Mormo" di ambil dari nama salah satu monster dalam cerita yunani kuno, penambahan "worldwide" bermakna dorongan untuk menjadi brand yang mendunia meluaskan pengaruh menjadi bagian dari masyarakat urban modern.<br/>Mormo adalah salah satu brand di kota Padang, Sumatera Barat, Indonesia. Berfokuskan pada memproduksi gelang karet (bracelet) sebagai sesuatu yang kecil, pelengkap kehidupan sehari masyarakat urban modern, gelang karet mempresentasikan kehidupan masyarakat urban yang dinamis, propaganda, dan menyampaikan pesan tertentu.<br/>Dalam mengeluarkan produk gelang, Mormo menyesuaikan dengan perkembangan zaman berdasarkan hobi, film terbaru dan juga trend yang sedang hangat diperbincangkan.<br>Di samping itu Mormo juga melayani produksi gelang karet kompak dengan minimal order 30pcs untuk keperluan kelas, angkatan, komunitas dan event.<br/>Di kota Padang, Mormo adalah salah satu brand yang berpengaruh dengan konsistensi memproduksi gelang karet. Mormo berkolaborasi dengan event dan komunitas lokal untuk mendukung perkembangan anak muda di kota Padang.', '2016-04-24 21:22:24'),
('2', 'Terlihat kompak dengan satu kelas, sekolah, komunitas ataupun event adalah sesuatu yang keren bukan? gelang karet kompak adalah salah satu cara yang bisa kamu pilih, kamu tidak perlu melubangi kantong mu terlalu dalam dikarenakan harga yang tidak terlalu mahal, disamping itu gelang karet akan menambah kesan keren sebagai pelengkap gaya kamu!', '2016-04-24 21:23:19'),
('3', 'Memiliki sebuah gelang karet adalah pilihan yang tepat untuk melengkapi dan menemani kegiatan sehari-hari mu, nah inilah katalog gelang karet yang kamu bisa beli satuan.', '2016-04-24 21:23:57'),
('4', '1. Choose<br>tentukan design, warna, ukuran dan jumlah gelang karet kompak yang kamu mau, kamu bisa membuat design gelang di corel draw atau photoshop.<br><br>2. Hubungi Kontak<br>silahkan hubungi kontak yang tersedia, jelaskan keinginan kamu, jika kamu sudah punya design corel draw atau photoshop bisa langsung di kirim kan ke email <b>mormoworldwide@gmail.com</b>. jika belum, kamu bisa menggambarkan di kertas bagaimana design yang kamu inginkan, lalu CS kami akan membantu mendesign kan di Corel draw.<br><br>3. First Payment<br>setelah orderan kamu fix, kamu diwajibkan untuk membayar DP minimal 50% dari total orderan kamu sebagai syarat orderan untuk di proses. pembayaran DP bisa melalui transfer bank dan untuk yang berada di kota Padang bisa melalui COD (ketemuan)<br><br>4. Process<br>setelah pembayaran kamu di konfirmasi, kami akan memproses orderan kamu selama 14 hari kerja, waktu bisa lebih lama tergantung antrian orderan.<br><br>5. Second Payment<br>Setelah orderan kamu selesai, kami akan memberitahukan dan mewajibkan pelunasaan saat barang akan dikirim ke alamatmu.', '2016-04-24 21:28:56'),
('5', 'q', '0000-00-00 00:00:00');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gelready_detail`
--
ALTER TABLE `gelready_detail`
  ADD CONSTRAINT `gelready_detail_ibfk_1` FOREIGN KEY (`id_gelready`) REFERENCES `gel_readystock` (`id_gelready`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
