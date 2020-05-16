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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
    
    <!-- my css -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css">

    <title>Halaman Admin</title>
  </head>
<body>

   <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand page-scroll" href="../index.php">ARYOGI AZIZ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="" method="POST">
                  <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
                  <button type="submit" name="cari">Search</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                      <a class="nav-item nav-link page-scroll" href="tambah.php">TAMBAH DATA</a>
                      <a class="nav-item nav-link page-scroll" href="logout.php">LOGOUT</a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Akhir Navbar -->
      

     <!-- halaman admin -->

      <div>
        <h1 style="text-align: center; margin-top: 120px;">SELAMAT DATANG DI HALAMAN ADMIN</h1>
      </div>
   

  <div class="row-mt-1pt-4 pr-2 pl-2 pb-3">
  <div class="col-md-2 pt-5 pl-5"></div>
    <table border= "1" cellpadding="10" cellspacing="0">
      <tr>
          <th><center>No.<center></th>
          <th><center>Opsi<center></th>
          <th><center>Cover<center></th>
          <th><center>Judul<center></th>
          <th><center>Kategori<center></th>
          <th><center>Author<center></th>
          <th><center>Penerbit<center></th>
          <th><center>Harga<center></th>
          <th><center>sinopsis<center></th>
      </tr>
      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="10">
            <h1 style="color: red; font-style: italic;"><center>Data tidak ditemukan<center></h1>
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
          <td><?= $row["sinopsis"]; ?></td>

      </tr>

      <?php endforeach; ?>
 
     
    </table>
    </div>
    </div>


     <!-- footer -->
     <footer class="bg-dark text-white">
      <div class="container">
          <div class="row pt-3">
              <div class="col text-center">
                  <p>Copyright 2020 by Aryogi Aziz. All right reserved.</p>
              </div>
          </div>
      </div>
    </footer>

    <!-- akhir footer -->
   




      <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>