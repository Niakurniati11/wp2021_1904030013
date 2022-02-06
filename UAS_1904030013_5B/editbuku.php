<?php

require 'koneksi.php';

$id = $_GET['id'];
$camaba = query ("SELECT * FROM data_buku WHERE id = $id");

// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal diedit');
    </script>";
  }
}
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
    
    <!--edit buku-->
  <div class="container">
  <br></br>
    <form method="POST" action="">
      <input type="hidden" class="form-control" value="<?= $camaba['id'] ?>" name="id">

      <div class="form-group">
        <label for="judul_buku">Judul Buku : </label>
        <input type="text" class="form-control" id="judul_buku" value="<?= $camaba['judul_buku'] ?>" placeholder="judul buku" name="judul_buku" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="pengarang">Pengarang : </label>
        <input type="text" class="form-control" id="pengarang" value="<?= $camaba['pengarang'] ?>" placeholder="pengarang" name="pengarang" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="penerbit">Penerbit : </label>
        <input type="text" class="form-control" id="penerbit" value="<?= $camaba['penerbit'] ?>" placeholder="penerbit" name="penerbit" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="tahun_terbit">Tahun : </label>
        <input type="text" class="form-control" id="tahun_terbit" value="<?= $camaba['tahun_terbit'] ?>" placeholder="tahun terbit" name="tahun_terbit" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="kode">Kode : </label>
        <input type="text" class="form-control" id="kode" value="<?= $camaba['kode'] ?>" placeholder="kode" name="kode" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jumlah_buku">Jumlah : </label>
        <input type="text" class="form-control" id="jumlah_buku" value="<?= $camaba['jumlah_buku'] ?>" placeholder="jumlah buku" name="jumlah_buku" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="edit"> Simpan</button>
    </form>
  </div>

  </body>
</html>