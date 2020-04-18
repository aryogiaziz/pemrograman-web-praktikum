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
  <title>193040034</title>
</head>
<body>
<div class="container">
      <?php foreach ($buku as $buku) : ?>
        <p class="nama">
          <a href="../php/detail.php?id=<?= $buku['id'] ?>">
            <?= $buku["judul_buku"] ?>
          </a>
        </p>
      <?php endforeach; ?>
    </div>
</body>
</html>