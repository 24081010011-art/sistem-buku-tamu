<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM tamu WHERE id='$id'"
);

header("Location: data_tamu.php");
exit;