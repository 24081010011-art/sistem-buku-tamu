```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User - Sistem Buku Tamu</title>

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
            <h3>Kelola User</h3>
            <span class="admin-text">Admin</span>
        </div>

        <div class="card table-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <h4 class="fw-semibold mb-0">
                        Daftar User
                    </h4>

                </div>

                <div class="mb-4">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Cari user...">
                </div>

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

                            <tr>
                                <td>1</td>
                                <td>admin</td>
                                <td>Admin</td>

                                <td>
                                    <span class="badge bg-success">
                                        Aktif
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-danger btn-sm">
                                        Nonaktifkan
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>operator1</td>
                                <td>User</td>

                                <td>
                                    <span class="badge bg-success">
                                        Aktif
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-danger btn-sm">
                                        Nonaktifkan
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>operator2</td>
                                <td>User</td>

                                <td>
                                    <span class="badge bg-secondary">
                                        Nonaktif
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-success btn-sm">
                                        Aktifkan
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>operator3</td>
                                <td>User</td>

                                <td>
                                    <span class="badge bg-success">
                                        Aktif
                                    </span>
                                </td>

                                <td>
                                    <button class="btn btn-outline-danger btn-sm">
                                        Nonaktifkan
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
