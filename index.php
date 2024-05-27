<?php
    session_start();

    if(!isset($_SESSION['email'])) {

        header("Location: login.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">APLIKASI PERPUSTAKAAN ONLINE</h1>
    <div class="div1">
        <form action="./list_buku.php">
            <button class="btn">Lihat Daftar buku</button>
        </form>
        <br>
        <br>
        <form action="./list_staff.php">
            <button class="btn">Lihat Daftar staff</button>
        </form>
        <br>
        <br>
        <form action="./logout_proccess.php" method="POST">
            <button class="btn" type="submit">LOGOUT</button>
        </form>
    </div>
    </body>
</html>