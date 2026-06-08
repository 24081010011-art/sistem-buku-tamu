<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "sistem_buku_tamu"
);

if (!$conn) {
    die("Koneksi gagal");
}
?>