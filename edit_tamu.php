<?php
require 'cek_login.php';
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM tamu WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $update = mysqli_query(
        $conn,
        "UPDATE tamu SET
        nama='$nama',
        instansi='$instansi',
        tujuan='$tujuan',
        tanggal='$tanggal',
        status='$status'
        WHERE id='$id'"
    );

    if($update){

        echo "<script>
                alert('Data berhasil diupdate');
                window.location='data_tamu.php';
              </script>";
        exit;

    }else{

        echo mysqli_error($conn);

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Tamu - Sistem Buku Tamu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="wrapper">

    <?php include 'layout/sidebar.php'; ?>

    <div class="main-content">

        <div class="topbar">

            <h3>Edit Tamu</h3>

            <span class="admin-text">
                <?= ucfirst($_SESSION['role']); ?>
            </span>

        </div>

        <div class="card table-card">

            <div class="card-body p-4">

                <h4 class="mb-4">
                    Form Edit Data Tamu
                </h4>

                <form method="POST">

                    <input
                        type="hidden"
                        name="id"
                        value="<?= $data['id']; ?>">

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Tamu
                        </label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            value="<?= $data['nama']; ?>"
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
                            value="<?= $data['instansi']; ?>">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tujuan Kunjungan
                        </label>

                        <textarea
                            name="tujuan"
                            class="form-control"
                            rows="4"
                            required><?= $data['tujuan']; ?></textarea>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tanggal Kunjungan
                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            class="form-control"
                            value="<?= $data['tanggal']; ?>"
                            required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="Menunggu"
                            <?= ($data['status']=='Menunggu') ? 'selected' : ''; ?>>
                            Menunggu
                            </option>

                            <option value="Aktif"
                            <?= ($data['status']=='Aktif') ? 'selected' : ''; ?>>
                            Aktif
                            </option>

                            <option value="Selesai"
                            <?= ($data['status']=='Selesai') ? 'selected' : ''; ?>>
                            Selesai
                            </option>

                        </select>

                    </div>

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            name="update"
                            class="btn btn-primary px-4">
                            Update
                        </button>

                        <?php if($_SESSION['role']=='admin'){ ?>

                            <a href="data_tamu.php"
                               class="btn btn-secondary px-4">

                                Kembali

                            </a>

                        <?php }else{ ?>

                            <a href="dashboard_user.php"
                               class="btn btn-secondary px-4">

                                Kembali

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