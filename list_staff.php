<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM data_staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff Perpustakaan</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">DAFTAR STAFF</h1>
    <br>
    <table class="tabel" border="1">
        <tr>
            <td style="font-weight: bold;">Nama</td>
            <td style="font-weight: bold;">Telp</td>
            <td style="font-weight: bold;">Email</td>
            <td style="font-weight: bold;">ACTION</td>
        </tr>

    <?php foreach($query as $staff){?>
        <tr>
            <td><?php echo $staff["nama"] ?></td>
            <td><?php echo $staff["telp"] ?></td>
            <td><?php echo $staff["email"] ?></td>
            <td>
                <a href=<?php echo "edit_staff.php?id=" . $staff["id"] ?>>Edit</a> |
                <a href=<?php echo "hapus_staff.php?id=" . $staff["id"] ?>>Hapus</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <br>
    <br>
    <div class="div1">
        <form action="./addform_staff.php">
            <button class="btn">Tambahkan staff</button>
        </form>
        <br>
        <br>
        <form action="./index.php">
            <button class="btn">Halaman Utama</button>
        </form>
    </div>
    
</body>
</html>