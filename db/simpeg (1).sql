-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2018 pada 07.12
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_dp3`
--

CREATE TABLE `tbl_data_dp3` (
  `id_dp3` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `kesetiaan` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `tanggung_jawab` varchar(100) NOT NULL,
  `ketaatan` varchar(100) NOT NULL,
  `kejujuran` varchar(100) NOT NULL,
  `kerjasama` varchar(100) NOT NULL,
  `prakarsa` varchar(100) NOT NULL,
  `kepemimpinan` varchar(100) NOT NULL,
  `rata_rata` varchar(100) NOT NULL,
  `atasan` varchar(100) NOT NULL,
  `penilai` varchar(100) NOT NULL,
  `mengetahui` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_gaji_pokok`
--

CREATE TABLE `tbl_data_gaji_pokok` (
  `id_gaji_pokok` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_golongan` int(50) NOT NULL,
  `nomor_sk` varchar(100) NOT NULL,
  `tanggal_sk` varchar(100) NOT NULL,
  `dasar_perubahan` varchar(100) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `masa_kerja` varchar(50) NOT NULL,
  `pejabat_menetapkan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_hukuman`
--

CREATE TABLE `tbl_data_hukuman` (
  `id_hukuman` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_master_hukuman` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `nomor_sk` varchar(100) NOT NULL,
  `tanggal_sk` varchar(100) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `masa_berlaku` varchar(100) NOT NULL,
  `pejabat_menetapkan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_keluarga`
--

CREATE TABLE `tbl_data_keluarga` (
  `id_data_keluarga` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `nama_anggota_keluarga` varchar(150) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `status_kawin` varchar(50) NOT NULL,
  `tanggal_nikah` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal_cerai_meninggal` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_organisasi`
--

CREATE TABLE `tbl_data_organisasi` (
  `id_organisasi` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_pegawai`
--

CREATE TABLE `tbl_data_pegawai` (
  `id_pegawai` int(50) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nip_lama` varchar(100) NOT NULL,
  `no_kartu_pegawai` varchar(100) NOT NULL,
  `nama_pegawai` varchar(150) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `tanggal_pengangkatan_cpns` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_npwp` varchar(75) NOT NULL,
  `kartu_askes_pegawai` varchar(100) NOT NULL,
  `status_pegawai_pangkat` varchar(50) NOT NULL,
  `id_golongan` int(20) NOT NULL,
  `nomor_sk_pangkat` varchar(50) NOT NULL,
  `tanggal_sk_pangkat` varchar(50) NOT NULL,
  `tanggal_mulai_pangkat` varchar(50) NOT NULL,
  `tanggal_selesai_pangkat` varchar(50) NOT NULL,
  `id_status_jabatan` int(20) NOT NULL,
  `id_jabatan` int(20) NOT NULL,
  `id_unit_kerja` int(20) NOT NULL,
  `id_satuan_kerja` int(20) NOT NULL,
  `lokasi_kerja` varchar(100) NOT NULL,
  `nomor_sk_jabatan` varchar(50) NOT NULL,
  `tanggal_sk_jabatan` varchar(50) NOT NULL,
  `tanggal_mulai_jabatan` varchar(50) NOT NULL,
  `tanggal_selesai_jabatan` varchar(50) NOT NULL,
  `id_eselon` int(20) NOT NULL,
  `tmt_eselon` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_pelatihan`
--

CREATE TABLE `tbl_data_pelatihan` (
  `id_pelatihan` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_master_pelatihan` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_sertifikat` varchar(50) NOT NULL,
  `jam_pelatihan` varchar(50) NOT NULL,
  `negara` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_pendidikan`
--

CREATE TABLE `tbl_data_pendidikan` (
  `id_pendidikan` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `tingkat_pendidikan` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `teknik_non_teknik` varchar(50) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `tempat_sekolah` text NOT NULL,
  `nomor_sttb` varchar(100) NOT NULL,
  `tanggal_sttb` varchar(100) NOT NULL,
  `tanggal_lulus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_penghargaan`
--

CREATE TABLE `tbl_data_penghargaan` (
  `id_penghargaan` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_master_penghargaan` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `nomor_sk` varchar(100) NOT NULL,
  `tanggal_sk` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_riwayat_jabatan`
--

CREATE TABLE `tbl_data_riwayat_jabatan` (
  `id_riwayat_jabatan` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `penempatan` varchar(50) NOT NULL,
  `id_jabatan` int(50) NOT NULL,
  `id_unit_kerja` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `id_eselon` int(50) NOT NULL,
  `tmt_eselon` varchar(50) NOT NULL,
  `nomor_sk` varchar(50) NOT NULL,
  `tanggal_sk` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `lokasi` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_riwayat_pangkat`
--

CREATE TABLE `tbl_data_riwayat_pangkat` (
  `id_riwayat_pangkat` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_golongan` int(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nomor_sk` varchar(50) NOT NULL,
  `tanggal_sk` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_seminar`
--

CREATE TABLE `tbl_data_seminar` (
  `id_seminar` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'prodi', 'Program Studi'),
(4, 'fakultas', 'Fakultas'),
(5, 'rektor', 'Pimpinan Universitas'),
(6, 'pr1', 'Wakil Rektor 1'),
(7, 'pr2', 'Wakil Rektor 2'),
(8, 'pr3', 'Wakil Rektor 3'),
(9, 'pr4', 'Wakil Rektor 4'),
(10, '54211', 'S1 Agroteknologi'),
(11, '55201', 'S1 Teknik Informatika'),
(12, '87203', 'S1 Pendidikan Ekonomi'),
(13, '84202', 'S1 Pendidikan Matematika'),
(14, '21201', 'S1 Teknik Mesin'),
(15, '63201', 'S1 Ilmu Administrasi Negara'),
(16, '61201', 'S1 Manajemen'),
(17, '88203', 'S1 Pendidikan Bahasa Inggris'),
(18, '69201', 'S1 Sosiologi'),
(19, '22201', 'S1 Teknik Sipil'),
(20, '74201', 'S1 Ilmu Hukum'),
(21, '62201', 'S1 Akuntansi'),
(22, '87201', 'S1 Pendidikan Sejarah'),
(23, '54243', 'S1 Budidaya Perairan'),
(24, '13201', 'S1 Kesehatan Masyarakat'),
(25, '63101', 'S2 Ilmu Administrasi Negara'),
(26, 'ekonomi', 'Fakultas Ekonomi'),
(27, 'hukum', 'Fakultas Hukum'),
(28, 'sospol', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(29, 'fkip', 'Fakultas Keguruan dan Ilmu Pendidikan'),
(30, 'fkm', 'Fakultas Kesehatan Masyarakat'),
(31, 'perikanan', 'Fakultas Perikanan'),
(32, 'pertanian', 'Fakultas Pertanian'),
(33, 'teknik', 'Fakultas Teknik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login_attempts`
--

CREATE TABLE `tbl_login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_eselon`
--

CREATE TABLE `tbl_master_eselon` (
  `id_eselon` int(50) NOT NULL,
  `nama_eselon` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_golongan`
--

CREATE TABLE `tbl_master_golongan` (
  `id_golongan` int(50) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_hukuman`
--

CREATE TABLE `tbl_master_hukuman` (
  `id_hukuman` int(50) NOT NULL,
  `nama_hukuman` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_jabatan`
--

CREATE TABLE `tbl_master_jabatan` (
  `id_jabatan` int(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_lokasi_kerja`
--

CREATE TABLE `tbl_master_lokasi_kerja` (
  `id_lokasi_kerja` int(10) NOT NULL,
  `lokasi_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_lokasi_pelatihan`
--

CREATE TABLE `tbl_master_lokasi_pelatihan` (
  `id_lokasi_pelatihan` int(50) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_pelatihan`
--

CREATE TABLE `tbl_master_pelatihan` (
  `id_pelatihan` int(50) NOT NULL,
  `nama_pelatihan` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_penghargaan`
--

CREATE TABLE `tbl_master_penghargaan` (
  `id_penghargaan` int(50) NOT NULL,
  `nama_penghargaan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_ppk`
--

CREATE TABLE `tbl_master_ppk` (
  `id_ppk` int(50) NOT NULL,
  `nama_ppk` varchar(150) NOT NULL,
  `parent_satuan_kerja` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_satuan_kerja`
--

CREATE TABLE `tbl_master_satuan_kerja` (
  `id_satuan_kerja` int(50) NOT NULL,
  `nama_satuan_kerja` varchar(150) NOT NULL,
  `parent_unit` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_status_jabatan`
--

CREATE TABLE `tbl_master_status_jabatan` (
  `id_status_jabatan` int(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_status_pegawai`
--

CREATE TABLE `tbl_master_status_pegawai` (
  `id_status_pegawai` int(50) NOT NULL,
  `nama_status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_unit_kerja`
--

CREATE TABLE `tbl_master_unit_kerja` (
  `id_unit_kerja` int(50) NOT NULL,
  `nama_unit_kerja` varchar(150) NOT NULL,
  `eselon` varchar(50) NOT NULL,
  `parent_unit` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_mhs_pt` int(11) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(114) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `hostname` varchar(20) DEFAULT NULL,
  `port` varchar(20) DEFAULT NULL,
  `userfeeder` varchar(114) DEFAULT NULL,
  `passfeeder` varchar(114) DEFAULT NULL,
  `jabatan` int(11) NOT NULL,
  `profile` varchar(114) NOT NULL DEFAULT 'avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `id_mhs_pt`, `ip_address`, `username`, `password`, `repassword`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `hostname`, `port`, `userfeeder`, `passfeeder`, `jabatan`, `profile`) VALUES
(1, NULL, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1517307686, 1, 'Admin', 'istrator', 'ADMIN', '08239566666', 'localhost', '8082', '091006', 'palagimatA', 3, 'avatar.jpg'),
(11, NULL, '::1', 'ejhayoe', '$2y$08$3MEZ57khaMGLalzJbgj2sO4AfPz.BE4rPiKsZzjTiFXz2mhaiJxey', NULL, NULL, 'rezarafiqmz@gmail.com', NULL, 'HgHGT8nTbx-vwX.KhYj.aO7310ba3a7e1f005e75', 1476697891, NULL, 1476177802, 1482244469, 1, 'Reza', 'Rafiq MZ', '', '082395606666', 'localhost', '8082', '091006', 'palagimatA', 0, 'unidayan-reza-rafiq-mz-20161220-1482244516.jpg'),
(12, NULL, '::1', 'tes', '$2y$08$V5c8KPik1dfx3dEUBw.O6.QEw5/ZMoeT5SethGiLx5v/Mkj4bTI9S', NULL, NULL, 'testing@gmail.com', NULL, NULL, NULL, NULL, 1476372787, NULL, NULL, 'tesa', 'tesa', 'Unidayan', '82240761006', NULL, NULL, NULL, NULL, 0, 'users-tesa-20161213-1481668077.png'),
(13, NULL, '::1', 'proadm', '$2y$08$3ewVrGpkSakAtRZ1XSJBWeIU8kAORP7JChaWbvKUPmqbHDPbzZOj.', NULL, NULL, 'admin.prodi@und.ac.id', NULL, NULL, NULL, NULL, 1478446694, 1478446711, 1, 'Prodi', 'Administrator', NULL, '082312345678', 'localhost', '8083', '', '', 0, 'avatar.jpg'),
(14, 2170, '::1', '12221058', '$2y$08$EE6eXKnDt0Q24x.iXSykpOOnOVIeyq5DOAbEy5Mb2is1b7dVABwMW', NULL, NULL, 'krisnilda@unidayan.ac.id', NULL, NULL, NULL, NULL, 1516544965, 1516864598, 1, 'Krisnilda', 'Jois', NULL, '082395606666', NULL, NULL, NULL, NULL, 0, 'avatar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users_groups`
--

CREATE TABLE `tbl_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users_groups`
--

INSERT INTO `tbl_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(18, 13, 6),
(42, 12, 4),
(43, 12, 27),
(44, 12, 28),
(45, 12, 29),
(46, 11, 3),
(47, 14, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_login`
--

CREATE TABLE `tbl_user_login` (
  `id_user_login` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `stts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`id_user_login`, `username`, `password`, `nama_lengkap`, `stts`) VALUES
(1, 'admin', 'ef75d152cf5d3fc1852bf5cc9dfd080f', 'Administrator', 'administrator'),
(2, 'ejhayoe', '2288701dbb88935e42b077f65a598f1d', 'ejhayoe', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_dp3`
--
ALTER TABLE `tbl_data_dp3`
  ADD PRIMARY KEY (`id_dp3`);

--
-- Indexes for table `tbl_data_gaji_pokok`
--
ALTER TABLE `tbl_data_gaji_pokok`
  ADD PRIMARY KEY (`id_gaji_pokok`);

--
-- Indexes for table `tbl_data_hukuman`
--
ALTER TABLE `tbl_data_hukuman`
  ADD PRIMARY KEY (`id_hukuman`);

--
-- Indexes for table `tbl_data_keluarga`
--
ALTER TABLE `tbl_data_keluarga`
  ADD PRIMARY KEY (`id_data_keluarga`);

--
-- Indexes for table `tbl_data_organisasi`
--
ALTER TABLE `tbl_data_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `tbl_data_pegawai`
--
ALTER TABLE `tbl_data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_data_pelatihan`
--
ALTER TABLE `tbl_data_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `tbl_data_pendidikan`
--
ALTER TABLE `tbl_data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tbl_data_penghargaan`
--
ALTER TABLE `tbl_data_penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `tbl_data_riwayat_jabatan`
--
ALTER TABLE `tbl_data_riwayat_jabatan`
  ADD PRIMARY KEY (`id_riwayat_jabatan`);

--
-- Indexes for table `tbl_data_riwayat_pangkat`
--
ALTER TABLE `tbl_data_riwayat_pangkat`
  ADD PRIMARY KEY (`id_riwayat_pangkat`);

--
-- Indexes for table `tbl_data_seminar`
--
ALTER TABLE `tbl_data_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_attempts`
--
ALTER TABLE `tbl_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_master_eselon`
--
ALTER TABLE `tbl_master_eselon`
  ADD PRIMARY KEY (`id_eselon`);

--
-- Indexes for table `tbl_master_golongan`
--
ALTER TABLE `tbl_master_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `tbl_master_hukuman`
--
ALTER TABLE `tbl_master_hukuman`
  ADD PRIMARY KEY (`id_hukuman`);

--
-- Indexes for table `tbl_master_jabatan`
--
ALTER TABLE `tbl_master_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_master_lokasi_kerja`
--
ALTER TABLE `tbl_master_lokasi_kerja`
  ADD PRIMARY KEY (`id_lokasi_kerja`);

--
-- Indexes for table `tbl_master_lokasi_pelatihan`
--
ALTER TABLE `tbl_master_lokasi_pelatihan`
  ADD PRIMARY KEY (`id_lokasi_pelatihan`);

--
-- Indexes for table `tbl_master_pelatihan`
--
ALTER TABLE `tbl_master_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `tbl_master_penghargaan`
--
ALTER TABLE `tbl_master_penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `tbl_master_ppk`
--
ALTER TABLE `tbl_master_ppk`
  ADD PRIMARY KEY (`id_ppk`);

--
-- Indexes for table `tbl_master_satuan_kerja`
--
ALTER TABLE `tbl_master_satuan_kerja`
  ADD PRIMARY KEY (`id_satuan_kerja`);

--
-- Indexes for table `tbl_master_status_jabatan`
--
ALTER TABLE `tbl_master_status_jabatan`
  ADD PRIMARY KEY (`id_status_jabatan`);

--
-- Indexes for table `tbl_master_status_pegawai`
--
ALTER TABLE `tbl_master_status_pegawai`
  ADD PRIMARY KEY (`id_status_pegawai`);

--
-- Indexes for table `tbl_master_unit_kerja`
--
ALTER TABLE `tbl_master_unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_groups`
--
ALTER TABLE `tbl_users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  ADD PRIMARY KEY (`id_user_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_dp3`
--
ALTER TABLE `tbl_data_dp3`
  MODIFY `id_dp3` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_gaji_pokok`
--
ALTER TABLE `tbl_data_gaji_pokok`
  MODIFY `id_gaji_pokok` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_hukuman`
--
ALTER TABLE `tbl_data_hukuman`
  MODIFY `id_hukuman` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_keluarga`
--
ALTER TABLE `tbl_data_keluarga`
  MODIFY `id_data_keluarga` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_organisasi`
--
ALTER TABLE `tbl_data_organisasi`
  MODIFY `id_organisasi` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_pegawai`
--
ALTER TABLE `tbl_data_pegawai`
  MODIFY `id_pegawai` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_pelatihan`
--
ALTER TABLE `tbl_data_pelatihan`
  MODIFY `id_pelatihan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_pendidikan`
--
ALTER TABLE `tbl_data_pendidikan`
  MODIFY `id_pendidikan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_penghargaan`
--
ALTER TABLE `tbl_data_penghargaan`
  MODIFY `id_penghargaan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_riwayat_jabatan`
--
ALTER TABLE `tbl_data_riwayat_jabatan`
  MODIFY `id_riwayat_jabatan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_riwayat_pangkat`
--
ALTER TABLE `tbl_data_riwayat_pangkat`
  MODIFY `id_riwayat_pangkat` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_data_seminar`
--
ALTER TABLE `tbl_data_seminar`
  MODIFY `id_seminar` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_login_attempts`
--
ALTER TABLE `tbl_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_eselon`
--
ALTER TABLE `tbl_master_eselon`
  MODIFY `id_eselon` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_golongan`
--
ALTER TABLE `tbl_master_golongan`
  MODIFY `id_golongan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_hukuman`
--
ALTER TABLE `tbl_master_hukuman`
  MODIFY `id_hukuman` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_jabatan`
--
ALTER TABLE `tbl_master_jabatan`
  MODIFY `id_jabatan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_lokasi_kerja`
--
ALTER TABLE `tbl_master_lokasi_kerja`
  MODIFY `id_lokasi_kerja` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_lokasi_pelatihan`
--
ALTER TABLE `tbl_master_lokasi_pelatihan`
  MODIFY `id_lokasi_pelatihan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_pelatihan`
--
ALTER TABLE `tbl_master_pelatihan`
  MODIFY `id_pelatihan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_penghargaan`
--
ALTER TABLE `tbl_master_penghargaan`
  MODIFY `id_penghargaan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_ppk`
--
ALTER TABLE `tbl_master_ppk`
  MODIFY `id_ppk` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_satuan_kerja`
--
ALTER TABLE `tbl_master_satuan_kerja`
  MODIFY `id_satuan_kerja` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_status_jabatan`
--
ALTER TABLE `tbl_master_status_jabatan`
  MODIFY `id_status_jabatan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_status_pegawai`
--
ALTER TABLE `tbl_master_status_pegawai`
  MODIFY `id_status_pegawai` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_master_unit_kerja`
--
ALTER TABLE `tbl_master_unit_kerja`
  MODIFY `id_unit_kerja` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_users_groups`
--
ALTER TABLE `tbl_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  MODIFY `id_user_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
