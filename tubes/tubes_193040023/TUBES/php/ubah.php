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
<style>
  body {
      font-family: sans-serif;
      background: lightgrey;
    }

    .form_ubah {
      box-sizing : border-box;
      width: 100%;
      padding: 10px;
      font-size: 11pt;
      margin-bottom: 20px;
      border-radius: 5px 5px 5px 5px;
    }

    .kotak_ubah {
      width: 350px;
      background: white;
      margin: 80px auto;
      padding: 30px 20px;
      border-radius: 10px 10px 10px 10px;
    }

    label {
      font-size: 11pt;
    }

    .tombol_ubah {
      font-size: 11pt;
      width: 100%;
      border: none;
      border-radius: 3px;
      padding: 10px 20px;
    }
</style>
<body>
<h3><center> Form Ubah Data Buku </center> </h3>

<div class="kotak_ubah">
      <form action="" method="post">
      <input type="hidden" name="id" value="<?= $buku['id']; ?>">

          <table>
              <tr>
                <td>
                <label for="judul">
                  Judul :
                  <input type="text" name="judul_buku" id="judul" class="form_ubah" autofocus required value="<?= $buku['judul_buku']; ?>">
                </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="kategori">
                    Kategori :
                    <input type="text" name="kategori" id="kategori" class="form_ubah" autofocus required value="<?= $buku['kategori']; ?>">
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="author">
                    Author :
                    <input type="text" name="author" id="author" class="form_ubah" autofocus required value="<?= $buku['author']; ?>">
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="penerbit">
                    Penerbit :
                    <input type="text" name="penerbit" id="penerbit" class="form_ubah" autofocus required value="<?= $buku['penerbit']; ?>">
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="cover">
                    Cover :
                    <input type="text" name="cover" id="cover" class="form_ubah" autofocus required value="<?= $buku['cover']; ?>">
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="harga">
                    Harga :
                    <input type="text" name="harga" id="harga" class="form_ubah" autofocus required value="<?= $buku['harga']; ?>">
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="sinopsis">
                    Sinopsis :
                    <input type="text" name="sinopsis" id="sinopsis" class="form_ubah" autofocus required value="<?= $buku['sinopsis']; ?>">
                  </label>
                </td>
              </tr>
          </table>

    
  
    <button type="submit" name="ubah" class="btn btn-success">Ubah Data!</button>
            <a href="admin.php" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</body>
</html>