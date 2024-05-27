<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM data_buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){

        $buku_nama = $_POST["judul_buku"];
        $buku_ISBN = $_POST["isbn"];
        $buku_unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE data_buku SET judul_buku='$buku_nama',
        isbn='$buku_ISBN', unit=$buku_unit WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit buku</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">EDIT BUKU</h1>

    <div class="div1">
    <form action="" method="POST">
        <label for="judul_buku">Nama</label>
        <input value="<?php echo $buku['judul_buku'] ?>" type="text" name="judul_buku" id="judul_buku">
        
        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku['isbn'] ?>" type="number" name="isbn" id="isbn">
        
        <br>
        <br>
        
        <label for="unit">Unit</label>
        <input value="<?php echo $buku['unit'] ?>" type="number" name="unit" id="unit">
        
        <br>
        <br>

        <button class="btn" id="btn_submit" type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <form action="./list_buku.php">
        <button class="btn">Kembali ke daftar buku</button>
    </form>
    </div>
    <br>

</body>
</html>