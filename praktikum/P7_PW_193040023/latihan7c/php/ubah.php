<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>
<body>
  <h3><center> Form Ubah Data Buku </center> </h3>
  <form action="" method="POST">
  <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
  <ul>
  <li>
  <label>
    Judul :
    <input type="text" name="judul" id="judul"  required value="<?= $buku['judul_buku']; ?>">
  </label>  
  </li>
  <li>
  <label>
    Kategori :
    <input type="text" name="kategori" id="kategori"  required value="<?= $buku['kategori']; ?>">
  </label>  
  </li>
  <li>
  <label>
    Author :
    <input type="text" name="author" id="author"  required value="<?= $buku['author']; ?>">
  </label>  
  </li>
  <li>
  <label>
    Penerbit :
    <input type="text" name="penerbit" id="penerbit"  required value="<?= $buku['penerbit']; ?>">
  </label>  
  </li>
  <li>
  <label>
    Cover
    <input type="text" name="cover" id="cover"  required value="<?= $buku['cover']; ?>">
  </label>  
  </li>
  <li>
  <label>
    harga
    <input type="text" name="harga" id="harga"  required value="<?= $buku['harga']; ?>">
  </label>
  </li>
  <li>
    <button type="submit" name="ubah">Ubah Data </button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
  </ul>
  <br>
</body>
</html>