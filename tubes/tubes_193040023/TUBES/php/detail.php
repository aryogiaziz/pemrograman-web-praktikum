<?php
require 'functions.php';

// ambil nrp dari URL
$id = $_GET['id'];

$row = query("SELECT * FROM buku WHERE id = $id") [0];
?>
<!doctype html>
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

    <title>Aryogi Aziz</title>
  </head>
<body>


<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand page-scroll" href="../index.php">ARYOGI AZIZ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                      <a class="nav-item nav-link page-scroll" href="../index.php">KEMBALI</a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Akhir Navbar -->




<section id="gallery" class="gallery">
        <div class="container">
            <div class="head pt-5">
                <h1>DΞTAIL</h1>
            </div>
                    <div class="card text-white bg-dark p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>Judul : <?=$row['judul_buku']; ?></li></p>
                    </blockquote>
                    <div class="card">
                        <img src="../img/<?php echo $row["cover"]; ?>" class="card-img-top" alt="motor" width="60">
                        </div>
                    </div>
                    <div class="card text-white bg-dark p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Kategori : <?=$row['kategori']; ?></p>
                        </blockquote>
                        </div>
                    <div class="card text-white bg-dark p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Author : <?=$row['author']; ?></p>
                        </blockquote>
                        </div>
                    <div class="card text-white bg-dark p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Penerbit : <?=$row['penerbit']; ?></p>
                        </blockquote>
                        </div>
                    <div class="card text-white bg-dark p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Harga : <?=$row['harga']; ?></p>
                        </blockquote>
                        </div>
                    <div class="card text-white bg-dark p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>Sinopsis : <?=$row['sinopsis']; ?></p>
                        </blockquote>
                        </div>
                </div>
            </div>
        </div>
    </section>


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



</body>
</html>

