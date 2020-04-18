<?php

    //mengecek apakah ada id yang dikirikan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $buku = query("SELECT * FROM buku WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040023</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $buku["cover"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $buku["judul_buku"]; ?></p>
            <p><?= $buku["kategori"]; ?></p>
            <p><?= $buku["author"]; ?></p>
            <p><?= $buku["penerbit"]; ?></p>
            <p><?= $buku["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>