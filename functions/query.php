<?php
// controller.php

// Include file fungsi database
include 'db_function.php';

function kata_pengantar() {
    $query = "SELECT * FROM contents WHERE pages = 'home' AND category = 'kata_pengantar'";
    return select($query);
}
function video_home() {
    $query = "SELECT * FROM contents WHERE pages = 'home' AND category = 'video'";
    return select($query);
}
function pengalaman_profile() {
    $query = "SELECT * FROM contents WHERE pages = 'profile' AND category = 'pengalaman'";
    return select($query);
}
function kelebihan_profile() {
    $query = "SELECT * FROM contents WHERE pages = 'profile' AND category = 'kelebihan'";
    return select($query);
}
function visi_vmission() {
    $query = "SELECT * FROM contents WHERE pages = 'vission_mission' AND category = 'visi'";
    return select($query);
}
function misi_vmission() {
    $query = "SELECT * FROM contents WHERE pages = 'vission_mission' AND category = 'misi'";
    return select($query);
}
function gambar_vmission() {
    $query = "SELECT * FROM contents WHERE pages = 'vission_mission' AND category = 'gambar'";
    return select($query);
}
function teks_about() {
    $query = "SELECT * FROM contents WHERE pages = 'about_us' AND category = 'teks'";
    return select($query);
}
function gambar_about() {
    $query = "SELECT * FROM contents WHERE pages = 'about_us' AND category = 'gambar'";
    return select($query);
}

?>
