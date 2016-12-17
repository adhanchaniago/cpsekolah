-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2015 pada 10.05
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_web`
--

CREATE TABLE IF NOT EXISTS `admin_web` (
  `id_admin` int(8) NOT NULL AUTO_INCREMENT,
  `refid_admin` int(8) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `pass` text COLLATE latin1_general_ci NOT NULL,
  `no_hp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `avatar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_akhir` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(30) CHARACTER SET hebrew NOT NULL,
  `ip` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin_web`
--

INSERT INTO `admin_web` (`id_admin`, `refid_admin`, `nama`, `user_name`, `pass`, `no_hp`, `email`, `alamat`, `avatar`, `tgl`, `tgl_akhir`, `jam`, `ip`) VALUES
(1, 1, 'Admin', 'admin', '88b3340abaa6acbf87abe45f68fa8960224c1e36f6a96433bcbc490c84c9c6d2', '085669604391', 'swidodocom@yahoo.com', 'Jalan Za.Abidin gg.Harapan Bandar Lampung', 'icon-s.png', '30-09-2014', '02:59 PM - 27-07-2015', '10:03 PM', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `link_agenda` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `link_agenda`, `location`, `content`, `date`, `time`) VALUES
(2, 'cxbcxbcb', 'cxbcxbcb', 'dsfdsf', '<p>ewrewr</p>\r\n', '10-11-2014', '11:21 AM'),
(3, 'Rapat semesteran', 'rapat-semesteran', 'sdsad', '<p>ewrewr</p>\r\n', '09-10-2014', '03:57 PM'),
(4, 'Agenda Baru', 'agenda-baru', 'jakarata', '<p>sadsd</p>\r\n', '06-10-2014', '12:33 PM'),
(5, 'informasi pendaftaran', 'informasi-pendaftaran', 'bandar lampung', '<p>lampung</p>\r\n', '17-11-2014', '11:47 AM'),
(6, 'sdfds', 'sdfds', 'fsdfsdf', '<p>dsfsdf</p>\r\n', '17-11-2014', '11:47 AM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id_alumni` int(12) NOT NULL AUTO_INCREMENT,
  `ref_id_member` varchar(40) NOT NULL,
  `kode_alumni` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(20) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tahun_lulus` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `nama_instansi` varchar(30) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `foto_alumni` varchar(255) NOT NULL,
  `date_submit` varchar(20) NOT NULL,
  `status_publish` varchar(10) NOT NULL,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link_article` varchar(60) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `keyword` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `stat` int(10) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id_article`, `title`, `link_article`, `categories`, `keyword`, `content`, `date`, `time`, `stat`) VALUES
(3, 'Kurikulum 2013 murid bingung', 'kurikulum-2013-murid-bingung', 'Berita', 'Tips Mejadi Guru cerdas disenangi murid', '<p><img alt="" src="/images/images/profile-sekolah.jpg" style="width: 800px; height: 821px;" /></p>\r\n\r\n<p>Guru dan siswa di sejumlah sekolah kini sibuk menyiasati ketiadaan buku paket pelajaran berdasarkan Kurikulum 2013. Guru dan murid kebingungan karena tahun ajaran baru bergulir sejak Juli lalu. &quot;Pelajaran lebih susah karena harus aktif, tapi bukunya belum ada,&quot; kata Farabi Dharma Rizqi Utama, siswa kelas VIII SMP Negeri 161 Jakarta Selatan, kemarin.<br />\r\n<br />\r\nMenurut Farabi, belum tersedianya buku berakibat murid tidak mengetahui materi apa yang akan dipelajari di kelas. Kesulitan itu berlanjut di rumah karena tidak ada buku yang bisa digunakan untuk belajar. &ldquo;Paling hanya mengulang yang sudah dipelajari di kelas,&quot; kata Farabi.(Baca:<a href="http://www.tempo.co/read/news/2014/08/14/083599455/Kurikulum-2013-Murid-Belum-Terima-Buku-Pelajaran">Kurikulum 2013, Murid Belum Terima Buku Pelajaran</a>)<br />\r\n<br />\r\nHadi Utomo, Wakil Kepala SMP Negeri 161, mengatakan kurikulum baru ini diterapkan bagi siswa kelas VII dan kelas VIII. Solusi sementara, sekolah mengambil kebijakan bahwa guru-guru harus berkreasi berdasarkan pelatihan Kurikulum 2013 sambil menunggu buku paket datang. Hadi belum tahu hingga kapan harus menunggu. &quot;Dijanjikan segera,&quot; katanya. (Baca:<a href="http://www.tempo.co/read/news/2014/08/14/079599466/Guru-Kurikulum-2013-Kacau" target="_blank">Guru: Kurikulum 2013 Kacau</a>)<br />\r\n<br />\r\nKepala SMA Negeri 48 Jakarta Markorijasti punya cara berbeda. Dia memutuskan membeli buku dari penerbit lain untuk menyiasati ketidakjelasan kedatangan buku paket. Menurut dia, pihak sekolah diizinkan beralih ke penerbit selain perusahaan pemenang lelang yang telah ditunjuk, yaitu PT Aksara Grafika Pratama dan PT Intermasa. (Baca:<a href="http://www.tempo.co/read/news/2014/08/13/058599388/Tak-Ada-Buku-Pelajaran-Guru-NTT-Mengajar-Pakai-CD" target="_blank">Tak Ada Buku Pelajaran, Guru NTT Mengajar Pakai CD</a>)<br />\r\n<br />\r\nPerusahaan yang pertama disebutkannya belum kelar mencetak 660 eksemplar buku mata pelajaran agama Islam, Kristen, dan Katolik untuk siswa dan 160 eksemplar buku untuk 16 mata pelajaran pegangan guru. Adapun Intermasa belum memenuhi sisa kewajibannya menyediakan buku mata pelajaran seni dan budaya sebanyak 317 eksemplar untuk siswa dan guru. &quot;Mereka sudah meminta kami membayar. Tapi buku harus dikirim dulu, baru kami mau bayar,&quot; kata Markorijasti.<br />\r\n<br />\r\nCara yang sama ditempuh SMA Negeri 95 Kalideres, Jakarta Barat. Bahkan pengadaannya dengan cara fotokopi. &quot;Kami fotokopi agar tidak kurang bukunya,&quot; ujar Herman Syafrie, kepala sekolah itu, sambil menambahkan bahwa sebelumnya siswanya belajar tanpa buku dan cuma menerima materi dari guru.<br />\r\n<br />\r\nKetua Kelompok Kerja Buku Kurikulum 2013 Lembaga Kebijakan Pengadaan Barang/Jasa (LKPP), Yulianto, mengungkapkan tak semua perusahaan percetakan pemenang tender pengadaan buku Kurikulum 2013 sanggup menyelesaikan kontraknya. Dia menyalahkan sistem pembayaran lewat dana BOS (Bantuan Operasional Sekolah), yang menjadikan percetakan harus mengeluarkan modal sangat besar di awal. &ldquo;Nah, untuk percetakan yang tak memiliki modal besar, tak sanggup memproduksi sesuai kontrak. Akibatnya, proses percetakan tersendat.&rdquo;<br />\r\n<br />\r\nPekan lalu, LKPP menghubungi sejumlah perusahaan percetakan lain dan menyodorkan kontrak baru untuk mengerjakan sekitar 1,9 juta buku tingkat SD dan 10 juta buku untuk SMP serta SMA. Dengan pengalihan itu, Yulianto memprediksi, distribusi kekurangan buku baru akan selesai September mendatang.</p>\r\n', '28-10-2014', '02:37 PM', 120),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'lorem-ipsum-dolor-sit-amet,-consectetur-adipisicin', 'Berita', 'rer', '<p><img alt="" src="/images/images/bullet%20s-widodo-com.jpg" style="width: 800px; height: 800px;" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n', '28-10-2014', '02:13 PM', 54),
(5, 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', 'lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum', 'kegiatan osis', 'Lorem ipsum', '<p><img alt="" src="/images/images/bullet%20s-widodo-com.jpg" style="width: 800px; height: 800px;" /></p>\r\n\r\n<p><span style="line-height: 20.7999992370605px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span></p>\r\n', '07-11-2014', '02:22 PM', 302),
(6, 'Lorem ipsum lorem ipsum', 'lorem-ipsum-lorem-ipsum', 'kegiatan osis', 'istirahat', '<p><img alt="" src="/images/images/bullet%20s-widodo-com.jpg" style="width: 800px; height: 800px;" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>\r\n\r\n<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci.</p>\r\n\r\n<p>nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>\r\n\r\n<p>Ut porttitor euismod cursus. Mauris suscipit, turpis ut dapibus rhoncus, odio erat egestas orci, in sollicitudin enim erat id est. Sed auctor gravida arcu, nec fringilla orci aliquet ut. Nullam eu pretium purus. Maecenas fermentum posuere sem vel posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare convallis lectus a faucibus. Praesent et urna turpis. Fusce tincidunt augue in velit tincidunt sed tempor felis porta. Nunc sodales, metus ut vestibulum ornare, est magna laoreet lectus, ut adipiscing massa odio sed turpis. In nec lorem porttitor urna consequat sagittis. Nullam eget elit ante. Pellentesque justo urna, semper nec faucibus sit amet, aliquam at mi.</p>\r\n\r\n<p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhonconsequat quis, blandit a nunc. Sed orci erat, placerat ac interdum ut, suscipit eu augue. Nunc vitae mi tortor. Ut vel justo quis lectus elementum ullamcorper volutpat vel libero.</p>\r\n', '12-11-2014', '02:17 PM', 2),
(7, 'Tips Mejadi guru yang profesional', 'tips-mejadi-guru-yang-profesional', 'Pendidikan', 'Guru Profesional', '<div class="MsoNormal"><img alt="" src="/images/images/bullet%20s-widodo-com.jpg" style="width: 800px; height: 800px;" /></div>\r\n\r\n<div class="MsoNormal">Dalam peradaban yang makin kompetitif ini tuntutan untuk semakin profesional dan memiliki kompetensi yang handal adalah sebuah keharusan.</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Guru adalah peran yang sangat penting dalam peradaban manusia. </span><span lang="FI" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: FI;">Guru menjadi pencetak generasi penerus umat manusia. Guru mengajar dengan asal-asalan dan tidak profesional beresiko menghasilkan generasi penerus yang rusak dan selanjutnya akan menghancurkan peradaban masyarakat. Sehingga guru yang profesional mutlak diperlukan.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Jika tidak maka akan tergerus roda jaman, terutama guru sebagai &#39;agen of change&#39; bagi siswanya, diharapkan dapat mempersiapkan peserta didik menghadapi tuntutan hidup di masa depannya kelak (life skill).</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Bayangkan apa yang bakal terjadi pada siswa kalau mereka tidak mempercayai gurunya lantaran guru bersangkutan dianggap tidak kompeten dan profesional. Guru bersangkutan tidak dihormati siswa tidak tuntas dalam pengembangan proses pendidikannya, sehingga karakter mereka menjadi karakter yang merugikan.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Di bawah ini beberapa <a href="http://yokimirantiyo.blogspot.com/2013/04/tips-menjadi-guru-profesional.html"><b>kiat menjadi guru yang profesional</b> </a>sebagai berikut:</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Mengerti tuntutan perubahan harapan masyarakat&nbsp; yang penuh dengan kompleksitas permasalahan, memahami gaya hidup dan perilaku siswa, mengembangkan wawasan dan kompetensi keilmuan, serta mengeliminasi kendala dan hambatan yang ada dalam diri maupun lingkungan sekitar.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Memiliki semangat untuk memberi inspirasi kepada rekan kerja sesama pendidik dan siswa untuk menumbuhkembangkan mutu daya saing, mengenali &#39;resources&#39; dan memanfaatkan sebagai sumber dan media pembelajaran yang dapat meningkatkan&nbsp; daya kreativitas siswa.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Menggunakan kebutuhan dan harapan masyarakat akan manfaat pendidikan sebagai pedoman menjalankan kehidupan profesional sebagai seorang guru/pendidik.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Mengembangkan konsep pembelajaran yang relevan tentang karakter dan kompetensi yang dibutuhkan siswa untuk masa depannya.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Membangun citra positif sebagai seorang pendidik yang berketeladanan, mampu menumbuhkan motivasi dan inspirasi peserta didik serta memiliki etos, kredibilitas dan integritas sebagai seorang pendidik.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Mengembangkan inovasi dan strategi pembelajaran dengan menggali sumber dan media belajar serta memanfaatkan teknologi informasi komunikasi dengan cara yang luar biasa dan kreatif.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Memiliki interpersonal skill sebagai wujud dari implementasi kompetensi kepribadian dan kompetensi sosial seorang pendidik guna membangun semangat berprestasi dalam diri peserta didik.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Meningkatkan pelayanan prima pendidikan melalui upaya peningkatan potensi dan karakter siswa secara individual, memiliki kecakapan empati serta memberikan pengalaman belajar yang lebih bermakna kepada peserta didik.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Evaluasi terhadap kegiatan pembelajaran secara berkesinambungan dengan pengukuran efektivitas kegiatan pembelajaran lebih nyata dan akurat,serta berani menerima kritikan dan bersedia melakukan perbaikan mutu kegiatan belajar dan mengajar.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Dapat membuktikan efektivitas dan kemanfaatan pembelajaran dalam bentuk kompetensi dan karakter yang menjadi integritas dan identitas siswa.</span></div>\r\n\r\n<div class="MsoNormal"><span lang="SV" style="font-family: Arial; font-size: 10.0pt; mso-ansi-language: SV;">Setiap pendidik memiliki kompetensi dan potensi untuk <a href="http://yokimirantiyo.blogspot.com/2013/04/tips-menjadi-guru-profesional.html"><b>menjadi guru yang profesional</b>,</a> dengan menyatu padukan kecerdasan, kreativitas dengan imajinasi yang dimilikinya, menjadi guru yang baik dan menyenangkan, guna menciptakan suasana pembelajaran efektif yang disukai, berharga dan bermakna oleh peserta didik untuk dapat membangkitkan kompetensi dan karakter siswa.</span></div>\r\n\r\n<div class="MsoNormal">&nbsp;</div>\r\n\r\n<div class="MsoNormal"><span style="font-family: Arial; font-size: 10.0pt;"><i>**Sumber: edukasiwae.blogspot.com</i></span></div>\r\n', '17-11-2014', '02:20 PM', 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_categories`
--

