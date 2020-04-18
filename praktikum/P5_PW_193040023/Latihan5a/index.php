<?php
  
    // melakukan konseksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("konseksi ke DB gagal");

    // memilih database
    mysqli_select_db($conn, "PWprak_193040023") or die("database salah!");

    // query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM buku");

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
        <table cellpadding="10" cellspacing="0" border="1">
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["id"] ?></td>
                    <td><img src="assets/img/<?= $row["cover"]; ?>"></td>
                    <td><?= $row["judul_buku"] ?></td>
                    <td><?= $row["kategori"] ?></td>
                    <td><?= $row["author"] ?></td>
                    <td><?= $row["penerbit"] ?></td>
                    <td><?= $row["harga"] ?></td>
                </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>