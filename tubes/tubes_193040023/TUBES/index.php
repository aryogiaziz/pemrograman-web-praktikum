<?php
//menghubungkan dengan file php lainya
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="assets/css/stylesheet.css">

    <title>Aryogi Aziz</title>
  </head>
<body>

 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#home">ARYOGI AZIZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="" method="POST">
              <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
              <button type="submit" name="cari">Search</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link active page-scroll" href="../../../index.php">MAIN HOMΞ<span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link page-scroll" href="#contact">CONTACT</a>
                  <a class="nav-item nav-link page-scroll" href="php/login.php">LOGIN</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- jumbotron -->
    <section class="home" id="home">
      <div class="jumbotron jumbotron-fluid bg-success">
          <div class="container">
              <h1 class="display-4">There is no friend <br> as loyal as a <span>book</span>.</h1>
          </div>
      </div>
    </section>
    <!-- akhir jumbotron -->
   

   
    <!-- daftar buku -->

   
      <div class="container">
        <h1 style="margin-top: 30px; margin-bottom: 30px;"><center>My Books</center></h1>

            <br>
            
            <?php if (empty($buku)) : ?>
              <tr>
                <td colspan="7">
                  <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
                </td>
              </tr>
            <?php endif; ?>

            <?php foreach ($buku as $row) : ?>
            
              <div class="card mb-3" style="max-width: 5400px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="img/<?php echo $row["cover"]; ?>" width="300">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?=$row['judul_buku'];?></h5>
                      <p class="card-text"><?=$row['sinopsis'];?></p>
                      <p class="card-text"><a href="php/detail.php?id=<?=$row['id']; ?>">lihat detail</a></p>
                    </div>
                  </div>
                </div>
              </div>
          
            
            <?php endforeach; ?>
            </div>

    <!-- akhir daftar buku -->



    <!-- contact -->
      <section class="contact" id="contact">
            <div class="container">
              <div class="row pt-4 mb-4">
                <div class="col text-center">
                  <h3>Contact</h3>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4">
                  <div class="card text-white mb-3 text-center card3">
                    <div class="card-body">
                      <p class="card-text">For more information, please submit your name, email, phone number and your message here.</p>
                    </div>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item text-center"><h1>Contact Me</h1></li>
                    <li class="list-group-item">Phone : +62 811-801-600</li>
                    <li class="list-group-item">instagram : <a href="https://www.instagram.com/aryogiaz/" target="_blank">@aryogiaz</a></li>
                    <li class="list-group-item">Facebook : <a href="https://www.facebook.com/profile.php?id=100017433643279" target="_blank">Aryogi Aziz</a></li>
                    <li class="list-group-item">LINE : @aryogiaziz</li>
                    <li class="list-group-item">E-Mail : aaryogi@gmail.com</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <form>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                      <label for="messege">Message</label>
                      <textarea name="messege" id="messege" class="form-control" placeholder="Write Your Message Here"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-success tombol">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
    <!-- akhir contact -->

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