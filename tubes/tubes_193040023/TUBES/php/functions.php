<?php

  // Koneksi database
  function koneksi(){
    $host     = 'localhost';
    $username = 'root';
    $password = '';
    $db       = 'PWprak_193040023';

    $conn = mysqli_connect($host, $username, $password) or die("koneksi DB gagal");
    mysqli_select_db($conn, $db) or die("database tidak ditemukan");
    return $conn;
  }
  // Query
  function query($sql){
    $result = mysqli_query(koneksi(), $sql);   

    $rows = [];

    while ( $row= mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
    }

    return $rows;
  }
// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// fungsi untuk ubah data
function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);
  $harga = htmlspecialchars($data['harga']);
  $sinopsis = htmlspecialchars($data['sinopsis']);

  $query = "UPDATE buku
            SET 
              judul_buku = '$judul_buku', 
              kategori = '$kategori', 
              author = '$author', 
              penerbit = '$penerbit', 
              cover = '$cover',
              harga = '$harga',
              sinopsis = '$sinopsis'
              WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// fungsi untuk menambah data
function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);
  $harga = htmlspecialchars($data['harga']);
  $sinopsis = htmlspecialchars($data['sinopsis']);

  $query = "INSERT INTO
              buku
            VALUES
              (null, '$cover', '$judul_buku', '$kategori', '$author', '$penerbit', '$harga', '$sinopsis')
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
  // cari
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku
              WHERE 
              judul_buku LIKE '%$keyword%' OR 
              kategori LIKE '%$keyword%' OR
              author LIKE '%$keyword%' OR
              penerbit LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// registrasi
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah digunakan');
          </script>";
        return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}


?>