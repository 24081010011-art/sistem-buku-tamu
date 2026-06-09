<?php

session_start();
include 'koneksi.php';

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$stmt = mysqli_prepare(
    $conn,
    "SELECT * FROM users WHERE username=?"
);

mysqli_stmt_bind_param(
    $stmt,
    "s",
    $username
);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) == 1){

    $user = mysqli_fetch_assoc($result);

    if(password_verify($password,$user['password'])){

        $_SESSION['id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == 'admin'){
            header("Location: dashboard.php");
        }else{
            header("Location: dashboard_user.php");
        }

        exit;
    }
}

header("Location: login.php?error=1");
exit;