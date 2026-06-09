<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

$current = basename($_SERVER['PHP_SELF']);

?>

<?php

$current = basename($_SERVER['PHP_SELF']);

?>

<div class="sidebar">

    <div class="logo">
        Buku<br>Tamu
    </div>

    <div class="menu">

        <a href="dashboard.php"
           class="<?= $current=='dashboard.php' ? 'active' : '' ?>">
            Dashboard
        </a>

        <a href="data_tamu.php"
           class="<?= $current=='data_tamu.php' ? 'active' : '' ?>">
            Data Tamu
        </a>

        <a href="tambah_tamu.php"
           class="<?= $current=='tambah_tamu.php' ? 'active' : '' ?>">
            Tambah Tamu
        </a>

        <?php if($_SESSION['role']=='admin'){ ?>

        <a href="kelola_user.php"
           class="<?= $current=='kelola_user.php' ? 'active' : '' ?>">
            Kelola User
        </a>

        <?php } ?>

        <a href="logout.php">
            Logout
        </a>

    </div>

</div>