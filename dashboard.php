<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Buku Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">

        <h4 class="logo">Buku Tamu</h4>

        <ul class="menu">
            <li class="active">
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li>
                <a href="data_tamu.php">Data Tamu</a>
            </li>

            <li>
                <a href="tambah_tamu.php">Tambah Tamu</a>
            </li>

            <li>
                <a href="kelola_user.php">Kelola User</a>
            </li>

            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Topbar -->
        <div class="topbar">
            <h3>Dashboard</h3>

            <span class="admin-text">
                Admin
            </span>
        </div>

        <!-- Statistik -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card dashboard-card">
                    <h6>Total Tamu</h6>
                    <h2>125</h2>
                    <small class="text-muted">
                        Data keseluruhan
                    </small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    <h6>Kunjungan Hari Ini</h6>
                    <h2>12</h2>
                    <small class="text-muted">
                        Hari ini
                    </small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    <h6>Total User</h6>
                    <h2>4</h2>
                    <small class="text-muted">
                        Pengguna aktif
                    </small>
                </div>
            </div>

        </div>

        <!-- Header Tabel -->
        <div class="d-flex justify-content-between align-items-center mt-5 mb-4">

            <h4 class="fw-semibold mb-0">
                Data Tamu Terbaru
            </h4>

            <a href="tambah_tamu.php"
               class="btn btn-primary px-4">
                + Tambah Tamu
            </a>

        </div>

        <!-- Search -->
        <div class="mb-4">
            <input
                type="text"
                class="form-control"
                placeholder="Cari data tamu...">
        </div>

        <!-- Table -->
        <div class="card table-card">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Tujuan</th>
                                <th>Tanggal</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Andi</td>
                                <td>ITS</td>
                                <td>Konsultasi</td>
                                <td>07 Juni 2026</td>

                                <td>
                                    <a href="edit_tamu.php"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        onclick="confirm('Yakin ingin menghapus data?')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Budi</td>
                                <td>UB</td>
                                <td>Kunjungan</td>
                                <td>07 Juni 2026</td>

                                <td>
                                    <a href="edit_tamu.php"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        onclick="confirm('Yakin ingin menghapus data?')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Siti</td>
                                <td>UM</td>
                                <td>Wawancara</td>
                                <td>07 Juni 2026</td>

                                <td>
                                    <a href="edit_tamu.php"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                    </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        onclick="confirm('Yakin ingin menghapus data?')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```
