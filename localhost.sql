-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Des 2018 pada 08.46
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5309112_your_artikel`
--
CREATE DATABASE IF NOT EXISTS `id5309112_your_artikel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id5309112_your_artikel`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_post` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `dilihat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `id_kategori`, `judul`, `tanggal_post`, `isi`, `foto`, `slug`, `dilihat`) VALUES
(4, 1, 1, 'Mengenal Fungsi substr', '2018-04-07 01:51:11', '<p>Fungsi&nbsp;<strong>substr()</strong>&nbsp;adalah fungsi PHP untuk memotong string, atau untuk mengambil sebagian nilai dari sebuah string. Fitur ini cukup sering digunakan dalam proses pembuatan program PHP, terutama yang membutuhkan manipulasi string.</p>\r\n\r\n<p>Sebagai contoh, misalkan kita memiliki sebuah string berbentuk tanggal: &ldquo;<strong>14-09-2015</strong>&rdquo;. Bagaimana caranya untuk mengambil nilai bulan dari string tersebut, yakni karakter &ldquo;<strong>09</strong>&rdquo; ?</p>\r\n\r\n<p>Contoh lain, katakan NIM seorang mahasiswa terdiri dari 8 digit: &ldquo;<strong>12140001</strong>&rdquo;. Dua digit pertama adalah tahun masuk mahasiswa, dua digit berikutnya kode jurusan, dan empat digit terakhir adalah no urut mahasiswa. Bagaimana cara memisahkan digit-digit ini?</p>\r\n\r\n<p>Dalam kasus seperti inilah fungsi&nbsp;<strong>substr()</strong>&nbsp;diperlukan.</p>\r\n\r\n<p>Fungsi&nbsp;<strong>substr()</strong>&nbsp;membutuhkan 2 buah argumen dan 1 argumen tambahan (opsional). Arguman pertama adalah string asal yang ingin diambil nilainya. Argumen kedua berupa posisi awal pemotongan, dan argumen ketiga diisi jumlah karakter yang akan diambil. Argumen kedua dan ketiga bertipe integer dan bisa positif maupun negatif.</p>\r\n\r\n<p>PHP membuat penggunaan fungsi&nbsp;<strong>substr()</strong>&nbsp;dengan 6 kombinasi cara penulisan. Kita akan membahasnya satu persatu.</p>\r\n', 'b258caa120feb36f1cdd34a25c219bff.jpg', 'mengenal-fungsi-substr.html', 6),
(11, 2, 3, 'Gempa Haiti Dan Tsunami Aceh Disinyalir Adalah Fenomena Buatan HAARP', '2018-04-07 01:42:26', '<p>Saat ini di sejumlah mailing list beredar informasi dugaan bahwa gempa dahsyat yang mengguncang Haiti bahkan tsunami Aceh 2004 bukan murni bencana alam. Benarkah?</p>\r\n\r\n<p>Penelusuran&nbsp;<em><a href=\"http://www.vivanews.com/\">VIVAnews</a>,</em>&nbsp;Seperti dimuat laman&nbsp;<em><strong>Press TV</strong></em>, 23 Januari 2010, informasi dari pangkalan Angkatan Laut Rusia mengatakan gempa Haiti tidak murni bencana alam, melainkan hasil dari uji coba senjata &lsquo;pemicu gempa&rsquo; yang disiapkan Amerika untuk Iran.</p>\r\n\r\n<p>Tujuannya, diduga untuk menggulingkan pemerintahan di negara Islam tersebut.</p>\r\n\r\n<p>Armada Rusia mengklaim mengetahui hal itu, berdasarkan pantauan terhadap gerakan marinir Amerika Serikat di Karibia sejak 2008, ketika AS mengumumkan ingin membangun kembali armada keempatnya.</p>\r\n\r\n<p>Reaksi militer AS yang cepat datang ke Haiti juga dijadikan penguat tudingan Rusia.</p>\r\n\r\n<p>&ldquo;AS sedang menguji salah satu senjata pemicu gempa yang akan digunakan untuk menghajar Iran, justru berakibat fatal dan mengakibatkan bencana dahsyat di Karibia,&rdquo; seperti dimuat laman&nbsp;<em>ViVe TV Venezuela</em>, mengutip laporan Rusia.</p>\r\n\r\n<p>Bahkan, juga diberitakan awal Januari, uji coba yang sama mengakibatkan gempa sebesar 6,5 skala Richter di area dekat kota Eureka, Kalifornia. Tak ada yang tewas, namun sejumlah bangunan dilaporkan rusak.</p>\r\n\r\n<p>Setelah berita itu dirilis, Presiden Venezuela, yang juga di barisan penentang AS, Hugo Chavez buru-buru berkomentar. Dia mengklaim hal yang sama, bahwa AS bertanggungjawab atas bencana gempa yang mengguncang Karibia.</p>\r\n\r\n<p>Chavez menuding AS menggunakan gempa Haiti sebagai dalih untuk menduduki negara itu. Caranya, dengan mengirimkan tentara dengan dalih membantu korban gempa.</p>\r\n\r\n<p>Beberapa sumber juga berspekulasi gempa 7,8 SR yang mengguncang Provinsi Sichuan, China pada 12 Mei 2008 juga diakibatkan hal yang sama.</p>\r\n\r\n<p>Teori konspirasi yang beredar mengatakan gempa-gempa tersebut adalah bagian dari uji coba&nbsp; HAARP (High Frequency Active Auroral Reasearch Program).</p>\r\n\r\n<p>Selain dituding bisa menyebabkan gempa, HAARP juga dihubung-hubungkan dengan anomali cuaca yang dapat mengakibatkan banjir, kekeringan, dan badai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Apa sebenarnya HAARP itu?</strong></em></p>\r\n\r\n<p>Seperti dimuat laman&nbsp;<strong>haarp.alaska.edu</strong>, HAARP adalah usaha ilmiah yang ditujukan untuk mempelajari sifat dan perilaku ionosfer (lapisan teratas atmosfer).</p>\r\n\r\n<p>Terutama, untuk meningkatkan sistem komunikasi dan sistem pengawasan, baik untuk kepentingan sipil maupun pertahanan.</p>\r\n\r\n<p>Sebaliknya, ilmuwan, Rosalie Bertell, dalam laman&nbsp;<em>Baltimore Chronicle</em>, mengatakan HAARP seperti &ldquo;raksasa pemanas&rsquo; yang dapat menyebabkan gangguan besar dalam ionosfer, menciptakan tidak hanya lubang, tapi sayatan panjang di lapisan pelindung yang mencegah radiasi mematikan.</p>\r\n\r\n<p>Masih dari teori konspirasi yang beredar, tak hanya AS, Rusia dan juga Uni Eropa juga punya proyek serupa, yang punya kemampuan sama, bisa mengakibatkan efek merusak.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Bagaimana dengan tsunami 2004?</strong></em></p>\r\n\r\n<p>Lagi, lagi teori konspirasi mengatakan bahwa bencana tsunami yang meluluhlantakkan Aceh dan beberapa negara di Samudera Hindia &ndash; yang menyebabkan lebih dari 230 ribu orang tewas &ndash; juga bukan murini bencana alam.</p>\r\n\r\n<p>Diduga tsunami berkekuatan&nbsp; 23.000 bom atom itu sengaja diciptakan AS. Para penganut teori konspirasi mengatakan AS melakukan itu untuk mengalihkan perhatian orang dari topik Perang Irak.</p>\r\n\r\n<p>Tak ada bukti otentik yang menguatkan dalil ini, namun ternyata banyak juga orang yang mempercayainya.</p>\r\n', '9424878afa40d9764c5428bf2c0a0046.jpg', 'gempa-haiti-dan-tsunami-aceh-disinyalir-adalah-fenomena-buatan-haarp.html', 3),
(12, 2, 4, 'Kematian Seluruh Drummer Band Metal Spinal Tap Yang Sangat Aneh', '2018-04-07 01:39:35', '<p>Spinal Tap adalah band heavy metal, subyek dari film rockumentary/mockumentary This Is Spinal Tap.(1984). Film ini diiringi oleh album soundtrack dengan judul yang sama. Setelah film ini dibuat, ketiga aktor yang memerankan anggota band ini telah bermain musik dalam konser dan menerbitkan album di bawah bendera Spinal Tap, mengaburkan batas antara fiksi dan kenyataan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Band ini berasal dari Inggris. Anggotanya adalah Michael McKean (sebagai David St. Hubbins), Christopher Guest (sebagai Nigel Tufnel), dan Harry Shearer (sebagai Derek Smalls). Mereka muncul pertama kali dalam sebuah acara televisi stasiun ABC berjudul The TV Show tahun 1978. Ketiganya kemudian bergabung kembali pada 2003 sebagai band American folk music revival The Folksmen dalam mockumentary A Mighty Wind.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Spinal Tap memiliki banyak mantan drummer, semuanya meninggal dengan penyebab aneh. Salah satu dalam &ldquo;kecelakaan berkebun yang aneh&rdquo;; yang lain &ldquo;tersedak muntah&rdquo;, walaupun tidak jelas muntah siapa karena &ldquo;muntah tidak dapat disidik jari&rdquo;; yang lain karena&nbsp;<a href=\"https://artikelmenarik.wordpress.com/2009/08/26/aneh-manusia-bisa-terbakar-dan-membakar-secara-misterius/\">spontaneous human combustion</a>&nbsp;di atas panggung, meninggalkan sebungkah bola hijau di atas kursi drumnya.</p>\r\n', '165d20aefa1c7d4f7e0a29281c032580.png', 'kematian-seluruh-drummer-band-metal-spinal-tap-yang-sangat-aneh.html', 8),
(13, 1, 1, 'Tombol Rahasia Google Chrome', '2018-04-07 01:39:17', '<p>Google Chrome adalah salah satu dari banyak aplikasi web browser pada PC. berikut ini saya ingin mengemukakan Trik-Trik dengan menggunakan tombol rahasia.</p>\r\n\r\n<p>1. incognito&nbsp;window (Control + Shift + N) Fitur ini memungkinkan netter untuk browsing secara aman lewat windows browser, karena dengan fitur ini netter tidak akan meninggalkan jejak seperti &lsquo;browser &amp; search history&rsquo; dan cookies. Jadi kalau netter tidak yakin akan situs yang dikunjungi atau tidak ingin orang lain di tempat kerja tahu netter mengunjungi sebuah situs, fitur ini tentu berguna.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Alt + Home atau Control + TMenampilkan semua situs dan bookmark yang pernah dibuka oleh netter sebelumnya dalam bentuk thumbnail. Fitur ini terdapat pada browser Opera dan add ons pada FireFox.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Alt + Home untuk membuka situs pada halaman yang sama, sedangkan Control + T pada halaman baru. Control + Shift + TMembuka kembali tab yang tidak sengaja ditutup oleh netter ketika browsing. Google Chrome bisa mengingat hingga 10 tab yang tidak sengaja ditutup.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. Control + Tab (Control + Shift + Tab)Cobalah menggunakan shortcut ini untuk berpindah tab dengan cepat, Control + tab untuk maju dan Control + Shift + Tab untuk mundur. Cara lainnya untuk langsung ke posisi yang tuju secara urut adalah dengan shortcut Control + 1, Control + 2 hingga Control + 9.Membuka Link Situs Dengan Cepat</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5. Untuk membuka link situs dengan cepat, Google Chrome menyediakan fitur yang sama dengan FireFox 3, yaitu dengan klik pada mouse scroll atau netter langsung klik dan drag link ke tab browser.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6. Bookmark Situs Dengan Cepat Klik tanda bintang pada bagian kiri dari address bar dari browser. Address bar Chrome juga bisa langsung berfungsi sebagai seacrh page yang langsung ke search engine yang kita inginkan Control + B</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7. Hilangkan dan tampilkan Bookmark browser dengan cepat. Control + H</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>8. Buka semua situs yang pernah dikunjungi (history) dengan cepat. Pada bagian kanan ada pilihan delete history for this day, kalau netter ingin menghapus history situs yang pernah dikunjungi pada hari tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9. Control + JBuka windows download file. Shortcut ini sama seperti pada FireFox Shift + Escape</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>10. Buka task manager Google Chrome dengan cepat untuk melihat pemakaian memori dan untuk mematikan tab yang berpotensi membuat browser freeze (hang) about:plugins &amp; about:crash Masukkan kata-kata about:plugins pada address bar untuk melihat plugins apa saja yang terinstall pada Chrome. Dan about:crash untuk melihat tab mana yang membuat Chrome crash, freeze atau hang. Fitur lainnya: about:stats, about:network, about:histograms, about:memory, about:cache, about:dns, about:internetsAkses menu pada Chrome</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anda bisa mengakses menu-menu untuk meng-customize ataupun optimize pada bagian kanan pada browser. Pilihlah menu yang ada gambar &lsquo;Kunci Inggris&rsquo; lalu pilihlah option. Di dalamnya terdapat banyak pilihan seperti menjadikan Chrome sebagai default browser, mengganti default Search, mengganti bahasa, dan lain sebagainya</p>\r\n', '9ba497f088b57f7b05664cba1552879f.jpg', 'tombol-rahasia-google-chrome.html', 1),
(14, 1, 5, 'Tanaman Yang Bertahan Hidup Dari Kotoran Kelelawar', '2018-04-07 01:50:18', '<p>Tanaman ini adalah tanaman berbentuk kantung dengan binomial nomenclatur&nbsp;<em>Nepenthes rafflesiana</em>, yang juga pemakan serangga. Tanaman ini mendapatkan nutrisi penting dari hasil pembuangan kelelawar Hardwicke.</p>\r\n\r\n<p>Hubungan antara kelelawar Hardwicke dan tanaman kantung&nbsp;<em>Nepenthes rafflesiana</em>&nbsp;di Brunei ini merupakan simbiosis mutualisme karena bukan hanya tanaman kantung saja yang diuntungkan. Kelelawar memperoleh perlindungan dengan bertengger di daun tanaman yang bundar. &ldquo;Di luar perkiraan. Hasil ini mengejutkan,&rdquo; kata pemimpin studi T. Ulmar Grafe yang juga seorang ilmuwan di Unversity Brunei Darussalam.</p>\r\n\r\n<p><img alt=\"Hasil gambar untuk Nepenthes rafflesiana\" src=\"http://www.biopix.com/photos/jko-nepenthes-rafflesiana-00572.jpg\" /></p>\r\n\r\n<p>Hubungan keduanya pertama kali ditemukan saat salah seorang siswa Grafe mendapati kelelawar di dalam kantung&nbsp;<em>N. rafflesiana</em>. Saat dikeluarkan, kelelawar tersebut hidup dan sehat. &ldquo;Rupanya sedang tidur di dalam kantung,&rdquo; kata Grafe.<br />\r\nPadahal,&nbsp;<em>N. rafflesiana</em>&nbsp;merupakan tanaman karnivora yang menjebak serangga agar jatuh ke dalam kantung. Serangga yang masuk secara perlahan dicerna dengan enzim yang ada di dasar kantung.</p>\r\n\r\n<p>Tim peneliti memasang kelelawar dengan alat pemancar lalu melepaskannya kembali ke alam. Mereka mengumpulkan tanaman berkantung yang dipilih kelelawar. Para peneliti juga mencari tanaman berkantung yang tidak digunakan kelelawar sebagai perbandingan.</p>\r\n\r\n<p>Tanaman yang digunakan kelelawar memiliki nitrogen lebih banyak di daun daripada tanaman yang tidak digunakan. Kotoran yang dibuang kelelawar selama bertengger berkontribusi 34 persen dar seluruh nutrisi yang dibutuhkan tanaman. Demikian laporan studi yang diterbitkan pada 26 Januari di<em>Biology Letters</em>.</p>\r\n\r\n<p>(Sumber: National Geographic News/<a href=\"http://twitter.com/NGIndonesia\" target=\"_blank\">National Geographic Indonesia</a>)</p>\r\n', 'a7998f4093c0eeda1f081f2127e01817.jpg', 'tanaman-yang-bertahan-hidup-dari-kotoran-kelelawar.html', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `audio`
--

CREATE TABLE `audio` (
  `id_audio` int(5) NOT NULL,
  `judul_audio` varchar(50) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `audio`
--

INSERT INTO `audio` (`id_audio`, `judul_audio`, `audio`, `tanggal`, `id_user`) VALUES
(1, 'Roar - Katty', '210f29890056cbfe80bf1992b9b4536f.mp3', '2018-04-27', 1),
(2, 'Phootograph', '4ac6aaff2fcaa3299eeec523596b3c0c.mp3', '2018-04-27', 2),
(3, 'Still Into You - Paramore', '4e8bbe7716ec70f6e6159142f933c435.mp3', '2018-04-27', 1),
(4, 'Avenged Sevenfold - Seize The Day', '1283dee728d415b9d600ee522b9113b1.mp3', '2018-04-27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id_image` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id_image`, `image`, `caption`, `tanggal`, `id_user`) VALUES
(9, '44f833d238222d1b512517926583585f.JPG', 'The Trees', '2018-04-27', 1),
(10, '56c1567062aae4ca9649736f261ceb27.jpg', 'The Beatles', '2018-04-27', 1),
(11, 'af6210df979a199a98023793f64d6602.jpg', 'Running Away', '2018-04-27', 1),
(12, '2b62c76c985bcf95aa882e492d68a391.jpg', 'The Man Walking Away', '2018-04-27', 2),
(13, 'a1481c6a87af574f1b54e1485923f5dd.png', 'Kampus TEDC Bandung', '2018-04-27', 2),
(14, '7d0eaf6f665e935350c4a22766ad1b35.PNG', 'Beben USA', '2018-04-27', 1),
(15, '6c2f6f146c4c0decff9123041234b014.jpg', 'Gempa', '2018-04-27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Teknologi', 'Mengenai teknologi'),
(2, 'Kuliner', 'Mengenai kuliner'),
(3, 'Peristiwa', 'Berisi tentang peristiwa'),
(4, 'Musik', 'berisi tentang musik'),
(5, 'Flora dan Fauna', 'berisi tentang flora fauna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `email`, `bio`, `agama`, `no_tlp`, `foto`) VALUES
(1, 'syamardy', 'a5d40c47c02fdf343aba6a62764ec7a3', 'Syam Ardy', '1996-12-06', 'Laki-Laki', 'syam.ardy00@gmail.com', '																																																		What is this																																													', 'Islam', '0888237232', '9c78a3d731af8951ca7f8d016c6ba706.jpg'),
(2, 'raisa.andriana', 'e807f1fcf82d132f9bb018ca6738a19f', 'Raisa Andriana', '1990-06-06', 'Perempuan', 'raisa_andriana@gmail.com', '										im singer									', 'Islam', '088236323', '7dfc08f84b97393ea7bf487370ceb0a2.jpg'),
(3, 'ronaldo', 'c5aa3124b1adad080927ce4d144c6b33', 'Chritiano Ronaldo', '1988-04-03', 'Laki-Laki', 'ChritianoRonaldo@gmail.com', '																																																		Whoooyahhh     																																													', 'Budha', '0887887333', '1a2cd368bf204fa8717b18e2ac3f9786.jpg'),
(4, 'ronaldodsfsdf', 'd41d8cd98f00b204e9800998ecf8427e', 'Chritiano Ronaldo', '1988-04-03', 'Laki-Laki', 'ChritianoRonaldo@gmail.com', 'Whoooyahhh     ', 'Kristen Katolik', '0887887333', 'ed98596d07b632a83f82f1e2009fa374.jpg'),
(5, 'ronaldodsfsdft', 'd41d8cd98f00b204e9800998ecf8427e', 'Chritiano Ronaldo', '1988-04-03', 'Laki-Laki', 'ChritianoRonaldo@gmail.com', 'Whoooyahhh     ', 'Kristen Katolik', '0887887333', '06bb60b6519d01ce81d434a7e4017748.jpg'),
(6, 'ronaldodsfsdfty', 'd41d8cd98f00b204e9800998ecf8427e', 'Chritiano Ronaldo', '1988-04-03', 'Laki-Laki', 'ChritianoRonaldo@gmail.com', 'Whoooyahhh     ', 'Kristen Katolik', '0887887333', '65452bdec56a5a4e610444c88c729801.jpg'),
(7, 'brew', 'e807f1fcf82d132f9bb018ca6738a19f', 'brewtaqi', '2018-12-29', 'Laki-Laki', 'brewtaqi@gmail.com', 'mau anak					', 'Islam', '088218518512', 'ab631f206441502ec7df78db40b2878e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `video`, `tanggal`, `id_user`) VALUES
(7, 'Hebring', '2797773c094d41f849d40faab7901d07.mp4', '2018-04-27', 2),
(8, 'Cobus Drum Cover', '2e8ceee7c55297019f7223aece44dc25.mp4', '2018-04-27', 1),
(10, 'Boneka Si Unyil', 'bd779f988513732de86d218db6bc851c.mp4', '2018-04-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id_audio`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `audio`
--
ALTER TABLE `audio`
  MODIFY `id_audio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
