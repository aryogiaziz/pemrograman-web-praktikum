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
  $judul = htmlspecialchars($data['judul_buku']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE buku
            SET 
              judul_buku = '$judul', 
              kategori = '$kategori', 
              author = '$author', 
              penerbit = '$penerbit', 
              cover = '$cover'
              harga = '$harga'
              WHERE id = '$id'
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

// fungsi untuk menambah data
function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul_buku']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO
              buku
            VALUES
              (null, '$judul', '$kategori', '$author', '$penerbit', '$cover', '$harga')
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>