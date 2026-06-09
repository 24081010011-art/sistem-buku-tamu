<?php
require 'cek_login.php';
include 'koneksi.php';

if($_SESSION['role'] != 'user'){
    header("Location: dashboard.php");
    exit;
}

$user_id = $_SESSION['id'];

$total_konsultasi = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM tamu
        WHERE user_id='$user_id'"
    )
);

$total_selesai = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM tamu
        WHERE user_id='$user_id'
        AND status='Selesai'"
    )
);

$total_aktif = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM tamu
        WHERE user_id='$user_id'
        AND status='Aktif'"
    )
);

$total_menunggu = mysqli_num_rows(
    mysqli_query(
        $conn,
        "SELECT * FROM tamu
        WHERE user_id='$user_id'
        AND status='Menunggu'"
    )
);

$riwayat = mysqli_query(
    $conn,
    "SELECT *
    FROM tamu
    WHERE user_id='$user_id'
    ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f7fb;
}

.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:linear-gradient(180deg,#2563eb,#1e40af);
    padding:25px;
    color:white;
}

.sidebar h3{
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:12px;
    border-radius:10px;
    margin-bottom:10px;
}

.sidebar a:hover{
    background:rgba(255,255,255,.15);
}

.content{
    margin-left:270px;
    padding:30px;
}

.welcome-card{
    background:linear-gradient(135deg,#2563eb,#3b82f6);
    color:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:25px;
}

.stat-card{
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 3px 15px rgba(0,0,0,.08);
}

.stat-card h2{
    font-weight:bold;
}

.table-card{
    background:white;
    border-radius:18px;
    padding:20px;
    margin-top:25px;
    box-shadow:0 3px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>

<div class="sidebar">

    <h3>Buku Tamu</h3>

    <a href="dashboard_user.php">
        Dashboard
    </a>

    <a href="logout.php">
        Logout
    </a>

</div>

<div class="content">

    <div class="welcome-card">

        <h2>
            Halo, <?= $_SESSION['nama']; ?>
        </h2>

        <p class="mb-0">
            Selamat datang di Sistem Buku Tamu Digital
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-3">

            <div class="stat-card">

                <h6>Total Konsultasi</h6>

                <h2><?= $total_konsultasi; ?></h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                <h6>Selesai</h6>

                <h2><?= $total_selesai; ?></h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                <h6>Aktif</h6>

                <h2><?= $total_aktif; ?></h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                <h6>Menunggu</h6>

                <h2><?= $total_menunggu; ?></h2>

            </div>

        </div>

    </div>

    <div class="table-card">

        <h4 class="mb-4">
            Riwayat Konsultasi Saya
        </h4>

        <div class="table-responsive">

            <table class="table table-hover">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Tujuan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($data = mysqli_fetch_assoc($riwayat)){ ?>

                    <tr>

                        <td><?= $data['nama_tamu']; ?></td>

                        <td><?= $data['instansi']; ?></td>

                        <td><?= $data['tujuan']; ?></td>

                        <td><?= $data['tanggal_kunjungan']; ?></td>

                        <td>

                            <?php
                            if($data['status']=="Selesai"){
                                echo '<span class="badge bg-success">Selesai</span>';
                            }
                            elseif($data['status']=="Aktif"){
                                echo '<span class="badge bg-primary">Aktif</span>';
                            }
                            else{
                                echo '<span class="badge bg-secondary">Menunggu</span>';
                            }
                            ?>

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