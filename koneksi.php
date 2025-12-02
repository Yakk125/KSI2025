<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "db_data";
// Create connection
$conn = mysqli_connect(hostname: $severname, username: $username, password: $password, database: $database);

// Check connection
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

echo "Koneksi Berhasil";
?>
