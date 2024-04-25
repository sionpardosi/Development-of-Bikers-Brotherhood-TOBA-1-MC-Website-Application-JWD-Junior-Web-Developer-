<?php

// Memanggil fungsi dari file query.php
include 'functions/query.php';

$kata_pengantar = kata_pengantar();
$cek_kata_pengantar = $kata_pengantar->fetch_assoc();
if ($cek_kata_pengantar) {
    $kata_pengantar = $cek_kata_pengantar['content'];
}else{
    $kata_pengantar = '<h3>Konten Belum Tersedia</h3>';
}


$video_home = video_home();
$cek_video_home = $video_home->fetch_assoc();
if ($cek_video_home) {
    $video_home = $cek_video_home['content'];
}else{
    $video_home = 'O8zmISoEB9U';
}

$pengalaman_profile = pengalaman_profile();
$kelebihan_profile = kelebihan_profile();

$visi_vmission = visi_vmission();
$cek_visi_vmission = $visi_vmission->fetch_assoc();
if ($cek_visi_vmission) {
    $visi_vmission = $cek_visi_vmission['content'];
}else{
    $visi_vmission = 'Belum ada Visi';
}

$misi_vmission = misi_vmission();

$gambar_vmission = gambar_vmission();
$cek_gambar_vmission = $gambar_vmission->fetch_assoc();
if ($cek_gambar_vmission) {
    $gambar_vmission = $cek_gambar_vmission['content'];
}else{
    $gambar_vmission = 'visimisi.jpg';
}

$teks_about = teks_about();
$cek_teks_about = $teks_about->fetch_assoc();
if ($cek_teks_about) {
    $teks_about = $cek_teks_about['content'];
}else{
    $teks_about = '<h3>Konten Belum Tersedia</h3>';
}
$gambar_about = gambar_about();

?>
