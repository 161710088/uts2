-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2018 at 04:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupatens`
--

CREATE TABLE `kabupatens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bupati` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepadatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `populasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupatens`
--

INSERT INTO `kabupatens` (`id`, `nama`, `nama_bupati`, `luas`, `kepadatan`, `populasi`, `created_at`, `updated_at`) VALUES
(1, 'Kabupaten Bandung', 'H. Dadang M. Nasser, S.H., M.Ipol', '1.762,39 km2', '2.309,29 jiwa/km2', '4.069.872 jiwa', NULL, NULL),
(2, 'Kabupaten Bandung Barat', 'Drs. H. Abu Bakar, M.Si.', '1.311,31 km2', '1.167,59 jiwa/km2', '1.531.072 jiwa', NULL, NULL),
(3, 'Kabupaten Bogor', 'Hj. Nurhayanti, S.H., M.M., M.Si.', '2.071,21 km2', '2.303,93 jiwa/km2', '4.771.932 jiwa', NULL, NULL),
(4, 'Kabupaten Ciamis', 'Drs. H. Iing Syam Arifin, M.M', '2.556,75 km2', '691,71 jiwa/km2', '1.768.532 jiwa', NULL, NULL),
(5, 'Kabupaten Cirebon', 'Dr. H. Sunjaya Purwadi S., Drs. M.M., M.Si', '990,36 km2', '21.000 jiwa/km2', '2.126.179 jiwa', NULL, NULL),
(6, 'Kabupaten Garut', 'H. Rudy Gunawan, S.H., M.H.', '3.065,19 km2', '  831,51 jiwa/km2', ' 2.548.723 jiwa', NULL, NULL),
(7, 'Kabupaten Cianjur', 'Drs. H. Irvan Rivano Muchtar, S.Ip, SH, M.Si', '3.432,96 km2', '626,03 jiwa/km2', '2.149.121 jiwa', NULL, NULL),
(8, 'Kabupaten Indramayu', 'Hj. Anna Sophana', '2.000,99 km2', '897,24 jiwa/km2', '1.795.372 jiwa', NULL, NULL),
(9, 'Kabupaten Pangandaran', 'H. Jeje Wiradinata', '1.680 km2', '27.000 jiwa/km2', '450.658 jiwa', NULL, NULL),
(10, 'Kabupaten Sukabumi', 'Drs. H. Marwan Hamami, M.M.', '4.161,00 km2', '5.900 jiwa/km2', '2.434.221 jiwa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kesenians`
--

