<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tamu WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tamu</title>
</head>
<body>

<h2>Edit Data Tamu</h2>

<form action="update_tamu.php" method="POST">

<input type="hidden" name="id" value="<?= $data['id']; ?>">

Nama:
<input type="text" name="nama" value="<?= $data['nama']; ?>">
<br><br>

Instansi:
<input type="text" name="instansi" value="<?= $data['instansi']; ?>">
<br><br>

Tujuan:
<textarea name="tujuan"><?= $data['tujuan']; ?></textarea>
<br><br>

Tanggal:
<input type="date" name="tanggal" value="<?= $data['tanggal']; ?>">
<br><br>

<button type="submit">Update</button>

</form>

</body>
</html>