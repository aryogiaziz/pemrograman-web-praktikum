<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tambah Data Buku</title>
</head>
<style>
  body {
      font-family: sans-serif;
      background: lightgrey;
    }

    .form_tambahdata {
      box-sizing : border-box;
      width: 100%;
      padding: 10px;
      font-size: 11pt;
      margin-bottom: 20px;
      border-radius: 5px 5px 5px 5px;
    }

    .kotak_tambahdata{
      width: 350px;
      background: white;
      margin: 80px auto;
      padding: 30px 20px;
      border-radius: 10px 10px 10px 10px;
    }

    label{
      font-size: 11pt;
    }

    .tombol_tambahdata{
      font-size: 11pt;
      width: 100%;
      border: none;
      border-radius: 3px;
      padding: 10px 20px;
    }
</style>
<body>
  <h3><center> Form Tambah Data Buku </center> </h3>

  <div class="kotak_tambahdata">
        <form action="" method="post">

            <table>
                <tr>
                  <td>
                  <label>
                    Judul :
                    <input type="text" name="judul_buku" class="form_tambahdata" autofocus required>
                  </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Kategori :
                      <input type="text" name="kategori" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Author :
                      <input type="text" name="author" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Penerbit :
                      <input type="text" name="penerbit" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Cover :
                      <input type="text" name="cover" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Harga :
                      <input type="text" name="harga" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      Sinopsis :
                      <input type="text" name="sinopsis" class="form_tambahdata" autofocus required>
                    </label>
                  </td>
                </tr>
            </table>

        
    
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
      </form>
      <br>
      <br>
      <button type="submit" name="kembali" class="tombol_tambahdata">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
      </div>
  </ul>
  <br>
</body>
</html>



    