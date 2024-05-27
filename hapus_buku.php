<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM data_buku WHERE id=$id");

    header("Location: list_buku.php");