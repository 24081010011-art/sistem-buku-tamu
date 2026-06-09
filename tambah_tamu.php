<?php
require 'cek_login.php';
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama_tamu'];
    $instansi = $_POST['instansi'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal_kunjungan'];
    $user_id = $_SESSION['id'];

    $user_id = $_SESSION['id'];

    $query = mysqli_query(
        $conn,
        "INSERT INTO tamu
        (
            nama,
            instansi,
            tujuan,
            tanggal,
            user_id
        )
        VALUES
        (
            '$nama',
            '$instansi',
            '$tujuan',
            '$tanggal',
            '$user_id'
        )"
    );

    if($query){

        if($_SESSION['role']=='admin'){

            echo "<script>
                    alert('Data berhasil disimpan');
                    window.location='data_tamu.php';
                  </script>";

        }else{

            echo "<script>
                    alert('Konsultasi berhasil ditambahkan');
                    window.location='dashboard_user.php';
                  </script>";

        }

        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Tamu - Sistem Buku Tamu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="wrapper">

    <?php include 'layout/sidebar.php'; ?>

    <div class="main-content">

        <div class="topbar">

            <h3>Tambah Tamu</h3>

            <span class="admin-text">
                <?= ucfirst($_SESSION['role']); ?>
            </span>

        </div>

        <div class="card table-card">

            <div class="card-body p-4">

                <h4 class="mb-4">
                    Form Tambah Data Tamu
                </h4>

                <form method="POST">

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Tamu
                        </label>

                        <input
                            type="text"
                            name="nama_tamu"
                            class="form-control"
                            placeholder="Masukkan nama tamu"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Instansi
                        </label>

                        <input
                            type="text"
                            name="instansi"
                            class="form-control"
                            placeholder="Masukkan instansi">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tujuan Kunjungan
                        </label>

                        <textarea
                            name="tujuan"
                            class="form-control"
                            rows="4"
                            placeholder="Masukkan tujuan kunjungan"
                            required></textarea>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tanggal Kunjungan
                        </label>

                        <input
                            type="date"
                            name="tanggal_kunjungan"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="Aktif">
                                Aktif
                            </option>

                            <option value="Selesai">
                                Selesai
                            </option>

                            <option value="Menunggu">
                                Menunggu
                            </option>

                        </select>

                    </div>

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            name="simpan"
                            class="btn btn-primary px-4">

                            Simpan

                        </button>

                        <?php if($_SESSION['role']=='admin'){ ?>

                            <a href="data_tamu.php"
                               class="btn btn-secondary px-4">

                                Batal

                            </a>

                        <?php }else{ ?>

                            <a href="dashboard_user.php"
                               class="btn btn-secondary px-4">

                                Batal

                            </a>

                        <?php } ?>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>