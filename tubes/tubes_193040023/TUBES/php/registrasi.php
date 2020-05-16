<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: sans-serif;
            background: lightgrey;
        }
        
        .form_registrasi {
            box-sizing : border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
            border-radius: 5px 5px 5px 5px;
        }

        .kotak_registrasi{
            width: 350px;
            background: white;
            margin: 80px auto;
            padding: 30px 20px;
            border-radius: 10px 10px 10px 10px;
        }

        .tombol_registrasi{
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

    <div class="kotak_registrasi">
        <form action="" method="post">

            <table>
                <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" class="form_registrasi"></td>
                </tr>
                <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" class="form_registrasi"></td>
                </tr>
            </table>
        <button type="submit" name="register" class="tombol_registrasi">REGISTER</button>

        </form>
    </div>
</body>
</html>

