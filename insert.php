<?php
include 'koneksi.php';
$nama = "Aryakk";
$email = "aryakk@gmail.com";
$alamat = "Rajabasa, Bandar Lampung";

$sql = "INSERT INTO pelanggan (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')";
if (mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data Berhasil ditambahkan ke Database";
} else {
    echo "Gagal" . mysqli_error(mysql: $conn);
}

mysqli_close($conn);
?>