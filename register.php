<?php
require 'koneksi.php';
$nik = $_POST["nik"];
$namalengkap = $_POST["namalengkap"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO tbl_user (nik, namalengkap, password, email)
            VALUES ('$nik', '$namalengkap', '$password', '$email')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}