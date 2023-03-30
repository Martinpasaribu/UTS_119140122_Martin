-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 06:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_map4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(8) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_tiket` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `alamat`, `deskripsi`, `harga_tiket`, `latitude`, `longitude`) VALUES
(53, 'Heritage Path of the 1883 Eruption of Krakatoa - Monumen Krakatau', 'JL. WR. Supratman, Kangkung, 35224 Bandar Lampung, Indonesia, Talang, Telukbetung Selatan, Bandar Lampung City, Lampung 35224', 'Bangunan utama Monumen Krakatau merupakan mercusuar yang menjadi saksi bisu dahsyatnya tsunami yang ditimbulkan akibat letusan Gunung Krakatau pada tahun 1883. Sejumlah peninggalan akibat letusan tersebut, juga dapat dilihat di museum Lampung, Taman Dipangga dan di parkiran kompleks perkantoran Pemkot Bandar Lampung. Monumen Krakatau juga dilengkapi berbagai relief yang menggambarkan kehidupan masyarakat Lampung sebelum dan pasca-letusan Gunung Krakatau.', '-', '-5.445654875894756', '105.26212117153027'),
(54, 'Museum Lampung', 'Jl. ZA. Pagar Alam No.64, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141', 'Museum tua, bulding di tahun 80-an. Museum ini memiliki senjata yang fantastis, peralatan tradisional dan koin. Anda harus membayar 5rb rupiah untuk masuk ke museum. Direkomendasikan untuk pelancong anggaran.  Tidak hanya meuseum, kompleks museum juga memiliki aula multifungsi. Saya pikir, harga untuk carter murah.', '0', '-5.372266745125937', '105.24090785236946'),
(55, 'Anjungan Kota Bandar Lampung', 'J7FG+2XX, Jl. Sumpah Pemuda, Perumnas Way Halim, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132', 'Anjungan kota bandar lampung merupakan pusat rekreasi keluarga yang letaknya dipusat kota. Dalam anjungan ini terdapat arena permainan untuk anak2 dari usia 1 th sampai dengan 14 th.  Buat orang dewasa juga bisa menikmati berbagai kuliner yang berada disekitar anjungan ini. Jika good people ingin menyusuri tempat wisata ini dapat menggunakan kereta mini ataupun delman yang bisa dinikmati bersama sama dengan anggota keluarga. Disini good people juga bisa mengenal keanekaragaman suku suku yang ada di lampung yang terlihat dari miniatur rumah adat dari kabupaten yang ada dilampung beserta sejarah dan kebudayaannya', '0', '-5.377433729549664', ' 105.27742843478114'),
(56, 'Monumen Angkatan 66', 'H748+VFC, Kupang Kota, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung', 'Monumen Angkatan 66 merupakan fitur (landmark) Teluk Betuk selain beberapa monumen lainnya. Terletak dekat dengan rumah makan Begadang yang kerap menjadi tujuan kuliner warga Lampung dan pendatang dari luar kota. \"Angkatan 66\" merupakan tonggak penting dalam sejarah Indonesia karena para aktivis angkatan 1966 menjadi aktor sejarah yang mengubah kehidupan politik di Indonesia dari Orde Lama ke Orde Baru.', '0', '-5.442865462083296', ' 105.26611902089904'),
(57, 'Japanese Army World War 2 Bunker', 'H7F4+8GM, Jl. Amir Hamzah 1, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214', 'Bungker, Situs Gua Jepang Mengamati Bungker yang ada di SMA Negeri 2 Bandar Lampung yang merupakan sebuah bangunan yang terbuat dari beton yang terbuat dari bahan bangunan saat itu. Bangunan bungker ini memiliki pintu masuk dari atas. Meskipun demikian tapi belum ada yang berani masuk dikarenakan konon katanya ada ular yang tinggal disana. Menurut pernyataan warga di sekitar bungker terebut, bungker yang ada di SMA Negeri 2 Bandar Lampung terhubung dengan bungker yang ada di Dinas Pendidikan dan Kebudayaan Kota Bandar Lampung lalu terhubung ke Teluk Betung melalui masjid Al-Furqon. Wallahu’alam.', '0', '-5.426724924871108', '105.2562744130942');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
