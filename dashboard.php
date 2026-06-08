<?php
require 'cek_login.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard Sistem Buku Tamu</h1>

<p>Selamat datang, <?= $_SESSION['nama']; ?></p>

<hr>

<a href="data_tamu.php">Data Tamu</a>
|
<a href="tambah_tamu.php">Tambah Tamu</a>
|
<a href="logout.php">Logout</a>

</body>
</html>