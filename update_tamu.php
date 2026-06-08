<?php

include 'koneksi.php';

$id = $_POST['id'];
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

mysqli_query($conn,
"UPDATE tamu SET
nama='$nama',
instansi='$instansi',
tujuan='$tujuan',
tanggal='$tanggal'
WHERE id='$id'
");

header("Location: data_tamu.php");
exit;