CREATE TABLE IF NOT EXISTS `article_categories` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `link_categories` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `article_categories`
--

INSERT INTO `article_categories` (`id`, `title`, `link_categories`) VALUES
(1, 'kegiatan osis', 'kegiatan-osis'),
(2, 'Prestasi', 'prestasi'),
(3, 'Pendidikan', 'pendidikan'),
(4, 'Upacara', 'upacara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `browser`
--

CREATE TABLE IF NOT EXISTS `browser` (
  `name` varchar(100) NOT NULL,
  `hits` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id_buku` int(12) NOT NULL AUTO_INCREMENT,
  `nama_buku_tamu` varchar(80) NOT NULL,
  `email_buku_tamu` varchar(80) NOT NULL,
  `pesan_buku_tamu` text NOT NULL,
  `date_buku_tamu` varchar(40) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku`, `nama_buku_tamu`, `email_buku_tamu`, `pesan_buku_tamu`, `date_buku_tamu`, `status`) VALUES
(3, 'suprapto', 'widodocoki@yahoo.com', 'pesan dari buku tamu', '3:40: PM / 20-11-2014', 'Publish'),
(4, 'widodo', 'widodocoki@yahoo.com', 'Selamat datang di fitur buku tamu web kami', '2:47: PM / 30-11-2014', 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_koment` int(12) NOT NULL AUTO_INCREMENT,
  `id_article` int(12) NOT NULL,
  `nama_comment` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `email_comment` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url_website_komen` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `comment` text COLLATE latin1_general_ci NOT NULL,
  `date_comment` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(8) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_koment`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_koment`, `id_article`, `nama_comment`, `parent_id`, `email_comment`, `url_website_komen`, `comment`, `date_comment`, `status`) VALUES
(1, 5, 'widodo', 0, 'widodocoki@yahoo.com', 'http://s-widodo.com', 'pesan', '11:31:56-16-Nov-2014', 'Y'),
(2, 5, 'balas komentar', 1, 'widodocoki@yahoo.com', 'http://s-widodo.com', 'widodo', '11:45:28-16-Nov-2014', 'Y'),
(3, 4, 'widodo"keren"', 0, 'widodocoki@yahoo.com', 'http://s-widodo.com', 'widodo "keren''', '12:12:40-16-Nov-2014', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `mail_message` text COLLATE latin1_general_ci NOT NULL,
  `datetime` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `kode`, `nama`, `subject`, `email`, `mail_message`, `datetime`, `status`) VALUES
(10, '8HE2dj34b7', 'widodo', 'judul email', 'widodocokI@yahoo.co', 'ejjk', '6:53: PM / 23-11-2014', 'Sudah Dibaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(8) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file_download` varchar(100) NOT NULL,
  `resize` varchar(20) NOT NULL,
  `datetime` varchar(30) NOT NULL,
  `stat` int(12) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `code`, `title`, `file_download`, `resize`, `datetime`, `stat`) VALUES
(3, '5', 'widodo', 'menu6894107toucscreen.xlsx', '$16775', '27-11-2014', 4),
(4, '4135', 'file download bla bla bla', 'appicns_ical4135copy.png', '17305', '27-11-2014', 4),
(5, '7829650143', 'cvb fdgvdfv', 'menu7829650143toucscreen.xlsx', '16775', '27-11-2014', 1),
(6, '509186', 'safsaf', 'proposal-penawaran-1-728.jpg', '51934', '27-11-2014', 1),
(7, '916', 'xzvxzv', 'proposal-penawaran-1-728.jpg', '51934', '27-11-2014', 2),
(8, '1649308275', 'fdsf', 'proposal-penawaran-pembuatan-website-baru-1-638.jpg', '34068', '27-11-2014', 1),
(9, '83427', 'ertertrt', 'proposal-penawaran-1-728.jpg', '51934', '27-11-2014', 1),
(10, '83754', 'werwer', 'menu83754toucscreen.xlsx', '16775', '27-11-2014', 0),
(11, '92760', 'werwer', 'jadwal92760to927601192760sma92760ipa.docx', '429888', '27-11-2014', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id_galery` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `datetime` varchar(35) NOT NULL,
  PRIMARY KEY (`id_galery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id_galery`, `title`, `categories`, `gambar`, `datetime`) VALUES
(2, 'dfgdfg', 'upacara', 'aff.jpg', '29-10-2014'),
(3, 'sfdsf', 'upacara', 'aff.jpg', '29-10-2014'),
(4, 'sd', 'upacara', 'sdgfdf.jpg', '16-11-2014'),
(6, 'asssssssssssss', 'osis', 'aff.jpg', '07-11-2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery_categories`
--

CREATE TABLE IF NOT EXISTS `galery_categories` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `link_categories` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `galery_categories`
--

INSERT INTO `galery_categories` (`id`, `title`, `link_categories`) VALUES
(1, 'Upacara', 'upacara'),
(2, 'Kegiatan Osis', 'osis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) NOT NULL,
  `link_guru` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan_akhir` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `perangkat` varchar(20) NOT NULL,
  KEY `id_guru` (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `link_guru`, `gambar`, `nip`, `jenis_kelamin`, `ttl`, `alamat`, `agama`, `pendidikan_akhir`, `jabatan`, `perangkat`) VALUES
(2, 'Widodo', 'widodo', '1489268_842645992454592_8467311695430776307_n.jpg', '-', 'Laki-Laki', 'Bandar Lampung', 'Bandar Lampung', 'Islam', 'S2', 'Guru', 'B3'),
(4, 'widodo', '', 'file.png', 'e93w5787', 'Laki Laki', 'kudus 07-08-1991', 'dsff', 'Islam', 'D3', 'admin', 'B3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_web`
--

CREATE TABLE IF NOT EXISTS `member_web` (
  `id_member` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email_member` varchar(40) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_name_hast` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `date_login` varchar(40) NOT NULL,
  `date_logout` varchar(40) NOT NULL,
  `ip_member` varchar(20) NOT NULL,
  `browser_member` varchar(20) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `type` int(1) NOT NULL,
  `target` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `type`, `target`, `number`) VALUES
(1, 'Beranda', 'http://localhost/sekolah/', 1, '_self', 1),
(2, 'Jurusan', '#', 2, '_self', 3),
(3, 'Profil', '#', 2, '_self', 2),
(4, 'Bank Data', '#', 2, '_self', 5),
(5, 'Infomasi', '#', 2, '_self', 6),
(6, 'Prestasi', 'http://localhost/sekolah/article/tags/prestasi', 1, '_self', 7),
(7, 'Fasilitas', '#', 2, '_self', 4),
(8, 'Galery', 'http://localhost/sekolah/galery-foto.html', 1, '_self', 8),
(9, 'Download', 'http://localhost/sekolah/download', 1, '_self', 9),
(10, 'Buku Tamu', 'http://localhost/sekolah/buku-tamu', 1, '_self', 10),
(11, 'Kontak', 'http://localhost/sekolah/kontak-kami.html', 1, '_self', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_pages` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `link_pages` varchar(40) NOT NULL,
  `keyword` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pages`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id_pages`, `title`, `link_pages`, `keyword`, `content`, `date`, `time`) VALUES
(2, 'Profil 2', 'profil-2', 'profil-2', '<p><img alt="" src="/images/images/banner-taqwa%20copy.jpg" style="width: 1200px; height: 1200px;" /></p>\r\n\r\n<p>gfjgfj</p>\r\n\r\n<p>&nbsp;</p>\r\n', '29-10-2014', '10:03 PM'),
(3, 'Struktur Organisasi', 'struktur-organisasi', 'Struktur Organisasi', '<p>Isi dengan Struktur Organisasi</p>\r\n', '12-11-2014', '12:14 PM'),
(4, 'Visi Dan Misi', 'visi-dan-misi', 'visi-dan-misi', '<p>Isi dengan content visi dan misi sekolah</p>\r\n', '12-11-2014', '12:13 PM'),
(5, 'Sejarah', 'sejarah', 'sejarah', '<p>Isi dengan content sejarah</p>\r\n', '12-11-2014', '12:16 PM'),
(6, 'Program 1', 'program-1', 'program-1', '<p>Isi dengan content program</p>\r\n', '12-11-2014', '12:12 PM'),
(7, 'Program 1 5', 'Program keahlian', 'program-1-5', '<p>Isi dengan content program</p>\r\n', '12-11-2014', '12:11 PM'),
(8, 'Pendaftaran', 'pendaftaran', 'pendaftaran', '<p>Informasi Pendaftaran</p>\r\n', '14-11-2014', '01:38 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polling`
--

CREATE TABLE IF NOT EXISTS `polling` (
  `id_soal` int(2) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `polling`
--

INSERT INTO `polling` (`id_soal`, `soal`, `status`) VALUES
(1, 'Apakah informasi di website kami sudah lengkap..?', 'polling_web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polling_vote`
--

CREATE TABLE IF NOT EXISTS `polling_vote` (
  `id_jwb` int(2) NOT NULL AUTO_INCREMENT,
  `id_soal` int(2) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `vote` int(5) NOT NULL,
  PRIMARY KEY (`id_jwb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `polling_vote`
--

INSERT INTO `polling_vote` (`id_jwb`, `id_soal`, `jawaban`, `vote`) VALUES
(1, 1, 'Legkap', 14),
(2, 1, 'Cukup Lengkap', 2),
(3, 1, 'Kurang Lengkap', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_web`
--

CREATE TABLE IF NOT EXISTS `setting_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `keyword` text NOT NULL,
  `logo` varchar(20) NOT NULL,
  `favicon` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43546 ;

--
-- Dumping data untuk tabel `setting_web`
--

INSERT INTO `setting_web` (`id`, `title`, `deskripsi`, `keyword`, `logo`, `favicon`) VALUES
(43545, 'Profile Sekolah', 'des', 'key', 'logo-widodo.png', 'icon-s.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(8) NOT NULL AUTO_INCREMENT,
  `title_slider` varchar(100) NOT NULL,
  `gambar_slider` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `title_slider`, `gambar_slider`, `description`, `date`) VALUES
(1, 'slider 2', 'middle-school-slider-1.jpg', 'Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum', '27-07-2015'),
(2, 'Slider 1', 'gs-schoolconn-slide-004.jpg', 'Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum Description Lorem ipsum lorem ipsum lorem ipsum', '27-07-2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `hits` int(100) NOT NULL,
  `date` date NOT NULL,
  `online` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`hits`, `date`, `online`) VALUES
(121, '2014-11-28', 1),
(73, '2014-11-29', 1),
(261, '2014-11-30', 1),
(66, '2014-12-01', 1),
(25, '2015-07-27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `name`, `link`, `menu`, `target`) VALUES
(7, 'Struktur Organisasi', 'http://localhost/sekolah/pages/struktur-organisasi.html', '3', '_self'),
(11, 'Selayang Pandang', 'http://localhost/sekolah/#', '3', '_self'),
(12, 'Visi Dan Misi', 'http://localhost/sekolah/pages/visi-dan-misi.html', '3', '_self'),
(13, 'Sejarah', 'http://localhost/sekolah/pages/sejarah.html', '3', '_self'),
(14, 'Alumni', 'http://localhost/sekolah/data-alumni', '4', '_self'),
(15, 'Pendaftaran', 'http://localhost/sekolah/pages/infomasi.html', '5', '_self'),
(16, 'Siswa', 'http://localhost/sekolah/siswa', '4', '_self'),
(17, 'Guru', 'http://localhost/sekolah/guru', '4', '_self');

-- --------------------------------------------------------

--
-- Struktur dari tabel `widget`
--

CREATE TABLE IF NOT EXISTS `widget` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `refid` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `icon_widget` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `number` int(8) NOT NULL,
  `number2` int(8) NOT NULL,
  `position` varchar(10) NOT NULL,
  `type` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `widget`
--

INSERT INTO `widget` (`id`, `refid`, `title`, `icon_widget`, `content`, `number`, `number2`, `position`, `type`) VALUES
(1, '3641EC97D052FAB', '', '<i class="icon-beaker"></i>', 'widget_tab.txt', 0, 2, 'right', 1),
(2, '03FG46ED82A1C9B', 'Artikel Terbaru', '<i class="icon-star"></i>', 'widget_article_terbaru.txt', 0, 3, 'right', 1),
(3, 'E46935BD1GC078F', 'Kategori', '<i class="icon-tags"></i>', 'widget_tags.txt', 0, 4, 'right', 1),
(4, 'E940C15AD87B6F3', 'File Download', '<i class="icon-download-alt"></i>', 'widget_download.txt', 0, 5, 'right', 1),
(5, '54EA79CDBG20368', 'Polling', '<i class="icon-ok-circle"></i>', 'widget_polling.txt', 0, 6, 'right', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
