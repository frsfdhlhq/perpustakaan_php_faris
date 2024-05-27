<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM data_staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){

        $staff_nama = $_POST["nama"];
        $staff_telp = $_POST["telp"];
        $staff_email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE data_staff SET nama='$staff_nama',
        telp='$staff_telp', email='$staff_email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Staff</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <h1 class="header">EDIT STAFF</h1>

    <div class="div1">
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" type="text" name="nama" id="nama">
        
        <br>
        <br>

        <label for="telp">No. Telp</label>
        <input value="<?php echo $staff['telp'] ?>" type="text" name="telp" id="telp">
        
        <br>
        <br>
        
        <label for="email">Email</label>
        <input value="<?php echo $staff['email'] ?>" type="email" name="email" id="email">
        
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