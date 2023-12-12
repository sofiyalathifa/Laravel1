-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Des 2023 pada 02.51
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_041452_create_posts_table', 1),
(6, '2023_11_14_004548_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'a9pKaSDhaRKtlCV8Z7Sm2v44142vAekZ9AtqncoU.jpg', 'Pulau Padar', '<p>Pulau Padar merupakan tujuan utama ke Labuan Bajo, selain Pulau Komodo. Untuk menikmati keindahan Pulau Padar, wisatawan harus mendaki melalui sekitar 818 anak tangga. Keindahan Pulau Padar akan mulai terlihat pada 100 anak tangga pertama.<br />\r\n<br />\r\nRasa lelah selama mendaki akan hilang pada saat sampai di puncak. Wisatawan dapat meilihat laut yang biru dan hijaunya pepohonan di setiap pulau di kawasan ini. Di sini, wisatawan dapat memuaaskan hobi berfoto dengan panorama alam. Keindahan Pulau Padar juga didukung dengan adanya larangan merokok di kawasan ini dan kebersihan yang sangat terjaga.<br />\r\n<br />\r\n&nbsp;</p>', '2023-11-16 07:15:32', '2023-11-16 07:15:32'),
(3, '9qGf8Akds74SlfgJ9myUdo4dMvbnztfL0MqpqGFB.jpg', 'Gunung Bromo', '<p>Wisata Gunung Bromo adalah salah satu tempat wisata di indonesia yang menjadi favorit bagi wisatawan baik dalam negeri maupun luar negeri. Gunung Bromo terletak di Kabupaten Probolinggo. Gunung Bromo memiliki ketinggian sekitar 2392 mdpl. Memiliki kawah yang menjadi objek utama yang sering dikunjungi oleh wisatawan asing maupun lokal. Untuk sampai di bibir kawah, para wisatawan harus menaiki tangga yang cukup panjang. Gunung Bromo juga di kenal dengan sunrise dan sunsetnya. Tidak hanya pemandangan matahari terbit saja yang menjadi daya tarik utama Gunung Bromo, namun ada banyak sekali tempat wisata di sekitar Gunung Bromo yang jarang di explore oleh wisatawan.</p>', '2023-11-16 07:24:13', '2023-11-16 07:24:13'),
(4, 'ptQAb3rGOzF7GB3AamF3HLi74Hw1L9dIK8bL49BH.jpg', 'Pantai Ora', '<p>Pantai Ora terletak di Desa Saleman, Kecamatan Seram Utara, Maluku Tengah, Provinsi Maluku. Letak wilayah pantai ini tepatnya berada di Taman Nasional Manusela, Pulau Seram, Provinsi Maluku. Pantai Ora merupakan pantai alami dengan kejernihan airnya dan kebersihan pasirnya. Kawasan ini juga memiliki keindahan bawah laut yang sangat memesona.</p>\r\n\r\n<p>Pantai Ora memiliki daratan yang tidak terlalu luas, karena wilayahnya sebagian besar berupa tebing, hutan tropis, dan barisan pegunungan. Namun, Pantai Ora memiliki panorama bawah laut yang sangat indah. Air lautnya biru jernih dengan pemandangan bawah laut yang masih minim sentuhan tangan manusia. Wilayah ini banyak memiliki terumbu karang yang masih sangat sehat dan biota laut yang beragam.<br />\r\n<br />\r\n&nbsp;</p>', '2023-11-16 07:29:01', '2023-11-16 07:29:01'),
(5, 'oDdhn5vhOFOr3B9CCHGLZXkEGCDymID4uITKYsAo.jpg', 'Curug Cikaso', '<p>Curug Cikaso begitu mempesona, dan merupakan salah satu wisata andalan yang lokasinya berada di selatan Kabupaten Sukabumi. Awalnya curug atau air terjun ini bernama Curug Luhur, namun karena aliran airnya berasal dari anak Sungai Cikaso akhirnya dikenal dengan nama Curug Cikaso.</p>\r\n\r\n<p>Ketika kamu sedang berada di Sukabumi, jangan lewatkan untuk mengunjungi Curug Cikaso dan bersantai bersama teduhnya alam serta suara air yang menenangkan.Curug Cikaso memiliki tiga aliran air terjun dimana airnya mengalir melalui tebing yang tinggi, dengan hiasan tumbuhan hijau di sekitarnya.Terlihat sangat megah sekali, aliran airnya pun cukup deras dan sangat jernih sekali. Curug Cikaso memiliki ketinggian sekitar 80 meter, dengan lebar tebing mencapai 100 meter. Aliran air yang mengalir di Curug Cikaso berasal dari anak Sungai Cikaso dan bermuara di Muara Tegal Buleud Kabupaten Sukabumi.</p>', '2023-11-16 07:32:44', '2023-11-16 07:32:44'),
(6, '11lC1jtjOOEA6ZLVoEUytwsf1cDMHEiQdJTWuD1E.jpg', 'Pantai Balekambang', '<p>Pantai Balekambang merupakan salah satu pantai cantik yang wajib dikunjungi di Malang, Jawa Timur. Pesonanya gak kalah menarik dengan pantai - pantai di Bali. Pantai ini pun kerap disebut Tanah Lot&nbsp;ala Malang. Selain itu, Pantai Balekambang memiliki akses jalan yang mudah dijangkau.</p>\r\n\r\n<p>Pantai Balekambang telah menjadi objek wisata sejak 1985. Panorama alam yang indah dan hamparan pasir yang luas menjadi perpaduan yang epik. Selain terkenal sebagai wisata Alam,&nbsp;Pantai Balekambang memiliki daya tarik utama berupa pura di atas pulau bebatuan karang. Pulau tersebut bernama Pulau Ismoyo. Terdapat Pura Amarta Jati yang masih digunakan untuk upacara keagamaan umat Hindu.&nbsp;&nbsp;</p>', '2023-11-16 07:41:28', '2023-11-16 07:41:28'),
(7, 'EUrsKarik7S1woIlmLNQmB8bc4R0YJINVRw5cgOp.jpg', 'Tanah Lot', '<p>Tanah Lot atau Tanah Laut melambangkan romantisme Pulau Bali. Seperti namanya, Tanah Lot memang memiliki&nbsp;<em>setting&nbsp;</em>lepas pantai yang unik. Tanah Lot juga merupakan &lsquo;rumah&rsquo; dari salah satu ikon terkenal di Bali yaitu Siluet Pura Tanah Lot.Tanah Lot ini terletak di Tabanan, hanya berjarak 30 km dari Denpasar.</p>\r\n\r\n<p>Sedangkan puranya terletak sekitar 300 meter di lepas pantai. Pura Tanah Lot diyakini berasal dari abad ke-16 menurut penuturan dari Dang Hyang Nirartha, seorang tokoh agama yang dihormati di Bali.&nbsp;Kawasan wisata Tanah Lot dekat batu dikelola sangat baik untuk tujuan wisata, lengkap dengan fasilitas parkiran kendaraan, toilet, toko seni, restoran, hotel, panggung terbuka, layanan informasi wisata, serta keamanan dan pelayanan kesehatan.</p>', '2023-11-16 07:49:36', '2023-11-16 07:49:36'),
(8, 'rz0bV2JauQVN0WyX5wXSK18C8c8vE6t02rWcBJiM.jpg', 'Pantai Batu Bolong', '<p>Pantai Batu Bolong merupakan salah satu tempat wisata yang ada di Kabupaten Badung, Bali. Tepatnya lokasi pantai ini berada&nbsp; di daerah Canggu dan cukup populer di kalangan wisatawan karena pemandangan pantai eksotis yang ditawarkan.&nbsp;</p>\r\n\r\n<p>Ada hal menarik dan unik di pantai ini yang dapat menarik para wisatawan untuk dikunjungi yakni misteri tentang keberadaan sumber mata air tawar dari lubang batu karang yang disebut Tirtha Pukuluh. Selama ini Tirtha Pukuluh tersebut dijadikan sebagai tempat untuk mengambil air suci dalam prosesi peribadatan keagamaan di Pura Batu Bolong.&nbsp;Pantai ini menjadi salah satu tempat yang dijadikan untuk surfing oleh para wisatawan baik dari yang dalam negeri maupun luar negeri.<br />\r\n&nbsp;</p>', '2023-11-16 07:59:42', '2023-11-16 07:59:42'),
(9, 'FDQLZDQaVk0gOjFQtCnViDVfXPpBxWxUXLBIZlwO.jpg', 'Pantai Pok Tunggal', '<p>Nama Pok Tunggal memiliki arti Pok dari Pokok, dalam bahasa Jawa berarti pohon dan tunggal. Karena, hanya ada satu pohon Duras yang tumbuh subur dan rindang di pantai ini. Pohon Duras tergolong sulit tumbuh di pantai ini. Warga Desa Tepus menyakini bahwa pohon Duras membawa keberkahan dan kemakmuran. Pantai Pok Tunggal merupakan pantai berpasir putih dengan air yang jernih. Pemandangan pantai ini memanjakan mata dengan hamparan pantai yang cukup panjang.</p>\r\n\r\n<p>Meskipun berbatasan dengan Samudera Hindia, namun Pantai Pok Tunggal memiliki ombak yang lebih tenang. Sehingga, pantai dapat digunakan untuk snorkeling dan berenang dengan tetap menjaga keamanan.<br />\r\nKeunikan Pantai Pok Tunggal adalah pantai memiliki aliran sungai bawah tanah dengan air tawar. Air tawar dari sungai ini menjadi sumber air untuk warga Desa Tepus. Pantai Pok Tunggal dikelilingi bukit yang indah, antara lain ada Bukit Tirta Pok Tunggal di sebelah barat dan Bukit Panjong di sebelah timur.<br />\r\n&nbsp;</p>', '2023-11-16 08:10:39', '2023-11-16 08:10:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Hafida Zahra', 'hafidazahra@gmail.com', NULL, '$2y$10$xcaKIdnCwS/SMEiZwuqqiefURDbURZEwcwApafy3/pzgqTvoD.YR6', NULL, '2023-11-20 18:07:37', '2023-12-06 06:11:18'),
(17, 'Administrator', 'admin@gmail.con', NULL, '$2y$10$DfWCi9oWCD7XAFS154qsSen.7NYxdANl4l04jwt2nHLiO4DZFEicq', NULL, '2023-12-05 05:33:30', '2023-12-05 05:33:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
