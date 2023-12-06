<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan_wp";

// Membuat koneksi ke database menggunakan MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
