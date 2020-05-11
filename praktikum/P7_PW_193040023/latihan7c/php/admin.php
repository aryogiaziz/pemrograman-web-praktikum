<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainya
require 'functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>

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

  
      <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
      </div>
    <br>
    <form action="" method="POST">
      <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <table border= "1" cellpadding="10" cellspacing="0">
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
      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="7">
            <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php endif; ?>
    
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

     
    </table>

    <div class="logout">
        <a href="logout.php"><button>Logout</button></a>
      </div>
</body>
</html>