<!DOCTYPE html>
<html lang="en">
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

    <!-- Sidebar -->
    <div class="sidebar">

        <h4 class="logo">Buku Tamu</h4>

        <ul class="menu">

            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li>
                <a href="data_tamu.php">Data Tamu</a>
            </li>

            <li>
                <a href="tambah_tamu.php">Tambah Tamu</a>
            </li>

            <li class="active">
                <a href="edit_tamu.php">Edit Tamu</a>
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

        <div class="topbar">
            <h3>Edit Tamu</h3>
            <span class="admin-text">Admin</span>
        </div>

        <div class="card table-card">

            <div class="card-body p-4">

                <h4 class="mb-4">
                    Form Edit Data Tamu
                </h4>

                <form>

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Tamu
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Andi Pratama">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Instansi
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="Institut Teknologi Sepuluh Nopember">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Tujuan Kunjungan
                        </label>

                        <textarea
                            class="form-control"
                            rows="4">Konsultasi terkait kegiatan organisasi mahasiswa</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Tanggal Kunjungan
                        </label>

                        <input
                            type="date"
                            class="form-control"
                            value="2026-06-07">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            Status
                        </label>

                        <select class="form-select">
                            <option selected>Aktif</option>
                            <option>Selesai</option>
                            <option>Menunggu</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            class="btn btn-primary px-4">
                            Update
                        </button>

                        <button
                            type="button"
                            onclick="window.location.href='data_tamu.php'"
                            class="btn btn-secondary px-4">
                            Batal
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```
