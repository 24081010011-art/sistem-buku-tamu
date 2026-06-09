<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$judul = "Data Tamu";

$query = mysqli_query(
    $conn,
    "SELECT * FROM tamu ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="wrapper">

    <?php include 'layout/sidebar.php'; ?>

    <div class="main-content">

        <div class="topbar">

            <h1>Data Tamu</h1>

            <span class="admin-text">
                <?= $_SESSION['nama']; ?>
            </span>

        </div>

        <div class="section-header">

            <h3>Daftar Data Tamu</h3>

            <a href="tambah_tamu.php" class="btn btn-primary">
                + Tambah Tamu
            </a>

        </div>

        <input
            type="text"
            id="searchInput"
            class="form-control search-box mb-4"
            placeholder="Cari nama tamu, instansi, tujuan..."
        >

        <div class="card table-card">

            <div class="card-body">

                <table
                    class="table align-middle"
                    id="tabelTamu"
                >

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Tujuan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php
                    $no = 1;

                    while($row = mysqli_fetch_assoc($query)){
                    ?>

                        <tr>

                            <td><?= $no++ ?></td>

                            <td><?= htmlspecialchars($row['nama']) ?></td>

                            <td><?= htmlspecialchars($row['instansi']) ?></td>

                            <td><?= htmlspecialchars($row['tujuan']) ?></td>

                            <td>
                                <?= date(
                                    'd M Y',
                                    strtotime($row['tanggal'])
                                ) ?>
                            </td>

                            <td>

                                <a
                                    href="edit_tamu.php?id=<?= $row['id'] ?>"
                                    class="btn btn-warning btn-sm"
                                >
                                    Edit
                                </a>

                                <a
                                    href="hapus_tamu.php?id=<?= $row['id'] ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                >
                                    Hapus
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script>

document
.getElementById('searchInput')
.addEventListener('keyup', function(){

    let value =
    this.value.toLowerCase();

    let rows =
    document.querySelectorAll(
        '#tabelTamu tbody tr'
    );

    rows.forEach(function(row){

        let text =
        row.innerText.toLowerCase();

        row.style.display =
        text.includes(value)
        ? ''
        : 'none';

    });

});

</script>

<script>
window.onload = function() {

    const input = document.getElementById("searchInput");
    const rows = document.querySelectorAll("#tabelTamu tbody tr");

    input.addEventListener("keyup", function() {

        let keyword = input.value.toLowerCase();

        rows.forEach(function(row) {

            let isi = row.textContent.toLowerCase();

            if (isi.indexOf(keyword) > -1) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }

        });

    });

}
</script>

<script>
document.getElementById("searchInput").addEventListener("keyup", function() {

    let keyword = this.value.toLowerCase();

    let rows = document.querySelectorAll("tbody tr");

    console.log("Jumlah baris:", rows.length);

    rows.forEach(function(row){

        let text = row.textContent.toLowerCase();

        console.log(text);

        if(text.includes(keyword)){
            row.style.display = "";
        }else{
            row.style.display = "none";
        }

    });

});
</script>

</body>
</html>