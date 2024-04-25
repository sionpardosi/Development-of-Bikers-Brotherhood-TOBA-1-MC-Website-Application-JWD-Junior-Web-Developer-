<?php
// Konfigurasi koneksi database
$host = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$database = "web_motor_toba";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menutup koneksi
// $conn->close();
?>
