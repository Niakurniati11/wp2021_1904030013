<?php

  require 'koneksi.php';

  if (!isset($_GET['id'])) {
    header("location: index.html");
    exit;
  }

  $id = $_GET['id'];
  $camaba = query("SELECT * FROM data_buku WHERE id=$id");
  // var_dump($camaba[0]['nama']);
  ?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Perpustakaan</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
        <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto font-weight-bold">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="buku.php">Data Buku</a>
            <a class="nav-item nav-link" href="anggota.php">Data Anggota</a>
          </div>
        </div>
      </nav>
    </div>
    
    <!--stok-->
    <section class="jumlah">
      <div class="container">
        <br>
        <h3><i class="#"></i> Daftar Buku</h3>
        <hr>
        <ul class="list-group">
          <li class="list-group-item">Judul Buku : <?= $camaba['judul_buku']; ?></li>
          <li class="list-group-item">Pengarang : <?= $camaba['pengarang']; ?></li>
          <li class="list-group-item">Penerbit : <?= $camaba['penerbit']; ?></li>
          <li class="list-group-item">Tahun Terbit : <?= $camaba['tahun_terbit']; ?></li>
          <li class="list-group-item">kode : <?= $camaba['kode']; ?></li>
          <li class="list-group-item">Jumlah Buku : <?= $camaba['jumlah_buku']; ?></li>

          <li class="list-group-item">
            <a href="editbuku.php?id=<?= $camaba['id'];  ?>" class="btn btn-warning" role="button">edit</a> |
            <a href="hapusbuku.php?id=<?= $camaba['id'];  ?>" onclick="return confirm('apakah anda akan menghapus data ini');" class="btn btn-danger" role="button">hapus</a> |
            <a href="buku.php" class="btn btn-primary" role="button">Kembali</a>
          </li>
        </ul>
      </div>
    </section>
  </body>
</html>