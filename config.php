<?php
$host = "localhost"; // atau Azure host jika di cloud
$username = "root"; // atau username Azure
$password = ""; // atau password Azure
$database = "logistik_db"; // <- harus sama persis

$conn = mysqli_init();
if (!$conn) {
    die('mysqli_init gagal');
}

// Pastikan parameter $database tidak dikosongkan
mysqli_real_connect($conn, $host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

