<?php
//menghubungkan dengan file php lainya
require 'functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>

    <style>
        img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }
        button {
      background:green;
      color:black;
      font-size: medium;
      
    }
    </style>

</head>
<body>
    <h1><center> Daftar Buku </center> </h1>

    <table border= "1" cellpadding="10" cellspacing="0">
    <div class="add">
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
  
  <br>
    <tr>
        <th>No.</th>
        <th>Opsi</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Author</th>
        <th>Penerbit</th>
        <th>Harga</th>
    </tr>

    </div>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
    <td>
    <button><a href="ubah.php?id=<?= $row['id'];?>">ubah</a> 
    <button><a href="hapus.php?id=<?= $row['id']; ?> "onclick="return confirm('are you serious?');">hapus</a></button>
        </td>
        <td><img src="../img/<?php echo $row["cover"]; ?>" width="60"></td>
        <td><?= $row["judul_buku"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["author"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["harga"]; ?></td>

    </tr>
    <?php endforeach; ?>
</body>
</html>