<?php

session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];

if(
    empty($nama) ||
    empty($instansi) ||
    empty($tujuan) ||
    empty($tanggal)
){
    die("Semua data wajib diisi!");
}

$user_id = $_SESSION['id'];

mysqli_query(
$conn,
"INSERT INTO tamu
(nama,instansi,tujuan,tanggal,user_id)
VALUES
('$nama','$instansi','$tujuan','$tanggal','$user_id')"
);

header("Location: data_tamu.php");