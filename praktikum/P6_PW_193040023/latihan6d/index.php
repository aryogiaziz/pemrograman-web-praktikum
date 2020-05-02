<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
    <style>
        img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border= "1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($buku as $row) : ?>
      <tr>
   <td><?= $i++; ?></td>
   <td><img src="img/<?php echo $row["cover"]; ?>" width="60"></td>
   <td><?=$row['judul_buku'];?></td>
   
   <td>
     <a href="php/detail.php?id=<?=$row['id']; ?>">lihat detail</a> 
   </td>
  </tr>
   <?php endforeach; ?>
    </table>
</body>
</html>