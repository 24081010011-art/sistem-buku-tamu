<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM tamu");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Tamu</title>
</head>
<body>

<h2>Data Tamu</h2>

<a href="tambah_tamu.php">Tambah Tamu</a>
<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Instansi</th>
    <th>Tujuan</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($result)){
?>

<tr>

    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['instansi']; ?></td>
    <td><?= $row['tujuan']; ?></td>
    <td><?= $row['tanggal']; ?></td>

    <td>
        <a href="edit_tamu.php?id=<?= $row['id']; ?>">
            Edit
        </a>

        |

        <a href="hapus_tamu.php?id=<?= $row['id']; ?>"
           onclick="return confirm('Yakin ingin menghapus data ini?')">
            Hapus
        </a>
    </td>

</tr>

<?php
}
?>

</table>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>