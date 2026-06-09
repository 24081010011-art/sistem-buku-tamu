<?php

session_start();
include 'koneksi.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['role'] != 'admin') {
    header("Location: access_denied.php");
    exit;
}

$judul = "Dashboard";

/* Statistik */

$total_tamu = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM tamu")
);

$total_user = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM users")
);

$today = date('Y-m-d');

$kunjungan_hari_ini = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM tamu WHERE tanggal='$today'"
    )
);

/* Search */

if (isset($_GET['cari']) && $_GET['cari'] != '') {

    $cari = mysqli_real_escape_string(
        $conn,
        $_GET['cari']
    );

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM tamu
        WHERE nama LIKE '%$cari%'
        OR instansi LIKE '%$cari%'
        OR tujuan LIKE '%$cari%'
        ORDER BY id DESC"
    );

} else {

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM tamu
        ORDER BY id DESC
        LIMIT 10"
    );

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="wrapper">

    <?php include 'layout/sidebar.php'; ?>

    <div class="main">

        <?php include 'layout/navbar.php'; ?>

        <!-- Statistik -->

        <div class="stats-container">

            <div class="stats-card">

                <span>Total Tamu</span>

                <h2><?= $total_tamu ?></h2>

                <small>Data keseluruhan</small>

            </div>

            <div class="stats-card">

                <span>Kunjungan Hari Ini</span>

                <h2><?= $kunjungan_hari_ini ?></h2>

                <small>Hari ini</small>

            </div>

            <div class="stats-card">

                <span>Total User</span>

                <h2><?= $total_user ?></h2>

                <small>Pengguna aktif</small>

            </div>

        </div>

        <!-- Header -->

        <div class="section-header">

            <h2>Data Tamu Terbaru</h2>

            <a href="tambah_tamu.php" class="btn-tambah">
                + Tambah Tamu
            </a>

        </div>

        <!-- Search -->

        <form method="GET">

            <input
                type="text"
                name="cari"
                class="search-box"
                placeholder="Cari nama tamu, instansi, tujuan..."
                value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>"
            >

        </form>

        <?php if (isset($_GET['cari']) && $_GET['cari'] != '') { ?>

            <a href="dashboard.php" class="btn-reset">
                Reset Pencarian
            </a>

        <?php } ?>

        <!-- Tabel -->

        <div class="table-card">

            <table>

                <thead>

                    <tr>

                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Tujuan</th>
                        <th>Tanggal</th>

                    </tr>

                </thead>

                <tbody>

                <?php

                if(mysqli_num_rows($query) > 0){

                    while($row = mysqli_fetch_assoc($query)){

                ?>

                    <tr>

                        <td><?= htmlspecialchars($row['nama']) ?></td>

                        <td><?= htmlspecialchars($row['instansi']) ?></td>

                        <td><?= htmlspecialchars($row['tujuan']) ?></td>

                        <td><?= date('d M Y', strtotime($row['tanggal'])) ?></td>

                    </tr>

                <?php

                    }

                } else {

                ?>

                    <tr>

                        <td colspan="4" style="text-align:center">

                            Data tidak ditemukan

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>

</html>