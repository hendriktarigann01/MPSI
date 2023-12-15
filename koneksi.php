<?php
$servername = "localhost";
$database = "db_user";
$namalengkap = "root";
$password = "";

$conn = mysqli_connect($servername, $namalengkap, $password, $database);

if (!$conn) {
    die("Koneksi gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}