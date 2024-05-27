<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){

        $buku_nama = $_POST["judul_buku"];
        $buku_ISBN = $_POST["isbn"];
        $buku_unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO data_buku VALUES (
            NULL, '$buku_nama', '$buku_ISBN', $buku_unit
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penambahan buku</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">PENAMBAHAN BUKU</h1>

    <div class="div1">
    <form action="" method="POST">
        <label for="judul_buku">Nama</label>
        <input type="text" name="judul_buku" id="judul_buku">
        
        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" id="isbn">
        
        <br>
        <br>
        
        <label for="unit">Unit</label>
        <input type="number" name="unit" id="unit">
        
        <br>
        <br>

        <button class="btn" id="btn_submit" type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <form action="./list_buku.php">
        <button class="btn">Kembali ke daftar buku</button>
    </form>
    </div>
</body>
</html>