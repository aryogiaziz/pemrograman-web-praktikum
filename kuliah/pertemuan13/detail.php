<?php
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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
    <li><a href="ubah.php?id=<?= $m['$id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>