<?php
session_start();

if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'admin'){
        header("Location: dashboard.php");
    }else{
        header("Location: dashboard_user.php");
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Sistem Buku Tamu</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter',sans-serif;
}

body{
    min-height:100vh;
    background:#F1F5F9;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{
    width:430px;
    background:#fff;
    padding:40px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.logo{
    width:70px;
    height:70px;
    margin:auto;
    margin-bottom:20px;
    border-radius:50%;
    background:#3563E9;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:26px;
    font-weight:bold;
}

h1{
    text-align:center;
    color:#24378D;
    margin-bottom:8px;
}

.subtitle{
    text-align:center;
    color:#6B7280;
    font-size:14px;
    line-height:1.6;
    margin-bottom:35px;
}

.input-group{
    position:relative;
    margin-bottom:25px;
}

.input-group input{
    width:100%;
    padding:16px;
    border:1px solid #D1D5DB;
    border-radius:12px;
    outline:none;
    font-size:15px;
    transition:.3s;
}

.input-group label{
    position:absolute;
    left:15px;
    top:16px;
    background:white;
    padding:0 5px;
    color:#9CA3AF;
    pointer-events:none;
    transition:.3s;
}

.input-group input:focus{
    border-color:#3563E9;
}

.input-group input:focus + label,
.input-group input:valid + label{
    top:-10px;
    font-size:12px;
    color:#3563E9;
}

.password-box{
    position:relative;
}

.password-box span{
    position:absolute;
    right:15px;
    top:17px;
    cursor:pointer;
    color:#6B7280;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#3563E9;
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    transform:translateY(-2px);
    background:#2449b8;
}

.error{
    margin-bottom:20px;
    padding:12px;
    background:#FEE2E2;
    color:#DC2626;
    border-radius:10px;
    text-align:center;
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#9CA3AF;
    font-size:13px;
}

</style>
</head>

<body>

<div class="login-card">

    <div class="logo">
        BT
    </div>

    <h1>Sistem Buku Tamu</h1>

    <div class="subtitle">
        Kelola data tamu dengan lebih mudah,
        cepat, dan aman melalui sistem berbasis web.
    </div>

    <?php
    if(isset($_GET['error'])){
        echo "<div class='error'>Username atau password salah.</div>";
    }
    ?>

    <form action="proses_login.php" method="POST">

        <div class="input-group">
            <input type="text" name="username" required>
            <label>Masukkan Username</label>
        </div>

        <div class="input-group password-box">
            <input type="password" id="password" name="password" required>
            <label>Masukkan Password</label>
            <span onclick="togglePassword()">👁</span>
        </div>

        <button type="submit">
            Masuk Sistem
        </button>

    </form>

    <div class="footer">
        Sistem Buku Tamu Digital
    </div>

</div>

<script>

function togglePassword(){

    let password =
        document.getElementById("password");

    if(password.type === "password"){
        password.type = "text";
    }else{
        password.type = "password";
    }
}

</script>

</body>
</html>