CREATE TABLE `kesenians` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kesenian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kesenians`
--

INSERT INTO `kesenians` (`id`, `nama`, `asal`, `fungsi`, `jenis_kesenian`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Debus', 'Banten', 'alat penyemangat', 'bela diri', 'kesenian ini berawal pada abad ke-16, pada masa pemerintahan sultan Maulana Hasanuddin(1543-1570).', NULL, NULL),
(2, 'Ketoprak', 'Jawa', 'Hiburan', 'Seni Pentas', 'Ketoprak adalah sejenis seni pentas yang berasal dari jawa,Tema cerita diambil dari cerita legenda atau sejarah jawa', NULL, NULL),
(3, 'Kuda Lumping', 'Jawa', 'Hiburan', 'Tarian', 'Kuda Lumping juga di sebut jaran kepang atau jathilan adalah tarian tradisional jawa menampilkan sekelompok prajurit tengah menumpang kuda', NULL, NULL),
(4, 'Lenong', 'Betawi', 'Hiburan', 'Teater', 'Lenong adalah keseian teater tradisional atau sandiwara rakyat Betawi yang dibawakan dalam dialek Betawi yang berasal dari Jakarta,Indonesia', NULL, NULL),
(5, 'Wayang Kulit', 'Jawa', 'Hiburan dan menyebarkan agama islam', 'Wayang', 'Wayang kulit adalah kesenian yang di pakai para wali songo untuk menyebarkan agama islam meskipun sekarang di jadikan kesenian hiburan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_walkot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_jadi` date NOT NULL,
  `julukan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `nama`, `nama_walkot`, `hari_jadi`, `julukan`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Kota Ambon', 'Richard Louhenapessy', '1575-10-07', 'Pusat pariwisata', 'Asal-usul dari istilah Ambon tidak mudah ditentukan. Menurut keterangan yang diberikan penduduk setempat, istilah tersebut berasal dari kata ombong yang merupakan bentukan lokal dari kata embun', NULL, NULL),
(2, 'Kota Balikpapan', 'Rizal Effendi', '1897-02-10', 'Kota Minyak ', 'Adanya 10 keping papan yang kembali ke Jenebora dari 1.000 keping yang diminta oleh Sultan Kutai sebagai sumbangan bahan bangunan untuk pembangunan Istana Baru Kutai Lama. Kesepuluh papan yang balik tersebut disebut oleh orang Kutai Balikpapan Tu. Sehingga wilayah sepanjang Teluk Balikpapan, tepatnya di Jenebora disebut Balikpapan.', NULL, NULL),
(3, 'Kota Banda Aceh', 'Kota Banda Aceh', '1205-04-22', 'kota Islam yang paling tua di Asia Tenggara', 'Banda Aceh sebagai ibu kota Kesultanan Aceh Darussalam berdiri pada abad ke-14. Kesultanan Aceh Darussalam dibangun di atas puing-puing kerajaan-kerajaan Hindu dan Budha yang pernah ada sebelumnya, seperti Kerajaan Indra Purba, Kerajaan Indra Purwa, Kerajaan Indra Patra, dan Kerajaan Indrapura (Indrapuri). Dari batu nisan Sultan Firman Syah, salah seorang sultan yang pernah memerintah Kesultanan Aceh, didapat keterangan bahwa Kesultanan Aceh beribukota di Kutaraja (Banda Aceh).', NULL, NULL),
(4, 'Kota Bandar Lampung', ' Drs. H. Herman H.N.', '1682-06-17', 'kota terbesar dan terpadat ketiga di Pulau Sumatera ', 'Secara geografis, Telukbetung berada di selatan Tanjungkarang, karena itu di marka jalan, Telukbetung yang dijadikan patokan batas jarak ibukota provinsi. Telukbetung, Tanjungkarang dan Panjang (serta Kedaton) merupakan wilayah tahun 1984 digabung dalam satu kesatuan Kota Bandar Lampung, mengingat ketiganya sudah tidak ada batas pemisahan yang jelas.', NULL, NULL),
(5, 'Kota Bandung', 'Muhammad Ridwan Kamil, S.T., M.U.D.', '1810-09-25', 'kota kembang', 'Secara resmi dimulai pada masa pemerintahan kolonial Hindia Belanda pada abad ke-19. Kota Bandung didirikan oleh dan atas kehendak(kebijakan) Bupati Bandung ke-6, R.A.Wiranatakusumah 2 (1794-1829).', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `makanans`
--

CREATE TABLE `makanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_pokok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_makanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makanans`
--

INSERT INTO `makanans` (`id`, `nama`, `asal`, `harga`, `bahan_pokok`, `jenis_makanan`, `created_at`, `updated_at`) VALUES
(1, 'Mie Aceh', 'Aceh', 'RP.30.000/porsi', 'Mie Kuning', 'Berat', NULL, NULL),
(2, 'Sate Padang', 'Padang', 'RP.15.000/porsi', 'Daging Sapi', 'Berat', NULL, NULL),
(3, 'Bika Ambon', 'Medan', 'RP.5.000/buah', 'Tepung Terigu', 'Ringan', NULL, NULL),
(4, 'Sate Maranggi', 'Purwakarta dan Cianjur', 'RP.20.000/10 tusuk', 'Daging ayam', 'Berat', NULL, NULL),
(5, 'Kerak Telor', 'Jakarta', 'RP.10.000/porsi', 'Telor dan Nasi', 'Berat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_14_124817_create_pulaus_table', 1),
(4, '2018_02_15_121407_create_provinsis_table', 1),
(5, '2018_02_15_145758_create_kotas_table', 1),
(6, '2018_02_15_145856_create_kabupatens_table', 1),
(7, '2018_02_15_145936_create_sukus_table', 1),
(8, '2018_02_15_150012_create_kesenians_table', 1),
(9, '2018_02_15_150146_create_wisatas_table', 1),
(10, '2018_02_15_150229_create_makanans_table', 1),
(11, '2018_02_15_150455_create_senjatas_table', 1),
(12, '2018_02_15_150540_create_pahlawans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pahlawans`
--

