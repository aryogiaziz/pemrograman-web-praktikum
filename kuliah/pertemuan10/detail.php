<?php
require 'functions.php';

// ambil nrp dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan nrp
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css(); ?>
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Hahasiswa</h3>
  <ul>
    <li><img src="img/ryo.jpg" width="100"></li>
    <li> NRP : <?= $m['nrp']; ?></li>
    <li> Nama : <?= $m['nama']; ?></li>
    <li> Email : <?= $m['email']; ?></li>
    <li> Jurusan : <?= $m['jurusan']; ?></li> 
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>