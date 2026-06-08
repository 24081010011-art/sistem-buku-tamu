<?php
require 'cek_login.php';

if($_SESSION['role'] != 'user'){
    header("Location: dashboard_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Dashboard User</h2>

    <p>Selamat datang,
        <b><?= $_SESSION['nama']; ?></b>
    </p>

    <div class="mt-4">

        <a href="data_tamu.php"
           class="btn btn-primary">
           Lihat Data Tamu
        </a>

        <a href="tambah_tamu.php"
           class="btn btn-success">
           Tambah Tamu
        </a>

        <a href="logout.php"
           class="btn btn-danger">
           Logout
        </a>

    </div>

</div>

</body>
</html>