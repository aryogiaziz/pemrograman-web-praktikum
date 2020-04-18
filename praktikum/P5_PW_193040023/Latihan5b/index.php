<?php
  
   // menghubungkan dengan file php lainnya
   require 'php/functions.php';

   // melakukan query
   $buku = query("SELECT * FROM buku")

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  body {
      font-family: Arial, sans-serif;
    }
    table {
      border-collapse: collapse;
    }
    table, th, td {
    border: 2px solid black;
    text-align: center;
    margin: 5px 5px 5px 5px;
    }
    img{
      height: 200px;
      width: 200px;
      margin: 5px 5px 5px 5px;
    }
  
  </style>
  <title>193040023</title>
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>id</th>
                <th>cover</th>
                <th>Judul Buku</th>
                <th>kategori</th>
                <th>author</th>
                <th>penerbit</th>
                <th>harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($buku as $buku) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $buku["id"] ?></td>
                    <td><img src="assets/img/<?= $buku["cover"]; ?>"></td>
                    <td><?= $buku["judul_buku"] ?></td>
                    <td><?= $buku["kategori"] ?></td>
                    <td><?= $buku["author"] ?></td>
                    <td><?= $buku["penerbit"] ?></td>
                    <td><?= $buku["harga"] ?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>