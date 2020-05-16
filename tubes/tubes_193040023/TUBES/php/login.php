<?php
session_start();
require 'functions.php';


//melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

//login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  //mencocokan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 + 60 +24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 + 60 + 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: sans-serif;
      background: lightgrey;
    }

    .form_login{
      box-sizing : border-box;
      width: 100%;
      padding: 10px;
      font-size: 11pt;
      margin-bottom: 20px;
      border-radius: 5px 5px 5px 5px;
    }

    .kotak_login{
      width: 350px;
      background: white;
      margin: 80px auto;
      padding: 30px 20px;
      border-radius: 10px 10px 10px 10px;
    }

    label{
      font-size: 11pt;
    }

    .tombol_login{
      background: #46de4b;
      color: white;
      font-size: 11pt;
      width: 100%;
      border: none;
      border-radius: 3px;
      padding: 10px 20px;
    }
    
  </style>
</head>
<body>
  
  
    <div class="kotak_login">
      <form action="" method="POST">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">Username atau Password salah!</p>
        <?php endif; ?>

        
        <table>
            <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username" class="form_login"></td>
            </tr>
            <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password" class="form_login"></td>
            </tr>
        </table>
            <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <br>
            <button type="submit" name="submit" class="tombol_login">Login</button>
            <br>
            <div class="registrasi">
                <p>Belum punya akun? registrasi <a href="registrasi.php">disini</a></p>
            </div>

      </form>
    </div>

</body>
</html>
