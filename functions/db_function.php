<?php
// Include file koneksi ke database
include 'config/database.php';

// Fungsi untuk mengeksekusi query SELECT
function select($query) {
    global $conn;
    $result = $conn->query($query);
    if (!$result) {
        die("Error: " . $conn->error);
    }
    return $result;
}

// Fungsi untuk mengeksekusi query INSERT, UPDATE, DELETE
function execute($query) {
    global $conn;
    $result = $conn->query($query);
    if (!$result) {
        die("Error: " . $conn->error);
    }
    return $result;
}

// Fungsi untuk mendapatkan satu baris data
function get_single_row($query) {
    $result = select($query);
    return $result->fetch_assoc();
}

// Fungsi untuk mendapatkan semua baris data
function get_all_rows($query) {
    $result = select($query);
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk melarikan tanda kutip untuk mencegah SQL Injection
function escape_string($value) {
    global $conn;
    return $conn->real_escape_string($value);
}
?>
