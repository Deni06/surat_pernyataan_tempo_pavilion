-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2020 pada 12.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_pernyataan_tempo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `background_surat`
--

CREATE TABLE `background_surat` (
  `background_surat_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `background_color_declaration_form` varchar(100) NOT NULL,
  `background_color_safe_entry_pass` varchar(100) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `background_surat`
--

INSERT INTO `background_surat` (`background_surat_id`, `day`, `background_color_declaration_form`, `background_color_safe_entry_pass`, `updated_by`, `updated_at`) VALUES
(1, 1, '#E7D7AA', '#D9D9D9', NULL, '2020-06-20 03:51:00'),
(2, 2, '#E7D7AA', '#D9D9D9', NULL, '2020-06-20 03:51:11'),
(3, 3, '#E7D7AA', '#D9D9D9', NULL, '2020-06-21 03:45:11'),
(4, 4, '#E7D7AA', '#D9D9D9', NULL, NULL),
(5, 5, '#E7D7AA', '#D9D9D9', NULL, NULL),
(6, 6, '#E7D7AA', '#D9D9D9', NULL, NULL),
(7, 7, '#E7D7AA', '#d9d9d9', 1, '2020-07-05 02:52:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_description` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_company`, `company_name`, `company_description`, `company_address`) VALUES
(1, 'PT. TEMPO REALTY', 'Tempo Scan Tower Building Management', 'Jl. HR Rasuna Said Kav 3-4, Jakarta Selatan 12950');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `gro_id` tinyint(1) NOT NULL,
  `gro_name` varchar(60) NOT NULL,
  `user_all_access` varchar(9) DEFAULT NULL COMMENT 'saving format : ;1;2;3;...;n; | 1: view, 2: add, 3: edit, 4: delete',
  `user_group_all_access` varchar(9) DEFAULT NULL COMMENT 'saving format : ;1;2;3;...;n; | 1: view, 2: add, 3: edit, 4: delete',
  `background_all_access` varchar(9) DEFAULT NULL COMMENT 'saving format : ;1;2; | 1: view, 2: edit',
  `location_all_access` varchar(9) DEFAULT NULL COMMENT 'saving format : ;1;2;3;...;n; | 1: view, 2: add, 3: edit, 4: delete',
  `report_all_access` int(11) DEFAULT '0' COMMENT '0: no, 1:yes',
  `declaration_form_all_access` int(11) DEFAULT '0' COMMENT '0: no, 1:yes',
  `my_task_all_access` int(11) DEFAULT '0' COMMENT '0: no, 1:yes',
  `location_my_task_all_access` text COMMENT 'saving format : ;1;2;3;4;...;n; | join with lokasi',
  `visitor_in_building_all_access` int(11) DEFAULT '0' COMMENT '0: no, 1:yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`gro_id`, `gro_name`, `user_all_access`, `user_group_all_access`, `background_all_access`, `location_all_access`, `report_all_access`, `declaration_form_all_access`, `my_task_all_access`, `location_my_task_all_access`, `visitor_in_building_all_access`) VALUES
(1, 'admin', ';1;2;3;4;', ';1;2;3;4;', ';1;2;', ';1;2;3;4;', 1, 1, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_id` int(11) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `is_image_checkin` int(11) NOT NULL,
  `is_image_checkout` int(11) NOT NULL,
  `character_checkin` varchar(20) NOT NULL,
  `character_checkout` varchar(20) NOT NULL,
  `image_checkin` text NOT NULL,
  `image_checkout` text NOT NULL,
  `is_emergency_gate` int(11) DEFAULT '0',
  `created_on` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Struktur dari tabel `ms_user`
--

CREATE TABLE `ms_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usr_group` tinyint(1) NOT NULL,
  `stuts` tinyint(1) NOT NULL,
  `usr_phone` varchar(20) NOT NULL,
  `usr_fullname` varchar(255) NOT NULL,
  `usr_address` varchar(255) NOT NULL,
  `usr_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_user`
--

INSERT INTO `ms_user` (`user_id`, `user_name`, `password`, `usr_group`, `stuts`, `usr_phone`, `usr_fullname`, `usr_address`, `usr_email`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 1, '', 'Admin', '', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `surat_pernyataan_id` int(11) NOT NULL,
  `device_id` text,
  `phone_number` varchar(30) DEFAULT NULL,
  `character_registration` varchar(30) NOT NULL,
  `location_checkin` int(11) NOT NULL,
  `check_in` datetime DEFAULT NULL,
  `registration_number` varchar(20) DEFAULT NULL,
  `is_submit` int(11) NOT NULL DEFAULT '0',
  `check_out` datetime DEFAULT NULL,
  `is_checkout` int(11) NOT NULL DEFAULT '0',
  `type_checkout` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Struktur dari tabel `surat_pernyataan`
--

CREATE TABLE `surat_pernyataan` (
  `surat_pernyataan_id` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `suhu_tubuh` varchar(10) NOT NULL,
  `destination_company` varchar(100) NOT NULL,
  `floor` int(11) NOT NULL COMMENT '1: lantai loby, 2: lantai 2, 3: lantai 3, 4: lantai 15, 5: lantai 16, 6: lantai 18, 7: lantai 19, 8: lantai 20, 9: lantai 21, 11: lantai 23, 13: lantai 25, 14: lantai 26, 15: lantai 27, 16: lantai 28, 17: lantai 29, 18: lantai 30, 19: lantai 31, 20: lantai 32',
  `foto_ktp` varchar(100) DEFAULT NULL,
  `device_id` text NOT NULL,
  `is_travelling` int(11) NOT NULL DEFAULT '0' COMMENT '1: ya, 2:tidak',
  `is_using_transportation` int(11) NOT NULL DEFAULT '0' COMMENT '1: ya, 2:tidak',
  `is_participate_activities` int(11) NOT NULL DEFAULT '0' COMMENT '1: ya, 2:tidak',
  `is_contact_patient` int(11) NOT NULL DEFAULT '0' COMMENT '1: ya, 2:tidak',
  `is_sick` int(11) NOT NULL DEFAULT '0' COMMENT '1: ya, 2:tidak',
  `is_agree` int(11) NOT NULL DEFAULT '0' COMMENT '1: menyetujui',
  `is_fill_out_without_coercion` int(11) NOT NULL DEFAULT '0' COMMENT '1: menyetujui',
  `created_on` datetime NOT NULL,
  `valid_until` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `reason_rejection` text,
  `change_status_by` int(11) DEFAULT NULL,
  `change_status_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeks untuk tabel `background_surat`
--
ALTER TABLE `background_surat`
  ADD PRIMARY KEY (`background_surat_id`);

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gro_id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokasi_id`);

--
-- Indeks untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indeks untuk tabel `surat_pernyataan`
--
ALTER TABLE `surat_pernyataan`
  ADD PRIMARY KEY (`surat_pernyataan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `background_surat`
--
ALTER TABLE `background_surat`
  MODIFY `background_surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `gro_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `surat_pernyataan`
--
ALTER TABLE `surat_pernyataan`
  MODIFY `surat_pernyataan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
