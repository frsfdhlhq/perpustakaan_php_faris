<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){

        $staff_nama = $_POST["nama"];
        $staff_telp = $_POST["telp"];
        $staff_email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO data_staff VALUES (
            NULL, '$staff_nama', '$staff_telp', '$staff_email'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form penambahan staff</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">PENAMBAHAN STAFF</h1>

    <div class="div1">
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        
        <br>
        <br>

        <label for="telp">No. Telp</label>
        <input type="text" name="telp" id="telp">
        
        <br>
        <br>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        
        <br>
        <br>

        <button class="btn" id="btn_submit" type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <form action="./list_staff.php">
        <button class="btn">Kembali ke daftar staff</button>
    </form>
    </div>
</body>
</html>