-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Nama: Sion Pardosi
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------- DATABASE -----------------------------------
-- ==========================================================================
CREATE DATABASE web_motor_toba
USE web_motor_toba


-- --------------------------- Table -----------------------------------
-- ==========================================================================

CREATE TABLE contents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pages VARCHAR(255),
    category VARCHAR(255),
    content TEXT
);

CREATE TABLE `admin` (
  `idadmin` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_admin` TEXT NOT NULL,
  `username` TEXT NOT NULL,
  `password` TEXT NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', 'admin');


-- --------------------------- DATA DUMMY -----------------------------------
-- ==========================================================================

-- Tambahkan kata pengantar untuk halaman depan dan video youtube 
INSERT INTO contents (pages, category, content) VALUES ('home', 'video', 'https://youtu.be/bZsGXasR8zU?si=0xkKQ4aOk40joPV7');
INSERT INTO contents (pages, category, content) VALUES ('home', 'kata_pengantar', 'Selamat datang di situs resmi Bikers Brotherhood 1% MC, klub motor yang memegang teguh nilai-nilai persaudaraan sebagai landasan hidup, tanpa memandang suku, ras, agama, atau bangsa. Kami didirikan dengan tujuan utama untuk memperjuangkan kemanusiaan dan mengedepankan semangat persatuan.

Kami adalah sebuah kelompok manusia yang bersatu dalam cinta dan penggunaan motor klasik buatan Amerika dan Eropa, yang telah menjadi ciri khas dari klub motor kami. Berdiri di Bandung pada tanggal 13 Juni 1988, kami telah tumbuh menjadi sebuah komunitas yang kuat dan solid, dengan komitmen yang tak tergoyahkan terhadap misi dan visi kami.

Kami mengangkat semangat 1% (One Percent), sebuah simbol yang merepresentasikan kesadaran dan komitmen kami yang kuat terhadap kesejahteraan bangsa ini. Kami adalah 1% dari seluruh klub motor di Indonesia yang militan dan proaktif dalam memberikan kontribusi positif bagi masyarakat.

Bergabunglah dengan kami dan rasakan kehangatan persaudaraan sejati, sambil merasakan kebebasan dan kegembiraan yang hanya bisa dirasakan ketika kita berada di jalan bersama. Selamat menikmati perjalanan ini, dan selamat bergabung dalam keluarga besar Bikers Brotherhood 1% MC!')

-- Tambahkan visi
INSERT INTO contents (pages, category, content) VALUES ('vission_mission', 'visi', 'Visi kami adalah menjadi pemimpin dalam inovasi teknologi dan masyrakat.');

-- Tambahkan misi
INSERT INTO contents (pages, category, content) VALUES ('vission_mission', 'misi', 'Menyatukan pecinta motor Honda dari berbagai latar belakang untuk berbagi pengalaman, pengetahuan, dan kebersamaan di atas jalan raya.');
INSERT INTO contents (pages, category, content) VALUES ('vission_mission', 'misi', 'Membangun komunitas yang solid, di mana setiap anggota merasa diterima, dihargai, dan menjadi bagian integral dari perjalanan bersama..');

-- Tambahkan gambar untuk visi dan misi
INSERT INTO contents (pages, category, content) VALUES ('vission_mission', 'gambar', 'visimisi.JPG');

-- Pengalaman Profile
INSERT INTO contents (pages, category, content) VALUES ('profile', 'pengalaman', 'Bergabung dengan Honda Riders Community sejak tahun 2005.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'pengalaman', 'Menjadi peserta dalam Honda Riders Rally 2010.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'pengalaman', 'Mengikuti perjalanan lintas negara bersama klub pada tahun 2015.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'pengalaman', 'Terlibat dalam berbagai kegiatan sosial dan amal bersama komunitas sejak bergabung.');

-- Kelebihan Profile
INSERT INTO contents (pages, category, content) VALUES ('profile', 'kelebihan', 'Komunitas yang ramah dan mendukung.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'kelebihan', 'Akses ke sumber daya dan pengetahuan tentang dunia motor.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'kelebihan', 'Kegiatan reguler yang menyenangkan seperti perjalanan dan pertemuan rutin.');
INSERT INTO contents (pages, category, content) VALUES ('profile', 'kelebihan', 'Membangun jaringan sosial yang luas dengan pengendara motor dari berbagai latar belakang.');

-- Tambahkan teks tentang kami
INSERT INTO contents (pages, category, content) VALUES ('about_us', 'teks', 'Tentang Kami - Sejarah Singkat Bikers Brotherhood 1% MC TOBA: Selamat datang di situs resmi Bikers Brotherhood 1% MC TOBA! Kami adalah sebuah klub motor yang berakar pada nilai-nilai persaudaraan yang kokoh, melampaui batas-batas suku, ras, agama, dan bangsa. Didirikan di Bandung pada tanggal 13 Juni 1988, Bikers Brotherhood 1% MC TOBA tumbuh dari semangat dan tekad untuk memperjuangkan kemanusiaan serta memajukan semangat persatuan di antara anggota dan komunitas sekitar. Sejak awal berdirinya, Bikers Brotherhood 1% MC TOBA telah menjadi pelopor dalam cinta dan dedikasi terhadap motor klasik buatan Amerika dan Eropa. Kami bukan sekadar klub motor, tetapi sebuah keluarga yang berkembang bersama-sama, mengukir jejak solidaritas dan komitmen yang tak tergoyahkan terhadap misi dan visi kami. Kami bangga akan semangat 1% (One Percent) yang kami anut, sebuah simbol yang mewakili kesadaran dan komitmen kami terhadap kesejahteraan bangsa ini. Sebagai 1% dari seluruh klub motor di Indonesia, kami memegang teguh militansi dan proaktifitas dalam memberikan kontribusi positif bagi masyarakat. Bergabunglah dengan kami dan rasakan kehangatan persaudaraan sejati, merasakan kebebasan dan kegembiraan yang hanya bisa dirasakan ketika bersama di jalan. Kami mengundang Anda untuk menikmati perjalanan ini bersama kami, dan bergabung dalam keluarga besar Bikers Brotherhood 1% MC TOBA! Mari bersama-sama menciptakan kenangan yang tak terlupakan, membangun kisah-kisah indah, dan merayakan semangat persaudaraan yang abadi.');

-- Tambahkan gambar tentang kami
INSERT INTO contents (pages, category, content) VALUES ('about_us', 'gambar', 'tentangkami.JPG');


DROP TABLE contents









