<?php
require 'cek_login.php';
include 'koneksi.php';

if($_SESSION['role'] != 'admin'){
    header("Location: dashboard_user.php");
    exit;
}

if(isset($_GET['ubah_status'])){

    $id = $_GET['ubah_status'];

    $cek = mysqli_query(
        $conn,
        "SELECT * FROM user
        WHERE id='$id'"
    );

    $data = mysqli_fetch_assoc($cek);

    if($data){

        if($data['status'] == 'Aktif'){
            $status_baru = 'Nonaktif';
        }else{
            $status_baru = 'Aktif';
        }

        mysqli_query(
            $conn,
            "UPDATE user
            SET status='$status_baru'
            WHERE id='$id'"
        );

        echo "<script>
                window.location='kelola_user.php';
              </script>";
        exit;
    }
}

$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

if($cari != ''){

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM user
        WHERE username LIKE '%$cari%'
        ORDER BY id ASC"
    );

}else{

    $query = mysqli_query(
        $conn,
        "SELECT *
        FROM user
        ORDER BY id ASC"
    );

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kelola User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="wrapper">

    <div class="sidebar">

        <h4 class="logo">
            Buku Tamu
        </h4>

        <ul class="menu">

            <li>
                <a href="dashboard.php">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="data_tamu.php">
                    Data Tamu
                </a>
            </li>

            <li>
                <a href="tambah_tamu.php">
                    Tambah Tamu
                </a>
            </li>

            <li class="active">
                <a href="kelola_user.php">
                    Kelola User
                </a>
            </li>

            <li>
                <a href="logout.php">
                    Logout
                </a>
            </li>

        </ul>

    </div>

    <div class="main-content">

        <div class="topbar">

            <h3>
                Kelola User
            </h3>

            <span class="admin-text">
                Admin
            </span>

        </div>

        <div class="card table-card">

            <div class="card-body">

                <h4 class="fw-semibold mb-4">
                    Daftar User
                </h4>

                <form method="GET" class="mb-4">

                    <input
                        type="text"
                        name="cari"
                        class="form-control"
                        placeholder="Cari user..."
                        value="<?= $cari; ?>">

                </form>

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th width="180">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                        <?php
                        $no = 1;

                        while($data = mysqli_fetch_assoc($query)){
                        ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td><?= $data['username']; ?></td>

                            <td>
                                <?= ucfirst($data['role']); ?>
                            </td>

                            <td>

                                <?php if($data['status']=='Aktif'){ ?>

                                    <span class="badge bg-success">
                                        Aktif
                                    </span>

                                <?php }else{ ?>

                                    <span class="badge bg-secondary">
                                        Nonaktif
                                    </span>

                                <?php } ?>

                            </td>

                            <td>

                                <?php if($data['id'] != $_SESSION['id']){ ?>

                                    <?php if($data['status']=='Aktif'){ ?>

                                        <a
                                            href="?ubah_status=<?= $data['id']; ?>"
                                            class="btn btn-outline-danger btn-sm">

                                            Nonaktifkan

                                        </a>

                                    <?php }else{ ?>

                                        <a
                                            href="?ubah_status=<?= $data['id']; ?>"
                                            class="btn btn-outline-success btn-sm">

                                            Aktifkan

                                        </a>

                                    <?php } ?>

                                <?php }else{ ?>

                                    <span class="text-muted">
                                        Akun Saya
                                    </span>

                                <?php } ?>

                            </td>

                        </tr>

                        <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>