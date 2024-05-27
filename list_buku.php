<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM data_buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">DAFTAR BUKU</h1>
    <br>
        <table class="tabel" border="1">
            <tr>
                <td style="font-weight: bold;">Nama</td>
                <td style="font-weight: bold;">ISBN</td>
                <td style="font-weight: bold;">Unit</td>
                <td style="font-weight: bold;">ACTION</td>
            </tr>

        <?php foreach($query as $buku){?>
            <tr>
                <td><?php echo $buku["judul_buku"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a href=<?php echo "edit_buku.php?id=" . $buku["id"] ?>>Edit</a> |
                    <a href=<?php echo "hapus_buku.php?id=" . $buku["id"] ?>>Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    <br>
    <br>
    <div class="div1">
        <form action="./addform_buku.php">
            <button class="btn">Tambahkan Buku</button>
        </form>
        <br>
        <br>
        <form action="./index.php">
            <button class="btn">Halaman Utama</button>
        </form>
    </div>
</body>
</html>