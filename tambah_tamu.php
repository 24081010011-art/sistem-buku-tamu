<?php
session_start();

if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tamu</title>
</head>
<body>

<h2>Tambah Data Tamu</h2>

<form action="simpan_tamu.php" method="POST">

Nama :
<input type="text" name="nama" required>
<br><br>

Instansi :
<input type="text" name="instansi" required>
<br><br>

Tujuan :
<textarea name="tujuan" required></textarea>
<br><br>

Tanggal :
<input type="date" name="tanggal" required>
<br><br>

<button type="submit">
Simpan
</button>

</form>

</body>
</html>