CREATE TABLE `pahlawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `wafat` date NOT NULL,
  `tempat_tinggal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pahlawans`
--

INSERT INTO `pahlawans` (`id`, `nama`, `tempat`, `tanggal_lahir`, `wafat`, `tempat_tinggal`, `kota_asal`, `created_at`, `updated_at`) VALUES
(1, 'Ismail Marzuki', 'Kwitang, Senen, Batavia', '1914-05-16', '1958-05-25', 'Jakarta', 'Jakarta', NULL, '2018-02-18 08:55:35'),
(2, 'Raden Dewi Sartika', 'Bandung', '1884-12-04', '1947-12-11', 'Bandung', 'Bandung', NULL, NULL),
(3, 'Otto Iskandardinata', 'Bandung', '1897-03-31', '1945-12-20', 'Banten', 'Bandung', NULL, NULL),
(4, 'Jendral Besar Raden Soedirman', 'Purbalingga', '1916-01-24', '1950-01-29', 'Purbalingga', 'Purbalingga', NULL, NULL),
(5, 'Raden Adjeng Kartini', 'Jepara', '1879-04-21', '1904-09-17', 'Jawa', 'Jepara', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gubernur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepadatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `populasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `nama`, `nama_gubernur`, `luas`, `kepadatan`, `populasi`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', 'Ahmad Heryawan', '35.222,18 km2', '1.306 jiwa/km2', '43.798.140 jiwa', NULL, NULL),
(2, 'Jawa Tengah', 'Ganiar Pranowo', '32.548 km2', '986 jiwa/km2', '35.557.249 jiwa', NULL, NULL),
(3, 'Jawa Timur', 'Soekarwo', '47.922 km2', '806 jiwa/km2', '42.030.633 jiwa', NULL, NULL),
(4, 'Kalimantan Timur', 'Awang Faroek Ishak', '129.066,64 km2', '1700 jiwa/km2', '3.725.279 jiwa', NULL, NULL),
(5, 'Kalimantan Barat', 'Cornelis', '146.807 km2', '36.43 jiwa/km2', '4100 jiwa/km2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pulaus`
--

CREATE TABLE `pulaus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepulauan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puncak_tertinggi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pulaus`
--

INSERT INTO `pulaus` (`id`, `nama`, `koordinat`, `luas`, `kepulauan`, `puncak_tertinggi`, `created_at`, `updated_at`) VALUES
(1, 'Sulawesi', '02*LU 121*BT/2*LS 121*BT', '180,6807 km2', 'Kepulauan Sunda Besar', 'Rantemario 3.478 meter', NULL, NULL),
(2, 'Jawa', '7*30"10"LS,111*15"47"BT', '126.700 km2', 'Kepulauan Sunda Besar', 'Semeru 3.676 meter', NULL, NULL),
(3, 'Sumatra', '0*00"LU 102*00"BT/0*LU 102*BT', '473.481 km2', 'Kepulauan Sunda Besar', 'Kerinci 3.805 meter', NULL, NULL),
(4, 'Kalimantan', '1*00"LU 114*00"BT / 1*LU 114*BT', '743.330 KM2', 'Kepulauan Sunda Besar', 'Kinabalu 4.095 meter', NULL, NULL),
(5, 'Papua', '5*20"LU 141*36"BT / 5,333*LS 141,6*BT', '785.753 km2', 'Kepulauan Melayu', 'Puncak Jaya 4.884 meter', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `senjatas`
--

CREATE TABLE `senjatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `senjatas`
--

INSERT INTO `senjatas` (`id`, `nama`, `asal`, `material`, `fungsi`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Rencong', 'Aceh', 'Baja', 'Perlindungan dari pria bangsawan', 'Rencong adalah sebilah pedang pendek dengan gagang atau pegangan yang di buat melengkung 90 derajat.', NULL, NULL),
(2, 'Piso Gaja Dompak', 'Sumatra Utara', 'Baja', 'Perlindungan diri', 'Dahlunya digunakan secara terbatas pada kalangan raja-raja Batak ', NULL, NULL),
(3, 'Pedang Jenawi', 'Riau', 'Baja', 'Sarana perlindungan diri dan alat menyerang lawan', 'Pedang ini adalah sebuah pedang panjang yang bilahnya terbuat dari baja dan bentuknya lurus meruncing di bagian ujung', NULL, NULL),
(4, 'Karih', 'Sumatra Barat', 'Baja', 'Perlindugan diri dari musuh atau binatangb buas', 'karih adalah sebuah senjata berbentuk seperti keris tapi tidak memiliki lengkungan seperti keris di jawa', NULL, NULL),
(5, 'Tumbuk Lado', 'Jambi', 'Baja', 'Untuk pertahanan diri', 'Senjata ini mirip dengan senjata khas Riau bedanya senjata Badik Tumbuk Lado lebih kecil dan memiliki ukiran yang lebih banyak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sukus`
--

CREATE TABLE `sukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `populasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sukus`
--

INSERT INTO `sukus` (`id`, `nama`, `wilayah`, `populasi`, `agama`, `bahasa`, `created_at`, `updated_at`) VALUES
(1, 'Suku Jawa', 'Jawa', '100.000.000 jiwa', 'Islam', 'Jawa, Indonesia, dan Melayu', NULL, NULL),
(2, 'Suku Sunda', 'Jawa barat', '36.701.670 jiwa', 'Islam', 'Sunda dan Indonesia', NULL, NULL),
(3, 'Suku Batak', 'Sumatra', '8.466.969 jiwa', 'kristen', 'Toba dan Indonesia', NULL, NULL),
(4, '`Suku Madura', 'Jawa dan Kalimantan', '7.179.356 jiwa', 'Islam', 'Madura dan Indonesia', NULL, NULL),
(5, 'Suku Dayak', 'Banten', '4.657.000 jiwa', 'Islam', 'Banten, Sunda, dan Indonesia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_wisata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keunggulan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama`, `lokasi`, `jenis_wisata`, `keunggulan`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'Tangkuban Perahu', 'Jawa Barat', 'Pegunungan', 'Pemandangan', 'Gunung ini sering di kaitkan dengan legenda Sangkuriang yang gagal mendapatkan Dayang Sumbi yang ternyata ibu kandungnya', NULL, NULL),
(2, 'Kawah Putih', 'Ciwidey', 'Pegunungan', 'Pemandangan', 'akibat dari letusan gunung Patuha', NULL, NULL),
(3, 'Maribaya', 'Bandung Barat', 'Air terjun', 'Pemandangan dan Pemandian', 'Dulunya terkenal karena pemandian nya yang sekarang terkenal karena pemandian dan air terjunnya', NULL, NULL),
(4, 'Situ Patenggang', 'Bandung Selatan', 'Situ atau Danau', 'Pemandangan', 'Danau ini di buat sebagai rasa sayang ki Santang kepada Dewi Rengganis', NULL, NULL),
(5, '333', 'Bandung', 'Museum', 'Arsitektur', 'Dahulunya di buat untuk Departemen Lalulintas dan Pekerjaan Umum', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesenians`
--
ALTER TABLE `kesenians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanans`
--
ALTER TABLE `makanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pahlawans`
--
ALTER TABLE `pahlawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pulaus`
--
ALTER TABLE `pulaus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senjatas`
--
ALTER TABLE `senjatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukus`
--
ALTER TABLE `sukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupatens`
--
ALTER TABLE `kabupatens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kesenians`
--
ALTER TABLE `kesenians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `makanans`
--
ALTER TABLE `makanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pahlawans`
--
ALTER TABLE `pahlawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pulaus`
--
ALTER TABLE `pulaus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `senjatas`
--
ALTER TABLE `senjatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sukus`
--
ALTER TABLE `sukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
